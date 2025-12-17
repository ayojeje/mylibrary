-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2025 at 06:43 PM
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
-- Table structure for table `booksreg`
--

CREATE TABLE `booksreg` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `fileupload` varchar(255) NOT NULL,
  `createdAT` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booksreg`
--

INSERT INTO `booksreg` (`id`, `title`, `author`, `genre`, `categories`, `fileupload`, `createdAT`) VALUES
(5, 'just me', 'ope', 'prose', '', '1765658749_FB_IMG_1715712828367.jpg', '2025-12-13 20:45:49.528513'),
(6, 'the sucide', 'ope', 'prose', '', '1765658808_FB_IMG_1715712795230.jpg', '2025-12-13 20:46:48.279198'),
(7, 'beggers strike', 'rode', 'prose', '', '1765658941_FB_IMG_1726144298479.jpg', '2025-12-13 20:49:01.915224'),
(8, 'Dr faustus', 'christopher malowe', 'prose', '', '1765659026_FB_IMG_1719179875658.jpg', '2025-12-13 20:50:26.328605'),
(21, 'animal farm', 'dramma', 'jpp', '', '1765990033_book21.jpg', '2025-12-17 16:47:13.947610');

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
(8, 'Jejelowo', 'ayojeje', 'ayojejelowo@gmail.com', '22222', 0, '0000-00-00 00:00:00.000000'),
(9, 'ade', 'adeoba', 'ayojejelowo@gmail.com', '2222', 0, '0000-00-00 00:00:00.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booksreg`
--
ALTER TABLE `booksreg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lmsreg`
--
ALTER TABLE `lmsreg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booksreg`
--
ALTER TABLE `booksreg`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `lmsreg`
--
ALTER TABLE `lmsreg`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
