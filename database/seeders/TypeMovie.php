<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class TypeMovie extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('type_movie')->insert([
                [
                    'typemv_name' => 'Hành động',
                ],
                [
                    'typemv_name' => 'Tình cảm',
                ],
                [
                    'typemv_name' => 'Viễn tưởng',
                ],
                [
                    'typemv_name' => 'Hoạt hình',
                ],
                [
                    'typemv_name' => 'Kinh dị',
                ],
                [
                    'typemv_name' => 'Hài',
                ],
            ]);
        
    }
}