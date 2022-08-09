-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2018 at 07:52 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myland`

-- --
-- -- Table structure for table `landowner`
-- --

-- CREATE TABLE `landowner` (
--   `bid` int(100) NOT NULL,
--   `bname` varchar(100) NOT NULL,
--   `busername` varchar(100) NOT NULL,
--   `bpassword` varchar(100) NOT NULL,
--   `bhash` varchar(100) NOT NULL,
--   `bemail` varchar(100) NOT NULL,
--   `bgender` varchar(100) NOT NULL,
--   `bmobile` varchar(100) NOT NULL,
--   `baddress` text NOT NULL,
--   `bactive` int(100) NOT NULL DEFAULT '0',
--   `picExt` varchar(255) NOT NULL DEFAULT 'profile0',
--   `picStatus` int(10) NOT NULL DEFAULT '0'
-- ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- -- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `active` int(255) NOT NULL DEFAULT '0',
  `picExt` varchar(255) NOT NULL DEFAULT 'profile0',
  `picStatus` int(10) NOT NULL DEFAULT '0',
  `category` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- Indexes for dumped tables
--
-- -- Indexes for table `landowner`
-- --
-- ALTER TABLE `landowner`
--   ADD PRIMARY KEY (`bid`),
--   ADD UNIQUE KEY `bid` (`bid`);

--
-- Indexes for table `farmer`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

-- --
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

