-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2019 at 05:54 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `person_details`
--

CREATE TABLE `person_details` (
  `personid` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `contact` bigint(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person_details`
--

INSERT INTO `person_details` (`personid`, `name`, `city`, `contact`, `email`, `address`) VALUES
(5, 'prajwal', 'indore', 898989898, 'elonapnabachchahe@gmail.com', 'Tesla Head office'),
(55, 'Nihal', 'indore', 9039553219, 'Nihal@gmail.com', 'tere baap se puch'),
(89, 'Nehal', 'indore', 99999, 'Janwar@gmail.com', 'tere baap se puch'),
(805, 'prajwal', 'indore', 898989898, 'elonapnabachchahe@gmail.com', 'Tesla Head office'),
(1005, 'Nono', 'Nini', 99, 'Nihal@nihal.com', 'naksljf dajsk jaskljf lkajflk jaskjfk aslfjl aksf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `person_details`
--
ALTER TABLE `person_details`
  ADD PRIMARY KEY (`personid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `person_details`
--
ALTER TABLE `person_details`
  MODIFY `personid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1010;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
