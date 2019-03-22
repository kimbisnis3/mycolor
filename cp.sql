/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50626
Source Host           : 127.0.0.1:3306
Source Database       : cp

Target Server Type    : MYSQL
Target Server Version : 50626
File Encoding         : 65001

Date: 2019-03-22 20:37:27
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for m_artikel
-- ----------------------------
DROP TABLE IF EXISTS `m_artikel`;
CREATE TABLE `m_artikel` (
  `artikel_id` int(11) NOT NULL AUTO_INCREMENT,
  `artikel_datei` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `artikel_dateu` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `artikel_useri` varchar(50) DEFAULT NULL,
  `artikel_useru` varchar(50) DEFAULT NULL,
  `artikel_kode` varchar(255) DEFAULT NULL,
  `artikel_judul` text,
  `artikel_subjudul` text,
  `artikel_artikel` text,
  `artikel_ket` text,
  `artikel_slug` text,
  `artikel_image` text,
  `artikel_aktif` char(1) DEFAULT NULL,
  PRIMARY KEY (`artikel_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_artikel
-- ----------------------------
INSERT INTO `m_artikel` VALUES ('10', '2019-02-23 13:26:19', '0000-00-00 00:00:00', null, null, null, 'zzzvvv', null, '<p>zzzz</p>\r\n', 'zzzz', 'zzzvvv', '/uploads/artikel/zzzvvv.png', null);

-- ----------------------------
-- Table structure for m_berita
-- ----------------------------
DROP TABLE IF EXISTS `m_berita`;
CREATE TABLE `m_berita` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datei` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `dateu` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `useri` varchar(50) DEFAULT NULL,
  `useru` varchar(50) DEFAULT NULL,
  `kode` varchar(255) DEFAULT NULL,
  `judul` text,
  `subjudul` text,
  `artikel` text,
  `ket` text,
  `slug` text,
  `image` text,
  `aktif` char(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_berita
-- ----------------------------
INSERT INTO `m_berita` VALUES ('1', '2019-03-16 13:48:52', '2019-03-16 13:48:52', null, null, null, 'aaa', null, '<p>aaa</p>\r\n', 'aaa', 'aaa', '/uploads/berita/aaa.png', '1');
INSERT INTO `m_berita` VALUES ('2', '2019-03-16 13:48:52', '2019-03-16 13:48:52', null, null, null, 'aaa', null, '<p>aaa</p>\r\n', 'aaa', 'aaa', '/uploads/berita/aaa.png', '1');
INSERT INTO `m_berita` VALUES ('3', '2019-03-16 13:48:52', '2019-03-16 13:48:52', null, null, null, 'aaa', null, '<p>aaa</p>\r\n', 'aaa', 'aaa', '/uploads/berita/aaa.png', '1');
INSERT INTO `m_berita` VALUES ('4', '2019-03-22 19:13:38', '2019-03-22 19:13:38', null, null, null, 'bbb', null, '<p>aaa</p>\r\n', 'aaa', 'bbb', '/uploads/berita/aaa.png', '1');
INSERT INTO `m_berita` VALUES ('5', '2019-03-22 19:13:39', '2019-03-22 19:13:39', null, null, null, 'bbb', null, '<p>aaa</p>\r\n', 'aaa', 'bbb', '/uploads/berita/aaa.png', '1');
INSERT INTO `m_berita` VALUES ('6', '2019-03-22 19:13:40', '2019-03-22 19:13:40', null, null, null, 'bbb', null, '<p>aaa</p>\r\n', 'aaa', 'bbb', '/uploads/berita/aaa.png', '1');

-- ----------------------------
-- Table structure for m_ktgportofolio
-- ----------------------------
DROP TABLE IF EXISTS `m_ktgportofolio`;
CREATE TABLE `m_ktgportofolio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datei` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `dateu` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `useri` varchar(50) DEFAULT NULL,
  `useru` varchar(50) DEFAULT NULL,
  `kode` varchar(255) DEFAULT NULL,
  `judul` text,
  `subjudul` text,
  `artikel` text,
  `ket` text,
  `slug` text,
  `image` text,
  `aktif` char(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_ktgportofolio
-- ----------------------------
INSERT INTO `m_ktgportofolio` VALUES ('3', '2019-03-16 18:48:04', null, null, null, null, 'Neon Box', null, '<p>neon-box</p>\r\n', 'nb', 'neon-box', '/uploads/ktgportofolio/neon-box.png', '1');

-- ----------------------------
-- Table structure for m_ktgproduk
-- ----------------------------
DROP TABLE IF EXISTS `m_ktgproduk`;
CREATE TABLE `m_ktgproduk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datei` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `dateu` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `useri` varchar(50) DEFAULT NULL,
  `useru` varchar(50) DEFAULT NULL,
  `kode` varchar(255) DEFAULT NULL,
  `judul` text,
  `subjudul` text,
  `artikel` text,
  `ket` text,
  `slug` text,
  `image` text,
  `aktif` char(1) DEFAULT '1',
  `tampildepan` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_ktgproduk
-- ----------------------------
INSERT INTO `m_ktgproduk` VALUES ('3', '2019-03-16 11:32:43', '2019-03-16 19:58:55', null, null, null, 'Neon Oke', null, '<p>xxxx</p>\r\n', 'xxxz', 'neon-oke', '/uploads/ktgproduk/neon-oke.png', '1', '1');
INSERT INTO `m_ktgproduk` VALUES ('4', '2019-03-16 13:14:34', '2019-03-22 17:51:58', null, 'x', null, 'Neon Good', null, '', '', 'neon-good', '/uploads/ktgproduk/neon-good.png', '1', '1');
INSERT INTO `m_ktgproduk` VALUES ('5', '2019-03-16 13:14:34', '2019-03-22 17:52:43', null, null, null, 'Neon Good', null, '', '', 'neon-good', '/uploads/ktgproduk/neon-good.png', '1', '1');
INSERT INTO `m_ktgproduk` VALUES ('6', '2019-03-16 11:32:43', '2019-03-16 19:58:55', null, null, null, 'Neon Oke', null, '<p>xxxx</p>\r\n', 'xxxz', 'neon-oke', '/uploads/ktgproduk/neon-oke.png', '1', '1');
INSERT INTO `m_ktgproduk` VALUES ('7', '2019-03-16 11:32:43', '2019-03-22 17:54:36', null, null, null, 'Neon Oke', null, '<p>xxxx</p>\r\n', 'xxxz', 'neon-oke', '/uploads/ktgproduk/neon-oke.png', '1', '0');
INSERT INTO `m_ktgproduk` VALUES ('8', '2019-03-16 13:14:34', '2019-03-22 17:52:43', null, null, null, 'Neon Good', null, '', '', 'neon-good', '/uploads/ktgproduk/neon-good.png', '1', '1');
INSERT INTO `m_ktgproduk` VALUES ('9', '2019-03-16 13:14:34', '2019-03-22 17:51:58', null, 'x', null, 'Neon Good', null, '', '', 'neon-good', '/uploads/ktgproduk/neon-good.png', '1', '1');
INSERT INTO `m_ktgproduk` VALUES ('10', '2019-03-16 11:32:43', '2019-03-16 19:58:55', null, null, null, 'Neon Oke', null, '<p>xxxx</p>\r\n', 'xxxz', 'neon-oke', '/uploads/ktgproduk/neon-oke.png', '1', '1');

-- ----------------------------
-- Table structure for m_portofolio
-- ----------------------------
DROP TABLE IF EXISTS `m_portofolio`;
CREATE TABLE `m_portofolio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datei` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `dateu` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `useri` varchar(50) DEFAULT NULL,
  `useru` varchar(50) DEFAULT NULL,
  `kode` varchar(255) DEFAULT NULL,
  `ref_ktgportofolio` varchar(10) DEFAULT NULL,
  `judul` text,
  `subjudul` text,
  `artikel` text,
  `ket` text,
  `slug` text,
  `image` text,
  `aktif` char(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_portofolio
-- ----------------------------

-- ----------------------------
-- Table structure for m_produk
-- ----------------------------
DROP TABLE IF EXISTS `m_produk`;
CREATE TABLE `m_produk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datei` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `dateu` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `useri` varchar(50) DEFAULT NULL,
  `useru` varchar(50) DEFAULT NULL,
  `ref_ktgproduk` varchar(50) DEFAULT NULL,
  `kode` varchar(255) DEFAULT NULL,
  `judul` text,
  `subjudul` text,
  `artikel` text,
  `ket` text,
  `slug` text,
  `image` text,
  `aktif` char(1) DEFAULT '1',
  `tampildepan` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_produk
-- ----------------------------
INSERT INTO `m_produk` VALUES ('1', '2019-03-16 12:26:35', '2019-03-22 17:37:26', null, null, '3', null, 'xxxxx', 'xxx', '', '', 'xxxxx', '/uploads/produk/xxxxx.png', '1', '1');

-- ----------------------------
-- Table structure for m_profil
-- ----------------------------
DROP TABLE IF EXISTS `m_profil`;
CREATE TABLE `m_profil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datei` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `dateu` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `useri` varchar(50) DEFAULT NULL,
  `useru` varchar(50) DEFAULT NULL,
  `kode` varchar(255) DEFAULT NULL,
  `judul` text,
  `subjudul` text,
  `artikel` text,
  `ket` text,
  `slug` text,
  `image` text,
  `aktif` char(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_profil
-- ----------------------------
INSERT INTO `m_profil` VALUES ('1', '2019-03-16 15:39:24', '2019-03-16 15:39:36', null, null, null, 'aaaa', null, '<p>aaaa</p>\r\n', 'aaaa', 'aaaa', '/uploads/profil/aaaa.png', '1');

-- ----------------------------
-- Table structure for t_config_image
-- ----------------------------
DROP TABLE IF EXISTS `t_config_image`;
CREATE TABLE `t_config_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datei` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `dateu` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `useri` varchar(50) DEFAULT NULL,
  `useru` varchar(50) DEFAULT NULL,
  `kode` varchar(255) DEFAULT NULL,
  `judul` text,
  `ket` text,
  `image` text,
  `link` text,
  `tipe` varchar(10) DEFAULT NULL,
  `aktif` char(1) DEFAULT '1',
  `status` char(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_config_image
-- ----------------------------
INSERT INTO `t_config_image` VALUES ('2', '2019-03-16 15:06:40', '2019-03-22 17:18:14', null, null, null, 'asasda', 'asdas', '/uploads/slideshow/asasda.png', null, 'ss', '0', '3');
INSERT INTO `t_config_image` VALUES ('3', '2019-03-22 10:51:07', '2019-03-22 16:59:38', 'x', null, null, 'Image', 'oke', '/uploads/slideshow/image.png', null, 'ss', '1', '3');
INSERT INTO `t_config_image` VALUES ('4', '2019-03-22 10:51:16', '2019-03-22 16:59:39', 'x', null, null, 'image 2', '', '/uploads/slideshow/image-2.png', null, 'ss', '1', '3');
INSERT INTO `t_config_image` VALUES ('5', '2019-03-22 10:57:51', '2019-03-22 17:25:55', null, 'x', null, 'Tentang Kamiz', 'aaaaaaaaaaaaaa', '/uploads/about/tentang-kamiz.png', null, 'tk', '1', '2');
INSERT INTO `t_config_image` VALUES ('6', '2019-03-22 16:57:19', '2019-03-22 17:01:18', null, 'x', null, 'LOGO', 'LOGO', '/uploads/elementgambar/logo.png', null, 'logo', '1', '1');
INSERT INTO `t_config_image` VALUES ('7', '2019-03-22 19:30:01', '2019-03-22 19:45:50', null, null, null, null, null, '/uploads/elementgambar/logo.png', 'xxx', 'cl', '1', '1');
INSERT INTO `t_config_image` VALUES ('8', '2019-03-22 19:30:01', '2019-03-22 19:40:53', null, null, null, null, null, '/uploads/elementgambar/logo.png', null, 'cl', '1', '1');
INSERT INTO `t_config_image` VALUES ('9', '2019-03-22 19:30:01', '2019-03-22 19:51:03', null, null, null, null, null, '/uploads/slideshow/image-2.png', null, 'cl', '1', '1');
INSERT INTO `t_config_image` VALUES ('10', '2019-03-22 19:30:01', '2019-03-22 19:51:05', null, null, null, null, null, '/uploads/slideshow/image-2.png', null, 'cl', '1', '1');
INSERT INTO `t_config_image` VALUES ('11', '2019-03-22 19:30:01', '2019-03-22 19:51:05', null, null, null, null, null, '/uploads/slideshow/image-2.png', null, 'cl', '1', '1');
INSERT INTO `t_config_image` VALUES ('12', '2019-03-22 19:30:01', '2019-03-22 19:51:04', null, null, null, null, null, '/uploads/slideshow/image-2.png', null, 'cl', '1', '1');
INSERT INTO `t_config_image` VALUES ('13', '2019-03-22 19:51:47', '2019-03-22 19:51:55', null, null, null, null, null, '/uploads/slideshow/image-2.png', null, 'cl', '1', '1');
INSERT INTO `t_config_image` VALUES ('14', '2019-03-22 19:51:47', '2019-03-22 19:51:57', null, null, null, null, null, '/uploads/slideshow/image-2.png', null, 'cl', '1', '1');
INSERT INTO `t_config_image` VALUES ('17', '2019-03-22 20:12:34', '2019-03-22 20:14:01', 'x', 'x', null, 'aaa', null, '/uploads/klien/aaa1.png', '', 'cl', '1', '1');
INSERT INTO `t_config_image` VALUES ('18', '2019-03-22 20:15:19', null, 'x', null, null, 'vvvv', null, '/uploads/klien/vvvv.png', 'vvvv', 'cl', '1', '1');

-- ----------------------------
-- Table structure for t_config_text
-- ----------------------------
DROP TABLE IF EXISTS `t_config_text`;
CREATE TABLE `t_config_text` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datei` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `dateu` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `useri` varchar(50) DEFAULT NULL,
  `useru` varchar(50) DEFAULT NULL,
  `kode` varchar(255) DEFAULT NULL,
  `tipe` varchar(50) DEFAULT NULL,
  `judul` text,
  `teks` text,
  `ket` text,
  `link` text,
  `status` char(255) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_config_text
-- ----------------------------
INSERT INTO `t_config_text` VALUES ('1', '2019-03-22 10:59:31', '2019-03-22 15:40:05', 'x', null, null, 'tk', 'Tentang Kamix', 'lorem ipsum lorem ipsum', 'teks tentang kami bawah', null, '1');
INSERT INTO `t_config_text` VALUES ('2', '2019-03-22 15:40:57', '2019-03-22 16:08:24', 'x', null, null, 'alfoot', 'Alamat (Footer)', 'xxxxxxxxxxxxx', 'Alamat (Footer)', null, '1');
INSERT INTO `t_config_text` VALUES ('3', '2019-03-22 15:41:12', '2019-03-22 16:08:26', 'x', null, null, 'tlfoot', 'No Telp (Footer)', '11111111111', 'No Telp (Footer)', null, '1');
INSERT INTO `t_config_text` VALUES ('4', '2019-03-22 15:41:39', '2019-03-22 16:08:28', 'x', null, null, 'efoot', 'Email (Footer)', 'zzzz', 'Email (Footer)', null, '1');
INSERT INTO `t_config_text` VALUES ('5', '2019-03-22 15:46:03', '2019-03-22 16:08:31', 'x', null, null, 'logo_fb', 'Alamat Facebook (socmed)', 'www.facebook.com/user', 'Alamat Facebook (socmed)', null, '1');
INSERT INTO `t_config_text` VALUES ('6', '2019-03-22 15:46:18', '2019-03-22 16:08:34', 'x', null, null, 'logo_ig', 'Alamat Instagran (socmed)', 'www.instagram.com/user', 'Alamat Instagran (socmed)', null, '1');
INSERT INTO `t_config_text` VALUES ('7', '2019-03-22 15:54:14', '2019-03-22 16:08:43', null, null, null, 'sv1', 'Kualitas xxx', 'sssss', 'Layanan 1', null, '1');
INSERT INTO `t_config_text` VALUES ('8', '2019-03-22 15:54:28', '2019-03-22 16:08:48', null, null, null, 'sv2', 'Kualitas 2', 'xxxx', 'Layanan 2', null, '1');
INSERT INTO `t_config_text` VALUES ('9', '2019-03-22 15:54:37', '2019-03-22 16:08:50', null, null, null, 'sv3', 'kualitas 3', 'bbbb', 'Layanan 3', null, '1');
INSERT INTO `t_config_text` VALUES ('10', '2019-03-22 16:04:44', '2019-03-22 16:10:32', null, null, null, 'teksprod', 'Produk Unggulan Kami', 'Berikut Adalah Produk Unggulan dari Kami', null, null, '2');
INSERT INTO `t_config_text` VALUES ('11', '2019-03-22 16:04:44', '2019-03-22 16:05:34', null, null, null, 'tekspor', 'Berita Terbaru', 'Berita Terbaru dari Kami', null, null, '2');

-- ----------------------------
-- Table structure for t_user
-- ----------------------------
DROP TABLE IF EXISTS `t_user`;
CREATE TABLE `t_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datei` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `dateu` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `useri` varchar(50) DEFAULT NULL,
  `useru` varchar(50) DEFAULT NULL,
  `kode` varchar(50) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` text,
  `image` text,
  `lastlogin` varchar(255) DEFAULT NULL,
  `aktif` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_user
-- ----------------------------
INSERT INTO `t_user` VALUES ('1', '2019-03-16 11:11:24', '2019-03-16 11:11:24', null, null, null, 'admin', 'admin', 'admin', null, null, null, '1');
INSERT INTO `t_user` VALUES ('2', '2019-03-16 11:12:57', '2019-03-16 18:57:36', null, null, null, 'x', 'x', 'admin', null, null, 'now()', '1');

-- ----------------------------
-- Table structure for x_gb
-- ----------------------------
DROP TABLE IF EXISTS `x_gb`;
CREATE TABLE `x_gb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datei` datetime DEFAULT CURRENT_TIMESTAMP,
  `nama` text,
  `email` text,
  `alamat` text,
  `pesan` text,
  `baca` char(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of x_gb
-- ----------------------------
SET FOREIGN_KEY_CHECKS=1;
