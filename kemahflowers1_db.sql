-- phpMyAdmin SQL Dump
-- version 2.8.0.1
-- http://www.phpmyadmin.net
-- 
-- Host: custsql-ipg50.eigbox.net
-- Generation Time: Nov 13, 2016 at 01:36 PM
-- Server version: 5.6.32
-- PHP Version: 4.4.9
-- 
-- Database: `kemahflowers1_db`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `user_progress`
-- 

CREATE TABLE `user_progress` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `user_id` int(250) NOT NULL,
  `images` longtext NOT NULL,
  `selected_date` varchar(250) NOT NULL,
  `approval` int(250) NOT NULL DEFAULT '0',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

-- 
-- Dumping data for table `user_progress`
-- 

INSERT INTO `user_progress` VALUES (11, 37, '12-11-2016_4442_Chrysanthemum.jpg|12-11-2016_2464_Desert.jpg', '11/10/2016', 1, '2016-11-12 06:12:30');
INSERT INTO `user_progress` VALUES (12, 37, '12-11-2016_526_Penguins.jpg', '11/18/2016', 1, '2016-11-12 06:12:55');
INSERT INTO `user_progress` VALUES (14, 39, '13-11-2016_7798_image 1.jpg', '11/23/2016', 1, '2016-11-13 12:45:04');

-- --------------------------------------------------------

-- 
-- Table structure for table `users`
-- 

CREATE TABLE `users` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `user_level` int(20) NOT NULL DEFAULT '0',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

-- 
-- Dumping data for table `users`
-- 

INSERT INTO `users` VALUES (36, 'admin', 'admin', '', '', 1, '2016-11-11 15:59:21');
INSERT INTO `users` VALUES (37, 'user', 'user', 'user@mail.com', '34534', 0, '2016-11-11 16:03:55');
INSERT INTO `users` VALUES (38, 'Varun', 'varun', 'varunmamindla@gmail.com', '8974563211', 0, '2016-11-12 13:49:39');
INSERT INTO `users` VALUES (39, 'harish', 'harish', 'kr@gmail.com', '65897123', 0, '2016-11-13 12:42:24');
