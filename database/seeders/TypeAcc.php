<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class TypeAcc extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('type_acc')->insert([
                [
                    'type_name'=>"Admin",
                ], [
                    'type_name'=>"Nhân viên",
                ], [
                    'type_name'=>"Khách hàng",
                ],
               
            ]);
        
    }
}