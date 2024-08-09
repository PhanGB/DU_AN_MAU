-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2024 at 07:47 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `du_an_mau`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(3) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `season` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `season`) VALUES
(4, 'Đồ Chơi Mầm Non', 'D_ch_i_m_m_non.webp', 0),
(5, 'Đồ Chơi Sưu Tập', 'D_ch_i_mo_hinh_nhan_v_t.webp', 0),
(6, 'Đồ Chơi Lắp Ghép', 'D_ch_i_l_p_ghep.webp', 0),
(7, 'Robot', 'Robot.webp', 0),
(8, 'Đồ Chơi Phương Tiện	', 'D_ch_i_ph_ng_ti_n.webp', 0),
(9, 'Balo, Túi Đeo & Vali', 'balo.webp', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `id` int(3) NOT NULL,
  `product_id` int(3) NOT NULL,
  `price` float(10,2) NOT NULL DEFAULT 0.00,
  `quantity` int(9) NOT NULL DEFAULT 0,
  `order_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(3) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `address` varchar(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `buy_date` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `user_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone`, `address`, `payment_method`, `buy_date`, `status`, `user_id`) VALUES
(1, 'Bánh mì', '0123456789', 'Quận 12', 'TKNN', '2024-07-24', 'ok', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(3) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `imgA` varchar(255) NOT NULL COMMENT 'ảnh con 1',
  `imgB` varchar(255) NOT NULL COMMENT 'ảnh con 2',
  `imgC` varchar(255) NOT NULL COMMENT 'ảnh con 3',
  `price` float(10,3) NOT NULL,
  `sale` int(3) NOT NULL COMMENT 'số phần trăm giảm',
  `description` varchar(1000) NOT NULL,
  `detail` varchar(500) NOT NULL,
  `status` varchar(255) NOT NULL,
  `sold` int(3) NOT NULL COMMENT 'Số lượng đã bán',
  `category_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `image`, `imgA`, `imgB`, `imgC`, `price`, `sale`, `description`, `detail`, `status`, `sold`, `category_id`) VALUES
(1, 'Đồ Chơi Máy Nuôi Thú Ảo Bitzee', 'may-nuoi-thu.avif', '', '', '', 500.000, 70, 'Đồ Chơi Máy Nuôi Thú Ảo Bitzee', '', 'Đang bán', 55, 5),
(2, 'Balo Compact Siêu Xe Dũng Mạnh', 'balo-compact.avif', '', '', '', 999.000, 70, 'Balo Compact trẻ em', '', 'Đang bán', 51, 9),
(3, 'Con Quay B-189 Booster Guilty', 'con-quay.avif', '', '', '', 699.000, 70, 'Đồ chơi bé trai được yêu thích nhất', '', 'Đang bán', 60, 5),
(4, 'Mô Hình AzuraFantasy Nature POPMART', 'mohinhAZURA.avif', '', '', '', 780.000, 70, 'Đồ chơi bán chạy', '', 'Đang bán', 80, 6),
(6, 'Bộ Đôi Pom Sành Điệu Và Bú Bê Thời Trang - Maxwell Dane', 'pom (1).webp', 'pom (2).webp', 'pom (3).webp', 'pom (4).webp', 500.000, 70, 'Bộ Đôi Pom Sành Điệu Và Bú Bê Thời Trang - Maxwell Dane', 'Xuất xứ: không rõ', 'Đang bán', 40, 5),
(7, 'Parker Brother - Trò Chơi Cuộc Đua No Apologies Tặng 1 E237', 'parker (1).webp', 'parker (2).webp', 'parker (3).webp', 'parker (4).webp', 680.000, 70, 'Parker Brother - Trò Chơi Cuộc Đua No Apologies Tặng 1 E237', 'Xuất xứ: không rõ', 'Đang bán', 30, 5),
(8, 'Lọ Thuốc Ma Thuật Pony FJSJKVBJM25-FJSKDWA', 'pony (1).webp', 'pony (2).webp', 'pony (3).webp', '', 680.000, 70, 'Lọ Thuốc Ma Thuật Pony FJSJKVBJM25-FJSKDWA', 'Xuất xứ: không rõ', 'Đang bán', 48, 5),
(9, 'Bánh Mì Barber Bread EH7392JKFBG-MRTSJK11', 'banhmi (1).webp', 'banhmi (2).webp', 'banhmi (3).webp', 'banhmi (4).webp', 700.000, 70, 'Lọ Thuốc Ma Thuật Pony FJSJKVBJM25-FJSKDWA', 'Xuất xứ: không rõ', 'Đang bán', 55, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `phone`, `gender`, `password`, `role`) VALUES
(1, 'admin', '', 'admin@gmail.com', '', '', '123', 1),
(2, 'Phan', 'Goodboy', 'xyz@gmail.com', '0123456789', 'Nam', '123456789', 0),
(3, 'new', 'ok', 'abc@gmail.com', '0123456789', 'Nam', '123456', 0),
(4, 'fan ', 'jack', 'jack@gmail.com', '0123456789', 'Nữ', '12345678', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `key_pro` (`product_id`),
  ADD KEY `key_order` (`order_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `key_user` (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `key_cate` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `key_order` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `key_pro` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `key_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `key_cate` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
