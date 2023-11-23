-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2023 at 01:56 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2106058_egha`
--

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran_crew`
--

CREATE TABLE `pendaftaran_crew` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `kata_sandi` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nomor_telepon` varchar(20) NOT NULL,
  `pengalaman_kerja` text NOT NULL,
  `posisi_pekerjaan` varchar(50) NOT NULL,
  `syarat_ketentuan` enum('Setuju','Tidak Setuju') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pendaftaran_crew`
--

INSERT INTO `pendaftaran_crew` (`id`, `nama_lengkap`, `email`, `kata_sandi`, `tanggal_lahir`, `nomor_telepon`, `pengalaman_kerja`, `posisi_pekerjaan`, `syarat_ketentuan`) VALUES
(1, 'EghaSB', 'eghasb@gmail.com', 'eeegha21323124341', '2023-11-06', '0812345677', 'Saya mahir dalam software editing', 'editor', 'Setuju'),
(2, 'Pikoya anso', 'piko@gmail.com', 'kitabissa12376547399', '2004-03-24', '089123466644', 'saya uka menulis dan berceritaa', 'penulis_naskah', 'Setuju'),
(3, 'Sukijan Harumantut', 'jaja@gmail.com', 'haha8899028366648', '2005-11-10', '08953749956', 'senang bermain kamera, dan sempat menjadi DOP', 'sinematografer', 'Setuju'),
(4, 'Sova Sokdart', 'sova@gmail.com', 'sova0987654', '2019-02-15', '098746339922', 'mampu membuat sebuah konsep yang creative', 'sutradara', 'Setuju'),
(5, 'Reyna Red', 'ryna@gmail.com', 'ryna980655', '2013-02-17', '098736427342', 'saya belum ada pengalaman', 'desainer_suara', 'Setuju');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pendaftaran_crew`
--
ALTER TABLE `pendaftaran_crew`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pendaftaran_crew`
--
ALTER TABLE `pendaftaran_crew`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
