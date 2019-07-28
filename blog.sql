-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2019 at 08:30 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.0.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `startdate` varchar(255) DEFAULT NULL,
  `invited_users` text,
  `updated_at` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `deleted_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `user_id`, `name`, `description`, `image`, `startdate`, `invited_users`, `updated_at`, `created_at`, `deleted_at`) VALUES
(4, 3, 'Mango Event', 'sss', 'image/YePRVpq91Ko1kHGocJWkSP6mh2hW9gvdIz5nnUDF.jpeg', '2019-07-14', 'a:2:{i:0;s:1:\"4\";i:1;s:1:\"5\";}', '2019-07-15 18:11:08', '2019-07-15 16:44:09', NULL),
(5, 3, 'Shao', 'Smain', 'image/c4mMAwLUEH8dXGTgUj5RgPh0UyTzeOu8HEaLHNds.jpeg', '2019-07-05', 'a:1:{i:0;s:1:\"4\";}', '2019-07-15 17:24:01', '2019-07-15 17:24:01', NULL),
(7, 3, 'Pineapple Event', 'Sample description', 'image/8Zb9UwGudOacdiErOVOTwNw6GwavhxcWql06uVEm.jpeg', '2019-07-13', 'a:2:{i:0;s:1:\"1\";i:1;s:1:\"2\";}', '2019-07-15 18:11:39', '2019-07-15 18:01:54', NULL),
(9, 6, 'Poka Evernt', 'Sample Description', 'image/uMjESlaUYoeQan00UYQAG63NbvIyjiKIs0WywyWz.jpeg', '2019-07-27', 'a:2:{i:0;s:1:\"3\";i:1;s:1:\"5\";}', '2019-07-28 18:24:37', '2019-07-28 18:24:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` text,
  `updated_at` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `deleted_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `age`, `password`, `remember_token`, `updated_at`, `created_at`, `deleted_at`) VALUES
(1, 'Pankaj', 'panak@gmail.com', '', '$2y$10$OvQCGucrTLKWoGhelvPh3OWn/Paiw/7O.KqSTU94/DwNYLFNAQ7J2', NULL, '2019-07-14 10:52:43', '2019-07-14 10:52:43', NULL),
(2, 'Kolan', 'kolan@gmail.com', '22', '$2y$10$O7K/pleBGIE1HX0Y.Qlr8uQERJJN0dR8Po6FNMFxIU6iiY4Aq2aaq', NULL, '2019-07-14 10:57:43', '2019-07-14 10:57:43', NULL),
(3, 'katrina', 'katrina@gmail.com', '22', '$2y$10$7I1BENJJNMMivCBWu7blc.C7opP9MrrNjxYt3N/BAebkhwJrDQg7i', NULL, '2019-07-15 14:36:16', '2019-07-15 14:36:16', NULL),
(4, 'Priyanka', 'Priyanka@gmail.com', '22', '$2y$10$7I1BENJJNMMivCBWu7blc.C7opP9MrrNjxYt3N/BAebkhwJrDQg7i', NULL, '2019-07-15 14:36:16', '2019-07-15 14:36:16', NULL),
(5, 'Anushka', 'Anushka@gmail.com', '22', '$2y$10$7I1BENJJNMMivCBWu7blc.C7opP9MrrNjxYt3N/BAebkhwJrDQg7i', NULL, '2019-07-15 14:36:16', '2019-07-15 14:36:16', NULL),
(6, 'James Bond', 'panku.panchal@gmail.com', '28', '$2y$10$42336NR4HEimFIHTZFd4Z.AqKIwzeUE1r6JnYK9dYHfnXl5xhSo1a', NULL, '2019-07-28 18:21:59', '2019-07-28 18:21:59', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
