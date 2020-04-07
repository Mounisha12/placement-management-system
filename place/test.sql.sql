-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2018 at 10:52 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studentID` varchar(10) NOT NULL,
  `studentName` varchar(150) NOT NULL,
  `address` varchar(100) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `CGPA` float(3,3) NOT NULL,
  `contactNum` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studentID`, `studentName`, `address`, `dept`, `CGPA`, `contactNum`) VALUES
('1DT17IS001', 'roger federer', 'vv nagar, siruguppa', 'ISE', 8.2, 9480971999);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `companyID` int(10) NOT NULL,
  `companyName` varchar(150) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contactNum` bigint(10) NOT NULL,
  `package` int(10) NOT NULL,
  `requiredGrade` float(3,3) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`companyID`, `companyName`, `address`, `contactNum`, `package`, `requiredGrade`) VALUES
('1DT1', 'infosys', 'bengaluru', 9448862468, 400000, 7.00);

-- --------------------------------------------------------

--
-- Table structure for table `placed`
--

CREATE TABLE `placed` (
  `studentID` varchar(10) NOT NULL,
  `studentName` varchar(150) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `company` varchar(50) NOT NULL,
  `companyID` varchar(10) NOT NULL,
  `salary` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `placed`
--

INSERT INTO `placed` (`studentID`, `studentName`, `branch`, `company`, `salary`) VALUES
('1DT17IS001', 'roger', 'ISE', 'infosys', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `interview`
--

CREATE TABLE `interview` (
  `studentID` varchar(10) NOT NULL,
  `companyID` varchar(10) NOT NULL,
  `offerNum` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interview`
--

INSERT INTO `interview` (`studentID`, `companyID`, `offerNum`) VALUES
('1DT17IS001', '1DT1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `criteria_info`
--

CREATE TABLE `criteria_info` (
    `companyID` varchar(10) NOT NULL,
  `criteriaID` varchar(10) NOT NULL,
  `requiredGrade` float(3,3) NOT NULL 
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `criteria_info`
--

INSERT INTO `criteria_info` (`companyId`, `criteriaID`, `requiredGrade`) VALUES
( '1DT1', 'c1', 7.00);

-- --------------------------------------------------------

--
-- Table structure for table `cordinator`
--

CREATE TABLE `cordinator` (
  `cordinatorID` varchar(10) NOT NULL,
  `name` varchar(150) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contactNum` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cordinator`
--

INSERT INTO `cordinator` (`cordinatorID`, `name`, `address`, `contactNum`) VALUES
('1qwe', 'sumanth', 'bangalore', 9876543210);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studentID`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`companyID`);

--
-- Indexes for table `placed`
--
ALTER TABLE `placed`
  ADD PRIMARY KEY (`studentID`);

--
-- Indexes for table `interview`
--
ALTER TABLE `interview`
  ADD PRIMARY KEY (`studentId`);

--
-- Indexes for table `criteria_info`
--
ALTER TABLE `criteria_info`
  ADD PRIMARY KEY (`companyID`);

--
-- Indexes for table `cordinator`
--
ALTER TABLE `cordinator`
  ADD PRIMARY KEY (`cordinatorID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `companyID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
