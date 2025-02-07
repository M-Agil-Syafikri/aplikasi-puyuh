-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2023 at 10:02 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_puyuh`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_puyuh`
--

CREATE TABLE `admin_puyuh` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `notel` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_puyuh`
--

INSERT INTO `admin_puyuh` (`id`, `username`, `password`, `notel`) VALUES
(1, 'admin', 'admin', 909);

-- --------------------------------------------------------

--
-- Table structure for table `stok`
--

CREATE TABLE `stok` (
  `id_brng` int(100) NOT NULL,
  `jenis_brng` varchar(100) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stok`
--

INSERT INTO `stok` (`id_brng`, `jenis_brng`, `jumlah`, `keterangan`) VALUES
(1, 'telur', 12, 'asdsaasdadsadadsa'),
(2, 'asadsas', 1, 'jyhtty'),
(101, 'sdasad', 12, 'sasd'),
(122, '1212dadsa', 2, 'dsfsafs'),
(1212, 'sadada', 12, 'asdadsa'),
(9988, 'dadada', 12, 'saddasasddssasda');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_puyuh`
--
ALTER TABLE `admin_puyuh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stok`
--
ALTER TABLE `stok`
  ADD PRIMARY KEY (`id_brng`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_puyuh`
--
ALTER TABLE `admin_puyuh`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stok`
--
ALTER TABLE `stok`
  MODIFY `id_brng` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9989;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
