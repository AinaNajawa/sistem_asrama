-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2022 at 05:12 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_asrama`
--

-- --------------------------------------------------------

--
-- Table structure for table `aduan`
--

CREATE TABLE `aduan` (
  `ndp` int(9) NOT NULL,
  `tarikh` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `penyelia` varchar(12) NOT NULL,
  `tajuk_isi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aduan`
--

INSERT INTO `aduan` (`ndp`, `tarikh`, `status`, `penyelia`, `tajuk_isi`) VALUES
(23221091, '2022-11-23', 'pelajar', 'warden perem', 'tandas'),
(23221091, '2022-11-01', 'pelajar', 'warden perem', 'dewan makan'),
(23221102, '2022-11-18', 'pelajar', 'warden lelak', 'bilik bersepah'),
(23221084, '2022-11-06', 'pelajar', 'warden perem', 'ampayan'),
(23221091, '2022-10-31', 'pelajar', 'warden perem', 'dewan makan');

-- --------------------------------------------------------

--
-- Table structure for table `bilik`
--

CREATE TABLE `bilik` (
  `no_bilik` int(5) NOT NULL,
  `ndp` int(8) NOT NULL,
  `ndp_roomate` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bilik`
--

INSERT INTO `bilik` (`no_bilik`, `ndp`, `ndp_roomate`) VALUES
(69, 23221091, 23221084),
(14, 23221095, 23221098),
(12, 23221096, 23221101),
(62, 23221102, 23221092),
(13, 23221147, 23221023);

-- --------------------------------------------------------

--
-- Table structure for table `edit_aduan`
--

CREATE TABLE `edit_aduan` (
  `bil` int(3) NOT NULL,
  `no_ndp` int(9) NOT NULL,
  `tajuk_isi` varchar(50) NOT NULL,
  `tarikh` date NOT NULL,
  `status` varchar(10) NOT NULL,
  `penyelia` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `edit_bilik`
--

CREATE TABLE `edit_bilik` (
  `bil` int(3) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `no_bilik` int(3) NOT NULL,
  `ndp` int(9) NOT NULL,
  `ndp_roomate` int(9) NOT NULL,
  `no_hp` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `nama` varchar(15) NOT NULL,
  `ndp` int(9) NOT NULL,
  `katalaluan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `nama_pelajar` varchar(15) NOT NULL,
  `ndp` int(8) NOT NULL,
  `kursus` varchar(4) NOT NULL,
  `no_hp` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Nama` varchar(15) NOT NULL,
  `ndp` int(9) NOT NULL,
  `no_ic` int(30) NOT NULL,
  `no_hp` int(20) NOT NULL,
  `alamt_rumah` varchar(50) NOT NULL,
  `kursus` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bilik`
--
ALTER TABLE `bilik`
  ADD PRIMARY KEY (`ndp`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ndp`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`ndp`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`ndp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bilik`
--
ALTER TABLE `bilik`
  MODIFY `ndp` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23221148;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
