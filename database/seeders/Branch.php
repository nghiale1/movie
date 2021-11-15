<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class Branch extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('branch')->insert([
                [
                    'branch_name'=>'CGV Saigonres Nguyễn Xí',
		            'address'=>'Saigonres Plaza, Tầng 4-5,Saigonres Plaza 188, 79-81 Đ. Nguyễn Xí, Phường 26, Bình Thạnh, Thành phố Hồ Chí Minh'
                ],
                [
                    'branch_name'=>'CGV Vincom Đồng Khởi',
		            'address'=>'72 Lê Thánh Tôn, Bến Nghé, Quận 1, Thành phố Hồ Chí Minh'
                ],[
                    'branch_name'=>'CGV Vạn Hạnh Mall',
		            'address'=>'Tầng 6, Vạn Hạnh Mall, 11 Sư Vạn Hạnh, Phường 12, Quận 10, Thành phố Hồ Chí Minh'
                ],
            ]);
        
    }
}