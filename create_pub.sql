-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2018 at 09:42 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tucir`
--

-- --------------------------------------------------------

--
-- Table structure for table `create_pub`
--

CREATE TABLE `create_pub` (
  `pub_id` int(50) NOT NULL,
  `pub_title` varchar(255) DEFAULT NULL,
  `pub_content` blob,
  `pub_author` varchar(150) NOT NULL,
  `pub_image_name` varchar(255) DEFAULT NULL,
  `pub_image_url` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `pub_date` varchar(255) DEFAULT NULL,
  `pub_type` varchar(100) DEFAULT NULL,
  `event_location` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `create_pub`
--
ALTER TABLE `create_pub`
  ADD PRIMARY KEY (`pub_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `create_pub`
--
ALTER TABLE `create_pub`
  MODIFY `pub_id` int(50) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
