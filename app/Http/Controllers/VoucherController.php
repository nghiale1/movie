<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class VoucherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $voucher = DB::table('voucher')->orderBy('id_voucher','desc')->get();
        return view('admin.voucher.index', compact('voucher'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.voucher.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $voucher_name = $request->voucher_name;
        $detail_voucher = $request->detail_voucher;
        try {
            //code...
            DB::table('voucher')->insert(
                [
                    'voucher_name' => $voucher_name,
                    'detail_voucher' => $detail_voucher
                ]
            );
            Session::flash('success','Thêm mới thành công');
            return redirect()->back();
        } catch (\Throwable $th) {
            //throw $th;
            Session::flash('error','Lỗi! Thêm mới không thành công'.'--class VoucherController_store');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            //code...
            $voucherDetail = DB::table('voucher')->where('id_voucher', $id)->first();
            return view('admin.voucher.edit', compact('voucherDetail'));
        } catch (\Throwable $th) {
            //throw $th;
            Session::flash('error','Không vào được trang chi tiết');
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $voucher_name = $request->voucher_name;
        $detail_voucher = $request->detail_voucher;
        try {
            //code...
            DB::table('voucher')->where('id_voucher', $id)->update(
                [
                    'voucher_name' => $voucher_name,
                    'detail_voucher' => $detail_voucher
                ]
            );
            Session::flash('success', 'Sửa dữ liệu thành công');
            return redirect()->back();
        } catch (\Throwable $th) {
            //throw $th;
            Session::flash('error', 'Sửa dữ liệu không thành công');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            //code...
            DB::table('voucher')->where('id_voucher', $id)->delete();
            Session::flash('success', 'Xóa thành công');
            return redirect()->back();
        } catch (\Throwable $th) {
            //throw $th;
            Session::flash('error', 'Xóa không thành công');
            return redirect()->back();
        }
    }
}
