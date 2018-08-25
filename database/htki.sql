-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 23, 2018 at 07:14 PM
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
-- Database: `htki`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `idBerita` int(4) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `gambar` text NOT NULL,
  `subBerita` text NOT NULL,
  `tgl` date NOT NULL,
  `isiBerita` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`idBerita`, `judul`, `gambar`, `subBerita`, `tgl`, `isiBerita`) VALUES
(1, 'KEMENAG TERBITKAN REGULASI BARU BENAHI INDUSTRI UMRAH', 'gambar/g1.JPG', 'Kementerian Agama telah menerbitkan regulasi baru terkait penyelenggaraan ibadah umrah. Regulasi itu tertuang dalam Peraturan Menteri Agama (PMA) Nomor 8...', '2018-04-23', 'KEMENAG TERBITKAN REGULASI BARU BENAHI INDUSTRI UMRAH\r\nHome / berita / Kemenag Terbitkan Regulasi Baru Benahi Industri Umrah\r\nKemenag Terbitkan Regulasi Baru Benahi Industri Umrah\r\nADMIN 23 APR 2018 0 COMMENTS\r\nKementerian Agama telah menerbitkan regulasi baru terkait penyelenggaraan ibadah umrah. Regulasi itu tertuang dalam Peraturan Menteri Agama (PMA) Nomor 8 Tahun 2018 tentang Penyelenggaraan Perjalanan Ibadah Umrah. Terbitnya PMA ini otomatis menggantikan aturan sebelumnya, yaitu PMA Nomor 18 Tahun 2015 tentang Penyelenggaraan Perjalanan Ibadah Umrah.\r\n\r\nDirektur Jenderal Penyelenggaraan Haji dan Umrah (PHU) Kementerian Agama Nizar Ali mengatakan, regulasi baru ini diberlakukan untuk membenahi “industri” umrah. Saat ini umrah semakin diminati umat Islam sehingga berkembang menjadi “bisnis” yang besar. Dalam setahun rerata jemaah umrah dari Indonesia mencapai hampir 1 juta orang.'),
(2, 'PT HIJAU TUMBUH KEMBANG INDONESIA KERJA SAMA DENGAN BANK DKI', 'gambar/g2.JPG', 'PT Hijau Tumbuh Kembang Indonesia (HTKI) menjalin kerja sama dengan Bank DKI dalam mengembangkan bisnis travel umrah dan haji....', '2017-08-23', 'KEMENAG TERBITKAN REGULASI BARU BENAHI INDUSTRI UMRAH\r\nHome / berita / Kemenag Terbitkan Regulasi Baru Benahi Industri Umrah\r\nKemenag Terbitkan Regulasi Baru Benahi Industri Umrah\r\nADMIN 23 APR 2018 0 COMMENTS\r\nKementerian Agama telah menerbitkan regulasi baru terkait penyelenggaraan ibadah umrah. Regulasi itu tertuang dalam Peraturan Menteri Agama (PMA) Nomor 8 Tahun 2018 tentang Penyelenggaraan Perjalanan Ibadah Umrah. Terbitnya PMA ini otomatis menggantikan aturan sebelumnya, yaitu PMA Nomor 18 Tahun 2015 tentang Penyelenggaraan Perjalanan Ibadah Umrah.\r\n\r\nDirektur Jenderal Penyelenggaraan Haji dan Umrah (PHU) Kementerian Agama Nizar Ali mengatakan, regulasi baru ini diberlakukan untuk membenahi “industri” umrah. Saat ini umrah semakin diminati umat Islam sehingga berkembang menjadi “bisnis” yang besar. Dalam setahun rerata jemaah umrah dari Indonesia mencapai hampir 1 juta orang.'),
(3, 'PAKET UMROH CITY TOUR TURKI MURAH', 'gambar/g3.JPG', 'Paket Umroh City Tour Turki Istambul murah dari HTKI tour and travel untuk keberangkatan Bulan Desember 2017, Januari 2018, februari 2018, Maret 2018,...', '2016-11-21', ''),
(4, 'TATA CARA DAN PANDUAN UMROH', 'gambar/g4.JPG', 'Ibadah umroh merupakan suatu ibadah yang penuh dengan nuansa “perendahan diri”, menjauhkan diri kita dari semua sikap dan perilaku keangkuhan...', '2016-09-28', ''),
(5, 'DPR PRINGATKAN KEMENAG SEGERA BENTUK BPKH', 'gambar/g5.JPG', 'Anggota Komisi VIII DPR RI Khatibul Umam Wiranu mengingatkan Kementrian Agama terkait pembentukan Badan Pengelola Keuangan Haji (BPKH) yang belum...', '2016-03-03', ''),
(6, 'HEBATNYA BACA ISTIGHFAR', 'gambar/g6.JPG', 'Anda sering menghadiri majelis-majelis zikir, anda pasti sering sekali mendengar dari para ustaz dan ulama kita tentang pelaziman istighfar. Dalam majelis zikir...', '2016-03-01', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`idBerita`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `idBerita` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
