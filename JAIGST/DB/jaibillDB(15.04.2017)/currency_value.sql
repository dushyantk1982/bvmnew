-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2017 at 07:12 AM
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
-- Table structure for table `currency_value`
--

CREATE TABLE `currency_value` (
  `cur_val_id` bigint(100) NOT NULL,
  `date` date NOT NULL,
  `invoice_id` bigint(100) NOT NULL,
  `client_id` bigint(100) NOT NULL,
  `currency_id` bigint(100) NOT NULL,
  `gross_value` decimal(65,2) NOT NULL,
  `currency_value` decimal(65,2) NOT NULL,
  `inr_value` decimal(65,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `currency_value`
--
ALTER TABLE `currency_value`
  ADD PRIMARY KEY (`cur_val_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `currency_value`
--
ALTER TABLE `currency_value`
  MODIFY `cur_val_id` bigint(100) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
