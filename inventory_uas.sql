-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2021 at 06:58 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory_uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang_2020`
--

CREATE TABLE `barang_2020` (
  `id` int(11) NOT NULL,
  `kode_barang` varchar(50) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `id_supplier` varchar(50) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `id_jenis` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `stok` varchar(50) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_2020`
--

INSERT INTO `barang_2020` (`id`, `kode_barang`, `nama_barang`, `id_supplier`, `satuan`, `id_jenis`, `harga`, `stok`, `ket`) VALUES
(4, 'Nike-0003', 'Nike Air', '1', 'Buah', '1', '500000', '1', 'Bagus'),
(5, 'Nike-0003', 'Nike Air Jordan', '1', 'Kg', '1', '300000', '2', 'Bagus Bagus'),
(6, 'TShirt-0003', 'Baju Kaos Polos', '1', 'Helai', '2', '65000', '2', 'Good'),
(8, '123', 'Baju', '2', 'Kg', '2', '75000', '12', 'Baik');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_2020`
--

CREATE TABLE `jenis_2020` (
  `id_jenis` int(11) NOT NULL,
  `jenis_barang` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_2020`
--

INSERT INTO `jenis_2020` (`id_jenis`, `jenis_barang`, `keterangan`) VALUES
(1, 'Sepatu', 'Grade B'),
(2, 'Baju', 'Grade B'),
(3, 'Celana', 'Grade B'),
(4, 'Sendal', 'Grade B');

-- --------------------------------------------------------

--
-- Table structure for table `supplier_2020`
--

CREATE TABLE `supplier_2020` (
  `id_supplier` int(11) NOT NULL,
  `nama_supplier` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `notelp` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier_2020`
--

INSERT INTO `supplier_2020` (`id_supplier`, `nama_supplier`, `email`, `notelp`, `alamat`) VALUES
(1, 'Fajri Husaini', 'fajri@gmail.com', '081234567890', 'Rengat Barat'),
(2, 'Husaini', 'husaini@gmail.com', '081209348756', 'Padang'),
(3, 'M. Fajri Husaini', 'mfajrihusaini05@gmail.com', '080987654321', 'Padang');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `date_created`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2021-01-23 15:24:35', 'administrator'),
(2, 'mfajrihusaini02', 'd407de468cdec54263cfecb34ec69a86', '2021-01-23 18:04:51', ''),
(3, 'fajri', '437eb04136c59d226f14527f52726341', '2021-01-23 18:06:24', ''),
(4, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', '2021-01-23 18:16:51', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang_2020`
--
ALTER TABLE `barang_2020`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_supplier` (`id_supplier`),
  ADD KEY `id_jenis` (`id_jenis`);

--
-- Indexes for table `jenis_2020`
--
ALTER TABLE `jenis_2020`
  ADD PRIMARY KEY (`id_jenis`),
  ADD KEY `id_jenis` (`id_jenis`);

--
-- Indexes for table `supplier_2020`
--
ALTER TABLE `supplier_2020`
  ADD PRIMARY KEY (`id_supplier`),
  ADD KEY `id_supplier` (`id_supplier`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang_2020`
--
ALTER TABLE `barang_2020`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jenis_2020`
--
ALTER TABLE `jenis_2020`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `supplier_2020`
--
ALTER TABLE `supplier_2020`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
