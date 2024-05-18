-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2020 at 04:54 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `name` varchar(30) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`name`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bloodbank`
--

CREATE TABLE `bloodbank` (
  `bid` int(11) NOT NULL,
  `bname` varchar(50) DEFAULT NULL,
  `doorno` int(11) DEFAULT NULL,
  `streetname` varchar(30) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `district` varchar(30) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `contact_no` bigint(20) DEFAULT NULL,
  `Opas` int(6) DEFAULT NULL,
  `Oneg` int(6) DEFAULT NULL,
  `Apas` int(6) DEFAULT NULL,
  `Aneg` int(6) DEFAULT NULL,
  `Bpas` int(6) DEFAULT NULL,
  `Bneg` int(6) DEFAULT NULL,
  `ABpas` int(6) DEFAULT NULL,
  `ABneg` int(6) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bloodbank`
--

INSERT INTO `bloodbank` (`bid`, `bname`, `doorno`, `streetname`, `city`, `district`, `state`, `contact_no`, `Opas`, `Oneg`, `Apas`, `Aneg`, `Bpas`, `Bneg`, `ABpas`, `ABneg`, `password`) VALUES
(101, 'karthi', 12, 'raja', 'tirumangalam', 'madurai', 'tamilnadu', 9876542310, 0, 0, 0, 0, 0, 0, 0, 0, '123'),
(104, 'new ', 39, 'Market Street', '1', 'Nagapattinam', '1', 9987654321, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(105, 'Ka', 39, 'Market Street', '1', 'Krishnagiri', '1', 9987654321, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '123'),
(106, 'K1 BloodBank', 12, 'Raja Street', 'Tirumangalam', 'Madurai', 'TamilNadu', 9987654321, 5, 0, 1, 0, 0, 0, 0, 0, '123');

-- --------------------------------------------------------

--
-- Table structure for table `blood_issued`
--

CREATE TABLE `blood_issued` (
  `quantity` int(11) DEFAULT NULL,
  `brid` int(11) DEFAULT NULL,
  `date_of_issued` date DEFAULT NULL,
  `bid` int(11) DEFAULT NULL,
  `blood_group` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood_issued`
--

INSERT INTO `blood_issued` (`quantity`, `brid`, `date_of_issued`, `bid`, `blood_group`) VALUES
(1, 4, '2020-04-05', 106, 'O+'),
(1, 5, '2020-04-06', 106, 'A+');

-- --------------------------------------------------------

--
-- Table structure for table `br_details`
--

CREATE TABLE `br_details` (
  `brid` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `gender` varchar(8) DEFAULT NULL,
  `doorno` int(11) DEFAULT NULL,
  `street` varchar(40) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `district` varchar(30) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `blood_group` varchar(4) DEFAULT NULL,
  `bid` int(11) DEFAULT NULL,
  `email_id` varchar(30) DEFAULT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `date_of_req` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `br_details`
--

INSERT INTO `br_details` (`brid`, `name`, `gender`, `doorno`, `street`, `city`, `district`, `state`, `quantity`, `blood_group`, `bid`, `email_id`, `mobile`, `status`, `date_of_req`) VALUES
(4, 'karthi', 'male', 39, 'Keyan Street', 'Tirumangalam', 'Madurai', '1', 1, 'O+', 106, 'karthi@gmail.com', 9987654321, 1, '2020-04-05'),
(5, 'Karthikeyan', 'male', 12, 'Market Street', 'Tirumanagalam', 'Madurai', '1', 1, 'A+', 106, 'keyan2663@gmail.com', 8110981089, 1, '2020-04-06');

-- --------------------------------------------------------

--
-- Table structure for table `camp_detail`
--

CREATE TABLE `camp_detail` (
  `camp_id` int(11) NOT NULL,
  `cname` varchar(50) DEFAULT NULL,
  `date_of_organization` date DEFAULT NULL,
  `bid` int(11) DEFAULT NULL,
  `place_of_organization` varchar(70) DEFAULT NULL,
  `doorno` varchar(10) DEFAULT NULL,
  `streetname` varchar(50) DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `camp_detail`
--

INSERT INTO `camp_detail` (`camp_id`, `cname`, `date_of_organization`, `bid`, `place_of_organization`, `doorno`, `streetname`, `district`, `state`, `city`) VALUES
(48, 'Nss Blood Camp', '2020-04-15', 105, 'Madurai Govt Hospital', '39', 'Market Street', 'Madurai', 'TamilNadu', 'Tirumangalam'),
(49, 'Nss Blood Camp', '2020-04-15', 106, 'Madurai Govt Hospital', '39', 'Market Street', 'Madurai', 'TamilNadu', 'Tirumangalam'),
(50, 'Red Cross Organization Camp', '2020-07-22', 106, 'Madurai Govt Hospital', '39', 'Market Street', 'Madurai', 'TamilNadu', 'Tirumangalam'),
(51, 'Keyan Donation Camp', '2020-08-03', 106, 'Ramachandra Hospital', '123', 'Market Street', 'Madurai', 'TamilNadu', 'Tirumangalam');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `did` int(11) DEFAULT NULL,
  `camp_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`did`, `camp_id`, `quantity`) VALUES
(131, 49, 1),
(131, 50, 1),
(131, 50, 1),
(131, 50, 1),
(134, 50, 1),
(134, 49, 1);

-- --------------------------------------------------------

--
-- Table structure for table `donor_detail`
--

CREATE TABLE `donor_detail` (
  `did` int(11) NOT NULL,
  `email_id` varchar(30) DEFAULT NULL,
  `dname` varchar(30) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `gender` varchar(8) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `doorno` int(11) DEFAULT NULL,
  `street_name` varchar(30) DEFAULT NULL,
  `city` varchar(40) DEFAULT NULL,
  `district` varchar(40) DEFAULT NULL,
  `state` varchar(40) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `blood_group` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor_detail`
--

INSERT INTO `donor_detail` (`did`, `email_id`, `dname`, `dob`, `mobile`, `gender`, `weight`, `doorno`, `street_name`, `city`, `district`, `state`, `password`, `blood_group`) VALUES
(131, 'karthi18@gmail.com', 'karthi', '2000-12-04', 9987654321, 'male', 56, 39, 'Market Street', '1', 'Madurai', '1', '12345', 'O+'),
(134, 'keyan2663@gmail.com', 'Karthikeyan', '2000-12-04', 8110981089, 'male', 56, 12, 'Market Street', 'Tirumanagalam', 'Madurai', 'TamilNadu', '12345', 'A+');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `bloodbank`
--
ALTER TABLE `bloodbank`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `blood_issued`
--
ALTER TABLE `blood_issued`
  ADD KEY `bid` (`bid`);

--
-- Indexes for table `br_details`
--
ALTER TABLE `br_details`
  ADD PRIMARY KEY (`brid`),
  ADD KEY `bid` (`bid`);

--
-- Indexes for table `camp_detail`
--
ALTER TABLE `camp_detail`
  ADD PRIMARY KEY (`camp_id`),
  ADD KEY `bid` (`bid`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD KEY `did` (`did`),
  ADD KEY `camp_id` (`camp_id`);

--
-- Indexes for table `donor_detail`
--
ALTER TABLE `donor_detail`
  ADD PRIMARY KEY (`did`),
  ADD UNIQUE KEY `email_id` (`email_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bloodbank`
--
ALTER TABLE `bloodbank`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `br_details`
--
ALTER TABLE `br_details`
  MODIFY `brid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `camp_detail`
--
ALTER TABLE `camp_detail`
  MODIFY `camp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `donor_detail`
--
ALTER TABLE `donor_detail`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blood_issued`
--
ALTER TABLE `blood_issued`
  ADD CONSTRAINT `blood_issued_ibfk_2` FOREIGN KEY (`bid`) REFERENCES `bloodbank` (`bid`);

--
-- Constraints for table `br_details`
--
ALTER TABLE `br_details`
  ADD CONSTRAINT `br_details_ibfk_1` FOREIGN KEY (`bid`) REFERENCES `bloodbank` (`bid`);

--
-- Constraints for table `camp_detail`
--
ALTER TABLE `camp_detail`
  ADD CONSTRAINT `camp_detail_ibfk_1` FOREIGN KEY (`bid`) REFERENCES `bloodbank` (`bid`);

--
-- Constraints for table `donation`
--
ALTER TABLE `donation`
  ADD CONSTRAINT `donation_ibfk_1` FOREIGN KEY (`did`) REFERENCES `donor_detail` (`did`),
  ADD CONSTRAINT `donation_ibfk_2` FOREIGN KEY (`camp_id`) REFERENCES `camp_detail` (`camp_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
