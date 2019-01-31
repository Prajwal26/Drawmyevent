-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 27, 2019 at 06:52 PM
-- Server version: 5.5.57
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `draw_event`
--

-- --------------------------------------------------------

--
-- Table structure for table `eventdetails`
--

DROP TABLE IF EXISTS `eventdetails`;
CREATE TABLE IF NOT EXISTS `eventdetails` (
  `event_id` int(11) DEFAULT NULL,
  `event_name` varchar(100) DEFAULT NULL,
  `event_date` date DEFAULT NULL,
  `people` int(11) DEFAULT NULL,
  `budget_start` int(11) DEFAULT NULL,
  `budget_end` int(11) DEFAULT NULL,
  `other_spec` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventdetails`
--

INSERT INTO `eventdetails` (`event_id`, `event_name`, `event_date`, `people`, `budget_start`, `budget_end`, `other_spec`) VALUES
(1001, 'XY comedy show', '2015-01-18', 15, 1000, 10000, 'proper accomodation'),
(1002, 'birthday', '2016-01-18', 55, 50000, 54223, 'proper dining should be there'),
(1003, 'sangeet', '2017-01-18', 86, 80000, 96547, ''),
(1004, 'wedding', '2017-01-18', 450, 563234, 4586695, 'luxorious wedding');

-- --------------------------------------------------------

--
-- Table structure for table `person_details`
--

DROP TABLE IF EXISTS `person_details`;
CREATE TABLE IF NOT EXISTS `person_details` (
  `name` varchar(50) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `contact` int(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `personid` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`personid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person_details`
--

INSERT INTO `person_details` (`name`, `city`, `contact`, `email`, `address`, `personid`) VALUES
('ramesh', 'agra', 456666346, 'hh@gmail.com', 'india nagar', 1001),
('suresh', 'indore', 45865428, 'pk@gmail.com', 'rajendra nagar', 1002),
('stuffendra', 'indore', 45583456, 'hdgc@gmail.com', 'tilak nagar', 1003),
('dobendra', 'pakistan', 45668855, 'dob@gmail.com', 'chota pakistan', 1004);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
