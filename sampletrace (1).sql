-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2021 at 10:24 AM
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
(2, 'R. Adhi Nugroho', 232321334, 'SSQC', '082222222222');

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
(94, 'STS2021-00001', 'Muhammad Rahmat', 'MPD/12/LAB', '2021-06-01', 'Trial', 'Normal', 'LSU', 'SRKE', 10, '', '2021-06-16', 'STS2021-00001', 'Sample Diterima Admin'),
(95, 'STS2021-00002', 'R. Adhi Nugroho', 'MPD/13-2021/LAB', '2021-03-01', 'Trial', 'Normal', 'LSU', 'LIBE', 21, '', '2021-06-16', 'STS2021-00002', 'Sample Diterima Admin');

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
(604, '2021-06-16 06:50:06', '2021-06-16 06:50:06', 'Rahmat STS', 0, 'Login Aplikasi ', 'Login', '');

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
(15, 'Daftar Batch', 'daftarantrian', 'fa fa-table', 0),
(19, 'Download File', 'download', 'fa fa-download', 0),
(20, 'User Management', 'user', 'fa fa-id-badge', 0),
(21, 'Menu', 'menu', 'fa fa-list', 0),
(70, 'Data Monitoring Admin', 'dataadmin', 'fa fa-id-card', 0),
(71, 'Biodata', 'biodata', 'fa fa-address-card', 0);

-- --------------------------------------------------------

--
-- Table structure for table `table_sample`
--

CREATE TABLE `table_sample` (
  `kode` int(10) NOT NULL,
  `id_reg` varchar(20) NOT NULL,
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
  `sample_date` varchar(50) NOT NULL,
  `frond_no` varchar(50) NOT NULL,
  `n` varchar(50) NOT NULL,
  `p` varchar(50) NOT NULL,
  `k` varchar(50) NOT NULL,
  `mg` varchar(50) NOT NULL,
  `ca` varchar(50) NOT NULL,
  `mn` varchar(50) NOT NULL,
  `b` varchar(50) NOT NULL,
  `zn` varchar(50) NOT NULL,
  `cu` varchar(50) NOT NULL,
  `ci` varchar(50) NOT NULL,
  `fe` varchar(50) NOT NULL,
  `na` varchar(50) NOT NULL,
  `ref_rfc` varchar(50) NOT NULL,
  `ref_lab` varchar(50) NOT NULL,
  `berkas` text,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(7, 'Rahmat STS', 'rahmat', 'af2a4c9d4c4956ec9d6ba62213eed568', 1, '');

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
(64, 71, 1);

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
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tabel_data`
--
ALTER TABLE `tabel_data`
  MODIFY `kode` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
--
-- AUTO_INCREMENT for table `tabel_log`
--
ALTER TABLE `tabel_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=605;
--
-- AUTO_INCREMENT for table `tabel_menu`
--
ALTER TABLE `tabel_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `table_sample`
--
ALTER TABLE `table_sample`
  MODIFY `kode` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_level_user`
--
ALTER TABLE `tbl_level_user`
  MODIFY `id_level_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_user_rule`
--
ALTER TABLE `tbl_user_rule`
  MODIFY `id_rule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `trials`
--
ALTER TABLE `trials`
  MODIFY `kode` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
