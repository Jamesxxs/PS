-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2020 at 11:02 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parentsupportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `addarticles`
--

CREATE TABLE `addarticles` (
  `articleID` int(255) NOT NULL,
  `date` date NOT NULL,
  `author` varchar(50) NOT NULL,
  `text` text NOT NULL,
  `similarity` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `articleID` int(255) NOT NULL,
  `tags` set('@formular','','','') NOT NULL,
  `type` enum('article','event','news','') NOT NULL DEFAULT 'article',
  `date` date NOT NULL,
  `author` varchar(50) NOT NULL,
  `likes` int(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bannedusers`
--

CREATE TABLE `bannedusers` (
  `userID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `commentID` int(11) NOT NULL,
  `article` int(255) NOT NULL,
  `author` int(255) NOT NULL,
  `date` date NOT NULL,
  `likes` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `deletedarticles`
--

CREATE TABLE `deletedarticles` (
  `articleID` int(255) NOT NULL,
  `date` date NOT NULL,
  `author` varchar(50) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `deletedcomments`
--

CREATE TABLE `deletedcomments` (
  `commentID` int(11) NOT NULL,
  `author` int(255) NOT NULL,
  `date` date NOT NULL,
  `likes` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `favorite`
--

CREATE TABLE `favorite` (
  `userID` int(255) NOT NULL,
  `articleID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `disability` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('user','oficer','admin','') NOT NULL DEFAULT 'user',
  `street` varchar(50) NOT NULL,
  `town` enum('London','Liverpool','Southport','') NOT NULL,
  `country` enum('United kingdom','','','') NOT NULL,
  `postalCode` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addarticles`
--
ALTER TABLE `addarticles`
  ADD PRIMARY KEY (`articleID`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`articleID`);

--
-- Indexes for table `bannedusers`
--
ALTER TABLE `bannedusers`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`commentID`),
  ADD KEY `userComment` (`author`),
  ADD KEY `articleComment` (`article`);

--
-- Indexes for table `deletedarticles`
--
ALTER TABLE `deletedarticles`
  ADD PRIMARY KEY (`articleID`);

--
-- Indexes for table `deletedcomments`
--
ALTER TABLE `deletedcomments`
  ADD PRIMARY KEY (`commentID`),
  ADD KEY `user_like` (`likes`);

--
-- Indexes for table `favorite`
--
ALTER TABLE `favorite`
  ADD KEY `user` (`userID`),
  ADD KEY `article` (`articleID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `password` (`password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addarticles`
--
ALTER TABLE `addarticles`
  MODIFY `articleID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `articleID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `commentID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deletedarticles`
--
ALTER TABLE `deletedarticles`
  MODIFY `articleID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deletedcomments`
--
ALTER TABLE `deletedcomments`
  MODIFY `commentID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(255) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bannedusers`
--
ALTER TABLE `bannedusers`
  ADD CONSTRAINT `userBanned` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `articleComment` FOREIGN KEY (`article`) REFERENCES `articles` (`articleID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `userComment` FOREIGN KEY (`author`) REFERENCES `users` (`userID`);

--
-- Constraints for table `deletedcomments`
--
ALTER TABLE `deletedcomments`
  ADD CONSTRAINT `articleDelComment` FOREIGN KEY (`article`) REFERENCES `articles` (`articleID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `userDelComment` FOREIGN KEY (`author`) REFERENCES `users` (`userID`);
--
-- Constraints for table `favorite`
--
ALTER TABLE `favorite`
  ADD CONSTRAINT `article` FOREIGN KEY (`articleID`) REFERENCES `articles` (`articleID`),
  ADD CONSTRAINT `user` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
