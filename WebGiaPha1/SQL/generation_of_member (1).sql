-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 08, 2024 lúc 12:02 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_giapha`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `generation_of_member`
--

CREATE TABLE `generation_of_member` (
  `MemberID` int(11) NOT NULL,
  `Name_Generation_Of_Member` varchar(255) NOT NULL,
  `Data_Content_Member` text NOT NULL,
  `GenerationID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `generation_of_member`
--

INSERT INTO `generation_of_member` (`MemberID`, `Name_Generation_Of_Member`, `Data_Content_Member`, `GenerationID`) VALUES
(26, 'tan', '', 1),
(27, 'môm', '', 1),
(28, 'Bel', '', 2),
(29, 'cuc', '', 1),
(30, '123', '', 1),
(31, 'hi', '', 1),
(32, 'hiih12312', '', 1),
(33, '1eswvw', '', 1),
(34, '1231231312313123', '', 1),
(35, 'cccc', '', 1),
(36, 'Han', '', 1),
(37, 'han1', '', 1),
(38, 'cuong1', '', 1),
(39, 'lol', '', 2),
(40, 'bel1', '', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `generation_of_member`
--
ALTER TABLE `generation_of_member`
  ADD PRIMARY KEY (`MemberID`),
  ADD KEY `fk_generation_id` (`GenerationID`) USING BTREE;

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `generation_of_member`
--
ALTER TABLE `generation_of_member`
  MODIFY `MemberID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `generation_of_member`
--
ALTER TABLE `generation_of_member`
  ADD CONSTRAINT `generation_of_member_ibfk_1` FOREIGN KEY (`GenerationID`) REFERENCES `generations` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
