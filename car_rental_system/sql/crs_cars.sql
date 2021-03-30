-- MySQL dump 10.13  Distrib 8.0.23, for Win64 (x86_64)
--
-- Host: localhost    Database: crs
-- ------------------------------------------------------
-- Server version	8.0.23

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cars`
--

DROP TABLE IF EXISTS `cars`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cars` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fuel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seat` int NOT NULL,
  `price` int NOT NULL,
  `available` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=143 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cars`
--

LOCK TABLES `cars` WRITE;
/*!40000 ALTER TABLE `cars` DISABLE KEYS */;
INSERT INTO `cars` VALUES (103,'Honda-Amaze','diesel','vadodara',5,3500,'yes','/storage/images/cars/Honda-Amaze-2.jpg','2021-03-28 01:34:40','2021-03-29 06:21:04'),(104,'Honda-Amaze','diesel','surat',5,2000,'yes','/storage/images/cars/Honda-Amaze-1.jpg','2021-03-28 01:36:48','2021-03-28 01:36:48'),(105,'Honda-City','diesel','surat',5,2200,'yes','/storage/images/cars/Honda-City-3.jpg','2021-03-28 01:37:51','2021-03-28 07:27:50'),(106,'Hyundai-Creta','diesel','vadodara',5,4000,'yes','/storage/images/cars/Hyundai-Creta-2.jpg','2021-03-28 06:00:39','2021-03-28 07:23:51'),(108,'Maruti-Suzuki-Baleno','diesel','ahmedabad',6,4200,'yes','/storage/images/cars/Maruti-Suzuki-Baleno-1.jpg','2021-03-28 07:29:19','2021-03-28 07:29:19'),(110,'Maruti-Suzuki-Swift','diesel','surat',4,3000,'yes','/storage/images/cars/Maruti-Suzuki-Swift-3.jpg','2021-03-28 07:30:20','2021-03-28 07:31:17'),(111,'Hyundai-Verna','diesel','surat',5,3500,'yes','/storage/images/cars/Hyundai-Verna-1.jpg','2021-03-28 07:30:58','2021-03-28 07:30:58'),(112,'Mahindra-Scorpio','diesel','vadodara',6,5000,'yes','/storage/images/cars/Mahindra-Scorpio-1.jpg','2021-03-28 07:32:43','2021-03-28 07:32:43'),(113,'Scoda-Rapid','diesel','jamanagar',5,4400,'yes','/storage/images/cars/Scoda-Rapid-2.jpg','2021-03-28 07:33:28','2021-03-28 07:33:28'),(114,'Maruti-Suzuki-Ertiga','petrol','vadodara',5,3200,'yes','/storage/images/cars/Maruti-Suzuki-Ertiga-5.jpg','2021-03-28 07:34:21','2021-03-28 07:34:21'),(115,'Toyota-Innova','petrol','ahmedabad',6,4500,'yes','/storage/images/cars/Toyota-Innova-2.jpg','2021-03-28 07:35:56','2021-03-28 07:35:56'),(116,'Tata-Nexon','petrol','surat',4,2300,'yes','/storage/images/cars/Tata-Nexon-1.jpg','2021-03-28 07:36:42','2021-03-28 07:36:42'),(117,'Hyundai-i10','diesel','gandhinagar',5,3300,'yes','/storage/images/cars/Hyundai-i10-1.jpg','2021-03-28 07:37:56','2021-03-28 07:37:56'),(118,'Hyundai-i20','petrol','vadodara',5,3300,'yes','/storage/images/cars/Hyundai-i20Active-1.jpg','2021-03-28 08:25:13','2021-03-29 00:18:32'),(119,'Maruti-Suzuki-Baleno','diesel','vadodara',4,3000,'yes','/storage/images/cars/Maruti-Suzuki-Baleno-4.jpg','2021-03-28 08:25:55','2021-03-28 08:25:55'),(120,'Maruti-Suzuki-Baleno','diesel','vadodara',5,3400,'yes','/storage/images/cars/Maruti-Suzuki-Baleno-5.jpg','2021-03-28 08:26:37','2021-03-28 08:26:37'),(121,'Toyota-Innova','petrol','vadodara',6,4000,'yes','/storage/images/cars/Toyota-Innova-1.jpg','2021-03-28 08:27:18','2021-03-28 08:27:18'),(122,'Maruti-Suzuki-Swift','diesel','vadodara',5,2200,'yes','/storage/images/cars/Maruti-Suzuki-Swift-1.jpg','2021-03-28 08:27:59','2021-03-28 08:27:59'),(126,'Hyundai-i20','diesel','surat',5,3600,'yes','/storage/images/cars/Hyundai-i20Active-3.jpg','2021-03-28 12:13:26','2021-03-28 12:15:19'),(127,'Mahindra-XUV300','petrol','surat',5,4600,'yes','/storage/images/cars/Mahindra-XUV300-2.jpg','2021-03-28 12:16:30','2021-03-29 00:26:53'),(139,'Maruti-Suzuki-Ertiga','diesel','gandhinagar',5,2400,'yes','/storage/images/cars/Maruti-Suzuki-Ertiga-4.jpg','2021-03-29 03:50:36','2021-03-29 03:50:36'),(140,'Honda-City','diesel','gandhinagar',5,3300,'yes','/storage/images/cars/Honda-City-2.jpg','2021-03-29 03:54:20','2021-03-29 03:54:20');
/*!40000 ALTER TABLE `cars` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-03-30 10:15:08
