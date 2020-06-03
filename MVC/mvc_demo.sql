/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100406
 Source Host           : 127.0.0.1:3306
 Source Schema         : mvc_demo

 Target Server Type    : MySQL
 Target Server Version : 100406
 File Encoding         : 65001

 Date: 09/01/2020 20:08:07
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for posts_table
-- ----------------------------
DROP TABLE IF EXISTS `posts_table`;
CREATE TABLE `posts_table`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `desc` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `view` int(10) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of posts_table
-- ----------------------------
INSERT INTO `posts_table` VALUES (1, 'bai 1', 'mo ta', 111);
INSERT INTO `posts_table` VALUES (2, 'bai 2', 'mo ta', 111);
INSERT INTO `posts_table` VALUES (4, 'bai 3', 'mo ta', 111);

SET FOREIGN_KEY_CHECKS = 1;
