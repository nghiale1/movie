<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movie = DB::table('movie')
            ->join('type_movie','type_movie.id_typemv','movie.id_typemv')
            ->join('language','language.id_language','movie.id_language')
            ->join('format','format.id_format','movie.id_format')
            ->get();
        return view('admin.movie.index', compact('movie'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type_movie = DB::table('type_movie')->get();
        $language = DB::table('language')->get();
        $format = DB::table('format')->get();
        return view('admin.movie.add', compact('type_movie','language', 'format'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id_typemv = $request->id_typemv;
        $id_language = $request->id_language;
        $id_format = $request->id_format;
        $mv_name = $request->mv_name;
        $director = $request->director;
        $performers = $request->performers;
        $time_mv = $request->time_mv;
        $mv_content = $request->mv_content;
        $image = $request->image;
        $trailer = $request->trailer;
        $made_in = $request->made_in;
        $sub = $request->sub;
        $dup = $request->dup;
        $date_start = $request->date_start;
        $date_end = $request->date_end;
        try {
            DB::table('movie')->insert(
                [
                    'id_typemv' => $id_typemv,
                    'id_language' => $id_language,
                    'id_format' => $id_format,
                    'mv_name' => $mv_name,
                    'director' => $director,
                    'performers' => $performers,
                    'time_mv' => $time_mv,
                    'mv_content' => $mv_content,
                    'image' => $image,
                    'trailer' => $trailer,
                    'made_in' => $made_in,
                    'sub' => $sub,
                    'dup' => $dup,
                    'date_start' => $date_start,
                    'date_end' => $date_end
                ]
            );
            Session::flash('success','Thêm mới thành công');
            return redirect()->back();
        } catch (\Throwable $th) {
            //throw $th;
            Session::flash('error','Lỗi! Thêm mới không thành công'.'--class MovieController_store');
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
            $MovieDetail = DB::table('movie')->where('id_mv', $id)->first();
            return view('admin.movie.edit', compact('MovieDetail'));
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
        $id_typemv = $request->id_typemv;
        $id_language = $request->id_language;
        $id_format = $request->id_format;
        $mv_name = $request->mv_name;
        $director = $request->director;
        $performers = $request->performers;
        $time_mv = $request->time_mv;
        $mv_content = $request->mv_content;
        $image = $request->image;
        $trailer = $request->trailer;
        $made_in = $request->made_in;
        $sub = $request->sub;
        $dup = $request->dup;
        $date_start = $request->date_start;
        $date_end = $request->date_end;
        try {
            //code...
            DB::table('movie')->where('id_mv', $id)->update(
                [
                    'id_typemv' => $id_typemv,
                    'id_language' => $id_language,
                    'id_format' => $id_format,
                    'mv_name' => $mv_name,
                    'director' => $director,
                    'performers' => $performers,
                    'time_mv' => $time_mv,
                    'mv_content' => $mv_content,
                    'image' => $image,
                    'trailer' => $trailer,
                    'made_in' => $made_in,
                    'sub' => $sub,
                    'dup' => $dup,
                    'date_start' => $date_start,
                    'date_end' => $date_end
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
            DB::table('movie')->where('id_mv', $id)->delete();
            Session::flash('success', 'Xóa thành công');
            return redirect()->back();
        } catch (\Throwable $th) {
            //throw $th;
            Session::flash('error', 'Xóa không thành công');
            return redirect()->back();
        }
    }
}