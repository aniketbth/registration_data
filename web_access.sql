-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 10, 2024 at 08:31 PM
-- Server version: 8.0.36-0ubuntu0.22.04.1
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_access`
--

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `id` int NOT NULL,
  `username` varchar(350) NOT NULL,
  `password` varchar(250) NOT NULL,
  `user_dob` varchar(250) NOT NULL,
  `contact_no` varchar(250) NOT NULL,
  `user_mail` varchar(250) NOT NULL,
  `user_otp` varchar(350) NOT NULL,
  `otp_status` varchar(350) NOT NULL,
  `address` varchar(350) NOT NULL,
  `employee_code` varchar(250) NOT NULL,
  `employee_img` varchar(350) NOT NULL,
  `state_code` varchar(350) NOT NULL,
  `country_code` varchar(350) NOT NULL,
  `onboarding_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`id`, `username`, `password`, `user_dob`, `contact_no`, `user_mail`, `user_otp`, `otp_status`, `address`, `employee_code`, `employee_img`, `state_code`, `country_code`, `onboarding_date`) VALUES
(1, 'Aniket Noel', '', '2024-04-13', '23132344', 'aniket@gmail.com', 'L4PP12', 'Pending', 'test', '0U4718SD', 'http://localhost/registrarion_data/Users_img/IMG-20230615-WA0025.jpg', 'FSDFSDF', '1234', '2024-04-10 12:52:52'),
(2, 'Aniket Noel', '123', '2024-04-20', '3445433', 'aniket@gmail.com', '2POEP9', 'Pending', 'asdfav', '65C78EUD', 'http://localhost/registrarion_data/Users_img/avatar-01.jpg', '1234', '1234', '2024-04-10 12:54:39'),
(3, 'Aniket Noel', '1234', '2024-04-11', '2345234', 'aniket@gmail.com', 'YPE23O', 'Pending', 'asdfav', 'C5O4RU9E', 'http://localhost/registrarion_data/Users_img/IMG-20230615-WA0025.jpg', 'asdfasd', '1234', '2024-04-10 12:55:55'),
(4, 'Aniket Noel', '1234', '2024-04-13', '342452', 'aniket@gmail.com', '8ET3P2', 'Pending', 'asdfav', '98C6RSDO', 'http://localhost/registrarion_data/Users_img/IMG-20230615-WA0025.jpg', '1234', '1234', '2024-04-10 13:12:24'),
(5, 'Aniket Noel', '1234', '2024-04-14', '345435', 'aniket@gmail.com', '924O86', 'Pending', 'asdfav', '0C2REUD8', 'http://localhost/registrarion_data/Users_img/IMG-20230615-WA0025.jpg', '1234', '1234', '2024-04-10 13:22:19'),
(6, 'Aniket Noel', '1234', '2024-04-12', '2353454', 'elitesam2003@gmail.com', '2T9P6L', 'Pending', '1234', '9D586URE', 'http://localhost/registrarion_data/Users_img/IMG-20230615-WA0025.jpg', 'FSDFSDF', 'vwfw', '2024-04-10 14:31:53'),
(7, 'Aniket', '12', '2024-04-03', '24233', 'elitesam2003@gmail.com', 'O3E617', 'Pending', 'test', '729ERD0U', 'http://localhost/registrarion_data/Users_img/IMG-20230615-WA0025.jpg', '1234', '1234', '2024-04-10 14:38:55'),
(8, 'Aniket Noel', '123', '2024-04-09', '4353454', 'aniket@gmail.com', 'P34O6L', 'Pending', 'test', '1EDS4U27', 'http://localhost/registrarion_data/Users_img/IMG-20230615-WA0025.jpg', '1234', '1234', '2024-04-10 14:46:08'),
(9, 'Aniket Noel', '1234', '2024-04-02', '34654', 'aniket@gmail.com', '3T642P', 'Pending', 'asdfav', '3OU74SC2', 'http://localhost/registrarion_data/Users_img/IMG-20230615-WA0025.jpg', '1234', '1234', '2024-04-10 14:51:26'),
(10, 'Aniket Noel', '123', '2024-04-12', '5464', 'aniket@gmail.com', 'PY53M2', 'Pending', 'asdfav', '6SC7UDR0', 'http://localhost/registrarion_data/Users_img/IMG-20230615-WA0025.jpg', '1234', '1234', '2024-04-10 14:53:51');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(350) NOT NULL,
  `registration_Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `username`, `email`, `password`, `registration_Date`) VALUES
(1, '', '', '', '2024-04-10 07:05:25'),
(2, 'Aniket Noel', 'aniket@gmail.com', '1234', '2024-04-10 07:05:31'),
(3, '', '', '', '2024-04-10 09:28:04'),
(4, '', '', '', '2024-04-10 09:28:16'),
(5, '', '', '', '2024-04-10 09:29:04'),
(6, 'Aniket Noel', 'aniket@gmail.com', '1234', '2024-04-10 09:29:10'),
(7, '', '', '', '2024-04-10 09:29:14'),
(8, '', '', '', '2024-04-10 09:45:36'),
(9, '', '', '', '2024-04-10 09:46:03'),
(10, '', '', '', '2024-04-10 09:46:10'),
(11, '', '', '', '2024-04-10 09:47:11'),
(12, 'Aniket Noel', 'aniket@gmail.com', '1234', '2024-04-10 09:47:19'),
(13, '', '', '', '2024-04-10 09:47:23'),
(14, '', '', '', '2024-04-10 09:47:33'),
(15, '', '', '', '2024-04-10 09:49:38'),
(16, '', '', '', '2024-04-10 09:53:08'),
(17, '', '', '', '2024-04-10 09:53:30'),
(18, '', '', '', '2024-04-10 09:57:35'),
(19, '', '', '', '2024-04-10 09:59:34'),
(20, '', '', '', '2024-04-10 10:00:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sign_up`
--
ALTER TABLE `sign_up`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
