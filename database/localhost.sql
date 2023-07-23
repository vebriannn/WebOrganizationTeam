-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 23 Jul 2023 pada 06.29
-- Versi server: 10.5.20-MariaDB
-- Versi PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id20491357_db_gemilang`
--
CREATE DATABASE IF NOT EXISTS `id20491357_db_gemilang` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id20491357_db_gemilang`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `nama_user` varchar(100) NOT NULL,
  `email_user` varchar(100) NOT NULL,
  `username_user` varchar(100) NOT NULL,
  `password_user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`nama_user`, `email_user`, `username_user`, `password_user`) VALUES
('vebriannn', '', 'yanns code', '$2y$10$KDapbA1KPX3pPxQjGRMSm.AYg6wUkzG1wTs6PaSiIsYpj9blhrs3q'),
('nopal', '', 'nopal', '$2y$10$SdPqVjAtbKGPtIox/m6nr.5jBbtbL6TfW8FBXv13q6g.N6qadoOxa'),
('risma cornella', '', 'rismaa13', '$2y$10$qcaT1TXzD.woIgsOIu6sxuvzXOq0/.BmCIV8UacW5Jr7VyRDkTTGm'),
('rafli rizki', '', 'rafli123', '$2y$10$H/a8F8nLLARcqYNn7EppI.Vbs7/8/q6HSXEyzuMrs83NJgSSj2Wlm'),
('nikola', '', 'nikola', '$2y$10$xRVpEv/P5veCchQPnSNUCuEzL496GaClgA0jrhJyHGOMBTNoFG.hm');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
