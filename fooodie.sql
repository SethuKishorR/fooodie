-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 23, 2023 at 03:06 PM
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
-- Database: `fooodie`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` bigint(20) NOT NULL,
  `question` varchar(1028) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `email`, `number`, `question`) VALUES
(1, 'sethukishorramasamy@gmail.com', 8925638843, 'how are you'),
(2, 'sethukishorramasamy@gmail.com', 8925638843, 'how are you'),
(3, 'sethukishorramasamy@gmail.com', 8925638843, 'how are you'),
(4, 'sethukishorramasamy@gmail.com', 8925638843, 'hii'),
(5, 'sethukishorramasamy@gmail.com', 8925638843, 'HII'),
(6, 'sethukishorramasamy@gmail.com', 8925638843, 'hiii');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`) VALUES
(1, 'SETHU KISHOR RAMASAMY', 'sethukishorfooodie@gmail.com', '$2y$10$qEDjzHq5x54bUucRZa75huWD3rwRuZvMV8ezM4PElSO6n0HD/Kfzy'),
(2, 'SETHU KISHOR RAMASAMY', 'sethukishorramasamy@gmail.com', '$2y$10$4TYZD8Tmuu4LcoxsSe46QeDQK7.ddVg8hPNjpVDZ6Zwo47q7cydI6'),
(3, 'SETHU KISHOR RAMASAMY', 'sethukishorportfolio@gmail.com', '$2y$10$osvs99KIzdOQurGA9rF.dOn/C6snHajNebwEWb/rNVXuRL8OsQr6a'),
(4, 'SETHU KISHOR RAMASAMY', 'sethukishorfooodie1@gmail.com', '$2y$10$Xs2qZOft2HO1EdQQdruu6e2VPAxuc55xuxPKiVb2TbwQtehymRX36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
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
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
