-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2018 at 06:49 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erac`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user` varchar(30) NOT NULL,
  `pass` varchar(8) NOT NULL,
  `aid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user`, `pass`, `aid`) VALUES
('arif@gmail.com', 'arif123', 3),
('anil@gmail.com', 'anil', 7);

-- --------------------------------------------------------

--
-- Table structure for table `examiner`
--

CREATE TABLE `examiner` (
  `examid` int(8) NOT NULL,
  `sub` text NOT NULL,
  `subcode` varchar(10) NOT NULL,
  `bno` int(10) NOT NULL,
  `year` int(1) NOT NULL,
  `pno` int(5) NOT NULL,
  `course` varchar(6) NOT NULL,
  `c_u` text NOT NULL,
  `amount` int(5) NOT NULL,
  `aid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `examiner`
--

INSERT INTO `examiner` (`examid`, `sub`, `subcode`, `bno`, `year`, `pno`, `course`, `c_u`, `amount`, `aid`) VALUES
(12345678, 'AMI', 'CO13', 1, 1, 50, 'CO6G', 'Uncheck', 0, 1),
(12345678, 'am', 'a1', 11, 1, 2, 'aa', 'Checked', 0, 2),
(1234123, 'AJP', '172165', 66, 3, 78, 'CO', 'Checked', 1248, 11),
(1234123, 'APJ', '123322', 144, 3, 22, 'CO', 'Checked', 352, 12),
(1234123, 'm3', '17561', 52, 3, 25, 'co', 'Uncheck', 400, 13),
(123456789, 'chm', '17532', 36, 3, 25, 'co', 'Checked', 400, 14),
(123456789, 'chm', '17561', 88, 2, 26, 'co', 'Checked', 364, 15),
(1234123, 'ete', '74521', 18, 2, 154, 'co', 'Uncheck', 2156, 16),
(12345678, 'DS', 'S1', 35, 2, 100, 'comps', 'Uncheck', 1400, 17),
(12345678, 'dbms', 'C1', 32, 3, 10, 'IF', 'Uncheck', 160, 18),
(123456789, 'SEN', '1223', 33, 2, 45, 'CO', 'Checked', 630, 19),
(1090008, 'AMI', '17568', 22, 3, 25, 'CO', 'Checked', 400, 20),
(1090033, 'CHM', '17520', 27, 2, 40, 'CO', 'Checked', 560, 22),
(1090033, 'LPR', '17456', 44, 3, 80, 'CO', 'Checked', 1280, 23);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `examid` int(8) NOT NULL,
  `user_name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(8) NOT NULL,
  `college` text NOT NULL,
  `contact` bigint(20) NOT NULL,
  `eid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`examid`, `user_name`, `email`, `password`, `college`, `contact`, `eid`) VALUES
(1090001, 'ajinkya darekar ', 'ajinkya.darekar@vpt.edu.in', '10001', 'vpt', 8286640301, 6),
(1090002, 'anjali gharat', 'anjali.gharat@vpt.edu.in', '10002', 'vpt', 8286640302, 7),
(1090003, 'anjum mujawar', 'anjum.mujawar@vpt.edu.in', '10003', 'vpt', 8286640303, 8),
(1090004, 'apurva dilip sawant', 'apurva.sawant@vpt.edu.in', '10004', 'vpt', 8286640304, 9),
(1090005, 'archana gopnarayan', 'archana.gopnarayan@vpt.edu.in', '10005', 'vpt', 8286640305, 10),
(1090006, 'arpit bankar', 'arpit.bankar@vpt.edu.in', '10006', 'vpt', 8286640306, 11),
(1090007, 'bhagyashri kulkarni', 'bhagyashri.kulkarni@vpt.edu.in', '10007', 'vpt', 8286640307, 12),
(1090008, 'anil', 'anil@gmail.com', '10008', 'vpt', 8286640308, 13),
(1090033, 'Prasad Koyande', 'prasad.koyande@vpt.edu.in', '10033', 'vidyalankar polytecnic', 8286640333, 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `examiner`
--
ALTER TABLE `examiner`
  ADD PRIMARY KEY (`aid`),
  ADD UNIQUE KEY `bno` (`bno`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`eid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `examiner`
--
ALTER TABLE `examiner`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
