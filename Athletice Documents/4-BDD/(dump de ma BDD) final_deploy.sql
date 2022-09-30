CREATE DATABASE  IF NOT EXISTS heroku_bd203c2d96dd060 /*!40100 DEFAULT CHARACTER SET utf8*/;
USE heroku_bd203c2d96dd060;

-- MySQL dump 10.19  Distrib 10.3.34-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: heroku_bd203c2d96dd060


-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: ecf-athletice
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(210) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES (5,'xavier','Olaff','xavier@outlook.fr','Demande de Franchise Metz','Bonjour, j\'ai eu les papiers concernant l\'ouverture de ma franchise à metz, je souhaiterai obtenir mon compte Athletice, merci','2022-09-18 13:28:28'),(24,'Cyrille','Xavier','cyrilXa@outlook.fr','Demande de Franchise','Je souhaiterai avoir une franchise','2022-09-19 10:24:45'),(25,'Arnaud','Duchess','Arnaud@outlook.fr','Demande de Franchise','Bonjour, après inscription administrative je souhaiterai avoir mon compte sur le site internet d\'Athletice pour pouvoir voir mes 2 structures sur Rennes','2022-09-19 22:21:01'),(26,'Carole','Madani','Madani@gmail.com','Demande de création de franchise','J\'aimerai avoir mon compte sur Athletice après m\'être inscrit administrativement. Merci','2022-09-19 22:23:19'),(27,'Dorian','Lisse','Dorian@gmail.com','Demande d\'une structure','Bonjour, mon franchisé a ouvert une nouvelle structure que je dirige à Paris et j\'aimerai avoir mon compte, merci.','2022-09-19 22:26:47'),(28,'Pascal','Douvre','Pascal@yahoo.fr','Demande d\'ouverture d\'un compte de franchise','Bonjour, je viens d\'être admis pour faire parti de vos franchisés, je possède 2 salles de sport à Paris, je souhaiterai obtenir mon compte.','2022-09-19 22:29:53'),(29,'Yan','Tudu','yan@gmail.com','Demande de franchise','Bonjour, j\'aimerai avoir un compte franchis, je suis deja inscrit au niveau adminsitratif dans l\'entreprise','2022-09-21 21:17:37'),(30,'test','testr','test@test','test','test','2022-09-22 15:36:39');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_migration_versions`
--

LOCK TABLES `doctrine_migration_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_migration_versions` DISABLE KEYS */;
INSERT INTO `doctrine_migration_versions` VALUES ('DoctrineMigrations\\Version20220910153026','2022-09-10 17:30:36',68),('DoctrineMigrations\\Version20220913122341','2022-09-13 14:23:53',310),('DoctrineMigrations\\Version20220913122557','2022-09-13 14:26:00',86),('DoctrineMigrations\\Version20220913122650','2022-09-13 14:26:54',193),('DoctrineMigrations\\Version20220913201006','2022-09-13 22:10:10',94),('DoctrineMigrations\\Version20220914092235','2022-09-14 11:22:39',160),('DoctrineMigrations\\Version20220914123214','2022-09-14 14:32:29',69),('DoctrineMigrations\\Version20220914123313','2022-09-14 14:33:16',46),('DoctrineMigrations\\Version20220914131450','2022-09-14 15:15:01',200),('DoctrineMigrations\\Version20220915075637','2022-09-15 09:56:44',638),('DoctrineMigrations\\Version20220915080443','2022-09-15 10:04:46',53),('DoctrineMigrations\\Version20220915145414','2022-09-15 16:54:19',247),('DoctrineMigrations\\Version20220916090304','2022-09-16 11:03:19',212),('DoctrineMigrations\\Version20220916101522','2022-09-16 12:15:27',189),('DoctrineMigrations\\Version20220916205702','2022-09-16 22:57:07',520),('DoctrineMigrations\\Version20220918101422','2022-09-18 12:14:38',158),('DoctrineMigrations\\Version20220919074130','2022-09-19 09:41:36',484),('DoctrineMigrations\\Version20220919074311','2022-09-19 09:43:14',50),('DoctrineMigrations\\Version20220919082302','2022-09-19 10:23:06',37),('DoctrineMigrations\\Version20220919150745','2022-09-19 17:07:49',481);
/*!40000 ALTER TABLE `doctrine_migration_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `franchise_main`
--

DROP TABLE IF EXISTS `franchise_main`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `franchise_main` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `is_active` tinyint(1) DEFAULT NULL,
  `contrat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `franchise_main`
--

LOCK TABLES `franchise_main` WRITE;
/*!40000 ALTER TABLE `franchise_main` DISABLE KEYS */;
INSERT INTO `franchise_main` VALUES (5,0,'Lerrier 59,99€ / mois'),(6,1,'Gueta 99,99€ / mois'),(10,1,'Duchess 24,99€ / mois'),(11,1,'Madani 99,99€ / mois'),(12,1,'Douvre 59,99€ / mois');
/*!40000 ALTER TABLE `franchise_main` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messenger_messages`
--

DROP TABLE IF EXISTS `messenger_messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `headers` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  KEY `IDX_75EA56E016BA31DB` (`delivered_at`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messenger_messages`
--

LOCK TABLES `messenger_messages` WRITE;
/*!40000 ALTER TABLE `messenger_messages` DISABLE KEYS */;
INSERT INTO `messenger_messages` VALUES (1,'O:36:\\\"Symfony\\\\Component\\\\Messenger\\\\Envelope\\\":2:{s:44:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0stamps\\\";a:1:{s:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\";a:1:{i:0;O:46:\\\"Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\\":1:{s:55:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Stamp\\\\BusNameStamp\\0busName\\\";s:21:\\\"messenger.bus.default\\\";}}}s:45:\\\"\\0Symfony\\\\Component\\\\Messenger\\\\Envelope\\0message\\\";O:51:\\\"Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\\":2:{s:60:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0message\\\";O:28:\\\"Symfony\\\\Component\\\\Mime\\\\Email\\\":6:{i:0;s:28:\\\"Sending emails is fun again!\\\";i:1;s:5:\\\"utf-8\\\";i:2;s:56:\\\"<p>See Twig integration for better HTML integration!</p>\\\";i:3;s:5:\\\"utf-8\\\";i:4;a:0:{}i:5;a:2:{i:0;O:37:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\\":2:{s:46:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0headers\\\";a:3:{s:4:\\\"from\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:4:\\\"From\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:17:\\\"hello@example.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:2:\\\"to\\\";a:1:{i:0;O:47:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:2:\\\"To\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:58:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\MailboxListHeader\\0addresses\\\";a:1:{i:0;O:30:\\\"Symfony\\\\Component\\\\Mime\\\\Address\\\":2:{s:39:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0address\\\";s:15:\\\"you@example.com\\\";s:36:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Address\\0name\\\";s:0:\\\"\\\";}}}}s:7:\\\"subject\\\";a:1:{i:0;O:48:\\\"Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\\":5:{s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0name\\\";s:7:\\\"Subject\\\";s:56:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lineLength\\\";i:76;s:50:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0lang\\\";N;s:53:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\AbstractHeader\\0charset\\\";s:5:\\\"utf-8\\\";s:55:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\UnstructuredHeader\\0value\\\";s:24:\\\"Time for Symfony Mailer!\\\";}}}s:49:\\\"\\0Symfony\\\\Component\\\\Mime\\\\Header\\\\Headers\\0lineLength\\\";i:76;}i:1;N;}}s:61:\\\"\\0Symfony\\\\Component\\\\Mailer\\\\Messenger\\\\SendEmailMessage\\0envelope\\\";N;}}','[]','default','2022-09-18 13:21:13','2022-09-18 13:21:13',NULL);
/*!40000 ALTER TABLE `messenger_messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `option`
--

DROP TABLE IF EXISTS `option`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `option` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `is_active` tinyint(1) NOT NULL,
  `name_option` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `option`
--

LOCK TABLES `option` WRITE;
/*!40000 ALTER TABLE `option` DISABLE KEYS */;
INSERT INTO `option` VALUES (3,1,'Livres Nutritions'),(6,1,'Barres céréales'),(7,1,'Livres de musculation'),(9,1,'Matériel de Sport'),(10,1,'Boissons'),(11,0,'Serviettes Sport');
/*!40000 ALTER TABLE `option` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `structure_main`
--

DROP TABLE IF EXISTS `structure_main`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `structure_main` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `is_active` tinyint(1) DEFAULT NULL,
  `franchise_main_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_E32BF46371BA456` (`franchise_main_id`),
  CONSTRAINT `FK_E32BF46371BA456` FOREIGN KEY (`franchise_main_id`) REFERENCES `franchise_main` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `structure_main`
--

LOCK TABLES `structure_main` WRITE;
/*!40000 ALTER TABLE `structure_main` DISABLE KEYS */;
INSERT INTO `structure_main` VALUES (2,0,6),(6,1,5),(8,1,10),(9,1,10),(10,1,11),(11,1,11),(12,1,11),(13,1,12),(14,1,12);
/*!40000 ALTER TABLE `structure_main` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `structure_main_option`
--

DROP TABLE IF EXISTS `structure_main_option`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `structure_main_option` (
  `structure_main_id` int(11) NOT NULL,
  `option_id` int(11) NOT NULL,
  PRIMARY KEY (`structure_main_id`,`option_id`),
  KEY `IDX_54CC9A05B9DCD7BB` (`structure_main_id`),
  KEY `IDX_54CC9A05A7C41D6F` (`option_id`),
  CONSTRAINT `FK_54CC9A05A7C41D6F` FOREIGN KEY (`option_id`) REFERENCES `option` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_54CC9A05B9DCD7BB` FOREIGN KEY (`structure_main_id`) REFERENCES `structure_main` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `structure_main_option`
--

LOCK TABLES `structure_main_option` WRITE;
/*!40000 ALTER TABLE `structure_main_option` DISABLE KEYS */;
INSERT INTO `structure_main_option` VALUES (2,3),(2,9),(6,6),(6,9),(8,3),(9,7),(10,3),(10,9),(10,10),(11,3),(11,6),(11,9),(12,3),(12,7),(12,9),(12,11),(13,3),(13,10),(14,7),(14,9),(14,11);
/*!40000 ALTER TABLE `structure_main_option` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:json)',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `franchise_mains_id` int(11) DEFAULT NULL,
  `structure_mains_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`),
  UNIQUE KEY `UNIQ_8D93D649654E5240` (`franchise_mains_id`),
  UNIQUE KEY `UNIQ_8D93D649BB7B0BF6` (`structure_mains_id`),
  CONSTRAINT `FK_8D93D649654E5240` FOREIGN KEY (`franchise_mains_id`) REFERENCES `franchise_main` (`id`),
  CONSTRAINT `FK_8D93D649BB7B0BF6` FOREIGN KEY (`structure_mains_id`) REFERENCES `structure_main` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (44,'admin@athletice.com','[\"ROLE_ADMIN\"]','$2y$13$cK/C0Ov0b6vBpjDKEcVjHO39I9owoFd8RymXJaqeO8bdDlMXf899m','administrateur','Athletice','none','none',NULL,NULL),(54,'david@gmail.com','[\"ROLE_FRANCHISE\"]','$2y$13$VaOwu8UFPsi1uDvfTApT0O4D4IiaqEVP9sx0MZacIvFg9EQasQAK.','David','Lerrier','14 rue du Pommier','Nantes',5,NULL),(56,'Michmich@gmail.com','[\"ROLE_FRANCHISE\"]','$2y$13$qf7JlHrEYGpc9Ns/gJJm7epsWLNHHKoBkjY..o/5kRgmJT.Uw/HsW','Michel','Gueta','25 rue du Cour','Toulouse',6,NULL),(59,'sarah@outlook.fr','[\"ROLE_STRUCTURE\"]','$2y$13$posvebt/s50RoZxQiB.kmOcpmmgxgUytZWgaE.BJO9oH0B53SAmHa','Sarah','Mag','14 rue du Pommier','Nantes',NULL,6),(60,'Benoit@gmail.com','[\"ROLE_STRUCTURE\"]','$2y$13$r8mEZfuVjHdxb9HC1SeGUex2kclCzES8vbd6cJG76/JmelAdyJRf6','Benoit','Apolain','25 rue du Cour','Toulouse',NULL,2),(65,'Arnaud@outlook.fr','[\"ROLE_FRANCHISE\"]','$2y$13$FRxAL11zTFJIYa6wZ9HwseNFuezerzNyYo4d3lMergOiGOOECN2Qa','Arnaud','Duchess','14 rue du Boulot','Rennes',10,NULL),(66,'IchemXar@gmail.com','[\"ROLE_STRUCTURE\"]','$2y$13$geoZmFMC/d7oHzr5EVS7ve3gqjcTf6whG32PCbTuZ9mI896uiYpO2','Ichem','Xar','14 rue du Boulot','Rennes',NULL,8),(67,'mymy@yahoo.fr','[\"ROLE_STRUCTURE\"]','$2y$13$VTr/7IXgSfJoltb38H.cL.0/Q1KuRct51NLa4WraUd2erNV778cE6','Myriam','Poska','24 rue de Time','Rennes',NULL,9),(68,'Madani@gmail.com','[\"ROLE_FRANCHISE\"]','$2y$13$VGdnCEZQ6jbZjRZcA01ksO4FQJqdktXp2rjrnKeMtawQ.LKo0qcPu','Carole','Madani','58 rue du Rin','Paris',11,NULL),(69,'Andrew@outlook.fr','[\"ROLE_STRUCTURE\"]','$2y$13$BZhnaA2kQLJCzIjlWVs5be2ice6mZCPjUQMw4tbNSnh.9qZkki1We','André','Grausse','58 rue du Rin','Paris',NULL,10),(70,'mel@gmail.com','[\"ROLE_STRUCTURE\"]','$2y$13$IemWVtgptsAvuItM1t7MzOcZwq8uEHd43IdxSPpgzlUBIxj60mS.C','Melanie','Poulain','20 rue des Recettes','Paris',NULL,11),(71,'Dorian@gmail.com','[\"ROLE_STRUCTURE\"]','$2y$13$qI0iVeis5eW6m/KN4KSeGep8JxZkEl7NE35nzrqRzRs8EaeOFIA7q','Dorian','Lisse','32 rue des Lampes','Paris',NULL,12),(72,'Pascal@yahoo.fr','[\"ROLE_FRANCHISE\"]','$2y$13$KJxjRE6F/.pXe/ntMIdyCuEh5O6OO6Lr4YVWEC.dlbfnFIw3w4rAq','Pascal','Douvre','65 rue du Tournant','Paris',12,NULL),(73,'Bert@outlook.fr','[\"ROLE_STRUCTURE\"]','$2y$13$yqG/uJch04.sRY9uBMPQRuHPbvEWFsn4BZwE1oOb.u605BKICEhV2','Bertrand','Mache','65 rue du Tournant','Paris',NULL,13),(74,'DeBenoit@outlook.fr','[\"ROLE_STRUCTURE\"]','$2y$13$9N.l8yVTpMMezP1onoT0Fe2pgJ9HM6dAJZNOnjAH8j6ERI7rPti4W','Xavier','DeBenoit','20 rue des feuilles','Paris',NULL,14);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-09-27 21:13:34
