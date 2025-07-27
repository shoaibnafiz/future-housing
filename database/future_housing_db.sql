-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 11, 2023 at 09:21 AM
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
(1, '101', 'Charles Hall', '01712345678', 'Basin pipe line is broken. Please try to fix it early.', '2023-05-22 20:21:00', 1),
(2, '201', 'William Harris', '01812345678', 'There is a problem in my room door. Please fix it early.', '2023-05-27 20:41:12', 1),
(3, '202', 'Venessa Tucker', '01312345678', 'Waterpipe line is broken. Please try to fix it early.', '2023-06-15 20:19:29', 0);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int NOT NULL,
  `date` date DEFAULT NULL,
  `details` varchar(256) COLLATE utf8mb3_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `date`, `details`) VALUES
(1, '2023-06-01', 'We are arranging a BBQ Party in rooftop on 3rd day of Ramadan at 8.00 PM. Everyone is invited. We\'ll be happy if join. Thank you all.');

-- --------------------------------------------------------

--
-- Table structure for table `flats`
--

CREATE TABLE `flats` (
  `id` int NOT NULL,
  `flat` varchar(256) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb3_unicode_ci,
  `rent` varchar(256) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `gas_bill` varchar(256) COLLATE utf8mb3_unicode_ci NOT NULL,
  `picture1` varchar(256) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `picture2` varchar(256) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `picture3` varchar(256) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `flats`
--

INSERT INTO `flats` (`id`, `flat`, `description`, `rent`, `gas_bill`, `picture1`, `picture2`, `picture3`, `status`) VALUES
(1, '101', '3 rooms, 2 bathrooms, 1 kitchen with back porch and front porch', '20000', '1080', 'IMG_1687094149_flat-1.jpg', 'IMG_1687094541_flat-2.jpg', 'IMG_1685024823-drawing-1.jpg', 1),
(2, '102', '3 rooms, 2 bathrooms, 1 kitchen with back porch.', '15000', '1080', 'IMG_1685024850-flat-2.jpg', 'IMG_1685024850-flat-1.jpg', 'IMG_1685024850-drawing-2.jpg', 0),
(3, '201', '3 rooms, 2 bathrooms, 1 kitchen with back porch and front porch', '20000', '1080', 'IMG_1685024877-flat-1.jpg', 'IMG_1685024877-flat-2.jpg', 'IMG_1685024877-drawing-1.jpg', 1),
(4, '202', '3 rooms, 2 bathrooms, 1 kitchen with back porch.', '15000', '1080', 'IMG_1685024903-flat-2.jpg', 'IMG_1685024903-flat-1.jpg', 'IMG_1685024903-drawing-2.jpg', 1),
(5, '301', '3 rooms, 2 bathrooms, 1 kitchen with back porch and front porch', '20000', '1080', 'IMG_1686924245-flat-1.jpg', 'IMG_1686924245-flat-2.jpg', 'IMG_1686924245-drawing-1.jpg', 0),
(6, '302', '3 rooms, 2 bathrooms, 1 kitchen with back porch.', '15000', '1080', 'IMG_1686924346-flat-2.jpg', 'IMG_1686924346-flat-1.jpg', 'IMG_1686924346-drawing-2.jpg', 1),
(7, '401', '3 rooms, 2 bathrooms, 1 kitchen with back porch and front porch', '20000', '1080', 'IMG_1687610052_flat-1.jpg', 'IMG_1687610052_flat-2.jpg', 'IMG_1687610052_drawing-1.jpg', 0);

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
(1, '201', 'William Harris', '01812345678', '20000', '1080', '01812345678', 'jguyrftyedyhgf', '2023-05-02 20:45:58'),
(2, '101', 'Charles Hall', '01712345678', '20000', '1080', '01712345678', 'ghasufgsakh', '2023-05-04 20:47:06'),
(3, '101', 'Charles Hall', '01712345678', '20000', '1080', '01712345678', 'ghasufgsakh', '2023-06-02 20:47:19'),
(4, '201', 'William Harris', '01812345678', '20000', '1080', '01812345678', 'jguyrftyedyhgf', '2023-06-03 20:46:07'),
(5, '101', 'Charles Hall', '01712345678', '20000', '1080', '01712345678', 'ghasufgsakh', '2023-07-02 20:47:30'),
(6, '202', 'Venessa Tucker', '01312345678', '15000', '1080', '01312345678', 'jguyrftyedyhgf', '2023-07-02 20:47:58');

-- --------------------------------------------------------

--
-- Table structure for table `guards`
--

CREATE TABLE `guards` (
  `id` int NOT NULL,
  `fullname` varchar(256) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `username` varchar(256) COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(256) COLLATE utf8mb3_unicode_ci NOT NULL,
  `phone` varchar(256) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `nid` varchar(256) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `gender` varchar(256) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `password` varchar(256) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `picture` varchar(256) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `registered_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `guards`
--

INSERT INTO `guards` (`id`, `fullname`, `username`, `email`, `phone`, `nid`, `gender`, `password`, `picture`, `start_time`, `end_time`, `registered_at`) VALUES
(1, 'Samad Zia', 'samad', 'samad@gmail.com', '01375876954', '3256987412', 'Male', 'df4ad9d5c22ecabca116e2b8dd0c140c', 'no-image.jpg', '09:00:00', '21:00:00', '2023-06-21 20:50:31'),
(2, 'Jabed Karim', 'jabed', 'jabed@gmail.com', '01532469875', '6548793215', 'Male', 'df4ad9d5c22ecabca116e2b8dd0c140c', 'no-image.jpg', '21:00:00', '09:00:00', '2023-06-21 20:50:31');

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
(1, '101', 'Charles Hall', 'Alok Chowdhury', '01324567898', 5, 'meeting', '2023-05-12', '11:00:00', 8608, 1),
(2, '201', 'William Harris', 'Miskat Hasan', '01524567898', 4, 'normal visit', '2023-06-07', '14:30:00', 1168, 1),
(3, '101', 'Charles Hall', 'Meghnat Chowkroborty', '01624567898', 3, 'normal visit', '2023-07-04', '12:00:00', 6246, 0);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int NOT NULL,
  `date` date DEFAULT NULL,
  `description` varchar(256) COLLATE utf8mb3_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `date`, `description`) VALUES
(1, '2023-05-01', 'Please pay your RENT before 10th May.'),
(2, '2023-06-01', 'Please pay your RENT before 10th June.'),
(3, '2023-07-01', 'Please pay your RENT before 10th July.');

-- --------------------------------------------------------

--
-- Table structure for table `renters`
--

CREATE TABLE `renters` (
  `id` int NOT NULL,
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

INSERT INTO `renters` (`id`, `flat`, `fullname`, `username`, `email`, `phone`, `nid`, `gender`, `password`, `picture`, `registered_at`) VALUES
(1, '101', 'Charles Hall', 'charles123', 'charles@gmail.com', '01712345678', '1728394565', 'Male', 'ee11cbb19052e40b07aac0ca060c23ee', 'IMG_1688299805_Charles_Hall.jpg', '2023-04-02 17:54:18'),
(2, '201', 'William Harris', 'william123', 'william@gmail.com', '01812345678', '3917284565', 'Male', 'ee11cbb19052e40b07aac0ca060c23ee', 'IMG_1688299831_William_Harris.jpg', '2023-04-07 18:02:26'),
(3, '202', 'Venessa Tucker', 'venessa123', 'venessa@gmail.com', '01312345678', '7193824565', 'Female', 'ee11cbb19052e40b07aac0ca060c23ee', 'IMG_1688299902_Venessa_Tucker.jpg', '2023-05-03 18:04:27'),
(4, '302', 'Christina Mason', 'christina123', 'christina@gmail.com', '01512345678', '9371824565', 'Female', 'ee11cbb19052e40b07aac0ca060c23ee', 'IMG_1688299928_Christina_Mason.jpg', '2023-06-05 18:06:05');

-- --------------------------------------------------------

--
-- Table structure for table `request_guards`
--

CREATE TABLE `request_guards` (
  `id` int NOT NULL,
  `fullname` varchar(256) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `username` varchar(256) COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(256) COLLATE utf8mb3_unicode_ci NOT NULL,
  `phone` varchar(256) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `nid` varchar(256) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `password` varchar(256) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `picture` varchar(256) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `requested_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `code` text COLLATE utf8mb3_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `request_guards`
--

INSERT INTO `request_guards` (`id`, `fullname`, `username`, `email`, `phone`, `nid`, `password`, `picture`, `requested_at`, `code`) VALUES
(4, 'Naimul Alam', 'naimul1997', 'naimul.dihan.7@gmail.com', '01832456796', '9154964040', 'df4ad9d5c22ecabca116e2b8dd0c140c', 'no-image.jpg', '2023-07-10 19:59:45', '7ac6ebb9660ab89e90fdeeeef08fdd1a'),
(5, 'Naimul Alam', 'naimul1997', 'naimul.dihan.7@gmail.com', '01832456796', '9154964040', 'df4ad9d5c22ecabca116e2b8dd0c140c', 'no-image.jpg', '2023-07-14 19:42:09', '0607e5ff645487f5914a4f0cc90cf012');

-- --------------------------------------------------------

--
-- Table structure for table `request_renters`
--

CREATE TABLE `request_renters` (
  `id` int NOT NULL,
  `flat` varchar(256) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `fullname` varchar(256) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `username` varchar(256) COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(256) COLLATE utf8mb3_unicode_ci NOT NULL,
  `phone` varchar(256) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `nid` varchar(256) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `password` varchar(256) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `picture` varchar(256) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `requested_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `code` text COLLATE utf8mb3_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `request_renters`
--

INSERT INTO `request_renters` (`id`, `flat`, `fullname`, `username`, `email`, `phone`, `nid`, `password`, `picture`, `requested_at`, `code`) VALUES
(15, '301', 'Sharon Lessman', 'sharon123', 'sharon@gmail.com', '01612345678', '1937284565', 'ee11cbb19052e40b07aac0ca060c23ee', 'no-image.jpg', '2023-07-02 18:14:09', '');

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
(1, '101', 'Charles Hall', '01712345678', 'One parcel is coming from Shundarban courier service. Please take it for me.', '2023-04-20 20:15:30', 2),
(2, '101', 'Charles Hall', '01712345678', 'One parcel is coming from one of my relative name Putin. Please take it for me.', '2023-05-15 20:16:14', 2),
(3, '201', 'William Harris', '01812345678', 'One parcel is coming from Shundarban courier service. Please take it for me.', '2023-06-12 20:17:15', 1),
(4, '101', 'Charles Hall', '01712345678', 'One parcel is coming from Shundarban courier service. Please take it for me.', '2023-06-25 20:16:47', 1),
(5, '201', 'William Harris', '01812345678', 'One parcel is coming from one of my relative name Trump. Please take it for me.', '2023-06-30 20:17:56', 0),
(6, '302', 'Christina Mason', '01512345678', 'One parcel is coming from Shundarban courier service. Please take it for me.', '2023-07-02 20:19:57', 0);

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
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flats`
--
ALTER TABLE `flats`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `renters`
--
ALTER TABLE `renters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_guards`
--
ALTER TABLE `request_guards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_renters`
--
ALTER TABLE `request_renters`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `flats`
--
ALTER TABLE `flats`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `flat_rents`
--
ALTER TABLE `flat_rents`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `guards`
--
ALTER TABLE `guards`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `guests`
--
ALTER TABLE `guests`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `renters`
--
ALTER TABLE `renters`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `request_guards`
--
ALTER TABLE `request_guards`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `request_renters`
--
ALTER TABLE `request_renters`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
