-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 29, 2024 at 03:32 AM
-- Server version: 10.5.20-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id21069018_fooodie`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(255) NOT NULL,
  `CustomerName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` bigint(20) NOT NULL,
  `address` varchar(1028) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `CustomerName`, `email`, `number`, `address`) VALUES
(5, 'customer name', 'fooodie@gmail.com', 1234567890, 'user address'),
(6, 'customer name', 'fooodie@gmail.com', 1234567890, 'customer address'),
(7, 'customer name', 'fooodie@gmail.com', 1234567890, 'add customer address here'),
(8, 'customer name', 'fooodie@gmail.com', 1234567890, 'user address');

-- --------------------------------------------------------

--
-- Table structure for table `instructions`
--

CREATE TABLE `instructions` (
  `id` int(255) NOT NULL,
  `instruction` varchar(1028) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `instructions`
--

INSERT INTO `instructions` (`id`, `instruction`) VALUES
(12, 'add chilli sauce'),
(13, 'add instructions'),
(14, 'add cooking instructions here'),
(15, 'add cooking instructions');

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
(16, 'fooodie@gmail.com', 8925638843, 'good'),
(17, 'fooodie@gmail.com', 1234567890, 'ask your questions here'),
(18, 'fooodie@gmail.com', 1234567890, 'ask your questions here'),
(19, 'sethukishorramasamy@gmail.com', 1234567890, 'Good!\r\n'),
(20, 's@gmail.com', 1234567890, 'hi');

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
(41, 'FOOODIE', 'fooodie@gmail.com', '$2y$10$IHh02sH98et46c8/v/clKe4RGmu1MRGOh8WqxTBFuRkl4wywo786e'),
(42, 'SETHU KISHOR RAMASAMY', 'sethukishor18@gmail.com', '$2y$10$INc7BflrSZGZ13H.Gal8Hu2OpUnllVftTZFsTUUdkmXmAeDZXMOuC'),
(43, 'Lily', 'lily@gmail.com', '$2y$10$yRrHn8bC/Re5kHRHHVL7O.kZQW/adQPR1K2c2.Rps.CZFbr0yoXy2'),
(44, 'jeeva', 'jeevanivasanramasamy@gmail.com', '$2y$10$G8z9YaEfdy.VFgve7kMXMOJSALHc/dWucOzWdx8qeb5v13s4ZZJIa'),
(45, 'Sathosh', 'santhoshkumar21892@gmail.com', '$2y$10$ozJGUSf0hVw5Y3KGyz/mw.JjF/ZxjDQKpvF72ILdCpikM/xszmknO'),
(46, 'sethu kishor', 'sethukishor11@gmail.com', '$2y$10$/bGTUBpbXPcCIC20YayEje1f6Zxlo12jiarOMRX.qhYDnGF5m1/gi'),
(47, 'Thiru', 'kumaranthiru478@gmail.com', '$2y$10$mXf4PC2jelImLMcXUs3qee5Na.7R/dveyrDaF/liUbvVsrx2PdKki'),
(48, 'SETHU KISHOR RAMASAMY', 'sethukishorramasamy@gmail.com', '$2y$10$VrLD160OY36pXwLlGWXAl.TWqfyrsLEaOvGjcYeR/zK3wBn7vl/OC'),
(49, 'SETHU KISHOR RAMASAMY', 'fooodiessproject@gmail.com', '$2y$10$U.w3tGi.y2pd42YhXr6HkOYIlQC7rrVdQLvOec1O7Xjx0dekGCOtq'),
(50, 'sethu', 's@gmail.com', '$2y$10$ldiFa.c9WxPvtFyT7Mx.q.9.68tziw5/aG0JetK6k6tWLtUJwCVx2'),
(51, 'sethu', 'ss@gmail.com', '$2y$10$YKl42VCatVTe/w/DzKI6TOur11vh9PN/LNyZHi94Va7lSAEvB87rG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instructions`
--
ALTER TABLE `instructions`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `instructions`
--
ALTER TABLE `instructions`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
