INSERT INTO product_objects (object_name) VALUES
    ('Nam'),
    ('Nữ'),
    ('Trẻ em'),
    ('Unisex');

INSERT INTO product_types (type_name) VALUES
    ('Áo'),
    ('Quần'),
    ('Giày'),
    ('Tất');

-- Insert data into images table
insert into images (image_link) values
    ('https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/4df45491-65fe-4c7f-84a9-0bfa2c93510b/dri-fit-challenger-23cm-unlined-versatile-shorts-D1Js7f.png'),
    ('https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/592c52f6-8b09-496d-a342-5fe87ff1276e/air-max-90-ltr-older-shoes-9xnt2B.png'),
    ('https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/023a9856-a174-4e28-b03f-c044cb7ee2e4/dunk-low-shoes-Xw10x1.png'),
    ('https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/ee4f3427-51fb-4084-a0d8-39ee713bd4f7/indy-bra-tank-top-0hQmBW.png'),
    ('https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/018aeba7-416d-4b67-8c9e-86f2ed6817c3/everyday-cushioned-training-low-socks-VNb5d4.png'),
    ('https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/8b72e766-2b7a-4fe1-8647-4ee1eb90887b/fly-crossover-basketball-shorts-52n0P6.png'),
    ('https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/bivbbt0saypjw0mimm9x/everyday-lightweight-training-crew-socks-Gvl3WS.png'),
    ('https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/jlhsgro2k4kjkczi63qt/killshot-2-leather-shoe-DqWZ4j.png');

-- Insert data into colors table
insert into colors (color_name, hex_code) values
    ('Trắng', '#ffffff'),
    ('Đen', '#000000'),
    ('Xanh', '#0000ff'),
    ('Đỏ', '#ff0000'),
    ('Vàng', '#ffff00'),
    ('Xám', '#808080'),
    ('Cam', '#ffa500'),
    ('Xanh lá cây', '#008000'),
    ('Xanh dương', '#00ffff'),
    ('Tím', '#800080'),
    ('Nâu', '#a52a2a'),
    ('Hồng', '#ffc0cb'),
    ('Bạc', '#c0c0c0')

-- Insert data into sizes table
insert into sizes (size_name) values
    ('XS'),
    ('S'),
    ('M'),
    ('L'),
    ('XL'),
    ('XXL'),
    ('XXXL'),
    ('38'),
    ('39'),
    ('40'),
    ('41'),
    ('42'),
    ('43'),
    ('44');

-- Insert data into products table
INSERT INTO products (product_name, product_price, rating, purchasing_quantity, quantity, product_description, product_object_id, product_type_id) VALUES
    ('Nike Killshot 2 Leather', 2779000, 4, 100, 50, 'Nhanh hơn 1, 2, 3 - đôi giày thể thao gốc giúp bạn dễ dàng đi và bắt đầu. Hệ thống EasyOn đặc trưng giúp bạn trải nghiệm không sử dụng tay, trong khi da mịn mang màu trắng tinh khôi tạo điểm nhấn hoàn hảo. Đúng vậy, nó là tất cả những gì bạn yêu thích và hơn thế nữa.', 1, 3),
    ('Paris Saint-Germain', 1169000, 5, 150, 30, 'Thể hiện phong cách lớn với chiếc áo PSG này. Thiết kế rộng rãi, với họa tiết voi động trên toàn bộ và huy hiệu PSG tạo nên một diện mạo nổi bật.', 1, 1),
    ('Nike Dri-FIT Challenger', 919000, 3, 120, 40, 'Thiết kế cho chạy, tập luyện và yoga, quần Dri-FIT Challenger của chúng tôi giữ cho bạn nhẹ nhàng và thoáng khí với kiểu dáng thoải mái giúp bạn tận hưởng tối đa chuyển động của mình. Chúng tôi thiết kế chúng không chỉ cho việc chạy, mà còn có túi thoải mái không làm kích thích khi bạn chuyển từ đường chạy sang phòng tập.', 1, 2),
    ('Nike Everyday Lightweight', 450000, 4, 80, 20, 'Vượt qua bài tập của bạn với tất Nike Everyday. Sợi mềm với công nghệ chống mồ hôi giúp giữ cho đôi chân của bạn thoải mái và khô ráo.', 1, 4),
    ('Nike Indy', 1279000, 5, 90, 15, 'Bạn không cần phải gián đoạn ngày của mình với việc thay đổi trang phục. Có tất cả trong chiếc áo tank top này có sẵn bra Indy tích hợp. Chất liệu mềm mại, co giãn siêu cao giúp bạn thoải mái, trong khi dây đeo mảnh và có thể điều chỉnh làm cho chiếc áo của bạn trở nên linh hoạt. Với 2 miếng lót có thể tháo rời, bạn có thể chọn độ che phủ phù hợp để sẵn sàng điều chỉnh giữa công ty, phòng tập, bữa trưa và thậm chí là dạo chơi với bạn bè trong khi vẫn giữ mát nhờ công nghệ chống mồ hôi.', 2, 1),
    ('Nike Dunk Low', 3239000, 4, 110, 25, 'Tạo ra cho sân cỏ nhưng mang lại đường phố, biểu tượng bóng rổ thập kỷ 80 trở lại với các chi tiết cổ điển và phong cách hoặc. Họa tiết kẻ ô thêm một diện mạo không lỗi thời mà bạn sẽ chọn mỗi mùa. Cổ điển, đế thấp giữ cho diện mạo của bạn thoải mái như nó đáng yêu.', 2, 3),
    ('Nike Fly Crossover', 1069000, 5, 70, 10, 'Đây là trò chơi của bạn, và chưa bao giờ là lúc chơi tốt hơn. Làm từ ít nhất 75% polyester tái chế, quần này rộng ở chân và hông, với một eo an toàn và thoải mái và chiều dài độ ưu tiên.', 2, 2),
    ('Nike Everyday Plus', 459000, 3, 60, 30, 'Vượt qaua bài tập của bạn với tất Nike Everyday Cushioned. Đế dày terry mang lại sự thoải mái cho các bài tập chân và nhảy, trong khi dải cổ chân có rãnh ôm chặt phía giữa chân giúp cảm giác hỗ trợ.', 2, 4),
    ('Nike Air Max 90 LTR', 2549000, 5, 80, 18, 'Nike Air Max 90 LTR trở lại với cảm giác tốt hơn cho bạn. Lớp đệm mềm mại và linh hoạt hơn, đơn vị Max Air được điều chỉnh cho đôi chân đang phát triển và hình dáng giúp đôi chân ngón cái của bạn có thêm không gian thoải mái. Với thiết kế và kiểu dáng vẫn giữ nguyên, nó mang đến cho thế hệ mới một biểu tượng từ thập kỷ 90.', 3, 3),
    ('Nike Sportswear', 559000, 4, 100, 22, 'Chúng tôi chia sẻ một trong những địa điểm yêu thích của chúng tôi với bạn. Mount Hood chỉ là một trong những khu vui chơi tự nhiên chúng tôi may mắn có gần trụ sở của Nike ở Oregon. Làm từ bông mềm, chiếc áo thun cổ điển này hoàn hảo để khám phá các công viên và khu vực thiên nhiên trong khu vực địa phương của bạn.', 3, 1),
    ('Nike Dri-FIT Multi+', 769000, 4, 100, 22, 'Cho dù bạn đang đi tập thể dục, tập luyện nhóm hay đơn giản là leo núi với bạn bè, quần Nike Dri-FIT Multi+ Training Shorts giúp bạn làm điều đó thoải mái. Và mồ hôi? Với chất liệu nhẹ, thấm mồ hôi của chúng tôi, đó không phải là điều bạn cần phải lo lắng. Được thiết kế để giúp bạn giữ mát, chúng là sự lựa chọn cho tất cả mọi thứ vui vẻ.', 3, 2);


-- Insert data into product_images table
INSERT INTO product_images (product_id, image_id) VALUES
    (1, 1),
    (2, 2),
    (3, 3),
    (4, 4),
    (5, 5),
    (6, 6),
    (7, 7),
    (8, 8),
    (9, 1),
    (10, 2),
    (1, 3),
    (2, 4),
    (3, 5),
    (4, 6),
    (5, 7),
    (6, 8),
    (7, 1),
    (8, 2),
    (9, 3),
    (10, 4);

-- Insert data into product_colors table
INSERT INTO product_colors (product_id, color_id) VALUES
    (1, 1),
    (2, 2),
    (3, 3),
    (4, 4),
    (5, 5),
    (6, 6),
    (7, 7),
    (8, 8),
    (9, 9),
    (10, 10),
    (1, 11),
    (2, 12),
    (3, 13),
    (4, 14),
    (5, 15),
    (6, 16),
    (7, 17),
    (8, 18),
    (9, 19),
    (10, 20);

-- Insert data into product_sizes table
INSERT INTO product_sizes (product_id, size_id) VALUES
    (1, 1),
    (2, 2),
    (3, 3),
    (4, 4),
    (5, 5),
    (6, 6),
    (7, 7),
    (8, 8),
    (9, 9),
    (10, 10),
    (1, 11),
    (2, 12),
    (3, 13),
    (4, 14);

-- Insert data into discounts table
INSERT INTO discounts (start_date, end_date, discount_percent) VALUES
    ('2023-01-01', '2023-01-15', 10),
    ('2023-02-01', '2023-02-28', 15),
    ('2023-03-05', '2023-03-20', 8),
    ('2023-04-10', '2023-04-25', 12),
    ('2023-05-15', '2023-05-31', 18),
    ('2023-06-01', '2023-06-30', 10),
    ('2023-07-05', '2023-07-20', 15),
    ('2023-08-01', '2023-08-31', 20),
    ('2023-09-10', '2023-09-25', 8),
    ('2023-10-01', '2023-10-15', 12);

-- Insert data into discount_products table
INSERT INTO discount_products (discount_id, product_id) VALUES
    (1, 1), -- Apply discount 1 to product 1
    (2, 2), -- Apply discount 2 to product 2
    (3, 3),
    (4, 4),
    (5, 5),
    (6, 6),
    (7, 7),
    (8, 8),
    (9, 9),
    (10, 10);


-- Insert data into users table
INSERT INTO users (username, password, email, phonenumber, address, is_admin) VALUES
    ('JohnDoe', 'password123', 'john@example.com', '1234567890', '123 Main St', true),
    ('JaneDoe', 'pass456', 'jane@example.com', '9876543210', '456 Oak St', false),
    ('BobSmith', 'bobpass', 'bob@example.com', '5551234567', '789 Pine St', false),
    ('AdminUser', 'adminpass', 'admin@example.com', '9998887777', '456 Admin St', true),
    ('AliceJohnson', 'alicepass', 'alice@example.com', '1112223333', '789 Maple St', false),
    ('CharlieBrown', 'charliepass', 'charlie@example.com', '4445556666', '321 Cedar St', false),
    ('EvaMartinez', 'evapass', 'eva@example.com', '7778889999', '456 Birch St', false),
    ('SamWilson', 'sampass', 'sam@example.com', '6667778888', '987 Elm St', false),
    ('LucyMiller', 'lucypass', 'lucy@example.com', '2223334444', '654 Oak St', false),
    ('MikeJohnson', 'mikepass', 'mike@example.com', '3334445555', '789 Willow St', false);

-- Thêm dữ liệu vào bảng comments
INSERT INTO comments (title, content, rating, product_id, user_id) VALUES
    ('Sản phẩm tuyệt vời!', 'Tôi đã mua sản phẩm này gần đây và nó vượt qua mong đợi của tôi. Chất lượng tuyệt vời và vừa vặn hoàn hảo. Rất nên mua!', 5, 1, 1),
    ('Không tệ', 'Sản phẩm này ổn, nhưng nó không đáp ứng đầy đủ mong đợi của tôi. Có thể cần cải thiện ở một số khía cạnh. Trung bình chung.', 3, 2, 2),
    ('Xuất sắc!', 'Đây là một sản phẩm xuất sắc! Tôi rất hài lòng với quyết định mua của mình. Các tính năng và chất lượng đỉnh cao.', 5, 3, 3),
    ('Có thể cải thiện', 'Sản phẩm tốt, nhưng vẫn có những điểm cần cải thiện. Tôi mong đợi chất lượng tốt hơn với mức giá này.', 2, 4, 4),
    ('Tuyệt vời!', 'Tôi hoàn toàn ấn tượng với sản phẩm này! Nó tuyệt vời ở mọi khía cạnh - thiết kế, thoải mái và chất lượng. Chắc chắn đáng đầu tư.', 5, 5, 5),
    ('Hài lòng với mua sắm', 'Tôi hài lòng với quyết định mua hàng của mình. Sản phẩm đáp ứng mong đợi và được giao đúng thời gian. Trải nghiệm tổng thể tốt.', 4, 6, 6),
    ('Thoải mái khi mặc', 'Sản phẩm không chỉ đẹp mắt mà còn thoải mái khi mặc. Tôi hạnh phúc với lựa chọn của mình và nó đã trở thành sản phẩm yêu thích của tôi.', 5, 7, 7),
    ('Chất lượng đỉnh cao', 'Sản phẩm có chất lượng cao và tôi có thể thấy rằng sự chú ý đến chi tiết đã được đặt vào quá trình sản xuất. Tôi sẽ mua từ thương hiệu này nữa.', 4, 8, 8),
    ('Yêu thiết kế', 'Tôi yêu thiết kế của sản phẩm này! Nó nổi bật và tôi đã nhận được nhiều lời khen. Một sự bổ sung tuyệt vời cho bộ sưu tập của tôi.', 5, 9, 9),
    ('Vừa vặn hoàn hảo', 'Sản phẩm vừa vặn hoàn hảo! Bảng kích thước chính xác và nó trông và cảm giác tuyệt vời. Hài lòng với quyết định mua của mình.', 5, 10, 10),
    ('Ấn tượng!', 'Tôi thực sự ấn tượng với chất lượng và sự khéo léo của sản phẩm này. Nó vượt qua mong đợi của tôi và tôi rất khuyến khích.', 5, 1, 2),
    ('Không khuyến nghị', 'Thật không may, tôi không thể khuyến nghị sản phẩm này. Chất lượng không đạt được mong đợi và tôi gặp vấn đề với độ bền.', 2, 3, 3),
    ('Thiết kế độc đáo', 'Sản phẩm có một thiết kế độc đáo và bắt mắt. Nó tạo điểm nhấn cho tủ quần áo của tôi. Tuy nhiên, vật liệu có thể chịu được hơn.', 4, 5, 5),
    ('Giá trị tuyệt vời', 'Với giá này, sản phẩm mang lại giá trị tuyệt vời. Nó đã giữ được tốt qua thời gian và tôi hài lòng với độ bền và hiệu suất chung.', 4, 7, 7),
    ('Mua sắm thất vọng', 'Tôi hối tiếc về quyết định mua này. Sản phẩm không đáp ứng mô tả và tôi gặp vấn đề với kích thước và màu sắc.', 1, 9, 9),
    ('Thời trang và thoải mái', 'Sản phẩm này kết hợp thời trang và thoải mái một cách hoàn hảo. Đây là sự lựa chọn hàng đầu của tôi cho cả các dịp thông thường và trang trí. Được khuyến khích.', 5, 2, 4),
    ('Sản phẩm trung bình', 'Sản phẩm này trung bình về chất lượng và thiết kế. Nó đáp ứng mục đích sử dụng của nó nhưng không nổi bật. Một mua hàng ổn định cho việc sử dụng hàng ngày.', 3, 6, 8),
    ('Tuyệt vời cho tập luyện', 'Tôi sử dụng sản phẩm này cho các buổi tập luyện và nó hoạt động tốt. Chất liệu chống ẩm giữ cho tôi thoải mái trong các buổi tập cường độ cao. Một mua hàng tốt!', 4, 8, 10),
    ('Sự lựa chọn màu sắc độc đáo', 'Tôi đánh giá cao sự đa dạng của các màu sắc cho sản phẩm này. Nó giúp tôi thể hiện phong cách cá nhân của mình. Sự vừa vặn cũng thoải mái.', 4, 10, 6);





















	Tên sản phẩm	Link1	link2	link3	link4	Mô tả	object	type	color
1	"Nike Dri-FIT Legend
Men's Long-Sleeve Fitness Top"	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/5a0d2f80-0c67-4914-aac0-645558427422/dri-fit-legend-mens-long-sleeve-fitness-top-StC1Ng.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/77dd9307-78a4-4cab-b2fb-ccd12c782901/dri-fit-legend-mens-long-sleeve-fitness-top-StC1Ng.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/d3b21377-be68-49fe-9578-1409dc86f0c1/dri-fit-legend-mens-long-sleeve-fitness-top-StC1Ng.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/ed0a6362-d4d0-49df-92a4-9d5339b398d5/dri-fit-legend-mens-long-sleeve-fitness-top-StC1Ng.png	Huyền thoại thấm mồ hôi trở lại với diện mạo và cảm nhận được cập nhật. Nó mềm mại theo mọi cách, với kiểu dáng thoải mái hơn, lỏng lẻo hơn so với các phiên bản trước để bạn có thể thực hiện các lần lặp lại của mình mà không bị lỡ nhịp.	1	1	5
2	"Nike Pro
Men's Dri-FIT Slim Long-Sleeve Fitness Top"	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/36272c04-343a-4737-8bec-198a4770154e/pro-mens-dri-fit-slim-long-sleeve-fitness-top-NzQkf4.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/2ee9d4e5-ffd3-4ac7-ac66-89d56df7afc8/pro-mens-dri-fit-slim-long-sleeve-fitness-top-NzQkf4.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/dd3517f9-077a-40ac-939c-d4c74f9cddfc/pro-mens-dri-fit-slim-long-sleeve-fitness-top-NzQkf4.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/b3ed8bc6-8747-47b7-b936-a66697c43ff4/pro-mens-dri-fit-slim-long-sleeve-fitness-top-NzQkf4.png	Bộ sưu tập Nike Pro mang lại cảm giác tự tin trong bất kỳ giai đoạn nào của hành trình tập luyện mà bạn thấy mình. Chiếc áo thun dài tay dáng ôm này mang lại cảm giác mịn màng và co giãn cho các môn thể thao và hoạt động mà bạn yêu thích.	1	1	1
3	"Nike DNA
Men's Dri-FIT Basketball Jersey"	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/91612184-959a-49c7-a868-5c03d59104eb/dna-mens-dri-fit-basketball-jersey-xtDlbb.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/62eb0787-1b27-4d0c-80fe-b9c7b5f19ee2/dna-mens-dri-fit-basketball-jersey-xtDlbb.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/035573b8-4348-4c18-a117-f43544d74a80/dna-mens-dri-fit-basketball-jersey-xtDlbb.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/a7446f2d-1bda-45c7-980f-5ac9197ab3a4/dna-mens-dri-fit-basketball-jersey-xtDlbb.png	Hãy sẵn sàng lên sàn vì bóng rổ không bao giờ dừng lại với chiếc áo Nike DNA. Mát mẻ, nhẹ và bền, thiết kế vừa vặn thoải mái được làm bằng lưới thoáng khí giúp bạn luôn mát mẻ trong khi cải thiện trò chơi của mình.	1	1	2
4	"Jordan Sport
Men's Graphic T-Shirt"	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/47c78f7d-eb07-4644-b86e-fb24fe96a2ad/jordan-sport-mens-graphic-t-shirt-qKfmNJ.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/cbbee872-919d-4145-ae9f-4c9de85637af/jordan-sport-mens-graphic-t-shirt-qKfmNJ.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/a28e0685-77dc-4f86-99a8-3aeb31add5d3/jordan-sport-mens-graphic-t-shirt-qKfmNJ.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/d917546a-4f58-46ea-8f92-d11d2bf9ff20/jordan-sport-mens-graphic-t-shirt-qKfmNJ.png	Áo Jordan tươi mới trở nên sống động ở mặt trước và mặt sau của chiếc áo phông thoải mái này. Nó được cải tiến với công nghệ thấm mồ hôi, vì vậy bạn sẵn sàng chơi bóng hoặc biểu diễn nhào lộn quanh thị trấn—bạn sẽ trông như nghệ sĩ hạng A	1	1	8
5	"Ja Standard Issue
Men's Dri-FIT Pullover Basketball Hoodie"	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/a0d80f84-f133-456c-a75e-a99b3900663a/ja-standard-issue-mens-dri-fit-pullover-basketball-hoodie-Tl35hk.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/6cb6e89a-c916-419d-b853-6dcb5f9093b9/ja-standard-issue-mens-dri-fit-pullover-basketball-hoodie-Tl35hk.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/cb95444c-d083-43fb-9b2b-a66a2f6de837/ja-standard-issue-mens-dri-fit-pullover-basketball-hoodie-Tl35hk.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/a10471e5-4bd3-4746-8217-1e49aff48d1f/ja-standard-issue-mens-dri-fit-pullover-basketball-hoodie-Tl35hk.png	Ja Morant là một siêu sao tự thân lập nghiệp. Rời xa ánh đèn sân khấu, Ja lớn lên không mệt mỏi với trò chơi của mình trên sân sau nhà ở Nam Carolina. Từ vô danh trở thành ngôi sao toàn năng, Nike kỷ niệm hành trình của mình bằng bộ sưu tập trang phục đặc trưng này. Công nghệ Nike Dri-FIT di chuyển mồ hôi ra khỏi da để bay hơi nhanh hơn, giúp bạn khô ráo và thoải mái. Áo hoodie mềm Standard Issue của chúng tôi mang đến cảm giác vừa vặn thoải mái cùng với logo đặc trưng của Ja.	1	1	8
6	"Nike Sportswear Classic
Women's T-Shirt"	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/2ce74b3e-519e-4ea8-a71c-96331b624ddd/sportswear-classic-womens-t-shirt-qNvM9M.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/c1ef9223-04fb-4e83-a068-9f1a9bb9cbc0/sportswear-classic-womens-t-shirt-qNvM9M.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/3c86842c-57e1-4b16-997a-5689dd8257f9/sportswear-classic-womens-t-shirt-qNvM9M.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/38ebcb2c-07b6-42fc-85de-1aad5323942e/sportswear-classic-womens-t-shirt-qNvM9M.png	Chất liệu cotton dày mang lại cho bạn cảm giác có cấu trúc và cao cấp, trong khi đường may hình hộp và đường may trễ vai tạo cảm giác thoải mái mà không có cảm giác quá rộng. Cổ điển và vượt thời gian—chiếc áo phông này làm được tất cả.	2	1	1
7	"Nike Yoga Luxe
Women's Infinalon Crop Top"	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/bb367ae8-7562-4d2e-9bf0-9804c7cfd3ce/yoga-luxe-womens-infinalon-crop-top-xgmCVX.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/0c8e6710-062a-4849-9d4f-f14d9c948b9d/yoga-luxe-womens-infinalon-crop-top-xgmCVX.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/4677d36d-c8d2-47eb-b764-d1b00e9e6ec5/yoga-luxe-womens-infinalon-crop-top-xgmCVX.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/aebc74f2-94e8-4106-8915-9da400bfdac8/yoga-luxe-womens-infinalon-crop-top-xgmCVX.png	Nike Yoga Luxe Crop Top được làm bằng vải Nike Infinalon cho cảm giác mềm mại, co giãn và mịn màng không thể cưỡng lại được đồng thời mang lại cảm giác nén nhẹ nhàng khi bạn thở, giãn cơ và di chuyển.	2	1	6
8	"Jordan Flight Fleece
Women's Crewneck Sweatshirt"	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/89001e4b-d83d-4610-91e4-09ea6f3a73f5/jordan-flight-fleece-womens-crewneck-sweatshirt-rtRM9K.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/bde03a3f-7594-4e17-b8e4-ce2fee6c9149/jordan-flight-fleece-womens-crewneck-sweatshirt-rtRM9K.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/ed4e1849-1ecf-4499-a6f3-38f57e59f7bb/jordan-flight-fleece-womens-crewneck-sweatshirt-rtRM9K.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/fe7121e8-44d9-4768-9652-7be7b0aa4c49/jordan-flight-fleece-womens-crewneck-sweatshirt-rtRM9K.png	Gặp gỡ chiếc áo len yêu thích mới của bạn. Cái mà bạn lôi ra khỏi đống quần áo bẩn vì quá tốt để không mặc thêm một lần nào nữa. (Sẽ không ai biết.) Siêu mềm với kiểu dáng hơi quá khổ và độ phồng ở tay áo, rất dễ mặc và hoàn hảo để mặc nhiều lớp.	2	1	11
9	"Nike Shine Long Sleeve Tee
Little Kids T-Shirt"	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/9dcb5029-7910-4645-967c-aed4e8d1e31c/shine-long-sleeve-tee-little-kids-t-shirt-VGskVH.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/ca089335-b311-4db6-b0c9-2dfe21d67faa/shine-long-sleeve-tee-little-kids-t-shirt-VGskVH.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/53bf5a29-f46c-498c-b60a-1ecb5c09fa30/shine-long-sleeve-tee-little-kids-t-shirt-VGskVH.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/7f9a7fc8-a269-4d94-b0ea-a602cc34b9d6/shine-long-sleeve-tee-little-kids-t-shirt-VGskVH.png	Những đứa trẻ sống theo bản năng "Cứ làm đi"; cuộc sống, và thông điệp được hiển thị ở mặt trước của chiếc áo phông vừa vặn thông thường này, được làm bằng vải dệt kim jersey mịn với đường viền cổ không có thẻ để mang lại cảm giác thoải mái, dễ mặc, tay áo dài có cổ tay có gân mang lại cảm giác ấm cúng và thiết kế đơn giản giúp bạn dễ dàng phối đồ. bất kỳ chiếc quần Nike nào hoặc chiếc quần jean yêu thích của họ để có vẻ ngoài vượt thời gian.	3	1	1
10	"Nike
Little Kids' Pullover Hoodie"	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/bab05669-297b-41d8-85c4-8cb5cd812aba/little-kids-pullover-hoodie-QZbmXZ.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/065d9ac7-0436-4ebb-b2f1-11f63e8a086e/little-kids-pullover-hoodie-QZbmXZ.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/0d0e1168-ce90-4604-8806-b6df2e4e3dd1/little-kids-pullover-hoodie-QZbmXZ.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/312c1529-659c-4021-8e18-19ea42d432d7/little-kids-pullover-hoodie-QZbmXZ.png	Áo hoodie Nike có tất cả những gì mà các bạn nhỏ mong muốn. Vải terry Pháp mềm mại với kiểu dáng rộng rãi, rộng rãi tạo cảm giác ấm cúng hơn.	3	1	2
11	"Nike Sportswear Sport Essentials
Men's Woven Lined Flow Shorts"	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/96d22b82-e7a8-4e26-8226-38b552661e85/sportswear-sport-essentials-mens-woven-lined-flow-shorts-5nvp4d.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/2e78e0aa-4bbc-4eb0-a615-02fdae5fbf39/sportswear-sport-essentials-mens-woven-lined-flow-shorts-5nvp4d.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/0b7dfb1e-21d4-49f6-a03e-c0aa63de4f02/sportswear-sport-essentials-mens-woven-lined-flow-shorts-5nvp4d.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/9a91cdca-6470-4d9a-8c9f-e9671202f7ba/sportswear-sport-essentials-mens-woven-lined-flow-shorts-5nvp4d.png	Cho dù bạn đang chạy đến xe bán đồ ăn gần nhất hay lao vào hố bơi yêu thích của mình, Quần short lót Nike Sportswear Sport Essentials là một ý tưởng hay. Được lót để tạo sự thoải mái, loại vải dệt mịn có trọng lượng nhẹ và thích hợp cho mọi cuộc phiêu lưu.	1	2	2
12	"Nike Flex Stride
Men's 5"" 2-In-1 Running Shorts"	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/ff05e4e2-7af8-4746-ba88-7e3a3a326664/flex-stride-mens-5-2-in-1-running-shorts-mRSgSF.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/fdb68714-8950-4019-922b-de51ce3e4ef3/flex-stride-mens-5-2-in-1-running-shorts-mRSgSF.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/26bd24fd-5940-4cc2-a550-f7579f63481c/flex-stride-mens-5-2-in-1-running-shorts-mRSgSF.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/5d240504-4518-4cc6-868e-7064c8b8b1b3/flex-stride-mens-5-2-in-1-running-shorts-mRSgSF.png	Quần short Nike Flex Stride được cập nhật bằng vải dệt hoàn toàn mới và tăng cường khả năng thoáng khí ở những vùng có nhiều mồ hôi. Lớp lót mềm của họ cung cấp sự hỗ trợ an toàn ở nơi bạn cần. Sản phẩm này được làm từ ít nhất 50% sợi polyester tái chế.	1	2	5
13	"Jordan Dri-FIT Sport
Men's Air Fleece Trousers"	https://static.nike.com/a/images/t_default/u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/c848e8ca-6e81-4fff-b2f0-bfb9cb4c4071/jordan-dri-fit-sport-mens-air-fleece-pants-6LMkd6.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/199ab3ac-1243-4cc3-882f-34cdcf23f616/jordan-dri-fit-sport-mens-air-fleece-pants-6LMkd6.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/63415bd6-8d08-4e98-815a-2c9f8f0f0e78/jordan-dri-fit-sport-mens-air-fleece-pants-6LMkd6.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/5417300f-b339-4e27-b870-c7cb1fa8903b/jordan-dri-fit-sport-mens-air-fleece-pants-6LMkd6.png	Bạn cần đổ mồ hôi để có thể hoàn thành một buổi tập luyện đầy đủ—và chúng đây rồi. Được làm bằng vải mềm, thấm mồ hôi, đôi này sẽ giúp bạn luôn tươi mới trong những buổi tập khó khăn nhất. Chúng được thiết kế để vừa khít hơn so với những chiếc áo len cổ điển, với những đường nét thiết kế giống với bộ đồ thể thao Wings nguyên bản của MJ. Và cổ tay áo vừa đủ cao để khoe những cú đá yêu thích của bạn.	1	2	5
14	"Nike Therma-FIT
Men's Camo Tapered Training Pants"	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/abc95e28-07fd-4723-8497-10a78763dc4a/therma-fit-mens-camo-tapered-training-pants-RnzrsW.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/ccc0c52f-2e45-474b-9ef6-fe338f057289/therma-fit-mens-camo-tapered-training-pants-RnzrsW.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/cbe78a18-4083-439f-9028-ecd7dc1f4237/therma-fit-mens-camo-tapered-training-pants-RnzrsW.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/f7b09fb8-8d6c-4639-9243-ddb022ebf8cd/therma-fit-mens-camo-tapered-training-pants-RnzrsW.png	Tận hưởng thời tiết mát mẻ với chiếc quần ống côn siêu mềm này. Chúng tôi đã bổ sung công nghệ điều chỉnh nhiệt để giúp bạn duy trì số lần tập, ngay cả khi trời lạnh. Chúng tôi cũng bổ sung thêm họa tiết rằn ri toàn thân lấy cảm hứng từ quân phục của quân đội Anh.	1	2	2
15	"Nike Universa
Women's Medium-Support High-Waisted Full-Length Leggings with Pockets"	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/495412c6-b708-4584-a392-914009989035/universa-womens-medium-support-high-waisted-full-length-leggings-with-pockets-6LLZCW.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/d8447bc3-a619-4537-8439-175d37f03584/universa-womens-medium-support-high-waisted-full-length-leggings-with-pockets-6LLZCW.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/c4165ea7-adf6-4439-ab41-d5d25dc4e1a5/universa-womens-medium-support-high-waisted-full-length-leggings-with-pockets-6LLZCW.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/a6afee12-4a8e-4677-8b90-b00c9c8821e8/universa-womens-medium-support-high-waisted-full-length-leggings-with-pockets-6LLZCW.png	Quần legging Nike Universa của chúng tôi giúp tôn dáng và nâng cơ, co giãn thoải mái theo từng cử động của bạn. Dù bạn tập luyện ở bất cứ đâu, loại vải InfinaSmooth có trọng lượng trung bình, chống ngồi xổm của họ mang đến cho bạn sự thoải mái tuyệt đối, đồng thời mang lại cảm giác mát mẻ và bóng mượt khi chạm vào. Ngoài ra, chúng đủ bền để bạn có thể uốn cong, giặt và mặc đi mặc lại. Chúng là cặp đôi mà bạn sẽ tìm đến dù bạn cần thứ gì đó cho hoạt động chạy bộ hàng ngày, luyện tập hàng ngày hay chỉ mỗi ngày.	2	2	8
16	"Nike Yoga Dri-FIT Luxe
Women's Flared Pants"	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/50568201-14ec-4474-9c91-a934e19c0c0c/yoga-dri-fit-luxe-womens-flared-pants-5dCKhV.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/3a2b6634-4254-4da9-a8b1-e804e2a484bb/yoga-dri-fit-luxe-womens-flared-pants-5dCKhV.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/dba55796-2698-4f78-937e-12f989ad0e3e/yoga-dri-fit-luxe-womens-flared-pants-5dCKhV.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/3fb71066-802e-4e06-bdc4-f72aed1cc4a1/yoga-dri-fit-luxe-womens-flared-pants-5dCKhV.png	Hãy đơn giản nhưng không quá cơ bản với chiếc quần ống loe, cạp cao này. Vải Infinalon của họ mềm mại và mịn màng không thể cưỡng lại, đồng thời mang lại cảm giác nén nhẹ nhàng ôm lấy cơ thể bạn để bạn có thể co giãn và di chuyển không giới hạn. Với chất liệu vải thấm mồ hôi và dải thắt lưng rộng, bạn sẽ cảm thấy mát mẻ và được hỗ trợ khi chuyển từ tư thế này sang tư thế khác.	2	2	11
17	"Nike Sportswear Air
Women's High-Waisted Flared Leggings"	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/c6de8eec-0369-4c25-bf4b-6ef4b5f29541/sportswear-air-womens-high-waisted-flared-leggings-gkrhJx.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/4283fd13-d971-4fbf-bf9d-81dfe52dd254/sportswear-air-womens-high-waisted-flared-leggings-gkrhJx.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/da9fc8c0-3f1d-4a23-bbcd-2e39f2f7f4af/sportswear-air-womens-high-waisted-flared-leggings-gkrhJx.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/b75ccc1f-d779-4cff-8b28-6e58c89485a1/sportswear-air-womens-high-waisted-flared-leggings-gkrhJx.png	Hãy ôm lấy eo cao rực rỡ trong mùa này. Dày nhưng vẫn nhẹ, mềm mại nhưng vẫn chắc chắn—chúng dễ dàng co giãn theo từng cử động của bạn.	2	2	10
18	"Nike Sportswear Club Fleece
Big Kids' French Terry Shorts (Extended Size)"	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/10e27502-d917-4a21-a470-6459d34b71d0/sportswear-club-fleece-big-kids-french-terry-shorts-MVzd8k.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/27e3d8a3-75fe-4208-962f-48e683be3b10/sportswear-club-fleece-big-kids-french-terry-shorts-MVzd8k.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/1e271999-7205-45f5-b9e6-c9a9edbdf3d8/sportswear-club-fleece-big-kids-french-terry-shorts-MVzd8k.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/51b6927d-8ced-4885-8d0b-79e126df22af/sportswear-club-fleece-big-kids-french-terry-shorts-MVzd8k.png	 lựa chọn lý tưởng khi cảm thấy quá ấm áp với chất liệu lông cừu chải kỹ, chiếc quần short này là lựa chọn hoàn hảo để chạy bộ trong thời tiết ấm áp. Vải terry mềm mại của Pháp mang lại cảm giác nhẹ nhàng—giống như những chiếc áo len cổ điển của bạn. Kéo chúng vào và thắt chặt bằng dây rút bên trong để vừa khít hoàn hảo mà bạn có thể tin cậy để tiếp tục di chuyển.	3	2	4
19	"Nike Trophy23
Big Kids' Dri-FIT Training Shorts"	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/8011d3c1-e5d8-4003-9d9d-454234d5e2fb/trophy23-big-kids-dri-fit-training-shorts-nVQx6S.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/efab0adf-d57e-4bd1-938e-e314b192fb7b/trophy23-big-kids-dri-fit-training-shorts-nVQx6S.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/32cead04-01f2-4a3b-996a-7aeaabcfb1ba/trophy23-big-kids-dri-fit-training-shorts-nVQx6S.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/256bd70d-592b-4b68-8fc5-15edab7d97d1/trophy23-big-kids-dri-fit-training-shorts-nVQx6S.png	Cho dù bạn đang mơ ước được chơi ở cấp độ tiếp theo hay là người mới bắt đầu học môn thể thao này, quần short Nike Trophy23 sẽ giúp bạn chuẩn bị sẵn sàng cho trận đấu. Chất liệu vải siêu thoáng khí giúp tản mồ hôi giúp bạn luôn mát mẻ và tự tin trong khi mài giũa kỹ năng của mình.	3	2	5
20	"Nike Dri-FIT Academy23
Kids' Soccer Shorts"	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/75042f4a-ae91-4619-bc95-0125d0344d12/dri-fit-academy23-kids-soccer-shorts-wlb229.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/fea14581-6b25-4188-b688-aa071f43b9c5/dri-fit-academy23-kids-soccer-shorts-wlb229.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/1a2ff8e1-372c-4126-b783-ed6e6c5c1b2c/dri-fit-academy23-kids-soccer-shorts-wlb229.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/bccfcf51-4cfc-4a99-b779-0173891efff5/dri-fit-academy23-kids-soccer-shorts-wlb229.png	Bạn đã sẵn sàng ra sân chưa? Vải dệt kim mịn và mềm thấm mồ hôi giúp bạn luôn mát mẻ và thoải mái khi mang trò chơi hạng A của mình đến mọi giờ giải lao, luyện tập và vui chơi. Kiểu dáng vừa vặn cổ điển giúp bạn có không gian để di chuyển mà không bị phân tâm. 	3	2	2
21	"Nike Sportswear Club Fleece
Big Kids' (Girls') Loose Pants"	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/41ea45b3-87ca-462e-9660-021c347984e5/sportswear-club-fleece-big-kids-girls-loose-pants-9xdF2W.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/c6af1751-81a1-48e2-bbb6-eb1a446aeabd/sportswear-club-fleece-big-kids-girls-loose-pants-9xdF2W.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/886933a6-096d-4147-9e0e-4789e1d7db01/sportswear-club-fleece-big-kids-girls-loose-pants-9xdF2W.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/59160051-0226-4749-b5d4-6d5cc2e9fe26/sportswear-club-fleece-big-kids-girls-loose-pants-9xdF2W.png	Khoảng trống rộng hơn ở ống quần mang lại cho chiếc quần này cảm giác thoải mái, vô cùng ấm cúng. Bề ngoài mịn màng, loại lông cừu nhẹ này là một lớp dễ dàng sử dụng khi bạn muốn tăng thêm chút ấm áp. Vì vậy, cho dù bạn đang chạy vòng quanh bạn bè trong giờ ra chơi hay đến muộn để luyện tập, những chiếc áo thấm mồ hôi này sẽ mang lại cho bạn không gian cần thiết để cảm thấy thoải mái, thư giãn và sẵn sàng cho bất cứ điều gì xảy ra tiếp theo.	3	2	10
22	"Nike Sportswear Club Fleece
Big Kids' (Girls') Pants (Extended Size)"	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/92802401-677e-41fd-a204-3f4666e3c7b0/sportswear-club-fleece-big-kids-girls-pants-blrF0J.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/6add830d-ca5f-418d-8ab3-b4191ff5f921/sportswear-club-fleece-big-kids-girls-pants-blrF0J.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/87d8bd0e-e05b-4570-ac51-19444487f610/sportswear-club-fleece-big-kids-girls-pants-blrF0J.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/7f934e4b-411f-402e-88ff-481c3614f26c/sportswear-club-fleece-big-kids-girls-pants-blrF0J.png	Quần lông cừu Nike Sportswear Club còn rất thoải mái. Được làm bằng lông cừu siêu mềm, tất cả đều mang lại cảm giác ấm cúng, ấm áp. Với túi, cạp quần co giãn và cổ tay có gân, còn gì mà không thích?	3	2	11
23	"Jordan Stadium 90
Men's Shoes"	https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/766b057f-9403-4f0d-90eb-5be0a1d56b6b/jordan-stadium-90-mens-shoes-q1QWcC.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/e24dda2d-9e5d-4f1e-8eb9-043a9e082bf7/jordan-stadium-90-mens-shoes-q1QWcC.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/c5327dce-d611-4022-accc-c816c5688e63/jordan-stadium-90-mens-shoes-q1QWcC.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/f730ba4b-233c-47e3-b8dd-af40e1121ff7/jordan-stadium-90-mens-shoes-q1QWcC.png	Sự thoải mái là vua, nhưng điều đó không có nghĩa là bạn phải hy sinh phong cách. Lấy cảm hứng thiết kế từ AJ1 và AJ5, Stadium 90 sẵn sàng để đeo hàng ngày. Phần trên được làm bằng da tổng hợp và vải dệt, thể hiện sự kết hợp giữa hộp ngón chân AJ1 và các chi tiết ngọn lửa từ AJ5. Đệm Nike Air giúp mỗi bước đi trở nên dễ dàng như phong cách của bạn.	1	3	1
24	"Nike Dunk Mid
Men's Shoes"	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/c0106eb6-56f2-4c92-b6ff-cb6b7d52d5d5/dunk-mid-mens-shoes-QVrHS8.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/f456f55f-e584-447b-b8fc-d339bbf137d0/dunk-mid-mens-shoes-QVrHS8.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/fb61705c-5c14-41fc-9361-5642f7e6e85d/dunk-mid-mens-shoes-QVrHS8.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/cfef550d-f411-4b4a-9103-7e5d1d3da9cb/dunk-mid-mens-shoes-QVrHS8.png	Được tạo ra dành cho gỗ cứng nhưng lại được ưa chuộng trên đường phố, biểu tượng b-ball của thập niên 80 trở lại với chất liệu da sắc nét và kiểu dáng cổ điển "Panda" chặn màu. Thiết kế vòng cổ điển mang hơi hướng cổ điển của thập niên 80 trở lại đường phố trong khi cổ áo có đệm ở giữa trên tạo thêm vẻ cổ điển tạo cảm giác thoải mái.	1	3	1
25	"Nike Air Force 1 '07
Men's Shoes"	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/29a93e9c-0279-47c8-abc3-9f7a2f475c88/air-force-1-07-mens-shoes-J7xw5P.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/61ec300a-da70-445c-b932-45248a3b8221/air-force-1-07-mens-shoes-J7xw5P.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/4474fa3e-a2be-444d-b447-12ee1c26ec9b/air-force-1-07-mens-shoes-J7xw5P.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/a01db1d3-b82c-4d71-b278-43d98438e6e8/air-force-1-07-mens-shoes-J7xw5P.png	Thoải mái, bền bỉ và vượt thời gian—không có lý do gì nó là số 1. Cấu trúc của thập niên 80 kết hợp với màu sắc cổ điển để tạo nên phong cách phù hợp dù bạn đang ở trên sân hay đang di chuyển.	1	3	1
26	"Nike MC Trainer 2
Men’s Workout Shoes"	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/0e0024e4-434f-48c1-98a3-d9238a788b01/mc-trainer-2-mens-workout-shoes-21vH06.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/cebf161b-4adf-410a-b5ac-3b638c44ceb0/mc-trainer-2-mens-workout-shoes-21vH06.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/50f630f7-18ae-4e04-b122-94bf9e5a353e/mc-trainer-2-mens-workout-shoes-21vH06.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/35d5c78c-5c90-411f-9ea4-c19971f95004/mc-trainer-2-mens-workout-shoes-21vH06.png	Nike MC Trainer 2 có thể giúp bạn chuyển từ luyện tập theo mạch trong phòng tập tạ sang trên sân cỏ để điều hòa co giật nhanh chóng, liền mạch. Đó là nguồn điện đa năng kết hợp tính linh hoạt, độ ổn định và tuổi thọ cao để bạn có thể tập trung vào công việc thể chất trước mắt. Từ squat lưng đến lặp lại nước rút, nó có thể giúp hỗ trợ sự khắc nghiệt của chế độ tập luyện đa dạng của bạn mà không cần phải dừng lại để lấy thêm dụng cụ cho quá trình tập luyện của bạn.	1	3	2
27	"Nike Air Max Alpha Trainer 5
Men's Workout Shoes"	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/e138e089-db7c-4172-becf-3218c183339b/air-max-alpha-trainer-5-mens-workout-shoes-7LjRM6.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/22c7878d-fcbc-47d4-8cf9-6fffb68ebdd9/air-max-alpha-trainer-5-mens-workout-shoes-7LjRM6.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/c71adb15-e858-4ac4-82d2-e4b63101c10d/air-max-alpha-trainer-5-mens-workout-shoes-7LjRM6.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/fb1975d2-9994-4375-a25e-4e080a9dfc97/air-max-alpha-trainer-5-mens-workout-shoes-7LjRM6.png	Kết thúc lần tập cuối cùng của bạn một cách mạnh mẽ và thực hiện nó bằng một tiếng gầm làm choáng váng sàn phòng tập với Nike Air Max Alpha Trainer 5. Đệm Max Air mang lại sự ổn định thoải mái khi nâng dù đó là ngày nhẹ hay nặng. Đế phẳng, rộng giúp bạn nâng cao độ ổn định và độ bám cho mọi loại bài tập khó mà không ảnh hưởng đến phong cách khi bạn di chuyển từ trạm này sang trạm khác và bắt đầu cài đặt.	1	3	7
28	"Air Jordan 1 Brooklyn
Women's Boots"	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/722ca0dd-e0f7-444e-afb3-2322e990e890/air-jordan-1-brooklyn-womens-boots-kd9QhX.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/b4031133-af87-43cc-925b-216d00e60678/air-jordan-1-brooklyn-womens-boots-kd9QhX.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/137c0fcb-7687-4484-8822-9df058da6881/air-jordan-1-brooklyn-womens-boots-kd9QhX.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/8ed6ea56-d350-412e-8216-dc4809dfd979/air-jordan-1-brooklyn-womens-boots-kd9QhX.png	 Đôi giày sneaker táo bạo, chắc chắn này chính là chìa khóa cho sự xoay chuyển của bạn. Da nguyên hạt sang trọng kết hợp với đế đế dày để nâng cao phong cách cá nhân của bạn. Các vấu đế ngoài phóng đại và đệm Nike Air hỗ trợ các bước của bạn. Và đừng ngủ quên trên AJ1 DNA: một viên kim cương ở gót chân hiển thị phù hiệu Jumpman, tạo điểm nhấn cho vẻ ngoài của bạn về di sản của môn thể thao vòng.	2	3	11
29	"Jordan Nu Retro 1 Low
Men's Shoes"	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/dc52f2d9-759e-496c-9421-6fa2eb86701a/jordan-nu-retro-1-low-mens-shoes-L6Xk8z.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/82080a80-ff02-45e5-8fa4-be568344f0e2/jordan-nu-retro-1-low-mens-shoes-L6Xk8z.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/d486c68c-690c-4421-96b0-f38ce7598b99/jordan-nu-retro-1-low-mens-shoes-L6Xk8z.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/c8822c26-918a-444a-b8c5-8eb366cd3c94/jordan-nu-retro-1-low-mens-shoes-L6Xk8z.png	Lấy cảm hứng từ logo và thiết kế Wings nguyên bản của Jordan 1, những đôi giày hàng ngày này luôn sẵn sàng cho mọi hoạt động. Hãy diện chúng với một vài chiếc quần jean rộng thùng thình, trượt băng trong bộ quần áo đó hoặc chỉ đơn giản là trông bay bổng—điều đó tùy thuộc vào bạn. Mũ giày bằng da mịn và logo in nổi lớn sẽ giúp bạn nổi bật dù mặc trang phục sang trọng hay giản dị.	2	3	1
30	"Air Jordan 1 Low SE Craft
Men's Shoes"	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/519b2b47-807e-4abf-917e-95ad69d219de/air-jordan-1-low-se-craft-mens-shoes-W9Kpp9.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/93c19ed7-9abb-4a72-94c3-e3f5d32b66e3/air-jordan-1-low-se-craft-mens-shoes-W9Kpp9.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/1bb24e26-087e-46f5-b4d4-b345d8cfd654/air-jordan-1-low-se-craft-mens-shoes-W9Kpp9.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/2280a733-20b7-43c7-98ba-b572e40b8352/air-jordan-1-low-se-craft-mens-shoes-W9Kpp9.png	Màu sắc mới và kết cấu mới mẻ mang đến cho bạn một chiếc AJ1 thủ công, giữ được vẻ cổ điển và cảm giác quen thuộc. Chiếc áo được yêu thích nhất mọi thời đại này được làm bằng vật liệu cao cấp và được trang trí bằng các cạnh thô và đường khâu tương phản.	2	3	7
31	"Nike Vaporfly 3
Women's Road Racing Shoes"	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/40011822-48aa-4c58-a9a1-c0205de06ac9/vaporfly-3-womens-road-racing-shoes-4jJ4vQ.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/ab920e6f-29e0-4b2b-8314-b865ff21b56c/vaporfly-3-womens-road-racing-shoes-4jJ4vQ.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/1f046274-1493-4756-93be-1552c335a1ed/vaporfly-3-womens-road-racing-shoes-4jJ4vQ.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/e90aa244-d511-4ffb-9bd2-04e583019b86/vaporfly-3-womens-road-racing-shoes-4jJ4vQ.png	 Mang đến cho bạn tốc độ trong ngày đua để chinh phục mọi khoảng cách, Vaporfly 3 dành cho những người theo đuổi, những tay đua và những người có tốc độ cao, những người không thể từ chối cảm giác hồi hộp khi theo đuổi. Chúng tôi đã làm lại phần dẫn đầu của gói giày siêu hạng và điều chỉnh động cơ bên dưới để giúp bạn theo đuổi thành tích cá nhân từ cự ly 10 km đến chạy marathon. 	2	3	6
32	"Nike Kiger 9
Women's Trail Running Shoes"	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/2ae8e66a-c0bd-4afd-9e95-eb1dbd9d9cb0/kiger-9-womens-trail-running-shoes-bsbcr4.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/fbbf025d-fba6-4735-b766-d8930595ae23/kiger-9-womens-trail-running-shoes-bsbcr4.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/74e65d56-a483-4963-8c85-f0bca6858d50/kiger-9-womens-trail-running-shoes-bsbcr4.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/9e39b00b-82ef-4a31-b076-fe5f46548b27/kiger-9-womens-trail-running-shoes-bsbcr4.png	Khi tiếp cận các địa hình nhiều đá và kỹ thuật, hãy di chuyển với sự thoải mái và tốc độ của Kiger 9, sẵn sàng đối phó với mọi khúc cua và khúc cua gấp bất ngờ. Được trang bị bọt Nike React có chiều dài đầy đủ và phần trên thoáng khí được tân trang lại, đôi giày tập nhanh nhẹn, linh hoạt này giúp bạn chạy ngoằn ngoèo trong và ngoài đường mòn với tốc độ nhanh. Nó thấp hơn mặt đất và nhẹ hơn so với phiên bản trước của chúng tôi, để bạn có thể xử lý đường địa hình một cách nhanh chóng và an toàn.	2	3	11
33	"Ja 1 ""Backyard BBQ""
Big Kids' Basketball Shoes"	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/ebaca0dd-fcb8-49ce-91f1-6adefef2a6ea/ja-1-backyard-bbq-big-kids-basketball-shoes-VpT9wB.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/76ce6993-bb08-40b8-8664-3c2649091f7e/ja-1-backyard-bbq-big-kids-basketball-shoes-VpT9wB.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/f15d28d2-117c-4f31-b199-741300ee6b8b/ja-1-backyard-bbq-big-kids-basketball-shoes-VpT9wB.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/36ed6dbe-5c97-4d6b-933b-e21271a2eadb/ja-1-backyard-bbq-big-kids-basketball-shoes-VpT9wB.png	 Mang đến cho bạn tốc độ trong ngày đua để chinh phục mọi khoảng cách, Vaporfly 3 dành cho những người theo đuổi, những tay đua và những người có tốc độ cao, những người không thể từ chối cảm giác hồi hộp khi theo đuổi. Chúng tôi đã làm lại phần dẫn đầu của gói giày siêu hạng và điều chỉnh động cơ bên dưới để giúp bạn theo đuổi thành tích cá nhân từ cự ly 10 km đến chạy marathon. 	3	3	8
34	"Tatum 1
Little Kids' Shoes"	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/78eb299d-26c8-4a80-8622-6397f3a2f40a/tatum-1-little-kids-shoes-srqCM0.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/ddbdd177-4fd8-4016-aaac-b41cc83bd186/tatum-1-little-kids-shoes-srqCM0.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/617a8094-684a-4bc8-a2a4-98497177e2e0/tatum-1-little-kids-shoes-srqCM0.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/db2f00b6-292a-403d-9e0c-a1ac8d528b7d/tatum-1-little-kids-shoes-srqCM0.png	atum 1 được thiết kế để dễ dàng mang vào, vì vậy trẻ em có thể tự mang giày và bắt đầu giờ chơi nhanh hơn. Chỉ cần yêu cầu họ BƯỚC theo đúng yêu cầu và sự đổi mới về quyền trẻ em sẽ giúp họ phù hợp. Nhẹ, bền và an toàn, chúng có đôi chân nhỏ được bảo vệ trong mỗi bước đi lớn.	3	3	1
35	"LeBron Witness 7
Little Kids' Shoes"	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/30ddbe18-076a-4734-9ad4-383004ab4799/lebron-witness-7-little-kids-shoes-CT9KvM.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/08cbc122-1961-464b-8f90-e3ef326c02a6/lebron-witness-7-little-kids-shoes-CT9KvM.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/23d74289-dc13-4119-9383-151338695964/lebron-witness-7-little-kids-shoes-CT9KvM.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/3385e78f-a1df-4367-a9cd-3f20885a44a7/lebron-witness-7-little-kids-shoes-CT9KvM.png	Từ sân chơi đến lớp thể dục, LeBron Witness 7 mang đến cho con bạn cảm giác MVP. Thiết kế nhẹ và thoáng khí giúp chân luôn mát mẻ khi chạy xung quanh. Và, chúng tôi làm mọi thứ trở nên cực kỳ đơn giản với dây thun chéo và dây đeo, để siêu sao tương lai của bạn có thể cảm thấy tự tin vui vẻ khi mặc lại mọi thứ LeBron.	3	3	9
36	"LeBron Witness 7
Big Kids' Basketball Shoes"	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/6477c54c-172d-4e85-8b51-08ac89e421e3/lebron-witness-7-big-kids-basketball-shoes-hnfFpn.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/22567a5a-2511-4626-bc04-f72104c1da50/lebron-witness-7-big-kids-basketball-shoes-hnfFpn.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/88fb71bf-ca57-4cf3-98df-727baf0142cf/lebron-witness-7-big-kids-basketball-shoes-hnfFpn.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/863c9aed-6a67-4776-8372-5ab5d7216fe5/lebron-witness-7-big-kids-basketball-shoes-hnfFpn.png	Từ sân chơi đến lớp thể dục, LeBron Witness 7 mang đến cho đôi chân của bạn cảm giác MVP với thiết kế nhẹ và thoáng khí nhưng vẫn mang lại nhiều sự hỗ trợ. Đệm Max Air có chiều dài tối đa giúp bạn cất cánh và hạ cánh một cách tự tin, trong khi lưới và dây cáp nhẹ giúp bạn luôn cố định trong 4/4—hoặc hơn.	3	3	7
37	"Nike Everyday Plus Cushioned
Training Crew Socks (6 Pairs)"	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/35c348b9-8a7b-4ef3-8772-4bed7f7ef6ae/everyday-plus-cushioned-training-crew-socks-6-pairs-vlRw4Q.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/e5bc86bd-b190-4ca0-8547-2416b1e4dca7/everyday-plus-cushioned-training-crew-socks-6-pairs-vlRw4Q.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/712594ad-2e6b-483d-9720-8196a3bf245a/everyday-plus-cushioned-training-crew-socks-6-pairs-vlRw4Q.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/e99faa44-604e-4f13-8240-df8fde2575a9/everyday-plus-cushioned-training-crew-socks-6-pairs-vlRw4Q.png	Tất có đệm Nike Everyday Plus mang lại sự thoải mái khi tập luyện với lớp đệm bổ sung dưới gót chân và bàn chân trước cũng như một dải vòm hỗ trợ, vừa khít. Khả năng thấm mồ hôi và khả năng thoáng khí phía trên giúp giữ cho bàn chân của bạn khô ráo và mát mẻ để giúp bạn vượt qua hiệp đấu bổ sung đó.	1	4	5
38	"Nike Everyday Max Cushioned
Training Crew Socks (3 Pairs)"	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/5364bd0f-e90b-4449-a22c-341f490ac2ce/everyday-max-cushioned-training-crew-socks-3-pairs-4VTnNbbo.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/0cdde54e-965c-4baa-8e66-af2e8a445f4d/everyday-max-cushioned-training-crew-socks-3-pairs-4VTnNbbo.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/d12bea0b-4bd5-42f4-807e-3b7a0c115890/everyday-max-cushioned-training-crew-socks-3-pairs-4VTnNbbo.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/dfc6bcde-f384-4ab6-8220-6c5de2d57909/everyday-max-cushioned-training-crew-socks-3-pairs-4VTnNbbo.png	Vượt qua giới hạn của bạn với Tất có đệm Nike Everyday Max. Đế terry dày giúp bạn thoải mái hơn khi tập và nâng chân trong khi sợi có độ ma sát cao ở lòng bàn chân giúp giảm trượt	1	4	1
39	"Nike Elite Crew
Basketball Socks"	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/9c734410-bd8a-4ebc-923f-e9d5659c51bb/elite-crew-basketball-socks-zGJxZD.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/24f335e6-7eae-4572-8188-e211516a10a3/elite-crew-basketball-socks-zGJxZD.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/2599f181-8e34-42f2-9945-bf52bf954451/elite-crew-basketball-socks-zGJxZD.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/fb23cfa0-82f7-4282-984d-b11b8d37aa27/elite-crew-basketball-socks-zGJxZD.png	Tất bóng rổ Nike Elite Crew mang lại cảm giác vừa vặn và hỗ trợ nhờ dải vòm, trong khi lớp đệm theo vùng giúp hấp thụ tác động khi bạn chạy trên sân.	1	4	1
40	"Nike Multiplier
Crew Sock (2 Pairs)"	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/1772bc06-d182-4cf3-b897-421d3f70edeb/multiplier-crew-sock-2-pairs-428jJv.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/9a9cf967-ad78-470a-9b38-7e2ddb532992/multiplier-crew-sock-2-pairs-428jJv.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/d177755f-e016-4f71-aeb4-47f8f659103f/multiplier-crew-sock-2-pairs-428jJv.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/43158641-bf36-4f7a-a8b9-92181e1160a6/multiplier-crew-sock-2-pairs-428jJv.png	Nhảy cao với chiếc tất Nike Multiplier Crew (2 đôi). Vải thấm mồ hôi giúp bạn luôn khô ráo và mát mẻ, trong khi lưới dọc theo phần giữa bàn chân giúp bạn thoáng khí. Một "NIKE" tuyến tính logo nổi bật khi bạn chạy.	1	4	8
41	"Nike Everyday Lightweight
Training No-Show Socks (6 Pairs)"	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/d72ead2e-4e84-42e2-bd7a-88a75e5daa73/everyday-lightweight-training-no-show-socks-4jbnKn.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/cc76f984-b15a-44ff-ab1e-c0a58b31ab7d/everyday-lightweight-training-no-show-socks-4jbnKn.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/9612bb0e-57f6-4937-88df-5f7851463b8b/everyday-lightweight-training-no-show-socks-4jbnKn.png		Hãy mua một đôi tất phù hợp với tâm trạng của bạn. Nếu một ngày tươi sáng và tràn đầy năng lượng đưa bạn vào một cuộc phiêu lưu mới—hoặc có thể chỉ là một chuyến đi dạo bình thường quanh khu nhà—bạn sẽ được chuẩn bị sẵn công nghệ thấm mồ hôi giúp bạn luôn mát mẻ và khô ráo, cùng với một dải băng ôm quanh vòm để được hỗ trợ thêm.	2	4	5
42	"Nike Everyday Lightweight
Training No-Show Socks (3 Pairs)"	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/ae86acf9-f88f-4c41-8724-b35df2628fd5/everyday-lightweight-training-no-show-socks-K5cbcM.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/99d3da7e-d046-492c-8777-1201f04a59e2/everyday-lightweight-training-no-show-socks-K5cbcM.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/ee974df9-8aaf-4d04-8e57-9fbd1d3ecc97/everyday-lightweight-training-no-show-socks-K5cbcM.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/1a73c0a9-63b1-457f-970a-a95c544abbfb/everyday-lightweight-training-no-show-socks-K5cbcM.png	Tăng cường sức mạnh cho quá trình tập luyện của bạn với Tất nhẹ hàng ngày của Nike. Sợi mềm với công nghệ thấm mồ hôi giúp đôi chân bạn luôn thoải mái và khô ráo.	2	4	5
43	"Nike Everyday Plus
Cushioned Crew Socks (2 Pairs)"	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/dcf95f2c-4f09-43c1-9668-021727abc780/everyday-plus-cushioned-crew-socks-L8M4HC.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/6d9e4894-cf65-4d66-9d2e-61faa98f8008/everyday-plus-cushioned-crew-socks-L8M4HC.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/61f62d6f-d7f4-4520-874c-e17af78e1317/everyday-plus-cushioned-crew-socks-L8M4HC.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/4057f950-dfcb-44e8-841f-3c104d454daf/everyday-plus-cushioned-crew-socks-L8M4HC.png	Giờ đây, bạn có thể mang linh vật hộp giày yêu quý này đi bất cứ nơi đâu trong chuyến phiêu lưu tiếp theo của bạn. Và trong khi Boxy ở đây để mang đi, bạn cũng ở đây để có vòm có dải hỗ trợ và công nghệ thấm mồ hôi giúp bạn khô ráo suốt cả ngày.	2	4	3
44	"Jordan
Everyday Ankle Socks (3 Pairs)"	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/413bf806-b071-46fc-a859-224df5da26d1/jordan-everyday-ankle-socks-PqW8xF.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/ed34d45c-6135-4a9f-9f9d-02eb23d21f40/jordan-everyday-ankle-socks-PqW8xF.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/e1e82c86-a723-45c0-8764-5405861daaef/jordan-everyday-ankle-socks-PqW8xF.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/3c416255-3ad1-49b1-8390-ad1070a5b39f/jordan-everyday-ankle-socks-PqW8xF.png	Những đôi tất đến mắt cá chân này sẽ giúp bạn luôn khô ráo và mát mẻ với chất liệu vải thấm mồ hôi và tấm lót mắt cá chân thoáng khí. Chúng vừa khít quanh vòm để mang lại cho bạn cảm giác được hỗ trợ nhiều hơn.	2	4	1
45	"Nike Everyday Lightweight
Training No-Show Socks (3 Pairs)"	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/ae86acf9-f88f-4c41-8724-b35df2628fd5/everyday-lightweight-training-no-show-socks-K5cbcM.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/99d3da7e-d046-492c-8777-1201f04a59e2/everyday-lightweight-training-no-show-socks-K5cbcM.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/ee974df9-8aaf-4d04-8e57-9fbd1d3ecc97/everyday-lightweight-training-no-show-socks-K5cbcM.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/1a73c0a9-63b1-457f-970a-a95c544abbfb/everyday-lightweight-training-no-show-socks-K5cbcM.png	Tăng cường sức mạnh cho quá trình tập luyện của bạn với Tất nhẹ hàng ngày của Nike. Sợi mềm với công nghệ thấm mồ hôi giúp đôi chân bạn luôn thoải mái và khô ráo.	3	4	5
46	"Nike Everyday Plus
Cushioned Crew Socks (2 Pairs)"	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/dcf95f2c-4f09-43c1-9668-021727abc780/everyday-plus-cushioned-crew-socks-L8M4HC.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/6d9e4894-cf65-4d66-9d2e-61faa98f8008/everyday-plus-cushioned-crew-socks-L8M4HC.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/61f62d6f-d7f4-4520-874c-e17af78e1317/everyday-plus-cushioned-crew-socks-L8M4HC.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/4057f950-dfcb-44e8-841f-3c104d454daf/everyday-plus-cushioned-crew-socks-L8M4HC.png	Giờ đây, bạn có thể mang linh vật hộp giày yêu quý này đi bất cứ nơi đâu trong chuyến phiêu lưu tiếp theo của bạn. Và trong khi Boxy ở đây để mang đi, bạn cũng ở đây để có vòm có dải hỗ trợ và công nghệ thấm mồ hôi giúp bạn khô ráo suốt cả ngày.	3	4	3
47	"Jordan
Everyday Ankle Socks (3 Pairs)"	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/413bf806-b071-46fc-a859-224df5da26d1/jordan-everyday-ankle-socks-PqW8xF.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/ed34d45c-6135-4a9f-9f9d-02eb23d21f40/jordan-everyday-ankle-socks-PqW8xF.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/e1e82c86-a723-45c0-8764-5405861daaef/jordan-everyday-ankle-socks-PqW8xF.png	https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco,u_126ab356-44d8-4a06-89b4-fcdcc8df0245,c_scale,fl_relative,w_1.0,h_1.0,fl_layer_apply/3c416255-3ad1-49b1-8390-ad1070a5b39f/jordan-everyday-ankle-socks-PqW8xF.png	Những đôi tất đến mắt cá chân này sẽ giúp bạn luôn khô ráo và mát mẻ với chất liệu vải thấm mồ hôi và tấm lót mắt cá chân thoáng khí. Chúng vừa khít quanh vòm để mang lại cho bạn cảm giác được hỗ trợ nhiều hơn.	3	4	1

-- insert data for tables images, product, product_sizes, product_colors from about data:

