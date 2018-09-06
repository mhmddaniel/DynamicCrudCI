-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2018 at 05:23 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pariwisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id_perusahaan` int(11) NOT NULL,
  `nik_pemohon` varchar(64) NOT NULL,
  `nama_perusahaan` varchar(64) NOT NULL,
  `merek_dagang` varchar(128) NOT NULL,
  `industri_pariwisata` varchar(128) NOT NULL,
  `sub_pariwisata` varchar(128) NOT NULL,
  `jenis_perusahaan` varchar(64) NOT NULL,
  `status_perusahaan` varchar(64) NOT NULL,
  `kegiatan_utama` varchar(64) NOT NULL,
  `alamat_perusahaan` varchar(256) NOT NULL,
  `kecamatan` varchar(64) NOT NULL,
  `desa` varchar(64) NOT NULL,
  `nama_notaris` varchar(64) NOT NULL,
  `nomor_akte` varchar(64) NOT NULL,
  `tanggal_akte` date NOT NULL,
  `nama_notaris_perubahan` varchar(64) NOT NULL,
  `nomor_akte_perubahan` varchar(64) NOT NULL,
  `tanggal_akte_perubahan` date NOT NULL,
  `npwp` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`id_perusahaan`, `nik_pemohon`, `nama_perusahaan`, `merek_dagang`, `industri_pariwisata`, `sub_pariwisata`, `jenis_perusahaan`, `status_perusahaan`, `kegiatan_utama`, `alamat_perusahaan`, `kecamatan`, `desa`, `nama_notaris`, `nomor_akte`, `tanggal_akte`, `nama_notaris_perubahan`, `nomor_akte_perubahan`, `tanggal_akte_perubahan`, `npwp`) VALUES
(6, '253466467566767', 'Vantech', 'Vantech cocoid', 'Usaha Penyelengaraan Jasa Perjalanan Pariwisata', '-', 'Perorangan', 'Pusat', 'Konsultan IT', 'Jalan Lintas', '16.71.02', '16.71.02.1005', 'Arjun SH', 'AAS123454HHJY', '2012-12-12', '-', '-', '2012-12-12', '143545898990');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id_perusahaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
