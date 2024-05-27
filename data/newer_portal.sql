-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 27, 2024 at 07:50 PM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newer_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `np_css_attrib`
--

DROP TABLE IF EXISTS `np_css_attrib`;
CREATE TABLE IF NOT EXISTS `np_css_attrib` (
  `np_css_attrib_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `np_css_attrib_name` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `np_css_attrib_new_val` varchar(1024) COLLATE utf8mb4_general_ci NOT NULL,
  `np_css_attrib_old_val` varchar(1024) COLLATE utf8mb4_general_ci NOT NULL,
  `np_css_attrib_def_val` varchar(1024) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`np_css_attrib_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `np_css_selector`
--

DROP TABLE IF EXISTS `np_css_selector`;
CREATE TABLE IF NOT EXISTS `np_css_selector` (
  `np_css_selector_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `np_css_selector_name` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`np_css_selector_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `np_selector_has_attrib`
--

DROP TABLE IF EXISTS `np_selector_has_attrib`;
CREATE TABLE IF NOT EXISTS `np_selector_has_attrib` (
  `selector_has_id` int UNSIGNED NOT NULL,
  `attrib_has_id` int UNSIGNED NOT NULL,
  PRIMARY KEY (`selector_has_id`,`attrib_has_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `np_users`
--

DROP TABLE IF EXISTS `np_users`;
CREATE TABLE IF NOT EXISTS `np_users` (
  `np_user_id` smallint UNSIGNED NOT NULL AUTO_INCREMENT,
  `np_user_username` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `np_user_firstname` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `np_user_lastname` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `np_user_email` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `np_user_pwd` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `np_user_permission` tinyint UNSIGNED NOT NULL DEFAULT '1' COMMENT '1 - basic user\r\n128 - Me\r\n255 - superAdmin',
  `np_user_lang` varchar(2) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'en',
  PRIMARY KEY (`np_user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `np_users`
--

INSERT INTO `np_users` (`np_user_id`, `np_user_username`, `np_user_firstname`, `np_user_lastname`, `np_user_email`, `np_user_pwd`, `np_user_permission`, `np_user_lang`) VALUES
(1, 'admin', 'Ad', 'Min', 'admin@admin.com', '$2y$10$2sn4jJ0LgUkGCQHNDfsEPOlybZlC20j.Lk3JCM7lfyAwwrizsEaem', 1, 'fr'),
(2, 'leerlandais', 'Lee', 'Brennan', 'lee@leerlandais.com', '$2y$10$y0pLpP4tuXDuLaDakIpkdO17YjRqZ6U5UEHPEid9LHR60L7eYIFy.', 255, 'en');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
