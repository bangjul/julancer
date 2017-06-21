-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14 Jun 2017 pada 16.08
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oilancer`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `keterangan` varchar(300) NOT NULL,
  `gambar_pekerjaan` varchar(100) NOT NULL,
  `gaji` int(12) NOT NULL,
  `tanggal_upload` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP
) ;

--
-- Dumping data untuk tabel `pekerjaan`
--

INSERT INTO `pekerjaan` (`id`, `id_user`, `kategori`, `judul`, `keterangan`, `gambar_pekerjaan`, `gaji`, `tanggal_upload`, `tanggal_berahir`, `link`) VALUES
(71, 18, 'Design dan Multimedia', 'Design Master', 'Memiliki kemauan untuk berlajar, menguasai photoshop, coreldraw, AI, after effect', 'uploads/4562', 4324234, '2017-06-11 20:49:32.887970', '2017-08-16', 'www.freepik.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'client');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `id_firebase` varchar(20) DEFAULT NULL,
  `nama_lengkap` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nomor_telepon` varchar(20) DEFAULT NULL,
  `rule` int(5) NOT NULL,
  `industri` text,
  `deskripsi` text,
  `foto_profile` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `id_firebase`, `nama_lengkap`, `email`, `password`, `nomor_telepon`, `rule`, `industri`, `deskripsi`, `foto_profile`) VALUES
(11, NULL, 'julio alfian', 'julio@gmail.com', '123', '082245147870', 2, 'Internet', NULL, NULL),
(13, NULL, 'pertamina', 'pertamina@gmail.com', '123', '12131231231', 2, 'Industri', 'coba', 'uploads/5546'),
(18, NULL, 'google', 'google@gmail.com', '123', '08111111111', 2, 'Internet', 'perusahaan dengan 300.000 pegawai', 'uploads/5208'),
(19, NULL, 'admin', 'admin@gmail.com', '123', '088888888888', 1, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_firebase` (`id_firebase`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
