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


--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

-- --
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

CREATE TABLE `logins` (
  `lid` int(255) NOT NULL,
  `lpass` varchar(255) NOT NULL,
  `lemail` varchar(255) NOT NULL,
  `lcategory` varchar(255) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
  --
-- Indexes for table `user`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`lid`);

-- --
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `logins`
  MODIFY `lid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;