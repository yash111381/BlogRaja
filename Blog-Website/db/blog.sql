-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2015 at 07:51 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogger`
--

CREATE TABLE IF NOT EXISTS `blogger` (
`id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_active` enum('a','i') NOT NULL DEFAULT 'i',
  `update_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `end_date` datetime NOT NULL,
  `email` varchar(255) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `blogger`
--

INSERT INTO `blogger` (`id`, `username`, `password`, `create_date`, `is_active`, `update_date`, `end_date`, `email`, `photo`) VALUES
(4, 'sdasd', 'sss', '2015-08-31 09:13:37', 'i', '2015-08-31 09:13:37', '0000-00-00 00:00:00', 'dfaf@fdgdf.kk', ''),
(5, 'sdasd', 'sss', '2015-08-31 09:15:24', 'i', '2015-08-31 09:15:24', '0000-00-00 00:00:00', 'dfaf@fdgdf.kk', ''),
(6, 'sdasd', 'sss', '2015-08-31 09:15:42', 'i', '2015-08-31 09:15:42', '0000-00-00 00:00:00', 'dfaf@fdgdf.kk', ''),
(7, 'sdsf', 'aaa', '2015-08-31 09:15:53', 'i', '2015-08-31 09:15:53', '0000-00-00 00:00:00', 'afaf@sgs.gg', ''),
(8, 'sdsf', 'aaa', '2015-08-31 09:18:58', 'i', '2015-08-31 09:18:58', '0000-00-00 00:00:00', 'afaf@sgs.gg', ''),
(9, 'sdsf', 'aaa', '2015-08-31 09:19:41', 'i', '2015-08-31 09:19:41', '0000-00-00 00:00:00', 'afaf@sgs.gg', ''),
(10, 'sdsf', 'aaa', '2015-08-31 09:22:40', 'i', '2015-08-31 09:22:40', '0000-00-00 00:00:00', 'afaf@sgs.gg', ''),
(11, 'John', 'Doe', '2015-08-31 11:45:33', 'i', '2015-08-31 11:45:33', '0000-00-00 00:00:00', 'john@example.com', ''),
(12, 'JKKhn', 'adfas', '2015-08-31 11:47:15', 'i', '2015-08-31 11:47:15', '0000-00-00 00:00:00', 'john@example.com', ''),
(13, 'sadasd', 'aaa', '2015-08-31 17:36:35', 'i', '2015-08-31 17:36:35', '0000-00-00 00:00:00', 'sadasd@dgdfg.gs', ''),
(14, 'sadasd', 'aaa', '2015-08-31 17:36:40', 'i', '2015-08-31 17:36:40', '0000-00-00 00:00:00', 'sadasd@dgdfg.gs', ''),
(15, 'sadasdadaasd', 'aaa', '2015-08-31 17:37:12', 'i', '2015-08-31 17:37:12', '0000-00-00 00:00:00', 'abjashdkh@fsdk.com', ''),
(16, 'sadasdadaasd', 'aaa', '2015-08-31 17:37:15', 'i', '2015-08-31 17:37:15', '0000-00-00 00:00:00', 'abjashdkh@fsdk.com', ''),
(17, 'as', 'aaa', '2015-08-31 17:37:40', 'i', '2015-08-31 17:37:40', '0000-00-00 00:00:00', 'abjashdkh@fsdk.com', ''),
(18, 'as', 'aaa', '2015-08-31 17:38:54', 'i', '2015-08-31 17:38:54', '0000-00-00 00:00:00', 'sadasd@dgdfg.gs', ''),
(19, 'as', 'aaa', '2015-08-31 17:38:56', 'i', '2015-08-31 17:38:56', '0000-00-00 00:00:00', 'sadasd@dgdfg.gs', ''),
(20, 'as', 'aaa', '2015-08-31 17:39:09', 'i', '2015-08-31 17:39:09', '0000-00-00 00:00:00', 'abjashdkh@fsdk.com', ''),
(21, 'as', 'aaa', '2015-08-31 17:39:52', 'i', '2015-08-31 17:39:52', '0000-00-00 00:00:00', 'abjashdkh@fsdk.com', ''),
(22, 'root', 'ilove111mummy', '2015-08-31 17:40:04', 'i', '2015-08-31 17:40:04', '0000-00-00 00:00:00', 'sfsafasf.a12@fsdfds.com', ''),
(23, 'as', 'sss', '2015-08-31 17:43:42', 'i', '2015-08-31 17:43:42', '0000-00-00 00:00:00', 'sadasd@dgdfg.gs', ''),
(24, 'as', 'sss', '2015-08-31 17:44:18', 'i', '2015-08-31 17:44:18', '0000-00-00 00:00:00', 'sadasd@dgdfg.gs', ''),
(25, 'as', 'sss', '2015-08-31 17:44:51', 'i', '2015-08-31 17:44:51', '0000-00-00 00:00:00', 'abjashdkh@fsdk.com', ''),
(26, 'as', 'aaa', '2015-08-31 17:46:02', 'i', '2015-08-31 17:46:02', '0000-00-00 00:00:00', 'abjashdkh@fsdk.com', ''),
(27, 'as', 'aaa', '2015-08-31 17:46:04', 'i', '2015-08-31 17:46:04', '0000-00-00 00:00:00', 'abjashdkh@fsdk.com', ''),
(28, 'as', 'aaa', '2015-08-31 17:46:04', 'i', '2015-08-31 17:46:04', '0000-00-00 00:00:00', 'abjashdkh@fsdk.com', ''),
(29, 'as', 'aaa', '2015-08-31 17:46:32', 'i', '2015-08-31 17:46:32', '0000-00-00 00:00:00', 'abjashdkh@fsdk.com', ''),
(30, 'as', 'aaa', '2015-08-31 17:47:21', 'i', '2015-08-31 17:47:21', '0000-00-00 00:00:00', 'abjashdkh@fsdk.com', ''),
(31, 'yash11138', 'il111mummy', '2015-08-31 19:43:58', 'a', '2015-08-31 19:43:58', '2017-08-31 00:00:00', 'yash999888777@gmail.com', ''),
(32, 'yash11111', 'iii', '2015-08-31 19:48:18', 'a', '2015-08-31 19:48:18', '2017-08-31 00:00:00', 'uashh.123@gmail.com', ''),
(33, 'ssss', 'sss', '2015-08-31 19:49:14', 'a', '2015-08-31 19:49:14', '2017-08-31 00:00:00', 'ssss@ss.co', ''),
(34, 'aaa', 'aa', '2015-08-31 19:52:34', 'a', '2015-08-31 19:52:34', '2017-08-31 00:00:00', 'aaa.a@aa.aa', ''),
(35, 'aaa', 'aaaa', '2015-08-31 19:53:34', 'a', '2015-08-31 19:53:34', '2017-08-31 00:00:00', 'aaa.a@aa.aa', ''),
(36, 'yash1', 'iloveu', '2015-09-06 14:18:48', 'a', '2015-09-06 14:18:48', '2017-09-06 00:00:00', 'yash999888777@gmail.com', 'images/â™¥ Shukra Tera â™¥ Samrat & Co _ Rajeev Khandelwal, Madalsa Sharma _ Video Song_HD.mp4_snaps'),
(37, 'sss', 'sss', '2015-09-06 14:21:12', 'a', '2015-09-06 14:21:12', '2017-09-06 00:00:00', 'ssss@ss.co', 'images/â™¥ Shukra Tera â™¥ Samrat & Co _ Rajeev Khandelwal, Madalsa Sharma _ Video Song_HD.mp4_snaps'),
(38, 'aaa', 'aaa', '2015-09-06 14:24:54', 'a', '2015-09-06 14:24:54', '2017-09-06 00:00:00', 'abjashdkh@fsdk.com', 'images/â™¥ Shukra Tera â™¥ Samrat & Co _ Rajeev Khandelwal, Madalsa Sharma _ Video Song_HD.mp4_snaps'),
(39, 'aaa', 'aa', '2015-09-06 14:25:51', 'a', '2015-09-06 14:25:51', '2017-09-06 00:00:00', 'abjashdkh@fsdk.com', 'images/â™¥ Shukra Tera â™¥ Samrat & Co _ Rajeev Khandelwal, Madalsa Sharma _ Video Song_HD.mp4_snaps'),
(40, 'aa', 'aa', '2015-09-06 16:08:41', 'a', '2015-09-06 16:08:41', '2017-09-06 00:00:00', 'abjashdkh@fsdk.com', 'images/r1.jpg'),
(41, 'yyy', 'yyy', '2015-09-08 03:26:52', 'a', '2015-09-08 03:26:52', '2017-09-07 00:00:00', 'yyy@yy.com', 'images/123.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE IF NOT EXISTS `detail` (
  `id` int(30) NOT NULL,
`blog_id` int(30) NOT NULL,
  `blog_title` varchar(255) NOT NULL,
  `blog_desc` varchar(10000) NOT NULL,
  `blog_category` enum('philosophy','drama','autobiography','sports','horror','thriller') NOT NULL,
  `detail_image` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

-- --------------------------------------------------------

--
-- Table structure for table `master`
--

CREATE TABLE IF NOT EXISTS `master` (
`blog_id` int(30) NOT NULL,
  `blogger_id` int(30) NOT NULL,
  `blog_title` varchar(255) NOT NULL,
  `blog_desc` varchar(10000) NOT NULL,
  `blog_category` enum('philosophy','drama','thriller','horror','autobiography','sports') NOT NULL,
  `blog_author` varchar(255) NOT NULL,
  `blog_is_active` enum('i','a') NOT NULL,
  `creation_date` datetime NOT NULL,
  `update_date` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogger`
--
ALTER TABLE `blogger`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
 ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `master`
--
ALTER TABLE `master`
 ADD PRIMARY KEY (`blog_id`), ADD KEY `blogger_id` (`blogger_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogger`
--
ALTER TABLE `blogger`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `detail`
--
ALTER TABLE `detail`
MODIFY `blog_id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `master`
--
ALTER TABLE `master`
MODIFY `blog_id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
