<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class TypeShowTime extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('type_showtime')->insert([
                [
                    'typest_name'=>"Normal",
		            'extra_typest'=>0
                ],
                [
                    'typest_name'=>"Suất chiếu đặc biệt",
		            'extra_typest'=>30000
                ],[
                    'typest_name'=>"Suất chiếu sớm",
		            'extra_typest'=>30000
                ]
               
            ]);
        
    }
}