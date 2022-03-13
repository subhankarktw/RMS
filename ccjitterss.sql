-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2022 at 05:09 PM
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
-- Database: `ccjitterss`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `food` varchar(200) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `food`, `message`) VALUES
(0, 'Dosa', 'fc'),
(0, 'Dosa', 'Good!'),
(0, 'Dosa', 'Good!'),
(8, 'Dosa', 'Good!'),
(1, 'chilli', 'okay need improve');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `Name`, `email`, `message`, `status`) VALUES
(2, 'DEBOJYOTI DAS', 'debojyotidas9294@gmail.com', 'hi', 1),
(3, 'DEBOJYOTI DAS', 'debojyotidas9294@gmail.com', 'hello', 1),
(4, 'DEBOJYOTI DAS', 'debojyotidas9294@gmail.com', 'hello new form reply\r\n', 0);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `State` varchar(20) NOT NULL,
  `password` varchar(500) NOT NULL,
  `file` varchar(250) NOT NULL,
  `usertype` varchar(250) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `Name`, `Email`, `Phone`, `Address`, `City`, `State`, `password`, `file`, `usertype`) VALUES
(1, 'DEBOJYOTI DAS', 'debojyotidas9294@gmail.com', '875,OLD KAPASDANGA H', '6290289148', 'HOOGHLY', 'West Bengal', '$2y$10$NepPpMKl1FPQhQbOB6iJN.uRDX7IwIPNrehBqLbV53dSsjjKFxy.u', 'profile-logo/WhatsApp Image 2022-01-29 at 4.11.02 PM.jpeg', 'user'),
(2, 'admin', 'ccjitterss21@gmail.com', '9831145423', 'M.M Road Pipulpati-712103', 'Hooghly', 'West Bengal', 'admin@ccjitterss2022', '', 'admin'),
(4, 'CHANDAN DAULI', 'chandandalui@gmail.com', '08902959702', '875,OLD KAPASDANGA HOOGHLY', 'HOOGHLY', 'West Bengal', '$2y$10$4BqnxXW4suLLJhpBRkfgP.vTI1CLjWPuVbBlTg1VaCZxF5MTbWFJ6', 'profile-logo/Chandan.jpeg', 'employee');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `ob` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `bn` varchar(20) NOT NULL,
  `amt` varchar(20) NOT NULL,
  `ct` varchar(50) NOT NULL,
  `cd` varchar(20) NOT NULL,
  `online` varchar(50) NOT NULL,
  `exp` varchar(20) NOT NULL,
  `spend` varchar(100) NOT NULL,
  `deposit` varchar(20) NOT NULL,
  `remarks` varchar(200) NOT NULL,
  `opca` varchar(20) NOT NULL,
  `opcae` varchar(20) NOT NULL,
  `netclosing` varchar(20) NOT NULL,
  `bavl` varchar(3) NOT NULL,
  `fund` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `ob`, `date`, `bn`, `amt`, `ct`, `cd`, `online`, `exp`, `spend`, `deposit`, `remarks`, `opca`, `opcae`, `netclosing`, `bavl`, `fund`) VALUES
(1, '23', '2022-01-28', '569', '5126', 'cash/gpay', '0', 'gpay', '22', 'cake', '3201', 'na', '5149', '5127', '1926', 'Y', 'Chandan'),
(2, '23', '2022-01-29', '562', '5225', 'gpay', '0', '4565', '56', 'cake', 'sa', '565', '626', '55', '656', '662', '655656'),
(3, '23', '2022-02-04', '566', '5126', 'cash/gpay', '0', 'gpay', '22', 'cake', '3201', 'na', '5149', '5127', '1926', 'Y', 'Chandan'),
(4, '99', '2022-02-04', '', '', '', '', '', '', '', '', '', '0', '0', '0', '', ''),
(5, '99', '2022-02-04', '566', '5126', 'cash/gpay', '0', 'gpay', '22', 'cake', '3201', 'na', '0', '0', '0', 'Y', 'Chandan'),
(6, '23', '2022-02-03', '5654', '', '', '', '', '', '', '', '', '0', '0', '0', '', ''),
(7, '', '1970-01-01', '', '', '', '', '', '', '', '', '', '0', '0', '0', '', ''),
(8, '', '1970-01-01', '', '', '', '', '', '', '', '', '', '0', '0', '0', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
