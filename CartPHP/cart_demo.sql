/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100406
 Source Host           : 127.0.0.1:3306
 Source Schema         : cart_demo

 Target Server Type    : MySQL
 Target Server Version : 100406
 File Encoding         : 65001

 Date: 26/12/2019 20:54:56
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_image` mediumtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `product_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `product_desc` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `price` double NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES (1, 'lent460.png', 'Lenovo Thinkpad T460s', 'Core i5-6300U // 8GB // ssd 256GB // 14.0-inch FHD 1920x1080', 13200000);
INSERT INTO `products` VALUES (2, 'asg531.png', 'Asus ROG Strig G531GD', 'Core i7-9750H // 8GB // ssd 512GB // 15.6-inch NanoEdge FHD 1920x1080', 24390000);
INSERT INTO `products` VALUES (3, 'msigf63.png', 'MSI GF63 Thin 9SC', 'Core i7-9750H // 8GB // ssd 512GB // 15.6-inch FHD 1920x1080', 21990000);
INSERT INTO `products` VALUES (4, 'del5568.jpg', 'Dell Vostro 5568', 'Core i5-10210U // 8GB // ssd 512GB + hdd 1TB // 15.6-inch FHD 1920x1080', 17000000);
INSERT INTO `products` VALUES (5, 'acetriton.jpg', 'Acer Predator Triton 900', 'Core i7-9750H // 32GB // ssd 1TB // 15.6-inch FHD 1920x1080', 129990000);
INSERT INTO `products` VALUES (6, 'hppav.jpg', 'HP Pavillion 15-cs1009TU', 'Core i5-8265U // 4GB // 1TB 5400 rpm SATA // 15.6-inch diagonal anti-glare WLED-backlit  FHD 1920x1080', 14290000);
INSERT INTO `products` VALUES (7, 'asvivo.jpg', 'Asus Vivobook A512FA', 'Core i5-10210U // 8GB // ssd 512GB // 15.6-inch anti-glare FHD 1920x1080', 15490000);
INSERT INTO `products` VALUES (8, 'lg17z.png', 'LG Gram 17Z990', 'Core i7-8565U // 8GB // ssd 512GB // 17.0-inch WQXGA 2560x1600', 32300000);
INSERT INTO `products` VALUES (9, 'surpro.png', 'Surface Pro 6', 'Core i7-8930U // 16GB // ssd 512GB // 12.3-inch PixelSense 2736x1824', 37990000);

SET FOREIGN_KEY_CHECKS = 1;
