-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 11, 2023 at 08:05 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `future_housing_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int NOT NULL,
  `fullname` varchar(256) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `username` varchar(256) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `password` varchar(256) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `phone` varchar(256) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `picture` varchar(256) COLLATE utf8mb3_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `fullname`, `username`, `password`, `phone`, `picture`) VALUES
(1, 'Nafizul Alam', 'admin', 'admin', '01790323767', NULL),
(2, 'Mehedi Hasan Siam', 'admin', 'admin', '12345678987', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `complains`
--

CREATE TABLE `complains` (
  `id` int NOT NULL,
  `flat` varchar(256) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `fullname` varchar(256) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `phone` varchar(256) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `complain` text COLLATE utf8mb3_unicode_ci,
  `given_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `complains`
--

INSERT INTO `complains` (`id`, `flat`, `fullname`, `phone`, `complain`, `given_at`, `status`) VALUES
(1, '101', 'Nafizul Alam', '01790323767', 'There is a problem in our water pipeline. Please fix this as soon as possible.', '2023-05-28 19:51:22', 0);

-- --------------------------------------------------------

--
-- Table structure for table `flats`
--

CREATE TABLE `flats` (
  `flat` varchar(11) COLLATE utf8mb3_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb3_unicode_ci,
  `rent` varchar(256) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `picture1` varchar(256) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `picture2` varchar(256) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `picture3` varchar(256) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `flats`
--

INSERT INTO `flats` (`flat`, `description`, `rent`, `picture1`, `picture2`, `picture3`, `status`) VALUES
('101', '3 rooms, 2 bathrooms, 1 kitchen with back porch and front porch', '20000', 'IMG_1685024823-flat-1.jpg', 'IMG_1685024823-flat-2.jpg', 'IMG_1685024823-drawing-1.jpg', 1),
('102', '3 rooms, 2 bathrooms, 1 kitchen with back porch.', '15000', 'IMG_1685024850-flat-2.jpg', 'IMG_1685024850-flat-1.jpg', 'IMG_1685024850-drawing-2.jpg', 1),
('201', '3 rooms, 2 bathrooms, 1 kitchen with back porch and front porch', '20000', 'IMG_1685024877-flat-1.jpg', 'IMG_1685024877-flat-2.jpg', 'IMG_1685024877-drawing-1.jpg', 0),
('202', '3 rooms, 2 bathrooms, 1 kitchen with back porch.', '15000', 'IMG_1685024903-flat-2.jpg', 'IMG_1685024903-flat-1.jpg', 'IMG_1685024903-drawing-2.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `flat_rents`
--

CREATE TABLE `flat_rents` (
  `id` int NOT NULL,
  `flat` varchar(256) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `fullname` varchar(256) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `phone` varchar(256) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `rent` varchar(256) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `gas_bill` varchar(256) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `bKash_number` varchar(256) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `trx_id` varchar(256) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `rented_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `flat_rents`
--

INSERT INTO `flat_rents` (`id`, `flat`, `fullname`, `phone`, `rent`, `gas_bill`, `bKash_number`, `trx_id`, `rented_at`) VALUES
(1, '101', 'Nafizul Alam', '01790323767', '20000', '1080', NULL, NULL, '2023-05-28 18:11:31'),
(2, '101', 'Nafizul Alam', '01790323767', '15000', '1080', NULL, NULL, '2023-05-28 18:14:30'),
(3, '101', 'Nafizul Alam', '01790323767', '15000', '1080', NULL, NULL, '2023-05-28 18:15:29'),
(4, '101', 'Nafizul Alam', '01790323767', '20000', '1080', NULL, 'jguyrftyedyhgf', '2023-05-28 18:16:36'),
(5, '101', 'Nafizul Alam', '01790323767', '20000', '1080', '12345678978', 'jguyrftyedyhgf', '2023-05-28 18:18:32'),
(6, '101', 'Nafizul Alam', '01790323767', '20000', '1080', '12345678978', 'jguyrftyedyhgf', '2023-05-28 18:22:55');

-- --------------------------------------------------------

--
-- Table structure for table `guards`
--

CREATE TABLE `guards` (
  `id` int NOT NULL,
  `fullname` varchar(256) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `phone` varchar(256) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `nid` varchar(256) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `gender` varchar(256) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `guards`
--

INSERT INTO `guards` (`id`, `fullname`, `phone`, `nid`, `gender`, `start_time`, `end_time`) VALUES
(1, 'Samad Zia', '01375876954', '3256987412', 'Male', '09:00:00', '21:00:00'),
(2, 'Jabed Karim', '01532469875', '6548793215', 'Male', '21:00:00', '09:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `guests`
--

CREATE TABLE `guests` (
  `id` int NOT NULL,
  `flat` varchar(256) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `host_name` varchar(256) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `guest_name` varchar(256) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `guest_cell` varchar(256) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `total_guest` int DEFAULT NULL,
  `visit_purpose` text COLLATE utf8mb3_unicode_ci,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `pinCode` int NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `guests`
--

INSERT INTO `guests` (`id`, `flat`, `host_name`, `guest_name`, `guest_cell`, `total_guest`, `visit_purpose`, `date`, `time`, `pinCode`, `status`) VALUES
(1, '101', 'Nafizul Alam', 'Ruposh', '01324567898', 5, 'meeting', '2023-05-31', '17:58:00', 4988, 1),
(2, '102', 'Nafizul Alam', 'Nothing', '123456789654', 6, 'eweei', '2023-05-31', '17:58:00', 1820, 0),
(3, '101', 'Nafizul Alam', 'Ruposh', '01324567898', 5, 'meeting', '2023-06-02', '17:50:00', 3096, 0);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `date` varchar(11) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `description` varchar(256) COLLATE utf8mb3_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `renters`
--

CREATE TABLE `renters` (
  `flat` varchar(256) COLLATE utf8mb3_unicode_ci NOT NULL,
  `fullname` varchar(256) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `username` varchar(256) COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(256) COLLATE utf8mb3_unicode_ci NOT NULL,
  `phone` varchar(256) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `nid` varchar(256) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `gender` varchar(256) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `password` varchar(256) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `picture` varchar(256) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `registered_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `renters`
--

INSERT INTO `renters` (`flat`, `fullname`, `username`, `email`, `phone`, `nid`, `gender`, `password`, `picture`, `registered_at`) VALUES
('102', 'Nafizul Alam', 'nafiz1999', 'nafizulalam1999@gmail.com', '01790323767', '9154964242', 'Male', 'd41d8cd98f00b204e9800998ecf8427e', 'IMG_1686391449_user3.jpg', '2023-05-27 20:23:06'),
('101', 'Nafizul Alam', 'shoaib1999', 'shohebnafiz@gmail.com', '01790323767', '9154964242', 'Male', 'ee11cbb19052e40b07aac0ca060c23ee', 'IMG_1685455322_IMG_20210923_213545-01.jpg', '2023-05-30 20:01:41');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int NOT NULL,
  `flat` varchar(256) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `fullname` varchar(256) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `phone` varchar(256) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `task` text COLLATE utf8mb3_unicode_ci,
  `given_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `flat`, `fullname`, `phone`, `task`, `given_at`, `status`) VALUES
(1, '101', 'Nafizul Alam', '01790323767', 'one delivery will come from food panda. please take it from him.', '2023-05-28 19:40:48', 0),
(2, '101', 'Nafizul Alam', '01790323767', 'one delivery will come from food panda. please take it from him.', '2023-05-28 19:48:21', 0),
(3, '102', 'Nafizul Alam', '01790323767', 'one delivery will come from food panda. please take it from him.', '2023-05-29 17:54:32', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complains`
--
ALTER TABLE `complains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flats`
--
ALTER TABLE `flats`
  ADD PRIMARY KEY (`flat`);

--
-- Indexes for table `flat_rents`
--
ALTER TABLE `flat_rents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guards`
--
ALTER TABLE `guards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guests`
--
ALTER TABLE `guests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `renters`
--
ALTER TABLE `renters`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `flat` (`flat`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `complains`
--
ALTER TABLE `complains`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `flat_rents`
--
ALTER TABLE `flat_rents`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `guards`
--
ALTER TABLE `guards`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `guests`
--
ALTER TABLE `guests`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
