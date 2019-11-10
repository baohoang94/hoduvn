-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 11, 2018 lúc 11:37 AM
-- Phiên bản máy phục vụ: 10.2.17-MariaDB
-- Phiên bản PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `u580680560_db`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `create_by` int(11) NOT NULL,
  `update_by` int(11) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL DEFAULT current_timestamp(),
  `hien_thi` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blog`
--

INSERT INTO `blog` (`id`, `title`, `content`, `create_by`, `update_by`, `create_at`, `update_at`, `hien_thi`) VALUES
(8, 'HODU là trang web về giáo dục', '<h3>HODU l&agrave; trang web về gi&aacute;o dục cung cấp th&ocirc;ng tin v&agrave; đ&aacute;nh gi&aacute; về h&agrave;ng trăm kh&oacute;a học, dịch vụ tại nhiều cơ sở đ&agrave;o tạo gi&aacute;o dục đa lĩnh vực kh&aacute;c nhau tr&ecirc;n địa b&agrave;n <span style=\"color:#e74c3c\">H&agrave; Nội.</span></h3>\r\n', 14, 14, '2018-06-17 22:31:29', '2018-06-17 22:31:29', 0),
(9, 'Dịch vụ kết nối giáo dục HODU của nhóm sinh viên Học viện Ngân hàng', '<p>Với mục ti&ecirc;u kết nối c&aacute;c cơ sở gi&aacute;o dục chất lượng cao với người c&oacute; nhu cầu, nh&oacute;m sinh vi&ecirc;n Học vi&ecirc;n Ng&acirc;n h&agrave;ng H&agrave; Nội th&agrave;nh lập hệ sinh th&aacute;i kết nối gi&aacute;o dục HODU.</p>\r\n\r\n<p>Nguyễn Thu Thảo l&agrave; sinh vi&ecirc;n năm thứ ba chuy&ecirc;n ng&agrave;nh Kế to&aacute;n doanh nghiệp của Học viện Ng&acirc;n H&agrave;ng tại H&agrave; Nội. Trong hai năm đầu đại học, c&ocirc; tham gia nhiều hoạt động ngoại kh&oacute;a trong v&agrave; ngo&agrave;i trường, c&aacute;c buổi hội thảo đa lĩnh vực để trải nghiệm v&agrave; t&igrave;m kiếm c&aacute;c cơ hội ph&aacute;t triển bản th&acirc;n ph&ugrave; hợp.</p>\r\n\r\n<p>Cuối năm 2016, c&ocirc; tham gia cuộc thi Khởi nghiệp Việt Đức c&ugrave;ng c&aacute;c bạn sinh vi&ecirc;n trường ĐH B&aacute;ch Khoa H&agrave; Nội, phụ tr&aacute;ch mảng t&agrave;i ch&iacute;nh. Dự &aacute;n may mắn lọt top 5 chung kết v&agrave; gi&agrave;nh giải khuyến kh&iacute;ch. Năm 2017, c&ocirc; tiếp tục đồng h&agrave;nh c&ugrave;ng bạn b&egrave; tham gia c&aacute;c dự &aacute;n kh&aacute;c nhau trong 2 cuộc thi khởi nghiệp Startup BA v&agrave; Khởi nghiệp c&ugrave;ng Kawai. Những cơ hội trải nghiệm đ&oacute; đ&atilde; gi&uacute;p c&ocirc; c&oacute; g&oacute;c nh&igrave;n r&otilde; r&agrave;ng hơn về khởi nghiệp cũng như th&ocirc;i th&uacute;c mong muốn s&aacute;ng tạo, theo đuổi một dự &aacute;n ri&ecirc;ng.</p>\r\n\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><a href=\"https://vietnambiz.vn/stores/news_dataimages/linhnn/042018/17/21/3137_Nguyen_Thu_Thao.jpg\" rel=\"fancybox-button\" target=\"_blank\" title=\"Nguyễn Thu Thảo, nữ sinh viên sáng lập hệ sinh thái kết nối giáo dục HODU. Ảnh: Thu Thảo\"><img alt=\"dich vu ket noi giao duc hodu cua nhom sinh vien hoc vien ngan hang\" src=\"https://vietnambiz.vn/stores/news_dataimages/linhnn/042018/17/21/3137_Nguyen_Thu_Thao.jpg\" title=\"Dịch vụ kết nối giáo dục HODU của nhóm sinh viên Học viện Ngân hàng\" /></a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Nguyễn Thu Thảo, nữ sinh vi&ecirc;n s&aacute;ng lập hệ sinh th&aacute;i kết nối gi&aacute;o dục HODU. Ảnh: Thu Thảo</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Xuất ph&aacute;t từ kh&oacute; khăn khi t&igrave;m địa chỉ học tập ph&ugrave; hợp nhu cầu, Thảo đ&atilde; nảy ra &yacute; tưởng thiết kế một c&ocirc;ng cụ tập hợp đầy đủ c&aacute;c th&ocirc;ng tin kh&oacute;a học v&agrave; dễ d&agrave;ng so s&aacute;nh bằng c&aacute;c bộ lọc theo ti&ecirc;u ch&iacute;. Hệ sinh th&aacute;i kết nối gi&aacute;o dục HODU ch&iacute;nh l&agrave; lời giải cho b&agrave;i to&aacute;n đ&oacute;.</p>\r\n\r\n<p>HODU l&agrave; một trang web kết hợp cộng đồng tư vấn tin cậy - kết nối th&ocirc;ng tin giữa người t&igrave;m học với c&aacute;c cơ sở đ&agrave;o tạo, chương tr&igrave;nh giảng dạy thuận tiện, nhanh ch&oacute;ng. Thay v&igrave; chỉ tra cứu tr&ecirc;n Google, Facebook hay hỏi bạn b&egrave;, người sử dụng c&oacute; thể sử dụng một k&ecirc;nh t&igrave;m kiếm chuy&ecirc;n biệt như HODU, gi&uacute;p giảm thời gian t&igrave;m kiếm, chi ph&iacute; trải nghiệm. Hiện nay, c&aacute;c cơ sở gi&aacute;o dục cũng gặp nhiều vấn đề trong qu&aacute; tr&igrave;nh thu h&uacute;t học vi&ecirc;n, khẳng định thương hiệu, cạnh tranh minh bạch v&agrave; c&aacute;c phương thức quảng c&aacute;o hợp l&yacute; chi ph&iacute;. HODU cung cấp c&aacute;c dịch vụ để mọi cơ sở đ&agrave;o tạo đều c&oacute; thể hợp t&aacute;c, sử dụng nhẳm cải thiện c&aacute;c vấn đề của họ.</p>\r\n\r\n<p>Khi x&acirc;y dựng HODU, Thảo gặp tất cả những kh&oacute; khăn m&agrave; bất cứ startup n&agrave;o cũng phải trải qua: Kiến thức kinh tế, kinh nghiệm khởi nghiệp, quản trị nh&acirc;n sự, b&agrave;i to&aacute;n thị trường v&agrave; vốn. Với một c&ocirc; sinh vi&ecirc;n năm thứ ba, Thảo c&ograve;n th&ecirc;m kh&oacute; khăn về thời gian khi vừa phải duy tr&igrave; việc học ổn định tr&ecirc;n trường vừa c&acirc;n bằng c&aacute;c kế hoạch, c&ocirc;ng việc c&aacute; nh&acirc;n v&agrave; gia đ&igrave;nh. Tuy nhi&ecirc;n, quan điểm của c&ocirc; l&agrave;, với giai đoạn đầu ti&ecirc;n của khởi nghiệp, yếu tố con người l&agrave; quan trọng nhất v&igrave; khi bạn thực sự t&acirc;m huyết với dự &aacute;n v&agrave; chuẩn bị t&acirc;m l&yacute; sẵn s&agrave;ng, cơ hội sẽ đến.</p>\r\n\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><a href=\"https://vietnambiz.vn/stores/news_dataimages/linhnn/042018/19/10/4330_Hodu_2.jpg\" rel=\"fancybox-button\" target=\"_blank\" title=\"Nguyễn Thu Thảo cùng các bạn đồng sáng lập dự án Hodu. Ảnh: Nguyễn Thu Thảo\"><img alt=\"dich vu ket noi giao duc hodu cua nhom sinh vien hoc vien ngan hang\" src=\"https://vietnambiz.vn/stores/news_dataimages/linhnn/042018/19/10/4330_Hodu_2.jpg\" title=\"Dịch vụ kết nối giáo dục HODU của nhóm sinh viên Học viện Ngân hàng\" /></a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Nguyễn Thu Thảo c&ugrave;ng c&aacute;c bạn đồng s&aacute;ng lập dự &aacute;n Hodu. Ảnh: Nguyễn Thu Thảo</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Trong qu&aacute; tr&igrave;nh học hỏi, c&ocirc; c&oacute; cơ hội gặp gỡ nhiều anh, chị gi&aacute;m đốc điều h&agrave;nh từ c&aacute;c c&ocirc;ng ty khởi nghiệp, c&aacute;c chuy&ecirc;n gia đa lĩnh vực, hỗ trợ c&ocirc; c&aacute;c kiến thức kinh tế, kỹ năng l&agrave;m việc tối ưu. Ngay khi dự &aacute;n được c&ocirc;ng bố, c&ocirc; nhận được nhiều sự ủng hộ từ bạn b&egrave;, nhiều lời đề nghị kh&aacute;c nhau về vốn, văn ph&ograve;ng từ c&aacute;c nh&agrave; đầu tư v&agrave; cả sự quan t&acirc;m hợp t&aacute;c từ những trung t&acirc;m đ&agrave;o tạo gi&aacute;o dục. Hiện tại, Thảo v&agrave; đội ngũ của c&ocirc; đang chuẩn bị mọi nguồn lực về c&ocirc;ng nghệ sản phẩm, kế hoạch marketing v&agrave; chăm s&oacute;c kh&aacute;ch h&agrave;ng để thực sự đ&aacute;p ứng mọi nhu cầu của kh&aacute;ch h&agrave;ng trong thời gian sản phẩm hoạt động sắp tới.</p>\r\n', 14, 14, '2018-06-17 22:46:59', '2018-06-17 22:46:59', 0),
(10, 'TOP 5 TRUNG TÂM TIẾNG ANH CHẤT LƯỢNG KHUYẾN MÃI RẺ MÙA HÈ NÀY', '<p style=\"margin-left:0cm; margin-right:0cm\"><strong><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">HỌC H&Egrave; TIẾNG ANH KHUYẾN M&Atilde;I CHO SINH VI&Ecirc;N V&Agrave; NGƯỜI ĐI L&Agrave;M</span></span></span></strong></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><strong><em><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">M&ugrave;a h&egrave; đến rồi, giữa bao mu&ocirc;n v&agrave;n lựa chọn tận hưởng m&ugrave;a h&egrave; qua những chuyến du lịch xa, vui chơi bạn b&egrave; v&agrave; nghỉ ngơi ở nh&agrave;..h&atilde;y tranh thủ một g&oacute;c m&ugrave;a h&egrave; của bạn v&agrave; biến n&oacute; th&agrave;nh khoảng thời gian học tập đầy gi&aacute; trị nhất !!! </span></span></span></em></strong></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><strong><em><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Nếu bạn l&agrave; sinh vi&ecirc;n qu&aacute; bận rộn cho việc học ch&iacute;nh trong năm v&agrave; lịch l&agrave;m th&ecirc;m d&agrave;y đặc, m&ugrave;a h&egrave; ch&iacute;nh l&agrave; l&uacute;c bạn n&ecirc;n kh&aacute;m ph&aacute; những kiến thức mới, t&iacute;ch lũy vốn Tiếng Anh chất lượng hỗ trợ ph&aacute;t triển c&ocirc;ng việc sau n&agrave;y. </span></span></span></em></strong></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><strong><em><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Sau đ&acirc;y l&agrave; danh s&aacute;ch c&aacute;c kh&oacute;a học Tiếng Anh gi&aacute; rẻ, chất lượng khuyến m&atilde;i m&ugrave;a h&egrave; n&agrave;y tại H&agrave; Nội ! </span></span></span></em></strong></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"color:#000066\"><span style=\"font-size:22px\"><strong><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">1.Trung t&acirc;m AMATE English</span></span></strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"color:#d35400\"><strong><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Chương tr&igrave;nh SI&Ecirc;U KHUYẾN M&Atilde;I: Giảm mạnh c&aacute;c kh&oacute;a học GIAO TIẾP, TOEIC v&agrave; IELTS trong th&aacute;ng 07/2018</span></span></span></strong></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\"><strong>Cơ sở &aacute;p dụng:</strong> 94C Phương Liệt &ndash; H&agrave; Nội</span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><strong><u><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Chi tiết khuyến m&atilde;i: </span></span></span></u></strong></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"color:#f39c12\"><span style=\"font-size:18px\"><strong><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">*Giao tiếp Pro</span></span></strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">- <strong>Cam kết sau kh&oacute;a học</strong>: Giao tiếp th&agrave;nh thạo, Thi chứng chỉ TOEIC 450+ </span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">- <strong>Học ph&iacute; gốc</strong>: 7.000.000đ/ kh&oacute;a/ 45 buổi (Số buổi chưa bao gồm c&aacute;c buổi ngoại kh&oacute;a)</span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">- <strong>Học ph&iacute; khuyến m&atilde;i th&aacute;ng 7 </strong>giảm <em><strong><span style=\"color:#e74c3c\">chỉ c&ograve;n 5.000.000VNĐ/ kh&oacute;a</span></strong></em></span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:Wingdings\">&agrave;</span><span style=\"font-family:&quot;Arial&quot;,sans-serif\"> Xem chi tiết v&agrave; đăng k&yacute; tư vấn tại: <span style=\"color:#444444\"><a href=\"https://goo.gl/eoSpiw\" style=\"color:#0563c1; text-decoration:underline\">https://goo.gl/eoSpiw</a> </span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"color:#f39c12\"><strong><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">*TOEIC 0-450+</span></span></span></strong></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">- <strong>Cam kết sau kh&oacute;a học:</strong> Thi chứng chỉ TOEIC 450+</span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">- <strong>Học ph&iacute; gốc</strong>: 2.500.000VNĐ/ kh&oacute;a/ 22 buổi (Số buổi chưa bao gồm c&aacute;c buổi ngoại kh&oacute;a) </span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">- <strong>Học ph&iacute; khuyến m&atilde;i th&aacute;ng 7:</strong><br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Đăng k&yacute; 1 người &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"color:#e74c3c\"><em><strong>Giảm 500.000</strong></em></span><br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Đăng k&yacute; 2 người &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"color:#e74c3c\"><em><strong>Giảm 700.000</strong></em></span><br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Đăng k&yacute; 4 người &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"color:#e74c3c\"><em><strong>Giảm 1.000.000</strong></em></span><br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tặng kh&oacute;a tin học IC3</span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:Wingdings\">&agrave;</span><span style=\"font-family:&quot;Arial&quot;,sans-serif\"> <em><strong>Xem chi tiết v&agrave; đăng k&yacute; tư vấn tại: <span style=\"color:#444444\"><a href=\"https://goo.gl/K6qf3z\" style=\"color:#0563c1; text-decoration:underline\">https://goo.gl/K6qf3z</a> </span></strong></em></span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"color:#f39c12\"><span style=\"font-size:18px\"><strong><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">*TOEIC 600+</span></span></strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">-<strong>Cam kết sau kh&oacute;a học:</strong> Thi Chứng chỉ TOEIC đạt 600+</span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">-<strong>Học ph&iacute; gốc:</strong> 3.000.000VNĐ/ kh&oacute;a/ 22 buổi (Số buổi chưa bao gồm c&aacute;c buổi ngoại kh&oacute;a)</span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">-<strong>Học ph&iacute; khuyến m&atilde;i th&aacute;ng 7: </strong></span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Đăng k&yacute; 1 người &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"color:#e74c3c\"><em><strong>Giảm 500.000VNĐ</strong></em></span><br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Đăng k&yacute; 2 người &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"color:#e74c3c\"><em><strong>Giảm 700.000VNĐ</strong></em></span><br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Đăng k&yacute; 4 người &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style=\"color:#e74c3c\"><em><strong>Giảm 1.000.000VNĐ</strong></em></span><br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tặng kh&oacute;a tin học IC3</span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:Wingdings\">&agrave;</span><span style=\"font-family:&quot;Arial&quot;,sans-serif\"> <em><strong>Xem chi tiết v&agrave; đăng k&yacute; tư vấn tại: <span style=\"color:#444444\"><a href=\"https://goo.gl/hzJu4D\" style=\"color:#0563c1; text-decoration:underline\">https://goo.gl/hzJu4D</a> </span></strong></em></span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"color:#f39c12\"><span style=\"font-size:18px\"><strong><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">*Chương tr&igrave;nh &ldquo;Tuần lễ v&agrave;ng&rdquo; &ndash; Giảm 50% học ph&iacute; IELTS</span></span></strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">-<strong>Cam kết </strong>bằng Văn Bản cho c&aacute;c học vi&ecirc;n, <strong>Học lại Miễn ph&iacute; </strong>nếu kh&ocirc;ng đạt mục ti&ecirc;u tr&igrave;nh độ của từng kh&oacute;a học</span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">-<strong>Học ph&iacute; khuyến m&atilde;i:</strong><br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kh&oacute;a Pre IELTS giảm từ 10.000.000VNĐ <span style=\"color:#e74c3c\"><em><strong>chỉ c&ograve;n 5.000.000VNĐ</strong></em></span><br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kh&oacute;a IELTS 4.5 &ndash; 5.5 giảm từ 7.000.000VNĐ <span style=\"color:#e74c3c\"><em><strong>chỉ c&ograve;n 3.500.000VNĐ</strong></em></span><br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kh&oacute;a IELTS 5.5 &ndash; 6.5 giảm từ 9.000.000VNĐ <span style=\"color:#e74c3c\"><em><strong>chỉ c&ograve;n 4.500.000VNĐ</strong></em></span><br />\r\n&nbsp;&nbsp;&nbsp; <u><strong>Đặc biệt:</strong></u> Tặng ngay 1.000.000VNĐ khi đăng k&yacute; học combo IELTS từ 0-6.5 từ 26.000.000VNĐ <span style=\"color:#e74c3c\"><em><strong>chỉ c&ograve;n 12.000.000VNĐ</strong></em></span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:Wingdings\">&agrave;</span><span style=\"font-family:&quot;Arial&quot;,sans-serif\"> <em><strong>Xem chi tiết v&agrave; đăng k&yacute; tư vấn tại: <span style=\"color:#444444\"><a href=\"https://goo.gl/ZTxKND\" style=\"color:#0563c1; text-decoration:underline\">https://goo.gl/ZTxKND</a> </span></strong></em></span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:22px\"><span style=\"color:#000066\"><strong><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">2.Trung t&acirc;m Anh ngữ Jaxtina</span></span></strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"color:#d35400\"><strong><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Chương tr&igrave;nh khuyến m&atilde;i: Ưu đ&atilde;i 20% học ph&iacute; cho cả hệ thống Jaxtina nh&acirc;n dịp khai trương cơ sở mới tại Trần Quốc Ho&agrave;n</span></span></span></strong></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\"><strong>Cơ sở &aacute;p dụng</strong>: 6 cơ sở tại H&agrave; Nội</span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\"><strong>C&aacute;c chương tr&igrave;nh học:</strong><br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tiếng Anh cho người mới bắt đầu<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tiếng Anh to&agrave;n diện 4 kỹ năng Nghe &ndash; N&oacute;i &ndash; Đọc &ndash; Viết<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tiếng Anh theo y&ecirc;u cầu ri&ecirc;ng<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tiếng Anh Doanh nghiệp</span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\"><strong>Học ph&iacute;:</strong> Khoảng 3.000.000VNĐ &ndash; 5.000.000VNĐ/kh&oacute;a</span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\"><strong>Thời gian đ&agrave;o tạo:</strong> 3 &ndash; 6 th&aacute;ng</span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\"><strong>Đối tượng ưu đ&atilde;i:</strong> Đối tượng tr&ecirc;n 18 tuổi</span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\"><strong>Thời gian &aacute;p dụng:</strong> Th&aacute;ng 7/2018</span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><strong><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Qu&agrave; tặng ưu đ&atilde;i: </span></span></span></strong></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Tặng kh&oacute;a học giao tiếp với giảng vi&ecirc;n nước ngo&agrave;i trị gi&aacute;<span style=\"color:#e74c3c\"> <em><strong>2.500.000VNĐ</strong></em></span><em><span style=\"color:#d35400\"><strong> </strong></span></em>khi đăng k&yacute; lộ tr&igrave;nh học 6 th&aacute;ng</span></span></span></li>\r\n	<li><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Nhận th&ecirc;m <em><span style=\"color:#e74c3c\"><strong>VOUCHER l&ecirc;n tới 2 triệu đồng</strong></span></em> khi giới thiệu bạn b&egrave; học c&ugrave;ng</span></span></span></li>\r\n	<li><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Nhận <em><span style=\"color:#e74c3c\"><strong>ưu đ&atilde;i 20% học ph&iacute;</strong></span> </em>cho kh&oacute;a học tiếng anh to&agrave;n diện với lộ tr&igrave;nh 6 th&aacute;ng</span></span></span></li>\r\n</ul>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><strong><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">--&gt; Li&ecirc;n hệ tại: <span style=\"color:#0563c1\"><u><a href=\"https://goo.gl/BAeHuK\" style=\"color:#0563c1; text-decoration:underline\">https://goo.gl/BAeHuK</a></u></span> </span></span></span></strong></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"color:#000066\"><span style=\"font-size:22px\"><strong><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">3. Trung t&acirc;m Anh ngữ Lesh</span></span></strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"color:#d35400\"><strong><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">*Chương tr&igrave;nh khuyến m&atilde;i 1: Khuyến m&atilde;i TOEIC đặc biệt kỉ niệm 12 năm th&agrave;nh lập</span></span></span></strong></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\"><strong>Cơ sở &aacute;p dụng</strong>: 181 Ch&ugrave;a L&aacute;ng, Đống Đa, H&agrave; Nội</span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\"><strong>Chi tiết chương tr&igrave;nh</strong>:</span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Đăng k&yacute; sớm: Học ph&iacute; <em><span style=\"color:#e74c3c\"><strong>chỉ c&ograve;n 2.300.000VNĐ &ndash; 3.500.000VNĐ/Kh&oacute;a</strong></span></em><br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Học ph&iacute; gốc:&nbsp; 4.300.000Đ/Kh&oacute;a<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Đăng k&yacute; 2 người&nbsp; &nbsp; &nbsp;<em><span style=\"color:#e74c3c\"><strong>Giảm th&ecirc;m 100.000VNĐ/Người</strong></span></em><br />\r\n&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Đăng k&yacute; 3 người&nbsp; &nbsp; &nbsp;<span style=\"color:#e74c3c\"><em><strong>Giảm th&ecirc;m 200.000VNĐ/Người</strong></em></span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><strong><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Li&ecirc;n hệ th&ecirc;m tại: <span style=\"color:#444444\"><a href=\"https://goo.gl/ou2FJ8\" style=\"color:#0563c1; text-decoration:underline\">https://goo.gl/ou2FJ8</a> </span></span></span></span></strong></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"color:#e67e22\"><strong><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">*Chương tr&igrave;nh khuyến m&atilde;i 2: Khuyến m&atilde;i Tiếng Anh giao tiếp</span></span></span></strong></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\"><strong>Cơ sở &aacute;p dụng</strong>: 4 cơ sở tại H&agrave; Nội</span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\"><strong>Học ph&iacute; gốc</strong>: 4.300.000VNĐ/Kh&oacute;a</span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\"><strong>Chi tiết khuyến m&atilde;i</strong>:</span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;*Đăng k&yacute; 1 người:<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style=\"color:#e74c3c\"><em><strong>Chỉ c&ograve;n 2.700.000VNĐ/ 01 Kh&oacute;a</strong></em></span><br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;*Đăng k&yacute; 2 người hoặc 2 kh&oacute;a:<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style=\"color:#e74c3c\"><em><strong>Chỉ c&ograve;n 4.500.000VNĐ/ 02 Kh&oacute;a (Giảm 4.100.000Đ)</strong></em></span><br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;*Đăng k&yacute; 3 kh&oacute;a hoặc kh&oacute;a 3 người:<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style=\"color:#e74c3c\"><em><strong>Chỉ c&ograve;n 6.000.000VNĐ/03 Kh&oacute;a (Giảm 6.900.000Đ)</strong></em></span><br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; *LESH VIP 3+<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Gi&aacute; gốc: 12.900.000Đ/Kh&oacute;a<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Giảm <em><strong><span style=\"color:#e74c3c\">chỉ c&ograve;n 6.600.000VNĐ (-49%)</span></strong></em><br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; *Ri&ecirc;ng cơ sở Trần Vỹ giảm th&ecirc;m <em><strong><span style=\"color:#e74c3c\">100.000VNĐ</span></strong></em></span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><strong><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Li&ecirc;n hệ th&ecirc;m tại: <span style=\"color:#0563c1\"><u><a href=\"https://goo.gl/G1cKTd\" style=\"color:#0563c1; text-decoration:underline\">https://goo.gl/G1cKTd</a></u></span> </span></span></span></strong></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"color:#000066\"><span style=\"font-size:22px\"><strong><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">4. Trung t&acirc;m Anh ngữ Pasal</span></span></strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"color:#d35400\"><strong><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Chương tr&igrave;nh khuyến m&atilde;i: H&egrave; rộn r&atilde; &ndash; Học tiếng anh cực đ&atilde; c&ugrave;ng ưu đ&atilde;i th&aacute;ng 7</span></span></span></strong></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\"><strong>Cơ sở &aacute;p dụng:</strong> 4 cơ sở tại H&agrave; Nội </span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><strong><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">C&aacute;c chương tr&igrave;nh học v&agrave; học ph&iacute; gốc: </span></span></span></strong></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kh&oacute;a MATCH&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 1.890.000VNĐ<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kh&oacute;a TORCH&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 3.100.000VNĐ</span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kh&oacute;a VOLCANO BASIC&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 5.490.000VNĐ<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kh&oacute;a VOLCANO ADVANCED&nbsp; &nbsp; &nbsp; &nbsp;7.600.000VNĐ<br />\r\n&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kh&oacute;a VOLCANO PREMIUM&nbsp; &nbsp; &nbsp; &nbsp; 10.090.000VNĐ</span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><strong><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Chi tiết khuyến m&atilde;i: </span></span></span></strong></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">-Đăng k&yacute; c&aacute;c kh&oacute;a học tiếng Anh giao tiếp ban ng&agrave;y trong th&aacute;ng 7, bạn sẽ được tặng 30% học ph&iacute; với mức tiết kiệm tối ưu, học ph&iacute; c&aacute;c kh&oacute;a lần lượt <span style=\"color:#e74c3c\"><em><strong>chỉ c&ograve;n từ 1.350.000VNĐ &ndash; 6.500.000VNĐ</strong></em></span></span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">-Đăng k&yacute; c&aacute;c lớp học buổi tối, mức <span style=\"color:#e74c3c\"><em><strong>ưu đ&atilde;i l&agrave; 10% học ph&iacute;</strong></em></span>, chỉ &aacute;p dụng từ 1/7 &ndash; 20/7</span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">-<strong>Đặc biệt:</strong> Sinh vi&ecirc;n t&igrave;nh nguyện tham gia tiếp sức m&ugrave;a thi, m&ugrave;a h&egrave; xanh trong th&aacute;ng 7 n&agrave;y sẽ được ưu đ&atilde;i <span style=\"color:#e74c3c\"><em><strong>giảm 15% học ph&iacute;</strong></em></span> tất cả c&aacute;c kh&oacute;a học tiếng Anh giao tiếp buổi tối tại Pasal (Bạn chỉ cần mang theo thẻ tiếp sức m&ugrave;a thi hoặc giấy giới thiệu của đo&agrave;n trường đến văn ph&ograve;ng gần nhất của Pasal để đăng k&yacute; học)</span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><strong><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Li&ecirc;n hệ th&ecirc;m tại: <span style=\"color:#444444\"><a href=\"https://goo.gl/6LasjB\" style=\"color:#0563c1; text-decoration:underline\">https://goo.gl/6LasjB</a> </span></span></span></span></strong></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"color:#000066\"><span style=\"font-size:22px\"><strong><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">5.C&ocirc; Th&uacute;y TOEIC</span></span></strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><strong><span style=\"color:#d35400\"><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Chương tr&igrave;nh khuyến m&atilde;i: Đăng k&yacute; nhanh tay &ndash; H&egrave; n&agrave;y học ngay &ndash; Ưu đ&atilde;i 55% Kh&oacute;a TOEIC</span></span></span></span></strong></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\"><strong>Cơ sở &aacute;p dụng</strong>: Số 66 L&ecirc; Thanh Nghị, Hai B&agrave; Trưng, H&agrave; Nội</span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\"><strong>Đối tượng ưu đ&atilde;i</strong>: Mọi tr&igrave;nh độ bao gồm cả mất gốc</span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\"><strong>Học ph&iacute; gốc</strong>: 2.200.000đ/ kh&oacute;a/ 25 buổi</span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\"><strong>Chi tiết khuyến m&atilde;i</strong>: </span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">-<span style=\"color:#e74c3c\"><em><strong>Học ph&iacute; hỗ trợ 55%</strong></em></span> cho sinh vi&ecirc;n hoặc c&aacute;c bạn mới ra trường trong v&ograve;ng 3 năm đang t&igrave;m việc chỉ c&ograve;n 990.000đ/ kh&oacute;a/ 25 buổi (Bắt buộc mang theo Thẻ sinh vi&ecirc;n hoặc CMND khi tới đăng k&yacute;)</span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">- Tặng <span style=\"color:#e74c3c\"><em><strong>Kh&oacute;a luyện đề</strong></em></span> b&ecirc;n cạnh 25 buổi học ch&iacute;nh thức</span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">- Tặng <em><strong><span style=\"color:#e74c3c\">bộ gi&aacute;o tr&igrave;nh độc quyền</span></strong></em> gồm 5 cuốn do c&ocirc; Th&uacute;y Trần bi&ecirc;n soạn</span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">- <span style=\"color:#e74c3c\"><em><strong>Giảm 50.000VNĐ</strong></em></span>&nbsp;cho nh&oacute;m đăng k&yacute; 2 người</span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">- <span style=\"color:#e74c3c\"><em><strong>Giảm 80.000VNĐ&nbsp;</strong></em></span>cho nh&oacute;m đăng k&yacute; 3 người trở l&ecirc;n</span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">- <strong><em>Lưu &yacute;: Đặt cọc 200.000VNĐ để giữ chỗ, nếu sau buổi đầu ti&ecirc;n kh&ocirc;ng thấy ph&ugrave; hợp c&aacute;c bạn sẽ được r&uacute;t số tiền đặt cọc, coi như Buổi học thử miễn ph&iacute;</em></strong></span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\"><strong>Thời gian khai giảng</strong>: Tối T3-5-7 từ 19h30 &ndash; 21h hoặc 17h50 &ndash; 19h20 ng&agrave;y 31/ 07/ 2018</span></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><strong><span style=\"font-size:13pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Li&ecirc;n hệ th&ecirc;m tại: <span style=\"color:#444444\"><a href=\"https://goo.gl/SF7Xu1\" style=\"color:#0563c1; text-decoration:underline\">https://goo.gl/SF7Xu1</a> </span></span></span></span></strong></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\">&nbsp;</p>\r\n', 14, 14, '2018-07-26 18:53:20', '2018-07-26 18:53:20', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL COMMENT 'id của người bình luận',
  `id_course` int(11) NOT NULL COMMENT 'id của khóa học',
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nội dung bình luận',
  `time_trai_nghiem` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp(),
  `phe_duyet` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `id_user`, `id_course`, `title`, `content`, `time_trai_nghiem`, `create_at`, `phe_duyet`) VALUES
(2, 14, 21, 'HODU là trang web về giáo dục', 'Hãy cho chúng tôi biết cảm nhận của bạn về khóa học này, cũng như các thắc mắc của bạn', '11/11/2011', '2018-07-04 22:35:19', 0),
(3, 14, 6, 'Tốt', 'Tốt ở nhiều thứ', '3 tháng trước', '2018-07-12 21:31:50', 0),
(4, 48, 29, 'Học hiệu quả!', 'Thầy Hải giảng dạy rất tâm huyết, lớp học đông vui và có nhiều chương trình ngoại khóa hấp dẫn <3 <3 <3', 'Tháng 4/2018', '2018-07-13 10:01:30', 0),
(5, 47, 28, 'Chương trình học chất lượng!!!', 'Giáo trình giảng dạy chi tiết, thầy giáo lại nhệt tình và thân thiện, rất tốt.', '2 tháng trước', '2018-07-13 14:02:29', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `course_register`
--

CREATE TABLE `course_register` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_course` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_at` datetime NOT NULL,
  `paid` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dia_diem`
--

CREATE TABLE `dia_diem` (
  `madd` int(11) NOT NULL,
  `tendd` varchar(111) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Tên các quận/huyện';

--
-- Đang đổ dữ liệu cho bảng `dia_diem`
--

INSERT INTO `dia_diem` (`madd`, `tendd`) VALUES
(13, 'Ba Đình'),
(14, 'Hoàn Kiếm'),
(15, 'Tây Hồ'),
(16, 'Long Biên'),
(17, 'Đống Đa'),
(18, 'Hai Bà Trưng'),
(19, 'Hoàng Mai'),
(20, 'Thanh Xuân'),
(21, 'Bắc Từ Liêm'),
(22, 'Nam Từ Liêm'),
(23, 'Gia Lâm'),
(24, 'Sóc Sơn'),
(25, 'Đông Anh'),
(26, 'Thanh Trì'),
(27, 'Mê Linh'),
(28, 'Hà Đông'),
(29, 'Sơn Tây'),
(30, 'Ba Vì'),
(31, 'Phúc Thọ'),
(32, 'Đan Phượng'),
(33, 'Hoài Đức'),
(34, 'Quốc Oai'),
(35, 'Thạch Thất'),
(36, 'Chương Mỹ'),
(37, 'Thanh Oai'),
(38, 'Thường Tín'),
(39, 'Phú Xuyên'),
(40, 'Ứng Hòa'),
(41, 'Mỹ Đức'),
(42, 'Cầu Giấy');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinh_anh`
--

CREATE TABLE `hinh_anh` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_course` int(11) NOT NULL,
  `is_course` tinyint(1) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinh_thuc_hoc`
--

CREATE TABLE `hinh_thuc_hoc` (
  `id` int(11) NOT NULL,
  `ten_hinh_thuc` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoa_hoc`
--

CREATE TABLE `khoa_hoc` (
  `ma_khoa_hoc` int(11) NOT NULL,
  `ma_trung_tam` int(11) NOT NULL,
  `ten_khoa_hoc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `noi_bat` tinyint(1) NOT NULL DEFAULT 0,
  `thanh_pho` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `quan_huyen` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` text COLLATE utf8_unicode_ci NOT NULL,
  `bao_quat` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `chuyen_mon` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cu_the` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `trinh_do` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lo_trinh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hinh_thuc` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_hoc` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `buoi_hoc` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `muc_gia` int(8) NOT NULL,
  `gia_goc` int(8) NOT NULL COMMENT 'giá gốc (khi chưa giảm giá/khuyến mại)',
  `mo_ta` text COLLATE utf8_unicode_ci NOT NULL,
  `giao_vien` text COLLATE utf8_unicode_ci NOT NULL,
  `ngay_tao` date NOT NULL,
  `ngay_cap_nhat` date NOT NULL,
  `hinh_anh` text COLLATE utf8_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `si_so` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Sĩ số của 1 lớp học',
  `luot_xem` int(10) NOT NULL,
  `xac_thuc` tinyint(1) NOT NULL,
  `hien_thi` tinyint(1) NOT NULL,
  `wifi` tinyint(1) NOT NULL,
  `gui_xe` tinyint(1) NOT NULL,
  `dieu_hoa` tinyint(1) NOT NULL,
  `nuoc_uong` tinyint(1) NOT NULL,
  `do_an` tinyint(1) NOT NULL COMMENT 'có đồ ăn hay ko (1 là có, 0 là ko có)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khoa_hoc`
--

INSERT INTO `khoa_hoc` (`ma_khoa_hoc`, `ma_trung_tam`, `ten_khoa_hoc`, `noi_bat`, `thanh_pho`, `quan_huyen`, `dia_chi`, `bao_quat`, `chuyen_mon`, `cu_the`, `trinh_do`, `lo_trinh`, `hinh_thuc`, `ngay_hoc`, `buoi_hoc`, `muc_gia`, `gia_goc`, `mo_ta`, `giao_vien`, `ngay_tao`, `ngay_cap_nhat`, `hinh_anh`, `video`, `si_so`, `luot_xem`, `xac_thuc`, `hien_thi`, `wifi`, `gui_xe`, `dieu_hoa`, `nuoc_uong`, `do_an`) VALUES
(6, 34, 'Luyện thi IELTS mục tiêu du học', 0, 'Hà Nội', 'Đống Đa', 'Số 15 ngõ 121 Thái Hà', 'Ngoại ngữ', 'Tiếng Anh', 'IELTS', '0 - 4.0', '1 - 3 tháng', 'Trung tâm', 'Thứ 7', 'Tối', 5200000, 5700000, '<p>Tại sao bạn n&ecirc;n chọn iGIS để luyện thi IELTS? Đảm bảo y&ecirc;u cầu đầu ra: Bạn c&oacute; thể l&agrave; người chưa biết g&igrave; về k&igrave; thi IELTS hoặc bạn đ&atilde; tham dự k&igrave; thi nhưng chưa đạt được kết quả như mong muốn. D&ugrave; bạn l&agrave; ai, khi tham gia c&aacute;c kh&oacute;a học IELTS ph&ugrave; hợp với tr&igrave;nh đo</p>\r\n', '<p>Đội ngũ gi&aacute;o vi&ecirc;n của iGIS l&agrave; những người được đ&agrave;o tạo b&agrave;i bản, tốt nghiệp đại học trong nước hoặc nước ngo&agrave;i chuy&ecirc;n ng&agrave;nh giảng dậy Tiếng Anh C&oacute; nhiều năm kinh nghiệm trong việc luyện thi IELTS v&agrave; đ&atilde; từng đạt điểm số cao trong k&igrave; thi IELTS. C&aacute;c giảng vi&ecirc;n của iGIS cũng l&agrave; những người hết sức th&acirc;n thiện, sẽ mang tới cho c&aacute;c bạn kh&ocirc;ng chỉ những kiến thức bổ &iacute;ch m&agrave; c&ograve;n những giờ học l&yacute; th&uacute; Mỗi kh&oacute;a học bao gồm cả gi&aacute;o vi&ecirc;n Việt Nam v&agrave; nước ngo&agrave;i (tỷ lệ giảng dạy t&ugrave;y theo tr&igrave;nh độ kh&oacute;a học)</p>\r\n', '0000-00-00', '2018-07-14', '', '', '0', 0, 1, 1, 1, 0, 0, 0, 0),
(7, 34, 'Luyện thi IELTS Intensive', 0, 'Hà Nội', 'Đống Đa', 'Số 15 ngõ 121 Thái Hà', 'Ngoại ngữ', 'Tiếng Anh', 'IELTS', '4.0 - 5.5', '1 - 3 tháng', 'Trung tâm', 'Thứ 7', 'Tối', 5600000, 6100000, 'Tại sao bạn nên chọn iGIS để luyện thi IELTS?  Đảm bảo yêu cầu đầu ra: Bạn có thể là người chưa biết gì về kì thi IELTS hoặc bạn đã tham dự kì thi nhưng chưa đạt được kết quả như mong muốn. Dù bạn là ai, khi tham gia các khóa học IELTS phù hợp với trình đ', 'Đội ngũ giáo viên của iGIS là những người được đào tạo bài bản, tốt nghiệp đại học trong nước hoặc nước ngoài chuyên ngành giảng dậy Tiếng Anh Có nhiều năm kinh nghiệm trong việc luyện thi IELTS và đã từng đạt điểm số cao trong kì thi IELTS. Các giảng viên của iGIS cũng là những người hết sức thân thiện, sẽ mang tới cho các bạn không chỉ những kiến thức bổ ích mà còn những giờ học lý thú Mỗi khóa học bao gồm cả giáo viên Việt Nam và nước ngoài (tỷ lệ giảng dạy tùy theo trình độ khóa học)', '0000-00-00', '0000-00-00', '', '', '0', 0, 1, 1, 1, 0, 0, 0, 0),
(8, 34, 'Luyện thi IELTS mục tiêu 4.5 - 5.0', 0, 'Hà Nội', 'Đống Đa', 'Số 15 ngõ 121 Thái Hà', 'Ngoại ngữ', 'Tiếng Anh', 'IELTS', '4.0 - 5.5', '1 - 3 tháng', 'Trung tâm', 'Thứ 3', 'Tối', 5200000, 5700000, 'Tại sao bạn nên chọn iGIS để luyện thi IELTS?  Đảm bảo yêu cầu đầu ra: Bạn có thể là người chưa biết gì về kì thi IELTS hoặc bạn đã tham dự kì thi nhưng chưa đạt được kết quả như mong muốn. Dù bạn là ai, khi tham gia các khóa học IELTS phù hợp với trình đ', 'Đội ngũ giáo viên của iGIS là những người được đào tạo bài bản, tốt nghiệp đại học trong nước hoặc nước ngoài chuyên ngành giảng dậy Tiếng Anh Có nhiều năm kinh nghiệm trong việc luyện thi IELTS và đã từng đạt điểm số cao trong kì thi IELTS. Các giảng viên của iGIS cũng là những người hết sức thân thiện, sẽ mang tới cho các bạn không chỉ những kiến thức bổ ích mà còn những giờ học lý thú Mỗi khóa học bao gồm cả giáo viên Việt Nam và nước ngoài (tỷ lệ giảng dạy tùy theo trình độ khóa học)', '0000-00-00', '0000-00-00', '', '', '0', 0, 1, 1, 1, 0, 0, 0, 0),
(9, 34, 'Luyện IELTS căn bản', 0, 'Hà Nội', 'Đống Đa', 'Số 15 ngõ 121 Thái Hà', 'Ngoại ngữ', 'Tiếng Anh', 'IELTS', '0 - 4.0', '1 - 3 tháng', 'Trung tâm', 'Thứ 3', 'Tối', 4300000, 4800000, 'Tại sao bạn nên chọn iGIS để luyện thi IELTS?  Đảm bảo yêu cầu đầu ra: Bạn có thể là người chưa biết gì về kì thi IELTS hoặc bạn đã tham dự kì thi nhưng chưa đạt được kết quả như mong muốn. Dù bạn là ai, khi tham gia các khóa học IELTS phù hợp với trình đ', 'Đội ngũ giáo viên của iGIS là những người được đào tạo bài bản, tốt nghiệp đại học trong nước hoặc nước ngoài chuyên ngành giảng dậy Tiếng Anh Có nhiều năm kinh nghiệm trong việc luyện thi IELTS và đã từng đạt điểm số cao trong kì thi IELTS. Các giảng viên của iGIS cũng là những người hết sức thân thiện, sẽ mang tới cho các bạn không chỉ những kiến thức bổ ích mà còn những giờ học lý thú Mỗi khóa học bao gồm cả giáo viên Việt Nam và nước ngoài (tỷ lệ giảng dạy tùy theo trình độ khóa học)', '0000-00-00', '0000-00-00', '', '', '0', 0, 1, 1, 1, 0, 0, 0, 0),
(10, 34, 'Luyện thi IELTS mục tiêu 5.0 - 6.0', 0, 'Hà Nội', 'Đống Đa', 'Số 15 ngõ 121 Thái Hà', 'Ngoại ngữ', 'Tiếng Anh', 'IELTS', '5.5 - 6.5', '1 - 3 tháng', 'Trung tâm', 'Thứ 3', 'Tối', 5600000, 6100000, 'Tại sao bạn nên chọn iGIS để luyện thi IELTS?  Đảm bảo yêu cầu đầu ra: Bạn có thể là người chưa biết gì về kì thi IELTS hoặc bạn đã tham dự kì thi nhưng chưa đạt được kết quả như mong muốn. Dù bạn là ai, khi tham gia các khóa học IELTS phù hợp với trình đ', 'Đội ngũ giáo viên của iGIS là những người được đào tạo bài bản, tốt nghiệp đại học trong nước hoặc nước ngoài chuyên ngành giảng dậy Tiếng Anh Có nhiều năm kinh nghiệm trong việc luyện thi IELTS và đã từng đạt điểm số cao trong kì thi IELTS. Các giảng viên của iGIS cũng là những người hết sức thân thiện, sẽ mang tới cho các bạn không chỉ những kiến thức bổ ích mà còn những giờ học lý thú Mỗi khóa học bao gồm cả giáo viên Việt Nam và nước ngoài (tỷ lệ giảng dạy tùy theo trình độ khóa học)', '0000-00-00', '0000-00-00', '', '', '0', 0, 1, 1, 1, 0, 0, 0, 0),
(11, 34, 'Giao tiếp START', 0, 'Hà Nội', 'Đống Đa', 'Số 15 ngõ 121 Thái Hà', 'Ngoại ngữ', 'Tiếng Anh', 'TAGT', 'Cơ bản', '1 - 3 tháng', 'Trung tâm', 'Thứ 2', 'Tối', 3190000, 3690000, '1. Khóa giao tiếp tại iGIS có gì? a, Phương pháp  – Phương pháp giảng dạy là AAR – phương pháp duy nhất cho tất cả: Nghe – Nói – Phát âm – Phản xạ – Từ vựng & Tư duy tiếng Anh.  – Học Tiếng Anh kết hợp phát triển kỹ năng mềm với hoạt động ngoại khóa thườn', 'ĐỘI NGŨ GIẢNG VIÊN NƯỚC NGOÀI GIÀU KINH NGHIỆM  Mr. Thomas G. Giglione	Mr. Thomas G. Giglione Quốc tịch: Canada Ngôn ngữ: Anh, Tây Ban Nha, Ý Tốt nghiệp: Đại học Windsor – Canada Kinh nghiệm giảng dạy: 9 năm Mr. Tommi Tamminen	Mr. Tommi Tamminen Quốc tịch: Mỹ Ngôn ngữ: Anh Tốt nghiệp: Đại học New York City – Mỹ Kinh nghiệm giảng dạy: 4 năm Mr. Micheal Keane	Mr. Micheal Keane Quốc tịch: Úc Ngôn ngữ: Anh Tốt nghiệp: Đại học Victoria – Úc Kinh nghiệm giảng dạy: 6 năm  ', '0000-00-00', '0000-00-00', '', '', '0', 0, 1, 1, 1, 0, 0, 0, 0),
(12, 34, 'Tiếng Anh giao tiếp sơ cấp ELementary', 0, 'Hà Nội', 'Đống Đa', 'Số 15 ngõ 121 Thái Hà', 'Ngoại ngữ', 'Tiếng Anh', 'TAGT', 'Cơ bản', '1 - 3 tháng', 'Trung tâm', 'Thứ 3', 'Tối', 3990000, 4490000, '1. Khóa giao tiếp tại iGIS có gì? a, Phương pháp  – Phương pháp giảng dạy là AAR – phương pháp duy nhất cho tất cả: Nghe – Nói – Phát âm – Phản xạ – Từ vựng & Tư duy tiếng Anh.  – Học Tiếng Anh kết hợp phát triển kỹ năng mềm với hoạt động ngoại khóa thườn', 'ĐỘI NGŨ GIẢNG VIÊN NƯỚC NGOÀI GIÀU KINH NGHIỆM  Mr. Thomas G. Giglione	Mr. Thomas G. Giglione Quốc tịch: Canada Ngôn ngữ: Anh, Tây Ban Nha, Ý Tốt nghiệp: Đại học Windsor – Canada Kinh nghiệm giảng dạy: 9 năm Mr. Tommi Tamminen	Mr. Tommi Tamminen Quốc tịch: Mỹ Ngôn ngữ: Anh Tốt nghiệp: Đại học New York City – Mỹ Kinh nghiệm giảng dạy: 4 năm Mr. Micheal Keane	Mr. Micheal Keane Quốc tịch: Úc Ngôn ngữ: Anh Tốt nghiệp: Đại học Victoria – Úc Kinh nghiệm giảng dạy: 6 năm  ', '0000-00-00', '0000-00-00', '', '', '0', 0, 1, 1, 1, 0, 0, 0, 0),
(13, 34, 'Tiếng Anh giao tiếp Pre - Intermediate', 0, 'Hà Nội', 'Đống Đa', 'Số 15 ngõ 121 Thái Hà', 'Ngoại ngữ', 'Tiếng Anh', 'TAGT', 'Thông thường', '1 - 3 tháng', 'Trung tâm', 'Thứ 4', 'Tối', 4390000, 4890000, '1. Khóa giao tiếp tại iGIS có gì? a, Phương pháp  – Phương pháp giảng dạy là AAR – phương pháp duy nhất cho tất cả: Nghe – Nói – Phát âm – Phản xạ – Từ vựng & Tư duy tiếng Anh.  – Học Tiếng Anh kết hợp phát triển kỹ năng mềm với hoạt động ngoại khóa thườn', 'ĐỘI NGŨ GIẢNG VIÊN NƯỚC NGOÀI GIÀU KINH NGHIỆM  Mr. Thomas G. Giglione	Mr. Thomas G. Giglione Quốc tịch: Canada Ngôn ngữ: Anh, Tây Ban Nha, Ý Tốt nghiệp: Đại học Windsor – Canada Kinh nghiệm giảng dạy: 9 năm Mr. Tommi Tamminen	Mr. Tommi Tamminen Quốc tịch: Mỹ Ngôn ngữ: Anh Tốt nghiệp: Đại học New York City – Mỹ Kinh nghiệm giảng dạy: 4 năm Mr. Micheal Keane	Mr. Micheal Keane Quốc tịch: Úc Ngôn ngữ: Anh Tốt nghiệp: Đại học Victoria – Úc Kinh nghiệm giảng dạy: 6 năm  ', '0000-00-00', '0000-00-00', '', '', '0', 0, 1, 1, 1, 0, 0, 0, 0),
(14, 34, 'Tiếng Anh giao tiếp Intermediate', 0, 'Hà Nội', 'Đống Đa', 'Số 15 ngõ 121 Thái Hà', 'Ngoại ngữ', 'Tiếng Anh', 'TAGT', 'Nâng cao', '1 - 3 tháng', 'Trung tâm', 'Thứ 5', 'Tối', 4400000, 4900000, '1. Khóa giao tiếp tại iGIS có gì? a, Phương pháp  – Phương pháp giảng dạy là AAR – phương pháp duy nhất cho tất cả: Nghe – Nói – Phát âm – Phản xạ – Từ vựng & Tư duy tiếng Anh.  – Học Tiếng Anh kết hợp phát triển kỹ năng mềm với hoạt động ngoại khóa thườn', 'ĐỘI NGŨ GIẢNG VIÊN NƯỚC NGOÀI GIÀU KINH NGHIỆM  Mr. Thomas G. Giglione	Mr. Thomas G. Giglione Quốc tịch: Canada Ngôn ngữ: Anh, Tây Ban Nha, Ý Tốt nghiệp: Đại học Windsor – Canada Kinh nghiệm giảng dạy: 9 năm Mr. Tommi Tamminen	Mr. Tommi Tamminen Quốc tịch: Mỹ Ngôn ngữ: Anh Tốt nghiệp: Đại học New York City – Mỹ Kinh nghiệm giảng dạy: 4 năm Mr. Micheal Keane	Mr. Micheal Keane Quốc tịch: Úc Ngôn ngữ: Anh Tốt nghiệp: Đại học Victoria – Úc Kinh nghiệm giảng dạy: 6 năm  ', '0000-00-00', '0000-00-00', '', '', '0', 0, 1, 1, 1, 0, 0, 0, 0),
(15, 35, 'Tiếng Anh trung học cơ sở', 0, 'Hà Nội', 'Hai Bà Trưng', '128 Lò Đúc - Đống Mác', 'Ngoại ngữ', 'Tiếng Anh', 'TreEm', '10 - 15 tuổi', '1 - 3 tháng', 'Trung tâm', 'Thứ 4', 'Sáng', 2000000, 2500000, 'Giới thiệu  Là khóa học dành riêng cho các bé từ 11-15 tuổi  Thời gian: Khóa học tương ứng với 32 giờ học kéo dài trong 8 tuần.Mỗi tuần 2 buổi  Mục tiêu  Khóa học giúp học viên phát triển về 4 kĩ năng Nghe, Nói, Đọc , Viết.  Đặc biệt:  Cung cấp cho học si', 'Giáo viên nhiều kinh nghiệm', '0000-00-00', '0000-00-00', '', '', '0', 0, 1, 1, 1, 0, 0, 0, 0),
(16, 35, 'Tiếng Anh TOEIC Basic (0 - 500+)', 0, 'Hà Nội', 'Hai Bà Trưng', 'Số 23 ngõ 299 Phố Vọng', 'Ngoại ngữ', 'Tiếng Anh', 'TOEIC', '450 - 600', '1 - 3 tháng', 'Trung tâm', 'Thứ 2', 'Tối', 3100000, 3600000, '90h  – 45h học trực tiếp tại trung tâm (30 buổi/ 1,5h/buổi)  – 45h học online/tài liệu bài giảng tại nhà theo yêu càu giáo viên', 'Giáo viên nhiều kinh nghiệm', '0000-00-00', '0000-00-00', '', '', '0', 0, 1, 1, 1, 0, 0, 0, 0),
(17, 35, 'Tiếng Anh TOEIC Advanced ( 500 - 750+)', 0, 'Hà Nội', 'Hai Bà Trưng', 'Số 23 ngõ 299 Phố Vọng', 'Ngoại ngữ', 'Tiếng Anh', 'TOEIC', '600 - 850', '1 - 3 tháng', 'Trung tâm', 'Thứ 6', 'Tối', 3100000, 3600000, '90h  – 45h học trực tiếp tại trung tâm (30 buổi/ 1,5h/buổi)  – 45h học online/tài liệu bài giảng tại nhà theo yêu càu giáo viên', 'Giáo viên nhiều kinh nghiệm', '0000-00-00', '0000-00-00', '', '', '0', 0, 1, 1, 1, 0, 0, 0, 0),
(18, 35, 'Tiếng Anh giao tiếp cơ bản', 0, 'Hà Nội', 'Hai Bà Trưng', 'Số 23 ngõ 299 Phố Vọng', 'Ngoại ngữ', 'Tiếng Anh', 'TAGT', 'Cơ bản', '1 - 3 tháng', 'Online', 'Thứ 6', 'Tối', 2500000, 3000000, 'Giới thiệu  Khoá học dành riêng cho các bạn mất căn bản tiếng anh, đã từng học tiếng anh nhưng lâu không sử dụng,…. Bắt đầu học tiếng anh giao tiếp với 4 không. Với sự dẫn dắt của giáo viên cùng phương pháp Flip hiệu quả nhất trên thế giới Giúp việc học t', 'Giáo viên nhiều kinh nghiệm', '0000-00-00', '0000-00-00', '', '', '0', 0, 1, 1, 1, 0, 0, 0, 0),
(19, 35, 'Tiếng Anh giao tiếp nâng cao', 0, 'Hà Nội', 'Hai Bà Trưng', 'Số 23 ngõ 299 Phố Vọng', 'Ngoại ngữ', 'Tiếng Anh', 'TAGT', 'Nâng cao', '1 - 3 tháng', 'Trung tâm', 'Thứ 3', 'Tối', 2500000, 3000000, 'Giới thiệu  Khoá học dành riêng cho các bạn đã học level 1 tại Ngoại Ngữ 360 và những bạn đã có nền tảng vững chắc. Với sự dẫn dắt của giáo viên cùng phương pháp Flip hiệu quả nhất trên thế giới Giúp việc học tiếng anh của bạn dễ hơn và tự tin giao tiếp p', 'Giáo viên nhiều kinh nghiệm', '0000-00-00', '0000-00-00', '', '', '0', 0, 1, 1, 1, 0, 0, 0, 0),
(20, 38, 'Tiếng anh dành cho học sinh tiểu học', 0, 'Hà Nội', 'Đống Đa<br>', 'Số 49, Ngõ 6, Đặng Văn Ngữ', 'Ngoại ngữ', 'Tiếng Anh', 'TreEm', '6 - 10 tuổi', '3 - 6 tháng', 'Online', 'Thứ 7<br>C', 'Sáng<br>Tố', 3000000, 3500000, 'Giáo trình học: FAMILY & FRIENDS (1-6)  Thời lượng: 30 buổi/1 CẤP ĐỘ  Thời gian học: 90 phút do 100% giáo viên nước ngoài dạy', 'Giáo viên nhiều kinh nghiệm', '0000-00-00', '0000-00-00', '', '', '0', 0, 1, 1, 1, 0, 0, 0, 0),
(21, 38, 'Tiếng anh cho học sinh cấp 2', 0, 'Hà Nội', 'Đống Đa<br>', 'Số 49, Ngõ 6, Đặng Văn Ngữ', 'Ngoại ngữ', 'Tiếng Anh', 'TreEm', '10 - 15 tuổi', '1 - 3 tháng', 'Trung tâm', 'Thứ 7<br>C', 'Tối<br>', 3000000, 3500000, 'Giáo trình học: CONNECT ( 1,2,3,4)  Thời lượng: 150 giờ/1 CẤP ĐỘ  Thời gian học: 90 phút do 100% giáo viên nước ngoài dạy', 'Giáo viên nhiều kinh nghiệm', '0000-00-00', '0000-00-00', '', '', '0', 0, 1, 1, 1, 0, 0, 0, 0),
(26, 42, 'Giao tiếp Pro', 0, 'Hà Nội', 'Đống Đa<br>', 'CS1: 94C Phương Liệt - Hà Nội', 'Ngoại ngữ', 'Tiếng Anh', 'TAGT', 'Cơ bản', '3 - 6 tháng', 'Trung tâm', 'Thứ 2<br>Thứ 3<br>Thứ 4<br>Thứ 5<br>Thứ 6<br>Thứ 7<br>Chủ nhật<br>', 'Tối<br>', 5000000, 7000000, '<p>-&nbsp;<span style=\"font-size:22px\"><strong>Đăng k&iacute; trong th&aacute;ng 7 giảm 2.000.000</strong></span></p>\r\n\r\n<p>- Kho&aacute; học d&agrave;nh cho c&aacute;c bạn mất gốc muốn giao tiếp th&agrave;nh thạo v&agrave; c&oacute; lượng từ vựng lớn cho c&ocirc;ng việc, cuộc sống.</p>\r\n\r\n<p>- Kho&aacute; học bao gồm: 30 buổi giao tiếp với nhiều nội dung kh&aacute;c nhau li&ecirc;n quan đến cuộc sống, c&ocirc;ng việc, sở th&iacute;ch,... 15 buổi TOEIC 450+ đảm bảo đầu ra để c&aacute;c bạn c&oacute; thể thi lấy chứng chỉ.</p>\r\n\r\n<p>- Sĩ số lớp học: 15-20 người</p>\r\n\r\n<p>- Kho&aacute; học 45 buổi(chưa bao gồm c&aacute;c buổi ngoại kho&aacute;), diễn ra trong 5 th&aacute;ng, một tuần 2 buổi, mỗi buổi 1,5 tiếng.</p>\r\n\r\n<p>- Cam kết sau kho&aacute; học: Giao tiếp th&agrave;nh thạo, Thi chứng chỉ TOEIC 450+.</p>\r\n', '<p>- Giảng vi&ecirc;n: L&ecirc; Ngọc Hải. Tr&igrave;nh độ: 110 TOEFL, 980 TOEIC. Kinh nghiệm 3 năm giảng dạy TOEIC v&agrave; giao tiếp.</p>\r\n\r\n<p>- Chứng chỉ: TESOL, chứng chỉ IELTS năm 2017.</p>\r\n\r\n<p>- Người Việt Nam. Tiếng anh Anh-Mỹ</p>\r\n', '2018-07-09', '2018-07-09', '', '', '20', 0, 0, 1, 1, 0, 1, 1, 0),
(27, 42, 'TOEIC 0-450+', 0, 'Hà Nội', 'Đống Đa<br>', 'CS1: 94C Phương Liệt - Hà Nội', 'Ngoại ngữ', 'Tiếng Anh', 'TOEIC', '0 - 450', '1 - 3 tháng', 'Trung tâm', 'Thứ 2<br>Thứ 5<br>', 'Tối<br>', 2500000, 3000000, '<p><u><span style=\"font-size:22px\"><strong>Th&aacute;ng 7 đăng k&iacute; 1 người giảm 500.000 Th&aacute;ng 7 đăng k&iacute; 2 người giảm 700.000 Th&aacute;ng 7 đăng k&iacute; 4 người giảm 1.000.000 Tặng kho&aacute; tin học IC3</strong></span></u></p>\r\n\r\n<p>- Kho&aacute; học d&agrave;nh cho c&aacute;c bạn mất gốc muốn thi TOEIC để đổi điểm ở trường đại học hoặc thi chứng chỉ TOEIC c&oacute; hiệu lực trong 2 năm.</p>\r\n\r\n<p>- Kho&aacute; học gồm 22 buổi học với lộ tr&igrave;nh cụ thể để bạn đạt được mục ti&ecirc;u điểm của m&igrave;nh.</p>\r\n\r\n<p>- Sĩ số lớp học: 15-20 người</p>\r\n\r\n<p>- Kho&aacute; học 22 buổi(chưa bao gồm c&aacute;c buổi ngoại kho&aacute;), diễn ra trong 2,5 th&aacute;ng, một tuần 2 buổi, mỗi buổi 1,5 tiếng. Cụ thể:</p>\r\n\r\n<p>+ Thứ 2: 19h45-21h15</p>\r\n\r\n<p>+ Thứ 5: 19h45-21h15</p>\r\n\r\n<p>- Cam kết sau kho&aacute; học: Thi chứng chỉ TOEIC 450+.</p>\r\n', '<p>- Giảng vi&ecirc;n: L&ecirc; Ngọc Hải. Tr&igrave;nh độ: 110 TOEFL, 980 TOEIC.</p>\r\n\r\n<p>- Kinh nghiệm 3 năm giảng dạy TOEIC v&agrave; giao tiếp.</p>\r\n\r\n<p>- Chứng chỉ: TESOL, chứng chỉ IELTS năm 2017. - Người Việt Nam. Tiếng anh Anh-Mỹ</p>\r\n', '2018-07-10', '2018-07-10', '', '', '15 - 20', 0, 0, 1, 1, 0, 1, 1, 0),
(28, 42, 'TOEIC 600+', 0, 'Hà Nội', 'Đống Đa<br>', 'CS1: 94C Phương Liệt - Hà Nội', 'Ngoại ngữ', 'Tiếng Anh', 'TOEIC', '600 - 850', '1 - 3 tháng', 'Trung tâm', 'Thứ 3<br>Thứ 6<br>', 'Tối<br>', 3000000, 3000000, '<p><strong><span style=\"font-size:22px\">Th&aacute;ng 7 đăng k&iacute; 1 người giảm 500.000 Th&aacute;ng 7 đăng k&iacute; 2 người giảm 700.000 Th&aacute;ng 7 đăng k&iacute; 4 người giảm 1.000.000 Tặng kho&aacute; tin học IC3</span></strong></p>\r\n\r\n<p>- Kho&aacute; học d&agrave;nh cho c&aacute;c bạn mất gốc muốn thi TOEIC để đổi điểm ở trường đại học hoặc thi chứng chỉ TOEIC c&oacute; hiệu lực trong 2 năm.</p>\r\n\r\n<p>- Kho&aacute; học gồm 22 buổi học với lộ tr&igrave;nh cụ thể để bạn đạt được mục ti&ecirc;u điểm của m&igrave;nh.</p>\r\n\r\n<p>- Sĩ số lớp học: 15-20 người</p>\r\n\r\n<p>- Kho&aacute; học 22 buổi(chưa bao gồm c&aacute;c buổi ngoại kho&aacute;), diễn ra trong 2,5 th&aacute;ng, một tuần 2 buổi, mỗi buổi 1,5 tiếng. Cụ thể:</p>\r\n\r\n<p>+ Thứ 3: 19h45-21h15</p>\r\n\r\n<p>+ Thứ 6: 19h45-21h15</p>\r\n\r\n<p>- Cam kết sau kho&aacute; học: Thi chứng chỉ TOEIC 600+.</p>\r\n', '<p>- Giảng vi&ecirc;n: L&ecirc; Ngọc Hải. Tr&igrave;nh độ: 110 TOEFL, 980 TOEIC.</p>\r\n\r\n<p>- Kinh nghiệm 3 năm giảng dạy TOEIC v&agrave; giao tiếp.</p>\r\n\r\n<p>- Chứng chỉ: TESOL, chứng chỉ IELTS năm 2017.</p>\r\n\r\n<p>- Người Việt Nam. Tiếng anh Anh-Mỹ</p>\r\n', '2018-07-10', '2018-07-10', '', '', '15 - 20', 0, 0, 1, 1, 0, 1, 1, 0),
(29, 42, 'TOEIC 0-450+', 0, 'Hà Nội', 'Đống Đa<br>', 'CS1: 94C Phương Liệt - Hà Nội', 'Ngoại ngữ', 'Tiếng Anh', 'TOEIC', '0 - 450', '1 - 3 tháng', 'Trung tâm', 'Thứ 2<br>Thứ 5<br>', 'Tối<br>', 2500000, 2500000, '<p><u><strong><span style=\"font-size:22px\">-Th&aacute;ng 7 đăng k&iacute; 1 người giảm 500.000 </span></strong></u></p>\r\n\r\n<p><u><strong><span style=\"font-size:22px\">- Th&aacute;ng 7 đăng k&iacute; 2 người giảm 700.000 </span></strong></u></p>\r\n\r\n<p><u><strong><span style=\"font-size:22px\">- Th&aacute;ng 7 đăng k&iacute; 4 người giảm 1.000.000 </span></strong></u></p>\r\n\r\n<p><u><strong><span style=\"font-size:22px\">- Tặng kho&aacute; tin học IC3</span></strong></u></p>\r\n\r\n<p>- Kho&aacute; học d&agrave;nh cho c&aacute;c bạn mất gốc muốn thi TOEIC để đổi điểm ở trường đại học hoặc thi chứng chỉ TOEIC c&oacute; hiệu lực trong 2 năm.</p>\r\n\r\n<p>- Kho&aacute; học gồm 22 buổi học với lộ tr&igrave;nh cụ thể để bạn đạt được mục ti&ecirc;u điểm của m&igrave;nh.</p>\r\n\r\n<p>- Sĩ số lớp học: 15-20 người</p>\r\n\r\n<p>- Kho&aacute; học 22 buổi(chưa bao gồm c&aacute;c buổi ngoại kho&aacute;), diễn ra trong 2,5 th&aacute;ng, một tuần 2 buổi, mỗi buổi 1,5 tiếng.</p>\r\n\r\n<p>Cụ thể:</p>\r\n\r\n<p>+ Thứ 2: 19h45-21h15</p>\r\n\r\n<p>+ Thứ 5: 19h45-21h15</p>\r\n\r\n<p>- Cam kết sau kho&aacute; học: Thi chứng chỉ TOEIC 450+.</p>\r\n', '<p>- Giảng vi&ecirc;n: L&ecirc; Ngọc Hải. Tr&igrave;nh độ: 110 TOEFL, 980 TOEIC.</p>\r\n\r\n<p>- Kinh nghiệm 3 năm giảng dạy TOEIC v&agrave; giao tiếp.</p>\r\n\r\n<p>- Chứng chỉ: TESOL, chứng chỉ IELTS năm 2017.</p>\r\n\r\n<p>- Người Việt Nam. Tiếng anh Anh - Mỹ</p>\r\n', '2018-07-10', '2018-07-10', '', '', '15 - 20', 0, 0, 1, 1, 1, 1, 1, 0),
(30, 45, 'Mec - Tiếng Anh Trẻ Em với Chris', 0, 'Hà Nội', 'Đống Đa<br>', 'CS1: Tầng 2 số 27 Vũ Ngọc Phan, Đống Đa, Hà nội', 'Ngoại ngữ', 'Tiếng Anh', 'TreEm', 'Tất cả', '3 - 6 tháng', 'Online', 'Thứ 2<br>Thứ 3<br>Thứ 4<br>Thứ 5<br>Thứ 6<br>Thứ 7<br>Chủ nhật<br>', 'Sáng<br>Chiều<br>Tối<br>', 7700000, 7700000, '<p>&nbsp;</p>\r\n\r\n<p>- 170.000VND/buổi, thu học ph&iacute; 3 th&aacute;ng một lần</p>\r\n\r\n<p>- Về gi&aacute;o tr&igrave;nh: Gi&aacute;o tr&igrave;nh KET Objective của đại học Cambridge v&agrave; Family &amp; Friend của Oxford</p>\r\n\r\n<p>- Thời gian của kh&oacute;a học: 35 - 45 buổi</p>\r\n\r\n<p>- Thời lượng mỗi buổi học: 1,5h</p>\r\n\r\n<p>- Lịch học: t&ugrave;y thuộc v&agrave;o nhu cầu của học vi&ecirc;n, Trung t&acirc;m&nbsp;sẽ cố gắng để sắp xếp thời gian hợp l&yacute; nhất</p>\r\n\r\n<p>- Lớp ưu ti&ecirc;n sắp xếp theo tr&igrave;nh độ, tuổi c&aacute;c bạn trong lớp sẽ cố gắng để s&aacute;t nhau</p>\r\n\r\n<p>- Kết quả sau kh&oacute;a học: ph&aacute;t triển đồng đều c&aacute;c kĩ năng của Tiếng Anh + l&agrave;m tốt b&agrave;i tập ở lớp Ưu đ&atilde;i:</p>\r\n\r\n<p>- Được tham dự CLB Tiếng Anh miễn ph&iacute; h&agrave;ng tuần để luyện phản xạ nghe n&oacute;i</p>\r\n\r\n<p>- Được học thử m&agrave; kh&ocirc;ng phải đ&oacute;ng khoản chi ph&iacute; n&agrave;o</p>\r\n\r\n<p>Xem chi tiết nội dung kh&oacute;a học KET tại: https://drive.google.com/file/d/1Rd0eRDppBnSA1XmSDpxDQ12Y2052esbU/view?usp=sharing</p>\r\n', '<p>- Giảng vi&ecirc;n: Chris v&agrave; cộng sự, với 4 năm kinh nghiệm dạy Trẻ em, gồm 2 năm tại h&agrave;n quốc v&agrave; 2 năm tại việt nam, chất giọng anh mĩ dễ nghe, phương ph&aacute;p dễ hiểu kể cả học sinh mới bắt đầu học cũng c&oacute; thể hiểu thầy muốn truyền đạt g&igrave;, được nhiều phụ huynh y&ecirc;u qu&yacute; v&agrave; tin tưởng</p>\r\n\r\n<p>- Chứng chỉ: TESOL của Oxford seminars&nbsp;</p>\r\n', '2018-07-11', '2018-07-11', '', '', 'Tùy từng', 0, 0, 1, 1, 1, 1, 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lo_trinh_hoc`
--

CREATE TABLE `lo_trinh_hoc` (
  `id` int(100) NOT NULL,
  `thoi_gian` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lo_trinh_hoc`
--

INSERT INTO `lo_trinh_hoc` (`id`, `thoi_gian`) VALUES
(1, '< 1 tháng'),
(2, '1 - 3 tháng'),
(3, '3 - 6 tháng'),
(4, '6 - 9 tháng'),
(5, '9 - 12 tháng'),
(6, '> 12 tháng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `luot_thich`
--

CREATE TABLE `luot_thich` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_course` int(11) NOT NULL,
  `create_at` datetime NOT NULL,
  `stt` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rate`
--

CREATE TABLE `rate` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `star` int(1) NOT NULL,
  `rate_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `rate`
--

INSERT INTO `rate` (`id`, `course_id`, `user_id`, `star`, `rate_at`) VALUES
(1, 29, 14, 5, '2018-07-12 18:37:23'),
(2, 6, 14, 5, '2018-07-12 21:30:20'),
(3, 16, 14, 1, '2018-07-12 21:43:30'),
(4, 29, 46, 5, '2018-07-13 08:21:51'),
(5, 29, 47, 5, '2018-07-13 08:34:21'),
(6, 29, 48, 5, '2018-07-13 08:35:24'),
(7, 29, 49, 5, '2018-07-13 08:36:20'),
(8, 29, 50, 5, '2018-07-13 08:37:20'),
(9, 29, 51, 5, '2018-07-13 10:03:01'),
(10, 28, 51, 5, '2018-07-13 10:12:47'),
(11, 28, 47, 5, '2018-07-13 10:14:44'),
(12, 28, 46, 4, '2018-07-13 10:15:14'),
(15, 26, 14, 5, '2018-07-13 12:05:06'),
(16, 27, 14, 5, '2018-07-13 12:13:00'),
(17, 28, 49, 5, '2018-07-13 13:53:28'),
(18, 28, 50, 5, '2018-07-13 13:53:59'),
(19, 6, 47, 5, '2018-07-13 13:57:31'),
(20, 9, 47, 5, '2018-07-13 13:57:48'),
(21, 7, 47, 5, '2018-07-13 13:57:55'),
(22, 8, 47, 5, '2018-07-13 13:58:12'),
(23, 27, 47, 5, '2018-07-13 14:03:45'),
(24, 15, 47, 5, '2018-07-13 14:04:12'),
(25, 16, 47, 5, '2018-07-13 14:04:24'),
(26, 28, 14, 5, '2018-07-14 17:17:15'),
(27, 8, 14, 5, '2018-07-14 17:51:53'),
(28, 30, 14, 5, '2018-07-14 17:56:00'),
(29, 30, 46, 5, '2018-07-16 08:15:49'),
(30, 27, 46, 5, '2018-07-16 08:16:18'),
(31, 27, 49, 5, '2018-07-24 12:07:07'),
(32, 27, 50, 5, '2018-07-24 12:07:41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trinh_do`
--

CREATE TABLE `trinh_do` (
  `ma_trinh_do` int(2) NOT NULL,
  `loai_khoa_hoc` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ten_trinh_do` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `trinh_do`
--

INSERT INTO `trinh_do` (`ma_trinh_do`, `loai_khoa_hoc`, `ten_trinh_do`) VALUES
(1, 'IELTS', '0 - 4.0'),
(2, 'IELTS', '4.0 - 5.5'),
(3, 'IELTS', '5.5 - 6.5'),
(4, 'IELTS', '6.5 - 8.0'),
(5, 'IELTS', '8.0 - 9.0'),
(6, 'TOEIC', '0 - 450'),
(7, 'TOEIC', '450 - 600'),
(8, 'TOEIC', '600 - 850'),
(9, 'TOEIC', '850 - 1000'),
(10, 'TreEm', '2 - 4 tuổi'),
(11, 'TreEm', '4 - 6 tuổi'),
(12, 'TreEm', '6 - 10 tuổi'),
(13, 'TreEm', '10 - 15 tuổi'),
(14, 'TAGT', 'Cơ bản'),
(15, 'TAGT', 'Thông thường'),
(16, 'TAGT', 'Nâng cao'),
(17, 'TreEm', 'Tất cả');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fb` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `avt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cover` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_dk` date NOT NULL,
  `gioi_tinh` tinyint(1) NOT NULL,
  `ngay_sinh` date NOT NULL,
  `fbid` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `fullname`, `phone`, `email`, `website`, `fb`, `level`, `avt`, `cover`, `ngay_dk`, `gioi_tinh`, `ngay_sinh`, `fbid`) VALUES
(14, 'admin', 'd2197c85f1152ed6860f4ec90cc3f1d5', 'Quản trị viên', '', '', '', '', 3, '', '', '0000-00-00', 0, '0000-00-00', ''),
(15, 'member', 'e10adc3949ba59abbe56e057f20f883e', 'Hoàng Hào Quang', '00000000', 'hb94@gmail.com', '', '', 0, '', '', '0000-00-00', 0, '0000-00-00', ''),
(34, 'iGIS', '8d3d0b3d8b3058258e234e742a781f71', 'Trung tâm anh ngữ iGIS', '(024) 6252 ', 'sm01.igis@gmail.com', '', '', 1, 'img/3718342logo1.png', '', '0000-00-00', 0, '0000-00-00', ''),
(35, 'NN360', '35fac3f573290444b9b4ece57dc04534', 'Trung tâm ngoại ngữ 360', '098 962 031', 'ngoaingu360@gmail.com', '', '', 1, 'img/ava5.png', '', '0000-00-00', 0, '0000-00-00', ''),
(38, 'Olympia', '153e719fd62d36d426a21622035b7024', 'Trung tâm Olympia Việt Nam', '', '', '', '', 1, 'img/ava1.png', '', '0000-00-00', 0, '0000-00-00', ''),
(41, 'Kohina', '8cd369dceb9c16484ad0eacdd7d4843b', '', '', 'bluestone_cut3@yahoo.com.vn', '', '', 0, '', '', '0000-00-00', 0, '0000-00-00', ''),
(42, 'Amate', '8cd369dceb9c16484ad0eacdd7d4843b', 'AMATE ENGLISH', '0947.947.62', 'amateenglish2018@gmail.com', '', 'AMATE English ( https://www.facebook.com/amateenglish/)', 1, 'img/IMATE.jpg', '', '0000-00-00', 0, '0000-00-00', ''),
(43, 'mec', '8cd369dceb9c16484ad0eacdd7d4843b', 'MEC ENGLISH - Học Tiếng Anh Với Chris', '0931 502 31', 'ngochaik8n@gmail.com', '', 'https://www.facebook.com/ngochaik8n', 0, '', '', '0000-00-00', 0, '0000-00-00', ''),
(44, 'Mec1', '8cd369dceb9c16484ad0eacdd7d4843b', '', '', '', '', '', 0, '', '', '0000-00-00', 0, '0000-00-00', ''),
(45, 'trungtammec', '8cd369dceb9c16484ad0eacdd7d4843b', 'Amate', '', '', '', '', 1, '', '', '0000-00-00', 0, '0000-00-00', ''),
(46, 'Trangcun', '827ccb0eea8a706c4c34a16891f84e7b', '', '', 'trang2106@gmail.com', '', '', 0, 'img/3.gif', '', '0000-00-00', 0, '0000-00-00', ''),
(47, 'Masubasu', '827ccb0eea8a706c4c34a16891f84e7b', '', '', '', '', '', 0, '', '', '0000-00-00', 0, '0000-00-00', ''),
(48, 'HongAnh', '827ccb0eea8a706c4c34a16891f84e7b', '', '', '', '', '', 0, '', '', '0000-00-00', 0, '0000-00-00', ''),
(49, 'Toanmot', '827ccb0eea8a706c4c34a16891f84e7b', '', '', '', '', '', 0, '', '', '0000-00-00', 0, '0000-00-00', ''),
(50, 'Lansocu', '827ccb0eea8a706c4c34a16891f84e7b', '', '', '', '', '', 0, '', '', '0000-00-00', 0, '0000-00-00', ''),
(51, 'Congtu', '827ccb0eea8a706c4c34a16891f84e7b', '', '', '', '', '', 0, '', '', '0000-00-00', 0, '0000-00-00', ''),
(52, 'trangvm1201@gmail.com', '6fd1abfcaf7427292a02f79f96c2f0d1', '', '', 'trangvm1201@gmail.com', '', '', 0, '', '', '0000-00-00', 0, '0000-00-00', ''),
(53, 'Nguyễn Thị Tình', '3e9817404ca456d42e878922320d2410', '', '', 'nguyentinh26062017@gmail.com', '', '', 0, '', '', '0000-00-00', 0, '0000-00-00', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_course` int(11) NOT NULL,
  `is_course` int(11) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_blog_create_by__user_id` (`create_by`),
  ADD KEY `fk_blog_update_by__user_id` (`update_by`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user` (`id_user`),
  ADD KEY `fk_course` (`id_course`);

--
-- Chỉ mục cho bảng `course_register`
--
ALTER TABLE `course_register`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `dia_diem`
--
ALTER TABLE `dia_diem`
  ADD PRIMARY KEY (`madd`);

--
-- Chỉ mục cho bảng `hinh_anh`
--
ALTER TABLE `hinh_anh`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_hinhanh_user_user_id` (`id_user`),
  ADD KEY `fk_id_course` (`id_course`);

--
-- Chỉ mục cho bảng `hinh_thuc_hoc`
--
ALTER TABLE `hinh_thuc_hoc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khoa_hoc`
--
ALTER TABLE `khoa_hoc`
  ADD PRIMARY KEY (`ma_khoa_hoc`),
  ADD KEY `fk_matt_tbl_khoahoc` (`ma_trung_tam`);

--
-- Chỉ mục cho bảng `lo_trinh_hoc`
--
ALTER TABLE `lo_trinh_hoc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `luot_thich`
--
ALTER TABLE `luot_thich`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_rate_user` (`user_id`),
  ADD KEY `fk_rate_course` (`course_id`);

--
-- Chỉ mục cho bảng `trinh_do`
--
ALTER TABLE `trinh_do`
  ADD PRIMARY KEY (`ma_trinh_do`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Chỉ mục cho bảng `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `course_register`
--
ALTER TABLE `course_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `dia_diem`
--
ALTER TABLE `dia_diem`
  MODIFY `madd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `hinh_anh`
--
ALTER TABLE `hinh_anh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hinh_thuc_hoc`
--
ALTER TABLE `hinh_thuc_hoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khoa_hoc`
--
ALTER TABLE `khoa_hoc`
  MODIFY `ma_khoa_hoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `lo_trinh_hoc`
--
ALTER TABLE `lo_trinh_hoc`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `luot_thich`
--
ALTER TABLE `luot_thich`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `rate`
--
ALTER TABLE `rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `trinh_do`
--
ALTER TABLE `trinh_do`
  MODIFY `ma_trinh_do` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT cho bảng `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `fk_blog_create_by__user_id` FOREIGN KEY (`create_by`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `fk_blog_update_by__user_id` FOREIGN KEY (`update_by`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_course` FOREIGN KEY (`id_course`) REFERENCES `khoa_hoc` (`ma_khoa_hoc`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `hinh_anh`
--
ALTER TABLE `hinh_anh`
  ADD CONSTRAINT `fk_hinhanh_user_user_id` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_course` FOREIGN KEY (`id_course`) REFERENCES `khoa_hoc` (`ma_khoa_hoc`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `khoa_hoc`
--
ALTER TABLE `khoa_hoc`
  ADD CONSTRAINT `fk_matt_tbl_khoahoc` FOREIGN KEY (`ma_trung_tam`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `rate`
--
ALTER TABLE `rate`
  ADD CONSTRAINT `fk_rate_course` FOREIGN KEY (`course_id`) REFERENCES `khoa_hoc` (`ma_khoa_hoc`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_rate_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
