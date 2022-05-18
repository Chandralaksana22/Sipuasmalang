-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 06 Sep 2021 pada 07.02
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id17361110_dbsipuas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `email`, `password`) VALUES
(11, 'Hanif', 'chandralaksana225@gmail.com', 'ec14f306b2166f1c09df100aba4e733d'),
(13, 'irma', 'hanif@gmail.com', 'ec14f306b2166f1c09df100aba4e733d'),
(14, 'Dikbud Kota Malang', 'dikbudkotamalang@gmail.com', 'ec14f306b2166f1c09df100aba4e733d'),
(15, '', '', ''),
(16, 'Admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kepuasan`
--

CREATE TABLE `kepuasan` (
  `id_kepuasan` int(11) NOT NULL,
  `puas` int(11) NOT NULL,
  `tidak` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kepuasan`
--

INSERT INTO `kepuasan` (`id_kepuasan`, `puas`, `tidak`) VALUES
(1, 6, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kotak_saran`
--

CREATE TABLE `kotak_saran` (
  `no` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kotak_saran`
--

INSERT INTO `kotak_saran` (`no`, `tanggal`, `saran`) VALUES
(19, '2021-08-06 10:07:44', 'pulang cepat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `survei`
--

CREATE TABLE `survei` (
  `id_survei` int(11) NOT NULL,
  `usia` varchar(225) NOT NULL,
  `jk` varchar(225) NOT NULL,
  `pendidikan` varchar(225) NOT NULL,
  `pekerjaan` varchar(225) NOT NULL,
  `keberadaaninformasi` varchar(225) NOT NULL,
  `kemudahanmendapatkaninformasi` varchar(225) NOT NULL,
  `kejelasaninformasi` varchar(225) NOT NULL,
  `kemudahanpelayanan` varchar(225) NOT NULL,
  `informasiprosedur` varchar(225) NOT NULL,
  `kemudahaninformasiprosedur` varchar(225) NOT NULL,
  `kejelasaninformasiprosedur` varchar(225) NOT NULL,
  `kemudahanmenjalankanprosedur` varchar(225) NOT NULL,
  `informasipelayanan` varchar(255) NOT NULL,
  `ketersediaanpengaduan` varchar(255) NOT NULL,
  `ketepatanlayanan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `survei`
--

INSERT INTO `survei` (`id_survei`, `usia`, `jk`, `pendidikan`, `pekerjaan`, `keberadaaninformasi`, `kemudahanmendapatkaninformasi`, `kejelasaninformasi`, `kemudahanpelayanan`, `informasiprosedur`, `kemudahaninformasiprosedur`, `kejelasaninformasiprosedur`, `kemudahanmenjalankanprosedur`, `informasipelayanan`, `ketersediaanpengaduan`, `ketepatanlayanan`) VALUES
(12, 'Antara 11 hingga 19 tahun', 'Perempuan', 'SD', 'Mengurus Rumah Tangga', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas'),
(13, 'Antara 20 hingga 40 tahun', 'Laki-Laki', 'SMA', 'Pelajar/Mahasiswa', 'Puas', ' Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas'),
(14, 'Antara 20 hingga 40 tahun', 'Perempuan', 'SMA', 'Pelajar/Mahasiswa', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas', 'Sangat Puas'),
(15, 'Antara 20 hingga 40 tahun', 'Perempuan', 'SMA', 'Pelajar/Mahasiswa', 'Puas', 'Tidak Puas', 'Puas', 'Tidak Puas', 'Puas', 'Tidak Puas', 'Puas', 'Tidak Puas', 'Puas', 'Tidak Puas', 'Puas'),
(16, 'Antara 20 hingga 40 tahun', 'Perempuan', 'SMA', 'Pelajar/Mahasiswa', 'Puas', ' Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `kepuasan`
--
ALTER TABLE `kepuasan`
  ADD PRIMARY KEY (`id_kepuasan`);

--
-- Indeks untuk tabel `kotak_saran`
--
ALTER TABLE `kotak_saran`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `survei`
--
ALTER TABLE `survei`
  ADD PRIMARY KEY (`id_survei`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `kepuasan`
--
ALTER TABLE `kepuasan`
  MODIFY `id_kepuasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kotak_saran`
--
ALTER TABLE `kotak_saran`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `survei`
--
ALTER TABLE `survei`
  MODIFY `id_survei` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
