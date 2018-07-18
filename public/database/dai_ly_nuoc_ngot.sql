-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2018 at 05:14 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daily_nuocngot`
--
CREATE DATABASE IF NOT EXISTS `daily_nuocngot` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `daily_nuocngot`;

-- --------------------------------------------------------

--
-- Table structure for table `ckt_loai_nuoc_uong`
--

DROP TABLE IF EXISTS `ckt_loai_nuoc_uong`;
CREATE TABLE `ckt_loai_nuoc_uong` (
  `ma_loai_nuoc_uong` int(11) NOT NULL,
  `ten_nuoc_uong` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `mo_ta` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `hinh` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ckt_loai_nuoc_uong`
--

INSERT INTO `ckt_loai_nuoc_uong` (`ma_loai_nuoc_uong`, `ten_nuoc_uong`, `mo_ta`, `hinh`) VALUES
(1, 'Nước khoáng', 'Là nước khoáng chứa nhiều khoáng chất khác nhau, chẳng hạn như muối và các hợp chất lưu huỳnh.', 'nuockhoang.png'),
(2, 'Nước ngọt', 'Một loại nước ngọt thường chứa nước có ga, chất làm ngọt và hương liệu tự nhiên hoặc nhân tạo.', 'nuocngot.png'),
(3, 'Nước trái cây', 'Loại thức uống lên men tự nhiên từ các loại trái cây.', 'strongbow.png'),
(4, 'Bia', 'Là một loại đồ uống chứa cồn được sản xuất bằng quá trình lên men đường lơ lửng trong môi trường lỏng và nó không được chưng cất sau khi lên men.', 'bia.png');

-- --------------------------------------------------------

--
-- Table structure for table `ckt_nuoc_uong`
--

DROP TABLE IF EXISTS `ckt_nuoc_uong`;
CREATE TABLE `ckt_nuoc_uong` (
  `ma_nuoc_uong` int(11) NOT NULL,
  `ma_loai_nuoc_uong` int(11) NOT NULL,
  `ten_nuoc_uong` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `thanh_phan` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `dung_tich` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `xuat_xu` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Việt Nam',
  `san_xuat` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Việt Nam',
  `don_gia` double NOT NULL,
  `don_gia_khuyen_mai` double NOT NULL,
  `khuyen_mai` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `hinh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_cap_nhat` date NOT NULL,
  `dvt` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'thùng',
  `trang_thai` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ckt_nuoc_uong`
--

INSERT INTO `ckt_nuoc_uong` (`ma_nuoc_uong`, `ma_loai_nuoc_uong`, `ten_nuoc_uong`, `thanh_phan`, `dung_tich`, `xuat_xu`, `san_xuat`, `don_gia`, `don_gia_khuyen_mai`, `khuyen_mai`, `hinh`, `ngay_cap_nhat`, `dvt`, `trang_thai`) VALUES
(1, 1, 'Nước khoáng Aquafina chai (355ml)', 'Nước tinh khiết', '355ml', 'Việt Nam', 'Việt Nam', 96000, 0, '0', 'aquafina355.png', '2018-06-06', 'thùng', 0),
(2, 1, 'Nước khoáng Aquafina chai (500ml)', 'Nước tinh khiết', '500ml', 'Việt Nam', 'Việt Nam', 100000, 0, '0', 'aquafina500.png', '2018-06-06', 'thùng', 0),
(3, 1, 'Nước khoáng Aquafina chai (1.5 lít)', 'Nước tinh khiết', '1.5l', 'Việt Nam', 'Việt Nam', 100000, 0, '0', 'aquafina15.png', '2018-06-06', 'thùng', 0),
(4, 1, 'Nước khoáng Aquafina chai (5lít)', 'Nước tinh khiết', '5l', 'Việt Nam', 'Việt Nam', 100000, 0, '0', 'aquafina5.png', '2018-06-06', 'thùng', 0),
(5, 1, 'Nước khoáng Lavie chai (350ml)', 'Nước tinh khiết', '350ml', 'Việt Nam', 'Việt Nam', 100000, 0, '0', 'lavie350.png', '2018-06-06', 'thùng', 0),
(6, 1, 'Nước khoáng Lavie chai (500ml)', 'Nước tinh khiết', '500ml ', 'Việt Nam', 'Việt Nam', 100000, 0, '0', 'lavie500.png', '2018-06-06', 'thùng', 0),
(7, 1, 'Nước khoáng Lavie chai (1.5lít)', 'Nước tinh khiết', '1.5 lít ', 'Việt Nam', 'Việt Nam', 100000, 0, '0', 'lavie15.png', '2018-06-06', 'thùng', 0),
(8, 1, 'Nước khoáng Lavie chai (6lít)', 'Nước tinh khiết', '6l', 'Việt Nam', 'Việt Nam', 100000, 0, '0', 'lavie6l.png', '2018-06-06', 'thùng', 0),
(9, 1, 'Nước uống tinh khiết đóng chai Dasani (500ml)', 'Nước tinh khiết', '500ml', 'Hoa Kỳ', 'Việt Nam', 100000, 0, '0', 'dasani500.png', '2018-06-06', 'thùng', 0),
(10, 1, 'Nước uống tinh khiết đóng chai Dasani (1.5l)', 'Nước tinh khiết', '1.5l', 'Hoa Kỳ', 'Việt Nam', 100000, 0, '0', 'dasani15.png', '2018-06-06', 'thùng', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ckt_loai_nuoc_uong`
--
ALTER TABLE `ckt_loai_nuoc_uong`
  ADD PRIMARY KEY (`ma_loai_nuoc_uong`);

--
-- Indexes for table `ckt_nuoc_uong`
--
ALTER TABLE `ckt_nuoc_uong`
  ADD PRIMARY KEY (`ma_nuoc_uong`),
  ADD KEY `FK_ckt_nuoc_uong_ckt_loai_nuoc_uong` (`ma_loai_nuoc_uong`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ckt_loai_nuoc_uong`
--
ALTER TABLE `ckt_loai_nuoc_uong`
  MODIFY `ma_loai_nuoc_uong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ckt_nuoc_uong`
--
ALTER TABLE `ckt_nuoc_uong`
  MODIFY `ma_nuoc_uong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ckt_nuoc_uong`
--
ALTER TABLE `ckt_nuoc_uong`
  ADD CONSTRAINT `FK_ckt_nuoc_uong_ckt_loai_nuoc_uong` FOREIGN KEY (`ma_loai_nuoc_uong`) REFERENCES `ckt_loai_nuoc_uong` (`ma_loai_nuoc_uong`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
