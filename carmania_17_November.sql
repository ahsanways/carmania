-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2019 at 05:28 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carmania`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `price` int(11) NOT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `approved` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `user_id`, `product_id`, `featured`, `price`, `views`, `approved`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1200000, 8, 1, '2019-08-09 14:08:24', '2019-11-16 10:34:11'),
(2, 3, 2, 0, 70000, 3, 1, '2019-08-09 14:08:24', '2019-10-19 15:42:55'),
(3, 3, 3, 1, 10000, 42, 1, '2019-08-09 14:08:24', '2019-11-16 11:25:21'),
(4, 1, 5, 1, 950000, 12, 1, '2019-08-09 14:08:24', '2019-11-16 23:27:34'),
(6, 1, 7, 1, 1300000, 2, 1, '2019-08-09 14:55:47', '2019-10-23 10:16:20'),
(7, 3, 8, 0, 15000, 0, 1, '2019-08-09 14:58:11', '2019-08-09 14:58:11'),
(8, 1, 9, 1, 70000, 36, 1, '2019-08-17 18:05:40', '2019-11-09 08:16:22'),
(9, 1, 10, 0, 10000, 0, 1, '2019-08-17 18:24:54', '2019-08-17 18:24:54'),
(10, 1, 11, 1, 2500, 8, 1, '2019-08-17 18:33:09', '2019-10-23 12:29:44'),
(11, 1, 12, 0, 15000, 0, 1, '2019-08-19 16:14:06', '2019-08-19 17:04:51'),
(15, 1, 16, 0, 34000, 8, 1, '2019-10-05 15:00:09', '2019-11-16 22:54:43'),
(16, 4, 17, 1, 1100000, 34, 1, '2019-10-19 11:02:13', '2019-11-09 08:11:19'),
(17, 4, 4, 0, 750000, 0, 1, NULL, NULL),
(18, 1, 18, 1, 25000, 15, 1, '2019-10-19 16:14:19', '2019-11-09 08:15:51'),
(19, 3, 19, 0, 4600000, 0, 1, '2019-10-24 12:10:44', '2019-10-24 12:10:44'),
(20, 3, 20, 0, 8650000, 1, 1, '2019-10-24 12:12:40', '2019-10-24 12:35:25'),
(21, 3, 21, 0, 5900000, 0, 1, '2019-10-24 12:15:16', '2019-10-24 12:15:16'),
(22, 3, 22, 0, 2500000, 0, 1, '2019-10-24 12:17:43', '2019-10-24 12:17:43'),
(23, 3, 23, 1, 3475000, 1, 1, '2019-10-24 12:19:50', '2019-11-09 09:40:30'),
(24, 3, 24, 0, 8000000, 0, 1, '2019-10-24 12:22:27', '2019-10-24 12:22:27'),
(25, 3, 25, 0, 5400000, 0, 1, '2019-10-24 12:24:27', '2019-10-24 12:24:27'),
(26, 3, 26, 1, 3600000, 0, 1, '2019-10-24 12:26:25', '2019-10-24 12:26:25'),
(27, 3, 27, 1, 400000, 1, 1, '2019-10-24 12:28:06', '2019-11-09 09:38:46'),
(28, 3, 28, 0, 9500000, 0, 1, '2019-10-24 12:29:56', '2019-10-24 12:29:56'),
(29, 3, 29, 0, 3600000, 0, 1, '2019-10-24 12:31:20', '2019-11-16 11:17:16'),
(31, 1, 31, 1, 3000000, 0, 1, '2019-11-10 03:32:26', '2019-11-16 11:17:24'),
(34, 1, 34, 1, 2200000, 0, 1, '2019-11-10 03:51:23', '2019-11-16 11:17:34'),
(35, 1, 35, 1, 2200000, 0, 1, '2019-11-10 03:57:24', '2019-11-16 11:17:38'),
(36, 1, 36, 1, 2200000, 0, 1, '2019-11-10 04:04:13', '2019-11-16 11:17:43'),
(37, 1, 37, 1, 4500000, 0, 1, '2019-11-10 04:35:10', '2019-11-16 11:18:17'),
(38, 1, 38, 0, 2100000, 0, 1, '2019-11-10 04:39:03', '2019-11-16 11:20:52'),
(39, 1, 39, 1, 2000000, 0, 1, '2019-11-10 05:43:21', '2019-11-16 11:20:48'),
(40, 1, 40, 1, 2000000, 0, 1, '2019-11-10 05:44:05', '2019-11-16 11:20:39'),
(41, 1, 41, 1, 2500000, 0, 1, '2019-11-10 05:58:13', '2019-11-16 11:20:29'),
(42, 1, 42, 0, 2222222, 1, 1, '2019-11-10 06:13:38', '2019-11-16 11:18:33'),
(43, 1, 43, 1, 2222222, 0, 1, '2019-11-10 06:14:23', '2019-11-16 11:18:29'),
(44, 1, 44, 1, 1222222, 0, 1, '2019-11-10 06:15:02', '2019-11-16 11:18:25'),
(45, 1, 45, 1, 23333333, 0, 1, '2019-11-15 13:33:25', '2019-11-16 11:18:21'),
(46, 1, 46, 1, 234567890, 0, 1, '2019-11-15 13:34:12', '2019-11-16 11:18:12'),
(47, 1, 47, 1, 234567890, 0, 1, '2019-11-15 13:36:56', '2019-11-16 11:18:08'),
(48, 7, 48, 1, 3000000, 0, 1, '2019-11-16 01:14:31', '2019-11-16 11:17:56'),
(49, 7, 49, 1, 20000000, 0, 1, '2019-11-16 01:15:59', '2019-11-16 11:17:52'),
(50, 3, 50, 1, 2000000, 0, 1, '2019-11-16 01:27:12', '2019-11-16 11:17:48'),
(51, 3, 51, 1, 2100000, 1, 1, '2019-11-16 01:28:29', '2019-11-16 09:21:26'),
(52, 3, 52, 1, 2222222, 0, 1, '2019-11-16 01:29:58', '2019-11-16 01:29:58'),
(53, 7, 53, 1, 3000000, 2, 1, '2019-11-16 11:26:19', '2019-11-16 22:53:38');

-- --------------------------------------------------------

--
-- Table structure for table `buyer_requests`
--

CREATE TABLE `buyer_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `type` enum('Car','Bike','Autopart') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `condition` enum('New','Used') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `budget` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buyer_requests`
--

INSERT INTO `buyer_requests` (`id`, `user_id`, `type`, `name`, `city`, `condition`, `budget`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'Car', 'Honda City 2012', 'Lahore', 'Used', 1500000, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2019-10-01 03:05:04', '2019-10-14 03:05:04'),
(2, 4, 'Autopart', 'Side Mirrors Honda City 2015', 'Gujranwala', 'Used', 10000, 'Side mirrors needed on urgent basis. Anyone?', '2019-10-19 09:07:06', '2019-10-19 09:07:06'),
(3, 2, 'Autopart', 'Woofer Set', 'Gujranwala', 'Used', 18000, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem', '2019-10-23 12:32:23', '2019-10-23 12:32:23');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`) VALUES
(1, 'Lahore'),
(2, 'Karachi'),
(3, 'Islamabad'),
(4, 'Multan'),
(5, 'Faisalabad'),
(6, 'Rawalpindi'),
(7, 'Peshawar'),
(8, 'Narowal'),
(9, 'Gujranwala'),
(10, 'Sialkot'),
(11, 'Quetta'),
(12, 'Hyderabad');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `comment`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint ', '2019-08-01 13:34:54', '2019-08-01 13:34:54'),
(2, 2, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed d', '2019-08-01 13:35:04', '2019-08-01 13:35:04'),
(3, 3, 3, 'Okay, Whats the price?', '2019-08-01 15:30:27', '2019-08-01 15:30:27'),
(4, 3, 3, 'Okay, Whats the price?', '2019-08-01 15:32:23', '2019-08-01 15:32:23'),
(5, 3, 3, 'Hello, Rameel?', '2019-08-01 15:32:59', '2019-08-01 15:32:59'),
(6, 3, 3, 'Oh, Okay', '2019-08-01 15:35:22', '2019-08-01 15:35:22'),
(7, 3, 1, 'Hello', '2019-08-01 15:35:47', '2019-08-01 15:35:47'),
(8, 1, 5, 'Yes!', '2019-08-05 18:37:16', '2019-08-05 18:37:16'),
(9, 1, 3, 'Hello', '2019-08-05 20:16:26', '2019-08-05 20:16:26'),
(10, 1, 3, 'Hey', '2019-08-05 20:18:41', '2019-08-05 20:18:41'),
(11, 1, 3, 'WHAT', '2019-08-05 20:22:18', '2019-08-05 20:22:18');

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
(3, '2019_07_27_123311_create_posts_table', 1),
(4, '2019_07_27_123333_create_comments_table', 1),
(5, '2019_07_27_123350_create_reviews_table', 1),
(6, '2019_07_27_123402_create_ads_table', 1),
(7, '2019_07_29_100244_create_products_table', 1),
(8, '2019_10_21_170123_create_searches_table', 2),
(9, '2019_10_21_170352_create_wishlists_table', 3),
(10, '2019_10_21_170423_create_searches_table', 4),
(11, '2019_10_21_170499_create_wishlists_table', 5),
(12, '2019_11_10_101701_create_rewards_table', 6);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'Corolla xli 2017 new', 'images/banner-01.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2019-08-01 12:31:37', '2019-08-01 15:05:12'),
(2, 2, 'Lorem ipsum', 'images/banner-02.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2019-08-01 13:47:59', '2019-08-01 15:05:11'),
(3, 2, 'Lorem ipsum dolor sit amet, consectetur', 'images/banner-01.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2019-08-01 13:53:20', '2019-08-01 15:05:21'),
(4, 2, 'Lorem ipsum dolor sit amet, consectetur', 'images/banner-01.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2019-08-01 13:53:20', '2019-08-01 15:05:21'),
(5, 3, 'Does anybody have new or used tyres of Honda City 2016?', 'images/posts/1564667563.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '2019-08-01 15:52:43', '2019-08-01 15:52:43'),
(6, 1, 'Lorem ipsum dolor sit amet, consectetur', NULL, 'Lorem ipsum dolor sit amet, consectetur Lorem ipsum dolor sit amet, consectetur Lorem ipsum dolor sit amet, consectetur Lorem ipsum dolor sit amet, consectetur Lorem ipsum dolor sit amet, consectetur', '2019-08-05 18:34:40', '2019-08-05 18:34:40'),
(7, 1, 'New Mirrors Honda city, Anyone?', 'images/posts/1565336380.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex', '2019-08-09 14:39:40', '2019-08-09 14:39:40');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` enum('Car','Bike','Autopart') COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int(11) DEFAULT NULL,
  `mileage` int(11) DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `condition` enum('New','Used') COLLATE utf8mb4_unicode_ci NOT NULL,
  `transmission` enum('Manual','Automatic') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `type`, `name`, `year`, `mileage`, `color`, `city`, `condition`, `transmission`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Car', 'Honda City', 2016, 25, 'Black', 'Karachi', 'Used', 'Automatic', 'images/products/1570275251.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', NULL, '2019-10-05 06:34:12'),
(2, 'Bike', 'Honda cd 70', 2011, 10, NULL, 'Karachi', 'New', 'Manual', 'images/products/1566222461.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', NULL, '2019-08-19 20:47:41'),
(3, 'Autopart', 'Tyre Toyota Corolla', 2015, NULL, NULL, 'Lahore', 'Used', NULL, 'images/products/1566222475.jpg', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', NULL, '2019-08-19 20:47:56'),
(4, 'Car', 'Daihatsu Coure 2009', 2009, 25, 'Black', 'Karachi', 'Used', 'Manual', 'images/products/1565337347.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '2019-08-09 14:08:04', '2019-08-09 14:08:04'),
(5, 'Car', 'Toyota Corolla 2009', 2009, 25, 'Black', 'Karachi', 'Used', 'Manual', 'images/products/1566222312.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '2019-08-09 14:08:24', '2019-08-19 20:45:13'),
(7, 'Car', 'Toyota Prius 2011', 2011, 15, 'grey', 'Lahore', 'New', 'Manual', 'images/products/1566219139.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate', '2019-08-09 14:55:47', '2019-08-19 19:52:20'),
(8, 'Autopart', 'Mirrors honda city', 2015, NULL, NULL, 'Lahore', 'Used', NULL, 'images/products/1565337347.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '2019-08-09 14:58:11', '2019-08-09 14:58:11'),
(9, 'Bike', 'Yamaha 125G', 2007, 16, NULL, 'Multan', 'Used', 'Manual', 'images/products/1566222341.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '2019-08-17 18:05:40', '2019-08-19 20:45:41'),
(10, 'Autopart', 'Toyota Prius 2011 Mirrors', 2011, NULL, NULL, 'Sialkot', 'Used', NULL, 'images/products/1566041093.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '2019-08-17 18:24:54', '2019-08-17 18:24:54'),
(11, 'Autopart', 'Bluetooth Device', 2010, NULL, NULL, 'Lahore', 'New', NULL, 'images/products/1566222403.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '2019-08-17 18:33:09', '2019-08-19 20:46:44'),
(12, 'Autopart', 'CNG Kit Corolla XLI', 2007, NULL, NULL, 'Lahore', 'Used', NULL, 'images/products/1566222425.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '2019-08-19 16:14:06', '2019-08-19 20:47:06'),
(16, 'Bike', 'Yamaha 100', 2005, 20, NULL, 'Quetta', 'Used', 'Manual', 'images/products/1570305607.jpg', 'Yamaha 2005 model', '2019-10-05 15:00:08', '2019-10-05 15:00:08'),
(17, 'Car', 'Suzuki VagonR', 2014, 17, 'Black', 'Multan', 'Used', 'Automatic', 'images/products/1571500932.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '2019-10-19 11:02:13', '2019-10-19 11:02:13'),
(18, 'Bike', 'Honda cd 70', 2000, 35, NULL, 'Sialkot', 'Used', 'Manual', 'images/products/1571519658.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '2019-10-19 16:14:19', '2019-10-19 16:14:19'),
(19, 'Car', 'TOYOTA LANDCRUISER PRADO  TZ', 2003, 15, 'Charcoal grey', 'Lahore', 'Used', 'Automatic', 'images/products/1571937043.jpg', 'SPECIFICATION :- #MAKE-TOYOTA #MODEL-LANDCRUISER PRADO #VARIENT -TZ #MODELYEAR -2003 #IMPORT-2004 #REGISTRATION-2004 LHR #COLOUR-CHARCOAL GREY #ENGINE SIZE - 3.4 LITRE PETROL #MILEAGE -100000 KM #LEATHER ELECTRIC SEATS #HEATED SEATS #HEIGHT CONTROL WITH SUSPENSION MODES #PRIVACY GLASS WINDOWD #4-WD #CRUSE CONTROL #GENUINE SAT NAV #CD CHANGER #DUAL A.C *** PRICE - 46,00,000 PKR *** *', '2019-10-24 12:10:44', '2019-10-24 12:10:44'),
(20, 'Car', 'TOYOTA MODEL-FORTUNER', 2019, 14, 'Black', 'Islamabad', 'Used', 'Automatic', 'images/products/1571937159.jpg', 'SPECIFICATION :-\r\nMAKE - TOYOTA\r\nMODEL-FORTUNER\r\nVARIENT - 2.8 SIGMA\r\nMODELYEAR - 2019\r\nMILEAGE 14,000 KM\r\nCOLOUR - BLACK	\r\nREGISTRATION - ISLAMABAD 2019\r\n** PRICE ≠ 86,50,000 PKR', '2019-10-24 12:12:40', '2019-10-24 12:12:40'),
(21, 'Car', 'TOYOTA REVO V', 2018, 14, 'Super White', 'Lahore', 'Used', 'Manual', 'images/products/1571937315.jpg', 'SPECIFICATION :-\r\nMAKE - TOYOTA\r\nMODEL - REVO\r\nVARIENT - V\r\nMODELYEAR - 2018\r\nREGISTRATION - UNREGISTRED\r\nMILEAGE - 7000 KM\r\nCOLOUR - SUPERWHITE\r\n*** PRICE ≠ 59,00,000 PKR ***', '2019-10-24 12:15:16', '2019-10-24 12:15:16'),
(22, 'Car', 'Honda city 1.3 Auto', 2019, 16, 'Silver', 'Multan', 'New', 'Automatic', 'images/products/1571937462.jpg', 'SPEICIFICATION :-\r\nMAKE - HONDA\r\nMODEL -CITY\r\nVARIENT - 1.3 AUTO\r\nCOLOUR - SILVER\r\nMODELYEAR - 2019\r\nREGISTRATION - BRAND NEW 60 KM\r\n\r\n*** PRICE ≠ 25,00,000 PKR ***', '2019-10-24 12:17:43', '2019-10-24 12:17:43'),
(23, 'Car', 'TOYOTA COROLLA ALTIS GRANDE', 2018, 13, 'Graphite', 'Lahore', 'Used', 'Manual', 'images/products/1571937589.jpg', 'MAKE - TOYOTA\r\nMODEL-COROLLA ALTIS GRANDE\r\nMODELYEAR - 2018\r\nMILEAGE -13000 KM\r\nREGITRATION - LAHORE 18\r\nCOLOUR -GRAPHITE\r\n	\r\n*** PRICE ≠34,75,000 PKR ***', '2019-10-24 12:19:50', '2019-10-24 12:19:50'),
(24, 'Car', 'TOYOTA PRADO TX', 2010, 19, 'Pearl White', 'Islamabad', 'Used', 'Manual', 'images/products/1571937746.jpg', 'MAKE - TOYOTA MODEL - PRADO VARIENT - TX MODEL YEAR - 2010 IMPORT - 2016 MILEAGE - 70,000 KM REGISTRATION - 2016 ISLAMABAD COLOUR - PEARL WHITE FACELIFTED 5 SEATER SUNROOF MULTIMEDIA STEERING WHEEL DVD PLAYER BACK VIEW CAMERA\r\n\r\n** NO TOUCH UPS,FIRST OWNER ** ** PRICE - 80,00,000 PKR **', '2019-10-24 12:22:27', '2019-10-24 12:22:27'),
(25, 'Car', 'TOYOTA CAMRY', 2013, 55000, 'Black', 'Islamabad', 'Used', 'Automatic', 'images/products/1571937866.jpg', 'MAKE - TOYOTA •MODEL - CAMRY •MODELYEAR - 2013 •VARIENT -HYBRID •IMPORT -2016 •REGISTRATION-2019 ISL •COLOUR - BLACK •MILEAGE - 55000 KM •GEUNINE SAT NAV •MULTIMEDIA STEERING WHEEL •ELECTRIC SEAT •PUSH START/KEYLESS GO **TOTAL GENUINE,FIRST OWNER** ** NO TOUCH UPS,ORIGINAL MILEAGE ** *** PRICE ≠ 54,00,000 PKR ***', '2019-10-24 12:24:27', '2019-10-24 12:24:27'),
(26, 'Car', 'HONDA CIVIC 1.8-i-VTEC ORIEL/U.G', 2019, 5500, 'Silver', 'Quetta', 'Used', 'Manual', 'images/products/1571937984.jpg', 'SPECIFICATION :- •MAKE - HONDA •MODEL - CIVIC •VARIENT - 1.8-i-VTEC ORIEL/U.G •MODELYEAR - 2019 •REGISTRATION - UNREGISTRED •COLOUR -SILVER •MILEAGE - 5500 KM •SUNROOF\r\n\r\n**PRICE ≠36,00,000 PKR **', '2019-10-24 12:26:25', '2019-10-24 12:26:25'),
(27, 'Car', 'HONDA VEZEL Z-SENSING', 2017, 41000, 'Black', 'Multan', 'Used', 'Automatic', 'images/products/1571938085.jpg', 'SPECIFICATION :- •MAKE - HONDA •MODEL - VEZEL •VARIENT - Z-SENSING •MODELYEAR - 2017 •IMPORT - 2019 •MILEAGE - 41,000 KM •COLOUR - BLACK •ENGINE SIZE - 1.5 HYBRID Price PKR 40,000,00', '2019-10-24 12:28:06', '2019-10-24 12:28:06'),
(28, 'Car', 'AUDI A6', 2016, 30500, 'White', 'Lahore', 'Used', 'Automatic', 'images/products/1571938196.jpg', 'SPECIFCATION :- •MAKE -AUDI •MODEL - A6 •MODELYEAR - 2016 •IMPORT - AUDI 2016 •REGISTRATION - LAHORE 2016 •MILEAGE - 30,500 KM •COLOUR - GLACIER WHITE •ENGINE CAPACITY - 1.8 PETROL •SUNROOF •AUTOFOCUS L.E.D HEAD LAMPS •MATRIX TAIL LIGHTS •BEIGE INTERIOR •LEATHER ELECTRIC SEATS,MEMORY SEATS •CRUISE CONTROL •PARKING ASSIST •GENUINE IN DASH ENTERTAINMENT •MULTOMEDIA STEERINGW WHEEL •ELECTRIC BLIND ON BACK WINDOW •BLINDS ON PASSENGER DOOR WINDOWS •JET WASHERS FOR FRONT HEAD LAMPS •TRACTION CONTROL •DIFFERENT DRIVING MODES •AUTOMATIC STEPTRONIC GEAR BOX •BRAKE HOLD •ELECTRIC PARKIN BRAKE •REAR CLIMATE CONTROL •4 ZONE CLIMATE CONTROL ** PRICE = 95,00,000 pkr', '2019-10-24 12:29:56', '2019-10-24 12:29:56'),
(29, 'Car', 'HONDA CIVIC ORIEL U.G', 2019, 5000, 'Silver', 'Multan', 'Used', 'Automatic', 'images/products/1571938279.jpg', 'SPECIFICATION :- • MAKE - HONDA •MODEL - CIVIC •VARIENT - ORIEL/U.G •MODEL YEAR - 2019 •MILEAGE - 5000 KM •REGISTRATION - UNREGISTRED', '2019-10-24 12:31:20', '2019-10-24 12:31:20'),
(31, 'Car', 'Audi A5', 2015, 22, 'black', 'Lahore', 'Used', 'Automatic', 'images/products/1573374744.jpg', 'SPECIFICATION :- • MAKE - HONDA •MODEL - CIVIC •VARIENT - ORIEL/U.G •MODEL YEAR - 2019 •MILEAGE - 5000 KM •REGISTRATION - UNREGISTRED', '2019-11-10 03:32:26', '2019-11-10 03:32:26'),
(34, 'Car', 'Toyota Corolla', 2008, 22, 'black', 'Rawalpindi', 'Used', 'Automatic', 'images/products/1573375882.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '2019-11-10 03:51:23', '2019-11-10 03:51:23'),
(35, 'Car', 'Toyota Corolla', 2008, 22, 'black', 'Rawalpindi', 'Used', 'Automatic', 'images/products/1573376243.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '2019-11-10 03:57:24', '2019-11-10 03:57:24'),
(36, 'Car', 'Toyota Corolla', 2008, 22, 'black', 'Lahore', 'Used', 'Automatic', 'images/products/1573376652.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '2019-11-10 04:04:13', '2019-11-10 04:04:13'),
(37, 'Car', 'Audi A4', 2014, 20, 'black', 'Lahore', 'New', 'Manual', 'images/products/1573378510.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '2019-11-10 04:35:10', '2019-11-10 04:35:10'),
(38, 'Car', 'Audi A5', 2014, 21, 'black', 'Karachi', 'Used', 'Automatic', 'images/products/1573378743.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '2019-11-10 04:39:03', '2019-11-10 04:39:03'),
(39, 'Car', 'Audi A4', 2007, 21, 'black', 'Quetta', 'New', 'Manual', 'images/products/1573382600.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '2019-11-10 05:43:20', '2019-11-10 05:43:20'),
(40, 'Car', 'Audi A4', 2007, 21, 'black', 'Quetta', 'New', 'Manual', 'images/products/1573382645.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '2019-11-10 05:44:05', '2019-11-10 05:44:05'),
(41, 'Car', 'Audi A4', 2008, 15, 'black', 'Narowal', 'New', 'Automatic', 'images/products/1573383492.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '2019-11-10 05:58:13', '2019-11-10 05:58:13'),
(42, 'Car', 'Audi A3', 2009, 22, 'black', 'Quetta', 'Used', 'Manual', 'images/products/1573384417.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '2019-11-10 06:13:38', '2019-11-10 06:13:38'),
(43, 'Car', 'Audi A4', 2007, 12, 'black', 'Hyderabad', 'Used', 'Manual', 'images/products/1573384462.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '2019-11-10 06:14:23', '2019-11-10 06:14:23'),
(44, 'Car', 'Audi A5', 2008, 12, 'black', 'Hyderabad', 'Used', 'Manual', 'images/products/1573384501.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '2019-11-10 06:15:02', '2019-11-10 06:15:02'),
(45, 'Car', 'Audi A5', 2006, 23, 'black', 'Multan', 'Used', 'Automatic', 'images/products/1573842803.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '2019-11-15 13:33:25', '2019-11-15 13:33:25'),
(46, 'Car', 'Audi A4', 2007, 45, 'black', 'Narowal', 'Used', 'Manual', 'images/products/1573842851.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '2019-11-15 13:34:11', '2019-11-15 13:34:11'),
(47, 'Car', 'Audi A4', 2004, 22, 'black', 'Karachi', 'Used', 'Manual', 'images/products/1573843015.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '2019-11-15 13:36:56', '2019-11-15 13:36:56'),
(48, 'Car', 'Toyota Camry', 2006, 12, 'black', 'Lahore', 'New', 'Manual', 'images/products/1573884869.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '2019-11-16 01:14:31', '2019-11-16 01:14:31'),
(49, 'Car', 'Audi A5', 2006, 22, 'black', 'Sialkot', 'New', 'Manual', 'images/products/1573884958.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '2019-11-16 01:15:59', '2019-11-16 01:15:59'),
(50, 'Car', 'Toyota Camry', 2007, 12, 'black', 'Islamabad', 'New', 'Manual', 'images/products/1573885631.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '2019-11-16 01:27:12', '2019-11-16 01:27:12'),
(51, 'Car', 'Toyota Corolla', 2008, 12, 'black', 'Quetta', 'New', 'Manual', 'images/products/1573885709.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '2019-11-16 01:28:29', '2019-11-16 01:28:29'),
(52, 'Car', 'Toyota Camry', 2006, 11, 'black', 'Gujranwala', 'New', 'Manual', 'images/products/1573885797.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '2019-11-16 01:29:58', '2019-11-16 01:29:58'),
(53, 'Car', 'Toyota Corolla', 2008, 12, 'black', 'Quetta', 'New', 'Manual', 'images/products/1573921578.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '2019-11-16 11:26:19', '2019-11-16 11:26:19');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL DEFAULT 0,
  `review` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `product_id`, `rating`, `review`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 2, 'not so good Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque ', '2019-08-19 20:18:50', '2019-08-19 20:18:50'),
(2, 2, 16, 5, 'BEST SELLER Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque ', '2019-08-19 20:21:34', '2019-08-19 20:21:34'),
(3, 1, 16, 4, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque ', '2019-08-19 20:22:40', '2019-08-19 20:22:40'),
(4, 1, 3, 4, 'Satisfactory', '2019-10-05 06:31:51', '2019-10-05 06:31:51'),
(5, 1, 2, 5, 'A+', '2019-10-05 14:51:20', '2019-10-05 14:51:20'),
(6, 1, 17, 5, 'Best Product Ever', '2019-10-19 11:09:29', '2019-10-19 11:09:29'),
(7, 1, 17, 5, 'Dealing was too good with him', '2019-10-19 11:10:05', '2019-10-19 11:10:05'),
(8, 2, 11, 4, 'Best Quality', '2019-10-23 12:29:44', '2019-10-23 12:29:44');

-- --------------------------------------------------------

--
-- Table structure for table `rewards`
--

CREATE TABLE `rewards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `reward_points` int(11) DEFAULT 0,
  `free_ads` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rewards`
--

INSERT INTO `rewards` (`id`, `user_id`, `reward_points`, `free_ads`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 1, '2019-11-10 05:43:21', '2019-11-15 13:37:20'),
(2, 7, 0, 0, '2019-11-16 01:14:31', '2019-11-16 11:26:19'),
(3, 3, 0, 0, '2019-11-16 01:27:12', '2019-11-16 01:29:58');

-- --------------------------------------------------------

--
-- Table structure for table `searches`
--

CREATE TABLE `searches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `searches`
--

INSERT INTO `searches` (`id`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 1, 17, '2019-10-21 13:37:14', '2019-10-21 13:37:14'),
(2, 1, 17, '2019-10-21 13:37:41', '2019-10-21 13:37:41'),
(3, 2, 3, '2019-10-21 13:39:06', '2019-10-21 13:39:06'),
(4, 1, 17, '2019-10-21 14:32:52', '2019-10-21 14:32:52'),
(5, 1, 3, '2019-10-21 14:35:29', '2019-10-21 14:35:29'),
(6, 1, 7, '2019-10-21 14:40:01', '2019-10-21 14:40:01'),
(7, 1, 11, '2019-10-21 14:40:15', '2019-10-21 14:40:15'),
(8, 1, 1, '2019-10-21 14:40:35', '2019-10-21 14:40:35'),
(9, 2, 5, '2019-10-21 14:41:10', '2019-10-21 14:41:10'),
(10, 1, 11, '2019-10-21 15:30:44', '2019-10-21 15:30:44'),
(11, 1, 11, '2019-10-21 15:38:05', '2019-10-21 15:38:05'),
(12, 1, 11, '2019-10-21 15:38:50', '2019-10-21 15:38:50'),
(13, 1, 11, '2019-10-21 15:40:26', '2019-10-21 15:40:26'),
(14, 1, 3, '2019-10-21 15:49:18', '2019-10-21 15:49:18'),
(15, 2, 3, '2019-10-21 15:55:24', '2019-10-21 15:55:24'),
(16, 3, 7, '2019-10-23 10:16:20', '2019-10-23 10:16:20'),
(17, 3, 17, '2019-10-23 10:19:32', '2019-10-23 10:19:32'),
(18, 3, 17, '2019-10-23 10:24:07', '2019-10-23 10:24:07'),
(19, 3, 17, '2019-10-23 10:26:22', '2019-10-23 10:26:22'),
(20, 3, 17, '2019-10-23 10:26:55', '2019-10-23 10:26:55'),
(21, 2, 11, '2019-10-23 11:24:26', '2019-10-23 11:24:26'),
(22, 2, 11, '2019-10-23 12:28:55', '2019-10-23 12:28:55'),
(23, 2, 11, '2019-10-23 12:29:44', '2019-10-23 12:29:44'),
(24, 3, 20, '2019-10-24 12:35:25', '2019-10-24 12:35:25'),
(25, 6, 16, '2019-10-24 14:41:44', '2019-10-24 14:41:44'),
(26, 1, 3, '2019-11-09 08:10:56', '2019-11-09 08:10:56'),
(27, 1, 17, '2019-11-09 08:11:19', '2019-11-09 08:11:19'),
(28, 1, 18, '2019-11-09 08:15:51', '2019-11-09 08:15:51'),
(29, 1, 5, '2019-11-09 08:16:06', '2019-11-09 08:16:06'),
(30, 1, 9, '2019-11-09 08:16:22', '2019-11-09 08:16:22'),
(31, 1, 27, '2019-11-09 09:38:46', '2019-11-09 09:38:46'),
(32, 1, 23, '2019-11-09 09:40:30', '2019-11-09 09:40:30'),
(33, 1, 42, '2019-11-15 13:41:17', '2019-11-15 13:41:17'),
(34, 1, 5, '2019-11-15 13:42:52', '2019-11-15 13:42:52'),
(35, 1, 1, '2019-11-16 10:34:11', '2019-11-16 10:34:11'),
(36, 7, 3, '2019-11-16 11:25:21', '2019-11-16 11:25:21'),
(37, 1, 53, '2019-11-16 22:51:57', '2019-11-16 22:51:57'),
(38, 1, 53, '2019-11-16 22:53:38', '2019-11-16 22:53:38'),
(39, 1, 16, '2019-11-16 22:54:02', '2019-11-16 22:54:02'),
(40, 1, 16, '2019-11-16 22:54:43', '2019-11-16 22:54:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` bigint(20) NOT NULL,
  `address` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isAdmin` tinyint(1) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone_number`, `address`, `email`, `password`, `isAdmin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ahsan Waseem', 3214231121, 'Johar Town, Lahore', 'ahsan@gmail.com', '$2y$10$lgbX7T3omz35rclGL99Lw.eRudZuzbpJp0O2ACKWI6V4ElqM8qAnm', NULL, NULL, '2019-08-01 11:45:10', '2019-11-09 09:53:03'),
(2, 'Rameel Rehman', 3215421121, 'Johar Town, Lahore', 'rameel@gmail.com', '$2y$10$eE05lG7dMcx9PpOKZXEUZu4xcm.HDKR/fyrPai3ckv.Q5JfHPTgUK', NULL, NULL, '2019-08-01 13:34:35', '2019-08-01 13:34:35'),
(3, 'Sarmad Khan', 3215521123, 'Johar Town, Lahore', 'sarmad@gmail.com', '$2y$10$WtFKU.vVQAoa3dDMqZla4ONIllUzU8g.T8T5Aih9rCpwDif.YCbm.', NULL, NULL, '2019-08-01 15:29:57', '2019-08-01 15:29:57'),
(4, 'Hammad Hassan', 3218221121, 'Johar Town, lahore', 'hammad@gmail.com', '$2y$10$eAtKOKxKXtd6PVYTM.P0zubC9rRuF/9gh1SEMmU5NLwJHUaA0nk6i', NULL, NULL, '2019-10-19 09:05:19', '2019-10-19 09:05:19'),
(5, 'New Person', 3214231141, 'Johar Town, lahore', 'person@gmail.com', '$2y$10$ltHi45UAxQO2Q5KJS6H8nOv29HDJFdZ2HTCmr/RiNL5AoHb72KCGO', NULL, NULL, '2019-10-24 13:54:59', '2019-10-24 13:54:59'),
(6, 'Test user', 3214231121, 'Johar Town, lahore', 'test@gmail.com', '$2y$10$Aoqkxarvv.ihGFRb10B8qO28vZXQRmz.3WCvUvFvcgN5K6S0GgRM6', NULL, NULL, '2019-10-24 14:41:25', '2019-10-24 14:41:25'),
(7, 'Rameel Rai', 3214231162, 'Comsats University', 'rameelrai001@gmail.com', '$2y$10$Rdo1FEeOnAO..L8EHHyB6e2kINkLeehA.2o33RVOM9VYAMRQg2v5C', NULL, NULL, '2019-11-11 13:18:17', '2019-11-15 13:30:39'),
(8, 'Administrator', 3214211211, 'COMSATS University', 'admin@gmail.com', '$2y$10$Qw/sqaOE2C6d65gQeTb7ZuxxH3fwfYUqyFRYNT5dj2XEbg2z5Vdfi', 1, NULL, '2019-11-16 09:33:38', '2019-11-16 09:33:38');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(34, 2, 3, '2019-10-21 15:55:27', '2019-10-21 15:55:27'),
(42, 2, 17, '2019-10-23 11:24:31', '2019-10-23 11:24:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buyer_requests`
--
ALTER TABLE `buyer_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rewards`
--
ALTER TABLE `rewards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `searches`
--
ALTER TABLE `searches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foriegn_key_product_1` (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foriegn_key_product_2` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `buyer_requests`
--
ALTER TABLE `buyer_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rewards`
--
ALTER TABLE `rewards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `searches`
--
ALTER TABLE `searches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `searches`
--
ALTER TABLE `searches`
  ADD CONSTRAINT `foriegn_key_product_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD CONSTRAINT `foriegn_key_product_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
