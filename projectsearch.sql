-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2017 at 10:31 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectsearch`
--
CREATE DATABASE IF NOT EXISTS `projectsearch` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `projectsearch`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE IF NOT EXISTS `admin_table` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(70) NOT NULL,
  `emailid` varchar(20) NOT NULL,
  `Created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`aid`, `first_name`, `last_name`, `username`, `password`, `emailid`, `Created`) VALUES
(1, 'Rockin', 'MAT', 'rockin', '202cb962ac59075b964b07152d234b70', 'rockin@mat.com', '2017-04-09 12:53:25');

-- --------------------------------------------------------

--
-- Table structure for table `project_table`
--

CREATE TABLE IF NOT EXISTS `project_table` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `Team_Name` varchar(20) NOT NULL,
  `Department` varchar(70) NOT NULL,
  `Academic_year` varchar(10) NOT NULL,
  `Project_title` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `Project_coordinator` varchar(40) NOT NULL,
  `Created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `team_table`
--

CREATE TABLE IF NOT EXISTS `team_table` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `Team_Leader` varchar(20) NOT NULL,
  `Team_Member1` varchar(20) NOT NULL,
  `Team_Member2` varchar(20) NOT NULL,
  `Team_Member3` varchar(20) NOT NULL,
  `Created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
