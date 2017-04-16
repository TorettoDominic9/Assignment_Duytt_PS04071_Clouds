-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2017 at 07:38 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doan`
--

-- --------------------------------------------------------

--
-- Table structure for table `cates`
--

CREATE TABLE `cates` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cates`
--

INSERT INTO `cates` (`id`, `name`, `alias`, `order`, `parent_id`, `keywords`, `description`, `created_at`, `updated_at`) VALUES
(18, 'Chuột', 'chuot', 1, 0, 'chuot', 'Chuột máy tính', '2017-03-19 22:08:27', '2017-03-19 22:08:27'),
(19, 'Bàn phím', 'ban-phim', 2, 0, 'banphim', 'bàn phim máy tính', '2017-03-19 22:09:03', '2017-03-19 22:09:03'),
(20, 'Chuột Newmen', 'chuot-newmen', 2, 18, 'newmen', 'hãng chuột newmen', '2017-03-19 22:11:33', '2017-03-19 22:25:35'),
(21, 'Chuột Logitech', 'chuot-logitech', 2, 18, 'Logitech ', 'chuột Logitech ', '2017-03-19 22:13:41', '2017-03-19 22:25:56'),
(22, 'Chuột Fuhlen', 'chuot-fuhlen', 2, 18, 'Fuhlen', 'chuột Fuhlen', '2017-03-19 22:14:26', '2017-03-19 22:23:17'),
(23, 'Chuột Microsoft', 'chuot-microsoft', 2, 18, 'chuột Microsoft', 'Chuột Microsoft', '2017-03-19 22:15:31', '2017-03-19 22:23:00'),
(24, 'Chuột Khác', 'chuot-khac', 3, 18, 'chuột', 'chuột máy tính', '2017-03-19 22:16:18', '2017-03-19 22:26:28'),
(25, 'Bàn phím Nemmen', 'ban-phim-nemmen', 4, 19, 'Bàn phím Nemmen', 'Bàn phím Nemmen', '2017-03-19 22:27:20', '2017-03-19 22:27:20'),
(26, 'Bàn phím Fuhlen', 'ban-phim-fuhlen', 4, 19, 'Bàn phím Fuhlen', 'Bàn phím Fuhlen', '2017-03-19 22:28:10', '2017-03-19 22:28:10'),
(27, 'Bàn phím Raze', 'ban-phim-raze', 4, 19, 'Bàn phím Razer', 'Bàn phím Razer', '2017-03-19 22:29:12', '2017-03-19 22:29:12'),
(28, 'bàn phím Rapoo', 'ban-phim-rapoo', 4, 19, 'bàn phím Rapoo', 'bàn phím Rapoo', '2017-03-19 22:29:45', '2017-03-19 22:29:45'),
(29, 'Bàn phím Khác', 'ban-phim-khac', 4, 19, 'Bàn phím Khác', 'Bàn phím Khác', '2017-03-19 22:30:29', '2017-03-19 22:30:29'),
(30, 'Tai nghe', 'tai-nghe', 5, 0, 'Tai nghe', 'Tai nghe', '2017-03-19 22:31:27', '2017-03-19 22:31:27'),
(31, 'Tai nghe SONY', 'tai-nghe-sony', 5, 30, 'Tai nghe SONY', 'Tai nghe SONY', '2017-03-19 22:34:17', '2017-03-19 22:34:17'),
(32, 'Tai nghe Somic', 'tai-nghe-somic', 5, 30, 'Tai nghe Somic', 'Tai nghe Somic', '2017-03-19 22:35:07', '2017-03-19 22:35:07'),
(33, 'Tai nghe Fidue', 'tai-nghe-fidue', 5, 30, 'Tai nghe Fidue', 'Tai nghe Fidue', '2017-03-19 22:36:12', '2017-03-19 22:36:12'),
(34, 'Tai nghe MEE Audio', 'tai-nghe-mee-audio', 5, 30, 'Tai nghe MEE Audio', 'Tai nghe MEE Audio', '2017-03-19 22:37:04', '2017-03-19 22:37:04'),
(35, 'Tai nghe Earsonics', 'tai-nghe-earsonics', 5, 30, 'Tai nghe Earsonics', 'Tai nghe Earsonics', '2017-03-19 22:37:50', '2017-03-19 22:37:50'),
(36, 'USB', 'usb', 4, 0, 'USB', 'USB', '2017-03-19 22:39:33', '2017-03-19 22:39:33'),
(37, 'USB Tosiba', 'usb-tosiba', 4, 36, 'USB Tosiba', 'USB Tosiba', '2017-03-19 22:40:54', '2017-03-19 22:40:54'),
(38, 'USB Sony', 'usb-sony', 4, 36, 'USB Sony', 'USB Sony', '2017-03-19 22:41:50', '2017-03-19 22:41:50'),
(39, 'USB Khác', 'usb-khac', 4, 36, 'USB Khác', 'USB Khác', '2017-03-19 22:42:36', '2017-03-19 22:42:36'),
(40, 'RAM', 'ram', 6, 0, 'RAM', 'RAM', '2017-03-19 22:43:30', '2017-03-19 22:43:30'),
(41, 'RAM Kingston', 'ram-kingston', 6, 40, 'Kingston', 'Kingston', '2017-03-19 22:44:23', '2017-03-19 22:44:23'),
(42, 'RAM G.SKILL', 'ram-gskill', 6, 40, 'RAM G.SKILL', 'RAM G.SKILL', '2017-03-19 22:45:57', '2017-03-19 22:45:57'),
(43, 'RAM Corsair', 'ram-corsair', 6, 40, 'RAM Corsair', 'RAM Corsair', '2017-03-19 22:46:23', '2017-03-19 22:46:47'),
(44, 'RAM Mushkin', 'ram-mushkin', 6, 40, 'RAM Mushkin', 'RAM Mushkin', '2017-03-19 22:47:24', '2017-03-19 22:47:24'),
(45, 'Ổ Cứng', 'o-cung', 7, 0, 'Ổ Cứng', 'Ổ Cứng', '2017-03-19 22:47:53', '2017-03-19 22:47:53'),
(47, 'Ổ Cứng Khác', 'o-cung-khac', 8, 45, 'Ổ Cứng Khác', 'Ổ Cứng Khác', '2017-03-19 22:51:06', '2017-03-19 22:52:12'),
(48, 'Ổ Cứng MS', 'o-cung-ms', 4, 45, 'Ổ Cứng MS', 'Ổ Cứng MS', '2017-03-19 22:53:25', '2017-03-19 22:53:25'),
(49, 'Ổ Cứng KSSSS', 'o-cung-kssss', 8, 45, 'Ổ Cứng KSSSS', 'Ổ Cứng KSSSS', '2017-03-19 22:54:31', '2017-03-19 22:54:31'),
(50, 'Card Màn hình', 'card-man-hinh', 9, 0, 'Card Màn hình', 'Card Màn hình', '2017-03-19 22:55:19', '2017-03-19 22:55:19'),
(51, 'Ổ Cứng Kingston', 'o-cung-kingston', 9, 45, 'Ổ Cứng Kingston', 'Ổ Cứng Kingston', '2017-03-19 22:57:10', '2017-03-19 22:57:10'),
(52, 'Card Màn hình MS', 'card-man-hinh-ms', 10, 50, 'Card Màn hình ms', 'Card Màn hình ms', '2017-03-19 22:57:56', '2017-03-19 22:57:56'),
(53, 'Card Màn hình Auto', 'card-man-hinh-auto', 8, 50, 'Card Màn hình Auto', 'Card Màn hình Auto', '2017-03-19 22:58:57', '2017-03-19 22:58:57'),
(54, 'Card Màn hình 123', 'card-man-hinh-123', 10, 50, 'Card Màn hình 123', 'Card Màn hình 123', '2017-03-19 22:59:39', '2017-03-19 22:59:39'),
(55, 'Card Màn hình Khác', 'card-man-hinh-khac', 10, 50, 'Card Màn hình Khác ', 'Card Màn hình Khác', '2017-03-19 23:01:20', '2017-03-19 23:01:20');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_02_15_065756_create_cate_table', 1),
(4, '2017_02_15_074927_create_product_table', 2),
(5, '2017_02_15_080147_create_product_images_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `intro` text COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `cate_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `alias`, `price`, `intro`, `content`, `image`, `keywords`, `description`, `user_id`, `cate_id`, `created_at`, `updated_at`) VALUES
(25, 'Chuột Không Dây Hoặc Có Dây Fuhlen X100 - Gaming', 'chuot-khong-day-hoac-co-day-fuhlen-x100-gaming', 800000, '<p>chuột game</p>\r\n', '', 'upload/600_2_6.jpg', ' Fuhlen X100 - Gaming', 'Chuột Không Dây Hoặc Có Dây Fuhlen X100 - Gaming', 1, 22, '2017-03-19 23:14:20', '2017-03-19 23:14:20'),
(26, 'Chuột Có Dây Fuhlen G60S - Gaming', 'chuot-co-day-fuhlen-g60s-gaming', 350000, '<p>chuột game</p>\r\n', '', 'upload/zbnmlfiaqody0.jpg', ' Fuhlen G60S - Gaming', 'Chuột Có Dây Fuhlen G60S - Gaming\r\n\r\n', 1, 22, '2017-03-19 23:16:15', '2017-03-19 23:16:15'),
(27, 'Chuột Có Dây Fuhlen L120 - Gaming', 'chuot-co-day-fuhlen-l120-gaming', 239000, '<p>chuột</p>\r\n', '', 'upload/600_2_7.jpg', ' Fuhlen L120 - Gaming', 'Chuột Có Dây Fuhlen L120 - Gaming', 1, 22, '2017-03-19 23:17:41', '2017-03-19 23:17:41'),
(28, 'Chuột Newmen N8000', 'chuot-newmen-n8000', 350000, '<p>chuột</p>\r\n', '', 'upload/chuot-newmen-n8000-1-300x200.jpg', 'Chuột Newmen N8000', 'Chuột Newmen N8000', 1, 20, '2017-03-19 23:20:57', '2017-03-19 23:20:57'),
(29, 'CHUỘT NEWMEN N6000', 'chuot-newmen-n6000', 250000, '<p>chuột</p>\r\n', '', 'upload/chuot-newmen-n6000-1-300x212.jpg', 'CHUỘT NEWMEN N6000', 'CHUỘT NEWMEN N6000', 1, 20, '2017-03-19 23:23:15', '2017-03-19 23:23:15'),
(30, 'Bàn phím Cơ Newmen GM600', 'ban-phim-co-newmen-gm600', 2100000, '', '<p>b&agrave;n ph&iacute;m cơ</p>\r\n', 'upload/B__n_ph__m_C___N_563b73fbc1a1a.jpg', 'Bàn phím Cơ Newmen GM600', 'Bàn phím Cơ Newmen GM600', 1, 25, '2017-03-19 23:25:52', '2017-03-19 23:25:52'),
(31, ' Chuột quang Logitech B100 (Đen)  ', 'chuot-quang-logitech-b100-den', 59000, '<div class="prod_header" style="margin: 0px; padding: 0px; display: table; width: 1170px; color: rgb(58, 67, 70); font-family: Helvetica, Arial, sans-serif; font-size: 12px;">\r\n<div class="prod_header_main" style="margin: 0px; padding: 0px 15px 0px 0px; display: table-cell; vertical-align: top;">\r\n<div class="prod_header_title" style="margin: 0px; padding: 0px;">\r\n<h1>Chuột quang Logitech B100 (Đen) &nbsp;</h1>\r\n</div>\r\n</div>\r\n</div>\r\n', '', 'upload/chuot-quang-logitech-b100-den-6632-8771-1-webp-zoom.jpg', ' Chuột quang Logitech B100 (Đen)  ', '\r\nChuột quang Logitech B100 (Đen)  ', 1, 21, '2017-03-19 23:30:24', '2017-03-19 23:30:24');

-- --------------------------------------------------------

--
-- Table structure for table `products_images`
--

CREATE TABLE `products_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `identifier` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `khachhang` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tongtien` bigint(15) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shoppingcart`
--

INSERT INTO `shoppingcart` (`identifier`, `instance`, `content`, `khachhang`, `tongtien`, `created_at`, `updated_at`) VALUES
('149003581158d0246357a842.99948462', 'default', 'O:29:"Illuminate\\Support\\Collection":1:{s:8:"\0*\0items";a:4:{s:32:"1dea58c01681f40941f2494a9a415dc7";O:32:"Gloudemans\\Shoppingcart\\CartItem":8:{s:5:"rowId";s:32:"1dea58c01681f40941f2494a9a415dc7";s:2:"id";s:2:"26";s:3:"qty";i:1;s:4:"name";s:37:"Chuột Có Dây Fuhlen G60S - Gaming";s:5:"price";d:350000;s:7:"options";O:39:"Gloudemans\\Shoppingcart\\CartItemOptions":1:{s:8:"\0*\0items";a:1:{s:3:"img";s:24:"upload/zbnmlfiaqody0.jpg";}}s:49:"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel";N;s:41:"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate";i:21;}s:32:"4c73a4f4ac93136b5112e6711e7b0ce2";O:32:"Gloudemans\\Shoppingcart\\CartItem":8:{s:5:"rowId";s:32:"4c73a4f4ac93136b5112e6711e7b0ce2";s:2:"id";s:2:"28";s:3:"qty";i:1;s:4:"name";s:20:"Chuột Newmen N8000";s:5:"price";d:350000;s:7:"options";O:39:"Gloudemans\\Shoppingcart\\CartItemOptions":1:{s:8:"\0*\0items";a:1:{s:3:"img";s:39:"upload/chuot-newmen-n8000-1-300x200.jpg";}}s:49:"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel";N;s:41:"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate";i:21;}s:32:"6282de802dc58503cc17ab4fe7906724";O:32:"Gloudemans\\Shoppingcart\\CartItem":8:{s:5:"rowId";s:32:"6282de802dc58503cc17ab4fe7906724";s:2:"id";s:2:"30";s:3:"qty";i:1;s:4:"name";s:27:"Bàn phím Cơ Newmen GM600";s:5:"price";d:2100000;s:7:"options";O:39:"Gloudemans\\Shoppingcart\\CartItemOptions":1:{s:8:"\0*\0items";a:1:{s:3:"img";s:41:"upload/B__n_ph__m_C___N_563b73fbc1a1a.jpg";}}s:49:"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel";N;s:41:"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate";i:21;}s:32:"c16afde9d01e93232b4c87237e801b8a";O:32:"Gloudemans\\Shoppingcart\\CartItem":8:{s:5:"rowId";s:32:"c16afde9d01e93232b4c87237e801b8a";s:2:"id";s:2:"25";s:3:"qty";s:1:"2";s:4:"name";s:56:"Chuột Không Dây Hoặc Có Dây Fuhlen X100 - Gaming";s:5:"price";d:800000;s:7:"options";O:39:"Gloudemans\\Shoppingcart\\CartItemOptions":1:{s:8:"\0*\0items";a:1:{s:3:"img";s:18:"upload/600_2_6.jpg";}}s:49:"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel";N;s:41:"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate";i:21;}}}', 'admin', 4400000, '2017-03-20 12:34:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` tinyint(4) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$IXVxdQP4Ox2Bbgr.pCqLE.eTFB8H8Empg5KAxzkrBcc9QjlbqDYBe', 'admin@gmail.com', 2, 'o1sHVWnNmVJBIZoRaIcL8EkcKT7DoYMwSqAvtVCkndowgYyRX8rMuhoaJOW8', '2017-03-19 02:16:37', '2017-03-19 22:02:50'),
(8, 'admin1', '$2y$10$15ixUMWQ8OvcD7zrxi9fre6JlB5tbgnOzM9Y6JPTuA8WDRW7vPDg6', 'thiennguyen@gmail.com', 2, 'nVXcyDuLfeUJIRaDqXCKTSIBzRq4kmmLmW2xXkQBECXC0jrTNTZQIG8lyFUu', '2017-03-19 03:12:34', '2017-03-19 17:43:01'),
(11, 'Thien1', '$2y$10$C5g5uyeqhSbfvUmi/HAtQeVmDyWSWPg/uknSOFKCxOxFGBEkGOBVq', '1@gmail.com', 1, 'Y4yvtnD748JBX9lRh3hOYB5nuMv4bVfQf1d5V5gM', '2017-03-19 17:44:08', '2017-03-19 20:04:00'),
(12, 'tuanlua', '$2y$10$oQWvaqgKSxUsnpyLQBQkY.LYAb346Z7WifgrCIo9IfRg24HmAAaem', 'thiennguyen@gmail.com', 1, 'Xfo3WPQApfYVgwB6zoJRvQUxhMI3CACcZT33SMzIuVu0tLJPSo8m6fehfn2B', '2017-03-19 18:43:07', '2017-03-19 19:22:45'),
(13, 'Vinh', '$2y$10$C3ViID01Y8YYmKAC5GxzGu0d312j5i.kEcgOaRbJN.qiB0SIdqQFq', 'thiennguyen@gmail.com', 1, 'Y4yvtnD748JBX9lRh3hOYB5nuMv4bVfQf1d5V5gM', '2017-03-19 18:44:08', '2017-03-19 18:44:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cates`
--
ALTER TABLE `cates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cates_name_unique` (`name`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_name_unique` (`name`),
  ADD KEY `products_user_id_foreign` (`user_id`),
  ADD KEY `products_cate_id_foreign` (`cate_id`);

--
-- Indexes for table `products_images`
--
ALTER TABLE `products_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD PRIMARY KEY (`identifier`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_name_unique` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cates`
--
ALTER TABLE `cates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `products_images`
--
ALTER TABLE `products_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_cate_id_foreign` FOREIGN KEY (`cate_id`) REFERENCES `cates` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products_images`
--
ALTER TABLE `products_images`
  ADD CONSTRAINT `products_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
