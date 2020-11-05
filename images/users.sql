-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 05, 2020 at 05:27 AM
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
