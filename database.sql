-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2019 at 09:35 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `computer_shop`
--
CREATE DATABASE IF NOT EXISTS `computer_shop` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `computer_shop`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(64) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(5, 'administrator', 'admin@gmail.com', 'default.jpg', '$2y$10$OdCphOMLJ7hUW3AMTVwMZuRWfASkU0rkylBKSKbkuFRBv7j719RJ.', 1, 1, 1552633709),
(6, 'admin3', 'admin3@gmail.com', 'default.jpg', '$2y$10$6F4EQSlV3XzzCp/INJyEfO5miVQFOQpgsjlRDR98tHb.aaRxZ0hFC', 1, 1, 1552634564),
(7, 'admin99', 'admin99@gmail.com', 'default.jpg', '$2y$10$Ho16p9V90o6fesCJvydfWORmtZuReOq3af99T4gFZbxcrMuXm0..C', 1, 1, 1552635954),
(8, 'admin33', 'admin33@gmail.com', 'default.jpg', '$2y$10$yb8LJv.EeCs1p89nEMVuLO2Yj65J6HqIsYdRPf/AmzPugXTH9RfMS', 1, 1, 1552636067);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_produk`
--

CREATE TABLE IF NOT EXISTS `kategori_produk` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(100) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `kategori_produk`
--

INSERT INTO `kategori_produk` (`id_kategori`, `nama_kategori`) VALUES
(1, 'VGA Card'),
(2, 'Hardisk'),
(3, 'Processor'),
(4, 'Monitor'),
(5, 'Ram'),
(6, 'SSD'),
(7, 'Motherboard'),
(8, 'CPU');

-- --------------------------------------------------------

--
-- Table structure for table `ongkir`
--

CREATE TABLE IF NOT EXISTS `ongkir` (
  `id_ongkir` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kota` varchar(100) NOT NULL,
  `tarif` int(11) NOT NULL,
  PRIMARY KEY (`id_ongkir`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

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

CREATE TABLE IF NOT EXISTS `pelanggan` (
  `id_pelanggan` int(10) NOT NULL AUTO_INCREMENT,
  `email_pelanggan` varchar(100) NOT NULL,
  `password_pelanggan` varchar(100) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `telepon` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`id_pelanggan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `email_pelanggan`, `password_pelanggan`, `nama_pelanggan`, `telepon`, `alamat`) VALUES
(3, 'kevinrisqi22@gmail.com', 'kevinrisqi', 'Kevin Risqi Ramadhani', '08789439438', ''),
(4, 'asd2@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'asd2', '123456789012', ''),
(5, 'fervian@gmail.com', '46759d14d13f823e5fb35d5c45e3575e', 'fervian', '087702997565', ''),
(6, 'rincember@gmail.com', '46759d14d13f823e5fb35d5c45e3575e', 'rincember', '087702997565', ''),
(7, 'luffy@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'luffy', '087856437740', ''),
(8, 'irhamm@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Irham', '087702997565', 'malang');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE IF NOT EXISTS `pembelian` (
  `id_pembelian` int(11) NOT NULL AUTO_INCREMENT,
  `id_pelanggan` int(11) NOT NULL,
  `id_ongkir` int(11) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `total_pembelian` int(11) NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `bukti_pembayaran` int(11) NOT NULL,
  PRIMARY KEY (`id_pembelian`),
  KEY `id_ongkir` (`id_ongkir`),
  KEY `id_pelanggan` (`id_pelanggan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_pelanggan`, `id_ongkir`, `tanggal_pembelian`, `total_pembelian`, `alamat`, `bukti_pembayaran`) VALUES
(4, 3, 1, '2019-04-11', 14850000, '', 0),
(18, 5, 1, '2019-05-03', 785000, NULL, 0),
(22, 8, 1, '2019-05-09', 6500000, NULL, 0),
(23, 8, 1, '2019-05-09', 12250000, NULL, 0),
(24, 8, 1, '2019-05-09', 0, NULL, 0),
(25, 8, 1, '2019-05-09', 0, NULL, 0),
(26, 8, 1, '2019-05-09', 0, NULL, 0),
(27, 8, 1, '2019-05-09', 0, NULL, 0),
(28, 8, 1, '2019-05-09', 6500000, NULL, 0),
(29, 8, 1, '2019-05-09', 0, NULL, 0),
(30, 8, 1, '2019-05-09', 0, NULL, 0),
(31, 8, 1, '2019-05-09', 2200000, NULL, 0),
(32, 8, 1, '2019-05-09', 0, NULL, 0),
(34, 8, 1, '2019-05-09', 6500000, NULL, 0),
(36, 8, 1, '2019-05-09', 2200000, NULL, 0),
(38, 8, 1, '2019-05-09', 6500000, NULL, 0),
(39, 8, 1, '2019-05-09', 0, NULL, 0),
(40, 8, 1, '2019-05-09', 12250000, NULL, 0),
(41, 8, 1, '2019-05-09', 2200000, NULL, 0),
(42, 8, 1, '2019-05-09', 12250000, NULL, 0),
(43, 8, 1, '2019-05-09', 0, NULL, 0),
(44, 8, 1, '2019-05-09', 0, NULL, 0),
(45, 8, 1, '2019-05-09', 0, NULL, 0),
(46, 8, 1, '2019-05-09', 13000000, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_produk`
--

CREATE TABLE IF NOT EXISTS `pembelian_produk` (
  `id_pembelian_produk` int(11) NOT NULL AUTO_INCREMENT,
  `id_pembelian` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  PRIMARY KEY (`id_pembelian_produk`),
  KEY `id_pembelian` (`id_pembelian`),
  KEY `id_produk` (`id_produk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `id_produk` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`id_produk`),
  KEY `id_kategori` (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_kategori`, `nama_produk`, `harga`, `stok`, `berat`, `foto`, `deskripsi`) VALUES
(3, 3, 'Processor Intel Core I9-9900K', 12250000, 100, 100, 'PROSESSOR_Intel_Core_i9_9900K.jpg', '	\r\nPerformance\r\n\r\n# of Cores\r\n8\r\n\r\n# of Threads\r\n16\r\n\r\nProcessor Base Frequency\r\n3.60 GHz\r\n\r\nMax Turbo Frequency\r\n5.00 GHz\r\n\r\nCache\r\n16 MB SmartCache\r\n\r\nBus Speed\r\n8 GT/s DMI3\r\n\r\nTDP\r\n95 W\r\n\r\n\r\nMemory Specifications\r\n\r\nMax Memory Size (dependent on memory type)\r\n64 GB\r\n\r\nMemory Types\r\nDDR4-2666\r\n\r\nMax # of Memory Channels\r\n2\r\n\r\nMax Memory Bandwidth\r\n41.6 GB/s\r\n\r\nECC Memory Supported \r\nNo\r\n\r\n\r\nProcessor Graphics\r\n\r\nProcessor Graphics \r\nIntel UHD Graphics 630\r\n\r\nGraphics Base Frequency\r\n350 MHz\r\n\r\nGraphics Max Dynamic Frequency\r\n1.20 GHz\r\n\r\nGraphics Video Max Memory\r\n64 GB\r\n\r\n4K Support\r\nYes, at 60Hz\r\n\r\nMax Resolution (HDMI 1.4)\r\n4096x2304@24Hz\r\n\r\nMax Resolution (DP)\r\n4096x2304@60Hz\r\n\r\nMax Resolution (eDP - Integrated Flat Panel)\r\n4096x2304@60Hz\r\n\r\nDirectX* Support\r\n12\r\n\r\nOpenGL* Support\r\n4.5\r\n\r\nIntel Quick Sync Video\r\nYes\r\n\r\nIntel InTru 3D Technology\r\nYes\r\n\r\nIntel Clear Video HD Technology\r\nYes\r\n\r\nIntel Clear Video Technology\r\nYes\r\n\r\n# of Displays Supported \r\n3\r\n\r\nDevice ID\r\n0x3E98\r\n\r\n\r\nExpansion Options\r\n\r\nScalability\r\n1S Only\r\n\r\nPCI Express Revision\r\n3.0\r\n\r\nPCI Express Configurations \r\nUp to 1x16, 2x8, 1x8+2x4\r\n\r\nMax # of PCI Express Lanes\r\n16\r\n\r\n\r\nPackage Specifications\r\n\r\nSockets Supported\r\nFCLGA1151\r\n\r\nMax CPU Configuration\r\n1\r\n\r\nThermal Solution Specification\r\nPCG 2015D (130W)\r\n\r\nTJUNCTION\r\n100C\r\n\r\nPackage Size\r\n37.5mm x 37.5mm \r\nCOC'),
(4, 3, 'Processor AMD Ryzen 7 2700X', 6500000, 50, 500, '929916_5705f380_dd47_43de_a5f5_b00c1eeca35b_1170_773.jpg', 'Garansi 3 Tahun\r\n\r\n8\r\n16\r\nBase Clock\r\n3.2GHz\r\nMax Boost Clock\r\n4.1GHz\r\nTotal L1 Cache\r\n768KB\r\nTotal L2 Cache\r\n4MB\r\nTotal L3 Cache\r\n16MB\r\nUnlocked\r\nYes\r\nCMOS\r\n12nm FinFET\r\nPackage\r\nAM4\r\nPCI Express Version\r\nPCIe 3.0 x16\r\nThermal Solution\r\nWraith Spire with RGB LED\r\nDefault TDP / TDP\r\n65W\r\nMax Temps\r\n95C'),
(5, 3, 'Processor AMD Ryzen 3 2200G', 2200000, 10, 500, '5580703_930e9369_0f58_4bc1_ac73_c764dfd03150_700_587.jpeg', 'AMD Processor Ryzen 3 2200G with Radeon Vega 8 Graphics \r\nSocket AM4\r\nPower : 65W\r\nSocket : AM4\r\nCache L2/L3 : 6MB'),
(6, 1, 'MSI GTX 1050 2GT OCV1 Graphics Card', 2600000, 10, 500, 'MSI_GTX_1050_2GT_OCV1_Graphics_Card.jpg', 'MODEL NAME	GeForceGTX 1050 2GT OCV1\r\nGRAPHICS PROCESSING UNIT	NVIDIAGeForceGTX 1050\r\nINTERFACE	PCI Express 3.0 x16\r\nCORE NAME	GP107-300\r\nCORES	640 Units\r\nCORE CLOCKS	1518 MHz / 1404 MHz\r\nMEMORY CLOCK SPEED	7008 MHz\r\nMEMORY	2GB GDDR5\r\nMEMORY BUS	128-bit\r\nOUTPUT	DisplayPort / HDMI / DL-DVI-D\r\nHDCP SUPPORT	2.2\r\nPOWER CONSUMPTION	75 W\r\nRECOMMENDED PSU	300 W\r\nCARD DIMENSION(MM)	215 x 112 x 38 mm\r\nWEIGHT (CARD / PACKAGE	448 g / 788 g'),
(8, 3, 'Processor Intel Core I7-8700K', 6500000, 60, 500, '7701906_b3357974-8df6-459e-aa3f-712fe46b565b_620_465.png', 'ONLY Compatible with Intel 300 Series Motherboard\r\nFor A Great VR Experience\r\nMax Turbo Frequency 4.7 GHz\r\nIntel UHD Graphics 630\r\nUnlocked Processor\r\nDDR4 Support\r\nSocket LGA 1151 (300 Series)\r\nCooler / thermal paste not included\r\n\r\nModel\r\n\r\nBrand\r\nIntel\r\nProcessors Type\r\nDesktop\r\nSeries\r\nCore i7 8th Gen\r\nName\r\nIntel Core i7-8700K\r\nModel\r\nBX80684I78700K\r\n\r\nDetails\r\n\r\nCPU Socket Type\r\nLGA 1151 (300 Series)\r\nCore Name\r\nCoffee Lake\r\n# of Cores\r\n6-Core\r\n# of Threads\r\n12\r\nOperating Frequency\r\n3.7 GHz\r\nMax Turbo Frequency\r\n4.7 GHz\r\nL3 Cache\r\n12MB\r\nManufacturing Tech\r\n14nm\r\n64-Bit Support\r\nYes\r\nHyper-Threading Support\r\nYes\r\nMemory Types\r\nDDR4-2666\r\nMemory Channel\r\n2\r\nVirtualization Technology Support\r\nYes\r\nIntegrated Graphics\r\nIntel UHD Graphics 630\r\nGraphics Base Frequency\r\n350 MHz\r\nGraphics Max Dynamic Frequency\r\n1.2 GHz\r\nPCI Express Revision\r\n3.0\r\nMax Number of PCI Express Lanes\r\n16\r\nThermal Design Power\r\n95W\r\nCooling Device\r\nCooling device not included - Processor Only '),
(10, 4, 'Monitor LED Samsung C24F390FHEX 24 inch Curved VGA', 1558000, 3, 15, 'monitorsamsung.jpg', 'Hello World!'),
(11, 5, 'RAM DDR4 SODimm 8GB V-GeN PC-21300 2666MHz - Memory Laptop 8 GB VGeN', 848000, 12, 22, 'ramddr4.jpg', 'Hello World!'),
(12, 6, 'SSD Solid State Drive V-GeN 480GB SATA 3 SSD VGEN 480 GB', 780000, 2, 10, 'ssdvgen.jpg', 'Hello World!'),
(13, 7, 'Motherboard Asrock H110M-HDV - DDR4', 785000, 11, 30, 'mother.jpg', 'Hello World!'),
(14, 8, 'Core i5-CPU Core i5-DDR 8GB-HDD 500GB', 2375000, 1, 32, 'corei5.jpg', 'Hello World!');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `image` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Irham', 'irham@gmail.com', 'default.jpg', '$2y$10$biE4fygAwFcobo0Bp1M6T.OLfVuCOtcHchhvdpJaHSpqNAe4PbX9K', 2, 1, 1552593455),
(2, 'wqidkqwduq', 'iwajdjijwai@gmail.com', 'default.jpg', '$2y$10$gwpp2wOOL2lfxvdlbDV/GeMCmdvpl.OWQBYFZnJenI73xfL6bUbLa', 2, 1, 1552613419),
(3, 'febri', 'febri@gmail.com', 'default.jpg', '$2y$10$r9C384tCvMWCQ/Uxn/Hnje4OyxzwCtx/1tNx1A0.sAlEIPHaJUmly', 2, 1, 1552620483);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE IF NOT EXISTS `user_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `pembelian_ibfk_1` FOREIGN KEY (`id_ongkir`) REFERENCES `ongkir` (`id_ongkir`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembelian_ibfk_2` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  ADD CONSTRAINT `pembelian_produk_ibfk_1` FOREIGN KEY (`id_pembelian`) REFERENCES `pembelian` (`id_pembelian`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembelian_produk_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_produk` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
