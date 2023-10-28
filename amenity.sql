-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2023 at 08:18 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amenity`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `getcat` (IN `cid` INT)   SELECT * FROM categories WHERE cat_id=cid$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(2, 'admin1', 'admin1'),
(3, 'admin2', 'admin2');

-- --------------------------------------------------------

--
-- Table structure for table `orders_amenities`
--

CREATE TABLE `orders_amenities` (
  `name` varchar(20) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders_amenities`
--

INSERT INTO `orders_amenities` (`name`, `mobile`, `address`, `pincode`, `order_id`, `product_id`, `id`) VALUES
('vaubhav', '9522147893', 'haweli', '258741', 0, '36', 17),
('Aniket Raj', '0620775320', 'MAA SHANTI NIWAS GOSAI TOLI CHUTIA RANCHI', '834001', 0, '98', 20),
('Kumar', '9543213210', 'Aluva', '682022', 0, '93', 22);

-- --------------------------------------------------------

--
-- Table structure for table `orders_general`
--

CREATE TABLE `orders_general` (
  `name` varchar(20) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders_general`
--

INSERT INTO `orders_general` (`name`, `mobile`, `address`, `pincode`, `order_id`, `product_id`) VALUES
('sonu', '9638521474', 'MAA SHANTI NIWAS, GOSAI TOLI, CHUTIA, RANCHI.', '834001', 61, '30'),
('suru', '9874563210', 'hidayat nagar', '874563', 72, '34'),
('Nishant', '9685741230', 'PIPELINE ROAD', '682022', 77, '37'),
('bagam', '7894561230', 'edapally', '682021', 79, '39'),
('kumar', '688578756', 'chennai', '546738', 80, '42'),
('vaibhav', '998574688', 'kerala', '682022', 81, '41'),
('jagan', '9876543210', 'hidayat nagar', '898989', 82, '36');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_brand` varchar(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`) VALUES
(93, 0, 'CUSAT', 'Digital Electronics Lab Record', 80, 'Blue in color, School of engineering'),
(97, 0, 'local', 'Uniform', 655, '38 size shirt'),
(98, 0, 'CUSAT', 'MECHANICAL LAB MANUAL', 80, '1ST YEAR LAB MANUAL'),
(99, 0, 'soe', 'Rough record', 40, 'blue color');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `name` varchar(255) NOT NULL,
  `id` int(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `Mob` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`name`, `id`, `mail`, `Mob`, `password`, `cpassword`) VALUES
('manku', 28288, 'manku@gmail.com', '9738292992', 'lorlor', 'lorlor'),
('Gullu', 38392, 'gullu@gmail.com', '8473902220', 'eheheheh', 'eheheheh');

-- --------------------------------------------------------

--
-- Table structure for table `sell_items`
--

CREATE TABLE `sell_items` (
  `product_id` int(100) NOT NULL,
  `product_cat` varchar(255) NOT NULL,
  `seller_contact` varchar(255) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sell_items`
--

INSERT INTO `sell_items` (`product_id`, `product_cat`, `seller_contact`, `product_title`, `product_price`, `product_desc`, `product_keywords`) VALUES
(35, 'FURNITURE', '9877564323', 'TABLE', 650, 'WITH DRAWER', 'BASIC UTILITIES'),
(40, 'ELECTRICALS', '7800547743', 'STAND FAN', 433, '6 BLADES', 'DAY TO DAY USE'),
(43, 'furniture', '9884979848', 'chair', 700, 'wooden', 'with drawer'),
(44, 'electronics', '6656565656', 'computer', 12000, 'hp', 'windows7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_amenities`
--
ALTER TABLE `orders_amenities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_general`
--
ALTER TABLE `orders_general`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sell_items`
--
ALTER TABLE `sell_items`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders_amenities`
--
ALTER TABLE `orders_amenities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `orders_general`
--
ALTER TABLE `orders_general`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `sell_items`
--
ALTER TABLE `sell_items`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
