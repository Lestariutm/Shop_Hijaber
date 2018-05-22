-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2018 at 02:21 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hijaber`
--

-- --------------------------------------------------------

--
-- Table structure for table `busana_muslim`
--

CREATE TABLE `busana_muslim` (
  `busana_id` int(11) NOT NULL,
  `busana` varchar(255) NOT NULL,
  `ukuran` varchar(255) NOT NULL,
  `bahan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `busana_muslim`
--

INSERT INTO `busana_muslim` (`busana_id`, `busana`, `ukuran`, `bahan`) VALUES
(1, 'alda_20170817_115825.jpg', 'M', 'katun');

-- --------------------------------------------------------

--
-- Table structure for table `kerudung`
--

CREATE TABLE `kerudung` (
  `kerudung_id` int(11) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `kerudung` varchar(255) NOT NULL,
  `bahan` text NOT NULL,
  `warna` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kerudung`
--

INSERT INTO `kerudung` (`kerudung_id`, `jenis`, `kerudung`, `bahan`, `warna`) VALUES
(4, 'eljata', 'ab16843e00030ac7823074ccf20244f3.jpg', 'sypon', 'biru');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `busana_muslim`
--
ALTER TABLE `busana_muslim`
  ADD PRIMARY KEY (`busana_id`);

--
-- Indexes for table `kerudung`
--
ALTER TABLE `kerudung`
  ADD PRIMARY KEY (`kerudung_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `busana_muslim`
--
ALTER TABLE `busana_muslim`
  MODIFY `busana_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kerudung`
--
ALTER TABLE `kerudung`
  MODIFY `kerudung_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
