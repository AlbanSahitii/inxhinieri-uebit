-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 20, 2023 at 11:38 PM
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
(29, 'Avengers: End Game26', 'assets/image/movies/avengers.jpeg', 'assets/image/movies/avengers.jpeg', 'Adrift in space with no food or water, Tony Stark ...', '03:00:00', '2019-03-26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movie_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `movie_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
