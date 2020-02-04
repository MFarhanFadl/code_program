-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2020 at 06:35 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `gudang`
--

CREATE TABLE `gudang` (
  `id_gudang` int(11) NOT NULL,
  `nama_gudang` varchar(150) NOT NULL,
  `alamat_gudang` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gudang`
--

INSERT INTO `gudang` (`id_gudang`, `nama_gudang`, `alamat_gudang`) VALUES
(1, 'Vita', '6804 Gilbert Heights\nSerenityborough, HI 58174-7292'),
(2, 'Cleora', '4322 Rodolfo Points\nBennetttown, TX 92156'),
(3, 'Bennie', '752 Klocko Shore\nWest Loyceton, DC 51453'),
(4, 'Salvatore', '07476 Keven Mountain Apt. 649\nBrisaburgh, WV 86919');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_penyimpanan`
--

CREATE TABLE `jenis_penyimpanan` (
  `id_jenis_penyimpanan` varchar(11) NOT NULL,
  `nama_jenis_penyimpanan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_penyimpanan`
--

INSERT INTO `jenis_penyimpanan` (`id_jenis_penyimpanan`, `nama_jenis_penyimpanan`) VALUES
('j24', 'jadi'),
('jm25', 'mentah'),
('sj23', 'setengah jadi');

-- --------------------------------------------------------

--
-- Table structure for table `kostumer`
--

CREATE TABLE `kostumer` (
  `id_kostumer` int(11) NOT NULL,
  `nama_kostumer` varchar(150) NOT NULL,
  `alamat_perusahaan` varchar(150) NOT NULL,
  `id_sektor` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kostumer`
--

INSERT INTO `kostumer` (`id_kostumer`, `nama_kostumer`, `alamat_perusahaan`, `id_sektor`) VALUES
(1, 'Wintheiser Group', '44479 Lola Highway Suite 963\nSaulland, NH 08354', 'a1'),
(2, 'Kirlin-Grimes', '6448 Bartell Village\nNoreneville, HI 43667-5624', 'a2'),
(3, 'Dicki PLC', '571 Wyman Parkways\nSouth Bernadettemouth, DE 42796', 'b1'),
(4, 'Gibson Inc', '669 Jenkins Common Suite 982\nWest Keaganberg, CO 38990-4889', 'c1'),
(5, 'Torphy Inc', '1291 Legros Forges Suite 514\nPort Arielleland, VT 93035', 'd1');

-- --------------------------------------------------------

--
-- Table structure for table `penyimpanan`
--

CREATE TABLE `penyimpanan` (
  `id_penyimpanan` int(11) NOT NULL,
  `id_barang` int(20) NOT NULL,
  `id_slot` varchar(11) NOT NULL,
  `id_kostumer` int(11) NOT NULL,
  `jumlah` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyimpanan`
--

INSERT INTO `penyimpanan` (`id_penyimpanan`, `id_barang`, `id_slot`, `id_kostumer`, `jumlah`) VALUES
(2, 3, 'a1a1', 2, 50),
(3, 10, 'c1a1', 2, -60),
(4, 12, 'd1a1', 2, 500),
(5, 13, 'b1a1', 2, 500),
(6, 14, 'c2a1', 2, 500),
(7, 16, 'a2a1', 2, 500),
(8, 17, 'b2a1', 2, 500);

-- --------------------------------------------------------

--
-- Table structure for table `rak`
--

CREATE TABLE `rak` (
  `id_rak` varchar(11) NOT NULL,
  `id_sektor` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rak`
--

INSERT INTO `rak` (`id_rak`, `id_sektor`) VALUES
('1a1', 'a1'),
('1b1', 'b1'),
('2a1', 'a1'),
('3a1', 'a1'),
('4a1', 'a1');

-- --------------------------------------------------------

--
-- Table structure for table `sektor`
--

CREATE TABLE `sektor` (
  `id_sektor` varchar(11) NOT NULL,
  `id_gudang` int(11) NOT NULL,
  `id_jenis_penyimpanan` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sektor`
--

INSERT INTO `sektor` (`id_sektor`, `id_gudang`, `id_jenis_penyimpanan`) VALUES
('a1', 1, 'j24'),
('a2', 2, 'jm24'),
('b1', 1, 'j24'),
('c1', 1, 'j24'),
('d1', 1, 'j24');

-- --------------------------------------------------------

--
-- Table structure for table `slot`
--

CREATE TABLE `slot` (
  `id_slot` varchar(11) NOT NULL,
  `id_rak` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slot`
--

INSERT INTO `slot` (`id_slot`, `id_rak`) VALUES
('a1a1', '1a1'),
('a1b1', '1b1'),
('a1c1', '1c1'),
('a1d1', '1d1'),
('a2a1', '2a1'),
('a2b1', '2b1'),
('a2c1', '2c1'),
('a2d1', '2d1'),
('a3a1', '3a1'),
('a3b1', '3b1'),
('a3c1', '3c1'),
('a3d1', '3d1'),
('a4a1', '4a1'),
('a4b1', '4b1'),
('b1a1', '1a1'),
('b1b1', '1b1'),
('b1c1', '1c1'),
('b1d1', '1d1'),
('b2a1', '2a1'),
('b2b1', '2b1'),
('b2c1', '2c1'),
('b2d1', '2d1'),
('b3a1', '3a1'),
('b3b1', '3b1'),
('b3c1', '3c1'),
('b3d1', '3d1'),
('b4a1', '4a1'),
('b4b1', '4b1'),
('b4c1', '4c1'),
('c1a1', '1a1'),
('c1b1', '1b1'),
('c1c1', '1c1'),
('c1d1', '1d1'),
('c2a1', '2a1'),
('c2b1', '2b1'),
('c2c1', '2c1'),
('c2d1', '2d1'),
('c3a1', '3a1'),
('c3b1', '3b1'),
('c3c1', '3c1'),
('c3d1', '3d1'),
('c4a1', '4a1'),
('c4b1', '4b1'),
('d1a1', '1a1'),
('d1b1', '1b1'),
('d1c1', '1c1'),
('d1d1', '1d1'),
('d2a1', '2a1'),
('d2b1', '2b1'),
('d2c1', '2c1'),
('d2d1', '2d1'),
('d3a1', '3a1'),
('d3b1', '3b1'),
('d3c1', '3c1'),
('d3d1', '3d1'),
('d4a1', '4a1'),
('d4b1', '4b1');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(255) NOT NULL,
  `id_kostumer` int(11) NOT NULL,
  `id_barang` int(20) NOT NULL,
  `jumlah` int(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_kostumer`, `id_barang`, `jumlah`, `status`) VALUES
(1, 2, 3, 10000, 'inbound'),
(2, 4, 3, 10000, 'inbound'),
(9, 1, 13, 33333, 'inbound'),
(10, 0, 0, 4, 'inbound'),
(11, 0, 0, 5, 'inbound'),
(12, 2, 13, 5000000, 'inbound'),
(21, 2, 3, 2000, 'inbound'),
(22, 1, 10, 500, 'inbound'),
(23, 4, 16, 900, 'inbound'),
(24, 5, 13, 1000, 'inbound'),
(25, 1, 3, 10, 'inbound'),
(26, 1, 3, 10, 'inbound');

--
-- Triggers `transaksi`
--
DELIMITER $$
CREATE TRIGGER `barang_masuk` AFTER INSERT ON `transaksi` FOR EACH ROW BEGIN
	UPDATE penyimpanan SET jumlah=jumlah+NEW.jumlah
    WHERE id_barang = NEW.id_barang;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi2`
--

CREATE TABLE `transaksi2` (
  `id_transaksi` int(255) NOT NULL,
  `id_kostumer` int(11) NOT NULL,
  `id_barang` int(20) NOT NULL,
  `jumlah` int(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi2`
--

INSERT INTO `transaksi2` (`id_transaksi`, `id_kostumer`, `id_barang`, `jumlah`, `status`) VALUES
(3, 2, 13, 20000, 'outbound'),
(4, 4, 13, 3000, 'outbound'),
(7, 1, 10, 3552, 'outbound'),
(8, 3, 12, 555, 'outbound'),
(13, 3, 13, 5000000, 'outbound'),
(20, 2, 3, 5000, 'outbound'),
(21, 4, 12, 500, 'outbound'),
(22, 4, 3, 10, 'outbound'),
(23, 1, 12, 5, 'outbound'),
(24, 2, 3, 6900, 'outbound'),
(25, 1, 3, 20, 'outbound'),
(26, 2, 3, 50, 'outbound'),
(27, 2, 3, 500, 'outbound'),
(28, 2, 3, 50, 'outbound'),
(29, 2, 3, 50, 'outbound');

--
-- Triggers `transaksi2`
--
DELIMITER $$
CREATE TRIGGER `barang_keluar` AFTER INSERT ON `transaksi2` FOR EACH ROW BEGIN
	UPDATE penyimpanan SET jumlah=jumlah-NEW.jumlah
    WHERE id_barang = NEW.id_barang;
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `gudang`
--
ALTER TABLE `gudang`
  ADD PRIMARY KEY (`id_gudang`);

--
-- Indexes for table `jenis_penyimpanan`
--
ALTER TABLE `jenis_penyimpanan`
  ADD PRIMARY KEY (`id_jenis_penyimpanan`);

--
-- Indexes for table `kostumer`
--
ALTER TABLE `kostumer`
  ADD PRIMARY KEY (`id_kostumer`);

--
-- Indexes for table `penyimpanan`
--
ALTER TABLE `penyimpanan`
  ADD PRIMARY KEY (`id_penyimpanan`);

--
-- Indexes for table `rak`
--
ALTER TABLE `rak`
  ADD PRIMARY KEY (`id_rak`);

--
-- Indexes for table `sektor`
--
ALTER TABLE `sektor`
  ADD PRIMARY KEY (`id_sektor`);

--
-- Indexes for table `slot`
--
ALTER TABLE `slot`
  ADD PRIMARY KEY (`id_slot`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `transaksi2`
--
ALTER TABLE `transaksi2`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `gudang`
--
ALTER TABLE `gudang`
  MODIFY `id_gudang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kostumer`
--
ALTER TABLE `kostumer`
  MODIFY `id_kostumer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `penyimpanan`
--
ALTER TABLE `penyimpanan`
  MODIFY `id_penyimpanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `transaksi2`
--
ALTER TABLE `transaksi2`
  MODIFY `id_transaksi` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
