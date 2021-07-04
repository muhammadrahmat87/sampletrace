-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2021 at 08:33 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sampletrace`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` int(12) NOT NULL,
  `nama` varchar(80) NOT NULL,
  `nik` int(20) NOT NULL,
  `section` varchar(100) NOT NULL,
  `hp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `nama`, `nik`, `section`, `hp`) VALUES
(1, 'Muhammad Rahmat', 14011111, 'ABC', '082222222222'),
(2, 'R. Adhi Nugroho', 232321334, 'SSQC', '082222222222'),
(3, 'Ichsan Rezky .P', 0, 'Contoh', 'Contoh'),
(4, 'CONTOH 1', 0, 'Contoh', 'Contoh');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_data`
--

CREATE TABLE `tabel_data` (
  `kode` int(10) NOT NULL,
  `id_reg` varchar(20) NOT NULL,
  `pengirim` varchar(200) NOT NULL DEFAULT '0',
  `no_permintaan` varchar(200) NOT NULL,
  `tgl_surat` date NOT NULL,
  `kategori` enum('Trial','Komersial','Studi Kasus') NOT NULL,
  `urgensi` enum('Normal','High Priority') NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `jumlah` int(11) NOT NULL DEFAULT '0',
  `permintaan` varchar(50) NOT NULL DEFAULT '',
  `tgl_kirim` date NOT NULL,
  `berkas` text,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_data`
--

INSERT INTO `tabel_data` (`kode`, `id_reg`, `pengirim`, `no_permintaan`, `tgl_surat`, `kategori`, `urgensi`, `jenis`, `lokasi`, `jumlah`, `permintaan`, `tgl_kirim`, `berkas`, `status`) VALUES
(99, 'STS2021-00005', 'Ichsan Rezky .P', '120/LSU', '2021-06-05', 'Komersial', 'Normal', 'LSU', 'HNAE', 27, '', '2021-06-17', 'STS2021-00005036 Surat Permintaan Analisa LSU HNAE.xls', 'Menunggu Konfirmasi Batch'),
(109, 'STS2021-00006', 'Muhammad Rahmat', '', '2021-06-06', '', 'Normal', 'LSU', '', 0, '', '2021-06-18', '2021-06-18-Contoh_Import_LSU.xls', 'Menunggu Konfirmasi Batch'),
(110, 'STS2021-00007', 'R. Adhi Nugroho', '', '2021-06-06', '', 'Normal', 'LSU', '', 0, '', '2021-06-18', '2021-06-18-Contoh.xlsx', 'Menunggu Konfirmasi Batch'),
(114, 'STS2021-00008', 'CONTOH 1', '', '2021-06-14', '', 'Normal', 'LSU', '', 0, '', '2021-06-21', NULL, 'Sample Diterima Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_log`
--

CREATE TABLE `tabel_log` (
  `log_id` int(11) NOT NULL,
  `log_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `log_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `log_user` varchar(255) DEFAULT NULL,
  `log_tipe` int(11) DEFAULT NULL,
  `log_desc` varchar(255) DEFAULT NULL,
  `log_location` varchar(50) DEFAULT NULL,
  `log_file` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_log`
--

INSERT INTO `tabel_log` (`log_id`, `log_date`, `log_time`, `log_user`, `log_tipe`, `log_desc`, `log_location`, `log_file`) VALUES
(467, '2021-06-05 03:49:54', '2021-06-05 03:49:54', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(468, '2021-06-07 01:12:43', '2021-06-07 01:12:43', 'Admin', 0, 'Login Aplikasi ', 'Login', ''),
(469, '2021-06-07 01:48:12', '2021-06-07 01:48:12', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(470, '2021-06-07 04:21:23', '2021-06-07 04:21:23', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(471, '2021-06-07 07:12:02', '2021-06-07 07:12:02', 'Admin', 0, 'Login Aplikasi ', 'Login', ''),
(472, '2021-06-07 07:12:09', '2021-06-07 07:12:09', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(473, '2021-06-07 14:47:57', '2021-06-07 14:47:57', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(474, '2021-06-07 15:08:10', '2021-06-07 15:08:10', 'Rahmat STS', 2, 'Menambahkan Trial', 'Data', ''),
(475, '2021-06-07 22:58:57', '2021-06-07 22:58:57', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(476, '2021-06-08 00:07:13', '2021-06-08 00:07:13', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(477, '2021-06-09 00:29:31', '2021-06-09 00:29:31', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(478, '2021-06-09 03:29:37', '2021-06-09 03:29:37', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(479, '2021-06-09 04:48:06', '2021-06-09 04:48:06', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(480, '2021-06-09 04:48:25', '2021-06-09 04:48:25', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(481, '2021-06-09 07:07:25', '2021-06-09 07:07:25', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(482, '2021-06-09 07:07:46', '2021-06-09 07:07:46', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(483, '2021-06-09 07:07:46', '2021-06-09 07:07:46', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(484, '2021-06-09 07:11:16', '2021-06-09 07:11:16', 'Rahmat STS', 2, 'Menambahkan Trial', 'Data', ''),
(485, '2021-06-09 07:13:04', '2021-06-09 07:13:04', 'Rahmat STS', 2, 'Menambahkan Trial', 'Data', ''),
(486, '2021-06-09 07:41:06', '2021-06-09 07:41:06', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(487, '2021-06-09 08:23:45', '2021-06-09 08:23:45', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(488, '2021-06-09 12:32:41', '2021-06-09 12:32:41', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(489, '2021-06-10 00:09:47', '2021-06-10 00:09:47', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(490, '2021-06-10 01:07:18', '2021-06-10 01:07:18', 'Rahmat STS', 2, 'Menambahkan Trial', 'Data', ''),
(491, '2021-06-10 01:07:56', '2021-06-10 01:07:56', 'Rahmat STS', 2, 'Menambahkan Trial', 'Data', ''),
(492, '2021-06-10 01:08:02', '2021-06-10 01:08:02', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(493, '2021-06-10 01:08:05', '2021-06-10 01:08:05', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(494, '2021-06-10 01:08:07', '2021-06-10 01:08:07', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(495, '2021-06-10 01:08:13', '2021-06-10 01:08:13', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(496, '2021-06-10 01:08:17', '2021-06-10 01:08:17', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(497, '2021-06-10 01:08:20', '2021-06-10 01:08:20', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(498, '2021-06-10 01:09:05', '2021-06-10 01:09:05', 'Rahmat STS', 2, 'Menambahkan Trial', 'Data', ''),
(499, '2021-06-10 01:10:09', '2021-06-10 01:10:09', 'Rahmat STS', 2, 'Menambahkan Trial', 'Data', ''),
(500, '2021-06-10 01:14:36', '2021-06-10 01:14:36', 'Rahmat STS', 2, 'Menambahkan Trial', 'Data', ''),
(501, '2021-06-10 01:16:57', '2021-06-10 01:16:57', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(502, '2021-06-10 01:21:18', '2021-06-10 01:21:18', 'Rahmat STS', 2, 'Menambahkan Trial', 'Data', ''),
(503, '2021-06-10 01:21:24', '2021-06-10 01:21:24', 'Rahmat STS', 2, 'Menambahkan Trial', 'Data', ''),
(504, '2021-06-10 01:26:52', '2021-06-10 01:26:52', 'Rahmat STS', 2, 'Menambahkan Trial', 'Data', ''),
(505, '2021-06-10 01:27:39', '2021-06-10 01:27:39', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(506, '2021-06-10 01:27:42', '2021-06-10 01:27:42', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(507, '2021-06-10 01:27:44', '2021-06-10 01:27:44', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(508, '2021-06-10 01:27:52', '2021-06-10 01:27:52', 'Rahmat STS', 2, 'Menambahkan Trial', 'Data', ''),
(509, '2021-06-10 01:28:01', '2021-06-10 01:28:01', 'Rahmat STS', 2, 'Menambahkan Trial', 'Data', ''),
(510, '2021-06-10 01:29:27', '2021-06-10 01:29:27', 'Rahmat STS', 2, 'Menambahkan Trial', 'Data', ''),
(511, '2021-06-10 01:29:32', '2021-06-10 01:29:32', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(512, '2021-06-10 01:31:31', '2021-06-10 01:31:31', 'Rahmat STS', 2, 'Mengupdate Data Trial', 'All data', ''),
(513, '2021-06-10 01:31:42', '2021-06-10 01:31:42', 'Rahmat STS', 2, 'Mengupdate Data Trial', 'All data', ''),
(514, '2021-06-10 01:34:49', '2021-06-10 01:34:49', 'Rahmat STS', 2, 'Mengupdate Data Trial', 'All data', ''),
(515, '2021-06-10 01:35:02', '2021-06-10 01:35:02', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(516, '2021-06-10 01:35:04', '2021-06-10 01:35:04', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(517, '2021-06-10 01:35:06', '2021-06-10 01:35:06', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(518, '2021-06-10 01:52:25', '2021-06-10 01:52:25', 'Rahmat STS', 2, 'Mengupdate Data Trial', 'All data', ''),
(519, '2021-06-10 01:53:40', '2021-06-10 01:53:40', 'Rahmat STS', 2, 'Mengupdate Data Trial', 'All data', ''),
(520, '2021-06-10 01:54:48', '2021-06-10 01:54:48', 'Rahmat STS', 2, 'Mengupdate Data Trial', 'All data', ''),
(521, '2021-06-10 01:54:53', '2021-06-10 01:54:53', 'Rahmat STS', 2, 'Mengupdate Data Trial', 'All data', ''),
(522, '2021-06-10 02:00:52', '2021-06-10 02:00:52', 'Rahmat STS', 2, 'Mengupdate Data Trial', 'All data', ''),
(523, '2021-06-10 02:02:49', '2021-06-10 02:02:49', 'Rahmat STS', 2, 'Mengupdate Data Trial', 'All data', ''),
(524, '2021-06-10 03:39:30', '2021-06-10 03:39:30', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(525, '2021-06-10 03:39:32', '2021-06-10 03:39:32', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(526, '2021-06-10 03:43:01', '2021-06-10 03:43:01', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(527, '2021-06-10 03:45:50', '2021-06-10 03:45:50', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(528, '2021-06-10 07:09:15', '2021-06-10 07:09:15', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(529, '2021-06-10 07:16:40', '2021-06-10 07:16:40', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(530, '2021-06-10 10:34:36', '2021-06-10 10:34:36', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(531, '2021-06-10 12:49:59', '2021-06-10 12:49:59', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(532, '2021-06-10 13:04:01', '2021-06-10 13:04:01', 'Rahmat STS', 2, 'Menambahkan Trial', 'Data', ''),
(533, '2021-06-10 13:55:42', '2021-06-10 13:55:42', 'Rahmat STS', 2, 'Menambahkan Trial', 'Data', ''),
(534, '2021-06-10 13:57:10', '2021-06-10 13:57:10', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(535, '2021-06-10 13:57:11', '2021-06-10 13:57:11', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(536, '2021-06-10 13:57:27', '2021-06-10 13:57:27', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(537, '2021-06-10 13:58:39', '2021-06-10 13:58:39', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(538, '2021-06-11 00:04:39', '2021-06-11 00:04:39', 'Admin', 0, 'Login Aplikasi ', 'Login', ''),
(539, '2021-06-11 00:04:46', '2021-06-11 00:04:46', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(540, '2021-06-11 00:38:55', '2021-06-11 00:38:55', 'Admin', 0, 'Login Aplikasi ', 'Login', ''),
(541, '2021-06-11 00:39:03', '2021-06-11 00:39:03', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(542, '2021-06-11 07:42:38', '2021-06-11 07:42:38', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(543, '2021-06-11 08:20:18', '2021-06-11 08:20:18', 'Rahmat STS', 2, 'Menambahkan Trial', 'Data', ''),
(544, '2021-06-11 08:50:56', '2021-06-11 08:50:56', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(545, '2021-06-11 10:16:33', '2021-06-11 10:16:33', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(546, '2021-06-12 00:39:19', '2021-06-12 00:39:19', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(547, '2021-06-12 02:17:55', '2021-06-12 02:17:55', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(548, '2021-06-13 02:20:37', '2021-06-13 02:20:37', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(549, '2021-06-13 15:29:14', '2021-06-13 15:29:14', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(550, '2021-06-13 15:55:03', '2021-06-13 15:55:03', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(551, '2021-06-14 00:15:40', '2021-06-14 00:15:40', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(552, '2021-06-14 00:24:20', '2021-06-14 00:24:20', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(553, '2021-06-14 01:13:52', '2021-06-14 01:13:52', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(554, '2021-06-14 01:14:14', '2021-06-14 01:14:14', 'Rahmat STS', 2, 'Menambahkan Trial', 'Data', ''),
(555, '2021-06-14 07:09:12', '2021-06-14 07:09:12', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(556, '2021-06-14 07:17:05', '2021-06-14 07:17:05', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(557, '2021-06-14 07:17:22', '2021-06-14 07:17:22', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(558, '2021-06-15 00:19:46', '2021-06-15 00:19:46', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(559, '2021-06-15 07:00:18', '2021-06-15 07:00:18', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(560, '2021-06-15 12:25:27', '2021-06-15 12:25:27', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(561, '2021-06-16 00:11:20', '2021-06-16 00:11:20', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(562, '2021-06-16 01:13:50', '2021-06-16 01:13:50', 'Rahmat STS', 2, 'Menambahkan Trial', 'Data', ''),
(563, '2021-06-16 01:15:33', '2021-06-16 01:15:33', 'Rahmat STS', 2, 'Menambahkan Trial', 'Data', ''),
(564, '2021-06-16 01:15:40', '2021-06-16 01:15:40', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(565, '2021-06-16 01:15:42', '2021-06-16 01:15:42', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(566, '2021-06-16 01:17:17', '2021-06-16 01:17:17', 'Rahmat STS', 2, 'Menambahkan Trial', 'Data', ''),
(567, '2021-06-16 01:17:20', '2021-06-16 01:17:20', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(568, '2021-06-16 01:20:19', '2021-06-16 01:20:19', 'Rahmat STS', 2, 'Menambahkan Trial', 'Data', ''),
(569, '2021-06-16 01:20:25', '2021-06-16 01:20:25', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(570, '2021-06-16 01:25:32', '2021-06-16 01:25:32', 'Rahmat STS', 2, 'Menambahkan Trial', 'Data', ''),
(571, '2021-06-16 01:25:35', '2021-06-16 01:25:35', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(572, '2021-06-16 01:27:38', '2021-06-16 01:27:38', 'Rahmat STS', 2, 'Menambahkan Trial', 'Data', ''),
(573, '2021-06-16 01:27:45', '2021-06-16 01:27:45', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(574, '2021-06-16 01:28:38', '2021-06-16 01:28:38', 'Rahmat STS', 2, 'Menambahkan Trial', 'Data', ''),
(575, '2021-06-16 01:29:11', '2021-06-16 01:29:11', 'Rahmat STS', 2, 'Menambahkan Trial', 'Data', ''),
(576, '2021-06-16 01:29:16', '2021-06-16 01:29:16', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(577, '2021-06-16 01:33:55', '2021-06-16 01:33:55', 'Rahmat STS', 2, 'Menambahkan Trial', 'Data', ''),
(578, '2021-06-16 01:34:03', '2021-06-16 01:34:03', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(579, '2021-06-16 01:43:21', '2021-06-16 01:43:21', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(580, '2021-06-16 01:44:01', '2021-06-16 01:44:01', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(581, '2021-06-16 01:44:21', '2021-06-16 01:44:21', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(582, '2021-06-16 01:46:02', '2021-06-16 01:46:02', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(583, '2021-06-16 01:49:08', '2021-06-16 01:49:08', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(584, '2021-06-16 01:49:50', '2021-06-16 01:49:50', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(585, '2021-06-16 02:04:16', '2021-06-16 02:04:16', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(586, '2021-06-16 02:04:54', '2021-06-16 02:04:54', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(587, '2021-06-16 02:05:41', '2021-06-16 02:05:41', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(588, '2021-06-16 02:12:37', '2021-06-16 02:12:37', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(589, '2021-06-16 04:17:37', '2021-06-16 04:17:37', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(590, '2021-06-16 04:50:21', '2021-06-16 04:50:21', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(591, '2021-06-16 04:52:02', '2021-06-16 04:52:02', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(592, '2021-06-16 04:52:21', '2021-06-16 04:52:21', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(593, '2021-06-16 04:53:15', '2021-06-16 04:53:15', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(594, '2021-06-16 04:53:50', '2021-06-16 04:53:50', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(595, '2021-06-16 04:54:03', '2021-06-16 04:54:03', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(596, '2021-06-16 04:59:26', '2021-06-16 04:59:26', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(597, '2021-06-16 05:00:47', '2021-06-16 05:00:47', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(598, '2021-06-16 05:01:22', '2021-06-16 05:01:22', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(599, '2021-06-16 05:02:26', '2021-06-16 05:02:26', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(600, '2021-06-16 05:02:29', '2021-06-16 05:02:29', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(601, '2021-06-16 05:04:46', '2021-06-16 05:04:46', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(602, '2021-06-16 05:05:12', '2021-06-16 05:05:12', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(603, '2021-06-16 05:05:14', '2021-06-16 05:05:14', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(604, '2021-06-16 06:50:06', '2021-06-16 06:50:06', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(605, '2021-06-16 15:16:59', '2021-06-16 15:16:59', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(606, '2021-06-17 00:11:50', '2021-06-17 00:11:50', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(607, '2021-06-17 03:53:50', '2021-06-17 03:53:50', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(608, '2021-06-17 07:24:00', '2021-06-17 07:24:00', 'Admin', 0, 'Login Aplikasi ', 'Login', ''),
(609, '2021-06-17 07:24:23', '2021-06-17 07:24:23', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(610, '2021-06-17 07:25:09', '2021-06-17 07:25:09', 'Admin', 0, 'Login Aplikasi ', 'Login', ''),
(611, '2021-06-17 07:25:25', '2021-06-17 07:25:25', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(612, '2021-06-17 07:25:53', '2021-06-17 07:25:53', 'Super Admin', 0, 'Login Aplikasi ', 'Login', ''),
(613, '2021-06-17 08:11:36', '2021-06-17 08:11:36', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(614, '2021-06-18 01:20:59', '2021-06-18 01:20:59', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(615, '2021-06-18 07:15:44', '2021-06-18 07:15:44', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(616, '2021-06-19 00:24:06', '2021-06-19 00:24:06', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(617, '2021-06-19 02:06:12', '2021-06-19 02:06:12', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(618, '2021-06-21 00:12:01', '2021-06-21 00:12:01', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(619, '2021-06-21 00:16:33', '2021-06-21 00:16:33', 'Super Admin', 0, 'Login Aplikasi ', 'Login', ''),
(620, '2021-06-21 02:42:25', '2021-06-21 02:42:25', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(621, '2021-06-21 02:43:41', '2021-06-21 02:43:41', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(622, '2021-06-21 02:43:43', '2021-06-21 02:43:43', 'Rahmat STS', 5, 'Menghapus Data Trial', 'All data', ''),
(623, '2021-06-21 04:56:17', '2021-06-21 04:56:17', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(624, '2021-06-22 12:36:59', '2021-06-22 12:36:59', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(625, '2021-06-23 00:13:31', '2021-06-23 00:13:31', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(626, '2021-06-23 00:49:01', '2021-06-23 00:49:01', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(627, '2021-06-23 01:22:50', '2021-06-23 01:22:50', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(628, '2021-06-23 07:42:49', '2021-06-23 07:42:49', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(629, '2021-06-24 00:13:39', '2021-06-24 00:13:39', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(630, '2021-06-25 00:26:51', '2021-06-25 00:26:51', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(631, '2021-06-25 01:47:01', '2021-06-25 01:47:01', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(632, '2021-06-25 02:47:59', '2021-06-25 02:47:59', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(633, '2021-06-25 07:35:44', '2021-06-25 07:35:44', 'Admin', 0, 'Login Aplikasi ', 'Login', ''),
(634, '2021-06-26 01:12:34', '2021-06-26 01:12:34', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(635, '2021-06-26 03:48:34', '2021-06-26 03:48:34', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(636, '2021-06-26 12:36:42', '2021-06-26 12:36:42', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(637, '2021-06-27 02:13:41', '2021-06-27 02:13:41', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(638, '2021-06-28 00:12:08', '2021-06-28 00:12:08', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(639, '2021-06-28 00:12:47', '2021-06-28 00:12:47', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(640, '2021-06-28 02:43:14', '2021-06-28 02:43:14', 'Super Admin', 0, 'Login Aplikasi ', 'Login', ''),
(641, '2021-06-28 03:35:38', '2021-06-28 03:35:38', 'Super Admin', 0, 'Login Aplikasi ', 'Login', ''),
(642, '2021-06-28 04:37:57', '2021-06-28 04:37:57', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(643, '2021-06-29 00:38:22', '2021-06-29 00:38:22', 'Super Admin', 0, 'Login Aplikasi ', 'Login', ''),
(644, '2021-06-29 00:45:41', '2021-06-29 00:45:41', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', ''),
(645, '2021-06-29 06:56:43', '2021-06-29 06:56:43', 'Super Admin', 0, 'Login Aplikasi ', 'Login', ''),
(646, '2021-06-30 00:37:52', '2021-06-30 00:37:52', 'Super Admin', 0, 'Login Aplikasi ', 'Login', ''),
(647, '2021-06-30 06:55:55', '2021-06-30 06:55:55', 'Super Admin', 0, 'Login Aplikasi ', 'Login', ''),
(648, '2021-07-01 00:16:14', '2021-07-01 00:16:14', 'Super Admin', 0, 'Login Aplikasi ', 'Login', ''),
(649, '2021-07-02 00:06:46', '2021-07-02 00:06:46', 'Super Admin', 0, 'Login Aplikasi ', 'Login', ''),
(650, '2021-07-02 08:05:37', '2021-07-02 08:05:37', 'Super Admin', 0, 'Login Aplikasi ', 'Login', ''),
(651, '2021-07-02 12:30:02', '2021-07-02 12:30:02', 'Super Admin', 0, 'Login Aplikasi ', 'Login', ''),
(652, '2021-07-03 04:43:34', '2021-07-03 04:43:34', 'Super Admin', 0, 'Login Aplikasi ', 'Login', ''),
(653, '2021-07-04 00:08:23', '2021-07-04 00:08:23', 'Super Admin', 0, 'Login Aplikasi ', 'Login', ''),
(654, '2021-07-04 06:10:30', '2021-07-04 06:10:30', 'Super Admin', 0, 'Login Aplikasi ', 'Login', '');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_menu`
--

CREATE TABLE `tabel_menu` (
  `id` int(11) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `icon` varchar(25) NOT NULL,
  `is_main_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_menu`
--

INSERT INTO `tabel_menu` (`id`, `nama_menu`, `link`, `icon`, `is_main_menu`) VALUES
(1, 'Dashboard', 'home', 'fa fa-home', 0),
(4, 'Registrasi', 'registration', 'fa fa-envelope-open', 78),
(7, 'Data Administrasi', '', 'fa fa-table', 90),
(10, 'Daftar Registrasi', 'registrasi', 'fa fa-envelope', 0),
(12, 'Registrasi Diterima', 'registrasiditerima', 'fa fa-check', 0),
(13, 'Daftar Sample', 'daftarsample', 'fa fa-list', 0),
(14, 'Daftar Antrian', 'daftarantrian', 'fa fa-list-ol', 0),
(15, 'Daftar Batch', 'daftarbatch', 'fa fa-table', 0),
(19, 'Download File', 'download', 'fa fa-download', 0),
(20, 'User Management', 'user', 'fa fa-id-badge', 0),
(21, 'Menu', 'menu', 'fa fa-list', 0),
(70, 'Data Monitoring Admin', 'dataadmin', 'fa fa-id-card', 0),
(71, 'Biodata', 'biodata', 'fa fa-address-card', 0);

-- --------------------------------------------------------

--
-- Table structure for table `table_batch`
--

CREATE TABLE `table_batch` (
  `kode` int(10) NOT NULL,
  `id_reg` varchar(20) NOT NULL,
  `no_sample` varchar(20) NOT NULL,
  `no_urut` int(30) NOT NULL,
  `batch` varchar(10) NOT NULL,
  `id_labor` int(10) NOT NULL,
  `no_pos` int(10) NOT NULL,
  `date_sampling` varchar(20) NOT NULL,
  `fn` varchar(20) NOT NULL,
  `plot` varchar(20) NOT NULL,
  `kode_sample` varchar(20) NOT NULL,
  `pengirim` varchar(200) NOT NULL DEFAULT '0',
  `no_permintaan` varchar(200) NOT NULL,
  `tgl_surat` date NOT NULL,
  `kategori` enum('Trial','Komersial','Studi Kasus') NOT NULL,
  `urgensi` enum('Normal','High Priority') NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `jumlah` int(11) NOT NULL DEFAULT '0',
  `permintaan` varchar(50) NOT NULL DEFAULT '',
  `tgl_kirim` date NOT NULL,
  `division` varchar(50) NOT NULL,
  `complex` varchar(50) NOT NULL,
  `block` varchar(50) NOT NULL,
  `topography` varchar(50) NOT NULL,
  `fert` varchar(50) NOT NULL,
  `soil_type` varchar(50) NOT NULL,
  `leader_lsu` varchar(50) NOT NULL,
  `group_lsu` varchar(50) NOT NULL,
  `sample_code` varchar(50) NOT NULL,
  `lab_code` varchar(50) NOT NULL,
  `sample_date` varchar(15) NOT NULL,
  `frond_no` varchar(50) NOT NULL,
  `n` varchar(50) DEFAULT NULL,
  `p` varchar(50) DEFAULT NULL,
  `k` varchar(50) DEFAULT NULL,
  `mg` varchar(50) DEFAULT NULL,
  `ca` varchar(50) DEFAULT NULL,
  `mn` varchar(50) DEFAULT NULL,
  `b` varchar(50) DEFAULT NULL,
  `zn` varchar(50) DEFAULT NULL,
  `cu` varchar(50) DEFAULT NULL,
  `ci` varchar(50) DEFAULT NULL,
  `fe` varchar(50) DEFAULT NULL,
  `na` varchar(50) DEFAULT NULL,
  `ref_rfc` varchar(50) NOT NULL,
  `ref_lab` varchar(50) NOT NULL,
  `berkas` text,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `table_sample`
--

CREATE TABLE `table_sample` (
  `kode` int(10) NOT NULL,
  `id_reg` varchar(20) NOT NULL,
  `no_sample` varchar(20) NOT NULL,
  `date_sampling` varchar(20) NOT NULL,
  `fn` varchar(20) NOT NULL,
  `plot` varchar(20) NOT NULL,
  `kode_sample` varchar(20) NOT NULL,
  `id_labor` varchar(30) NOT NULL,
  `pengirim` varchar(200) NOT NULL DEFAULT '0',
  `no_permintaan` varchar(200) NOT NULL,
  `tgl_surat` date NOT NULL,
  `kategori` enum('Trial','Komersial','Studi Kasus') NOT NULL,
  `urgensi` enum('Normal','High Priority') NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `jumlah` int(11) NOT NULL DEFAULT '0',
  `permintaan` varchar(50) NOT NULL DEFAULT '',
  `tgl_kirim` date NOT NULL,
  `division` varchar(50) NOT NULL,
  `complex` varchar(50) NOT NULL,
  `block` varchar(50) NOT NULL,
  `topography` varchar(50) NOT NULL,
  `fert` varchar(50) NOT NULL,
  `soil_type` varchar(50) NOT NULL,
  `leader_lsu` varchar(50) NOT NULL,
  `group_lsu` varchar(50) NOT NULL,
  `sample_code` varchar(50) NOT NULL,
  `lab_code` varchar(50) NOT NULL,
  `sample_date` varchar(15) NOT NULL,
  `frond_no` varchar(50) NOT NULL,
  `n` varchar(50) DEFAULT NULL,
  `p` varchar(50) DEFAULT NULL,
  `k` varchar(50) DEFAULT NULL,
  `mg` varchar(50) DEFAULT NULL,
  `ca` varchar(50) DEFAULT NULL,
  `mn` varchar(50) DEFAULT NULL,
  `b` varchar(50) DEFAULT NULL,
  `zn` varchar(50) DEFAULT NULL,
  `cu` varchar(50) DEFAULT NULL,
  `ci` varchar(50) DEFAULT NULL,
  `fe` varchar(50) DEFAULT NULL,
  `na` varchar(50) DEFAULT NULL,
  `ref_rfc` varchar(50) NOT NULL,
  `ref_lab` varchar(50) NOT NULL,
  `berkas` text,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_sample`
--

INSERT INTO `table_sample` (`kode`, `id_reg`, `no_sample`, `date_sampling`, `fn`, `plot`, `kode_sample`, `id_labor`, `pengirim`, `no_permintaan`, `tgl_surat`, `kategori`, `urgensi`, `jenis`, `lokasi`, `jumlah`, `permintaan`, `tgl_kirim`, `division`, `complex`, `block`, `topography`, `fert`, `soil_type`, `leader_lsu`, `group_lsu`, `sample_code`, `lab_code`, `sample_date`, `frond_no`, `n`, `p`, `k`, `mg`, `ca`, `mn`, `b`, `zn`, `cu`, `ci`, `fe`, `na`, `ref_rfc`, `ref_lab`, `berkas`, `status`) VALUES
(18291, 'STS2021-00005', '1', '14-05-2021', 'HNAE1C-01/1', '1/HNAE1C-01/1', '', '2021000001', 'Ichsan Rezky .P', '120/LSU', '2021-06-05', 'Komersial', 'Normal', 'LSU', 'HNAE', 27, '', '2021-06-17', 'HNAE1', 'HNAE95D03', 'HNAE1C-01', 'D', '060101010101/Replanting', '2/S2-MIN', '1', '1', '1', '0', '14-05-2021', '17', 'x', 'x', 'x', 'x', 'x', NULL, 'x', NULL, NULL, 'x', NULL, NULL, '036/RFC SMARTRI-HNAE/LSU.C/V/2021', '-', 'STS2021-00005036 Surat Permintaan Analisa LSU HNAE.xls', 'Menunggu Konfirmasi Batch'),
(18292, 'STS2021-00005', '2', '14-05-2021', 'HNAE1B-01/9', '2/HNAE1B-01/9', '', '2021000002', 'Ichsan Rezky .P', '120/LSU', '2021-06-05', 'Komersial', 'Normal', 'LSU', 'HNAE', 27, '', '2021-06-17', 'HNAE1', 'HNAE96D22', 'HNAE1B-01', 'D', '010204020202/Anorganic-by Fertilizer Spreader', '3/S3-MIN', '1', '1', '9', '0', '14-05-2021', '17', 'x', 'x', 'x', 'x', 'x', NULL, 'x', NULL, NULL, 'x', NULL, NULL, '036/RFC SMARTRI-HNAE/LSU.C/V/2021', '-', 'STS2021-00005036 Surat Permintaan Analisa LSU HNAE.xls', 'Menunggu Konfirmasi Batch'),
(18293, 'STS2021-00005', '3', '17-04-2021', 'HNAE1B-04/10', '3/HNAE1B-04/10', '', '2021000003', 'Ichsan Rezky .P', '120/LSU', '2021-06-05', 'Komersial', 'Normal', 'LSU', 'HNAE', 27, '', '2021-06-17', 'HNAE1', 'HNAE96D22', 'HNAE1B-04', 'D', '010204020202/Anorganic-by Fertilizer Spreader', '2/S2-MIN', '1', '1', '10', '0', '17-04-2021', '17', 'x', 'x', 'x', 'x', 'x', NULL, 'x', NULL, NULL, 'x', NULL, NULL, '036/RFC SMARTRI-HNAE/LSU.C/V/2021', '-', 'STS2021-00005036 Surat Permintaan Analisa LSU HNAE.xls', 'Menunggu Konfirmasi Batch'),
(18294, 'STS2021-00005', '4', '20-04-2021', 'HNAE1B-06/11', '4/HNAE1B-06/11', '', '2021000004', 'Ichsan Rezky .P', '120/LSU', '2021-06-05', 'Komersial', 'Normal', 'LSU', 'HNAE', 27, '', '2021-06-17', 'HNAE1', 'HNAE96D22', 'HNAE1B-06', 'D', '010204020202/Anorganic-by Fertilizer Spreader', '2/S2-MIN', '1', '1', '11', '0', '20-04-2021', '17', 'x', 'x', 'x', 'x', 'x', NULL, 'x', NULL, NULL, 'x', NULL, NULL, '036/RFC SMARTRI-HNAE/LSU.C/V/2021', '-', 'STS2021-00005036 Surat Permintaan Analisa LSU HNAE.xls', 'Menunggu Konfirmasi Batch'),
(18295, 'STS2021-00005', '5', '07-04-2021', 'HNAE2E-01/12', '5/HNAE2E-01/12', '', '2021000005', 'Ichsan Rezky .P', '120/LSU', '2021-06-05', 'Komersial', 'Normal', 'LSU', 'HNAE', 27, '', '2021-06-17', 'HNAE2', 'HNAE96D05', 'HNAE2E-01', 'D', '010204020202/Anorganic-by Fertilizer Spreader', '2/S2-MIN', '1', '12', '12', '0', '07-04-2021', '17', 'x', 'x', 'x', 'x', 'x', NULL, 'x', NULL, NULL, 'x', NULL, NULL, '036/RFC SMARTRI-HNAE/LSU.C/V/2021', '-', 'STS2021-00005036 Surat Permintaan Analisa LSU HNAE.xls', 'Menunggu Konfirmasi Batch'),
(18296, 'STS2021-00005', '6', '15-04-2021', 'HNAE2G-03/16', '6/HNAE2G-03/16', '', '2021000006', 'Ichsan Rezky .P', '120/LSU', '2021-06-05', 'Komersial', 'Normal', 'LSU', 'HNAE', 27, '', '2021-06-17', 'HNAE2', 'HNAE96D23', 'HNAE2G-03', 'D', '010202020202/Anorganic-Manual spread', '2/S2-MIN', '1', '16', '16', '0', '15-04-2021', '17', 'x', 'x', 'x', 'x', 'x', NULL, 'x', NULL, NULL, 'x', NULL, NULL, '036/RFC SMARTRI-HNAE/LSU.C/V/2021', '-', 'STS2021-00005036 Surat Permintaan Analisa LSU HNAE.xls', 'Menunggu Konfirmasi Batch'),
(18297, 'STS2021-00005', '7', '17-04-2021', 'HNAE2H-01/18', '7/HNAE2H-01/18', '', '2021000007', 'Ichsan Rezky .P', '120/LSU', '2021-06-05', 'Komersial', 'Normal', 'LSU', 'HNAE', 27, '', '2021-06-17', 'HNAE2', 'HNAE96D23', 'HNAE2H-01', 'D', '010204020202/Anorganic-by Fertilizer Spreader', '2/S2-MIN', '1', '18', '18', '0', '17-04-2021', '17', 'x', 'x', 'x', 'x', 'x', NULL, 'x', NULL, NULL, 'x', NULL, NULL, '036/RFC SMARTRI-HNAE/LSU.C/V/2021', '-', 'STS2021-00005036 Surat Permintaan Analisa LSU HNAE.xls', 'Menunggu Konfirmasi Batch'),
(18298, 'STS2021-00005', '8', '19-04-2021', 'HNAE2H-03/19', '8/HNAE2H-03/19', '', '2021000008', 'Ichsan Rezky .P', '120/LSU', '2021-06-05', 'Komersial', 'Normal', 'LSU', 'HNAE', 27, '', '2021-06-17', 'HNAE2', 'HNAE96D23', 'HNAE2H-03', 'D', '010204020202/Anorganic-by Fertilizer Spreader', '2/S2-MIN', '1', '19', '19', '0', '19-04-2021', '17', 'x', 'x', 'x', 'x', 'x', NULL, 'x', NULL, NULL, 'x', NULL, NULL, '036/RFC SMARTRI-HNAE/LSU.C/V/2021', '-', 'STS2021-00005036 Surat Permintaan Analisa LSU HNAE.xls', 'Menunggu Konfirmasi Batch'),
(18299, 'STS2021-00005', '9', '17-04-2021', 'HNAE3J-05/23', '9/HNAE3J-05/23', '', '2021000009', 'Ichsan Rezky .P', '120/LSU', '2021-06-05', 'Komersial', 'Normal', 'LSU', 'HNAE', 27, '', '2021-06-17', 'HNAE3', 'HNAE96D12', 'HNAE3J-05', 'D', '010204020202/Anorganic-by Fertilizer Spreader', '2/S2-MIN', '1', '23', '23', '0', '17-04-2021', '17', 'x', 'x', 'x', 'x', 'x', NULL, 'x', NULL, NULL, 'x', NULL, NULL, '036/RFC SMARTRI-HNAE/LSU.C/V/2021', '-', 'STS2021-00005036 Surat Permintaan Analisa LSU HNAE.xls', 'Menunggu Konfirmasi Batch'),
(18300, 'STS2021-00005', '10', '20-04-2021', 'HNAE3K-05/24', '10/HNAE3K-05/24', '', '2021000010', 'Ichsan Rezky .P', '120/LSU', '2021-06-05', 'Komersial', 'Normal', 'LSU', 'HNAE', 27, '', '2021-06-17', 'HNAE3', 'HNAE96D12', 'HNAE3K-05', 'D', '010204020202/Anorganic-by Fertilizer Spreader', '2/S2-MIN', '1', '24', '24', '0', '20-04-2021', '17', 'x', 'x', 'x', 'x', 'x', NULL, 'x', NULL, NULL, 'x', NULL, NULL, '036/RFC SMARTRI-HNAE/LSU.C/V/2021', '-', 'STS2021-00005036 Surat Permintaan Analisa LSU HNAE.xls', 'Menunggu Konfirmasi Batch'),
(18301, 'STS2021-00005', '11', '14-04-2021', 'HNAE4A-08/37', '11/HNAE4A-08/37', '', '2021000011', 'Ichsan Rezky .P', '120/LSU', '2021-06-05', 'Komersial', 'Normal', 'LSU', 'HNAE', 27, '', '2021-06-17', 'HNAE4', 'HNAE96D13', 'HNAE4A-08', 'D', '010204020202/Anorganic-by Fertilizer Spreader', '2/S2-MIN', '1', '37', '37', '0', '14-04-2021', '17', 'x', 'x', 'x', 'x', 'x', NULL, 'x', NULL, NULL, 'x', NULL, NULL, '036/RFC SMARTRI-HNAE/LSU.C/V/2021', '-', 'STS2021-00005036 Surat Permintaan Analisa LSU HNAE.xls', 'Menunggu Konfirmasi Batch'),
(18302, 'STS2021-00005', '12', '15-04-2021', 'HNAE4B-09/38', '12/HNAE4B-09/38', '', '2021000012', 'Ichsan Rezky .P', '120/LSU', '2021-06-05', 'Komersial', 'Normal', 'LSU', 'HNAE', 27, '', '2021-06-17', 'HNAE4', 'HNAE96D13', 'HNAE4B-09', 'D', '010204020202/Anorganic-by Fertilizer Spreader', '2/S2-MIN', '1', '38', '38', '0', '15-04-2021', '17', 'x', 'x', 'x', 'x', 'x', NULL, 'x', NULL, NULL, 'x', NULL, NULL, '036/RFC SMARTRI-HNAE/LSU.C/V/2021', '-', 'STS2021-00005036 Surat Permintaan Analisa LSU HNAE.xls', 'Menunggu Konfirmasi Batch'),
(18303, 'STS2021-00005', '13', '16-04-2021', 'HNAE4C-07/39', '13/HNAE4C-07/39', '', '2021000013', 'Ichsan Rezky .P', '120/LSU', '2021-06-05', 'Komersial', 'Normal', 'LSU', 'HNAE', 27, '', '2021-06-17', 'HNAE4', 'HNAE96D14', 'HNAE4C-07', 'D', '010204020202/Anorganic-by Fertilizer Spreader', '2/S2-MIN', '1', '39', '39', '0', '16-04-2021', '17', 'x', 'x', 'x', 'x', 'x', NULL, 'x', NULL, NULL, 'x', NULL, NULL, '036/RFC SMARTRI-HNAE/LSU.C/V/2021', '-', 'STS2021-00005036 Surat Permintaan Analisa LSU HNAE.xls', 'Menunggu Konfirmasi Batch'),
(18304, 'STS2021-00005', '14', '16-04-2021', 'HNAE4D-08/41', '14/HNAE4D-08/41', '', '2021000014', 'Ichsan Rezky .P', '120/LSU', '2021-06-05', 'Komersial', 'Normal', 'LSU', 'HNAE', 27, '', '2021-06-17', 'HNAE4', 'HNAE96D14', 'HNAE4D-08', 'D', '010202020202/Anorganic-Manual spread', '3/S3-MIN', '1', '41', '41', '0', '16-04-2021', '17', 'x', 'x', 'x', 'x', 'x', NULL, 'x', NULL, NULL, 'x', NULL, NULL, '036/RFC SMARTRI-HNAE/LSU.C/V/2021', '-', 'STS2021-00005036 Surat Permintaan Analisa LSU HNAE.xls', 'Menunggu Konfirmasi Batch'),
(18305, 'STS2021-00005', '15', '20-04-2021', 'HNAE4D-10/42', '15/HNAE4D-10/42', '', '2021000015', 'Ichsan Rezky .P', '120/LSU', '2021-06-05', 'Komersial', 'Normal', 'LSU', 'HNAE', 27, '', '2021-06-17', 'HNAE4', 'HNAE96D14', 'HNAE4D-10', 'D', '010204020202/Anorganic-by Fertilizer Spreader', '2/S2-MIN', '1', '42', '42', '0', '20-04-2021', '17', 'x', 'x', 'x', 'x', 'x', NULL, 'x', NULL, NULL, 'x', NULL, NULL, '036/RFC SMARTRI-HNAE/LSU.C/V/2021', '-', 'STS2021-00005036 Surat Permintaan Analisa LSU HNAE.xls', 'Menunggu Konfirmasi Batch'),
(18306, 'STS2021-00005', '16', '17-04-2021', 'HNAE4C-12/43', '16/HNAE4C-12/43', '', '2021000016', 'Ichsan Rezky .P', '120/LSU', '2021-06-05', 'Komersial', 'Normal', 'LSU', 'HNAE', 27, '', '2021-06-17', 'HNAE4', 'HNAE97D15', 'HNAE4C-12', 'D', '010304040403/Anorganic-Fertilizer Spreader&EFB-Ext', '9/SANDY SOIL', '1', '43', '43', '0', '17-04-2021', '17', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', NULL, '036/RFC SMARTRI-HNAE/LSU.C/V/2021', '-', 'STS2021-00005036 Surat Permintaan Analisa LSU HNAE.xls', 'Menunggu Konfirmasi Batch'),
(18307, 'STS2021-00005', '17', '21-04-2021', 'HNAE5E-10/54', '17/HNAE5E-10/54', '', '2021000017', 'Ichsan Rezky .P', '120/LSU', '2021-06-05', 'Komersial', 'Normal', 'LSU', 'HNAE', 27, '', '2021-06-17', 'HNAE5', 'HNAE97D16', 'HNAE5E-10', 'D', '060101010101/Replanting', '2/S2-MIN', '1', '54', '54', '0', '21-04-2021', '17', 'x', 'x', 'x', 'x', 'x', NULL, 'x', NULL, NULL, 'x', NULL, NULL, '036/RFC SMARTRI-HNAE/LSU.C/V/2021', '-', 'STS2021-00005036 Surat Permintaan Analisa LSU HNAE.xls', 'Menunggu Konfirmasi Batch'),
(18308, 'STS2021-00005', '18', '19-04-2021', 'HNAE5F-13/55', '18/HNAE5F-13/55', '', '2021000018', 'Ichsan Rezky .P', '120/LSU', '2021-06-05', 'Komersial', 'Normal', 'LSU', 'HNAE', 27, '', '2021-06-17', 'HNAE5', 'HNAE97D16', 'HNAE5F-13', 'D', '060101010101/Replanting', '9/SANDY SOIL', '1', '55', '55', '0', '19-04-2021', '17', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', NULL, '036/RFC SMARTRI-HNAE/LSU.C/V/2021', '-', 'STS2021-00005036 Surat Permintaan Analisa LSU HNAE.xls', 'Menunggu Konfirmasi Batch'),
(18309, 'STS2021-00005', '19', '19-04-2021', 'HNAE5E-14/52', '19/HNAE5E-14/52', '', '2021000019', 'Ichsan Rezky .P', '120/LSU', '2021-06-05', 'Komersial', 'Normal', 'LSU', 'HNAE', 27, '', '2021-06-17', 'HNAE5', 'HNAE97D18', 'HNAE5E-14', 'D', '010204020202/Anorganic-by Fertilizer Spreader', '2/S2-MIN', '1', '52', '52', '0', '19-04-2021', '17', 'x', 'x', 'x', 'x', 'x', NULL, 'x', NULL, NULL, 'x', NULL, NULL, '036/RFC SMARTRI-HNAE/LSU.C/V/2021', '-', 'STS2021-00005036 Surat Permintaan Analisa LSU HNAE.xls', 'Menunggu Konfirmasi Batch'),
(18310, 'STS2021-00005', '20', '15-04-2021', 'HNAE5F-15/57', '20/HNAE5F-15/57', '', '2021000020', 'Ichsan Rezky .P', '120/LSU', '2021-06-05', 'Komersial', 'Normal', 'LSU', 'HNAE', 27, '', '2021-06-17', 'HNAE5', 'HNAE97D18', 'HNAE5F-15', 'D', '010304040403/Anorganic-Fertilizer Spreader&EFB-Ext', '9/SANDY SOIL', '1', '57', '57', '0', '15-04-2021', '17', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', NULL, '036/RFC SMARTRI-HNAE/LSU.C/V/2021', '-', 'STS2021-00005036 Surat Permintaan Analisa LSU HNAE.xls', 'Menunggu Konfirmasi Batch'),
(18311, 'STS2021-00005', '21', '16-04-2021', 'HNAE5F-16/58', '21/HNAE5F-16/58', '', '2021000021', 'Ichsan Rezky .P', '120/LSU', '2021-06-05', 'Komersial', 'Normal', 'LSU', 'HNAE', 27, '', '2021-06-17', 'HNAE5', 'HNAE97D18', 'HNAE5F-16', 'D', '010304040403/Anorganic-Fertilizer Spreader&EFB-Ext', '9/SANDY SOIL', '1', '58', '58', '0', '16-04-2021', '17', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', NULL, '036/RFC SMARTRI-HNAE/LSU.C/V/2021', '-', 'STS2021-00005036 Surat Permintaan Analisa LSU HNAE.xls', 'Menunggu Konfirmasi Batch'),
(18312, 'STS2021-00005', '22', '17-04-2021', 'HNAE5G-15/59', '22/HNAE5G-15/59', '', '2021000022', 'Ichsan Rezky .P', '120/LSU', '2021-06-05', 'Komersial', 'Normal', 'LSU', 'HNAE', 27, '', '2021-06-17', 'HNAE5', 'HNAE97D18', 'HNAE5G-15', 'D', '010304040403/Anorganic-Fertilizer Spreader&EFB-Ext', '9/SANDY SOIL', '1', '59', '59', '0', '17-04-2021', '17', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', NULL, '036/RFC SMARTRI-HNAE/LSU.C/V/2021', '-', 'STS2021-00005036 Surat Permintaan Analisa LSU HNAE.xls', 'Menunggu Konfirmasi Batch'),
(18313, 'STS2021-00005', '23', '14-04-2021', 'HNAE6J-09/63', '23/HNAE6J-09/63', '', '2021000023', 'Ichsan Rezky .P', '120/LSU', '2021-06-05', 'Komersial', 'Normal', 'LSU', 'HNAE', 27, '', '2021-06-17', 'HNAE6', 'HNAE96D20', 'HNAE6J-09', 'D', '010204020202/Anorganic-by Fertilizer Spreader', '2/S2-MIN', '1', '63', '63', '0', '14-04-2021', '17', 'x', 'x', 'x', 'x', 'x', NULL, 'x', NULL, NULL, 'x', NULL, NULL, '036/RFC SMARTRI-HNAE/LSU.C/V/2021', '-', 'STS2021-00005036 Surat Permintaan Analisa LSU HNAE.xls', 'Menunggu Konfirmasi Batch'),
(18314, 'STS2021-00005', '24', '15-04-2021', 'HNAE6G-07/64', '24/HNAE6G-07/64', '', '2021000024', 'Ichsan Rezky .P', '120/LSU', '2021-06-05', 'Komersial', 'Normal', 'LSU', 'HNAE', 27, '', '2021-06-17', 'HNAE6', 'HNAE97D19', 'HNAE6G-07', 'D', '010204020202/Anorganic-by Fertilizer Spreader', '2/S2-MIN', '1', '64', '64', '0', '15-04-2021', '17', 'x', 'x', 'x', 'x', 'x', NULL, 'x', NULL, NULL, 'x', NULL, NULL, '036/RFC SMARTRI-HNAE/LSU.C/V/2021', '-', 'STS2021-00005036 Surat Permintaan Analisa LSU HNAE.xls', 'Menunggu Konfirmasi Batch'),
(18315, 'STS2021-00005', '25', '16-04-2021', 'HNAE6G-09/65', '25/HNAE6G-09/65', '', '2021000025', 'Ichsan Rezky .P', '120/LSU', '2021-06-05', 'Komersial', 'Normal', 'LSU', 'HNAE', 27, '', '2021-06-17', 'HNAE6', 'HNAE97D19', 'HNAE6G-09', 'D', '010304040403/Anorganic-Fertilizer Spreader&EFB-Ext', '9/SANDY SOIL', '1', '65', '65', '0', '16-04-2021', '17', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', NULL, '036/RFC SMARTRI-HNAE/LSU.C/V/2021', '-', 'STS2021-00005036 Surat Permintaan Analisa LSU HNAE.xls', 'Menunggu Konfirmasi Batch'),
(18316, 'STS2021-00005', '26', '17-04-2021', 'HNAE6H-08/66', '26/HNAE6H-08/66', '', '2021000026', 'Ichsan Rezky .P', '120/LSU', '2021-06-05', 'Komersial', 'Normal', 'LSU', 'HNAE', 27, '', '2021-06-17', 'HNAE6', 'HNAE97D19', 'HNAE6H-08', 'D', '010204020202/Anorganic-by Fertilizer Spreader', '2/S2-MIN', '1', '66', '66', '0', '17-04-2021', '17', 'x', 'x', 'x', 'x', 'x', NULL, 'x', NULL, NULL, 'x', NULL, NULL, '036/RFC SMARTRI-HNAE/LSU.C/V/2021', '-', 'STS2021-00005036 Surat Permintaan Analisa LSU HNAE.xls', 'Menunggu Konfirmasi Batch'),
(18317, 'STS2021-00005', '27', '20-04-2021', 'HNAE6H-09/67', '27/HNAE6H-09/67', '', '2021000027', 'Ichsan Rezky .P', '120/LSU', '2021-06-05', 'Komersial', 'Normal', 'LSU', 'HNAE', 27, '', '2021-06-17', 'HNAE6', 'HNAE97D19', 'HNAE6H-09', 'D', '010204020202/Anorganic-by Fertilizer Spreader', '2/S2-MIN', '1', '67', '67', '0', '20-04-2021', '17', 'x', 'x', 'x', 'x', 'x', NULL, 'x', NULL, NULL, 'x', NULL, NULL, '036/RFC SMARTRI-HNAE/LSU.C/V/2021', '-', 'STS2021-00005036 Surat Permintaan Analisa LSU HNAE.xls', 'Menunggu Konfirmasi Batch'),
(18318, 'STS2021-00005', '28', '14-05-2021', 'HNAE1C-01/1', '28/HNAE1C-01/1', '', '2021000028', 'Ichsan Rezky .P', '120/LSU', '2021-06-05', 'Komersial', 'Normal', 'LSU', 'HNAE', 27, '', '2021-06-17', 'HNAE1', 'HNAE95D03', 'HNAE1C-01', 'D', '060101010101/Replanting', '2/S2-MIN', '1', '1', '1', '0', '14-05-2021', '17', 'x', 'x', 'x', 'x', 'x', NULL, 'x', NULL, NULL, 'x', NULL, NULL, '036/RFC SMARTRI-HNAE/LSU.C/V/2021', '-', 'STS2021-00005036 Surat Permintaan Analisa LSU HNAE.xls', 'Menunggu Konfirmasi Batch'),
(18319, 'STS2021-00005', '29', '14-05-2021', 'HNAE1B-01/9', '29/HNAE1B-01/9', '', '2021000029', 'Ichsan Rezky .P', '120/LSU', '2021-06-05', 'Komersial', 'Normal', 'LSU', 'HNAE', 27, '', '2021-06-17', 'HNAE1', 'HNAE96D22', 'HNAE1B-01', 'D', '010204020202/Anorganic-by Fertilizer Spreader', '3/S3-MIN', '1', '1', '9', '0', '14-05-2021', '17', 'x', 'x', 'x', 'x', 'x', NULL, 'x', NULL, NULL, 'x', NULL, NULL, '036/RFC SMARTRI-HNAE/LSU.C/V/2021', '-', 'STS2021-00005036 Surat Permintaan Analisa LSU HNAE.xls', 'Menunggu Konfirmasi Batch'),
(18320, 'STS2021-00005', '30', '17-04-2021', 'HNAE1B-04/10', '30/HNAE1B-04/10', '', '2021000030', 'Ichsan Rezky .P', '120/LSU', '2021-06-05', 'Komersial', 'Normal', 'LSU', 'HNAE', 27, '', '2021-06-17', 'HNAE1', 'HNAE96D22', 'HNAE1B-04', 'D', '010204020202/Anorganic-by Fertilizer Spreader', '2/S2-MIN', '1', '1', '10', '0', '17-04-2021', '17', 'x', 'x', 'x', 'x', 'x', NULL, 'x', NULL, NULL, 'x', NULL, NULL, '036/RFC SMARTRI-HNAE/LSU.C/V/2021', '-', 'STS2021-00005036 Surat Permintaan Analisa LSU HNAE.xls', 'Menunggu Konfirmasi Batch'),
(18321, 'STS2021-00005', '31', '20-04-2021', 'HNAE1B-06/11', '31/HNAE1B-06/11', '', '2021000031', 'Ichsan Rezky .P', '120/LSU', '2021-06-05', 'Komersial', 'Normal', 'LSU', 'HNAE', 27, '', '2021-06-17', 'HNAE1', 'HNAE96D22', 'HNAE1B-06', 'D', '010204020202/Anorganic-by Fertilizer Spreader', '2/S2-MIN', '1', '1', '11', '0', '20-04-2021', '17', 'x', 'x', 'x', 'x', 'x', NULL, 'x', NULL, NULL, 'x', NULL, NULL, '036/RFC SMARTRI-HNAE/LSU.C/V/2021', '-', 'STS2021-00005036 Surat Permintaan Analisa LSU HNAE.xls', 'Menunggu Konfirmasi Batch'),
(18322, 'STS2021-00005', '32', '07-04-2021', 'HNAE2E-01/12', '32/HNAE2E-01/12', '', '2021000032', 'Ichsan Rezky .P', '120/LSU', '2021-06-05', 'Komersial', 'Normal', 'LSU', 'HNAE', 27, '', '2021-06-17', 'HNAE2', 'HNAE96D05', 'HNAE2E-01', 'D', '010204020202/Anorganic-by Fertilizer Spreader', '2/S2-MIN', '1', '12', '12', '0', '07-04-2021', '17', 'x', 'x', 'x', 'x', 'x', NULL, 'x', NULL, NULL, 'x', NULL, NULL, '036/RFC SMARTRI-HNAE/LSU.C/V/2021', '-', 'STS2021-00005036 Surat Permintaan Analisa LSU HNAE.xls', 'Menunggu Konfirmasi Batch'),
(18323, 'STS2021-00005', '33', '15-04-2021', 'HNAE2G-03/16', '33/HNAE2G-03/16', '', '2021000033', 'Ichsan Rezky .P', '120/LSU', '2021-06-05', 'Komersial', 'Normal', 'LSU', 'HNAE', 27, '', '2021-06-17', 'HNAE2', 'HNAE96D23', 'HNAE2G-03', 'D', '010202020202/Anorganic-Manual spread', '2/S2-MIN', '1', '16', '16', '0', '15-04-2021', '17', 'x', 'x', 'x', 'x', 'x', NULL, 'x', NULL, NULL, 'x', NULL, NULL, '036/RFC SMARTRI-HNAE/LSU.C/V/2021', '-', 'STS2021-00005036 Surat Permintaan Analisa LSU HNAE.xls', 'Menunggu Konfirmasi Batch'),
(18324, 'STS2021-00005', '34', '17-04-2021', 'HNAE2H-01/18', '34/HNAE2H-01/18', '', '2021000034', 'Ichsan Rezky .P', '120/LSU', '2021-06-05', 'Komersial', 'Normal', 'LSU', 'HNAE', 27, '', '2021-06-17', 'HNAE2', 'HNAE96D23', 'HNAE2H-01', 'D', '010204020202/Anorganic-by Fertilizer Spreader', '2/S2-MIN', '1', '18', '18', '0', '17-04-2021', '17', 'x', 'x', 'x', 'x', 'x', NULL, 'x', NULL, NULL, 'x', NULL, NULL, '036/RFC SMARTRI-HNAE/LSU.C/V/2021', '-', 'STS2021-00005036 Surat Permintaan Analisa LSU HNAE.xls', 'Menunggu Konfirmasi Batch'),
(18325, 'STS2021-00005', '35', '19-04-2021', 'HNAE2H-03/19', '35/HNAE2H-03/19', '', '2021000035', 'Ichsan Rezky .P', '120/LSU', '2021-06-05', 'Komersial', 'Normal', 'LSU', 'HNAE', 27, '', '2021-06-17', 'HNAE2', 'HNAE96D23', 'HNAE2H-03', 'D', '010204020202/Anorganic-by Fertilizer Spreader', '2/S2-MIN', '1', '19', '19', '0', '19-04-2021', '17', 'x', 'x', 'x', 'x', 'x', NULL, 'x', NULL, NULL, 'x', NULL, NULL, '036/RFC SMARTRI-HNAE/LSU.C/V/2021', '-', 'STS2021-00005036 Surat Permintaan Analisa LSU HNAE.xls', 'Menunggu Konfirmasi Batch'),
(18326, 'STS2021-00005', '36', '17-04-2021', 'HNAE3J-05/23', '36/HNAE3J-05/23', '', '2021000036', 'Ichsan Rezky .P', '120/LSU', '2021-06-05', 'Komersial', 'Normal', 'LSU', 'HNAE', 27, '', '2021-06-17', 'HNAE3', 'HNAE96D12', 'HNAE3J-05', 'D', '010204020202/Anorganic-by Fertilizer Spreader', '2/S2-MIN', '1', '23', '23', '0', '17-04-2021', '17', 'x', 'x', 'x', 'x', 'x', NULL, 'x', NULL, NULL, 'x', NULL, NULL, '036/RFC SMARTRI-HNAE/LSU.C/V/2021', '-', 'STS2021-00005036 Surat Permintaan Analisa LSU HNAE.xls', 'Menunggu Konfirmasi Batch'),
(18327, 'STS2021-00005', '37', '20-04-2021', 'HNAE3K-05/24', '37/HNAE3K-05/24', '', '2021000037', 'Ichsan Rezky .P', '120/LSU', '2021-06-05', 'Komersial', 'Normal', 'LSU', 'HNAE', 27, '', '2021-06-17', 'HNAE3', 'HNAE96D12', 'HNAE3K-05', 'D', '010204020202/Anorganic-by Fertilizer Spreader', '2/S2-MIN', '1', '24', '24', '0', '20-04-2021', '17', 'x', 'x', 'x', 'x', 'x', NULL, 'x', NULL, NULL, 'x', NULL, NULL, '036/RFC SMARTRI-HNAE/LSU.C/V/2021', '-', 'STS2021-00005036 Surat Permintaan Analisa LSU HNAE.xls', 'Menunggu Konfirmasi Batch'),
(18328, 'STS2021-00005', '38', '14-04-2021', 'HNAE4A-08/37', '38/HNAE4A-08/37', '', '2021000038', 'Ichsan Rezky .P', '120/LSU', '2021-06-05', 'Komersial', 'Normal', 'LSU', 'HNAE', 27, '', '2021-06-17', 'HNAE4', 'HNAE96D13', 'HNAE4A-08', 'D', '010204020202/Anorganic-by Fertilizer Spreader', '2/S2-MIN', '1', '37', '37', '0', '14-04-2021', '17', 'x', 'x', 'x', 'x', 'x', NULL, 'x', NULL, NULL, 'x', NULL, NULL, '036/RFC SMARTRI-HNAE/LSU.C/V/2021', '-', 'STS2021-00005036 Surat Permintaan Analisa LSU HNAE.xls', 'Menunggu Konfirmasi Batch'),
(18329, 'STS2021-00005', '39', '15-04-2021', 'HNAE4B-09/38', '39/HNAE4B-09/38', '', '2021000039', 'Ichsan Rezky .P', '120/LSU', '2021-06-05', 'Komersial', 'Normal', 'LSU', 'HNAE', 27, '', '2021-06-17', 'HNAE4', 'HNAE96D13', 'HNAE4B-09', 'D', '010204020202/Anorganic-by Fertilizer Spreader', '2/S2-MIN', '1', '38', '38', '0', '15-04-2021', '17', 'x', 'x', 'x', 'x', 'x', NULL, 'x', NULL, NULL, 'x', NULL, NULL, '036/RFC SMARTRI-HNAE/LSU.C/V/2021', '-', 'STS2021-00005036 Surat Permintaan Analisa LSU HNAE.xls', 'Menunggu Konfirmasi Batch'),
(18330, 'STS2021-00005', '40', '16-04-2021', 'HNAE4C-07/39', '40/HNAE4C-07/39', '', '2021000040', 'Ichsan Rezky .P', '120/LSU', '2021-06-05', 'Komersial', 'Normal', 'LSU', 'HNAE', 27, '', '2021-06-17', 'HNAE4', 'HNAE96D14', 'HNAE4C-07', 'D', '010204020202/Anorganic-by Fertilizer Spreader', '2/S2-MIN', '1', '39', '39', '0', '16-04-2021', '17', 'x', 'x', 'x', 'x', 'x', NULL, 'x', NULL, NULL, 'x', NULL, NULL, '036/RFC SMARTRI-HNAE/LSU.C/V/2021', '-', 'STS2021-00005036 Surat Permintaan Analisa LSU HNAE.xls', 'Menunggu Konfirmasi Batch'),
(18331, 'STS2021-00005', '41', '16-04-2021', 'HNAE4D-08/41', '41/HNAE4D-08/41', '', '2021000041', 'Ichsan Rezky .P', '120/LSU', '2021-06-05', 'Komersial', 'Normal', 'LSU', 'HNAE', 27, '', '2021-06-17', 'HNAE4', 'HNAE96D14', 'HNAE4D-08', 'D', '010202020202/Anorganic-Manual spread', '3/S3-MIN', '1', '41', '41', '0', '16-04-2021', '17', 'x', 'x', 'x', 'x', 'x', NULL, 'x', NULL, NULL, 'x', NULL, NULL, '036/RFC SMARTRI-HNAE/LSU.C/V/2021', '-', 'STS2021-00005036 Surat Permintaan Analisa LSU HNAE.xls', 'Menunggu Konfirmasi Batch'),
(18332, 'STS2021-00005', '42', '20-04-2021', 'HNAE4D-10/42', '42/HNAE4D-10/42', '', '2021000042', 'Ichsan Rezky .P', '120/LSU', '2021-06-05', 'Komersial', 'Normal', 'LSU', 'HNAE', 27, '', '2021-06-17', 'HNAE4', 'HNAE96D14', 'HNAE4D-10', 'D', '010204020202/Anorganic-by Fertilizer Spreader', '2/S2-MIN', '1', '42', '42', '0', '20-04-2021', '17', 'x', 'x', 'x', 'x', 'x', NULL, 'x', NULL, NULL, 'x', NULL, NULL, '036/RFC SMARTRI-HNAE/LSU.C/V/2021', '-', 'STS2021-00005036 Surat Permintaan Analisa LSU HNAE.xls', 'Menunggu Konfirmasi Batch'),
(18333, 'STS2021-00005', '43', '17-04-2021', 'HNAE4C-12/43', '43/HNAE4C-12/43', '', '2021000043', 'Ichsan Rezky .P', '120/LSU', '2021-06-05', 'Komersial', 'Normal', 'LSU', 'HNAE', 27, '', '2021-06-17', 'HNAE4', 'HNAE97D15', 'HNAE4C-12', 'D', '010304040403/Anorganic-Fertilizer Spreader&EFB-Ext', '9/SANDY SOIL', '1', '43', '43', '0', '17-04-2021', '17', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', NULL, '036/RFC SMARTRI-HNAE/LSU.C/V/2021', '-', 'STS2021-00005036 Surat Permintaan Analisa LSU HNAE.xls', 'Menunggu Konfirmasi Batch'),
(18334, 'STS2021-00005', '44', '21-04-2021', 'HNAE5E-10/54', '44/HNAE5E-10/54', '', '2021000044', 'Ichsan Rezky .P', '120/LSU', '2021-06-05', 'Komersial', 'Normal', 'LSU', 'HNAE', 27, '', '2021-06-17', 'HNAE5', 'HNAE97D16', 'HNAE5E-10', 'D', '060101010101/Replanting', '2/S2-MIN', '1', '54', '54', '0', '21-04-2021', '17', 'x', 'x', 'x', 'x', 'x', NULL, 'x', NULL, NULL, 'x', NULL, NULL, '036/RFC SMARTRI-HNAE/LSU.C/V/2021', '-', 'STS2021-00005036 Surat Permintaan Analisa LSU HNAE.xls', 'Menunggu Konfirmasi Batch'),
(18335, 'STS2021-00005', '45', '19-04-2021', 'HNAE5F-13/55', '45/HNAE5F-13/55', '', '2021000045', 'Ichsan Rezky .P', '120/LSU', '2021-06-05', 'Komersial', 'Normal', 'LSU', 'HNAE', 27, '', '2021-06-17', 'HNAE5', 'HNAE97D16', 'HNAE5F-13', 'D', '060101010101/Replanting', '9/SANDY SOIL', '1', '55', '55', '0', '19-04-2021', '17', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', NULL, '036/RFC SMARTRI-HNAE/LSU.C/V/2021', '-', 'STS2021-00005036 Surat Permintaan Analisa LSU HNAE.xls', 'Menunggu Konfirmasi Batch'),
(18336, 'STS2021-00005', '46', '19-04-2021', 'HNAE5E-14/52', '46/HNAE5E-14/52', '', '2021000046', 'Ichsan Rezky .P', '120/LSU', '2021-06-05', 'Komersial', 'Normal', 'LSU', 'HNAE', 27, '', '2021-06-17', 'HNAE5', 'HNAE97D18', 'HNAE5E-14', 'D', '010204020202/Anorganic-by Fertilizer Spreader', '2/S2-MIN', '1', '52', '52', '0', '19-04-2021', '17', 'x', 'x', 'x', 'x', 'x', NULL, 'x', NULL, NULL, 'x', NULL, NULL, '036/RFC SMARTRI-HNAE/LSU.C/V/2021', '-', 'STS2021-00005036 Surat Permintaan Analisa LSU HNAE.xls', 'Menunggu Konfirmasi Batch'),
(18337, 'STS2021-00005', '47', '15-04-2021', 'HNAE5F-15/57', '47/HNAE5F-15/57', '', '2021000047', 'Ichsan Rezky .P', '120/LSU', '2021-06-05', 'Komersial', 'Normal', 'LSU', 'HNAE', 27, '', '2021-06-17', 'HNAE5', 'HNAE97D18', 'HNAE5F-15', 'D', '010304040403/Anorganic-Fertilizer Spreader&EFB-Ext', '9/SANDY SOIL', '1', '57', '57', '0', '15-04-2021', '17', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', NULL, '036/RFC SMARTRI-HNAE/LSU.C/V/2021', '-', 'STS2021-00005036 Surat Permintaan Analisa LSU HNAE.xls', 'Menunggu Konfirmasi Batch'),
(18338, 'STS2021-00005', '48', '16-04-2021', 'HNAE5F-16/58', '48/HNAE5F-16/58', '', '2021000048', 'Ichsan Rezky .P', '120/LSU', '2021-06-05', 'Komersial', 'Normal', 'LSU', 'HNAE', 27, '', '2021-06-17', 'HNAE5', 'HNAE97D18', 'HNAE5F-16', 'D', '010304040403/Anorganic-Fertilizer Spreader&EFB-Ext', '9/SANDY SOIL', '1', '58', '58', '0', '16-04-2021', '17', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', NULL, '036/RFC SMARTRI-HNAE/LSU.C/V/2021', '-', 'STS2021-00005036 Surat Permintaan Analisa LSU HNAE.xls', 'Menunggu Konfirmasi Batch'),
(18339, 'STS2021-00005', '49', '17-04-2021', 'HNAE5G-15/59', '49/HNAE5G-15/59', '', '2021000049', 'Ichsan Rezky .P', '120/LSU', '2021-06-05', 'Komersial', 'Normal', 'LSU', 'HNAE', 27, '', '2021-06-17', 'HNAE5', 'HNAE97D18', 'HNAE5G-15', 'D', '010304040403/Anorganic-Fertilizer Spreader&EFB-Ext', '9/SANDY SOIL', '1', '59', '59', '0', '17-04-2021', '17', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', NULL, '036/RFC SMARTRI-HNAE/LSU.C/V/2021', '-', 'STS2021-00005036 Surat Permintaan Analisa LSU HNAE.xls', 'Menunggu Konfirmasi Batch'),
(18340, 'STS2021-00005', '50', '14-04-2021', 'HNAE6J-09/63', '50/HNAE6J-09/63', '', '2021000050', 'Ichsan Rezky .P', '120/LSU', '2021-06-05', 'Komersial', 'Normal', 'LSU', 'HNAE', 27, '', '2021-06-17', 'HNAE6', 'HNAE96D20', 'HNAE6J-09', 'D', '010204020202/Anorganic-by Fertilizer Spreader', '2/S2-MIN', '1', '63', '63', '0', '14-04-2021', '17', 'x', 'x', 'x', 'x', 'x', NULL, 'x', NULL, NULL, 'x', NULL, NULL, '036/RFC SMARTRI-HNAE/LSU.C/V/2021', '-', 'STS2021-00005036 Surat Permintaan Analisa LSU HNAE.xls', 'Menunggu Konfirmasi Batch'),
(18341, 'STS2021-00005', '51', '15-04-2021', 'HNAE6G-07/64', '51/HNAE6G-07/64', '', '2021000051', 'Ichsan Rezky .P', '120/LSU', '2021-06-05', 'Komersial', 'Normal', 'LSU', 'HNAE', 27, '', '2021-06-17', 'HNAE6', 'HNAE97D19', 'HNAE6G-07', 'D', '010204020202/Anorganic-by Fertilizer Spreader', '2/S2-MIN', '1', '64', '64', '0', '15-04-2021', '17', 'x', 'x', 'x', 'x', 'x', NULL, 'x', NULL, NULL, 'x', NULL, NULL, '036/RFC SMARTRI-HNAE/LSU.C/V/2021', '-', 'STS2021-00005036 Surat Permintaan Analisa LSU HNAE.xls', 'Menunggu Konfirmasi Batch'),
(18342, 'STS2021-00005', '52', '16-04-2021', 'HNAE6G-09/65', '52/HNAE6G-09/65', '', '2021000052', 'Ichsan Rezky .P', '120/LSU', '2021-06-05', 'Komersial', 'Normal', 'LSU', 'HNAE', 27, '', '2021-06-17', 'HNAE6', 'HNAE97D19', 'HNAE6G-09', 'D', '010304040403/Anorganic-Fertilizer Spreader&EFB-Ext', '9/SANDY SOIL', '1', '65', '65', '0', '16-04-2021', '17', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', NULL, '036/RFC SMARTRI-HNAE/LSU.C/V/2021', '-', 'STS2021-00005036 Surat Permintaan Analisa LSU HNAE.xls', 'Menunggu Konfirmasi Batch'),
(18343, 'STS2021-00005', '53', '17-04-2021', 'HNAE6H-08/66', '53/HNAE6H-08/66', '', '2021000053', 'Ichsan Rezky .P', '120/LSU', '2021-06-05', 'Komersial', 'Normal', 'LSU', 'HNAE', 27, '', '2021-06-17', 'HNAE6', 'HNAE97D19', 'HNAE6H-08', 'D', '010204020202/Anorganic-by Fertilizer Spreader', '2/S2-MIN', '1', '66', '66', '0', '17-04-2021', '17', 'x', 'x', 'x', 'x', 'x', NULL, 'x', NULL, NULL, 'x', NULL, NULL, '036/RFC SMARTRI-HNAE/LSU.C/V/2021', '-', 'STS2021-00005036 Surat Permintaan Analisa LSU HNAE.xls', 'Menunggu Konfirmasi Batch'),
(18344, 'STS2021-00005', '54', '20-04-2021', 'HNAE6H-09/67', '54/HNAE6H-09/67', '', '2021000054', 'Ichsan Rezky .P', '120/LSU', '2021-06-05', 'Komersial', 'Normal', 'LSU', 'HNAE', 27, '', '2021-06-17', 'HNAE6', 'HNAE97D19', 'HNAE6H-09', 'D', '010204020202/Anorganic-by Fertilizer Spreader', '2/S2-MIN', '1', '67', '67', '0', '20-04-2021', '17', 'x', 'x', 'x', 'x', 'x', NULL, 'x', NULL, NULL, 'x', NULL, NULL, '036/RFC SMARTRI-HNAE/LSU.C/V/2021', '-', 'STS2021-00005036 Surat Permintaan Analisa LSU HNAE.xls', 'Menunggu Konfirmasi Batch');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_level_user`
--

CREATE TABLE `tbl_level_user` (
  `id_level_user` int(11) NOT NULL,
  `nama_level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_level_user`
--

INSERT INTO `tbl_level_user` (`id_level_user`, `nama_level`) VALUES
(1, 'Super Admin'),
(2, 'Admin'),
(3, 'Operator');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(40) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `id_level_user` int(11) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_lengkap`, `username`, `password`, `id_level_user`, `foto`) VALUES
(1, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 2, 'palm2.png'),
(5, 'Operator', 'operator', '4b583376b2767b923c3e1da60d10de59', 3, 'palm2.png'),
(7, 'Rahmat STS', 'rahmat', 'af2a4c9d4c4956ec9d6ba62213eed568', 1, ''),
(8, 'Super Admin', 'super', '1b3231655cebb7a1f783eddf27d254ca', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_rule`
--

CREATE TABLE `tbl_user_rule` (
  `id_rule` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `id_level_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_rule`
--

INSERT INTO `tbl_user_rule` (`id_rule`, `id_menu`, `id_level_user`) VALUES
(1, 16, 4),
(2, 1, 1),
(3, 2, 1),
(5, 4, 1),
(6, 5, 1),
(8, 8, 1),
(9, 11, 1),
(10, 6, 1),
(11, 14, 1),
(12, 15, 1),
(13, 13, 1),
(14, 12, 1),
(15, 10, 1),
(16, 9, 1),
(22, 1, 2),
(23, 2, 2),
(25, 4, 2),
(26, 17, 1),
(27, 18, 1),
(28, 36, 1),
(29, 31, 1),
(30, 32, 1),
(31, 33, 1),
(32, 34, 1),
(33, 35, 1),
(35, 10, 2),
(36, 5, 2),
(37, 6, 2),
(39, 9, 2),
(40, 11, 2),
(41, 12, 2),
(42, 15, 2),
(45, 31, 2),
(46, 32, 2),
(47, 33, 2),
(48, 34, 2),
(49, 35, 2),
(50, 36, 2),
(51, 1, 3),
(52, 2, 3),
(53, 4, 3),
(54, 5, 3),
(55, 6, 3),
(56, 7, 3),
(57, 9, 3),
(58, 10, 3),
(61, 8, 2),
(62, 20, 1),
(63, 21, 1),
(64, 71, 1),
(65, 13, 2),
(66, 14, 2),
(67, 71, 2);

-- --------------------------------------------------------

--
-- Table structure for table `trials`
--

CREATE TABLE `trials` (
  `kode` int(10) NOT NULL,
  `trial_code` varchar(200) NOT NULL DEFAULT '0',
  `title` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `location` varchar(16) NOT NULL,
  `region` varchar(60) NOT NULL,
  `psm` varchar(30) NOT NULL,
  `installation_date` date NOT NULL,
  `start` int(20) NOT NULL,
  `finish` int(20) NOT NULL,
  `status` varchar(100) NOT NULL,
  `last_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trials`
--

INSERT INTO `trials` (`kode`, `trial_code`, `title`, `description`, `location`, `region`, `psm`, `installation_date`, `start`, `finish`, `status`, `last_update`) VALUES
(1, 'BLS01', 'Kinetic of EFB decomposition after field application and impact on several environment parameters (1st year)', 'To assess the Impact of EFB decomposition on several environment parameters (soil, atmosphere, plant)', 'KNDE', 'Siak', 'PSM 5', '0000-00-00', 2015, 2017, '', '0000-00-00'),
(2, 'BLS02', 'Fauna feeding activities and macrofauna sampling method after trunk biomass removal in PLPE replanting area', 'Impact of trunk biomass removal after replanting on Macrofauna composition and soil fauna feeding activity', 'PLPE', 'Siak', 'PSM 5', '0000-00-00', 2016, 2041, '', '0000-00-00'),
(3, 'BLS03', 'Assessment the impact of dung beetle on soil fauna feeding activities', 'To assess the impact of dung beetle on biological soil fertility (soil fauna feeding activity)', 'LIBE', 'Siak', 'PSM 5', '0000-00-00', 2016, 2018, '', '0000-00-00'),
(4, 'BLS04', 'Assessment the impact of compost EFB on soil fauna feeding activities', 'To assess the impact of compost on biological soil fertility (soil fauna feeding activity)', 'LIBE', 'Siak', 'PSM 5', '0000-00-00', 2016, 2018, '', '0000-00-00'),
(5, 'BLS05', 'Impact of slash and burn activity on soil quality ', 'To identify the impact of slash and burn on agriculture practices on soil quality and to see the recovery time needed by the soil after burned (physical, chemical, and biological parameter', 'West Kalimantan', 'West Kalimantan', 'PSM 7', '0000-00-00', 2017, 2018, '', '0000-00-00'),
(6, 'BLS06', 'Study of the impact of NPK fertilizer on the physical, chemical, and biological activity in the soil in a mature oil palm plantation', 'To identify the impact of long and short term effect of NPK fertilizer application on soil fauna feeding activity', 'KNDE', 'Siak', 'PSM 5', '0000-00-00', 2017, 2018, '', '0000-00-00'),
(7, 'BLS07', 'Kinetic of EFB decomposition after field application and impact on several environment parameters (2nd st year)', 'Impact of EFB decomposition on several environment parameters (soil, atmosphere, plant)', 'KNDE', 'Siak', 'PSM 5', '0000-00-00', 2017, 2019, '', '0000-00-00'),
(8, 'BLS09', 'Impact of various slopes and agriculture practices to the biological soil properties.', 'To assess the impact of various slopes and agriculture practices to the biological, chemical, and physical soil properties.', 'SRKE', 'Siak', 'PSM 5', '0000-00-00', 2018, 2018, '', '0000-00-00'),
(9, 'BLS10', 'Impact of long term EFB application to the biological soil properties', 'To assess the impact of EFB application to biological soil properties', 'SBYE', 'Siak', 'PSM 5', '0000-00-00', 2018, 2020, '', '0000-00-00'),
(17, 'BLS14', 'BEFTA Project', 'To quantify the effect of habitat compexity within oil palm plantations on soil biodiversity and soil health', 'UTNE', 'Siak', 'PSM 5', '0000-00-00', 2020, 2025, '', '0000-00-00'),
(18, 'BLS14', 'BEFTA Project', 'To quantify the effect of habitat compexity within oil palm plantations on soil biodiversity and soil health', 'KNDE', 'Siak', 'PSM 5', '0000-00-00', 2020, 2025, '', '0000-00-00'),
(19, 'BLS15', 'Fertigasi (SBYE)', 'To assess the impact of irrigation rates to biological soil properties (soil fauna feeding activity and macrofauna composition)', 'SBYE', 'Lampung', 'PSM 2', '0000-00-00', 2019, 2020, '', '0000-00-00'),
(20, 'BLS11', 'RERTA Project', 'To asses the impact of riparian modification to the river water quality', 'PLPE', 'Siak', 'PSM 5', '0000-00-00', 2017, 2027, '', '0000-00-00'),
(21, 'BLS11', 'RERTA Project', 'To asses the impact of riparian modification to the river water quality', 'KNDE', 'Siak', 'PSM 5', '0000-00-00', 2018, 2028, '', '0000-00-00'),
(22, 'BLS12', 'Soil fauna feeding activities after NPK fertilizer application (long and short term effect) at mature oil palm plantation', 'To identify the impact of long and short term impact of NPK fertilizer application on soil fauna feeding activity in several type of soil (mineral, sandy, clay, and peat)', 'NSAE', 'Kampar', 'PSM 5', '0000-00-00', 2019, 2020, '', '0000-00-00'),
(23, 'BLS12', 'Soil fauna feeding activities after NPK fertilizer application (long and short term effect) at mature oil palm plantation', 'To identify the impact of long and short term impact of NPK fertilizer application on soil fauna feeding activity in several type of soil (mineral, sandy, clay, and peat)', 'BPME', 'Indragiri', 'PSM 5', '0000-00-00', 2019, 2020, '', '0000-00-00'),
(24, 'BLS12', 'Soil fauna feeding activities after NPK fertilizer application (long and short term effect) at mature oil palm plantation', 'To identify the impact of long and short term impact of NPK fertilizer application on soil fauna feeding activity in several type of soil (mineral, sandy, clay, and peat)', 'SBYE', 'Lampung', 'PSM 2', '0000-00-00', 2019, 2020, '', '0000-00-00'),
(25, 'BLS12', 'Soil fauna feeding activities after NPK fertilizer application (long and short term effect) at mature oil palm plantation', 'To identify the impact of long and short term impact of NPK fertilizer application on soil fauna feeding activity in several type of soil (mineral, sandy, clay, and peat)', 'TRSE', 'Belitung', 'PSM 2', '0000-00-00', 2019, 2020, '', '0000-00-00'),
(26, 'BLS12', 'Soil fauna feeding activities after NPK fertilizer application (long and short term effect) at mature oil palm plantation', 'To identify the impact of long and short term impact of NPK fertilizer application on soil fauna feeding activity in several type of soil (mineral, sandy, clay, and peat)', 'BMRE', 'Jambi', 'PSM 1', '0000-00-00', 2019, 2020, '', '0000-00-00'),
(27, 'BLS12', 'Soil fauna feeding activities after NPK fertilizer application (long and short term effect) at mature oil palm plantation', 'To identify the impact of long and short term impact of NPK fertilizer application on soil fauna feeding activity in several type of soil (mineral, sandy, clay, and peat)', 'MTWE', 'Palembang', 'PSM 2', '0000-00-00', 2019, 2022, '', '0000-00-00'),
(28, 'BLS12', 'Soil fauna feeding activities after NPK fertilizer application (long and short term effect) at mature oil palm plantation', 'To identify the impact of long and short term impact of NPK fertilizer application on soil fauna feeding activity in several type of soil (mineral, sandy, clay, and peat)', 'HNAE', 'Kalimantan Tengah', 'Kalimantan Tengah', '0000-00-00', 2019, 2020, '', '0000-00-00');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_user`
--
CREATE TABLE `view_user` (
`id_user` int(11)
,`nama_lengkap` varchar(40)
,`username` varchar(30)
,`password` varchar(40)
,`id_level_user` int(11)
,`foto` text
,`nama_level` varchar(30)
);

-- --------------------------------------------------------

--
-- Structure for view `view_user`
--
DROP TABLE IF EXISTS `view_user`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_user`  AS  select `tu`.`id_user` AS `id_user`,`tu`.`nama_lengkap` AS `nama_lengkap`,`tu`.`username` AS `username`,`tu`.`password` AS `password`,`tu`.`id_level_user` AS `id_level_user`,`tu`.`foto` AS `foto`,`tlu`.`nama_level` AS `nama_level` from (`tbl_user` `tu` join `tbl_level_user` `tlu`) where (`tu`.`id_level_user` = `tlu`.`id_level_user`) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_data`
--
ALTER TABLE `tabel_data`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tabel_log`
--
ALTER TABLE `tabel_log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `tabel_menu`
--
ALTER TABLE `tabel_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_batch`
--
ALTER TABLE `table_batch`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `table_sample`
--
ALTER TABLE `table_sample`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_level_user`
--
ALTER TABLE `tbl_level_user`
  ADD PRIMARY KEY (`id_level_user`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tbl_user_rule`
--
ALTER TABLE `tbl_user_rule`
  ADD PRIMARY KEY (`id_rule`);

--
-- Indexes for table `trials`
--
ALTER TABLE `trials`
  ADD PRIMARY KEY (`kode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tabel_data`
--
ALTER TABLE `tabel_data`
  MODIFY `kode` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
--
-- AUTO_INCREMENT for table `tabel_log`
--
ALTER TABLE `tabel_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=655;
--
-- AUTO_INCREMENT for table `tabel_menu`
--
ALTER TABLE `tabel_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `table_batch`
--
ALTER TABLE `table_batch`
  MODIFY `kode` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18345;
--
-- AUTO_INCREMENT for table `table_sample`
--
ALTER TABLE `table_sample`
  MODIFY `kode` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18345;
--
-- AUTO_INCREMENT for table `tbl_level_user`
--
ALTER TABLE `tbl_level_user`
  MODIFY `id_level_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_user_rule`
--
ALTER TABLE `tbl_user_rule`
  MODIFY `id_rule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `trials`
--
ALTER TABLE `trials`
  MODIFY `kode` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
