/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : 1980media_db

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-03-20 02:48:28
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for email_contact
-- ----------------------------
DROP TABLE IF EXISTS `email_contact`;
CREATE TABLE `email_contact` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama_akun` varchar(200) DEFAULT NULL,
  `nama_email` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of email_contact
-- ----------------------------
INSERT INTO `email_contact` VALUES ('14', 'Okki Setyawan S.Kom', 'sawunggalihapik@gmail.com');

-- ----------------------------
-- Table structure for email_request
-- ----------------------------
DROP TABLE IF EXISTS `email_request`;
CREATE TABLE `email_request` (
  `id` int(10) NOT NULL,
  `nama_akun` varchar(200) DEFAULT NULL,
  `nama_email` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of email_request
-- ----------------------------
INSERT INTO `email_request` VALUES ('0', 'Yahya', 'yahya@gmail.com');

-- ----------------------------
-- Table structure for email_subscribe
-- ----------------------------
DROP TABLE IF EXISTS `email_subscribe`;
CREATE TABLE `email_subscribe` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama_akun` varchar(200) DEFAULT NULL,
  `nama_email` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of email_subscribe
-- ----------------------------
INSERT INTO `email_subscribe` VALUES ('1', 'Yuyun', 'yuyun@mail.com');

-- ----------------------------
-- Table structure for email_subscriber
-- ----------------------------
DROP TABLE IF EXISTS `email_subscriber`;
CREATE TABLE `email_subscriber` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama_akun` varchar(200) DEFAULT NULL,
  `nama_email` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of email_subscriber
-- ----------------------------
INSERT INTO `email_subscriber` VALUES ('1', 'Okki', 'okkisetyawan@gmail.com');

-- ----------------------------
-- Table structure for m_user
-- ----------------------------
DROP TABLE IF EXISTS `m_user`;
CREATE TABLE `m_user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `no_telp` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_user
-- ----------------------------
INSERT INTO `m_user` VALUES ('24', 'adminx', '0cc175b9c0f1b6a831c399e269772661', 'admin@gmail.com', '0924234');
INSERT INTO `m_user` VALUES ('64', 'karlina', '0cc175b9c0f1b6a831c399e269772661', 'karlinamaksum19@gmail.com', '088978234234');

-- ----------------------------
-- Table structure for page_about
-- ----------------------------
DROP TABLE IF EXISTS `page_about`;
CREATE TABLE `page_about` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `konten` varchar(200) DEFAULT NULL,
  `last_update` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of page_about
-- ----------------------------
INSERT INTO `page_about` VALUES ('3', '<p style=\"text-align: center;\"><strong>This is about page</strong></p>\r\n<p><img src=\"http://localhost/1980media/uploads/lambo.png\" alt=\"lambo.png (0 b)\" width=\"240\" height=\"96\" /></p>\r\n<p>&nbsp;</p>\r\n', '2018-03-20 02:39:59');

-- ----------------------------
-- Table structure for page_footer
-- ----------------------------
DROP TABLE IF EXISTS `page_footer`;
CREATE TABLE `page_footer` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `konten` varchar(200) DEFAULT NULL,
  `last_update` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of page_footer
-- ----------------------------
INSERT INTO `page_footer` VALUES ('3', '© 2018 Okki Setyawan S', '2018-03-20 00:50:34');

-- ----------------------------
-- Table structure for page_homepage
-- ----------------------------
DROP TABLE IF EXISTS `page_homepage`;
CREATE TABLE `page_homepage` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `konten` varchar(200) DEFAULT NULL,
  `last_update` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of page_homepage
-- ----------------------------
INSERT INTO `page_homepage` VALUES ('3', '<p>HHHH</p>\r\n<p><img src=\"http://localhost/1980media/uploads/lambo.png\" alt=\"lambo.png (0 b)\" width=\"240\" height=\"96\" /></p>', '2018-03-20 01:00:13');

-- ----------------------------
-- Table structure for t_client
-- ----------------------------
DROP TABLE IF EXISTS `t_client`;
CREATE TABLE `t_client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_client` varchar(200) DEFAULT NULL,
  `logo` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_client
-- ----------------------------

-- ----------------------------
-- Table structure for t_konsultan
-- ----------------------------
DROP TABLE IF EXISTS `t_konsultan`;
CREATE TABLE `t_konsultan` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `no_telp` text,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_konsultan
-- ----------------------------
INSERT INTO `t_konsultan` VALUES ('1', 'Okki', '7866779', 'okkisetyawan@gmail.com');
