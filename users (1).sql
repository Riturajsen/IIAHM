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
(1, 'Rituraj Sen', 'pulak', '2b4d1ed9c145d5d5192d4bca64942f1e', 'pulaksingh1998@gmail.com', '3cac252ab14f3c5d29668113a835db6d', 1, 3, ''),
(2, 'Rituraj', 'rituraj', '2b4d1ed9c145d5d5192d4bca64942f1e', 'rituraj@iiahmbpl.com', 'Default', 0, 4, ''),
(11, 'Rituraj', 'user', '8f9bfe9d1345237cb3b2b205864da075', 'User@gmail.com', 'DEFAULT', 0, 4, ''),
(12, 'user2', 'username', '14c4b06b824ec593239362517f538b29', 'Username@gmail.com', 'DEFAULT', 0, 5, ''),
(18, 'SOUMYA ', 'soumya', 'c46e7e19f91fa88ee049226fd7d5903a', 'soumya@email.com', 'DEFAULT', 0, 4, ''),
(19, 'Anjali ', 'anjali', '872f4efa9f7985a25eb96b0b35132ec9', 'anjali@gmail.com', 'DEFAULT', 0, 4, ''),
(20, 'Aman Choudhary', 'aman', '8276bff3d2bbd1f7c4c3c3b6981d0658', 'aman@gmail.com', '2d3aec8a15bbd189ebecbfa71f27313f', 1, 4, ''),
(21, 'Ayush Nigam', 'ayush', 'cb73c53ec9ff681b2d02de4cf722ece3', 'ayush@gmail.com', 'fdd41482bfd1d256f0b4d8ee0f9900a3', 1, 4, ''),
(22, 'shubham', 'shubham', 'b6ce9ac12d7c50a797ac7580ed00acf7', 'shubham@gmail.com', '2997dcd43f5b0304dd07fbb65c7025e9', 1, 4, ''),
(23, 'Shobha Tomar', 'shobha', 'd465a0c09120124eebb853457c8d6e9d', 'shobha@gmail.com', '869c3cbe15eccb2b7b834501a2dbceb4', 1, 2, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
