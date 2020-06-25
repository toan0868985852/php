-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 25, 2020 lúc 10:47 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bai_thi_php`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `register`
--

INSERT INTO `register` (`id`, `fullname`, `email`, `username`, `password`) VALUES
(14, 'nguyentoan', 'toan@gmail.com', 'toan', '$2y$10$4ozVGtByp//cBEe1qviIAen11j571xF0XoFMVFE0jayRxfIHwfZq6'),
(15, 'huytoannguyen', 'huy@gmail.com', 'huytoan', '$2y$10$IGwa..sHfp8JLi7z4CRXd.YkN6b4KjZBkvlaBTqMWjflc07fotLMu'),
(16, 'thanhbinh', 'thanh@gmail.com', 'thanh', '$2y$10$WkJSu4s8pr69syjJG9QY6uizd21rnaKBXtH6QkU6W6mPiGiRxTSNG'),
(17, 'hoangnguyen', 'hoang@gmail.com', 'hoang', '$2y$10$OMODewD75FgIh2qEhPz4mO.99SpoNjYP5qo0ft9h0xnqEpW5W.oda'),
(18, 'wrr', 'e@gmail.com', 'wqe', '$2y$10$sH8l0vWGBXiaEKFUiW6P9.CNoJYyNsTZHWBTYY64QilLhAA0QoAgi');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
