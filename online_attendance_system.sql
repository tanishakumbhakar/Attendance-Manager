-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2018 at 04:49 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `online_attendance_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `pass`) VALUES
(1, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stu_id` int(11) NOT NULL,
  `super_id` varchar(50) NOT NULL,
  `attendance` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `stu_id`, `super_id`, `attendance`, `Date`) VALUES
(14, 35, '35', 'P', '2016-09-09'),
(12, 35, '35', 'P', '2016-09-07'),
(13, 42, '38', 'A', '2016-09-06'),
(15, 35, '35', 'P', '2016-09-08'),
(16, 40, '35', 'P', '2016-09-08'),
(17, 35, '42', 'P', '2016-10-24'),
(18, 42, '42', 'P', '2016-10-24'),
(19, 41, '42', 'P', '2016-10-24'),
(30, 37, '36', 'P', '2016-12-12'),
(28, 41, '35', 'A', '2016-12-12'),
(27, 40, '35', 'A', '2016-12-12'),
(26, 35, '35', 'P', '2016-12-12'),
(25, 37, '35', 'A', '2016-12-12'),
(31, 35, '36', 'P', '2016-12-12'),
(32, 39, '36', 'P', '2016-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(8, 'Digital Marketingggg'),
(9, 'Embedded System'),
(11, 'VLSI'),
(12, 'Networking'),
(13, 'HR'),
(14, 'SEO and DM');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `user_name`, `email`, `mobile`, `message`, `date`) VALUES
(9, 'tfaef', 'fdgs@g', 55555555555, 'ggggggjjjj', '2016-02-18'),
(7, 'Jay', 'jay@gmail.com', 6896, 'wwww', '2016-02-15'),
(10, 'jamal', 'fhf7@gmail.com', 989999898898979878, 'gkjgkjgkjgkgk', '2016-02-19');

-- --------------------------------------------------------

--
-- Table structure for table `inbox_student`
--

CREATE TABLE IF NOT EXISTS `inbox_student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `instructor_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `inbox_student`
--

INSERT INTO `inbox_student` (`id`, `instructor_id`, `student_id`, `subject`, `message`, `date`) VALUES
(1, 39, 42, 'dfdf', 'dfd', '2016-12-16'),
(2, 35, 42, 'dfdf', 'dfdfd', '2016-12-16'),
(3, 35, 42, 'dfdf', 'dfdfd', '2016-12-16');

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE IF NOT EXISTS `instructor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `mob` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `program` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`id`, `name`, `email`, `pass`, `mob`, `gender`, `program`, `course`, `status`) VALUES
(39, 'D', 'd@gmail.com', '*84869AED8A7235127BFD0AD4A55E335B29ADE3AD', '7777777', 'f', 'B.Tech', '8', '1'),
(38, 'c', 'c@gmail.com', '*FDD369C6B7C3C64C7C07EDE4DC5C01BF8970B24D', '777777', 'f', 'B.Tech', '12', '1'),
(35, 'abhi', 'abhi@gmail.com', '*2AAE74CF81A07013E73B4A6D4083D516B75E7DFC', '87878', 'm', 'M.Tech', '8', '0'),
(36, 'a', 'a@gmail.com', '*667F407DE7C6AD07358FA38DAED7828A72014B4E', '87878', 'm', 'M.Tech', '11', '0'),
(40, 'abc', 'sanjeevtech2@gmail.com', '*DEE59C300700AF9B586F9F2A702231C0AC373A13', '878', 'f', 'B.Tech', '8', '1'),
(41, 'v', 'sanjeevtech@gmail.com', '*4A0B1427095D40FC3B52D25EA0BF2D81B3CCFACC', '5466', 'f', 'B.Tech', '8', '1'),
(42, 'ankit', 'ankit@gmail.com', '*41DAF202F790E1188502ED4083CEBB2E4F0553B4', '9015501897', 'm', 'B.Tech', '8', '0'),
(43, 'apex', 'apex@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '9015501897', 'm', 'M.Tech', '8,9,11,12,13,14', '0');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin` varchar(50) NOT NULL,
  `Instructor` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `notification` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `admin`, `Instructor`, `subject`, `notification`, `date`) VALUES
(23, 'admin@gmail.com', 'abhi@gmail.com', 'dfdf', 'dfdf', '2016-09-08'),
(22, 'admin@gmail.com', 'abhi@gmail.com', 'aaaaaaaaaaad', 'dddddddddd', '2016-09-07');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE IF NOT EXISTS `results` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `instructor_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `marks` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `instructor_id`, `student_id`, `subject`, `marks`) VALUES
(29, 42, 37, 'PHP', '50'),
(28, 35, 42, 'MYSLI', '98'),
(27, 35, 42, 'PHP', '901'),
(30, 42, 39, 'HTML', '60');

-- --------------------------------------------------------

--
-- Table structure for table `sent_student`
--

CREATE TABLE IF NOT EXISTS `sent_student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `instructor_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `sent_student`
--

INSERT INTO `sent_student` (`id`, `instructor_id`, `student_id`, `subject`, `message`, `date`) VALUES
(27, 0, 39, 'dddddd', 'dddfdfdf', '2016-12-16'),
(26, 35, 42, 'dfdf', 'dfdf', '2016-12-16'),
(25, 35, 37, 'dfdf', 'dfdf', '2016-12-16');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `mob` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `program` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `pass`, `mob`, `gender`, `program`, `course`, `status`) VALUES
(37, 'anil', 'anil@gmail.com', '*2819F697CD80083C80CF132CBCF15EE01FE2E9C0', '444444444444', 'f', 'B.Tech', '11,8', '1'),
(35, 'sanjeev kuma', 'sanjeevtech2@gmail.com', '*DEFD6B8B269A17AFE1E7C49BCCD2FFF5EDD4BE17', '9015501897', 'm', 'B.Tech', '8,11', '0'),
(38, 'ritesh', 'ritesh@gmai.com', '*A9E1FE4922E312DB599505E7AF370F4BE00715AE', '8787878', 'f', 'BCA', '9', '1'),
(39, 'shiv', 'shiv@gmail.com', '*2AAE74CF81A07013E73B4A6D4083D516B75E7DFC', '9898989898', 'f', 'B.Tech', '11', '1'),
(40, 'rajan', 'rajan@gmail.com', '*4D3F8833B171513C60DCD5327B0AE5FBB200A39B', '888888', 'f', 'MCA', '8', '1'),
(41, 'phptpoint', 'phptpoint@gmail.com', '*8F5FF90079BC601F8EA7C148475658E65A0C029D', '9015501899', 'm', 'M.Tech', '8', '0'),
(42, 'apex', 'apex@gmail.com', '*E30D3C48D31D7935BAF288790D8610E0ABC87B53', '9015501897', 'm', 'M.Tech', '8,11', '0'),
(43, 'admin', 'apex1@gmail.com', '*DEE59C300700AF9B586F9F2A702231C0AC373A13', '877878', 'm', 'B.Tech', '', '0'),
(44, 'admin', 'apex2@gmail.com', '*A02AA727CF2E8C5E6F07A382910C4028D65A053A', '998888', 'm', 'B.Tech', '', '0'),
(45, 'admin', 'apex3@gmail.com', '*E30D3C48D31D7935BAF288790D8610E0ABC87B53', '9015501897', 'm', 'M.Tech', '', '0'),
(46, 'final', 'a@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '8787', 'm', 'B.Tech', '8,9', '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
