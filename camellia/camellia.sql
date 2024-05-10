-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2024 at 04:12 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `camellia`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidateresult`
--

CREATE TABLE `candidateresult` (
  `candidatenationalid` int(11) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` enum('male','female') DEFAULT NULL,
  `dateofbirth` date DEFAULT NULL,
  `postid` int(11) DEFAULT 4,
  `examdate` date DEFAULT NULL,
  `phonenumber` varchar(15) DEFAULT NULL,
  `mark` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `candidateresult`
--

INSERT INTO `candidateresult` (`candidatenationalid`, `firstname`, `lastname`, `gender`, `dateofbirth`, `postid`, `examdate`, `phonenumber`, `mark`) VALUES
(12348, 'ngabo', 'daniel thierry', 'male', '2015-04-16', 4, '2024-04-28', '0734533637', 95),
(1234455, 'Ishimwe', 'lopez', 'female', '2024-04-25', 4, '2024-04-26', '1233233', 45),
(1234598, 'prof', 'elyse', 'male', '2024-04-06', 5, '2024-04-28', '0734533789', 85),
(93939494, 'dusabe', 'enock', 'male', '2024-04-26', 2, '2024-04-27', '1213444', 78),
(93939495, 'ndatimana', ' faulk', 'male', '2024-04-10', 4, '2024-04-28', '0734533637', 34);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `postid` int(11) NOT NULL,
  `postname` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`postid`, `postname`) VALUES
(2, 'chief'),
(5, 'manager'),
(4, 'supervisor');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `username` varchar(40) DEFAULT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `password`) VALUES
(1, 'dusabe enock', '12345'),
(2, 'ngabo daniel', '1111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidateresult`
--
ALTER TABLE `candidateresult`
  ADD PRIMARY KEY (`candidatenationalid`),
  ADD KEY `postid` (`postid`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`postid`),
  ADD UNIQUE KEY `postname` (`postname`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidateresult`
--
ALTER TABLE `candidateresult`
  MODIFY `candidatenationalid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93939496;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `postid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `candidateresult`
--
ALTER TABLE `candidateresult`
  ADD CONSTRAINT `candidateresult_ibfk_1` FOREIGN KEY (`postid`) REFERENCES `post` (`postid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
