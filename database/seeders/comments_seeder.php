<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class comments_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comments = [
            ['Sản phẩm tuyệt vời!', 'Tôi đã mua sản phẩm này gần đây và nó vượt qua mong đợi của tôi. Chất lượng tuyệt vời và vừa vặn hoàn hảo. Rất nên mua!', 5, 1, 1],
            ['Không tệ', 'Sản phẩm này ổn, nhưng nó không đáp ứng đầy đủ mong đợi của tôi. Có thể cần cải thiện ở một số khía cạnh. Trung bình chung.', 3, 2, 2],
            ['Xuất sắc!', 'Đây là một sản phẩm xuất sắc! Tôi rất hài lòng với quyết định mua của mình. Các tính năng và chất lượng đỉnh cao.', 5, 3, 3],
            ['Có thể cải thiện', 'Sản phẩm tốt, nhưng vẫn có những điểm cần cải thiện. Tôi mong đợi chất lượng tốt hơn với mức giá này.', 2, 4, 4],
            ['Tuyệt vời!', 'Tôi hoàn toàn ấn tượng với sản phẩm này! Nó tuyệt vời ở mọi khía cạnh - thiết kế, thoải mái và chất lượng. Chắc chắn đáng đầu tư.', 5, 5, 5],
            ['Hài lòng với mua sắm', 'Tôi hài lòng với quyết định mua hàng của mình. Sản phẩm đáp ứng mong đợi và được giao đúng thời gian. Trải nghiệm tổng thể tốt.', 4, 6, 6],
            ['Thoải mái khi mặc', 'Sản phẩm không chỉ đẹp mắt mà còn thoải mái khi mặc. Tôi hạnh phúc với lựa chọn của mình và nó đã trở thành sản phẩm yêu thích của tôi.', 5, 7, 7],
            ['Chất lượng đỉnh cao', 'Sản phẩm có chất lượng cao và tôi có thể thấy rằng sự chú ý đến chi tiết đã được đặt vào quá trình sản xuất. Tôi sẽ mua từ thương hiệu này nữa.', 4, 8, 8],
            ['Yêu thiết kế', 'Tôi yêu thiết kế của sản phẩm này! Nó nổi bật và tôi đã nhận được nhiều lời khen. Một sự bổ sung tuyệt vời cho bộ sưu tập của tôi.', 5, 9, 9],
            ['Vừa vặn hoàn hảo', 'Sản phẩm vừa vặn hoàn hảo! Bảng kích thước chính xác và nó trông và cảm giác tuyệt vời. Hài lòng với quyết định mua của mình.', 5, 10, 10],
            ['Ấn tượng!', 'Tôi thực sự ấn tượng với chất lượng và sự khéo léo của sản phẩm này. Nó vượt qua mong đợi của tôi và tôi rất khuyến khích.', 5, 1, 2],
            ['Không khuyến nghị', 'Thật không may, tôi không thể khuyến nghị sản phẩm này. Chất lượng không đạt được mong đợi và tôi gặp vấn đề với độ bền.', 2, 3, 3],
            ['Thiết kế độc đáo', 'Sản phẩm có một thiết kế độc đáo và bắt mắt. Nó tạo điểm nhấn cho tủ quần áo của tôi. Tuy nhiên, vật liệu có thể chịu được hơn.', 4, 5, 5],
            ['Giá trị tuyệt vời', 'Với giá này, sản phẩm mang lại giá trị tuyệt vời. Nó đã giữ được tốt qua thời gian và tôi hài lòng với độ bền và hiệu suất chung.', 4, 7, 7],
            ['Mua sắm thất vọng', 'Tôi hối tiếc về quyết định mua này. Sản phẩm không đáp ứng mô tả và tôi gặp vấn đề với kích thước và màu sắc.', 1, 9, 9],
            ['Thời trang và thoải mái', 'Sản phẩm này kết hợp thời trang và thoải mái một cách hoàn hảo. Đây là sự lựa chọn hàng đầu của tôi cho cả các dịp thông thường và trang trí. Được khuyến khích.', 5, 2, 4],
            ['Sản phẩm trung bình', 'Sản phẩm này trung bình về chất lượng và thiết kế. Nó đáp ứng mục đích sử dụng của nó nhưng không nổi bật. Một mua hàng ổn định cho việc sử dụng hàng ngày.', 3, 6, 8],
            ['Tuyệt vời cho tập luyện', 'Tôi sử dụng sản phẩm này cho các buổi tập luyện và nó hoạt động tốt. Chất liệu chống ẩm giữ cho tôi thoải mái trong các buổi tập cường độ cao. Một mua hàng tốt!', 4, 8, 10],
            ['Sự lựa chọn màu sắc độc đáo', 'Tôi đánh giá cao sự đa dạng của các màu sắc cho sản phẩm này. Nó giúp tôi thể hiện phong cách cá nhân của mình. Sự vừa vặn cũng thoải mái.', 4, 10, 6],
        ];

        foreach ($comments as $comment) {
            DB::table('comments')->insert([
                'title' => $comment[0],
                'content' => $comment[1],
                'rating' => $comment[2],
                'product_id' => $comment[3],
                'user_id' => $comment[4],
            ]);
        }
    }
}