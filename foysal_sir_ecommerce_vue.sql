-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 12, 2023 at 09:25 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foysal_sir_ecommerce_vue`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1 = published , 0 = unPublished',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'DELL', 'adminAssets/upload-image/brand-image/DELL-1577873058.jpg', 1, '2023-04-12 12:30:37', '2023-04-12 12:30:37'),
(2, 'HP', 'adminAssets/upload-image/brand-image/HP-719082087.jpg', 1, '2023-04-12 12:30:46', '2023-04-12 12:30:46');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1 = published , 0 = unPublished',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Laptop', 'adminAssets/upload-image/category-image/Laptop-490079973.jpg', 1, '2023-04-12 12:29:05', '2023-04-12 12:29:05');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `color_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1 = Published,0 = Unpublished',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `color_name`, `color_code`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Black', 'B1', 1, '2023-04-12 12:32:01', '2023-04-12 12:32:01'),
(2, 'Green', 'G1', 1, '2023-04-12 12:32:05', '2023-04-12 12:32:05'),
(3, 'RED', 'R1', 1, '2023-04-12 12:32:10', '2023-04-12 12:32:10');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_03_10_163654_create_sessions_table', 1),
(7, '2023_03_17_033205_create_categories_table', 1),
(8, '2023_03_24_140716_create_brands_table', 1),
(9, '2023_03_24_154458_create_colors_table', 1),
(10, '2023_03_28_160354_create_sizes_table', 1),
(11, '2023_03_31_053418_create_suppliers_table', 1),
(12, '2023_03_31_142033_create_sub_categories_table', 1),
(13, '2023_03_31_154927_create_products_table', 1),
(14, '2023_03_31_174804_create_product_sub_images_table', 1),
(15, '2023_04_04_170806_create_product_colors_table', 1),
(16, '2023_04_07_065043_create_product_sizes_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_category_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supplier_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double DEFAULT NULL,
  `dis_amount` double DEFAULT NULL,
  `dis_price` double DEFAULT NULL,
  `main_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secondary_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `sub_category_id`, `brand_id`, `supplier_id`, `product_name`, `product_code`, `price`, `dis_amount`, `dis_price`, `main_image`, `secondary_image`, `created_at`, `updated_at`) VALUES
(1, '1', '2', '1', '1', 'Tamara Everett', 'Possimus non enim s', 500, 50, 450, 'adminAssets/upload-image/main-image/Tamara Everett-511189935.jpg', 'adminAssets/upload-image/secondary-image/Tamara Everett-1206818569.jpg', '2023-04-12 12:50:08', '2023-04-12 12:50:08'),
(2, '1', '2', '1', '1', 'Tamara Everett', 'Possimus non enim s', 500, 50, 450, 'adminAssets/upload-image/main-image/Tamara Everett-1626150697.jpg', 'adminAssets/upload-image/secondary-image/Tamara Everett-996089365.jpg', '2023-04-12 12:50:31', '2023-04-12 12:50:31'),
(3, '1', '2', '1', '1', 'Joy Shaw', 'Voluptatibus quis en', 37, 25, 191, 'adminAssets/upload-image/main-image/Joy Shaw-60430897.jpg', 'adminAssets/upload-image/secondary-image/Joy Shaw-1957241753.jpg', '2023-04-12 19:13:05', '2023-04-12 19:13:05'),
(4, '1', '2', '1', '1', 'Tamara Everett', 'Possimus non enim s', 500, 50, 450, 'adminAssets/upload-image/main-image/Tamara Everett-511189935.jpg', 'adminAssets/upload-image/secondary-image/Tamara Everett-1206818569.jpg', '2023-04-12 12:50:08', '2023-04-12 12:50:08'),
(5, '1', '2', '1', '1', 'Tamara Everett', 'Possimus non enim s', 500, 50, 450, 'adminAssets/upload-image/main-image/Tamara Everett-1626150697.jpg', 'adminAssets/upload-image/secondary-image/Tamara Everett-996089365.jpg', '2023-04-12 12:50:31', '2023-04-12 12:50:31'),
(6, '1', '2', '1', '1', 'Joy Shaw', 'Voluptatibus quis en', 37, 25, 191, 'adminAssets/upload-image/main-image/Joy Shaw-60430897.jpg', 'adminAssets/upload-image/secondary-image/Joy Shaw-1957241753.jpg', '2023-04-12 19:13:05', '2023-04-12 19:13:05'),
(7, '1', '2', '1', '1', 'Tamara Everett', 'Possimus non enim s', 500, 50, 450, 'adminAssets/upload-image/main-image/Tamara Everett-511189935.jpg', 'adminAssets/upload-image/secondary-image/Tamara Everett-1206818569.jpg', '2023-04-12 12:50:08', '2023-04-12 12:50:08'),
(8, '1', '2', '1', '1', 'Tamara Everett', 'Possimus non enim s', 500, 50, 450, 'adminAssets/upload-image/main-image/Tamara Everett-1626150697.jpg', 'adminAssets/upload-image/secondary-image/Tamara Everett-996089365.jpg', '2023-04-12 12:50:31', '2023-04-12 12:50:31'),
(9, '1', '2', '1', '1', 'Joy Shaw', 'Voluptatibus quis en', 37, 25, 191, 'adminAssets/upload-image/main-image/Joy Shaw-60430897.jpg', 'adminAssets/upload-image/secondary-image/Joy Shaw-1957241753.jpg', '2023-04-12 19:13:05', '2023-04-12 19:13:05'),
(10, '1', '2', '1', '1', 'Tamara Everett', 'Possimus non enim s', 500, 50, 450, 'adminAssets/upload-image/main-image/Tamara Everett-511189935.jpg', 'adminAssets/upload-image/secondary-image/Tamara Everett-1206818569.jpg', '2023-04-12 12:50:08', '2023-04-12 12:50:08'),
(11, '1', '2', '1', '1', 'Tamara Everett', 'Possimus non enim s', 500, 50, 450, 'adminAssets/upload-image/main-image/Tamara Everett-1626150697.jpg', 'adminAssets/upload-image/secondary-image/Tamara Everett-996089365.jpg', '2023-04-12 12:50:31', '2023-04-12 12:50:31'),
(12, '1', '2', '1', '1', 'Joy Shaw', 'Voluptatibus quis en', 37, 25, 191, 'adminAssets/upload-image/main-image/Joy Shaw-60430897.jpg', 'adminAssets/upload-image/secondary-image/Joy Shaw-1957241753.jpg', '2023-04-12 19:13:05', '2023-04-12 19:13:05');

-- --------------------------------------------------------

--
-- Table structure for table `product_colors`
--

CREATE TABLE `product_colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_colors`
--

INSERT INTO `product_colors` (`id`, `product_id`, `color_id`, `created_at`, `updated_at`) VALUES
(1, '2', '2', '2023-04-12 12:50:31', '2023-04-12 12:50:31'),
(2, '2', '3', '2023-04-12 12:50:31', '2023-04-12 12:50:31'),
(3, '3', '2', '2023-04-12 19:13:05', '2023-04-12 19:13:05');

-- --------------------------------------------------------

--
-- Table structure for table `product_sizes`
--

CREATE TABLE `product_sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_sizes`
--

INSERT INTO `product_sizes` (`id`, `product_id`, `size_id`, `created_at`, `updated_at`) VALUES
(1, '2', '2', '2023-04-12 12:50:31', '2023-04-12 12:50:31'),
(2, '2', '5', '2023-04-12 12:50:31', '2023-04-12 12:50:31'),
(3, '3', '3', '2023-04-12 19:13:05', '2023-04-12 19:13:05');

-- --------------------------------------------------------

--
-- Table structure for table `product_sub_images`
--

CREATE TABLE `product_sub_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_sub_images`
--

INSERT INTO `product_sub_images` (`id`, `product_id`, `sub_image`, `created_at`, `updated_at`) VALUES
(1, '2', 'adminAssets/upload-image/sub-image/1711729953.jpg', '2023-04-12 12:50:31', '2023-04-12 12:50:31'),
(2, '2', 'adminAssets/upload-image/sub-image/2055909998.jpg', '2023-04-12 12:50:31', '2023-04-12 12:50:31'),
(3, '2', 'adminAssets/upload-image/sub-image/427079776.jpg', '2023-04-12 12:50:31', '2023-04-12 12:50:31'),
(4, '2', 'adminAssets/upload-image/sub-image/185232648.jpg', '2023-04-12 12:50:31', '2023-04-12 12:50:31'),
(5, '2', 'adminAssets/upload-image/sub-image/1535308035.jpg', '2023-04-12 12:50:31', '2023-04-12 12:50:31'),
(6, '1', 'adminAssets/upload-image/sub-image/1711729953.jpg', '2023-04-12 12:50:31', '2023-04-12 12:50:31'),
(7, '1', 'adminAssets/upload-image/sub-image/2055909998.jpg', '2023-04-12 12:50:31', '2023-04-12 12:50:31'),
(8, '1', 'adminAssets/upload-image/sub-image/427079776.jpg', '2023-04-12 12:50:31', '2023-04-12 12:50:31'),
(9, '1', 'adminAssets/upload-image/sub-image/185232648.jpg', '2023-04-12 12:50:31', '2023-04-12 12:50:31'),
(10, '1', 'adminAssets/upload-image/sub-image/1535308035.jpg', '2023-04-12 12:50:31', '2023-04-12 12:50:31'),
(11, '3', 'adminAssets/upload-image/sub-image/1513770907.jpg', '2023-04-12 19:13:05', '2023-04-12 19:13:05'),
(12, '3', 'adminAssets/upload-image/sub-image/898750826.jpg', '2023-04-12 19:13:05', '2023-04-12 19:13:05'),
(13, '3', 'adminAssets/upload-image/sub-image/880837689.jpg', '2023-04-12 19:13:05', '2023-04-12 19:13:05'),
(14, '3', 'adminAssets/upload-image/sub-image/1174794943.jpg', '2023-04-12 19:13:05', '2023-04-12 19:13:05');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('gMUU3xiaFEC57suo4WJXS8GB2iGyjfPVnj5xu99X', NULL, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.3 Safari/605.1.15', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiODNYOFRHb2MxZTlGNXNYMjZka2FOVHFGTlJ6UDZJNWw5cDBrb2hxOCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDY6Imh0dHA6Ly9sb2NhbGhvc3QvZWNvbW1lcmNlLXZ1ZS9wdWJsaWMvcmVnaXN0ZXIiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1681323972),
('J4FB54cu2BHJvpUn5rM9M9NvgpA0gEmNjc2mmw3R', 1, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiRjAzRmppTW85RlJiMXBLWGV3dFBUaGYzM3c1QlJ4SkJuYVRWNDVLTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly9sb2NhbGhvc3QvZWNvbW1lcmNlLXZ1ZS9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJGhhMHFPSWgwSi5STzZ4cS5MQ3c0ZnVsWS5ld0RrS1FrUWJaTWdKSS5YdE5idGxvZUlzM0tPIjt9', 1681327339),
('yrylV31eY6Dy9zhzEKLRX9HAmHUeGiDFxGCXH0Ep', NULL, '::1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQmJ3ODJRdjhSZm55VEVxUlZBVHZwWktCT01sQUlzQ1ZnZzVVOWhRSyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly9sb2NhbGhvc3QvZWNvbW1lcmNlLXZ1ZS9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1681326230);

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `size_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=Published,0=Unpublished',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `size_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'S', 1, '2023-04-12 12:32:22', '2023-04-12 12:32:22'),
(2, 'M', 1, '2023-04-12 12:32:24', '2023-04-12 12:32:24'),
(3, 'L', 1, '2023-04-12 12:32:29', '2023-04-12 12:32:29'),
(4, 'XL', 1, '2023-04-12 12:32:33', '2023-04-12 12:32:33'),
(5, 'XXL', 1, '2023-04-12 12:32:37', '2023-04-12 12:32:37');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=Published,0=Unpublished',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'HP', 1, '2023-04-12 12:29:53', '2023-04-12 12:29:53'),
(2, 1, 'DELL', 1, '2023-04-12 12:29:57', '2023-04-12 12:29:57');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(20) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `account` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=Published,0=Unpublished',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `phone`, `email`, `image`, `account`, `address`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Tiger Puckett', 171542121, 'xerem@mailinator.com', 'adminAssets/upload-image/supplier-image/Tiger Puckett-329342621.jpg', '030297', 'Enim deserunt placea', 1, '2023-04-12 12:31:52', '2023-04-12 12:31:52');

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
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Sohag', 'admin@gmail.com', NULL, '$2y$10$ha0qOIh0J.RO6xq.LCw4fulY.ewDkKQkQbZMgJI.XtNbtloeIs3KO', NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-12 12:27:21', '2023-04-12 12:27:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_colors`
--
ALTER TABLE `product_colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_sizes`
--
ALTER TABLE `product_sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_sub_images`
--
ALTER TABLE `product_sub_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
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
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product_colors`
--
ALTER TABLE `product_colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_sizes`
--
ALTER TABLE `product_sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_sub_images`
--
ALTER TABLE `product_sub_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
