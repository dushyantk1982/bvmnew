-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2017 at 07:14 AM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jaibilling`
--

-- --------------------------------------------------------

--
-- Table structure for table `item_stock`
--

CREATE TABLE `item_stock` (
  `stock_id` bigint(100) NOT NULL,
  `item_id` bigint(100) NOT NULL,
  `stock_qty` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_stock`
--

INSERT INTO `item_stock` (`stock_id`, `item_id`, `stock_qty`) VALUES
(1, 1, 9),
(2, 2, 8),
(3, 3, 8),
(4, 4, 9),
(5, 5, 11),
(6, 9, 21),
(7, 10, 18),
(8, 11, 31),
(9, 12, 17),
(10, 13, 8),
(11, 14, 7),
(12, 15, 5),
(13, 21, 138),
(14, 19, 535),
(15, 24, 11),
(16, 29, 124),
(17, 26, 25),
(18, 30, 9),
(19, 32, 11),
(20, 33, 9),
(21, 34, 9),
(22, 36, 11),
(23, 35, 4),
(24, 8, 7),
(25, 64, 62),
(26, 64, 62),
(27, 61, 90),
(28, 65, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item_stock`
--
ALTER TABLE `item_stock`
  ADD PRIMARY KEY (`stock_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item_stock`
--
ALTER TABLE `item_stock`
  MODIFY `stock_id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
