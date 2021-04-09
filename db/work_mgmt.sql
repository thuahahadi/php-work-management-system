-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2018 at 01:35 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `genexit`
--

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE IF NOT EXISTS `footer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company` varchar(50) NOT NULL,
  `allright` varchar(100) NOT NULL,
  `contact` varchar(500) NOT NULL,
  `access` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `company`, `allright`, `contact`, `access`) VALUES
(1, 'Company Name Here', 'All right reserved', 'index message content goes here or type html code', 'access message content goes here or type html code');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE IF NOT EXISTS `history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `date` varchar(11) NOT NULL,
  `user` varchar(30) NOT NULL,
  `category` varchar(200) NOT NULL,
  `link` varchar(500) NOT NULL,
  `start_point` varchar(30) NOT NULL,
  `end_point` varchar(30) NOT NULL,
  `quantity` double(10,2) NOT NULL,
  `rate` double(10,2) NOT NULL,
  `start_point_screenshot` varchar(500) NOT NULL,
  `end_point_screenshot` varchar(500) NOT NULL,
  `remark` text NOT NULL,
  `order_date` varchar(50) NOT NULL,
  `average` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `post_id`, `date`, `user`, `category`, `link`, `start_point`, `end_point`, `quantity`, `rate`, `start_point_screenshot`, `end_point_screenshot`, `remark`, `order_date`, `average`) VALUES
(5, 3, '2018-07-04', 'thuaha.hadi', 'youtube', '', '22', '33', 0.50, 2.00, '5751230-', '9571589-', '', '2018-07-04', 1.00),
(6, 3, '2018-07-04', 'thuaha.hadi', 'youtube', 'https://www.facebook.com/', '11', '22', 0.50, 20.00, '5704703-', '6047009-', '', '2018-07-04', 10.00),
(7, 3, '2019-07-04', 'thuaha.hadi', 'wordpress', '', '01', '03', 1.50, 2.00, 'https://facebook.com', 'https://google.com', 'update comment', '2019-09-30', 3.00),
(8, 4, '2018-07-04', 'thuaha', 'soundcloud', '', '0', '5000', 0.50, 2.00, 'https://www.pexels.com/photo/nature-red-love-romantic-67636/', 'https://www.pexels.com/photo/white-and-yellow-flower-with-green-stems-36764/', 'do it', '2018-07-01', 1.00),
(9, 4, '2018-07-05', 'thuaha', 'facebook', 'http://localhost/phpmyadmin/index.php?db=genexit&token=7996f5f5d7d906e27b7ba7d7ca8e48c4', '22', '44', 0.50, 2.00, 'https://www.pexels.com/photo/nature-red-love-romantic-67636/', 'https://www.pexels.com/photo/white-and-yellow-flower-with-green-stems-36764/', 'comment', '2018-07-01', 1.00);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `position` varchar(25) NOT NULL,
  `seen` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `user`, `password`, `date`, `address`, `mobile`, `position`, `seen`) VALUES
(1, 'Admin', 'admin', '2018-06-30', 'aaaa', '01833084652', 'Admin', ' 05-07-18 | Thursday 05:30:06 PM'),
(3, 'thuaha.hadi', '123456', '2018-07-01', 'Uposhahar', '01191815011', 'Admin', ' 04-07-18 | Wednesday 09:04:00 PM'),
(4, 'thuaha', '1', '2018-07-01', 'Sylhet', '01996929809', 'Employee', ' 05-07-18 | Thursday 05:29:51 PM');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ginhalinan` varchar(200) NOT NULL,
  `pakadtoan` varchar(200) NOT NULL,
  `from_member` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `status` varchar(200) NOT NULL,
  `file` varchar(5000) NOT NULL,
  `type` varchar(30) NOT NULL,
  `size` int(15) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tuaha` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `ginhalinan`, `pakadtoan`, `from_member`, `content`, `status`, `file`, `type`, `size`, `created`, `tuaha`) VALUES
(1, '1', '3', '', 'hello', 'read', '1126617-', '', 0, '2018-07-04 14:48:01', ''),
(2, '3', '1', '', 'hi', 'read', '', '', 0, '2018-07-04 15:02:28', ''),
(3, '1', '3', '', 'how are you', 'read', '', '', 0, '2018-07-04 15:02:56', ''),
(4, '3', '1', '', 'i am fine', 'read', '', '', 0, '2018-07-04 15:03:42', ''),
(5, '3', '8', '', 'hi', 'unread', '3427896-', '', 0, '2018-07-04 15:04:43', ''),
(6, '4', '3', '', 'how', 'read', '915734-', '', 0, '2018-07-04 15:06:01', ''),
(7, '3', '4', '', 'hello', 'read', '', '', 0, '2018-07-04 15:06:23', ''),
(8, '4', '3', '', 'nice', 'read', '', '', 0, '2018-07-04 15:06:45', ''),
(9, '3', '4', '', 'tnq', 'read', '', '', 0, '2018-07-04 15:07:04', ''),
(10, '4', '3', '', '', 'read', '6738571-17499511_10206906056288910_4824417170477629886_n.jpg', 'image/jpeg', 0, '2018-07-04 15:07:26', ''),
(11, '4', '3', '', 'chq', 'read', '', '', 0, '2018-07-04 15:07:40', ''),
(12, '4', '3', '', 'with image', 'read', '2900085-36411742_2318809888345576_1421567650227552256_n-copy.jpg', 'image/jpeg', 0, '2018-07-04 15:08:52', ''),
(13, '4', '3', '', 'hi', 'read', '2723041-', '', 0, '2018-07-04 15:19:26', ''),
(14, '4', '3', '', '', 'unread', '8519291-', '', 0, '2018-07-04 15:24:55', ''),
(15, '4', '3', '', 'con', 'read', '5318286-20180703_224640.jpg', 'image/jpeg', 9, '2018-07-04 15:25:11', ''),
(16, '3', '4', '', 'good', 'unread', '', '', 0, '2018-07-04 15:25:40', '');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `date` varchar(50) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `status` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `user_id`, `user_name`, `date`, `amount`, `status`) VALUES
(7, 3, 'thuaha.hadi', ' 04-07-18 | Wednesday 03:05:55', 6.00, 'payment send by bkash'),
(8, 3, 'thuaha.hadi', ' 05-07-18 | Thursday 04:56:16 PM', 1.00, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
