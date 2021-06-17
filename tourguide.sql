-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jun 2021 pada 11.56
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourguide`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tourguide`
--

CREATE TABLE `tb_tourguide` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `daerah` varchar(100) NOT NULL,
  `nilai` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_tourguide`
--

INSERT INTO `tb_tourguide` (`id`, `nama`, `daerah`, `nilai`, `no_hp`) VALUES
(2, 'Muhammad Robithul Islam', 'Bali', '888', '0834567892'),
(3, 'dandi wijaya', 'jogjakarta', '450', '083423423425'),
(7, 'Iqbal Kurriana Putra', 'Bandung', '999', '0823124134345'),
(8, 'Cak Suga', 'NTT', '544', '082312312345');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_tourguide`
--
ALTER TABLE `tb_tourguide`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_tourguide`
--
ALTER TABLE `tb_tourguide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
