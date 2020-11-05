-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 05, 2020 at 09:57 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

DROP TABLE IF EXISTS `assignments`;
CREATE TABLE IF NOT EXISTS `assignments` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL,
  `type` int(11) NOT NULL,
  `duedate` date NOT NULL,
  `authorid` int(11) NOT NULL,
  `classid` int(11) NOT NULL,
  `createdon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bookmarks`
--

DROP TABLE IF EXISTS `bookmarks`;
CREATE TABLE IF NOT EXISTS `bookmarks` (
  `id` int(11) NOT NULL,
  `description` varchar(150) NOT NULL,
  `contentid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

DROP TABLE IF EXISTS `classes`;
CREATE TABLE IF NOT EXISTS `classes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `classname` varchar(50) NOT NULL,
  `staffid` int(11) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `section` varchar(50) DEFAULT NULL,
  `Index` varchar(50) DEFAULT NULL,
  `code` varchar(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `classname`, `staffid`, `subject`, `section`, `Index`, `code`) VALUES
(1, 'Python CSE III Year', 1, 'Python Programming', 'A', '1', 'AS56T9');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
CREATE TABLE IF NOT EXISTS `departments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `deptname` varchar(50) NOT NULL,
  `deptcode` varchar(50) NOT NULL,
  `adminid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL,
  `title` int(11) NOT NULL,
  `description` int(11) NOT NULL,
  `date` date NOT NULL,
  `link` int(11) NOT NULL,
  `authorid` int(11) NOT NULL,
  `createdon` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `classid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` int(11) NOT NULL,
  `description` int(11) NOT NULL,
  `authorid` int(11) NOT NULL,
  `attachmentid` int(11) DEFAULT NULL,
  `type` int(11) NOT NULL,
  `quizid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

DROP TABLE IF EXISTS `staffs`;
CREATE TABLE IF NOT EXISTS `staffs` (
  `id` int(11) NOT NULL,
  `staffname` varchar(50) NOT NULL,
  `uid` int(11) NOT NULL,
  `totalsubjects` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `staffname`, `uid`, `totalsubjects`) VALUES
(1, 'Dhamodaran N', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `deptcode` varchar(50) NOT NULL,
  `year` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `rank` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `regno` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `todo`
--

DROP TABLE IF EXISTS `todo`;
CREATE TABLE IF NOT EXISTS `todo` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `assignmentid` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `role` (`role`),
  UNIQUE KEY `mail` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `email`, `role`, `password`, `created_at`) VALUES
(1, NULL, 'dhamodaran', NULL, NULL, '$2y$10$xVW9K4eRBLluBH2oktM2YOXUw2AseOoQxOtPESZY2vz.6gi73yjAG', '2020-11-05 01:21:03'),
(2, NULL, 'dhamo', NULL, NULL, '$2y$10$0GeUJ9qhJsrV00J5YfyvhOR5hJyfWVn2.feeRppVAK7mcQDRbeQb.', '2020-11-05 02:15:38'),
(3, 'Dhamodaran N', 'dhamodaran132', 'dhamodaran@outlook.in', NULL, '$2y$10$XifKdiAX2P4rlln8jRucCuwTTN6dDZ3dW4I3D9YCbdjhxYCFXsbbq', '2020-11-05 03:38:09'),
(4, 'Dhamodara N', 'dhamo1', 'dhamo.developer@gmail.com', NULL, '$2y$10$1xNCt6v5RrFPR6EzAtBkhuuwrzoVQqHQV3OvQqhWfuhUg5nsrJDJK', '2020-11-05 04:41:45');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
