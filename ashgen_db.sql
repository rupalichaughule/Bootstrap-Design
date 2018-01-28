-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2018 at 08:35 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ashgen_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `ash_register`
--

CREATE TABLE IF NOT EXISTS `ash_register` (
  `a_name` varchar(20) NOT NULL,
  `a_pass` varchar(20) NOT NULL,
  `a_mail` varchar(20) NOT NULL,
  `a_gender` varchar(10) NOT NULL,
  `a_phone` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ash_register`
--

INSERT INTO `ash_register` (`a_name`, `a_pass`, `a_mail`, `a_gender`, `a_phone`) VALUES
('Rupali', 'rupalic', 'radsf@gmail.com', 'female', 1),
('', '', '', '', 0),
('', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE IF NOT EXISTS `contact_us` (
  `c_name` varchar(20) NOT NULL,
  `c_mail` varchar(20) NOT NULL,
  `c_message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`c_name`, `c_mail`, `c_message`) VALUES
('rani', 'dgg@gmail.com', 'hellocfhfgjg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
