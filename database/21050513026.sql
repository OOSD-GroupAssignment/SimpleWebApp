-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2022 at 03:10 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `fullname` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `usertype` varchar(25) NOT NULL,
  `avatar` varchar(25) NOT NULL,
  `token` varchar(15) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `password`, `email`, `usertype`, `avatar`, `token`, `status`) VALUES
(2, 'julius', 'julius', '$2y$10$HYuCHMGzxIk8mqoCxdInYuzaTYuFpaboZm2ItNOgTQlXhSPPsyo9O', 'uhgiugiyguu@gmail.com', 'admin', 'logo.PNG', '', ''),
(3, 'tony', 'rere', '$2y$10$k8YUOzFCcxW1dG6MYdcLguSNSFwhh/142yb5fFduzVPEEdvZWnpxm', 'tt403354@gmail.com', 'landlord', 'LOGO_3.png', '', ''),
(4, 'tony', 'yeryer', '$2y$10$AkGkZBDIcxbzwV9chQVCZeLvS7ou3oinO06KiZax9GlvM7l7j3btS', 'yeryer@gmail.com', 'tenant', 'LOGO_1.png', '9091', 'inactive'),
(6, 'julius', 'julius', '$2y$10$I3yiYPZRPoNz1Y03IJ.X5ezn/TA4dqnh4A.6YWZ69dui1bLhSn8DS', 'julyjuly@gmail.com', 'tenant', 'LOGO_3.png', '1556', 'inactive'),
(8, 'tony', 'tonyrine', '$2y$10$RloW8wDvkyf9EuX4s2B4xe335NepSrwMVOZR3Cj.KMkcPegTdx7oy', 'juliuspascal@gmail.com', 'landlord', '18-187940_free-icons-png-', '2135', 'inactive'),
(9, 'bakar', 'nyoni', '$2y$10$O8nDTjtD7Ueg3bt94y7djuwNyIlv3zkkK.eb8jkNQiFkfE3u4Nxxq', 'bakarinyoni@gmail.com', 'tenant', '124010.png', '2917', 'inactive');

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
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
