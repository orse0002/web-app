-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 26, 2012 at 05:30 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `orse0002`
--

-- --------------------------------------------------------

--
-- Table structure for table `8ball`
--

CREATE TABLE IF NOT EXISTS `8ball` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `choices` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `8ball`
--

INSERT INTO `8ball` (`id`, `choices`) VALUES
(1, 'Better Luck Next Time'),
(2, 'I would say yes, but No'),
(3, 'No Means No... Too bad your mom didn''t know that'),
(4, 'Stupid question... Are you retard strong too?'),
(5, 'Are you a Jerk Face? Yes');
