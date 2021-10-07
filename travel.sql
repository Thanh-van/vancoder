-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 07, 2021 lúc 04:04 PM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `travel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cat_parent` int(10) NOT NULL,
  `sort` int(11) NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `cat_parent`, `sort`, `status`) VALUES
(1, 'Home', 0, 2, '0'),
(3, 'Địa điểm', 0, 1, '0'),
(4, 'Hà Nội', 3, 0, '0'),
(5, 'Hà Giang', 3, 1, '0'),
(6, 'Quảng Ninh', 3, 2, '0'),
(7, 'Ninh Bình', 3, 3, '0'),
(8, 'Lào Cai', 3, 4, '0'),
(9, 'Bắc kan', 3, 5, '0'),
(10, 'Vĩnh Phúc', 3, 6, '0'),
(11, 'Hải Phòng', 3, 7, '0'),
(12, 'Hòa Bình', 3, 7, '0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `id` int(10) NOT NULL,
  `id_category` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`id`, `id_category`, `title`, `description`, `content`, `img`, `date`, `status`) VALUES
(5, 'a:2:{i:0;s:1:\"3\";i:1;s:1:\"6\";}', ' Cô Tô – QN', 'Cô Tô được nhiều người xem là hòn đảo đẹp nhất QN', '', 'coto-qn.jpg', '2021-10-06', 1),
(6, 'a:2:{i:0;s:1:\"3\";i:1;s:1:\"6\";}', 'Hạ Long-QN', 'Hạ long là nơi du lịch nổi tiếng ở QN', '<ol>\r\n	<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, eius mollitia suscipit, quisquam doloremque distinctio perferendis et doloribus unde architecto optio laboriosam porro adipisci sapiente officiis nemo accusamus ad praesentium?</li>\r\n</ol>\r\n', 'halong-QN.jpg', '2021-10-06', 1),
(8, 'a:2:{i:0;s:1:\"3\";i:1;s:1:\"5\";}', 'Đồng Văn-HG', 'Cao nguyên đá Đồng Văn là khu du lịch nổi tiếng HG', '<p>Cao nguy&ecirc;n đ&aacute; Đồng Văn lu&ocirc;n l&agrave; một trong những điểm&nbsp;<strong>du lịch ph&iacute;a&nbsp;Bắc</strong>&nbsp;hấp dẫn với những người y&ecirc;u phượt</p>\r\n', 'dongvan-HG.jpg', '2021-10-06', 1),
(9, 'a:2:{i:0;s:1:\"3\";i:1;s:2:\"12\";}', 'Mai Châu-HB', 'Mai châu là nơi đáng đến khi đi qua Hòa Bình ', '<p>đến với Mai Ch&acirc;u du kh&aacute;ch c&ograve;n được đắm m&igrave;nh trong những c&aacute;nh rừng b&aacute;t ng&aacute;t hoa đ&agrave;o, hoa mận</p>\r\n', 'maichau-HB.jpg', '2021-10-06', 1),
(10, 'a:2:{i:0;s:1:\"3\";i:1;s:2:\"10\";}', 'Tam Đảo-VP', 'Khu du lịch nổi tiếng ở Vĩnh Phúc', '<p>Tam Đảo c&oacute; kh&ocirc;ng kh&iacute; m&aacute;t mẻ c&ugrave;ng kh&ocirc;ng gian y&ecirc;n tĩnh, trong l&agrave;nh hiếm thấy ở một nơi n&agrave;o kh&aacute;c</p>\r\n', 'tamdao-vp.jpg', '2021-10-06', 1),
(11, 'a:2:{i:0;s:1:\"3\";i:1;s:1:\"7\";}', 'Tràng An-NB', 'Tràng An vẻ đẹp non nước hùng vĩ ở Ninh Bình', '<p><strong>Tr&agrave;ng An Ninh B&igrave;nh l&agrave; đi&ecirc;̉m đ&ecirc;́n thu h&uacute;t đ&ocirc;ng đảo du kh&aacute;ch trong v&agrave; ngo&agrave;i bởi vẻ đẹp h&ugrave;ng vĩ</strong></p>\r\n', 'trangan-nb.jpg', '2021-10-06', 1),
(12, 'a:2:{i:0;s:1:\"3\";i:1;s:2:\"11\";}', 'Cát Bà-HP', 'Khu nghỉ dưỡng nổi tiếng ở Hải Phòng', '<p>tới đ&acirc;y du kh&aacute;ch sẽ vừa được kh&aacute;m ph&aacute; c&aacute;nh rừng nguy&ecirc;n sinh với nhiều lo&agrave;i động thực vật phong ph&uacute;, vừa được tắm m&aacute;t ở những b&atilde;i biển đẹp với l&agrave;n nước xanh m&aacute;t</p>\r\n', 'catba-hp.jpg', '2021-10-06', 1),
(13, 'a:2:{i:0;s:1:\"3\";i:1;s:1:\"4\";}', 'Hồ Gươm-HN', 'Hồ Gươm được mệnh danh là viên ngọc sáng của Thủ đ', '<h2 style=\"font-style:italic\">Nơi đ&acirc;y đ&atilde; trở th&agrave;nh điểm đến nổi tiếng thu h&uacute;t du kh&aacute;ch, gắn liền với đời sống văn h&oacute;a của người d&acirc;n H&agrave; Th&agrave;nh bao đời nay.</h2>\r\n', 'hoguom-hn.jpg', '2021-10-06', 1),
(14, 'a:2:{i:0;s:1:\"3\";i:1;s:1:\"9\";}', 'Ba Bể-BK', 'Ba Bể được mệnh danh là “thiên hạ đệ nhất hồ”', '<p>Chắc hẳn sẽ chẳng&nbsp;c&ograve;n điều g&igrave; tuyệt vời hơn khi du kh&aacute;ch tới đ&acirc;y sẽ được trải nghiệm cảm gi&aacute;c l&ecirc;nh đ&ecirc;nh giữa đ&ecirc;m tr&ecirc;n hồ để ngắm cảnh s&ocirc;ng nước, n&uacute;i non.</p>\r\n', 'babe-bk.jpg', '2021-10-06', 1),
(15, 'a:2:{i:0;s:1:\"3\";i:1;s:1:\"8\";}', 'SAPA-LC', 'Sapa nổi tiếng là nơi du lịch ở miền Bắc tuyệt đẹp', '<p>Sapa nổi tiếng l&agrave;&nbsp;<strong>địa điểm du lịch ở miền Bắc</strong>&nbsp;tuyệt đẹp với những m&agrave;n sương bao phủ quanh năm, kh&ocirc;ng kh&iacute;&nbsp;trong l&agrave;nh, những đồi ruộng bậc thang xanh m&aacute;t&nbsp;</p>\r\n', 'babe-bk.jpg', '2021-10-06', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ticket`
--

CREATE TABLE `ticket` (
  `id` int(10) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_category` int(10) NOT NULL,
  `price` int(15) NOT NULL,
  `img` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `delivery_date` date NOT NULL,
  `end_date` date NOT NULL,
  `quantity` int(10) NOT NULL,
  `sort` int(10) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ticket`
--

INSERT INTO `ticket` (`id`, `name`, `id_category`, `price`, `img`, `description`, `delivery_date`, `end_date`, `quantity`, `sort`, `status`) VALUES
(6, 'Đảo Cô Tô', 6, 1000, 'coto-qn.jpg', '', '2021-02-10', '2021-02-13', 10, 1, 1),
(7, 'Vịnh Hạ Long', 6, 900, 'halong-QN.jpg', '', '2021-05-20', '2021-05-22', 5, 1, 1),
(8, 'Cao Nguyên Đá Đồng Văn', 5, 600, 'dongvan-HG.jpg', '', '2021-09-12', '2021-09-15', 7, 2, 1),
(10, 'Tam Đảo', 10, 500, 'tamdao-vp.jpg', '', '2021-04-03', '2021-04-05', 15, 4, 1),
(11, 'Tràng An', 7, 800, 'trangan-nb.jpg', '', '2021-08-08', '2021-08-10', 8, 5, 1),
(12, 'Cắt Bà', 11, 1000, 'catba-hp.jpg', '', '2021-07-07', '2021-07-10', 10, 6, 1),
(13, 'Hồ Gươm', 4, 200, 'hoguom-hn.jpg', '', '2021-06-06', '2021-06-09', 11, 7, 1),
(14, 'Hồ Ba Bể', 9, 500, 'babe-bk.jpg', '', '2021-05-05', '2021-05-07', 7, 8, 1),
(15, 'SAPA', 8, 1200, 'sapa-lc.jpg', '', '2021-07-20', '2021-07-22', 14, 9, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `user` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sex` int(5) NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `user`, `pass`, `img`, `sex`, `phone`, `address`, `level`) VALUES
(76, 'ad', 'a', 'd', 0, '', '', 0),
(96, 'Thanh', '12312312', 'CF30C7F6-9D60-42DF-BC66-401B7232A20F.jpg', 0, '56466', 'ada', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_meta`
--

CREATE TABLE `user_meta` (
  `id` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `user_key` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_value` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user_meta`
--
ALTER TABLE `user_meta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT cho bảng `user_meta`
--
ALTER TABLE `user_meta`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
