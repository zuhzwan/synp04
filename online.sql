-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 15, 2015 at 05:29 AM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `online`
--

-- --------------------------------------------------------

--
-- Table structure for table `rb_users`
--

CREATE TABLE IF NOT EXISTS `rb_users` (
  `id_user` int(5) NOT NULL AUTO_INCREMENT,
  `aemail` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `nama_lengkap` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `jenis_kelamin` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `level` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT 'sekolah',
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=106 ;

--
-- Dumping data for table `rb_users`
--

INSERT INTO `rb_users` (`id_user`, `aemail`, `password`, `nama_lengkap`, `jenis_kelamin`, `level`) VALUES
(1, 'admin', '1869f932221d92894bd1ee7ecec597c4', 'Administrator', 'Laki-laki', 'superuser'),
(2, 'kepala', '870f669e4bbbfa8a6fde65549826d1c4', 'Endang Nurhayati, S.Pd', 'Perempuan', 'kepala'),
(3, 'wakil', '28d866e5f30ae6386be9f1921e0b2a58', 'Ali Shodiqin, S.Pd,MM', 'Laki-laki', 'wakil');

-- --------------------------------------------------------

--
-- Table structure for table `sn_guru`
--

CREATE TABLE IF NOT EXISTS `sn_guru` (
  `id_guru` int(50) NOT NULL AUTO_INCREMENT,
  `nuptk` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_guru` varchar(255) NOT NULL,
  `id_mp` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(20) NOT NULL,
  PRIMARY KEY (`id_guru`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `sn_guru`
--

INSERT INTO `sn_guru` (`id_guru`, `nuptk`, `password`, `nama_guru`, `id_mp`, `tempat_lahir`, `tanggal_lahir`) VALUES
(1, '10292015', '10292015', 'ggggg', '22', 'Gresik', '2015-10-29'),
(2, '7896', '123', 'ali', '7', 'gresik', '2015-11-13'),
(4, '123', '1223131', '', '', '', ''),
(5, '121', '213', 'kjhjk', 'hjkh', 'kjh', '2015-12-31'),
(6, '1231231', '123', 'Ali', 'PKn', 'Gresik', '2015-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `sn_siswa`
--

CREATE TABLE IF NOT EXISTS `sn_siswa` (
  `id_siswa` int(50) NOT NULL AUTO_INCREMENT,
  `nis` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_siswa` varchar(255) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(50) NOT NULL,
  `id_kelas` varchar(50) NOT NULL,
  PRIMARY KEY (`id_siswa`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `sn_siswa`
--

INSERT INTO `sn_siswa` (`id_siswa`, `nis`, `password`, `nama_siswa`, `tempat_lahir`, `tanggal_lahir`, `id_kelas`) VALUES
(1, '1128', '1128', 'Zwan', 'Gresik', '87', '3'),
(5, '9279', 'nn', 'Syaiful', 'Gresik', '2015-12-31', '2'),
(6, '78979', '1234', 'Syaiful Nazar', 'Gresik', '2015-12-31', '2'),
(7, '9827', 'lkh', 'nnn', 'nn', '2015-12-31', '12'),
(8, '1021', '1213', 'kkk', '12', '2015-12-31', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `sn_users`
--

CREATE TABLE IF NOT EXISTS `sn_users` (
  `id_user` int(5) NOT NULL AUTO_INCREMENT,
  `aemail` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `nama_lengkap` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `jenis_kelamin` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `level` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT 'sekolah',
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=106 ;

--
-- Dumping data for table `sn_users`
--

INSERT INTO `sn_users` (`id_user`, `aemail`, `password`, `nama_lengkap`, `jenis_kelamin`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Syaiful Nazar', 'L', 'superuser');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
