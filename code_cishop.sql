-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2021 at 02:10 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `code_cishop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `slug`, `title`) VALUES
(1, 'novel', 'Novel'),
(2, 'komik', 'Komik'),
(15, 'biografi', 'Biografi'),
(16, 'dongeng', 'Dongeng'),
(20, 'antologi', 'Antologi'),
(21, 'karya-ilmiah', 'Karya Ilmiah');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `komentar` text NOT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `id_user`, `komentar`, `image`) VALUES
(1, 1, 'Aplikasinya bagus sekali', NULL),
(2, 2, 'Aplkasinya mantap', 'rnealdi-noviandi-20211204195529.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date` date NOT NULL,
  `invoice` varchar(100) NOT NULL,
  `total` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `status` enum('waiting','paid','delivered','cancel') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `id_user`, `date`, `invoice`, `total`, `name`, `address`, `phone`, `status`) VALUES
(1, 2, '2021-12-04', '220211204184349', 4800000, 'Renaldi Noviandi', 'Subang', '089878767656', 'paid'),
(2, 1, '2021-12-04', '120211204184934', 1200000, 'Renaldi', 'Subang', '098989898989', 'paid'),
(3, 1, '2021-12-04', '120211204185242', 1800000, 'Renaldi', 'Subang', '089878767656', 'waiting'),
(4, 2, '2021-12-04', '220211204185508', 4100000, 'Renaldi Noviandi', 'Subang', '089878767767', 'waiting'),
(5, 2, '2021-12-04', '220211204195948', 2000000, 'Renaldi Noviandi', 'Subang', '089878767', 'delivered');

-- --------------------------------------------------------

--
-- Table structure for table `orders_confirm`
--

CREATE TABLE `orders_confirm` (
  `id` int(11) NOT NULL,
  `id_orders` int(11) NOT NULL,
  `metode` enum('Bank','Indomaret','Dana') NOT NULL,
  `account_name` varchar(255) NOT NULL,
  `account_number` varchar(50) NOT NULL,
  `nominal` int(11) NOT NULL,
  `note` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders_confirm`
--

INSERT INTO `orders_confirm` (`id`, `id_orders`, `metode`, `account_name`, `account_number`, `nominal`, `note`, `image`) VALUES
(1, 1, 'Indomaret', 'Kasir', 'Indomaret', 4800000, '-Mantap', '220211204184349-20211204190503.png'),
(2, 2, 'Dana', 'Renaldi Noviandi', '089878767', 4200000, '-Mantap Jiwa', '120211204184934-20211204190720.png'),
(3, 5, 'Dana', 'Renaldi', '089876765676', 2000000, '-Baik', '220211204195948-20211204200123.png');

-- --------------------------------------------------------

--
-- Table structure for table `orders_detail`
--

CREATE TABLE `orders_detail` (
  `id` int(11) NOT NULL,
  `id_orders` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `qty` int(4) NOT NULL,
  `subtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders_detail`
--

INSERT INTO `orders_detail` (`id`, `id_orders`, `id_product`, `qty`, `subtotal`) VALUES
(1, 1, 8, 2, 4000000),
(2, 1, 11, 2, 800000),
(3, 2, 14, 1, 800000),
(4, 2, 9, 4, 400000),
(5, 3, 12, 2, 1000000),
(6, 3, 13, 1, 700000),
(7, 3, 9, 1, 100000),
(8, 4, 8, 2, 4000000),
(9, 4, 9, 1, 100000),
(10, 5, 8, 1, 2000000);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `is_available` tinyint(1) NOT NULL DEFAULT 1,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `id_category`, `slug`, `title`, `description`, `price`, `is_available`, `image`) VALUES
(8, 1, 'buku-1', 'Buku 1', 'Deskripsi Buku 1', 2000000, 1, 'buku-1-20211203055603.png'),
(9, 2, 'buku-2', 'Buku 2', 'Deskripsi Buku 2', 100000, 1, 'buku-2-20211203213726.png'),
(10, 15, 'buku-3', 'Buku 3', 'Deskripsi Buku 3', 300000, 1, 'buku-3-20211203214027.png'),
(11, 16, 'buku-4', 'Buku 4', 'Deskripsi Buku 4', 400000, 1, 'buku-4-20211203214107.png'),
(12, 20, 'buku-5', 'Buku 5', 'Deskripsi Buku 5', 500000, 1, 'buku-5-20211203214152.png'),
(13, 21, 'buku-7', 'Buku 7', 'Deskripsi Buku 7', 700000, 1, 'buku-7-20211203214228.png'),
(14, 1, 'buku-8', 'Buku 8', 'Deskripsi Buku 8', 800000, 1, 'buku-8-20211203214310.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `telepon` varchar(20) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','member') NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `telepon`, `email`, `password`, `role`, `is_active`, `image`) VALUES
(1, 'Admin Pedia', '083845405765', 'adminpedia@gmail.com', '$2y$10$6o3rx8c39Tb4xg2xBYbu1OEdXf9o0VqUN5KgIMtZHpjrSkf/TiDoe', 'admin', 1, NULL),
(2, 'Rnealdi Noviandi', '089767654565', 'renaldinoviandi9@gmail.com', '$2y$10$u4B3hEXkS3/AGQy0Y180OOn.U7gJXUB5MhmSRTzrKQwo.Aqyz29hC', 'member', 1, 'rnealdi-noviandi-20211204195529.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_confirm`
--
ALTER TABLE `orders_confirm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders_confirm`
--
ALTER TABLE `orders_confirm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders_detail`
--
ALTER TABLE `orders_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
