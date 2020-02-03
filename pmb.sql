-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 03, 2020 at 01:58 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pmb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `fullname`) VALUES
(1, 'admin', '$2y$10$UTbtZZ6k5R2NqywTkDN6Uu3kgdQK8q4.eKnYYECRPY.H61zuHIVvW', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `agenda_tes`
--

CREATE TABLE `agenda_tes` (
  `id` int(11) NOT NULL,
  `thak` year(4) NOT NULL,
  `nama_tes` varchar(150) NOT NULL,
  `mulai` varchar(10) NOT NULL,
  `sampai` varchar(10) NOT NULL,
  `tgl_tes` date NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agenda_tes`
--

INSERT INTO `agenda_tes` (`id`, `thak`, `nama_tes`, `mulai`, `sampai`, `tgl_tes`, `ket`) VALUES
(3, 2020, 'TES TKD', '07:30', '12:00', '2020-01-30', 'Bawa papan jalan'),
(4, 2020, 'TES AKADEMIK', '07:00', '10:00', '2020-02-10', ''),
(6, 2020, 'TES PSIKOLOGI', '08:00', '11:00', '2020-02-23', '');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id_info` int(11) NOT NULL,
  `thak` year(4) NOT NULL,
  `info` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id_info`, `thak`, `info`, `created_at`) VALUES
(5, 2020, 'Informasi terbaru', '2020-01-22 13:41:44'),
(10, 2020, 'Jadwal tes telah di update\r\n', '2020-01-26 06:08:09');

-- --------------------------------------------------------

--
-- Table structure for table `jenjang`
--

CREATE TABLE `jenjang` (
  `kode_jenjang` int(11) NOT NULL,
  `jenjang` varchar(5) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenjang`
--

INSERT INTO `jenjang` (`kode_jenjang`, `jenjang`, `created_at`) VALUES
(3, 'D4', '2017-06-17 16:30:04');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_daftar` int(11) NOT NULL,
  `thak` year(4) NOT NULL,
  `nama_pendaftar` varchar(50) NOT NULL,
  `nisn` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jkel` enum('L','P') NOT NULL,
  `agama` varchar(10) NOT NULL,
  `sekolah` varchar(50) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `alamat` varchar(45) NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `email` varchar(100) NOT NULL,
  `prodi` varchar(10) NOT NULL,
  `nilai_un` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `nilai_tes` decimal(4,2) NOT NULL,
  `input_tes_tgl` datetime NOT NULL,
  `daftar_tgl` datetime NOT NULL,
  `fc_ijazah` tinyint(1) NOT NULL,
  `fc_skhu` tinyint(1) NOT NULL,
  `pas_foto` tinyint(1) NOT NULL,
  `verifikasi_tgl` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `kode_prodi` varchar(10) NOT NULL,
  `nama_prodi` varchar(40) NOT NULL,
  `kuota` int(3) NOT NULL,
  `created_at` datetime NOT NULL,
  `jenjang_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`kode_prodi`, `nama_prodi`, `kuota`, `created_at`, `jenjang_id`) VALUES
('RKS16', 'REKAYASA KEAMANAN SIBER', 80, '2020-01-20 21:20:31', 3),
('RPL16', 'REKAYASA PERANGKAT LUNAK KRIPTO', 20, '2020-01-26 11:13:46', 3),
('RSK16', 'REKAYASA SISTEM KRIPTOGRAFI', 15, '2020-01-26 11:15:08', 3),
('TRP16', 'REKAYASA PERANGKAT KERAS KRIPTOGRAFI', 30, '2020-01-26 11:14:39', 3);

-- --------------------------------------------------------

--
-- Table structure for table `thak`
--

CREATE TABLE `thak` (
  `thak` year(4) NOT NULL,
  `tahun_ajaran` varchar(12) NOT NULL,
  `status` enum('Aktif','Nonaktif') NOT NULL,
  `ket` enum('Dibuka','Ditutup') NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thak`
--

INSERT INTO `thak` (`thak`, `tahun_ajaran`, `status`, `ket`, `created_at`) VALUES
(2018, ' 2018/2019', 'Nonaktif', 'Dibuka', '2017-07-27 18:46:31'),
(2020, ' 2020/2021', 'Aktif', 'Dibuka', '2020-01-22 10:34:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `agenda_tes`
--
ALTER TABLE `agenda_tes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_info`);

--
-- Indexes for table `jenjang`
--
ALTER TABLE `jenjang`
  ADD PRIMARY KEY (`kode_jenjang`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_daftar`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`kode_prodi`);

--
-- Indexes for table `thak`
--
ALTER TABLE `thak`
  ADD PRIMARY KEY (`thak`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `agenda_tes`
--
ALTER TABLE `agenda_tes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jenjang`
--
ALTER TABLE `jenjang`
  MODIFY `kode_jenjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
