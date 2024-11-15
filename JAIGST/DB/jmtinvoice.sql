-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2017 at 12:45 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jmtinvoice`
--

-- --------------------------------------------------------

--
-- Table structure for table `autogen`
--

CREATE TABLE `autogen` (
  `id` bigint(100) NOT NULL,
  `inv` bigint(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `autogen`
--

INSERT INTO `autogen` (`id`, `inv`) VALUES
(5, 1),
(6, 2),
(7, 3),
(8, 4),
(9, 5),
(10, 6),
(11, 7),
(12, 8),
(13, 9),
(14, 10),
(15, 11),
(16, 12),
(17, 13),
(18, 14),
(19, 15),
(20, 16),
(21, 17),
(22, 18),
(23, 19),
(24, 20),
(25, 21),
(26, 22),
(27, 23),
(28, 24),
(29, 25);

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

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`bank_id`, `bank`, `bank_add`, `account_name`, `account_no`, `account_type`, `IFSC`, `SWIFT`) VALUES
(1, 'IndusInd Bank', 'City Center, Thatipur, Gwalior, M.P. India', 'D-Sys Data Solutions Private Limited', '0123-K28612-060', 'Current', 'INDB0000123', 'INDB INBB XXX');

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
(2, 1),
(3, 2),
(4, 3),
(5, 4),
(6, 5),
(7, 6),
(8, 5),
(9, 7),
(10, 7);

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
(1, 'Development', 'Software or Website Development'),
(2, 'Services', 'Services Provides By Company'),
(3, 'Domain & Hosting', 'Domain Name and Web Hosting'),
(4, 'Dummy', 'Dummy Product');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` bigint(100) NOT NULL,
  `client_name` varchar(50) NOT NULL,
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
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `client_name`, `address`, `city`, `state`, `country`, `pin`, `contact`, `mobile`, `mail`, `PAN`, `TIN`, `ST`, `CST`) VALUES
(2, 'RSI Stone World Pvt. Ltd.', 'Purani Chavani', 'Gwalior', 'Madhya Pradesh', 'India', '474001', '0751-2323228', '+918686898925', 'rsi@gmail.com', '', '232323232323', '', ''),
(3, 'Chirpn IT Solutions', '410 / 29-31 Lexington Drive,\r\nBella Vista,', 'NSW-2153,', '', 'Australia', '', '', '', '', '', '', '', ''),
(4, 'Bring Smile', '', 'Sydeny', '', 'Australia', '', '', '', '', '', '', '', ''),
(5, 'Galav Rishi ITI college', '', 'Gwalior', 'Madhya Pradesh', 'India', '474001', '', '', '', '', '', '', ''),
(6, 'Global Ritz Protection Pte. Ltd.', 'LTC Building B, 12 Arumugam Road', '#03-11', '', 'Singapore', '409958', '', '', '', '', '', '', ''),
(7, 'Paylessflights', '59A MARION STREET HARRIS PARK', '', 'NSW 2150', 'Australia', '', '1800 984 045', '', 'info@paylessflights.com.au', '', '', '', ''),
(8, 'BVM College of Management Education', 'Yamuna Nagar, Darpan Colony, Thatipur', 'Gwalior', 'Madhya Pradesh', 'India', '474011', '0751-2341161', '', 'bvmgwl@gmail.com', '', '', '', ''),
(9, 'Paramount Plaster', 'Om Plaza 1st Floor, 7 - Krishna Vihar, Govindpuri Sachin Tendulkar Marg,', 'Gwalior', 'Madhya Pradesh', 'India', '474011', '0751 - 2349293', '9893078889', 'paramountplasters@gmail.com', '', '', '', ''),
(10, 'New Dummy', 'Xyz', 'Gwalior', 'M.P.', 'India', '474001', '', '', '', '', '335533665588', '', '');

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
(1, 'D-Sys Data Solutions Pvt. Ltd.', 'Om Plaza, Sachin Tendulkar Road, New Govindpuri', 'Gwalior', 'Madhya Pradesh', 'India', '474011', '0751-2233736', '+919685547414, 9926216669', 'invoice@dsds.co.in', 'www.dsds.co.in', 'AADCD2129D', '2233777333', 'AADVD2129DSD001', '0000');

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
(1, 'INR', 'Indian Rupees', 'India'),
(2, 'AUD', 'Australian Dollar', 'Australia'),
(3, 'USD', 'United State Dollar', 'United State');

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
-- Dumping data for table `currency_value`
--

INSERT INTO `currency_value` (`cur_val_id`, `date`, `invoice_id`, `client_id`, `currency_id`, `gross_value`, `currency_value`, `inr_value`) VALUES
(3, '2016-04-27', 2704201601, 3, 2, '6600.00', '50.00', '333053.00'),
(4, '2016-04-27', 2704201602, 3, 2, '14500.00', '50.00', '731708.00'),
(5, '2016-04-27', 2704201603, 3, 2, '0.00', '0.00', '0.00'),
(6, '2016-04-29', 2904201604, 3, 2, '5000.00', '51.00', '252640.00'),
(7, '2016-04-29', 2904201605, 3, 2, '950.00', '51.00', '48002.00'),
(8, '2016-04-29', 2904201606, 3, 2, '1020.00', '51.00', '51538.00'),
(9, '2016-04-29', 2904201607, 3, 2, '650.00', '51.00', '32843.00'),
(10, '2016-04-29', 2904201608, 3, 2, '8000.00', '51.00', '404223.00'),
(11, '2016-04-29', 2904201609, 3, 2, '1500.00', '51.00', '75792.00'),
(12, '2016-05-31', 3105201610, 3, 2, '7000.00', '49.00', '340536.00'),
(13, '2016-06-30', 407201612, 3, 2, '5000.00', '50.00', '251081.00'),
(14, '2016-07-08', 807201613, 6, 3, '280.00', '67.00', '18861.00'),
(15, '2016-06-30', 3006201614, 3, 2, '6000.00', '50.00', '301297.00'),
(16, '2016-07-23', 2307201615, 4, 2, '1580.00', '50.00', '79205.00'),
(17, '2016-07-25', 2507201616, 3, 2, '5000.00', '50.00', '250950.00'),
(18, '2016-08-31', 3108201617, 3, 2, '5000.00', '51.00', '253754.00'),
(19, '2016-09-17', 1709201618, 7, 2, '1000.00', '50.00', '50260.00'),
(20, '2016-09-28', 2809201619, 3, 2, '25000.00', '51.00', '1275000.00'),
(21, '2016-09-30', 3009201620, 3, 2, '0.00', '51.00', '0.00'),
(22, '2016-09-30', 3009201621, 3, 2, '25000.00', '51.00', '1275460.00'),
(23, '2016-07-02', 207201611, 2, 1, '26000.00', '1.00', '26000.00'),
(24, '2016-10-22', 2210201622, 8, 1, '18000.00', '1.00', '18000.00'),
(25, '2016-10-31', 3110201623, 3, 2, '31000.00', '51.09', '1583821.00'),
(26, '2016-11-30', 3011201624, 3, 2, '26760.00', '50.63', '1354797.25'),
(27, '2016-12-06', 612201625, 9, 1, '4500.00', '1.00', '4500.00');

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

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoice_id`, `invoice_no`, `date`, `client_id`, `order_id`) VALUES
(11, 2704201601, '2016-04-27', 3, 36),
(12, 2704201601, '2016-04-27', 3, 37),
(13, 2704201602, '2016-04-27', 3, 38),
(14, 2704201602, '2016-04-27', 3, 39),
(15, 2704201603, '2016-04-27', 3, 40),
(16, 2904201604, '2016-04-29', 3, 41),
(17, 2904201605, '2016-04-29', 3, 42),
(18, 2904201606, '2016-04-29', 3, 43),
(19, 2904201607, '2016-04-29', 3, 44),
(20, 2904201608, '2016-04-29', 3, 45),
(21, 2904201609, '2016-04-29', 3, 46),
(22, 31052016010, '2016-05-31', 3, 47),
(23, 3105201610, '2016-05-31', 3, 48),
(24, 207201611, '2016-07-02', 2, 49),
(25, 207201611, '2016-07-02', 2, 50),
(26, 407201612, '2016-06-30', 3, 51),
(27, 807201613, '2016-07-08', 6, 52),
(28, 3006201614, '2016-06-30', 3, 53),
(29, 2307201615, '2016-07-23', 4, 54),
(30, 2307201615, '2016-07-23', 4, 55),
(31, 2507201616, '2016-07-25', 3, 56),
(32, 3108201617, '2016-08-31', 3, 57),
(33, 1709201618, '2016-09-17', 7, 58),
(34, 2809201619, '2016-09-28', 3, 59),
(35, 3009201620, '2016-09-30', 3, 60),
(36, 3009201621, '2016-09-30', 3, 61),
(37, 2210201622, '2016-10-22', 8, 62),
(38, 3110201623, '2016-10-31', 3, 63),
(39, 3110201623, '2016-10-31', 3, 64),
(40, 3011201624, '2016-11-30', 3, 65),
(41, 3011201624, '2016-11-30', 3, 66),
(42, 612201625, '2016-12-06', 9, 67);

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

--
-- Dumping data for table `invoice_value`
--

INSERT INTO `invoice_value` (`val_id`, `date`, `invoice_id`, `gross_value`, `st`, `net_val`) VALUES
(21, '2016-04-27', 2704201601, '6600.00', '0.00', '6600.00'),
(22, '2016-04-27', 2704201602, '14500.00', '0.00', '14500.00'),
(23, '2016-04-27', 2704201603, '0.00', '0.00', '0.00'),
(24, '2016-04-29', 2904201604, '5000.00', '0.00', '5000.00'),
(25, '2016-04-29', 2904201605, '950.00', '0.00', '950.00'),
(26, '2016-04-29', 2904201606, '1020.00', '0.00', '1020.00'),
(27, '2016-04-29', 2904201607, '650.00', '0.00', '650.00'),
(28, '2016-04-29', 2904201608, '8000.00', '0.00', '8000.00'),
(29, '2016-04-29', 2904201609, '1500.00', '0.00', '1500.00'),
(30, '2016-05-31', 3105201610, '7000.00', '0.00', '7000.00'),
(31, '2016-07-02', 207201611, '26000.00', '0.00', '26000.00'),
(32, '2016-06-30', 407201612, '5000.00', '0.00', '5000.00'),
(33, '2016-07-08', 807201613, '280.00', '0.00', '280.00'),
(34, '2016-06-30', 3006201614, '6000.00', '0.00', '6000.00'),
(35, '2016-07-23', 2307201615, '1580.00', '0.00', '1580.00'),
(36, '2016-07-25', 2507201616, '5000.00', '0.00', '5000.00'),
(37, '2016-08-31', 3108201617, '5000.00', '0.00', '5000.00'),
(38, '2016-09-17', 1709201618, '1000.00', '0.00', '1000.00'),
(39, '2016-09-28', 2809201619, '25000.00', '0.00', '25000.00'),
(40, '2016-09-30', 3009201620, '0.00', '0.00', '0.00'),
(41, '2016-09-30', 3009201621, '25000.00', '0.00', '25000.00'),
(42, '2016-10-22', 2210201622, '18000.00', '0.00', '18000.00'),
(43, '2016-10-31', 3110201623, '31000.00', '0.00', '31000.00'),
(44, '2016-11-30', 3011201624, '26760.00', '0.00', '26760.00'),
(45, '2016-12-06', 612201625, '4500.00', '0.00', '4500.00');

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
(3, 'Web Site', 'Web Development', '1', '200.00', '152.55', '14.00'),
(4, 'AHS Support Monthly', 'AHS Support Monthly', '2', '0.00', '0.00', '0.00'),
(5, 'Desktop Application', 'Desktop Application Development', '1', '0.00', '0.00', '0.00'),
(6, 'Bulk SMS Application', 'Bulk SMS Web Application', '1', '0.00', '0.00', '0.00'),
(7, 'Bulk SMS API', 'Bulk SMS Getway API', '2', '0.00', '0.00', '0.00'),
(8, 'DeduERP', 'DeduERP Web Application', '1', '0.00', '0.00', '0.00'),
(9, 'DMS', 'Web Application on Document Management System', '1', '0.00', '0.00', '0.00'),
(10, 'KTAS Monthly Support', 'Monthly Support', '2', '0.00', '0.00', '0.00'),
(11, 'Support', 'Monthly Support', '2', '0.00', '0.00', '0.00'),
(12, 'IT Consulting', 'IT Consulting Services', '2', '0.00', '0.00', '0.00'),
(13, 'Domain & Hosting', 'Website Domain and Hosting', '3', '0.00', '0.00', '0.00'),
(14, 'Dummy OL', 'OL', '4', '0.00', '0.00', '0.00'),
(15, 'Dummy PP', '15*15', '4', '10.00', '4.00', '14.00');

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
  `pur_discount` decimal(10,2) NOT NULL,
  `pur_vat_rate` decimal(10,2) NOT NULL,
  `pur_vat` decimal(10,2) NOT NULL,
  `pur_value` decimal(10,2) NOT NULL,
  `sales_qty` bigint(100) NOT NULL,
  `sales_rate` decimal(10,2) NOT NULL,
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

INSERT INTO `item_movment` (`id`, `date`, `invoice_no`, `item_id`, `pur_qty`, `pur_rate`, `pur_discount`, `pur_vat_rate`, `pur_vat`, `pur_value`, `sales_qty`, `sales_rate`, `sales_discount_rate`, `sales_discount`, `sales_base_amt`, `sales_vat_rate`, `sales_vat`, `sales_value`, `balance_qty`) VALUES
(1, '2017-01-18', 101, 3, 1, '1000.00', '0.00', '0.00', '0.00', '1140.00', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 1),
(2, '2017-01-18', 101, 5, 2, '1500.00', '0.00', '0.00', '0.00', '3420.00', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 3),
(3, '2017-01-18', 102, 4, 2, '2500.00', '0.00', '0.00', '0.00', '5700.00', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 2),
(4, '2017-01-18', 102, 4, 2, '1000.00', '0.00', '0.00', '0.00', '2280.00', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 4),
(5, '2017-01-18', 103, 4, 5, '2500.00', '0.00', '0.00', '0.00', '14250.00', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 7),
(6, '2017-01-18', 103, 4, 2, '26000.00', '0.00', '0.00', '0.00', '59280.00', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 9),
(7, '2017-01-18', 104, 4, 2, '2000.00', '0.00', '0.00', '0.00', '4560.00', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 4),
(8, '2017-01-18', 105, 4, 500, '5.00', '0.00', '0.00', '0.00', '2850.00', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 500),
(9, '2017-01-18', 1, 4, 0, '0.00', '0.00', '0.00', '0.00', '0.00', 2, '5000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '11400.00', 5),
(10, '2017-01-18', 1, 4, 0, '0.00', '0.00', '0.00', '0.00', '0.00', 1, '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', '114.00', 4),
(11, '2017-01-18', 1, 4, 0, '0.00', '0.00', '0.00', '0.00', '0.00', 2, '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', '228.00', 2),
(12, '2017-01-19', 1, 4, 0, '0.00', '0.00', '0.00', '0.00', '0.00', 1, '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', '114.00', 1),
(13, '2017-01-19', 1, 4, 0, '0.00', '0.00', '0.00', '0.00', '0.00', 1, '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', '114.00', 0),
(14, '2017-01-19', 1, 4, 0, '0.00', '0.00', '0.00', '0.00', '0.00', 1, '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', '114.00', -1),
(15, '2017-01-19', 1, 4, 0, '0.00', '0.00', '0.00', '0.00', '0.00', 1, '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', '114.00', -2),
(16, '2017-01-19', 106, 4, 10, '1200.00', '240.00', '14.00', '1646.40', '13406.40', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 8),
(17, '2017-01-19', 2, 4, 0, '0.00', '0.00', '0.00', '0.00', '0.00', 2, '4000.00', '0.00', '160.00', '0.00', '14.00', '1097.60', '8937.60', 6),
(18, '2017-01-20', 3, 4, 0, '0.00', '0.00', '0.00', '0.00', '0.00', 1, '6000.00', '2.00', '120.00', '0.00', '14.00', '823.20', '6703.20', 5),
(19, '2017-01-20', 4, 4, 0, '0.00', '0.00', '0.00', '0.00', '0.00', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 27),
(20, '2017-01-20', 5, 3, 0, '0.00', '0.00', '0.00', '0.00', '0.00', 5, '15.50', '1.00', '0.77', '76.23', '14.00', '10.64', '86.64', 9),
(21, '2017-01-20', 5, 4, 0, '0.00', '0.00', '0.00', '0.00', '0.00', 11, '10.20', '0.00', '0.00', '153.00', '14.00', '21.42', '174.42', 25),
(22, '2017-01-23', 6, 4, 0, '0.00', '0.00', '0.00', '0.00', '0.00', 1, '12.75', '0.00', '0.00', '12.00', '14.00', '1.68', '13.68', 0),
(23, '2017-01-23', 6, 4, 0, '0.00', '0.00', '0.00', '0.00', '0.00', 25, '25.45', '0.00', '0.00', '636.00', '14.00', '89.04', '725.04', -26),
(24, '2017-01-23', 6, 4, 0, '0.00', '0.00', '0.00', '0.00', '0.00', 2, '12.42', '0.00', '0.00', '24.00', '14.00', '3.36', '27.36', 0),
(25, '2017-01-23', 6, 4, 0, '0.00', '0.00', '0.00', '0.00', '0.00', 40, '15.00', '0.00', '0.00', '600.00', '14.00', '84.00', '684.00', 460),
(26, '2017-01-23', 6, 4, 0, '0.00', '0.00', '0.00', '0.00', '0.00', 100, '12.00', '0.00', '0.00', '1200.00', '14.00', '168.00', '1368.00', 360),
(27, '2017-01-23', 6, 4, 0, '0.00', '0.00', '0.00', '0.00', '0.00', 25, '258.00', '0.00', '0.00', '6450.00', '14.00', '903.00', '7353.00', 335),
(28, '2017-01-23', 6, 4, 0, '0.00', '0.00', '0.00', '0.00', '0.00', 23, '275.85', '0.00', '0.00', '6344.00', '14.00', '888.16', '7232.16', 312),
(29, '2017-01-23', 6, 4, 0, '0.00', '0.00', '0.00', '0.00', '0.00', 24, '1231.20', '0.00', '0.00', '29548.00', '14.00', '4136.72', '33684.72', 288),
(30, '2017-01-23', 6, 4, 0, '0.00', '0.00', '0.00', '0.00', '0.00', 1, '142.00', '0.00', '0.00', '142.00', '14.00', '19.88', '161.88', 287),
(31, '2017-01-23', 6, 4, 0, '0.00', '0.00', '0.00', '0.00', '0.00', 14, '122.00', '0.00', '0.00', '1708.00', '14.00', '239.12', '1947.12', 273),
(32, '2017-01-23', 6, 4, 0, '0.00', '0.00', '0.00', '0.00', '0.00', 12, '14.00', '0.00', '0.00', '168.00', '14.00', '23.52', '191.52', 261),
(33, '2017-01-23', 6, 4, 0, '0.00', '0.00', '0.00', '0.00', '0.00', 24, '123.00', '0.00', '0.00', '2952.00', '14.00', '413.28', '3365.28', 237),
(34, '2017-01-23', 6, 4, 0, '0.00', '0.00', '0.00', '0.00', '0.00', 14, '14.00', '0.00', '0.00', '196.00', '14.00', '27.44', '223.44', 223),
(35, '2017-01-23', 6, 4, 0, '0.00', '0.00', '0.00', '0.00', '0.00', 15, '11.00', '0.00', '0.00', '165.00', '14.00', '23.10', '188.10', -14),
(36, '2017-01-23', 6, 4, 0, '0.00', '0.00', '0.00', '0.00', '0.00', 11, '147.00', '0.00', '0.00', '1617.00', '14.00', '226.38', '1843.38', -12),
(37, '2017-02-03', 7, 4, 0, '0.00', '0.00', '0.00', '0.00', '0.00', 2, '100.00', '0.00', '0.00', '200.00', '14.00', '28.00', '228.00', 11);

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
(1, 3, 9),
(2, 4, 27),
(3, 5, 0),
(4, 6, 460);

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

--
-- Dumping data for table `order_book`
--

INSERT INTO `order_book` (`order_id`, `order_date`, `client_id`, `item_id`, `description`, `qty`, `price`, `value`, `st`, `tax`, `netvalue`, `currency_id`, `status`, `invoice_no`) VALUES
(36, '2016-04-27', 3, 11, 'KTAS Support', 1, '5000.00', '5000.00', 0, '0.00', '5000.00', 2, 'Billed', 2704201601),
(37, '2016-04-27', 3, 11, 'Other IT Consulting Services with Vikash', 1, '1600.00', '1600.00', 0, '0.00', '1600.00', 2, 'Billed', 2704201601),
(38, '2016-04-27', 3, 11, 'ASH Support (Quarterly)', 1, '1500.00', '1500.00', 0, '0.00', '1500.00', 2, 'Billed', 2704201602),
(39, '2016-04-27', 3, 11, 'Other IT Consulting Services', 1, '13000.00', '13000.00', 0, '0.00', '13000.00', 2, 'Billed', 2704201602),
(40, '2016-04-27', 3, 11, 'Other IT Consulting Services(Cancelled Invoice)', 0, '0.00', '0.00', 0, '0.00', '0.00', 2, 'Billed', 2704201603),
(41, '2016-04-29', 3, 11, 'KTAS Monthly Support', 1, '5000.00', '5000.00', 0, '0.00', '5000.00', 2, 'Billed', 2904201604),
(42, '2016-04-29', 3, 11, 'Web Application Development of Payless Flights with CMS', 1, '950.00', '950.00', 0, '0.00', '950.00', 2, 'Billed', 2904201605),
(43, '2016-04-29', 3, 11, 'Alfred Forms Development (Patient Enquiry Forms Development 13 Forms)', 1, '1020.00', '1020.00', 0, '0.00', '1020.00', 2, 'Billed', 2904201606),
(44, '2016-04-29', 3, 11, 'Web Application Development of MR Mortgage with CMS', 1, '650.00', '650.00', 0, '0.00', '650.00', 2, 'Billed', 2904201607),
(45, '2016-04-29', 3, 11, 'Application Development for Only Deeds', 1, '8000.00', '8000.00', 0, '0.00', '8000.00', 2, 'Billed', 2904201608),
(46, '2016-04-29', 3, 11, 'ASH Support (Quarterly)', 1, '1500.00', '1500.00', 0, '0.00', '1500.00', 2, 'Billed', 2904201609),
(47, '2016-05-31', 3, 11, 'KTAS Monthly Support', 1, '5000.00', '5000.00', 0, '0.00', '5000.00', 2, 'Billed', 3105201610),
(48, '2016-05-31', 3, 11, 'Other Services', 1, '2000.00', '2000.00', 0, '0.00', '2000.00', 2, 'Billed', 3105201610),
(49, '2016-07-02', 2, 3, 'Website Design & Development', 1, '20000.00', '20000.00', 0, '0.00', '20000.00', 1, 'Billed', 207201611),
(50, '2016-07-02', 2, 3, 'Domain and Hosting', 1, '6000.00', '6000.00', 0, '0.00', '6000.00', 1, 'Billed', 207201611),
(51, '2016-06-30', 3, 11, 'KTAS Monthly Support', 1, '5000.00', '5000.00', 0, '0.00', '5000.00', 2, 'Billed', 407201612),
(52, '2016-07-08', 6, 3, 'Website Development', 1, '280.00', '280.00', 0, '0.00', '280.00', 3, 'Billed', 807201613),
(53, '2016-06-30', 3, 11, 'Requirement gathering for KTAS relaunch of resource planner & process flow project', 1, '6000.00', '6000.00', 0, '0.00', '6000.00', 2, 'Billed', 3006201614),
(54, '2016-07-23', 4, 3, 'Corporate Logo Design', 1, '380.00', '380.00', 0, '0.00', '380.00', 2, 'Billed', 2307201615),
(55, '2016-07-23', 4, 3, 'Web Application Development Advance', 1, '1200.00', '1200.00', 0, '0.00', '1200.00', 2, 'Billed', 2307201615),
(56, '2016-07-25', 3, 11, 'KTAS Monthly Support', 1, '5000.00', '5000.00', 0, '0.00', '5000.00', 2, 'Billed', 2507201616),
(57, '2016-08-31', 3, 11, 'KTAS Monthly Support', 1, '5000.00', '5000.00', 0, '0.00', '5000.00', 2, 'Billed', 3108201617),
(58, '2016-09-17', 7, 11, 'Monthly Support', 1, '1000.00', '1000.00', 0, '0.00', '1000.00', 2, 'Billed', 1709201618),
(59, '2016-09-28', 3, 11, 'KTAS Project Development & Monthly Support', 1, '25000.00', '25000.00', 0, '0.00', '25000.00', 2, 'Billed', 2809201619),
(60, '2016-09-30', 3, 11, 'Outstanding Payment from OnlyDeeds Developement', 0, '0.00', '0.00', 0, '0.00', '0.00', 2, 'Invoice Cancelled', 3009201620),
(61, '2016-09-30', 3, 11, 'KTAS Project Development & Monthly Support', 1, '25000.00', '25000.00', 0, '0.00', '25000.00', 2, 'Billed', 3009201621),
(62, '2016-10-22', 8, 11, 'Website Development and Portal Maintenance Up to July 2017', 1, '18000.00', '18000.00', 0, '0.00', '18000.00', 1, 'Billed', 2210201622),
(63, '2016-10-31', 3, 11, 'KTAS Project Development & Monthly Support', 1, '25000.00', '25000.00', 0, '0.00', '25000.00', 2, 'Billed', 3110201623),
(64, '2016-10-31', 3, 11, 'Other Consultancy Service', 1, '6000.00', '6000.00', 0, '0.00', '6000.00', 2, 'Billed', 3110201623),
(65, '2016-11-30', 3, 10, 'KTAS Project Development & Monthly Support', 1, '25000.00', '25000.00', 0, '0.00', '25000.00', 2, 'Billed', 3011201624),
(66, '2016-11-30', 3, 11, 'Resource Traveling Expenses', 1, '1760.00', '1760.00', 0, '0.00', '1760.00', 2, 'Billed', 3011201624),
(67, '2016-12-06', 9, 13, 'Website Hosting', 1, '4500.00', '4500.00', 0, '0.00', '4500.00', 1, 'Billed', 612201625);

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
  `total_net` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`pur_id`, `date`, `invoice_no`, `vendor_id`, `total_gross`, `total_discount`, `total_taxable`, `total_vat`, `total_net`) VALUES
(1, '2017-01-18', 101, 0, '4000.00', '0.00', '4000.00', '560.00', 4560),
(2, '2017-01-18', 102, 0, '7000.00', '0.00', '7000.00', '980.00', 7980),
(3, '2017-01-18', 103, 0, '64500.00', '0.00', '64500.00', '9030.00', 73530),
(4, '2017-01-18', 104, 0, '4000.00', '0.00', '4000.00', '560.00', 4560),
(5, '2017-01-18', 105, 1, '2500.00', '0.00', '2500.00', '350.00', 2850),
(6, '2017-01-19', 106, 1, '12000.00', '240.00', '11760.00', '1646.40', 13407);

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
(1, '2017-01-18', 1, 2, '0.00', '0.00', '0.00', '0.00', '0.00'),
(2, '2017-01-18', 1, 2, '0.00', '0.00', '0.00', '0.00', '0.00'),
(3, '2017-01-18', 1, 2, '0.00', '0.00', '0.00', '0.00', '0.00'),
(4, '2017-01-19', 1, 2, '0.00', '0.00', '0.00', '0.00', '0.00'),
(5, '2017-01-19', 1, 2, '0.00', '0.00', '0.00', '0.00', '0.00'),
(6, '2017-01-19', 1, 6, '0.00', '0.00', '0.00', '0.00', '0.00'),
(7, '2017-01-19', 1, 4, '0.00', '0.00', '0.00', '0.00', '0.00'),
(8, '2017-01-19', 2, 2, '0.00', '0.00', '0.00', '0.00', '0.00'),
(9, '2017-01-20', 3, 2, '0.00', '0.00', '0.00', '0.00', '0.00'),
(10, '2017-01-20', 4, 2, '0.00', '0.00', '0.00', '0.00', '0.00'),
(11, '2017-01-20', 5, 2, '0.00', '0.00', '0.00', '0.00', '0.00'),
(12, '2017-01-23', 6, 2, '0.00', '0.00', '0.00', '0.00', '0.00'),
(13, '2017-02-03', 7, 2, '0.00', '0.00', '0.00', '0.00', '0.00');

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
(1, 'Service Tax', 'Service Tax 15%', 15, '70'),
(2, 'Service Tax', 'Service Tax 14.5%', 14.5, '70'),
(3, 'VAT', 'Vat Tax', 14, '0');

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
(1, 'admin', 'admin', 'Active', 'Admin');

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
(1, 'Dummy', 'skdfsd', 'Gwalior', 'M.P.', 'India', '474001', '654654', '6546546547', 'sfd@gmail.com', '', '', '', '');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `autogen`
--
ALTER TABLE `autogen`
  MODIFY `id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `bank_id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `company_profile`
--
ALTER TABLE `company_profile`
  MODIFY `company_id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `currency`
--
ALTER TABLE `currency`
  MODIFY `currency_id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `currency_value`
--
ALTER TABLE `currency_value`
  MODIFY `cur_val_id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoice_id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `invoice_value`
--
ALTER TABLE `invoice_value`
  MODIFY `val_id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `item_movment`
--
ALTER TABLE `item_movment`
  MODIFY `id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `item_stock`
--
ALTER TABLE `item_stock`
  MODIFY `stock_id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `order_book`
--
ALTER TABLE `order_book`
  MODIFY `order_id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `pur_id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sales_id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tax`
--
ALTER TABLE `tax`
  MODIFY `tax_id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
