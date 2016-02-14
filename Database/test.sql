-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2014 at 07:58 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

DELIMITER $$
--
-- Procedures
--
DROP PROCEDURE IF EXISTS `test_multi_sets`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `test_multi_sets`()
    DETERMINISTIC
begin
        select user() as first_col;
        select user() as first_col, now() as second_col;
        select user() as first_col, now() as second_col, now() as third_col;
        end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `course_id` int(50) NOT NULL AUTO_INCREMENT,
  `year` int(2) NOT NULL DEFAULT '2',
  `course_title` varchar(50) NOT NULL,
  `course_no` varchar(60) NOT NULL,
  `teacher_1_id` int(50) NOT NULL,
  `teacher_2_id` int(50) NOT NULL,
  PRIMARY KEY (`course_id`),
  UNIQUE KEY `Course_name` (`course_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `year`, `course_title`, `course_no`, `teacher_1_id`, `teacher_2_id`) VALUES
(1, 1, 'C programming', 'CSE 1101', 26, 0),
(2, 2, 'IP LAB', 'CSE 2200', 26, 0),
(3, 2, 'Machine & Measurement', 'EEE 2217', 0, 0),
(4, 2, 'Numerical Methods', 'CSE 2207', 0, 0),
(5, 1, 'Physics', 'PHY 1101', 0, 0),
(6, 1, 'Object Oriented Programming', 'CSE 1201', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ct`
--

DROP TABLE IF EXISTS `ct`;
CREATE TABLE IF NOT EXISTS `ct` (
  `ct_id` int(6) NOT NULL AUTO_INCREMENT,
  `date` varchar(30) NOT NULL,
  `year` int(10) NOT NULL,
  `course_no` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `syllabus` varchar(2000) NOT NULL,
  `teacher_id` varchar(50) NOT NULL,
  PRIMARY KEY (`ct_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `ct`
--

INSERT INTO `ct` (`ct_id`, `date`, `year`, `course_no`, `time`, `syllabus`, `teacher_id`) VALUES
(21, '2014-04-05', 0, 'CSE 1101', '10:10', 'OOP', 'Bisnu Sir'),
(22, '2014-04-22', 0, 'EEE 2217', '11:11', 'Transducer', 'Galib Sir');

-- --------------------------------------------------------

--
-- Table structure for table `ct_marks`
--

DROP TABLE IF EXISTS `ct_marks`;
CREATE TABLE IF NOT EXISTS `ct_marks` (
  `roll` int(12) NOT NULL,
  `ct_id` int(12) NOT NULL,
  `marks` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ct_marks`
--

INSERT INTO `ct_marks` (`roll`, `ct_id`, `marks`) VALUES
(1107001, 41, 1),
(1107004, 41, 5),
(1107025, 41, 8),
(1107039, 41, 2),
(1107001, 21, 12),
(1107004, 21, 34),
(1107025, 21, 56),
(1107039, 21, 88),
(1107001, 31, 12),
(1107004, 31, 2),
(1107025, 31, 0),
(1107039, 31, 0),
(1107001, 24, 12),
(1107004, 24, 12),
(1107025, 24, 12),
(1107039, 24, 45),
(1207001, 12, 12),
(1207003, 12, 20),
(1207004, 12, 12),
(1207028, 12, 8),
(1207001, 10, 0),
(1207003, 10, 0),
(1207004, 10, 0),
(1207028, 10, 0),
(1207001, 10, 0),
(1207003, 10, 0),
(1207004, 10, 0),
(1207028, 10, 0),
(1207001, 10, 0),
(1207003, 10, 0),
(1207004, 10, 0),
(1207028, 10, 0),
(1207001, 10, 0),
(1207003, 10, 0),
(1207004, 10, 0),
(1207028, 10, 0),
(1207001, 50, 0),
(1207003, 50, 0),
(1207004, 50, 0),
(1207028, 50, 0),
(1107001, 20, 0),
(1107004, 20, 0),
(1107025, 20, 0),
(1107039, 20, 0),
(1207001, 50, 0),
(1207003, 50, 0),
(1207004, 50, 0),
(1207028, 50, 0),
(1107001, 30, 0),
(1107004, 30, 0),
(1107025, 30, 0),
(1107039, 30, 0),
(1107001, 30, 0),
(1107004, 30, 0),
(1107025, 30, 0),
(1107039, 30, 0),
(1207001, 11, 0),
(1207003, 11, 0),
(1207004, 11, 0),
(1207028, 11, 0),
(1107001, 43, 2),
(1107004, 43, 20),
(1107025, 43, 20),
(1107039, 43, 22);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `enabled` int(5) NOT NULL DEFAULT '1',
  `mail` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `roll` int(10) NOT NULL,
  `year` int(6) NOT NULL,
  `password` varchar(50) NOT NULL,
  `category` varchar(20) NOT NULL DEFAULT 'student',
  PRIMARY KEY (`id`),
  UNIQUE KEY `mail` (`mail`),
  UNIQUE KEY `mail_2` (`mail`),
  UNIQUE KEY `roll` (`roll`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `enabled`, `mail`, `username`, `full_name`, `roll`, `year`, `password`, `category`) VALUES
(26, 1, 'rashikhasnat@ymail.com', 'Rashik', 'Rashik Hasnat', 1107004, 2, 'Hasnat', 'student'),
(27, 1, 'rashikcse2k11@gmail.com', 'admin', 'Mr. X', 1, 0, 'cse', 'admin'),
(28, 1, '', 'mashrur', 'Mashrur E Elahi', 0, 10, 'cse', 'teacher'),
(31, 1, 'm@y.com', 'murad', 'Syed Murad', 1107053, 2, 'takla', 'student'),
(32, 1, 'nazimreal@gmail.com', 'real', 'Nazim Shahrirar', 1107055, 2, 'cse', 'CR'),
(54, 1, 'abc', 'akash', 'AkashBaidda', 25, 2, 'cse', 'student'),
(56, 0, 'musa@yahoo.com', 'musa', 'AhmadMusa', 1207004, 1, 'cse', 'student'),
(57, 0, 'ashiq@gmail.com', 'ashik', 'Md.Ashiquzzaman', 1107039, 2, 'cse', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `published_result`
--

DROP TABLE IF EXISTS `published_result`;
CREATE TABLE IF NOT EXISTS `published_result` (
  `ct_id` int(5) NOT NULL,
  `year` int(5) NOT NULL,
  `course_id` int(5) NOT NULL,
  `full_marks` int(5) NOT NULL,
  `ct_no` int(5) NOT NULL,
  `teacher_name` varchar(100) NOT NULL,
  `published` date NOT NULL,
  PRIMARY KEY (`ct_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `published_result`
--

INSERT INTO `published_result` (`ct_id`, `year`, `course_id`, `full_marks`, `ct_no`, `teacher_name`, `published`) VALUES
(10, 1, 1, 0, 0, '', '2014-03-23'),
(11, 1, 1, 0, 1, 'asd', '2014-03-23'),
(12, 1, 1, 20, 2, 'Dr. MMA Hashem', '2014-03-20'),
(20, 2, 2, 0, 0, 'rashik', '2014-03-23'),
(21, 2, 2, 20, 1, 'Masrur-E-Elahi', '2014-03-21'),
(24, 2, 2, 200, 4, 'Mr. Akanda', '2014-03-20'),
(30, 2, 3, 0, 0, 'asd', '2014-03-23'),
(31, 2, 3, 20, 1, 'Sakib Galib Sourav', '2014-03-21'),
(41, 2, 4, 20, 0, 'A. Salim Mollah', '2014-03-21'),
(43, 2, 4, 20, 3, 'Nawaz Ali', '2014-03-30'),
(50, 1, 5, 0, 0, 'asd', '2014-03-23');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

DROP TABLE IF EXISTS `slides`;
CREATE TABLE IF NOT EXISTS `slides` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `directory` varchar(500) NOT NULL,
  `teacher_id` int(200) NOT NULL,
  `course_id` int(20) NOT NULL,
  `year` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `directory` (`directory`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `directory`, `teacher_id`, `course_id`, `year`, `title`) VALUES
(32, 'http://localhost/common_Room/processing/upload/321396181352Generator_1.pdf', 32, 3, 2, 'Generator'),
(33, 'http://localhost/common_Room/processing/upload/281396181511Generator_1.pptx', 28, 3, 2, 'loop'),
(34, 'http://localhost/common_Room/processing/upload/281396181687Rutin 2-2.jpg', 28, 1, 1, 'test'),
(35, 'http://localhost/common_Room/processing/upload/2813961817341964520_781076715254529_1941242010_n.jpg', 28, 2, 2, 'cookies');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

DROP TABLE IF EXISTS `student_info`;
CREATE TABLE IF NOT EXISTS `student_info` (
  `roll` int(20) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `year` int(10) NOT NULL DEFAULT '2',
  PRIMARY KEY (`roll`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`roll`, `full_name`, `username`, `year`) VALUES
(1107001, 'Subhasis Karmakar', '420', 2),
(1107004, 'Rashik Hasnat', 'Rashik', 2),
(1107025, 'Akash Baiddya', 'akash', 2),
(1107039, 'Md. Ashiquzzaman Ashiq', 'mdashiq', 2),
(1207001, 'Abdul Aziz', 'aziz', 1),
(1207003, 'Mahmudur Rahman', 'tanim', 1),
(1207004, 'Opu Raihan', 'opu', 1),
(1207028, 'Tonmoy Ghosh', 'tonmony', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
