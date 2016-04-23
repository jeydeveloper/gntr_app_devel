<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Matauang extends MY_Frontend {

	function __construct(){
		parent::__construct();

		if(!$this->session->userdata('userid')) {
			redirect('login');
			exit();
		}

		$this->load->model('frontend_matauang/crud_matauang', 'crud');
		$this->_data['module_base_url'] = site_url('mata-uang');
		$this->_data['datetime'] = date('Y-m-d H:i:s');
	}

	function index() {
		$this->_data['result'] = $this->crud->where('mtua_void = 0')->order_by('mtua_id', 'asc')->get_all();

		$this->template->set('title', 'Mata Uang | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
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

		$this->template->set('title', 'Tambah Mata Uang | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'add', $this->_data);
	}

	private function do_add() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('mtua_nama', 'Nama', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('mtua_nilaitukar', 'Nilai Tukar', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('mtua_negara', 'Negara', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('mtua_simbol', 'Simbol', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');

		if($this->form_validation->run()) {
			$db_data = array(
				'mtua_nama' => $this->input->post('mtua_nama'),
				'mtua_nilaitukar' => $this->input->post('mtua_nilaitukar'),
				'mtua_negara' => $this->input->post('mtua_negara'),
				'mtua_simbol' => $this->input->post('mtua_simbol'),
				'mtua_entrydate' => $this->_data['datetime'],
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
			'mtua_void' => 1,
			'mtua_changedate' => $this->_data['datetime'],
		);
		$this->crud->where('mtua_id = "'.$id.'"')->puts($db_data);

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
			$this->_data['detail'] = $this->crud->where('mtua_id = "'.$id.'"')->get_row();
		}

		$this->template->set('title', 'Edit Mata Uang | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'edit', $this->_data);
	}

	private function do_edit() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('mtua_id', 'ID', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('mtua_nama', 'Nama', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('mtua_nilaitukar', 'Nilai Tukar', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('mtua_negara', 'Negara', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('mtua_simbol', 'Simbol', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');

		if($this->form_validation->run()) {
			$db_data = array(
				'mtua_nama' => $this->input->post('mtua_nama'),
				'mtua_nilaitukar' => $this->input->post('mtua_nilaitukar'),
				'mtua_negara' => $this->input->post('mtua_negara'),
				'mtua_simbol' => $this->input->post('mtua_simbol'),
				'mtua_changedate' => $this->_data['datetime'],
			);
			$this->crud->where('mtua_id = "'.$this->input->post('mtua_id').'"')->puts($db_data);

			return true;
		} else {
			$this->_data['err_msg'] = validation_errors();
			return false;
		}
	}
}

?>