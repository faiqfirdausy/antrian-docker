-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2019 at 06:23 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `berbayar_antrian`
--

-- --------------------------------------------------------

--
-- Table structure for table `antrian`
--

CREATE TABLE IF NOT EXISTS `antrian` (
  `ID` bigint(20) NOT NULL,
  `tanggal` date NOT NULL,
  `loket` varchar(7) DEFAULT NULL,
  `no_antrian` char(3) NOT NULL,
  `panggil` char(5) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0',
  `updated_user` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `antrian`
--

INSERT INTO `antrian` (`ID`, `tanggal`, `loket`, `no_antrian`, `panggil`, `status`, `updated_user`, `updated_date`) VALUES
(1, '2019-01-30', 'Loket 2', '001', '0 0 1', '1', 3, '2019-01-30 17:48:47'),
(2, '2019-01-30', 'Loket 1', '002', '0 0 2', '1', 2, '2019-01-30 17:49:11'),
(3, '2019-01-30', 'Loket 3', '003', '0 0 3', '1', 4, '2019-01-30 17:49:35'),
(4, '2019-01-30', 'Loket 2', '004', '0 0 4', '1', 3, '2019-01-30 17:50:08'),
(5, '2019-01-30', 'Loket 4', '005', '0 0 5', '1', 5, '2019-01-30 17:50:32'),
(6, '2019-01-30', 'Loket 4', '006', '0 0 6', '1', 5, '2019-01-30 17:50:51'),
(7, '2019-01-30', 'Loket 2', '007', '0 0 7', '1', 3, '2019-01-30 17:52:19'),
(8, '2019-01-30', NULL, '008', '0 0 8', '0', NULL, NULL),
(9, '2019-03-01', 'Loket 1', '001', '0 0 1', '1', 2, '2019-03-01 00:13:17'),
(10, '2019-03-01', 'Loket 3', '002', '0 0 2', '1', 4, '2019-03-01 00:13:35'),
(11, '2019-03-01', 'Loket 4', '003', '0 0 3', '1', 5, '2019-03-01 00:13:49'),
(12, '2019-03-01', 'Loket 2', '004', '0 0 4', '1', 3, '2019-03-01 00:14:05'),
(13, '2019-03-01', NULL, '005', '0 0 5', '0', NULL, NULL),
(14, '2019-03-01', NULL, '006', '0 0 6', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sys_config`
--

CREATE TABLE IF NOT EXISTS `sys_config` (
  `configID` tinyint(1) NOT NULL,
  `nama_instansi` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `updated_user` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sys_config`
--

INSERT INTO `sys_config` (`configID`, `nama_instansi`, `alamat`, `telepon`, `email`, `website`, `logo`, `updated_user`, `updated_date`) VALUES
(1, 'Bank Central Asia', 'Kompleks Ruko Bandung Town Square\r\nJl. Gajah Mada No. 187 Kavling A17-18 Bandung', '0331411381', 'kantorpusat@bca.co.id', 'www.bca.co.id', 'bca.png', 1, '2019-02-28 23:57:44');

-- --------------------------------------------------------

--
-- Table structure for table `sys_database`
--

CREATE TABLE IF NOT EXISTS `sys_database` (
  `dbID` int(11) NOT NULL,
  `file_name` varchar(50) NOT NULL,
  `file_size` varchar(10) NOT NULL,
  `created_user` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sys_database`
--

INSERT INTO `sys_database` (`dbID`, `file_name`, `file_size`, `created_user`, `created_date`) VALUES
(1, '20180618_122846_database.sql.gz', '2 KB', 1, '2018-06-18 05:28:46');

-- --------------------------------------------------------

--
-- Table structure for table `sys_users`
--

CREATE TABLE IF NOT EXISTS `sys_users` (
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
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `sys_users`
--

INSERT INTO `sys_users` (`userID`, `fullname`, `user_account_name`, `user_account_password`, `user_permissions`, `block_users`, `last_login`, `created_user`, `created_date`, `updated_user`, `updated_date`) VALUES
(1, 'Widi Jatmiko, S.Kom', 'admin', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad', 'Administrator', 'Tidak', '2019-03-01 00:10:19', 1, '2018-06-12 17:00:00', 1, '2019-03-01 00:10:19'),
(2, 'Nova Novellia', 'loket1', '8cec719e846091925976f10fe19891310fee57db', 'Loket 1', 'Tidak', '2019-03-01 00:14:21', 1, '2018-06-15 16:22:54', 2, '2019-03-01 00:14:21'),
(3, 'Kadina Putri', 'loket2', 'e0748e097924471fcad9f5056967f07c5f24c9bc', 'Loket 2', 'Tidak', '2019-03-01 00:14:02', 1, '2018-06-15 16:23:26', 3, '2019-03-01 00:14:02'),
(4, 'Dedi Saputra', 'loket3', 'f6568553ac13f53110e224dcfd8b20e351ac178e', 'Loket 3', 'Tidak', '2019-03-01 00:13:31', 1, '2018-06-18 05:19:52', 4, '2019-03-01 00:13:31'),
(5, 'Rinaldi', 'loket4', '1c23d771732306f3443713da1b724ac498995feb', 'Loket 4', 'Tidak', '2019-03-01 00:13:47', 1, '2018-06-18 05:20:32', 5, '2019-03-01 00:13:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antrian`
--
ALTER TABLE `antrian`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sys_config`
--
ALTER TABLE `sys_config`
 ADD PRIMARY KEY (`configID`);

--
-- Indexes for table `sys_database`
--
ALTER TABLE `sys_database`
 ADD PRIMARY KEY (`dbID`);

--
-- Indexes for table `sys_users`
--
ALTER TABLE `sys_users`
 ADD PRIMARY KEY (`userID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
