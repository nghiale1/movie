<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class TypeSeatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typeSeat = DB::table('type_seat')->orderBy('id_typeseat','desc')->get();
        return view('admin.type-seat.index', compact('typeSeat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.type-seat.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $typeseat_name = $request->typeseat_name;
        $extra_typeseat = $request->extra_typeseat;
        try {
            //code...
            DB::table('type_seat')->insert(
                [
                    'typeseat_name' => $typeseat_name,
                    'extra_typeseat' => $extra_typeseat
                ]
            );
            Session::flash('success','Thêm mới thành công');
            return redirect()->back();
        } catch (\Throwable $th) {
            //throw $th;
            Session::flash('error','Lỗi! Thêm mới không thành công'.'--class TypeSeatController_store');
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
            $typeSeatDetail = DB::table('type_seat')->where('id_typeseat', $id)->first();
            return view('admin.type-seat.edit', compact('typeSeatDetail'));
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
        $typeseat_name = $request->type_name;
        $extra_typeseat = $request->extra_typeseat;
        try {
            //code...
            DB::table('type_seat')->where('id_typeseat', $id)->update(
                [
                    'typeseat_name' => $typeseat_name,
                    'extra_typeseat' => $extra_typeseat
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
            DB::table('type_seat')->where('id_typeseat', $id)->delete();
            Session::flash('success', 'Xóa thành công');
            return redirect()->back();
        } catch (\Throwable $th) {
            //throw $th;
            Session::flash('error', 'Xóa không thành công');
            return redirect()->back();
        }
    }
}
