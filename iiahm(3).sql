-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2024 at 07:29 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `placementimg`
--

CREATE TABLE `placementimg` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(3) NOT NULL,
  `texttest` text NOT NULL,
  `testauthor` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `core_details`
--
ALTER TABLE `core_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `frontdesk`
--
ALTER TABLE `frontdesk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobapply`
--
ALTER TABLE `jobapply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `placementimg`
--
ALTER TABLE `placementimg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `studentdetails`
--
ALTER TABLE `studentdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `websitesetting`
--
ALTER TABLE `websitesetting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
