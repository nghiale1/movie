<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class TypeMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $TypeMem = DB::table('type_member')
            ->join('discount','discount.id_discount','type_member.id_discount')
            ->join('benefit','benefit.id_benefit','type_member.id_benefit')
            ->join('membership_card','membership_card.id_memcard','type_member.id_memcard')
            ->get();
        return view('admin.type-member.index', compact('TypeMem'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $discount = DB::table('discount')->get();
        $benefit = DB::table('benefit')->get();
        $membership_card = DB::table('membership_card')->get();
        return view('admin.type-member.add', compact('discount','benefit', 'membership_card'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $typemem_name = $request->typemem_name;
        $id_discount = $request->id_discount;
        $id_benefit = $request->id_benefit;
        $id_memcard = $request->id_memcard;
        try {
            //code...
            DB::table('type_member')->insert(
                [
                    'typemem_name' => $typemem_name,
                    'id_discount' => $id_discount,
                    'id_benefit' => $id_benefit,
                    'id_memcard' => $id_memcard,
                ]
            );
            Session::flash('success','Thêm mới thành công');
            return redirect()->back();
        } catch (\Throwable $th) {
            //throw $th;
            Session::flash('error','Lỗi! Thêm mới không thành công'.'--class TypeMemberController_store');
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
            $typeMemDetail = DB::table('type_member')->where('id_typemem', $id)->first();
            return view('admin.type-member.edit', compact('typeMemDetail'));
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
        $typemem_name = $request->typemem_name;
        $id_discount = $request->id_discount;
        $id_benefit = $request->id_benefit;
        $id_memcard = $request->id_memcard;
        try {
            //code...
            DB::table('type_member')->where('id_typemem', $id)->update(
                [
                    'typemem_name' => $typemem_name,
                    'id_discount' => $id_discount,
                    'id_benefit' => $id_benefit,
                    'id_memcard' => $id_memcard,
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
            DB::table('type_member')->where('id_typemem', $id)->delete();
            Session::flash('success', 'Xóa thành công');
            return redirect()->back();
        } catch (\Throwable $th) {
            //throw $th;
            Session::flash('error', 'Xóa không thành công');
            return redirect()->back();
        }
    }
}
