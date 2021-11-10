<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner = DB::table('banner')
            ->join('users','users.id_user','banner.id_user')
            ->join('movie','movie.id_mv','banner.id_mv')
            ->get();
        return view('admin.movie-banner.index', compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = DB::table('users')->get();
        $movie = DB::table('movie')->get();
        return view('admin.movie-banner.add', compact('user','movie'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id_user = $request->id_user;
        $id_movie = $request->id_movie;
        $banner_img = $request->banner_img;
        try {
            //code...
            DB::table('type_member')->insert(
                [
                    'id_user' => $id_user,
                    'id_movie' => $id_movie,
                    'banner_img' => $banner_img
                ]
            );
            Session::flash('success','Thêm mới thành công');
            return redirect()->back();
        } catch (\Throwable $th) {
            //throw $th;
            Session::flash('error','Lỗi! Thêm mới không thành công'.'--class BannerController_store');
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
            $BannerDetail = DB::table('banner')->where('id_banner', $id)->first();
            return view('admin.movie-banner.edit', compact('BannerDetail'));
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
        $id_user = $request->id_user;
        $id_movie = $request->id_movie;
        $banner_img = $request->banner_img;
        try {
            //code...
            DB::table('banner')->where('id_banner', $id)->update(
                [
                    'id_user' => $id_user,
                    'id_movie' => $id_movie,
                    'banner_img' => $banner_img
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
            DB::table('banner')->where('id_banner', $id)->delete();
            Session::flash('success', 'Xóa thành công');
            return redirect()->back();
        } catch (\Throwable $th) {
            //throw $th;
            Session::flash('error', 'Xóa không thành công');
            return redirect()->back();
        }
    }
}
