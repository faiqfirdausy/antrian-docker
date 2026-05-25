/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.1.37-MariaDB : Database - berbayar_antrian
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`berbayar_antrian` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `berbayar_antrian`;

/*Table structure for table `antrian` */

DROP TABLE IF EXISTS `antrian`;

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
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `antrian` */

insert  into `antrian`(`ID`,`tanggal`,`loket`,`no_antrian`,`panggil`,`status`,`updated_user`,`updated_date`,`layanan_antrian`) values 
(1,'2019-01-30','Loket 2','001','0 0 1','1',3,'2019-01-30 17:48:47',NULL),
(2,'2019-01-30','Loket 1','002','0 0 2','1',2,'2019-01-30 17:49:11',NULL),
(3,'2019-01-30','Loket 3','003','0 0 3','1',4,'2019-01-30 17:49:35',NULL),
(4,'2019-01-30','Loket 2','004','0 0 4','1',3,'2019-01-30 17:50:08',NULL),
(5,'2019-01-30','Loket 4','005','0 0 5','1',5,'2019-01-30 17:50:32',NULL),
(6,'2019-01-30','Loket 4','006','0 0 6','1',5,'2019-01-30 17:50:51',NULL),
(7,'2019-01-30','Loket 2','007','0 0 7','1',3,'2019-01-30 17:52:19',NULL),
(8,'2019-01-30',NULL,'008','0 0 8','0',NULL,NULL,NULL),
(9,'2019-03-01','Loket 1','001','0 0 1','1',2,'2019-03-01 00:13:17',NULL),
(10,'2019-03-01','Loket 3','002','0 0 2','1',4,'2019-03-01 00:13:35',NULL),
(11,'2019-03-01','Loket 4','003','0 0 3','1',5,'2019-03-01 00:13:49',NULL),
(12,'2019-03-01','Loket 2','004','0 0 4','1',3,'2019-03-01 00:14:05',NULL),
(13,'2019-03-01',NULL,'005','0 0 5','0',NULL,NULL,NULL),
(14,'2019-03-01',NULL,'006','0 0 6','0',NULL,NULL,NULL),
(15,'2019-05-04',NULL,'001','0 0 1','0',NULL,NULL,NULL),
(16,'2019-05-04',NULL,'002','0 0 2','0',NULL,NULL,NULL),
(17,'2019-05-04',NULL,'003','0 0 3','0',NULL,NULL,NULL),
(18,'2019-05-04',NULL,'004','0 0 4','0',NULL,NULL,NULL),
(19,'2019-05-04',NULL,'005','0 0 5','0',NULL,NULL,NULL),
(20,'2019-05-04',NULL,'006','0 0 6','0',NULL,NULL,NULL),
(21,'2019-05-04',NULL,'007','0 0 7','0',NULL,NULL,NULL),
(22,'2019-05-04',NULL,'008','0 0 8','0',NULL,NULL,NULL),
(23,'2019-05-05','Loket 1','001','0 0 1','1',2,'2019-05-05 11:43:47',NULL),
(24,'2019-05-05','Loket 1','002','0 0 2','1',2,'2019-05-05 11:44:20',NULL),
(25,'2019-05-05','Loket 1','003','0 0 3','1',2,'2019-05-05 11:44:41',NULL),
(26,'2019-05-05','Loket 2','004','0 0 4','1',3,'2019-05-05 11:45:34',NULL),
(27,'2019-05-05',NULL,'005','0 0 5','0',NULL,NULL,NULL),
(28,'2019-05-05',NULL,'006','0 0 6','0',NULL,NULL,NULL),
(29,'2019-05-05',NULL,'007','0 0 7','0',NULL,NULL,NULL),
(30,'2019-05-05',NULL,'008','0 0 8','0',NULL,NULL,NULL),
(31,'2019-05-16',NULL,'C001','C 0 0 1','0',NULL,NULL,'Pelayanan Kewarganegaraan'),
(32,'2019-05-16',NULL,'A001','A 0 0 1','0',NULL,NULL,'Pelayanan KI'),
(33,'2019-05-16',NULL,'B001','B 0 0 1','0',NULL,NULL,'Pelayanan AHU'),
(34,'2019-05-16',NULL,'C002','C 0 0 2','0',NULL,NULL,'Pelayanan Kewarganegaraan'),
(35,'2019-05-16',NULL,'A002','A 0 0 2','0',NULL,NULL,'Pelayanan KI'),
(36,'2019-05-16',NULL,'A003','A 0 0 3','0',NULL,NULL,'Pelayanan KI'),
(37,'2019-05-17',NULL,'C001','C 0 0 1','0',NULL,NULL,'Pelayanan Kewarganegaraan'),
(38,'2019-05-17',NULL,'A001','A 0 0 1','0',NULL,NULL,'Pelayanan KI'),
(39,'2019-05-17',NULL,'A002','A 0 0 2','0',NULL,NULL,'Pelayanan KI'),
(40,'2019-05-17',NULL,'A003','A 0 0 3','0',NULL,NULL,'Pelayanan KI'),
(41,'2019-05-19',NULL,'A001','A 0 0 1','0',NULL,NULL,'Pelayanan KI'),
(42,'2019-05-19',NULL,'B001','B 0 0 1','0',NULL,NULL,'Pelayanan AHU'),
(43,'2019-05-19',NULL,'A002','A 0 0 2','0',NULL,NULL,'Pelayanan KI'),
(44,'2019-05-19',NULL,'A003','A 0 0 3','0',NULL,NULL,'Pelayanan KI'),
(45,'2019-05-19',NULL,'A004','A 0 0 4','0',NULL,NULL,'Pelayanan KI'),
(46,'2019-05-19',NULL,'A005','A 0 0 5','0',NULL,NULL,'Pelayanan KI'),
(47,'2019-05-19',NULL,'A006','A 0 0 6','0',NULL,NULL,'Pelayanan KI'),
(48,'2019-05-19',NULL,'A007','A 0 0 7','0',NULL,NULL,'Pelayanan KI'),
(49,'2019-05-19',NULL,'A008','A 0 0 8','0',NULL,NULL,'Pelayanan KI'),
(50,'2019-05-19',NULL,'A009','A 0 0 9','0',NULL,NULL,'Pelayanan KI'),
(51,'2019-05-19',NULL,'A010','A 0 1 0','0',NULL,NULL,'Pelayanan KI'),
(53,'2019-05-21',NULL,'A002','A 0 0 2','0',NULL,NULL,'Pelayanan KI'),
(54,'2019-05-22',NULL,'A001','A 0 0 1','0',NULL,NULL,'Pelayanan KI'),
(55,'2019-05-22',NULL,'A002','A 0 0 2','0',NULL,NULL,'Pelayanan KI'),
(56,'2019-05-25',NULL,'A001','A 0 0 1','0',NULL,NULL,'Pelayanan KI'),
(57,'2019-05-25',NULL,'B001','B 0 0 1','0',NULL,NULL,'Pelayanan AHU'),
(58,'2019-05-25',NULL,'A002','A 0 0 2','0',NULL,NULL,'Pelayanan KI'),
(59,'2019-05-25',NULL,'B002','B 0 0 2','0',NULL,NULL,'Pelayanan AHU'),
(60,'2019-05-25',NULL,'B003','B 0 0 3','0',NULL,NULL,'Pelayanan AHU'),
(61,'2019-05-25',NULL,'A003','A 0 0 3','0',NULL,NULL,'Pelayanan KI'),
(62,'2019-05-25',NULL,'C001','C 0 0 1','0',NULL,NULL,'Pelayanan Kewarganegaraan'),
(63,'2019-05-25',NULL,'A004','A 0 0 4','0',NULL,NULL,'Pelayanan KI'),
(64,'2019-05-25',NULL,'B004','B 0 0 4','0',NULL,NULL,'Pelayanan AHU'),
(65,'2019-05-27','Loket 1','A001','A 0 0 1','1',2,'2019-05-27 15:56:45','Pelayanan KI'),
(66,'2019-05-27','Loket 3','B001','B 0 0 1','1',4,'2019-05-27 15:54:46','Pelayanan AHU'),
(67,'2019-05-27','Loket 2','C001','C 0 0 1','1',3,'2019-05-27 15:51:06','Pelayanan Kewarganegaraan'),
(68,'2019-05-27',NULL,'A002','A 0 0 2','0',NULL,NULL,'Pelayanan KI'),
(69,'2019-05-28','Loket 1','A001','A 0 0 1','1',2,'2019-05-28 09:46:28','Pelayanan KI'),
(70,'2019-05-28',NULL,'A002','A 0 0 2','0',NULL,NULL,'Pelayanan KI'),
(71,'2019-05-28','Loket 1','A003','A 0 0 3','1',2,'2019-05-28 12:05:32','Pelayanan KI'),
(72,'2019-05-28','Loket 1','A004','A 0 0 4','1',2,'2019-05-28 12:09:03','Pelayanan KI'),
(73,'2019-05-28',NULL,'B001','B 0 0 1','0',NULL,NULL,'Pelayanan AHU'),
(74,'2019-05-28',NULL,'A005','A 0 0 5','0',NULL,NULL,'Pelayanan KI'),
(75,'2019-05-28',NULL,'A006','A 0 0 6','0',NULL,NULL,'Pelayanan KI'),
(76,'2019-05-28',NULL,'A007','A 0 0 7','0',NULL,NULL,'Pelayanan KI'),
(77,'2019-05-28',NULL,'A008','A 0 0 8','0',NULL,NULL,'Pelayanan KI'),
(78,'2019-05-28',NULL,'A009','A 0 0 9','0',NULL,NULL,'Pelayanan KI'),
(79,'2019-05-28',NULL,'A010','A 0 1 0','0',NULL,NULL,'Pelayanan KI'),
(80,'2019-05-28',NULL,'A011','A 0 1 1','0',NULL,NULL,'Pelayanan KI'),
(81,'2019-05-28',NULL,'A012','A 0 1 2','0',NULL,NULL,'Pelayanan KI'),
(82,'2019-05-28',NULL,'A013','A 0 1 3','0',NULL,NULL,'Pelayanan KI'),
(83,'2019-05-28',NULL,'A014','A 0 1 4','0',NULL,NULL,'Pelayanan KI'),
(84,'2019-05-28',NULL,'A015','A 0 1 5','0',NULL,NULL,'Pelayanan KI'),
(85,'2019-05-28',NULL,'A016','A 0 1 6','0',NULL,NULL,'Pelayanan KI'),
(86,'2019-05-28',NULL,'A017','A 0 1 7','0',NULL,NULL,'Pelayanan KI'),
(87,'2019-05-28',NULL,'A018','A 0 1 8','0',NULL,NULL,'Pelayanan KI'),
(88,'2019-05-28',NULL,'A019','A 0 1 9','0',NULL,NULL,'Pelayanan KI'),
(89,'2019-05-28',NULL,'A020','A 0 2 0','0',NULL,NULL,'Pelayanan KI'),
(90,'2019-05-28',NULL,'A021','A 0 2 1','0',NULL,NULL,'Pelayanan KI'),
(91,'2019-05-28',NULL,'A022','A 0 2 2','0',NULL,NULL,'Pelayanan KI'),
(92,'2019-05-28',NULL,'A023','A 0 2 3','0',NULL,NULL,'Pelayanan KI'),
(93,'2019-05-28',NULL,'A024','A 0 2 4','0',NULL,NULL,'Pelayanan KI'),
(94,'2019-05-28',NULL,'A025','A 0 2 5','0',NULL,NULL,'Pelayanan KI'),
(95,'2019-05-28',NULL,'A026','A 0 2 6','0',NULL,NULL,'Pelayanan KI'),
(96,'2019-05-28',NULL,'A027','A 0 2 7','0',NULL,NULL,'Pelayanan KI'),
(97,'2019-05-28',NULL,'A028','A 0 2 8','0',NULL,NULL,'Pelayanan KI'),
(98,'2019-05-28',NULL,'A029','A 0 2 9','0',NULL,NULL,'Pelayanan KI'),
(99,'2019-05-28',NULL,'A030','A 0 3 0','0',NULL,NULL,'Pelayanan KI'),
(100,'2019-05-28',NULL,'A031','A 0 3 1','0',NULL,NULL,'Pelayanan KI'),
(101,'2019-05-28',NULL,'A032','A 0 3 2','0',NULL,NULL,'Pelayanan KI'),
(102,'2019-05-28',NULL,'A033','A 0 3 3','0',NULL,NULL,'Pelayanan KI'),
(103,'2019-05-28',NULL,'A034','A 0 3 4','0',NULL,NULL,'Pelayanan KI'),
(104,'2019-05-28',NULL,'A035','A 0 3 5','0',NULL,NULL,'Pelayanan KI'),
(105,'2019-05-28',NULL,'A036','A 0 3 6','0',NULL,NULL,'Pelayanan KI'),
(106,'2019-05-28',NULL,'A037','A 0 3 7','0',NULL,NULL,'Pelayanan KI'),
(107,'2019-05-28',NULL,'A038','A 0 3 8','0',NULL,NULL,'Pelayanan KI'),
(108,'2019-05-28',NULL,'A039','A 0 3 9','0',NULL,NULL,'Pelayanan KI'),
(109,'2019-05-28',NULL,'A040','A 0 4 0','0',NULL,NULL,'Pelayanan KI'),
(110,'2019-05-28',NULL,'A041','A 0 4 1','0',NULL,NULL,'Pelayanan KI'),
(111,'2019-05-28',NULL,'A042','A 0 4 2','0',NULL,NULL,'Pelayanan KI'),
(112,'2019-05-28',NULL,'A043','A 0 4 3','0',NULL,NULL,'Pelayanan KI'),
(113,'2019-05-28',NULL,'A044','A 0 4 4','0',NULL,NULL,'Pelayanan KI'),
(114,'2019-05-28',NULL,'A045','A 0 4 5','0',NULL,NULL,'Pelayanan KI'),
(115,'2019-05-28',NULL,'A046','A 0 4 6','0',NULL,NULL,'Pelayanan KI'),
(116,'2019-05-28',NULL,'A047','A 0 4 7','0',NULL,NULL,'Pelayanan KI'),
(117,'2019-05-28',NULL,'A048','A 0 4 8','0',NULL,NULL,'Pelayanan KI'),
(118,'2019-05-28',NULL,'A049','A 0 4 9','0',NULL,NULL,'Pelayanan KI'),
(119,'2019-05-28',NULL,'A050','A 0 5 0','0',NULL,NULL,'Pelayanan KI'),
(120,'2019-05-28',NULL,'A051','A 0 5 1','0',NULL,NULL,'Pelayanan KI'),
(121,'2019-05-28',NULL,'A052','A 0 5 2','0',NULL,NULL,'Pelayanan KI'),
(122,'2019-05-28',NULL,'A053','A 0 5 3','0',NULL,NULL,'Pelayanan KI'),
(123,'2019-05-28',NULL,'A054','A 0 5 4','0',NULL,NULL,'Pelayanan KI'),
(124,'2019-05-28',NULL,'A055','A 0 5 5','0',NULL,NULL,'Pelayanan KI'),
(125,'2019-05-28',NULL,'A056','A 0 5 6','0',NULL,NULL,'Pelayanan KI'),
(126,'2019-05-28',NULL,'A057','A 0 5 7','0',NULL,NULL,'Pelayanan KI'),
(127,'2019-05-28',NULL,'A058','A 0 5 8','0',NULL,NULL,'Pelayanan KI'),
(128,'2019-05-28',NULL,'A059','A 0 5 9','0',NULL,NULL,'Pelayanan KI'),
(129,'2019-05-28',NULL,'A060','A 0 6 0','0',NULL,NULL,'Pelayanan KI'),
(130,'2019-05-28',NULL,'A061','A 0 6 1','0',NULL,NULL,'Pelayanan KI'),
(131,'2019-05-28',NULL,'A062','A 0 6 2','0',NULL,NULL,'Pelayanan KI'),
(132,'2019-05-28',NULL,'A063','A 0 6 3','0',NULL,NULL,'Pelayanan KI'),
(133,'2019-05-28',NULL,'A064','A 0 6 4','0',NULL,NULL,'Pelayanan KI'),
(134,'2019-05-28',NULL,'A065','A 0 6 5','0',NULL,NULL,'Pelayanan KI'),
(135,'2019-05-28',NULL,'A066','A 0 6 6','0',NULL,NULL,'Pelayanan KI'),
(136,'2019-05-28',NULL,'A067','A 0 6 7','0',NULL,NULL,'Pelayanan KI'),
(137,'2019-05-28',NULL,'A068','A 0 6 8','0',NULL,NULL,'Pelayanan KI'),
(138,'2019-05-28',NULL,'A069','A 0 6 9','0',NULL,NULL,'Pelayanan KI'),
(139,'2019-05-28',NULL,'B002','B 0 0 2','0',NULL,NULL,'Pelayanan AHU'),
(140,'2019-05-28',NULL,'B003','B 0 0 3','0',NULL,NULL,'Pelayanan AHU'),
(141,'2019-05-28',NULL,'C001','C 0 0 1','0',NULL,NULL,'Pelayanan Kewarganegaraan'),
(142,'2019-05-28',NULL,'B004','B 0 0 4','0',NULL,NULL,'Pelayanan AHU'),
(143,'2019-05-29',NULL,'A001','A 0 0 1','0',NULL,NULL,'Pelayanan KI'),
(144,'2019-05-29',NULL,'A002','A 0 0 2','0',NULL,NULL,'Pelayanan KI'),
(145,'2019-05-29',NULL,'A003','A 0 0 3','0',NULL,NULL,'Pelayanan KI'),
(146,'2019-05-29',NULL,'A004','A 0 0 4','0',NULL,NULL,'Pelayanan KI'),
(147,'2019-05-29',NULL,'A005','A 0 0 5','0',NULL,NULL,'Pelayanan KI'),
(148,'2019-05-29',NULL,'A006','A 0 0 6','0',NULL,NULL,'Pelayanan KI'),
(149,'2019-05-29',NULL,'A007','A 0 0 7','0',NULL,NULL,'Pelayanan KI'),
(150,'2019-05-29',NULL,'A008','A 0 0 8','0',NULL,NULL,'Pelayanan KI'),
(151,'2019-05-29',NULL,'A009','A 0 0 9','0',NULL,NULL,'Pelayanan KI'),
(152,'2019-05-29',NULL,'A010','A 0 1 0','0',NULL,NULL,'Pelayanan KI'),
(153,'2019-05-29',NULL,'A011','A 0 1 1','0',NULL,NULL,'Pelayanan KI'),
(154,'2019-05-29',NULL,'A012','A 0 1 2','0',NULL,NULL,'Pelayanan KI'),
(155,'2019-05-29',NULL,'A013','A 0 1 3','0',NULL,NULL,'Pelayanan KI'),
(156,'2019-05-29',NULL,'A014','A 0 1 4','0',NULL,NULL,'Pelayanan KI'),
(157,'2019-05-29',NULL,'A015','A 0 1 5','0',NULL,NULL,'Pelayanan KI'),
(158,'2019-05-29',NULL,'A016','A 0 1 6','0',NULL,NULL,'Pelayanan KI'),
(159,'2019-05-29',NULL,'A017','A 0 1 7','0',NULL,NULL,'Pelayanan KI'),
(160,'2019-05-29',NULL,'A018','A 0 1 8','0',NULL,NULL,'Pelayanan KI'),
(161,'2019-05-29',NULL,'A019','A 0 1 9','0',NULL,NULL,'Pelayanan KI'),
(162,'2019-05-29',NULL,'A020','A 0 2 0','0',NULL,NULL,'Pelayanan KI'),
(163,'2019-05-29',NULL,'A021','A 0 2 1','0',NULL,NULL,'Pelayanan KI'),
(164,'2019-05-29',NULL,'A022','A 0 2 2','0',NULL,NULL,'Pelayanan KI'),
(165,'2019-05-29',NULL,'A023','A 0 2 3','0',NULL,NULL,'Pelayanan KI'),
(166,'2019-05-31',NULL,'B001','B 0 0 1','0',NULL,NULL,'Pelayanan AHU'),
(167,'2019-05-31',NULL,'A001','A 0 0 1','0',NULL,NULL,'Pelayanan KI'),
(168,'2019-05-31',NULL,'C001','C 0 0 1','0',NULL,NULL,'Pelayanan Kewarganegaraan'),
(169,'2019-05-31',NULL,'C002','C 0 0 2','0',NULL,NULL,'Pelayanan Kewarganegaraan'),
(170,'2019-06-08',NULL,'A001','A 0 0 1','0',NULL,NULL,'Pelayanan KI'),
(171,'2019-06-10',NULL,'A001','A 0 0 1','0',NULL,NULL,'Pelayanan KI'),
(172,'2019-06-10',NULL,'B001','B 0 0 1','0',NULL,NULL,'Pelayanan AHU'),
(173,'2019-06-10',NULL,'B002','B 0 0 2','0',NULL,NULL,'Pelayanan AHU');

/*Table structure for table `survey` */

DROP TABLE IF EXISTS `survey`;

CREATE TABLE `survey` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nilai` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

/*Data for the table `survey` */

insert  into `survey`(`id`,`nilai`,`tanggal`) values 
(1,5,NULL),
(2,4,NULL),
(3,5,NULL),
(4,5,'2019-06-11'),
(5,5,'2019-06-11'),
(6,5,'2019-06-11'),
(7,5,'2019-06-11'),
(8,5,'2019-06-11'),
(9,5,'2019-06-11'),
(10,5,'2019-06-11'),
(11,5,'2019-06-11'),
(12,5,'2019-06-11'),
(13,5,'2019-06-11'),
(14,5,'2019-06-11'),
(15,5,'2019-06-11'),
(16,5,'2019-06-11'),
(17,5,'2019-06-11'),
(18,3,'2019-06-11'),
(19,3,'2019-06-11'),
(20,5,'2019-06-11'),
(21,1,'2019-06-11'),
(22,1,'2019-06-11');

/*Table structure for table `sys_config` */

DROP TABLE IF EXISTS `sys_config`;

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

/*Data for the table `sys_config` */

insert  into `sys_config`(`configID`,`nama_instansi`,`alamat`,`telepon`,`email`,`website`,`logo`,`updated_user`,`updated_date`) values 
(1,'Kemenkumham Jatim','Jalan Kayoon no 50 - 52','0331411381','humaskanwiljatim@gmail.com','www.jatim.kemenkumham.go.id','bca.png',1,'2019-02-28 23:57:44');

/*Table structure for table `sys_database` */

DROP TABLE IF EXISTS `sys_database`;

CREATE TABLE `sys_database` (
  `dbID` int(11) NOT NULL,
  `file_name` varchar(50) NOT NULL,
  `file_size` varchar(10) NOT NULL,
  `created_user` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`dbID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sys_database` */

insert  into `sys_database`(`dbID`,`file_name`,`file_size`,`created_user`,`created_date`) values 
(1,'20180618_122846_database.sql.gz','2 KB',1,'2018-06-18 12:28:46');

/*Table structure for table `sys_users` */

DROP TABLE IF EXISTS `sys_users`;

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

/*Data for the table `sys_users` */

insert  into `sys_users`(`userID`,`fullname`,`user_account_name`,`user_account_password`,`user_permissions`,`block_users`,`last_login`,`created_user`,`created_date`,`updated_user`,`updated_date`) values 
(1,'Faiq Firdausy','admin','90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad','Administrator','Tidak','2019-05-17 08:03:44',1,'2018-06-13 00:00:00',1,'2019-05-17 08:04:44'),
(2,'Nova Novellia','loket1','8cec719e846091925976f10fe19891310fee57db','Loket 1','Tidak','2019-05-28 13:23:14',1,'2018-06-15 23:22:54',2,'2019-05-28 13:23:14'),
(3,'Kadina Putri','loket2','e0748e097924471fcad9f5056967f07c5f24c9bc','Loket 2','Tidak','2019-05-27 15:50:58',1,'2018-06-15 23:23:26',3,'2019-05-27 15:50:58'),
(4,'Dedi Saputra','loket3','f6568553ac13f53110e224dcfd8b20e351ac178e','Loket 3','Tidak','2019-05-27 15:54:16',1,'2018-06-18 12:19:52',4,'2019-05-27 15:54:16'),
(5,'Rinaldi','loket4','1c23d771732306f3443713da1b724ac498995feb','Loket 4','Tidak','2019-05-04 12:04:25',1,'2018-06-18 12:20:32',5,'2019-05-04 12:04:25');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
