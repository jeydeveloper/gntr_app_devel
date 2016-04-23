<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Wajibpajak extends MY_Frontend {

	function __construct(){
		parent::__construct();

		if(!$this->session->userdata('userid')) {
			redirect('login');
			exit();
		}

		$this->load->model('frontend_wajibpajak/crud_wajibpajak');
		$this->_data['module_base_url'] = site_url('wajib-pajak');
		$this->_data['datetime'] = date('Y-m-d H:i:s');
	}

	function index() {
		if(!empty($_POST)) {
			//print_r($_POST); exit();
			if($this->do_submit()) {
				redirect($this->_data['module_base_url']);
				exit();
			}
			$this->_data['detail']['pribadi'] = $_POST['pribadi'];
			$this->_data['detail']['usaha'] = $_POST['usaha'];
		} else {
			$res = $this->crud_wajibpajak->order_by('prf_id', 'asc')->get_all();
			$pribadi = unserialize($res[0]['prf_value']);
			$usaha = unserialize($res[1]['prf_value']);
			$this->_data['detail']['pribadi'] = $pribadi;
			$this->_data['detail']['usaha'] = $usaha;
		}

		$this->template->set('title', 'Data Wajib Pajak | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'content', $this->_data);
	}

	private function do_submit() {
		$db_data = array(
			'prf_value' => serialize($_POST['pribadi']),
		);
		$this->crud_wajibpajak->where('prf_id = 1')->puts($db_data);

		$db_data = array(
			'prf_value' => serialize($_POST['usaha']),
		);
		$this->crud_wajibpajak->where('prf_id = 2')->puts($db_data);

		return true;
	}
}

?>