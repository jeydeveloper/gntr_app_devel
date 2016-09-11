-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2016 at 06:18 AM
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
  `aulv_role_access` text NOT NULL,
  `aulv_void` tinyint(4) NOT NULL,
  `aulv_entryuser` varchar(100) CHARACTER SET latin1 NOT NULL,
  `aulv_entrydate` datetime NOT NULL,
  `aulv_changeuser` varchar(100) CHARACTER SET latin1 NOT NULL,
  `aulv_changedate` datetime DEFAULT NULL,
  PRIMARY KEY (`aulv_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

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
  `pjkw_norek` varchar(250) DEFAULT NULL,
  `pjkw_an` varchar(250) DEFAULT NULL,
  `pjkw_alamat` varchar(250) DEFAULT NULL,
  `pjkw_notlpn` varchar(250) DEFAULT NULL,
  `pjkw_entrydate` datetime DEFAULT NULL,
  `pjkw_changedate` datetime DEFAULT NULL,
  `uploadfile` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`pjkw_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
