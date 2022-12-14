-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2022 at 01:27 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_vaksin`
--

CREATE TABLE `data_vaksin` (
  `no_ktp` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `vaksin1` varchar(20) NOT NULL,
  `vaksin2` varchar(20) NOT NULL,
  `vaksin3` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_vaksin`
--

INSERT INTO `data_vaksin` (`no_ktp`, `nama`, `alamat`, `vaksin1`, `vaksin2`, `vaksin3`) VALUES
('58378', 'Supri', 'Teratai3', 'sudah', 'sudah', 'belum');

-- --------------------------------------------------------

--
-- Table structure for table `hitungsegi`
--

CREATE TABLE `hitungsegi` (
  `id` int(10) NOT NULL,
  `alas` varchar(244) NOT NULL,
  `tinggi` varchar(255) NOT NULL,
  `luas_segitiga` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hitungsegi`
--

INSERT INTO `hitungsegi` (`id`, `alas`, `tinggi`, `luas_segitiga`) VALUES
(1, '23', '43', '494.5');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id_inventory` int(11) NOT NULL,
  `nama_barang` varchar(100) DEFAULT NULL,
  `kode_barang` varchar(50) DEFAULT NULL,
  `tgl` date NOT NULL,
  `quantity` int(11) NOT NULL,
  `harga` int(10) NOT NULL,
  `harga_total` decimal(14,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id_inventory`, `nama_barang`, `kode_barang`, `tgl`, `quantity`, `harga`, `harga_total`) VALUES
(1, 'Kertas', 'K92746', '2022-02-11', 4, 5240, '20960.00');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nama_mahasiswa` varchar(20) NOT NULL,
  `npm_mahasiswa` varchar(24) NOT NULL,
  `kelas_mahasiswa` varchar(29) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nama_mahasiswa`, `npm_mahasiswa`, `kelas_mahasiswa`) VALUES
('', '', ''),
('Akmal Najib', '202010225167', 'sistem basis data'),
('Maul', '2158237', 'Basis data');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `nama_mahasiswa` varchar(20) NOT NULL,
  `npm_mahasiswa` varchar(24) NOT NULL,
  `mata_kuliah` varchar(29) NOT NULL,
  `nilai` int(12) NOT NULL,
  `grade` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`nama_mahasiswa`, `npm_mahasiswa`, `mata_kuliah`, `nilai`, `grade`) VALUES
('Akmal Najib', '202010225167', 'sistem basis data', 80, 'B+'),
('Maul', '2158237', 'Basis data', 68, 'C+');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL,
  `level` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Rojali', 'rojalisiang', 'rojali123', 'pegawai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_vaksin`
--
ALTER TABLE `data_vaksin`
  ADD PRIMARY KEY (`no_ktp`);

--
-- Indexes for table `hitungsegi`
--
ALTER TABLE `hitungsegi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id_inventory`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`npm_mahasiswa`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`npm_mahasiswa`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hitungsegi`
--
ALTER TABLE `hitungsegi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id_inventory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
