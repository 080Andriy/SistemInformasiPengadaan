-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Des 2022 pada 03.13
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mypengadaan3`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapengadaan`
--

CREATE TABLE `datapengadaan` (
  `id_data` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `spesifikasi` varchar(100) NOT NULL,
  `satuan` varchar(100) NOT NULL,
  `volume` int(11) NOT NULL,
  `harga_satuan` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL,
  `pdnimpor` enum('PDN','Impor') NOT NULL,
  `keterangan` varchar(256) NOT NULL,
  `stj_kupengusul` enum('','Setuju','Tidak Setuju','Revisi') NOT NULL,
  `stj_ppk` enum('','Setuju','Tidak Setuju','Revisi') NOT NULL,
  `stj_kupengadaan` enum('','Setuju','Tidak Setuju','Revisi') NOT NULL,
  `picpengadaan` varchar(100) NOT NULL,
  `metodepengadaan` varchar(100) NOT NULL,
  `jenispengadaan` varchar(100) NOT NULL,
  `judulpengadaan` varchar(100) NOT NULL,
  `nosp` varchar(100) NOT NULL,
  `filesp` varchar(100) NOT NULL,
  `hps` varchar(100) NOT NULL,
  `bast` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_perencanaan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `datapengadaan`
--

INSERT INTO `datapengadaan` (`id_data`, `nama_barang`, `spesifikasi`, `satuan`, `volume`, `harga_satuan`, `total`, `pdnimpor`, `keterangan`, `stj_kupengusul`, `stj_ppk`, `stj_kupengadaan`, `picpengadaan`, `metodepengadaan`, `jenispengadaan`, `judulpengadaan`, `nosp`, `filesp`, `hps`, `bast`, `id_user`, `id_perencanaan`) VALUES
(45, 'Mouse', 'i8', 'unit', 2, '3000', '6000', 'PDN', '', 'Setuju', 'Setuju', 'Setuju', '', '', '', '', '', '', '', '', 1, 23),
(47, 'Kamera', 'Logitech', 'unit', 4, '3000', '12000', 'PDN', '', 'Setuju', 'Setuju', 'Setuju', '', '', '', '', '', '', '', '', 1, 23),
(49, 'Mouseeee', 'Logitech', 'unit', 3, '1000', '3000', 'PDN', '', 'Setuju', 'Setuju', 'Setuju', '', '', '', '', '', '', '', '', 1, 23),
(50, 'Lampu', 'asdfga', 'unit', 4, '3000', '12000', 'PDN', '', 'Setuju', '', '', '', '', '', '', '', '', '', '', 1, 23),
(51, 'Mouse', 'Logitech', 'unit', 2, '1000', '2000', 'Impor', 'hitam', '', '', '', '', '', '', '', '', '', '', '', 1, 24),
(52, 'fghjk', 'fghjkl', 'dfghjmk,', 12, '1000', '12000', 'PDN', '', 'Revisi', '', '', '', '', '', '', '', '', '', '', 1, 25),
(55, 'Mouse', 'i8', 'unit', 2, '1000', '2000', 'PDN', '', '', '', '', '', '', '', '', '', '', '', '', 1, 23),
(56, 'Mouse', 'Lumix GH5123', 'unit', 4, '3000', '12000', 'PDN', '', '', '', '', 'asdfgh', 'asdfg', 'dfghgfds', 'assdfghgf', 'wertghyui', 'Prosedur_Evaluasi_Pengadaan_Barang_Jasa2.pdf', 'Prosedur_Pelaksanaan_Pengadaan_Barang_Jasa2.pdf', 'Prosedur_Perencanaan_Pengadaan_Barang_Jasa2.pdf', 1, 23);

-- --------------------------------------------------------

--
-- Struktur dari tabel `perencanaan`
--

CREATE TABLE `perencanaan` (
  `id_perencanaan` int(11) NOT NULL,
  `kokegiatan` varchar(100) NOT NULL,
  `kakegiatan` varchar(100) NOT NULL,
  `detailakun` varchar(100) NOT NULL,
  `namapaket` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `perencanaan`
--

INSERT INTO `perencanaan` (`id_perencanaan`, `kokegiatan`, `kakegiatan`, `detailakun`, `namapaket`, `id_user`) VALUES
(20, 'iop', 'poi', 'opi', 'iiii', 1),
(21, 'asdasd', 'asdasda', 'asdadsaasdasd', 'adsdas123', 1),
(22, 'zxs', 'hkjhjk', 'rew', 'kiw', 1),
(23, 'gas', 'gas', 'gas', 'gasgasgas', 1),
(24, '12345', '78900', 'ajah', 'informatika dong', 1),
(25, 'asdfghjk', 'asdfghjkl', 'dfghjkl', 'sdfghj', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id_role` enum('pengusul','kepalaunitpengusul','ppk','kepalaunitpengadaan','staffpengadaan','pengawas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `alamat`, `email`, `id_role`) VALUES
(1, 'andri', '123', 'bengkong', 'tes', 'pengusul'),
(2, 'ilham', 'god', 'agasd', 'asdfghjk', 'pengusul'),
(3, 'toni', '123', 'bengkong', 'asdfghj', 'kepalaunitpengusul'),
(4, 'indah', '123', 'asdgfhj', 'asdfghgfds', 'kepalaunitpengadaan'),
(5, 'goatdodo', '123', 'asdfghjk', 'asdfghj', 'staffpengadaan'),
(6, 'urie', '123', 'asdf', 'asdfffffgds', 'staffpengadaan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `datapengadaan`
--
ALTER TABLE `datapengadaan`
  ADD PRIMARY KEY (`id_data`),
  ADD KEY `id_perencanaan` (`id_perencanaan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `perencanaan`
--
ALTER TABLE `perencanaan`
  ADD PRIMARY KEY (`id_perencanaan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `datapengadaan`
--
ALTER TABLE `datapengadaan`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT untuk tabel `perencanaan`
--
ALTER TABLE `perencanaan`
  MODIFY `id_perencanaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `datapengadaan`
--
ALTER TABLE `datapengadaan`
  ADD CONSTRAINT `datapengadaan_ibfk_1` FOREIGN KEY (`id_perencanaan`) REFERENCES `perencanaan` (`id_perencanaan`),
  ADD CONSTRAINT `datapengadaan_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Ketidakleluasaan untuk tabel `perencanaan`
--
ALTER TABLE `perencanaan`
  ADD CONSTRAINT `perencanaan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
