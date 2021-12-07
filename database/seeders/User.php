<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('users')->insert([
                [
                    'username'=>'admin',
                    'password'=>Hash::make('admin'),
                    'name'=>'admin',
                    'id_type'=>1,
                    'id_branch'=>1
                ],
                [
                    'username'=>'ducln',
                    'password'=>Hash::make('123'),
                    'name'=>'Lê Ngọc Đức',
                    'id_type'=>3,
                    'id_branch'=>1
                ]

            ]);

    }
}
