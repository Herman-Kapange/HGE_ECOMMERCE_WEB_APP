-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2022 at 02:40 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hge_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `product_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `total_product` varchar(255) NOT NULL,
  `total_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone_number`, `email`, `address`, `postal_code`, `payment_method`, `total_product`, `total_price`) VALUES
(87, 'xavier brown', '293838920', 'xb@gmail.com', 'lusaka', '1234', 'cash on delivery', 'test2 (1 ) , test3 (1 ) , test4 (1 ) , test8 (1 ) ', '17');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `price`, `image`, `category`) VALUES
(72, 'Treadmill', '250', 'treadmill.jpg', 'equipment'),
(73, 'Dumbell', '60', 'dumbell.jpg', 'equipment'),
(74, 'Barbell', '80', 'barbell2.jpg', 'equipment'),
(75, 'Footwork Ladder', '35', 'footwork_ladder.jpg', 'equipment'),
(76, 'Kettle Bell', '45', 'img8.jpg', 'equipment'),
(77, 'Training Band', '25', 'elastic_training_bands.jpg', 'equipment'),
(78, 'Dumbell', '60', 'img2.jpg', 'top3'),
(79, 'Smart Watch', '300', 'simon-daoudi-2wFoa040m8g-unsplash.jpg', 'tech'),
(80, 'Ear Buds', '250', 'hakii-official-u4st9SaLPdY-unsplash.jpg', 'tech'),
(82, 'Ankle Support', '10', 'chuttersnap-XuZCMNC0NQ4-unsplash.jpg', 'medical'),
(83, 'Knee Support', '12', 'terry-shultz-EQ-53WaTNC4-unsplash.jpg', 'medical'),
(84, 'Wrapping Tape', '8', 'payam-tahery-raZ1Ga6PLr4-unsplash.jpg', 'medical'),
(85, 'Running Shoes', '130', 'malik-skydsgaard-5PY59OkipMg-unsplash.jpg', 'clothing'),
(86, 'Dip Bars', '250', 'dip_bars.jpg', 'top3'),
(87, 'Pull Up Bar ', '180', 'pullup_bar.jpg', 'top3'),
(88, 'Training Shorts', '30', 'clem-onojeghuo-Apj4nSemkzk-unsplash.jpg', 'clothing'),
(89, 'Workout Shirt', '25', 'frame-kings-4pCsgbtDhoI-unsplash.jpg', 'clothing');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'Xavier Brown', 'xb@gmail.com', '9656ed2aaa1fb39cdbece8bbdcc217e0'),
(5, 'Mary Sepoma', 'ms@gmail.com', '9ac31555825113a5db09fef3b23b79c7'),
(6, 'Caleb Mumba', 'cm@gmail.com', '55654f48521428704172c4570ad4287a'),
(7, 'admin', 'admin@gmail.com', '45f2603610af569b6155c45067268c6b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`product_id`);

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
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `product_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
