-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2021 at 02:23 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `usn` varchar(100) NOT NULL,
  `unix` int(10) NOT NULL,
  `dbms` int(10) NOT NULL,
  `atc` int(10) NOT NULL,
  `python` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`usn`, `unix`, `dbms`, `atc`, `python`) VALUES
('1ay18cs001', 80, 82, 79, 85),
('1ay18cs002', 84, 81, 82, 89),
('1ay18cs089', 89, 87, 84, 81),
('1ay18cs090', 90, 89, 76, 80),
('1ay18cs091', 85, 86, 83, 82);

-- --------------------------------------------------------

--
-- Table structure for table `iamarks`
--

CREATE TABLE `iamarks` (
  `usn` varchar(100) NOT NULL,
  `dbms` int(10) NOT NULL,
  `atc` int(11) NOT NULL,
  `unix` int(10) NOT NULL,
  `python` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `iamarks`
--

INSERT INTO `iamarks` (`usn`, `dbms`, `atc`, `unix`, `python`) VALUES
('1ay18cs001', 40, 40, 40, 40),
('1ay18cs002', 49, 46, 48, 47),
('1ay18cs089', 45, 45, 45, 45),
('1ay18cs090', 40, 50, 36, 38),
('1ay18cs091', 42, 40, 39, 46);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `s_no` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`s_no`, `name`, `email`, `password`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `s_no` int(11) NOT NULL,
  `usn` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `mobile` bigint(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `remark` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`s_no`, `usn`, `name`, `father_name`, `branch`, `mobile`, `email`, `password`, `remark`) VALUES
(1, '1ay18cs091', 'Rohit Kumar jharkhand', 'Manoj Kumar Gorai', 'cse', 8603168288, 'rohit@gmail.com', 'rohit@123', ''),
(2, '1ay18cs090', 'Ritwik', 'XYZ', '12', 1234567789, 'ritwik@gmail.com', 'ritwik@123', 'Fine'),
(3, '1ay18cs089', 'Rishabh', 'Sohan', '12', 254587458, 'rishabh@gmail.com', 'rishabh@123', 'Great boy'),
(4, '1ay18cs002', 'Bibhor', '', '12', 254587458, 'bibhor@gmail.com', 'bibhor@123', 'Great boy'),
(5, '1AY18CS001', 'Abhay', 'Xyz', 'cse', 8603168288, 'abhay@gmail.com', 'abhay', ''),
(17, 'sample', 'sample', 'sample', 'sample', 46466488, 'sample', 'sample', '');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `s_no` int(11) NOT NULL,
  `t_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` bigint(25) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `courses` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`s_no`, `t_id`, `name`, `mobile`, `branch`, `courses`) VALUES
(1, 101, 'Ancy Thomas', 5484654878, 'cse', 'DBMS'),
(2, 102, 'Rashmi', 9878452484, 'cse', 'Unix Programming'),
(3, 103, 'Karthik D U', 7887451254, 'cse', 'MEIT'),
(4, 104, 'Nisha', 884564645, 'cse', 'ATC'),
(5, 105, 'Shrutika', 464746646, 'CSE', 'Computer Network'),
(6, 106, 'Kavitha', 746646454, 'CSE', 'Python');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendence`
--
ALTER TABLE `attendence`
  ADD PRIMARY KEY (`usn`);

--
-- Indexes for table `iamarks`
--
ALTER TABLE `iamarks`
  ADD PRIMARY KEY (`usn`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`s_no`),
  ADD UNIQUE KEY `s_no` (`s_no`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`s_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
