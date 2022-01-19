-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2022 at 01:44 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kiran.com`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(100) NOT NULL,
  `post_name` varchar(150) NOT NULL,
  `post_msg` text NOT NULL,
  `post_cat` varchar(50) NOT NULL,
  `post_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `post_name`, `post_msg`, `post_cat`, `post_image`) VALUES
(1, 'Welcome to HTML Basic', 'Welcome to HTML BasicWelcome to HTML BasicWelcome to HTML BasicWelcome to HTML BasicWelcome to HTML BasicWelcome to HTML BasicWelcome to HTML BasicWelcome to HTML BasicWelcome to HTML BasicWelcome to HTML BasicWelcome to HTML BasicWelcome to HTML BasicWelcome to HTML BasicWelcome to HTML BasicWelcome to HTML BasicWelcome to HTML BasicWelcome to HTML BasicWelcome to HTML BasicWelcome to HTML BasicWelcome to HTML BasicWelcome to HTML BasicWelcome to HTML BasicWelcome to HTML BasicWelcome to HTML BasicWelcome to HTML BasicWelcome to HTML BasicWelcome to HTML BasicWelcome to HTML BasicWelcome to HTML BasicWelcome to HTML BasicWelcome to HTML BasicWelcome to HTML BasicWelcome to HTML Basic', 'html', 'abc.jpg'),
(2, 'welcome to css ', 'welcome to css online module. welcome to css online module. welcome to css online module. welcome to css online module. welcome to css online module. welcome to css online module. welcome to css online module. welcome to css online module. welcome to css online module. welcome to css online module. welcome to css online module. welcome to css online module. welcome to css online module. welcome to css online module. welcome to css online module. welcome to css online module. welcome to css online module. welcome to css online module. ', 'css', 'abc.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(100) NOT NULL,
  `uname` int(100) NOT NULL,
  `uemail` varchar(50) NOT NULL,
  `upass` varchar(50) NOT NULL,
  `ucity` varchar(50) NOT NULL,
  `ucourse` varchar(50) NOT NULL,
  `ucat` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `uemail`, `upass`, `ucity`, `ucourse`, `ucat`) VALUES
(1, 0, 'ducatindia@gmail.com', '12345', 'Noida 123', 'html', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
