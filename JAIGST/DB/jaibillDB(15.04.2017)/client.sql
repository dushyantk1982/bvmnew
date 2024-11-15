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
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` bigint(100) NOT NULL,
  `client_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `area_id` int(10) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `pin` varchar(10) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `PAN` varchar(50) NOT NULL,
  `TIN` varchar(50) NOT NULL,
  `ST` varchar(50) NOT NULL,
  `CST` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `client_name`, `address`, `area_id`, `city`, `state`, `country`, `pin`, `contact`, `mobile`, `mail`, `PAN`, `TIN`, `ST`, `CST`) VALUES
(1, 'BOBBY GENERAL ', 'ANAND NAGAR', 5, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(2, 'SHE & SHE COSMETIC', 'ANAND NAGAR', 5, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(3, 'JAI MAA SANTOSHI', 'ANAND NAGAR', 5, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(4, 'BRANDAVAN MEDICAL', 'ANAND NAGAR', 5, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(5, 'SADBHAVNA ', 'BAHODAPUR', 5, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(6, 'AYUSH COSMETIC', 'BAHODAPUR', 5, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(7, 'RIYA SIYA KIRANA', 'BAHODAPUR', 5, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(8, 'BALAJI GARMENTS', 'BAHODAPUR', 5, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(9, 'SHAIFALI GENERAL', 'NAI SADAK', 3, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(10, 'KHUSHBU GENERAL', 'SHINDE KI CHHAWANI', 3, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(11, 'DIVYANSHI COSMETIC', 'SHINDE KI CHHAWANI', 3, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(12, 'AASHIRWAD GENERAL STORE', 'SHINDE KI CHHAWANI', 3, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(13, 'M.D. & SONS', 'MADHOGAN', 2, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(14, 'KAMAL KIRANA', 'GUDA NAKA', 6, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(15, 'SHRI RAM GENERAL', 'GUDA NAKA', 6, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(16, 'KALPANA MEDICAL', 'GUDA NAKA', 6, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(17, 'SAKSHI BEAUTY PARLOUR', 'GUDA NAKA', 6, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(18, 'KAVYA MEDICAL', 'GUDA NAKA', 6, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(19, 'KESHAV COSMETIC', 'SUBHASH MARKET', 6, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(20, 'P.K. AGENCY', 'SUBHASH MARKET', 6, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '23665102821', '', ''),
(21, 'KESHAR COSMETICS', 'CHANDBADANI NAKA', 1, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(22, 'K.S. COSMETICS', 'CHANDBADANI NAKA', 1, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(23, 'KHUSHBU KRISHNA', 'CHANDBADANI NAKA', 1, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(24, 'CHITRA GENERAL', 'CHANDBADANI NAKA', 1, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(25, 'SHUBHAM GENERAL', 'CHANDBADANI NAKA', 1, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(26, 'RAJ BEAUTY', 'CHANDBADANI NAKA', 1, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(27, 'HIMANSHU MEDICAL', 'CHANDABADANI NAKA', 1, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(28, 'KHUSHBU COSMETICS', 'CHANDBADANI NAKA', 1, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(29, 'MAA KAILADEVI ', 'CHANDBADANI NAKA', 1, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(30, 'KHUSHBU KIRANA ', 'NAI SADAK', 3, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(31, 'ACHALNATH MEDICAL', 'CHANDBADANI NAKA', 1, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(32, 'JITENDRA KIRANA', 'CHANDBADANI NAKA', 1, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(33, 'JAI BABA FARMA', 'HUJRAT PULL', 1, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(34, 'MAHAVEER COSMETIC', 'TOPI BAZAR', 6, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(35, 'MUKESH KIRANA', 'GOL PAHARIYA', 4, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(36, 'LAXMI GENERAL STORE', 'GOL PAHARIYA', 4, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(37, 'BANTI KIRANA', 'GOL PAHARIYA', 4, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(38, 'PAL KIRANA', 'GOL PAHARIYA', 4, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(39, 'MAA MANSHA DEVI', 'GOL PAHARIYA', 4, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(40, 'BALAJI PROVISION', 'GOL PAHARIYA', 4, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(41, 'SUNIL MEDICAL', 'NAI SADAK', 4, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(42, 'RAMESH KIRANA', 'GOL PAHARIYA', 4, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(43, 'KANCHAN GENERAL STORE', 'GOL PAHARIYA', 4, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(44, 'GURUKRIPA TRADERS', 'GOL PAHARIYA', 4, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(45, 'SHIVANI BEAUTY PARLOUR', 'GENDEWALI SADAK', 4, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(46, 'SANTOSH PROVISION', 'GENDEWALI SADAK', 4, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(47, 'VINOD COSMETICS', 'DHOLIBUA KA PULL, BAJARIYA', 4, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(48, 'KALPANA COSMETICS', 'MADHOGANJ', 2, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(49, 'PANKAJ KIRANA', 'MADHOGANJ', 2, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(50, 'MANOJ KIRANA', 'MADHOGANJ', 2, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(51, 'AMRAPURKAR GENERAL STORE', 'MADHOGANJ', 2, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(52, 'BAJRANG STORE', 'MADHOGANJ', 2, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(53, 'BALAJI STORE', 'MADHOGANJ', 2, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(54, 'GURUNANAK MEDICAL', 'MADHOGANJ', 2, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(55, 'DEEPAK GENERAL STORE', 'ANAND NAGAR', 5, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(56, 'AADITYA KIRANA', 'NEAR SHIV KIRANA SHABAD PRATAP AASHRAM ROAD', 5, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(57, 'ARPIT KIRANA', 'ANAND NAGAR', 5, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(58, 'MAA COLLECTION', 'ANAND NAGAR', 5, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(59, 'SUMIT KIRANA', 'ANAND NAGAR', 5, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(60, 'DEV KIRANA', 'ANAND NAGAR', 5, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(61, 'GOYAL HOJARI', 'ANAND NAGAR', 5, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(62, 'KRISHNA COSMETICS', 'NEAR KATESHWAR, GUDA NAKA', 6, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(63, 'A.B. GOYAL GENERAL', 'SUBHASH MARKET', 6, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(64, 'MADHAV DAS', 'SUBHASH MARKET', 6, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '23725102497', '', ''),
(65, 'MONU GENERAL', 'SUBHASH MARKET', 6, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '23805101483', '', ''),
(66, 'BANDIL HOJARI', 'FALKA BAZAR', 3, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(67, 'ASHWIN KIRANA', 'CHANDBADANI NAKA', 1, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(68, 'GIRRAJ PROVISION', 'NEAR VINOD, CHANDBADANI NAKA', 1, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(69, 'SHRI MAHADEV MEDICAL', 'KATORATAL, CHANDBADANI NAKA', 1, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(70, 'MAA LAKHESHWARI COSMETICS', 'CHANDBADANI NAKA', 1, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(71, 'BABA KIRANA', 'CHANDBADANI NAKA', 1, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(72, 'KUMAR MEDICAL', 'LAXMIGANJ, GOL PAHARIYA', 4, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(73, 'MAA SHARDA COSMETICS', 'NEAR GORKHI SCOUT, MADHOGANJ', 2, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
