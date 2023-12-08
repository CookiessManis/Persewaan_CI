-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2023 at 12:27 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vantage_villa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `idAdmin` char(5) NOT NULL,
  `userName` varchar(10) DEFAULT NULL,
  `password` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`idAdmin`, `userName`, `password`) VALUES
('1', 'admin', '12345'),
('2', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buktisewa`
--

CREATE TABLE `tbl_buktisewa` (
  `kodeBooking` char(5) NOT NULL,
  `noReservasi` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cottage`
--

CREATE TABLE `tbl_cottage` (
  `idCottage` char(5) NOT NULL,
  `namaCottage` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `jumlahKamar` int(10) DEFAULT NULL,
  `deskripsi` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `harga` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cottage`
--

INSERT INTO `tbl_cottage` (`idCottage`, `namaCottage`, `jumlahKamar`, `deskripsi`, `harga`) VALUES
('CTG01', 'Wood Suite Room', 10, 'Fasilitas Wood Suite Room\r\n1. WiFi\r\n2. Coffee & Tea\r\n3. Water Heater, Shower, Shampoo & Soap\r\n4. Terrace\r\n5. Non Smoking Room\r\n6. TV, Full-Length Mirror, Bed-side Table, Bathroom', 650000),
('CTG02', 'Cluster Room Unit 1', 10, 'Fasilitas Cluster Room\r\n1. WiFi\r\n2. Coffee & Tea\r\n3. Water Heater, Shower, Shampoo & Soap\r\n4. Terrace\r\n5. Non Smoking Room\r\n6. TV, Full-Length Mirror, Bed-side Table, Bathroom', 550000),
('CTG03', 'Culture Suite Room', 10, 'Fasilitas Culture Suite Room\r\n1. WiFi\r\n2. Coffee & Tea\r\n3. Water Heater, Shower, Shampoo & Soap\r\n4. Terrace\r\n5. Non Smoking Room\r\n6. TV, Full-Length Mirror, Bed-side Table, Bathroom', 450000),
('CTG04', 'Matrix Room', 10, 'Fasilitas Matrix Room\r\n1. WiFi\r\n2. Coffee & Tea\r\n3. Water Heater, Shower, Shampoo & Soap\r\n4. Terrace\r\n5. Non Smoking Room\r\n6. TV, Full-Length Mirror, Bed-side Table, Bathroom', 350000),
('CTG05', 'Cluster Room Unit 2', 10, 'Fasilitas Cluster Room Unit 2\r\n1. WiFi\r\n2. Coffee & Tea\r\n3. Water Heater, Shower, Shampoo & Soap\r\n4. Terrace\r\n5. Non Smoking Room\r\n6. TV, Full-Length Mirror, Bed-side Table, Bathroom', 550000),
('CTG06', 'Country Suite Room', 10, 'Fasilitas Country Suite Room\r\n1. WiFi\r\n2. Coffee & Tea\r\n3. Water Heater, Shower, Shampoo & Soap\r\n4. Terrace\r\n5. Non Smoking Room\r\n6. TV, Full-Length Mirror, Bed-side Table, Bathroom', 650000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gambar`
--

CREATE TABLE `tbl_gambar` (
  `idGambar` char(5) NOT NULL,
  `gambar1` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `gambar2` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `gambar3` varchar(20) CHARACTER SET latin1 NOT NULL,
  `gambar4` varchar(20) CHARACTER SET latin1 NOT NULL,
  `idCottage` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_gambar`
--

INSERT INTO `tbl_gambar` (`idGambar`, `gambar1`, `gambar2`, `gambar3`, `gambar4`, `idCottage`) VALUES
('GB01', 'wood11.jpg', 'wood21.jpg', 'wood31.jpg', '', 'CTG01'),
('GB02', 'clust1.jpg', 'clust2.jpg', 'clust3.jpg', '', 'CTG02'),
('GB03', 'culture1.jpg', 'culture2.jpg', 'culture3.jpg', '', 'CTG03'),
('GB04', 'matrix1.jpg', 'matrix2.jpg', 'matrix3.jpg', '', 'CTG04'),
('GB05', 'cluster1.jpg', 'cluster2.jpg', 'cluster3.jpg', '', 'CTG05'),
('GB06', 'country1.jpg', 'country2.jpg', 'country3.jpg', '', 'CTG06');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penyewa`
--

CREATE TABLE `tbl_penyewa` (
  `NIK` char(16) NOT NULL,
  `namaPenyewa` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `alamat` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `email` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `no_telp` bigint(15) DEFAULT NULL,
  `tglCheckin` date DEFAULT NULL,
  `tglCheckout` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_penyewa`
--

INSERT INTO `tbl_penyewa` (`NIK`, `namaPenyewa`, `alamat`, `gender`, `email`, `no_telp`, `tglCheckin`, `tglCheckout`) VALUES
('3203015112222000', 'Zelina CIndy', 'Sleman CIty Hall', 'P', 'zelincans@gmail.com', 821146783293, '2023-12-31', '2024-01-01'),
('3203032564230001', 'Anthony', 'Jakarta', 'L', 'anthonyy@gmail.com', 81456887490, '2023-12-31', '2024-01-01'),
('3303011342030003', 'Jamilah', 'Solo', 'P', 'jamilah@gmail.com', 85785324556, '2023-12-25', '2023-12-26'),
('3303015222230002', 'Rendy', 'Bandung', 'L', 'rendygans@gamil.com', 81424245567, '2023-11-22', '2023-11-23'),
('3312345678911123', 'Zelin Dewiq', 'Magelang', 'P', 'zelind19@gmail.com', 81225762847, '2023-11-22', '2023-11-24'),
('3312371858910001', 'Aileen Alleyne', 'Jakarta', 'P', 'aileenye@gmail.com', 89542227563, '2023-11-30', '2023-12-01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `noReservasi` char(5) NOT NULL,
  `idCottage` char(5) NOT NULL,
  `NIK` char(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`noReservasi`, `idCottage`, `NIK`) VALUES
('RSV01', 'CTG01', '3312345678911123'),
('RSV02', 'CTG04', '3312371858910001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indexes for table `tbl_buktisewa`
--
ALTER TABLE `tbl_buktisewa`
  ADD PRIMARY KEY (`kodeBooking`),
  ADD UNIQUE KEY `noReservasi` (`noReservasi`);

--
-- Indexes for table `tbl_cottage`
--
ALTER TABLE `tbl_cottage`
  ADD PRIMARY KEY (`idCottage`);

--
-- Indexes for table `tbl_gambar`
--
ALTER TABLE `tbl_gambar`
  ADD PRIMARY KEY (`idGambar`),
  ADD KEY `idCottage` (`idCottage`);

--
-- Indexes for table `tbl_penyewa`
--
ALTER TABLE `tbl_penyewa`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`noReservasi`),
  ADD UNIQUE KEY `NIK` (`NIK`),
  ADD UNIQUE KEY `idCottage` (`idCottage`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_buktisewa`
--
ALTER TABLE `tbl_buktisewa`
  ADD CONSTRAINT `tbl_buktisewa_ibfk_1` FOREIGN KEY (`noReservasi`) REFERENCES `tbl_transaksi` (`noReservasi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_gambar`
--
ALTER TABLE `tbl_gambar`
  ADD CONSTRAINT `tbl_gambar_ibfk_1` FOREIGN KEY (`idCottage`) REFERENCES `tbl_cottage` (`idCottage`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD CONSTRAINT `tbl_transaksi_ibfk_1` FOREIGN KEY (`NIK`) REFERENCES `tbl_penyewa` (`NIK`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_transaksi_ibfk_2` FOREIGN KEY (`idCottage`) REFERENCES `tbl_cottage` (`idCottage`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
