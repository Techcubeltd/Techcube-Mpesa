-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 31, 2015 at 01:34 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `roster`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `bookID` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(44) NOT NULL,
  `title` varchar(100) NOT NULL,
  `ISBN` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `price` decimal(18,0) DEFAULT NULL,
  `publisher` varchar(100) NOT NULL,
  `edition` varchar(50) NOT NULL,
  `issuable` varchar(11) NOT NULL,
  `volume` varchar(50) DEFAULT NULL,
  `status` varchar(200) NOT NULL,
  `dateadded` date NOT NULL,
  `datemodified` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `quantity` int(200) NOT NULL,
  `barcode` varchar(200) NOT NULL,
  PRIMARY KEY (`bookID`),
  UNIQUE KEY `barcode` (`barcode`),
  KEY `subjectID` (`subject`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `bookstock`
--

CREATE TABLE IF NOT EXISTS `bookstock` (
  `bookstockID` int(11) NOT NULL AUTO_INCREMENT,
  `vendorID` int(11) DEFAULT NULL,
  `bookID` int(11) DEFAULT NULL,
  `barcodevalue` varchar(50) DEFAULT NULL,
  `bookposition` varchar(50) DEFAULT NULL,
  `purchasedate` datetime DEFAULT NULL,
  `purchasedby` varchar(50) DEFAULT NULL,
  `instock` bit(1) DEFAULT NULL,
  `isreference` bit(1) DEFAULT NULL,
  `reason` text,
  `dateadded` timestamp NULL DEFAULT NULL,
  `datemodified` datetime DEFAULT NULL,
  PRIMARY KEY (`bookstockID`),
  KEY `vendorID` (`vendorID`),
  KEY `bookID` (`bookID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE IF NOT EXISTS `classes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clasname` varchar(200) NOT NULL,
  `stream` varchar(200) NOT NULL,
  `teachername` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `clasname`, `stream`, `teachername`) VALUES
(5, 'Form 1', 'North', 'simon');

-- --------------------------------------------------------

--
-- Table structure for table `period`
--

CREATE TABLE IF NOT EXISTS `period` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `starttime` time NOT NULL,
  `endtime` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `period`
--

INSERT INTO `period` (`id`, `name`, `starttime`, `endtime`) VALUES
(2, 'Morning Prep', '05:03:00', '06:03:00');

-- --------------------------------------------------------

--
-- Table structure for table `prefects`
--

CREATE TABLE IF NOT EXISTS `prefects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adminno` varchar(200) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `surname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `class` varchar(200) NOT NULL,
  `designationtype` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `dateappointed` date NOT NULL,
  `termexpiry` date NOT NULL,
  `roles` text NOT NULL,
  `gender` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `adminno` (`adminno`,`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `schoolterms`
--

CREATE TABLE IF NOT EXISTS `schoolterms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year` year(4) NOT NULL,
  `name` varchar(200) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `schoolterms`
--

INSERT INTO `schoolterms` (`id`, `year`, `name`, `startdate`, `enddate`) VALUES
(1, 2015, 'Term 1', '2015-01-07', '2015-04-10');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `staffID` int(11) NOT NULL AUTO_INCREMENT,
  `department` varchar(44) DEFAULT NULL,
  `employeecode` varchar(50) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `initials` varchar(11) DEFAULT NULL,
  `gender` varchar(11) NOT NULL,
  `dateofbirth` date NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  `phoneno` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `religion` varchar(20) DEFAULT NULL,
  `jobtitle` varchar(20) DEFAULT NULL,
  `specialization` varchar(20) DEFAULT NULL,
  `maritalstatus` varchar(20) DEFAULT NULL,
  `joindate` date DEFAULT NULL,
  `nationalID` int(20) NOT NULL,
  `notes` text,
  PRIMARY KEY (`staffID`),
  UNIQUE KEY `employeecode_2` (`employeecode`),
  KEY `departmentcode` (`department`),
  KEY `employeecode` (`employeecode`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffID`, `department`, `employeecode`, `fullname`, `initials`, `gender`, `dateofbirth`, `address`, `phoneno`, `email`, `religion`, `jobtitle`, `specialization`, `maritalstatus`, `joindate`, `nationalID`, `notes`) VALUES
(1, 'science', '2021', 'simon alter man', 'Mr', 'male', '2013-02-05', '1592-00902 kikuyu', 2147483647, 'smbugua@tmail.com', 'christian', 'teacher', 'Science physics', 'single', '2015-02-12', 2838818, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `staffroster`
--

CREATE TABLE IF NOT EXISTS `staffroster` (
  `id` int(110) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(200) NOT NULL,
  `surname` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `Term` varchar(200) NOT NULL,
  `period` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `stream`
--

CREATE TABLE IF NOT EXISTS `stream` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `stream`
--

INSERT INTO `stream` (`id`, `name`) VALUES
(1, 'North');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `subjectID` int(11) NOT NULL AUTO_INCREMENT,
  `subjectname` varchar(50) NOT NULL,
  `field` varchar(200) NOT NULL,
  `subjectcode` varchar(110) NOT NULL,
  `dateadded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`subjectID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subjectID`, `subjectname`, `field`, `subjectcode`, `dateadded`) VALUES
(1, 'English', 'Languages', '201', '2015-03-30 12:40:36'),
(2, 'Kiswahili', 'Languages', '203', '2015-03-30 12:40:36');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `userName` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL DEFAULT 'active',
  `accountType` int(11) NOT NULL DEFAULT '1',
  `dateadded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `userName` (`userName`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `email`, `password`, `userName`, `status`, `accountType`, `dateadded`) VALUES
(1, 'ford test', 'fordmaguill@umbc.edu', '6119442a08276dbb22e918c3d85c1c6e', 'Maguill', 'active', 1, '0000-00-00 00:00:00'),
(2, 'simon alter man', 'smbugua11@umbc.edu', '6119442a08276dbb22e918c3d85c1c6e', 'smbugua', 'active', 0, '2015-02-23 23:21:17'),
(7, 'derrick ken', 'dk@umbc.edu', '5187c3cc0c7d65f5b02cb6a27e1f8f7a', 'dken', 'active', 1, '2015-02-24 00:02:38');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
