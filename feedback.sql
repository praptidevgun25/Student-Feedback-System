-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 22, 2020 at 02:00 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feedback`
--

-- --------------------------------------------------------

--
-- Table structure for table `2019006150`
--

CREATE TABLE `2019006150` (
  `subject` varchar(50) NOT NULL,
  `feedback1` varchar(20) NOT NULL,
  `feedback2` varchar(20) NOT NULL,
  `feedback3` varchar(20) NOT NULL,
  `feedback4` varchar(20) NOT NULL,
  `feedback5` varchar(20) NOT NULL,
  `feedback6` varchar(20) NOT NULL,
  `feedback7` varchar(20) NOT NULL,
  `feedback8` varchar(500) NOT NULL,
  `feedback9` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `2019536798`
--

CREATE TABLE `2019536798` (
  `subject` varchar(50) NOT NULL,
  `feedback1` varchar(20) NOT NULL,
  `feedback2` varchar(20) NOT NULL,
  `feedback3` varchar(20) NOT NULL,
  `feedback4` varchar(20) NOT NULL,
  `feedback5` varchar(20) NOT NULL,
  `feedback6` varchar(20) NOT NULL,
  `feedback7` varchar(20) NOT NULL,
  `feedback8` varchar(500) NOT NULL,
  `feedback9` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `2019544008`
--

CREATE TABLE `2019544008` (
  `subject` varchar(50) NOT NULL,
  `feedback1` varchar(20) NOT NULL,
  `feedback2` varchar(20) NOT NULL,
  `feedback3` varchar(20) NOT NULL,
  `feedback4` varchar(20) NOT NULL,
  `feedback5` varchar(20) NOT NULL,
  `feedback6` varchar(20) NOT NULL,
  `feedback7` varchar(20) NOT NULL,
  `feedback8` varchar(500) NOT NULL,
  `feedback9` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `S.no` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Sys_id` int(10) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`S.no`, `Username`, `Sys_id`, `Password`) VALUES
(1, 'Shubham Tongaria', 2019544008, '1234'),
(2, 'Prapti Devgun', 2019536798, '1234'),
(3, 'Paranjot Singh', 2019006150, '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`S.no`),
  ADD UNIQUE KEY `Sys_id` (`Sys_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `S.no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
