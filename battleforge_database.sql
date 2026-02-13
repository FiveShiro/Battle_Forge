-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2024 at 04:20 PM
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
-- Database: `battleforge database`
--

-- --------------------------------------------------------

--
-- Table structure for table `gbfrvr_tbl`
--

CREATE TABLE `gbfrvr_tbl` (
  `Comment_ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Date` datetime NOT NULL,
  `Comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gbfrvr_tbl`
--

INSERT INTO `gbfrvr_tbl` (`Comment_ID`, `User_ID`, `Username`, `Date`, `Comment`) VALUES
(1, 17, 'Alzh1mer', '2024-02-06 23:19:33', 'nick is as gay as a fuck');

-- --------------------------------------------------------

--
-- Table structure for table `sf3_tbl`
--

CREATE TABLE `sf3_tbl` (
  `Comment_ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Date` datetime NOT NULL,
  `Comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sf3_tbl`
--

INSERT INTO `sf3_tbl` (`Comment_ID`, `User_ID`, `Username`, `Date`, `Comment`) VALUES
(1, 17, 'Alzh1mer', '2024-02-06 23:09:38', 'nick is fricking gay');

-- --------------------------------------------------------

--
-- Table structure for table `sf6_tbl`
--

CREATE TABLE `sf6_tbl` (
  `Comment_ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Date` datetime NOT NULL,
  `Comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sf6_tbl`
--

INSERT INTO `sf6_tbl` (`Comment_ID`, `User_ID`, `Username`, `Date`, `Comment`) VALUES
(1, 17, 'Alzh1mer', '2024-02-06 23:02:48', 'nick is gay again');

-- --------------------------------------------------------

--
-- Table structure for table `tekken8_tbl`
--

CREATE TABLE `tekken8_tbl` (
  `Comment_ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Date` datetime NOT NULL,
  `Comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tekken8_tbl`
--

INSERT INTO `tekken8_tbl` (`Comment_ID`, `User_ID`, `Username`, `Date`, `Comment`) VALUES
(1, 17, 'Alzh1mer', '2024-02-06 22:24:30', 'nick is gay'),
(2, 17, 'Alzh1mer', '2024-02-06 22:39:45', 'Nick is really Gay');

-- --------------------------------------------------------

--
-- Table structure for table `unib_tbl`
--

CREATE TABLE `unib_tbl` (
  `Comment_ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Date` datetime NOT NULL,
  `Comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `unib_tbl`
--

INSERT INTO `unib_tbl` (`Comment_ID`, `User_ID`, `Username`, `Date`, `Comment`) VALUES
(1, 17, 'Alzh1mer', '2024-02-06 22:42:06', 'Hello gay');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `User_ID` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`User_ID`, `Username`, `Email`, `Password`) VALUES
(17, 'Alzh1mer', 'robertmagbanua63@gmail.com', '$2y$10$Jk/e18DECeccbbhw8GG5t.BldVd97bUAq.0KBY5m.crw28cA9aqKe'),
(19, 'jm', 'robertmagbanua63@gmail.com', '$2y$10$dMWJK2WAHHOPmxdAqJi5T.Adx6WQxldpUOr9i6rEAFVIYt6UfwPQm'),
(20, 'nick', 'robertmagbanua63@gmail.com', '$2y$10$YCai4xrUMSMn3xczxXb88eBSFFics.Z1.ZtLAfZ96rWPKVc4Ha1K2'),
(21, 'earl', 'robertmagbanua63@gmail.com', '$2y$10$UTpx6YjVCZQNZWoLsZg0OuGdX.aQVxsrZyu2A7VbaOUSD5IlvoxSK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gbfrvr_tbl`
--
ALTER TABLE `gbfrvr_tbl`
  ADD PRIMARY KEY (`Comment_ID`);

--
-- Indexes for table `sf3_tbl`
--
ALTER TABLE `sf3_tbl`
  ADD PRIMARY KEY (`Comment_ID`);

--
-- Indexes for table `sf6_tbl`
--
ALTER TABLE `sf6_tbl`
  ADD PRIMARY KEY (`Comment_ID`);

--
-- Indexes for table `tekken8_tbl`
--
ALTER TABLE `tekken8_tbl`
  ADD PRIMARY KEY (`Comment_ID`);

--
-- Indexes for table `unib_tbl`
--
ALTER TABLE `unib_tbl`
  ADD PRIMARY KEY (`Comment_ID`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gbfrvr_tbl`
--
ALTER TABLE `gbfrvr_tbl`
  MODIFY `Comment_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sf3_tbl`
--
ALTER TABLE `sf3_tbl`
  MODIFY `Comment_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sf6_tbl`
--
ALTER TABLE `sf6_tbl`
  MODIFY `Comment_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tekken8_tbl`
--
ALTER TABLE `tekken8_tbl`
  MODIFY `Comment_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `unib_tbl`
--
ALTER TABLE `unib_tbl`
  MODIFY `Comment_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
