-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2023 at 09:27 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `productmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `stock_quantity` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `name`, `description`, `price`, `stock_quantity`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 'aaaaaa', 'aaaaaaaaaaaaaaa', 12.00, 11, 15, '2023-12-11 07:29:43', '2023-12-11 07:29:43'),
(2, 'aaaaaa', 'aaaaaaaaaaaaaaa', 12.00, 11, 15, '2023-12-11 07:33:24', '2023-12-11 07:33:24'),
(3, 'aa', 'aaaaaaa1', 123.00, 11, 15, '2023-12-11 07:33:41', '2023-12-11 07:33:41'),
(4, 'aa', 'aaaaaaa1', 123.00, 11, 15, '2023-12-11 07:35:27', '2023-12-11 07:35:27'),
(5, 'aa', 'aaaaaaa', 222.00, 11, 15, '2023-12-11 07:35:42', '2023-12-11 07:35:42'),
(6, 'aa', 'aaaaaaa', 222.00, 11, 15, '2023-12-11 07:36:24', '2023-12-11 07:36:24'),
(7, 'aaaa', 'bbb', 1111.00, 3, 15, '2023-12-11 07:36:57', '2023-12-11 07:36:57'),
(8, 'aaaa', 'bbb', 1111.00, 3, 15, '2023-12-11 07:38:02', '2023-12-11 07:38:02'),
(9, 'uv', 'aa', 13.00, 2, 16, '2023-12-11 07:40:19', '2023-12-11 08:12:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `user_type` enum('buyer','seller','admin') NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `PASSWORD`, `user_type`, `registration_date`) VALUES
(15, 'aa', 'aa@gmail.com', 'aA12345@', 'seller', '2023-12-11 07:04:36'),
(16, 'bb', 'a@gmail.com', 'aA12345@', 'seller', '2023-12-11 07:15:28'),
(17, 'ad', 'aa@gmail.com', 'aA12345@', 'admin', '2023-12-11 08:21:37'),
(18, 'by', 'by@gmail.com', 'aA12345@', 'buyer', '2023-12-11 08:22:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
