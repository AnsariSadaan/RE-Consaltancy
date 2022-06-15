-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 15, 2022 at 07:30 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `re_consultancy`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `wishlist_id` int(11) NOT NULL,
  `status` enum('Y','N') NOT NULL,
  `date` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `order_id`, `user_id`, `wishlist_id`, `status`, `date`) VALUES
(1, 1, 2, 43, 'Y', '20-04-22'),
(2, 3, 1, 46, 'Y', '20-04-22'),
(3, 7, 5, 49, 'Y', '24-04-22'),
(4, 8, 1, 57, 'Y', '24-04-22'),
(5, 8, 4, 52, 'Y', '24-04-22');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

DROP TABLE IF EXISTS `enquiries`;
CREATE TABLE IF NOT EXISTS `enquiries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`id`, `name`, `email`, `description`, `created_on`) VALUES
(1, 'Sadaan', 'ansarisadaan72@gmail.com', 'start roll', '2022-03-14 08:25:44'),
(2, 'Subodh', 'subodhchalke31@gmail.com', 'first roll', '2022-03-14 08:25:44'),
(3, 'Vaibhav', 'vaibhav12@gmail.com', 'mid roll', '2022-03-14 08:29:07'),
(4, 'ansari sadaan', 'ansarisadaan72@gmail.com', 'safg', '2022-04-24 14:19:51');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `card_num` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `card_cvc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `card_exp_month` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `card_exp_year` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `name`, `email`, `card_num`, `card_cvc`, `card_exp_month`, `card_exp_year`, `created`, `modified`) VALUES
(1, 'shubham', 'shubham@gnmail.com', '1234 1234 1234 1234', '123', '02', '2020', '0020-10-15 07:31:51', '2020-10-15 08:29:07'),
(2, 'ansari sadaan', 'ansarisadaan72@gmail.com', '1234 1234 1234', '254', '02', '02', '2024-04-22 00:00:00', '2024-04-22 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

DROP TABLE IF EXISTS `sellers`;
CREATE TABLE IF NOT EXISTS `sellers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `typo` varchar(255) NOT NULL,
  `protype` varchar(255) NOT NULL,
  `prostatus` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `image` varchar(11) NOT NULL,
  `updated_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `username` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_UserSeller` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`id`, `typo`, `protype`, `prostatus`, `price`, `address`, `city`, `image`, `updated_on`, `username`) VALUES
(1, '2 BHK 2T (Above 1000 Sq.ft)', 'Homes', 'Under Construction', '20lacs', 'dfreg', 'Mumbai', 'bc1.jpg', '2022-04-24 14:20:15', 'rty'),
(2, '3 BHK 2T (Above 1350 Sq.ft)', 'Commercial', 'Under Construction', '94000', 'sadew', 'Akola', 'bk15.jpg', '2022-04-24 14:23:48', 'reAdmin'),
(3, '1 BHK (600 - 750 Sq.ft)', 'Homes', 'Under Construction', '2000', 'rangwala orchid enclave', 'Mumbai', 'bc1.jpg', '2022-04-24 22:00:01', 'bagga'),
(4, '4 BHK (Above 2200 Sq.ft)', 'Residential', 'Under Construction', '9000', 'gfghwdgjhgdfh', 'Pune', 'img3.jpg', '2022-04-25 07:35:43', 'subodh');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `phno` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `fname`, `phno`, `email`, `pwd`, `created_on`) VALUES
(1, 'reAdmin', 'Sadaan', '7045623244', 'ansarisadaan72@gmail.com', '123456', '2022-03-11 08:31:51'),
(2, 'sadaan12', 'Ansari Sadaan', '7045623244', 'ansarisadaan72@gmail.com', '123456', '2022-04-19 17:40:58'),
(3, 'waseem12', 'ansari waseem', '7303143193', 'ansariwaseem@gmail.com', '123456', '2022-06-15 07:29:13');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

DROP TABLE IF EXISTS `wishlist`;
CREATE TABLE IF NOT EXISTS `wishlist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `status` enum('Y','N') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
