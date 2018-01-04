-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2017 at 01:31 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gntr_app`
--


-- --------------------------------------------------------

--
-- Table structure for table `absen_gajian`
--

CREATE TABLE IF NOT EXISTS `absen_gajian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `grup` varchar(100) DEFAULT NULL,
  `fname` varchar(100) NOT NULL,
  `hari1` varchar(100) NOT NULL,
  `hari2` varchar(100) NOT NULL,
  `hari3` varchar(100) NOT NULL,
  `hari4` varchar(100) NOT NULL,
  `hari5` varchar(100) NOT NULL,
  `hari6` varchar(100) NOT NULL,
  `hari7` varchar(100) NOT NULL,
  `hari8` varchar(100) NOT NULL,
  `hari9` varchar(100) NOT NULL,
  `hari10` varchar(100) NOT NULL,
  `hari11` varchar(100) NOT NULL,
  `hari12` varchar(100) NOT NULL,
  `hari13` varchar(100) NOT NULL,
  `hari14` varchar(100) NOT NULL,
  `hari15` varchar(100) NOT NULL,
  `hari16` varchar(100) NOT NULL,
  `hari17` varchar(100) NOT NULL,
  `hari18` varchar(100) NOT NULL,
  `hari19` varchar(100) NOT NULL,
  `hari20` varchar(100) NOT NULL,
  `hari21` varchar(100) NOT NULL,
  `hari22` varchar(100) NOT NULL,
  `hari23` varchar(100) NOT NULL,
  `hari24` varchar(100) NOT NULL,
  `hari25` varchar(100) NOT NULL,
  `hari26` varchar(100) NOT NULL,
  `hari27` varchar(100) NOT NULL,
  `hari28` varchar(100) NOT NULL,
  `hari29` varchar(100) NOT NULL,
  `hari30` varchar(100) NOT NULL,
  `hari31` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `absen_gajian`
--

INSERT INTO `absen_gajian` (`id`, `grup`, `fname`, `hari1`, `hari2`, `hari3`, `hari4`, `hari5`, `hari6`, `hari7`, `hari8`, `hari9`, `hari10`, `hari11`, `hari12`, `hari13`, `hari14`, `hari15`, `hari16`, `hari17`, `hari18`, `hari19`, `hari20`, `hari21`, `hari22`, `hari23`, `hari24`, `hari25`, `hari26`, `hari27`, `hari28`, `hari29`, `hari30`, `hari31`) VALUES
(11, 'Group 1', 'Guntur', 'M', 'S', 'P', '', 'M', 'S', 'P', '', 'M', 'S', 'P', '', 'M', 'S', 'P', '', 'M', 'S', 'P', '', 'OFF', 'T', '', '', '', '', '', '', '', '', ''),
(12, NULL, 'Yandri', 'L', 'S', 'P', '', 'M', 'S', 'P', '', 'OFF', 'T', 'T', 'T', 'T', '', 'L', 'S', '', 'P', '', '', 'M', 'S', 'P', 'M', 'S', 'P', '', '', '', '', ''),
(13, NULL, 'Totti', 'L', 'S', 'M', '', '', 'M', 'S', 'P', '', 'T', 'T', 'T', 'L', 'S', 'P', '', '', 'P', 'L', 'S', '', 'OFF', 'OFF', 'M', '', '', '', '', 'P', 'P', 'P'),
(14, NULL, 'Andy', 'S', 'M', 'P', '', 'T', 'T', 'L', 'OFF', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(15, 'Group 2', 'Del Piero', 'S', 'M', 'P', '', 'T', 'T', 'L', '', '', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'T', 'T', 'T', 'T', 'T', 'S', 'M', 'P', 'OFF', 'OFF', 'OFF', '', '', '', ''),
(16, NULL, 'Dybala', 'M', 'S', 'P', '', 'T', 'T', 'T', 'T', 'T', 'T', 'OFF', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(17, NULL, 'Higuain', 'M', 'P', '', 'L', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(18, NULL, 'Pjanic', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'OFF', 'OFF', 'M', 'S', 'P', 'P', 'S', 'M', 'M', 'M', 'M', 'M', 'M', 'M', 'M', 'T', 'T', 'T', 'T', 'T'),
(19, NULL, 'Guntur', 'L', 'OFF', 'OFF', 'T', 'T', 'P', 'S', 'M', 'P', 'S', 'M', 'P', 'S', 'M', '', '', '', '', '', '', 'P', 'S', 'M', '', 'P', 'S', 'M', '', 'P', 'S', 'M');

-- --------------------------------------------------------

--
-- Table structure for table `absen_tagihan`
--

CREATE TABLE IF NOT EXISTS `absen_tagihan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `grup` varchar(100) DEFAULT NULL,
  `fname` varchar(100) NOT NULL,
  `hari1` varchar(100) NOT NULL,
  `hari2` varchar(100) NOT NULL,
  `hari3` varchar(100) NOT NULL,
  `hari4` varchar(100) NOT NULL,
  `hari5` varchar(100) NOT NULL,
  `hari6` varchar(100) NOT NULL,
  `hari7` varchar(100) NOT NULL,
  `hari8` varchar(100) NOT NULL,
  `hari9` varchar(100) NOT NULL,
  `hari10` varchar(100) NOT NULL,
  `hari11` varchar(100) NOT NULL,
  `hari12` varchar(100) NOT NULL,
  `hari13` varchar(100) NOT NULL,
  `hari14` varchar(100) NOT NULL,
  `hari15` varchar(100) NOT NULL,
  `hari16` varchar(100) NOT NULL,
  `hari17` varchar(100) NOT NULL,
  `hari18` varchar(100) NOT NULL,
  `hari19` varchar(100) NOT NULL,
  `hari20` varchar(100) NOT NULL,
  `hari21` varchar(100) NOT NULL,
  `hari22` varchar(100) NOT NULL,
  `hari23` varchar(100) NOT NULL,
  `hari24` varchar(100) NOT NULL,
  `hari25` varchar(100) NOT NULL,
  `hari26` varchar(100) NOT NULL,
  `hari27` varchar(100) NOT NULL,
  `hari28` varchar(100) NOT NULL,
  `hari29` varchar(100) NOT NULL,
  `hari30` varchar(100) NOT NULL,
  `hari31` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `absen_tagihan`
--

INSERT INTO `absen_tagihan` (`id`, `grup`, `fname`, `hari1`, `hari2`, `hari3`, `hari4`, `hari5`, `hari6`, `hari7`, `hari8`, `hari9`, `hari10`, `hari11`, `hari12`, `hari13`, `hari14`, `hari15`, `hari16`, `hari17`, `hari18`, `hari19`, `hari20`, `hari21`, `hari22`, `hari23`, `hari24`, `hari25`, `hari26`, `hari27`, `hari28`, `hari29`, `hari30`, `hari31`) VALUES
(1, 'Grup 1', 'Guntur', 'P', 'S', 'M', '', 'P', 'S', 'M', '', 'OFF', 'OFF', '', 'L', 'L', 'L', '', 'P', 'S', 'M', '', '', 'P', 'S', 'M', '', '', '', '', '', '', '', ''),
(2, NULL, 'Andy', 'p', 's', 'm', '', '', '', '', '', '', 'p', 's', 'm', '', '', '', '', 'l', 'l', 'l', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `absen_tagihanot`
--

CREATE TABLE IF NOT EXISTS `absen_tagihanot` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `grup` varchar(100) DEFAULT NULL,
  `fname` varchar(100) NOT NULL,
  `jamkerja` varchar(100) NOT NULL,
  `jamlembur` varchar(100) NOT NULL,
  `realisasi` varchar(100) NOT NULL,
  `perhitunganovertime` varchar(100) NOT NULL,
  `nominalperjam` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `absen_tagihanot`
--

INSERT INTO `absen_tagihanot` (`id`, `grup`, `fname`, `jamkerja`, `jamlembur`, `realisasi`, `perhitunganovertime`, `nominalperjam`, `total`, `keterangan`) VALUES
(2, 'Group1', 'FEBRI. DW', '16:00 s/d 08:00', '8 Jam', '7,5 Jam', '15,5 Jam', 'Rp 18.851', 'Rp 292191', ''),
(3, '', '	MULYADI', '16:00 s/d 08:00', '8 Jam', '7,5 Jam', '15,5 Jam', 'Rp 18.851', 'Rp 292191', ''),
(8, 'NO', 'Group 2', 'MUKTAR', '16:00 s/d 08:00', '8 Jam', '7,5 Jam', 'Rp 18.851', 'Rp 292191', '-'),
(9, '-', 'No.1', 'rrckbkbb', '16:00 s/d 08:00', '8 Jam', '7,5 Jam', '15,5 Jam', 'Rp 20000', '0');

-- --------------------------------------------------------

--
-- Table structure for table `gntrapp_adminuserlevels`
--

CREATE TABLE IF NOT EXISTS `gntrapp_adminuserlevels` (
  `aulv_id` int(11) NOT NULL AUTO_INCREMENT,
  `aulv_name` varchar(100) CHARACTER SET latin1 NOT NULL,
  `aulv_role_access` text NOT NULL,
  `aulv_void` tinyint(4) NOT NULL,
  `aulv_entryuser` varchar(100) CHARACTER SET latin1 NOT NULL,
  `aulv_entrydate` datetime NOT NULL,
  `aulv_changeuser` varchar(100) CHARACTER SET latin1 NOT NULL,
  `aulv_changedate` datetime DEFAULT NULL,
  PRIMARY KEY (`aulv_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `gntrapp_adminuserlevels`
--

INSERT INTO `gntrapp_adminuserlevels` (`aulv_id`, `aulv_name`, `aulv_role_access`, `aulv_void`, `aulv_entryuser`, `aulv_entrydate`, `aulv_changeuser`, `aulv_changedate`) VALUES
(1, 'Direksi', 'a:20:{s:8:"pengguna";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:11:"wajib-pajak";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:10:"user-level";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:10:"departemen";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:19:"daftar-aktiva-tetap";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:19:"kas-bank-penerimaan";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:19:"kas-bank-pembayaran";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:15:"grafik-bank-bca";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:11:"daftar-akun";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:18:"insentif-hari-raya";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:9:"mata-uang";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:16:"proyek-dashboard";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:8:"karyawan";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:7:"laporan";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:3:"bpu";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:9:"lain-lain";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:9:"penjualan";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:9:"pembelian";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:17:"bpu-penerimaankas";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:18:"bpu-pengeluarankas";a:1:{s:4:"read";s:1:"1";}}', 0, '', '2017-09-06 17:12:39', '', '2017-09-23 11:19:10'),
(2, 'Manager', 'a:14:{s:8:"pengguna";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:11:"wajib-pajak";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:10:"user-level";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:10:"departemen";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:19:"daftar-aktiva-tetap";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:19:"kas-bank-penerimaan";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:19:"kas-bank-pembayaran";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:11:"daftar-akun";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:8:"karyawan";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:7:"laporan";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:3:"bpu";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:9:"lain-lain";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:9:"penjualan";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:9:"pembelian";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}}', 0, '', '2017-09-06 17:13:40', '', NULL),
(3, 'Admin', 'a:14:{s:8:"pengguna";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:10:"departemen";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:19:"kas-bank-penerimaan";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:19:"kas-bank-pembayaran";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:15:"grafik-bank-bca";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:9:"mata-uang";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:16:"proyek-dashboard";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:8:"karyawan";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:7:"laporan";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:3:"bpu";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:9:"penjualan";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:9:"pembelian";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:17:"bpu-penerimaankas";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:18:"bpu-pengeluarankas";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}}', 0, '', '2017-10-08 05:24:54', '', NULL),
(4, 'Staff', 'a:19:{s:8:"pengguna";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:11:"wajib-pajak";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:10:"user-level";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:10:"departemen";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:19:"daftar-aktiva-tetap";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:19:"kas-bank-penerimaan";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:19:"kas-bank-pembayaran";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:15:"grafik-bank-bca";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:11:"daftar-akun";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:18:"insentif-hari-raya";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:9:"mata-uang";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:16:"proyek-dashboard";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:8:"karyawan";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:7:"laporan";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:3:"bpu";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:9:"penjualan";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:9:"pembelian";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:17:"bpu-penerimaankas";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:18:"bpu-pengeluarankas";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}}', 0, '', '2017-10-22 04:34:54', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gntrapp_adminusers`
--

CREATE TABLE IF NOT EXISTS `gntrapp_adminusers` (
  `admusr_id` int(3) NOT NULL AUTO_INCREMENT,
  `admusr_username` varchar(60) DEFAULT NULL,
  `admusr_userpasswd` varchar(255) DEFAULT NULL,
  `admusr_aulv_id` int(11) DEFAULT NULL,
  `admusr_user_status` enum('y','n') DEFAULT 'y',
  `admusr_void` tinyint(4) NOT NULL,
  `admusr_lastactivity` datetime NOT NULL,
  `admusr_entryuser` varchar(100) NOT NULL,
  `admusr_entrydate` datetime NOT NULL,
  `admusr_changeuser` varchar(100) NOT NULL,
  `admusr_changedate` datetime DEFAULT NULL,
  PRIMARY KEY (`admusr_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `gntrapp_adminusers`
--

INSERT INTO `gntrapp_adminusers` (`admusr_id`, `admusr_username`, `admusr_userpasswd`, `admusr_aulv_id`, `admusr_user_status`, `admusr_void`, `admusr_lastactivity`, `admusr_entryuser`, `admusr_entrydate`, `admusr_changeuser`, `admusr_changedate`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 'y', 0, '2017-11-19 12:44:07', '', '0000-00-00 00:00:00', '', NULL),
(2, 'Guntur', '30d8692c0d2ac50d082f20cfc4648206', 1, 'y', 0, '2017-09-23 11:19:16', '', '2017-09-06 17:14:07', '', '2017-09-23 11:16:41'),
(3, 'Andre', 'dd573120e473c889140e34e817895495', 2, 'y', 0, '0000-00-00 00:00:00', '', '2017-10-07 08:57:58', '', NULL),
(4, 'Nur', 'd951ed5aeec39f6c8d0b733389416aec', 3, 'y', 0, '2017-10-08 05:25:30', '', '2017-10-08 05:25:20', '', NULL),
(5, 'Teddy', '0bd45470b11e9cd84afe28387bd98b48', 4, 'y', 0, '2017-10-22 09:00:43', '', '2017-10-22 04:35:32', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gntrapp_aktivalancar`
--

CREATE TABLE IF NOT EXISTS `gntrapp_aktivalancar` (
  `daktlcr_id` int(11) NOT NULL AUTO_INCREMENT,
  `daktlcr_kode` varchar(100) NOT NULL,
  `daktlcr_keterangan` text NOT NULL,
  `daktlcr_tipe` varchar(100) NOT NULL,
  `daktlcr_harga` int(11) NOT NULL,
  `daktlcr_tanggalpakai` date NOT NULL,
  `daktlcr_tanggalbeli` date NOT NULL,
  `daktlcr_qty` int(11) NOT NULL,
  `daktlcr_umurbulan` int(11) NOT NULL,
  `daktlcr_persensusut` int(11) NOT NULL,
  `daktlcr_pajak` int(11) NOT NULL,
  `daktlcr_void` tinyint(4) NOT NULL,
  `daktlcr_entryuser` varchar(100) NOT NULL,
  `daktlcr_entrydate` datetime NOT NULL,
  `daktlcr_changeuser` varchar(100) NOT NULL,
  `daktlcr_changedate` datetime NOT NULL,
  PRIMARY KEY (`daktlcr_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `gntrapp_aktivalancar`
--

INSERT INTO `gntrapp_aktivalancar` (`daktlcr_id`, `daktlcr_kode`, `daktlcr_keterangan`, `daktlcr_tipe`, `daktlcr_harga`, `daktlcr_tanggalpakai`, `daktlcr_tanggalbeli`, `daktlcr_qty`, `daktlcr_umurbulan`, `daktlcr_persensusut`, `daktlcr_pajak`, `daktlcr_void`, `daktlcr_entryuser`, `daktlcr_entrydate`, `daktlcr_changeuser`, `daktlcr_changedate`) VALUES
(3, 'lancar kode 1', 'keterangan lancar 1', 'tpe lancar 1', 45245245, '2017-11-05', '2017-11-05', 1, 12, 30, 400000, 1, '', '2017-11-05 06:05:09', '', '2017-11-05 06:23:39'),
(4, 'vwovno', 'onono', '4', 1000000, '2017-11-05', '2017-11-05', 1, 24, 8, 5, 0, '', '2017-11-05 06:24:08', '', '2017-11-05 07:01:42');

-- --------------------------------------------------------

--
-- Table structure for table `gntrapp_aktivatetap`
--

CREATE TABLE IF NOT EXISTS `gntrapp_aktivatetap` (
  `dakt_id` int(11) NOT NULL AUTO_INCREMENT,
  `dakt_kode` varchar(100) NOT NULL,
  `dakt_keterangan` text NOT NULL,
  `dakt_tipe` varchar(100) NOT NULL,
  `dakt_harga` int(11) NOT NULL,
  `dakt_tanggalpakai` date NOT NULL,
  `dakt_tanggalbeli` date NOT NULL,
  `dakt_qty` int(11) NOT NULL,
  `dakt_umurbulan` int(11) NOT NULL,
  `dakt_persensusut` int(11) NOT NULL,
  `dakt_pajak` int(11) NOT NULL,
  `dakt_void` tinyint(4) NOT NULL,
  `dakt_entryuser` varchar(100) NOT NULL,
  `dakt_entrydate` datetime NOT NULL,
  `dakt_changeuser` varchar(100) NOT NULL,
  `dakt_changedate` datetime NOT NULL,
  PRIMARY KEY (`dakt_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `gntrapp_aktivatetap`
--

INSERT INTO `gntrapp_aktivatetap` (`dakt_id`, `dakt_kode`, `dakt_keterangan`, `dakt_tipe`, `dakt_harga`, `dakt_tanggalpakai`, `dakt_tanggalbeli`, `dakt_qty`, `dakt_umurbulan`, `dakt_persensusut`, `dakt_pajak`, `dakt_void`, `dakt_entryuser`, `dakt_entrydate`, `dakt_changeuser`, `dakt_changedate`) VALUES
(1, '123Aktiva', 'Kendaraan', 'Tetap', 1500000, '2017-10-10', '2017-10-10', 1, 1, 5, 1, 0, '', '2017-10-10 15:57:15', '', '2017-11-04 07:41:11'),
(2, '101010', 'Bangunan', 'Permanent', 100000000, '2017-10-20', '2017-10-15', 1, 20, 5, 0, 0, '', '2017-10-22 04:41:54', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gntrapp_akun`
--

CREATE TABLE IF NOT EXISTS `gntrapp_akun` (
  `akun_id` int(11) NOT NULL AUTO_INCREMENT,
  `akun_nomor` varchar(100) NOT NULL,
  `akun_nama` varchar(100) NOT NULL,
  `akun_tipe_id` int(11) NOT NULL,
  `akun_saldo` int(11) NOT NULL,
  `akun_parent` tinyint(4) NOT NULL,
  `akun_void` tinyint(4) NOT NULL,
  `akun_entryuser` varchar(100) NOT NULL,
  `akun_entrydate` datetime NOT NULL,
  `akun_changeuser` varchar(100) NOT NULL,
  `akun_changedate` datetime NOT NULL,
  PRIMARY KEY (`akun_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `gntrapp_akun`
--

INSERT INTO `gntrapp_akun` (`akun_id`, `akun_nomor`, `akun_nama`, `akun_tipe_id`, `akun_saldo`, `akun_parent`, `akun_void`, `akun_entryuser`, `akun_entrydate`, `akun_changeuser`, `akun_changedate`) VALUES
(1, '40,00,00', 'Gaji Staff', 5, 0, 0, 0, '', '2017-07-02 03:51:40', '', '2017-10-22 05:06:54'),
(2, '40,00,01', 'Gaji Karyawan Staff', 5, 0, 1, 0, '', '2017-07-02 03:52:06', '', '2017-10-22 05:07:02'),
(3, '40,00,02', 'Uang Makan Karyawan', 5, 0, 1, 0, '', '2017-07-02 03:52:42', '', '2017-10-22 05:07:07'),
(5, '40,00,03', 'Uang Insentif Karyawan', 5, 0, 1, 0, '', '2017-07-02 03:53:34', '', '2017-10-22 05:07:13'),
(6, '40,00,04', 'THR Karyawan', 5, 0, 1, 0, '', '2017-07-02 03:53:57', '', '2017-10-22 05:07:18'),
(7, '30,00,00', 'Penjualan Sparepart', 2, 0, 0, 1, '', '2017-07-31 17:15:45', '', '2017-10-22 05:04:25'),
(8, '30,00,01', 'Penjualan Busi', 2, 0, 7, 1, '', '2017-07-31 17:16:26', '', '2017-10-22 05:03:21'),
(9, '50,00,00', 'Biaya ATK', 2, 0, 0, 0, '', '2017-07-31 17:18:48', '', '0000-00-00 00:00:00'),
(10, '50,00,01', 'Pembelian Kertas HVS 1 RIM', 3, 0, 9, 0, '', '2017-07-31 17:20:56', '', '0000-00-00 00:00:00'),
(11, '60,00,00', 'Penjualan Alat Konstruksi', 3, 0, 0, 1, '', '2017-09-16 09:30:16', '', '2017-10-08 05:33:09'),
(12, '60,00,01', 'Pintu Sorong Baja Type 2.a Uk. (b=0,6-0,8) Dan (h=0,3- 1) M', 3, 0, 11, 1, '', '2017-09-16 09:30:49', '', '2017-10-08 05:33:12'),
(13, '70,00,00', 'Penjualan Barang', 3, 0, 0, 0, '', '2017-10-08 05:34:45', '', '0000-00-00 00:00:00'),
(14, '70,00,01', 'Pasir Silica', 3, 0, 13, 0, '', '2017-10-08 05:35:06', '', '0000-00-00 00:00:00'),
(15, '70,00,02', 'Pipa PVC', 3, 0, 13, 0, '', '2017-10-15 07:03:23', '', '0000-00-00 00:00:00'),
(16, '40,00,05', 'Lembur Karyawan', 5, 0, 1, 1, '', '2017-10-22 04:57:12', '', '2017-11-04 05:11:05'),
(17, '80,00,00', 'Beban Umum', 5, 0, 0, 0, '', '2017-10-22 04:58:32', '', '0000-00-00 00:00:00'),
(18, '80,00,01', 'Jamuan tamu', 5, 0, 17, 0, '', '2017-10-22 04:59:03', '', '0000-00-00 00:00:00'),
(19, '80,00,02', 'Perampungan Pajak', 5, 0, 17, 0, '', '2017-10-22 05:00:19', '', '0000-00-00 00:00:00'),
(20, '30,00,01', 'Penjualan Busi', 1, 0, 7, 1, '', '2017-10-22 05:04:10', '', '2017-10-22 05:04:49'),
(21, '20,00,00', 'Perangkat Operasional', 2, 0, 0, 0, '', '2017-10-22 05:09:06', '', '0000-00-00 00:00:00'),
(22, '20,00,01', 'Komputer', 2, 0, 21, 0, '', '2017-10-22 05:09:25', '', '0000-00-00 00:00:00'),
(23, '41,00,00', 'Kas Kecil', 5, 0, 0, 0, '', '2017-10-22 05:20:02', '', '0000-00-00 00:00:00'),
(24, '41,00,01', 'Pulsa handphone', 5, 0, 23, 0, '', '2017-10-22 05:20:30', '', '0000-00-00 00:00:00'),
(25, '43,00,00', 'Proyek', 5, 0, 0, 0, '', '2017-10-22 05:57:17', '', '0000-00-00 00:00:00'),
(26, '43,00,01', 'Penjualan jasa pagar', 5, 0, 25, 0, '', '2017-10-22 05:57:47', '', '0000-00-00 00:00:00'),
(27, '43,00,02', 'Abu Batu', 3, 0, 25, 0, '', '2017-11-19 13:17:50', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gntrapp_barang_jasa`
--

CREATE TABLE IF NOT EXISTS `gntrapp_barang_jasa` (
  `brjs_id` int(11) NOT NULL AUTO_INCREMENT,
  `brjs_kategori_id` int(11) NOT NULL,
  `brjs_jenis_id` int(11) NOT NULL,
  `brjs_nama` varchar(100) NOT NULL,
  `brjs_volume` varchar(100) NOT NULL,
  `brjs_satuan_id` int(11) NOT NULL,
  `brjs_harga_satuan` int(11) NOT NULL,
  `brjs_over_project` int(11) NOT NULL,
  `brjs_vndr_id` int(11) NOT NULL,
  `brjs_void` tinyint(4) NOT NULL,
  `brjs_entryuser` varchar(100) NOT NULL,
  `brjs_entrydate` datetime NOT NULL,
  `brjs_changeuser` varchar(100) NOT NULL,
  `brjs_changedate` datetime NOT NULL,
  PRIMARY KEY (`brjs_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `gntrapp_barang_jasa`
--

INSERT INTO `gntrapp_barang_jasa` (`brjs_id`, `brjs_kategori_id`, `brjs_jenis_id`, `brjs_nama`, `brjs_volume`, `brjs_satuan_id`, `brjs_harga_satuan`, `brjs_over_project`, `brjs_vndr_id`, `brjs_void`, `brjs_entryuser`, `brjs_entrydate`, `brjs_changeuser`, `brjs_changedate`) VALUES
(1, 1, 0, 'lkjbljbl', 'ljblojbLJB', 0, 8698698, 1, 1, 1, '', '2017-02-27 02:35:37', '', '2017-09-06 17:07:04'),
(2, 2, 0, 'Biaya Penyambungan Listrik ( Bp ) 1.300 Watt', 'Unit', 0, 1600000, 1, 2, 0, '', '2017-09-06 17:07:41', '', '2017-09-06 17:07:49'),
(3, 1, 0, 'Beton Ready Mix K-225', 'm3', 0, 989000, 1, 3, 0, '', '2017-09-06 17:08:31', '', '0000-00-00 00:00:00'),
(4, 1, 0, 'Box Panel 10&quot;20', 'Bh', 0, 1338000, 0, 4, 0, '', '2017-09-06 17:09:10', '', '0000-00-00 00:00:00'),
(5, 1, 0, 'Abu Batu', 'm3', 0, 300000, 1, 2, 0, '', '2017-09-16 09:21:16', '', '2017-11-19 13:19:44'),
(6, 1, 0, 'Armatur Pju Komponen Philip (hrc 511-bhl 250)', 'Set', 0, 1034000, 0, 5, 0, '', '2017-09-16 09:27:10', '', '0000-00-00 00:00:00'),
(7, 1, 0, 'Balz Mercury (bhl) 1000 Watt', 'Bh', 0, 2400000, 0, 3, 0, '', '2017-09-16 09:27:55', '', '0000-00-00 00:00:00'),
(8, 1, 0, 'Pintu Sorong Baja Type 2.a Uk. (b=0,6-0,8) Dan (h=0,3- 1) M', 'Unit', 0, 8470000, 0, 5, 0, '', '2017-09-16 09:28:43', '', '0000-00-00 00:00:00'),
(9, 1, 0, 'Pasir Silica', 'Ton', 0, 1900000, 1, 10, 0, '', '2017-10-08 05:37:26', '', '2017-10-08 07:11:46'),
(10, 2, 0, 'Bobokan Lantai Bertulang', 'm3', 0, 880000, 1, 0, 0, '', '2017-10-08 06:35:54', '', '2017-10-08 06:38:18'),
(11, 2, 0, 'Pembuangan Bobokan Beton dengan Karung', 'ls', 0, 1975000, 1, 0, 0, '', '2017-10-08 06:39:47', '', '0000-00-00 00:00:00'),
(12, 3, 0, 'Pemasangan rel Besi 16&quot; 13 x 2 m', 'kg', 0, 70000, 1, 8, 0, '', '2017-10-08 06:41:37', '', '2017-10-22 05:52:55'),
(13, 3, 0, 'Pemasangan Besi Siku 5cm x 5cm x 5mm', 'kg', 0, 62500, 1, 8, 0, '', '2017-10-08 06:42:18', '', '0000-00-00 00:00:00'),
(14, 3, 0, 'Pemasangan As Roda', 'pcs', 0, 735000, 1, 8, 0, '', '2017-10-08 06:42:45', '', '0000-00-00 00:00:00'),
(15, 3, 0, 'Pengecoran Lantai K350 bertulang Uk. Wermes 10 mm', 'm3', 0, 3725000, 1, 9, 0, '', '2017-10-08 06:44:52', '', '0000-00-00 00:00:00'),
(16, 2, 0, 'Finishing / kebersihan', 'ls', 0, 185000, 1, 0, 0, '', '2017-10-08 06:46:25', '', '0000-00-00 00:00:00'),
(17, 2, 0, 'Pekerjaan Persiapan Pengecoran Lantai Smart', 'ls', 0, 3525000, 1, 0, 0, '', '2017-10-08 06:48:37', '', '0000-00-00 00:00:00'),
(18, 1, 0, 'Besi Siku', 'Batang', 0, 8000, 1, 2, 0, '', '2017-10-22 08:06:47', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gntrapp_beritaacara_peserta`
--

CREATE TABLE IF NOT EXISTS `gntrapp_beritaacara_peserta` (
  `baps_id` int(11) NOT NULL AUTO_INCREMENT,
  `baps_pbcr_id` int(11) NOT NULL,
  `baps_kary_id` int(11) NOT NULL,
  `baps_group` varchar(100) NOT NULL,
  `baps_void` tinyint(4) NOT NULL,
  `baps_entryuser` varchar(100) NOT NULL,
  `baps_entrydate` datetime NOT NULL,
  `baps_changeuser` varchar(100) NOT NULL,
  `baps_changedate` datetime NOT NULL,
  PRIMARY KEY (`baps_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `gntrapp_beritaacara_peserta`
--

INSERT INTO `gntrapp_beritaacara_peserta` (`baps_id`, `baps_pbcr_id`, `baps_kary_id`, `baps_group`, `baps_void`, `baps_entryuser`, `baps_entrydate`, `baps_changeuser`, `baps_changedate`) VALUES
(1, 2, 3, '', 0, 'admin', '2017-10-07 17:38:59', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gntrapp_bpu`
--

CREATE TABLE IF NOT EXISTS `gntrapp_bpu` (
  `bpu_id` int(11) NOT NULL AUTO_INCREMENT,
  `bpu_request_by` varchar(100) NOT NULL,
  `bpu_nama` text NOT NULL,
  `bpu_harga` int(11) NOT NULL,
  `bpu_terbilang` varchar(100) NOT NULL,
  `bpu_approved_by` varchar(100) NOT NULL,
  `bpu_proj_id` int(11) NOT NULL,
  `bpu_void` tinyint(4) NOT NULL,
  `bpu_entryuser` varchar(100) NOT NULL,
  `bpu_entrydate` datetime NOT NULL,
  `bpu_changeuser` varchar(100) NOT NULL,
  `bpu_changedate` datetime NOT NULL,
  PRIMARY KEY (`bpu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `gntrapp_bpu`
--

INSERT INTO `gntrapp_bpu` (`bpu_id`, `bpu_request_by`, `bpu_nama`, `bpu_harga`, `bpu_terbilang`, `bpu_approved_by`, `bpu_proj_id`, `bpu_void`, `bpu_entryuser`, `bpu_entrydate`, `bpu_changeuser`, `bpu_changedate`) VALUES
(1, 'admin', 'Saham Juli 2017', 500000000, '', 'Andre Lestari', 0, 0, '', '2017-07-02 03:55:55', '', '0000-00-00 00:00:00'),
(2, 'admin', 'Saham Juli 2017', 500000000, '', 'Andre Lestari', 0, 0, '', '2017-07-02 03:56:12', '', '2017-07-02 03:56:30'),
(3, 'admin', 'no bukti guntur', 3523525, '', '11111111111', 0, 0, '', '2017-09-23 09:40:27', '', '0000-00-00 00:00:00'),
(4, 'admin', 'qecqed', 46426, '', 'hetheth', 0, 0, '', '2017-09-23 09:40:38', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gntrapp_bpupenerimaankas`
--

CREATE TABLE IF NOT EXISTS `gntrapp_bpupenerimaankas` (
  `bpupnrmkas_id` int(11) NOT NULL AUTO_INCREMENT,
  `bpupnrmkas_nobukti` varchar(30) NOT NULL,
  `bpupnrmkas_noakun` int(11) NOT NULL,
  `bpupnrmkas_tanggal` date NOT NULL,
  `bpupnrmkas_dari` varchar(30) NOT NULL,
  `bpupnrmkas_jumlah` int(50) NOT NULL,
  `bpupnrmkas_untuk` varchar(200) NOT NULL,
  `bpupnrmkas_penerima` varchar(200) NOT NULL,
  `bpupnrmkas_void` tinyint(4) NOT NULL,
  `bpupnrmkas_entryuser` varchar(100) NOT NULL,
  `bpupnrmkas_entrydate` datetime NOT NULL,
  `bpupnrmkas_changeuser` varchar(100) NOT NULL,
  `bpupnrmkas_changedate` datetime NOT NULL,
  PRIMARY KEY (`bpupnrmkas_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `gntrapp_bpupenerimaankas`
--

INSERT INTO `gntrapp_bpupenerimaankas` (`bpupnrmkas_id`, `bpupnrmkas_nobukti`, `bpupnrmkas_noakun`, `bpupnrmkas_tanggal`, `bpupnrmkas_dari`, `bpupnrmkas_jumlah`, `bpupnrmkas_untuk`, `bpupnrmkas_penerima`, `bpupnrmkas_void`, `bpupnrmkas_entryuser`, `bpupnrmkas_entrydate`, `bpupnrmkas_changeuser`, `bpupnrmkas_changedate`) VALUES
(2, '12345', 12, '0000-00-00', '12', 12345, '0', '12345', 1, '', '2017-09-23 10:08:47', '', '2017-09-23 10:37:54'),
(3, '9999999', 100, '0000-00-00', '25', 4646246, '2462462', '2147483647', 1, '', '2017-09-23 10:29:12', '', '2017-09-23 10:37:55'),
(4, '56356', 35, '2017-09-29', '34534653343vr3v3rv', 0, 'efvefv', 'evetvetv', 1, '', '2017-09-23 10:41:33', '', '2017-09-23 10:47:19'),
(5, '1111', 111, '2017-09-13', '111', 100, '', '', 1, '', '2017-09-23 10:45:05', '', '2017-09-23 10:47:23'),
(6, '0', 0, '2017-09-22', 'srfgvsrgb', 876543, '5v5', 'g5g5g', 1, '', '2017-09-23 10:46:59', '', '2017-09-23 10:47:24'),
(7, '12345', 68, '2017-09-24', 'huhuhuhuh', 4343434, 'rcgvrgbvcgr', 'vrcrtvrytg', 1, '', '2017-09-23 10:52:01', '', '2017-09-23 11:09:23'),
(8, '134134', 9, '2017-09-18', 'wgrgwrg', 3413413, 'vsdvrw', 'vwrvwrv', 1, '', '2017-09-23 11:12:01', '', '2017-09-30 10:00:04'),
(9, '870808608', 2, '2017-09-30', 'dvjnon', 314134, 'dsvsdv', 'svsdv', 1, '', '2017-09-30 09:22:31', '', '2017-09-30 10:00:05'),
(10, '4', 5, '2017-09-20', 'grgwr', 2452452, 'wgrg', 'wrgwrgwrg', 1, '', '2017-09-30 09:59:34', '', '2017-09-30 10:00:06'),
(11, '2147483647', 7, '2017-09-30', 'gwg', 4252462, 'gsrgrwg', 'wrgwrgwr', 1, '', '2017-09-30 09:59:53', '', '2017-09-30 10:00:09'),
(12, '1', 9, '2017-09-26', 'wgwrg', 2452452, 'dnhnryn', 'rynrfyn', 1, '', '2017-09-30 10:00:44', '', '2017-09-30 10:47:51'),
(13, '23323', 7, '2017-09-27', 'sdvsd', 4242424, 'fgerg', 'dsfsg', 1, '', '2017-09-30 10:48:06', '', '2017-10-07 07:36:06'),
(14, 'BPUKASTERIMA/7/10/2017', 8, '2017-10-07', 'PT. Marunda Center', 1500000, 'Pelunasan 100 Bh Busi', 'Anto', 1, '', '2017-10-07 07:47:04', '', '2017-10-07 08:15:33'),
(15, 'BPUKASTERIMA/7/10/2017', 7, '2017-10-07', 'PT. JGC INDONESIA', 2500000, 'pembayaran spare part forklift', 'Deni', 1, '', '2017-10-07 07:47:52', '', '2017-10-07 08:15:34'),
(16, 'BPUKASTERIMA/7/10/2017', 3, '2017-10-07', 'PT. JGC INDONESIA', 2500000, 'Pembayaran sparepart forklift', 'Nur', 0, '', '2017-11-04 05:25:34', '', '0000-00-00 00:00:00'),
(17, 'BPUKASTERIMA/7/10/2017', 8, '2017-10-06', 'PT. Andalan Furnindo', 4500000, 'Pembayaran sparepart forklift II', 'Nur', 0, '', '2017-10-15 05:22:59', '', '0000-00-00 00:00:00'),
(18, 'BUKTI/15/10/2017', 14, '2017-10-15', 'PT. SMART', 5000000, 'Pelunasan pasir silica', 'Yanto', 0, '', '2017-10-15 05:23:04', '', '0000-00-00 00:00:00'),
(19, 'BUKTI/14/10/2017', 14, '2017-10-14', 'PT. SMART', 6000000, 'Pelunasan pasir silica 2', 'Yanto', 0, '', '2017-10-15 05:23:10', '', '0000-00-00 00:00:00'),
(20, 'D/01/10/2017', 26, '2017-10-22', 'PT. Smart', 8400000, 'Pengerjaan pagar PT . Smart', 'Andre', 1, '', '2017-10-22 06:28:36', '', '2017-11-04 07:30:21');

-- --------------------------------------------------------

--
-- Table structure for table `gntrapp_bpupengeluarankas`
--

CREATE TABLE IF NOT EXISTS `gntrapp_bpupengeluarankas` (
  `bpupglrnkas_id` int(11) NOT NULL AUTO_INCREMENT,
  `bpupglrnkas_nobukti` varchar(30) NOT NULL,
  `bpupglrnkas_noakun` int(11) NOT NULL,
  `bpupglrnkas_tanggal` date NOT NULL,
  `bpupglrnkas_jumlah` int(50) NOT NULL,
  `bpupglrnkas_untuk` varchar(200) NOT NULL,
  `bpupglrnkas_penerima` varchar(200) NOT NULL,
  `bpupglrnkas_void` tinyint(4) NOT NULL,
  `bpupglrnkas_entryuser` varchar(100) NOT NULL,
  `bpupglrnkas_entrydate` datetime NOT NULL,
  `bpupglrnkas_changeuser` varchar(100) NOT NULL,
  `bpupglrnkas_changedate` datetime NOT NULL,
  PRIMARY KEY (`bpupglrnkas_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `gntrapp_bpupengeluarankas`
--

INSERT INTO `gntrapp_bpupengeluarankas` (`bpupglrnkas_id`, `bpupglrnkas_nobukti`, `bpupglrnkas_noakun`, `bpupglrnkas_tanggal`, `bpupglrnkas_jumlah`, `bpupglrnkas_untuk`, `bpupglrnkas_penerima`, `bpupglrnkas_void`, `bpupglrnkas_entryuser`, `bpupglrnkas_entrydate`, `bpupglrnkas_changeuser`, `bpupglrnkas_changedate`) VALUES
(9, '8080', 3, '2017-09-20', 909090, 'Pelunasan', 'Yanto', 1, '', '2017-09-23 11:40:49', '', '2017-10-07 07:38:18'),
(10, 'BPUKASKELUAR/7/10/2017', 3, '2017-10-07', 500000, 'Makan Siang Karyawan', 'Nur', 1, '', '2017-10-07 07:48:28', '', '2017-10-07 08:17:05'),
(11, 'BPUKASKELUAR/7/10/2017', 9, '2017-10-07', 600000, 'Pembelian ATK Bulan Oktober', 'Nur', 1, '', '2017-10-07 07:48:34', '', '2017-10-07 08:17:06'),
(12, 'BPUKASKELUAR/7/10/2017', 8, '2017-10-09', 3500000, 'Pembelian Sparepart Forklift 2 unit', 'Andre', 0, '', '2017-10-15 05:23:19', '', '0000-00-00 00:00:00'),
(13, 'BPUKASKELUAR/13/10/2017', 14, '2017-10-13', 7000000, 'Pembelian pasir silica dari vendor', 'Andre', 1, '', '2017-10-15 05:23:28', '', '2017-10-15 07:09:31'),
(14, 'BPUKASKELUAR/15/10/2017', 15, '2017-10-15', 10000000, 'Pembelian pipa PVC dari vendor PT. A', 'Andre', 0, '', '2017-10-15 07:04:04', '', '0000-00-00 00:00:00'),
(15, 'BPUKASKELUAR/13/10/2017', 14, '2017-10-15', 10000000, 'Pembelian pasir silica dari vendor', 'Andre', 0, '', '2017-10-15 07:09:49', '', '0000-00-00 00:00:00'),
(16, 'K/001/10/2017', 24, '2017-10-20', 100000, 'Pembelian pulsa handphone operasional', 'Anto', 0, '', '2017-10-22 05:21:38', '', '0000-00-00 00:00:00'),
(17, 'K/002/10/2017', 26, '2017-10-20', 784000, 'Pembayaran jasa pagar Maman CS', 'Maman', 0, '', '2017-10-22 05:58:23', '', '0000-00-00 00:00:00'),
(18, 'K/003/10/2017', 18, '2017-10-22', 200000, 'Jamuan siang tamu', 'Andre', 0, '', '2017-10-22 06:25:06', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gntrapp_bukti_pembayaran`
--

CREATE TABLE IF NOT EXISTS `gntrapp_bukti_pembayaran` (
  `bp_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `bp_pbttr_id` int(11) NOT NULL,
  `bp_pbinv_id` int(11) NOT NULL,
  `bp_pbsrtjalan_id` int(11) NOT NULL,
  `bp_pbkw_id` int(11) NOT NULL,
  `bp_pbptn_id` int(11) NOT NULL,
  `bp_no` varchar(150) DEFAULT NULL,
  `bp_tgltransaksi` date NOT NULL,
  `bp_norekening` varchar(150) DEFAULT NULL,
  `bp_namarekening` varchar(150) DEFAULT NULL,
  `bp_noinvoice` varchar(150) DEFAULT NULL,
  `bp_tagihan` varchar(150) DEFAULT NULL,
  `bp_terbilang` varchar(150) DEFAULT NULL,
  `bp_jamtransaksi` varchar(150) DEFAULT NULL,
  `bp_jenistransaksi` varchar(150) DEFAULT NULL,
  `bp_entrydate` datetime DEFAULT NULL,
  `bp_changedate` datetime DEFAULT NULL,
  PRIMARY KEY (`bp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `gntrapp_bukti_pembayaran`
--

INSERT INTO `gntrapp_bukti_pembayaran` (`bp_id`, `bp_pbttr_id`, `bp_pbinv_id`, `bp_pbsrtjalan_id`, `bp_pbkw_id`, `bp_pbptn_id`, `bp_no`, `bp_tgltransaksi`, `bp_norekening`, `bp_namarekening`, `bp_noinvoice`, `bp_tagihan`, `bp_terbilang`, `bp_jamtransaksi`, `bp_jenistransaksi`, `bp_entrydate`, `bp_changedate`) VALUES
(1, 1, 1, 1, 1, 1, 'BUKTIPEMBAYARAN/15/SEPT/2017', '2017-09-25', '0', '0', '0', '0', '0', '10.56', 'Transfer', NULL, NULL),
(2, 2, 2, 2, 2, 2, 'BUKTIPEMBAYARAN/1/8/2017', '2017-08-22', '0', '0', '0', '0', '0', '10.22', 'Transfer', NULL, NULL),
(3, 3, 3, 3, 3, 4, 'BPPASIRSILICA/8/10/2017', '2017-10-08', '0', '0', '0', '0', '0', '13.00', 'Transfer Bank', NULL, NULL),
(4, 4, 4, 5, 4, 5, 'BPBETON/15/10/2017', '2017-10-15', '0', '0', '0', '0', '0', '14.45', 'Transfer Bank', NULL, NULL),
(5, 5, 5, 6, 5, 6, 'BUKTIPEMBAYARAN/21/OKT/2017', '2017-10-21', '0', '0', '0', '0', '0', '10.23', 'Transfer', NULL, NULL),
(6, 6, 6, 7, 6, 7, 'BUKTIPEMBAYARAN/01/10/2017', '2017-10-21', '0', '0', '0', '0', '0', '11:30', 'Transfer', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gntrapp_client`
--

CREATE TABLE IF NOT EXISTS `gntrapp_client` (
  `clnt_id` int(11) NOT NULL AUTO_INCREMENT,
  `clnt_nama` varchar(100) NOT NULL,
  `clnt_alamat` text NOT NULL,
  `clnt_contact_person` varchar(100) NOT NULL,
  `clnt_telpon` varchar(100) NOT NULL,
  `clnt_email` varchar(100) NOT NULL,
  `clnt_status` tinyint(4) NOT NULL,
  `clnt_void` tinyint(4) NOT NULL,
  `clnt_entryuser` varchar(100) NOT NULL,
  `clnt_entrydate` datetime NOT NULL,
  `clnt_changeuser` varchar(100) NOT NULL,
  `clnt_changedate` datetime NOT NULL,
  PRIMARY KEY (`clnt_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `gntrapp_client`
--

INSERT INTO `gntrapp_client` (`clnt_id`, `clnt_nama`, `clnt_alamat`, `clnt_contact_person`, `clnt_telpon`, `clnt_email`, `clnt_status`, `clnt_void`, `clnt_entryuser`, `clnt_entrydate`, `clnt_changeuser`, `clnt_changedate`) VALUES
(1, 'jhgugbou', 'ljbolj', 'lblbl', 'lblbl', 'lblblj@mbkjbk.co', 1, 1, '', '2017-02-27 02:34:40', '', '2017-09-06 16:59:37'),
(2, 'PT. Marunda Centre', 'Jl. Marunda Raya', 'Gunawan', '081651514242', 'gunawan@marunda-centre.com', 1, 0, '', '2017-09-06 17:00:22', '', '0000-00-00 00:00:00'),
(3, 'PT. JGC Indonesia', 'Jl. TB. Simatupang, Jakarta Selatan', 'Bambang', '081190908181', 'bambang@jgc-indonesia.co.id', 1, 0, '', '2017-09-06 17:01:26', '', '0000-00-00 00:00:00'),
(4, 'PT. HP Indonesia', 'Jl. Tebet Raya, Jakarta Selatan', 'Syaiful', '081510090092', 'syaiful@hp-indonesia.co.id', 1, 0, '', '2017-09-06 17:02:19', '', '0000-00-00 00:00:00'),
(5, 'PT. Aneka Tambang Tbk', 'Jl. TB Simatupang, Jakarta Selatan', 'Wawan', '081120209090', 'wawan@antam.com', 1, 0, '', '2017-09-16 09:25:42', '', '0000-00-00 00:00:00'),
(6, 'PT. Pertamina', 'Jl. Plumpang Semper, Jakarta Utara', 'Rendra', '081651514141', 'rendra@pertamina.co.id', 1, 0, '', '2017-09-16 09:26:20', '', '0000-00-00 00:00:00'),
(7, 'PT. Smart Tbk.', 'Jl. MH. Thamrin Jakarta Pusat', 'Demas', '081212510060', 'demas.nugroho@sinarmas-agri.com', 1, 0, '', '2017-10-08 06:29:28', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gntrapp_departemen`
--

CREATE TABLE IF NOT EXISTS `gntrapp_departemen` (
  `dprt_id` int(11) NOT NULL AUTO_INCREMENT,
  `dprt_nama` varchar(100) NOT NULL,
  `dprt_manager` varchar(100) NOT NULL,
  `dprt_tugas` text NOT NULL,
  `dprt_status` tinyint(4) NOT NULL,
  `dprt_void` tinyint(4) NOT NULL,
  `dprt_entryuser` varchar(100) NOT NULL,
  `dprt_entrydate` datetime NOT NULL,
  `dprt_changeuser` varchar(100) NOT NULL,
  `dprt_changedate` datetime NOT NULL,
  PRIMARY KEY (`dprt_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `gntrapp_departemen`
--

INSERT INTO `gntrapp_departemen` (`dprt_id`, `dprt_nama`, `dprt_manager`, `dprt_tugas`, `dprt_status`, `dprt_void`, `dprt_entryuser`, `dprt_entrydate`, `dprt_changeuser`, `dprt_changedate`) VALUES
(1, 'HRD', 'Riswanto', 'Rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant. Consectetur lorem donec massa sapien faucibus et molestie ac. Massa tincidunt nunc pulvinar sapien et ligula. Lorem ipsum dolor sit amet. Lorem sed risus ultricies tristique nulla aliquet enim tortor. Amet justo donec enim diam vulputate ut pharetra sit amet. Risus nec feugiat in fermentum posuere urna. Maecenas pharetra convallis posuere morbi leo urna molestie at. Sagittis vitae et leo duis ut. Tortor aliquam nulla facilisi cras fermentum odio eu feugiat pretium. Quisque id diam vel quam elementum pulvinar. Aliquet enim tortor at auctor. Ultricies mi eget mauris pharetra et ultrices neque ornare. Sed tempus urna et pharetra pharetra. Id aliquet lectus proin nibh nisl condimentum id. Et malesuada fames ac turpis egestas maecenas. Consectetur lorem donec massa sapien faucibus. Euismod in pellentesque massa placerat. Morbi leo urna molestie at elementum eu facilisis sed odio.', 1, 0, '', '2017-10-07 08:59:58', '', '0000-00-00 00:00:00'),
(2, 'Keuangan', 'Herman', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 1, 0, '', '2017-10-22 04:38:22', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gntrapp_invoice`
--

CREATE TABLE IF NOT EXISTS `gntrapp_invoice` (
  `inv_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `inv_tanggal` date NOT NULL,
  `inv_noinvoice` varchar(150) NOT NULL,
  `inv_wo` varchar(250) DEFAULT NULL,
  `inv_wotgl` date NOT NULL,
  `inv_nopenawaran` varchar(250) DEFAULT NULL,
  `inv_to` varchar(250) DEFAULT NULL,
  `inv_alamat` varchar(250) DEFAULT NULL,
  `inv_description` varchar(250) DEFAULT NULL,
  `inv_total` varchar(250) DEFAULT NULL,
  `inv_pph` varchar(250) DEFAULT NULL,
  `inv_ppn` varchar(250) DEFAULT NULL,
  `inv_totaltagihan` varchar(250) DEFAULT NULL,
  `inv_terbilang` varchar(250) DEFAULT NULL,
  `inv_entrydate` datetime DEFAULT NULL,
  `inv_changedate` datetime DEFAULT NULL,
  PRIMARY KEY (`inv_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `gntrapp_invoice_detail`
--

CREATE TABLE IF NOT EXISTS `gntrapp_invoice_detail` (
  `invd_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `invd_noinvoice` varchar(150) NOT NULL,
  `invd_jenisbarang` varchar(150) DEFAULT NULL,
  `invd_jumlah` varchar(150) DEFAULT NULL,
  `invd_satuan` varchar(150) DEFAULT NULL,
  `invd_hargasatuan` varchar(150) DEFAULT NULL,
  `invd_total` varchar(150) DEFAULT NULL,
  `inv_description` varchar(150) DEFAULT NULL,
  `inv_entrydate` datetime DEFAULT NULL,
  `inv_changedate` datetime DEFAULT NULL,
  PRIMARY KEY (`invd_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `gntrapp_karyawan`
--

CREATE TABLE IF NOT EXISTS `gntrapp_karyawan` (
  `kary_id` int(11) NOT NULL AUTO_INCREMENT,
  `kary_nik` varchar(100) NOT NULL,
  `kary_nama` varchar(100) NOT NULL,
  `kary_alamat` text NOT NULL,
  `kary_tempat_lahir` varchar(100) NOT NULL,
  `kary_tanggal_lahir` date NOT NULL,
  `kary_telpon` varchar(100) NOT NULL,
  `kary_posisi_id` varchar(11) NOT NULL,
  `kary_jabatan_id` int(11) NOT NULL,
  `kary_tipe_id` int(11) NOT NULL,
  `kary_status_nikah_id` int(11) NOT NULL,
  `kary_status_kontrak_id` int(11) NOT NULL,
  `kary_void` tinyint(4) NOT NULL,
  `kary_entryuser` varchar(100) NOT NULL,
  `kary_entrydate` datetime NOT NULL,
  `kary_changeuser` varchar(100) NOT NULL,
  `kary_changedate` datetime NOT NULL,
  PRIMARY KEY (`kary_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `gntrapp_karyawan`
--

INSERT INTO `gntrapp_karyawan` (`kary_id`, `kary_nik`, `kary_nama`, `kary_alamat`, `kary_tempat_lahir`, `kary_tanggal_lahir`, `kary_telpon`, `kary_posisi_id`, `kary_jabatan_id`, `kary_tipe_id`, `kary_status_nikah_id`, `kary_status_kontrak_id`, `kary_void`, `kary_entryuser`, `kary_entrydate`, `kary_changeuser`, `kary_changedate`) VALUES
(24, '4352678', 'Reynaldi', 'Jl, Melati', 'Semarang', '1999-02-17', '087752678282', 'Marketing H', 6, 2, 2, 1, 0, '', '2017-10-28 18:13:30', '', '2017-10-28 18:17:23'),
(25, '56783930', 'Guntur', 'Jl. Raya Bogor', 'Jakarta', '1999-02-10', '08123212345', 'IT Support ', 3, 4, 1, 2, 0, '', '2017-11-05 07:21:38', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gntrapp_karyawan_gaji`
--

CREATE TABLE IF NOT EXISTS `gntrapp_karyawan_gaji` (
  `kygj_id` int(11) NOT NULL AUTO_INCREMENT,
  `kygj_catatan` text NOT NULL,
  `kygj_periode` text NOT NULL,
  `kygj_kary_id` int(11) NOT NULL,
  `kygj_gaji_pokok` int(11) NOT NULL,
  `kygj_tunjangan` int(11) NOT NULL,
  `kygj_lembur` int(11) NOT NULL,
  `kygj_uang_makan` int(11) NOT NULL,
  `kygj_rapelanbulanlalu` int(11) NOT NULL,
  `kygj_income` int(11) NOT NULL,
  `kygj_transport` int(11) NOT NULL,
  `kygj_insentif` int(11) NOT NULL,
  `kygj_deduction` int(11) NOT NULL,
  `kygj_thp` int(11) NOT NULL,
  `kygj_bpjstk` int(11) NOT NULL,
  `kygj_potshutdown` int(11) NOT NULL,
  `kygj_rapelbulandepan` int(11) NOT NULL,
  `kygj_mangkir` int(11) NOT NULL,
  `kygj_potperalatan` int(11) NOT NULL,
  `kygj_pph` int(11) NOT NULL,
  `kygj_bpjskes` int(11) NOT NULL,
  `kygj_pinjaman` int(11) NOT NULL,
  `kygj_void` tinyint(4) NOT NULL,
  `kygj_entryuser` varchar(100) NOT NULL,
  `kygj_entrydate` datetime NOT NULL,
  `kygj_changeuser` varchar(100) NOT NULL,
  `kygj_changedate` datetime NOT NULL,
  PRIMARY KEY (`kygj_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `gntrapp_karyawan_gaji`
--

INSERT INTO `gntrapp_karyawan_gaji` (`kygj_id`, `kygj_catatan`, `kygj_periode`, `kygj_kary_id`, `kygj_gaji_pokok`, `kygj_tunjangan`, `kygj_lembur`, `kygj_uang_makan`, `kygj_rapelanbulanlalu`, `kygj_income`, `kygj_transport`, `kygj_insentif`, `kygj_deduction`, `kygj_thp`, `kygj_bpjstk`, `kygj_potshutdown`, `kygj_rapelbulandepan`, `kygj_mangkir`, `kygj_potperalatan`, `kygj_pph`, `kygj_bpjskes`, `kygj_pinjaman`, `kygj_void`, `kygj_entryuser`, `kygj_entrydate`, `kygj_changeuser`, `kygj_changedate`) VALUES
(23, '', '', 13, 1, 3, 4, 2, 5, 0, 0, 0, 0, 10, 6, 7, 8, 9, 10, 0, 0, 0, 1, '', '0000-00-00 00:00:00', '', '2017-10-10 16:25:06'),
(24, '', '', 13, 1, 3, 4, 2, 5, 0, 0, 0, 0, 10, 6, 7, 8, 9, 11, 0, 0, 0, 1, '', '0000-00-00 00:00:00', '', '2017-10-10 16:56:24'),
(25, '', 'Agustus 2017', 13, 1000, 300, 250, 500, 150, 0, 0, 0, 0, 1051, 30, 70, 100, 50, 100, 0, 0, 0, 1, '', '0000-00-00 00:00:00', '', '2017-10-15 07:23:59'),
(26, '', 'Oktober 2017', 14, 3, 100, 150, 500, 0, 0, 0, 0, 0, 753, 30, 75, 250, 0, 80, 0, 0, 0, 1, '', '0000-00-00 00:00:00', '', '2017-10-15 07:23:56'),
(27, '', 'Oktober 2017', 14, 6500000, 150000, 200000, 400000, 0, 7250000, 0, 0, 1280000, 0, 890000, 340000, 0, 0, 50000, 0, 0, 0, 1, '', '0000-00-00 00:00:00', '', '2017-10-21 06:44:04'),
(28, '', 'Oktober 2017', 13, 4900000, 10000, 100000, 1000, 1000000, 5011000, 0, 0, 1390000, 0, 500000, 50000, 60000, 700000, 80000, 0, 0, 0, 1, '', '0000-00-00 00:00:00', '', '2017-10-21 06:44:03'),
(29, '', 'Oktober 2017', 15, 2700000, 500000, 100000, 500000, 0, 3800000, 0, 0, 470000, 0, 150000, 80000, 0, 40000, 200000, 0, 0, 0, 1, '', '0000-00-00 00:00:00', '', '2017-10-21 06:44:05'),
(30, '', 'Oktober 2017', 16, 5000000, 150000, 100000, 200000, 0, 5450000, 0, 0, 1085000, 0, 580000, 0, 350000, 0, 155000, 0, 0, 0, 1, '', '0000-00-00 00:00:00', '', '2017-10-28 18:11:17'),
(31, '', 'Oktober 2017', 17, 4000000, 68000, 352000, 440000, 0, 4860000, 0, 0, 121000, 0, 35000, 0, 0, 0, 86000, 0, 0, 0, 1, '', '0000-00-00 00:00:00', '', '2017-10-28 18:11:19'),
(32, '', 'Oktober 2017', 18, 6500000, 300000, 0, 700000, 0, 7500000, 0, 0, 130000, 0, 30000, 0, 100000, 0, 0, 0, 0, 0, 1, '', '0000-00-00 00:00:00', '', '2017-10-28 18:11:20'),
(33, '', 'Oktober 2017', 19, 5320000, 81200, 988000, 56500, 0, 6445700, 0, 0, 924000, 0, 345000, 0, 345000, 0, 234000, 0, 0, 0, 1, '', '0000-00-00 00:00:00', '', '2017-10-28 18:11:21'),
(34, '', 'Oktober 2017', 20, 5000000, 200000, 150000, 340000, 0, 5690000, 0, 0, 371000, 0, 200000, 0, 80000, 0, 91000, 0, 0, 0, 1, '', '0000-00-00 00:00:00', '', '2017-10-28 18:11:22'),
(35, '', 'Oktober 2017', 21, 3000000, 50000, 60000, 100000, 0, 3210000, 0, 0, 140000, 0, 40000, 0, 0, 0, 100000, 0, 0, 0, 1, '', '0000-00-00 00:00:00', '', '2017-10-28 18:11:23'),
(36, '', 'November 2017', 24, 1000000, 500000, 400000, 500000, 0, 2400000, 0, 0, 300000, 0, 300000, 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(37, '', 'November 2017', 25, 5000000, 200000, 300000, 500000, 100000, 8350000, 700000, 450000, 790500, 0, 50000, 10000, 10000, 10000, 100000, 76000, 34500, 500000, 0, '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gntrapp_matauang`
--

CREATE TABLE IF NOT EXISTS `gntrapp_matauang` (
  `mtua_id` int(11) NOT NULL AUTO_INCREMENT,
  `mtua_nama` varchar(100) NOT NULL,
  `mtua_nilaitukar` int(11) NOT NULL,
  `mtua_negara` varchar(100) NOT NULL,
  `mtua_simbol` varchar(100) NOT NULL,
  `mtua_void` tinyint(4) NOT NULL,
  `mtua_entryuser` varchar(100) NOT NULL,
  `mtua_entrydate` datetime NOT NULL,
  `mtua_changeuser` varchar(100) NOT NULL,
  `mtua_changedate` datetime NOT NULL,
  PRIMARY KEY (`mtua_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `gntrapp_matauang`
--

INSERT INTO `gntrapp_matauang` (`mtua_id`, `mtua_nama`, `mtua_nilaitukar`, `mtua_negara`, `mtua_simbol`, `mtua_void`, `mtua_entryuser`, `mtua_entrydate`, `mtua_changeuser`, `mtua_changedate`) VALUES
(1, 'Rupiah', 1, 'Indonesia', 'Rp', 0, '', '2017-09-16 09:12:59', '', '2017-10-22 04:54:43'),
(2, 'Dollar', 13000, 'USA', '$', 0, '', '2017-10-08 05:32:01', '', '2017-10-22 04:54:54'),
(3, 'test', 10, 'haha', 'hehe', 1, '', '2017-11-04 07:26:50', '', '2017-11-04 07:29:41');

-- --------------------------------------------------------

--
-- Table structure for table `gntrapp_pembelian_invoice`
--

CREATE TABLE IF NOT EXISTS `gntrapp_pembelian_invoice` (
  `pbinv_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pbinv_pbsrtjalan_id` int(11) NOT NULL,
  `pbinv_pbkw_id` int(11) NOT NULL,
  `pbinv_pbptn_id` int(11) NOT NULL,
  `pbinv_tanggal` date NOT NULL,
  `pbinv_noinvoice` varchar(150) NOT NULL,
  `pbinv_wo` varchar(250) DEFAULT NULL,
  `pbinv_wotgl` date NOT NULL,
  `pbinv_nopenawaran` varchar(250) DEFAULT NULL,
  `pbinv_to` varchar(250) DEFAULT NULL,
  `pbinv_alamat` varchar(250) DEFAULT NULL,
  `pbinv_description` varchar(250) DEFAULT NULL,
  `pbinv_totaltagihan` varchar(250) DEFAULT NULL,
  `pbinv_terbilang` varchar(250) DEFAULT NULL,
  `uploadfile` varchar(250) DEFAULT NULL,
  `pbinv_entrydate` datetime DEFAULT NULL,
  `pbinv_changedate` datetime DEFAULT NULL,
  PRIMARY KEY (`pbinv_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `gntrapp_pembelian_invoice`
--

INSERT INTO `gntrapp_pembelian_invoice` (`pbinv_id`, `pbinv_pbsrtjalan_id`, `pbinv_pbkw_id`, `pbinv_pbptn_id`, `pbinv_tanggal`, `pbinv_noinvoice`, `pbinv_wo`, `pbinv_wotgl`, `pbinv_nopenawaran`, `pbinv_to`, `pbinv_alamat`, `pbinv_description`, `pbinv_totaltagihan`, `pbinv_terbilang`, `uploadfile`, `pbinv_entrydate`, `pbinv_changedate`) VALUES
(1, 1, 1, 1, '2017-09-21', 'INV/15/SEPT/2017', '0', '0000-00-00', '0', '0', '0', 'Pelunasan Pembayaran', '0', '0', 'invoicepembelian_fd4c2dc.jpg', NULL, NULL),
(2, 2, 2, 2, '2017-08-09', 'INV/1/8/2017', '0', '0000-00-00', '0', '0', '0', '', '0', '0', 'invoicepembelian_8b9322a.jpg', NULL, NULL),
(3, 3, 3, 4, '2017-10-07', 'INVPASIRSILICA/7/10/2017', '0', '0000-00-00', '0', '0', '0', 'tagihan Pasir Silica', '0', '0', 'invoicepembelian_67e8858.jpg', NULL, NULL),
(4, 5, 4, 5, '2017-10-15', 'INVBETON/15/10/2017', '0', '0000-00-00', '0', '0', '0', 'Ut pharetra, massa id vehicula placerat, lorem enim consequat mi, vitae sagittis nisi lorem sed nisi. Cras tristique leo vel varius bibendum. Phasellus tristique massa tortor, at laoreet turpis sollicitudin sed. Proin mattis euismod turpis in tempus.', '0', '0', 'invoicepembelian_ea0d168.jpg', NULL, NULL),
(5, 6, 5, 6, '2017-10-21', 'INV/21/10/2017', '0', '0000-00-00', '0', '0', '0', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia vo', '0', '0', 'invoicepembelian_8677065.jpg', NULL, NULL),
(6, 7, 6, 7, '2017-10-21', 'INV/01/10/2017', '0', '0000-00-00', '0', '0', '0', 'Tagihan dari Maman CS', '0', '0', 'invoicepembelian_35d02fe.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gntrapp_pembelian_invoice_detail`
--

CREATE TABLE IF NOT EXISTS `gntrapp_pembelian_invoice_detail` (
  `pbinvd_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pbinvd_invid` varchar(150) NOT NULL,
  `pbinvd_jenisbarang` varchar(150) DEFAULT NULL,
  `pbinvd_jumlah` varchar(150) DEFAULT NULL,
  `pbinvd_entrydate` datetime DEFAULT NULL,
  `pbinvd_changedate` datetime DEFAULT NULL,
  `pbinvd_brjs_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`pbinvd_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `gntrapp_pembelian_kwitansi`
--

CREATE TABLE IF NOT EXISTS `gntrapp_pembelian_kwitansi` (
  `pbkw_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pbkw_pbptn_id` int(11) NOT NULL,
  `pbkw_no` varchar(150) NOT NULL,
  `pbkw_dari` varchar(250) DEFAULT NULL,
  `pbkw_total` varchar(150) NOT NULL,
  `pbkw_bank` varchar(150) DEFAULT NULL,
  `pbkw_norek` varchar(250) DEFAULT NULL,
  `pbkw_an` varchar(250) DEFAULT NULL,
  `pbkw_alamat` varchar(250) DEFAULT NULL,
  `pbkw_notlpn` varchar(250) DEFAULT NULL,
  `pbkw_tipe_pembayaran` tinyint(4) NOT NULL,
  `pbkw_transfer_from_bank` tinyint(4) NOT NULL,
  `pbkw_entrydate` datetime DEFAULT NULL,
  `pbkw_changedate` datetime DEFAULT NULL,
  `uploadfile` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`pbkw_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `gntrapp_pembelian_kwitansi`
--

INSERT INTO `gntrapp_pembelian_kwitansi` (`pbkw_id`, `pbkw_pbptn_id`, `pbkw_no`, `pbkw_dari`, `pbkw_total`, `pbkw_bank`, `pbkw_norek`, `pbkw_an`, `pbkw_alamat`, `pbkw_notlpn`, `pbkw_tipe_pembayaran`, `pbkw_transfer_from_bank`, `pbkw_entrydate`, `pbkw_changedate`, `uploadfile`) VALUES
(1, 1, 'KWITANSI/15/SEPT/2017', '0', '0', 'Bank BCA', '97597597', 'PT. Astra Honda Motor', '0', '0', 2, 1, NULL, NULL, 'kwitansi_pembelian_290f3bc.jpg'),
(2, 2, 'KWITANSI/1/AGUSTUS/2017', '0', '0', 'Bank BNI', '769869869', 'PT. Berca', '0', '0', 2, 3, NULL, NULL, 'kwitansi_pembelian_bc3744c.jpg'),
(3, 4, 'Kwitansivendor/okt/2017', '0', '0', 'Bank Mandiri', '89686086806', 'PT. Astrindo', '0', '0', 2, 2, NULL, '2017-10-08 05:49:19', 'tandaterima_75ac87b.PNG'),
(4, 5, 'Kwitansivendor/15/okt/2017', '0', '0', 'Bank BCA', '4045364', 'Karunia Hosana', '0', '0', 1, 1, NULL, '2017-10-15 15:54:14', 'tandaterima_530ebde.jpg'),
(5, 6, 'KWITANSI/21/OKT/2017', '0', '0', 'Bank Mandiri', '867949', 'PT. Jaya Mix', '0', '0', 2, 2, NULL, '2017-10-21 10:54:21', 'kwitansi_pembelian_5d904c0.jpg'),
(6, 7, 'KWITANSI/MAMAN/001/10/2017', '0', '0', 'Bank Mandiri', '89585985', 'Maman', '0', '0', 2, 2, NULL, '2017-10-22 05:55:14', 'tandaterima_5342cfb.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gntrapp_pembelian_permintaan`
--

CREATE TABLE IF NOT EXISTS `gntrapp_pembelian_permintaan` (
  `pbptn_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pbptn_clnt_id` int(11) NOT NULL,
  `pbptn_vndr_id` int(11) NOT NULL,
  `pbptn_mtua_id` int(11) NOT NULL,
  `pbptn_tanggal` date NOT NULL,
  `pbptn_no` varchar(150) NOT NULL,
  `pbptn_halaman` varchar(250) DEFAULT NULL,
  `pbptn_matauang` varchar(50) DEFAULT NULL,
  `pbptn_vendor` varchar(250) DEFAULT NULL,
  `pbptn_proposalno` varchar(250) DEFAULT NULL,
  `pbptn_projectcode` varchar(250) DEFAULT NULL,
  `pbptn_buyer` varchar(250) DEFAULT NULL,
  `pbptn_catatan` varchar(250) DEFAULT NULL,
  `pbptn_terms` varchar(250) DEFAULT NULL,
  `pbptn_tanggalditerima` date NOT NULL,
  `pbptn_diterimaoleh` varchar(250) DEFAULT NULL,
  `pbptn_namapenerima` varchar(250) DEFAULT NULL,
  `pbptn_tanggalterima` date NOT NULL,
  `pbptn_totaltagihan` varchar(250) DEFAULT NULL,
  `pbptn_terbilang` varchar(250) DEFAULT NULL,
  `pbptn_entrydate` datetime DEFAULT NULL,
  `pbptn_changedate` datetime DEFAULT NULL,
  PRIMARY KEY (`pbptn_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `gntrapp_pembelian_permintaan`
--

INSERT INTO `gntrapp_pembelian_permintaan` (`pbptn_id`, `pbptn_clnt_id`, `pbptn_vndr_id`, `pbptn_mtua_id`, `pbptn_tanggal`, `pbptn_no`, `pbptn_halaman`, `pbptn_matauang`, `pbptn_vendor`, `pbptn_proposalno`, `pbptn_projectcode`, `pbptn_buyer`, `pbptn_catatan`, `pbptn_terms`, `pbptn_tanggalditerima`, `pbptn_diterimaoleh`, `pbptn_namapenerima`, `pbptn_tanggalterima`, `pbptn_totaltagihan`, `pbptn_terbilang`, `pbptn_entrydate`, `pbptn_changedate`) VALUES
(1, 3, 4, 1, '2017-09-15', 'PERMINTAAN/15/SEPT/2017', '0', '0', '0', '', '', '0', '3 x Pembayaran', '', '0000-00-00', '0', 'Rudi', '0000-00-00', '0', '0', NULL, NULL),
(2, 2, 5, 1, '2017-08-01', 'PERMINTAAN/1/AGUSTUS/2017', '0', '0', '0', '', '', '0', 'Tunai', '', '0000-00-00', '0', 'Hendro', '0000-00-00', '0', '0', NULL, NULL),
(4, 2, 2, 1, '2017-10-05', 'PEMBELIAN/8/10/2017', '0', '0', '0', 'QUOTATION/4/10/2017', 'CODEPROJ/1/OKT/2017', '0', 'DP 50%, pelunasan setelah barang diterima PBM', 'Noted', '0000-00-00', '0', 'NUr', '0000-00-00', '0', '0', NULL, NULL),
(5, 4, 10, 1, '2017-10-15', 'PEMBELIAN/15/10/2017', '0', '0', '0', 'QUOTATION/14/10/2017', '', '0', 'Ut pharetra, massa id vehicula placerat, lorem enim consequat mi, vitae sagittis nisi lorem sed nisi. Cras tristique leo vel varius bibendum. Phasellus tristique massa tortor, at laoreet turpis sollicitudin sed. Proin mattis euismod turpis in tempus.', 'Morbi nec est vel purus facilisis elementum. Curabitur sagittis, lectus ac convallis faucibus, diam sem commodo neque, vel iaculis eros lectus vel est. Pellentesque dignissim ligula non elit auctor, eget viverra risus iaculis. Suspendisse potenti. Se', '0000-00-00', '0', 'Nur', '0000-00-00', '0', '0', NULL, NULL),
(6, 6, 9, 1, '2017-10-21', 'PERMINTAAN/21/OKT/2017', '0', '0', '0', 'PROP/VEND/JAYAMIX/OKT/2017', '1', '0', '10 x Pembayaran', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mo', '0000-00-00', '0', 'Denny', '0000-00-00', '0', '0', NULL, NULL),
(7, 7, 11, 1, '2017-10-20', 'PO/01/10/2017', '0', '0', '0', '', '001/SMART', '0', 'Pelunasan setelah proyek selesai', 'pengerjaan 100 Hari', '0000-00-00', '0', 'Maman', '0000-00-00', '0', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gntrapp_pembelian_permintaan_detail`
--

CREATE TABLE IF NOT EXISTS `gntrapp_pembelian_permintaan_detail` (
  `pbptnd_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pbptnd_nopermintaan` varchar(150) NOT NULL,
  `pbptnd_jenisbarang` varchar(150) DEFAULT NULL,
  `pbptnd_jumlah` varchar(150) DEFAULT NULL,
  `pbptnd_hargabrg` int(11) NOT NULL,
  `pbptnd_entrydate` datetime DEFAULT NULL,
  `pbptnd_changedate` datetime DEFAULT NULL,
  `pbptnd_brjs_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`pbptnd_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `gntrapp_pembelian_permintaan_detail`
--

INSERT INTO `gntrapp_pembelian_permintaan_detail` (`pbptnd_id`, `pbptnd_nopermintaan`, `pbptnd_jenisbarang`, `pbptnd_jumlah`, `pbptnd_hargabrg`, `pbptnd_entrydate`, `pbptnd_changedate`, `pbptnd_brjs_id`) VALUES
(1, 'PERMINTAAN/15/SEPT/2017', '4', '1000', 0, NULL, NULL, NULL),
(2, 'PERMINTAAN/15/SEPT/2017', '', '', 0, NULL, NULL, NULL),
(3, 'PERMINTAAN/1/AGUSTUS/2017', '7', '10', 0, NULL, NULL, NULL),
(4, 'PERMINTAAN/1/AGUSTUS/2017', '2', '50', 0, NULL, NULL, NULL),
(8, 'PEMBELIAN/15/10/2017', '3', '1000', 0, NULL, NULL, NULL),
(9, 'PEMBELIAN/15/10/2017', '5', '5000', 0, NULL, NULL, NULL),
(12, 'PERMINTAAN/21/OKT/2017', '3', '1000', 0, NULL, NULL, NULL),
(13, 'PERMINTAAN/21/OKT/2017', '2', '', 0, NULL, NULL, NULL),
(14, 'PO/01/10/2017', '12', '10', 0, NULL, NULL, NULL),
(15, 'PO/01/10/2017', '', '', 0, NULL, NULL, NULL),
(16, 'PO/01/10/2017', '', '', 0, NULL, NULL, NULL),
(17, 'PEMBELIAN/8/10/2017', '9', '10', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gntrapp_pembelian_permintaan_suratjalan_detail`
--

CREATE TABLE IF NOT EXISTS `gntrapp_pembelian_permintaan_suratjalan_detail` (
  `pbsuratjaland_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pbsuratjaland_nopermintaan` varchar(150) NOT NULL,
  `pbsuratjaland_jenisbarang` varchar(150) DEFAULT NULL,
  `pbsuratjaland_jumlah` varchar(150) DEFAULT NULL,
  `pbsuratjaland_entrydate` datetime DEFAULT NULL,
  `pbsuratjaland_changedate` datetime DEFAULT NULL,
  `pbsuratjaland_brjs_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`pbsuratjaland_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `gntrapp_pembelian_suratjalan`
--

CREATE TABLE IF NOT EXISTS `gntrapp_pembelian_suratjalan` (
  `pbsrtjalan_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pbsrtjalan_pbkw_id` int(11) NOT NULL,
  `pbsrtjalan_pbptn_id` int(11) NOT NULL,
  `pbsrtjalan_tanggal` date NOT NULL,
  `pbsrtjalan_no` varchar(150) NOT NULL,
  `pbsrtjalan_halaman` varchar(250) DEFAULT NULL,
  `pbsrtjalan_matauang` varchar(50) DEFAULT NULL,
  `pbsrtjalan_vendor` varchar(250) DEFAULT NULL,
  `pbsrtjalan_proposalno` varchar(250) DEFAULT NULL,
  `pbsrtjalan_projectcode` varchar(250) DEFAULT NULL,
  `pbsrtjalan_buyer` varchar(250) DEFAULT NULL,
  `pbsrtjalan_catatan` varchar(250) DEFAULT NULL,
  `pbsrtjalan_terms` varchar(250) DEFAULT NULL,
  `pbsrtjalan_tanggalditerima` date NOT NULL,
  `pbsrtjalan_diterimaoleh` varchar(250) DEFAULT NULL,
  `pbsrtjalan_namapenerima` varchar(250) DEFAULT NULL,
  `pbsrtjalan_tanggalterima` date NOT NULL,
  `pbsrtjalan_totaltagihan` varchar(250) DEFAULT NULL,
  `pbsrtjalan_nokendaraan` varchar(250) DEFAULT NULL,
  `pbsrtjalan_terbilang` varchar(250) DEFAULT NULL,
  `uploadfile` varchar(250) DEFAULT NULL,
  `pbsrtjalan_entrydate` datetime DEFAULT NULL,
  `pbsrtjalan_changedate` datetime DEFAULT NULL,
  PRIMARY KEY (`pbsrtjalan_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `gntrapp_pembelian_suratjalan`
--

INSERT INTO `gntrapp_pembelian_suratjalan` (`pbsrtjalan_id`, `pbsrtjalan_pbkw_id`, `pbsrtjalan_pbptn_id`, `pbsrtjalan_tanggal`, `pbsrtjalan_no`, `pbsrtjalan_halaman`, `pbsrtjalan_matauang`, `pbsrtjalan_vendor`, `pbsrtjalan_proposalno`, `pbsrtjalan_projectcode`, `pbsrtjalan_buyer`, `pbsrtjalan_catatan`, `pbsrtjalan_terms`, `pbsrtjalan_tanggalditerima`, `pbsrtjalan_diterimaoleh`, `pbsrtjalan_namapenerima`, `pbsrtjalan_tanggalterima`, `pbsrtjalan_totaltagihan`, `pbsrtjalan_nokendaraan`, `pbsrtjalan_terbilang`, `uploadfile`, `pbsrtjalan_entrydate`, `pbsrtjalan_changedate`) VALUES
(1, 1, 1, '2017-09-19', 'SPJ/15/SEPT/2017', '0', '1', '0', '0', '0', '0', '0', '0', '2017-09-16', '0', 'Joni', '0000-00-00', '0', 'B 8685 KSH', '0', 'suratjalan_2993a45.jpg', NULL, NULL),
(2, 2, 2, '2017-08-08', 'SPJ/1/8/2017', '0', '1', '0', '0', '0', '0', '0', '0', '2017-09-08', '0', 'Nur', '0000-00-00', '0', 'B 8798 GUH', '0', 'suratjalan_bf56a1b.jpg', NULL, NULL),
(3, 3, 4, '2017-10-06', 'SPJPASIRSILICA/OKT/201', '0', '1', '0', '0', '0', '0', '0', '0', '2017-10-06', '0', 'Nur', '0000-00-00', '0', 'B 1234 ABC / B 2345 dfe', '0', 'suratjalan_70ca55f.jpg', NULL, NULL),
(4, 3, 4, '2017-10-08', 'SPJPASIRSILICA/OKT/201', '0', '1', '0', '0', '0', '0', '0', '0', '2017-10-08', '0', 'Nur', '0000-00-00', '0', 'B 3635ABC', '0', 'suratjalan_f928b52.PNG', NULL, NULL),
(5, 4, 5, '2017-10-15', 'SPJBETON/15/OKT/2017', '0', '1', '0', '0', '0', '0', '0', '0', '2017-10-15', '0', 'Nur', '0000-00-00', '0', 'B 2424 GHU', '0', 'suratjalan_cef21a6.jpg', NULL, NULL),
(6, 5, 6, '2017-10-21', 'SPJ/21/OKT/2017', '0', '1', '0', '0', '0', '0', '0', '0', '2017-10-21', '0', 'Hendro', '0000-00-00', '0', 'B 3432 KSP', '0', 'suratjalan_f06d9b0.jpg', NULL, NULL),
(7, 6, 7, '2017-10-20', 'SPJ/01/10/2017', '0', '1', '0', '0', '0', '0', '0', '0', '2017-10-20', '0', 'Andre', '0000-00-00', '0', 'B 2334 DES', '0', 'suratjalan_5616060.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gntrapp_pembelian_tandaterima`
--

CREATE TABLE IF NOT EXISTS `gntrapp_pembelian_tandaterima` (
  `pbttr_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pbttr_pbinv_id` int(11) NOT NULL,
  `pbttr_pbsrtjalan_id` int(11) NOT NULL,
  `pbttr_pbkw_id` int(11) NOT NULL,
  `pbttr_pbptn_id` int(11) NOT NULL,
  `pbttr_no` varchar(150) NOT NULL,
  `pbttr_noproyek` varchar(250) DEFAULT NULL,
  `pbttr_tghndari` varchar(150) NOT NULL,
  `pbttr_tagihan` varchar(150) DEFAULT NULL,
  `pbttr_mtuang` varchar(150) DEFAULT NULL,
  `pbttr_nilaitagihan` varchar(250) DEFAULT NULL,
  `pbttr_lampiran` text,
  `pbttr_tglkembali` date NOT NULL,
  `pbttr_nobpkc` varchar(250) DEFAULT NULL,
  `pbttr_tglbpkc` date NOT NULL,
  `pbttr_menerima` varchar(250) DEFAULT NULL,
  `pbttr_tglterima` date NOT NULL,
  `pbttr_uploadfile` varchar(250) DEFAULT NULL,
  `pbttr_entrydate` datetime DEFAULT NULL,
  `pbttr_changedate` datetime DEFAULT NULL,
  PRIMARY KEY (`pbttr_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `gntrapp_pembelian_tandaterima`
--

INSERT INTO `gntrapp_pembelian_tandaterima` (`pbttr_id`, `pbttr_pbinv_id`, `pbttr_pbsrtjalan_id`, `pbttr_pbkw_id`, `pbttr_pbptn_id`, `pbttr_no`, `pbttr_noproyek`, `pbttr_tghndari`, `pbttr_tagihan`, `pbttr_mtuang`, `pbttr_nilaitagihan`, `pbttr_lampiran`, `pbttr_tglkembali`, `pbttr_nobpkc`, `pbttr_tglbpkc`, `pbttr_menerima`, `pbttr_tglterima`, `pbttr_uploadfile`, `pbttr_entrydate`, `pbttr_changedate`) VALUES
(1, 1, 1, 1, 1, 'TT/15/SEPT/2017', '0', 'Supplier', 'PT. Astra Honda Motor', '0', '0', 'a:6:{i:0;s:13:"Kwitansi Asli";i:1;s:12:"Invoice Asli";i:2;s:17:"Faktur Pajak Asli";i:3;s:16:"Surat Jalan Asli";i:4;s:44:"Tanda Terima Asli + Quality Control Approval";i:5;s:23:"Purchase Order Asli/SPK";}', '0000-00-00', '', '0000-00-00', 'Endang', '2017-09-16', NULL, NULL, NULL),
(2, 2, 2, 2, 2, 'TT/1/8/2017', '0', 'Supplier', 'PT. Berca', '0', '0', 'a:6:{i:0;s:13:"Kwitansi Asli";i:1;s:12:"Invoice Asli";i:2;s:17:"Faktur Pajak Asli";i:3;s:16:"Surat Jalan Asli";i:4;s:44:"Tanda Terima Asli + Quality Control Approval";i:5;s:23:"Purchase Order Asli/SPK";}', '0000-00-00', '', '0000-00-00', 'Anto', '2017-08-10', NULL, NULL, NULL),
(3, 3, 3, 3, 4, 'TTPASIRSILICA/OKT/2017', '0', 'Supplier', 'PT. Astrindo', '0', '0', 'a:4:{i:0;s:13:"Kwitansi Asli";i:1;s:12:"Invoice Asli";i:2;s:16:"Surat Jalan Asli";i:3;s:23:"Purchase Order Asli/SPK";}', '0000-00-00', '90909090', '2017-10-08', 'Susanto', '2017-10-06', NULL, NULL, NULL),
(4, 4, 5, 4, 5, 'TTBETON/OKT/2017', '0', 'Supplier', 'PT. Karunia Hosana', '0', '0', 'a:5:{i:0;s:13:"Kwitansi Asli";i:1;s:12:"Invoice Asli";i:2;s:17:"Faktur Pajak Asli";i:3;s:16:"Surat Jalan Asli";i:4;s:23:"Purchase Order Asli/SPK";}', '0000-00-00', '', '0000-00-00', 'Susanto', '2017-10-15', NULL, NULL, NULL),
(5, 5, 6, 5, 6, 'TT/21/OKT/2017', '0', 'Supplier', 'PT. JAYA MIX', '0', '0', 'a:6:{i:0;s:13:"Kwitansi Asli";i:1;s:12:"Invoice Asli";i:2;s:17:"Faktur Pajak Asli";i:3;s:16:"Surat Jalan Asli";i:4;s:44:"Tanda Terima Asli + Quality Control Approval";i:5;s:23:"Purchase Order Asli/SPK";}', '0000-00-00', '', '0000-00-00', 'Ardi', '2017-10-21', NULL, NULL, NULL),
(6, 6, 7, 6, 7, 'INV/01/10/2017', '0', 'Supplier', 'Maman Cs', '0', '0', 'a:6:{i:0;s:13:"Kwitansi Asli";i:1;s:12:"Invoice Asli";i:2;s:17:"Faktur Pajak Asli";i:3;s:16:"Surat Jalan Asli";i:4;s:44:"Tanda Terima Asli + Quality Control Approval";i:5;s:23:"Purchase Order Asli/SPK";}', '0000-00-00', '', '0000-00-00', 'Andre', '2017-10-21', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gntrapp_penerimaan`
--

CREATE TABLE IF NOT EXISTS `gntrapp_penerimaan` (
  `pnrm_id` int(11) NOT NULL AUTO_INCREMENT,
  `pnrm_bank_id` int(11) NOT NULL,
  `pnrm_tanggal` date NOT NULL,
  `pnrm_akun_id` int(11) NOT NULL,
  `pnrm_nama` varchar(100) NOT NULL,
  `pnrm_jumlah` int(11) NOT NULL,
  `pnrm_keterangan` text NOT NULL,
  `pnrm_void` tinyint(4) NOT NULL,
  `pnrm_entryuser` varchar(100) NOT NULL,
  `pnrm_entrydate` datetime NOT NULL,
  `pnrm_changeuser` varchar(100) NOT NULL,
  `pnrm_changedate` datetime NOT NULL,
  PRIMARY KEY (`pnrm_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `gntrapp_penerimaan`
--

INSERT INTO `gntrapp_penerimaan` (`pnrm_id`, `pnrm_bank_id`, `pnrm_tanggal`, `pnrm_akun_id`, `pnrm_nama`, `pnrm_jumlah`, `pnrm_keterangan`, `pnrm_void`, `pnrm_entryuser`, `pnrm_entrydate`, `pnrm_changeuser`, `pnrm_changedate`) VALUES
(1, 1, '2017-09-06', 0, 'PT. Pertamina', 14000000, 'Pelunasan', 0, '', '2017-09-06 16:53:21', '', '0000-00-00 00:00:00'),
(2, 1, '2017-09-04', 0, 'PT. Andalan Furnindo', 16000000, 'Pembayaran Proyek Termin I', 0, '', '2017-09-06 16:54:13', '', '0000-00-00 00:00:00'),
(3, 4, '2017-10-06', 0, 'PT. Andalan Furnindo', 10000000, 'Pelunasan Pembayaran Proyek', 0, '', '2017-10-08 05:28:40', '', '0000-00-00 00:00:00'),
(4, 1, '2017-10-20', 0, 'PT. Shell', 5000000, 'Pembayaran project', 0, '', '2017-10-22 04:46:42', '', '0000-00-00 00:00:00'),
(5, 2, '2017-10-22', 0, 'PT. Smart', 8400000, 'Pembayaran pengerjaan pagar PT. Smart', 0, '', '2017-10-22 06:31:08', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gntrapp_penerimaan_kas`
--

CREATE TABLE IF NOT EXISTS `gntrapp_penerimaan_kas` (
  `pnrm_kas_id` int(11) NOT NULL AUTO_INCREMENT,
  `pnrm_kas_no_bukti` varchar(100) NOT NULL,
  `pnrm_kas_tanggal` date NOT NULL,
  `pnrm_kas_akun_id` int(11) NOT NULL,
  `pnrm_kas_nama` varchar(100) NOT NULL,
  `pnrm_kas_jumlah` int(11) NOT NULL,
  `pnrm_kas_untuk` text NOT NULL,
  `pnrm_kas_penerima` text NOT NULL,
  `pnrm_kas_void` tinyint(4) NOT NULL,
  `pnrm_kas_entryuser` varchar(100) NOT NULL,
  `pnrm_kas_entrydate` datetime NOT NULL,
  `pnrm_kas_changeuser` varchar(100) NOT NULL,
  `pnrm_kas_changedate` datetime NOT NULL,
  PRIMARY KEY (`pnrm_kas_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `gntrapp_pengeluaran`
--

CREATE TABLE IF NOT EXISTS `gntrapp_pengeluaran` (
  `pgln_id` int(11) NOT NULL AUTO_INCREMENT,
  `pgln_bank_id` int(11) NOT NULL,
  `pgln_tanggal` date NOT NULL,
  `pgln_akun_id` int(11) NOT NULL,
  `pgln_nama` varchar(100) NOT NULL,
  `pgln_jumlah` int(11) NOT NULL,
  `pgln_keterangan` text NOT NULL,
  `pgln_void` tinyint(4) NOT NULL,
  `pgln_entryuser` varchar(100) NOT NULL,
  `pgln_entrydate` datetime NOT NULL,
  `pgln_changeuser` varchar(100) NOT NULL,
  `pgln_changedate` datetime NOT NULL,
  PRIMARY KEY (`pgln_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `gntrapp_pengeluaran`
--

INSERT INTO `gntrapp_pengeluaran` (`pgln_id`, `pgln_bank_id`, `pgln_tanggal`, `pgln_akun_id`, `pgln_nama`, `pgln_jumlah`, `pgln_keterangan`, `pgln_void`, `pgln_entryuser`, `pgln_entrydate`, `pgln_changeuser`, `pgln_changedate`) VALUES
(1, 1, '2017-07-10', 0, 'THR Karyawan', 10000000, '', 0, '', '2017-07-02 05:24:41', '', '0000-00-00 00:00:00'),
(2, 4, '2017-10-06', 0, 'Transfer Gajian Bukan Oktober Nur', 5000000, 'Transfer Gajian Bukan Oktober Nur', 0, '', '2017-10-08 05:30:40', '', '0000-00-00 00:00:00'),
(3, 2, '2017-10-21', 0, 'Pembayaran Beton PT. Jaya Mix', 1107680000, 'Pelunasan', 0, '', '2017-10-21 10:53:49', '', '0000-00-00 00:00:00'),
(4, 1, '2017-10-20', 0, 'PT. Marunda Centre', 4000000, 'Pelunasan', 0, '', '2017-10-22 04:49:57', '', '0000-00-00 00:00:00'),
(5, 2, '2017-10-23', 0, 'Pembayaran pengerjaan pagar maman cs', 784000, 'Pembayaran pengerjaan pagar maman cs', 0, '', '2017-10-22 05:56:20', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gntrapp_penjualan_beritaacara`
--

CREATE TABLE IF NOT EXISTS `gntrapp_penjualan_beritaacara` (
  `pbcr_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pbcr_pjkw_id` int(11) DEFAULT NULL,
  `pbcr_pjinv_id` int(11) DEFAULT NULL,
  `pbcr_ppmt_id` int(11) DEFAULT NULL,
  `pbcr_ppnw_id` int(11) DEFAULT NULL,
  `pbcr_no` varchar(150) DEFAULT NULL,
  `pbcr_noproyek` varchar(250) DEFAULT NULL,
  `pbcr_deskripsi` varchar(250) DEFAULT NULL,
  `pbcr_tglperjanjian` date DEFAULT NULL,
  `pbcr_tghndari` varchar(150) DEFAULT NULL,
  `pbcr_tagihan` varchar(150) DEFAULT NULL,
  `pbcr_mtuang` varchar(150) DEFAULT NULL,
  `pbcr_nilaitagihan` varchar(250) DEFAULT NULL,
  `pbcr_lampiran` varchar(250) DEFAULT NULL,
  `pbcr_tglkembali` date DEFAULT NULL,
  `pbcr_nobpkc` varchar(250) DEFAULT NULL,
  `pbcr_tglbpkc` date DEFAULT NULL,
  `pbcr_menerima` varchar(250) DEFAULT NULL,
  `pbcr_tglterima` date DEFAULT NULL,
  `pbcr_uploadfile` varchar(250) DEFAULT NULL,
  `pbcr_entrydate` datetime DEFAULT NULL,
  `pbcr_changedate` datetime DEFAULT NULL,
  PRIMARY KEY (`pbcr_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `gntrapp_penjualan_beritaacara`
--

INSERT INTO `gntrapp_penjualan_beritaacara` (`pbcr_id`, `pbcr_pjkw_id`, `pbcr_pjinv_id`, `pbcr_ppmt_id`, `pbcr_ppnw_id`, `pbcr_no`, `pbcr_noproyek`, `pbcr_deskripsi`, `pbcr_tglperjanjian`, `pbcr_tghndari`, `pbcr_tagihan`, `pbcr_mtuang`, `pbcr_nilaitagihan`, `pbcr_lampiran`, `pbcr_tglkembali`, `pbcr_nobpkc`, `pbcr_tglbpkc`, `pbcr_menerima`, `pbcr_tglterima`, `pbcr_uploadfile`, `pbcr_entrydate`, `pbcr_changedate`) VALUES
(1, 12, 11, 13, 14, '123', '12345', 'jfdkjfak', '2017-03-29', 'Supplier', 'darimana aja lah terserah lu', '0', '4343435', 'Kwitansi Asli', '0000-00-00', '', '0000-00-00', '', '0000-00-00', NULL, NULL, NULL),
(2, 1, 1, 1, 13, 'abcde', '123456', 'proyek apaan ini', '2017-03-22', 'Subcontractor', 'pt.angin ribut', '0', '0', 'Kwitansi Asli', '0000-00-00', '', '0000-00-00', '', '0000-00-00', NULL, NULL, NULL),
(3, 1, 1, 1, 13, '54321', '4354667', 'proyek apa aja lah', '2017-03-25', 'Subcontractor', 'darimana aja lah terserah lu', '0', '0', 'Kwitansi Asli', '0000-00-00', '', '0000-00-00', '', '0000-00-00', NULL, NULL, NULL),
(4, 2, 2, 2, 13, 'BERITAACARA/9/16/2017', '', '', '0000-00-00', '0', '', '0', '0', 'Tanda Terima Asli + Quality Control Approval', '0000-00-00', '', '0000-00-00', 'Saputra', '2017-09-15', NULL, NULL, NULL),
(5, 3, 3, 3, 14, 'BERITAACARA/1/8/2017', '', '', '0000-00-00', '0', '', '0', '0', 'Tanda Terima Asli + Quality Control Approval', '0000-00-00', '', '0000-00-00', 'Zainal', '2017-08-15', NULL, NULL, NULL),
(6, 4, 4, 4, 21, '161/MHCH MRD-SMART/FEBRUARI/2017', '909/PRO/PBM-SMART/2017', 'Pengiriman Pasir Silica', '2017-10-08', 'Client', 'PT. Smart Tbk.', '0', '0', 'Purchase Order Asli/SPK', '0000-00-00', '', '0000-00-00', 'Demas', '2017-10-08', NULL, NULL, NULL),
(7, 5, 5, 5, 23, 'BERITAACARA/SMART/01/10/2017', '001/SMART', 'Pengerjaan Pagar PT. Smart', '2017-10-20', 'Client', 'PT. Smart', '0', '0', 'Purchase Order Asli/SPK', '0000-00-00', '', '0000-00-00', 'Denny', '2017-10-21', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gntrapp_penjualan_bukti_pembayaran`
--

CREATE TABLE IF NOT EXISTS `gntrapp_penjualan_bukti_pembayaran` (
  `pbktp_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pbktp_pttr_id` int(11) NOT NULL,
  `pbktp_pbcr_id` int(11) NOT NULL,
  `pbktp_pjkw_id` int(11) NOT NULL,
  `pbktp_pjinv_id` int(11) NOT NULL,
  `pbktp_ppmt_id` int(11) NOT NULL,
  `pbktp_ppnw_id` int(11) NOT NULL,
  `pbktp_tgltransaksi` date NOT NULL,
  `pbktp_notransaksi` varchar(150) NOT NULL,
  `pbktp_norekening` varchar(250) DEFAULT NULL,
  `pbktp_namakonsultan` varchar(150) NOT NULL,
  `pbktp_noinvoice` varchar(150) DEFAULT NULL,
  `pbktp_totaltagihan` varchar(150) DEFAULT NULL,
  `pbktp_terbilang` varchar(250) DEFAULT NULL,
  `pbktp_jenistransaksi` varchar(250) DEFAULT NULL,
  `pbktp_jamtransaksi` date NOT NULL,
  `pbktp_channel` varchar(250) DEFAULT NULL,
  `pbktp_userid` date NOT NULL,
  `pbktp_uploadfile` varchar(250) DEFAULT NULL,
  `pbktp_entrydate` datetime DEFAULT NULL,
  `pbktp_changedate` datetime DEFAULT NULL,
  PRIMARY KEY (`pbktp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `gntrapp_penjualan_bukti_pembayaran`
--

INSERT INTO `gntrapp_penjualan_bukti_pembayaran` (`pbktp_id`, `pbktp_pttr_id`, `pbktp_pbcr_id`, `pbktp_pjkw_id`, `pbktp_pjinv_id`, `pbktp_ppmt_id`, `pbktp_ppnw_id`, `pbktp_tgltransaksi`, `pbktp_notransaksi`, `pbktp_norekening`, `pbktp_namakonsultan`, `pbktp_noinvoice`, `pbktp_totaltagihan`, `pbktp_terbilang`, `pbktp_jenistransaksi`, `pbktp_jamtransaksi`, `pbktp_channel`, `pbktp_userid`, `pbktp_uploadfile`, `pbktp_entrydate`, `pbktp_changedate`) VALUES
(1, 1, 4, 2, 2, 2, 13, '2017-09-19', 'BUKTIPEMBAYARAN/16/SEPT/2017', '2', '', '0', '0', '0', 'Tunai', '0000-00-00', NULL, '0000-00-00', 'buktipembayaran_6578ea8.jpg', NULL, NULL),
(2, 2, 5, 3, 3, 3, 14, '2017-08-22', 'BUKTIPEMBAYARAN/1/8/2017', '2', '', '0', '0', '0', 'Tunai', '0000-00-00', NULL, '0000-00-00', 'buktipembayaran_8dcf242.jpg', NULL, NULL),
(3, 3, 6, 4, 4, 4, 21, '2017-10-09', 'BUKTIPEMBAYARANPENJUALAN/PBM-SMART/2017', '3', '', '0', '0', '0', 'Transfer', '0000-00-00', NULL, '0000-00-00', 'buktipembayaran_8f4e142.jpg', NULL, NULL),
(4, 4, 7, 5, 5, 5, 23, '2017-10-22', 'BUKTIPEMBAYARAN/SMART/1/10/2017', '2', '', '0', '0', '0', 'Transfer', '0000-00-00', NULL, '0000-00-00', 'buktipembayaran_38cca13.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gntrapp_penjualan_invoice`
--

CREATE TABLE IF NOT EXISTS `gntrapp_penjualan_invoice` (
  `pjinv_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pjinv_ppmt_id` int(11) NOT NULL,
  `pjinv_ppnw_id` int(11) NOT NULL,
  `pjinv_tanggal` date NOT NULL,
  `pjinv_noinvoice` varchar(150) NOT NULL,
  `pjinv_wo` varchar(250) DEFAULT NULL,
  `pjinv_wotgl` date NOT NULL,
  `pjinv_nopenawaran` varchar(250) DEFAULT NULL,
  `pjinv_to` varchar(250) DEFAULT NULL,
  `pjinv_alamat` varchar(250) DEFAULT NULL,
  `pjinv_description` varchar(250) DEFAULT NULL,
  `pjinv_totaltagihan` varchar(250) DEFAULT NULL,
  `pjinv_terbilang` varchar(250) DEFAULT NULL,
  `pjinv_entrydate` datetime DEFAULT NULL,
  `pjinv_changedate` datetime DEFAULT NULL,
  PRIMARY KEY (`pjinv_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `gntrapp_penjualan_invoice`
--

INSERT INTO `gntrapp_penjualan_invoice` (`pjinv_id`, `pjinv_ppmt_id`, `pjinv_ppnw_id`, `pjinv_tanggal`, `pjinv_noinvoice`, `pjinv_wo`, `pjinv_wotgl`, `pjinv_nopenawaran`, `pjinv_to`, `pjinv_alamat`, `pjinv_description`, `pjinv_totaltagihan`, `pjinv_terbilang`, `pjinv_entrydate`, `pjinv_changedate`) VALUES
(1, 1, 13, '2017-03-31', '1234567', '0', '0000-00-00', '0', '0', '0', '', '0', '0', NULL, NULL),
(2, 2, 13, '2017-09-12', 'INV/16/SEPT/2017', '0', '0000-00-00', '0', '0', '0', 'Pelunasan Pembayaran', '0', '0', NULL, NULL),
(3, 3, 14, '2017-08-07', 'INV/1/8/2017', '0', '0000-00-00', '0', '0', '0', 'Tagihan Pelunasan', '0', '0', NULL, NULL),
(4, 4, 21, '2017-10-08', '007/INV/PBM-SMART/III/2017', '0', '0000-00-00', '0', '0', '0', 'Pengiriman Tgl. 13 Feb 2017\r\nSilica Sand Mash 12-20 0,5 s/d 1,7 mm', '0', '0', NULL, NULL),
(5, 5, 23, '2017-10-21', 'INV/SMART/01/10/2017', '0', '0000-00-00', '0', '0', '0', 'Invoice pembayaran ke PT. Smart', '0', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gntrapp_penjualan_invoice_detail`
--

CREATE TABLE IF NOT EXISTS `gntrapp_penjualan_invoice_detail` (
  `pjinvd_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pjinvd_invid` varchar(150) NOT NULL,
  `pjinvd_jenisbarang` varchar(150) DEFAULT NULL,
  `pjinvd_jumlah` varchar(150) DEFAULT NULL,
  `pjinvd_entrydate` datetime DEFAULT NULL,
  `pjinvd_changedate` datetime DEFAULT NULL,
  `pjinvd_brjs_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`pjinvd_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `gntrapp_penjualan_kwitansi`
--

CREATE TABLE IF NOT EXISTS `gntrapp_penjualan_kwitansi` (
  `pjkw_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pjkw_pjinv_id` int(11) NOT NULL,
  `pjkw_ppmt_id` int(11) NOT NULL,
  `pjkw_ppnw_id` int(11) NOT NULL,
  `pjkw_no` varchar(150) NOT NULL,
  `pjkw_dari` varchar(250) DEFAULT NULL,
  `pjkw_total` varchar(150) NOT NULL,
  `pjkw_bank` varchar(150) DEFAULT NULL,
  `pjkw_keterangan_print_out` text,
  `pjkw_norek` varchar(250) DEFAULT NULL,
  `pjkw_an` varchar(250) DEFAULT NULL,
  `pjkw_alamat` varchar(250) DEFAULT NULL,
  `pjkw_notlpn` varchar(250) DEFAULT NULL,
  `pjkw_entrydate` datetime DEFAULT NULL,
  `pjkw_changedate` datetime DEFAULT NULL,
  `uploadfile` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`pjkw_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `gntrapp_penjualan_kwitansi`
--

INSERT INTO `gntrapp_penjualan_kwitansi` (`pjkw_id`, `pjkw_pjinv_id`, `pjkw_ppmt_id`, `pjkw_ppnw_id`, `pjkw_no`, `pjkw_dari`, `pjkw_total`, `pjkw_bank`, `pjkw_keterangan_print_out`, `pjkw_norek`, `pjkw_an`, `pjkw_alamat`, `pjkw_notlpn`, `pjkw_entrydate`, `pjkw_changedate`, `uploadfile`) VALUES
(1, 1, 1, 13, 'aqw1q212', '0', '0', '2', '', '0', '0', '0', '0', NULL, NULL, NULL),
(2, 2, 2, 13, 'Kwitansi', '0', '0', '1', '<p>Vivamus sit amet feugiat leo. Maecenas sem neque, fermentum sed dolor sed, placerat scelerisque risus. Mauris id euismod sapien. Aenean porttitor congue mollis. Fusce hendrerit urna at est bibendum, dapibus porttitor leo rhoncus. Nunc mattis tortor velit, et mollis nisi euismod commodo. Maecenas ornare leo nec viverra faucibus. Cras cursus, arcu sed tempor malesuada, ex lacus finibus mi, id accumsan sapien sem eu dui. Nunc semper felis mi, quis varius tortor lacinia sed.</p>', '0', '0', '0', '0', NULL, NULL, NULL),
(3, 3, 3, 14, 'PBM/KWITANSI/1/8/2017', '0', '0', '2', '<p>Sed velit nulla, rutrum quis venenatis vitae, ornare at risus. Nulla ac interdum odio. Suspendisse scelerisque porttitor tortor ac viverra. Etiam orci sapien, volutpat a risus quis, rhoncus laoreet dolor. Aenean nunc enim, egestas eu varius quis, gravida sed metus. Sed auctor nisl in nisi lacinia, at accumsan enim posuere. Integer quis tellus a nisi consequat luctus eget sed lorem. Fusce volutpat vehicula lacus nec feugiat. Vivamus maximus malesuada congue. Nunc rhoncus mauris eget tempor dictum. Maecenas in turpis nulla. Nulla nec rhoncus tortor, ac volutpat turpis. Aliquam vel lectus sit amet odio consequat auctor. Nam at nisi posuere, vulputate diam eget, gravida erat. Curabitur luctus urna et metus malesuada, ut fermentum arcu volutpat. Donec sit amet scelerisque dui.</p>', '0', '0', '0', '0', NULL, NULL, NULL),
(4, 4, 4, 21, '007/KWT/PBM-SMART/III/2017', '0', '0', '3', '<p>Pembayaran melalui rekening ditujukan kepada :</p><p>PT. Putra Bahari Mandiri</p><p>No. Rekg&nbsp;&nbsp; : 0300185671</p><p>Bank BNI</p><p>Cabang KCP Tanjung Priuk</p>', '0', '0', '0', '0', NULL, NULL, NULL),
(5, 5, 5, 23, 'KWT/SMART/01/10/2017', '0', '0', '2', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', '0', '0', '0', '0', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gntrapp_penjualan_penawaran`
--

CREATE TABLE IF NOT EXISTS `gntrapp_penjualan_penawaran` (
  `ppnw_id` int(11) NOT NULL AUTO_INCREMENT,
  `ppnw_no_penawaran` varchar(100) NOT NULL,
  `ppnw_no_pemesanan` varchar(100) NOT NULL,
  `ppnw_tanggal` date NOT NULL,
  `ppnw_clnt_id` int(11) NOT NULL,
  `ppnw_dftrakun` int(11) NOT NULL,
  `ppnw_status` tinyint(4) NOT NULL,
  `ppnw_diskon` int(11) NOT NULL,
  `ppnw_pajak` int(11) NOT NULL,
  `ppnw_biaya_kirim` int(11) NOT NULL,
  `ppnw_nilai_faktur` int(11) NOT NULL,
  `ppnw_keterangan` text NOT NULL,
  `ppnw_keterangan_print_out` text NOT NULL,
  `ppnw_void` tinyint(4) NOT NULL,
  `ppnw_entryuser` varchar(100) NOT NULL,
  `ppnw_entrydate` datetime NOT NULL,
  `ppnw_changeuser` varchar(100) NOT NULL,
  `ppnw_changedate` datetime NOT NULL,
  PRIMARY KEY (`ppnw_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `gntrapp_penjualan_penawaran`
--

INSERT INTO `gntrapp_penjualan_penawaran` (`ppnw_id`, `ppnw_no_penawaran`, `ppnw_no_pemesanan`, `ppnw_tanggal`, `ppnw_clnt_id`, `ppnw_dftrakun`, `ppnw_status`, `ppnw_diskon`, `ppnw_pajak`, `ppnw_biaya_kirim`, `ppnw_nilai_faktur`, `ppnw_keterangan`, `ppnw_keterangan_print_out`, `ppnw_void`, `ppnw_entryuser`, `ppnw_entrydate`, `ppnw_changeuser`, `ppnw_changedate`) VALUES
(12, '3232323', '323232', '2017-02-15', 12, 0, 1, 12, 212, 2121, 212121, '', '', 127, '21212', '2017-02-17 00:00:00', '', '2017-02-16 00:00:00'),
(13, 'PENAWARAN/15/SEPT/2017', '', '2017-09-08', 3, 0, 2, 0, 0, 5000000, 48700000, 'Penawaran Pintu Sorong Baja 5 unit', '<p><strong>Lorem ipsum dolor sit amet</strong>, consectetur adipiscing elit. Curabitur pulvinar eget leo ut sollicitudin. Cras sit amet nulla mollis, dignissim lorem non, porttitor tellus. In quis tincidunt lacus. Nunc ligula eros, vehicula quis nisi id, pulvinar aliquam elit. Curabitur vehicula erat vel risus condimentum interdum. Maecenas rhoncus, ipsum in sodales convallis, neque nisl fringilla lectus, vel viverra augue velit sit amet quam. Proin non consectetur velit. Sed maximus feugiat laoreet. Nunc eu ex venenatis, <em>tempor eros sed</em>, volutpat orci. In mollis vel ipsum luctus aliquam. Nunc augue libero, ultrices eget ligula ac, rhoncus imperdiet sem. Nulla venenatis, risus eu posuere gravida, dui odio tincidunt ex, id dignissim nulla eros accumsan leo. In at purus quis nisl laoreet molestie. Morbi pretium metus risus, <strong>quis mattis nulla blandit non</strong>.</p>', 0, '', '2017-09-16 09:34:41', '', '0000-00-00 00:00:00'),
(14, 'QUOTATION/1/8/2017', '', '2017-08-01', 4, 0, 2, 0, 0, 2500000, 259350000, 'Pekerjaan Proyek Pengeboran', '<p>Vivamus sit amet feugiat leo. Maecenas sem neque, fermentum sed dolor sed, placerat scelerisque risus. Mauris id euismod sapien. Aenean porttitor congue mollis. Fusce hendrerit urna at est bibendum, dapibus porttitor leo rhoncus. Nunc mattis tortor velit, et mollis nisi euismod commodo. Maecenas ornare leo nec viverra faucibus. Cras cursus, arcu sed tempor malesuada, ex lacus finibus mi, id accumsan sapien sem eu dui. Nunc semper felis mi, quis varius tortor lacinia sed.</p>', 0, '', '2017-09-16 09:52:22', '', '0000-00-00 00:00:00'),
(15, '016/PBM/VIII/2017', '', '2017-08-14', 7, 0, 2, 0, 0, 0, 49665000, 'Penawaran Harga Perbaikan Pintu Pagar dan Pengecoran Lantai', '<p>Titipan 10%</p>', 0, '', '2017-10-08 06:53:19', '', '0000-00-00 00:00:00'),
(20, '016/PBM/VIII/2017', '', '2017-08-14', 7, 0, 2, 0, 0, 0, 49665000, '', '<p>Penawaran Harga Perbaikan Pintu Pagar dan Pengecoran Lantai</p>', 0, '', '2017-10-08 06:59:31', '', '0000-00-00 00:00:00'),
(21, '017/PBM/VIII/2017', '', '2017-10-08', 7, 0, 2, 0, 0, 0, 38000000, 'Silica Sand Mash 12-20/0.5 s/d 0.7 mm', '<p>Silica Sand Mash 12-20/0.5 s/d 0.7 mm</p>', 0, '', '2017-10-08 07:16:22', '', '0000-00-00 00:00:00'),
(22, 'QUO/01/SMART/10/2017', '', '2017-10-18', 7, 0, 2, 0, 0, 500000, 7500000, 'Pengerjaan pagar smart', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', 0, '', '2017-10-22 06:06:22', '', '0000-00-00 00:00:00'),
(23, 'QUO/01/SMART/10/2017', '', '2017-10-18', 7, 0, 2, 0, 0, 500000, 7500000, 'Pengerjaan pagar smart', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', 0, '', '2017-10-22 06:08:10', '', '0000-00-00 00:00:00'),
(24, 'ibiboobo', '', '2017-11-19', 7, 0, 2, 0, 0, 100000, 25785000, 'Pengiriman Abu Batu', '<p>kaenojganevano</p>', 0, '', '2017-11-19 13:19:17', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gntrapp_penjualan_penawaran_detail`
--

CREATE TABLE IF NOT EXISTS `gntrapp_penjualan_penawaran_detail` (
  `ppnwd_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ppnwd_no_penawaran` varchar(150) NOT NULL,
  `ppnwd_deskripsi_id` varchar(150) DEFAULT NULL,
  `ppnwd_jenisbarang` varchar(150) DEFAULT NULL,
  `ppnwd_jenisbarang_id` int(11) NOT NULL,
  `ppnwd_volume` varchar(150) DEFAULT NULL,
  `ppnwd_satuan` varchar(150) DEFAULT NULL,
  `ppnwd_hargasatuan` varchar(150) DEFAULT NULL,
  `ppnwd_entrydate` datetime DEFAULT NULL,
  `ppnwd_changedate` datetime DEFAULT NULL,
  PRIMARY KEY (`ppnwd_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- Dumping data for table `gntrapp_penjualan_penawaran_detail`
--

INSERT INTO `gntrapp_penjualan_penawaran_detail` (`ppnwd_id`, `ppnwd_no_penawaran`, `ppnwd_deskripsi_id`, `ppnwd_jenisbarang`, `ppnwd_jenisbarang_id`, `ppnwd_volume`, `ppnwd_satuan`, `ppnwd_hargasatuan`, `ppnwd_entrydate`, `ppnwd_changedate`) VALUES
(1, 's423232dw', '', 'lkjbljbl', 1, '', 'ljblojbLJB', '8698698', NULL, NULL),
(2, 's423232dw', '', 'lkjbljbl', 1, '', 'ljblojbLJB', '8698698', NULL, NULL),
(3, 'PENAWARAN/15/SEPT/2017', 'Penawaran pintu sorong baja', 'Pintu Sorong Baja Type 2.a Uk. (b=0,6-0,8) Dan (h=0,3- 1) M', 8, '5', 'Unit', '8470000', NULL, NULL),
(4, 'PENAWARAN/15/SEPT/2017', '', '', 0, '', '', '0', NULL, NULL),
(5, 'QUOTATION/1/8/2017', 'Pengerjaan pengeboran', 'Abu Batu', 5, '1000', 'm3', '256850', NULL, NULL),
(6, 'QUOTATION/1/8/2017', '', '', 0, '', '', '0', NULL, NULL),
(47, '016/PBM/VIII/2017', 'Penawaran Harga Perbaikan Pintu Pagar dan Pengecoran Lantai', 'Pekerjaan Persiapan Pengecoran Lantai Smart', 17, '1', 'ls', '3525000', NULL, NULL),
(48, '016/PBM/VIII/2017', '', 'Bobokan Lantai Bertulang', 10, '4.50', 'm3', '880000', NULL, NULL),
(49, '016/PBM/VIII/2017', '', 'Pembuangan Bobokan Beton dengan Karung', 11, '1', 'ls', '1975000', NULL, NULL),
(50, '016/PBM/VIII/2017', '', 'Pemasangan rel Besi 16&quot; 13 x 2 m', 12, '82', 'kg', '62500', NULL, NULL),
(51, '016/PBM/VIII/2017', '', 'Pemasangan Besi Siku 5cm x 5cm x 5mm', 13, '187', 'kg', '62500', NULL, NULL),
(52, '016/PBM/VIII/2017', '', 'Pemasangan As Roda', 14, '8', 'pcs', '735000', NULL, NULL),
(53, '016/PBM/VIII/2017', '', 'Pengecoran Lantai K350 bertulang Uk. Wermes 10 mm', 15, '4.50', 'm3', '3725000', NULL, NULL),
(54, '016/PBM/VIII/2017', '', 'Finishing / kebersihan', 16, '4', 'ls', '185000', NULL, NULL),
(55, '017/PBM/VIII/2017', 'Silica Sand Mash 12-20/0.5 s/d 0.7 mm', 'Pasir Silica', 9, '20', 'Ton', '1900000', NULL, NULL),
(56, '017/PBM/VIII/2017', '', '', 0, '', '', '0', NULL, NULL),
(59, 'QUO/01/SMART/10/2017', 'Pengerjaan Pagar PT. Smart', 'Pemasangan rel Besi 16&quot; 13 x 2 m', 12, '100', 'kg', '70000', NULL, NULL),
(60, 'QUO/01/SMART/10/2017', '', '', 0, '', '', '0', NULL, NULL),
(61, 'QUO/01/SMART/10/2017', '', 'Balz Mercury (bhl) 1000 Watt', 7, '', 'Bh', '2400000', NULL, NULL),
(62, 'QUO/01/SMART/10/2017', '', '', 0, '', '', '0', NULL, NULL),
(63, 'ibiboobo', 'Pengiriman Abu Batu', 'Abu Batu', 5, '100', 'm3', '256850', NULL, NULL),
(64, 'ibiboobo', '', '', 0, '', '', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gntrapp_penjualan_permintaan`
--

CREATE TABLE IF NOT EXISTS `gntrapp_penjualan_permintaan` (
  `ppmt_id` int(11) NOT NULL AUTO_INCREMENT,
  `ppmt_ppnw_id` int(11) NOT NULL,
  `ppmt_tanggal` date NOT NULL,
  `ppmt_clnt_id` int(11) NOT NULL,
  `ppmt_void` int(11) NOT NULL,
  `ppmt_noso` varchar(100) NOT NULL,
  `ppmt_status` varchar(100) NOT NULL,
  `ppmt_nopo` varchar(100) NOT NULL,
  `ppmt_diskon` varchar(100) NOT NULL,
  `ppmt_pajak` varchar(100) NOT NULL,
  `ppmt_biayakirim` varchar(100) NOT NULL,
  `ppmt_nilaifaktur` varchar(100) NOT NULL,
  `ppmt_uangmuka` varchar(100) NOT NULL,
  `ppmt_keterangan` varchar(200) NOT NULL,
  `ppmt_entrydate` datetime DEFAULT NULL,
  `ppmt_changedate` datetime DEFAULT NULL,
  `ppmt_fileupload` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`ppmt_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `gntrapp_penjualan_permintaan`
--

INSERT INTO `gntrapp_penjualan_permintaan` (`ppmt_id`, `ppmt_ppnw_id`, `ppmt_tanggal`, `ppmt_clnt_id`, `ppmt_void`, `ppmt_noso`, `ppmt_status`, `ppmt_nopo`, `ppmt_diskon`, `ppmt_pajak`, `ppmt_biayakirim`, `ppmt_nilaifaktur`, `ppmt_uangmuka`, `ppmt_keterangan`, `ppmt_entrydate`, `ppmt_changedate`, `ppmt_fileupload`) VALUES
(1, 13, '2017-03-24', 0, 0, '12345', '2', '0', '0', '0', '0', '0', '12345', 'dsd', '2017-03-09 17:11:53', '2017-10-21 07:13:20', NULL),
(2, 13, '2017-09-11', 5, 0, 'PBM/PERMINTAAN/16/9/2017', '2', '0', '0', '0', '0', '0', '0', 'Pembayaran Tunai', '2017-09-16 09:38:46', NULL, 'file_89c4476.jpg'),
(3, 14, '2017-08-02', 4, 0, 'PBM/PERMINTAAN/1/8/2017', '2', '0', '0', '0', '0', '0', '0', 'Pembayaran Cash', '2017-09-16 09:53:23', NULL, 'file_3d8d222.jpg'),
(4, 21, '2017-10-08', 7, 0, '9000094040', '2', '0', '0', '0', '0', '0', '0', 'Pada pengiriman barang/jasa , supplier wajib mematuhi peraturan K3, menyediakan Alat Pelindung Diri (APD), serta tidk menyebabkan pencemaran lingkungan dan kecelakaan kerja di area perusahaan.', '2017-10-08 07:21:27', NULL, 'file_f3bb066.jpg'),
(5, 23, '2017-10-19', 7, 0, 'PO/SMART/01/10/2017', '2', '0', '0', '0', '0', '0', '1000000', 'Sisa pembayaran akan ditransfer setelah proyek selesai', '2017-10-22 06:10:47', NULL, 'file_c36b113.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gntrapp_penjualan_tandaterima`
--

CREATE TABLE IF NOT EXISTS `gntrapp_penjualan_tandaterima` (
  `pttr_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pttr_pbcr_id` int(11) NOT NULL,
  `pttr_pjkw_id` int(11) NOT NULL,
  `pttr_pjinv_id` int(11) NOT NULL,
  `pttr_ppmt_id` int(11) NOT NULL,
  `pttr_ppnw_id` int(11) NOT NULL,
  `pttr_no` varchar(150) NOT NULL,
  `pttr_noproyek` varchar(250) DEFAULT NULL,
  `pttr_tghndari` varchar(150) NOT NULL,
  `pttr_tagihan` varchar(150) DEFAULT NULL,
  `pttr_mtuang` varchar(150) DEFAULT NULL,
  `pttr_nilaitagihan` varchar(250) DEFAULT NULL,
  `pttr_lampiran` text,
  `pttr_tglkembali` date NOT NULL,
  `pttr_nobpkc` varchar(250) DEFAULT NULL,
  `pttr_tglbpkc` date NOT NULL,
  `pttr_menerima` varchar(250) DEFAULT NULL,
  `pttr_tglterima` date NOT NULL,
  `pttr_uploadfile` varchar(250) DEFAULT NULL,
  `pttr_entrydate` datetime DEFAULT NULL,
  `pttr_changedate` datetime DEFAULT NULL,
  PRIMARY KEY (`pttr_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `gntrapp_penjualan_tandaterima`
--

INSERT INTO `gntrapp_penjualan_tandaterima` (`pttr_id`, `pttr_pbcr_id`, `pttr_pjkw_id`, `pttr_pjinv_id`, `pttr_ppmt_id`, `pttr_ppnw_id`, `pttr_no`, `pttr_noproyek`, `pttr_tghndari`, `pttr_tagihan`, `pttr_mtuang`, `pttr_nilaitagihan`, `pttr_lampiran`, `pttr_tglkembali`, `pttr_nobpkc`, `pttr_tglbpkc`, `pttr_menerima`, `pttr_tglterima`, `pttr_uploadfile`, `pttr_entrydate`, `pttr_changedate`) VALUES
(1, 4, 2, 2, 2, 13, 'TT/16/9/2017', '0', 'Supplier', '', '0', '0', 'a:5:{i:0;s:13:"Kwitansi Asli";i:1;s:12:"Invoice Asli";i:2;s:17:"Faktur Pajak Asli";i:3;s:16:"Surat Jalan Asli";i:4;s:44:"Tanda Terima Asli + Quality Control Approval";}', '0000-00-00', '', '0000-00-00', 'Darto', '2017-09-18', 'tandaterima_6b38292.jpg', NULL, NULL),
(2, 5, 3, 3, 3, 14, 'TT/1/8/2017', '0', '0', '', '0', '0', 'a:6:{i:0;s:13:"Kwitansi Asli";i:1;s:12:"Invoice Asli";i:2;s:17:"Faktur Pajak Asli";i:3;s:16:"Surat Jalan Asli";i:4;s:44:"Tanda Terima Asli + Quality Control Approval";i:5;s:23:"Purchase Order Asli/SPK";}', '0000-00-00', '', '0000-00-00', 'Michael', '2017-08-16', 'tandaterima_df584eb.jpg', NULL, NULL),
(3, 6, 4, 4, 4, 21, 'TT/PBM-SMART/2017', '0', 'Lain Lain', 'PT. SMART TBK', '0', '0', 'a:6:{i:0;s:13:"Kwitansi Asli";i:1;s:12:"Invoice Asli";i:2;s:17:"Faktur Pajak Asli";i:3;s:16:"Surat Jalan Asli";i:4;s:44:"Tanda Terima Asli + Quality Control Approval";i:5;s:23:"Purchase Order Asli/SPK";}', '0000-00-00', '', '0000-00-00', 'Nur', '2017-10-08', 'tandaterima_f6a30e4.jpg', NULL, NULL),
(4, 7, 5, 5, 5, 23, 'TT/SMART/01/10/2017', '0', 'Lain Lain', 'PT. Smart', '0', '0', 'a:6:{i:0;s:13:"Kwitansi Asli";i:1;s:12:"Invoice Asli";i:2;s:17:"Faktur Pajak Asli";i:3;s:16:"Surat Jalan Asli";i:4;s:44:"Tanda Terima Asli + Quality Control Approval";i:5;s:23:"Purchase Order Asli/SPK";}', '0000-00-00', '', '0000-00-00', 'Andre', '2017-10-21', 'tandaterima_b060700.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gntrapp_persediaan_barang`
--

CREATE TABLE IF NOT EXISTS `gntrapp_persediaan_barang` (
  `psdbrg_id` int(11) NOT NULL AUTO_INCREMENT,
  `psdbrg_nama` varchar(100) NOT NULL,
  `psdbrg_nilaitukar` int(11) NOT NULL,
  `psdbrg_negara` varchar(100) NOT NULL,
  `psdbrg_simbol` varchar(100) NOT NULL,
  `psdbrg_void` tinyint(4) NOT NULL,
  `psdbrg_entryuser` varchar(100) NOT NULL,
  `psdbrg_entrydate` datetime NOT NULL,
  `psdbrg_changeuser` varchar(100) NOT NULL,
  `psdbrg_changedate` datetime NOT NULL,
  PRIMARY KEY (`psdbrg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `gntrapp_profile`
--

CREATE TABLE IF NOT EXISTS `gntrapp_profile` (
  `prf_id` int(11) NOT NULL AUTO_INCREMENT,
  `prf_meta` varchar(100) NOT NULL,
  `prf_value` text NOT NULL,
  `prf_entryuser` varchar(100) NOT NULL,
  `prf_entrydate` datetime NOT NULL,
  `prf_changeuser` varchar(100) NOT NULL,
  `prf_changedate` datetime NOT NULL,
  PRIMARY KEY (`prf_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `gntrapp_profile`
--

INSERT INTO `gntrapp_profile` (`prf_id`, `prf_meta`, `prf_value`, `prf_entryuser`, `prf_entrydate`, `prf_changeuser`, `prf_changedate`) VALUES
(1, '', 'a:8:{s:4:"npwp";s:20:"58.375.706.7-321.000";s:4:"nama";s:3:"PBM";s:6:"alamat";s:78:" Jl. PLTGU Muara Tawar No. 1, Segarajaya, Tarumajaya, Bekasi, Jawa Barat 17212";s:4:"kota";s:6:"Bekasi";s:7:"telepon";s:14:"(021) 88990052";s:3:"fax";s:0:"";s:5:"email";s:0:"";s:11:"jenis_usaha";s:0:"";}', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gntrapp_project`
--

CREATE TABLE IF NOT EXISTS `gntrapp_project` (
  `proj_id` int(11) NOT NULL AUTO_INCREMENT,
  `proj_clnt_id` int(11) NOT NULL,
  `proj_vndr_id` int(11) NOT NULL,
  `proj_nama` varchar(100) NOT NULL,
  `proj_nilai` int(11) NOT NULL,
  `proj_jangka_waktu` varchar(100) NOT NULL,
  `proj_cp_client` varchar(100) NOT NULL,
  `proj_telpon_client` varchar(100) NOT NULL,
  `proj_cp_vendor` varchar(100) NOT NULL,
  `proj_telpon_vendor` varchar(100) NOT NULL,
  `proj_list_barang` text NOT NULL,
  `proj_status` tinyint(4) NOT NULL,
  `proj_void` tinyint(4) NOT NULL,
  `proj_entryuser` varchar(100) NOT NULL,
  `proj_entrydate` datetime NOT NULL,
  `proj_changeuser` varchar(100) NOT NULL,
  `proj_changedate` datetime NOT NULL,
  PRIMARY KEY (`proj_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `gntrapp_project`
--

INSERT INTO `gntrapp_project` (`proj_id`, `proj_clnt_id`, `proj_vndr_id`, `proj_nama`, `proj_nilai`, `proj_jangka_waktu`, `proj_cp_client`, `proj_telpon_client`, `proj_cp_vendor`, `proj_telpon_vendor`, `proj_list_barang`, `proj_status`, `proj_void`, `proj_entryuser`, `proj_entrydate`, `proj_changeuser`, `proj_changedate`) VALUES
(1, 1, 1, 'apa aja', 42423423, '12', '', '', '', '', '1', 2, 1, '', '2017-03-09 16:43:34', '', '2017-09-06 17:09:20'),
(2, 4, 2, 'Pemasangan Listrik Koperasi HP Indonesia', 50000000, 'Oktober - Desember 2017', '', '', '', '', '2', 2, 0, '', '2017-09-06 17:10:52', '', '0000-00-00 00:00:00'),
(3, 2, 2, 'Penjualan Pasir Silica', 9000000, '2 Minggu', '', '', '', '', '9', 1, 0, '', '2017-10-08 05:39:22', '', '2017-10-08 05:39:48'),
(4, 7, 11, 'Pembuatan Rel Pagar', 200000000, '100 Hari', '', '', '', '', '12', 1, 0, '', '2017-10-22 05:38:07', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gntrapp_saham`
--

CREATE TABLE IF NOT EXISTS `gntrapp_saham` (
  `sham_id` int(11) NOT NULL AUTO_INCREMENT,
  `sham_nama` varchar(100) NOT NULL,
  `sham_alamat` text NOT NULL,
  `sham_persentase` int(11) NOT NULL,
  `sham_void` tinyint(4) NOT NULL,
  `sham_entryuser` varchar(100) NOT NULL,
  `sham_entrydate` datetime NOT NULL,
  `sham_changeuser` varchar(100) NOT NULL,
  `sham_changedate` datetime NOT NULL,
  PRIMARY KEY (`sham_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `gntrapp_saham`
--

INSERT INTO `gntrapp_saham` (`sham_id`, `sham_nama`, `sham_alamat`, `sham_persentase`, `sham_void`, `sham_entryuser`, `sham_entrydate`, `sham_changeuser`, `sham_changedate`) VALUES
(1, 'Andre Lestari', 'Jl. Marunda', 50, 1, '', '2017-10-08 08:00:34', '', '2017-10-22 06:18:48'),
(2, 'Supri', 'Jl. Marunda', 30, 1, '', '2017-10-08 08:00:54', '', '2017-10-22 06:18:46'),
(3, 'Toni', 'Jl. Raya Bekasi', 154500350, 0, '', '2017-10-22 06:19:08', '', '2017-11-04 07:33:15'),
(4, 'Budi', 'Jl. Plumpang Semper', 198655000, 0, '', '2017-10-22 06:19:34', '', '2017-10-22 06:21:15'),
(5, 'Joko', 'Jl. Raya Bogor', 540000000, 0, '', '2017-10-22 06:22:59', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gntrapp_slipgaji`
--

CREATE TABLE IF NOT EXISTS `gntrapp_slipgaji` (
  `slipgaji_id` int(11) NOT NULL AUTO_INCREMENT,
  `slipgaji_kary_id` int(11) NOT NULL,
  `slipgaji_jabatan` int(11) NOT NULL,
  `slipgaji_gajipokok` int(11) NOT NULL,
  `slipgaji_uangmakan` int(11) NOT NULL,
  `slipgaji_tunjjabtan` int(11) NOT NULL,
  `slipgaji_lembur` int(11) NOT NULL,
  `slipgaji_rapelbulanlalu` int(11) NOT NULL,
  `slipgaji_catatan` text NOT NULL,
  `slipgaji_bpjstk` int(11) NOT NULL,
  `slipgaji_potshutdown` int(11) NOT NULL,
  `slipgaji_rapelbulandepan` int(11) NOT NULL,
  `slipgaji_mangkir` int(11) NOT NULL,
  `slipgaji_potperalatan` int(11) NOT NULL,
  `slipgaji_void` tinyint(4) NOT NULL,
  `slipgaji_entryuser` varchar(100) NOT NULL,
  `slipgaji_entrydate` datetime NOT NULL,
  `slipgaji_changeuser` varchar(100) NOT NULL,
  `slipgaji_changedate` datetime NOT NULL,
  PRIMARY KEY (`slipgaji_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `gntrapp_surat_jalan`
--

CREATE TABLE IF NOT EXISTS `gntrapp_surat_jalan` (
  `sj_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sj_tanggal` date NOT NULL,
  `sj_no` varchar(250) DEFAULT NULL,
  `sj_halaman` varchar(250) DEFAULT NULL,
  `sj_matauang` varchar(250) DEFAULT NULL,
  `sj_vendor` varchar(250) NOT NULL,
  `sj_vendorproposalno` varchar(250) DEFAULT NULL,
  `sj_projectcode` varchar(250) DEFAULT NULL,
  `sj_buyer` varchar(250) DEFAULT NULL,
  `sj_jenisbarang` varchar(250) DEFAULT NULL,
  `sj_deskripsi` varchar(250) DEFAULT NULL,
  `sj_jumlah` varchar(250) DEFAULT NULL,
  `sj_satuan` varchar(250) DEFAULT NULL,
  `sj_hargasatuan` int(11) NOT NULL,
  `sj_total` int(11) NOT NULL,
  `sj_catatan` varchar(250) DEFAULT NULL,
  `sj_lampiran` varchar(250) DEFAULT NULL,
  `sj_termspembayaran` varchar(250) DEFAULT NULL,
  `sj_tglpenerimaan` date NOT NULL,
  `sj_diterimaoleh` varchar(250) DEFAULT NULL,
  `sj_namapenerima` varchar(250) DEFAULT NULL,
  `sj_tgl` date NOT NULL,
  `pp_entrydate` datetime DEFAULT NULL,
  `pp_changedate` datetime DEFAULT NULL,
  PRIMARY KEY (`sj_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `gntrapp_vendor`
--

CREATE TABLE IF NOT EXISTS `gntrapp_vendor` (
  `vndr_id` int(11) NOT NULL AUTO_INCREMENT,
  `vndr_nama` varchar(100) NOT NULL,
  `vndr_alamat` text NOT NULL,
  `vndr_contact_person` varchar(100) NOT NULL,
  `vndr_telpon` varchar(100) NOT NULL,
  `vndr_email` varchar(100) NOT NULL,
  `vndr_status` tinyint(4) NOT NULL,
  `vndr_void` tinyint(4) NOT NULL,
  `vndr_entryuser` varchar(100) NOT NULL,
  `vndr_entrydate` datetime NOT NULL,
  `vndr_changeuser` varchar(100) NOT NULL,
  `vndr_changedate` datetime NOT NULL,
  PRIMARY KEY (`vndr_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `gntrapp_vendor`
--

INSERT INTO `gntrapp_vendor` (`vndr_id`, `vndr_nama`, `vndr_alamat`, `vndr_contact_person`, `vndr_telpon`, `vndr_email`, `vndr_status`, `vndr_void`, `vndr_entryuser`, `vndr_entrydate`, `vndr_changeuser`, `vndr_changedate`) VALUES
(1, 'jlbljbl', 'lblblk', 'lkblkblk', 'lkblblk', 'lbljb@vkvk.xjk', 1, 1, '', '2017-02-27 02:35:07', '', '2017-09-06 16:57:46'),
(2, 'PT. Astrindo', 'Jl. Tanah Abang, Jakarta Pusat', 'Frans', '081923452345', 'frans@astrindo.co.id', 1, 0, '', '2017-09-06 16:56:43', '', '0000-00-00 00:00:00'),
(3, 'PT. Berca Hadyaperkasa', 'Jl. Prof. Dr. Satrio, Jakarta Selatan', 'Yulianto', '0817678291', 'yulianto@berca.co.id', 1, 0, '', '2017-09-06 16:57:40', '', '0000-00-00 00:00:00'),
(4, 'PT. Astra Honda Motor', 'Jl. Danau Sunter, Jakarta Utara', 'Rommi', '081232324141', 'rommi@ahm.co.id', 1, 0, '', '2017-09-06 16:59:12', '', '0000-00-00 00:00:00'),
(5, 'PT. Betonjaya Manunggal Tbk', 'Gresik, Jawa Timur', 'Suparjo', '081121214335', 'suparjo@betonjaya.com', 1, 0, '', '2017-09-16 09:22:31', '', '0000-00-00 00:00:00'),
(6, 'PT Adhi Karya (Persero) Tbk', 'Cawang, Jakarta Timur', 'Danny', '081760609090', 'danny@adhikarya.com', 1, 0, '', '2017-09-16 09:23:58', '', '0000-00-00 00:00:00'),
(7, 'PT Brantas Abipraya (Persero)', 'Cawang, Jakarta Timur', 'Heru', '081321219090', 'heru@brantas-abipraya.com', 1, 0, '', '2017-09-16 09:24:45', '', '0000-00-00 00:00:00'),
(8, 'PT. Muara Baja', 'Jl. Raya Bekasi', 'Heru', '081790901818', 'heru@muara-baja.com', 1, 0, '', '2017-10-08 06:41:26', '', '0000-00-00 00:00:00'),
(9, 'PT. Jaya Mix', 'Jl. Raya Bogor', 'Reno', '0817999102', 'reno@jayamix.com', 1, 0, '', '2017-10-08 06:44:42', '', '0000-00-00 00:00:00'),
(10, 'PT. Karunia Hosana', 'Jl. Pangkalan V, Narogong Km.12 Bekasi', 'Mardiyanto', '825 1983', 'mardiyanto@karunia-hosana.com', 1, 0, '', '2017-10-08 07:11:33', '', '0000-00-00 00:00:00'),
(11, 'Maman Cs', 'Jl. raya bekasi', 'Maman', '08101001807', '', 1, 0, '', '2017-10-22 05:36:32', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `insentif_hariraya`
--

CREATE TABLE IF NOT EXISTS `insentif_hariraya` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `grup` varchar(100) DEFAULT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `insen1` varchar(100) DEFAULT NULL,
  `insen2` varchar(100) DEFAULT NULL,
  `insen3` varchar(100) DEFAULT NULL,
  `insen4` varchar(100) DEFAULT NULL,
  `insen5` varchar(100) DEFAULT NULL,
  `totalhari` varchar(100) DEFAULT NULL,
  `perhari` varchar(100) DEFAULT NULL,
  `jumlah` varchar(100) DEFAULT NULL,
  `ket` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `insentif_hariraya`
--

INSERT INTO `insentif_hariraya` (`id`, `grup`, `fname`, `insen1`, `insen2`, `insen3`, `insen4`, `insen5`, `totalhari`, `perhari`, `jumlah`, `ket`) VALUES
(1, 'Group1', 'Guntur', '200000', '200000', '200000', '200000', '200001', '5', '100000', '209392191919', 'lembur'),
(2, NULL, 'Andri', '13.00-19.00', '13.00-19.00', '13.00-19.00', '13.00-19.00', '13.00-19.00', '5', '100000', NULL, ''),
(3, NULL, 'Toni', '13.00-19.00', '13.00-19.00', '13.00-19.00', NULL, NULL, '1', '100000', NULL, NULL),
(4, NULL, 'n4y n4', ' yn ynyn ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'v4v4v', 'v3rv4rv4v', 'v4rv4', '4v4', 'v4tv', 'v4tv4t', NULL, NULL, '553', '', 'efvqrv'),
(6, NULL, 'rg3g', 'g3g35', 'g35g35g', '3g53g5g35g', NULL, NULL, NULL, '24524', NULL, NULL),
(7, NULL, 'Deny', '13.00-19.00', '13.00-19.00', '13.00-19.00', '13.00-19.00', '13.00-19.00', NULL, '100000', NULL, NULL),
(8, NULL, 'Bagus', '13.00-19.00', '13.00-19.00', '13.00-19.00`', '13.00-19.00', '13.00-19.00', NULL, '100000', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slip_gaji`
--

CREATE TABLE IF NOT EXISTS `slip_gaji` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `bulan` varchar(100) NOT NULL,
  `gapok` varchar(100) NOT NULL,
  `uangmakan` varchar(100) NOT NULL,
  `tunjab` varchar(100) NOT NULL,
  `lembur` varchar(100) NOT NULL,
  `bpjstk` varchar(100) NOT NULL,
  `shutdown` varchar(100) NOT NULL,
  `rafel` varchar(100) NOT NULL,
  `mangkir` varchar(100) NOT NULL,
  `seragam` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
