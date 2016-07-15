-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2016 at 12:48 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gntr_app_new`
--
CREATE DATABASE IF NOT EXISTS `gntr_app_new` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `gntr_app_new`;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `gntrapp_adminuserlevels`
--

INSERT INTO `gntrapp_adminuserlevels` (`aulv_id`, `aulv_name`, `aulv_role_access`, `aulv_void`, `aulv_entryuser`, `aulv_entrydate`, `aulv_changeuser`, `aulv_changedate`) VALUES
(1, 'Admin', 'a:15:{s:8:"pengguna";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:11:"wajib-pajak";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:10:"user-level";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:10:"departemen";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:19:"daftar-aktiva-tetap";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:19:"kas-bank-penerimaan";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:19:"kas-bank-pembayaran";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:15:"grafik-bank-bca";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:11:"daftar-akun";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:9:"mata-uang";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:7:"project";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:6:"vendor";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:6:"client";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:11:"barang-jasa";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:9:"lain-lain";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}}', 0, '', '2016-04-09 13:30:47', '', '2016-06-19 03:04:12'),
(2, 'Supervisors', 'a:3:{s:8:"pengguna";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:11:"wajib-pajak";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:10:"departemen";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}}', 0, '', '2016-04-09 13:30:56', '', '2016-06-19 02:52:12'),
(3, 'Demo', '', 1, '', '2016-04-09 13:31:05', '', '2016-04-09 06:31:10'),
(4, 'Test', '', 1, '', '2016-04-09 13:31:48', '', '2016-04-09 06:31:52'),
(5, 'Demos', 'a:2:{s:8:"pengguna";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:19:"kas-bank-pembayaran";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}}', 0, '', '2016-04-09 21:10:29', '', '2016-06-19 02:47:07'),
(6, 'dadasd', '', 1, '', '2016-04-10 03:55:59', '', '2016-04-09 20:56:01'),
(7, 'Demo', 'a:1:{s:10:"departemen";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}}', 1, '', '2016-06-19 09:32:58', '', '2016-06-19 02:33:07'),
(8, 'Tamu', 'a:2:{s:19:"daftar-aktiva-tetap";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:19:"kas-bank-penerimaan";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}}', 1, '', '2016-06-19 09:48:31', '', '2016-06-19 02:53:33'),
(9, 'Tamu', 'a:2:{s:15:"grafik-bank-bca";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:7:"project";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}}', 1, '', '2016-06-19 09:53:48', '', '2016-06-19 02:54:06');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `gntrapp_adminusers`
--

INSERT INTO `gntrapp_adminusers` (`admusr_id`, `admusr_username`, `admusr_userpasswd`, `admusr_aulv_id`, `admusr_user_status`, `admusr_void`, `admusr_lastactivity`, `admusr_entryuser`, `admusr_entrydate`, `admusr_changeuser`, `admusr_changedate`) VALUES
(1, 'superadmin', 'ac43724f16e9241d990427ab7c8f4228', NULL, 'y', 0, '2016-07-15 23:17:37', '', '0000-00-00 00:00:00', '', '2016-06-24 15:17:46'),
(2, 'demo', 'ac43724f16e9241d990427ab7c8f4228', 5, 'y', 1, '2016-04-23 12:57:58', '', '2016-04-10 09:51:37', '', '2016-04-23 10:57:58'),
(3, 'Test', '101a6ec9f938885df0a44f20458d2eb4', 3, 'y', 1, '0000-00-00 00:00:00', '', '2016-04-10 03:01:11', '', '2016-04-09 20:01:11'),
(4, 'Hehe', '196b0f14eba66e10fba74dbf9e99c22f', 5, 'y', 1, '0000-00-00 00:00:00', '', '2016-04-10 03:04:50', '', '2016-04-09 20:04:50'),
(5, 'ggfdfg', '6c0cbf5029aed0af395ac4b864c6b095', 5, 'n', 1, '0000-00-00 00:00:00', '', '2016-04-10 03:56:35', '', '2016-04-09 20:56:35'),
(6, 'GUntur', '827ccb0eea8a706c4c34a16891f84e7b', 1, 'y', 0, '0000-00-00 00:00:00', '', '2016-04-10 09:49:29', '', '2016-04-10 02:49:29'),
(7, 'demo', 'ac43724f16e9241d990427ab7c8f4228', 1, 'y', 0, '0000-00-00 00:00:00', '', '2016-04-23 12:53:22', '', '2016-04-23 10:53:22');

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
(1, 'AKTV-001', 'dsdas', 'fdsfds', 100, '2016-01-11', '2015-01-09', 5, 12, 10, 16, 0, '', '2016-04-12 02:16:55', '', '2016-05-01 06:37:46'),
(2, 'AKTV-002', '', '', 0, '0000-00-00', '0000-00-00', 0, 0, 0, 0, 1, '', '2016-04-12 02:19:57', '', '2016-04-12 02:20:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `gntrapp_akun`
--

INSERT INTO `gntrapp_akun` (`akun_id`, `akun_nomor`, `akun_nama`, `akun_tipe_id`, `akun_saldo`, `akun_parent`, `akun_void`, `akun_entryuser`, `akun_entrydate`, `akun_changeuser`, `akun_changedate`) VALUES
(1, '1201', 'Aktiva Tetap', 2, 1000000, 0, 0, '', '2016-04-25 18:00:45', '', '2016-04-25 19:04:16'),
(2, '001', 'Tanah', 2, 500000, 1, 0, '', '2016-04-25 18:25:23', '', '2016-04-25 19:01:20'),
(3, '1001', 'Kas', 1, 3000000, 0, 0, '', '2016-04-25 19:03:14', '', '2016-04-25 19:04:22'),
(4, '001', 'Bank Mandiri', 1, 2000000, 3, 0, '', '2016-04-25 19:03:51', '', '0000-00-00 00:00:00'),
(5, '002', 'Air', 2, 1, 1, 0, '', '2016-05-01 06:57:54', '', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `gntrapp_barang_jasa`
--

INSERT INTO `gntrapp_barang_jasa` (`brjs_id`, `brjs_kategori_id`, `brjs_jenis_id`, `brjs_nama`, `brjs_volume`, `brjs_satuan_id`, `brjs_harga_satuan`, `brjs_over_project`, `brjs_vndr_id`, `brjs_void`, `brjs_entryuser`, `brjs_entrydate`, `brjs_changeuser`, `brjs_changedate`) VALUES
(1, 1, 1, 'Barang 1', '1', 3, 1000, 600, 3, 0, '', '2016-04-21 20:30:37', '', '2016-04-21 21:05:14'),
(2, 2, 0, 'Jasa 1', '', 0, 0, 0, 3, 1, '', '2016-04-21 21:06:02', '', '2016-04-21 21:06:29'),
(3, 1, 2, 'Truk', '1', 1, 20000, 0, 3, 0, '', '2016-06-05 14:48:18', '', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `gntrapp_bpu`
--

INSERT INTO `gntrapp_bpu` (`bpu_id`, `bpu_request_by`, `bpu_nama`, `bpu_harga`, `bpu_terbilang`, `bpu_approved_by`, `bpu_proj_id`, `bpu_void`, `bpu_entryuser`, `bpu_entrydate`, `bpu_changeuser`, `bpu_changedate`) VALUES
(1, 'superadmin', 'Transport Ke Inggris', 16000000, 'Enam Belas Juta Rupiah', '', 0, 0, '', '2016-04-23 07:01:15', '', '2016-04-23 07:04:56');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `gntrapp_bukti_pembayaran`
--

INSERT INTO `gntrapp_bukti_pembayaran` (`bp_id`, `bp_pbttr_id`, `bp_pbinv_id`, `bp_pbsrtjalan_id`, `bp_pbkw_id`, `bp_pbptn_id`, `bp_no`, `bp_tgltransaksi`, `bp_norekening`, `bp_namarekening`, `bp_noinvoice`, `bp_tagihan`, `bp_terbilang`, `bp_jamtransaksi`, `bp_jenistransaksi`, `bp_entrydate`, `bp_changedate`) VALUES
(5, 1, 5, 3, 3, 10, 'BP01', '2016-05-31', '08721835129', '', 'INV-01', '125000', 'Seratus dua puluh lima ribu rupiah', '07:18:00', 'Cash', '2016-05-29 07:18:50', '2016-06-19 09:10:59'),
(6, 0, 0, 0, 0, 0, 'BP02', '2016-06-27', '9234672094289', NULL, 'INV02', '13000', 'Tiga Belas Ribu Rupiah', '12:09:10', 'Cash', '2016-05-29 07:21:16', '2016-05-29 07:21:16'),
(7, 0, 0, 0, 0, 0, 'BP03', '2016-06-23', '98238213016', 'Rosianna Silaban', '123', '15000', 'Seratus Lima Puluh Ribu Rupiah', '07:18:00', 'Cash', '2016-06-05 19:27:40', '2016-06-05 19:27:40'),
(8, 2, 5, 3, 3, 10, 'BP-002', '2016-07-08', '423432', 'dadasd', '13213', '4444', 'dsadsad', '233', 'sdsadas', NULL, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `gntrapp_client`
--

INSERT INTO `gntrapp_client` (`clnt_id`, `clnt_nama`, `clnt_alamat`, `clnt_contact_person`, `clnt_telpon`, `clnt_email`, `clnt_status`, `clnt_void`, `clnt_entryuser`, `clnt_entrydate`, `clnt_changeuser`, `clnt_changedate`) VALUES
(1, 'Client 1', 'Alamat 1', '0813', '022', 'client1@mail.com', 1, 1, '', '2016-04-21 17:38:57', '', '2016-04-21 17:39:59'),
(2, 'Client 2', 'Alamat 2', '0813', '022', 'client2@mail.com', 1, 0, '', '2016-04-21 17:40:20', '', '0000-00-00 00:00:00'),
(3, 'Client 3', 'xx', '085217614244', '085217614244', 'silabanrosianna@gmail.com', 1, 0, '', '2016-05-28 08:23:33', '', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `gntrapp_departemen`
--

INSERT INTO `gntrapp_departemen` (`dprt_id`, `dprt_nama`, `dprt_manager`, `dprt_tugas`, `dprt_status`, `dprt_void`, `dprt_entryuser`, `dprt_entrydate`, `dprt_changeuser`, `dprt_changedate`) VALUES
(1, 'Departemen 1', 'Alex', 'Banyak', 0, 0, '', '2016-04-12 01:30:00', '', '2016-04-12 01:38:40'),
(2, 'Departemen 2', 'Budi', 'Lumayan', 0, 1, '', '2016-04-12 01:36:28', '', '2016-04-12 01:36:31'),
(3, 'sdsad', 'asdas', 'asda', 1, 1, '', '2016-05-28 08:09:08', '', '2016-05-28 08:09:13');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `gntrapp_invoice`
--

INSERT INTO `gntrapp_invoice` (`inv_id`, `inv_tanggal`, `inv_noinvoice`, `inv_wo`, `inv_wotgl`, `inv_nopenawaran`, `inv_to`, `inv_alamat`, `inv_description`, `inv_total`, `inv_pph`, `inv_ppn`, `inv_totaltagihan`, `inv_terbilang`, `inv_entrydate`, `inv_changedate`) VALUES
(1, '2016-05-17', '0103/INV-XII/2015', 'PO-0660-JIND/PBM-001', '2016-06-09', 'SPH-0105/SAB-IX/2015', 'PT. JGC INDONESIA', 'Jl. TB. Simatupang No. 7-B, Cilandak\r\nJakarta Selatan 12430, Indonesia\r\nPhone : 62 - 21-2997.6500. Fax: 62-21-2997.6599\r\nE-mail : indo@jgc-indonesia.com', 'Sewa 1 Unit Backhoe Loader, 1 Unit Vibro &amp; Dump Truck 7m3 + Mob Demob', '50800000', '1016000', '5080000', '54864000', 'Lima Puluh Empat Juta Delapan Ratus Enam Puluh Empat Ribu Rupiah', '2016-05-29 17:07:57', '2016-05-29 20:57:24');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `gntrapp_invoice_detail`
--

INSERT INTO `gntrapp_invoice_detail` (`invd_id`, `invd_noinvoice`, `invd_jenisbarang`, `invd_jumlah`, `invd_satuan`, `invd_hargasatuan`, `invd_total`, `inv_description`, `inv_entrydate`, `inv_changedate`) VALUES
(1, '0103/INV-XII/2015', 'Blackhoe Loader', '50', 'Hours', '398000', '19900000', NULL, '2016-05-29 17:23:04', '2016-05-29 17:23:04'),
(2, '0103/INV-XII/2015', 'Mob - Demob', '1', 'Lot', '2500000', '2500000', NULL, '2016-05-29 17:27:45', '2016-05-29 17:27:45'),
(3, '0103/INV-XII/2015', 'Vibro Roller 18 ton', '50', 'Hours', '400000', '50000000', NULL, '2016-05-29 17:28:29', '2016-05-30 01:44:44');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `gntrapp_karyawan`
--

INSERT INTO `gntrapp_karyawan` (`kary_id`, `kary_nik`, `kary_nama`, `kary_alamat`, `kary_tempat_lahir`, `kary_tanggal_lahir`, `kary_telpon`, `kary_posisi_id`, `kary_jabatan_id`, `kary_tipe_id`, `kary_status_nikah_id`, `kary_status_kontrak_id`, `kary_void`, `kary_entryuser`, `kary_entrydate`, `kary_changeuser`, `kary_changedate`) VALUES
(1, '1234', 'Alexis', 'Kemang', 'Brazil', '1990-02-15', '021', 1, 1, 2, 1, 1, 0, '', '2016-04-23 04:53:33', '', '2016-06-19 06:43:10');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `gntrapp_karyawan_gaji`
--

INSERT INTO `gntrapp_karyawan_gaji` (`kygj_id`, `kygj_kary_id`, `kygj_gaji_pokok`, `kygj_tunjangan`, `kygj_lembur`, `kygj_uang_makan`, `kygj_transport`, `kygj_bonus`, `kygj_pinjaman`, `kygj_lain_lain`, `kygj_total`, `kygj_void`, `kygj_entryuser`, `kygj_entrydate`, `kygj_changeuser`, `kygj_changedate`) VALUES
(1, 1, 1, 2, 3, 4, 5, 6, 7, 9, 37, 0, '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00');

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
(1, 'USD', 13595, 'Amerika Serikat', 'US$', 0, '', '2016-04-17 06:44:47', '', '2016-04-17 06:48:37'),
(2, 'asal', 100, 'demo', 'dm', 1, '', '2016-04-17 06:49:11', '', '2016-04-17 06:49:13'),
(3, 'Rupiah', 0, 'Indonesia', 'Rp', 0, '', '2016-07-15 14:28:58', '', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `gntrapp_pembelian_invoice`
--

INSERT INTO `gntrapp_pembelian_invoice` (`pbinv_id`, `pbinv_pbsrtjalan_id`, `pbinv_pbkw_id`, `pbinv_pbptn_id`, `pbinv_tanggal`, `pbinv_noinvoice`, `pbinv_wo`, `pbinv_wotgl`, `pbinv_nopenawaran`, `pbinv_to`, `pbinv_alamat`, `pbinv_description`, `pbinv_totaltagihan`, `pbinv_terbilang`, `uploadfile`, `pbinv_entrydate`, `pbinv_changedate`) VALUES
(4, 3, 3, 10, '2016-06-21', 'INV_342', '3423', '2016-06-28', 'sdfs', 'PT OKL', 'dsfs', 'lkjh', '345000', 'Tiga Puluh Empat Ribu Rupiah', 'invoicepembelian_7953041.jpg', '2016-06-18 19:54:10', '2016-06-19 10:14:29'),
(5, 3, 3, 10, '2016-07-08', 'INV-002', 'dasd', '2016-07-08', 'asdsad', 'fsdfsdf', 'gdfgdf', 'fsdfdsfsd', '1234', 'dsadsad', NULL, NULL, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `gntrapp_pembelian_invoice_detail`
--

INSERT INTO `gntrapp_pembelian_invoice_detail` (`pbinvd_id`, `pbinvd_invid`, `pbinvd_jenisbarang`, `pbinvd_jumlah`, `pbinvd_entrydate`, `pbinvd_changedate`, `pbinvd_brjs_id`) VALUES
(1, 'INV_342', '1', '10', '2016-06-18 19:54:10', '2016-06-18 19:54:10', NULL),
(2, 'INV_342', '3', '10', '2016-06-18 19:54:11', '2016-06-18 19:54:11', NULL),
(3, 'dsad', '1', '1', '2016-06-19 10:17:05', '2016-06-19 10:17:05', NULL),
(4, 'dsad', '3', '2', '2016-06-19 10:17:05', '2016-06-19 10:17:05', NULL),
(5, 'INV-002', '1', '4232', NULL, NULL, NULL),
(6, 'INV-002', '3', '423432', NULL, NULL, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `gntrapp_pembelian_kwitansi`
--

INSERT INTO `gntrapp_pembelian_kwitansi` (`pbkw_id`, `pbkw_pbptn_id`, `pbkw_no`, `pbkw_dari`, `pbkw_total`, `pbkw_bank`, `pbkw_norek`, `pbkw_an`, `pbkw_alamat`, `pbkw_notlpn`, `pbkw_tipe_pembayaran`, `pbkw_transfer_from_bank`, `pbkw_entrydate`, `pbkw_changedate`, `uploadfile`) VALUES
(1, 11, 'PEM-1', '0', '0', 'Bank BCA', '098675547', 'Rudi Supriadi', '0', '0', 1, 2, '2016-06-18 17:34:41', '2016-07-15 17:37:59', 'tandaterima_e761813.JPG'),
(2, 12, 'sdsa', '0', '0', 'Bank BNI', 'Dua Ratus Lima Puluh Ribu Rupiah', 'Suparman', '0', '0', 1, 2, '2016-06-18 17:49:31', '2016-07-15 23:59:45', 'tandaterima_d8ec7fe.jpg'),
(3, 10, 'KW-002', '0', '0', 'bca', '5678', 'jojo', '0', '0', 1, 1, NULL, '2016-07-15 17:39:04', NULL),
(4, 10, 'KW-003', '0', '0', 'bni', '56789', 'jojox', '0', '0', 2, 4, NULL, '2016-07-15 17:39:16', 'kwitansi_pembelian_6568436.jpg'),
(5, 10, 'KW-004', '0', '0', 'dsdsadasdsa', '43242', 'dsadsa', '0', '0', 2, 3, NULL, NULL, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `gntrapp_pembelian_permintaan`
--

INSERT INTO `gntrapp_pembelian_permintaan` (`pbptn_id`, `pbptn_clnt_id`, `pbptn_vndr_id`, `pbptn_mtua_id`, `pbptn_tanggal`, `pbptn_no`, `pbptn_halaman`, `pbptn_matauang`, `pbptn_vendor`, `pbptn_proposalno`, `pbptn_projectcode`, `pbptn_buyer`, `pbptn_catatan`, `pbptn_terms`, `pbptn_tanggalditerima`, `pbptn_diterimaoleh`, `pbptn_namapenerima`, `pbptn_tanggalterima`, `pbptn_totaltagihan`, `pbptn_terbilang`, `pbptn_entrydate`, `pbptn_changedate`) VALUES
(10, 3, 2, 1, '2016-06-29', 'PER-01', '0', '0', '0', 'PROP-01', 'CD-01', '0', 'cash', 'Sewa truk', '2016-06-30', '0', 'Lisma', '2016-06-30', '1000000', '0', '2016-06-19 07:28:21', '2016-06-19 07:28:21'),
(11, 2, 2, 3, '2016-07-08', 'PRMT-001', '0', '0', '0', '432534', 'dsasa35', '0', 'dasdasd', 'dasdas', '2016-07-08', '0', 'dasdasd', '2016-07-08', '2000000', '0', NULL, NULL),
(12, 2, 3, 3, '2016-07-15', 'PRMT-002', '0', '0', '0', 'dsadas', 'dsada', '0', 'dsada', 'dsadas', '2016-07-16', '0', 'dasdsad', '2016-07-17', '3000000', '0', NULL, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `gntrapp_pembelian_permintaan_detail`
--

INSERT INTO `gntrapp_pembelian_permintaan_detail` (`pbptnd_id`, `pbptnd_nopermintaan`, `pbptnd_jenisbarang`, `pbptnd_jumlah`, `pbptnd_entrydate`, `pbptnd_changedate`, `pbptnd_brjs_id`) VALUES
(1, '0', '1', '10', '2016-06-18 23:06:44', '2016-06-18 23:06:44', NULL),
(2, '0', '1', '1', '2016-06-18 23:06:45', '2016-06-18 23:06:45', NULL),
(3, '0', '3', '10', '2016-06-18 23:10:25', '2016-06-18 23:10:25', NULL),
(4, '0', '3', '10', '2016-06-18 23:10:25', '2016-06-18 23:10:25', NULL),
(5, '0', '3', '10', '2016-06-18 23:10:49', '2016-06-18 23:10:49', NULL),
(6, '0', '3', '10', '2016-06-18 23:10:49', '2016-06-18 23:10:49', NULL),
(7, 'asd', '3', '10', '2016-06-18 23:11:17', '2016-06-18 23:11:17', NULL),
(8, 'asd', '3', '10', '2016-06-18 23:11:17', '2016-06-18 23:11:17', NULL),
(9, 'PER-01', '1', '10', '2016-06-19 07:28:21', '2016-06-19 07:28:21', NULL),
(10, 'PER-01', '3', '2', '2016-06-19 07:28:21', '2016-06-19 07:28:21', NULL),
(11, 'PRMT-001', '1', '12', NULL, NULL, NULL),
(12, 'PRMT-001', '3', '10', NULL, NULL, NULL),
(13, 'PRMT-002', '1', 'sadsad', NULL, NULL, NULL),
(14, 'PRMT-002', '3', 'dsadsa', NULL, NULL, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `gntrapp_pembelian_permintaan_suratjalan_detail`
--

INSERT INTO `gntrapp_pembelian_permintaan_suratjalan_detail` (`pbsuratjaland_id`, `pbsuratjaland_nopermintaan`, `pbsuratjaland_jenisbarang`, `pbsuratjaland_jumlah`, `pbsuratjaland_entrydate`, `pbsuratjaland_changedate`, `pbsuratjaland_brjs_id`) VALUES
(1, 'SRT-01', '1', '1', '2016-06-19 08:34:59', '2016-06-19 08:34:59', NULL),
(2, 'SRT-01', '3', '10', '2016-06-19 08:34:59', '2016-06-19 08:37:57', NULL),
(3, 'fdsf', '1', '1', '2016-06-19 10:08:35', '2016-06-19 10:08:35', NULL),
(4, 'fdsf', '', '', '2016-06-19 10:08:35', '2016-06-19 10:08:35', NULL),
(5, '1234', '1', '432423', NULL, NULL, NULL),
(6, '1234', '1', '534543', NULL, NULL, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `gntrapp_pembelian_suratjalan`
--

INSERT INTO `gntrapp_pembelian_suratjalan` (`pbsrtjalan_id`, `pbsrtjalan_pbkw_id`, `pbsrtjalan_pbptn_id`, `pbsrtjalan_tanggal`, `pbsrtjalan_no`, `pbsrtjalan_halaman`, `pbsrtjalan_matauang`, `pbsrtjalan_vendor`, `pbsrtjalan_proposalno`, `pbsrtjalan_projectcode`, `pbsrtjalan_buyer`, `pbsrtjalan_catatan`, `pbsrtjalan_terms`, `pbsrtjalan_tanggalditerima`, `pbsrtjalan_diterimaoleh`, `pbsrtjalan_namapenerima`, `pbsrtjalan_tanggalterima`, `pbsrtjalan_totaltagihan`, `pbsrtjalan_nokendaraan`, `pbsrtjalan_terbilang`, `uploadfile`, `pbsrtjalan_entrydate`, `pbsrtjalan_changedate`) VALUES
(2, 2, 12, '2016-06-30', 'SRT-01', '0', '3', '0', '0', '0', '0', '0', '0', '2016-06-30', '0', 'Lisa', '0000-00-00', '0', 'B 123 KL', '0', 'suratjalan_80a9efd.jpg', '2016-06-19 08:34:59', '2016-06-19 10:03:03'),
(3, 3, 10, '2016-07-08', '1234', '0', '1', '0', '0', '0', '0', '0', '0', '2016-07-08', '0', 'dadsad', '0000-00-00', '0', '12', '0', 'suratjalan_816d385.gif', NULL, NULL);

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
  `pbttr_lampiran` varchar(250) DEFAULT NULL,
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
(1, 5, 3, 3, 10, 'TT-1', '34', '0', 'PT ABC', '0', '25000', '0', '0000-00-00', '323', '2016-06-29', 'Anna', '2016-06-30', 'tandaterima_f820355.jpg', '2016-06-18 20:22:40', '2016-06-18 20:27:28'),
(2, 5, 3, 3, 10, '4324234', 'ffdsfsd', 'Telepon', 'fsfsdf', 'Rp', 'fsdfsdf', 'Faktur Pajak Asli', '2016-07-08', '535345', '2016-07-08', 'sdfsdf', '2016-07-08', NULL, NULL, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `gntrapp_penerimaan`
--

INSERT INTO `gntrapp_penerimaan` (`pnrm_id`, `pnrm_bank_id`, `pnrm_tanggal`, `pnrm_akun_id`, `pnrm_nama`, `pnrm_jumlah`, `pnrm_keterangan`, `pnrm_void`, `pnrm_entryuser`, `pnrm_entrydate`, `pnrm_changeuser`, `pnrm_changedate`) VALUES
(1, 2, '2016-04-14', 2, 'Jual Tanah', 250000, 'test', 0, '', '2016-04-25 20:21:02', '', '2016-05-05 10:58:49');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `gntrapp_pengeluaran`
--

INSERT INTO `gntrapp_pengeluaran` (`pgln_id`, `pgln_bank_id`, `pgln_tanggal`, `pgln_akun_id`, `pgln_nama`, `pgln_jumlah`, `pgln_keterangan`, `pgln_void`, `pgln_entryuser`, `pgln_entrydate`, `pgln_changeuser`, `pgln_changedate`) VALUES
(1, 2, '2016-05-05', 2, 'Beli Tanah', 100000, '', 0, '', '2016-05-05 10:13:11', '', '0000-00-00 00:00:00'),
(2, 1, '2016-05-04', 2, 'Beli tanah lagi', 50000, '', 0, '', '2016-05-05 10:20:20', '', '0000-00-00 00:00:00'),
(3, 2, '2016-05-05', 5, 'Beli Air', 125000, '', 0, '', '2016-05-05 10:32:09', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gntrapp_penjualan_beritaacara`
--

CREATE TABLE IF NOT EXISTS `gntrapp_penjualan_beritaacara` (
  `pbcr_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pbcr_pjkw_id` int(11) NOT NULL,
  `pbcr_pjinv_id` int(11) NOT NULL,
  `pbcr_ppmt_id` int(11) NOT NULL,
  `pbcr_ppnw_id` int(11) NOT NULL,
  `pbcr_no` varchar(150) NOT NULL,
  `pbcr_noproyek` varchar(250) DEFAULT NULL,
  `pbcr_deskripsi` varchar(250) DEFAULT NULL,
  `pbcr_tglperjanjian` date DEFAULT NULL,
  `pbcr_tghndari` varchar(150) NOT NULL,
  `pbcr_tagihan` varchar(150) DEFAULT NULL,
  `pbcr_mtuang` varchar(150) DEFAULT NULL,
  `pbcr_nilaitagihan` varchar(250) DEFAULT NULL,
  `pbcr_lampiran` varchar(250) DEFAULT NULL,
  `pbcr_tglkembali` date NOT NULL,
  `pbcr_nobpkc` varchar(250) DEFAULT NULL,
  `pbcr_tglbpkc` date NOT NULL,
  `pbcr_menerima` varchar(250) DEFAULT NULL,
  `pbcr_tglterima` date NOT NULL,
  `pbcr_uploadfile` varchar(250) DEFAULT NULL,
  `pbcr_entrydate` datetime DEFAULT NULL,
  `pbcr_changedate` datetime DEFAULT NULL,
  PRIMARY KEY (`pbcr_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `gntrapp_penjualan_beritaacara`
--

INSERT INTO `gntrapp_penjualan_beritaacara` (`pbcr_id`, `pbcr_pjkw_id`, `pbcr_pjinv_id`, `pbcr_ppmt_id`, `pbcr_ppnw_id`, `pbcr_no`, `pbcr_noproyek`, `pbcr_deskripsi`, `pbcr_tglperjanjian`, `pbcr_tghndari`, `pbcr_tagihan`, `pbcr_mtuang`, `pbcr_nilaitagihan`, `pbcr_lampiran`, `pbcr_tglkembali`, `pbcr_nobpkc`, `pbcr_tglbpkc`, `pbcr_menerima`, `pbcr_tglterima`, `pbcr_uploadfile`, `pbcr_entrydate`, `pbcr_changedate`) VALUES
(3, 1, 1, 11, 4, '8796', 'jkhjh87967', 'Perbaikan Talang Gudang Rawsugar Sisi sebelah Selatan', '2016-06-29', '0', 'PT. Client 2', '0', '89000000', '0', '2016-06-29', '9786', '2016-06-22', 'Intan', '2016-06-20', 'beritaacara_1df6d11.jpg', '2016-06-09 16:28:01', '2016-06-12 02:10:47'),
(4, 3, 3, 2, 9, 'BC56', '12', 'Perbaikan Talang Gudang Rawsugar Sisi sebelah Utara', '2016-06-05', '0', 'PT. Client 1', '0', '100000000', '0', '0000-00-00', '231', '2016-06-28', 'Lisa', '2016-06-28', NULL, '2016-06-12 01:39:33', '2016-06-12 02:10:13'),
(5, 1, 1, 11, 4, 'BA-002', '2434', 'dsadas', '2016-07-08', 'Supplier', 'dasdsa', 'Rp', '35345', 'Faktur Pajak Asli', '2016-07-08', '34543', '2016-07-08', 'dadasd', '2016-07-08', NULL, NULL, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `gntrapp_penjualan_bukti_pembayaran`
--

INSERT INTO `gntrapp_penjualan_bukti_pembayaran` (`pbktp_id`, `pbktp_pttr_id`, `pbktp_pbcr_id`, `pbktp_pjkw_id`, `pbktp_pjinv_id`, `pbktp_ppmt_id`, `pbktp_ppnw_id`, `pbktp_tgltransaksi`, `pbktp_notransaksi`, `pbktp_norekening`, `pbktp_namakonsultan`, `pbktp_noinvoice`, `pbktp_totaltagihan`, `pbktp_terbilang`, `pbktp_jenistransaksi`, `pbktp_jamtransaksi`, `pbktp_channel`, `pbktp_userid`, `pbktp_uploadfile`, `pbktp_entrydate`, `pbktp_changedate`) VALUES
(1, 1, 5, 1, 1, 11, 4, '2016-06-22', '75989768', '76859867', 'Anna', 'INV12', '1500000', 'Satu Juta Lima Ratus Ribu Rupiah', 'Cash', '0000-00-00', NULL, '0000-00-00', 'beritaacara_4d87b1e.jpg', '2016-06-09 18:45:02', '2016-06-10 19:14:55'),
(2, 2, 4, 3, 3, 2, 9, '2016-06-22', '75989768', '9786796', 'Anna', 'INV1', '78000', 'Tujuh Puluh Delapan Ribu Rupiah', 'Cash', '0000-00-00', NULL, '0000-00-00', 'buktipembayaran_641cec7.jpg', '2016-06-09 19:00:50', '2016-06-09 19:00:50'),
(3, 2, 4, 3, 3, 2, 9, '2016-07-08', '24324', '5345345', 'dasdsad', '312312', '5454', 'dsdsada', 'gsdgsdg', '0000-00-00', NULL, '0000-00-00', NULL, NULL, NULL);

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
(1, 11, 4, '2016-06-30', '0103/INV-XII/2015', 'PO-0660-JIND/PBM-001', '2016-06-29', 'SPH-0105/SAB-IX/2015', 'PT Maju Mundur 2', 'Jl. TB. Simatupang No. 7-B, Cilandak\r\nJakarta Selatan 12430, Indonesia\r\nPhone : 62 - 21-2997.6500. Fax: 62-21-2997.6599\r\nE-mail : indo@jgc-indonesia.com', 'Sewa 1 Unit Backhoe Loader, 1 Unit Vibro &amp; Dump Truck 7m3 + Mob Demob', '1500000', 'Satu Juta Lima Ratus Ribu Rupiah', '2016-06-08 05:43:23', '2016-06-08 07:00:42'),
(2, 12, 9, '2016-06-27', '0103/INV-XII/2016', '0103/WO-XII/2015', '2016-06-12', 'SPH-0105/SAB-IX/2015', '', '', 'XX', '2000000', 'Dua Juta Rupiah', '2016-06-08 05:46:08', '2016-06-08 05:46:08'),
(3, 2, 9, '2016-07-08', 'INV-004', 'WO-004', '2016-07-08', 'PWO-004', 'dsad', 'dasdasd', 'sdsdfs', '434324', 'dadsadasd', NULL, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `gntrapp_penjualan_invoice_detail`
--

INSERT INTO `gntrapp_penjualan_invoice_detail` (`pjinvd_id`, `pjinvd_invid`, `pjinvd_jenisbarang`, `pjinvd_jumlah`, `pjinvd_entrydate`, `pjinvd_changedate`, `pjinvd_brjs_id`) VALUES
(1, '0103/INV-XII/2015', '1', '10', '2016-06-08 05:43:23', '2016-06-08 07:10:55', NULL),
(2, '0103/INV-XII/2015', '3', '3', '2016-06-08 05:43:23', '2016-06-08 07:11:04', NULL),
(5, '0103/INV-XII/2016', '1', '202', '2016-06-08 05:46:08', '2016-06-08 05:46:08', NULL),
(6, '0103/INV-XII/2016', '3', '20', '2016-06-08 05:46:08', '2016-06-08 05:46:08', NULL),
(8, 'sdadas', '3', '10', '2016-06-08 07:11:50', '2016-06-08 07:11:50', NULL),
(9, 'INV-004', '1', '12', NULL, NULL, NULL),
(10, 'INV-004', '3', '15', NULL, NULL, NULL);

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
  `pjkw_norek` varchar(250) DEFAULT NULL,
  `pjkw_an` varchar(250) DEFAULT NULL,
  `pjkw_alamat` varchar(250) DEFAULT NULL,
  `pjkw_notlpn` varchar(250) DEFAULT NULL,
  `pjkw_entrydate` datetime DEFAULT NULL,
  `pjkw_changedate` datetime DEFAULT NULL,
  `uploadfile` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`pjkw_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `gntrapp_penjualan_kwitansi`
--

INSERT INTO `gntrapp_penjualan_kwitansi` (`pjkw_id`, `pjkw_pjinv_id`, `pjkw_ppmt_id`, `pjkw_ppnw_id`, `pjkw_no`, `pjkw_dari`, `pjkw_total`, `pjkw_bank`, `pjkw_norek`, `pjkw_an`, `pjkw_alamat`, `pjkw_notlpn`, `pjkw_entrydate`, `pjkw_changedate`, `uploadfile`) VALUES
(1, 1, 11, 4, '123', 'PT. ABC', '2500000', 'Bank Central Asia', '122387462', 'Rosianna Silaban', '                                                Sewa truk                                        ', '085217614244', '2016-06-08 16:47:56', '2016-07-08 16:58:32', 'kwitansi_1285060.jpg'),
(3, 3, 2, 9, 'KWT12', 'Rosianna Silaban', '34000', 'Bank Central Asia Cabang Taman Aries', '09347382947', 'Anna', '                                                Sewa truk\r\n                                                            ', '085217614244', '2016-06-12 01:14:56', '2016-07-08 08:04:51', NULL),
(4, 1, 11, 4, 'KW-003', 'sadsa', '45435', 'bca', '55445', 'dasdsad', 'dasdsad\r\n                    ', '3435', NULL, NULL, NULL);

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
  `ppnw_void` tinyint(4) NOT NULL,
  `ppnw_entryuser` varchar(100) NOT NULL,
  `ppnw_entrydate` datetime NOT NULL,
  `ppnw_changeuser` varchar(100) NOT NULL,
  `ppnw_changedate` datetime NOT NULL,
  PRIMARY KEY (`ppnw_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `gntrapp_penjualan_penawaran`
--

INSERT INTO `gntrapp_penjualan_penawaran` (`ppnw_id`, `ppnw_no_penawaran`, `ppnw_no_pemesanan`, `ppnw_tanggal`, `ppnw_clnt_id`, `ppnw_status`, `ppnw_diskon`, `ppnw_pajak`, `ppnw_biaya_kirim`, `ppnw_nilai_faktur`, `ppnw_keterangan`, `ppnw_void`, `ppnw_entryuser`, `ppnw_entrydate`, `ppnw_changeuser`, `ppnw_changedate`) VALUES
(1, 'PNW-001', 'PMSN-001', '0000-00-00', 2, 1, 1000, 2000, 3000, 4000, 'test', 1, '', '2016-05-06 06:02:13', '', '2016-06-12 10:41:17'),
(2, 'PNW-002', 'PMSN-002', '0000-00-00', 2, 1, 1000, 2000, 3000, 4000, 'Lagi', 1, '', '2016-05-06 06:15:20', '', '2016-05-06 06:17:37'),
(3, '2', '', '0000-00-00', 3, 2, 12, 1222, 12222, 1345, 'ss', 1, '', '2016-05-28 08:24:17', '', '2016-06-12 10:41:19'),
(4, 'PNW01', '', '2016-06-30', 2, 2, 10, 10, 1000, 1450000, 'Perbaikan Talang Air Finishgood &amp; Perbaikan Dinding', 0, '', '2016-06-12 09:32:25', '', '2016-06-12 10:40:59'),
(5, 'PNW02', '', '0000-00-00', 3, 1, 20, 10, 345000, 128000000, 'Perbaikan Dinding', 1, '', '2016-06-12 09:36:47', '', '2016-06-12 10:41:22'),
(6, 'PNW4', '', '0000-00-00', 2, 1, 10, 10, 25000, 125000000, 'Perbaikan Dinding', 1, '', '2016-06-12 09:40:05', '', '2016-06-12 09:43:15'),
(7, 'PNW04', '', '0000-00-00', 2, 2, 0, 10, 25000, 2500000, 'Perbaikan Talang Air Finishgood', 1, '', '2016-06-12 09:45:47', '', '2016-06-12 09:46:24'),
(8, 'PNW04', '', '0000-00-00', 3, 1, 0, 10, 23000, 45000000, 'Perbaikan dinding', 1, '', '2016-06-12 09:53:02', '', '2016-06-12 10:05:51'),
(9, 'PNW04', '', '2016-06-22', 3, 1, 10, 10, 45000, 3500000, 'Perbaikan dinding', 0, '', '2016-06-12 10:07:19', '', '2016-06-12 12:05:35'),
(10, 'PNW04', '', '0000-00-00', 3, 1, 10, 10, 45000, 3500000, 'Perbaikan dinding', 1, '', '2016-06-12 10:07:40', '', '2016-06-12 10:11:20'),
(11, '4324', '', '0000-00-00', 3, 1, 342, 3432, 234234, 23432, 'sgdfsgsdf', 1, '', '2016-06-12 10:08:59', '', '2016-06-12 10:11:07'),
(12, 'efw', '', '0000-00-00', 3, 2, 0, 0, 0, 0, '', 1, '', '2016-06-12 10:09:54', '', '2016-06-12 10:11:04'),
(13, '453', '', '0000-00-00', 0, 0, 0, 0, 0, 0, '', 0, '', '2016-06-12 10:10:46', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gntrapp_penjualan_penawaran_detail`
--

CREATE TABLE IF NOT EXISTS `gntrapp_penjualan_penawaran_detail` (
  `ppnwd_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ppnwd_no_penawaran` varchar(150) NOT NULL,
  `ppnwd_deskripsi_id` varchar(150) DEFAULT NULL,
  `ppnwd_jenisbarang` varchar(150) DEFAULT NULL,
  `ppnwd_volume` varchar(150) DEFAULT NULL,
  `ppnwd_satuan` varchar(150) DEFAULT NULL,
  `ppnwd_hargasatuan` varchar(150) DEFAULT NULL,
  `ppnwd_entrydate` datetime DEFAULT NULL,
  `ppnwd_changedate` datetime DEFAULT NULL,
  PRIMARY KEY (`ppnwd_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `gntrapp_penjualan_penawaran_detail`
--

INSERT INTO `gntrapp_penjualan_penawaran_detail` (`ppnwd_id`, `ppnwd_no_penawaran`, `ppnwd_deskripsi_id`, `ppnwd_jenisbarang`, `ppnwd_volume`, `ppnwd_satuan`, `ppnwd_hargasatuan`, `ppnwd_entrydate`, `ppnwd_changedate`) VALUES
(1, 'PNW01', '', 'Barang 1', '10', 'Pcs', '25000', '2016-06-12 14:32:26', '2016-06-12 15:38:23'),
(2, 'PNW01', '', 'Truk', '15', 'lot', '2500000', '2016-06-12 14:32:26', '2016-06-12 15:38:23'),
(15, 'PNW04', '', '--Pilih--', '2', 'Lot', '2500000', '2016-06-12 15:07:40', '2016-06-12 17:05:36');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `gntrapp_penjualan_permintaan`
--

INSERT INTO `gntrapp_penjualan_permintaan` (`ppmt_id`, `ppmt_ppnw_id`, `ppmt_tanggal`, `ppmt_clnt_id`, `ppmt_void`, `ppmt_noso`, `ppmt_status`, `ppmt_nopo`, `ppmt_diskon`, `ppmt_pajak`, `ppmt_biayakirim`, `ppmt_nilaifaktur`, `ppmt_uangmuka`, `ppmt_keterangan`, `ppmt_entrydate`, `ppmt_changedate`, `ppmt_fileupload`) VALUES
(1, 0, '2016-06-30', 0, 0, '12312', '', '34534', '12%', '10%', '12000', '12345000', '0', 'xx', '2016-06-06 10:49:53', '2016-06-06 15:49:53', NULL),
(2, 9, '2016-07-30', 3, 0, '564564', '2', '4564', '12%', '10%', '12000', '12000000', '12000', 'proses cepat ya', '2016-06-06 10:55:44', '2016-07-08 16:53:53', 'file_e281fb1.png'),
(3, 0, '2016-08-31', 2, 1, '4564', '1', '34', '13%', '10%', '12000', '4500', '3000', 'cc 1', '2016-06-06 11:03:32', '2016-06-07 16:37:16', NULL),
(4, 0, '2016-08-25', 2, 1, '439576', '2', '123', '50%', '10%', '12000', '35000', '100000', 'proses cepat', '2016-06-07 16:39:17', '2016-06-07 18:43:00', NULL),
(11, 4, '2016-06-30', 3, 0, '123`', '2', '123', '30%', '10%', '12000', '1200', '12000', 'cek xx', '2016-06-07 18:31:11', '2016-07-08 07:25:56', 'file_87aa681.jpg'),
(12, 9, '2016-06-15', 3, 0, '2913', '2', '12', '', '10%', '12000', '12000000', '12000', 'cek', '2016-06-07 18:51:20', '2016-07-08 07:25:47', 'file_98e6cb3.jpg'),
(13, 9, '2016-07-08', 3, 0, 'SO-002', '1', 'PO-002', '5', '5', '1234', '567', '12345', 'sadsad', '2016-07-08 06:57:15', NULL, NULL);

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
  `pttr_lampiran` varchar(250) DEFAULT NULL,
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
(1, 5, 1, 1, 11, 4, 'das', 'sad', '0', 'asda', '0', 'asda', '0', '0000-00-00', 'sda', '2016-06-22', 'sda', '2016-06-22', 'tandaterima_0dd9487.png', '2016-06-12 02:15:26', '2016-06-12 02:15:26'),
(2, 4, 3, 3, 2, 9, 'TT-002', '432432', '0', 'fgh', '0', '23213', '0', '0000-00-00', 'BPKC-002', '2016-07-08', 'dadasd', '2016-07-08', NULL, NULL, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `gntrapp_profile`
--

INSERT INTO `gntrapp_profile` (`prf_id`, `prf_meta`, `prf_value`, `prf_entryuser`, `prf_entrydate`, `prf_changeuser`, `prf_changedate`) VALUES
(1, 'Pribadi', 'a:8:{s:4:"npwp";s:4:"1234";s:4:"nama";s:12:"Nama Pribadi";s:6:"alamat";s:14:"Alamat Pribadi";s:4:"kota";s:12:"Kota Pribadi";s:7:"telepon";s:5:"08888";s:3:"fax";s:5:"08899";s:5:"email";s:17:"email@pribadi.com";s:11:"jenis_usaha";s:19:"Jenis Usaha Pribadi";}', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00'),
(2, 'Usaha', 'a:3:{s:4:"nama";s:16:"Nama Badan Usaha";s:4:"npwp";s:4:"5678";s:10:"keterangan";s:22:"Keterangan Badan Usaha";}', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00');

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
(1, 2, 3, 'Test 1', 10000, 'dasd', 'gsg', 'dasdas', 'dasdas', 'dadas', '1', 2, 0, '', '2016-06-18 16:04:59', '', '2016-06-19 06:26:24'),
(2, 0, 0, 'dasdsa', 0, 'fsfsd', 'fsfs', 'fsdfsdf', 'fsdfsd', 'fsdfsd', 'sdassdf', 1, 1, '', '2016-06-18 16:07:54', '', '2016-06-18 16:07:59');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `gntrapp_saham`
--

INSERT INTO `gntrapp_saham` (`sham_id`, `sham_nama`, `sham_alamat`, `sham_persentase`, `sham_void`, `sham_entryuser`, `sham_entrydate`, `sham_changeuser`, `sham_changedate`) VALUES
(1, 'Andre Lestari', 'Bekasix', 20, 0, '', '2016-04-17 07:04:57', '', '2016-04-17 07:07:03'),
(2, 'test', 'aja', 10, 1, '', '2016-04-17 07:07:54', '', '2016-04-17 07:07:56');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `gntrapp_surat_jalan`
--

INSERT INTO `gntrapp_surat_jalan` (`sj_id`, `sj_tanggal`, `sj_no`, `sj_halaman`, `sj_matauang`, `sj_vendor`, `sj_vendorproposalno`, `sj_projectcode`, `sj_buyer`, `sj_jenisbarang`, `sj_deskripsi`, `sj_jumlah`, `sj_satuan`, `sj_hargasatuan`, `sj_total`, `sj_catatan`, `sj_lampiran`, `sj_termspembayaran`, `sj_tglpenerimaan`, `sj_diterimaoleh`, `sj_namapenerima`, `sj_tgl`, `pp_entrydate`, `pp_changedate`) VALUES
(1, '2016-05-27', '1', 'asda', '', '', '0', '', '', '', '', '', '', 0, 0, '', '', '', '0000-00-00', '', '', '0000-00-00', '2016-05-29 05:15:57', '2016-05-29 06:33:40'),
(5, '2016-05-31', '12', 'asda', '$', 'ab', '0', 'asda', 'asda', '', '', '', '', 0, 0, '', '', '', '0000-00-00', 'Rosianna', 'Anna', '0000-00-00', '2016-05-29 05:17:00', '2016-05-29 06:36:11'),
(7, '2016-05-28', 'SDFGH90', '12', '$', 'PT MAJU MUNDUR', '123', '243', 'Anna Silaban', 'Honda Mobilio', '', '1', '125000000', 130000000, 125000000, '', '', '', '0000-00-00', 'Santi', 'Anna Silaban', '2016-05-31', '2016-05-29 06:55:46', '2016-05-29 06:55:46');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `gntrapp_vendor`
--

INSERT INTO `gntrapp_vendor` (`vndr_id`, `vndr_nama`, `vndr_alamat`, `vndr_contact_person`, `vndr_telpon`, `vndr_email`, `vndr_status`, `vndr_void`, `vndr_entryuser`, `vndr_entrydate`, `vndr_changeuser`, `vndr_changedate`) VALUES
(1, 'Vendor 1', 'Alamat 1', '0812', '021345', 'vendor1@mail.com', 1, 1, '', '2016-04-21 17:29:11', '', '2016-04-21 17:33:12'),
(2, 'Vendor 2', 'Alamat 2', '0812', '021345', 'vendor2@mail.com', 0, 0, '', '2016-04-21 17:33:36', '', '2016-04-21 17:34:19'),
(3, 'Vendor 3', 'Alamat 3', '0814', '6789', 'vendor3@mail.com', 1, 0, '', '2016-04-21 20:54:44', '', '2016-07-15 23:50:04');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
