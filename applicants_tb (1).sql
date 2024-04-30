-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2024 at 01:29 PM
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
-- Table structure for table `applicants_tb`
--

CREATE TABLE `applicants_tb` (
  `id` int(11) NOT NULL,
  `studentnum` varchar(20) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dateapplied` date NOT NULL,
  `applicantstatus` varchar(255) NOT NULL DEFAULT 'Pending',
  `totalApplicants` int(1) NOT NULL,
  `approvedApplicants` int(1) NOT NULL,
  `deniedApplicants` int(1) NOT NULL,
  `organization` varchar(255) NOT NULL,
  `program` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `division` varchar(255) NOT NULL,
  `cvresume` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applicants_tb`
--

INSERT INTO `applicants_tb` (`id`, `studentnum`, `firstname`, `lastname`, `email`, `dateapplied`, `applicantstatus`, `totalApplicants`, `approvedApplicants`, `deniedApplicants`, `organization`, `program`, `position`, `division`, `cvresume`) VALUES
(47, '2021163740', 'John Daniel', 'Ocampo', 'johndaniel.ocampo.cics@ust.edu.ph', '2024-04-29', 'Approved', 3, 2, 1, 'UST Computer Science Society                                ', 'Information Technology', 'Executive Coordinator To The President', 'Presidential & Community Development Community', '4072-Sample_Resume.docx.pdf'),
(48, '2021163740', 'John Daniel', 'Ocampo', 'johndaniel.ocampo.cics@ust.edu.ph', '2024-04-29', 'Denied', 3, 2, 1, 'UST Computer Science Society                                ', 'Information Technology', 'Executive Associate to the Corporate Secretary', 'Secretariat Committee', '7682-Sample_Resume.docx.pdf'),
(49, '2021163740', 'John Daniel', 'Ocampo', 'johndaniel.ocampo.cics@ust.edu.ph', '2024-04-29', 'Approved', 3, 2, 1, 'UST Thomasian Gaming Society                                ', 'Information Technology', 'Executive Associate to the Chief Finance Director', 'Finance Committee', '5422-Sample_Resume.docx.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicants_tb`
--
ALTER TABLE `applicants_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicants_tb`
--
ALTER TABLE `applicants_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
