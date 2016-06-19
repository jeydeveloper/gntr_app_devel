<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Userlevel extends MY_Frontend {

	function __construct(){
		parent::__construct();

		if(!$this->session->userdata('userid')) {
			redirect('login');
			exit();
		}

		$this->load->model('frontend_userlevel/crud');
		$this->_data['module_base_url'] = site_url('user-level');
		$this->_data['datetime'] = date('Y-m-d H:i:s');
	}

	function index() {
		$this->_data['result'] = $this->crud->where('aulv_void = 0')->order_by('aulv_id', 'asc')->get_all();

		$this->template->set('title', 'Level Pengguna | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
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

		$this->template->set('title', 'Tambah Level Pengguna | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'add', $this->_data);
	}

	private function do_add() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('aulv_name', 'Level', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');

		if($this->form_validation->run()) {
			$role_access = $this->input->post('aulv_role_access');
			$db_data = array(
				'aulv_name' => $this->input->post('aulv_name'),
				'aulv_role_access' => (!empty($role_access) ? serialize($role_access) : ''),
				'aulv_entrydate' => $this->_data['datetime'],
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
			'aulv_void' => 1,
			'aulv_changedate' => $this->_data['datetime'],
		);
		$this->crud->where('aulv_id = "'.$id.'"')->puts($db_data);

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
			$this->_data['detail'] = $this->crud->where('aulv_id = "'.$id.'"')->get_row();
		}

		$this->template->set('title', 'Edit Level Pengguna | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'edit', $this->_data);
	}

	private function do_edit() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('aulv_id', 'ID', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('aulv_name', 'Level', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');

		if($this->form_validation->run()) {
			$role_access = $this->input->post('aulv_role_access');
			$db_data = array(
				'aulv_name' => $this->input->post('aulv_name'),
				'aulv_role_access' => (!empty($role_access) ? serialize($role_access) : ''),
				'aulv_changedate' => $this->_data['datetime'],
			);
			$this->crud->where('aulv_id = "'.$this->input->post('aulv_id').'"')->puts($db_data);

			return true;
		} else {
			$this->_data['err_msg'] = validation_errors();
			return false;
		}
	}
}

?>