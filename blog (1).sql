-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 23, 2023 at 01:22 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int NOT NULL AUTO_INCREMENT,
  `comment` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `user_id` int NOT NULL,
  `post_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf32;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `comment`, `username`, `user_id`, `post_id`) VALUES
(19, 'hello world', 'Himanshu Kashyap', 3, 12),
(21, '3 thousand words and not a single worthy foe', 'Moskov  Marksman', 2, 1),
(23, 'Winner Winner Chicken… Well, you get the idea.', 'Prithiviraj Khumukcham', 1, 1),
(24, '“I’ve got a bullet with your name on it.”', 'Prithiviraj Khumukcham', 1, 15),
(25, 'Just a lonely man on his way in the desert.', 'Himanshu Kashyap', 3, 15),
(26, '“Yesterday has become the past, the future is not yet… known.”', 'Joker DC', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `title2` varchar(200) NOT NULL,
  `body` varchar(1000) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL,
  `body2` varchar(500) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL,
  `media` varchar(100) NOT NULL,
  `owner_id` int NOT NULL,
  `owner_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf32;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `title2`, `body`, `body2`, `media`, `owner_id`, `owner_name`) VALUES
(1, 'Get Match Ready For UEFA EURO 2023', 'A chance to reunite with family and friends', 'UEFA EURO 2020™ will kick-off from the 11th June and after a year of delays and uncertainty it promises to be one of the most eagerly anticipated football tournaments ever.<br>\r\n\r\nIt’s also the first time in the tournament’s 60-year history that it will be held across the continent with 11 host cities.<br>\r\n\r\n20 teams will be competing and with England, Scotland and Wales all having qualified, interest across Britain will be huge right up to the final at Wembley Stadium on the 11th July.<br>', 'Coca-Cola are proud to be the official soft drinks sponsor of UEFA EURO 2020™. A long-term partnership of over 30 years.<br>\n\nAnd at Your Cola-Cola we have everything you need to get your team together and celebrate what will hopefully be a hot summer of football.\n\n', 'images/coke.png', 1, 'Prithiviraj Kh'),
(12, 'Coffee Cantata', '', 'The catch phrase for Coffee Cantata, “Coffee: Music in a Cup,” captures creator Margaret’s unpretentious approach to coffee connoisseurship. Her coffee reviews are cross-referenced by geographic origin and brew method.Margaret — a professional musician — brings finesse to the art of tasting: “… one sip of an Ethiopia Yirgacheffe and you will never mistake the flavor for a Sumatra, just like you would never mistake Mozart for Shostakovich.” ', '', 'images/nathan-dumlao-264380-unsplash.jpg', 1, 'Prithiviraj Khumukcham'),
(15, 'Ibrahimovic returns to Sweden squad for Euro Championship with no guarantee of playing time', '', 'AC Milan striker Zlatan Ibrahimovic returns to the Sweden squad after a one-year absence for their European Championship qualifiers against Belgium and Azerbaijan later this month, Sweden coach Janne Andersson announced on March 15.\r\n\r\nThe 41-year-old played his last match for the national team in 2022 against Poland in the World Cup qualification playoff loss, but has since struggled with a long-term anterior cruciate ligament injury that kept him on the sidelines.', '', 'images/2023-03-13T191520Z_788686033_UP1EJ3D1HHI5Q_RTRMADP_3_SOCCER-ITALY-MIL-USS-REPORT.jfif', 3, 'Himanshu Kashyap');

-- --------------------------------------------------------

--
-- Table structure for table `users_regis`
--

DROP TABLE IF EXISTS `users_regis`;
CREATE TABLE IF NOT EXISTS `users_regis` (
  `id` int NOT NULL AUTO_INCREMENT,
  `profile_pic` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirm_pass` varchar(50) NOT NULL,
  `otp` int NOT NULL,
  `status` int NOT NULL,
  `region` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `education` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` int NOT NULL,
  `dispic` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf32;

--
-- Dumping data for table `users_regis`
--

INSERT INTO `users_regis` (`id`, `profile_pic`, `username`, `firstname`, `lastname`, `email`, `password`, `confirm_pass`, `otp`, `status`, `region`, `country`, `education`, `address`, `mobile`, `dispic`) VALUES
(1, '', 'Prithiviraj Khumukcham', '', '', 'prithivirajkh@gmail.com', '12345678', '12345678', 8843, 1, '', '', '', '', 0, ''),
(2, '', 'Moskov  Marksman', '', '', 'moskovmm@moontoon.com', 'moskov123', 'moskov123', 8002, 1, '', '', '', '', 0, ''),
(3, '', 'Himanshu Kashyap', '', '', 'himan@pixelperfect.com', '12345678', '12345678', 2426, 1, '', '', '', '', 0, ''),
(5, '', 'Joker DC', '', '', 'joker@moontoon.com', '12345678', '12345678', 6158, 1, '', '', '', '', 0, ''),
(6, '', 'Thor Odinson', '', '', 'Thor@asgard.com', '12345678', '12345678', 2681, 1, '', '', '', '', 0, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
