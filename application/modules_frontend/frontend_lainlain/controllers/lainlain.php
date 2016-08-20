<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lainlain extends MY_Frontend {

	function __construct(){
		parent::__construct();

		if(!$this->session->userdata('userid')) {
			redirect('login');
			exit();
		}

		$this->load->model('frontend_lainlain/crud_lainlain', 'crud');
		$this->_data['module_base_url'] = site_url('lain-lain');
		$this->_data['datetime'] = date('Y-m-d H:i:s');
	}

	function index() {
		$res_total = $this->db->select('SUM(sham_persentase) as total', false)->where('sham_void = 0')->get('saham')->row_array();

		$this->_data['result'] = $this->crud->where('sham_void = 0')->order_by('sham_id', 'asc')->get_all();
		$this->_data['persentase'] = array();

		foreach ($this->_data['result'] as $key => $value) {
			$this->_data['persentase'][$value['sham_id']] = round(($value['sham_persentase']/$res_total['total']) * 100);
		}

		$this->template->set('title', 'Lain-lain | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'content', $this->_data);
	}

	function add() {
		if(!empty($_POST)) {
			if($this->do_add()) {
				redirect($this->_data['module_base_url']);
				exit();
			}
		}

		$this->template->set('title', 'Tambah Lain-lain | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'add', $this->_data);
	}

	private function do_add() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('sham_nama', 'Nama Pemilik', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('sham_alamat', 'Alamat', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('sham_persentase', 'Persentase', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');

		if($this->form_validation->run()) {
			$db_data = array(
				'sham_nama' => $this->input->post('sham_nama'),
				'sham_alamat' => $this->input->post('sham_alamat'),
				'sham_persentase' => clear_numberformat($this->input->post('sham_persentase')),
				'sham_entrydate' => $this->_data['datetime'],
			);
			$this->crud->posts($db_data);

			return true;
		} else {
			$this->_data['err_msg'] = validation_errors();
			return false;
		}
	}

	function delete($id) {
		$db_data = array(
			'sham_void' => 1,
			'sham_changedate' => $this->_data['datetime'],
		);
		$this->crud->where('sham_id = "'.$id.'"')->puts($db_data);

		redirect($this->_data['module_base_url']);
	}

	function edit($id) {
		if(!empty($_POST)) {
			if($this->do_edit()) {
				redirect($this->_data['module_base_url']);
				exit();
			}
			$this->_data['detail'] = $_POST;
		} else {
			$this->_data['detail'] = $this->crud->where('sham_id = "'.$id.'"')->get_row();
		}

		$this->template->set('title', 'Edit Lain-lain | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'edit', $this->_data);
	}

	private function do_edit() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('sham_id', 'ID', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('sham_nama', 'Nama Pemilik', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('sham_alamat', 'Alamat', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('sham_persentase', 'Persentase', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');

		if($this->form_validation->run()) {
			$db_data = array(
				'sham_nama' => $this->input->post('sham_nama'),
				'sham_alamat' => $this->input->post('sham_alamat'),
				'sham_persentase' => clear_numberformat($this->input->post('sham_persentase')),
				'sham_changedate' => $this->_data['datetime'],
			);
			$this->crud->where('sham_id = "'.$this->input->post('sham_id').'"')->puts($db_data);

			return true;
		} else {
			$this->_data['err_msg'] = validation_errors();
			return false;
		}
	}

	function terbilang($id) {
        $result['terbilang'] = !empty($id) ? terbilang($id) : '-';
        echo json_encode($result);
    }
}

?>