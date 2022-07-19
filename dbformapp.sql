-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jul 2022 pada 21.46
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbformapp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id`, `nama`, `username`, `password`) VALUES
(1, 'admin', 'admin', '12345'),
(2, 'Feri Hermawan', 'feri', '160100'),
(3, 'Imam', 'imam', '12345'),
(4, 'Imam', 'imam', '12345'),
(9, 'Aldho Yunatama', 'aldho', '12345'),
(10, 'Aldho', 'aldo', '12345'),
(11, 'Iqbal', 'ibal', '12345'),
(12, 'Deni', 'den', '1234');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id` int(11) NOT NULL,
  `p1` varchar(100) NOT NULL,
  `p2` varchar(100) NOT NULL,
  `p3` varchar(100) NOT NULL,
  `p4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `q1` varchar(100) NOT NULL,
  `q2` varchar(100) NOT NULL,
  `q3` varchar(100) NOT NULL,
  `q4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `question`
--

INSERT INTO `question` (`id`, `q1`, `q2`, `q3`, `q4`) VALUES
(19, 'Feri', '22', 'Bantarkawung', 'feri@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
