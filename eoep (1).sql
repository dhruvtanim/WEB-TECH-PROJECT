-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2021 at 07:25 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eoep`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `companyId` int(11) NOT NULL,
  `companyName` text NOT NULL,
  `companyEmail` text NOT NULL,
  `companyStatus` text NOT NULL DEFAULT 'invalid'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`companyId`, `companyName`, `companyEmail`, `companyStatus`) VALUES
(1010, 'ABC', 'abc@gmail.com', 'invalid'),
(1111, 'ABC', 'a@c.c', 'valid');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `courseId` int(3) NOT NULL,
  `courseTitle` text NOT NULL,
  `courseDescription` text NOT NULL,
  `courseCategory` text NOT NULL,
  `totalCourseLevel` int(11) NOT NULL,
  `courseLogo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`courseId`, `courseTitle`, `courseDescription`, `courseCategory`, `totalCourseLevel`, `courseLogo`) VALUES
(1, 'assaf', 'easgfdshfd', 'Techonology', 5, '../sources/MicrosoftTeams-image (23).png'),
(2, 'assaf', 'a', '', 5, '../sources/MicrosoftTeams-image (24).png'),
(3, 'assaf', 'easgfdshfd', 'Techonology', 5, '../sources/a.jpeg'),
(4, 'assaf', 'easgfdshfd', 'Techonology', 5, '../sources/Screenshot 2021-10-23 090551.png');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `c_name` text NOT NULL,
  `c_id` int(11) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`c_name`, `c_id`, `level`) VALUES
('Digital Photography', 1001, 3),
('Logo design', 1002, 3),
('Translation', 1008, 5),
('Data Entry', 1009, 5),
('SEO', 1004, 3);

-- --------------------------------------------------------

--
-- Table structure for table `instactor`
--

CREATE TABLE `instactor` (
  `instactorId` int(11) NOT NULL,
  `instactorName` text NOT NULL,
  `instactorEmail` text DEFAULT NULL,
  `institutionName` text DEFAULT NULL,
  `teachingExprience` int(11) DEFAULT NULL,
  `certification` varchar(100) DEFAULT NULL,
  `assignCourse` text NOT NULL,
  `instactorPassword` text NOT NULL,
  `courseCompleted` text DEFAULT NULL,
  `category` text NOT NULL DEFAULT 'instactor'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instactor`
--

INSERT INTO `instactor` (`instactorId`, `instactorName`, `instactorEmail`, `institutionName`, `teachingExprience`, `certification`, `assignCourse`, `instactorPassword`, `courseCompleted`, `category`) VALUES
(1, 'admin', '', NULL, 0, '', 'CSE', '123456789', NULL, 'instactor'),
(2, 'saad', '', NULL, 0, '', 'ntg', '987654321', NULL, 'instactor'),
(3, 'nadim', '', NULL, 0, '', 'CSE', '123456789', NULL, 'instactor'),
(4, 'ads', '', NULL, 0, '', 'BBA', '987142536', NULL, 'instactor'),
(5, 'saad', '', NULL, 0, '', 'BBA', '!@Mashuk2017.', NULL, 'instactor'),
(333, 'saad', 'saad@g.c', NULL, 5, '../sources/a.jpeg', 'CSE', '12356789', NULL, 'instactor'),
(335, 'newInstactor', '', NULL, 0, '', 'LAW', '12345679', NULL, 'instactor'),
(336, 'Fahim', 'admin@g.c', NULL, 5, 'abcdefghij', 'Advertisement', '../sources/Screenshot 2021-10-23 090551.png', NULL, 'instactor'),
(337, 'saad', 'admin@g.c', NULL, 5, '987654321', 'CSE', '../sources/Screenshot 2021-10-23 090551.png', NULL, 'instactor');

-- --------------------------------------------------------

--
-- Table structure for table `job recruit`
--

CREATE TABLE `job recruit` (
  `Name` varchar(50) NOT NULL,
  `Institution name` varchar(50) NOT NULL,
  `Course Completed` int(40) NOT NULL,
  `Program` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `learner`
--

CREATE TABLE `learner` (
  `lernerId` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `category` text NOT NULL DEFAULT 'lerner'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `learner`
--

INSERT INTO `learner` (`lernerId`, `username`, `password`, `email`, `category`) VALUES
(1, 'test lerner', '123456789', ' admin@g.com', 'lerner'),
(2, 'jesia', 'abcdefghij', ' a@a.g', 'lerner'),
(3, 'admin', '!@Mashuk2017.', ' a@a.c', 'lerner'),
(4, 'amar', '123456789', ' amar@g.c', 'lerner'),
(5, 'admin', '!@Mashuk2017.', ' a@a.a', 'lerner'),
(6, 'admin', '!@Mashuk2017.', ' a@g.c', 'lerner'),
(7, 'admin', '!@Mashuk2017.', ' a@a.c', 'lerner'),
(8, 'admin', '!@Mashuk2017.', ' a@a.c', 'lerner'),
(9, 'admin', '!@Mashuk2017.', ' a@g.c', 'lerner'),
(10, 'admin', '!@Mashuk2017.', ' a@g.c', 'lerner'),
(11, 'kavir', '!@Mashuk2017.', ' aa@g.c', 'lerner'),
(12, 'admin', '!@Mashuk2017.', ' a@a.c', 'lerner');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `password` text NOT NULL,
  `category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `password`, `category`) VALUES
(111, 'abc', 'admin'),
(222, 'aaa', 'student'),
(333, 'sss', 'instactor'),
(336, 'fahimkabir', 'instactor'),
(2, 'abcdefghij', 'lerner'),
(3, '!@Mashuk2017.', 'lerner'),
(4, '123456789', 'lerner'),
(3, '!@Mashuk2017.', 'lerner'),
(3, '!@Mashuk2017.', 'lerner'),
(3, '!@Mashuk2017.', 'lerner'),
(3, '!@Mashuk2017.', 'lerner'),
(3, '!@Mashuk2017.', 'lerner'),
(3, '!@Mashuk2017.', 'lerner'),
(11, '!@Mashuk2017.', 'lerner'),
(3, '!@Mashuk2017.', 'lerner'),
(337, '123456789', 'instactor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`companyId`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`courseId`);

--
-- Indexes for table `instactor`
--
ALTER TABLE `instactor`
  ADD PRIMARY KEY (`instactorId`);

--
-- Indexes for table `learner`
--
ALTER TABLE `learner`
  ADD PRIMARY KEY (`lernerId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `companyId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1112;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `courseId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `instactor`
--
ALTER TABLE `instactor`
  MODIFY `instactorId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=338;

--
-- AUTO_INCREMENT for table `learner`
--
ALTER TABLE `learner`
  MODIFY `lernerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
