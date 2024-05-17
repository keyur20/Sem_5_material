-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2023 at 09:02 PM
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
-- Database: `contact_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(10) NOT NULL,
  `date` datetime NOT NULL,
  `gender` enum('male','female','others') NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `email`, `number`, `date`, `gender`, `address`) VALUES
(1, 'keyur patel', 'keyur.n.patel100@gmail.com', '9764321587', '2023-10-23 00:20:00', 'male', 'U-404 , JAL VAYU VIHAR , PHASE-3 , SECTOR-20 '),
(2, 'Harsh Panchal', 'harsh.panchal@gmail.com', '8956324576', '2023-10-24 14:25:00', 'male', 'kandivali,x-405,sector-4,twin towers'),
(3, 'karan patel', 'karan4.@gmail.com', '9785321456', '2023-10-25 00:23:00', 'male', 'vashi,sector-2,lodha amara'),
(4, 'Tirth Patel', 'tirth.jp@gmail.com', '9786234567', '2023-10-27 00:24:00', 'female', 'thane,empire estate ,sector-9'),
(6, 'Archit gopal', 'archit.100@gmail.com', '7891991563', '2023-10-30 00:29:00', 'male', 'vashi,sector-2,lodha amara');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
