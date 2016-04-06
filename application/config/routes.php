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
$route['pengguna'] = "frontend_user/user";
$route['wajib-pajak'] = "frontend_wajibpajak/wajibpajak";
$route['user-level'] = "frontend_userlevel/userlevel";
$route['departemen'] = "frontend_departemen/departemen";
$route['daftar-aktiva-tetap'] = "frontend_daftaraktivatetap/daftaraktivatetap";
$route['kas-bank-penerimaan'] = "frontend_kasbankpenerimaan/kasbankpenerimaan";
$route['kas-bank-pembayaran'] = "frontend_kasbankpembayaran/kasbankpembayaran";
$route['grafik-bank-bca'] = "frontend_grafikbankbca/grafikbankbca";
$route['daftar-akun'] = "frontend_daftarakun/daftarakun";
$route['mata-uang'] = "frontend_matauang/matauang";
$route['pembelian'] = "frontend_pembelian/pembelian";
$route['penjualan'] = "frontend_penjualan/penjualan";
$route['proyek-dashboard'] = "frontend_proyekdashboard/proyekdashboard";
$route['lain-lain'] = "frontend_lainlain/lainlain";
$route['bpu'] = "frontend_bpu/bpu";
$route['laporan'] = "frontend_laporan/laporan";
$route['karyawan'] = "frontend_karyawan/karyawan";

$route['404_override'] = '';

/* End of file routes.php */
/* Location: ./application/config/routes.php */