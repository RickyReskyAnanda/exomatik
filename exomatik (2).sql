-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2017 at 12:17 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `exomatik`
--
CREATE DATABASE IF NOT EXISTS `exomatik` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `exomatik`;

-- --------------------------------------------------------

--
-- Table structure for table `table_anggota`
--

CREATE TABLE IF NOT EXISTS `table_anggota` (
  `id_anggota` int(5) NOT NULL AUTO_INCREMENT,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('laki-laki','perempuan') NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `angkatan` int(3) NOT NULL,
  `status` enum('anggota','pengurus') NOT NULL,
  `foto` varchar(30) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `konfirmasi` int(3) NOT NULL,
  `email_anggota` varchar(50) NOT NULL,
  `pass_anggota` varchar(50) NOT NULL,
  `userlevel` enum('blokir','user','admin') NOT NULL,
  PRIMARY KEY (`id_anggota`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='tabel anggota dimana semua nggota yang terdaftar memiliki akun secara langsung' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `table_anggota`
--

INSERT INTO `table_anggota` (`id_anggota`, `nik`, `nama`, `tgl_lahir`, `jk`, `no_hp`, `angkatan`, `status`, `foto`, `tempat_lahir`, `konfirmasi`, `email_anggota`, `pass_anggota`, `userlevel`) VALUES
(1, '212200409001', 'Ricky Resky Ananda', '1996-07-24', 'laki-laki', '081355553758', 9, 'anggota', 'anggota_20170209010253.jpg', 'Parepare', 0, 'rra.rickyresky@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `table_donasi`
--

CREATE TABLE IF NOT EXISTS `table_donasi` (
  `id_donasi` int(4) NOT NULL AUTO_INCREMENT,
  `id_donatur` int(5) NOT NULL,
  `tanggal` int(5) NOT NULL,
  `bulan` int(5) NOT NULL,
  `tahun` int(5) NOT NULL,
  PRIMARY KEY (`id_donasi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='tabel ini untuk mencatat pemasukan' AUTO_INCREMENT=6 ;

--
-- Dumping data for table `table_donasi`
--

INSERT INTO `table_donasi` (`id_donasi`, `id_donatur`, `tanggal`, `bulan`, `tahun`) VALUES
(2, 1, 24, 1, 2017),
(3, 1, 23, 2, 2017),
(4, 1, 23, 5, 2017),
(5, 3, 28, 2, 2017);

-- --------------------------------------------------------

--
-- Table structure for table `table_donatur`
--

CREATE TABLE IF NOT EXISTS `table_donatur` (
  `id_donatur` int(5) NOT NULL AUTO_INCREMENT,
  `nama_donatur` varchar(50) NOT NULL,
  `tgl_lahir_donatur` date NOT NULL,
  `pekerjaan_donatur` varchar(50) NOT NULL,
  `jk_donatur` enum('laki-laki','perempuan') NOT NULL,
  `no_hp_donatur` varchar(20) NOT NULL,
  `alamat_donatur` tinytext NOT NULL,
  `nominal_donatur` varchar(15) NOT NULL,
  `foto_donatur` varchar(50) NOT NULL,
  PRIMARY KEY (`id_donatur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='tabel ini untuk biodata donatur' AUTO_INCREMENT=4 ;

--
-- Dumping data for table `table_donatur`
--

INSERT INTO `table_donatur` (`id_donatur`, `nama_donatur`, `tgl_lahir_donatur`, `pekerjaan_donatur`, `jk_donatur`, `no_hp_donatur`, `alamat_donatur`, `nominal_donatur`, `foto_donatur`) VALUES
(1, 'Ricky', '1996-07-24', 'Mahasiswa', 'laki-laki', '08181821280', 'Parepare', '20000', 'donatur_20170227080231.jpg'),
(2, 'Resku', '2001-02-12', 'Peerja', 'laki-laki', '232332', 'aasdaskd laksdka sldasdas', '30000', 'donatur_20170227101335.PNG'),
(3, 'Fitri Arsyahh', '1997-12-27', 'Mahasiswi', 'perempuan', '090329403242', 'sinjai', '30000', 'donatur_20170228012640.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `table_download`
--

CREATE TABLE IF NOT EXISTS `table_download` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `link` text NOT NULL,
  `tgl_input` datetime NOT NULL,
  `nonaktif` enum('tidak','ya') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `table_download`
--

INSERT INTO `table_download` (`id`, `nama`, `link`, `tgl_input`, `nonaktif`) VALUES
(7, 'ricky', 'asdasdasda', '0000-00-00 00:00:00', 'tidak'),
(8, 'file formulir data download', 'http://exomatikcrew.org', '0000-00-00 00:00:00', 'tidak'),
(9, 'huauahaha', 'bererere.com', '0000-00-00 00:00:00', 'tidak'),
(10, 'adas', 'asdasd', '0000-00-00 00:00:00', 'tidak');

-- --------------------------------------------------------

--
-- Table structure for table `table_foto`
--

CREATE TABLE IF NOT EXISTS `table_foto` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `nama_foto` varchar(50) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `id_back` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `table_foto`
--

INSERT INTO `table_foto` (`id`, `nama_foto`, `jenis`, `id_back`) VALUES
(17, 'portofolio_20170224044116.jpg', 'portofolio', 9),
(18, 'portofolio_20170224044117.jpg', 'portofolio', 9),
(19, 'portofolio_20170224044119.jpg', 'portofolio', 9),
(20, 'portofolio_20170224044121.jpg', 'portofolio', 9),
(21, 'portofolio_20170224044122.jpg', 'portofolio', 9),
(22, 'portofolio_20170224044123.jpg', 'portofolio', 9),
(23, 'portofolio_20170224044124.jpg', 'portofolio', 9),
(24, 'portofolio_20170224044126.jpg', 'portofolio', 9);

-- --------------------------------------------------------

--
-- Table structure for table `table_jenis_tutorial`
--

CREATE TABLE IF NOT EXISTS `table_jenis_tutorial` (
  `id_jenis_tutorial` int(3) NOT NULL AUTO_INCREMENT,
  `nama_jenis_tutorial` varchar(30) NOT NULL,
  `keterangan` tinytext NOT NULL,
  `waktu` datetime NOT NULL,
  `nonaktif` enum('ya','tidak') NOT NULL,
  PRIMARY KEY (`id_jenis_tutorial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `table_jenis_tutorial`
--

INSERT INTO `table_jenis_tutorial` (`id_jenis_tutorial`, `nama_jenis_tutorial`, `keterangan`, `waktu`, `nonaktif`) VALUES
(1, 'Web Programming', 'jenis pemrograman web. Nantinya akan digunakan dalam pengkategorian khusus web', '2017-02-14 00:00:00', 'tidak'),
(4, 'Android Programming', 'Ini keternagannansd an', '2017-02-06 11:39:30', 'tidak'),
(5, 'Desktop Programming', 'Perlu adanya pembelajaran desktop untuk tetap meningkatkan pengembangan program dari segala sisi', '2017-02-07 05:31:33', 'tidak');

-- --------------------------------------------------------

--
-- Table structure for table `table_kategori_tutorial`
--

CREATE TABLE IF NOT EXISTS `table_kategori_tutorial` (
  `id_kt` int(3) NOT NULL AUTO_INCREMENT,
  `nama_kt` varchar(50) NOT NULL,
  `gambar_kt` varchar(50) NOT NULL,
  `waktu_kt` datetime NOT NULL,
  `keterangan_kt` tinytext NOT NULL,
  `id_jenis_tutorial` int(3) NOT NULL,
  `nonaktif_kt` enum('ya','tidak') NOT NULL,
  PRIMARY KEY (`id_kt`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `table_kategori_tutorial`
--

INSERT INTO `table_kategori_tutorial` (`id_kt`, `nama_kt`, `gambar_kt`, `waktu_kt`, `keterangan_kt`, `id_jenis_tutorial`, `nonaktif_kt`) VALUES
(2, 'Laravel Framework', 'kt_20170207040839.PNG', '2017-02-05 11:33:39', 'laravel merupakan framework yang digunakan dalam dunia kerja', 1, 'tidak'),
(3, 'Codeigniter Framework', 'kt_20170207060430.png', '2017-02-07 06:04:30', 'Perlunya ada kategori ini karena kebanyakan belajar framework php mulai dari codeigniter', 1, 'tidak');

-- --------------------------------------------------------

--
-- Table structure for table `table_komentar`
--

CREATE TABLE IF NOT EXISTS `table_komentar` (
  `id_komentar` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `komentar` tinytext NOT NULL,
  `email` varchar(50) NOT NULL,
  `waktu` datetime NOT NULL,
  `status` enum('diterima','menunggu') NOT NULL,
  PRIMARY KEY (`id_komentar`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `table_komentar`
--

INSERT INTO `table_komentar` (`id_komentar`, `nama`, `komentar`, `email`, `waktu`, `status`) VALUES
(1, 'ricky', 'huhuhuhuhuhuhuhuhuh', 'email@gmail.com', '0000-00-00 00:00:00', 'diterima'),
(2, 'ricky', 'hhhhggggggggg  ggg g g g g g gggg', 'email@gmail.com', '0000-00-00 00:00:00', 'diterima'),
(3, 'qweqwe', 'gjhjh hb hbjhjbk bh bkjhbk h', 'qweqweqw@mail.com', '0000-00-00 00:00:00', 'diterima'),
(4, '', '', 'mm', '2017-02-24 12:11:10', 'menunggu');

-- --------------------------------------------------------

--
-- Table structure for table `table_konten`
--

CREATE TABLE IF NOT EXISTS `table_konten` (
  `id_konten` int(5) NOT NULL AUTO_INCREMENT,
  `judul_konten` varchar(120) DEFAULT NULL,
  `deskripsi` text NOT NULL,
  `isi_konten` mediumtext,
  `status` enum('rilis','draft') DEFAULT NULL,
  `gambar` mediumtext,
  `tag` tinytext NOT NULL,
  `tgl_rilis` datetime DEFAULT NULL,
  `viewers` int(5) NOT NULL,
  `id_anggota` int(5) DEFAULT NULL,
  `likers` int(5) NOT NULL,
  `komentar` int(5) NOT NULL,
  PRIMARY KEY (`id_konten`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `table_konten`
--

INSERT INTO `table_konten` (`id_konten`, `judul_konten`, `deskripsi`, `isi_konten`, `status`, `gambar`, `tag`, `tgl_rilis`, `viewers`, `id_anggota`, `likers`, `komentar`) VALUES
(2, 'C# menjadi bahasa pemrograman terpopuler saat ini', 'ini adalah  deskripsi singkat dari sini', '<p>Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan <br><br>bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla</p>', 'rilis', 'konten_20161001021051.jpg', 'jaringan,desain', '2016-10-01 00:00:00', 1, 3, 0, 0),
(3, 'Exomatik Mengadakan lomba makan krupuk se indonesia ', 'ini adalah  deskripsi singkat dari sini', '<p>Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan <br><br>bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla</p>', 'rilis', 'konten_20161001021045.jpg', 'jaringan,komputer,mouse roll', '2016-10-01 00:00:00', 3, 3, 0, 0),
(4, 'Kak Bobo menjadi ketua DPO peride 2016-2017', 'ini adalah  deskripsi singkat dari sini', '<p>Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan <br><br>bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla</p>', 'rilis', 'konten_20161001021033.jpg', 'jaringan,komputer,mouse roll', '2016-10-01 00:00:00', 9, 3, 0, 0),
(5, 'Html bisa ? Berarti Masih Ada Jalan', 'ini adalah  deskripsi singkat dari sini', '<p>Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan <br><br>bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla</p>', 'rilis', 'konten_20161001051025.jpg', 'jaringan,komputer,mouse roll', '2016-10-01 00:00:00', 0, 3, 0, 0),
(40, 'CARA MENTRANSFER DAN MENGELOLA FILE DI FTP VIA FILEZILLA', 'Cara login ke server FTP via FileZilla sangat mudah. Berikut contoh login ke server FTP Microsoft :\r\nHost : isikan alamat server FTP. Susunan alamat server FTP biasanya adalah ftp.namadomain.comatau cukup dengan namadomain.com. Sebagai latihan, dipak', '                                                                                                                                                            <span style="color: rgb(85, 85, 85); font-family: ''Open Sans'', sans-serif; line-height: 20px;">menggunakan FileZilla.</span><br style="color: rgb(85, 85, 85); font-family: ''Open Sans'', sans-serif; line-height: 20px;"><a href="http://www.blogger.com/blogger.g?blogID=972287355657219078" name="more" style="margin: 0px; padding: 0px; border: 0px; font-stretch: inherit; line-height: 20px; font-family: ''Open Sans'', sans-serif; vertical-align: baseline; outline: 0px; color: rgb(85, 85, 85); transition: color 0.1s linear; background-color: rgb(255, 255, 255);"></a><br style="color: rgb(85, 85, 85); font-family: ''Open Sans'', sans-serif; line-height: 20px;"><span style="margin: 0px; padding: 0px; border: 0px; font-weight: inherit; font-stretch: inherit; line-height: 20px; font-family: ''Open Sans'', sans-serif; vertical-align: baseline; color: rgb(85, 85, 85);">Login ke Server FTP</span><br style="color: rgb(85, 85, 85); font-family: ''Open Sans'', sans-serif; line-height: 20px;"><br style="color: rgb(85, 85, 85); font-family: ''Open Sans'', sans-serif; line-height: 20px;"><span style="color: rgb(85, 85, 85); font-family: ''Open Sans'', sans-serif; line-height: 20px;">Cara login ke server FTP via FileZilla sangat mudah. Berikut contoh login ke server FTP Microsoft :</span><br style="color: rgb(85, 85, 85); font-family: ''Open Sans'', sans-serif; line-height: 20px;"><ul style="margin-right: 0px; margin-bottom: 0px; margin-left: 40px; padding: 0px; border: 0px; font-stretch: inherit; line-height: 20px; font-family: ''Open Sans'', sans-serif; vertical-align: baseline; color: rgb(85, 85, 85);"><li style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;"><span style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">Host </span>: isikan alamat server FTP. Susunan alamat server FTP biasanya adalah <span style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">ftp.namadomain.com</span>atau cukup dengan <span style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">namadomain.com</span>. Sebagai latihan, dipakai <span style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">ftp.microsoft.com</span>.</li><li style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;"><span style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">Username </span>: isikan username Anda. Jika yang Anda akses adalah server publik, isikan <span style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">anonymous</span>. Jika yang Anda akses adalah server hosting Anda, isikan username hosting Anda.</li><li style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;"><span style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">Password </span>: isikan password Anda. Jika yang Anda akses adalah server publik, isikan alamat email Anda. Jika yang Anda akses adalah server hosting Anda, isikan password hosting Anda.</li><li style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;"><span style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">Port </span>: Biarkan kosong, atau isi angka <span style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">21</span>. Port default untuk akses FTP umumnya adalah port 21.</li></ul><span style="color: rgb(85, 85, 85); font-family: ''Open Sans'', sans-serif; line-height: 20px;">Klik </span><span style="margin: 0px; padding: 0px; border: 0px; font-weight: inherit; font-stretch: inherit; line-height: 20px; font-family: ''Open Sans'', sans-serif; vertical-align: baseline; color: rgb(85, 85, 85);">Quickconnect </span><span style="color: rgb(85, 85, 85); font-family: ''Open Sans'', sans-serif; line-height: 20px;">atau tekan </span><span style="margin: 0px; padding: 0px; border: 0px; font-weight: inherit; font-stretch: inherit; line-height: 20px; font-family: ''Open Sans'', sans-serif; vertical-align: baseline; color: rgb(85, 85, 85);">Enter </span><span style="color: rgb(85, 85, 85); font-family: ''Open Sans'', sans-serif; line-height: 20px;">untuk mengakses. Perhatikan pada kolom di bawahnya akan tampil proses authentifikasi. Jika berhasil login, maka akan muncul sebaris pesan </span><span style="margin: 0px; padding: 0px; border: 0px; font-weight: inherit; font-stretch: inherit; line-height: 20px; font-family: ''Open Sans'', sans-serif; vertical-align: baseline; color: rgb(85, 85, 85);">Directory listing successful </span><span style="color: rgb(85, 85, 85); font-family: ''Open Sans'', sans-serif; line-height: 20px;">dan pada kolom </span><span style="margin: 0px; padding: 0px; border: 0px; font-weight: inherit; font-stretch: inherit; line-height: 20px; font-family: ''Open Sans'', sans-serif; vertical-align: baseline; color: rgb(85, 85, 85);">Remote site</span><span style="color: rgb(85, 85, 85); font-family: ''Open Sans'', sans-serif; line-height: 20px;"> di sebelah kanan akan muncul daftar file dan folder yang ada di server FTP.</span><br style="color: rgb(85, 85, 85); font-family: ''Open Sans'', sans-serif; line-height: 20px;"><br style="color: rgb(85, 85, 85); font-family: ''Open Sans'', sans-serif; line-height: 20px;"><table align="center" cellpadding="0" cellspacing="0" class="tr-caption-container" style="margin: 0px auto 0.5em; padding: 4px; border: 0px; font-stretch: inherit; line-height: 20px; font-family: ''Open Sans'', sans-serif; vertical-align: baseline; color: rgb(85, 85, 85); text-align: center; background-color: rgb(255, 255, 255);"><tbody style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;"><tr style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;"><td style="margin: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;"><a href="http://1.bp.blogspot.com/-HsEWBTAYVvo/UCvHObAbPdI/AAAAAAAAAZo/smGL6hQ7tbM/s1600/ftp2.jpg" style="margin: 0px auto; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline; outline: 0px; color: rgb(85, 85, 85); transition: color 0.1s linear;"><img alt="Login ke Server FTP" border="0" height="118" src="http://1.bp.blogspot.com/-HsEWBTAYVvo/UCvHObAbPdI/AAAAAAAAAZo/smGL6hQ7tbM/s400/ftp2.jpg" title="" width="400" style="margin: 0px; padding: 0px; border-width: initial; border-style: none; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: bottom; height: auto; display: block; width: auto; max-width: 100%;"></a></td></tr><tr style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;"><td class="tr-caption" style="margin: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 10.4px; line-height: inherit; font-family: inherit; vertical-align: baseline;">Login ke Server FTP<br><br></td></tr></tbody></table>                                                                                                                                                ', 'rilis', 'konten_20170221115942.png', 'asdas,asd,asdas,da,sd,asd,asd,asd,asd,', '2017-01-10 00:00:00', 0, 3, 0, 56),
(41, 'Program Beasiswa Kuliah Di Telkom University Bersama IDCloudHost', 'IDCloudHost merupakan salah satu web hosting provider yang ada di Indonesia dengan menawarkan layanan seperti pendaftaran domain, cloud hosting, server (VPS & Dedicated Server), reseller domain & hosting, dan beberapa layanan lainnya.', '                                                    <p style="margin-bottom: 35px; color: rgb(52, 52, 52); font-family: Lora, serif; font-size: 19px; line-height: 36px;"><a href="https://idcloudhost.com/" target="_blank" style="color: rgb(31, 187, 166); outline: 0px;">IDCloudHost</a> merupakan salah satu web hosting provider yang ada di Indonesia dengan menawarkan layanan seperti pendaftaran domain, cloud hosting, server (VPS & Dedicated Server), reseller domain & hosting, dan beberapa layanan lainnya.</p><p style="margin-bottom: 35px; color: rgb(52, 52, 52); font-family: Lora, serif; font-size: 19px; line-height: 36px;">Melalui program CSR-nya IDCloudHost <span style="font-weight: 700;">memprogramkan beasiswa</span> yang bekerjasama dengan <a href="http://telkomuniversity.ac.id/" target="_blank" style="color: rgb(31, 187, 166); outline: 0px;">Telkom University</a> untuk pembiayaan studi lanjut pada program S1 di perguruan tinggi dengan pendaftaran terakhir <span style="font-weight: 700;">1 April 2017</span>. Beasiswa ini dikhususkan untuk <span style="font-weight: 700;">keluarga yang kurang mampu untuk melanjutkan kuliah</span> namun memiliki cita-cita yang tinggi, bertujuan untuk mendukung ketersedian pemuda/i Indonesia yang mempunyai jiwa kepemimpinan yang tinggi dan mempunyai visi misi untuk bangsa Indonesia yang kuat sebagai pemimpin masa depan untuk dapat berkontribusi dalam melakukan perubahan untuk Indonesia yang lebih baik.</p><p style="margin-bottom: 35px; color: rgb(52, 52, 52); font-family: Lora, serif; font-size: 19px; line-height: 36px;">Berikut ini beberapa sasaran bidang ilmu program beasiswa IDCloudHost :</p><ul style="margin-bottom: 35px; color: rgb(52, 52, 52); font-family: Lora, serif; font-size: 19px; line-height: 36px;"><li>Bidang Teknik</li><li>Bidang Ekonomi</li><li>Bidang Sosial</li></ul><p style="margin-bottom: 35px; color: rgb(52, 52, 52); font-family: Lora, serif; font-size: 19px; line-height: 36px;"><img src="http://i.imgur.com/TpLF5uM.png" alt="Beasiswa" style="max-width: 100%; height: auto;"></p><h3 style="font-family: Roboto, sans-serif; line-height: 40px; color: rgb(52, 52, 52); margin-top: 45px; margin-bottom: 20px; font-size: 30px;">Syarat dan Ketentuan</h3><ol style="margin-bottom: 35px; color: rgb(52, 52, 52); font-family: Lora, serif; font-size: 19px; line-height: 36px;"><li><span style="font-weight: 700;">Diperuntukkan bagi siswa/i lulusan SMA/SMK/MA Sederajat kelas 12</span>atau yang sudah lulus maksimal Lima tahun sebelumnya.</li><li><span style="font-weight: 700;">Memiliki Visi yang jelas</span> dan motivasi yang kuat untuk menggapai cita-cita dan berkontribusi untuk perubahan bangsa dan negara.</li><li><span style="font-weight: 700;">Memiliki prestasi yang cukup</span> atau lebih baik dalam bidang akademik dan non akademik.</li><li>Memiliki <span style="font-weight: 700;">pengalaman berorganisasi</span>.</li><li><span style="font-weight: 700;">Keputusan</span> penyelenggara terkait program beasiswa idcloudhost adalah<span style="font-weight: 700;">mutlak</span> dan <span style="font-weight: 700;">tidak dapat diganggu gugat</span>.</li><li><span style="font-weight: 700;">Tidak sedang menerima beasiswa lain</span>.</li></ol><h3 style="font-family: Roboto, sans-serif; line-height: 40px; color: rgb(52, 52, 52); margin-top: 45px; margin-bottom: 20px; font-size: 30px;">Berkas Yang Dibutuhkan</h3><ul style="margin-bottom: 35px; color: rgb(52, 52, 52); font-family: Lora, serif; font-size: 19px; line-height: 36px;"><li>Fotocopy Rapor semester 1-5 yang sudah dilegalisir.</li><li>Fotocopy Kartu Keluarga.</li><li>Fotocopy Sertifikat Prestasi dalam bidang akademik dan non-akademik.</li></ul><h3 style="font-family: Roboto, sans-serif; line-height: 40px; color: rgb(52, 52, 52); margin-top: 45px; margin-bottom: 20px; font-size: 30px;">Proses Seleksi</h3><ol style="margin-bottom: 35px; color: rgb(52, 52, 52); font-family: Lora, serif; font-size: 19px; line-height: 36px;"><li>Peserta mendaftar melalui halaman Program Beasiswa IDCloudHost :<a href="https://idcloudhost.com/beasiswa/" target="_blank" style="color: rgb(31, 187, 166); outline: 0px;">https://idcloudhost.com/beasiswa/</a></li><li>Peserta akan dihubungi oleh tim penyeleksi Program Beasiswa IDCloudHost melalui Email dan Telpon.</li><li>Peserta melampirkan persyaratan yang diminta oleh tim penyeleksi Program Beasiswa IDCloudHost melalui email.</li><li>Tim Penyeleksi akan melakukan beberapa proses seleksi seperti wawancara, test online, dan beberapa kegiatan lain yang akan diinformasikan kepada para peserta Program Beasiswa.</li><li>Proses seleksi akhir wawancara bersama keluarga dan guru yang bersangkutan.</li><li>Pengumuman.</li></ol><h3 style="font-family: Roboto, sans-serif; line-height: 40px; color: rgb(52, 52, 52); margin-top: 45px; margin-bottom: 20px; font-size: 30px;">Tanya Jawab</h3><ul style="margin-bottom: 35px; color: rgb(52, 52, 52); font-family: Lora, serif; font-size: 19px; line-height: 36px;"><li><span style="font-weight: 700;">Apakah Ada Biaya Pendaftaran?</span><br>Program beasiswa IDCloudHost tidak dikenakan biaya pendaftaran dan biaya apapun</li><li><span style="font-weight: 700;">Apakah ada batas waktu utk pendaftaran?</span><br>Pendaftaran terakhir 1 April 2017</li><li><span style="font-weight: 700;">Apa Saja yang Tidak Dicover Dalam Program Beasiswa IDCloudHost? (Misal: tempat tinggal)</span><br>Untuk tahun pertama, peserta mendapatkan fasilitas penginapan asrama dari Telkom University (<a href="http://dormitory.telkomuniversity.ac.id/" target="_blank" style="color: rgb(31, 187, 166); outline: 0px;">http://dormitory.telkomuniversity.ac.id</a>). Setelah itu bisa menginap di kantor IDCloudHost di Bandung</li></ul><h3 style="font-family: Roboto, sans-serif; line-height: 40px; color: rgb(52, 52, 52); margin-top: 45px; margin-bottom: 20px; font-size: 30px;">PENTING</h3><ul style="margin-bottom: 35px; color: rgb(52, 52, 52); font-family: Lora, serif; font-size: 19px; line-height: 36px;"><li><span style="font-weight: 700;">Tidak ada uang pendaftaran</span> dalam Program Beasiswa ini, Jika ada pihak yang meminta dalam bentuk apapun kepada peserta beasiswa maka curigai atas tindak penipuan dan melapor pada email mufid@idcloudhost.com</li><li><span style="font-weight: 700;">Informasi lebih lanjut</span> bisa menghubungi : email : alfian@idcloudhost.com / mufid@idcloudhost.com | Line : @idcloudhost</li></ul><p style="margin-bottom: 35px; color: rgb(52, 52, 52); font-family: Lora, serif; font-size: 19px; line-height: 36px;">Sumber : <a href="https://idcloudhost.com/beasiswa/" target="_blank" style="color: rgb(31, 187, 166); outline: 0px;">https://idcloudhost.com/beasiswa/</a></p>                                                    \r\n                                                                                                ', 'rilis', 'konten_20170221070236.jpg', 'percobaan ji', '2017-02-21 07:00:40', 0, 3, 0, 67),
(42, 'PHP Microframework vs. Fullstack Framework', 'Perkembangan teknologi web kini sudah dirasakan semakin pesat dan semakin kompleks. Tak bisa dibayangkan kembali bahwa dahulu para programmer mengetik kodenya dalam banyak halaman menggunakan HTML.', '<h2 style="font-family: Lora, serif; font-weight: 700; line-height: 45px; color: rgb(52, 52, 52); margin-top: 55px; margin-bottom: 20px; font-size: 34px;">Kemunculan Micro-Framework</h2><p style="margin-bottom: 35px; color: rgb(52, 52, 52); font-family: Lora, serif; font-size: 19px; line-height: 36px;">Hingga saat ini, <span style="font-weight: 700;">full-stack framework</span> telah tumbuh menjadi lebih besar yang diperuntukkan <span style="font-weight: 700;">menangani semakin besar dan kompleksnya kebutuhan sebuah website</span> yang muncul dalam dunia online. Sisi lain dari <span style="font-weight: 700;">pertumbuhan ini menimbulkan kekurangan</span> yang cukup menyulitkan programmer untuk men-<em>develop project</em> sederhana dan Kamu akan menjadi bingung karena terlalu pesat dan kompleks perkembangan yang terjadi.</p><p style="margin-bottom: 35px; color: rgb(52, 52, 52); font-family: Lora, serif; font-size: 19px; line-height: 36px;">Dalam menghadapi tantangan yang ada, para programmer men-<em>develop</em> <span style="font-weight: 700;">micro-framework</span>, sebuah <span style="font-weight: 700;">tool yang digunakan untuk project yang lebih kecil dan penggunaan untuk kasus yang spesifik</span>. Ini sama saja dengan menyederhanakan framework agar lebih mudah dalam implementasi dan menyediakan <em>testing</em> dan<em>deployment</em> yang lebih cepat.</p><p style="margin-bottom: 35px; color: rgb(52, 52, 52); font-family: Lora, serif; font-size: 19px; line-height: 36px;">Hari ini kamu memiliki pilihan yang luas dan banyak untuk <em>full-stack</em> dan <em>micro framework</em> dalam lingkungan development PHP. Saat ini kita mencoba untuk melihat lebih dekat tentang keuntungan dan kerugian menggunakan salah satu dari mereka dengan contoh framework yang paling populer digunakan.</p><p class="baca-juga" style="margin-bottom: 35px; border-top-width: 1px; border-top-style: solid; border-top-color: rgb(245, 245, 245); border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(245, 245, 245); padding-top: 20px; padding-bottom: 20px; text-align: center; font-weight: 700; color: rgb(52, 52, 52); font-family: Lora, serif; font-size: 19px; line-height: 36px;">Baca juga: <a href="https://www.codepolitan.com/3-pertanyaan-sering-ditanyakan-pemula-seputar-framework" target="_blank" style="color: rgb(31, 187, 166); outline: 0px;">3 Pertanyaan yang Sering Ditanyakan Oleh Pemula Seputar Framework</a></p><h2 style="font-family: Lora, serif; font-weight: 700; line-height: 45px; color: rgb(52, 52, 52); margin-top: 55px; margin-bottom: 20px; font-size: 34px;">PHP <em>Micro-Framework vs. Full-Stack Framework</em></h2><p style="margin-bottom: 35px; color: rgb(52, 52, 52); font-family: Lora, serif; font-size: 19px; line-height: 36px;"><em>Full-stack framework</em> membantu programmer dalam seluruh proses<em>development</em> mulai dari <em>interface user</em> hingga penyimpanan data. Segala hal di luar <em>full-stack framework</em> secara teknis disebut "<em>nonfull-stack framework</em>". Dalam grup <em>nonfull-stack</em> jika <em>framework</em> dan <span style="font-weight: 700;"><em>library</em>-nya di bawah 5000 baris kode</span>, maka hal itulah yang disebut dengan <span style="font-weight: 700;">micro-framework</span>.</p><p style="margin-bottom: 35px; color: rgb(52, 52, 52); font-family: Lora, serif; font-size: 19px; line-height: 36px;"><span style="font-weight: 700;">Micro-framework</span> mengeluarkan banyak sekali komponen yang ada pada pengaturanan full-stack, termasuk :</p><ul style="margin-bottom: 35px; color: rgb(52, 52, 52); font-family: Lora, serif; font-size: 19px; line-height: 36px;"><li><span style="font-weight: 700;"><em>Web template engine</em></span></li><li><span style="font-weight: 700;"><em>Input validation</em></span></li><li><span style="font-weight: 700;"><em>Database abstraction</em></span></li><li><span style="font-weight: 700;"><em>Roles, accounts, and authentication</em></span></li></ul><p style="margin-bottom: 35px; color: rgb(52, 52, 52); font-family: Lora, serif; font-size: 19px; line-height: 36px;">Bekerja menggunakan <em>Full-stack framework</em> seperti <span style="font-weight: 700;">mengendarai kendaraan besar yang lengkap, banyak fitur dan pilihan</span>. Tetapi bisa saja akan berakibat rumit dan memperlambat pekerjaan. Sementara <em>micro-framework</em> memiliki fitur yang lebih sedikit di sisi lain sekaligus memberikan <span style="font-weight: 700;">keuntungan dengan penggunaan yang ringan, cepat dan gesit</span>.</p><p style="margin-bottom: 35px; color: rgb(52, 52, 52); font-family: Lora, serif; font-size: 19px; line-height: 36px;"><em>Full-stack framework</em> bekerja dengan banyak fungsi sehingga bisa melakukan banyak hal dengan baik. Sedang <em>micro-framework</em> melakukan lebih sedikit hal dengan baik pula namun, Kamu mungkin membutuhkan beberapa <em>framework</em>lainnya yang terkadang <em>framework-framework</em> tersebut tidak saling kompatibel.</p><p class="baca-juga" style="margin-bottom: 35px; border-top-width: 1px; border-top-style: solid; border-top-color: rgb(245, 245, 245); border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(245, 245, 245); padding-top: 20px; padding-bottom: 20px; text-align: center; font-weight: 700; color: rgb(52, 52, 52); font-family: Lora, serif; font-size: 19px; line-height: 36px;">Baca juga: <a href="https://www.codepolitan.com/berbagai-tipe-programmer-berdasarkan-framework" target="_blank" style="color: rgb(31, 187, 166); outline: 0px;">Berbagai Tipe Programmer Berdasarkan Framework</a></p><h2 style="font-family: Lora, serif; font-weight: 700; line-height: 45px; color: rgb(52, 52, 52); margin-top: 55px; margin-bottom: 20px; font-size: 34px;">Kapan waktu yang cocok menggunakan<em>Micro-Frameworks</em> atapun <em>Full-Stack Frameworks</em></h2><p style="margin-bottom: 35px; color: rgb(52, 52, 52); font-family: Lora, serif; font-size: 19px; line-height: 36px;">Jika kamu memiliki <em>project</em> kecil yang membutuhkan spesifikasi fitur yang cepat,<em>micro-framework</em> mungkin menjadi pilihan terbaikmu. Untuk project sedang dan besar dengan banyak permintaan, <em>full-stack framework</em> akan bekerja dengan lebih baik.</p><p style="margin-bottom: 35px; color: rgb(52, 52, 52); font-family: Lora, serif; font-size: 19px; line-height: 36px;"><em>Full-stack framework</em> punya segala hal yang kamu butuhkan. Namun, cara kerja dan bagaimana struktur projectnya bekerja tidak terlalu fleksibel. <em>Micro-framework</em> memiliki lebih banyak fleksibilitas dan memberikan kebebasan keputusan pada user.</p><p style="margin-bottom: 35px; color: rgb(52, 52, 52); font-family: Lora, serif; font-size: 19px; line-height: 36px;">Namun, salah satu pemahaman yang salah tentang <em>micro-framework</em> bahwa, mereka hanya bisa untuk project kecil. Sederhananya <em>micro-framework</em> tidak memiliki komponen yang dapat Kamu temukan pada lingkungan <em>full-stack</em>.<em>Micro-framework</em> tidak memiliki <em>helper</em>, <em>library</em> dan struktur seperti pada <em>full-stack framework</em>, tetapi kadang hal ini memudahkan programmer untuk fokus pada tantangan yang spesifik tanpa khawatir <em>library</em> mana yang kamu butuhkan.</p><p style="margin-bottom: 35px; color: rgb(52, 52, 52); font-family: Lora, serif; font-size: 19px; line-height: 36px;">Kerugian menggunakan <em>micro-framework</em> adalah saat project mulai tumbuh besar dengan cepat. Dimana <em>micro-framework</em> tidak memiliki fitur yang dibutuhkan untuk mengakomodasi pertumbuhan website. Dengan kata lain kamu kehilangan fleksibelitas.</p><h2 style="font-family: Lora, serif; font-weight: 700; line-height: 45px; color: rgb(52, 52, 52); margin-top: 55px; margin-bottom: 20px; font-size: 34px;">Contoh-contoh PHP <em>Full-Stack</em> dan <em>Micro-Framework</em></h2><p style="margin-bottom: 35px; color: rgb(52, 52, 52); font-family: Lora, serif; font-size: 19px; line-height: 36px;">Hampir 80% dari server internet menggunakan bahasa pemrograman PHP dalam berbagai kapasitas. Framework PHP merupakan tool yang popular dan sangat berguna.</p><h3 style="font-family: Roboto, sans-serif; line-height: 40px; color: rgb(52, 52, 52); margin-top: 45px; margin-bottom: 20px; font-size: 30px;">5 top Full-stack Framework</h3><h4 style="font-family: ''Open Sans'', sans-serif; line-height: 34px; color: rgb(116, 116, 116); margin-top: 40px; font-size: 24px;"><a href="https://laravel.com/" target="_blank" style="color: rgb(31, 187, 166); outline: 0px;"><span style="font-weight: 700;">Laravel</span></a></h4><p style="margin-bottom: 35px; color: rgb(52, 52, 52); font-family: Lora, serif; font-size: 19px; line-height: 36px;"><img src="http://i.imgur.com/27xrGNn.png" alt="laravel" style="max-width: 100%; height: auto;"></p><p style="margin-bottom: 35px; color: rgb(52, 52, 52); font-family: Lora, serif; font-size: 19px; line-height: 36px;">Laravel merupakan salah satu dari <span style="font-weight: 700;"><em>framework</em> PHP yang paling populer digunakan hari ini</span>. <em>Framework</em> ini memiliki dukungan komunitas, ekosistem tutorial yang luas dan sumberdaya. <span style="font-weight: 700;">Laravel ini gratis</span>, framework yang open source, memiliki paket sistem yang <em>powerful</em>, berbagai pilihan dalam mengakses<em>database</em> dan beberapa kemampuan berguna untuk men-<em>deploy</em> dan memelihara aplikasi. <a href="https://www.codepolitan.com/taylor-otwell-programmer-tokoh-dibalik-lahirnya-framework-laravel" target="_blank" style="color: rgb(31, 187, 166); outline: 0px;">Taylor Orwell</a> membangun <em>framework</em> ini pada 2011 untuk<span style="font-weight: 700;">mengantisipasi kelemahan yang ia lihat ada pada framework aplikasi web CodeIgniter</span>. Bagi kamu yang ingin belajar framework ini CodePolitan punya<a href="https://www.codepolitan.com/tujuh-tips-belajar-laravel-dengan-lebih-efektif-5882dfdd4b3a2" target="_blank" style="color: rgb(31, 187, 166); outline: 0px;">tujuh tips belajar Laravel dengan lebih efektif</a></p><h4 style="font-family: ''Open Sans'', sans-serif; line-height: 34px; color: rgb(116, 116, 116); margin-top: 40px; font-size: 24px;"><a href="https://cakephp.org/" target="_blank" style="color: rgb(31, 187, 166); outline: 0px;"><span style="font-weight: 700;">CakePHP</span></a></h4><p style="margin-bottom: 35px; color: rgb(52, 52, 52); font-family: Lora, serif; font-size: 19px; line-height: 36px;"><img src="http://i.imgur.com/tIgikpQ.jpg" alt="cakephp" style="max-width: 100%; height: auto;"></p><p style="margin-bottom: 35px; color: rgb(52, 52, 52); font-family: Lora, serif; font-size: 19px; line-height: 36px;">Sebuah <em>open-source framework</em>, <span style="font-weight: 700;">CakePHP hadir menyerupai Ruby on Rails</span>, sebuah aplikasi web framework yang terkenal. Dibangun kembali pada april 2005, memimpin di antara para framework dengan waktu yang lama. <span style="font-weight: 700;">CakePHP bekerja keras untuk tetap update</span> dan perusahaan yang menggunakan framework ini termasuk merek fashion Express, Hyundai dan BMW.</p><h4 style="font-family: ''Open Sans'', sans-serif; line-height: 34px; color: rgb(116, 116, 116); margin-top: 40px; font-size: 24px;"><a href="https://framework.zend.com/" target="_blank" style="color: rgb(31, 187, 166); outline: 0px;"><span style="font-weight: 700;">Zend Framework</span></a></h4><p style="margin-bottom: 35px; color: rgb(52, 52, 52); font-family: Lora, serif; font-size: 19px; line-height: 36px;"><img src="http://i.imgur.com/v1Lrv3w.jpg" alt="Zend" style="max-width: 100%; height: auto;"></p><p style="margin-bottom: 35px; color: rgb(52, 52, 52); font-family: Lora, serif; font-size: 19px; line-height: 36px;"><span style="font-weight: 700;">Zend Framework</span> telah hadir hampir dalam waktu sepuluh tahun. Sebuah <em>project open source</em>, menjadi favorit perusahaan multi-nasional seperti Cisco dan BBC. Orang yang berada dibalik kisah Zend Framework ini adalah mereka para developer PHP. Sekalipun framework ini powerful, Zend Framework sulit untuk dipelajari dan memiliki konfigurasi <em>option array</em> yang membingungkan. Dari waktu ke waktu project ini tumbuh menjadi lebih rumit dengan banyaknya lapisan kelas di mana para developer lainnya kesulitan dalam memahaminya.</p>                                                    \r\n                                                ', 'rilis', 'konten_20170226095941.jpg', 'PHP', '2017-02-26 09:59:46', 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `table_partners`
--

CREATE TABLE IF NOT EXISTS `table_partners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `link` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `table_partners`
--

INSERT INTO `table_partners` (`id`, `nama`, `link`) VALUES
(1, 'asdasdasdas', 'sadasdasdas'),
(2, 'asdasdasdas', 'sadasdasdas'),
(3, 'asdasdasdasdasd', 'asdasdas'),
(7, 'asdasdasdas', 'asdasdasdasdasdasdasdasdasdasdasdada');

-- --------------------------------------------------------

--
-- Table structure for table `table_pengguna`
--

CREATE TABLE IF NOT EXISTS `table_pengguna` (
  `id_pengguna` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `catatan` text NOT NULL,
  PRIMARY KEY (`id_pengguna`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `table_portofolio`
--

CREATE TABLE IF NOT EXISTS `table_portofolio` (
  `id_portofolio` int(5) NOT NULL AUTO_INCREMENT,
  `nama_portofolio` varchar(70) DEFAULT NULL,
  `jenis_p` enum('Jaringan','Program','Desain','Iot','Lainnya') DEFAULT NULL,
  `deskripsi_singkat_p` tinytext,
  `penjelasan_p` text NOT NULL,
  `tahun_p` tinytext,
  `foto_dp_p` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_portofolio`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `table_portofolio`
--

INSERT INTO `table_portofolio` (`id_portofolio`, `nama_portofolio`, `jenis_p`, `deskripsi_singkat_p`, `penjelasan_p`, `tahun_p`, `foto_dp_p`) VALUES
(9, 'Sistem Informasi Perpustakaan', 'Jaringan', 'ddfsds dfsdfsd', 'sing ', '2017', 'dp_20170224044111.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `table_proker`
--

CREATE TABLE IF NOT EXISTS `table_proker` (
  `id_proker` int(5) NOT NULL AUTO_INCREMENT,
  `nama_kegiatan` varchar(70) DEFAULT NULL,
  `divisi_kegiatan` enum('kesekretariatan','humas','keuangan','pendidikan','ki') DEFAULT NULL,
  `status_kegiatan` enum('daftar','terlaksana') DEFAULT NULL,
  `foto_dp_k` varchar(50) DEFAULT NULL,
  `tujuan_kegiatan` text,
  `sasaran_kegiatan` text,
  `waktu_kegiatan` text,
  `sumber_dana` text,
  `tgl_update` datetime NOT NULL,
  PRIMARY KEY (`id_proker`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `table_proker`
--

INSERT INTO `table_proker` (`id_proker`, `nama_kegiatan`, `divisi_kegiatan`, `status_kegiatan`, `foto_dp_k`, `tujuan_kegiatan`, `sasaran_kegiatan`, `waktu_kegiatan`, `sumber_dana`, `tgl_update`) VALUES
(4, 'Project akhir  Pembelajaran ', 'pendidikan', 'terlaksana', 'proker_20161006101036.jpg', 'Untuk meningkatkan kerjasama serta bukti penyelesaian masalah IT', 'Angkatan 9 dan 10', '14 Mei 2016 ', 'Iuran bulanan dan sumbangsi', '2016-10-06 10:10:36'),
(5, 'Training Of Trainer', 'pendidikan', 'terlaksana', 'proker_20161005021036.PNG', 'Untuk meningkatkan kemampuan dalam menyampaikan materi', 'Anggota Exomatik', 'Setiap tanggal 5', 'Iuran bulanan dan sumbangsi', '0000-00-00 00:00:00'),
(6, 'Software House /  Pengumpulan Karya', 'pendidikan', 'daftar', 'proker_20161003071020.jpg,proker_201610030710201.j', 'Untuk mengumpulkan karya ', 'Anggota Aktif', '10 September 2016', 'Iuran bulanan dan sumbangsi', '0000-00-00 00:00:00'),
(7, 'Pembelajaran Rutin', 'pendidikan', 'terlaksana', 'proker_20161005041035.jpg,proker_201610050410351.j', 'Untuk meningkatkan kemampuan serta penyelesaian masalah pada bidang IT dan  sosial engineerine', 'Angkatan 9 dan 10', 'Setiap hari rabu dan sabtu ', 'Iuran bulanan dan sumbangsi', '2016-10-05 04:10:36'),
(9, 'Sharing Time', 'ki', 'terlaksana', NULL, 'Memberikan motivasi, semangat belajar & solusi serta strategi berprestasi kepada anggota Exomatik', 'Anggota Exomatik Angkatan 8, 9, dan 10 ', 'Setiap tanggal 30', '-', '0000-00-00 00:00:00'),
(10, ' EXECUTION', 'ki', 'daftar', NULL, 'Untuk membahas dan mengimplementasikan ide – ide kreatif yang bisa digunakan untuk branding Exomatik menjadi lebih baik dari sebelumnya.Serta belajar bersama untuk mendesain keperluan yang  kita gunakan, misalnya Pamflet, Baliho, KTA, Papan Struktur,  dan lain sebagainya.', ' Anggota Exomatik Angkatan 9 dan 10', '9 Maret 2016', '-', '0000-00-00 00:00:00'),
(11, 'Pengelolaan dan Pembaharuan Website Exomatik', 'ki', 'terlaksana', 'proker_20161005051059.jpg', '1. Sebagai Media Penyebaran Informasi bagi Anggota,terkait dengan kegiatan- kegiatan Organisasi dan Informasi yang terkait dengan keanggotaan, dan profil anggaota\r\n2. Bertujuan untuk penyebaran informasi sekaligus sebagai\r\nmedia bagi anggota  untuk belajar menulis baik, artikel\r\nilmiah, jurnal ataupun karya tulisan lainnya.\r\n', ' Anggota Exomatik', ' 4Juni 2016', ' Anggota Exomatik', '2016-10-05 05:10:59'),
(12, ' Tim Software', 'ki', 'terlaksana', 'proker_20161005051005.jpg,proker_201610050510051.j', 'Pembetukan tim pembuatan aplikasi   ', ' Anggota Exomatik Angkatan 8 & 9', ' 3 April 2016', '-', '2016-10-05 05:10:05'),
(14, 'naa', 'ki', 'daftar', 'proker_20170224033547.jpg', 'tuju', 'sasa', 'waktu', 'sumber', '2017-02-24 03:35:57'),
(17, 'jkjk', 'kesekretariatan', 'daftar', 'proker_20170225085118.jpg', 'nj', 'jkjk', 'hjj', 'kjjkkj', '2017-02-25 08:51:19');

-- --------------------------------------------------------

--
-- Table structure for table `table_saran`
--

CREATE TABLE IF NOT EXISTS `table_saran` (
  `id_saran` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `waktu` datetime NOT NULL,
  `status` enum('rilis','draft') NOT NULL,
  PRIMARY KEY (`id_saran`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `table_saran`
--

INSERT INTO `table_saran` (`id_saran`, `nama`, `email`, `isi`, `waktu`, `status`) VALUES
(2, 'Ricky Resky ananda', 'rra.rickyresky@gmail.com', 'siasnsadnosad', '2017-02-26 09:50:19', 'rilis');

-- --------------------------------------------------------

--
-- Table structure for table `table_setting`
--

CREATE TABLE IF NOT EXISTS `table_setting` (
  `id` int(11) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `facebook` text NOT NULL,
  `twitter` tinytext NOT NULL,
  `email` varchar(50) NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `line` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_setting`
--

INSERT INTO `table_setting` (`id`, `no_telp`, `facebook`, `twitter`, `email`, `instagram`, `line`) VALUES
(1, '+6285796782236', 'http://facebook.com', 'http://twitter.com', 'crewexomatik@gmail.com', 'exomatikji', 'exo');

-- --------------------------------------------------------

--
-- Table structure for table `table_struktur`
--

CREATE TABLE IF NOT EXISTS `table_struktur` (
  `id_struktur` int(3) NOT NULL AUTO_INCREMENT,
  `jabatan` enum('ketua','sekretaris','anggota','bendahara') NOT NULL,
  `departemen` enum('pendidikan','ki','kesekretariatan','humas','keuangan','dpo','bpo') NOT NULL,
  `id_anggota` int(5) NOT NULL,
  PRIMARY KEY (`id_struktur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `table_struktur`
--

INSERT INTO `table_struktur` (`id_struktur`, `jabatan`, `departemen`, `id_anggota`) VALUES
(30, 'ketua', 'humas', 6),
(31, 'sekretaris', 'pendidikan', 8),
(32, 'ketua', 'ki', 9);

-- --------------------------------------------------------

--
-- Table structure for table `table_tutorial`
--

CREATE TABLE IF NOT EXISTS `table_tutorial` (
  `id_tutorial` int(5) NOT NULL AUTO_INCREMENT,
  `judul_tutorial` varchar(100) NOT NULL,
  `deskripsi_tutorial` tinytext NOT NULL,
  `isi_tutorial` mediumtext NOT NULL,
  `tgl_rilis` date NOT NULL,
  `id_anggota` int(5) NOT NULL,
  `id_kt` int(3) NOT NULL,
  `nonaktif_tutorial` enum('tidak','ya') NOT NULL,
  `id_jt` int(3) NOT NULL,
  `gambar_tutorial` varchar(50) NOT NULL,
  `likers_tutorial` int(5) NOT NULL,
  `viewers_tutorial` int(5) NOT NULL,
  PRIMARY KEY (`id_tutorial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `table_tutorial`
--

INSERT INTO `table_tutorial` (`id_tutorial`, `judul_tutorial`, `deskripsi_tutorial`, `isi_tutorial`, `tgl_rilis`, `id_anggota`, `id_kt`, `nonaktif_tutorial`, `id_jt`, `gambar_tutorial`, `likers_tutorial`, `viewers_tutorial`) VALUES
(4, 'alksd lasn,asd s', 'as djnalsdn lkas da', '<span style="line-height: 18.5714px;">ajsdn ljasnld als dalskndlkjasldjkaslkj dblasbd khasb</span><span style="line-height: 18.5714px;">ajsdn ljasnld als dalskndlkjasldjkaslkj dblasbd khasb</span><span style="line-height: 18.5714px;">ajsdn ljasnld als dalskndlkjasldjkaslkj dblasbd khasb</span><span style="line-height: 18.5714px;">ajsdn ljasnld als dalskndlkjasldjkaslkj dblasbd khasb</span><span style="line-height: 18.5714px;">ajsdn ljasnld als dalskndlkjasldjkaslkj dblasbd khasb</span><span style="line-height: 18.5714px;">ajsdn ljasnld als dalskndlkjasldjkaslkj dblasbd khasb</span><span style="line-height: 18.5714px;">ajsdn ljasnld als dalskndlkjasldjkaslkj dblasbd khasb</span><span style="line-height: 18.5714px;">ajsdn ljasnld als dalskndlkjasldjkaslkj dblasbd khasb</span><span style="line-height: 18.5714px;">ajsdn ljasnld als dalskndlkjasldjkaslkj dblasbd khasb</span><span style="line-height: 18.5714px;">ajsdn ljasnld als dalskndlkjasldjkaslkj dblasbd khasb</span><span style="line-height: 18.5714px;">ajsdn ljasnld als dalskndlkjasldjkaslkj dblasbd khasb</span><span style="line-height: 18.5714px;">ajsdn ljasnld als dalskndlkjasldjkaslkj dblasbd khasb</span><span style="line-height: 18.5714px;">ajsdn ljasnld als dalskndlkjasldjkaslkj dblasbd khasb</span><span style="line-height: 18.5714px;">ajsdn ljasnld als dalskndlkjasldjkaslkj dblasbd khasb</span><span style="line-height: 18.5714px;">ajsdn ljasnld als dalskndlkjasldjkaslkj dblasbd khasb</span><span style="line-height: 18.5714px;">ajsdn ljasnld als dalskndlkjasldjkaslkj dblasbd khasb</span><span style="line-height: 18.5714px;">ajsdn ljasnld als dalskndlkjasldjkaslkj dblasbd khasb</span><span style="line-height: 18.5714px;">ajsdn ljasnld als dalskndlkjasldjkaslkj dblasbd khasb</span><span style="line-height: 18.5714px;">ajsdn ljasnld als dalskndlkjasldjkaslkj dblasbd khasb</span><span style="line-height: 18.5714px;">ajsdn ljasnld als dalskndlkjasldjkaslkj dblasbd khasb</span><span style="line-height: 18.5714px;">ajsdn ljasnld als dalskndlkjasldjkaslkj dblasbd khasb</span><span style="line-height: 18.5714px;">ajsdn ljasnld als dalskndlkjasldjkaslkj dblasbd khasb</span><span style="line-height: 18.5714px;">ajsdn ljasnld als dalskndlkjasldjkaslkj dblasbd khasb</span><span style="line-height: 18.5714px;">ajsdn ljasnld als dalskndlkjasldjkaslkj dblasbd khasb</span><span style="line-height: 18.5714px;">ajsdn ljasnld als dalskndlkjasldjkaslkj dblasbd khasb</span><span style="line-height: 18.5714px;">ajsdn ljasnld als dalskndlkjasldjkaslkj dblasbd khasb</span><span style="line-height: 18.5714px;">ajsdn ljasnld als dalskndlkjasldjkaslkj dblasbd khasb</span><span style="line-height: 18.5714px;">ajsdn ljasnld als dalskndlkjasldjkaslkj dblasbd khasb</span><span style="line-height: 18.5714px;">ajsdn ljasnld als dalskndlkjasldjkaslkj dblasbd khasb</span><span style="line-height: 18.5714px;">ajsdn ljasnld als dalskndlkjasldjkaslkj dblasbd khasb</span><span style="line-height: 18.5714px;">ajsdn ljasnld als dalskndlkjasldjkaslkj dblasbd khasb</span><span style="line-height: 18.5714px;">ajsdn ljasnld als dalskndlkjasldjkaslkj dblasbd khasb</span><span style="line-height: 18.5714px;">ajsdn ljasnld als dalskndlkjasldjkaslkj dblasbd khasb</span><span style="line-height: 18.5714px;">ajsdn ljasnld als dalskndlkjasldjkaslkj dblasbd khasb</span><span style="line-height: 18.5714px;">ajsdn ljasnld als dalskndlkjasldjkaslkj dblasbd khasb</span><span style="line-height: 18.5714px;">ajsdn ljasnld als dalskndlkjasldjkaslkj dblasbd khasb</span><span style="line-height: 18.5714px;">ajsdn ljasnld als dalskndlkjasldjkaslkj dblasbd khasb</span><span style="line-height: 18.5714px;">ajsdn ljasnld als dalskndlkjasldjkaslkj dblasbd khasb</span><span style="line-height: 18.5714px;">ajsdn ljasnld als dalskndlkjasldjkaslkj dblasbd khasb</span><span style="line-height: 18.5714px;">ajsdn ljasnld als dalskndlkjasldjkaslkj dblasbd khasb</span><span style="line-height: 18.5714px;">ajsdn ljasnld als dalskndlkjasldjkaslkj dblasbd khasb</span><span style="line-height: 18.5714px;">ajsdn ljasnld als dalskndlkjasldjkaslkj dblasbd khasb</span><span style="line-height: 18.5714px;">ajsdn ljasnld als dalskndlkjasldjkaslkj dblasbd khasb</span><span style="line-height: 18.5714px;">ajsdn ljasnld als dalskndlkjasldjkaslkj dblasbd khasb</span><span style="line-height: 18.5714px;">ajsdn ljasnld als dalskndlkjasldjkaslkj dblasbd khasb</span><span style="line-height: 18.5714px;">ajsdn ljasnld als dalskndlkjasldjkaslkj dblasbd khasb</span><span style="line-height: 18.5714px;">ajsdn ljasnld als dalskndlkjasldjkaslkj dblasbd khasb</span><span style="line-height: 18.5714px;">ajsdn ljasnld als dalskndlkjasldjkaslkj dblasbd khasb</span><span style="line-height: 18.5714px;">ajsdn ljasnld als dalskndlkjasldjkaslkj dblasbd khasb</span><span style="line-height: 18.5714px;">ajsdn ljasnld als dalskndlkjasldjkaslkj dblasbd khasb</span><span style="line-height: 18.5714px;">ajsdn ljasnld als dalskndlkjasldjkaslkj dblasbd khasb</span><span style="line-height: 18.5714px;">ajsdn ljasnld als dalskndlkjasldjkaslkj dblasbd khasb</span><span style="line-height: 18.5714px;">ajsdn ljasnld als dalskndlkjasldjkaslkj dblasbd khasb</span><span style="line-height: 18.5714px;">ajsdn ljasnld als dalskndlkjasldjkaslkj dblasbd khasb</span><span style="line-height: 18.5714px;">ajsdn ljasnld als dalskndlkjasldjkaslkj dblasbd khasb</span><span style="line-height: 18.5714px;">ajsdn ljasnld als dalskndlkjasldjkaslkj dblasbd khasb</span><span style="line-height: 18.5714px;">ajsdn ljasnld als dalskndlkjasldjkaslkj dblasbd khasb</span>', '2017-02-06', 3, 2, 'tidak', 1, 'kt_20170206012926.jpg', 0, 0),
(5, 'senja di pagi hari', 'ini adalah sinar matahari', '<span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span><span style="line-height: 18.5714px;">huanasnasnnsan aasn as</span>', '2017-02-06', 3, 2, 'tidak', 1, 'kt_20170206080221.jpg', 0, 0),
(6, ' asasd asjkd jkasjasjkd akjdjasdkjadsjk akjdaks kajsdjk akjs', 'as andj ajsnkdansjkn dkjasndkjanskjdn akjsdn kjasdn kja', '<span style="line-height: 18.5714px;">skmadk maskldmklasmdk malksmdklasmd klmaskmdl</span><span style="line-height: 18.5714px;">skmadk maskldmklasmdk malksmdklasmd klmaskmdl</span><span style="line-height: 18.5714px;">skmadk maskldmklasmdk malksmdklasmd klmaskmdl</span><span style="line-height: 18.5714px;">skmadk maskldmklasmdk malksmdklasmd klmaskmdl</span><span style="line-height: 18.5714px;">skmadk maskldmklasmdk malksmdklasmd klmaskmdl</span><span style="line-height: 18.5714px;">skmadk maskldmklasmdk malksmdklasmd klmaskmdl</span><span style="line-height: 18.5714px;">skmadk maskldmklasmdk malksmdklasmd klmaskmdl</span><span style="line-height: 18.5714px;">skmadk maskldmklasmdk malksmdklasmd klmaskmdl</span><span style="line-height: 18.5714px;">skmadk maskldmklasmdk malksmdklasmd klmaskmdl</span><span style="line-height: 18.5714px;">skmadk maskldmklasmdk malksmdklasmd klmaskmdl</span><span style="line-height: 18.5714px;">skmadk maskldmklasmdk malksmdklasmd klmaskmdl</span><span style="line-height: 18.5714px;">skmadk maskldmklasmdk malksmdklasmd klmaskmdl</span><span style="line-height: 18.5714px;">skmadk maskldmklasmdk malksmdklasmd klmaskmdl</span><span style="line-height: 18.5714px;">skmadk maskldmklasmdk malksmdklasmd klmaskmdl</span><span style="line-height: 18.5714px;">skmadk maskldmklasmdk malksmdklasmd klmaskmdl</span><span style="line-height: 18.5714px;">skmadk maskldmklasmdk malksmdklasmd klmaskmdl</span><span style="line-height: 18.5714px;">skmadk maskldmklasmdk malksmdklasmd klmaskmdl</span><span style="line-height: 18.5714px;">skmadk maskldmklasmdk malksmdklasmd klmaskmdl</span><span style="line-height: 18.5714px;">skmadk maskldmklasmdk malksmdklasmd klmaskmdl</span><span style="line-height: 18.5714px;">skmadk maskldmklasmdk malksmdklasmd klmaskmdl</span><span style="line-height: 18.5714px;">skmadk maskldmklasmdk malksmdklasmd klmaskmdl</span><span style="line-height: 18.5714px;">skmadk maskldmklasmdk malksmdklasmd klmaskmdl</span><span style="line-height: 18.5714px;">skmadk maskldmklasmdk malksmdklasmd klmaskmdl</span><span style="line-height: 18.5714px;">skmadk maskldmklasmdk malksmdklasmd klmaskmdl</span><span style="line-height: 18.5714px;">skmadk maskldmklasmdk malksmdklasmd klmaskmdl</span><span style="line-height: 18.5714px;">skmadk maskldmklasmdk malksmdklasmd klmaskmdl</span><span style="line-height: 18.5714px;">skmadk maskldmklasmdk malksmdklasmd klmaskmdl</span><span style="line-height: 18.5714px;">skmadk maskldmklasmdk malksmdklasmd klmaskmdl</span><span style="line-height: 18.5714px;">skmadk maskldmklasmdk malksmdklasmd klmaskmdl</span><span style="line-height: 18.5714px;">skmadk maskldmklasmdk malksmdklasmd klmaskmdl</span><span style="line-height: 18.5714px;">skmadk maskldmklasmdk malksmdklasmd klmaskmdl</span><span style="line-height: 18.5714px;">skmadk maskldmklasmdk malksmdklasmd klmaskmdl</span>                                                ', '2017-02-06', 3, 2, 'tidak', 1, 'tutorial_20170206082504.jpg', 0, 0),
(7, 'Menginput data dengan Codeigniter', 'ini untuk deskripsi singkatnya', 'inis sidasin iasndoinasond aiosndo;i naodi nas;oidn aso', '2017-02-07', 3, 3, 'tidak', 1, 'tutorial_20170207021315.jpg', 0, 0),
(8, 'BBKSADKDJA', 'LJFPFKOPFRER', 'M,MDM,DS,MDS,MDS', '2017-03-01', 1, 3, 'tidak', 1, 'tutorial_20170301122132.jpg', 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
