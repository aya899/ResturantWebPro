-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:4306
-- Generation Time: Sep 10, 2024 at 07:49 AM
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
-- Database: `books`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins_login`
--

CREATE TABLE `admins_login` (
  `id` int(100) UNSIGNED NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins_login`
--

INSERT INTO `admins_login` (`id`, `fullname`, `username`, `email`, `password`, `image`) VALUES
(1, 'John Doe', 'john668', 'john668@email.com', 'john4489', '1725624927img.jpg'),
(2, 'Hager Ahmed', 'hager887', 'hager887@gmail.com', 'hager887', '1725648274picture.jpg'),
(3, 'Rahaf Amr', 'rahaff55', 'rahaf5566@gmail.com', 'rahaf5566', '1725651596cropper.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `tag_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `tag_name`) VALUES
(1, 'Burger'),
(2, 'Pizza'),
(3, 'Pasta'),
(4, 'Fries');

-- --------------------------------------------------------

--
-- Table structure for table `meetings`
--

CREATE TABLE `meetings` (
  `id` int(100) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `title` varchar(100) NOT NULL,
  `active` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `meetings`
--

INSERT INTO `meetings` (`id`, `date`, `title`, `active`) VALUES
(1, '2024-09-18', 'new big tasty', 'off'),
(2, '2024-10-02', 'new pizza recipe', 'off');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_number` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `person_num` varchar(200) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_name`, `user_number`, `user_email`, `person_num`, `date`) VALUES
(1, 'omar', '8764321987', 'omarrr1@gmail.com', '2', '2024-09-28'),
(2, 'Ali', '0109876543', 'aliii@gmail.com', '3', '2024-10-10'),
(3, 'Arwa', '01199876543', 'arwaa22@gmail.com', '5', '2024-09-27');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `title` varchar(100) NOT NULL,
  `license` varchar(500) NOT NULL,
  `dimension` varchar(100) NOT NULL,
  `format` varchar(100) NOT NULL,
  `active` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `tag` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `date`, `title`, `license`, `dimension`, `format`, `active`, `image`, `tag`, `price`) VALUES
(1, '2024-09-11', 'Delicious Pizza', 'Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque', '315*315', 'png', 'on', '1725901105f3.png', ' 2', '$17'),
(2, '2024-09-11', 'Delicious Burger', 'Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque', '255*188', 'png', 'on', '1725906873f2.png', ' 1', '$15'),
(3, '2024-09-19', 'Delicious Pasta', 'Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque', '499*282', 'png', 'on', '1725906981f4.png', ' 3', '$18'),
(4, '2024-09-21', 'French Fries', 'Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque', '611*405', 'png', 'on', '1725907084f5.png', ' 4', '$10'),
(5, '2024-09-27', 'Delicious Pizza', 'Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque', '339*339', 'png', 'on', '1725907189f6.png', ' 2', '$15'),
(6, '2024-09-18', 'Tasty Burger', 'Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque', '303*251', 'png', 'on', '1725907354f7.png', ' 1', '$12'),
(7, '2024-10-02', 'Tasty Burger', 'Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque', '262*214', 'png', 'on', '1725907444f8.png', ' 1', '$14'),
(8, '2024-10-12', 'Delicious Pasta', 'Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque', '414*333', 'png', 'on', '1725907529f9.png', ' 3', '$10'),
(9, '2024-10-09', 'Delicious Pizza', 'Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus sed eaque', '381*363', 'png', 'on', '1725907674f1.png', ' 2', '$20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) UNSIGNED NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `active` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `email`, `active`, `password`) VALUES
(1, 'Omar Mohamed', 'omar', 'omarrr1@gmail.com', 'on', 'omar3356'),
(2, 'Ali Ahmed', 'Ali', 'aliii@gmail.com', 'off', 'ali887'),
(3, 'John Doe', 'john668', 'john668@email.com', 'off', 'john4489'),
(4, 'maryam hassan', 'maryam0909', 'maryam09@gmail.com', 'on', 'maryam0909'),
(5, 'Arwa Wael', 'Arwa', 'arwaa22@gmail.com', 'on', 'arwa660');

-- --------------------------------------------------------

--
-- Table structure for table `users_login`
--

CREATE TABLE `users_login` (
  `id` int(100) UNSIGNED NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_login`
--

INSERT INTO `users_login` (`id`, `fullname`, `username`, `email`, `password`, `image`) VALUES
(1, 'Omar Mohamed', 'omar', 'omarrr1@gmail.com', 'omar3356', ''),
(2, 'maryam hassan', 'maryam0909', 'maryam09@gmail.com', 'maryam0909', ''),
(3, 'Arwa Wael', 'Arwa', 'arwaa22@gmail.com', 'arwa660', '1725714682client1.jpg'),
(4, 'John Doe', 'john668', 'john668@email.com', 'john4489', '1725715434img.jpg'),
(5, 'Ali Ahmed', 'Ali', 'aliii@gmail.com', 'ali887', '1725715726client2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins_login`
--
ALTER TABLE `admins_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meetings`
--
ALTER TABLE `meetings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_login`
--
ALTER TABLE `users_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins_login`
--
ALTER TABLE `admins_login`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `meetings`
--
ALTER TABLE `meetings`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users_login`
--
ALTER TABLE `users_login`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
