-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 11, 2023 at 05:15 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coolmatefake`
--

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_10_24_010622_create_products_table', 2),
(6, '2023_10_25_151101_create_orders_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `city` text DEFAULT NULL,
  `district` text DEFAULT NULL,
  `ward` text DEFAULT NULL,
  `address` text NOT NULL,
  `note` text DEFAULT NULL,
  `order_detail` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `status` int(12) NOT NULL DEFAULT 0,
  `token` varchar(12) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone`, `email`, `city`, `district`, `ward`, `address`, `note`, `order_detail`, `created_at`, `status`, `token`, `updated_at`) VALUES
(27, 'Ngo Sy Khoi', '0973999949', 'raxowev610@hondabbs.com', 'Thành phố Hà Nội', 'Quận Hoàn Kiếm', 'Phường Hàng Mã', '72 ham Nghi, Da Nang', 'Giao nhanh', '{\"16\":\"2\"}', '2023-10-26 23:18:19', 0, 'pQDsWUvD4par', '2023-10-26 23:18:19'),
(28, 'Ngo Sy Khoi', '0973999949', 'raxowev610@hondabbs.com', 'Thành phố Hà Nội', 'Quận Hoàn Kiếm', 'Phường Phúc Tân', '72 ham Nghi, Da Nang', 'Giao nhanh', '{\"14\":\"2\",\"16\":\"2\"}', '2023-10-26 23:19:41', 1, 'h0XB27vd7JxP', '2023-10-26 23:21:28'),
(29, 'Ngo Sy Khoi', '0973999949', 'nguyento@gmail.com', 'Tỉnh Bắc Giang', 'Huyện Tân Yên', 'Thị trấn Nhã Nam', '72 ham Nghi, Da Nang', 'Giao nhanh', '{\"16\":\"1\",\"18\":\"3\"}', '2023-11-05 07:26:24', 0, 'D8MXqgoe7hoT', '2023-11-05 07:26:24'),
(30, 'Ngo Sy Khoi', '0973999949', 'nguyennsk07405a@gmail.com', 'Thành phố Đà Nẵng', 'Quận Thanh Khê', 'Phường Thạc Gián', '72 ham Nghi, Da Nang', 'Giao nhanh', '{\"14\":\"1\",\"17\":\"4\",\"18\":\"1\"}', '2023-11-10 02:12:47', 1, 'IeXn7JHJqAEh', '2023-11-10 02:16:01');

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
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `sale_price` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `content` longtext NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_images` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `sale_price`, `description`, `content`, `product_image`, `product_images`, `created_at`, `updated_at`) VALUES
(14, 'T-Shirt Cotton 220GSM', '56000', '30000', '<ul><li>Chất liệu: 100% Cotton</li><li>Định lượng vải 220gsm dày dặn</li><li>Vải được xử lí hoàn thiện giúp bề mặt vải ít xù lông, mềm mịn và bền màu hơn</li><li>Độ dày vải vừa phải, thoải mái, thoáng mát</li><li>Phù hợp mặc hàng ngày</li><li>Sản xuất tại Nhà máy Tessellation (TGV), Việt Nam. <a href=\"https://www.coolmate.me/page/nha-may-tessellation-tgv\">Xem nhà máy &gt;</a></li><li>Người mẫu: 186cm - 77kg, mặc áo 2XL</li></ul>', '<p>&nbsp;</p><p>T-Shirt Cotton 220GSM là loại trang phục <a href=\"https://www.coolmate.me/collection/ao-nam\"><strong>áo nam</strong></a> đặc biệt, vốn để sử dụng khi tập luyện thể dục, thể thao. Loại áo này thường được may với chất liệu cao cấp, thấm hút mồ hôi, co giãn tốt giúp quá trình vận động trở nên thoải mái hơn.</p><p>Tuy nhiên, khi nhu cầu thay đổi, các nhà thiết kế đã tạo nên những chiếc <strong>áo thể thao đẹp</strong>, mang tính thẩm mĩ, để các tín đồ có thể sở hữu những bộ outfit thể thao, năng động ngay cả trong những hoạt động thường ngày.</p><h2>Những mẫu áo thể thao nam hiện nay</h2><figure class=\"image\"><img style=\"aspect-ratio:1024/584;\" src=\"/ckfinder/userfiles/files/coolmate-la-gi-8-1024x584_50(2).jpg\" width=\"1024\" height=\"584\"></figure><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>', '/storage/images/1698372548-newcacoa3-3.webp', '[\"\\/storage\\/images\\/1698130522-product1.1.jpeg\",\"\\/storage\\/images\\/1698130522-product1.5.jpeg\",\"\\/storage\\/images\\/1698130522-product1.4.jpeg\",\"\\/storage\\/images\\/1698130522-product1.3.jpeg\",\"\\/storage\\/images\\/1698130522-product1.2.jpeg\"]', '2023-10-23 23:55:30', '2023-10-26 19:09:10'),
(15, 'T-Shirt Cotton 120GSM', '56000', '30000', '<ul><li>Chất liệu: 100% Cotton</li><li>Định lượng vải 220gsm dày dặn</li><li>Vải được xử lí hoàn thiện giúp bề mặt vải ít xù lông, mềm mịn và bền màu hơn</li><li>Độ dày vải vừa phải, thoải mái, thoáng mát</li><li>Phù hợp mặc hàng ngày</li><li>Sản xuất tại Nhà máy Tessellation (TGV), Việt Nam. <a href=\"https://www.coolmate.me/page/nha-may-tessellation-tgv\">Xem nhà máy &gt;</a></li><li>Người mẫu: 186cm - 77kg, mặc áo 2XL</li></ul>', '<p>T-Shirt Cotton 220GSM là loại trang phục <a href=\"https://www.coolmate.me/collection/ao-nam\"><strong>áo nam</strong></a> đặc biệt, vốn để sử dụng khi tập luyện thể dục, thể thao. Loại áo này thường được may với chất liệu cao cấp, thấm hút mồ hôi, co giãn tốt giúp quá trình vận động trở nên thoải mái hơn.</p><p>Tuy nhiên, khi nhu cầu thay đổi, các nhà thiết kế đã tạo nên những chiếc <strong>áo thể thao đẹp</strong>, mang tính thẩm mĩ, để các tín đồ có thể sở hữu những bộ outfit thể thao, năng động ngay cả trong những hoạt động thường ngày.</p><h2>Những mẫu áo thể thao nam hiện nay</h2><figure class=\"image\"><img style=\"aspect-ratio:1024/584;\" src=\"/ckfinder/userfiles/files/coolmate-la-gi-8-1024x584_50(2).jpg\" width=\"1024\" height=\"584\"></figure><p>&nbsp;</p><p>&nbsp;</p>', '/storage/images/1698372538-IMG_6130_91.webp', '[\"\\/storage\\/images\\/1698130522-product1.1.jpeg\",\"\\/storage\\/images\\/1698130522-product1.5.jpeg\",\"\\/storage\\/images\\/1698130522-product1.4.jpeg\",\"\\/storage\\/images\\/1698130522-product1.3.jpeg\",\"\\/storage\\/images\\/1698130522-product1.2.jpeg\"]', '2023-10-23 23:55:30', '2023-10-26 19:09:00'),
(16, 'T-Shirt Cotton 420GSM', '200000', '129000', '<ul><li>Chất liệu: 100% Cotton</li><li>Định lượng vải 220gsm dày dặn</li><li>Vải được xử lí hoàn thiện giúp bề mặt vải ít xù lông, mềm mịn và bền màu hơn</li><li>Độ dày vải vừa phải, thoải mái, thoáng mát</li><li>Phù hợp mặc hàng ngày</li><li>Sản xuất tại Nhà máy Tessellation (TGV), Việt Nam. <a href=\"https://www.coolmate.me/page/nha-may-tessellation-tgv\">Xem nhà máy &gt;</a></li><li>Người mẫu: 186cm - 77kg, mặc áo 2XL</li></ul>', '<p>T-Shirt Cotton 220GSM là loại trang phục <a href=\"https://www.coolmate.me/collection/ao-nam\"><strong>áo nam</strong></a> đặc biệt, vốn để sử dụng khi tập luyện thể dục, thể thao. Loại áo này thường được may với chất liệu cao cấp, thấm hút mồ hôi, co giãn tốt giúp quá trình vận động trở nên thoải mái hơn.</p><p>Tuy nhiên, khi nhu cầu thay đổi, các nhà thiết kế đã tạo nên những chiếc <strong>áo thể thao đẹp</strong>, mang tính thẩm mĩ, để các tín đồ có thể sở hữu những bộ outfit thể thao, năng động ngay cả trong những hoạt động thường ngày.</p><h2>Những mẫu áo thể thao nam hiện nay</h2><figure class=\"image\"><img style=\"aspect-ratio:1024/584;\" src=\"/ckfinder/userfiles/files/coolmate-la-gi-8-1024x584_50(2).jpg\" width=\"1024\" height=\"584\"></figure><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>', '/storage/images/1698130651-product3.1.jpeg', '[\"\\/storage\\/images\\/1698130661-product3.1.jpeg\",\"\\/storage\\/images\\/1698130661-product3.5.jpeg\",\"\\/storage\\/images\\/1698130661-product3.4.jpeg\",\"\\/storage\\/images\\/1698130661-product3.3.jpeg\",\"\\/storage\\/images\\/1698130661-product3.2.jpeg\"]', '2023-10-23 23:55:30', '2023-10-26 19:05:19'),
(17, 'T-Shirt Cotton 220GSM', '125000', '120000', '<ul><li>Chất liệu: 100% Cotton</li><li>Định lượng vải 220gsm dày dặn</li><li>Vải được xử lí hoàn thiện giúp bề mặt vải ít xù lông, mềm mịn và bền màu hơn</li><li>Độ dày vải vừa phải, thoải mái, thoáng mát</li><li>Phù hợp mặc hàng ngày</li><li>Sản xuất tại Nhà máy Tessellation (TGV), Việt Nam. <a href=\"https://www.coolmate.me/page/nha-may-tessellation-tgv\">Xem nhà máy &gt;</a></li><li>Người mẫu: 186cm - 77kg, mặc áo 2XL</li></ul>', '<p>T-Shirt Cotton 220GSM là loại trang phục <a href=\"https://www.coolmate.me/collection/ao-nam\"><strong>áo nam</strong></a> đặc biệt, vốn để sử dụng khi tập luyện thể dục, thể thao. Loại áo này thường được may với chất liệu cao cấp, thấm hút mồ hôi, co giãn tốt giúp quá trình vận động trở nên thoải mái hơn.</p><p>Tuy nhiên, khi nhu cầu thay đổi, các nhà thiết kế đã tạo nên những chiếc <strong>áo thể thao đẹp</strong>, mang tính thẩm mĩ, để các tín đồ có thể sở hữu những bộ outfit thể thao, năng động ngay cả trong những hoạt động thường ngày.</p><h2>Những mẫu áo thể thao nam hiện nay</h2><figure class=\"image\"><img style=\"aspect-ratio:1024/584;\" src=\"/ckfinder/userfiles/files/coolmate-la-gi-8-1024x584_50(2).jpg\" width=\"1024\" height=\"584\"></figure><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>', '/storage/images/1698130619-product2.1.jpeg', '[\"\\/storage\\/images\\/1698130628-product2.1.jpeg\",\"\\/storage\\/images\\/1698130628-product2.5.jpeg\",\"\\/storage\\/images\\/1698130628-product2.4.jpeg\",\"\\/storage\\/images\\/1698130628-product2.3.jpeg\",\"\\/storage\\/images\\/1698130628-product2.2.jpg\"]', '2023-10-23 23:55:30', '2023-10-26 19:04:58'),
(18, 'T-Shirt Cotton 220GSM', '56000', '30000', '<ul><li>Chất liệu: 100% Cotton</li><li>Định lượng vải 220gsm dày dặn</li><li>Vải được xử lí hoàn thiện giúp bề mặt vải ít xù lông, mềm mịn và bền màu hơn</li><li>Độ dày vải vừa phải, thoải mái, thoáng mát</li><li>Phù hợp mặc hàng ngày</li><li>Sản xuất tại Nhà máy Tessellation (TGV), Việt Nam. <a href=\"https://www.coolmate.me/page/nha-may-tessellation-tgv\">Xem nhà máy &gt;</a></li><li>Người mẫu: 186cm - 77kg, mặc áo 2XL</li></ul>', '<p>T-Shirt Cotton 220GSM là loại trang phục <a href=\"https://www.coolmate.me/collection/ao-nam\"><strong>áo nam</strong></a> đặc biệt, vốn để sử dụng khi tập luyện thể dục, thể thao. Loại áo này thường được may với chất liệu cao cấp, thấm hút mồ hôi, co giãn tốt giúp quá trình vận động trở nên thoải mái hơn.</p><p>Tuy nhiên, khi nhu cầu thay đổi, các nhà thiết kế đã tạo nên những chiếc <strong>áo thể thao đẹp</strong>, mang tính thẩm mĩ, để các tín đồ có thể sở hữu những bộ outfit thể thao, năng động ngay cả trong những hoạt động thường ngày.</p><h2>Những mẫu áo thể thao nam hiện nay</h2><figure class=\"image\"><img style=\"aspect-ratio:1024/584;\" src=\"/ckfinder/userfiles/files/coolmate-la-gi-8-1024x584_50(2).jpg\" width=\"1024\" height=\"584\"></figure><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>', '/storage/images/1698130496-product1.1.jpeg', '[\"\\/storage\\/images\\/1698130522-product1.1.jpeg\",\"\\/storage\\/images\\/1698130522-product1.5.jpeg\",\"\\/storage\\/images\\/1698130522-product1.4.jpeg\",\"\\/storage\\/images\\/1698130522-product1.3.jpeg\",\"\\/storage\\/images\\/1698130522-product1.2.jpeg\"]', '2023-10-23 23:55:30', '2023-10-26 18:52:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
