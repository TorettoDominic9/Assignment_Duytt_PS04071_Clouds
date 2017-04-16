-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 03, 2017 lúc 02:31 CH
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `doan`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cates`
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
-- Đang đổ dữ liệu cho bảng `cates`
--

INSERT INTO `cates` (`id`, `name`, `alias`, `order`, `parent_id`, `keywords`, `description`, `created_at`, `updated_at`) VALUES
(18, 'Áo', 'ao', 1, 0, 'Ao', 'Áo ', '2017-03-19 22:08:27', '2017-04-03 03:25:36'),
(19, 'Quần', 'quan', 2, 0, 'quan', 'Quần', '2017-03-19 22:09:03', '2017-04-03 03:26:22'),
(20, 'Áo Sơ mi', 'ao-so-mi', 2, 18, 'somi', 'Áo sơ mi', '2017-03-19 22:11:33', '2017-04-03 03:28:40'),
(21, 'Áo thun', 'ao-thun', 2, 18, 'aothun', 'Áo thun', '2017-03-19 22:13:41', '2017-04-03 03:29:02'),
(22, 'Áo thể thao', 'ao-the-thao', 2, 18, 'aothethao', 'áo thể thao', '2017-03-19 22:14:26', '2017-04-03 03:29:43'),
(25, 'Quần jean', 'quan-jean', 4, 19, 'quanjean ', 'Quần jean', '2017-03-19 22:27:20', '2017-04-03 03:30:15'),
(26, 'Quần tây', 'quan-tay', 4, 19, 'quantay', 'Quần tây', '2017-03-19 22:28:10', '2017-04-03 03:30:40'),
(27, 'Quần short', 'quan-short', 4, 19, 'quanshort ', 'Quần short', '2017-03-19 22:29:12', '2017-04-03 03:31:07'),
(28, 'Quần thể thao', 'quan-the-thao', 4, 19, 'quanthethao', 'Quần thể thao', '2017-03-19 22:29:45', '2017-04-03 03:31:41'),
(30, 'Phụ kiện', 'phu-kien', 5, 0, 'Phu kien', 'Phụ kiện khác', '2017-03-19 22:31:27', '2017-04-03 03:28:11'),
(31, 'Mũ', 'mu', 5, 30, 'mu', 'Mũ, nón', '2017-03-19 22:34:17', '2017-04-03 03:35:00'),
(32, 'Kính mát', 'kinh-mat', 5, 30, 'kinhmat', 'Kính mát', '2017-03-19 22:35:07', '2017-04-03 03:35:30'),
(33, 'Đồng hồ', 'dong-ho', 5, 30, 'dongho', 'Đồng hồ', '2017-03-19 22:36:12', '2017-04-03 03:36:08'),
(34, 'Thắt lưng', 'that-lung', 5, 30, 'thatlung', 'Thắt lưng', '2017-03-19 22:37:04', '2017-04-03 03:36:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_02_15_065756_create_cate_table', 1),
(4, '2017_02_15_074927_create_product_table', 2),
(5, '2017_02_15_080147_create_product_images_table', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
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
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `alias`, `price`, `intro`, `content`, `image`, `keywords`, `description`, `user_id`, `cate_id`, `created_at`, `updated_at`) VALUES
(33, 'Áo sơ mi tay dài A', 'ao-so-mi-tay-dai-a', 400000, '<p>đẹp, độc</p>\r\n', '', 'upload/asmadachi1.jpg', 'aosomi', 'áo sơ mi', 1, 20, '2017-04-03 03:44:08', '2017-04-03 03:44:08'),
(34, 'Áo sơ mi Adachi 1', 'ao-so-mi-adachi-1', 200000, '<p>aaaaaaaa</p>\r\n', '', 'upload/asmadachi2.jpg', 'aosomi2 ', 'ddddd', 1, 20, '2017-04-03 03:44:44', '2017-04-03 03:44:44'),
(35, 'Áo sơ mi Adachi 2', 'ao-so-mi-adachi-2', 200000, '<p>sssssssssssssssss</p>\r\n', '', 'upload/asmadachi3.jpg', 'aosomi3', '', 1, 20, '2017-04-03 03:45:15', '2017-04-03 03:45:15'),
(36, 'Áo sơ mi Adachi 3', 'ao-so-mi-adachi-3', 100000, '<p>gggggggggg</p>\r\n', '', 'upload/asmadachi4.jpg', 'aosomi4', '', 1, 20, '2017-04-03 03:46:15', '2017-04-03 03:46:15'),
(37, 'Áo thun Adachi 1', 'ao-thun-adachi-1', 100000, '<p>jjjjjjjjjjjjj</p>\r\n', '', 'upload/athadachi1.jpg', 'aothun1', '', 1, 21, '2017-04-03 03:46:51', '2017-04-03 03:46:51'),
(38, 'Áo thun aaxa ', 'ao-thun-aaxa', 400000, '<p>eeeeeeeeeeeeee</p>\r\n', '', 'upload/athadachi2.jpg', 'aothun2', '', 1, 21, '2017-04-03 03:47:32', '2017-04-03 03:47:32'),
(39, 'Áo thun ahu', 'ao-thun-ahu', 100000, '<p>rrrrrrrrrrr</p>\r\n', '', 'upload/athadachi3.jpg', 'aothun3', 'ggggggggg', 1, 21, '2017-04-03 03:48:12', '2017-04-03 03:48:12'),
(40, 'Quần Jeans aa', 'quan-jeans-aa', 300000, '', '', 'upload/qj1.jpg', 'quanjean 1', 'qqqqqqq', 1, 25, '2017-04-03 03:48:51', '2017-04-03 03:48:51'),
(41, 'Quần Jeans hya', 'quan-jeans-hya', 300000, '', '', 'upload/qj2.jpg', 'quanjean2', '', 1, 25, '2017-04-03 03:49:27', '2017-04-03 03:49:27');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shoppingcart`
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
-- Đang đổ dữ liệu cho bảng `shoppingcart`
--

INSERT INTO `shoppingcart` (`identifier`, `instance`, `content`, `khachhang`, `tongtien`, `created_at`, `updated_at`) VALUES
('149121702558e22a81b8a496.52650601', 'default', 'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:2:{s:32:\"d4f34c88301dc51bf2e969da4ef01cd2\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":8:{s:5:\"rowId\";s:32:\"d4f34c88301dc51bf2e969da4ef01cd2\";s:2:\"id\";s:2:\"38\";s:3:\"qty\";i:1;s:4:\"name\";s:14:\"Áo thun aaxa \";s:5:\"price\";d:400000;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":1:{s:8:\"\0*\0items\";a:1:{s:3:\"img\";s:21:\"upload/athadachi2.jpg\";}}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";N;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:21;}s:32:\"d126957c08915e3bdf4a278264a2d251\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":8:{s:5:\"rowId\";s:32:\"d126957c08915e3bdf4a278264a2d251\";s:2:\"id\";s:2:\"40\";s:3:\"qty\";s:1:\"1\";s:4:\"name\";s:15:\"Quần Jeans aa\";s:5:\"price\";d:300000;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":1:{s:8:\"\0*\0items\";a:1:{s:3:\"img\";s:14:\"upload/qj1.jpg\";}}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";N;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:21;}}}', 'admin', 700000, '2017-04-03 03:57:14', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
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
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$IXVxdQP4Ox2Bbgr.pCqLE.eTFB8H8Empg5KAxzkrBcc9QjlbqDYBe', 'admin@gmail.com', 2, 'SKL5y4SeH3pD2MweHBaZGS257pul3oIZ7IKTdBdU6fvUEIBKcO5aa5rgOv9K', '2017-03-19 02:16:37', '2017-03-19 22:02:50'),
(15, 'thi', '$2y$10$RCjE9Rh1f9GxEKhWZVyGe.gZGRhtsfYUyU/r6G9emD5YtuR13Cq86', 'thi@gmail.com', 2, '7M8GBerBtFSTZMxK34VzjtQuanZ8u07XprElb9mQ', '2017-04-03 03:51:44', '2017-04-03 03:51:44'),
(16, 'thoi', '$2y$10$sm.RCgEOVKHfwnDfWn71Fu6Sn772pTcqar5YnzhDOkCKHXAGxRB0q', 'thoi@gmail.com', 2, '7M8GBerBtFSTZMxK34VzjtQuanZ8u07XprElb9mQ', '2017-04-03 03:52:01', '2017-04-03 03:52:01'),
(17, 'root', '$2y$10$FsP77WSpJkPbRgTysJDX4uh4DYuGjLtOJ9RfUv4nR2xMEjRqYLNxG', 'root@gmail.com', 1, 'UQFGGCMgVsTWbXwIE6Pr9JplFR6Mg3rkDONrBBlpS725fvNoe0Wvy1DPDvoa', '2017-04-03 03:52:26', '2017-04-03 03:52:26'),
(18, 'vinh', '$2y$10$F88OP7zgTahyVz9ywmnDWeNZnkk6FTZrup35H6lsP53PHou/y5bPu', 'vinh@gmail.com', 2, 'zwKiaOHgyOZ5InLWUKk1YVNZ7CmtFklchRejGk3ZDVC1Cl8SHZ81vGHRoqsA', '2017-04-03 03:53:21', '2017-04-03 03:53:21');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cates`
--
ALTER TABLE `cates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cates_name_unique` (`name`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_name_unique` (`name`),
  ADD KEY `products_user_id_foreign` (`user_id`),
  ADD KEY `products_cate_id_foreign` (`cate_id`);

--
-- Chỉ mục cho bảng `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD PRIMARY KEY (`identifier`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_name_unique` (`name`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cates`
--
ALTER TABLE `cates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_cate_id_foreign` FOREIGN KEY (`cate_id`) REFERENCES `cates` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
