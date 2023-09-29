-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 29, 2023 lúc 08:22 AM
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
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `summary` text NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_home` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `name`, `summary`, `avatar`, `content`, `created_at`, `is_home`) VALUES
(2, 'Microsoft Paint', 'Microsoft Paint sắp sở hữu tính năng được dân Photoshop xài nhiều nhất: tách nền', '1694659689-news-news1.jpg', 'Tính năng xóa nền sắp được cập nhật vào Microsoft Paint, và nó hoàn toàn miễn phí luôn nhé.\r\n\r\nMicrosoft đang lên kế hoạch để cập nhật cho ứng dụng Paint tính năng xóa nền trong mấy tấm hình chỉ với 1 cú click chuột. Phiên bản preview hiện đã có mặt trong bản Windows Insider mới nhất (Canary và Dev Channels v.11.2306.30.0). Thông tin này được Microsoft thông báo trong bài blog của họ.\r\nMicrosoft đã thêm tùy chọn Remove Background vào phần bên trái của thanh ribbon phía trên. Nó sẽ tự động xóa phần nền ra khỏi bức hình. Hoặc bạn cũng có thể sử dụng công cụ chọn (select tool) để xóa 1 khu vực trong phần nền trong khu vực được chọn.\r\nViệc Microsoft bổ sung tính năng cho Paint là một điều rất đáng hoan nghênh, mà đây lại còn là tính năng cực kỳ thông dụng và hữu ích nữa. Tất nhiên, lượng người dùng Paint khó thể nào mà nhiều bằng Photoshop được, nhưng việc bổ sung một vài tính năng cơ bản như này cũng đủ khiến người dùng Windows vui vẻ cả tháng rồi.\r\n\r\nGần như ai ai cũng đều có máy chụp hình, nhưng không phải ai cũng cần xài Photoshop. Việc tách nền là một trong những việc lẻ tẻ mà rất nhiều người thường hay làm, mà nếu mua Photoshop về chỉ để tách nền cơ bản thì nó lại quá phung phí. Thế nên nếu tính năng của Paint xài ổn thì nó sẽ giúp chúng ta tiết kiệm rất nhiều thời gian và tiền bạc.', '2023-09-14 02:48:09', 1),
(3, 'Windows File Explorer', 'Windows File Explorer dính lỗi khiến hiệu năng mở thư mục… tăng vọt', '1694659774-news-news2.jpg', 'Thành viên VivyVCCS có chia sẻ trên X (Twitter) chi tiết về lỗi (bug) mà người này mới phát hiện trong Windows File Explorer. Điều hài hước ở đây là lỗi này có thể cải thiện đáng kể hiệu năng mở các thư mục trong File Explorer. Muốn kích hoạt lỗi này thì người dùng cần phải can thiệp bằng cách thủ công, nhưng được cái là nó rất dễ để kích hoạt (nếu không muốn nói là dễ nhất trong số tất cả các lỗi).\r\nĐể kích hoạt, tất cả những gì bạn cần làm là mở File Explorer, bấm nút F11 để mở File Explorer dưới dạng toàn màn hình (full-screen), sau đó bấm F11 một lần nữa để thoát khỏi chế độ full-screen là xong. Một khi lỗi này được kích hoạt thì bạn sẽ thấy việc di chuyển giữa các thư mục nhanh hơn đáng kể, ngay cả khi 2 thư mục nằm trên 2 ổ cứng khác nhau.\r\n\r\nLỗi này liên quan đến phần mềm, cho nên bạn xài ổ cứng loại nào cũng sẽ thấy hiệu năng được cải thiện, từ SSD xịn sò nhất cho đến HDD cùi bắp nhất. Vấn đề duy nhất là thanh navbar sẽ bị “hỏng” khi kích hoạt lỗi này, nhưng tính ra việc đánh đổi này vẫn hời.\r\nFile Explorer từng là một ứng dụng phản hồi rất nhanh, nhất là trên những hệ điều hành cũ; nhưng vì một lý do nào đó mà nó càng ngày càng trở nên “cồng kềnh” và chậm chạp trong các phiên bản Windows 10 và 11. Thậm chí, trên nhiều diễn đàn cũng đã có không ít người dùng phàn nàn về tình trạng lag khi xài File Explorer trên Windows 10 và 11.', '2023-09-14 02:49:34', 1),
(4, 'WordPad ', 'Sau gần 30 năm phục vụ người dùng, WordPad cuối cùng cũng bị Microsoft đưa lên thớt', '1694659824-news-news3.jpg', 'Vừa mới trảm Cortana xong, giờ Microsoft lại tiếp tục mài dao để chặt WordPad.\r\n\r\nHẳn các bạn vẫn còn nhớ đến WordPad – một ứng dụng nằm giữa Notepad và Microsoft Word, tức là nó không gọn nhẹ như Notepad mà cũng không đầy đủ chức năng như Microsoft Word. Trong bài viết “Deprecated features for Windows client” được đăng trên trang web chính cửa của Microsoft, họ cho biết WordPad không còn được cập nhật nữa và sẽ bị xóa khỏi Windows trong 1 bản cập nhật trong tương lai.\r\nĐồng thời, họ cũng khuyên người dùng chuyển qua xài Microsoft Word để tạo văn bản với nhiều công cụ hữu ích hơn, hoặc là xài Windows Notepad cho gọn nhẹ cũng được.', '2023-09-14 02:50:24', 1),
(5, 'Nissin Cup Noodles', 'Xuất hiện mì ly gaming Nissin Cup Noodles chứa cafein để “buff” sức mạnh cho game thủ', '1694659865-news-news4.jpg', 'Ngoài nước tăng lực ra, giờ game thủ còn có thêm sự lựa chọn khác là mì ly gaming Nissin Cup Noodles.\r\n\r\nHãng Nissin Cup Noodles quyết định tấn công vào mảng gaming với sản phẩm mì ly chứa cafein. Theo thông cáo báo chí viết, lượng game thủ ở Nhật Bản đang tăng qua từng năm, nhất là những bạn trẻ, và con số này giờ đã vượt ngưỡng 50 triệu người rồi. Để đáp ứng nhu cầu này, lần đầu tiên trong lịch sử của Nissin Foods, họ sẽ tung ra 1 sản phẩm mới “thân thiện với game thủ”.', '2023-09-14 02:51:05', 1),
(6, 'XM2we vs Pulsar X2 Wireless ', 'Endgame Gear XM2we vs Pulsar X2 Wireless – Đâu mới là mẫu chuột “SuperLight Killer” chuẩn nhất ?', '1695905416-news-news5.jpg', 'Endgame Gear XM2we vs Pulsar X2 Wireless được xem là 2 “siêu phẩm” – mệnh danh là “SuperLight Killer” khi so sánh với một sản phẩm nổi tiếng từ nhà Logitech. Nhưng không phải tự nhiên mà 2 mẫu chuột lại được đặt cho một biệt danh “mỹ miều” như nhiều anh em cả trong nước và nước ngoài bàn luận thì cùng xem qua tại Gearshop để hiểu về 2 em này nhé.\r\nĐược xem là mẫu chuột hủy diệt SuperLight – Mẫu chuột không dây đến từ nhà Logitech với form cầm đối xứng, phù hợp cho đa dạng kiểu cầm, nhưng đặc biệt và phù hợp nhất vẫn là form cầm Claw Grip hoặc Finger Grip.\r\nĐược tinh giản hết mức tối đa, để giúp chuột thực hiện đúng mục đích chính của minh. Số lượng nút bấm cũng tương đương trên cả 2 mẫu sản phẩm Pulsar vs Endgame Gear, mặt trên được làm tinh gọn và tỉ mỉ hơn, bao gồm các nút bấm cơ bản nhất: chỉ có chuột trái phải, con lăn, bên cạnh có 2 nút back và forward\r\nThiết kế nút bấm của pulsar có phần lõm vào ở 2 đầu ngón tay, trong khi đó Endgame thì tròn đều theo thiết kế chung của chuột.\r\nKhông phải tự nhiên cùng chung thiết kế mà Pulsar X2 lại có trọng lượng nhẹ hơn ~10gr so với Endgame. Lý do chính nằm ở mặt dưới của Pulsar có sự khác biệt lớn khi Pulsar đã khoét bớt 1 số lỗ để làm giảm trọng lượng chuột hơn và lộ ra bảng mạch nhìn rất hiện đại và theo xu hướng “khoe nội thất bên trong các thiết bị công nghệ” hiện nay, các bạn đừng lo lắng sợ vô nước vì nhà sản xuất công bố chuột có khả năng kháng nước nhẹ, cũng như cũng nằm ở mặt sau của chuột', '2023-09-28 12:50:16', 0),
(7, 'sony', 'Lộ tin toàn bộ hệ thống của Sony đã bị hack bởi một nhóm ransomware “mới nhú”', '1695905561-news-news7.jpg', 'Nhóm Ransomed.vc tuyên bố là họ đã truy cập được khoảng 6000 tập tin của Sony.\r\n\r\nTrên dark web có một nhóm ransomware mới xuất hiện tên là Ransomed.vc, và họ tuyên bố là đã xâm nhập được toàn bộ hệ thống của Sony. Ransomed.vc chỉ mới hoạt động hồi tháng 9/2023 thôi, và có thông tin cho rằng nhóm này có mối liên kết với các diễn đàn và nhóm dark web trước đây. Ransomed.vc nói rằng họ sẽ không tống tiền Sony, mà họ sẽ bán những dữ liệu này, do Sony không muốn trả tiền chuộc.\r\nTrang Cyber Security Connect cho biết đợt hack lần này đã để lộ những tấm hình screenshot chụp trang đăng nhập nội bộ của Sony, slide trình chiếu PowerPoint nội bộ với các chi tiết về hệ thống test bench, vài tập tin Java, và một cây tài liệu chứa 6000 tập tin bị hack. 6000 tập tin này bao gồm rất nhiều thứ, chẳng hạn như những tập tin “build log”, tài nguyên về Java, dữ liệu HTML, vân vân. Nhiều tập tin được viết bằng tiếng Nhật.\r\nĐiều thú vị là Ransomed.vc có vẻ như là một tổ chức chuyên cung cấp dịch vụ ransomware. Điều đó có nghĩa là song song với các đợt hack lớn nhắm vào những công ty nổi tiếng, Ransomed.vc còn hợp tác với các bên khác để báo cáo về những lỗ hổng trong hệ thống của họ. Theo Cyber Security Connect, Ransomed.vc còn lợi dụng pháp luật để chèn ép nạn nhân.\r\n\r\nMặc dù Ransomed.vc chưa đưa ra giá bán cụ thể, họ có để lại thông tin liên lạc cho Sony và ngày “post date” là 28/09/2023. Đây có thể là ngày mà Ransomed.vc sẽ đăng tất cả lên trên mạng. Về phía Sony thì họ vẫn đang điều tra và chưa có phản hồi gì về vụ này.', '2023-09-28 12:52:41', 0);

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
(24, NULL, 'phùng tiến hào', 'hn', 338680362, 'haotienphung@gmail.com', '', 7500000, 0, '2023-09-28 02:54:54', NULL),
(25, NULL, 'phùng tiến hào', 'hn', 338680362, 'haotienphung@gmail.com', '', 10300000, 0, '2023-09-28 02:58:48', NULL);

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
(24, 14, 1),
(25, 11, 1),
(25, 12, 1);

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
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
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
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

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
