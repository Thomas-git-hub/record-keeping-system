-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2022 at 02:50 PM
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
(1, 'Juan Dela Cruz', 'Father Dela Cruz', 'Mother Dela Cruz', 'San Pascual Tondo, Manila', '2000-10-04', 'STS. PETER AND PAUL PARISH', '2001-02-07', 'Fr. Dennis Spinach', 'Sponsor 1', 'Sponsor 2', 90, 45, 8, '2022-09-23', 'Confirmation', 'Rev. Fr. Joseph Mahal', '2022-09-23 05:38:13'),
(2, 'Chreone Harthlee', 'Christopher Harhtlee', 'Luna Harthlee', 'Quezon City', '2000-12-13', 'STS. PETER AND PAUL PARISH', '2001-02-10', 'Fr. Dennis Spinach', 'Spinach number 1', 'Spinach number 2', 700, 72, 28, '2006-02-14', 'Confirmation', 'Rev. Fr. Joseph Mahal', '2022-09-28 04:24:37');

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

-- --------------------------------------------------------

--
-- Table structure for table `husband`
--

CREATE TABLE `husband` (
  `id` int(11) NOT NULL,
  `registry_no` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `bday` date NOT NULL,
  `age` int(11) NOT NULL,
  `bplace` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `citizenship` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `civil_status` varchar(100) NOT NULL,
  `father` varchar(100) NOT NULL,
  `f_citizenship` varchar(100) NOT NULL,
  `mother` varchar(100) NOT NULL,
  `m_citizenship` varchar(100) NOT NULL,
  `gave_consent` varchar(100) NOT NULL,
  `relationship` varchar(100) NOT NULL,
  `residence` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `marriage_no`
--

CREATE TABLE `marriage_no` (
  `id` int(11) NOT NULL,
  `province` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `registry_no` varchar(100) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `others`
--

CREATE TABLE `others` (
  `id` int(11) NOT NULL,
  `registry_no` int(11) NOT NULL,
  `place_married` varchar(100) NOT NULL,
  `date_married` date NOT NULL,
  `time_married` time NOT NULL,
  `license_no` varchar(100) NOT NULL,
  `issued_on` date NOT NULL,
  `place` varchar(100) NOT NULL,
  `solemnizing_officer` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `sect_no` varchar(100) NOT NULL,
  `witness1` varchar(100) NOT NULL,
  `witness2` varchar(100) NOT NULL,
  `witness3` varchar(100) NOT NULL,
  `witness4` varchar(100) NOT NULL,
  `received_name` varchar(100) NOT NULL,
  `received_title` varchar(100) NOT NULL,
  `received_date` date NOT NULL,
  `registrar_name` varchar(100) NOT NULL,
  `registrar_title` varchar(100) NOT NULL,
  `register_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `wife`
--

CREATE TABLE `wife` (
  `id` int(11) NOT NULL,
  `registry_no` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `bday` date NOT NULL,
  `age` int(11) NOT NULL,
  `bplace` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `citizenship` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `civil_status` varchar(100) NOT NULL,
  `father` varchar(100) NOT NULL,
  `f_citizenship` varchar(100) NOT NULL,
  `mother` varchar(100) NOT NULL,
  `m_citizenship` varchar(100) NOT NULL,
  `gave_consent` varchar(100) NOT NULL,
  `relationship` varchar(100) NOT NULL,
  `residence` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indexes for table `husband`
--
ALTER TABLE `husband`
  ADD PRIMARY KEY (`id`),
  ADD KEY `registry_no` (`registry_no`);

--
-- Indexes for table `marriage_no`
--
ALTER TABLE `marriage_no`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wife`
--
ALTER TABLE `wife`
  ADD PRIMARY KEY (`id`),
  ADD KEY `registry_no` (`registry_no`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `husband`
--
ALTER TABLE `husband`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `marriage_no`
--
ALTER TABLE `marriage_no`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wife`
--
ALTER TABLE `wife`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
