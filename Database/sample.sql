-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2016 at 05:02 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sample`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_type` varchar(100) NOT NULL,
  `category_date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_type`, `category_date_created`) VALUES
(2, 'Books', '2016-08-20 05:11:03'),
(3, 'Uniforms', '2016-08-20 06:43:23');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `item_name` varchar(300) NOT NULL,
  `item_selling_price` int(11) NOT NULL,
  `item_unit_cost` int(11) NOT NULL,
  `item_date_created` datetime NOT NULL,
  `item_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `category_id`, `item_name`, `item_selling_price`, `item_unit_cost`, `item_date_created`, `item_description`) VALUES
(1, 2, 'Java Fundamentals', 350, 300, '2016-08-20 05:28:41', 'Title: Java Fundamentals\r\nAuthor: James Bay'),
(2, 2, 'Rizal''s works', 350, 300, '2016-08-20 06:42:55', 'Title: Rizal''s works\r\nAuthor: Benito Grace'),
(3, 3, 'Slacks (small)', 250, 200, '2016-08-20 06:45:51', 'Name :Slacks (small)\r\nSize: 22-26\r\nColor : Black\r\n\r\n'),
(4, 3, 'Slacks (medium)', 275, 250, '2016-08-20 06:46:34', 'Name: Slacks (medium)\r\nSize: 25-28\r\nColor: Black'),
(5, 3, 'Slacks (large)', 300, 270, '2016-08-20 06:47:27', 'Name: Slacks (large)\r\nSize: 28-32\r\nColor: Black'),
(6, 2, 'The wrath of the PHP', 1000, 50, '2016-08-20 08:03:28', 'I am so happy that I am learning and I can see my progress. Yay.');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1471613411),
('m130524_201442_init', 1471613413);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `cus_fname` varchar(100) NOT NULL,
  `cus_lname` varchar(100) NOT NULL,
  `order_date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `item_id`, `qty`, `cus_fname`, `cus_lname`, `order_date_created`) VALUES
(2, 1, 1, 'Sebastian', 'Puriza', '2016-08-21 13:36:03'),
(4, 4, 2, 'Davesone', 'Kitane', '2016-08-21 14:05:39'),
(5, 6, 3, 'Luisa', 'Manalo', '2016-08-21 14:16:10'),
(6, 2, 100, 'akla si third', 'bading si third', '2016-10-01 16:35:02');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `purchase_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`purchase_id`, `supplier_id`, `item_id`, `qty`) VALUES
(1, 2, 2, 35);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `student_fname` varchar(50) NOT NULL,
  `student_mname` varchar(50) NOT NULL,
  `studet_lname` varchar(50) NOT NULL,
  `student_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` int(11) NOT NULL,
  `supplier_name` varchar(100) NOT NULL,
  `contact_no` int(11) NOT NULL,
  `supplier_email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `supplier_name`, `contact_no`, `supplier_email`) VALUES
(2, 'ABC Hardware', 1234567, 'ABCHardware@email.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Felix', 'Gregorio', 'admin', 'IeIc04AOlDijtNBkCZBXKDKBBcc8Mhos', '$2y$13$hixglTar4p6d3nxXuLnCVOeBrco9tFomUwBGdNncFGF8Q5vnNvQhW', NULL, 'fvgregorio@gmail.com', 10, 1471615048, 1471615048),
(2, 'Angela', 'Gregorio', 'ganda', 'a4iSXTUt7LSYdMvPPLA1efSPecfbdkYH', '$2y$13$9RdfcNhJXunxgrzR36BgS.WwXaxP/on51l9G1G0gMoiCv.6AzUo2y', NULL, 'mvgsmc01@gmil.com', 10, 1475332443, 1475332443);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`purchase_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `purchase_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
