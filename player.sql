-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Mar 2024 pada 04.35
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemrograman`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `player`
--

CREATE TABLE `player` (
  `id` int(11) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `npm` int(200) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(500) NOT NULL,
  `umur` int(200) NOT NULL,
  `asal` varchar(500) NOT NULL,
  `no_hp` int(200) NOT NULL,
  `hobi` varchar(500) NOT NULL,
  `skill` varchar(500) NOT NULL,
  `makanan_kesukaan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `player`
--

INSERT INTO `player` (`id`, `nama`, `npm`, `email`, `password`, `jenis_kelamin`, `umur`, `asal`, `no_hp`, `hobi`, `skill`, `makanan_kesukaan`) VALUES
(1, 'ibat', 123456789, 'john@example.com', 'Delvinet7475', 'pria', 26, 'Jakarta', 2147483647, 'menyanyi', 'Programming', 'nasi_merah'),
(2, 'aini', 987654321, 'jane@example.com', 'fadel101', 'pria', 22, 'Surabaya', 2147483647, 'menyanyi', 'Desain Grafis', 'nasi_goreng'),
(8, 'Aini', 2147483647, 'fadelakbar528@gmail.com', 'fadel101', 'wanita', 21, 'sulawesi', 2147483647, 'olahraga', 'nyanyi', 'nasi_kuning');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `player`
--
ALTER TABLE `player`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
