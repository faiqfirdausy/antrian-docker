-- MySQL dump 10.13  Distrib 5.5.62, for Win64 (AMD64)
--
-- Host: localhost    Database: berbayar_antrian
-- ------------------------------------------------------
-- Server version	5.7.24

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `antrian`
--

DROP TABLE IF EXISTS `antrian`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `antrian` (
  `ID` bigint(20) NOT NULL,
  `tanggal` date NOT NULL,
  `loket` varchar(7) DEFAULT NULL,
  `no_antrian` char(10) NOT NULL,
  `panggil` char(10) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0',
  `updated_user` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `layanan_antrian` varchar(30) DEFAULT NULL,
  `layanan` varchar(50) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` text,
  `no_hp` varchar(12) DEFAULT NULL,
  `id_layanan` tinytext,
  `jenis_pemohon` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `antrian`
--

LOCK TABLES `antrian` WRITE;
/*!40000 ALTER TABLE `antrian` DISABLE KEYS */;
INSERT INTO `antrian` VALUES (1,'2021-02-27',NULL,'A001','A 0 0 1','0',NULL,NULL,'Pelayanan KI','KI','dian','surabaya','08385547907','1::2::3','PT',NULL);
INSERT INTO `antrian` VALUES (2,'2021-02-27',NULL,'B001','B 0 0 1','0',NULL,NULL,'Pelayanan AHU','AHU','a','a','22','5::6','PT',NULL);
INSERT INTO `antrian` VALUES (4,'2021-02-27',NULL,'D001','D 0 0 1','0',NULL,NULL,'Pelayanan Pemasyarakatan','MASYARAKAT','dd','dd','22','14','PT',NULL);
INSERT INTO `antrian` VALUES (5,'2021-02-27',NULL,'C001','C 0 0 1','0',NULL,NULL,'Pelayanan Keimigrasian','IMIGRASI','c','c','2123','10','PT',NULL);
INSERT INTO `antrian` VALUES (6,'2021-02-27',NULL,'A002','A 0 0 2','0',NULL,NULL,'Pelayanan KI','KI','z','z','2','1','PT',NULL);
INSERT INTO `antrian` VALUES (7,'2021-02-28',NULL,'A001','A 0 0 1','0',NULL,NULL,'Pelayanan KI','KI','dian','surabaya','8777777','1::2::3::4','PT',NULL);
INSERT INTO `antrian` VALUES (8,'2021-02-28','Loket 1','A002','A 0 0 2','1',2,'2021-02-28 11:00:29','Pelayanan KI','KI','arif','surabaya','21313','2::3','PT',NULL);
INSERT INTO `antrian` VALUES (9,'2021-03-03','Loket 1','A001','A 0 0 1','1',2,'2021-03-03 18:53:50','Pelayanan KI','KI','a','a','123','1::2','PT',NULL);
INSERT INTO `antrian` VALUES (10,'2021-03-04',NULL,'A001','A 0 0 1','0',NULL,NULL,'Pelayanan KI','KI','ww','ww','33','1::2','PT',NULL);
INSERT INTO `antrian` VALUES (11,'2021-03-03',NULL,'A002','A 0 0 2','0',NULL,NULL,'Pelayanan KI','KI','ee','e','22','2::3','PT','dianarifr@gmail.com');
INSERT INTO `antrian` VALUES (12,'2021-03-04',NULL,'A002','A 0 0 2','0',NULL,NULL,'Pelayanan KI','KI','dd','asd','22','1::2','PT','dianarifr@gmail.com');
INSERT INTO `antrian` VALUES (13,'2021-03-03',NULL,'A003','A 0 0 3','0',NULL,NULL,'Pelayanan KI','KI','a','aa','2','4','PT','dianarifr@gmail.com');
INSERT INTO `antrian` VALUES (14,'2021-03-03',NULL,'A004','A 0 0 4','0',NULL,NULL,'Pelayanan KI','KI','df','f','33','1','PT','dianarifr@gmail.com');
INSERT INTO `antrian` VALUES (15,'2021-03-03',NULL,'A005','A 0 0 5','0',NULL,NULL,'Pelayanan KI','KI','ads','asd','2','3','PT','dianarifr@gmail.com');
INSERT INTO `antrian` VALUES (16,'2021-03-03',NULL,'A006','A 0 0 6','0',NULL,NULL,'Pelayanan KI','KI','asd','asdsa','1231','3::4','PT','dianarifr@gmail.com');
INSERT INTO `antrian` VALUES (17,'2021-03-04',NULL,'A003','A 0 0 3','0',NULL,NULL,'Pelayanan KI','KI','asd','asd','2','2::3','PT','dianarifr@gmail.com');
INSERT INTO `antrian` VALUES (18,'2021-03-04',NULL,'A004','A 0 0 4','0',NULL,NULL,'Pelayanan KI','KI','asd','asd','222','2','PT','dianarifr@gmail.com');
INSERT INTO `antrian` VALUES (19,'2021-03-03',NULL,'A007','A 0 0 7','0',NULL,NULL,'Pelayanan KI','KI','asdsa','asda','222','3','PT','dianarifr@gmail.com');
INSERT INTO `antrian` VALUES (20,'2021-03-25',NULL,'A001','A 0 0 1','0',NULL,NULL,'Pelayanan KI','KI','asd','asd','2222','1::2','PT','dianarifr@gmail.com');
INSERT INTO `antrian` VALUES (21,'2021-03-10',NULL,'A001','A 0 0 1','0',NULL,NULL,'Pelayanan KI','KI','asdad','adsa','222','2::3::4','PT','dianarifr@gmail.com');
INSERT INTO `antrian` VALUES (22,'2021-03-10',NULL,'C001','C 0 0 1','0',NULL,NULL,'Pelayanan Keimigrasian','IMIGRASI','www','www','222','11::12','PT','dianarifr@gmail.com');
INSERT INTO `antrian` VALUES (23,'2021-03-10',NULL,'D001','D 0 0 1','0',NULL,NULL,'Pelayanan Pemasyarakatan','MASYARAKAT','asdasd','asdasd','22222','14','PT','dianarifr@gmail.com');
/*!40000 ALTER TABLE `antrian` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `layanan`
--

DROP TABLE IF EXISTS `layanan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `layanan` (
  `id_layanan` int(11) NOT NULL AUTO_INCREMENT,
  `layanan` varchar(50) DEFAULT NULL,
  `jenis_layanan` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id_layanan`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `layanan`
--

LOCK TABLES `layanan` WRITE;
/*!40000 ALTER TABLE `layanan` DISABLE KEYS */;
INSERT INTO `layanan` VALUES (1,'KI','Merek');
INSERT INTO `layanan` VALUES (2,'KI','Hak Cipta');
INSERT INTO `layanan` VALUES (3,'KI','Hak Paten');
INSERT INTO `layanan` VALUES (4,'KI','Desain Industri');
INSERT INTO `layanan` VALUES (5,'AHU','Kewarganegaraan');
INSERT INTO `layanan` VALUES (6,'AHU','Kenotariatan');
INSERT INTO `layanan` VALUES (7,'AHU','Badan Hukum');
INSERT INTO `layanan` VALUES (8,'AHU','FIDUSIA');
INSERT INTO `layanan` VALUES (9,'AHU','Penyidik Pegawai Negeri Sipil');
INSERT INTO `layanan` VALUES (10,'IMIGRASI','Perpanjangan ITAS / ITAP');
INSERT INTO `layanan` VALUES (11,'IMIGRASI','Alih status ITAS / ITAP');
INSERT INTO `layanan` VALUES (12,'IMIGRASI','Alih jabatan');
INSERT INTO `layanan` VALUES (13,'IMIGRASI','SKIM');
INSERT INTO `layanan` VALUES (14,'MASYARAKAT','Informasi Hak dan Kewajiban Warga Binaan');
INSERT INTO `layanan` VALUES (15,'MASYARAKAT','Peminjaman Napi');
/*!40000 ALTER TABLE `layanan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `survey`
--

DROP TABLE IF EXISTS `survey`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `survey` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nilai` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `survey`
--

LOCK TABLES `survey` WRITE;
/*!40000 ALTER TABLE `survey` DISABLE KEYS */;
INSERT INTO `survey` VALUES (1,5,NULL);
INSERT INTO `survey` VALUES (2,4,NULL);
INSERT INTO `survey` VALUES (3,5,NULL);
INSERT INTO `survey` VALUES (4,5,'2019-06-11');
INSERT INTO `survey` VALUES (5,5,'2019-06-11');
INSERT INTO `survey` VALUES (6,5,'2019-06-11');
INSERT INTO `survey` VALUES (7,5,'2019-06-11');
INSERT INTO `survey` VALUES (8,5,'2019-06-11');
INSERT INTO `survey` VALUES (9,5,'2019-06-11');
INSERT INTO `survey` VALUES (10,5,'2019-06-11');
INSERT INTO `survey` VALUES (11,5,'2019-06-11');
INSERT INTO `survey` VALUES (12,5,'2019-06-11');
INSERT INTO `survey` VALUES (13,5,'2019-06-11');
INSERT INTO `survey` VALUES (14,5,'2019-06-11');
INSERT INTO `survey` VALUES (15,5,'2019-06-11');
INSERT INTO `survey` VALUES (16,5,'2019-06-11');
INSERT INTO `survey` VALUES (17,5,'2019-06-11');
INSERT INTO `survey` VALUES (18,3,'2019-06-11');
INSERT INTO `survey` VALUES (19,3,'2019-06-11');
INSERT INTO `survey` VALUES (20,5,'2019-06-11');
INSERT INTO `survey` VALUES (21,1,'2019-06-11');
INSERT INTO `survey` VALUES (22,1,'2019-06-11');
INSERT INTO `survey` VALUES (23,5,'2021-02-17');
INSERT INTO `survey` VALUES (24,5,'2021-02-17');
/*!40000 ALTER TABLE `survey` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_config`
--

DROP TABLE IF EXISTS `sys_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_config` (
  `configID` tinyint(1) NOT NULL,
  `nama_instansi` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `updated_user` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  PRIMARY KEY (`configID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_config`
--

LOCK TABLES `sys_config` WRITE;
/*!40000 ALTER TABLE `sys_config` DISABLE KEYS */;
INSERT INTO `sys_config` VALUES (1,'Kemenkumham Jatim','Jalan Kayoon no 50 - 52','0331411381','humaskanwiljatim@gmail.com','www.jatim.kemenkumham.go.id','bca.png',1,'2019-02-28 23:57:44');
/*!40000 ALTER TABLE `sys_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_database`
--

DROP TABLE IF EXISTS `sys_database`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_database` (
  `dbID` int(11) NOT NULL,
  `file_name` varchar(50) NOT NULL,
  `file_size` varchar(10) NOT NULL,
  `created_user` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`dbID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_database`
--

LOCK TABLES `sys_database` WRITE;
/*!40000 ALTER TABLE `sys_database` DISABLE KEYS */;
INSERT INTO `sys_database` VALUES (1,'20180618_122846_database.sql.gz','2 KB',1,'2018-06-18 05:28:46');
INSERT INTO `sys_database` VALUES (2,'20210213_101752_database.sql.gz','3 KB',1,'2021-02-13 03:17:52');
/*!40000 ALTER TABLE `sys_database` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sys_users`
--

DROP TABLE IF EXISTS `sys_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_users` (
  `userID` int(11) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `user_account_name` varchar(30) NOT NULL,
  `user_account_password` varchar(45) NOT NULL,
  `user_permissions` enum('Administrator','Loket 1','Loket 2','Loket 3','Loket 4') NOT NULL,
  `block_users` enum('Ya','Tidak') NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `created_user` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_user` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_users`
--

LOCK TABLES `sys_users` WRITE;
/*!40000 ALTER TABLE `sys_users` DISABLE KEYS */;
INSERT INTO `sys_users` VALUES (1,'Faiq Firdausy','admin','10470c3b4b1fed12c3baac014be15fac67c6e815','Administrator','Tidak','2021-03-03 19:40:50',1,'2018-06-12 17:00:00',1,'2021-03-03 19:40:50');
INSERT INTO `sys_users` VALUES (2,'Nova Novellia','loket1','10470c3b4b1fed12c3baac014be15fac67c6e815','Loket 1','Tidak','2021-03-03 18:48:46',1,'2018-06-15 16:22:54',2,'2021-03-03 18:48:46');
INSERT INTO `sys_users` VALUES (3,'Kadina Putri','loket2','10470c3b4b1fed12c3baac014be15fac67c6e815','Loket 2','Tidak','2019-05-27 15:50:58',1,'2018-06-15 16:23:26',3,'2019-05-27 15:50:58');
INSERT INTO `sys_users` VALUES (4,'Dedi Saputra','loket3','10470c3b4b1fed12c3baac014be15fac67c6e815','Loket 3','Tidak','2019-05-27 15:54:16',1,'2018-06-18 05:19:52',4,'2019-05-27 15:54:16');
INSERT INTO `sys_users` VALUES (5,'Rinaldi','loket4','10470c3b4b1fed12c3baac014be15fac67c6e815','Loket 4','Tidak','2019-05-04 12:04:25',1,'2018-06-18 05:20:32',5,'2019-05-04 12:04:25');
/*!40000 ALTER TABLE `sys_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'berbayar_antrian'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-03-10 22:14:10
