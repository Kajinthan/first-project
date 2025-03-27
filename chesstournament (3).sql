-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2024 at 07:57 AM
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
-- Database: `chesstournament`
--

-- --------------------------------------------------------

--
-- Table structure for table `systemuser`
--

CREATE TABLE `systemuser` (
  `User_ID` int(11) NOT NULL,
  `User_Name` text NOT NULL,
  `User_Password` text NOT NULL,
  `User_Type` text NOT NULL,
  `User-Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `systemuser`
--

INSERT INTO `systemuser` (`User_ID`, `User_Name`, `User_Password`, `User_Type`, `User-Status`) VALUES
(1, 'Kajinthan', '1234', 'admin', 1),
(2, 'Roshana', '8888', 'student', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tournaments`
--

CREATE TABLE `tournaments` (
  `Tournament_ID` int(11) NOT NULL,
  `Tournament_Name` text NOT NULL,
  `Tournament_City` text NOT NULL,
  `Tournament_StartDate` text NOT NULL,
  `Tournament_EndDate` text NOT NULL,
  `Tournament_Message` text NOT NULL,
  `Tournament_Image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tournaments`
--

INSERT INTO `tournaments` (`Tournament_ID`, `Tournament_Name`, `Tournament_City`, `Tournament_StartDate`, `Tournament_EndDate`, `Tournament_Message`, `Tournament_Image`) VALUES
(1, 'Chess Clash', 'Jaffna, Sri Lanka', '2023-12-15', '2023-12-22', 'Welcome', 'chess.png'),
(2, 'Chess Splash', 'Vavuniya, Sri Lanka', '12th July 2023', '20th August 2023', 'Welcome', 'chess.png'),
(3, 'Chess Tropy', 'Kandy, Sri Lanka', '12th July 2023', '20th August 2023', 'Welcome', 'chess.png'),
(4, 'Unlimited Chess', 'Colombo, Sri Lanka', '12th July 2023', '20th August 2023', 'Welcome', 'chess.png'),
(13, 'Chess Clash Season 3', 'Colombo, Sri Lanka', '2023-12-23', '2023-12-30', 'Sample Message', 'chess.png'),
(14, 'Chess Clash Season 3', 'Colombo, Sri Lanka', '2023-12-23', '2023-12-30', 'Sample Message', 'chess.png'),
(15, 'Chess Clash Season 3', 'Colombo, Sri Lanka', '2023-12-23', '2023-12-30', 'Sample Message', 'chess.png'),
(16, 'Chess Clash Season 8', 'Colombo, Sri Lanka', '2023-12-23', '2023-12-30', 'Sample Message', 'chess.png'),
(17, 'Chess Clash Season 10', 'Colombo, Sri Lanka', '2023-12-23', '2023-12-30', 'Sample Message', 'chess.png'),
(18, 'Chess Clash Season 11', 'Colombo, Sri Lanka', '2023-12-23', '2023-12-30', 'Sample Message', 'chess.png'),
(19, 'Chess Clash Season 12', 'Colombo, Sri Lanka', '2023-12-16', '2024-01-06', 'da', 'chess.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `systemuser`
--
ALTER TABLE `systemuser`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `tournaments`
--
ALTER TABLE `tournaments`
  ADD PRIMARY KEY (`Tournament_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `systemuser`
--
ALTER TABLE `systemuser`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tournaments`
--
ALTER TABLE `tournaments`
  MODIFY `Tournament_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
