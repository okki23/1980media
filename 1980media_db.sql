/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : 1980media_db

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-04-19 17:52:05
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of email_subscriber
-- ----------------------------
INSERT INTO `email_subscriber` VALUES ('1', 'Okki', 'okkisetyawan@gmail.com');

-- ----------------------------
-- Table structure for m_page_about
-- ----------------------------
DROP TABLE IF EXISTS `m_page_about`;
CREATE TABLE `m_page_about` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `header_image` varchar(255) DEFAULT NULL,
  `first_title` text,
  `first_desc` text,
  `pict_a` varchar(255) DEFAULT NULL,
  `desc_a` varchar(255) DEFAULT NULL,
  `pict_b` varchar(255) DEFAULT NULL,
  `desc_b` varchar(255) DEFAULT NULL,
  `pict_c` varchar(255) DEFAULT NULL,
  `desc_c` varchar(255) DEFAULT NULL,
  `pict_d` varchar(255) DEFAULT NULL,
  `desc_d` varchar(255) DEFAULT NULL,
  `second_title` text,
  `second_desc` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_page_about
-- ----------------------------
INSERT INTO `m_page_about` VALUES ('1', 'about.png', 'A Little Bit About Us', ' We’ Revolutionize Business & Product with Awesome Team and Proven Digital Strategies  1980media adalah Online Performance Marketing Agency, berdiri sejak tahun November 2016. Awal mula berdiri Founder kami menamai dengan Digital Revolution, namun dengan hadirnya Rekan Patner Bisnis yang sangat expert dibidang Online Marketing dan satu visi misi Bersama sang founder, akhirnya dinamakan 1980media yang berfokus kepada peningkatan ROI untuk para customer.', 'consultant.png', 'CONSULTING', 'research.png', 'RESEARCH', 'solution.png', 'CONSULTING', 'strategy.png', 'STRATEGY', 'Our Vision and Mission', 'Menjadi Agency Pemasaran Digital terintegrasi terkemuka di Indonesia. Menjadi pelopor pertumbuhan pemasaran digital di Indonesia dengan berfokus pada peningkatan ROI & loyalitas pelanggan untuk mengembangkan teknologi eksklusif dan memberikan solusi juga membantu bisnis online berkembang. ');

-- ----------------------------
-- Table structure for m_page_analytic
-- ----------------------------
DROP TABLE IF EXISTS `m_page_analytic`;
CREATE TABLE `m_page_analytic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header_image` varchar(255) DEFAULT NULL,
  `first_title` varchar(255) DEFAULT NULL,
  `first_desc` varchar(255) DEFAULT NULL,
  `content_image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_page_analytic
-- ----------------------------

-- ----------------------------
-- Table structure for m_page_contact
-- ----------------------------
DROP TABLE IF EXISTS `m_page_contact`;
CREATE TABLE `m_page_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header_image` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `link_maps` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_page_contact
-- ----------------------------
INSERT INTO `m_page_contact` VALUES ('1', 'contact.jpg', '', '', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.649019002196!2d107.02482781427321!3d-6.30975649543347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6991eb03121ced%3A0x7219177a941e608b!2sJl.+Dukuh+Zamrud%2C+Cimuning%2C+Mustikajaya%2C+Kota+Bks%2C+Jawa+Barat+17155!5e0!3m2!1sid!2sid!4v1522324884560');

-- ----------------------------
-- Table structure for m_page_digitaladv
-- ----------------------------
DROP TABLE IF EXISTS `m_page_digitaladv`;
CREATE TABLE `m_page_digitaladv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header_image` varchar(255) DEFAULT NULL,
  `first_title` varchar(255) DEFAULT NULL,
  `first_desc_title` varchar(255) DEFAULT NULL,
  `list_a` varchar(255) DEFAULT NULL,
  `list_b` varchar(255) DEFAULT NULL,
  `list_c` varchar(255) DEFAULT NULL,
  `list_d` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_page_digitaladv
-- ----------------------------
INSERT INTO `m_page_digitaladv` VALUES ('1', 'digital.jpg', 'Digital Advertising', '<p>Tingkatkan ROI dari anggaran pemasaran anda.!</p>\r\n<p>kami selangkah lebih maju dari semua tren pemasaran online terdepan &amp; terbaru. menciptakan kampanye iklan digital yang dinamis dan dipesan lebih dahulu serta difokuskan pada target objective per', 'Meningkatkan prospek & penjualan melalui online campaign berbasis kinerja', ' Kekuatan akses penargetan ulang yang unik (Remarketing)', 'Langsung focus kepada target pasar Anda untuk penjualan dimasa depan', 'Meningkatkan Merek/Brand secara efektif di Internet');

-- ----------------------------
-- Table structure for m_page_footer
-- ----------------------------
DROP TABLE IF EXISTS `m_page_footer`;
CREATE TABLE `m_page_footer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_about` varchar(255) DEFAULT NULL,
  `desc_about` varchar(255) DEFAULT NULL,
  `title_address` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `fb_link` varchar(255) DEFAULT NULL,
  `twitter_link` varchar(255) DEFAULT NULL,
  `youtube_link` varchar(255) DEFAULT NULL,
  `ig_link` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_page_footer
-- ----------------------------
INSERT INTO `m_page_footer` VALUES ('1', 'Tentang Kami', 'Awal berdiri, bernama Digital Revolution lalu berubah menjadi 1980 Media, sebuah online performance marketing agency yang berfokus pada ROI untuk para customer. ', '1980 Media', '<p>Awal berdiri, bernama Digital Revolution lalu berubah menjadi 1980 Media, sebuah online performance marketing agency yang berfokus pada ROI untuk para customer.</p>', 'https://www.facebook.com/JonathansTjio', 'https://www.facebook.com/JonathansTjio', 'https://www.facebook.com/JonathansTjio', 'https://www.facebook.com/JonathansTjio');

-- ----------------------------
-- Table structure for m_page_graphic
-- ----------------------------
DROP TABLE IF EXISTS `m_page_graphic`;
CREATE TABLE `m_page_graphic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header_image` varchar(255) DEFAULT NULL,
  `first_title` varchar(255) DEFAULT NULL,
  `first_desc` varchar(255) DEFAULT NULL,
  `list_a` varchar(255) DEFAULT NULL,
  `list_b` varchar(255) DEFAULT NULL,
  `list_c` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_page_graphic
-- ----------------------------

-- ----------------------------
-- Table structure for m_page_home
-- ----------------------------
DROP TABLE IF EXISTS `m_page_home`;
CREATE TABLE `m_page_home` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header_image` varchar(255) DEFAULT NULL,
  `first_title` varchar(255) DEFAULT NULL,
  `service_picture_a` varchar(255) DEFAULT NULL,
  `service_title_a` varchar(255) DEFAULT NULL,
  `service_desc_a` varchar(255) DEFAULT NULL,
  `url_service_a` varchar(255) DEFAULT NULL,
  `service_picture_b` varchar(255) DEFAULT NULL,
  `service_title_b` varchar(255) DEFAULT NULL,
  `service_desc_b` varchar(255) DEFAULT NULL,
  `url_service_b` varchar(255) DEFAULT NULL,
  `service_picture_c` varchar(255) DEFAULT NULL,
  `service_title_c` varchar(255) DEFAULT NULL,
  `service_desc_c` varchar(255) DEFAULT NULL,
  `url_service_c` varchar(255) DEFAULT NULL,
  `service_picture_d` varchar(255) DEFAULT NULL,
  `service_title_d` varchar(255) DEFAULT NULL,
  `service_desc_d` varchar(255) DEFAULT NULL,
  `url_service_d` varchar(255) DEFAULT NULL,
  `service_picture_e` varchar(255) DEFAULT NULL,
  `service_title_e` varchar(255) DEFAULT NULL,
  `service_desc_e` varchar(255) DEFAULT NULL,
  `url_service_e` varchar(255) DEFAULT NULL,
  `service_picture_f` varchar(255) DEFAULT NULL,
  `service_title_f` varchar(255) DEFAULT NULL,
  `service_desc_f` varchar(255) DEFAULT NULL,
  `url_service_f` varchar(255) DEFAULT NULL,
  `second_title` varchar(255) DEFAULT NULL,
  `advg_title_a` varchar(255) DEFAULT NULL,
  `advg_desc_a` varchar(255) DEFAULT NULL,
  `advg_picture_a` varchar(255) DEFAULT NULL,
  `advg_title_b` varchar(255) DEFAULT NULL,
  `advg_desc_b` varchar(255) DEFAULT NULL,
  `advg_picture_b` varchar(255) DEFAULT NULL,
  `advg_title_c` varchar(255) DEFAULT NULL,
  `advg_desc_c` varchar(255) DEFAULT NULL,
  `advg_picture_c` varchar(255) DEFAULT NULL,
  `advg_title_d` varchar(255) DEFAULT NULL,
  `advg_desc_d` varchar(255) DEFAULT NULL,
  `advg_picture_d` varchar(255) DEFAULT NULL,
  `advg_title_e` varchar(255) DEFAULT NULL,
  `advg_desc_e` varchar(255) DEFAULT NULL,
  `advg_picture_e` varchar(255) DEFAULT NULL,
  `advg_title_f` varchar(255) DEFAULT NULL,
  `advg_desc_f` varchar(255) DEFAULT NULL,
  `advg_picture_f` varchar(255) DEFAULT NULL,
  `link_video_youtube` varchar(255) DEFAULT NULL,
  `link_embed_map` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_page_home
-- ----------------------------
INSERT INTO `m_page_home` VALUES ('3', 'main.jpg', 'LAYANAN KAMI', 'search-engine.png', 'SEO & SEM', 'SEO & SEM  Meningkatkan rangking dan visibilitas website/brand di search engine.', 'seo', 'digital_adv.png', 'Digital Advertising', 'Menciptakan kampanye iklan digital yang dinamis, beforientasi target dan ROI pemasaran.', 'digital', 'marketing.png', 'Social Media Marketing', 'Membuka peluang bisnis untuk tumbuh, berkembang, berinteraksi melalui media sosial. ', 'marketing', 'analytic-circle.png', 'Analytic', 'Menganalisa isi situs web,kata kunci, prilaku pengguna dan halaman yang paling dinamis.', 'analytic', 'design_graphic.png', 'Graphic Design', 'Memberi jasa branding consultation untuk kebutuhan peningkatan bisnis dan visibility anda.', 'graphic', 'code.png', 'Web Development & Mobile Application', 'Mendalami kebutuhan pelanggan dan menerjemahkan ke dalam aplikasi web responsif dan mobile friendly.', 'webdev', 'Apa keuntungan menggunakan 1980 media?', ' Online Performance Marketing', ' Klien hanya melakukan pembayaran berdasarkan hasil yang diterima dari campaign yang dijalankan.', 'speaker.png', 'Bisa Pilih Sesuai Budget', 'Campaign dapat disesuaikan dengan kebutuhan Anda.', 'dollar.png', 'Customer Lifetime Value', 'Menghasilkan lebih banyak kunjungan, dan mencapai customer yang terus menggunakan produk/brand Anda.', 'customer.png', ' Strategi Digital Berdasarkan Landmark', 'Anda dapat mengetahui secara detail pesaing usaha Anda, sehingga Anda mendapatkan pengembalian investasi yang substansial yang Anda butuhkan.', 'graph.png', 'Layanan Bantuan Gratis', 'Tim 1980media juga bisa memberikan rekomendasi ', 'smile.png', 'Meningkatkan Penjualan Usaha Brand', 'Fokus kepada ROI dan peningkatan revenue.', 'rocket.png', 'https://www.youtube.com/embed/TgB9nhQkLYA', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.649019002196!2d107.02482781427321!3d-6.30975649543347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6991eb03121ced%3A0x7219177a941e608b!2sJl.+Dukuh+Zamrud%2C+Cimuning%2C+Mustikajaya%2C+Kota+Bks%2C+Jawa+Barat+17155!5e0!3m2!1sid!2sid!4v1522324884560');

-- ----------------------------
-- Table structure for m_page_marketing
-- ----------------------------
DROP TABLE IF EXISTS `m_page_marketing`;
CREATE TABLE `m_page_marketing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header_image` varchar(255) DEFAULT NULL,
  `first_title` varchar(255) DEFAULT NULL,
  `first_desc` varchar(255) DEFAULT NULL,
  `content_image` varchar(255) DEFAULT NULL,
  `list_a` varchar(255) DEFAULT NULL,
  `list_b` varchar(255) DEFAULT NULL,
  `list_c` varchar(255) DEFAULT NULL,
  `list_d` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_page_marketing
-- ----------------------------

-- ----------------------------
-- Table structure for m_page_news
-- ----------------------------
DROP TABLE IF EXISTS `m_page_news`;
CREATE TABLE `m_page_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_news` varchar(255) DEFAULT NULL,
  `picture_news` text,
  `desc_news` text,
  `update_news` date DEFAULT NULL,
  `user_update_news` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_page_news
-- ----------------------------
INSERT INTO `m_page_news` VALUES ('1', 'Mesin Detroit', '883224_e036f373-0c71-4cc4-bc0c-b323071e317b.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2018-04-01', 'admin');
INSERT INTO `m_page_news` VALUES ('2', 'Turbo 80Psi Super', 'huracan.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2018-04-01', 'admin');
INSERT INTO `m_page_news` VALUES ('3', 'Mesin Crossplane', 'lambo.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2018-04-01', 'admin');
INSERT INTO `m_page_news` VALUES ('4', 'Mesin 60 Juta Dollar', 'lambo.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2018-04-01', 'admin');
INSERT INTO `m_page_news` VALUES ('5', 'NOS super extreme', 'lambo.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2018-04-01', 'admin');
INSERT INTO `m_page_news` VALUES ('6', 'Karburator P28', 'lambo.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2018-04-01', 'admin');

-- ----------------------------
-- Table structure for m_page_news_header
-- ----------------------------
DROP TABLE IF EXISTS `m_page_news_header`;
CREATE TABLE `m_page_news_header` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header_image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_page_news_header
-- ----------------------------
INSERT INTO `m_page_news_header` VALUES ('1', 'news_event.jpg');

-- ----------------------------
-- Table structure for m_page_seo
-- ----------------------------
DROP TABLE IF EXISTS `m_page_seo`;
CREATE TABLE `m_page_seo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header_image` text,
  `first_title` text,
  `first_desc_title` text,
  `first_image_title` text,
  `second_title` text,
  `second_desc_title` text,
  `second_image_title` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_page_seo
-- ----------------------------
INSERT INTO `m_page_seo` VALUES ('2', 'SEO_SEM.jpg', 'Apa itu Search Engine Optimization (SEO)?', '        <p>Search Engine Optimization (SEO) adalah proses peningkatan rangking dan visibilitas website / brand anda di search engine. Mesin pencari seperti Google akan menampilkan hasil organik berdasarkan kata kunci pencarian dan listing di Google yang gratis.</p>\n          <p><strong>Mengapa SEO?</strong></p>\n          <p>Lalu lintas gratis ke situs web Anda kemudian dapat dengan mudah diperoleh begitu peringkat Anda lebih tinggi. Situs peringkat yang lebih tinggi umumnya dianggap lebih kredibel, 90% pengguna mesin pencari mengklik 3 daftar pertama. Agar mendapat peringkat lebih tinggi, kami akan memastikan bahwa situs web Anda relevan dengan penawaran produk atau layanan Anda.</p>\n          <p><strong>Metodologi Kami</strong></p>\n          <p>1980media memahami bahwa optimasi SEO adalah investasi jangka panjang untuk klien kami. Oleh karena itu, kami hanya memanfaatkan teknik white-hat SEO Indonesia dan benar-benar mematuhi pedoman kualitas mesin pencari, sebagai bagian dari due diligence kami.</p>', 'SEO.png', 'Apa itu Search Engine Marketing (SEM) ?', '<p>Menarik lebih banyak pengunjung yang penting bagi bisnis Anda dengan kata kunci yang sangat bertarget menggunakan SEM atau Google AdWords. SEM pada akhirnya dapat menumbuhkan audiens Anda dengan penargetan keywords tertentu dan menghemat anggaran onlin</p>', 'SEM.png');

-- ----------------------------
-- Table structure for m_page_services
-- ----------------------------
DROP TABLE IF EXISTS `m_page_services`;
CREATE TABLE `m_page_services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header_image` varchar(100) DEFAULT NULL,
  `logo_a` varchar(255) DEFAULT NULL,
  `caption_logo_a` varchar(255) DEFAULT NULL,
  `url_logo_a` varchar(255) DEFAULT NULL,
  `logo_b` varchar(255) DEFAULT NULL,
  `caption_logo_b` varchar(255) DEFAULT NULL,
  `url_logo_b` varchar(255) DEFAULT NULL,
  `logo_c` varchar(255) DEFAULT NULL,
  `caption_logo_c` varchar(255) DEFAULT NULL,
  `url_logo_c` varchar(255) DEFAULT NULL,
  `logo_d` varchar(255) DEFAULT NULL,
  `caption_logo_d` varchar(255) DEFAULT NULL,
  `url_logo_d` varchar(255) DEFAULT NULL,
  `logo_e` varchar(255) DEFAULT NULL,
  `caption_logo_e` varchar(255) DEFAULT NULL,
  `url_logo_e` varchar(255) DEFAULT NULL,
  `logo_f` varchar(255) DEFAULT NULL,
  `caption_logo_f` varchar(255) DEFAULT NULL,
  `url_logo_f` varchar(255) DEFAULT NULL,
  `logo_g` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_page_services
-- ----------------------------
INSERT INTO `m_page_services` VALUES ('1', 'service.png', 'find2.png', 'SEO & SEM', 'seo', 'phone2.png', 'Digital Advertising', 'digital', 'tweet2.png', 'Social Media Marketing', 'marketing', 'bar2.png', 'Analytic', 'analytic', 'insta2.png', 'Design Graphic', 'graphic', 'screen2.png', 'Web Development & Mobile Application', 'webdev', 'person.png');

-- ----------------------------
-- Table structure for m_page_webdev
-- ----------------------------
DROP TABLE IF EXISTS `m_page_webdev`;
CREATE TABLE `m_page_webdev` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header_image` varchar(255) DEFAULT NULL,
  `first_title` varchar(255) DEFAULT NULL,
  `first_desc` varchar(255) DEFAULT NULL,
  `list_a` varchar(255) DEFAULT NULL,
  `list_b` varchar(255) DEFAULT NULL,
  `list_c` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_page_webdev
-- ----------------------------

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
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_client
-- ----------------------------
INSERT INTO `t_client` VALUES ('2', 'abutour', 'abutour.jpg');
INSERT INTO `t_client` VALUES ('3', 'avenue', 'avenue.jpg');
INSERT INTO `t_client` VALUES ('4', 'eastgarden', 'eastgarden.jpg');
INSERT INTO `t_client` VALUES ('5', 'hybrid', 'hybrid.jpg');
INSERT INTO `t_client` VALUES ('6', 'metrotv', 'metro2.jpg');
INSERT INTO `t_client` VALUES ('7', 'metropenth', 'metropenth.jpg');
INSERT INTO `t_client` VALUES ('8', 'mrd', 'mrd.jpg');
INSERT INTO `t_client` VALUES ('9', 'pakuan', 'pakuan.jpg');
INSERT INTO `t_client` VALUES ('10', 'pandi', 'pandiid.jpg');
INSERT INTO `t_client` VALUES ('11', 'sbx', 'sbx.jpg');
INSERT INTO `t_client` VALUES ('12', 'serpong', 'serpong.jpg');
INSERT INTO `t_client` VALUES ('13', 'shopdrive', 'shop.jpg');
INSERT INTO `t_client` VALUES ('14', 'socca', 'socca.jpg');

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
