-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Des 2020 pada 01.44
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teknikelektro`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel1a1`
--

CREATE TABLE `tabel1a1` (
  `id` int(11) NOT NULL,
  `lembaga` varchar(128) NOT NULL,
  `jenis` varchar(128) NOT NULL,
  `lingkup` varchar(64) NOT NULL,
  `tingkat` varchar(54) NOT NULL,
  `masa_berlaku` int(4) NOT NULL,
  `keterangan` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel1a1`
--

INSERT INTO `tabel1a1` (`id`, `lembaga`, `jenis`, `lingkup`, `tingkat`, `masa_berlaku`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'LSP', 'Sertifikasi Profesi', 'Unit', 'Nasional', 2020, 'tes\r\n', '2020-10-31 14:57:18', '2020-10-31 14:57:18'),
(9, 'LSP', 'Sertifikasi Profesi', 'Unit', 'Nasional', 2020, 'tes', '2020-10-31 18:10:29', '0000-00-00 00:00:00'),
(12, 'LSP', 'Sertifikasi Profesi', 'Unit', 'Nasional', 2020, 'tes', '2020-10-31 19:54:27', '0000-00-00 00:00:00'),
(13, 'awda', 'tes 1', 'waddaw', 'dwawd', 2020, 'tes', '2020-10-31 19:54:27', '0000-00-00 00:00:00'),
(14, 'awddaw', 'tes 2', 'wdawd', 'dwdwa', 2020, 'tes', '2020-10-31 19:54:27', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel1a2`
--

CREATE TABLE `tabel1a2` (
  `id` int(11) NOT NULL,
  `lembaga_akreditasi` varchar(128) NOT NULL,
  `prodi` varchar(128) NOT NULL,
  `peringkat` varchar(128) NOT NULL,
  `masa_berlaku` int(4) NOT NULL,
  `keterangan` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel1a2`
--

INSERT INTO `tabel1a2` (`id`, `lembaga_akreditasi`, `prodi`, `peringkat`, `masa_berlaku`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'tes lembaga', 'tesprodi', '3', 2020, 'tes', '2020-11-22 10:26:24', '2020-11-22 10:26:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel1a3`
--

CREATE TABLE `tabel1a3` (
  `id` int(11) NOT NULL,
  `lembaga_audit` varchar(128) NOT NULL,
  `tahun_perolehan` int(4) NOT NULL,
  `opini` varchar(128) NOT NULL,
  `keterangan` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel1a3`
--

INSERT INTO `tabel1a3` (`id`, `lembaga_audit`, `tahun_perolehan`, `opini`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Tes Audit', 2020, 'Tes', 'Tes', '2020-12-10 00:01:33', '2020-12-10 00:01:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel1b`
--

CREATE TABLE `tabel1b` (
  `id` int(11) NOT NULL,
  `peringkat_akreditasi` varchar(64) NOT NULL,
  `s3` int(8) NOT NULL,
  `s2` int(8) NOT NULL,
  `s1` int(8) NOT NULL,
  `sp2` int(8) NOT NULL,
  `sp1` int(8) NOT NULL,
  `profesi` int(8) NOT NULL,
  `s3t` int(8) NOT NULL,
  `s2t` int(8) NOT NULL,
  `d4` int(8) NOT NULL,
  `d3` int(8) NOT NULL,
  `d2` int(8) NOT NULL,
  `d1` int(8) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel1b`
--

INSERT INTO `tabel1b` (`id`, `peringkat_akreditasi`, `s3`, `s2`, `s1`, `sp2`, `sp1`, `profesi`, `s3t`, `s2t`, `d4`, `d3`, `d2`, `d1`, `created_at`, `updated_at`) VALUES
(1, 'Terakreditasi Unggul', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-11-22 11:13:34', '2020-11-22 11:13:34'),
(2, 'Terakreditasi A\r\n', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Terakreditasi Baik Sekali\r\n', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Terakreditasi B\r\n', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Terakreditasi Baik\r\n', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Terakreditasi C\r\n', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Terakreditasi Minimum\r\n', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Tidak Terakreditasi/ Kadaluarsa\r\n', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel1c`
--

CREATE TABLE `tabel1c` (
  `id` int(11) NOT NULL,
  `lembaga_kerjasama` varchar(128) NOT NULL,
  `internasional` int(2) NOT NULL,
  `nasional` int(2) NOT NULL,
  `lokal` int(2) NOT NULL,
  `manfaat` text NOT NULL,
  `bukti` text NOT NULL,
  `masa_berlaku` int(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel1c`
--

INSERT INTO `tabel1c` (`id`, `lembaga_kerjasama`, `internasional`, `nasional`, `lokal`, `manfaat`, `bukti`, `masa_berlaku`, `created_at`, `updated_at`) VALUES
(1, 'tes lembaga', 1, 2, 3, 'manfaat', 'BUKTI', 2020, '2020-11-22 21:08:15', '2020-11-22 21:08:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel2a`
--

CREATE TABLE `tabel2a` (
  `id` int(11) NOT NULL,
  `program` varchar(64) NOT NULL,
  `tahun_akademik` varchar(16) NOT NULL,
  `daya_tampung` int(11) NOT NULL,
  `cama_pendaftar` int(11) NOT NULL,
  `cama_lulus` int(11) NOT NULL,
  `maba_reguler` int(11) NOT NULL,
  `maba_transfer` int(11) NOT NULL,
  `mahasiswa_reguler` int(11) NOT NULL,
  `mahasiswa_transfer` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel2a`
--

INSERT INTO `tabel2a` (`id`, `program`, `tahun_akademik`, `daya_tampung`, `cama_pendaftar`, `cama_lulus`, `maba_reguler`, `maba_transfer`, `mahasiswa_reguler`, `mahasiswa_transfer`, `created_at`, `updated_at`) VALUES
(1, 'Program Doktor/Doktor Terapan/Subspesialis', 'TS-4', 1, 1, 1, 1, 1, 1, 1, '2020-11-22 22:58:33', '2020-11-22 22:58:33'),
(5, 'Program Doktor/Doktor Terapan/Subspesialis', 'TS-3', 0, 0, 0, 0, 0, 0, 0, '2020-11-28 14:04:05', '2020-11-28 14:04:05'),
(6, 'Program Doktor/Doktor Terapan/Subspesialis', 'TS-2', 0, 0, 0, 0, 0, 0, 0, '2020-11-28 14:04:16', '2020-11-28 14:04:16'),
(7, 'Program Doktor/Doktor Terapan/Subspesialis', 'TS-1', 0, 0, 0, 0, 0, 0, 0, '2020-11-28 14:04:26', '2020-11-28 14:04:26'),
(8, 'Program Magister/Magister Terapan/Spesialis', 'TS-4', 0, 0, 0, 0, 0, 0, 0, '2020-11-28 08:08:02', '0000-00-00 00:00:00'),
(9, 'Program Magister/Magister Terapan/Spesialis', 'TS-3', 0, 0, 0, 0, 0, 0, 0, '2020-11-28 08:08:02', '0000-00-00 00:00:00'),
(10, 'Program Magister/Magister Terapan/Spesialis', 'TS-2', 0, 0, 0, 0, 0, 0, 0, '2020-11-28 08:08:02', '0000-00-00 00:00:00'),
(11, 'Program Magister/Magister Terapan/Spesialis', 'TS-1', 0, 0, 0, 0, 0, 0, 0, '2020-11-28 08:08:02', '0000-00-00 00:00:00'),
(12, 'Program Profesi', 'TS-4', 0, 0, 0, 0, 0, 0, 0, '2020-11-28 08:08:53', '0000-00-00 00:00:00'),
(13, 'Program Profesi', 'TS-3', 0, 0, 0, 0, 0, 0, 0, '2020-11-28 08:08:53', '0000-00-00 00:00:00'),
(14, 'Program Profesi', 'TS-2', 0, 0, 0, 0, 0, 0, 0, '2020-11-28 08:08:53', '0000-00-00 00:00:00'),
(15, 'Program Profesi', 'TS-1', 0, 0, 0, 0, 0, 0, 0, '2020-11-28 08:08:53', '0000-00-00 00:00:00'),
(16, 'Program Sarjana', 'TS-4', 0, 0, 0, 0, 0, 0, 0, '2020-11-28 08:09:40', '0000-00-00 00:00:00'),
(17, 'Program Sarjana', 'TS-3', 0, 0, 0, 0, 0, 0, 0, '2020-11-28 08:09:40', '0000-00-00 00:00:00'),
(18, 'Program Sarjana', 'TS-2', 0, 0, 0, 0, 0, 0, 0, '2020-11-28 08:09:40', '0000-00-00 00:00:00'),
(19, 'Program Sarjana', 'TS-1', 0, 0, 0, 0, 0, 0, 0, '2020-11-28 08:09:40', '0000-00-00 00:00:00'),
(20, 'Program Diploma Empat/ Sarjana Terapan', 'TS-4', 0, 0, 0, 0, 0, 0, 0, '2020-11-28 08:10:51', '0000-00-00 00:00:00'),
(21, 'Program Diploma Empat/ Sarjana Terapan', 'TS-3', 0, 0, 0, 0, 0, 0, 0, '2020-11-28 08:10:51', '0000-00-00 00:00:00'),
(22, 'Program Diploma Empat/ Sarjana Terapan', 'TS-2', 0, 0, 0, 0, 0, 0, 0, '2020-11-28 08:10:51', '0000-00-00 00:00:00'),
(23, 'Program Diploma Empat/ Sarjana Terapan', 'TS-1', 0, 0, 0, 0, 0, 0, 0, '2020-11-28 08:10:51', '0000-00-00 00:00:00'),
(24, 'Program Diploma Tiga', 'TS-4', 0, 0, 0, 0, 0, 0, 0, '2020-11-28 08:11:44', '0000-00-00 00:00:00'),
(25, 'Program Diploma Tiga', 'TS-3', 0, 0, 0, 0, 0, 0, 0, '2020-11-28 08:11:44', '0000-00-00 00:00:00'),
(26, 'Program Diploma Tiga', 'TS-2', 0, 0, 0, 0, 0, 0, 0, '2020-11-28 08:11:44', '0000-00-00 00:00:00'),
(27, 'Program Diploma Tiga', 'TS-1', 0, 0, 0, 0, 0, 0, 0, '2020-11-28 08:11:44', '0000-00-00 00:00:00'),
(28, 'Program Diploma Dua', 'TS-4', 0, 0, 0, 0, 0, 0, 0, '2020-11-28 08:12:26', '0000-00-00 00:00:00'),
(29, 'Program Diploma Dua', 'TS-3', 0, 0, 0, 0, 0, 0, 0, '2020-11-28 08:12:26', '0000-00-00 00:00:00'),
(30, 'Program Diploma Dua', 'TS-2', 0, 0, 0, 0, 0, 0, 0, '2020-11-28 08:12:26', '0000-00-00 00:00:00'),
(31, 'Program Diploma Dua', 'TS-1', 0, 0, 0, 0, 0, 0, 0, '2020-11-28 08:12:26', '0000-00-00 00:00:00'),
(32, 'Program Diploma Satu', 'TS-4', 0, 0, 0, 0, 0, 0, 0, '2020-11-28 08:13:20', '0000-00-00 00:00:00'),
(33, 'Program Diploma Satu', 'TS-3', 0, 0, 0, 0, 0, 0, 0, '2020-11-28 08:13:20', '0000-00-00 00:00:00'),
(34, 'Program Diploma Satu', 'TS-2', 0, 0, 0, 0, 0, 0, 0, '2020-11-28 08:13:20', '0000-00-00 00:00:00'),
(35, 'Program Diploma Satu', 'TS-1', 0, 0, 0, 0, 0, 0, 0, '2020-11-28 08:13:20', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel2b`
--

CREATE TABLE `tabel2b` (
  `id` int(11) NOT NULL,
  `fakultas` varchar(128) NOT NULL,
  `ts2` int(11) NOT NULL,
  `ts1` int(11) NOT NULL,
  `ts` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel2b`
--

INSERT INTO `tabel2b` (`id`, `fakultas`, `ts2`, `ts1`, `ts`, `created_at`, `updated_at`) VALUES
(1, 'Teknik', 10, 10, 10, '2020-12-10 00:09:08', '2020-12-10 00:09:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel3a1`
--

CREATE TABLE `tabel3a1` (
  `id` int(11) NOT NULL,
  `unit` varchar(128) NOT NULL,
  `doktor` int(11) NOT NULL,
  `magister` int(11) NOT NULL,
  `profesi` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel3a1`
--

INSERT INTO `tabel3a1` (`id`, `unit`, `doktor`, `magister`, `profesi`, `created_at`, `updated_at`) VALUES
(1, 'Teknik', 10, 10, 10, '2020-12-10 00:10:35', '2020-12-10 00:10:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel3a2`
--

CREATE TABLE `tabel3a2` (
  `id` int(11) NOT NULL,
  `pendidikan` varchar(128) NOT NULL,
  `guru_besar` int(11) NOT NULL,
  `lektor_kepala` int(11) NOT NULL,
  `lektor` int(11) NOT NULL,
  `asisten_ahli` int(11) NOT NULL,
  `tenaga_pengajar` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel3a2`
--

INSERT INTO `tabel3a2` (`id`, `pendidikan`, `guru_besar`, `lektor_kepala`, `lektor`, `asisten_ahli`, `tenaga_pengajar`, `created_at`, `updated_at`) VALUES
(1, 'Doktor/ Doktor Terapan/ Subspesialis', 0, 0, 0, 0, 0, '2020-11-28 14:29:53', '2020-11-28 14:29:53'),
(2, 'Magister/ Magister Terapan/ Spesialis', 0, 0, 0, 0, 0, '2020-11-28 14:30:12', '2020-11-28 14:30:12'),
(3, 'Profesi', 0, 0, 0, 0, 0, '2020-11-28 14:30:26', '2020-11-28 14:30:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel3a3`
--

CREATE TABLE `tabel3a3` (
  `id` int(11) NOT NULL,
  `unit` varchar(128) NOT NULL,
  `jumlah_dosen` int(11) NOT NULL,
  `jumlah_dosen_bersertifikat` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel3a3`
--

INSERT INTO `tabel3a3` (`id`, `unit`, `jumlah_dosen`, `jumlah_dosen_bersertifikat`, `created_at`, `updated_at`) VALUES
(1, 'Teknik', 100, 10, '2020-12-10 00:15:23', '2020-12-10 00:15:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel3a4`
--

CREATE TABLE `tabel3a4` (
  `id` int(11) NOT NULL,
  `pendidikan` varchar(128) NOT NULL,
  `guru_besar` int(11) NOT NULL,
  `lektor_kepala` int(11) NOT NULL,
  `lektor` int(11) NOT NULL,
  `asisten_ahli` int(11) NOT NULL,
  `tenaga_pengajar` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel3a4`
--

INSERT INTO `tabel3a4` (`id`, `pendidikan`, `guru_besar`, `lektor_kepala`, `lektor`, `asisten_ahli`, `tenaga_pengajar`, `created_at`, `updated_at`) VALUES
(1, 'Doktor/ Doktor Terapan/ Subspesialis', 0, 0, 0, 0, 0, '2020-11-28 14:31:12', '2020-11-28 14:31:12'),
(2, 'Magister/ Magister Terapan/ Spesialis', 0, 0, 0, 0, 0, '2020-11-28 14:31:41', '2020-11-28 14:31:41'),
(3, 'Profesi', 0, 0, 0, 0, 0, '2020-11-28 14:32:04', '2020-11-28 14:32:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel3b`
--

CREATE TABLE `tabel3b` (
  `id` int(11) NOT NULL,
  `unit` varchar(128) NOT NULL,
  `jumlah_dosen` int(11) NOT NULL,
  `jumlah_mahasiswa` int(11) NOT NULL,
  `jumlah_mahasiswa_ta` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel3b`
--

INSERT INTO `tabel3b` (`id`, `unit`, `jumlah_dosen`, `jumlah_mahasiswa`, `jumlah_mahasiswa_ta`, `created_at`, `updated_at`) VALUES
(1, 'Teknik', 100, 1000, 200, '2020-12-10 00:18:14', '2020-12-10 00:18:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel3c1`
--

CREATE TABLE `tabel3c1` (
  `id` int(11) NOT NULL,
  `sumber_pembiayaan` varchar(128) NOT NULL,
  `ts2` int(11) NOT NULL,
  `ts1` int(11) NOT NULL,
  `ts` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel3c1`
--

INSERT INTO `tabel3c1` (`id`, `sumber_pembiayaan`, `ts2`, `ts1`, `ts`, `created_at`, `updated_at`) VALUES
(1, 'Perguruan tinggi atau mandiri', 0, 0, 0, '2020-11-28 14:32:51', '2020-11-28 14:32:51'),
(2, 'Lembaga dalam negeri (diluar PT)', 0, 0, 0, '2020-11-28 14:33:06', '2020-11-28 14:33:06'),
(3, 'Lembaga luar negeri', 0, 0, 0, '2020-11-28 14:33:19', '2020-11-28 14:33:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel3c2`
--

CREATE TABLE `tabel3c2` (
  `id` int(11) NOT NULL,
  `sumber_pembiayaan` varchar(128) NOT NULL,
  `ts2` int(11) NOT NULL,
  `ts1` int(11) NOT NULL,
  `ts` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel3c2`
--

INSERT INTO `tabel3c2` (`id`, `sumber_pembiayaan`, `ts2`, `ts1`, `ts`, `created_at`, `updated_at`) VALUES
(1, 'Perguruan tinggi atau mandiri', 0, 0, 0, '2020-11-28 14:35:07', '2020-11-28 14:35:07'),
(2, 'Lembaga dalam negeri (diluar PT)', 0, 0, 0, '2020-11-28 14:35:21', '2020-11-28 14:35:21'),
(3, 'Lembaga luar negeri', 0, 0, 0, '2020-11-28 14:35:35', '2020-11-28 14:35:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel3d`
--

CREATE TABLE `tabel3d` (
  `id` int(11) NOT NULL,
  `nama_dosen` varchar(128) NOT NULL,
  `bidang_keahlian` varchar(128) NOT NULL,
  `rekognisi` varchar(128) NOT NULL,
  `tahun_perolehan` int(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel3d`
--

INSERT INTO `tabel3d` (`id`, `nama_dosen`, `bidang_keahlian`, `rekognisi`, `tahun_perolehan`, `created_at`, `updated_at`) VALUES
(1, 'TES', 'TES', 'TES', 2020, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel4a`
--

CREATE TABLE `tabel4a` (
  `id` int(11) NOT NULL,
  `sumber_dana` varchar(128) NOT NULL,
  `jenis_dana` varchar(128) NOT NULL,
  `ts2` int(32) NOT NULL,
  `ts1` int(32) NOT NULL,
  `ts` int(32) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel4a`
--

INSERT INTO `tabel4a` (`id`, `sumber_dana`, `jenis_dana`, `ts2`, `ts1`, `ts`, `created_at`, `updated_at`) VALUES
(1, 'Internal', 'Pinjaman', 100000000, 100000000, 100000000, '2020-12-10 00:37:49', '2020-12-10 00:37:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel4b`
--

CREATE TABLE `tabel4b` (
  `id` int(11) NOT NULL,
  `jenis_penggunaan` varchar(128) NOT NULL,
  `ts2` int(32) NOT NULL,
  `ts1` int(32) NOT NULL,
  `ts` int(32) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel4b`
--

INSERT INTO `tabel4b` (`id`, `jenis_penggunaan`, `ts2`, `ts1`, `ts`, `created_at`, `updated_at`) VALUES
(1, 'Tes', 100000000, 100000000, 100000000, '2020-12-10 00:39:11', '2020-12-10 00:39:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `role` varchar(32) NOT NULL,
  `foto` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama`, `role`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin Utama', 'admin', 'awdadwdwaw', '2020-10-31 13:32:38', '2020-10-31 13:32:38');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel1a1`
--
ALTER TABLE `tabel1a1`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel1a2`
--
ALTER TABLE `tabel1a2`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel1a3`
--
ALTER TABLE `tabel1a3`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel1b`
--
ALTER TABLE `tabel1b`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel1c`
--
ALTER TABLE `tabel1c`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel2a`
--
ALTER TABLE `tabel2a`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel2b`
--
ALTER TABLE `tabel2b`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel3a1`
--
ALTER TABLE `tabel3a1`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel3a2`
--
ALTER TABLE `tabel3a2`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel3a3`
--
ALTER TABLE `tabel3a3`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel3a4`
--
ALTER TABLE `tabel3a4`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel3b`
--
ALTER TABLE `tabel3b`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel3c1`
--
ALTER TABLE `tabel3c1`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel3c2`
--
ALTER TABLE `tabel3c2`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel3d`
--
ALTER TABLE `tabel3d`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel4a`
--
ALTER TABLE `tabel4a`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel4b`
--
ALTER TABLE `tabel4b`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabel1a1`
--
ALTER TABLE `tabel1a1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tabel1a2`
--
ALTER TABLE `tabel1a2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tabel1a3`
--
ALTER TABLE `tabel1a3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tabel1b`
--
ALTER TABLE `tabel1b`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tabel1c`
--
ALTER TABLE `tabel1c`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tabel2a`
--
ALTER TABLE `tabel2a`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `tabel2b`
--
ALTER TABLE `tabel2b`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tabel3a1`
--
ALTER TABLE `tabel3a1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tabel3a2`
--
ALTER TABLE `tabel3a2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tabel3a3`
--
ALTER TABLE `tabel3a3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tabel3a4`
--
ALTER TABLE `tabel3a4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tabel3b`
--
ALTER TABLE `tabel3b`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tabel3c1`
--
ALTER TABLE `tabel3c1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tabel3c2`
--
ALTER TABLE `tabel3c2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tabel3d`
--
ALTER TABLE `tabel3d`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tabel4a`
--
ALTER TABLE `tabel4a`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tabel4b`
--
ALTER TABLE `tabel4b`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
