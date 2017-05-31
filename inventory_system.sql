-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2017 at 03:06 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=177 ;

--
-- Dumping data for table `borrowed_items`
--

INSERT INTO `borrowed_items` (`b_id`, `borrower_id`, `items_id`, `dateoflend`, `dateofreturn`, `status`, `comments`, `received`, `b_qty`) VALUES
(145, 1374, 1, '17-23-03', '17/03/23', 'returned', '', 'ENGR. JOSE RHYZ ISMAEL', 2),
(146, 1374, 4, '17-23-03', '', 'not returned', '', 'ENGR. JOSE RHYZ ISMAEL', 2),
(147, 1375, 13, '17-23-03', '17/03/23', 'returned', '', 'ENGR. JOSE RHYZ ISMAEL', 5),
(148, 1375, 16, '17-23-03', '', 'not returned', '', 'ENGR. JOSE RHYZ ISMAEL', 5),
(149, 1375, 17, '17-23-03', '', 'not returned', '', 'ENGR. JOSE RHYZ ISMAEL', 5),
(150, 1374, 1, '17-23-03', '', 'not returned', '', 'ENGR. JOSE RHYZ ISMAEL', 1),
(151, 1374, 1, '17-23-03', '', 'not returned', '', 'ENGR. JOSE RHYZ ISMAEL', 1),
(152, 2115, 1, '17-23-03', '17/03/24', 'returned', '', 'ENGR. JOSE RHYZ ISMAEL', 4),
(153, 989, 1, '17-23-03', '17/03/23', 'returned', '', 'ENGR. JOSE RHYZ ISMAEL', 1),
(154, 1255, 2, '17-23-03', '17/03/23', 'returned', '', 'ENGR. JOSE RHYZ ISMAEL', 1),
(155, 88182, 1, '17-24-03', '17/03/24', 'returned', '', 'ENGR. JOSE RHYZ ISMAEL', 1),
(156, 88182, 2, '17-24-03', '', 'not returned', '', 'ENGR. JOSE RHYZ ISMAEL', 1),
(157, 213123123, 1, '17-24-03', '17/04/14', 'returned', '', 'ENGR. JOSE RHYZ ISMAEL', 5),
(158, 213123123, 2, '17-24-03', '', 'not returned', '', 'ENGR. JOSE RHYZ ISMAEL', 10),
(159, 23423423, 2, '17-24-03', '17/03/24', 'returned', '', 'ENGR. JOSE RHYZ ISMAEL', 1),
(162, 223232323, 1, '17-24-03', '17/03/24', 'returned', '', 'ENGR. JOSE RHYZ ISMAEL', 2),
(163, 223232323, 3, '17-24-03', '', 'not returned', '', 'ENGR. JOSE RHYZ ISMAEL', 5),
(164, 212121, 1, '17-24-03', '', 'not returned', '', 'ENGR. JOSE RHYZ ISMAEL', 1),
(165, 20140429, 1, '17-24-03', '', 'not returned', '', 'ENGR. JOSE RHYZ ISMAEL', 1),
(166, 20140429, 3, '17-24-03', '', 'not returned', '', 'ENGR. JOSE RHYZ ISMAEL', 1),
(167, 20140606, 1, '17-24-03', '', 'not returned', '', 'ENGR. JOSE RHYZ ISMAEL', 1),
(168, 20140606, 3, '17-24-03', '', 'not returned', '', 'ENGR. JOSE RHYZ ISMAEL', 5),
(169, 20140606, 26, '17-24-03', '', 'not returned', '', 'ENGR. JOSE RHYZ ISMAEL', 1),
(170, 1666, 1, '17-24-03', '', 'not returned', '', 'ENGR. JOSE RHYZ ISMAEL', 5),
(171, 1666, 4, '17-24-03', '', 'not returned', '', 'ENGR. JOSE RHYZ ISMAEL', 5),
(172, 12355, 3, '17-24-03', '17/03/24', 'returned', '', 'ENGR. JOSE RHYZ ISMAEL', 3),
(173, 145, 2, '17-24-03', '17/04/16', 'not returned', 'helo', 'ENGR. JOSE RHYZ ISMAEL', 1),
(174, 145, 15, '17-24-03', '', 'not returned', '', 'ENGR. JOSE RHYZ ISMAEL', 1),
(175, 9999, 4, '17-26-03', '', 'not returned', '', 'ENGR. JOSE RHYZ ISMAEL', 1),
(176, 9999, 14, '17-26-03', '', 'not returned', '', 'ENGR. JOSE RHYZ ISMAEL', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=223232324 ;

--
-- Dumping data for table `borrower`
--

INSERT INTO `borrower` (`id`, `name`, `course`, `subject`) VALUES
(145, 'MYLEN', 'BS INFORMATION TECHNOLOGY - I', 'ECE552'),
(1374, 'ZEN', 'BS INFORMATION TECHNOLOGY - I', 'ECE552'),
(1666, 'OMANDAC', 'BS ENGINEERING - II', 'CA211'),
(9999, 'BLACK', 'BS INFORMATION TECHNOLOGY - I', 'EE51'),
(12355, 'MORENO', 'BS ENGINEERING - I', 'CPE402'),
(212121, 'DENIS', 'BS INFORMATION TECHNOLOGY - I', 'EE51'),
(20140429, 'JERLYN JAMORA', 'BS INFORMATION TECHNOLOGY - III', 'CA211'),
(20140606, 'VINA VELARDE', 'BS INFORMATION TECHNOLOGY - III', 'EE51'),
(213123123, 'SANZ', 'BS INFORMATION TECHNOLOGY - I', 'EE51'),
(223232323, 'DENIS', 'BS INFORMATION TECHNOLOGY - I', 'EE51');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`items_id`, `qty`, `description`, `prpty_number`, `classification`, `department`, `location`, `assignee`, `remarks`) VALUES
(1, 17, 'Analog-Digital Communication Trainer', '04-ED-001,04-ED-0140-0151', 'ENG''G-DIGITAL LAB EQPT', 'ENG''G', 'Digital Lab', 'ENGR. JOSE RHYZ ISMAEL', 'Good Condition'),
(2, 29, '0-15 VOLTS POWER SUPPLY', '04-ED-0002-0006', 'ENG''G-DIGITAL LAB EQPT', 'ENG''G', 'Digital Lab', 'ENGR. JOSE RHYZ ISMAEL', 'Good Condition'),
(3, 3, 'CAMSCO MOTOR STARTER', '04-ED-0015', 'ENG''G-DIGITAL LAB EQPT', 'ENG''G', 'Digital Lab', 'ENGR. JOSE RHYZ ISMAEL', 'Good Condition'),
(4, 4, 'ANTENNA SYSTEM', '04-ED-0120', 'ENG''G-DIGITAL LAB EQPT', 'ENG''G', 'Digital Lab', 'ENGR. JOSE RHYZ ISMAEL', 'Good Condition'),
(13, 10, '0-15 VOLTS POWER SUPPLY', '04-ED-0002-0006', 'ENGINEERING-DIGITAL LAB EQPT', 'ENGINEERING', 'Digital Laboratory', 'ENGR. JOSE RHYZ ISMAEL', 'Operational'),
(14, 9, 'CAMSCO MOTOR STARTER', '04-ED-0007', 'ENGINEERING-DIGITAL LAB EQPT', 'ENGINEERING', 'Digital Laboratory', 'ENGR. JOSE RHYZ ISMAEL', 'Operational'),
(15, 9, 'ANTENNA SYSTEM', '04-ED-0015', 'ENGINEERING-DIGITAL LAB EQPT', 'ENGINEERING', 'Digital Laboratory', 'ENGR. JOSE RHYZ ISMAEL', 'Operational'),
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
(52, 11, 'ANTENNA SYSTEM', '04-ED-0007', 'ENGINEERING-DIGITAL LAB EQPT', 'ENGINEERING', 'Digital Laboratory', 'ENGR. JOSE RHYZ ISMAEL', 'Good Condition');

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
(1, 'admin', 'zen');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
