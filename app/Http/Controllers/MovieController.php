<?php

namespace App\Http\Controllers;

use App\Facades\CommonService;
use App\Models\Format;
use App\Models\Language;
use App\Models\Movie;
use App\Models\TypeMovie;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Storage;
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
            ->join('type_movie', 'type_movie.id_typemv', 'movie.id_typemv')
            ->join('language', 'language.id_language', 'movie.id_language')
            ->join('format', 'format.id_format', 'movie.id_format')
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
        return view('admin.movie.add', compact('type_movie', 'language', 'format'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $movie = Movie::create($request->all());
            CommonService::uploadPoster($movie, $request);
            CommonService::uploadTrailer($movie, $request);
            Session::flash('success', 'Thêm mới thành công');
            DB::commit();
            return redirect()->back();
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollback();
            Session::flash('error', 'Lỗi! Thêm mới không thành công' . '--class MovieController_store');
            return redirect()->back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        try {
            $type_movie = TypeMovie::all();
            $language = Language::all();
            $format = Format::all();
            return view('admin.movie.edit', compact('movie', 'type_movie', 'language', 'format'));
        } catch (\Throwable $th) {
            //throw $th;
            Session::flash('error', 'Không vào được trang chi tiết');
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
    public function update(Request $request, Movie $movie)
    {
        try {
            DB::beginTransaction();
            $movie->update(
                $request->all()
            );
            CommonService::uploadPoster($movie, $request);
            CommonService::uploadTrailer($movie, $request);
            Session::flash('success', 'Sửa dữ liệu thành công');
            DB::commit();
            return redirect()->back();
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollback();
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
    public function destroy(Movie $movie)
    {
        try {
            $movie->delete();
            Session::flash('success', 'Xóa thành công');
            return redirect()->back();
        } catch (\Throwable $th) {
            //throw $th;
            Session::flash('error', 'Xóa không thành công');
            return redirect()->back();
        }
    }
}
