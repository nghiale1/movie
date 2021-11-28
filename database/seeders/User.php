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
            DB::table('user')->insert([
                [
                    'username',
                    'email',
                    'password',
                    'name',
                    'birthday',
                    'sex',
                    'address',
                    'date_of_birth',
                    'phone_number',
                    'email_verified_at',
                    'points',
                    'id_type',
                    'id_typemem',
                    'id_voucher',
                    'remember_token',
                    'id_branch'
                ]
               
            ]);
        
    }
}