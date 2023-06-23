-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 20, 2023 at 10:38 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bWAPP`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(10) NOT NULL,
  `owner` varchar(100) DEFAULT NULL,
  `entry` varchar(500) DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `heroes`
--

CREATE TABLE `heroes` (
  `id` int(10) NOT NULL,
  `login` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `secret` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `heroes`
--

INSERT INTO `heroes` (`id`, `login`, `password`, `secret`) VALUES
(1, 'neo', 'trinity', 'Oh why didn\'t I took that BLACK pill?'),
(2, 'alice', 'loveZombies', 'There\'s a cure!'),
(3, 'thor', 'Asgard', 'Oh, no... this is Earth... isn\'t it?'),
(4, 'wolverine', 'Log@N', 'What\'s a Magneto?'),
(5, 'johnny', 'm3ph1st0ph3l3s', 'I\'m the Ghost Rider!'),
(6, 'seline', 'm00n', 'It wasn\'t the Lycans. It was you.');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(10) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `release_year` varchar(100) DEFAULT NULL,
  `genre` varchar(100) DEFAULT NULL,
  `main_character` varchar(100) DEFAULT NULL,
  `imdb` varchar(100) DEFAULT NULL,
  `tickets_stock` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


-----------------------------------------------------------
-------- create table for the user image


CREATE TABLE IF NOT EXISTS `user_message`(
`id` INT AUTO_INCREMENT PRIMARY KEY,
`first_name` VARCHAR(50) NOT NULL,
`last_name` VARCHAR(50) NOT NULL,
`email` VARCHAR(50) NOT NULL,
`phone_number` INT(20) NOT NULL,
`message` TEXT(5000) NOT NULL
);



--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `release_year`, `genre`, `main_character`, `imdb`, `tickets_stock`) VALUES
(1, 'G.I. Joe: Retaliation', '2013', 'action', 'Cobra Commander', 'tt1583421', 100),
(2, 'Iron Man', '2008', 'action', 'Tony Stark', 'tt0371746', 53),
(3, 'Man of Steel', '2013', 'action', 'Clark Kent', 'tt0770828', 78),
(4, 'Terminator Salvation', '2009', 'sci-fi', 'John Connor', 'tt0438488', 100),
(5, 'The Amazing Spider-Man', '2012', 'action', 'Peter Parker', 'tt0948470', 13),
(6, 'The Cabin in the Woods', '2011', 'horror', 'Some zombies', 'tt1259521', 666),
(7, 'The Dark Knight Rises', '2012', 'action', 'Bruce Wayne', 'tt1345836', 3),
(8, 'The Fast and the Furious', '2001', 'action', 'Brian O\'Connor', 'tt0232500', 40),
(9, 'The Incredible Hulk', '2008', 'action', 'Bruce Banner', 'tt0800080', 23),
(10, 'World War Z', '2013', 'horror', 'Gerry Lane', 'tt0816711', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `login` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `secret` varchar(100) DEFAULT NULL,
  `activation_code` varchar(100) DEFAULT NULL,
  `activated` tinyint(1) DEFAULT 0,
  `reset_code` varchar(100) DEFAULT NULL,
  `admin` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`, `secret`, `activation_code`, `activated`, `reset_code`, `admin`) VALUES
(1, 'A.I.M.', '6885858486f31043e5839c735d99457f045affd0', 'bwapp-aim@mailinator.com', 'A.I.M. or Authentication Is Missing', NULL, 1, NULL, 1),
(2, 'bee', '6885858486f31043e5839c735d99457f045affd0', 'bwapp-bee@mailinator.com', 'Any bugs?', NULL, 1, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(10) NOT NULL,
  `ip_address` varchar(50) DEFAULT NULL,
  `user_agent` varchar(500) DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `heroes`
--
ALTER TABLE `heroes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `heroes`
--
ALTER TABLE `heroes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
