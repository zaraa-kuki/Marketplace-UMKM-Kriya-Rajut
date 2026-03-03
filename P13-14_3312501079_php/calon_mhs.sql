-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 27, 2025 at 01:07 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa_baru`
--

-- --------------------------------------------------------

--
-- Table structure for table `calon_mhs`
--

CREATE TABLE `calon_mhs` (
  `nis` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jk` varchar(30) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `file_pendukung` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `calon_mhs`
--

INSERT INTO `calon_mhs` (`nis`, `nama`, `jk`, `telepon`, `alamat`, `foto`, `file_pendukung`) VALUES
('3312501081', 'LATIFAH INTAN ROSARY', 'Perempuan', '082222131380', 'Batu Aji, Batam', '1000043654_08142e8d4184041aaf9e46db5085197a-25_10_2025, 20.37.57.jpg', 'P14. Export Data.pdf'),
('3312501080', 'HAFIZH ABDUL HALIM', 'Laki-laki', '081212123940', 'Marina, Batam', '1000043655_974dbcb84a306588373498e26220ddef-25_10_2025, 20.38.06.jpg', 'P14. Export Data.docx'),
('3312501082', 'CRISTH VALDO ARITONANG', 'Laki-laki', '081340405032', 'Tiban, Batam', '1000043657_16e983f4b69c5d52a13b9247ec61939b-25_10_2025, 20.38.13.jpg', 'P14. Export Data.docx');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
