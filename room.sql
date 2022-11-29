-- phpMyAdmin SQL Dump
-- version 5.3.0-dev
-- https://www.phpmyadmin.net/
--
-- Host: 192.168.30.23
-- Generation Time: Sep 27, 2022 at 06:10 AM
-- Server version: 8.0.18
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--
CREATE DATABASE IF NOT EXISTS `Ass` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `Ass`;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `roomName` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `bath` int(11) NOT NULL,
  `bed` int(11) NOT NULL,
  `rating` double NOT NULL,
  `price` double NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `rooms` (`id`, `roomName`, `description`,`bath`, `bed`, `rating`, `price`, `image`) VALUES
(1, 'King Room', 'Luxious that impress even royalties', 3, 2, 5.0, 300000, 'https://i.pinimg.com/originals/ba/9a/c5/ba9ac50e4ea914da0c57fadb558ed4f1.jpg'),
(2, 'Nature Relaxing Room', 'Enjoy natural beauty along with our services', 2, 2, 4.8, 80000, 'https://images.squarespace-cdn.com/content/v1/4fcf5c8684aef9ce6e0a44b0/1624127208154-VVYP8K5W9LGOJ7PRQ0G7/Living+Room+Example'),
(3, 'Aqua Room', 'Experience Living in the ocean', 2, 2, 4.7, 150000, 'https://cmsapi.manilaoceanpark.com/storage/uploads/Aqua%20Supreme%201(2)_1567482953_thumbnail.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
