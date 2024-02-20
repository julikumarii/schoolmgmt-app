-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2023 at 02:30 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoolmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `hiredate` date NOT NULL,
  `address` varchar(30) NOT NULL,
  `gender` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`, `phone`, `email`, `dob`, `hiredate`, `address`, `gender`) VALUES
('ad-123-0', 'Christen', '123', '2587416969', 'christen@example.com', '1993-11-20', '2016-01-01', 'US, Blkr St', 'female'),
('ad-123-1', 'Harry Den', '123', '7531596969', 'harryden@gmail.com', '1995-09-22', '2018-01-05', 'US, Fairview Drive', 'Male'),
('ad-123-2', 'Bucky Barnes', '123', '1969735220', 'barsmine@gmail.com', '1994-04-02', '2020-12-24', 'US, DownSt 12', 'Male'),
('ad-123-3', 'Steephen', '123', '9745452220', 'stephen@gmail.com', '1991-05-02', '2014-04-24', 'AU, Parmmiza Rd', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `attendedid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `date`, `attendedid`) VALUES
(18, '2016-05-04', 'te-123-1'),
(20, '2016-05-01', 'te-123-1'),
(21, '2016-04-12', 'te-123-1'),
(22, '2016-05-04', 'te-124-1'),
(23, '2016-04-19', 'te-124-1'),
(24, '2016-05-02', 'te-124-1'),
(25, '2016-05-04', 'sta-123-1'),
(26, '2016-05-05', 'sta-123-1'),
(27, '2016-04-04', 'sta-123-1'),
(28, '2016-04-05', 'sta-123-1'),
(29, '2021-04-06', 'te-123-1'),
(30, '2021-04-06', 'sta-123-1'),
(31, '2021-04-06', 'st-123-1'),
(32, '2021-04-06', 'st-124-1'),
(33, '2023-07-14', 'st-123-1'),
(34, '2023-07-14', 'st-124-1'),
(47, '2023-07-17', 'te-123-1'),
(48, '2023-07-17', 'te-124-1'),
(49, '2023-07-17', 'te-126-1'),
(50, '2023-07-17', 'te-127-1'),
(51, '2023-07-17', 'te-124-1'),
(62, '2023-07-17', 'te-125-1');

-- --------------------------------------------------------

--
-- Table structure for table `availablecourse`
--

CREATE TABLE `availablecourse` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `classid` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `availablecourse`
--

INSERT INTO `availablecourse` (`id`, `name`, `classid`) VALUES
(1, 'Bangla 1st', '1'),
(2, 'Bangla 1st', '2'),
(3, 'Bangla 1st', '3'),
(4, 'Bangla 1st', '4'),
(5, 'Bangla 1st', '5'),
(6, 'Bangla 1st', '6'),
(7, 'Bangla 1st', '7'),
(8, 'Bangla 1st', '8'),
(9, 'Bangla 1st', '9'),
(10, 'Bangla 1st', '10'),
(11, 'Bangla 2nd', '1'),
(12, 'Bangla 2nd', '2'),
(13, 'Bangla 2nd', '3'),
(14, 'Bangla 2nd', '4'),
(15, 'Bangla 2nd', '5'),
(16, 'Bangla 2nd', '6'),
(17, 'Bangla 2nd', '7'),
(18, 'Bangla 2nd', '8'),
(19, 'Bangla 2nd', '9'),
(20, 'Bangla 2nd', '10'),
(21, 'English 1st', '1'),
(22, 'English 1st', '2'),
(23, 'English 1st', '3'),
(24, 'English 1st', '4'),
(25, 'English 1st', '5'),
(26, 'English 1st', '6'),
(27, 'English 1st', '7'),
(28, 'English 1st', '8'),
(29, 'English 1st', '9'),
(30, 'English 1st', '10'),
(31, 'English 2nd', '1'),
(32, 'English 2nd', '2'),
(33, 'English 2nd', '3'),
(34, 'English 2nd', '4'),
(35, 'English 2nd', '5'),
(36, 'English 2nd', '6'),
(37, 'English 2nd', '7'),
(38, 'English 2nd', '8'),
(39, 'English 2nd', '9'),
(40, 'English 2nd', '10');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `room` varchar(20) NOT NULL,
  `section` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `name`, `room`, `section`) VALUES
('1A', 'One', '101', 'A'),
('1B', 'One', '101', 'B'),
('2A', 'Two', '201', 'A'),
('2B', 'Two', '202', 'B'),
('3A', 'Three', '301', 'A'),
('3B', 'Three', '302', 'B'),
('4A', 'Four', '401', 'A'),
('4B', 'Four', '402', 'B'),
('5A', 'Five', '501', 'A'),
('5B', 'Five', '502', 'B'),
('6A', 'Six', '601', 'A'),
('6B', 'Six', '602', 'B'),
('7A', 'Seven', '701', 'A'),
('7B', 'Seven', '702', 'B'),
('8A', 'Eight', '801', 'A'),
('8B', 'Eight', '802', 'B'),
('9A', 'Nine', '901', 'A'),
('9B', 'Nine', '902', 'B'),
('10S', 'Ten', '1001', 'Science'),
('10A', 'Ten', '1002', 'Arts'),
('10C', 'Ten', '1002', 'Commerce');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `teacherid` varchar(20) NOT NULL,
  `studentid` varchar(20) NOT NULL,
  `classid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `examschedule`
--

CREATE TABLE `examschedule` (
  `id` varchar(20) NOT NULL,
  `examdate` date NOT NULL,
  `time` varchar(20) NOT NULL,
  `courseid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `examschedule`
--

INSERT INTO `examschedule` (`id`, `examdate`, `time`, `courseid`) VALUES
('145', '2016-05-06', '2:00-4:00', '1'),
('sh-10', '2021-04-06', '10:00 - 12:30', '4'),
('sh-20', '2021-04-06', '01:00 - 03:00', '2'),
('', '0000-00-00', '', ''),
('678', '2023-09-06', '12:-20', 'kj');

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `id` int(11) NOT NULL,
  `studentid` varchar(20) NOT NULL,
  `grade` varchar(5) NOT NULL,
  `courseid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`id`, `studentid`, `grade`, `courseid`) VALUES
(1, 'st-123-1', 'C', '8'),
(2, 'st-123-1', 'F', '4'),
(3, 'st-125-1', 'D+', '1'),
(4, 'st-123-1', 'D+', '1'),
(5, 'st-124-1', 'C+', '1'),
(6, 'st-124-1', 'A+', '1'),
(7, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `reportid` int(11) NOT NULL,
  `studentid` varchar(20) NOT NULL,
  `teacherid` varchar(20) NOT NULL,
  `message` varchar(500) NOT NULL,
  `courseid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`reportid`, `studentid`, `teacherid`, `message`, `courseid`) VALUES
(1, 'st-123-1', 'te-123-1', 'Good Boy', '790'),
(2, 'st-124-1', 'te-123-1', 'Good boy But not honest.', '790');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(20) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `dob` date NOT NULL,
  `addmissiondate` date NOT NULL,
  `address` varchar(50) NOT NULL,
  `classid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `password`, `phone`, `email`, `gender`, `dob`, `addmissiondate`, `address`, `classid`) VALUES
('678', 'pp', '65', '7858917702', 'kjhn@gmail.com', 'Male', '1999-02-04', '2023-07-13', 'punjab,india', '890'),
('st-123-1', 'Wiccan', '123', '9102457890', 'wiccan@gmail.com', 'Male', '1999-10-24', '2011-01-09', '3056  Leisure Lane', '1A'),
('st-124-1', 'Paul', '123', '4564564500', 'paul@gmail.com', 'Male', '2000-09-24', '2014-07-02', '1940  Prudence Street', '1A');

-- --------------------------------------------------------

--
-- Table structure for table `takencoursebyteacher`
--

CREATE TABLE `takencoursebyteacher` (
  `id` int(11) NOT NULL,
  `courseid` varchar(20) NOT NULL,
  `teacherid` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `takencoursebyteacher`
--

INSERT INTO `takencoursebyteacher` (`id`, `courseid`, `teacherid`) VALUES
(1, '4', 'te-123-1'),
(2, '8', 'te-123-1'),
(3, '1', 'te-124-1'),
(4, '2', 'te-124-1'),
(5, '18', 'te-125-1'),
(6, '19', 'te-125-1'),
(7, '11', 'te-125-1'),
(8, '24', 'te-126-1'),
(9, '23', 'te-126-1'),
(10, '22', 'te-126-1'),
(11, '4', 'te-124-1'),
(12, '5', 'te-123-1'),
(13, '6', 'te-125-1'),
(14, '7', 'te-127-1'),
(15, '9', 'te-127-1'),
(16, '10', 'te-127-1'),
(17, '17', 'te-125-1'),
(18, '16', 'te-125-1'),
(19, '15', 'te-125-1'),
(20, '14', 'te-126-1'),
(21, '13', 'te-126-1'),
(22, '12', 'te-126-1');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `dob` date NOT NULL,
  `hiredate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `password`, `phone`, `email`, `address`, `gender`, `dob`, `hiredate`) VALUES
('te-123-1', 'Liiam', '123', '1247965680', 'liam@gmail.com', '', 'Male', '1990-05-05', '2010-06-21'),
('te-124-1', 'Robert', '124', '8520000012', 'robertj@gmail,com', '1022  Neuport Lane', 'Male', '1995-12-18', '2015-12-04'),
('te-125-1', 'James Rhoades', '258', '3214569874', 'rhoadesj@gmail.com', '3464  Straford Park', 'Male', '1998-06-26', '2021-01-06'),
('te-126-1', 'Maria', '222', '9103674540', 'mariahill@gmail.com', '833  Fulton Street', 'Female', '1996-04-06', '2019-12-24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `usertype` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `password`, `usertype`) VALUES
('678', '65', 'student'),
('ad-123-0', '123', 'admin'),
('ad-123-1', '123', 'admin'),
('ad-123-2', '123', 'admin'),
('ad-123-3', '123', 'admin'),
('st-123-1', '123', 'student'),
('st-124-1', '125', 'student'),
('te-123-1', '123', 'teacher'),
('te-124-1', '124', 'teacher'),
('te-125-1', '258', 'teacher'),
('te-126-1', '258', 'teacher');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `availablecourse`
--
ALTER TABLE `availablecourse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`reportid`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `takencoursebyteacher`
--
ALTER TABLE `takencoursebyteacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `userid` (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `availablecourse`
--
ALTER TABLE `availablecourse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `reportid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `takencoursebyteacher`
--
ALTER TABLE `takencoursebyteacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
