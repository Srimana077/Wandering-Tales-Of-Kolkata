-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jun 26, 2023 at 11:29 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contact_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_entries`
--

CREATE TABLE `user_entries` (
  `id` int(20) NOT NULL,
  `Name_fd` varchar(50) NOT NULL,
  `Email_fd` varchar(20) NOT NULL,
  `Message_fd` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_entries`
--

INSERT INTO `user_entries` (`id`, `Name_fd`, `Email_fd`, `Message_fd`) VALUES
(1, 'shikha', '', 'erfwrw'),
(2, 'shikha', 'sri@gmail.com', 'sgrs'),
(3, 'shikha', 'sri@gmail.com', 'sgrs'),
(4, 'shikha', 'sri@gmail.com', 'sgrs'),
(5, 'srimana', 'sri@gmail.com', 'hi'),
(6, 'Archana', 'archana@gmail.com', 'afaefa'),
(7, 'savita', 'archana@gmail.com', 'hi'),
(8, 'arpita', 'arpita@gmail.com', 'hey'),
(9, 'shikha', 'arpita@gmail.com', 'hngfjn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_entries`
--
ALTER TABLE `user_entries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_entries`
--
ALTER TABLE `user_entries`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
