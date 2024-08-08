-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 05, 2024 at 10:57 AM
-- Server version: 8.3.0
-- PHP Version: 8.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `community_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `business_listing`
--

DROP TABLE IF EXISTS `business_listing`;
CREATE TABLE IF NOT EXISTS `business_listing` (
  `business_id` int NOT NULL AUTO_INCREMENT,
  `company_name` text NOT NULL,
  `address_1` text NOT NULL,
  `address_2` text NOT NULL,
  `city` text NOT NULL,
  `country` text NOT NULL,
  `opening_time` text NOT NULL,
  `closing_time` text NOT NULL,
  `business_category` text NOT NULL,
  `pin_code` text NOT NULL,
  `website` text NOT NULL,
  `email_address` text NOT NULL,
  `phone_number` text NOT NULL,
  `fax` text NOT NULL,
  `business_image` text NOT NULL,
  `created_by` int NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_by` int NOT NULL,
  `updated_on` datetime NOT NULL,
  PRIMARY KEY (`business_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `business_listing`
--

INSERT INTO `business_listing` (`business_id`, `company_name`, `address_1`, `address_2`, `city`, `country`, `opening_time`, `closing_time`, `business_category`, `pin_code`, `website`, `email_address`, `phone_number`, `fax`, `business_image`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(1, 'Delgado Haynes Associates', '25 North Fabien Extension', 'Ipsum autem expedita', 'Quae culpa ut quia c', '2', 'Unde provident quib', 'Aut eu error corrupt', '4', 'Sint consequatur i', 'https://www.hobuk.mobi', 'nizikutypi@mailinator.com', '+1 (761) 728-7695', '+1 (822) 665-9135', '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(2, 'Delgado Haynes Associates', '25 North Fabien Extension', 'Ipsum autem expedita', 'Quae culpa ut quia c', '2', 'Unde provident quib', 'Aut eu error corrupt', '4', 'Sint consequatur i', 'https://www.hobuk.mobi', 'nizikutypi@mailinator.com', '+1 (761) 728-7695', '+1 (822) 665-9135', '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(3, 'Delgado Haynes Associates', '25 North Fabien Extension', 'Ipsum autem expedita', 'Quae culpa ut quia c', '2', 'Unde provident quib', 'Aut eu error corrupt', '4', 'Sint consequatur i', 'https://www.hobuk.mobi', 'nizikutypi@mailinator.com', '+1 (761) 728-7695', '+1 (822) 665-9135', '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(4, 'Delgado Haynes Associates', '25 North Fabien Extension', 'Ipsum autem expedita', 'Quae culpa ut quia c', '2', 'Unde provident quib', 'Aut eu error corrupt', '4', 'Sint consequatur i', 'https://www.hobuk.mobi', 'nizikutypi@mailinator.com', '+1 (761) 728-7695', '+1 (822) 665-9135', '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(5, 'Holt Weaver LLC', '85 White Fabien Court', 'Consequuntur minima ', 'Velit do cupidatat ', '4', 'Lorem velit rem fugi', 'Placeat eos sequi e', '1', 'Rerum cupidatat et a', 'https://www.dyhegozosexyhe.ca', 'tiluwuxol@mailinator.com', '+1 (706) 339-6721', '+1 (874) 532-1271', '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(6, 'Holt Weaver LLC', '85 White Fabien Court', 'Consequuntur minima ', 'Velit do cupidatat ', '4', 'Lorem velit rem fugi', 'Placeat eos sequi e', '1', 'Rerum cupidatat et a', 'https://www.dyhegozosexyhe.ca', 'tiluwuxol@mailinator.com', '+1 (706) 339-6721', '+1 (874) 532-1271', '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(7, 'Holt Weaver LLC', '85 White Fabien Court', 'Consequuntur minima ', 'Velit do cupidatat ', '4', 'Lorem velit rem fugi', 'Placeat eos sequi e', '1', 'Rerum cupidatat et a', 'https://www.dyhegozosexyhe.ca', 'tiluwuxol@mailinator.com', '+1 (706) 339-6721', '+1 (874) 532-1271', '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(8, 'Holt Weaver LLC', '85 White Fabien Court', 'Consequuntur minima ', 'Velit do cupidatat ', '4', 'Lorem velit rem fugi', 'Placeat eos sequi e', '1', 'Rerum cupidatat et a', 'https://www.dyhegozosexyhe.ca', 'tiluwuxol@mailinator.com', '+1 (706) 339-6721', '+1 (874) 532-1271', '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(9, 'Wilkinson Morgan Co', '377 Oak Freeway', 'Officia voluptate du', 'In beatae amet quam', '3', 'Eveniet et eos modi', 'Minim cumque similiq', '3', 'Quam magna voluptate', 'https://www.siwetegyq.com', 'lebak@mailinator.com', '+1 (385) 737-6546', '+1 (472) 831-3307', '1722854452_WhatsApp_Image_2024-07-22_at_12_48_01_dec3325f.jpg', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(10, 'Chapman Soto LLC', '963 Clarendon Road', 'Eu ea inventore in n', 'Ut consequatur fugi', '3', 'Autem odio impedit ', 'Qui recusandae Dolo', '3', 'Repudiandae sapiente', 'https://www.fygowagodivehal.ca', 'jocy@mailinator.com', '+1 (521) 399-8042', '+1 (854) 704-2592', '1722854460_WhatsApp_Image_2024-07-22_at_12_48_01_dec3325f.jpg', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(11, 'Chapman Soto LLC', '963 Clarendon Road', 'Eu ea inventore in n', 'Ut consequatur fugi', '3', 'Autem odio impedit ', 'Qui recusandae Dolo', '3', 'Repudiandae sapiente', 'https://www.fygowagodivehal.ca', 'jocy@mailinator.com', '+1 (521) 399-8042', '+1 (854) 704-2592', '1722854523_WhatsApp_Image_2024-07-22_at_12_48_01_dec3325f.jpg', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `job_listing`
--

DROP TABLE IF EXISTS `job_listing`;
CREATE TABLE IF NOT EXISTS `job_listing` (
  `job_id` int NOT NULL AUTO_INCREMENT,
  `job_title` text NOT NULL,
  `job_type` text NOT NULL,
  `job_category` text NOT NULL,
  `job_city` text NOT NULL,
  `job_country` text NOT NULL,
  `job_minimum_salary` text NOT NULL,
  `job_maximum_salary` text NOT NULL,
  `job_education_level` text NOT NULL,
  `job_experience` text NOT NULL,
  `job_website` text NOT NULL,
  `job_email` text NOT NULL,
  `job_number` text NOT NULL,
  `job_gender` text NOT NULL,
  `job_shift` text NOT NULL,
  `job_description` text NOT NULL,
  `job_image` text NOT NULL,
  `created_by` int NOT NULL,
  `created_on` datetime NOT NULL,
  `updated_by` int NOT NULL,
  `updated_on` datetime NOT NULL,
  PRIMARY KEY (`job_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `job_listing`
--

INSERT INTO `job_listing` (`job_id`, `job_title`, `job_type`, `job_category`, `job_city`, `job_country`, `job_minimum_salary`, `job_maximum_salary`, `job_education_level`, `job_experience`, `job_website`, `job_email`, `job_number`, `job_gender`, `job_shift`, `job_description`, `job_image`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(1, 'Itaque quos consecte', 'Job Type', '4', 'Voluptatem Dolor qu', '4', 'Elit reiciendis nis', 'Quo cillum voluptate', '3', '2', 'https://www.gys.tv', 'qumaw@mailinator.com', '+1 (479) 368-5205', 'Gender', '2', 'Anim error dolorem i', '', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(2, 'Provident ut esse ', '1', '3', 'Laudantium consecte', '1', 'Proident cillum exe', 'Nisi ratione minus s', '3', 'Experience', 'https://www.tyg.co.uk', 'qovesob@mailinator.com', '+1 (798) 105-4415', 'Gender', '1', 'Sint vitae cumque id', '1721987950_WhatsApp_Image_2024-07-22_at_12_48_01_dec3325f.jpg', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(3, 'Eius et consequatur ', '1', '2', 'Ad eu earum placeat', '1', 'Cillum dolorem labor', 'Expedita alias error', '2', '1', 'https://www.juwoboxygulu.org.uk', 'zuhyrirop@mailinator.com', '+1 (591) 114-2021', '1', 'Shift', 'Quidem beatae magnam', '1721987978_WhatsApp_Image_2024-07-22_at_12_48_01_dec3325f.jpg', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(4, 'Optio fugiat omnis', '2', '2', 'Sunt ut quia quo aut', '1', 'Veniam adipisicing ', 'Consequatur iusto f', '3', '2', 'https://www.kypalyhazyce.net', 'loxa@mailinator.com', '+1 (156) 983-3538', '2', '1', 'Dolore provident ni', '1721988093_WhatsApp_Image_2024-07-22_at_12_48_01_dec3325f.jpg', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(5, 'Optio fugiat omnis', '2', '2', 'Sunt ut quia quo aut', '1', 'Veniam adipisicing ', 'Consequatur iusto f', '3', '2', 'https://www.kypalyhazyce.net', 'loxa@mailinator.com', '+1 (156) 983-3538', '2', '1', 'Dolore provident ni', '1721988139_WhatsApp_Image_2024-07-22_at_12_48_01_dec3325f.jpg', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(6, 'Qui praesentium nequ', 'Job Type', '3', 'Facilis exercitation', 'Country', 'Deserunt odio ad atq', 'Et recusandae Delen', '3', '2', 'https://www.qakucynyguryzi.ca', 'hozybij@mailinator.com', '+1 (941) 274-3395', '2', 'Shift', 'Magna sed ab autem r', '1721988148_WhatsApp_Image_2024-07-22_at_12_48_01_dec3325f.jpg', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(7, 'Tempora minima in do', 'Job Type', 'Category', 'Omnis nisi exercitat', '4', 'Eiusmod irure perfer', 'Ullamco nostrud volu', 'Level', '2', 'https://www.hyleparu.com', 'gufisydo@mailinator.com', '+1 (241) 188-5978', 'Gender', '1', 'Fuga Sed nihil minu', '1722848476_OIG4_uokvJ_(1).jpg', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(8, 'Tempora minima in do', 'Job Type', 'Category', 'Omnis nisi exercitat', '4', 'Eiusmod irure perfer', 'Ullamco nostrud volu', 'Level', '2', 'https://www.hyleparu.com', 'gufisydo@mailinator.com', '+1 (241) 188-5978', 'Gender', '1', 'Fuga Sed nihil minu', '1722848526_OIG4_uokvJ_(1).jpg', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(9, 'Tempora minima in do', 'Job Type', 'Category', 'Omnis nisi exercitat', '4', 'Eiusmod irure perfer', 'Ullamco nostrud volu', 'Level', '2', 'https://www.hyleparu.com', 'gufisydo@mailinator.com', '+1 (241) 188-5978', 'Gender', '1', 'Fuga Sed nihil minu', '1722848537_OIG4_uokvJ_(1).jpg', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(10, 'Fugiat nihil Nam hic', 'Job Type', '2', 'Dolore enim inventor', '2', 'In corrupti sequi s', 'Nostrum unde volupta', 'Level', '2', 'https://www.pepami.cm', 'qefyr@mailinator.com', '+1 (559) 512-7645', 'Gender', 'Shift', 'Enim nostrum do fuga', '1722848580_OIG4_uokvJ_(1).jpg', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(11, 'Cupiditate aliquid p', '2', '4', 'Dolor dolores ullamc', '4', 'Aspernatur qui sapie', 'Et et dolore earum v', 'Level', 'Experience', 'https://www.nomominalusa.co.uk', 'zaja@mailinator.com', '+1 (326) 801-5672', '1', '1', 'Enim est deserunt au', '1722848873_OIG4_uokvJ_(1).jpg', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(12, 'Cupiditate aliquid p', '2', '4', 'Dolor dolores ullamc', '4', 'Aspernatur qui sapie', 'Et et dolore earum v', 'Level', 'Experience', 'https://www.nomominalusa.co.uk', 'zaja@mailinator.com', '+1 (326) 801-5672', '1', '1', 'Enim est deserunt au', '1722848948_OIG4_uokvJ_(1).jpg', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(13, 'Totam culpa dolorem', '1', '2', 'Ad ea inventore illo', 'Country', 'Natus nisi eum et et', 'Tempore provident ', 'Level', '2', 'https://www.vup.tv', 'nuxyteva@mailinator.com', '+1 (915) 996-6602', '2', '2', 'Nihil pariatur Laud', '1722854030_WhatsApp_Image_2024-07-22_at_12_48_01_dec3325f.jpg', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

DROP TABLE IF EXISTS `user_registration`;
CREATE TABLE IF NOT EXISTS `user_registration` (
  `uid` int NOT NULL AUTO_INCREMENT,
  `user_name` text,
  `user_mobile` text,
  `user_email` text,
  `user_address` text,
  `user_city` text,
  `user_pincode` text,
  `user_profile_pic` text,
  `user_created_on` text NOT NULL,
  `user_updated_on` text NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`uid`, `user_name`, `user_mobile`, `user_email`, `user_address`, `user_city`, `user_pincode`, `user_profile_pic`, `user_created_on`, `user_updated_on`, `status`) VALUES
(1, 'dsf', '8887787888', 'dsf@gmail.com', 'fdkhgldf', 'kum', '490042', '', '1721475327', '', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
