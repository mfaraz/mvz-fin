-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2014 at 05:46 PM
-- Server version: 5.5.36
-- PHP Version: 5.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fin`
--
CREATE DATABASE IF NOT EXISTS `fin` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `fin`;

-- --------------------------------------------------------

--
-- Table structure for table `m_category_in`
--

DROP TABLE IF EXISTS `m_category_in`;
CREATE TABLE IF NOT EXISTS `m_category_in` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Keterangan` varchar(250) NOT NULL,
  `Color` varchar(6) NOT NULL,
  `Status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `m_category_in`
--

INSERT INTO `m_category_in` (`ID`, `Name`, `Keterangan`, `Color`, `Status`) VALUES
(1, 'Salary', 'Gaji Pokok', '48CA3B', 1),
(2, 'Pinjaman', 'Ngutang !!!', '00BCE1', 1),
(3, 'Bantuan', 'Dapet Sumbangan', '4D3A7D', 1),
(4, 'THR', 'Buat jalan-jalan', 'AD1D28', 1),
(5, 'Bonus', 'Alhamdulilah', 'DEBB27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `m_category_out`
--

DROP TABLE IF EXISTS `m_category_out`;
CREATE TABLE IF NOT EXISTS `m_category_out` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Keterangan` varchar(250) NOT NULL,
  `Color` varchar(6) NOT NULL,
  `Status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `m_category_out`
--

INSERT INTO `m_category_out` (`ID`, `Name`, `Keterangan`, `Color`, `Status`) VALUES
(1, 'Green', '30', '48CA3B', 1),
(2, 'Blue', '25', '00BCE1', 1),
(3, 'Purple', '10', '4D3A7D', 1),
(4, 'Red', '20', 'AD1D28', 1),
(5, 'Yellow', '15', 'DEBB27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `m_user`
--

DROP TABLE IF EXISTS `m_user`;
CREATE TABLE IF NOT EXISTS `m_user` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `Username` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL DEFAULT '',
  `Password` varchar(30) NOT NULL,
  `Date_Create` datetime NOT NULL,
  `Date_LastLogin` datetime NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `m_user`
--

INSERT INTO `m_user` (`ID`, `Username`, `Email`, `Password`, `Date_Create`, `Date_LastLogin`) VALUES
(1, 'ron', 'ron@home.com', '111', '2014-05-06 00:00:00', '2014-05-06 00:00:00'),
(2, 'yen', 'yen@home.com', '222', '2014-05-06 00:00:00', '2014-05-06 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `t_budget`
--

DROP TABLE IF EXISTS `t_budget`;
CREATE TABLE IF NOT EXISTS `t_budget` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Category` int(11) NOT NULL,
  `Nominal` decimal(19,0) NOT NULL,
  `Keterangan` varchar(250) NOT NULL,
  `DateTransaction` datetime NOT NULL,
  `DateInput` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `t_closing`
--

DROP TABLE IF EXISTS `t_closing`;
CREATE TABLE IF NOT EXISTS `t_closing` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nominal` decimal(19,0) NOT NULL,
  `Keterangan` varchar(250) NOT NULL,
  `DateTransaction` datetime NOT NULL,
  `DateInput` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `t_expense`
--

DROP TABLE IF EXISTS `t_expense`;
CREATE TABLE IF NOT EXISTS `t_expense` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Category` int(11) NOT NULL,
  `ID_Budget` int(11) NOT NULL,
  `Nominal` decimal(19,0) NOT NULL,
  `Keterangan` varchar(250) NOT NULL,
  `DateTransaction` datetime NOT NULL,
  `DateInput` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `t_income`
--

DROP TABLE IF EXISTS `t_income`;
CREATE TABLE IF NOT EXISTS `t_income` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Category` int(11) NOT NULL,
  `Nominal` decimal(19,0) NOT NULL,
  `Keterangan` varchar(250) NOT NULL,
  `DateTransaction` datetime NOT NULL,
  `DateInput` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `t_income`
--

INSERT INTO `t_income` (`ID`, `ID_Category`, `Nominal`, `Keterangan`, `DateTransaction`, `DateInput`) VALUES
(1, 1, '4500000', '', '2014-05-16 00:00:00', '0000-00-00 00:00:00'),
(2, 2, '10000000', '', '2014-05-16 00:00:00', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
