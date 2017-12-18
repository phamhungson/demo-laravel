-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 18, 2017 lúc 04:39 PM
-- Phiên bản máy phục vụ: 10.1.28-MariaDB
-- Phiên bản PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `demo`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `content` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rate` mediumint(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `user_id`, `product_id`, `content`, `created_at`, `updated_at`, `rate`) VALUES
(1, 4, 7, 'đẹp', '2017-12-14 11:10:22', '2017-12-14 11:10:22', 0),
(2, 4, 6, 'hay', '2017-12-15 22:45:10', '2017-12-15 22:45:10', 3),
(3, 4, 6, 'tót', '2017-12-15 22:45:37', '2017-12-15 22:45:37', 5),
(4, 4, 6, 'quá hay', '2017-12-15 22:46:02', '2017-12-15 22:46:02', 1),
(5, 4, 7, 'tốt', '2017-12-15 23:10:06', '2017-12-15 23:10:06', 5),
(6, 5, 7, 'mau nay dep qua', '2017-12-18 02:38:53', '2017-12-18 02:38:53', 4),
(7, 6, 3, 'nhin rat dep', '2017-12-18 02:57:19', '2017-12-18 02:57:19', 4),
(8, 7, 7, 'dep qua', '2017-12-18 07:06:55', '2017-12-18 07:06:55', 4),
(9, 8, 7, 'dep quá', '2017-12-18 07:30:21', '2017-12-18 07:30:21', 4),
(10, 9, 7, 'dep qua', '2017-12-18 07:39:42', '2017-12-18 07:39:42', 4),
(11, 10, 7, 'sp rat la dep', '2017-12-18 07:53:29', '2017-12-18 07:53:29', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` mediumint(9) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id`, `user_id`, `name`, `email`, `title`, `message`, `created_at`, `updated_at`) VALUES
(1, 5, 'thay hai', 'thayhai@gmail.com', 'phan hoi', 'hang kha dep', '2017-12-18 02:40:44', '2017-12-18 02:40:44'),
(2, 6, 'thay hai', 'thayhaibk2017@gmail.com', 'phan hoi', 'hang kha dep', '2017-12-18 02:58:37', '2017-12-18 02:58:37'),
(3, 7, 'nguyen van tien', 'tienca@gmail.com', 'phan hoi', 'kha tot', '2017-12-18 07:09:30', '2017-12-18 07:09:30'),
(4, 9, 'nguen van son', 'son97@gmail.com', 'phan hoi', 'kha tot', '2017-12-18 07:41:56', '2017-12-18 07:41:56'),
(5, 10, 'son tiep', 'tiepson97@gmail.com', 'phan hoi', 'kha tot', '2017-12-18 07:55:45', '2017-12-18 07:55:45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `evaluate`
--

CREATE TABLE `evaluate` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` mediumint(9) NOT NULL,
  `product_id` mediumint(9) NOT NULL,
  `eval` mediumint(9) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `manafacture`
--

CREATE TABLE `manafacture` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `manafacture`
--

INSERT INTO `manafacture` (`id`, `name`, `country`, `description`, `created_at`, `updated_at`) VALUES
(2, 'DOLCE & GABBANA', 'Italy', 'Sự tinh tế của phong cách pha trộn giữa ngọt ngào và góc cạnh của thương hiệu', '2017-12-09 20:53:06', '2017-12-09 20:53:06'),
(3, 'GUCCI', 'Italy', 'Những thiết kế của Ford là một sự pha trộn đầy mê hoặc giữa tính quyến rũ và đẳng cấp, anh đã biến Gucci trở thành một thương hiệu xa xỉ với đẳng cấp toàn cầu bằng những thiết kế độc đáo và thanh lịch.', '2017-12-09 20:53:53', '2017-12-09 20:53:53'),
(4, 'Dior', 'France', 'sản phẩm Dior luôn có kiểu dáng độc đáo và màu sắc quyến rũ', '2017-12-09 21:46:30', '2017-12-09 21:46:30'),
(5, 'Prada', 'Italy', 'Những thiết kế sáng tạo.', '2017-12-09 21:48:09', '2017-12-09 21:48:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_11_20_034649__create_product_catalog_table', 1),
(4, '2017_11_20_035019__create_product_table', 1),
(5, '2017_11_20_040816__create_comment_table', 1),
(6, '2017_11_20_042045__create_order_table', 1),
(7, '2017_11_20_042055__create_order_detail_table', 1),
(8, '2017_11_20_043426__create_manufacture_table', 1),
(9, '2017_11_29_124128_add_role_id_to_users_table', 1),
(10, '2017_12_11_195451_create_table_evaluate', 2),
(11, '2017_12_12_034357_add_rate_to_comment_table', 3),
(12, '2017_12_12_065333_create_ship_table', 3),
(13, '2017_12_12_075720_add_payment_to_order_table', 3),
(14, '2017_12_12_141549__add_order_id_to_order_detail_table', 3),
(15, '2017_12_12_202815__create_table_rate', 4),
(16, '2017_12_12_211131__create_contact_table', 4),
(17, '2017_12_15_025349__create_add_rate_to_comment_table', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `date_order` datetime NOT NULL,
  `total` mediumint(9) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `payment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`id`, `user_id`, `date_order`, `total`, `created_at`, `updated_at`, `payment`) VALUES
(1, 2, '2017-12-14 00:00:00', 160000, '2017-12-14 06:27:30', '2017-12-14 06:27:30', 'Thanh toán trực tuyến'),
(2, 4, '2017-12-15 00:00:00', 160000, '2017-12-15 00:12:27', '2017-12-15 00:12:27', 'Thanh toán trực tuyến'),
(3, 5, '2017-12-18 00:00:00', 640000, '2017-12-18 02:39:52', '2017-12-18 02:39:52', 'Thanh toán trực tuyến'),
(4, 6, '2017-12-18 00:00:00', 320000, '2017-12-18 02:56:51', '2017-12-18 02:56:51', 'Thanh toán trực tuyến'),
(5, 7, '2017-12-18 00:00:00', 1000, '2017-12-18 07:08:23', '2017-12-18 07:08:23', 'Thanh toán trực tuyến'),
(6, 9, '2017-12-18 00:00:00', 160000, '2017-12-18 07:40:55', '2017-12-18 07:40:55', 'Thanh toán trực tuyến'),
(7, 10, '2017-12-18 00:00:00', 480000, '2017-12-18 07:54:45', '2017-12-18 07:54:45', 'Thanh toán trực tuyến');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` bigint(20) UNSIGNED NOT NULL,
  `price` mediumint(9) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `order_id` mediumint(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`id`, `product_id`, `quantity`, `price`, `created_at`, `updated_at`, `order_id`) VALUES
(1, 7, 1, 160000, '2017-12-14 06:27:30', '2017-12-14 06:27:30', 1),
(2, 7, 1, 160000, '2017-12-15 00:12:27', '2017-12-15 00:12:27', 2),
(3, 7, 4, 640000, '2017-12-18 02:39:52', '2017-12-18 02:39:52', 3),
(4, 7, 2, 320000, '2017-12-18 02:56:51', '2017-12-18 02:56:51', 4),
(5, 4, 3, 1003701, '2017-12-18 07:08:23', '2017-12-18 07:08:23', 5),
(6, 7, 1, 160000, '2017-12-18 07:40:55', '2017-12-18 07:40:55', 6),
(7, 6, 3, 480000, '2017-12-18 07:54:45', '2017-12-18 07:54:45', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_catalog_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manafacture_id` mediumint(9) NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_price` mediumint(9) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `view` mediumint(9) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `gender`, `size`, `product_catalog_id`, `manafacture_id`, `description`, `unit_price`, `image`, `view`, `created_at`, `updated_at`) VALUES
(1, 'túi xách 2017', 'Nữ', '24', '2', 2, 'bền ,đẹp', 900000, '6.jpg', 1, '2017-12-09 21:55:18', '2017-12-18 07:47:34'),
(3, 'Áo cộc thời trang', 'Nam', '24', '2', 5, 'thoải mái , tiện nghi', 500000, '7.jpg', 5, '2017-12-09 21:56:21', '2017-12-18 07:29:09'),
(4, 'Váy ngắn 2017', 'Nữ', '38', '4', 5, 'mặc thông thoáng ,thoải mái', 334567, 'pic3.jpg', 3, '2017-12-09 21:57:32', '2017-12-18 07:07:27'),
(5, 'áo cộc 2017', 'Nữ', '38', '5', 3, 'bền đẹp,êm ái', 460000, 'pic1.jpg', 4, '2017-12-09 21:58:46', '2017-12-17 20:47:47'),
(6, 'Thắt lưng G36', 'Nam', '20-30', '6', 4, 'đẹp ,mỏng', 160000, '5.jpg', 20, '2017-12-09 22:00:24', '2017-12-18 07:54:02'),
(7, 'Sơ mi trắng 2017', 'Nam', 'XXL', '3', 5, 'trắng rạng rỡ', 160000, '10.jpg', 31, '2017-12-12 05:46:00', '2017-12-18 07:53:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_category`
--

CREATE TABLE `product_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_category`
--

INSERT INTO `product_category` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(2, 'túi xách', 'túi chuyên dùng để xách', '2017-12-09 21:49:50', '2017-12-09 21:49:50'),
(3, 'áo sơ mi', 'mềm nhẹ đẹp', '2017-12-09 21:50:48', '2017-12-09 21:50:48'),
(4, 'váy đầm', 'kiểu dáng đẹp thoải mái', '2017-12-09 21:51:22', '2017-12-09 21:51:22'),
(5, 'áo cộc', 'đẹp lắm nhé', '2017-12-09 21:51:52', '2017-12-09 21:51:52'),
(6, 'thắt lưng', 'để thắt lưng', '2017-12-09 21:59:16', '2017-12-09 21:59:16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ship`
--

CREATE TABLE `ship` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` mediumint(9) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ship`
--

INSERT INTO `ship` (`id`, `order_id`, `name`, `phone`, `address`, `note`, `created_at`, `updated_at`) VALUES
(1, 1, 'zdfzdvgz', '1234567890', 'dvxcvxc v', 'fgbxfbxvb', '2017-12-14 06:27:30', '2017-12-14 06:27:30'),
(2, 2, 'nguyen van tiep', '01696608207', 'hà nội', 'qưertyu', '2017-12-15 00:12:27', '2017-12-15 00:12:27'),
(3, 3, 'thay hai', '123456789', 'dai hoc bạch khoa ha noi', 'nha tc 3h', '2017-12-18 02:39:52', '2017-12-18 02:39:52'),
(4, 4, 'thay hai', '123456789', 'dai hok bach khoa', 'nha TC 3h', '2017-12-18 02:56:51', '2017-12-18 02:56:51'),
(5, 5, 'nguyen van tien', '1234567890', 'nhà TC đại học Bách Khoa', 'trc 3h', '2017-12-18 07:08:23', '2017-12-18 07:08:23'),
(6, 6, 'nguyen van son', '123456789', 'ha noi', 'nha TC 3h', '2017-12-18 07:40:55', '2017-12-18 07:40:55'),
(7, 7, 'nguyen van dung', '1234567890', 'nha TC', 'den trc 3h', '2017-12-18 07:54:45', '2017-12-18 07:54:45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `full_name`, `address`, `phone`, `remember_token`, `created_at`, `updated_at`, `role_id`) VALUES
(1, 'tiepnguyenvantv97@gmail.com', '123', 'nguyen van tiep', 'xcgvxvxv', '01696608207', NULL, NULL, NULL, 1),
(2, 'he@gmail.com', '$2y$10$JuHE.cNLgvaMGrkSig3V/OD14II0bpYujGsptV3RbMEE7L5pSSiVe', 'Nguyenvantiep', 'hungyen', '01696608207', 'sZCGx30uWwLASzUNRl9sy7u2SfaMNPP8zX5SUSumPo6VMwxfvi88WFtZni9J', '2017-12-12 10:00:04', '2017-12-14 10:18:14', 0),
(3, 'tiepnguyenvanpie@gmail.com', '$2y$10$Ad68J/0Y5Je1IV0ziHGetu3yqRsAzgMwdhawvM0US0N3q9eRmmVMm', 'tiepnguyenvanpie@gmail.com', 'sd245t4', '01696608207', 'KQ1agFpgijsNuV7205sWvj5HfBbwzbjyXGmJfLCW0vAqlTzk8RV5m1EGaPXD', '2017-12-13 07:19:49', '2017-12-13 07:19:49', 0),
(4, 'tiep@gmail.com', '$2y$10$37pOQGD7X6sXfCqmq7siRuqlUHLHwdlaigKzc9LfPNPR9e6.mrnA2', 'Nguyen van tiep', 'ha noi', '1234567890', 'qEW5LhdeGfnFX7oZj5sequJzq80KMnu2CXtjX3aHBI03X3CNIOgzTZvQBsCc', '2017-12-14 10:38:07', '2017-12-14 10:38:07', 0),
(5, 'thayhai@gmail.com', '$2y$10$vhPzyeuqB1iFjjScrFtTFe/ji7GHw1P5hu437FbPvIWiji406LWPu', 'thay hai', 'dai hoc bach khoa ha noi', '123456789', 'bBGvGaBZUMNNbiVc7mea1VlT1SpcFdBpeoB7rqmpmSq3uMWxXTUcWPNZHnyz', '2017-12-18 02:38:01', '2017-12-18 02:38:01', 0),
(6, 'thayhaibk2017@gmail.com', '$2y$10$27EhF4cMyivvNRI8E/1XWuA5Wl7lmdTlV4j9HoWAQnjIOtfHc8Yva', 'thay hai', 'ha noi', '123456789', 'Cag4kS7f54kwUb1TafZJhwbFe3NEXUzbnRdQars6hioCeovwFcuQrvx5IXMv', '2017-12-18 02:55:39', '2017-12-18 02:57:56', 0),
(7, 'tienca@gmail.com', '$2y$10$v9LKH8uwn8xl60/wqkaTi.Ifdvx0UGwjP0Y02f0pDL/pKowK0s0k2', 'nguyen van tien', 'ha noi', '123456789', 'rZpOvbjaUWpqG70BOfk7FSFF2y4NPwS2YfqRnKqjIFeZINBcDaPGapkuxnQu', '2017-12-18 07:06:14', '2017-12-18 07:08:47', 0),
(8, 'sontiep@gmail.com', '$2y$10$T9P5V8HW91J5h3BvpQ4z6eNt/LY/helm/GN.bP5DY43xf5rysgTrW', 'nguyen son tiep', 'ha noi', '123456789', 'Os0oS3TimrekghF2tnLIhHhke130J7Eh8CQt290xTmK80kIPWGGbl58Hdhnv', '2017-12-18 07:29:50', '2017-12-18 07:29:50', 0),
(9, 'son97@gmail.com', '$2y$10$QqqqncDtFZJyjrSZ485tGeaEOWx.DDQoabUrnGvBpnQt7lZnmEI0S', 'nguen van son', 'ha noi', '123456789', '0VvxBkG9o7s5ZH9ZIgTVP6YZtsuAIWyrJV6dktwlZK2kK6kNa8OgKrNiGynR', '2017-12-18 07:39:11', '2017-12-18 07:41:18', 0),
(10, 'tiepson97@gmail.com', '$2y$10$4EA682iLK7ocPqVXScpb1.WolKNLgY7PNRUVLDbrpsJEhAMqJ/lbO', 'son tiep', 'ha noi', '123456789', NULL, '2017-12-18 07:52:51', '2017-12-18 07:55:06', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_user_id_index` (`user_id`),
  ADD KEY `comment_product_id_index` (`product_id`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `evaluate`
--
ALTER TABLE `evaluate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `evaluate_user_id_index` (`user_id`),
  ADD KEY `evaluate_product_id_index` (`product_id`);

--
-- Chỉ mục cho bảng `manafacture`
--
ALTER TABLE `manafacture`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_user_id_index` (`user_id`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_detail_product_id_index` (`product_id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_product_catalog_id_index` (`product_catalog_id`),
  ADD KEY `product_manafacture_id_index` (`manafacture_id`);

--
-- Chỉ mục cho bảng `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ship`
--
ALTER TABLE `ship`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `evaluate`
--
ALTER TABLE `evaluate`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `manafacture`
--
ALTER TABLE `manafacture`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `ship`
--
ALTER TABLE `ship`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
