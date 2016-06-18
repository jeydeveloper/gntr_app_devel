<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Daftarakun extends MY_Frontend {

	function __construct(){
		parent::__construct();

		if(!$this->session->userdata('userid')) {
			redirect('login');
			exit();
		}

		$this->load->model('frontend_daftarakun/crud_daftarakun', 'crud');
		$this->_data['module_base_url'] = site_url('daftar-akun');
		$this->_data['datetime'] = date('Y-m-d H:i:s');
	}

	function index() {
		$this->_data['parent'] = $this->crud->where('akun_void = 0 AND akun_parent = 0')->get_option_parent();

		$this->_data['result'] = array();
		$this->_data['result_parent'] = array();
		$this->_data['result_child'] = array();
		$result = $this->crud->where('akun_void = 0')->order_by('akun_parent', 'asc')->order_by('akun_id', 'asc')->get_all();
		foreach ($result as $key => $value) {
			$this->_data['result'][$value['akun_id']] = $value;
			$this->_data['result_parent'][$value['akun_parent']] = $value['akun_parent'];
			$this->_data['result_child'][$value['akun_parent']][$value['akun_id']] = $value['akun_id'];
		}

		$get_saldo = $this->crud->get_saldo();
		$this->_data['saldo_pembayaran'] = $get_saldo['pembayaran'];
		$this->_data['saldo_penerimaan'] = $get_saldo['penerimaan'];

		$this->template->set('title', 'Daftar Akun | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
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

		$this->_data['data_source']['parent'] = $this->crud->where('akun_void = 0 AND akun_parent = 0')->order_by('akun_nama')->get_option();

		$this->template->set('title', 'Tambah Daftar Akun | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'add', $this->_data);
	}

	private function do_add() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('akun_nama', 'Level', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('akun_nomor', 'Level', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('akun_tipe_id', 'Level', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('akun_saldo', 'Level', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('akun_parent', 'Level', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');

		if($this->form_validation->run()) {
			$db_data = array(
				'akun_nama' => $this->input->post('akun_nama'),
				'akun_nomor' => $this->input->post('akun_nomor'),
				'akun_tipe_id' => $this->input->post('akun_tipe_id'),
				'akun_saldo' => $this->input->post('akun_saldo'),
				'akun_parent' => $this->input->post('akun_parent'),
				'akun_entrydate' => $this->_data['datetime'],
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
			'akun_void' => 1,
			'akun_changedate' => $this->_data['datetime'],
		);
		$this->crud->where('akun_id = "'.$id.'"')->puts($db_data);

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
			$this->_data['detail'] = $this->crud->where('akun_id = "'.$id.'"')->get_row();
		}

		$this->_data['data_source']['parent'] = $this->crud->where('akun_void = 0 AND akun_parent = 0 AND akun_id != ' . $id)->order_by('akun_nama')->get_option();

		$this->template->set('title', 'Edit Daftar Akun | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'edit', $this->_data);
	}

	private function do_edit() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('akun_id', 'ID', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('akun_nama', 'Level', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('akun_nomor', 'Level', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('akun_tipe_id', 'Level', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('akun_saldo', 'Level', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('akun_parent', 'Level', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');

		if($this->form_validation->run()) {
			$db_data = array(
				'akun_nama' => $this->input->post('akun_nama'),
				'akun_nomor' => $this->input->post('akun_nomor'),
				'akun_tipe_id' => $this->input->post('akun_tipe_id'),
				'akun_saldo' => $this->input->post('akun_saldo'),
				'akun_parent' => $this->input->post('akun_parent'),
				'akun_changedate' => $this->_data['datetime'],
			);
			$this->crud->where('akun_id = "'.$this->input->post('akun_id').'"')->puts($db_data);

			return true;
		} else {
			$this->_data['err_msg'] = validation_errors();
			return false;
		}
	}
}

?>