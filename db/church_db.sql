-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2022 at 04:42 AM
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
-- Database: `church_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `user_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `birthday` date NOT NULL,
  `cont_num` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `category` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`user_id`, `name`, `birthday`, `cont_num`, `address`, `email`, `password`, `category`, `status`, `timestamp`) VALUES
(1, 'John Doe', '2012-09-12', '09987654321', 'dun po sa kanto', 'staff@email.com', '123456', 2, 1, '2022-09-22 06:41:08'),
(2, 'Juan Dela Cruz', '2009-10-10', '09123456789', 'dito lang po sa tabi', 'delacruz@email.com', '123456', 2, 1, '2022-09-22 06:41:11'),
(3, '', '0000-00-00', '', '', 'admin@email.com', '123456', 1, 1, '2022-09-22 06:41:13');

-- --------------------------------------------------------

--
-- Table structure for table `acct_status`
--

CREATE TABLE `acct_status` (
  `id` int(11) NOT NULL,
  `acct_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `acct_status`
--

INSERT INTO `acct_status` (`id`, `acct_status`) VALUES
(1, 'active'),
(2, 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `baptismal`
--

CREATE TABLE `baptismal` (
  `id` int(11) NOT NULL,
  `child` varchar(100) NOT NULL,
  `father` varchar(100) NOT NULL,
  `mother` varchar(100) NOT NULL,
  `bplace` varchar(100) NOT NULL,
  `bday` date NOT NULL,
  `church` text NOT NULL,
  `baptDate` date NOT NULL,
  `priest` varchar(100) NOT NULL,
  `sponsor1` varchar(100) NOT NULL,
  `sponsor2` varchar(100) NOT NULL,
  `regNum` int(11) NOT NULL,
  `pageNum` int(11) NOT NULL,
  `num` int(11) NOT NULL,
  `issued` date NOT NULL,
  `purpose` varchar(100) NOT NULL,
  `vicar` varchar(100) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `baptismal`
--

INSERT INTO `baptismal` (`id`, `child`, `father`, `mother`, `bplace`, `bday`, `church`, `baptDate`, `priest`, `sponsor1`, `sponsor2`, `regNum`, `pageNum`, `num`, `issued`, `purpose`, `vicar`, `timestamp`) VALUES
(1, 'Juan Dela Cruz', 'Father Dela Cruz', 'Mother Dela Cruz', 'San Pascual Tondo, Manila', '2000-10-04', 'STS. PETER AND PAUL PARISH', '2001-02-07', 'Fr. Dennis Spinach', 'Sponsor 1', 'Sponsor 2', 90, 45, 8, '2022-09-23', 'Confirmation', 'Rev. Fr. Joseph Mahal', '2022-09-23 05:38:13');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `category`) VALUES
(1, 'admin'),
(2, 'staff'),
(3, 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `category` (`category`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `acct_status`
--
ALTER TABLE `acct_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `baptismal`
--
ALTER TABLE `baptismal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `acct_status`
--
ALTER TABLE `acct_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `baptismal`
--
ALTER TABLE `baptismal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accounts`
--
ALTER TABLE `accounts`
  ADD CONSTRAINT `accounts_ibfk_1` FOREIGN KEY (`category`) REFERENCES `category` (`cat_id`),
  ADD CONSTRAINT `accounts_ibfk_2` FOREIGN KEY (`status`) REFERENCES `acct_status` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
