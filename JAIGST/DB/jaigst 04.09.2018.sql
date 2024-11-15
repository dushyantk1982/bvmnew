-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2018 at 10:43 AM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jaigst`
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
  `id` bigint(200) NOT NULL,
  `bill_no` bigint(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `bill_no`) VALUES
(0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` bigint(200) NOT NULL,
  `bill_no` bigint(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id`, `bill_no`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` bigint(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  `alias` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category`, `alias`) VALUES
(1, 'Ayur', 'AY'),
(2, 'KS', 'KS'),
(3, 'N Plus', 'N+');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` bigint(100) NOT NULL,
  `client_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `area_id` int(10) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `GST` varchar(50) NOT NULL,
  `code` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `client_name`, `address`, `area_id`, `mobile`, `GST`, `code`) VALUES
(1, 'Client Dummy', 'Nai Sadak', 3, '9893430236', '', 23);

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
(1, 'JAI MAA TRADERS', 'BAKSHI KI GOTH JANAKGANJ', 'GWALIOR', 'M.P.', 'India', '474001', ' ', '9926216669', ' ', ' ', '', '23ABFPU8398H1Z1', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `creditor`
--

CREATE TABLE `creditor` (
  `trn_id` bigint(100) NOT NULL,
  `date` date NOT NULL,
  `vendor_id` bigint(100) NOT NULL,
  `invoice_no` varchar(100) NOT NULL,
  `inv_value` decimal(10,2) NOT NULL,
  `payment` decimal(10,2) NOT NULL,
  `balance` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `creditor`
--

INSERT INTO `creditor` (`trn_id`, `date`, `vendor_id`, `invoice_no`, `inv_value`, `payment`, `balance`) VALUES
(1, '2018-07-26', 2, '44', '1180.00', '0.00', '1180.00'),
(2, '2018-07-28', 2, '45', '1180.00', '0.00', '2360.00');

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
  `inv_value` decimal(10,2) NOT NULL,
  `rect_value` decimal(10,2) NOT NULL,
  `balance` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `debtors`
--

INSERT INTO `debtors` (`trn_id`, `date`, `area_id`, `client_id`, `ref_id`, `inv_value`, `rect_value`, `balance`) VALUES
(1, '2018-07-30', 3, 1, 1, '3243.20', '0.00', '3243.20'),
(2, '2018-07-30', 3, 1, 2, '100.00', '0.00', '3343.20'),
(3, '2018-07-30', 3, 1, 3, '118.00', '0.00', '3461.20'),
(4, '2018-07-30', 3, 1, 4, '260.00', '0.00', '3721.20'),
(5, '2018-09-01', 3, 1, 5, '1180.00', '0.00', '4901.20');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` bigint(100) NOT NULL,
  `item` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `category` bigint(50) NOT NULL,
  `MRP` decimal(10,2) NOT NULL,
  `baserate` decimal(10,2) NOT NULL,
  `cgst` int(10) NOT NULL,
  `sgst` int(10) NOT NULL,
  `igst` int(10) NOT NULL,
  `hsn` varchar(50) NOT NULL,
  `opening` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `item`, `description`, `category`, `MRP`, `baserate`, `cgst`, `sgst`, `igst`, `hsn`, `opening`) VALUES
(1, 'Ay Shampoo 100ml', '12*12', 1, '50.00', '41.41', 9, 9, 18, '99999', 50),
(2, 'Ay Shampoo 500ml', '6*6', 1, '150.00', '130.00', 9, 9, 18, '99999', 36),
(3, 'Ay Shampoo 1 Ltr', '20*1', 1, '230.00', '195.00', 9, 9, 18, '99999', 20),
(4, 'Ks Spark 150ml', '6*48', 2, '225.00', '150.00', 9, 9, 18, '8888', 15),
(5, 'Black150ml', '6*48', 2, '225.00', '130.00', 9, 9, 18, '3333', 20),
(6, 'Spark 75ml', '48*6', 2, '150.00', '100.00', 9, 9, 18, '333', 24),
(7, 'Spark 200ml', '48*4', 2, '200.00', '150.00', 9, 9, 18, '3333', 20);

-- --------------------------------------------------------

--
-- Table structure for table `item_stock`
--

CREATE TABLE `item_stock` (
  `stock_id` bigint(100) NOT NULL,
  `date` date NOT NULL,
  `invoice_no` bigint(100) NOT NULL,
  `item_id` bigint(100) NOT NULL,
  `pur_qty` bigint(100) NOT NULL,
  `pur_rate` decimal(10,2) NOT NULL,
  `sales_qty` bigint(100) NOT NULL,
  `sales_rate` decimal(10,2) NOT NULL,
  `balance_qty` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_stock`
--

INSERT INTO `item_stock` (`stock_id`, `date`, `invoice_no`, `item_id`, `pur_qty`, `pur_rate`, `sales_qty`, `sales_rate`, `balance_qty`) VALUES
(1, '0000-00-00', 0, 5, 20, '130.00', 0, '0.00', 20),
(2, '0000-00-00', 0, 6, 24, '100.00', 0, '0.00', 24),
(3, '2018-07-27', 0, 7, 20, '150.00', 0, '0.00', 20),
(4, '2018-07-26', 44, 7, 10, '100.00', 0, '0.00', 30),
(5, '2018-07-28', 45, 7, 10, '100.00', 0, '0.00', 40),
(6, '2018-07-30', 1, 7, 0, '0.00', 10, '160.00', 30),
(7, '2018-07-30', 2, 7, 0, '0.00', 1, '100.00', 29),
(8, '2018-07-30', 3, 7, 0, '0.00', 1, '100.00', 28),
(9, '2018-07-30', 4, 7, 0, '0.00', 2, '110.00', 26),
(10, '2018-09-01', 5, 6, 0, '0.00', 10, '100.00', 14);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `pur_id` bigint(100) NOT NULL,
  `date` date NOT NULL,
  `invoice_no` bigint(100) NOT NULL,
  `vendor_id` bigint(100) NOT NULL,
  `totalnetval` decimal(10,2) NOT NULL,
  `cgst` decimal(10,2) NOT NULL,
  `sgst` decimal(10,2) NOT NULL,
  `igst` decimal(10,2) NOT NULL,
  `discount` decimal(10,2) NOT NULL,
  `roundoff` decimal(10,2) NOT NULL,
  `netamount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`pur_id`, `date`, `invoice_no`, `vendor_id`, `totalnetval`, `cgst`, `sgst`, `igst`, `discount`, `roundoff`, `netamount`) VALUES
(1, '2018-07-26', 44, 2, '1000.00', '90.00', '90.00', '0.00', '0.00', '0.00', '1180.00'),
(2, '2018-07-28', 45, 2, '1000.00', '90.00', '90.00', '0.00', '0.00', '0.00', '1180.00');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sales_id` bigint(100) NOT NULL,
  `date` date NOT NULL,
  `invoice_no` bigint(100) NOT NULL,
  `client_id` bigint(100) NOT NULL,
  `totalnetval` decimal(10,2) NOT NULL,
  `cgst` decimal(10,2) NOT NULL,
  `sgst` decimal(10,2) NOT NULL,
  `igst` decimal(10,2) NOT NULL,
  `netamount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sales_id`, `date`, `invoice_no`, `client_id`, `totalnetval`, `cgst`, `sgst`, `igst`, `netamount`) VALUES
(1, '2018-07-30', 1, 1, '3200.00', '28.80', '14.40', '0.00', '3243.20'),
(2, '2018-07-30', 2, 1, '100.00', '0.00', '0.00', '0.00', '100.00'),
(3, '2018-07-30', 3, 1, '100.00', '9.00', '9.00', '0.00', '118.00'),
(4, '2018-07-30', 4, 1, '220.00', '19.80', '19.80', '0.00', '260.00'),
(5, '2018-09-01', 5, 1, '1000.00', '90.00', '90.00', '0.00', '1180.00');

-- --------------------------------------------------------

--
-- Table structure for table `tax`
--

CREATE TABLE `tax` (
  `tax_id` bigint(100) NOT NULL,
  `cat` varchar(50) NOT NULL,
  `tax` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `temp_pur_inv` (
  `temp_id` bigint(100) NOT NULL,
  `inv_no` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `vendor` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(10) NOT NULL,
  `Date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `Date`) VALUES
(1, '10-10-2018');

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
-- in use(#1932 - Table 'jaigst.vendor' doesn't exist in engine)
-- Error reading data: (#1932 - Table 'jaigst.vendor' doesn't exist in engine)

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `vendor_id` bigint(100) NOT NULL,
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
  `term` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`vendor_id`, `vendor_name`, `address`, `city`, `state`, `country`, `pin`, `contact`, `mobile`, `mail`, `PAN`, `GST`, `term`) VALUES
(1, 'Dummy', 'sss', 'Gwalior', 'Madhya Pradesh', 'India', '474011', '0989343023', '9893430236', 'dummy@gmail.com', 'ABADC9858C', '23ABADC9858C1Z4', 0),
(2, 'Dummy 2', '2nd Floor Om Plaza, Sachin Tendulkar Road, Govindpuri', 'Gwalior', 'Madhya Pradesh', 'India', '474011', '', '', '', 'AADSD4550F', '23AADSD4550F', 21);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`area_id`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`bank_id`);

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
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
-- Indexes for table `debtors`
--
ALTER TABLE `debtors`
  ADD PRIMARY KEY (`trn_id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `item_stock`
--
ALTER TABLE `item_stock`
  ADD PRIMARY KEY (`stock_id`);

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
-- Indexes for table `temp_pur_inv`
--
ALTER TABLE `temp_pur_inv`
  ADD PRIMARY KEY (`temp_id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
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
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `bank_id` bigint(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` bigint(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `company_profile`
--
ALTER TABLE `company_profile`
  MODIFY `company_id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `creditor`
--
ALTER TABLE `creditor`
  MODIFY `trn_id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `debtors`
--
ALTER TABLE `debtors`
  MODIFY `trn_id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `item_stock`
--
ALTER TABLE `item_stock`
  MODIFY `stock_id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `pur_id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sales_id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tax`
--
ALTER TABLE `tax`
  MODIFY `tax_id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `temp_pur_inv`
--
ALTER TABLE `temp_pur_inv`
  MODIFY `temp_id` bigint(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `vendor_id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
