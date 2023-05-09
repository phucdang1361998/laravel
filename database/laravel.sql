/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100406
 Source Host           : localhost:3306
 Source Schema         : laravel

 Target Server Type    : MySQL
 Target Server Version : 100406
 File Encoding         : 65001

 Date: 14/07/2022 21:26:51
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for about
-- ----------------------------
DROP TABLE IF EXISTS `about`;
CREATE TABLE `about`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `image` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of about
-- ----------------------------
INSERT INTO `about` VALUES (1, 'Giới thiệu', 'images/about/12.jpg', '<p>SDFSDFSDFSF</p>', '2021-11-07 21:33:39', '2021-11-09 16:30:55');

-- ----------------------------
-- Table structure for order
-- ----------------------------
DROP TABLE IF EXISTS `order`;
CREATE TABLE `order`  (
  `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NULL DEFAULT NULL,
  `order_num` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `order_total` decimal(15, 2) NULL DEFAULT NULL,
  `order_status` tinyint(1) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `customer_name` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `customer_phone` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `customer_address` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `payment_id` int(11) NULL DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of order
-- ----------------------------
INSERT INTO `order` VALUES (11, NULL, 'ORDER_NUMBER_1', 360000.00, 5, '2021-11-20 17:43:03', '2021-11-21 15:17:41', 'Đặng nguyễn thiên phuc', '0909942585', 'lái thiêu 93', 1, NULL);
INSERT INTO `order` VALUES (12, NULL, 'ORDER_NUMBER_2', 330000.00, 5, '2021-11-21 14:38:37', '2021-11-21 15:02:31', 'Đặng Nguyễn Thiên Phúc', '0909942585', 'lái thiêu 93', 2, NULL);
INSERT INTO `order` VALUES (13, NULL, 'ORDER_NUMBER_3', 330000.00, 1, '2021-11-21 14:43:24', '2021-11-21 14:43:24', 'ssss', '213', 'sss', 3, 's');
INSERT INTO `order` VALUES (14, NULL, 'ORDER_NUMBER_4', 250000.00, 1, '2022-05-06 14:31:05', '2022-05-06 14:31:05', 'đặng nguyên thiên phúc', '0909942585', 'lái thiêu 93', 1, NULL);

-- ----------------------------
-- Table structure for order_details
-- ----------------------------
DROP TABLE IF EXISTS `order_details`;
CREATE TABLE `order_details`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NULL DEFAULT NULL,
  `product_id` int(11) NULL DEFAULT NULL,
  `product_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `product_price` decimal(15, 2) NULL DEFAULT NULL,
  `product_quantity` int(11) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `total_price` decimal(15, 2) NULL DEFAULT NULL,
  `product_image` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 20 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of order_details
-- ----------------------------
INSERT INTO `order_details` VALUES (9, 11, 11, 'Ốp con thỏ', 100000.00, 1, '2021-11-20 17:43:03', '2021-11-20 17:43:03', 100000.00, 'images/product-06.jpg');
INSERT INTO `order_details` VALUES (10, 11, 83, 'Ốp con thỏ', 110000.00, 1, '2021-11-20 17:43:03', '2021-11-20 17:43:03', 110000.00, 'images/product-06.jpg');
INSERT INTO `order_details` VALUES (11, 11, 13, 'Ốp con thỏ', 150000.00, 1, '2021-11-20 17:43:03', '2021-11-20 17:43:03', 150000.00, 'images/product-06.jpg');
INSERT INTO `order_details` VALUES (12, 12, 11, 'Ốp con thỏ', 100000.00, 1, '2021-11-21 14:38:37', '2021-11-21 14:38:37', 100000.00, 'images/product-06.jpg');
INSERT INTO `order_details` VALUES (13, 12, 13, 'Ốp con thỏ', 150000.00, 1, '2021-11-21 14:38:37', '2021-11-21 14:38:37', 150000.00, 'images/product-06.jpg');
INSERT INTO `order_details` VALUES (14, 12, 91, 'Ốp con thỏ', 80000.00, 1, '2021-11-21 14:38:37', '2021-11-21 14:38:37', 80000.00, 'images/product-06.jpg');
INSERT INTO `order_details` VALUES (15, 13, 11, 'Ốp con thỏ', 100000.00, 1, '2021-11-21 14:43:24', '2021-11-21 14:43:24', 100000.00, 'images/product-06.jpg');
INSERT INTO `order_details` VALUES (16, 13, 13, 'Ốp con thỏ', 150000.00, 1, '2021-11-21 14:43:24', '2021-11-21 14:43:24', 150000.00, 'images/product-06.jpg');
INSERT INTO `order_details` VALUES (17, 13, 91, 'Ốp con thỏ', 80000.00, 1, '2021-11-21 14:43:24', '2021-11-21 14:43:24', 80000.00, 'images/product-06.jpg');
INSERT INTO `order_details` VALUES (18, 14, 11, 'Ốp con thỏ', 100000.00, 1, '2022-05-06 14:31:05', '2022-05-06 14:31:05', 100000.00, 'images/product-06.jpg');
INSERT INTO `order_details` VALUES (19, 14, 13, 'Ốp con thỏ', 150000.00, 1, '2022-05-06 14:31:05', '2022-05-06 14:31:05', 150000.00, 'images/product-06.jpg');

-- ----------------------------
-- Table structure for order_status
-- ----------------------------
DROP TABLE IF EXISTS `order_status`;
CREATE TABLE `order_status`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of order_status
-- ----------------------------
INSERT INTO `order_status` VALUES (1, 'Mới');
INSERT INTO `order_status` VALUES (2, 'Đang xử lý');
INSERT INTO `order_status` VALUES (3, 'Đang vận chuyển');
INSERT INTO `order_status` VALUES (4, 'Đã giao hàng');
INSERT INTO `order_status` VALUES (5, 'Hủy');

-- ----------------------------
-- Table structure for payment_method
-- ----------------------------
DROP TABLE IF EXISTS `payment_method`;
CREATE TABLE `payment_method`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of payment_method
-- ----------------------------
INSERT INTO `payment_method` VALUES (1, 'Thanh toán khi giao hàng (COD)');
INSERT INTO `payment_method` VALUES (2, 'Chuyển khoản qua ngân hàng');
INSERT INTO `payment_method` VALUES (3, 'Thanh toán tại cửa hàng');
INSERT INTO `payment_method` VALUES (4, 'Chuyển tiền qua số điện thoại Momo');

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `product_type_id` int(11) NULL DEFAULT NULL,
  `price` decimal(15, 2) NULL DEFAULT NULL,
  `image` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `code` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `sale_off` int(11) NULL DEFAULT NULL COMMENT '0: không, 1:có',
  `price_sale` decimal(15, 2) NULL DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 96 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES (10, 'Ốp con thỏ', 1, 80000.00, 'images/product-06.jpg', 'OCT', 0, NULL, NULL, '2021-11-05 20:51:45', '2021-11-05 20:51:45');
INSERT INTO `product` VALUES (11, 'Ốp con thỏ', 2, 100000.00, 'images/product-06.jpg', 'OCT', 0, NULL, NULL, '2021-11-05 20:51:49', '2021-11-05 20:51:49');
INSERT INTO `product` VALUES (12, 'Ốp con thỏ', 2, 110000.00, 'images/product-06.jpg', 'OCT', 0, NULL, NULL, '2021-11-06 20:51:53', '2021-11-06 20:51:53');
INSERT INTO `product` VALUES (13, 'Ốp con thỏ', 3, 150000.00, 'images/product-06.jpg', 'OCT', 0, NULL, NULL, '2021-11-06 20:51:56', '2021-11-06 20:51:56');
INSERT INTO `product` VALUES (14, 'Ốp con thỏ', 3, 150000.00, 'images/product-06.jpg', 'OCT', 1, 100000.00, NULL, '2021-11-06 20:52:00', '2021-11-06 20:52:00');
INSERT INTO `product` VALUES (81, 'Ốp con thỏ', 1, 80000.00, 'images/product-06.jpg', 'OCT', 0, NULL, NULL, '2021-11-05 20:51:45', '2021-11-05 20:51:45');
INSERT INTO `product` VALUES (82, 'Ốp con thỏ', 2, 100000.00, 'images/product-06.jpg', 'OCT', 0, NULL, NULL, '2021-11-05 20:51:49', '2021-11-05 20:51:49');
INSERT INTO `product` VALUES (83, 'Ốp con thỏ', 2, 110000.00, 'images/product-06.jpg', 'OCT', 0, NULL, NULL, '2021-11-06 20:51:53', '2021-11-06 20:51:53');
INSERT INTO `product` VALUES (84, 'Ốp con thỏ', 3, 150000.00, 'images/product-06.jpg', 'OCT', 0, NULL, NULL, '2021-11-06 20:51:56', '2021-11-06 20:51:56');
INSERT INTO `product` VALUES (85, 'Ốp con thỏ', 3, 150000.00, 'images/product-06.jpg', 'OCT', 1, 100000.00, NULL, '2021-11-06 20:52:00', '2021-11-06 20:52:00');
INSERT INTO `product` VALUES (86, 'Ốp con thỏ', 1, 80000.00, 'images/product-06.jpg', 'OCT', 0, NULL, NULL, '2021-11-05 20:51:45', '2021-11-05 20:51:45');
INSERT INTO `product` VALUES (87, 'Ốp con thỏ', 2, 100000.00, 'images/product-06.jpg', 'OCT', 0, NULL, NULL, '2021-11-05 20:51:49', '2021-11-05 20:51:49');
INSERT INTO `product` VALUES (88, 'Ốp con thỏ', 2, 110000.00, 'images/product-06.jpg', 'OCT', 0, NULL, NULL, '2021-11-06 20:51:53', '2021-11-06 20:51:53');
INSERT INTO `product` VALUES (89, 'Ốp con thỏ', 3, 150000.00, 'images/product-06.jpg', 'OCT', 0, NULL, NULL, '2021-11-06 20:51:56', '2021-11-06 20:51:56');
INSERT INTO `product` VALUES (90, 'Ốp con thỏ', 3, 150000.00, 'images/product-06.jpg', 'OCT', 1, 100000.00, NULL, '2021-11-06 20:52:00', '2021-11-06 20:52:00');
INSERT INTO `product` VALUES (91, 'Ốp con thỏ', 1, 80000.00, 'images/product-06.jpg', 'OCT', 0, NULL, NULL, '2021-11-05 20:51:45', '2021-11-05 20:51:45');
INSERT INTO `product` VALUES (92, 'Ốp con thỏ', 2, 100000.00, 'images/product-06.jpg', 'OCT', 0, NULL, NULL, '2021-11-05 20:51:49', '2021-11-05 20:51:49');
INSERT INTO `product` VALUES (93, 'Ốp con thỏ', 2, 110000.00, 'images/product-06.jpg', 'OCT', 0, NULL, NULL, '2021-11-06 20:51:53', '2021-11-06 20:51:53');
INSERT INTO `product` VALUES (94, 'Ốp con thỏ', 3, 150000.00, 'images/product-06.jpg', 'OCT', 0, NULL, NULL, '2021-11-06 20:51:56', '2021-11-06 20:51:56');
INSERT INTO `product` VALUES (95, 'Ốp con thỏ', 3, 150000.00, 'images/product-06.jpg', 'OCT', 1, 100000.00, NULL, '2021-11-06 20:52:00', '2021-11-06 20:52:00');

-- ----------------------------
-- Table structure for product_type
-- ----------------------------
DROP TABLE IF EXISTS `product_type`;
CREATE TABLE `product_type`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `code` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of product_type
-- ----------------------------
INSERT INTO `product_type` VALUES (1, 'Ốp lưng', 'OP');
INSERT INTO `product_type` VALUES (2, 'Áo', 'AO');
INSERT INTO `product_type` VALUES (3, 'Quần', 'QA');

-- ----------------------------
-- Table structure for slider
-- ----------------------------
DROP TABLE IF EXISTS `slider`;
CREATE TABLE `slider`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title1` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `title2` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `title3` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `image` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `page` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of slider
-- ----------------------------
INSERT INTO `slider` VALUES (1, 'MẬP MẬP STORE', 'Giảm Giá Mùa Hè', 'Giảm giá ốp lưng mừng ngày tự u trường, hãy nhanh tay để có cơ hội mua ốp giá rẻ', 'images/slide-02.jpg', '');
INSERT INTO `slider` VALUES (2, 'MẬP MẬP STORE', 'Giảm Giá Mùa Hè', 'Giảm giá ốp lưng mừng ngày tự u trường, hãy nhanh tay để có cơ hội mua ốp giá rẻ', 'images/slide-03.jpg', 'product');
INSERT INTO `slider` VALUES (3, 'MẬP MẬP STORE', 'Giảm Giá Mùa Hè', 'Giảm giá ốp lưng mừng ngày tự u trường, hãy nhanh tay để có cơ hội mua ốp giá rẻ', 'images/slide-03.jpg', 'about');
INSERT INTO `slider` VALUES (4, 'MẬP MẬP STORE', 'Giảm Giá Mùa Hè', 'Giảm giá ốp lưng mừng ngày tự u trường, hãy nhanh tay để có cơ hội mua ốp giá rẻ', 'images/slide-03.jpg', 'contact');
INSERT INTO `slider` VALUES (5, 'MẬP MẬP STORE', 'Giảm Giá Mùa Hè', 'Giảm giá ốp lưng mừng ngày tự u trường, hãy nhanh tay để có cơ hội mua ốp giá rẻ', 'images/slide-03.jpg', 'shopping-cart');

-- ----------------------------
-- Table structure for support
-- ----------------------------
DROP TABLE IF EXISTS `support`;
CREATE TABLE `support`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `email` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `phone` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of support
-- ----------------------------
INSERT INTO `support` VALUES (2, 'phúc', 'phuc@gmail.com', '0909942585', 'shop còn ốp j7plus ko', '2021-11-21 15:54:51', '2021-11-21 15:54:51');
INSERT INTO `support` VALUES (3, 'phúc', 'phucdang@gmail.com', '0909942585', 'ốp j7 plus chuột mickey còn không', '2022-05-06 14:29:17', '2022-05-06 14:29:17');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `password` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'admin@gmail.com', '123456', 'Phúc Đặng', 'images/product-06.jpg');

SET FOREIGN_KEY_CHECKS = 1;
