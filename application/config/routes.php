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

$route['wajib-pajak'] = "frontend_wajibpajak/wajibpajak";

//route user level
$route['user-level'] = "frontend_userlevel/userlevel";
$route['user-level/add'] = "frontend_userlevel/userlevel/add";
$route['user-level/edit/(:any)'] = "frontend_userlevel/userlevel/edit/$1";
$route['user-level/delete/(:any)'] = "frontend_userlevel/userlevel/delete/$1";

//route departemen
$route['departemen'] = "frontend_departemen/departemen";
$route['departemen/add'] = "frontend_departemen/departemen/add";

//route daftar aktiva tetap
$route['daftar-aktiva-tetap'] = "frontend_daftaraktivatetap/daftaraktivatetap";
$route['daftar-aktiva-tetap/add'] = "frontend_daftaraktivatetap/daftaraktivatetap/add";

$route['kas-bank-penerimaan'] = "frontend_kasbankpenerimaan/kasbankpenerimaan";
$route['kas-bank-pembayaran'] = "frontend_kasbankpembayaran/kasbankpembayaran";
$route['grafik-bank-bca'] = "frontend_grafikbankbca/grafikbankbca";
$route['daftar-akun'] = "frontend_daftarakun/daftarakun";
$route['mata-uang'] = "frontend_matauang/matauang";
$route['proyek-dashboard'] = "frontend_proyekdashboard/proyekdashboard";
$route['lain-lain'] = "frontend_lainlain/lainlain";
$route['bpu'] = "frontend_bpu/bpu";
$route['laporan'] = "frontend_laporan/laporan";
$route['karyawan'] = "frontend_karyawan/karyawan";

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

$route['404_override'] = '';

/* End of file routes.php */
/* Location: ./application/config/routes.php */