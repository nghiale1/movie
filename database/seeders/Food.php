<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class Food extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('food')->insert([
                [
                    'food_name'=>'HOT FOOD K-TASTE',
                    'food_price'=>65000,
                    'status'=>1
                ],[
                    'food_name'=>'Bắp',
                    'food_price'=>55000,
                    'status'=>1
                ],[
                    'food_name'=>'Nước ngọt',
                    'food_price'=>75000,
                    'status'=>1
                ],
               
            ]);
        
    }
}