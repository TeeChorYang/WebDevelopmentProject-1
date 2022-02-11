-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2022 at 02:56 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wdt092021`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookair`
--

CREATE TABLE `bookair` (
  `aid` int(10) NOT NULL,
  `fromcity` varchar(2500) NOT NULL,
  `tocity` varchar(2500) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `airline` varchar(20) NOT NULL,
  `address` varchar(2500) NOT NULL,
  `city` varchar(50) NOT NULL,
  `zip` varchar(10) NOT NULL,
  `state` varchar(50) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `material` varchar(100) NOT NULL,
  `shippingtype` varchar(15) NOT NULL,
  `paymethod` varchar(15) NOT NULL,
  `remark` varchar(2500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookair`
--

INSERT INTO `bookair` (`aid`, `fromcity`, `tocity`, `fullname`, `date`, `airline`, `address`, `city`, `zip`, `state`, `weight`, `material`, `shippingtype`, `paymethod`, `remark`) VALUES
(11, 'Malaysia', 'Norway', 'Tee Chor Yang', '2022-01-23', 'Malindo Airline', '36, Jalan WDT', 'Bukit Jalil', '801011', 'Kuala Lumpur', '<10kg', 'Diamond', 'Deluxe', 'Card', 'Care!!! its diamond');

-- --------------------------------------------------------

--
-- Table structure for table `booksea`
--

CREATE TABLE `booksea` (
  `sid` int(10) NOT NULL,
  `fromcity` varchar(2500) NOT NULL,
  `tocity` varchar(2500) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `shippingline` varchar(50) NOT NULL,
  `address` varchar(2500) NOT NULL,
  `city` varchar(2500) NOT NULL,
  `zip` int(10) NOT NULL,
  `state` varchar(50) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `material` varchar(50) NOT NULL,
  `shippingtype` varchar(50) NOT NULL,
  `paymethod` varchar(20) NOT NULL,
  `remark` varchar(2500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booksea`
--

INSERT INTO `booksea` (`sid`, `fromcity`, `tocity`, `fullname`, `date`, `shippingline`, `address`, `city`, `zip`, `state`, `weight`, `material`, `shippingtype`, `paymethod`, `remark`) VALUES
(5, 'Malaysia', 'Singapore', 'Lee Jia QIan', '2022-01-23', '', '37, Jalan WDT', 'Bukit Jalil', 47100, 'Kuala Lumpur', '<15kg', 'Iron', 'Standard', 'Card', 'Care!! its heavy ');

-- --------------------------------------------------------

--
-- Table structure for table `domesticshipping`
--

CREATE TABLE `domesticshipping` (
  `doid` int(10) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `address` varchar(2500) NOT NULL,
  `suite` varchar(50) DEFAULT NULL,
  `city` varchar(50) NOT NULL,
  `zip` int(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `material` varchar(50) NOT NULL,
  `shippingtype` varchar(50) NOT NULL,
  `paymethod` varchar(10) NOT NULL,
  `remark` varchar(2500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `domesticshipping`
--

INSERT INTO `domesticshipping` (`doid`, `fname`, `lname`, `address`, `suite`, `city`, `zip`, `state`, `weight`, `material`, `shippingtype`, `paymethod`, `remark`) VALUES
(4, 'Chor Yang', 'Tee', '36, Jalan WDT', 'APU', 'Bukit Jalil', 47100, 'Kuala Lumpur', '<10kg', 'Iron', 'Express', 'Card', 'Care with my package');

-- --------------------------------------------------------

--
-- Table structure for table `jobpost`
--

CREATE TABLE `jobpost` (
  `pid` int(10) NOT NULL,
  `fullname` varchar(11) NOT NULL,
  `contactnumber` int(20) NOT NULL,
  `pickup` varchar(2500) NOT NULL,
  `dropoff` varchar(2500) NOT NULL,
  `deliverytype` varchar(15) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `material` varchar(50) NOT NULL,
  `shippingtype` varchar(30) NOT NULL,
  `paymentmethod` varchar(20) NOT NULL,
  `remark` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobpost`
--

INSERT INTO `jobpost` (`pid`, `fullname`, `contactnumber`, `pickup`, `dropoff`, `deliverytype`, `weight`, `material`, `shippingtype`, `paymentmethod`, `remark`) VALUES
(37, 'Lee Jia QIa', 127123123, 'APU', 'UPA', 'Standard', '<10kg', 'Iron', 'Standard', 'Card', '<3');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `mid` int(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(2500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`mid`, `name`, `email`, `message`) VALUES
(7, 'ChorYang', 'ChorYang@gmail.com', 'Sample letter to customer for overdue payment after lockdown due to Corona pandemic.\r\nCould you please help to write a letter to customer for outstanding payment after lockdown in a polite and request language. Kindly post a letter in regard to this\r\nregards,'),
(10, 'JiaQian', 'JiaQian@gmail.com', 'Order number:1111059282931\r\nWe regret to know about the delay in delivery. We were not expecting such imprudent behavior from your side. We ordered you cosmetics products on January 10, 2014 and you guaranteed us to give delivery within 3 weeks, we didn’t receive the order yet.\r\n\r\nIt’s been very unpleasant for our work to have such delay in delivery because it gives bad impression to suppliers also. We sought you to complete the order within two days. Otherwise regretfully, we will have to cancel the order or place it to the other party.\r\n\r\nWe feel that you will respond quickly and give explanation for the delay in delivery for the order.'),
(11, 'Jack Ma', 'jackma@mail.fake', 'Dear Radiant, I want you to know how much I appreciate the excellent service you provided on delivery. Your attention to detail, great communication skills, and delivery speed made the experience even better than I expected.');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payid` int(10) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nameoncard` varchar(100) NOT NULL,
  `address` varchar(2500) NOT NULL,
  `ccardnumber` int(50) NOT NULL,
  `city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payid`, `fullname`, `email`, `nameoncard`, `address`, `ccardnumber`, `city`) VALUES
(4, 'Tee Chor Yang', 'choryang@gmail.com', 'Tee Chor Yang', '36, Jalan WDT', 2147483647, 'Bukit Jalil'),
(5, 'Lee Jia Qian', 'jiaqian@gmail.com', 'Lee Jia Qian', '37, Jalan WDT', 2147483647, 'Bukit Jalil'),
(6, 'Tee Chor Yang', 'cyang0330@gmail.com', 'Tee Chor Yang', '36, Jalan WDT', 2147483647, 'Bukit Jalil'),
(7, 'Lee Jia QIan', 'jiaqian@gmail.com', 'Lee Jia Qian', '37, Jalan WDT', 2147483647, 'Bukit Jalil');

-- --------------------------------------------------------

--
-- Table structure for table `rcustomers`
--

CREATE TABLE `rcustomers` (
  `cid` int(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `Fname` varchar(50) DEFAULT NULL,
  `Lname` varchar(50) DEFAULT NULL,
  `gender` varchar(15) DEFAULT NULL,
  `mobile_num` varchar(20) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `address1` varchar(50) DEFAULT NULL,
  `address2` varchar(50) DEFAULT NULL,
  `postal_code` varchar(20) DEFAULT NULL,
  `area` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `adddetails` varchar(100) DEFAULT NULL,
  `role` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rcustomers`
--

INSERT INTO `rcustomers` (`cid`, `username`, `email`, `password`, `Fname`, `Lname`, `gender`, `mobile_num`, `birthday`, `address1`, `address2`, `postal_code`, `area`, `state`, `adddetails`, `role`) VALUES
(535, 'Radiant', 'radiant@mail.radiant', '123', 'Radiant', 'xD', 'Other', '+60 123456789', '2022-01-21', '32,Jalan Radiant', 'Taman Valorant', '80100', 'Riot', 'Kuala Lumpur', 'We Love WDT', '2'),
(536, 'JiaQian', 'jiaqian@gmail.com', '123', 'TP061863', 'Lee Jia Qian', 'Male', '+60 123456789', '2022-01-21', '37,Jalan WDT', 'Taman APU', '47100', 'Bukit Jalil', 'Kuala Lumpur', 'WDT IS FUN', '2'),
(537, 'ChorYang', 'choryang@gmail.com', '123', 'TP061339', 'Tee Chor Yang', 'Male', '+60 123456789', '2022-01-21', '36,Jalan WDT', 'Taman APU', '80100', 'Bukit Jalil', 'Kuala Lumpur', 'WDT IS FUN', '2');

-- --------------------------------------------------------

--
-- Table structure for table `rdriver`
--

CREATE TABLE `rdriver` (
  `did` int(10) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_num` varchar(20) NOT NULL,
  `identity_num` varchar(20) NOT NULL,
  `race` text NOT NULL,
  `religion` text NOT NULL,
  `gender` text NOT NULL,
  `state` text NOT NULL,
  `area` text NOT NULL,
  `postal_code` int(15) DEFAULT NULL,
  `country` text DEFAULT NULL COMMENT 'Malaysia',
  `mode_of_delivery` text NOT NULL,
  `working_hours` varchar(25) NOT NULL,
  `experience` varchar(50) NOT NULL,
  `emergency_c` varchar(50) NOT NULL,
  `medical` varchar(50) DEFAULT NULL,
  `info` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rdriver`
--

INSERT INTO `rdriver` (`did`, `first_name`, `last_name`, `email`, `mobile_num`, `identity_num`, `race`, `religion`, `gender`, `state`, `area`, `postal_code`, `country`, `mode_of_delivery`, `working_hours`, `experience`, `emergency_c`, `medical`, `info`) VALUES
(6, 'Jia Qian', 'Lee', 'jiaqian@gmail.com', '+60 123987654', '020101-01-1116', 'Chinese', 'Buddhism', 'male', 'Kuala Lumpur', 'Puchong', 47100, '', 'Car', '6 hours', 'Driver car for 4 years, No', 'Lee Jia Qing, +60127110221', '', ''),
(7, 'Chor Yang', 'Tee', 'choryang@gmail.com', '+60 123450000', '010101-01-1000', 'Chinese', 'Buddhism', 'male', 'Johor', 'Johor Bahru', 80100, '', 'Car', '4 hours', 'Driver car for 5 years, No', 'Tee, +60127111111', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `vrddriver`
--

CREATE TABLE `vrddriver` (
  `vrfid` int(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_num` varchar(20) NOT NULL,
  `identity_num` varchar(20) NOT NULL,
  `race` text NOT NULL,
  `religion` text NOT NULL,
  `gender` text NOT NULL,
  `state` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `postal_code` int(15) NOT NULL,
  `country` text DEFAULT NULL COMMENT 'Malaysia',
  `mode_of_delivery` text NOT NULL,
  `working_hours` varchar(25) NOT NULL,
  `experience` varchar(50) NOT NULL,
  `emergency_c` varchar(50) NOT NULL,
  `medical` varchar(50) DEFAULT NULL,
  `info` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vrddriver`
--

INSERT INTO `vrddriver` (`vrfid`, `username`, `password`, `first_name`, `last_name`, `email`, `mobile_num`, `identity_num`, `race`, `religion`, `gender`, `state`, `area`, `postal_code`, `country`, `mode_of_delivery`, `working_hours`, `experience`, `emergency_c`, `medical`, `info`) VALUES
(1, 'Radiant', '123', 'Verified', 'Driver', 'vrfdriver@mail.radiant', '+60123456789', '010101-01-1000', 'M', 'M', 'Male', 'Johor', 'Johor Bahru', 80100, NULL, 'Car', '0', '0', '0', '0', '0'),
(6, 'ChorYang', '123', 'Chor Yang', 'Tee', 'choryang@gamil.com', '+60123450000', '010101-01-1000', 'Chinese', 'Buddhism', 'Male', 'Johor', 'Johor Bahru', 80100, NULL, 'Car', '4 Hours', 'Drive car for 5 years', 'Tee, +60127111111', NULL, NULL),
(7, 'JiaQian', '123', 'Jia Qian', 'Lee', 'JiaQian@gmail.com', '+60123456789', '020101-01-1112', 'Chinses ', 'Buddhism', 'Male', 'Kuala Lumpur', 'Puchong', 47100, NULL, 'Car', '6 Hours', 'Drive car for 4 years', 'Lee Jia Qian, +60127110221', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookair`
--
ALTER TABLE `bookair`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `booksea`
--
ALTER TABLE `booksea`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `domesticshipping`
--
ALTER TABLE `domesticshipping`
  ADD PRIMARY KEY (`doid`);

--
-- Indexes for table `jobpost`
--
ALTER TABLE `jobpost`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payid`);

--
-- Indexes for table `rcustomers`
--
ALTER TABLE `rcustomers`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `rdriver`
--
ALTER TABLE `rdriver`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `vrddriver`
--
ALTER TABLE `vrddriver`
  ADD PRIMARY KEY (`vrfid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookair`
--
ALTER TABLE `bookair`
  MODIFY `aid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `booksea`
--
ALTER TABLE `booksea`
  MODIFY `sid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `domesticshipping`
--
ALTER TABLE `domesticshipping`
  MODIFY `doid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jobpost`
--
ALTER TABLE `jobpost`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `mid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rcustomers`
--
ALTER TABLE `rcustomers`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=538;

--
-- AUTO_INCREMENT for table `rdriver`
--
ALTER TABLE `rdriver`
  MODIFY `did` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vrddriver`
--
ALTER TABLE `vrddriver`
  MODIFY `vrfid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
