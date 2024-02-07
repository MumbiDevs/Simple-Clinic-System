-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2024 at 11:02 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `patient_details`
--

CREATE TABLE `patient_details` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `gender` enum('male','female') DEFAULT NULL,
  `temp` decimal(5,2) DEFAULT NULL,
  `pulse` int(11) DEFAULT NULL,
  `bp` int(11) DEFAULT NULL,
  `r` int(11) DEFAULT NULL,
  `spo` int(11) DEFAULT NULL,
  `bs` int(11) DEFAULT NULL,
  `consult` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient_details`
--

INSERT INTO `patient_details` (`id`, `fname`, `age`, `phone`, `gender`, `temp`, `pulse`, `bp`, `r`, `spo`, `bs`, `consult`) VALUES
(1, 'ray', 41, '0700213654', 'male', 39.00, 62, 66, 0, 7, 5, ''),
(3, 'ray', 20, '0700213654', 'male', 39.00, 9, 8, 4, 6, 2, 'ujyj dsnhjfjf fjfjfjf jfjfjf jvjjf'),
(4, 'Jaymo', 35, '0789456321', 'male', 39.00, 2, 66, 6, 2, 5, 'kunani huku'),
(5, 'vic', 32, '0741562398', 'male', 40.00, 2, 66, 6, 7, 2, 'hizi sasa ni mawhat?'),
(6, 'Jaymo', 35, '0723253615', 'male', 35.00, 8, 69, 9, 5, 19, 'may u not be sick');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patient_details`
--
ALTER TABLE `patient_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patient_details`
--
ALTER TABLE `patient_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
