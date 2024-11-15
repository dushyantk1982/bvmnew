-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2017 at 07:13 AM
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
(73, 'ARCHI LIP BALM 6GM', '42*6GM', '2', '10.00', '7.02', '14.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
