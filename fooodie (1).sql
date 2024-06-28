-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 26, 2023 at 08:50 PM
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
-- Table structure for table `instructions`
--

CREATE TABLE `instructions` (
  `id` int(255) NOT NULL,
  `instruction` varchar(1028) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `instructions`
--

INSERT INTO `instructions` (`id`, `instruction`) VALUES
(26, 'hii\r\n'),
(27, 'hii\r\n'),
(28, 'hii\r\n'),
(29, 'hii\r\n'),
(30, 'hii\r\n'),
(31, 'kisokiso'),
(32, 'order extra spicy sauces'),
(33, 'order extra spicy sauces'),
(34, 'booooom'),
(35, 'booooom'),
(36, 'booooom'),
(37, 'booooom'),
(38, 'booooom'),
(39, 'booooom'),
(40, 'booooom'),
(41, 'booooom'),
(42, 'booooom'),
(43, 'booooom'),
(44, 'booooom'),
(45, 'booooom'),
(46, 'booooom'),
(47, 'booooom');

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
(92, 'sethukishor1@gmail.com', 8925638843, 'hii'),
(93, 'sethukishor1@gmail.com', 8925638843, 'hii'),
(94, 'sethukishor1@gmail.com', 8925638843, 'hii'),
(95, 'sethukishor1@gmail.com', 8925638843, 'hii'),
(96, 'sethukishor1@gmail.com', 8925638843, 'hi'),
(97, 'sethukishor1@gmail.com', 8925638843, 'hiiiiiiiiiiiiiii'),
(98, 'sethukishor1@gmail.com', 8925638843, 'im\r\n'),
(99, 'sethukishorportfolio@gmail.com', 8925638843, 'hui');

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
(4, 'SETHU KISHOR RAMASAMY', 'sethukishorfooodie1@gmail.com', '$2y$10$Xs2qZOft2HO1EdQQdruu6e2VPAxuc55xuxPKiVb2TbwQtehymRX36'),
(5, 'SETHU KISHOR RAMASAMY', 'fooodieproject1111@gmail.com', '$2y$10$7rjgDaZ1AzHO9nh43/Y0YOEcFxQOgp.ajQVz5DcaEYp7uJMjdlcni'),
(6, 'SETHU KISHOR RAMASAMY', 'fooodieproject1111111@gmail.com', '$2y$10$Oc3HvQ5KHh0.0cZUUIfF0ePBaG2R9y970ALWZM2vb4dkVymDqG/YC'),
(7, 'SETHU KISHOR RAMASAMY', 'fooodieproject222@gmail.com', '$2y$10$Ap/lto5JFu3KdnfwW0LKzOCHo/Qx0BnHuEpLYWo8A7swYRTyuq1Gi'),
(8, 'SETHU KISHOR RAMASAMY', 'fooodieproject31@gmail.com', '$2y$10$3Kdg/4gUtDlV66UHCa/w8.KxJvZeYK06DnOxJqFfi/zbog6VRH.MS'),
(9, 'SETHU KISHOR RAMASAMY', 'fooodieproject99@gmail.com', '$2y$10$Z90JLludjICx4BY84ZhCzu7OSzcRuUtZ3ngO2k2W0WQwiJEUEtwHW'),
(10, 'SETHU KISHOR R', 'sethukishor18@gmail.com', '$2y$10$OOwqkzRGt5uYMYA9I/fk6uqKAXkAF0SNGP4/fI74aKE9.Q4AuNNia'),
(11, 'SETHU KISHOR R', 'sethukishor1@gmail.com', '$2y$10$kQRztnXLDOA21m1Djk4v1O0lnc8ftYiPxtaMbLgXp9edO.hDW6V8i'),
(12, 'SETHU KISHOR R', 'sethukishor19@gmail.com', '$2y$10$gFy/YIEfNDFG4PC.IefZhOtiki37kElx4JeT62Adlg1Anf.t6/Ps6'),
(13, 'SETHU KISHOR R', 'sethukishor11@gmail.com', '$2y$10$XXZxYqg8uNxMufZhLc3AGOXyn1/I3UyDpSsUuT96fExDgQ1jS7Bjy'),
(14, 'SETHU KISHOR R', 'sethukishor12@gmail.com', '$2y$10$FECLQchJAczE9wO0BJOn8.EyD0Q.O5tB1smb5yl5GNkiQ.I7ug6vm'),
(15, 'SETHU KISHOR R', 'sethukishor16@gmail.com', '$2y$10$DhsMv6cNSoUI7CGBs2scVuT/4FROpeS9c/LLRXmG2.bup53azaf/q'),
(16, 'SETHU KISHOR R', 'sethukishor1111@gmail.com', '$2y$10$Kjc.hgKvz78O7hR3KN//AOTn7/6WfalJ6SF07Txl3ys0lP7ATSxG2');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `instructions`
--
ALTER TABLE `instructions`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
