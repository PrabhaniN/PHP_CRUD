-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 20, 2019 at 09:27 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `mat_code` char(10) NOT NULL,
  `mat_name` varchar(255) NOT NULL,
  `no_of_colors` int(2) NOT NULL,
  `quantity` int(5) NOT NULL,
  `price` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`mat_code`, `mat_name`, `no_of_colors`, `quantity`, `price`) VALUES
('5647530987', 'Poplin', 14, 9000, '110'),
('6573452765', 'Linen', 6, 5000, '235'),
('6789654628', 'Satin', 7, 2000, '185'),
('8675674532', 'Cotton', 7, 4000, '125'),
('9856453465', 'Silk', 8, 3500, '245');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`mat_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
