-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2021 at 02:48 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bookID` int(10) NOT NULL,
  `bookFromCampus` text NOT NULL,
  `bookToCampus` text NOT NULL,
  `bookDate` text NOT NULL,
  `bookTime` text NOT NULL,
  `studID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `busdriver`
--

CREATE TABLE `busdriver` (
  `driverID` int(10) NOT NULL,
  `driverStuffNo` text NOT NULL,
  `driverEmail` text NOT NULL,
  `driverPwd` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studID` int(10) NOT NULL,
  `studName` text NOT NULL,
  `studSurname` text NOT NULL,
  `studNo` tinytext NOT NULL,
  `studEmail` text NOT NULL,
  `studCampus` text NOT NULL,
  `studPwd` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studID`, `studName`, `studSurname`, `studNo`, `studEmail`, `studCampus`, `studPwd`) VALUES
(1, 'aasasas', 'sasasas', '216599390', '216599390@tut4life.ac.za', 'Soshanguve North Campus', '$2y$10$k/YxSBqeBXeG9xGXfsxPdueIcLkWjGX7kX/BSXdDMtH5ZYJ20reiG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bookID`);

--
-- Indexes for table `busdriver`
--
ALTER TABLE `busdriver`
  ADD PRIMARY KEY (`driverID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bookID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `busdriver`
--
ALTER TABLE `busdriver`
  MODIFY `driverID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `studID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
