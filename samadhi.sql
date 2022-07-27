-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 15, 2021 at 05:12 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `samadhi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_name`, `password`) VALUES
(1, 'senal', '123ab'),
(2, 'ranidu', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `cash_donation`
--

DROP TABLE IF EXISTS `cash_donation`;
CREATE TABLE IF NOT EXISTS `cash_donation` (
  `id` int(11) NOT NULL,
  `cd_id` int(11) NOT NULL AUTO_INCREMENT,
  `cash_amount` double DEFAULT NULL,
  PRIMARY KEY (`cd_id`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cash_donation`
--

INSERT INTO `cash_donation` (`id`, `cd_id`, `cash_amount`) VALUES
(1, 1, 2500),
(2, 2, 1500),
(3, 3, 4000),
(4, 4, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `childdetails`
--

DROP TABLE IF EXISTS `childdetails`;
CREATE TABLE IF NOT EXISTS `childdetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_with_initial` varchar(500) NOT NULL,
  `full_name` varchar(500) NOT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `image` blob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `childdetails`
--

INSERT INTO `childdetails` (`id`, `name_with_initial`, `full_name`, `gender`, `birthdate`, `image`) VALUES
(1, 'S.V Witharana', 'Senal Vindula Witharana', 'Male', '1998-10-09', 0x6c6f676f312e6a7067),
(2, 'G.S Perera', 'Gehani Sathsarani Perera', 'Female', '1999-02-16', 0x6c6f676f312e6a7067),
(5, 'T.G Silva', 'Tharindu Gimhan Silva', 'Male', '2000-10-26', '');

-- --------------------------------------------------------

--
-- Table structure for table `donars`
--

DROP TABLE IF EXISTS `donars`;
CREATE TABLE IF NOT EXISTS `donars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `donor_name` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `donation_type` varchar(500) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donars`
--

INSERT INTO `donars` (`id`, `donor_name`, `contact`, `Address`, `donation_type`, `date`) VALUES
(1, 'Senal', '0722565678', 'Kalutara', 'cash', '2021-07-21 18:26:51'),
(2, 'Hasini', '0714585639', 'Matara', 'cash', '2021-08-15 16:27:42'),
(3, 'Isuru', '0764681326', 'Colombo', 'cash', '2021-08-15 00:00:00'),
(4, 'Pathum', '0714587777', 'Gampaha', 'cash', '2021-08-15 16:29:07'),
(5, 'Bhanuka', '0712837197', 'Kalutara', 'items', '2021-08-15 22:15:45');

-- --------------------------------------------------------

--
-- Table structure for table `item_donation`
--

DROP TABLE IF EXISTS `item_donation`;
CREATE TABLE IF NOT EXISTS `item_donation` (
  `i_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`i_id`),
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `labor`
--

DROP TABLE IF EXISTS `labor`;
CREATE TABLE IF NOT EXISTS `labor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_with_initial` varchar(500) CHARACTER SET armscii8 NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `first_name` varchar(15) NOT NULL,
  `birthday` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `address` text NOT NULL,
  `company` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `labor`
--

INSERT INTO `labor` (`id`, `name_with_initial`, `full_name`, `first_name`, `birthday`, `gender`, `contact`, `address`, `company`) VALUES
(1, 'P. Fernando. ', 'Poorna Fernando', 'Poorna', '1993-12-08', 'Male', '0769681396 ', 'Kottawa', 'moonlight'),
(2, 'S. Witharana', 'Senal Witharana', 'Senal', '1996-12-09', 'Male', '0712837197 ', 'Kalutara', 'sunshine'),
(3, 'A. Udawatte', 'Anujitha Udawatte', 'Anujitha', '1998-12-10', 'Female', '0751923071 ', 'Kaduwela', 'sunshine');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `name_with_initial` varchar(500) NOT NULL,
  `birthday` date DEFAULT NULL,
  `nic` varchar(10) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `contact` varchar(15) NOT NULL,
  `paddress` varchar(500) NOT NULL,
  `email` varchar(100) NOT NULL,
  `post` varchar(20) DEFAULT NULL,
  `image` blob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `first_name`, `last_name`, `name_with_initial`, `birthday`, `nic`, `gender`, `contact`, `paddress`, `email`, `post`, `image`) VALUES
(1, 'Senal', 'Witharana', 'L.W.S.V Witharana', '1998-08-11', '984913642V', 'Male', '0779621933  ', '213/1 Moratuwa', 'ranidu@gmail.com', 'principle', NULL),
(2, 'Sandun', 'Weerakkody', 'S.K Weerakkody', '1998-10-09', '982348126V', 'Male', '0722565678', 'Gampaha', 'Sandun@gmail.com', 'admin', NULL),
(3, 'Hasini', 'Gunathilake', 'H. Gunathilake', '1999-06-10', '982328156V', 'Female', '0764681326', 'Kelaniya', 'Hasini@gmail.com', 'Matron', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
