<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends MY_Frontend {

	function __construct(){
		parent::__construct();

		if(!$this->session->userdata('userid')) {
			redirect('login');
			exit();
		}

		$this->load->model('frontend_user/crud_user' , 'crud_user');
		$this->load->model('frontend_userlevel/crud', 'crud_userlevel');
		$this->_data['module_base_url'] = site_url('pengguna');
		$this->_data['datetime'] = date('Y-m-d H:i:s');

		$this->_data['option_status'] = array(
			array(
				'name' => 'Aktif',
				'value' => 'y',
			),
			array(
				'name' => 'Tidak Aktif',
				'value' => 'n',
			),
		);

		$this->_data['label_status'] = array(
			'y' => 'Aktif',
			'n' => 'Tidak Aktif',
		);
	}

	function index() {
		$this->_data['result'] = $this->crud_user->where('admusr_id != 1 AND admusr_void = 0')->order_by('admusr_id', 'asc')->get_all();

		$this->template->set('title', 'Pengguna | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
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

		$this->_data['option_level'] = $this->crud_userlevel->get_option();

		$this->template->set('title', 'Tambah Pengguna | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'add', $this->_data);
	}

	private function do_add() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('admusr_username', 'Username', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('admusr_userpasswd', 'Password', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('admusr_aulv_id', 'Level', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('admusr_user_status', 'Status', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');

		if($this->form_validation->run()) {
			$db_data = array(
				'admusr_username' => $this->input->post('admusr_username'),
				'admusr_userpasswd' => md5($this->input->post('admusr_userpasswd')),
				'admusr_aulv_id' => $this->input->post('admusr_aulv_id'),
				'admusr_user_status' => $this->input->post('admusr_user_status'),
				'admusr_entrydate' => $this->_data['datetime'],
			);
			$this->crud_user->posts($db_data);

			return true;
		} else {
			$this->_data['err_msg'] = validation_errors();
			return false;
		}
	}

	function delete($id) {
		$db_data = array(
			'admusr_void' => 1,
			'admusr_entrydate' => $this->_data['datetime'],
		);
		$this->crud_user->where('admusr_id = "'.$id.'"')->puts($db_data);

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
			$this->_data['detail'] = $this->crud_user->where('admusr_id = "'.$id.'"')->get_row();
		}

		$this->_data['option_level'] = $this->crud_userlevel->get_option();

		$this->template->set('title', 'Edit Pengguna | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'edit', $this->_data);
	}

	private function do_edit() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('admusr_id', 'ID', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('admusr_aulv_id', 'Level', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('admusr_user_status', 'Status', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');

		if($this->form_validation->run()) {
			$db_data = array(
				'admusr_aulv_id' => $this->input->post('admusr_aulv_id'),
				'admusr_user_status' => $this->input->post('admusr_user_status'),
				'admusr_changedate' => $this->_data['datetime'],
			);

			if($this->input->post('admusr_userpasswd') != ''){
				$db_data['admusr_userpasswd'] = md5($this->input->post('admusr_userpasswd'));
			}

			$this->crud_user->where('admusr_id = "'.$this->input->post('admusr_id').'"')->puts($db_data);

			return true;
		} else {
			$this->_data['err_msg'] = validation_errors();
			return false;
		}
	}
}

?>