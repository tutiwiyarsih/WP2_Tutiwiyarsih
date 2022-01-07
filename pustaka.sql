-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jan 2022 pada 23.26
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pustaka`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_buku`
--

CREATE TABLE `table_buku` (
  `id` int(11) NOT NULL,
  `judul_buku` varchar(128) CHARACTER SET latin1 NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `pengarang` varchar(64) CHARACTER SET latin1 NOT NULL,
  `penerbit` varchar(64) CHARACTER SET latin1 NOT NULL,
  `tahun_terbit` year(4) NOT NULL,
  `isb` varchar(64) CHARACTER SET latin1 NOT NULL,
  `stok` int(11) NOT NULL,
  `dipinjam` int(11) NOT NULL,
  `dibooking` int(11) NOT NULL,
  `image` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `table_buku`
--

INSERT INTO `table_buku` (`id`, `judul_buku`, `id_kategori`, `pengarang`, `penerbit`, `tahun_terbit`, `isb`, `stok`, `dipinjam`, `dibooking`, `image`) VALUES
(1, 'Statistika dengan Program Komputer', 1, 'Ahmad Kholiqul Amin', 'Deep Publish', 2014, '9786022809432', 6, 1, 1, 'img15574402455.jpg'),
(2, 'Mudah Belajar Komputer Untuk Anak ', 1, 'Bambang Agus Setiawan ', 'Huta Media ', 2014, '9786025118500', 5, 3, 1, 'img1557402397.jpg'),
(5, 'PHP Komplet', 1, 'Jubilee', 'Elex Media Kompterindo', 2107, '8346753547', 5, 1, 1, 'img1556622493.jpg'),
(10, 'Detektif Conan Ep 200', 9, 'Okigawa Sasuke', 'Cukura', 2016, '87438783987', 6, 0, 0, 'img1557401465.jpg'),
(14, 'Bahasa Indonesia', 2, 'Ummi Nur\'aini dan indriyani', 'Pusat Perbukuan ', 2015, '757254724884', 3, 0, 0, 'img1557402703.jpg'),
(15, 'Komunikasi Lintas Budaya', 5, 'Dr.Dedy Kurnia', 'Published', 2015, '878674646488', 5, 0, 0, 'img1557403165.jpg'),
(16, 'Kolaborasi Codeigniter dan Ajax dalam Perancangan ', 1, 'Anton Subagus', 'Elexx Media Komputerindo', 2017, '43345366577', 5, 0, 0, 'img1557403502'),
(17, 'From Hobby to Money', 4, 'Deasylawati', 'Elex Media Komputerindo', 2016, '87968686787879', 5, 0, 0, 'img1557403658.jpg'),
(18, 'Buku Saku Pramuka ', 8, 'Rudi Himawan ', 'Pusat Perbukuan ', 2016, '97868687978796', 6, 0, 0, 'img1557404613.jpg'),
(19, 'Rahasia Keajaiban Bumi', 3, 'Nurul Ihsan ', 'Luxima', 2014, '565756565768868', 5, 0, 0, 'img1557404689.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_kategori`
--

CREATE TABLE `table_kategori` (
  `id_kategori` int(5) NOT NULL,
  `nama_kategori` varchar(128) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `table_kategori`
--

INSERT INTO `table_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Komputer'),
(2, 'Bahasa'),
(3, 'Sains'),
(4, 'Hobby'),
(5, 'Komunikasi'),
(6, 'Hukum'),
(7, 'Agama'),
(8, 'Populer'),
(9, 'Komik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_role`
--

CREATE TABLE `table_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `table_role`
--

INSERT INTO `table_role` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `jenis` enum('Admin','Member') NOT NULL DEFAULT 'Member'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`iduser`, `username`, `password`, `jenis`) VALUES
(1, 'deni', '21232f297a57a5a743894a0e4a801fc3', 'Member'),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin'),
(6, 'bagus', '17b38fc02fd7e92f3edeb6318e3066d8', 'Member'),
(7, 'david', '172522ec1028ab781d9dfd17eaca4427', 'Member');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `table_buku`
--
ALTER TABLE `table_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `table_kategori`
--
ALTER TABLE `table_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `table_role`
--
ALTER TABLE `table_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
