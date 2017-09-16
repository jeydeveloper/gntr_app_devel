<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Frontend {

	function __construct(){
		parent::__construct();

		if(!$this->session->userdata('userid')) {
			redirect('login');
			exit();
		}

        $this->load->model('frontend_penjualan/crud_bukti_pembayaran', 'crud_bukti_pembayaran_penjualan');
        $this->load->model('frontend_pembelian/crud_buktipembayaran', 'crud_bukti_pembayaran_pembelian');
        $this->load->model('frontend_penjualan/crud_invoice_detail', 'crud_invoice_detail');
        $this->load->model('frontend_pembelian/crud_permintaan_detail');
	}

	function index() {
        $year = !empty($_GET['year']) ? $_GET['year'] : date('Y');
        $this->_data['select_year'] = $year;

        $this->generateDataChart($year);
		$this->template->set('title', 'Home | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'content', $this->_data);
	}

	private function getDataPenjualan($year = '') {
        $res = $this->total_penjualan($year);
        return $res;
    }

    private function getDataPembelian($year = '') {
        $res = $this->total_pembelian($year);
        return $res;
    }

    private function generateDataChart($year = '') {
        /*$this->_data['data_bulan'] = '"Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu", "Sep", "Okt", "Nov", "Des"';
        $this->_data['data_penjualan'] = '28, 48, 40, 19, 96, 27, 100';
        $this->_data['data_pembelian'] = '65, 59, 90, 81, 56, 55, 40';*/

        $this->_data['data_bulan'] = '"Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu", "Sep", "Okt", "Nov", "Des"';
        $this->_data['data_penjualan'] = $this->convertData($this->getDataPenjualan($year));
        $this->_data['data_pembelian'] = $this->convertData($this->getDataPembelian($year));
    }

    private function total_penjualan($year = '') {
        //$details  = $this->crud_invoice_detail->join3();
        $year = !empty($year) ? $year : date('Y');
        $query = 'SELECT gntrapp_penjualan_penawaran.*, gntrapp_penjualan_penawaran_detail.*, gntrapp_barang_jasa.*, DATE_FORMAT(pbktp_tgltransaksi, "%m") as bulan 
FROM gntrapp_penjualan_penawaran_detail 
LEFT JOIN gntrapp_penjualan_penawaran ON (gntrapp_penjualan_penawaran_detail.ppnwd_no_penawaran = gntrapp_penjualan_penawaran.ppnw_no_penawaran) 
LEFT JOIN gntrapp_penjualan_bukti_pembayaran ON (gntrapp_penjualan_penawaran.ppnw_id = gntrapp_penjualan_bukti_pembayaran.pbktp_ppnw_id)
LEFT JOIN gntrapp_barang_jasa ON (gntrapp_penjualan_penawaran_detail.ppnwd_jenisbarang_id = gntrapp_barang_jasa.brjs_id) 
WHERE DATE_FORMAT(pbktp_tgltransaksi, "%Y") = ' . $year;
        $details = $this->db->query($query)->result_array();

        $total = array();
        $biaya_kirim = array();
        foreach ($details as $key => $value) {
            if(empty($value['ppnw_id'])) continue;
            $value['bulan'] = (int)$value['bulan'];
            if(empty($total[$value['bulan']][$value['ppnw_id']])) $total[$value['bulan']][$value['ppnw_id']] = 0;
            $total[$value['bulan']][$value['ppnw_id']] += $value['ppnwd_volume'] * $value['brjs_harga_satuan'];
            $biaya_kirim[$value['bulan']][$value['ppnw_id']] = $value['ppnw_biaya_kirim'];
        }

        foreach ($total as $key1 => $value1) {
            if(empty($value)) continue;
            $value = 0;
            foreach ($value1 as $key2 => $value2) {
                if(empty($biaya_kirim[$key1][$key2])) $biaya_kirim[$key1][$key2] = 0;
                $value += $value2 + $biaya_kirim[$key1][$key2];
            }
            $total[$key1] = $value + ($value * 0.02) + ($value * 0.1);
        }

        return $total;
    }

    private function total_pembelian($year = '') {
        //$details  = $this->crud_permintaan_detail->join2();
        $year = !empty($year) ? $year : date('Y');
        $query = 'SELECT pbptn_id, gntrapp_pembelian_permintaan_detail.*, gntrapp_barang_jasa.*, DATE_FORMAT(bp_tgltransaksi, "%m") as bulan 
FROM gntrapp_pembelian_permintaan_detail 
LEFT JOIN gntrapp_pembelian_permintaan ON (gntrapp_pembelian_permintaan.pbptn_no = gntrapp_pembelian_permintaan_detail.pbptnd_nopermintaan)
LEFT JOIN gntrapp_bukti_pembayaran ON (gntrapp_pembelian_permintaan.pbptn_id = gntrapp_bukti_pembayaran.bp_pbptn_id) 
LEFT JOIN gntrapp_barang_jasa ON (gntrapp_pembelian_permintaan_detail.pbptnd_jenisbarang = gntrapp_barang_jasa.brjs_id) 
WHERE DATE_FORMAT(bp_tgltransaksi, "%Y") = ' . $year;
        $details = $this->db->query($query)->result_array();

        $total = array();
        foreach ($details as $key => $value) {
            $value['bulan'] = (int)$value['bulan'];
            if(empty($total[$value['bulan']])) $total[$value['bulan']] = 0;
            $total[$value['bulan']] += $value['pbptnd_jumlah'] * $value['brjs_harga_satuan'];
        }

        foreach ($total as $key => $value) {
            $total[$key] += ($value * 0.02) + ($value * 0.1);
        }

        return $total;
    }

    private function convertData($data = null) {
	    $tmp = [];
	    for ($i=1;$i<=12;$i++) {
            $tmp[$i] = !empty($data[$i]) ? $data[$i] : 0;
        }
        $res = join(', ', $tmp);
        return $res;
    }
}

?>