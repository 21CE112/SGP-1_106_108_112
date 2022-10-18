-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2022 at 11:40 AM
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
-- Database: `appointment`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `Sr.No` int(5) NOT NULL,
  `Full Name` text NOT NULL,
  `User Name` varchar(20) NOT NULL,
  `Email` text NOT NULL,
  `Phone Number` text NOT NULL,
  `Password` text NOT NULL,
  `Confirm Password` varchar(20) NOT NULL,
  `Date` text NOT NULL,
  `Time` text NOT NULL,
  `Issue` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`Sr.No`, `Full Name`, `User Name`, `Email`, `Phone Number`, `Password`, `Confirm Password`, `Date`, `Time`, `Issue`) VALUES
(1, 'Aryaan Rabara', 'Aryaan123', 'A@gmail.com', '9876543876', 'wedrfghnm', 'wedfghn', '2022-10-19', '12:00', 'AC servicing'),
(2, 'Yuvraj', 'Yuvraj@04', 'y@gmail.com', '9887655432', '213265', '213265', '2022-10-18', '21:10', 'Plumbing ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`Sr.No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `Sr.No` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
