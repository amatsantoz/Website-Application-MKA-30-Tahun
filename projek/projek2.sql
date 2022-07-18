-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Okt 2019 pada 08.50
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projek2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dataform`
--

CREATE TABLE `dataform` (
  `no` int(50) NOT NULL,
  `nopeg` int(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `subject` varchar(300) NOT NULL,
  `message` mediumtext NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dataform`
--

INSERT INTO `dataform` (`no`, `nopeg`, `unit`, `subject`, `message`, `date`) VALUES
(1, 23234, 'Suneo', 'ttyffd', 'dsffds', '03-10-2019'),
(2, 23234, 'YTR', 'dfdweq', 'ghfgsdfc  ffdsqw', '03-10-2019'),
(3, 23234, 'tamu', 'sadq', 'yhfgvb vg', '03-10-2019');

-- --------------------------------------------------------

--
-- Struktur dari tabel `unit`
--

CREATE TABLE `unit` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `PIC` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `unit`
--

INSERT INTO `unit` (`id`, `nama`, `PIC`, `email`) VALUES
(1, 'TRE', 'Dimasqw', 'aa@gmail.com'),
(2, 'WEF', 'Ervin', 'asjsj@gmail.com'),
(3, 'YTR', 'Gilang', 'gil@gmail.com'),
(4, 'Suneo', 'Dimas', 'ssas@gmail'),
(5, 'tamu', 'Tamurrq', 'tamu@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dataform`
--
ALTER TABLE `dataform`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dataform`
--
ALTER TABLE `dataform`
  MODIFY `no` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `unit`
--
ALTER TABLE `unit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
