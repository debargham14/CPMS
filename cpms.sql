-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 19, 2020 at 02:02 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cpms`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `lectureID` int(200) NOT NULL,
  `studentRoll` varchar(255) NOT NULL,
  `studentName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `lectureID`, `studentRoll`, `studentName`) VALUES
(1, 1, '001910501044', 'Sk Shahnawaz');

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `id` int(200) NOT NULL,
  `batchID` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `currentSem` int(11) NOT NULL,
  `startYear` int(11) NOT NULL,
  `endYear` int(11) NOT NULL,
  `teacher` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`id`, `batchID`, `degree`, `department`, `currentSem`, `startYear`, `endYear`, `teacher`, `timestamp`) VALUES
(1, 'BECSE20192023', 'BE', 'CSE', 1, 2019, 2023, 'debargham15@gmail.com', '2020-10-15 21:19:09');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `courseName` varchar(255) NOT NULL,
  `courseSem` int(11) NOT NULL,
  `courseID` varchar(255) NOT NULL,
  `createdBy` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `courseName`, `courseSem`, `courseID`, `createdBy`) VALUES
(1, 'DSA', 2, 'DSA2', 'Debargha Sir');

-- --------------------------------------------------------

--
-- Table structure for table `lecture`
--

CREATE TABLE `lecture` (
  `id` int(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `batchID` varchar(255) NOT NULL,
  `startTime` varchar(255) NOT NULL,
  `endTime` varchar(255) NOT NULL,
  `lectureDetails` varchar(500) NOT NULL,
  `teacherName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lecture`
--

INSERT INTO `lecture` (`id`, `email`, `batchID`, `startTime`, `endTime`, `lectureDetails`, `teacherName`) VALUES
(1, '', 'BECSE20192023', '16-10-2020 14:00', '16-10-2020 16:00', 'DSA2', 'debargham15@gmail.com'),
(2, 'debargham15@gmail.com', 'CSE20192020-10-20T16:30', '2020-10-20T14:30', '2020-10-20T16:30', 'Linked lists and arrays ', 'Debargha Sir'),
(3, 'debargham15@gmail.com', 'CSE20202020-10-20T14:07', '2020-10-20T13:07', '2020-10-20T14:07', 'Object Oriented Prog', 'Debargha Sir'),
(4, 'debargham15@gmail.com', 'CSE20202024', '2020-10-20T18:06', '2020-10-20T19:07', 'kichu ekta', 'Debargha Sir'),
(5, 'debargham15@gmail.com', 'MECSE20202024', '2020-10-20T20:09', '2020-10-20T21:10', 'kichu ekta 2', 'Debargha Sir');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `batchTarget` varchar(255) NOT NULL,
  `postedBy` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `email`, `content`, `batchTarget`, `postedBy`, `createdAt`) VALUES
(1, '', 'This is a demo notice !!!', 'BECSE20192023', 'Debargha Sir', '2020-10-16 16:56:36'),
(2, 'debargham15@gmail.com', 'hello, i will be taking classes from tomorrow', 'BECSE20192023', 'Debargha Sir', '2020-10-18 18:33:13');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(200) NOT NULL,
  `courseID` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `roll` varchar(300) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `courseID`, `firstName`, `lastName`, `roll`, `phone`, `email`, `password`, `timestamp`) VALUES
(1, 'BECSE20192023', 'Debargha', 'Mukherjee', '001910501067', '9999999999', 'debargham14@gmail.com', 'Debmukh@2206', '2020-10-15 21:37:24'),
(2, 'BECSE20192023', 'Sk', 'Shahnawaz', '001910501044', '9999999998', 'skshahnawaz2909@gmail.com', 'abcd1234', '2020-10-15 21:37:27'),
(3, 'BECSE20192023', 'Neeladri', 'Pal', '001910501015', '9999999999', 'neel.pal26@gmail.com', 'Neeladri@123', '2020-10-15 21:37:29');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(200) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `firstName`, `lastName`, `phone`, `email`, `password`, `timestamp`) VALUES
(1, 'Debargha', 'Sir', '9999999999', 'debargham15@gmail.com', 'Debmukh@2206', '2020-10-15 21:06:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lecture`
--
ALTER TABLE `lecture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lecture`
--
ALTER TABLE `lecture`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
