-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2022 at 06:18 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mypengadaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `datapengadaan`
--

CREATE TABLE `datapengadaan` (
  `id_data` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `spesifikasi` varchar(100) NOT NULL,
  `satuan` varchar(100) NOT NULL,
  `volume` int(11) NOT NULL,
  `harga_satuan` varchar(100) NOT NULL,
  `pdnimpor` enum('PDN','Impor') NOT NULL,
  `keterangan` varchar(256) NOT NULL,
  `stj_kupengusul` enum('Setuju','Tidak setuju','Revisi') NOT NULL,
  `stj_ppk` enum('Setuju','Tidak setuju','Revisi') NOT NULL,
  `stj_kupengadaan` enum('Setuju','Tidak setuju','Revisi') NOT NULL,
  `id_perencanaan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datapengadaan`
--

INSERT INTO `datapengadaan` (`id_data`, `nama_barang`, `spesifikasi`, `satuan`, `volume`, `harga_satuan`, `pdnimpor`, `keterangan`, `stj_kupengusul`, `stj_ppk`, `stj_kupengadaan`, `id_perencanaan`) VALUES
(1, 'cth', 'cth', 'unit', 2, '3', 'PDN', '123', 'Setuju', 'Tidak setuju', 'Setuju', 1);

-- --------------------------------------------------------

--
-- Table structure for table `perencanaan`
--

CREATE TABLE `perencanaan` (
  `id_perencanaan` int(11) NOT NULL,
  `kokegiatan` varchar(100) NOT NULL,
  `kakegiatan` varchar(100) NOT NULL,
  `detailakun` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perencanaan`
--

INSERT INTO `perencanaan` (`id_perencanaan`, `kokegiatan`, `kakegiatan`, `detailakun`) VALUES
(1, 'oiiii', 'adwwwwwww', 'sdwwwwwwww');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id_role` enum('pengusul','kepalaunitpengusul','ppk','kepalaunitpengadaan','staffpengadaan','pengawas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datapengadaan`
--
ALTER TABLE `datapengadaan`
  ADD PRIMARY KEY (`id_data`),
  ADD KEY `id_perencanaan` (`id_perencanaan`);

--
-- Indexes for table `perencanaan`
--
ALTER TABLE `perencanaan`
  ADD PRIMARY KEY (`id_perencanaan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datapengadaan`
--
ALTER TABLE `datapengadaan`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `perencanaan`
--
ALTER TABLE `perencanaan`
  MODIFY `id_perencanaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `datapengadaan`
--
ALTER TABLE `datapengadaan`
  ADD CONSTRAINT `datapengadaan_ibfk_1` FOREIGN KEY (`id_perencanaan`) REFERENCES `perencanaan` (`id_perencanaan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
