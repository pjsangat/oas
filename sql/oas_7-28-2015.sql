-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 28, 2015 at 02:30 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
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
  `quantity` int(11) NOT NULL,
  `use_cost` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `equipments`
--

INSERT INTO `equipments` (`id`, `name`, `description`, `active`, `created_at`, `quantity`, `use_cost`) VALUES
(1, 'test equipment', '<p>\r\n	test equipment</p>\r\n', 1, '2015-07-23 08:50:40', 10, 234);

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
  `quantity` int(11) NOT NULL,
  `use_cost` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `furnitures`
--

INSERT INTO `furnitures` (`id`, `name`, `short_description`, `full_description`, `active`, `created_at`, `quantity`, `use_cost`) VALUES
(1, 'Communion Stand', '<p>\r\n	<span style="color: rgb(106, 106, 106); font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 20.7999992370605px; background-color: rgb(253, 244, 232);">Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient.</span></p>\r\n', '<p>\r\n	<span style="color: rgb(106, 106, 106); font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 20.7999992370605px; background-color: rgb(253, 244, 232);">Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient.</span><span style="color: rgb(106, 106, 106); font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 20.7999992370605px; background-color: rgb(253, 244, 232);">Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient.</span></p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	<span style="color: rgb(106, 106, 106); font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 20.7999992370605px; background-color: rgb(253, 244, 232);">Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient.</span><span style="color: rgb(106, 106, 106); font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 20.7999992370605px; background-color: rgb(253, 244, 232);">Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient.</span><span style="color: rgb(106, 106, 106); font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 20.7999992370605px; background-color: rgb(253, 244, 232);">Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient.</span></p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	<span style="color: rgb(106, 106, 106); font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 20.7999992370605px; background-color: rgb(253, 244, 232);">Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient.</span></p>\r\n', 1, '2015-07-19 22:54:55', 456, 234.55);

-- --------------------------------------------------------

--
-- Table structure for table `organization_groups`
--

CREATE TABLE IF NOT EXISTS `organization_groups` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(120) NOT NULL,
  `organization_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `organization_id` (`organization_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=152 ;

--
-- Dumping data for table `organization_groups`
--

INSERT INTO `organization_groups` (`id`, `group_name`, `organization_id`) VALUES
(1, 'AIESEC Ateneo de Manila', 2),
(2, 'Association for Communications Technology Management', 2),
(3, 'Ateneo Association of Communication Majors', 2),
(4, ' Ateneo Association of European Studies Students', 2),
(7, '  Ateneo Biological Organization - eXplore eXperience eXcel ', 2),
(8, '  Ateneo Blue Repertory ', 2),
(9, 'Ateneo Blue Symphony ', 2),
(10, 'Ateneo Catechetical Instruction League ', 2),
(11, 'Ateneo Celadon ', 2),
(12, 'Ateneo Chemistry Society ', 2),
(15, 'Ateneo Christian Life Community', 2),
(16, 'Ateneo College Ministry Group', 2),
(17, 'Ateneo Consultants for Organization Development and Empowerment', 2),
(18, 'Ateneo de Manila College Glee Club', 2),
(19, 'Ateneo Debate Society', 2),
(20, 'Ateneo Economics Association', 2),
(21, 'Ateneo Electronics and Computer Engineering Society', 2),
(22, 'Ateneo Environmental Science Society', 2),
(23, 'Ateneo Gabay', 2),
(24, 'Ateneo Junior Marketing Association', 2),
(25, 'Ateneo League of Physicists', 2),
(26, 'Ateneo Lex', 2),
(27, 'Ateneo Lingua Ars Cultura', 2),
(28, 'Ateneo Management Association', 2),
(29, 'Ateneo Management Economics Organization', 2),
(30, 'Ateneo Management Engineering Association', 2),
(31, 'Ateneo Management Information Systems Association', 2),
(32, 'Ateneo Management of Applied Chemistry Association', 2),
(33, 'Ateneo Mathematics Society', 2),
(34, 'Ateneo Musicians Pool', 2),
(35, 'Ateneo PEERS', 2),
(36, 'Ateneo Project for Asian and International Relations', 2),
(37, 'Ateneo Psyche', 2),
(38, 'Ateneo Special Education Society', 2),
(39, 'Ateneo Statistics Circle', 2),
(40, 'Ateneo Student Catholic Action', 2),
(41, 'Ateneo Student Exchange Council', 2),
(42, 'Collegiate Society of Advertising', 2),
(43, 'Company of Ateneo Dancers', 2),
(44, 'Computer Society of the Ateneo', 2),
(45, 'Development Society of the Ateneo de Manila University', 2),
(46, 'Enterteynment para sa Tao, Bayan, Lansangan at Diyos', 2),
(47, 'Kaingin', 2),
(48, 'Kythe-Ateneo', 2),
(49, 'Loyola Film Circle', 2),
(50, 'Loyola Mountaineers', 2),
(51, 'Musmos Organization', 2),
(52, 'Pre-Medical Society of the Ateneo', 2),
(53, 'Sanggunian ng mga Mag-aaral ng mga Paaralang Loyola ng Ateneo de Manila', 2),
(54, 'Tanghalang Ateneo', 2),
(55, 'The Ateneo Assembly', 2),
(56, 'Tugon', 2),
(57, 'Youth for Christ - Ateneo', 2),
(58, 'Ateneo Center for Asian Studies', 1),
(59, 'Ateneo Center for Economic Research and Development', 1),
(60, 'Ateneo Center for English Language Teaching', 1),
(61, 'Ateneo Center for Organization Research and Development', 1),
(62, 'Ateneo Center for Social Entrepreneurship', 1),
(63, 'Ateneo Innovation Center', 1),
(64, 'Ateneo Institute of Literary Arts and Practices', 1),
(65, 'Ateneo Java Wireless Competency Center', 1),
(66, 'Ateneo Language Learning Center', 1),
(67, 'Ateneo Teacher Center', 1),
(68, 'Business Resource Center', 1),
(69, 'Chinese Studies Program', 1),
(70, 'Communications Technology Management Program', 1),
(71, 'Confucius Institute', 1),
(72, 'Deapartment of Theology', 1),
(73, 'Department of  Sociology & Anthropology', 1),
(74, 'Department of Biology', 1),
(75, 'Department of Chemistry', 1),
(76, 'Department of Communication', 1),
(77, 'Department of Economics', 1),
(78, 'Department of Education', 1),
(79, 'Department of Electronics, Computer and Communications Engineering', 1),
(80, 'Department of English', 1),
(81, 'Department of Environmental Science', 1),
(82, 'Department of Filipino', 1),
(83, 'Department of Finance and Acounting', 1),
(84, 'Department of History', 1),
(85, 'Department of Information Systems and Computer Science', 1),
(88, 'Department of Interdisciplinary Studies', 1),
(89, 'Department of Leadership and Strategy', 1),
(90, 'Department of Marketing and Law', 1),
(91, 'Department of Mathematics', 1),
(92, 'Department of Modern Languages', 1),
(93, 'Department of Philosophy', 1),
(94, 'Department of Physics', 1),
(95, 'Department of Political Science', 1),
(96, 'Department of Psychology', 1),
(97, 'Department of Quantitative Methods and Information Technology', 1),
(98, 'Department of Theology', 1),
(99, 'Development Studies Program', 1),
(100, 'Eugenio Lopez Jr Center for Multimedia Communications', 1),
(101, 'European Studies Program', 1),
(102, 'Family Business Development Center', 1),
(103, 'Fine Arts Program', 1),
(104, 'Fr. Jaime C. Bulatao, SJ Center for Psychology Services', 1),
(105, 'Health Sciences Program', 1),
(106, 'Information Technology Entrepreneurship Program', 1),
(107, 'Innovation and Technology Support Office', 1),
(108, 'Institute of Philippine Culture', 1),
(109, 'Japanese Studies Program', 1),
(110, 'Konrad Adenauer Asian Center for Journalism', 1),
(111, 'Legal Management Program', 1),
(112, 'Loyola Schools Bookstore', 1),
(113, 'Management Engineering Program', 1),
(114, 'Management of Applied Chemistry Program', 1),
(115, 'Management Program', 1),
(116, 'Management-Honors Program', 1),
(117, 'Office of Administrative Services', 1),
(118, 'Office of Admission and Aid', 1),
(119, 'Office of Campus Ministry', 1),
(120, 'Office of College Athletics', 1),
(121, 'Office of Guidance & Counseling', 1),
(122, 'Office of Health Services', 1),
(123, 'Office of Management Information System', 1),
(124, 'Office of Placement', 1),
(125, 'Office of Social Concern and Involvement', 1),
(126, 'Office of Student Activities', 1),
(127, 'Office of the Associate Dean for Academic Affairs', 1),
(128, 'Office of the Associate Dean for Research and Creative Works', 1),
(129, 'Office of the Associate Dean for Student Affairs', 1),
(130, 'Office of the Dean, John Gokongwei School of Management', 1),
(131, 'Office of the Dean, School of Humanities', 1),
(132, 'Office of the Dean, School of Science and Engineering', 1),
(133, 'Office of the Dean, School of Social Sciences', 1),
(134, 'Office of the Registrar', 1),
(135, 'Office of the Vice President for the Loyola Schools', 1),
(136, 'Physical Education Program', 1),
(137, 'Residence Halls', 1),
(138, 'Ricardo Leong Center for Chinese Studies', 1),
(139, 'Rizal Library', 1),
(142, 'BI 5-A', 3),
(143, 'BI 5-B', 3),
(144, 'BI 5-C', 3),
(145, 'BI 5-D', 3),
(146, 'BI 6-A', 3),
(147, 'BI 6-B', 3),
(148, 'BI 6-C', 3),
(149, 'BI 6-D', 3),
(150, ' BI 7-A', 3),
(151, 'BI 7-B', 3);

-- --------------------------------------------------------

--
-- Table structure for table `organization_type`
--

CREATE TABLE IF NOT EXISTS `organization_type` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `organization_name` varchar(40) NOT NULL,
  `form` int(1) NOT NULL COMMENT '1 = long form 0 = short form',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `organization_type`
--

INSERT INTO `organization_type` (`id`, `organization_name`, `form`) VALUES
(1, 'Office/Department/Program/Centers', 1),
(2, 'Student Orgainzation', 0),
(3, 'Class', 1),
(4, 'Non-LS', 1);

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
