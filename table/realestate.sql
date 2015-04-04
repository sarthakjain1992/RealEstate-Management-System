-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 27, 2014 at 11:18 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `realestate`
--

-- --------------------------------------------------------

--
-- Table structure for table `advancedetails`
--

CREATE TABLE IF NOT EXISTS `advancedetails` (
  `username` varchar(50) NOT NULL,
  `category` varchar(40) NOT NULL,
  `subcategory` varchar(40) NOT NULL,
  `property` varchar(40) NOT NULL,
  `location` varchar(40) NOT NULL,
  `ownername` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact` varchar(13) NOT NULL,
  `area` varchar(15) NOT NULL,
  `price` varchar(15) NOT NULL,
  `date` varchar(13) NOT NULL,
  `address` varchar(50) NOT NULL,
  `sellbuy` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advancedetails`
--

INSERT INTO `advancedetails` (`username`, `category`, `subcategory`, `property`, `location`, `ownername`, `email`, `contact`, `area`, `price`, `date`, `address`, `sellbuy`) VALUES
('ajaykedia1992', 'Agriculture', 'Factory', 'Rent', 'Assam', 'Ajay Kedia', 'ajaykedia2011@gmail.com', '+919092489091', '10000', '100000000', '26/06/1993', 'dwrer', 'Sold'),
('ajaykedia1992', 'Agriculture', 'Factory', 'Rent', 'Assam', 'Ankit Adarsh', 'ajaykedia1992@gmail.com', '919092489091', '2000', '1900234', '22/12/2014', 'A-417 men;s hostel VIT University Vellore', 'On Sell'),
('ajaykedia1992', 'Industrial', 'Farm', 'Rent', 'Assam', 'Ankit Adarsh', 'ajaykedia1992@gmail.com', '919092489091', '2000', '1900234', '22/12/2014', 'A-417 men;s hostel VIT University Vellore', 'On Sell'),
('ajaykedia', 'Agriculture', 'Factory', 'Buy', 'Gujarat', 'Anil Ambani', 'nimeshgoyal1992@gmail.com', '+919024412111', '5554', '2100000', '22/12/2014', 'sdfrtiuo', 'sold'),
('ajaykedia', 'Agriculture', 'Factory', 'Buy', 'Goa', 'Anil Ambani', 'nimeshgoyal1992@gmail.com', '+919024412111', '5554', '1900234', '12/07/2013', 'shfoghsdlnfl;shfo', 'sold'),
('ajaykedia', 'Residential', 'Factory', 'Purchase', 'Arunachal Pradesh', 'Manish Pandey', 'manish_pandey21@yahoo.com', '9680434379', '6750', '90 lacs', '22/12/2014', 'Andhra colorny, Flat no.23, Chandni chok, Mumbai (', 'sold');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `username` varchar(30) NOT NULL,
  `mobile` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`username`, `mobile`) VALUES
('ajaykedia1992', '919092489091'),
('ajaykedia1992', '919092489091'),
('ajaykedia1992', '919092489091'),
('ajaykedia1992', '919092489091'),
('ajaykedia1992', '919092489091'),
('ajaykedia1992', '919092489091'),
('ajaykedia1992', '919092489091'),
('ajaykedia1992', '919092489091'),
('ajaykedia1992', '919092489091'),
('ajaykedia1992', '919092489091'),
('ajaykedia1992', '919092489091'),
('ajaykedia1992', '919092489091'),
('ajaykedia1992', '919092489091'),
('ajaykedia1992', '919092489091'),
('ajaykedia1992', '9024412111'),
('ajaykedia1992', '9493024412'),
('ajaykedia1992', '+919024412111'),
('ajaykedia1992', '+918888888888'),
('ajaykedia1992', '+919092489091'),
('ajaykedia1992', '+919092489091'),
('ajaykedia1992', '+919024412111'),
('ajaykedia1992', '9092489091'),
('ajaykedia1992', '9092489091'),
('ajaykedia', '9024412111'),
('ajaykedia', '9024412111'),
('ajaykedia', '+9155555555'),
('ajaykedia', '9092489091'),
('ajaykedia', '9092489091'),
('ajaykedia', '+919024412111'),
('ajaykedia', '+919024412111'),
('ajaykedia', '+919024412111'),
('ajaykedia', '+919024412111'),
('ajaykedia', '+919024412111'),
('ajaykedia', '+919024412111'),
('ajaykedia', '9680434379'),
('ajaykedia', '+919024412111'),
('ajaykedia', '+919024412111');

-- --------------------------------------------------------

--
-- Table structure for table `feature`
--

CREATE TABLE IF NOT EXISTS `feature` (
  `username` varchar(11) NOT NULL,
  `prop_name` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feature`
--

INSERT INTO `feature` (`username`, `prop_name`) VALUES
('0', '0'),
('0', '0'),
('0', '0'),
('0', '0'),
('0', '0'),
('0', '0'),
('0', '0'),
('0', '0'),
('0', '0'),
('0', '0'),
('0', '0'),
('0', '0'),
('0', '0'),
('0', '0'),
('0', '0'),
('0', '0'),
('0', '0'),
('0', '0'),
('0', '0'),
('0', '0'),
('0', '0'),
('0', '0'),
('0', '0'),
('0', '0'),
('0', '0'),
('0', '0'),
('0', '0'),
('0', '0'),
('ajaykedia', 'Purchase'),
('ajaykedia', 'Purchase'),
('ajaykedia', 'Purchase'),
('ajaykedia', 'Purchase'),
('ajaykedia', 'Purchase'),
('ajaykedia', 'Buy'),
('ajaykedia', 'Buy'),
('ajaykedia', 'Buy'),
('ajaykedia', 'Purchase'),
('ajaykedia', 'Buy'),
('ajaykedia', 'Buy');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `username` varchar(50) NOT NULL,
  `state` varchar(30) NOT NULL,
  `district` varchar(40) NOT NULL,
  `location` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`username`, `state`, `district`, `location`) VALUES
('ajaykedia1992', 'Tamil Nadu', 'jaipur', 'ajmer'),
('ajaykedia1992', 'Rajasthan', 'jaipur', 'ajmer'),
('ajaykedia1992', 'Assam', 'jaipur', 'ludhiyana'),
('ajaykedia1992', 'Rajasthan', 'jodhpur', 'Bikaner'),
('ajaykedia1992', 'Assam', 'dad', 'adasd'),
('ajaykedia1992', 'Rajasthan', 'jodhpur', 'Bikaner'),
('ajaykedia1992', 'Arunachal Pradesh', 'jodhpur', 'ajmer'),
('ajaykedia', 'Goa', 'jodhpur', 'Bikaner'),
('ajaykedia', 'Sikkim', 'manipur', 'mirzapur'),
('ajaykedia', 'Andhra Pradesh', 'hyderabad', 'PC block');

-- --------------------------------------------------------

--
-- Table structure for table `notregister`
--

CREATE TABLE IF NOT EXISTS `notregister` (
  `user_id` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(13) NOT NULL,
  `address` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `notregister`
--

INSERT INTO `notregister` (`user_id`, `username`, `password`, `email`, `contact`, `address`) VALUES
(1, 'ajaykedia1992', 'asd', 'ajaykedia1992@gmail.com', '+919092489091', 'A-418 VIT University\r\n'),
(2, 'ajaykedia', 'abc', 'ajaykedia1992@gmail.com', '+919024412111', 'ndalfl'),
(3, 'akshay', 'abc', 'ajaykedia192@gmail.com', '+919092489091', 'sfjf');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE IF NOT EXISTS `property` (
  `username` varchar(30) NOT NULL,
  `property` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`username`, `property`) VALUES
('ajaykedia1992', 'Industrial'),
('ajaykedia1992', 'Industrial'),
('ajaykedia1992', 'Industrial'),
('ajaykedia1992', 'Industrial'),
('ajaykedia1992', 'Industrial'),
('ajaykedia1992', 'Industrial'),
('ajaykedia1992', 'Industrial'),
('ajaykedia1992', 'Industrial'),
('ajaykedia1992', 'Industrial'),
('ajaykedia1992', 'Industrial'),
('ajaykedia1992', 'Industrial'),
('ajaykedia1992', 'Industrial'),
('ajaykedia1992', 'Industrial'),
('ajaykedia1992', 'Industrial'),
('ajaykedia1992', 'Agriculture'),
('ajaykedia1992', 'Industrial'),
('ajaykedia1992', 'Residential'),
('ajaykedia1992', 'Residential'),
('ajaykedia1992', 'Residential'),
('ajaykedia1992', 'Residential'),
('ajaykedia1992', 'Residential'),
('ajaykedia1992', 'Residential'),
('ajaykedia1992', 'Residential'),
('ajaykedia1992', 'Residential'),
('ajaykedia1992', 'Industrial'),
('ajaykedia', 'Industrial'),
('ajaykedia', 'Residential'),
('ajaykedia', 'Industrial'),
('ajaykedia', 'Residential'),
('ajaykedia', 'Residential'),
('ajaykedia', 'Agriculture'),
('ajaykedia', 'Agriculture'),
('ajaykedia', 'Agriculture'),
('ajaykedia', 'Agriculture'),
('ajaykedia', 'Agriculture'),
('ajaykedia', 'Agriculture'),
('ajaykedia', 'Residential'),
('ajaykedia', 'Agriculture'),
('ajaykedia', 'Agriculture');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE IF NOT EXISTS `query` (
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `query` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`name`, `email`, `query`) VALUES
('Ajay kedia', 'ajaykedia1992@gmail.com', 'hey can u give me more details about this land.\r\n'),
('Rahul', 'rahulkhanna@gmail.com', 'shf,hasklf'),
('Rahul', 'rahulkhanna@gmail.com', 'shf,hasklf'),
('Ajay kedia', 'ajaykedia1992@gmail.com', 'Thnku'),
('Sarthak', 'seemangupta1992@gmail.com', 'Excellent');

-- --------------------------------------------------------

--
-- Table structure for table `subproperty`
--

CREATE TABLE IF NOT EXISTS `subproperty` (
  `username` varchar(30) NOT NULL,
  `sub` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subproperty`
--

INSERT INTO `subproperty` (`username`, `sub`) VALUES
('ajaykedia1992', 'Farm'),
('ajaykedia1992', 'Farm'),
('ajaykedia1992', 'Farm'),
('ajaykedia1992', 'Farm'),
('ajaykedia1992', 'Farm'),
('ajaykedia1992', 'Farm'),
('ajaykedia1992', 'Farm'),
('ajaykedia1992', 'Farm'),
('ajaykedia1992', 'Farm'),
('ajaykedia1992', 'Farm'),
('ajaykedia1992', 'Farm'),
('ajaykedia1992', 'Farm'),
('ajaykedia1992', 'Farm'),
('ajaykedia1992', 'Farm'),
('ajaykedia1992', 'Factory'),
('ajaykedia1992', 'Buildings'),
('ajaykedia1992', 'Factory'),
('ajaykedia1992', 'Factory'),
('ajaykedia1992', 'Buildings'),
('ajaykedia1992', 'Buildings'),
('ajaykedia1992', 'Industry'),
('ajaykedia1992', 'Industry'),
('ajaykedia1992', 'Factory'),
('ajaykedia', 'Farm'),
('ajaykedia', 'Factory'),
('ajaykedia', 'Factory'),
('ajaykedia', 'Factory'),
('ajaykedia', 'Factory'),
('ajaykedia', 'Factory'),
('ajaykedia', 'Factory'),
('ajaykedia', 'Factory'),
('ajaykedia', 'Factory'),
('ajaykedia', 'Factory'),
('ajaykedia', 'Factory'),
('ajaykedia', 'Factory'),
('ajaykedia', 'Factory'),
('ajaykedia', 'Factory');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
