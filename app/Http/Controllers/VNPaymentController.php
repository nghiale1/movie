<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Session;
use Auth;
use Carbon\Carbon;
class VNPaymentController extends Controller
{
    public function create(Request $request)
    {
        $now = Carbon::now();
        $username = Auth::user()->id_user;

        $payment = DB::table('payment')->insertGetId(
            [
                'total' => $request->total,
                'creat_at' => Carbon::now(),
                'id_user' => $username,
                'id_st' => $request->id_st
            ]
        );
        $arrSeat = $request->seatChosed;
        $arrFood = $request->foodChosed;
        $seatQuery = explode(',', $arrSeat[0]);
        $foodQuery = explode(',', $arrFood[0]);
        foreach ($seatQuery as $key => $value) {
            # code...
            $getPrice = DB::table('fare')->first();
            $insertTicketDetail = DB::table('detail_ticket_mv')->insert(
                [
                    'dtmv_price' => $getPrice->price,
                    'id_st' => $request->id_st,
                    'id_seat' => $value,
                    'id_pay' => $payment
                ]
            );
        }

        foreach ($foodQuery as $key => $value) {
            # code...
            $priceFood = DB::table('food')->where('id_food', $value)->first()->food_price;
            $insertTicketDetail = DB::table('ticket_food')->insert(
                [
                    'id_food' => $value,
                    'id_pay' => $payment,
                    'price_food' => $priceFood
                ]
            );
        }

        // session(['cost_id' => $request->id]);
        // session(['url_prev' => url()->previous()]);
        $vnp_TmnCode = "UDOPNWS1"; //Mã website tại VNPAY
        $vnp_HashSecret = "EBAHADUGCOEWYXCMYZRMTMLSHGKNRPBN"; //Chuỗi bí mật
        $vnp_Url = "http://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = 'http://127.0.0.1:8000/chon-ghe/'.$request->id_st;
        $vnp_TxnRef = $payment; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = "Thanh toán hóa đơn dịch vụ xem phim";
        $vnp_OrderType = 'billpayment';

        $vnp_Amount =  $request->total * 100;
        $vnp_Locale = 'vn';
        $vnp_IpAddr = request()->ip();

        $inputData = array(
            "vnp_Version" => "2.0.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
        );

        // if (isset($vnp_BankCode) && $vnp_BankCode != "") {
        //     $inputData['vnp_BankCode'] = $vnp_BankCode;
        // }
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . $key . "=" . $value;
            } else {
                $hashdata .= $key . "=" . $value;
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
           // $vnpSecureHash = md5($vnp_HashSecret . $hashdata);
            $vnpSecureHash = hash('sha256', $vnp_HashSecret . $hashdata);
            $vnp_Url .= 'vnp_SecureHashType=SHA256&vnp_SecureHash=' . $vnpSecureHash;
        }
        return redirect($vnp_Url);
    }

    public function return(Request $request)
    {
        $url = session('url_prev','/');
        if($request->vnp_ResponseCode == "00") {
            $this->apSer->thanhtoanonline(session('cost_id'));
            Cart::clear();
            return redirect($url)->with('success' ,'Đã thanh toán phí dịch vụ');
        }
        session()->forget('url_prev');
        return redirect($url)->with('errors' ,'Lỗi trong quá trình thanh toán phí dịch vụ');
        // dd($url);
    }
}
