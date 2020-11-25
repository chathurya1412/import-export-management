-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2020 at 03:57 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `importexport`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `created_at`) VALUES
(4, 'admin23', 'admin23', '2020-11-16 10:13:28'),
(5, 'admin44', 'admin44', '2020-11-17 17:17:22'),
(6, 'admin33', 'admin33', '2020-11-25 19:35:42');

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE `order_table` (
  `order_no` int(20) NOT NULL,
  `total_amt` int(20) NOT NULL,
  `item_name` varchar(45) NOT NULL,
  `destination_country` enum('AUS','HKG','IND','IDN','JPN','SGP','LKA') NOT NULL,
  `weight` int(20) NOT NULL,
  `order_status` varchar(45) NOT NULL,
  `source_username` varchar(20) NOT NULL,
  `ship_no` int(15) NOT NULL,
  `source_country` enum('AUS','HKG','IND','IDN','JPN','SGP','LKA') NOT NULL,
  `source_i_e` enum('IM','EX') NOT NULL,
  `destination_i_e` enum('IM','EX') NOT NULL,
  `destination_username` varchar(20) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_table`
--

INSERT INTO `order_table` (`order_no`, `total_amt`, `item_name`, `destination_country`, `weight`, `order_status`, `source_username`, `ship_no`, `source_country`, `source_i_e`, `destination_i_e`, `destination_username`, `created_at`) VALUES
(52641, 34200, 'plm', 'LKA', 15, 'processing', 'aa', 1, 'AUS', 'EX', 'IM', 'qq', '2020-11-25'),
(204233, 34200, 'plm', 'LKA', 15, 'processing', 'aa', 1, 'AUS', 'EX', 'IM', 'qq', '2020-11-25'),
(332569, 35300, 'abc23', 'LKA', 125, 'processing', 'aa', 1, 'AUS', 'EX', 'IM', 'qq', '2020-11-25'),
(487889, 28505, 'abc112', 'HKG', 3, 'processing', 'aa', 1, 'AUS', 'EX', 'IM', 'qq', '2020-11-25'),
(504798, 34200, 'plm', 'LKA', 15, 'processing', 'aa', 1, 'AUS', 'EX', 'IM', 'qq', '2020-11-25'),
(537987, 34200, 'plm', 'LKA', 15, 'processing', 'aa', 1, 'AUS', 'EX', 'IM', 'qq', '2020-11-25'),
(675339, 34200, 'plm', 'LKA', 15, 'processing', 'aa', 1, 'AUS', 'EX', 'IM', 'qq', '2020-11-25'),
(734628, 34160, 'abc', 'LKA', 11, 'processing', 'qq', 1, 'AUS', 'EX', 'IM', 'aa', '2020-11-24'),
(817072, 34080, 'abc11', 'LKA', 3, 'processing', 'aa', 1, 'AUS', 'EX', 'IM', 'qq', '2020-11-25');

-- --------------------------------------------------------

--
-- Table structure for table `ship`
--

CREATE TABLE `ship` (
  `ship_no` int(15) NOT NULL,
  `ship_name` varchar(20) NOT NULL,
  `ship_status` varchar(15) NOT NULL,
  `ship_source` enum('AUS','HKG','IND','IDN','JPN','SGP','LKA') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ship`
--

INSERT INTO `ship` (`ship_no`, `ship_name`, `ship_status`, `ship_source`) VALUES
(1, 'qwe', 'AVAILABLE', 'AUS'),
(124, 'wert', 'NOT AVAILABLE', 'IND');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(15) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phone_no` varchar(12) NOT NULL,
  `city` varchar(45) NOT NULL,
  `pincode` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `name`, `email`, `phone_no`, `city`, `pincode`) VALUES
('aa', '12', 'qq', 'mlsc@gmail.com', '09448999172', 'zz', 581400),
('asdfg', '123456', 'qw', 'asdf@gmail.com', '09901236422', 'zxcv', 581400),
('qq', '1234', 'qwerty', 'mlsc@gmail.com', '09448999172', 'qwe', 581400),
('qqq', '111', 'qaz', 'mlsc@gmail.com', '09448999172', 'qwe', 581400),
('tt', '89', 'ee', 'mlsc@gmail.com', '09448999172', 'jj', 581400),
('ww', '22', 'qq', 'mlsc@gmail.com', '09448999172', 'ee', 581400);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `order_table`
--
ALTER TABLE `order_table`
  ADD PRIMARY KEY (`order_no`),
  ADD KEY `username` (`source_username`),
  ADD KEY `destination_username` (`destination_username`),
  ADD KEY `ship_no` (`ship_no`);

--
-- Indexes for table `ship`
--
ALTER TABLE `ship`
  ADD PRIMARY KEY (`ship_no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ship`
--
ALTER TABLE `ship`
  MODIFY `ship_no` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_table`
--
ALTER TABLE `order_table`
  ADD CONSTRAINT `order_table_ibfk_2` FOREIGN KEY (`source_username`) REFERENCES `user` (`username`),
  ADD CONSTRAINT `order_table_ibfk_3` FOREIGN KEY (`destination_username`) REFERENCES `user` (`username`),
  ADD CONSTRAINT `order_table_ibfk_4` FOREIGN KEY (`ship_no`) REFERENCES `ship` (`ship_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
