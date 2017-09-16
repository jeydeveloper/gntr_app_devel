-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2017 at 09:36 AM
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

--
-- Dumping data for table `absen_tagihan`
--

INSERT INTO `absen_tagihan` (`id`, `grup`, `fname`, `hari1`, `hari2`, `hari3`, `hari4`, `hari5`, `hari6`, `hari7`, `hari8`, `hari9`, `hari10`, `hari11`, `hari12`, `hari13`, `hari14`, `hari15`, `hari16`, `hari17`, `hari18`, `hari19`, `hari20`, `hari21`, `hari22`, `hari23`, `hari24`, `hari25`, `hari26`, `hari27`, `hari28`, `hari29`, `hari30`, `hari31`) VALUES
(1, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'm', '', '', '', '', '', '', '', ''),
(3, NULL, '', '', '', '', '', '', '', '', '', '', '', '', 's', '', '', '', '', '', '', '', '', '', '', 'OFF', '', '', '', '', '', '', '', 'OFF');

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

--
-- Dumping data for table `gntrapp_adminuserlevels`
--

INSERT INTO `gntrapp_adminuserlevels` (`aulv_id`, `aulv_name`, `aulv_role_access`, `aulv_void`, `aulv_entryuser`, `aulv_entrydate`, `aulv_changeuser`, `aulv_changedate`) VALUES
(1, 'Direksi', 'a:17:{s:8:"pengguna";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:11:"wajib-pajak";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:10:"user-level";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:10:"departemen";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:19:"daftar-aktiva-tetap";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:19:"kas-bank-penerimaan";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:19:"kas-bank-pembayaran";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:15:"grafik-bank-bca";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:11:"daftar-akun";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:9:"mata-uang";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:16:"proyek-dashboard";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:8:"karyawan";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:7:"laporan";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:3:"bpu";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:9:"lain-lain";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:9:"penjualan";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:9:"pembelian";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}}', 0, '', '2017-09-06 17:12:39', '', NULL),
(2, 'Manager', 'a:14:{s:8:"pengguna";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:11:"wajib-pajak";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:10:"user-level";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:10:"departemen";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:19:"daftar-aktiva-tetap";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:19:"kas-bank-penerimaan";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:19:"kas-bank-pembayaran";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:11:"daftar-akun";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:8:"karyawan";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:7:"laporan";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:3:"bpu";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:9:"lain-lain";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:9:"penjualan";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}s:9:"pembelian";a:4:{s:6:"create";s:1:"1";s:4:"read";s:1:"1";s:6:"update";s:1:"1";s:6:"delete";s:1:"1";}}', 0, '', '2017-09-06 17:13:40', '', NULL);

--
-- Dumping data for table `gntrapp_adminusers`
--

INSERT INTO `gntrapp_adminusers` (`admusr_id`, `admusr_username`, `admusr_userpasswd`, `admusr_aulv_id`, `admusr_user_status`, `admusr_void`, `admusr_lastactivity`, `admusr_entryuser`, `admusr_entrydate`, `admusr_changeuser`, `admusr_changedate`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 'y', 0, '2017-09-16 09:08:44', '', '0000-00-00 00:00:00', '', NULL),
(2, 'Guntur', '30d8692c0d2ac50d082f20cfc4648206', 1, 'y', 0, '2017-09-06 17:14:15', '', '2017-09-06 17:14:07', '', NULL);

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

--
-- Dumping data for table `gntrapp_bpu`
--

INSERT INTO `gntrapp_bpu` (`bpu_id`, `bpu_request_by`, `bpu_nama`, `bpu_harga`, `bpu_terbilang`, `bpu_approved_by`, `bpu_proj_id`, `bpu_void`, `bpu_entryuser`, `bpu_entrydate`, `bpu_changeuser`, `bpu_changedate`) VALUES
(1, 'admin', 'Saham Juli 2017', 500000000, '', 'Andre Lestari', 0, 0, '', '2017-07-02 03:55:55', '', '0000-00-00 00:00:00'),
(2, 'admin', 'Saham Juli 2017', 500000000, '', 'Andre Lestari', 0, 0, '', '2017-07-02 03:56:12', '', '2017-07-02 03:56:30');

--
-- Dumping data for table `gntrapp_bukti_pembayaran`
--

INSERT INTO `gntrapp_bukti_pembayaran` (`bp_id`, `bp_pbttr_id`, `bp_pbinv_id`, `bp_pbsrtjalan_id`, `bp_pbkw_id`, `bp_pbptn_id`, `bp_no`, `bp_tgltransaksi`, `bp_norekening`, `bp_namarekening`, `bp_noinvoice`, `bp_tagihan`, `bp_terbilang`, `bp_jamtransaksi`, `bp_jenistransaksi`, `bp_entrydate`, `bp_changedate`) VALUES
(1, 1, 1, 1, 1, 1, 'BUKTIPEMBAYARAN/15/SEPT/2017', '2017-09-25', '0', '0', '0', '0', '0', '10.56', 'Transfer', NULL, NULL);

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

--
-- Dumping data for table `gntrapp_matauang`
--

INSERT INTO `gntrapp_matauang` (`mtua_id`, `mtua_nama`, `mtua_nilaitukar`, `mtua_negara`, `mtua_simbol`, `mtua_void`, `mtua_entryuser`, `mtua_entrydate`, `mtua_changeuser`, `mtua_changedate`) VALUES
(1, 'Rupiah', 1, 'Indonesia', 'Rp', 0, '', '2017-09-16 09:12:59', '', '0000-00-00 00:00:00');

--
-- Dumping data for table `gntrapp_pembelian_invoice`
--

INSERT INTO `gntrapp_pembelian_invoice` (`pbinv_id`, `pbinv_pbsrtjalan_id`, `pbinv_pbkw_id`, `pbinv_pbptn_id`, `pbinv_tanggal`, `pbinv_noinvoice`, `pbinv_wo`, `pbinv_wotgl`, `pbinv_nopenawaran`, `pbinv_to`, `pbinv_alamat`, `pbinv_description`, `pbinv_totaltagihan`, `pbinv_terbilang`, `uploadfile`, `pbinv_entrydate`, `pbinv_changedate`) VALUES
(1, 1, 1, 1, '2017-09-21', 'INV/15/SEPT/2017', '0', '0000-00-00', '0', '0', '0', 'Pelunasan Pembayaran', '0', '0', 'invoicepembelian_fd4c2dc.jpg', NULL, NULL);

--
-- Dumping data for table `gntrapp_pembelian_kwitansi`
--

INSERT INTO `gntrapp_pembelian_kwitansi` (`pbkw_id`, `pbkw_pbptn_id`, `pbkw_no`, `pbkw_dari`, `pbkw_total`, `pbkw_bank`, `pbkw_norek`, `pbkw_an`, `pbkw_alamat`, `pbkw_notlpn`, `pbkw_tipe_pembayaran`, `pbkw_transfer_from_bank`, `pbkw_entrydate`, `pbkw_changedate`, `uploadfile`) VALUES
(1, 1, 'KWITANSI/15/SEPT/2017', '0', '0', 'Bank BCA', '97597597', 'PT. Astra Honda Motor', '0', '0', 2, 1, NULL, NULL, 'kwitansi_pembelian_290f3bc.jpg');

--
-- Dumping data for table `gntrapp_pembelian_permintaan`
--

INSERT INTO `gntrapp_pembelian_permintaan` (`pbptn_id`, `pbptn_clnt_id`, `pbptn_vndr_id`, `pbptn_mtua_id`, `pbptn_tanggal`, `pbptn_no`, `pbptn_halaman`, `pbptn_matauang`, `pbptn_vendor`, `pbptn_proposalno`, `pbptn_projectcode`, `pbptn_buyer`, `pbptn_catatan`, `pbptn_terms`, `pbptn_tanggalditerima`, `pbptn_diterimaoleh`, `pbptn_namapenerima`, `pbptn_tanggalterima`, `pbptn_totaltagihan`, `pbptn_terbilang`, `pbptn_entrydate`, `pbptn_changedate`) VALUES
(1, 3, 4, 1, '2017-09-15', 'PERMINTAAN/15/SEPT/2017', '0', '0', '0', '', '', '0', '3 x Pembayaran', '', '0000-00-00', '0', 'Rudi', '0000-00-00', '0', '0', NULL, NULL);

--
-- Dumping data for table `gntrapp_pembelian_permintaan_detail`
--

INSERT INTO `gntrapp_pembelian_permintaan_detail` (`pbptnd_id`, `pbptnd_nopermintaan`, `pbptnd_jenisbarang`, `pbptnd_jumlah`, `pbptnd_entrydate`, `pbptnd_changedate`, `pbptnd_brjs_id`) VALUES
(1, 'PERMINTAAN/15/SEPT/2017', '4', '1000', NULL, NULL, NULL),
(2, 'PERMINTAAN/15/SEPT/2017', '', '', NULL, NULL, NULL);

--
-- Dumping data for table `gntrapp_pembelian_suratjalan`
--

INSERT INTO `gntrapp_pembelian_suratjalan` (`pbsrtjalan_id`, `pbsrtjalan_pbkw_id`, `pbsrtjalan_pbptn_id`, `pbsrtjalan_tanggal`, `pbsrtjalan_no`, `pbsrtjalan_halaman`, `pbsrtjalan_matauang`, `pbsrtjalan_vendor`, `pbsrtjalan_proposalno`, `pbsrtjalan_projectcode`, `pbsrtjalan_buyer`, `pbsrtjalan_catatan`, `pbsrtjalan_terms`, `pbsrtjalan_tanggalditerima`, `pbsrtjalan_diterimaoleh`, `pbsrtjalan_namapenerima`, `pbsrtjalan_tanggalterima`, `pbsrtjalan_totaltagihan`, `pbsrtjalan_nokendaraan`, `pbsrtjalan_terbilang`, `uploadfile`, `pbsrtjalan_entrydate`, `pbsrtjalan_changedate`) VALUES
(1, 1, 1, '2017-09-19', 'SPJ/15/SEPT/2017', '0', '1', '0', '0', '0', '0', '0', '0', '2017-09-16', '0', 'Joni', '0000-00-00', '0', 'B 8685 KSH', '0', 'suratjalan_2993a45.jpg', NULL, NULL);

--
-- Dumping data for table `gntrapp_pembelian_tandaterima`
--

INSERT INTO `gntrapp_pembelian_tandaterima` (`pbttr_id`, `pbttr_pbinv_id`, `pbttr_pbsrtjalan_id`, `pbttr_pbkw_id`, `pbttr_pbptn_id`, `pbttr_no`, `pbttr_noproyek`, `pbttr_tghndari`, `pbttr_tagihan`, `pbttr_mtuang`, `pbttr_nilaitagihan`, `pbttr_lampiran`, `pbttr_tglkembali`, `pbttr_nobpkc`, `pbttr_tglbpkc`, `pbttr_menerima`, `pbttr_tglterima`, `pbttr_uploadfile`, `pbttr_entrydate`, `pbttr_changedate`) VALUES
(1, 1, 1, 1, 1, 'TT/15/SEPT/2017', '0', 'Supplier', 'PT. Astra Honda Motor', '0', '0', 'a:6:{i:0;s:13:"Kwitansi Asli";i:1;s:12:"Invoice Asli";i:2;s:17:"Faktur Pajak Asli";i:3;s:16:"Surat Jalan Asli";i:4;s:44:"Tanda Terima Asli + Quality Control Approval";i:5;s:23:"Purchase Order Asli/SPK";}', '0000-00-00', '', '0000-00-00', 'Endang', '2017-09-16', NULL, NULL, NULL);

--
-- Dumping data for table `gntrapp_penerimaan`
--

INSERT INTO `gntrapp_penerimaan` (`pnrm_id`, `pnrm_bank_id`, `pnrm_tanggal`, `pnrm_akun_id`, `pnrm_nama`, `pnrm_jumlah`, `pnrm_keterangan`, `pnrm_void`, `pnrm_entryuser`, `pnrm_entrydate`, `pnrm_changeuser`, `pnrm_changedate`) VALUES
(1, 1, '2017-09-06', 0, 'PT. Pertamina', 14000000, 'Pelunasan', 0, '', '2017-09-06 16:53:21', '', '0000-00-00 00:00:00'),
(2, 1, '2017-09-04', 0, 'PT. Andalan Furnindo', 16000000, 'Pembayaran Proyek Termin I', 0, '', '2017-09-06 16:54:13', '', '0000-00-00 00:00:00');

--
-- Dumping data for table `gntrapp_pengeluaran`
--

INSERT INTO `gntrapp_pengeluaran` (`pgln_id`, `pgln_bank_id`, `pgln_tanggal`, `pgln_akun_id`, `pgln_nama`, `pgln_jumlah`, `pgln_keterangan`, `pgln_void`, `pgln_entryuser`, `pgln_entrydate`, `pgln_changeuser`, `pgln_changedate`) VALUES
(1, 1, '2017-07-10', 0, 'THR Karyawan', 10000000, '', 0, '', '2017-07-02 05:24:41', '', '0000-00-00 00:00:00');

--
-- Dumping data for table `gntrapp_penjualan_beritaacara`
--

INSERT INTO `gntrapp_penjualan_beritaacara` (`pbcr_id`, `pbcr_pjkw_id`, `pbcr_pjinv_id`, `pbcr_ppmt_id`, `pbcr_ppnw_id`, `pbcr_no`, `pbcr_noproyek`, `pbcr_deskripsi`, `pbcr_tglperjanjian`, `pbcr_tghndari`, `pbcr_tagihan`, `pbcr_mtuang`, `pbcr_nilaitagihan`, `pbcr_lampiran`, `pbcr_tglkembali`, `pbcr_nobpkc`, `pbcr_tglbpkc`, `pbcr_menerima`, `pbcr_tglterima`, `pbcr_uploadfile`, `pbcr_entrydate`, `pbcr_changedate`) VALUES
(1, 12, 11, 13, 14, '123', '12345', 'jfdkjfak', '2017-03-29', 'Supplier', 'darimana aja lah terserah lu', '0', '4343435', 'Kwitansi Asli', '0000-00-00', '', '0000-00-00', '', '0000-00-00', NULL, NULL, NULL),
(2, 1, 1, 1, 13, 'abcde', '123456', 'proyek apaan ini', '2017-03-22', 'Subcontractor', 'pt.angin ribut', '0', '0', 'Kwitansi Asli', '0000-00-00', '', '0000-00-00', '', '0000-00-00', NULL, NULL, NULL),
(3, 1, 1, 1, 13, '54321', '4354667', 'proyek apa aja lah', '2017-03-25', 'Subcontractor', 'darimana aja lah terserah lu', '0', '0', 'Kwitansi Asli', '0000-00-00', '', '0000-00-00', '', '0000-00-00', NULL, NULL, NULL);

--
-- Dumping data for table `gntrapp_penjualan_invoice`
--

INSERT INTO `gntrapp_penjualan_invoice` (`pjinv_id`, `pjinv_ppmt_id`, `pjinv_ppnw_id`, `pjinv_tanggal`, `pjinv_noinvoice`, `pjinv_wo`, `pjinv_wotgl`, `pjinv_nopenawaran`, `pjinv_to`, `pjinv_alamat`, `pjinv_description`, `pjinv_totaltagihan`, `pjinv_terbilang`, `pjinv_entrydate`, `pjinv_changedate`) VALUES
(1, 1, 13, '2017-03-31', '1234567', '0', '0000-00-00', '0', '0', '0', '', '0', '0', NULL, NULL);

--
-- Dumping data for table `gntrapp_penjualan_kwitansi`
--

INSERT INTO `gntrapp_penjualan_kwitansi` (`pjkw_id`, `pjkw_pjinv_id`, `pjkw_ppmt_id`, `pjkw_ppnw_id`, `pjkw_no`, `pjkw_dari`, `pjkw_total`, `pjkw_bank`, `pjkw_keterangan_print_out`, `pjkw_norek`, `pjkw_an`, `pjkw_alamat`, `pjkw_notlpn`, `pjkw_entrydate`, `pjkw_changedate`, `uploadfile`) VALUES
(1, 1, 1, 13, 'aqw1q212', '0', '0', '2', '', '0', '0', '0', '0', NULL, NULL, NULL);

--
-- Dumping data for table `gntrapp_penjualan_penawaran`
--

INSERT INTO `gntrapp_penjualan_penawaran` (`ppnw_id`, `ppnw_no_penawaran`, `ppnw_no_pemesanan`, `ppnw_tanggal`, `ppnw_clnt_id`, `ppnw_status`, `ppnw_diskon`, `ppnw_pajak`, `ppnw_biaya_kirim`, `ppnw_nilai_faktur`, `ppnw_keterangan`, `ppnw_keterangan_print_out`, `ppnw_void`, `ppnw_entryuser`, `ppnw_entrydate`, `ppnw_changeuser`, `ppnw_changedate`) VALUES
(12, '3232323', '323232', '2017-02-15', 12, 1, 12, 212, 2121, 212121, '', '', 127, '21212', '2017-02-17 00:00:00', '', '2017-02-16 00:00:00'),
(13, 'PENAWARAN/15/SEPT/2017', '', '2017-09-08', 3, 2, 0, 0, 5000000, 48700000, 'Penawaran Pintu Sorong Baja 5 unit', '<p><strong>Lorem ipsum dolor sit amet</strong>, consectetur adipiscing elit. Curabitur pulvinar eget leo ut sollicitudin. Cras sit amet nulla mollis, dignissim lorem non, porttitor tellus. In quis tincidunt lacus. Nunc ligula eros, vehicula quis nisi id, pulvinar aliquam elit. Curabitur vehicula erat vel risus condimentum interdum. Maecenas rhoncus, ipsum in sodales convallis, neque nisl fringilla lectus, vel viverra augue velit sit amet quam. Proin non consectetur velit. Sed maximus feugiat laoreet. Nunc eu ex venenatis, <em>tempor eros sed</em>, volutpat orci. In mollis vel ipsum luctus aliquam. Nunc augue libero, ultrices eget ligula ac, rhoncus imperdiet sem. Nulla venenatis, risus eu posuere gravida, dui odio tincidunt ex, id dignissim nulla eros accumsan leo. In at purus quis nisl laoreet molestie. Morbi pretium metus risus, <strong>quis mattis nulla blandit non</strong>.</p>', 0, '', '2017-09-16 09:34:41', '', '0000-00-00 00:00:00');

--
-- Dumping data for table `gntrapp_penjualan_penawaran_detail`
--

INSERT INTO `gntrapp_penjualan_penawaran_detail` (`ppnwd_id`, `ppnwd_no_penawaran`, `ppnwd_deskripsi_id`, `ppnwd_jenisbarang`, `ppnwd_jenisbarang_id`, `ppnwd_volume`, `ppnwd_satuan`, `ppnwd_hargasatuan`, `ppnwd_entrydate`, `ppnwd_changedate`) VALUES
(1, 's423232dw', '', 'lkjbljbl', 1, '', 'ljblojbLJB', '8698698', NULL, NULL),
(2, 's423232dw', '', 'lkjbljbl', 1, '', 'ljblojbLJB', '8698698', NULL, NULL),
(3, 'PENAWARAN/15/SEPT/2017', 'Penawaran pintu sorong baja', 'Pintu Sorong Baja Type 2.a Uk. (b=0,6-0,8) Dan (h=0,3- 1) M', 8, '5', 'Unit', '8470000', NULL, NULL),
(4, 'PENAWARAN/15/SEPT/2017', '', '', 0, '', '', '0', NULL, NULL);

--
-- Dumping data for table `gntrapp_penjualan_permintaan`
--

INSERT INTO `gntrapp_penjualan_permintaan` (`ppmt_id`, `ppmt_ppnw_id`, `ppmt_tanggal`, `ppmt_clnt_id`, `ppmt_void`, `ppmt_noso`, `ppmt_status`, `ppmt_nopo`, `ppmt_diskon`, `ppmt_pajak`, `ppmt_biayakirim`, `ppmt_nilaifaktur`, `ppmt_uangmuka`, `ppmt_keterangan`, `ppmt_entrydate`, `ppmt_changedate`, `ppmt_fileupload`) VALUES
(1, 13, '2017-03-24', 1, 0, '12345', '2', '0', '0', '0', '0', '0', '12345', 'dsd', '2017-03-09 17:11:53', NULL, NULL);

--
-- Dumping data for table `gntrapp_project`
--

INSERT INTO `gntrapp_project` (`proj_id`, `proj_clnt_id`, `proj_vndr_id`, `proj_nama`, `proj_nilai`, `proj_jangka_waktu`, `proj_cp_client`, `proj_telpon_client`, `proj_cp_vendor`, `proj_telpon_vendor`, `proj_list_barang`, `proj_status`, `proj_void`, `proj_entryuser`, `proj_entrydate`, `proj_changeuser`, `proj_changedate`) VALUES
(1, 1, 1, 'apa aja', 42423423, '12', '', '', '', '', '1', 2, 1, '', '2017-03-09 16:43:34', '', '2017-09-06 17:09:20'),
(2, 4, 2, 'Pemasangan Listrik Koperasi HP Indonesia', 50000000, 'Oktober - Desember 2017', '', '', '', '', '2', 2, 0, '', '2017-09-06 17:10:52', '', '0000-00-00 00:00:00');

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

--
-- Dumping data for table `insentif_hariraya`
--

INSERT INTO `insentif_hariraya` (`id`, `grup`, `fname`, `insen1`, `insen2`, `insen3`, `insen4`, `insen5`, `totalhari`, `perhari`, `jumlah`, `ket`) VALUES
(1, 'Group1', 'Guntur', '200000', '200000', '200000', '200000', '200000', '5', '100000', '209392191919', 'lembur');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
