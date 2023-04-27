-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2019 at 04:38 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `topup`
--

CREATE TABLE `topup` (
  `topup_id` int(11) NOT NULL,
  `uniq_key` varchar(6) NOT NULL,
  `nominal` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topup`
--

INSERT INTO `topup` (`topup_id`, `uniq_key`, `nominal`) VALUES
(1, '123789', '1000000'),
(2, '035678', '1000000'),
(3, '024579', '2500000'),
(4, '012489', '350000'),
(5, '023469', '23000'),
(6, '025789', '1000000'),
(7, '024578', '100000'),
(8, '024579', '100000'),
(9, '124567', '21'),
(10, '014689', '1000000'),
(11, '013578', '23'),
(12, '134589', '1000000'),
(13, '023458', '1000000'),
(14, '013458', '100000'),
(15, '	13457', '100000'),
(16, '134579', '100000'),
(17, '456789', '1000000'),
(18, '013789', '10000000'),
(19, '135689', '50000'),
(20, '014579', '1000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `topup`
--
ALTER TABLE `topup`
  ADD PRIMARY KEY (`topup_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `topup`
--
ALTER TABLE `topup`
  MODIFY `topup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
