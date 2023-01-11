-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2022 at 12:16 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taoshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart__details`
--

CREATE TABLE `cart__details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shopping_cart_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `total_quantity` int(11) NOT NULL,
  `total_price` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_code` varchar(255) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_code`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'CC-0638', 'IPhone', '2018-06-26 02:11:36', '2018-03-16 11:35:16'),
(2, 'CC-6148', 'IPad', NULL, '1990-08-15 04:37:55'),
(3, 'CC-8739', 'Airpods', '2000-05-01 22:33:33', '1993-01-13 17:22:49'),
(4, 'CC-9302', 'Phụ kiện', NULL, NULL);

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
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(13, '2022_12_06_055221_create_categories_table', 1),
(14, '2022_12_06_055637_create_products_table', 1),
(15, '2022_12_06_155138_create_shopping__carts_table', 1),
(16, '2022_12_06_155148_create_cart__details_table', 1);

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
  `product_name` varchar(255) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `price` bigint(20) NOT NULL,
  `screen` varchar(255) NOT NULL,
  `pin` varchar(255) NOT NULL,
  `screen_resolution` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `chip` varchar(255) NOT NULL,
  `discount` int(11) NOT NULL DEFAULT 0,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `category_id`, `price`, `screen`, `pin`, `screen_resolution`, `weight`, `chip`, `discount`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Apple iPhone 14 128GB\r\n', 1, 20490000, '6.1 inches', '3200 mAh', '2532 x 1170 Pixels', '172g', 'A15 Bionic', 10, 'Apple iPhone 14.png', NULL, NULL),
(2, 'Apple iPhone 14 256GB\r\n', 1, 220990000, '6.1 inches', '3279 mAh', '2532 x 1170 Pixels', '172g', 'A15 Bionic', 0, 'Apple iPhone 14 256GB.png', NULL, NULL),
(3, 'Apple iPhone 14 512GB\r\n', 1, 28990000, '6.1 inches', '3279 mAh', '2532 x 1170 Pixels', '172g', 'A15 Bionic', 0, 'Apple iPhone 14 512GB.png', NULL, NULL),
(4, 'Apple iPhone 14 Plus 128GB\r\n', 1, 23990000, '6.7 inches', '4325 mAh', '1284 x 2778 Pixels', '203g', 'A15 Bionic 6 nhân', 0, 'Apple iPhone 14 Plus 128GB.png', NULL, NULL),
(5, 'Apple iPhone 14 Plus 256GB\r\n', 1, 26490000, '6.7 inches', '4325 mAh', '1284 x 2778 Pixels', '203g', 'A15 Bionic 6 nhân', 0, 'Apple iPhone 14 Plus 256GB.png', NULL, NULL),
(6, 'Apple iPhone 14 Plus 512GB\r\n', 1, 31990000, '6.7 inches', '4325 mAh', '1284 x 2778 Pixels', '203g', 'A15 Bionic 6 nhân', 19, 'Apple iPhone 14 Plus 512GB.png', NULL, NULL),
(7, 'Apple iPhone 14 Pro', 1, 28490000, '6.1 inches', '3200 mAh', '2556 x 1179 Pixels', '206g', 'A16 Bionic 6 nhân', 16, 'Apple iPhone 14 Pro.png', NULL, NULL),
(8, 'Apple iPhone 14 Pro 256GB', 1, 30790000, '6.1 inches', '3200 mAh', '2556 x 1179 Pixel', '206g', 'A16 Bionic 6 nhân', 10, 'Apple iPhone 14 Pro 256GB.png', NULL, NULL),
(9, 'Apple iPhone 14 Pro 512GB\r\n', 1, 35990000, '6.1 inches', '3200 mAh', '2556 x 1179 Pixels', '206g', 'A16 Bionic 6 nhân', 12, 'Apple iPhone 14 Pro 512GB.png', NULL, NULL),
(10, 'Apple iPhone 14 Pro 1TB\r\n', 1, 41990000, '6.1 inches', '3200 mAh', '2556 x 1179 Pixels', '206g', 'A16 Bionic 6 nhân', 15, 'Apple iPhone 14 Pro 1TB.png', NULL, NULL),
(11, 'Apple iPhone 14 Pro Max 1TB\r\n', 1, 45590000, '6.7 inches', '\r\n4323 mAh', '2796 x 1290 Pixels', '240g', 'A16 Bionic 6 nhân', 15, 'Apple iPhone 14 Pro Max 1TB.png', NULL, NULL),
(12, 'Apple iPhone 14 Pro Max \r\n', 1, 31490000, '6.7 inches', '4323 mAh', '2796 x 1290 Pixels', '240g', 'A16 Bionic 6 nhân', 0, 'Apple iPhone 14 Pro Max.png', NULL, NULL),
(14, 'Apple iPhone 14 Pro Max 256GB\r\n', 1, 36590000, '6.7 inches', '4323 mAh', '2796 x 1290 Pixels', '240g', 'A16 Bionic 6 nhân', 11, 'Apple iPhone 14 Pro Max 256GB.png', NULL, NULL),
(15, 'Apple iPhone 14 Pro Max 512GB', 1, 43990000, '6.7 inches', '\r\n4323 mAh', 'Apple iPhone 14 Pro Max 512GB', '240g', 'A16 Bionic 6 nhân', 0, 'Apple iPhone 14 Pro Max 512GB.png', NULL, NULL),
(16, 'Apple iPhone 13 128GB', 1, 25490000, '6.1 inches', '3240 mAh', '1170 x 2532 Pixels', '174g', 'A15 Bionic 6 nhân', 0, 'Apple iPhone 13 128GB.png', NULL, NULL),
(17, 'Apple iPhone 13 256GB', 1, 21490000, '6.1 inches', '3240 mAh', '1170 x 2532 Pixels', '174g', 'A15 Bionic 6 nhân', 22, 'Apple iPhone 13 256GB.png', NULL, NULL),
(18, 'Apple iPhone 13 Mini 512GB', 1, 26790000, '5.4 inches', '\r\n2438 mAh', 'Full HD+ (1080 x 2430 Pixels)', '141g', 'A15 Bionic 6 nhân', 10, 'Apple iPhone 13 Mini 512GB.png', NULL, NULL),
(19, 'Apple iPhone 13 Mini 128GB', 1, 17490000, '5.4 inches', '2438 mAh', 'Full HD+ (1080 x 2340 Pixels)', '141g', 'A15 Bionic 6 nhân', 0, 'Apple iPhone 13 Mini 128GB.png', NULL, NULL),
(20, 'Apple iPhone 13 Pro 128GB', 1, 23490000, '6.1 inches', '3095 mAh', 'Super Retina XDR (1170 x 2532 Pixels)', '204g', 'A15 Bionic 6 nhân', 20, 'Apple iPhone 13 Pro 128GB.png', NULL, NULL),
(21, 'Apple iPhone 13 512GB', 1, 24990000, '6.1 inches', '\r\n3240 mAh', '1170 x 2532 Pixels', '174g', 'A15 Bionic 6 nhân', 0, 'Apple iPhone 13 512GB.png', NULL, NULL),
(22, 'Apple iPhone 13 Pro 256GB', 1, 26690000, '6.1 inches', '3095 mAh', 'Super Retina XDR (1170 x 2532 Pixels)', '204g', 'A15 Bionic 6 nhân', 21, 'Apple iPhone 13 Pro 256GB.png', NULL, NULL),
(23, 'Apple iPhone 13 Pro 512GB', 1, 32490000, '6.1 inches', '3095 mAh', 'Super Retina XDR (1170 x 2532 Pixels)', '204g', 'A15 Bionic 6 nhân', 27, 'Apple iPhone 13 Pro 512GB.png', NULL, NULL),
(24, 'Apple iPhone 13 Pro Max 128GB', 1, 26150000, '6.7 inches', '4352 mAh', 'Super Retina XDR (1284 x 2778 Pixels)', '240g', 'A15 Bionic 6 nhân', 0, 'Apple iPhone 13 Pro Max 128GB.png', NULL, NULL),
(25, 'Apple iPhone 13 Pro 1TB', 1, 37490000, '6.1 inches', '3095 mAh', 'Super Retina XDR (1170 x 2532 Pixels)', '204g', 'A15 Bionic 6 nhân', 30, 'Apple iPhone 13 Pro 1TB.png', NULL, NULL),
(26, 'Apple iPhone 13 Pro Max 256GB', 1, 28350000, '6.7 inches', '4352 mAh', 'Super Retina XDR (1284 x 2778 Pixels)', '240g', 'A15 Bionic 6 nhân', 0, 'Apple iPhone 13 Pro Max 256GB.png', NULL, NULL),
(27, 'Apple iPhone 13 Pro Max 512GB', 1, 32990000, '6.7 inches', '\r\n4352 mAh', '\r\nSuper Retina XDR (1284 x 2778 Pixels)', '240g', 'A15 Bionic 6 nhân', 23, 'Apple iPhone 13 Pro Max 512GB.png', NULL, NULL),
(28, 'Apple iPhone 13 Pro Max 1TB', 1, 37990000, '6.7 inches', '\r\n4352 mAh', '\r\nSuper Retina XDR (1284 x 2778 Pixels)', '240g', 'A15 Bionic 6 nhân', 27, 'Apple iPhone 13 Pro Max 1TB.png', NULL, NULL),
(29, 'Iphone 12 Pro Max 128gb\r\n', 1, 25590000, '6.7 inches\r\n', '3687 mAh\r\n', '2778x1284\r\n', '228g\r\n', 'A14 Bionic 6 nhân\r\n', 10, 'iphone_12_promax_128gb.png', NULL, NULL),
(30, 'Iphone 12 Pro Max 256gb\r\n', 1, 27590000, '6.7 inches\r\n', '3687 mAh\r\n', '2778x1284\r\n', '228g\r\n', 'A14 Bionic 6 nhân', 10, 'iphone_12_promax_256gb.png\r\n', NULL, NULL),
(31, 'Iphone 12 Pro Max 512gb\r\n', 1, 33000000, '6.7 inches\r\n', '3687 mAh\r\n', '2778x1284\r\n', '228g', 'A14 Bionic 6 nhân', 10, 'iphone_12_promax_512gb.png\r\n', NULL, NULL),
(32, 'Iphone 12 Pro Max 512gb\r\n', 1, 33000000, '6.7 inches\r\n', '3687 mAh\r\n', '2778x1284\r\n', '228g', 'A14 Bionic 6 nhân', 0, 'iphone_12_promax_512gb.png\r\n', NULL, NULL),
(33, 'Iphone 12 Pro 128gb\r\n', 1, 0, '23590000\r\n', '6.1 inches', '2815 mAh', '1170 x 2532', '189g', 10, 'iphone_12_pro_128gb.png\r\n', NULL, NULL),
(34, 'Iphone 12 Pro 128gb\r\n', 1, 0, '23590000\r\n', '6.1 inches', '2815 mAh', '1170 x 2532', '189g', 10, 'iphone_12_pro_128gb.png\r\n', NULL, NULL),
(35, 'Iphone 12 Pro 256gb\r\n', 1, 24990000, '6.1 inches', '2815 mAh\r\n', '1170x2532\r\n', '189 g\r\n', 'A14', 10, 'iphone_12_pro_256gb.png', NULL, NULL),
(36, 'Iphone 12 Pro 512gb\r\n', 1, 27500000, '6.1 inches\r\n', '2815 mAh\r\n', '1170x2532\r\n', '189 g', 'A14\r\n', 0, 'iphone_12_pro_512gb.png\r\n', NULL, NULL),
(37, 'Iphone 12 64gb\r\n', 1, 15790000, '6.1 inches\r\n', '2227 mAh\r\n', '1170x2532\r\n', '164 g', 'A14\r\n', 12, 'iphone_12_64gb.png\r\n', NULL, NULL),
(39, 'Iphone 12 128gb\r\n', 1, 16990000, '6.1 inches\r\n', '2227 mAh\r\n', '1170x2532\r\n', '164 gr\r\n', 'A14\r\n', 0, 'iphone_12_128gb.png\r\n', NULL, NULL),
(40, 'Iphone 12 256gb\r\n', 1, 19990000, '6.1 inches\r\n', '2227 mAh\r\n', '1170x2532\r\n', '164 gr\r\n', 'A14\r\n', 10, 'iphone_12_256gb.png\r\n', NULL, NULL),
(41, 'Iphone 11 Pro Max 64gb\r\n', 1, 13990000, '6.5 inches\r\n', '3969 mAh\r\n', '2688x1242\r\n', '226 g', 'A13\r\n', 5, 'iphone_11_promax_64gb.png\r\n', NULL, NULL),
(42, 'Iphone 11 Pro Max 128gb\r\n', 1, 15290000, '6.5 inches\r\n', '3969 mAh\r\n', '2688x1242\r\n', '226 g', 'A13\r\n', 7, 'iphone_11_promax_64gb.png\r\n', NULL, NULL),
(43, 'Iphone 11 Pro Max 256gb\r\n', 1, 17590000, '6.5 inches\r\n', '3969 mAh\r\n', '2688x1242\r\n', '226 g', 'A13\r\n', 9, 'iphone_11_promax_64gb.png\r\n', NULL, NULL),
(44, 'Iphone 11 Pro 64gb\r\n', 1, 10990000, '5.8 inches\r\n', '3046 mAh\r\n', '2436x1125\r\n', '188 g', 'A13\r\n', 5, 'iphone_11_pro_64gb.png\r\n', NULL, NULL),
(45, 'Iphone 11 Pro 128gb\r\n', 1, 11990000, '5.8 inches\r\n', '3046 mAh\r\n', '2436x1125\r\n', '188g', 'A13\r\n', 0, 'iphone_11_pro_128gb.png\r\n', NULL, NULL),
(46, 'Iphone 11 Pro 256gb\r\n', 1, 13590000, '5.8 inches\r\n', '3046 mAh\r\n', '2436x1125\r\n', '188g\r\n', 'A13\r\n', 15, 'iphone_11_pro_256gb.png\r\n', NULL, NULL),
(47, 'Iphone 11 64gb\r\n', 1, 9900000, '6.1 inches\r\n', '3110 mAh\r\n', '1792x828\r\n', '194g', 'A13\r\n', 12, 'iphone_11_64gb.png\r\n', NULL, NULL),
(48, 'Iphone 11 128gb\r\n', 1, 11690000, '6.1 inches\r\n', '3110 mAh\r\n', '1792x828\r\n', '194g', 'A13\r\n', 21, 'iphone_11_128gb.png\r\n', NULL, NULL),
(49, 'Iphone 11 256gb\r\n', 1, 12990000, '6.1 inches\r\n', '3110 mAh\r\n', '1792x828\r\n', '194g\r\n', 'A13\r\n', 0, 'iphone_11_256gb.png\r\n', NULL, NULL),
(50, 'Iphone XS Max 64gb\r\n', 1, 8390000, '6.5 inches\r\n', '3174 mAh\r\n', '1242x2688\r\n', '208g', 'A12\r\n', 6, 'iphone_xs_max_64gb.png\r\n', NULL, NULL),
(51, 'Iphone XS Max 256gb\r\n', 1, 9190000, '6.5 inches\r\n', '3174 mAh\r\n', '1242x2688\r\n', '208g', 'A12\r\n', 12, 'iphone_xs_max_256gb.png\r\n', NULL, NULL),
(52, 'Iphone XS 64gb\r\n', 1, 6190000, '5.8 inches\r\n', '2658 mAh\r\n', '1125x2436\r\n', '177g\r\n', 'A12\r\n', 14, 'iphone_xs_64gb.png\r\n', NULL, NULL),
(53, 'Iphone XS 256gb\r\n', 1, 7190000, '5.8 inches\r\n', '2658 mAh\r\n', '1125x2436\r\n', '177g', 'A12\r\n', 0, 'iphone_xs_256gb.png\r\n', NULL, NULL),
(54, 'Iphone XS 256gb\r\n', 1, 7190000, '5.8 inches\r\n', '2658 mAh\r\n', '1125x2436\r\n', '177g', 'A12\r\n', 0, 'iphone_xs_256gb.png\r\n', NULL, NULL),
(55, 'Iphone XS 256gb\r\n', 1, 7190000, '5.8 inches\r\n', '2658 mAh\r\n', '1125x2436\r\n', '177g', 'A12\r\n', 0, 'iphone_xs_256gb.png\r\n', NULL, NULL),
(56, 'Iphone XR 64gb\r\n', 1, 5590000, '6.1 inches\r\n', '2942 mAh\r\n', '828x1792\r\n', '194g\r\n', 'A12\r\n', 0, 'iphone_xr_64gb.png\r\n', NULL, NULL),
(57, 'Iphone XR 256gb\r\n', 1, 7290000, '6.1 inches\r\n', '2942 mAh\r\n', '828x1792\r\n', '194g\r\n', 'A12\r\n', 22, 'iphone_xr_256gb.png\r\n', NULL, NULL),
(58, 'Airpods 1 \r\n', 3, 1500000, '', '', '', '46g\r\n', '', 10, 'Airpods 1.jpg\r\n', NULL, NULL),
(59, 'Airpods 2\r\n', 3, 2599000, '', '', '', '46g\r\n', '', 9, 'Airpods 2.jpg\r\n', NULL, NULL),
(60, 'Airpods 3 (2021)\r\n', 3, 4129000, '', '', '', '46,5g\r\n', '', 20, 'Airpods 3.jpg\r\n', NULL, NULL),
(61, 'Airpods 3 (2022)\r\n', 3, 4229000, '', '', '', '46,5g\r\n', '', 12, 'Airpods 3.jpg\r\n', NULL, NULL),
(62, 'Airpods Pro (2021)\r\n', 3, 4990000, '', '', '', '56,4g\r\n', '', 23, 'Airpods Pro.jpg\r\n', NULL, NULL),
(63, 'Airpods Pro 2 (2022)\r\n', 3, 6990000, '', '', '', '56,4g\r\n', '', 25, 'Airpods Pro.jpg\r\n', NULL, NULL),
(64, 'Ipad Gen 9 2021 10,2 inch Wifi 64 GB\r\n', 2, 7490000, '10.2 inches\r\n', '8600 mAh\r\n', '2160 x 1620 Pixels\r\n', '487g\r\n', 'A13 Bionic\r\n', 10, '1.jpg', NULL, NULL),
(65, 'Ipad Gen 9 2021 10,2 inches Wifi 256 GB\r\n', 2, 11490000, '10.2 inches\r\n', '8600 mAh\r\n', '2160 x 1620 Pixels\r\n', '487g\r\n', 'A13 Bionic\r\n', 11, '2.jpg\n', NULL, NULL),
(66, 'Ipad Gen 9 2021 10,2 inches Wifi  Cellular 64 GB\r\n', 2, 11490000, '10.2 inches\r\n', '8600 mAh\r\n', '2160 x 1620 Pixels\r\n', '487g\r\n', 'A13 Bionic\r\n', 11, '3.jpg\n', NULL, NULL),
(67, 'Ipad Gen 9 2021 10,2 inches Wifi  Cellular 256 GB\r\n', 2, 14490000, '10.2 inches\r\n', '8600 mAh\r\n', '2160 x 1620 Pixels\r\n', '487g\r\n', 'A13 Bionic\r\n', 14, '4.jpg\n', NULL, NULL),
(68, 'iPad Gen 10 2022 10.9 inches WiFi 64GB\r\n', 2, 11990000, '10.9 inches\r\n', '9120 mAh\r\n', '2360 x 1640 Pixels\r\n', '470g\r\n', 'A14 Bionic\r\n', 14, '5.jpg\n', NULL, NULL),
(69, 'iPad Gen 10 2022 10.9 inches WiFi 256 GB\r\n', 2, 15990000, '10.9 inches\r\n', '9120 mAh\r\n', '2360 x 1640 Pixels\r\n', '470g\r\n', 'A14 Bionic\r\n', 17, '6.jpg\n', NULL, NULL),
(70, 'iPad Gen 10 2022 10.9 inches WiFi 64GB\r\n', 2, 11990000, '10.9 inches\r\n', '9120 mAh\r\n', '2360 x 1640 Pixels\r\n', '470g\r\n', 'A14 Bionic\r\n', 0, '7.jpg\n', NULL, NULL),
(71, 'iPad Gen 10 2022 10.9 inches WiFi 256 GB\r\n', 2, 15990000, '10.9 inches\r\n', '9120 mAh\r\n', '2360 x 1640 Pixels\r\n', '470g\r\n', 'A14 Bionic\r\n', 12, '1.jpg\n', NULL, NULL),
(72, 'iPad Gen 10 2022 10.9 inches WiFi 64GB\r\n', 2, 11990000, '10.9 inches\r\n', '9120 mAh\r\n', '2360 x 1640 Pixels\r\n', '470g\r\n', 'A14 Bionic\r\n', 0, '8.jpg\n', NULL, NULL),
(73, 'iPad Gen 10 2022 10.9 inches WiFi 256 GB\r\n', 2, 15990000, '10.9 inches\r\n', '9120 mAh\r\n', '2360 x 1640 Pixels\r\n', '470g\r\n', 'A14 Bionic\r\n', 11, '9.jpg\n', NULL, NULL),
(74, 'iPad Gen 10 2022 10.9 inches WiFi 64GB\r\n', 2, 11990000, '10.9 inches\r\n', '9120 mAh\r\n', '2360 x 1640 Pixels\r\n', '470g\r\n', 'A14 Bionic\r\n', 20, '10.jpg\n', NULL, NULL),
(75, 'iPad Gen 10 2022 10.9 inches WiFi 256 GB\r\n', 2, 15990000, '10.9 inches\r\n', '9120 mAh\r\n', '2360 x 1640 Pixels\r\n', '470g\r\n', 'A14 Bionic\r\n', 12, '11.jpg\n', NULL, NULL),
(76, 'iPad Air 5 2022 10.9 inches M1 WiFi 64GB\r\n', 2, 15490000, '10.9 inches\r\n', '7587 mAh\r\n', '2360 x 1640 Pixels\r\n', '461g\r\n', 'Apple M1\r\n', 14, '12.jpg\n', NULL, NULL),
(77, 'iPad Air 5 2022 10.9 inches M1 WiFi 256GB\r\n', 2, 18990000, '10.9 inches\r\n', '7587 mAh\r\n', '2360 x 1640 Pixels\r\n', '461g\r\n', 'Apple M1\r\n', 0, '1.jpg\n', NULL, NULL),
(78, 'iPad Air 5 2022 10.9 inches M1 WiFi 64GB\r\n', 2, 15490000, '10.9 inches\r\n', '7587 mAh\r\n', '2360 x 1640 Pixels\r\n', '461g\r\n', 'Apple M1\r\n', 12, '2.jpg\n', NULL, NULL),
(79, 'iPad Air 5 2022 10.9 inches M1 WiFi 256GB\r\n', 2, 18990000, '10.9 inches\r\n', '7587 mAh\r\n', '2360 x 1640 Pixels\r\n', '461g\r\n', 'Apple M1\r\n', 0, '3.jpg\n', NULL, NULL),
(80, 'iPad Air 5 2022 10.9 inches M1 WiFi 64GB\r\n', 2, 15490000, '10.9 inches\r\n', '7587 mAh\r\n', '2360 x 1640 Pixels\r\n', '461g\r\n', 'Apple M1\r\n', 13, '4.jpg\n', NULL, NULL),
(81, 'iPad Air 5 2022 10.9 inches M1 WiFi 256GB\r\n', 2, 18990000, '10.9 inches\r\n', '7587 mAh\r\n', '2360 x 1640 Pixels\r\n', '461g\r\n', 'Apple M1\r\n', 15, '5.jpg\n', NULL, NULL),
(82, 'iPad Air 5 2022 10.9 inches M1 WiFi 64GB\r\n', 2, 15490000, '10.9 inches\r\n', '7587 mAh\r\n', '2360 x 1640 Pixels\r\n', '461g\r\n', 'Apple M1\r\n', 0, '6.jpg\n', NULL, NULL),
(83, 'iPad Air 5 2022 10.9 inches M1 WiFi 256GB\r\n', 2, 18990000, '10.9 inches\r\n', '7587 mAh\r\n', '2360 x 1640 Pixels\r\n', '461g\r\n', 'Apple M1\r\n', 11, '7.jpg\n', NULL, NULL),
(84, 'iPad Air 5 2022 10.9 inches M1 WiFi 64GB\r\n', 2, 15490000, '10.9 inches\r\n', '7587 mAh\r\n', '2360 x 1640 Pixels\r\n', '461g\r\n', 'Apple M1\r\n', 10, '8.jpg\n', NULL, NULL),
(85, 'iPad Air 5 2022 10.9 inches M1 WiFi 256GB\r\n', 2, 18990000, '10.9 inches\r\n', '7587 mAh\r\n', '2360 x 1640 Pixels\r\n', '461g\r\n', 'Apple M1\r\n', 12, '9.jpg\n', NULL, NULL),
(86, 'iPad Air 5 2022 10.9 inches M1 WiFi 5G 64GB\r\n', 2, 18990000, '10.9 inches\r\n', '7587 mAh\r\n', '2360 x 1640 Pixels\r\n', '462g\r\n', 'Apple M1\r\n', 16, '10.jpg\n', NULL, NULL),
(87, 'iPad Air 5 2022 10.9 inches M1 WiFi 5G 256GB\r\n', 2, 21990000, '10.9 inches\r\n', '7587 mAh\r\n', '2360 x 1640 Pixels\r\n', '462g\r\n', 'Apple M1\r\n', 0, '11.jpg\n', NULL, NULL),
(88, 'iPad Air 5 2022 10.9 inches M1 WiFi 5G 64GB\r\n', 2, 18990000, '10.9 inches\r\n', '7587 mAh\r\n', '2360 x 1640 Pixels\r\n', '462g\r\n', 'Apple M1\r\n', 12, '12.jpg\n', NULL, NULL),
(89, 'iPad Air 5 2022 10.9 inches M1 WiFi 5G 256GB\r\n', 2, 21990000, '10.9 inches\r\n', '7587 mAh\r\n', '2360 x 1640 Pixels\r\n', '462g\r\n', 'Apple M1\r\n', 0, '1.jpg\n', NULL, NULL),
(90, 'iPad Air 5 2022 10.9 inches M1 WiFi 5G 256GB\r\n', 2, 21990000, '10.9 inches\r\n', '7587 mAh\r\n', '2360 x 1640 Pixels\r\n', '462g\r\n', 'Apple M1\r\n', 0, '2.jpg\n', NULL, NULL),
(91, 'iPad Air 5 2022 10.9 inches M1 WiFi 5G 64GB\r\n', 2, 18990000, '10.9 inches\r\n', '7587 mAh\r\n', '2360 x 1640 Pixels\r\n', '462g\r\n', 'Apple M1\r\n', 18, '3.jpg\n', NULL, NULL),
(92, 'iPad Air 5 2022 10.9 inches M1 WiFi 5G 256GB\r\n', 2, 21990000, '10.9 inches\r\n', '7587 mAh\r\n', '2360 x 1640 Pixels\r\n', '462g\r\n', 'Apple M1\r\n', 0, '4.jpg\n', NULL, NULL),
(93, 'iPad Air 5 2022 10.9 inches M1 WiFi 5G 64GB\r\n', 2, 18990000, '10.9 inches\r\n', '7587 mAh\r\n', '2360 x 1640 Pixels\r\n', '462g\r\n', 'Apple M1\r\n', 0, '5.jpg\n', NULL, NULL),
(94, 'iPad Air 5 2022 10.9 inches M1 WiFi 5G 256GB\r\n', 2, 21990000, '10.9 inches\r\n', '7587 mAh\r\n', '2360 x 1640 Pixels\r\n', '462g\r\n', 'Apple M1\r\n', 0, '6.jpg\n', NULL, NULL),
(95, 'iPad Air 5 2022 10.9 inches M1 WiFi 5G 64GB\r\n', 2, 18990000, '10.9 inches\r\n', '7587 mAh\r\n', '2360 x 1640 Pixels\r\n', '462g\r\n', 'Apple M1\r\n', 20, '7.jpg\n', NULL, NULL),
(96, 'iPad Air 5 2022 10.9 inches M1 WiFi 5G 256GB\r\n', 2, 21990000, '10.9 inches\r\n', '7587 mAh\r\n', '2360 x 1640 Pixels\r\n', '462g\r\n', 'Apple M1\r\n', 11, '8.jpg\n', NULL, NULL),
(97, 'iPad Pro 11 2021 M1 Wi-Fi 128GB\r\n', 2, 19990000, '11 inches\r\n\r\n', '10000 mAh\r\n', '2388 x 1668 Pixels\r\n', '471g\r\n', 'Apple M1\r\n', 40, '9.jpg\n', NULL, NULL),
(98, 'iPad Pro 11 2021 M1 Wi-Fi 128GB\r\n', 2, 19990000, '11 inches\r\n', '10000 mAh\r\n', '2388 x 1668 Pixels\r\n', '471g\r\n', 'Apple M1\r\n', 40, '10.jpg\n', NULL, NULL),
(99, 'iPad Pro 11 2021 M1 Wi-Fi 256GB\r\n', 2, 25990000, '11 inches\r\n', '10000 mAh\r\n', '2388 x 1668 Pixels\r\n', '471g\r\n', 'Apple M1\r\n', 40, '11.jpg\n', NULL, NULL),
(100, 'iPad Pro 11 2021 M1 Wi-Fi 256GB\r\n', 2, 25990000, '11 inches\r\n', '10000 mAh\r\n', '2388 x 1668 Pixels\r\n', '471g\r\n', 'Apple M1\r\n', 40, '12.jpg\n', NULL, NULL),
(101, 'iPad Pro 11 2021 M1 Wi-Fi 512GB\r\n', 2, 31990000, '11 inches\r\n', '10000 mAh\r\n', '2388 x 1668 Pixels\r\n', '471g\r\n', 'Apple M1\r\n', 40, '1.jpg\n', NULL, NULL),
(102, 'iPad Pro 11 2021 M1 Wi-Fi 512GB\r\n', 2, 31990000, '11 inches\r\n', '10000 mAh\r\n', '2388 x 1668 Pixels\r\n', '471g\r\n', 'Apple M1\r\n', 40, '2.jpg\n', NULL, NULL),
(103, 'iPad Pro 11 2022 M2 WiFi 128GB\r\n', 2, 22990000, '11 inches\r\n', '11000 mAh\r\n', '2388 x 1668 Pixels\r\n', '466g\r\n', 'Apple M2\r\n', 40, '3.jpg\n', NULL, NULL),
(104, 'iPad Pro 11 2022 M2 WiFi 256GB\r\n', 2, 24990000, '11 inches\r\n', '11000 mAh\r\n', '2388 x 1668 Pixels\r\n', '466g\r\n', 'Apple M2\r\n', 40, '4.jpg\n', NULL, NULL),
(105, 'iPad Pro 11 2022 M2 WiFi 512GB\r\n', 2, 29990000, '11 inches\r\n', '11000 mAh\r\n', '2388 x 1668 Pixels\r\n', '466g\r\n', 'Apple M2\r\n', 40, '5.jpg\n', NULL, NULL),
(106, 'iPad Pro 11 2022 M2 WiFi 128GB\r\n', 2, 22990000, '11 inches\r\n', '11000 mAh\r\n', '2388 x 1668 Pixels\r\n', '466g\r\n', 'Apple M2\r\n', 40, '6.jpg\n', NULL, NULL),
(107, 'iPad Pro 11 2022 M2 WiFi 256GB\r\n', 2, 24990000, '11 inches\r\n', '11000 mAh\r\n', '2388 x 1668 Pixels\r\n', '466g\r\n', 'Apple M2\r\n', 40, '7.jpg\n', NULL, NULL),
(108, 'iPad Pro 11 2022 M2 WiFi 512GB\r\n', 2, 29990000, '11 inches\r\n', '11000 mAh\r\n', '2388 x 1668 Pixels\r\n', '466g\r\n', 'Apple M2\r\n', 40, '8.jpg\n', NULL, NULL),
(109, 'iPad Pro 11 2022 M2 WiFi 5G 128GB\r\n', 2, 26990000, '11 inches\r\n', '11000 mAh\r\n', '2388 x 1668 Pixels\r\n', '466g\r\n', 'Apple M2\r\n', 10, '9.jpg\n', NULL, NULL),
(110, 'iPad Pro 11 2022 M2 WiFi 5G 256GB\r\n', 2, 28990000, '11 inches\r\n', '11000 mAh\r\n', '2388 x 1668 Pixels\r\n', '466g\r\n', 'Apple M2\r\n', 40, '10.jpg\n', NULL, NULL),
(111, 'iPad Pro 11 2022 M2 WiFi 5G 512GB\r\n', 2, 33990000, '11 inches\r\n', '11000 mAh\r\n', '2388 x 1668 Pixels\r\n', '466g\r\n', 'Apple M2\r\n', 0, '11.jpg\n', NULL, NULL),
(112, 'iPad Pro 11 2022 M2 WiFi 5G 128GB\r\n', 2, 26990000, '11 inches\r\n', '11000 mAh\r\n', '2388 x 1668 Pixels\r\n', '466g\r\n', 'Apple M2\r\n', 40, '12.jpg\n', NULL, NULL),
(113, 'iPad Pro 11 2022 M2 WiFi 5G 256GB\r\n', 2, 28990000, '11 inches\r\n', '11000 mAh\r\n', '2388 x 1668 Pixels\r\n', '466g\r\n', 'Apple M2\r\n', 30, '1.jpg\n', NULL, NULL),
(114, 'iPad Pro 11 2022 M2 WiFi 5G 512GB\r\n', 2, 33990000, '11 inches\r\n', '11000 mAh\r\n', '2388 x 1668 Pixels\r\n', '466g\r\n', 'Apple M2\r\n', 20, '2.jpg\n', NULL, NULL),
(115, 'iPad Pro 12.9 2021 M1 Wi-Fi 128GB\r\n', 2, 25490000, '12,9 inches\r\n', '13500 mAh\r\n', '2732 x 2048 Pixels\r\n', '685g\r\n', 'Apple M1\r\n', 30, '3.jpg\n', NULL, NULL),
(116, 'iPad Pro 12.9 2021 M1 Wi-Fi 256GB\r\n', 2, 27990000, '12,9 inches\r\n', '13500 mAh\r\n', '2732 x 2048 Pixels\r\n', '685g\r\n', 'Apple M1\r\n', 30, '4.jpg\n', NULL, NULL),
(117, 'iPad Pro 12.9 2021 M1 Wi-Fi 512GB\r\n', 2, 32690000, '12,9 inches\r\n', '13500 mAh\r\n', '2732 x 2048 Pixels\r\n', '685g\r\n', 'Apple M1\r\n', 40, '5.jpg\n', NULL, NULL),
(118, 'iPad Pro 12.9 2021 M1 Wi-Fi 128GB\r\n', 2, 25490000, '12,9 inches\r\n', '13500 mAh\r\n', '2732 x 2048 Pixels\r\n', '685g\r\n', 'Apple M1\r\n', 20, '6.jpg\n', NULL, NULL),
(119, 'iPad Pro 12.9 2021 M1 Wi-Fi 256GB\r\n', 2, 27990000, '12,9 inches\r\n', '13500 mAh\r\n', '2732 x 2048 Pixels\r\n', '685g\r\n', 'Apple M1\r\n', 10, '7.jpg\n', NULL, NULL),
(120, 'iPad Pro 12.9 2021 M1 Wi-Fi 512GB\r\n', 2, 32690000, '12,9 inches\r\n', '13500 mAh\r\n', '2732 x 2048 Pixels\r\n', '685g\r\n', 'Apple M1\r\n', 20, '8.jpg\n', NULL, NULL),
(121, 'iPad Pro 12.9 2021 M2 Wi-Fi 128GB\r\n', 2, 30690000, '12,9 inches\r\n', '13500 mAh\r\n', '2732 x 2048 Pixels\r\n', '682g\r\n', 'Apple M2\r\n', 30, '9.jpg\n', NULL, NULL),
(122, 'iPad Pro 12.9 2021 M2 Wi-Fi 256GB\r\n', 2, 32690000, '12,9 inches\r\n', '13500 mAh\r\n', '2732 x 2048 Pixels\r\n', '682g\r\n', 'Apple M2\r\n', 20, '10.jpg\n', NULL, NULL),
(123, 'iPad Pro 12.9 2021 M2 Wi-Fi 512GB\r\n', 2, 36690000, '12,9 inches\r\n', '13500 mAh\r\n', '2732 x 2048 Pixels\r\n', '682g\r\n', 'Apple M2\r\n', 10, '11.jpg\n', NULL, NULL),
(124, 'iPad Pro 12.9 2021 M2 Wi-Fi 128GB\r\n', 2, 30690000, '12,9 inches\r\n', '13500 mAh\r\n', '2732 x 2048 Pixels\r\n', '682g\r\n', 'Apple M2\r\n', 20, '12.jpg\n\n', NULL, NULL),
(125, 'iPad Pro 12.9 2021 M2 Wi-Fi 256GB\r\n', 2, 32690000, '12,9 inches\r\n', '13500 mAh\r\n', '2732 x 2048 Pixels\r\n', '682g\r\n', 'Apple M2\r\n', 30, '1.jpg\n', NULL, NULL),
(126, 'iPad Pro 12.9 2021 M2 Wi-Fi 512GB\r\n', 2, 36690000, '12,9 inches\r\n', '13500 mAh\r\n', '2732 x 2048 Pixels\r\n', '682g\r\n', 'Apple M2\r\n', 30, '2.jpg\n', NULL, NULL),
(127, 'Củ sạc 20W USB-C Power Adapter', 4, 570000, '', '', '', '', '', 10, 'sac_usb_c.png', NULL, NULL),
(128, 'Cáp sạc Lightning to USB Cable 1m', 4, 250000, '', '', '', '', '', 10, 'cap_sac_lightning.png', NULL, NULL),
(129, 'Cáp sạc USB-C to Lightning Cable 1m', 4, 590000, '', '', '', '', '', 10, 'cap_sac_usb_c.png', NULL, NULL),
(130, 'Sạc INNOSTYLE 20w USB-C Minigo III White', 4, 290000, '', '', '', '', '', 10, 'sac-nhanh-innostyle-usb-c-pd-20w-minigo.jpg', NULL, NULL),
(131, 'Sạc Mophie PD 20W USB-C', 4, 299000, '', '', '', '', '', 10, 'sac_mophie_pd.png', NULL, NULL),
(132, '\nMiếng dán cường lực camera Mipow iPhone 14 Pro/14 Promax Gold', 4, 290000, '', '', '', '', '', 10, 'lens-mipow-13pro-14.jpg', NULL, NULL),
(133, 'Miếng dán cường lực Mipow Kingbull iPhone 14 Pro Max', 4, 400000, '6.7 inches', '', '', '', '', 10, 'kinh-cuong-luc-kingbull.jpg', NULL, NULL),
(134, 'Miếng dán cường lực Supitec iPhone 14 Pro Max', 4, 450000, '6.7 inches', '', '', '', '', 10, 'cuong-luc-supitec.png', NULL, NULL),
(135, 'Miếng dán cường lực JCPAL Presever chống ánh sáng xanh iPhone 14 Pro Max', 4, 445000, '6.7 inches', '', '', '', '', 10, 'cuong-luc-jcpal.png', NULL, NULL),
(136, 'Combo Ốp – Cường lực Jinya space protecting iPhone 12', 4, 450000, '6.1 inches', '', '', '', '', 10, 'combo-op-lung-cuong-luc.jpg', NULL, NULL),
(137, 'Miếng dán cường lực camera KuZoom iphone 14Pro/14 Pro Max Gold', 4, 250000, '', '', '', '', '', 10, 'cuong-luc-camera-kuzoom.jpg', NULL, NULL),
(138, 'Sạc dự phòng QC 22.5W + PD 18W Multi-Compatible Cabled Power Bank 10000mAh RPP-285', 4, 500000, '', '10000 mAh', '', '', '', 10, 'sac-du-phong-qc-25w.png', NULL, NULL),
(139, 'Pin Dự Phòng Mazer Infinite Boost Mag Stand Mini Qi Wireless 10000mAh/15W', 4, 1290000, '', '10000 mAh', '', '', '', 10, 'sac-du-phong-mazer.png', NULL, NULL),
(140, 'SDP Remax 15W Magnetic Wireless Charging PD 20W Power Bank 10000mAh RPP-65', 4, 649000, '', '10000 mAh', '', '', '', 20, 'sac-du-phong-remax.png', NULL, NULL),
(141, 'Pin sạc dự phòng Yoobao 10.000mAH', 4, 349000, '', '10000 mAh', '', '', '', 20, 'sac-du-phong-Yoobao.jpg', NULL, NULL),
(142, 'Pin Sạc Dự Phòng RAVPower RP-PB132 6700mAh (Black)', 4, 180000, '', '6700 mAh', '', '', '', 10, 'sac-du-phong-ravpower.png', NULL, NULL),
(143, 'Sạc dự phòng không dây Magsafe Battettery Pack', 4, 2490000, '', '12000 mAh', '', '', '', 10, 'sac-du-phong-magsafe.jpg', NULL, NULL),
(144, 'Sạc dự phòng Mophie Snap + Juice pack mini 5000 mAh', 4, 849000, '', '5000 mAh', '', '', '', 10, 'pin-sac-du-phong-mophie-snap.jpg', NULL, NULL),
(145, 'RAVPower Sạc dự phòng 20100mAh (RP-PB105)', 4, 1650000, '', '20100 mAh', '', '', '', 10, 'sac-du-phong-ravpower-20100mAh.png', NULL, NULL),
(146, 'Sạc dự phòng Energizer 10000mAh – UE10052', 4, 650000, '', '10000 mAh', '', '', '', 10, 'sac-du-phong-energizer.png', NULL, NULL),
(147, 'Apple AirTag Leather Key Ring', 4, 595000, '', '', '', '', '', 0, 'apple-airtag-leather-key-king.png', NULL, NULL),
(148, 'AirTag Loop', 4, 395000, '', '', '', '', '', 0, 'airtag-loop.png', NULL, NULL),
(149, 'Ốp lưng Devia iPhone 14 Pro Max Black', 4, 249000, '', '', '', '', '', 10, 'op-lung-devia.png', NULL, NULL),
(150, 'Ốp lưng ZAGG trong suốt Magsafe for iPhone 14 Pro Max', 4, 600000, '', '', '', '', '', 10, 'op-lung-zagg-trong-suot.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shopping__carts`
--

CREATE TABLE `shopping__carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shopping__carts`
--

INSERT INTO `shopping__carts` (`id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 17, '2022-12-11 03:02:18', '2022-12-11 03:02:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `level` tinyint(1) NOT NULL DEFAULT 0,
  `avatar` varchar(255) NOT NULL,
  `gender` int(11) NOT NULL DEFAULT 2,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `phone_number`, `address`, `level`, `avatar`, `gender`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(13, 'Vong Liệt', 'longnv@gmail.com', '0978960072', 'HN', 1, '', 1, NULL, '$2y$10$/Jc9QHwykZkOFr99QRsFq.BHTogAIubt/gbkEaYWFb37d19cawa8.', NULL, NULL, NULL),
(17, 'Việt Long', 'longnv2306@gmail.com', '0978960071', 'Hà Nội', 0, '', 2, NULL, '$2y$10$k6Nr//EwBBx2PT6vNBSntu4.YxyAzeYIzmPJEL3WlqxmGzXfpUw16', NULL, '2022-12-10 00:59:40', '2022-12-10 00:59:40'),
(18, 'Hoàng', 'longace103@gmail.com', '4958690456', 'HN', 0, '', 1, NULL, '$2y$10$/PWfN33Y6Uz/F0PI4nkLHu6MqoC.YQF0/PaZ2bbHuQBTXCCmSiDC.', NULL, '2022-12-12 22:15:03', '2022-12-12 22:15:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart__details`
--
ALTER TABLE `cart__details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart__details_shopping_cart_id_foreign` (`shopping_cart_id`),
  ADD KEY `cart__details_product_id_foreign` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_category_code_unique` (`category_code`);

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
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `shopping__carts`
--
ALTER TABLE `shopping__carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shopping__carts_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_number_unique` (`phone_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart__details`
--
ALTER TABLE `cart__details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2011;

--
-- AUTO_INCREMENT for table `shopping__carts`
--
ALTER TABLE `shopping__carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart__details`
--
ALTER TABLE `cart__details`
  ADD CONSTRAINT `cart__details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cart__details_shopping_cart_id_foreign` FOREIGN KEY (`shopping_cart_id`) REFERENCES `shopping__carts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `shopping__carts`
--
ALTER TABLE `shopping__carts`
  ADD CONSTRAINT `shopping__carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
