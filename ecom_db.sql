-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 08, 2024 at 01:32 AM
-- Server version: 10.6.17-MariaDB-cll-lve
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `street` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip_code` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `user_id`, `street`, `city`, `state`, `zip_code`, `created_at`, `updated_at`) VALUES
(4, 8, 'Charmugoria', 'Madaripur', 'dhaka', '7901', '2023-10-09 01:08:28', '2023-10-09 01:08:28'),
(5, 9, 'khulna', 'khulna', 'dhaka', '7901', '2023-10-15 22:01:56', '2023-10-15 22:01:56'),
(6, 10, 'asfcsac', 'Madaripur', 'dhaka', '7901', '2023-10-19 00:04:45', '2023-10-19 00:04:45');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(255) NOT NULL DEFAULT 'admin',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `image`, `content`, `author`, `created_at`, `updated_at`, `status`) VALUES
(1, 'xcbv', '1697506124_boy-8182923_1280.jpg', 'sdgvdfv', 'admin', '2023-10-16 19:28:44', '2023-10-16 19:28:44', 'active'),
(2, 'mehedi', '1697506163_freedom-2940655_1280.jpg', 'sdgesgsdg', 'admin', '2023-10-16 19:29:23', '2023-10-16 19:29:23', 'active'),
(3, 'fddfgdg', '1697506171_sajal.jpg', 'dfgdgf sgdsdg adgfsa gasgas', 'admin', '2023-10-16 19:29:31', '2023-10-16 19:29:31', 'active'),
(4, 'dfgda', '1697506179_swimmer-1678307_1280.jpg', 'sgdasdgf vegrhtk vdfbdfb', 'admin', '2023-10-16 19:29:39', '2023-10-16 19:29:39', 'active'),
(5, 'fddfgdg', '1697506188_sajal.jpg', 'dfgdgf sgdsdg adgfsa gasgas', 'admin', '2023-10-16 19:29:48', '2023-10-16 19:29:48', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `created_at`, `updated_at`) VALUES
(1, 'Easy', '2023-10-08 23:37:13', '2023-10-08 23:37:13'),
(2, 'Appel', '2023-10-08 23:37:21', '2023-10-08 23:37:21'),
(3, 'Honda', '2023-10-08 23:37:29', '2023-10-08 23:37:29'),
(4, 'Yamaha', '2023-10-08 23:37:35', '2023-10-08 23:37:35'),
(5, 'Others', '2023-10-08 23:45:21', '2023-10-08 23:45:21');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `quantity`, `created_at`, `updated_at`) VALUES
(5, 9, 14, 10, '2023-10-15 22:09:35', '2023-10-15 22:09:47'),
(6, 9, 6, 2, '2023-10-15 22:09:59', '2023-10-15 22:09:59'),
(7, 9, 7, 1, '2023-10-17 22:01:09', '2023-10-17 22:01:09'),
(8, 9, 8, 2, '2023-10-17 22:01:18', '2023-10-17 22:01:24'),
(9, 9, 12, 2, '2023-10-17 22:02:26', '2023-10-17 22:02:34'),
(10, 9, 9, 1, '2023-10-17 22:04:32', '2023-10-17 22:04:32'),
(13, 10, 11, 1, '2023-10-19 02:07:21', '2023-10-19 02:07:21'),
(14, 10, 8, 1, '2023-10-19 02:07:30', '2023-10-19 02:07:30'),
(20, 8, 7, 1, '2023-12-27 14:09:25', '2023-12-27 14:09:25');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Tops', '2023-10-08 22:06:28', '2023-10-08 22:06:28'),
(2, 'Shari', '2023-10-08 22:06:54', '2023-10-08 22:06:54'),
(4, 'T shart', '2023-10-08 22:07:09', '2023-10-08 22:07:09'),
(5, 'Others', '2023-10-08 23:45:44', '2023-10-08 23:45:44'),
(6, 'Pant', '2023-10-13 19:56:03', '2023-10-13 19:56:03');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_10_05_065638_add_verify_to_users_table', 2),
(7, '2023_10_05_065921_add_verify_to_users_table', 3),
(8, '2023_10_05_070709_create_users_table', 4),
(9, '2023_10_05_083247_create_users_table', 5),
(10, '2023_10_05_085913_create_addresses_table', 6),
(11, '2023_10_09_033611_create_categories_table', 7),
(12, '2023_10_09_052608_create_brands_table', 8),
(13, '2023_10_09_061421_create_products_table', 9),
(14, '2023_10_09_075516_create_product_reviews_table', 9),
(15, '2023_10_15_161213_create_carts_table', 10),
(16, '2023_10_15_161739_create_carts_table', 11),
(17, '2023_10_16_014626_create_slide_shows_table', 12),
(18, '2023_10_17_004336_create_blogs_table', 13),
(19, '2023_10_18_003850_create_product_reviews_table', 14),
(20, '2023_10_19_082145_create_orders_table', 15),
(21, '2023_10_19_084427_create_order_details_table', 16);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('pending','processing','completed','cancelled') NOT NULL DEFAULT 'pending',
  `total_price` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `status`, `total_price`, `created_at`, `updated_at`) VALUES
(4, 8, 'pending', 956.00, '2023-10-19 05:41:28', '2023-10-19 05:41:28'),
(5, 8, 'pending', 1156.00, '2023-10-19 06:30:14', '2023-10-19 06:30:14');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(5, 4, 11, 1, 456.00, '2023-10-19 05:41:28', '2023-10-19 05:41:28'),
(6, 4, 4, 1, 500.00, '2023-10-19 05:41:28', '2023-10-19 05:41:28'),
(7, 5, 13, 1, 45.00, '2023-10-19 06:30:14', '2023-10-19 06:30:14'),
(8, 5, 7, 1, 655.00, '2023-10-19 06:30:14', '2023-10-19 06:30:14'),
(9, 5, 11, 1, 456.00, '2023-10-19 06:30:14', '2023-10-19 06:30:14');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `short_description` text NOT NULL,
  `description` text NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `discount` decimal(4,2) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `image`, `short_description`, `description`, `category_id`, `brand_id`, `type`, `price`, `discount`, `status`, `created_at`, `updated_at`) VALUES
(4, 'First Product', '[\"1697249415_swimmer-1678307_1280.jpg\",\"1697249415_freedom-2940655_1280.jpg\",\"1697249415_boy-8182923_1280.jpg\"]', 'This is a short description', 'This is description', 6, 1, 'boy', 500.00, 5.00, 'active', '2023-10-13 20:10:15', '2023-10-13 20:10:15'),
(6, 'mehedi', '[\"1697253390_boy-8182923_1280.jpg\"]', 'sdfdfgsd', 'gdfgdfg', 1, 1, 'boy', 454.00, 45.00, 'active', '2023-10-13 21:16:30', '2023-10-13 21:16:30'),
(7, 'sadsdf', '[\"1697253403_swimmer-1678307_1280.jpg\"]', 'fsdfsadf', 'sfdsdf', 2, 1, 'boy', 655.00, 56.00, 'active', '2023-10-13 21:16:43', '2023-10-13 21:16:43'),
(8, 'First Product', '[\"1697253533_freedom-2940655_1280.jpg\"]', 'fcbgdf', 'dgdfg', 1, 1, 'boy', 45.00, 45.00, 'active', '2023-10-13 21:18:53', '2023-10-13 21:18:53'),
(9, 'First Product', '[\"1697253543_swimmer-1678307_1280.jpg\"]', 'dxzfsdf', 'sdfsdgas', 1, 1, 'boy', 465.00, 56.00, 'active', '2023-10-13 21:19:03', '2023-10-13 21:19:03'),
(10, 'sadsdf', '[\"1697253558_boy-8182923_1280.jpg\"]', 'sdfsdf', 'asfdsdfasf', 1, 1, 'boy', 78.00, 5.00, 'active', '2023-10-13 21:19:18', '2023-10-13 21:19:18'),
(11, 'dfhgd', '[\"1697253609_wallpaperflare.com_wallpaper (2).jpg\"]', 'sdgdsfg', 'sdgfsdfg', 4, 1, 'boy', 456.00, 4.00, 'active', '2023-10-13 21:20:10', '2023-10-13 21:20:10'),
(12, 'sdfdfg', '[\"1697253623_swimmer-1678307_1280.jpg\"]', 'sdfdfg', 'dsfgadg', 5, 1, 'boy', 45.00, 5.00, 'active', '2023-10-13 21:20:23', '2023-10-13 21:20:23'),
(13, 'dfhgdsfsdf', '[\"1697255436_swimmer-1678307_1280.jpg\",\"1697255436_freedom-2940655_1280.jpg\",\"1697255436_boy-8182923_1280.jpg\"]', 'dgsdgd', 'gdgdfh', 1, 1, 'boy', 45.00, 5.00, 'active', '2023-10-13 21:50:36', '2023-10-13 21:50:36'),
(14, 'product 4', '[\"1697429076__53a0a3a5-8042-4b48-84ed-eff4daaec764.jpg\"]', 'dgdfhfgjhgf', 'fghfgh hfddghfghfgh', 6, 2, 'boy', 600.00, 5.00, 'active', '2023-10-15 22:04:36', '2023-10-15 22:04:36');

-- --------------------------------------------------------

--
-- Table structure for table `product_reviews`
--

CREATE TABLE `product_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `comment` text DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `like` int(11) DEFAULT NULL,
  `dislike` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_reviews`
--

INSERT INTO `product_reviews` (`id`, `product_id`, `user_id`, `comment`, `rating`, `like`, `dislike`, `created_at`, `updated_at`) VALUES
(1, 4, 8, 'My name is mehedi', 3, NULL, NULL, '2023-10-17 18:58:38', '2023-10-17 18:58:38'),
(2, 4, 8, 'this is again', 5, NULL, NULL, '2023-10-17 19:25:41', '2023-10-17 19:25:41'),
(3, 4, 9, 'hey i am here', 4, NULL, NULL, '2023-10-17 19:27:54', '2023-10-17 19:27:54'),
(4, 4, 9, NULL, 3, NULL, NULL, '2023-10-17 19:30:55', '2023-10-17 19:30:55'),
(5, 4, 9, 'dfgdg', NULL, NULL, NULL, '2023-10-17 19:33:34', '2023-10-17 19:33:34'),
(6, 4, 9, 'dlgnhdfg', NULL, NULL, NULL, '2023-10-17 19:52:55', '2023-10-17 19:52:55'),
(7, 11, 8, 'zseetw wger', 4, NULL, NULL, '2023-10-18 18:22:51', '2023-10-18 18:22:51'),
(8, 14, 8, 'sdfjksdhfs', 4, NULL, NULL, '2023-10-18 22:50:53', '2023-10-18 22:50:53'),
(9, 14, 8, 'xcfbdbg', 5, NULL, NULL, '2023-10-18 22:51:20', '2023-10-18 22:51:20'),
(10, 14, 8, 'safs gdsg', 3, NULL, NULL, '2023-10-18 22:51:36', '2023-10-18 22:51:36'),
(11, 14, 8, 'sdgsdgdfgsdg', 2, NULL, NULL, '2023-10-18 22:51:53', '2023-10-18 22:51:53'),
(12, 6, 10, NULL, 5, NULL, NULL, '2023-10-19 02:06:30', '2023-10-19 02:06:30');

-- --------------------------------------------------------

--
-- Table structure for table `slide_shows`
--

CREATE TABLE `slide_shows` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `type` enum('home','offer') NOT NULL DEFAULT 'home',
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slide_shows`
--

INSERT INTO `slide_shows` (`id`, `image`, `type`, `status`, `created_at`, `updated_at`) VALUES
(1, '1697422152_swimmer-1678307_1280.jpg', 'home', 'active', '2023-10-15 20:09:12', '2023-10-15 20:09:12'),
(2, '1697422160_freedom-2940655_1280.jpg', 'offer', 'active', '2023-10-15 20:09:20', '2023-10-15 20:09:20'),
(3, '1697428984_freedom-2940655_1280.jpg', 'home', 'active', '2023-10-15 22:03:04', '2023-10-15 22:03:04'),
(4, '1697429005_wallpaperflare.com_wallpaper (2).jpg', 'offer', 'active', '2023-10-15 22:03:25', '2023-10-15 22:03:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `birth_date` varchar(255) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('user','admin') NOT NULL DEFAULT 'user',
  `verify` enum('active','inactive') NOT NULL DEFAULT 'inactive',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `image`, `email`, `phone_number`, `birth_date`, `gender`, `email_verified_at`, `password`, `role`, `verify`, `remember_token`, `created_at`, `updated_at`) VALUES
(8, 'Mehedi', 'Hasan', NULL, 'mehedimridhacse@gmail.com', '01916813369', '22/06/1999', 'male', NULL, '$2y$10$zbKO.Jf1J8qVb14tpzNt4.ZKBLb.zkxYe8qkGZr5bpKaiazOpQave', 'user', 'inactive', NULL, '2023-10-09 01:08:28', '2023-10-09 01:08:28'),
(9, 'amit', 'vai', NULL, 'amit@gmail.com', '01916813369', '22/06/1999', 'male', NULL, '$2y$10$csiSuntrI1adTIVu2y/TJ.OGE.sdV847IobvfwbKojO73luDS99Q.', 'user', 'inactive', NULL, '2023-10-15 22:01:56', '2023-10-15 22:01:56'),
(10, 'Mehedi', 'Hasan', NULL, 'admin@gmail.com', '01916813369', '22/06/1999', 'male', NULL, '$2y$10$noVxCxU6zTWYAkgcLOJXZu6ip.GBIP.mL8az8TfP6iT3YoSJXKkA6', 'admin', 'inactive', NULL, '2023-10-19 00:04:45', '2023-10-19 00:04:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addresses_userid_foreign` (`user_id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_product_id_foreign` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_order_id_foreign` (`order_id`),
  ADD KEY `order_details_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_brand_id_foreign` (`brand_id`);

--
-- Indexes for table `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_reviews_product_id_foreign` (`product_id`),
  ADD KEY `product_reviews_user_id_foreign` (`user_id`);

--
-- Indexes for table `slide_shows`
--
ALTER TABLE `slide_shows`
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
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product_reviews`
--
ALTER TABLE `product_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `slide_shows`
--
ALTER TABLE `slide_shows`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_userid_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD CONSTRAINT `product_reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
