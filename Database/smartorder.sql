-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 19 Nov 2017 pada 17.54
-- Versi Server: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartorder`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username_admin` varchar(30) NOT NULL,
  `password_admin` varchar(30) NOT NULL,
  `nama_admin` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username_admin`, `password_admin`, `nama_admin`) VALUES
('yoseapero', 'yoseapero', 'Yose Apero');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `harga_barang` int(11) NOT NULL,
  `satuan_barang` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `harga_barang`, `satuan_barang`) VALUES
(1, 'Kacang Sukro', 20000, 'Kardus'),
(6, 'Cinta 1000', 36000, 'Kardus'),
(7, 'Pitato Kentang Goreng', 24000, 'Kardus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `distributor`
--

CREATE TABLE `distributor` (
  `username_dis` varchar(30) NOT NULL,
  `password_dis` varchar(30) NOT NULL,
  `nama_dis` varchar(30) NOT NULL,
  `nohp_dis` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `distributor`
--

INSERT INTO `distributor` (`username_dis`, `password_dis`, `nama_dis`, `nohp_dis`) VALUES
('apero', 'apero', 'Apero Yose', 6282389923432);

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama_member` varchar(100) NOT NULL,
  `nama_toko` varchar(100) NOT NULL,
  `alamat_member` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`username`, `password`, `nama_member`, `nama_toko`, `alamat_member`) VALUES
('alvi', 'alvi', 'Alvi Vebryanto', 'Suka Makmur', 'Teluk Kuantan, Jl. Perintis Kemerdekaan, no. 109'),
('benny', 'beny', 'Benny Rinaldi', 'Benny Shop', 'Rumbari, Jl. Umbansari'),
('yoga', 'yoga', 'Yoga Adi Prasetyo', 'TokoAdi Surya', 'Rumbai, Jl. Yos Sudarso'),
('yoseapero', 'yoseapero', 'Yose Apero', 'Muaro', 'Teluk Kuantan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengiriman`
--

CREATE TABLE `pengiriman` (
  `id_pengiriman` int(11) NOT NULL,
  `username_dis` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `status_pengiriman` varchar(30) NOT NULL,
  `tgl_pengiriman` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pengiriman`
--

INSERT INTO `pengiriman` (`id_pengiriman`, `username_dis`, `username`, `status_pengiriman`, `tgl_pengiriman`) VALUES
(1, 'apero', 'alvi', 'Selesai', '2017-11-05'),
(2, 'apero', 'benny', 'Selesai', '2017-11-05'),
(3, 'apero', 'yoseapero', 'Selesai', '2017-11-19'),
(4, 'apero', 'yoseapero', 'Selesai', '2017-11-19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `id_barang`, `username`, `jumlah_barang`, `tanggal`, `status`) VALUES
(1, 6, 'yoseapero', 12, '2017-11-19', 'Selesai'),
(2, 7, 'yoseapero', 5, '2017-11-19', 'Selesai'),
(3, 6, 'alvi', 2, '2017-11-19', 'Not Done'),
(4, 7, 'alvi', 2, '2017-11-19', 'Not Done'),
(5, 1, 'yoga', 5, '2017-11-19', 'Not Done'),
(6, 7, 'yoga', 6, '2017-11-19', 'Not Done'),
(7, 6, 'yoga', 10, '2017-11-19', 'Not Done');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username_admin`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `distributor`
--
ALTER TABLE `distributor`
  ADD PRIMARY KEY (`username_dis`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`id_pengiriman`),
  ADD KEY `username_dis` (`username_dis`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`),
  ADD KEY `username` (`username`),
  ADD KEY `id_barang` (`id_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pengiriman`
--
ALTER TABLE `pengiriman`
  MODIFY `id_pengiriman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD CONSTRAINT `pdistributor` FOREIGN KEY (`username_dis`) REFERENCES `distributor` (`username_dis`) ON DELETE CASCADE,
  ADD CONSTRAINT `pmember` FOREIGN KEY (`username`) REFERENCES `member` (`username`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD CONSTRAINT `fk_barang` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesan_ibfk_1` FOREIGN KEY (`username`) REFERENCES `member` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
