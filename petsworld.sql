-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2020 at 06:39 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petsworld`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` enum('dog','cat','bird','fish') NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `category`, `price`) VALUES
(1, 'Hills Science Diet Adult Large Breed 15kg', 'dog', 6950),
(2, 'Gnawlers Calcium Milk-Bone Medium 35 Pcs', 'dog', 1090),
(3, 'Petsworld Donut Bed For Dog Purple Medium', 'dog', 2500),
(4, 'DROOLS Cat Food Adult Tuna &amp; Salmon 1.2 Kg', 'cat', 299),
(5, 'SmartHeart Bird Food Cockatiel Lovebird 1 Kg', 'bird', 459),
(6, 'Aquadene Ruby Red Fish Food 1 Ltr', 'fish', 559),
(7, 'Optimum Betta Fish Food 20 Gms', 'fish', 50),
(8, 'Tropifit Exoten Food For Exotic Birds 700 gms', 'bird', 450),
(9, 'Farmina Matisse Kitten Food 400', 'cat', 349),
(10, 'Osaka Green-1 Spirulina  200 gms', 'fish', 275),
(11, 'Kiki Pigeon food', 'bird', 540),
(12, 'DROOLS Absolute Salmon Oil Syrup 150 ml', 'dog', 245),
(13, 'Farmina Vet Life Feline Formula Struvite 2Kg', 'cat', 1290),
(14, 'Rid All General Aid 120 ml', 'fish', 220),
(15, 'ZUPREEM Fruit Blend Premium Food 1.59 Kg', 'bird', 1775),
(16, 'Imac Carry Sport Dog and Cat Medium Carrier', 'cat', 4300);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `contact`, `city`) VALUES
(1, 'Hima', 'himaranimathews@gmail.com', 'qwertyuio', '9447511526', 'Kerala'),
(2, 'Rani', 'ranisthuruthikara@gmail.com', '12345678', '9876543213', 'Kerala'),
(3, 'Anna Rose', 'anna@gmail.com', '25d55ad283aa400af464c76d713c07ad', '9087654321', 'Kochi'),
(4, 'Sancia Jose', 'sancia@gmail.com', '824a67f29e97b8798a9df7f00189f3e1', '9988776655', 'Navy Mumbai');

-- --------------------------------------------------------

--
-- Table structure for table `user_items`
--

CREATE TABLE `user_items` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_items`
--

INSERT INTO `user_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(2, 1, 7, 'Confirmed'),
(3, 1, 3, 'Confirmed'),
(4, 1, 12, 'Confirmed'),
(5, 4, 2, 'Added to cart'),
(6, 4, 4, 'Added to cart'),
(7, 4, 13, 'Added to cart'),
(8, 4, 16, 'Confirmed'),
(9, 1, 13, 'Added to cart'),
(10, 1, 2, 'Added to cart'),
(11, 1, 4, 'Added to cart'),
(12, 1, 9, 'Added to cart'),
(13, 1, 11, 'Added to cart');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_items`
--
ALTER TABLE `user_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `item_id` (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_items`
--
ALTER TABLE `user_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_items`
--
ALTER TABLE `user_items`
  ADD CONSTRAINT `user_items_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `user_items_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
