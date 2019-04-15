-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2019 at 02:41 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_komputer`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_lengkap`) VALUES
(1, 'admin', 'admin', 'kevin');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_produk`
--

CREATE TABLE `kategori_produk` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_produk`
--

INSERT INTO `kategori_produk` (`id_kategori`, `nama_kategori`) VALUES
(1, 'VGA Card'),
(2, 'Hardisk'),
(3, 'Processor'),
(4, 'Monitor'),
(5, 'Power Supply'),
(6, 'Ram'),
(7, 'Hardisk'),
(8, 'SSD'),
(9, 'Motherboard'),
(10, 'Peripheral'),
(11, 'CPU');

-- --------------------------------------------------------

--
-- Table structure for table `ongkir`
--

CREATE TABLE `ongkir` (
  `id_ongkir` int(11) NOT NULL,
  `nama_kota` varchar(100) NOT NULL,
  `tarif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ongkir`
--

INSERT INTO `ongkir` (`id_ongkir`, `nama_kota`, `tarif`) VALUES
(1, 'Jakarta Utara', 12000),
(2, 'Demak', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(10) NOT NULL,
  `email_pelanggan` varchar(100) NOT NULL,
  `password_pelanggan` varchar(100) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `telepon` varchar(25) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `email_pelanggan`, `password_pelanggan`, `nama_pelanggan`, `telepon`, `status`) VALUES
(3, 'kevinrisqi22@gmail.com', 'kevinrisqi', 'Kevin Risqi Ramadhani', '08789439438', 'Active'),
(4, 'yoga@gmail.com', '807659cd883fc0a63f6ce615893b3558', 'yoga', '082187783567', '');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_ongkir` int(11) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `total_pembelian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_pelanggan`, `id_ongkir`, `tanggal_pembelian`, `total_pembelian`) VALUES
(1, 1, 1, '2019-04-12', 5000000),
(2, 4, 1, '2019-04-12', 32500005);

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_produk`
--

CREATE TABLE `pembelian_produk` (
  `id_pembelian_produk` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian_produk`
--

INSERT INTO `pembelian_produk` (`id_pembelian_produk`, `id_pembelian`, `id_produk`, `jumlah`) VALUES
(1, 1, 3, 5),
(2, 1, 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `stok` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga`, `status`, `stok`, `berat`, `foto`, `deskripsi`, `id_kategori`) VALUES
(3, 'Processor Intel Core I9-9900K', 12250000, 'Aktif', 100, 100, 'PROSESSOR_Intel_Core_i9_9900K.jpg', '	\r\nPerformance\r\n\r\n# of Cores\r\n8\r\n\r\n# of Threads\r\n16\r\n\r\nProcessor Base Frequency\r\n3.60 GHz\r\n\r\nMax Turbo Frequency\r\n5.00 GHz\r\n\r\nCache\r\n16 MB SmartCache\r\n\r\nBus Speed\r\n8 GT/s DMI3\r\n\r\nTDP\r\n95 W\r\n\r\n\r\nMemory Specifications\r\n\r\nMax Memory Size (dependent on memory type)\r\n64 GB\r\n\r\nMemory Types\r\nDDR4-2666\r\n\r\nMax # of Memory Channels\r\n2\r\n\r\nMax Memory Bandwidth\r\n41.6 GB/s\r\n\r\nECC Memory Supported \r\nNo\r\n\r\n\r\nProcessor Graphics\r\n\r\nProcessor Graphics \r\nIntel UHD Graphics 630\r\n\r\nGraphics Base Frequency\r\n350 MHz\r\n\r\nGraphics Max Dynamic Frequency\r\n1.20 GHz\r\n\r\nGraphics Video Max Memory\r\n64 GB\r\n\r\n4K Support\r\nYes, at 60Hz\r\n\r\nMax Resolution (HDMI 1.4)\r\n4096x2304@24Hz\r\n\r\nMax Resolution (DP)\r\n4096x2304@60Hz\r\n\r\nMax Resolution (eDP - Integrated Flat Panel)\r\n4096x2304@60Hz\r\n\r\nDirectX* Support\r\n12\r\n\r\nOpenGL* Support\r\n4.5\r\n\r\nIntel Quick Sync Video\r\nYes\r\n\r\nIntel InTru 3D Technology\r\nYes\r\n\r\nIntel Clear Video HD Technology\r\nYes\r\n\r\nIntel Clear Video Technology\r\nYes\r\n\r\n# of Displays Supported \r\n3\r\n\r\nDevice ID\r\n0x3E98\r\n\r\n\r\nExpansion Options\r\n\r\nScalability\r\n1S Only\r\n\r\nPCI Express Revision\r\n3.0\r\n\r\nPCI Express Configurations \r\nUp to 1x16, 2x8, 1x8+2x4\r\n\r\nMax # of PCI Express Lanes\r\n16\r\n\r\n\r\nPackage Specifications\r\n\r\nSockets Supported\r\nFCLGA1151\r\n\r\nMax CPU Configuration\r\n1\r\n\r\nThermal Solution Specification\r\nPCG 2015D (130W)\r\n\r\nTJUNCTION\r\n100C\r\n\r\nPackage Size\r\n37.5mm x 37.5mm \r\nCOC', 3),
(4, 'Processor AMD Ryzen 7 2700X', 6500000, 'Tidak Aktif', 50, 500, '929916_5705f380_dd47_43de_a5f5_b00c1eeca35b_1170_773.jpg', 'Garansi 3 Tahun\r\n\r\n8\r\n16\r\nBase Clock\r\n3.2GHz\r\nMax Boost Clock\r\n4.1GHz\r\nTotal L1 Cache\r\n768KB\r\nTotal L2 Cache\r\n4MB\r\nTotal L3 Cache\r\n16MB\r\nUnlocked\r\nYes\r\nCMOS\r\n12nm FinFET\r\nPackage\r\nAM4\r\nPCI Express Version\r\nPCIe 3.0 x16\r\nThermal Solution\r\nWraith Spire with RGB LED\r\nDefault TDP / TDP\r\n65W\r\nMax Temps\r\n95C', 3),
(5, 'Processor AMD Ryzen 3 2200G', 2200000, 'Aktif', 10, 500, '5580703_930e9369_0f58_4bc1_ac73_c764dfd03150_700_587.jpeg', 'AMD Processor Ryzen 3 2200G with Radeon Vega 8 Graphics \r\nSocket AM4\r\nPower : 65W\r\nSocket : AM4\r\nCache L2/L3 : 6MB', 3),
(6, 'MSI GTX 1050 2GT OCV1 Graphics Card', 2600000, 'Aktif', 10, 500, 'MSI_GTX_1050_2GT_OCV1_Graphics_Card.jpg', 'MODEL NAME	GeForceGTX 1050 2GT OCV1\r\nGRAPHICS PROCESSING UNIT	NVIDIAGeForceGTX 1050\r\nINTERFACE	PCI Express 3.0 x16\r\nCORE NAME	GP107-300\r\nCORES	640 Units\r\nCORE CLOCKS	1518 MHz / 1404 MHz\r\nMEMORY CLOCK SPEED	7008 MHz\r\nMEMORY	2GB GDDR5\r\nMEMORY BUS	128-bit\r\nOUTPUT	DisplayPort / HDMI / DL-DVI-D\r\nHDCP SUPPORT	2.2\r\nPOWER CONSUMPTION	75 W\r\nRECOMMENDED PSU	300 W\r\nCARD DIMENSION(MM)	215 x 112 x 38 mm\r\nWEIGHT (CARD / PACKAGE	448 g / 788 g', 1),
(38, 'NVIDIA Geforce RTX 2060', 5, 'Active', 4, 5, 'Admin-128.png', 'adsjf', 1),
(40, 'NVIDIA Geforce RTX 2060', 500000, 'Active', 5, 500, 'Admin-128.png', 'bagus', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `ongkir`
--
ALTER TABLE `ongkir`
  ADD PRIMARY KEY (`id_ongkir`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indexes for table `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  ADD PRIMARY KEY (`id_pembelian_produk`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `ongkir`
--
ALTER TABLE `ongkir`
  MODIFY `id_ongkir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  MODIFY `id_pembelian_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
