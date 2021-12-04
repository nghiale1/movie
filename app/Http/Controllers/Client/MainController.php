<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;
class MainController extends Controller
{
    public function index() {
        return view('client.index');
    }

    public function movieList() {
        $movie = Movie::join('type_movie','type_movie.id_typemv','movie.id_typemv')->get();
        // dd($movie);
        return view('client.movie', compact('movie'));
    }

    public function movieDetail($id) {
        $movie = Movie::join('type_movie','type_movie.id_typemv','movie.id_typemv')->where('movie.id_mv',$id)->first();
        return view('client.movie-detail', compact('movie'));
        // dd($movie);
    }
}
