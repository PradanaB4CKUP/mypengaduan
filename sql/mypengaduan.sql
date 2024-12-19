-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2024 at 04:43 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mypengaduan`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `kasus`
--

CREATE TABLE `kasus` (
  `id_kasus` int(255) NOT NULL,
  `tanggal_laporan` date NOT NULL,
  `id_pelapor` int(255) NOT NULL,
  `deskripsi_kasus` text NOT NULL,
  `status_kasus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kasus`
--

INSERT INTO `kasus` (`id_kasus`, `tanggal_laporan`, `id_pelapor`, `deskripsi_kasus`, `status_kasus`) VALUES
(1, '2024-12-19', 1, 'Tes Laporan', 'Sedang berjalan'),
(2, '2024-12-06', 2, 'Masalah pencurian', 'Selesai'),
(3, '2024-12-12', 1, 'Kemalingan', 'Sedang berjalan'),
(4, '2024-12-24', 8, '1312', 'Sedang berjalan'),
(5, '2024-12-24', 9, '12312', 'Sedang berjalan'),
(6, '2024-12-19', 10, '34534', 'Sedang berjalan'),
(7, '2024-12-20', 11, '134134', 'Sedang berjalan'),
(10, '2024-12-12', 15, 'Pencurian', 'Sedang berjalan'),
(11, '2024-12-06', 16, 'penculikan', 'Sedang berjalan');

-- --------------------------------------------------------

--
-- Table structure for table `pelapor`
--

CREATE TABLE `pelapor` (
  `id_pelapor` int(255) NOT NULL,
  `nama_pelapor` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nomor_telpon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pelapor`
--

INSERT INTO `pelapor` (`id_pelapor`, `nama_pelapor`, `alamat`, `nomor_telpon`) VALUES
(1, 'Budi Santoso Supardi', 'Bekasi Timur', '089999898981'),
(2, 'Adi Suparjo', 'Jl Dewaruci', '0899898'),
(3, 'asda', 'asdas', '7867'),
(4, 'asda', 'asdas', '7867'),
(5, 'asda', 'asdas', '7867'),
(6, 'asda', 'asdas', '7867'),
(7, 'asda', 'asdas', '7867'),
(8, 'asda', 'asdas', '7867'),
(9, 'asd', '13', '12312'),
(10, '3423', '345345', '234234'),
(11, '324234', '23423', '234134'),
(12, 'ilham', 'ilham', '089898989'),
(13, 'ilham', 'ilham', '089898989'),
(14, 'ilham', 'ilham', 'ilham'),
(15, 'ilham', 'ilham', 'ilham'),
(16, 'budi', 'budi', '01320310');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(255) NOT NULL,
  `password_user` varchar(255) NOT NULL,
  `id_pelapor` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `password_user`, `id_pelapor`) VALUES
('budi', 'budi', 16),
('ilham', 'ilham', 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kasus`
--
ALTER TABLE `kasus`
  ADD PRIMARY KEY (`id_kasus`),
  ADD KEY `id_pelapor` (`id_pelapor`);

--
-- Indexes for table `pelapor`
--
ALTER TABLE `pelapor`
  ADD PRIMARY KEY (`id_pelapor`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_pelapor` (`id_pelapor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kasus`
--
ALTER TABLE `kasus`
  MODIFY `id_kasus` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pelapor`
--
ALTER TABLE `pelapor`
  MODIFY `id_pelapor` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kasus`
--
ALTER TABLE `kasus`
  ADD CONSTRAINT `kasus_ibfk_1` FOREIGN KEY (`id_pelapor`) REFERENCES `pelapor` (`id_pelapor`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_pelapor`) REFERENCES `pelapor` (`id_pelapor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
