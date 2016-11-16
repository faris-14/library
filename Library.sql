-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
<<<<<<< HEAD
-- Generation Time: Nov 13, 2016 at 08:31 PM
=======
-- Generation Time: Nov 04, 2016 at 01:34 AM
>>>>>>> origin/master
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Library`
--

-- --------------------------------------------------------

--
-- Table structure for table `Author`
--

CREATE TABLE `Author` (
  `Author_ID` int(11) NOT NULL,
  `first_name` char(50) NOT NULL,
  `last_name` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Book`
--

CREATE TABLE `Book` (
  `book_id` int(11) NOT NULL,
  `Author_id` int(11) NOT NULL,
  `publisher_id` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  `availability` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `check_outs`
--

CREATE TABLE `check_outs` (
  `serial_number` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `check_out_date` date NOT NULL,
<<<<<<< HEAD
=======
  `return_date` date NOT NULL,
>>>>>>> origin/master
  `due_date` date NOT NULL,
  `return_condition` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Copy`
--

CREATE TABLE `Copy` (
  `serial_number` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `book_condition` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ElectronicCopy`
--

CREATE TABLE `ElectronicCopy` (
  `book_id` int(11) NOT NULL,
  `data` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Employee`
--

CREATE TABLE `Employee` (
  `employee_id` int(11) NOT NULL,
  `SSN` int(11) NOT NULL,
<<<<<<< HEAD
  `password` int(20) NOT NULL,
=======
>>>>>>> origin/master
  `name` char(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `position` char(50) NOT NULL,
  `address` char(100) NOT NULL,
  `salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Member`
--

CREATE TABLE `Member` (
  `member_id` int(11) NOT NULL,
<<<<<<< HEAD
  `password` int(20) NOT NULL,
=======
>>>>>>> origin/master
  `phone` int(11) NOT NULL,
  `first_name` char(50) NOT NULL,
  `last_name` char(50) NOT NULL,
  `email` char(50) NOT NULL,
  `address` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Publisher`
--

CREATE TABLE `Publisher` (
  `publisher_id` int(11) NOT NULL,
  `name` char(50) NOT NULL,
  `city` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Subject`
--

CREATE TABLE `Subject` (
  `subject_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `name` char(100) NOT NULL,
  `parent` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Author`
--
ALTER TABLE `Author`
  ADD PRIMARY KEY (`Author_ID`);

--
-- Indexes for table `Book`
--
ALTER TABLE `Book`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `Author_id` (`Author_id`),
  ADD KEY `publisher_id` (`publisher_id`);

--
-- Indexes for table `check_outs`
--
ALTER TABLE `check_outs`
  ADD PRIMARY KEY (`serial_number`,`member_id`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `Copy`
--
ALTER TABLE `Copy`
  ADD PRIMARY KEY (`serial_number`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `ElectronicCopy`
--
ALTER TABLE `ElectronicCopy`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `Employee`
--
ALTER TABLE `Employee`
  ADD PRIMARY KEY (`employee_id`),
  ADD UNIQUE KEY `SSN` (`SSN`);

--
-- Indexes for table `Member`
--
ALTER TABLE `Member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `Publisher`
--
ALTER TABLE `Publisher`
  ADD PRIMARY KEY (`publisher_id`);

--
-- Indexes for table `Subject`
--
ALTER TABLE `Subject`
  ADD PRIMARY KEY (`subject_id`),
  ADD KEY `Book_id` (`book_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Book`
--
ALTER TABLE `Book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`Author_id`) REFERENCES `Author` (`Author_ID`),
  ADD CONSTRAINT `book_ibfk_2` FOREIGN KEY (`publisher_id`) REFERENCES `Publisher` (`publisher_id`);

--
-- Constraints for table `check_outs`
--
ALTER TABLE `check_outs`
  ADD CONSTRAINT `check_outs_ibfk_1` FOREIGN KEY (`serial_number`) REFERENCES `Copy` (`serial_number`),
  ADD CONSTRAINT `check_outs_ibfk_2` FOREIGN KEY (`member_id`) REFERENCES `Member` (`member_id`);

--
-- Constraints for table `Copy`
--
ALTER TABLE `Copy`
  ADD CONSTRAINT `copy_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `Book` (`book_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
