-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Mar 2024 pada 11.54
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kas`
--

CREATE TABLE `kas` (
  `id` int(11) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `hp` varchar(30) NOT NULL,
  `sumber` varchar(250) NOT NULL,
  `jumlah` varchar(64) NOT NULL,
  `ket` varchar(10) NOT NULL,
  `waktu` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kaskel`
--

CREATE TABLE `kaskel` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `hp` varchar(30) NOT NULL,
  `tujuan` varchar(250) NOT NULL,
  `penerima` varchar(64) NOT NULL,
  `jumlah` varchar(20) NOT NULL,
  `bidang` varchar(20) NOT NULL,
  `ket` varchar(10) NOT NULL,
  `waktu` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekap`
--

CREATE TABLE `rekap` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `jenis` varchar(10) NOT NULL,
  `ket` varchar(10) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp(),
  `masuk` varchar(64) NOT NULL,
  `keluar` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `rekap`
--

INSERT INTO `rekap` (`id`, `nama`, `keterangan`, `jenis`, `ket`, `tanggal`, `masuk`, `keluar`) VALUES
(4, 'Frindi Mangimbulude', 'Persembahan Ibadah Pelantikan', 'masuk', 'sudah', '2023-08-11 03:19:05', '451000', '0'),
(5, 'Frindi Mangimbulude', 'Aksi 5 Menit', 'masuk', 'sudah', '2023-08-11 03:20:13', '701000', '0'),
(6, 'Frindi Mangimbulude', 'Bayar server aplikasi kas RK BMR 1bln', 'keluar', 'sudah', '2023-08-11 04:51:13', '0', '147000'),
(7, 'Sekertaris', 'Pembuatan Cap panitia', 'keluar', 'sudah', '2023-08-12 01:05:22', '0', '75000'),
(8, 'Yessy N. Mamahit', 'Janji iman', 'masuk', 'sudah', '2023-08-13 05:23:18', '500000', '0'),
(9, 'Yessy N. Mamahit', 'Pembelian map', 'keluar', 'sudah', '2023-08-13 06:08:08', '0', '22500'),
(10, 'Yessy N. Mamahit', 'Pembelian Kertas HVS, Map, dan Tinta print', 'keluar', 'sudah', '2023-08-13 06:10:51', '0', '206500'),
(11, 'Rahel Wowor', 'Janji iman', 'masuk', 'sudah', '2023-08-13 08:44:03', '150000', '0'),
(12, 'Fio salendu', 'Janji iman', 'masuk', 'sudah', '2023-08-14 09:31:07', '200000', '0'),
(13, 'Ditra rantung', 'Janji iman', 'masuk', 'sudah', '2023-08-14 09:31:59', '200000', '0'),
(14, 'Yessy N. Mamahit', 'Pembelian kertas hvs, cover, dan bening serta keperluan lain', 'keluar', 'sudah', '2023-08-16 01:52:59', '0', '358000'),
(15, 'Yesti mantow', 'Janji iman', 'masuk', 'sudah', '2023-08-19 06:18:46', '500000', '0'),
(16, 'Yessy N. Mamahit', 'Konsumsi doa semalaman', 'keluar', 'sudah', '2023-08-19 09:26:39', '0', '200000'),
(17, 'Yessy N. Mamahit', 'Bayar minyak untuk cari dana', 'keluar', 'sudah', '2023-08-19 09:28:04', '0', '200000'),
(18, 'Yessy N. Mamahit', 'Bayar kue untuk dijual cari dana', 'keluar', 'sudah', '2023-08-19 09:29:52', '0', '800000'),
(19, 'Yessy N. Mamahit', 'Penjualan kue beserta modal', 'masuk', 'sudah', '2023-08-20 09:16:32', '1950000', '0'),
(20, 'Yessy N. Mamahit', 'Ekstra derma', 'masuk', 'sudah', '2023-08-20 09:17:20', '890000', '0'),
(21, 'Meyva sembur', 'Janji iman', 'masuk', 'sudah', '2023-08-20 10:12:18', '150000', '0'),
(22, 'Ferlan Wuse', 'Janji iman', 'masuk', 'sudah', '2023-08-20 10:12:50', '200000', '0'),
(23, 'Klif Matulende', 'Janji iman', 'masuk', 'sudah', '2023-08-21 10:15:54', '300000', '0'),
(24, 'vrisilia pandaleke', 'Janji iman', 'masuk', 'sudah', '2023-08-22 04:57:02', '150000', '0'),
(25, 'Pubdokmul', 'Beli canva premium 1bulan', 'keluar', 'sudah', '2023-08-23 03:45:57', '0', '83500'),
(26, 'Maleakhi Ratu', 'Janji iman', 'masuk', 'sudah', '2023-08-25 23:42:30', '300000', '0'),
(27, 'Yessy N. Mamahit', 'Bayar kue untuk dijual cari dana', 'keluar', 'sudah', '2023-08-26 09:58:50', '0', '1500000'),
(28, 'Ibu. Megawati runtunuwu', 'Janji iman', 'masuk', 'sudah', '2023-08-27 05:49:48', '300000', '0'),
(29, 'Josua siwi', 'Janji iman', 'masuk', 'sudah', '2023-08-28 08:07:10', '500000', '0'),
(30, 'Maria mamahit', 'Janji iman', 'masuk', 'sudah', '2023-08-29 05:17:18', '200000', '0'),
(31, 'Yessy N. Mamahit', 'Ekstra jemaat GPdI Biga', 'masuk', 'sudah', '2023-08-30 03:11:02', '214000', '0'),
(32, 'Valvio elroy', 'Membuat ID card panitia', 'keluar', 'sudah', '2023-08-30 07:57:32', '0', '500000'),
(33, 'Robby momongan', 'Donatur', 'masuk', 'sudah', '2023-08-31 20:54:25', '1000000', '0'),
(34, 'Orlando ratu', 'Janji iman', 'masuk', 'sudah', '2023-08-31 20:54:58', '150000', '0'),
(35, 'Putra liuw', 'Janji iman', 'masuk', 'sudah', '2023-08-31 20:55:44', '200000', '0'),
(36, 'Jicko oping', 'Janji iman', 'masuk', 'sudah', '2023-09-01 09:30:03', '1000000', '0'),
(37, 'Mia langi', 'Hasil pencarian dana', 'masuk', 'sudah', '2023-09-02 19:37:01', '3000000', '0'),
(38, 'Frindi Mangimbulude', 'Sebagian uang ekstra dan penjualan kue', 'masuk', 'sudah', '2023-09-04 04:51:50', '7906000', '0'),
(39, 'Indah kawalo', 'Janji iman', 'masuk', 'sudah', '2023-09-04 06:52:22', '200000', '0'),
(40, 'Delanisa lepa', 'Janji iman', 'masuk', 'sudah', '2023-09-05 04:34:31', '200000', '0'),
(41, 'Angelita lepa', 'Janji iman', 'masuk', 'sudah', '2023-09-05 04:35:20', '150000', '0'),
(42, 'Yusti mantow', 'Uang kue', 'masuk', 'sudah', '2023-09-05 10:49:05', '560000', '0'),
(43, 'Wimdi', 'Ekstra GPdI Dumoga', 'masuk', 'sudah', '2023-09-05 10:49:40', '250000', '0'),
(44, 'Valvio elroy', 'Cetak id card, panjar selempang, cetak baliho', 'keluar', 'sudah', '2023-09-05 10:50:33', '0', '2500000'),
(45, 'Hendra supit', 'Janji iman', 'masuk', 'sudah', '2023-09-07 00:22:00', '150000', '0'),
(46, 'Merlyn moonik', 'Janji iman', 'masuk', 'sudah', '2023-09-07 00:22:25', '150000', '0'),
(47, 'Nefkli ratu', 'Sumbangan', 'masuk', 'sudah', '2023-09-07 00:22:57', '50000', '0'),
(48, 'Frindi Mangimbulude', 'Panjar plakat', 'keluar', 'sudah', '2023-09-07 03:31:43', '0', '1650000'),
(49, 'Dellatosa aer', 'Janji iman', 'masuk', 'sudah', '2023-09-07 03:32:42', '200000', '0'),
(50, 'Santika pesak', 'Janji iman', 'masuk', 'sudah', '2023-09-07 19:54:19', '150000', '0'),
(51, 'Wangyou pelealu', 'Janji iman', 'masuk', 'sudah', '2023-09-07 19:55:13', '150000', '0'),
(52, 'Yessy N. Mamahit', 'Ektra jemaat rayon 8 GPdI Elshaddai sinsingon', 'masuk', 'sudah', '2023-09-07 19:56:25', '215000', '0'),
(53, 'Valvio elroy', 'Uang muka plakat', 'keluar', 'sudah', '2023-09-08 00:31:22', '0', '1000000'),
(54, 'Valvio elroy', 'Bayar selempang', 'keluar', 'sudah', '2023-09-08 16:31:24', '0', '1050000'),
(55, 'Reinaldy oping', 'Janji iman', 'masuk', 'sudah', '2023-09-08 20:38:16', '150000', '0'),
(56, 'Frindi Mangimbulude', 'Bayar print, laminating, emplop, dll', 'keluar', 'sudah', '2023-09-09 02:51:52', '0', '162500'),
(57, 'Mia langi', 'Uang permen', 'keluar', 'sudah', '2023-09-09 02:53:00', '0', '100000'),
(58, 'Panitia', 'Isi emplop juri', 'keluar', 'sudah', '2023-09-09 12:18:05', '0', '1250000'),
(59, 'Alfa langi', 'Janji iman', 'masuk', 'sudah', '2023-09-09 12:21:40', '500000', '0'),
(60, 'Moren wungow', 'Janji iman', 'masuk', 'sudah', '2023-09-09 12:23:33', '150000', '0'),
(61, 'Jeri aramana', 'Janji iman', 'masuk', 'sudah', '2023-09-09 12:28:00', '150000', '0'),
(62, 'Mega lumintang', 'Janji iman', 'masuk', 'sudah', '2023-09-09 12:28:24', '150000', '0'),
(63, 'Juan tatimu', 'Janji iman', 'masuk', 'sudah', '2023-09-09 12:28:43', '300000', '0'),
(64, 'Mia langi', 'Sisa uang kue dan ekstra', 'masuk', 'sudah', '2023-09-09 12:37:48', '2131000', '0'),
(65, 'Mia langi', 'Persembahan ibadah pembukaan tes', 'masuk', 'sudah', '2023-09-09 12:41:55', '363000', '0'),
(66, 'Arvi kalalo', 'Janji iman', 'masuk', 'sudah', '2023-09-10 01:35:43', '150000', '0'),
(67, 'Frindi Mangimbulude', 'Ekstra dari kemaat-jemaat', 'masuk', 'sudah', '2023-09-10 02:40:25', '1740000', '0'),
(68, 'Yessy N. Mamahit', 'ekstra di ibadah puasa panitia gabung jemaat rayon 1 GPdI Elshaddai Sinsingon ', 'masuk', 'sudah', '2023-09-10 02:42:36', '364000', '0'),
(69, 'Yessy N. Mamahit', 'ekstra GPdI Yerusalem Sinsingon Barat ', 'masuk', 'sudah', '2023-09-10 02:43:11', '175000', '0'),
(70, 'Yessy N. Mamahit', 'doi kukis GPdI Pusian', 'masuk', 'sudah', '2023-09-10 02:44:01', '225000', '0'),
(71, 'Yessy N. Mamahit', 'ekstra Pelprap GPdI Elshaddai Sinsingon ', 'masuk', 'sudah', '2023-09-10 02:44:34', '106000', '0'),
(72, 'Yessy N. Mamahit', 'Konsumsi', 'keluar', 'sudah', '2023-09-10 02:59:59', '0', '940000'),
(73, 'Yessy N. Mamahit', 'Beli paku untuk baliho', 'keluar', 'sudah', '2023-09-10 03:01:24', '0', '22000'),
(74, 'Yessy N. Mamahit', 'Kayu untuk baliho', 'keluar', 'sudah', '2023-09-10 03:02:33', '0', '100000'),
(75, 'Yessy N. Mamahit', 'Beli perlengkapan', 'keluar', 'sudah', '2023-09-10 03:04:49', '0', '100000'),
(76, 'Yessy N. Mamahit', 'Kuota pubdok', 'keluar', 'sudah', '2023-09-10 03:05:22', '0', '23000'),
(77, 'Yessy N. Mamahit', 'Beli Aqua', 'keluar', 'sudah', '2023-09-10 03:06:02', '0', '78000'),
(78, 'Ibu. Ria runtunuwu', 'Janji iman', 'masuk', 'sudah', '2023-09-10 05:25:10', '150000', '0'),
(79, 'Frindi Mangimbulude', 'Pelunasan selempang', 'keluar', 'sudah', '2023-09-11 11:01:18', '0', '880000'),
(80, 'Valvio elroy', 'Beli kain 2 meter', 'keluar', 'sudah', '2023-09-11 11:01:51', '0', '60000'),
(81, 'Valvio elroy', 'Neci kain', 'keluar', 'sudah', '2023-09-11 11:02:30', '0', '30000'),
(82, 'Frindi Mangimbulude', 'Bayar server aplikasi kas RK BMR 1bln', 'keluar', 'sudah', '2023-09-11 11:03:47', '0', '150000'),
(83, 'Valvio elroy', 'Bayar sablon', 'keluar', 'sudah', '2023-09-11 11:04:17', '0', '150000'),
(84, 'Glori lepa ', 'Janji iman', 'masuk', 'sudah', '2023-09-12 08:01:08', '150000', '0'),
(85, 'Feiby korin', 'Janji iman', 'masuk', 'sudah', '2023-09-15 00:07:00', '200000', '0'),
(86, 'Deni umpele', 'Janji iman', 'masuk', 'sudah', '2023-09-15 00:07:33', '200000', '0'),
(87, 'Yessy N. Mamahit', 'Ekstra jemaat rayon 5 GPdI Elshaddai sinsingon', 'masuk', 'sudah', '2023-09-15 00:08:32', '252500', '0'),
(88, 'Yessy N. Mamahit', 'Ekstra jemaat rayon 4 GPdI Elshaddai sinsingon', 'masuk', 'sudah', '2023-09-15 00:09:06', '376000', '0'),
(89, 'Donatur Bpk. Markus Pandeirot', 'Donatur Bpk. Markus Pandeirot', 'masuk', 'sudah', '2023-09-15 00:10:12', '1000000', '0'),
(90, 'Donatur Ibu. Winda Maggie wowor', 'Donatur Ibu. Winda Maggie wowor', 'masuk', 'sudah', '2023-09-15 00:18:40', '500000', '0'),
(91, 'Donatur Bpk. Yansen mokoginta ', 'Donatur Bpk. Yansen mokoginta ', 'masuk', 'sudah', '2023-09-15 00:20:22', '500000', '0'),
(92, 'Yessy N. Mamahit', 'Ektra jemaat rayon 4 GPdI Elshaddai sinsingon', 'masuk', 'sudah', '2023-09-15 00:21:02', '200000', '0'),
(93, 'Niki Palealu', 'Janji iman', 'masuk', 'sudah', '2023-09-15 00:22:33', '200000', '0'),
(94, 'Yessy N. Mamahit', 'Bensin 2 hari cari dana jalan proposal', 'keluar', 'sudah', '2023-09-15 00:23:13', '0', '330000'),
(95, 'Yessy N. Mamahit', 'Panjar lighting', 'keluar', 'sudah', '2023-09-15 00:23:40', '0', '1000000'),
(96, 'Yessy N. Mamahit', 'Bensin antar finalis Service Project', 'keluar', 'sudah', '2023-09-15 00:24:29', '0', '500000'),
(97, 'Yessy N. Mamahit', 'Print proposal', 'keluar', 'sudah', '2023-09-15 21:07:04', '0', '50000'),
(98, 'Yessy N. Mamahit', 'Beli map', 'keluar', 'sudah', '2023-09-15 21:07:34', '0', '50000'),
(102, 'Yessy N. Mamahit', 'Beli bensin jemput finalis Sevice project', 'keluar', 'sudah', '2023-09-18 21:18:29', '0', '350000'),
(103, 'Meke supit', 'Janji iman', 'masuk', 'sudah', '2023-09-18 21:19:05', '150000', '0'),
(104, 'Audi momongan', 'Janji iman', 'masuk', 'sudah', '2023-09-18 21:19:40', '150000', '0'),
(105, 'Stiven ratu', 'Janji iman', 'masuk', 'sudah', '2023-09-18 21:20:42', '150000', '0'),
(106, 'Yessy N. Mamahit', 'ekstra Pelprap GPdI Elshaddai Sinsingon ', 'masuk', 'sudah', '2023-09-18 21:21:20', '100000', '0'),
(107, 'Yessy N. Mamahit', 'Ektra keluarga muda', 'masuk', 'sudah', '2023-09-18 21:21:51', '164000', '0'),
(108, 'Yessy N. Mamahit', 'Ekstra rayon 2 GPdI Elshaddai Sinsingon', 'masuk', 'sudah', '2023-09-18 21:22:29', '234000', '0'),
(109, 'Meidi wowor', 'Janji iman', 'masuk', 'sudah', '2023-09-20 20:02:34', '300000', '0'),
(110, 'Hato pendong', 'Janji iman', 'masuk', 'sudah', '2023-09-21 01:20:35', '150000', '0'),
(111, 'Yessy N. Mamahit', 'Bayar id card', 'keluar', 'sudah', '2023-09-21 09:32:35', '0', '2125000'),
(112, 'Valvio elroy', 'Lunasi plakat', 'keluar', 'sudah', '2023-09-21 10:57:16', '0', '2500000'),
(113, 'Valvio elroy', 'Untuk kemanado ambil selempang, makota, dll', 'keluar', 'sudah', '2023-09-21 10:58:04', '0', '150000'),
(114, 'Yessy N. Mamahit', 'Ekstra rayon 6 GPdI Elshaddai Sinsingon', 'masuk', 'sudah', '2023-09-22 02:24:26', '160000', '0'),
(115, 'Yessy N. Mamahit', 'Ektra rayon 1 GPdI Elshaddai sinsingon', 'masuk', 'sudah', '2023-09-22 02:27:14', '230000', '0'),
(116, 'Yessy N. Mamahit', 'Ekstra rayon 2 GPdI Elshaddai Sinsingon', 'masuk', 'sudah', '2023-09-22 02:27:49', '165000', '0'),
(117, 'Yessy N. Mamahit', 'Bayar id card', 'keluar', 'sudah', '2023-09-22 08:20:10', '0', '750000'),
(118, 'Valvio elroy', 'Pelunasan plakat kayu dan tongkat', 'keluar', 'sudah', '2023-09-24 05:32:45', '0', '2550000'),
(119, 'Yessy N. Mamahit', 'Uang bensin jalan surat permohonan ekstra daerah pantura', 'keluar', 'sudah', '2023-09-25 20:13:10', '0', '200000'),
(120, 'Yessy N. Mamahit', 'Lembelian sebagian bahan gala dinner', 'keluar', 'sudah', '2023-09-25 20:16:33', '0', '152500'),
(121, 'Yessy N. Mamahit', 'Beli kertas hvs, pulpen, plastik sampah, tisu, kertas ', 'keluar', 'sudah', '2023-09-25 20:17:44', '0', '339500'),
(122, 'Yessy N. Mamahit', 'Bahan untuk cari dana', 'keluar', 'sudah', '2023-09-25 20:18:26', '0', '98500'),
(123, 'Yessy N. Mamahit', 'Doi bensin keperluan karantina', 'keluar', 'sudah', '2023-09-25 20:19:47', '0', '100000'),
(124, 'Yessy N. Mamahit', 'Perbaikan musik', 'keluar', 'sudah', '2023-09-25 20:20:28', '0', '3000000'),
(125, 'Yessy N. Mamahit', 'Kayu for baliho', 'keluar', 'sudah', '2023-09-25 20:21:05', '0', '100000'),
(126, 'Yessy N. Mamahit', 'Kertas pembungkus meja', 'keluar', 'sudah', '2023-09-25 20:22:07', '0', '6000'),
(127, 'Yessy N. Mamahit', 'Bensin antar jemput fonalis', 'keluar', 'sudah', '2023-09-25 20:22:42', '0', '39000'),
(128, 'Ibu. Anita langoi', 'Janji iman', 'masuk', 'sudah', '2023-09-25 20:23:15', '150000', '0'),
(129, 'Yessy N. Mamahit', 'Ekstra part 3 GPdI Elshaddai sinsingon', 'masuk', 'sudah', '2023-09-25 20:23:58', '712000', '0'),
(130, 'Beni ratu', 'Janji iman', 'masuk', 'sudah', '2023-09-25 20:24:13', '150000', '0'),
(131, 'Rivo pesak', 'Tambahan beli id card', 'keluar', 'sudah', '2023-09-25 20:24:41', '0', '150000'),
(132, 'Rivo pesak', 'Janji iman', 'masuk', 'sudah', '2023-09-25 20:24:54', '150000', '0'),
(134, 'Valvio elroy', 'Beli mahkota', 'keluar', 'sudah', '2023-09-26 10:36:04', '0', '320000'),
(135, 'Valvio elroy', 'Ongkos kirim plakat kayu dan tongkat di taksi', 'keluar', 'sudah', '2023-09-26 10:37:33', '0', '100000'),
(136, 'Yessy N. Mamahit', 'Beli Aqua', 'keluar', 'sudah', '2023-09-26 23:24:18', '0', '50000'),
(137, 'Yessy N. Mamahit', 'Laminating nomor peserta', 'keluar', 'sudah', '2023-09-26 23:24:51', '0', '57000'),
(138, 'Yessy N. Mamahit', 'Obat-obatan', 'keluar', 'sudah', '2023-09-26 23:25:20', '0', '165000'),
(139, 'Yessy N. Mamahit', 'Beli kukis dan aqua botol', 'keluar', 'sudah', '2023-09-26 23:25:53', '0', '70000'),
(140, 'Yessy N. Mamahit', 'Untuk pemateri', 'keluar', 'sudah', '2023-09-26 23:26:16', '0', '1000000'),
(141, 'Yessy N. Mamahit', 'Beli bensin untuk antar jemput peserta', 'keluar', 'sudah', '2023-09-26 23:26:50', '0', '39000'),
(142, 'Yessy N. Mamahit', 'Kukis untuk finalis', 'keluar', 'sudah', '2023-09-26 23:27:21', '0', '300000'),
(143, 'Yessy N. Mamahit', 'Beli gula, kopi, teh, dll', 'keluar', 'sudah', '2023-09-26 23:27:53', '0', '41000'),
(144, 'Donatur Natalia Rorimpandey', 'Donatur Natalia Rorimpandey', 'masuk', 'sudah', '2023-09-26 23:28:42', '500000', '0'),
(145, 'Yessy N. Mamahit', 'Ekstra GPdI Inobonto', 'masuk', 'sudah', '2023-09-26 23:29:16', '270000', '0'),
(146, 'Yessy N. Mamahit', 'Derma ibadah pembukaan', 'masuk', 'sudah', '2023-09-26 23:29:46', '264000', '0'),
(147, 'Yessy N. Mamahit', 'Derma ibadah karantina', 'masuk', 'sudah', '2023-09-26 23:30:32', '78000', '0'),
(148, 'Frindi Mangimbulude', 'Persembahan KKR 1', 'masuk', 'sudah', '2023-09-27 11:43:55', '1024000', '0'),
(149, 'Frindi Mangimbulude', 'Untuk pembicara KKR 1', 'keluar', 'sudah', '2023-09-27 11:44:43', '0', '1500000'),
(150, 'Yessy N. Mamahit', 'Beli baterai musik', 'keluar', 'sudah', '2023-09-27 20:28:23', '0', '17000'),
(151, 'Yessy N. Mamahit', 'Konsumsi gala dinner', 'keluar', 'sudah', '2023-09-27 20:28:45', '0', '500000'),
(152, 'Yessy N. Mamahit', 'Pembicara ', 'keluar', 'sudah', '2023-09-27 20:29:03', '0', '1000000'),
(153, 'Yessy N. Mamahit', 'Ekstra ibadah pagi karantina', 'masuk', 'sudah', '2023-09-27 20:29:33', '69000', '0'),
(154, 'Yessy N. Mamahit', 'Doi kukis manembo', 'masuk', 'sudah', '2023-09-27 20:29:58', '625000', '0'),
(155, 'Swingli tulangow', 'Janji iman', 'masuk', 'sudah', '2023-09-27 20:30:58', '300000', '0'),
(156, 'Friska mokoginta', 'Janji iman', 'masuk', 'sudah', '2023-09-27 20:31:47', '200000', '0'),
(157, 'Rivan ratu', 'Janji iman', 'masuk', 'sudah', '2023-09-27 20:32:10', '150000', '0'),
(158, 'Wimdi rorimpandey', 'Janji iman', 'masuk', 'sudah', '2023-09-27 21:20:41', '500000', '0'),
(159, 'Elri umboh', 'Janji iman', 'masuk', 'sudah', '2023-09-27 21:21:02', '100000', '0'),
(160, 'Yusti mantow', 'Bayar baliho', 'keluar', 'sudah', '2023-09-27 23:40:01', '0', '840000'),
(161, 'Yusti mantow', 'Bayar baliho', 'keluar', 'sudah', '2023-09-27 23:42:44', '0', '780000'),
(162, 'Mia langi', 'Beli peniti, tisu, dll', 'keluar', 'sudah', '2023-09-28 04:29:54', '0', '29000'),
(163, 'Checi ratu', 'Janji iman', 'masuk', 'sudah', '2023-09-28 04:32:22', '250000', '0'),
(164, 'Gabriela pandeirot', 'Janji iman', 'masuk', 'sudah', '2023-09-28 04:32:51', '150000', '0'),
(165, 'Frindi Mangimbulude', 'Beli memori', 'keluar', 'sudah', '2023-09-28 04:33:20', '0', '250000'),
(166, 'Frindi Mangimbulude', 'Beli bensin ambil plakat', 'keluar', 'sudah', '2023-09-28 04:34:54', '0', '100000'),
(167, 'Frindi Mangimbulude', 'Persembahan Ibadah pagi hari ke 3', 'masuk', 'sudah', '2023-09-28 04:37:41', '85000', '0'),
(168, 'Frindi Mangimbulude', 'Persembahan KKR Malam 2', 'masuk', 'sudah', '2023-09-29 02:58:20', '1067000', '0'),
(169, 'Frindi Mangimbulude', 'Ke pembicara', 'keluar', 'sudah', '2023-09-29 02:58:43', '0', '1500000'),
(170, 'Frindi Mangimbulude', 'Beli map', 'keluar', 'sudah', '2023-09-29 10:06:01', '0', '50000'),
(171, 'Frindi Mangimbulude', 'Beli susu untuk peserta', 'keluar', 'sudah', '2023-09-29 10:07:18', '0', '70000'),
(172, 'Frindi Mangimbulude', 'Persembahan Ibadah Grand final', 'masuk', 'sudah', '2023-09-29 14:09:40', '1147000', '0'),
(173, 'Kesehatan', 'Minyak kayu pitih dll', 'keluar', 'sudah', '2023-09-29 15:46:05', '0', '206000'),
(174, 'Kristina Malonda', 'Janji iman', 'masuk', 'sudah', '2023-09-30 02:24:56', '150000', '0'),
(175, 'Mikha palealu', 'Janji iman', 'masuk', 'sudah', '2023-09-30 02:25:27', '150000', '0'),
(176, 'Aril sinaulan', 'Janji iman', 'masuk', 'sudah', '2023-09-30 02:25:47', '150000', '0'),
(177, 'Risto selah', 'Janji iman', 'masuk', 'sudah', '2023-09-30 02:26:04', '150000', '0'),
(178, 'Geral wongkar', 'Janji iman', 'masuk', 'sudah', '2023-09-30 02:26:25', '150000', '0'),
(179, 'Donatur Bpk. Pdt. Yani Tuuk', 'Sumbangan', 'masuk', 'sudah', '2023-09-30 02:27:14', '1000000', '0'),
(180, 'Yessy N. Mamahit', 'Beli paku tindis', 'keluar', 'sudah', '2023-09-30 03:03:38', '0', '25000'),
(181, 'Yessy N. Mamahit', 'Beli kulis', 'keluar', 'sudah', '2023-09-30 03:03:55', '0', '50000'),
(182, 'Yessy N. Mamahit', 'Beli perlengkapan', 'keluar', 'sudah', '2023-09-30 03:04:26', '0', '218000'),
(183, 'Yessy N. Mamahit', 'Untuk pemateri', 'keluar', 'sudah', '2023-09-30 03:04:45', '0', '300000'),
(184, 'Yessy N. Mamahit', 'Konsumsi', 'keluar', 'sudah', '2023-09-30 03:05:35', '0', '200000'),
(185, 'Yessy N. Mamahit', 'Kopi, gula dll', 'keluar', 'sudah', '2023-09-30 03:05:58', '0', '170000'),
(186, 'Yessy N. Mamahit', 'Beli bensin', 'keluar', 'sudah', '2023-09-30 03:06:32', '0', '29000'),
(187, 'Yessy N. Mamahit', 'Beli kertas kado, susu, dll', 'keluar', 'sudah', '2023-09-30 03:10:09', '0', '24000'),
(188, 'Yessy N. Mamahit', 'Beli kukis', 'keluar', 'sudah', '2023-09-30 03:10:49', '0', '960000'),
(189, 'Yessy N. Mamahit', 'Beli vitamin', 'keluar', 'sudah', '2023-09-30 03:11:06', '0', '281000'),
(190, 'Yessy N. Mamahit', 'Sebagian  untuk pembicara dan juri', 'keluar', 'sudah', '2023-09-30 03:12:01', '0', '1000000'),
(191, 'Frindi Mangimbulude', 'Sebagian untuk juri', 'keluar', 'sudah', '2023-09-30 03:18:10', '0', '1200000'),
(192, 'Yessy N. Mamahit', 'Penjualan kupon', 'masuk', 'sudah', '2023-09-30 10:17:43', '8445000', '0'),
(193, 'Yessy N. Mamahit', 'Beli hadiah, beras 50kg', 'keluar', 'sudah', '2023-09-30 10:18:48', '0', '650000'),
(194, 'Yessy N. Mamahit', 'Beli hadiah, dispenser', 'keluar', 'sudah', '2023-09-30 10:19:14', '0', '275000'),
(195, 'Yessy N. Mamahit', 'Beli hadiah, setrika', 'keluar', 'sudah', '2023-09-30 10:19:41', '0', '155000'),
(196, 'Yessy N. Mamahit', 'Beli aqua', 'keluar', 'sudah', '2023-09-30 10:20:09', '0', '30000'),
(197, 'Yessy N. Mamahit', 'Bensin antar pulang sebagian finalis', 'keluar', 'sudah', '2023-09-30 10:20:33', '0', '250000'),
(199, 'Yessy N. Mamahit', 'Sewa kamera selama karantina', 'keluar', 'sudah', '2023-10-01 03:38:27', '0', '400000'),
(200, 'Yusti mantow', 'Pelunasan lighting', 'keluar', 'sudah', '2023-10-01 03:39:02', '0', '3000000'),
(201, 'Sheren tombeng', 'Janji iman', 'masuk', 'sudah', '2023-10-01 06:36:05', '250000', '0'),
(202, 'Mathew langoi', 'Janji iman', 'masuk', 'sudah', '2023-10-01 07:56:35', '150000', '0'),
(203, 'Yessy N. Mamahit', 'Pelunasan kayu untuk baliho', 'keluar', 'sudah', '2023-10-01 07:57:06', '0', '350000'),
(204, 'Yessy N. Mamahit', 'Sewa kamera GF (Kena cas karena lewat jam)', 'keluar', 'sudah', '2023-10-01 07:57:56', '0', '900000'),
(205, 'Wimdi rorimpandey', 'Perpanjang canva premium', 'keluar', 'sudah', '2023-10-02 07:06:39', '0', '105500'),
(206, 'Yessy N. Mamahit', 'Hasil kantin kecil-kecil panitia orang sinsingon', 'masuk', 'sudah', '2023-10-03 02:38:04', '1927000', '0'),
(207, 'Donatur Cindra Opod', 'Sumbangan', 'masuk', 'sudah', '2023-10-03 02:38:47', '500000', '0'),
(208, 'Yessy N. Mamahit', 'Jual baliho', 'masuk', 'sudah', '2023-10-03 02:39:08', '20000', '0'),
(209, 'Vicky ratu', 'Janji iman', 'masuk', 'sudah', '2023-10-04 22:49:39', '150000', '0'),
(210, 'Arvi purukan', 'Janji iman', 'masuk', 'sudah', '2023-10-06 06:00:18', '300000', '0'),
(211, 'Yessy N. Mamahit', 'Bensin 2 Kendaraan untuk pengantaran tes tertulis & wawancara ke tingkat Provinsi', 'keluar', 'sudah', '2023-10-08 20:41:52', '0', '800000'),
(212, 'Yessy N. Mamahit', 'Aqua gelas', 'keluar', 'sudah', '2023-10-08 20:42:10', '0', '31000'),
(213, 'Frindi Mangimbulude', 'Perpanjang server aplikasi kas bulan oktober', 'keluar', 'sudah', '2023-10-08 22:39:34', '0', '149000'),
(214, 'Valvio elroy', 'Tambah selempang', 'keluar', 'sudah', '2023-10-08 22:39:57', '0', '70000'),
(215, 'Yessy N. Mamahit', 'Ekstra jemaat yerusalem sinsingon barat', 'masuk', 'sudah', '2023-10-12 08:01:40', '200000', '0'),
(216, 'Frindi Mangimbulude', 'Server aplikasi kas RK BMR bulan november', 'keluar', 'sudah', '2023-11-02 01:54:09', '0', '149000'),
(217, 'Yessy N. Mamahit', 'Kain batik finalis 2 orang', 'keluar', 'sudah', '2023-11-02 01:54:43', '0', '510000'),
(218, 'Yessy N. Mamahit', 'Bensin dan uang makan kegiatan roadshow part 1 ', 'keluar', 'sudah', '2023-11-02 01:55:39', '0', '560000'),
(219, 'Yessy N. Mamahit', 'Bayar bensin', 'keluar', 'sudah', '2023-11-18 03:07:05', '0', '350000'),
(220, 'Yessy N. Mamahit', 'Makeup dan hairdo 2 orang', 'keluar', 'sudah', '2023-11-18 03:08:04', '0', '350000'),
(221, 'Yessy N. Mamahit', 'Biaya makan peserta', 'keluar', 'sudah', '2023-11-18 03:08:41', '0', '122000'),
(222, 'Yessy N. Mamahit', 'Isi bensin + driver', 'keluar', 'sudah', '2023-11-21 00:10:06', '0', '550000'),
(223, 'Yessy N. Mamahit', 'Makan malam finalis dan official', 'keluar', 'sudah', '2023-11-21 00:11:17', '0', '117000'),
(224, 'Yessy N. Mamahit', 'Makan pagi finalis dan official', 'keluar', 'sudah', '2023-11-21 00:12:03', '0', '160000'),
(225, 'Yessy N. Mamahit', 'Makan siang finalis dan official', 'keluar', 'sudah', '2023-11-21 00:12:39', '0', '172000'),
(226, 'Yessy N. Mamahit', 'Makan malam finalis dan official', 'keluar', 'sudah', '2023-11-21 00:13:05', '0', '107000'),
(227, 'Kalvin raintung', 'Janji iman', 'masuk', 'sudah', '2023-12-04 00:51:18', '300000', '0'),
(228, 'Keren tampi', 'Janji iman', 'masuk', 'sudah', '2023-12-04 00:52:18', '150000', '0'),
(229, 'Yessy N. Mamahit', 'Transportasi kegiatan talent show', 'keluar', 'sudah', '2023-12-05 20:49:31', '0', '222000'),
(230, 'Yessy N. Mamahit', 'Makan finalis dan official selama talent show', 'keluar', 'sudah', '2023-12-05 20:50:28', '0', '745000'),
(231, 'Yessy N. Mamahit', 'Maklom finalis putri', 'keluar', 'sudah', '2023-12-13 07:26:04', '0', '360000'),
(232, 'Yessy N. Mamahit', 'Maklom finalis putra', 'keluar', 'sudah', '2023-12-14 21:42:34', '0', '210000'),
(233, 'Yessy N. Mamahit', 'Beli susu dan makanan ringan untuk finalis dan keperluan lain', 'keluar', 'belum', '2023-12-24 21:21:40', '0', '186500'),
(234, 'Yessy N. Mamahit', 'Aqua, tisu, dll', 'keluar', 'sudah', '2023-12-24 21:22:21', '0', '90000'),
(235, 'Yessy N. Mamahit', 'Makan siang', 'keluar', 'sudah', '2023-12-24 21:22:45', '0', '200000'),
(236, 'Yessy N. Mamahit', 'Kendaraan dan bensin', 'keluar', 'sudah', '2023-12-24 21:23:23', '0', '600000'),
(237, 'Yessy N. Mamahit', 'Beli voting', 'keluar', 'sudah', '2023-12-24 21:24:17', '0', '500000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user` varchar(128) NOT NULL,
  `pass` varchar(128) NOT NULL,
  `role` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `user`, `pass`, `role`) VALUES
(1, 'user', 'user', 'user'),
(2, 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kas`
--
ALTER TABLE `kas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kaskel`
--
ALTER TABLE `kaskel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rekap`
--
ALTER TABLE `rekap`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kas`
--
ALTER TABLE `kas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kaskel`
--
ALTER TABLE `kaskel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `rekap`
--
ALTER TABLE `rekap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=238;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
