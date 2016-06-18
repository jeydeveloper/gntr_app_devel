<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project extends MY_Frontend {

	function __construct(){
		parent::__construct();

		if(!$this->session->userdata('userid')) {
			redirect('login');
			exit();
		}

		$this->load->model('frontend_project/crud_project', 'crud');
		$this->_data['module_base_url'] = site_url('project');
		$this->_data['datetime'] = date('Y-m-d H:i:s');
	}

	function index() {
		$this->_data['result'] = $this->crud->where('proj_void = 0')->order_by('proj_id', 'asc')->get_all();

		$this->template->set('title', 'Project | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
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

		$this->template->set('title', 'Tambah Project | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'add', $this->_data);
	}

	private function do_add() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('proj_clnt_id', 'Client', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('proj_vndr_id', 'Vendor', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('proj_nama', 'Nama', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('proj_nilai', 'Nilai', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('proj_jangka_waktu', 'Jangka Waktu', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('proj_cp_client', 'CP Client', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('proj_telpon_client', 'Telpon Client', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('proj_cp_vendor', 'CP Vendor', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('proj_telpon_vendor', 'Telpon Vendor', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('proj_list_barang', 'List Barang', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('proj_status', 'Status', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');

		if($this->form_validation->run()) {
			$db_data = array(
				'proj_clnt_id' => $this->input->post('proj_clnt_id'),
				'proj_vndr_id' => $this->input->post('proj_vndr_id'),
				'proj_nama' => $this->input->post('proj_nama'),
				'proj_nilai' => $this->input->post('proj_nilai'),
				'proj_jangka_waktu' => $this->input->post('proj_jangka_waktu'),
				'proj_cp_client' => $this->input->post('proj_cp_client'),
				'proj_telpon_client' => $this->input->post('proj_telpon_client'),
				'proj_cp_vendor' => $this->input->post('proj_cp_vendor'),
				'proj_telpon_vendor' => $this->input->post('proj_telpon_vendor'),
				'proj_list_barang' => $this->input->post('proj_list_barang'),
				'proj_status' => $this->input->post('proj_status'),
				'proj_entrydate' => $this->_data['datetime'],
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
			'proj_void' => 1,
			'proj_changedate' => $this->_data['datetime'],
		);
		$this->crud->where('proj_id = "'.$id.'"')->puts($db_data);

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
			$this->_data['detail'] = $this->crud->where('proj_id = "'.$id.'"')->get_row();
		}

		$this->template->set('title', 'Edit Project | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'edit', $this->_data);
	}

	private function do_edit() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('proj_id', 'ID', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('proj_clnt_id', 'Client', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('proj_vndr_id', 'Vendor', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('proj_nama', 'Nama', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('proj_nilai', 'Nilai', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('proj_jangka_waktu', 'Jangka Waktu', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('proj_cp_client', 'CP Client', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('proj_telpon_client', 'Telpon Client', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('proj_cp_vendor', 'CP Vendor', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('proj_telpon_vendor', 'Telpon Vendor', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('proj_list_barang', 'List Barang', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('proj_status', 'Status', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');

		if($this->form_validation->run()) {
			$db_data = array(
				'proj_clnt_id' => $this->input->post('proj_clnt_id'),
				'proj_vndr_id' => $this->input->post('proj_vndr_id'),
				'proj_nama' => $this->input->post('proj_nama'),
				'proj_nilai' => $this->input->post('proj_nilai'),
				'proj_jangka_waktu' => $this->input->post('proj_jangka_waktu'),
				'proj_cp_client' => $this->input->post('proj_cp_client'),
				'proj_telpon_client' => $this->input->post('proj_telpon_client'),
				'proj_cp_vendor' => $this->input->post('proj_cp_vendor'),
				'proj_telpon_vendor' => $this->input->post('proj_telpon_vendor'),
				'proj_list_barang' => $this->input->post('proj_list_barang'),
				'proj_status' => $this->input->post('proj_status'),
				'proj_changedate' => $this->_data['datetime'],
			);
			$this->crud->where('proj_id = "'.$this->input->post('proj_id').'"')->puts($db_data);

			return true;
		} else {
			$this->_data['err_msg'] = validation_errors();
			return false;
		}
	}
}

?>