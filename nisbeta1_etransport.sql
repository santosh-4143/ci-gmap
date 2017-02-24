-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 24, 2017 at 11:46 AM
-- Server version: 5.6.32-78.1-log
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nisbeta1_etransport`
--

-- --------------------------------------------------------

--
-- Table structure for table `bus_master`
--

CREATE TABLE IF NOT EXISTS `bus_master` (
  `id` int(11) NOT NULL,
  `bus_name` varchar(255) NOT NULL,
  `bus_type` varchar(255) NOT NULL,
  `departure` time NOT NULL,
  `total_time` float(10,2) NOT NULL,
  `arrival` time NOT NULL,
  `seat` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `bus_no` varchar(255) NOT NULL,
  `bus_owner_name` varchar(255) NOT NULL,
  `owner_phone` bigint(11) NOT NULL,
  `permit_no` varchar(255) NOT NULL,
  `owner_address` varchar(255) NOT NULL,
  `permit_type` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_master`
--

INSERT INTO `bus_master` (`id`, `bus_name`, `bus_type`, `departure`, `total_time`, `arrival`, `seat`, `price`, `bus_no`, `bus_owner_name`, `owner_phone`, `permit_no`, `owner_address`, `permit_type`) VALUES
(1, 'Siddha to Khirpai', 'Mini Bus', '06:35:00', 2.25, '09:00:00', 28, 25, 'WB01-00001', 'Mr. Amit Shaw', 8981377201, 'W.P.24039 (W) of 2012', '55/4 sukanta sarani kol-87', 'Stage Carriage Permit'),
(2, 'Sultannagar to Khirpai', 'Long Bus', '07:10:00', 1.45, '08:55:00', 42, 20, 'WB01-00002', 'Mr. Sunil Ghote', 9832324147, 'W.P.24040 (W) of 2012', '102/L/B math para kol-74', 'Stage Carriage Permit'),
(3, 'Mecheda Railway Station to Soya Dighi', 'AC Bus', '05:15:00', 1.45, '07:00:00', 36, 45, 'WB003-00003', 'Mr. Manish Paul', 7878564512, 'W.P.24139 (W) of 2013', '59 B Hospital rd. kol-700054', 'Stage Carriage Permit'),
(4, 'Siddha to Daspur', 'Mini bus', '08:00:00', 1.10, '09:10:00', 18, 15, 'WB003-00004', 'Ms. Priyanka Shaw', 9845451278, 'W.P.24141 (W) of 2013', '41/KL main road , kol-700056', 'Stage Carriage Permit'),
(5, 'Mecheda Railway Station to Jayrambati', 'Long Rout Ac Delux', '05:45:00', 2.45, '08:30:00', 42, 35, 'WB004-00004', 'Mr. Sumit Monadal', 7278457823, 'W.P.24142 (W) of 2013', '65/8/B lake road , kol-55', 'Stage Carriage Permit');

-- --------------------------------------------------------

--
-- Table structure for table `bus_timing`
--

CREATE TABLE IF NOT EXISTS `bus_timing` (
  `id` int(11) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `place_master`
--

CREATE TABLE IF NOT EXISTS `place_master` (
  `id` int(11) NOT NULL,
  `place_name` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `is_highway` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `place_master`
--

INSERT INTO `place_master` (`id`, `place_name`, `latitude`, `longitude`, `is_highway`) VALUES
(1, 'Mecheda Railway Station', '22.4146419', '87.8564647', 1),
(2, 'Kolaghat', '22.4258787', '87.8632871', 1),
(3, 'Barunda', '22.455774', '87.9200252', 1),
(4, 'Mankur more - Nabasan Rd', '22.465545', '87.956213', 1),
(5, 'Bagnan', '22.4643466', '87.9588736', 1),
(6, 'Nandakumar', '22.1913772', '87.9010746', 1),
(7, 'Rajgoda', '22.3233448', '87.8675702', 1),
(8, 'Brindaban Pur', '22.3949149', '87.8506469', 1),
(9, 'Agar', '22.3760199', '87.8545576', 1),
(10, 'Soya Dighi', '22.3433347', '87.8585152', 1),
(11, 'Hirapur', '22.3165199', '87.8686476', 1),
(12, 'Radhamoni Bus Stop', '22.3076385', '87.8702855', 1),
(13, 'Kelomal', '22.3054624', '87.874036', 0),
(14, 'Chapbasan', '22.2961249', '87.8851476', 0),
(15, 'Pipulberya', '22.2906999', '87.8874626', 0),
(16, 'Jayrambati', '22.3077798', '87.8668402', 1),
(17, 'Kamarbar', '22.2975299', '87.8731225', 1),
(18, 'Barkalu', '22.2922099', '87.8719075', 1),
(19, 'BENGAL granite', '22.2713298', '87.8843221', 1),
(20, 'Siddha', '22.420259', '87.7723802', 1),
(21, 'Sonamui', '22.5085249', '87.7429976', 0),
(22, 'Sultannagar', '22.5582099', '87.7212726', 0),
(23, 'Daspur', '22.6065372', '87.7146506', 0),
(24, 'Ghatal', '22.6606622', '87.7019468', 0),
(25, 'Khirpai', '22.7054714,', '87.5995728', 0),
(26, 'Ramjibanpur', '22.825118', '87.5903889', 0),
(27, 'Kamarpukur', '22.8997384', '87.6477241', 0);

-- --------------------------------------------------------

--
-- Table structure for table `route_master`
--

CREATE TABLE IF NOT EXISTS `route_master` (
  `id` int(11) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `place_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route_master`
--

INSERT INTO `route_master` (`id`, `bus_id`, `place_id`) VALUES
(3, 1, 20),
(4, 1, 21),
(5, 1, 22),
(6, 1, 23),
(7, 1, 24),
(8, 1, 25),
(9, 2, 22),
(10, 2, 23),
(11, 2, 24),
(12, 2, 25),
(13, 3, 1),
(14, 3, 2),
(15, 3, 3),
(16, 3, 4),
(17, 3, 5),
(18, 3, 6),
(19, 3, 7),
(20, 3, 8),
(21, 3, 9),
(22, 3, 10),
(23, 4, 20),
(24, 4, 21),
(25, 4, 22),
(26, 4, 23),
(27, 5, 1),
(28, 5, 2),
(29, 5, 3),
(30, 5, 4),
(31, 5, 5),
(32, 5, 6),
(33, 5, 7),
(34, 5, 8),
(35, 5, 9),
(36, 5, 10),
(37, 5, 11),
(38, 5, 12),
(39, 5, 13),
(40, 5, 14),
(41, 5, 15),
(42, 5, 16);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bus_master`
--
ALTER TABLE `bus_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bus_timing`
--
ALTER TABLE `bus_timing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `place_master`
--
ALTER TABLE `place_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `route_master`
--
ALTER TABLE `route_master`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bus_master`
--
ALTER TABLE `bus_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `bus_timing`
--
ALTER TABLE `bus_timing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `place_master`
--
ALTER TABLE `place_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `route_master`
--
ALTER TABLE `route_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
