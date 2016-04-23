<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Client extends MY_Frontend {

	function __construct(){
		parent::__construct();

		if(!$this->session->userdata('userid')) {
			redirect('login');
			exit();
		}

		$this->load->model('frontend_Client/crud_client', 'crud');
		$this->_data['module_base_url'] = site_url('client');
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
		$this->_data['result'] = $this->crud->where('clnt_void = 0')->order_by('clnt_id', 'asc')->get_all();

		$this->template->set('title', 'Client | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
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

		$this->template->set('title', 'Tambah Client | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'add', $this->_data);
	}

	private function do_add() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('clnt_nama', 'Nama', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('clnt_alamat', 'Alamat', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('clnt_contact_person', 'Contact Persorn', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('clnt_telpon', 'Telpon', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('clnt_email', 'Email', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('clnt_status', 'Status', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');

		if($this->form_validation->run()) {
			$db_data = array(
				'clnt_nama' => $this->input->post('clnt_nama'),
				'clnt_alamat' => $this->input->post('clnt_alamat'),
				'clnt_contact_person' => $this->input->post('clnt_contact_person'),
				'clnt_telpon' => $this->input->post('clnt_telpon'),
				'clnt_email' => $this->input->post('clnt_email'),
				'clnt_status' => $this->input->post('clnt_status'),
				'clnt_entrydate' => $this->_data['datetime'],
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
			'clnt_void' => 1,
			'clnt_changedate' => $this->_data['datetime'],
		);
		$this->crud->where('clnt_id = "'.$id.'"')->puts($db_data);

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
			$this->_data['detail'] = $this->crud->where('clnt_id = "'.$id.'"')->get_row();
		}

		$this->template->set('title', 'Edit Client | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'edit', $this->_data);
	}

	private function do_edit() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('clnt_id', 'ID', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('clnt_nama', 'Nama', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('clnt_alamat', 'Alamat', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('clnt_contact_person', 'Contact Persorn', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('clnt_telpon', 'Telpon', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('clnt_email', 'Email', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('clnt_status', 'Status', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');

		if($this->form_validation->run()) {
			$db_data = array(
				'clnt_nama' => $this->input->post('clnt_nama'),
				'clnt_alamat' => $this->input->post('clnt_alamat'),
				'clnt_contact_person' => $this->input->post('clnt_contact_person'),
				'clnt_telpon' => $this->input->post('clnt_telpon'),
				'clnt_email' => $this->input->post('clnt_email'),
				'clnt_status' => $this->input->post('clnt_status'),
				'clnt_changedate' => $this->_data['datetime'],
			);
			$this->crud->where('clnt_id = "'.$this->input->post('clnt_id').'"')->puts($db_data);

			return true;
		} else {
			$this->_data['err_msg'] = validation_errors();
			return false;
		}
	}
}

?>