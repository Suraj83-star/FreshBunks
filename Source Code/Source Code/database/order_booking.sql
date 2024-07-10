-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2023 at 08:49 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freshbunks_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_booking`
--

CREATE TABLE `order_booking` (
  `name` varchar(30) NOT NULL,
  `phone_no` int(10) NOT NULL,
  `date` date NOT NULL,
  `service` varchar(20) NOT NULL,
  `weight` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_booking`
--

INSERT INTO `order_booking` (`name`, `phone_no`, `date`, `service`, `weight`) VALUES
('', 0, '0000-00-00', '', ''),
('xyz', 23, '2023-09-21', 'Steam Press', '3Kg'),
('Anii', 8888, '2023-09-16', 'Dry Clean', '1Kg'),
('Sonal', 78792, '2023-09-27', 'Wash', '1KG'),
('Anu', 2147483647, '2023-09-14', 'Dry Clean', '2Kg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_booking`
--
ALTER TABLE `order_booking`
  ADD PRIMARY KEY (`phone_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
