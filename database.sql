-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 26, 2016 at 07:35 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `librarys`
--
CREATE DATABASE `librarys` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `librarys`;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `title` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`title`, `type`) VALUES
('PROGRAMMING IN BIG BY DOCTOR WHO', 'computing');

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
('JUSTUS', 'GISEMBA', '0700004679', 'jusyosh@gmail.com', 'IN14/20166/12', 'Male', 'PROGRAMMING IN BIG BY DOCTOR WHO', 'b', 'APPROVED');

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
