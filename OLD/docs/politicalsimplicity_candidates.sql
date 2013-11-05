-- phpMyAdmin SQL Dump
-- version 3.3.10.4
-- http://www.phpmyadmin.net
--
-- Host: candidates.politicalsimplicity.com
-- Generation Time: Oct 11, 2013 at 01:02 PM
-- Server version: 5.1.56
-- PHP Version: 5.3.27

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `politicalsimplicity_candidates`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE IF NOT EXISTS `candidates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(128) NOT NULL,
  `middle_name` varchar(128) NOT NULL,
  `last_name` varchar(128) NOT NULL,
  `personal_id` int(11) NOT NULL,
  `position_runningFor_id` int(11) NOT NULL,
  `views_id` int(11) NOT NULL,
  `positions_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_candidates_personal1_idx` (`personal_id`),
  KEY `fk_candidates_position_runningFor1_idx` (`position_runningFor_id`),
  KEY `fk_candidates_views1_idx` (`views_id`),
  KEY `fk_candidates_positions1_idx` (`positions_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `candidates`
--


-- --------------------------------------------------------

--
-- Table structure for table `personal_information`
--

CREATE TABLE IF NOT EXISTS `personal_information` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gender` varchar(45) NOT NULL,
  `birth_date` date DEFAULT NULL,
  `birth_state` varchar(128) NOT NULL,
  `party` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `personal_information`
--


-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE IF NOT EXISTS `positions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `term_start` date NOT NULL,
  `term_end` date DEFAULT NULL,
  `status` enum('Current','Previous','Running_For') NOT NULL DEFAULT 'Previous',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `positions`
--


-- --------------------------------------------------------

--
-- Table structure for table `position_running_for`
--

CREATE TABLE IF NOT EXISTS `position_running_for` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `state` varchar(45) NOT NULL,
  `term_start` date DEFAULT NULL,
  `term_end` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `position_running_for`
--


-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

CREATE TABLE IF NOT EXISTS `table1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `table1`
--


-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE IF NOT EXISTS `views` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `simple` varchar(60) NOT NULL,
  `detail` text,
  `links` varchar(45) DEFAULT NULL,
  `views_type_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_views_views_type1_idx` (`views_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `views`
--


-- --------------------------------------------------------

--
-- Table structure for table `views_type`
--

CREATE TABLE IF NOT EXISTS `views_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `views_type`
--


--
-- Constraints for dumped tables
--

--
-- Constraints for table `candidates`
--
ALTER TABLE `candidates`
  ADD CONSTRAINT `fk_candidates_personal1` FOREIGN KEY (`personal_id`) REFERENCES `personal_information` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_candidates_position_runningFor1` FOREIGN KEY (`position_runningFor_id`) REFERENCES `position_running_for` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_candidates_views1` FOREIGN KEY (`views_id`) REFERENCES `views` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_candidates_positions1` FOREIGN KEY (`positions_id`) REFERENCES `positions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `views`
--
ALTER TABLE `views`
  ADD CONSTRAINT `fk_views_views_type1` FOREIGN KEY (`views_type_id`) REFERENCES `views_type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
