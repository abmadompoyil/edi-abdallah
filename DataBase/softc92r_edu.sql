-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 18, 2021 at 10:42 AM
-- Server version: 5.7.23-23
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `softc92r_edu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`, `img`, `role`, `name`, `created_at`, `updated_at`) VALUES
(1, 'mojahed@gmail.com', '$2y$10$ggAtr3NVdvbyJeUVrKObjec8.gBsewn9DZo9ayP63zx0rGgMzIb.G', '', 1, 'Amjad', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `sender_type` int(11) NOT NULL,
  `job_id` int(11) DEFAULT NULL,
  `consult_id` int(11) DEFAULT NULL,
  `sender_id` int(11) NOT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('pending','accept','canceled','completed') COLLATE utf8_unicode_ci DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `sender_type`, `job_id`, `consult_id`, `sender_id`, `note`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 1, NULL, 10, 'POST POSTPOST', 'pending', '2021-04-26 17:34:58', '2021-04-26 17:34:58'),
(2, 2, 5, NULL, 10, 'asdasdasdasd', 'pending', '2021-04-27 02:17:02', '2021-04-27 02:17:02'),
(3, 2, 5, NULL, 10, 'asdasdasdasdasd', 'pending', '2021-04-27 02:20:15', '2021-04-27 02:20:15'),
(4, 2, 0, 1, 10, 'Hi there asdasd', 'pending', '2021-04-27 00:25:55', '2021-04-27 03:24:54'),
(5, 2, NULL, 1, 10, 'asdasdasdasd', 'pending', '2021-04-27 03:28:59', '2021-04-27 03:28:59'),
(6, 2, 3, NULL, 10, 'Hi Management', 'pending', '2021-04-27 03:33:31', '2021-04-27 03:33:31'),
(7, 2, 3, NULL, 12, 'Hi school ?', 'pending', '2021-04-27 13:44:38', '2021-04-27 13:44:38'),
(8, 2, 3, NULL, 12, 'This meeting is canceled', 'canceled', '2021-04-27 14:05:54', '2021-04-27 14:05:54'),
(9, 2, NULL, 1, 12, 'Hi u how r u ?!', 'pending', '2021-04-27 14:34:08', '2021-04-27 14:34:08'),
(10, 2, NULL, 1, 12, 'AseAseAseAse', 'pending', '2021-04-27 14:37:04', '2021-04-27 14:37:04'),
(11, 1, 5, NULL, 9, 'asdasdasdasdasd', 'pending', '2021-04-27 17:15:58', '2021-04-27 17:15:58'),
(12, 1, 5, NULL, 9, 'Hiasdasdasd', 'pending', '2021-04-27 17:52:03', '2021-04-27 17:52:03'),
(13, 1, 6, NULL, 12, 'A good asdasd', 'accept', '2021-04-28 14:29:36', '2021-04-28 14:29:36'),
(14, 1, 7, NULL, 12, 'Hello hi youwe', 'accept', '2021-04-29 15:38:14', '2021-04-29 15:38:14'),
(15, 1, 7, NULL, 12, 'asdasdasdasdasdasdasdasd', 'accept', '2021-04-29 15:38:48', '2021-04-29 15:38:48'),
(16, 1, 7, NULL, 12, 'asdasdasdasd', 'accept', '2021-04-29 15:39:11', '2021-04-29 15:39:11'),
(17, 1, 7, NULL, 12, 'asdasdasdasd', 'accept', '2021-04-29 15:39:16', '2021-04-29 15:39:16'),
(18, 1, 7, NULL, 12, 'asdasdasdasd', 'accept', '2021-04-29 15:40:36', '2021-04-29 15:40:36'),
(19, 2, 7, NULL, 10, 'Hi how r u ?!', 'accept', '2021-04-29 16:25:51', '2021-04-29 16:25:51'),
(20, 2, 7, NULL, 10, 'asdasda;sld;alskdasd', 'accept', '2021-04-29 16:28:55', '2021-04-29 16:28:55'),
(21, 2, 3, NULL, 10, 'asdasdasdasdasd', 'canceled', '2021-04-29 16:38:04', '2021-04-29 16:38:04'),
(22, 2, 3, NULL, 10, 'asdasdasdasd', 'canceled', '2021-04-29 16:38:15', '2021-04-29 16:38:15'),
(23, 2, 3, NULL, 10, '123123123asdasd', 'canceled', '2021-04-29 16:39:20', '2021-04-29 16:39:20'),
(24, 2, 3, NULL, 10, 'asdasdasdasdasd', 'canceled', '2021-04-29 16:40:10', '2021-04-29 16:40:10'),
(25, 2, 3, NULL, 10, 'asdasdasdasdasdasdasd', 'canceled', '2021-04-29 16:40:40', '2021-04-29 16:40:40'),
(26, 2, 3, NULL, 10, 'asdasdasdasdasdasdasd', 'canceled', '2021-04-29 16:40:54', '2021-04-29 16:40:54'),
(27, 2, 3, NULL, 10, 'asdasdasd123123123123', 'canceled', '2021-04-29 16:43:10', '2021-04-29 16:43:10'),
(28, 2, 3, NULL, 10, 'asdasdasdasdasdasd', 'canceled', '2021-04-29 16:44:57', '2021-04-29 16:44:57'),
(29, 2, 3, NULL, 10, 'asdasdasdasdasdasd', 'canceled', '2021-04-29 16:45:34', '2021-04-29 16:45:34'),
(30, 2, 2, NULL, 9, 'asdasdasdasd', 'pending', '2021-04-29 16:58:58', '2021-04-29 16:58:58'),
(31, 2, 8, NULL, 10, 'Hi there mangent', 'pending', '2021-04-30 19:10:31', '2021-04-30 19:10:31'),
(32, 1, 8, NULL, 12, 'Hi we asdasdasdasdasd', 'accept', '2021-04-30 19:14:17', '2021-04-30 19:14:17'),
(33, 1, 8, NULL, 12, 'Hi we asdasdasdasdasd', 'accept', '2021-04-30 19:14:35', '2021-04-30 19:14:35'),
(34, 1, 9, NULL, 12, 'asdasdasdasdasdasdasd', 'accept', '2021-04-30 20:33:34', '2021-04-30 20:33:34'),
(35, 1, 10, NULL, 12, 'Experience in international programs (optional)', 'accept', '2021-04-30 20:49:24', '2021-04-30 20:49:24'),
(36, 2, 10, NULL, 10, 'Experience in international programs (optional)\r\nasd', 'accept', '2021-04-30 20:49:51', '2021-04-30 20:49:51'),
(37, 1, 11, NULL, 12, 'kkkkkkkkkkkkkkkkk', 'accept', '2021-05-01 14:22:11', '2021-05-01 14:22:11'),
(38, 1, 11, NULL, 12, 'kkkkkkkkkkkkkkkkk', 'accept', '2021-05-01 14:22:11', '2021-05-01 14:22:11'),
(39, 1, 11, NULL, 12, 'jjjjjjjjjjjjjjjjjjjhhhhhhhhhhh', 'accept', '2021-05-01 14:26:06', '2021-05-01 14:26:06'),
(40, 1, 11, NULL, 12, 'jjjjjjjjjjjjjjjjjjjhhhhhhhhhhh', 'accept', '2021-05-01 14:26:06', '2021-05-01 14:26:06'),
(41, 1, 11, NULL, 12, 'حححححححححححححححححححححححححححححححححححححححححح', 'accept', '2021-05-01 14:32:42', '2021-05-01 14:32:42'),
(42, 1, 11, NULL, 12, 'حححححححححححححححححححححححححححححححححححححححححح', 'accept', '2021-05-01 14:32:42', '2021-05-01 14:32:42'),
(43, 1, 11, NULL, 12, 'شسيشسيشسيشسيشسي', 'pending', '2021-05-01 14:43:56', '2021-05-01 14:43:56'),
(44, 1, 11, NULL, 12, 'شسيشسيشسيشسيشسي', 'pending', '2021-05-01 14:43:56', '2021-05-01 14:43:56'),
(45, 1, 11, NULL, 12, 'asdasdasdasd', 'pending', '2021-05-01 14:45:26', '2021-05-01 14:45:26'),
(46, 1, 11, NULL, 12, 'asdasdasdasd', 'pending', '2021-05-01 14:45:26', '2021-05-01 14:45:26'),
(47, 1, 11, NULL, 12, 'شسيشسيشسيشسيشسي', 'pending', '2021-05-01 14:46:50', '2021-05-01 14:46:50'),
(48, 2, 13, NULL, 10, 'asdasdasdasdasdasd', 'pending', '2021-05-01 15:03:58', '2021-05-01 15:03:58'),
(49, 2, 11, NULL, 10, 'جزاكم الله خيرا', 'pending', '2021-05-01 15:08:56', '2021-05-01 15:08:56'),
(50, 1, 11, NULL, 12, 'sadasdasdas asda sd asd', 'accept', '2021-05-01 15:33:36', '2021-05-01 15:33:36'),
(51, 1, 5, NULL, 12, 'asdasdasdasdasdasdasd', 'pending', '2021-05-01 15:40:20', '2021-05-01 15:40:20'),
(52, 1, 5, NULL, 12, 'asdasdasdasd', 'accept', '2021-05-01 15:42:10', '2021-05-01 15:42:10'),
(53, 1, 14, NULL, 12, 'اهلا و سهلا بههههههههههههههههههههههههه', 'accept', '2021-05-01 17:14:02', '2021-05-01 17:14:02'),
(54, 1, NULL, 5, 12, 'باذن الله وضعكم ممتاز وتوكلوا على الحي الذي يلا يموت', 'accept', '2021-05-01 17:16:18', '2021-05-01 17:16:18'),
(55, 2, NULL, 5, 10, 'بس لازم تتصلوا فينا الان و الا مش عارفين انو الان', 'accept', '2021-05-01 17:17:14', '2021-05-01 17:17:14'),
(56, 2, NULL, 5, 10, 'بس لازم تتصلوا فينا الان و الا مش عارفين انو الان', 'accept', '2021-05-01 17:17:28', '2021-05-01 17:17:28'),
(57, 1, 16, NULL, 12, 'اححححححححححححححححححححححححححححححححسنتم', 'accept', '2021-05-01 17:20:12', '2021-05-01 17:20:12'),
(58, 1, 16, NULL, 13, 'اححححححححححححححححححححححححححححححححسنتم', 'accept', '2021-05-01 17:21:28', '2021-05-01 17:21:28'),
(59, 2, NULL, 5, 10, 'مرحبامرحبامرحبا', 'accept', '2021-05-01 17:22:35', '2021-05-01 17:22:35'),
(60, 2, NULL, 5, 10, 'مرحبامرحبامرحبا', 'accept', '2021-05-01 17:23:10', '2021-05-01 17:23:10'),
(61, 2, NULL, 5, 10, 'asdasdasdasd', 'accept', '2021-05-01 17:24:54', '2021-05-01 17:24:54'),
(62, 1, NULL, 5, 12, 'يا جماعه باذن الله ح ننننننننننننننننننننننننننننننن', 'accept', '2021-05-01 17:28:09', '2021-05-01 17:28:09'),
(63, 1, 13, NULL, 12, 'asdasdasdasd', 'pending', '2021-05-01 17:31:52', '2021-05-01 17:31:52'),
(64, 1, 13, NULL, 12, 'asdasasdasdasdasd', 'accept', '2021-05-01 17:35:19', '2021-05-01 17:35:19'),
(65, 1, 13, NULL, 12, 'asdasdasdasd', 'completed', '2021-05-01 17:38:36', '2021-05-01 17:38:36'),
(66, 2, 14, NULL, 13, 'لللللللللللللللللللللللللللللللللللللللللللللللللللللللل', 'accept', '2021-05-01 21:50:54', '2021-05-01 21:50:54'),
(67, 1, NULL, 5, 13, 'اااااااااااااااااااااااااااااااااااااااااااااا', 'completed', '2021-05-01 22:00:22', '2021-05-01 22:00:22'),
(68, 1, NULL, 5, 13, 'اااااااااااااااااااااااااااااااااااااااااااااا', 'completed', '2021-05-01 22:00:22', '2021-05-01 22:00:22'),
(69, 2, 17, NULL, 9, 'قبتم اعتماد موعد المقابلة', 'pending', '2021-05-01 22:21:07', '2021-05-01 22:21:07'),
(70, 2, 17, NULL, 9, 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', 'pending', '2021-05-01 22:27:29', '2021-05-01 22:27:29'),
(71, 2, 17, NULL, 9, 'jjjjjjjjjjjjjjjjjjjjjjjj', 'pending', '2021-05-01 22:27:46', '2021-05-01 22:27:46'),
(72, 2, 17, NULL, 9, 'ffffffffffffffffffffffffffffff', 'pending', '2021-05-01 22:28:34', '2021-05-01 22:28:34'),
(73, 2, 17, NULL, 9, 'kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk', 'pending', '2021-05-01 22:31:47', '2021-05-01 22:31:47'),
(74, 1, NULL, 4, 12, 'Consult Detials : Experience in international programs (optional)', 'accept', '2021-05-01 22:39:41', '2021-05-01 22:39:41'),
(75, 1, NULL, 4, 12, 'sdsdsdsdsdsdsdsdsssd', 'accept', '2021-05-01 22:40:30', '2021-05-01 22:40:30'),
(76, 1, NULL, 3, 12, 'Consult Detials : Experience in international programs (optional)', 'accept', '2021-05-01 22:40:52', '2021-05-01 22:40:52'),
(77, 1, NULL, 3, 13, 'اللللللللللللللللللللللللللوووووووووووووووووووووو', 'pending', '2021-05-05 17:34:23', '2021-05-05 17:34:23'),
(78, 1, NULL, 3, 13, 'اللللللللللللللللللللللللللوووووووووووووووووووووو', 'pending', '2021-05-05 17:34:23', '2021-05-05 17:34:23'),
(79, 1, 17, NULL, 12, 'ممتاااااااااااااااااااااز', 'accept', '2021-05-05 17:38:05', '2021-05-05 17:38:05'),
(80, 2, 17, NULL, 13, 'ننااا  ممممممممممممممممممممم', 'accept', '2021-05-08 22:57:20', '2021-05-08 22:57:20'),
(81, 1, 20, NULL, 12, 'احسسسسسسسسسسسسسسسسسسنت', 'accept', '2021-05-22 01:54:15', '2021-05-22 01:54:15'),
(82, 2, 20, NULL, 13, 'رائع يا رااااااااااااائع', 'accept', '2021-05-22 01:56:52', '2021-05-22 01:56:52'),
(83, 2, 22, NULL, 9, 'asdasdasd asd', 'pending', '2021-05-23 16:18:25', '2021-05-23 16:18:25'),
(84, 2, 22, NULL, 9, 'BachelorBachelorBachelorBachelor', 'pending', '2021-05-23 17:14:29', '2021-05-23 17:14:29'),
(85, 1, 22, NULL, 12, 'asdasdasdasd', 'completed', '2021-05-23 17:21:39', '2021-05-23 17:21:39'),
(86, 2, 20, NULL, 13, 'ةةةةةةةةةةةةةةةةةةةةةةةةةةة', 'accept', '2021-05-23 20:01:24', '2021-05-23 20:01:24'),
(87, 2, 26, NULL, 13, 'mmmmmmmmmmmmmmmmmmmmmm', 'pending', '2021-05-25 21:34:24', '2021-05-25 21:34:24'),
(88, 2, 26, NULL, 13, 'mmmmmmmmmmmmmmmmmm', 'completed', '2021-05-25 21:36:58', '2021-05-25 21:36:58'),
(89, 2, 31, NULL, 13, 'approved', 'pending', '2021-06-01 21:17:37', '2021-06-01 21:17:37'),
(90, 2, 31, NULL, 13, 'تمت الموافقة على المرشح', 'accept', '2021-06-01 21:20:21', '2021-06-01 21:20:21'),
(91, 2, 32, NULL, 13, 'تمت الموافقة لإجراء المقابلة', 'pending', '2021-06-01 21:42:18', '2021-06-01 21:42:18'),
(92, 2, 36, NULL, 10, 'تمت الموافقة على الطلب', 'pending', '2021-06-06 14:37:25', '2021-06-06 14:37:25'),
(93, 2, 37, NULL, 13, 'تمت الموافقة على المقابلة يوم الاربعاء', 'pending', '2021-06-06 14:44:49', '2021-06-06 14:44:49');

-- --------------------------------------------------------

--
-- Table structure for table `consult`
--

CREATE TABLE `consult` (
  `id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `supervisor_id` int(11) DEFAULT NULL,
  `consult` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('pending','accept','canceled','completed') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `consult`
--

INSERT INTO `consult` (`id`, `school_id`, `supervisor_id`, `consult`, `status`, `created_at`, `updated_at`) VALUES
(1, 10, NULL, 'Hello i need a new teacher but i don\'t have any one , can u seggest teacher', 'pending', '2021-04-27 02:56:36', '2021-04-27 02:56:36'),
(2, 10, NULL, 'asdasdasdasdasdasdasd', 'pending', '2021-04-27 16:06:13', '2021-04-27 16:06:13'),
(3, 10, 12, 'Experience in international programs (optional)', 'pending', '2021-05-05 14:34:23', '2021-05-05 17:34:23'),
(4, 10, 12, 'Experience in international programs (optional)', 'accept', '2021-05-01 19:39:41', '2021-05-01 22:39:41'),
(5, 10, NULL, 'بدي استشارة يا ناس وينكم يا هو', 'completed', '2021-05-01 19:00:22', '2021-05-01 22:00:22');

-- --------------------------------------------------------

--
-- Table structure for table `date`
--

CREATE TABLE `date` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `start` time NOT NULL,
  `end` time NOT NULL,
  `is_book` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `date`
--

INSERT INTO `date` (`id`, `date`, `start`, `end`, `is_book`, `created_at`, `updated_at`) VALUES
(2, '2021-04-27', '00:08:00', '00:10:00', 1, '2021-04-26 12:58:15', '2021-04-26 15:58:15'),
(3, '2021-04-27', '00:08:00', '00:10:00', 1, '2021-04-26 14:58:42', '2021-04-26 17:58:42'),
(4, '2021-04-28', '00:08:00', '00:09:00', 1, '2021-04-27 13:18:34', '2021-04-27 16:18:34'),
(5, '2021-04-27', '00:10:00', '00:11:00', 1, '2021-04-26 21:43:47', '2021-04-27 00:43:47'),
(6, '2021-04-27', '00:12:00', '00:13:00', 1, '2021-05-01 11:20:43', '2021-05-01 14:20:43'),
(7, '2021-04-30', '00:08:00', '00:09:00', 1, '2021-05-01 12:01:05', '2021-05-01 15:01:05'),
(8, '2021-05-01', '00:09:00', '00:10:00', 1, '2021-04-30 17:48:27', '2021-04-30 20:48:27'),
(10, '2021-05-02', '00:11:00', '00:12:00', 1, '2021-04-30 16:09:15', '2021-04-30 19:09:15'),
(11, '2021-05-03', '09:00:00', '11:00:00', 1, '2021-04-30 17:32:35', '2021-04-30 20:32:35'),
(12, '2021-05-02', '08:00:00', '12:00:00', 1, '2021-05-01 14:11:34', '2021-05-01 17:11:34'),
(13, '2021-05-04', '08:00:00', '09:00:00', 1, '2021-05-01 19:17:15', '2021-05-01 22:17:15'),
(14, '2021-05-02', '09:00:00', '10:00:00', 1, '2021-05-23 12:14:03', '2021-05-23 15:14:03'),
(15, '2021-05-03', '12:00:00', '13:00:00', 1, '2021-05-21 22:51:29', '2021-05-22 01:51:29'),
(16, '2021-05-10', '10:00:00', '11:00:00', 1, '2021-05-04 08:50:59', '2021-05-04 11:50:59'),
(17, '2021-05-31', '13:00:00', '14:00:00', 1, '2021-05-23 13:52:43', '2021-05-23 16:52:43'),
(18, '2021-05-24', '09:00:00', '10:00:00', 1, '2021-05-23 14:06:16', '2021-05-23 17:06:16'),
(19, '2021-05-26', '08:00:00', '09:00:00', 1, '2021-05-25 18:31:06', '2021-05-25 21:31:06'),
(20, '2021-05-30', '08:00:00', '09:00:00', 1, '2021-05-27 13:09:05', '2021-05-27 16:09:05'),
(21, '2021-06-02', '08:00:00', '09:00:00', 1, '2021-06-01 18:12:52', '2021-06-01 21:12:52'),
(22, '2021-06-02', '09:00:00', '10:00:00', 1, '2021-06-01 12:55:13', '2021-06-01 15:55:13'),
(23, '2021-06-03', '13:00:00', '14:00:00', 1, '2021-06-01 13:02:15', '2021-06-01 16:02:15'),
(24, '2021-06-03', '10:00:00', '11:00:00', 1, '2021-06-01 18:31:42', '2021-06-01 21:31:42'),
(25, '2021-06-03', '08:00:00', '09:00:00', 1, '2021-06-02 06:28:48', '2021-06-02 09:28:48'),
(26, '2021-06-03', '11:00:00', '12:00:00', 1, '2021-06-04 12:59:56', '2021-06-04 15:59:56'),
(27, '2021-06-07', '08:00:00', '09:00:00', 1, '2021-06-06 11:28:30', '2021-06-06 14:28:30'),
(28, '2021-06-07', '10:00:00', '11:00:00', 1, '2021-06-06 11:42:15', '2021-06-06 14:42:15'),
(29, '2021-06-09', '08:00:00', '09:00:00', 1, '2021-06-08 12:14:21', '2021-06-08 15:14:21'),
(30, '2021-06-09', '12:00:00', '13:00:00', 1, '2021-06-08 11:49:27', '2021-06-08 14:49:27'),
(31, '2021-06-15', '08:00:00', '09:00:00', 1, '2021-06-14 05:02:56', '2021-06-14 08:02:56'),
(32, '2021-06-16', '11:00:00', '12:00:00', 0, '2021-06-14 07:57:28', '2021-06-14 07:57:28'),
(33, '2021-10-20', '10:00:00', '12:00:00', 0, '2021-10-13 16:26:47', '2021-10-13 16:26:47');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `front_most_qouestion`
--

CREATE TABLE `front_most_qouestion` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_id` int(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `front_most_qouestion`
--

INSERT INTO `front_most_qouestion` (`id`, `title`, `title_en`, `sub_title`, `sub_title_en`, `service_id`, `created_at`, `updated_at`) VALUES
(1, 'هل يمكنني تغيير باقتي لاحقاً؟', 'هل يمكنني تغيير باقتي لاحقاً؟', 'نعم يمكنك', 'نعم يمكنك', 1, '2020-11-28 12:45:52', '2020-11-28 12:45:52');

-- --------------------------------------------------------

--
-- Table structure for table `front_page_ar`
--

CREATE TABLE `front_page_ar` (
  `id` int(11) NOT NULL,
  `header_Title` text COLLATE utf8mb4_unicode_ci,
  `header_subTitle` text COLLATE utf8mb4_unicode_ci,
  `header_btn1` text COLLATE utf8mb4_unicode_ci,
  `header_btn2` text COLLATE utf8mb4_unicode_ci,
  `header_btn1_url` text COLLATE utf8mb4_unicode_ci,
  `header_btn2_url` text COLLATE utf8mb4_unicode_ci,
  `icon_1_icon` text COLLATE utf8mb4_unicode_ci,
  `icon_2_icon` text COLLATE utf8mb4_unicode_ci,
  `icon_3_icon` text COLLATE utf8mb4_unicode_ci,
  `icon_4_icon` text COLLATE utf8mb4_unicode_ci,
  `icon_1_icon_fa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'ti-headphone-alt',
  `icon_2_icon_fa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'ti-palette',
  `icon_3_icon_fa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'ti-vector',
  `icon_4_icon_fa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'ti-face-smile  ',
  `icon_1_text` text COLLATE utf8mb4_unicode_ci,
  `icon_2_text` text COLLATE utf8mb4_unicode_ci,
  `icon_3_text` text COLLATE utf8mb4_unicode_ci,
  `icon_4_text` text COLLATE utf8mb4_unicode_ci,
  `section2_title` text COLLATE utf8mb4_unicode_ci,
  `section2_sub_title` text COLLATE utf8mb4_unicode_ci,
  `section2_service_id` int(11) DEFAULT NULL,
  `video_url` text COLLATE utf8mb4_unicode_ci,
  `section3_title` text COLLATE utf8mb4_unicode_ci,
  `section3_sub_title` text COLLATE utf8mb4_unicode_ci,
  `section3_question_id` text COLLATE utf8mb4_unicode_ci,
  `section4_title` text COLLATE utf8mb4_unicode_ci,
  `section4_sub_title` text COLLATE utf8mb4_unicode_ci,
  `section4_btn1_text` text COLLATE utf8mb4_unicode_ci,
  `section4_btn2_text` text COLLATE utf8mb4_unicode_ci,
  `section4_btn1_url` text COLLATE utf8mb4_unicode_ci,
  `section4_btn2_url` text COLLATE utf8mb4_unicode_ci,
  `contact_title` text COLLATE utf8mb4_unicode_ci,
  `contact_sub_title` text COLLATE utf8mb4_unicode_ci,
  `contact_address_title` text COLLATE utf8mb4_unicode_ci,
  `contact_address_sub_title` text COLLATE utf8mb4_unicode_ci,
  `contact_phone` text COLLATE utf8mb4_unicode_ci,
  `contact_email` text COLLATE utf8mb4_unicode_ci,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `snapchat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `front_page_ar`
--

INSERT INTO `front_page_ar` (`id`, `header_Title`, `header_subTitle`, `header_btn1`, `header_btn2`, `header_btn1_url`, `header_btn2_url`, `icon_1_icon`, `icon_2_icon`, `icon_3_icon`, `icon_4_icon`, `icon_1_icon_fa`, `icon_2_icon_fa`, `icon_3_icon_fa`, `icon_4_icon_fa`, `icon_1_text`, `icon_2_text`, `icon_3_text`, `icon_4_text`, `section2_title`, `section2_sub_title`, `section2_service_id`, `video_url`, `section3_title`, `section3_sub_title`, `section3_question_id`, `section4_title`, `section4_sub_title`, `section4_btn1_text`, `section4_btn2_text`, `section4_btn1_url`, `section4_btn2_url`, `contact_title`, `contact_sub_title`, `contact_address_title`, `contact_address_sub_title`, `contact_phone`, `contact_email`, `facebook`, `instagram`, `whatsapp`, `snapchat`, `twitter`, `created_at`, `updated_at`) VALUES
(1, 'Alshshamil| Mediator between you and others', 'A multi-service electronic platform (forestry, tourism, travel, delivery, teaching) which is an intermediary between the user and the customer', 'ِApp store', 'Google play', '#', '#', 'Technical Support', 'Ease of coordination', 'Attractive design', 'Ease of use', 'ti-headphone-alt', 'ti-palette', 'ti-vector', 'ti-face-smile  ', 'And to ensure the quality of the service provided, the technical support team corrects faults before they happen.', 'We offer you an integrated application that allows you to book what you want, track your reservations and pay via the application', 'It allows users to conveniently interact with the application through organized steps.', 'You can easily register and access the required services and their providers closest to your location.', 'Features of the Alshshamil', 'A multi-service electronic platform (forestry, tourism, travel, delivery, teaching) which is an intermediary between the user and the customer', 1, '#', 'common questions', 'We trust you and provide you with solutions to your questions.', '1', 'Get the app now', 'An electronic platform that mediates between you and what you need from cars, cars, delivery and studies', 'Get the app now from the App Store', 'Get the app now from the Google Play Store', '#', '#', 'Contact us ', 'Alshshamil| An intermediate emerging application between you and what you need', 'alsharqia', 'Saudi Arabia, Eastern Province', '0501315653', 'info@galb.com', '#', '#', '#', '#', '#', '2020-11-28 18:32:00', '2020-11-28 13:45:02'),
(2, 'الشامل | وسيط بينك وبين الآخرين\r\n', 'منصة إلكترونية متعددة الخدمات (حراج , سياحة , سفر , توصيل , تدريس ) وهي وسيطة بين المستخدم والعميل\r\n\r\n', 'متجر آبل', 'متجر جوجل بلاي', '#', '#', 'دعم فني', 'سهولة التنسيق', 'تصميم جذاب', 'سهولة الإستخدام', 'ti-headphone-alt', 'ti-palette', 'ti-vector', 'ti-face-smile  ', 'و لضمان جودة الخدمة المقدمة يقوم فريق الدعم الفني تدارك الأعطال قبل وقوعها.', '  نقدم لك تطبيق متكامل يوفر لك حجز  ما تريد ومتابعة حجوزاتك والدفع عبر التطبيق\r\n                                    ', 'يتيح للمستخدمين التعامل مع التطبيق بأريحية عبر خطوات منظمة.', 'بإمكانك التسجيل و الوصول للخدمات المطلوبة و مزوديها الأقرب من موقعك بسهولة.', 'مميزات  الشامل', '   منصة إلكترونية متعددة الخدمات (حراج , سياحة , سفر , توصيل , تدريس ) وهي وسيطة بين المستخدم والعميل  ', 1, '#', 'الأسئلة الشائعة', 'نحن نثق بكم ونقدم لكم حلول على أسئلتكم.', '1', 'احصل على التطبيق الأن', 'منصة    إلكترونية  توسط بينك وبين ما تحتاج من حراج وسيارات وتوصيل وتدرس', 'إحصل على التطبيق الان من متجر App store', 'إحصل على التطبيق الأن من متجر جوجل بلاي', '#', '#', 'إتصل بنا', '\r\n  الشامل | تطبيق ناشئ وسيط بينك وبين ما تحتاج\r\n                                ', 'الشرقية', 'السعودية الشرقية', '0501315653', 'info@galb.com', '#', '#', '#', '#', '#', '2020-11-28 09:21:27', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `front_page_en`
--

CREATE TABLE `front_page_en` (
  `id` int(11) NOT NULL,
  `header_Title` text COLLATE utf8mb4_unicode_ci,
  `header_subTitle` text COLLATE utf8mb4_unicode_ci,
  `header_btn1` text COLLATE utf8mb4_unicode_ci,
  `header_btn2` text COLLATE utf8mb4_unicode_ci,
  `header_btn1_url` text COLLATE utf8mb4_unicode_ci,
  `header_btn2_url` text COLLATE utf8mb4_unicode_ci,
  `icon_1_icon` text COLLATE utf8mb4_unicode_ci,
  `icon_2_icon` text COLLATE utf8mb4_unicode_ci,
  `icon_3_icon` text COLLATE utf8mb4_unicode_ci,
  `icon_4_icon` text COLLATE utf8mb4_unicode_ci,
  `icon_1_text` text COLLATE utf8mb4_unicode_ci,
  `icon_2_text` text COLLATE utf8mb4_unicode_ci,
  `icon_3_text` text COLLATE utf8mb4_unicode_ci,
  `icon_4_text` text COLLATE utf8mb4_unicode_ci,
  `section2_title` text COLLATE utf8mb4_unicode_ci,
  `section2_sub_title` text COLLATE utf8mb4_unicode_ci,
  `section2_service_id` int(11) DEFAULT NULL,
  `video_url` text COLLATE utf8mb4_unicode_ci,
  `section3_title` text COLLATE utf8mb4_unicode_ci,
  `section3_sub_title` text COLLATE utf8mb4_unicode_ci,
  `section3_question_id` text COLLATE utf8mb4_unicode_ci,
  `section4_title` text COLLATE utf8mb4_unicode_ci,
  `section4_sub_title` text COLLATE utf8mb4_unicode_ci,
  `section4_btn1_text` text COLLATE utf8mb4_unicode_ci,
  `section4_btn2_text` text COLLATE utf8mb4_unicode_ci,
  `section4_btn1_url` text COLLATE utf8mb4_unicode_ci,
  `section4_btn2_url` text COLLATE utf8mb4_unicode_ci,
  `contact_title` text COLLATE utf8mb4_unicode_ci,
  `contact_sub_title` text COLLATE utf8mb4_unicode_ci,
  `contact_address_title` text COLLATE utf8mb4_unicode_ci,
  `contact_address_sub_title` text COLLATE utf8mb4_unicode_ci,
  `contact_phone` text COLLATE utf8mb4_unicode_ci,
  `contact_email` text COLLATE utf8mb4_unicode_ci,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `snapchat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `status` enum('pending','accept','completed','canceled','finished') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'pending',
  `result` int(11) DEFAULT NULL,
  `supervisor_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `start` time DEFAULT NULL,
  `date_id` int(11) DEFAULT NULL,
  `end` time DEFAULT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `new_school_id` int(11) DEFAULT NULL,
  `new_subject_id` int(11) DEFAULT NULL,
  `other` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sub_teacher` int(11) NOT NULL DEFAULT '1',
  `type` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `school_id`, `teacher_id`, `status`, `result`, `supervisor_id`, `date`, `start`, `date_id`, `end`, `note`, `new_school_id`, `new_subject_id`, `other`, `sub_teacher`, `type`, `created_at`, `updated_at`) VALUES
(20, 15, 30, 'completed', NULL, 12, '2021-05-03', '12:00:00', 15, '13:00:00', NULL, NULL, NULL, NULL, 1, 1, '2021-05-23 17:01:24', '2021-05-23 20:01:24'),
(22, 10, 32, 'finished', NULL, 12, '2021-05-02', '09:00:00', 14, '10:00:00', NULL, NULL, NULL, NULL, 1, 1, '2021-05-23 14:23:49', '2021-05-23 17:23:49'),
(23, 10, 33, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 10, 1, NULL, 1, 2, '2021-05-23 14:01:20', '2021-05-23 16:49:37'),
(24, 10, 34, 'pending', NULL, NULL, '2021-05-31', '13:00:00', 17, '14:00:00', NULL, 14, 1, NULL, 1, 2, '2021-05-23 14:01:22', '2021-05-23 16:52:43'),
(25, 10, 38, 'pending', NULL, NULL, '2021-05-24', '09:00:00', 18, '10:00:00', NULL, 10, 1, NULL, 1, 2, '2021-05-23 17:06:16', '2021-05-23 17:06:16'),
(26, 10, 39, 'finished', NULL, NULL, '2021-05-26', '08:00:00', 19, '09:00:00', NULL, NULL, NULL, NULL, 1, 1, '2021-05-27 10:08:47', '2021-05-27 13:08:47'),
(27, 10, 40, 'finished', NULL, NULL, '2021-05-30', '08:00:00', 20, '09:00:00', NULL, NULL, NULL, NULL, 1, 1, '2021-05-27 13:16:17', '2021-05-27 16:16:17'),
(28, 10, 41, 'pending', NULL, NULL, '2021-06-02', '09:00:00', 22, '10:00:00', NULL, NULL, NULL, NULL, 1, 1, '2021-06-01 15:55:13', '2021-06-01 15:55:13'),
(29, 10, 42, 'pending', NULL, NULL, '2021-06-03', '13:00:00', 23, '14:00:00', NULL, NULL, NULL, NULL, 1, 1, '2021-06-01 16:02:15', '2021-06-01 16:02:15'),
(31, 10, 44, 'finished', NULL, NULL, '2021-06-02', '08:00:00', 21, '09:00:00', NULL, NULL, NULL, NULL, 1, 1, '2021-06-01 18:22:55', '2021-06-01 21:22:55'),
(32, 10, 45, 'finished', NULL, NULL, '2021-06-03', '10:00:00', 24, '11:00:00', NULL, NULL, NULL, NULL, 1, 1, '2021-06-01 18:45:42', '2021-06-01 21:45:42'),
(33, 10, 46, 'completed', NULL, NULL, '2021-06-03', '08:00:00', 25, '09:00:00', NULL, NULL, NULL, NULL, 1, 1, '2021-06-02 06:36:19', '2021-06-02 09:36:19'),
(35, 10, 48, 'finished', NULL, NULL, '2021-06-03', '11:00:00', 26, '12:00:00', NULL, NULL, NULL, NULL, 1, 1, '2021-06-04 14:13:30', '2021-06-04 17:13:30'),
(36, 10, 49, 'finished', NULL, NULL, '2021-06-07', '08:00:00', 27, '09:00:00', NULL, NULL, NULL, NULL, 1, 1, '2021-06-06 11:52:23', '2021-06-06 14:52:23'),
(37, 10, 50, 'finished', NULL, NULL, '2021-06-07', '10:00:00', 28, '11:00:00', NULL, NULL, NULL, NULL, 1, 1, '2021-06-06 11:47:04', '2021-06-06 14:47:04'),
(38, 10, 51, 'finished', NULL, NULL, '2021-06-09', '12:00:00', 30, '13:00:00', NULL, NULL, NULL, NULL, 1, 1, '2021-06-08 12:05:23', '2021-06-08 15:05:23'),
(39, 10, 52, 'finished', NULL, NULL, '2021-06-09', '08:00:00', 29, '09:00:00', NULL, NULL, NULL, NULL, 1, 1, '2021-06-08 12:26:36', '2021-06-08 15:26:36'),
(40, 10, 53, 'accept', NULL, NULL, '2021-06-15', '08:00:00', 31, '09:00:00', NULL, NULL, NULL, NULL, 1, 1, '2021-06-14 05:05:56', '2021-06-14 08:05:56');

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `src` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `is_Avalibale` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`id`, `name`, `src`, `type`, `user_id`, `is_Avalibale`, `created_at`, `updated_at`) VALUES
(6, 'Rawan Cv - English - لغة عربية', 'edu/storage/app/Library/files/pdrpmcJwG27QVSihDXKLvsRbC9ikL8NXjzplYNe6.pdf', 1, NULL, 1, '2021-05-25 18:09:17', '2021-05-25 21:09:17'),
(7, 'Dr.Mahmood_Al_Qaisi - Islamic    C.V', 'edu/storage/app/Library/files/HAaNuRbfZlBKVzy4AMQSfhf2S9gArsdDbDLTTE8o.docx', 2, NULL, 0, '2021-05-01 21:33:51', '2021-05-01 21:33:51'),
(8, 'asdasd', 'edu/storage/app/Library/files/MvpeiMhL9J2I51SmjQac66idauMsOQnvzjlrTxxE.png', 1, NULL, 1, '2021-05-21 22:29:36', '2021-05-22 01:29:36'),
(9, 'د. رعد زغول', 'edu/storage/app/Library/files/T3EI3WXqglQBtQ8TTxzbSN42hV6MKKw0TPO1fgGX.docx', 1, NULL, 0, '2021-05-25 21:45:31', '2021-05-25 21:45:31'),
(10, 'هاني محمد', 'edu/storage/app/Library/files/NXpYMJiJmBBG499l53v45H9u7DlJ5g77L5SqTsNw.jpeg', 1, NULL, 0, '2021-05-26 00:33:27', '2021-05-26 00:33:27'),
(11, 'Test', 'edu/storage/app/Library/files/4sEOz8g7rDtCw7yFJexxAzptC0JfvYL3b8IEC47r.pdf', 4, NULL, 0, '2021-06-04 15:34:30', '2021-06-04 15:34:30'),
(12, 'آمنة العطار', 'edu/storage/app/Library/files/URVlf60rlQnGehwYlLu8ArupH8A9oYbtx4SVpXOa.doc', 2, NULL, 1, '2021-10-13 13:35:31', '2021-10-13 16:35:31'),
(13, 'test', 'edu/storage/app/Library/files/Pq5lQxhX05ITWSrGe0mOu81CUnTMREcVe9sc0SRD.docx', 1, NULL, 0, '2021-10-17 15:46:02', '2021-10-17 15:46:02'),
(14, 'test2', 'edu/storage/app/Library/files/0nCPLcBp6h1xbBfZQo9DcD79e2dXM5RP1E7MCqKQ.docx', 2, NULL, 0, '2021-10-17 15:46:15', '2021-10-17 15:46:15'),
(15, 'test4', 'edu/storage/app/Library/files/PRu0Dc9OTeU6npZSc0bOQNjAonNS20o0Vv8NXwYJ.docx', 4, NULL, 0, '2021-10-17 15:46:26', '2021-10-17 15:46:26'),
(16, 'test123', 'edu/storage/app/Library/files/3G0rB03dL2i5jqb6OQfp23jw6hzSHsIEbgSfxZGY.docx', 3, NULL, 0, '2021-10-17 15:46:41', '2021-10-17 15:46:41');

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
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2020_08_22_104509_create_categories_table', 1),
(10, '2020_08_22_104530_create_ads_table', 1),
(11, '2020_08_22_105018_create_cities_table', 1),
(12, '2020_08_22_105328_create_sub__categories_table', 1),
(13, '2020_08_22_105521_create_attributes_table', 1),
(14, '2020_08_22_134610_create_admins_table', 1),
(15, '2020_08_30_124622_create_comment_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `school_id` int(11) DEFAULT NULL,
  `type` int(11) NOT NULL DEFAULT '1',
  `text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_read` int(11) NOT NULL DEFAULT '0',
  `supervisor_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `school_id`, `type`, `text`, `url`, `is_read`, `supervisor_id`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, ' There is a new comment on Recruitment Teachers \r\n from school:School', '13', 0, 0, '2021-05-01 15:03:59', '2021-05-01 15:03:59'),
(2, NULL, 1, ' There is a new comment on Recruitment Teachers \r\n from school:School', '11', 0, 0, '2021-05-01 15:08:57', '2021-05-01 15:08:57'),
(3, NULL, 1, 'There is a new Result Teachers \r\n from school:School', '11', 0, 0, '2021-05-01 16:51:55', '2021-05-01 16:51:55'),
(4, NULL, 1, 'There is a new Result Teachers \r\n from school:School', '11', 0, 0, '2021-05-01 16:52:03', '2021-05-01 16:52:03'),
(5, NULL, 3, ' There is a new comment on Consult  \r\n from school:School', '5', 0, 0, '2021-05-01 17:24:55', '2021-05-01 17:24:55'),
(6, 10, 1, 'There is a new Result on Recruitment a  Teachers \r\n from school:School', '13', 0, NULL, '2021-05-01 17:31:53', '2021-05-01 17:31:53'),
(7, 10, 1, 'There is a new Result on Recruitment a  Teachers \r\n from school:School', '13', 0, NULL, '2021-05-01 17:35:19', '2021-05-01 17:35:19'),
(8, 10, 1, 'There is a new Result on Recruitment a  Teachers \r\n from school:School', '13', 0, NULL, '2021-05-01 17:38:37', '2021-05-01 17:38:37'),
(9, 10, 1, 'There is a new Result on Recruitment a  Teachers \r\n from school:School', '17', 0, NULL, '2021-05-05 17:38:05', '2021-05-05 17:38:05'),
(10, 15, 1, 'There is a new Result on Recruitment a  Teachers \r\n from school:MMMMM', '20', 0, NULL, '2021-05-22 01:54:16', '2021-05-22 01:54:16'),
(11, 10, 1, 'There is a new Result on Recruitment a  Teachers \r\n from school:School', '22', 0, NULL, '2021-05-23 17:21:39', '2021-05-23 17:21:39'),
(12, NULL, 1, ' There is a new comment on Recruitment Teachers \r\n from school:School', '36', 0, 0, '2021-06-06 14:37:26', '2021-06-06 14:37:26');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `result` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `school_id` int(11) DEFAULT NULL,
  `supervisor_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `name`, `result`, `type`, `job_id`, `school_id`, `supervisor_id`, `created_at`, `updated_at`) VALUES
(24, 'Amjad arqan', 'A+', 1, 17, NULL, NULL, '2021-05-19 13:32:16', '2021-05-19 13:32:16'),
(25, 'asdasd', 'A+', 1, 17, NULL, NULL, '2021-05-19 13:55:54', '2021-05-19 13:55:54'),
(26, 'asd', 'A+', 1, 17, NULL, NULL, '2021-05-19 13:56:27', '2021-05-19 13:56:27'),
(27, 'asdasd123123123', 'C-', 1, 19, NULL, NULL, '2021-05-19 13:35:46', '2021-05-19 16:35:46'),
(28, 'qw123123', 'B-', 1, 19, NULL, NULL, '2021-05-19 16:12:00', '2021-05-19 16:12:00'),
(29, 'asdasd', 'B+', 1, 19, NULL, NULL, '2021-05-19 16:34:22', '2021-05-19 16:34:22'),
(30, 'سالم', 'A', 1, 20, NULL, NULL, '2021-05-22 01:53:56', '2021-05-22 01:53:56'),
(31, '11111111', 'A+', 1, 20, NULL, NULL, '2021-05-22 13:13:13', '2021-05-22 13:13:13'),
(32, 'محمد', 'A+', 1, 20, NULL, NULL, '2021-05-22 13:13:41', '2021-05-22 13:13:41'),
(33, 'asdasd', 'A+', 1, 22, NULL, NULL, '2021-05-23 17:21:50', '2021-05-23 17:21:50'),
(34, 'asdasdasd', 'B+', 1, 22, NULL, NULL, '2021-05-23 17:21:58', '2021-05-23 17:21:58'),
(35, 'asdasd123123123', 'C', 1, 22, NULL, NULL, '2021-05-23 17:22:07', '2021-05-23 17:22:07'),
(36, 'asdasdasdasd', 'B', 1, 22, NULL, NULL, '2021-05-23 17:23:03', '2021-05-23 17:23:03'),
(37, 'خالد', 'B+', 1, 20, NULL, NULL, '2021-05-25 20:58:01', '2021-05-25 20:58:01'),
(38, 'Ali', 'A+', 1, 26, NULL, NULL, '2021-05-25 21:33:12', '2021-05-25 21:33:12'),
(39, 'Khalid', 'B', 1, 26, NULL, NULL, '2021-05-25 21:33:30', '2021-05-25 21:33:30'),
(40, 'Mujahed Yaseen', 'A+', 1, 27, NULL, NULL, '2021-05-27 16:16:10', '2021-05-27 16:16:10'),
(41, 'Mujahed Yaseen', 'A+', 1, 30, NULL, NULL, '2021-06-01 19:37:23', '2021-06-01 19:37:23'),
(42, 'khalid', 'B', 1, 31, NULL, NULL, '2021-06-01 21:21:08', '2021-06-01 21:21:08'),
(43, 'Ali', 'A+', 1, 31, NULL, NULL, '2021-06-01 21:21:25', '2021-06-01 21:21:25'),
(44, 'Rula', 'A', 1, 31, NULL, NULL, '2021-06-01 18:22:39', '2021-06-01 21:22:39'),
(45, 'khalid', 'A+', 1, 32, NULL, NULL, '2021-06-01 21:43:30', '2021-06-01 21:43:30'),
(46, 'ali', 'C', 1, 32, NULL, NULL, '2021-06-01 21:44:36', '2021-06-01 21:44:36'),
(47, 'asdasdasd', 'A+', 1, 35, NULL, NULL, '2021-06-04 16:01:08', '2021-06-04 16:01:08'),
(48, 'asdasdasd', 'A+', 1, 35, NULL, NULL, '2021-06-04 16:01:14', '2021-06-04 16:01:14'),
(49, 'علي', 'A+', 1, 33, NULL, NULL, '2021-06-05 02:22:10', '2021-06-05 02:22:10'),
(50, 'khalid', 'A+', 1, 37, NULL, NULL, '2021-06-06 14:45:21', '2021-06-06 14:45:21'),
(51, 'Rula', 'B', 1, 37, NULL, NULL, '2021-06-06 14:45:42', '2021-06-06 14:45:42'),
(52, 'khlaid', 'A+', 1, 36, NULL, NULL, '2021-06-06 14:50:45', '2021-06-06 14:50:45'),
(53, 'Ali', 'D', 1, 36, NULL, NULL, '2021-06-06 14:51:39', '2021-06-06 14:51:39'),
(54, 'Rula', 'D', 1, 36, NULL, NULL, '2021-06-06 14:52:04', '2021-06-06 14:52:04'),
(55, 'Dr. ali', 'A+', 1, 38, NULL, NULL, '2021-06-08 15:01:55', '2021-06-08 15:01:55'),
(56, 'Rula', 'C+', 1, 38, NULL, NULL, '2021-06-08 15:02:22', '2021-06-08 15:02:22'),
(57, 'ali', 'A+', 1, 39, NULL, NULL, '2021-06-08 15:24:36', '2021-06-08 15:24:36'),
(58, 'khalid', 'C+', 1, 39, NULL, NULL, '2021-06-08 15:24:57', '2021-06-08 15:24:57');

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `id` int(11) NOT NULL,
  `Teacher_id` int(11) DEFAULT NULL,
  `consult_id` int(11) DEFAULT NULL,
  `result_id` int(11) DEFAULT NULL,
  `resume` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`id`, `Teacher_id`, `consult_id`, `result_id`, `resume`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, 'edu/storage/app/consult/files/eWOMpGZ0fH2kxQpwgdCrFFIuRN0VNr14f9X17VCK.pdf', '2021-04-27 16:00:39', '2021-04-27 16:00:39'),
(2, NULL, NULL, NULL, 'edu/storage/app/consult/files/3auWYyBYSmQv4KqC2KGF6zJVmM2qFaDjvuAmnYYZ.pdf', '2021-04-27 16:00:39', '2021-04-27 16:00:39'),
(3, NULL, 2, NULL, 'edu/storage/app/consult/files/DR20OB8jzc02jKsW82xiL33yaSUJeTXSDP29Zjgv.pdf', '2021-04-27 16:06:13', '2021-04-27 16:06:13'),
(4, NULL, 2, NULL, 'edu/storage/app/consult/files/eq0rzw4BisV1pBv4xgtS5iAiUJDptEJAQSGgJ1ES.pdf', '2021-04-27 16:06:13', '2021-04-27 16:06:13'),
(5, 16, NULL, NULL, 'edu/storage/app/consult/files/6BXhEWbuIcLWI2IZWypOSPEUdCkK5gzZvHhqUYiB.png', '2021-04-28 17:58:48', '2021-04-28 17:58:48'),
(6, NULL, NULL, 18, 'edu/storage/app/consult/files/attachment/i5NA4uWvBovwKQB03Ec6GzrEIM99Kkf2M5YZp6tA.png', '2021-04-29 15:40:36', '2021-04-29 15:40:36'),
(7, 17, NULL, NULL, 'edu/storage/app/consult/files/9JTqpW76G2ORQBigfaUiUokaY0NM9RtM0kKtFUXm.xlsx', '2021-04-30 19:09:14', '2021-04-30 19:09:14'),
(8, 17, NULL, NULL, 'edu/storage/app/consult/files/mQVlL49wjvHYCmAUj0nmRn60pUdR06HEUPbvA69z.xlsx', '2021-04-30 19:09:14', '2021-04-30 19:09:14'),
(9, 17, NULL, NULL, 'edu/storage/app/consult/files/gXJwRcFp9Js2dNNH41ceDRTVbEwcD0Q3YBqKTctI.xlsx', '2021-04-30 19:09:14', '2021-04-30 19:09:14'),
(10, 17, NULL, NULL, 'edu/storage/app/consult/files/v0v3eXkJQjXET7L5qOxhCz8IvJPq26XbtWblD8HW.xlsx', '2021-04-30 19:09:14', '2021-04-30 19:09:14'),
(11, NULL, NULL, 33, 'edu/storage/app/consult/files/attachment/IlT6KOHPT7YDQ7qIqWEIowoursXF8FpD7dnTm2oX.pdf', '2021-04-30 19:14:35', '2021-04-30 19:14:35'),
(12, 18, NULL, NULL, 'edu/storage/app/consult/files/XwFHDojKjgPzZVoj2GzIMpyjnBqrRZnFFWymCAHr.xlsx', '2021-04-30 20:32:35', '2021-04-30 20:32:35'),
(13, 18, NULL, NULL, 'edu/storage/app/consult/files/OF54Pjqev3T92VPW5NxnoZXoq3BcSUJWyCppSKzX.xlsx', '2021-04-30 20:32:35', '2021-04-30 20:32:35'),
(14, 18, NULL, NULL, 'edu/storage/app/consult/files/I1ZgyX5RQFwsilL0LKiGc6O90ySyshHGWmjuwmiY.xlsx', '2021-04-30 20:32:35', '2021-04-30 20:32:35'),
(15, 18, NULL, NULL, 'edu/storage/app/consult/files/nGB23o9qhCJMjlZPC79yzevtBEYffHTxz7okNL1N.xlsx', '2021-04-30 20:32:35', '2021-04-30 20:32:35'),
(16, 19, NULL, NULL, 'edu/storage/app/consult/files/xD1sJGx5ElnM3eySZtE7uBatyIQmmhSrF8vQrx7M.xlsx', '2021-04-30 20:48:27', '2021-04-30 20:48:27'),
(17, 19, NULL, NULL, 'edu/storage/app/consult/files/69UMDp7kEed2C80bxBhvC6c5AWJASERgEvDpB6gl.xlsx', '2021-04-30 20:48:27', '2021-04-30 20:48:27'),
(18, 19, NULL, NULL, 'edu/storage/app/consult/files/WSgikj5YGNEigXzhhojeAxiIRjagsqTMmBUIQ1dS.xlsx', '2021-04-30 20:48:27', '2021-04-30 20:48:27'),
(19, 19, NULL, NULL, 'edu/storage/app/consult/files/tNEPDO7iawE2eKnjZUluckjjDgntW0uHRxebwWzN.xlsx', '2021-04-30 20:48:27', '2021-04-30 20:48:27'),
(20, 19, NULL, NULL, 'edu/storage/app/consult/files/b9PrjEeIjk1al0uZRtYpxyq7KvJx2THzW3YEmd0K.xlsx', '2021-04-30 20:48:27', '2021-04-30 20:48:27'),
(21, NULL, NULL, 35, 'edu/storage/app/consult/files/attachment/9VYNeX7p6fJpuZKxMSCKpdkh586p0uNATifSbjpF.xlsx', '2021-04-30 20:49:24', '2021-04-30 20:49:24'),
(22, NULL, 3, NULL, 'edu/storage/app/consult/files/m12c1Su8jU9giqObmChPJ5lDcJDiuY4NLVqWRSmk.xlsx', '2021-04-30 20:54:00', '2021-04-30 20:54:00'),
(23, NULL, 3, NULL, 'edu/storage/app/consult/files/lzcmBCHFM0qGISbEbeK7iAOLzHbwaaGiv8RZpKis.xlsx', '2021-04-30 20:54:00', '2021-04-30 20:54:00'),
(24, NULL, 3, NULL, 'edu/storage/app/consult/files/mSZBhceIfbwstvByBTMtWESv59J417gR5RysdAeq.xlsx', '2021-04-30 20:54:00', '2021-04-30 20:54:00'),
(25, NULL, 4, NULL, 'edu/storage/app/consult/files/5RDTatNxZ4p2ghg49nELNxHtbWl0wntcJHyWtBXN.xlsx', '2021-04-30 20:54:30', '2021-04-30 20:54:30'),
(26, NULL, 4, NULL, 'edu/storage/app/consult/files/NkudkczD0imp4hTI95COVGj8OkYs4AOXwEB8g3Pu.xlsx', '2021-04-30 20:54:30', '2021-04-30 20:54:30'),
(27, NULL, 4, NULL, 'edu/storage/app/consult/files/ezYkqvuAlSDUpoH8SHhPq43GWje0kcGByAHTPeNi.xlsx', '2021-04-30 20:54:30', '2021-04-30 20:54:30'),
(28, 20, NULL, NULL, 'edu/storage/app/consult/files/wbZW78KGEfnL1CNfnN3aqwk0Iqcd8lVzv5S5f0tY.jpeg', '2021-05-01 14:20:43', '2021-05-01 14:20:43'),
(29, 21, NULL, NULL, 'edu/storage/app/consult/files/U5Xd4cyJ8eOSemOWZZt9pOKJGwwGl6crvQmz6mK2.jpeg', '2021-05-01 14:20:43', '2021-05-01 14:20:43'),
(30, NULL, NULL, 37, 'edu/storage/app/consult/files/attachment/9mOYxc6746tW8OkfyAY8GOM7Ek9T0HlkHLBf98QA.jpeg', '2021-05-01 14:22:11', '2021-05-01 14:22:11'),
(31, NULL, NULL, 38, 'edu/storage/app/consult/files/attachment/TqyJuVw115FunXMXVFuFSFjmWU7lo3HvXJvgONUn.jpeg', '2021-05-01 14:22:11', '2021-05-01 14:22:11'),
(32, 22, NULL, NULL, 'edu/storage/app/consult/files/t8CT2WXOyzWqBPglZQnD0Kj8DbnsrNgy0Tp2r8ZB.png', '2021-05-01 15:01:05', '2021-05-01 15:01:05'),
(33, NULL, 5, NULL, 'edu/storage/app/consult/files/dP2efsP446qdI2dvHXmHlogb5F8kGyApkEEJdK9O.jpeg', '2021-05-01 17:04:40', '2021-05-01 17:04:40'),
(34, 23, NULL, NULL, 'edu/storage/app/consult/files/Sup1Zh9VQe8fXYMQLzmtUOmGmnC2ULzoua5nn1ZM.jpeg', '2021-05-01 17:11:34', '2021-05-01 17:11:34'),
(35, 26, NULL, NULL, 'edu/storage/app/consult/files/iqXFEPltKnyoF5SqpFpBVQQqebUDqlMxQYhbP5oe.docx', '2021-05-01 22:17:15', '2021-05-01 22:17:15'),
(36, NULL, NULL, 69, 'edu/storage/app/consult/files/attachment/gSlXtm5fU2z6dhDeMEJYKnq0qjiq2gJdN7xtCiuT.docx', '2021-05-01 22:21:07', '2021-05-01 22:21:07'),
(37, 27, NULL, NULL, 'edu/storage/app/consult/files/vOAoy04g3T7iSw4SlzQLMUy7immc1kotJZ3fn3E4.png', '2021-05-04 11:50:59', '2021-05-04 11:50:59'),
(38, 28, NULL, NULL, 'edu/storage/app/consult/files/gwwAxkcswWLlPFGWUzBwWc7FkB3uPYQOPn2k6BKY.png', '2021-05-19 15:03:25', '2021-05-19 15:03:25'),
(39, 29, NULL, NULL, 'edu/storage/app/consult/files/kOZhDT8UP0SLm8FF7pbipS9zM6w9pTg846dSMIzE.png', '2021-05-19 15:20:25', '2021-05-19 15:20:25'),
(40, 30, NULL, NULL, 'edu/storage/app/consult/files/5Pb23XWVUAKAFej5RPfiS6uN2ncN7kVDpfBh6Zd9.jpeg', '2021-05-22 01:51:29', '2021-05-22 01:51:29'),
(41, 31, NULL, NULL, 'edu/storage/app/consult/files/z1LzIeVwnJx6AQUdsV5zA9adCxf7pDGpbV7gH4VO.png', '2021-05-23 14:08:23', '2021-05-23 14:08:23'),
(42, 32, NULL, NULL, 'edu/storage/app/consult/files/NYSRb3AxCyzWezI80Uim6AcpYE5Ov2zwAxL7qqzc.png', '2021-05-23 15:14:03', '2021-05-23 15:14:03'),
(43, 39, NULL, NULL, 'edu/storage/app/consult/files/W6UoMOMwImmnTmYG4q1k9L52wPPgUiJ5RDBwjgo4.docx', '2021-05-25 21:31:06', '2021-05-25 21:31:06'),
(44, 40, NULL, NULL, 'edu/storage/app/consult/files/QMsV7rIDUnM5F5lhs46oHp6o13xKz10hEkwI8YFc.jpeg', '2021-05-27 16:09:05', '2021-05-27 16:09:05'),
(45, 41, NULL, NULL, 'edu/storage/app/consult/files/8pvVCSXDyv1BD04MiFkZKf7M3qtIoStD9VJZCFnd.docx', '2021-06-01 15:55:13', '2021-06-01 15:55:13'),
(46, 42, NULL, NULL, 'edu/storage/app/consult/files/k2FPVVIeGbzHtvQNqS1WKo9TAK6x9jIcyUYImXXM.pdf', '2021-06-01 16:02:15', '2021-06-01 16:02:15'),
(47, 43, NULL, NULL, 'edu/storage/app/consult/files/zB92U7AhFiJ1ZfBefyIpcUpcznHPylCN4OqcWVuA.jpeg', '2021-06-01 19:36:48', '2021-06-01 19:36:48'),
(48, 44, NULL, NULL, 'edu/storage/app/consult/files/F2mmuveMY8G92emoibFfqPKB0pCvhJaRpw5LtDTM.pdf', '2021-06-01 21:12:52', '2021-06-01 21:12:52'),
(49, 45, NULL, NULL, 'edu/storage/app/consult/files/qmam3MjMIMcsG7QvXue7fBsu99ttuJotPkNC4kLU.pdf', '2021-06-01 21:31:42', '2021-06-01 21:31:42'),
(50, 46, NULL, NULL, 'edu/storage/app/consult/files/ZgGpa5WyqxGCItGMt9r8WFzcfYFZq7tEaMiQW2ek.pdf', '2021-06-02 09:28:48', '2021-06-02 09:28:48'),
(51, 47, NULL, NULL, 'edu/storage/app/consult/files/ErJxAJDBUQ56DmRzaoP4mancfd47xspodEr21mpO.pdf', '2021-06-04 15:19:43', '2021-06-04 15:19:43'),
(52, 48, NULL, NULL, 'edu/storage/app/consult/files/LbJCVXIOd307C9cephmZjtR8fUyFQmCJtTdF3CP9.pdf', '2021-06-04 15:59:56', '2021-06-04 15:59:56'),
(53, 49, NULL, NULL, 'edu/storage/app/consult/files/r7BEJUhU3w6AmKURVpbB2SwBIgOsQOqhjitn2TXL.doc', '2021-06-06 14:28:30', '2021-06-06 14:28:30'),
(54, 50, NULL, NULL, 'edu/storage/app/consult/files/bkAbxfNxuJhSgREcJT2PbM8CpTtSjjcrxStYRyYB.pdf', '2021-06-06 14:42:15', '2021-06-06 14:42:15'),
(55, 51, NULL, NULL, 'edu/storage/app/consult/files/69XMVzQzKjaFSrJTQ1LKkh0lxdOqCZzYW42bqa8v.pdf', '2021-06-08 14:49:27', '2021-06-08 14:49:27'),
(56, 52, NULL, NULL, 'edu/storage/app/consult/files/BBfEOGR7v7zUB4ngOxnknGkFfqjq07aJ02UDbIQx.pdf', '2021-06-08 15:14:21', '2021-06-08 15:14:21'),
(57, 53, NULL, NULL, 'edu/storage/app/consult/files/1ECanDn5DJECbYgyNwfZ5AV3n0x6rC9Ex5pG3ii9.pdf', '2021-06-14 08:02:56', '2021-06-14 08:02:56');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `update_at`) VALUES
(1, 'Admin', '2021-04-25 14:24:34', '0000-00-00 00:00:00'),
(2, 'Super', '2021-04-25 14:24:49', '0000-00-00 00:00:00'),
(3, 'School', '2021-04-25 14:24:49', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `section2_service`
--

CREATE TABLE `section2_service` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `section2_service`
--

INSERT INTO `section2_service` (`id`, `title`, `sub_title`, `title_en`, `sub_title_en`, `icon`, `section_id`, `created_at`, `updated_at`) VALUES
(1, 'التوصيل\r\n', 'نسعى الى التطور لمساعدتك بالوصول الى غايتك\r\n', 'delivery', 'We strive to help you reach your goal through the delivery service', NULL, 1, '2020-11-28 18:19:33', '0000-00-00 00:00:00'),
(2, 'التدريس', 'التطبيق مصمم وفق أحدث خصائص التعليم الحديثة\r\n\r\n', 'Teaching', 'The application is designed according to the latest modern education features', NULL, 0, '2020-11-28 10:02:48', '0000-00-00 00:00:00'),
(3, 'البحث المتقدم\r\n', 'نوفر للمستخدمين الكثير من المعلومات التي تلبي احتياجتاتهم\r\n\r\n\r\n', 'Advanced search', 'It provides users with a lot of information that meets their needs', NULL, 1, '2020-11-28 10:03:59', '0000-00-00 00:00:00'),
(4, 'حراج السيارات\r\n', 'نقدم لك حراج السيارات\r\n\r\n', 'Car Auction', 'We offer you cars', NULL, 1, '2020-11-28 10:05:21', '0000-00-00 00:00:00'),
(5, 'مستشفيات\r\n', 'بإمكانك متابعة أخر المستشفيات على حراج\r\n\r\n', 'Hospitals', 'You can follow the latest hospitals on Haraj', NULL, 1, '2020-11-28 10:05:21', '0000-00-00 00:00:00'),
(6, 'السياحة', 'نقدم لك اخر اعلانات السياحة', 'tourism', 'We offer you the latest tourism announcements', NULL, 1, '2020-11-28 11:26:42', '2020-11-28 11:26:42');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `name_ar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `name`, `name_ar`, `created_at`, `updated_at`) VALUES
(1, 'Arabic', NULL, '2021-04-25 14:33:43', '2021-04-25 14:33:43'),
(2, 'Islamic studies', NULL, '2021-04-25 11:45:35', '2021-04-25 14:45:35'),
(3, 'Social Studies', NULL, '2021-04-25 14:34:33', '2021-04-25 14:34:33'),
(7, 'Soft Coding', NULL, '2021-10-13 16:33:59', '2021-10-13 16:33:59');

-- --------------------------------------------------------

--
-- Table structure for table `Teacher`
--

CREATE TABLE `Teacher` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `age` int(11) NOT NULL,
  `exp` int(11) NOT NULL,
  `expP` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nationality` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qualification` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `school_id` int(11) NOT NULL,
  `resume` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `other` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `old_school_id` int(11) DEFAULT NULL,
  `specialization` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sub_teacher` int(11) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Teacher`
--

INSERT INTO `Teacher` (`id`, `name`, `phone`, `email`, `age`, `exp`, `expP`, `nationality`, `qualification`, `subject_id`, `school_id`, `resume`, `other`, `old_school_id`, `specialization`, `sub_teacher`, `created_at`, `updated_at`) VALUES
(30, 'Mujahed', NULL, NULL, 25, 3, 'mmmmmmmmmmmmmmmmmmmm', 'Jordan', '[\"Bachelor\"]', '[2]', 15, 'edu/storage/app/consult/files/cyNUsAZg6NWXlC9nmPYsI2gGftlrKSuR0qjsmmxJ.jpeg', NULL, NULL, NULL, 1, '2021-05-23 14:14:05', '2021-05-22 01:51:29'),
(32, 'asdasd', NULL, NULL, 34, 3, 'asdasdasd', 'Qatar', '[\"Bachelor\",\"M.A.\"]', '[\"Bachelor\",\"M.A.\"]', 10, 'edu/storage/app/consult/files/ol0iKhKmtGGtsM1UIa1H8dMb2V6gv45gI43fyKc1.png', NULL, NULL, 'arabic', 1, '2021-05-23 15:14:03', '2021-05-23 15:14:03'),
(33, 'asdasd', NULL, NULL, 123, 1, NULL, 'Qatar', '\"Bachelor\"', '[\"2\"]', 10, NULL, NULL, 11, NULL, 0, '2021-05-23 13:53:05', '2021-05-23 16:49:37'),
(34, 'asdasdsad', NULL, NULL, 23, 3, 'asdasdasdasdasdasd', 'Qatar', '\"Bachelor\"', '[\"1\"]', 10, NULL, NULL, 10, NULL, 0, '2021-05-23 16:52:43', '2021-05-23 16:52:43'),
(35, 'asdasd', NULL, NULL, 23, 0, 'asdasdasdasdasd', 'Syria', '\"Bachelor\"', '[\"1\"]', 10, NULL, NULL, 11, NULL, 0, '2021-05-23 17:04:37', '2021-05-23 17:04:37'),
(36, 'asdasd', NULL, NULL, 23, 0, 'asdasdasdasdasd', 'Syria', '\"Bachelor\"', '[\"1\"]', 10, NULL, NULL, 11, NULL, 0, '2021-05-23 17:05:57', '2021-05-23 17:05:57'),
(37, 'asdasd', NULL, NULL, 23, 0, 'asdasdasdasdasd', 'Syria', '\"Bachelor\"', '[\"1\"]', 10, NULL, NULL, 11, NULL, 0, '2021-05-23 17:06:01', '2021-05-23 17:06:01'),
(38, 'asdasd', NULL, NULL, 23, 0, 'asdasdasdasdasd', 'Syria', '\"Bachelor\"', '[\"1\"]', 10, NULL, NULL, 11, NULL, 0, '2021-05-23 17:06:16', '2021-05-23 17:06:16'),
(39, 'tariq', NULL, NULL, 33, 3, NULL, 'Jordan', '[\"Bachelor\",\"M.A.\"]', '[\"Bachelor\",\"M.A.\"]', 10, 'edu/storage/app/consult/files/muSTNzxq5qWYSfbTCcmTdHSTL9C1kmuQSx0T6ofA.docx', NULL, NULL, 'Arabic', 1, '2021-05-25 21:31:06', '2021-05-25 21:31:06'),
(40, 'Faris', NULL, NULL, 33, 3, 'اهلا وسهلا بكم', 'Qatar', '[\"Bachelor\",\"M.A.\"]', '[\"Bachelor\",\"M.A.\"]', 10, 'edu/storage/app/consult/files/Ryn5YKl9F9E3LotpXHBm6FiXDvyfV9dVKD6pHEX7.jpeg', NULL, NULL, 'Arabic', 1, '2021-05-27 16:09:05', '2021-05-27 16:09:05'),
(41, 'Ali Abdulla', NULL, NULL, 45, 5, 'MYP annnn', 'Syria', '[\"Bachelor\"]', '[\"Bachelor\"]', 10, 'edu/storage/app/consult/files/UM9qbEQZZeymjWjtVwuUmlMKrMAZLIisDR7Ph7d4.docx', NULL, NULL, 'Arabic', 1, '2021-06-01 15:55:13', '2021-06-01 15:55:13'),
(42, 'khalid Laswi', NULL, NULL, 50, 5, 'MYP', 'Jordan', '[\"Bachelor\"]', '[\"Bachelor\"]', 10, 'edu/storage/app/consult/files/W9G5n7NSKrwlUFeW8JGwkDGLZv6WrSWv0rzoJNhI.pdf', NULL, NULL, 'Arabic', 1, '2021-06-01 16:02:15', '2021-06-01 16:02:15'),
(44, 'MOhan', NULL, NULL, 35, 5, 'MYP', 'Canada', '[\"Bachelor\"]', '[\"Bachelor\"]', 10, 'edu/storage/app/consult/files/RQ3kt0xMsA4t0kRNdJAiAlOfADufowzQKy3R4VW2.pdf', NULL, NULL, 'Arabi c', 1, '2021-06-01 21:12:52', '2021-06-01 21:12:52'),
(45, 'Salem', NULL, NULL, 40, 0, NULL, 'Qatar', '[\"Bachelor\"]', '[\"Bachelor\"]', 10, 'edu/storage/app/consult/files/FRoP73XWBwWnuZyRGZQ59AsUGOEJ3G4TVNkwumiS.pdf', NULL, NULL, 'Islamic', 1, '2021-06-01 21:31:42', '2021-06-01 21:31:42'),
(46, 'Ayat', NULL, NULL, 25, 4, 'PYP', '0', '[\"Bachelor\"]', '[\"Bachelor\"]', 10, 'edu/storage/app/consult/files/UrZxiF0GcylV3k9yzaylmKLbb6iQhzPhaz84PQTt.pdf', 'Sudan', NULL, 'Islamic', 1, '2021-06-02 09:28:48', '2021-06-02 09:28:48'),
(48, 'test', NULL, NULL, 23, 1, 'twstssdasd', 'Morocco', '[\"Bachelor\"]', '[\"Bachelor\"]', 10, '', NULL, NULL, 'test', 1, '2021-06-04 15:59:56', '2021-06-04 15:59:56'),
(49, 'Hussam al dine', NULL, NULL, 25, 1, 'pyp', '0', '[\"Bachelor\"]', '[\"Bachelor\"]', 10, '', 'egpt', NULL, NULL, 1, '2021-06-06 14:28:30', '2021-06-06 14:28:30'),
(50, 'ali ali ali', NULL, NULL, 50, 3, 'PYP', 'Qatar', '[\"Bachelor\"]', '[\"Bachelor\"]', 10, '', NULL, NULL, NULL, 1, '2021-06-06 14:42:15', '2021-06-06 14:42:15'),
(51, 'Jassem', NULL, NULL, 30, 5, 'PYP', 'Lebanon', '[\"Bachelor\",\"M.A.\",\"PhD\",\" Professional license\"]', '[\"Bachelor\",\"M.A.\",\"PhD\",\" Professional license\"]', 10, 'edu/storage/app/consult/files/SSB8o3kF3KxYAqPxUwaguLKi5WTYjhPrqPp6PlDf.pdf', NULL, NULL, NULL, 1, '2021-06-08 14:49:27', '2021-06-08 14:49:27'),
(52, 'Ahmad', NULL, NULL, 45, 0, NULL, 'Qatar', '[\"Bachelor\"]', '[\"Bachelor\"]', 10, '', NULL, NULL, NULL, 1, '2021-06-08 15:14:21', '2021-06-08 15:14:21'),
(53, 'saleem', NULL, NULL, 40, 3, 'PYP', 'Tunnies', '[\"Bachelor\"]', '[\"Bachelor\"]', 10, 'edu/storage/app/consult/files/bkbI1j85wyFE1i5kSgJk6VTWjPZQezi2NXimRD2b.pdf', NULL, NULL, NULL, 1, '2021-06-14 08:02:56', '2021-06-14 08:02:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive','block') COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(11) NOT NULL DEFAULT '1',
  `role_id` int(11) NOT NULL DEFAULT '2',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `status`, `code`, `type`, `role_id`, `remember_token`, `img`, `img2`, `created_at`, `updated_at`, `deleted_at`) VALUES
(9, 'Admin', 'mojahed@gmail.com', NULL, '$2y$10$Dfe4G9lsIkcIy1bfr8PaVu/ZgpEUJMLI5z4jwO6uZn0ULgg5gBtmq', '0599748832', 'active', NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'School', 'school@gmail.com', NULL, '$2y$10$Mnls07/YSsfRXOfLdx8Qou5q9F/KZX.npZcheSOS1e/hFumicrk/O', '059974883225', 'active', NULL, 2, 3, NULL, 'https://edu.ixmedia.tech/edu/storage/app/Users/imgs/6weJIfLnZVfpo9UTXfo64b5QrO5IAzE69embqKlS.png', NULL, '2021-04-26 15:57:39', '2021-10-18 12:03:04', NULL),
(11, 'مشيرب', 'school2@gmail.com', NULL, '$2y$10$Dfe4G9lsIkcIy1bfr8PaVu/ZgpEUJMLI5z4jwO6uZn0ULgg5gBtmq', '123123123123', 'active', NULL, 2, 3, NULL, 'edu/storage/app/Users/imgs/M85sobDCfdNkWDqUQU5Ih9EMzWCusG1qdKuK1Elk.svg', NULL, '2021-04-27 02:35:19', '2021-05-02 01:35:26', NULL),
(12, 'Mojahed', 'supervisor@gmail.com', NULL, '$2y$10$Dfe4G9lsIkcIy1bfr8PaVu/ZgpEUJMLI5z4jwO6uZn0ULgg5gBtmq', '059974883222', 'active', NULL, 2, 2, NULL, 'edu/storage/app/Users/imgs/u8sLkdla4mzIcj6iTyEaYxWzDfFeq4ZPEaldsOsB.png', NULL, '2021-04-27 13:07:05', '2021-05-01 15:24:23', NULL),
(13, 'Mujahed Yaseen', 'muj2004@gmail.com', NULL, '$2y$10$Dfe4G9lsIkcIy1bfr8PaVu/ZgpEUJMLI5z4jwO6uZn0ULgg5gBtmq', '0097470032313', 'inactive', NULL, 2, 1, NULL, 'edu/storage/app/Users/imgs/8IS4CC43NpA9ZlK4Wb6QejaBohKxg2pey41tuUfR.png', NULL, '2021-04-30 15:58:43', '2021-04-30 16:30:30', NULL),
(14, 'الوكرة', 'aaa@gmail.com', NULL, '$2y$10$zhVr2acLo4OPyA.GmVGhuufPH95WKpxON1LqzEGbIJq/NB7yhakXS', '0097444444444', 'active', NULL, 2, 3, NULL, 'edu/storage/app/Users/imgs/WZumRV36V7aR5xyXX2KajUcZojXQ0V6WIXonghg3.svg', NULL, '2021-04-30 16:03:39', '2021-05-02 01:34:35', NULL),
(15, 'MMMMM', 'mmmm@gmail.com', NULL, '$2y$10$Yh25lPPTLdijP0lWIOShiufQcqG7Ftw1YU.s9LgN/AsshOjgHDBGy', '44444444444444', 'active', NULL, 2, 3, NULL, 'edu/storage/app/Users/imgs/2T0RJaKkGhUipPJmf7V5SFnlnZ8A6Zz5CeSx8T0o.jpeg', 'edu/storage/app/Users/imgs/lSd0DvXmL29jXkJPRj7a3PAAXWjSiZyvFjpKd7BN.jpeg', '2021-05-22 01:46:41', '2021-05-22 01:46:41', NULL),
(17, 'khalid', 'klaswi@qf.org.qa', NULL, '$2y$10$f/omYWkA4cvVYiqk1YOzKOtjfNkuR83G7i1uKp3rRtbmGm3VQB3gu', '0097455861415', 'active', NULL, 2, 2, NULL, NULL, NULL, '2021-06-01 21:48:02', '2021-06-01 21:48:02', NULL),
(18, 'QAD', 'atawalbeh@qf.org.qa', NULL, '$2y$10$fMlxv5DNRDQEgFMe.xFa3.o6SJ7DG7nMLnX7ZmmAbpEwaOtauFDJy', '0097455861414', 'active', NULL, 2, 3, NULL, 'edu/storage/app/Users/imgs/6eRH4tcDTK6GIDhcmX3afJsfnleLqIHdmTqO2Br5.jpeg', NULL, '2021-06-01 21:56:21', '2021-06-01 21:56:21', NULL),
(19, 'شسيش', 'ssssss@gmail.com', NULL, '$2y$10$qia59NDSXWpt4GDGjcDuY./gc31VKWWjQCTajXFR52ped2t/Fefz6', '12312312322', 'active', NULL, 2, 3, NULL, 'edu/storage/app/Users/imgs/oFmklbxRqPUPJ1K3cmI2xjl6M5zIgJoO9wc4Iz9D.png', NULL, '2021-06-05 11:23:20', '2021-06-05 11:39:41', '2021-06-05 11:39:41'),
(20, 'Zaher', 'Babymoment2020@gmail.com', NULL, '$2y$10$qsK0TIKGQWKsjB9tJLn8AOHY8TwDpX7z.D.lqJIRhpwHD.eqghCiK', '0598956385', 'active', NULL, 2, 2, NULL, 'edu/storage/app/Users/imgs/QA4D5EzKGgbJknY7pT2x9t9kJyws3duhtqE8pZrX.jpeg', NULL, '2021-10-13 16:28:28', '2021-10-13 16:31:06', '2021-10-13 16:31:06'),
(21, 'Zaher AL Dohdar', 'softcoding20@gmail.com', NULL, '$2y$10$jdkc7c3he4x9QmsvQ2xWN.tBdoZMdpDAf4li/XdGG5Qi.bhjasQqW', '+970567681773', 'active', NULL, 2, 3, NULL, 'edu/storage/app/Users/imgs/7xL8TcTT4iOK3b7GiquN2zo42Y90eytByYsXQYeW.jpeg', NULL, '2021-10-13 16:32:14', '2021-10-13 16:32:14', NULL),
(22, 'test', 'test@test.com', NULL, '$2y$10$w2Zn9NE3Wwv6TEq5VfCjkO1UxhWprIaeQAI1fttwA9up.559iS2Mu', '55555555555', 'active', NULL, 2, 2, NULL, 'edu/storage/app/Users/imgs/tv6dhPcBDretMEwaV7jsyLCqfmjWoFXUtbnCC5H9.png', NULL, '2021-10-17 15:02:05', '2021-10-17 15:02:05', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consult`
--
ALTER TABLE `consult`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `date`
--
ALTER TABLE `date`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `front_most_qouestion`
--
ALTER TABLE `front_most_qouestion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `front_page_ar`
--
ALTER TABLE `front_page_ar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `front_page_en`
--
ALTER TABLE `front_page_en`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section2_service`
--
ALTER TABLE `section2_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Teacher`
--
ALTER TABLE `Teacher`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `consult`
--
ALTER TABLE `consult`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `date`
--
ALTER TABLE `date`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `front_most_qouestion`
--
ALTER TABLE `front_most_qouestion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `front_page_ar`
--
ALTER TABLE `front_page_ar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `front_page_en`
--
ALTER TABLE `front_page_en`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `section2_service`
--
ALTER TABLE `section2_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `Teacher`
--
ALTER TABLE `Teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
