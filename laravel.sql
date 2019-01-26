/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50724
Source Host           : localhost:3306
Source Database       : laravel

Target Server Type    : MYSQL
Target Server Version : 50724
File Encoding         : 65001

Date: 2019-01-26 11:17:00
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2', '2014_10_12_100000_create_password_resets_table', '1');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for step1
-- ----------------------------
DROP TABLE IF EXISTS `step1`;
CREATE TABLE `step1` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `createdate` varchar(20) NOT NULL,
  `last_update` varchar(20) NOT NULL,
  `title` varchar(20) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of step1
-- ----------------------------
INSERT INTO `step1` VALUES ('30', '2018-11-27 10:45:10', '2018-11-27 10:45:10', 'Jay Chou', '多少八零后九零后学生时代都是听周杰伦的歌曲、抄方文山的歌词长大的。今天，就带大家来回忆一下，大家记忆中的美好青春。', 'public/Admin/img/20181127/371543315510.jpeg');
INSERT INTO `step1` VALUES ('31', '2018-11-28 02:33:23', '2018-11-28 02:33:23', '这是一个不能说的秘密', '这是一个不能说的秘密', 'public/Admin/img/20181128/951543372403.jpeg');
INSERT INTO `step1` VALUES ('32', '2018-11-28 02:33:47', '2018-11-28 02:33:47', '叶湘伦', '叶湘伦', 'public/Admin/img/20181128/361543372427.jpeg');
INSERT INTO `step1` VALUES ('33', '2018-11-28 02:33:54', '2018-11-28 02:33:54', '叶湘伦', '叶湘伦', 'public/Admin/img/20181128/121543372434.jpeg');
INSERT INTO `step1` VALUES ('34', '2018-11-28 02:34:17', '2018-11-28 02:34:17', '路小雨', '路小雨', 'public/Admin/img/20181128/451543372457.jpeg');
INSERT INTO `step1` VALUES ('35', '2018-11-28 02:34:27', '2018-11-28 02:34:27', '小雨', '小雨', 'public/Admin/img/20181128/191543372467.jpeg');
INSERT INTO `step1` VALUES ('36', '2018-11-28 02:34:39', '2018-11-28 02:34:39', '小雨跑了', '小雨跑了', 'public/Admin/img/20181128/31543372479.jpeg');
INSERT INTO `step1` VALUES ('37', '2018-11-27 10:45:10', '2018-11-27 10:45:10', 'Jay Chou', '多少八零后九零后学生时代都是听周杰伦的歌曲、抄方文山的歌词长大的。今天，就带大家来回忆一下，大家记忆中的美好青春。', 'public/Admin/img/20181127/371543315510.jpeg');
INSERT INTO `step1` VALUES ('38', '2018-11-28 02:33:23', '2018-11-28 02:33:23', '这是一个不能说的秘密', '这是一个不能说的秘密', 'public/Admin/img/20181128/951543372403.jpeg');
INSERT INTO `step1` VALUES ('39', '2018-11-28 02:33:47', '2018-11-28 02:33:47', '叶湘伦', '叶湘伦', 'public/Admin/img/20181128/361543372427.jpeg');
INSERT INTO `step1` VALUES ('40', '2018-11-28 02:33:54', '2018-11-28 02:33:54', '叶湘伦', '叶湘伦', 'public/Admin/img/20181128/121543372434.jpeg');
INSERT INTO `step1` VALUES ('41', '2018-11-28 02:34:17', '2018-11-28 02:34:17', '路小雨', '路小雨', 'public/Admin/img/20181128/451543372457.jpeg');
INSERT INTO `step1` VALUES ('42', '2018-11-28 02:34:27', '2018-11-28 02:34:27', '小雨', '小雨', 'public/Admin/img/20181128/191543372467.jpeg');
INSERT INTO `step1` VALUES ('43', '2018-11-28 02:34:39', '2018-11-28 02:34:39', '小雨跑了', '小雨跑了', 'public/Admin/img/20181128/31543372479.jpeg');
INSERT INTO `step1` VALUES ('44', '2018-11-27 10:45:10', '2018-11-27 10:45:10', 'Jay Chou', '多少八零后九零后学生时代都是听周杰伦的歌曲、抄方文山的歌词长大的。今天，就带大家来回忆一下，大家记忆中的美好青春。', 'public/Admin/img/20181127/371543315510.jpeg');
INSERT INTO `step1` VALUES ('45', '2018-11-28 02:33:23', '2018-11-28 02:33:23', '这是一个不能说的秘密', '这是一个不能说的秘密', 'public/Admin/img/20181128/951543372403.jpeg');
INSERT INTO `step1` VALUES ('46', '2018-11-28 02:33:47', '2018-11-28 02:33:47', '叶湘伦', '叶湘伦', 'public/Admin/img/20181128/361543372427.jpeg');
INSERT INTO `step1` VALUES ('47', '2018-11-28 02:33:54', '2018-11-28 02:33:54', '叶湘伦', '叶湘伦', 'public/Admin/img/20181128/121543372434.jpeg');
INSERT INTO `step1` VALUES ('48', '2018-11-28 02:34:17', '2018-11-28 02:34:17', '路小雨', '路小雨', 'public/Admin/img/20181128/451543372457.jpeg');
INSERT INTO `step1` VALUES ('49', '2018-11-28 02:34:27', '2018-11-28 02:34:27', '小雨', '小雨', 'public/Admin/img/20181128/191543372467.jpeg');
INSERT INTO `step1` VALUES ('50', '2018-11-28 02:34:39', '2018-11-28 02:34:39', '小雨跑了', '小雨跑了', 'public/Admin/img/20181128/31543372479.jpeg');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', '123', '123', null, '123', null, null, null);
