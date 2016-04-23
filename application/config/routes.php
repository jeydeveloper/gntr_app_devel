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

$route['kas-bank-penerimaan'] = "frontend_kasbankpenerimaan/kasbankpenerimaan";
$route['kas-bank-pembayaran'] = "frontend_kasbankpembayaran/kasbankpembayaran";
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

$route['proyek-dashboard'] = "frontend_proyekdashboard/proyekdashboard";

//route lain-lain
$route['lain-lain'] = "frontend_lainlain/lainlain";
$route['lain-lain/add'] = "frontend_lainlain/lainlain/add";
$route['lain-lain/edit/(:any)'] = "frontend_lainlain/lainlain/edit/$1";
$route['lain-lain/delete/(:any)'] = "frontend_lainlain/lainlain/delete/$1";

$route['bpu'] = "frontend_bpu/bpu";
$route['laporan'] = "frontend_laporan/laporan";

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
$route['pembelian/permintaan'] = "frontend_pembelian/pembelian/permintaan";
$route['pembelian/kwitansi'] = "frontend_pembelian/pembelian/kwitansi";
$route['pembelian/surat-jalan'] = "frontend_pembelian/pembelian/suratJalan";
$route['pembelian/invoice'] = "frontend_pembelian/pembelian/invoice";
$route['pembelian/tanda-terima'] = "frontend_pembelian/pembelian/tandaTerima";
$route['pembelian/bukti-pembayaran'] = "frontend_pembelian/pembelian/buktiPembayaran";

$route['penjualan'] = "frontend_penjualan/penjualan";
$route['penjualan/penawaran'] = "frontend_penjualan/penjualan/penawaran";
$route['penjualan/permintaan'] = "frontend_penjualan/penjualan/permintaan";
$route['penjualan/invoice'] = "frontend_penjualan/penjualan/invoice";
$route['penjualan/kwitansi'] = "frontend_penjualan/penjualan/kwitansi";
$route['penjualan/berita-acara'] = "frontend_penjualan/penjualan/beritaAcara";
$route['penjualan/tanda-terima'] = "frontend_penjualan/penjualan/tandaTerima";
$route['penjualan/bukti-pembayaran'] = "frontend_penjualan/penjualan/buktiPembayaran";

//login and logout
$route['login'] 				= "frontend_login/login";
$route['login/ajax_submit'] 	= "frontend_login/login/ajax_submit";
$route['logout'] 				= "frontend_logout/logout";

$route['404_override'] = '';

/* End of file routes.php */
/* Location: ./application/config/routes.php */