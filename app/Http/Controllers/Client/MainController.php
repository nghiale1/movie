<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;
use DB;
use Carbon\Carbon;
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

    public function booking($id, Request $request) {
        $movie = Movie::join('type_movie','type_movie.id_typemv','movie.id_typemv')->where('movie.id_mv',$id)->first();
        $getBooking = DB::table('showtime')->join('movie','movie.id_mv','showtime.id_mv')
                    ->join('room','room.id_room','showtime.id_room')->where('movie.id_mv',$id)
                    ->select(DB::raw('DATE(datetime) as date'))
                    ->groupBy('datetime')
                    ->get();
        $branch = DB::table('branch')->get();
        // dd($getBooking);
        return view('client.booking', compact('movie','branch'));
    }

    public function getRoomAjax($idBranch, $idMovie) {
        $data = DB::table('showtime')->join('room','room.id_room','showtime.id_room')->join('branch','branch.id_branch','room.id_branch')
            ->where('id_mv', $idMovie)
            ->whereDate('datetime','2021-11-16')
            ->get();
        return response()->json($data, 200);
    }

    public function getSeat($idShowtime) {
        $dataSt = DB::table('showtime')->where('id_st', $idShowtime)->first();
        $movie = DB::table('showtime')->join('movie','movie.id_mv','showtime.id_mv')->where('showtime.id_st',$idShowtime)->first();
        $seatList = DB::table('seat')->where('id_room', $dataSt->id_room)->orderByRaw('LENGTH(seat_name)', 'ASC')->orderBy('seat_name','asc')->get();
        // dd($seatList);
        return view('client.chose-seat', compact('movie','seatList'));
    }
}
