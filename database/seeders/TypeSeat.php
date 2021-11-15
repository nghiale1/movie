<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class TypeSeat extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('type_seat')->insert([
                [
                    'typeseat_name'=>"Vip",
		            'extra_typeseat'=>1
                ],
                [
                    'typeseat_name'=>"Thường",
		            'extra_typeseat'=>0
                ],
            ]);
        
    }
}