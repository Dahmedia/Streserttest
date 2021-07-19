-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 19, 2021 at 07:54 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mytestdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `myinfotest`
--

DROP TABLE IF EXISTS `myinfotest`;
CREATE TABLE IF NOT EXISTS `myinfotest` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `names` varchar(55) NOT NULL,
  `addresses` text NOT NULL,
  `answer` varchar(3) NOT NULL,
  `passport` text NOT NULL,
  `dates` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `myinfotest`
--

INSERT INTO `myinfotest` (`id`, `names`, `addresses`, `answer`, `passport`, `dates`) VALUES
(1, 'Ikudabo  Temidayo', 'basin road dantoro', 'No', 'image/162668102315862619410.png', '2021-07-19');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
