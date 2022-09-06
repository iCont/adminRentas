/*
Navicat MySQL Data Transfer

Source Server         : LOCAL
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : adminrentas

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2022-09-06 12:12:37
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for cat_apartments
-- ----------------------------
DROP TABLE IF EXISTS `cat_apartments`;
CREATE TABLE `cat_apartments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio_renta` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of cat_apartments
-- ----------------------------
INSERT INTO `cat_apartments` VALUES ('1', '1', '1000.00', null, null);
INSERT INTO `cat_apartments` VALUES ('2', '2', '1000.00', null, null);
INSERT INTO `cat_apartments` VALUES ('3', '3', '1000.00', null, null);
INSERT INTO `cat_apartments` VALUES ('4', '4', '1000.00', null, null);
INSERT INTO `cat_apartments` VALUES ('5', '5', '1000.00', null, null);
INSERT INTO `cat_apartments` VALUES ('6', '6', '1000.00', null, null);
INSERT INTO `cat_apartments` VALUES ('7', '7', '1000.00', null, null);
INSERT INTO `cat_apartments` VALUES ('8', '8', '1000.00', null, null);
INSERT INTO `cat_apartments` VALUES ('9', '9', '1000.00', null, null);
INSERT INTO `cat_apartments` VALUES ('10', '10', '1000.00', null, null);

-- ----------------------------
-- Table structure for cat_concept_payments
-- ----------------------------
DROP TABLE IF EXISTS `cat_concept_payments`;
CREATE TABLE `cat_concept_payments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of cat_concept_payments
-- ----------------------------
INSERT INTO `cat_concept_payments` VALUES ('1', 'Depósito', null, null);
INSERT INTO `cat_concept_payments` VALUES ('2', 'Renta', null, null);
INSERT INTO `cat_concept_payments` VALUES ('3', 'Otro', null, null);

-- ----------------------------
-- Table structure for cat_late_charges
-- ----------------------------
DROP TABLE IF EXISTS `cat_late_charges`;
CREATE TABLE `cat_late_charges` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `percentage` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of cat_late_charges
-- ----------------------------
INSERT INTO `cat_late_charges` VALUES ('1', '10.00', null, null);

-- ----------------------------
-- Table structure for cat_status_apartments
-- ----------------------------
DROP TABLE IF EXISTS `cat_status_apartments`;
CREATE TABLE `cat_status_apartments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of cat_status_apartments
-- ----------------------------
INSERT INTO `cat_status_apartments` VALUES ('1', 'Disponible', null, null);
INSERT INTO `cat_status_apartments` VALUES ('2', 'Ocupado', null, null);
INSERT INTO `cat_status_apartments` VALUES ('3', 'Reparación', null, null);

-- ----------------------------
-- Table structure for cat_status_payments
-- ----------------------------
DROP TABLE IF EXISTS `cat_status_payments`;
CREATE TABLE `cat_status_payments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of cat_status_payments
-- ----------------------------
INSERT INTO `cat_status_payments` VALUES ('1', 'Cancelado', null, null);
INSERT INTO `cat_status_payments` VALUES ('2', 'Pagado', null, null);
INSERT INTO `cat_status_payments` VALUES ('3', 'Pago con moratorios', null, null);

-- ----------------------------
-- Table structure for cat_status_renters
-- ----------------------------
DROP TABLE IF EXISTS `cat_status_renters`;
CREATE TABLE `cat_status_renters` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of cat_status_renters
-- ----------------------------
INSERT INTO `cat_status_renters` VALUES ('1', 'Activo', null, null);
INSERT INTO `cat_status_renters` VALUES ('2', 'Activo Moroso', null, null);
INSERT INTO `cat_status_renters` VALUES ('3', 'Inactivo', null, null);

-- ----------------------------
-- Table structure for cat_status_reports
-- ----------------------------
DROP TABLE IF EXISTS `cat_status_reports`;
CREATE TABLE `cat_status_reports` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of cat_status_reports
-- ----------------------------
INSERT INTO `cat_status_reports` VALUES ('1', 'Abierto', null, null);
INSERT INTO `cat_status_reports` VALUES ('2', 'Cerrado', null, null);
INSERT INTO `cat_status_reports` VALUES ('3', 'Pendiente', null, null);

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('27', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('28', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('29', '2019_08_19_000000_create_failed_jobs_table', '1');
INSERT INTO `migrations` VALUES ('30', '2019_12_14_000001_create_personal_access_tokens_table', '1');
INSERT INTO `migrations` VALUES ('31', '2022_09_05_045136_create_cat_late_charges_table', '1');
INSERT INTO `migrations` VALUES ('32', '2022_09_05_045240_create_cat_status_payments_table', '1');
INSERT INTO `migrations` VALUES ('33', '2022_09_05_045303_create_cat_status_reports_table', '1');
INSERT INTO `migrations` VALUES ('34', '2022_09_05_045356_create_cat_status_renters_table', '1');
INSERT INTO `migrations` VALUES ('35', '2022_09_05_045423_create_cat_status_apartments_table', '1');
INSERT INTO `migrations` VALUES ('36', '2022_09_05_045453_create_cat_concept_payments_table', '1');
INSERT INTO `migrations` VALUES ('37', '2022_09_05_045529_create_cat_apartments_table', '1');
INSERT INTO `migrations` VALUES ('38', '2022_09_05_045613_create_renters_table', '1');
INSERT INTO `migrations` VALUES ('39', '2022_09_05_045655_create_receipts_table', '2');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for receipts
-- ----------------------------
DROP TABLE IF EXISTS `receipts`;
CREATE TABLE `receipts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `month_covered` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `folio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount_charged` double(8,2) NOT NULL,
  `id_status_payment` bigint(20) unsigned NOT NULL,
  `id_concept_payment` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `receipts_id_status_payment_foreign` (`id_status_payment`),
  KEY `receipts_id_concept_payment_foreign` (`id_concept_payment`),
  CONSTRAINT `receipts_id_concept_payment_foreign` FOREIGN KEY (`id_concept_payment`) REFERENCES `cat_concept_payments` (`id`),
  CONSTRAINT `receipts_id_status_payment_foreign` FOREIGN KEY (`id_status_payment`) REFERENCES `cat_status_payments` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of receipts
-- ----------------------------

-- ----------------------------
-- Table structure for renters
-- ----------------------------
DROP TABLE IF EXISTS `renters`;
CREATE TABLE `renters` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `app` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_apartment` bigint(20) unsigned NOT NULL,
  `arrival_date` date NOT NULL,
  `departure_date` date NOT NULL,
  `id_status_renter` bigint(20) unsigned NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `renters_id_apartment_foreign` (`id_apartment`),
  KEY `renters_id_status_renter_foreign` (`id_status_renter`),
  CONSTRAINT `renters_id_apartment_foreign` FOREIGN KEY (`id_apartment`) REFERENCES `cat_apartments` (`id`),
  CONSTRAINT `renters_id_status_renter_foreign` FOREIGN KEY (`id_status_renter`) REFERENCES `cat_status_renters` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of renters
-- ----------------------------

-- ----------------------------
-- Table structure for reports
-- ----------------------------
DROP TABLE IF EXISTS `reports`;
CREATE TABLE `reports` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_renter` bigint(20) unsigned NOT NULL,
  `id_status_report` bigint(20) unsigned NOT NULL,
  `comments` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of reports
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
