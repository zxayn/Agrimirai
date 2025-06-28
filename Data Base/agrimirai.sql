-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jun 2025 pada 07.37
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
-- Struktur dari tabel `message`
--

CREATE TABLE `message` (
  `id_pesan` int(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  `dibuat_pada` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `message`
--

INSERT INTO `message` (`id_pesan`, `firstname`, `lastname`, `email`, `pesan`, `dibuat_pada`) VALUES
(1, 'andi', 'kusuma', 'andikusuma@gmail.com', 'arifusensei', '2025-06-26 04:50:01'),
(2, 'arif', 'maulana', 'arifumaulana@gmail.com', 'balabala', '2025-06-26 04:50:49'),
(3, 'aqillaziidaneakbar', '', 'zxayn@gmail.com', 'yowww', '2025-06-26 04:57:17');

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
-- Struktur dari tabel `pengajuan_mitra`
--

CREATE TABLE `pengajuan_mitra` (
  `id` int(11) NOT NULL,
  `tgl` datetime NOT NULL,
  `nama` varchar(100) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `laporan` text NOT NULL,
  `status` varchar(20) DEFAULT 'Proses'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengajuan_mitra`
--

INSERT INTO `pengajuan_mitra` (`id`, `tgl`, `nama`, `telp`, `nama_barang`, `gambar`, `laporan`, `status`) VALUES
(1, '2025-06-20 11:44:31', 'aqillaziidaneakbar', '085608064055', 'bawok', '3.jpg', 'jidan bawok', 'Proses');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk_detail`
--

CREATE TABLE `produk_detail` (
  `id` int(11) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(20) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `thumbnail1` varchar(255) DEFAULT NULL,
  `thumbnail2` varchar(255) DEFAULT NULL,
  `thumbnail3` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `stok` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `produk_detail`
--

INSERT INTO `produk_detail` (`id`, `slug`, `name`, `price`, `image`, `thumbnail1`, `thumbnail2`, `thumbnail3`, `description`, `stok`) VALUES
(1, 'wortel', 'Wortel', 'Rp 11.000', 'pdk/wortel.jpg', 'img/wortel2.jpg', 'img/wortel1.jpg', 'img/wortel3.jpg', 'Wortel Segar AgriMirai, dipanen langsung dari kebun petani mitra kami di Dermo, Kota Kediri. Dengan warna oranye cerah, tekstur renyah, dan rasa manis alami, wortel kami adalah sumber Vitamin A (Beta-Karoten) yang sangat baik untuk kesehatan mata, kulit, dan imunitas. Wortel pilihan dari kebun mitra AgriMirai di Dermo, Kota Kediri. Warna oranye cerah, tekstur renyah, dan rasa manis alami menjadi ciri khasnya. Kaya akan Beta-Karoten (provitamin A) yang baik untuk kesehatan mata, kulit, dan imunitas. Wortel ini ideal untuk jus, sup, salad, atau camilan sehat Anda.', 95),
(2, 'tomat', 'Tomat', 'Rp 10.000', 'pdk/tomat.jpg', 'img/tomat1.jpg', 'img/tomat2.jpg', 'img/tomat3.jpg', 'Tomat segar pilihan dari kebun mitra AgriMirai, kaya akan likopen, vitamin C, dan antioksidan. Ideal untuk salad, saus, atau jus.', 82),
(3, 'timun', 'Timun', 'Rp 15.000', 'pdk/timun.jpeg', 'img/timun1.jpg', 'img/timun2.jpg', 'img/timun3.jpg', 'Timun segar dari kebun AgriMirai, renyah dan menyegarkan. Cocok untuk lalapan, salad, atau jus detoks.', 97),
(4, 'terong', 'Terong', 'Rp 13.000', 'pdk/terong.jpg', 'img/terong1.jpg', 'img/terong2.jpg', 'img/terong3.jpg', 'Terong ungu pilihan, memiliki tekstur lembut setelah dimasak. Baik untuk tumisan atau dibakar.', 99),
(5, 'selada', 'Selada', 'Rp 20.000', 'pdk/selada.jpg', 'img/selada1.jpg', 'img/selada2.jpg', 'img/selada3.jpg', 'Selada hijau segar, renyah, dan kaya serat. Cocok untuk salad atau garnish hidangan.', 98),
(6, 'kubis', 'Kubis', 'Rp 12.000', 'pdk/kubis.jpg', 'img/kubis1.jpg', 'img/kubis2.jpg', 'img/kubis3.jpg', 'Kubis segar dan padat, serbaguna untuk berbagai masakan. Sumber vitamin K dan C.', 100),
(7, 'cabai', 'Cabai', 'Rp 53.000', 'pdk/cabe.jpg', 'img/cabe1.jpg', 'img/cabe2.jpg', 'img/cabe3.jpg', 'Cabai segar dengan tingkat kepedasan yang pas untuk menambah cita rasa masakan Anda.', 100),
(8, 'kentang', 'Kentang', 'Rp 25.000', 'pdk/kentang.jpg', 'img/kentang1.jpg', 'img/kentang2.jpg', 'img/kentang3.jpg', 'Kentang segar, cocok untuk digoreng, direbus, atau dipanggang. Sumber karbohidrat yang baik.', 100),
(9, 'anggur', 'Anggur', 'Rp 60.000', 'pdk/anggur.jpg', 'img/anggur1.jpg', 'img/anggur2.jpg', 'img/anggur3.jpg', 'Anggur segar dengan rasa manis dan sedikit asam, cocok untuk camilan atau jus.', 100),
(10, 'stroberi', 'Stroberi', 'Rp 80.000', 'pdk/stroberi.jpg', 'img/stroberi1.jpg', 'img/stroberi2.jpg', 'img/stroberi3.jpg', 'Stroberi manis dan segar, kaya akan vitamin C. Ideal untuk camilan, topping, atau jus.', 100),
(11, 'buah_naga', 'Buah Naga', 'Rp 30.000', 'pdk/naga.jpg', 'img/naga1.jpg', 'img/naga2.jpg', 'img/naga3.jpg', 'Buah naga segar dengan daging manis dan biji hitam yang renyah. Baik untuk kesehatan pencernaan.', 100),
(12, 'melon', 'Melon', 'Rp 20.000', 'pdk/melon.jpg', 'img/melon1.jpg', 'img/melon2.jpg', 'img/melon3.jpg', 'Melon segar dengan rasa manis dan aroma khas. Cocok untuk pencuci mulut atau minuman segar.', 100),
(13, 'beras', 'Beras', 'Rp 14.000', 'img/beras.jpg', 'img/beras1.jpg', 'img/beras2.jpg', 'img/beras3.jpg', 'Beras kualitas premium, pulen dan wangi. Sumber karbohidrat utama untuk keluarga Anda.', 100),
(14, 'gandum', 'Gandum', 'Rp 12.000', 'img/gandum.png', 'img/gandum1.jpg', 'img/gandum2.jpg', 'img/gandum3.jpg', 'Gandum utuh berkualitas tinggi, baik untuk kesehatan pencernaan dan sumber energi.', 100),
(15, 'bawang_merah', 'Bawang Merah', 'Rp 41.300', 'img/bawang merah.jpg', 'img/bawangmerah1.jpg', 'img/bawangmerah2.jpg', 'img/bawangmerah3.jpg', 'Bawang merah segar, menambah aroma dan rasa pada masakan Anda.', 100),
(16, 'bawang_putih', 'Bawang Putih', 'Rp 41.100', 'img/bawang putih.jpg', 'img/bawangputih1.jpg', 'img/bawangputih2.jpg', 'img/bawangputih3.jpg', 'Bawang putih segar, bumbu dapur esensial untuk berbagai hidangan.', 100),
(17, 'pupuk_kohe_2l', 'Pupuk Organik Kohe 2L', 'Rp 10.000', 'ppk/10k.jpg', 'img/pupukkohe2l_1.jpg', 'img/pupukkohe2l_2.jpg', 'img/pupukkohe2l_3.jpg', 'Pupuk organik cair dari kotoran hewan, baik untuk kesuburan tanah dan pertumbuhan tanaman.', 100),
(18, 'pupuk_infarm', 'Pupuk Organik Cair Infarm', 'Rp 20.000', 'ppk/20k.jpg', 'img/pupukinfarm_1.jpg', 'img/pupukinfarm_2.jpg', 'img/pupukinfarm_3.jpg', 'Pupuk organik cair serbaguna dari Infarm, meningkatkan hasil panen secara alami.', 100),
(19, 'pupuk_tunas', 'Pupuk Penunjang Tunas 500ml', 'Rp 42.000', 'ppk/42k.jpg', 'img/pupuktunas_1.jpg', 'img/pupuktunas_2.jpg', 'img/pupuktunas_3.jpg', 'Pupuk khusus untuk merangsang pertumbuhan tunas baru pada tanaman hias dan buah.', 100),
(20, 'pupuk_padi_booster', 'Pupuk Padi POC Booster 1L', 'Rp 80.000', 'ppk/80k.jpg', 'img/pupukpadi_1.jpg', 'img/pupukpadi_2.jpg', 'img/pupukpadi_3.jpg', 'Pupuk organik cair khusus untuk tanaman padi, meningkatkan kualitas dan kuantitas gabah.', 100),
(21, 'bibit_selada_hijau', 'Bibit Selada Hijau 300s', 'Rp 6.800', 'img/selada hijau.jpg', 'img/bibitseladahijau_1.jpg', 'img/bibitseladahijau_2.jpg', 'img/bibitseladahijau_3.jpg', 'Bibit selada hijau berkualitas tinggi, cocok untuk hidroponik atau tanam di pot.', 100),
(22, 'bibit_tomat', 'Bibit Tomat 50s', 'Rp 5.800', 'img/tomat.jpg', 'img/bibittomat_1.jpg', 'img/bibittomat_2.jpg', 'img/bibittomat_3.jpg', 'Bibit tomat unggul, menghasilkan buah tomat besar dan manis.', 100),
(23, 'bibit_selada_merah', 'Bibit Selada Merah 100s', 'Rp 5.800', 'img/selada merah.jpg', 'img/bibitseladamerah_1.jpg', 'img/bibitseladamerah_2.jpg', 'img/bibitseladamerah_3.jpg', 'Bibit selada merah dengan warna menarik, cocok untuk hiasan dan konsumsi.', 100),
(24, 'bibit_pakcoy', 'Bibit Sawi Pakcoy 250s', 'Rp 6.800', 'img/pakcoy.jpg', 'img/bibitpakcoy_1.jpg', 'img/bibitpakcoy_2.jpg', 'img/bibitpakcoy_3.jpg', 'Bibit sawi pakcoy, mudah ditanam dan cepat panen. Ideal untuk tumisan.', 100);

-- --------------------------------------------------------

--
-- Struktur dari tabel `registrasi`
--

CREATE TABLE `registrasi` (
  `nama` varchar(25) NOT NULL,
  `tanggal_Lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan','','') NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `no_Telp` varchar(16) NOT NULL,
  `status` enum('Petani','Mitra','','') NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `registrasi`
--

INSERT INTO `registrasi` (`nama`, `tanggal_Lahir`, `jenis_kelamin`, `alamat`, `no_Telp`, `status`, `email`, `password`) VALUES
('arif', '2025-06-01', 'Laki-Laki', 'w', '222', 'Petani', 'Arif@A', '123456'),
('aqillaziidaneakbar', '2003-12-01', 'Laki-Laki', 'Perum Griya Intan Permai', '085608064055', 'Mitra', 'zxayn@gmail.com', 'Zxayn123');

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
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `nama_produk` varchar(100) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `tanggal` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `user_name`, `slug`, `nama_produk`, `jumlah`, `total`, `tanggal`) VALUES
(2, 'Guest', 'tomat', 'Tomat', 2, 20000, '2025-06-24 14:18:03'),
(3, 'Guest', 'tomat', 'Tomat', 2, 20000, '2025-06-24 14:18:06'),
(4, 'Guest', 'tomat', 'Tomat', 2, 20000, '2025-06-24 14:18:26'),
(5, 'Guest', 'tomat', 'Tomat', 1, 10000, '2025-06-24 14:18:29'),
(6, 'Guest', 'tomat', 'Tomat', 1, 10000, '2025-06-24 14:18:32'),
(7, 'Guest', 'tomat', 'Tomat', 1, 10000, '2025-06-24 14:18:34'),
(8, 'Guest', 'tomat', 'Tomat', 1, 10000, '2025-06-24 14:19:34'),
(9, 'Guest', 'tomat', 'Tomat', 1, 10000, '2025-06-24 14:19:36'),
(10, 'Guest', 'tomat', 'Tomat', 1, 10000, '2025-06-24 14:19:38'),
(11, 'Guest', 'tomat', 'Tomat', 1, 10000, '2025-06-24 14:21:37'),
(12, 'Guest', 'tomat', 'Tomat', 1, 10000, '2025-06-24 14:21:39'),
(13, 'Guest', 'tomat', 'Tomat', 1, 10000, '2025-06-24 14:21:41'),
(14, 'Guest', 'tomat', 'Tomat', 1, 10000, '2025-06-24 14:21:44'),
(15, 'Guest', 'tomat', 'Tomat', 1, 10000, '2025-06-24 14:21:56'),
(16, 'Guest', 'tomat', 'Tomat', 1, 10000, '2025-06-24 14:27:09'),
(17, 'Guest', 'wortel', 'Wortel', 1, 11000, '2025-06-24 14:30:30'),
(18, 'Guest', 'wortel', 'Wortel', 1, 11000, '2025-06-24 14:30:42'),
(19, 'Guest', 'wortel', 'Wortel', 1, 11000, '2025-06-24 14:30:45'),
(20, 'Guest', 'wortel', 'Wortel', 1, 11000, '2025-06-24 14:31:16'),
(21, 'aqillaziidaneakbar', 'wortel', 'Wortel', 1, 11000, '2025-06-24 14:32:29'),
(22, 'aqillaziidaneakbar', 'timun', 'Timun', 1, 15000, '2025-06-24 14:33:10'),
(23, 'aqillaziidaneakbar', 'timun', 'Timun', 1, 15000, '2025-06-24 14:33:13'),
(24, 'aqillaziidaneakbar', 'timun', 'Timun', 1, 15000, '2025-06-24 14:33:22'),
(25, 'aqillaziidaneakbar', 'terong', 'Terong', 1, 13000, '2025-06-24 14:33:29'),
(26, 'aqillaziidaneakbar', 'selada', 'Selada', 1, 20000, '2025-06-24 14:33:46'),
(27, 'aqillaziidaneakbar', 'selada', 'Selada', 1, 20000, '2025-06-24 14:33:49');

--
-- Trigger `transaksi`
--
DELIMITER $$
CREATE TRIGGER `kurangi_stok_setelah_transaksi` AFTER INSERT ON `transaksi` FOR EACH ROW BEGIN
  DECLARE current_stok INT;

  -- Ambil stok saat ini dari produk_detail
  SELECT stok INTO current_stok FROM produk_detail WHERE slug = NEW.slug LIMIT 1;

  -- Jika stok cukup, baru dikurangi
  IF current_stok >= NEW.jumlah THEN
    UPDATE produk_detail
    SET stok = stok - NEW.jumlah
    WHERE slug = NEW.slug;
  END IF;
END
$$
DELIMITER ;

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
-- Indeks untuk tabel `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indeks untuk tabel `mitra`
--
ALTER TABLE `mitra`
  ADD PRIMARY KEY (`id_mitra`);

--
-- Indeks untuk tabel `pengajuan_mitra`
--
ALTER TABLE `pengajuan_mitra`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk_detail`
--
ALTER TABLE `produk_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `tabelsjb_agrimirai`
--
ALTER TABLE `tabelsjb_agrimirai`
  ADD KEY `Id_User` (`Id_User`),
  ADD KEY `id_mitra` (`id_mitra`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_trans` (`slug`,`user_name`,`tanggal`);

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
-- AUTO_INCREMENT untuk tabel `message`
--
ALTER TABLE `message`
  MODIFY `id_pesan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `mitra`
--
ALTER TABLE `mitra`
  MODIFY `id_mitra` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pengajuan_mitra`
--
ALTER TABLE `pengajuan_mitra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `produk_detail`
--
ALTER TABLE `produk_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

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
