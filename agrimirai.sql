-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jun 2025 pada 19.48
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agrimirai`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `namaAdmin` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mitra`
--

CREATE TABLE `mitra` (
  `id_mitra` int(5) NOT NULL,
  `Nama_mitra` varchar(15) NOT NULL,
  `Alamat_usaha` int(11) NOT NULL,
  `Produk` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `registrasi`
--

CREATE TABLE `registrasi` (
  `Nama` varchar(25) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Jenis_kelamin` enum('Laki-Laki','Perempuan','','') NOT NULL,
  `Alamat` varchar(25) NOT NULL,
  `No_Telp` varchar(16) NOT NULL,
  `Kategori_Petani` enum('Petani Sayur','Petani Buah','Petani Pokok','') NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `registrasi`
--

INSERT INTO `registrasi` (`Nama`, `Tanggal_Lahir`, `Jenis_kelamin`, `Alamat`, `No_Telp`, `Kategori_Petani`, `Email`, `Password`) VALUES
('aqillaziidaneakbar', '2003-12-01', 'Laki-Laki', 'Perum Griya Intan Permai', '085608064055', '', 'zidanxjr8@gmail.com', 'zxayn123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabelsjb_agrimirai`
--

CREATE TABLE `tabelsjb_agrimirai` (
  `Id_User` int(11) NOT NULL,
  `id_mitra` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `Id_user` int(11) NOT NULL,
  `NamaUser` varchar(25) NOT NULL,
  `Alamat` varchar(15) NOT NULL,
  `TanggalLahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `mitra`
--
ALTER TABLE `mitra`
  ADD PRIMARY KEY (`id_mitra`);

--
-- Indeks untuk tabel `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`Email`);

--
-- Indeks untuk tabel `tabelsjb_agrimirai`
--
ALTER TABLE `tabelsjb_agrimirai`
  ADD KEY `Id_User` (`Id_User`),
  ADD KEY `id_mitra` (`id_mitra`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mitra`
--
ALTER TABLE `mitra`
  MODIFY `id_mitra` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `Id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tabelsjb_agrimirai`
--
ALTER TABLE `tabelsjb_agrimirai`
  ADD CONSTRAINT `tabelsjb_agrimirai_ibfk_1` FOREIGN KEY (`Id_User`) REFERENCES `user` (`Id_user`),
  ADD CONSTRAINT `tabelsjb_agrimirai_ibfk_2` FOREIGN KEY (`id_mitra`) REFERENCES `mitra` (`id_mitra`),
  ADD CONSTRAINT `tabelsjb_agrimirai_ibfk_3` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
