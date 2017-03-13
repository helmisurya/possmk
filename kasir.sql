-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2017 at 08:47 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasir`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` varchar(8) NOT NULL,
  `username` text NOT NULL,
  `password` varchar(20) NOT NULL,
  `typeUser` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penyesuaian_stok`
--

CREATE TABLE `penyesuaian_stok` (
  `id_stok` varchar(10) NOT NULL,
  `tanggal_stok` date NOT NULL,
  `nama_pj` text NOT NULL,
  `jumlah_awal` int(5) NOT NULL,
  `jumlah_akhir` int(5) NOT NULL,
  `selisih` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `kode_barang` varchar(10) NOT NULL,
  `nama_barang` text NOT NULL,
  `satuan` varchar(25) NOT NULL,
  `stok` int(15) NOT NULL,
  `harga` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_beli`
--

CREATE TABLE `tb_beli` (
  `tanggal_beli` date NOT NULL,
  `nama_suplier` text NOT NULL,
  `barang` varchar(30) NOT NULL,
  `harga_satuan` varchar(10) NOT NULL,
  `jumlah_barang` int(5) NOT NULL,
  `total` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jual`
--

CREATE TABLE `tb_jual` (
  `tanggal_jual` date NOT NULL,
  `nama_konsumen` text NOT NULL,
  `barang` varchar(35) NOT NULL,
  `harga_satuan` varchar(40) NOT NULL,
  `jumlah_barang` int(5) NOT NULL,
  `total` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_staff`
--

CREATE TABLE `tb_staff` (
  `id_staff` int(10) NOT NULL,
  `nama_staff` text NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `telepon` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyesuaian_stok`
--
ALTER TABLE `penyesuaian_stok`
  ADD PRIMARY KEY (`id_stok`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `tb_beli`
--
ALTER TABLE `tb_beli`
  ADD PRIMARY KEY (`barang`);

--
-- Indexes for table `tb_jual`
--
ALTER TABLE `tb_jual`
  ADD PRIMARY KEY (`barang`);

--
-- Indexes for table `tb_staff`
--
ALTER TABLE `tb_staff`
  ADD PRIMARY KEY (`id_staff`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
