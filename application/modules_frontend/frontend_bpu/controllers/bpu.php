<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bpu extends MY_Frontend {

	function __construct(){
		parent::__construct();

		if(!$this->session->userdata('userid')) {
			redirect('login');
			exit();
		}

		$this->load->model('frontend_bpu/crud_bpu', 'crud');
		$this->load->model('frontend_project/crud_project', 'crud_project');
		$this->_data['module_base_url'] = site_url('bpu');
		$this->_data['datetime'] = date('Y-m-d H:i:s');
	}

	function index() {
		$this->_data['result'] = $this->crud->where('bpu_void = 0')->order_by('bpu_id', 'asc')->get_all();

		$this->template->set('title', 'BPU | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
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

		$this->_data['option_project'] = $this->crud_project->get_option();

		$this->template->set('title', 'Tambah BPU | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'add', $this->_data);
	}

	private function do_add() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('bpu_nama', 'Nama', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('bpu_harga', 'Harga', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('bpu_proj_id', 'Project', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');

		if($this->form_validation->run()) {
			$db_data = array(
				'bpu_nama' => $this->input->post('bpu_nama'),
				'bpu_request_by' => $this->session->userdata('username'),
				'bpu_harga' => clear_numberformat($this->input->post('bpu_harga')),
				'bpu_proj_id' => $this->input->post('bpu_proj_id'),
				'bpu_approved_by' => $this->input->post('bpu_approved_by'),
				'bpu_entrydate' => $this->_data['datetime'],
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
			'bpu_void' => 1,
			'bpu_changedate' => $this->_data['datetime'],
		);
		$this->crud->where('bpu_id = "'.$id.'"')->puts($db_data);

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
			$this->_data['detail'] = $this->crud->where('bpu_id = "'.$id.'"')->get_row();
		}

		$this->_data['option_project'] = $this->crud_project->get_option();

		$this->template->set('title', 'Edit BPU | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'edit', $this->_data);
	}

	private function do_edit() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('bpu_id', 'ID', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('bpu_nama', 'Level', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('bpu_harga', 'Harga', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('bpu_proj_id', 'Project', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');

		if($this->form_validation->run()) {
			$db_data = array(
				'bpu_nama' => $this->input->post('bpu_nama'),
				'bpu_request_by' => $this->session->userdata('username'),
				'bpu_harga' => clear_numberformat($this->input->post('bpu_harga')),
				'bpu_proj_id' => $this->input->post('bpu_proj_id'),
				'bpu_approved_by' => $this->input->post('bpu_approved_by'),
				'bpu_changedate' => $this->_data['datetime'],
			);
			$this->crud->where('bpu_id = "'.$this->input->post('bpu_id').'"')->puts($db_data);

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