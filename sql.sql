-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.14-log - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             8.1.0.4545
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for e_waste_db
CREATE DATABASE IF NOT EXISTS `e_waste_db` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `e_waste_db`;


-- Dumping structure for table e_waste_db.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table e_waste_db.categories: ~0 rows (approximately)
DELETE FROM `categories`;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;


-- Dumping structure for table e_waste_db.category_management
CREATE TABLE IF NOT EXISTS `category_management` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned NOT NULL,
  `management_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_management_category_id_index` (`category_id`),
  KEY `category_management_management_id_index` (`management_id`),
  CONSTRAINT `category_management_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  CONSTRAINT `category_management_management_id_foreign` FOREIGN KEY (`management_id`) REFERENCES `managements` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table e_waste_db.category_management: ~0 rows (approximately)
DELETE FROM `category_management`;
/*!40000 ALTER TABLE `category_management` DISABLE KEYS */;
/*!40000 ALTER TABLE `category_management` ENABLE KEYS */;


-- Dumping structure for table e_waste_db.internets
CREATE TABLE IF NOT EXISTS `internets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `owner` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trade_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `contact_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table e_waste_db.internets: ~0 rows (approximately)
DELETE FROM `internets`;
/*!40000 ALTER TABLE `internets` DISABLE KEYS */;
INSERT INTO `internets` (`id`, `owner`, `trade_name`, `address`, `contact_no`, `created_at`, `updated_at`) VALUES
	(1, 'Oliver', 'Wala net cagfe', 'Meciano Road', '123213', '2014-02-16 17:18:25', '2014-02-16 17:18:25'),
	(2, 'AAAAAAAAAA', 'JHJKHKUL', 'HFGH', '09Y60850', '2014-02-16 17:27:34', '2014-02-16 17:27:34');
/*!40000 ALTER TABLE `internets` ENABLE KEYS */;


-- Dumping structure for table e_waste_db.internet_service
CREATE TABLE IF NOT EXISTS `internet_service` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `internet_id` int(10) unsigned NOT NULL,
  `service_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `internet_service_internet_id_index` (`internet_id`),
  KEY `internet_service_service_id_index` (`service_id`),
  CONSTRAINT `internet_service_internet_id_foreign` FOREIGN KEY (`internet_id`) REFERENCES `internets` (`id`) ON DELETE CASCADE,
  CONSTRAINT `internet_service_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table e_waste_db.internet_service: ~0 rows (approximately)
DELETE FROM `internet_service`;
/*!40000 ALTER TABLE `internet_service` DISABLE KEYS */;
INSERT INTO `internet_service` (`id`, `internet_id`, `service_id`) VALUES
	(1, 1, 1),
	(2, 1, 2),
	(3, 1, 3),
	(4, 2, 1),
	(5, 2, 2),
	(6, 2, 3),
	(7, 2, 4);
/*!40000 ALTER TABLE `internet_service` ENABLE KEYS */;


-- Dumping structure for table e_waste_db.managements
CREATE TABLE IF NOT EXISTS `managements` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `internet_id` int(11) NOT NULL,
  `technique_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table e_waste_db.managements: ~0 rows (approximately)
DELETE FROM `managements`;
/*!40000 ALTER TABLE `managements` DISABLE KEYS */;
/*!40000 ALTER TABLE `managements` ENABLE KEYS */;


-- Dumping structure for table e_waste_db.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table e_waste_db.migrations: ~10 rows (approximately)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
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
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;


-- Dumping structure for table e_waste_db.pages
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table e_waste_db.pages: ~7 rows (approximately)
DELETE FROM `pages`;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` (`id`, `name`, `route`, `icon`, `order`, `ref`, `created_at`, `updated_at`) VALUES
	(1, 'Internet Cafe', 'internets', 'glyphicons-icon imac', 1, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(2, 'E-waste Categories', 'categories', 'fa-icon-trash', 2, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(3, 'Services', 'services', 'fa-icon-th-list', 3, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(4, 'Techniques', 'techniques', ' fa-icon-qrcode', 4, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(5, 'Reports', 'reports', 'fa-icon-table', 5, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(6, 'Map', 'map', 'fa-icon-map-marker', 6, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(7, 'Home', '/', 'fa-icon-home', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;


-- Dumping structure for table e_waste_db.services
CREATE TABLE IF NOT EXISTS `services` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table e_waste_db.services: ~0 rows (approximately)
DELETE FROM `services`;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Research Station', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(2, 'Scanning', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(3, 'Document Printing', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(4, 'Graphics Editing', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;


-- Dumping structure for table e_waste_db.settings
CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `site_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table e_waste_db.settings: ~1 rows (approximately)
DELETE FROM `settings`;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` (`id`, `site_name`) VALUES
	(1, 'E-waste Tracking System');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;


-- Dumping structure for table e_waste_db.techniques
CREATE TABLE IF NOT EXISTS `techniques` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table e_waste_db.techniques: ~0 rows (approximately)
DELETE FROM `techniques`;
/*!40000 ALTER TABLE `techniques` DISABLE KEYS */;
/*!40000 ALTER TABLE `techniques` ENABLE KEYS */;


-- Dumping structure for table e_waste_db.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table e_waste_db.users: ~1 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `password`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'admin', '$2y$10$iazAFy0HeHVhNDMlVf52Wu4f906uYe5H8W9e6MXLTYPPXDEhoBPOi', 'Asshurim Larita', '2014-02-15 09:50:57', '2014-02-15 09:50:57');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
