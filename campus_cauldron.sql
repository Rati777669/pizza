-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2020 at 01:16 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `campus_cauldron`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `adminname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `email` varchar(55) CHARACTER SET latin1 NOT NULL,
  `password` varchar(30) CHARACTER SET latin1 NOT NULL,
  `id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`adminname`, `email`, `password`, `id`) VALUES
('Mahima Rai', 'raimahima@gmail.com', '3456', 4),
('Kshitij Sharma', 'riyashukla0907@gmail.com', '3456', 5),
('Mahima Rai', 'raimuskan101@gmail.com', 'mahi', 6),
('Rati Gupta', 'guptarati2001@gmail.com', '1234', 7),
('Katlkar', 'sharmakshitij250@gmail.com', '123', 8);

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

CREATE TABLE `club` (
  `club_id` int(11) NOT NULL,
  `club_name` varchar(255) NOT NULL,
  `club_logo` mediumblob NOT NULL,
  `club_info` varchar(255) NOT NULL,
  `club_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `club`
--

INSERT INTO `club` (`club_id`, `club_name`, `club_logo`, `club_info`, `club_link`) VALUES
(1, 'Something', 0x31363037303935333937, 'Something', 'Something'),
(2, 'Science Club', '', 'Related to environment', ''),
(3, 'Samosa Club', 0x31363037313730343438, 'We Love Samosa', 'Samosa.com');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `council_name` varchar(255) NOT NULL,
  `event_date` varchar(255) NOT NULL,
  `event_link` varchar(255) NOT NULL,
  `event_info` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `event_name`, `council_name`, `event_date`, `event_link`, `event_info`) VALUES
(1, 'something', 'something', 'something', 'something', 'something'),
(2, 'something', 'something', 'something', 'something', 'something'),
(3, 'something', 'something', 'somethingsomething', 'something', 'something'),
(4, 'Some other thing', 'Some other thing', 'Some other thing', 'Some other thing', 'Some other thing'),
(5, 'Samosa Party', 'Samosa Council Of Students', '22/2/2000', 'Samosa.com', 'We love Samosa');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `faq_id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(1200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`faq_id`, `question`, `answer`) VALUES
(1, 'Is this a good question?', 'This is an answer.'),
(2, 'Is this a good question?', 'This is an answer.'),
(3, 'question', 'answer'),
(4, 'Why do you love samosa?', 'Because it is pyramidal in shape.');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `notice_id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `date` varchar(20) NOT NULL,
  `npdf` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`notice_id`, `title`, `date`, `npdf`) VALUES
(2, 'Exams', '04/03/2021', ''),
(8, 'something', '22/11/2222', '1607094665'),
(9, 'Samosa', '22/2/2000', '1607170404');

-- --------------------------------------------------------

--
-- Table structure for table `q_and_a`
--

CREATE TABLE `q_and_a` (
  `id` int(5) NOT NULL,
  `question` varchar(2000) NOT NULL,
  `ques_approved` tinyint(1) DEFAULT NULL,
  `ques_answered` tinyint(1) DEFAULT NULL,
  `answer` varchar(10000) NOT NULL,
  `ans_approved` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `q_and_a`
--

INSERT INTO `q_and_a` (`id`, `question`, `ques_approved`, `ques_answered`, `answer`, `ans_approved`) VALUES
(1, 'Who handles data in BIET?', 1, NULL, 'Not a particular person .It changes every year.', NULL),
(10, 'Where is director\'s chamber?', NULL, NULL, 'Near Mech dept.', NULL),
(11, 'Where is director\'s chamber?', NULL, NULL, 'Near Mech dept.', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`club_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `q_and_a`
--
ALTER TABLE `q_and_a`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `club`
--
ALTER TABLE `club`
  MODIFY `club_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `q_and_a`
--
ALTER TABLE `q_and_a`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
