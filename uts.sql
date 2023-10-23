-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2023 at 08:36 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts`
--

-- --------------------------------------------------------

--
-- Table structure for table `mhs`
--

CREATE TABLE `mhs` (
  `nama` varchar(255) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `prodi` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jenkel` varchar(255) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mhs`
--

INSERT INTO `mhs` (`nama`, `nim`, `prodi`, `email`, `password`, `jenkel`, `tgl_lhr`, `alamat`, `foto`) VALUES
('M Khalil Razan Faza', '121140234', 'Teknik Informatika', 'rumahguadi@gmail.com', 'faza123', 'Laki-Laki', '2023-11-02', 'jalan pulau buru gang teratai no 2', ''),
('Dahlia Sari Putri', '121140235', 'Teknik Informatika', 'dahliasariputri@gmail.com', 'dahlia123', 'Perempuan', '2023-10-26', 'jl bumi manti no 29 bandar lampung', ''),
('fadhil apryan ahmad', '121140236', 'Teknik Informatika', 'fadhil@gmail.com', 'fadhil123', 'Laki-Laki', '2023-10-18', 'jl kelengkeng jaya no 12 , lampung selatan', ''),
('ghaza al ghifari', '1211402398', 'Teknik Informatika', 'ghaza@gmail.com', 'ghaza123', 'Laki-Laki', '2023-10-12', 'jl. pulau merdeka no 12 , bandar lampung', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
