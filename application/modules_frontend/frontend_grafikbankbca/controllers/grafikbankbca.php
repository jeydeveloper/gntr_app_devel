<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Grafikbankbca extends MY_Frontend {

	function __construct(){
		parent::__construct();

		if(!$this->session->userdata('userid')) {
			redirect('login');
			exit();
		}

		$this->load->model('frontend_kasbankpembayaran/crud_kasbankpembayaran', 'crud_kasbankpembayaran');
		$this->load->model('frontend_kasbankpenerimaan/crud_kasbankpenerimaan', 'crud_kasbankpenerimaan');
	}

	function index() {
		$bank_id = !empty($_GET['bank_id']) ? $_GET['bank_id'] : 1;
		$year = !empty($_GET['year']) ? $_GET['year'] : date('Y');
		$this->_data['select_bank_id'] = $bank_id;
		$this->_data['select_year'] = $year;

		$this->_data['result_kasbankpembayaran'] = $this->crud_kasbankpembayaran->select('pgln_bank_id, DATE_FORMAT(pgln_tanggal, "%m") as bulan, SUM(pgln_jumlah) as total', false)->where('pgln_void = 0 AND DATE_FORMAT(pgln_tanggal, "%Y") = "'.$year.'" AND pgln_bank_id = ' . $bank_id)->group_by('pgln_bank_id')->group_by('bulan')->get_all();
		$this->_data['result_kasbankpenerimaan'] = $this->crud_kasbankpenerimaan->select('pnrm_bank_id, DATE_FORMAT(pnrm_tanggal, "%m") as bulan, SUM(pnrm_jumlah) as total', false)->where('pnrm_void = 0 AND DATE_FORMAT(pnrm_tanggal, "%Y") = "'.$year.'" AND pnrm_bank_id = ' . $bank_id)->group_by('pnrm_bank_id')->group_by('bulan')->get_all();

		$data_pengeluaran = array();
		foreach ($this->_data['result_kasbankpembayaran'] as $key => $value) {
			$bulan = (int) $value['bulan'];
			$data_pengeluaran[$bulan] = $value['total'];
		}

		$data_penerimaan = array();
		foreach ($this->_data['result_kasbankpenerimaan'] as $key => $value) {
			$bulan = (int) $value['bulan'];
			$data_penerimaan[$bulan] = $value['total'];
		}

		$tmp_data_pengeluaran = array();
		$tmp_data_penerimaan = array();
		for ($i=1; $i<=12; $i++) { 
			$tmp_data_pengeluaran[$i] = !empty($data_pengeluaran[$i]) ? $data_pengeluaran[$i] : 0;
			$tmp_data_penerimaan[$i] = !empty($data_penerimaan[$i]) ? $data_penerimaan[$i] : 0;
		}

		$this->_data['data_pengeluaran'] = join(',', $tmp_data_pengeluaran);
		$this->_data['data_penerimaan'] = join(',', $tmp_data_penerimaan);

		$this->template->set('title', 'Grafik Bank BCA | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'content', $this->_data);
	}
}

?>