-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2017 at 10:57 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `status`) VALUES
(1, 'admin@gmail.com', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `multiple_choices`
--

CREATE TABLE `multiple_choices` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `choices` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `multiple_choices`
--

INSERT INTO `multiple_choices` (`id`, `question`, `answer`, `choices`) VALUES
(15, 'What is the paragraph tag?', 'b', 'a:4:{i:0;s:13:\"&lt;param&gt;\";i:1;s:9:\"&lt;p&gt;\";i:2;s:10:\"&lt;pr&gt;\";i:3;s:17:\"&lt;paragraph&gt;\";}'),
(16, '___________ is a language that is used for website creation?', 'a', 'a:4:{i:0;s:4:\"Html\";i:1;s:3:\"Htm\";i:2;s:4:\"Htlm\";i:3;s:4:\"Hmtl\";}'),
(17, 'The sole purpose of ________ element is to encapsulate all the html code and describe the html\r\n\r\ndocument to the web browser.', 'b', 'a:4:{i:0;s:13:\"&lt;title&gt;\";i:1;s:12:\"&lt;html&gt;\";i:2;s:12:\"&lt;head&gt;\";i:3;s:12:\"&lt;body&gt;\";}'),
(18, 'The bold tag.', 'c', 'a:4:{i:0;s:12:\"&lt;bold&gt;\";i:1;s:10:\"&lt;bd&gt;\";i:2;s:9:\"&lt;b&gt;\";i:3;s:10:\"&lt;bo&gt;\";}'),
(19, 'The words inside the opening and closing tag of this element is placed at the top of the browser.', 'a', 'a:4:{i:0;s:13:\"&lt;title&gt;\";i:1;s:12:\"&lt;html&gt;\";i:2;s:12:\"&lt;head&gt;\";i:3;s:12:\"&lt;body&gt;\";}'),
(20, 'The _________ element is where all content is placed.', 'c', 'a:4:{i:0;s:13:\"&lt;title&gt;\";i:1;s:12:\"&lt;bold&gt;\";i:2;s:12:\"&lt;body&gt;\";i:3;s:12:\"&lt;html&gt;\";}'),
(21, 'What is the tag for next line?', 'c', 'a:4:{i:0;s:13:\"&lt;break&gt;\";i:1;s:9:\"&lt;b&gt;\";i:2;s:10:\"&lt;br&gt;\";i:3;s:17:\"&lt;breakline&gt;\";}'),
(22, 'The superscript tag.', 'a', 'a:4:{i:0;s:11:\"&lt;sup&gt;\";i:1;s:19:\"&lt;superscript&gt;\";i:2;s:11:\"&lt;sub&gt;\";i:3;s:13:\"&lt;super&gt;\";}'),
(23, 'The image tag.', 'd', 'a:4:{i:0;s:13:\"&lt;image&gt;\";i:1;s:10:\"&lt;im&gt;\";i:2;s:14:\"&lt;images&gt;\";i:3;s:11:\"&lt;img&gt;\";}'),
(24, 'The tag for creating links.', 'd', 'a:4:{i:0;s:13:\"&lt;links&gt;\";i:1;s:14:\"&lt;anchor&gt;\";i:2;s:12:\"&lt;link&gt;\";i:3;s:9:\"&lt;a&gt;\";}'),
(25, 'What is the tag for creating a table?', 'b', 'a:4:{i:0;s:9:\"&lt;t&gt;\";i:1;s:13:\"&lt;table&gt;\";i:2;s:14:\"&lt;tables&gt;\";i:3;s:11:\"&lt;tab&gt;\";}'),
(26, 'What is CSS?', 'b', 'a:4:{i:0;s:19:\"Codes Styling Sheet\";i:1;s:21:\"Cascading Style Sheet\";i:2;s:17:\"Codes Style Sheet\";i:3;s:20:\"Concrete Style Sheet\";}'),
(27, 'It is a language used to describe the presentation of a document written in a markup language.', 'c', 'a:4:{i:0;s:2:\"c#\";i:1;s:12:\"Visual Basic\";i:2;s:4:\"Html\";i:3;s:3:\"Css\";}'),
(28, 'The property of applying background color to an element.', 'b', 'a:4:{i:0;s:16:\"Background-color\";i:1;s:7:\"bgcolor\";i:2;s:15:\"Backgroundcolor\";i:3;s:10:\"Back-color\";}'),
(29, 'This property is use to change the color of a text.', 'c', 'a:4:{i:0;s:10:\"Text-color\";i:1;s:10:\"Font-color\";i:2;s:5:\"Color\";i:3;s:9:\"Textcolor\";}'),
(30, 'The attribute for getting the source of the image to be inserted.', 'a', 'a:4:{i:0;s:3:\"src\";i:1;s:6:\"source\";i:2;s:8:\"resource\";i:3;s:3:\"scr\";}'),
(31, 'This image attribute defines reference that the link refers to.', 'b', 'a:4:{i:0;s:3:\"ref\";i:1;s:4:\"Href\";i:2;s:3:\"Src\";i:3;s:5:\"Refer\";}'),
(32, 'The property that defines the chosen font either in normal, italic or oblique.', 'd', 'a:4:{i:0;s:14:\"Text-indention\";i:1;s:15:\"Text-decoration\";i:2;s:12:\"Font-variant\";i:3;s:10:\"Font-style\";}'),
(33, 'tag used to create an HTML form for user input.', 'a', 'a:4:{i:0;s:4:\"form\";i:1;s:1:\"f\";i:2;s:2:\"fo\";i:3;s:2:\"fm\";}');

-- --------------------------------------------------------

--
-- Table structure for table `myquiz`
--

CREATE TABLE `myquiz` (
  `id` int(11) NOT NULL,
  `ipaddress` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `q1` varchar(255) NOT NULL,
  `q2` varchar(255) NOT NULL,
  `q3` varchar(255) NOT NULL,
  `timestart` varchar(255) NOT NULL,
  `pcname` varchar(255) NOT NULL,
  `question1` int(100) NOT NULL,
  `question2` int(100) NOT NULL,
  `question3` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `myquiz`
--

INSERT INTO `myquiz` (`id`, `ipaddress`, `country`, `fullname`, `q1`, `q2`, `q3`, `timestart`, `pcname`, `question1`, `question2`, `question3`) VALUES
(856, '::1', 'Makati City, Philippines', 'Jaime Ramos', 'Write your answer here.....', 'test', '', '2017-06-22 10:40:33am', '', 0, 0, 0),
(857, '::1', 'Makati City, Philippines', 'Jaime Ramos', 'Write your answer here.....', '', '', '2017-06-22 10:58:19am', '', 0, 0, 0),
(858, '::1', 'Makati City, Philippines', 'Jaime Ramos', 'Write your answer here.....', '', '', '2017-06-22 11:51:17am', '', 0, 0, 0),
(859, '::1', 'Makati City, Philippines', 'Jaime Ramos', 'Write your answer here.....', '', '', '2017-06-22 02:17:22pm', 'Ja-PC', 0, 0, 0),
(860, '::1', 'Makati City, Philippines', 'Jaime Ramos', 'Write your answer here.....', '', '', '2017-06-22 02:38:14pm', 'Ja-PC', 0, 0, 0),
(861, '::1', 'Makati City, Philippines', 'Jaime Ramos', 'Write your answer here.....', 'Write your answer here.....', 'Write your answer here.....', '2017-06-22 02:42:45pm', 'Ja-PC', 0, 0, 0),
(862, '::1', 'Makati City, Philippines', 'Jaime Ramos', 'gjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', 'jhgjghjgh jhjghjghjghjghj', 'jghjghjghjgfj jfgj gjghj', '2017-06-22 02:43:07pm', 'Ja-PC', 0, 0, 0),
(863, '::1', 'Makati City, Philippines', 'Jaime Ramos', 'Write your answer here.....', 'Write your answer here.....', 'Write your answer here.....', '2017-06-22 02:43:35pm', 'Ja-PC', 0, 0, 0),
(864, '::1', 'Makati City, Philippines', 'Jaime Ramos', 'Write your answer here.....', 'Write your answer here.....', 'Write your answer here.....', '2017-06-22 02:45:24pm', 'Ja-PC', 0, 0, 0),
(865, '::1', 'Makati City, Philippines', 'Jaime Ramos', 'Write your answer here.....', 'Write your answer here.....', 'Write your answer here.....', '2017-06-22 02:46:39pm', 'Ja-PC', 0, 0, 0),
(866, '::1', 'Makati City, Philippines', 'Jaime Ramos', 'Write your answer here.....', 'Write your answer here.....', 'Write your answer here.....', '2017-06-22 02:48:04pm', 'Ja-PC', 0, 0, 0),
(867, '::1', 'Makati City, Philippines', 'Jaime Ramos', 'Write your answer here.....', 'Write your answer here.....', 'Write your answer here.....', '2017-06-22 02:48:44pm', 'Ja-PC', 0, 0, 0),
(868, '::1', 'Makati City, Philippines', 'Jaime Ramos', 'Write your answer here.....', 'Write your answer here.....', 'Write your answer here.....', '2017-06-22 02:48:56pm', 'Ja-PC', 0, 0, 0),
(869, '::1', 'Makati City, Philippines', 'Jaime Ramos', 'Write your answer here.....', 'Write your answer here.....', 'Write your answer here.....', '2017-06-22 02:50:06pm', 'Ja-PC', 0, 0, 0),
(870, '::1', 'Makati City, Philippines', 'Jaime Ramos', 'Write your answer here.....', 'Write your answer here.....', 'Write your answer here.....', '2017-06-22 02:50:20pm', 'Ja-PC', 0, 0, 0),
(871, '::1', 'Makati City, Philippines', 'Jaime Ramos', 'Write your answer here.....', 'Write your answer here.....', 'Write your answer here.....', '2017-06-22 03:12:28pm', 'Ja-PC', 6, 1, 5),
(872, '::1', 'Makati City, Philippines', 'jose rizal', 'Write your answer here.....', 'Write your answer here.....', 'Write your answer here.....', '2017-07-04 03:00:18pm', 'Ja-PC', 5, 1, 2),
(873, '::1', 'Makati City, Philippines', 'jose rizal', 'Write your answer here.....', 'Write your answer here.....', 'Write your answer here.....', '2017-07-11 10:41:59am', 'Ja-PC', 4, 5, 3),
(874, '::1', 'Makati City, Philippines', 'jose rizal', 'Write your answer here.....', 'Write your answer here.....', 'Write your answer here.....', '2017-07-11 04:57:26pm', 'Ja-PC', 2, 1, 5),
(875, '::1', 'Makati City, Philippines', 'jose rizal', 'Write your answer here.....', 'Write your answer here.....', 'Write your answer here.....', '2017-07-11 05:02:19pm', 'Ja-PC', 1, 6, 3),
(876, '::1', 'Makati City, Philippines', 'jose rizal', 'Write your answer here.....', 'Write your answer here.....', 'Write your answer here.....', '2017-07-11 05:02:36pm', 'Ja-PC', 2, 5, 6),
(877, '::1', 'Makati City, Philippines', 'jose rizal', 'Write your answer here.....', 'Write your answer here.....', 'Write your answer here.....', '2017-07-11 05:02:54pm', 'Ja-PC', 2, 1, 6),
(878, '::1', 'Makati City, Philippines', 'jose rizal', 'Write your answer here.....', 'Write your answer here.....', 'Write your answer here.....', '2017-07-11 05:03:13pm', 'Ja-PC', 6, 2, 4),
(879, '::1', 'Makati City, Philippines', 'jose rizal', 'Write your answer here.....', 'Write your answer here.....', 'Write your answer here.....', '2017-07-11 05:04:59pm', 'Ja-PC', 5, 1, 2),
(880, '::1', 'Makati City, Philippines', 'jose rizal', 'Write your answer here.....', 'Write your answer here.....', 'Write your answer here.....', '2017-07-11 05:14:07pm', 'Ja-PC', 6, 1, 2),
(881, '::1', 'Makati City, Philippines', 'jose rizal', 'Write your answer here.....', 'Write your answer here.....', 'Write your answer here.....', '2017-07-11 05:16:22pm', 'Ja-PC', 6, 5, 4),
(882, '::1', 'Makati City, Philippines', 'jose rizal', 'Write your answer here.....', 'Write your answer here.....', 'Write your answer here.....', '2017-07-11 05:16:25pm', 'Ja-PC', 5, 1, 3),
(883, '::1', 'Makati City, Philippines', 'jose rizal', 'Write your answer here.....', 'Write your answer here.....', 'Write your answer here.....', '2017-07-11 05:16:29pm', 'Ja-PC', 1, 5, 3),
(884, '::1', 'Makati City, Philippines', 'jose rizal', 'Write your answer here.....', 'Write your answer here.....', 'Write your answer here.....', '2017-07-11 05:18:48pm', 'Ja-PC', 4, 6, 2),
(885, '::1', 'Makati City, Philippines', 'jose rizal', 'Write your answer here.....', 'Write your answer here.....', 'Write your answer here.....', '2017-07-11 05:18:51pm', 'Ja-PC', 1, 2, 5),
(886, '::1', 'Makati City, Philippines', 'jose rizal', 'Write your answer here.....', 'Write your answer here.....', 'Write your answer here.....', '2017-07-11 05:18:55pm', 'Ja-PC', 2, 6, 1),
(887, '::1', 'Makati City, Philippines', 'jose rizal', 'Write your answer here.....', 'Write your answer here.....', 'Write your answer here.....', '2017-07-11 05:19:22pm', 'Ja-PC', 5, 6, 1),
(888, '::1', 'Makati City, Philippines', 'jose rizal', 'Write your answer here.....', 'Write your answer here.....', 'Write your answer here.....', '2017-07-11 05:19:24pm', 'Ja-PC', 3, 1, 5),
(889, '::1', 'Makati City, Philippines', 'jose rizal', 'Write your answer here.....', 'Write your answer here.....', 'Write your answer here.....', '2017-07-11 05:19:30pm', 'Ja-PC', 6, 2, 4),
(890, '::1', 'Makati City, Philippines', 'jose rizal', 'Write your answer here.....', 'Write your answer here.....', 'Write your answer here.....', '2017-07-11 05:20:41pm', 'Ja-PC', 3, 1, 2),
(891, '::1', 'Makati City, Philippines', 'jose rizal', 'Write your answer here.....', 'Write your answer here.....', 'Write your answer here.....', '2017-07-11 05:24:14pm', 'Ja-PC', 4, 1, 5),
(892, '::1', 'Makati City, Philippines', 'jose rizal', 'Write your answer here.....', 'Write your answer here.....', 'Write your answer here.....', '2017-07-11 05:26:07pm', 'Ja-PC', 2, 1, 6),
(893, '::1', 'Makati City, Philippines', 'jose rizal', 'Write your answer here.....', 'Write your answer here.....', 'Write your answer here.....', '2017-07-11 05:26:19pm', 'Ja-PC', 5, 1, 4),
(894, '::1', 'Makati City, Philippines', 'jose rizal', 'Write your answer here.....', 'Write your answer here.....', 'Write your answer here.....', '2017-07-11 05:48:29pm', 'Ja-PC', 5, 4, 1),
(895, '::1', 'Makati City, Philippines', 'jose rizal', 'Write your answer here.....', 'Write your answer here.....', 'Write your answer here.....', '2017-07-12 09:21:29am', 'Ja-PC', 6, 5, 2),
(896, '::1', 'Makati City, Philippines', 'jose rizal', 'Write your answer here.....', 'Write your answer here.....', 'Write your answer here.....', '2017-07-12 09:22:12am', 'Ja-PC', 3, 6, 5),
(897, '::1', 'Makati City, Philippines', 'jose rizal', 'Write your answer here.....', 'Write your answer here.....', 'Write your answer here.....', '2017-07-12 09:23:47am', 'Ja-PC', 5, 4, 1),
(898, '::1', 'Makati City, Philippines', 'jose rizal', 'Write your answer here.....', 'Write your answer here.....', 'Write your answer here.....', '2017-07-12 09:47:57am', 'Ja-PC', 5, 1, 3),
(899, '::1', 'Makati City, Philippines', 'jose rizal', 'Write your answer here.....', 'Write your answer here.....', 'Write your answer here.....', '2017-07-12 04:39:21pm', 'Ja-PC', 1, 5, 3),
(900, '::1', 'Makati City, Philippines', 'jose rizal', 'Write your answer here.....', 'Write your answer here.....', 'Write your answer here.....', '2017-07-12 04:44:29pm', 'Ja-PC', 6, 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `time_added` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `category`, `time_added`) VALUES
(1, 'Create a program that will print numbers 1 to 20 and determine if number is odd or even', 'PHP', ''),
(2, 'Create a program that will loop numbers 1 to 50 and print all numbers divisible by 3', 'PHP', ''),
(3, 'Create a program that will print numbers 1 to 20 descending format', 'PHP', ''),
(4, 'Create a program that will loop numbers 1 to 100 and print all numbers divisible by 5', 'PHP', ''),
(5, 'Write a PHP program that will print your name 10 times.', 'PHP', ''),
(6, 'Write a PHP program that will print the following pattern: <br>\r\n*<br>\r\n**<br>\r\n***<br>\r\n****<br>\r\n*****', 'PHP', '');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_info`
--

CREATE TABLE `quiz_info` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `date_taken` varchar(255) NOT NULL,
  `ans_key` varchar(255) NOT NULL,
  `answers` varchar(255) NOT NULL,
  `score` varchar(255) NOT NULL,
  `q_ids` varchar(255) NOT NULL,
  `pc_name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `date_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz_info`
--

INSERT INTO `quiz_info` (`id`, `fullname`, `section`, `subject`, `date_taken`, `ans_key`, `answers`, `score`, `q_ids`, `pc_name`, `location`, `date_time`) VALUES
(43, 'jose rizal', 'test', 'html', '2017-07-05 10:11:14 AM', 'a:10:{i:0;s:1:\"d\";i:1;s:1:\"d\";i:2;s:1:\"b\";i:3;s:1:\"a\";i:4;s:1:\"c\";i:5;s:1:\"c\";i:6;s:1:\"c\";i:7;s:1:\"b\";i:8;s:1:\"b\";i:9;s:1:\"b\";}', 'a:10:{i:0;s:1:\"d\";i:1;s:1:\"d\";i:2;s:1:\"b\";i:3;s:1:\"a\";i:4;s:1:\"c\";i:5;s:1:\"c\";i:6;s:1:\"c\";i:7;s:1:\"b\";i:8;s:1:\"b\";i:9;s:1:\"b\";}', '10', 'a:10:{i:0;s:2:\"24\";i:1;s:2:\"23\";i:2;s:2:\"15\";i:3;s:2:\"16\";i:4;s:2:\"27\";i:5;s:2:\"20\";i:6;s:2:\"21\";i:7;s:2:\"17\";i:8;s:2:\"28\";i:9;s:2:\"26\";}', '', '', ''),
(44, 'jose rizal', 'test', 'html', '', 'a:10:{i:0;s:1:\"c\";i:1;s:1:\"c\";i:2;s:1:\"c\";i:3;s:1:\"b\";i:4;s:1:\"a\";i:5;s:1:\"a\";i:6;s:1:\"b\";i:7;s:1:\"b\";i:8;s:1:\"c\";i:9;s:1:\"a\";}', 'a:10:{i:0;s:1:\"c\";i:1;s:1:\"c\";i:2;s:1:\"c\";i:3;s:1:\"b\";i:4;s:1:\"a\";i:5;s:1:\"a\";i:6;s:1:\"c\";i:7;s:1:\"b\";i:8;s:1:\"c\";i:9;s:1:\"a\";}', '9', 'a:10:{i:0;s:2:\"29\";i:1;s:2:\"18\";i:2;s:2:\"27\";i:3;s:2:\"25\";i:4;s:2:\"30\";i:5;s:2:\"22\";i:6;s:2:\"31\";i:7;s:2:\"26\";i:8;s:2:\"21\";i:9;s:2:\"16\";}', '', '', ''),
(45, 'jose rizal', 'test', 'html', '', 'a:10:{i:0;s:1:\"c\";i:1;s:1:\"b\";i:2;s:1:\"a\";i:3;s:1:\"a\";i:4;s:1:\"b\";i:5;s:1:\"d\";i:6;s:1:\"a\";i:7;s:1:\"d\";i:8;s:1:\"b\";i:9;s:1:\"b\";}', 'a:10:{i:0;s:1:\"c\";i:1;s:1:\"b\";i:2;s:1:\"a\";i:3;s:1:\"a\";i:4;s:1:\"b\";i:5;s:1:\"d\";i:6;s:1:\"a\";i:7;s:1:\"d\";i:8;s:1:\"b\";i:9;s:1:\"b\";}', '10', 'a:10:{i:0;s:2:\"21\";i:1;s:2:\"28\";i:2;s:2:\"22\";i:3;s:2:\"30\";i:4;s:2:\"31\";i:5;s:2:\"24\";i:6;s:2:\"19\";i:7;s:2:\"32\";i:8;s:2:\"26\";i:9;s:2:\"25\";}', '', '', ''),
(46, 'jose rizal', 'test', 'html', '2017-07-05 04:48:38 PM', 'a:10:{i:0;s:1:\"d\";i:1;s:1:\"a\";i:2;s:1:\"c\";i:3;s:1:\"d\";i:4;s:1:\"b\";i:5;s:1:\"d\";i:6;s:1:\"a\";i:7;s:1:\"a\";i:8;s:1:\"c\";i:9;s:1:\"b\";}', 'a:10:{i:0;s:1:\"d\";i:1;s:1:\"a\";i:2;s:1:\"c\";i:3;s:1:\"d\";i:4;s:1:\"b\";i:5;s:1:\"d\";i:6;s:1:\"a\";i:7;s:1:\"a\";i:8;s:1:\"c\";i:9;s:1:\"b\";}', '10', 'a:10:{i:0;s:2:\"24\";i:1;s:2:\"19\";i:2;s:2:\"18\";i:3;s:2:\"23\";i:4;s:2:\"17\";i:5;s:2:\"32\";i:6;s:2:\"22\";i:7;s:2:\"16\";i:8;s:2:\"21\";i:9;s:2:\"31\";}', '', '', ''),
(47, 'jose rizal', 'test', 'html', '2017-07-05 04:54:26 PM', 'a:10:{i:0;s:1:\"a\";i:1;s:1:\"c\";i:2;s:1:\"a\";i:3;s:1:\"b\";i:4;s:1:\"c\";i:5;s:1:\"b\";i:6;s:1:\"a\";i:7;s:1:\"c\";i:8;s:1:\"a\";i:9;s:1:\"d\";}', 'a:10:{i:0;s:1:\"a\";i:1;s:1:\"c\";i:2;s:1:\"a\";i:3;s:1:\"b\";i:4;s:1:\"c\";i:5;s:1:\"b\";i:6;s:1:\"a\";i:7;s:1:\"c\";i:8;s:1:\"a\";i:9;s:1:\"d\";}', '10', 'a:10:{i:0;s:2:\"19\";i:1;s:2:\"29\";i:2;s:2:\"16\";i:3;s:2:\"15\";i:4;s:2:\"20\";i:5;s:2:\"28\";i:6;s:2:\"33\";i:7;s:2:\"21\";i:8;s:2:\"30\";i:9;s:2:\"32\";}', '', '', ''),
(48, 'jose rizal', 'test', '', '2017-07-11 05:31:47 PM', 'a:10:{i:0;s:1:\"b\";i:1;s:1:\"c\";i:2;s:1:\"b\";i:3;s:1:\"a\";i:4;s:1:\"a\";i:5;s:1:\"a\";i:6;s:1:\"c\";i:7;s:1:\"a\";i:8;s:1:\"b\";i:9;s:1:\"b\";}', 'a:10:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";}', '0', 'a:10:{i:0;s:2:\"15\";i:1;s:2:\"20\";i:2;s:2:\"17\";i:3;s:2:\"30\";i:4;s:2:\"22\";i:5;s:2:\"19\";i:6;s:2:\"27\";i:7;s:2:\"16\";i:8;s:2:\"31\";i:9;s:2:\"25\";}', '', '', ''),
(49, 'jose rizal', 'test', '', '2017-07-11 05:39:36 PM', 'a:10:{i:0;s:1:\"d\";i:1;s:1:\"c\";i:2;s:1:\"a\";i:3;s:1:\"b\";i:4;s:1:\"b\";i:5;s:1:\"a\";i:6;s:1:\"b\";i:7;s:1:\"c\";i:8;s:1:\"c\";i:9;s:1:\"a\";}', 'a:10:{i:0;s:1:\"c\";i:1;s:1:\"c\";i:2;s:1:\"c\";i:3;s:1:\"c\";i:4;s:1:\"c\";i:5;s:1:\"c\";i:6;s:1:\"c\";i:7;s:1:\"c\";i:8;s:1:\"c\";i:9;s:1:\"c\";}', '3', 'a:10:{i:0;s:2:\"23\";i:1;s:2:\"21\";i:2;s:2:\"19\";i:3;s:2:\"28\";i:4;s:2:\"25\";i:5;s:2:\"30\";i:6;s:2:\"31\";i:7;s:2:\"29\";i:8;s:2:\"27\";i:9;s:2:\"22\";}', '', '', ''),
(50, 'jose rizal', 'test', '', '2017-07-11 05:49:16 PM', 'a:10:{i:0;s:1:\"a\";i:1;s:1:\"b\";i:2;s:1:\"d\";i:3;s:1:\"a\";i:4;s:1:\"c\";i:5;s:1:\"d\";i:6;s:1:\"c\";i:7;s:1:\"b\";i:8;s:1:\"a\";i:9;s:1:\"b\";}', 'a:10:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";}', '0', 'a:10:{i:0;s:2:\"16\";i:1;s:2:\"15\";i:2;s:2:\"23\";i:3;s:2:\"22\";i:4;s:2:\"18\";i:5;s:2:\"24\";i:6;s:2:\"27\";i:7;s:2:\"28\";i:8;s:2:\"19\";i:9;s:2:\"31\";}', '', '', ''),
(51, 'jose rizal', 'test', '', '2017-07-12 09:37:15 AM', 'a:10:{i:0;s:1:\"b\";i:1;s:1:\"a\";i:2;s:1:\"c\";i:3;s:1:\"b\";i:4;s:1:\"d\";i:5;s:1:\"c\";i:6;s:1:\"b\";i:7;s:1:\"b\";i:8;s:1:\"c\";i:9;s:1:\"d\";}', 'a:10:{i:0;s:1:\"c\";i:1;s:1:\"c\";i:2;s:1:\"c\";i:3;s:1:\"c\";i:4;s:1:\"c\";i:5;s:1:\"c\";i:6;s:1:\"c\";i:7;s:1:\"c\";i:8;s:1:\"c\";i:9;s:1:\"c\";}', '3', 'a:10:{i:0;s:2:\"31\";i:1;s:2:\"30\";i:2;s:2:\"21\";i:3;s:2:\"25\";i:4;s:2:\"32\";i:5;s:2:\"18\";i:6;s:2:\"28\";i:7;s:2:\"15\";i:8;s:2:\"20\";i:9;s:2:\"23\";}', 'Ja-PC', '', '2017-07-12 09:37:30am'),
(52, 'jose rizal', 'test', '', '2017-07-12 09:42:18 AM', 'a:10:{i:0;s:1:\"c\";i:1;s:1:\"b\";i:2;s:1:\"a\";i:3;s:1:\"c\";i:4;s:1:\"c\";i:5;s:1:\"d\";i:6;s:1:\"a\";i:7;s:1:\"b\";i:8;s:1:\"d\";i:9;s:1:\"b\";}', 'a:10:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";}', '0', 'a:10:{i:0;s:2:\"18\";i:1;s:2:\"28\";i:2;s:2:\"19\";i:3;s:2:\"21\";i:4;s:2:\"27\";i:5;s:2:\"24\";i:6;s:2:\"30\";i:7;s:2:\"26\";i:8;s:2:\"32\";i:9;s:2:\"17\";}', 'Ja-PC', '', '2017-07-12 09:42:22am'),
(53, 'jose rizal', 'test', '', '2017-07-12 09:45:20 AM', 'a:10:{i:0;s:1:\"c\";i:1;s:1:\"a\";i:2;s:1:\"a\";i:3;s:1:\"a\";i:4;s:1:\"b\";i:5;s:1:\"a\";i:6;s:1:\"c\";i:7;s:1:\"c\";i:8;s:1:\"b\";i:9;s:1:\"b\";}', 'a:10:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";}', '0', 'a:10:{i:0;s:2:\"21\";i:1;s:2:\"33\";i:2;s:2:\"16\";i:3;s:2:\"22\";i:4;s:2:\"25\";i:5;s:2:\"19\";i:6;s:2:\"18\";i:7;s:2:\"20\";i:8;s:2:\"28\";i:9;s:2:\"15\";}', 'Ja-PC', '::1', '2017-07-12 09:46:13am'),
(54, 'jose rizal', 'test', '', '2017-07-12 04:39:52 PM', 'a:10:{i:0;s:1:\"b\";i:1;s:1:\"a\";i:2;s:1:\"b\";i:3;s:1:\"d\";i:4;s:1:\"b\";i:5;s:1:\"d\";i:6;s:1:\"a\";i:7;s:1:\"b\";i:8;s:1:\"b\";i:9;s:1:\"d\";}', 'a:10:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";}', '0', 'a:10:{i:0;s:2:\"15\";i:1;s:2:\"16\";i:2;s:2:\"25\";i:3;s:2:\"24\";i:4;s:2:\"28\";i:5;s:2:\"23\";i:6;s:2:\"30\";i:7;s:2:\"26\";i:8;s:2:\"17\";i:9;s:2:\"32\";}', 'Ja-PC', '::1', '2017-07-12 04:40:53pm');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `middlename`, `section`, `course`, `email`, `status`) VALUES
(1, 'jose', 'rizal', 'd', 'test', 'bsit', 'jarhen20@yahoo.com', 'Active'),
(2, 'test', 'test', 'test', 'test', 'test', 'jarhen20@yahoo.com', ''),
(3, 'w', 'w', 'w', 'w', 'w', 'jarhen20@yahoo.com', 'Active'),
(4, 't', 't', 't', 't', 't', 'jarhen20@yahoo.com', 'Active'),
(5, 'w', 'w', 'w', 'w', 'w', 'jarhen20@yahoo.com', 'Active'),
(9, 'jaime', 'ramos', 'fermanes', 'bsit11', 'bsit', 'jarhen20@yahoo.com', 'Active'),
(10, 'testfname', 'testlname', 'testmanme', 'bsit12', 'bsit', 'jarhen20@yahoo.com', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `multiple_choices`
--
ALTER TABLE `multiple_choices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `myquiz`
--
ALTER TABLE `myquiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_info`
--
ALTER TABLE `quiz_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `multiple_choices`
--
ALTER TABLE `multiple_choices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `myquiz`
--
ALTER TABLE `myquiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=901;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `quiz_info`
--
ALTER TABLE `quiz_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
