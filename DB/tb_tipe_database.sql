-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jul 2023 pada 09.40
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `listserver`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tipe_database`
--

CREATE TABLE `tb_tipe_database` (
  `id_tipe_database` int(10) NOT NULL,
  `nama_tipe_database` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_tipe_database`
--

INSERT INTO `tb_tipe_database` (`id_tipe_database`, `nama_tipe_database`) VALUES
(29, 'Data Warehouse'),
(30, 'Relational Database'),
(31, 'End-User Database'),
(34, 'Distributed Database');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_tipe_database`
--
ALTER TABLE `tb_tipe_database`
  ADD PRIMARY KEY (`id_tipe_database`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_tipe_database`
--
ALTER TABLE `tb_tipe_database`
  MODIFY `id_tipe_database` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
