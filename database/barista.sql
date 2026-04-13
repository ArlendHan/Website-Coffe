-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Apr 2026 pada 13.42
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
-- Database: `barista`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barista`
--

CREATE TABLE `barista` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jabatan` varchar(15) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `barista`
--

INSERT INTO `barista` (`id`, `nama`, `jabatan`, `keterangan`, `foto`) VALUES
(1, 'Arlend Christian', 'Founder ', 'Temukan harimu dengan secangkir kopi', 'pash_photo.jpeg'),
(4, 'Michelle', 'CEO', 'Langkah yang besar dimulai dengan secangkir kopi', 'smiley-business-woman-working-cashier.jpg'),
(6, 'Session Cyan', 'Manager', 'Rasakan Nikmatnya Secangkir Kopi Dari Arlend Barista', 'cute-korean-barista-girl-pouring-coffee-prepare-filter-batch-brew-pour-working-cafe.jpg'),
(7, 'Stevan Joes', 'Barista', 'Dengan Saya Kopimu akan dibuat dengan rasa ternikmat', 'small-business-owner-drinking-coffee.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(25) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id`, `nama`, `email`, `keterangan`) VALUES
(7, 'Xie Chan Zue', 'xiechazu@gmail.com', 'I like the coffe about foods, the coffe and the people in the coffe very very friendyl'),
(9, 'Arlend C Wisno T', 'arlendcwisnot@gmail.com', 'saya pesan koffe');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `harga` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id`, `nama`, `keterangan`, `kategori`, `harga`) VALUES
(5, 'Latte', 'Rasakan nikmatnya kopi dengan aroma torabika dan caramel ', 'Coffe', '19500'),
(6, 'Pancakes', 'Kue dengan rasa krim vanila dan moca', 'Breakfast', '25000'),
(7, 'Luwak White Coffe', 'Kopi dengan aroma terbaik untuk menemani harimu', 'Coffe', '18500'),
(8, 'Americano', 'Rasa yang khas nikmat dan berasal dari biji kopi Arabika', 'Coffe', '19000'),
(9, 'French Fries', 'Kentang yang dimasak dan dipadukan oleh rempah-rempah ', 'Breakfast', '28000'),
(12, 'Mie', 'Mie ayam', 'Breakfast', '14500'),
(16, 'Kopi Hitam', 'Biji Kopi Pilihan dari Brazil', 'Coffe', '13000'),
(17, 'Cake Johor', 'Kue Rasa yang dipadukan dengan bahan berkualitas', 'breakfast', '23000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `rating` decimal(3,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `review`
--

INSERT INTO `review` (`id`, `nama`, `foto`, `keterangan`, `rating`) VALUES
(5, 'Stevani Wong', 'young-woman-with-round-glasses-yellow-sweater.jpg', 'Makanan di cafe ini the best lah apalagi untuk Americano nya saya sangat rekomendasi dan murah lagi', 4.7),
(7, 'Cheng Zu', 'young-beautiful-woman-pink-warm-sweater-natural-look-smiling-portrait-isolated-long-hair.jpg', 'I am from China, this Cafe is good and the food is cheaper and the people around this is so kind', 4.8),
(8, 'Wong Li', 'senior-man-white-sweater-eyeglasses.jpg', 'Makanannya enak saya sangat suka kentang gorengnya, udah itu murah lagi cocoklah untuk kalangan gen z yang suka harga murah tapi porsinya banyak', 4.5),
(9, 'Arlend Christian', 'screenshot_20240527-205638.png', 'Saya suka vibes cafenya terutama di lantai 2 saat sedang menikmati secangkir latte terasa sangat tenang ditambah dengan alunan musik klasik', 4.2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin_123', 'adminku_123'),
('user@', '123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barista`
--
ALTER TABLE `barista`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barista`
--
ALTER TABLE `barista`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
