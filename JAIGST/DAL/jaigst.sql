-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 23, 2022 at 02:00 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jaigst`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE IF NOT EXISTS `area` (
  `area_id` bigint(10) NOT NULL AUTO_INCREMENT,
  `area_name` varchar(100) NOT NULL,
  PRIMARY KEY (`area_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`area_id`, `area_name`) VALUES
(1, 'Chandbadani Naka'),
(2, 'Madhoganj, Taraganj'),
(3, 'Shinde Ki Chhavani'),
(4, 'Gol Pahariya, Janakganj, Jiwaji Ganj'),
(5, 'Vinay Nagar, Anand Nagar, Bahodapur'),
(6, 'Guda Naka, Subhash Market'),
(7, 'City Center'),
(8, 'DD Nagar, Pinto Park, Sadar'),
(9, 'Hazeera, Kila Gate');

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE IF NOT EXISTS `bank` (
  `bank_id` bigint(100) NOT NULL AUTO_INCREMENT,
  `bank` varchar(100) NOT NULL,
  `bank_add` varchar(100) NOT NULL,
  `account_name` varchar(100) NOT NULL,
  `account_no` varchar(100) NOT NULL,
  `account_type` varchar(20) NOT NULL,
  `IFSC` varchar(50) NOT NULL,
  `opening` decimal(10,2) NOT NULL,
  PRIMARY KEY (`bank_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`bank_id`, `bank`, `bank_add`, `account_name`, `account_no`, `account_type`, `IFSC`, `opening`) VALUES
(1, 'Bank', 'Nai Sada', 'Jai Maa Traders', '121212121212', 'Current', 'INDB', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `bank_book`
--

CREATE TABLE IF NOT EXISTS `bank_book` (
  `trn_id` bigint(100) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `cust_id` bigint(100) NOT NULL,
  `payment` decimal(10,2) NOT NULL,
  `received` decimal(10,2) NOT NULL,
  `ref_id` varchar(30) NOT NULL,
  `description` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`trn_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `bank_book`
--

INSERT INTO `bank_book` (`trn_id`, `date`, `cust_id`, `payment`, `received`, `ref_id`, `description`, `type`) VALUES
(1, '2020-04-17', 1, '12000.00', '0.00', '101010', 'Done', 'Payment');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE IF NOT EXISTS `bill` (
  `id` bigint(200) NOT NULL,
  `bill_no` bigint(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--


-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE IF NOT EXISTS `bills` (
  `id` bigint(200) NOT NULL AUTO_INCREMENT,
  `bill_no` bigint(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id`, `bill_no`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cash`
--

CREATE TABLE IF NOT EXISTS `cash` (
  `cash_id` int(10) NOT NULL,
  `name` varchar(10) NOT NULL,
  `opening` decimal(10,2) NOT NULL,
  PRIMARY KEY (`cash_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cash`
--

INSERT INTO `cash` (`cash_id`, `name`, `opening`) VALUES
(1, 'Cash', '10000.00');

-- --------------------------------------------------------

--
-- Table structure for table `cash_book`
--

CREATE TABLE IF NOT EXISTS `cash_book` (
  `trn_id` bigint(100) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `cust_id` bigint(100) NOT NULL,
  `payment` decimal(10,2) NOT NULL,
  `received` decimal(10,2) NOT NULL,
  `ref_id` varchar(30) NOT NULL,
  `description` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`trn_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cash_book`
--


-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` bigint(100) NOT NULL AUTO_INCREMENT,
  `category` varchar(50) NOT NULL,
  `alias` varchar(50) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category`, `alias`) VALUES
(1, 'Ayur', 'AY'),
(2, 'KS', 'KS'),
(3, 'Nandini', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `client_id` bigint(100) NOT NULL AUTO_INCREMENT,
  `client_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `area_id` int(10) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `GST` varchar(50) NOT NULL,
  `code` int(10) NOT NULL,
  `ayur_rate` decimal(10,2) NOT NULL,
  `type` varchar(2) NOT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `client_name`, `address`, `area_id`, `mobile`, `GST`, `code`, `ayur_rate`, `type`) VALUES
(1, 'Client Dummy', 'Nai Sadak', 3, '9893430236', '23AAAAA8545D1Z1', 23, '1.04', 'RT'),
(2, 'Dummy1 Client', 'Nais ', 1, '8282854569', '23ABACE6585E2Z1', 23, '22.00', 'WH');

-- --------------------------------------------------------

--
-- Table structure for table `company_profile`
--

CREATE TABLE IF NOT EXISTS `company_profile` (
  `company_id` bigint(100) NOT NULL AUTO_INCREMENT,
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
  `GSTIN` varchar(50) NOT NULL,
  PRIMARY KEY (`company_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `company_profile`
--

INSERT INTO `company_profile` (`company_id`, `company_name`, `address`, `city`, `state`, `country`, `pin`, `contact`, `mobile`, `mail`, `wesite`, `PAN`, `GSTIN`) VALUES
(1, 'JAI MAA TRADERS', 'BAKSHI KI GOTH JANAKGANJ', 'GWALIOR', 'M.P.', 'India', '474001', '', '7999697550', '', '', 'ABFPU8398H', '23ABFPU8398H1Z1');

-- --------------------------------------------------------

--
-- Table structure for table `creditor`
--

CREATE TABLE IF NOT EXISTS `creditor` (
  `trn_id` bigint(100) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `vendor_id` bigint(100) NOT NULL,
  `invoice_no` varchar(100) NOT NULL,
  `inv_value` decimal(10,2) NOT NULL,
  `payment` decimal(10,2) NOT NULL,
  `mode` int(2) NOT NULL,
  `description` varchar(50) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`trn_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `creditor`
--


-- --------------------------------------------------------

--
-- Table structure for table `debtors`
--

CREATE TABLE IF NOT EXISTS `debtors` (
  `trn_id` bigint(100) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `area_id` bigint(100) NOT NULL,
  `client_id` bigint(100) NOT NULL,
  `ref_id` bigint(100) NOT NULL,
  `inv_value` decimal(10,2) NOT NULL,
  `rect_value` decimal(10,2) NOT NULL,
  `balance` decimal(10,2) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`trn_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `debtors`
--

INSERT INTO `debtors` (`trn_id`, `date`, `area_id`, `client_id`, `ref_id`, `inv_value`, `rect_value`, `balance`, `status`) VALUES
(1, '2022-01-21', 3, 1, 1, '1000.00', '0.00', '1000.00', '');

-- --------------------------------------------------------

--
-- Table structure for table `gstdetail`
--

CREATE TABLE IF NOT EXISTS `gstdetail` (
  `sales_id` bigint(100) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `invoice_no` bigint(100) NOT NULL,
  `client_id` bigint(100) NOT NULL,
  `totalnetval` decimal(10,2) NOT NULL,
  `cgst9` decimal(10,2) NOT NULL,
  `cgst6` decimal(10,2) NOT NULL,
  `cgst25` decimal(10,2) NOT NULL,
  `cgst14` decimal(10,2) NOT NULL,
  `cgst0` decimal(10,2) NOT NULL,
  `sgst9` decimal(10,2) NOT NULL,
  `sgst6` decimal(10,2) NOT NULL,
  `sgst25` decimal(10,2) NOT NULL,
  `sgst14` decimal(10,2) NOT NULL,
  `sgst0` decimal(10,2) NOT NULL,
  `igst18` decimal(10,2) NOT NULL,
  `igst12` decimal(10,2) NOT NULL,
  `igst5` decimal(10,2) NOT NULL,
  `igst28` decimal(10,2) NOT NULL,
  `igst0` decimal(10,2) NOT NULL,
  `netamount` decimal(10,2) NOT NULL,
  `trn_type` varchar(20) NOT NULL,
  PRIMARY KEY (`sales_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `gstdetail`
--

INSERT INTO `gstdetail` (`sales_id`, `date`, `invoice_no`, `client_id`, `totalnetval`, `cgst9`, `cgst6`, `cgst25`, `cgst14`, `cgst0`, `sgst9`, `sgst6`, `sgst25`, `sgst14`, `sgst0`, `igst18`, `igst12`, `igst5`, `igst28`, `igst0`, `netamount`, `trn_type`) VALUES
(23, '2022-01-21', 1, 1, '847.46', '76.27', '0.00', '0.00', '0.00', '0.00', '76.27', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '1000.00', 'SALES');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `item_id` bigint(100) NOT NULL AUTO_INCREMENT,
  `item` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `category` bigint(50) NOT NULL,
  `MRP` decimal(10,2) NOT NULL,
  `baserate` decimal(10,2) NOT NULL,
  `cgst` decimal(10,2) NOT NULL,
  `sgst` decimal(10,2) NOT NULL,
  `igst` decimal(10,2) NOT NULL,
  `hsn` varchar(50) NOT NULL,
  `opening` bigint(100) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `item`, `description`, `category`, `MRP`, `baserate`, `cgst`, `sgst`, `igst`, `hsn`, `opening`) VALUES
(9, 'AY Shampoo 1Ltr (20*1)', '(20*1)', 1, '230.00', '145.33', '9.00', '9.00', '18.00', '3305', 38),
(10, 'AY Shampoo 500ml (36*1)', '(6*6)', 1, '150.00', '94.78', '9.00', '9.00', '18.00', '3305', 107),
(11, 'AY Shampoo 200ml (72*1)', '(12*6)', 1, '90.00', '56.87', '9.00', '9.00', '18.00', '3305', 75),
(12, 'AY Shampoo 100ml (144*1)', '(12*12)', 1, '50.00', '31.59', '9.00', '9.00', '18.00', '3305', 96),
(13, 'AY Cl. Milk 500ml (36*1)', '(6*6)', 1, '150.00', '94.78', '9.00', '9.00', '18.00', '3304', 53),
(14, 'AY Cl. Milk 200ml (72*1)', '(12*6)', 1, '90.00', '56.87', '9.00', '9.00', '18.00', '3304', 0),
(15, 'AY Cl. Milk 100ml (144*1)', '(12*12)', 1, '50.00', '31.59', '9.00', '9.00', '18.00', '3304', 350),
(16, 'AY Cl. Milk 50ml (144*1)', '(12*12)', 1, '30.00', '18.96', '9.00', '9.00', '18.00', '3304', 43),
(17, 'AY Most 500ml (36*1)', '(6*6)', 1, '150.00', '94.78', '9.00', '9.00', '18.00', '3304', 17),
(18, 'AY Most 200ml (72*1)', '(12*6)', 1, '90.00', '56.87', '9.00', '9.00', '18.00', '3304', 12),
(19, 'AY Most 100ml (144*1)', '(12*12)', 1, '50.00', '31.59', '9.00', '9.00', '18.00', '3304', 5),
(20, 'AY Skin Toner 100ml (144*1)', '(12*12)', 1, '50.00', '31.59', '9.00', '9.00', '18.00', '3304', 31),
(21, 'AY AST 100ml (144*1)', '(12*12)', 1, '50.00', '31.59', '9.00', '9.00', '18.00', '3304', 276),
(22, 'AY Coco Butter 500ml (36*1)', '(6*6)', 1, '150.00', '94.78', '9.00', '9.00', '18.00', '3304', 0),
(23, 'AY Cold Wax 600gm (24*1)', '(24*1)', 1, '90.00', '56.87', '9.00', '9.00', '18.00', '3304', 17),
(24, 'AY Hot Wax 600gm (24*1)', '(24*1)', 1, '90.00', '56.87', '9.00', '9.00', '18.00', '3304', 12),
(25, 'AY Cold Wax 150gm (72*1)', '(6*12)', 1, '40.00', '25.27', '9.00', '9.00', '18.00', '3304', 1),
(26, 'AY Hot Wax 150gm (72*1)', '(6*12)', 1, '40.00', '25.27', '9.00', '9.00', '18.00', '3304', 21),
(27, 'AY Face Pack (SDN) 100gm', '72*1', 1, '50.00', '31.59', '9.00', '9.00', '18.00', '3304', 220),
(28, 'AY Face Pack (SDN) 25gm (216*1)', '216*1', 1, '20.00', '12.64', '9.00', '9.00', '18.00', '3304', 1),
(29, 'AY Face Pack (TUL) 25gm (216*1)', '216*1', 1, '20.00', '12.64', '9.00', '9.00', '18.00', '3304', 85),
(30, 'AY Face Pack (Cu) 25 gm (216*1)', '216*1', 1, '20.00', '12.64', '9.00', '9.00', '18.00', '3304', 27),
(31, 'AY Face Pack (Ne) 25gm (216*1)', '216*1', 1, '20.00', '12.64', '9.00', '9.00', '18.00', '3304', 49),
(32, 'AY Face Pack (Shahi) 25gm (216*1)', '216*1', 1, '20.00', '12.64', '9.00', '9.00', '18.00', '3304', 0),
(33, 'AY Face Pack (Rose) 25gm (216*1)', '216*1', 1, '20.00', '12.64', '9.00', '9.00', '18.00', '3304', 33),
(34, 'AY Face Pack (Mint) (216*1)', '216*1', 1, '20.00', '12.64', '9.00', '9.00', '18.00', '3304', 46),
(35, 'AY Face Pack (Orange) (216*1)', '216*1', 1, '20.00', '12.64', '9.00', '9.00', '18.00', '3304', 36),
(36, 'AY Cold Cream 500ml (36*1)', '36*1', 1, '200.00', '126.37', '9.00', '9.00', '18.00', '3304', 180),
(37, 'AY Cold Cream 200ml (72*1)', '72*1', 1, '110.00', '69.51', '9.00', '9.00', '18.00', '3304', 732),
(38, 'AY Cold Cream 80ml (144*1)', '12*12', 1, '65.00', '41.07', '9.00', '9.00', '18.00', '3304', 1667),
(39, 'AY Cold Cream 25/- (864*1)', '12*12*6', 1, '25.00', '15.80', '9.00', '9.00', '18.00', '3304', 0),
(40, 'AY Cold Cream 10/- (864*1)', '12*12*6', 1, '10.00', '6.32', '9.00', '9.00', '18.00', '3304', 312),
(41, 'AY All Purpose 500ml (36*1)', '36*1', 1, '200.00', '126.37', '9.00', '9.00', '18.00', '3304', 14),
(42, 'AY All Purpose 200ml (72*1)', '12*6', 1, '110.00', '69.51', '9.00', '9.00', '18.00', '3304', 36),
(43, 'AY All Purpose 80ml (72*1)', '12*12', 1, '65.00', '41.07', '9.00', '9.00', '18.00', '3304', 120),
(44, 'AY Chocolate Wax 150gm (72*1)', '12*6', 1, '40.00', '25.27', '9.00', '9.00', '18.00', '3304', 11),
(45, 'AY Fruit Cream 10ml (36*1)', '36*1', 1, '10.00', '6.32', '9.00', '9.00', '18.00', '3304', 216),
(46, 'AY Lip Balm 10ml (30*1)', '30*1', 1, '10.00', '6.32', '9.00', '9.00', '18.00', '3304', 0),
(47, 'AY SPF 15  100ml', '12*12', 1, '90.00', '56.87', '9.00', '9.00', '18.00', '3304', 52),
(48, 'AY SPF 30  100ml', '12*12', 1, '150.00', '94.78', '9.00', '9.00', '18.00', '3304', 0),
(49, 'AY Coco Butter 100ml (144*1)', '12*12', 1, '50.00', '31.59', '9.00', '9.00', '18.00', '3304', 7),
(50, 'AY Hina PWDR 100gm (144*1)', '12*12', 1, '30.00', '21.30', '2.50', '2.50', '5.00', '1404', 38),
(51, 'AY Hina PWDR 200gm (72*1)', '12*12', 1, '50.00', '35.50', '2.50', '2.50', '5.00', '1404', 0),
(52, 'AY Massage Cream 200ml ', '12*6', 1, '110.00', '69.51', '9.00', '9.00', '18.00', '3304', 7);

-- --------------------------------------------------------

--
-- Table structure for table `item_stock`
--

CREATE TABLE IF NOT EXISTS `item_stock` (
  `stock_id` bigint(100) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `invoice_no` bigint(100) NOT NULL,
  `client_id` bigint(100) NOT NULL,
  `item_id` bigint(100) NOT NULL,
  `pur_qty` bigint(100) NOT NULL,
  `pur_rate` decimal(10,2) NOT NULL,
  `basepur` decimal(10,2) NOT NULL,
  `prt_qty` bigint(100) NOT NULL,
  `prt_rate` decimal(10,2) NOT NULL,
  `prt_base` decimal(10,2) NOT NULL,
  `sales_qty` bigint(100) NOT NULL,
  `sales_rate` decimal(10,2) NOT NULL,
  `base_amt` decimal(10,2) NOT NULL,
  `srt_qty` bigint(100) NOT NULL,
  `srt_rate` decimal(10,2) NOT NULL,
  `srt_base` decimal(10,2) NOT NULL,
  `cgst_rate` decimal(10,2) NOT NULL,
  `cgst` decimal(10,2) NOT NULL,
  `sgst_rate` decimal(10,2) NOT NULL,
  `sgst` decimal(10,2) NOT NULL,
  `net_amt` decimal(10,2) NOT NULL,
  `balance_qty` bigint(100) NOT NULL,
  `trn_type` varchar(20) NOT NULL,
  PRIMARY KEY (`stock_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `item_stock`
--

INSERT INTO `item_stock` (`stock_id`, `date`, `invoice_no`, `client_id`, `item_id`, `pur_qty`, `pur_rate`, `basepur`, `prt_qty`, `prt_rate`, `prt_base`, `sales_qty`, `sales_rate`, `base_amt`, `srt_qty`, `srt_rate`, `srt_base`, `cgst_rate`, `cgst`, `sgst_rate`, `sgst`, `net_amt`, `balance_qty`, `trn_type`) VALUES
(1, '2022-01-21', 1, 1, 42, 0, '0.00', '0.00', 0, '0.00', '0.00', 10, '84.75', '847.46', 0, '0.00', '0.00', '9.00', '76.27', '9.00', '76.27', '1000.00', -10, 'SALES');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE IF NOT EXISTS `purchase` (
  `pur_id` bigint(100) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `invoice_no` bigint(100) NOT NULL,
  `vendor_id` bigint(100) NOT NULL,
  `totalnetval` decimal(10,2) NOT NULL,
  `cgst` decimal(10,2) NOT NULL,
  `sgst` decimal(10,2) NOT NULL,
  `igst` decimal(10,2) NOT NULL,
  `discount` decimal(10,2) NOT NULL,
  `roundoff` decimal(10,2) NOT NULL,
  `netamount` decimal(10,2) NOT NULL,
  PRIMARY KEY (`pur_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `purchase`
--


-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
  `sales_id` bigint(100) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `invoice_no` bigint(100) NOT NULL,
  `client_id` bigint(100) NOT NULL,
  `totalnetval` decimal(10,2) NOT NULL,
  `cgst` decimal(10,2) NOT NULL,
  `sgst` decimal(10,2) NOT NULL,
  `igst` decimal(10,2) NOT NULL,
  `grossamount` decimal(10,2) NOT NULL,
  `discount` decimal(10,2) NOT NULL,
  `netamount` decimal(10,2) NOT NULL,
  PRIMARY KEY (`sales_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sales_id`, `date`, `invoice_no`, `client_id`, `totalnetval`, `cgst`, `sgst`, `igst`, `grossamount`, `discount`, `netamount`) VALUES
(1, '2022-01-21', 1, 1, '847.46', '76.27', '76.27', '0.00', '1000.00', '0.00', '1000.00');

-- --------------------------------------------------------

--
-- Table structure for table `sales_ret`
--

CREATE TABLE IF NOT EXISTS `sales_ret` (
  `srt_id` bigint(100) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `srt_no` bigint(100) NOT NULL,
  `client_id` bigint(100) NOT NULL,
  `totalnetval` decimal(10,2) NOT NULL,
  `cgst` decimal(10,2) NOT NULL,
  `sgst` decimal(10,2) NOT NULL,
  `igst` decimal(10,2) NOT NULL,
  `grossamount` decimal(10,2) NOT NULL,
  `discount` decimal(10,2) NOT NULL,
  `netamount` decimal(10,2) NOT NULL,
  PRIMARY KEY (`srt_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `sales_ret`
--


-- --------------------------------------------------------

--
-- Table structure for table `sr`
--

CREATE TABLE IF NOT EXISTS `sr` (
  `id` bigint(100) NOT NULL,
  `sr_no` bigint(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sr`
--


-- --------------------------------------------------------

--
-- Table structure for table `tax`
--

CREATE TABLE IF NOT EXISTS `tax` (
  `tax_id` bigint(100) NOT NULL AUTO_INCREMENT,
  `cat` varchar(50) NOT NULL,
  `tax` varchar(50) NOT NULL,
  PRIMARY KEY (`tax_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tax`
--

INSERT INTO `tax` (`tax_id`, `cat`, `tax`) VALUES
(1, 'GST', 'CGST'),
(2, 'GST', 'SGST'),
(3, 'GST', 'IGST');

-- --------------------------------------------------------

--
-- Table structure for table `temp_pur_inv`
--

CREATE TABLE IF NOT EXISTS `temp_pur_inv` (
  `temp_id` bigint(100) NOT NULL AUTO_INCREMENT,
  `inv_no` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `vendor` bigint(100) NOT NULL,
  PRIMARY KEY (`temp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `temp_pur_inv`
--


-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `Date` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `test`
--


-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE IF NOT EXISTS `unit` (
  `unit_id` bigint(100) NOT NULL AUTO_INCREMENT,
  `unit` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`unit_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`unit_id`, `unit`, `description`) VALUES
(1, 'U', 'Unit');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(100) NOT NULL AUTO_INCREMENT,
  `loginid` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `loginid`, `password`, `status`, `type`) VALUES
(1, 'admin', 'admin', 'Active', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE IF NOT EXISTS `vendors` (
  `vendor_id` bigint(100) NOT NULL AUTO_INCREMENT,
  `vendor_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `pin` varchar(10) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `PAN` varchar(11) NOT NULL,
  `GST` varchar(16) NOT NULL,
  `term` bigint(100) NOT NULL,
  `opening` decimal(10,2) NOT NULL,
  PRIMARY KEY (`vendor_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`vendor_id`, `vendor_name`, `address`, `city`, `state`, `country`, `pin`, `contact`, `mobile`, `mail`, `PAN`, `GST`, `term`, `opening`) VALUES
(1, 'J D Incorporation', 'Bhopal', 'Bhopal', 'M.P.', 'India', '', '', '', '', '', '23AAAAW4545F1Z2', 0, '0.00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
