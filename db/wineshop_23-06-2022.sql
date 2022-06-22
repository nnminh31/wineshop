-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 22, 2022 lúc 07:09 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `wineshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `addresses`
--

CREATE TABLE `addresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ward` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `addresses`
--

INSERT INTO `addresses` (`id`, `address`, `city`, `district`, `ward`, `phone`, `order_id`, `created_at`, `updated_at`) VALUES
(2, 'd', 'TP Hồ Chí Minh', 'Quận 3', 'Phường 7', '0123154564', 4, '2022-05-21 08:05:46', '2022-05-21 08:05:46'),
(3, 'd', 'Hà Nội', 'Thị xã Sơn Tây', 'Phường Phú Thịnh', '0123154564', 5, '2022-05-21 08:20:08', '2022-05-21 08:20:08'),
(4, '9 Minh Khai', 'Hà Nội', 'Quận Hai Bà Trưng', 'Phường Minh Khai', '0911054847', 6, '2022-05-24 13:21:45', '2022-05-24 13:21:45'),
(5, '9 Minh Khai', 'Hà Nội', 'Quận Cầu Giấy', 'Phường Nghĩa Tân', '0911054847', 7, '2022-05-24 13:22:38', '2022-05-24 13:22:38'),
(6, '9/30 ngõ 9 Minh Khai, Hai Bà Trưng, Hà Nội', 'Hà Nội', 'Thị xã Sơn Tây', 'Phường Quang Trung', 'fsdsdf', 8, '2022-05-24 13:32:18', '2022-05-24 13:32:18'),
(7, '9/30 ngõ 9 Minh Khai, Hai Bà Trưng, Hà Nội', 'Hà Nội', 'Quận Hà Đông', 'Phường Văn Quán', '0911054847', 9, '2022-05-24 13:34:25', '2022-05-24 13:34:25'),
(8, '9/30 ngõ 9 Minh Khai, Hai Bà Trưng, Hà Nội', 'Hà Nội', 'Quận Đống Đa', 'Phường Láng Thượng', '0911054847', 10, '2022-05-24 13:40:22', '2022-05-24 13:40:22'),
(9, '9/30 ngõ 9 Minh Khai, Hai Bà Trưng, Hà Nội', 'Hà Nội', 'Quận Hai Bà Trưng', 'Phường Minh Khai', '0911054847', 11, '2022-05-24 13:54:07', '2022-05-24 13:54:07'),
(10, '9/30 ngõ 9 Minh Khai, Hai Bà Trưng, Hà Nội', 'Hà Nội', 'Quận Hai Bà Trưng', 'Phường Minh Khai', '0911054847', 12, '2022-06-01 08:01:29', '2022-06-01 08:01:29'),
(11, '9/30 ngõ 9 Minh Khai, Hai Bà Trưng, Hà Nội', 'Hà Nội', 'Quận Hai Bà Trưng', 'Phường Minh Khai', '0911054847', 13, '2022-06-06 08:42:32', '2022-06-06 08:42:32'),
(12, '9/30 ngõ 9 Minh Khai, Hai Bà Trưng, Hà Nội', 'Hà Nội', 'Quận Đống Đa', 'Phường Văn Miếu', '0911054847', 14, '2022-06-11 15:28:49', '2022-06-11 15:28:49'),
(13, '9/30 ngõ 9 Minh Khai, Hai Bà Trưng, Hà Nội', 'Hà Nội', 'Quận Đống Đa', 'Phường Ô Chợ Dừa', '0911054847', 15, '2022-06-16 14:11:01', '2022-06-16 14:11:01'),
(14, '9/30 ngõ 9 Minh Khai, Hai Bà Trưng, Hà Nội', 'Hà Nội', 'Quận Đống Đa', 'Phường Văn Miếu', '0911054847', 16, '2022-06-17 09:29:05', '2022-06-17 09:29:05'),
(15, 'd', 'TP Hồ Chí Minh', 'Quận 3', 'Phường 7', '0123154564', 17, '2022-06-20 17:47:43', '2022-06-20 17:47:43'),
(16, 'd', 'Hà Nội', 'Quận Cầu Giấy', 'Phường Nghĩa Tân', '0123154564', 18, '2022-06-20 19:00:42', '2022-06-20 19:00:42'),
(17, 'd', 'Bà Rịa-Vũng Tàu', 'Thành phố Bà Rịa', 'Phường Phước Hiệp', '0123154564', 19, '2022-06-20 19:02:07', '2022-06-20 19:02:07'),
(18, '9/30 ngõ 9 Minh Khai, Hai Bà Trưng, Hà Nội', 'Hà Nội', 'Thị xã Sơn Tây', 'Phường Phú Thịnh', '0911054847', 20, '2022-06-20 19:46:07', '2022-06-20 19:46:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'true',
  `ordinal` int(11) DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `brands`
--

INSERT INTO `brands` (`id`, `name`, `description`, `slug`, `icon`, `type`, `status`, `ordinal`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'whisky', NULL, 'whisky', 'M4dG4-102728-y5U.png', 'Rượu mạnh', 'true', 1, 1, '2022-05-02 02:20:46', '2022-05-02 03:27:28'),
(2, 'Beluga', NULL, 'beluga', '5kuCR-025218-muo.jpg', 'Rượu mạnh', 'true', NULL, 1, '2022-05-02 02:57:02', '2022-06-20 19:52:18'),
(3, 'Ballantines', NULL, 'ballantines', 'X0Q8Z-102936-Lfa.webp', 'Rượu mạnh', 'true', NULL, 1, '2022-05-02 03:09:17', '2022-05-02 03:29:36'),
(4, 'Glenfiddich', NULL, 'glenfiddich', 'gvUr7-103308-4R4.webp', 'Rượu mạnh', 'true', NULL, 1, '2022-05-02 03:33:08', '2022-05-02 03:33:08'),
(5, 'Hennessy', NULL, 'hennessy', 'PC21R-104348-as0.webp', 'Rượu mạnh', 'true', NULL, 1, '2022-05-02 03:43:48', '2022-05-02 03:43:48'),
(6, 'Chivas', NULL, 'chivas', 'MATJ2-104405-pXf.png', 'Rượu mạnh', 'true', NULL, 1, '2022-05-02 03:44:05', '2022-05-02 03:44:05'),
(7, 'Macallan', NULL, 'macallan', 'T7Yma-104502-NA8.webp', 'Rượu mạnh', 'true', NULL, 1, '2022-05-02 03:45:02', '2022-05-02 03:45:02'),
(8, 'JackDaniels', NULL, 'jackdaniels', 'ONMmj-104552-Pjs.webp', 'Rượu mạnh', 'true', NULL, 1, '2022-05-02 03:45:52', '2022-05-02 03:45:52'),
(9, 'Johnnie Walker', NULL, 'johnnie-walker', 'tEzBu-105026-q7j.jpg', 'Rượu mạnh', 'true', NULL, 1, '2022-05-02 03:50:26', '2022-05-02 03:50:26'),
(10, 'Vsop', NULL, 'vsop', 'ROgI2-105317-7Wc.webp', 'Rượu mạnh', 'true', NULL, 1, '2022-05-02 03:53:17', '2022-05-02 03:53:17'),
(11, 'Thương hiệu rượu mạnh', NULL, 'thuong-hieu-ruou-manh', 'jXOLP-114714-xHm.jpg', 'Rượu vang', 'true', 1, 1, '2022-05-02 04:47:14', '2022-05-02 04:47:14'),
(12, 'Chateauneuf', NULL, 'chateauneuf', '6bsNX-122907-NTf.webp', 'Rượu vang', 'true', NULL, 1, '2022-05-02 05:29:07', '2022-05-02 05:29:07'),
(13, 'Kaiken', NULL, 'kaiken', 'TYA5F-122932-CJF.webp', 'Rượu vang', 'true', NULL, 1, '2022-05-02 05:29:32', '2022-05-02 05:29:32'),
(14, 'Montes', NULL, 'montes', 'GklJ2-123007-LRa.webp', 'Rượu vang', 'true', NULL, 1, '2022-05-02 05:30:07', '2022-05-02 05:30:07'),
(15, '1865', NULL, '1865', 'cgKk4-123038-faV.webp', 'Rượu vang', 'true', NULL, 1, '2022-05-02 05:30:38', '2022-05-02 05:30:38'),
(16, 'Piccini', NULL, 'piccini', 'qtZwL-123131-B4f.webp', 'Rượu vang', 'true', NULL, 1, '2022-05-02 05:31:31', '2022-05-02 05:31:31'),
(17, 'Margaux', NULL, 'margaux', 'hpXTA-123203-TIQ.webp', 'Rượu vang', 'true', NULL, 1, '2022-05-02 05:32:03', '2022-05-02 05:32:03'),
(18, 'Moet', NULL, 'moet', 'YlaWA-123312-dcb.webp', 'Rượu vang', 'true', NULL, 1, '2022-05-02 05:33:12', '2022-05-02 05:33:12'),
(19, 'Opus One', NULL, 'opus-one', 'HCHFf-123403-Gnn.webp', 'Rượu vang', 'true', NULL, 1, '2022-05-02 05:34:03', '2022-05-02 05:34:03'),
(20, 'Penfolds', '1', 'penfolds', 'yJRw6-123445-40E.webp', 'Rượu vang', 'true', NULL, 12, '2022-05-02 05:34:45', '2022-06-16 14:52:14');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'true',
  `ordinal` int(11) DEFAULT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `status`, `ordinal`, `parent_id`, `user_id`, `created_at`, `updated_at`) VALUES
(7, 'Quà tặng tết', 'qua-tang-tet', NULL, 'true', NULL, NULL, 1, '2022-05-02 04:15:58', '2022-05-02 04:15:58'),
(8, 'Rượu vang', 'ruou-vang', NULL, 'true', NULL, NULL, 1, '2022-05-02 04:16:06', '2022-05-02 04:16:06'),
(9, 'Rượu mạnh', 'ruou-manh', NULL, 'true', NULL, NULL, 1, '2022-05-02 04:16:14', '2022-05-02 04:16:14'),
(10, 'Rượu pha chế', 'ruou-pha-che', NULL, 'true', NULL, NULL, 1, '2022-05-02 04:16:26', '2022-05-02 04:16:26'),
(11, 'Bia nhập', 'bia-nhap', NULL, 'true', NULL, NULL, 1, '2022-05-02 04:16:33', '2022-05-02 04:16:33'),
(12, 'Hộp & khay quà tết', 'hop-khay-qua-tet', NULL, 'true', NULL, 7, 1, '2022-05-02 06:41:14', '2022-05-02 08:40:50'),
(13, 'Giỏ Quà Tết', 'gio-qua-tet', NULL, 'true', NULL, 12, 1, '2022-05-02 08:42:07', '2022-05-02 08:42:37'),
(14, 'Hộp rượu tết', 'hop-ruou-tet', NULL, 'true', NULL, 12, 1, '2022-05-02 08:44:42', '2022-05-02 08:44:42'),
(15, 'Quà Tết Giá Rẻ', 'qua-tet-gia-re', NULL, 'true', NULL, 12, 1, '2022-05-02 08:45:39', '2022-05-02 08:45:39'),
(16, 'Giỏ Quà Tết Doanh Nghiệp', 'gio-qua-tet-doanh-nghiep', NULL, 'true', NULL, 12, 1, '2022-05-02 08:46:32', '2022-05-02 08:46:32'),
(17, 'Rượu Tết', 'ruou-tet', NULL, 'true', NULL, 12, 1, '2022-05-02 08:47:30', '2022-05-02 08:47:30'),
(18, 'Bánh kẹo nhập khẩu', 'banh-keo-nhap-khau', NULL, 'true', NULL, 12, 1, '2022-05-02 08:48:38', '2022-05-02 08:48:38'),
(19, 'Rượu vang đỏ', 'ruou-vang-do', NULL, 'true', NULL, 8, 1, '2022-05-02 08:52:06', '2022-05-02 08:52:06'),
(20, 'Rượu vang trắng', 'ruou-vang-trang', NULL, 'true', NULL, 8, 1, '2022-05-02 08:52:50', '2022-05-02 08:52:50'),
(21, 'Rượu champagne/ vang nổ', 'ruou-champagne-vang-no', NULL, 'true', NULL, 8, 1, '2022-05-02 08:54:06', '2022-05-02 08:54:06'),
(22, 'Sparkling wine/ vang nổ', 'sparkling-wine-vang-no', NULL, 'true', NULL, 8, 1, '2022-05-02 08:55:03', '2022-05-02 08:55:19'),
(23, 'Prosecco/ vang nổ', 'prosecco-vang-no', NULL, 'true', NULL, 8, 1, '2022-05-02 08:56:34', '2022-05-02 08:57:01'),
(24, 'Rượu vang hồng', 'ruou-vang-hong', NULL, 'true', NULL, 8, 1, '2022-05-02 09:05:52', '2022-05-02 09:05:52'),
(25, 'Rượu vang ngọt', 'ruou-vang-ngot', NULL, 'true', NULL, 8, 1, '2022-05-02 09:06:30', '2022-05-02 09:06:30'),
(26, 'Rượu vang bịch 3l, 5l', 'ruou-vang-bich-3l-5l', NULL, 'true', NULL, 8, 1, '2022-05-02 09:07:06', '2022-05-02 09:07:06'),
(27, 'Whisky Nhật', 'whisky-nhat', NULL, 'true', NULL, 9, 1, '2022-05-02 09:19:27', '2022-05-02 09:19:27'),
(28, 'Single Malt Whisky', 'single-malt-whisky', NULL, 'true', NULL, 9, 1, '2022-05-02 09:20:09', '2022-05-02 09:20:09'),
(29, 'Blended Whisky', 'blended-whisky', NULL, 'true', NULL, 9, 1, '2022-05-02 09:20:38', '2022-05-02 09:20:38'),
(30, 'Whisky Mỹ', 'whisky-my', NULL, 'true', NULL, 9, 1, '2022-05-02 09:21:47', '2022-05-02 09:21:47'),
(31, 'Hibiki', 'hibiki', NULL, 'true', NULL, 27, 1, '2022-05-02 09:23:27', '2022-05-02 09:23:27'),
(32, 'Nikka', 'nikka', NULL, 'true', NULL, 27, 1, '2022-05-02 09:23:58', '2022-05-02 09:23:58'),
(33, 'Macallan', 'macallan', NULL, 'true', NULL, 28, 1, '2022-05-02 09:24:52', '2022-05-02 09:24:52'),
(34, 'Dalmore', 'dalmore', NULL, 'true', NULL, 28, 1, '2022-05-02 09:26:07', '2022-05-02 09:26:07'),
(35, 'Singleton', 'singleton', NULL, 'true', NULL, 28, 1, '2022-05-02 09:26:23', '2022-05-02 09:26:23'),
(36, 'Glenfiddich', 'glenfiddich', NULL, 'true', NULL, 28, 1, '2022-05-02 09:26:28', '2022-05-02 09:26:28'),
(37, 'Glenlivet', 'glenlivet', NULL, 'true', NULL, 28, 1, '2022-05-02 09:26:34', '2022-05-02 09:26:34'),
(38, 'Bowmore', 'bowmore', NULL, 'true', NULL, 28, 1, '2022-05-02 09:26:38', '2022-05-02 09:26:38'),
(39, 'Glenmorangie', 'glenmorangie', NULL, 'true', NULL, 28, 1, '2022-05-02 09:26:43', '2022-05-02 09:26:43'),
(40, 'Laphroag', 'laphroag', NULL, 'true', NULL, 28, 1, '2022-05-02 09:26:48', '2022-05-02 09:26:48'),
(41, 'Chivas', 'chivas', NULL, 'true', NULL, 29, 1, '2022-05-02 09:28:35', '2022-05-02 09:28:35'),
(42, 'Johnnie Walker', 'johnnie-walker', NULL, 'true', NULL, 29, 1, '2022-05-02 09:28:45', '2022-05-02 09:28:45'),
(43, 'Ballantines', 'ballantines', NULL, 'true', NULL, 29, 1, '2022-05-02 09:28:50', '2022-05-02 09:28:50'),
(44, 'Jameson', 'jameson', NULL, 'true', NULL, 29, 1, '2022-05-02 09:28:56', '2022-05-02 09:28:56'),
(45, 'Jack Daniel', 'jack-daniel', NULL, 'true', NULL, 30, 1, '2022-05-02 09:30:01', '2022-05-02 09:30:01'),
(46, 'Jeam Bean', 'jeam-bean', NULL, 'true', NULL, 30, 1, '2022-05-02 09:30:11', '2022-05-02 09:30:11'),
(47, 'Rượu vodka', 'ruou-vodka', NULL, 'true', NULL, 9, 1, '2022-05-02 09:33:58', '2022-05-02 09:33:58'),
(48, 'Rượu cognac', 'ruou-cognac', NULL, 'true', NULL, 9, 1, '2022-05-02 09:34:10', '2022-05-02 09:34:10'),
(49, 'Rượu agmagnac', 'ruou-agmagnac', NULL, 'true', NULL, 9, 1, '2022-05-02 09:34:29', '2022-05-02 09:34:29'),
(50, 'Brandy', 'brandy', NULL, 'true', NULL, 9, 1, '2022-05-02 09:34:37', '2022-05-02 09:34:37'),
(51, 'Beluga Vodka', 'beluga-vodka', NULL, 'true', NULL, 47, 1, '2022-05-02 09:37:17', '2022-05-02 09:37:17'),
(52, 'Danzka Vodka', 'danzka-vodka', NULL, 'true', NULL, 47, 1, '2022-05-02 09:37:27', '2022-05-02 09:37:27'),
(53, 'Tovaritch', 'tovaritch', NULL, 'true', NULL, 47, 1, '2022-05-02 09:37:43', '2022-05-02 09:37:43'),
(54, 'Absolut Vodka', 'absolut-vodka', NULL, 'true', NULL, 47, 1, '2022-05-02 09:37:48', '2022-05-02 09:37:48'),
(55, 'Smirnoff', 'smirnoff', NULL, 'true', NULL, 47, 1, '2022-05-02 09:37:52', '2022-05-02 09:37:52'),
(56, 'SKYY', 'skyy', NULL, 'true', NULL, 47, 1, '2022-05-02 09:37:56', '2022-05-02 09:37:56'),
(57, 'Putinka Vodka', 'putinka-vodka', NULL, 'true', NULL, 47, 1, '2022-05-02 09:38:01', '2022-05-02 09:38:01'),
(58, 'Grey Goose', 'grey-goose', NULL, 'true', NULL, 47, 1, '2022-05-02 09:38:05', '2022-05-02 09:38:05'),
(59, 'Blavod Vodka', 'blavod-vodka', NULL, 'true', NULL, 47, 1, '2022-05-02 09:38:10', '2022-05-02 09:38:10'),
(60, 'Vodka cá sấu', 'vodka-ca-sau', NULL, 'true', NULL, 47, 1, '2022-05-02 09:38:15', '2022-05-02 09:38:15'),
(61, 'Hennessy', 'hennessy', NULL, 'true', NULL, 48, 1, '2022-05-02 09:39:25', '2022-05-02 09:39:25'),
(62, 'Remy Martin', 'remy-martin', NULL, 'true', NULL, 48, 1, '2022-05-02 09:39:30', '2022-05-02 09:39:30'),
(63, 'Martell', 'martell', NULL, 'true', NULL, 48, 1, '2022-05-02 09:39:35', '2022-05-02 09:39:35'),
(64, 'Courvoisier', 'courvoisier', NULL, 'true', NULL, 48, 1, '2022-05-02 09:39:38', '2022-05-02 09:39:38'),
(65, 'Camus', 'camus', NULL, 'true', NULL, 48, 1, '2022-05-02 09:39:46', '2022-05-02 09:39:46'),
(66, 'Gin', 'gin', NULL, 'true', NULL, 10, 1, '2022-05-02 09:43:07', '2022-05-02 09:43:07'),
(67, 'Rhum', 'rhum', NULL, 'true', NULL, 10, 1, '2022-05-02 09:43:24', '2022-05-02 09:43:24'),
(68, 'Tequila', 'tequila', NULL, 'true', NULL, 10, 1, '2022-05-02 09:43:46', '2022-05-02 09:43:46'),
(69, 'Rượu Mùi/ Liqueurs', 'ruou-mui-liqueurs', NULL, 'true', NULL, 10, 1, '2022-05-02 09:44:24', '2022-05-02 09:44:24'),
(70, 'Rượu thảo mộc', 'ruou-thao-moc', NULL, 'true', NULL, 10, 1, '2022-05-02 09:44:35', '2022-05-02 09:44:35'),
(71, 'Rượu sữa', 'ruou-sua', NULL, 'true', NULL, 10, 1, '2022-05-02 09:44:45', '2022-05-02 09:44:45'),
(72, 'Rượu trái cây', 'ruou-trai-cay', NULL, 'true', NULL, 10, 1, '2022-05-02 09:44:53', '2022-05-02 09:44:53'),
(73, 'Rượu Sakê', 'ruou-sake', NULL, 'true', NULL, 10, 1, '2022-05-02 09:45:07', '2022-05-02 09:45:07'),
(74, 'Bombay Gin', 'bombay-gin', NULL, 'true', NULL, 66, 1, '2022-05-02 09:46:10', '2022-05-02 09:46:10'),
(75, 'Gordon’s Gin', 'gordons-gin', NULL, 'true', NULL, 66, 1, '2022-05-02 09:46:16', '2022-05-02 09:46:16'),
(76, 'Hendricks Gin', 'hendricks-gin', NULL, 'true', NULL, 66, 1, '2022-05-02 09:46:23', '2022-05-02 09:46:23'),
(77, 'Tanqueray Gin', 'tanqueray-gin', NULL, 'true', NULL, 66, 1, '2022-05-02 09:46:28', '2022-05-02 09:46:28'),
(78, 'Bacardi', 'bacardi', NULL, 'true', NULL, 67, 1, '2022-05-02 09:47:21', '2022-05-02 09:47:21'),
(79, 'Captain Morgan', 'captain-morgan', NULL, 'true', NULL, 67, 1, '2022-05-02 09:47:27', '2022-05-02 09:47:27'),
(80, 'Havana Club', 'havana-club', NULL, 'true', NULL, 67, 1, '2022-05-02 09:47:32', '2022-05-02 09:47:32'),
(81, 'Malibu', 'malibu', NULL, 'true', NULL, 67, 1, '2022-05-02 09:47:36', '2022-05-02 09:47:36'),
(82, 'Tequila Jose Cuervo', 'tequila-jose-cuervo', NULL, 'true', NULL, 68, 1, '2022-05-02 09:48:17', '2022-05-02 09:48:17'),
(83, 'Tequila Patron', 'tequila-patron', NULL, 'true', NULL, 68, 1, '2022-05-02 09:48:20', '2022-05-02 09:48:20'),
(84, 'Tequila 1800', 'tequila-1800', NULL, 'true', NULL, 68, 1, '2022-05-02 09:48:25', '2022-05-02 09:48:25'),
(85, 'Martini', 'martini', NULL, 'true', NULL, 69, 1, '2022-05-02 09:49:11', '2022-05-02 09:49:11'),
(86, 'Cointreau', 'cointreau', NULL, 'true', NULL, 69, 1, '2022-05-02 09:49:26', '2022-05-02 09:49:26'),
(87, 'Kahlua', 'kahlua', NULL, 'true', NULL, 69, 1, '2022-05-02 09:50:03', '2022-05-02 09:50:03'),
(88, 'Midori', 'midori', NULL, 'true', NULL, 69, 1, '2022-05-02 09:50:06', '2022-05-02 09:50:06'),
(89, 'DOM', 'dom', NULL, 'true', NULL, 69, 1, '2022-05-02 09:50:10', '2022-05-02 09:50:10'),
(90, 'Campari', 'campari', NULL, 'true', NULL, 69, 1, '2022-05-02 09:50:13', '2022-05-02 09:50:13'),
(91, 'Galliano', 'galliano', NULL, 'true', NULL, 69, 1, '2022-05-02 09:50:17', '2022-05-02 09:50:17'),
(92, 'Maria Brizard', 'maria-brizard', NULL, 'true', NULL, 69, 1, '2022-05-02 09:50:21', '2022-05-02 09:50:21'),
(93, 'Bols', 'bols', NULL, 'true', NULL, 69, 1, '2022-05-02 09:50:25', '2022-05-02 09:50:25'),
(94, 'Jaegermeister', 'jaegermeister', NULL, 'true', NULL, 70, 1, '2022-05-02 09:51:07', '2022-05-02 09:51:07'),
(95, 'Baileys', 'baileys', NULL, 'true', NULL, 71, 1, '2022-05-02 09:52:01', '2022-05-02 09:52:01'),
(96, 'Sheridan’s', 'sheridans', NULL, 'true', NULL, 71, 1, '2022-05-02 09:52:13', '2022-05-02 09:52:13'),
(97, 'Bia bỉ', 'bia-bi', NULL, 'true', NULL, 11, 1, '2022-05-02 09:53:42', '2022-05-02 09:53:42'),
(98, 'Bia Đức', 'bia-duc', NULL, 'true', NULL, 11, 1, '2022-05-02 09:53:47', '2022-05-02 09:53:47'),
(99, 'Bia Hà Lan', 'bia-ha-lan', NULL, 'true', NULL, 11, 1, '2022-05-02 09:53:54', '2022-05-02 09:53:54'),
(100, 'Bia Thủ Công Việt Nam', 'bia-thu-cong-viet-nam', NULL, 'true', NULL, 11, 1, '2022-05-02 09:54:29', '2022-05-02 09:54:29'),
(101, 'Bia Ý', 'bia-y', NULL, 'true', NULL, 11, 1, '2022-05-02 09:54:36', '2022-05-02 09:54:36'),
(102, 'Bia Mỹ', 'bia-my', NULL, 'true', NULL, 11, 1, '2022-05-02 09:54:44', '2022-06-19 15:06:58'),
(103, 'Whisky Sour', 'whisky-sour', NULL, 'true', NULL, 10, 15, '2022-06-17 06:51:13', '2022-06-17 06:51:13');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `9` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2022_04_02_222531_create_roles_table', 1),
(5, '2022_04_02_222733_create_categories_table', 1),
(6, '2022_04_02_222853_create_brands_table', 1),
(7, '2022_04_02_222854_create_products_table', 1),
(8, '2022_04_02_222937_create_orders_table', 1),
(9, '2022_04_02_223013_create_order_details_table', 1),
(10, '2022_04_09_162150_add_properties_product_table', 2),
(11, '2022_04_10_115005_add_user_id_in_table_roles', 3),
(12, '2022_04_10_120134_detele_user_id_in_table_roles', 4),
(13, '2022_04_10_120658_add_role_id_in_table_users', 5),
(16, '2022_04_11_105112_add_slug_in_table_users', 6),
(17, '2022_04_17_175330_add_type_in_table_brands', 7),
(18, '2022_04_17_180947_change_column_type_in_table_brands', 8),
(20, '2022_05_02_071432_add_icon_in_brands_table', 9),
(21, '2022_05_08_132156_create_sessions_table', 10),
(22, '2022_05_16_222937_create_orders_table', 11),
(23, '2022_05_16_223013_create_order_details_table', 12),
(25, '2022_05_20_205650_add_payment_method_in_orders_table', 13),
(27, '2022_05_21_111535_create_address_table', 14),
(28, '2022_05_21_121639_add_shipping_method_in_orders_table', 15),
(29, '2022_05_21_123916_add_shipping_fee_in_orders_table', 16),
(30, '2022_05_21_141625_add_phơne_in_addresses_table', 17),
(33, '2022_05_21_191501_add_processer_id_in_orders_table', 18),
(35, '2022_05_24_201904_change_datatype_column_phone_in_users_table', 19),
(36, '2022_06_19_195223_change_column_name_in_table_brands', 20),
(37, '2022_06_19_211254_change_column_name_in_table_categories', 21),
(38, '2022_06_19_221813_change_column_name_in_table_products', 22),
(40, '2022_06_20_212239_add_column_quantity_in_table_products', 23);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `processer_id` int(10) UNSIGNED DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `processer_id`, `status`, `payment_method`, `shipping_method`, `shipping_fee`, `amount`, `created_at`, `updated_at`) VALUES
(4, 2, 1, 1, 'Thanh toán khi giao hàng (COD)', 'Shop liên hệ báo phí ship sau: 1₫', '1', 820001, '2022-05-21 08:05:46', '2022-05-22 10:08:23'),
(5, 2, 1, 2, 'Thanh toán khi giao hàng (COD)', 'Shop liên hệ báo phí ship sau: 1₫', '1', 1970001, '2022-05-21 08:20:08', '2022-05-22 10:02:06'),
(6, 12, 12, 1, 'Thanh toán khi giao hàng (COD)', 'Giao Hàng Nhanh (Tạm tính) - Đường hàng không: 100.000₫', '100000', 800000, '2022-05-24 13:21:45', '2022-05-24 13:56:26'),
(7, 12, 12, 1, 'Thanh toán khi giao hàng (COD)', 'Giao Hàng Nhanh (Tạm tính) - Đường hàng không: 100.000₫', '1', 700001, '2022-05-24 13:22:38', '2022-05-24 13:56:23'),
(8, 12, 12, 4, 'Thanh toán khi giao hàng (COD)', 'Shop liên hệ báo phí ship sau: 1₫', '1', 700001, '2022-05-24 13:32:18', '2022-05-24 13:57:43'),
(9, 12, 12, 1, 'Thanh toán khi giao hàng (COD)', 'Shop liên hệ báo phí ship sau: 1₫', '1', 700001, '2022-05-24 13:34:25', '2022-05-24 13:56:21'),
(10, 12, 12, 1, 'Chuyển Khoản', 'Giao Hàng Nhanh (Tạm tính) - Đường hàng không: 100.000₫', '100000', 800000, '2022-05-24 13:40:22', '2022-05-24 13:56:20'),
(11, 12, 12, 2, 'Chuyển Khoản', 'Giao Hàng Nhanh (Tạm tính) - Đường hàng không: 100.000₫', '100000', 1900000, '2022-05-24 13:54:07', '2022-05-24 13:56:50'),
(12, 12, 12, 2, 'Thanh toán khi giao hàng (COD)', 'Shop liên hệ báo phí ship sau: 1₫', '1', 4680001, '2022-06-01 08:01:29', '2022-06-01 08:02:33'),
(13, 12, 12, 2, 'Chuyển Khoản', 'Giao Hàng Tiết Kiệm (Tạm tính): 30.000₫', '30000', 1830000, '2022-06-06 08:42:32', '2022-06-06 08:43:33'),
(14, 12, 12, 1, 'Thanh toán khi giao hàng (COD)', 'Shop liên hệ báo phí ship sau: 1₫', '1', 890001, '2022-06-11 15:28:49', '2022-06-16 14:20:14'),
(15, 13, 12, 1, 'Thanh toán khi giao hàng (COD)', 'Shop liên hệ báo phí ship sau: 1₫', '1', 1150001, '2022-06-16 14:11:01', '2022-06-16 14:35:48'),
(16, 15, 15, 2, 'Thanh toán khi giao hàng (COD)', 'Giao Hàng Tiết Kiệm (Tạm tính): 30.000₫', '30000', 1200000, '2022-06-17 09:29:05', '2022-06-17 09:30:18'),
(17, 2, 1, 4, 'Thanh toán khi giao hàng (COD)', 'Shop liên hệ báo phí ship sau: 1₫', '1', 129600001, '2022-06-20 17:47:43', '2022-06-20 19:13:36'),
(18, 2, 1, 4, 'Thanh toán khi giao hàng (COD)', 'Shop liên hệ báo phí ship sau: 1₫', '1', 6060001, '2022-06-20 19:00:42', '2022-06-20 19:11:49'),
(19, 2, 1, 4, 'Thanh toán khi giao hàng (COD)', 'Shop liên hệ báo phí ship sau: 1₫', '1', 1640001, '2022-06-20 19:02:07', '2022-06-20 19:10:35'),
(20, 15, NULL, 0, 'Thanh toán khi giao hàng (COD)', 'Shop liên hệ báo phí ship sau: 1₫', '1', 17980001, '2022-06-20 19:46:07', '2022-06-20 19:46:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `price` int(11) NOT NULL DEFAULT 0,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `order_id` int(10) UNSIGNED DEFAULT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`id`, `price`, `quantity`, `order_id`, `product_id`, `created_at`, `updated_at`) VALUES
(5, 820000, 1, 4, 4, '2022-05-21 08:05:46', '2022-05-21 08:05:46'),
(6, 820000, 2, 5, 4, '2022-05-21 08:20:08', '2022-05-21 08:20:08'),
(7, 1150000, 1, 5, 16, '2022-05-21 08:20:08', '2022-05-21 08:20:08'),
(8, 350000, 2, 6, 14, '2022-05-24 13:21:45', '2022-05-24 13:21:45'),
(9, 350000, 2, 7, 14, '2022-05-24 13:22:38', '2022-05-24 13:22:38'),
(10, 350000, 2, 8, 14, '2022-05-24 13:32:18', '2022-05-24 13:32:18'),
(11, 350000, 2, 9, 14, '2022-05-24 13:34:25', '2022-05-24 13:34:25'),
(12, 350000, 2, 10, 14, '2022-05-24 13:40:22', '2022-05-24 13:40:22'),
(13, 1800000, 1, 11, 17, '2022-05-24 13:54:07', '2022-05-24 13:54:07'),
(14, 1100000, 2, 12, 21, '2022-06-01 08:01:29', '2022-06-01 08:01:29'),
(15, 620000, 4, 12, 26, '2022-06-01 08:01:29', '2022-06-01 08:01:29'),
(16, 1800000, 1, 13, 17, '2022-06-06 08:42:32', '2022-06-06 08:42:32'),
(17, 890000, 1, 14, 3, '2022-06-11 15:28:49', '2022-06-11 15:28:49'),
(18, 1150000, 1, 15, 16, '2022-06-16 14:11:01', '2022-06-16 14:11:01'),
(19, 350000, 1, 16, 14, '2022-06-17 09:29:05', '2022-06-17 09:29:05'),
(20, 820000, 1, 16, 18, '2022-06-17 09:29:05', '2022-06-17 09:29:05'),
(21, 820000, 30, 17, 18, '2022-06-20 17:47:43', '2022-06-20 17:47:43'),
(22, 1050000, 100, 17, 22, '2022-06-20 17:47:43', '2022-06-20 17:47:43'),
(23, 820000, 3, 18, 18, '2022-06-20 19:00:42', '2022-06-20 19:00:42'),
(24, 1800000, 2, 18, 17, '2022-06-20 19:00:42', '2022-06-20 19:00:42'),
(25, 820000, 2, 19, 18, '2022-06-20 19:02:07', '2022-06-20 19:02:07'),
(26, 620000, 29, 20, 26, '2022-06-20 19:46:07', '2022-06-20 19:46:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL DEFAULT 0,
  `quantity` int(11) DEFAULT 100,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hot` int(10) UNSIGNED DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'true',
  `ordinal` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capacity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `concentration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_id` int(10) UNSIGNED DEFAULT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `price`, `quantity`, `image`, `hot`, `status`, `ordinal`, `description`, `capacity`, `concentration`, `country`, `area`, `brand_id`, `category_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Khay quà tết k0048', 'khay-qua-tet-k0048', 1140000, 100, 'lXVK4-060634-W0F.jpg', NULL, 'true', NULL, NULL, '', NULL, NULL, NULL, NULL, 13, 1, '2022-05-02 10:42:39', '2022-05-02 11:17:36'),
(2, 'KHAY QUÀ TẾT K0050', 'khay-qua-tet-k0050', 890000, 100, 'dqjdx-061434-Dxa.jpg', NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13, 1, '2022-05-02 11:14:34', '2022-05-02 12:44:35'),
(3, 'KHAY QUÀ TẾT K0049', 'khay-qua-tet-k0049', 890000, 100, 'NTy9U-061621-XmK.jpg', NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13, 1, '2022-05-02 11:16:21', '2022-05-02 11:17:04'),
(4, 'KHAY QUÀ TẾT K0047', 'khay-qua-tet-k0047', 820000, 100, '3Ceec-061902-mtg.jpg', NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13, 1, '2022-05-02 11:19:02', '2022-05-02 11:29:02'),
(5, 'KHAY QUÀ TẾT K0046', 'khay-qua-tet-k0046', 990000, 100, 'xR4VN-061921-vy1.jpg', NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13, 1, '2022-05-02 11:19:21', '2022-05-02 11:28:55'),
(6, 'KHAY QUÀ TẾT K0045', 'khay-qua-tet-k0045', 930000, 100, 'enlok-062813-4vY.jpg', NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13, 1, '2022-05-02 11:28:13', '2022-05-02 11:28:46'),
(7, 'KHAY QUÀ TẾT K0042', 'khay-qua-tet-k0042', 810000, 100, 'iuvsl-063108-lUm.jpg', NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13, 1, '2022-05-02 11:31:08', '2022-05-02 11:31:08'),
(8, 'KHAY QUÀ TẾT K0041', 'khay-qua-tet-k0041', 1110000, 100, 'pARXd-063131-gtz.jpg', NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13, 1, '2022-05-02 11:31:31', '2022-05-02 11:31:31'),
(9, 'KHAY QUÀ TẾT K0039', 'khay-qua-tet-k0039', 1040000, 100, 'GeUfA-063150-Up7.jpg', NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13, 1, '2022-05-02 11:31:50', '2022-05-02 11:31:50'),
(10, 'KHAY QUÀ TẾT K0038', 'khay-qua-tet-k0038', 950000, 100, 'ELVWe-063214-1BJ.jpg', NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13, 1, '2022-05-02 11:32:14', '2022-05-02 11:32:14'),
(11, 'KHAY QUÀ TẾT K0036', 'khay-qua-tet-k0036', 920000, 100, 'm3D4R-063238-Epm.jpg', NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13, 1, '2022-05-02 11:32:38', '2022-05-02 11:33:46'),
(12, 'KHAY QUÀ TẾT K0035', 'khay-qua-tet-k0035', 920000, 100, 'fltoh-063254-vmX.jpg', NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13, 1, '2022-05-02 11:32:54', '2022-05-02 11:32:54'),
(13, 'Rượu Vang Freixenet Italian Rose Spalking Wine', 'ruou-vang-freixenet-italian-rose-spalking-wine', 650000, 100, 'LNgHi-115635-dVE.webp', NULL, 'true', NULL, 'Thừa hưởng những n&ecirc;̀n kỹ thu&acirc;̣t ti&ecirc;n ti&ecirc;́n hi&ecirc;̣n đại dựa tr&ecirc;n n&ecirc;̀n tảng c&ocirc;̉ đi&ecirc;̉n với lịch sử l&acirc;u đời, chai vang h&ocirc;̀ng sủi này mang m&ocirc;̣t phong cách cá tính, đặc sắc trong hương vị. Khởi đ&acirc;̀u cho rượu hương thơm tươi mát của trái c&acirc;y chín mọng màu đỏ như m&acirc;̣n, đào, cherry và d&acirc;u t&acirc;y. K&ecirc;́t thúc rượu lại là hương thơm của hương hoa trắng v&agrave; t&aacute;o đầy tinh tế. Ngoài ra với những sủi bọt nhẹ nhàng v&ocirc; cùng đẹp mắt đ&ocirc;̀ng thời cũng mang đ&ecirc;́n sự kích thích cho vị giác của người sử dụng. Vị ngọt của rượu thay đổi từ từ cho đ&ecirc;́n khi c&acirc;n bằng với đ&ocirc;̣ chua giòn. Đó là sự k&ecirc;́t hợp của trái c&acirc;y phong phú cùng axit tự nhi&ecirc;n dày dặn.', '750', '11', 'Ý', 'Veneto', 2, 24, 1, '2022-05-03 04:56:35', '2022-05-03 04:56:35'),
(14, 'RƯỢU GIN BEEFEATER', 'ruou-gin-beefeater', 350000, 100, 'cvHGt-025633-p4l.webp', 1, 'true', NULL, '<p>Rượu Gin Beefeater l&agrave; một loại rượu Gin h&agrave;ng đầu thế giới được ph&aacute;t triển bởi James Burrough v&agrave;o năm 1820, nh&agrave; m&aacute;y đầu ti&ecirc;n tại th&agrave;nh phố Chelsea, thủ đ&ocirc; London của Anh Quốc l&agrave; khai sinh v&agrave; cũng đ&oacute;ng vai tr&ograve; rất lớn đối với rượu Gin n&oacute;i chung v&agrave; d&ograve;ng London Dry Gin n&oacute;i ri&ecirc;ng. V&agrave; rượu Gin Beefeater l&agrave; một thương hiệu đ&atilde; đồng h&agrave;nh từ buổi b&igrave;nh minh lịch sử ph&aacute;t triển của rượu Gin cho đến h&ocirc;m nay.</p>\r\n\r\n<p>Nếu nhắc đến rượu Gin th&igrave; Rượu Beefeater mang t&iacute;nh biểu tượng rượu mạnh của Anh Quốc .C&oacute; đến 9 loại thảo mộc kh&aacute;c nhau d&ugrave;ng để sản xuất rượu bao gồm tr&aacute;i c&acirc;y, gia vị vỏ cam, những nguy&ecirc;n liệu n&agrave;y được ng&acirc;m 24h trước khi chưng cất v&agrave; tiếp đến l&agrave; qu&aacute; tr&igrave;nh chưng cất mất 8h để ho&agrave;n th&agrave;nh . Rượu London Dry Gin Beefeater mang m&ugrave;i hương rất độc đ&aacute;o &ndash; m&ugrave;i hương đặc trưng của bất kỳ chai London Dry Gin n&agrave;o, đ&oacute; l&agrave; m&ugrave;i quả B&aacute;ch X&ugrave;. N&oacute; c&ograve;n c&oacute; m&ugrave;i của Cam Qu&yacute;t, Cam Thảo, Hạnh Nh&acirc;n, rễ c&acirc;y Bạnh Chỉ, hạt Rau M&ugrave;i, hạt c&acirc;y Bạnh Chỉ v&agrave; rễ c&acirc;y Orris&hellip;sẽ tổng h&ograve;a th&agrave;nh nhiều tầng hương kh&aacute;c nhau đầy m&ecirc; hoặc.</p>\r\n\r\n<p>M&ugrave;i: hương thơm nồng n&agrave;n của tr&aacute;i c&acirc;y, cam thảo, rau m&ugrave;i, tho&aacute;ng hương c&acirc;y b&aacute;ch x&ugrave; v&agrave; nước kho&aacute;ng.</p>\r\n\r\n<p>Vị: hương vị ngọt ng&agrave;o đặc trưng của cam Seville, cam thảo, hạnh nh&acirc;n, vỏ chanh, c&acirc;y b&aacute;ch x&ugrave; dại v&agrave; rau m&ugrave;i. Dư vị nhẹ nh&agrave;ng, d&agrave;i l&acirc;u.</p>\r\n\r\n<p>Rượu được đ&oacute;ng chai v&agrave; ph&acirc;n phối chủ yếu tại Anh bởi c&ocirc;ng ty James Burrough. Beefeater đ&atilde; đạt Huy chương v&agrave;ng tại cuộc thi International Wine and Spirits Competition năm 2000.</p>', '750', '40', 'Anh', 'London', 1, 74, 1, '2022-05-03 07:55:22', '2022-05-03 08:32:26'),
(15, 'RƯỢU SINGLE MALT WHISKY AULTMORE 18 NĂM', 'ruou-single-malt-whisky-aultmore-18-nam', 1900000, 100, '6vG4l-031549-Xf2.png', 1, 'true', NULL, '<p>Aultmore Single Malt Whisky 18 năm tuổi được ra mắt v&agrave;o năm 2015 được phối trộn hai loại th&ugrave;ng ủ l&agrave; Bourbon v&agrave; Sherry. N&oacute; đ&atilde; d&agrave;nh được Huy chương Bạc trong cuộc thi rượu Quốc tế d&agrave;nh cho rượu Whisky v&ugrave;ng Speyside năm 2017</p>\r\n\r\n<p>Aultmore 18 năm tuổi n&agrave;y l&agrave; một biến thể mới của sự cổ điển kết hợp với hương bạc h&agrave; tươi hiện đại c&ugrave;ng sự đầy đặn của hạnh nh&acirc;n ngọt ng&agrave;o, một kết th&uacute;c c&aacute; t&iacute;nh với chocolate đen. Mịn m&agrave;ng v&agrave; tr&ograve;n đầy &ndash; thực sự bạn sẽ bất ngờ với những tầng hương của t&aacute;o, l&ecirc; v&agrave; chuối, k&egrave;m th&ecirc;m ch&uacute;t gia vị trong một kết dư vị đ&aacute;ng nhớ.</p>\r\n\r\n<p>Aultmore 18 năm tuổi&nbsp;cho người nếm một cảm gi&aacute;c ngon miệng v&agrave; một loạt c&aacute;c hương vị đơn giản nhưng rất hiệu quả.&nbsp;N&oacute; biểu thị cho phong c&aacute;ch Speyside kh&aacute; nhẹ nh&agrave;ng &ndash; đối với những người th&iacute;ch sự mạnh mẽ th&igrave; c&oacute; thể thấy một cảm gi&aacute;c buồn tẻ đối. Nhưng đối với những người kiểu y&ecirc;u th&iacute;ch những bộ phim t&igrave;nh cảm nhẹ nh&agrave;ng th&igrave; đ&iacute;ch thị n&oacute; sẽ l&agrave;m bạn h&agrave;i l&ograve;ng theo một phong c&aacute;ch n&agrave;o đ&oacute;.</p>', '700', '46', 'Scotland', 'Speyside', 1, 31, 1, '2022-05-03 08:15:49', '2022-05-03 08:33:18'),
(16, 'RƯỢU TALISKER 10 NĂM', 'ruou-talisker-10-nam', 1150000, 100, 'HpCJC-031728-WDb.png', 1, 'true', NULL, '<p>Rượu Talisker 10 năm, đ&acirc;y l&agrave; d&ograve;ng Single malt được l&agrave;m tại Isle of Skye, nơi nh&agrave; m&aacute;y chưng cất n&agrave;y đ&atilde; l&agrave;m n&ecirc;n d&ograve;ng mạch nha đơn cất huyền thoại, đoạt nhiều giải thưởng danh gi&aacute; .10 năm của họ cũ c&oacute; than b&ugrave;n mạnh mẽ v&agrave; mũi muối biển; ngọt ng&agrave;o kh&oacute;i với hương vị mạch nha v&agrave; ph&aacute;t triển sự ấm &aacute;p với những nước lớn, kết th&uacute;c cay. Một trong s&aacute;u loại mạch nha cổ điển của Scotland,&nbsp;Whisky&nbsp;n&agrave;y l&agrave; tốt nhất th&iacute;ch gọn g&agrave;ng hoặc với một dấu gạch ngang nhỏ nước.</p>\r\n\r\n<p>Chai rượu c&oacute; m&ugrave;i hương mạnh mẽ của kh&oacute;i than b&ugrave;n kết hợp m&ugrave;i mặn m&ograve;i của biển cả, m&ugrave;i của cam qu&yacute;t, h&agrave;u tươi. Rượu c&oacute; vị ngọt của tr&aacute;i c&acirc;y sấy kh&ocirc; phong ph&uacute; với những đ&aacute;m m&acirc;y kh&oacute;i than b&ugrave;n v&agrave; hương vị l&uacute;a mạch mạnh mẽ, ấm &aacute;p. Hậu vị l&agrave; sự b&ugrave;ng nổ của hạt ti&ecirc;u, ấm, ngọt, k&eacute;o d&agrave;i.</p>\r\n\r\n<p>Mũi: cay v&agrave; đất với một vị ngọt ẩn b&iacute; ẩn trong nền. D&agrave;y đặc kh&oacute;i.<br />\r\nVị:đặc biệt l&agrave; hạt ti&ecirc;u ghi ch&uacute; đơn vị n&agrave;y nổi tiếng l&agrave; cả hai ti&ecirc;u nứt v&agrave; hạt ti&ecirc;u trắng. Một vị ngọt tr&aacute;i c&acirc;y h&oacute;a nhiều hơn một ch&uacute;t b&acirc;y giờ, v&agrave; th&ecirc;m những ghi ch&uacute; thịt.<br />\r\nKết th&uacute;c: Spicey v&agrave; sống động, v&agrave; d&agrave;i v&agrave; ngon. &Aacute;o kho&aacute;c miệng với một combo ngọt v&agrave; gia vị dầu. Một đ&ecirc;m chung kết than b&ugrave;n. Sau một v&agrave;i gi&acirc;y, bạn sẽ thề bạn đ&atilde; chỉ cần c&oacute; một Islay cổ điển peated.</p>\r\n\r\n<p>Chai Talisker 10 năm danh tiếng lẫy lừng, li&ecirc;n tiếp đạt được h&agrave;ng loạt giải thưởng lớn tại c&aacute;c event uy t&iacute;n nhất, lớn nhất về rượu whisky khắp năm ch&acirc;u, l&agrave; chai kh&ocirc;ng thể thiếu trong tủ rượu của những người y&ecirc;u th&iacute;ch Scotch Whisky.</p>', '700', '45', 'Scotland', 'Island', NULL, 12, 1, '2022-05-03 08:17:28', '2022-05-03 08:34:42'),
(17, 'RƯỢU WHISKY KHÓI LAGAVULIN 16 NĂM', 'ruou-whisky-khoi-lagavulin-16-nam', 1800000, 102, '5Mzob-032044-jKk.png', 1, 'true', NULL, '<p>Rượu Martini Rosso:&nbsp;được tạo ra từ hỗn hợp của 1 nh&oacute;m gia vị tuyển chọn c&ugrave;ng với nguồn nước v&ugrave;ng Monviso, pha trộn với nhiều loại rượu ngon. C&oacute; vị ngọt dịu thảo mộc, vị chua, tạo sự kh&aacute;c biệt trong hương vị. D&ugrave;ng l&agrave;m Cocktail hoặc th&ecirc;m hương vị cho 1 loại c&ocirc;ng thức chế biến m&oacute;n ăn.</p>\r\n\r\n<p>Rượu Martini Rosso&nbsp;đ&oacute; ch&iacute;nh l&agrave; nguy&ecirc;n bản của rượu Martini, khi m&agrave; Luigi Rossi c&aacute;c loại thực vật địa phương để tạo ra một hỗn hợp mang mang t&ecirc;n&nbsp;Vermouth&nbsp;đỏ tươi, v&agrave; anh ta đ&atilde; tạo ra một biểu tượng kh&ocirc;ng thể chối c&atilde;i. Trong khi ch&iacute;nh x&aacute;c c&ocirc;ng thức n&agrave;y vẫn l&agrave; một b&iacute; mật được giấu k&iacute;n v&agrave; đ&acirc;y l&agrave; loại Vermouth ngọt ng&agrave;o mang đặc t&iacute;nh của thảo dược l&agrave; kết quả của việc phối trộn cẩn thận c&aacute;c loại rượu vang với hỗn hợp được chọn lựa thảo dược của &Yacute; v&agrave; n&oacute; bao gồm c&acirc;y x&ocirc; thơm, rau h&uacute;ng, c&acirc;y bạch tiễn v&agrave; ch&uacute;t ngọt đắng của gỗ ngoại lai.</p>\r\n\r\n<p>Nguy&ecirc;n gốc, Martini l&agrave; một loại cocktail l&agrave;m từ hai th&agrave;nh phần: rượu gin của Anh v&agrave; d&ograve;ng rượu khai vị dry vermouth (ti&ecirc;u biểu nhất l&agrave; rượu&nbsp;MARTINI DRY&nbsp;của &Yacute;). Sau nhiều năm, c&aacute;i t&ecirc;n Martini đ&atilde; trở th&agrave;nh một biểu tượng, được nhiều người biết đến với danh hiệu &ldquo;Vua của c&aacute;c loại cocktail&rdquo;.</p>\r\n\r\n<p>Rượu Martini Rosso&nbsp;l&agrave; sự lựa chọn kh&ocirc;ng thể thiếu để cho ra những ly Cocktail tuyệt hảo của nh&agrave; h&agrave;ng hoặc kh&aacute;ch sạn hoặc gi&uacute;p bạn c&oacute; thể tạo ra những ly cocktail tuyệt hảo để thưởng thức trong bữa ăn của gia đ&igrave;nh bạn</p>', NULL, NULL, NULL, NULL, 5, 78, 1, '2022-05-03 08:20:44', '2022-06-20 19:11:49'),
(18, 'RƯỢU WHISKY SINGLE MALT SEXTON', 'ruou-whisky-single-malt-sexton', 820000, 41, 'dm8Qs-032555-Vtn.png', 1, 'true', NULL, '<p>Rượu Sexton Single Malt l&agrave; một sự s&aacute;ng tạo mang đậm t&iacute;nh đổi mới v&agrave; c&acirc;n bằng tuyệt hảo của rượu mạch nha đơn cất. Rượu Sexton Single Malt chắc chắn sẽ để lại ấn tượng kh&oacute; qu&ecirc;n đối với những ai tr&oacute;t thử một lần.&nbsp;Được s&aacute;ng tạo từ bậc thầy trong ng&agrave;nh c&ocirc;ng nghiệp sản xuất rượu Alex Thomas.&nbsp;Sexton&trade; được l&agrave;m từ 100% tư hạt mạch nha Ailen v&agrave; được chưng cất ba lần để c&oacute; độ mịn tuyệt vời. Sau đ&oacute; được ủ tiếp tục&nbsp;trong c&aacute;c th&ugrave;ng sherry Oloroso c&oacute; nguồn gốc từ Jerez de la Frontera, T&acirc;y Ban Nha. Rượu Sexton Single Malt Hương thơm phong ph&uacute; của c&aacute;c loại hạt, b&aacute;nh hạnh nh&acirc;n v&agrave; s&ocirc; c&ocirc; la đen với một ch&uacute;t gia vị. Vị tr&aacute;i c&acirc;y sấy kh&ocirc;, vị ngọt của tổ ong, quả mơ, vỏ chanh, mận v&agrave; gia vị sồi. Kết th&uacute;c m&ugrave;i gỗ với vị ngọt mật ong dịu &ecirc;m.</p>\r\n\r\n<p><img alt=\"\" src=\"https://ruouthuonghieu.com/wp-content/uploads/2020/05/sexton_banner_900x@2x-768x288.jpg\" style=\"height:528px; width:1402px\" /></p>', '700', '40', 'Iceland', NULL, 3, 33, 1, '2022-05-03 08:23:14', '2022-06-20 19:13:36'),
(19, 'RƯỢU VANG ĐỎ ÚC PENFOLDS BIN 389 CABERNET SHIRAZ', 'ruou-vang-do-uc-penfolds-bin-389-cabernet-shiraz', 2000000, 100, 'Yw1nv-060453-a3m.png', NULL, 'true', NULL, '<strong>Rượu vang Penfolds Bin 389</strong>&nbsp;l&agrave; một sản phẩm chủ đạo cao cấp của nh&agrave; Penfolds, l&agrave; biểu hiện tinh t&uacute;y của phong c&aacute;ch rượu vang Penfolds đỏ. Chai vang được sản xuất lần đầu ti&ecirc;n v&agrave;o năm 1960 bới huyền thoại Max Schubert, bởi thế ch&uacute;ng được mệnh danh l&agrave; &ldquo;Người ngh&egrave;o Man&rsquo;s Grange&rdquo; hoặc &ldquo;Baby Grange&rdquo; v&igrave; rượu được ng&acirc;m ủ trong c&ugrave;ng một loại th&ugrave;ng chứa loại rượu Grange cao cấp v&agrave; cổ điển. V&agrave; l&agrave; một trong những loại rượu vang đỏ tuyệt vời của &Uacute;c. Đ&acirc;y l&agrave; loại rượu đ&atilde; tạo n&ecirc;n danh tiếng cho h&atilde;ng sản xuất rượu vang Penfolds. Đ&acirc;y l&agrave; chai vang đỏ đặc biệt bằng c&aacute;ch kết hợp cấu tr&uacute;c của nho Cabernet Sauvignon v&agrave; sự phong ph&uacute; của nho Syrah. Rượu thể hiện sự c&acirc;n bằng hợp l&yacute; giữa m&ugrave;i vị của tr&aacute;i c&acirc;y v&agrave; hương của gỗ sồi.', '750', '14', 'Úc', 'Generic', 4, 19, 1, '2022-05-03 11:04:53', '2022-05-03 11:05:03'),
(20, 'RƯỢU VANG ĐỎ CHILE MONTES ALPHA SPECIAL CUVEE CABERNET', 'ruou-vang-do-chile-montes-alpha-special-cuvee-cabernet', 880000, 100, 'gP1wM-060849-xn7.png', NULL, 'true', NULL, 'Rượu vang đỏ Chile Montes Alpha Special Cuvee Cabernet Sauvignon của nh&agrave; vang nổi tiếng Montes của Chile v&agrave; được ủ 16 th&aacute;ng trong th&ugrave;ng gỗ sồi, với những đặc điểm sau', '750', '14', 'Chile', 'Colchagua Valley', 6, 20, 1, '2022-05-03 11:08:49', '2022-05-03 11:08:49'),
(21, 'RƯỢU VANG ĐỎ Ý F NEGROAMARO', 'ruou-vang-do-y-f-negroamaro', 1100000, 100, 'PGVHo-061212-fGW.png', NULL, 'true', NULL, '<p>Đ&acirc;y l&agrave; một chai rượu vang đỏ thượng hạng được l&agrave;m ho&agrave;n to&agrave;n từ giống nho truyền thống Negroamaro của &Yacute;, đến từ h&atilde;ng sản xuất rượu vang danh tiếng&nbsp;Cantine San Marzano.</p>\r\n\r\n<p>Rượu vang&nbsp;F Negroamaro Salento c&oacute; m&agrave;u t&iacute;m s&acirc;u sắc hấp dẫn. Khi đưa l&ecirc;n mũi, sẽ ngửi thấy m&ugrave;i hương phong ph&uacute; v&agrave; phức hợp của c&aacute;c loại tr&aacute;i c&acirc;y đen ch&iacute;n mọng như tr&aacute;i mận ch&iacute;n, tr&aacute;i d&acirc;u, mứt anh đ&agrave;o c&ugrave;ng m&ugrave;i hương vanila thoang thoảng. Khi nhấp trong miệng c&oacute; thể cảm nhận được cấu tr&uacute;c căng tr&ograve;n, tr&ograve;n trịa trong khoang miệng với hương vị b&eacute;o ngậy của kem, bơ k&egrave;m theo vị ch&aacute;t tannin nhẹ nh&agrave;ng tinh tế. M&ugrave;i cacao nồng n&agrave;n v&agrave; m&ugrave;i gỗ tuyết t&ugrave;ng hấp dẫn lan toả khắp khoang miệng. Sau khi đi qua cuống họng sẽ để lại một dư vị ngọt ng&agrave;o, sảng kho&aacute;i k&eacute;o d&agrave;i rất l&acirc;u.</p>', '750', '15', 'Ý', 'Puglia', 8, 25, 1, '2022-05-03 11:12:12', '2022-05-03 11:12:12'),
(22, 'RƯỢU VANG ĐỎ PHÁP CHATEAUNEUF DU PAPE', 'ruou-vang-do-phap-chateauneuf-du-pape', 1050000, 200, 'q1rSX-061438-NUU.png', NULL, 'true', NULL, '<a href=\"https://caithunggo.com/pages/shop-ruou-caithunggo\">Rượu vang Ph&aacute;p La Fiole Du Pape</a>&nbsp;&ndash; Chateauneuf Du Pape (rượu vang bụi, vang vẹo)&nbsp;d&ograve;ng vang đỏ Ph&aacute;p được phối trộn từ 13 giống nho (Grenache, Syrah, Mourv&egrave;dre, Cinsault,&hellip;),&nbsp;ủ c&aacute;c năm kh&aacute;c nhau n&ecirc;n tr&ecirc;n chai kh&ocirc;ng để vintage.&nbsp; Năm 2014 được Wine Spectator đ&aacute;nh gi&aacute; 88/100 điểm', '750', '14', 'Pháp', 'Rhône Valley', 7, 21, 1, '2022-05-03 11:14:38', '2022-06-20 19:13:36'),
(23, 'RƯỢU VANG ĐỎ MỸ BOGLE MERLOT', 'ruou-vang-do-my-bogle-merlot', 790000, 100, 'ys2iv-062120-cnc.png', NULL, 'true', NULL, NULL, '750', '13', 'Mỹ', 'California', 13, 22, 1, '2022-05-03 11:21:20', '2022-05-03 11:26:19'),
(24, 'RƯỢU VANG ĐỎ ARGENTINA KAIKEN ULTRA CABERNET SAUVIGNON', 'ruou-vang-do-argentina-kaiken-ultra-cabernet-sauvignon', 1050000, 100, 'b8VQx-062334-8ix.png', NULL, 'true', NULL, '<a href=\"https://caithunggo.com/pages/shop-ruou-caithunggo\">Rượu vang Ph&aacute;p La Fiole Du Pape</a>&nbsp;&ndash; Chateauneuf Du Pape (rượu vang bụi, vang vẹo)&nbsp;d&ograve;ng vang đỏ Ph&aacute;p được phối trộn từ 13 giống nho (Grenache, Syrah, Mourv&egrave;dre, Cinsault,&hellip;),&nbsp;ủ c&aacute;c năm kh&aacute;c nhau n&ecirc;n tr&ecirc;n chai kh&ocirc;ng để vintage.&nbsp; Năm 2014 được Wine Spectator đ&aacute;nh gi&aacute; 88/100 điểm', '750', '14', 'Pháp', 'Rhône Valley', 12, 23, 1, '2022-05-03 11:23:34', '2022-05-03 11:27:28'),
(26, 'RƯỢU VANG ĐỎ Ý CODICI BỊCH 3L PRIMITIVO, MERLOT', 'ruou-vang-do-y-codici-bich-3l-primitivo-merlot', 620000, 71, 'j3SvW-055021-NYE.webp', NULL, 'true', NULL, NULL, '6.000', NULL, NULL, NULL, 13, 23, 1, '2022-05-22 10:37:12', '2022-06-20 19:46:07'),
(27, 'HIBIKI SUNTORY WHISKY 21 YO', 'hibiki-suntory-whisky-21-yo', 18800000, 80, 'xCjB2-092506-yBo.png', NULL, 'true', NULL, '<p>Hibiki trong tiếng Nhật c&oacute; nhiều nghĩa mang t&iacute;nh t&iacute;ch cực. V&iacute; dụ như l&agrave; &ldquo;tiếng vang&rdquo; (giống như tiếng vang vọng khi ta đ&aacute;nh v&agrave;o chu&ocirc;ng). Một &yacute; nghĩa kh&aacute;c tương đương với từ tiếng Anh l&agrave;&nbsp;&ldquo;Harmony&rdquo;&nbsp;mang &yacute; nghĩa h&agrave;i h&ograve;a c&acirc;n đối. N&oacute; như một bản nhạc giao hưởng v&agrave; đ&acirc;y cũng l&agrave; &yacute; nghĩa m&agrave; h&atilde;ng Suntory chọn.</p>\r\n\r\n<p>Hibiki l&agrave; loại whisky phối trộn từ c&aacute;c d&ograve;ng whisky malt. Johnnie Walker nh&atilde;n xanh (green label) cũng thuộc c&ugrave;ng loại blended malt như loại Hibiki n&agrave;y. N&oacute;i thế để ph&acirc;n biệt với loại whisky phối chế từ cả hai d&ograve;ng whisky l&ecirc;n men từ malt v&agrave; whisky l&ecirc;n men từ grain.</p>\r\n\r\n<p>HIBIKI SUNTORY WHISKY 21 YO đ&oacute;ng chai ở 43% độ cồn trong mẫu chai đặc trưng của nh&agrave; n&agrave;y. Với 24 cạnh tượng trưng cho 24 m&ugrave;a trong năm &acirc;m lịch của người Nhật.</p>\r\n\r\n<p>Hibiki 21&nbsp;được pha trộn phức tạp từ 30 loại Malt whisky, tuy nhi&ecirc;n lại rất dễ uống v&agrave; kết th&uacute;c d&agrave;i. C&aacute;c whisky được lựa chọn tỉ mỉ để c&oacute; độ c&acirc;n bằng ho&agrave;n hảo, vị nhẹ ngọt thanh, kết th&uacute;c k&eacute;o d&agrave;i.</p>\r\n\r\n<p>Rượu Hibiki 21 năm&nbsp;ngập tr&agrave;n trong hương vị tr&aacute;i c&acirc;y, đ&oacute; l&agrave;: Đ&agrave;o, mơ, l&aacute; chanh, dưa, hoa hồng, hoa huệ, ghi ch&uacute; mật ong, s&aacute;p nhựa, hạt dẻ, cacao, gỗ sồi, vanilla tạo cảm gi&aacute;c mượt v&agrave; &ecirc;m dịu, dư vị k&eacute;o d&agrave;i bởi gia vị v&agrave; kh&oacute;i.</p>\r\n\r\n<p>Đặc biệt, với việc &aacute;p dụng phương ph&aacute;p lọc than. Hibiki c&oacute; vị ngọt v&agrave; &ecirc;m dịu hơn, rất dễ chịu khi thưởng thức.&nbsp;</p>\r\n\r\n<p>Rượu Hibiki 21 năm Nhật&nbsp;của nh&agrave; m&aacute;y Suntory l&agrave; d&ograve;ng whisky danh gi&aacute; đ&atilde; đạt danh hiệu &ldquo;Best Blended Whisky&rdquo; của Thế giới năm 2014 v&agrave; nhiều huy chương v&agrave;ng kh&aacute;c.&nbsp;</p>', '700', '43', 'Nhật Bản', NULL, 13, 31, 1, '2022-05-24 14:25:06', '2022-06-20 15:14:30'),
(28, 'RƯỢU WHISKY NIKKA SAMURAI GOLD & GOLD – NHẬT BẢN', 'ruou-whisky-nikka-samurai-gold-gold-nhat-ban', 2250000, 10, 'ShpG1-092920-xfq.jpg', NULL, 'true', NULL, '<p>Theo phong tr&agrave;o duy t&acirc;n được nh&agrave; nước khuyến kh&iacute;cH thời bấy giờ, ch&agrave;ng trai trẻ Taketsuru xuống t&agrave;u một m&igrave;nh b&ocirc;n ba qua tận Scotland để t&igrave;m học những b&iacute; quyết l&agrave;m ra rượu Whisky để rồi l&agrave;m dạng danh nước nh&agrave; với d&ograve;ng Whisky Nhật Bản nổi tiếng Thế Giới sau n&agrave;y. Nikka Whisky Samurai l&agrave; sự lựa chọn v&agrave; pha trộn một c&aacute;ch tỷ mỷ c&aacute;c loại rượu Whisky của Chuy&ecirc;n gia pha chế rượu Taketsuru Masataka người Nhật bản . Một sản phẩm rượu Whisky được sản xuất theo phương ph&aacute;p cổ truyền của Scotland nhưng mang phong vị Nhật bản đang chờ được kh&aacute;m ph&aacute;:</p>\r\n\r\n<p>Rượu Nikka whisky mang tr&ecirc;n m&igrave;nh h&igrave;nh h&agrave;i của một v&otilde; sỹ Samurai Nhật bản c&oacute; mầu v&agrave;ng hổ ph&aacute;ch đậm . Rượu Nikka Whisky l&agrave; sản phẩm chứa nhiều lớp Whisky L&uacute;a mạch v&agrave; Whisky Mạch nha được chưng cất từ 2 địa danh nổi tiếng của Nhật bản l&agrave; Miyagikio v&agrave; Yoichihokaido</p>\r\n\r\n<p>Nikka Whisky l&agrave; một trong hai thương hiệu Whisky lớn nhất tại Nhật bản . Thương hiệu kia l&agrave; Suntory . Rượu Nikka Whisky được l&ecirc;n men v&agrave; ủ trong những th&ugrave;ng gỗ Sồi v&agrave; l&agrave; một hỗn hợp ho&agrave;n hảo của rượu Whisky pha trộn c&oacute; hương vị đặc trưng của d&ograve;ng Whisky pha trộn ( Blended Scotch Whisky ) nhưng c&oacute; thiết kế chai rượu theo phong c&aacute;ch Nhật Bản&nbsp;</p>\r\n\r\n<p>Khi thưởng d&ograve;ng sản phẩm n&agrave;y ta c&oacute; thể cảm nhận được hương thơm đầu ti&ecirc;n l&agrave; của Hoa quả ch&iacute;n v&agrave; Gia vị từ Vỏ cam , Mơ rừng . Vị ở giữa l&agrave; Quả Sồi đang ch&iacute;n v&agrave; Caramel tr&aacute;i c&acirc;y . Vị cuối l&agrave; hương vị Quả ch&iacute;n kết hợp với Vanilia dịu ngọt</p>', '750', '43', 'Nhật Bản', NULL, 10, 32, 1, '2022-05-24 14:29:00', '2022-06-21 03:02:22'),
(37, 'RƯỢU VANG PHÁP FITOU LA BAUME SAINT – PAUL', 'ruou-vang-phap-fitou-la-baume-saint-paul', 550000, 100, 'nQC9j-012846-A3U.jpg', NULL, 'true', NULL, '<p>Terroir La Baume Saint Paul Fitou c&oacute; m&agrave;u đỏ ruby sẫm, với m&ugrave;i quả ch&iacute;n, m&ugrave;i tr&aacute;i anh đ&agrave;o dại ch&iacute;n ngấu, m&ugrave;i tr&aacute;i black berry, m&ugrave;i quả mận. Điểm đặc biệt của rượu Terroir La Baume Saint Paul Tautavell&agrave; c&oacute; m&ugrave;i dừa v&agrave; m&ugrave;i hương cam rất đặc trưng. Rượu được ủ trong những th&ugrave;ng gỗ sồi Ph&aacute;p, mới 100%. Đ&acirc;y l&agrave; một điều thực sự xa xỉ bởi th&ugrave;ng gỗ sồi của Ph&aacute;p phải được l&agrave;m từ những c&acirc;y sồi c&oacute; độ tuổi từ 60 năm trở l&ecirc;n.</p>\r\n\r\n<p>Ph&ugrave; hợp ăn k&egrave;m với c&aacute;c loại thịt đỏ, thịt vịt, thịt b&ograve;, ph&ocirc; mai, c&aacute;c m&oacute;n nướng&hellip; bảo quản nơi kh&ocirc; tho&aacute;ng v&agrave; tr&aacute;nh &aacute;nh nắng trực tiếp.</p>\r\n\r\n<p>Rượu vang Ph&aacute;p Terroir La Baume Saint Paul Fitou với tem nh&atilde;n chai được l&agrave;m bằng kim loại nguy&ecirc;n miếng mang đến sự cổ k&iacute;nh v&agrave; sang trọng, rất ph&ugrave; hợp để d&ugrave;ng l&agrave;m qu&agrave; tặng cho bạn b&egrave;, đối t&aacute;c hay người th&acirc;n trong gia đ&igrave;nh v&agrave;o những dịp lễ Tết&hellip;</p>', '700', '14', 'Pháp', 'Bordeaux', 3, 19, 1, '2022-06-21 18:28:46', '2022-06-21 18:28:46'),
(38, 'RƯỢU VANG DELAS HAUTE PIERRE CHATEAUNEUF DU PAPE', 'ruou-vang-delas-haute-pierre-chateauneuf-du-pape', 1300000, 30, 'hJezN-013157-gzn.jpg', NULL, 'true', NULL, '<p><strong>Rượu vang Delas Haute Pierre Chateauneuf du Pape</strong>&nbsp;l&agrave; một trong những loại rượu vang cao cấp của nh&agrave; sản xuất rượu vang Delas Freres &ndash; Ph&aacute;p. Nh&agrave; sản xuất rượu vang Delas Freres nổi tiếng khắp thế giới với những chai vang đỏ thơm ngon đẳng cấp. H&atilde;ng rượu n&agrave;y được điều h&agrave;nh bởi nh&oacute;m chuy&ecirc;n gia h&agrave;ng đầu về rượu vang m&agrave; người đứng đầu l&agrave; nh&agrave; l&agrave;m rượu danh tiếng Jacques Grange. Với sự cố gắng v&agrave; s&aacute;ng tạo kh&ocirc;ng ngừng nghỉ trong suốt những năm th&aacute;ng qua m&agrave; Delas Freres đ&atilde; tạo n&ecirc;n những chai rượu vang xuất sắc được đ&aacute;nh gi&aacute; rất cao.&nbsp;Trong đ&oacute; phải kể đến chai rượu vang danh tiếng n&agrave;y. Chai vang n&agrave;y mang những đặc trưng rất &ldquo;Ph&aacute;p&rdquo; với hương thơm tinh tế v&agrave; hương vị rượu đậm đ&agrave;.</p>\r\n\r\n<h2><strong>Đặc điểm của rượu vang Delas Haute Pierre Chateauneuf du Pape</strong></h2>\r\n\r\n<p>Rượu l&agrave; chai rượu vang c&oacute; sự kết hợp h&agrave;i h&ograve;a giữa tỷ lệ của hai giống nho&nbsp;Grenache&nbsp;va&nbsp;Syrah. Trong đ&oacute; nho Grenache chiếm th&agrave;nh phần ch&iacute;nh v&agrave; rượu vang mang những đặc trưng r&otilde; rệt của giống nho n&agrave;y. Rượu c&oacute; xuất sứ từ h&atilde;ng&nbsp;Chateauneuf Du Pape. Đ&acirc;y l&agrave; khu vực c&oacute; truyền thống rất l&acirc;u đời sản xuất rượu vang tr&ecirc;n thế giới.</p>\r\n\r\n<p>Khi thưởng thức rượu bạn c&oacute; thể cảm nhận được hương vị nổi bật của tr&aacute;i c&acirc;y ch&iacute;n mọng như quả m&acirc;m x&ocirc;i. Thoảng hương trong đ&oacute; c&ograve;n c&oacute; hương vị ấn tượng của gia vị ớt cay. V&ocirc; c&ugrave;ng ấn tượng đ&uacute;ng kh&ocirc;ng n&agrave;o. Sự kết hợp đặc biệt n&agrave;y đ&atilde; tạo ra n&eacute;t ph&aacute; c&aacute;ch v&ocirc; c&ugrave;ng độc đ&aacute;o, s&aacute;ng tạo của rượu. &nbsp;Rượu c&oacute; hương vị mạnh mẽ c&ugrave;ng m&ugrave;i hương ấn tượng với nồng độ cồn nhẹ nh&agrave;ng 13.5%.</p>\r\n\r\n<p>Ngo&agrave;i ra, th&igrave; rượu&nbsp;c&ograve;n c&oacute; vị tannin kh&aacute; mềm mại. Bởi vậy n&oacute; c&oacute; thể chiếm được cảm t&igrave;nh của bất kỳ vị kh&aacute;ch h&agrave;ng n&agrave;o ngay trong lần đầu ti&ecirc;n sử dụng. Với thiết kế chai v&ocirc; c&ugrave;ng đẹp mắt v&agrave; tinh tế đ&acirc;y cũng l&agrave; sản phẩm th&iacute;ch hợp để l&agrave;m đồ biếu tặng gia đ&igrave;nh, bạn b&egrave; trong những dịp đặc biệt.</p>', '750', '14', 'Pháp', NULL, 4, 19, 1, '2022-06-21 18:31:57', '2022-06-21 18:31:57'),
(39, 'RƯỢU CHAMPAGNE CHARLES DE CAZANOVE BRUT TETE DE CUVEE', 'ruou-champagne-charles-de-cazanove-brut-tete-de-cuvee', 1100000, 100, 'MwVWQ-013505-hvR.jpg', NULL, 'true', NULL, '<p>Charles de Cazanove l&agrave; một trong những nh&agrave; Champagne l&acirc;u đời nhất với sự kết hợp giữa truyền thống, hiện đại v&agrave; sự s&aacute;ng tạo trải qua hơn 2 thế kỷ. Champagne Charles de Cazanove ch&iacute;nh l&agrave; biểu tượng cho niềm đam m&ecirc; v&agrave; cống hiến của gia đ&igrave;nh đ&atilde; d&agrave;nh cả sự nghiệp để l&agrave;m n&ecirc;n b&iacute; quyết l&agrave;m Champagne độc nhất v&ocirc; nhị, truyền từ đời n&agrave;y sang đời kh&aacute;c. Nhờ v&agrave;o chất lượng của vườn nho v&agrave; phương ph&aacute;p sản xuất ri&ecirc;ng biệt nhưng vẫn t&ocirc;n trọng c&aacute;c nguy&ecirc;n tắc đ&atilde; tạo n&ecirc;n những loại Champagne với chất lượng tuyệt đỉnh. Giờ đ&acirc;y, Charles de Cazanove trở th&agrave;nh một trong những gia đ&igrave;nh l&agrave;m Champagne tiếng tăm tr&ecirc;n thế giới.</p>\r\n\r\n<ul>\r\n	<li>Charles de Cazanove l&agrave; thương hiệu Champagne b&aacute;n chạy đứng thứ 7 ở Ph&aacute;p</li>\r\n	<li>Winemaker của nh&agrave; rượu được trao tặng giải thưởng: Winemaker của Năm 2017</li>\r\n</ul>\r\n\r\n<p><strong>Đặc điểm:</strong></p>\r\n\r\n<p>M&agrave;u sắc trong suốt với những hạt sủi đẹp đến nao l&ograve;ng. M&ugrave;i hương sống động, mang vị kho&aacute;ng, xen kẽ gợi &yacute; m&ugrave;i hương của b&aacute;nh mỳ ngọt. Tươi m&aacute;t trong khoang miệng, với bong b&oacute;ng sủi tinh tế v&agrave; m&ugrave;i chanh h&ograve;a quyện một c&aacute;ch c&acirc;n bằng.</p>', '750', '13', 'Pháp', 'Champagne', 14, 19, 1, '2022-06-21 18:35:05', '2022-06-21 18:35:05'),
(40, 'RƯỢU VANG PHÁP LE GRAND NOIR GSM', 'ruou-vang-phap-le-grand-noir-gsm', 450000, 100, 'VqOql-013719-ff4.jpg', NULL, 'true', NULL, NULL, '750', '14', 'Pháp', NULL, 5, 19, 1, '2022-06-21 18:37:19', '2022-06-21 18:37:19'),
(41, 'RƯỢU VANG CHILE TARAPACA GRAN RESERVE CABERNET SAUVIGNON', 'ruou-vang-chile-tarapaca-gran-reserve-cabernet-sauvignon', 1100000, 100, '9MILe-013946-1Q8.jpg', NULL, 'true', NULL, 'Tham khảo th&ecirc;m th&ocirc;ng tin nh&agrave; sản xuất tại đ&acirc;y:&nbsp;https://www.tarapaca.cl', '750', '14', 'Chilê', NULL, 7, 19, 1, '2022-06-21 18:39:46', '2022-06-21 18:39:46'),
(42, 'RƯỢU JACK DANIEL’S OLD NO.7 TENNESSE WHISKY – LEGACY EDITION 2', 'ruou-jack-daniels-old-no7-tennesse-whisky-legacy-edition-2', 675000, 30, 'qulZ3-014233-epU.jpg', NULL, 'true', NULL, 'Rượu&nbsp;Jack Daniel&rsquo;s Old No. 7 Tennessee Whiskey 1 l&iacute;t &ndash; Legacy Edition 2, d&ograve;ng whiskey b&aacute;n chạy nhất hiện nay. Đ&acirc;y l&agrave; phi&ecirc;n bản thứ 2 trong seri Legacy để kỷ niệm lịch sử của whiskey Tennessee của nh&agrave; Jack Daniel.', '1000', '43', 'Mỹ', NULL, 8, 30, 1, '2022-06-21 18:42:33', '2022-06-21 18:42:33'),
(43, 'RƯỢU WHISKY JACKS DANIEL’S RED DOG', 'ruou-whisky-jacks-daniels-red-dog', 720000, 100, '9w0cX-014445-qSY.png', NULL, 'true', NULL, NULL, '1000', '43', 'Mỹ', NULL, 8, 30, 1, '2022-06-21 18:44:45', '2022-06-21 18:44:45'),
(44, 'MARTELL VSOP 70CL HỘP QUÀ', 'martell-vsop-70cl-hop-qua', 1500000, 100, 'rxkIU-014931-eJ8.png', NULL, 'true', NULL, '<p>Martell VSOP&nbsp;&nbsp;với một chiếc bội tinh v&agrave;ng chạm ch&acirc;n dung vua Louis XIV v&agrave; tưởng niệm năm 1715, l&agrave; năm chứng kiến sự kết th&uacute;c của triều đại của vị Vua Mặt Trời v&agrave; sự khai sinh của House of&nbsp;Martell.<br />\r\nLoại rượu cognac n&agrave;y được sản xuất bằng c&aacute;c loại rượu nền đủ tuổi, được pha chế kh&eacute;o l&eacute;o từ bốn v&ugrave;ng trồng nho ngon nhất của khu vực Cognac. Một loại cognac ngọt dịu, một loại rượu thực sự từ những hương thơm, tươi mới, dễ chịu v&agrave; c&oacute; m&ugrave;i gỗ</p>\r\n\r\n<p>Đ&acirc;y l&agrave; một loại&nbsp;<strong>C</strong><strong>ognac</strong>&nbsp;ngọt dịu, một loại rượu thực sự từ những hương thơm của chanh, cam thảo, nho kh&ocirc; v&agrave; mận, vị dễ chịu v&agrave; c&oacute; m&ugrave;i tươi mới của gỗ sồi. Rượu c&oacute; m&agrave;u v&agrave;ng hổ ph&aacute;ch, vị rượu nhẹ v&agrave; dịu, tr&ograve;n đầy phong ph&uacute;, dư vị k&eacute;o d&agrave;i.&nbsp;</p>\r\n\r\n<p>Khứu gi&aacute;c: Sự mềm mại của vị đắng c&oacute; hậu ngọt: vị chanh v&agrave; cam thảo.Vị tr&aacute;i c&acirc;y ng&agrave;o đường: mộc qua, nho kh&ocirc; v&agrave; mận.Mầm xu&acirc;n: vị tươi mới của gỗ sồi (thớ mịn v&agrave; hạt dẻ).<br />\r\nVị gi&aacute;c: Mềm mại, ngọt dịu v&agrave; tinh tế với vị tr&aacute;i c&acirc;y ng&agrave;o đường. D&aacute;ng tr&ograve;n đầy phong ph&uacute;. Dư vị k&eacute;o d&agrave;i.<br />\r\nThưởng thức: Một loại cognac để thưởng thức ri&ecirc;ng, uống với đ&aacute; hoặc pha th&ecirc;m với một thức uống pha trộn.</p>\r\n\r\n<p>Martell VSOP&nbsp;l&agrave; loại rượu c&oacute; thể d&ugrave;ng tiếp đ&atilde;i từ những bữa tiệc lớn đến những cuộc họp mặt nhỏ, hoặc l&agrave; một bữa tiệc th&acirc;n mật hai người. Vị rượu nhẹ v&agrave; dịu, rất th&iacute;ch hợp khi ướp lạnh hoặc pha. Nh&atilde;n tr&ecirc;n chai l&agrave; một hu&acirc;n chương m&agrave;u v&agrave;ng, c&oacute; in ch&acirc;n dung của Vua Louis XIV.</p>', '700', '40', 'Pháp', NULL, 10, 34, 1, '2022-06-21 18:49:31', '2022-06-21 18:49:31'),
(45, 'DALMORE 15 YEARS RƯỢU WHISKY SINGLE MALT', 'dalmore-15-years-ruou-whisky-single-malt', 1950000, 30, '5soDO-015220-j6X.png', NULL, 'true', NULL, '<p>ĐẶC ĐIỂM:</p>\r\n\r\n<ul>\r\n	<li>Rượu Dalmore 15 năm, l&agrave; d&ograve;ng single malt mang đậm style nh&agrave; Dalmore với hương vị mượt m&agrave;, thanh, hương vị rất phong ph&uacute; với cốt rượu tr&ograve;n đầy.</li>\r\n	<li>Điểm ấn tượng của rượu Dalmore 15 year old l&agrave; qu&aacute; tr&igrave;nh ủ phức tạp bao gồm rượu được trưởng th&agrave;nh 12 năm trong th&ugrave;ng gỗ sồi trắng Mỹ đ&atilde; ủ qua rượu Bourbon sau đ&oacute; rượu được chia đều ra v&agrave; ủ tiếp hơn 3 năm nữa trong 3 loại th&ugrave;ng sherry gồm: Amoroso, Apostoles v&agrave; Matusalem oloroso. Sau đ&oacute; rượu đ&ecirc;m đi phối trộn với nhau trong th&ugrave;ng chứa sherry v&agrave; đi đ&oacute;ng chai.&nbsp;.</li>\r\n	<li>M&ugrave;i:&nbsp;Mạnh mẽ v&agrave; nồng n&agrave;n, Dalmore 15 Years Old lấy t&ocirc;ng m&ugrave;i mạch nha l&agrave;m chủ đạo phảng phất hương sherry Oloroso. Chai rượu n&agrave;y kết hợp một c&aacute;ch t&agrave;i t&igrave;nh m&ugrave;i cam, mứt marmalade (mứt l&agrave;m từ vỏ cam) v&agrave; một ch&uacute;t gia vị thơm nồng.</li>\r\n	<li>Vị: Dalmore 15 Years Old t&aacute;c động mạnh mẽ l&ecirc;n vị gi&aacute;c. nhưng vẫn thể hiện một c&aacute;ch tao nh&atilde; c&aacute;c m&ugrave;i vị đặc trưng.&nbsp;rượu Dalmore n&agrave;y l&agrave; sự h&ograve;a trộn h&agrave;i h&ograve;a giữa rượu, gỗ v&agrave; sự chin muồi của thời gian, tạo n&ecirc;n một sự kết hợp ho&agrave;n mỹ, đậm đ&agrave; v&agrave; mạnh mẽ. Vị chua gần như tập trung tại phần giữa lưỡi của bạn, tạo cảm gi&aacute;c say đắm v&agrave; k&iacute;ch th&iacute;ch.</li>\r\n	<li>Dalmore 15&nbsp; nhận&nbsp;2 huy chương v&agrave;ng trong cuộc thi đ&aacute;nh gi&aacute; chất lượng rượu mạnh thế giới tại San Francisco &ndash; San Francisco World Spirits Competition 2009</li>\r\n</ul>', '700', '40', 'Scoltland', 'Highland', 9, 34, 1, '2022-06-21 18:52:20', '2022-06-21 18:52:48'),
(46, 'JOHNNIE WALKER WHITE GAME OF THRONES', 'johnnie-walker-white-game-of-thrones', 1100000, 30, '75bF4-015512-AZf.png', NULL, 'true', NULL, '<p>Lấy cảm hứng từ bộ phim&nbsp;Game of Thrones&nbsp;t&ecirc;n tiếng việt l&agrave;&nbsp;Tr&ograve; Chơi Vương Quyền, h&atilde;ng &nbsp;Johnnie Walker tạo ra Johnie Walker White Walker bằng c&aacute;ch t&aacute;i hiện h&igrave;nh tượng nh&acirc;n vật White Walker đ&aacute;ng sợ v&agrave; đầy hấp dẫn tr&ecirc;n nh&atilde;n chai. Tận dụng sự nhạy cảm với nhiệt đột, &ldquo;Winter is Here&rdquo; được thiết kế ẩn hiện tr&ecirc;n th&acirc;n chai rượu mang lại vẻ đẹp&nbsp; đầy m&ecirc; hoặc.</p>\r\n\r\n<p>&ldquo;Johnnie Walker Trắng&rdquo; l&agrave; phi&ecirc;n bản giới hạn được ra mắt v&agrave;o th&aacute;ng 4 năm 2019 tại thị trường Việt Nam. Rượu Johnnie Walker White, được tạo bởi chuy&ecirc;n gia phối trộn George Harper v&agrave; c&aacute;c cộng sự của &ocirc;ng.c&oacute; hương vị chủ đạo của Đường Caramen , Tr&aacute;i c&acirc;y tươi v&agrave; Vanilia</p>\r\n\r\n<p>Sự pha trộn mới n&agrave;y ho&agrave;n to&agrave;n nhắc nhở người h&acirc;m mộ Johnnie Walker v&agrave; Game of Thrones rằng &ldquo;M&ugrave;a đ&ocirc;ng ở đ&acirc;y&rdquo;. Chai phi&ecirc;n bản giới hạn sử dụng mực in nhiệt để cung cấp cho người h&acirc;m mộ một th&ocirc;ng điệp bất ngờ băng gi&aacute; khi đ&ocirc;ng lạnh. Với c&aacute;c ghi ch&uacute; hương vị như đường caramel, vani v&agrave; quả mọng đỏ tươi, White Walker của Johnnie Walker l&agrave;m cho một m&oacute;n ăn ngon. Sự pha trộn mới được phục vụ tốt nhất l&agrave; đ&aacute; lạnh, lấy cảm hứng từ White Walkers ngo&agrave;i The Wall.</p>\r\n\r\n<p>Ngửi: Ch&uacute;t gợi &yacute; nhẹ nh&agrave;ng của cam bạc h&agrave; v&agrave; quả mơ kh&ocirc; , kẹo bơ cứng , ch&uacute;t hương vanilla v&agrave; gừng cắt miếng</p>\r\n\r\n<p>Hương vị: Vị ngọt dịu tự nhi&ecirc;n của đường caramen kết hợp vị cay thơm nồng của gỗ sồi cổ thụ v&agrave; quan trọng hơn l&agrave; hương thơm của c&aacute;c loại tr&aacute;i c&acirc;y tươi như l&ecirc;, chanh , t&aacute;o.</p>\r\n\r\n<p>Hậu vị:&nbsp;Hương vị mạch nha cay k&eacute;o d&agrave;i m&atilde;i v&agrave; ch&uacute;t gia vị của lễ hội</p>\r\n\r\n<p><strong>C&aacute;ch thưởng thức rượu Johnie Walker White Walker Game of Thrones</strong></p>\r\n\r\n<p>D&ugrave;ng trực tiếp: r&oacute;t rượu trực tiếp ra ly rồi nh&acirc;m nhi thưởng thức chất rượu nguy&ecirc;n chất</p>\r\n\r\n<p>Th&ecirc;m một &iacute;t nước: cho v&agrave;i giọt nước v&agrave;o ly rượu, lắc ly v&agrave; tận hưởng hương vị của rượ</p>\r\n\r\n<p>Th&ecirc;m &iacute;t đ&aacute;: cho đ&aacute; v&agrave;o ly sau đ&oacute; r&oacute;t rượu từ từ chảy qua đ&aacute;.</p>\r\n\r\n<p>Ngo&agrave;i ra rượu c&oacute; thể pha chế th&agrave;nh c&aacute;c loại cocktail mới lạ.</p>', '1000', '42', 'Scoltland', NULL, 9, 42, 1, '2022-06-21 18:55:12', '2022-06-21 18:55:38'),
(47, 'JOHNNIE WALKER GREEN LABEL 15YO', 'johnnie-walker-green-label-15yo', 800000, 30, 'fzyBA-015713-TiC.png', NULL, 'true', NULL, '<p>Johnnie Walker Green Label l&agrave; d&ograve;ng sản phẩm được phối chế từ c&aacute;c loại rượu Whisky nguy&ecirc;n liệu l&ecirc;n men từ Malt ( Mạch nha ) của c&aacute;c v&ugrave;ng sản xuất rượu Single Malt nổi tiếng nhất của Scotland đ&oacute; l&agrave; Speycide , Highland v&agrave; Islay . Green Label c&oacute; độ s&acirc;u hơn về hương vị , v&agrave; được tạo ra từ c&aacute;c loại rượu Whisky mạch nha c&oacute; độ tuổi trưởng th&agrave;nh kh&ocirc;ng dưới 15 năm.</p>\r\n\r\n<p>D&ograve;ng sản phẩm n&agrave;y khi mới ra đời được gọi l&agrave; &ldquo;Pure Malt&rdquo; mang &yacute; nghĩa l&agrave; loại rượu chỉ được phối chế từ c&aacute;c loại Whisky l&ecirc;n men từ Malt th&ocirc;i , v&agrave; cũng để ph&acirc;n biệt với d&ograve;ng Whisky pha trộn l&agrave; d&ograve;ng Whisky được phối chế từ cả Malt ( Mạch nha ) lẫn Grain ( Ngũ cốc )</p>\r\n\r\n<p>V&agrave;o năm 2004 , hội đồng Whisky Scotland đ&atilde; ph&acirc;n loại Green Label l&agrave; &ldquo;Malt phối trộn _ Blended Malt&rdquo; . Kể từ đ&oacute; h&atilde;ng rượu Johnnie Walker đ&atilde; đổi lại c&aacute;ch d&ugrave;ng từ tr&ecirc;n nh&atilde;n chai rượu Green Label l&agrave; &ldquo;Blended Malt Scotch Whisky&rdquo;</p>\r\n\r\n<p>Johnnie Walker Green Label 15yo l&agrave; d&ograve;ng rượu Whisky mạch nha pha trộn của Scotland. Rượu c&oacute; độ s&acirc;u về hương vị. Rượu được phối trộn từ c&aacute;c loại rượu Whisky mạch nha c&oacute; độ tuổi kh&ocirc;ng dưới 15 năm.</p>\r\n\r\n<p>Johnnie Walker Green Label 15yo c&oacute; hương thơm của T&aacute;o ch&iacute;n đỏ , vị ngọt dịu tự nhi&ecirc;n của Mạch nha , m&ugrave;i Kh&oacute;i than b&ugrave;n kh&ocirc; , mang đến hương vị đồng qu&ecirc; trong l&agrave;nh.</p>\r\n\r\n<p>Rượu c&ugrave;ng m&ugrave;i hương của T&aacute;o l&ecirc;n men, vị ngọt của Mạch nha, m&ugrave;i kh&oacute;i than b&ugrave;n kh&ocirc;, mang đến hương vị đồng qu&ecirc; trong l&agrave;nh.</p>', '750', '43', NULL, NULL, 9, 42, 1, '2022-06-21 18:57:13', '2022-06-21 18:57:13'),
(48, 'RƯỢU VANG JACOB’S CREEK MOSCATO', 'ruou-vang-jacobs-creek-moscato', 310000, 30, '43dyJ-020404-UJ3.jpg', NULL, 'true', NULL, 'Rượu vang Jacob&rsquo;s Creek Moscato l&agrave; chai vang trắng c&oacute; hương vị nhẹ nh&agrave;ng v&agrave; sảng kho&aacute;i với sherbet m&aacute;t lạnh được c&acirc;n bằng bởi c&aacute;c loại tr&aacute;i c&acirc;y mềm. Hương đ&agrave;o trắng nhiệt đới với hương hoa kim ng&acirc;n v&agrave; chanh.', '750', '8', 'Úc', NULL, 2, 20, 1, '2022-06-21 19:04:04', '2022-06-21 19:04:04'),
(49, 'RƯỢU VANG TRẮNG BIN 222', 'ruou-vang-trang-bin-222', 520000, 100, 'YvzJK-020534-Pr6.jpg', NULL, 'true', NULL, '<p>Vang trắng&nbsp;Bin 222 Wyndham Chardonnay l&agrave; một trong những chai vang trắng được ưa chuộng nhất nước &Uacute;c. Rượu c&oacute; m&agrave;u v&agrave;ng rơm sang trọng, phản chiếu &aacute;nh s&aacute;ng đẹp mắt. Nho Chardonnay l&agrave;m rượu được trồng trong kh&iacute; hậu m&aacute;t mẻ, với những th&aacute;ng lạnh, gi&uacute;p nước quả c&ocirc; đọng rất tốt.&nbsp;những loại tr&aacute;i c&acirc;y ch&iacute;n mong chọn lọc rất kỹ từ những vườn tr&aacute;i c&acirc;y của &Uacute;c l&agrave; loại vang trắng l&agrave;m từ giống nho trắng Chardonnay. Được ủ v&agrave; chưng cất theo những quy định nghi&ecirc;m ngặt sẽ mang đến cho bạn một hương vị v&agrave; phong c&aacute;ch ri&ecirc;ng.&nbsp;</p>\r\n\r\n<p>Hương thơm nồng n&agrave;n của quả ch&iacute;n, đặc biệt l&agrave; hương dưa lưới tươi m&aacute;t đ&atilde; tạo n&ecirc;n dấu ấn của vang trắng &Uacute;c Wyndham Bin 222 Chardonnay. Hương thơm th&ecirc;m hấp dẫn với b&aacute;nh m&igrave; nướng v&agrave; hương vani gỗ sồi sang trọng. Hương vị tuyệt vời của quả đ&agrave;o kết hợp c&ugrave;ng lựu đ&atilde; mang đến tổng thể đầy sảng kho&aacute;i. Vị rượu vang Wyndham Bin 222 Chardonnay n&acirc;ng tầm th&ecirc;m với hương gỗ sồi độc đ&aacute;o h&igrave;nh th&agrave;nh từ qu&aacute; tr&igrave;nh l&ecirc;n men.</p>', '750', '12', 'Úc', NULL, 2, 20, 1, '2022-06-21 19:05:34', '2022-06-21 19:05:34'),
(50, 'RƯỢU VANG TRẮNG MỸ BOGLE CHENIN BLANC', 'ruou-vang-trang-my-bogle-chenin-blanc', 790000, 50, 'e5dXG-020745-yOv.jpg', NULL, 'true', NULL, NULL, '750', '11', 'Mỹ', 'California', 2, 20, 1, '2022-06-21 19:07:45', '2022-06-21 19:07:45'),
(51, 'RƯỢU ROYAL SALUTE 25 NĂM CHAI SỨ', 'ruou-royal-salute-25-nam-chai-su', 5200000, 30, 'wVJQg-020951-H3J.jpg', NULL, 'true', NULL, '<p><strong>Rượu Royal Salute 25 hay Chivas 25 năm chai sứ</strong>&nbsp;l&agrave; phi&ecirc;n bản mới nhất vừa được&nbsp;<strong>Pernod Ricard</strong>&nbsp;vừa c&ocirc;ng bố. Phi&ecirc;n bản&nbsp;<strong>Royal Salute 25 năm</strong>&nbsp;ph&aacute;t h&agrave;nh ri&ecirc;ng cho k&ecirc;nh b&aacute;n lẻ du lịch to&agrave;n cầu (K&ecirc;nh duty free tại c&aacute;c s&acirc;n bay), c&oacute; mặt tại c&aacute;c s&acirc;n bay bắt đầu th&aacute;ng 11/2019 v&agrave; nhanh ch&oacute;ng c&oacute; mặt tại VN qua k&ecirc;nh x&aacute;ch tay b&aacute;n lẻ.</p>\r\n\r\n<p><strong>Rượu Chivas 25 năm</strong>&nbsp;chai sứ được phối trộn một c&aacute;ch cẩn thận, qu&yacute; gi&aacute; từ c&aacute;c th&ugrave;ng rượu được ủ &iacute;t nhất 25 năm với nhau n&ecirc;n rượu cho hương vị rất c&acirc;n bằng, mượt m&agrave; v&agrave; s&acirc;u sắc.&nbsp;l&agrave; d&ograve;ng whisky cao cấp nhất trong seri Chivas Regal. Được c&aacute;c Master Blender của h&atilde;ng chăm chỉ lựa chọn từ những th&ugrave;ng rượu whisky ngon nhất để đi blend với nhau. Ch&iacute;nh v&igrave; vậy mang đến cho bạn những hương vị đặc biệt nhất của d&ograve;ng whisky Scotch.</p>', '750', '40', 'Scotland', NULL, 6, 41, 1, '2022-06-21 19:09:51', '2022-06-21 19:09:51'),
(52, 'RƯỢU VANG CHAMPANGE CHATEAU DE BLIGY', 'ruou-vang-champange-chateau-de-bligy', 1200000, 20, 'pCPSC-021540-4Zg.jpg', NULL, 'true', NULL, '<p>Rượu vang Champagne Chateau de Bligny Grande Reserve mang phong c&aacute;ch cổ đại đặc biệt của v&ugrave;ng đất Champagne, nước Ph&aacute;p. Đ&acirc;y l&agrave; v&ugrave;ng đất truyền thống l&acirc;u đời nổi tiếng về c&aacute;c d&ograve;ng vang s&acirc;m banh thơm ngon hảo hạng nhất, được mọi người y&ecirc;u th&iacute;ch. Với hương vị của rượu nổi bật với sự ngọt ng&agrave;o thanh khiết đi k&egrave;m với vị chua h&agrave;i h&ograve;a với cường độ tinh tế, vừa phải, rất thơm v&agrave; dễ uống.</p>\r\n\r\n<p>Khi mở nắp vang, ngo&agrave;i việc tạo n&ecirc;n một tiếng nổ kh&aacute; lớn l&agrave;m tăng th&ecirc;m kh&ocirc;ng kh&iacute; sống động v&agrave; vui vẻ, m&ugrave;i thơm của rượu lan tỏa tr&agrave;n đầy tr&ecirc;n b&agrave;n tiệc c&ograve;n l&agrave; một n&eacute;t thu h&uacute;t v&agrave; hấp dẫn hơn. M&ugrave;i nho ch&iacute;n v&agrave; c&aacute;c loại quả mọng, c&aacute;c th&agrave;nh phần tự nhi&ecirc;n kết hợp được b&ugrave;ng nổ v&agrave; len lỏi ra khỏi n&uacute;t chai, t&igrave;m đến những khứu gi&aacute;c của thực kh&aacute;ch v&agrave; t&aacute;c động một c&aacute;ch tinh tế v&agrave; dễ chịu.</p>\r\n\r\n<p>Thưởng thức rượu ở nhiệt độ khoảng 12 &ndash; 15 độ C. Đ&acirc;y l&agrave; nhiệt độ ti&ecirc;u chuẩn l&iacute; tưởng để vị vang trở n&ecirc;n tươi mới v&agrave; h&agrave;i h&ograve;a nhất. Khi thưởng thức, hương vị nổi bật của rượu m&agrave; thực kh&aacute;ch c&oacute; thể dễ d&agrave;ng nhận thấy ngay lập tức l&agrave; vị ngọt đậm s&acirc;u c&ugrave;ng một ch&uacute;t vị chua nồng n&agrave;n đi k&egrave;m. Nhấp m&ocirc;i v&agrave;i lần nữa, vị ch&aacute;t nhẹ v&agrave; cay nồng cũng được thể hiện một c&aacute;ch r&otilde; n&eacute;t, c&ugrave;ng với đ&oacute; l&agrave; một hậu vị đầy ấn tượng với hương thơm của thảo mộc v&agrave; gỗ Sồi trong v&ograve;m miệng do rượu để lại.&nbsp;</p>\r\n\r\n<p>Rượu vang mang phong c&aacute;ch nhẹ nh&agrave;ng v&agrave; thanh lịch, v&igrave; thế n&ecirc;n rất dễ kết hợp với c&aacute;c loại thịt trắng v&agrave; hải sản như thịt lợn, g&agrave; t&acirc;y, thịt cừu, ba chỉ nướng, c&aacute;, t&ocirc;m, cua, mực v&agrave; c&aacute;c loại pho mai mềm.</p>', '750', '13', 'Pháp', NULL, 12, 21, 1, '2022-06-21 19:15:40', '2022-06-21 19:15:40'),
(53, 'RƯỢU VANG NỔ BOTTEGA GOLD', 'ruou-vang-no-bottega-gold', 980000, 30, 'XZeaQ-021807-OZz.jpg', NULL, 'true', NULL, '<p>Khi nhắc đến đất nước Italia th&igrave; c&aacute;c bạn c&oacute; thể li&ecirc;n tưởng ngay đến đất nước của sứ sở rượu vang nh&acirc;n loại. V&agrave; tự bao giờ rượu vang &Yacute; đi đi s&acirc;u v&agrave;o tiềm thức của mỗi con người. Rượu Champagne Bottega Gold&nbsp;l&agrave; chai vang điển h&igrave;nh ti&ecirc;u biểu của quốc gia n&agrave;y như mang đến cho người thưởng thức một m&oacute;n ăn tinh thần tuyệt hảo.</p>\r\n\r\n<p>Vang được l&agrave;m từ ho&agrave;n to&agrave;n 100% giống nho&nbsp;Glera, đ&acirc;y l&agrave; giống nho bản địa được trồng ở những khu vườn trồng nho c&oacute; diện t&iacute;ch tương đối lớn. Nhờ v&agrave;o điều kiện kh&iacute; hậu v&agrave; tự nhi&ecirc;n thuận lợi tạo tiền đề cho nho ph&aacute;t triển để cho ra những tr&aacute;i nho ngọt ng&agrave;o thơm phức g&oacute;p phần l&agrave;m n&ecirc;n hương vị của rượu vang.</p>\r\n\r\n<h2><strong>Đặc điểm hương vị của Rượu Champagne Bottega Gold</strong></h2>\r\n\r\n<p>Trong v&ograve;m miệng vang lan tỏa ra một thứ m&ugrave;i hương v&ocirc; c&ugrave;ng tinh tế. Hương vị ấy l&agrave; sự kết hợp một c&aacute;ch ho&agrave;n hảo bởi hương thơm của những tr&aacute;i c&acirc;y xanh như t&aacute;o xanh, như l&ecirc;, cam qu&yacute;t bưởi. Điểm xuyến với ch&uacute;ng c&ograve;n l&agrave; m&ugrave;i hương của một số lo&agrave;i hoa như hoa keo, hoa trắng v&agrave; một ch&uacute;t m&ugrave;i của l&aacute; x&ocirc; thơm ngọt ng&agrave;o&hellip;</p>\r\n\r\n<p>Khi thưởng thức chắc chắn bạn sẽ cảm thấy bị cho&aacute;ng ngợp trước hương vị của rượu đồng thời để lại một kết th&uacute;c l&acirc;u d&agrave;i v&agrave; bền chặt.</p>', '750', '11', 'Ý', NULL, 15, 22, 1, '2022-06-21 19:18:07', '2022-06-21 19:18:07'),
(54, 'RƯỢU VANG ĐỎ Ý PICCINI ORO COLLEZIONE CHIANTI', 'ruou-vang-do-y-piccini-oro-collezione-chianti', 470000, 30, 'hUjdr-022045-cRU.png', NULL, 'true', NULL, '<h3><strong>Đặc điểm hương vị của rượu vang Piccini Collezione Oro Chianti Riserva</strong></h3>\r\n\r\n<p>Được kết hợp giữa hai giống nho Sangiovese 90% v&agrave; Cabernet 10%, rượu vang mang kh&ocirc;ng chỉ c&oacute; hương vị đậm đ&agrave; kh&oacute; qu&ecirc;n m&agrave; c&ograve;n c&oacute; cấu tr&uacute;c bền bỉ tuyệt vời. M&agrave;u đỏ ruby m&atilde;nh liệt, quyến rũ trong l&ograve;ng chiếc ly thủy tinh. Hương thơm mạnh mẽ của rượu đến từ c&aacute;c loại hoa quả ch&iacute;n mọng, điểm xuyết hương vani, ngọt ng&agrave;o ở hương cuối.&nbsp; Trong v&ograve;m miệng, sự ấm &aacute;p, mượt m&agrave; của rượu lan tỏa.</p>\r\n\r\n<p>Cấu tr&uacute;c rượu phong ph&uacute; v&agrave; gi&agrave;u c&oacute;, vị ch&aacute;t tanin,tinh tế v&agrave; mềm mượt. Dư vị để lại l&acirc;u d&agrave;i v&agrave; g&acirc;y ấn tượng mạnh mẽ. Piccini Collezione Oro Chianti Riserva l&agrave; chất vang ngọt ng&agrave;o dễ đi v&agrave;o l&ograve;ng người. Rượu vang xứng đ&aacute;ng l&agrave; biểu tượng V&agrave;ng trong v&ugrave;ng đất Tuscany truyền thống.&nbsp;</p>\r\n\r\n<h3><strong>Hướng dẫn phục vụ m&oacute;n ăn c&ugrave;ng rượu vang Piccini Collezione</strong></h3>\r\n\r\n<p>Rượu vang c&oacute; nồng độ 13.5% dễ uống v&agrave; n&ecirc;n được ướp lạnh trước khi thưởng thức. Vang đỏ Piccini Collezione Oro Chianti Riserva ngon nhất khi ăn c&ugrave;ng c&aacute;c m&oacute;n thịt quay, thịt b&ograve;, m&igrave; ống c&oacute; sốt cay, ph&ocirc; mai hoặc c&aacute;c m&oacute;n thịt nướng b&eacute;o ngậy. Thưởng thức rượu vang ở nhiệt độ 15-18 độ C l&agrave; tuyệt nhất. Trước khi d&ugrave;ng n&ecirc;n r&oacute;t rượu v&agrave;o b&igrave;nh decanter để rượu tiếp x&uacute;c với kh&ocirc;ng kh&iacute;. Hương thơm v&agrave; m&ugrave;i vị của vang đỏ sẽ từ từ khơi dậy sau một thời gian trưởng th&agrave;nh l&acirc;u d&agrave;i trong chai.&nbsp;</p>\r\n\r\n<h2><strong>Quy tr&igrave;nh sản xuất rượu vang Piccini Collezione Oro Chianti Riserva</strong></h2>\r\n\r\n<p>Những tr&aacute;i nho Sangiovese v&agrave; Cabernet chất lượng được chọn lọc trong qu&aacute; tr&igrave;nh thu hoạch để sản xuất vang đỏ. Khi nho đạt độ ch&iacute;n đủ tầm sẽ được &eacute;p mềm, trộn v&agrave; ủ ri&ecirc;ng theo giống nho với nhiệt kiểm so&aacute;t. Qu&aacute; tr&igrave;nh l&ecirc;n men ho&agrave;n th&agrave;nh sau đ&oacute; ng&acirc;m ủ khoảng 9 th&aacute;ng trong th&ugrave;ng gỗ sồi. Sau khi c&ocirc;ng đoạn kết th&uacute;c n&ecirc;n ủ trong chai trước được ph&aacute;t h&agrave;nh ra thị trường.</p>', '750', '14', 'Ý', NULL, 16, 25, 1, '2022-06-21 19:20:45', '2022-06-21 19:20:45');
INSERT INTO `products` (`id`, `name`, `slug`, `price`, `quantity`, `image`, `hot`, `status`, `ordinal`, `description`, `capacity`, `concentration`, `country`, `area`, `brand_id`, `category_id`, `user_id`, `created_at`, `updated_at`) VALUES
(55, 'RƯỢU CHAMPAGNE CHARLES DE CAZANOVE ROSE', 'ruou-champagne-charles-de-cazanove-rose', 1290000, 50, 'UOX1M-022240-z8I.jpg', NULL, 'true', NULL, '<p>Rượu vang l&agrave; loại champagne đặc biệt với m&agrave;u hồng phấn nhẹ nh&agrave;ng v&agrave; kh&aacute; trong suốt, ẩn trong chất vang mềm mịn v&agrave; mỏng manh như tấm gọt ch&igrave;, rượu lại sở hữu những hương thơm v&agrave; dư vị bứt ph&aacute; với vị ngọt đậm đ&agrave; c&ugrave;ng với một vị chua nổi bật v&ocirc; c&ugrave;ng tuyệt vời. Vị ngọt của rượu đến từ hương men ch&iacute;n muồi của hai giống nho Pinot Noir v&agrave; Chardonnay kết hợp với mật ong, vani v&agrave; hạt nướng. B&ecirc;n cạnh đ&oacute;, vị chua c&acirc;n bằng lu&ocirc;n hiện diện song song v&agrave; kết hợp với vị ngọt ho&agrave;n hảo đ&oacute; ch&iacute;nh l&agrave; h&agrave;m lượng axit tự nhi&ecirc;n trong c&aacute;c loại quả, m&ugrave;i chua nhiệt đới của đất, của da thuộc v&agrave; c&aacute;c loại hương hoa thảo mộc kh&aacute;c.</p>\r\n\r\n<p>Rượu c&oacute; vị đầu v&ocirc; c&ugrave;ng r&otilde; rệt với tannin ch&iacute;n vừa, vị cuối ấn tượng với hương gỗ Sồi ng&acirc;y ngất c&ugrave;ng một ch&uacute;t dấu vết cay cay k&iacute;ch th&iacute;ch của hạt ti&ecirc;u trắng v&agrave; thuốc l&aacute;. Rượu vang c&oacute; một cơ thể c&acirc;n đối v&agrave; chắc chắn, từng giọt rượu đan kết một nhau v&ocirc; c&ugrave;ng mềm mượt v&agrave; linh hoạt, khi thưởng thức rượu sẽ t&aacute;c động v&ocirc; c&ugrave;ng mạnh mẽ v&agrave; tạo n&ecirc;n một hiệu ứng v&ocirc; c&ugrave;ng đặc biệt trong v&ograve;m họng.</p>\r\n\r\n<p>Chai rượu vang n&agrave;y c&oacute; thiết kế v&ocirc; c&ugrave;ng thanh lịch v&agrave; sang trọng, rất th&iacute;ch hợp khi được mở m&agrave;n cho những dịp đặc biệt trong năm. Với hương vị nồng n&agrave;n v&agrave; tr&ograve;n đầy, rượu rất ph&ugrave; hợp khi d&ugrave;ng k&egrave;m với c&aacute;c m&oacute;n ăn gi&agrave;u m&ugrave;i vị như hải sản, thịt gia cầm v&agrave; thịt nguội, hay c&aacute;c m&oacute;n ăn chay từ nấm, rau củ v&agrave; tr&aacute;i c&acirc;y,&hellip;</p>', '750', '12', 'Pháp', NULL, 17, 24, 1, '2022-06-21 19:22:40', '2022-06-21 19:22:40'),
(56, 'RƯỢU VANG BỊCH PHÁP THALASSA BORDEAUX ROUGE 5L', 'ruou-vang-bich-phap-thalassa-bordeaux-rouge-5l', 700000, 20, '5l3Ti-022410-hOe.png', NULL, 'true', NULL, NULL, '5000', NULL, NULL, NULL, 19, 26, 1, '2022-06-21 19:24:10', '2022-06-21 19:26:26'),
(57, 'RƯỢU VANG BỊCH ĐỎ PHÁP LOUIS ESCHENAUER CABERNET SAUVIGNON 5L', 'ruou-vang-bich-do-phap-louis-eschenauer-cabernet-sauvignon-5l', 645000, 30, 'YsDYl-022613-K3E.png', NULL, 'true', NULL, '<p>Ph&acirc;n loại: Vang đỏ</p>\r\n\r\n<p>&ndash; Dung t&iacute;ch: 5L</p>\r\n\r\n<p>&ndash; Giống nho: Cabernet Sauvignon</p>\r\n\r\n<p>&ndash; Nồng độ: 13%vol</p>\r\n\r\n<p>&ndash; V&ugrave;ng sản xuất: Pay d&rsquo;oc&nbsp;&ndash; Ph&aacute;p</p>\r\n\r\n<p>&ndash; Cấp độ: Varieties</p>\r\n\r\n<p>&ndash; H&atilde;ng sản xuất: Louis Eschenauer</p>\r\n\r\n<p><strong>Vang Bịch Louis Eschenauer</strong>&nbsp;l&agrave; loại rượu vang đ&oacute;ng bịch được sản xuất tại Bordeaux Ph&aacute;p &ndash;&nbsp; nơi&nbsp; vốn nổi tiếng tr&ecirc;n to&agrave;n thế giới với những sản phẩm rượu vang ngon nhất. Đương nhi&ecirc;n, hương vị của loại rượu l&agrave;m từ giống nho Cabernet Sauvignon cũng được c&aacute;c chuy&ecirc;n gia về rượu đ&aacute;nh gi&aacute; rất cao</p>\r\n\r\n<p><strong>Vang bịch Louis Eschenauer&nbsp;</strong>l&agrave; rượu vang được ng&acirc;m ủ cẩn thận, theo c&aacute;ch truyền thống của v&ugrave;ng Bordeaux. Việc đ&oacute;ng g&oacute;i bằng bịch t&uacute;i giấy gi&uacute;p giảm chi ph&iacute; đ&aacute;ng kể, khiến kh&aacute;ch h&agrave;ng vừa c&oacute; thể thưởng thức rượu vang chất lượng với gi&aacute; th&agrave;nh v&ocirc; c&ugrave;ng hợp l&yacute;.</p>\r\n\r\n<p>Hượng vị của Louis Eschenauer l&agrave; sự kết hợp tuyệt vời của Quả đỏ , Mứt đỏ , quả L&yacute; chua, nho tươi&nbsp; vị vang hơi ngọt v&agrave; ch&aacute;t mềm mại.</p>\r\n\r\n<p><strong>Vang bịch Louis Eschenauer</strong>&nbsp;l&agrave; một loại rượu vang uống h&agrave;ng ng&agrave;y, được sử dụng trong mọi bữa ăn. Louis Eschenauer&nbsp; nổi danh với chất lượng thơm ngon, hương vị của loại rượu n&agrave;y đ&atilde; thực sự ghi dấu ấn trong l&ograve;ng người ti&ecirc;u d&ugrave;ng.</p>', '5000', '13', 'Pháp', 'Pay d’oc', 18, 26, 1, '2022-06-21 19:26:13', '2022-06-21 19:26:13'),
(58, 'RƯỢU VODKA BELUGA NOBLE RUSSIAN', 'ruou-vodka-beluga-noble-russian', 380000, 30, 'dNqUr-022915-F7t.png', NULL, 'true', NULL, '<p>Beluga Noble Russian Vodka, l&agrave; một thương hiệu Vodka cao cấp của Nga</p>\r\n\r\n<p>M&ugrave;i :&nbsp;Nhẹ nh&agrave;ng , Sang trọng , Bổ xung Hương của Thảo mộc hoang d&atilde;</p>\r\n\r\n<p>Vị :&nbsp;C&acirc;n bằng , Đầy đủ , S&agrave;nh điệu v&agrave; đậm đ&agrave;</p>\r\n\r\n<p>Dư vị :&nbsp;S&acirc;u đậm v&agrave; Dễ chịu</p>\r\n\r\n<p>Trong qu&aacute; tr&igrave;nh sản xuất Vodka Beluga chỉ sử dụng đ&agrave;i phun nước sạch lấy từ nguồn nước chon lựa ở Siberian dưới s&acirc;u 300m &ndash; Đ&oacute; l&agrave; th&agrave;nh phần quan trọng ảnh hưởng đến hương vị nhẹ nh&agrave;ng v&agrave; c&acirc;n bằng của sản phẩm. Để c&oacute; được nước sạch kết tinh, nước phải được lọc qua thiết bị lọc bằng c&aacute;t Dioxit Silic v&agrave; lưới lọc Ion Bạc.</p>\r\n\r\n<p>Một trong những th&agrave;nh phần quan trọng nhất của&nbsp; l&agrave; Mạch nha được sản xuất từ v&ugrave;ng sinh th&aacute;i tự nhi&ecirc;n miền đ&ocirc;ng Siberian kh&ocirc;ng c&oacute; h&oacute;a chất nh&acirc;n tạo như những quy tr&igrave;nh l&ecirc;n men ngũ cốc th&ocirc;ng thường . Những hạt ngũ cốc được lựa chọn kỹ c&agrave;ng sẽ trải qua qu&aacute; tr&igrave;nh l&ecirc;n men tự nhi&ecirc;n ( Kh&ocirc;ng c&oacute; t&aacute;c động nh&acirc;n tạo ) tạo n&ecirc;n một loại nguy&ecirc;n liệu đầu v&agrave;o c&oacute; chất lượng tốt nhấ</p>\r\n\r\n<p>Rất th&iacute;ch hợp sử dụng trong những bữa tiệc sang trọng , hoặc l&agrave;m qu&agrave; biếu cho bạn b&egrave; , người th&acirc;n v&agrave; đối t&aacute;c l&agrave;m ăn.</p>', '375', '40', 'Nga', NULL, 2, 51, 1, '2022-06-21 19:29:15', '2022-06-21 19:29:15'),
(59, 'DANZKA VODKA APPLE 1L (TÁO)', 'danzka-vodka-apple-1l-tao', 360000, 20, 'HdQ9n-023206-Fzw.png', NULL, 'true', NULL, '<p>Rượu Vodka Danzka Apple &ndash; T&aacute;o Xanh l&agrave; loại vodka nổi bật với hương tr&aacute;i c&acirc;y v&agrave; tươi mới đến từ hương vị t&aacute;o xanh .C&aacute;c th&agrave;nh phần l&agrave;m n&ecirc;n rượu Vodka Danzka Apple ho&agrave;n to&agrave;n 100% tự nhi&ecirc;n kết quả l&agrave; một loại rượu chất lượng cao về hương vị. Rượu Vodka Danzka Apple l&agrave; một loại rượu th&iacute;ch hợp l&agrave;m nền cho c&aacute;c loại Cocktail tuyệt vời.</p>\r\n\r\n<p>Rượu vodka Danzka với thiết kế nh&ocirc;m nguy&ecirc;n khối sang trọng v&agrave; hiện đại th&iacute;ch hợp cho nhiều mục đ&iacute;ch sử dụng , rượu Vodka Danzka đ&atilde; gần như phổ biến trong mọi bữa tiệc của bạn b&egrave; v&agrave; cơ quan tại Việt Nam trong nhiều năm , tuy vậy trong một thời gian do c&oacute; qu&aacute; nhiều thương hiệu rượu Vodka v&agrave;o thị trường Việt Nam n&ecirc;n n&oacute; hơi bị tr&ugrave;ng xuống.</p>\r\n\r\n<p>Ph&ugrave; hợp với: Sử dụng trực tiếp trong bữa ăn gia đ&igrave;nh hoặc c&aacute;c bữa tiệc với bạn b&egrave; v&agrave; đồng nghiệp</p>', '1000', '40', 'Đan Mạch', NULL, 20, 52, 1, '2022-06-21 19:32:06', '2022-06-21 19:32:06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'user', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `email_verified_at`, `password`, `slug`, `remember_token`, `created_at`, `updated_at`, `role_id`) VALUES
(1, 'Minh', 'admin@gmail.com', '0123456789', NULL, '$2a$12$x3I0q6ckOpaPw3Wt2iz41ePUTpmaS.6wOAOiwIdtvAqLAM1wxcuzi', 'admin@gmail.com', NULL, NULL, '2022-05-15 09:46:50', 1),
(2, 'test', 'phuongnv@2nf.com.vn', '0123154564', NULL, '$2y$10$DR.GKanfGg3dmY9RKqSQo.9dFPha/CfTGtDpnXPDXp4QZ6V7TBBxC', 'phuongnv@2nf.com.vn', NULL, '2022-04-11 02:30:53', '2022-05-15 09:45:50', 2),
(4, 'Minh1', 'business@miichisoft.net', '01231545641', NULL, '$2y$10$I5Zzdl4X/pH0MPyMIGQN6eoIYZvy4YRxoeirWCc329y4jsDrUXO6O', 'business@miichisoft.net', NULL, '2022-04-11 07:02:44', '2022-04-11 07:47:10', 1),
(5, 'minh12334', '1123123@gmail.com', '123456789', NULL, '$2y$10$aX6KQKdpyJaFAHZBJdHJZeyHej.KmXKSKT450..Bx2fSsYCj4iy0q', '1123123@gmail.com', NULL, '2022-05-07 10:11:12', '2022-06-13 08:42:35', 2),
(12, 'Nguyen Nhat Minh', 'nhatminhnguyen3108@gmail.com', '', NULL, '$2y$10$w4doawEAvE/XSSmJcmaFp.ri8TP1qpOEA6uwzNjH4psKd86TVzHIC', 'nhatminhnguyen3108@gmail.com', NULL, '2022-05-24 13:20:18', '2022-05-24 13:20:18', 2),
(13, 'Lê Minh Quân', 'quan@gmail.com', '', NULL, '$2y$10$RXbAm2oq5EX3dijdnYbrcu0X2Eo136FS7G47tqLY8q235rsnEd3fy', 'quan-at-gmailcom', NULL, '2022-06-04 10:14:43', '2022-06-04 10:14:43', 2),
(15, 'Nguyễn Văn A', 'lala123@gmail.com', '', NULL, '$2y$10$yDUlMssuXp8bTX39bHQXiOVFQ70enrAIlaB6bOxCocC.De9hLAKyS', 'lala123-at-gmailcom', NULL, '2022-06-16 17:39:22', '2022-06-16 17:39:22', 2),
(16, 'xampp', 'xampp@gmail.com', '0123456789', NULL, '$2y$10$7CCZIdhb9X1pubE3QA849OM.x2fw3/mqdB10FFJ90XyOf/DLSMr3G', 'xampp@gmail.com', NULL, '2022-06-17 04:06:41', '2022-06-17 04:06:41', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addresses_order_id_foreign` (`order_id`);

--
-- Chỉ mục cho bảng `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_name_unique` (`name`),
  ADD KEY `brands_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`),
  ADD KEY `categories_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_processer_id_foreign` (`processer_id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_order_id_foreign` (`order_id`),
  ADD KEY `order_details_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_name_unique` (`name`),
  ADD KEY `products_brand_id_foreign` (`brand_id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `brands`
--
ALTER TABLE `brands`
  ADD CONSTRAINT `brands_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `categories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_processer_id_foreign` FOREIGN KEY (`processer_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `order_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
