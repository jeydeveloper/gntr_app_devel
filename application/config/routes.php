<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

/* Routing untuk Backstage */
$route['default_controller'] = "frontend_home/home";

//route pengguna
$route['pengguna'] = "frontend_user/user";
$route['pengguna/add'] = "frontend_user/user/add";
$route['pengguna/edit/(:any)'] = "frontend_user/user/edit/$1";
$route['pengguna/delete/(:any)'] = "frontend_user/user/delete/$1";

$route['wajib-pajak'] = "frontend_wajibpajak/wajibpajak";

//route user level
$route['user-level'] = "frontend_userlevel/userlevel";
$route['user-level/add'] = "frontend_userlevel/userlevel/add";
$route['user-level/edit/(:any)'] = "frontend_userlevel/userlevel/edit/$1";
$route['user-level/delete/(:any)'] = "frontend_userlevel/userlevel/delete/$1";

//route departemen
$route['departemen'] = "frontend_departemen/departemen";
$route['departemen/add'] = "frontend_departemen/departemen/add";
$route['departemen/edit/(:any)'] = "frontend_departemen/departemen/edit/$1";
$route['departemen/delete/(:any)'] = "frontend_departemen/departemen/delete/$1";

//route daftar aktiva tetap
$route['daftar-aktiva-tetap'] = "frontend_daftaraktivatetap/daftaraktivatetap";
$route['daftar-aktiva-tetap/add'] = "frontend_daftaraktivatetap/daftaraktivatetap/add";
$route['daftar-aktiva-tetap/edit/(:any)'] = "frontend_daftaraktivatetap/daftaraktivatetap/edit/$1";
$route['daftar-aktiva-tetap/delete/(:any)'] = "frontend_daftaraktivatetap/daftaraktivatetap/delete/$1";

//route kas bank penerimaan
$route['kas-bank-penerimaan'] = "frontend_kasbankpenerimaan/kasbankpenerimaan";
$route['kas-bank-penerimaan/add'] = "frontend_kasbankpenerimaan/kasbankpenerimaan/add";
$route['kas-bank-penerimaan/edit/(:any)'] = "frontend_kasbankpenerimaan/kasbankpenerimaan/edit/$1";
$route['kas-bank-penerimaan/delete/(:any)'] = "frontend_kasbankpenerimaan/kasbankpenerimaan/delete/$1";
$route['kas-bank-penerimaan/terbilang/(:any)'] = "frontend_kasbankpenerimaan/kasbankpenerimaan/terbilang/$1";

//route kas bank pembayaran
$route['kas-bank-pembayaran'] = "frontend_kasbankpembayaran/kasbankpembayaran";
$route['kas-bank-pembayaran/add'] = "frontend_kasbankpembayaran/kasbankpembayaran/add";
$route['kas-bank-pembayaran/edit/(:any)'] = "frontend_kasbankpembayaran/kasbankpembayaran/edit/$1";
$route['kas-bank-pembayaran/delete/(:any)'] = "frontend_kasbankpembayaran/kasbankpembayaran/delete/$1";
$route['kas-bank-pembayaran/terbilang/(:any)'] = "frontend_kasbankpembayaran/kasbankpembayaran/terbilang/$1";

$route['grafik-bank-bca'] = "frontend_grafikbankbca/grafikbankbca";

//route daftar akun
$route['daftar-akun'] = "frontend_daftarakun/daftarakun";
$route['daftar-akun/add'] = "frontend_daftarakun/daftarakun/add";
$route['daftar-akun/edit/(:any)'] = "frontend_daftarakun/daftarakun/edit/$1";
$route['daftar-akun/delete/(:any)'] = "frontend_daftarakun/daftarakun/delete/$1";

//route mata uang
$route['mata-uang'] = "frontend_matauang/matauang";
$route['mata-uang/add'] = "frontend_matauang/matauang/add";
$route['mata-uang/edit/(:any)'] = "frontend_matauang/matauang/edit/$1";
$route['mata-uang/delete/(:any)'] = "frontend_matauang/matauang/delete/$1";

//route project
$route['project'] = "frontend_project/project";
$route['project/add'] = "frontend_project/project/add";
$route['project/edit/(:any)'] = "frontend_project/project/edit/$1";
$route['project/delete/(:any)'] = "frontend_project/project/delete/$1";
$route['project/referensi_vendor/(:any)'] = "frontend_project/project/referensi_vendor/$1";
$route['project/referensi_client/(:any)'] = "frontend_project/project/referensi_client/$1";

//route vendor
$route['vendor'] = "frontend_vendor/vendor";
$route['vendor/add'] = "frontend_vendor/vendor/add";
$route['vendor/edit/(:any)'] = "frontend_vendor/vendor/edit/$1";
$route['vendor/delete/(:any)'] = "frontend_vendor/vendor/delete/$1";

//route client
$route['client'] = "frontend_client/client";
$route['client/add'] = "frontend_client/client/add";
$route['client/edit/(:any)'] = "frontend_client/client/edit/$1";
$route['client/delete/(:any)'] = "frontend_client/client/delete/$1";

//route barang jasa
$route['barang-jasa'] = "frontend_barangjasa/barangjasa";
$route['barang-jasa/add'] = "frontend_barangjasa/barangjasa/add";
$route['barang-jasa/edit/(:any)'] = "frontend_barangjasa/barangjasa/edit/$1";
$route['barang-jasa/delete/(:any)'] = "frontend_barangjasa/barangjasa/delete/$1";
$route['barang-jasa/data_barang/(:any)'] = "frontend_barangjasa/barangjasa/data_barang/$1";

$route['proyek-dashboard'] = "frontend_proyekdashboard/proyekdashboard";

//route lain-lain
$route['lain-lain'] = "frontend_lainlain/lainlain";
$route['lain-lain/add'] = "frontend_lainlain/lainlain/add";
$route['lain-lain/edit/(:any)'] = "frontend_lainlain/lainlain/edit/$1";
$route['lain-lain/delete/(:any)'] = "frontend_lainlain/lainlain/delete/$1";
$route['lain-lain/terbilang/(:any)'] = "frontend_lainlain/lainlain/terbilang/$1";

//route BPU
$route['bpu'] = "frontend_bpu/bpu";
$route['bpu/add'] = "frontend_bpu/bpu/add";
$route['bpu/edit/(:any)'] = "frontend_bpu/bpu/edit/$1";
$route['bpu/delete/(:any)'] = "frontend_bpu/bpu/delete/$1";
$route['bpu/terbilang/(:any)'] = "frontend_bpu/bpu/terbilang/$1";

$route['laporan'] = "frontend_laporan/laporan";
$route['laporan/keuangan_neraca'] = "frontend_laporan/laporan/keuangan_neraca";
$route['laporan/keuangan_general_report'] = "frontend_laporan/laporan/keuangan_general_report";
$route['laporan/keuangan_grafik_akun'] = "frontend_laporan/laporan/keuangan_grafik_akun";
$route['laporan/keuangan_grafik_pendapatan'] = "frontend_laporan/laporan/keuangan_grafik_pendapatan";
$route['laporan/penjualan_client'] = "frontend_laporan/laporan/penjualan_client";
$route['laporan/penjualan_barang'] = "frontend_laporan/laporan/penjualan_barang";
$route['laporan/penjualan_grafik_barang'] = "frontend_laporan/laporan/penjualan_grafik_barang";
$route['laporan/penjualan_grafik_client'] = "frontend_laporan/laporan/penjualan_grafik_client";
$route['laporan/pembelian_barang'] = "frontend_laporan/laporan/pembelian_barang";
$route['laporan/pembelian_vendor'] = "frontend_laporan/laporan/pembelian_vendor";
$route['laporan/pembelian_grafik_barang'] = "frontend_laporan/laporan/pembelian_grafik_barang";
$route['laporan/pembelian_grafik_vendor'] = "frontend_laporan/laporan/pembelian_grafik_vendor";

//route karyawan
$route['karyawan'] = "frontend_karyawan/karyawan";
$route['karyawan/add'] = "frontend_karyawan/karyawan/add";
$route['karyawan/edit/(:any)'] = "frontend_karyawan/karyawan/edit/$1";
$route['karyawan/delete/(:any)'] = "frontend_karyawan/karyawan/delete/$1";

//route absen karyawan
$route['karyawan/absen'] = "frontend_karyawan/karyawan/absen";
$route['karyawan/absen/add'] = "frontend_karyawan/karyawan/add_absen";
$route['karyawan/absen/edit/(:any)'] = "frontend_karyawan/karyawan/edit_absen/$1";

//route gaji karyawan
$route['karyawan/gaji'] = "frontend_karyawan/karyawan/gaji";
$route['karyawan/gaji/add'] = "frontend_karyawan/karyawan/add_gaji";
$route['karyawan/gaji/edit/(:any)'] = "frontend_karyawan/karyawan/edit_gaji/$1";

//route pph-21 karyawan
$route['karyawan/pph-21'] = "frontend_karyawan/karyawan/pph_21";
$route['karyawan/pph-21/add'] = "frontend_karyawan/karyawan/add_pph_21";
$route['karyawan/pph-21/edit/(:any)'] = "frontend_karyawan/karyawan/edit_pph_21/$1";

//route module pembelian
$route['pembelian'] = "frontend_pembelian/pembelian";

//route permintaan pembelian
$route['pembelian/permintaan'] = "frontend_pembelian/pembelian/permintaan";
$route['pembelian/permintaan/grafik'] = "frontend_pembelian/pembelian/grafik_permintaan";
$route['pembelian/permintaan/add'] = "frontend_pembelian/pembelian/add_permintaan";
$route['pembelian/permintaan/edit/(:any)'] = "frontend_pembelian/pembelian/edit_permintaan/$1";
$route['pembelian/permintaan/delete/(:any)'] = "frontend_pembelian/pembelian/delete_permintaan/$1";
$route['pembelian/permintaan/pdf/(:any)'] = "frontend_pembelian/pembelian/pdf_permintaan/$1";

//route pembelian referensi
$route['pembelian/referensi/(:any)'] = "frontend_pembelian/pembelian/referensi/$1";
$route['pembelian/referensi_kwitansi/(:any)'] = "frontend_pembelian/pembelian/referensi_kwitansi/$1";
$route['pembelian/referensi_suratjalan/(:any)'] = "frontend_pembelian/pembelian/referensi_suratjalan/$1";
$route['pembelian/referensi_invoice/(:any)'] = "frontend_pembelian/pembelian/referensi_invoice/$1";
$route['pembelian/referensi_tandaterima/(:any)'] = "frontend_pembelian/pembelian/referensi_tandaterima/$1";

//route penjualan referensi
$route['penjualan/referensi_penawaran/(:any)'] = "frontend_penjualan/penjualan/referensi_penawaran/$1";
$route['penjualan/referensi_permintaan/(:any)'] = "frontend_penjualan/penjualan/referensi_permintaan/$1";
$route['penjualan/referensi_invoice/(:any)'] = "frontend_penjualan/penjualan/referensi_invoice/$1";
$route['penjualan/referensi_kwitansi/(:any)'] = "frontend_penjualan/penjualan/referensi_kwitansi/$1";
$route['penjualan/referensi_beritaacara/(:any)'] = "frontend_penjualan/penjualan/referensi_beritaacara/$1";
$route['penjualan/referensi_tandaterima/(:any)'] = "frontend_penjualan/penjualan/referensi_tandaterima/$1";

//route pembelian info barang
$route['pembelian/info_barang/(:any)'] = "frontend_pembelian/pembelian/info_barang/$1";
$route['penjualan/info_barang/(:any)'] = "frontend_penjualan/penjualan/info_barang/$1";

//route permintaan pembelian
$route['pembelian/kwitansi'] = "frontend_pembelian/pembelian/kwitansi";
$route['pembelian/kwitansi/add'] = "frontend_pembelian/pembelian/add_kwitansi";
$route['pembelian/kwitansi/edit/(:any)'] = "frontend_pembelian/pembelian/edit_kwitansi/$1";
$route['pembelian/kwitansi/delete/(:any)'] = "frontend_pembelian/pembelian/delete_kwitansi/$1";
$route['pembelian/kwitansi/pdf/(:any)'] = "frontend_pembelian/pembelian/pdf_kwitansi/$1";


//route surat jalan pembelian
$route['pembelian/surat-jalan'] = "frontend_pembelian/pembelian/surat_jalan";
$route['pembelian/surat-jalan/add'] = "frontend_pembelian/pembelian/add_surat_jalan";
$route['pembelian/surat-jalan/edit/(:any)'] = "frontend_pembelian/pembelian/edit_surat_jalan/$1";
$route['pembelian/surat-jalan/pdf/(:any)'] = "frontend_pembelian/pembelian/pdf_surat_jalan/$1";
$route['pembelian/surat-jalan/delete/(:any)'] = "frontend_pembelian/pembelian/delete_surat_jalan/$1";

//route invoice pembelian
$route['pembelian/invoice'] = "frontend_pembelian/pembelian/invoice";
$route['pembelian/invoice/add'] = "frontend_pembelian/pembelian/add_invoice";
$route['pembelian/invoice/detail/add'] = "frontend_pembelian/pembelian/add_invoice_detail";
$route['pembelian/invoice/edit/(:any)'] = "frontend_pembelian/pembelian/edit_invoice/$1";
$route['pembelian/invoice/pdf/(:any)'] = "frontend_pembelian/pembelian/pdf_invoice/$1";
$route['pembelian/invoice/delete/(:any)'] = "frontend_pembelian/pembelian/delete_invoice/$1";

//route tanda terima pembelian
$route['pembelian/tanda-terima'] = "frontend_pembelian/pembelian/tanda_terima";
$route['pembelian/tanda-terima/add'] = "frontend_pembelian/pembelian/add_tanda_terima";
$route['pembelian/tanda-terima/edit/(:any)'] = "frontend_pembelian/pembelian/edit_tanda_terima/$1";
$route['pembelian/tanda-terima/delete/(:any)'] = "frontend_pembelian/pembelian/delete_tanda_terima/$1";
$route['pembelian/tanda-terima/pdf/(:any)'] = "frontend_pembelian/pembelian/pdf_tanda_terima/$1";


//route bukti pembayaran pembelian
$route['pembelian/bukti-pembayaran'] = "frontend_pembelian/pembelian/bukti_pembayaran";
$route['pembelian/bukti-pembayaran/add'] = "frontend_pembelian/pembelian/add_bukti_pembayaran";
$route['pembelian/bukti-pembayaran/edit/(:any)'] = "frontend_pembelian/pembelian/edit_bukti_pembayaran/$1";
$route['pembelian/bukti-pembayaran/pdf/(:any)'] = "frontend_pembelian/pembelian/pdf_bukti_pembayaran/$1";
$route['pembelian/bukti-pembayaran/delete/(:any)'] = "frontend_pembelian/pembelian/delete_bukti_pembayaran/$1";


$route['penjualan'] = "frontend_penjualan/penjualan";

//route penawaran penjualan
$route['penjualan/penawaran'] = "frontend_penjualan/penjualan/penawaran";
$route['penjualan/penawaran/add'] = "frontend_penjualan/penjualan/add_penawaran";
$route['penjualan/penawaran/edit/(:any)'] = "frontend_penjualan/penjualan/edit_penawaran/$1";
$route['penjualan/penawaran/delete/(:any)'] = "frontend_penjualan/penjualan/delete_penawaran/$1";
$route['penjualan/penawaran/pdf/(:any)'] = "frontend_penjualan/penjualan/pdf_penawaran/$1";

//route permintaan penjualan
$route['penjualan/permintaan'] = "frontend_penjualan/penjualan/permintaan";
$route['penjualan/permintaan/add'] = "frontend_penjualan/penjualan/add_permintaan";
$route['penjualan/permintaan/edit/(:any)'] = "frontend_penjualan/penjualan/edit_permintaan/$1";
$route['penjualan/permintaan/delete/(:any)'] = "frontend_penjualan/penjualan/delete_permintaan/$1";
$route['penjualan/permintaan/pdf/(:any)'] = "frontend_penjualan/penjualan/pdf_permintaan";

//route invoice penjualan
$route['penjualan/invoice'] = "frontend_penjualan/penjualan/invoice";
$route['penjualan/invoice/add'] = "frontend_penjualan/penjualan/add_invoice";
$route['penjualan/invoice/edit/(:any)'] = "frontend_penjualan/penjualan/edit_invoice/$1";
$route['penjualan/invoice/pdf/(:any)'] = "frontend_penjualan/penjualan/pdf_invoice/$1";
$route['penjualan/invoice/delete/(:any)'] = "frontend_penjualan/penjualan/delete_invoice/$1";

//route kwitansi penjualan
$route['penjualan/kwitansi'] = "frontend_penjualan/penjualan/kwitansi";
$route['penjualan/kwitansi/add'] = "frontend_penjualan/penjualan/add_kwitansi";
$route['penjualan/kwitansi/edit/(:any)'] = "frontend_penjualan/penjualan/edit_kwitansi/$1";
$route['penjualan/kwitansi/delete/(:any)'] = "frontend_penjualan/penjualan/delete_kwitansi/$1";
$route['penjualan/kwitansi/pdf/(:any)'] = "frontend_penjualan/penjualan/pdf_kwitansi/$1";

//route berita acara penjualan
$route['penjualan/berita-acara'] = "frontend_penjualan/penjualan/berita_acara";
$route['penjualan/berita-acara/add'] = "frontend_penjualan/penjualan/add_berita_acara";
$route['penjualan/berita-acara/edit/(:any)'] = "frontend_penjualan/penjualan/edit_berita_acara/$1";
$route['penjualan/berita-acara/delete/(:any)'] = "frontend_penjualan/penjualan/delete_berita_acara/$1";
$route['penjualan/berita-acara/pdf/(:any)'] = "frontend_penjualan/penjualan/pdf_berita_acara/$1";

$route['penjualan/berita-acara-insentif-hari-raya/(:any)'] = "frontend_penjualan/beritaacara/insentif_hari_raya/$1";
$route['penjualan/berita-acara-absen-tagihan-ot/(:any)'] = "frontend_penjualan/beritaacara/tagihan_ot/$1";
$route['penjualan/berita-acara-absen-gajian/(:any)'] = "frontend_penjualan/beritaacara/absen_gajian/$1";
$route['penjualan/berita-acara-absen-tagihan/(:any)'] = "frontend_penjualan/beritaacara/absen_tagihan/$1";
$route['penjualan/berita-acara-slip-gaji/(:any)'] = "frontend_penjualan/beritaacara/slip_gaji/$1";
$route['penjualan/berita-acara-rekap/(:any)'] = "frontend_penjualan/beritaacara/rekap/$1";
$route['penjualan/berita-acara-kasbon-operator/(:any)'] = "frontend_penjualan/beritaacara/kasbon_operator/$1";
$route['penjualan/berita-acara-ops/(:any)'] = "frontend_penjualan/beritaacara/ops/$1";
$route['penjualan/berita-acara-bpjs/(:any)'] = "frontend_penjualan/beritaacara/bpjs/$1";
$route['penjualan/berita-acara-aplikasi-setoran/(:any)'] = "frontend_penjualan/beritaacara/aplikasi_setoran/$1";

$route['penjualan/berita-acara-peserta/detail/(:any)'] = "frontend_penjualan/beritaacara/peserta/$1";
$route['penjualan/berita-acara-peserta/load-peserta/(:any)'] = "frontend_penjualan/beritaacara/load_peserta/$1";
$route['penjualan/berita-acara-peserta/add'] = "frontend_penjualan/beritaacara/save_peserta";
$route['penjualan/berita-acara-peserta/delete'] = "frontend_penjualan/beritaacara/delete_peserta";

//route tenda terima penjualan
$route['penjualan/tanda-terima'] = "frontend_penjualan/penjualan/tanda_terima";
$route['penjualan/tanda-terima/add'] = "frontend_penjualan/penjualan/add_tanda_terima";
$route['penjualan/tanda-terima/edit/(:any)'] = "frontend_penjualan/penjualan/edit_tanda_terima/$1";
$route['penjualan/tanda-terima/delete/(:any)'] = "frontend_penjualan/penjualan/delete_tanda_terima/$1";

//route bukti pemebayaran penjualan
$route['penjualan/bukti-pembayaran'] = "frontend_penjualan/penjualan/bukti_pembayaran";
$route['penjualan/bukti-pembayaran/add'] = "frontend_penjualan/penjualan/add_bukti_pembayaran";
$route['penjualan/bukti-pembayaran/edit/(:any)'] = "frontend_penjualan/penjualan/edit_bukti_pembayaran/$1";
$route['penjualan/bukti-pembayaran/delete/(:any)'] = "frontend_penjualan/penjualan/delete_bukti_pembayaran/$1";
$route['penjualan/bukti-pembayaran/pdf/(:any)'] = "frontend_penjualan/penjualan/pdf_bukti_pembayaran/$1";

//login and logout
$route['login'] 				= "frontend_login/login";
$route['login/ajax_submit'] 	= "frontend_login/login/ajax_submit";
$route['logout'] 				= "frontend_logout/logout";

$route['404_override'] = '';

/* End of file routes.php */
/* Location: ./application/config/routes.php */