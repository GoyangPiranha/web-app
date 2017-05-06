-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2017 at 10:52 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID_User` int(11) NOT NULL,
  `Fullname` varchar(767) NOT NULL,
  `Username` varchar(767) NOT NULL,
  `Date_of_birth` date NOT NULL,
  `Avatar` varchar(767) DEFAULT NULL,
  `Password` varchar(767) NOT NULL,
  `Province` varchar(767) NOT NULL,
  `City` varchar(767) NOT NULL,
  `Address` varchar(767) NOT NULL,
  `Email` varchar(767) NOT NULL,
  `Handphone` varchar(767) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID_User`, `Fullname`, `Username`, `Date_of_birth`, `Avatar`, `Password`, `Province`, `City`, `Address`, `Email`, `Handphone`) VALUES
(37, 'tio', 'tirenn', '2017-04-07', '', 'tirenn', 'Jawa Barat', 'Malang', 'sdasda', 'bon@mail.com', '123123122'),
(38, 'akudia', 'aku', '2017-04-13', '', 'aku', 'Jawa Barat', 'Madiun', 'dss', 'bon@mail.com', 'dasdasdas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_User`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID_User` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
