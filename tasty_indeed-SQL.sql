-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2021 at 08:24 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tasty_indeed`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`, `created_at`, `updated_at`) VALUES
(1, 'starter', '2021-07-05 20:35:45', '2021-07-05 17:05:39'),
(2, 'soup', '2021-07-05 20:36:05', '2021-07-05 17:05:55'),
(3, 'drink', '2021-07-05 20:36:17', '2021-07-05 17:06:14'),
(4, 'maincourse', '2021-07-05 20:36:25', '2021-07-05 17:06:19'),
(5, 'dessert', '2021-07-05 20:36:29', '2021-07-05 17:06:26');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `description`, `created_at`) VALUES
(1, 'RASHMI PRASAD ROY', 'rashmi@getsetblog.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis excepturi cum voluptatibus ullam? Quod numquam quia suscipit expedita dolorum corporis.\n   ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis excepturi cum voluptatibus ullam? Quod numquam quia suscipit expedita dolorum corporis.\n   ', '2021-06-30 18:38:08'),
(2, 'Naman Khare', 'naman.khare16@gmail.com', 'ere', 'JHVHBKJM', '2021-06-30 21:07:40'),
(3, 'naam', 'naman@f.com', 'sdfasd', 'asdasdasd', '2021-07-01 17:54:50'),
(4, 'ddfgdfgd', 'dfg@fds.cy', 'dfgdfgdfg', 'bs dg bfg fgh fdghfg hfg ', '2021-07-02 08:31:28'),
(5, 'd', 'balajimachinerystores@gmail.com', 'dfgdfg', 'dfg', '2021-07-04 09:07:06'),
(6, 'fgd', 'dfg@fds.cy', 'dfgdfg', 'dfgdfg', '2021-07-04 11:33:23'),
(7, 'aniket chomu', 'sfdsd@sf.com', 'ere', 'sdfsdf', '2021-07-06 03:20:46'),
(8, 'Sucheta Pal', 'pal.sucheta1@gmail.com', 'complaint', 'cxdv', '2021-07-12 01:04:46');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `item_url` varchar(255) DEFAULT NULL,
  `item_type` varchar(255) NOT NULL,
  `desc` longtext NOT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `cat_id`, `name`, `item_url`, `item_type`, `desc`, `price`, `created_at`, `updated_at`) VALUES
(2, 5, 'Kesar Sandesh with rose petals', 'includes/images/desserts/Sandesh-Sweet-3.jpg', 'Sweets', '', 24.00, '2021-07-05 21:12:58', '2021-07-06 00:43:49'),
(3, 4, 'Butter Nun', 'includes\\image2\\butter_nun.jpg', 'Veg', '', 25.00, '2021-07-07 14:40:07', '2021-07-07 18:19:25'),
(4, 4, 'Kadai Mushroom', 'includes\\image2\\kadai-mushroom-recipe-1.jpg', 'Veg', '', 135.00, '2021-07-07 14:40:07', '2021-07-07 18:19:25'),
(5, 4, 'Kolkata Chicken Biriyani', 'includes\\image2\\biriyani.jpg', 'Main Course', '', 169.00, '2021-07-07 14:53:19', '2021-07-07 19:09:53'),
(6, 2, 'Boondi Raita', 'includes\\image2\\Boondi-Raita-1-of-4-500x500.jpg', 'Soup', '', 50.00, '2021-07-07 14:53:19', '2021-07-07 19:09:53'),
(7, 2, 'Larb Salad', 'includes\\image2\\larb.jpg', 'salad', '', 99.50, '2021-07-07 15:41:25', '2021-07-07 19:13:01'),
(8, 1, 'Veg Spring Rolls', 'includes\\image2\\Spring-Rolls-1.jpg', 'Veg', '', 45.00, '2021-07-07 15:41:25', '2021-07-07 19:13:01'),
(9, 5, 'Dove-Chocolate-Ice-Cream', 'includes\\image2\\Dove-Chocolate-Ice-Cream-6-scaled.jpg', 'Ice-cream', '', 299.00, '2021-07-07 15:46:07', '2021-07-07 19:17:23');

-- --------------------------------------------------------

--
-- Table structure for table `tablebook`
--

CREATE TABLE `tablebook` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `seatingcapacity` varchar(255) NOT NULL,
  `specialoccasion` varchar(255) DEFAULT 'NA',
  `additionalnotes` longtext DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tablebook`
--

INSERT INTO `tablebook` (`id`, `name`, `seatingcapacity`, `specialoccasion`, `additionalnotes`, `created_at`) VALUES
(1, 'Naman', 'family', 'birthday', 'Special Note', '2021-07-05 09:07:44'),
(2, 'Naman Khare', 'extra', 'aniversary', '', '2021-07-05 21:18:15'),
(3, 'Naman Khare', 'extra', 'meeting', 'hbjnj jjbjh jhb jhbh hbj', '2021-07-06 03:21:26'),
(4, 'sdf', 'couple', 'birthday', 'ibubnj', '2021-07-06 09:59:10'),
(5, 'Naman Khare', 'couple', 'date', 'jkmlkm', '2021-07-06 12:21:02'),
(6, 'xf', 'couple', '', '', '2021-07-12 02:24:52'),
(7, 'xc', 'solo', '', 'bxvsn', '2021-07-12 08:48:10'),
(8, 'ncvsxnb', 'solo', 'birthday', 'cnb xmcn', '2021-07-12 09:41:23'),
(9, 'Sucheta', 'family', 'birthday', 'HSGBX', '2021-07-12 09:45:53'),
(10, 'Sucheta', 'family', 'meeting', 'kljkihk', '2021-07-12 19:26:58');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `is_admin`, `created_at`, `updated_at`) VALUES
(1, 'Naman', 'hi@namankhare.com', '12345', 1, '2021-07-01 18:15:21', '2021-07-01 14:43:25'),
(2, 'Naman1', 'hello@namankhare.com', '12345', 0, '2021-07-01 18:15:21', '2021-07-01 14:43:25'),
(10, 'Sucheta Pal', 'pal.bubli1@gmail.com', '123', 1, '2021-07-07 19:26:51', '0000-00-00 00:00:00'),
(14, 'Sucheta Pal', 'pal.angsujit1@gmail.com', '12345', 0, '2021-07-09 00:10:00', '0000-00-00 00:00:00'),
(30, 'Sucheta Pal', 'pal.sucheta2@gmail.com', 'ahsdbjsbcjksdb', 0, '2021-07-09 00:40:35', '0000-00-00 00:00:00'),
(31, 'Tua', 'bnb@gfvh.com', '19787', 0, '2021-07-09 00:43:51', '0000-00-00 00:00:00'),
(32, 'Bubli', '20bcs7901@c.in', '12345', 0, '2021-07-16 10:32:03', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_cat_id_foreign` (`cat_id`);

--
-- Indexes for table `tablebook`
--
ALTER TABLE `tablebook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tablebook`
--
ALTER TABLE `tablebook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
