-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 20, 2021 lúc 04:04 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `phone`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `idBL` int(11) NOT NULL,
  `noiDungBl` varchar(2000) NOT NULL,
  `idDT` int(11) DEFAULT NULL,
  `idUser` int(11) DEFAULT NULL,
  `thoiDiemBL` date DEFAULT NULL,
  `anHien` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`idBL`, `noiDungBl`, `idDT`, `idUser`, `thoiDiemBL`, `anHien`) VALUES
(1, 'đẹp', 93, 4, '2021-02-01', 1),
(38, 'quá đẹp', 93, 5, '2021-02-22', 0),
(49, 'nice', 92, 4, '2021-03-02', 0),
(50, 'nice', 92, 4, '2021-03-02', 0),
(53, 'hehe', 92, 4, '2021-03-03', 0),
(54, 'minh', 92, 4, '2021-03-03', 0),
(55, 'dưqd', 98, 4, '2021-05-20', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dienthoai`
--

CREATE TABLE `dienthoai` (
  `idDT` int(11) NOT NULL,
  `tenDT` varchar(100) NOT NULL,
  `gia` int(11) DEFAULT NULL,
  `giaKM` int(11) DEFAULT NULL,
  `urlHinh` varchar(200) DEFAULT NULL,
  `thoiDiemNhap` timestamp NULL DEFAULT current_timestamp(),
  `moTa` varchar(4000) DEFAULT NULL,
  `soLanXem` int(11) NOT NULL DEFAULT 0,
  `soLanMua` int(11) NOT NULL DEFAULT 0,
  `hot` tinyint(1) NOT NULL DEFAULT 0,
  `idNSX` int(11) DEFAULT NULL,
  `anHien` tinyint(1) NOT NULL DEFAULT 0,
  `soLuongTonKho` int(11) NOT NULL DEFAULT 0,
  `slug` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `dienthoai`
--

INSERT INTO `dienthoai` (`idDT`, `tenDT`, `gia`, `giaKM`, `urlHinh`, `thoiDiemNhap`, `moTa`, `soLanXem`, `soLanMua`, `hot`, `idNSX`, `anHien`, `soLuongTonKho`, `slug`) VALUES
(92, 'Samsung Galaxy M51111', 9490111, 8490111, 'samsung-galaxy-m51.jpg', '0000-00-00 00:00:00', '<p>1Samsung lại tiếp tục cho ra mắt chiếc smartphone mới thuộc thế hệ Galaxy M với t&ecirc;n gọi l&agrave; Samsung Galaxy M51. Thiết kế mới n&agrave;y tuy nằm trong ph&acirc;n kh&uacute;c tầm trung nhưng được Samsung n&acirc;ng cấp v&agrave; cải tiến với camera g&oacute;c si&ecirc;u rộng, dung lượng pin si&ecirc;u khủng c&ugrave;ng vẻ ngo&agrave;i sang trọng v&agrave; thời thượng.<br />Thiết kế hiện đại v&agrave; đẳng cấp.<br />Ấn tượng ban đầu với m&agrave;n h&igrave;nh của Galaxy M51 l&agrave; kiểu m&agrave;n h&igrave;nh Infinity-O rộng 6.7 inch. Kiểu thiết kế n&agrave;y đưa camera selfie thu gọn hơn chỉ bằng một h&igrave;nh tr&ograve;n nhỏ c&ugrave;ng thiết kế m&agrave;n h&igrave;nh tr&agrave;n viền l&agrave;m tăng khả năng hiển thị h&igrave;nh ảnh hơn.</p>', 492, 145, 0, 18, 0, 0, NULL),
(93, 'Realme C15', 4190000, 3990000, 'realme-c15.jpg', '2021-01-14 17:00:00', 'Realme vừa cho ra mắt sản phẩm mới nhất là Realme C15 với mức giá vô cùng phải chăng. Chiếc điện thoại thông minh này đi kèm 4 camera sau và dung lượng pin lên đến 6000 mAh sẵn sàng đồng hành cùng bạn trong mọi lúc.<br>Thiết kế hiện đại, ấn tượng<br>Realme C15 sở hữu thiết kế bằng nhựa cao cấp, kích thước lớn vừa phải cùng các góc cạnh được bo tròn mềm mại cho cảm giác cầm nắm khá thoải mái cũng như dễ cho vào ví hay túi quần.', 360, 97, 0, 22, 0, 5, NULL),
(94, 'Vivo Y51 (2020)', 6290000, 5990000, 'vivo-y51-bac.jpg', '2021-01-14 17:00:00', 'Vivo đã mang chiếc điện thoại Vivo Y51 một lần nữa quay trở lại với người dùng trong một thiết kế hoàn toàn mới, nâng cấp từ công nghệ màn hình, cụm camera đến hệ điều hành với tên gọi Vivo Y51 (2020).<br>Màn hình rộng với màu sắc rực rỡ<br>Y51 2020 sở hữu màn hình 6.58 inch độ phân giải 1080 x 2408 Pixels, có độ tương phản cao đem đến cho người dùng những trải nghiệm hình ảnh chân thực, màu sắc rực rỡ giúp việc sử dụng ứng dụng giải trí trên điện thoại trở nên cuốn hút hơn. ', 462, 214, 1, 21, 1, 2, NULL),
(98, 'Samsung Galaxy Note 20 Ultra 5G Trắng', 32990000, 29990000, 'samsung-galaxy-note-20-ultra-trang-new.jpg', '2021-01-14 17:00:00', 'Samsung Galaxy Note 20 Ultra 5G Trắng mẫu flagship hàng đầu của Samsung hoàn hảo về mọi mặt, từ thiết kế sang trọng đẳng cấp cho đến hiệu năng cực khủng ẩn chứa bên trong. Đặc biệt hơn cả là chiếc bút S Pen đầy “quyền năng” của dòng Note giờ đây cũng đã được nâng lên một tầm cao mới.<br>Thiết kế đẳng cấp xứng tầm siêu phẩm<br>Samsung Galaxy Note 20 Ultra 5G sở hữu một thiết kế đẹp như một tuyệt tác. Samsung đã tối ưu mọi trải nghiệm với kiểu thiết kế tối giản với phần khung nhôm và 2 mặt kính cao cấp, 4 góc sắc cạnh làm tăng sự mạnh mẽ nam tính, nhưng vẫn cho cảm giác cầm nắm dễ chịu và đẳng cấp nhờ 2 cạnh viền được bo cong tinh tế khéo léo.', 804, 463, 1, 18, 1, 593, 'samsung-galaxy-note-20-ultra-trang-new-98'),
(110, 'OPPO Find X2', 23991100, 19990000, 'oppo-find-x2-blue.jpg', '0000-00-00 00:00:00', '<p>Tiếp nối th&agrave;nh c&ocirc;ng vang dội của thế hệ Find X, OPPO ch&iacute;nh thức ra mắt Find X2 với những đường n&eacute;t thanh lịch từ thiết kế phần cứng cho đến trải nghiệm phần mềm, hứa hẹn một vẻ đẹp ho&agrave;n hảo, một sức mạnh xứng tầm.<br />Trải nghiệm thị gi&aacute;c tuyệt vời<br />Find X2 sở hữu m&agrave;n h&igrave;nh AMOLED Ultra Vision cao cấp với k&iacute;ch thước l&ecirc;n đến 6.78 inch c&ugrave;ng độ ph&acirc;n giải 2K+ cực n&eacute;t được bảo vệ bằng k&iacute;nh cường lực Corning Gorilla Glass 6 cao cấp.</p>', 126117, 41, 1, 18, 1, 59, NULL),
(111, 'Samsung Galaxy S20+', 23990000, 19890000, 'samsung-galaxy-s20-plus-xam.jpg', '2021-01-14 17:00:00', 'Chiếc điện thoại Samsung Galaxy S20 Plus - Siêu phẩm với thiết kế màn hình tràn viền, hiệu năng đỉnh cao kết hợp cùng nhiều đột phá về công nghệ dẫn đầu thế giới smartphone.<br>Thiết kế màn hình tràn viền, siêu mượt 120 Hz<br>Thiết kế của chiếc điện thoại Samsung Galaxy S20 Plus là kính kết hợp độc đáo giữa với khung kim loại cùng mặt lưng kính cường lực Gorilla Glass 6 thế hệ mới nhất cho khả năng chống chịu trầy xước và va đập tốt. ', 485, 230, 1, 18, 1, 600, 'Samsung-Galaxy- S20+-111'),
(113, 'Vsmart Aris Pro', 9990000, 8990000, 'vsmart-aris-pro.jpg', '2021-01-14 17:00:00', 'Thương hiệu smartphone Việt - Vsmart đã chính thức trình làng Vsmart Aris Pro. Sự ra mắt mẫu điện thoại này đánh dấu một bước ngoặc lớn trong làng smartphone với công nghệ camera ẩn trong màn hình, mức giá hợp lý giúp người Việt có cơ hội tiếp cận những công nghệ mới nhất hiện nay.<br>Camera selfie ẩn, đỉnh cao của thiết kế màn hình tràn viền<br>Aris Pro là một trong những dòng điện thoại đầu tiên được trang bị camera selfie với công nghệ ẩn sau màn hình độc đáo, tạo nên một màn hình liền mạch, không còn khiếm khuyết “đục lỗ” hay “giọt nước”.', 371, 154, 0, 23, 0, 144, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `idDH` int(11) NOT NULL,
  `thoiDiemDatHang` date NOT NULL,
  `thoiDiemGiaoHang` date DEFAULT NULL,
  `idUser` int(11) DEFAULT NULL,
  `tenNguoiNhan` varchar(255) DEFAULT NULL,
  `emailNguoiNhan` varchar(255) DEFAULT NULL,
  `diaChiNguoiNhan` varchar(255) DEFAULT NULL,
  `anHien` tinyint(1) DEFAULT 1,
  `trangThai` varchar(255) NOT NULL DEFAULT '0',
  `ghiChuCuaKhach` varchar(255) DEFAULT NULL,
  `ghiChuCuaAdmin` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`idDH`, `thoiDiemDatHang`, `thoiDiemGiaoHang`, `idUser`, `tenNguoiNhan`, `emailNguoiNhan`, `diaChiNguoiNhan`, `anHien`, `trangThai`, `ghiChuCuaKhach`, `ghiChuCuaAdmin`) VALUES
(72, '0000-00-00', NULL, 4, 'Nguyễn Huỳnh Minh', 'nguyenhuynhminh11082k1@gmail.com', 'Hồ Chí Minh', 1, '1', 'ưqdw', NULL),
(73, '0000-00-00', NULL, 4, 'Minh', 'ninh714561@gmail.com', 'Vũng Tàu', 1, '1', 'q', NULL),
(74, '0000-00-00', NULL, 4, 'Nguyễn Huỳnh Minh', 'nguyenhuynhminh11082k1@gmail.com', 'Quận 1, Hồ Chí Minh', 1, '0', 'a', NULL),
(75, '0000-00-00', NULL, 4, 'Minh', 'nguyenhuynhminh11082k1@gmail.com', 'Quận 2, Hồ Chí Minh', 1, '0', 'y', NULL),
(76, '2021-03-03', NULL, 4, 'Nguyễn Huỳnh Minh', 'nguyenhuynhminh11082k1@gmail.com', 'Quận 1, Hồ Chí Minh', 1, '0', 'q', NULL),
(79, '2021-03-03', NULL, 4, 'Nguyễn Huỳnh Minh', 'nguyenhuynhminh11082k1@gmail.com', 'Quận 2, Hồ Chí Minh', 1, '0', '', NULL),
(80, '2021-03-03', NULL, 4, 'Nguyễn Huỳnh Minh', 'nguyenhuynhminh11082k1@gmail.com', 'Quận 2, Hồ Chí Minh', 1, '0', 'a', NULL),
(81, '2021-03-07', NULL, 4, 'a', 'nguyenhuynhminh11082k1@gmail.com', 'Quận 2, Hồ Chí Minh', 1, '0', '', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhangchitiet`
--

CREATE TABLE `donhangchitiet` (
  `idCT` int(11) NOT NULL,
  `idDH` int(11) NOT NULL,
  `idDT` int(11) DEFAULT NULL,
  `tenDT` varchar(100) NOT NULL,
  `soLuong` int(11) NOT NULL,
  `gia` float NOT NULL,
  `urlHinh` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `donhangchitiet`
--

INSERT INTO `donhangchitiet` (`idCT`, `idDH`, `idDT`, `tenDT`, `soLuong`, `gia`, `urlHinh`) VALUES
(19, 72, 92, 'Samsung Galaxy M51111', 2, 9490110, NULL),
(20, 73, 94, 'Vivo Y51 (2020)', 2, 6290000, NULL),
(21, 74, 93, 'Realme C15', 4, 4190000, NULL),
(22, 75, 94, 'Vivo Y51 (2020)', 1, 6290000, NULL),
(23, 75, 98, 'Samsung Galaxy Note 20 Ultra 5G Trắng', 1, 32990000, NULL),
(24, 76, 94, 'Vivo Y51 (2020)', 2, 6290000, NULL),
(25, 76, 98, 'Samsung Galaxy Note 20 Ultra 5G Trắng', 1, 32990000, NULL),
(27, 79, 92, 'Samsung Galaxy M51111', 1, 9490110, NULL),
(28, 80, 92, 'Samsung Galaxy M51111', 1, 9490110, NULL),
(29, 81, 94, 'Vivo Y51 (2020)', 1, 6290000, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhasanxuat`
--

CREATE TABLE `nhasanxuat` (
  `idNSX` int(11) NOT NULL COMMENT 'Mã nhà sản xuất\r\n',
  `tenNSX` varchar(50) NOT NULL COMMENT 'Tên nhà sản xuất',
  `thuTu` int(11) DEFAULT NULL COMMENT 'Thứ tư',
  `anhien` tinyint(1) DEFAULT 1 COMMENT 'Ẩn hiện',
  `urlHinhNSX` varchar(200) DEFAULT NULL,
  `slug` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nhasanxuat`
--

INSERT INTO `nhasanxuat` (`idNSX`, `tenNSX`, `thuTu`, `anhien`, `urlHinhNSX`, `slug`) VALUES
(18, 'SAMSUNG', 2, 1, 'nsx_samsung.jpg', 'SAMSUNG'),
(19, 'OPPO', 3, 1, 'nsx_oppo.jpg', 'OPPO'),
(20, 'XIAOMI', 4, 1, 'nsx_xiaomi.jpg', 'XIAOMI'),
(21, 'VIVO', 5, 1, 'nsx_vivo.jpg', 'VIVO'),
(22, 'REALME', 6, 1, 'nsx_realme.PNG', 'REALME'),
(23, 'Vsmart', 7, 1, 'nsx_vsmart.PNG', 'Vsmart'),
(25, 'HUAWEI', 8, 1, 'nsx_huawei.jpg', 'HUAWEI'),
(30, 'Iphone', 1, 2, 'nsx_apple.jpg', 'Iphone');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuoctinhdt`
--

CREATE TABLE `thuoctinhdt` (
  `idDT` int(11) NOT NULL,
  `manHinh` varchar(50) DEFAULT NULL,
  `heDieuHanh` varchar(50) DEFAULT NULL,
  `cameraSau` varchar(50) DEFAULT NULL,
  `cameraTruoc` varchar(50) DEFAULT NULL,
  `CPU` varchar(50) DEFAULT NULL,
  `Ram` varchar(50) NOT NULL,
  `boNhoTrong` varchar(50) DEFAULT NULL,
  `theNho` varchar(50) DEFAULT NULL,
  `theSim` varchar(50) DEFAULT NULL,
  `dungLuongPin` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thuoctinhdt`
--

INSERT INTO `thuoctinhdt` (`idDT`, `manHinh`, `heDieuHanh`, `cameraSau`, `cameraTruoc`, `CPU`, `Ram`, `boNhoTrong`, `theNho`, `theSim`, `dungLuongPin`) VALUES
(92, 'Super AMOLED Plus, 6.6', 'Android 10', 'Chính 64 MP & Phụ 12 MP, 5 MP, 5 MP', '32 MP', '', '', '', '', '', ''),
(93, 'IPS LCD, 6.5', 'Android 10', 'Chính 13 & Phụ 8 MP, 2 MP, 2 MP', '8 MP', '', '', '', '', '', ''),
(94, 'IPS LCD, 6.58', 'Android 11', 'Chính 48 MP & Phụ 8 MP, 2 MP', '16 MP', 'Snapdragon 662 8 nhân', '8 GB', '128 GB', 'MicroSD, hỗ trợ tối đa 1 TB', '2 Nano SIM (SIM 2 chung khe thẻ nhớ), Hỗ trợ 4G', '5000 mAh, có sạc nhanh'),
(98, 'Dynamic AMOLED 2X, 6.9\", Quad HD+ (2K+)', 'Android 10', 'Chính 108 MP & Phụ 12 MP, 12 MP, cảm biến Laser AF', '10 MP', 'Exynos 990 8 nhân', '12 GB', '256 GB', 'MicroSD, hỗ trợ tối đa 1 TB', '2 Nano SIM hoặc 1 Nano SIM + 1 eSIM, Hỗ trợ 5G', '4500 mAh, có sạc nhanh'),
(110, 'AMOLED, 6.78\", Quad HD+ (2K+)', 'Android 10', 'Chính 48 MP & Phụ 13 MP, 12 MP', '32 MP', 'Snapdragon 865 8 nhân', '12 GB', '256 GB', '', '2 Nano SIM, Hỗ trợ 5G', '4200 mAh, có sạc nhanh'),
(111, 'Dynamic AMOLED 2X, 6.7\", Quad HD+ (2K+)', 'Android 10', 'Chính 12 MP & Phụ 64 MP, 12 MP, TOF 3D', '10 MP', 'Exynos 990 8 nhân', '8 GB', '128 GB', 'MicroSD, hỗ trợ tối đa 1 TB', '2 Nano SIM hoặc 1 Nano SIM + 1 eSIM, Hỗ trợ 4G', '4500 mAh, có sạc nhanh'),
(113, 'AMOLED, 6.39\", Full HD+', 'Android 10', 'Chính 64 MP & Phụ 8 MP, 8 MP, 2 MP', '20 MP', 'Snapdragon 730 8 nhân', '8 GB', '128 GB', NULL, '2 Nano SIM, Hỗ trợ 4G', '4000 mAh, có sạc nhanh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `idUser` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hoTen` varchar(50) NOT NULL,
  `kichHoat` tinyint(1) DEFAULT NULL,
  `urlHinh` varchar(200) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `vaiTro` tinyint(1) NOT NULL DEFAULT 0,
  `anHien` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`idUser`, `userName`, `password`, `hoTen`, `kichHoat`, `urlHinh`, `email`, `vaiTro`, `anHien`) VALUES
(1, 'admin', '123', 'Nguyễn Huỳnh Minh', 1, NULL, 'nguyenhuynhminh11082k1@gmail.com', 1, 1),
(4, 'minh', '1271', 'Nguyễn Huỳnh Minh', 1, NULL, 'ninh714561@gmail.com', 0, 1),
(5, 'nhat', '654321', 'Nguyễn Thị Long Nhật', 1, NULL, 'nhat@gmail.com', 0, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`idBL`),
  ADD KEY `fk_iduser_binhluan` (`idUser`);

--
-- Chỉ mục cho bảng `dienthoai`
--
ALTER TABLE `dienthoai`
  ADD PRIMARY KEY (`idDT`),
  ADD KEY `idNSX` (`idNSX`) USING BTREE;

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`idDH`),
  ADD KEY `fk_idUser_donhang` (`idUser`);

--
-- Chỉ mục cho bảng `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  ADD PRIMARY KEY (`idCT`),
  ADD KEY `fk_donhangchitiet` (`idDH`);

--
-- Chỉ mục cho bảng `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  ADD PRIMARY KEY (`idNSX`);

--
-- Chỉ mục cho bảng `thuoctinhdt`
--
ALTER TABLE `thuoctinhdt`
  ADD PRIMARY KEY (`idDT`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `username` (`userName`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `idBL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT cho bảng `dienthoai`
--
ALTER TABLE `dienthoai`
  MODIFY `idDT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `idDH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT cho bảng `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  MODIFY `idCT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  MODIFY `idNSX` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã nhà sản xuất\r\n', AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `fk_iduser_binhluan` FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `dienthoai`
--
ALTER TABLE `dienthoai`
  ADD CONSTRAINT `nhasanxuat_ibfk_1` FOREIGN KEY (`idNSX`) REFERENCES `nhasanxuat` (`idNSX`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `fk_idUser_donhang` FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  ADD CONSTRAINT `fk_donhangchitiet` FOREIGN KEY (`idDH`) REFERENCES `donhang` (`idDH`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `thuoctinhdt`
--
ALTER TABLE `thuoctinhdt`
  ADD CONSTRAINT `dienthoai_ibfk_1` FOREIGN KEY (`idDT`) REFERENCES `dienthoai` (`idDT`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
