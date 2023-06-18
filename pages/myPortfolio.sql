-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 18, 2023 at 07:12 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u460357818_portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(1, 'Burke Harvey', 'guzefyc@mailinator.com', 'Fuga Officia qui et'),
(2, 'Cleo Dean', 'hamubig@mailinator.com', 'Error cum velit cons'),
(3, 'Cleo Dean', 'hamubig@mailinator.com', 'Error cum velit cons'),
(4, 'Cleo Dean', 'hamubig@mailinator.com', 'Error cum velit cons');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(6) UNSIGNED NOT NULL,
  `pagetitle` text DEFAULT NULL,
  `logo` text DEFAULT NULL,
  `metadescription` text DEFAULT NULL,
  `fullname` varchar(30) NOT NULL,
  `description` varchar(30) NOT NULL,
  `about` text NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `dob` text DEFAULT NULL,
  `number` text DEFAULT NULL,
  `location` text DEFAULT NULL,
  `facebook` text DEFAULT NULL,
  `instagram` text DEFAULT NULL,
  `linkedin` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `pagetitle`, `logo`, `metadescription`, `fullname`, `description`, `about`, `email`, `dob`, `number`, `location`, `facebook`, `instagram`, `linkedin`) VALUES
(1, 'Jeel Faldu - Personal Portfolio', 'assets/images/logo.gif', NULL, 'Jeel Faldu', 'Web developer', ' I am a skilled web developer with over 2 years of professional experience. My expertise lies in creating engaging and user-friendly portfolio websites that showcase my clients\' talents and achievements effectively. With a strong command of HTML, CSS, JavaScript, and various web development frameworks, I have successfully delivered visually stunning and responsive websites. I am passionate about staying updated with the latest industry trends and incorporating innovative technologies to provide my clients with cutting-edge solutions. As a result-oriented developer, I strive to create seamless user experiences while emphasizing clean code and optimal performance.', 'faldujeel@gmaill.com', 'Mar 31, 2000', '+918866378055', 'Junagadh, Gujarat, India', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
