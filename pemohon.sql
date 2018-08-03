-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 03, 2018 at 12:42 AM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `pariwisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `pemohon`
--

CREATE TABLE `pemohon` (
  `nik` varchar(64) NOT NULL,
  `nama_pemohon` varchar(64) NOT NULL,
  `tempat_lahir` varchar(64) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `kewarganegaraan` varchar(32) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `provinsi` varchar(64) NOT NULL,
  `kota` varchar(64) NOT NULL,
  `kecamatan` varchar(64) NOT NULL,
  `desa` varchar(64) NOT NULL,
  `jenis_kelamin` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pemohon`
--

INSERT INTO `pemohon` (`nik`, `nama_pemohon`, `tempat_lahir`, `tanggal_lahir`, `kewarganegaraan`, `alamat`, `provinsi`, `kota`, `kecamatan`, `desa`, `jenis_kelamin`) VALUES
('43547657879980', 'Arjun', 'Palembang', '1997-02-11', 'Warga Negara Asing', 'Jalan Irigasi RT.02 RW.09 No.70 , Siring Agung Agung ', '16', '16.71', '16.71.04', '16.71.04.1001', 'Perempuan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pemohon`
--
ALTER TABLE `pemohon`
  ADD PRIMARY KEY (`nik`);
