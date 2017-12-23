-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2017 at 01:20 AM
-- Server version: 5.5.57-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `c9`
--

-- --------------------------------------------------------

--
-- Table structure for table `_Question`
--

CREATE TABLE IF NOT EXISTS `_Question` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Question` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `_Question`
--

INSERT INTO `_Question` (`id`, `Question`) VALUES
(1, 'Front End or Back End'),
(2, 'Do you prefer red or blue'),
(31, 'Do you like Coffee or Tea?'),
(32, 'Are you a front-lane or a back-lane sitting student?'),
(34, '1st question?'),
(35, 'Test Question #3'),
(36, 'Aditional Question');

-- --------------------------------------------------------

--
-- Table structure for table `_Role`
--

CREATE TABLE IF NOT EXISTS `_Role` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Role_Name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `_Role`
--

INSERT INTO `_Role` (`id`, `Role_Name`) VALUES
(1, 'Voter'),
(2, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `_UQV`
--

CREATE TABLE IF NOT EXISTS `_UQV` (
  `U_id` int(10) NOT NULL,
  `Q_id` int(10) NOT NULL,
  `V_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `_UQV`
--

INSERT INTO `_UQV` (`U_id`, `Q_id`, `V_id`) VALUES
(15, 0, 0),
(15, 0, 0),
(15, 0, 0),
(15, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `_Users`
--

CREATE TABLE IF NOT EXISTS `_Users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Email` varchar(60) NOT NULL,
  `First_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `Role_Id` int(2) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `_Users`
--

INSERT INTO `_Users` (`id`, `Email`, `First_Name`, `Last_Name`, `Role_Id`, `password`) VALUES
(1, 'voter@test.com', 'Voter', 'One', 1, '123456789'),
(2, 'candidate@test.com', 'Candidate', 'One', 2, '123456789'),
(15, 'voter1@test.com', 'asfdbzdfb', 'zFBzfdb', 1, '123456789'),
(16, 'voter2@test.com', 'poiuy', 'qwerty', 1, '123456789'),
(17, 'Ziv', 'Ziv', 'Test', 1, '123456789'),
(18, 'a_zayas@mac.com', 'AYMEE', 'Zayas', 1, 'banksy815'),
(19, 'zivsbaron@gmail.com', 'Ziv', 'Baron', 1, '123456789'),
(20, 'testuser@gmail.com', 'test', 'user', 1, '1q2w3e4r5t'),
(21, 'voter3@test.com', 'test', 'test', 1, '123456789'),
(22, 'voter4@test.com', 'lihjv', ';ijg', 1, '123456789'),
(23, 'samanthacabrera@me.com', 'Samantha', 'Cabrera', 1, 'Hello112'),
(26, 'zivtest@gmail.com', 'Test', 'Ziv', 1, '1q2w3e4r'),
(27, 'test5@gmail.com', 'test5', 'test5', 1, '123456789'),
(28, 'abc@gmail.com', 'abcfacfc', 'abcaddd', 1, '123456789'),
(29, 'candidate@gmail.com', 'Candidate', 'Test', 2, '123456789'),
(30, 'Smacenat@yahoo.com', 'Sandy', 'Macenat', 2, '123456789'),
(31, 'ziv1@gmail.com', 'ziv', 'baron', 2, '1234567'),
(32, 'ziv2@gmail.com', 'ziv2', 'baron2', 1, '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `_Vote`
--

CREATE TABLE IF NOT EXISTS `_Vote` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Q_id` int(10) NOT NULL,
  `Answer` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `_Vote`
--

INSERT INTO `_Vote` (`id`, `Q_id`, `Answer`) VALUES
(1, 1, 'Front'),
(2, 1, 'Back'),
(3, 2, 'Red'),
(4, 2, 'Blue'),
(8, 31, 'Coffee'),
(9, 31, 'Tea'),
(10, 32, 'Front'),
(11, 32, 'Back'),
(14, 34, 'A'),
(15, 34, 'B'),
(16, 35, '1A'),
(17, 35, '2B'),
(18, 36, 'A'),
(19, 36, 'B');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
