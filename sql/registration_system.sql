-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2024 at 04:49 PM
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
-- Database: `registration_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `stock_images`
--

CREATE TABLE `stock_images` (
  `id` int(255) NOT NULL,
  `img_name` varchar(255) NOT NULL,
  `img_content` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `files` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `urole` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`firstname`, `lastname`, `email`, `password`, `urole`, `created_at`, `id`) VALUES
('krisana', 'Thammanitayakul', 'krisanat@cri.or.th', '$2y$10$1gEQVE25aDT5mSRR1KDsku4YycdwHx3FT.8BAkEEjpsysboRxfM/C', 'user', '2024-03-04 14:51:14', 1),
('admin', 'admin', 'admin@gmail.com', '$2y$10$ewMTKK/0Ge4TDaP9pA6ZM.hKKktHpV7xcgirukAYI9s5IC1uy.EXC', 'admin', '2024-03-04 14:54:00', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stock_images`
--
ALTER TABLE `stock_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stock_images`
--
ALTER TABLE `stock_images`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
