-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2017 at 04:24 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portofolio_commend`
--

-- --------------------------------------------------------

--
-- Table structure for table `commend`
--

CREATE TABLE `commend` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `schools` varchar(30) NOT NULL,
  `grades` varchar(2) NOT NULL,
  `majors` varchar(4) NOT NULL,
  `commend` varchar(100) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commend`
--

INSERT INTO `commend` (`id`, `firstname`, `lastname`, `schools`, `grades`, `majors`, `commend`, `img`) VALUES
(21, 'Akbar Anung ', 'Yudha Saputra', 'SMKN 1 Purwosari', 'XI', 'RPL', 'etagg', '1366x768-alabama-crimson-solid-color-background.jpg'),
(22, '', '', '', '', '', 'vhj', '1366x768-aqua-solid-color-background.jpg'),
(23, 'fghjk', 'qwf', 'qwer', 'qw', 'qwe', '`1234567890-', '1366x768-air-force-dark-blue-solid-color-background.jpg'),
(24, 'Yudha', 'Gg', 'SD', '1', 'A', 'this is commend', '1366x768-amazon-solid-color-background.jpg'),
(25, '', '', '', '', '', 'gg', 'pp.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commend`
--
ALTER TABLE `commend`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commend`
--
ALTER TABLE `commend`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
