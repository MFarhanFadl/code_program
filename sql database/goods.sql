-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2020 at 09:54 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gudang`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(20) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `deskripsi` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `deskripsi`) VALUES
(3, 'Gelas Gelas Kaca', 'Gelas-gelas kaca Tunjukkan padaku Siapa diriku iini Ayah aku tak punya Ibu pun aku tiada Siapa pun aku tak punya Hanya air mata Yang selalu bercerita kepadaku'),
(10, 'Aqua', 'minuman dari merek aqua'),
(12, 'UNO Stack', 'permainan susun yang memerlukan minimal 2 orang untuk di mainkan dengan cara menyusun tumpukan setinggi mungkin dengan tujuna yang menjatuhkan tumpukan akan kalah'),
(13, 'Razer Mousepad', 'asdjhnqiweiquw'),
(14, 'Gelas Kertas', 'Gelas yang terbuat dari kertas'),
(16, 'ikan cupang', 'ikan cupang punya idam'),
(17, 'Teh Kotak', 'Teh yang di dalam kotak');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
