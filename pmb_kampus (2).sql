-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2022 at 05:28 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pmb_kampus`
--

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(11) NOT NULL,
  `nama_prodi` varchar(45) NOT NULL,
  `daya_tampung` int(11) DEFAULT NULL,
  `syarat_lulusan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `nama_prodi`, `daya_tampung`, `syarat_lulusan`) VALUES
(11111, 'Teknik Informatika', 150, 'SMA IPA'),
(22222, 'Sistem Informasi', 100, 'SMA IPA'),
(33333, 'Teknik Komputer', 150, 'SMA IPA'),
(44444, 'Sistem Operasi', 125, 'SMA IPA'),
(55555, 'Keamanan Siber', 100, 'SMA IPA');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `fullname` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `fullname`, `email`, `username`, `password`, `role`) VALUES
(1, 'andi', 'admin1@gmail.com', 'admin1', '0eb4e14e3a0af58fa476', 'admin'),
(2, 'budi', 'admin2@gmail.com', 'admin2', '0eb4e14e3a0af58fa476', 'manager'),
(3, 'citra', 'admin3@gmail.com', 'admin3', '0eb4e14e3a0af58fa476', 'staff');

-- --------------------------------------------------------

--
-- Table structure for table `panitia_pendaftaran`
--

CREATE TABLE `panitia_pendaftaran` (
  `id` int(11) NOT NULL,
  `nama_panitia` varchar(45) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` varchar(45) NOT NULL,
  `umur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `panitia_pendaftaran`
--

INSERT INTO `panitia_pendaftaran` (`id`, `nama_panitia`, `jenis_kelamin`, `alamat`, `umur`) VALUES
(12453, 'Desi Cahya', 'Perempuan', 'Semarang', 32),
(12523, 'Bunga Citra', 'Perempuan', 'Sukoharjo', 30),
(12663, 'Bangun Andi', 'Laki-laki', 'Boyolali', 35),
(34562, 'Sucipto Utomo', 'Laki-laki', 'Sukoharjo', 40),
(64212, 'Samsudin', 'Laki-laki', 'Salatiga', 42);

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `id_panitia` int(11) NOT NULL,
  `tanggal_pendaftaran` varchar(20) NOT NULL,
  `kode_prodi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id`, `nis`, `id_panitia`, `tanggal_pendaftaran`, `kode_prodi`) VALUES
(12453, 14923, 12342, '2020-11-12', '3452'),
(86134, 98679, 58587, '2020-12-12', '3453'),
(86282, 99874, 35872, '2020-11-10', '3451'),
(97934, 99878, 12386, '2020-09-12', '3452'),
(98652, 89692, 64672, '2020-10-12', '3454');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `alamat` varchar(45) NOT NULL,
  `asal_sekolah` varchar(45) NOT NULL,
  `umur` int(11) NOT NULL,
  `kode_prodi` varchar(20) NOT NULL,
  `prodi_pilihan` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `jenis_kelamin`, `alamat`, `asal_sekolah`, `umur`, `kode_prodi`, `prodi_pilihan`) VALUES
(87332, 'Siti Aminah', 'Perempuan', 'Jakarta', 'SMA 01 Jakarta', 18, '3452', 'Teknik Informatika'),
(95718, 'Mawar Melati', 'Perempuan', 'Kendal', 'SMA 03 Kendal', 18, '3454', 'Sistem Informasi'),
(96822, 'Bambang Sucipto', 'Laki-laki', 'Batang', 'SMA 1 Gringsing', 18, '3451', 'Teknik Informatika'),
(97124, 'Budi Santoso', 'Laki-laki', 'Semarang', 'SMA 01 Semarang', 18, '3451', 'Teknik Komputer'),
(97582, 'Ahmad Efendi', 'Laki-laki', 'Semarang', 'SMA 03 Semarang', 19, '3453', 'Keamanan Siber'),
(97583, 'sari', NULL, 'jakarta', 'SMA 1 Jakarta', 19, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panitia_pendaftaran`
--
ALTER TABLE `panitia_pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prodi_pilihan` (`prodi_pilihan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98653;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97584;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
