-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2024 at 12:06 AM
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
-- Database: `events`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_name` varchar(15) NOT NULL,
  `location` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `suitability` varchar(15) NOT NULL,
  `spectator_prices` decimal(5,2) NOT NULL,
  `participation_prices` decimal(5,2) NOT NULL,
  `event_number` int(6) NOT NULL,
  `priceBand` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_name`, `location`, `date`, `suitability`, `spectator_prices`, `participation_prices`, `event_number`, `priceBand`) VALUES
('bikeRally121', 'Northern Irelan', '2024-02-02', 'Adults', 0.00, 0.00, 1, 'a'),
('AviTri', 'scotland', '2024-02-15', '', 0.00, 0.00, 2, 'b'),
('bikeRally121', 'Scotland', '2024-02-19', 'Adults', 0.00, 0.00, 3, 'b'),
('bikeshow22', 'scotland', '2024-02-07', 'Adults', 0.00, 0.00, 4, 'c'),
('bikeRally121', 'Scotland', '2024-02-13', 'Adults', 0.00, 0.00, 5, 'a'),
('bikeRally', 'Scotland', '2024-02-27', 'Adults', 0.00, 0.00, 6, 'b'),
('bikeshow', 'Scotland', '2024-02-21', 'Adults', 0.00, 0.00, 7, 'a'),
('bikeRally121', 'England', '2024-02-02', 'Adults', 0.00, 0.00, 8, 'a'),
('bikeRallyseries', 'Northern Irelan', '2024-02-19', 'Adults', 0.00, 0.00, 9, 'a'),
('relentless', 'Wales', '2024-02-13', 'Adults', 0.00, 0.00, 10, 'a'),
('Macavalanche', 'England', '2024-02-20', 'Children', 0.00, 0.00, 11, 'a'),
('bikeshow2', 'England', '2024-02-12', 'Adults', 0.00, 0.00, 12, 'a'),
('bikeRallyseries', 'Wales', '2024-02-21', 'Children', 0.00, 0.00, 13, 'a'),
('bikeshow21', 'England', '2024-02-28', 'Adults', 0.00, 0.00, 14, 'a'),
('bikeRally11', 'Scotland', '2024-02-20', 'adults&children', 0.00, 0.00, 15, 'b'),
('bikeRally121', 'Northern Irelan', '2024-02-20', 'adults&children', 0.00, 0.00, 16, 'b'),
('bikeshow', 'Scotland', '2024-02-21', 'Adults', 0.00, 0.00, 17, 'b'),
('74', 'England', '2024-02-20', 'adults&children', 0.00, 0.00, 18, 'b'),
('9', 'Scotland', '2024-02-20', 'Adults', 0.00, 0.00, 19, 'b'),
('bikeRally121', 'Scotland', '2024-02-20', 'adults&children', 1.45, 1.56, 20, 'b'),
('bikeRally121', 'Scotland', '2024-02-22', 'adults&children', 1.99, 1.56, 21, 'a'),
('bikeRally121', 'Scotland', '2024-02-20', 'adults&children', 1.99, 1.47, 22, 'b');

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `priceBand` varchar(1) NOT NULL,
  `adultParticipant` decimal(5,2) NOT NULL,
  `childParticipant` decimal(5,2) NOT NULL,
  `childSpectator` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`priceBand`, `adultParticipant`, `childParticipant`, `childSpectator`) VALUES
('a', 1.00, 1.00, 0.00),
('b', 2.00, 1.00, 1.00),
('c', 2.00, 1.00, 0.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_number`),
  ADD KEY `priceBand` (`priceBand`);

--
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`priceBand`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_number` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `prices`
--
ALTER TABLE `prices`
  ADD CONSTRAINT `prices_ibfk_1` FOREIGN KEY (`priceBand`) REFERENCES `events` (`priceBand`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
