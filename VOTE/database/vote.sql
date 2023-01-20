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

INSERT INTO `admin_login` (`staff_no`, `admin_user_name`, `admin_level`, `password`) VALUES
('001', 'josekarody', 1, '22c758bf8b6f01f445b90efa4b158dbc5bdd0abf'),
('002', 'fridah', 1, 'b306e17848da23423325e1e65316a0e97eddefb4'),
('003', 'kim', 2, 'a6312121e15caec74845b7ba5af23330d52d4ac0'),
('005', 'maggy', 2, 'b306e17848da23423325e1e65316a0e97eddefb4'),
('312', 'Dell', 2, '2721cc12b55d85f9d538d89df7fbef856386d3e7');

-- --------------------------------------------------------

--
-- Table structure for table `apply_chairperson`
--

CREATE TABLE IF NOT EXISTS `apply_chairperson` (
  `reg_no` varchar(17) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `year` int(2) NOT NULL,
  `reason` mediumtext NOT NULL,
  `success` tinyint(1) NOT NULL,
  `image_caption` varchar(80) NOT NULL,
  `image` longblob NOT NULL,
  `decline_reason` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`reg_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apply_chairperson`
--

INSERT INTO `apply_chairperson` (`reg_no`, `fname`, `sname`, `year`, `reason`, `success`, `image_caption`, `image`, `decline_reason`) VALUES
('BIT211-0002-2013', 'FRIDAH', 'GACERI', 3, 'I have the qualities of a leader', 1, 'IMG_20151003_214854.jpg', 0x433a77616d70096d70706870353437342e746d70, NULL),
('BIT211-0018-2013', 'JOSEPH', 'KARURI', 3, 'I want to work for you people. Much has not been done', 1, 'IMG_20150719_125205.jpg', 0x433a77616d70096d70706870393637412e746d70, NULL),
('BS211-0186-2012', 'JOSPHAT', 'KARANJA', 3, 'I believe am capable of leading ', 1, 'IMG_20150926_120534.jpg', 0x433a77616d70096d70706870363633422e746d70, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `apply_finance`
--

CREATE TABLE IF NOT EXISTS `apply_finance` (
  `reg_no` varchar(17) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `year` int(2) NOT NULL,
  `reason` mediumtext NOT NULL,
  `success` tinyint(1) NOT NULL,
  `image_caption` varchar(80) NOT NULL,
  `image` longblob NOT NULL,
  `decline_reason` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`reg_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apply_finance`
--

INSERT INTO `apply_finance` (`reg_no`, `fname`, `sname`, `year`, `reason`, `success`, `image_caption`, `image`, `decline_reason`) VALUES
('BIT211-0005-2013', 'MARGRET', 'WAIRIMU', 3, 'Am capable of bringing chages.', 1, 'IMG_20150214_113623.jpg', 0x433a77616d70096d70706870334337322e746d70, NULL),
('BIT211-0015-2013', 'JANE', 'KIMANI', 3, 'Am trust worthy.', 1, 'IMG_20150214_124118.jpg', 0x433a77616d70096d70706870383438422e746d70, NULL),
('BIT211-0017-2013', 'SAMUEL', 'RUMA', 3, 'I have expirience.', 1, 'IMG_20150214_175813.jpg', 0x433a77616d70096d70706870373632412e746d70, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `apply_general_sec`
--

CREATE TABLE IF NOT EXISTS `apply_general_sec` (
  `reg_no` varchar(17) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `year` int(2) NOT NULL,
  `reason` mediumtext NOT NULL,
  `success` tinyint(1) NOT NULL,
  `image_caption` varchar(80) NOT NULL,
  `image` longblob NOT NULL,
  `decline_reason` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`reg_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apply_general_sec`
--

INSERT INTO `apply_general_sec` (`reg_no`, `fname`, `sname`, `year`, `reason`, `success`, `image_caption`, `image`, `decline_reason`) VALUES
('BIT211-0001-2013', 'MERCY', 'CHEPTUMO', 2, 'For gender representative.', 1, 'IMG_20150524_074601.jpg', 0x433a77616d70096d70706870434332392e746d70, NULL),
('BIT211-0003-2013', 'JAMES', 'GATHORAI', 3, 'I have been a leader before', 1, 'IMG_20151017_122757.jpg', 0x433a77616d70096d70706870433131422e746d70, NULL),
('BIT211-0026-2013', 'PAUL', 'LUMUMBA', 3, 'I am a perfomer.', 1, '(6).jpg', 0x433a77616d70096d70706870424135312e746d70, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` bigint(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  `phone_no` bigint(12) NOT NULL,
  `email` varchar(80) NOT NULL,
  `message` varchar(500) NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `phone_no`, `email`, `message`) VALUES
(1, 'JOSEPH NJUGUNA', 725404233, 'josekaromo@yahoo.com', 'i love the work. it is good.'),
(2, 'KIMANI KAMAU', 7254878, 'josekaromo@gmail.com', 'its really goood\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `declined_app`
--

CREATE TABLE IF NOT EXISTS `declined_app` (
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
-- Table structure for table `election_date`
--

CREATE TABLE IF NOT EXISTS `election_date` (
  `id` int(2) NOT NULL DEFAULT '1',
  `s_date` date NOT NULL,
  `s_time` time NOT NULL,
  `f_date` date NOT NULL,
  `f_time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 MAX_ROWS=1;

--
-- Dumping data for table `election_date`
--

INSERT INTO `election_date` (`id`, `s_date`, `s_time`, `f_date`, `f_time`) VALUES
(1, '2017-05-25', '00:00:00', '2017-05-25', '23:59:00');

-- --------------------------------------------------------

--
-- Table structure for table `school_db`
--

CREATE TABLE IF NOT EXISTS `school_db` (
  `reg_no` varchar(17) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `phone_no` bigint(12) NOT NULL,
  `course` varchar(150) NOT NULL,
  `YEAR` int(2) NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`reg_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_db`
--

INSERT INTO `school_db` (`reg_no`, `surname`, `fname`, `sname`, `phone_no`, `course`, `YEAR`, `active_status`) VALUES
('1234', '123', '123', '123', 123456, 'BSC INFORMATION TECHNOLOGY', 4, 0),
('BIT211-0001-2013', '', 'MERCY', 'CHEPTUM', 0, 'BSC INFORMATION TECHNOLOGY', 3, 1),
('BIT211-0002-2013', '', 'FRIDAH', 'GACERI', 719898679, 'BSC INFORMATION TECHNOLOGY', 3, 1),
('BIT211-0003-2013', 'GATHURAI', 'JAMES', 'MUTHOGA', 0, 'BSC INFORMATION TECHNOLOGY', 3, 1),
('BIT211-0005-2013', 'GITAU', 'MARGARET', 'WAIRIMU', 0, 'BSC INFORMATION TECHNOLOGY', 3, 1),
('BIT211-0010-2013', 'KIMILU', 'VINCENT', 'MWONGELA', 0, 'BSC INFORMATION TECHNOLOGY', 3, 1),
('BIT211-0011-2013', '', 'KIMUTAI', 'CLINTON', 0, 'BSC INFORMATION TECHNOLOGY', 3, 1),
('BIT211-0015-2013', 'MACHARIA', 'JANE', 'MUTHONI', 0, 'BSC INFORMATION TECHNOLOGY', 3, 1),
('BIT211-0016-2013', 'MUTISYA', 'ALPHONCE', 'NG''ATWA', 0, 'BSC INFORMATION TECHNOLOGY', 3, 1),
('BIT211-0017-2013', 'MWANGI', 'SAMUEL', 'RUMA', 0, 'BSC INFORMATION TECHNOLOGY', 3, 1),
('BIT211-0018-2013', 'MWAURA', 'JOSEPH', 'KARURI', 0, 'BSC INFORMATION TECHNOLOGY', 3, 1),
('BIT211-0019-2013', 'NDAVI', 'JOSHUA ', 'KILONZO', 0, 'BSC INFORMATION TECHNOLOGY', 3, 1),
('BIT211-0022-2013', 'NJARAMBA', 'KENNEDY', 'MWAURA', 0, 'BSC INFORMATION TECHNOLOGY', 3, 1),
('BIT211-0026-2013', 'LUMUMBA', 'PAUL', 'ARORI', 0, 'BSC INFORMATION TECHNOLOGY', 3, 1),
('BIT211-0028-2013', 'KIPROTICH', 'DAVIS', 'RONO', 0, 'BSC INFORMATION TECHNOLOGY', 3, 1),
('BIT211-0029-2013', 'KAMAU', 'SAMSON', 'MWANGI', 0, 'BSC INFORMATION TECHNOLOGY', 3, 1),
('BIT211-0031-2013', 'TANUI', 'PATRICK', 'KIPMURGOR', 0, 'BSC INFORMATION TECHNOLOGY', 3, 1),
('BIT211-0037-2013', 'WANJIKU', 'JOHN', 'MUGURO', 0, 'BSC INFORMATION TECHNOLOGY', 3, 1),
('BIT211-008-2013', 'KIAMA', 'JOSEPH', 'MWANGI', 0, 'BSC INFORMATION TECHNOLOGY', 3, 1),
('BIT211-009-2013', 'KIMANI ', 'JANE', 'MUTHONI', 0, 'BSC INFORMATION TECHNOLOGY', 3, 1),
('BIT211-0236-2013', 'KAIRU', 'ISAAC', 'WAMBUGU', 0, 'BSC INFORMATION TECHNOLOGY', 3, 1),
('BS-211-0202-2012', 'KAROMO', 'JOSEPH', 'NJUGUNA', 725404233, 'BSC MATHEMATICS AND COMPUTER SCIENCE', 0, 1),
('BS-211-0204-2012', 'NJOROGE', 'JONAH', 'KIMANI', 0, 'BSC MATHEMATICS AND COMPUTER SCIENCE', 4, 1),
('BS211- 0215-2012', 'GACHIRI', 'JOEL', 'NGANGA', 0, 'BSC MATHEMATICS AND COMPUTER SCIENCE', 4, 1),
('BS211-0-2142012', 'MATI', 'CHARLES', 'MUTIA', 0, 'BSC MATHEMATICS AND COMPUTER SCIENCE', 4, 1),
('BS211-0002-2013', 'CHEROTICH', 'NAOMY', 'TIMBOL', 0, 'BSC MATHEMATICS AND COMPUTER SCIENCE', 3, 1),
('BS211-0003-2013', 'KAMAU', 'FRANCIS', 'MUNYWA', 0, 'BSC MATHEMATICS AND COMPUTER SCIENCE', 4, 1),
('BS211-0005-2013', 'KAMAU', 'MOSES', 'KARIUKI', 0, 'BSC MATHEMATICS AND COMPUTER SCIENCE', 3, 1),
('BS211-0006-2013', 'KAPKEI', 'EDWIN', 'KIPROP', 0, 'BSC MATHEMATICS AND COMPUTER SCIENCE', 4, 1),
('BS211-0007-2013', 'RUGENDO', 'MARTIN', 'KARANJA', 0, 'BSC MATHEMATICS AND COMPUTER SCIENCE', 3, 1),
('BS211-0008-2013', '', 'KECHULA', 'BASIL', 0, 'BSC MATHEMATICS AND COMPUTER SCIENCE', 3, 1),
('BS211-0010-2013', 'KIMUTAI', 'HILLARY', 'KIGEN', 0, 'BSC MATHEMATICS AND COMPUTER SCIENCE', 3, 1),
('BS211-0012-2013', 'BETT', 'WILFRED', 'KIMUTAI', 0, 'BSC MATHEMATICS AND COMPUTER SCIENCE', 3, 1),
('BS211-0013-2013', 'KIRUI', 'SHADRACK', 'KIMUTAI', 0, 'BSC MATHEMATICS AND COMPUTER SCIENCE', 3, 1),
('BS211-0016-2013', '', 'BERNARD', 'KIPLAGAT', 0, 'BSC MATHEMATICS AND COMPUTER SCIENCE', 3, 1),
('BS211-0017-2013', 'KIPLAGAT', 'HESBORN', 'KALYA', 0, 'BSC MATHEMATICS AND COMPUTER SCIENCE', 3, 1),
('BS211-0018-2013', 'KIPNGETICH', 'GIDEON', 'LANGAT', 0, 'BSC MATHEMATICS AND COMPUTER SCIENCE', 3, 1),
('BS211-0019-2013', 'KIRUI', 'TIMOTHY', 'KIPRONO', 0, 'BSC MATHEMATICS AND COMPUTER SCIENCE', 3, 1),
('BS211-0021-2013', 'KOROS', 'AGGREY', 'KIPROTICH', 0, 'BSC MATHEMATICS AND COMPUTER SCIENCE', 3, 1),
('BS211-0022-2013', 'MALONZA', 'JUSTUS', 'MUTHINI', 0, 'BSC MATHEMATICS AND COMPUTER SCIENCE', 3, 1),
('BS211-0023-2013', 'NYANGUSU', 'DANIEL', 'GATUTHI', 0, 'BSC MATHEMATICS AND COMPUTER SCIENCE', 3, 1),
('BS211-0024-2013', 'MUGAMBI', 'SIMON', 'NJILU', 0, 'BSC MATHEMATICS AND COMPUTER SCIENCE', 3, 1),
('BS211-0025-2013', 'MUIRURI', 'FREDRICK', 'CHEGE', 0, 'BSC MATHEMATICS AND COMPUTER SCIENCE', 3, 1),
('BS211-0027-2013', 'MWAI', 'JAMES', 'MAINA', 0, 'BSC MATHEMATICS AND COMPUTER SCIENCE', 3, 1),
('BS211-0028-2013', 'KARIUKI', 'ISAAC', 'WANGI', 0, 'BSC MATHEMATICS AND COMPUTER SCIENCE', 3, 1),
('BS211-0029-2013', 'KIARIE', 'JOSEPH', 'MWAURA', 0, 'BSC MATHEMATICS AND COMPUTER SCIENCE', 3, 1),
('BS211-0030-2013', 'KATAMU', 'NICHOLAS', 'NABULWA', 0, 'BSC MATHEMATICS AND COMPUTER SCIENCE', 3, 1),
('BS211-0031-2013', 'KEAR', 'PHILIP', 'NJAYA', 0, 'BSC MATHEMATICS AND COMPUTER SCIENCE', 3, 1),
('BS211-0178-2012', 'MUTUA', 'FELIX', 'MUTINDA', 0, 'BSC MATHEMATICS AND COMPUTER SCIENCE', 4, 1),
('BS211-0179-2012', 'MWANGI', 'DAVID', 'IRUNGU', 0, 'BSC MATHEMATICS AND COMPUTER SCIENCE', 4, 1),
('BS211-0183-2012', 'NJOROGE', 'ERASTUS', 'MWANGI', 0, 'BSC MATHEMATICS AND COMPUTER SCIENCE', 4, 1),
('BS211-0184-2012', 'MURIUKI', 'GEOFFREY', 'NGATIA', 0, 'BSC MATHEMATICS AND COMPUTER SCIENCE', 4, 1),
('BS211-0186-2012', 'NJUGUNA', 'JOSEPHAT', 'KARANJA', 0, 'BSC MATHEMATICS AND COMPUTER SCIENCE', 4, 1),
('BS211-0187-2012', 'KIARIE', 'MORRIS', 'MOCHU', 0, 'BSC MATHEMATICS AND COMPUTER SCIENCE', 4, 1),
('BS211-0189-2012', 'MACHARIA', 'VERONICAH', 'NYAMBURA', 0, 'BSC MATHEMATICS AND COMPUTER SCIENCE', 4, 1),
('BS211-0193-2012', 'RUGENDO', 'ROBERT', 'MUTHOMI', 0, 'BSC MATHEMATICS AND COMPUTER SCIENCE', 4, 1),
('BS211-0194-2012', 'NGUI', 'GEOFFREY', 'MBUI', 0, 'BSC MATHEMATICS AND COMPUTER SCIENCE', 4, 1),
('BS211-0198-2012', 'WARUGURU', 'ANDREW', 'KNYUA', 0, 'BSC MATHEMATICS AND COMPUTER SCIENCE', 4, 1),
('BS211-0200-2012', 'KIPROTICH', 'WESLESY', 'CHUMBA', 0, 'BSC MATHEMATICS AND COMPUTER SCIENCE', 4, 1),
('BS211-0205-2012', 'NDUTA', 'GEORGE', 'NGUTHUKU', 0, 'BSC MATHEMATICS AND COMPUTER SCIENCE', 4, 1),
('BS211-0206- 2012', 'MUNGAI', 'BENSON', 'KARANJA', 0, 'BSC MATHEMATICS AND COMPUTER SCIENCE', 4, 1),
('BS211-0208-2012', 'NJENGA', 'EPHANTUS', 'KAMAU', 0, 'BSC MATHEMATICS AND COMPUTER SCIENCE', 4, 1),
('BS211-0209-2012', 'MOHAMED', 'SALESA', 'HALAKE', 0, 'BSC MATHEMATICS AND COMPUTER SCIENCE', 4, 1),
('BS211-0211-2012', 'WAWERU', 'KELVIN', 'NJUE', 0, 'BSC MATHEMATICS AND COMPUTER SCIENCE', 4, 1),
('BS211-0212-2012', 'NDICHU', 'FREDRICK', 'THINJI', 0, 'BSC MATHEMATICS AND COMPUTER SCIENCE', 4, 1),
('BS211-0216-2012', 'KEMUNTO', 'ABUGAH', 'CATHERINE', 0, 'BSC MATHEMATICS AND COMPUTER SCIENCE', 4, 1),
('BS211-0221-2012', 'KINYUA', 'MUTHOMI', 'ERICK', 0, 'BSC MATHEMATICS AND COMPUTER SCIENCE', 4, 1),
('BS211-0222-2012', 'NJUKI', 'AUGUSTINE', 'NYOIKE', 0, 'BSC MATHEMATICS AND COMPUTER SCIENCE', 4, 1),
('BS211-0223-2012', 'MULWA', 'KYALO', 'CHRISTOPHER', 0, 'BSC MATHEMATICS AND COMPUTER SCIENCE', 4, 1),
('BS211-0224-2012', 'MUKWANJA', 'VICTOR', 'MANYONGE', 0, 'BSC MATHEMATICS AND COMPUTER SCIENCE', 4, 1),
('BS211-0226-2012', 'NJUG''E', 'DENNIS', 'NGUGI', 0, 'BSC MATHEMATICS AND COMPUTER SCIENCE', 4, 1),
('BS211-0227-2012', 'KEMBOI', 'TABITHA', 'JERONO', 0, 'BSC MATHEMATICS AND COMPUTER SCIENCE', 4, 1),
('BS211-0229-2012', '', 'ODIMA', 'BIVAN', 0, 'BSC MATHEMATICS AND COMPUTER SCIENCE', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `students_login`
--

CREATE TABLE IF NOT EXISTS `students_login` (
  `reg_no` varchar(17) NOT NULL,
  `user_name` varchar(40) NOT NULL,
  `PASSWORD` varchar(145) NOT NULL,
  `vote_status` tinyint(1) NOT NULL,
  `image_caption` varchar(200) NOT NULL,
  `image` longblob NOT NULL,
  PRIMARY KEY (`reg_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students_login`
--

INSERT INTO `students_login` (`reg_no`, `user_name`, `PASSWORD`, `vote_status`, `image_caption`, `image`) VALUES
('BIT211-0001-2013', 'Chep', '7c222fb2927d828af22f592134e8932480637c0d', 1, '', ''),
('BIT211-0002-2013', 'fridah', 'b306e17848da23423325e1e65316a0e97eddefb4', 0, '', ''),
('BIT211-0003-2013', 'Jymo', '7c222fb2927d828af22f592134e8932480637c0d', 1, '', ''),
('BIT211-0005-2013', 'maggy', '7c222fb2927d828af22f592134e8932480637c0d', 1, '', ''),
('BIT211-0015-2013', 'janny', '7c222fb2927d828af22f592134e8932480637c0d', 1, '', ''),
('BIT211-0017-2013', 'ruma', '7c222fb2927d828af22f592134e8932480637c0d', 1, '', ''),
('BIT211-0018-2013', 'Iruri', '7c222fb2927d828af22f592134e8932480637c0d', 0, '', ''),
('BIT211-0022-2013', 'mwaura', '7c222fb2927d828af22f592134e8932480637c0d', 0, '', ''),
('BIT211-0026-2013', 'Paul', '7c222fb2927d828af22f592134e8932480637c0d', 1, '', ''),
('BS-211-0202-2012', 'Karody', '22c758bf8b6f01f445b90efa4b158dbc5bdd0abf', 1, '', ''),
('BS211-0186-2012', 'Ranjos', '7c222fb2927d828af22f592134e8932480637c0d', 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `total_votes`
--

CREATE TABLE IF NOT EXISTS `total_votes` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `post` varchar(100) NOT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `total_votes`
--

INSERT INTO `total_votes` (`id`, `post`, `total`) VALUES
(1, 'chairperson', 8),
(2, 'secretary general', 8),
(3, 'finance minister', 8);

-- --------------------------------------------------------

--
-- Table structure for table `vote_chair`
--

CREATE TABLE IF NOT EXISTS `vote_chair` (
  `reg_no` varchar(17) NOT NULL,
  `cname` varchar(80) NOT NULL,
  `vcount` bigint(20) NOT NULL DEFAULT '0',
  `percent` float NOT NULL DEFAULT '0',
  PRIMARY KEY (`reg_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vote_chair`
--

INSERT INTO `vote_chair` (`reg_no`, `cname`, `vcount`, `percent`) VALUES
('BIT211-0002-2013', 'FRIDAH GACERI', 5, 62.5),
('BIT211-0018-2013', 'JOSEPH KARURI', 1, 12.5),
('BS211-0186-2012', 'JOSPHAT KARANJA', 2, 25);

-- --------------------------------------------------------

--
-- Table structure for table `vote_finance`
--

CREATE TABLE IF NOT EXISTS `vote_finance` (
  `reg_no` varchar(17) NOT NULL,
  `cname` varchar(80) NOT NULL,
  `vcount` bigint(20) NOT NULL DEFAULT '0',
  `percent` float NOT NULL DEFAULT '0',
  PRIMARY KEY (`reg_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vote_finance`
--

INSERT INTO `vote_finance` (`reg_no`, `cname`, `vcount`, `percent`) VALUES
('BIT211-0005-2013', 'MARGRET WAIRIMU', 1, 12.5),
('BIT211-0015-2013', 'JANE KIMANI', 5, 62.5),
('BIT211-0017-2013', 'SAMUEL RUMA', 2, 25);

-- --------------------------------------------------------

--
-- Table structure for table `vote_register`
--

CREATE TABLE IF NOT EXISTS `vote_register` (
  `reg_no` varchar(17) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `year` int(2) NOT NULL,
  `email` varchar(100) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `vote_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`reg_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vote_register`
--

INSERT INTO `vote_register` (`reg_no`, `fname`, `sname`, `year`, `email`, `reg_date`, `vote_status`) VALUES
('BIT211-0001-2013', 'MERCY', 'CHEPTUMO', 2, 'chep@gmail.com', '2017-05-24 22:06:58', 1),
('BIT211-0002-2013', 'FRIDAH', 'GACERI', 3, 'fridahgasheri@gmail.com', '2017-05-25 09:50:46', 0),
('BIT211-0003-2013', 'GATHORAI', 'JAMES', 3, 'jamesgathorai@gmail.com', '2017-05-24 21:48:27', 1),
('BIT211-0005-2013', 'MAGRET', 'WAIRIMU', 1, 'mag@gmail.com', '2017-05-20 19:08:05', 1),
('BIT211-0015-2013', 'JANE', 'KIMANI', 1, 'jane@gamil.com', '2017-01-16 07:04:10', 1),
('BIT211-0017-2013', 'SAMUEL', 'RUMA', 1, 'sas@gmail.com', '2017-01-10 18:29:20', 1),
('BIT211-0018-2013', 'MWAURA', 'JOSEPH', 3, 'karuri@yahoo.com', '2017-05-24 21:53:50', 0),
('BIT211-0022-2013', 'KEN', 'JARAMBA', 3, 'ken@gmail.com', '2017-05-25 08:41:55', 0),
('BIT211-0026-2013', 'PAUL', 'LUMUMBA', 3, 'lumumba@gmail.com', '2017-05-24 21:56:40', 1),
('BS-211-0202-2012', 'JOSEPH', 'KAROMO', 1, 'josekaromo@gmail.com', '2017-05-10 16:43:22', 1),
('BS211-0186-2012', 'NJUGUNA', 'JOSPHAT', 3, 'karanja@yahoo.com', '2017-05-24 21:51:28', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vote_sec`
--

CREATE TABLE IF NOT EXISTS `vote_sec` (
  `reg_no` varchar(17) NOT NULL,
  `cname` varchar(80) NOT NULL,
  `vcount` bigint(20) NOT NULL DEFAULT '0',
  `percent` float NOT NULL DEFAULT '0',
  PRIMARY KEY (`reg_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vote_sec`
--

INSERT INTO `vote_sec` (`reg_no`, `cname`, `vcount`, `percent`) VALUES
('BIT211-0001-2013', 'MERCY CHEPTUMO', 1, 12.5),
('BIT211-0003-2013', 'JAMES GATHORAI', 4, 50),
('BIT211-0026-2013', 'PAUL LUMUMBA', 3, 37.5);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `students_login`
--
ALTER TABLE `students_login`
  ADD CONSTRAINT `students_login_ibfk_1` FOREIGN KEY (`reg_no`) REFERENCES `vote_register` (`reg_no`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
