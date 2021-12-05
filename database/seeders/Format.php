<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class Format extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('format')->insert([
                [
                    'format_name'=>"2D",
                ], [
                    'format_name'=>"3D",
                ]
               
            ]);
        
    }
}