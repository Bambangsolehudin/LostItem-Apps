-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2021 at 01:37 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lost-items-app`
--

-- --------------------------------------------------------

--
-- Table structure for table `answerdetails`
--

CREATE TABLE `answerdetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answerdetails`
--

INSERT INTO `answerdetails` (`id`, `user_id`, `item_id`, `answer`, `created_at`, `updated_at`) VALUES
(5, 2, 1, 'punya saya bre', '2021-03-27 20:28:07', '2021-03-27 20:28:07'),
(6, 2, 2, 'punya aku bre', '2021-03-27 20:28:17', '2021-03-27 20:28:17'),
(7, 2, 3, 'kalo dijalanan punya saya bre', '2021-03-27 20:28:33', '2021-03-27 20:28:33'),
(8, 3, 1, 'ngakak hyung', '2021-03-27 20:40:44', '2021-03-27 20:40:44'),
(9, 1, 6, 'asa', '2021-03-27 22:04:09', '2021-03-27 22:04:09'),
(10, 2, 1, 'mantap gan jawabannya blabla', '2021-03-28 03:45:36', '2021-03-28 03:45:36'),
(11, 1, 9, 'd', '2021-04-23 21:01:09', '2021-04-23 21:01:09'),
(12, 1, 12, 'sds', '2021-04-23 21:28:02', '2021-04-23 21:28:02'),
(13, 1, 12, 'ui', '2021-04-23 22:00:41', '2021-04-23 22:00:41'),
(14, 1, 12, 'sa', '2021-04-23 23:01:16', '2021-04-23 23:01:16'),
(15, 1, 6, 'warna nya kaya kambing', '2021-06-15 02:58:41', '2021-06-15 02:58:41'),
(16, 1, 12, 'dikali', '2021-06-15 02:59:39', '2021-06-15 02:59:39');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `item_id`, `user_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(7, 'assets/gallery/M6Ns5UMJkFbQqDhR2hF3pwFt6XzzLAb6fAIerDmB.jpg', 1, 1, NULL, '2021-03-26 10:17:39', '2021-03-26 10:17:39'),
(8, 'assets/gallery/3VAdRnBKSnM0AmkSW1ZNY2Rq8KXGG9AxBJ2cDzi2.jpg', 3, 1, NULL, '2021-03-26 10:18:08', '2021-03-26 10:18:08'),
(9, 'assets/gallery/B2Q4MIOvh513PEYRiAI4ff9YH5COBbehPZMVzMry.jpg', 3, 2, NULL, '2021-03-26 19:31:06', '2021-03-26 19:31:06'),
(10, 'assets/gallery/IvYbCymNaWBqxSAcudU5bMjZJhDT1nCBu16BVdgB.jpg', 5, 2, NULL, '2021-03-26 20:04:07', '2021-03-26 20:04:07'),
(11, 'assets/gallery/akdT3RpVZj5TZa17hw0BZVHl19Ev8PifKuf4vmWr.jpg', 4, 1, NULL, '2021-03-27 03:52:25', '2021-03-27 03:52:25'),
(12, 'assets/gallery/SPrS85EYTeSYD7z36z2IWKoNo9nlK8uWePZRBZMc.webp', 2, 1, NULL, '2021-03-27 03:53:59', '2021-03-27 03:53:59'),
(13, 'assets/gallery/foE5olyKXijayq4Y3mAuEudZHhOQBqzWCJ6N974i.jpg', 6, 1, NULL, '2021-03-27 03:55:13', '2021-03-27 03:55:13'),
(14, 'assets/gallery/4qmXcXjeuKqPb3iHqI9Oj2V1OrUMaYaGDcac6LSP.jpg', 1, 1, NULL, '2021-03-27 03:59:45', '2021-03-27 03:59:45'),
(15, 'assets/gallery/f3WXpkfT4eWdqoSNoGtRn6ONQ62oSzibwBsi29Kg.jpg', 7, 1, NULL, '2021-03-28 03:47:13', '2021-03-28 03:47:13'),
(16, 'assets/gallery/TQ4qMoomXQPrZ2vw46851RgFr6zLseeXPhL3AUqf.jpg', 7, 1, NULL, '2021-03-28 03:47:24', '2021-04-24 00:24:52'),
(17, 'assets/gallery/UZaB42vlLxgHOyGYzQ1mL4uAXO9LPVoVCkeAx5dO.jpg', 1, 1, NULL, '2021-04-24 00:25:14', '2021-04-24 00:25:14'),
(18, 'assets/gallery/vTWpt1vSKbUAwP01tcTjDxlGvnBiOrRH0pBlOOQM.jpg', 1, 1, NULL, '2021-06-15 03:01:27', '2021-06-15 03:01:27');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(181) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` int(11) NOT NULL,
  `detail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `user_id`, `name`, `type`, `category`, `weight`, `detail`, `question`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Oppo 9 Prosq', 'barang hilang', 'barang hilang', 12, 'DETAIL', 'QUESTION', NULL, '2021-03-26 05:41:44', '2021-03-31 21:27:21'),
(2, 1, 'Realme 5 Pro', 'barang hilang', 'barang temuan', 12, 'DETAIL', 'QUESTION', NULL, '2021-03-26 05:46:35', '2021-03-31 21:27:16'),
(3, 2, 'Realme 3 Pro', 'barang temuan', 'HP', 12, 'DETAIL', 'QUESTION', NULL, '2021-03-26 05:51:35', '2021-03-26 19:39:01'),
(4, 1, 'Xiomi Redmi 9', 'barang hilang', 'HP', 12, 'DETAIL', 'QUESTION', NULL, '2021-03-26 19:27:11', '2021-03-26 19:27:11'),
(5, 2, 'ANDROID 11', 'barang hilang', 'HP', 12, 'DETAIL', 'QUESTION', NULL, '2021-03-26 19:38:01', '2021-03-26 19:38:01'),
(6, 1, 'Samsung Galaxy A8', 'barang temuan', 'HP', 12, 'DETAIL', 'QUESTION', NULL, '2021-03-27 03:54:48', '2021-03-27 03:54:48'),
(7, 1, 'Vivo', 'barang hilang', 'HP', 12, 'DETAIL', 'QUESTION', NULL, '2021-03-28 03:46:54', '2021-03-28 03:46:54'),
(8, 1, 'Laptop Lenovo ideapad 320', 'barang hilang', 'laptop', 12, 'leptop warna hitam, besar', 'dutemukan di mana ?', NULL, '2021-03-31 21:11:09', '2021-03-31 21:11:09'),
(9, 1, 'Lenovo G40-45', 'Leptop', 'barang hilang', 123, 'leptop warna hitam, Putih', 'ditemukan dimana ?', NULL, '2021-03-31 21:20:44', '2021-03-31 21:35:35'),
(10, 1, '1', '1', 'barang hilang', 12, '1', NULL, '2021-03-31 21:21:30', '2021-03-31 21:21:19', '2021-03-31 21:21:30'),
(11, 1, 'a', 'aq', 'barang hilang', 1, 'a', 'a', '2021-03-31 21:31:48', '2021-03-31 21:30:23', '2021-03-31 21:31:48'),
(12, 1, 'Oppo 9 Pro', 'HP', 'barang hilang', 12, 'asasadadada', 'dutemukan di mana ?', NULL, '2021-04-04 20:43:00', '2021-04-04 20:43:34');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_03_26_060855_create_items_table', 1),
(5, '2021_03_26_061237_create_images_table', 1),
(6, '2021_03_26_061253_create_answers_table', 1),
(7, '2021_03_28_021022_create_answerdetails_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('bamsolwibu2@gmail.com', '$2y$10$cfnyxQqf5AbhEWFixmorpugPTPsJn2sS9w4fpqPGs7ETRDA4G3MP.', '2021-03-27 11:57:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor` varchar(121) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `nomor`, `image`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Bambang Solehudin', 'bamsolwibu@gmail.com', '085156129091', 'assets/gallery/fikFXbdWJ7umwnhYhkP7YAw4DF2sREz7KWTTzTLX.jpg', NULL, '$2y$10$e82rS4nIyTRK.LEusn5kxeS1j20Ka1Ad2/Qx3qxlYqTj2Q0zIgBxK', 'V4tEV7NNh4oAOimJZZPTTkybHPdwkmUjIVtISYtIFVAb2xVz2xyB7BpwoTnX', '2021-03-26 05:40:31', '2021-04-03 22:06:39'),
(2, 'Rafael', 'bamsolwibu1@gmail.com', '089827635219', 'assets/user/user.jpg', NULL, '$2y$10$1J6.axOgZTYAKRR0bdWPL.mbW9f.Z0nUnz2Yqx8Os6EBpiR9eh2k.', NULL, '2021-03-26 08:43:59', '2021-03-26 08:43:59'),
(3, 'Bambang Solehudin', 'bamsolwibu2@gmail.com', '086517789292', 'assets/user/user.jpg', NULL, '$2y$10$6vopxkxeOnEoilE//Wgh5Og48l1Ycnv7DkJS2lZ8UnqW.6/YMbU26', NULL, '2021-03-27 11:04:39', '2021-03-27 11:04:39'),
(4, 'rezky', 'rezkykarunia8@gmail.com', '082125470410', 'assets/gallery/uivpOCTjeAfFJA1fgoBFq8H6ftnHMyWof40lba9s.jpg', NULL, '$2y$10$cBp5P1dSQDL8W0WCUZyccOtaZXFEt7W32m1k5RUIC4CpW97zNcgFO', NULL, '2021-06-15 02:54:37', '2021-06-15 02:55:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answerdetails`
--
ALTER TABLE `answerdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answerdetails`
--
ALTER TABLE `answerdetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
