-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 21, 2016 at 01:22 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `size`, `type`, `url`, `title`, `description`, `date`) VALUES
(14, 'ERtshBF.jpg', 274633, 'image/jpeg', NULL, 'DARKNESS', 'asdasd', '2016-05-21 12:18:38'),
(16, 'lucifer.dels_1445350270_2.jpg', 153399, 'image/jpeg', NULL, 'FALLS', 'INTO', '2016-05-21 12:29:36');
