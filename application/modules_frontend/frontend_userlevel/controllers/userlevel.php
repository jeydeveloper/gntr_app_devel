<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Userlevel extends MY_Frontend {

	function __construct(){
		parent::__construct();

		$this->load->model('frontend_userlevel/crud');
		$this->_data['module_base_url'] = site_url('user-level');
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
			$datetime = date('Y-m-d H:i:s');

			$db_data = array(
				'aulv_name' => $this->input->post('aulv_name'),
				'aulv_entrydate' => $datetime,
			);
			$this->crud->posts($db_data);

			return true;
		} else {
			$this->_data['err_msg'] = validation_errors();
			return false;
		}
	}

	function delete($id) {
		$this->crud->where('aulv_id = "'.$id.'"')->delete();

		redirect($this->_data['module_base_url']);
	}
}

?>