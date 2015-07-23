-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2015 at 11:53 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `oas`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE IF NOT EXISTS `about_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(12) NOT NULL,
  `content` text NOT NULL,
  `updatewhen` datetime NOT NULL,
  `updatewho` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `backend_users`
--

CREATE TABLE IF NOT EXISTS `backend_users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `role` enum('admin','staff') NOT NULL DEFAULT 'staff',
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(50) DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `backend_users`
--

INSERT INTO `backend_users` (`id`, `role`, `username`, `password`, `full_name`, `active`, `created_at`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 1, '2014-07-31 04:56:41'),
(2, 'staff', 'staff', '1253208465b1efa876f982d8a9e73eef', 'Staff', 1, '2014-08-11 10:10:37');

-- --------------------------------------------------------

--
-- Table structure for table `buildings`
--

CREATE TABLE IF NOT EXISTS `buildings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `active` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `buildings`
--

INSERT INTO `buildings` (`id`, `name`, `description`, `active`, `created_at`) VALUES
(1, 'test building', '<p>\r\n	test building</p>\r\n', 1, '2015-07-23 08:49:47');

-- --------------------------------------------------------

--
-- Table structure for table `classrooms`
--

CREATE TABLE IF NOT EXISTS `classrooms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `short description` mediumtext NOT NULL,
  `full description` longtext NOT NULL,
  `active` tinyint(1) unsigned DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `classrooms`
--

INSERT INTO `classrooms` (`id`, `name`, `short description`, `full description`, `active`, `created_at`) VALUES
(1, 'Berchman 102', '', '', 1, '2015-07-19 22:51:04');

-- --------------------------------------------------------

--
-- Table structure for table `directories`
--

CREATE TABLE IF NOT EXISTS `directories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `display_name` varchar(256) NOT NULL,
  `department` varchar(32) NOT NULL,
  `hall_name` varchar(64) NOT NULL,
  `position` varchar(128) NOT NULL,
  `local` varchar(16) NOT NULL,
  `telefax` varchar(32) NOT NULL,
  `email` varchar(128) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `active` tinyint(1) unsigned DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `directories`
--

INSERT INTO `directories` (`id`, `display_name`, `department`, `hall_name`, `position`, `local`, `telefax`, `email`, `created_by`, `created_at`, `updated_by`, `updated_at`, `active`) VALUES
(1, 'Ms. Marie Joy R. Salita', 'OAS', 'Gonzaga Hall', 'Director', '51001', '426-5666', 'msalita@ateneo.edu', 0, '2015-07-19 22:43:08', 0, '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `equipments`
--

CREATE TABLE IF NOT EXISTS `equipments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `active` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `equipments`
--

INSERT INTO `equipments` (`id`, `name`, `description`, `active`, `created_at`) VALUES
(1, 'test equipment', '<p>\r\n	test equipment</p>\r\n', 1, '2015-07-23 08:50:40');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE IF NOT EXISTS `facilities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `active` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `name`, `description`, `active`, `created_at`) VALUES
(1, 'test facilitiy', '<p>\r\n	test facilitiy</p>\r\n', 1, '2015-07-23 08:49:28');

-- --------------------------------------------------------

--
-- Table structure for table `furnitures`
--

CREATE TABLE IF NOT EXISTS `furnitures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `short_description` mediumtext NOT NULL,
  `full_description` longtext NOT NULL,
  `active` tinyint(1) unsigned DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `furnitures`
--

INSERT INTO `furnitures` (`id`, `name`, `short_description`, `full_description`, `active`, `created_at`) VALUES
(1, 'Communion Stand', '<p>\r\n	<span style="color: rgb(106, 106, 106); font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 20.7999992370605px; background-color: rgb(253, 244, 232);">Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient.</span></p>\r\n', '<p>\r\n	<span style="color: rgb(106, 106, 106); font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 20.7999992370605px; background-color: rgb(253, 244, 232);">Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient.</span><span style="color: rgb(106, 106, 106); font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 20.7999992370605px; background-color: rgb(253, 244, 232);">Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient.</span></p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	<span style="color: rgb(106, 106, 106); font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 20.7999992370605px; background-color: rgb(253, 244, 232);">Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient.</span><span style="color: rgb(106, 106, 106); font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 20.7999992370605px; background-color: rgb(253, 244, 232);">Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient.</span><span style="color: rgb(106, 106, 106); font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 20.7999992370605px; background-color: rgb(253, 244, 232);">Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient.</span></p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	<span style="color: rgb(106, 106, 106); font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 20.7999992370605px; background-color: rgb(253, 244, 232);">Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient.</span></p>\r\n', 1, '2015-07-19 22:54:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `role` enum('member') NOT NULL DEFAULT 'member',
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `activation_code` varchar(32) DEFAULT NULL,
  `forgot_password_code` varchar(32) DEFAULT NULL,
  `forgot_password_time` timestamp NULL DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `email`, `password`, `first_name`, `last_name`, `activation_code`, `forgot_password_code`, `forgot_password_time`, `active`, `created_at`) VALUES
(3, 'member', 'pjsangat@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'test', 'test', 'ecfdfa3965a2e34da5c4bb3c878ae151', NULL, NULL, 1, '2015-07-23 04:08:46');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
