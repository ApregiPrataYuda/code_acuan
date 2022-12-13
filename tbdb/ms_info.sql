-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2022 at 10:28 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u5985248_nobby`
--

-- --------------------------------------------------------

--
-- Table structure for table `ms_info`
--

CREATE TABLE `ms_info` (
  `info_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `category` enum('Laptop','PC RAKITAN','PC ALL IN') DEFAULT NULL,
  `merk` varchar(100) DEFAULT NULL,
  `ip` varchar(100) DEFAULT NULL,
  `tgl_beli` date DEFAULT NULL,
  `prosesor_detail` varchar(100) DEFAULT NULL,
  `umur_device` varchar(50) DEFAULT NULL,
  `serial_number` varchar(100) DEFAULT NULL,
  `ram_slot` varchar(50) DEFAULT NULL,
  `ram` varchar(50) DEFAULT NULL,
  `kode_assets` varchar(50) DEFAULT NULL,
  `cabang_id` int(11) DEFAULT NULL,
  `kry_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ms_info`
--

INSERT INTO `ms_info` (`info_id`, `name`, `category`, `merk`, `ip`, `tgl_beli`, `prosesor_detail`, `umur_device`, `serial_number`, `ram_slot`, `ram`, `kode_assets`, `cabang_id`, `kry_id`) VALUES
(19, 'asus20', 'Laptop', 'asus', '123.234.1.1', '2022-10-27', 'sdsds', '3', '12121', '4', '3', '123', 9, 16),
(20, 'lenovo', 'Laptop', 'LENOVO', '123.346.1.3', '2022-10-27', '1212', '3', '4', '2', '1', '12131', 9, 16),
(21, 'SAS', 'PC RAKITAN', 'SASAS', '111.000.0.0', '2022-10-27', 'ewewe', '1', '222', '4', '2', '121313', 9, 16);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ms_info`
--
ALTER TABLE `ms_info`
  ADD PRIMARY KEY (`info_id`),
  ADD KEY `cabang_id` (`cabang_id`),
  ADD KEY `kry_id` (`kry_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ms_info`
--
ALTER TABLE `ms_info`
  MODIFY `info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ms_info`
--
ALTER TABLE `ms_info`
  ADD CONSTRAINT `ms_info_ibfk_1` FOREIGN KEY (`cabang_id`) REFERENCES `ms_cabang` (`cabang_id`),
  ADD CONSTRAINT `ms_info_ibfk_2` FOREIGN KEY (`kry_id`) REFERENCES `ms_kry` (`kry_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
