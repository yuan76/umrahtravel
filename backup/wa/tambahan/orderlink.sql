-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 11, 2018 at 04:31 AM
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
-- Table structure for table `orderlink`
--

CREATE TABLE `orderlink` (
  `id_order` int(6) NOT NULL,
  `nama_dpn` varchar(20) NOT NULL,
  `nama_blk` varchar(20) NOT NULL,
  `kodeNeg` varchar(4) NOT NULL,
  `nomor` varchar(16) NOT NULL,
  `username` varchar(20) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orderlink`
--

INSERT INTO `orderlink` (`id_order`, `nama_dpn`, `nama_blk`, `kodeNeg`, `nomor`, `username`, `gambar`) VALUES
(1, 'Yuanita', 'Pratiwi', '', '089671762352', 'yuanita', 'gambar/a.JPG'),
(12, 'Zacky', 'Zacky', '', '085780652005', 'zacky', 'gambar/buku.jpg'),
(19, 'Ida', 'ida', '', '085710145257', 'ida', 'gambar/a.JPG'),
(24, 'Iman', 'Jaya', '', '081219143732', 'iman', 'gambar/a.JPG'),
(25, 'Nenin', 'Andi', '', '082156411621', 'nenin', 'gambar/buku.jpg'),
(26, 'Iwan', 'iwan', '', '081399570707', 'iwan', 'gambar/buku.jpg'),
(27, 'puput', 'puput', '', '081288398853', 'puput', 'gambar/buku.jpg'),
(28, 'aaa', 'aaa', '', '081399570707', 'aaa', 'gambar/buku.jpg'),
(29, 'uuu', 'uuu', '', '081399570707', 'uuu', 'gambar/buku.jpg'),
(30, 'kamu', 'kamu', '', '089671762352', 'kamu', 'gambar/buku.jpg'),
(31, 'lili', 'lolo', '', '081399570707', 'lili', 'gambar/berhasil.JPG'),
(32, 'jojo', 'jojo', '', '081288398853', 'jojo', 'gambar/db.JPG'),
(33, 'Juleha', 'juju', '', '081399570707', 'juleha', 'gambar/berhasil.JPG'),
(34, 'Husni', 'husni', '', '081288398853', 'husni', 'gambar/IMG_1294388173213.jpeg'),
(44, 'Yuanita', 'coba', '', '081399570707', 'yuanita1', 'gambar/IMG_397140706634.jpeg'),
(45, 'Yuanita', 'coba1', '', '081399570707', 'yuanita2', 'gambar/IMG_1683541928177.jpeg'),
(46, 'Yuanita', 'wuwu', '', '081399570707', 'yuanita3', 'gambar/IMG_397140706634.jpeg'),
(47, 'nenin', 'wowo', '', '081399570707', 'nenin1', 'gambar/buku.jpg'),
(48, 'jojo', 'bubu', '', '081399570707', 'jojo1', 'gambar/IMG_1294388173213.jpeg'),
(49, 'Yuanita', 'Cantik', '', '081399570707', 'yuanita', 'gambar/IMG_1294388173213.jpeg'),
(50, 'Yuanita', 'Lala', '', '081399570707', 'yuanita5', 'gambar/IMG_397140706634.jpeg'),
(51, 'puput', 'putri', '', '081399570707', 'puput', 'gambar/rossi1.jpg'),
(52, 'Yuanita', 'yuyu', '', '081399570707', 'yuanita', 'gambar/rossi1.jpg'),
(53, 'Yuanita', 'Jpjp', '', '081399570707', 'yuanita7', 'gambar/rossi1.jpg'),
(54, 'Yuanita', 'Popo', '', '081399570707', 'yuanita8', 'gambar/IMG_1294388173213.jpeg'),
(55, 'Yuanita', 'kiki', '', '081399570707', 'yuanita9', 'gambar/rossi1.jpg'),
(56, 'Yuanita', 'qeqe', '', '081399570707', 'yuanita10', 'gambar/buku.jpg'),
(57, 'Yuanita', 'Lili', '+90', '081399570707', 'yuanita11', 'gambar/rossi1.jpg'),
(58, 'Yuanita', 'Lyly', '61', '081399570707', 'yuanita12', 'gambar/buku.jpg'),
(59, 'Yuanita', 'Hihi', '62', '081399570707', 'yuanita13', 'gambar/buku.jpg'),
(60, 'Yuanita', 'Juju', '62', '081399570707', 'yuanita14', 'gambar/buku.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orderlink`
--
ALTER TABLE `orderlink`
  ADD PRIMARY KEY (`id_order`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orderlink`
--
ALTER TABLE `orderlink`
  MODIFY `id_order` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
