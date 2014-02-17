-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2014 at 10:34 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `e_waste_db`
--
CREATE DATABASE IF NOT EXISTS `e_waste_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `e_waste_db`;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Truncate table before insert `categories`
--

TRUNCATE TABLE `categories`;
--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'kEYBOARD', '2014-02-17 08:47:23', '2014-02-17 08:47:23'),
(2, 'mOUSE', '2014-02-17 08:47:29', '2014-02-17 08:47:29'),
(4, 'pRINTERS', '2014-02-17 08:47:59', '2014-02-17 08:47:59'),
(5, 'MONITORS', '2014-02-17 08:48:10', '2014-02-17 08:48:10'),
(6, 'hEADPHONES', '2014-02-17 08:48:22', '2014-02-17 08:48:22'),
(7, 'abc', '2014-02-17 08:50:56', '2014-02-17 08:50:56'),
(8, 'CHE', '2014-02-17 08:51:15', '2014-02-17 08:51:15');

-- --------------------------------------------------------

--
-- Table structure for table `category_management`
--

DROP TABLE IF EXISTS `category_management`;
CREATE TABLE IF NOT EXISTS `category_management` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned NOT NULL,
  `management_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_management_category_id_index` (`category_id`),
  KEY `category_management_management_id_index` (`management_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Truncate table before insert `category_management`
--

TRUNCATE TABLE `category_management`;
--
-- Dumping data for table `category_management`
--

INSERT INTO `category_management` (`id`, `category_id`, `management_id`) VALUES
(1, 5, 1),
(2, 5, 2),
(3, 4, 3),
(4, 2, 4),
(5, 6, 5);

-- --------------------------------------------------------

--
-- Table structure for table `internet_service`
--

DROP TABLE IF EXISTS `internet_service`;
CREATE TABLE IF NOT EXISTS `internet_service` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `internet_id` int(10) unsigned NOT NULL,
  `service_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `internet_service_internet_id_index` (`internet_id`),
  KEY `internet_service_service_id_index` (`service_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Truncate table before insert `internet_service`
--

TRUNCATE TABLE `internet_service`;
--
-- Dumping data for table `internet_service`
--

INSERT INTO `internet_service` (`id`, `internet_id`, `service_id`) VALUES
(8, 3, 1),
(9, 4, 1),
(10, 5, 1),
(11, 5, 3),
(12, 5, 4),
(13, 4, 5),
(14, 4, 6);

-- --------------------------------------------------------

--
-- Table structure for table `internets`
--

DROP TABLE IF EXISTS `internets`;
CREATE TABLE IF NOT EXISTS `internets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `owner` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trade_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `contact_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Truncate table before insert `internets`
--

TRUNCATE TABLE `internets`;
--
-- Dumping data for table `internets`
--

INSERT INTO `internets` (`id`, `owner`, `trade_name`, `address`, `contact_no`, `created_at`, `updated_at`) VALUES
(3, 'Rhealon Joyce Abad', 'Colaba Internet Cafe', 'Northern Junob', '223-5567', '2014-02-17 08:43:01', '2014-02-17 08:43:01'),
(4, 'Arnold Belen', 'Bleenz Internet Cafe', 'CAINDAGAN', '09358991320', '2014-02-17 08:44:03', '2014-02-17 08:44:03'),
(5, 'aQUINO eVELYN', 'rOMrAMS iNTERNET cAFE', 'gUIHULNGAN cITY', '090070707', '2014-02-17 08:44:53', '2014-02-17 08:44:53');

-- --------------------------------------------------------

--
-- Table structure for table `managements`
--

DROP TABLE IF EXISTS `managements`;
CREATE TABLE IF NOT EXISTS `managements` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `internet_id` int(11) NOT NULL,
  `technique_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Truncate table before insert `managements`
--

TRUNCATE TABLE `managements`;
--
-- Dumping data for table `managements`
--

INSERT INTO `managements` (`id`, `internet_id`, `technique_id`, `date`, `created_at`, `updated_at`) VALUES
(1, 4, 3, '2014-02-04', '2014-02-17 09:04:15', '2014-02-17 09:14:58'),
(2, 4, 2, '2014-02-18', '2014-02-17 09:04:27', '2014-02-17 09:04:27'),
(3, 3, 3, '2014-02-18', '2014-02-17 09:06:17', '2014-02-17 09:06:17'),
(4, 3, 3, '1970-01-01', '2014-02-17 09:06:34', '2014-02-17 09:06:34'),
(5, 3, 2, '2014-02-20', '2014-02-17 09:06:48', '2014-02-17 09:06:48');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Truncate table before insert `migrations`
--

TRUNCATE TABLE `migrations`;
--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_02_15_073122_create_users_table', 1),
('2014_02_15_074107_create_internets_table', 2),
('2014_02_15_074338_create_services_table', 3),
('2014_02_15_074830_create_managements_table', 4),
('2014_02_15_074912_create_categories_table', 4),
('2014_02_15_074942_create_techniques_table', 4),
('2014_02_15_075222_pivot_category_management_table', 5),
('2014_02_15_075512_pivot_internet_service_table', 6),
('2014_02_15_084855_create_settings_table', 7),
('2014_02_16_155629_create_pages_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `route` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'fa-icon-reorder',
  `order` int(11) NOT NULL,
  `ref` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Truncate table before insert `pages`
--

TRUNCATE TABLE `pages`;
--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `route`, `icon`, `order`, `ref`, `created_at`, `updated_at`) VALUES
(1, 'Internet Cafe', 'internets', 'fa-icon-hdd', 1, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'E-waste Categories', 'categories', 'fa-icon-trash', 2, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Services', 'services', 'fa-icon-th-list', 3, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Techniques', 'techniques', ' fa-icon-qrcode', 4, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Reports', 'reports', 'fa-icon-table', 5, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Map', 'map', 'fa-icon-map-marker', 6, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Home', '/', 'fa-icon-home', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Truncate table before insert `services`
--

TRUNCATE TABLE `services`;
--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Research Station', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Scanning', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Document Printing', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Graphics Editing', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Gaming', '2014-02-17 09:15:14', '2014-02-17 09:15:14'),
(6, 'Photo Editing', '2014-02-17 09:15:22', '2014-02-17 09:15:22');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `site_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Truncate table before insert `settings`
--

TRUNCATE TABLE `settings`;
--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_name`) VALUES
(1, 'E-waste Tracking System');

-- --------------------------------------------------------

--
-- Table structure for table `techniques`
--

DROP TABLE IF EXISTS `techniques`;
CREATE TABLE IF NOT EXISTS `techniques` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Truncate table before insert `techniques`
--

TRUNCATE TABLE `techniques`;
--
-- Dumping data for table `techniques`
--

INSERT INTO `techniques` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Landfilling', '2014-02-17 08:59:00', '2014-02-17 08:59:00'),
(2, 'Sell to junkshop', '2014-02-17 08:59:42', '2014-02-17 08:59:42'),
(3, 'Storing them to torage areas', '2014-02-17 09:03:05', '2014-02-17 09:03:05'),
(4, 'Storage Areas', '2014-02-17 09:03:33', '2014-02-17 09:03:33'),
(5, 'Burn Them', '2014-02-17 09:08:57', '2014-02-17 09:08:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Truncate table before insert `users`
--

TRUNCATE TABLE `users`;
--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$iazAFy0HeHVhNDMlVf52Wu4f906uYe5H8W9e6MXLTYPPXDEhoBPOi', 'Asshurim Larita', '2014-02-15 01:50:57', '2014-02-15 01:50:57');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_management`
--
ALTER TABLE `category_management`
  ADD CONSTRAINT `category_management_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `category_management_management_id_foreign` FOREIGN KEY (`management_id`) REFERENCES `managements` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `internet_service`
--
ALTER TABLE `internet_service`
  ADD CONSTRAINT `internet_service_internet_id_foreign` FOREIGN KEY (`internet_id`) REFERENCES `internets` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `internet_service_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
