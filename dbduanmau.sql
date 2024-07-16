-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 15, 2023 lúc 11:52 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `du_an_mau`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `member`
--

CREATE TABLE `member` (
  `ID` int(10) NOT NULL,
  `User` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Tel` varchar(15) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Role` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `member`
--

INSERT INTO `member` (`ID`, `User`, `Password`, `Email`, `Tel`, `Address`, `Role`) VALUES
(1, 'Admin', 'Maiyeuem12', 'Nguyenduong0782004@gmail.com ', '0876552004', 'Xuân Phương, Thành Phố Hà Nội', 1),
(99, 'Neymar', 'Maiyeuem12', 'Nguyenduong708204@gmail.com ', '0876552004', 'Xuân Phương, Thành Phố Hà Nội', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_comment`
--

CREATE TABLE `tb_comment` (
  `ID` int(10) NOT NULL,
  `content` varchar(255) NOT NULL,
  `ID_user` int(10) NOT NULL,
  `ID_pro` int(10) NOT NULL,
  `Date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_comment`
--

INSERT INTO `tb_comment` (`ID`, `content`, `ID_user`, `ID_pro`, `Date`) VALUES
(61, 'vvdfvf', 1, 163, '10:41:45am 15/10/2023'),
(62, 'fdf', 1, 171, '10:42:06am 15/10/2023'),
(63, 'tốt', 99, 162, '11:25:05am 15/10/2023');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_danhmuc`
--

CREATE TABLE `tb_danhmuc` (
  `ID_danhmuc` int(11) NOT NULL,
  `Ten_danhmuc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_danhmuc`
--

INSERT INTO `tb_danhmuc` (`ID_danhmuc`, `Ten_danhmuc`) VALUES
(49, 'Oppo'),
(50, 'Samsung'),
(51, 'Xiaomi'),
(53, 'Apple');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_sanpham`
--

CREATE TABLE `tb_sanpham` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Price` varchar(11) DEFAULT NULL,
  `Image` varchar(255) DEFAULT NULL,
  `Mota` text DEFAULT NULL,
  `View` int(11) DEFAULT 0,
  `ID_dm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_sanpham`
--

INSERT INTO `tb_sanpham` (`ID`, `Name`, `Price`, `Image`, `Mota`, `View`, `ID_dm`) VALUES
(139, 'Samsung Galaxy Z Flip5 256GB | Bản Đặc Biệt', '17.000.900', 'd4a672c5-4709-4056-9f7f-72d6d70c2c1d_1_1.jpg', 'Samsung Galaxy Z Flip 5 có thiết kế màn hình rộng 6.7 inch và độ phân giải Full HD+ (1080 x 2640 Pixels), dung lượng RAM 8GB, bộ nhớ trong 256GB. Màn hình Dynamic AMOLED 2X của điện thoại này hiển thị rõ nét và sắc nét, mang đến trải nghiệm ấn tượng khi sử dụng.', 100, 50),
(144, 'Samsung Galaxy S23 Ultra 256GB | Độc Quyền', '22.800.000', 'galaxys23ultra_front_green_221122_2.jpg', 'Sau sự đổ bộ thành công của Samsung Galaxy S22 những chiếc điện thoại dòng Flagship tiếp theo - Điện thoại Samsung Galaxy S23 Ultra là đối tượng được Samfans hết mực săn đón. Kiểu dáng thanh lịch sang chảnh kết hợp với những bước đột phá trong công nghệ đã kiến tạo nên siêu phẩm Flagship nhà Samsung.', 50, 50),
(146, 'Xiaomi Redmi Note 11 Pro Plus 5G | Độc Quyền', '7.000', '11-pro-plus-blue-qoc-quy.jpg', 'Redmi Note 11 Pro Plus chính là mẫu smartphone tầm trung tiếp theo được Xiaomi cho ra mắt với giá hấp dẫn cùng với thiết kế mới tinh tế, cấu hình mạnh mẽ và cụm camera chất lượng cao cho trải nghiệm nhiếp ảnh đầy hứa hẹn.', 8, 51),
(152, 'Xiaomi Redmi Note 12 Pro 5G Chính Hãng', '8.500.000', 'gtt7766.jpg', 'Xiaomi Redmi Note 12 Pro sở hữu cấu hình vượt trội gồm chip MediaTek Dimensity 1080, hệ thống ba camera với cảm biến chính 50MP và mạng 5G. Ngoài ra, màn hình Note 12 Pro 5G có kích thước khá lớn khoảng 6.67 inch, tấm nền AMOLED, tần số quét 120Hz khiến chiếc điện thoại nổi bật trong tầm giá dưới 8 triệu.', 80, 51),
(153, 'Xiaomi Redmi Note 12 8GB 128GB | Chính Hãng VNA', '5.500.000', '_76666_7__3.jpg', 'Xiaomi Redmi Note 12 8GB 128GB tỏa sáng với diện mạo viền vuông cực thời thượng cùng hiệu suất mạnh mẽ nhờ sở hữu con chip Snapdragon 685 ấn tượng. Chất lượng hiển thị hình ảnh của Redmi Note 12 Vàng cũng khá sắc nét thông qua tấm nền AMOLED 120Hz hiện đại. Chưa hết, máy còn sở hữu cụm 3 camera với độ rõ nét lên tới 50MP cùng viên pin 5000mAh và s ạc nhanh 33W giúp đáp ứng được mọi nhu cầu sử dụng của người dùng.', 9, 51),
(154, 'iPhone 14 128GB | Chính hãng VN/A', '19.700.000', 'iphone-14-storage.jpg', 'Tuyệt đỉnh thiết kế, tỉ mỉ từng đường nét - Nâng cấp toàn diện với kiểu dáng mới, nhiều lựa chọn màu sắc trẻ trung\r\nNâng tầm trải ngiệm giải trí đỉnh cao - Màn hình 6,1\"\" cùng tấm nền OLED có công nghệ Super Retina XDR cao cấp\r\nChụp ảnh chuyên nghiệp hơn - Cụm 2 camera 12 MP đi kèm nhiều chế độ và chức năng chụp hiện đại\r\nHiệu năng hàng đầu thế giới - Apple A15 Bionic 6 nhân xử lí nhanh, ổn định', 14, 53),
(155, 'iPhone 14 Pro 256GB | Chính hãng VN/A', '24.800.000', 'iphone14.jpg', 'Màn hình Dynamic Island - Sự biến mất của màn hình tai thỏ thay thế bằng thiết kế viên thuốc, OLED 6,7 inch, hỗ trợ always-on display\r\nCấu hình iPhone 14 Pro Max mạnh mẽ, hiệu năng cực khủng từ chipset A16 Bionic\r\nLàm chủ công nghệ nhiếp ảnh - Camera sau 48MP, cảm biến TOF sống động\r\nPin liền lithium-ion kết hợp cùng công nghệ sạc nhanh cải tiến', 1, 53),
(156, 'iPhone 15 Pro 256GB | Chính hãng VN/A', '32.900.000', 'iphone-15-pro.jpg', 'Thiết kế khung viền từ titan chuẩn hàng không vũ trụ - Cực nhẹ, bền cùng viền cạnh mỏng cầm nắm thoải mái\r\nHiệu năng Pro chiến game thả ga - Chip A17 Pro mang lại hiệu năng đồ họa vô cùng sống động và chân thực\r\nThoả sức sáng tạo và quay phim chuyên nghiệp - Cụm 3 camera sau đến 48MP và nhiều chế độ tiên tiến\r\nNút tác vụ mới giúp nhanh chóng kích hoạt tính năng yêu thích của bạn', 0, 53),
(160, 'OPPO Reno8 Pro 5G 12GB 256GB | Độc Quyền', '14.000.000', 'oppo_reno8_pro_1.jpg', 'OPPO Reno8 Pro là một trong những sản phẩm thuộc series tiếp theo mà OPPO mong muốn mang tới cho người dùng. Mang trên mình thiết kế cực đỉnh cùng hiệu năng cực chất, bên cạnh đó là những nâng cấp cực chất về camera chắc chắn sẽ giúp người dùng có những trải nghiệm cực đã.', 0, 49),
(162, 'iPhone 15 Plus 128GB | Chính hãng VN/A', '26.000.000', 'vn_iphone_15.jpg', 'iPhone 15 Plus được đánh giá cao bởi màn hình Dynamic Island 6.7 inch với mặt kính lưng pha màu ấn tượng, chip A16 Bionic mạnh mẽ cùng cổng sạc USB-C cho khả năng sạc đầy nhanh chóng. Ngoài ra, phiên bản Plus thuộc series iPhone 15 còn sở hữu 5 phiên bản màu pastel thanh lịch phù hợp với nhiều đối tượng khách hàng: hồng, vàng, xanh lá, xanh dương, đen. Xem thêm các thông tin hữu ích khác về điện thoại iPhone 15 Plus sau đây!', 0, 53),
(163, 'Samsung Galaxy Z Fold5 12GB 256GB', '37.900.000', 'galaxy-z-fold-5-xanh-1.jpg', 'Samsung Galaxy Z Fold5 12GB 256GB tạo nên trải nghiệm xử lý tác vụ siêu mượt mà thông qua chipset Snapdragon 8 Gen 2 đỉnh cao cùng dung lượng RAM lên tới 12GB. Máy được trang bị công nghệ màn hình Dynamic AMOLED 2X 120Hz với kích thước có thể lên tới 7.6 inch khi mở, đem lại trải nghiệm hình ảnh sắc nét trong từng điểm ảnh. Bên cạnh đó, phân khúc smartphone gập này còn sở hữu cụm camera hiện đại với độ sắc nét đạt tới 50MP cùng viên pin 4400mAh.', 0, 50),
(171, 'OPPO Reno8 Pro 5G 12GB 256GB | Chính Hãng', '13.990.000', 'reno6-1_1.jpg', 'Thiết kế ấn tượng, màu sắc cá tính - Thiết kế tràn viền, mỏng nhẹ chỉ 182g\r\nTăng tốc kết nối, dẫn đầu xu hướng - Dimensity 900 5G (6 nm) mạnh mẽ, kết nối 5G siêu nhanh\r\nChuyên gia nhiếp ảnh chân dung - Bộ 3 camera lên tới 64 MP, sắc nét, ấn tượng\r\nMàn hình lớn, sắc nét với tốc độ làm mới cao - Màn hình AMOLED 6.43 inch Full HD, 90Hz\r\nDung lượng pin lớn, công nghệ sạc nhanh hiện đại - Viên pin 4300mAh, sạc nhanh 65W', 0, 49);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `tb_comment`
--
ALTER TABLE `tb_comment`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `tb_danhmuc`
--
ALTER TABLE `tb_danhmuc`
  ADD PRIMARY KEY (`ID_danhmuc`);

--
-- Chỉ mục cho bảng `tb_sanpham`
--
ALTER TABLE `tb_sanpham`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `lk_sanpham_danhmuc` (`ID_dm`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `member`
--
ALTER TABLE `member`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT cho bảng `tb_comment`
--
ALTER TABLE `tb_comment`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT cho bảng `tb_danhmuc`
--
ALTER TABLE `tb_danhmuc`
  MODIFY `ID_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- AUTO_INCREMENT cho bảng `tb_sanpham`
--
ALTER TABLE `tb_sanpham`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tb_sanpham`
--
ALTER TABLE `tb_sanpham`
  ADD CONSTRAINT `lk_sanpham_danhmuc` FOREIGN KEY (`ID_dm`) REFERENCES `tb_danhmuc` (`ID_danhmuc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
