-- MySQL dump 10.13  Distrib 8.0.41, for Linux (x86_64)
--
-- Host: localhost    Database: astacode
-- ------------------------------------------------------
-- Server version	8.0.41-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `category_projects`
--

DROP TABLE IF EXISTS `category_projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `category_projects` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_projects`
--

LOCK TABLES `category_projects` WRITE;
/*!40000 ALTER TABLE `category_projects` DISABLE KEYS */;
INSERT INTO `category_projects` VALUES (1,'2024-05-18 04:27:04',NULL,'Mobile Application','mobile'),(2,NULL,NULL,'Web Development','web'),(13,'2024-05-18 00:58:44','2024-05-18 00:58:44','Design','design');
/*!40000 ALTER TABLE `category_projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contants`
--

DROP TABLE IF EXISTS `contants`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contants` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wa` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contants`
--

LOCK TABLES `contants` WRITE;
/*!40000 ALTER TABLE `contants` DISABLE KEYS */;
INSERT INTO `contants` VALUES (1,'2024-05-20 03:12:24','2024-05-20 03:12:24','asada','dada@mail.com','2312312','adsadaddasd');
/*!40000 ALTER TABLE `contants` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `education_members`
--

DROP TABLE IF EXISTS `education_members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `education_members` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `member_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from` smallint NOT NULL,
  `to` smallint NOT NULL,
  `degree` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `education_members_member_id_foreign` (`member_id`),
  CONSTRAINT `education_members_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `education_members`
--

LOCK TABLES `education_members` WRITE;
/*!40000 ALTER TABLE `education_members` DISABLE KEYS */;
INSERT INTO `education_members` VALUES (7,'2024-05-19 21:51:56','2024-05-19 21:51:56',12,'STIMIK DCI',2012,2015,'Sarjana','Sarjana');
/*!40000 ALTER TABLE `education_members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `image_projects`
--

DROP TABLE IF EXISTS `image_projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `image_projects` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `project_id` bigint unsigned NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `image_projects_project_id_foreign` (`project_id`),
  CONSTRAINT `image_projects_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `image_projects`
--

LOCK TABLES `image_projects` WRITE;
/*!40000 ALTER TABLE `image_projects` DISABLE KEYS */;
INSERT INTO `image_projects` VALUES (48,'2024-05-18 06:49:22','2024-05-18 06:49:22',23,'/storage/images/project1.png'),(49,'2024-05-18 06:52:40','2024-05-18 06:52:40',24,'/storage/images/project2.png'),(50,'2024-05-18 06:58:23','2024-05-18 06:58:23',25,'/storage/images/project3.png'),(51,'2024-05-18 06:59:36','2024-05-18 06:59:36',26,'/storage/images/project4.png'),(52,'2024-05-18 07:00:15','2024-05-18 07:00:15',27,'/storage/images/project5.png'),(57,'2024-05-22 03:48:26','2024-05-22 03:48:26',28,'public/images/project6.png');
/*!40000 ALTER TABLE `image_projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jabatans`
--

DROP TABLE IF EXISTS `jabatans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jabatans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `jabatans_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jabatans`
--

LOCK TABLES `jabatans` WRITE;
/*!40000 ALTER TABLE `jabatans` DISABLE KEYS */;
INSERT INTO `jabatans` VALUES (1,NULL,NULL,'Chief Executive Officer (CEO)',1),(3,'2024-05-18 01:24:00','2024-05-18 01:33:49','Chief Financial Officer - CFO',1),(4,'2024-05-19 22:48:48','2024-05-19 22:48:48','Chief Operating Officer - COO',1),(5,'2024-05-19 22:50:27','2024-05-19 22:50:27','Software Engineer',1);
/*!40000 ALTER TABLE `jabatans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `members` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `jabatan_id` bigint unsigned NOT NULL,
  `name` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `members_jabatan_id_foreign` (`jabatan_id`),
  CONSTRAINT `members_jabatan_id_foreign` FOREIGN KEY (`jabatan_id`) REFERENCES `jabatans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `members`
--

LOCK TABLES `members` WRITE;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
INSERT INTO `members` VALUES (12,'2024-05-19 21:51:56','2024-05-19 21:51:56',1,'Galih Pangestu','Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, incidunt expedita ipsam non quo dolore. Possimus, modi obcaecati? Veritatis, ea consequatur. Quo nostrum accusantium cumque dolor corrupti quia animi. Minima?','fb','ig','ada','sasd','/storage/images/member/galihceo.png'),(14,'2024-05-19 22:45:38','2024-05-19 22:45:38',3,'Muhammad Hisyam','Chief Financial Officer - CFO','fb','ig','lin','twit','/storage/images/member/team2-removebg-preview.png'),(17,'2024-05-19 22:50:01','2024-05-19 22:50:01',4,'Muhammad Rafi H','saya sebagai COO di Astacode','f','i','l','t','/storage/images/member/team3-removebg-preview.png'),(18,'2024-05-19 22:53:01','2024-05-20 21:21:17',5,'Pramudita Ahmad','Hi saya Pramudita Ahmad Saya Sebagai Software Enginner di Astacode','https://www.facebook.com/pramudita.ahmad.10','https://www.instagram.com/_pramdit.a/','https://www.linkedin.com/in/pramudita-ahmad-4ba11a232/','https://x.com/JouskaPram','/storage/images/member/PRAMUDITA_6716-removebg-preview.png');
/*!40000 ALTER TABLE `members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (6,'2014_10_12_100000_create_password_reset_tokens_table',1),(7,'2019_08_19_000000_create_failed_jobs_table',1),(8,'2019_12_14_000001_create_personal_access_tokens_table',1),(9,'2024_05_16_064010_create_permission_tables',1),(10,'2024_06_12_000000_create_users_table',1),(11,'2024_05_18_041022_create_category_projects_table',2),(13,'2024_05_18_080316_create_jabatans_table',3),(16,'2024_05_18_083740_create_projects_table',4),(17,'2024_05_18_084538_create_image_projects_table',4),(21,'2024_05_18_152341_create_members_table',5),(22,'2024_05_18_153551_create_education_members_table',5),(23,'2024_05_18_153900_create_skill_members_table',5),(24,'2024_05_18_160948_create_contants_table',6),(27,'2024_05_21_094547_create_services_table',7),(28,'2024_05_21_094619_create_technologies_table',7);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_permissions`
--

LOCK TABLES `model_has_permissions` WRITE;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_roles`
--

LOCK TABLES `model_has_roles` WRITE;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` VALUES (1,'App\\Models\\User',5);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `projects` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_project_id` bigint unsigned NOT NULL,
  `name` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_name` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_city` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_project` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `challenge` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_result` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `projects_category_project_id_foreign` (`category_project_id`),
  CONSTRAINT `projects_category_project_id_foreign` FOREIGN KEY (`category_project_id`) REFERENCES `category_projects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects`
--

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` VALUES (23,'2024-05-18 06:49:22','2024-05-18 06:56:52',1,'Dialogoo Pos','Adam Pramudita','Tasikmalaya','Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit, temporibus dicta ut consequatur voluptas accusantium a quas? Fuga voluptates pariatur saepe veniam repudiandae optio.','Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit, temporibus dicta ut consequatur voluptas accusantium a quas? Fuga voluptates pariatur saepe veniam repudiandae optio.','Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit, temporibus dicta ut consequatur voluptas accusantium a quas? Fuga voluptates pariatur saepe veniam repudiandae optio.'),(24,'2024-05-18 06:52:40','2024-05-18 06:52:40',2,'Sistem Event Perdosi','Ahmad Husen','Tasikmalaya','Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit, temporibus dicta ut consequatur voluptas accusantium a quas? Fuga voluptates pariatur saepe veniam repudiandae optio.','Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit, temporibus dicta ut consequatur voluptas accusantium a quas? Fuga voluptates pariatur saepe veniam repudiandae optio.','Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit, temporibus dicta ut consequatur voluptas accusantium a quas? Fuga voluptates pariatur saepe veniam repudiandae optio.'),(25,'2024-05-18 06:58:23','2024-05-18 06:58:23',2,'Perdosisi','Pramuditaaa ^^','Tasikmalaya','Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore quis nihil illo tenetur voluptate fugit explicabo provident molestias minima libero aliquam quas tempora unde possimus, similique iste numquam, exercitationem quam.','Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore quis nihil illo tenetur voluptate fugit explicabo provident molestias minima libero aliquam quas tempora unde possimus, similique iste numquam, exercitationem quam.','Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore quis nihil illo tenetur voluptate fugit explicabo provident molestias minima libero aliquam quas tempora unde possimus, similique iste numquam, exercitationem quam.'),(26,'2024-05-18 06:59:36','2024-05-18 06:59:36',2,'Layton','Pramuditaaa ^^','Tasikmalaya','Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore quis nihil illo tenetur voluptate fugit explicabo provident molestias minima libero aliquam quas tempora unde possimus, similique iste numquam, exercitationem quam.','Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore quis nihil illo tenetur voluptate fugit explicabo provident molestias minima libero aliquam quas tempora unde possimus, similique iste numquam, exercitationem quam.','Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore quis nihil illo tenetur voluptate fugit explicabo provident molestias minima libero aliquam quas tempora unde possimus, similique iste numquam, exercitationem quam.'),(27,'2024-05-18 07:00:15','2024-05-18 07:00:15',1,'e-Office','Pramuditaa ^^','Tasikmalaya','Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore quis nihil illo tenetur voluptate fugit explicabo provident molestias minima libero aliquam quas tempora unde possimus, similique iste numquam, exercitationem quam.','Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore quis nihil illo tenetur voluptate fugit explicabo provident molestias minima libero aliquam quas tempora unde possimus, similique iste numquam, exercitationem quam.','Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore quis nihil illo tenetur voluptate fugit explicabo provident molestias minima libero aliquam quas tempora unde possimus, similique iste numquam, exercitationem quam.'),(28,'2024-05-18 07:02:15','2024-05-18 07:02:15',2,'Astacode','Pramuditaa','Tasikmalaya','Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore quis nihil illo tenetur voluptate fugit explicabo provident molestias minima libero aliquam quas tempora unde possimus, similique iste numquam, exercitationem quam.','Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore quis nihil illo tenetur voluptate fugit explicabo provident molestias minima libero aliquam quas tempora unde possimus, similique iste numquam, exercitationem quam.','Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore quis nihil illo tenetur voluptate fugit explicabo provident molestias minima libero aliquam quas tempora unde possimus, similique iste numquam, exercitationem quam.');
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_has_permissions`
--

LOCK TABLES `role_has_permissions` WRITE;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin','web',NULL,NULL);
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `services` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (3,'2024-05-22 04:33:08','2024-05-22 23:46:04','Website Development','We provide company profile websites, online shops, microsites, landing pages and others according to the wishes and needs of clients with the best quality and affordable prices.','public/images/icon/1716446764_s-icon-4.svg'),(4,'2024-05-22 04:33:33','2024-05-22 04:33:33','Mobile App Development','We provide Mobile application development services with an emphasis on custom application development processes with an attractive UI and UX that supports the backend system integration process.','/storage/images/icon/s-icon-2.svg'),(5,'2024-05-22 04:34:02','2024-05-22 04:34:02','Creative Branding And Design','We provide creative visual content creation services in the form of graphic design, animation, banners, logos, photography and videography and other content needs. and best quality.','/storage/images/icon/s-icon-3.svg'),(6,'2024-05-22 04:34:42','2024-05-22 04:34:42','IT Consultant','We have good communication skills, from conducting research interviews with clients, managing teams and stakeholders, writing business proposals, conducting presentations, to writing reports.','/storage/images/icon/s-icon-1.svg');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skill_members`
--

DROP TABLE IF EXISTS `skill_members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `skill_members` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `member_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percentage` smallint NOT NULL,
  PRIMARY KEY (`id`),
  KEY `skill_members_member_id_foreign` (`member_id`),
  CONSTRAINT `skill_members_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skill_members`
--

LOCK TABLES `skill_members` WRITE;
/*!40000 ALTER TABLE `skill_members` DISABLE KEYS */;
INSERT INTO `skill_members` VALUES (44,'2024-05-21 00:03:56','2024-05-21 00:03:56',18,'sadas',322),(45,'2024-05-21 21:14:06','2024-05-21 21:14:06',18,'sadsa',232);
/*!40000 ALTER TABLE `skill_members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `technologies`
--

DROP TABLE IF EXISTS `technologies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `technologies` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `technologies`
--

LOCK TABLES `technologies` WRITE;
/*!40000 ALTER TABLE `technologies` DISABLE KEYS */;
INSERT INTO `technologies` VALUES (3,'2024-05-22 04:43:09','2024-05-22 04:43:09','Laravel','public/images/tech/1716378189_download.png'),(4,'2024-05-22 04:43:31','2024-05-22 04:43:31','Codeigniter','public/images/tech/1716378211_download (1).jpeg'),(5,'2024-05-22 04:43:46','2024-05-22 04:43:46','Flutter','public/images/tech/1716378226_download (1).png'),(6,'2024-05-22 04:44:09','2024-05-22 04:44:09','Vue JS','public/images/tech/1716378249_download (2).png'),(7,'2024-05-22 04:44:32','2024-05-22 04:44:32','React JS','public/images/tech/1716378272_download (3).png'),(8,'2024-05-22 04:44:51','2024-05-22 04:44:51','Node JS','public/images/tech/1716378291_node (1).png'),(9,'2024-05-22 04:45:12','2024-05-22 04:45:12','Firebase','public/images/tech/1716378312_download (2).jpeg'),(10,'2024-05-22 04:45:26','2024-05-22 04:45:26','MYSQL','public/images/tech/1716378326_mysql.png'),(11,'2024-05-22 04:45:47','2024-05-22 04:45:47','Postgress','public/images/tech/1716378347_postgress.png'),(12,'2024-05-22 04:46:15','2024-05-22 04:46:15','MongoDB','public/images/tech/1716378375_mongo.png'),(13,'2024-05-22 04:46:34','2024-05-22 04:46:34','Ionic','public/images/tech/1716378394_ionic.png'),(14,'2024-05-22 04:46:55','2024-05-22 04:46:55','TailwindCSS','public/images/tech/1716378415_tailwind.png');
/*!40000 ALTER TABLE `technologies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (5,'Astacode','astacode@mail.com',NULL,'$2y$12$zxDP0E6RDDCQ3xfQQqHHzu2BAfUwjd/vMXiZcMjpaw4IL7HOgHYqy',NULL,'2024-05-17 20:56:03','2024-05-17 20:56:03');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-02-03 14:38:02
