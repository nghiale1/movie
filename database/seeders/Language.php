<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class Language extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('language')->insert([
                [
                    'language_name' => 'Anh',
                ],
                [
                    'language_name' => 'Pháp',
                ],
                [
                    'language_name' => 'Việt',
                ]
            ]);
        
    }
}