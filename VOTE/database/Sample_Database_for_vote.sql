-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 02, 2017 at 10:17 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vote`
--

-- --------------------------------------------------------

--
-- Table structure for table `active_app`
--

CREATE TABLE IF NOT EXISTS `active_app` (
  `reg_no` varchar(17) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `year` int(2) NOT NULL,
  `post` varchar(100) NOT NULL,
  `reason` mediumtext NOT NULL,
  `success` tinyint(1) NOT NULL,
  `image_caption` varchar(80) NOT NULL,
  `image` longblob NOT NULL,
  PRIMARY KEY (`reg_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `staff_no` varchar(50) NOT NULL,
  `admin_user_name` varchar(50) NOT NULL,
  `admin_level` int(11) NOT NULL DEFAULT '2',
  `password` varchar(145) NOT NULL,
  PRIMARY KEY (`staff_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--
-- To get the full DataBase with working values,
-- kindly contact the developer at josekaromo@gmail.com
--
