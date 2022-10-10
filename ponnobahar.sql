-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2017 at 06:40 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ponnobahar`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mission` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `vision` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `goal` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `image`, `mission`, `vision`, `goal`, `created_at`, `updated_at`) VALUES
(9, 'new title', 'about-image/pro.jpg', 'Well', 'Well', 'Well', '2017-09-23 00:53:45', '2017-09-23 00:53:45');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `brand_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Rang', 'Well', 1, '2017-08-24 04:21:07', '2017-08-24 04:29:53'),
(2, 'Arang', 'Well', 1, '2017-08-24 04:25:39', '2017-08-24 04:46:02'),
(3, 'Yellow', 'Well', 1, '2017-08-24 04:28:28', '2017-08-24 04:28:28'),
(8, 'Ring', 'Well', 1, '2017-09-24 23:08:54', '2017-09-24 23:09:40'),
(9, 'Arang', 'Well', 0, '2017-09-24 23:12:05', '2017-09-24 23:12:05'),
(10, 'Ring', 'Well', 1, '2017-09-25 00:08:36', '2017-09-25 00:08:36'),
(11, 'Esay', 'well', 0, '2017-10-22 04:27:06', '2017-10-22 04:27:35'),
(12, 'Esay', 'well', 0, '2017-10-22 04:30:43', '2017-10-22 04:30:43');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Health and Beauty', 'Well', 1, '2017-08-24 04:05:13', '2017-08-24 04:10:04'),
(2, 'New Clothing', 'Not Well', 1, '2017-08-24 04:08:25', '2017-10-18 04:01:49'),
(3, 'Footwear', 'Well', 1, '2017-08-24 04:08:35', '2017-08-24 04:08:35'),
(4, 'Jewelry', 'Well', 1, '2017-08-24 04:08:44', '2017-08-24 04:08:44'),
(5, 'Life Style', 'Well', 1, '2017-08-24 04:08:53', '2017-08-24 04:08:53'),
(6, 'Islamic Collection', 'Well', 1, '2017-08-24 04:09:05', '2017-08-24 04:09:05'),
(7, 'Gift items', 'Well', 1, '2017-08-24 04:09:13', '2017-08-25 23:30:55'),
(8, 'New Food', 'Well', 1, '2017-08-24 04:09:24', '2017-10-18 04:02:16');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `customer_image` text COLLATE utf8mb4_unicode_ci,
  `national_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `email_address`, `password`, `mobile_number`, `date_of_birth`, `address`, `customer_image`, `national_id`, `district_name`, `country_name`, `created_at`, `updated_at`) VALUES
(32, 'Mosiur', 'Rahman', 'mosiur@gmail.com', '$2y$10$2wrBW2h2lYTEGx9yo30PqOIN62gU63gbUjcXyxvCs.KMjeNrwvk2K', '01715161514', '2017-10-17', 'ccascasc', 'customer_image/b3.jpg', '234234234', 'Manikgonj', 'Bangladesh', '2017-10-18 04:05:36', '2017-10-18 04:13:29'),
(33, 'Nayem Khan', 'Rahman', 'admin@gmail.com', '$2y$10$AU6vwvtMhyT/BTVhUme.GOCArsbIhNaviIZnrjYIVvHtv1JgQIdUK', '01715121514', '2017-10-11', 'cascscasc', 'customer_image/Untitled-1.png', '13212312', 'Manikgonj', 'BAngladesh', '2017-10-18 05:07:36', '2017-10-18 05:08:25'),
(34, 'Zakir', 'Hossen', 'zakir@hossen.com', '$2y$10$hxbGVHaMPo.HWNzXGjU2h.6cKoSXp8KD2xgaf5JfwgmY1t9jDHZSe', '01912965344', '2017-10-27', 'Dhaka', 'customer_image/0x640.jpg', '1234235467897654', 'Feni', 'Bangladesh', '2017-10-24 03:59:58', '2017-10-24 03:59:58'),
(35, 'Sajedul', 'Islam', 'sajed@gmail.com', '$2y$10$QW6m982qPekjWq1cruNdoeOqEtICfepLQHmVt2.O7e7mpGpaO1Ng2', '01912836536', '2017-10-31', 'Dhaka', 'customer_image/Year.jpg', '19972007112333', 'Feni', 'Bangladesh', '2017-10-24 05:59:33', '2017-10-24 05:59:33'),
(40, 'Mosiur', 'Rahman', 'habib2498922@gmail.com', '$2y$10$2yBntAVfImv2XXdk4qRN4.tX8tPbKSkXx.Qsfda.wKgiU5w2OWHH6', '01715121514', '2017-10-04', 'Mirpur-10', 'customer_image/b3.jpg', NULL, NULL, NULL, '2017-10-28 02:14:37', '2017-10-28 02:21:44');

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
(3, '2017_08_21_063930_create_categories_table', 1),
(4, '2017_08_21_110351_create_brands_table', 1),
(5, '2017_08_23_051859_create_products_table', 1),
(6, '2017_08_26_031723_create_sub_categories_table', 2),
(7, '2017_08_26_081835_create_product_sub_images_table', 3),
(8, '2017_08_26_104733_create_sliders_table', 4),
(9, '2017_08_28_095538_create_customers_table', 5),
(10, '2017_08_28_110506_create_shippings_table', 6),
(11, '2017_08_29_063538_create_orders_table', 7),
(12, '2017_08_29_063556_create_payments_table', 7),
(13, '2017_08_29_063631_create_order_details_table', 7),
(14, '2017_09_18_091259_create_abouts_table', 8),
(15, '2017_09_20_071132_create_wishlists_table', 9),
(16, '2017_10_03_041028_create_now_orders_table', 10),
(17, '2017_10_14_093558_create_reviews_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `now_orders`
--

CREATE TABLE `now_orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_quantity` float NOT NULL,
  `billing_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sipping_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sipping_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sipping_mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sipping_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `now_orders`
--

INSERT INTO `now_orders` (`id`, `product_id`, `product_name`, `product_quantity`, `billing_name`, `billing_email`, `billing_mobile`, `billing_address`, `sipping_name`, `sipping_email`, `sipping_mobile`, `sipping_address`, `payment_method`, `created_at`, `updated_at`) VALUES
(10, 28, 'Clothing', 1, 'Sajed', 'sajed@gmail.com', '009876765', 'well', 'Sajed', 'sajed@gmail.com', '909198891891', 'well', 'bKash', '2017-10-03 05:57:08', '2017-10-03 05:57:08'),
(11, 25, 'Clothing', 1, 'Sajed', 'sajed@gmail.com', '0199191222222', 'well', 'Sajed', 'sajed@gmail.com', '0191908271826', 'well', 'Cash', '2017-10-03 05:59:39', '2017-10-03 05:59:39'),
(12, 25, 'Clothing', 1, 'Sajed', 'sajed@gmail.com', '0199191222222', 'well', 'Sajed', 'sajed@gmail.com', '0191908271826', 'well', 'Cash', '2017-10-03 06:01:34', '2017-10-03 06:01:34'),
(14, 54, 'Nano Jewelry', 1, 'Mosiur Rahman', 'mosiur@gmail.com', '01715121215', 'Mirpur', 'Bivan Miah', 'bivan@gmail.com', '01915141515', 'Dhaka', 'Cash', '2017-10-22 23:21:45', '2017-10-22 23:21:45');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `order_total` double(10,2) NOT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `shipping_id`, `order_total`, `order_status`, `order_date`, `created_at`, `updated_at`) VALUES
(28, 31, 36, 6900.00, 'Success', '2017-10-18 08:21:05', '2017-10-18 02:20:19', '2017-10-18 02:21:05'),
(29, 35, 37, 2300.00, 'Pending', '2017-10-24 12:00:01', '2017-10-24 06:00:01', '2017-10-24 06:00:01'),
(30, 40, 38, 22000.00, 'Pending', '2017-10-28 08:20:10', '2017-10-28 02:20:10', '2017-10-28 02:20:10'),
(31, 32, 40, 920.00, 'Pending', '2017-10-31 11:35:59', '2017-10-31 05:35:59', '2017-10-31 05:35:59');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `size_width` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_price` double(10,2) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `product_name`, `product_code`, `image`, `size_width`, `product_price`, `product_quantity`, `created_at`, `updated_at`) VALUES
(49, 28, 38, 'New T-Shirt', 'S-23', NULL, NULL, 2300.00, 3, '2017-10-18 02:20:20', '2017-10-18 02:20:20'),
(50, 29, 46, 'Male Dress', 'd435', NULL, NULL, 700.00, 1, '2017-10-24 06:00:01', '2017-10-24 06:00:01'),
(51, 29, 52, 'Sport Style Footwear', 'F2343', NULL, NULL, 1600.00, 1, '2017-10-24 06:00:01', '2017-10-24 06:00:01'),
(52, 30, 61, 'Buy John Lewis', 'S38', NULL, NULL, 2000.00, 2, '2017-10-28 02:20:10', '2017-10-28 02:20:10'),
(53, 30, 65, 'Wach', 'W3456', NULL, NULL, 6000.00, 3, '2017-10-28 02:20:11', '2017-10-28 02:20:11'),
(54, 31, 67, 'Islamic Book', 'I2323', 'product-images/islamic2.png', 'N/A', 200.00, 1, '2017-10-31 05:35:59', '2017-10-31 05:35:59'),
(55, 31, 57, 'Ponds Face Wash', 'N726', 'product-images/health6.jpg', 'N/A', 360.00, 2, '2017-10-31 05:35:59', '2017-10-31 05:35:59');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `order_id`, `payment_type`, `payment_status`, `created_at`, `updated_at`) VALUES
(28, 28, 'Cash On Delivery', 'Success', '2017-10-18 02:20:20', '2017-10-18 02:21:05'),
(29, 29, 'Cash On Delivery', 'Pending', '2017-10-24 06:00:01', '2017-10-24 06:00:01'),
(30, 30, 'Nexus Card', 'Pending', '2017-10-28 02:20:10', '2017-10-28 02:20:10'),
(31, 31, 'Cash On Delivery', 'Pending', '2017-10-31 05:35:59', '2017-10-31 05:35:59');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_sku` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` float(10,2) NOT NULL,
  `discount_product_amount` float(10,2) NOT NULL,
  `discount_product_price` float(10,2) NOT NULL,
  `top_left_one` tinyint(1) NOT NULL,
  `top_left_two` tinyint(1) NOT NULL,
  `top_right_one` tinyint(1) NOT NULL,
  `top_right_two` tinyint(1) NOT NULL,
  `carousel_slider` tinyint(1) NOT NULL,
  `top_product_status` tinyint(1) NOT NULL,
  `product_short_description` text COLLATE utf8mb4_unicode_ci,
  `product_long_description` text COLLATE utf8mb4_unicode_ci,
  `top_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `owl_carousel_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `sub_category_id`, `brand_id`, `product_name`, `product_code`, `product_color`, `product_country`, `product_sku`, `product_price`, `discount_product_amount`, `discount_product_price`, `top_left_one`, `top_left_two`, `top_right_one`, `top_right_two`, `carousel_slider`, `top_product_status`, `product_short_description`, `product_long_description`, `top_image`, `owl_carousel_image`, `product_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(57, 1, 1, 1, 'Ponds Face Wash', 'N726', 'White', 'Bangladesh', '50', 400.00, 10.00, 360.00, 1, 0, 0, 0, 1, 1, 'Ponds Face Wash', '<p>Ponds Face Wash&nbsp; Ponds Face Wash Ponds Face Wash Ponds Face Wash Ponds Face Wash Ponds Face Wash Ponds Face Wash Ponds Face Wash Ponds Face Wash Ponds Face Wash Ponds Face Wash Ponds Face Wash Ponds Face Wash Ponds Face Wash Ponds Face Wash Ponds Face Wash Ponds Face Wash Ponds Face Wash Ponds Face Wash Ponds Face Wash Ponds Face Wash Ponds Face Wash Ponds Face Wash Ponds Face Wash Ponds Face Wash Ponds Face Wash Ponds Face Wash Ponds Face Wash Ponds Face Wash</p>', 'product-top-images/health4.jpg', 'product-owl-images/health5.jpg', 'product-images/health6.jpg', 1, '2017-10-25 03:58:38', '2017-10-25 04:03:19'),
(58, 1, 3, 2, 'Luxurious Organic', 'M23', 'Orange', 'Bangladesh', '20', 2000.00, 20.00, 1600.00, 0, 0, 1, 0, 1, 1, 'Excellent Collection of Suzanne\'s Anti-Aging, Luxurious Organic Gluten-Free Skincare A $125 Value for just $89.99! All Natural, Toxin Free, Vegan, Made in US.', '<p>Excellent Collection of Suzanne&#39;s Anti-Aging, Luxurious Organic Gluten-Free Skincare A $125 Value for just $89.99! All Natural, Toxin Free, Vegan, Made in US. Excellent Collection of Suzanne&#39;s Anti-Aging, Luxurious Organic Gluten-Free Skincare A $125 Value for just $89.99! All Natural, Toxin Free, Vegan, Made in US.</p>', 'product-top-images/health3.jpg', 'product-owl-images/health1.jpg', 'product-images/health4.jpg', 1, '2017-10-25 04:09:39', '2017-10-25 04:09:39'),
(59, 2, 13, 1, 'Shirt', 'M45', 'Black', 'Bangladesh', '10', 700.00, 5.00, 665.00, 0, 1, 0, 0, 1, 1, 'Casual Wear for Men: Buy Men\'s Casual Wear for Men: Buy Men\'s Casual Wear for Men: Buy Men\'s', '<p>&nbsp;hello</p>', 'product-top-images/clothing3.jpg', 'product-owl-images/clothing3.jpg', 'product-images/clothing1.jpg', 1, '2017-10-25 04:16:33', '2017-10-25 04:35:55'),
(60, 2, 17, 2, 'Baby', 'K727', 'Purple', 'Bangladesh', '10', 1500.00, 10.00, 1350.00, 0, 0, 0, 1, 1, 1, 'Description Product name:Pet Pajamas Fabric:Cotton blended Size: XS:Bust 30 cm / 11.8 inch ; back length 22cm / 8.5 inch S:Bust 33 cm / 12.99 inch ; back length 25cm / 9.8 inch M:Bust 38 cm...', '<p>Description Product name:Pet Pajamas Fabric:Cotton blended Size: XS:Bust 30 cm / 11.8 inch ; back length 22cm / 8.5 inch S:Bust 33 cm / 12.99 inch ; back length 25cm / 9.8 inch M:Bust 38 cm... Description Product name:Pet Pajamas Fabric:Cotton blended Size: XS:Bust 30 cm / 11.8 inch ; back length 22cm / 8.5 inch S:Bust 33 cm / 12.99 inch ; back length 25cm / 9.8 inch M:Bust 38 cm... Description Product name:Pet Pajamas Fabric:Cotton blended Size: XS:Bust 30 cm / 11.8 inch ; back length 22cm / 8.5 inch S:Bust 33 cm / 12.99 inch ; back length 25cm / 9.8 inch M:Bust 38 cm...</p>', 'product-top-images/clothing4.jpg', 'product-owl-images/clothing6.jpg', 'product-images/clothing5.jpg', 1, '2017-10-25 04:21:52', '2017-10-25 04:21:52'),
(61, 3, 23, 3, 'Buy John Lewis', 'S38', 'Black', 'Bangladesh', '5', 2000.00, 0.00, 2000.00, 0, 1, 0, 0, 1, 1, 'Buy John Lewis Goodwin Oxford Leather Lace-Up Shoes from our Men\'s Shoes range at John Lewis. Free Delivery on orders over £50.', '<p>Buy John Lewis Goodwin Oxford Leather Lace-Up Shoes from our Men&#39;s Shoes range at John Lewis. Free Delivery on orders over &pound;50. Buy John Lewis Goodwin Oxford Leather Lace-Up Shoes from our Men&#39;s Shoes range at John Lewis. Free Delivery on orders over &pound;50. Buy John Lewis Goodwin Oxford Leather Lace-Up Shoes from our Men&#39;s Shoes range at John Lewis. Free Delivery on orders over &pound;50. Buy John Lewis Goodwin Oxford Leather Lace-Up Shoes from our Men&#39;s Shoes range at John Lewis. Free Delivery on orders over &pound;50.</p>', 'product-top-images/footwear1.jpg', 'product-owl-images/footwear3.jpg', 'product-images/footwear4.jpg', 1, '2017-10-25 04:28:27', '2017-10-25 04:28:27'),
(62, 3, 24, 8, 'Sandals Women\'s', 'S45', 'Black', 'Bangladesh', '10', 2000.00, 10.00, 1800.00, 0, 0, 0, 0, 1, 1, 'Slippers Sandal Women Shoes 2016 Summer Crystal Flat Flip Flops Slipper Women Sandals Women\'s Gold Black', '<p>Slippers Sandal Women Shoes 2016 Summer Crystal Flat Flip Flops Slipper Women Sandals Women&#39;s Gold Black</p>', 'product-top-images/footwear5.jpg', 'product-owl-images/footwear6.jpg', 'product-images/footwear7.jpg', 1, '2017-10-25 04:34:43', '2017-10-25 04:34:43'),
(63, 4, 28, 8, 'Diamond', 'D433', 'Yellow', 'Bangladesh', '4', 900.00, 20.00, 720.00, 0, 1, 0, 0, 1, 1, 'Diamond  Diamond Diamond Diamond Diamond Diamond Diamond', '<p><a class=\"_Epb irc_tas i3598 irc_lth\" href=\"https://www.google.com/url?sa=i&amp;rct=j&amp;q=&amp;esrc=s&amp;source=images&amp;cd=&amp;ved=0ahUKEwi15PL-yovXAhUD6Y8KHVBeCmMQjhwIBQ&amp;url=http%3A%2F%2Fwww.gemondo.com%2F9ct-white-gold-ruby-diamond-classic-drop-earrings-45cm-necklace-set&amp;psig=AOvVaw3-wy9xal9CZcOPXzKrbFgu&amp;ust=1509014238031011\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\">Diamond</span></a> <a class=\"_Epb irc_tas i3598 irc_lth\" href=\"https://www.google.com/url?sa=i&amp;rct=j&amp;q=&amp;esrc=s&amp;source=images&amp;cd=&amp;ved=0ahUKEwi15PL-yovXAhUD6Y8KHVBeCmMQjhwIBQ&amp;url=http%3A%2F%2Fwww.gemondo.com%2F9ct-white-gold-ruby-diamond-classic-drop-earrings-45cm-necklace-set&amp;psig=AOvVaw3-wy9xal9CZcOPXzKrbFgu&amp;ust=1509014238031011\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\"> Diamond</span></a> <a class=\"_Epb irc_tas i3598 irc_lth\" href=\"https://www.google.com/url?sa=i&amp;rct=j&amp;q=&amp;esrc=s&amp;source=images&amp;cd=&amp;ved=0ahUKEwi15PL-yovXAhUD6Y8KHVBeCmMQjhwIBQ&amp;url=http%3A%2F%2Fwww.gemondo.com%2F9ct-white-gold-ruby-diamond-classic-drop-earrings-45cm-necklace-set&amp;psig=AOvVaw3-wy9xal9CZcOPXzKrbFgu&amp;ust=1509014238031011\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\"> Diamond</span></a> <a class=\"_Epb irc_tas i3598 irc_lth\" href=\"https://www.google.com/url?sa=i&amp;rct=j&amp;q=&amp;esrc=s&amp;source=images&amp;cd=&amp;ved=0ahUKEwi15PL-yovXAhUD6Y8KHVBeCmMQjhwIBQ&amp;url=http%3A%2F%2Fwww.gemondo.com%2F9ct-white-gold-ruby-diamond-classic-drop-earrings-45cm-necklace-set&amp;psig=AOvVaw3-wy9xal9CZcOPXzKrbFgu&amp;ust=1509014238031011\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\"> Diamond</span></a> <a class=\"_Epb irc_tas i3598 irc_lth\" href=\"https://www.google.com/url?sa=i&amp;rct=j&amp;q=&amp;esrc=s&amp;source=images&amp;cd=&amp;ved=0ahUKEwi15PL-yovXAhUD6Y8KHVBeCmMQjhwIBQ&amp;url=http%3A%2F%2Fwww.gemondo.com%2F9ct-white-gold-ruby-diamond-classic-drop-earrings-45cm-necklace-set&amp;psig=AOvVaw3-wy9xal9CZcOPXzKrbFgu&amp;ust=1509014238031011\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\"> Diamond</span></a> <a class=\"_Epb irc_tas i3598 irc_lth\" href=\"https://www.google.com/url?sa=i&amp;rct=j&amp;q=&amp;esrc=s&amp;source=images&amp;cd=&amp;ved=0ahUKEwi15PL-yovXAhUD6Y8KHVBeCmMQjhwIBQ&amp;url=http%3A%2F%2Fwww.gemondo.com%2F9ct-white-gold-ruby-diamond-classic-drop-earrings-45cm-necklace-set&amp;psig=AOvVaw3-wy9xal9CZcOPXzKrbFgu&amp;ust=1509014238031011\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\"> Diamond</span></a> <a class=\"_Epb irc_tas i3598 irc_lth\" href=\"https://www.google.com/url?sa=i&amp;rct=j&amp;q=&amp;esrc=s&amp;source=images&amp;cd=&amp;ved=0ahUKEwi15PL-yovXAhUD6Y8KHVBeCmMQjhwIBQ&amp;url=http%3A%2F%2Fwww.gemondo.com%2F9ct-white-gold-ruby-diamond-classic-drop-earrings-45cm-necklace-set&amp;psig=AOvVaw3-wy9xal9CZcOPXzKrbFgu&amp;ust=1509014238031011\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\"> Diamond</span></a> <a class=\"_Epb irc_tas i3598 irc_lth\" href=\"https://www.google.com/url?sa=i&amp;rct=j&amp;q=&amp;esrc=s&amp;source=images&amp;cd=&amp;ved=0ahUKEwi15PL-yovXAhUD6Y8KHVBeCmMQjhwIBQ&amp;url=http%3A%2F%2Fwww.gemondo.com%2F9ct-white-gold-ruby-diamond-classic-drop-earrings-45cm-necklace-set&amp;psig=AOvVaw3-wy9xal9CZcOPXzKrbFgu&amp;ust=1509014238031011\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\"> Diamond</span></a> <a class=\"_Epb irc_tas i3598 irc_lth\" href=\"https://www.google.com/url?sa=i&amp;rct=j&amp;q=&amp;esrc=s&amp;source=images&amp;cd=&amp;ved=0ahUKEwi15PL-yovXAhUD6Y8KHVBeCmMQjhwIBQ&amp;url=http%3A%2F%2Fwww.gemondo.com%2F9ct-white-gold-ruby-diamond-classic-drop-earrings-45cm-necklace-set&amp;psig=AOvVaw3-wy9xal9CZcOPXzKrbFgu&amp;ust=1509014238031011\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\"> Diamond</span></a> <a class=\"_Epb irc_tas i3598 irc_lth\" href=\"https://www.google.com/url?sa=i&amp;rct=j&amp;q=&amp;esrc=s&amp;source=images&amp;cd=&amp;ved=0ahUKEwi15PL-yovXAhUD6Y8KHVBeCmMQjhwIBQ&amp;url=http%3A%2F%2Fwww.gemondo.com%2F9ct-white-gold-ruby-diamond-classic-drop-earrings-45cm-necklace-set&amp;psig=AOvVaw3-wy9xal9CZcOPXzKrbFgu&amp;ust=1509014238031011\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\"> Diamond</span></a> <a class=\"_Epb irc_tas i3598 irc_lth\" href=\"https://www.google.com/url?sa=i&amp;rct=j&amp;q=&amp;esrc=s&amp;source=images&amp;cd=&amp;ved=0ahUKEwi15PL-yovXAhUD6Y8KHVBeCmMQjhwIBQ&amp;url=http%3A%2F%2Fwww.gemondo.com%2F9ct-white-gold-ruby-diamond-classic-drop-earrings-45cm-necklace-set&amp;psig=AOvVaw3-wy9xal9CZcOPXzKrbFgu&amp;ust=1509014238031011\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\"> Diamond</span></a> <a class=\"_Epb irc_tas i3598 irc_lth\" href=\"https://www.google.com/url?sa=i&amp;rct=j&amp;q=&amp;esrc=s&amp;source=images&amp;cd=&amp;ved=0ahUKEwi15PL-yovXAhUD6Y8KHVBeCmMQjhwIBQ&amp;url=http%3A%2F%2Fwww.gemondo.com%2F9ct-white-gold-ruby-diamond-classic-drop-earrings-45cm-necklace-set&amp;psig=AOvVaw3-wy9xal9CZcOPXzKrbFgu&amp;ust=1509014238031011\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\"> Diamond</span></a> <a class=\"_Epb irc_tas i3598 irc_lth\" href=\"https://www.google.com/url?sa=i&amp;rct=j&amp;q=&amp;esrc=s&amp;source=images&amp;cd=&amp;ved=0ahUKEwi15PL-yovXAhUD6Y8KHVBeCmMQjhwIBQ&amp;url=http%3A%2F%2Fwww.gemondo.com%2F9ct-white-gold-ruby-diamond-classic-drop-earrings-45cm-necklace-set&amp;psig=AOvVaw3-wy9xal9CZcOPXzKrbFgu&amp;ust=1509014238031011\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\"> Diamond</span></a> <a class=\"_Epb irc_tas i3598 irc_lth\" href=\"https://www.google.com/url?sa=i&amp;rct=j&amp;q=&amp;esrc=s&amp;source=images&amp;cd=&amp;ved=0ahUKEwi15PL-yovXAhUD6Y8KHVBeCmMQjhwIBQ&amp;url=http%3A%2F%2Fwww.gemondo.com%2F9ct-white-gold-ruby-diamond-classic-drop-earrings-45cm-necklace-set&amp;psig=AOvVaw3-wy9xal9CZcOPXzKrbFgu&amp;ust=1509014238031011\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\"> Diamond</span></a> <a class=\"_Epb irc_tas i3598 irc_lth\" href=\"https://www.google.com/url?sa=i&amp;rct=j&amp;q=&amp;esrc=s&amp;source=images&amp;cd=&amp;ved=0ahUKEwi15PL-yovXAhUD6Y8KHVBeCmMQjhwIBQ&amp;url=http%3A%2F%2Fwww.gemondo.com%2F9ct-white-gold-ruby-diamond-classic-drop-earrings-45cm-necklace-set&amp;psig=AOvVaw3-wy9xal9CZcOPXzKrbFgu&amp;ust=1509014238031011\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\"> Diamond</span></a></p>', 'product-top-images/jewelry3.jpg', 'product-owl-images/jewelry2.jpg', 'product-images/jewelry1.jpg', 1, '2017-10-25 04:44:39', '2017-10-25 04:44:39'),
(64, 4, 26, 10, 'Diamond', 'D4330', 'Silver', 'Bangladesh', '3', 700.00, 0.00, 700.00, 0, 0, 0, 0, 1, 1, 'Diamond Diamond  Diamond Diamond  Diamond  Diamond Diamond Diamond Diamond', '<p><a class=\"_Epb irc_tas i3598 irc_lth\" href=\"https://www.google.com/url?sa=i&amp;rct=j&amp;q=&amp;esrc=s&amp;source=images&amp;cd=&amp;ved=0ahUKEwi15PL-yovXAhUD6Y8KHVBeCmMQjhwIBQ&amp;url=http%3A%2F%2Fwww.gemondo.com%2F9ct-white-gold-ruby-diamond-classic-drop-earrings-45cm-necklace-set&amp;psig=AOvVaw3-wy9xal9CZcOPXzKrbFgu&amp;ust=1509014238031011\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\">Diamond</span></a> <a class=\"_Epb irc_tas i3598 irc_lth\" href=\"https://www.google.com/url?sa=i&amp;rct=j&amp;q=&amp;esrc=s&amp;source=images&amp;cd=&amp;ved=0ahUKEwi15PL-yovXAhUD6Y8KHVBeCmMQjhwIBQ&amp;url=http%3A%2F%2Fwww.gemondo.com%2F9ct-white-gold-ruby-diamond-classic-drop-earrings-45cm-necklace-set&amp;psig=AOvVaw3-wy9xal9CZcOPXzKrbFgu&amp;ust=1509014238031011\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\"> Diamond</span></a> <a class=\"_Epb irc_tas i3598 irc_lth\" href=\"https://www.google.com/url?sa=i&amp;rct=j&amp;q=&amp;esrc=s&amp;source=images&amp;cd=&amp;ved=0ahUKEwi15PL-yovXAhUD6Y8KHVBeCmMQjhwIBQ&amp;url=http%3A%2F%2Fwww.gemondo.com%2F9ct-white-gold-ruby-diamond-classic-drop-earrings-45cm-necklace-set&amp;psig=AOvVaw3-wy9xal9CZcOPXzKrbFgu&amp;ust=1509014238031011\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\"> Diamond</span></a> <a class=\"_Epb irc_tas i3598 irc_lth\" href=\"https://www.google.com/url?sa=i&amp;rct=j&amp;q=&amp;esrc=s&amp;source=images&amp;cd=&amp;ved=0ahUKEwi15PL-yovXAhUD6Y8KHVBeCmMQjhwIBQ&amp;url=http%3A%2F%2Fwww.gemondo.com%2F9ct-white-gold-ruby-diamond-classic-drop-earrings-45cm-necklace-set&amp;psig=AOvVaw3-wy9xal9CZcOPXzKrbFgu&amp;ust=1509014238031011\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\"> Diamond</span></a> <a class=\"_Epb irc_tas i3598 irc_lth\" href=\"https://www.google.com/url?sa=i&amp;rct=j&amp;q=&amp;esrc=s&amp;source=images&amp;cd=&amp;ved=0ahUKEwi15PL-yovXAhUD6Y8KHVBeCmMQjhwIBQ&amp;url=http%3A%2F%2Fwww.gemondo.com%2F9ct-white-gold-ruby-diamond-classic-drop-earrings-45cm-necklace-set&amp;psig=AOvVaw3-wy9xal9CZcOPXzKrbFgu&amp;ust=1509014238031011\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\"> Diamond</span></a> <a class=\"_Epb irc_tas i3598 irc_lth\" href=\"https://www.google.com/url?sa=i&amp;rct=j&amp;q=&amp;esrc=s&amp;source=images&amp;cd=&amp;ved=0ahUKEwi15PL-yovXAhUD6Y8KHVBeCmMQjhwIBQ&amp;url=http%3A%2F%2Fwww.gemondo.com%2F9ct-white-gold-ruby-diamond-classic-drop-earrings-45cm-necklace-set&amp;psig=AOvVaw3-wy9xal9CZcOPXzKrbFgu&amp;ust=1509014238031011\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\"> Diamond</span></a> <a class=\"_Epb irc_tas i3598 irc_lth\" href=\"https://www.google.com/url?sa=i&amp;rct=j&amp;q=&amp;esrc=s&amp;source=images&amp;cd=&amp;ved=0ahUKEwi15PL-yovXAhUD6Y8KHVBeCmMQjhwIBQ&amp;url=http%3A%2F%2Fwww.gemondo.com%2F9ct-white-gold-ruby-diamond-classic-drop-earrings-45cm-necklace-set&amp;psig=AOvVaw3-wy9xal9CZcOPXzKrbFgu&amp;ust=1509014238031011\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\"> Diamond</span></a> <a class=\"_Epb irc_tas i3598 irc_lth\" href=\"https://www.google.com/url?sa=i&amp;rct=j&amp;q=&amp;esrc=s&amp;source=images&amp;cd=&amp;ved=0ahUKEwi15PL-yovXAhUD6Y8KHVBeCmMQjhwIBQ&amp;url=http%3A%2F%2Fwww.gemondo.com%2F9ct-white-gold-ruby-diamond-classic-drop-earrings-45cm-necklace-set&amp;psig=AOvVaw3-wy9xal9CZcOPXzKrbFgu&amp;ust=1509014238031011\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\"> Diamond</span></a> <a class=\"_Epb irc_tas i3598 irc_lth\" href=\"https://www.google.com/url?sa=i&amp;rct=j&amp;q=&amp;esrc=s&amp;source=images&amp;cd=&amp;ved=0ahUKEwi15PL-yovXAhUD6Y8KHVBeCmMQjhwIBQ&amp;url=http%3A%2F%2Fwww.gemondo.com%2F9ct-white-gold-ruby-diamond-classic-drop-earrings-45cm-necklace-set&amp;psig=AOvVaw3-wy9xal9CZcOPXzKrbFgu&amp;ust=1509014238031011\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\"> Diamond</span></a> <a class=\"_Epb irc_tas i3598 irc_lth\" href=\"https://www.google.com/url?sa=i&amp;rct=j&amp;q=&amp;esrc=s&amp;source=images&amp;cd=&amp;ved=0ahUKEwi15PL-yovXAhUD6Y8KHVBeCmMQjhwIBQ&amp;url=http%3A%2F%2Fwww.gemondo.com%2F9ct-white-gold-ruby-diamond-classic-drop-earrings-45cm-necklace-set&amp;psig=AOvVaw3-wy9xal9CZcOPXzKrbFgu&amp;ust=1509014238031011\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\"> Diamond</span></a> <a class=\"_Epb irc_tas i3598 irc_lth\" href=\"https://www.google.com/url?sa=i&amp;rct=j&amp;q=&amp;esrc=s&amp;source=images&amp;cd=&amp;ved=0ahUKEwi15PL-yovXAhUD6Y8KHVBeCmMQjhwIBQ&amp;url=http%3A%2F%2Fwww.gemondo.com%2F9ct-white-gold-ruby-diamond-classic-drop-earrings-45cm-necklace-set&amp;psig=AOvVaw3-wy9xal9CZcOPXzKrbFgu&amp;ust=1509014238031011\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\"> Diamond</span></a> <a class=\"_Epb irc_tas i3598 irc_lth\" href=\"https://www.google.com/url?sa=i&amp;rct=j&amp;q=&amp;esrc=s&amp;source=images&amp;cd=&amp;ved=0ahUKEwi15PL-yovXAhUD6Y8KHVBeCmMQjhwIBQ&amp;url=http%3A%2F%2Fwww.gemondo.com%2F9ct-white-gold-ruby-diamond-classic-drop-earrings-45cm-necklace-set&amp;psig=AOvVaw3-wy9xal9CZcOPXzKrbFgu&amp;ust=1509014238031011\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\"> Diamond</span></a> <a class=\"_Epb irc_tas i3598 irc_lth\" href=\"https://www.google.com/url?sa=i&amp;rct=j&amp;q=&amp;esrc=s&amp;source=images&amp;cd=&amp;ved=0ahUKEwi15PL-yovXAhUD6Y8KHVBeCmMQjhwIBQ&amp;url=http%3A%2F%2Fwww.gemondo.com%2F9ct-white-gold-ruby-diamond-classic-drop-earrings-45cm-necklace-set&amp;psig=AOvVaw3-wy9xal9CZcOPXzKrbFgu&amp;ust=1509014238031011\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\"> Diamond</span></a> <a class=\"_Epb irc_tas i3598 irc_lth\" href=\"https://www.google.com/url?sa=i&amp;rct=j&amp;q=&amp;esrc=s&amp;source=images&amp;cd=&amp;ved=0ahUKEwi15PL-yovXAhUD6Y8KHVBeCmMQjhwIBQ&amp;url=http%3A%2F%2Fwww.gemondo.com%2F9ct-white-gold-ruby-diamond-classic-drop-earrings-45cm-necklace-set&amp;psig=AOvVaw3-wy9xal9CZcOPXzKrbFgu&amp;ust=1509014238031011\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\"> Diamond</span></a> <a class=\"_Epb irc_tas i3598 irc_lth\" href=\"https://www.google.com/url?sa=i&amp;rct=j&amp;q=&amp;esrc=s&amp;source=images&amp;cd=&amp;ved=0ahUKEwi15PL-yovXAhUD6Y8KHVBeCmMQjhwIBQ&amp;url=http%3A%2F%2Fwww.gemondo.com%2F9ct-white-gold-ruby-diamond-classic-drop-earrings-45cm-necklace-set&amp;psig=AOvVaw3-wy9xal9CZcOPXzKrbFgu&amp;ust=1509014238031011\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\"> Diamond</span></a> <a class=\"_Epb irc_tas i3598 irc_lth\" href=\"https://www.google.com/url?sa=i&amp;rct=j&amp;q=&amp;esrc=s&amp;source=images&amp;cd=&amp;ved=0ahUKEwi15PL-yovXAhUD6Y8KHVBeCmMQjhwIBQ&amp;url=http%3A%2F%2Fwww.gemondo.com%2F9ct-white-gold-ruby-diamond-classic-drop-earrings-45cm-necklace-set&amp;psig=AOvVaw3-wy9xal9CZcOPXzKrbFgu&amp;ust=1509014238031011\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\"> Diamond</span></a> <a class=\"_Epb irc_tas i3598 irc_lth\" href=\"https://www.google.com/url?sa=i&amp;rct=j&amp;q=&amp;esrc=s&amp;source=images&amp;cd=&amp;ved=0ahUKEwi15PL-yovXAhUD6Y8KHVBeCmMQjhwIBQ&amp;url=http%3A%2F%2Fwww.gemondo.com%2F9ct-white-gold-ruby-diamond-classic-drop-earrings-45cm-necklace-set&amp;psig=AOvVaw3-wy9xal9CZcOPXzKrbFgu&amp;ust=1509014238031011\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\"> Diamond</span></a> <a class=\"_Epb irc_tas i3598 irc_lth\" href=\"https://www.google.com/url?sa=i&amp;rct=j&amp;q=&amp;esrc=s&amp;source=images&amp;cd=&amp;ved=0ahUKEwi15PL-yovXAhUD6Y8KHVBeCmMQjhwIBQ&amp;url=http%3A%2F%2Fwww.gemondo.com%2F9ct-white-gold-ruby-diamond-classic-drop-earrings-45cm-necklace-set&amp;psig=AOvVaw3-wy9xal9CZcOPXzKrbFgu&amp;ust=1509014238031011\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\"> Diamond</span></a> <a class=\"_Epb irc_tas i3598 irc_lth\" href=\"https://www.google.com/url?sa=i&amp;rct=j&amp;q=&amp;esrc=s&amp;source=images&amp;cd=&amp;ved=0ahUKEwi15PL-yovXAhUD6Y8KHVBeCmMQjhwIBQ&amp;url=http%3A%2F%2Fwww.gemondo.com%2F9ct-white-gold-ruby-diamond-classic-drop-earrings-45cm-necklace-set&amp;psig=AOvVaw3-wy9xal9CZcOPXzKrbFgu&amp;ust=1509014238031011\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\"> Diamond</span></a> <a class=\"_Epb irc_tas i3598 irc_lth\" href=\"https://www.google.com/url?sa=i&amp;rct=j&amp;q=&amp;esrc=s&amp;source=images&amp;cd=&amp;ved=0ahUKEwi15PL-yovXAhUD6Y8KHVBeCmMQjhwIBQ&amp;url=http%3A%2F%2Fwww.gemondo.com%2F9ct-white-gold-ruby-diamond-classic-drop-earrings-45cm-necklace-set&amp;psig=AOvVaw3-wy9xal9CZcOPXzKrbFgu&amp;ust=1509014238031011\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\"> Diamond</span></a> <a class=\"_Epb irc_tas i3598 irc_lth\" href=\"https://www.google.com/url?sa=i&amp;rct=j&amp;q=&amp;esrc=s&amp;source=images&amp;cd=&amp;ved=0ahUKEwi15PL-yovXAhUD6Y8KHVBeCmMQjhwIBQ&amp;url=http%3A%2F%2Fwww.gemondo.com%2F9ct-white-gold-ruby-diamond-classic-drop-earrings-45cm-necklace-set&amp;psig=AOvVaw3-wy9xal9CZcOPXzKrbFgu&amp;ust=1509014238031011\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\"> Diamond</span></a> <a class=\"_Epb irc_tas i3598 irc_lth\" href=\"https://www.google.com/url?sa=i&amp;rct=j&amp;q=&amp;esrc=s&amp;source=images&amp;cd=&amp;ved=0ahUKEwi15PL-yovXAhUD6Y8KHVBeCmMQjhwIBQ&amp;url=http%3A%2F%2Fwww.gemondo.com%2F9ct-white-gold-ruby-diamond-classic-drop-earrings-45cm-necklace-set&amp;psig=AOvVaw3-wy9xal9CZcOPXzKrbFgu&amp;ust=1509014238031011\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\"> Diamond</span></a> <a class=\"_Epb irc_tas i3598 irc_lth\" href=\"https://www.google.com/url?sa=i&amp;rct=j&amp;q=&amp;esrc=s&amp;source=images&amp;cd=&amp;ved=0ahUKEwi15PL-yovXAhUD6Y8KHVBeCmMQjhwIBQ&amp;url=http%3A%2F%2Fwww.gemondo.com%2F9ct-white-gold-ruby-diamond-classic-drop-earrings-45cm-necklace-set&amp;psig=AOvVaw3-wy9xal9CZcOPXzKrbFgu&amp;ust=1509014238031011\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\"> Diamond</span></a> <a class=\"_Epb irc_tas i3598 irc_lth\" href=\"https://www.google.com/url?sa=i&amp;rct=j&amp;q=&amp;esrc=s&amp;source=images&amp;cd=&amp;ved=0ahUKEwi15PL-yovXAhUD6Y8KHVBeCmMQjhwIBQ&amp;url=http%3A%2F%2Fwww.gemondo.com%2F9ct-white-gold-ruby-diamond-classic-drop-earrings-45cm-necklace-set&amp;psig=AOvVaw3-wy9xal9CZcOPXzKrbFgu&amp;ust=1509014238031011\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\"> Diamond</span></a> <a class=\"_Epb irc_tas i3598 irc_lth\" href=\"https://www.google.com/url?sa=i&amp;rct=j&amp;q=&amp;esrc=s&amp;source=images&amp;cd=&amp;ved=0ahUKEwi15PL-yovXAhUD6Y8KHVBeCmMQjhwIBQ&amp;url=http%3A%2F%2Fwww.gemondo.com%2F9ct-white-gold-ruby-diamond-classic-drop-earrings-45cm-necklace-set&amp;psig=AOvVaw3-wy9xal9CZcOPXzKrbFgu&amp;ust=1509014238031011\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\"> Diamond</span></a> <a class=\"_Epb irc_tas i3598 irc_lth\" href=\"https://www.google.com/url?sa=i&amp;rct=j&amp;q=&amp;esrc=s&amp;source=images&amp;cd=&amp;ved=0ahUKEwi15PL-yovXAhUD6Y8KHVBeCmMQjhwIBQ&amp;url=http%3A%2F%2Fwww.gemondo.com%2F9ct-white-gold-ruby-diamond-classic-drop-earrings-45cm-necklace-set&amp;psig=AOvVaw3-wy9xal9CZcOPXzKrbFgu&amp;ust=1509014238031011\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\"> Diamond</span></a> <a class=\"_Epb irc_tas i3598 irc_lth\" href=\"https://www.google.com/url?sa=i&amp;rct=j&amp;q=&amp;esrc=s&amp;source=images&amp;cd=&amp;ved=0ahUKEwi15PL-yovXAhUD6Y8KHVBeCmMQjhwIBQ&amp;url=http%3A%2F%2Fwww.gemondo.com%2F9ct-white-gold-ruby-diamond-classic-drop-earrings-45cm-necklace-set&amp;psig=AOvVaw3-wy9xal9CZcOPXzKrbFgu&amp;ust=1509014238031011\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\"> Diamond</span></a> <a class=\"_Epb irc_tas i3598 irc_lth\" href=\"https://www.google.com/url?sa=i&amp;rct=j&amp;q=&amp;esrc=s&amp;source=images&amp;cd=&amp;ved=0ahUKEwi15PL-yovXAhUD6Y8KHVBeCmMQjhwIBQ&amp;url=http%3A%2F%2Fwww.gemondo.com%2F9ct-white-gold-ruby-diamond-classic-drop-earrings-45cm-necklace-set&amp;psig=AOvVaw3-wy9xal9CZcOPXzKrbFgu&amp;ust=1509014238031011\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\"> Diamond</span></a> <a class=\"_Epb irc_tas i3598 irc_lth\" href=\"https://www.google.com/url?sa=i&amp;rct=j&amp;q=&amp;esrc=s&amp;source=images&amp;cd=&amp;ved=0ahUKEwi15PL-yovXAhUD6Y8KHVBeCmMQjhwIBQ&amp;url=http%3A%2F%2Fwww.gemondo.com%2F9ct-white-gold-ruby-diamond-classic-drop-earrings-45cm-necklace-set&amp;psig=AOvVaw3-wy9xal9CZcOPXzKrbFgu&amp;ust=1509014238031011\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\"> Diamond</span></a> <a class=\"_Epb irc_tas i3598 irc_lth\" href=\"https://www.google.com/url?sa=i&amp;rct=j&amp;q=&amp;esrc=s&amp;source=images&amp;cd=&amp;ved=0ahUKEwi15PL-yovXAhUD6Y8KHVBeCmMQjhwIBQ&amp;url=http%3A%2F%2Fwww.gemondo.com%2F9ct-white-gold-ruby-diamond-classic-drop-earrings-45cm-necklace-set&amp;psig=AOvVaw3-wy9xal9CZcOPXzKrbFgu&amp;ust=1509014238031011\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\"> Diamond</span></a> <a class=\"_Epb irc_tas i3598 irc_lth\" href=\"https://www.google.com/url?sa=i&amp;rct=j&amp;q=&amp;esrc=s&amp;source=images&amp;cd=&amp;ved=0ahUKEwi15PL-yovXAhUD6Y8KHVBeCmMQjhwIBQ&amp;url=http%3A%2F%2Fwww.gemondo.com%2F9ct-white-gold-ruby-diamond-classic-drop-earrings-45cm-necklace-set&amp;psig=AOvVaw3-wy9xal9CZcOPXzKrbFgu&amp;ust=1509014238031011\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\"> Diamond</span></a> <a class=\"_Epb irc_tas i3598 irc_lth\" href=\"https://www.google.com/url?sa=i&amp;rct=j&amp;q=&amp;esrc=s&amp;source=images&amp;cd=&amp;ved=0ahUKEwi15PL-yovXAhUD6Y8KHVBeCmMQjhwIBQ&amp;url=http%3A%2F%2Fwww.gemondo.com%2F9ct-white-gold-ruby-diamond-classic-drop-earrings-45cm-necklace-set&amp;psig=AOvVaw3-wy9xal9CZcOPXzKrbFgu&amp;ust=1509014238031011\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\"> Diamond</span></a></p>', 'product-top-images/jewelry4.jpg', 'product-owl-images/jewelry6.jpg', 'product-images/jewelry5.jpg', 1, '2017-10-25 04:47:39', '2017-10-25 04:47:39'),
(65, 5, 32, 8, 'Wach', 'W3456', 'Silver', 'Bangladesh', '8', 6000.00, 20.00, 4800.00, 0, 0, 0, 0, 1, 1, 'Men\'s Swiss Military Hanowa Watch', '<p><a class=\"_Epb irc_tas i3598 irc_lth\" href=\"http://www.watchshop.com/mens-swiss-military-hanowa-watch-6-5259-04-003-p99979743.html\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\">Men&#39;s Swiss Military Hanowa Watch</span></a>&nbsp; <a class=\"_Epb irc_tas i3598 irc_lth\" href=\"http://www.watchshop.com/mens-swiss-military-hanowa-watch-6-5259-04-003-p99979743.html\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\">Men&#39;s Swiss Military Hanowa Watch</span></a> <a class=\"_Epb irc_tas i3598 irc_lth\" href=\"http://www.watchshop.com/mens-swiss-military-hanowa-watch-6-5259-04-003-p99979743.html\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\">Men&#39;s Swiss Military Hanowa Watch</span></a> <a class=\"_Epb irc_tas i3598 irc_lth\" href=\"http://www.watchshop.com/mens-swiss-military-hanowa-watch-6-5259-04-003-p99979743.html\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\">Men&#39;s Swiss Military Hanowa Watch</span></a> <a class=\"_Epb irc_tas i3598 irc_lth\" href=\"http://www.watchshop.com/mens-swiss-military-hanowa-watch-6-5259-04-003-p99979743.html\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\">Men&#39;s Swiss Military Hanowa Watch</span></a> <a class=\"_Epb irc_tas i3598 irc_lth\" href=\"http://www.watchshop.com/mens-swiss-military-hanowa-watch-6-5259-04-003-p99979743.html\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\">Men&#39;s Swiss Military Hanowa Watch</span></a> <a class=\"_Epb irc_tas i3598 irc_lth\" href=\"http://www.watchshop.com/mens-swiss-military-hanowa-watch-6-5259-04-003-p99979743.html\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\">Men&#39;s Swiss Military Hanowa Watch</span></a> <a class=\"_Epb irc_tas i3598 irc_lth\" href=\"http://www.watchshop.com/mens-swiss-military-hanowa-watch-6-5259-04-003-p99979743.html\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\">Men&#39;s Swiss Military Hanowa Watch</span></a> <a class=\"_Epb irc_tas i3598 irc_lth\" href=\"http://www.watchshop.com/mens-swiss-military-hanowa-watch-6-5259-04-003-p99979743.html\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\">Men&#39;s Swiss Military Hanowa Watch</span></a> <a class=\"_Epb irc_tas i3598 irc_lth\" href=\"http://www.watchshop.com/mens-swiss-military-hanowa-watch-6-5259-04-003-p99979743.html\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\">Men&#39;s Swiss Military Hanowa Watch</span></a></p>', 'product-top-images/lifestyle1.jpg', 'product-owl-images/lifestyle3.jpg', 'product-images/lifestyle2.jpg', 1, '2017-10-25 04:56:29', '2017-10-25 04:56:29'),
(66, 5, 32, 3, 'Michael Kors', 'L8272', 'Black', 'Bangladesh', '6', 9000.00, 10.00, 8100.00, 0, 0, 0, 0, 1, 1, 'Shop for Michael Kors Slater Chronograph Leather-Strap Watch at Dillards.com. Visit Dillards.com to find clothing, accessories, shoes, cosmetics & more. The Style of Your Life.', '<p>Shop for Michael Kors Slater Chronograph Leather-Strap Watch at Dillards.com. Visit Dillards.com to find clothing, accessories, shoes, cosmetics &amp; more. The Style of Your Life. Shop for Michael Kors Slater Chronograph Leather-Strap Watch at Dillards.com. Visit Dillards.com to find clothing, accessories, shoes, cosmetics &amp; more. The Style of Your Life.</p>', 'product-top-images/lifestyle4.jpg', 'product-owl-images/lifestyle6.jpg', 'product-images/lifestyle5.jpg', 1, '2017-10-25 05:03:45', '2017-10-25 05:03:45'),
(67, 6, 33, 1, 'Islamic Book', 'I2323', 'Black', 'Bangldesh', '10', 200.00, 0.00, 200.00, 0, 0, 0, 0, 1, 1, 'Islamic Banking and Financial Crisis', '<p><a class=\"_Epb irc_tas i3598 irc_lth\" href=\"http://www.zulkiflihasan.com/product/islamic-banking-and-financial-crisis-reputation-stability-and-risks/\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\">Islamic Banking and Financial Crisis</span></a>&nbsp; <a class=\"_Epb irc_tas i3598 irc_lth\" href=\"http://www.zulkiflihasan.com/product/islamic-banking-and-financial-crisis-reputation-stability-and-risks/\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\">Islamic Banking and Financial Crisis</span></a> <a class=\"_Epb irc_tas i3598 irc_lth\" href=\"http://www.zulkiflihasan.com/product/islamic-banking-and-financial-crisis-reputation-stability-and-risks/\" rel=\"noopener\" tabindex=\"0\" target=\"_blank\"><span dir=\"ltr\">Islamic Banking and Financial Crisis</span></a></p>', 'product-top-images/islamic2 - Copy (3).png', 'product-owl-images/islamic2 - Copy.png', 'product-images/islamic2.png', 1, '2017-10-25 05:18:24', '2017-10-25 05:18:24');

-- --------------------------------------------------------

--
-- Table structure for table `product_size_widths`
--

CREATE TABLE `product_size_widths` (
  `id` int(10) NOT NULL,
  `product_id` int(11) NOT NULL,
  `size_width_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_size_widths`
--

INSERT INTO `product_size_widths` (`id`, `product_id`, `size_width_id`, `created_at`, `updated_at`) VALUES
(57, 40, 4, '2017-10-21 01:24:25', '2017-10-21 01:24:25'),
(58, 40, 5, '2017-10-21 01:24:25', '2017-10-21 01:24:25'),
(59, 40, 6, '2017-10-21 01:24:25', '2017-10-21 01:24:25'),
(60, 41, 4, '2017-10-21 01:26:04', '2017-10-21 01:26:04'),
(61, 41, 5, '2017-10-21 01:26:04', '2017-10-21 01:26:04'),
(62, 41, 6, '2017-10-21 01:26:04', '2017-10-21 01:26:04'),
(70, 45, 4, '2017-10-22 02:08:16', '2017-10-22 02:08:16'),
(71, 45, 5, '2017-10-22 02:08:16', '2017-10-22 02:08:16'),
(72, 46, 4, '2017-10-22 02:23:31', '2017-10-22 02:23:31'),
(73, 46, 5, '2017-10-22 02:23:31', '2017-10-22 02:23:31'),
(74, 46, 6, '2017-10-22 02:23:31', '2017-10-22 02:23:31'),
(75, 47, 1, '2017-10-22 02:34:56', '2017-10-22 02:34:56'),
(76, 47, 4, '2017-10-22 02:34:56', '2017-10-22 02:34:56'),
(77, 47, 5, '2017-10-22 02:34:56', '2017-10-22 02:34:56'),
(78, 47, 6, '2017-10-22 02:34:56', '2017-10-22 02:34:56'),
(79, 48, 1, '2017-10-22 02:42:58', '2017-10-22 02:42:58'),
(80, 48, 4, '2017-10-22 02:42:58', '2017-10-22 02:42:58'),
(81, 48, 5, '2017-10-22 02:42:58', '2017-10-22 02:42:58'),
(82, 48, 6, '2017-10-22 02:42:58', '2017-10-22 02:42:58'),
(83, 49, 1, '2017-10-22 02:56:48', '2017-10-22 02:56:48'),
(84, 49, 4, '2017-10-22 02:56:48', '2017-10-22 02:56:48'),
(85, 49, 5, '2017-10-22 02:56:48', '2017-10-22 02:56:48'),
(86, 49, 6, '2017-10-22 02:56:48', '2017-10-22 02:56:48'),
(87, 50, 1, '2017-10-22 03:07:24', '2017-10-22 03:07:24'),
(88, 50, 5, '2017-10-22 03:07:24', '2017-10-22 03:07:24'),
(89, 53, 1, '2017-10-22 03:12:58', '2017-10-22 03:12:58'),
(90, 53, 4, '2017-10-22 03:12:58', '2017-10-22 03:12:58'),
(91, 54, 4, '2017-10-22 03:18:09', '2017-10-22 03:18:09'),
(92, 54, 5, '2017-10-22 03:18:09', '2017-10-22 03:18:09'),
(104, 57, 1, '2017-10-25 04:03:19', '2017-10-25 04:03:19'),
(105, 57, 4, '2017-10-25 04:03:19', '2017-10-25 04:03:19'),
(106, 57, 5, '2017-10-25 04:03:19', '2017-10-25 04:03:19'),
(107, 58, 1, '2017-10-25 04:09:39', '2017-10-25 04:09:39'),
(108, 58, 4, '2017-10-25 04:09:39', '2017-10-25 04:09:39'),
(109, 58, 5, '2017-10-25 04:09:39', '2017-10-25 04:09:39'),
(113, 60, 1, '2017-10-25 04:21:52', '2017-10-25 04:21:52'),
(114, 60, 4, '2017-10-25 04:21:52', '2017-10-25 04:21:52'),
(115, 60, 5, '2017-10-25 04:21:52', '2017-10-25 04:21:52'),
(116, 60, 6, '2017-10-25 04:21:52', '2017-10-25 04:21:52'),
(117, 61, 1, '2017-10-25 04:28:27', '2017-10-25 04:28:27'),
(118, 61, 4, '2017-10-25 04:28:27', '2017-10-25 04:28:27'),
(119, 61, 5, '2017-10-25 04:28:27', '2017-10-25 04:28:27'),
(120, 62, 1, '2017-10-25 04:34:43', '2017-10-25 04:34:43'),
(121, 62, 4, '2017-10-25 04:34:43', '2017-10-25 04:34:43'),
(122, 62, 5, '2017-10-25 04:34:43', '2017-10-25 04:34:43'),
(123, 62, 6, '2017-10-25 04:34:43', '2017-10-25 04:34:43'),
(124, 59, 4, '2017-10-25 04:35:55', '2017-10-25 04:35:55'),
(125, 59, 5, '2017-10-25 04:35:55', '2017-10-25 04:35:55'),
(126, 59, 6, '2017-10-25 04:35:55', '2017-10-25 04:35:55'),
(127, 63, 1, '2017-10-25 04:44:39', '2017-10-25 04:44:39'),
(128, 63, 4, '2017-10-25 04:44:39', '2017-10-25 04:44:39'),
(129, 63, 5, '2017-10-25 04:44:39', '2017-10-25 04:44:39'),
(130, 64, 1, '2017-10-25 04:47:39', '2017-10-25 04:47:39'),
(131, 64, 4, '2017-10-25 04:47:39', '2017-10-25 04:47:39'),
(132, 64, 5, '2017-10-25 04:47:39', '2017-10-25 04:47:39'),
(133, 65, 4, '2017-10-25 04:56:29', '2017-10-25 04:56:29'),
(134, 65, 5, '2017-10-25 04:56:29', '2017-10-25 04:56:29'),
(135, 65, 6, '2017-10-25 04:56:29', '2017-10-25 04:56:29'),
(136, 66, 4, '2017-10-25 05:03:45', '2017-10-25 05:03:45'),
(137, 66, 5, '2017-10-25 05:03:45', '2017-10-25 05:03:45'),
(138, 66, 6, '2017-10-25 05:03:45', '2017-10-25 05:03:45'),
(139, 67, 4, '2017-10-25 05:18:24', '2017-10-25 05:18:24'),
(140, 67, 5, '2017-10-25 05:18:24', '2017-10-25 05:18:24'),
(141, 67, 6, '2017-10-25 05:18:24', '2017-10-25 05:18:24');

-- --------------------------------------------------------

--
-- Table structure for table `product_sub_images`
--

CREATE TABLE `product_sub_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_sub_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_sub_images`
--

INSERT INTO `product_sub_images` (`id`, `product_id`, `product_sub_image`, `created_at`, `updated_at`) VALUES
(126, 40, 'product-sub-images/images (4).jpg', '2017-10-21 01:24:25', '2017-10-21 01:24:25'),
(127, 40, 'product-sub-images/images (5).jpg', '2017-10-21 01:24:25', '2017-10-21 01:24:25'),
(128, 40, 'product-sub-images/images (6).jpg', '2017-10-21 01:24:25', '2017-10-21 01:24:25'),
(130, 41, 'product-sub-images/images (7).jpg', '2017-10-21 01:26:04', '2017-10-21 01:26:04'),
(131, 41, 'product-sub-images/images.jpg', '2017-10-21 01:26:04', '2017-10-21 01:26:04'),
(139, 45, 'product-sub-images/warehouse_02969003_1.jpg', '2017-10-22 02:08:16', '2017-10-22 02:08:16'),
(140, 46, 'product-sub-images/Fancy-designer-shirt-regular-fit-short-sleeve.jpg_350x350.jpg', '2017-10-22 02:23:31', '2017-10-22 02:23:31'),
(141, 47, 'product-sub-images/Fancy-designer-shirt-regular-fit-short-sleeve.jpg_350x350.jpg', '2017-10-22 02:34:56', '2017-10-22 02:34:56'),
(142, 47, 'product-sub-images/men-s-business-casual-shirt-black-132307-a.jpg', '2017-10-22 02:34:56', '2017-10-22 02:34:56'),
(143, 47, 'product-sub-images/s-l300.jpg', '2017-10-22 02:34:56', '2017-10-22 02:34:56'),
(144, 48, 'product-sub-images/$_35.JPG', '2017-10-22 02:42:58', '2017-10-22 02:42:58'),
(145, 48, 'product-sub-images/eqywt03529_crossedtide,v_brq3_frt1.jpg', '2017-10-22 02:42:58', '2017-10-22 02:42:58'),
(146, 48, 'product-sub-images/peacoat.jpg', '2017-10-22 02:42:58', '2017-10-22 02:42:58'),
(147, 48, 'product-sub-images/thestylebrothers_14_a9199af7-95c6-4577-bd45-98c62e263671_grande.jpg', '2017-10-22 02:42:58', '2017-10-22 02:42:58'),
(148, 49, 'product-sub-images/8079cd690a61c100a9201bc9d1744bf4.jpg', '2017-10-22 02:56:48', '2017-10-22 02:56:48'),
(149, 49, 'product-sub-images/aknedoron_purifying_lotion_large-300x300.jpg', '2017-10-22 02:56:48', '2017-10-22 02:56:48'),
(150, 49, 'product-sub-images/c45d6f17f4f1035b558e35d203fc2ec8--natural-products-beauty-products.jpg', '2017-10-22 02:56:48', '2017-10-22 02:56:48'),
(151, 49, 'product-sub-images/Naked-Mud.jpg', '2017-10-22 02:56:48', '2017-10-22 02:56:48'),
(152, 50, 'product-sub-images/_8643455.jpg', '2017-10-22 03:07:24', '2017-10-22 03:07:24'),
(153, 50, 'product-sub-images/5d902cb4ec47568945c935c92cf0b563--kids-high-heels-high-heels-sandals.jpg', '2017-10-22 03:07:24', '2017-10-22 03:07:24'),
(154, 50, 'product-sub-images/uma_pair__24200_std1.jpg', '2017-10-22 03:07:24', '2017-10-22 03:07:24'),
(155, 53, 'product-sub-images/51pU2WFGfVL._SX300_QL70_.jpg', '2017-10-22 03:12:58', '2017-10-22 03:12:58'),
(156, 53, 'product-sub-images/821-6922_300x300_1.jpeg', '2017-10-22 03:12:58', '2017-10-22 03:12:58'),
(157, 53, 'product-sub-images/Best-Sport-Style-Footwear-Beige-Canvas-Espadrille-Shoes-for-Male-Female.jpg', '2017-10-22 03:12:58', '2017-10-22 03:12:58'),
(158, 54, 'product-sub-images/$_35ser.JPG', '2017-10-22 03:18:09', '2017-10-22 03:18:09'),
(159, 54, 'product-sub-images/2ct_stud_pair2335.jpg.png', '2017-10-22 03:18:09', '2017-10-22 03:18:09'),
(160, 54, 'product-sub-images/301-101-11-112-13.jpg', '2017-10-22 03:18:09', '2017-10-22 03:18:09'),
(169, 57, 'product-sub-images/health4.jpg', '2017-10-25 04:01:32', '2017-10-25 04:01:32'),
(170, 57, 'product-sub-images/health5.jpg', '2017-10-25 04:01:32', '2017-10-25 04:01:32'),
(171, 57, 'product-sub-images/health6.jpg', '2017-10-25 04:01:32', '2017-10-25 04:01:32'),
(172, 58, 'product-sub-images/health1.jpg', '2017-10-25 04:09:39', '2017-10-25 04:09:39'),
(173, 58, 'product-sub-images/health2.jpg', '2017-10-25 04:09:39', '2017-10-25 04:09:39'),
(174, 58, 'product-sub-images/health3.jpg', '2017-10-25 04:09:39', '2017-10-25 04:09:39'),
(175, 59, 'product-sub-images/clothing1.jpg', '2017-10-25 04:16:33', '2017-10-25 04:16:33'),
(176, 59, 'product-sub-images/clothing2.jpg', '2017-10-25 04:16:33', '2017-10-25 04:16:33'),
(177, 59, 'product-sub-images/clothing3.jpg', '2017-10-25 04:16:33', '2017-10-25 04:16:33'),
(178, 60, 'product-sub-images/clothing4.jpg', '2017-10-25 04:21:52', '2017-10-25 04:21:52'),
(179, 60, 'product-sub-images/clothing5.jpg', '2017-10-25 04:21:52', '2017-10-25 04:21:52'),
(180, 60, 'product-sub-images/clothing6.jpg', '2017-10-25 04:21:52', '2017-10-25 04:21:52'),
(181, 61, 'product-sub-images/footwear1.jpg', '2017-10-25 04:28:27', '2017-10-25 04:28:27'),
(182, 61, 'product-sub-images/footwear3.jpg', '2017-10-25 04:28:27', '2017-10-25 04:28:27'),
(183, 61, 'product-sub-images/footwear4.jpg', '2017-10-25 04:28:27', '2017-10-25 04:28:27'),
(184, 62, 'product-sub-images/footwear5.jpg', '2017-10-25 04:34:43', '2017-10-25 04:34:43'),
(185, 62, 'product-sub-images/footwear6.jpg', '2017-10-25 04:34:43', '2017-10-25 04:34:43'),
(186, 62, 'product-sub-images/footwear7.jpg', '2017-10-25 04:34:43', '2017-10-25 04:34:43'),
(187, 63, 'product-sub-images/jewelry1.jpg', '2017-10-25 04:44:39', '2017-10-25 04:44:39'),
(188, 63, 'product-sub-images/jewelry2.jpg', '2017-10-25 04:44:39', '2017-10-25 04:44:39'),
(189, 63, 'product-sub-images/jewelry3.jpg', '2017-10-25 04:44:39', '2017-10-25 04:44:39'),
(190, 64, 'product-sub-images/jewelry4.jpg', '2017-10-25 04:47:39', '2017-10-25 04:47:39'),
(191, 64, 'product-sub-images/jewelry5.jpg', '2017-10-25 04:47:39', '2017-10-25 04:47:39'),
(192, 64, 'product-sub-images/jewelry6.jpg', '2017-10-25 04:47:39', '2017-10-25 04:47:39'),
(193, 65, 'product-sub-images/lifestyle1.jpg', '2017-10-25 04:56:29', '2017-10-25 04:56:29'),
(194, 65, 'product-sub-images/lifestyle2.jpg', '2017-10-25 04:56:29', '2017-10-25 04:56:29'),
(195, 65, 'product-sub-images/lifestyle3.jpg', '2017-10-25 04:56:29', '2017-10-25 04:56:29'),
(196, 66, 'product-sub-images/lifestyle4.jpg', '2017-10-25 05:03:45', '2017-10-25 05:03:45'),
(197, 66, 'product-sub-images/lifestyle5.jpg', '2017-10-25 05:03:45', '2017-10-25 05:03:45'),
(198, 66, 'product-sub-images/lifestyle6.jpg', '2017-10-25 05:03:45', '2017-10-25 05:03:45'),
(199, 67, 'product-sub-images/islamic2 - Copy (3).png', '2017-10-25 05:18:24', '2017-10-25 05:18:24'),
(200, 67, 'product-sub-images/islamic2 - Copy.png', '2017-10-25 05:18:24', '2017-10-25 05:18:24'),
(201, 67, 'product-sub-images/islamic2.png', '2017-10-25 05:18:24', '2017-10-25 05:18:24');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `review_product` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `product_id`, `customer_id`, `review_product`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 26, 21, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 0, '2017-10-14 04:41:41', '2017-10-14 23:23:25'),
(2, 27, 21, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 0, '2017-10-14 04:52:04', '2017-10-15 01:24:49'),
(3, 27, 21, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 0, '2017-10-14 04:53:15', '2017-10-15 02:08:28'),
(6, 27, 21, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 1, '2017-10-14 23:49:19', '2017-10-15 02:08:21'),
(7, 9, 23, 'sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 1, '2017-10-15 02:06:22', '2017-10-15 02:08:26'),
(8, 38, 31, 'test', 1, '2017-10-18 02:00:42', '2017-10-18 02:00:53'),
(9, 38, 31, 'casxcascas', 1, '2017-10-18 02:52:44', '2017-10-18 03:34:07'),
(10, 37, 31, 'asdasdasd', 1, '2017-10-18 02:57:19', '2017-10-18 03:34:14'),
(11, 37, 31, 'fasdasdas', 1, '2017-10-18 03:03:17', '2017-10-18 03:34:08'),
(12, 37, 31, 'scascas', 1, '2017-10-18 03:06:39', '2017-10-18 03:34:10'),
(13, 38, 32, 'fbdfbfb', 1, '2017-10-18 04:06:16', '2017-10-18 04:06:26'),
(14, 37, 33, 'well product', 1, '2017-10-19 23:28:47', '2017-10-19 23:29:35'),
(15, 56, 34, 'nice product', 0, '2017-10-24 04:40:16', '2017-10-24 04:40:16');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `full_name`, `mobile_number`, `address`, `created_at`, `updated_at`) VALUES
(36, 'Habibur Rahman', '01715121415', 'Dhaka', '2017-10-18 02:16:16', '2017-10-18 02:16:16'),
(37, 'Sajedul Islam', '01912836536', 'Dhaka', '2017-10-24 05:59:46', '2017-10-24 05:59:46'),
(38, 'Mosiur Rahman', '01715121514', 'm,', '2017-10-28 02:20:01', '2017-10-28 02:20:01'),
(39, 'Mosiur Rahman', '01715161514', 'ccascasc', '2017-10-31 05:13:54', '2017-10-31 05:13:54'),
(40, 'Mosiur Rahman', '01715161514', 'ccascasc', '2017-10-31 05:24:30', '2017-10-31 05:24:30');

-- --------------------------------------------------------

--
-- Table structure for table `size_widths`
--

CREATE TABLE `size_widths` (
  `id` int(10) NOT NULL,
  `size_width_name` varchar(255) NOT NULL,
  `size_width_description` text NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `size_widths`
--

INSERT INTO `size_widths` (`id`, `size_width_name`, `size_width_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'XL', 'Well', 1, '2017-10-15 23:27:10', '2017-10-15 23:27:10'),
(4, 'SM', 'Well', 1, '2017-10-15 23:27:41', '2017-10-15 23:27:41'),
(5, 'XS', 'well', 1, '2017-10-15 23:27:50', '2017-10-15 23:27:50'),
(6, 'XXL', 'Well', 1, '2017-10-15 23:27:58', '2017-10-15 23:27:58');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `slider_main_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_sub_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `category_id`, `sub_category_id`, `slider_main_image`, `slider_sub_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(12, 2, 2, 'slider-images/.001.jpg', 'slider-images/.001.jpg', 1, '2017-09-27 05:04:21', '2017-09-27 05:04:21'),
(13, 3, 3, 'slider-images/_56_0.jpg', 'slider-images/_56_0.jpg', 1, '2017-09-27 05:04:52', '2017-10-24 01:43:12'),
(14, 1, 1, 'slider-image/58dresses.jpg', 'slider-image/58dresses.jpg', 0, '2017-09-27 05:05:18', '2017-10-25 05:25:43'),
(15, 3, 3, 'slider-images/77-1-6cf4f.jpg', 'slider-images/77-1-6cf4f.jpg', 1, '2017-09-27 05:06:06', '2017-09-27 05:06:06'),
(16, 1, 1, 'slider-image/Toddler-Girls-Floral-Red-Long-Sleeve-Dress-Party-baby-girl-dress-1-year-girl-baby-birthday.jpg', 'slider-image/Year.jpg', 1, '2017-09-27 05:06:41', '2017-10-24 01:43:23'),
(17, 1, 1, 'slider-image/-dress.jpg', 'slider-image/-dress.jpg', 1, '2017-09-27 05:07:04', '2017-10-24 01:43:26'),
(18, 3, 3, 'slider-images/0028357ed4.jpg', 'slider-images/0028357ed4.jpg', 1, '2017-09-27 05:07:33', '2017-09-27 05:07:33'),
(19, 3, 3, 'slider-images/82448-1.jpg', 'slider-images/82448-1.jpg', 1, '2017-09-27 05:07:58', '2017-09-27 05:07:58'),
(20, 3, 3, 'slider-images/blouse-15901.jpg', 'slider-images/blouse-15901.jpg', 1, '2017-09-27 05:08:21', '2017-09-27 05:08:21'),
(21, 3, 3, 'slider-images/get-in.jpg', 'slider-images/get-in.jpg', 1, '2017-09-27 05:08:44', '2017-09-27 05:08:44');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_category_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `sub_category_name`, `sub_category_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Body Care', 'Well', 1, '2017-08-25 21:30:20', '2017-08-27 03:07:24'),
(2, 1, 'Kids Care', 'Well', 1, '2017-08-25 21:30:57', '2017-08-25 21:30:57'),
(3, 1, 'Perfume & Spray', 'Well', 1, '2017-08-25 21:31:20', '2017-08-25 21:31:20'),
(4, 1, 'Hair Care', 'Well', 1, '2017-08-25 21:31:30', '2017-08-25 21:31:30'),
(5, 1, 'Face Care', 'Well', 1, '2017-08-25 21:31:41', '2017-08-25 21:31:41'),
(6, 1, 'Lips Care', 'Well', 1, '2017-08-25 21:31:51', '2017-08-25 21:31:51'),
(7, 1, 'Eye Care', 'Well', 1, '2017-08-25 21:32:17', '2017-08-25 21:32:17'),
(8, 1, 'Nails Care', 'Well', 1, '2017-08-25 21:32:26', '2017-08-25 21:32:26'),
(9, 1, 'Dental Care', 'Well', 1, '2017-08-25 21:32:35', '2017-08-25 21:32:35'),
(10, 1, 'Baby Care', 'Well', 1, '2017-08-25 21:32:44', '2017-08-25 21:32:44'),
(11, 1, 'Gym & Exercise', 'Well', 1, '2017-08-25 21:32:54', '2017-08-25 21:32:54'),
(12, 2, 'T-Shirt', 'Well', 1, '2017-08-25 22:29:20', '2017-08-25 22:29:20'),
(13, 2, 'Shirt', 'WELL', 1, '2017-08-25 22:29:33', '2017-08-25 22:29:33'),
(14, 2, 'Punjabi Pajama', 'wELL', 1, '2017-08-25 22:29:45', '2017-08-25 22:29:45'),
(15, 2, 'Pant', 'Well', 1, '2017-08-25 22:29:55', '2017-08-25 22:29:55'),
(16, 2, 'Winter Collection', 'Well', 1, '2017-08-25 22:30:47', '2017-08-25 22:30:47'),
(17, 2, 'Others', 'Well', 1, '2017-08-25 22:31:00', '2017-08-25 22:31:00'),
(18, 2, 'Salowar Kamiz', 'Well', 1, '2017-08-25 22:31:13', '2017-08-25 22:31:13'),
(19, 2, 'Sharee', 'Well', 1, '2017-08-25 22:31:25', '2017-08-25 22:31:25'),
(20, 2, 'Kurti Tops & Gown', 'Well', 1, '2017-08-25 22:32:28', '2017-08-25 22:32:28'),
(21, 2, 'Womens Accesories', 'Well', 1, '2017-08-25 22:32:40', '2017-08-25 22:32:40'),
(22, 2, 'Winter Cullection', 'Well', 1, '2017-08-25 22:32:56', '2017-08-25 22:32:56'),
(23, 3, 'Mens', 'Well', 1, '2017-08-25 23:04:28', '2017-08-25 23:04:28'),
(24, 3, 'Womens', 'Well', 1, '2017-08-25 23:04:40', '2017-08-25 23:04:40'),
(25, 4, 'Ear Ring', 'Well', 1, '2017-08-25 23:06:19', '2017-08-25 23:06:19'),
(26, 4, 'Finger Ring', 'Well', 1, '2017-08-25 23:06:29', '2017-08-25 23:06:29'),
(27, 4, 'Bracelet', 'Well', 1, '2017-08-25 23:06:39', '2017-08-25 23:06:39'),
(28, 4, 'Locket', 'Well', 1, '2017-08-25 23:06:51', '2017-08-25 23:06:51'),
(29, 4, 'Pendant', 'Well', 1, '2017-08-25 23:07:00', '2017-08-25 23:07:00'),
(30, 4, 'Others', 'Well', 1, '2017-08-25 23:07:11', '2017-08-25 23:07:11'),
(31, 2, 'Helth', 'Well', 1, '2017-09-21 03:35:17', '2017-09-21 03:35:17'),
(32, 5, 'Weach', 'well', 1, '2017-10-25 04:52:30', '2017-10-25 04:52:30'),
(33, 6, 'Islamic Book', 'well', 1, '2017-10-25 05:09:51', '2017-10-25 05:09:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Emmitt Russel', 'fhills@example.com', '$2y$10$SaNcgkm7MrY0.1Jj8/HaHufo/D33EOpA/EfcclMPiaZRtgttHCwN2', 'Ao6vriymilkXyAaq5d0L5VMgYn4V76bOe5QoQ2jN6ijLbBTivVZH3YJybmdK', '2017-08-23 02:40:39', '2017-08-23 02:40:39'),
(2, 'Moses Cronin', 'morissette.luciano@example.com', '$2y$10$SaNcgkm7MrY0.1Jj8/HaHufo/D33EOpA/EfcclMPiaZRtgttHCwN2', 'rpbkuR7sMU', '2017-08-23 02:40:39', '2017-08-23 02:40:39'),
(3, 'Mr. Nathanael Ruecker', 'ukuphal@example.net', '$2y$10$SaNcgkm7MrY0.1Jj8/HaHufo/D33EOpA/EfcclMPiaZRtgttHCwN2', '0M9Bi9BO9M', '2017-08-23 02:40:39', '2017-08-23 02:40:39'),
(4, 'Noelia Wyman', 'smith.ignatius@example.org', '$2y$10$SaNcgkm7MrY0.1Jj8/HaHufo/D33EOpA/EfcclMPiaZRtgttHCwN2', '0ZUUlHLYEy', '2017-08-23 02:40:39', '2017-08-23 02:40:39'),
(5, 'Sunny Turcotte', 'pkonopelski@example.net', '$2y$10$SaNcgkm7MrY0.1Jj8/HaHufo/D33EOpA/EfcclMPiaZRtgttHCwN2', 'uwm2rqRQWgQieaHMkVtkCCi7j9pHt0sRuee74gMK3tRh0ycx2dLda5uvV59F', '2017-08-23 02:40:39', '2017-08-23 02:40:39');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `customer_id`, `product_id`, `created_at`, `updated_at`) VALUES
(22, 18, 8, '2017-09-21 00:49:41', '2017-09-21 00:49:41'),
(23, 18, 9, '2017-09-21 01:13:57', '2017-09-21 01:13:57'),
(24, 8, 8, '2017-09-21 01:23:44', '2017-09-21 01:23:44'),
(25, 8, 7, '2017-09-21 01:23:48', '2017-09-21 01:23:48'),
(26, 8, 9, '2017-09-21 01:46:17', '2017-09-21 01:46:17'),
(27, 21, 9, '2017-09-23 02:04:42', '2017-09-23 02:04:42'),
(28, 21, 8, '2017-09-23 02:05:24', '2017-09-23 02:05:24'),
(29, 21, 7, '2017-09-23 02:05:27', '2017-09-23 02:05:27'),
(30, 21, 10, '2017-09-23 04:20:07', '2017-09-23 04:20:07'),
(31, 21, 12, '2017-09-24 03:33:59', '2017-09-24 03:33:59'),
(32, 31, 37, '2017-10-18 04:08:43', '2017-10-18 04:08:43'),
(33, 32, 37, '2017-10-18 04:11:09', '2017-10-18 04:11:09'),
(34, 34, 55, '2017-10-24 04:12:34', '2017-10-24 04:12:34'),
(35, 34, 54, '2017-10-24 04:44:11', '2017-10-24 04:44:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `now_orders`
--
ALTER TABLE `now_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_size_widths`
--
ALTER TABLE `product_size_widths`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_sub_images`
--
ALTER TABLE `product_sub_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `size_widths`
--
ALTER TABLE `size_widths`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `now_orders`
--
ALTER TABLE `now_orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `product_size_widths`
--
ALTER TABLE `product_size_widths`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;
--
-- AUTO_INCREMENT for table `product_sub_images`
--
ALTER TABLE `product_sub_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `size_widths`
--
ALTER TABLE `size_widths`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
