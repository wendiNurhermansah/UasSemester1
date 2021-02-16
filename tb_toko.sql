-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2021 at 05:11 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tb_toko`
--

-- --------------------------------------------------------

--
-- Table structure for table `tm_produk`
--

CREATE TABLE `tm_produk` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `merek` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tm_produk`
--

INSERT INTO `tm_produk` (`id`, `gambar`, `merek`, `ket`, `harga`, `created_at`, `updated_at`) VALUES
(6, '1612109316_headphone.jpg', 'SAMSUNG', 'Headphone', '1.200.000', '2021-01-31 09:08:36', '2021-01-31 09:08:36'),
(7, '1612109355_kamera.jpg', 'CANNON', 'Kamera Hd', '4.500.000', '2021-01-31 09:09:15', '2021-01-31 09:09:15'),
(8, '1612109390_laptop.jpg', 'ACER', 'Laptop 8gb', '5.000.000', '2021-01-31 09:09:50', '2021-01-31 09:09:50'),
(9, '1612109428_speaker.jpg', 'ASUS', 'speker bersuara keras.', '500.000', '2021-01-31 09:10:28', '2021-01-31 09:10:28'),
(10, '1612109467_ssd.jpg', 'OPPO', 'SSD komputer', '2.500.000', '2021-01-31 09:11:07', '2021-01-31 09:11:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tm_produk`
--
ALTER TABLE `tm_produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tm_produk`
--
ALTER TABLE `tm_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
