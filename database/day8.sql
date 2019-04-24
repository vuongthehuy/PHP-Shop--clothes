/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : ph0518

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-08-29 19:03:22
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `tbl_brand`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_brand`;
CREATE TABLE `tbl_brand` (
  `brand_id` int(100) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(100) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_brand
-- ----------------------------
INSERT INTO tbl_brand VALUES ('1', 'Louis Vuitton', '1');
INSERT INTO tbl_brand VALUES ('2', ' CHANEL', '1');
INSERT INTO tbl_brand VALUES ('4', 'PRADA', '1');
INSERT INTO tbl_brand VALUES ('5', 'DIOR', '1');
INSERT INTO tbl_brand VALUES ('6', 'HERMÈS', '1');
INSERT INTO tbl_brand VALUES ('7', 'BURBERRY', '1');
INSERT INTO tbl_brand VALUES ('8', 'GUCCI', '1');
INSERT INTO tbl_brand VALUES ('9', 'VERSACE', '1');
INSERT INTO tbl_brand VALUES ('10', 'D&G', '1');
INSERT INTO tbl_brand VALUES ('11', 'FENDI', '1');
INSERT INTO tbl_brand VALUES ('12', 'BOTTEGA VENETA', '1');
INSERT INTO tbl_brand VALUES ('13', 'Givenchy', '1');
INSERT INTO tbl_brand VALUES ('14', 'Yves Saint Laurent', '1');
INSERT INTO tbl_brand VALUES ('15', 'MAY', '1');

-- ----------------------------
-- Table structure for `tbl_category`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_category`;
CREATE TABLE `tbl_category` (
  `cat_id` int(100) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(100) DEFAULT NULL,
  `parent_id` int(100) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_category
-- ----------------------------
INSERT INTO tbl_category VALUES ('1', 'Women\'s Collection', '0', null, '1');
INSERT INTO tbl_category VALUES ('2', 'Men\'s Collection', '0', null, '1');
INSERT INTO tbl_category VALUES ('3', 'Kid\'s Collection', '0', null, '1');
INSERT INTO tbl_category VALUES ('4', 'Dresses', '1', 'uploads/woment1.jpg', '1');
INSERT INTO tbl_category VALUES ('5', 'Blouses ', '1', 'uploads/woment2.jpg', '1');
INSERT INTO tbl_category VALUES ('6', 'T-shirts', '1', 'uploads/woment3.jpg', '1');
INSERT INTO tbl_category VALUES ('7', 'Rompers', '1', 'uploads/woment4.jpg', '1');
INSERT INTO tbl_category VALUES ('8', 'T-Shirts', '2', 'uploads/men1.jpg', '1');
INSERT INTO tbl_category VALUES ('9', 'Polo', '2', 'uploads/men2.jpg', null);
INSERT INTO tbl_category VALUES ('10', 'Shirts', '2', 'uploads/men3.jpg', '1');
INSERT INTO tbl_category VALUES ('11', 'Jackets', '2', 'uploads/men4.jpg', '1');
INSERT INTO tbl_category VALUES ('12', 'Dresses', '3', 'uploads/kid1.jpg', '1');
INSERT INTO tbl_category VALUES ('13', 'Shirts', '3', 'uploads/kid2.jpg', '1');
INSERT INTO tbl_category VALUES ('14', 'Trench', '3', 'uploads/kid3.jpg', '1');
INSERT INTO tbl_category VALUES ('15', 'Jackets', '3', 'uploads/7-1483619825285.jpg', '1');

-- ----------------------------
-- Table structure for `tbl_color`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_color`;
CREATE TABLE `tbl_color` (
  `col_id` int(100) NOT NULL AUTO_INCREMENT,
  `col_name` varchar(100) DEFAULT NULL,
  `col_code` varchar(100) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`col_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_color
-- ----------------------------
INSERT INTO tbl_color VALUES ('1', 'Black', ' #000000', '1');
INSERT INTO tbl_color VALUES ('2', 'White', '#FFFFFF', '1');
INSERT INTO tbl_color VALUES ('3', '	Red', '#FF0000', '1');
INSERT INTO tbl_color VALUES ('4', '	Lime', '#00FF00', '1');
INSERT INTO tbl_color VALUES ('5', '	Blue', '	#0000FF', '1');
INSERT INTO tbl_color VALUES ('6', 'Yellow', '	#FFFF00', '1');
INSERT INTO tbl_color VALUES ('7', 'Cyan / Aqua', '	#00FFFF', '1');
INSERT INTO tbl_color VALUES ('8', 'Magenta / Fuchsia', '	#FF00FF', '1');
INSERT INTO tbl_color VALUES ('9', 'Silver', '	#C0C0C0', '1');
INSERT INTO tbl_color VALUES ('10', '	Gray', '	#808080', '1');
INSERT INTO tbl_color VALUES ('11', '	Maroon', '	#800000', '1');
INSERT INTO tbl_color VALUES ('12', '	Olive', '	#808000', '1');
INSERT INTO tbl_color VALUES ('13', '	Green', '#008000', '1');
INSERT INTO tbl_color VALUES ('14', '	Purple', '#800080', '1');
INSERT INTO tbl_color VALUES ('15', '	Teal1', ' 15', '1');

-- ----------------------------
-- Table structure for `tbl_image`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_image`;
CREATE TABLE `tbl_image` (
  `img_id` int(100) NOT NULL AUTO_INCREMENT,
  `pro_id` int(100) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`img_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_image
-- ----------------------------
INSERT INTO tbl_image VALUES ('1', '1', 'uploads/woment1.jpg', '1');
INSERT INTO tbl_image VALUES ('2', '2', 'uploads/woment2.jpg', '1');
INSERT INTO tbl_image VALUES ('3', '3', 'uploads/woment3.jpg', '1');
INSERT INTO tbl_image VALUES ('4', '4', 'uploads/woment4.jpg', '1');
INSERT INTO tbl_image VALUES ('5', '5', 'uploads/woment5.jpg', '1');
INSERT INTO tbl_image VALUES ('6', '6', 'uploads/men1.jpg', '1');
INSERT INTO tbl_image VALUES ('7', '7', 'uploads/men2.jpg', '1');
INSERT INTO tbl_image VALUES ('8', '8', 'uploads/men3.jpg', '1');
INSERT INTO tbl_image VALUES ('9', '9', 'uploads/men4.jpg', '1');
INSERT INTO tbl_image VALUES ('10', '10', 'uploads/men5.jpg', '1');
INSERT INTO tbl_image VALUES ('11', '11', 'uploads/kid1.jpg', '1');
INSERT INTO tbl_image VALUES ('12', '12', 'uploads/kid2.jpg', '1');
INSERT INTO tbl_image VALUES ('13', '13', 'uploads/kid3.jpg', '1');
INSERT INTO tbl_image VALUES ('14', '14', 'uploads/kid4.jpg', '1');
INSERT INTO tbl_image VALUES ('16', '15', 'uploads/7-1483619825285.jpg', '1');

-- ----------------------------
-- Table structure for `tbl_order`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_order`;
CREATE TABLE `tbl_order` (
  `order_id` int(100) NOT NULL AUTO_INCREMENT,
  `user_id` int(100) DEFAULT NULL,
  `total` float(255,0) DEFAULT NULL,
  `date_create` datetime DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `full_fullName` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telephone` int(100) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_order
-- ----------------------------
INSERT INTO tbl_order VALUES ('1', '1', '100000', '2018-08-08 21:51:03', '1', 'An', 'An@gmail.com', '545435', 'Hưng Yên');
INSERT INTO tbl_order VALUES ('2', '2', '20000', '2018-08-09 21:51:06', '1', 'Bình', 'Binh@gmail.com', '5345454', 'Thái Bình ');
INSERT INTO tbl_order VALUES ('3', '3', '50000', '2018-08-25 21:51:11', '1', 'Chi', 'Chi@gmial.com', '2535345', 'Nam Định');
INSERT INTO tbl_order VALUES ('4', '4', '400000', '2018-07-31 21:51:15', '1', 'Dũng', 'Dung@gmail.com', '535345', 'Hà Nội');
INSERT INTO tbl_order VALUES ('5', '5', '800000', '2018-08-09 21:51:19', '1', 'Mai', 'Mai@gmail.com', '253545', 'Cà Mau');

-- ----------------------------
-- Table structure for `tbl_orderdetail`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_orderdetail`;
CREATE TABLE `tbl_orderdetail` (
  `order_detail_id` int(100) NOT NULL AUTO_INCREMENT,
  `order_id` int(100) DEFAULT NULL,
  `product_id` int(100) DEFAULT NULL,
  `quanlity` varchar(255) DEFAULT NULL,
  `size_id` int(100) DEFAULT NULL,
  `color_id` int(100) DEFAULT NULL,
  `status` tinyint(100) DEFAULT NULL,
  `price` float(255,0) DEFAULT NULL,
  PRIMARY KEY (`order_detail_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_orderdetail
-- ----------------------------
INSERT INTO tbl_orderdetail VALUES ('1', '1', '1', 'tốt', '2', '5', '1', '50000');
INSERT INTO tbl_orderdetail VALUES ('2', '2', '2', 'đẹp', '2', '2', '1', '20000');
INSERT INTO tbl_orderdetail VALUES ('3', '3', '3', 'bền', '1', '3', '1', '10000');

-- ----------------------------
-- Table structure for `tbl_post`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_post`;
CREATE TABLE `tbl_post` (
  `post_id` int(100) NOT NULL AUTO_INCREMENT,
  `subject` varchar(100) DEFAULT NULL,
  `dresscription` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_post
-- ----------------------------
INSERT INTO tbl_post VALUES ('1', 'váy', 'đẹp', 'uploads/kid2.jpg', 'váy xinh', '2018-08-16 21:44:51', '1');
INSERT INTO tbl_post VALUES ('2', 'quần', 'truât\'s', 'uploads/kid1.jpg', 'Quần bò', '2018-08-24 21:44:57', '1');
INSERT INTO tbl_post VALUES ('3', 'áo', 'tốt', 'uploads/men2.jpg', 'Áo thun', '2018-08-25 21:45:04', '1');
INSERT INTO tbl_post VALUES ('4', 'áo', 'đẹp', 'uploads/woment4.jpg', 'Áo da', '2018-08-02 21:45:08', '1');
INSERT INTO tbl_post VALUES ('5', 'áo', 'đep', 'uploads/woment4.jpg', 'Áo nữ', '2018-08-08 21:45:12', '1');
INSERT INTO tbl_post VALUES ('9', 'quần hoa', 'mát', 'uploads/7_620948.jpg', 'mát', '2018-08-19 00:00:00', '1');

-- ----------------------------
-- Table structure for `tbl_product`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_product`;
CREATE TABLE `tbl_product` (
  `pro_id` int(100) NOT NULL AUTO_INCREMENT,
  `pro_name` varchar(100) DEFAULT NULL,
  `pro_image` varchar(255) DEFAULT NULL,
  `cat_id` int(100) DEFAULT NULL,
  `col_id` int(100) DEFAULT NULL,
  `brand_id` int(100) DEFAULT NULL,
  `size_id` int(100) DEFAULT NULL,
  `price` int(100) DEFAULT NULL,
  `safe_of` float(100,0) DEFAULT NULL,
  `dresscription` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`pro_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_product
-- ----------------------------
INSERT INTO tbl_product VALUES ('1', 'áo len', 'uploads/woment5.jpg', '8', '1', '1', '1', '50000', '30', 'áo đẹp ', '1');
INSERT INTO tbl_product VALUES ('2', 'áo khoác', 'uploads/a.jpg', '8', '2', '2', '2', '20000', '20', 'áo ấm', '1');
INSERT INTO tbl_product VALUES ('3', 'áo thun', 'uploads/woment1.jpg', '4', '1', '1', '3', '10000', '10', 'mỏng', '1');
INSERT INTO tbl_product VALUES ('4', 'váy', 'uploads/woment2.jpg', '12', '3', '2', '3', '30000', '20', 'tốt', '1');
INSERT INTO tbl_product VALUES ('5', 'váy dạ hội', 'uploads/woment3.jpg', '8', '4', '1', '2', '40000', '50', 'đẹp', '1');
INSERT INTO tbl_product VALUES ('6', 'women4', 'uploads/woment4.jpg', '5', '5', '6', '4', '20000', '34', 'truât\'s', '1');
INSERT INTO tbl_product VALUES ('7', 'women5', 'uploads/woment5.jpg', '6', '6', '7', '2', '30000', '3', 'tốt', '1');
INSERT INTO tbl_product VALUES ('8', 'men1', 'uploads/men1.jpg', '7', '7', '8', '4', '10000', '7', 'dầy', '1');
INSERT INTO tbl_product VALUES ('9', 'men2', 'uploads/men2.jpg', '8', '8', '9', '3', '45000', '23', 'ấm', '1');
INSERT INTO tbl_product VALUES ('10', 'men3', 'uploads/men3.jpg', '9', '9', '10', '1', '56000', '45', 'đẹp', '1');
INSERT INTO tbl_product VALUES ('11', 'men4', 'uploads/men4.jpg', '10', '10', '11', '4', '67000', '6', 'tốt', '1');
INSERT INTO tbl_product VALUES ('12', 'kid1', 'uploads/kid1.jpg', '11', '11', '12', '3', '78000', '35', 'tốt', '1');
INSERT INTO tbl_product VALUES ('13', 'kid2', 'uploads/kid2.jpg', '12', '12', '13', '2', '90000', '46', 'ấm', '1');
INSERT INTO tbl_product VALUES ('14', 'kid3', 'uploads/kid3.jpg', '13', '13', '14', '1', '80000', '40', 'mềm', '1');
INSERT INTO tbl_product VALUES ('15', 'kid4', 'uploads/kid4.jpg', '14', '14', '15', '4', '24000', '50', 'ấm', '1');
INSERT INTO tbl_product VALUES ('17', 'xxx', '', '6', '7', '0', '2', '0', '22', 'đẹp', '1');

-- ----------------------------
-- Table structure for `tbl_province`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_province`;
CREATE TABLE `tbl_province` (
  `pro_id` int(100) NOT NULL AUTO_INCREMENT,
  `pro_name` varchar(100) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`pro_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_province
-- ----------------------------
INSERT INTO tbl_province VALUES ('1', 'Hưng Yên', '1');
INSERT INTO tbl_province VALUES ('2', 'Thái Bình', '1');
INSERT INTO tbl_province VALUES ('3', 'Nghệ An', '1');
INSERT INTO tbl_province VALUES ('4', 'Thanh Hóa', '1');
INSERT INTO tbl_province VALUES ('5', 'Cà Mau ', '1');
INSERT INTO tbl_province VALUES ('6', 'Vũng Tàu', '1');
INSERT INTO tbl_province VALUES ('7', 'Nam Định', '1');
INSERT INTO tbl_province VALUES ('8', 'Hạ Long', '1');
INSERT INTO tbl_province VALUES ('9', 'Lạng Sơn', '1');
INSERT INTO tbl_province VALUES ('10', 'Huế', '1');
INSERT INTO tbl_province VALUES ('11', 'Phan Thiết', '1');
INSERT INTO tbl_province VALUES ('12', 'Đồng Nai', '1');
INSERT INTO tbl_province VALUES ('13', 'Tây Nguyên', '1');
INSERT INTO tbl_province VALUES ('14', 'Hà Nội', '1');
INSERT INTO tbl_province VALUES ('15', 'An Giang', '1');

-- ----------------------------
-- Table structure for `tbl_size`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_size`;
CREATE TABLE `tbl_size` (
  `size_id` int(100) NOT NULL AUTO_INCREMENT,
  `size_name` varchar(100) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`size_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_size
-- ----------------------------
INSERT INTO tbl_size VALUES ('1', 'S', '1');
INSERT INTO tbl_size VALUES ('2', 'M', '1');
INSERT INTO tbl_size VALUES ('3', 'L', '1');
INSERT INTO tbl_size VALUES ('4', 'XL', '1');

-- ----------------------------
-- Table structure for `tbl_user`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user` (
  `user_id` int(100) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `gender` int(20) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `province_id` int(20) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `telephone` int(100) DEFAULT NULL,
  `role` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tbl_user
-- ----------------------------
INSERT INTO tbl_user VALUES ('1', 'admin', '123456', 'a@gmail.com', '1', '2018-08-16', '2', '1', '99876733', 'admin');
INSERT INTO tbl_user VALUES ('2', 'admin1', '111', 'N@gmail.com', '1', '2018-08-07', '3', '1', '78378', 'nhân viên');
INSERT INTO tbl_user VALUES ('3', 'admin2', '112', 'Bon@gmail.com', '0', '2018-07-29', '1', '1', '975787357', 'nhân  viên ');
INSERT INTO tbl_user VALUES ('4', 'A', '113', 'A@gmail.com', '0', '2018-07-24', '4', '1', '553446', 'nhân  viên ');
INSERT INTO tbl_user VALUES ('5', 'B', '114', 'B@gmail.com', '0', '2018-04-03', '6', '1', '3523553', 'nhân  viên ');
INSERT INTO tbl_user VALUES ('6', 'C', '115', 'C@gmail.com', '1', '2018-09-06', '7', '1', '2535345', 'nhân  viên ');
INSERT INTO tbl_user VALUES ('7', 'D', '116', 'D@gmail.com', '1', '2018-08-11', '8', '1', '25235345', 'nhân  viên ');
INSERT INTO tbl_user VALUES ('8', 'E', '117', 'E@gmail.com', '1', '2017-03-06', '9', '1', '235353', 'nhân  viên ');
INSERT INTO tbl_user VALUES ('9', 'F', '118', 'F@gmail.com', '0', '2018-08-08', '10', '1', '5235345', 'nhân  viên ');
INSERT INTO tbl_user VALUES ('10', 'G', '119', 'G@gmail.com', '0', '2018-08-10', '11', '1', '2523523', 'nhân  viên ');
INSERT INTO tbl_user VALUES ('11', 'H', '110', 'H@gmail.com', '0', '2018-08-25', '12', '1', '535345', 'nhân  viên ');
INSERT INTO tbl_user VALUES ('12', 'I', '1112', 'I@gmail.com', '1', '2018-09-01', '13', '1', '35353454', 'nhân  viên ');
INSERT INTO tbl_user VALUES ('13', 'K', '1113', 'K@gmail.com', '0', '2018-09-07', '14', '1', '534535', 'nhân  viên ');
INSERT INTO tbl_user VALUES ('14', 'L', '1114', 'L@gmail.com', '1', '2018-08-26', '2', '1', '2535345', 'nhân  viên ');
INSERT INTO tbl_user VALUES ('15', 'M', '1115', 'M@gmail.com', '1', '2018-09-14', '6', '1', '252534', 'nhân  viên ');
INSERT INTO tbl_user VALUES ('16', 'đ', '1234', 'cc@gmail.com', '0', '2018-08-10', '0', '1', '423423423', '');
INSERT INTO tbl_user VALUES ('18', 'hhh', '1234', 't@gmail.com', '0', '2018-08-12', '0', '1', '2147483647', 'nhân viên');

-- ----------------------------
-- Table structure for `tbl_wishlist`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_wishlist`;
CREATE TABLE `tbl_wishlist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `date_create` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_wishlist
-- ----------------------------
INSERT INTO tbl_wishlist VALUES ('1', '1', '1', '2018-08-29 14:01:23');
INSERT INTO tbl_wishlist VALUES ('2', '1', '1', '2018-08-29 14:02:29');
