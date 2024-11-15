-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2017 at 07:25 AM
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
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `area_id` bigint(10) NOT NULL,
  `area_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`area_id`, `area_name`) VALUES
(1, 'Chandbadani Naka'),
(2, 'Madhoganj, Taraganj'),
(3, 'Shinde Ki Chhavani'),
(4, 'Gol Pahariya, Janakganj, Jiwaji Ganj'),
(5, 'Vinay Nagar, Anand Nagar, Bahodapur'),
(6, 'Guda Naka, Subhash Market');

-- --------------------------------------------------------

--
-- Table structure for table `autogen`
--

CREATE TABLE `autogen` (
  `id` bigint(100) NOT NULL,
  `inv` bigint(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `bank_id` bigint(100) NOT NULL,
  `bank` varchar(100) NOT NULL,
  `bank_add` varchar(100) NOT NULL,
  `account_name` varchar(100) NOT NULL,
  `account_no` varchar(100) NOT NULL,
  `account_type` varchar(20) NOT NULL,
  `IFSC` varchar(50) NOT NULL,
  `SWIFT` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` bigint(100) NOT NULL,
  `bill_no` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `bill_no`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(14, 14),
(15, 15),
(16, 16),
(17, 17),
(18, 18),
(19, 19),
(20, 20),
(21, 21),
(22, 22),
(23, 23),
(24, 24),
(25, 25),
(26, 26),
(27, 27),
(28, 28),
(29, 29),
(30, 30),
(31, 31),
(32, 32),
(33, 33),
(34, 34),
(35, 35),
(36, 36),
(37, 37),
(38, 38),
(39, 39),
(40, 40),
(41, 41),
(42, 42),
(43, 43),
(44, 44),
(45, 45),
(46, 46),
(47, 47),
(48, 48),
(49, 49),
(50, 50),
(51, 51),
(52, 52),
(53, 53),
(54, 54),
(55, 55),
(56, 56),
(57, 57),
(58, 58),
(59, 59),
(60, 60),
(61, 61),
(62, 62),
(63, 63),
(64, 64),
(65, 65),
(66, 66),
(67, 67),
(68, 68),
(69, 69),
(70, 70),
(71, 71),
(72, 72),
(73, 73),
(74, 74),
(75, 75),
(76, 76),
(77, 77),
(78, 78),
(79, 79),
(80, 80),
(81, 81),
(82, 82),
(83, 83),
(84, 84),
(85, 85),
(86, 86),
(87, 87),
(88, 88),
(89, 89),
(90, 90),
(91, 91),
(92, 92),
(93, 93);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` bigint(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category`, `description`) VALUES
(1, 'OLIVIA', 'OLIVIA COMPANY'),
(2, 'ARCHI', 'ARCHI COMPANY');

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
(73, 'MAA SHARDA COSMETICS', 'NEAR GORKHI SCOUT, MADHOGANJ', 2, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(74, 'OM SAI GENERAL', 'MADHOGANJ', 2, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(75, 'MAHESH GENERAL', 'MADHOGANJ', 2, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(76, 'KHANDELWAL GENERAL', 'GUDA NAKA', 6, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(77, 'SAI GENERAL ', 'GUDA NAKA', 6, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(78, 'KALPANA BENGAL', 'GUDA NAKA', 6, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(79, 'JUHI GENERAL', 'GUDA NAKA', 6, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(80, 'VASHUDEV GENERAL', 'SUBHASH MARKET', 6, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '23415100776', '', ''),
(81, 'AASHISH GENERAL ', 'SUBHASH MARKET', 6, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(82, 'PALAK TRADERS', 'VINAYNAGAR', 5, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(83, 'MAHAK GENERAL', 'VINAYNAGAR', 5, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(84, 'JAI SAI FATION', ' NEAR MAA SHARDA, BADA', 2, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', ''),
(85, 'AASHIRWAD SHOPING CENTER', 'INFRON OF RAM MANDIR, PHALKA BAZAR', 3, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '23745305022', '', ''),
(86, 'NAGAJI GENERAL STORE', 'PHALKA BAZAR', 3, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '23449213399', '', ''),
(87, 'CHACHA GENERAL STORE', 'INDERGANJ CHAURAHA', 1, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '23219030065', '', ''),
(88, 'S.S. ENTERPRISES', 'NEAR HAAT PULL, SHINDE KI CHHAWANI', 3, 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `company_profile`
--

CREATE TABLE `company_profile` (
  `company_id` bigint(100) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `pin` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `wesite` varchar(50) NOT NULL,
  `PAN` varchar(50) NOT NULL,
  `TIN` varchar(50) NOT NULL,
  `ST` varchar(50) NOT NULL,
  `CST` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_profile`
--

INSERT INTO `company_profile` (`company_id`, `company_name`, `address`, `city`, `state`, `country`, `pin`, `contact`, `mobile`, `mail`, `wesite`, `PAN`, `TIN`, `ST`, `CST`) VALUES
(1, 'JAI MAA TRADERS', 'BAKSHI KI GOTH JANAKGANJ', 'GWALIOR', 'M.P.', 'India', '474001', ' ', '9926216669,9893115666', ' ', ' ', '', '23169208868', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `creditor`
--

CREATE TABLE `creditor` (
  `trn_id` bigint(100) NOT NULL,
  `date` date NOT NULL,
  `vendor_id` bigint(100) NOT NULL,
  `ref_id` bigint(100) NOT NULL,
  `inv_value` decimal(10,2) NOT NULL,
  `payment` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `creditor`
--

INSERT INTO `creditor` (`trn_id`, `date`, `vendor_id`, `ref_id`, `inv_value`, `payment`) VALUES
(1, '2017-04-01', 1, 0, '40020.00', '0.00'),
(2, '2017-03-31', 1, 0, '4394.00', '0.00'),
(3, '2017-04-16', 1, 0, '6670.00', '0.00'),
(4, '2017-04-06', 1, 0, '2473.00', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE `currency` (
  `currency_id` bigint(100) NOT NULL,
  `currency` varchar(10) NOT NULL,
  `description` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `currency`
--

INSERT INTO `currency` (`currency_id`, `currency`, `description`, `country`) VALUES
(1, 'Rs.', 'Rupees', '');

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

-- --------------------------------------------------------

--
-- Table structure for table `debtors`
--

CREATE TABLE `debtors` (
  `trn_id` bigint(100) NOT NULL,
  `date` date NOT NULL,
  `area_id` bigint(100) NOT NULL,
  `client_id` bigint(100) NOT NULL,
  `ref_id` bigint(100) NOT NULL,
  `detail` varchar(100) NOT NULL,
  `inv_value` decimal(10,2) NOT NULL,
  `rect_value` decimal(10,2) NOT NULL,
  `receivable` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `debtors`
--

INSERT INTO `debtors` (`trn_id`, `date`, `area_id`, `client_id`, `ref_id`, `detail`, `inv_value`, `rect_value`, `receivable`) VALUES
(1, '2017-04-01', 0, 1, 1, 'Sales', '142.00', '0.00', '142.00'),
(2, '2017-04-01', 0, 2, 2, 'Sales', '454.00', '0.00', '454.00'),
(3, '2017-04-01', 0, 3, 3, 'Sales', '967.00', '0.00', '967.00'),
(4, '2017-04-01', 5, 4, 4, 'Sales', '741.00', '0.00', '741.00'),
(5, '2017-04-01', 5, 5, 5, 'Sales', '779.00', '0.00', '779.00'),
(6, '2017-04-01', 5, 6, 6, 'Sales', '126.00', '0.00', '126.00'),
(7, '2017-04-01', 5, 7, 7, 'Sales', '144.00', '0.00', '144.00'),
(8, '2017-04-02', 2, 9, 8, 'Sales', '288.00', '0.00', '288.00'),
(9, '2017-04-02', 2, 10, 9, 'Sales', '445.00', '0.00', '445.00'),
(10, '2017-04-02', 0, 11, 10, 'Sales', '0.00', '0.00', '0.00'),
(11, '2017-04-02', 0, 12, 11, 'Sales', '610.00', '0.00', '610.00'),
(12, '2017-04-02', 2, 13, 12, 'Sales', '3456.00', '0.00', '3456.00'),
(13, '2017-04-02', 0, 14, 13, 'Sales', '0.00', '0.00', '0.00'),
(14, '2017-04-02', 0, 15, 14, 'Sales', '0.00', '0.00', '0.00'),
(15, '2017-04-02', 6, 16, 15, 'Sales', '354.00', '0.00', '354.00'),
(16, '2017-04-02', 6, 17, 16, 'Sales', '216.00', '0.00', '216.00'),
(17, '2017-04-02', 6, 18, 17, 'Sales', '257.00', '0.00', '257.00'),
(18, '2017-04-02', 6, 19, 18, 'Sales', '1680.00', '0.00', '1680.00'),
(19, '2017-04-02', 6, 20, 19, 'Sales', '1445.00', '0.00', '1445.00'),
(20, '2017-04-02', 0, 14, 20, 'Sales', '400.00', '0.00', '400.00'),
(21, '2017-04-02', 6, 15, 21, 'Sales', '604.00', '0.00', '604.00'),
(22, '2017-04-04', 6, 21, 22, 'Sales', '578.00', '0.00', '578.00'),
(23, '2017-04-04', 0, 22, 23, 'Sales', '1195.00', '0.00', '1195.00'),
(24, '2017-04-04', 6, 23, 24, 'Sales', '606.00', '0.00', '606.00'),
(25, '2017-04-04', 6, 24, 25, 'Sales', '210.00', '0.00', '210.00'),
(26, '2017-04-04', 6, 25, 26, 'Sales', '643.00', '0.00', '643.00'),
(27, '2017-04-04', 0, 26, 27, 'Sales', '260.00', '0.00', '260.00'),
(28, '2017-04-04', 6, 27, 28, 'Sales', '206.00', '0.00', '206.00'),
(29, '2017-04-04', 6, 28, 29, 'Sales', '302.00', '0.00', '302.00'),
(30, '2017-04-04', 0, 29, 30, 'Sales', '0.00', '0.00', '0.00'),
(31, '2017-04-04', 6, 31, 31, 'Sales', '170.00', '0.00', '170.00'),
(32, '2017-04-04', 0, 32, 32, 'Sales', '144.00', '0.00', '144.00'),
(33, '2017-04-06', 4, 34, 33, 'Sales', '988.00', '0.00', '988.00'),
(34, '2017-04-06', 4, 40, 34, 'Sales', '432.00', '0.00', '432.00'),
(35, '2017-04-06', 4, 45, 35, 'Sales', '490.00', '0.00', '490.00'),
(36, '2017-04-06', 4, 46, 36, 'Sales', '120.00', '0.00', '120.00'),
(37, '2017-04-06', 4, 42, 37, 'Sales', '537.00', '0.00', '537.00'),
(38, '2017-04-06', 4, 35, 38, 'Sales', '730.00', '0.00', '730.00'),
(39, '2017-04-06', 4, 37, 39, 'Sales', '925.00', '0.00', '925.00'),
(40, '2017-04-06', 4, 47, 40, 'Sales', '972.00', '0.00', '972.00'),
(41, '2017-04-06', 0, 36, 41, 'Sales', '206.00', '0.00', '206.00'),
(42, '2017-04-06', 0, 38, 42, 'Sales', '206.00', '0.00', '206.00'),
(43, '2017-04-06', 4, 39, 43, 'Sales', '288.00', '0.00', '288.00'),
(44, '2017-04-06', 4, 43, 44, 'Sales', '176.00', '0.00', '176.00'),
(45, '2017-04-06', 0, 44, 45, 'Sales', '0.00', '0.00', '0.00'),
(46, '2017-04-07', 2, 49, 46, 'Sales', '360.00', '0.00', '360.00'),
(47, '2017-04-07', 2, 50, 47, 'Sales', '260.00', '0.00', '260.00'),
(48, '2017-04-07', 2, 51, 48, 'Sales', '480.00', '0.00', '480.00'),
(49, '2017-04-07', 2, 52, 49, 'Sales', '126.00', '0.00', '126.00'),
(50, '2017-04-07', 2, 53, 50, 'Sales', '480.00', '0.00', '480.00'),
(51, '2017-04-07', 2, 54, 51, 'Sales', '185.00', '0.00', '185.00'),
(52, '2017-04-09', 0, 55, 52, 'Sales', '247.00', '0.00', '247.00'),
(53, '2017-04-09', 0, 56, 53, 'Sales', '0.00', '0.00', '0.00'),
(54, '2017-04-09', 0, 57, 54, 'Sales', '206.00', '0.00', '206.00'),
(55, '2017-04-09', 5, 6, 55, 'Sales', '1282.00', '0.00', '1282.00'),
(56, '2017-04-09', 5, 58, 56, 'Sales', '606.00', '0.00', '606.00'),
(57, '2017-04-09', 0, 59, 57, 'Sales', '337.00', '0.00', '337.00'),
(58, '2017-04-09', 5, 60, 58, 'Sales', '142.00', '0.00', '142.00'),
(59, '2017-04-09', 5, 61, 59, 'Sales', '267.00', '0.00', '267.00'),
(60, '2017-04-09', 5, 5, 60, 'Sales', '82.00', '0.00', '82.00'),
(61, '2017-04-09', 6, 62, 61, 'Sales', '504.00', '0.00', '504.00'),
(62, '2017-04-09', 6, 63, 62, 'Sales', '1080.00', '0.00', '1080.00'),
(63, '2017-04-09', 6, 20, 63, 'Sales', '333.00', '0.00', '333.00'),
(64, '2017-04-11', 1, 66, 64, 'Sales', '514.00', '0.00', '514.00'),
(65, '2017-04-11', 1, 67, 65, 'Sales', '165.00', '0.00', '165.00'),
(66, '2017-04-11', 1, 68, 66, 'Sales', '288.00', '0.00', '288.00'),
(67, '2017-04-11', 0, 69, 67, 'Sales', '0.00', '0.00', '0.00'),
(68, '2017-04-11', 1, 70, 68, 'Sales', '288.00', '0.00', '288.00'),
(69, '2017-04-11', 1, 71, 69, 'Sales', '165.00', '0.00', '165.00'),
(70, '2017-04-11', 1, 33, 70, 'Sales', '761.00', '0.00', '761.00'),
(71, '2017-04-14', 4, 72, 71, 'Sales', '173.00', '0.00', '173.00'),
(72, '2017-04-14', 4, 43, 72, 'Sales', '1254.00', '0.00', '1254.00'),
(73, '2017-04-15', 2, 73, 73, 'Sales', '370.00', '0.00', '370.00'),
(74, '2017-04-16', 6, 74, 74, 'Sales', '168.00', '0.00', '168.00'),
(75, '2017-04-16', 6, 75, 75, 'Sales', '5415.00', '0.00', '5415.00'),
(76, '2017-04-16', 6, 76, 76, 'Sales', '1620.00', '0.00', '1620.00'),
(77, '2017-04-16', 6, 77, 77, 'Sales', '2970.00', '0.00', '2970.00'),
(78, '2017-04-16', 6, 78, 78, 'Sales', '339.00', '0.00', '339.00'),
(79, '2017-04-16', 6, 79, 79, 'Sales', '752.00', '0.00', '752.00'),
(80, '2017-04-16', 6, 64, 80, 'Sales', '992.00', '0.00', '992.00'),
(81, '2017-04-16', 6, 65, 81, 'Sales', '1333.00', '0.00', '1333.00'),
(82, '2017-04-16', 6, 80, 82, 'Sales', '900.00', '0.00', '900.00'),
(83, '2017-04-16', 6, 81, 83, 'Sales', '1025.00', '0.00', '1025.00'),
(84, '2017-04-16', 5, 82, 84, 'Sales', '730.00', '0.00', '730.00'),
(85, '2017-04-16', 5, 6, 85, 'Sales', '984.00', '0.00', '984.00'),
(86, '2017-04-16', 5, 1, 86, 'Sales', '186.00', '0.00', '186.00'),
(87, '2017-04-16', 5, 5, 87, 'Sales', '522.00', '0.00', '522.00'),
(88, '2017-04-16', 5, 83, 88, 'Sales', '1644.00', '0.00', '1644.00'),
(89, '2017-04-17', 2, 84, 89, 'Sales', '3960.00', '0.00', '3960.00'),
(90, '2017-04-17', 3, 85, 90, 'Sales', '891.00', '0.00', '891.00'),
(91, '2017-04-17', 3, 88, 91, 'Sales', '186.00', '0.00', '186.00'),
(92, '2017-04-17', 3, 12, 92, 'Sales', '376.00', '0.00', '376.00'),
(93, '2017-04-17', 3, 86, 93, 'Sales', '185.00', '0.00', '185.00');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_id` bigint(100) NOT NULL,
  `invoice_no` bigint(100) NOT NULL,
  `date` date NOT NULL,
  `client_id` bigint(100) NOT NULL,
  `order_id` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invoice_value`
--

CREATE TABLE `invoice_value` (
  `val_id` bigint(100) NOT NULL,
  `date` date NOT NULL,
  `invoice_id` bigint(100) NOT NULL,
  `gross_value` decimal(10,2) NOT NULL,
  `st` decimal(10,2) NOT NULL,
  `net_val` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` bigint(100) NOT NULL,
  `item` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `category` varchar(50) NOT NULL,
  `MRP` decimal(10,2) NOT NULL,
  `baserate` decimal(10,2) NOT NULL,
  `vat` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `item`, `description`, `category`, `MRP`, `baserate`, `vat`) VALUES
(1, 'MAKE UPSTICK 15GM (02)', '12*15GM', '1', '120.00', '91.53', '14.00'),
(2, 'MAKE UPSTICK 15GM (03)', '12*15GM', '1', '120.00', '91.53', '14.00'),
(3, 'MAKE UPSTICK 15GM (04)', '12*15GM', '1', '120.00', '91.53', '14.00'),
(4, 'MAKE UPSTICK 15GM (05)', '12*15GM', '1', '120.00', '91.53', '14.00'),
(5, 'MAKE UPSTICK 15GM (06)', '12*15GM', '1', '120.00', '91.53', '14.00'),
(6, 'MAKE UPSTICK 15GM (07)', '12*15GM', '1', '120.00', '91.53', '14.00'),
(7, 'MAKE UPSTICK 15GM (007) W', '12*15GM', '1', '120.00', '91.53', '14.00'),
(8, 'MAKE UPSTICK 15GM (01)', '12*15GM', '1', '120.00', '91.53', '14.00'),
(9, 'PAN CAKE-25GM (21)', '12*15GM', '1', '120.00', '91.53', '14.00'),
(10, 'PAN CAKE-25GM (22)', '12*25GM', '1', '120.00', '91.53', '14.00'),
(11, 'PAN CAKE-25GM (23)', '12*25GM', '1', '120.00', '91.53', '14.00'),
(12, 'PAN CAKE-25GM (24)', '12*25GM', '1', '120.00', '91.53', '14.00'),
(13, 'PAN CAKE-25GM (25)', '12*25GM', '1', '120.00', '91.53', '14.00'),
(14, 'PAN CAKE-25GM (26)', '12*25GM', '1', '120.00', '91.53', '14.00'),
(15, 'PAN CAKE-25GM (27)', '12*25GM', '1', '120.00', '91.53', '14.00'),
(17, 'PAN CAKE-25GM (28)', '12*25GM', '1', '120.00', '91.53', '14.00'),
(18, 'PAN CAKE-25GM (29)', '12*25GM', '1', '120.00', '91.53', '14.00'),
(19, 'HERB BLEACH 7.5GM ', '25*7.5GM', '1', '20.00', '15.81', '14.00'),
(20, 'HERB BLEACH 8GM ', '15*8GM', '1', '30.00', '22.88', '14.00'),
(21, 'HERB BLEACH 15GM ', '15*15GM', '1', '40.00', '30.51', '14.00'),
(22, 'HERB BLEACH 30GM ', '8*30GM', '1', '65.00', '49.58', '14.00'),
(23, 'HERB BLEACH 60GM ', '6*60GM', '1', '90.00', '68.65', '14.00'),
(24, 'HERB BLEACH 270GM ', '270GM', '1', '270.00', '205.95', '14.00'),
(25, 'GOLD BLEACH 7.5GM', '25*7.5GM', '1', '20.00', '15.81', '14.00'),
(26, 'GOLD BLEACH 9GM', '15*9GM', '1', '35.00', '26.70', '14.00'),
(27, 'FRUIT BLEACH 7.5GM', '25*7.5GM', '1', '15.00', '11.85', '14.00'),
(28, 'FRUIT BLEACH 9GM', '15*9GM', '1', '30.00', '22.88', '14.00'),
(29, 'SHINER BLEACH 7.5GM', '25*7.5GM', '1', '15.00', '11.85', '14.00'),
(30, 'FRUIT CREAM 50GM', '6*50GM', '1', '50.00', '38.14', '14.00'),
(31, 'FRUIT CREAM 100GM', '3*100GM', '1', '100.00', '76.28', '14.00'),
(32, 'GOLD KIT 50GM', '6*50GM', '1', '200.00', '152.56', '14.00'),
(33, 'APPLE KIT 50GM', '6*50GM', '1', '200.00', '152.56', '14.00'),
(34, 'PAPAYA KIT 50GM', '6*50GM', '1', '200.00', '152.56', '14.00'),
(35, 'PEARLS KIT 50GM', '6*50GM', '1', '230.00', '175.44', '14.00'),
(36, 'DIMOND KIT 50GM', '6*50GM', '1', '230.00', '175.44', '14.00'),
(37, 'GOLD KIT 60GM', '60GM', '1', '250.00', '190.69', '14.00'),
(38, 'FRUIT CREAM 15GM (MIX)', '24*15GM', '1', '10.00', '7.63', '14.00'),
(39, 'FRUIT CREAM 15GM (COLD)', '24*15GM', '1', '10.00', '7.63', '14.00'),
(40, 'FRUIT CREAM 15GM (FR)', '24*15GM', '1', '10.00', '7.63', '14.00'),
(41, 'HAIR REMOVER 30GM', '6*30GM', '1', '60.00', '45.77', '14.00'),
(42, 'COMPACT POWDER 18GM (01)', '12*18GM', '1', '80.00', '61.02', '14.00'),
(43, 'COMPACT POWDER 18GM (02)', '12*18GM', '1', '80.00', '61.02', '14.00'),
(44, 'COMPACT POWDER 18GM (03)', '12*18GM', '1', '80.00', '61.02', '14.00'),
(45, 'COMPACT POWDER 18GM (04)', '12*18GM', '1', '80.00', '61.02', '14.00'),
(46, 'LIQUED FOUNDATION (01)', '12*28ML', '1', '90.00', '68.65', '14.00'),
(47, 'LIQUED FOUNDATION (02)', '12*28ML', '1', '90.00', '68.65', '14.00'),
(48, 'LIQUED FOUNDATION (03)', '12*28ML', '1', '90.00', '68.65', '14.00'),
(49, 'LIQUED FOUNDATION (04)', '12*28ML', '1', '90.00', '68.65', '14.00'),
(50, 'OXY BLEACH 9GM', '15*9GM', '1', '40.00', '30.51', '14.00'),
(51, 'HONEY LOTION 25ML', '12*25ML', '1', '20.00', '15.26', '14.00'),
(52, 'HONEY LOTION 100ML', '12*100ML', '1', '70.00', '53.39', '14.00'),
(53, 'HONEY LOTION 500ML', '500ML', '1', '225.00', '171.62', '14.00'),
(54, 'CLEANSING MILK 25ML', '12*25ML', '1', '20.00', '15.26', '14.00'),
(55, 'CLEANSING MILK 100ML', '12*100ML', '1', '60.00', '45.77', '14.00'),
(56, 'CLEANSING MILK 500ML', '500ML', '1', '175.00', '133.49', '14.00'),
(57, 'KAJAL STICK 2.5GM', '12*2.5GM', '1', '120.00', '91.53', '14.00'),
(58, 'EYE LINER 5ML', '12*5ML', '1', '70.00', '53.39', '14.00'),
(59, 'BODY LOTION 25ML', '12*25ML', '1', '25.00', '19.07', '14.00'),
(60, 'ARCHI ROSE WATER 25ML', '12*25ML', '2', '10.00', '7.02', '14.00'),
(61, 'ARCHI ROSE WATER 50ML', '12*50ML', '2', '15.00', '10.53', '14.00'),
(62, 'ARCHI ROSE WATER 100ML', '6*100ML', '2', '20.00', '14.04', '14.00'),
(63, 'ARCHI ROSE WATER 250ML', '6*250ML', '2', '45.00', '31.58', '14.00'),
(64, 'ARCHI LIP BALM 3GM', '50*3GM', '2', '5.00', '3.51', '14.00'),
(65, 'ARCHI GLYCERIN 25ML', '12*25ML', '2', '10.00', '7.62', '5.00'),
(66, 'ARCHI FACE SCRUB 50GM', '12*50GM', '2', '20.00', '14.04', '14.00'),
(67, 'ARCHI FACE PACK 35GM', '12*35GM', '2', '20.00', '14.04', '14.00'),
(68, 'ARCHI MULTANI POWDER 100GM', '12*100GM', '2', '20.00', '15.24', '5.00'),
(69, 'ARCHI AMLA POWDER 100GM', '12*100GM', '2', '40.00', '30.48', '5.00'),
(70, 'ARCHI ARITHA POWDER 100GM', '12*100GM', '2', '40.00', '30.48', '5.00'),
(71, 'ARCHI SHIKAKAI PWDR 100G', '12*100GM', '2', '40.00', '30.48', '5.00'),
(72, 'ARCHI COOLER PERFUME', '15', '2', '50.00', '35.09', '14.00'),
(73, 'ARCHI LIP BALM 6GM', '42*6GM', '2', '10.00', '7.02', '14.00'),
(74, 'ARCHI FRESH & COOL 60ML ', '12*30ML', '2', '30.00', '21.05', '14.00'),
(75, 'ARCHI ROSE WATER 750ML', '1*750ML', '2', '90.00', '63.16', '14.00');

-- --------------------------------------------------------

--
-- Table structure for table `item_movment`
--

CREATE TABLE `item_movment` (
  `id` bigint(100) NOT NULL,
  `date` date NOT NULL,
  `invoice_no` bigint(100) NOT NULL,
  `item_id` bigint(100) NOT NULL,
  `pur_qty` bigint(100) NOT NULL,
  `pur_rate` decimal(10,2) NOT NULL,
  `gross_pur` decimal(10,2) NOT NULL,
  `pur_discount_rate` decimal(10,2) NOT NULL,
  `pur_discount` decimal(10,2) NOT NULL,
  `pur_base_amt` decimal(10,2) NOT NULL,
  `pur_vat_rate` decimal(10,2) NOT NULL,
  `pur_vat` decimal(10,2) NOT NULL,
  `pur_value` decimal(10,2) NOT NULL,
  `sales_qty` bigint(100) NOT NULL,
  `sales_rate` decimal(10,2) NOT NULL,
  `gross_sales` decimal(10,2) NOT NULL,
  `sales_discount_rate` decimal(10,2) NOT NULL,
  `sales_discount` decimal(10,2) NOT NULL,
  `sales_base_amt` decimal(10,2) NOT NULL,
  `sales_vat_rate` decimal(10,2) NOT NULL,
  `sales_vat` decimal(10,2) NOT NULL,
  `sales_value` decimal(10,2) NOT NULL,
  `balance_qty` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_movment`
--

INSERT INTO `item_movment` (`id`, `date`, `invoice_no`, `item_id`, `pur_qty`, `pur_rate`, `gross_pur`, `pur_discount_rate`, `pur_discount`, `pur_base_amt`, `pur_vat_rate`, `pur_vat`, `pur_value`, `sales_qty`, `sales_rate`, `gross_sales`, `sales_discount_rate`, `sales_discount`, `sales_base_amt`, `sales_vat_rate`, `sales_vat`, `sales_value`, `balance_qty`) VALUES
(1, '2017-04-01', 0, 1, 12, '72.78', '873.36', '0.00', '0.00', '873.00', '14.00', '122.22', '995.22', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 12),
(2, '2017-04-01', 0, 2, 12, '72.78', '873.36', '0.00', '0.00', '873.00', '14.00', '122.22', '995.22', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 24),
(3, '2017-04-01', 0, 3, 12, '72.78', '873.36', '0.00', '0.00', '873.00', '14.00', '122.22', '995.22', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 36),
(4, '2017-04-01', 0, 4, 12, '72.78', '873.36', '0.00', '0.00', '873.00', '14.00', '122.22', '995.22', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 48),
(5, '2017-04-01', 0, 5, 12, '72.78', '873.36', '0.00', '0.00', '873.00', '14.00', '122.22', '995.22', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 60),
(6, '2017-04-01', 0, 9, 24, '72.78', '1746.72', '0.00', '0.00', '1746.00', '14.00', '244.44', '1990.44', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 84),
(7, '2017-04-01', 0, 10, 24, '72.78', '1746.72', '0.00', '0.00', '1746.00', '14.00', '244.44', '1990.44', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 108),
(8, '2017-04-01', 0, 11, 36, '72.78', '2620.08', '0.00', '0.00', '2620.00', '14.00', '366.80', '2986.80', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 144),
(9, '2017-04-01', 0, 12, 24, '72.78', '1746.72', '0.00', '0.00', '1746.00', '14.00', '244.44', '1990.44', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 168),
(10, '2017-04-01', 0, 13, 12, '72.78', '873.36', '0.00', '0.00', '873.00', '14.00', '122.22', '995.22', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 180),
(11, '2017-04-01', 0, 14, 12, '72.78', '873.36', '0.00', '0.00', '873.00', '14.00', '122.22', '995.22', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 192),
(12, '2017-04-01', 0, 15, 12, '72.78', '873.36', '0.00', '0.00', '873.00', '14.00', '122.22', '995.22', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 204),
(13, '2017-04-01', 0, 21, 150, '24.26', '3639.00', '0.00', '0.00', '3639.00', '14.00', '509.46', '4148.46', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 354),
(14, '2017-04-01', 0, 19, 624, '13.57', '8467.68', '0.00', '0.00', '8467.00', '14.00', '1185.38', '9652.38', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 978),
(15, '2017-04-01', 0, 24, 12, '163.75', '1965.00', '0.00', '0.00', '1965.00', '14.00', '275.10', '2240.10', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 990),
(16, '2017-04-01', 0, 29, 300, '9.43', '2829.00', '0.00', '0.00', '2829.00', '14.00', '396.06', '3225.06', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1290),
(17, '2017-04-01', 0, 26, 45, '21.23', '955.35', '0.00', '0.00', '955.00', '14.00', '133.70', '1088.70', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1335),
(18, '2017-04-01', 0, 30, 12, '30.32', '363.84', '0.00', '0.00', '363.00', '14.00', '50.82', '413.82', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1347),
(19, '2017-04-01', 0, 32, 12, '104.97', '1259.64', '0.00', '0.00', '1259.00', '14.00', '176.26', '1435.26', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1359),
(20, '2017-04-01', 0, 33, 12, '104.97', '1259.64', '0.00', '0.00', '1259.00', '14.00', '176.26', '1435.26', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1371),
(21, '2017-04-01', 0, 34, 12, '104.97', '1259.64', '0.00', '0.00', '1259.00', '14.00', '176.26', '1435.26', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1383),
(22, '2017-04-01', 0, 36, 12, '120.72', '1448.64', '0.00', '0.00', '1448.00', '14.00', '202.72', '1650.72', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1395),
(23, '2017-04-01', 0, 35, 6, '120.72', '724.32', '0.00', '0.00', '724.00', '14.00', '101.36', '825.36', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1401),
(24, '2017-04-01', 0, 8, 12, '72.78', '873.36', '0.00', '0.00', '873.00', '14.00', '122.22', '995.22', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1413),
(25, '2017-03-31', 0, 64, 360, '3.25', '1170.00', '0.00', '0.00', '1170.00', '14.00', '163.80', '1333.80', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 360),
(26, '2017-03-31', 0, 64, 50, '0.00', '0.00', '0.00', '0.00', '0.00', '5.00', '0.00', '0.00', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 410),
(27, '2017-03-31', 0, 61, 288, '9.75', '2808.00', '14.29', '401.26', '2406.74', '14.00', '336.84', '2742.84', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 698),
(28, '2017-03-31', 0, 65, 60, '7.06', '423.60', '8.33', '35.24', '387.76', '5.00', '19.35', '406.35', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 758),
(29, '2017-04-01', 1, 29, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '8.77', '52.62', '0.00', '0.00', '52.62', '14.00', '7.37', '59.99', 294),
(30, '2017-04-01', 1, 60, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 12, '6.02', '72.24', '0.00', '0.00', '72.24', '14.00', '10.11', '82.35', 0),
(31, '2017-04-01', 2, 20, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 8, '20.02', '160.16', '0.00', '0.00', '160.16', '14.00', '22.42', '182.58', 0),
(32, '2017-04-01', 2, 21, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 3, '26.69', '80.07', '0.00', '0.00', '80.07', '14.00', '11.21', '91.28', 147),
(33, '2017-04-01', 2, 13, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '78.94', '78.94', '0.00', '0.00', '78.94', '14.00', '11.05', '89.99', 11),
(34, '2017-04-01', 2, 15, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '78.94', '78.94', '0.00', '0.00', '78.94', '14.00', '11.05', '89.99', 11),
(35, '2017-04-01', 3, 69, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 2, '26.12', '52.24', '0.00', '0.00', '52.24', '5.00', '2.61', '54.85', 0),
(36, '2017-04-01', 3, 70, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 2, '26.12', '52.24', '0.00', '0.00', '52.24', '5.00', '2.61', '54.85', 0),
(37, '2017-04-01', 3, 71, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 2, '26.12', '52.24', '0.00', '0.00', '52.24', '5.00', '2.61', '54.85', 0),
(38, '2017-04-01', 3, 67, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6),
(39, '2017-04-01', 3, 19, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 8, '13.83', '110.64', '0.00', '0.00', '110.64', '14.00', '15.49', '126.13', 551),
(40, '2017-04-01', 3, 26, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 3, '26.70', '80.10', '0.00', '0.00', '80.10', '14.00', '11.21', '91.31', 28),
(41, '2017-04-01', 3, 54, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 4, '15.26', '61.04', '0.00', '0.00', '61.04', '14.00', '8.55', '69.59', 0),
(42, '2017-04-01', 3, 55, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 2, '45.77', '91.54', '0.00', '0.00', '91.54', '14.00', '12.82', '104.36', 0),
(43, '2017-04-01', 3, 35, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '131.58', '131.58', '0.00', '0.00', '131.58', '14.00', '18.42', '150.00', 4),
(44, '2017-04-01', 3, 34, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '114.41', '114.41', '0.00', '0.00', '114.41', '14.00', '16.02', '130.43', 9),
(45, '2017-04-01', 3, 33, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '114.41', '114.41', '0.00', '0.00', '114.41', '14.00', '16.02', '130.43', 9),
(46, '2017-04-01', 4, 60, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 12, '6.02', '72.24', '0.00', '0.00', '72.24', '14.00', '10.11', '82.35', -12),
(47, '2017-04-01', 4, 61, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 12, '9.02', '108.24', '0.00', '0.00', '108.24', '14.00', '15.15', '123.39', 276),
(48, '2017-04-01', 4, 62, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 12, '12.03', '144.36', '0.00', '0.00', '144.36', '14.00', '20.21', '164.57', 264),
(49, '2017-04-01', 4, 63, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 12, '27.07', '324.84', '0.00', '0.00', '324.84', '14.00', '45.48', '370.32', 252),
(50, '2017-04-01', 5, 8, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '78.95', '78.95', '0.00', '0.00', '78.95', '14.00', '11.05', '90.00', 11),
(51, '2017-04-01', 5, 1, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '78.95', '78.95', '0.00', '0.00', '78.95', '14.00', '11.05', '90.00', 11),
(52, '2017-04-01', 5, 2, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '78.95', '78.95', '0.00', '0.00', '78.95', '14.00', '11.05', '90.00', 11),
(53, '2017-04-01', 5, 3, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '78.95', '78.95', '0.00', '0.00', '78.95', '14.00', '11.05', '90.00', 11),
(54, '2017-04-01', 5, 4, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '78.95', '78.95', '0.00', '0.00', '78.95', '14.00', '11.05', '90.00', 11),
(55, '2017-04-01', 5, 69, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 4, '26.12', '104.48', '0.00', '0.00', '104.48', '5.00', '5.22', '109.70', 7),
(56, '2017-04-01', 5, 70, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 4, '26.12', '104.48', '0.00', '0.00', '104.48', '5.00', '5.22', '109.70', 3),
(57, '2017-04-01', 5, 71, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 4, '26.12', '104.48', '0.00', '0.00', '104.48', '5.00', '5.22', '109.70', -1),
(58, '2017-04-01', 6, 19, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 8, '13.83', '110.64', '0.00', '0.00', '110.64', '14.00', '15.49', '126.13', 608),
(59, '2017-04-01', 7, 60, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 12, '6.02', '72.24', '0.00', '0.00', '72.24', '14.00', '10.11', '82.35', -12),
(60, '2017-04-01', 7, 61, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '9.02', '54.12', '0.00', '0.00', '54.12', '14.00', '7.58', '61.70', 270),
(61, '2017-04-02', 8, 73, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 36, '7.02', '252.72', '0.00', '0.00', '252.72', '14.00', '35.38', '288.10', -36),
(62, '2017-04-02', 8, 73, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '0.00', '0.00', '0.00', '0.00', '0.00', '14.00', '0.00', '0.00', -42),
(63, '2017-04-02', 9, 60, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 24, '6.02', '144.48', '0.00', '0.00', '144.48', '14.00', '20.23', '164.71', -24),
(64, '2017-04-02', 9, 64, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 50, '3.37', '168.50', '0.00', '0.00', '168.50', '14.00', '23.59', '192.09', 310),
(65, '2017-04-02', 9, 65, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 12, '6.98', '83.76', '0.00', '0.00', '83.76', '5.00', '4.19', '87.95', 48),
(66, '2017-04-02', 10, 29, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 227),
(67, '2017-04-02', 10, 60, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 12),
(68, '2017-04-02', 11, 27, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 8),
(69, '2017-04-02', 11, 20, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 8, '20.02', '160.16', '0.00', '0.00', '160.16', '14.00', '22.42', '182.58', 0),
(70, '2017-04-02', 11, 19, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 8, '13.83', '110.64', '0.00', '0.00', '110.64', '14.00', '15.49', '126.13', 600),
(71, '2017-04-02', 11, 64, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 12, '3.50', '42.00', '0.00', '0.00', '42.00', '14.00', '5.88', '47.88', 248),
(72, '2017-04-02', 11, 73, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 12, '6.48', '77.76', '0.00', '0.00', '77.76', '14.00', '10.89', '88.65', 0),
(73, '2017-04-02', 11, 60, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 24, '6.02', '144.48', '0.00', '0.00', '144.48', '14.00', '20.23', '164.71', 0),
(74, '2017-04-02', 12, 60, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 72, '6.02', '433.44', '0.00', '0.00', '433.44', '14.00', '60.68', '494.12', -72),
(75, '2017-04-02', 12, 61, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 72, '9.02', '649.44', '0.00', '0.00', '649.44', '14.00', '90.92', '740.36', 198),
(76, '2017-04-02', 12, 63, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 72, '27.07', '1949.04', '0.00', '0.00', '1949.04', '14.00', '272.87', '2221.91', 126),
(77, '2017-04-02', 13, 29, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 233),
(78, '2017-04-02', 14, 29, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 258),
(79, '2017-04-02', 14, 26, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 42),
(80, '2017-04-02', 15, 25, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 15, '13.70', '205.50', '0.00', '0.00', '205.50', '14.00', '28.77', '234.27', -15),
(81, '2017-04-02', 15, 29, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 12, '8.77', '105.24', '0.00', '0.00', '105.24', '14.00', '14.73', '119.97', 239),
(82, '2017-04-02', 16, 50, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '22.81', '136.86', '0.00', '0.00', '136.86', '14.00', '19.16', '156.02', -6),
(83, '2017-04-02', 16, 29, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '8.77', '52.62', '0.00', '0.00', '52.62', '14.00', '7.37', '59.99', 233),
(84, '2017-04-02', 17, 20, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 4, '20.02', '80.08', '0.00', '0.00', '80.08', '14.00', '11.21', '91.29', -4),
(85, '2017-04-02', 17, 25, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '13.83', '82.98', '0.00', '0.00', '82.98', '14.00', '11.62', '94.60', -10),
(86, '2017-04-02', 17, 29, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '10.37', '62.22', '0.00', '0.00', '62.22', '14.00', '8.71', '70.93', 227),
(87, '2017-04-02', 18, 8, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 2, '78.95', '157.90', '0.00', '0.00', '157.90', '14.00', '22.11', '180.01', 9),
(88, '2017-04-02', 18, 1, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 2, '78.95', '157.90', '0.00', '0.00', '157.90', '14.00', '22.11', '180.01', 9),
(89, '2017-04-02', 18, 2, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 2, '78.95', '157.90', '0.00', '0.00', '157.90', '14.00', '22.11', '180.01', 9),
(90, '2017-04-02', 18, 3, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 2, '78.95', '157.90', '0.00', '0.00', '157.90', '14.00', '22.11', '180.01', 9),
(91, '2017-04-02', 18, 4, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 2, '78.95', '157.90', '0.00', '0.00', '157.90', '14.00', '22.11', '180.01', 9),
(92, '2017-04-02', 18, 5, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '78.95', '78.95', '0.00', '0.00', '78.95', '14.00', '11.05', '90.00', 11),
(93, '2017-04-02', 18, 9, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 2, '78.95', '157.90', '0.00', '0.00', '157.90', '14.00', '22.11', '180.01', 22),
(94, '2017-04-02', 18, 12, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 2, '78.95', '157.90', '0.00', '0.00', '157.90', '14.00', '22.11', '180.01', 22),
(95, '2017-04-02', 18, 15, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '78.95', '78.95', '0.00', '0.00', '78.95', '14.00', '11.05', '90.00', 10),
(96, '2017-04-02', 18, 17, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '78.95', '78.95', '0.00', '0.00', '78.95', '14.00', '11.05', '90.00', 9),
(97, '2017-04-02', 18, 14, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '78.95', '78.95', '0.00', '0.00', '78.95', '14.00', '11.05', '90.00', 11),
(98, '2017-04-02', 18, 29, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '8.77', '52.62', '0.00', '0.00', '52.62', '14.00', '7.37', '59.99', 221),
(99, '2017-04-02', 19, 10, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 2, '78.95', '157.90', '0.00', '0.00', '157.90', '14.00', '22.11', '180.01', 22),
(100, '2017-04-02', 19, 11, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 2, '78.95', '157.90', '0.00', '0.00', '157.90', '14.00', '22.11', '180.01', 34),
(101, '2017-04-02', 19, 12, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 2, '78.95', '157.90', '0.00', '0.00', '157.90', '14.00', '22.11', '180.01', 20),
(102, '2017-04-02', 19, 13, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '78.95', '78.95', '0.00', '0.00', '78.95', '14.00', '11.05', '90.00', 10),
(103, '2017-04-02', 19, 14, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 2, '78.95', '157.90', '0.00', '0.00', '157.90', '14.00', '22.11', '180.01', 9),
(104, '2017-04-02', 19, 15, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 2, '78.95', '157.90', '0.00', '0.00', '157.90', '14.00', '22.11', '180.01', 8),
(105, '2017-04-02', 19, 17, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '78.95', '78.95', '0.00', '0.00', '78.95', '14.00', '11.05', '90.00', 7),
(106, '2017-04-02', 19, 42, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 2, '53.39', '106.78', '0.00', '0.00', '106.78', '14.00', '14.95', '121.73', 5),
(107, '2017-04-02', 19, 43, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 2, '53.39', '106.78', '0.00', '0.00', '106.78', '14.00', '14.95', '121.73', 3),
(108, '2017-04-02', 19, 44, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 2, '53.39', '106.78', '0.00', '0.00', '106.78', '14.00', '14.95', '121.73', 1),
(109, '2017-04-02', 20, 29, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 3, '8.77', '26.31', '0.00', '0.00', '26.31', '14.00', '3.68', '29.99', 236),
(110, '2017-04-02', 20, 60, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 12, '6.02', '72.24', '0.00', '0.00', '72.24', '14.00', '10.11', '82.35', 0),
(111, '2017-04-02', 20, 61, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 12, '9.02', '108.24', '0.00', '0.00', '108.24', '14.00', '15.15', '123.39', 186),
(112, '2017-04-02', 20, 69, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 3, '26.12', '78.36', '0.00', '0.00', '78.36', '5.00', '3.92', '82.28', 0),
(113, '2017-04-02', 20, 70, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 3, '26.12', '78.36', '0.00', '0.00', '78.36', '5.00', '3.92', '82.28', 0),
(114, '2017-04-02', 21, 29, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 25, '8.77', '219.25', '0.00', '0.00', '219.25', '14.00', '30.70', '249.95', 221),
(115, '2017-04-02', 21, 26, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 3, '23.36', '70.08', '0.00', '0.00', '70.08', '14.00', '9.81', '79.89', 39),
(116, '2017-04-02', 21, 60, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 12, '6.02', '72.24', '0.00', '0.00', '72.24', '14.00', '10.11', '82.35', 27),
(117, '2017-04-02', 21, 64, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 50, '3.37', '168.50', '0.00', '0.00', '168.50', '14.00', '23.59', '192.09', 248),
(118, '2017-04-04', 22, 29, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '8.77', '52.62', '0.00', '0.00', '52.62', '14.00', '7.37', '59.99', 230),
(119, '2017-04-04', 22, 20, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 8, '20.02', '160.16', '0.00', '0.00', '160.16', '14.00', '22.42', '182.58', 222),
(120, '2017-04-04', 22, 40, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 24, '5.26', '126.24', '0.00', '0.00', '126.24', '14.00', '17.67', '143.91', 198),
(121, '2017-04-04', 22, 64, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 50, '3.36', '168.00', '0.00', '0.00', '168.00', '14.00', '23.52', '191.52', 198),
(122, '2017-04-04', 23, 29, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 25, '8.77', '219.25', '0.00', '0.00', '219.25', '14.00', '30.70', '249.95', 128),
(123, '2017-04-04', 23, 34, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '114.42', '114.42', '0.00', '0.00', '114.42', '14.00', '16.02', '130.44', 9),
(124, '2017-04-04', 23, 33, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '114.42', '114.42', '0.00', '0.00', '114.42', '14.00', '16.02', '130.44', 9),
(125, '2017-04-04', 23, 35, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '131.58', '131.58', '0.00', '0.00', '131.58', '14.00', '18.42', '150.00', 4),
(126, '2017-04-04', 23, 36, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '131.58', '131.58', '0.00', '0.00', '131.58', '14.00', '18.42', '150.00', 11),
(127, '2017-04-04', 23, 73, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 42, '6.02', '252.84', '0.00', '0.00', '252.84', '14.00', '35.40', '288.24', 0),
(128, '2017-04-04', 23, 60, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 12),
(129, '2017-04-04', 23, 64, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 25, '3.37', '84.21', '0.00', '0.00', '84.21', '14.00', '11.79', '95.99', 12),
(130, '2017-04-04', 24, 29, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 12, '9.65', '115.80', '0.00', '0.00', '115.80', '14.00', '16.21', '132.01', 193),
(131, '2017-04-04', 24, 26, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 8, '23.36', '186.88', '0.00', '0.00', '186.88', '14.00', '26.16', '213.04', 31),
(132, '2017-04-04', 24, 33, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '114.42', '114.42', '0.00', '0.00', '114.42', '14.00', '16.02', '130.44', 9),
(133, '2017-04-04', 24, 34, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '114.42', '114.42', '0.00', '0.00', '114.42', '14.00', '16.02', '130.44', 9),
(134, '2017-04-04', 25, 29, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '9.65', '57.90', '0.00', '0.00', '57.90', '14.00', '8.11', '66.01', 187),
(135, '2017-04-04', 25, 60, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 12, '6.02', '72.24', '0.00', '0.00', '72.24', '14.00', '10.11', '82.35', 175),
(136, '2017-04-04', 25, 61, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '9.02', '54.12', '0.00', '0.00', '54.12', '14.00', '7.58', '61.70', 180),
(137, '2017-04-04', 26, 20, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 15, '18.86', '282.90', '0.00', '0.00', '282.90', '14.00', '39.61', '322.51', -15),
(138, '2017-04-04', 26, 21, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '24.56', '147.36', '0.00', '0.00', '147.36', '14.00', '20.63', '167.99', 141),
(139, '2017-04-04', 26, 26, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 3, '22.81', '68.43', '0.00', '0.00', '68.43', '14.00', '9.58', '78.01', 28),
(140, '2017-04-04', 26, 50, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 3, '21.92', '65.76', '0.00', '0.00', '65.76', '14.00', '9.21', '74.97', 25),
(141, '2017-04-04', 27, 19, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 12, '13.16', '157.92', '0.00', '0.00', '157.92', '14.00', '22.11', '180.03', 551),
(142, '2017-04-04', 27, 29, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 8, '8.77', '70.16', '0.00', '0.00', '70.16', '14.00', '9.82', '79.98', 130),
(143, '2017-04-04', 28, 60, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 12, '6.02', '72.24', '0.00', '0.00', '72.24', '14.00', '10.11', '82.35', -12),
(144, '2017-04-04', 28, 61, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 12, '9.02', '108.24', '0.00', '0.00', '108.24', '14.00', '15.15', '123.39', 168),
(145, '2017-04-04', 29, 64, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 24, '3.51', '84.24', '0.00', '0.00', '84.24', '14.00', '11.79', '96.03', -236),
(146, '2017-04-04', 29, 72, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '32.65', '195.90', '0.00', '0.00', '195.90', '5.00', '9.79', '205.69', -242),
(147, '2017-04-04', 30, 65, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 12),
(148, '2017-04-04', 31, 65, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 12, '6.98', '83.76', '0.00', '0.00', '83.76', '5.00', '4.19', '87.95', 24),
(149, '2017-04-04', 31, 60, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 12, '6.02', '72.24', '0.00', '0.00', '72.24', '14.00', '10.11', '82.35', 12),
(150, '2017-04-04', 32, 60, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 12, '6.02', '72.24', '0.00', '0.00', '72.24', '14.00', '10.11', '82.35', 0),
(151, '2017-04-04', 32, 61, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '9.02', '54.12', '0.00', '0.00', '54.12', '14.00', '7.58', '61.70', 138),
(152, '2017-04-04', 32, 72, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 3),
(153, '2017-04-06', 33, 60, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 144, '6.02', '866.88', '0.00', '0.00', '866.88', '14.00', '121.36', '988.24', -144),
(154, '2017-04-06', 34, 41, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 3, '52.63', '157.89', '0.00', '0.00', '157.89', '14.00', '22.10', '179.99', -3),
(155, '2017-04-06', 34, 41, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 3, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', -6),
(156, '2017-04-06', 34, 61, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '9.02', '54.12', '0.00', '0.00', '54.12', '14.00', '7.58', '61.70', 156),
(157, '2017-04-06', 34, 62, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '12.03', '72.18', '0.00', '0.00', '72.18', '14.00', '10.11', '82.29', 150),
(158, '2017-04-06', 34, 63, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 3, '31.58', '94.74', '0.00', '0.00', '94.74', '14.00', '13.26', '108.00', 147),
(159, '2017-04-06', 35, 41, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '52.63', '315.78', '0.00', '0.00', '315.78', '14.00', '44.21', '359.99', -6),
(160, '2017-04-06', 35, 41, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', -12),
(161, '2017-04-06', 35, 32, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '114.42', '114.42', '0.00', '0.00', '114.42', '14.00', '16.02', '130.44', 11),
(162, '2017-04-06', 36, 29, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 12, '8.77', '105.24', '0.00', '0.00', '105.24', '14.00', '14.73', '119.97', 165),
(163, '2017-04-06', 37, 41, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 12, '26.32', '315.84', '0.00', '0.00', '315.84', '14.00', '44.22', '360.06', -12),
(164, '2017-04-06', 37, 19, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '13.83', '82.98', '0.00', '0.00', '82.98', '14.00', '11.62', '94.60', 582),
(165, '2017-04-06', 37, 68, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '13.06', '78.36', '0.00', '0.00', '78.36', '5.00', '3.92', '82.28', 576),
(166, '2017-04-06', 38, 29, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 25, '8.77', '219.25', '0.00', '0.00', '219.25', '14.00', '30.70', '249.95', 140),
(167, '2017-04-06', 38, 41, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '52.63', '315.78', '0.00', '0.00', '315.78', '14.00', '44.21', '359.99', 134),
(168, '2017-04-06', 38, 41, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 128),
(169, '2017-04-06', 38, 72, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 3, '35.09', '105.27', '0.00', '0.00', '105.27', '14.00', '14.74', '120.01', 125),
(170, '2017-04-06', 39, 19, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 8, '13.83', '110.64', '0.00', '0.00', '110.64', '14.00', '15.49', '126.13', 574),
(171, '2017-04-06', 39, 20, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 8, '20.02', '160.16', '0.00', '0.00', '160.16', '14.00', '22.42', '182.58', 566),
(172, '2017-04-06', 39, 21, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 3, '26.70', '80.10', '0.00', '0.00', '80.10', '14.00', '11.21', '91.31', 138),
(173, '2017-04-06', 39, 72, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '30.08', '180.48', '0.00', '0.00', '180.48', '14.00', '25.27', '205.75', 132),
(174, '2017-04-06', 39, 60, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 12, '6.02', '72.24', '0.00', '0.00', '72.24', '14.00', '10.11', '82.35', 120),
(175, '2017-04-06', 39, 61, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '9.02', '54.12', '0.00', '0.00', '54.12', '14.00', '7.58', '61.70', 150),
(176, '2017-04-06', 39, 62, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '12.03', '72.18', '0.00', '0.00', '72.18', '14.00', '10.11', '82.29', 144),
(177, '2017-04-06', 39, 63, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 3, '27.07', '81.21', '0.00', '0.00', '81.21', '14.00', '11.37', '92.58', 141),
(178, '2017-04-06', 39, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '14.00', '0.00', '0.00', 141),
(179, '2017-04-06', 40, 52, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 15, '46.28', '694.20', '0.00', '0.00', '694.20', '14.00', '97.19', '791.39', -15),
(180, '2017-04-06', 40, 51, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 12, '13.22', '158.64', '0.00', '0.00', '158.64', '14.00', '22.21', '180.85', -27),
(181, '2017-04-06', 41, 72, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '30.08', '180.48', '0.00', '0.00', '180.48', '14.00', '25.27', '205.75', 0),
(182, '2017-04-06', 42, 72, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '30.08', '180.48', '0.00', '0.00', '180.48', '14.00', '25.27', '205.75', 0),
(183, '2017-04-06', 43, 72, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '30.08', '180.48', '0.00', '0.00', '180.48', '14.00', '25.27', '205.75', -6),
(184, '2017-04-06', 43, 60, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 12, '6.02', '72.24', '0.00', '0.00', '72.24', '14.00', '10.11', '82.35', -18),
(185, '2017-04-06', 44, 65, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 12, '6.98', '83.76', '0.00', '0.00', '83.76', '5.00', '4.19', '87.95', 12),
(186, '2017-04-06', 44, 66, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '12.87', '77.22', '0.00', '0.00', '77.22', '14.00', '10.81', '88.03', 6),
(187, '2017-04-06', 45, 72, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6),
(188, '2017-04-07', 46, 41, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '52.63', '315.78', '0.00', '0.00', '315.78', '14.00', '44.21', '359.99', -6),
(189, '2017-04-07', 46, 41, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', -12),
(190, '2017-04-07', 47, 19, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 15, '5.26', '78.90', '0.00', '0.00', '78.90', '14.00', '11.05', '89.95', 559),
(191, '2017-04-07', 47, 25, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 15, '5.26', '78.90', '0.00', '0.00', '78.90', '14.00', '11.05', '89.95', 544),
(192, '2017-04-07', 47, 50, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 2, '35.09', '70.18', '0.00', '0.00', '70.18', '14.00', '9.83', '80.01', 542),
(193, '2017-04-07', 47, 50, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 2, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 540),
(194, '2017-04-07', 48, 72, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 15, '28.07', '421.05', '0.00', '0.00', '421.05', '14.00', '58.95', '480.00', -15),
(195, '2017-04-07', 49, 60, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 12, '6.02', '72.24', '0.00', '0.00', '72.24', '14.00', '10.11', '82.35', -12),
(196, '2017-04-07', 49, 65, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '6.98', '41.88', '0.00', '0.00', '41.88', '5.00', '2.09', '43.97', 6),
(197, '2017-04-07', 50, 72, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 15, '28.07', '421.05', '0.00', '0.00', '421.05', '14.00', '58.95', '480.00', -15),
(198, '2017-04-07', 51, 60, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 12, '6.02', '72.24', '0.00', '0.00', '72.24', '14.00', '10.11', '82.35', -12),
(199, '2017-04-07', 51, 72, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 3, '30.08', '90.24', '0.00', '0.00', '90.24', '14.00', '12.63', '102.87', -15),
(200, '2017-04-09', 52, 60, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 36, '6.02', '216.72', '0.00', '0.00', '216.72', '14.00', '30.34', '247.06', 0),
(201, '2017-04-09', 52, 72, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6),
(202, '2017-04-09', 53, 29, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 130),
(203, '2017-04-09', 53, 64, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 87),
(204, '2017-04-09', 53, 68, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6),
(205, '2017-04-09', 54, 72, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '30.08', '180.48', '0.00', '0.00', '180.48', '14.00', '25.27', '205.75', 0),
(206, '2017-04-09', 54, 64, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 62),
(207, '2017-04-09', 55, 19, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 8, '13.83', '110.64', '0.00', '0.00', '110.64', '14.00', '15.49', '126.13', 551),
(208, '2017-04-09', 55, 37, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '131.58', '131.58', '0.00', '0.00', '131.58', '14.00', '18.42', '150.00', 550),
(209, '2017-04-09', 55, 9, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '79.32', '79.32', '0.00', '0.00', '79.32', '14.00', '11.10', '90.42', 21),
(210, '2017-04-09', 55, 10, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '79.32', '79.32', '0.00', '0.00', '79.32', '14.00', '11.10', '90.42', 21),
(211, '2017-04-09', 55, 11, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '79.32', '79.32', '0.00', '0.00', '79.32', '14.00', '11.10', '90.42', 33),
(212, '2017-04-09', 55, 12, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '79.32', '79.32', '0.00', '0.00', '79.32', '14.00', '11.10', '90.42', 19),
(213, '2017-04-09', 55, 13, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '79.32', '79.32', '0.00', '0.00', '79.32', '14.00', '11.10', '90.42', 9),
(214, '2017-04-09', 55, 14, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '79.32', '79.32', '0.00', '0.00', '79.32', '14.00', '11.10', '90.42', 8),
(215, '2017-04-09', 55, 15, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '79.32', '79.32', '0.00', '0.00', '79.32', '14.00', '11.10', '90.42', 7),
(216, '2017-04-09', 55, 17, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '79.32', '79.32', '0.00', '0.00', '79.32', '14.00', '11.10', '90.42', 6),
(217, '2017-04-09', 55, 18, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '79.32', '79.32', '0.00', '0.00', '79.32', '14.00', '11.10', '90.42', 5),
(218, '2017-04-09', 55, 64, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 50, '3.37', '168.50', '0.00', '0.00', '168.50', '14.00', '23.59', '192.09', -361),
(219, '2017-04-09', 56, 25, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 8, '13.83', '110.64', '0.00', '0.00', '110.64', '14.00', '15.49', '126.13', -8),
(220, '2017-04-09', 56, 72, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 15, '28.07', '421.05', '0.00', '0.00', '421.05', '14.00', '58.95', '480.00', -23),
(221, '2017-04-09', 57, 64, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 12, '3.37', '40.44', '0.00', '0.00', '40.44', '14.00', '5.66', '46.10', 62),
(222, '2017-04-09', 57, 73, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '6.02', '36.12', '0.00', '0.00', '36.12', '14.00', '5.06', '41.18', 6),
(223, '2017-04-09', 57, 60, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '6.02', '36.12', '0.00', '0.00', '36.12', '14.00', '5.06', '41.18', 0),
(224, '2017-04-09', 57, 61, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '9.02', '54.12', '0.00', '0.00', '54.12', '14.00', '7.58', '61.70', 138),
(225, '2017-04-09', 57, 65, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '6.98', '41.88', '0.00', '0.00', '41.88', '5.00', '2.09', '43.97', 0),
(226, '2017-04-09', 57, 72, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 3, '30.08', '90.24', '0.00', '0.00', '90.24', '14.00', '12.63', '102.87', 0),
(227, '2017-04-09', 58, 29, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '8.77', '52.62', '0.00', '0.00', '52.62', '14.00', '7.37', '59.99', 128),
(228, '2017-04-09', 58, 60, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 12, '6.02', '72.24', '0.00', '0.00', '72.24', '14.00', '10.11', '82.35', 116),
(229, '2017-04-09', 59, 60, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '6.02', '36.12', '0.00', '0.00', '36.12', '14.00', '5.06', '41.18', -6),
(230, '2017-04-09', 59, 61, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '9.02', '54.12', '0.00', '0.00', '54.12', '14.00', '7.58', '61.70', 138),
(231, '2017-04-09', 59, 62, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '12.03', '72.18', '0.00', '0.00', '72.18', '14.00', '10.11', '82.29', 132),
(232, '2017-04-09', 59, 68, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '13.06', '78.36', '0.00', '0.00', '78.36', '5.00', '3.92', '82.28', 126),
(233, '2017-04-09', 60, 68, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '13.06', '78.36', '0.00', '0.00', '78.36', '5.00', '3.92', '82.28', -6),
(234, '2017-04-09', 61, 41, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 12, '26.32', '315.84', '0.00', '0.00', '315.84', '14.00', '44.22', '360.06', -12),
(235, '2017-04-09', 61, 38, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 24, '5.26', '126.24', '0.00', '0.00', '126.24', '14.00', '17.67', '143.91', -36),
(236, '2017-04-09', 62, 10, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 2, '78.95', '157.90', '0.00', '0.00', '157.90', '14.00', '22.11', '180.01', 19),
(237, '2017-04-09', 62, 11, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 2, '78.95', '157.90', '0.00', '0.00', '157.90', '14.00', '22.11', '180.01', 31),
(238, '2017-04-09', 62, 12, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 2, '78.95', '157.90', '0.00', '0.00', '157.90', '14.00', '22.11', '180.01', 17),
(239, '2017-04-09', 62, 13, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '78.95', '78.95', '0.00', '0.00', '78.95', '14.00', '11.05', '90.00', 8),
(240, '2017-04-09', 62, 14, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '78.95', '78.95', '0.00', '0.00', '78.95', '14.00', '11.05', '90.00', 7),
(241, '2017-04-09', 62, 15, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '78.95', '78.95', '0.00', '0.00', '78.95', '14.00', '11.05', '90.00', 6),
(242, '2017-04-09', 62, 8, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '78.95', '78.95', '0.00', '0.00', '78.95', '14.00', '11.05', '90.00', 8),
(243, '2017-04-09', 62, 2, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '78.95', '78.95', '0.00', '0.00', '78.95', '14.00', '11.05', '90.00', 8),
(244, '2017-04-09', 62, 3, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '78.95', '78.95', '0.00', '0.00', '78.95', '14.00', '11.05', '90.00', 8),
(245, '2017-04-09', 63, 24, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '162.28', '162.28', '0.00', '0.00', '162.28', '14.00', '22.72', '185.00', 11),
(246, '2017-04-09', 63, 26, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 3, '23.36', '70.08', '0.00', '0.00', '70.08', '14.00', '9.81', '79.89', 25),
(247, '2017-04-09', 63, 28, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 3, '20.02', '60.06', '0.00', '0.00', '60.06', '14.00', '8.41', '68.47', 22),
(248, '2017-04-11', 64, 19, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 8, '13.83', '110.64', '0.00', '0.00', '110.64', '14.00', '15.49', '126.13', 543),
(249, '2017-04-11', 64, 20, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 8, '20.02', '160.16', '0.00', '0.00', '160.16', '14.00', '22.42', '182.58', 535),
(250, '2017-04-11', 64, 60, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 12, '6.02', '72.24', '0.00', '0.00', '72.24', '14.00', '10.11', '82.35', 523),
(251, '2017-04-11', 64, 61, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 12, '9.02', '108.24', '0.00', '0.00', '108.24', '14.00', '15.15', '123.39', 126),
(252, '2017-04-11', 65, 68, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 12, '13.06', '156.72', '0.00', '0.00', '156.72', '5.00', '7.84', '164.56', -12),
(253, '2017-04-11', 66, 60, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 12, '6.02', '72.24', '0.00', '0.00', '72.24', '14.00', '10.11', '82.35', -12),
(254, '2017-04-11', 66, 72, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '30.08', '180.48', '0.00', '0.00', '180.48', '14.00', '25.27', '205.75', -18),
(255, '2017-04-11', 67, 60, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 12),
(256, '2017-04-11', 68, 60, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 24, '6.02', '144.48', '0.00', '0.00', '144.48', '14.00', '20.23', '164.71', -24),
(257, '2017-04-11', 68, 61, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 12, '9.02', '108.24', '0.00', '0.00', '108.24', '14.00', '15.15', '123.39', 114),
(258, '2017-04-11', 69, 60, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 12, '6.02', '72.24', '0.00', '0.00', '72.24', '14.00', '10.11', '82.35', -12),
(259, '2017-04-11', 69, 68, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '13.06', '78.36', '0.00', '0.00', '78.36', '5.00', '3.92', '82.28', -18),
(260, '2017-04-11', 70, 60, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 24, '6.02', '144.48', '0.00', '0.00', '144.48', '14.00', '20.23', '164.71', -24),
(261, '2017-04-11', 70, 61, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 24, '9.02', '216.48', '0.00', '0.00', '216.48', '14.00', '30.31', '246.79', 90),
(262, '2017-04-11', 70, 62, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 12, '12.03', '144.36', '0.00', '0.00', '144.36', '14.00', '20.21', '164.57', 78),
(263, '2017-04-11', 70, 63, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '27.07', '162.42', '0.00', '0.00', '162.42', '14.00', '22.74', '185.16', 72),
(264, '2017-04-14', 71, 30, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 3, '33.05', '99.15', '0.00', '0.00', '99.15', '14.00', '13.88', '113.03', 9),
(265, '2017-04-14', 71, 29, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '8.77', '52.62', '0.00', '0.00', '52.62', '14.00', '7.37', '59.99', 124),
(266, '2017-04-14', 72, 19, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 8, '13.83', '110.64', '0.00', '0.00', '110.64', '14.00', '15.49', '126.13', 535),
(267, '2017-04-14', 72, 22, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 3, '43.38', '130.14', '0.00', '0.00', '130.14', '14.00', '18.22', '148.36', 532),
(268, '2017-04-14', 72, 25, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 3, '13.83', '41.49', '0.00', '0.00', '41.49', '14.00', '5.81', '47.30', 529),
(269, '2017-04-14', 72, 10, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '78.95', '78.95', '0.00', '0.00', '78.95', '14.00', '11.05', '90.00', 18),
(270, '2017-04-14', 72, 15, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '78.95', '78.95', '0.00', '0.00', '78.95', '14.00', '11.05', '90.00', 5),
(271, '2017-04-14', 72, 8, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '78.95', '78.95', '0.00', '0.00', '78.95', '14.00', '11.05', '90.00', 7),
(272, '2017-04-14', 72, 43, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '53.39', '53.39', '0.00', '0.00', '53.39', '14.00', '7.47', '60.86', 6),
(273, '2017-04-14', 72, 45, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '53.39', '53.39', '0.00', '0.00', '53.39', '14.00', '7.47', '60.86', 5),
(274, '2017-04-14', 72, 41, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 9, '52.63', '473.67', '0.00', '0.00', '473.67', '14.00', '66.31', '539.98', -4),
(275, '2017-04-14', 72, 41, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 9, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', -13),
(276, '2017-04-15', 73, 63, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 12, '27.07', '324.84', '0.00', '0.00', '324.84', '14.00', '45.48', '370.32', -12),
(277, '2017-04-16', 74, 21, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '24.56', '147.36', '0.00', '0.00', '147.36', '14.00', '20.63', '167.99', 132),
(278, '2017-04-16', 75, 41, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 18, '52.63', '947.34', '0.00', '0.00', '947.34', '14.00', '132.63', '1079.97', -18),
(279, '2017-04-16', 75, 41, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 18, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', -36),
(280, '2017-04-16', 75, 9, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '74.56', '447.36', '0.00', '0.00', '447.36', '14.00', '62.63', '509.99', 15),
(281, '2017-04-16', 75, 11, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '74.56', '447.36', '0.00', '0.00', '447.36', '14.00', '62.63', '509.99', 25),
(282, '2017-04-16', 75, 12, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 12, '74.56', '894.72', '0.00', '0.00', '894.72', '14.00', '125.26', '1019.98', 5),
(283, '2017-04-16', 75, 13, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 3, '74.56', '223.68', '0.00', '0.00', '223.68', '14.00', '31.32', '255.00', 5),
(284, '2017-04-16', 75, 15, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 3, '74.56', '223.68', '0.00', '0.00', '223.68', '14.00', '31.32', '255.00', 2),
(285, '2017-04-16', 75, 17, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 3, '74.56', '223.68', '0.00', '0.00', '223.68', '14.00', '31.32', '255.00', -1),
(286, '2017-04-16', 75, 1, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 12, '74.56', '894.72', '0.00', '0.00', '894.72', '14.00', '125.26', '1019.98', -3),
(287, '2017-04-16', 75, 4, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '74.56', '447.36', '0.00', '0.00', '447.36', '14.00', '62.63', '509.99', 3),
(288, '2017-04-16', 76, 41, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 18, '52.63', '947.34', '0.00', '0.00', '947.34', '14.00', '132.63', '1079.97', -18);
INSERT INTO `item_movment` (`id`, `date`, `invoice_no`, `item_id`, `pur_qty`, `pur_rate`, `gross_pur`, `pur_discount_rate`, `pur_discount`, `pur_base_amt`, `pur_vat_rate`, `pur_vat`, `pur_value`, `sales_qty`, `sales_rate`, `gross_sales`, `sales_discount_rate`, `sales_discount`, `sales_base_amt`, `sales_vat_rate`, `sales_vat`, `sales_value`, `balance_qty`) VALUES
(289, '2017-04-16', 76, 41, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 18, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', -36),
(290, '2017-04-16', 76, 8, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '78.95', '78.95', '0.00', '0.00', '78.95', '14.00', '11.05', '90.00', 6),
(291, '2017-04-16', 76, 1, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '78.95', '78.95', '0.00', '0.00', '78.95', '14.00', '11.05', '90.00', -4),
(292, '2017-04-16', 76, 9, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 2, '78.95', '157.90', '0.00', '0.00', '157.90', '14.00', '22.11', '180.01', 13),
(293, '2017-04-16', 76, 10, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '78.95', '78.95', '0.00', '0.00', '78.95', '14.00', '11.05', '90.00', 17),
(294, '2017-04-16', 76, 11, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '78.95', '78.95', '0.00', '0.00', '78.95', '14.00', '11.05', '90.00', 24),
(295, '2017-04-16', 77, 41, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 12, '52.63', '631.56', '0.00', '0.00', '631.56', '14.00', '88.42', '719.98', -12),
(296, '2017-04-16', 77, 41, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 12, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', -24),
(297, '2017-04-16', 77, 19, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 25, '13.16', '329.00', '0.00', '0.00', '329.00', '14.00', '46.06', '375.06', 510),
(298, '2017-04-16', 77, 25, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 25, '13.16', '329.00', '0.00', '0.00', '329.00', '14.00', '46.06', '375.06', 485),
(299, '2017-04-16', 77, 9, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 12, '78.95', '947.40', '0.00', '0.00', '947.40', '14.00', '132.64', '1080.04', 1),
(300, '2017-04-16', 77, 21, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 15, '24.56', '368.40', '0.00', '0.00', '368.40', '14.00', '51.58', '419.98', 117),
(301, '2017-04-16', 78, 20, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 15, '19.83', '297.45', '0.00', '0.00', '297.45', '14.00', '41.64', '339.09', -15),
(302, '2017-04-16', 79, 20, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 15, '19.83', '297.45', '0.00', '0.00', '297.45', '14.00', '41.64', '339.09', -15),
(303, '2017-04-16', 79, 50, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 2, '35.09', '70.18', '0.00', '0.00', '70.18', '14.00', '9.83', '80.01', -17),
(304, '2017-04-16', 79, 50, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 2, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', -19),
(305, '2017-04-16', 79, 26, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 8, '23.36', '186.88', '0.00', '0.00', '186.88', '14.00', '26.16', '213.04', 17),
(306, '2017-04-16', 79, 29, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 12, '8.77', '105.24', '0.00', '0.00', '105.24', '14.00', '14.73', '119.97', 118),
(307, '2017-04-16', 80, 21, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 15, '26.44', '396.60', '0.00', '0.00', '396.60', '14.00', '55.52', '452.12', 102),
(308, '2017-04-16', 80, 10, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '78.95', '78.95', '0.00', '0.00', '78.95', '14.00', '11.05', '90.00', 16),
(309, '2017-04-16', 80, 11, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 2, '78.95', '157.90', '0.00', '0.00', '157.90', '14.00', '22.11', '180.01', 22),
(310, '2017-04-16', 80, 12, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '78.95', '78.95', '0.00', '0.00', '78.95', '14.00', '11.05', '90.00', 4),
(311, '2017-04-16', 80, 14, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 2, '78.95', '157.90', '0.00', '0.00', '157.90', '14.00', '22.11', '180.01', 5),
(312, '2017-04-16', 81, 9, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 2, '77.19', '154.38', '0.00', '0.00', '154.38', '14.00', '21.61', '175.99', -1),
(313, '2017-04-16', 81, 10, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 2, '77.19', '154.38', '0.00', '0.00', '154.38', '14.00', '21.61', '175.99', 14),
(314, '2017-04-16', 81, 11, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 2, '77.19', '154.38', '0.00', '0.00', '154.38', '14.00', '21.61', '175.99', 20),
(315, '2017-04-16', 81, 12, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 2, '77.19', '154.38', '0.00', '0.00', '154.38', '14.00', '21.61', '175.99', 2),
(316, '2017-04-16', 81, 13, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 2, '77.19', '154.38', '0.00', '0.00', '154.38', '14.00', '21.61', '175.99', 3),
(317, '2017-04-16', 81, 14, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 2, '77.19', '154.38', '0.00', '0.00', '154.38', '14.00', '21.61', '175.99', 3),
(318, '2017-04-16', 81, 19, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '13.83', '82.98', '0.00', '0.00', '82.98', '14.00', '11.62', '94.60', 504),
(319, '2017-04-16', 81, 21, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '26.70', '160.20', '0.00', '0.00', '160.20', '14.00', '22.43', '182.63', 96),
(320, '2017-04-16', 82, 10, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 2, '78.95', '157.90', '0.00', '0.00', '157.90', '14.00', '22.11', '180.01', 12),
(321, '2017-04-16', 82, 11, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 2, '78.95', '157.90', '0.00', '0.00', '157.90', '14.00', '22.11', '180.01', 18),
(322, '2017-04-16', 82, 12, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 2, '78.95', '157.90', '0.00', '0.00', '157.90', '14.00', '22.11', '180.01', 0),
(323, '2017-04-16', 82, 13, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 2, '78.95', '157.90', '0.00', '0.00', '157.90', '14.00', '22.11', '180.01', 1),
(324, '2017-04-16', 82, 14, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 2, '78.95', '157.90', '0.00', '0.00', '157.90', '14.00', '22.11', '180.01', 1),
(325, '2017-04-16', 83, 19, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '13.83', '82.98', '0.00', '0.00', '82.98', '14.00', '11.62', '94.60', 498),
(326, '2017-04-16', 83, 21, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 15, '24.56', '368.40', '0.00', '0.00', '368.40', '14.00', '51.58', '419.98', 81),
(327, '2017-04-16', 83, 12, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 3, '74.56', '223.68', '0.00', '0.00', '223.68', '14.00', '31.32', '255.00', -3),
(328, '2017-04-16', 83, 14, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 3, '74.56', '223.68', '0.00', '0.00', '223.68', '14.00', '31.32', '255.00', -2),
(329, '2017-04-16', 84, 29, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 25, '8.77', '219.25', '0.00', '0.00', '219.25', '14.00', '30.70', '249.95', 93),
(330, '2017-04-16', 84, 72, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 15, '28.07', '421.05', '0.00', '0.00', '421.05', '14.00', '58.95', '480.00', 78),
(331, '2017-04-16', 0, 68, 36, '14.11', '507.96', '14.29', '72.45', '434.55', '5.00', '21.70', '455.70', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 36),
(332, '2017-04-16', 0, 60, 576, '6.50', '3744.00', '14.29', '535.02', '3208.98', '14.00', '449.12', '3657.12', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 612),
(333, '2017-04-16', 0, 74, 48, '19.49', '935.52', '14.29', '133.61', '801.39', '14.00', '112.14', '913.14', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 660),
(334, '2017-04-16', 0, 72, 48, '32.49', '1559.52', '0.00', '0.00', '1559.00', '14.00', '218.26', '1777.26', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 708),
(335, '2017-04-16', 0, 72, 12, '0.00', '0.00', '0.00', '0.00', '0.00', '14.00', '0.00', '0.00', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 720),
(336, '2017-04-06', 0, 29, 300, '9.43', '2829.00', '0.00', '0.00', '2829.00', '14.00', '396.06', '3225.06', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 393),
(337, '2017-04-16', 85, 29, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 10, '8.77', '87.70', '0.00', '0.00', '87.70', '14.00', '12.28', '99.98', 383),
(338, '2017-04-16', 85, 33, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '114.42', '114.42', '0.00', '0.00', '114.42', '14.00', '16.02', '130.44', 8),
(339, '2017-04-16', 85, 36, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '131.58', '131.58', '0.00', '0.00', '131.58', '14.00', '18.42', '150.00', 10),
(340, '2017-04-16', 85, 74, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '18.05', '108.30', '0.00', '0.00', '108.30', '14.00', '15.16', '123.46', 42),
(341, '2017-04-16', 85, 72, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 15, '28.07', '421.05', '0.00', '0.00', '421.05', '14.00', '58.95', '480.00', 33),
(342, '2017-04-16', 86, 19, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 8, '13.83', '110.64', '0.00', '0.00', '110.64', '14.00', '15.49', '126.13', 490),
(343, '2017-04-16', 86, 29, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '8.77', '52.62', '0.00', '0.00', '52.62', '14.00', '7.37', '59.99', 377),
(344, '2017-04-16', 87, 9, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 2, '77.19', '154.38', '0.00', '0.00', '154.38', '14.00', '21.61', '175.99', -3),
(345, '2017-04-16', 87, 10, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 2, '77.19', '154.38', '0.00', '0.00', '154.38', '14.00', '21.61', '175.99', 10),
(346, '2017-04-16', 87, 13, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '77.19', '77.19', '0.00', '0.00', '77.19', '14.00', '10.81', '88.00', 0),
(347, '2017-04-16', 87, 67, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '12.03', '72.18', '0.00', '0.00', '72.18', '14.00', '10.11', '82.29', -6),
(348, '2017-04-16', 88, 29, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 16, '10.37', '165.92', '0.00', '0.00', '165.92', '14.00', '23.23', '189.15', 361),
(349, '2017-04-16', 88, 19, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 16, '13.83', '221.28', '0.00', '0.00', '221.28', '14.00', '30.98', '252.26', 474),
(350, '2017-04-16', 88, 20, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 8, '20.02', '160.16', '0.00', '0.00', '160.16', '14.00', '22.42', '182.58', 466),
(351, '2017-04-16', 88, 21, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 8, '26.70', '213.60', '0.00', '0.00', '213.60', '14.00', '29.90', '243.50', 73),
(352, '2017-04-16', 88, 26, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 8, '23.36', '186.88', '0.00', '0.00', '186.88', '14.00', '26.16', '213.04', 9),
(353, '2017-04-16', 88, 50, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 8, '26.70', '213.60', '0.00', '0.00', '213.60', '14.00', '29.90', '243.50', 1),
(354, '2017-04-16', 88, 60, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 12, '6.02', '72.24', '0.00', '0.00', '72.24', '14.00', '10.11', '82.35', 564),
(355, '2017-04-16', 88, 61, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 12, '9.02', '108.24', '0.00', '0.00', '108.24', '14.00', '15.15', '123.39', 78),
(356, '2017-04-16', 88, 62, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '12.03', '72.18', '0.00', '0.00', '72.18', '14.00', '10.11', '82.29', 72),
(357, '2017-04-16', 88, 66, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 2, '14.04', '28.08', '0.00', '0.00', '28.08', '14.00', '3.93', '32.01', 70),
(358, '2017-04-17', 89, 9, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '77.19', '463.14', '0.00', '0.00', '463.14', '14.00', '64.84', '527.98', -9),
(359, '2017-04-17', 89, 10, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '77.19', '463.14', '0.00', '0.00', '463.14', '14.00', '64.84', '527.98', 4),
(360, '2017-04-17', 89, 11, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '77.19', '463.14', '0.00', '0.00', '463.14', '14.00', '64.84', '527.98', 12),
(361, '2017-04-17', 89, 12, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '77.19', '463.14', '0.00', '0.00', '463.14', '14.00', '64.84', '527.98', -9),
(362, '2017-04-17', 89, 13, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '77.19', '463.14', '0.00', '0.00', '463.14', '14.00', '64.84', '527.98', -6),
(363, '2017-04-17', 89, 14, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '77.19', '463.14', '0.00', '0.00', '463.14', '14.00', '64.84', '527.98', -8),
(364, '2017-04-17', 89, 15, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 3, '77.19', '231.57', '0.00', '0.00', '231.57', '14.00', '32.42', '263.99', -1),
(365, '2017-04-17', 89, 17, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 3, '77.19', '231.57', '0.00', '0.00', '231.57', '14.00', '32.42', '263.99', -4),
(366, '2017-04-17', 89, 18, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 3, '77.19', '231.57', '0.00', '0.00', '231.57', '14.00', '32.42', '263.99', -7),
(367, '2017-04-17', 90, 2, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '78.95', '78.95', '0.00', '0.00', '78.95', '14.00', '11.05', '90.00', 7),
(368, '2017-04-17', 90, 3, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '78.95', '78.95', '0.00', '0.00', '78.95', '14.00', '11.05', '90.00', 7),
(369, '2017-04-17', 90, 4, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '78.95', '78.95', '0.00', '0.00', '78.95', '14.00', '11.05', '90.00', 2),
(370, '2017-04-17', 90, 10, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '78.95', '78.95', '0.00', '0.00', '78.95', '14.00', '11.05', '90.00', 3),
(371, '2017-04-17', 90, 11, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '78.95', '78.95', '0.00', '0.00', '78.95', '14.00', '11.05', '90.00', 11),
(372, '2017-04-17', 90, 12, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '78.95', '78.95', '0.00', '0.00', '78.95', '14.00', '11.05', '90.00', -10),
(373, '2017-04-17', 90, 13, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1, '78.95', '78.95', '0.00', '0.00', '78.95', '14.00', '11.05', '90.00', -7),
(374, '2017-04-17', 90, 32, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 2, '114.42', '228.84', '0.00', '0.00', '228.84', '14.00', '32.04', '260.88', 9),
(375, '2017-04-17', 91, 19, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 8, '13.83', '110.64', '0.00', '0.00', '110.64', '14.00', '15.49', '126.13', 466),
(376, '2017-04-17', 91, 29, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '8.77', '52.62', '0.00', '0.00', '52.62', '14.00', '7.37', '59.99', 355),
(377, '2017-04-17', 92, 27, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 8, '10.37', '82.96', '0.00', '0.00', '82.96', '14.00', '11.61', '94.57', -8),
(378, '2017-04-17', 92, 25, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 8, '13.83', '110.64', '0.00', '0.00', '110.64', '14.00', '15.49', '126.13', -16),
(379, '2017-04-17', 92, 29, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 6, '8.77', '52.62', '0.00', '0.00', '52.62', '14.00', '7.37', '59.99', 349),
(380, '2017-04-17', 92, 64, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 25, '3.36', '84.00', '0.00', '0.00', '84.00', '14.00', '11.76', '95.76', 62),
(381, '2017-04-17', 93, 75, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 3, '54.14', '162.42', '0.00', '0.00', '162.42', '14.00', '22.74', '185.16', -3);

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
(1, 1, -4),
(2, 2, 7),
(3, 3, 7),
(4, 4, 2),
(5, 5, 11),
(6, 9, -9),
(7, 10, 3),
(8, 11, 11),
(9, 12, -10),
(10, 13, -7),
(11, 14, -8),
(12, 15, -1),
(13, 21, 73),
(14, 19, 466),
(15, 24, 11),
(16, 29, 349),
(17, 26, 9),
(18, 30, 9),
(19, 32, 9),
(20, 33, 8),
(21, 34, 9),
(22, 36, 10),
(23, 35, 4),
(24, 8, 6),
(25, 64, 62),
(26, 64, 62),
(27, 61, 78),
(28, 65, 12),
(29, 68, 36),
(30, 60, 564),
(31, 74, 42),
(32, 72, 33),
(33, 72, 33);

-- --------------------------------------------------------

--
-- Table structure for table `order_book`
--

CREATE TABLE `order_book` (
  `order_id` bigint(100) NOT NULL,
  `order_date` date NOT NULL,
  `client_id` bigint(100) NOT NULL,
  `item_id` bigint(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `qty` int(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `value` decimal(10,2) NOT NULL,
  `st` double NOT NULL,
  `tax` decimal(10,2) NOT NULL,
  `netvalue` decimal(10,2) NOT NULL,
  `currency_id` bigint(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `invoice_no` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `pur_id` bigint(100) NOT NULL,
  `date` date NOT NULL,
  `invoice_no` bigint(100) NOT NULL,
  `vendor_id` bigint(100) NOT NULL,
  `total_gross` decimal(10,2) NOT NULL,
  `total_discount` decimal(10,2) NOT NULL,
  `total_taxable` decimal(10,2) NOT NULL,
  `total_vat` decimal(10,2) NOT NULL,
  `adjustval` decimal(10,2) NOT NULL,
  `total_net` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`pur_id`, `date`, `invoice_no`, `vendor_id`, `total_gross`, `total_discount`, `total_taxable`, `total_vat`, `adjustval`, `total_net`) VALUES
(1, '2017-04-01', 0, 1, '39892.23', '0.00', '39882.00', '5583.48', '-5445.48', 40020),
(2, '2017-03-31', 0, 1, '4401.60', '436.50', '3964.50', '519.99', '-88.99', 4394),
(3, '2017-04-16', 0, 1, '6747.00', '741.08', '6003.92', '801.22', '-133.22', 6670),
(4, '2017-04-06', 0, 1, '2829.00', '0.00', '2829.00', '396.06', '-752.06', 2473);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sales_id` bigint(100) NOT NULL,
  `date` date NOT NULL,
  `invoice_no` bigint(100) NOT NULL,
  `client_id` bigint(100) NOT NULL,
  `total_gross` decimal(10,2) NOT NULL,
  `total_discount` decimal(10,2) NOT NULL,
  `total_taxable` decimal(10,2) NOT NULL,
  `total_vat` decimal(10,2) NOT NULL,
  `total_net` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sales_id`, `date`, `invoice_no`, `client_id`, `total_gross`, `total_discount`, `total_taxable`, `total_vat`, `total_net`) VALUES
(1, '2017-04-01', 1, 1, '124.86', '0.00', '124.86', '17.48', '142.00'),
(2, '2017-04-01', 2, 2, '398.11', '0.00', '398.11', '55.73', '454.00'),
(3, '2017-04-01', 3, 3, '860.44', '0.00', '860.44', '106.36', '967.00'),
(4, '2017-04-01', 4, 4, '649.68', '0.00', '649.68', '90.96', '741.00'),
(5, '2017-04-01', 5, 5, '708.19', '0.00', '708.19', '70.94', '779.00'),
(6, '2017-04-01', 6, 6, '110.64', '0.00', '110.64', '15.49', '126.00'),
(7, '2017-04-01', 7, 7, '126.36', '0.00', '126.36', '17.69', '144.00'),
(8, '2017-04-02', 8, 9, '252.72', '0.00', '252.72', '35.38', '288.00'),
(9, '2017-04-02', 9, 10, '396.74', '0.00', '396.74', '48.01', '445.00'),
(10, '2017-04-02', 10, 11, '0.00', '0.00', '0.00', '0.00', '0.00'),
(11, '2017-04-02', 11, 12, '535.04', '0.00', '535.04', '74.91', '610.00'),
(12, '2017-04-02', 12, 13, '3031.92', '0.00', '3031.92', '424.47', '3456.00'),
(13, '2017-04-02', 13, 14, '0.00', '0.00', '0.00', '0.00', '0.00'),
(14, '2017-04-02', 14, 15, '0.00', '0.00', '0.00', '0.00', '0.00'),
(15, '2017-04-02', 15, 16, '310.74', '0.00', '310.74', '43.50', '354.00'),
(16, '2017-04-02', 16, 17, '189.48', '0.00', '189.48', '26.53', '216.00'),
(17, '2017-04-02', 17, 18, '225.28', '0.00', '225.28', '31.54', '257.00'),
(18, '2017-04-02', 18, 19, '1473.72', '0.00', '1473.72', '206.32', '1680.00'),
(19, '2017-04-02', 19, 20, '1267.74', '0.00', '1267.74', '177.48', '1445.00'),
(20, '2017-04-02', 20, 14, '363.61', '0.00', '363.61', '36.78', '400.00'),
(21, '2017-04-02', 21, 15, '530.07', '0.00', '530.07', '74.21', '604.00'),
(22, '2017-04-04', 22, 21, '507.02', '0.00', '507.02', '70.98', '578.00'),
(23, '2017-04-04', 23, 22, '1048.30', '0.00', '1048.30', '146.77', '1195.00'),
(24, '2017-04-04', 24, 23, '531.52', '0.00', '531.52', '74.41', '606.00'),
(25, '2017-04-04', 25, 24, '184.26', '0.00', '184.26', '25.80', '210.00'),
(26, '2017-04-04', 26, 25, '564.45', '0.00', '564.45', '79.02', '643.00'),
(27, '2017-04-04', 27, 26, '228.08', '0.00', '228.08', '31.93', '260.00'),
(28, '2017-04-04', 28, 27, '180.48', '0.00', '180.48', '25.27', '206.00'),
(29, '2017-04-04', 29, 28, '280.14', '0.00', '280.14', '21.59', '302.00'),
(30, '2017-04-04', 30, 29, '0.00', '0.00', '0.00', '0.00', '0.00'),
(31, '2017-04-04', 31, 31, '156.00', '0.00', '156.00', '14.30', '170.00'),
(32, '2017-04-04', 32, 32, '126.36', '0.00', '126.36', '17.69', '144.00'),
(33, '2017-04-06', 33, 34, '866.88', '0.00', '866.88', '121.36', '988.00'),
(34, '2017-04-06', 34, 40, '378.93', '0.00', '378.93', '53.05', '432.00'),
(35, '2017-04-06', 35, 45, '430.20', '0.00', '430.20', '60.23', '490.00'),
(36, '2017-04-06', 36, 46, '105.24', '0.00', '105.24', '14.73', '120.00'),
(37, '2017-04-06', 37, 42, '477.18', '0.00', '477.18', '59.75', '537.00'),
(38, '2017-04-06', 38, 35, '640.30', '0.00', '640.30', '89.64', '730.00'),
(39, '2017-04-06', 39, 37, '811.13', '0.00', '811.13', '113.56', '925.00'),
(40, '2017-04-06', 40, 47, '852.84', '0.00', '852.84', '119.40', '972.00'),
(41, '2017-04-06', 41, 36, '180.48', '0.00', '180.48', '25.27', '206.00'),
(42, '2017-04-06', 42, 38, '180.48', '0.00', '180.48', '25.27', '206.00'),
(43, '2017-04-06', 43, 39, '252.72', '0.00', '252.72', '35.38', '288.00'),
(44, '2017-04-06', 44, 43, '160.98', '0.00', '160.98', '15.00', '176.00'),
(45, '2017-04-06', 45, 44, '0.00', '0.00', '0.00', '0.00', '0.00'),
(46, '2017-04-07', 46, 49, '315.78', '0.00', '315.78', '44.21', '360.00'),
(47, '2017-04-07', 47, 50, '227.98', '0.00', '227.98', '31.92', '260.00'),
(48, '2017-04-07', 48, 51, '421.05', '0.00', '421.05', '58.95', '480.00'),
(49, '2017-04-07', 49, 52, '114.12', '0.00', '114.12', '12.21', '126.00'),
(50, '2017-04-07', 50, 53, '421.05', '0.00', '421.05', '58.95', '480.00'),
(51, '2017-04-07', 51, 54, '162.48', '0.00', '162.48', '22.75', '185.00'),
(52, '2017-04-09', 52, 55, '216.72', '0.00', '216.72', '30.34', '247.00'),
(53, '2017-04-09', 53, 56, '0.00', '0.00', '0.00', '0.00', '0.00'),
(54, '2017-04-09', 54, 57, '180.48', '0.00', '180.48', '25.27', '206.00'),
(55, '2017-04-09', 55, 6, '1124.60', '0.00', '1124.60', '157.44', '1282.00'),
(56, '2017-04-09', 56, 58, '531.69', '0.00', '531.69', '74.44', '606.00'),
(57, '2017-04-09', 57, 59, '298.92', '0.00', '298.92', '38.08', '337.00'),
(58, '2017-04-09', 58, 60, '124.86', '0.00', '124.86', '17.48', '142.00'),
(59, '2017-04-09', 59, 61, '240.78', '0.00', '240.78', '26.66', '267.00'),
(60, '2017-04-09', 60, 5, '78.36', '0.00', '78.36', '3.92', '82.00'),
(61, '2017-04-09', 61, 62, '442.08', '0.00', '442.08', '61.89', '504.00'),
(62, '2017-04-09', 62, 63, '947.40', '0.00', '947.40', '132.64', '1080.00'),
(63, '2017-04-09', 63, 20, '292.42', '0.00', '292.42', '40.94', '333.00'),
(64, '2017-04-11', 64, 66, '451.28', '0.00', '451.28', '63.18', '514.00'),
(65, '2017-04-11', 65, 67, '156.72', '0.00', '156.72', '7.84', '165.00'),
(66, '2017-04-11', 66, 68, '252.72', '0.00', '252.72', '35.38', '288.00'),
(67, '2017-04-11', 67, 69, '0.00', '0.00', '0.00', '0.00', '0.00'),
(68, '2017-04-11', 68, 70, '252.72', '0.00', '252.72', '35.38', '288.00'),
(69, '2017-04-11', 69, 71, '150.60', '0.00', '150.60', '14.03', '165.00'),
(70, '2017-04-11', 70, 33, '667.74', '0.00', '667.74', '93.48', '761.00'),
(71, '2017-04-14', 71, 72, '151.77', '0.00', '151.77', '21.25', '173.00'),
(72, '2017-04-14', 72, 43, '1099.57', '0.00', '1099.57', '153.94', '1254.00'),
(73, '2017-04-15', 73, 73, '324.84', '0.00', '324.84', '45.48', '370.00'),
(74, '2017-04-16', 74, 74, '147.36', '0.00', '147.36', '20.63', '168.00'),
(75, '2017-04-16', 75, 75, '4749.90', '0.00', '4749.90', '664.99', '5415.00'),
(76, '2017-04-16', 76, 76, '1421.04', '0.00', '1421.04', '198.95', '1620.00'),
(77, '2017-04-16', 77, 77, '2605.36', '0.00', '2605.36', '364.75', '2970.00'),
(78, '2017-04-16', 78, 78, '297.45', '0.00', '297.45', '41.64', '339.00'),
(79, '2017-04-16', 79, 79, '659.75', '0.00', '659.75', '92.37', '752.00'),
(80, '2017-04-16', 80, 64, '870.30', '0.00', '870.30', '121.84', '992.00'),
(81, '2017-04-16', 81, 65, '1169.46', '0.00', '1169.46', '163.72', '1333.00'),
(82, '2017-04-16', 82, 80, '789.50', '0.00', '789.50', '110.53', '900.00'),
(83, '2017-04-16', 83, 81, '898.74', '0.00', '898.74', '125.82', '1025.00'),
(84, '2017-04-16', 84, 82, '640.30', '0.00', '640.30', '89.64', '730.00'),
(85, '2017-04-16', 85, 6, '863.05', '0.00', '863.05', '120.83', '984.00'),
(86, '2017-04-16', 86, 1, '163.26', '0.00', '163.26', '22.86', '186.00'),
(87, '2017-04-16', 87, 5, '458.13', '0.00', '458.13', '64.14', '522.00'),
(88, '2017-04-16', 88, 83, '1442.18', '0.00', '1442.18', '201.91', '1644.00'),
(89, '2017-04-17', 89, 84, '3473.55', '0.00', '3473.55', '486.30', '3960.00'),
(90, '2017-04-17', 90, 85, '781.49', '0.00', '781.49', '109.41', '891.00'),
(91, '2017-04-17', 91, 88, '163.26', '0.00', '163.26', '22.86', '186.00'),
(92, '2017-04-17', 92, 12, '330.22', '0.00', '330.22', '46.23', '376.00'),
(93, '2017-04-17', 93, 86, '162.42', '0.00', '162.42', '22.74', '185.00');

-- --------------------------------------------------------

--
-- Table structure for table `tax`
--

CREATE TABLE `tax` (
  `tax_id` bigint(100) NOT NULL,
  `cat` varchar(50) NOT NULL,
  `tax` varchar(50) NOT NULL,
  `rate` double NOT NULL,
  `exmpt` decimal(50,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tax`
--

INSERT INTO `tax` (`tax_id`, `cat`, `tax`, `rate`, `exmpt`) VALUES
(1, 'VAT', 'Vat Tax 5%', 5, '0'),
(2, 'VAT', 'Vat Tax 14%', 14, '0');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `unit_id` bigint(100) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`unit_id`, `unit`, `description`) VALUES
(1, 'U', 'Unit');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(100) NOT NULL,
  `loginid` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `loginid`, `password`, `status`, `type`) VALUES
(1, 'jaimaa', 'admin@123', 'Active', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `vendor_id` bigint(100) NOT NULL,
  `vendor_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
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
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`vendor_id`, `vendor_name`, `address`, `city`, `state`, `country`, `pin`, `contact`, `mobile`, `mail`, `PAN`, `TIN`, `ST`, `CST`) VALUES
(1, 'GANESH DISTRIBUTOR', 'JIWAJI CHOWK BADA ', 'GWALIOR', 'M.P.', 'India', '474001', '', '9098319067', '', '', '23779061173', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`area_id`);

--
-- Indexes for table `autogen`
--
ALTER TABLE `autogen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`bank_id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `company_profile`
--
ALTER TABLE `company_profile`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `creditor`
--
ALTER TABLE `creditor`
  ADD PRIMARY KEY (`trn_id`);

--
-- Indexes for table `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`currency_id`);

--
-- Indexes for table `currency_value`
--
ALTER TABLE `currency_value`
  ADD PRIMARY KEY (`cur_val_id`);

--
-- Indexes for table `debtors`
--
ALTER TABLE `debtors`
  ADD PRIMARY KEY (`trn_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_id`);

--
-- Indexes for table `invoice_value`
--
ALTER TABLE `invoice_value`
  ADD PRIMARY KEY (`val_id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `item_movment`
--
ALTER TABLE `item_movment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_stock`
--
ALTER TABLE `item_stock`
  ADD PRIMARY KEY (`stock_id`);

--
-- Indexes for table `order_book`
--
ALTER TABLE `order_book`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`pur_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sales_id`);

--
-- Indexes for table `tax`
--
ALTER TABLE `tax`
  ADD PRIMARY KEY (`tax_id`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`unit_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`vendor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `area_id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `autogen`
--
ALTER TABLE `autogen`
  MODIFY `id` bigint(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `bank_id` bigint(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
--
-- AUTO_INCREMENT for table `company_profile`
--
ALTER TABLE `company_profile`
  MODIFY `company_id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `creditor`
--
ALTER TABLE `creditor`
  MODIFY `trn_id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `currency`
--
ALTER TABLE `currency`
  MODIFY `currency_id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `currency_value`
--
ALTER TABLE `currency_value`
  MODIFY `cur_val_id` bigint(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `debtors`
--
ALTER TABLE `debtors`
  MODIFY `trn_id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoice_id` bigint(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `invoice_value`
--
ALTER TABLE `invoice_value`
  MODIFY `val_id` bigint(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `item_movment`
--
ALTER TABLE `item_movment`
  MODIFY `id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=382;
--
-- AUTO_INCREMENT for table `item_stock`
--
ALTER TABLE `item_stock`
  MODIFY `stock_id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `order_book`
--
ALTER TABLE `order_book`
  MODIFY `order_id` bigint(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `pur_id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sales_id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
--
-- AUTO_INCREMENT for table `tax`
--
ALTER TABLE `tax`
  MODIFY `tax_id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `unit_id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `vendor_id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
