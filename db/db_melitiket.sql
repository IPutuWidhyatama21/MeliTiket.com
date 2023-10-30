-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Okt 2023 pada 04.23
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tiketing`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking`
--

CREATE TABLE `booking` (
  `id_booking` int(11) NOT NULL,
  `id_tiket` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `total_harga` int(20) NOT NULL,
  `tanggal_booking` datetime NOT NULL,
  `tanggal_transaksi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `booking`
--

INSERT INTO `booking` (`id_booking`, `id_tiket`, `id_user`, `total_harga`, `tanggal_booking`, `tanggal_transaksi`) VALUES
(1, 1, 1, 50000, '2023-10-30 04:22:45', '2023-10-30 03:23:24'),
(2, 5, 2, 20000, '2023-10-30 04:22:45', '2023-10-30 03:23:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tiket`
--

CREATE TABLE `tiket` (
  `id_tiket` int(11) NOT NULL,
  `nama_tiket` varchar(30) NOT NULL,
  `Keterangan` text NOT NULL,
  `harga_tiket` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tiket`
--

INSERT INTO `tiket` (`id_tiket`, `nama_tiket`, `Keterangan`, `harga_tiket`) VALUES
(1, 'Pura Besakih', 'Pura Agung Besakih terletak di Desa Besakih, Kecamatan Rendang, berada di lereng sebelah barat daya Gunung Agung yang merupakan gunung tertinggi di Bali. Akses dari Kota Denpasar untuk mencapai tempat ini berjarak sekitar 25 km ke arah utara dari Kota Semarapura – Kabupaten Klungkung.', 50000),
(2, 'Bali Zoo', 'Bali Zoo merupakan kebun binatang yang memiliki koleksi sekitar 350 satwa langka. Wisata di Bali ini menawarkan pengalaman bertemu dengan berbagai jenis unggas seperti elang, jalak, dan burung merak. Bahkan kamu juga bisa bertemu langsung dengan mamalia seperti harimau Sumatra, singa Afrika, beruang, unta, dan kanguru.', 100000),
(3, 'Nusa Penida', 'Nusa Penida terkenal dengan keindahan alam bawah laut serta keindahan alam yang eksotik. Terumbu karang di wilayah Nusa Penida berjenis karang tepi (fringing reef) dengan jumlah sekitar 296 jenis. Luas terumbu karang di perairan sekitar Nusa Penida kurng lebih 1.419 hektare.', 150000),
(4, 'Waterbom Bali', 'Waterbom Park atau sekarang Waterbom Bali adalah sebuah taman rekreasi air yang berada di Pulau Dewata, Bali. Berdiri sejak 1993, Waterbom Bali telah banyak memperoleh penghargaan, salah satunya adalah PATA Gold Awards 2019.', 120000),
(5, 'Pantai Kuta', 'Pantai Kuta adalah sebuah tempat pariwisata yang terletak di kecamatan Kuta sebelah selatan Kota Denpasar, Bali, Indonesia. Daerah ini merupakan sebuah tujuan wisata turis mancanegara dan telah menjadi objek wisata andalan Pulau Bali sejak awal tahun 1970-an.', 20000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `email` varchar(75) NOT NULL,
  `pass` text NOT NULL,
  `status` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `no_telp`, `email`, `pass`, `status`) VALUES
(1, 'Nanda', '083806031552', 'niknanda9@gmail.com', '$2y$10$vB4O8I6pYb2pwVtOKrU7lOyr6cYPYuVtH9YmaAfo.BGC4Pbaukdyq', 'admin'),
(2, 'Widya', '0839274927391', 'widhyatama@gmail.com', '$2y$10$vB4O8I6pYb2pwVtOKrU7lOyr6cYPYuVtH9YmaAfo.BGC4Pbaukdyq', 'user'),
(3, 'Rama', '089827827349', 'ramaprawira@gmail.com', '$2y$10$vB4O8I6pYb2pwVtOKrU7lOyr6cYPYuVtH9YmaAfo.BGC4Pbaukdyq', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`),
  ADD KEY `id_tiket` (`id_tiket`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id_tiket`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id_tiket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`id_tiket`) REFERENCES `tiket` (`id_tiket`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
