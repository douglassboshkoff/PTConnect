-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2014 at 10:42 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pt_connect`
--
CREATE DATABASE IF NOT EXISTS `pt_connect` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pt_connect`;

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `pt_grad_year` int(11) NOT NULL,
  `bio` varchar(200) NOT NULL,
  `password` varchar(45) NOT NULL,
  `image_link` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `first_name`, `last_name`, `email`, `pt_grad_year`, `bio`, `password`, `image_link`) VALUES
(1, 'matthew', 'muhoberac', 'mmuhoberac@parktudor.org', 2015, 'this is a bio', 'pass', ''),
(2, 'ruben', 'schuckit', 'rschuckit@parktudor.org', 2014, 'this is a bio', 'pass', '');

-- --------------------------------------------------------

--
-- Table structure for table `concentration`
--

CREATE TABLE IF NOT EXISTS `concentration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `major_minor` int(11) NOT NULL,
  `universities_id` int(11) NOT NULL,
  `accounts_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `concentration`
--

INSERT INTO `concentration` (`id`, `name`, `major_minor`, `universities_id`, `accounts_id`) VALUES
(1, 'Computer Science', 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE IF NOT EXISTS `experiences` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(45) NOT NULL,
  `title` varchar(45) NOT NULL,
  `content` varchar(200) NOT NULL,
  `accounts_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `type`, `title`, `content`, `accounts_id`) VALUES
(1, 'work', 'bleep', 'nuthin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE IF NOT EXISTS `queries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`id`, `question`) VALUES
(1, 'who are the kites?');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) NOT NULL,
  `response` varchar(200) NOT NULL,
  `university_id` int(11) NOT NULL,
  `accounts_id` int(11) NOT NULL,
  `queries_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question_id`, `response`, `university_id`, `accounts_id`, `queries_id`) VALUES
(1, 0, '1', 1, 1, 0),
(2, 2, 'This is a test', 2, 2, 0),
(3, 1, 'This is a test', 2, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `universities`
--

CREATE TABLE IF NOT EXISTS `universities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `location` varchar(45) NOT NULL,
  `image_link` varchar(45) NOT NULL,
  `public/private` int(11) NOT NULL,
  `graduated` int(11) DEFAULT NULL,
  `attended` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `universities`
--

INSERT INTO `universities` (`id`, `name`, `location`, `image_link`, `public/private`, `graduated`, `attended`) VALUES
(1, 'Purdue', 'Lafayette, IN', 'test...', 0, NULL, NULL),
(2, 'Harvard', 'Cambridge, MA', 'https://ddd', 0, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
