/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : 1980media_db

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-03-20 11:31:57
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
-- Table structure for page_analytic
-- ----------------------------
DROP TABLE IF EXISTS `page_analytic`;
CREATE TABLE `page_analytic` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `konten` varchar(200) DEFAULT NULL,
  `last_update` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of page_analytic
-- ----------------------------
INSERT INTO `page_analytic` VALUES ('3', '<p style=\"text-align: center;\"><strong>This is analytic page</strong></p>\r\n<p><img src=\"http://localhost/1980media/uploads/lambo.png\" alt=\"lambo.png (0 b)\" width=\"240\" height=\"96\" /></p>\r\n<p>&nbsp;</p', '2018-03-20 11:25:50');

-- ----------------------------
-- Table structure for page_contact
-- ----------------------------
DROP TABLE IF EXISTS `page_contact`;
CREATE TABLE `page_contact` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `konten` varchar(200) DEFAULT NULL,
  `last_update` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of page_contact
-- ----------------------------
INSERT INTO `page_contact` VALUES ('3', '<h1><strong>Contact Us</strong></h1>\r\n<p>Silahkan menghubungi list dibawah ini :</p>', '2018-03-20 10:59:20');

-- ----------------------------
-- Table structure for page_digital_adv
-- ----------------------------
DROP TABLE IF EXISTS `page_digital_adv`;
CREATE TABLE `page_digital_adv` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `konten` varchar(200) DEFAULT NULL,
  `last_update` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of page_digital_adv
-- ----------------------------
INSERT INTO `page_digital_adv` VALUES ('3', '<p style=\"text-align: center;\"><strong>This is digital advertising page</strong></p>\r\n<p><img src=\"http://localhost/1980media/uploads/lambo.png\" alt=\"lambo.png (0 b)\" width=\"240\" height=\"96\" /></p>\r\n<', '2018-03-20 11:23:33');

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
-- Table structure for page_graph_design
-- ----------------------------
DROP TABLE IF EXISTS `page_graph_design`;
CREATE TABLE `page_graph_design` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `konten` varchar(200) DEFAULT NULL,
  `last_update` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of page_graph_design
-- ----------------------------
INSERT INTO `page_graph_design` VALUES ('3', '<p style=\"text-align: center;\"><strong>This is graphic design page</strong></p>\r\n<p><img src=\"http://localhost/1980media/uploads/lambo.png\" alt=\"lambo.png (0 b)\" width=\"240\" height=\"96\" /></p>\r\n<p>&nb', '2018-03-20 11:29:10');

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
-- Table structure for page_news_event
-- ----------------------------
DROP TABLE IF EXISTS `page_news_event`;
CREATE TABLE `page_news_event` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `konten` varchar(200) DEFAULT NULL,
  `last_update` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of page_news_event
-- ----------------------------
INSERT INTO `page_news_event` VALUES ('3', '<p style=\"text-align: center;\"><strong>This is news event page</strong></p>\r\n<p><img src=\"http://localhost/1980media/uploads/lambo.png\" alt=\"lambo.png (0 b)\" width=\"240\" height=\"96\" /></p>\r\n<p>&nbsp;<', '2018-03-20 10:50:50');

-- ----------------------------
-- Table structure for page_seo
-- ----------------------------
DROP TABLE IF EXISTS `page_seo`;
CREATE TABLE `page_seo` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `konten` varchar(200) DEFAULT NULL,
  `last_update` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of page_seo
-- ----------------------------
INSERT INTO `page_seo` VALUES ('3', '<p style=\"text-align: center;\"><strong>This is seo page</strong></p>\r\n<p><img src=\"http://localhost/1980media/uploads/lambo.png\" alt=\"lambo.png (0 b)\" width=\"240\" height=\"96\" /></p>\r\n<p>&nbsp;</p>', '2018-03-20 11:21:05');

-- ----------------------------
-- Table structure for page_services
-- ----------------------------
DROP TABLE IF EXISTS `page_services`;
CREATE TABLE `page_services` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `konten` varchar(200) DEFAULT NULL,
  `last_update` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of page_services
-- ----------------------------
INSERT INTO `page_services` VALUES ('3', '<p style=\"text-align: center;\"><strong>This is&nbsp; all services page</strong></p>\r\n<p><img src=\"http://localhost/1980media/uploads/lambo.png\" alt=\"lambo.png (0 b)\" width=\"240\" height=\"96\" /></p>\r\n<p', '2018-03-20 11:18:00');

-- ----------------------------
-- Table structure for page_webdev
-- ----------------------------
DROP TABLE IF EXISTS `page_webdev`;
CREATE TABLE `page_webdev` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `konten` varchar(200) DEFAULT NULL,
  `last_update` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of page_webdev
-- ----------------------------
INSERT INTO `page_webdev` VALUES ('3', '<p style=\"text-align: center;\"><strong>This is about page</strong></p>\r\n<p><img src=\"http://localhost/1980media/uploads/lambo.png\" alt=\"lambo.png (0 b)\" width=\"240\" height=\"96\" /></p>\r\n<p>&nbsp;</p>\r\n', '2018-03-20 02:39:59');

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
-- Table structure for t_contact
-- ----------------------------
DROP TABLE IF EXISTS `t_contact`;
CREATE TABLE `t_contact` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `no_telp` text,
  `email` varchar(100) DEFAULT NULL,
  `pesan` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_contact
-- ----------------------------
INSERT INTO `t_contact` VALUES ('9', 'Okki Setyawan', '088978234234', 'okkisetyawan@gmail.com', 'tess');

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

-- ----------------------------
-- Table structure for t_request
-- ----------------------------
DROP TABLE IF EXISTS `t_request`;
CREATE TABLE `t_request` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `no_telp` text,
  `email` varchar(100) DEFAULT NULL,
  `link_url` varchar(200) DEFAULT NULL,
  `pesan` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_request
-- ----------------------------
INSERT INTO `t_request` VALUES ('4', 'Yayuk', '0897625472340', 'yuk@mail.com', 'www.yukayu.com', 'kencot');
INSERT INTO `t_request` VALUES ('5', 'Toso', '088978234234', 'toso@mail.com', null, 'uwis yuk');
INSERT INTO `t_request` VALUES ('6', 'Tuti', '088234243', 'tuts@mail.com', null, 'yahahaha');
INSERT INTO `t_request` VALUES ('7', 'Yuna', '94826342', 'yuns@mail.com', null, 'Yuk lah');
INSERT INTO `t_request` VALUES ('8', 'Romidev', '088978234234', 'rodev@mail.com', null, 'udah la');
INSERT INTO `t_request` VALUES ('9', 'seeeooo', '896698', 'keseo@mail.com', null, 'fdsfsdf');
