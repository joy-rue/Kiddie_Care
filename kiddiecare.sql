-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2023 at 11:26 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kiddiecare`
--

-- --------------------------------------------------------

--
-- Table structure for table `child`
--

CREATE TABLE `child` (
  `parentId` int(30) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `otherNames` varchar(60) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(1) DEFAULT NULL,
  `age` int(1) DEFAULT NULL,
  `allergies` varchar(255) DEFAULT NULL,
  `special_needs` varchar(255) DEFAULT NULL,
  `Notes` mediumtext DEFAULT NULL,
  `language` varchar(255) DEFAULT NULL,
  `photo` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `otherNames` varchar(30) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `pnationalID` int(20) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `occupation` varchar(30) DEFAULT NULL,
  `gender` varchar(1) DEFAULT NULL,
  `age` int(1) DEFAULT NULL,
  `marital_status` varchar(14) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `home_languages` varchar(200) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `photo` blob DEFAULT NULL,
  `status` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sitter`
--

CREATE TABLE `sitter` (
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `otherNames` varchar(30) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `snationalID` int(20) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `category` varchar(30) DEFAULT NULL,
  `gender` varchar(1) DEFAULT NULL,
  `age` int(1) DEFAULT NULL,
  `marital_status` varchar(14) DEFAULT NULL,
  `religion` varchar(50) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `languages` varchar(255) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `description` mediumtext DEFAULT NULL,
  `language` varchar(255) DEFAULT NULL,
  `photo` blob DEFAULT NULL,
  `status` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sitting`
--

CREATE TABLE `sitting` (
  `date` date DEFAULT NULL,
  `sitterId` int(20) DEFAULT NULL,
  `parent` int(20) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`pnationalID`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `sitter`
--
ALTER TABLE `sitter`
  ADD PRIMARY KEY (`snationalID`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
