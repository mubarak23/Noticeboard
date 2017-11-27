-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2017 at 05:25 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `noticeboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(10) NOT NULL,
  `admin_username` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_prev` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`, `admin_email`, `admin_prev`) VALUES
(1, 'admin23', 'pass123', 'admin@gmail.com', 1),
(2, 'admin123', 'pass123', '', 1),
(3, 'superadmin', 'pass123', 'superadmin@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `discussions`
--

CREATE TABLE IF NOT EXISTS `discussions` (
  `ds_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `ds_title` varchar(200) NOT NULL,
  `ds_body` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discussions`
--

INSERT INTO `discussions` (`ds_id`, `user_id`, `ds_title`, `ds_body`) VALUES
(1, 2, 'The Source of Personal Power', 'There is a direct relationship between self-discipline and self-esteem. The more\r\nyou discipline yourself to behave in the manner that you have decided, the more\r\nyou like and respect yourself. The more positive and confident you will feel. The\r\nstronger and more in charge of your life and situation you become.'),
(2, 2, 'Become A Lifelong Optimist', 'Perhaps the most helpful mental habit you can develop is the habit of optimism.\r\nOptimists are usually the happiest, healthiest, most successful and most influential\r\npeople in every group and society. According to Dr. Martin Seligman, in his book\r\nLearned Optimism, people learn to become optimists by thinking the way that');

-- --------------------------------------------------------

--
-- Table structure for table `noticeboard`
--

CREATE TABLE IF NOT EXISTS `noticeboard` (
  `notice_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `status_id` int(100) NOT NULL,
  `notice_title` varchar(200) NOT NULL,
  `notice_from` varchar(200) NOT NULL,
  `notice_to` varchar(200) NOT NULL,
  `notice_details` text NOT NULL,
  `notice_img` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `noticeboard`
--

INSERT INTO `noticeboard` (`notice_id`, `user_id`, `status_id`, `notice_title`, `notice_from`, `notice_to`, `notice_details`, `notice_img`) VALUES
(1, 1, 1, 'New Academic Calender ', 'Test Test Admin', 'Student', 'New Academic Calender New Academic Calender \r\nNew Academic Calender \r\nNew Academic Calender ', ''),
(2, 1, 3, 'Heading  Heading  Heading  Heading', 'Dean', 'General Student', 'Heading  Heading  Heading Heading  Heading Heading  Heading', ''),
(3, 3, 3, 'Product and Service Description', 'Enterpreunership Center(EEP)', 'Level Four Student', 'A sample of our compost has been analyzed by the West Virginia University Agricultural Service Laboratory. A copy of their analysis is attached to this business', '');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE IF NOT EXISTS `replies` (
  `reply_id` int(100) NOT NULL,
  `ds_id` int(100) NOT NULL,
  `ds_title` varchar(200) NOT NULL,
  `user_id` int(100) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`reply_id`, `ds_id`, `ds_title`, `user_id`, `comment`) VALUES
(1, 1, '', 2, 'Comment'),
(4, 2, '', 2, 'comment comment comment comment comment comment'),
(5, 1, 'The Source of Personal Power', 2, 'comment comment comment comment'),
(6, 1, 'The Source of Personal Power', 2, 'this is another comment'),
(7, 2, 'Become A Lifelong Optimist', 2, 'Dr. Martin Seligman, in his book Learned Optimism, people learn to become optimists by thinking the way that');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `status_id` int(100) NOT NULL,
  `mode` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_id`, `mode`) VALUES
(1, 'Qiuck'),
(2, 'Warning'),
(3, 'Normal');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `reg_no` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `reg_no`, `email`, `username`, `password`) VALUES
(1, 'Mubarak', 'Aminu', '', 'mubarakaminu340@gmail.com', 'mubarak23', 'pass123'),
(2, 'Cyber', 'Cyber', 'CIT/14/COM/0011', 'cyber@gmail.com', 'cyber123', 'pass123'),
(3, 'Tunde', 'Umar', 'FES/14/GEO/00111', 'tundeumar@gmail.com', 'tunde23', 'pass123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `discussions`
--
ALTER TABLE `discussions`
  ADD PRIMARY KEY (`ds_id`);

--
-- Indexes for table `noticeboard`
--
ALTER TABLE `noticeboard`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`reply_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `discussions`
--
ALTER TABLE `discussions`
  MODIFY `ds_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `noticeboard`
--
ALTER TABLE `noticeboard`
  MODIFY `notice_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `reply_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `status_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
