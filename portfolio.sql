-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2020 at 06:52 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `First_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Message` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `First_Name`, `Last_Name`, `Email`, `Message`) VALUES
(1, 'Tahmid', 'Islam', 'tahmid231@gmail.com', 'Hiii'),
(2, 'Tahmid', 'Islam', 'tahmid231@gmail.com', 'A paragraph is a series of related sentences developing a central idea, called the topic. Try to think about paragraphs in terms of thematic unity: a paragraph is a sentence or a group of sentences that supports one central, unified idea. Paragraphs add one idea at a time to your broader argument.'),
(3, 'Ahanaf', 'Islam', 'tahmid2331@gmail.com', 'Hello everyone'),
(11, 'Masrur', 'Islam', 'm231@gmail.com', 'Hello'),
(12, 'Masrur', 'Islam', 'm231@gmail.com', 'Hello'),
(13, 'Masrur', 'Islam', 'm231@gmail.com', 'Hello');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `User_Name` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Gender` varchar(8) NOT NULL,
  `Programming_Skill` varchar(20) NOT NULL,
  `Contact_No` bigint(15) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `University` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Name`, `User_Name`, `Password`, `Gender`, `Programming_Skill`, `Contact_No`, `Email`, `University`) VALUES
(1, 'Tahmid', 'tahmid231', '778899', 'Male', 'Android', 1706348352, 'tahmid231@gmail.com', 'Brac University'),
(11, 'Tahmid', 'tahmid231', '123', 'Female', 'Java', 1706348352, 'tahmid231@gmail.com', 'Brac University'),
(12, 'Ahanaf', 'ahanaf231', '61279', 'Female', 'Java', 1706348352, 'tahmid2331@gmail.com', 'East West University'),
(13, 'Tahmid', 'tahmid231', '12345', 'Female', 'Java', 1706348352, 'tahmid231@gmail.com', 'North South University'),
(14, '', '', '', 'No Butto', 'No Button Selected', 0, '', ''),
(15, 'Tahmid', 'tahmid231', '9999', 'Other', 'Android', 1706348352, 'tahmid231@gmail.com', 'North South University'),
(16, 'Ahanaf', 'ahanaf231', '0000', 'Female', 'Java', 1706348352, 'tahmid231@gmail.com', 'North South University'),
(17, 'Tahmid', 'tahmid231', '777', 'Female', 'Java', 1706348352, 'tahmid231@gmail.com', 'North South University'),
(18, 'Hamid', 'Hamid121', '61279', 'Male', 'Android', 1706348352, 'm231@gmail.com', 'North South University');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
