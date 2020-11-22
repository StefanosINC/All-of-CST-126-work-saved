-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Mar 04, 2020 at 08:57 PM
-- Server version: 5.5.42
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Friy`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog5`
--

CREATE TABLE `blog5` (
  `BLOG_ID` int(11) NOT NULL,
  `BLOG_TITLE` varchar(40) NOT NULL,
  `BLOG_CONTENT` text NOT NULL,
  `BLOG_DATE` date NOT NULL,
  `USER_ID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog5`
--

INSERT INTO `blog5` (`BLOG_ID`, `BLOG_TITLE`, `BLOG_CONTENT`, `BLOG_DATE`, `USER_ID`) VALUES
(2, 'ttett', 'tweet', '0000-00-00', 0),
(3, 'asdf', 'sdafdsfadsf', '0000-00-00', 0),
(4, 'The world is purple', 'the universe is green', '0000-00-00', 0),
(5, 'Hello world', 'The world is great this blog is awesome!', '0000-00-00', 0),
(6, 'safaf', 'adsfasdf', '0000-00-00', 0),
(7, 'Title555', 'Content content ', '0000-00-00', 0),
(8, 'a', 'adsfasdf', '0000-00-00', 0),
(9, 'a', 'adsfasdfsdafdsf', '0000-00-00', 0),
(10, 'Pogg', '', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `USERS`
--

CREATE TABLE `USERS` (
  `USER_ID` int(11) NOT NULL,
  `FIRST_NAME` varchar(15) NOT NULL,
  `LAST_NAME` varchar(15) NOT NULL,
  `USERNAME` varchar(15) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `USERS`
--

INSERT INTO `USERS` (`USER_ID`, `FIRST_NAME`, `LAST_NAME`, `USERNAME`, `PASSWORD`) VALUES
(1, 'adfadsf', 'asdfasdf', 'asdfasf', 'asdfasdf'),
(2, 'asdfsadf', 'sdfasdfasdf', 'asdfasdf', 'sadfasdf'),
(3, 'asdfasdfsadfsad', 'kappa', 'asdfsadf', 'oieupio'),
(4, 'A', 'AB', 'ABB', 'ABB'),
(5, 'Stefanos', 'Sophocleous', 'Stefanos', 'Tennis10'),
(6, 'Stefanos', 'Sophocleous', 'a', 'b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog5`
--
ALTER TABLE `blog5`
  ADD PRIMARY KEY (`BLOG_ID`);

--
-- Indexes for table `USERS`
--
ALTER TABLE `USERS`
  ADD PRIMARY KEY (`USER_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog5`
--
ALTER TABLE `blog5`
  MODIFY `BLOG_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `USERS`
--
ALTER TABLE `USERS`
  MODIFY `USER_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
