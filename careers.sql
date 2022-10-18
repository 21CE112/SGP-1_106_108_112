-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2022 at 09:19 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `careers`
--

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `Sr.no` int(10) NOT NULL,
  `First Name` varchar(25) NOT NULL,
  `Last Name` varchar(25) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Phone` int(10) NOT NULL,
  `Desired Position` varchar(15) NOT NULL,
  `Desired salary` int(10) NOT NULL,
  `First Company Name` varchar(10) NOT NULL,
  `position` varchar(10) NOT NULL,
  `FS Date` date NOT NULL,
  `FE Date` date NOT NULL,
  `Second Company Name` varchar(10) NOT NULL,
  `S Position` varchar(10) NOT NULL,
  `SS Date` date NOT NULL,
  `SE Date` date NOT NULL,
  `Third Company Name` varchar(10) NOT NULL,
  `T Position` varchar(10) NOT NULL,
  `TS Date` date NOT NULL,
  `TE Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`Sr.no`, `First Name`, `Last Name`, `Email`, `Password`, `Address`, `Phone`, `Desired Position`, `Desired salary`, `First Company Name`, `position`, `FS Date`, `FE Date`, `Second Company Name`, `S Position`, `SS Date`, `SE Date`, `Third Company Name`, `T Position`, `TS Date`, `TE Date`) VALUES
(1, 'divyesh', 'pindariya', 'ABCD@gmail.com', '1234', 'B1/206,ksjcn,kajcnszc', 1234567890, 'worker', 10000, 'LG', 'worker', '2022-10-10', '2023-10-25', 'panasonic', 'worker', '2022-10-27', '2023-10-23', 'Samsung', 'worker', '2022-10-26', '2024-10-31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`Sr.no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `Sr.no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
