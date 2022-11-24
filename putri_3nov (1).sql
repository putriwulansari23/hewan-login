-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Nov 2022 pada 01.46
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `putri_3nov`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hewan`
--

CREATE TABLE `tb_hewan` (
  `nama_pemilik` varchar(50) NOT NULL,
  `jenis_hewan` enum('kucing','anjing','ular') NOT NULL,
  `keluhan` varchar(50) NOT NULL,
  `id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_hewan`
--

INSERT INTO `tb_hewan` (`nama_pemilik`, `jenis_hewan`, `keluhan`, `id`) VALUES
('zaky', 'kucing', ' demam', 19),
('putri', 'kucing', ' demam', 20),
('rtrt', 'kucing', ' rtr', 21),
('putri', 'anjing', ' demam', 24);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE `tb_login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `umur` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_login`
--

INSERT INTO `tb_login` (`id`, `username`, `password`, `email`, `umur`) VALUES
(1, 'munaroh', '1111', '', 0),
(2, 'putri', '2222', '', 0),
(3, 'www', 'www', 'www@gmail.com', 12),
(4, 'putri', '3333', '55yg5y6hy6h6yuh', 33);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_hewan`
--
ALTER TABLE `tb_hewan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_hewan`
--
ALTER TABLE `tb_hewan`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
