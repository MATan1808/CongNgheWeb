-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 06, 2024 lúc 06:59 PM
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
-- Cấu trúc bảng cho bảng `relationship`
--

CREATE TABLE `relationship` (
  `Id_Relationship` int(11) NOT NULL,
  `Name_Type_RelationShip` varchar(255) NOT NULL,
  `FromGenerationID` int(11) NOT NULL,
  `ToGenerationID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `relationship`
--
ALTER TABLE `relationship`
  ADD PRIMARY KEY (`Id_Relationship`),
  ADD KEY `fk_from_generation` (`FromGenerationID`),
  ADD KEY `fk_to_generation` (`ToGenerationID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `relationship`
--
ALTER TABLE `relationship`
  MODIFY `Id_Relationship` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `relationship`
--
ALTER TABLE `relationship`
  ADD CONSTRAINT `fk_from_generation` FOREIGN KEY (`FromGenerationID`) REFERENCES `generations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_to_generation` FOREIGN KEY (`ToGenerationID`) REFERENCES `generations` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
