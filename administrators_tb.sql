-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2024 at 07:10 PM
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
-- Database: `finalproj2609_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrators_tb`
--

CREATE TABLE `administrators_tb` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `administrators_tb`
--

INSERT INTO `administrators_tb` (`id`, `email`, `pass`) VALUES
(1, 'cnag.cics@ust.edu.ph', '$2y$10$EDch/rs1yGDVPS/aIGwL8O/0QvpghINa1j9l3NlYmgZ103E8Xp//O'),
(2, 'Icscomelec.cics@ust.edu.ph', '$2y$10$qC8Ab2jocqH5N.btZ4qBJOYwCQCj5O2HBsF24rOD4OkJxmssR/4/C'),
(3, 'css.cics@ust.edu.ph', '$2y$10$7dXMR4YNiCM9qCLFnbVHFuaLyIvFa2ctdH2aQcw5KDZH/onSnJZYC'),
(4, 'iss.cics@ust.edu.ph', '$2y$10$VkJ9swrmRLzUk5U6U7YHX.c08mG8g5e8rdSD69qaIZbtKnnISGzdu'),
(5, 'paxromana.cics@ust.edu.ph', '$2y$10$6VCUCKkE6tGGhhfqegBLeOHIiZyNYAalDpYn3cItD6oUCHJpbKSxW'),
(6, 'site.cics@ust.edu.ph', '$2y$10$Pt8ldcEDkYbaL4sxA06n4.vbJjjN4FMgYlnXKV6YlUdKn4R0j.qN.'),
(7, 'tgs.cics@ust.edu.ph', '$2y$10$N9jUUKJV7OKzEEVXKdx1W.zXKVPA30O2eIYfO/AjIiJDdFvpRtVyy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrators_tb`
--
ALTER TABLE `administrators_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrators_tb`
--
ALTER TABLE `administrators_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
