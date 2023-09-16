-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Sep 2023 pada 10.49
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_pasien_poliklinik`
--

CREATE TABLE `db_pasien_poliklinik` (
  `nama` varchar(30) DEFAULT NULL,
  `jenis_klinik` varchar(30) DEFAULT NULL,
  `no_telp` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `kota` varchar(30) DEFAULT NULL,
  `tanggallahir` date DEFAULT NULL,
  `tanggalinput` datetime DEFAULT NULL,
  `kondisi` varchar(30) DEFAULT NULL,
  `id_poliklinik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `db_pasien_poliklinik`
--

INSERT INTO `db_pasien_poliklinik` (`nama`, `jenis_klinik`, `no_telp`, `email`, `kota`, `tanggallahir`, `tanggalinput`, `kondisi`, `id_poliklinik`) VALUES
('Bagus Mulyono', 'Klinik Mata', '776', 'bagus@gmail.com', 'Surabaya', '1899-06-07', '2023-05-31 15:44:33', 'Dirawat', 15),
('Putri Aflyana', 'Klinik Mata', '096725672451', 'putriaflyana@gmail.com', 'Jombang', '2000-09-19', '2023-09-16 14:08:52', 'Perlu Tindakan', 16),
('Juhik', 'Klinik THT', '096725672453', 'juhik82@gmail.com', 'Jombang', '2000-09-19', '2023-09-16 14:08:52', 'Sembuh', 17);

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_pasien_terbaru`
--

CREATE TABLE `db_pasien_terbaru` (
  `nama` varchar(30) DEFAULT NULL,
  `layanan` varchar(30) DEFAULT NULL,
  `no_telp` varchar(30) DEFAULT NULL,
  `kota` varchar(30) DEFAULT NULL,
  `tanggallahir` date DEFAULT NULL,
  `kondisi` enum('Sembuh','Dirawat','Perlu Tindakan') DEFAULT NULL,
  `tanggalinput` datetime DEFAULT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `db_pasien_terbaru`
--

INSERT INTO `db_pasien_terbaru` (`nama`, `layanan`, `no_telp`, `kota`, `tanggallahir`, `kondisi`, `tanggalinput`, `ID`) VALUES
('Bagus Mulyono', 'Poliklinik', '776', 'Surabaya', '1899-06-07', 'Dirawat', '2023-05-31 14:48:35', 19),
('Juhik', 'Poliklinik', '766', 'Surabaya', '7789-06-07', 'Sembuh', '2023-05-31 15:10:34', 24),
('Daniel Andres', 'Dokter Umum', '11321', 'Jombang', '1111-12-11', 'Perlu Tindakan', '2023-06-14 20:04:53', 33),
('Putri Aflyana', 'Poliklinik', '096725672451', 'Jombang', '2000-09-19', 'Perlu Tindakan', '2023-09-16 14:08:52', 35),
('Bagas Adi', 'Dokter Umum', '088167167972', 'Surabaya', '2004-06-16', 'Sembuh', '2023-06-14 20:04:53', 36),
('Bayu Samtika Sari', 'Dokter Umum', '11321', 'Jombang', '2000-12-11', 'Dirawat', '2023-06-14 20:04:53', 37);

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_pasien_umum`
--

CREATE TABLE `db_pasien_umum` (
  `nama` varchar(25) NOT NULL,
  `kota` varchar(25) DEFAULT NULL,
  `tanggallahir` date DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `no_telp` varchar(30) DEFAULT NULL,
  `keluhan` varchar(9000) DEFAULT NULL,
  `kondisi` varchar(30) DEFAULT NULL,
  `tanggalinput` datetime DEFAULT NULL,
  `id_umum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `db_pasien_umum`
--

INSERT INTO `db_pasien_umum` (`nama`, `kota`, `tanggallahir`, `email`, `no_telp`, `keluhan`, `kondisi`, `tanggalinput`, `id_umum`) VALUES
('Bayu Samtika Sari', 'Jombang', '2000-12-11', 'bayusamtika@gmail.com', '11321', 'Gatal2', 'Dirawat', '2023-05-31 14:47:30', 11),
('Bagas Adi', 'Jombang', '1111-11-11', 'bagas@gmail.com', '067299297158', 'Susah Tidur', 'Sembuh', '2023-06-14 20:04:53', 12),
('Daniel Andres', 'Surabaya', '2004-06-16', 'andredaniel@gmail.com', '088167167972', 'Sakit Mag', 'Perlu Tindakan', '2023-09-16 14:07:33', 13);

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `profesi` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `username`, `profesi`, `password`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'umum', 'Dokter Umum', 'umum'),
(3, 'poliklinik', 'poliklinik', 'poliklinik');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `db_pasien_poliklinik`
--
ALTER TABLE `db_pasien_poliklinik`
  ADD PRIMARY KEY (`id_poliklinik`);

--
-- Indeks untuk tabel `db_pasien_terbaru`
--
ALTER TABLE `db_pasien_terbaru`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `db_pasien_umum`
--
ALTER TABLE `db_pasien_umum`
  ADD PRIMARY KEY (`id_umum`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `db_pasien_poliklinik`
--
ALTER TABLE `db_pasien_poliklinik`
  MODIFY `id_poliklinik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `db_pasien_terbaru`
--
ALTER TABLE `db_pasien_terbaru`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `db_pasien_umum`
--
ALTER TABLE `db_pasien_umum`
  MODIFY `id_umum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
