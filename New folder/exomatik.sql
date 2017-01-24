-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 29 Sep 2016 pada 15.24
-- Versi Server: 5.5.32
-- Versi PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `exomatik`
--
CREATE DATABASE IF NOT EXISTS `exomatik` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `exomatik`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_anggota`
--

CREATE TABLE IF NOT EXISTS `table_anggota` (
  `id_anggota` int(5) NOT NULL AUTO_INCREMENT,
  `nik` varchar(20) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `ttl` date DEFAULT NULL,
  `jk` enum('laki-laki','perempuan') DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `angkatan` int(3) DEFAULT NULL,
  `status` enum('pengurus','anggota_aktif','anggota_nonaktif') DEFAULT NULL,
  `foto` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_anggota`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `table_anggota`
--

INSERT INTO `table_anggota` (`id_anggota`, `nik`, `nama`, `ttl`, `jk`, `no_hp`, `angkatan`, `status`, `foto`) VALUES
(1, '234234234', 'ricky', '2016-09-16', 'laki-laki', '09828328328', 5, 'pengurus', 'a.jpg'),
(2, '33434', 'resky', '2016-09-15', 'perempuan', '32094983', 9, 'anggota_aktif', 'a.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_konten`
--

CREATE TABLE IF NOT EXISTS `table_konten` (
  `id_konten` int(5) NOT NULL AUTO_INCREMENT,
  `judul_konten` varchar(120) DEFAULT NULL,
  `isi_konten` text,
  `status` enum('rilis','draft') DEFAULT NULL,
  `gambar` text,
  `tgl_rilis` date DEFAULT NULL,
  `id_user` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_konten`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `table_konten`
--

INSERT INTO `table_konten` (`id_konten`, `judul_konten`, `isi_konten`, `status`, `gambar`, `tgl_rilis`, `id_user`) VALUES
(1, 'ini judul konten ', 'ini isi konten', 'rilis', 'aaa.jpg', '2016-09-28', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_portofolio`
--

CREATE TABLE IF NOT EXISTS `table_portofolio` (
  `id_portofolio` int(5) NOT NULL AUTO_INCREMENT,
  `nama_portofolio` varchar(30) DEFAULT NULL,
  `id_anggota` varchar(30) DEFAULT NULL,
  `jenis` enum('Jaringan','Program','Desain','Lainnya') DEFAULT NULL,
  `keterangan` text,
  `tgl_pembuatan` text,
  `foto` text,
  PRIMARY KEY (`id_portofolio`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `table_portofolio`
--

INSERT INTO `table_portofolio` (`id_portofolio`, `nama_portofolio`, `id_anggota`, `jenis`, `keterangan`, `tgl_pembuatan`, `foto`) VALUES
(1, 'asdsadasdasdasd', '2,1', 'Jaringan', 'asdsadassaasd', '0000-00-00', 'tambahan_20160927010936.jpg'),
(2, 'asdasda', '', 'Jaringan', 'sadasda', '0000-00-00', 'tambahan_20160927010936.jpg'),
(3, 'sadsadasdasda', '2', 'Program', 'asdasdasdas', 'dasdasdas', 'tambahan_20160927120917.jpg,tambahan_201609271209171.jpg'),
(4, 'asdasd', '2', 'Lainnya', 'asdasdasdasdas', 'asdasdasdasd', 'tambahan_20160927010936.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_proker`
--

CREATE TABLE IF NOT EXISTS `table_proker` (
  `id_proker` int(5) NOT NULL AUTO_INCREMENT,
  `nama_kegiatan` varchar(30) DEFAULT NULL,
  `divisi` enum('kesekretariatan','humas','keuangan','pendidikan','ki') DEFAULT NULL,
  `status` enum('daftar','terlaksana') DEFAULT NULL,
  `foto` varchar(120) DEFAULT NULL,
  `tujuan_kegiatan` text,
  `sasaran_kegiatan` text,
  `waktu` text,
  `sumber_dana` text,
  PRIMARY KEY (`id_proker`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `table_proker`
--

INSERT INTO `table_proker` (`id_proker`, `nama_kegiatan`, `divisi`, `status`, `foto`, `tujuan_kegiatan`, `sasaran_kegiatan`, `waktu`, `sumber_dana`) VALUES
(4, 'ini yang ditambah', 'keuangan', 'daftar', NULL, 'sasssasa', 'assasasasa', 'sasasasasa', 'sasassasasa'),
(5, 'sadasdsa', 'pendidikan', 'daftar', NULL, 'dasdasdas', 'dasdasdasdasdas', 'asdasdsd', 'asdasdasda');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_user`
--

CREATE TABLE IF NOT EXISTS `table_user` (
  `id_user` int(5) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `password` text,
  `level` enum('admin','user') DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `table_user`
--

INSERT INTO `table_user` (`id_user`, `nama_lengkap`, `password`, `level`, `email`, `no_hp`) VALUES
(1, 'ricky', 'd41d8cd98f00b204e9800998ecf8427e', 'admin', 'rra.rickyresky@gmailc.om', '08525555555555'),
(3, 'sadsa a', 'bff149a0b87f5b0e00d9dd364e9ddaa0', 'admin', 'asdasda', 'asdasdasd'),
(4, 'sasddsadassda', '0aa1ea9a5a04b78d4581dd6d17742627', 'user', 'asdsdaasdsda', 'dsadas'),
(5, 'asd', '7815696ecbf1c96e6894b779456d330e', 'user', 'asd', 'asd'),
(6, 'asd', '7815696ecbf1c96e6894b779456d330e', 'user', 'asd', 'asd'),
(7, 'asd', '7815696ecbf1c96e6894b779456d330e', 'admin', 'asd', 'asads'),
(8, 'sdsa', 'ec02c59dee6faaca3189bace969c22d3', 'user', 'asdasd', 'sdasda'),
(9, 'asda', 'a8f5f167f44f4964e6c998dee827110c', 'user', 'sdasd', 'asdasdasd'),
(10, 'rickyasdasdas', '3c130ea5d8d2d3daca7f6808cdf0f148', 'user', 'asdasdasdasdas', '0852222222222222222');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
