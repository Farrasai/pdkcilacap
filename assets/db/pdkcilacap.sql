-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2021 at 08:23 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdkcilacap`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `seo_judul` varchar(250) NOT NULL,
  `konten` text NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `foto` varchar(250) NOT NULL,
  `file` varchar(250) NOT NULL,
  `date` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `is_active` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `seo_judul`, `konten`, `kategori`, `foto`, `file`, `date`, `updated_at`, `is_active`) VALUES
(2, 'Aku ingin dia', 'tapi dia suka sama yang lain', 'Pada suatu hari aku menyatakan perasaanku padanya, namun ternyata dia punya do\'i, aku harus apa???', 'BIDANG DIKDAS', '1590877082080.png', 'lb1GjcSe8NduqUkAqqRLCiwF01yXMYcEJyhclLUq.xlsx', '2021-02-03 00:00:00', '2021-02-08 00:00:00', '1'),
(3, 'Nyoba lagi bro', 'kalu ngga bisa ya udah saya males', 'mas Farras jahat', 'BIDANG SARPRAS', 'tut-wuri-handayani-7759.png', 'Setting VPN.docx', '2021-02-01 00:00:00', '2021-02-18 00:00:00', '1'),
(5, 'HAHAHHAHAH', 'meow meow meow', 'aku suka diaaaa ahdado;hdhahdadawd', 'BIDANG PPTK', '1590877082080.png', '4611418077-1602flowchart_ProposPKL-educa_studio-signed.pdf', '2021-02-18 00:00:00', '2021-02-18 00:00:00', '1'),
(6, 'KONYOL', 'aaaaa sebel', 'kenapa tidak jadiii??????', 'BIDANG DIKDAS', '1590877082080.png', 'Surat persetujuan proposal PKL_4611418044_Fahri Raditya Wicaksana.pdf', '2021-02-18 00:00:00', '2021-02-18 00:00:00', '1'),
(8, 'aa', 'aaa', 'aaaaa', 'BIDANG PPTK', '1590877082080.png', '4611418077-1602flowchart_ProposPKL-educa_studio-signed.pdf', '2021-02-18 00:00:00', '2021-02-18 00:00:00', '1'),
(9, 'asasdada', 'adfwffs', 'fqwaqW YMBV NXBMGFDWWDS MJDDNXC VFJDIWK BXSEVDI Dcsd fdv', 'BIDANG PPTK', '1590877082080.png', 'Surat persetujuan proposal PKL_4611418044_Fahri Raditya Wicaksana.pdf', '2021-02-18 00:00:00', '2021-02-18 00:00:00', '1');

-- --------------------------------------------------------

--
-- Table structure for table `biografi`
--

CREATE TABLE `biografi` (
  `id_biografi` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `alamat_kantor` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `lhkpn` varchar(250) NOT NULL,
  `foto` varchar(250) NOT NULL,
  `pendidikan` text NOT NULL,
  `karir` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `biografi`
--

INSERT INTO `biografi` (`id_biografi`, `nama`, `jabatan`, `alamat_kantor`, `deskripsi`, `lhkpn`, `foto`, `pendidikan`, `karir`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', 'Kepala Dinas', 'jl.Kenangan bersama dia no 1 RT69/RW 57', 'KEQINGG........... KEEEQIIING KEEQIING KEEEEEEEGIIIIIING AAAAAAAAA WANGI WANGI WANGI WANGI HU HA HU HA HU HA, aaaah baunya KEQING wangi aku mau nyiumin aroma wanginya KEQING AAAAAAAAH ~~ Rambutnya.... aaah rambutnya juga pengen aku elus-elus ~~~~~ AAAAAH KEQING MANIS BANGET YAAMPUN. dia JUGA PAKE STOCKING IMUT BANGET AAAAAAAAH KEQING LUCCUUUUUUUUUUUUUUU............ GUA BAKAL BAKAR DUIT 12 JUTA RUPIAH BUAT KEQING AAAAAAAAAAAAAAAAAAAAAAAAAAAAAGH\r\napa ? KEQING itu gak nyata ? Cuma karakter 2 dimensi katamu ? nggak, ngak ngak ngak ngak', '21274', 'breathing.png', 'SMA/SEDERAJAT', 'Profesor Percintaan', '2021-02-16 00:00:00', '2021-02-16 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id_faq` int(11) NOT NULL,
  `author` varchar(250) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `laporan_ppid`
--

CREATE TABLE `laporan_ppid` (
  `id_laporan` int(11) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `tahun` varchar(11) NOT NULL,
  `unduh` varchar(250) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ppid_berkala`
--

CREATE TABLE `ppid_berkala` (
  `id_berkala` int(11) NOT NULL,
  `Judul` varchar(250) NOT NULL,
  `isi` text NOT NULL,
  `unduh` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ppid_sertamerta`
--

CREATE TABLE `ppid_sertamerta` (
  `id_sertamerta` int(11) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `isi` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ppid_setiapsaat`
--

CREATE TABLE `ppid_setiapsaat` (
  `id_setiapsaat` int(11) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `isi` text NOT NULL,
  `unduh` varchar(250) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `tugas_fungsi` text NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sop`
--

CREATE TABLE `sop` (
  `id_sop` int(11) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `unduh` varchar(250) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `unitkerja`
--

CREATE TABLE `unitkerja` (
  `id_unitkerja` int(11) NOT NULL,
  `nama_unit` varchar(250) NOT NULL,
  `deskripsi` varchar(250) NOT NULL,
  `struktur_bidang` varchar(250) NOT NULL,
  `icon` varchar(250) NOT NULL,
  `foto` varchar(250) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `pimpinan` varchar(50) NOT NULL,
  `kontak` int(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `maps` varchar(250) NOT NULL,
  `jumlah_pegawai` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `namalengkap` varchar(250) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `foto` varchar(250) NOT NULL,
  `level` enum('admin','user','guest') NOT NULL,
  `block` enum('N','Y') NOT NULL,
  `id_sessions` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `ip` varchar(250) NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `biografi`
--
ALTER TABLE `biografi`
  ADD PRIMARY KEY (`id_biografi`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id_faq`);

--
-- Indexes for table `laporan_ppid`
--
ALTER TABLE `laporan_ppid`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `ppid_berkala`
--
ALTER TABLE `ppid_berkala`
  ADD PRIMARY KEY (`id_berkala`);

--
-- Indexes for table `ppid_sertamerta`
--
ALTER TABLE `ppid_sertamerta`
  ADD PRIMARY KEY (`id_sertamerta`);

--
-- Indexes for table `ppid_setiapsaat`
--
ALTER TABLE `ppid_setiapsaat`
  ADD PRIMARY KEY (`id_setiapsaat`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `sop`
--
ALTER TABLE `sop`
  ADD PRIMARY KEY (`id_sop`);

--
-- Indexes for table `unitkerja`
--
ALTER TABLE `unitkerja`
  ADD PRIMARY KEY (`id_unitkerja`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `biografi`
--
ALTER TABLE `biografi`
  MODIFY `id_biografi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id_faq` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laporan_ppid`
--
ALTER TABLE `laporan_ppid`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ppid_berkala`
--
ALTER TABLE `ppid_berkala`
  MODIFY `id_berkala` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ppid_sertamerta`
--
ALTER TABLE `ppid_sertamerta`
  MODIFY `id_sertamerta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ppid_setiapsaat`
--
ALTER TABLE `ppid_setiapsaat`
  MODIFY `id_setiapsaat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sop`
--
ALTER TABLE `sop`
  MODIFY `id_sop` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `unitkerja`
--
ALTER TABLE `unitkerja`
  MODIFY `id_unitkerja` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
