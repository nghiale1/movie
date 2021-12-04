<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Showtime;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use Session;
class ShowTimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $datetime=Showtime::select(DB::raw('DATE(datetime) as date'))
        ->groupBy('date')
        ->orderBy('date','desc')
        ->get();
        $request->datetime??$request->merge(['datetime'=>$datetime[0]->date??'all']);
        $myid_branch=Auth::user()->id_branch;

        
        $room=Room::with('showtime')->where('id_branch', $myid_branch);
        
        $request->datetime!='all'&&$room =$room->whereHas('showtime', function($q) use ($request){
            $q->whereDate('datetime', $request->datetime);
        });
        $room =$room->get();
// dd($room[0]->showtimebyDate('2021-12-05'));
        $showtime = Showtime::with('room.branch')->whereHas('room.branch', function($q) use ($myid_branch){
            $q->where('id_branch', $myid_branch);
        });
        $request->datetime!='all'&&$showtime =$showtime->whereDate('datetime',$request->datetime);
        $showtime =$showtime->get();
        return view('admin.showtime.index', compact('showtime','datetime','request','room'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $branch = DB::table('branch')->where('id_branch',Auth::user()->id_branch)->first();
        $room=Room::where('id_branch',$branch->id_branch)->get();
        $type_showtime = DB::table('type_showtime')->get();
        $movie = DB::table('movie')->get();
        return view('admin.showtime.add', compact('branch', 'type_showtime', 'movie','room'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            Showtime::create($request->all());
           
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
    public function edit(Showtime $showtime)
    {
        try {
            $branch = DB::table('branch')->where('id_branch',Auth::user()->id_branch)->first();
        $room=Room::where('id_branch',$branch->id_branch)->get();
        $type_showtime = DB::table('type_showtime')->get();
        $movie = DB::table('movie')->get();
            return view('admin.showtime.edit', compact('showtime','branch', 'type_showtime', 'movie','room'));
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
    public function update(Request $request, Showtime $showtime)
    {
        try {
            $showtime->update($request->all());
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
    public function destroy(Showtime $showtime)
    {
        try {
            //TODO
            // DB::table('showtime')->where('id_showtime', $id)->delete();
            Session::flash('success', 'Xóa thành công');
            return redirect()->back();
        } catch (\Throwable $th) {
            //throw $th;
            Session::flash('error', 'Xóa không thành công');
            return redirect()->back();
        }
    }
}
