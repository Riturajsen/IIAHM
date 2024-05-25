-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2024 at 07:20 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iiahm`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentdetails`
--

CREATE TABLE `studentdetails` (
  `id` int(11) NOT NULL,
  `filesource` varchar(20) NOT NULL,
  `category` text NOT NULL,
  `institute` varchar(100) DEFAULT NULL,
  `fname` varchar(255) NOT NULL,
  `locationn` text NOT NULL,
  `contactno` varchar(255) NOT NULL,
  `parentscontactno` varchar(255) NOT NULL,
  `classname` varchar(255) NOT NULL,
  `allotedTo` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `followup` varchar(255) NOT NULL,
  `comingOn` varchar(255) NOT NULL,
  `cometime` varchar(50) DEFAULT NULL,
  `counselor` varchar(255) NOT NULL,
  `age` int(5) NOT NULL,
  `weight` int(5) NOT NULL,
  `height` int(5) NOT NULL,
  `bmi` int(5) NOT NULL,
  `sms` varchar(255) NOT NULL,
  `updateforcalling` varchar(255) NOT NULL,
  `seminarattended` varchar(255) NOT NULL,
  `Slottime` datetime NOT NULL,
  `modified` text DEFAULT NULL,
  `comment` text NOT NULL,
  `callHistory` text NOT NULL,
  `addedOn` date NOT NULL DEFAULT current_timestamp(),
  `called` enum('0','1') NOT NULL DEFAULT '0',
  `TimeCalled` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentdetails`
--

INSERT INTO `studentdetails` (`id`, `filesource`, `category`, `institute`, `fname`, `locationn`, `contactno`, `parentscontactno`, `classname`, `allotedTo`, `status`, `followup`, `comingOn`, `cometime`, `counselor`, `age`, `weight`, `height`, `bmi`, `sms`, `updateforcalling`, `seminarattended`, `Slottime`, `modified`, `comment`, `callHistory`, `addedOn`, `called`, `TimeCalled`) VALUES
(1, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'No name', 'BHOPAL ', '7828480223', '', 'MIXED STREAM ', '18', 'pending', '2024-05-18', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 03:46:04 PM', '17/May/2024 =>Pic & cut \n', '', '2024-05-17', '1', 1),
(2, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'No name ', 'BHOPAL ', '9343668206', '', 'MIXED STREAM ', '18', 'pending', '2024-05-18', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 03:50:47 PM', '17/May/2024 =>Nr\n', '', '2024-05-17', '1', 1),
(3, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'Alka sahu ', 'BHOPAL ', '9713182838', '', 'MIXED STREAM ', '18', 'follow_up', '2024-05-20', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 03:52:04 PM', '17/May/2024 =>Visit krungi bt abhi dekhungi time milega to \n', '', '2024-05-17', '1', 1),
(4, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'Hemlta ', 'BHOPAL ', '9111397328', '', 'MIXED STREAM ', '18', 'pending', '', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 04:04:12 PM', '17/May/2024 =>Cnc \n', '', '2024-05-17', '1', 1),
(5, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'No name ', 'BHOPAL ', '9301731340', '', 'MIXED STREAM ', '18', 'pending', '', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 04:05:31 PM', '17/May/2024 =>Sewa me nhi h \n', '', '2024-05-17', '1', 1),
(6, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'Dipak ', 'BHOPAL ', '7620110564', '', 'MIXED STREAM ', '18', 'pending', '2024-05-18', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 04:06:47 PM', '17/May/2024 =>Pic & cut \n', '', '2024-05-17', '1', 1),
(7, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'No name ', 'BHOPAL ', '7049575530', '', 'MIXED STREAM ', '18', 'negetive', '', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 04:08:36 PM', '17/May/2024 =>Not interested\n', '', '2024-05-17', '1', 1),
(8, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', '', 'BHOPAL ', '6263566712', '', 'MIXED STREAM ', '18', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 04:10:06 PM', '', '', '2024-05-17', '1', 1),
(9, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'Ravi ', 'BHOPAL ', '6262490569', '', 'MIXED STREAM ', '18', 'interested', '2024-05-18', '2024-05-18', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 04:13:29 PM', '17/May/2024 =>\n', '', '2024-05-17', '1', 1),
(10, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'Rambabu', 'BHOPAL ', '6268011997', '', 'MIXED STREAM ', '18', 'pending', '2024-05-18', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 04:23:33 PM', '17/May/2024 =>Nr\n', '', '2024-05-17', '1', 1),
(11, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'Mukesh kushwah ', 'BHOPAL ', '7000400838', '', 'MIXED STREAM ', '18', 'negetive', '', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 04:24:19 PM', '17/May/2024 =>Already job me technical se related job hoto btana \n', '', '2024-05-17', '1', 1),
(12, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'Pramod solanki ', 'BHOPAL ', '7447033790', '', 'MIXED STREAM ', '18', 'interested', '2024-05-18', '2024-05-18', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 04:32:45 PM', '17/May/2024 =>\n', '', '2024-05-17', '1', 1),
(13, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'Ritika vishwakarma', 'BHOPAL ', '9303639267', '', 'MIXED STREAM ', '18', 'pending', '2024-05-18', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 04:42:10 PM', '17/May/2024 =>S. Off\n', '', '2024-05-17', '1', 1),
(14, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'Rajesh saket ', 'BHOPAL ', '7000014159', '', 'MIXED STREAM ', '18', 'pending', '2024-05-18', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 04:43:15 PM', '17/May/2024 =>Nr \n', '', '2024-05-17', '1', 1),
(15, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'No name ', 'BHOPAL ', '9507972781', '', 'MIXED STREAM ', '18', 'negetive', '', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 04:45:54 PM', '17/May/2024 =>Pic & hearing all information & cut call \n', '', '2024-05-17', '1', 1),
(16, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'Jitndra chouhan', 'BHOPAL ', '8815867541', '', 'MIXED STREAM ', '18', 'pending', '2024-05-18', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 04:53:06 PM', '17/May/2024 =>S. Off \r\n\n', '', '2024-05-17', '1', 1),
(17, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'No name ', 'BHOPAL ', '8235266934', '', 'MIXED STREAM ', '18', 'pending', '2024-05-18', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 04:54:00 PM', '17/May/2024 =>Incoming off \r\n\n', '', '2024-05-17', '1', 1),
(18, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'Som gupta ', 'BHOPAL ', '9171856752', '', 'MIXED STREAM ', '18', 'pending', '2024-05-18', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 04:54:55 PM', '17/May/2024 =>Hearing all information & cut call nr again \n', '', '2024-05-17', '1', 1),
(19, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'No name', 'BHOPAL ', '7389391183', '', 'MIXED STREAM ', '18', 'pending', '2024-05-18', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 05:00:46 PM', '17/May/2024 =>Cnc \n', '', '2024-05-17', '1', 1),
(20, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'Mohini gupta ', 'BHOPAL ', '6200714110', '', 'MIXED STREAM ', '18', 'pending', '2024-05-18', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 05:03:45 PM', '17/May/2024 =>Nr \n', '', '2024-05-17', '1', 1),
(21, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'Abhishek ', 'BHOPAL ', '6201361977', '', 'MIXED STREAM ', '20', 'follow_up', '2024-05-18', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 12:46:16 PM', '17/May/2024 =>Cnfrm tomorrow \n', '', '2024-05-17', '1', 1),
(22, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'Sandeep Kumar ', 'BHOPAL ', '6201632087', '', 'MIXED STREAM ', '20', 'negetive', '', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 12:47:34 PM', '17/May/2024 =>Placement \n', '', '2024-05-17', '1', 1),
(23, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'Payal', 'BHOPAL ', '6201966015', '', 'MIXED STREAM ', '20', 'interested', '', '2024-05-20', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 12:51:22 PM', '17/May/2024 =>\n', '', '2024-05-17', '1', 1),
(24, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'Unknown ', 'BHOPAL ', '6202366985', '', 'MIXED STREAM ', '20', 'negetive', '', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 12:57:36 PM', '17/May/2024 =>Not interested \n', '', '2024-05-17', '1', 1),
(25, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'Kishan ', 'BHOPAL ', '6203079083', '', 'MIXED STREAM ', '20', 'follow_up', '', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 01:40:37 PM', '17/May/2024 =>Visit after exam\n', '', '2024-05-17', '1', 2),
(26, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'Adarsh', 'BHOPAL ', '6203285952', '', 'MIXED STREAM ', '20', 'negetive', '', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 01:41:56 PM', '17/May/2024 =>Already placed\n', '', '2024-05-17', '1', 1),
(27, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'Vishv Chourasia ', 'BHOPAL ', '6204374988', '', 'MIXED STREAM ', '20', 'follow_up', '', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 01:44:40 PM', '17/May/2024 =>Call back after sometime \n', '', '2024-05-17', '1', 1),
(28, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'Unknown ', 'BHOPAL ', '6204675730', '', 'MIXED STREAM ', '20', 'pending', '', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 01:48:41 PM', '17/May/2024 =>Call not received \n', '', '2024-05-17', '1', 1),
(29, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'Ritesh', 'BHOPAL ', '6205200964', '', 'MIXED STREAM ', '20', 'negetive', '', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 01:50:42 PM', '17/May/2024 =>Not interested \n', '', '2024-05-17', '1', 1),
(30, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'Unknown ', 'BHOPAL ', '6206371789', '', 'MIXED STREAM ', '20', 'negetive', '', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 01:54:09 PM', '17/May/2024 =>Call cut during talking \n', '', '2024-05-17', '1', 1),
(31, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'Abhishek', 'BHOPAL ', '6207896922', '', 'MIXED STREAM ', '20', 'negetive', '', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 01:56:41 PM', '17/May/2024 =>Not interested \n', '', '2024-05-17', '1', 1),
(32, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'Anuj', 'BHOPAL ', '6260653329', '', 'MIXED STREAM ', '20', 'follow_up', '', '2024-05-18', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 01:59:33 PM', '17/May/2024 =>Cnfrm tomorrow \n', '', '2024-05-17', '1', 1),
(33, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'Unknown ', 'BHOPAL ', '6261017536', '', 'MIXED STREAM ', '20', 'visited', '', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 02:05:40 PM', '17/May/2024 =>Already visited \n', '', '2024-05-17', '1', 1),
(34, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'Unknown ', 'BHOPAL ', '6261319132', '', 'MIXED STREAM ', '20', 'negetive', '', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 02:12:09 PM', '17/May/2024 =>Already in job\n', '', '2024-05-17', '1', 1),
(35, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'Unknown ', 'BHOPAL ', '6261630598', '', 'MIXED STREAM ', '20', 'follow_up', '', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 02:17:08 PM', '17/May/2024 =>Hold the call\n', '', '2024-05-17', '1', 1),
(36, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'Unknown ', 'BHOPAL ', '6262684486', '', 'MIXED STREAM ', '20', 'negetive', '', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 02:21:19 PM', '17/May/2024 =>Already in job\n', '', '2024-05-17', '1', 1),
(37, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'Bhawna', 'BHOPAL ', '6262851358', '', 'MIXED STREAM ', '20', 'negetive', '', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 02:24:29 PM', '17/May/2024 =>Pass out , searching for job\n', '', '2024-05-17', '1', 1),
(38, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'Unknown ', 'BHOPAL ', '6263101158', '', 'MIXED STREAM ', '20', 'negetive', '', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 02:28:24 PM', '17/May/2024 =>Already in job \n', '', '2024-05-17', '1', 1),
(39, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'Unknown ', 'BHOPAL ', '6263121758', '', 'MIXED STREAM ', '20', 'pending', '', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 02:32:16 PM', '17/May/2024 =>\n', '', '2024-05-17', '1', 1),
(40, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'Unknown ', 'BHOPAL ', '6263124201', '', 'MIXED STREAM ', '20', 'follow_up', '', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 02:39:07 PM', '17/May/2024 =>Call back in evening \n', '', '2024-05-17', '1', 1),
(41, 'UDAAN', 'COLLAGE ', 'PATEL GROUP OF INSTITUTE', 'Prafull', 'BHOPAL ', '8827589847', '', 'MIXED STREAM ', '21', 'pending', '2024-05-20', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 03:47:44 PM', '17/May/2024 =>Hold\n', '', '2024-05-17', '1', 1),
(42, 'UDAAN', 'COLLAGE ', 'PATEL GROUP OF INSTITUTE', 'Ravi', 'BHOPAL ', '9065714515', '', 'MIXED STREAM ', '21', 'interested', '', '2024-05-17', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 03:51:57 PM', '17/May/2024 =>Aj visit karege \n', '', '2024-05-17', '1', 1),
(43, 'UDAAN', 'COLLAGE ', 'PATEL GROUP OF INSTITUTE', 'Salman', 'BHOPAL ', '9113479148', '', 'MIXED STREAM ', '21', 'negetive', '', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 03:53:52 PM', '17/May/2024 =>NOT INTERESTED \n', '', '2024-05-17', '1', 1),
(44, 'UDAAN', 'COLLAGE ', 'PATEL GROUP OF INSTITUTE', 'No name', 'BHOPAL ', '9123496303', '', 'MIXED STREAM ', '21', 'pending', '2024-05-18', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 03:57:56 PM', '17/May/2024 =>Call not receive \n', '', '2024-05-17', '1', 1),
(45, 'UDAAN', 'COLLAGE ', 'PATEL GROUP OF INSTITUTE', 'No name', 'BHOPAL ', '9131515605', '', 'MIXED STREAM ', '21', 'pending', '2024-05-18', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 04:02:56 PM', '17/May/2024 =>Busy \n', '', '2024-05-17', '1', 1),
(46, 'UDAAN', 'COLLAGE ', 'PATEL GROUP OF INSTITUTE', '', 'BHOPAL ', '9131732376', '', 'MIXED STREAM ', '21', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 04:04:08 PM', '', '', '2024-05-17', '1', 1),
(47, 'UDAAN', 'COLLAGE ', 'PATEL GROUP OF INSTITUTE', 'Preeti', 'BHOPAL ', '9135341300', '', 'MIXED STREAM ', '21', 'negetive', '', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 04:13:36 PM', '17/May/2024 =>Ni aana\n', '', '2024-05-17', '1', 1),
(48, 'UDAAN', 'COLLAGE ', 'PATEL GROUP OF INSTITUTE', 'Adarsh ', 'BHOPAL ', '8359842418', '', 'MIXED STREAM ', '21', 'interested', '2024-05-25', '2024-05-25', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 04:14:23 PM', '17/May/2024 =>25 ko visit karege \n', '', '2024-05-17', '1', 1),
(49, 'UDAAN', 'COLLAGE ', 'PATEL GROUP OF INSTITUTE', 'Aditya ', 'BHOPAL ', '8434225748', '', 'MIXED STREAM ', '21', 'pending', '2024-05-18', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 04:43:38 PM', '17/May/2024 =>Call after sometime \n', '', '2024-05-17', '1', 2),
(50, 'UDAAN', 'COLLAGE ', 'PATEL GROUP OF INSTITUTE', 'No name ', 'BHOPAL ', '8435083121', '', 'MIXED STREAM ', '21', 'pending', '2024-05-18', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 04:16:33 PM', '17/May/2024 =>Not receive \n', '', '2024-05-17', '1', 1),
(51, 'UDAAN', 'COLLAGE ', 'PATEL GROUP OF INSTITUTE', 'No name', 'BHOPAL ', '8436518795', '', 'MIXED STREAM ', '21', 'pending', '2024-05-18', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 04:27:04 PM', '17/May/2024 =>Busy in another call\n', '', '2024-05-17', '1', 1),
(52, 'UDAAN', 'COLLAGE ', 'PATEL GROUP OF INSTITUTE', 'Shriti', 'BHOPAL ', '8450083656', '', 'MIXED STREAM ', '21', 'follow_up', '2024-05-18', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 04:28:26 PM', '17/May/2024 =>Kal batayge kab aayge \n', '', '2024-05-17', '1', 1),
(53, 'UDAAN', 'COLLAGE ', 'PATEL GROUP OF INSTITUTE', 'No name ', 'BHOPAL ', '8518960818', '', 'MIXED STREAM ', '21', 'pending', '', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 04:34:52 PM', '17/May/2024 =>Not receive \n', '', '2024-05-17', '1', 1),
(54, 'UDAAN', 'COLLAGE ', 'PATEL GROUP OF INSTITUTE', 'Sonu kumar ', 'BHOPAL ', '8603104754', '', 'MIXED STREAM ', '21', 'follow_up', '2024-05-20', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 04:39:20 PM', '17/May/2024 =>Monday ko aa sakte h call karna h \n', '', '2024-05-17', '1', 1),
(55, 'UDAAN', 'COLLAGE ', 'PATEL GROUP OF INSTITUTE', 'Vishal', 'BHOPAL ', '8651833133', '', 'MIXED STREAM ', '21', 'follow_up', '2024-11-01', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 04:45:25 PM', '17/May/2024 =>November bhopal aayge\n', '', '2024-05-17', '1', 1),
(56, 'UDAAN', 'COLLAGE ', 'PATEL GROUP OF INSTITUTE', 'Abhishek ', 'BHOPAL ', '8719967103', '', 'MIXED STREAM ', '21', 'follow_up', '2024-05-25', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 04:48:56 PM', '17/May/2024 =>Next weak bhopal aayge\n', '', '2024-05-17', '1', 1),
(57, 'UDAAN', 'COLLAGE ', 'PATEL GROUP OF INSTITUTE', 'Pawan', 'BHOPAL ', '8736991953', '', 'MIXED STREAM ', '21', 'follow_up', '2024-07-01', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 04:52:39 PM', '17/May/2024 =>July me bhopal aayge\n', '', '2024-05-17', '1', 1),
(58, 'UDAAN', 'COLLAGE ', 'PATEL GROUP OF INSTITUTE', '', 'BHOPAL ', '8269425160', '', 'MIXED STREAM ', '21', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '18 May 2024 01:15:12 PM', '', '', '2024-05-17', '1', 1),
(59, 'UDAAN', 'COLLAGE ', 'PATEL GROUP OF INSTITUTE', '', 'BHOPAL ', '8271196675', '', 'MIXED STREAM ', '21', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-05-17', '0', 0),
(60, 'UDAAN', 'COLLAGE ', 'PATEL GROUP OF INSTITUTE', '', 'BHOPAL ', '8294465067', '', 'MIXED STREAM ', '21', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-05-17', '0', 0),
(61, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'Mohit', 'BHOPAL ', '6263208220', '', 'MIXED STREAM ', '19', 'follow_up', '2024-05-17', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 03:53:07 PM', '17/May/2024 =>Brother consult\n', '', '2024-05-17', '1', 1),
(62, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'Ankit', 'BHOPAL ', '6263394426', '', 'MIXED STREAM ', '19', 'interested', '2024-05-18', '2024-05-24', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 03:59:57 PM', '17/May/2024 =>Next Friday come 24 may \n', '', '2024-05-17', '1', 1),
(63, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'No name', 'BHOPAL ', '6263606853', '', 'MIXED STREAM ', '19', 'pending', '2024-05-18', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 04:05:13 PM', '17/May/2024 =>Not receive\n', '', '2024-05-17', '1', 1),
(64, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'No name', 'BHOPAL ', '6264201227', '', 'MIXED STREAM ', '19', 'pending', '2024-05-18', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 04:06:22 PM', '17/May/2024 =>Busy\n', '', '2024-05-17', '1', 1),
(65, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'Suru Soni', 'BHOPAL ', '6264407294', '', 'MIXED STREAM ', '19', 'interested', '2024-05-20', '2024-05-20', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 04:07:20 PM', '17/May/2024 =>Monday visit 12 pm\n', '', '2024-05-17', '1', 1),
(66, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'Shruti', 'BHOPAL ', '6264558987', '', 'MIXED STREAM ', '19', 'interested', '2024-05-18', '2024-05-18', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 04:16:21 PM', '17/May/2024 =>18 may 1 pm visit\n', '', '2024-05-17', '1', 1),
(67, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'Balkarishan', 'BHOPAL ', '6264592950', '', 'MIXED STREAM ', '19', 'interested', '2024-05-18', '2024-05-18', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 04:30:58 PM', '17/May/2024 =>18 may 5 pm\n', '', '2024-05-17', '1', 1),
(68, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'No name', 'BHOPAL ', '6265178810', '', 'MIXED STREAM ', '19', 'pending', '2024-05-18', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 04:38:14 PM', '17/May/2024 =>Not receive\n', '', '2024-05-17', '1', 1),
(69, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'No name', 'BHOPAL ', '6265283808', '', 'MIXED STREAM ', '19', 'pending', '2024-05-18', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 04:39:38 PM', '17/May/2024 =>Not receive\n', '', '2024-05-17', '1', 1),
(70, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'Shubham', 'BHOPAL ', '6265398074', '', 'MIXED STREAM ', '19', 'interested', '2024-05-25', '2024-05-25', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 04:40:43 PM', '17/May/2024 =>25 may call confirmation\n', '', '2024-05-17', '1', 1),
(71, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'Himanshu', 'BHOPAL ', '6265580031', '', 'MIXED STREAM ', '19', 'interested', '2024-05-20', '2024-05-20', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 04:47:11 PM', '17/May/2024 =>Monday visit 20 may\n', '', '2024-05-17', '1', 1),
(72, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'No name', 'BHOPAL ', '6265724973', '', 'MIXED STREAM ', '19', 'negetive', '', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 04:54:49 PM', '17/May/2024 =>Cut the call while talking\n', '', '2024-05-17', '1', 1),
(73, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'No name', 'BHOPAL ', '6266349419', '', 'MIXED STREAM ', '19', 'pending', '2024-05-18', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 04:57:34 PM', '17/May/2024 =>Not receive\n', '', '2024-05-17', '1', 1),
(74, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'No name', 'BHOPAL ', '6266486221', '', 'MIXED STREAM ', '19', 'pending', '2024-05-18', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 04:58:52 PM', '17/May/2024 =>Not receive\n', '', '2024-05-17', '1', 1),
(75, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'Abhishesh', 'BHOPAL ', '6268045939', '', 'MIXED STREAM ', '19', 'visited', '', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 05:00:18 PM', '17/May/2024 =>Already visited\n', '', '2024-05-17', '1', 1),
(76, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'No name', 'BHOPAL ', '6268570288', '', 'MIXED STREAM ', '19', 'pending', '', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 05:09:24 PM', '17/May/2024 =>Not receive\n', '', '2024-05-17', '1', 1),
(77, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'No name', 'BHOPAL ', '6268765759', '', 'MIXED STREAM ', '19', 'negetive', '', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 05:11:00 PM', '17/May/2024 =>Cut the call after hearing Iiahm\n', '', '2024-05-17', '1', 1),
(78, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'Harshita', 'BHOPAL ', '6269582895', '', 'MIXED STREAM ', '19', 'pending', '2024-05-18', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 05:12:09 PM', '17/May/2024 =>Not receive\n', '', '2024-05-17', '1', 1),
(79, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'No name', 'BHOPAL ', '6299503252', '', 'MIXED STREAM ', '19', 'pending', '2024-05-18', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 05:13:15 PM', '17/May/2024 =>Not receive\n', '', '2024-05-17', '1', 1),
(80, 'UDAAN', 'COLLAGE ', 'LAXMIPATI INSTITUDE ', 'Hanni', 'BHOPAL ', '6306205314', '', 'MIXED STREAM ', '19', 'negetive', '', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 05:14:20 PM', '17/May/2024 =>Not intrested in this field\n', '', '2024-05-17', '1', 1),
(81, 'UDAAN', 'COLLAGE ', 'PATEL GROUP OF INSTITUTE', 'Manish Kumar ', 'BHOPAL ', '8294974593', '', 'MIXED STREAM ', '22', 'pending', '2024-05-17', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 03:47:43 PM', '17/May/2024 =>Call cut \n', '', '2024-05-20', '1', 1),
(82, 'UDAAN', 'COLLAGE ', 'PATEL GROUP OF INSTITUTE', 'Kuldeep ', 'BHOPAL ', '8298779899', '', 'MIXED STREAM ', '22', 'negetive', '', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 03:51:11 PM', '17/May/2024 =>Negative \n', '', '2024-05-17', '1', 1),
(83, 'UDAAN', 'COLLAGE ', 'PATEL GROUP OF INSTITUTE', 'Sahil', 'BHOPAL ', '8298858807', '', 'MIXED STREAM ', '22', 'follow_up', '', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 03:57:20 PM', '17/May/2024 =>Evening meine confirm \n', '', '2024-05-17', '1', 1),
(84, 'UDAAN', 'COLLAGE ', 'PATEL GROUP OF INSTITUTE', 'Ashutosh ', 'BHOPAL ', '8317741834', '', 'MIXED STREAM ', '22', 'pending', '', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 04:06:22 PM', '17/May/2024 =>Not answering \n', '', '2024-05-20', '1', 1),
(85, 'UDAAN', 'COLLAGE ', 'PATEL GROUP OF INSTITUTE', 'Priyanshu ', 'BHOPAL ', '7970407490', '', 'MIXED STREAM ', '22', 'pending', '2024-05-17', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 04:16:20 PM', '17/May/2024 =>\n', '', '2024-05-17', '1', 1),
(86, 'UDAAN', 'COLLAGE ', 'PATEL GROUP OF INSTITUTE', 'Mohit ', 'BHOPAL ', '7982415324', '', 'MIXED STREAM ', '22', 'follow_up', '', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 04:17:15 PM', '17/May/2024 =>Last june maina Anna hugga next season attend karega \n', '', '2024-05-17', '1', 1),
(87, 'UDAAN', 'COLLAGE ', 'PATEL GROUP OF INSTITUTE', 'No name ', 'BHOPAL ', '7987322063', '', 'MIXED STREAM ', '22', 'pending', '', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 04:22:13 PM', '17/May/2024 =>Not answering \n', '', '2024-05-17', '1', 1),
(88, 'UDAAN', 'COLLAGE ', 'PATEL GROUP OF INSTITUTE', 'Vishal ', 'BHOPAL ', '7992295563', '', 'MIXED STREAM ', '22', 'interested', '2024-05-18', '2024-05-18', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 04:24:01 PM', '17/May/2024 =>\n', '', '2024-05-17', '1', 1),
(89, 'UDAAN', 'COLLAGE ', 'PATEL GROUP OF INSTITUTE', 'Not name ', 'BHOPAL ', '8083385326', '', 'MIXED STREAM ', '22', 'pending', '', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 04:37:54 PM', '17/May/2024 =>Whenever he will come Bhopal then  he will call me \n', '', '2024-05-17', '1', 1),
(90, 'UDAAN', 'COLLAGE ', 'PATEL GROUP OF INSTITUTE', 'Not answering ', 'BHOPAL ', '8084018064', '', 'MIXED STREAM ', '22', 'pending', '', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 04:43:09 PM', '17/May/2024 =>Not answering \n', '', '2024-05-17', '1', 1),
(91, 'UDAAN', 'COLLAGE ', 'PATEL GROUP OF INSTITUTE', 'No name ', 'BHOPAL ', '8085061736', '', 'MIXED STREAM ', '22', 'pending', '2024-05-18', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 04:51:45 PM', '17/May/2024 => on another call\n', '', '2024-05-17', '1', 1),
(92, 'UDAAN', 'COLLAGE ', 'PATEL GROUP OF INSTITUTE', 'Not name ', 'BHOPAL ', '8092096629', '', 'MIXED STREAM ', '22', 'pending', '', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 04:53:35 PM', '17/May/2024 =>Hearing and suddenly Call cut \n', '', '2024-05-17', '1', 1),
(93, 'UDAAN', 'COLLAGE ', 'PATEL GROUP OF INSTITUTE', 'Shubham', 'BHOPAL ', '8103786239', '', 'MIXED STREAM ', '22', 'follow_up', '2024-05-31', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 04:56:25 PM', '17/May/2024 =>Next mouth Anna hugga\n', '', '2024-05-17', '1', 1),
(94, 'UDAAN', 'COLLAGE ', 'PATEL GROUP OF INSTITUTE', '', 'BHOPAL ', '7563877090', '', 'MIXED STREAM ', '22', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 05:01:56 PM', '', '', '2024-05-17', '1', 1),
(95, 'UDAAN', 'COLLAGE ', 'PATEL GROUP OF INSTITUTE', 'Not name ', 'BHOPAL ', '7566379469', '', 'MIXED STREAM ', '22', 'pending', '2024-05-18', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 05:02:13 PM', '17/May/2024 =>Switch off \n', '', '2024-05-17', '1', 1),
(96, 'UDAAN', 'COLLAGE ', 'PATEL GROUP OF INSTITUTE', 'Arti', 'BHOPAL ', '7581092482', '', 'MIXED STREAM ', '22', 'follow_up', '2024-05-22', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 05:02:59 PM', '17/May/2024 =>22 takk Anna huggga \n', '', '2024-05-17', '1', 1),
(97, 'UDAAN', 'COLLAGE ', 'PATEL GROUP OF INSTITUTE', 'Shahid ', 'BHOPAL ', '7644939132', '', 'MIXED STREAM ', '22', 'negetive', '', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 05:05:56 PM', '17/May/2024 =>Negative \n', '', '2024-05-17', '1', 1),
(98, 'UDAAN', 'COLLAGE ', 'PATEL GROUP OF INSTITUTE', 'Sakshi ', 'BHOPAL ', '7694030666', '', 'MIXED STREAM ', '22', 'pending', '2024-05-18', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 05:10:34 PM', '17/May/2024 =>Not answering \n', '', '2024-05-17', '1', 1),
(99, 'UDAAN', 'COLLAGE ', 'PATEL GROUP OF INSTITUTE', '', 'BHOPAL ', '7766025139', '', 'MIXED STREAM ', '22', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '17 May 2024 05:11:31 PM', '', '', '2024-05-17', '1', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentdetails`
--
ALTER TABLE `studentdetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studentdetails`
--
ALTER TABLE `studentdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
