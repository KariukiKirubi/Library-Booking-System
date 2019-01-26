-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 03, 2016 at 01:50 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rental`
--
CREATE DATABASE `rental` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `rental`;

-- --------------------------------------------------------

--
-- Table structure for table `contestants`
--

CREATE TABLE IF NOT EXISTS `contestants` (
  `name` varchar(200) NOT NULL,
  `post` varchar(200) NOT NULL,
  `likes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contestants`
--

INSERT INTO `contestants` (`name`, `post`, `likes`) VALUES
('Justus', 'CHAIRPERSON', 0),
('JAMES', 'CHAIRPERSON', 0),
('KEVIN', 'SECRETARY', 0),
('JANE', 'SECRETARY', 0);

-- --------------------------------------------------------

--
-- Table structure for table `opinion`
--

CREATE TABLE IF NOT EXISTS `opinion` (
  `opinion` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `opinion`
--

INSERT INTO `opinion` (`opinion`) VALUES
('Eric should be the current president. wooooooooooooooooooooooooooo');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `id` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `house` varchar(200) NOT NULL,
  `code` varchar(200) NOT NULL,
  `approval` varchar(200) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`fname`, `lname`, `phone`, `email`, `id`, `gender`, `house`, `code`, `approval`) VALUES
('ERIC ', 'MWAMBI', '8748743487', 'eric@gmail.com', '7878', 'Male', 'Medium_Class', 'jkskddkdjdj', 'CONGRATULATIONS APPROVED'),
('erico', 'MWAMBI', '0702893379', 'erickmwa', '2345', 'Male', 'b', 'b', 'b'),
('kjkj', '', '', 'iiuiiu', '', '', 'b', 'b', 'b'),
('CON', 'KD', '3434', 'JI', '2332', 'Male', 'b', 'b', 'b'),
('JOB', 'MAKORI', '565656', 'job@gmail.com', '6767', 'Male', 'Medium_Class', 'MKJUGFDDSS', 'CONGRATULATIONS APPROVED'),
('JUSTUS', 'GISEMBA', '0700004679', 'jusyosh@gmail.com', '20166', 'Male', 'Medium_Class', 'JSJSJSJSJSJSSJ', 'CONGRATULATIONS APPROVED'),
('kevo', 'onyi', '5454', 'kevo@gmail.com', '3434', 'Male', 'b', 'b', 'b'),
('PETTY', 'MOKEIRA', '456766', 'petty@gmail.com', '5656', 'Female', 'High_Class', 'MSMSSJSJSJ', 'APPROVE');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `password` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`password`, `username`) VALUES
('admin', 'admin');
