<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class Movie extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('movie')->insert([
                [
                    'mv_name'=>'LẬT MẶT: 48H',
                    'director'=>'Lý Hải',
                    'perfomer'=>'Võ Thành Tâm, Mạc Văn Khoa, Huỳnh Đông',
                    'timemv'=>'110 phút',
                    'mv_content'=>'Lý Hải trở lại với dòng phim hành động sở trường của mình. Bối cảnh hoành tráng với sự đầu tư nghiêm túc, siêu phẩm hành động Việt Lật Mặt 48h sẽ kể về một hành trình trốn chạy đầy kịch tính, nghẹt thở đến phút cuối cùng.',
                    'image'=>'poster/poster_lat_mat_4_160421_1__2.jpeg',
                    'trailer'=>'trailer/LẬT MẶT_ 48H _ KHỞI CHIẾU TẠI RẠP_ 16.04.2021.mp4',
                    'made_in'=>'Việt Nam',
                    'date_start'=>'2021-11-12',
                    'date_end'=>'2021-12-30',
                    'subdub'=>1,
                    'id_typemv'=>1,
                    'id_language'=>3,
                    'id_format'=>1,
                ],
                [
                    'mv_name'=>'ÁN TỬ TRÊN XE',
                    'director'=>'KIM Changju',
                    'perfomer'=>'JO Woo Jin, LEE Jae-in, JIN Kyung và JI Changwook',
                    'timemv'=>'94 phút',
                    'mv_content'=>'Sung-gyu (JO Woo Jin), một giám đốc ngân hàng đang trên đường đi làm với 2 đứa con thì bất ngờ nhận được một cuộc gọi bí ẩn. Người gọi đe doạ đã gài bom trong xe, và cảnh báo bom sẽ phát nổ nếu bất cứ ai rời khỏi ghế ngồi… Sung-gyu lúc đầu cho rằng đó là một cuộc gọi lừa đảo, nhưng khi xe đồng nghiệp của anh phát nổ, anh nhận ra điều này là thật. Như thể vẫn chưa đủ, cảnh sát truy đuổi Sung-gyu vì nghi ngờ anh là kẻ chủ mưu của vụ nổ bom. Sung-gyu gần như tuyệt vọng trước tình thế nghìn cân treo sợi tóc vì không thể ngắt cuộc gọi của kẻ bí ẩn và phải tìm cách giữ an toàn cho những đứa con của mình…',
                    'image'=>'poster/main-poster-01_hh_1_.jpeg',
                    'trailer'=>'trailer/yt5s.com-ÁN TỬ TRÊN XE trailer - KC tại CGV_ 12.11.2021.mp4',
                    'made_in'=>'Hàn Quốc',
                    'subdub'=>1,
                    'date_start'=>'2021-11-12',
                    'date_end'=>'2021-12-30',
                    'id_typemv'=>1,
                    'id_language'=>3,
                    'id_format'=>1,
                ],[
                    'mv_name'=>'HUNG THẦN TRẮNG',
                    'director'=>'Martin Wilson',
                    'perfomer'=>'Katrina Bowden, Aaron Jakubenko, Tim Kano, Kimie Tsukakoshi, Te Kohe Tuhaka',
                    'timemv'=>'91 phút',
                    'mv_content'=>'Bộ phim kể về vụ truy sát kinh hoàng bởi loài cá mập trắng khổng lồ diễn ra tại Hell’s Reef, cách xa bờ 200 dặm đã khiến nhiều người thiệt mạng. Trước khi án mạng xảy ra, chuyến đi có Kaz và Charlie – đôi tình nhân lâu năm, đồng thời là những người điều hành thủy phi cơ. Ba vị khách của họ là doanh nhân người Nhật, Joji cùng vợ – Michelle và đầu bếp Benny. Tuy nhiên, vào lúc phát hiện ra thi thể của một người đàn ông chỉ còn lại phần thân đã trầy xước cùng những vết cắn được Charlie (một cựu sinh viên ngành sinh vật biển) xác nhận là do cá mập gây ra, kỳ nghỉ trong mơ bỗng biến thành thảm kịch khi cả 5 người phải giành giật sự sống chỉ với một chiếc phao cứu hộ giữa biển cả mênh mông và kẻ săn mồi trực diện chính là hung thần khát máu thống trị đại dương.',
                    'image'=>'poster/great-white-poster-hung-than-trang.jpeg',
                    'trailer'=>'trailer/yt5s.com-HUNG THẦN TRẮNG trailer - KC tại CGV_ 29.10.2021.mp4',
                    'made_in'=>'Mỹ',
                    'subdub'=>1,
                    'date_start'=>'2021-10-29',
                    'date_end'=>'2021-12-30',
                    'id_typemv'=>5,
                    'id_language'=>3,
                    'id_format'=>1,
                ],
                
            ]);
        
    }
}