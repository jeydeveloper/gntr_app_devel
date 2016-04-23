<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kasbankpenerimaan extends MY_Frontend {

	function __construct(){
		parent::__construct();

		$this->load->model('frontend_kasbankpenerimaan/crud_kasbankpenerimaan', 'crud');
		$this->_data['module_base_url'] = site_url('kas-bank-penerimaan');
		$this->_data['datetime'] = date('Y-m-d H:i:s');
	}

	function index() {
		$this->_data['result'] = $this->crud->where('pnrm_void = 0')->order_by('pnrm_id', 'asc')->get_all();

		$this->template->set('title', 'Kas Bank Penerimaan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
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

		$this->template->set('title', 'Tambah Kas Bank Penerimaan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'add', $this->_data);
	}

	private function do_add() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('pnrm_nama', 'Nama', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');

		if($this->form_validation->run()) {
			$db_data = array(
				'pnrm_nama' => $this->input->post('pnrm_nama'),
				'pnrm_entrydate' => $this->_data['datetime'],
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
			'pnrm_void' => 1,
			'pnrm_changedate' => $this->_data['datetime'],
		);
		$this->crud->where('pnrm_id = "'.$id.'"')->puts($db_data);

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
			$this->_data['detail'] = $this->crud->where('pnrm_id = "'.$id.'"')->get_row();
		}

		$this->template->set('title', 'Edit Kas Bank Penerimaan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'edit', $this->_data);
	}

	private function do_edit() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('pnrm_id', 'ID', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('pnrm_nama', 'Nama', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');

		if($this->form_validation->run()) {
			$db_data = array(
				'pnrm_nama' => $this->input->post('pnrm_nama'),
				'pnrm_changedate' => $this->_data['datetime'],
			);
			$this->crud->where('pnrm_id = "'.$this->input->post('pnrm_id').'"')->puts($db_data);

			return true;
		} else {
			$this->_data['err_msg'] = validation_errors();
			return false;
		}
	}
}

?>