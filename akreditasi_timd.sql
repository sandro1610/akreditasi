-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Feb 2021 pada 00.26
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akreditasi_timd`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `c1`
--

CREATE TABLE `c1` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `file_c1` varchar(255) NOT NULL,
  `tgl_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `c1`
--

INSERT INTO `c1` (`id`, `user_id`, `file_c1`, `tgl_upload`) VALUES
(7, 3, '3 14-Feb-2021 23-38-00.pdf', '2021-02-14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `c2`
--

CREATE TABLE `c2` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `file_c2` varchar(255) NOT NULL,
  `tgl_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `c2`
--

INSERT INTO `c2` (`id`, `user_id`, `file_c2`, `tgl_upload`) VALUES
(2, 3, '3 14-Feb-2021 23-38-21.pdf', '2021-02-14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `c3`
--

CREATE TABLE `c3` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `file_c3` varchar(255) NOT NULL,
  `tgl_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `c3`
--

INSERT INTO `c3` (`id`, `user_id`, `file_c3`, `tgl_upload`) VALUES
(1, 3, '3 14-Feb-2021 23-38-38.pdf', '2021-02-14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `c4`
--

CREATE TABLE `c4` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `file_c4` varchar(255) NOT NULL,
  `tgl_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `c5`
--

CREATE TABLE `c5` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `file_c5` varchar(255) NOT NULL,
  `tgl_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `c6`
--

CREATE TABLE `c6` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `file_c6` varchar(255) NOT NULL,
  `tgl_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `c7`
--

CREATE TABLE `c7` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `file_c7` varchar(255) NOT NULL,
  `tgl_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `c8`
--

CREATE TABLE `c8` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `file_c8` varchar(255) NOT NULL,
  `tgl_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `c8`
--

INSERT INTO `c8` (`id`, `user_id`, `file_c8`, `tgl_upload`) VALUES
(1, 3, '3 14-Feb-2021 23-39-09.pdf', '2021-02-14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `c9`
--

CREATE TABLE `c9` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `file_c9` varchar(255) NOT NULL,
  `tgl_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `c9`
--

INSERT INTO `c9` (`id`, `user_id`, `file_c9`, `tgl_upload`) VALUES
(1, 3, '3 14-Feb-2021 22-36-22.pdf', '2021-02-14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_akreditasi`
--

CREATE TABLE `tb_akreditasi` (
  `id` int(11) NOT NULL,
  `user_id_akre` int(11) NOT NULL,
  `c1_id` varchar(255) NOT NULL,
  `c2_id` varchar(255) NOT NULL,
  `c3_id` varchar(255) NOT NULL,
  `c4_id` varchar(255) NOT NULL,
  `c5_id` varchar(255) NOT NULL,
  `c6_id` varchar(255) NOT NULL,
  `c7_id` varchar(255) NOT NULL,
  `c8_id` varchar(255) NOT NULL,
  `c9_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_akreditasi`
--

INSERT INTO `tb_akreditasi` (`id`, `user_id_akre`, `c1_id`, `c2_id`, `c3_id`, `c4_id`, `c5_id`, `c6_id`, `c7_id`, `c8_id`, `c9_id`) VALUES
(5, 3, '7', '2', '1', '', '', '', '', '1', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `nip`, `password`, `level`) VALUES
(2, 'Mikhael Sandro', '061830801183', '$2y$10$8iBMFEpN2vKUFA0FsafztuhFgS/dZ4vIYRRaszTySLfFFunEbysbe', 'admin'),
(3, 'Geofanny', '061830801190', '$2y$10$MMKjHpMq1Gu3Ucv8yT/8pOxyxm8GG33FBWBLlU1pgYJTPTwKrhKBm', 'user'),
(4, 'Ramandha Sari Sinabang', '061830801101', '$2y$10$Q.LX/5jEsjj7sj3Tm.HmiurUEaneZmhK5YHD/W3PKqzkwq3Ajq3O.', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `c1`
--
ALTER TABLE `c1`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `c2`
--
ALTER TABLE `c2`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `c3`
--
ALTER TABLE `c3`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `c4`
--
ALTER TABLE `c4`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `c5`
--
ALTER TABLE `c5`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `c6`
--
ALTER TABLE `c6`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `c7`
--
ALTER TABLE `c7`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `c8`
--
ALTER TABLE `c8`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `c9`
--
ALTER TABLE `c9`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_akreditasi`
--
ALTER TABLE `tb_akreditasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `c1`
--
ALTER TABLE `c1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `c2`
--
ALTER TABLE `c2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `c3`
--
ALTER TABLE `c3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `c4`
--
ALTER TABLE `c4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `c5`
--
ALTER TABLE `c5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `c6`
--
ALTER TABLE `c6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `c7`
--
ALTER TABLE `c7`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `c8`
--
ALTER TABLE `c8`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `c9`
--
ALTER TABLE `c9`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_akreditasi`
--
ALTER TABLE `tb_akreditasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
