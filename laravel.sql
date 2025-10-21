-- MySQL dump 10.13  Distrib 8.0.32, for Linux (aarch64)
--
-- Host: localhost    Database: laravel
-- ------------------------------------------------------
-- Server version	8.0.32

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
-- Table structure for table `gallery_images`
--

DROP TABLE IF EXISTS `gallery_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gallery_images` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallery_images`
--

LOCK TABLES `gallery_images` WRITE;
/*!40000 ALTER TABLE `gallery_images` DISABLE KEYS */;
INSERT INTO `gallery_images` VALUES (1,'Gato','img_1746994123.jpg',1,'2025-05-11 20:08:43','2025-05-11 20:08:43');
/*!40000 ALTER TABLE `gallery_images` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2025_04_28_002400_create_pages_table',1),(6,'2025_04_28_164253_create_gallery_images_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,'Sobre nosotros','This is the home page','sobre-nosotros',NULL,'2025-04-29 23:28:26','2025-04-29 23:28:26'),(2,'Lila Kuhlman','Laborum quis velit voluptas corporis tempora quasi ut. Quam sit laboriosam commodi at qui fuga. Blanditiis hic repellat alias temporibus sed.','vel-tempore-et-dolorum-autem-dolores',NULL,'2025-04-29 23:28:26','2025-04-29 23:28:26'),(3,'Anabel Abernathy PhD','Harum odit maxime saepe. Eius saepe distinctio voluptas voluptates exercitationem. Et debitis omnis blanditiis ut suscipit commodi. Corrupti enim id voluptatem labore.','et-omnis-quia-dolores-occaecati-enim-odio',NULL,'2025-04-29 23:28:26','2025-04-29 23:28:26'),(4,'Lesly Kilback','Sit consequatur dolorem natus ut qui vero nam. Minima delectus saepe minima sit ipsam numquam. Non dolorem exercitationem saepe dolorem sint beatae rerum. Quo quos enim aspernatur quis id.','in-dolorem-itaque-explicabo-labore-et',NULL,'2025-04-29 23:28:26','2025-04-29 23:28:26'),(5,'Dr. Juana Lebsack','Quis eveniet ipsam sit a nihil omnis. Accusantium voluptas excepturi quis animi fugit voluptas aut voluptas. Quis nobis et numquam.','nulla-dolor-harum-incidunt-necessitatibus-totam-praesentium-sapiente',NULL,'2025-04-29 23:28:26','2025-04-29 23:28:26'),(6,'Alyson Greenholt','Modi similique soluta qui doloribus molestias ducimus modi. Qui et amet minus impedit ad officiis. Aut ut quos dolores autem eum numquam ut. At maxime ut voluptatibus alias.','atque-ut-qui-vel-sunt-esse-quos-laboriosam',NULL,'2025-04-29 23:28:26','2025-04-29 23:28:26'),(7,'Micaela Bergstrom','Voluptatem vel fuga eos velit necessitatibus. Sequi iure velit repellendus aut atque possimus tenetur. Et consectetur vel est ipsum.','pariatur-omnis-necessitatibus-officiis-omnis',NULL,'2025-04-29 23:28:26','2025-04-29 23:28:26'),(8,'Dr. Mckayla Heathcote','Possimus temporibus et inventore vero qui fugiat. Aut non tempora quia eos. Aut qui fugiat commodi cumque error perspiciatis. Aut autem quis voluptatum temporibus iure provident.','optio-et-nihil-quas-aut-accusamus-perferendis',NULL,'2025-04-29 23:28:26','2025-04-29 23:28:26'),(9,'Kenny Ondricka','Molestias neque sunt dolorem perferendis in et. Et sint enim est incidunt at. Est vitae aliquam ipsam beatae qui voluptas. Facere aut voluptas quisquam animi.','dolorem-nihil-recusandae-voluptate-cupiditate-accusantium',NULL,'2025-04-29 23:28:26','2025-04-29 23:28:26'),(10,'Palma Hudson','Dolorem fugiat omnis eos libero dolore assumenda voluptatem. Optio eius ut id consectetur quod. Possimus dolorum blanditiis qui ab.','non-quam-porro-libero-aut-ut-earum-est',NULL,'2025-04-29 23:28:26','2025-04-29 23:28:26'),(11,'Karolann Krajcik MD','Illo a ut repudiandae repudiandae impedit voluptas. Ea molestias at natus ut voluptas. Nihil et quia voluptas quia iste aut. Laboriosam veritatis ducimus neque.','incidunt-id-nisi-occaecati-quis-veritatis',NULL,'2025-04-29 23:28:26','2025-04-29 23:28:26'),(12,'Haylie Feil','Ullam quis eum aliquid tempora error dicta alias. Dolor magni corrupti voluptate porro impedit vel odit at. Consequatur esse beatae quidem corporis illo nisi voluptatem.','sunt-facere-mollitia-id-facere-non',NULL,'2025-04-29 23:28:26','2025-04-29 23:28:26'),(13,'Dr. Hipolito Torp IV','Reprehenderit est quod rerum dolores quasi iste. Ad iste doloremque at quas inventore est et. Rerum asperiores error non nobis omnis.','unde-voluptas-dolorem-qui-minus-hic-non-consequatur-aliquid',NULL,'2025-04-29 23:28:26','2025-04-29 23:28:26'),(14,'Nayeli Dach','Ut autem voluptates est nihil voluptates officia. Consequatur sunt officiis dolores quia maiores quia non. Dolorum quos maxime dolorem fuga. Aut repudiandae ducimus voluptas alias eos.','eius-ab-dicta-aut',NULL,'2025-04-29 23:28:26','2025-04-29 23:28:26'),(15,'Alex Wilkinson','Commodi doloribus qui est ut sit ea vero. Eum cumque error commodi id tenetur repudiandae rerum. Maiores eos consequatur perspiciatis aspernatur ut magni enim molestiae.','expedita-enim-quae-nihil-omnis-nam-odio',NULL,'2025-04-29 23:28:26','2025-04-29 23:28:26'),(16,'Emory O\'Hara','Assumenda beatae cumque fugit. Velit sapiente repellendus optio eius rerum.','voluptas-atque-corporis-vel-et-debitis',NULL,'2025-04-29 23:28:26','2025-04-29 23:28:26'),(17,'Dr. Jude Shields PhD','Ab dolore est et voluptates eaque fugit aspernatur natus. Doloribus atque quis quam vel assumenda laudantium. Id quae et similique reiciendis dolore dolorem.','autem-qui-quo-a-accusamus',NULL,'2025-04-29 23:28:26','2025-04-29 23:28:26'),(18,'Liana Corkery','Est eos neque voluptas animi explicabo beatae. Dolorem magni quisquam sunt. Libero quaerat pariatur neque distinctio vitae voluptate et. Dolor totam nam ducimus quae.','et-velit-perferendis-et-quidem-nostrum-mollitia',NULL,'2025-04-29 23:28:26','2025-04-29 23:28:26'),(19,'Geoffrey Stiedemann','Veritatis culpa et quia illo non nulla. Ut nam corrupti autem dolor praesentium itaque. Dolor labore autem molestiae enim consequatur tempora.','consequatur-dolores-itaque-vero-sit-quia-tempora',NULL,'2025-04-29 23:28:26','2025-04-29 23:28:26'),(20,'Mrs. Lela Lowe IV','Rerum voluptatem et voluptas perspiciatis nihil. Placeat quis ut maiores provident.','dolore-atque-at-ipsa-repellendus-et',NULL,'2025-04-29 23:28:26','2025-04-29 23:28:26'),(21,'Jeramy Gerlach','Repellendus hic assumenda aut dignissimos tempore non. Sapiente praesentium ea voluptatum voluptatem dolores. Deleniti ex voluptate est sed quo. Aut cupiditate vel enim et non ex est ut.','voluptatibus-eum-omnis-minima-natus-autem-quo-placeat-sunt',NULL,'2025-04-29 23:28:26','2025-04-29 23:28:26'),(22,'Prof. Onie Lind','Ea assumenda rem ipsa sit. Aliquam iste consequatur consectetur aut cum velit et quia. Quo iure earum corporis ea quo laudantium tempore. Distinctio nesciunt veritatis est nihil aut neque harum quia.','possimus-laborum-rem-quasi-dolor-excepturi',NULL,'2025-04-29 23:28:26','2025-04-29 23:28:26'),(23,'Aiden Huels','Et ipsa facere aut qui nisi sint. Soluta eos facere numquam mollitia. Architecto sunt veritatis non voluptates rerum. Ipsum ut et optio architecto voluptatum.','et-dolore-quis-odio-aut-occaecati-voluptatem-sunt-voluptas',NULL,'2025-04-29 23:28:26','2025-04-29 23:28:26'),(24,'Eveline Deckow','Reiciendis quo omnis perspiciatis. Laboriosam cum voluptate non. Ut modi tenetur sint nulla quia. Earum incidunt qui asperiores facere adipisci rerum rem doloribus.','officia-ullam-exercitationem-reprehenderit-quia',NULL,'2025-04-29 23:28:26','2025-04-29 23:28:26'),(25,'Tyra Greenholt III','Nobis placeat ipsam aut molestias. Maxime error optio vel sunt. Quia omnis explicabo aliquam dolores nihil. Odio aspernatur eaque eos eveniet aut inventore tempora fugiat.','eos-in-eos-dolore-at-nam-perspiciatis-itaque-amet',NULL,'2025-04-29 23:28:26','2025-04-29 23:28:26'),(26,'Andres Gusikowski','Qui impedit est molestiae placeat. Error repellendus excepturi at delectus. Dicta et omnis et quis voluptas cumque reprehenderit iure.','dolorem-nobis-velit-aut-ut',NULL,'2025-04-29 23:28:26','2025-04-29 23:28:26'),(27,'Ian Keebler I','Enim voluptatem veritatis dignissimos voluptas nobis. Aut autem nisi quidem veritatis. Porro dolore et quod debitis dolorum cupiditate. Impedit sed illo voluptates et animi aut iste quod.','non-et-voluptas-vel-libero-fuga-officiis',NULL,'2025-04-29 23:28:26','2025-04-29 23:28:26'),(28,'Marilou Klocko','Autem at aut ut esse ut. Quis accusantium provident harum ratione suscipit. Neque dolor veritatis omnis qui nemo illo sunt corporis. Et accusamus fugiat facere impedit aut.','repudiandae-atque-ut-nemo-exercitationem-eum',NULL,'2025-04-29 23:28:26','2025-04-29 23:28:26'),(29,'Miss Daisy Mertz','Repellat totam error tempora suscipit provident perferendis accusantium. Et qui accusantium fugit corporis quo facere odit. Aut praesentium facilis at repellendus eos sed nulla.','aut-accusantium-sit-ad-iure-saepe-voluptas',NULL,'2025-04-29 23:28:26','2025-04-29 23:28:26'),(30,'Arden Wiza DVM','Aliquam et harum iusto consectetur. Consequatur maiores sit quisquam aspernatur nesciunt. Doloribus exercitationem dolores dolor beatae iste nihil. Tempore asperiores et placeat ut ullam ut.','non-magni-sapiente-qui-pariatur-rerum',NULL,'2025-04-29 23:28:26','2025-04-29 23:28:26'),(31,'Tre Murray','Possimus rerum itaque quidem architecto qui. Aliquam ipsam qui aliquid fugiat maxime voluptatem enim. Necessitatibus molestiae labore sed aut ex voluptas eum.','molestiae-quam-distinctio-nihil-ipsa',NULL,'2025-04-29 23:28:26','2025-04-29 23:28:26'),(32,'Katheryn Corkery','Doloremque deserunt est nam quas quasi laborum voluptatem officia. Amet rerum aut ipsa maiores. Eum necessitatibus voluptatibus vel hic voluptates est.','doloremque-aperiam-sint-cum-qui-debitis-tempore',NULL,'2025-04-29 23:28:26','2025-04-29 23:28:26'),(33,'Daren Bogisich','Voluptatibus eum illo aspernatur nam quam blanditiis dolorem. Aut eos voluptas at accusamus. Ut iste totam enim praesentium. Veniam vel quis distinctio perspiciatis praesentium nam odit.','sed-sapiente-illum-modi-itaque-quis',NULL,'2025-04-29 23:28:26','2025-04-29 23:28:26'),(34,'Dr. Itzel Tromp','Et quis voluptas voluptatem non et at quo. Ex odio dolorum autem fugit corporis esse mollitia. Pariatur animi sunt assumenda vel consequuntur occaecati id ut.','quam-nihil-natus-deserunt-eum-error',NULL,'2025-04-29 23:28:26','2025-04-29 23:28:26'),(35,'Terrance Cartwright','Nihil quo rerum aspernatur necessitatibus. Ducimus ea deleniti officiis. Vitae voluptatem ratione autem natus at. Quisquam adipisci pariatur explicabo est facilis modi.','cum-eum-animi-doloremque',NULL,'2025-04-29 23:28:26','2025-04-29 23:28:26'),(36,'Kristy Russel','Doloremque et consequatur incidunt quis. Pariatur ut natus facilis magni at iste. Dolorum possimus et assumenda id reprehenderit accusamus. Corporis commodi ea unde assumenda maiores esse.','ut-laboriosam-et-est-sit',NULL,'2025-04-29 23:28:26','2025-04-29 23:28:26'),(37,'Maximus Daugherty','At dolorem ut ratione nihil rerum odio quasi mollitia. Rerum nesciunt repellendus maxime dolores. Libero aut eum molestias blanditiis neque ea ut.','impedit-rerum-eveniet-cum-sed',NULL,'2025-04-29 23:28:26','2025-04-29 23:28:26'),(38,'Prof. Daryl Jakubowski','Est assumenda nostrum maiores dicta voluptas dolore possimus. Quas nulla laborum distinctio sed perferendis. Reprehenderit et perferendis qui ut eius.','accusantium-nam-cumque-laboriosam-ducimus-nihil-ducimus',NULL,'2025-04-29 23:28:26','2025-04-29 23:28:26'),(39,'Mrs. Francesca Nienow IV','Praesentium ut ullam qui asperiores earum ipsam commodi laudantium. Ut voluptates id a cumque. Ipsum culpa quis harum sequi aut accusamus quae aut.','eum-voluptas-et-corporis-dolore-dolorem-quaerat',NULL,'2025-04-29 23:28:26','2025-04-29 23:28:26'),(40,'Irwin Leuschke PhD','Voluptates adipisci est dolor aliquam ipsa adipisci quae. Id error aut mollitia. Rerum omnis ullam dolorum architecto officiis quis non.','id-et-unde-omnis-est',NULL,'2025-04-29 23:28:26','2025-04-29 23:28:26'),(41,'Ezra Little','Asperiores quas sunt nesciunt unde quisquam a ut. Quo ex perspiciatis error ducimus. Quos numquam natus dolores architecto. Impedit vel aut aliquam incidunt minima delectus consectetur.','quod-consectetur-porro-necessitatibus-sed-est-optio-ipsum-maiores',NULL,'2025-04-29 23:28:26','2025-04-29 23:28:26'),(42,'Myrtie Ferry','Provident quaerat et aspernatur inventore odit. Perspiciatis laborum molestiae sint eius cum quisquam est. Autem impedit ipsam dolore omnis eum. Ab aut autem sint est vero et assumenda eaque.','vitae-eaque-neque-ad-ea',NULL,'2025-04-29 23:28:26','2025-04-29 23:28:26'),(43,'Layla Walker','Dicta in ullam nostrum eveniet. Quisquam velit officiis neque. Occaecati vel ut tenetur alias doloremque. Et vel consequatur nesciunt temporibus delectus cum similique ex.','placeat-repellendus-vel-sed-ut',NULL,'2025-04-29 23:28:26','2025-04-29 23:28:26'),(44,'Prof. Frederique Torp','Qui recusandae ut et rem velit unde in. Amet quia iusto inventore sunt officia consectetur. Reprehenderit quisquam aut veniam quia voluptatibus natus dolorem.','ipsa-incidunt-molestiae-enim',NULL,'2025-04-29 23:28:26','2025-04-29 23:28:26'),(45,'Milford Rempel Jr.','Fugit voluptatem quia neque fuga rerum architecto molestias sit. Aut quos repudiandae sed aperiam. Et deleniti corrupti qui voluptatem. Itaque molestiae ipsum dolor et voluptas veniam sit.','recusandae-vel-rerum-corrupti-et',NULL,'2025-04-29 23:28:26','2025-04-29 23:28:26'),(46,'Deonte Wolf','Aut ut aut eveniet non dolorem. Provident possimus beatae temporibus quod soluta qui a. Qui amet qui consequatur.','in-in-voluptate-amet-quo-labore-ut-libero',NULL,'2025-04-29 23:28:26','2025-04-29 23:28:26'),(47,'Elouise Lynch','Eum repellat alias sit quo. In est ut amet qui consequatur. Quo consequatur omnis aut ex. Autem asperiores consequatur libero assumenda cum.','aut-a-voluptate-qui',NULL,'2025-04-29 23:28:26','2025-04-29 23:28:26'),(48,'Prof. Annie Lemke','Deserunt sequi a unde nobis. Tenetur veniam amet inventore illo deserunt cumque voluptas. Dicta aut fuga itaque in numquam aliquam. Sunt corporis dolorum temporibus iusto beatae consectetur.','non-nostrum-voluptate-alias',NULL,'2025-04-29 23:28:26','2025-04-29 23:28:26'),(49,'Bertha Hickle','Voluptatem id corrupti adipisci sint. Eum aut amet enim aut blanditiis molestiae. Amet nobis sint quam veritatis. Officiis ratione culpa tenetur nihil neque quae aut.','expedita-autem-aperiam-voluptas-quis-sit-sapiente-ea',NULL,'2025-04-29 23:28:26','2025-04-29 23:28:26'),(50,'Caleigh Kassulke','Aut qui laudantium est accusamus sequi voluptatum. Sed aliquam nemo nemo vero veritatis sit expedita. Sunt maxime harum pariatur laborum est. Omnis non numquam nulla iste.','beatae-nulla-sint-labore-ea-voluptas-ut-libero-atque',NULL,'2025-04-29 23:28:26','2025-04-29 23:28:26'),(51,'Mrs. Tamia Bradtke V','Sit eum porro officiis. Enim soluta cum est veritatis ullam. Vitae error sint et quia consectetur natus. Voluptatem qui et alias nam qui vero est aliquam.','sunt-qui-perspiciatis-et-nulla-quo-a-libero-voluptas',NULL,'2025-04-29 23:28:26','2025-04-29 23:28:26'),(52,'qwe',NULL,'qwe',NULL,'2025-04-29 23:28:33','2025-04-29 23:28:33');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','lucas.taborda94@gmail.com',NULL,'$2y$12$Zb3qpCi9T/kjUis6Pacv5OKqTVEO6i0eHZovXMZ2HokuGzfHzK25G',NULL,'2025-04-29 23:28:26','2025-04-29 23:28:26');
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

-- Dump completed on 2025-10-13 18:33:42
