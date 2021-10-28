-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2020 at 08:15 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `authentication`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(25) NOT NULL,
  `username` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(7, 'Avilash35', 'sahaavilash5055@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(8, 'abcde', 'sahaavilash5055@gmail.com', 'ab56b4d92b40713acc5af89985d4b786'),
(9, 'Duke', 'exasumon290@gmail.com', 'a01610228fe998f515a72dd730294d87'),
(10, 'mitu', 'gkhkhkh@gmail.com', 'cf79ae6addba60ad018347359bd144d2'),
(11, 'Avilash Saha', 'sahaavilash5055@gmail.com', '934b535800b1cba8f96a5d72f72f1611'),
(12, 'Avilash035', 'sahaavilash5055@gmail.com', 'fa246d0262c3925617b0c72bb20eeb1d'),
(14, 'Avilash Saha035', 'sahaavilash5055@gmail.com', '6074c6aa3488f3c2dddff2a7ca821aab'),
(15, 'Avilash Saha035', 'sahaavilash5055@gmail.com', '934b535800b1cba8f96a5d72f72f1611');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
