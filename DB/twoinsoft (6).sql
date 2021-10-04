-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2021 at 11:15 AM
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
-- Database: `twoinsoft`
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
  `admin` int(11) DEFAULT NULL,
  `student` int(11) DEFAULT NULL,
  `employee` int(11) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `address`, `password`, `admin`, `student`, `employee`, `student_id`, `created_at`, `updated_at`) VALUES
(1, 'Parvez Rohman', 'admin@gmail.com', 'Kallanpur', '$2y$10$BjjZz/3m88JOOQRLMiNCleioIxZCrfDN7tGvJqlhlq9WSM5Tb527G', 1, NULL, 0, NULL, NULL, NULL),
(2, 'Parvez Rohman', 'parvezrohmanfci@gmail.com', 'Kallanpur', '$2y$10$a59s1D//KgHZt0df.RGANux3dAIJkmDhuF37.Ucp5c2VWWIz.9aHy', 1, NULL, 0, NULL, NULL, NULL),
(4, 'Rayhan', 'rayhan@gmail.com', 'Feni', '$2y$10$PeisdAoItuyQ.3d/8ctoT.PcSVFj2R0W5pk3dNzJslCtBxyp3Wlf2', NULL, 0, 1, NULL, NULL, NULL),
(9, 'Jibon Sohidul', 'jibon@gmail.com', 'Kallanpur', '$2y$10$AB4q3GKqja5eAlhodT7mu.QnEPou5U8af352Y4XDtsa2rYcZ8.ZBy', NULL, 1, NULL, 3, NULL, NULL),
(10, 'Parvez Rohman', 'parvezrohmanfci@gmail.com', 'Feni', '$2y$10$1OzAqQi5gJCdsdjAmkUxiupNwP62Iy1/TYSr4DlQQo0lVmdQKN7tC', NULL, NULL, 1, NULL, NULL, NULL),
(11, 'Agent', 'agent@gmail.com', 'Kallanpur', '$2y$10$hwjp/Adh/U4GnoVKnAeWqunAchb/HnJKphqFWScCMSXwQxwoaY4v.', NULL, 1, NULL, 13, NULL, NULL),
(12, 'atik', 'atik@gmail.com', 'Kallanpur', '$2y$10$inrVTfyCM/rMVv8s9yxPtumw0b70rGdc6z/wTXzTX8G1RG0QnAo5.', NULL, 1, NULL, 15, NULL, NULL),
(13, 'abul', 'abul@gmail.com', 'Kallanpur', '$2y$10$8fHLL2rs1o1Y14zEtSYqmeH0HqskSEDsVpdFKROEOkQr9s7bjV9ym', NULL, 1, NULL, 16, NULL, NULL),
(14, 'Agent', 'agent@gmail.com', 'Kallanpur', '$2y$10$eIHXYrScLd/MFcxWonb7nOMBX3lRnV44Fp3PY.bt.icdTeES8ScFy', NULL, 1, NULL, 17, NULL, NULL),
(15, 'vladimir putin', 'vladimurputin@gmail.com', 'Kallanpur', '$2y$10$svkwdwgpZSMP5r84p7JUsuOUcWogDwskf/uC5FAJYWbWyuA0nS6pq', NULL, 1, NULL, 18, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attendance` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendances`
--

INSERT INTO `attendances` (`id`, `course_id`, `student_id`, `date`, `attendance`, `created_at`, `updated_at`) VALUES
(12, 1, 3, '28/07/2021', 1, '2021-07-28 10:02:35', '2021-07-28 10:02:35'),
(13, 1, 4, '28/07/2021', 0, '2021-07-28 10:02:35', '2021-07-28 10:02:35'),
(14, 1, 3, '29/07/2021', 1, '2021-07-29 07:31:56', '2021-07-29 07:31:56'),
(15, 1, 4, '29/07/2021', 0, '2021-07-29 07:31:56', '2021-07-29 07:31:56'),
(16, 1, 3, '07/08/2021', 1, '2021-08-07 11:13:49', '2021-08-07 11:13:49'),
(17, 1, 4, '07/08/2021', 1, '2021-08-07 11:13:49', '2021-08-07 11:13:49'),
(18, 1, 3, '16/08/2021', 1, '2021-08-16 10:48:56', '2021-08-16 10:48:56'),
(19, 1, 11, '16/08/2021', 1, '2021-08-16 10:48:56', '2021-08-16 10:48:56'),
(20, 1, 3, '17/08/2021', 1, '2021-08-16 20:30:23', '2021-08-16 20:30:23'),
(21, 1, 11, '17/08/2021', 0, '2021-08-16 20:30:23', '2021-08-16 20:30:23'),
(22, 1, 3, '18/08/2021', 0, '2021-08-18 10:38:56', '2021-08-18 10:38:56'),
(23, 1, 11, '18/08/2021', 1, '2021-08-18 10:38:56', '2021-08-18 10:38:56'),
(24, 6, 13, '02/09/2021', 1, '2021-09-02 06:25:52', '2021-09-02 06:25:52'),
(25, 6, 13, '04/09/2021', 1, '2021-09-04 11:09:31', '2021-09-04 11:09:31'),
(26, 6, 13, '08/09/2021', 1, '2021-09-08 10:30:41', '2021-09-08 10:30:41'),
(27, 6, 15, '08/09/2021', 0, '2021-09-08 10:30:41', '2021-09-08 10:30:41'),
(28, 6, 13, '12/09/2021', 0, '2021-09-12 06:47:47', '2021-09-12 06:47:47'),
(29, 6, 15, '12/09/2021', 1, '2021-09-12 06:47:47', '2021-09-12 06:47:47'),
(30, 6, 16, '12/09/2021', 1, '2021-09-12 06:47:47', '2021-09-12 06:47:47'),
(31, 6, 17, '12/09/2021', 1, '2021-09-12 06:47:47', '2021-09-12 06:47:47'),
(32, 6, 18, '12/09/2021', 1, '2021-09-12 06:47:47', '2021-09-12 06:47:47'),
(34, 6, 13, '19/09/2021', 0, '2021-09-19 04:59:09', '2021-09-19 04:59:09'),
(35, 6, 15, '19/09/2021', 1, '2021-09-19 04:59:09', '2021-09-19 04:59:09'),
(36, 6, 16, '19/09/2021', 1, '2021-09-19 04:59:09', '2021-09-19 04:59:09'),
(37, 6, 17, '19/09/2021', 1, '2021-09-19 04:59:09', '2021-09-19 04:59:09'),
(38, 6, 18, '19/09/2021', 1, '2021-09-19 04:59:09', '2021-09-19 04:59:09');

-- --------------------------------------------------------

--
-- Table structure for table `bankbranches`
--

CREATE TABLE `bankbranches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `branch_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bankbranches`
--

INSERT INTO `bankbranches` (`id`, `branch_name`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', '2021-09-08 05:40:56', '2021-09-08 05:40:56');

-- --------------------------------------------------------

--
-- Table structure for table `banknames`
--

CREATE TABLE `banknames` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banknames`
--

INSERT INTO `banknames` (`id`, `bank_name`, `created_at`, `updated_at`) VALUES
(2, 'AB Bank', '2021-09-04 00:10:15', '2021-09-04 00:42:40');

-- --------------------------------------------------------

--
-- Table structure for table `banksetups`
--

CREATE TABLE `banksetups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bank_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `account_number` int(11) NOT NULL,
  `reg_no` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banksetups`
--

INSERT INTO `banksetups` (`id`, `bank_id`, `branch_id`, `account_number`, `reg_no`, `amount`, `created_at`, `updated_at`) VALUES
(2, 2, 1, 3456789, 2345678, 20567, '2021-09-08 23:04:18', '2021-09-08 23:04:18');

-- --------------------------------------------------------

--
-- Table structure for table `booksetups`
--

CREATE TABLE `booksetups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `writer_name` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publisher_name` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booksetups`
--

INSERT INTO `booksetups` (`id`, `book_name`, `writer_name`, `publisher_name`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Java', 'Rayhan', 'jk publication', '500', '2021-09-07 00:21:21', '2021-09-07 00:21:21');

-- --------------------------------------------------------

--
-- Table structure for table `borrowingbooks`
--

CREATE TABLE `borrowingbooks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `submission_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `borrowingbooks`
--

INSERT INTO `borrowingbooks` (`id`, `student_id`, `book_id`, `date`, `submission_date`, `status`, `created_at`, `updated_at`) VALUES
(1, 10, 1, '2021-09-03', '2021-09-10', 1, '2021-09-03 14:45:32', '2021-09-03 12:12:46'),
(2, 11, 1, '2021-09-03', '2021-09-10', 1, '2021-09-03 17:14:21', '2021-09-04 04:49:40'),
(3, 11, 1, '2021-09-08', '2021-09-16', 0, '2021-09-08 11:10:57', '2021-09-08 11:10:57');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `branch_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `branch_name`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', '2021-09-20 00:39:19', '2021-09-20 00:39:19');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Web Design', '2021-07-15 04:54:31', '2021-07-15 04:54:31'),
(3, 'Web Development', '2021-07-15 04:54:38', '2021-07-15 04:54:38'),
(5, 'graphic design', '2021-08-02 00:05:49', '2021-08-02 00:05:49'),
(6, 'Digital Marketing', '2021-08-07 04:48:33', '2021-08-07 04:48:33'),
(7, 'office programm', '2021-08-18 04:34:58', '2021-08-18 04:34:58'),
(8, 'architect', '2021-09-18 22:50:01', '2021-09-18 22:50:01');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `branch_id` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_fee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `starting_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_teacher` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `money_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `branch_id`, `category_id`, `course_name`, `course_fee`, `discount`, `starting_date`, `course_teacher`, `status`, `money_status`, `created_at`, `updated_at`) VALUES
(1, '2', '2', 'Web Development-248', '10000', '50', '10 July', 'Parvez Rohman', 1, 0, '2021-07-15 04:55:08', '2021-09-04 04:36:19'),
(6, '2', '1', 'Web Design-248', '10000', '50', '20 agust', '1', 1, 1, '2021-08-22 04:32:49', '2021-08-22 04:32:49');

-- --------------------------------------------------------

--
-- Table structure for table `deposits`
--

CREATE TABLE `deposits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bank_account` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deposits`
--

INSERT INTO `deposits` (`id`, `bank_account`, `amount`, `date`, `created_at`, `updated_at`) VALUES
(1, 2, 567, '2021-09-11', '2021-09-10 23:07:43', '2021-09-10 23:07:43');

-- --------------------------------------------------------

--
-- Table structure for table `earningnames`
--

CREATE TABLE `earningnames` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `earning_name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `earningnames`
--

INSERT INTO `earningnames` (`id`, `earning_name`, `created_at`, `updated_at`) VALUES
(1, 'Software Development', '2021-08-07 02:51:23', '2021-08-07 02:51:23'),
(2, 'web design', '2021-08-07 05:08:20', '2021-08-07 05:08:20'),
(3, 'Student Fee', '2021-08-10 22:58:00', '2021-08-10 22:58:00');

-- --------------------------------------------------------

--
-- Table structure for table `earnings`
--

CREATE TABLE `earnings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `earning_name_id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `amount` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `earnings`
--

INSERT INTO `earnings` (`id`, `created_at`, `updated_at`, `earning_name_id`, `student_id`, `course_id`, `amount`, `remarks`, `date`) VALUES
(1, '2021-08-07 03:59:35', '2021-08-07 03:59:35', 1, NULL, NULL, '10000', 'sell', '2021-08-06'),
(2, '2021-08-07 05:09:22', '2021-08-07 05:09:22', 2, NULL, NULL, '20000', 'sumon', '2021-08-28'),
(11, NULL, NULL, 3, 3, 1, '2000', 'Student payment', '2021-08-21'),
(12, NULL, NULL, 3, 3, 1, '200', NULL, '2021-08-21'),
(13, NULL, NULL, 3, 3, 1, '2800', NULL, '2021-08-23'),
(14, NULL, NULL, 3, 13, 6, '2000', 'Student payment', '2021-09-01'),
(15, NULL, NULL, 3, 15, 6, '2000', 'Student payment', '2021-09-06'),
(16, NULL, NULL, 3, 16, 6, '2000', 'Student payment', '2021-09-12'),
(17, NULL, NULL, 3, 17, 6, '2000', 'Student payment', '2021-09-12'),
(18, NULL, NULL, 3, 18, 6, '1000', 'Student payment', '2021-09-12');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `branch_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` int(11) DEFAULT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `joining_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `f_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `certificate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `r_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `r_nid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_status` int(11) DEFAULT NULL,
  `balance` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `branch_id`, `name`, `email`, `address`, `designation`, `salary`, `number`, `joining_date`, `f_name`, `m_name`, `image`, `nid`, `certificate`, `r_name`, `r_nid`, `payment_status`, `balance`, `created_at`, `updated_at`) VALUES
(1, 2, 'Rayhan', 'rayhan@gmail.com', 'Feni', 'Jr.Programmer', NULL, '+880 16 8468 5443‬', '2021-07-01', 'karim', 'janina', 'public/backend/employeeimage/1626605389.jpg', NULL, NULL, 'ghjkl', NULL, NULL, NULL, NULL, NULL),
(2, 2, 'Rayhan', 'rayhan@gmail.com', 'Feni', 'Jr.Programmer', NULL, '+880 16 8468 5443‬', '2021-07-01', 'karim', 'janina', 'public/backend/employeeimage/1626605414.jpg', NULL, NULL, 'ghjkl', NULL, NULL, NULL, NULL, NULL),
(3, 2, 'Parvez Rohman', 'parvezrohmanfci@gmail.com', 'Feni', 'Jr.Programmer', NULL, '9878099', '2021-08-21', 'Shamim Uddin', 'Rehna Akter', 'public/backend/employeeimage/1629543421.jpg', NULL, NULL, 'Rayhan', NULL, 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `expensenames`
--

CREATE TABLE `expensenames` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `expensename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expensenames`
--

INSERT INTO `expensenames` (`id`, `expensename`, `created_at`, `updated_at`) VALUES
(1, 'Employee Salary', '2021-07-19 03:30:05', '2021-07-19 03:30:05'),
(2, 'Student', '2021-07-26 00:49:06', '2021-07-26 00:49:06'),
(3, 'Home Coast', '2021-08-07 05:06:22', '2021-08-07 05:06:22'),
(4, 'test', '2021-09-08 04:34:07', '2021-09-08 04:34:07');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `expense_name` int(11) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `expense_name`, `employee_id`, `course_id`, `amount`, `remarks`, `date`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, 10000, 'Monthly Salary', '2021-07-26', '2021-07-26 01:02:23', '2021-07-26 01:02:23'),
(2, 3, NULL, NULL, 1000, 'sumon', '2021-08-18', '2021-08-07 05:07:42', '2021-08-07 05:07:42'),
(3, 1, 3, 1, 2000, 'Monthly Salary', '2021-08-23', '2021-08-23 04:12:38', '2021-08-23 04:12:38');

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
(6, '2021_03_24_155404_create_questions_table', 3),
(7, '2021_07_05_072028_create_categories_table', 4),
(8, '2021_07_05_083835_create_courses_table', 4),
(9, '2021_07_06_092025_create_students_table', 4),
(10, '2021_07_06_092105_create_payments_table', 4),
(11, '2021_07_10_053017_create_employees_table', 4),
(12, '2021_07_10_054415_create_settings_table', 4),
(13, '2021_07_14_100010_create_studentworks_table', 4),
(14, '2021_07_19_064626_create_expensenames_table', 5),
(15, '2021_07_19_094457_create_expenses_table', 6),
(16, '2021_07_26_093426_create_attendances_table', 7),
(17, '2021_08_07_060524_create_earnings_table', 8),
(18, '2021_08_07_062452_create_earningnames_table', 8),
(19, '2021_08_23_051642_create_payment_history_table', 9),
(20, '2021_09_02_071743_create_borrowingbooks_table', 10),
(21, '2021_09_04_052650_create_banknames_table', 11),
(22, '2021_09_04_071129_create_banksetups_table', 12),
(23, '2021_09_06_085632_create_booksetups_table', 13),
(24, '2021_09_08_053132_create_bankbranches_table', 14),
(25, '2021_09_09_043118_create_deposits_table', 15),
(26, '2021_09_11_083955_create_shiftbatches_table', 16),
(27, '2021_09_12_052249_create_shiftbatchattandances_table', 17),
(28, '2021_09_20_060002_create_branches_table', 18);

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `batch_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `student_id`, `batch_id`, `amount`, `date`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 0, '17/07/2021', NULL, NULL),
(2, 4, 1, 0, '28/07/2021', NULL, NULL),
(3, 4, 1, 0, '28/07/2021', NULL, NULL),
(4, 4, 1, 3000, '28/07/2021', NULL, NULL),
(5, 4, 1, 3000, '05/08/2021', NULL, NULL),
(6, 8, 3, 299, '07/08/2021', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payment_history`
--

CREATE TABLE `payment_history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `payment` int(11) NOT NULL,
  `date` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_history`
--

INSERT INTO `payment_history` (`id`, `employee_id`, `course_id`, `payment`, `date`, `created_at`, `updated_at`) VALUES
(2, 3, 1, 2000, '2021-08-23', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `company_name`, `email`, `phone`, `address`, `logo`, `favicon`, `created_at`, `updated_at`) VALUES
(1, 'Twoinsoft Technology', 'twoinsoft@gmail.com', '01939366814', '322,Sha-Alam tower feni 5th Floor', 'public/backend/img/logo/1626345941.png', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shiftbatchattandances`
--

CREATE TABLE `shiftbatchattandances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attendance` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shiftbatches`
--

CREATE TABLE `shiftbatches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `branch_id` int(11) NOT NULL,
  `batch_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shiftbatches`
--

INSERT INTO `shiftbatches` (`id`, `branch_id`, `batch_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'Web Design-248,290,230', 0, '2021-09-11 23:09:08', '2021-09-11 23:09:08');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `batch_id` int(11) DEFAULT NULL,
  `date` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fathers_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fathers_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mothers_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_id` int(11) NOT NULL,
  `shift_batch_id` int(11) DEFAULT NULL,
  `education` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b_group` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nid` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `certificate` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fee` int(11) DEFAULT NULL,
  `special_discount` int(11) DEFAULT NULL,
  `next_payment_date` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `due` int(11) DEFAULT NULL,
  `due_status` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_id`, `branch_id`, `batch_id`, `date`, `name`, `email`, `number`, `address`, `fathers_name`, `fathers_number`, `mothers_name`, `image`, `course_id`, `shift_batch_id`, `education`, `session`, `b_group`, `nid`, `certificate`, `fee`, `special_discount`, `next_payment_date`, `due`, `due_status`, `status`, `created_at`, `updated_at`) VALUES
(10, 3, 2, 1, '', 'Jibon Sohidul', 'jibon@gmail.com', '880 16 8468 5443‬', 'Kallanpur', 'Kabir', NULL, 'Bokul', 'public/backend/student_image/1629522014.png', 1, 1, 'SSC', '16-17', 'A+', NULL, NULL, 5000, NULL, '2021-08-23', 0, 1, 1, NULL, NULL),
(11, 13, 2, 6, '', 'Agent', 'agent@gmail.com', '45678', 'Kallanpur', 'Shamim Uddin', NULL, 'Rehana Akter', 'public/backend/student_image/1630476365.png', 6, NULL, 'SSC', '16-17', 'A+', NULL, NULL, 5000, NULL, '2021-09-02', 3000, 0, 1, NULL, NULL),
(13, 15, 2, 6, '2021-09-06', 'atik', 'atik@gmail.com', '9878099', 'Kallanpur', 'Karim', NULL, 'Bokul', NULL, 6, NULL, 'SSC', '16-17', 'A+', NULL, NULL, 5000, NULL, '2021-09-08', 3000, 0, 1, NULL, NULL),
(14, 16, 2, 6, '2021-09-12', 'abul', 'abul@gmail.com', '9878099', 'Kallanpur', 'Kabir', NULL, 'Bokul', NULL, 6, NULL, 'SSC', '16-17', 'A+', NULL, NULL, 5000, NULL, '2021-09-14', 3000, 0, 1, NULL, NULL),
(15, 17, 2, 6, '2021-09-12', 'Agent', 'agent@gmail.com', '0194566544', 'Kallanpur', 'kalam', NULL, 'Karima', NULL, 6, NULL, 'SSC', '16-17', 'A+', NULL, NULL, 5000, NULL, '2021-09-16', 3000, 0, 1, NULL, NULL),
(16, 18, 2, 6, '2021-09-12', 'vladimir putin', 'vladimurputin@gmail.com', '9878099', 'Kallanpur', 'kalam', NULL, 'Bokul', NULL, 6, NULL, 'SSC', '16-17', 'A+', NULL, NULL, 5000, NULL, '2021-09-15', 4000, 0, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `studentworks`
--

CREATE TABLE `studentworks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_no` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipfile` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `studentworks`
--

INSERT INTO `studentworks` (`id`, `user_id`, `student_id`, `date`, `date_time`, `class_no`, `work`, `video`, `zipfile`, `created_at`, `updated_at`) VALUES
(2, 3, 3, '17/07/2021', '17/07/2021 11:42:48 am', NULL, 'public/backend/studentworkimage/1626500568.jpg', 'public/backend/studentworkvideo/1626500568.mp4', 'public/backend/studentworkzipfile/1626500568.zip', NULL, NULL);

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
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bankbranches`
--
ALTER TABLE `bankbranches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banknames`
--
ALTER TABLE `banknames`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banksetups`
--
ALTER TABLE `banksetups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booksetups`
--
ALTER TABLE `booksetups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `borrowingbooks`
--
ALTER TABLE `borrowingbooks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposits`
--
ALTER TABLE `deposits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `earningnames`
--
ALTER TABLE `earningnames`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `earnings`
--
ALTER TABLE `earnings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expensenames`
--
ALTER TABLE `expensenames`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
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
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_history`
--
ALTER TABLE `payment_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shiftbatchattandances`
--
ALTER TABLE `shiftbatchattandances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shiftbatches`
--
ALTER TABLE `shiftbatches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentworks`
--
ALTER TABLE `studentworks`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `bankbranches`
--
ALTER TABLE `bankbranches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banknames`
--
ALTER TABLE `banknames`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banksetups`
--
ALTER TABLE `banksetups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `booksetups`
--
ALTER TABLE `booksetups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `borrowingbooks`
--
ALTER TABLE `borrowingbooks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `deposits`
--
ALTER TABLE `deposits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `earningnames`
--
ALTER TABLE `earningnames`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `earnings`
--
ALTER TABLE `earnings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `expensenames`
--
ALTER TABLE `expensenames`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payment_history`
--
ALTER TABLE `payment_history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shiftbatchattandances`
--
ALTER TABLE `shiftbatchattandances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shiftbatches`
--
ALTER TABLE `shiftbatches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `studentworks`
--
ALTER TABLE `studentworks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
