-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2020 at 06:26 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `img_kids`
--

CREATE TABLE `img_kids` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` int(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `img_kids`
--

INSERT INTO `img_kids` (`id`, `nama`, `harga`, `foto`, `kategori`) VALUES
(1, 'Topi Baseball Cap', 30000, 'kategori_image/kids/ac/k11.jpg', 'AC'),
(2, 'Kacamata Hitam', 20000, 'kategori_image/kids/ac/k12.jpg', 'AC'),
(3, 'Sepatu', 50000, 'kategori_image/kids/ac/k13.jpg', 'AC'),
(4, 'Sandal', 40000, 'kategori_image/kids/ac/k14.jpg', 'AC'),
(5, 'Jam Tangan', 100000, 'kategori_image/kids/ac/k15.jpg', 'AC'),
(6, 'Dress', 200000, 'kategori_image/kids/at/k1.jpg', 'AT'),
(7, 'Polo Shirt', 75000, 'kategori_image/kids/at/k2.jpg', 'AT'),
(8, 'Setelan Baju Tidur', 60000, 'kategori_image/kids/at/k3.jpg', 'AT'),
(9, 'Baju Tidur Biru', 40000, 'kategori_image/kids/at/k4.jpg', 'AT'),
(10, 'Turtle Neck', 40000, 'kategori_image/kids/at/k5.jpg', 'AT'),
(11, 'Sweater', 80000, 'kategori_image/kids/at/k6.jpg', 'AT'),
(12, 'Hoodie', 100000, 'kategori_image/kids/at/k7.jpg', 'AT'),
(13, 'Celana Jeans Biru', 60000, 'kategori_image/kids/bw/k8.jpg', 'BW'),
(14, 'Celana Pendek Jeans', 65000, 'kategori_image/kids/bw/k9.jpg', 'BW'),
(15, 'Celana Pendek Santai', 50000, 'kategori_image/kids/bw/k10.jpg', 'BW');

-- --------------------------------------------------------

--
-- Table structure for table `img_men`
--

CREATE TABLE `img_men` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` int(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `img_men`
--

INSERT INTO `img_men` (`id`, `nama`, `harga`, `foto`, `kategori`) VALUES
(1, 'Topi Baseball', 55000, 'kategori_image/men/ac/m11.jpg', 'AC'),
(2, 'Kacamata Hitam', 65000, 'kategori_image/men/ac/m12.jpg', 'AC'),
(3, 'Scarf', 70000, 'kategori_image/men/ac/m13.jpg', 'AC'),
(4, 'Kaos Kaki', 45000, 'kategori_image/men/ac/m14.jpg', 'AC'),
(5, 'Sarung Tangan', 35000, 'kategori_image/men/ac/m15.jpg', 'AC'),
(6, 'Kemeja Kotak-Kotak', 120000, 'kategori_image/men/at/M1.jpg', 'AT'),
(7, 'Polo Shirt', 65000, 'kategori_image/men/at/M2.jpg', 'AT'),
(8, 'Kemeja Lengan Panjang', 80000, 'kategori_image/men/at/M3.jpeg', 'AT'),
(9, 'Sweater', 250000, 'kategori_image/men/at/M5.jpg', 'AT'),
(10, 'Hoodie', 130000, 'kategori_image/men/at/M4.jpg', 'AT'),
(11, 'Jacket', 210000, 'kategori_image/men/at/M6.JPG', 'AT'),
(12, 'Celana Bahan Panjang', 140000, 'kategori_image/men/bw/M7.jpg', 'BW'),
(13, 'Celana Jeans Biru', 80000, 'kategori_image/men/bw/m8.jpg', 'BW'),
(14, 'Celana Jeans Hitam', 80000, 'kategori_image/men/bw/m9.jpg', 'BW'),
(15, 'Celana Pendek Santai', 60000, 'kategori_image/men/bw/m10.jpg', 'BW'),
(18, 'test', 100000, 'kategori_image/men/ac/test.jpg', 'AC');

-- --------------------------------------------------------

--
-- Table structure for table `img_women`
--

CREATE TABLE `img_women` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` int(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `kategori` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `img_women`
--

INSERT INTO `img_women` (`id`, `nama`, `harga`, `foto`, `kategori`) VALUES
(1, 'Baseball Cap', 55000, 'kategori_image/women/ac/w11.jpg', 'AC '),
(2, 'Kacamata', 77000, 'kategori_image/women/ac/w12.jpg', 'AC '),
(3, 'Scarf', 88000, 'kategori_image/women/ac/w13.jpg', 'AC '),
(4, 'Kaos Kaki', 60000, 'kategori_image/women/ac/w14.jpg', 'AC '),
(5, 'Jepit Rambut', 35000, 'kategori_image/women/ac/w15.jpg', 'AC '),
(6, 'Sabrina Cut', 69000, 'kategori_image/women/at/w1.jpg', 'AT'),
(7, 'Polo Shirt', 60000, 'kategori_image/women/at/w2.jpg', 'AT'),
(8, 'Blouse', 125000, 'kategori_image/women/at/w3.jpg', 'AT'),
(9, 'Sweater', 87000, 'kategori_image/women/at/w4.jpg', 'AT'),
(10, 'Crop Tee', 95000, 'kategori_image/women/at/w5.jpg', 'AT'),
(11, 'Jacket', 135000, 'kategori_image/women/at/w6.jpg', 'AT'),
(12, 'Ripped Jeans', 84000, 'kategori_image/women/bw/w7.jpg', 'BW'),
(13, 'Skinny Jeans', 110000, 'kategori_image/women/bw/w8.jpg', 'BW'),
(14, 'Celana Pendek Santai', 115000, 'kategori_image/women/bw/w9.jpg', 'BW'),
(15, 'Celana Pendek Jeans', 145000, 'kategori_image/women/bw/w10.jpg', 'BW');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` char(2) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `id_umur` char(1) NOT NULL,
  `keterangan_umur` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `id_umur`, `keterangan_umur`) VALUES
('AT', 'ATASAN', 'M', 'MEN'),
('BW', 'BAWAHAN', 'W', 'WOMEN'),
('AT', 'ATASAN', 'W', 'WOMEN'),
('AT', 'ATASAN', 'K', 'KIDS'),
('BW', 'BAWAHAN', 'M', 'MEN'),
('BW', 'BAWAHAN', 'K', 'KIDS'),
('AC', 'ACCESSORIES', 'M', 'MEN'),
('AC', 'ACCESSORIES', 'W', 'WOMEN'),
('AC', 'ACCESSORIES', 'K', 'KIDS');

-- --------------------------------------------------------

--
-- Table structure for table `kids`
--

CREATE TABLE `kids` (
  `id_umur` char(1) NOT NULL,
  `id_kategori` char(2) NOT NULL,
  `nama_item` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kids`
--

INSERT INTO `kids` (`id_umur`, `id_kategori`, `nama_item`) VALUES
('K', 'AT', 'dress '),
('K', 'AT', 'polo shirt'),
('K', 'AT', 'setelan baju tidur'),
('K', 'AT', 'baju tidur biru'),
('K', 'AT', 'turtle neck 1'),
('K', 'AT', 'sweeter '),
('K', 'AT', 'hoddie'),
('K', 'BW', 'celana jeans biru'),
('K', 'BW', 'celana pendek santai'),
('K', 'BW', 'celana pendek santai'),
('K', 'AC', 'Topi Baseball cap'),
('K', 'AC', 'kacamata hitam'),
('K', 'AC', 'sepatu'),
('K', 'AC', 'sendal'),
('K', 'AC', 'jam tangan');

-- --------------------------------------------------------

--
-- Table structure for table `men`
--

CREATE TABLE `men` (
  `id_umur` char(1) NOT NULL,
  `id_kategori` char(2) NOT NULL,
  `nama_item` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `men`
--

INSERT INTO `men` (`id_umur`, `id_kategori`, `nama_item`) VALUES
('M', 'AT', 'kemeja kotak-kotak'),
('M', 'AT', 'polo shirt'),
('M', 'AT', 'kemeja lengan panjan'),
('M', 'AT', 'sweeter'),
('M', 'AT', 'Hoddie'),
('M', 'AT', 'jacket'),
('M', 'BW', 'celana bahan panjang'),
('M', 'BW', 'celana jeans biru'),
('M', 'BW', 'Celana jeans hitam'),
('M', 'BW', 'celana pendek santai'),
('M', 'AC', 'topi baseball'),
('M', 'AC', 'kacamata hitam'),
('M', 'AC', 'Scarft'),
('M', 'AC', 'kaos kaki'),
('M', 'AC', 'sarung tangan');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(13, 'Iwan', '$2y$10$gdNv8kAwDUF/wX3wwbmiNeWJ2..QBpqb6MBYuJsMxLdjk2NDSrAbS', 'guest'),
(14, 'Leon', '$2y$10$/euJbd/yNAG97xRsOU3I2uMaIuHymPcRh8LSKM7YpLukQ2EdIdMvO', 'admin'),
(15, 'Tevin', '$2y$10$.XefHib1nwK3B2Qg0sWiVOsYkSZxTxsLkPzOMkg3Kjz6UKPe72vhu', 'admin'),
(17, 'Jesslyn', '$2y$10$mkq0lot3oegSVpUFwEcnWOD/HM31JHDvB2LYSKNTQ5VWjaPVLkih2', 'admin'),
(18, 'Alvian', '$2y$10$64OwVeqkxvfvBE1HLDnXFe47oAqFuQbCR23yUCm9d.0bnWUI9txba', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `women`
--

CREATE TABLE `women` (
  `id_umur` char(1) NOT NULL,
  `id_kategori` char(2) NOT NULL,
  `nama_item` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `women`
--

INSERT INTO `women` (`id_umur`, `id_kategori`, `nama_item`) VALUES
('W', 'AT', 'sabrina cut'),
('W', 'AT', 'polo shirt'),
('W', 'AT', 'blouse'),
('W', 'AT', 'sweeter'),
('W', 'AT', 'crop tee'),
('W', 'AT', 'jacket'),
('W', 'BW', 'Ripped Jeans'),
('W', 'BW', 'skinny jeans'),
('W', 'BW', 'celana pendek santai'),
('W', 'BW', 'celana jeans pendek '),
('W', 'AC', 'Topi Baseball cap'),
('W', 'AC', 'kacamata '),
('W', 'AC', 'scraft'),
('W', 'AC', 'kaos kaki'),
('W', 'AC', 'jepit rambut');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `img_kids`
--
ALTER TABLE `img_kids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `img_men`
--
ALTER TABLE `img_men`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `img_women`
--
ALTER TABLE `img_women`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `img_kids`
--
ALTER TABLE `img_kids`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `img_men`
--
ALTER TABLE `img_men`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `img_women`
--
ALTER TABLE `img_women`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
