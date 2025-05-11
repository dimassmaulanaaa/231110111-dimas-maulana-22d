-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2025 at 07:25 PM
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
-- Database: `db_my_biodata`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `personal_id` int(3) NOT NULL,
  `name` varchar(25) NOT NULL,
  `place_of_birth` varchar(25) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(15) NOT NULL,
  `address` varchar(35) NOT NULL,
  `telephone` varchar(14) NOT NULL,
  `email` varchar(35) NOT NULL,
  `profile_photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`personal_id`, `name`, `place_of_birth`, `date_of_birth`, `gender`, `address`, `telephone`, `email`, `profile_photo`) VALUES
(1, 'Dimas Maulana', 'Jakarta', '2003-06-25', 'Male', 'Klaten, Jawa Tengah', '+6287889198491', 'dimasmaulana.idn@gmail.com', '6820dc78d3bc5.png');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` int(3) NOT NULL,
  `project_category` varchar(25) NOT NULL,
  `project_details` varchar(100) NOT NULL,
  `project_photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `project_category`, `project_details`, `project_photo`) VALUES
(82, 'Graphic Design', 'SHANE INDONESIA - Logo Design', '681defc42ca62.png'),
(83, 'Graphic Design', 'WL SKIN FIBER DRINK - Social media design', '681defddc6ec4.png'),
(85, 'Graphic Design', 'ETTASHAN3 - Social media design special ramadhan', '6820dc9a359c4.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`personal_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `personal_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `project_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
