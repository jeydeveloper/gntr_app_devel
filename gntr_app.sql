-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2016 at 06:18 AM
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
-- Table structure for table `gntrapp_adminuserlevels`
--

CREATE TABLE IF NOT EXISTS `gntrapp_adminuserlevels` (
  `aulv_id` int(11) NOT NULL AUTO_INCREMENT,
  `aulv_name` varchar(100) CHARACTER SET latin1 NOT NULL,
  `aulv_void` tinyint(4) NOT NULL,
  `aulv_entryuser` varchar(100) CHARACTER SET latin1 NOT NULL,
  `aulv_entrydate` datetime NOT NULL,
  `aulv_changeuser` varchar(100) CHARACTER SET latin1 NOT NULL,
  `aulv_changedate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`aulv_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `gntrapp_adminuserlevels`
--

INSERT INTO `gntrapp_adminuserlevels` (`aulv_id`, `aulv_name`, `aulv_void`, `aulv_entryuser`, `aulv_entrydate`, `aulv_changeuser`, `aulv_changedate`) VALUES
(1, 'Admin', 0, '', '2016-04-09 13:30:47', '', '2016-04-09 06:30:47'),
(2, 'Supervisors', 0, '', '2016-04-09 13:30:56', '', '2016-04-09 14:10:22'),
(3, 'Demo', 1, '', '2016-04-09 13:31:05', '', '2016-04-09 06:31:10'),
(4, 'Test', 1, '', '2016-04-09 13:31:48', '', '2016-04-09 06:31:52'),
(5, 'Demos', 0, '', '2016-04-09 21:10:29', '', '2016-04-13 23:23:03'),
(6, 'dadasd', 1, '', '2016-04-10 03:55:59', '', '2016-04-09 20:56:01');

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
  `admusr_changedate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`admusr_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `gntrapp_adminusers`
--

INSERT INTO `gntrapp_adminusers` (`admusr_id`, `admusr_username`, `admusr_userpasswd`, `admusr_aulv_id`, `admusr_user_status`, `admusr_void`, `admusr_lastactivity`, `admusr_entryuser`, `admusr_entrydate`, `admusr_changeuser`, `admusr_changedate`) VALUES
(1, 'superadmin', 'ac43724f16e9241d990427ab7c8f4228', NULL, 'y', 0, '2016-05-06 05:09:23', '', '0000-00-00 00:00:00', '', '2016-05-06 03:09:23'),
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `gntrapp_barang_jasa`
--

INSERT INTO `gntrapp_barang_jasa` (`brjs_id`, `brjs_kategori_id`, `brjs_jenis_id`, `brjs_nama`, `brjs_volume`, `brjs_satuan_id`, `brjs_harga_satuan`, `brjs_over_project`, `brjs_vndr_id`, `brjs_void`, `brjs_entryuser`, `brjs_entrydate`, `brjs_changeuser`, `brjs_changedate`) VALUES
(1, 1, 1, 'Barang 1', '1', 3, 1000, 600, 3, 0, '', '2016-04-21 20:30:37', '', '2016-04-21 21:05:14'),
(2, 2, 0, 'Jasa 1', '', 0, 0, 0, 3, 1, '', '2016-04-21 21:06:02', '', '2016-04-21 21:06:29');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `gntrapp_client`
--

INSERT INTO `gntrapp_client` (`clnt_id`, `clnt_nama`, `clnt_alamat`, `clnt_contact_person`, `clnt_telpon`, `clnt_email`, `clnt_status`, `clnt_void`, `clnt_entryuser`, `clnt_entrydate`, `clnt_changeuser`, `clnt_changedate`) VALUES
(1, 'Client 1', 'Alamat 1', '0813', '022', 'client1@mail.com', 1, 1, '', '2016-04-21 17:38:57', '', '2016-04-21 17:39:59'),
(2, 'Client 2', 'Alamat 2', '0813', '022', 'client2@mail.com', 1, 0, '', '2016-04-21 17:40:20', '', '0000-00-00 00:00:00');

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
(1, 'Departemen 1', 'Alex', 'Banyak', 0, 0, '', '2016-04-12 01:30:00', '', '2016-04-12 01:38:40'),
(2, 'Departemen 2', 'Budi', 'Lumayan', 0, 1, '', '2016-04-12 01:36:28', '', '2016-04-12 01:36:31');

-- --------------------------------------------------------

--
-- Table structure for table `gntrapp_karyawan`
--

CREATE TABLE IF NOT EXISTS `gntrapp_karyawan` (
  `kary_id` int(11) NOT NULL AUTO_INCREMENT,
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

INSERT INTO `gntrapp_karyawan` (`kary_id`, `kary_nama`, `kary_alamat`, `kary_tempat_lahir`, `kary_tanggal_lahir`, `kary_telpon`, `kary_posisi_id`, `kary_jabatan_id`, `kary_tipe_id`, `kary_status_nikah_id`, `kary_status_kontrak_id`, `kary_void`, `kary_entryuser`, `kary_entrydate`, `kary_changeuser`, `kary_changedate`) VALUES
(1, 'Alexis', 'Kemang', 'Brazil', '1990-02-15', '021', 1, 1, 2, 1, 1, 0, '', '2016-04-23 04:53:33', '', '2016-05-01 06:35:11');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `gntrapp_matauang`
--

INSERT INTO `gntrapp_matauang` (`mtua_id`, `mtua_nama`, `mtua_nilaitukar`, `mtua_negara`, `mtua_simbol`, `mtua_void`, `mtua_entryuser`, `mtua_entrydate`, `mtua_changeuser`, `mtua_changedate`) VALUES
(1, 'USD', 13595, 'Amerika Serikat', 'US$', 0, '', '2016-04-17 06:44:47', '', '2016-04-17 06:48:37'),
(2, 'asal', 100, 'demo', 'dm', 1, '', '2016-04-17 06:49:11', '', '2016-04-17 06:49:13');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `gntrapp_penjualan_penawaran`
--

INSERT INTO `gntrapp_penjualan_penawaran` (`ppnw_id`, `ppnw_no_penawaran`, `ppnw_no_pemesanan`, `ppnw_tanggal`, `ppnw_clnt_id`, `ppnw_status`, `ppnw_diskon`, `ppnw_pajak`, `ppnw_biaya_kirim`, `ppnw_nilai_faktur`, `ppnw_keterangan`, `ppnw_void`, `ppnw_entryuser`, `ppnw_entrydate`, `ppnw_changeuser`, `ppnw_changedate`) VALUES
(1, 'PNW-001', 'PMSN-001', '0000-00-00', 2, 1, 1000, 2000, 3000, 4000, 'test', 0, '', '2016-05-06 06:02:13', '', '2016-05-06 06:14:46'),
(2, 'PNW-002', 'PMSN-002', '0000-00-00', 2, 1, 1000, 2000, 3000, 4000, 'Lagi', 1, '', '2016-05-06 06:15:20', '', '2016-05-06 06:17:37');

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
  `proj_nama` varchar(100) NOT NULL,
  `proj_void` tinyint(4) NOT NULL,
  `proj_entryuser` varchar(100) NOT NULL,
  `proj_entrydate` datetime NOT NULL,
  `proj_changeuser` varchar(100) NOT NULL,
  `proj_changedate` datetime NOT NULL,
  PRIMARY KEY (`proj_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
(3, 'Vendor 3', 'Alamat 3', '0814', '021345', 'vendor3@mail.com', 1, 0, '', '2016-04-21 20:54:44', '', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
