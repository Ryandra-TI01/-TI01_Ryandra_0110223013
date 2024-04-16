-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Apr 2024 pada 06.01
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpuskesmas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelurahan`
--

CREATE TABLE `kelurahan` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `kec_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kelurahan`
--

INSERT INTO `kelurahan` (`id`, `nama`, `kec_id`) VALUES
(1, 'Tapos', 1),
(2, 'Jatijajar', 2),
(5, 'Cilangkap', 3),
(6, 'Sukamaju Baru', 4),
(7, 'Sukatani', 5),
(9, 'sukmajaya', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `paramedik`
--

CREATE TABLE `paramedik` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `gender` char(1) NOT NULL,
  `tmp_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `kategori` enum('-','perawat','teknisi medis','asisten medis','terapis fisik','terapis okupasi') NOT NULL,
  `telpon` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `unit_kerja_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `paramedik`
--

INSERT INTO `paramedik` (`id`, `nama`, `gender`, `tmp_lahir`, `tgl_lahir`, `kategori`, `telpon`, `alamat`, `unit_kerja_id`) VALUES
(1, '-', '-', '-', '0000-00-00', '', '-', '-', 0),
(2, 'ferguso', 'L', 'Depok', '1985-04-04', 'perawat', '0864272929', 'jakarta timur', 1),
(3, 'santoso', 'L', 'Depok', '1985-04-04', 'teknisi medis', '0864272929', 'Jakarta Timur', 1),
(4, 'Gina', 'L', 'Bekasi', '1990-09-12', 'perawat', '0856789456', 'Jakarta Pusat', 2),
(5, 'Diana', 'P', 'Bandung', '1988-06-20', 'asisten medis', '0812345678', 'Jakarta Selatan', 3),
(6, 'Martin', 'L', 'Surabaya', '1986-03-15', 'terapis fisik', '0876543210', 'Jakarta Barat', 4),
(7, 'Sarah', 'P', 'Semarang', '1995-12-30', 'terapis okupasi', '0823456789', 'Jakarta Utara', 5),
(8, 'John', 'L', 'Yogyakarta', '1983-07-08', 'perawat', '0890123456', 'Bogor', 1),
(9, 'Eva', 'P', 'Malang', '1992-10-25', 'teknisi medis', '0812345678', 'Depok', 2),
(10, 'Randy', 'L', 'Solo', '1991-11-18', 'asisten medis', '0876543210', 'Tangerang', 3),
(11, 'Lina', 'P', 'Makassar', '1989-05-09', 'terapis fisik', '0823456789', 'Bekasi', 4),
(12, 'David', 'P', 'Balikpapan', '1987-02-27', 'terapis okupasi', '0890123456', 'Cikarang', 5),
(13, 'Luthfi Andreas', 'L', 'sumatera barat', '2024-04-23', 'terapis fisik', '123456789', 'depok', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `tmp_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `gender` char(1) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kelurahan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id`, `kode`, `nama`, `tmp_lahir`, `tgl_lahir`, `gender`, `email`, `alamat`, `kelurahan_id`) VALUES
(71, 'MNO', 'Eko', 'Bogor', '1992-04-30', 'L', 'eko@gmail.com', 'Bogor', 5),
(72, 'PQR', 'Fina', 'Depok', '1990-12-15', 'P', 'fina@gmail.com', 'Depok', 1),
(73, 'STU', 'Gita', 'Jakarta', '1988-08-22', 'P', 'gita@gmail.com', 'Jakarta', 2),
(74, 'VWX', 'Hadi', 'Bekasi', '1985-03-18', 'L', 'hadi@gmail.com', 'Bekasi', 3),
(75, 'YZA', 'Ika', 'Tangerang', '1983-11-09', 'P', 'ika@gmail.com', 'Tangerang', 4),
(76, 'BCD', 'Joko', 'Bogor', '1980-06-27', 'L', 'joko@gmail.com', 'Bogor', 5),
(77, 'EFG', 'Karin', 'Depok', '1978-01-03', 'P', 'karin@gmail.com', 'Depok', 1),
(78, 'HIJ', 'Lia', 'Jakarta', '1976-09-19', 'P', 'lia@gmail.com', 'Jakarta', 2),
(79, 'KLM', 'Maman', 'Bekasi', '1973-05-07', 'L', 'maman@gmail.com', 'Bekasi', 3),
(80, 'NOP', 'Nina', 'Tangerang', '1970-02-14', 'P', 'nina@gmail.com', 'Tangerang', 4),
(82, '030', 'Nicky fajelani', 'bogor', '2010-03-03', 'L', 'nicky@gmail.com', 'jl.angklung raya', 6),
(86, '09191', 'eric tohir', 'sumatera barat', '2022-01-01', 'L', 'eric.athaya1705@gmail.com', 'padang', 4),
(87, '21919', 'jokowi dodo', 'sumsel', '2024-04-12', 'L', 'jokowi@gmail.com', 'sumsel', 2),
(88, '030', 'yuking', 'depok', '2024-04-12', 'P', 'imnoye1@outlook.com', 'depok', 6),
(89, 'ID98', 'Luthfi Halmaqan', 'Depok', '2005-05-17', 'L', 'Luthfi@gmail.com', 'Jl kuti', 5);

--
-- Trigger `pasien`
--
DELIMITER $$
CREATE TRIGGER `tambah_periksa` AFTER INSERT ON `pasien` FOR EACH ROW BEGIN
    INSERT INTO periksa (pasien_id, tanggal, berat, tinggi, tensi, keterangan, dokter_id)
    VALUES (NEW.id, 'dd/mm/yyyy', 0, 0, 0, '-', 1);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `periksa`
--

CREATE TABLE `periksa` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `berat` double NOT NULL DEFAULT 0,
  `tinggi` double NOT NULL DEFAULT 0,
  `tensi` varchar(20) NOT NULL DEFAULT '0',
  `keterangan` varchar(100) DEFAULT '-',
  `pasien_id` int(11) NOT NULL,
  `dokter_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `periksa`
--

INSERT INTO `periksa` (`id`, `tanggal`, `berat`, `tinggi`, `tensi`, `keterangan`, `pasien_id`, `dokter_id`) VALUES
(8, '2024-04-04', 79.6, 176, '78', 'gangguan pencernaan', 71, 6),
(9, '2024-04-04', 65, 170, '72', 'sakit kepala parah', 72, 7),
(10, '2024-04-04', 71.8, 178, '74', 'mengalami tekanan darah tinggi', 73, 8),
(11, '2024-04-04', 88.4, 184, '82', 'terkena diabetes', 74, 9),
(12, '2024-04-04', 75.2, 175, '76', 'sakit perut', 75, 10),
(13, '2024-04-04', 83.7, 180, '80', 'infeksi saluran pernapasan', 76, 11),
(14, '2024-04-04', 69.5, 172, '74', 'mengalami migrain', 77, 12),
(15, '2024-04-04', 94, 190, '88', 'patah tulang kaki', 78, 2),
(16, '2024-04-04', 81.1, 178, '78', 'cedera pinggang', 79, 2),
(17, '2024-04-04', 72.9, 176, '74', 'infeksi saluran kemih', 80, 3),
(20, '0000-00-00', 0, 0, '', '', 82, 3),
(23, '2024-04-11', 0, 0, '0', '', 86, 1),
(24, '0000-00-00', 0, 0, '0', '-', 87, 1),
(25, '2024-04-12', 90, 200, '78.0', 'meninggal dunia', 88, 2),
(26, '2024-04-13', 0, 0, '0', '-', 89, 13);

-- --------------------------------------------------------

--
-- Struktur dari tabel `unit_kerja`
--

CREATE TABLE `unit_kerja` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `unit_kerja`
--

INSERT INTO `unit_kerja` (`id`, `nama`) VALUES
(0, '-'),
(1, 'Unit Gawat Darurat'),
(2, 'Unit Rawat Inap'),
(3, 'Unit Rawat Jalan'),
(4, 'Unit Bedah'),
(5, 'Unit Intensive Care Unit');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kec_id` (`kec_id`);

--
-- Indeks untuk tabel `paramedik`
--
ALTER TABLE `paramedik`
  ADD PRIMARY KEY (`id`),
  ADD KEY `unit_kerja_id` (`unit_kerja_id`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pasien_ibfk_1` (`kelurahan_id`);

--
-- Indeks untuk tabel `periksa`
--
ALTER TABLE `periksa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dokter_id` (`dokter_id`),
  ADD KEY `periksa_ibfk_1` (`pasien_id`);

--
-- Indeks untuk tabel `unit_kerja`
--
ALTER TABLE `unit_kerja`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kelurahan`
--
ALTER TABLE `kelurahan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `paramedik`
--
ALTER TABLE `paramedik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT untuk tabel `periksa`
--
ALTER TABLE `periksa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `unit_kerja`
--
ALTER TABLE `unit_kerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `paramedik`
--
ALTER TABLE `paramedik`
  ADD CONSTRAINT `paramedik_ibfk_1` FOREIGN KEY (`unit_kerja_id`) REFERENCES `unit_kerja` (`id`);

--
-- Ketidakleluasaan untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD CONSTRAINT `pasien_ibfk_1` FOREIGN KEY (`kelurahan_id`) REFERENCES `kelurahan` (`kec_id`);

--
-- Ketidakleluasaan untuk tabel `periksa`
--
ALTER TABLE `periksa`
  ADD CONSTRAINT `periksa_ibfk_1` FOREIGN KEY (`pasien_id`) REFERENCES `pasien` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `periksa_ibfk_2` FOREIGN KEY (`dokter_id`) REFERENCES `paramedik` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
