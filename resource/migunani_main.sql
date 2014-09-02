-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 02, 2014 at 09:04 AM
-- Server version: 5.5.38-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `migunani_main`
--

-- --------------------------------------------------------

--
-- Table structure for table `com_menu`
--

CREATE TABLE IF NOT EXISTS `com_menu` (
  `nav_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `portal_id` int(11) unsigned DEFAULT NULL,
  `parent_id` int(11) unsigned DEFAULT NULL,
  `nav_title` varchar(50) DEFAULT NULL,
  `nav_desc` varchar(100) DEFAULT NULL,
  `nav_url` varchar(100) DEFAULT NULL,
  `nav_no` int(11) unsigned DEFAULT NULL,
  `active_st` enum('1','0') DEFAULT '1',
  `display_st` enum('1','0') DEFAULT '1',
  `nav_icon` varchar(50) DEFAULT NULL,
  `mdb` int(11) unsigned DEFAULT NULL,
  `mdd` datetime DEFAULT NULL,
  PRIMARY KEY (`nav_id`),
  KEY `FK_com_menu_p` (`portal_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `com_menu`
--

INSERT INTO `com_menu` (`nav_id`, `portal_id`, `parent_id`, `nav_title`, `nav_desc`, `nav_url`, `nav_no`, `active_st`, `display_st`, `nav_icon`, `mdb`, `mdd`) VALUES
(1, 3, 0, 'Home', 'Selamat Datang', 'home/adminwelcome', 1, '1', '1', NULL, 1, '2011-11-28 11:39:00'),
(2, 3, 0, 'Settings', 'Pengaturan', 'settings/adminuser', 2, '1', '1', NULL, 1, '2011-11-28 11:45:06'),
(3, 3, 2, 'Application', 'Pengaturan aplikasi', '-', 21, '1', '1', NULL, 1, '2011-11-28 13:16:54'),
(4, 3, 3, 'Web Portal', 'Pengelolaan web portal', 'settings/adminportal', 211, '1', '1', NULL, 1, '2011-11-28 13:17:34'),
(5, 3, 3, 'Users', 'Pengelolaan pengguna', 'settings/adminuser', 212, '1', '1', NULL, 1, '2011-11-28 13:21:10'),
(6, 3, 3, 'Roles', 'Pengelolaan hak akses', 'settings/adminrole', 213, '1', '1', NULL, 1, '2011-11-28 13:21:36'),
(7, 3, 3, 'Navigation', 'Pengelolaan menu', 'settings/adminmenu', 214, '1', '1', NULL, 1, '2011-11-28 13:22:03'),
(8, 3, 3, 'Permissions', 'Pengelolaan hak akses pengguna', 'settings/adminpermissions', 215, '1', '1', NULL, 1, '2011-11-28 13:22:30'),
(9, 3, 3, 'Preferences', 'Pengelolaan preferences', 'settings/adminpreferences', 216, '1', '1', NULL, 1, '2011-11-28 13:23:39'),
(10, 3, 1, 'Edit Profil', 'Edit profil pengguna', 'settings/adminprofile', 11, '1', '0', NULL, 1, '2011-12-05 11:33:34'),
(11, 2, 0, 'Master Data', 'Tes', 'masterdata/pagecategories', 1, '1', '1', NULL, 1, '2014-02-07 10:52:58'),
(12, 2, 11, 'Page Categories', 'Tes', 'masterdata/pagecategories', 11, '1', '1', '12.png', 1, '2014-02-07 10:53:19'),
(13, 2, 0, 'Content Management', 'Tes', 'content/page', 2, '1', '1', NULL, 1, '2014-02-07 10:53:33'),
(16, 2, 0, 'Member Profile', 'Settings Member Profile', 'settings/memberprofile', 1, '1', '0', NULL, 1, '2014-02-07 12:53:09'),
(17, 2, 11, 'Project Categories', '-', 'masterdata/projectcategories', 12, '1', '1', '17.png', 1, '2014-02-10 16:15:44'),
(18, 2, 13, 'Page', 'client description', 'content/page', 22, '1', '1', '18.png', 1, '2014-02-10 16:23:35'),
(19, 2, 13, 'Project', 'halaman project', 'content/project', 23, '1', '1', '191.png', 1, '2014-02-10 16:28:29'),
(20, 2, 11, 'Client', 'halaman client', 'masterdata/client', 13, '1', '1', '208.png', 1, '2014-02-10 16:28:52'),
(21, 2, 11, 'Personel Email', 'email notifikasi jika mendapatkan pesan', 'masterdata/email', 14, '1', '1', '14.png', 1, '2014-08-30 13:44:37');

-- --------------------------------------------------------

--
-- Table structure for table `com_page_cat`
--

CREATE TABLE IF NOT EXISTS `com_page_cat` (
  `cat_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(50) DEFAULT NULL,
  `cat_description` varchar(100) DEFAULT NULL,
  `mdb` int(11) DEFAULT NULL,
  `mdd` datetime DEFAULT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `com_page_cat`
--

INSERT INTO `com_page_cat` (`cat_id`, `cat_name`, `cat_description`, `mdb`, `mdd`) VALUES
(1, 'About Us', 'Kategori berisi data mengenai profile dari perusahaan', 6, '2014-02-10 19:29:54'),
(4, 'Contact', 'Kategori berisi data kontak dari perusahaan', 6, '2014-02-10 19:29:48'),
(5, 'Personel', 'Kategori berisi data data personel perusahaan', 6, '2014-02-10 19:29:41'),
(6, 'Quality Performance', 'Kategori berisi data data quality performance', 6, '2014-02-10 19:30:26');

-- --------------------------------------------------------

--
-- Table structure for table `com_portal`
--

CREATE TABLE IF NOT EXISTS `com_portal` (
  `portal_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `portal_nm` varchar(50) DEFAULT NULL,
  `site_title` varchar(100) DEFAULT NULL,
  `site_desc` varchar(100) DEFAULT NULL,
  `meta_desc` varchar(255) DEFAULT NULL,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `mdb` int(11) unsigned DEFAULT NULL,
  `mdd` datetime DEFAULT NULL,
  PRIMARY KEY (`portal_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `com_portal`
--

INSERT INTO `com_portal` (`portal_id`, `portal_nm`, `site_title`, `site_desc`, `meta_desc`, `meta_keyword`, `mdb`, `mdd`) VALUES
(1, 'Public Area', 'Public Area Migunani 1.0', 'Deskripsi Portal', '-', '-', 1, '2014-02-06 23:08:01'),
(2, 'Member Area', 'Portal Member Migunani 1.0', 'Aplikasi portal yang diperuntukkan bagi operator', '-', '-', 1, '2014-02-06 23:08:15'),
(3, 'Developer Area', 'Portal Developer Migunani 1.0', 'Aplikasi converter yang diperuntukkan bagi developer', '-', '-', 1, '2014-02-06 23:08:23');

-- --------------------------------------------------------

--
-- Table structure for table `com_preferences`
--

CREATE TABLE IF NOT EXISTS `com_preferences` (
  `pref_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pref_group` varchar(50) DEFAULT NULL,
  `pref_nm` varchar(50) DEFAULT NULL,
  `pref_value` varchar(255) DEFAULT NULL,
  `mdb` int(11) unsigned DEFAULT NULL,
  `mdd` datetime DEFAULT NULL,
  PRIMARY KEY (`pref_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `com_preferences`
--

INSERT INTO `com_preferences` (`pref_id`, `pref_group`, `pref_nm`, `pref_value`, `mdb`, `mdd`) VALUES
(2, 'system', 'version', 'WEB PORTAL MIGUNANI 1.0', 1, '2012-03-14 14:09:29'),
(3, 'system', 'create_date', '06 Februari 2013', 1, '2012-03-14 14:10:11');

-- --------------------------------------------------------

--
-- Table structure for table `com_project_cat`
--

CREATE TABLE IF NOT EXISTS `com_project_cat` (
  `cat_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(50) NOT NULL,
  `cat_description` varchar(100) DEFAULT NULL,
  `mdb` int(11) DEFAULT NULL,
  `mdd` datetime DEFAULT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `com_project_cat`
--

INSERT INTO `com_project_cat` (`cat_id`, `cat_name`, `cat_description`, `mdb`, `mdd`) VALUES
(1, 'Basic Education', 'Mengenai basic edukasi', 6, '2014-02-10 19:37:53'),
(2, 'Distater Risk Reduction', 'Mengenai manajemen pengurangan resiko bencana', 6, '2014-02-10 19:36:31'),
(3, 'Community Development', 'Pengembangan terhadap komunitas', 6, '2014-02-10 19:36:47'),
(4, 'Public Health', 'Mengenai kesehatan masyarakat', 6, '2014-02-10 19:37:11'),
(5, 'Gender Equity', 'Mengenai perjuangan kesetaraan gender', 6, '2014-02-10 19:37:41');

-- --------------------------------------------------------

--
-- Table structure for table `com_role`
--

CREATE TABLE IF NOT EXISTS `com_role` (
  `role_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `portal_id` int(11) unsigned DEFAULT NULL,
  `role_nm` varchar(50) DEFAULT NULL,
  `role_desc` varchar(100) DEFAULT NULL,
  `default_page` varchar(45) DEFAULT NULL,
  `mdb` int(11) unsigned DEFAULT NULL,
  `mdd` datetime DEFAULT NULL,
  PRIMARY KEY (`role_id`),
  KEY `FK_com_role_p` (`portal_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `com_role`
--

INSERT INTO `com_role` (`role_id`, `portal_id`, `role_nm`, `role_desc`, `default_page`, `mdb`, `mdd`) VALUES
(1, 3, 'Developer Role', 'Hak akses khusus developer', NULL, 1, '2011-06-24 14:50:14'),
(3, 2, 'Operator Role', 'Hak akses untuk operator', NULL, 1, '2012-03-14 10:00:46');

-- --------------------------------------------------------

--
-- Table structure for table `com_role_menu`
--

CREATE TABLE IF NOT EXISTS `com_role_menu` (
  `role_id` int(11) unsigned NOT NULL,
  `nav_id` int(11) unsigned NOT NULL,
  `role_tp` varchar(4) NOT NULL DEFAULT '1111',
  PRIMARY KEY (`nav_id`,`role_id`),
  KEY `FK_com_role_menu_r` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `com_role_menu`
--

INSERT INTO `com_role_menu` (`role_id`, `nav_id`, `role_tp`) VALUES
(1, 1, '1111'),
(1, 2, '1111'),
(1, 3, '1111'),
(1, 4, '1111'),
(1, 5, '1111'),
(1, 6, '1111'),
(1, 7, '1111'),
(1, 8, '1111'),
(1, 9, '1111'),
(1, 10, '1111'),
(3, 11, '1111'),
(3, 12, '1111'),
(3, 13, '1111'),
(3, 16, '1111'),
(3, 17, '1111'),
(3, 18, '1111'),
(3, 19, '1111'),
(3, 20, '1111'),
(3, 21, '1111');

-- --------------------------------------------------------

--
-- Table structure for table `com_role_user`
--

CREATE TABLE IF NOT EXISTS `com_role_user` (
  `role_id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `FK_com_role_user_r` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `com_role_user`
--

INSERT INTO `com_role_user` (`role_id`, `user_id`) VALUES
(1, 1),
(3, 3),
(3, 6);

-- --------------------------------------------------------

--
-- Table structure for table `com_user`
--

CREATE TABLE IF NOT EXISTS `com_user` (
  `user_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) DEFAULT NULL,
  `user_pass` varchar(255) DEFAULT NULL,
  `user_key` varchar(50) DEFAULT NULL,
  `lock_st` enum('1','0') DEFAULT '0',
  `user_mail` varchar(50) DEFAULT NULL,
  `mdb` int(11) unsigned DEFAULT NULL,
  `mdd` datetime DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `com_user`
--

INSERT INTO `com_user` (`user_id`, `user_name`, `user_pass`, `user_key`, `lock_st`, `user_mail`, `mdb`, `mdd`) VALUES
(1, 'userdemo', 'WhTKSYUBUOTWVMhDJISU50BgEUMCmXu3bnfAWoz2fA07axO8y6fu9R0ESNd6UlxYenzJpz8BEbCUJeJh2QvtaA==', '1883219921', '0', 'userdemo@gmail.com', 1, '2012-03-14 10:45:15'),
(3, 'bangsawankutub', 'pgbcDux4cbbCBEhZqYshh/WZz7UPrS97IYI2WHbEGduyLhD5SkOD7Mb4AmikCgY0Q7in47lUvvzOrIYFZPU0Uw==', '1249779223', '0', 'ryusaiba@gmail.com', 1, '2012-03-14 11:03:16'),
(6, 'operator', '9TJdw3ULJ6Oz/g1j1cv2N7wXUiXwhQ0M5H+J0y9NryGNCtg6Nu+kUq2+7/XIAhmJ1T/VqeUET64j03F2vKpfXA==', '-676943999', '0', 'operator@mail.com', 6, '2014-08-16 21:33:26'),
(7, 'client', 'qu8otr7QvxXMo/ozHDfxPnULIftUeM4P6Q8YtRxsDOMcJPTkZitgdtfUVq8KllVUp1He3zwLsG00Koa8T9GBmw==', '-951843755', '0', 'client@mail.com', 7, '2013-10-29 17:52:30'),
(8, 'clientmin', 'Sizy5VKYASEnAGSMwTc+zNO0jE/KAc/K2X5vyNxCbNzBn5x/Qmj9kqfKIXiy4RcRpB8ScvbtFjnEnMQT3S9Flg==', '-556682815', '0', 'client_min@mail.com', 1, '2012-04-26 13:25:52');

-- --------------------------------------------------------

--
-- Table structure for table `com_user_login`
--

CREATE TABLE IF NOT EXISTS `com_user_login` (
  `user_id` int(11) unsigned NOT NULL,
  `login_date` datetime NOT NULL,
  `ip_address` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`user_id`,`login_date`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `com_user_login`
--

INSERT INTO `com_user_login` (`user_id`, `login_date`, `ip_address`) VALUES
(6, '2014-09-02 07:44:25', '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `com_user_super`
--

CREATE TABLE IF NOT EXISTS `com_user_super` (
  `user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `com_user_super`
--

INSERT INTO `com_user_super` (`user_id`) VALUES
(1);

-- --------------------------------------------------------

--
-- Table structure for table `trx_client`
--

CREATE TABLE IF NOT EXISTS `trx_client` (
  `client_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `client_name` varchar(100) NOT NULL,
  `client_desc` text,
  `client_logo` varchar(150) NOT NULL,
  `mdb` int(11) DEFAULT NULL,
  `mdd` datetime DEFAULT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `trx_client`
--

INSERT INTO `trx_client` (`client_id`, `client_name`, `client_desc`, `client_logo`, `mdb`, `mdd`) VALUES
(1, 'Plan Indonesia', 'WASH (Water, Sanitation, and Hygiene) Formative Study', '17.jpg\r\n\r\n', 6, '2014-08-17 00:32:14'),
(2, 'Save Children', 'client save children', '2.jpg', 6, '2014-08-30 14:02:15');

-- --------------------------------------------------------

--
-- Table structure for table `trx_email`
--

CREATE TABLE IF NOT EXISTS `trx_email` (
  `email_id` int(11) NOT NULL AUTO_INCREMENT,
  `email_name` varchar(50) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `email_subject` varchar(50) NOT NULL,
  `email_message` text NOT NULL,
  `mdd` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`email_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `trx_email`
--

INSERT INTO `trx_email` (`email_id`, `email_name`, `email_address`, `email_subject`, `email_message`, `mdd`) VALUES
(1, 'nakamichikun', 'nakamichikun@gmail.com', 'testing', 'testing coy\n', '2014-09-01 23:35:33'),
(2, 'nakamichikun', 'nakamichikun@gmail.com', 'testing', 'testing coy\n', '2014-09-01 23:35:47');

-- --------------------------------------------------------

--
-- Table structure for table `trx_galery`
--

CREATE TABLE IF NOT EXISTS `trx_galery` (
  `gal_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `gal_cat` int(11) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `gal_nm` varchar(60) DEFAULT NULL,
  `mdb` int(11) DEFAULT NULL,
  `mdd` datetime DEFAULT NULL,
  PRIMARY KEY (`gal_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=166 ;

--
-- Dumping data for table `trx_galery`
--

INSERT INTO `trx_galery` (`gal_id`, `gal_cat`, `project_id`, `gal_nm`, `mdb`, `mdd`) VALUES
(133, 1, 22, '15022014_1793487.jpg', 6, '2014-02-15 17:22:30'),
(134, 1, 22, '15022014_9996704.jpg', 6, '2014-02-15 17:22:30'),
(135, 1, 22, '15022014_2023925.jpg', 6, '2014-02-15 17:22:30'),
(136, 1, 22, '15022014_9717926.jpg', 6, '2014-02-15 17:22:31'),
(137, 1, 22, '15022014_8701690.jpg', 6, '2014-02-15 17:22:31'),
(138, 1, 22, '15022014_8558868.jpg', 6, '2014-02-15 17:22:31'),
(139, 1, 22, '15022014_3350799.jpg', 6, '2014-02-15 17:22:32'),
(140, 1, 22, '15022014_7297912.jpg', 6, '2014-02-15 17:22:32'),
(141, 1, 22, '15022014_4343688.jpg', 6, '2014-02-15 17:22:32'),
(142, 1, 22, '15022014_3479339.jpg', 6, '2014-02-15 17:22:33'),
(143, 1, 22, '15022014_8712127.jpg', 6, '2014-02-15 17:22:33'),
(144, 1, 22, '15022014_6090789.jpg', 6, '2014-02-15 17:22:33'),
(145, 1, 22, '15022014_2337310.jpg', 6, '2014-02-15 17:22:34'),
(146, 1, 22, '15022014_3768554.jpg', 6, '2014-02-15 17:22:34'),
(147, 1, 22, '15022014_1262573.jpg', 6, '2014-02-15 17:22:34'),
(148, 1, 22, '15022014_7396514.png', 6, '2014-02-15 17:22:35'),
(149, 1, 22, '15022014_7276763.jpg', 6, '2014-02-15 17:22:35'),
(150, 1, 22, '15022014_5411285.png', 6, '2014-02-15 17:22:35'),
(151, 1, 22, '15022014_8139739.jpg', 6, '2014-02-15 17:22:36'),
(152, 1, 22, '15022014_9779724.jpg', 6, '2014-02-15 17:22:36'),
(153, 1, 22, '15022014_4839172.jpg', 6, '2014-02-15 17:22:36'),
(154, 1, 22, '15022014_4418670.jpg', 6, '2014-02-15 17:22:36'),
(155, 1, 22, '15022014_1282073.png', 6, '2014-02-15 17:22:37'),
(156, 1, 23, '15022014_7363555.jpg', 6, '2014-02-15 17:22:37'),
(157, 1, 23, '15022014_7296264.png', 6, '2014-02-15 17:22:38'),
(158, 1, 23, '15022014_3225830.png', 6, '2014-02-15 17:22:38'),
(159, 1, 23, '15022014_4213775.jpg', 6, '2014-02-15 17:22:38'),
(160, 1, 23, '15022014_1683624.png', 6, '2014-02-15 17:22:39'),
(161, 1, 23, '15022014_6582977.jpg', 6, '2014-02-15 17:22:39'),
(162, 1, 23, '15022014_1626770.jpg', 6, '2014-02-15 17:22:39'),
(163, 1, 23, '15022014_3418640.jpg', 6, '2014-02-15 17:22:40'),
(164, 1, 23, '15022014_4918548.png', 6, '2014-02-15 17:22:40'),
(165, 1, 23, '15022014_7565155.jpg', 6, '2014-02-15 17:22:40');

-- --------------------------------------------------------

--
-- Table structure for table `trx_page`
--

CREATE TABLE IF NOT EXISTS `trx_page` (
  `page_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `page_title` varchar(150) DEFAULT NULL,
  `page_cat` int(11) DEFAULT NULL,
  `page_content` text,
  `active_st` varchar(1) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `mdb` int(11) DEFAULT NULL,
  `mdd` datetime DEFAULT NULL,
  PRIMARY KEY (`page_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `trx_page`
--

INSERT INTO `trx_page` (`page_id`, `page_title`, `page_cat`, `page_content`, `active_st`, `create_date`, `mdb`, `mdd`) VALUES
(1, 'About Us', 1, '<pre>&nbsp;</pre>\r\n<table border="1" cellspacing="0" cellpadding="0">\r\n<tbody>\r\n<tr>\r\n<td width="187">\r\n<p style="margin-left: 30px;"><span style="font-family: arial, helvetica, sans-serif; font-size: small;">Vision</span></p>\r\n</td>\r\n<td style="margin-left: 30px;" width="451">\r\n<p style="margin-left: 30px;"><span style="font-family: arial, helvetica, sans-serif; font-size: small;">Legitimate knowledge sector and effective in improving the quality policy</span></p>\r\n</td>\r\n</tr>\r\n<tr style="margin-left: 30px;">\r\n<td style="margin-left: 30px;" width="187">\r\n<p style="margin-left: 30px;"><span style="font-family: arial, helvetica, sans-serif; font-size: small;">Corporate Strategy</span></p>\r\n</td>\r\n<td style="margin-left: 30px;" width="451">\r\n<p style="margin-left: 30px;"><span style="font-family: arial, helvetica, sans-serif; font-size: small;">As part of the knowledge sector, Migunani&rsquo;s role is to produce knowledge through research activities and &nbsp;program evaluation of government&nbsp; policies and the donor institutions</span></p>\r\n</td>\r\n</tr>\r\n<tr style="margin-left: 30px;">\r\n<td style="margin-left: 30px;" width="187">\r\n<p style="margin-left: 30px;"><span style="font-family: arial, helvetica, sans-serif; font-size: small;">Our Position in Civil Society</span></p>\r\n</td>\r\n<td style="margin-left: 30px;" width="451">\r\n<p style="margin-left: 30px;"><span style="font-family: arial, helvetica, sans-serif; font-size: small;">Migunani takes a role as knowledge producers , giving feedback to the agency that has expertise on &nbsp;advocacy network</span></p>\r\n</td>\r\n</tr>\r\n<tr style="margin-left: 30px;">\r\n<td style="margin-left: 30px;" width="187">\r\n<p style="margin-left: 30px;"><span style="font-family: arial, helvetica, sans-serif; font-size: small;">Our Values</span></p>\r\n</td>\r\n<td style="margin-left: 30px;" width="451">\r\n<p style="text-align: justify; margin-left: 30px;"><span style="font-family: arial, helvetica, sans-serif; font-size: small;">We are committed to the importance of the evidence (evidence - based) policy making , the importance &nbsp;of providing the best quality (quality service ) , respecting the diversity of Indonesia ( pluralism ) , &nbsp;transformative , and a commitment to maintaining the integrity of both the space domestic and public</span></p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<pre>&nbsp;</pre>\r\n<p style="text-align: justify;">&nbsp;</p>\r\n<pre><span style="font-size: x-small;"><strong><br /></strong></span></pre>', '1', '2014-02-11 17:38:52', 6, '2014-02-12 20:35:15'),
(2, 'Contact', 4, NULL, '0', '2014-02-11 17:39:02', 6, '2014-02-11 17:39:02'),
(3, 'Personel', 5, NULL, NULL, NULL, NULL, NULL),
(4, 'Mobile Data Collection', 6, '<p style="text-align: justify;">Nowadays anyone can create an account, design forms, download them to mobile phones, and start collecting data in minutes, for free. It saves a lot of money and time over either paper-based data collection or other electronic systems. &nbsp;In a&nbsp;2011 report, the World Bank documented a 71% decrease in data collection costs compared to paper, with improved quality. Using mobile data collection can eliminate the steps of data entry and entry consolidation, helping researcher to perform rapid assessment and analysis even on the very early stage of survey, it also adds maximum survey accountability and efficiency.</p>', '0', NULL, 6, '2014-08-16 21:05:56'),
(5, 'Collaboration', 6, '<p style="text-align: justify;">Where deep levels of analysis on small or large volumes of data are required, qualitative data analysis software like NVIVO or CAQDAS allows multi-users to classify, sort and arrange thousands of pieces of information; examine complex relationships in the data; and combine subtle analysis with linking, shaping, searching and modeling. Using such software as collaborative analysis platform will increase research&rsquo;s integrity and overall quality.</p>', '0', NULL, 6, '2014-08-16 21:07:04'),
(6, 'Trainings', 6, '<p style="text-align: justify;">Browse below to get an overview on varieties of project''s topics, client, scale and requirements, that have been delivered from 2013 to 2014. We will give each project''s reference contact information upon your request.</p>', '0', NULL, 6, '2014-08-16 22:20:05');

-- --------------------------------------------------------

--
-- Table structure for table `trx_project`
--

CREATE TABLE IF NOT EXISTS `trx_project` (
  `project_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `client_id` int(11) unsigned NOT NULL,
  `project_cat` int(11) unsigned NOT NULL,
  `project_title` varchar(150) NOT NULL,
  `project_content` text,
  `project_location` varchar(150) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `create_date` datetime NOT NULL,
  `active_st` varchar(1) DEFAULT NULL,
  `mdb` int(11) DEFAULT NULL,
  `mdd` datetime DEFAULT NULL,
  PRIMARY KEY (`project_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `trx_project`
--

INSERT INTO `trx_project` (`project_id`, `client_id`, `project_cat`, `project_title`, `project_content`, `project_location`, `start_date`, `end_date`, `create_date`, `active_st`, `mdb`, `mdd`) VALUES
(22, 2, 1, 'Tes Kedua Dengan Galery', '<p>Dengan Galery.sdasdasasdasdasdasasdasdasdad</p>', NULL, '2014-02-15 15:00:03', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', 6, '2014-02-15 18:59:34'),
(23, 1, 5, 'WASH (Water, Sanitation, and Hygiene) Formative Study', '<p>Test</p>', 'NTT', '2014-08-01 00:00:00', '2014-09-30 00:00:00', '2014-08-17 00:36:54', '0', 6, '2014-08-17 00:48:35'),
(24, 1, 5, 'WASH (Water, Sanitation, and Hygiene) Formative Studying', '<p>Test</p>', NULL, '2014-08-17 09:09:25', '2014-08-17 09:09:25', '2014-08-17 09:09:25', NULL, NULL, '2014-08-17 09:09:25'),
(25, 1, 5, 'X', '<p>X</p>', '', '2014-07-01 00:00:00', '2014-08-19 00:00:00', '2014-08-17 09:11:22', '0', 6, '2014-08-17 09:11:22'),
(26, 1, 5, 'asd', '<p>asdasd</p>', '', '2014-08-01 00:00:00', '2014-09-30 00:00:00', '2014-08-17 09:23:23', '0', 6, '2014-08-17 09:23:23');

-- --------------------------------------------------------

--
-- Table structure for table `trx_slideshow`
--

CREATE TABLE IF NOT EXISTS `trx_slideshow` (
  `slide_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `slide_title` varchar(100) DEFAULT NULL,
  `slide_desc` text,
  `slide_loc` varchar(100) DEFAULT NULL,
  `mdb` int(11) DEFAULT NULL,
  `mdd` datetime DEFAULT NULL,
  PRIMARY KEY (`slide_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `com_menu`
--
ALTER TABLE `com_menu`
  ADD CONSTRAINT `FK_com_menu_p` FOREIGN KEY (`portal_id`) REFERENCES `com_portal` (`portal_id`);

--
-- Constraints for table `com_role`
--
ALTER TABLE `com_role`
  ADD CONSTRAINT `FK_com_role_p` FOREIGN KEY (`portal_id`) REFERENCES `com_portal` (`portal_id`);

--
-- Constraints for table `com_role_menu`
--
ALTER TABLE `com_role_menu`
  ADD CONSTRAINT `FK_com_role_menu_m` FOREIGN KEY (`nav_id`) REFERENCES `com_menu` (`nav_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_com_role_menu_r` FOREIGN KEY (`role_id`) REFERENCES `com_role` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `com_role_user`
--
ALTER TABLE `com_role_user`
  ADD CONSTRAINT `FK_com_role_user_r` FOREIGN KEY (`role_id`) REFERENCES `com_role` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_com_role_user_u` FOREIGN KEY (`user_id`) REFERENCES `com_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `com_user_login`
--
ALTER TABLE `com_user_login`
  ADD CONSTRAINT `FK_com_user_login` FOREIGN KEY (`user_id`) REFERENCES `com_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `com_user_super`
--
ALTER TABLE `com_user_super`
  ADD CONSTRAINT `FK_com_user_super` FOREIGN KEY (`user_id`) REFERENCES `com_user` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
