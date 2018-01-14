-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2018 at 06:02 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdi1400166`
--

-- --------------------------------------------------------

--
-- Table structure for table `pensions`
--

CREATE TABLE `pensions` (
  `onoma` varchar(255) CHARACTER SET utf8 NOT NULL,
  `poso` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pensions`
--

INSERT INTO `pensions` (`onoma`, `poso`, `id`) VALUES
('test', 123456, 0),
('test', 123456, 0),
('onoma', 123456, 0),
('onoma', 123456, 0),
('onoma', 123456, 0),
('onoma', 12345678, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `afm` varchar(255) NOT NULL,
  `amka` varchar(255) NOT NULL,
  `user_type` enum('syntaksiouxos','asfalismenos','ergodotis') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `first_name`, `last_name`, `afm`, `amka`, `user_type`) VALUES
(10, 'dimitris', '25d55ad283aa400af464c76d713c07ad', 'dimitris@gmail.com', 'Δημητρης', 'Δημητριου', '1234567890', '15098987653', 'ergodotis'),
(12, 'κατινα', '25d55ad283aa400af464c76d713c07ad', 'katina10@test.com', 'Κατινα', 'Κατινου', '1234567890', '01015054876', 'syntaksiouxos'),
(13, 'αντ', '25d55ad283aa400af464c76d713c07ad', 'ant@test.com', 'Αντωνης', 'Αντωνιου', '1234567890', '15098987654', 'asfalismenos');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
