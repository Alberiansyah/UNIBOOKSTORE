-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2024 at 05:38 PM
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
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_buku`
--

CREATE TABLE `tabel_buku` (
  `id_buku` varchar(10) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `nama_buku` text NOT NULL,
  `harga` int(20) NOT NULL,
  `stok` varchar(10) NOT NULL,
  `penerbit` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_buku`
--

INSERT INTO `tabel_buku` (`id_buku`, `kategori`, `nama_buku`, `harga`, `stok`, `penerbit`) VALUES
('K001', 'Keilmuan', 'Analisis &amp; Perancangan Sistem Informasi', 50000, '10', 'Penerbit Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_penerbit`
--

CREATE TABLE `tabel_penerbit` (
  `id_penerbit` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(30) NOT NULL,
  `telepon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_penerbit`
--

INSERT INTO `tabel_penerbit` (`id_penerbit`, `nama`, `alamat`, `kota`, `telepon`) VALUES
('SP01', 'Penerbit Informatika', 'Jl. Buah Batu No.121', 'Bandung', '081322201946'),
('SP02', 'Andi Offset', 'Jl. Suryalaya IX No.3', 'Bandung', '087839030688'),
('SP03', 'Danedra', 'Jl. Moch Toha 44', 'Bandung', '0225201215');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_buku`
--
ALTER TABLE `tabel_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `tabel_penerbit`
--
ALTER TABLE `tabel_penerbit`
  ADD PRIMARY KEY (`id_penerbit`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
