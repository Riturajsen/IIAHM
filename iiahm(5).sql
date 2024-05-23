-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2024 at 07:41 AM
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
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `blog` text NOT NULL,
  `poated_by` varchar(20) NOT NULL,
  `metaT` text NOT NULL,
  `metaD` text NOT NULL,
  `editedBy` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `img`, `title`, `blog`, `poated_by`, `metaT`, `metaD`, `editedBy`) VALUES
(1, 'aa5aaf1f8d0c1c74c81b9d79cec4ee39.png', 'Navigating the Skies: The Importance of Aviation Training in a Rapid', '<p>hello I am aa blog</p>\r\n', 'pulak', 'Navigating the Skies: The Importance of Aviation Training in a Rapid | IIAHM Blog', 'this is  a great blog and i can bet on it', 'pulak'),
(2, 'ebcecc283f99a295e783ca46cf371233.png', 'Navigating the Skies: The Importance of Aviation Training in a Rapid', '<p>hello I am aa blog</p>\r\n', '', 'Navigating the Skies: The Importance of Aviation Training in a Rapid | IIAHM Blog', 'this is  a great blog and i can bet on it', 'pulak');

-- --------------------------------------------------------

--
-- Table structure for table `core_details`
--

CREATE TABLE `core_details` (
  `id` int(11) NOT NULL,
  `sitename` varchar(200) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `footer_link` varchar(255) NOT NULL,
  `madeby` varchar(50) NOT NULL,
  `webmailL` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `core_details`
--

INSERT INTO `core_details` (`id`, `sitename`, `company_name`, `footer_link`, `madeby`, `webmailL`) VALUES
(1, 'IIAHM', 'Indian Institute Airhostess and hotel management  ', 'https://theiqhub.com', 'Rituraj Sen', 'https://iiahmbpl.com:2096/');

-- --------------------------------------------------------

--
-- Table structure for table `counselor`
--

CREATE TABLE `counselor` (
  `id` int(11) NOT NULL,
  `counsellor_name` varchar(200) NOT NULL,
  `isActive` tinyint(6) NOT NULL,
  `date` varchar(30) NOT NULL,
  `studentid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `empdetails`
--

CREATE TABLE `empdetails` (
  `id` int(11) NOT NULL,
  `fullname` varchar(60) NOT NULL,
  `fathersname` varchar(60) DEFAULT NULL,
  `dob` varchar(20) DEFAULT NULL,
  `doj` varchar(20) NOT NULL,
  `aadhar` bigint(20) NOT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `desig` enum('House Keeper','Mananager') NOT NULL,
  `sitename` varchar(100) NOT NULL,
  `isworking` enum('1','2') NOT NULL DEFAULT '1',
  `uan` bigint(20) DEFAULT NULL,
  `esic` bigint(20) DEFAULT NULL,
  `accno` bigint(20) DEFAULT NULL,
  `ifsc` varchar(20) DEFAULT NULL,
  `bankname` varchar(30) DEFAULT NULL,
  `adrs` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `utm_source` varchar(30) NOT NULL DEFAULT 'Direct',
  `utm_target` varchar(30) NOT NULL DEFAULT 'Direct',
  `email` varchar(60) NOT NULL,
  `Pnumber` bigint(20) NOT NULL,
  `education` varchar(50) NOT NULL,
  `city` varchar(40) NOT NULL,
  `course` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `fname`, `utm_source`, `utm_target`, `email`, `Pnumber`, `education`, `city`, `course`) VALUES
(9, 'AADITYA', '', '', 'rituraj@iiahmbpl.com', 7000232123, 'Abc Xyz', 'Bhopal', '');

-- --------------------------------------------------------

--
-- Table structure for table `frontdesk`
--

CREATE TABLE `frontdesk` (
  `id` int(11) NOT NULL,
  `Pnumber` bigint(11) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `comingOn` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `height` varchar(10) NOT NULL,
  `parentsOcc` text NOT NULL,
  `TeleCaller` varchar(255) NOT NULL,
  `counsellor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `frontdesk`
--

INSERT INTO `frontdesk` (`id`, `Pnumber`, `fname`, `comingOn`, `age`, `weight`, `height`, `parentsOcc`, `TeleCaller`, `counsellor`) VALUES
(1, 9399761794, 'Aditya Jain', '2024-04-22', 0, 0, '', '', '11', ''),
(2, 9343450677, 'Rahul parmar', '2024-04-22', 0, 0, '', '', '11', ''),
(3, 9651398232, 'Ishan Sahu', '2024-04-25', 0, 0, '', '', '11', ''),
(4, 9835599109, '', '2024-04-22', 0, 0, '', '', '11', ''),
(5, 9893566726, '', '2024-04-22', 0, 0, '', '', '11', ''),
(6, 9934671774, '', '2024-04-02', 0, 0, '', '', '11', '');

-- --------------------------------------------------------

--
-- Table structure for table `jobapply`
--

CREATE TABLE `jobapply` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `cvname` varchar(255) NOT NULL,
  `Pnumber` bigint(30) NOT NULL,
  `utm_data` varchar(60) NOT NULL,
  `utm_source` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobapply`
--

INSERT INTO `jobapply` (`id`, `username`, `cvname`, `Pnumber`, `utm_data`, `utm_source`) VALUES
(4, 'Rituraj', 'FEEDBACK FORM.pdf', 7000232123, 'Marketing', 'whatsapp'),
(5, 'Rituraj', 'FEEDBACK FORM.pdf', 7000232123, 'Marketing Executive', 'linkedin');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `jobid` varchar(50) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `Job_discp` text NOT NULL,
  `city` varchar(20) NOT NULL,
  `posted_by` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `jobid`, `job_title`, `Job_discp`, `city`, `posted_by`) VALUES
(5, '3dc987f91de1708e65c17147ad203680', 'Marketing', '<p><strong>At Hy-Vee our people are our strength. We promise a helpful smile in every aisle and those smiles can only come from a workforce that is fully engaged and committed to supporting our customers and each other.</strong><br />\r\n<br />\r\n<strong>Job Description:</strong><br />\r\n<br />\r\n<strong>Job Title</strong>: <strong>Demonstrator</strong><br />\r\n*Department: <strong>Meat and Seafood</strong><br />\r\n*FLSA *: Non-Exempt<br />\r\n<br />\r\n<strong>General Function</strong>:<br />\r\nProvides prompt, efficient and friendly customer service. Prepares a demonstration of a product for the customers in the store. Offers customers samples of the product, explains the product and makes suggestions for preparation.<br />\r\n<br />\r\n<strong>Core Competencies:</strong></p>\r\n\r\n<ul>\r\n	<li>Partnerships</li>\r\n	<li>Growth mindset</li>\r\n	<li>Results oriented</li>\r\n	<li>Customer focused</li>\r\n	<li>Professionalism<br />\r\n	<br />\r\n	<strong>Reporting Relations:</strong><br />\r\n	Accountable and Reports to: District Store Director, Store Manager, Assistant Managers of; Store Operations, Perishables, and Health Wellness Home, Service Managers<br />\r\n	<br />\r\n	Positions that Report to you: None<br />\r\n	<br />\r\n	<strong>Primary Duties and Responsibilities</strong>:<br />\r\n	&nbsp;</li>\r\n	<li>Provides prompt, efficient and friendly customer service by exhibiting caring, concern and patience in all customer interactions and treating customers as the most important people in the store.</li>\r\n	<li>Smiles and greets customers in a friendly manner, whether the encounter takes place in the employee s designated department or elsewhere in the store.</li>\r\n	<li>Makes an effort to learn customers names and to address them by name whenever possible.</li>\r\n	<li>Assists customers by: (examples include)<br />\r\n	&nbsp;</li>\r\n	<li>escorting them to the products they re looking for</li>\r\n	<li>securing products that are out of reach</li>\r\n	<li>loading or unloading heavy items</li>\r\n	<li>making note of and passing along customer suggestions or requests</li>\r\n	<li>performing other tasks in every way possible to enhance the shopping experience.</li>\r\n	<li>Answers the telephone promptly when called upon and provides friendly, helpful service to customers who call.</li>\r\n	<li>Works with co-workers as a team to ensure customer satisfaction and a pleasant work environment.</li>\r\n	<li>Prepares product for sampling.</li>\r\n	<li>Offers samples to customers.</li>\r\n	<li>Answers customers product related questions.</li>\r\n	<li>Explains products and makes suggestions on preparation.</li>\r\n	<li>Organizes items needed to do demonstration.</li>\r\n	<li>Insures adequate supplies are available.</li>\r\n	<li>Understands and practices proper sanitation procedures and ensures the work area is always clean and neat.</li>\r\n	<li>Maintains strict adherence to department and company guidelines related to personal hygiene and dress.</li>\r\n	<li>Adheres to company policies and individual store guidelines.</li>\r\n	<li>Reports to work when scheduled and on time.<br />\r\n	<br />\r\n	<strong>Secondary Duties and Responsibilities:</strong><br />\r\n	&nbsp;</li>\r\n	<li>Stocks supplies needed for demonstration.</li>\r\n	<li>Assists in other areas of store as needed.</li>\r\n	<li>Performs other job related duties and special projects as required.<br />\r\n	<br />\r\n	<strong>Knowledge, Skills, Abilities and Worker Characteristics:</strong><br />\r\n	&nbsp;</li>\r\n	<li>Must have the ability to carry out detailed but uninvolved written or verbal instructions; deal with a few concrete variables.</li>\r\n	<li>Ability to do simple addition and subtraction; copying figures, counting and recording.</li>\r\n	<li>Must have the ability to have increased contact with people, interview or advise people.<br />\r\n	<br />\r\n	<strong>Education and Experience:</strong><br />\r\n	High school or equivalent experience. Less than six months of similar or related work experience.<br />\r\n	<br />\r\n	<strong>Physical Requirements:</strong><br />\r\n	&nbsp;</li>\r\n	<li>Must be physically able to perform light work exerting up to 20 pounds of force occasionally; up to 10 pounds of force frequently; and a negligible amount of force constantly to move objects.</li>\r\n	<li>Visual requirements include vision from less than 20 inches to more than 20 feet with or without correction, depth perception, color vision, and field of vision.</li>\r\n	<li>Must be able to perform the following physical activities: Climbing, balancing, stooping, kneeling, reaching, standing, walking, pulling, lifting, grasping, feeling, talking, hearing, and repetitive motions.<br />\r\n	<br />\r\n	<strong>Working Conditions</strong>:<br />\r\n	This position is exposed to dirt, noise, and potential electrical shock on a daily basis. This is a fast pace work environment.<br />\r\n	<br />\r\n	<strong>Equipment Used to Perform Job:</strong><br />\r\n	Grill and kitchen utensils.<br />\r\n	<br />\r\n	&nbsp;</li>\r\n</ul>\r\n', 'Bhopal', 'IIAHM'),
(7, '7209f511857194610f44897d810eebaa', 'Marketing', '<p><strong>At Hy-Vee our people are our strength. We promise a helpful smile in every aisle and those smiles can only come from a workforce that is fully engaged and committed to supporting our customers and each other.</strong><br />\r\n<br />\r\n<strong>Job Description:</strong><br />\r\n<br />\r\n<strong>Job Title</strong>: <strong>Demonstrator</strong><br />\r\n*Department: <strong>Meat and Seafood</strong><br />\r\n*FLSA *: Non-Exempt<br />\r\n<br />\r\n<strong>General Function</strong>:<br />\r\nProvides prompt, efficient and friendly customer service. Prepares a demonstration of a product for the customers in the store. Offers customers samples of the product, explains the product and makes suggestions for preparation.<br />\r\n<br />\r\n<strong>Core Competencies:</strong></p>\r\n\r\n<ul>\r\n	<li>Partnerships</li>\r\n	<li>Growth mindset</li>\r\n	<li>Results oriented</li>\r\n	<li>Customer focused</li>\r\n	<li>Professionalism<br />\r\n	<br />\r\n	<strong>Reporting Relations:</strong><br />\r\n	Accountable and Reports to: District Store Director, Store Manager, Assistant Managers of; Store Operations, Perishables, and Health Wellness Home, Service Managers<br />\r\n	<br />\r\n	Positions that Report to you: None<br />\r\n	<br />\r\n	<strong>Primary Duties and Responsibilities</strong>:<br />\r\n	&nbsp;</li>\r\n	<li>Provides prompt, efficient and friendly customer service by exhibiting caring, concern and patience in all customer interactions and treating customers as the most important people in the store.</li>\r\n	<li>Smiles and greets customers in a friendly manner, whether the encounter takes place in the employee s designated department or elsewhere in the store.</li>\r\n	<li>Makes an effort to learn customers names and to address them by name whenever possible.</li>\r\n	<li>Assists customers by: (examples include)<br />\r\n	&nbsp;</li>\r\n	<li>escorting them to the products they re looking for</li>\r\n	<li>securing products that are out of reach</li>\r\n	<li>loading or unloading heavy items</li>\r\n	<li>making note of and passing along customer suggestions or requests</li>\r\n	<li>performing other tasks in every way possible to enhance the shopping experience.</li>\r\n	<li>Answers the telephone promptly when called upon and provides friendly, helpful service to customers who call.</li>\r\n	<li>Works with co-workers as a team to ensure customer satisfaction and a pleasant work environment.</li>\r\n	<li>Prepares product for sampling.</li>\r\n	<li>Offers samples to customers.</li>\r\n	<li>Answers customers product related questions.</li>\r\n	<li>Explains products and makes suggestions on preparation.</li>\r\n	<li>Organizes items needed to do demonstration.</li>\r\n	<li>Insures adequate supplies are available.</li>\r\n	<li>Understands and practices proper sanitation procedures and ensures the work area is always clean and neat.</li>\r\n	<li>Maintains strict adherence to department and company guidelines related to personal hygiene and dress.</li>\r\n	<li>Adheres to company policies and individual store guidelines.</li>\r\n	<li>Reports to work when scheduled and on time.<br />\r\n	<br />\r\n	<strong>Secondary Duties and Responsibilities:</strong><br />\r\n	&nbsp;</li>\r\n	<li>Stocks supplies needed for demonstration.</li>\r\n	<li>Assists in other areas of store as needed.</li>\r\n	<li>Performs other job related duties and special projects as required.<br />\r\n	<br />\r\n	<strong>Knowledge, Skills, Abilities and Worker Characteristics:</strong><br />\r\n	&nbsp;</li>\r\n	<li>Must have the ability to carry out detailed but uninvolved written or verbal instructions; deal with a few concrete variables.</li>\r\n	<li>Ability to do simple addition and subtraction; copying figures, counting and recording.</li>\r\n	<li>Must have the ability to have increased contact with people, interview or advise people.<br />\r\n	<br />\r\n	<strong>Education and Experience:</strong><br />\r\n	High school or equivalent experience. Less than six months of similar or related work experience.<br />\r\n	<br />\r\n	<strong>Physical Requirements:</strong><br />\r\n	&nbsp;</li>\r\n	<li>Must be physically able to perform light work exerting up to 20 pounds of force occasionally; up to 10 pounds of force frequently; and a negligible amount of force constantly to move objects.</li>\r\n	<li>Visual requirements include vision from less than 20 inches to more than 20 feet with or without correction, depth perception, color vision, and field of vision.</li>\r\n	<li>Must be able to perform the following physical activities: Climbing, balancing, stooping, kneeling, reaching, standing, walking, pulling, lifting, grasping, feeling, talking, hearing, and repetitive motions.<br />\r\n	<br />\r\n	<strong>Working Conditions</strong>:<br />\r\n	This position is exposed to dirt, noise, and potential electrical shock on a daily basis. This is a fast pace work environment.<br />\r\n	<br />\r\n	<strong>Equipment Used to Perform Job:</strong><br />\r\n	Grill and kitchen utensils.<br />\r\n	<br />\r\n	&nbsp;</li>\r\n</ul>\r\n', 'Bhopal', 'IIAHM');

-- --------------------------------------------------------

--
-- Table structure for table `placementimg`
--

CREATE TABLE `placementimg` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `placementimg`
--

INSERT INTO `placementimg` (`id`, `img`, `fname`) VALUES
(1, '40357957cc890a9e7d846834b4f08ff3.png', 'congratulation Alqama'),
(2, 'e79dcddab3de45f3a1896cc336dba68b.png', 'congratulation Ritik'),
(3, '898a7f5cb31f60812e59ae8c2bee9e05.png', 'Image 3'),
(4, 'a32b7d3dbf903543fa288cb605297f49.png', 'Image 4'),
(5, '9666bdcebdca7d40e0f65109d227b3ad.png', 'Image 5');

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
(1, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7999181908', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(2, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7999636811', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(3, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7999855854', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(4, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8085156102', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(5, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8103164846', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(6, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8109352272', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(7, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8120428771', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(8, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8224067353', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(9, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8225931506', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(10, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8234910805', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(11, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9754801005', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(12, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9826072908', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(13, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9826300151', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(14, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7974691707', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(15, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9778222867', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(16, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8085305909', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(17, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7012360125', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(18, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '6282271663', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(19, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9495065629', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(20, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9495286230', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(21, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9497838229', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(22, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9522365404', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(23, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9539202967', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(24, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9539302213', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(25, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9542343758', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(26, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9544977218', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(27, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9562793067', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(28, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8590823634', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(29, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8593856330', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(30, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8606124188', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(31, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8714311302', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(32, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8714431833', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(33, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8839480470', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(34, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8871637594', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(35, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8891802156', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(36, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8907548391', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(37, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9009756296', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(38, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7736638013', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(39, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7736914839', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(40, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7806091801', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(41, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8075153171', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(42, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8075786102', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(43, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8085412444', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(44, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8085913324', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(45, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8137804877', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(46, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7898552319', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(47, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7898658325', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(48, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7909387540', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(49, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7974192625', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(50, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7974257680', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(51, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7974523940', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(52, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7974825796', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(53, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7974852763', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(54, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7987612059', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(55, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7990472425', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(56, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7999167489', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(57, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9188197453', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(58, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9188242966', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(59, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9188717580', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(60, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9188726575', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(61, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9207738011', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(62, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9303089571', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(63, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9307854511', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(64, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9400174944', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(65, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9400795679', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(66, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '6268747669', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(67, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '6268789511', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(68, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7000724967', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(69, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7024408305', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(70, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7201991710', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(71, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7354575995', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(72, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7354676883', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(73, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7355761380', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(74, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7440523080', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(75, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8435352029', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(76, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8435355353', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(77, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8459192340', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(78, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8539999977', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(79, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8719056337', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(80, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8719059446', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(81, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8770087828', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(82, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8770568305', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(83, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8770820594', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(84, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8770824410', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(85, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9644114837', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(86, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9656253198', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(87, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9656990468', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(88, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9747351125', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(89, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9755005818', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(90, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9778028593', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(91, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9778042013', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(92, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9778072950', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(93, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7566437620', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(94, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9589810445', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(95, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7879693173', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(96, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8719907332', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(97, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9144730560', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(98, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9575636113', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(99, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8817983169', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(100, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7489599011', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(101, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9955928211', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(102, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9753616947', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(103, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9835357859', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(104, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9893503505', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(105, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9893885400', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(106, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9977108856', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(107, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9977672396', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(108, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9977700250', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(109, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9981067454', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(110, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9981582695', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(111, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9981682567', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(112, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9981926378', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(113, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7447093402', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(114, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '6260452970', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(115, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '6260630056', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(116, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '6261058586', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(117, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '6261116277', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(118, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '6261215797', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(119, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '6261722269', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(120, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '6261762121', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(121, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '6262583205', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(122, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '6263078560', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(123, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9685873386', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(124, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9691166036', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(125, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9691539332', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(126, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9691943887', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(127, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9713961058', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(128, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9752553961', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(129, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9752711613', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(130, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9753457535', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(131, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9754003294', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(132, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9754203290', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(133, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8964037447', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(134, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7828009729', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(135, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9039480910', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(136, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9329244498', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(137, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9373689619', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(138, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9691571091', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(139, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7089757504', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(140, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8103869060', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(141, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8224078277', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(142, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7805937393', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(143, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8269199724', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(144, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8269331259', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(145, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8269923857', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(146, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8305009200', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(147, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8305113081', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(148, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8319004586', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(149, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8319094493', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(150, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8319734168', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(151, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8349542681', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(152, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8358977596', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(153, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '6263804461', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(154, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '6264629092', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(155, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '6264717310', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(156, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '6265642887', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(157, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '6266205656', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(158, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '6266366823', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(159, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '6266699573', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(160, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '6267843444', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(161, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '6268173519', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(162, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8815400726', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(163, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8817174448', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(164, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8827936836', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(165, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8839123019', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(166, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8839290224', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(167, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8839599627', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(168, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8839981336', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(169, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8871140291', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(170, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8959454344', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(171, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8989718945', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(172, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9039105303', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(173, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9399486888', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(174, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9407344228', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(175, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9424557185', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(176, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9479440547', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(177, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9522513810', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(178, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9555340633', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(179, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9575923227', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(180, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9584049305', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(181, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9584251250', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(182, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9584622552', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(183, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9584992459', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(184, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7697533833', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(185, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7723907595', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(186, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7772932088', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(187, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7804028353', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(188, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7869382595', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(189, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7869587476', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(190, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7879015885', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(191, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7879206686', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(192, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7898261045', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(193, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '6268202129', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(194, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9685481884', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(195, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7617349841', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(196, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '6269601767', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(197, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9425836375', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(198, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7049809095', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(199, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9131525805', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(200, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8120143828', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(201, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9589912192', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(202, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '6265191832', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(203, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7748055640', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(204, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7247546514', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(205, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9691340963', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(206, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '6265139669', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(207, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '6267883334', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(208, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7389070508', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(209, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8815474927', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(210, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9399569357', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(211, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9166564440', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(212, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9981091260', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(213, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7870479649', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(214, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '6260428482', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(215, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9111501998', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(216, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8827646236', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(217, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9589288541', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(218, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '6202865231', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(219, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8357093490', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(220, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8882300906', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(221, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7722919109', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(222, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '6006228272', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(223, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '6238402668', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(224, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '6261916273', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(225, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '6263717100', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(226, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '6265007327', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(227, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '6265768144', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(228, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '6266598051', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(229, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '6282948354', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(230, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7024049927', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(231, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7025038186', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(232, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7034884022', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(233, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7089144295', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(234, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7247380752', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(235, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7306767667', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(236, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7561096003', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(237, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7594846152', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(238, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7697866915', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(239, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7736391582', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(240, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7470320446', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(241, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7470882870', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(242, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7489547975', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(243, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7509607642', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(244, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7610713918', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(245, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7631012442', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(246, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7694865901', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(247, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7697211253', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0);
INSERT INTO `studentdetails` (`id`, `filesource`, `category`, `institute`, `fname`, `locationn`, `contactno`, `parentscontactno`, `classname`, `allotedTo`, `status`, `followup`, `comingOn`, `cometime`, `counselor`, `age`, `weight`, `height`, `bmi`, `sms`, `updateforcalling`, `seminarattended`, `Slottime`, `modified`, `comment`, `callHistory`, `addedOn`, `called`, `TimeCalled`) VALUES
(248, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7697336405', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(249, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7697414856', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(250, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9522586571', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(251, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8871939089', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(252, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8839658756', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(253, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9691039588', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(254, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9610134916', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(255, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7000829475', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(256, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9179837849', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(257, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '6261517801', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(258, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9336792204', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(259, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9340129714', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(260, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9340224765', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(261, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9340227872', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(262, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9340325805', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(263, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9340554414', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(264, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9340819464', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(265, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9340860125', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(266, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9399054124', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(267, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9399172660', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(268, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7440923284', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(269, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '6264541459', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(270, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9340286146', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(271, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7974323134', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(272, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7225003512', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(273, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9111380081', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(274, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '7610559120', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(275, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9685135199', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(276, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9131656159', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(277, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9399613514', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(278, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9589941833', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(279, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9617146331', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(280, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9630401084', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(281, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9644280236', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(282, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9644572508', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(283, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9644654186', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(284, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9644873324', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(285, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9669359577', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(286, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9685022254', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(287, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9685624862', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(288, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9039273001', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(289, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9039515071', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(290, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9039581725', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(291, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9074591157', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(292, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9098390589', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(293, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9098930069', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(294, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9111648573', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(295, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9111736358', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(296, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9111979615', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(297, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9131505238', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(298, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8138960950', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(299, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8225898550', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(300, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8269116143', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(301, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8269148850', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(302, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8281796643', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(303, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8304810979', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(304, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8547975769', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(305, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8589021662', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(306, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8590427638', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(307, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '8590606904', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(308, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9131611249', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(309, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9165131959', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(310, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9165477812', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(311, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9174040960', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(312, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9174546302', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(313, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9179179222', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(314, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9179229854', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(315, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9300218314', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(316, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9300494456', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(317, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9301092178', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(318, 'UDAAN', 'COLLEGE', 'TIT COLLEGE', '-', 'BHOPAL', '9327798400', '-', 'M.B.A.(2nd Yr)', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(319, 'UDAAN', 'COLLEGE', 'CAREER COLLEGE', '-', 'BHOPAL', '9826911166', '-', 'Mixed Stream', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(320, 'UDAAN', 'COLLEGE', 'CAREER COLLEGE', '-', 'BHOPAL', '6232379032', '-', 'Mixed Stream', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(321, 'UDAAN', 'COLLEGE', 'CAREER COLLEGE', '-', 'BHOPAL', '6263411607', '-', 'Mixed Stream', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(322, 'UDAAN', 'COLLEGE', 'CAREER COLLEGE', '-', 'BHOPAL', '6263506461', '-', 'Mixed Stream', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(323, 'UDAAN', 'COLLEGE', 'CAREER COLLEGE', '-', 'BHOPAL', '6391568598', '-', 'Mixed Stream', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(324, 'UDAAN', 'COLLEGE', 'CAREER COLLEGE', '-', 'BHOPAL', '7224843165', '-', 'Mixed Stream', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(325, 'UDAAN', 'COLLEGE', 'CAREER COLLEGE', '-', 'BHOPAL', '7354308581', '-', 'Mixed Stream', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(326, 'UDAAN', 'COLLEGE', 'CAREER COLLEGE', '-', 'BHOPAL', '7389963604', '-', 'Mixed Stream', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(327, 'UDAAN', 'COLLEGE', 'CAREER COLLEGE', '-', 'BHOPAL', '7415222458', '-', 'Mixed Stream', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(328, 'UDAAN', 'COLLEGE', 'CAREER COLLEGE', '-', 'BHOPAL', '7415395343', '-', 'Mixed Stream', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(329, 'UDAAN', 'COLLEGE', 'CAREER COLLEGE', '-', 'BHOPAL', '7440208802', '-', 'Mixed Stream', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(330, 'UDAAN', 'COLLEGE', 'CAREER COLLEGE', '-', 'BHOPAL', '7440518695', '-', 'Mixed Stream', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(331, 'UDAAN', 'COLLEGE', 'CAREER COLLEGE', '-', 'BHOPAL', '7869389389', '-', 'Mixed Stream', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(332, 'UDAAN', 'COLLEGE', 'CAREER COLLEGE', '-', 'BHOPAL', '7879415266', '-', 'Mixed Stream', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(333, 'UDAAN', 'COLLEGE', 'CAREER COLLEGE', '-', 'BHOPAL', '7879923197', '-', 'Mixed Stream', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(334, 'UDAAN', 'COLLEGE', 'CAREER COLLEGE', '-', 'BHOPAL', '7898584161', '-', 'Mixed Stream', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(335, 'UDAAN', 'COLLEGE', 'CAREER COLLEGE', '-', 'BHOPAL', '8103736623', '-', 'Mixed Stream', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(336, 'UDAAN', 'COLLEGE', 'CAREER COLLEGE', '-', 'BHOPAL', '8305749787', '-', 'Mixed Stream', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(337, 'UDAAN', 'COLLEGE', 'CAREER COLLEGE', '-', 'BHOPAL', '8349266928', '-', 'Mixed Stream', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(338, 'UDAAN', 'COLLEGE', 'CAREER COLLEGE', '-', 'BHOPAL', '8349566538', '-', 'Mixed Stream', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(339, 'UDAAN', 'COLLEGE', 'CAREER COLLEGE', '-', 'BHOPAL', '8770884002', '-', 'Mixed Stream', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(340, 'UDAAN', 'COLLEGE', 'CAREER COLLEGE', '-', 'BHOPAL', '8889490242', '-', 'Mixed Stream', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(341, 'UDAAN', 'COLLEGE', 'CAREER COLLEGE', '-', 'BHOPAL', '8962414809', '-', 'Mixed Stream', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(342, 'UDAAN', 'COLLEGE', 'CAREER COLLEGE', '-', 'BHOPAL', '9024679939', '-', 'Mixed Stream', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(343, 'UDAAN', 'COLLEGE', 'CAREER COLLEGE', '-', 'BHOPAL', '9103767594', '-', 'Mixed Stream', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(344, 'UDAAN', 'COLLEGE', 'CAREER COLLEGE', '-', 'BHOPAL', '9122591756', '-', 'Mixed Stream', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(345, 'UDAAN', 'COLLEGE', 'CAREER COLLEGE', '-', 'BHOPAL', '9131825731', '-', 'Mixed Stream', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(346, 'UDAAN', 'COLLEGE', 'CAREER COLLEGE', '-', 'BHOPAL', '9171855624', '-', 'Mixed Stream', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(347, 'UDAAN', 'COLLEGE', 'CAREER COLLEGE', '-', 'BHOPAL', '9302657105', '-', 'Mixed Stream', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(348, 'UDAAN', 'COLLEGE', 'CAREER COLLEGE', '-', 'BHOPAL', '9340856184', '-', 'Mixed Stream', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(349, 'UDAAN', 'COLLEGE', 'CAREER COLLEGE', '-', 'BHOPAL', '9685020799', '-', 'Mixed Stream', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(350, 'UDAAN', 'COLLEGE', 'CAREER COLLEGE', '-', 'BHOPAL', '9752983013', '-', 'Mixed Stream', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(351, 'UDAAN', 'COLLEGE', 'CAREER COLLEGE', '-', 'BHOPAL', '9755434207', '-', 'Mixed Stream', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(352, 'SEMINAR', 'COACHING', 'ENGLISH CLASSES', 'VIRENDRA PRAJAPATI', 'BHOPAL', '8185149296', '9302611721', 'B TECH', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(353, 'SEMINAR', 'COACHING', 'ENGLISH CLASSES', 'ANURAG ASATI', 'BHOPAL', '-', '7024789497', '-', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '2024-04-29 15:44:46', '', '', '2024-04-29', '0', 0),
(354, 'SEMINAR', 'COACHING', 'ENGLISH CLASSES', 'SUDHEER SHARMA', 'BHOPAL', '6287606212', '6287606112', 'B TECH', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(355, 'SEMINAR', 'COACHING', 'ENGLISH CLASSES', 'NISHANT GUPTA', 'BHOPAL', '8989774066', '9407285109', 'B TECH', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(356, 'SEMINAR', 'COACHING', 'ENGLISH CLASSES', 'PAWAN AHIRWAR', 'BHOPAL', '7828618174', '7828618174', 'B A', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(357, 'SEMINAR', 'COACHING', 'ENGLISH CLASSES', 'AJAY CHOUDHARY', 'BHOPAL', '9753151290', '9174964837', 'B TECH', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(358, 'SEMINAR', 'COACHING', 'ENGLISH CLASSES', 'SIMRAN', 'BHOPAL', '9406527764', '8839398845', 'B COM', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(359, 'SEMINAR', 'COLLEGE', 'SHAHID BHAGAT SINGH COLLEGE', 'SALONI MALVIYA', 'ASHTA', '6262637833', '-', 'Mixed Stream', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(360, 'SEMINAR', 'COLLEGE', 'SHAHID BHAGAT SINGH COLLEGE', 'BULBUL SURYAWANSHI', 'ASHTA', '6262685207', '9303876024', 'Mixed Stream', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(361, 'SEMINAR', 'COLLEGE', 'SHAHID BHAGAT SINGH COLLEGE', 'RANI MALVIYA', 'ASHTA', '6264011394', '8305522819', 'Mixed Stream', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(362, 'SEMINAR', 'COLLEGE', 'SHAHID BHAGAT SINGH COLLEGE', 'MUSKAN SOLANKI', 'ASHTA', '7693929970', '-', 'Mixed Stream', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(363, 'SEMINAR', 'COLLEGE', 'SHAHID BHAGAT SINGH COLLEGE', 'NISHA MALVIYA', 'ASHTA', '7723973658', '-', 'Mixed Stream', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(364, 'SEMINAR', 'COLLEGE', 'SHAHID BHAGAT SINGH COLLEGE', 'KARINA VERMA', 'ASHTA', '7974458672', '-', 'Mixed Stream', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(365, 'SEMINAR', 'COLLEGE', 'SHAHID BHAGAT SINGH COLLEGE', 'PAYAL MAHESHWARI', 'ASHTA', '8085907690', '8085907690', 'Mixed Stream', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(366, 'SEMINAR', 'COLLEGE', 'SHAHID BHAGAT SINGH COLLEGE', 'KIRAN PRAJAPATI', 'ASHTA', '8823852683', '9977451484', 'Mixed Stream', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(367, 'SEMINAR', 'COLLEGE', 'SHAHID BHAGAT SINGH COLLEGE', 'RATI AARY', 'ASHTA', '8849245815', '-', 'Mixed Stream', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(368, 'SEMINAR', 'COLLEGE', 'SHAHID BHAGAT SINGH COLLEGE', 'NIKITA SOLANKI', 'ASHTA', '9098136613', '-', 'Mixed Stream', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(369, 'SEMINAR', 'COLLEGE', 'SHAHID BHAGAT SINGH COLLEGE', 'SHIVANI PARMAR', 'ASHTA', '9109390240', '9826371576', 'Mixed Stream', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(370, 'SEMINAR', 'COLLEGE', 'SHAHID BHAGAT SINGH COLLEGE', 'SHITAL', 'ASHTA', '9303356613', '-', 'Mixed Stream', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(371, 'SEMINAR', 'COLLEGE', 'SHAHID BHAGAT SINGH COLLEGE', 'PALLAVI VERMA', 'ASHTA', '9754122909', '9754122909', 'Mixed Stream', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(372, 'SEMINAR', 'COLLEGE', 'SHAHID BHAGAT SINGH COLLEGE', 'DALEE PANCHLASIYA', 'ASHTA', '9755178797', '-', 'Mixed Stream', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(373, 'SEMINAR', 'COLLEGE', 'SHAHID BHAGAT SINGH COLLEGE', 'KIRAN VERMA', 'ASHTA', '9755258198', '8085375139', 'Mixed Stream', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(374, 'SEMINAR', 'COLLEGE', 'SHAHID BHAGAT SINGH COLLEGE', 'ANJALI THAKUR', 'ASHTA', '9770060066', '-', 'Mixed Stream', '', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(375, 'SEMINAR', 'COLLEGE', 'SHAHID BHAGAT SINGH COLLEGE', 'NAZIYA KHAN', 'ASHTA', '9826080871', '9770026270', 'Mixed Stream', '11', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '1 May 2024 03:44:42 PM', '', '', '2024-04-29', '1', 0),
(376, 'SEMINAR', 'COLLEGE', 'SHAHID BHAGAT SINGH COLLEGE', 'SOALONI SAWARIYA', 'ASHTA', '9826183745', '-', 'Mixed Stream', '11', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(377, 'SEMINAR', 'COLLEGE', 'SHAHID BHAGAT SINGH COLLEGE', 'PAYAL VERMA', 'ASHTA', '9109561731', '9200921880', 'Mixed Stream', '11', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(378, 'UDAAN', 'COLLEGE', 'CHANDRASHEKHAR PG COLLEGE', 'SHOURABH', 'SEHORE', '9754949903', '-', 'B COM 3RD YR', '11', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(379, 'UDAAN', 'COLLEGE', 'CHANDRASHEKHAR PG COLLEGE', 'NEPAL RAGHUWANSHI', 'SEHORE', '9685509357', '-', 'B COM 3RD YR', '11', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(380, 'UDAAN', 'COLLEGE', 'CHANDRASHEKHAR PG COLLEGE', '', 'SEHORE', '9343931297', '-', 'B.A. 2ND YR', '11', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(381, 'UDAAN', 'COLLEGE', 'CHANDRASHEKHAR PG COLLEGE', 'ANJALI', 'SEHORE', '8889600304', '-', 'B.A. 2ND YR', '11', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(382, 'UDAAN', 'COLLEGE', 'CHANDRASHEKHAR PG COLLEGE', 'ABHISHEK GOUR', 'SEHORE', '9098591381', '-', 'B.A. 2ND YR', '11', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(383, 'UDAAN', 'COLLEGE', 'CHANDRASHEKHAR PG COLLEGE', 'NEERAJ', 'SEHORE', '8871727065', '-', 'B COM 3RD YR', '11', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(384, 'UDAAN', 'COLLEGE', 'CHANDRASHEKHAR PG COLLEGE', 'NIRMAL LODHI', 'SEHORE', '8817711587', '-', 'B.A. 2ND YR', '11', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(385, 'UDAAN', 'COLLEGE', 'CHANDRASHEKHAR PG COLLEGE', 'MANISHA', 'SEHORE', '8319090217', '-', 'B.A. 2ND YR', '11', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(386, 'UDAAN', 'COLLEGE', 'CHANDRASHEKHAR PG COLLEGE', 'ANKIT', 'SEHORE', '8815145213', '-', 'B.A. 2ND YR', '11', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(387, 'UDAAN', 'COLLEGE', 'CHANDRASHEKHAR PG COLLEGE', 'ARPIT SONI', 'SEHORE', '9977764862', '-', 'B COM 3RD YR', '11', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(388, 'UDAAN', 'COLLEGE', 'CHANDRASHEKHAR PG COLLEGE', 'YASHWANI', 'SEHORE', '9752746233', '-', 'B.A. 2ND YR', '11', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(389, 'UDAAN', 'COLLEGE', 'CHANDRASHEKHAR PG COLLEGE', 'VEER SINGH', 'SEHORE', '9685500867', '-', 'B COM 3RD YR', '11', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(390, 'UDAAN', 'COLLEGE', 'CHANDRASHEKHAR PG COLLEGE', 'AARTI UIKEY', 'SEHORE', '8223883208', '-', 'B.A. 2ND YR', '11', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(391, 'UDAAN', 'COLLEGE', 'CHANDRASHEKHAR PG COLLEGE', 'MONU JOSHI', 'SEHORE', '7898179149', '-', 'B COM 3RD YR', '11', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(392, 'UDAAN', 'COLLEGE', 'CHANDRASHEKHAR PG COLLEGE', 'ANSHU PRAJAPATI', 'SEHORE', '9302434917', '-', 'B.A. 2ND YR', '11', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(393, 'UDAAN', 'COLLEGE', 'CHANDRASHEKHAR PG COLLEGE', 'harshita koli', 'SEHORE', '9111292908', '-', 'B.Com 1ST Year', '11', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(394, 'UDAAN', 'COLLEGE', 'CHANDRASHEKHAR PG COLLEGE', 'SANDEEP MALVIYA', 'SEHORE', '6269605865', '-', 'B.A. 2ND YR', '11', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(395, 'UDAAN', 'COLLEGE', 'CHANDRASHEKHAR PG COLLEGE', 'AMAN BADODIYA', 'SEHORE', '7089812148', '-', 'B COM 3RD YR', '11', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(396, 'UDAAN', 'COLLEGE', 'CHANDRASHEKHAR PG COLLEGE', 'CHETAN YADAV', 'SEHORE', '7489309975', '-', 'B COM 3RD YR', '11', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(397, 'UDAAN', 'COLLEGE', 'CHANDRASHEKHAR PG COLLEGE', 'AAKASH VERMA', 'SEHORE', '6265200942', '-', 'B.A. 2ND YR', '11', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(398, 'UDAAN', 'COLLEGE', 'CHANDRASHEKHAR PG COLLEGE', 'PRASHANT', 'SEHORE', '6265076249', '-', 'B.A. 2ND YR', '11', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(399, 'UDAAN', 'COLLEGE', 'NMV COLLEGE', '-', 'HOSHANGABAD', '9302550789', '-', 'BA IIIrd YR', '11', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(400, 'UDAAN', 'COLLEGE', 'NMV COLLEGE', '-', 'HOSHANGABAD', '9302884502', '-', 'BA IIIrd YR', '11', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(401, 'UDAAN', 'COLLEGE', 'NMV COLLEGE', '-', 'HOSHANGABAD', '9302923945', '-', 'BA IIIrd YR', '11', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(402, 'UDAAN', 'COLLEGE', 'NMV COLLEGE', '-', 'HOSHANGABAD', '9302983299', '-', 'BA IIIrd YR', '11', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(403, 'UDAAN', 'COLLEGE', 'NMV COLLEGE', '-', 'HOSHANGABAD', '9302993759', '-', 'BA IIIrd YR', '11', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(404, 'UDAAN', 'COLLEGE', 'NMV COLLEGE', '-', 'HOSHANGABAD', '9302998638', '-', 'BA IIIrd YR', '11', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(405, 'UDAAN', 'COLLEGE', 'NMV COLLEGE', '-', 'HOSHANGABAD', '9303714933', '-', 'BA IIIrd YR', '11', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(406, 'UDAAN', 'COLLEGE', 'NMV COLLEGE', '-', 'HOSHANGABAD', '9329176733', '-', 'BA IIIrd YR', '11', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(407, 'UDAAN', 'COLLEGE', 'NMV COLLEGE', 'MOHIT SAINI', 'HOSHANGABAD', '6263241859', '-', 'BA 1ST YR', '11', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(408, 'UDAAN', 'COLLEGE', 'NMV COLLEGE', 'ANJALI KAWDE', 'HOSHANGABAD', '6263655402', '-', 'BA 1ST YR', '11', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(409, 'UDAAN', 'COLLEGE', 'NMV COLLEGE', '-', 'HOSHANGABAD', '9329501695', '-', 'BA IIIrd YR', '11', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(410, 'UDAAN', 'COLLEGE', 'NMV COLLEGE', '-', 'HOSHANGABAD', '9329680762', '-', 'BA IIIrd YR', '11', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(411, 'UDAAN', 'COLLEGE', 'NMV COLLEGE', '-', 'HOSHANGABAD', '9329764705', '-', 'BA IIIrd YR', '11', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(412, 'UDAAN', 'COLLEGE', 'NMV COLLEGE', '-', 'HOSHANGABAD', '9329977901', '-', 'BA IIIrd YR', '11', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(413, 'UDAAN', 'COLLEGE', 'NMV COLLEGE', '-', 'HOSHANGABAD', '9343330197', '-', 'BA IIIrd YR', '11', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(414, 'UDAAN', 'COLLEGE', 'NMV COLLEGE', '-', 'HOSHANGABAD', '9343410262', '-', 'BA IIIrd YR', '11', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(415, 'UDAAN', 'COLLEGE', 'NMV COLLEGE', '-', 'HOSHANGABAD', '9372197776', '-', 'BA IIIrd YR', '11', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(416, 'UDAAN', 'COLLEGE', 'NMV COLLEGE', '-', 'HOSHANGABAD', '9381745714', '-', 'BA IIIrd YR', '11', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(417, 'UDAAN', 'COLLEGE', 'NMV COLLEGE', '-', 'HOSHANGABAD', '9399185108', '-', 'BA IIIrd YR', '11', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(418, 'UDAAN', 'COLLEGE', 'NMV COLLEGE', '-', 'HOSHANGABAD', '9691485933', '-', 'BA IIIrd YR', '11', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(419, 'UDAAN', 'COLLEGE', 'NMV COLLEGE', '-', 'HOSHANGABAD', '9691980757', '-', 'BA IIIrd YR', '11', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(420, 'UDAAN', 'COLLEGE', 'NMV COLLEGE', '-', 'HOSHANGABAD', '9713312033', '-', 'BA IIIrd YR', '11', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(421, 'UDAAN', 'COLLEGE', 'NMV COLLEGE', 'BHANU', 'HOSHANGABAD', '6265969765', '-', 'BA 1ST YR', '11', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(422, 'UDAAN', 'COLLEGE', 'NMV COLLEGE', '-', 'HOSHANGABAD', '9753130405', '-', 'BA IIIrd YR', '11', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(423, 'UDAAN', 'COLLEGE', 'NMV COLLEGE', '-', 'HOSHANGABAD', '9754322523', '-', 'BA IIIrd YR', '11', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(424, 'UDAAN', 'COLLEGE', 'NMV COLLEGE', '-', 'HOSHANGABAD', '9827069116', '-', 'BA IIIrd YR', '11', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-04-29', '0', 0),
(425, 'UDAAN', 'COLLEGE', 'BHEL COLLEGE', 'Shila', 'BHOPAL', '7489676320', '97551210052', '', '14', 'pending', '2024-05-16', '2024-05-16', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '15 May 2024 04:10:16 PM', '16/May/2024 =>\n', '', '2024-05-01', '1', 2),
(426, 'UDAAN', 'COLLEGE', 'BHEL COLLEGE', 'NA', 'BHOPAL', '7509468470', '', '', '14', 'pending', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '10 May 2024 09:58:07 AM', '', '', '2024-05-01', '1', 0),
(427, 'UDAAN', 'COLLEGE', 'BHEL COLLEGE', '', 'BHOPAL', '7566131657', '', '', '14', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '9 May 2024 04:57:25 PM', '', '', '2024-05-01', '1', 0),
(428, 'UDAAN', 'COLLEGE', 'BHEL COLLEGE', '', 'BHOPAL', '7773022135', '', '', '14', 'closed', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '1 May 2024 03:21:38 PM', '', '', '2024-05-01', '1', 0),
(429, 'UDAAN', 'COLLEGE', 'BHEL COLLEGE', '', 'BHOPAL', '7805907847', '', '', '14', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '1 May 2024 03:22:22 PM', '', '', '2024-05-01', '1', 0),
(430, 'UDAAN', 'COLLEGE', 'BHEL COLLEGE', 'Divya', 'BHOPAL', '7828494194', '', '', '14', 'pending', '2024-05-15', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '14 May 2024 11:12:23 AM', '14/May/2024 =>\n', '', '2024-05-01', '1', 1),
(431, 'UDAAN', 'COLLEGE', 'BHEL COLLEGE', '', 'BHOPAL', '7828803254', '', '', '14', 'Pending NR', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '1 May 2024 03:38:32 PM', '', '', '2024-05-01', '1', 0),
(432, 'UDAAN', 'COLLEGE', 'BHEL COLLEGE', '', 'BHOPAL', '7869942599', '', '', '14', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '9 May 2024 04:48:17 PM', '', '', '2024-05-06', '1', 0),
(433, 'UDAAN', 'COLLEGE', 'BHEL COLLEGE', '', 'BHOPAL', '7898457229', '', '', '14', 'PENDING NR ', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '1 May 2024 03:45:00 PM', '', '', '2024-05-01', '1', 0),
(434, 'UDAAN', 'COLLEGE', 'BHEL COLLEGE', 'Anushka', 'BHOPAL', '7987545176', '', '', '14', 'admission', '2024-05-02', '2024-05-02', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '2 May 2024 04:49:59 PM', '', '', '2024-05-06', '1', 0),
(435, 'UDAAN', 'COLLEGE', 'BHEL COLLEGE', 'Archana', 'BHOPAL', '7999159023', '', '', '14', 'pos_turned_neg', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '1 May 2024 04:03:28 PM', '', '', '2024-05-01', '1', 0),
(436, 'UDAAN', 'COLLEGE', 'BHEL COLLEGE', 'Devendra ', 'BHOPAL', '7999846738', '', '', '14', 'Negative ni in this field ', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '1 May 2024 04:07:58 PM', '', '', '2024-05-01', '1', 0),
(437, 'UDAAN', 'COLLEGE', 'BHEL COLLEGE', '', 'BHOPAL', '8085151631', '', '', '14', 'NR', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '1 May 2024 04:08:50 PM', '', '', '2024-05-01', '1', 0),
(438, 'UDAAN', 'COLLEGE', 'BHEL COLLEGE', 'Sundaram ', 'BHOPAL', '8109586202', '', '', '14', 'Follow up kl tk btarnga', '2024-05-02', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '1 May 2024 04:15:23 PM', '', '', '2024-05-01', '1', 0),
(439, 'UDAAN', 'COLLEGE', 'BHEL COLLEGE', '', 'BHOPAL', '8269243167', '', '', '14', 'Pending NR', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '1 May 2024 04:15:53 PM', '', '', '2024-05-01', '1', 0),
(440, 'UDAAN', 'COLLEGE', 'BHEL COLLEGE', 'Palak', 'BHOPAL', '8319381074', '', '', '14', 'Int but confirmation denge ', '2024-05-02', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '1 May 2024 04:17:42 PM', '', '', '2024-05-01', '1', 0),
(441, 'UDAAN', 'COLLEGE', 'BHEL COLLEGE', 'Anjali ', 'BHOPAL', '8319542810', '', '', '14', 'Negative not interested in this field ', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '1 May 2024 04:22:20 PM', '', '', '2024-05-04', '1', 0),
(442, 'UDAAN', 'COLLEGE', 'BHEL COLLEGE', 'AC', 'BHOPAL', '8349613642', '', '', '14', 'negetive', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '1 May 2024 04:26:34 PM', '', '', '2024-05-01', '1', 0),
(443, 'UDAAN', 'COLLEGE', 'BHEL COLLEGE', '', 'BHOPAL', '8450021870', '', '', '14', 'Busy on another call ', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '1 May 2024 04:28:02 PM', '', '', '2024-05-01', '1', 0),
(444, 'UDAAN', 'COLLEGE', 'BHEL COLLEGE', '', 'BHOPAL', '8709148207', '', '', '14', 'Block kr k rkhe h negative ', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '1 May 2024 04:29:10 PM', '', '', '2024-05-01', '1', 0),
(445, 'UDAAN', 'COLLEGE', 'BHEL COLLEGE', '', 'BHOPAL', '8770731036', '', '', '14', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '1 May 2024 04:30:06 PM', '', '', '2024-05-01', '1', 0),
(446, 'UDAAN', 'COLLEGE', 'BHEL COLLEGE', '', 'BHOPAL', '8839941406', '', '', '14', 'Pending Chuu chuu ho rh h', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '1 May 2024 04:32:03 PM', '', '', '2024-05-01', '1', 0),
(447, 'UDAAN', 'COLLEGE', 'BHEL COLLEGE', '', 'BHOPAL', '8962004118', '', '', '14', 'NR', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '1 May 2024 04:33:00 PM', '', '', '2024-05-01', '1', 0),
(448, 'UDAAN', 'COLLEGE', 'BHEL COLLEGE', 'Rahul', 'BHOPAL', '9039380806', '', '', '14', 'After exam try krenga', '2024-05-02', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '1 May 2024 04:33:39 PM', '', '', '2024-05-01', '1', 0),
(449, 'UDAAN', 'COLLEGE', 'BHEL COLLEGE', '', 'BHOPAL', '9098072295', '', '', '14', 'NI in this field ', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '1 May 2024 04:37:56 PM', '', '', '2024-05-01', '1', 0),
(450, 'MARKETING DATA ', 'COLLEGE', '', '', 'BHOPAL', '6266395689', '', '', '16', 'PENDING (NA)', '2024-05-02', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '1 May 2024 03:17:11 PM', '', '', '2024-05-01', '1', 0),
(451, 'MARKETING DATA ', 'COLLEGE', '', '', 'BHOPAL', '7974328598', '', '', '16', 'PENDING (NA)', '2024-05-02', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '1 May 2024 03:19:41 PM', '', '', '2024-05-01', '1', 0),
(452, 'MARKETING DATA ', 'COLLEGE', '', 'Krishna kumar', 'BHOPAL', '7067302120', '', '', '16', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '1 May 2024 02:53:04 PM', '', '', '2024-05-01', '1', 0),
(453, 'MARKETING DATA ', 'COLLEGE', '', 'Ayaan khan', 'BHOPAL', '7440547842', '', '', '16', 'FOLLOW UP (practical exam h last exam 13th may ko h)', '2024-05-13', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '1 May 2024 03:21:35 PM', '', '', '2024-05-01', '1', 0),
(454, 'MARKETING DATA ', 'COLLEGE', '', '', 'BHOPAL', '6266896659', '', '', '16', 'PENDING (pick and cut)', '2024-05-02', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '1 May 2024 03:43:30 PM', '', '', '2024-05-01', '1', 0),
(455, 'MARKETING DATA ', 'COLLEGE', '', '', 'BHOPAL', '6267230858', '', '', '16', 'PENDING (abhi bahar hu market me)', '2024-05-02', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '1 May 2024 03:45:38 PM', '', '', '2024-05-01', '1', 0),
(456, 'MARKETING DATA ', 'COLLEGE', '', 'Govind ', 'BHOPAL', '6268515032', '', '', '16', 'NEGATIVE ', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '1 May 2024 03:47:00 PM', '', '', '2024-05-01', '1', 0),
(457, 'MARKETING DATA ', 'COLLEGE', '', 'Neha 8', 'BHOPAL', '7000265343', '', '', '16', 'PENDING  ( family se koi expir ho gye h)', '2024-05-10', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '1 May 2024 03:55:26 PM', '', '', '2024-05-01', '1', 0),
(458, 'MARKETING DATA ', 'COLLEGE', '', '', 'BHOPAL', '7000516421', '', '', '16', 'PENDING (NA)', '2024-05-02', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '1 May 2024 04:00:25 PM', '', '', '2024-05-01', '1', 0),
(459, 'MARKETING DATA ', 'COLLEGE', '', '', 'BHOPAL', '7000562024', '', '', '16', 'PENDING (NA)', '2024-05-02', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '1 May 2024 04:02:00 PM', '', '', '2024-05-01', '1', 0),
(460, 'MARKETING DATA ', 'COLLEGE', '', '', 'BHOPAL', '7024443533', '', '', '16', 'PENDING (NA)', '2024-05-02', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '1 May 2024 04:03:21 PM', '', '', '2024-05-01', '1', 0),
(461, 'MARKETING DATA ', 'COLLEGE', '', 'Rani choudhry ', 'BHOPAL', '7067148291', '', '', '16', 'PENDING practice chal rhe h', '2024-05-07', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '1 May 2024 04:07:10 PM', '', '', '2024-05-01', '1', 0),
(462, 'MARKETING DATA ', 'COLLEGE', '', '', 'BHOPAL', '7223952888', '', '', '16', 'PENDING (pick and cut)', '2024-05-02', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '1 May 2024 04:19:00 PM', '', '', '2024-05-01', '1', 0),
(463, 'MARKETING DATA ', 'COLLEGE', '', '', 'BHOPAL', '7225836752', '', '', '16', 'PENDING (pick and cut)', '2024-05-02', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '1 May 2024 04:22:54 PM', '', '', '2024-05-01', '1', 0),
(464, 'MARKETING DATA ', 'COLLEGE', '', 'Mohit', 'BHOPAL', '7247664041', '', '', '16', 'PENDING brother pick call ', '2024-05-02', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '1 May 2024 04:23:55 PM', '', '', '2024-05-01', '1', 0),
(465, 'MARKETING DATA ', 'COLLEGE', '', 'Anshika Dubey', 'BHOPAL', '7389124709', '', '', '16', 'FOLLOW up last practical 14th may ko ', '2024-05-15', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '1 May 2024 04:31:52 PM', '', '', '2024-05-01', '1', 0),
(466, 'MARKETING DATA ', 'COLLEGE', '', 'Aarti', 'BHOPAL', '7470375350', '', '', '16', 'FOLLOW UP last exam 13 ko h', '2024-05-14', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '1 May 2024 04:39:45 PM', '', '', '2024-05-01', '1', 0),
(467, 'MARKETING DATA ', 'COLLEGE', '', '', 'BHOPAL', '7470410023', '', '', '16', 'PENDING (Temprely out of service)', '2024-05-02', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '1 May 2024 04:49:40 PM', '', '', '2024-05-01', '1', 0),
(469, 'ENQUIRY', 'COLLEGE', 'BHEL COLLEGE', 'SATISH RAI', 'BHOPAL', '8823023038', '98959269555856656855555', 'XII ', '17', 'negetive', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '11 May 2024 03:18:04 PM', '11/May/2024 =>Fee issue\n', '', '2024-05-11', '1', 0),
(470, 'ENQUIRY', 'COLLEGE', 'BHEL COLLEGE', 'ARVIND OJHA', 'BHOPAL', '7724072358', '63596655955652', 'XII ', '17', 'pending', '2024-05-01', '2024-05-11', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '11 May 2024 03:19:07 PM', '11/May/2024 =>In coming off\n', '', '2024-05-11', '1', 0),
(471, 'ENQUIRY', 'COLLEGE', 'BHEL COLLEGE', 'ADIL QURESHI', 'BHOPAL', '9302196867', '7489831774', 'XII ', '17', 'closed', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '11/May/2024 =>Wrong numbers \n', '', '2024-05-11', '0', 0),
(472, 'ENQUIRY', 'COLLEGE', 'BHEL COLLEGE', 'AKASH JATAV', 'BHOPAL', '7909364162', '9174140277', 'XII ', '17', 'interested', '', '2024-05-11', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', '11 May 2024 03:22:14 PM', '11/May/2024 =>Ayega sister k saath \n', '', '2024-05-11', '1', 0),
(473, 'ENQUIRY', 'COLLEGE', 'BHEL COLLEGE', 'DEEPESH YADAV', 'BHOPAL', '7415809012', '8103049933', 'XII ', '17', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-05-11', '0', 0),
(474, 'ENQUIRY', 'COLLEGE', 'BHEL COLLEGE', 'MAYUR MITTOLE', 'BHOPAL', '8817442417', '', 'XII ', '17', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-05-11', '0', 0),
(475, 'ENQUIRY', 'COLLEGE', 'BHEL COLLEGE', 'DEVENDRA PRAJAPATI', 'BHOPAL', '7697208647', '', 'XII ', '17', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-05-11', '0', 0),
(476, 'ENQUIRY', 'COLLEGE', 'BHEL COLLEGE', 'SATYAM PRAJAPATI', 'BHOPAL', '7879385324', '', 'XII ', '17', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-05-11', '0', 0),
(477, 'ENQUIRY', 'COLLEGE', 'BHEL COLLEGE', 'NARENDRA GIRI', 'BHOPAL', '9993189136', '', 'XII ', '17', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-05-11', '0', 0),
(478, 'ENQUIRY', 'COLLEGE', 'BHEL COLLEGE', 'ANIL KUMAR', 'BHOPAL', '7408527815', '', 'XII ', '17', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-05-11', '0', 0),
(479, 'ENQUIRY', 'COLLEGE', 'BHEL COLLEGE', 'NIKETAN', 'BHOPAL', '9310088241', '', 'XII ', '17', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-05-11', '0', 0);
INSERT INTO `studentdetails` (`id`, `filesource`, `category`, `institute`, `fname`, `locationn`, `contactno`, `parentscontactno`, `classname`, `allotedTo`, `status`, `followup`, `comingOn`, `cometime`, `counselor`, `age`, `weight`, `height`, `bmi`, `sms`, `updateforcalling`, `seminarattended`, `Slottime`, `modified`, `comment`, `callHistory`, `addedOn`, `called`, `TimeCalled`) VALUES
(480, 'ENQUIRY', 'COLLEGE', 'BHEL COLLEGE', 'HEMANT YADAV', 'BHOPAL', '9993235281', '', 'XII ', '17', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-05-11', '0', 0),
(481, 'ENQUIRY', 'COLLEGE', 'BHEL COLLEGE', 'NITIN SINGH', 'BHOPAL', '7224054735', '9171496608', 'XII ', '17', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-05-11', '0', 0),
(482, 'ENQUIRY', 'COLLEGE', 'BHEL COLLEGE', 'PRABHAT DEHARIYA', 'BHOPAL', '6264413174', '8085567489', 'XII ', '17', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-05-11', '0', 0),
(483, 'ENQUIRY', 'COLLEGE', 'BHEL COLLEGE', 'MANOHAR PATEL', 'BHOPAL', '8964081570', '', 'XII ', '17', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-05-11', '0', 0),
(484, 'EVENT ', 'COLLEGE', 'BHEL COLLEGE', 'RUPALI', 'BHOPAL', '9244360045', '9977756835', 'BCOM', '17', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-05-11', '0', 0),
(485, 'EVENT ', 'COLLEGE', 'BHEL COLLEGE', 'SIDDHANT THAKUR', 'BHOPAL', '9111378956', '9981181945', 'BCOM', '17', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-05-11', '0', 0),
(486, 'EVENT ', 'COLLEGE', 'BHEL COLLEGE', 'ISHANT KANOIYA', 'BHOPAL', '7389130800', '9926565265', 'BCOM', '17', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-05-11', '0', 0),
(487, 'EVENT ', 'COLLEGE', 'BHEL COLLEGE', 'BHAJESH KUMAR', '', '7061290269', '', 'BCOM', '17', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-05-11', '0', 0),
(488, 'EVENT ', 'COLLEGE', 'BHEL COLLEGE', 'PRASANT CHANDRA', '', '7870485583', '', 'BCOM', '17', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-05-11', '0', 0),
(489, 'EVENT ', 'COLLEGE', 'BHEL COLLEGE', 'MUSKAN KAPADNE', '', '8319912761', '9669967690', 'BCOM', '17', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-05-11', '0', 0),
(490, 'EVENT ', 'COLLEGE', 'BHEL COLLEGE', 'AMAN AHIRWAR', '', '9755574753', '', 'BCOM', '17', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-05-11', '0', 0),
(491, 'EVENT ', 'COLLEGE', 'BHEL COLLEGE', 'VIVEK SEN', '', '7869122673', '', 'BCOM', '17', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-05-11', '0', 0),
(492, 'EVENT ', 'COLLEGE', 'BHEL COLLEGE', 'PAWAN KUMAR', '', '9329998758', '', 'BCOM', '17', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-05-11', '0', 0),
(493, 'EVENT ', 'COLLEGE', 'BHEL COLLEGE', 'GOURAV VISHWAKARMA', '', '6232171972', '', 'BCOM', '17', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-05-11', '0', 0),
(494, 'EVENT ', 'COLLEGE', 'BHEL COLLEGE', 'KUMER THAKUR', '', '9301818349', '', 'BCOM', '17', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-05-11', '0', 0),
(495, 'EVENT ', 'COLLEGE', 'BHEL COLLEGE', 'SANTOSH SANODE', '', '7869212907', '', 'BCOM', '17', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-05-11', '0', 0),
(496, 'EVENT ', 'COLLEGE', 'BHEL COLLEGE', 'VIKAS MEENA', '', '9752782861', '', 'BCOM', '17', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-05-11', '0', 0),
(497, 'EVENT ', 'COLLEGE', 'BHEL COLLEGE', 'AMAAN KHAN', '', '6232079141', '', 'BCOM', '17', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-05-11', '0', 0),
(498, 'EVENT ', 'COLLEGE', 'BHEL COLLEGE', 'AMAN KHAN', '', '7489831774', '6260168646', 'BCOM', '17', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-05-11', '0', 0),
(499, 'EVENT ', 'COLLEGE', 'BHEL COLLEGE', 'SAMEER KHAN', '', '9755404291', '', 'BCOM', '17', '', '', '', NULL, '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '', '', '2024-05-11', '0', 0),
(501, 'lead_from_student', 'School', 'Campion School', 'Rituraj', 'Bhopal', '0123456789', '', 'XII', '14', 'pending', '', '', '', '', 0, 0, 0, 0, '', '', '', '0000-00-00 00:00:00', NULL, '15/May/2024 =>\n', '', '2024-05-14', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(3) NOT NULL,
  `texttest` text NOT NULL,
  `testauthor` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `texttest`, `testauthor`) VALUES
(1, 'Enrolling in IIAHM Aviation Academy was one of the best decisions I\'ve made for my career. The comprehensive training programs equipped me with the necessary skills and knowledge to excel in the aviation industry. The faculty members are experienced professionals who provided personalized guidance and support throughout my training journey.', 'Rahul'),
(2, 'Enrolling in IIAHM Aviation Academy was one of the best decisions I\'ve ever made. Their comprehensive training program equipped me with the necessary skills and knowledge to excel in the aviation industry. The instructors were experienced professionals who provided invaluable insights and guidance throughout my journey. Thanks to IIAHM, I not only secured a job with a leading airline but also felt confident and prepared for the challenges ahead.', 'Sonia');

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `id` int(11) NOT NULL,
  `trainimg` varchar(50) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `tfield` varchar(60) NOT NULL,
  `bio` text NOT NULL,
  `showH` enum('Yes','No') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`id`, `trainimg`, `fname`, `tfield`, `bio`, `showH`) VALUES
(2, 'Mahendra Singh.png', 'Mahendra Singh', ' Hospitality Trainer ', '    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irur', 'No'),
(3, 'Shalini Fouzdar.png', 'Shalini Fouzdar', 'Founder', 'Mrs. Shalini Fouzdar is a great personality with a creative mind and a positive approach. She has got a wonderful exposure of working in both domestic and International Airlines of more than 15 years. ', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(55) NOT NULL,
  `username` varchar(70) NOT NULL,
  `pasword` varchar(70) NOT NULL,
  `email` varchar(55) NOT NULL,
  `secure_id` varchar(70) NOT NULL DEFAULT 'Default',
  `isActive` tinyint(4) NOT NULL DEFAULT 0,
  `rights` int(1) NOT NULL DEFAULT 0,
  `token` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `username`, `pasword`, `email`, `secure_id`, `isActive`, `rights`, `token`) VALUES
(1, 'Rituraj Sen', 'pulak', '2b4d1ed9c145d5d5192d4bca64942f1e', 'pulaksingh1998@gmail.com', 'DEFAULT', 0, 3, ''),
(2, 'Rituraj', 'rituraj', '2b4d1ed9c145d5d5192d4bca64942f1e', 'rituraj@iiahmbpl.com', 'Default', 0, 4, ''),
(11, 'Rituraj', 'user', '8f9bfe9d1345237cb3b2b205864da075', 'User@gmail.com', 'DEFAULT', 0, 4, ''),
(12, 'user2', 'username', '14c4b06b824ec593239362517f538b29', 'Username@gmail.com', 'DEFAULT', 0, 5, ''),
(13, 'Alma Ma\'am', 'alma', '123456', '', 'Default', 0, 6, ''),
(14, 'Sanjay Sahu', 'sanjay', 'b1231b2b609cf8c0e37880e257fe41b6', 'iiahmaviationacademysanjay@gmail.com', '3d94102fe1eca58e9038da63fd115dd2', 1, 4, ''),
(15, 'Mohini Nigam', 'mohini', 'f136b860f0a56856fa8244fb68262c3c', 'mohiniiiahm@gmail.com', 'Default', 0, 4, ''),
(16, 'Rekha Bharti Soni', 'rekhabharti', 'b65dbd69c2ba406ae045adb66520ff3f', 'rekhaiiahm@gmail.com', 'a9c8013d7a6fccde3ff0bf234076c43d', 1, 4, ''),
(17, 'Mamta meena', 'muskan', 'd55bac79f7c247e4054b7cc2785a0f47', 'muskan@gmail.com', '35df80d9e5ff0366df29c3c961478ea9', 1, 4, '');

-- --------------------------------------------------------

--
-- Table structure for table `websitesetting`
--

CREATE TABLE `websitesetting` (
  `id` int(11) NOT NULL,
  `scrollert` varchar(100) NOT NULL,
  `adress` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ContactNo` varchar(50) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `bgimghero` varchar(50) NOT NULL,
  `h1text` varchar(100) NOT NULL,
  `subhead` varchar(255) NOT NULL,
  `paraM` text NOT NULL,
  `listM` varchar(255) NOT NULL,
  `Whyimg` varchar(50) NOT NULL,
  `whyiiahmtext` text NOT NULL,
  `affimg` varchar(100) NOT NULL,
  `textaff` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `websitesetting`
--

INSERT INTO `websitesetting` (`id`, `scrollert`, `adress`, `email`, `ContactNo`, `logo`, `bgimghero`, `h1text`, `subhead`, `paraM`, `listM`, `Whyimg`, `whyiiahmtext`, `affimg`, `textaff`) VALUES
(1, 'See Our Placements | Admission Open For Batch 2024', '162, Modi Heights ,Zone-2 , <br>  MP Nagar ,Bhopal(M.P) , India', 'iiahm.bho@gmail.com', ' +91 8109520248, +91 6265715454 ', 'logo.jpg', 'bghero.jpg', 'Take your maiden flight with IIAHM Aviation Academy', 'The vision of IIAHM is to mould the youth who are keen to go in the aviation and hospitality industry to highly competent and trained professionals.', 'Ascertaining client needs and expectations Designing methodologies to match these needs and expectations Assigning the appropriate consulting and training experts for the assignment Creating customized training manuals. <br> We proudly introduce ourselves as one of the emerging Institute for Air Hostess training in Bhopal & Indore and Personality Development. In fact we are proud to say that we are the pioneers in organizing campus selections. IIAHM offers most alluring career with Aviation courses in Bhopal and Indore.', '<li>Over All Development.</li><li>Guarantee Placement.</li>', 'https://source.unsplash.com/random/?aviation,airpo', '<h3><strong>Expert trainers</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Expert trainers</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Great history</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>We have almost 100% Placement Record</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>In-house facilities</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>We Provide most of facilities in-house to the students</li>\r\n</ul>\r\n', 'https://lh3.googleusercontent.com/p/AF1QipPlflvuYtN7wkAtvxXfDGKyeauY2BDayyX3O0ug=w768-h768-n-o-v1', '<ul>\r\n	<li><strong>Dubai Accreditation Centre (DAC)</strong>, approved under the Dubai Municipality, Govt. of Dubai. Accreditation by DAC is formal recognition that a Conformity Assessment Body (CAB) is competent to carry out specific tasks, i.e. specific types of tests, calibration methods, inspections, or certification activities.</li>\r\n	<li>\r\n	<p><strong>INTERNATIONAL ACCREDITATION SERVICES [IAS]</strong> is a nonprofit, public-benefit corporation that has been providing accreditation services since 1975. IAS accredits a wide range of companies and organizations including governmental entities, commercial businesses, and professional associations.</p>\r\n	</li>\r\n</ul>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_details`
--
ALTER TABLE `core_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counselor`
--
ALTER TABLE `counselor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `empdetails`
--
ALTER TABLE `empdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frontdesk`
--
ALTER TABLE `frontdesk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobapply`
--
ALTER TABLE `jobapply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `placementimg`
--
ALTER TABLE `placementimg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentdetails`
--
ALTER TABLE `studentdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `websitesetting`
--
ALTER TABLE `websitesetting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `core_details`
--
ALTER TABLE `core_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `counselor`
--
ALTER TABLE `counselor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `empdetails`
--
ALTER TABLE `empdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `frontdesk`
--
ALTER TABLE `frontdesk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jobapply`
--
ALTER TABLE `jobapply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `placementimg`
--
ALTER TABLE `placementimg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `studentdetails`
--
ALTER TABLE `studentdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=502;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `websitesetting`
--
ALTER TABLE `websitesetting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
