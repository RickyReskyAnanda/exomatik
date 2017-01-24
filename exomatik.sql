-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2017 at 07:19 AM
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
  `nik` varchar(20) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jk` enum('laki-laki','perempuan') DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `angkatan` int(3) DEFAULT NULL,
  `status` enum('anggota','pengurus') NOT NULL,
  `foto` varchar(30) DEFAULT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  PRIMARY KEY (`id_anggota`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `table_anggota`
--

INSERT INTO `table_anggota` (`id_anggota`, `nik`, `nama`, `tgl_lahir`, `jk`, `no_hp`, `angkatan`, `status`, `foto`, `tempat_lahir`) VALUES
(3, 'sasd', 'asdasdasda', '2222-02-22', 'laki-laki', '233232323232', 1, 'anggota', 'empty.png', 'sdasdas'),
(4, 'sasd', 'asdasdasda', '2222-02-22', 'laki-laki', '233232323232', 1, 'anggota', 'anggota_20161005051050.PNG', 'sdasdas'),
(5, 'sasd', 'asdasdasda', '2222-02-22', 'laki-laki', '233232323232', 1, 'anggota', 'anggota_20161005051048.jpg', 'sdasdas');

-- --------------------------------------------------------

--
-- Table structure for table `table_bpo`
--

CREATE TABLE IF NOT EXISTS `table_bpo` (
  `id_struktur` int(3) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `jabatan` enum('ketua','sekretaris','bendahara') NOT NULL,
  `angkatan` int(2) NOT NULL,
  `jurusan` enum('Teknik-Informatika','Sistem-Informasi') NOT NULL,
  `foto` text NOT NULL,
  `keterangan` mediumtext NOT NULL,
  PRIMARY KEY (`id_struktur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `table_bpo`
--

INSERT INTO `table_bpo` (`id_struktur`, `nama`, `jabatan`, `angkatan`, `jurusan`, `foto`, `keterangan`) VALUES
(1, 'Muhammad Noviyanto', 'ketua', 8, 'Teknik-Informatika', 'struktur_20161006011003.jpg', 'Ketua BPO Exomatik'),
(2, 'Lindasari', 'sekretaris', 9, 'Teknik-Informatika', 'struktur_20161006021056.jpg', 'Sekretaris BPO Exomatik'),
(3, 'Najma Pathka', 'bendahara', 8, 'Teknik-Informatika', 'struktur_20161006021024.jpg', 'Bendahara Exomatik');

-- --------------------------------------------------------

--
-- Table structure for table `table_departemen`
--

CREATE TABLE IF NOT EXISTS `table_departemen` (
  `id_struktur` int(3) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `jabatan` enum('ketua','sekretaris','anggota') NOT NULL,
  `angkatan` int(11) NOT NULL,
  `jurusan` enum('Teknik-Informatika','Sistem-Informasi') NOT NULL,
  `keterangan` text NOT NULL,
  `foto` text NOT NULL,
  `departemen` enum('pendidikan','ki','kesekretariatan','humas','keuangan') NOT NULL,
  PRIMARY KEY (`id_struktur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `table_departemen`
--

INSERT INTO `table_departemen` (`id_struktur`, `nama`, `jabatan`, `angkatan`, `jurusan`, `keterangan`, `foto`, `departemen`) VALUES
(1, 'Jheny Neriza Amanda', 'ketua', 8, 'Teknik-Informatika', 'Ketua Departemen Kreatif dan Inovatif', 'struktur_20161006021035.jpg', 'ki'),
(4, 'Muhammad Syafaat AP', 'ketua', 8, 'Teknik-Informatika', 'Ketua Kesekretariatan', 'struktur_20161006021026.jpg', 'kesekretariatan'),
(5, 'Aswar Amrul', 'sekretaris', 9, 'Teknik-Informatika', 'Sekretaris Kesekretariatan', 'struktur_20161006021013.jpg', 'kesekretariatan'),
(6, 'LM. Miftahul Ulum', 'anggota', 9, 'Teknik-Informatika', 'anggota kesekretariatan', 'struktur_20161006031017.jpg', 'kesekretariatan'),
(7, 'Siti hasliza', 'ketua', 8, 'Sistem-Informasi', 'ketua divisi pendidikan siti hasliza berasal dari jurusan sistem informasi yang merupakan rekrutan ke 3 di jurusan sistem informasi', 'struktur_20161006021036.jpg', 'pendidikan'),
(8, 'Ricky Resky Ananda', 'sekretaris', 9, 'Teknik-Informatika', 'ini keterangan profil ini keterangan profil ini keterangan profil ini keterangan profil ini keterangan profil ini keterangan profil ini keterangan pro', 'struktur_20161006021021.jpg', 'pendidikan'),
(9, 'Ismail Ahsan Mas''ud', 'anggota', 9, 'Teknik-Informatika', 'Anggota 1 Departemen Pendidikan', 'struktur_20161006021007.jpg', 'pendidikan'),
(10, 'Nada Manarnuha', 'anggota', 9, 'Sistem-Informasi', 'Anggota 2 Departemen Pendidikan', 'struktur_20161006021002.jpg', 'pendidikan'),
(11, 'Siti Warnida', 'anggota', 9, 'Teknik-Informatika', 'Anggota 3 Departemen Pendidikan', 'struktur_20161006021014.jpg', 'pendidikan'),
(12, 'Khaerun Situncu', 'sekretaris', 9, 'Teknik-Informatika', 'Sekretaris Kreatif Dan Inovatif', 'struktur_20161006021003.jpg', 'ki'),
(13, 'Nurhakiki', 'anggota', 9, 'Teknik-Informatika', 'Anggota 1 Kreatif Dan Inovatif', 'struktur_201610060210031.jpg', 'ki'),
(14, 'Muhammad Juanda', 'anggota', 9, 'Teknik-Informatika', 'Anggota 2 Kreatif dan Inovatif', 'struktur_20161006021051.jpg', 'ki'),
(15, 'Nuraida. S', 'anggota', 9, 'Teknik-Informatika', 'anggota kesekretariatan', 'struktur_201610060310241.jpg', 'kesekretariatan'),
(16, 'Muhammad Naufal', 'ketua', 8, 'Teknik-Informatika', 'Ketua Humas', 'struktur_201610060210211.jpg', 'humas'),
(17, 'Muhammad Reza Arbi', 'sekretaris', 9, 'Teknik-Informatika', 'Sekretaris Humas', 'struktur_20161006031033.jpg', 'humas'),
(18, 'Nuraeni Latifah', 'anggota', 9, 'Teknik-Informatika', 'anggota Humas', 'struktur_20161006031001.jpg', 'humas'),
(19, 'Saribulang', 'anggota', 9, 'Teknik-Informatika', 'anggota Humas', 'struktur_20161006031024.jpg', 'humas'),
(20, 'Rabaiyah', 'ketua', 8, 'Teknik-Informatika', 'ketua Keuangan', 'struktur_20161006031000.jpg', 'keuangan'),
(21, 'Yulianti', 'anggota', 9, 'Teknik-Informatika', 'sekretaris ', 'struktur_20161006031010.jpg', 'keuangan'),
(22, 'Nurul Putri Ahsani', 'sekretaris', 9, 'Teknik-Informatika', 'patagi-tagi', 'struktur_201610060310171.jpg', 'keuangan'),
(23, 'Zahra Waeni', 'anggota', 9, 'Sistem-Informasi', 'anggotanya ka'' aya', 'struktur_20161006031042.jpg', 'keuangan'),
(24, '34534534', 'anggota', 4, 'Teknik-Informatika', '345', 'struktur_20161008041047.jpg', 'kesekretariatan');

-- --------------------------------------------------------

--
-- Table structure for table `table_download`
--

CREATE TABLE IF NOT EXISTS `table_download` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `link` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `table_download`
--

INSERT INTO `table_download` (`id`, `nama`, `link`) VALUES
(3, 'ricky', 'resky'),
(5, 'ricky', 'asdasdasda'),
(7, 'ricky', 'asdasdasda'),
(8, 'file formulir data download', 'http://exomatikcrew.org');

-- --------------------------------------------------------

--
-- Table structure for table `table_dpo`
--

CREATE TABLE IF NOT EXISTS `table_dpo` (
  `id_struktur` int(3) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `jabatan` enum('ketua','sekretaris','anggota1','anggota2','anggota3') NOT NULL,
  `angkatan` int(3) NOT NULL,
  `jurusan` enum('Teknik-Informatika','Sistem-Informasi') NOT NULL,
  `keterangan` text NOT NULL,
  `foto` text NOT NULL,
  PRIMARY KEY (`id_struktur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `table_dpo`
--

INSERT INTO `table_dpo` (`id_struktur`, `nama`, `jabatan`, `angkatan`, `jurusan`, `keterangan`, `foto`) VALUES
(3, 'Achmad Syarfandi', 'sekretaris', 8, 'Teknik-Informatika', 'Sekretaris DPO Exomatik', 'struktur_20161006011015.jpg'),
(6, 'Fuadi Al husaini', 'ketua', 7, 'Teknik-Informatika', 'Ketua DPO EXOMATIK Periode 2015-2016', 'struktur_20161006011002.jpg'),
(7, 'Ardiansyah', 'anggota1', 7, 'Teknik-Informatika', 'Biasa dipanggil doy gitu', 'struktur_20161006011052.jpg'),
(8, 'Muhammad Ikhsan', 'anggota2', 7, 'Teknik-Informatika', 'jago desain', 'struktur_20161006011046.jpg'),
(9, 'Anwar Sandi', 'anggota3', 7, 'Teknik-Informatika', 'anggota DPO', 'struktur_20161006011053.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `table_foto`
--

CREATE TABLE IF NOT EXISTS `table_foto` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `nama foto` varchar(50) NOT NULL,
  `jenis` varchar(10) NOT NULL,
  `urutan` int(3) NOT NULL,
  `id_back` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `table_komentar`
--

CREATE TABLE IF NOT EXISTS `table_komentar` (
  `id_komentar` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `komentar` tinytext NOT NULL,
  `id_back` int(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jenis` enum('konten','tutorial') NOT NULL,
  `waktu` datetime NOT NULL,
  PRIMARY KEY (`id_komentar`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `table_komentar`
--

INSERT INTO `table_komentar` (`id_komentar`, `nama`, `komentar`, `id_back`, `email`, `jenis`, `waktu`) VALUES
(1, 'ricky', '', 6, 'email@gmail.com', 'konten', '0000-00-00 00:00:00'),
(2, 'ricky', '', 6, 'email@gmail.com', 'konten', '0000-00-00 00:00:00'),
(3, 'qweqwe', '', 11, 'qweqweqw@mail.com', 'konten', '0000-00-00 00:00:00'),
(4, 'gue ricky', 'assasaassa', 8, '', 'tutorial', '0000-00-00 00:00:00'),
(5, 'asdasdas', 'asdasdasdasda', 8, '', 'konten', '0000-00-00 00:00:00');

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
  `tgl_rilis` date DEFAULT NULL,
  `viewers` int(5) NOT NULL,
  `id_user` int(5) DEFAULT NULL,
  `komentar` int(4) NOT NULL,
  `likers` int(5) NOT NULL,
  PRIMARY KEY (`id_konten`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `table_konten`
--

INSERT INTO `table_konten` (`id_konten`, `judul_konten`, `deskripsi`, `isi_konten`, `status`, `gambar`, `tag`, `tgl_rilis`, `viewers`, `id_user`, `komentar`, `likers`) VALUES
(2, 'C# menjadi bahasa pemrograman terpopuler saat ini', 'ini adalah  deskripsi singkat dari sini', '<p>Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan <br><br>bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla</p>', 'rilis', 'konten_20161001021051.jpg', 'jaringan,desain', '2016-10-01', 1, NULL, 0, 0),
(3, 'Exomatik Mengadakan lomba makan krupuk se indonesia ', 'ini adalah  deskripsi singkat dari sini', '<p>Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan <br><br>bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla</p>', 'rilis', 'konten_20161001021045.jpg', 'jaringan,komputer,mouse roll', '2016-10-01', 3, NULL, 0, 0),
(4, 'Kak Bobo menjadi ketua DPO peride 2016-2017', 'ini adalah  deskripsi singkat dari sini', '<p>Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan <br><br>bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla</p>', 'rilis', 'konten_20161001021033.jpg', 'jaringan,komputer,mouse roll', '2016-10-01', 9, NULL, 0, 0),
(5, 'Html bisa ? Berarti Masih Ada Jalan', 'ini adalah  deskripsi singkat dari sini', '<p>Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan <br><br>bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla Deskripsi artikel dan bla bla bla</p>', 'rilis', 'konten_20161001051025.jpg', 'jaringan,komputer,mouse roll', '2016-10-01', 0, NULL, 0, 0),
(6, 'Analisa sistem dan Desain', 'Bagaimana kita menganalisa sistem yang kita buat dan mendesainnya', '<span style="color: rgb(78, 78, 78); font-family: "Myriad Pro", "Trebuchet MS", Helvetica, Arial, sans-serif;">Sistem adalah sekumpulan  elemen yang saling berkaitan dan saling mempengaruhi dalam melakukan kegiatan bersama untuk mencapai suatu tujuan. Contoh sistem transfortasi, sistem kekebalan tubuh, sistem ekonomi,  sistem informasi dll. </span>Analisa sistem dan desain adalah menganalisa setiap sistem apa yang di buat <span style="color: rgb(78, 78, 78); font-family: "Myriad Pro", "Trebuchet MS", Helvetica, Arial, sans-serif;">Pengembangan sistem dilakukan apabila sistem yang lama sudah tidak memadai atau tdk  bisa memenuhi kebutuhan atau pun perkembangan organisasi/perusahaan.</span><p style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; margin-top: 1em; margin-bottom: 1em; padding: 0px; vertical-align: baseline; line-height: 21px; font-size: 14px; color: rgb(78, 78, 78); font-family: "Myriad Pro", "Trebuchet MS", Helvetica, Arial, sans-serif;">Siklus/fase/tahapan pengembangan sebuah system adalah :  perencanaan, analisa, desain , implementasi . Siklus ini biasa juga disebut SDLC =  system development life cycle.</p><div data-shortcode="caption" id="attachment_3165" class="wp-caption aligncenter" style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; margin: 0px auto; padding: 0px; vertical-align: baseline; text-align: center; max-width: 98.5%; color: rgb(78, 78, 78); font-family: "Myriad Pro", "Trebuchet MS", Helvetica, Arial, sans-serif; width: 614px;"><br></div>', 'rilis', 'konten_20161003121005.jpg', 'Teknik,Informatika', '2016-10-03', 0, NULL, 0, 0),
(7, 'Perancangan Sistem Informasi apotek', 'Sistem informasi merupakan salah satu faktor yang penting bagi perusahaan dalam kegiatan operasional perusahaan. Sistem informasi digunakan untuk mengumpulkan, mengolah, dan menyediakan informasi dengan tujuan untuk membantu pengambilan keputusan', '<span style="color: rgb(51, 51, 51); font-family: Arial, Tahoma, Helvetica, FreeSans, sans-serif; font-size: 13.524px; text-align: justify; background-color: rgb(247, 247, 247);">Apotek sebagai organisasi yang memiliki kecenderungan orientasi pada laba, selalu membutuhkan sistem yang terkomputerisasi dalam mengumpulkan, menyimpan, dan memproses data untuk menghasilkan informasi yang dapat membantu apotek itu dalam melakukan perencanaan strategi dan pengambilan suatu keputusan secara efektif. Tanpa adanya sistem yang terkomputerisasi apotek itu akan menghadapi kendala untuk mendapatkan informasi yang aktual dan akurat. Hal itu dapat disebabkan oleh proses pengumpulan dan pengolahan data masih dilakukan secara manual. Dengan bantuan sistem yang terkomputerisasi pula informasi dapat dikelola dengan baik, sehingga dapat menciptakan efisien biaya.</span>                                                    \r\n                                                ', 'rilis', 'konten_20160930080907.jpg', 'Sistem', '2016-10-03', 0, NULL, 0, 0),
(8, 'Aplikasi Berbasis mobile', 'Aplikasi adalah program yang digunakan orang untuk melakukan \r\nsesuatu pada sistem komputer\r\n\r\nMobile dapat diartikan sebagai perpindahan yang mudah dari satu tempat\r\nke tempat yang lain, misalnya telepon mobile berarti bahwa terminal telepon yang\r\nd', '<span style="color: rgb(0, 0, 0); font-family: Arial, sans-serif; font-size: 12.8px;">Sistem informasi akademik berbasis mobile web merupakan sistem informasi yang menyediakan informasi akademik untuk tingkat mahasiswa yang dirancang khusus untuk perangkat bergerak, dengan sistem informasi akademik berbasis mobile web mahasiswa dapat memperoleh informasi yang berhubungan dengan kegiatan akademik yang sedang ditempuh. Desain dari sistem informasi akademik berbasis mobile web dirancang khusus untuk perangkat bergerak yang bertujuan untuk mempermudah mahasiswa dalam pengaksesan sistem informasi melalui pada perangkat bergerak.\r\n Sistem informasi akademik berbasis mobile web pada dasarnya adalah refleksi dari sistem informasi akademik program studi sistem komputer, maka dari itu data yang digunakan diambil dari penelitian dan pengamatan dari sistem informasi akademik program studi sistem komputer. Perancangan interface pada tugas akhir ini menggunakan framework Jquery mobile dan untuk penyimpanan data menggunakan basis data MySQL sedangkan bahasa pemrograman di sisi server menggunakan PHP. Pengaksesan sistem informasi akademik berbasis mobile web pada tugas akhir ini menggunakan sebuah aplikasi yang berjalan pada sistem operasi android yang dibuat menggunakan phonegap.\r\n Hasil dari perancangan ini adalah sebuah aplikasi sistem informasi akademik berbasis mobile web yang berguna untuk memudahkan mahasiswa dalam mendapatkan informasi akademik melalui perangkat bergerak, dari hasil pengujian blackbox didapatkan hasil bahwa aplikasi sudah dapat memberikan informasi sesuai dengan kebutuhan mahasiswa, seperti informasi KHS dan KRS, informasi jadwal, informasi matakuliah, informasi transkrip nilai. Pengujian juga menguji kompatibelitas dan user interface aplikasi, Pengujian kompatibelitas dan user interface diujikan pada sistem operasi android dari versi 2.2 sampai 4.2. </span>                                                    \r\n                                                ', 'rilis', 'konten_20161003121043.jpg', 'Mobile', '2016-10-03', 0, NULL, 0, 0),
(9, 'aplikasi pengelompokkan film korea terbaik', 'informasi berupa aplikasi yang oke untuk nonton video Drama langsung dari IPhone atau iPod kamu sehingga tentu kalian yg sangat suka melakukan streaming drama-drama korea \r\n\r\n', '<p style="border: 0px; margin-top: 10px; outline: 0px; padding: 0px; vertical-align: baseline; line-height: 21px; text-align: justify; color: rgb(64, 64, 64); font-family: Tauri, sans-serif; font-size: 14px;">Salah satu film drama yang paling populer di dunia adalah drama Korea di samping drama India yang saat ini juga tengah naik daun. Mayoritas pemudi yang ada di Indonesia sangat suka nonto drama Korea. Biasanya mereka menonton melalui televisi atau Youtube.</p><p style="border: 0px; margin-top: 10px; outline: 0px; padding: 0px; vertical-align: baseline; line-height: 21px; text-align: justify; color: rgb(64, 64, 64); font-family: Tauri, sans-serif; font-size: 14px;">Tapi tahukah anda bahwa saat ini drama Korea bisa ditonton di manapun dan kapanpu di perangkat Android? Ya, jika anda memiliki perangkat Android seperti smartphone atau tablet PC, anda bisa mendownload aplikasi khusus untuk nonton drama Korea. Dalam aplikasi tersebut terdapat ratusan drama Korea yang bisa anda tonton di manapun dan kapanpun. Jadi anda tak perlu stay di rumah untuk menyaksikan drama Korea favorit anda.</p>                                                    \r\n                                                ', 'rilis', 'konten_20161003121029.jpg', 'Film', '2016-10-03', 0, NULL, 0, 0),
(11, 'aplikasi pariwisata berbasis android', ' Aplikasi Android bertema Wisata merupakan yang paling banyak digunakan untuk melengkapi tugas akhir, baik untuk tugas sekolah atau kuliah.', '                                                    <h3 style="font-family: " open="" sans",="" helvetica;="" color:="" rgb(18,="" 18,="" 18);="" margin-top:="" 20px;"="">Sedikit tips belajar membuat aplikasi Android.</h3><h3 style="font-family: " open="" sans",="" helvetica;="" color:="" rgb(18,="" 18,="" 18);="" margin-top:="" 20px;"="">1. Belajarlah dari dasar</h3><p style="line-height: 24px; color: rgb(51, 51, 51); font-family: verdana, sans-serif; font-size: 14px;">Kenapa belajar dari dasar?, karena jika kita langsung mulai ke tahap yang profesional kita pasti akan merasa bingung, pusing duluan. Jadi lebih baik pahami dulu yang dasar-dasarnya. Dasar Coding(Bahasa Pemograman XML, JAVA, Struktur Android, Cara menggunakan Android Studio, dsb)</p><h3 style="font-family: " open="" sans",="" helvetica;="" color:="" rgb(18,="" 18,="" 18);="" margin-top:="" 20px;"="">2. Belajar dengan membuat aplikasi simpel dan bertahap</h3><p style="line-height: 24px; color: rgb(51, 51, 51); font-family: verdana, sans-serif; font-size: 14px;">Belajarlah dengan membuat aplikasi yang simpel dan bertahap. Maksudnya yaitu buat aplikasi step by step misalnya cara menampilkan gambar, setelah itu cara menampilkan vidio, cara memutar audio, dsb. Setiap aplikasi yang dibuat tersebut Anda simpan sebagai contoh project.</p><h3 style="font-family: " open="" sans",="" helvetica;="" color:="" rgb(18,="" 18,="" 18);="" margin-top:="" 20px;"="">3. Jangan Menyerah</h3><p style="line-height: 24px; color: rgb(51, 51, 51); font-family: verdana, sans-serif; font-size: 14px;">Ini tidak perlu saya jelaskan pasti sudah tau maksudnya..</p><p style="line-height: 24px; color: rgb(51, 51, 51); font-family: verdana, sans-serif; font-size: 14px;">Tapi banyak yang menemui masalah saat ingin membuat aplikasi Android, Masalah itu seperti tidak adanya pengajar, bingung mulai dari mana, tidak ada basic pemograman, dan lain-lain. Tapi itu semua bisa kita pelajari melalui internet.</p>                                                    \r\n                                                                                                ', 'rilis', 'konten_20161005031025.PNG', 'Android', '2016-10-05', 0, 3, 0, 0),
(12, 'asdasd', 'asdasdasdasdasdasdasdasdasd', 'asdasdasdasdasdasdasdas', 'rilis', 'konten_20161008031021.jpg', 'asdasdasdas', '2016-10-08', 0, 3, 0, 0),
(13, 'asdasda', 'asdasdasdasd', 'asdasdasd', 'rilis', 'konten_20161008031030.jpg', 'asdasda', '2016-10-08', 0, 3, 0, 0),
(14, 'ds', 'sddssdsd', 'sdsdsds', 'rilis', 'konten_20161008031034.jpg', 'dssddsd', '2016-10-08', 0, 3, 0, 0),
(15, 'sasad', 'dsadsadsa', 'sad', 'rilis', 'konten_20161008031051.jpg', 'saddsadsa', '2016-10-08', 0, 3, 0, 0),
(16, 'xxzxc', 'zxczxcxzcz', 'zxcxzc', 'rilis', 'konten_20161008031016.jpg', 'zxc', '2016-10-08', 0, 3, 0, 0),
(17, 'asdaad', 'asdasd', 'asdasd', 'rilis', 'konten_20161008031032.jpg', 'saada', '2016-10-08', 0, 3, 0, 0),
(18, 'scsdc', 'sdcsdcs', 's                                                    \r\n                                                ', 'rilis', 'konten_20161008031031.jpg', 'sdcsd', '2016-10-08', 0, 3, 0, 0),
(19, 'asdasdd', 'asdadas', 'asdasda', 'rilis', 'konten_20161008031009.jpg', '', '2016-10-08', 0, 3, 0, 0),
(20, 'asdasda', 'asdsadas', 'asd', 'rilis', 'konten_201610080310091.jpg', 'asd', '2016-10-08', 0, 3, 0, 0),
(21, 'asdsdasdas', 'sdasds', 'sdasdas', 'rilis', 'konten_20161008031025.jpg', 'dasdasda', '2016-10-08', 0, 3, 0, 0),
(22, 'sdfdsfsdfsd', 'fsdfsdfsd', 'fsdfsdfsdfsd', 'rilis', 'konten_20161008031051.jpg', 'sdfsdfsd', '2016-10-08', 0, 3, 0, 0),
(23, 'asdasd', 'asdasdass', 'dasdasdasd', 'rilis', 'konten_20161008031058.jpg', 'adasds', '2016-10-08', 0, 3, 0, 0),
(24, 'dssdasd', 'sdasdasd', 'asdasdasdas', 'rilis', 'konten_20161008031040.jpg', 'asdas', '2016-10-08', 0, 3, 0, 0),
(25, 'asdaads', 'dasdasd', '                                                    \r\n                                                ', 'rilis', 'konten_20161008031017.jpg', 'asdasdasdas', '2016-10-08', 0, 3, 0, 0),
(26, 'asd', 'asdasdasda', 'asdasd', 'rilis', 'konten_201610080310191.jpg', 'asdasd', '2016-10-08', 0, 3, 0, 0),
(27, 'gfgbfbfg', 'ferer', 'ghgjghjg', 'rilis', 'konten_20161008031041.jpg', 'gbfnmh,hmghngh', '2016-10-08', 0, 3, 0, 0),
(28, 'sdfsdasd', 'asdsadasdasd', 'dasdas', 'rilis', 'konten_20161008031049.jpg', 'asdasdasdas', '2016-10-08', 0, 3, 0, 0),
(29, 'asdasdasd', 'asdasdasdas', 'sdasdasda', 'rilis', 'konten_20161008031006.jpg', 'dasdasda', '2016-10-08', 0, 3, 0, 0),
(30, 'asdasdsa', 'asdasdasd', 'asdasdasdas', 'rilis', 'konten_20161008031057.jpg', 'asdasd', '2016-10-08', 0, 3, 0, 0),
(31, 'asdasdaasd', 'asdasdasdasd', 'sadasdasdasd', 'rilis', 'konten_20161008041017.jpg', 'asdasdasd', '2016-10-08', 0, 3, 0, 0),
(32, 'asdasdasd', 'asdasd', 'sdasdasd', 'rilis', 'konten_20161008041035.jpg', 'asd', '2016-10-08', 0, 3, 0, 0),
(33, 'ad', 'asdasdas', 'dasdasdas', 'rilis', 'konten_20161008041008.jpg', 'dasdas', '2016-10-08', 0, 3, 0, 0),
(34, 'asdasdasdasd', 'sadasdad', 'daasdasdasdasdad', 'rilis', 'konten_20161008041054.jpg', 'adada', '2016-10-08', 0, 3, 0, 0),
(35, 'cs', 'dasdasd', 'asdasdsadas', 'rilis', 'konten_20161008041059.jpg', 'asdasdasd', '2016-10-08', 0, 3, 0, 0),
(36, 'asdasdasdasds', 'dasdasdas', 'asdasdsaa', 'rilis', 'konten_20161008041049.jpg', 'dads', '2016-10-08', 0, 3, 0, 0),
(37, 'sadasd', 'asdsadas', 'asdasdasdasda', 'rilis', 'konten_201610080410541.jpg', 'dasdasdas', '2016-10-08', 0, 3, 0, 0),
(38, 'saas', 'asasas', 'sa', 'rilis', 'konten_20161008041029.jpg', 'sa', '2016-10-08', 0, 3, 0, 0),
(39, 'saaas', 'assxa', 'asxasx', 'rilis', 'konten_20161008041022.jpg', 'asdasx', '2016-10-08', 0, 3, 0, 0),
(40, 'KOnten', 'konten', 'ininisisisni anias inasni asinsa nisa ni sain anisani saniosanisain saniosak db dydf8twf twfgyewigo ew gyew gyew  gyew  gyewr gyew gyew gkew gywe gykwekgy eaw gykaew ygew gykew gyew gyewg geyw  gew<span style="line-height: 18.5714px;">i sain anisani saniosanisain saniosak db dydf8twf twfgyewigo ew gyew gyew  gyew  gyewr gyew gyew gkew gywe gykwekgy eaw gykaew ygew gykew gyew gyewg geyw  gew</span><span style="line-height: 18.5714px;">i sain anisani saniosanisain saniosak db dydf8twf twfgyewigo ew gyew gyew  gyew  gyewr gyew gyew gkew gywe gykwekgy eaw gykaew ygew gykew gyew gyewg geyw  gew</span><span style="line-height: 18.5714px;">i sain anisani saniosanisain saniosak db dydf8twf twfgyewigo ew gyew gyew  gyew  gyewr gyew gyew gkew gywe gykwekgy eaw gykaew ygew gykew gyew gyewg geyw  gew</span><span style="line-height: 18.5714px;">i sain anisani saniosanisain saniosak db dydf8twf twfgyewigo ew gyew gyew  gyew  gyewr gyew gyew gkew gywe gykwekgy eaw gykaew ygew gykew gyew gyewg geyw  gew</span><span style="line-height: 18.5714px;">i sain anisani saniosanisain saniosak db dydf8twf twfgyewigo ew gyew gyew  gyew  gyewr gyew gyew gkew gywe gykwekgy eaw gykaew ygew gykew gyew gyewg geyw  gew</span><span style="line-height: 18.5714px;">i sain anisani saniosanisain saniosak db dydf8twf twfgyewigo ew gyew gyew  gyew  gyewr gyew gyew gkew gywe gykwekgy eaw gykaew ygew gykew gyew gyewg geyw  gew</span><span style="line-height: 18.5714px;">i sain anisani saniosanisain saniosak db dydf8twf twfgyewigo ew gyew gyew  gyew  gyewr gyew gyew gkew gywe gykwekgy eaw gykaew ygew gykew gyew gyewg geyw  gew</span><span style="line-height: 18.5714px;">i sain anisani saniosanisain saniosak db dydf8twf twfgyewigo ew gyew gyew  gyew  gyewr gyew gyew gkew gywe gykwekgy eaw gykaew ygew gykew gyew gyewg geyw  gew</span><span style="line-height: 18.5714px;">i sain anisani saniosanisain saniosak db dydf8twf twfgyewigo ew gyew gyew  gyew  gyewr gyew gyew gkew gywe gykwekgy eaw gykaew ygew gykew gyew gyewg geyw  gew</span><span style="line-height: 18.5714px;">i sain anisani saniosanisain saniosak db dydf8twf twfgyewigo ew gyew gyew  gyew  gyewr gyew gyew gkew gywe gykwekgy eaw gykaew ygew gykew gyew gyewg geyw  gew</span><span style="line-height: 18.5714px;">i sain anisani saniosanisain saniosak db dydf8twf twfgyewigo ew gyew gyew  gyew  gyewr gyew gyew gkew gywe gykwekgy eaw gykaew ygew gykew gyew gyewg geyw  gew</span><span style="line-height: 18.5714px;">i sain anisani saniosanisain saniosak db dydf8twf twfgyewigo ew gyew gyew  gyew  gyewr gyew gyew gkew gywe gykwekgy eaw gykaew ygew gykew gyew gyewg geyw  gew</span><span style="line-height: 18.5714px;">i sain anisani saniosanisain saniosak db dydf8twf twfgyewigo ew gyew gyew  gyew  gyewr gyew gyew gkew gywe gykwekgy eaw gykaew ygew gykew gyew gyewg geyw  gew</span><span style="line-height: 18.5714px;">i sain anisani saniosanisain saniosak db dydf8twf twfgyewigo ew gyew gyew  gyew  gyewr gyew gyew gkew gywe gykwekgy eaw gykaew ygew gykew gyew gyewg geyw  gew</span><span style="line-height: 18.5714px;">i sain anisani saniosanisain saniosak db dydf8twf twfgyewigo ew gyew gyew  gyew  gyewr gyew gyew gkew gywe gykwekgy eaw gykaew ygew gykew gyew gyewg geyw  gew</span><span style="line-height: 18.5714px;">i sain anisani saniosanisain saniosak db dydf8twf twfgyewigo ew gyew gyew  gyew  gyewr gyew gyew gkew gywe gykwekgy eaw gykaew ygew gykew gyew gyewg geyw  gew</span><span style="line-height: 18.5714px;">i sain anisani saniosanisain saniosak db dydf8twf twfgyewigo ew gyew gyew  gyew  gyewr gyew gyew gkew gywe gykwekgy eaw gykaew ygew gykew gyew gyewg geyw  gew</span><span style="line-height: 18.5714px;">i sain anisani saniosanisain saniosak db dydf8twf twfgyewigo ew gyew gyew  gyew  gyewr gyew gyew gkew gywe gykwekgy eaw gykaew ygew gykew gyew gyewg geyw  gew</span><span style="line-height: 18.5714px;">i sain anisani saniosanisain saniosak db dydf8twf twfgyewigo ew gyew gyew  gyew  gyewr gyew gyew gkew gywe gykwekgy eaw gykaew ygew gykew gyew gyewg geyw  gew</span><span style="line-height: 18.5714px;">i sain anisani saniosanisain saniosak db dydf8twf twfgyewigo ew gyew gyew  gyew  gyewr gyew gyew gkew gywe gykwekgy eaw gykaew ygew gykew gyew gyewg geyw  gew</span><span style="line-height: 18.5714px;">i sain anisani saniosanisain saniosak db dydf8twf twfgyewigo ew gyew gyew  gyew  gyewr gyew gyew gkew gywe gykwekgy eaw gykaew ygew gykew gyew gyewg geyw  gew</span><span style="line-height: 18.5714px;">i sain anisani saniosanisain saniosak db dydf8twf twfgyewigo ew gyew gyew  gyew  gyewr gyew gyew gkew gywe gykwekgy eaw gykaew ygew gykew gyew gyewg geyw  gew</span><span style="line-height: 18.5714px;">i sain anisani saniosanisain saniosak db dydf8twf twfgyewigo ew gyew gyew  gyew  gyewr gyew gyew gkew gywe gykwekgy eaw gykaew ygew gykew gyew gyewg geyw  gew</span><span style="line-height: 18.5714px;">i sain anisani saniosanisain saniosak db dydf8twf twfgyewigo ew gyew gyew  gyew  gyewr gyew gyew gkew gywe gykwekgy eaw gykaew ygew gykew gyew gyewg geyw  gew</span><span style="line-height: 18.5714px;">i sain anisani saniosanisain saniosak db dydf8twf twfgyewigo ew gyew gyew  gyew  gyewr gyew gyew gkew gywe gykwekgy eaw gykaew ygew gykew gyew gyewg geyw  gew</span><span style="line-height: 18.5714px;">i sain anisani saniosanisain saniosak db dydf8twf twfgyewigo ew gyew gyew  gyew  gyewr gyew gyew gkew gywe gykwekgy eaw gykaew ygew gykew gyew gyewg geyw  gew</span>', 'rilis', 'konten_20170110030121.jpg', 'asdas,asd,asdas,da,sd,asd,asd,asd,asd,', '2017-01-10', 0, 3, 0, 0);

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
  `id_anggota` varchar(30) DEFAULT NULL,
  `jenis` enum('Jaringan','Program','Desain','Lainnya') DEFAULT NULL,
  `keterangan` text,
  `tgl_pembuatan` text,
  `foto` text,
  PRIMARY KEY (`id_portofolio`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `table_portofolio`
--

INSERT INTO `table_portofolio` (`id_portofolio`, `nama_portofolio`, `id_anggota`, `jenis`, `keterangan`, `tgl_pembuatan`, `foto`) VALUES
(1, 'jgvjjhvjh', '3', 'Jaringan', 'jnkjkjnkjnkj', 'hkjiuiun', 'tambahan_20161005021005.jpg,tambahan_201610050210051.jpg,tambahan_201610050210052.jpg,tambahan_201610050210053.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `table_proker`
--

CREATE TABLE IF NOT EXISTS `table_proker` (
  `id_proker` int(5) NOT NULL AUTO_INCREMENT,
  `nama_kegiatan` varchar(70) DEFAULT NULL,
  `divisi` enum('kesekretariatan','humas','keuangan','pendidikan','ki') DEFAULT NULL,
  `status` enum('daftar','terlaksana') DEFAULT NULL,
  `foto` varchar(120) DEFAULT NULL,
  `tujuan_kegiatan` text,
  `sasaran_kegiatan` text,
  `waktu` text,
  `sumber_dana` text,
  `tgl_update` datetime NOT NULL,
  PRIMARY KEY (`id_proker`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `table_proker`
--

INSERT INTO `table_proker` (`id_proker`, `nama_kegiatan`, `divisi`, `status`, `foto`, `tujuan_kegiatan`, `sasaran_kegiatan`, `waktu`, `sumber_dana`, `tgl_update`) VALUES
(4, 'Project akhir  Pembelajaran ', 'pendidikan', 'terlaksana', 'proker_20161006101036.jpg', 'Untuk meningkatkan kerjasama serta bukti penyelesaian masalah IT', 'Angkatan 9 dan 10', '14 Mei 2016 ', 'Iuran bulanan dan sumbangsi', '2016-10-06 10:10:36'),
(5, 'Training Of Trainer', 'pendidikan', 'terlaksana', 'proker_20161005021036.PNG', 'Untuk meningkatkan kemampuan dalam menyampaikan materi', 'Anggota Exomatik', 'Setiap tanggal 5', 'Iuran bulanan dan sumbangsi', '0000-00-00 00:00:00'),
(6, 'Software House /  Pengumpulan Karya', 'pendidikan', 'daftar', 'proker_20161003071020.jpg,proker_201610030710201.jpg,proker_201610030710202.jpg', 'Untuk mengumpulkan karya ', 'Anggota Aktif', '10 September 2016', 'Iuran bulanan dan sumbangsi', '0000-00-00 00:00:00'),
(7, 'Pembelajaran Rutin', 'pendidikan', 'terlaksana', 'proker_20161005041035.jpg,proker_201610050410351.jpg,proker_201610050410352.jpg,proker_201610050410353.jpg,proker_201610', 'Untuk meningkatkan kemampuan serta penyelesaian masalah pada bidang IT dan  sosial engineerine', 'Angkatan 9 dan 10', 'Setiap hari rabu dan sabtu ', 'Iuran bulanan dan sumbangsi', '2016-10-05 04:10:36'),
(9, 'Sharing Time', 'ki', 'terlaksana', NULL, 'Memberikan motivasi, semangat belajar & solusi serta strategi berprestasi kepada anggota Exomatik', 'Anggota Exomatik Angkatan 8, 9, dan 10 ', 'Setiap tanggal 30', '-', '0000-00-00 00:00:00'),
(10, ' EXECUTION', 'ki', 'daftar', NULL, 'Untuk membahas dan mengimplementasikan ide – ide kreatif yang bisa digunakan untuk branding Exomatik menjadi lebih baik dari sebelumnya.Serta belajar bersama untuk mendesain keperluan yang  kita gunakan, misalnya Pamflet, Baliho, KTA, Papan Struktur,  dan lain sebagainya.', ' Anggota Exomatik Angkatan 9 dan 10', '9 Maret 2016', '-', '0000-00-00 00:00:00'),
(11, 'Pengelolaan dan Pembaharuan Website Exomatik', 'ki', 'terlaksana', 'proker_20161005051059.jpg', '1. Sebagai Media Penyebaran Informasi bagi Anggota,terkait dengan kegiatan- kegiatan Organisasi dan Informasi yang terkait dengan keanggotaan, dan profil anggaota\r\n2. Bertujuan untuk penyebaran informasi sekaligus sebagai\r\nmedia bagi anggota  untuk belajar menulis baik, artikel\r\nilmiah, jurnal ataupun karya tulisan lainnya.\r\n', ' Anggota Exomatik', ' 4Juni 2016', ' Anggota Exomatik', '2016-10-05 05:10:59'),
(12, ' Tim Software', 'ki', 'terlaksana', 'proker_20161005051005.jpg,proker_201610050510051.jpg', 'Pembetukan tim pembuatan aplikasi   ', ' Anggota Exomatik Angkatan 8 & 9', ' 3 April 2016', '-', '2016-10-05 05:10:05'),
(13, 'Pengadaan Sekretariat', 'kesekretariatan', 'terlaksana', NULL, 'Sebagai wadah untuk saling bertukar pengetahuan dan ilmu', 'Anggota Exomatik', '10 April 2016', 'Dana Khusus Exomatik dan Badan Usaha Sekret', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `table_saran`
--

CREATE TABLE IF NOT EXISTS `table_saran` (
  `id_saran` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `jenis` enum('saran','kritik') NOT NULL,
  PRIMARY KEY (`id_saran`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
-- Table structure for table `table_tutorial`
--

CREATE TABLE IF NOT EXISTS `table_tutorial` (
  `id_tutorial` int(5) NOT NULL AUTO_INCREMENT,
  `judul_tutorial` varchar(100) NOT NULL,
  `deskripsi` tinytext NOT NULL,
  `isi_tutorial` mediumtext NOT NULL,
  `tgl_rilis` date NOT NULL,
  `judul_utama` varchar(30) NOT NULL,
  `id_user` int(4) NOT NULL,
  PRIMARY KEY (`id_tutorial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `table_tutorial`
--

INSERT INTO `table_tutorial` (`id_tutorial`, `judul_tutorial`, `deskripsi`, `isi_tutorial`, `tgl_rilis`, `judul_utama`, `id_user`) VALUES
(2, 'asdasdasdssdadasdasdasdasda', '', '                                                    asdasdsadasdasdasdasasdasdasdasda', '2016-10-07', 'ini judul utama baru', 3),
(3, 'asdasdsadasdsadasdas', 'asdasdas', 'dasdasd', '2016-10-07', 'asdasdasdasdasdasdsad', 3);

-- --------------------------------------------------------

--
-- Table structure for table `table_user`
--

CREATE TABLE IF NOT EXISTS `table_user` (
  `id_user` int(5) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `password` text,
  `level` enum('admin','user') DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `table_user`
--

INSERT INTO `table_user` (`id_user`, `nama_lengkap`, `password`, `level`, `email`, `no_hp`) VALUES
(3, 'Ricky Resky Ananda', 'ee11cbb19052e40b07aac0ca060c23ee', 'admin', 'rra.rickyresky@gmail.com', '085272728282829'),
(11, 'Nurhakiki', 'd41d8cd98f00b204e9800998ecf8427e', 'user', 'kiki60200114006@gmail.com', '085340747902'),
(12, 'user', 'd41d8cd98f00b204e9800998ecf8427e', 'user', 'user@user.com', '088288128218'),
(13, 'asdsadasd', 'd41d8cd98f00b204e9800998ecf8427e', 'user', 'rra.rickyresky@gmail.com', 'assasa'),
(14, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user', 'user@user.com', '0430430');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
