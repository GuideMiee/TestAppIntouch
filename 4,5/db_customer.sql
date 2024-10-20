-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2024 at 01:11 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db.customer`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Email` text NOT NULL,
  `CountryCode` text NOT NULL,
  `Budget` int(11) NOT NULL,
  `Used` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`ID`, `Name`, `Email`, `CountryCode`, `Budget`, `Used`) VALUES
(1, 'Will Peter', 'will.p@hotmail.com', 'TH', 1000000, 600000),
(2, 'John Smith ', 'john.smith@hotmail.com', 'EN', 2000000, 800000),
(3, 'Jame Born', 'jame.born@hotmail.com', 'US', 3000000, 600000),
(4, 'Charlie Angel', 'charlie.angel@hotmail.com', 'US', 4000000, 1000000),
(5, 'Mickey Brown', 'mickey.b@hotmail.com', 'JP', 5000000, 1000000);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ID` varchar(10) NOT NULL,
  `Date` date NOT NULL,
  `CutomerID` varchar(30) NOT NULL,
  `Amount` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ID`, `Date`, `CutomerID`, `Amount`) VALUES
('O1', '2019-10-08', '2', 50000),
('O2', '2019-10-08', '2', 45000),
('O3', '2019-11-20', '3', 50000),
('O4', '2019-05-20', '4', 40000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
