-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2024 at 12:29 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `kode_buku` varchar(15) NOT NULL,
  `kode_rak` varchar(10) NOT NULL,
  `sampul` varchar(255) NOT NULL,
  `isbn` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `pengarang` varchar(255) NOT NULL,
  `thn_buku` varchar(4) NOT NULL,
  `jml` varchar(255) NOT NULL,
  `tgl_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `kode_buku`, `kode_rak`, `sampul`, `isbn`, `title`, `penerbit`, `pengarang`, `thn_buku`, `jml`, `tgl_masuk`) VALUES
(20, '020', '091', 'DESCOV-DEDE-GUSTIAN-BAHAN-AJAR-BAHASA-INGGRIS_FRONTCOVER.png', '9786018519939', 'Bahasa Inggris', 'Hamrin Lasiang', 'Lasiang', '2020', '100', '2022-06-20'),
(21, '030', '092', '1.jpg', '9786028519939', 'Bahasa Indonesia', 'Ismail', 'Muhammad Ismail', '2018', '100', '2019-03-19'),
(22, '040', '096', 'ID_RTD2018MTH08RTD.jpg', '9786038519939', 'Desain Grafis', 'Bastian', 'Bastian Adi Putra', '2022', '80', '2023-04-21'),
(23, '050', '095', '3.jpg', '9786048519939', 'Pemograman Web', 'Rohi Abdulloh', 'Muh Adi Anugrah', '2023', '100', '2023-05-20'),
(24, '060', '093', '0ea4424112c79e400d4940569720cd1b.jpeg', '9786058519939', 'Statistika', 'Salemba', 'Syarif Hidayatullah', '2022', '100', '2023-07-28'),
(25, '070', '094', 'c00f89ee9d6d55188c76d0ed47a1158e_jpg_720x720q80.jpg', '9786068519939', 'Matematika', 'Cindy', 'Apriliani', '2018', '80', '2019-08-20');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `pengembalian` date NOT NULL,
  `status` varchar(25) NOT NULL,
  `denda` varchar(100) NOT NULL,
  `total_denda` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rak`
--

CREATE TABLE `rak` (
  `id_rak` int(11) NOT NULL,
  `kode_rak` varchar(15) NOT NULL,
  `nama_rak` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rak`
--

INSERT INTO `rak` (`id_rak`, `kode_rak`, `nama_rak`) VALUES
(11, '091', 'Bahasa Inggris'),
(12, '092', 'Bahasa Indonesia'),
(13, '093', 'Statistika'),
(15, '094', 'Matematika'),
(16, '095', 'Pemograman web'),
(17, '096', 'Desain Grafis');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nrp` varchar(9) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(255) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nrp`, `username`, `password`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jk`, `alamat`, `telp`, `foto`, `level`) VALUES
(7, '190102008', 'admin', 'admin123', 'Andi', 'Makassar', '1994-07-13', 'Laki-Laki', 'Perum Telkomnas', '089789567345', 'kemenistek.png', '1'),
(20, '444444', 'laenre123', '203032', 'Laenre', 'Makassar', '1978-03-23', 'Laki-Laki', 'Paccerekang', '08645345567', '', '3'),
(98, '203035', 'Nafasuci36@gmail.com', 'suci', 'Nafa Suci Ramadhani', 'Makassar', '2001-06-20', 'Perempuan', 'PERUMAHAN YAYASAN GUBERNUR', '082348908777', 'WhatsApp_Image_2024-02-21_at_06_46_25.jpeg', '2'),
(102, '203039', 'Nursafika04@gmail.com', 'fika123', 'NUR SAFIKA', 'PINRANG', '2002-04-04', 'Perempuan', 'PERINTIS KEMERDEKAAN VII', '085342541072', '3x4_Fika.jpeg', '2'),
(103, '203022', 'adianugrah2808@gmail.com', '203022', 'MUH ADI ANUGRAH', 'MAKASSAR', '2000-06-28', 'Laki-Laki', 'BTN KODAM 2', '089563774184', '3x4.jpg', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `rak`
--
ALTER TABLE `rak`
  ADD PRIMARY KEY (`id_rak`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `rak`
--
ALTER TABLE `rak`
  MODIFY `id_rak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
