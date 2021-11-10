<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class ShowTimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $showtime = DB::table('showtime')
            ->join('branch','branch.id_branch','showtime.id_branch')
            ->join('type_showtime','type_showtime.id_typest','showtime.id_typest')
            ->join('movie','movie.id_mv','showtime.id_mv')
            ->get();
        return view('admin.showtime.index', compact('showtime'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $branch = DB::table('branch')->get();
        $type_showtime = DB::table('type_showtime')->get();
        $movie = DB::table('movie')->get();
        return view('admin.showtime.add', compact('branch', 'type_showtime', 'movie'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datetime = $request->datetime;
        $id_branch = $request->id_branch;
        $id_typest = $request->id_typest;
        $id_mv = $request->id_mv;
        try {
            //code...
            DB::table('type_movie')->insert(
                [
                    'datetime' => $datetime,
                    'id_branch' => $id_branch,
                    'id_typest' => $id_typest,
                    'id_mv' => $id_mv
                ]
            );
            Session::flash('success','Thêm mới thành công');
            return redirect()->back();
        } catch (\Throwable $th) {
            //throw $th;
            Session::flash('error','Lỗi! Thêm mới không thành công'.'--class ShowTimeController_store');
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
            $showtimeDetail = DB::table('showtime')->where('id_showtime', $id)->first();
            return view('admin.showtime.edit', compact('showtimeDetail'));
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
        $datetime = $request->datetime;
        $id_branch = $request->id_branch;
        $id_typest = $request->id_typest;
        $id_mv = $request->id_mv;
        try {
            //code...
            DB::table('type_movie')->where('id_typemv', $id)->update(
                [
                    'datetime' => $datetime,
                    'id_branch' => $id_branch,
                    'id_typest' => $id_typest,
                    'id_mv' => $id_mv
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
            DB::table('showtime')->where('id_showtime', $id)->delete();
            Session::flash('success', 'Xóa thành công');
            return redirect()->back();
        } catch (\Throwable $th) {
            //throw $th;
            Session::flash('error', 'Xóa không thành công');
            return redirect()->back();
        }
    }
}
