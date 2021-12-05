<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class Room extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('room')->insert([
                [
                    'room_name'=>"Phòng số 1",
                    'id_branch'=>1
                ],
                [
                    'room_name'=>"Phòng số 1",
                    'id_branch'=>2
                ],[
                    'room_name'=>"Phòng số 1",
                    'id_branch'=>3
                ],[
                    'room_name'=>"Phòng số 2",
                    'id_branch'=>1
                ],[
                    'room_name'=>"Phòng số 2",
                    'id_branch'=>2
                ],[
                    'room_name'=>"Phòng số 2",
                    'id_branch'=>3
                ],[
                    'room_name'=>"Phòng số 3",
                    'id_branch'=>1
                ],[
                    'room_name'=>"Phòng số 3",
                    'id_branch'=>2
                ],[
                    'room_name'=>"Phòng số 3",
                    'id_branch'=>3
                ],
            ]);
        
    }
}