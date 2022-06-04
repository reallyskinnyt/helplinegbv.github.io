-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220511.c3fb567b13
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2022 at 06:38 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website_users`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Surname` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Cell_No` varchar(13) NOT NULL,
  `Password` varchar(18) NOT NULL,
  `Confirmed_Password` varchar(18) NOT NULL,
  `Gender` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `Name`, `Surname`, `Email`, `Cell_No`, `Password`, `Confirmed_Password`, `Gender`) VALUES
(1, 4387, 'Jessica', 'Simmons', 'jessica@gmail.com', '0732459852', '1234', '1234', 'Female'),
(2, 7811, 'Jessica', 'Simmons', 'jessica@gmail.com', '0732459852', '1234', '1234', 'Female'),
(3, 43911, 'John', 'Swartz', 'John@gmail.com', '0738845625', '2022', '2022', 'Male'),
(4, 23764, 'David', 'Mhlongo', 'david@gmail.com', '0347856324', '3698', '3698', 'Male'),
(5, 849, 'Thapelo', 'Mokwana', 'TP@gmail.com', '0839985412', '0123', '0123', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `Name` (`Name`),
  ADD KEY `Surname` (`Surname`),
  ADD KEY `id_2` (`id`),
  ADD KEY `Password` (`Password`),
  ADD KEY `Confirmed_Password` (`Confirmed_Password`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



