-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2019 at 02:50 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_baru`
--
CREATE DATABASE IF NOT EXISTS `project_baru` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `project_baru`;

-- --------------------------------------------------------

--
-- Table structure for table `person_detail`
--

CREATE TABLE `person_detail` (
  `id_person` int(11) NOT NULL,
  `ket_person` varchar(191) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `person_detail`
--

INSERT INTO `person_detail` (`id_person`, `ket_person`, `tanggal`) VALUES
(1, 'AS', '2019-12-21'),
(2, 'SK', '2019-12-21'),
(3, 'RN', '2019-12-21'),
(4, 'AR', '2019-12-21');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `id_position` int(11) NOT NULL,
  `time` varchar(191) NOT NULL,
  `twr` varchar(191) NOT NULL,
  `cdu` varchar(191) NOT NULL,
  `gnd` varchar(191) NOT NULL,
  `spv` varchar(191) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`id_position`, `time`, `twr`, `cdu`, `gnd`, `spv`, `tanggal`) VALUES
(1, '00.00', 'AS', 'SK', 'RN', 'AR', '2019-12-21'),
(2, '01.30', 'RA', 'TR', 'TR', 'TY', '2019-12-21'),
(3, '00.00', 'AR', 'SG', 'ST', 'SK', '2019-12-14'),
(4, '03.00', 'AR', 'SW', 'ST', 'SA', '2019-12-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `person_detail`
--
ALTER TABLE `person_detail`
  ADD PRIMARY KEY (`id_person`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id_position`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `person_detail`
--
ALTER TABLE `person_detail`
  MODIFY `id_person` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `id_position` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
