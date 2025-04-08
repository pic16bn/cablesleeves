-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 13, 2020 at 11:55 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id14584181_pic16db`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE `order_table` (
  `Customer_ID` int(255) NOT NULL,
  `Customer_Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Customer_Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Customer_PhoneNo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Length1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Length2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Length3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Remarks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Color1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Color2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Color3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Status` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_table`
--
ALTER TABLE `order_table`
  ADD PRIMARY KEY (`Customer_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_table`
--
ALTER TABLE `order_table`
  MODIFY `Customer_ID` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
