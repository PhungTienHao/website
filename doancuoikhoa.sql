-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 11, 2023 lúc 09:27 AM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `doancuoikhoa`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `assess`
--

CREATE TABLE `assess` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `assess` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `assess`
--

INSERT INTO `assess` (`id`, `name`, `email`, `assess`, `created_at`) VALUES
(1, 'Phùng Tiến Hào', 'haotienphung@gmail.com', 'quá tuyệt vời', '0000-00-00 00:00:00'),
(2, 'phùng tiến hào', 'haotienphung@gmail.com', 'tuyệt vời', '2023-09-08 11:05:23'),
(3, 'phùng tiến hào', 'haotienphung@gmail.com', 'tuyệt vời', '2023-09-08 11:05:30'),
(4, 'phùng tiến hào', 'haotienphung@gmail.com', 'tuyệt vời', '2023-09-08 11:05:59');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` tinyint(3) DEFAULT 0,
  `avatar` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(3) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `type`, `avatar`, `description`, `status`, `created_at`, `updated_at`) VALUES
(2, 'tay cầm', 0, '1693812213-z4633035887359_5c857ee2e88301374ae07e6c2f7ebae4.jpg', 'liên kết với máy tính chơi được nhiều game', NULL, '2023-09-04 07:23:33', NULL),
(6, 'tay cầm', 0, '1693812213-z4633035887359_5c857ee2e88301374ae07e6c2f7ebae4.jpg', 'liên kết với máy tính chơi được nhiều game', NULL, '2023-09-04 00:23:33', NULL),
(7, 'kết nối mobile', 0, '', '', NULL, '2023-09-05 07:12:10', NULL),
(8, 'xbox', 0, '', '', NULL, '2023-09-06 06:23:26', NULL),
(9, 'PC', 0, '', 'kết nối với máy tính', NULL, '2023-09-10 12:00:26', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `mobile` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `note` text DEFAULT NULL,
  `price_total` int(11) DEFAULT NULL,
  `payment_status` tinyint(2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `fullname`, `address`, `mobile`, `email`, `note`, `price_total`, `payment_status`, `created_at`, `updated_at`) VALUES
(20, NULL, 'phùng tiến hào', 'hn', 338680362, 'haotienphung@gmail.com', '', 10300000, 0, '2023-09-10 07:56:29', NULL),
(21, NULL, 'phùng tiến hào', 'hn', 338680362, 'haotienphung@gmail.com', '', 31300000, 0, '2023-09-11 07:22:29', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(150) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`order_id`, `product_id`, `quantity`) VALUES
(20, 12, 1),
(20, 11, 1),
(21, 11, 2),
(21, 14, 1),
(21, 20, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `summary` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `status` tinyint(3) DEFAULT 0,
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_description` varchar(255) DEFAULT NULL,
  `seo_keywords` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `is_feature` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `category_id`, `title`, `avatar`, `price`, `amount`, `summary`, `content`, `status`, `seo_title`, `seo_description`, `seo_keywords`, `created_at`, `updated_at`, `is_feature`) VALUES
(11, 6, 'ps5', '1693831066-product-group_8_2__1.png', 10000000, 20, 'Máy chơi game Sony PlayStation 5 (PS5) Bản ổ đĩa | Chính hãng Sony Việt Nam', 'Chiến game mượt mà với tốc độ khung hình 120fps', 1, '', '', '', '2023-09-04 05:37:46', '2023-09-11 13:16:33', 1),
(12, 7, 'lingzha', '1693923643-product-lingzha.jpg', 300000, 10, 'Bộ chuyển đổi Game LingZha', 'App map phím: Geekgamer.\r\n\r\nHệ điều hành Android: Kết nối không dây hoặc cắm cap ( trừ chipset Media Tek)\r\n\r\n6 cổng kết nối đa dạng\r\n\r\nAuto ghìm tâm thông minh.\r\n\r\nHỗ trợ PUBG Mobile / COD / Freefire / World of Tank/ LOL / Moba game bằng phím chuột.', 1, '', '', '', '2023-09-05 07:20:43', NULL, 0),
(13, 7, 'Tay cầm chơi game Ipega 9167', '1693923991-product-3.jpg', 300000, 10, 'Tay cầm chơi game Ipega 9167-hàng nhập khẩu', 'Tay cầm chơi game Ipega 9167', 1, '', '', '', '2023-09-05 07:26:31', '2023-09-10 18:30:00', 0),
(14, 8, 'Xbox Series S 512GB', '1694148258-product-xbox-one-x-one-s-credit-microsoft@2000x1270-1.jpg', 7500000, 10, 'Xbox Series S 512GB', 'Chi tiết CPU	8X Cores @ 3.6 GHz (3.4 GHz w/SMT) Custom Zen 2 CPU, 7nm Enhanced SoC\r\nGPU	4 TFLOPS, 20 CUs @1.565 GHz Custom AMD RDNA 2 GPU\r\nRAM	10GB GDDR6\r\nBộ nhớ trong	512GB Custom NVME SSD\r\nTính năng mới	Hỗ trợ Ray-Tracing, Variate Rate Shading (VRS), Spatial Sound (bao gồm Dolby Atmos), Dolby Vision, hỗ trợ, âm thanh vòm 3D audio, hỗ trợ upscale media 4K, tương thích ngược với game Xbox One', 1, '', '', '', '2023-09-07 07:03:08', '2023-09-11 13:16:48', 1),
(15, 6, 'Nintendo Switch New Version Mario Choose One Bundle ', '1694148280-product-nitedoswitch.jpg', 6690000, 10, 'Nintendo Switch New Version Mario Choose One Bundle\r\n', 'Phiên bản:	OLED nâng cấp\r\nBảo hành:	Cơ bản | Máy 12 tháng - Phụ kiện 3 tháng\r\nMàu sắc Joy-con:	Zelda TOTK\r\nMàn hình:	OLED cảm ứng 7 inch\r\nBộ nhớ:	64GB - Mở rộng qua MicroSD\r\nPin:	4.5 - 9 tiếng', 1, '', '', '', '2023-09-07 07:15:33', '2023-09-08 11:44:40', 0),
(17, 2, 'playstaysion 4', '1694345371-product-6351247_rd.jpg', 7500000, 10, 'PlayStation 4 500GB', 'Model Máy: Playstation 4 500GB - Phiên bản đầu tiên, giá hấp dẫn, Chơi game Full HD đặc sắc\r\nMã sản phẩm: CUH-1100A\r\nTình trạng máy: USED - Đã qua sử dụng, đã được kiểm tra hoạt động tốt\r\nPhụ kiện kèm theo: tay cầm Dualshock 4 kết nối không dây, cáp nguồn 2 chấu và 3 chấu, cáp HDMI\r\nBảo Hành : 3 tháng tại FUCHAO', 1, '', '', '', '2023-09-10 01:42:57', '2023-09-10 18:50:28', 0),
(18, 7, 'duo gaming', '1694345355-product-duagamer.jpg', 3900000, 10, '', '', 1, '', '', '', '2023-09-10 01:55:27', '2023-09-11 13:16:39', 1),
(19, 9, 'Steelseries Arctis Pro (RGB) ', '1694347015-product-resizer.jpg', 3690000, 10, 'Độ nhạy tai nghe: 102 dBSPL', 'Tần số phản hồi: 20–40,000 Hz\r\nĐộ nhạy tai nghe: 102 dBSPL\r\nTrợ kháng tai nghe: 32 Ohm\r\nTotal Harmonic Distortion: < 1%\r\nHình thức kết nối: USB, Optical, 3.5mm\r\nKhung tai nghe: Kim loại\r\nTần số phản hồi của Mic: 100Hz–10000Hz\r\nTrợ kháng Mic: 2200Ohm\r\nCông nghệ: Khử tiếng ồn hai chiều\r\nĐộ nhạy Mic: -38 dBV/Pa', 1, '', '', '', '2023-09-10 11:56:55', '2023-09-10 19:04:08', 0),
(20, 9, 'Chuột Razer Basilisk Ultimate', '1694347294-product-resizer1.jpg', 3800000, 10, 'Công nghệ không dây: Razer Hyperspeed độc quyền', 'Công nghệ không dây: Razer Hyperspeed độc quyền\r\nKhả năng kết nối: Cáp rời hoặc Không Dây\r\nCảm biến: Quang Học Razer Focus+\r\nSố nút có thể tùy chỉnh: 11 nút\r\nLoại switch: Razer Switch ( 70 triệu lần nhấn )\r\nThời lượng sử dụng pin: 100giờ\r\nKích thước: 130 x 60 x 42 ( mm ) ( Dài x Rộng x Cao )\r\nTrọng lượng: 107g', 1, '', '', '', '2023-09-10 12:01:34', '2023-09-11 13:17:10', 1),
(21, 9, 'Kit FUHLEN H75S V2 RGB', '1694347629-product-resizer2.jpg', 2000000, 11, 'Kit FUHLEN H75S V2 RGB - Smoke | Không dây - Gasket - Hotswap - Mạch xuôi', 'Kích thước phím: Layout 75% (có keymap)\r\nKết nối: USB Type-C/ 2.4Ghz/ Bluetooth 5.0\r\nSwitch: Hotswap 5 pin, PCB mạch xuôi.\r\nMàu sắc: Smoke xuyên led \r\nĐèn led: RGB 16.8 triệu màu + LED viền  - có phần mềm hỗ trợ (nháy theo nhạc)\r\nHotswap: có khả năng hotswap - 5 pin - mạch xuôi\r\nPin: Lithium dung lượng 3000mAh.\r\nNúm (Knob) tùy chỉnh ánh sáng, volume.\r\nPlate nhôm được build sẵn từ nhà máy.\r\nFoam đáy Silicone/ foam tiêu âm PCB', 1, '', '', '', '2023-09-10 12:07:09', NULL, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `user` varchar(110) NOT NULL,
  `pas` text NOT NULL,
  `sdt` text NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `phone`, `address`, `email`, `avatar`, `created_at`) VALUES
(4, 'haohao', '$2y$10$3i4Oez9wICou92ScyMttYeetuuKtxXPvJ2FjrLdmbg9WjO01zX/8C', 'phùng tiến hào', 338680362, 'hn', 'haotienphung@gmail.com', '1692286825-user-z4569980100674_8ae6250eb99a08817a7d8fb41abe624b.jpg', '2023-08-17 15:40:25');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `assess`
--
ALTER TABLE `assess`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD KEY `order_id` (`order_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `assess`
--
ALTER TABLE `assess`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
