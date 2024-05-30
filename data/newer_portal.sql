-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 30, 2024 at 04:46 AM
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
  `np_css_selector_type` varchar(16) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'selector',
  PRIMARY KEY (`np_css_selector_id`),
  UNIQUE KEY `np_css_selector_name` (`np_css_selector_name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `np_css_selector`
--

INSERT INTO `np_css_selector` (`np_css_selector_id`, `np_css_selector_name`, `np_css_selector_type`) VALUES
(2, 'h1', 'selector'),
(3, 'updateSelectorTypeClass', 'id'),
(4, 'radioSelectLabel', 'class');

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
-- Table structure for table `np_text`
--

DROP TABLE IF EXISTS `np_text`;
CREATE TABLE IF NOT EXISTS `np_text` (
  `np_text_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `np_text_element` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `np_text_en` varchar(4096) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `np_text_fr` text COLLATE utf8mb4_general_ci NOT NULL,
  `np_text_type` varchar(8) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'id',
  `np_text_lock` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`np_text_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `np_text`
--

INSERT INTO `np_text` (`np_text_id`, `np_text_element`, `np_text_en`, `np_text_fr`, `np_text_type`, `np_text_lock`) VALUES
(1, 'adminHomeWelcomeMessage', 'Welcome to the Administration Page', 'Bienvenue sur la Page d&#039;Administration', 'id', 1),
(2, 'navLinkUpdateSelector', 'Add/Update Selector', 'Ajout/Mise à Jour Selecteur', 'id', 1),
(3, 'submitButton', 'Submit', 'Soumettre', 'class', 1),
(4, 'navLinkAddTxt', 'Add Text', 'Ajout du Texte', 'id', 1),
(5, 'navLinkUpdText', 'Update Text', 'Mettre Texte à Jour', 'id', 1),
(6, 'navLinkLogout', 'Logout', 'Déconnexion', 'id', 0),
(7, 'addTextLegend', 'Add New Text', 'Ajouter un Nouveau Texte', 'id', 0),
(8, 'radioClassLabel', 'Class', 'Classe', 'class', 0),
(9, 'radioIdLabel', 'ID', 'ID', 'class', 0),
(10, 'updateSelectorLegend', 'Click an item to update it', 'Cliquez sur un élément pour le mettre à jour', 'id', 0),
(11, 'addSelectorLegend', 'Add a New Selector', 'Ajouter un Nouveau Sélecteur', 'id', 0),
(12, 'radioSelectLabel', 'Selector', 'Selecteur', 'class', 0),
(15, 'copyrightName', '<a href=\"https://leerlandais.com\">Lee Brennan</a>', '<a href=\"https://leerlandais.com\">Lee Brennan</a>', 'id', 0),
(16, 'updateSelectorTypeSelect', 'Selector', 'Selecteur', 'id', 0),
(17, 'updateSelectorTypeId', 'ID', 'ID', 'id', 0),
(18, 'updateSelectorTypeClass', 'Class', 'Classe', 'id', 0),
(19, 'addTextselectLabelName', 'Selector', 'Selecteur', 'id', 0),
(20, 'addTextEnLabelName', 'English Text', 'Texte Anglais', 'id', 0),
(21, 'addTextFrLabelName', 'French Text', 'Texte Français', 'id', 0),
(23, 'footerScreenWidth', 'The screen width is:', 'La largeur de l\'écran est :', 'id', 0),
(24, 'securityWarning', 'You really didn\'t expect that to work, did you?', 'Pensais-tu vraiment que cela fonctionnerait?', 'id', 0);

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
