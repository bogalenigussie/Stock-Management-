-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 30, 2022 at 01:46 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `acme`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_dimension`
--

CREATE TABLE `product_dimension` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `length` int(11) DEFAULT NULL,
  `width` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_dimension`
--

INSERT INTO `product_dimension` (`id`, `product_id`, `height`, `length`, `width`) VALUES
(1, 1, 25, 56, 33),
(2, 2, 454, 454, 454),
(3, 3, 44, 353, 78),
(4, 4, 75, 2424, 424);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_dimension`
--
ALTER TABLE `product_dimension`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_dimension`
--
ALTER TABLE `product_dimension`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_dimension`
--
ALTER TABLE `product_dimension`
  ADD CONSTRAINT `product_dimension_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product_type` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
