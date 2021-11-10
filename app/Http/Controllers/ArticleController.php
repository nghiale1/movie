<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article = DB::table('article')
        ->join('users','users.id_user','article.id_user')
        ->get();
        return view('admin.article.index', compact('article'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = DB::table('users')->get();
        return view('admin.article.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article_name = $request->article_name;
        $content_artical = $request->content_article;
        $image_artical = $request->image_article;
        $id_user = $request->id_user;
        try {
            //code...
            DB::table('article')->insert(
                [
                    'article_name' => $article_name,
                    'content_artical' => $content_artical,
                    'image_artical' => $image_artical,
                    'id_user' => $id_user
                ]
            );
            Session::flash('success','Thêm mới thành công');
            return redirect()->back();
        } catch (\Throwable $th) {
            //throw $th;
            Session::flash('error','Lỗi! Thêm mới không thành công'.'--class ArticleController_store');
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
            $articleDetail = DB::table('article')->where('id_article', $id)->first();
            return view('admin.article.edit', compact('articleDetail'));
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
        $article_name = $request->article_name;
        $content_artical = $request->content_article;
        $image_artical = $request->image_article;
        $id_user = $request->id_user;
        try {
            //code...
            DB::table('article')->where('id_article', $id)->update(
                [
                    'article_name' => $article_name,
                    'content_artical' => $content_artical,
                    'image_artical' => $image_artical,
                    'id_user' => $id_user
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
            DB::table('article')->where('id_article', $id)->delete();
            Session::flash('success', 'Xóa thành công');
            return redirect()->back();
        } catch (\Throwable $th) {
            //throw $th;
            Session::flash('error', 'Xóa không thành công');
            return redirect()->back();
        }
    }
}
