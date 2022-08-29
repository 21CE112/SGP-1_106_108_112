-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2022 at 08:41 PM
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
-- Database: `login_detailes`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `srno` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`srno`, `email`, `password`, `date`) VALUES
(1, 'root', '', '2022-08-18 16:18:46'),
(2, 'root', '', '2022-08-18 16:18:51'),
(3, 'root', '', '2022-08-18 16:18:52'),
(4, 'root', '', '2022-08-18 16:18:52'),
(5, 'Yuvrajsinh Bodana', '040903', '2022-08-18 16:19:45'),
(6, 'Yuvrajsinh Bodana', '040903', '2022-08-18 16:21:26'),
(7, '', '', '2022-08-18 16:21:58'),
(8, '', '', '2022-08-18 16:22:02'),
(9, 'abcd', '25896', '2022-08-18 16:22:27'),
(10, 'abcd', '25896', '2022-08-18 17:34:03'),
(11, 'abcd', '25896', '2022-08-18 17:34:08'),
(12, 'abcd', '25896', '2022-08-18 17:47:06'),
(13, 'abcd', '25896', '2022-08-18 17:47:41'),
(14, 'abcd', '25896', '2022-08-18 17:47:44'),
(15, 'abcd', '25896', '2022-08-18 17:48:17'),
(16, 'abcd', '25896', '2022-08-18 17:48:29'),
(17, 'abcd', '25896', '2022-08-18 17:49:48'),
(18, 'aryaanrabara0603', '5236', '2022-08-18 17:50:00'),
(19, 'aryaanrabara0603', '5236', '2022-08-18 17:52:08'),
(20, 'aryaanrabara0603', '5236', '2022-08-18 17:52:13'),
(21, 'aryaanrabara0603', '5236', '2022-08-18 17:52:47'),
(22, 'aryaanrabara0603', '5236', '2022-08-18 17:52:57'),
(23, 'aryaanrabara0603', '5236', '2022-08-18 17:54:04'),
(24, 'aryaanrabara0603', '5236', '2022-08-18 17:55:10'),
(25, 'aryaanrabara0603', '5236', '2022-08-18 17:55:14'),
(26, 'aryaanrabara0603', '5236', '2022-08-18 17:56:44'),
(27, 'aryaanrabara0603', '5236', '2022-08-18 17:57:46'),
(28, 'aryaanrabara0603', '5236', '2022-08-18 17:59:11'),
(29, 'aryaanrabara0603', '5236', '2022-08-18 17:59:32'),
(30, 'aryaanrabara0603', '5236', '2022-08-18 18:00:03'),
(31, 'aryaanrabara0603', '5236', '2022-08-18 18:02:58'),
(32, 'aryaanrabara0603', '5236', '2022-08-18 18:08:07'),
(33, 'aryaanrabara0603', '5236', '2022-08-18 18:08:12'),
(34, 'aryaan', 'Aryaan@270', '2022-08-29 23:54:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`srno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `srno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
