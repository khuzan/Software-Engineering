-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2017 at 08:24 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `inventory_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `borrowed_items`
--

CREATE TABLE IF NOT EXISTS `borrowed_items` (
  `b_id` int(11) NOT NULL AUTO_INCREMENT,
  `borrower_id` int(11) NOT NULL,
  `items_id` int(11) NOT NULL,
  `dateoflend` varchar(50) NOT NULL,
  `dateofreturn` varchar(50) NOT NULL,
  `status` varchar(200) NOT NULL,
  `comments` varchar(500) NOT NULL,
  `received` varchar(500) NOT NULL,
  `b_qty` int(11) NOT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

--
-- Dumping data for table `borrowed_items`
--

INSERT INTO `borrowed_items` (`b_id`, `borrower_id`, `items_id`, `dateoflend`, `dateofreturn`, `status`, `comments`, `received`, `b_qty`) VALUES
(39, 20141111, 1, '17-12-07', '17/07/12', 'not returned', 'Deym!', 'ENGR. JOSE RHYZ ISMAEL', 1),
(49, 20141375, 2, '17-12-07', '17/07/12', 'not returned', 'Deym girl!', 'ENGR. JOSE RHYZ ISMAEL', 7),
(50, 20141374, 2, '17-12-07', '', 'not returned', '', 'ENGR. JOSE RHYZ ISMAEL', 5),
(51, 20141990, 2, '17-12-07', '', 'not returned', '', 'ENGR. JOSE RHYZ ISMAEL', 5),
(52, 20141990, 3, '17-12-07', '', 'not returned', '', 'ENGR. JOSE RHYZ ISMAEL', 3),
(53, 20140069, 2, '17-12-07', '', 'not returned', '', 'ENGR. JOSE RHYZ ISMAEL', 1),
(55, 20140001, 2, '17-12-07', '', 'not returned', '', 'ENGR. JOSE RHYZ ISMAEL', 1),
(64, 20140202, 1, '17/07/13', '', 'not returned', '', 'ENGR. JOSE RHYZ ISMAEL', 1),
(65, 20140202, 3, '17/07/13', '', 'not returned', '', 'ENGR. JOSE RHYZ ISMAEL', 1);

-- --------------------------------------------------------

--
-- Table structure for table `borrower`
--

CREATE TABLE IF NOT EXISTS `borrower` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20141991 ;

--
-- Dumping data for table `borrower`
--

INSERT INTO `borrower` (`id`, `name`, `course`, `subject`) VALUES
(20140001, 'DENNIS ZYRUS', 'BS INFORMATION TECHNOLOGY - II', 'EE51'),
(20140069, 'ZEKEY ZAILON', 'BS INFORMATION TECHNOLOGY - IV', 'CA211'),
(20140202, 'OZAWA ', 'BS ENGINEERING - I', 'EE51'),
(20141111, 'BLACK', 'BS INFORMATION TECHNOLOGY - II', 'EE51'),
(20141374, 'KHUZAN', 'BS INFORMATION TECHNOLOGY - IV', 'EE51'),
(20141375, 'JADE ASIS', 'BS ENGINEERING - IV', 'ECE552'),
(20141990, 'KUYA SANZ', 'BS INFORMATION TECHNOLOGY - IV', 'CA211');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `items_id` int(11) NOT NULL AUTO_INCREMENT,
  `qty` int(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `prpty_number` varchar(50) NOT NULL,
  `classification` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `assignee` varchar(50) NOT NULL,
  `remarks` varchar(50) NOT NULL,
  PRIMARY KEY (`items_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`items_id`, `qty`, `description`, `prpty_number`, `classification`, `department`, `location`, `assignee`, `remarks`) VALUES
(1, 0, 'Analog-Digital Communication Trainer', '04-ED-001,04-ED-0140-0151', 'ENG''G-DIGITAL LAB EQPT', 'ENG''G', 'Digital Lab', 'ENGR. JOSE RHYZ ISMAEL', 'Good Condition'),
(2, 12, '0-15 VOLTS POWER SUPPLY', '04-ED-0002-0006', 'ENG''G-DIGITAL LAB EQPT', 'ENG''G', 'Digital Lab', 'ENGR. JOSE RHYZ ISMAEL', 'Good Condition'),
(3, 5, 'CAMSCO MOTOR STARTER', '04-ED-0015', 'ENG''G-DIGITAL LAB EQPT', 'ENG''G', 'Digital Lab', 'ENGR. JOSE RHYZ ISMAEL', 'Good Condition'),
(4, 6, 'ANTENNA SYSTEM', '04-ED-0120', 'ENG''G-DIGITAL LAB EQPT', 'ENG''G', 'Digital Lab', 'ENGR. JOSE RHYZ ISMAEL', 'Good Condition'),
(13, 10, '0-15 VOLTS POWER SUPPLY', '04-ED-0002-0006', 'ENGINEERING-DIGITAL LAB EQPT', 'ENGINEERING', 'Digital Laboratory', 'ENGR. JOSE RHYZ ISMAEL', 'Operational'),
(14, 9, 'CAMSCO MOTOR STARTER', '04-ED-0007', 'ENGINEERING-DIGITAL LAB EQPT', 'ENGINEERING', 'Digital Laboratory', 'ENGR. JOSE RHYZ ISMAEL', 'Operational'),
(15, 15, 'ANTENNA SYSTEM', '04-ED-0015', 'ENGINEERING-DIGITAL LAB EQPT', 'ENGINEERING', 'Digital Laboratory', 'ENGR. JOSE RHYZ ISMAEL', 'Operational'),
(16, 10, 'BREADBOARD', '04-ED-0120', 'ENGINEERING-DIGITAL LAB EQPT', 'ENGINEERING', 'Digital Laboratory', 'ENGR. JOSE RHYZ ISMAEL', 'Operational'),
(17, 10, 'CONVERTER CHARGER ( KOLIN )', '04-ED-0017', 'ENGINEERING-DIGITAL LAB EQPT', 'ENGINEERING', 'Digital Laboratory', 'ENGR. JOSE RHYZ ISMAEL', 'Operational'),
(18, 10, 'DESOLDERING PUMP', '04-ED-0018-0019', 'ENGINEERING-DIGITAL LAB EQPT', 'ENGINEERING', 'Digital Laboratory', 'ENGR. JOSE RHYZ ISMAEL', 'Operational'),
(19, 10, 'DIGITAL MULTIMETER', '04-ED-0020', 'ENGINEERING-DIGITAL LAB EQPT', 'ENGINEERING', 'Digital Laboratory', 'ENGR. JOSE RHYZ ISMAEL', 'Operational'),
(20, 10, 'ELECTRONICS 1 MODULE ( EL1 A-J )', '04-ED-0008-0010,04-ED-0014,04-ED-0021-0026', 'ENGINEERING-DIGITAL LAB EQPT', 'ENGINEERING', 'Digital Laboratory', 'ENGR. JOSE RHYZ ISMAEL', 'Operational'),
(21, 10, 'ELECTRONICS 2 MODULE ( EL2 A-S )', '04-ED-0030-0048', 'ENGINEERING-DIGITAL LAB EQPT', 'ENGINEERING', 'Digital Laboratory', 'ENGR. JOSE RHYZ ISMAEL', 'Operational'),
(22, 10, 'ELECTRONICS CIRCUITS 1 MODULE (  EC1 A-H )', '04-ED-0049-0056', 'ENGINEERING-DIGITAL LAB EQPT', 'ENGINEERING', 'Digital Laboratory', 'ENGR. JOSE RHYZ ISMAEL', 'Operational'),
(23, 10, 'EXTENSION WIRE', '04-ED-0058', 'ENGINEERING-DIGITAL LAB EQPT', 'ENGINEERING', 'Digital Laboratory', 'ENGR. JOSE RHYZ ISMAEL', 'Operational'),
(24, 10, 'FREQUENCY/AMPLITUDE FUNCTION GENERATOR', '04-ED-0059-0060', 'ENGINEERING-DIGITAL LAB EQPT', 'ENGINEERING', 'Digital Laboratory', 'ENGR. JOSE RHYZ ISMAEL', 'Operational'),
(25, 10, 'FUSE BOX', '04-ED-0061-0065', 'ENGINEERING-DIGITAL LAB EQPT', 'ENGINEERING', 'Digital Laboratory', 'ENGR. JOSE RHYZ ISMAEL', 'Operational'),
(26, 9, 'GW DUAL CHANNEL OSCILLOSCOPE', '04-ED-006', 'ENGINEERING-DIGITAL LAB EQPT', 'ENGINEERING', 'Digital Laboratory', 'ENGR. JOSE RHYZ ISMAEL', 'Operational'),
(27, 10, 'HAND TACHOMETER', '04-ED-0067', 'ENGINEERING-DIGITAL LAB EQPT', 'ENGINEERING', 'Digital Laboratory', 'ENGR. JOSE RHYZ ISMAEL', 'Operational'),
(28, 10, 'HEATKIT 5 MHZ PORTABLE OSCILLOSCOPE SINGLE CHANNEL', '04-ED-0068-0072', 'ENGINEERING-DIGITAL LAB EQPT', 'ENGINEERING', 'Digital Laboratory', 'ENGR. JOSE RHYZ ISMAEL', 'Not Operational'),
(29, 10, 'JUNCTION BOX ( PLASTIC )', '04-ED-0073-0075', 'ENGINEERING-DIGITAL LAB EQPT', 'ENGINEERING', 'Digital Laboratory', 'ENGR. JOSE RHYZ ISMAEL', 'Operational'),
(30, 10, 'LEVEL ( HAI FENG W/ CM SCALE )', '04-ED-0076', 'ENGINEERING-DIGITAL LAB EQPT', 'ENGINEERING', 'Digital Laboratory', 'ENGR. JOSE RHYZ ISMAEL', 'Operational'),
(31, 10, 'LOADING CAPACITOR', '04-ED-0077-0088', 'ENGINEERING-DIGITAL LAB EQPT', 'ENGINEERING', 'Digital Laboratory', 'ENGR. JOSE RHYZ ISMAEL', 'Operational'),
(32, 10, 'LOADING INDUCTOR', '04-ED-0089-0100', 'ENGINEERING-DIGITAL LAB EQPT', 'ENGINEERING', 'Digital Laboratory', 'ENGR. JOSE RHYZ ISMAEL', 'Operational'),
(33, 10, 'LOADING RESISTOR', '04-ED-0101-0112', 'ENGINEERING-DIGITAL LAB EQPT', 'ENGINEERING', 'Digital Laboratory', 'ENGR. JOSE RHYZ ISMAEL', 'Operational'),
(34, 10, 'LOW-ELECTRIC LAMPS', '04-ED-0114-0119,0152', 'ENGINEERING-DIGITAL LAB EQPT', 'ENGINEERING', 'Digital Laboratory', 'ENGR. JOSE RHYZ ISMAEL', 'Operational'),
(35, 10, 'MICROWAVE SYSTEM ( 2 TRIPODS & WANP )', '04-ED-0016', 'ENGINEERING-DIGITAL LAB EQPT', 'ENGINEERING', 'Digital Laboratory', 'ENGR. JOSE RHYZ ISMAEL', 'Not Operational'),
(36, 10, 'MULTI-TAP TRANSFORMER', '04-ED-0121-0124', 'ENGINEERING-DIGITAL LAB EQPT', 'ENGINEERING', 'Digital Laboratory', 'ENGR. JOSE RHYZ ISMAEL', 'Operational'),
(37, 10, 'PLIERS', '04-ED-0126-0127', 'ENGINEERING-DIGITAL LAB EQPT', 'ENGINEERING', 'Digital Laboratory', 'ENGR. JOSE RHYZ ISMAEL', 'Operational'),
(38, 10, 'RESISTANCE BOX', '04-ED-0128-0129', 'ENGINEERING-DIGITAL LAB EQPT', 'ENGINEERING', 'Digital Laboratory', 'ENGR. JOSE RHYZ ISMAEL', 'Operational'),
(39, 10, 'SANWA ANALOG MULTIMETER', '04-ED-0130', 'ENGINEERING-DIGITAL LAB EQPT', 'ENGINEERING', 'Digital Laboratory', 'ENGR. JOSE RHYZ ISMAEL', 'Operational'),
(40, 10, 'SANWA DIGITAL MULTIMETER', '04-ED-0131', 'ENGINEERING-DIGITAL LAB EQPT', 'ENGINEERING', 'Digital Laboratory', 'ENGR. JOSE RHYZ ISMAEL', 'Operational'),
(41, 10, 'SEW ST-310 CLAMPMETER', '04-ED-0132', 'ENGINEERING-DIGITAL LAB EQPT', 'ENGINEERING', 'Digital Laboratory', 'ENGR. JOSE RHYZ ISMAEL', 'Operational'),
(42, 10, 'SIGNAL GENERATOR ( LEADER )', '04-ED-0133', 'ENGINEERING-DIGITAL LAB EQPT', 'ENGINEERING', 'Digital Laboratory', 'ENGR. JOSE RHYZ ISMAEL', 'Operational'),
(43, 10, 'SOUND LEVEL METER', '04-ED-0134', 'ENGINEERING-DIGITAL LAB EQPT', 'ENGINEERING', 'Digital Laboratory', 'ENGR. JOSE RHYZ ISMAEL', 'Operational'),
(44, 10, 'SWR AND POWER METER SX-200 ( DIAMOND ANTENNA )', '04-ED-0135', 'ENGINEERING-DIGITAL LAB EQPT', 'ENGINEERING', 'Digital Laboratory', 'ENGR. JOSE RHYZ ISMAEL', 'Operational'),
(45, 10, 'WIRE STRIPPER', '04-ED-0137-0139', 'ENGINEERING-DIGITAL LAB EQPT', 'ENGINEERING', 'Digital Laboratory', 'ENGR. JOSE RHYZ ISMAEL', 'Operational'),
(46, 10, 'ELECTROLYTIC WATER BATH', '04-EP-0071', 'ENGINEERING-DIGITAL LAB EQPT', 'ENGINEERING', 'Digital Laboratory', 'ENGR. JOSE RHYZ ISMAEL', 'Operational'),
(47, 10, 'IRON FILINGS', '04-EP-0084', 'ENGINEERING-DIGITAL LAB EQPT', 'ENGINEERING', 'Digital Laboratory', 'ENGR. JOSE RHYZ ISMAEL', 'Operational'),
(48, 10, 'TAPE MEASURE', '04-EP-0140-0143', 'ENGINEERING-DIGITAL LAB EQPT', 'ENGINEERING', 'Digital Laboratory', 'ENGR. JOSE RHYZ ISMAEL', 'Not Operational'),
(49, 10, 'THERMOMETER', '04-EP-0144-0145', 'ENGINEERING-DIGITAL LAB EQPT', 'ENGINEERING', 'Digital Laboratory', 'ENGR. JOSE RHYZ ISMAEL', 'Not Operational'),
(52, 11, 'ANTENNA SYSTEM', '04-ED-0007', 'ENGINEERING-DIGITAL LAB EQPT', 'ENGINEERING', 'Digital Laboratory', 'ENGR. JOSE RHYZ ISMAEL', 'Good Condition'),
(53, 5, 'arduino uno', '1234', 'ENGINEERING-DIGITAL LAB EQPT', 'ENGINEERING', 'Digital Laboratory', 'ENGR. JOSE RHYZ ISMAEL', 'Good Condition');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `reserved_borrowers`
--

CREATE TABLE IF NOT EXISTS `reserved_borrowers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20150000 ;

--
-- Dumping data for table `reserved_borrowers`
--

INSERT INTO `reserved_borrowers` (`id`, `name`, `course`, `subject`) VALUES
(20140001, 'DENNIS ZYRUS', 'BS INFORMATION TECHNOLOGY - II', 'EE51'),
(20140069, 'ZEKEY ZAILON', 'BS INFORMATION TECHNOLOGY - IV', 'CA211'),
(20140202, 'OZAWA ', 'BS ENGINEERING - I', 'EE51'),
(20141111, 'BLACK', 'BS INFORMATION TECHNOLOGY - II', 'EE51'),
(20141234, 'AMBOT', 'BS ENGINEERING - I', 'CPE403'),
(20141374, 'KHUZAN', 'BS INFORMATION TECHNOLOGY - IV', 'EE51'),
(20141375, 'JADE ASIS', 'BS INFORMATION TECHNOLOGY - I', 'EE51'),
(20141577, 'WILSON', 'BS INFORMATION TECHNOLOGY - IV', 'CPE403'),
(20141990, 'KUYA SANZ', 'BS INFORMATION TECHNOLOGY - IV', 'CA211'),
(20145577, 'MIA KHALIFA', 'BS ENGINEERING - II', 'ECE552'),
(20149999, 'MYLEN', 'BS INFORMATION TECHNOLOGY - III', 'EE51');

-- --------------------------------------------------------

--
-- Table structure for table `returned_data`
--

CREATE TABLE IF NOT EXISTS `returned_data` (
  `b_id` int(11) NOT NULL AUTO_INCREMENT,
  `borrower_id` int(11) NOT NULL,
  `items_id` int(11) NOT NULL,
  `dateoflend` varchar(50) NOT NULL,
  `dateofreturn` varchar(50) NOT NULL,
  `status` varchar(200) NOT NULL,
  `comments` varchar(500) NOT NULL,
  `received` varchar(500) NOT NULL,
  `b_qty` int(11) NOT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69 ;

--
-- Dumping data for table `returned_data`
--

INSERT INTO `returned_data` (`b_id`, `borrower_id`, `items_id`, `dateoflend`, `dateofreturn`, `status`, `comments`, `received`, `b_qty`) VALUES
(42, 20141375, 1, '17-12-07', '17/07/12', 'returned', '', 'ENGR. JOSE RHYZ ISMAEL', 1),
(43, 20141375, 2, '17-12-07', '', 'returned', '', 'ENGR. JOSE RHYZ ISMAEL', 2),
(54, 20141577, 2, '17-12-07', '17/07/13', 'returned', '', 'ENGR. JOSE RHYZ ISMAEL', 1),
(56, 20145577, 2, '17-12-07', '17/07/13', 'returned', '', 'ENGR. JOSE RHYZ ISMAEL', 1),
(57, 20149999, 2, '17-12-07', '17/07/12', 'returned', '', 'ENGR. JOSE RHYZ ISMAEL', 3),
(59, 20149999, 1, '17-13-07', '17/07/13', 'returned', '', 'ENGR. JOSE RHYZ ISMAEL', 1),
(60, 20149999, 3, '17-13-07', '', 'returned', '', 'ENGR. JOSE RHYZ ISMAEL', 5),
(61, 20149999, 3, '17-13-07', '17/07/13', 'returned', '', 'ENGR. JOSE RHYZ ISMAEL', 2),
(62, 20149999, 2, '17-13-07', '17/07/13', 'returned', 'hello', 'ENGR. JOSE RHYZ ISMAEL', 1),
(63, 20149999, 4, '17-13-07', '17/07/13', 'returned', '', 'ENGR. JOSE RHYZ ISMAEL', 2),
(67, 20141234, 16, '17/07/13', '17/07/13', 'returned', '', 'ENGR. JOSE RHYZ ISMAEL', 1),
(68, 20141234, 19, '17/07/13', '17/07/13', 'returned', '', 'ENGR. JOSE RHYZ ISMAEL', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
