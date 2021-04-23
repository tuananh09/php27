/*
 Navicat Premium Data Transfer

 Source Server         : php27
 Source Server Type    : MySQL
 Source Server Version : 100417
 Source Host           : localhost:3306
 Source Schema         : php27.zent

 Target Server Type    : MySQL
 Target Server Version : 100417
 File Encoding         : 65001

 Date: 22/04/2021 18:20:19
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `parent_id` int NULL DEFAULT NULL COMMENT 'danh mục cha',
  `slug` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `description` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT 'Mô tả thể loại',
  `created_at` timestamp(0) NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0) COMMENT 'Ngày tạo',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `parent_id`(`parent_id`) USING BTREE,
  CONSTRAINT `categories_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 28 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES (1, 'Thời sự 12h trưa', 2, 'thoi-su', 'Chuyên mục thời sự', '2021-04-22 14:33:21');
INSERT INTO `categories` VALUES (2, 'Tin trong nước', 4, 'tin-trong-nuoc', 'Chuyện mục thời sự - Tin trong nước', '2019-08-09 14:55:00');
INSERT INTO `categories` VALUES (3, 'Tin nước ngoài', 1, 'tin-nuoc-ngoai', 'Chuyện mục thời sự - Tin nước ngoài', '2021-04-22 16:56:35');
INSERT INTO `categories` VALUES (4, 'Văn hóa - Xã hội', 2, 'van-hoa-xa-hoi', 'Chuyên mục văn hóa - xã hội', '2021-04-22 16:56:37');
INSERT INTO `categories` VALUES (5, 'Công nghệ', 1, 'cong-nghe', 'Chuyên mục công nghệ', '2021-04-22 16:56:39');
INSERT INTO `categories` VALUES (6, 'Tin tức lập trình', 1, 'tin-tuc-lap-trinh', 'Chyện mục công nghệ - tin tức lập trình', '2021-04-22 16:56:40');
INSERT INTO `categories` VALUES (7, 'Tin tức công nghệ ', 1, 'tin-tuc-cong-nghe', 'Chyên mục công nghệ - tin tức công nghệ', '2021-04-22 16:56:41');
INSERT INTO `categories` VALUES (18, 'Bản tin đêm khuya', 1, NULL, 'tin nóng hôm nay', '2021-04-22 16:56:43');
INSERT INTO `categories` VALUES (26, 'tin mới hôm nay', 1, 'Tin-nóng', 'tin nóng hôm nay', '2021-04-22 14:05:21');

-- ----------------------------
-- Table structure for posts
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT 'Tiêu đề bài viết',
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT 'Mô tả bài viết',
  `thumbnail` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT 'ảnh bài viết',
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT 'Nội dung bài viết',
  `slug` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `view_count` bigint NULL DEFAULT NULL COMMENT 'số lượng xem',
  `user_id` int NULL DEFAULT NULL COMMENT 'tác giả',
  `category_id` int NULL DEFAULT NULL COMMENT 'Bài post này thuộc danh mục nào',
  `created_at` timestamp(0) NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0) COMMENT 'Ngày tạo',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `user_id`(`user_id`) USING BTREE,
  INDEX `category_id`(`category_id`) USING BTREE,
  CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 21 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of posts
-- ----------------------------
INSERT INTO `posts` VALUES (9, 'Du lịch biển ', 'Vịnh Hạ Long bãi biển đẹp nhất Việt Nam', 'imgTravel1.jpg', 'Vẽ đẹp của Hạ Long chợt nổi với những tượng hình đảo đá, để hồn người theo dáng đặt tên, phút chốt lại thay nền đổi vẻ, làm du khách trầm trồ man mác, trong lòng đảo đá là thế giới hang động, với những Thiên Cung, Đầu Gỗ, Trinh Nữ, Tiên Nâu, Bồ Nâu, kỳ ảo đến nổi làm ta sửng sốt, Mùa hè năm 1991 ông bộ trưởng du lịch nước cộng hòa Pháp đã biểu lộ cảm xúc rằng” Hạ Long đẹp đến mức tôi cảm thấy nghẹt thở, gió trời và nước biển hàng triệu năm tạo tác lên những hang động tuyệt mỹ này”. Rồi nhà văn Nguyễn Tuân sinh thời đã đến thăm Hạ Long đã thốt lên” chỉ có núi mới chịu già, chứ biển và sóng biển Hạ Long thì trẻ trung đời đời”. Tạo nên biển Hạ Long với những môi trường ngoài khơi trong lộng cho con người muốn sống, những vạn làng đảo đã mang gương mặt mới. Người Hạ Long gắn bó thiết tha với biển đảo, mỗi ngày tô điểm thêm vẻ sắc quê hương. Du lịch Hạ Long còn những điểm tham quan di tích lịch sử và văn hóa, trải từ Bãi Cháy đến Vân Đồn.', 'du-lich-bien', 30, 12, 2, '2021-04-22 14:13:22');
INSERT INTO `posts` VALUES (10, 'Nhà thờ thiên chúa giáo', 'Nhà thờ đẹp ở Nam Định ', 'imgTravel4.jpg', 'Những nhà thờ ở Nam Định được đánh giá là đẹp nhất, ấn tượng nhất thường tập trung ở hai huyện Xuân Trường và Hải Hậu. Bạn chỉ cần dành thời gian vi vu hai địa bàn này là đã có thể check in ở những nhà thờ đẹp nhất. Ngày nay, có rất nhiều du khách đi du lịch Nam Định chỉ để mong có cơ hội chụp choẹt, sống ảo cùng các công trình tôn giáo trang nghiêm, đẹp mắt này. Đó cũng là lý do mà anh chàng Xuan Son Le đã quyết tâm thực hiện một chuyến “Nam Định Tour” để khám phá hàng chục nhà thờ lớn nhỏ ở đây.', 'nha-tho-thien-chua-giao', 15, 2, 4, '2021-04-21 02:35:26');
INSERT INTO `posts` VALUES (11, 'Lễ Hội Phủ Dầy', 'Lễ hội truyền thống lớn nhất Nam Định', 'imgTravel10.jpg', 'Lễ Hội Phủ Giầy đươc tổ chức hàng năm vào tháng 3 âm lịch. Lễ hội nhằm tôn vinh “Mẫu” Liễu Hạnh. Một nhân vật tín ngưỡng nằm trong hàng Tứ bất tử được người dân Việt Nam suy tôn: Thánh Tản Viên, Thánh Gióng, Tiên Chử Đồng Tử và Mẫu Liễu Hạnh. Đặc biệt lễ hội mang một ý nghĩa tâm linh to lớn trong lòng người dân xứ Nam Định. Lễ hội Phủ Giầy được tổ chức để suy tôn Mẫu Liễu Nghi về những điều thiện mà làm từ khi còn sống. Và đặc biệt là để suy tôn sự linh thiêng của vị Thánh Mẫu này. Họ cầu mong một năm may mắn và nhiều tài lộc.', 'le-hoi-phu-day', 50, 5, 4, '2021-04-21 02:43:09');
INSERT INTO `posts` VALUES (12, 'Đỉnh Phanxipang ', 'Đỉnh núi cao nhất Việt nam', 'phanxipang.jpg', 'Phan Xi Păng, Fansipan, hay Phan Si Păng là ngọn núi cao nhất Việt Nam, cũng là cao nhất trong ba nước Đông Dương nên được mệnh danh là \"Nóc nhà Đông Dương\" thuộc dãy núi Hoàng Liên Sơn, cách trung tâm thị xã Sa Pa khoảng 9 km về phía tây nam, nằm giáp hai tỉnh Lào Cai và Lai Châu thuộc vùng Tây bắc Việt Nam. Theo tiếng địa phương, núi tên là \"Hủa Xi Pan\" và có nghĩa là phiến đá khổng lồ chênh vênh. Chiều cao của đỉnh núi đo đạc năm 1909 là 3.143 m, tuy vậy theo số liệu mới nhất của Cục Đo đạc, bản đồ và thông tin địa lý Việt Nam đưa ra vào cuối tháng 6 năm 2019, đỉnh núi cao 3.147,3m.', 'dinh-phanxipang', 50, 20, 4, '2021-04-21 02:58:35');
INSERT INTO `posts` VALUES (13, 'Thành phố sương mù Tam Đảo ', 'Tam Đảo nơi có khí hậu bốn mùa trong ngày', 'tamDao.jpg', 'Khu du lịch Tam Ðảo được người Pháp phát hiện và xây dựng từ những năm đầu thế kỷ 19. Thị trấn Tam Đảo được bao bọc bởi rừng nguyên sinh Quốc gia Tam Đảo, có khí hậu trong lành, mát mẻ, nhiệt độ trung bình trong năm khoảng 18°C.  Với thiên nhiên trong lành, kết hợp với khí hậu se lạnh khiến Tam Đảo rất thuận lợi để phát triển các loại hình du lịch nghỉ dưỡng, du lịch sinh thái, đây là điểm đến được du khách từ Hà Nội yêu thích cho kỳ nghỉ ngắn ngày.', 'thanh-pho-suong-mu-tam-dao', 20, 4, 1, '2021-04-21 03:02:22');
INSERT INTO `posts` VALUES (14, 'Du lịch Sapa', 'Sapa nơi hội tụ giữa đất và trời', 'sapa.jpg', 'Thị trấn Sapa xinh đẹp có cảnh quan thiên nhiên hùng vĩ, được ví von là nơi hội tụ giữa đất và trời, thời tiết sapa rất độc đáo với bốn mùa trong một ngày. Đi du lịch Sapa sẽ mang lại cho bạn những trải nghiệm đặc biệt không thể nào quên về cảnh sắc và văn hóa người dân tộc bản địa.  ', 'du-lich-sapa', 50, 6, 4, '2021-04-21 03:05:58');
INSERT INTO `posts` VALUES (15, 'Du lịch Đà Nẵng', 'Cầu vàng mang lại nhiều ấn tượng cho khách du lịch', 'cauvang.png', 'Cầu Vàng nằm tại khu nghỉ dưỡng Bà Nà Hills được khai trương vào tháng 6 năm nay đã thu hút một lượng khách du lịch khổng lồ. Không những thế, sức hút của cây cầu  độc đáo này chẳng hề hạ nhiệt mà còn được truyền thông quốc tế hết lời ca ngợi trong thời gian gần đây.  ', 'du-lich-da-nang', 20, 12, 4, '2021-04-21 03:18:25');
INSERT INTO `posts` VALUES (16, 'Du lịch Hội An', 'Phố Cổ Hội An – Thành phố cổ đẹp hàng đầu Châu Á', 'hoian.jpg', 'Khi du lịch Hội An, du khách nên chọn thời điểm khoảng tháng 2 – tháng 4 hàng năm bởi đó là lúc Hội An chiều lòng khách du lịch nhất. Trời ít mưa, không có nắng oi bức như mùa hè, khí hậu dễ chịu, không gian thoáng đãng. Thời điểm này du khách có thể thoải mái đến tham quan những cảnh đẹp ở Hội An hay khám phá những hoạt động, địa điểm mới để cảm nhận trọn vẹn, đầy đủ nhất vẻ đẹp nơi đây. Bạn hãy nhớ đặt phòng khách sạn tại Hội An sớm để tránh trường hợp hết phòng nhé.', 'du-lich-hoi-an', 100, 20, 4, '2021-04-21 03:20:24');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL,
  `avatar` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT 'Đường dẫn ảnh',
  `created_at` timestamp(0) NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0) COMMENT 'Ngày tạo',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 28 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (2, 'Vũ Văn Thương', 'thuongvv.hust@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'IMG_1122.jpg', '2021-04-22 14:32:51');
INSERT INTO `users` VALUES (3, 'Nguyễn Văn Hiệp', 'hiepbk@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '119262733_387823202618436_6291890424229121578_n.jpg', '2021-04-21 04:07:29');
INSERT INTO `users` VALUES (4, 'Hoàng Trung Hiếu', 'hieuht@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 've-dep-tua-nam-than-cua-hot-boy-17-tuoi-que-bac-lieudocx-1577715096260.jpeg', '2021-04-21 02:03:56');
INSERT INTO `users` VALUES (5, 'Nguyễn Hải Anh', 'haianh.bka@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'hinh-nen-dien-thoai-trai-han-quoc-1.jpg', '2021-04-21 02:04:04');
INSERT INTO `users` VALUES (6, 'Trần Danh Tùng', 'tungtd.kma@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'top-nhung-hot-boy-han-quoc-dep-trai-nhat-hien-nay-2016-1.jpg', '2021-04-21 02:04:07');
INSERT INTO `users` VALUES (12, 'Trương Thị Lan Anh', 'ttla@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'la.jpg', '2021-04-22 08:26:23');
INSERT INTO `users` VALUES (20, 'Nguyễn Tuấn Anh', 'nguyentuananh03092k@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '166316702_1090072348137657_8584500030467261644_n.jpg', '2021-04-21 02:04:25');
INSERT INTO `users` VALUES (21, 'Nguyễn Văn Đại', 'nad@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '119262733_387823202618436_6291890424229121578_n.jpg', '2021-04-21 02:04:27');
INSERT INTO `users` VALUES (22, 'Nguyễn Thế Lập', 'boylangsi1998@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 've-dep-tua-nam-than-cua-hot-boy-17-tuoi-que-bac-lieudocx-1577715096260.jpeg', '2021-04-21 01:04:32');
INSERT INTO `users` VALUES (23, 'Nguyễn Văn Bắc', 'nvbac@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'hinh-nen-dien-thoai-trai-han-quoc-1.jpg', '2021-04-21 02:07:05');

SET FOREIGN_KEY_CHECKS = 1;
