<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class Banner extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('banner')->insert([
                [
                    'banner_img'=>'poster/pannadau-980x448.jpeg',
                ],[
                    'banner_img'=>'poster/the-suicide-squad-all-star-980wx448h.jpeg',
                ],[
                    'banner_img'=>'poster/rollingbanner-980wx448h.jpeg',
                ],
               
            ]);
        
    }
}