-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 11, 2013 at 08:09 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `politicalsimplicity_candidates`
--
CREATE DATABASE IF NOT EXISTS `politicalsimplicity_candidates` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `politicalsimplicity_candidates`;

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE IF NOT EXISTS `candidates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(128) NOT NULL,
  `middle_name` varchar(128) NOT NULL,
  `last_name` varchar(128) NOT NULL,
  `image` longblob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `first_name`, `middle_name`, `last_name`, `image`) VALUES
(1, 'Grant', 'Colbrun', 'Spence', NULL),
(2, 'Test2', 'Middle', 'Last', NULL);

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
  `candidates_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_personal_information_candidates1_idx` (`candidates_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `personal_information`
--

INSERT INTO `personal_information` (`id`, `gender`, `birth_date`, `birth_state`, `party`, `candidates_id`) VALUES
(4, 'male', '2013-11-13', 'Virginia', 'Rep', 1),
(5, 'male', '5151-02-01', 'AZ', 'Ind', 2);

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
  `candidates_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_positions_candidates1_idx` (`candidates_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `title`, `term_start`, `term_end`, `status`, `candidates_id`) VALUES
(1, 'askdlj', '0001-12-05', '0545-05-04', 'Current', 2);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`) VALUES
(1, 'login', 'Login privileges, granted after account confirmation'),
(2, 'admin', 'Administrative user, has access to everything.');

-- --------------------------------------------------------

--
-- Table structure for table `roles_users`
--

CREATE TABLE IF NOT EXISTS `roles_users` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `fk_role_id` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(127) NOT NULL,
  `username` varchar(32) NOT NULL DEFAULT '',
  `password` varchar(64) NOT NULL,
  `logins` int(10) unsigned NOT NULL DEFAULT '0',
  `last_login` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_username` (`username`),
  UNIQUE KEY `uniq_email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_tokens`
--

CREATE TABLE IF NOT EXISTS `user_tokens` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `user_agent` varchar(40) NOT NULL,
  `token` varchar(40) NOT NULL,
  `type` varchar(100) NOT NULL,
  `created` int(10) unsigned NOT NULL,
  `expires` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_token` (`token`),
  KEY `fk_user_id` (`user_id`),
  KEY `expires` (`expires`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE IF NOT EXISTS `views` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `simple` varchar(60) NOT NULL,
  `detail` text,
  `links` varchar(1000) DEFAULT NULL,
  `views_type_id` int(11) NOT NULL,
  `candidates_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_views_views_type1_idx` (`views_type_id`),
  KEY `fk_views_candidates1_idx` (`candidates_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
-- Constraints for dumped tables
--

--
-- Constraints for table `personal_information`
--
ALTER TABLE `personal_information`
  ADD CONSTRAINT `fk_personal_information_candidates1` FOREIGN KEY (`candidates_id`) REFERENCES `candidates` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `positions`
--
ALTER TABLE `positions`
  ADD CONSTRAINT `fk_positions_candidates1` FOREIGN KEY (`candidates_id`) REFERENCES `candidates` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `roles_users`
--
ALTER TABLE `roles_users`
  ADD CONSTRAINT `roles_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `roles_users_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `views`
--
ALTER TABLE `views`
  ADD CONSTRAINT `fk_views_views_type1` FOREIGN KEY (`views_type_id`) REFERENCES `views_type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_views_candidates1` FOREIGN KEY (`candidates_id`) REFERENCES `candidates` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
