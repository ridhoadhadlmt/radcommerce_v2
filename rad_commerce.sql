-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jul 2020 pada 10.52
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rad_commerce`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `banner`
--

CREATE TABLE `banner` (
  `id_banner` int(10) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `banner`
--

INSERT INTO `banner` (`id_banner`, `image`) VALUES
(1, 'c1.jpg'),
(2, 'c2.jpg'),
(3, 'c3.jpg'),
(4, 'c4.jpg'),
(5, 'c5.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `merek`
--

CREATE TABLE `merek` (
  `id_merek` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `merek`
--

INSERT INTO `merek` (`id_merek`, `nama`) VALUES
(1, 'ALCATROZ'),
(2, 'Apple'),
(3, 'Asus'),
(4, 'Canon'),
(5, 'Dell'),
(6, 'Fujifilm'),
(7, 'HP'),
(8, 'Lenovo'),
(9, 'Nikon'),
(10, 'Oppo'),
(11, 'Realme'),
(12, 'Samsung'),
(13, 'Vivo'),
(14, 'Xiaomi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_produk`
--

CREATE TABLE `kategori_produk` (
  `id_produk` int(10) NOT NULL,
  `kategori_produk` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_produk`
--

INSERT INTO `kategori_produk` (`id_produk`, `kategori_produk`, `image`) VALUES
(1, 'Laptop', 'laptop.svg'),
(2, 'Komputer', 'monitor.svg'),
(3, 'Kamera', 'camera.svg'),
(4, 'Mouse', 'mouse.svg'),
(5, 'Alat Kantor', 'printer.svg'),
(6, 'Smartphone', 'smartphone.svg'),
(7, 'AC', 'air-conditioner.svg'),
(8, 'Headset', 'headset.svg'),
(9, 'CPU', 'desktop-computer.svg'),
(10, 'Keyboard', 'keyboard-oc.svg'),
(11, 'Software', 'software.svg'),
(12, 'Lainnya', 'app.svg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(10) NOT NULL,
  `merek` varchar(255) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `stok` int(10) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama`, `harga`, `merek`, `kategori`, `stok`, `image`) VALUES
(1, 'ASUS VivoBook X505ZA-BR511T', 8499000, 'Asus', 'Laptop', 0, 'asus.jpg'),
(2, 'ASUS ROG Zephyrus GX531GM-I7614T [90NR0101-M00180]', 11875000, 'Asus', 'Laptop', 0, 'asusrog.jpg'),
(3, 'HP Notebook 14-cm0077AU - Black [4RJ33PA]', 8153000, 'HP', 'Notebook', 0, 'hp.jpg'),
(4, 'LENOVO IdeaPad \r\nC340-14IWL', 11875000, 'Lenovo', 'Laptop', 0, 'lenovo.jpg'),
(6, 'DELL G3 15 3579 (Core i7-8750H) Black', 14515000, 'Dell', 'Laptop', 0, 'dell.jpg'),
(8, 'HP Pavilion 15-cx0194TX [5JE76PA] ', 15784000, 'HP', 'Laptop', 0, 'hppavilion.jpg'),
(9, 'ASUS Notebook F571GD-BQ5801T', 11999000, 'Asus', 'Notebook', 0, 'asusf571.jpg\r\n'),
(10, 'ASUS Notebook A412FA-EK302T', 7249000, 'Asus', 'Notebook', 0, 'asusa412.jpg'),
(11, 'FUJIFILM XF10 Digital Camera Brown', 7690000, 'FUJIFILM', 'Kamera', 10, '5d81d56734595.jpg'),
(12, 'NIKON Coolpix P1000 Digital Camera', 15999000, 'NIKON', 'Kamera', 5, '5bc441cba7594.jpg'),
(13, 'CANON Digital Camera Powershot', 9150000, 'CANON', 'Kamera', 10, 'CANON-Powershot-G5X-Black-SKU01116913-201633102324.jpg'),
(14, 'SAMSUNG AC Split AR07JRSDUWKNSE', 5434000, 'Samsung', 'AC', 5, '5a854ec7cc8d1.jpg'),
(15, 'SHARP AC Split AH-A9SAY', 3180000, 'Sharp', 'AC', 15, '5a9f64577c6cc.jpg'),
(16, 'ALCATROZ Airwave Bluetooth', 129000, 'ALCATROZ', 'Headset', 5, '59bba11fee503.jpg'),
(17, 'VIVO Y71 4/64 GB - White', 1790000, 'VIVO', 'Smartphone', 20, '5aefc5b64c394.jpg'),
(18, 'SAMSUNG Galaxy S10 Lite 8GB/128GB - Prism Blue', 8999000, 'Samsung', 'Smartphone', 10, '5e4a45f88a505.jpg'),
(30, 'XIAOMI Redmi Note 5 4GB/64GB - Blue', 2049000, 'Xiaomi', 'Smartphone', 5, '5b39adfabe097.jpg'),
(31, 'DELL Inspiron 13 5370 (Core i7-8550U) - Silver', 11299000, 'Dell', 'Laptop', 10, '5ab46f4850644.jpg'),
(32, ' ASUS Notebook X441UB-GA501T', 7999000, 'Asus', 'Notebook', 5, '5dd5fea62173f.jpg'),
(33, 'SAMSUNG Galaxy A71 8/128GB - Black', 6999000, 'Samsung', 'Smartphone', 5, '5e1fe2c5edf33.jpg'),
(34, 'APPLE iPhone 11 128GB - Yellow', 16499000, 'Apple', 'Smartphone', 15, '5de488c563194.jpg'),
(37, 'SAMSUNG Galaxy S20 Ultra 12GB/128GB - Cosmic Black', 18499000, 'Samsung', 'Smartphone', 10, '5e436ab9c9be1.jpg'),
(38, 'ASUS TUF FX505DD-R5581T [90NR02C1-M02950] - Gold Steel', 10099000, 'Asus', 'Laptop Gaming', 5, '5d27ffb1cc9fb.jpg'),
(39, 'SAMSUNG 24 Inch TV LED UA24H4150', 1250000, 'Samsung', 'TV', 5, '5a0a5875150e0.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `password`, `level`) VALUES
(1, 'cendy anisa', 'cendy123@gmail.com', 'cendy123', 'customer'),
(2, 'ridho adha', 'ridho123@gmail.com', 'ridho123', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indeks untuk tabel `merek`
--
ALTER TABLE `merek`
  ADD PRIMARY KEY (`id_merek`);

--
-- Indeks untuk tabel `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `banner`
--
ALTER TABLE `banner`
  MODIFY `id_banner` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `merek`
--
ALTER TABLE `merek`
  MODIFY `id_merek` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `kategori_produk`
--
ALTER TABLE `kategori_produk`
  MODIFY `id_produk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
