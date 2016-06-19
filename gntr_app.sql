-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2016 at 07:51 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gntr_app_anna`
--
CREATE DATABASE IF NOT EXISTS `gntr_app_anna` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `gntr_app_anna`;

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
(1, 'superadmin', 'ac43724f16e9241d990427ab7c8f4228', NULL, 'y', 0, '2016-06-19 05:59:04', '', '0000-00-00 00:00:00', '', '2016-06-19 03:59:04'),
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
  `bp_no` varchar(150) DEFAULT NULL,
  `bp_tgltransaksi` date NOT NULL,
  `bp_norekening` varchar(150) DEFAULT NULL,
  `bp_namarekening` varchar(150) DEFAULT NULL,
  `bp_noinvoice` varchar(150) DEFAULT NULL,
  `bp_tagihan` varchar(150) DEFAULT NULL,
  `bp_terbilang` varchar(150) DEFAULT NULL,
  `bp_jamtransaksi` varchar(150) DEFAULT NULL,
  `bp_jenistransaksi` varchar(150) DEFAULT NULL,
  `bp_entrydate` datetime NOT NULL,
  `bp_changedate` datetime NOT NULL,
  PRIMARY KEY (`bp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `gntrapp_bukti_pembayaran`
--

INSERT INTO `gntrapp_bukti_pembayaran` (`bp_id`, `bp_no`, `bp_tgltransaksi`, `bp_norekening`, `bp_namarekening`, `bp_noinvoice`, `bp_tagihan`, `bp_terbilang`, `bp_jamtransaksi`, `bp_jenistransaksi`, `bp_entrydate`, `bp_changedate`) VALUES
(5, 'BP01', '2016-05-31', '08721835129', NULL, '0', '125000', 'Seratus dua puluh lima ribu rupiah', '07:18:00', 'Cash', '2016-05-29 07:18:50', '2016-05-29 07:18:50'),
(6, 'BP02', '2016-06-27', '9234672094289', NULL, 'INV02', '13000', 'Tiga Belas Ribu Rupiah', '12:09:10', 'Cash', '2016-05-29 07:21:16', '2016-05-29 07:21:16'),
(7, 'BP03', '2016-06-23', '98238213016', 'Rosianna Silaban', '123', '15000', 'Seratus Lima Puluh Ribu Rupiah', '07:18:00', 'Cash', '2016-06-05 19:27:40', '2016-06-05 19:27:40');

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
  `inv_entrydate` datetime NOT NULL,
  `inv_changedate` datetime NOT NULL,
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
  `inv_entrydate` datetime NOT NULL,
  `inv_changedate` datetime NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `gntrapp_matauang`
--

INSERT INTO `gntrapp_matauang` (`mtua_id`, `mtua_nama`, `mtua_nilaitukar`, `mtua_negara`, `mtua_simbol`, `mtua_void`, `mtua_entryuser`, `mtua_entrydate`, `mtua_changeuser`, `mtua_changedate`) VALUES
(1, 'USD', 13595, 'Amerika Serikat', 'US$', 0, '', '2016-04-17 06:44:47', '', '2016-04-17 06:48:37'),
(2, 'asal', 100, 'demo', 'dm', 1, '', '2016-04-17 06:49:11', '', '2016-04-17 06:49:13');

-- --------------------------------------------------------

--
-- Table structure for table `gntrapp_pembelian_permintaan`
--

CREATE TABLE IF NOT EXISTS `gntrapp_pembelian_permintaan` (
  `pp_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pp_nama` varchar(250) DEFAULT NULL,
  `pp_email` varchar(250) DEFAULT NULL,
  `pp_alamat` varchar(250) DEFAULT NULL,
  `pp_telepon` varchar(100) DEFAULT NULL,
  `pp_keterangan` varchar(250) DEFAULT NULL,
  `pp_entrydate` datetime NOT NULL,
  `pp_changedate` datetime NOT NULL,
  PRIMARY KEY (`pp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `gntrapp_pembelian_permintaan`
--

INSERT INTO `gntrapp_pembelian_permintaan` (`pp_id`, `pp_nama`, `pp_email`, `pp_alamat`, `pp_telepon`, `pp_keterangan`, `pp_entrydate`, `pp_changedate`) VALUES
(1, 'Ana', 'rosianna_silaban@yahoo.com', 'Jl. Tanjung Blok A11 No.23', '085217614244', 'XXX', '2016-05-28 12:52:59', '2016-05-28 08:05:25'),
(2, 'Anna Silaban', 'silabanrosianna@gmail.com', 'Sidikalang', '085217614244', 'da', '2016-05-28 12:52:59', '2016-05-28 08:05:01'),
(3, 'Anna', 'rosianna_silaban@yahoo.com', 'Jl. Tanjung Blok A11 No.23', '085217614244', '0', '2016-05-28 12:52:59', '2016-05-28 12:52:59'),
(4, 'Anna', 'rosianna_silaban@yahoo.com', 'Jl. Tanjung Blok A11 No.23', '85217614244', 'xx', '2016-05-28 12:52:59', '2016-05-28 12:52:59'),
(5, 'dsad', '', '', '', '', '2016-05-29 05:00:53', '2016-05-29 05:00:53');

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
  `pbcr_no` varchar(150) NOT NULL,
  `pbcr_noproyek` varchar(250) DEFAULT NULL,
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
  `pbcr_entrydate` datetime NOT NULL,
  `pbcr_changedate` datetime NOT NULL,
  PRIMARY KEY (`pbcr_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `gntrapp_penjualan_beritaacara`
--

INSERT INTO `gntrapp_penjualan_beritaacara` (`pbcr_id`, `pbcr_no`, `pbcr_noproyek`, `pbcr_tghndari`, `pbcr_tagihan`, `pbcr_mtuang`, `pbcr_nilaitagihan`, `pbcr_lampiran`, `pbcr_tglkembali`, `pbcr_nobpkc`, `pbcr_tglbpkc`, `pbcr_menerima`, `pbcr_tglterima`, `pbcr_uploadfile`, `pbcr_entrydate`, `pbcr_changedate`) VALUES
(1, '123', '8796', '0', 'Anna', '0', '', 'Invoice Asli', '0000-00-00', '4543', '0000-00-00', 'Anna', '0000-00-00', 'beritaacara_4d09fe0.jpg', '2016-06-09 16:11:59', '2016-06-09 17:47:27'),
(3, '8796', 'jkhjh87967', '0', 'PT ABCD', '0', '89000000', 'Tanda Terima Asli + Quality Control Approval', '2016-06-29', '9786', '2016-06-22', 'Intan', '2016-06-20', 'beritaacara_1df6d11.jpg', '2016-06-09 16:28:01', '2016-06-09 17:47:41');

-- --------------------------------------------------------

--
-- Table structure for table `gntrapp_penjualan_bukti_pembayaran`
--

CREATE TABLE IF NOT EXISTS `gntrapp_penjualan_bukti_pembayaran` (
  `pbktp_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
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
  `pbktp_entrydate` datetime NOT NULL,
  `pbktp_changedate` datetime NOT NULL,
  PRIMARY KEY (`pbktp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `gntrapp_penjualan_bukti_pembayaran`
--

INSERT INTO `gntrapp_penjualan_bukti_pembayaran` (`pbktp_id`, `pbktp_tgltransaksi`, `pbktp_notransaksi`, `pbktp_norekening`, `pbktp_namakonsultan`, `pbktp_noinvoice`, `pbktp_totaltagihan`, `pbktp_terbilang`, `pbktp_jenistransaksi`, `pbktp_jamtransaksi`, `pbktp_channel`, `pbktp_userid`, `pbktp_uploadfile`, `pbktp_entrydate`, `pbktp_changedate`) VALUES
(1, '2016-06-22', '75989768', '76859867', 'Anna', 'INV12', '1500000', 'Satu Juta Lima Ratus Ribu Rupiah', 'Cash', '0000-00-00', NULL, '0000-00-00', 'buktipembayaran_379fdcd.jpg', '2016-06-09 18:45:02', '2016-06-09 18:45:02'),
(2, '2016-06-22', '75989768', '9786796', 'Anna', 'INV1', '78000', 'Tujuh Puluh Delapan Ribu Rupiah', 'Cash', '0000-00-00', NULL, '0000-00-00', 'buktipembayaran_641cec7.jpg', '2016-06-09 19:00:50', '2016-06-09 19:00:50');

-- --------------------------------------------------------

--
-- Table structure for table `gntrapp_penjualan_invoice`
--

CREATE TABLE IF NOT EXISTS `gntrapp_penjualan_invoice` (
  `pjinv_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
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
  `pjinv_entrydate` datetime NOT NULL,
  `pjinv_changedate` datetime NOT NULL,
  PRIMARY KEY (`pjinv_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `gntrapp_penjualan_invoice`
--

INSERT INTO `gntrapp_penjualan_invoice` (`pjinv_id`, `pjinv_tanggal`, `pjinv_noinvoice`, `pjinv_wo`, `pjinv_wotgl`, `pjinv_nopenawaran`, `pjinv_to`, `pjinv_alamat`, `pjinv_description`, `pjinv_totaltagihan`, `pjinv_terbilang`, `pjinv_entrydate`, `pjinv_changedate`) VALUES
(1, '2016-06-30', '0103/INV-XII/2015', 'PO-0660-JIND/PBM-001', '2016-06-29', 'SPH-0105/SAB-IX/2015', 'PT Maju Mundur 2', 'Jl. TB. Simatupang No. 7-B, Cilandak\nJakarta Selatan 12430, Indonesia\nPhone : 62 - 21-2997.6500. Fax: 62-21-2997.6599\nE-mail : indo@jgc-indonesia.com', 'Sewa 1 Unit Backhoe Loader, 1 Unit Vibro &amp; Dump Truck 7m3 + Mob Demob', '1500000', 'Satu Juta Lima Ratus Ribu Rupiah', '2016-06-08 05:43:23', '2016-06-08 07:00:42'),
(2, '2016-06-27', '0103/INV-XII/2016', '0103/WO-XII/2015', '2016-06-12', 'SPH-0105/SAB-IX/2015', NULL, NULL, 'XX', '2000000', 'Dua Juta Rupiah', '2016-06-08 05:46:08', '2016-06-08 05:46:08');

-- --------------------------------------------------------

--
-- Table structure for table `gntrapp_penjualan_invoice_detail`
--

CREATE TABLE IF NOT EXISTS `gntrapp_penjualan_invoice_detail` (
  `pjinvd_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pjinvd_invid` varchar(150) NOT NULL,
  `pjinvd_jenisbarang` varchar(150) DEFAULT NULL,
  `pjinvd_jumlah` varchar(150) DEFAULT NULL,
  `pjinvd_entrydate` datetime NOT NULL,
  `pjinvd_changedate` datetime NOT NULL,
  `pjinvd_brjs_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`pjinvd_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `gntrapp_penjualan_invoice_detail`
--

INSERT INTO `gntrapp_penjualan_invoice_detail` (`pjinvd_id`, `pjinvd_invid`, `pjinvd_jenisbarang`, `pjinvd_jumlah`, `pjinvd_entrydate`, `pjinvd_changedate`, `pjinvd_brjs_id`) VALUES
(1, '0103/INV-XII/2015', '1', '10', '2016-06-08 05:43:23', '2016-06-08 07:10:55', NULL),
(2, '0103/INV-XII/2015', '3', '3', '2016-06-08 05:43:23', '2016-06-08 07:11:04', NULL),
(4, '0103/INV-XII/2016', '', '', '2016-06-08 05:46:08', '2016-06-08 05:46:08', NULL),
(5, '0103/INV-XII/2016', '1', '20', '2016-06-08 05:46:08', '2016-06-08 05:46:08', NULL),
(6, '0103/INV-XII/2016', '3', '2', '2016-06-08 05:46:08', '2016-06-08 05:46:08', NULL),
(7, 'sdadas', '', '', '2016-06-08 07:11:50', '2016-06-08 07:11:50', NULL),
(8, 'sdadas', '3', '10', '2016-06-08 07:11:50', '2016-06-08 07:11:50', NULL),
(9, '', NULL, NULL, '2016-06-08 16:24:29', '2016-06-08 16:24:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gntrapp_penjualan_kwitansi`
--

CREATE TABLE IF NOT EXISTS `gntrapp_penjualan_kwitansi` (
  `pjkw_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pjkw_no` varchar(150) NOT NULL,
  `pjkw_dari` varchar(250) DEFAULT NULL,
  `pjkw_total` varchar(150) NOT NULL,
  `pjkw_bank` varchar(150) DEFAULT NULL,
  `pjkw_norek` varchar(250) DEFAULT NULL,
  `pjkw_an` varchar(250) DEFAULT NULL,
  `pjkw_alamat` varchar(250) DEFAULT NULL,
  `pjkw_notlpn` varchar(250) DEFAULT NULL,
  `pjkw_entrydate` datetime NOT NULL,
  `pjkw_changedate` datetime NOT NULL,
  `uploadfile` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`pjkw_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `gntrapp_penjualan_kwitansi`
--

INSERT INTO `gntrapp_penjualan_kwitansi` (`pjkw_id`, `pjkw_no`, `pjkw_dari`, `pjkw_total`, `pjkw_bank`, `pjkw_norek`, `pjkw_an`, `pjkw_alamat`, `pjkw_notlpn`, `pjkw_entrydate`, `pjkw_changedate`, `uploadfile`) VALUES
(1, '123', 'PT. ABC', '2500000', 'Bank Central Asia', '122387462', 'Rosianna Silaban', '                                                JL. Tanjung Blok A11                                        ', '085217614244', '2016-06-08 16:47:56', '2016-06-09 09:08:28', 'kwitansi_1285060.jpg');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `gntrapp_penjualan_penawaran`
--

INSERT INTO `gntrapp_penjualan_penawaran` (`ppnw_id`, `ppnw_no_penawaran`, `ppnw_no_pemesanan`, `ppnw_tanggal`, `ppnw_clnt_id`, `ppnw_status`, `ppnw_diskon`, `ppnw_pajak`, `ppnw_biaya_kirim`, `ppnw_nilai_faktur`, `ppnw_keterangan`, `ppnw_void`, `ppnw_entryuser`, `ppnw_entrydate`, `ppnw_changeuser`, `ppnw_changedate`) VALUES
(1, 'PNW-001', 'PMSN-001', '0000-00-00', 2, 1, 1000, 2000, 3000, 4000, 'test', 0, '', '2016-05-06 06:02:13', '', '2016-05-06 06:14:46'),
(2, 'PNW-002', 'PMSN-002', '0000-00-00', 2, 1, 1000, 2000, 3000, 4000, 'Lagi', 1, '', '2016-05-06 06:15:20', '', '2016-05-06 06:17:37'),
(3, '2', '', '0000-00-00', 3, 2, 12, 1222, 12222, 1345, 'ss', 0, '', '2016-05-28 08:24:17', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gntrapp_penjualan_permintaan`
--

CREATE TABLE IF NOT EXISTS `gntrapp_penjualan_permintaan` (
  `ppmt_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `ppmt_entrydate` datetime NOT NULL,
  `ppmt_changedate` datetime NOT NULL,
  `ppmt_fileupload` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`ppmt_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `gntrapp_penjualan_permintaan`
--

INSERT INTO `gntrapp_penjualan_permintaan` (`ppmt_id`, `ppmt_tanggal`, `ppmt_clnt_id`, `ppmt_void`, `ppmt_noso`, `ppmt_status`, `ppmt_nopo`, `ppmt_diskon`, `ppmt_pajak`, `ppmt_biayakirim`, `ppmt_nilaifaktur`, `ppmt_uangmuka`, `ppmt_keterangan`, `ppmt_entrydate`, `ppmt_changedate`, `ppmt_fileupload`) VALUES
(1, '2016-06-30', 0, 0, '12312', '', '34534', '12%', '10%', '12000', '12345000', '0', 'xx', '2016-06-06 10:49:53', '2016-06-06 15:49:53', NULL),
(2, '2016-07-30', 3, 0, '564564', '2', '4564', '12%', '10%', '12000', '12000000', '12000', 'proses cepat ya', '2016-06-06 10:55:44', '2016-06-09 08:15:24', 'file_e281fb1.png'),
(3, '2016-08-31', 2, 1, '4564', '1', '34', '13%', '10%', '12000', '4500', '3000', 'cc 1', '2016-06-06 11:03:32', '2016-06-07 16:37:16', NULL),
(4, '2016-08-25', 2, 1, '439576', '2', '123', '50%', '10%', '12000', '35000', '100000', 'proses cepat', '2016-06-07 16:39:17', '2016-06-07 18:43:00', NULL),
(11, '2016-06-30', 3, 0, '123`', '2', '123', '30%', '10%', '12000', '1200', '12000', 'cek xx', '2016-06-07 18:31:11', '2016-06-07 19:04:28', 'file_87aa681.jpg'),
(12, '2016-06-15', 3, 0, '2913', '2', '12', '', '10%', '12000', '12000000', '12000', 'cek', '2016-06-07 18:51:20', '2016-06-07 18:59:11', 'file_98e6cb3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gntrapp_penjualan_tandaterima`
--

CREATE TABLE IF NOT EXISTS `gntrapp_penjualan_tandaterima` (
  `pttr_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
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
  `pttr_entrydate` datetime NOT NULL,
  `pttr_changedate` datetime NOT NULL,
  PRIMARY KEY (`pttr_id`)
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
  `pp_entrydate` datetime NOT NULL,
  `pp_changedate` datetime NOT NULL,
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
(3, 'Vendor 3', 'Alamat 3', '0814', '021345', 'vendor3@mail.com', 1, 0, '', '2016-04-21 20:54:44', '', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
