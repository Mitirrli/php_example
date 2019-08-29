/*
 Navicat Premium Data Transfer

 Target Server Type    : MySQL
 Target Server Version : 80016
 File Encoding         : 65001

 Date: 29/08/2019 13:49:19
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for spider
-- ----------------------------
DROP TABLE IF EXISTS `spider`;
CREATE TABLE `spider` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `content` varchar(50) COLLATE utf8mb4_general_ci NOT NULL DEFAULT '' COMMENT '标题',
  `content_hash` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '' COMMENT 'url哈希值',
  `url` varchar(100) COLLATE utf8mb4_general_ci NOT NULL DEFAULT '' COMMENT '链接',
  `create_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

SET FOREIGN_KEY_CHECKS = 1;
