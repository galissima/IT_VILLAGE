-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2017 at 09:51 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `it_village`
--

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `game_id` int(10) NOT NULL,
  `game_score` int(20) NOT NULL,
  `user_id` int(10) NOT NULL,
  `message` text NOT NULL,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`game_id`, `game_score`, `user_id`, `message`, `date_deleted`) VALUES
(2, 39443, 2, '', NULL),
(3, 3578, 3, '', NULL),
(4, 2050, 5, 'Свършиха ти ходовете !!', NULL),
(5, 2050, 5, 'Свършиха ти ходовете !!', NULL),
(6, 2220, 5, 'Брао, бе! WINNER!!! :)', NULL),
(7, 143, 5, 'Брао, бе! WINNER!!! :)', NULL),
(8, 94, 5, 'Брао, бе! WINNER!!! :)', NULL),
(9, 2115, 5, 'Брао, бе! WINNER!!! :)', NULL),
(10, 1620, 5, 'Брао, бе! WINNER!!! :)', NULL),
(11, -14, 5, 'Ти остана без пукната пара !', NULL),
(12, -32, 5, 'Ти остана без пукната пара !', NULL),
(13, 184, 5, 'Брао, бе! WINNER!!! :)', NULL),
(14, -12, 5, 'Ти остана без пукната пара !', NULL),
(15, -56, 5, 'Ти остана без пукната пара !', NULL),
(16, -56, 5, 'Ти остана без пукната пара !', NULL),
(17, 2505, 5, 'Брао, бе! WINNER!!! :)', NULL),
(18, 305, 5, 'Брао, бе! WINNER!!! :)', NULL),
(19, 77, 5, 'Свършиха ти ходовете !!', NULL),
(20, 77, 5, 'Свършиха ти ходовете !!', NULL),
(21, 77, 5, 'Свършиха ти ходовете !!', NULL),
(22, 77, 5, 'Свършиха ти ходовете !!', NULL),
(23, 77, 5, 'Свършиха ти ходовете !!', NULL),
(24, 77, 5, 'Свършиха ти ходовете !!', NULL),
(25, 77, 5, 'Свършиха ти ходовете !!', NULL),
(26, -47, 5, 'Ти остана без пукната пара !', NULL),
(27, -47, 5, 'Ти остана без пукната пара !', NULL),
(28, -47, 5, 'Ти остана без пукната пара !', NULL),
(29, -47, 5, 'Ти остана без пукната пара !', NULL),
(30, -47, 5, 'Ти остана без пукната пара !', NULL),
(31, -47, 5, 'Ти остана без пукната пара !', NULL),
(32, -47, 5, 'Ти остана без пукната пара !', NULL),
(33, 105, 5, 'Брао, бе! WINNER!!! :)', NULL),
(34, 463240, 5, 'Свършиха ти ходовете !!', NULL),
(35, 463140, 5, 'Ти Притежаваш Всичко', NULL),
(36, 1270, 6, 'Ти Притежаваш Всичко', NULL),
(37, 1270, 6, 'Ти Притежаваш Всичко', NULL),
(38, 1270, 6, 'Ти Притежаваш Всичко', NULL),
(39, 1270, 6, 'Ти Притежаваш Всичко', NULL),
(40, 1270, 6, 'Ти Притежаваш Всичко', NULL),
(41, 1455, 6, 'Свършиха ти ходовете !!', NULL),
(42, 1575, 6, 'Свършиха ти ходовете !!', NULL),
(43, 1570, 6, 'Свършиха ти ходовете !!', NULL),
(44, -55, 8, 'Ти остана без пукната пара !', NULL),
(45, 27800, 8, 'Свършиха ти ходовете !!', NULL),
(46, 27840, 8, 'Брао, бе! WINNER!!! :)', NULL),
(47, 100, 8, 'aergaey', NULL),
(48, 100, 8, 'sezarh', NULL),
(49, 3950, 8, 'Брао, бе! WINNER!!! :)', NULL),
(50, 3950, 8, 'Брао, бе! WINNER!!! :)', NULL),
(51, 3950, 8, 'Брао, бе! WINNER!!! :)', NULL),
(52, 99, 8, 'Брао, бе! WINNER!!! :)', NULL),
(53, 99, 8, 'Брао, бе! WINNER!!! :)', NULL),
(54, 99, 8, 'Брао, бе! WINNER!!! :)', NULL),
(55, 99, 8, 'Брао, бе! WINNER!!! :)', NULL),
(56, -8, 8, 'Ти остана без пукната пара !', NULL),
(57, 36, 8, 'Брао, бе! WINNER!!! :)', NULL),
(58, 36, 8, 'Брао, бе! WINNER!!! :)', NULL),
(59, 36, 8, 'Брао, бе! WINNER!!! :)', NULL),
(60, 36, 8, 'Брао, бе! WINNER!!! :)', NULL),
(61, 36, 8, 'Брао, бе! WINNER!!! :)', NULL),
(62, 36, 8, 'Брао, бе! WINNER!!! :)', NULL),
(63, 36, 8, 'Брао, бе! WINNER!!! :)', NULL),
(64, 36, 8, 'Брао, бе! WINNER!!! :)', NULL),
(65, 117545, 8, 'Свършиха ти ходовете !!', NULL),
(66, 1495, 9, 'Брао, бе! WINNER!!! :)', NULL),
(67, 28320, 9, 'Свършиха ти ходовете !!', NULL),
(68, -52, 9, 'Ти остана без пукната пара !', NULL),
(69, 1095, 9, 'Ти Притежаваш Всичко', NULL),
(70, 1095, 9, 'Ти Притежаваш Всичко', NULL),
(71, -97, 9, 'Ти остана без пукната пара !', NULL),
(72, -97, 9, 'Ти остана без пукната пара !', NULL),
(73, 156, 9, 'Брао, бе! WINNER!!! :)', NULL),
(74, 24545, 11, 'Брао, бе! WINNER!!! :)', NULL),
(75, -30, 11, 'Ти остана без пукната пара !', NULL),
(76, -55, 13, 'Ти остана без пукната пара !', NULL),
(77, 610, 13, 'Брао, бе! WINNER!!! :)', NULL),
(78, 743, 13, 'Брао, бе! WINNER!!! :)', NULL),
(79, 715, 13, 'Ти Притежаваш Всичко', NULL),
(80, 480, 13, 'Брао, бе! WINNER!!! :)', NULL),
(81, 239, 13, 'Брао, бе! WINNER!!! :)', NULL),
(82, -47, 13, 'Ти остана без пукната пара !', NULL),
(83, -36, 13, 'Ти остана без пукната пара !', NULL),
(84, 136, 13, 'Брао, бе! WINNER!!! :)', NULL),
(85, 20790, 5, 'Ти Притежаваш Всичко', NULL),
(86, 109, 5, 'Брао, бе! WINNER!!! :)', NULL),
(87, 92, 5, 'Брао, бе! WINNER!!! :)', NULL),
(88, -2, 5, 'Ти остана без пукната пара !', NULL),
(89, 31245, 15, 'Брао, бе! WINNER!!! :)', NULL),
(90, 365, 5, 'Брао, бе! WINNER!!! :)', NULL),
(91, 379, 5, 'Брао, бе! WINNER!!! :)', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_password` text NOT NULL,
  `user_email` text NOT NULL,
  `user_sum_score` int(10) NOT NULL,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`, `user_email`, `user_sum_score`, `date_deleted`) VALUES
(1, 'galissima', '12345', 'galissima@abv.bg', 37, NULL),
(2, 'tisho', '123', 'new_g@abv.bg', 345, NULL),
(3, 'belissima', '123', 'belissima@abv.bg', 432, NULL),
(4, 'a,jfagejfbfjhb', 'qwerty', 'asdjawg@abv', 0, NULL),
(5, 'kolio', 'minev', 'new_g@mail.bg', 991607, NULL),
(6, 'butilka', '123', 'new_g@mail.bg', 11081, NULL),
(7, 'mitko', '123', 'new_g@mail.bg', 18747, NULL),
(8, 'pako', '123', 'new_g@mail.bg', 185601, NULL),
(9, 'ivo', '6161', 'ivoivo@abv.bg', 31915, NULL),
(10, 'ivo', '12345678', 'ivominev2017@abv.bg', 31915, NULL),
(11, 'penka334', '2233', 'ivominev2017@abv.bg', 24515, NULL),
(13, 'shishe', '2shishe', 'ivominev2017@abv.bg', 2785, NULL),
(14, 'kolio', '123', '', 991607, NULL),
(15, 'Vanhai', '123456', 'dergey@abv.bg', 31245, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`game_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `game_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `games`
--
ALTER TABLE `games`
  ADD CONSTRAINT `games_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
