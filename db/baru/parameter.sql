-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 12, 2018 at 03:02 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sf_db019`
--

-- --------------------------------------------------------

--
-- Table structure for table `parameter`
--

CREATE TABLE `parameter` (
  `id_param` int(11) NOT NULL,
  `nama` text NOT NULL,
  `param1` text,
  `param2` text,
  `param3` text,
  `param4` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parameter`
--

INSERT INTO `parameter` (`id_param`, `nama`, `param1`, `param2`, `param3`, `param4`) VALUES
(1, 'jml_user', '1', '4136', '083892903267', NULL),
(2, 'admin', '32f6f1361a29d7e19de9beeb92a9f4683d2022003b0731f3688482f09addffba', '142d43c36a95fc9fed5e5bf921780485b3eda0cd0aff9ad12ddc957ec2504e27', NULL, NULL),
(3, 'note', 'addd', 'sd', NULL, NULL),
(4, 'coba', '1', '2', '3', NULL),
(10, 'dbank_mandiri', '014_862395', 'bca swarga', 'andini nu fatya', NULL),
(9, 'dbank_iman', '014_862395', 'bca swarga', 'andini nu fatya', NULL),
(11, 'dbank_iwan', '014_862395', 'bca swarga', 'andini nu fatya', NULL),
(12, 'seq', '0', NULL, NULL, NULL),
(13, 'Paytren', 'type', 'pyt', NULL, NULL),
(14, 'Oriflame', 'type', 'ori', NULL, NULL),
(15, 'Eco Racing', 'type', 'eco', NULL, NULL),
(17, '90000', 'harga', 'pyt', '6 bulan', NULL),
(18, '150000', 'harga', 'pyt', '1 tahun', NULL),
(19, '200000', 'harga', 'pyt', '2 tahun', NULL),
(20, '50000', 'harga', 'ori', '6 bulan', NULL),
(21, '100000', 'harga', 'ori', '1 tahun', NULL),
(22, '120000', 'harga', 'ori', '2 tahun', NULL),
(23, '55000', 'harga', 'eco', '6 bulan', NULL),
(24, '80000', 'harga', 'eco', '1 tahun', NULL),
(25, '110000', 'harga', 'eco', '2 tahun', NULL),
(26, 'lokasi', 'Bekasi', NULL, NULL, NULL),
(27, 'status', 'non aktif', NULL, NULL, NULL),
(32, '+966', 'nomor', 'Arab Saudi', '5', '9'),
(34, '+61', 'nomor', 'Australia', '4', '9'),
(37, '+973', 'nomor', 'Bahrain', '3', '8'),
(39, '+963', 'nomor', 'Syria', '9', '9'),
(40, '+60', 'nomor', 'Malaysia', '1', '9'),
(41, '+20', 'nomor', 'Mesir', '1', '10'),
(42, '+64', 'nomor', 'Selandia Baru', '2', '12'),
(47, '+86', 'nomor', 'China', '1', '11'),
(50, '+62', 'nomor', 'Indonesia', '8', '9,10,11'),
(72, '+91', 'nomor', 'India', '7,8,90,91,92,93,94,95,96,97,98,99', '10'),
(71, '+90', 'nomor', 'Turki', '5', '11'),
(76, '+05', 'nomor', 'arab saudi', '5', '9'),
(77, '+01', 'nomor', 'malaysia', '1', '9'),
(79, 'personal', 'pesanwa', 'halo saya ingin  ngobrol dengan anda', '1', NULL),
(80, 'bisnis', 'pesanwa', 'saya ingin join bisnis', '3', NULL),
(81, 'penjualan', 'pesanwa', 'saya ingin membeli ', '2', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `parameter`
--
ALTER TABLE `parameter`
  ADD PRIMARY KEY (`id_param`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `parameter`
--
ALTER TABLE `parameter`
  MODIFY `id_param` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
