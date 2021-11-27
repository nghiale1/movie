<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class TypeMember extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('type_member')->insert([
                [
                    'typemem_name'=>'Thành viên bạc',
                    'id_discount',
                    'id_benefit',
                    'id_memcard'
                ],
               
            ]);
        
    }
}