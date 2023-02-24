-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 24, 2023 at 02:38 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movietime`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `contactus_id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`contactus_id`, `email`, `message`) VALUES
(1, 'albansahiti2002@gmail.com', 'asdasdasa'),
(2, 'yes@gmail.com', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `movie_id` int(10) UNSIGNED NOT NULL,
  `movie_name` varchar(256) DEFAULT NULL,
  `movie_photo` text DEFAULT NULL,
  `movie_cover` text DEFAULT NULL,
  `movie_description` varchar(256) DEFAULT NULL,
  `movie_time` time DEFAULT NULL,
  `release_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movie_id`, `movie_name`, `movie_photo`, `movie_cover`, `movie_description`, `movie_time`, `release_date`) VALUES
(3, 'Avengers: End Game', 'assets/image/movies/avengers.jpeg', 'assets/image/movies/avengers.jpeg', 'Adrift in space with no food or water, Tony Stark sends a message to Pepper Potts as his oxygen supply starts to dwindle', '03:00:00', '2019-03-26'),
(5, 'Avengers: End Game2', 'assets/image/movies/avengers.jpeg', 'assets/image/movies/avengers.jpeg', 'Adrift in space with no food or water, Tony Stark ...', '03:00:00', '2019-03-26'),
(6, 'Avengers: End Game3', 'assets/image/movies/avengers.jpeg', 'assets/image/movies/avengers.jpeg', 'Adrift in space with no food or water, Tony Stark ...', '03:00:00', '2019-03-26'),
(7, 'Avengers: End Game4', 'assets/image/movies/avengers.jpeg', 'assets/image/movies/avengers.jpeg', 'Adrift in space with no food or water, Tony Stark ...', '03:00:00', '2019-03-26'),
(8, 'Avengers: End Game5', 'assets/image/movies/avengers.jpeg', 'assets/image/movies/avengers.jpeg', 'Adrift in space with no food or water, Tony Stark ...', '03:00:00', '2019-03-26'),
(9, 'Avengers: End Game6', 'assets/image/movies/avengers.jpeg', 'assets/image/movies/avengers.jpeg', 'Adrift in space with no food or water, Tony Stark ...', '03:00:00', '2019-03-26'),
(10, 'Avengers: End Game7', 'assets/image/movies/avengers.jpeg', 'assets/image/movies/avengers.jpeg', 'Adrift in space with no food or water, Tony Stark ...', '03:00:00', '2019-03-26'),
(11, 'Avengers: End Game8', 'assets/image/movies/avengers.jpeg', 'assets/image/movies/avengers.jpeg', 'Adrift in space with no food or water, Tony Stark ...', '03:00:00', '2019-03-26'),
(12, 'Avengers: End Game9', 'assets/image/movies/avengers.jpeg', 'assets/image/movies/avengers.jpeg', 'Adrift in space with no food or water, Tony Stark ...', '03:00:00', '2019-03-26'),
(13, 'Avengers: End Game10', 'assets/image/movies/avengers.jpeg', 'assets/image/movies/avengers.jpeg', 'Adrift in space with no food or water, Tony Stark ...', '03:00:00', '2019-03-26'),
(14, 'Avengers: End Game11', 'assets/image/movies/avengers.jpeg', 'assets/image/movies/avengers.jpeg', 'Adrift in space with no food or water, Tony Stark ...', '03:00:00', '2019-03-26'),
(15, 'Avengers: End Game12', 'assets/image/movies/avengers.jpeg', 'assets/image/movies/avengers.jpeg', 'Adrift in space with no food or water, Tony Stark ...', '03:00:00', '2019-03-26'),
(16, 'Avengers: End Game13', 'assets/image/movies/avengers.jpeg', 'assets/image/movies/avengers.jpeg', 'Adrift in space with no food or water, Tony Stark ...', '03:00:00', '2019-03-26'),
(17, 'Avengers: End Game14', 'assets/image/movies/avengers.jpeg', 'assets/image/movies/avengers.jpeg', 'Adrift in space with no food or water, Tony Stark ...', '03:00:00', '2019-03-26'),
(18, 'Avengers: End Game15', 'assets/image/movies/avengers.jpeg', 'assets/image/movies/avengers.jpeg', 'Adrift in space with no food or water, Tony Stark ...', '03:00:00', '2019-03-26'),
(19, 'Avengers: End Game16', 'assets/image/movies/avengers.jpeg', 'assets/image/movies/avengers.jpeg', 'Adrift in space with no food or water, Tony Stark ...', '03:00:00', '2019-03-26'),
(20, 'Avengers: End Game17', 'assets/image/movies/avengers.jpeg', 'assets/image/movies/avengers.jpeg', 'Adrift in space with no food or water, Tony Stark ...', '03:00:00', '2019-03-26'),
(21, 'Avengers: End Game18', 'assets/image/movies/avengers.jpeg', 'assets/image/movies/avengers.jpeg', 'Adrift in space with no food or water, Tony Stark ...', '03:00:00', '2019-03-26'),
(22, 'Avengers: End Game19', 'assets/image/movies/avengers.jpeg', 'assets/image/movies/avengers.jpeg', 'Adrift in space with no food or water, Tony Stark ...', '03:00:00', '2019-03-26'),
(23, 'Avengers: End Game20', 'assets/image/movies/avengers.jpeg', 'assets/image/movies/avengers.jpeg', 'Adrift in space with no food or water, Tony Stark ...', '03:00:00', '2019-03-26'),
(24, 'Avengers: End Game21', 'assets/image/movies/avengers.jpeg', 'assets/image/movies/avengers.jpeg', 'Adrift in space with no food or water, Tony Stark ...', '03:00:00', '2019-03-26'),
(25, 'Avengers: End Game22', 'assets/image/movies/avengers.jpeg', 'assets/image/movies/avengers.jpeg', 'Adrift in space with no food or water, Tony Stark ...', '03:00:00', '2019-03-26'),
(26, 'Avengers: End Game23', 'assets/image/movies/avengers.jpeg', 'assets/image/movies/avengers.jpeg', 'Adrift in space with no food or water, Tony Stark ...', '03:00:00', '2019-03-26'),
(27, 'Avengers: End Game24', 'assets/image/movies/avengers.jpeg', 'assets/image/movies/avengers.jpeg', 'Adrift in space with no food or water, Tony Stark ...', '03:00:00', '2019-03-26'),
(28, 'Avengers: End Game25', 'assets/image/movies/avengers.jpeg', 'assets/image/movies/avengers.jpeg', 'Adrift in space with no food or water, Tony Stark ...', '03:00:00', '2019-03-26'),
(29, 'Avengers: End Game26', 'assets/image/movies/avengers.jpeg', 'assets/image/movies/avengers.jpeg', 'Adrift in space with no food or water, Tony Stark ...', '03:00:00', '2019-03-26'),
(30, 'Winnie-the-Pooh: Blood and Honey', 'assets/image/movies/winnie-the-pooh.jpeg', 'assets/image/movies/winnie-the-pooh.jpeg', 'TEST', '01:30:00', '2023-07-21');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `rating_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `movie_id` int(10) UNSIGNED DEFAULT NULL,
  `rating` enum('0','1','2','3','4','5','6','7','8','9','10') NOT NULL,
  `rating_comment` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_email` varchar(256) NOT NULL,
  `user_password` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `user_fullname` varchar(256) NOT NULL,
  `user_photo` text DEFAULT NULL,
  `user_role` varchar(10) DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_email`, `user_password`, `username`, `user_fullname`, `user_photo`, `user_role`) VALUES
(37, 'admin@admin.com', '$2y$10$FngKOAoaujrQ9kTY4ezHT.inqTiXtI41qgghVa4.rR1l0l2xwyuFK', 'admin', 'admin', NULL, 'admin'),
(38, 'user@user.com', '$2y$10$nDFIZmQa93h8PEgmoWanqeco2erC8x8KWIWPBezBUuTVqd7/PEBRu', 'user', 'user', NULL, 'user'),
(39, 'test1@gmail.com', '$2y$10$ldnFvFx/LcSOcxNF5VWvU.lAGM79fIsFxkYKpcC.0rPibTZGeTs8a', 'test', 'test', NULL, 'user'),
(40, 'test3@gmail.com', '$2y$10$jK3ozW6LB2wspwbF2RhtuOPjdmKl/xjaeu4rJh9Si0/I686U9LvLu', 'test3', 'test', NULL, 'user'),
(41, 'test4@gmail..com', '$2y$10$s86Owlu5MxnpHqkeXKQq2umEQp8W.CVLrFOgCRIKaP/SwajC6gSOW', 'test4', 'test', NULL, 'user'),
(42, 'test1@test.comsss', '$2y$10$gwlNVsp7VT1HPgfCZgpvWefAk1t/8dARO55GyMkJ3PpZH7YdPB8MC', 'testttt', 'testttt', NULL, 'user'),
(43, 'albansahiti2002@gmail.com', '$2y$10$MZFZ7pzdGj2RfohMZRZhmO1S01rxnZ1R2fY06hr9XSqJ1529MBfQe', 'aslban', 'albanss', NULL, 'user'),
(44, 'albansahiti2002@gmail.comss', '$2y$10$q/10T39nTXbYIIXGKyQe2eiWgSNop.hFnei8o7gWwNFIP0cvIujJ6', 'sadasd', 'albanas', NULL, 'user'),
(45, 'beqa@gmail.com', '$2y$10$NWP3V7OllGyNET7WYSF3o.xFl0HsbN8HgigtafDZ8uXt9xz3Jdx8i', 'beqa', 'beqa', NULL, 'user'),
(46, 'hello@gmail.com', '$2y$10$QSL.vjJnJMMAXU3ZqzcPX.HeKB5FYAeYGHGt6j6c9/ORzJlg3Ll0u', 'hello', 'hello', NULL, 'user'),
(47, 'alban@alban.com', '$2y$10$cNNsfeaBErKit8nCukrMwOJMIG/xX2QrctgCoQSsau2S39zfW407m', 'alban', 'alban', NULL, 'user'),
(48, 'AlbanSahiti@gmail.com', '$2y$10$HlsHWAIKGL4bpsPb8XzLS.Sdc1oPzJT7GTAGNnn6vE3ueaBsjpjmC', 'albanii', 'Alban', NULL, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `watchlist`
--

CREATE TABLE `watchlist` (
  `watchlist_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `movie_id` int(10) UNSIGNED DEFAULT NULL,
  `watched_status` enum('0','1') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `watchlist`
--

INSERT INTO `watchlist` (`watchlist_id`, `user_id`, `movie_id`, `watched_status`) VALUES
(79, 38, 13, '0'),
(80, 38, 14, '0'),
(81, 38, 15, '0'),
(82, 48, 13, '0'),
(83, 48, 14, '0'),
(84, 48, 15, '0'),
(85, 48, 16, '0'),
(86, 48, 17, '0'),
(87, 48, 18, '0'),
(88, 48, 19, '0'),
(89, 48, 20, '0'),
(90, 48, 21, '0'),
(91, 48, 22, '0'),
(92, 48, 23, '0'),
(93, 48, 24, '0'),
(94, 48, 25, '0'),
(95, 48, 26, '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`contactus_id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`rating_id`),
  ADD KEY `fk_rating_users` (`user_id`),
  ADD KEY `fk_rating_movie` (`movie_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `watchlist`
--
ALTER TABLE `watchlist`
  ADD PRIMARY KEY (`watchlist_id`),
  ADD KEY `fk_watchlist_users` (`user_id`),
  ADD KEY `fk_watchlist_movie` (`movie_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contactus_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `movie_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `rating_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `watchlist`
--
ALTER TABLE `watchlist`
  MODIFY `watchlist_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `fk_rating_movie` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`movie_id`),
  ADD CONSTRAINT `fk_rating_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `watchlist`
--
ALTER TABLE `watchlist`
  ADD CONSTRAINT `fk_watchlist_movie` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`movie_id`),
  ADD CONSTRAINT `fk_watchlist_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
