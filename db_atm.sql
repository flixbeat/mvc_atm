-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 01, 2015 at 10:00 AM
-- Server version: 5.6.13
-- PHP Version: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_atm`
--
CREATE DATABASE IF NOT EXISTS `db_atm` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_atm`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_account`
--

CREATE TABLE IF NOT EXISTS `tbl_account` (
  `usr_id` int(11) NOT NULL AUTO_INCREMENT,
  `usr_name` varchar(50) NOT NULL,
  `usr_pin` int(6) NOT NULL,
  `usr_balance` decimal(10,0) NOT NULL,
  PRIMARY KEY (`usr_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_account`
--

INSERT INTO `tbl_account` (`usr_id`, `usr_name`, `usr_pin`, `usr_balance`) VALUES
(1, 'dave', 123456, '2873509739');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
