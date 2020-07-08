-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jul 2020 pada 03.37
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kampus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_file`
--

CREATE TABLE `data_file` (
  `id` int(11) NOT NULL,
  `ijazah` varchar(100) NOT NULL,
  `kartukel` varchar(100) NOT NULL,
  `skl` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fileup`
--

CREATE TABLE `fileup` (
  `id_file` int(11) NOT NULL,
  `nama` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `ijazah` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `kk` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `skl` varchar(200) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(11) NOT NULL,
  `kode_jurusan` varchar(100) NOT NULL,
  `nama_jurusan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id`, `kode_jurusan`, `nama_jurusan`) VALUES
(2, 'J002', 'Informatika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nama_mhs`
--

CREATE TABLE `nama_mhs` (
  `upload` varchar(100) NOT NULL,
  `id_mhs` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `alamat_mhs` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `asal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nama_mhs`
--

INSERT INTO `nama_mhs` (`upload`, `id_mhs`, `nama`, `tanggal_lahir`, `jenis_kelamin`, `alamat_mhs`, `jurusan`, `asal`) VALUES
('upload/4002302.jpg', 3, 'Sumanto', '2020-06-02', 'Laki-Laki', 'Jln gakro', 'Sistem Informasi', 'Sidoarjo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `regist_sementara`
--

CREATE TABLE `regist_sementara` (
  `id_regist` int(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `regist_sementara`
--

INSERT INTO `regist_sementara` (`id_regist`, `nama`, `user`, `password`) VALUES
(7, 'Jasinta', 'jeje', 'jeje'),
(9, '5', '5', '5'),
(10, 'Sumanto', 'Sumanto', 'Sumanto');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password_user` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password_user`) VALUES
(3, 'Reza', 'Reza', 5351980),
(4, 'Reza', 'Reza', 5351980),
(9, '1', '', 1),
(10, 'Jasinta', '', 0),
(11, '1', '1', 1),
(12, '5', '5', 5),
(13, 'Jasinta', 'jeje', 0),
(14, 'Sumanto', 'Sumanto', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_file`
--
ALTER TABLE `data_file`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `fileup`
--
ALTER TABLE `fileup`
  ADD PRIMARY KEY (`id_file`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nama_mhs`
--
ALTER TABLE `nama_mhs`
  ADD PRIMARY KEY (`id_mhs`);

--
-- Indeks untuk tabel `regist_sementara`
--
ALTER TABLE `regist_sementara`
  ADD PRIMARY KEY (`id_regist`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_file`
--
ALTER TABLE `data_file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `fileup`
--
ALTER TABLE `fileup`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `nama_mhs`
--
ALTER TABLE `nama_mhs`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `regist_sementara`
--
ALTER TABLE `regist_sementara`
  MODIFY `id_regist` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
