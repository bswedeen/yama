-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 05, 2018 at 10:23 PM
-- Server version: 5.5.58-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `yama`
--

-- --------------------------------------------------------

--
-- Table structure for table `ActionsTracked`
--

CREATE TABLE IF NOT EXISTS `ActionsTracked` (
  `idActionsTracked` int(11) NOT NULL AUTO_INCREMENT,
  `Action` varchar(150) NOT NULL,
  `TimeofAction` datetime NOT NULL,
  `UseridUser` int(11) NOT NULL,
  PRIMARY KEY (`idActionsTracked`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ContactDetails`
--

CREATE TABLE IF NOT EXISTS `ContactDetails` (
  `idContactDetails` int(11) NOT NULL AUTO_INCREMENT,
  `Address1` varchar(45) NOT NULL,
  `Address2` varchar(45) NOT NULL,
  `Address3` varchar(45) NOT NULL,
  `Address4` varchar(45) NOT NULL,
  `Address5` varchar(45) NOT NULL,
  `TelephoneNumber` varchar(45) NOT NULL,
  `SupplieridSupplier` int(45) NOT NULL,
  PRIMARY KEY (`idContactDetails`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Item`
--

CREATE TABLE IF NOT EXISTS `Item` (
  `idItem` int(11) NOT NULL AUTO_INCREMENT,
  `itemDescription` varchar(45) NOT NULL,
  `itemColumn` varchar(45) NOT NULL,
  `dateAdded` date NOT NULL,
  `ReceiptidReceipt` int(11) NOT NULL,
  `SupplieridSupplier` int(11) NOT NULL,
  PRIMARY KEY (`idItem`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Location`
--

CREATE TABLE IF NOT EXISTS `Location` (
  `idLocation` int(11) NOT NULL AUTO_INCREMENT,
  `CollectionBoxNumber` int(11) NOT NULL,
  `CollectionName` varchar(100) NOT NULL,
  `StoragePositions` varchar(200) NOT NULL,
  `DisplayLocation` varchar(200) NOT NULL,
  `ItemidItem` int(11) NOT NULL,
  PRIMARY KEY (`idLocation`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Receipt`
--

CREATE TABLE IF NOT EXISTS `Receipt` (
  `idReceipt` int(11) NOT NULL AUTO_INCREMENT,
  `ReceiptNumber` int(11) NOT NULL,
  `OldReceiptNumber` int(11) NOT NULL,
  `NumberofItems` int(11) NOT NULL,
  `ReceiptPrefix` varchar(45) NOT NULL,
  `SortComplete` varchar(45) NOT NULL,
  `ReceiptAdded` datetime NOT NULL,
  `Notes` varchar(200) NOT NULL,
  `UseridUser` int(11) NOT NULL,
  PRIMARY KEY (`idReceipt`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Status`
--

CREATE TABLE IF NOT EXISTS `Status` (
  `idStatus` int(11) NOT NULL AUTO_INCREMENT,
  `LoanedorOwned` enum('Loaned','Owned') NOT NULL DEFAULT 'Owned',
  `LoanConditions` varchar(100) NOT NULL,
  `LoanEndDate` datetime NOT NULL,
  `ItemidItem` int(11) NOT NULL,
  PRIMARY KEY (`idStatus`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Supplier`
--

CREATE TABLE IF NOT EXISTS `Supplier` (
  `idSupplier` int(11) NOT NULL AUTO_INCREMENT,
  `DonorOrOwner` varchar(45) NOT NULL,
  `ForeName` varchar(45) NOT NULL,
  `SurName` varchar(45) NOT NULL,
  PRIMARY KEY (`idSupplier`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE IF NOT EXISTS `User` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `ForeName` varchar(45) NOT NULL,
  `SurName` varchar(45) NOT NULL,
  `Department` varchar(45) NOT NULL,
  `Catalouging` varchar(45) NOT NULL,
  `Assessments` varchar(45) NOT NULL,
  `Loans` varchar(45) NOT NULL,
  `Admins` varchar(45) NOT NULL,
  `UserPassword` varchar(45) NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`idUser`, `ForeName`, `SurName`, `Department`, `Catalouging`, `Assessments`, `Loans`, `Admins`, `UserPassword`) VALUES
(1, 'Greg', 'Swedeen', 'Information Systems', '', '', '', '', '1234qwer'),
(2, 'John', 'Doe', 'Sales', '', '', '', '', 'passw0rd'),
(6, 'Fred', 'Flintstone', 'Trash', '', '', '', '', 'mypassw0rd');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
