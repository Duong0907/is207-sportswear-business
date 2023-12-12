<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class products_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'product_name' => 'Nike Killshot 2 Leather',
                'product_price' => 2779000,
                'rating' => 4,
                'purchasing_quantity' => 100,
                'quantity' => 50,
                'product_description' => 'Nhanh hơn 1, 2, 3 - đôi giày thể thao gốc giúp bạn dễ dàng đi và bắt đầu. Hệ thống EasyOn đặc trưng giúp bạn trải nghiệm không sử dụng tay, trong khi da mịn mang màu trắng tinh khôi tạo điểm nhấn hoàn hảo. Đúng vậy, nó là tất cả những gì bạn yêu thích và hơn thế nữa.',
                'product_object_id' => 1,
                'product_type_id' => 3,
            ],
            [
                'product_name' => 'Paris Saint-Germain',
                'product_price' => 1169000,
                'rating' => 5,
                'purchasing_quantity' => 150,
                'quantity' => 30,
                'product_description' => 'Thể hiện phong cách lớn với chiếc áo PSG này. Thiết kế rộng rãi, với họa tiết voi động trên toàn bộ và huy hiệu PSG tạo nên một diện mạo nổi bật.',
                'product_object_id' => 1,
                'product_type_id' => 1,
            ],
            [
                'product_name' => 'Nike Dri-FIT Challenger',
                'product_price' => 919000,
                'rating' => 3,
                'purchasing_quantity' => 120,
                'quantity' => 40,
                'product_description' => 'Thiết kế cho chạy, tập luyện và yoga, quần Dri-FIT Challenger của chúng tôi giữ cho bạn nhẹ nhàng và thoáng khí với kiểu dáng thoải mái giúp bạn tận hưởng tối đa chuyển động của mình. Chúng tôi thiết kế chúng không chỉ cho việc chạy, mà còn có túi thoải mái không làm kích thích khi bạn chuyển từ đường chạy sang phòng tập.',
                'product_object_id' => 1,
                'product_type_id' => 2,
            ],
            [
                'product_name' => 'Nike Everyday Lightweight',
                'product_price' => 450000,
                'rating' => 4,
                'purchasing_quantity' => 80,
                'quantity' => 20,
                'product_description' => 'Vượt qua bài tập của bạn với tất Nike Everyday. Sợi mềm với công nghệ chống mồ hôi giúp giữ cho đôi chân của bạn thoải mái và khô ráo.',
                'product_object_id' => 1,
                'product_type_id' => 4,
            ],
            [
                'product_name' => 'Nike Indy',
                'product_price' => 1279000,
                'rating' => 5,
                'purchasing_quantity' => 90,
                'quantity' => 15,
                'product_description' => 'Bạn không cần phải gián đoạn ngày của mình với việc thay đổi trang phục. Có tất cả trong chiếc áo tank top này có sẵn bra Indy tích hợp. Chất liệu mềm mại, co giãn siêu cao giúp bạn thoải mái, trong khi dây đeo mảnh và có thể điều chỉnh làm cho chiếc áo của bạn trở nên linh hoạt. Với 2 miếng lót có thể tháo rời, bạn có thể chọn độ che phủ phù hợp để sẵn sàng điều chỉnh giữa công ty, phòng tập, bữa trưa và thậm chí là dạo chơi với bạn bè trong khi vẫn giữ mát nhờ công nghệ chống mồ hôi.',
                'product_object_id' => 2,
                'product_type_id' => 1,
            ],
            [
                'product_name' => 'Nike Dunk Low',
                'product_price' => 3239000,
                'rating' => 4,
                'purchasing_quantity' => 110,
                'quantity' => 25,
                'product_description' => 'Tạo ra cho sân cỏ nhưng mang lại đường phố, biểu tượng bóng rổ thập kỷ 80 trở lại với các chi tiết cổ điển và phong cách hoặc. Họa tiết kẻ ô thêm một diện mạo không lỗi thời mà bạn sẽ chọn mỗi mùa. Cổ điển, đế thấp giữ cho diện mạo của bạn thoải mái như nó đáng yêu.',
                'product_object_id' => 2,
                'product_type_id' => 3,
            ],
            [
                'product_name' => 'Nike Fly Crossover',
                'product_price' => 1069000,
                'rating' => 5,
                'purchasing_quantity' => 70,
                'quantity' => 10,
                'product_description' => 'Đây là trò chơi của bạn, và chưa bao giờ là lúc chơi tốt hơn. Làm từ ít nhất 75% polyester tái chế, quần này rộng ở chân và hông, với một eo an toàn và thoải mái và chiều dài độ ưu tiên.',
                'product_object_id' => 2,
                'product_type_id' => 2,
            ],
            [
                'product_name' => 'Nike Everyday Plus',
                'product_price' => 459000,
                'rating' => 3,
                'purchasing_quantity' => 60,
                'quantity' => 30,
                'product_description' => 'Vượt qaua bài tập của bạn với tất Nike Everyday Cushioned. Đế dày terry mang lại sự thoải mái cho các bài tập chân và nhảy, trong khi dải cổ chân có rãnh ôm chặt phía giữa chân giúp cảm giác hỗ trợ.',
                'product_object_id' => 2,
                'product_type_id' => 4,
            ],
            [
                'product_name' => 'Nike Air Max 90 LTR',
                'product_price' => 2549000,
                'rating' => 5,
                'purchasing_quantity' => 80,
                'quantity' => 18,
                'product_description' => 'Nike Air Max 90 LTR trở lại với cảm giác tốt hơn cho bạn. Lớp đệm mềm mại và linh hoạt hơn, đơn vị Max Air được điều chỉnh cho đôi chân đang phát triển và hình dáng giúp đôi chân ngón cái của bạn có thêm không gian thoải mái. Với thiết kế và kiểu dáng vẫn giữ nguyên, nó mang đến cho thế hệ mới một biểu tượng từ thập kỷ 90.',
                'product_object_id' => 3,
                'product_type_id' => 3,
            ],
            [
                'product_name' => 'Nike Sportswear',
                'product_price' => 559000,
                'rating' => 4,
                'purchasing_quantity' => 100,
                'quantity' => 22,
                'product_description' => 'Chúng tôi chia sẻ một trong những địa điểm yêu thích của chúng tôi với bạn. Mount Hood chỉ là một trong những khu vui chơi tự nhiên chúng tôi may mắn có gần trụ sở của Nike ở Oregon. Làm từ bông mềm, chiếc áo thun cổ điển này hoàn hảo để khám phá các công viên và khu vực thiên nhiên trong khu vực địa phương của bạn.',
                'product_object_id' => 3,
                'product_type_id' => 1,
            ],
            [
                'product_name' => 'Nike Dri-FIT Multi+',
                'product_price' => 769000,
                'rating' => 4,
                'purchasing_quantity' => 100,
                'quantity' => 22,
                'product_description' => 'Cho dù bạn đang đi tập thể dục, tập luyện nhóm hay đơn giản là leo núi với bạn bè, quần Nike Dri-FIT Multi+ Training Shorts giúp bạn làm điều đó thoải mái. Và mồ hôi? Với chất liệu nhẹ, thấm mồ hôi của chúng tôi, đó không phải là điều bạn cần phải lo lắng. Được thiết kế để giúp bạn giữ mát, chúng là sự lựa chọn cho tất cả mọi thứ vui vẻ.',
                'product_object_id' => 3,
                'product_type_id' => 2,
            ],
        ]);
    }
}