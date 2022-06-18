-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 03, 2022 lúc 08:41 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.4.27

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
-- Cấu trúc bảng cho bảng `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(2, 'Beluga', NULL, 'beluga', 'epOSy-103030-X0z.webp', 'Rượu mạnh', 'true', NULL, 1, '2022-05-02 02:57:02', '2022-05-02 03:30:30'),
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
(20, 'Penfolds', NULL, 'penfolds', 'yJRw6-123445-40E.webp', 'Rượu vang', 'true', NULL, 1, '2022-05-02 05:34:45', '2022-05-02 05:34:45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(102, 'Bia Mỹ', 'bia-my', NULL, 'true', NULL, 11, 1, '2022-05-02 09:54:44', '2022-05-02 09:54:44');

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
(20, '2022_05_02_071432_add_icon_in_brands_table', 9);

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
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL DEFAULT 0,
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

INSERT INTO `products` (`id`, `name`, `slug`, `price`, `image`, `hot`, `status`, `ordinal`, `description`, `capacity`, `concentration`, `country`, `area`, `brand_id`, `category_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Khay quà tết k0048', 'khay-qua-tet-k0048', 1140000, 'lXVK4-060634-W0F.jpg', NULL, 'true', NULL, NULL, '', NULL, NULL, NULL, NULL, 13, 1, '2022-05-02 10:42:39', '2022-05-02 11:17:36'),
(2, 'KHAY QUÀ TẾT K0050', 'khay-qua-tet-k0050', 890000, 'dqjdx-061434-Dxa.jpg', NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13, 1, '2022-05-02 11:14:34', '2022-05-02 12:44:35'),
(3, 'KHAY QUÀ TẾT K0049', 'khay-qua-tet-k0049', 890000, 'NTy9U-061621-XmK.jpg', NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13, 1, '2022-05-02 11:16:21', '2022-05-02 11:17:04'),
(4, 'KHAY QUÀ TẾT K0047', 'khay-qua-tet-k0047', 820000, '3Ceec-061902-mtg.jpg', NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13, 1, '2022-05-02 11:19:02', '2022-05-02 11:29:02'),
(5, 'KHAY QUÀ TẾT K0046', 'khay-qua-tet-k0046', 990000, 'xR4VN-061921-vy1.jpg', NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13, 1, '2022-05-02 11:19:21', '2022-05-02 11:28:55'),
(6, 'KHAY QUÀ TẾT K0045', 'khay-qua-tet-k0045', 930000, 'enlok-062813-4vY.jpg', NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13, 1, '2022-05-02 11:28:13', '2022-05-02 11:28:46'),
(7, 'KHAY QUÀ TẾT K0042', 'khay-qua-tet-k0042', 810000, 'iuvsl-063108-lUm.jpg', NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13, 1, '2022-05-02 11:31:08', '2022-05-02 11:31:08'),
(8, 'KHAY QUÀ TẾT K0041', 'khay-qua-tet-k0041', 1110000, 'pARXd-063131-gtz.jpg', NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13, 1, '2022-05-02 11:31:31', '2022-05-02 11:31:31'),
(9, 'KHAY QUÀ TẾT K0039', 'khay-qua-tet-k0039', 1040000, 'GeUfA-063150-Up7.jpg', NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13, 1, '2022-05-02 11:31:50', '2022-05-02 11:31:50'),
(10, 'KHAY QUÀ TẾT K0038', 'khay-qua-tet-k0038', 950000, 'ELVWe-063214-1BJ.jpg', NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13, 1, '2022-05-02 11:32:14', '2022-05-02 11:32:14'),
(11, 'KHAY QUÀ TẾT K0036', 'khay-qua-tet-k0036', 920000, 'm3D4R-063238-Epm.jpg', NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13, 1, '2022-05-02 11:32:38', '2022-05-02 11:33:46'),
(12, 'KHAY QUÀ TẾT K0035', 'khay-qua-tet-k0035', 920000, 'fltoh-063254-vmX.jpg', NULL, 'true', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13, 1, '2022-05-02 11:32:54', '2022-05-02 11:32:54'),
(13, 'Rượu Vang Freixenet Italian Rose Spalking Wine', 'ruou-vang-freixenet-italian-rose-spalking-wine', 650000, 'LNgHi-115635-dVE.webp', NULL, 'true', NULL, 'Thừa hưởng những n&ecirc;̀n kỹ thu&acirc;̣t ti&ecirc;n ti&ecirc;́n hi&ecirc;̣n đại dựa tr&ecirc;n n&ecirc;̀n tảng c&ocirc;̉ đi&ecirc;̉n với lịch sử l&acirc;u đời, chai vang h&ocirc;̀ng sủi này mang m&ocirc;̣t phong cách cá tính, đặc sắc trong hương vị. Khởi đ&acirc;̀u cho rượu hương thơm tươi mát của trái c&acirc;y chín mọng màu đỏ như m&acirc;̣n, đào, cherry và d&acirc;u t&acirc;y. K&ecirc;́t thúc rượu lại là hương thơm của hương hoa trắng v&agrave; t&aacute;o đầy tinh tế. Ngoài ra với những sủi bọt nhẹ nhàng v&ocirc; cùng đẹp mắt đ&ocirc;̀ng thời cũng mang đ&ecirc;́n sự kích thích cho vị giác của người sử dụng. Vị ngọt của rượu thay đổi từ từ cho đ&ecirc;́n khi c&acirc;n bằng với đ&ocirc;̣ chua giòn. Đó là sự k&ecirc;́t hợp của trái c&acirc;y phong phú cùng axit tự nhi&ecirc;n dày dặn.', '750', '11', 'Ý', 'Veneto', 2, 24, 1, '2022-05-03 04:56:35', '2022-05-03 04:56:35'),
(14, 'RƯỢU GIN BEEFEATER', 'ruou-gin-beefeater', 350000, 'cvHGt-025633-p4l.webp', 1, 'true', NULL, '<p>Rượu Gin Beefeater l&agrave; một loại rượu Gin h&agrave;ng đầu thế giới được ph&aacute;t triển bởi James Burrough v&agrave;o năm 1820, nh&agrave; m&aacute;y đầu ti&ecirc;n tại th&agrave;nh phố Chelsea, thủ đ&ocirc; London của Anh Quốc l&agrave; khai sinh v&agrave; cũng đ&oacute;ng vai tr&ograve; rất lớn đối với rượu Gin n&oacute;i chung v&agrave; d&ograve;ng London Dry Gin n&oacute;i ri&ecirc;ng. V&agrave; rượu Gin Beefeater l&agrave; một thương hiệu đ&atilde; đồng h&agrave;nh từ buổi b&igrave;nh minh lịch sử ph&aacute;t triển của rượu Gin cho đến h&ocirc;m nay.</p>\r\n\r\n<p>Nếu nhắc đến rượu Gin th&igrave; Rượu Beefeater mang t&iacute;nh biểu tượng rượu mạnh của Anh Quốc .C&oacute; đến 9 loại thảo mộc kh&aacute;c nhau d&ugrave;ng để sản xuất rượu bao gồm tr&aacute;i c&acirc;y, gia vị vỏ cam, những nguy&ecirc;n liệu n&agrave;y được ng&acirc;m 24h trước khi chưng cất v&agrave; tiếp đến l&agrave; qu&aacute; tr&igrave;nh chưng cất mất 8h để ho&agrave;n th&agrave;nh . Rượu London Dry Gin Beefeater mang m&ugrave;i hương rất độc đ&aacute;o &ndash; m&ugrave;i hương đặc trưng của bất kỳ chai London Dry Gin n&agrave;o, đ&oacute; l&agrave; m&ugrave;i quả B&aacute;ch X&ugrave;. N&oacute; c&ograve;n c&oacute; m&ugrave;i của Cam Qu&yacute;t, Cam Thảo, Hạnh Nh&acirc;n, rễ c&acirc;y Bạnh Chỉ, hạt Rau M&ugrave;i, hạt c&acirc;y Bạnh Chỉ v&agrave; rễ c&acirc;y Orris&hellip;sẽ tổng h&ograve;a th&agrave;nh nhiều tầng hương kh&aacute;c nhau đầy m&ecirc; hoặc.</p>\r\n\r\n<p>M&ugrave;i: hương thơm nồng n&agrave;n của tr&aacute;i c&acirc;y, cam thảo, rau m&ugrave;i, tho&aacute;ng hương c&acirc;y b&aacute;ch x&ugrave; v&agrave; nước kho&aacute;ng.</p>\r\n\r\n<p>Vị: hương vị ngọt ng&agrave;o đặc trưng của cam Seville, cam thảo, hạnh nh&acirc;n, vỏ chanh, c&acirc;y b&aacute;ch x&ugrave; dại v&agrave; rau m&ugrave;i. Dư vị nhẹ nh&agrave;ng, d&agrave;i l&acirc;u.</p>\r\n\r\n<p>Rượu được đ&oacute;ng chai v&agrave; ph&acirc;n phối chủ yếu tại Anh bởi c&ocirc;ng ty James Burrough. Beefeater đ&atilde; đạt Huy chương v&agrave;ng tại cuộc thi International Wine and Spirits Competition năm 2000.</p>', '750', '40', 'Anh', 'London', 1, 74, 1, '2022-05-03 07:55:22', '2022-05-03 08:32:26'),
(15, 'RƯỢU SINGLE MALT WHISKY AULTMORE 18 NĂM', 'ruou-single-malt-whisky-aultmore-18-nam', 1900000, '6vG4l-031549-Xf2.png', 1, 'true', NULL, '<p>Aultmore Single Malt Whisky 18 năm tuổi được ra mắt v&agrave;o năm 2015 được phối trộn hai loại th&ugrave;ng ủ l&agrave; Bourbon v&agrave; Sherry. N&oacute; đ&atilde; d&agrave;nh được Huy chương Bạc trong cuộc thi rượu Quốc tế d&agrave;nh cho rượu Whisky v&ugrave;ng Speyside năm 2017</p>\r\n\r\n<p>Aultmore 18 năm tuổi n&agrave;y l&agrave; một biến thể mới của sự cổ điển kết hợp với hương bạc h&agrave; tươi hiện đại c&ugrave;ng sự đầy đặn của hạnh nh&acirc;n ngọt ng&agrave;o, một kết th&uacute;c c&aacute; t&iacute;nh với chocolate đen. Mịn m&agrave;ng v&agrave; tr&ograve;n đầy &ndash; thực sự bạn sẽ bất ngờ với những tầng hương của t&aacute;o, l&ecirc; v&agrave; chuối, k&egrave;m th&ecirc;m ch&uacute;t gia vị trong một kết dư vị đ&aacute;ng nhớ.</p>\r\n\r\n<p>Aultmore 18 năm tuổi&nbsp;cho người nếm một cảm gi&aacute;c ngon miệng v&agrave; một loạt c&aacute;c hương vị đơn giản nhưng rất hiệu quả.&nbsp;N&oacute; biểu thị cho phong c&aacute;ch Speyside kh&aacute; nhẹ nh&agrave;ng &ndash; đối với những người th&iacute;ch sự mạnh mẽ th&igrave; c&oacute; thể thấy một cảm gi&aacute;c buồn tẻ đối. Nhưng đối với những người kiểu y&ecirc;u th&iacute;ch những bộ phim t&igrave;nh cảm nhẹ nh&agrave;ng th&igrave; đ&iacute;ch thị n&oacute; sẽ l&agrave;m bạn h&agrave;i l&ograve;ng theo một phong c&aacute;ch n&agrave;o đ&oacute;.</p>', '700', '46', 'Scotland', 'Speyside', 1, 31, 1, '2022-05-03 08:15:49', '2022-05-03 08:33:18'),
(16, 'RƯỢU TALISKER 10 NĂM', 'ruou-talisker-10-nam', 1150000, 'HpCJC-031728-WDb.png', 1, 'true', NULL, '<p>Rượu Talisker 10 năm, đ&acirc;y l&agrave; d&ograve;ng Single malt được l&agrave;m tại Isle of Skye, nơi nh&agrave; m&aacute;y chưng cất n&agrave;y đ&atilde; l&agrave;m n&ecirc;n d&ograve;ng mạch nha đơn cất huyền thoại, đoạt nhiều giải thưởng danh gi&aacute; .10 năm của họ cũ c&oacute; than b&ugrave;n mạnh mẽ v&agrave; mũi muối biển; ngọt ng&agrave;o kh&oacute;i với hương vị mạch nha v&agrave; ph&aacute;t triển sự ấm &aacute;p với những nước lớn, kết th&uacute;c cay. Một trong s&aacute;u loại mạch nha cổ điển của Scotland,&nbsp;Whisky&nbsp;n&agrave;y l&agrave; tốt nhất th&iacute;ch gọn g&agrave;ng hoặc với một dấu gạch ngang nhỏ nước.</p>\r\n\r\n<p>Chai rượu c&oacute; m&ugrave;i hương mạnh mẽ của kh&oacute;i than b&ugrave;n kết hợp m&ugrave;i mặn m&ograve;i của biển cả, m&ugrave;i của cam qu&yacute;t, h&agrave;u tươi. Rượu c&oacute; vị ngọt của tr&aacute;i c&acirc;y sấy kh&ocirc; phong ph&uacute; với những đ&aacute;m m&acirc;y kh&oacute;i than b&ugrave;n v&agrave; hương vị l&uacute;a mạch mạnh mẽ, ấm &aacute;p. Hậu vị l&agrave; sự b&ugrave;ng nổ của hạt ti&ecirc;u, ấm, ngọt, k&eacute;o d&agrave;i.</p>\r\n\r\n<p>Mũi: cay v&agrave; đất với một vị ngọt ẩn b&iacute; ẩn trong nền. D&agrave;y đặc kh&oacute;i.<br />\r\nVị:đặc biệt l&agrave; hạt ti&ecirc;u ghi ch&uacute; đơn vị n&agrave;y nổi tiếng l&agrave; cả hai ti&ecirc;u nứt v&agrave; hạt ti&ecirc;u trắng. Một vị ngọt tr&aacute;i c&acirc;y h&oacute;a nhiều hơn một ch&uacute;t b&acirc;y giờ, v&agrave; th&ecirc;m những ghi ch&uacute; thịt.<br />\r\nKết th&uacute;c: Spicey v&agrave; sống động, v&agrave; d&agrave;i v&agrave; ngon. &Aacute;o kho&aacute;c miệng với một combo ngọt v&agrave; gia vị dầu. Một đ&ecirc;m chung kết than b&ugrave;n. Sau một v&agrave;i gi&acirc;y, bạn sẽ thề bạn đ&atilde; chỉ cần c&oacute; một Islay cổ điển peated.</p>\r\n\r\n<p>Chai Talisker 10 năm danh tiếng lẫy lừng, li&ecirc;n tiếp đạt được h&agrave;ng loạt giải thưởng lớn tại c&aacute;c event uy t&iacute;n nhất, lớn nhất về rượu whisky khắp năm ch&acirc;u, l&agrave; chai kh&ocirc;ng thể thiếu trong tủ rượu của những người y&ecirc;u th&iacute;ch Scotch Whisky.</p>', '700', '45', 'Scotland', 'Island', NULL, 12, 1, '2022-05-03 08:17:28', '2022-05-03 08:34:42'),
(17, 'RƯỢU WHISKY KHÓI LAGAVULIN 16 NĂM', 'ruou-whisky-khoi-lagavulin-16-nam', 1800000, '5Mzob-032044-jKk.png', 1, 'true', NULL, '<p>Rượu Martini Rosso:&nbsp;được tạo ra từ hỗn hợp của 1 nh&oacute;m gia vị tuyển chọn c&ugrave;ng với nguồn nước v&ugrave;ng Monviso, pha trộn với nhiều loại rượu ngon. C&oacute; vị ngọt dịu thảo mộc, vị chua, tạo sự kh&aacute;c biệt trong hương vị. D&ugrave;ng l&agrave;m Cocktail hoặc th&ecirc;m hương vị cho 1 loại c&ocirc;ng thức chế biến m&oacute;n ăn.</p>\r\n\r\n<p>Rượu Martini Rosso&nbsp;đ&oacute; ch&iacute;nh l&agrave; nguy&ecirc;n bản của rượu Martini, khi m&agrave; Luigi Rossi c&aacute;c loại thực vật địa phương để tạo ra một hỗn hợp mang mang t&ecirc;n&nbsp;Vermouth&nbsp;đỏ tươi, v&agrave; anh ta đ&atilde; tạo ra một biểu tượng kh&ocirc;ng thể chối c&atilde;i. Trong khi ch&iacute;nh x&aacute;c c&ocirc;ng thức n&agrave;y vẫn l&agrave; một b&iacute; mật được giấu k&iacute;n v&agrave; đ&acirc;y l&agrave; loại Vermouth ngọt ng&agrave;o mang đặc t&iacute;nh của thảo dược l&agrave; kết quả của việc phối trộn cẩn thận c&aacute;c loại rượu vang với hỗn hợp được chọn lựa thảo dược của &Yacute; v&agrave; n&oacute; bao gồm c&acirc;y x&ocirc; thơm, rau h&uacute;ng, c&acirc;y bạch tiễn v&agrave; ch&uacute;t ngọt đắng của gỗ ngoại lai.</p>\r\n\r\n<p>Nguy&ecirc;n gốc, Martini l&agrave; một loại cocktail l&agrave;m từ hai th&agrave;nh phần: rượu gin của Anh v&agrave; d&ograve;ng rượu khai vị dry vermouth (ti&ecirc;u biểu nhất l&agrave; rượu&nbsp;MARTINI DRY&nbsp;của &Yacute;). Sau nhiều năm, c&aacute;i t&ecirc;n Martini đ&atilde; trở th&agrave;nh một biểu tượng, được nhiều người biết đến với danh hiệu &ldquo;Vua của c&aacute;c loại cocktail&rdquo;.</p>\r\n\r\n<p>Rượu Martini Rosso&nbsp;l&agrave; sự lựa chọn kh&ocirc;ng thể thiếu để cho ra những ly Cocktail tuyệt hảo của nh&agrave; h&agrave;ng hoặc kh&aacute;ch sạn hoặc gi&uacute;p bạn c&oacute; thể tạo ra những ly cocktail tuyệt hảo để thưởng thức trong bữa ăn của gia đ&igrave;nh bạn</p>', NULL, NULL, NULL, NULL, 5, 78, 1, '2022-05-03 08:20:44', '2022-05-03 08:36:29'),
(18, 'RƯỢU WHISKY SINGLE MALT SEXTON', 'ruou-whisky-single-malt-sexton', 820000, 'dm8Qs-032555-Vtn.png', 1, 'true', NULL, '<p>Rượu Sexton Single Malt l&agrave; một sự s&aacute;ng tạo mang đậm t&iacute;nh đổi mới v&agrave; c&acirc;n bằng tuyệt hảo của rượu mạch nha đơn cất. Rượu Sexton Single Malt chắc chắn sẽ để lại ấn tượng kh&oacute; qu&ecirc;n đối với những ai tr&oacute;t thử một lần.&nbsp;Được s&aacute;ng tạo từ bậc thầy trong ng&agrave;nh c&ocirc;ng nghiệp sản xuất rượu Alex Thomas.&nbsp;Sexton&trade; được l&agrave;m từ 100% tư hạt mạch nha Ailen v&agrave; được chưng cất ba lần để c&oacute; độ mịn tuyệt vời. Sau đ&oacute; được ủ tiếp tục&nbsp;trong c&aacute;c th&ugrave;ng sherry Oloroso c&oacute; nguồn gốc từ Jerez de la Frontera, T&acirc;y Ban Nha. Rượu Sexton Single Malt Hương thơm phong ph&uacute; của c&aacute;c loại hạt, b&aacute;nh hạnh nh&acirc;n v&agrave; s&ocirc; c&ocirc; la đen với một ch&uacute;t gia vị. Vị tr&aacute;i c&acirc;y sấy kh&ocirc;, vị ngọt của tổ ong, quả mơ, vỏ chanh, mận v&agrave; gia vị sồi. Kết th&uacute;c m&ugrave;i gỗ với vị ngọt mật ong dịu &ecirc;m.</p>\r\n\r\n<p><img alt=\"\" src=\"https://ruouthuonghieu.com/wp-content/uploads/2020/05/sexton_banner_900x@2x-768x288.jpg\" style=\"height:528px; width:1402px\" /></p>', '700', '40', 'Iceland', NULL, 3, 33, 1, '2022-05-03 08:23:14', '2022-05-03 08:40:05'),
(19, 'RƯỢU VANG ĐỎ ÚC PENFOLDS BIN 389 CABERNET SHIRAZ', 'ruou-vang-do-uc-penfolds-bin-389-cabernet-shiraz', 2000000, 'Yw1nv-060453-a3m.png', NULL, 'true', NULL, '<strong>Rượu vang Penfolds Bin 389</strong>&nbsp;l&agrave; một sản phẩm chủ đạo cao cấp của nh&agrave; Penfolds, l&agrave; biểu hiện tinh t&uacute;y của phong c&aacute;ch rượu vang Penfolds đỏ. Chai vang được sản xuất lần đầu ti&ecirc;n v&agrave;o năm 1960 bới huyền thoại Max Schubert, bởi thế ch&uacute;ng được mệnh danh l&agrave; &ldquo;Người ngh&egrave;o Man&rsquo;s Grange&rdquo; hoặc &ldquo;Baby Grange&rdquo; v&igrave; rượu được ng&acirc;m ủ trong c&ugrave;ng một loại th&ugrave;ng chứa loại rượu Grange cao cấp v&agrave; cổ điển. V&agrave; l&agrave; một trong những loại rượu vang đỏ tuyệt vời của &Uacute;c. Đ&acirc;y l&agrave; loại rượu đ&atilde; tạo n&ecirc;n danh tiếng cho h&atilde;ng sản xuất rượu vang Penfolds. Đ&acirc;y l&agrave; chai vang đỏ đặc biệt bằng c&aacute;ch kết hợp cấu tr&uacute;c của nho Cabernet Sauvignon v&agrave; sự phong ph&uacute; của nho Syrah. Rượu thể hiện sự c&acirc;n bằng hợp l&yacute; giữa m&ugrave;i vị của tr&aacute;i c&acirc;y v&agrave; hương của gỗ sồi.', '750', '14', 'Úc', 'Generic', 4, 19, 1, '2022-05-03 11:04:53', '2022-05-03 11:05:03'),
(20, 'RƯỢU VANG ĐỎ CHILE MONTES ALPHA SPECIAL CUVEE CABERNET', 'ruou-vang-do-chile-montes-alpha-special-cuvee-cabernet', 880000, 'gP1wM-060849-xn7.png', NULL, 'true', NULL, 'Rượu vang đỏ Chile Montes Alpha Special Cuvee Cabernet Sauvignon của nh&agrave; vang nổi tiếng Montes của Chile v&agrave; được ủ 16 th&aacute;ng trong th&ugrave;ng gỗ sồi, với những đặc điểm sau', '750', '14', 'Chile', 'Colchagua Valley', 6, 20, 1, '2022-05-03 11:08:49', '2022-05-03 11:08:49'),
(21, 'RƯỢU VANG ĐỎ Ý F NEGROAMARO', 'ruou-vang-do-y-f-negroamaro', 1100000, 'PGVHo-061212-fGW.png', NULL, 'true', NULL, '<p>Đ&acirc;y l&agrave; một chai rượu vang đỏ thượng hạng được l&agrave;m ho&agrave;n to&agrave;n từ giống nho truyền thống Negroamaro của &Yacute;, đến từ h&atilde;ng sản xuất rượu vang danh tiếng&nbsp;Cantine San Marzano.</p>\r\n\r\n<p>Rượu vang&nbsp;F Negroamaro Salento c&oacute; m&agrave;u t&iacute;m s&acirc;u sắc hấp dẫn. Khi đưa l&ecirc;n mũi, sẽ ngửi thấy m&ugrave;i hương phong ph&uacute; v&agrave; phức hợp của c&aacute;c loại tr&aacute;i c&acirc;y đen ch&iacute;n mọng như tr&aacute;i mận ch&iacute;n, tr&aacute;i d&acirc;u, mứt anh đ&agrave;o c&ugrave;ng m&ugrave;i hương vanila thoang thoảng. Khi nhấp trong miệng c&oacute; thể cảm nhận được cấu tr&uacute;c căng tr&ograve;n, tr&ograve;n trịa trong khoang miệng với hương vị b&eacute;o ngậy của kem, bơ k&egrave;m theo vị ch&aacute;t tannin nhẹ nh&agrave;ng tinh tế. M&ugrave;i cacao nồng n&agrave;n v&agrave; m&ugrave;i gỗ tuyết t&ugrave;ng hấp dẫn lan toả khắp khoang miệng. Sau khi đi qua cuống họng sẽ để lại một dư vị ngọt ng&agrave;o, sảng kho&aacute;i k&eacute;o d&agrave;i rất l&acirc;u.</p>', '750', '15', 'Ý', 'Puglia', 8, 25, 1, '2022-05-03 11:12:12', '2022-05-03 11:12:12'),
(22, 'RƯỢU VANG ĐỎ PHÁP CHATEAUNEUF DU PAPE', 'ruou-vang-do-phap-chateauneuf-du-pape', 1050000, 'q1rSX-061438-NUU.png', NULL, 'true', NULL, '<a href=\"https://caithunggo.com/pages/shop-ruou-caithunggo\">Rượu vang Ph&aacute;p La Fiole Du Pape</a>&nbsp;&ndash; Chateauneuf Du Pape (rượu vang bụi, vang vẹo)&nbsp;d&ograve;ng vang đỏ Ph&aacute;p được phối trộn từ 13 giống nho (Grenache, Syrah, Mourv&egrave;dre, Cinsault,&hellip;),&nbsp;ủ c&aacute;c năm kh&aacute;c nhau n&ecirc;n tr&ecirc;n chai kh&ocirc;ng để vintage.&nbsp; Năm 2014 được Wine Spectator đ&aacute;nh gi&aacute; 88/100 điểm', '750', '14', 'Pháp', 'Rhône Valley', 7, 21, 1, '2022-05-03 11:14:38', '2022-05-03 11:25:34'),
(23, 'RƯỢU VANG ĐỎ MỸ BOGLE MERLOT', 'ruou-vang-do-my-bogle-merlot', 790000, 'ys2iv-062120-cnc.png', NULL, 'true', NULL, NULL, '750', '13', 'Mỹ', 'California', 13, 22, 1, '2022-05-03 11:21:20', '2022-05-03 11:26:19'),
(24, 'RƯỢU VANG ĐỎ ARGENTINA KAIKEN ULTRA CABERNET SAUVIGNON', 'ruou-vang-do-argentina-kaiken-ultra-cabernet-sauvignon', 1050000, 'b8VQx-062334-8ix.png', NULL, 'true', NULL, '<a href=\"https://caithunggo.com/pages/shop-ruou-caithunggo\">Rượu vang Ph&aacute;p La Fiole Du Pape</a>&nbsp;&ndash; Chateauneuf Du Pape (rượu vang bụi, vang vẹo)&nbsp;d&ograve;ng vang đỏ Ph&aacute;p được phối trộn từ 13 giống nho (Grenache, Syrah, Mourv&egrave;dre, Cinsault,&hellip;),&nbsp;ủ c&aacute;c năm kh&aacute;c nhau n&ecirc;n tr&ecirc;n chai kh&ocirc;ng để vintage.&nbsp; Năm 2014 được Wine Spectator đ&aacute;nh gi&aacute; 88/100 điểm', '750', '14', 'Pháp', 'Rhône Valley', 12, 23, 1, '2022-05-03 11:23:34', '2022-05-03 11:27:28');

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
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(1, 'Minh', 'admin@gmail.com', '0123456789', NULL, '$2a$12$x3I0q6ckOpaPw3Wt2iz41ePUTpmaS.6wOAOiwIdtvAqLAM1wxcuzi', 'minh', NULL, NULL, '2022-04-17 07:57:18', 1),
(2, 'test', 'phuongnv@2nf.com.vn', '0123154564', NULL, '$2y$10$DR.GKanfGg3dmY9RKqSQo.9dFPha/CfTGtDpnXPDXp4QZ6V7TBBxC', 'test', NULL, '2022-04-11 02:30:53', '2022-04-17 07:57:11', 2),
(4, 'Minh1', 'business@miichisoft.net', '01231545641', NULL, '$2y$10$I5Zzdl4X/pH0MPyMIGQN6eoIYZvy4YRxoeirWCc329y4jsDrUXO6O', 'minh1', NULL, '2022-04-11 07:02:44', '2022-04-11 07:47:10', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brands_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
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
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_brand_id_foreign` (`brand_id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

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
