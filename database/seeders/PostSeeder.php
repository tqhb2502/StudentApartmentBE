<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use \Datetime;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            [
                'user_id' => 1,
                'title' => "Cho thuê phòng trọ 18m2 khép kín sát chợ Hôm ngõ 76 phố Trần Xuân Soạn HBT, full đồ vào ở ngay",
                "address" => "76 phố Trần Xuân Soạn, HBT, Hà Nội",
                "street" => "76 Trần Xuân Soạn",
                "ward" => "Ngô Thì Nhậm",
                "district" => "Hai Bà Trưng",
                "price" => 2800000,
                "land_area" => 18,
                "type" => 1,
                "view_number" => 150,
                "description" => "Cho thuê phòng trọ sát chợ Hôm ngõ 76 phố Trần Xuân Soạn, HBT, Hà Nội.
                DT 18m² khép kín, đầy đủ tiên nghi gồm tủ lạnh, bình nóng lạnh, điều hoà, vs khép kín. Vào ở ngay.
                Thu tiền nhà tháng một lần. Không ở chung với chủ nhà. Ưu tiên cho người đi làm, hay ở một mình.
                Giá 2.8tr/tháng.
                Nhà ko có chỗ để xe máy, khách tự liên hệ chỗ gửi ngay chợ Hôm, giá trên chưa có tiền điện, nước và vệ sinh.
                Cho thuê lâu dài.",
                "bedroom_num" => 1,
                "bathroom_num" => 1,
                "latitude" => 21.01696411765529,
                "longitude" => 105.85215587641993,
                "created_at" => (new DateTime())->modify("- 10 days"),
                "updated_at" => (new DateTime())->modify("- 10 days"),
            ],
            [
                'user_id' => 2,
                'title' => "Chính chủ cần cho thuê gấp nhà riêng mặt ngõ to Trần Khát Chân, ô tô ra vào thoải mái",
                "address" => "Số 21 ngõ 461, Đường Trần Khát Chân, Phường Thanh Nhàn, Hai Bà Trưng, Hà Nội",
                "street" => "461 Trần Khát Chân",
                "ward" => "Thanh Nhàn",
                "district" => "Hai Bà Trưng",
                "price" => 7000000,
                "land_area" => 30,
                "type" => 2,
                "view_number" => 289,
                "description" => "Tôi cần cho thuê nhà số 21 ngõ 461 phố Trần Khát Chân, gần phố Huế, mặt ngõ to, cách đường chính 10m, ôtô đỗ cửa. Thích hợp cho hộ gia đình thuê hoặc làm văn phòng, kinh doanh online thoải mái.
                DT: 30 m² x 2 tầng, 3 mặt thoáng. Bếp, điện, nước tốt, có ĐH, NL, phụ khép kín, chính chủ.
                Giá chỉ 7tr/ tháng (có thương lượng).",
                "bedroom_num" => 3,
                "bathroom_num" => 1,
                "latitude" => 21.008412668682436,
                "longitude" => 105.85333818226412,
                "created_at" => (new DateTime())->modify("- 5 days"),
                "updated_at" => (new DateTime())->modify("- 5 days"),
            ],
            [
                'user_id' => 3,
                'title' => "Chính chủ cho thuê phòng 1K1N hơn 50m2 đủ đồ tại đoạn Trần Đại Nghĩa kéo dài, gần Nguyễn An Ninh",
                "address" => "102 Phố Trần Đại Nghĩa, Phường Đồng Tâm, Hai Bà Trưng, Hà Nội",
                "street" => "102 Trần Đại Nghĩa",
                "ward" => "Đồng Tâm",
                "district" => "Hai Bà Trưng",
                "price" => 7500000,
                "land_area" => 50,
                "type" => 1,
                "view_number" => 287,
                "description" => "Nhà mình còn một phòng tầng 2 trong nhà 3 tầng cần cho thuê.
                Phòng rộng, thoáng (hơn 50m²) thiết kế 1 khách, 1 ngủ, có thể chuyển đổi công năng thành 2 ngủ.
                Nội thất đầy đủ: Điều hoà, nóng lạnh, bếp, sofa, giường tủ (như hình).
                Giá thuê: 7 - 7tr5/tháng.",
                "bedroom_num" => 2,
                "bathroom_num" => 1,
                "latitude" => 20.998174179206124,
                "longitude" => 105.84618766138327,
                "created_at" => (new DateTime())->modify("- 15 days"),
                "updated_at" => (new DateTime())->modify("- 15 days"),
            ],
            [
                'user_id' => 4,
                'title' => "Cho thuê Ký túc xá-sleepbox Minh Khai tiện nghi gần Đại học Kih tế quốc dân, XD, Bk, . Giá từ 1tr5",
                "address" => "160 Minh Khai, Phường Minh Khai, Hai Bà Trưng, Hà Nội",
                "street" => "160 Minh Khai",
                "ward" => "Minh Khai",
                "district" => "Hai Bà Trưng",
                "price" => 1500000,
                "land_area" => 10,
                "type" => 1,
                "view_number" => 500,
                "description" => "Cho thuê Ký túc xá-sleepbox Minh Khai tiện nghi gần Đại học Kih tế quốc dân, XD, Bk, . Giá từ 1tr5
                - Vị trí: Ngõ 160 Minh Khai, cách mặt phố minh Khai 60m đi bộ 2 phút bắt được xe buýt
                - Trang bị bàn học, kệ sách và tủ đồ cá nhân riêng biệt
                - Có bếp chung free
                - Free điện, nước, wifi, máy giặt, máy lạnh
                - Có nhân viên dọn vệ sinh hàng tuần",
                "bedroom_num" => 1,
                "bathroom_num" => 0,
                "latitude" => 20.996060934023543,
                "longitude" => 105.857414,
                "created_at" => (new DateTime())->modify("- 13 days"),
                "updated_at" => (new DateTime())->modify("- 13 days"),
            ],
            [
                'user_id' => 5,
                'title' => "Cho thuê nhà xây mới, công trình phụ khép kín, gần Times City",
                "address" => "421 Đường Minh Khai, Phường Vĩnh Tuy, Hai Bà Trưng, Hà Nội.",
                "street" => "421 Minh Khai",
                "ward" => "Vĩnh Tuy",
                "district" => "Hai Bà Trưng",
                "price" => 3500000,
                "land_area" => 30,
                "type" => 2,
                "view_number" => 500,
                "description" => "Cho thuê nhà trọ, công trình phụ khép kín. Thoáng mát, sáng, có điều hoà, bình nước nóng lạnh, vị trí tiện ích, có chỗ để xe, truyền hình cáp TW. An ninh tốt. Giao thông thuận tiện đầu cầu Vĩnh Tuy, gần Times City. Ra trung tâm TP khoảng 10 phút.
                Giá 3,5tr đồng/tháng trở lên. Đặt cọc trước 1 tháng. Thanh toán 3 tháng/lần. Ưu tiên hộ gia đình & nữ.",
                "bedroom_num" => 1,
                "bathroom_num" => 1,
                "latitude" => 20.997753803465898,
                "longitude" => 105.86682908465419,
                "created_at" => (new DateTime())->modify("- 1 days"),
                "updated_at" => (new DateTime())->modify("- 1 days"),
            ],
            [
                'user_id' => 6,
                'title' => "Cho thuê nhà riêng 4 tầng ở ngõ 191 Đại La - Hai Bà Trưng",
                "address" => "Ngõ 191, Phố Đại La, Phường Trương Định, Hai Bà Trưng, Hà Nội",
                "street" => "191 Đại La",
                "ward" => "Trương Định",
                "district" => "Hai Bà Trưng",
                "price" => 5500000,
                "land_area" => 112,
                "type" => 2,
                "view_number" => 510,
                "description" => "Mình có nhà riêng muốn cho thuê DT 28m² x 4 tầng.
                Giá 5.5 triệu/tháng, gồm 3 phòng ngủ, 3WC, 1PK, 1 bếp. Trong nhà có đầy đủ tiện nghi ĐH, NL, MG, giường, tủ bếp.
                ĐC: Ngõ 191 Đại La.",
                "bedroom_num" => 3,
                "bathroom_num" => 3,
                "latitude" => 20.996349868212928,
                "longitude" => 105.84586108465419,
                "created_at" => (new DateTime())->modify("+ 1 days"),
                "updated_at" => (new DateTime())->modify("+ 1 days"),
            ],
            [
                'user_id' => 7,
                'title' => "Cho thuê nhà riêng 4 tầng ở ngõ 345, Trần Khát Chân",
                "address" => "345 Trần Khát Chân, Thanh Nhàn, Hai Bà Trưng, Hà Nội",
                "street" => "345 Trần Khát Chân",
                "ward" => "Thanh Nhàn",
                "district" => "Hai Bà Trưng",
                "price" => 7000000,
                "land_area" => 88,
                "type" => 2,
                "view_number" => 376,
                "description" => "Cho thuê nhà riêng biệt 4 tầng, 22m²/tầng, có điều hòa các phòng, nóng lạnh, bếp ga âm, máy giặt, nội thất hiện đại, sàn gỗ phòng ngủ.
                Ngõ rộng ô tô đỗ cửa tiện làm VP + ở, điện nước công tơ riêng giá nhà nước.
                ĐC: Ngõ 345, Trần Khát Chân cũ (bây giờ là phố Lạc Nghiệp).
                Giá: 7 tr/tháng.",
                "bedroom_num" => 4,
                "bathroom_num" => 4,
                "latitude" => 21.008948874977467,
                "longitude" => 105.85962525396255,
                "created_at" => (new DateTime())->modify("- 9 days"),
                "updated_at" => (new DateTime())->modify("- 9 days"),
            ],
            [
                'user_id' => 8,
                'title' => "Cho thuê nhà riêng 3 tầng ở ngõ 15, Đê Tô Hoàng",
                "address" => "Ngõ 15, Đường Đê Tô Hoàng, Phường Bạch Mai, Hai Bà Trưng, Hà Nội",
                "street" => "Ngõ 15 Đê Tô Hoàng",
                "ward" => "Bạch Mai",
                "district" => "Hai Bà Trưng",
                "price" => 4500000,
                "land_area" => 30,
                "type" => 2,
                "view_number" => 230,
                "description" => "Cho thuê nhà trọ, công trình phụ khép kín. Thoáng mát, sáng, có điều hoà, bình nước nóng lạnh, vị trí tiện ích, có chỗ để xe, truyền hình cáp TW. An ninh tốt. Giao thông thuận tiện đầu cầu Vĩnh Tuy, gần Times City. Ra trung tâm TP khoảng 10 phút.
                Giá 3,5tr đồng/tháng trở lên. Đặt cọc trước 1 tháng. Thanh toán 3 tháng/lần. Ưu tiên hộ gia đình & nữ.",
                "bedroom_num" => 2,
                "bathroom_num" => 1,
                "latitude" => 21.007243000000006,
                "longitude" => 105.84954325396255,
                "created_at" => (new DateTime())->modify("- 3 days"),
                "updated_at" => (new DateTime())->modify("- 3 days"),
            ],
            [
                'user_id' => 9,
                'title' => "Mới 100%, cho thuê chung cư mini phường Minh Khai đầy đủ nội thất. Còn 1 phòng duy nhất!",
                "address" => "Ngõ 77, Phố 8/3, Phường Minh Khai, Hai Bà Trưng, Hà Nội",
                "street" => "Ngõ 77 8/3",
                "ward" => "Minh Khai",
                "district" => "Hai Bà Trưng",
                "price" => 6000000,
                "land_area" => 33,
                "type" => 3,
                "view_number" => 1009,
                "description" => "Nhà mới hoàn thiện mà không tranh thủ là hết!

                Nhà mới toanh có thang máy hiện đại địa chỉ ở ngõ 77 phố 8/3 phù hợp với gia đình, sinh viên, người đi làm.

                - Phòng có diện tích sử dụng DT 33m² (có ban công riêng rộng rãi phơi đồ thoải mái, có kho chứa đồ riêng).
                Điện 2k8/số. Nước và rác 100k/người/tháng. Dịch vụ 100k/người/tháng. Internet (gồm cả dây và wifi) 100k/phòng/tháng.",
                "bedroom_num" => 1,
                "bathroom_num" => 1,
                "latitude" => 20.998668065287493,
                "longitude" => 105.86044708465418,
                "created_at" => (new DateTime())->modify("- 4 days"),
                "updated_at" => (new DateTime())->modify("- 4 days"),
            ],
            [
                'user_id' => 10,
                'title' => "Chính chủ cho thuê chung cư mini tại Lạc Trung Quận Hai Bà Trưng. Giá từ 6tr/phòng mới 100% đủ đồ",
                "address" => "Số 65 ngõ 19, Phố Lạc Trung, Phường Vĩnh Tuy, Hai Bà Trưng, Hà Nội",
                "street" => "19 Lạc Trung",
                "ward" => "Vĩnh Tuy",
                "district" => "Hai Bà Trưng",
                "price" => 6000000,
                "land_area" => 24,
                "type" => 3,
                "view_number" => 1500,
                "description" => "Chính chủ cho thuê phòng tại: Số 65 ngõ 19 Lạc Trung, Q. Hai Bà Trưng, HN.
                Giá từ: 5tr đến 6tr.
                Phòng mới xây có gác xép, ban công, ô cửa thoáng, có thang máy, hệ thống PCCC tiêu chuẩn theo quy định hiện hành.
                Nội thất:
                Gác xép, điều hòa, nóng lạnh, tủ quần áo, kệ bếp, bếp từ đôi, hút mùi, tủ bếp: Có sẵn.
                Tủ lạnh: Thêm 200K/tháng, máy giặt riêng: Thêm 300k/tháng.
                Dịch vụ:
                Điện: 3,8K/số.
                Nước: 30K/m3.",
                "bedroom_num" => 1,
                "bathroom_num" => 1,
                "latitude" => 21.002986000000003,
                "longitude" => 105.865675,
                "created_at" => (new DateTime())->modify("- 12 days"),
                "updated_at" => (new DateTime())->modify("- 12 days"),
            ],
        ]);
    }
}
