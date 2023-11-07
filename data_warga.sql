-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Nov 2023 pada 03.16
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_warga`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_warga`
--

CREATE TABLE `data_warga` (
  `ID` int(15) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `AGE` varchar(33) NOT NULL,
  `CITY` varchar(50) NOT NULL,
  `CREATED_AT` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_warga`
--

INSERT INTO `data_warga` (`ID`, `NAME`, `AGE`, `CITY`, `CREATED_AT`) VALUES
(6, 'Dewi', '17', 'Malang', '2023-11-06 11:51:25'),
(7, 'putri', '16', 'Tlogomas', '2023-11-06 11:53:08'),
(8, 'putri', '16', 'Tlogomas', '2023-11-06 11:56:48'),
(9, 'intan', '17', 'Malang', '2023-11-06 12:08:46'),
(10, 'cinta', '17', 'Malang', '2023-11-06 12:23:51'),
(11, 'intan', '17', 'Malang', '2023-11-06 15:09:37'),
(12, 'intan', '17', 'Malang', '2023-11-06 15:09:41');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_warga`
--
ALTER TABLE `data_warga`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_warga`
--
ALTER TABLE `data_warga`
  MODIFY `ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
