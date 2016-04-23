<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Departemen extends MY_Frontend {

	function __construct(){
		parent::__construct();

		if(!$this->session->userdata('userid')) {
			redirect('login');
			exit();
		}

		$this->load->model('frontend_departemen/crud_departemen');
		$this->_data['module_base_url'] = site_url('departemen');
		$this->_data['datetime'] = date('Y-m-d H:i:s');

		$this->_data['option_status'] = array(
			array(
				'name' => 'Aktif',
				'value' => 1,
			),
			array(
				'name' => 'Tidak Aktif',
				'value' => 0,
			),
		);

		$this->_data['label_status'] = array(
			0 => 'Tidak Aktif',
			1 => 'Aktif',
		);
	}

	function index() {
		$this->_data['result'] = $this->crud_departemen->where('dprt_void = 0')->order_by('dprt_id', 'asc')->get_all();

		$this->template->set('title', 'Departemen | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
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

		$this->template->set('title', 'Tambah Departemen | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'add', $this->_data);
	}

	private function do_add() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('dprt_nama', 'Nama', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('dprt_manager', 'Manager', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('dprt_tugas', 'Tugas', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('dprt_status', 'Status', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');

		if($this->form_validation->run()) {
			$db_data = array(
				'dprt_nama' => $this->input->post('dprt_nama'),
				'dprt_manager' => $this->input->post('dprt_manager'),
				'dprt_tugas' => $this->input->post('dprt_tugas'),
				'dprt_status' => $this->input->post('dprt_status'),
				'dprt_entrydate' => $this->_data['datetime'],
			);
			$this->crud_departemen->posts($db_data);

			return true;
		} else {
			$this->_data['err_msg'] = validation_errors();
			return false;
		}
	}

	function delete($id) {
		$db_data = array(
			'dprt_void' => 1,
			'dprt_changedate' => $this->_data['datetime'],
		);
		$this->crud_departemen->where('dprt_id = "'.$id.'"')->puts($db_data);

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
			$this->_data['detail'] = $this->crud_departemen->where('dprt_id = "'.$id.'"')->get_row();
		}

		$this->template->set('title', 'Edit Departemen | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'edit', $this->_data);
	}

	private function do_edit() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('dprt_nama', 'Nama', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('dprt_manager', 'Manager', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('dprt_tugas', 'Tugas', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('dprt_status', 'Status', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');

		if($this->form_validation->run()) {
			$db_data = array(
				'dprt_nama' => $this->input->post('dprt_nama'),
				'dprt_manager' => $this->input->post('dprt_manager'),
				'dprt_tugas' => $this->input->post('dprt_tugas'),
				'dprt_status' => $this->input->post('dprt_status'),
				'dprt_changedate' => $this->_data['datetime'],
			);
			$this->crud_departemen->where('dprt_id = "'.$this->input->post('dprt_id').'"')->puts($db_data);

			return true;
		} else {
			$this->_data['err_msg'] = validation_errors();
			return false;
		}
	}
}

?>