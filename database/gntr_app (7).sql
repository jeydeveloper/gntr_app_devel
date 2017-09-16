-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2017 at 10:01 AM
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
CREATE DATABASE IF NOT EXISTS `gntr_app` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `gntr_app`;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `absen_gajian`
--

INSERT INTO `absen_gajian` (`id`, `grup`, `fname`, `hari1`, `hari2`, `hari3`, `hari4`, `hari5`, `hari6`, `hari7`, `hari8`, `hari9`, `hari10`, `hari11`, `hari12`, `hari13`, `hari14`, `hari15`, `hari16`, `hari17`, `hari18`, `hari19`, `hari20`, `hari21`, `hari22`, `hari23`, `hari24`, `hari25`, `hari26`, `hari27`, `hari28`, `hari29`, `hari30`, `hari31`) VALUES
(1, 'Group1', 'Salman', 'OFF', 'M', 'M', 'M', 'M', 'M', 'M', 'm', 'm', 'm', 'm', 'm', 'T', 'T', 'T', 'T', 'T', 'T', 'S', 'S', 'S', 'P', 'P', 'P', 'P', 'P', 'm', 'm', 'm', 'm', 'OFF'),
(2, '', 'Salman', 'OFF', 'M', 'M', 'M', 'M', 'M', 'M', 'm', 'm', 'm', 'm', 'm', 'T', 'T', 'T', 'T', 'T', 'T', 'S', 'S', 'S', 'P', 'P', 'P', 'P', 'P', 'm', 'm', 'm', 'm', 'OFF'),
(3, '', 'Salman', 'OFF', 'M', 'M', 'M', 'M', 'M', 'M', 'm', 'm', 'm', 'm', 'm', 'T', 'T', 'T', 'T', 'T', 'T', 'S', 'S', 'S', 'P', 'P', 'P', 'P', 'P', 'm', 'm', 'm', 'm', 'OFF'),
(4, '', 'Salman', 'OFF', 'M', 'M', 'M', 'M', 'M', 'M', 'm', 'm', 'm', 'm', 'm', 'T', 'T', 'T', 'T', 'T', 'T', 'S', 'S', 'S', 'P', 'P', 'P', 'P', 'P', 'm', 'm', 'm', 'm', 'OFF'),
(5, 'Group2', 'Salman', 'OFF', 'M', 'M', 'M', 'M', 'M', 'M', 'm', 'm', 'm', 'm', 'm', 'T', 'T', 'T', 'T', 'T', 'T', 'S', 'S', 'S', 'P', 'P', 'P', 'P', 'P', 'm', 'm', 'm', 'm', 'OFF'),
(6, '', 'Salman', 'OFF', 'M', 'M', 'M', 'M', 'M', 'M', 'm', 'm', 'm', 'm', 'm', 'T', 'T', 'T', 'T', 'T', 'T', 'S', 'S', 'S', 'P', 'P', 'P', 'P', 'P', 'm', 'm', 'm', 'm', 'OFF'),
(7, '', 'Salman', 'OFF', 'M', 'M', 'M', 'M', 'M', 'M', 'm', 'm', 'm', 'm', 'm', 'T', 'T', 'T', 'T', 'T', 'T', 'S', 'S', 'S', 'P', 'P', 'P', 'P', 'P', 'm', 'm', 'm', 'm', 'OFF'),
(8, '', 'Salman', 'OFF', 'M', 'M', 'M', 'M', 'M', 'M', 'm', 'm', 'm', 'm', 'm', 'T', 'T', 'T', 'T', 'T', 'T', 'S', 'S', 'S', 'P', 'P', 'P', 'P', 'P', 'm', 'm', 'm', 'm', 'OFF');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `absen_tagihan`
--

INSERT INTO `absen_tagihan` (`id`, `grup`, `fname`, `hari1`, `hari2`, `hari3`, `hari4`, `hari5`, `hari6`, `hari7`, `hari8`, `hari9`, `hari10`, `hari11`, `hari12`, `hari13`, `hari14`, `hari15`, `hari16`, `hari17`, `hari18`, `hari19`, `hari20`, `hari21`, `hari22`, `hari23`, `hari24`, `hari25`, `hari26`, `hari27`, `hari28`, `hari29`, `hari30`, `hari31`) VALUES
(1, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'm', '', '', '', '', '', '', '', ''),
(3, NULL, '', '', '', '', '', '', '', '', '', '', '', '', 's', '', '', '', '', '', '', '', '', '', '', 'OFF', '', '', '', '', '', '', '', 'OFF');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `absen_tagihanot`
--

INSERT INTO `absen_tagihanot` (`id`, `grup`, `fname`, `jamkerja`, `jamlembur`, `realisasi`, `perhitunganovertime`, `nominalperjam`, `total`, `keterangan`) VALUES
(1, 'Group1', 'salman', '12', '12', '12', '12', '12', '12', 'Lembur'),
(2, '', 'salman', '1212', '12', '12', '12', '12', '12', '12'),
(3, '', 'udin', '15', '12', '12', '12', '12', '12', '12'),
(4, 'Group2', 'Yandri', '15', '20', '25', '25', '5', '10', '15'),
(5, NULL, 'fajar', '10', '10', '10', '10', '10', '10', 'kejar target'),
(6, NULL, 'fajar', '10', '10', '10', '10', '10', '10', 'kejar target'),
(7, NULL, 'fajar', '10', '10', '10', '10', '10', '10', 'kejar target');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `gntrapp_adminuserlevels`
--

INSERT INTO `gntrapp_adminuserlevels` (`aulv_id`, `aulv_name`, `aulv_role_access`, `aulv_void`, `aulv_entryuser`, `aulv_entrydate`, `aulv_changeuser`, `aulv_changedate`) VALUES
(1, 'Direksi', 'a:17:{s:8:"pengguna";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:11:"wajib-pajak";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:10:"user-level";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:10:"departemen";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:19:"daftar-aktiva-tetap";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:19:"kas-bank-penerimaan";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:19:"kas-bank-pembayaran";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:15:"grafik-bank-bca";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:11:"daftar-akun";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:9:"mata-uang";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:16:"proyek-dashboard";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:8:"karyawan";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:7:"laporan";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:3:"bpu";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:9:"lain-lain";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:9:"penjualan";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:9:"pembelian";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}}', 0, '', '2017-09-06 17:12:39', '', NULL),
(2, 'Manager', 'a:14:{s:8:"pengguna";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:11:"wajib-pajak";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:10:"user-level";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:10:"departemen";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:19:"daftar-aktiva-tetap";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:19:"kas-bank-penerimaan";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:19:"kas-bank-pembayaran";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:11:"daftar-akun";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:8:"karyawan";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:7:"laporan";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:3:"bpu";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:9:"lain-lain";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:9:"penjualan";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:9:"pembelian";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}}', 0, '', '2017-09-06 17:13:40', '', NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `gntrapp_adminusers`
--

INSERT INTO `gntrapp_adminusers` (`admusr_id`, `admusr_username`, `admusr_userpasswd`, `admusr_aulv_id`, `admusr_user_status`, `admusr_void`, `admusr_lastactivity`, `admusr_entryuser`, `admusr_entrydate`, `admusr_changeuser`, `admusr_changedate`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 'y', 0, '2017-09-16 09:08:44', '', '0000-00-00 00:00:00', '', NULL),
(2, 'Guntur', '30d8692c0d2ac50d082f20cfc4648206', 1, 'y', 0, '2017-09-06 17:14:15', '', '2017-09-06 17:14:07', '', NULL);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `gntrapp_akun`
--

INSERT INTO `gntrapp_akun` (`akun_id`, `akun_nomor`, `akun_nama`, `akun_tipe_id`, `akun_saldo`, `akun_parent`, `akun_void`, `akun_entryuser`, `akun_entrydate`, `akun_changeuser`, `akun_changedate`) VALUES
(1, '40,00,00', 'Gaji Staff', 2, 0, 0, 0, '', '2017-07-02 03:51:40', '', '0000-00-00 00:00:00'),
(2, '40,00,01', 'Gaji Karyawan Staff', 2, 0, 1, 0, '', '2017-07-02 03:52:06', '', '0000-00-00 00:00:00'),
(3, '40,00,02', 'Uang Makan Karyawan', 2, 0, 1, 0, '', '2017-07-02 03:52:42', '', '0000-00-00 00:00:00'),
(4, '40,00,03', 'Uang Insentif Karyawan', 2, 0, 0, 0, '', '2017-07-02 03:53:05', '', '0000-00-00 00:00:00'),
(5, '40,00,03', 'Uang Insentif Karyawan', 2, 0, 1, 0, '', '2017-07-02 03:53:34', '', '0000-00-00 00:00:00'),
(6, '40,00,04', 'THR Karyawan', 2, 0, 1, 0, '', '2017-07-02 03:53:57', '', '0000-00-00 00:00:00'),
(7, '30,00,00', 'Penjualan Sparepart', 2, 0, 0, 0, '', '2017-07-31 17:15:45', '', '0000-00-00 00:00:00'),
(8, '30,00,01', 'Penjualan Busi', 2, 0, 7, 0, '', '2017-07-31 17:16:26', '', '0000-00-00 00:00:00'),
(9, '50,00,00', 'Biaya ATK', 2, 0, 0, 0, '', '2017-07-31 17:18:48', '', '0000-00-00 00:00:00'),
(10, '50,00,01', 'Pembelian Kertas HVS 1 RIM', 3, 0, 9, 0, '', '2017-07-31 17:20:56', '', '0000-00-00 00:00:00'),
(11, '60,00,00', 'Penjualan Alat Konstruksi', 3, 0, 0, 0, '', '2017-09-16 09:30:16', '', '0000-00-00 00:00:00'),
(12, '60,00,01', 'Pintu Sorong Baja Type 2.a Uk. (b=0,6-0,8) Dan (h=0,3- 1) M', 3, 0, 11, 0, '', '2017-09-16 09:30:49', '', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `gntrapp_barang_jasa`
--

INSERT INTO `gntrapp_barang_jasa` (`brjs_id`, `brjs_kategori_id`, `brjs_jenis_id`, `brjs_nama`, `brjs_volume`, `brjs_satuan_id`, `brjs_harga_satuan`, `brjs_over_project`, `brjs_vndr_id`, `brjs_void`, `brjs_entryuser`, `brjs_entrydate`, `brjs_changeuser`, `brjs_changedate`) VALUES
(1, 1, 0, 'lkjbljbl', 'ljblojbLJB', 0, 8698698, 1, 1, 1, '', '2017-02-27 02:35:37', '', '2017-09-06 17:07:04'),
(2, 2, 0, 'Biaya Penyambungan Listrik ( Bp ) 1.300 Watt', 'Unit', 0, 1600000, 1, 2, 0, '', '2017-09-06 17:07:41', '', '2017-09-06 17:07:49'),
(3, 1, 0, 'Beton Ready Mix K-225', 'm3', 0, 989000, 1, 3, 0, '', '2017-09-06 17:08:31', '', '0000-00-00 00:00:00'),
(4, 1, 0, 'Box Panel 10&quot;20', 'Bh', 0, 1338000, 0, 4, 0, '', '2017-09-06 17:09:10', '', '0000-00-00 00:00:00'),
(5, 1, 0, 'Abu Batu', 'm3', 0, 256850, 1, 2, 0, '', '2017-09-16 09:21:16', '', '0000-00-00 00:00:00'),
(6, 1, 0, 'Armatur Pju Komponen Philip (hrc 511-bhl 250)', 'Set', 0, 1034000, 0, 5, 0, '', '2017-09-16 09:27:10', '', '0000-00-00 00:00:00'),
(7, 1, 0, 'Balz Mercury (bhl) 1000 Watt', 'Bh', 0, 2400000, 0, 3, 0, '', '2017-09-16 09:27:55', '', '0000-00-00 00:00:00'),
(8, 1, 0, 'Pintu Sorong Baja Type 2.a Uk. (b=0,6-0,8) Dan (h=0,3- 1) M', 'Unit', 0, 8470000, 0, 5, 0, '', '2017-09-16 09:28:43', '', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `gntrapp_bpu`
--

INSERT INTO `gntrapp_bpu` (`bpu_id`, `bpu_request_by`, `bpu_nama`, `bpu_harga`, `bpu_terbilang`, `bpu_approved_by`, `bpu_proj_id`, `bpu_void`, `bpu_entryuser`, `bpu_entrydate`, `bpu_changeuser`, `bpu_changedate`) VALUES
(1, 'admin', 'Saham Juli 2017', 500000000, '', 'Andre Lestari', 0, 0, '', '2017-07-02 03:55:55', '', '0000-00-00 00:00:00'),
(2, 'admin', 'Saham Juli 2017', 500000000, '', 'Andre Lestari', 0, 0, '', '2017-07-02 03:56:12', '', '2017-07-02 03:56:30');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `gntrapp_bukti_pembayaran`
--

INSERT INTO `gntrapp_bukti_pembayaran` (`bp_id`, `bp_pbttr_id`, `bp_pbinv_id`, `bp_pbsrtjalan_id`, `bp_pbkw_id`, `bp_pbptn_id`, `bp_no`, `bp_tgltransaksi`, `bp_norekening`, `bp_namarekening`, `bp_noinvoice`, `bp_tagihan`, `bp_terbilang`, `bp_jamtransaksi`, `bp_jenistransaksi`, `bp_entrydate`, `bp_changedate`) VALUES
(1, 1, 1, 1, 1, 1, 'BUKTIPEMBAYARAN/15/SEPT/2017', '2017-09-25', '0', '0', '0', '0', '0', '10.56', 'Transfer', NULL, NULL),
(2, 2, 2, 2, 2, 2, 'BUKTIPEMBAYARAN/1/8/2017', '2017-08-22', '0', '0', '0', '0', '0', '10.22', 'Transfer', NULL, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `gntrapp_client`
--

INSERT INTO `gntrapp_client` (`clnt_id`, `clnt_nama`, `clnt_alamat`, `clnt_contact_person`, `clnt_telpon`, `clnt_email`, `clnt_status`, `clnt_void`, `clnt_entryuser`, `clnt_entrydate`, `clnt_changeuser`, `clnt_changedate`) VALUES
(1, 'jhgugbou', 'ljbolj', 'lblbl', 'lblbl', 'lblblj@mbkjbk.co', 1, 1, '', '2017-02-27 02:34:40', '', '2017-09-06 16:59:37'),
(2, 'PT. Marunda Centre', 'Jl. Marunda Raya', 'Gunawan', '081651514242', 'gunawan@marunda-centre.com', 1, 0, '', '2017-09-06 17:00:22', '', '0000-00-00 00:00:00'),
(3, 'PT. JGC Indonesia', 'Jl. TB. Simatupang, Jakarta Selatan', 'Bambang', '081190908181', 'bambang@jgc-indonesia.co.id', 1, 0, '', '2017-09-06 17:01:26', '', '0000-00-00 00:00:00'),
(4, 'PT. HP Indonesia', 'Jl. Tebet Raya, Jakarta Selatan', 'Syaiful', '081510090092', 'syaiful@hp-indonesia.co.id', 1, 0, '', '2017-09-06 17:02:19', '', '0000-00-00 00:00:00'),
(5, 'PT. Aneka Tambang Tbk', 'Jl. TB Simatupang, Jakarta Selatan', 'Wawan', '081120209090', 'wawan@antam.com', 1, 0, '', '2017-09-16 09:25:42', '', '0000-00-00 00:00:00'),
(6, 'PT. Pertamina', 'Jl. Plumpang Semper, Jakarta Utara', 'Rendra', '081651514141', 'rendra@pertamina.co.id', 1, 0, '', '2017-09-16 09:26:20', '', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `kary_posisi_id` int(11) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `gntrapp_karyawan_gaji`
--

CREATE TABLE IF NOT EXISTS `gntrapp_karyawan_gaji` (
  `kygj_id` int(11) NOT NULL AUTO_INCREMENT,
  `kygj_kary_id` int(11) NOT NULL,
  `kygj_gaji_pokok` int(11) NOT NULL,
  `kygj_tunjangan` int(11) NOT NULL,
  `kygj_lembur` int(11) NOT NULL,
  `kygj_uang_makan` int(11) NOT NULL,
  `kygj_transport` int(11) NOT NULL,
  `kygj_bonus` int(11) NOT NULL,
  `kygj_pinjaman` int(11) NOT NULL,
  `kygj_lain_lain` int(11) NOT NULL,
  `kygj_total` int(11) NOT NULL,
  `kygj_void` tinyint(4) NOT NULL,
  `kygj_entryuser` varchar(100) NOT NULL,
  `kygj_entrydate` datetime NOT NULL,
  `kygj_changeuser` varchar(100) NOT NULL,
  `kygj_changedate` datetime NOT NULL,
  PRIMARY KEY (`kygj_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `gntrapp_matauang`
--

INSERT INTO `gntrapp_matauang` (`mtua_id`, `mtua_nama`, `mtua_nilaitukar`, `mtua_negara`, `mtua_simbol`, `mtua_void`, `mtua_entryuser`, `mtua_entrydate`, `mtua_changeuser`, `mtua_changedate`) VALUES
(1, 'Rupiah', 1, 'Indonesia', 'Rp', 0, '', '2017-09-16 09:12:59', '', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `gntrapp_pembelian_invoice`
--

INSERT INTO `gntrapp_pembelian_invoice` (`pbinv_id`, `pbinv_pbsrtjalan_id`, `pbinv_pbkw_id`, `pbinv_pbptn_id`, `pbinv_tanggal`, `pbinv_noinvoice`, `pbinv_wo`, `pbinv_wotgl`, `pbinv_nopenawaran`, `pbinv_to`, `pbinv_alamat`, `pbinv_description`, `pbinv_totaltagihan`, `pbinv_terbilang`, `uploadfile`, `pbinv_entrydate`, `pbinv_changedate`) VALUES
(1, 1, 1, 1, '2017-09-21', 'INV/15/SEPT/2017', '0', '0000-00-00', '0', '0', '0', 'Pelunasan Pembayaran', '0', '0', 'invoicepembelian_fd4c2dc.jpg', NULL, NULL),
(2, 2, 2, 2, '2017-08-09', 'INV/1/8/2017', '0', '0000-00-00', '0', '0', '0', '', '0', '0', 'invoicepembelian_8b9322a.jpg', NULL, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `gntrapp_pembelian_kwitansi`
--

INSERT INTO `gntrapp_pembelian_kwitansi` (`pbkw_id`, `pbkw_pbptn_id`, `pbkw_no`, `pbkw_dari`, `pbkw_total`, `pbkw_bank`, `pbkw_norek`, `pbkw_an`, `pbkw_alamat`, `pbkw_notlpn`, `pbkw_tipe_pembayaran`, `pbkw_transfer_from_bank`, `pbkw_entrydate`, `pbkw_changedate`, `uploadfile`) VALUES
(1, 1, 'KWITANSI/15/SEPT/2017', '0', '0', 'Bank BCA', '97597597', 'PT. Astra Honda Motor', '0', '0', 2, 1, NULL, NULL, 'kwitansi_pembelian_290f3bc.jpg'),
(2, 2, 'KWITANSI/1/AGUSTUS/2017', '0', '0', 'Bank BNI', '769869869', 'PT. Berca', '0', '0', 2, 3, NULL, NULL, 'kwitansi_pembelian_bc3744c.jpg');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `gntrapp_pembelian_permintaan`
--

INSERT INTO `gntrapp_pembelian_permintaan` (`pbptn_id`, `pbptn_clnt_id`, `pbptn_vndr_id`, `pbptn_mtua_id`, `pbptn_tanggal`, `pbptn_no`, `pbptn_halaman`, `pbptn_matauang`, `pbptn_vendor`, `pbptn_proposalno`, `pbptn_projectcode`, `pbptn_buyer`, `pbptn_catatan`, `pbptn_terms`, `pbptn_tanggalditerima`, `pbptn_diterimaoleh`, `pbptn_namapenerima`, `pbptn_tanggalterima`, `pbptn_totaltagihan`, `pbptn_terbilang`, `pbptn_entrydate`, `pbptn_changedate`) VALUES
(1, 3, 4, 1, '2017-09-15', 'PERMINTAAN/15/SEPT/2017', '0', '0', '0', '', '', '0', '3 x Pembayaran', '', '0000-00-00', '0', 'Rudi', '0000-00-00', '0', '0', NULL, NULL),
(2, 2, 5, 1, '2017-08-01', 'PERMINTAAN/1/AGUSTUS/2017', '0', '0', '0', '', '', '0', 'Tunai', '', '0000-00-00', '0', 'Hendro', '0000-00-00', '0', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gntrapp_pembelian_permintaan_detail`
--

CREATE TABLE IF NOT EXISTS `gntrapp_pembelian_permintaan_detail` (
  `pbptnd_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pbptnd_nopermintaan` varchar(150) NOT NULL,
  `pbptnd_jenisbarang` varchar(150) DEFAULT NULL,
  `pbptnd_jumlah` varchar(150) DEFAULT NULL,
  `pbptnd_entrydate` datetime DEFAULT NULL,
  `pbptnd_changedate` datetime DEFAULT NULL,
  `pbptnd_brjs_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`pbptnd_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `gntrapp_pembelian_permintaan_detail`
--

INSERT INTO `gntrapp_pembelian_permintaan_detail` (`pbptnd_id`, `pbptnd_nopermintaan`, `pbptnd_jenisbarang`, `pbptnd_jumlah`, `pbptnd_entrydate`, `pbptnd_changedate`, `pbptnd_brjs_id`) VALUES
(1, 'PERMINTAAN/15/SEPT/2017', '4', '1000', NULL, NULL, NULL),
(2, 'PERMINTAAN/15/SEPT/2017', '', '', NULL, NULL, NULL),
(3, 'PERMINTAAN/1/AGUSTUS/2017', '7', '10', NULL, NULL, NULL),
(4, 'PERMINTAAN/1/AGUSTUS/2017', '2', '50', NULL, NULL, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `gntrapp_pembelian_suratjalan`
--

INSERT INTO `gntrapp_pembelian_suratjalan` (`pbsrtjalan_id`, `pbsrtjalan_pbkw_id`, `pbsrtjalan_pbptn_id`, `pbsrtjalan_tanggal`, `pbsrtjalan_no`, `pbsrtjalan_halaman`, `pbsrtjalan_matauang`, `pbsrtjalan_vendor`, `pbsrtjalan_proposalno`, `pbsrtjalan_projectcode`, `pbsrtjalan_buyer`, `pbsrtjalan_catatan`, `pbsrtjalan_terms`, `pbsrtjalan_tanggalditerima`, `pbsrtjalan_diterimaoleh`, `pbsrtjalan_namapenerima`, `pbsrtjalan_tanggalterima`, `pbsrtjalan_totaltagihan`, `pbsrtjalan_nokendaraan`, `pbsrtjalan_terbilang`, `uploadfile`, `pbsrtjalan_entrydate`, `pbsrtjalan_changedate`) VALUES
(1, 1, 1, '2017-09-19', 'SPJ/15/SEPT/2017', '0', '1', '0', '0', '0', '0', '0', '0', '2017-09-16', '0', 'Joni', '0000-00-00', '0', 'B 8685 KSH', '0', 'suratjalan_2993a45.jpg', NULL, NULL),
(2, 2, 2, '2017-08-08', 'SPJ/1/8/2017', '0', '1', '0', '0', '0', '0', '0', '0', '2017-09-08', '0', 'Nur', '0000-00-00', '0', 'B 8798 GUH', '0', 'suratjalan_bf56a1b.jpg', NULL, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `gntrapp_pembelian_tandaterima`
--

INSERT INTO `gntrapp_pembelian_tandaterima` (`pbttr_id`, `pbttr_pbinv_id`, `pbttr_pbsrtjalan_id`, `pbttr_pbkw_id`, `pbttr_pbptn_id`, `pbttr_no`, `pbttr_noproyek`, `pbttr_tghndari`, `pbttr_tagihan`, `pbttr_mtuang`, `pbttr_nilaitagihan`, `pbttr_lampiran`, `pbttr_tglkembali`, `pbttr_nobpkc`, `pbttr_tglbpkc`, `pbttr_menerima`, `pbttr_tglterima`, `pbttr_uploadfile`, `pbttr_entrydate`, `pbttr_changedate`) VALUES
(1, 1, 1, 1, 1, 'TT/15/SEPT/2017', '0', 'Supplier', 'PT. Astra Honda Motor', '0', '0', 'a:6:{i:0;s:13:"Kwitansi Asli";i:1;s:12:"Invoice Asli";i:2;s:17:"Faktur Pajak Asli";i:3;s:16:"Surat Jalan Asli";i:4;s:44:"Tanda Terima Asli + Quality Control Approval";i:5;s:23:"Purchase Order Asli/SPK";}', '0000-00-00', '', '0000-00-00', 'Endang', '2017-09-16', NULL, NULL, NULL),
(2, 2, 2, 2, 2, 'TT/1/8/2017', '0', 'Supplier', 'PT. Berca', '0', '0', 'a:6:{i:0;s:13:"Kwitansi Asli";i:1;s:12:"Invoice Asli";i:2;s:17:"Faktur Pajak Asli";i:3;s:16:"Surat Jalan Asli";i:4;s:44:"Tanda Terima Asli + Quality Control Approval";i:5;s:23:"Purchase Order Asli/SPK";}', '0000-00-00', '', '0000-00-00', 'Anto', '2017-08-10', NULL, NULL, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `gntrapp_penerimaan`
--

INSERT INTO `gntrapp_penerimaan` (`pnrm_id`, `pnrm_bank_id`, `pnrm_tanggal`, `pnrm_akun_id`, `pnrm_nama`, `pnrm_jumlah`, `pnrm_keterangan`, `pnrm_void`, `pnrm_entryuser`, `pnrm_entrydate`, `pnrm_changeuser`, `pnrm_changedate`) VALUES
(1, 1, '2017-09-06', 0, 'PT. Pertamina', 14000000, 'Pelunasan', 0, '', '2017-09-06 16:53:21', '', '0000-00-00 00:00:00'),
(2, 1, '2017-09-04', 0, 'PT. Andalan Furnindo', 16000000, 'Pembayaran Proyek Termin I', 0, '', '2017-09-06 16:54:13', '', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `gntrapp_pengeluaran`
--

INSERT INTO `gntrapp_pengeluaran` (`pgln_id`, `pgln_bank_id`, `pgln_tanggal`, `pgln_akun_id`, `pgln_nama`, `pgln_jumlah`, `pgln_keterangan`, `pgln_void`, `pgln_entryuser`, `pgln_entrydate`, `pgln_changeuser`, `pgln_changedate`) VALUES
(1, 1, '2017-07-10', 0, 'THR Karyawan', 10000000, '', 0, '', '2017-07-02 05:24:41', '', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `gntrapp_penjualan_beritaacara`
--

INSERT INTO `gntrapp_penjualan_beritaacara` (`pbcr_id`, `pbcr_pjkw_id`, `pbcr_pjinv_id`, `pbcr_ppmt_id`, `pbcr_ppnw_id`, `pbcr_no`, `pbcr_noproyek`, `pbcr_deskripsi`, `pbcr_tglperjanjian`, `pbcr_tghndari`, `pbcr_tagihan`, `pbcr_mtuang`, `pbcr_nilaitagihan`, `pbcr_lampiran`, `pbcr_tglkembali`, `pbcr_nobpkc`, `pbcr_tglbpkc`, `pbcr_menerima`, `pbcr_tglterima`, `pbcr_uploadfile`, `pbcr_entrydate`, `pbcr_changedate`) VALUES
(1, 12, 11, 13, 14, '123', '12345', 'jfdkjfak', '2017-03-29', 'Supplier', 'darimana aja lah terserah lu', '0', '4343435', 'Kwitansi Asli', '0000-00-00', '', '0000-00-00', '', '0000-00-00', NULL, NULL, NULL),
(2, 1, 1, 1, 13, 'abcde', '123456', 'proyek apaan ini', '2017-03-22', 'Subcontractor', 'pt.angin ribut', '0', '0', 'Kwitansi Asli', '0000-00-00', '', '0000-00-00', '', '0000-00-00', NULL, NULL, NULL),
(3, 1, 1, 1, 13, '54321', '4354667', 'proyek apa aja lah', '2017-03-25', 'Subcontractor', 'darimana aja lah terserah lu', '0', '0', 'Kwitansi Asli', '0000-00-00', '', '0000-00-00', '', '0000-00-00', NULL, NULL, NULL),
(4, 2, 2, 2, 13, 'BERITAACARA/9/16/2017', '', '', '0000-00-00', '0', '', '0', '0', 'Tanda Terima Asli + Quality Control Approval', '0000-00-00', '', '0000-00-00', 'Saputra', '2017-09-15', NULL, NULL, NULL),
(5, 3, 3, 3, 14, 'BERITAACARA/1/8/2017', '', '', '0000-00-00', '0', '', '0', '0', 'Tanda Terima Asli + Quality Control Approval', '0000-00-00', '', '0000-00-00', 'Zainal', '2017-08-15', NULL, NULL, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `gntrapp_penjualan_bukti_pembayaran`
--

INSERT INTO `gntrapp_penjualan_bukti_pembayaran` (`pbktp_id`, `pbktp_pttr_id`, `pbktp_pbcr_id`, `pbktp_pjkw_id`, `pbktp_pjinv_id`, `pbktp_ppmt_id`, `pbktp_ppnw_id`, `pbktp_tgltransaksi`, `pbktp_notransaksi`, `pbktp_norekening`, `pbktp_namakonsultan`, `pbktp_noinvoice`, `pbktp_totaltagihan`, `pbktp_terbilang`, `pbktp_jenistransaksi`, `pbktp_jamtransaksi`, `pbktp_channel`, `pbktp_userid`, `pbktp_uploadfile`, `pbktp_entrydate`, `pbktp_changedate`) VALUES
(1, 1, 4, 2, 2, 2, 13, '2017-09-19', 'BUKTIPEMBAYARAN/16/SEPT/2017', '2', '', '0', '0', '0', 'Tunai', '0000-00-00', NULL, '0000-00-00', 'buktipembayaran_6578ea8.jpg', NULL, NULL),
(2, 2, 5, 3, 3, 3, 14, '2017-08-22', 'BUKTIPEMBAYARAN/1/8/2017', '2', '', '0', '0', '0', 'Tunai', '0000-00-00', NULL, '0000-00-00', 'buktipembayaran_8dcf242.jpg', NULL, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `gntrapp_penjualan_invoice`
--

INSERT INTO `gntrapp_penjualan_invoice` (`pjinv_id`, `pjinv_ppmt_id`, `pjinv_ppnw_id`, `pjinv_tanggal`, `pjinv_noinvoice`, `pjinv_wo`, `pjinv_wotgl`, `pjinv_nopenawaran`, `pjinv_to`, `pjinv_alamat`, `pjinv_description`, `pjinv_totaltagihan`, `pjinv_terbilang`, `pjinv_entrydate`, `pjinv_changedate`) VALUES
(1, 1, 13, '2017-03-31', '1234567', '0', '0000-00-00', '0', '0', '0', '', '0', '0', NULL, NULL),
(2, 2, 13, '2017-09-12', 'INV/16/SEPT/2017', '0', '0000-00-00', '0', '0', '0', 'Pelunasan Pembayaran', '0', '0', NULL, NULL),
(3, 3, 14, '2017-08-07', 'INV/1/8/2017', '0', '0000-00-00', '0', '0', '0', 'Tagihan Pelunasan', '0', '0', NULL, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `gntrapp_penjualan_kwitansi`
--

INSERT INTO `gntrapp_penjualan_kwitansi` (`pjkw_id`, `pjkw_pjinv_id`, `pjkw_ppmt_id`, `pjkw_ppnw_id`, `pjkw_no`, `pjkw_dari`, `pjkw_total`, `pjkw_bank`, `pjkw_keterangan_print_out`, `pjkw_norek`, `pjkw_an`, `pjkw_alamat`, `pjkw_notlpn`, `pjkw_entrydate`, `pjkw_changedate`, `uploadfile`) VALUES
(1, 1, 1, 13, 'aqw1q212', '0', '0', '2', '', '0', '0', '0', '0', NULL, NULL, NULL),
(2, 2, 2, 13, 'Kwitansi', '0', '0', '1', '<p>Vivamus sit amet feugiat leo. Maecenas sem neque, fermentum sed dolor sed, placerat scelerisque risus. Mauris id euismod sapien. Aenean porttitor congue mollis. Fusce hendrerit urna at est bibendum, dapibus porttitor leo rhoncus. Nunc mattis tortor velit, et mollis nisi euismod commodo. Maecenas ornare leo nec viverra faucibus. Cras cursus, arcu sed tempor malesuada, ex lacus finibus mi, id accumsan sapien sem eu dui. Nunc semper felis mi, quis varius tortor lacinia sed.</p>', '0', '0', '0', '0', NULL, NULL, NULL),
(3, 3, 3, 14, 'PBM/KWITANSI/1/8/2017', '0', '0', '2', '<p>Sed velit nulla, rutrum quis venenatis vitae, ornare at risus. Nulla ac interdum odio. Suspendisse scelerisque porttitor tortor ac viverra. Etiam orci sapien, volutpat a risus quis, rhoncus laoreet dolor. Aenean nunc enim, egestas eu varius quis, gravida sed metus. Sed auctor nisl in nisi lacinia, at accumsan enim posuere. Integer quis tellus a nisi consequat luctus eget sed lorem. Fusce volutpat vehicula lacus nec feugiat. Vivamus maximus malesuada congue. Nunc rhoncus mauris eget tempor dictum. Maecenas in turpis nulla. Nulla nec rhoncus tortor, ac volutpat turpis. Aliquam vel lectus sit amet odio consequat auctor. Nam at nisi posuere, vulputate diam eget, gravida erat. Curabitur luctus urna et metus malesuada, ut fermentum arcu volutpat. Donec sit amet scelerisque dui.</p>', '0', '0', '0', '0', NULL, NULL, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `gntrapp_penjualan_penawaran`
--

INSERT INTO `gntrapp_penjualan_penawaran` (`ppnw_id`, `ppnw_no_penawaran`, `ppnw_no_pemesanan`, `ppnw_tanggal`, `ppnw_clnt_id`, `ppnw_status`, `ppnw_diskon`, `ppnw_pajak`, `ppnw_biaya_kirim`, `ppnw_nilai_faktur`, `ppnw_keterangan`, `ppnw_keterangan_print_out`, `ppnw_void`, `ppnw_entryuser`, `ppnw_entrydate`, `ppnw_changeuser`, `ppnw_changedate`) VALUES
(12, '3232323', '323232', '2017-02-15', 12, 1, 12, 212, 2121, 212121, '', '', 127, '21212', '2017-02-17 00:00:00', '', '2017-02-16 00:00:00'),
(13, 'PENAWARAN/15/SEPT/2017', '', '2017-09-08', 3, 2, 0, 0, 5000000, 48700000, 'Penawaran Pintu Sorong Baja 5 unit', '<p><strong>Lorem ipsum dolor sit amet</strong>, consectetur adipiscing elit. Curabitur pulvinar eget leo ut sollicitudin. Cras sit amet nulla mollis, dignissim lorem non, porttitor tellus. In quis tincidunt lacus. Nunc ligula eros, vehicula quis nisi id, pulvinar aliquam elit. Curabitur vehicula erat vel risus condimentum interdum. Maecenas rhoncus, ipsum in sodales convallis, neque nisl fringilla lectus, vel viverra augue velit sit amet quam. Proin non consectetur velit. Sed maximus feugiat laoreet. Nunc eu ex venenatis, <em>tempor eros sed</em>, volutpat orci. In mollis vel ipsum luctus aliquam. Nunc augue libero, ultrices eget ligula ac, rhoncus imperdiet sem. Nulla venenatis, risus eu posuere gravida, dui odio tincidunt ex, id dignissim nulla eros accumsan leo. In at purus quis nisl laoreet molestie. Morbi pretium metus risus, <strong>quis mattis nulla blandit non</strong>.</p>', 0, '', '2017-09-16 09:34:41', '', '0000-00-00 00:00:00'),
(14, 'QUOTATION/1/8/2017', '', '2017-08-01', 4, 2, 0, 0, 2500000, 259350000, 'Pekerjaan Proyek Pengeboran', '<p>Vivamus sit amet feugiat leo. Maecenas sem neque, fermentum sed dolor sed, placerat scelerisque risus. Mauris id euismod sapien. Aenean porttitor congue mollis. Fusce hendrerit urna at est bibendum, dapibus porttitor leo rhoncus. Nunc mattis tortor velit, et mollis nisi euismod commodo. Maecenas ornare leo nec viverra faucibus. Cras cursus, arcu sed tempor malesuada, ex lacus finibus mi, id accumsan sapien sem eu dui. Nunc semper felis mi, quis varius tortor lacinia sed.</p>', 0, '', '2017-09-16 09:52:22', '', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `gntrapp_penjualan_penawaran_detail`
--

INSERT INTO `gntrapp_penjualan_penawaran_detail` (`ppnwd_id`, `ppnwd_no_penawaran`, `ppnwd_deskripsi_id`, `ppnwd_jenisbarang`, `ppnwd_jenisbarang_id`, `ppnwd_volume`, `ppnwd_satuan`, `ppnwd_hargasatuan`, `ppnwd_entrydate`, `ppnwd_changedate`) VALUES
(1, 's423232dw', '', 'lkjbljbl', 1, '', 'ljblojbLJB', '8698698', NULL, NULL),
(2, 's423232dw', '', 'lkjbljbl', 1, '', 'ljblojbLJB', '8698698', NULL, NULL),
(3, 'PENAWARAN/15/SEPT/2017', 'Penawaran pintu sorong baja', 'Pintu Sorong Baja Type 2.a Uk. (b=0,6-0,8) Dan (h=0,3- 1) M', 8, '5', 'Unit', '8470000', NULL, NULL),
(4, 'PENAWARAN/15/SEPT/2017', '', '', 0, '', '', '0', NULL, NULL),
(5, 'QUOTATION/1/8/2017', 'Pengerjaan pengeboran', 'Abu Batu', 5, '1000', 'm3', '256850', NULL, NULL),
(6, 'QUOTATION/1/8/2017', '', '', 0, '', '', '0', NULL, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `gntrapp_penjualan_permintaan`
--

INSERT INTO `gntrapp_penjualan_permintaan` (`ppmt_id`, `ppmt_ppnw_id`, `ppmt_tanggal`, `ppmt_clnt_id`, `ppmt_void`, `ppmt_noso`, `ppmt_status`, `ppmt_nopo`, `ppmt_diskon`, `ppmt_pajak`, `ppmt_biayakirim`, `ppmt_nilaifaktur`, `ppmt_uangmuka`, `ppmt_keterangan`, `ppmt_entrydate`, `ppmt_changedate`, `ppmt_fileupload`) VALUES
(1, 13, '2017-03-24', 1, 0, '12345', '2', '0', '0', '0', '0', '0', '12345', 'dsd', '2017-03-09 17:11:53', NULL, NULL),
(2, 13, '2017-09-11', 5, 0, 'PBM/PERMINTAAN/16/9/2017', '2', '0', '0', '0', '0', '0', '0', 'Pembayaran Tunai', '2017-09-16 09:38:46', NULL, 'file_89c4476.jpg'),
(3, 14, '2017-08-02', 4, 0, 'PBM/PERMINTAAN/1/8/2017', '2', '0', '0', '0', '0', '0', '0', 'Pembayaran Cash', '2017-09-16 09:53:23', NULL, 'file_3d8d222.jpg');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `gntrapp_penjualan_tandaterima`
--

INSERT INTO `gntrapp_penjualan_tandaterima` (`pttr_id`, `pttr_pbcr_id`, `pttr_pjkw_id`, `pttr_pjinv_id`, `pttr_ppmt_id`, `pttr_ppnw_id`, `pttr_no`, `pttr_noproyek`, `pttr_tghndari`, `pttr_tagihan`, `pttr_mtuang`, `pttr_nilaitagihan`, `pttr_lampiran`, `pttr_tglkembali`, `pttr_nobpkc`, `pttr_tglbpkc`, `pttr_menerima`, `pttr_tglterima`, `pttr_uploadfile`, `pttr_entrydate`, `pttr_changedate`) VALUES
(1, 4, 2, 2, 2, 13, 'TT/16/9/2017', '0', 'Supplier', '', '0', '0', 'a:5:{i:0;s:13:"Kwitansi Asli";i:1;s:12:"Invoice Asli";i:2;s:17:"Faktur Pajak Asli";i:3;s:16:"Surat Jalan Asli";i:4;s:44:"Tanda Terima Asli + Quality Control Approval";}', '0000-00-00', '', '0000-00-00', 'Darto', '2017-09-18', 'tandaterima_6b38292.jpg', NULL, NULL),
(2, 5, 3, 3, 3, 14, 'TT/1/8/2017', '0', '0', '', '0', '0', 'a:6:{i:0;s:13:"Kwitansi Asli";i:1;s:12:"Invoice Asli";i:2;s:17:"Faktur Pajak Asli";i:3;s:16:"Surat Jalan Asli";i:4;s:44:"Tanda Terima Asli + Quality Control Approval";i:5;s:23:"Purchase Order Asli/SPK";}', '0000-00-00', '', '0000-00-00', 'Michael', '2017-08-16', 'tandaterima_df584eb.jpg', NULL, NULL);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `gntrapp_project`
--

INSERT INTO `gntrapp_project` (`proj_id`, `proj_clnt_id`, `proj_vndr_id`, `proj_nama`, `proj_nilai`, `proj_jangka_waktu`, `proj_cp_client`, `proj_telpon_client`, `proj_cp_vendor`, `proj_telpon_vendor`, `proj_list_barang`, `proj_status`, `proj_void`, `proj_entryuser`, `proj_entrydate`, `proj_changeuser`, `proj_changedate`) VALUES
(1, 1, 1, 'apa aja', 42423423, '12', '', '', '', '', '1', 2, 1, '', '2017-03-09 16:43:34', '', '2017-09-06 17:09:20'),
(2, 4, 2, 'Pemasangan Listrik Koperasi HP Indonesia', 50000000, 'Oktober - Desember 2017', '', '', '', '', '2', 2, 0, '', '2017-09-06 17:10:52', '', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

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
(7, 'PT Brantas Abipraya (Persero)', 'Cawang, Jakarta Timur', 'Heru', '081321219090', 'heru@brantas-abipraya.com', 1, 0, '', '2017-09-16 09:24:45', '', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `insentif_hariraya`
--

INSERT INTO `insentif_hariraya` (`id`, `grup`, `fname`, `insen1`, `insen2`, `insen3`, `insen4`, `insen5`, `totalhari`, `perhari`, `jumlah`, `ket`) VALUES
(1, 'Group1', 'Guntur', '200000', '200000', '200000', '200000', '200000', '5', '100000', '209392191919', 'lembur');

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
