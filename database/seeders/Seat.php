<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class Seat extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 10; $i++) {
            for ($j=1; $j < 12; $j++) {
                DB::table('seat')->insert([
                    [
                        'seat_name'=>"A".$j,
                        'id_typeseat'=>2,
                        'id_room'=>$i,
                        'seat_row' => 1
                    ],
                    [
                        'seat_name'=>"B".$j,
                        'id_typeseat'=>2,
                        'id_room'=>$i,
                        'seat_row' => 2
                    ],[
                        'seat_name'=>"C".$j,
                        'id_typeseat'=>2,
                        'id_room'=>$i,
                        'seat_row' => 3
                    ],[
                        'seat_name'=>"D".$j,
                        'id_typeseat'=>2,
                        'id_room'=>$i,
                        'seat_row' => 4
                    ],[
                        'seat_name'=>"E".$j,
                        'id_typeseat'=>1,
                        'id_room'=>$i,
                        'seat_row' => 5
                    ],[
                        'seat_name'=>"F".$j,
                        'id_typeseat'=>1,
                        'id_room'=>$i,
                        'seat_row' => 6
                    ],[
                        'seat_name'=>"G".$j,
                        'id_typeseat'=>1,
                        'id_room'=>$i,
                        'seat_row' => 7
                    ],[
                        'seat_name'=>"H".$j,
                        'id_typeseat'=>1,
                        'id_room'=>$i,
                        'seat_row' => 8
                    ],[
                        'seat_name'=>"J".$j,
                        'id_typeseat'=>1,
                        'id_room'=>$i,
                        'seat_row' => 9
                    ],
                ]);
            }
        }

    }
}
