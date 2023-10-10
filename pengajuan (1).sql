-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jul 2020 pada 02.01
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengajuan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `user` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`user`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `peminatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id`, `nip`, `nama`, `peminatan`) VALUES
(1, '12345', 'Ansari, S.Kom', 'Rekayasa Perangkat Lunak'),
(2, '13020150062', 'Desrial Adi Rahmadi S.Kom', 'Rekayasa Perangkat Lunak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan_judul`
--

CREATE TABLE `pengajuan_judul` (
  `id` int(11) NOT NULL,
  `stambuk` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `sks` int(11) NOT NULL,
  `peminatan` varchar(30) NOT NULL,
  `hp` varchar(15) DEFAULT NULL,
  `judul1` text NOT NULL,
  `judul2` text,
  `judul3` text,
  `pembimbing1` varchar(50) DEFAULT NULL,
  `pembimbing2` varchar(50) DEFAULT NULL,
  `status` varchar(20) NOT NULL,
  `tanggal_pengajuan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tanggal_approve` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `kode` varchar(20) NOT NULL,
  `diterima` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengajuan_judul`
--

INSERT INTO `pengajuan_judul` (`id`, `stambuk`, `nama`, `sks`, `peminatan`, `hp`, `judul1`, `judul2`, `judul3`, `pembimbing1`, `pembimbing2`, `status`, `tanggal_pengajuan`, `tanggal_approve`, `kode`, `diterima`) VALUES
(9, '13020150046', 'Ansari', 0, '', NULL, 'SPK Olimpiade MIPA SD di SDN 2 Melayu dengan Metode SAW', 'Aplikasi Pengeloalaan Data Kos', 'Sistem Pemilihan SIswa Penerima Beasiswa Tidak Mampu', 'Pak Dirga', 'Ibu Lilis', 'lolos', '2020-02-03 11:36:03', '2020-02-03 11:52:18', 'Ansari33', 'SPK Olimpiade MIPA SD di SDN 2 Melayu dengan Metode SAW'),
(10, 'stambuk saya', 'Aduhai', 124, 'Rekayasa Perangkat Lunak', NULL, 'ts1', 'tes2', 'tes3', 'kk', 'nn', 'ditolak', '2020-02-08 15:49:23', '2020-02-10 12:44:17', '333', NULL),
(11, '123', 'Baru', 123, 'RPL', NULL, 'dgrdg2', 'jpojp09', 'mlml0', 'joj', 'joj', 'lolos', '2020-02-08 15:56:19', '2020-02-08 16:08:29', 'jojo', 'jpojp09'),
(13, '13020150046kjkjn', 'nkklkl', 899, 'hhiu', NULL, 'ihiuhi', 'hiuhuihui', 'hibiubi', 'buibiubiu', 'buibiubiu', 'ditolak', '2020-02-08 16:00:09', '2020-02-08 16:01:25', 'buibuib', NULL),
(14, '13020160019', 'Andi Basril', 127, 'Rekayasa Perangkat Lunak', NULL, 'Siiistem', 'Rekayas', 'lol', 'qq', 'qq', 'lolos', '2020-02-08 16:05:40', '2020-02-08 16:06:14', 'qqq', NULL),
(15, '10000', 'tes', 120, 'tes', '0987', 'tes', 'tes', 'tes', 'Ansari, S.Kom', 'Ansari, S.Kom', 'lolos', '2020-02-11 15:15:25', '2020-07-06 12:00:27', 'tes', 'tes'),
(16, '13020150047', 'Pikar', 128, 'RPL', '098765432123', 'KAsir', 'ALat', 'Web', 'pb1', 'pb23', 'lolos', '2020-02-17 13:35:18', '2020-03-15 07:03:51', '00000', 'KAsir'),
(17, '13020150048', 'enal', 123, 'ijojoi', '0987', 'ojoijioj', 'jjojj', 'ojijjoji', 'jjojoj', 'iojojo', 'lolos', '2020-02-17 13:47:52', '2020-02-17 13:49:59', '0000', 'ojoijioj'),
(18, '13020150052', 'fikar', 120, 'jaringan', '1000100', 'komputer', 'laptop', 'wifi', 'tasrif', 'nia', 'lolos', '2020-03-01 06:19:52', '2020-03-01 06:21:28', '1212', 'laptop'),
(19, '13020150000', 'sull', 120, 'jaringan', '1234567765', 'algoritma', 'phpmyadmin', 'Laravel', 'ibu yuli', 'pak ramdan', 'lolos', '2020-07-05 08:16:25', '2020-07-05 08:18:24', '1111', 'Laravel'),
(20, '100100', 'Aneee', 120, 'RPL', '098765432123', 'Ini adalah contoh judul ajuan Pertama', 'Ini adalah contoh judul ajuan Kedua', 'Ini adalah contoh judul ajuan Ketiga', 'Ansari, S.Kom', 'Desrial Adi Rahmadi S.Kom', 'lolos', '2020-07-06 23:40:49', '2020-07-06 23:43:39', '1212', 'Ini adalah contoh judul ajuan Kedua');

-- --------------------------------------------------------

--
-- Struktur dari tabel `seminar`
--

CREATE TABLE `seminar` (
  `id` int(11) NOT NULL,
  `stambuk` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `judul` text NOT NULL,
  `pembimbing1` varchar(50) NOT NULL,
  `pembimbing2` varchar(50) NOT NULL,
  `ketua` varchar(50) DEFAULT NULL,
  `penguji1` varchar(50) DEFAULT NULL,
  `penguji2` varchar(50) DEFAULT NULL,
  `penguji3` varchar(50) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `jadwalp` datetime DEFAULT NULL,
  `jadwalh` datetime DEFAULT NULL,
  `jadwalm` datetime DEFAULT NULL,
  `tipe` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `tempat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `seminar`
--

INSERT INTO `seminar` (`id`, `stambuk`, `nama`, `judul`, `pembimbing1`, `pembimbing2`, `ketua`, `penguji1`, `penguji2`, `penguji3`, `tanggal`, `jadwalp`, `jadwalh`, `jadwalm`, `tipe`, `status`, `tempat`) VALUES
(1, '13020150064', 'Sulfikar S', 'Sistem Manajemen Tugas Akhir FIKOM UMI', 'Pak Tasrif', 'Pak Purnawansyah', 'Pak Tasrif', NULL, 'Pak Ansari', 'Ibu Saya', '2020-02-02 08:13:05', '2020-01-17 08:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'proposal', 'diujikan', ''),
(2, '13020160046', 'M. Ali', 'Aplikasi Pengecekan Sandal Berbasis Andriod', 'Pak 1', 'Ibu 1', 'cc', NULL, 'bb', 'cc', '2020-01-17 15:46:18', '2020-01-17 08:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'proposal', 'diujikan', ''),
(3, '13020160019', 'Fuad Alam Mundari', 'Perbandingan Kinerja Framework Laravel dan CodeIgniter dalam membangun Web', 'aa', 'bb', 'aa', '11', '22', '33', '2020-02-10 13:24:18', '2020-01-30 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'proposal', 'diujikan', ''),
(4, '13020160046', 'M. Ali', 'Aplikasi Pengecekan Sandal Berbasis Andriod', 'adawda', 'dwada', NULL, 'feesfs', 'fsef', 'fsefsf', '2020-01-18 09:41:43', '2020-01-18 02:31:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'hasil', 'diujikan', ''),
(5, '13021060001', 'Putra', 'Sistem Buatan Saya', '1', '2', '1', '11', '22', '33', '2020-01-19 14:57:34', '2020-01-31 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'hasil', 'terjadwal', ''),
(6, '12', 'fff', 'hkjhkk', 'mmm', 'mbm', 'mmm', 'oihohoiho', 'hohoho', 'hoho', '2020-02-02 08:34:44', '2020-01-01 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'proposal', 'terjadwal', ''),
(7, '13020150046', 'Ansari', 'SPK Olimpiade MIPA SD di SDN 2 Melayu dengan Metode SAW', 'Pak Dirga', 'Ibu Lilis', '6R6R6', '122', '2323', '354E5', '2020-02-03 15:23:44', '2020-02-20 23:38:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'proposal', 'diujikan', ''),
(8, '13020150046', 'Ansari', 'SPK Olimpiade MIPA SD di SDN 2 Melayu dengan Metode SAW', 'Pak Dirga', 'Ibu Lilis', 'Pak Dirga', 'Ibu Harlinda', 'Ibu Nia', 'Pak Tasrif', '2020-02-03 15:43:08', '2020-02-04 12:33:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'hasil', 'diujikan', ''),
(9, '13020150046', 'Ansari', 'SPK Olimpiade MIPA SD di SDN 2 Melayu dengan Metode SAW', 'Pak Dirga', 'Ibu Lilis', 'Si Nomor 1', 'Ibu Harlinda', 'Ibu Nia', 'Pak Tasrif', '2020-02-03 16:03:31', '2020-02-05 01:04:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'tutup', 'terjadwal', ''),
(10, '13020150048', 'enal', 'ojoijioj', 'jjojoj', 'iojojo', 'p1', 'png1', 'png2', 'pen3', '2020-02-17 13:52:18', '2020-02-18 22:52:00', NULL, NULL, 'proposal', 'diujikan', ''),
(11, '13020150048', 'enal', 'ojoijioj', 'jjojoj', 'iojojo', 'pp', 'png1', 'png2', 'pen3', '2020-02-17 14:31:24', NULL, '2020-02-28 23:30:00', NULL, 'hasil', 'diujikan', ''),
(12, '13020150048', 'enal', 'ojoijioj', 'jjojoj', 'iojojo', 'tes', 'png1', 'png2', 'pen3', '2020-02-17 14:35:18', NULL, NULL, '2020-07-05 15:56:00', 'tutup', 'diujikan', ''),
(13, '13020150052', 'fikar', 'laptop', 'tasrif', 'nia', 'tasrif', 'eman', 'mardia', 'huzain', '2020-03-01 06:22:23', '2020-11-10 09:10:00', NULL, NULL, 'proposal', 'diujikan', ''),
(14, '13020150052', 'fikar', 'laptop', 'tasrif', 'nia', 'tes', 'eman', 'mardia', 'huzain', '2020-07-05 07:40:19', NULL, '2020-07-05 16:03:00', NULL, 'hasil', 'diujikan', ''),
(15, '13020150052', 'fikar', 'laptop', 'tasrif', 'nia', 'tes', 'eman', 'mardia', 'huzain', '2020-07-05 08:04:52', NULL, NULL, '2020-08-09 22:05:00', 'tutup', 'diujikan', ''),
(16, '13020150000', 'sull', 'Laravel', 'ibu yuli', 'pak ramdan', NULL, NULL, NULL, NULL, '2020-07-05 08:19:15', NULL, NULL, NULL, 'proposal', 'mengajukan', ''),
(17, '10000', 'tes', 'tes', 'Ansari, S.Kom', 'Ansari, S.Kom', 'Ansari, S.Kom', 'Ansari, S.Kom', 'Desrial Adi Rahmadi S.Kom', 'Ansari, S.Kom', '2020-07-06 12:01:54', '2020-07-06 07:09:00', NULL, NULL, 'proposal', 'diujikan', ''),
(18, '10000', 'tes', 'tes', 'Ansari, S.Kom', 'Ansari, S.Kom', NULL, 'Ansari, S.Kom', 'Desrial Adi Rahmadi S.Kom', 'Ansari, S.Kom', '2020-07-06 12:14:05', NULL, '2020-07-06 09:54:00', NULL, 'hasil', 'diujikan', ''),
(19, '10000', 'tes', 'tes', 'Ansari, S.Kom', 'Ansari, S.Kom', 'Desrial Adi Rahmadi S.Kom', 'Ansari, S.Kom', 'Desrial Adi Rahmadi S.Kom', 'Ansari, S.Kom', '2020-07-06 12:56:56', NULL, NULL, '2020-06-29 10:01:00', 'tutup', 'terjadwal', ''),
(20, '100100', 'Aneee', 'Ini adalah contoh judul ajuan Kedua', 'Ansari, S.Kom', 'Desrial Adi Rahmadi S.Kom', 'Ansari, S.Kom', 'Desrial Adi Rahmadi S.Kom', 'Ansari, S.Kom', 'Desrial Adi Rahmadi S.Kom', '2020-07-06 23:46:16', '2020-07-07 08:50:00', NULL, NULL, 'proposal', 'diujikan', 'Tempat 1'),
(21, '100100', 'Aneee', 'Ini adalah contoh judul ajuan Kedua', 'Ansari, S.Kom', 'Desrial Adi Rahmadi S.Kom', NULL, 'Desrial Adi Rahmadi S.Kom', 'Ansari, S.Kom', 'Desrial Adi Rahmadi S.Kom', '2020-07-06 23:51:35', NULL, '2020-08-08 10:56:00', NULL, 'hasil', 'diujikan', 'Dsisni'),
(22, '100100', 'Aneee', 'Ini adalah contoh judul ajuan Kedua', 'Ansari, S.Kom', 'Desrial Adi Rahmadi S.Kom', 'Ansari, S.Kom', 'Ansari, S.Kom', 'Desrial Adi Rahmadi S.Kom', 'Ansari, S.Kom', '2020-07-06 23:55:45', NULL, NULL, '2020-07-07 20:00:00', 'tutup', 'diujikan', 'TEM');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user`);

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengajuan_judul`
--
ALTER TABLE `pengajuan_judul`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `seminar`
--
ALTER TABLE `seminar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pengajuan_judul`
--
ALTER TABLE `pengajuan_judul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `seminar`
--
ALTER TABLE `seminar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
