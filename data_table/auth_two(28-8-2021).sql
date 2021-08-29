-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2021 at 07:17 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auth_two`
--

-- --------------------------------------------------------

--
-- Table structure for table `centers`
--

CREATE TABLE `centers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `center_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `refference_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0==pending, 1==approved',
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `center_employees`
--

CREATE TABLE `center_employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `center_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `management_unique_key_id` int(11) DEFAULT NULL,
  `unique_id_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0==pending, 1==approved',
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0==pending, 1==approved',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `country_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', 2, 1, '2021-08-24 04:02:41', '2021-08-24 04:02:41'),
(3, 'Chattagram', 2, 1, '2021-08-28 10:17:16', '2021-08-28 10:17:16');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0==pending, 1==approved',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Bangladesh', 1, '2021-08-23 15:39:55', '2021-08-23 15:39:55'),
(6, 'UK', 1, '2021-08-24 01:41:50', '2021-08-24 01:41:50'),
(7, 'US', 1, '2021-08-24 01:42:04', '2021-08-24 01:42:04'),
(8, 'UAE', 1, '2021-08-24 01:42:12', '2021-08-24 01:42:12'),
(9, 'India', 1, '2021-08-24 01:42:21', '2021-08-24 01:42:21'),
(10, 'Sri-Lanka', 1, '2021-08-24 01:43:13', '2021-08-24 01:43:13'),
(11, 'Malaysia', 1, '2021-08-24 01:43:42', '2021-08-24 01:43:42'),
(12, 'Africa', 1, '2021-08-24 01:44:11', '2021-08-24 01:44:11'),
(13, 'New Zealand', 1, '2021-08-24 01:44:36', '2021-08-24 01:44:36'),
(14, 'France', 1, '2021-08-24 01:45:00', '2021-08-24 01:45:00'),
(15, 'Italy', 1, '2021-08-24 01:45:19', '2021-08-24 01:45:19'),
(16, 'Ghana', 1, '2021-08-24 02:02:10', '2021-08-24 02:02:10'),
(17, 'Brazil', 1, '2021-08-28 10:16:36', '2021-08-28 10:16:36');

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
-- Table structure for table `management_unique_i_dkeys`
--

CREATE TABLE `management_unique_i_dkeys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_no` int(11) NOT NULL,
  `refference_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unique_id_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0==pending, 1==approved',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `management_unique_i_dkeys`
--

INSERT INTO `management_unique_i_dkeys` (`id`, `id_no`, `refference_key`, `unique_id_key`, `status`, `created_at`, `updated_at`) VALUES
(1, 1121, 'SUPERADMIN', 'SUPERADMIN1121', 0, '2021-08-25 09:41:00', '2021-08-26 12:24:21'),
(3, 1122, 'ADASD', 'ADASD1122', 1, '2021-08-25 03:46:08', '2021-08-25 03:46:08'),
(4, 1122, 'ADASD', 'ADASD1122', 1, '2021-08-25 03:47:03', '2021-08-25 03:47:03'),
(5, 1122, 'ADSSA', 'ADSSA1122', 0, '2021-08-25 03:48:07', '2021-08-27 08:44:12'),
(6, 1123, 'AAAAQW', 'AAAAQW1123', 1, '2021-08-25 05:39:24', '2021-08-25 05:39:24'),
(7, 1124, 'ASASASQ', 'ASASASQ1124', 0, '2021-08-26 11:01:53', '2021-08-27 08:44:24');

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
(4, '2021_01_07_061937_create_roles_table', 1),
(5, '2021_08_23_152346_create_countries_table', 1),
(6, '2021_08_24_080430_create_cities_table', 1),
(7, '2021_08_24_101923_create_management_unique_i_dkeys_table', 1),
(8, '2021_08_27_172520_create_centers_table', 2),
(9, '2021_08_27_172612_create_center_employees_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0==pending, 1==approved',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `group_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 1, '2021-08-24 10:35:48', '2021-08-24 10:35:48'),
(2, 'UK-Manager', 'UK_MANAGEMENT', 1, '2021-08-24 14:55:00', '2021-08-24 14:55:00'),
(3, 'UK-Admission-Coordinator', 'UK_MANAGEMENT', 1, '2021-08-24 14:56:32', '2021-08-24 14:56:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `profile_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '/img/profile_image.png',
  `country_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `unique_key_id` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role_id`, `email`, `number`, `email_verified_at`, `password`, `user_status`, `profile_image`, `country_id`, `city_id`, `unique_key_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '1', 'admin@gmail.com', '21312312321312', NULL, '$2y$10$sUY5Gaig7w2Yxyvk3p3UBu6QTSIaPJsOz6evz48ZrXMV6.EIBz0r6', '1', '/img/profile_image.png', 2, 1, 1, NULL, '2021-08-25 09:39:40', '2021-08-26 12:24:21'),
(3, 'Hafizz Mia', '3', 'habibahasun019@gmail.com', '1231231231', NULL, '$2y$10$36zgyns8bACJYee2vR7JWeKxn5pRhGu5.knDAJuyjQg7uXh3dGBt2', '1', '/img/profile_image.png', 2, 1, 3, NULL, '2021-08-25 03:46:09', '2021-08-26 10:02:50'),
(5, 'SK Badon', '3', 'badon@gmail.com', '12312312312', NULL, '$2y$10$tfOesT8zLyGmTU8VTxAYwuGJSIl68qXwtQ/E.QIJkWvq/M1v91Yx6', '0', '/img/1629884887.jpeg', 2, 1, 5, NULL, '2021-08-25 03:48:07', '2021-08-27 08:44:12'),
(6, 'Md Ahasun Habib', '2', 'habibahasun016@gmail.com', '+8801966205647', NULL, '$2y$10$AQ5NRIN5IO.VqCSOuNUkr.LJCgKx7HFfHb9MrD2F6RdoCvyEwrbsC', '1', '/img/profile_image.png', 2, 1, 6, NULL, '2021-08-25 05:39:24', '2021-08-25 05:39:24'),
(7, 'Meem', '3', 'meem@gmail.com', '12312312312', NULL, '$2y$10$RT6/CK5J35OEV/Q5XgVZQe5GcBM1breuAvGK4fYyAEyefoAm4dNv.', '0', '/img/profile_image.png', 2, 1, 7, NULL, '2021-08-26 11:01:53', '2021-08-27 08:44:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `centers`
--
ALTER TABLE `centers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `center_employees`
--
ALTER TABLE `center_employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `management_unique_i_dkeys`
--
ALTER TABLE `management_unique_i_dkeys`
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
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `centers`
--
ALTER TABLE `centers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `center_employees`
--
ALTER TABLE `center_employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `management_unique_i_dkeys`
--
ALTER TABLE `management_unique_i_dkeys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
