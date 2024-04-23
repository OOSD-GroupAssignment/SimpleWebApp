-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2024 at 01:05 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `21050513026`
--

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(25) NOT NULL,
  `laname` varchar(25) NOT NULL,
  `location` varchar(25) NOT NULL,
  `room_type` varchar(25) NOT NULL,
  `price` int(15) NOT NULL,
  `contact` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `laname`, `location`, `room_type`, `price`, `contact`) VALUES
(1, 'juma', 'majengo', 'Single(self)', 1777, 0),
(2, 'toto', 'ilikurei', 'Double', 232344, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(25) NOT NULL,
  `Firstname` varchar(25) NOT NULL,
  `Secondname` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Firstname`, `Secondname`, `password`, `email`) VALUES
(2, 'julius', 'julius', '$2y$10$HYuCHMGzxIk8mqoCxdInYuzaTYuFpaboZm2ItNOgTQlXhSPPsyo9O', 'uhgiugiyguu@gmail.com'),
(3, 'tony', 'rere', '$2y$10$k8YUOzFCcxW1dG6MYdcLguSNSFwhh/142yb5fFduzVPEEdvZWnpxm', 'tt403354@gmail.com'),
(4, 'tony', 'yeryer', '$2y$10$AkGkZBDIcxbzwV9chQVCZeLvS7ou3oinO06KiZax9GlvM7l7j3btS', 'yeryer@gmail.com'),
(6, 'julius', 'julius', '$2y$10$I3yiYPZRPoNz1Y03IJ.X5ezn/TA4dqnh4A.6YWZ69dui1bLhSn8DS', 'julyjuly@gmail.com'),
(8, 'tony', 'tonyrine', '$2y$10$RloW8wDvkyf9EuX4s2B4xe335NepSrwMVOZR3Cj.KMkcPegTdx7oy', 'juliuspascal@gmail.com'),
(9, 'bakar', 'nyoni', '$2y$10$O8nDTjtD7Ueg3bt94y7djuwNyIlv3zkkK.eb8jkNQiFkfE3u4Nxxq', 'bakarinyoni@gmail.com'),
(10, 'tfgohipjpo', 'cgfyguobkl', '$2y$10$rKcE/KjTL3gxDrj/MpKtp.xajvnW5kLYHlnCmWwsqwyqG.9QeMX72', 'jacklinegerald68@gmail.com'),
(11, 'tfgohipjpo', 'cgfyguobkl', '1234', 'threzamtenga@gmail.com'),
(12, 'tfgohipjpo', 'cgfyguobkl', '1234', 'threzamtenga@gmail.com'),
(13, 'tony', 'tooony', '$2y$10$Sam6xeTHtG9ilCb4XB90Qe5VxG2vO5/b8opapHsFwS3rNtsJt3/Uq', 'elaine.nelvine@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
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
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
