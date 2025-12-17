-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2025 at 07:53 PM
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
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `lmsreg`
--

CREATE TABLE `lmsreg` (
  `id` int(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(6) NOT NULL,
  `access_level` int(255) NOT NULL,
  `createdAT` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lmsreg`
--

INSERT INTO `lmsreg` (`id`, `fullname`, `username`, `email`, `password`, `access_level`, `createdAT`) VALUES
(1, 'jejelowo michael', 'ayojeje', 'ayojejelowo@gmail.com', '12345', 0, '0000-00-00 00:00:00.000000'),
(2, 'jejelowo michael', 'ayojeje', 'ayojejelowo@gmail.com', '12345', 0, '0000-00-00 00:00:00.000000'),
(3, 'Jejelowo michael', 'ayojeje', 'ayojejelowo@gmail.com', '12345', 0, '0000-00-00 00:00:00.000000'),
(4, 'Jejelowo michael', 'ayojeje', 'ayojejelowo@gmail.com', '12345', 0, '0000-00-00 00:00:00.000000'),
(5, 'vickky', 'vickkyj', 'vickky@gmail.com', '11111', 0, '0000-00-00 00:00:00.000000'),
(6, 'vickky', 'vickkyj', 'vickky@gmail.com', '11111', 0, '0000-00-00 00:00:00.000000'),
(7, 'opeoluwa', 'opejay', 'opeoluwa@gmail.com', '11111', 0, '0000-00-00 00:00:00.000000'),
(8, 'Jejelowo', 'ayojeje', 'ayojejelowo@gmail.com', '22222', 0, '0000-00-00 00:00:00.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lmsreg`
--
ALTER TABLE `lmsreg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lmsreg`
--
ALTER TABLE `lmsreg`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
