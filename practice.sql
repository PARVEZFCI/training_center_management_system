-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2021 at 07:13 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `practice`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `address`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Parvez Rohman', 'admin@gmail.com', 'Kallanpur', '$2y$10$BjjZz/3m88JOOQRLMiNCleioIxZCrfDN7tGvJqlhlq9WSM5Tb527G', NULL, NULL),
(2, 'Parvez Rohman', 'parvezrohmanfci@gmail.com', 'Kallanpur', '$2y$10$oJs0D3R4gAQAjSdPa4PGxes.13.PYUo2z5yd/iUysT4eVHswDeSyS', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_02_24_184051_create_admins_table', 1),
(5, '2021_03_23_151628_create_quiz_packages_table', 2),
(6, '2021_03_24_155404_create_questions_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question_id` int(11) NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `optiona` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `optionb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `optionc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `optaiond` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correct_ans` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question_id`, `question`, `optiona`, `optionb`, `optionc`, `optaiond`, `correct_ans`, `created_at`, `updated_at`) VALUES
(12, 5, 'fojorer namaj koy rakat', '1', '2', '3', '4', 'd', '2021-03-24 11:09:36', '2021-03-24 11:09:36'),
(13, 5, 'johor', '4', '8', '10', '12', 'c', '2021-03-24 11:09:36', '2021-03-24 11:09:36'),
(14, 5, 'achor', '4', '8', '3', '2', 'b', '2021-03-24 11:09:36', '2021-03-24 11:09:36'),
(15, 5, 'magrib', '3', '5', '6', '8', 'b', '2021-03-24 11:09:36', '2021-03-24 11:09:36'),
(16, 5, 'esa', '10', '12', '13', '14', 'b', '2021-03-24 11:09:36', '2021-03-24 11:09:36'),
(17, 6, 'fojorer namaj koy rakat', '1', '2', '3', '4', 'd', '2021-03-24 11:18:43', '2021-03-24 11:18:43'),
(18, 8, 'fojorer namaj koy rakat', '1', '2', '3', '4', 'd', '2021-04-02 10:34:32', '2021-04-02 10:34:32'),
(19, 8, 'johor', '4', '8', '12', '14', 'c', '2021-04-02 10:34:32', '2021-04-02 10:34:32'),
(20, 8, 'achor', '4', '8', '9', '12', 'b', '2021-04-02 10:34:32', '2021-04-02 10:34:32'),
(21, 8, 'magrib', '3', '5', '7', '9', 'c', '2021-04-02 10:34:32', '2021-04-02 10:34:32'),
(22, 8, 'esa', '4', '8', '10', '15', 'd', '2021-04-02 10:34:32', '2021-04-02 10:34:32'),
(23, 7, 'fojorer namaj koy rakat', '1', '2', '3', '4', 'd', '2021-06-09 11:30:46', '2021-06-09 11:30:46'),
(24, 7, 'johorer namaj koy rakat ?', '1', '3', '4', '12', 'd', '2021-06-09 11:30:46', '2021-06-09 11:30:46'),
(25, 7, 'achor er namaj?', '2', '3', '4', '8', 'd', '2021-06-09 11:30:46', '2021-06-09 11:30:46');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_packages`
--

CREATE TABLE `quiz_packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `qz_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to_que` int(11) NOT NULL,
  `rt_marks` int(11) NOT NULL,
  `wr_marks` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `user_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quiz_packages`
--

INSERT INTO `quiz_packages` (`id`, `qz_name`, `to_que`, `rt_marks`, `wr_marks`, `time`, `status`, `user_status`, `created_at`, `updated_at`) VALUES
(5, 'eid ul Adhja', 7, 1, 1, 20, 1, 0, '2021-03-24 11:07:11', '2021-06-09 11:23:06'),
(6, 'parvez rohman', 1, 1, 1, 2, 1, 1, '2021-03-24 11:18:26', '2021-03-24 11:18:26'),
(7, 'Mehdi hasan', 3, 1, 1, 6, 1, 0, '2021-03-24 22:12:20', '2021-06-09 11:28:54'),
(8, 'eid ul Adhja 2021', 5, 1, 1, 20, 1, 0, '2021-04-02 10:31:26', '2021-04-02 10:31:26'),
(9, 'Mehdi hasan', 5, 1, 1, 12, 1, 0, '2021-06-09 10:58:08', '2021-06-09 10:58:08'),
(10, 'sdfghjkl', 5, 1, 1, 12, 1, 0, '2021-06-09 10:59:20', '2021-06-09 10:59:20'),
(11, 'wertyui', 1, 1, 2, 12, 1, 0, '2021-06-09 11:06:49', '2021-06-09 11:06:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `address` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `number`, `address`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Parvez Rohman', 'admin@gmail.com', 'admin', 9878099, 'Kallanpur', NULL, '$2y$10$Q/tnaonYoRa0EoOPj9wiuOKzuyxNNUPN.5AxQNJh976lmFRf/oPQy', NULL, NULL, NULL),
(2, 'Jibon Sohidul', 'test@gmail.com', 'Parvez', 9878099, 'Kallanpur', NULL, '$2y$10$sxEwchb7H0XweLmMsOji1eXHNeex2wIa7ACaHRvClyQzgeRTXiO4e', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_packages`
--
ALTER TABLE `quiz_packages`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `quiz_packages`
--
ALTER TABLE `quiz_packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
