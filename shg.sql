-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2017 at 05:41 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shg`
--

-- --------------------------------------------------------

--
-- Table structure for table `cust`
--

CREATE TABLE IF NOT EXISTS `cust` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `adhar` int(12) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `amount` double NOT NULL,
  `interest` double NOT NULL,
  `EMI` double NOT NULL,
  `fromD` date NOT NULL,
  `toD` date NOT NULL,
  `dedamount` float NOT NULL,
  `amountinterest` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cust`
--

INSERT INTO `cust` (`id`, `name`, `dob`, `adhar`, `contact`, `address`, `email`, `amount`, `interest`, `EMI`, `fromD`, `toD`, `dedamount`, `amountinterest`) VALUES
(1, 'maya', '2017-08-02', 1234567891, '9902183185', 'bgm', 'mayapatil@gmail.com', 50000, 12, 45, '2017-08-31', '2017-08-23', 410, 45000),
(2, 'suraj', '2017-08-10', 2147483647, '9923145697', 'belgaum', 'Suraj@gmail.com', 60000, 12, 4, '2017-08-16', '2017-08-17', 1000, 5000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
