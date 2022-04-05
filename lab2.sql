-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2021 at 03:30 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab2`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `username` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `username`, `password`) VALUES
(1, 'admin', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'bob', 'cf79ae6addba60ad018347359bd144d2'),
(3, 'Jason', '934b535800b1cba8f96a5d72f72f1611'),
(4, 'Freddy', 'b56a18e0eacdf51aa2a5306b0f533204'),
(5, 'Donny', 'dbc4d84bfcfe2284ba11beffb853a8c4'),
(7, 'John', '9e1e06ec8e02f0a0074f2fcc6b26303b'),
(8, 'Donald', '99c5e07b4d5de9d18c350cdf64c5aa3d'),
(11, 'Samantha ', 'b56a18e0eacdf51aa2a5306b0f533204'),
(12, 'Doc', '550a141f12de6341fba65b0ad0433500'),
(15, 'Lin', 'fa246d0262c3925617b0c72bb20eeb1d'),
(17, 'Welma', '81dc9bdb52d04dc20036dbd8313ed055'),
(22, 'noway', '81b073de9370ea873f548e31b8adc081'),
(29, 'asdf', 'f70c7297de4df77301bd9ad013b527db'),
(30, 'wok', '5afd4221d4a7189c5b33dc39405c62b0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
