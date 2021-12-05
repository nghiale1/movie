<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class ShowTime extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($a=16; $a < 30; $a++) {
            for ($i=1; $i < 3; $i++) {
            for ($j=1; $j < 3; $j++) {
                DB::table('showtime')->insert([
                    [
                        'datetime'=>'2021-11-'.$a.' 09:00:00',
                        'id_mv'=>$j,
                        'id_room'=>$i,
                        'id_typest'=>1
                    ],[
                        'datetime'=>'2021-11-'.$a.' 10:00:00',
                        'id_mv'=>$j,
                        'id_room'=>$i,
                        'id_typest'=>1
                    ],[
                        'datetime'=>'2021-11-'.$a.' 11:00:00',
                        'id_mv'=>$j,
                        'id_room'=>$i,
                        'id_typest'=>1
                    ],[
                        'datetime'=>'2021-11-'.$a.' 12:00:00',
                        'id_mv'=>$j,
                        'id_room'=>$i,
                        'id_typest'=>1
                    ],[
                        'datetime'=>'2021-11-'.$a.' 13:00:00',
                        'id_mv'=>$j,
                        'id_room'=>$i,
                        'id_typest'=>1
                    ],

                    [
                        'datetime'=>'2021-11-'.$a.' 14:00:00',
                        'id_mv'=>$j,
                        'id_room'=>$i,
                        'id_typest'=>1
                    ],[
                        'datetime'=>'2021-11-'.$a.' 15:00:00',
                        'id_mv'=>$j,
                        'id_room'=>$i,
                        'id_typest'=>1
                    ],[
                        'datetime'=>'2021-11-'.$a.' 16:00:00',
                        'id_mv'=>$j,
                        'id_room'=>$i,
                        'id_typest'=>1
                    ],[
                        'datetime'=>'2021-11-'.$a.' 17:00:00',
                        'id_mv'=>$j,
                        'id_room'=>$i,
                        'id_typest'=>1
                    ],[
                        'datetime'=>'2021-11-'.$a.' 18:00:00',
                        'id_mv'=>$j,
                        'id_room'=>$i,
                        'id_typest'=>1
                    ],[
                        'datetime'=>'2021-11-'.$a.' 19:00:00',
                        'id_mv'=>$j,
                        'id_room'=>$i,
                        'id_typest'=>1
                    ],[
                        'datetime'=>'2021-11-'.$a.' 20:00:00',
                        'id_mv'=>$j,
                        'id_room'=>$i,
                        'id_typest'=>1
                    ],[
                        'datetime'=>'2021-11-'.$a.' 21:00:00',
                        'id_mv'=>$j,
                        'id_room'=>$i,
                        'id_typest'=>1
                    ],
                ]);
            }
            }
        }

    }
}
