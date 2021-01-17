-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2021 at 04:22 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `btn_cnweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL DEFAULT 'imagedefault.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`, `image`) VALUES
(1, 'Admin', 'admin', '123456789', 'imagedefault.png');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `idproduct` int(10) NOT NULL,
  `idcommentator` int(10) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`idproduct`, `idcommentator`, `comment`, `time`) VALUES
(1, 1, 'Đây là comment', '0000-00-00 00:00:00'),
(3, 1, 'Đây là commnent hi', '2020-12-18 17:34:01'),
(3, 2, 'Đẹp v', '2020-12-18 17:38:54'),
(4, 2, 'Đẹp vvv', '2020-12-18 17:39:39'),
(3, 3, 'Đẹp quá', '2020-12-18 17:42:05'),
(4, 4, 'Đẹp vđasadsad', '2020-12-18 17:42:05'),
(5, 3, 'Đẹp vậy', '2020-12-18 17:42:05'),
(5, 2, 'Mua luôn', '2020-12-18 17:42:05'),
(4, 1, 'Hi chủ tus', '2020-12-18 17:42:05'),
(3, 0, 'rgrgrử', '2020-12-19 22:13:36'),
(3, 0, 'Đẹp bạn ei', '2020-12-19 22:14:02'),
(3, 0, 'Đẹp bạn ei', '2020-12-19 22:17:45'),
(3, 0, 'Đẹp bạn eiiii', '2020-12-19 22:17:55'),
(3, 0, 'Đẹp bạn eiiii', '2020-12-19 22:18:45'),
(3, 0, 'Đẹp bạn eiiii hiii', '2020-12-19 22:20:28'),
(3, 0, 'aaaaaaaaaaaaaaaaa', '2020-12-19 22:22:18'),
(3, 1, 'Đẹp bạn ei', '2020-12-19 22:23:39'),
(3, 1, 'Đẹp bạn ei', '2020-12-19 22:29:26'),
(3, 1, 'Đẹp bạn ei', '2020-12-19 22:29:31'),
(4, 6, 'Đẹp bạn ui', '2020-12-19 22:36:12'),
(11, 6, 'Đẹp bạn ei', '2020-12-19 22:36:28'),
(12, 6, 'Đẹp bạn eiiii hiii', '2020-12-19 22:36:46'),
(11, 1, 'aaaaaaaaaaaaaaaaa', '2020-12-19 22:57:08'),
(17, 1, 'Đẹp bạn ei', '2020-12-19 23:24:53'),
(5, 5, 'Đẹp bạn eiiii aaaa', '2020-12-19 23:40:16'),
(15, 1, 'Đẹp bạn eiiii hiii', '2020-12-20 13:50:49'),
(3, 8, 'Mua bạn ei', '2020-12-20 17:03:35');

-- --------------------------------------------------------

--
-- Table structure for table `messenger`
--

CREATE TABLE `messenger` (
  `id_send` int(10) NOT NULL,
  `id_receive` int(10) NOT NULL,
  `content` varchar(100) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) NOT NULL,
  `id_producttype` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(50) NOT NULL,
  `describe` varchar(1000) NOT NULL,
  `image1` varchar(100) NOT NULL DEFAULT 'image_productdefault.png',
  `image2` varchar(100) NOT NULL DEFAULT 'image_productdefault.png',
  `image3` varchar(100) NOT NULL DEFAULT 'image_productdefault.png',
  `image4` varchar(100) NOT NULL DEFAULT 'image_productdefault.png',
  `image5` varchar(100) NOT NULL DEFAULT 'image_productdefault.png',
  `time` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(50) NOT NULL DEFAULT '0',
  `timeend` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `id_producttype`, `id_user`, `name`, `price`, `describe`, `image1`, `image2`, `image3`, `image4`, `image5`, `time`, `status`, `timeend`) VALUES
(3, 1, 1, 'Điện Thoại Iphone ProMAx', '10,000,000', 'xanh sạch đẹp...', '3.1.png', '3.2.png', '3.3.png', '3.4.png', '3.5.png', '0000-00-00 00:00:00', '1', '2020-12-19'),
(4, 1, 1, 'Điện Thoại sámung', '10,000,000', 'đẹp', 'image_productdefault.png', 'image_productdefault.png', 'image_productdefault.png', 'image_productdefault.png', 'image_productdefault.png', '0000-00-00 00:00:00', '1', NULL),
(5, 2, 2, 'Máy tính đẹp', '20,000,000', 'Đẹp', 'image_productdefault.png', 'image_productdefault.png', 'image_productdefault.png', 'image_productdefault.png', 'image_productdefault.png', '2020-12-16 10:06:46', '1', NULL),
(11, 1, 1, 'Điện Thoại sámung', '123,456,789', 'Đẹp không tì vết,Đẹp không tì vết,Đẹp không tì vết\r\nĐẹp không tì vết\r\nĐẹp không tì vết\r\nĐẹp không tì vết\r\nĐẹp không tì vết,Đẹp không tì vết,Đẹp không tì vết\r\nĐẹp không tì vết\r\nĐẹp không tì vết\r\nĐẹp không tì vết\r\nĐẹp không tì vết,Đẹp không tì vết,Đẹp không tì vết\r\nĐẹp không tì vết\r\nĐẹp không tì vết\r\nĐẹp không tì vết\r\nĐẹp không tì vết,Đẹp không tì vết,Đẹp không tì vết\r\nĐẹp không tì vết\r\nĐẹp không tì vết\r\nĐẹp không tì vết', '1608163714438020150702154014.5432690.jpg', '1608163714a40a221a9234c201987af27f1ecbda05.jpg', '16081637146e0a864e010fe851b11e.jpg', '16081637148115.jpg_wh860.jpg', '16081637148115.jpg_wh860.jpg', '2020-12-17 07:08:34', '0', NULL),
(12, 1, 1, 'Giang ', '123,456', 'aaaaa', '16081736016e0a864e010fe851b11e.jpg', '1608173601600_5f2cc872-4647-4624-933e-9d566b31060c.jpg', '16081736018115.jpg_wh860.jpg', '160817360153248993-bầu-trời-và-những-đám-mây-màu-xanh-bầu-trời-rộng-lớn.jpg', '160817360153248993-bầu-trời-và-những-đám-mây-màu-xanh-bầu-trời-rộng-lớn.jpg', '2020-12-17 09:53:21', '0', NULL),
(14, 3, 1, 'Tivi 100 in mới ', '10,000,000', 'Đẹp không tì vết luôn', '160836988486738737_2427094114269510_4430694799493824512_o.jpg', '160836988412326note_paper.jpg', '16083698842041025d-1d6b-47fb-a09b-f70807107ce8-0941.jpeg', '16083698846e0a864e010fe851b11e.jpg', '16083698846e0a864e010fe851b11e.jpg', '2020-12-19 16:24:44', '0', NULL),
(15, 1, 6, 'Máy tính bảng đẹp 15 inch', '12,000,000', 'Đẹp không tì vết', '1608373128Mông Cổ.jpg', '16083731288115.jpg_wh860.jpg', '16083731282041025d-1d6b-47fb-a09b-f70807107ce8-0941.jpeg', '16083731286e0a864e010fe851b11e.jpg', '16083731286e0a864e010fe851b11e.jpg', '2020-12-19 17:18:48', '0', NULL),
(16, 6, 5, 'Xe máy ABS ', '50,000,000', 'Đẹp chưa xước sơn', '160839442553248993-bầu-trời-và-những-đám-mây-màu-xanh-bầu-trời-rộng-lớn.jpg', '16083944256e0a864e010fe851b11e.jpg', '16083944258115.jpg_wh860.jpg', '1608394425bo-suu-tap-hinh-nen-rung-cay-mua-dong_1_5.jpg', '1608394425bo-suu-tap-hinh-nen-rung-cay-mua-dong_1_5.jpg', '2020-12-19 23:13:45', '0', NULL),
(17, 7, 1, 'Đồng hồ Rolex ', '10,000,000', 'Đẹp không tì vết', '1608394996news.jpg', '1608394996banner-02.png', '160839499616081637146e0a864e010fe851b11e.jpg', '160839499616081631308115.jpg_wh860.jpg', '160839499616081631308115.jpg_wh860.jpg', '2020-12-19 23:23:17', '0', NULL),
(20, 4, 5, 'Tủ lanh 300l', '19,000,000', 'Lạnh hơn thời tiết hôm nay', '1608443328bo-suu-tap-hinh-nen-rung-cay-mua-dong_1_5.jpg', '16084433282041025d-1d6b-47fb-a09b-f70807107ce8-0941.jpeg', '16084433286e0a864e010fe851b11e.jpg', '1608443328438020150702154014.5432690.jpg', '1608443328438020150702154014.5432690.jpg', '2020-12-20 12:48:48', '1', NULL),
(21, 8, 6, 'Quần áo đẹp', '1,000,000', 'Đẹp không tì vết', '1608455125438020150702154014.5432690.jpg', '16084551256e0a864e010fe851b11e.jpg', '16084551252041025d-1d6b-47fb-a09b-f70807107ce8-0941.jpeg', '16084551258115.jpg_wh860.jpg', '16084551258115.jpg_wh860.jpg', '2020-12-20 16:05:25', '1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`id`, `name`) VALUES
(1, 'Điện thoại'),
(2, 'Máy tính'),
(3, 'Ti vi'),
(4, 'Tủ lạnh'),
(5, 'Nhà bếp'),
(6, 'Xe'),
(7, 'Đồng hồ'),
(8, 'Quần áo'),
(9, 'Khác');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `image` varchar(100) NOT NULL DEFAULT 'imagedefault.png',
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `address`, `phone`, `image`, `username`, `password`, `time`) VALUES
(1, 'Nguyễn Văn A', 'Hà Nội', '012345678', 'imagedefault.png', 'user', '123456789', '0000-00-00 00:00:00'),
(2, 'Nguyễn Văn B', 'Hà Nội', '01234567890', 'imagedefault.png', 'user1', '123456789', '2020-12-16 10:05:57'),
(3, 'Nguyễn Văn C', 'Đà Nẵng', '12345678912', 'imagedefault.png', 'user2', '123456789', '2020-12-16 16:34:29'),
(4, 'Nguyễn Văn C', 'Đà Nẵng', '12345678912', 'imagedefault.png', 'user3', '1234567890', '2020-12-16 16:34:53'),
(5, 'Giang ', 'Bắc Giang', '1234567889', 'imagedefault.png', 'user4', '123456789', '2020-12-19 17:04:10'),
(6, 'Giang  Kakakaka', 'Hà Nội', '1232145678', 'imagedefault.png', 'user5', '123456789', '2020-12-19 17:17:26'),
(7, 'Nguyễn', 'Hà Nội', '0123456789', '160845816753248993-bầu-trời-và-những-đám-mây-màu-xanh-bầu-trời-rộng-lớn.jpg', 'usera', '123456789', '2020-12-20 16:56:07'),
(8, 'Nguyễn A', 'Đà Nẵng', '0123123212', '1608458563ffc92bfb-9918-4a8d-b606-ef9f5e633ebb.jpg', 'useraa', '123456789', '2020-12-20 17:02:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messenger`
--
ALTER TABLE `messenger`
  ADD KEY `fk_id-send1` (`id_send`),
  ADD KEY `fk_id-receive1` (`id_receive`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_product-type` (`id_producttype`),
  ADD KEY `fk_id-user` (`id_user`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `messenger`
--
ALTER TABLE `messenger`
  ADD CONSTRAINT `fk_id-receive` FOREIGN KEY (`id_receive`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `fk_id-receive1` FOREIGN KEY (`id_receive`) REFERENCES `admin` (`id`),
  ADD CONSTRAINT `fk_id-send` FOREIGN KEY (`id_send`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `fk_id-send1` FOREIGN KEY (`id_send`) REFERENCES `admin` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_id-user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `fk_id_product-type` FOREIGN KEY (`id_producttype`) REFERENCES `product_type` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
