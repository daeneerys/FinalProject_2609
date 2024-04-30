-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2024 at 01:28 PM
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
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `studentid` varchar(20) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `phonenumber` varchar(11) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `birth` date NOT NULL,
  `degreeprogram` varchar(255) NOT NULL,
  `picture` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `studentid`, `firstname`, `middlename`, `lastname`, `email`, `pass`, `phonenumber`, `sex`, `birth`, `degreeprogram`, `picture`) VALUES
(6, '2021163740', 'John Daniel', 'Paras', 'Ocampo', 'johndaniel.ocampo.cics@ust.edu.ph', '$2y$10$ehy6o20QWOrhJhX2ACnHk.rwMoHcR2iWZuTzutHfu7r7ioPdFnl5S', '09957880640', 'Male', '2001-09-15', 'Information Technology', 0),
(7, '2022163741', 'Kobe', 'Bean', 'Bryant', 'kobebean.bryant.cics@ust.edu.ph', '$2y$10$614yVVfs9zsk44TOoX9d2OifNa76yCMBDvk7wdOopBztm/t609Cp6', '09957880640', 'Male', '2002-02-06', 'Information Technology', 0),
(9, '2022163742', 'Jane', 'Garcia', 'Doe', 'janegarcia@gmail.com', '$2y$10$zZ3L9t4EP34XnYYMRl1AQeuVMC4cgMaRhivP4.nvLqGhVLaWYOtBG', '09957880640', 'Female', '2000-05-03', 'Computer Science', NULL),
(10, '2021163741', 'Maria', 'Ozawa', 'Lee', 'mariaozawa@gmail.com', '$2y$10$7RE/iqYNLinrmcILEI1qQeh1v03XDwdzVPPYyFcgCU10U06tQw7I.', '09957880640', 'Female', '2003-02-03', 'Information System', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profile` (`picture`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `profile` FOREIGN KEY (`picture`) REFERENCES `profile_image` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
