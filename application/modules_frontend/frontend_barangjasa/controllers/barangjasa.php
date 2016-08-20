<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Barangjasa extends MY_Frontend {

	function __construct(){
		parent::__construct();

		if(!$this->session->userdata('userid')) {
			redirect('login');
			exit();
		}

		$this->load->model('frontend_barangjasa/crud_barangjasa', 'crud');
		$this->load->model('frontend_vendor/crud_vendor', 'crud_vendor');
		$this->_data['module_base_url'] = site_url('barang-jasa');
		$this->_data['datetime'] = date('Y-m-d H:i:s');

		$this->_data['data_source']['vendor'] = $this->crud_vendor->where('vndr_void = 0 AND vndr_status = 1')->order_by('vndr_nama')->get_option();
	}

	function index() {
		$this->_data['result'] = $this->crud->join('vendor', 'brjs_vndr_id = vndr_id', 'left')->where('brjs_void = 0')->order_by('brjs_id', 'asc')->get_all();

		$this->template->set('title', 'Barang/Jasa | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
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

		$this->template->set('title', 'Tambah Barang/Jasa | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'add', $this->_data);
	}

	private function do_add() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('brjs_nama', 'Nama', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('brjs_kategori_id', 'Kategori', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('brjs_jenis_id', 'Jenis', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('brjs_volume', 'Volume', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('brjs_satuan_id', 'Satuan', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('brjs_harga_satuan', 'Harga Satuan', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('brjs_over_project', 'Over Project', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('brjs_vndr_id', 'Vendor', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');

		if($this->form_validation->run()) {
			$db_data = array(
				'brjs_nama' => $this->input->post('brjs_nama'),
				'brjs_kategori_id' => $this->input->post('brjs_kategori_id'),
				'brjs_jenis_id' => $this->input->post('brjs_jenis_id'),
				'brjs_volume' => $this->input->post('brjs_volume'),
				'brjs_satuan_id' => $this->input->post('brjs_satuan_id'),
				'brjs_harga_satuan' => clear_numberformat($this->input->post('brjs_harga_satuan')),
				'brjs_over_project' => $this->input->post('brjs_over_project'),
				'brjs_vndr_id' => $this->input->post('brjs_vndr_id'),
				'brjs_entrydate' => $this->_data['datetime'],
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
			'brjs_void' => 1,
			'brjs_changedate' => $this->_data['datetime'],
		);
		$this->crud->where('brjs_id = "'.$id.'"')->puts($db_data);

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
			$this->_data['detail'] = $this->crud->where('brjs_id = "'.$id.'"')->get_row();
		}

		$this->template->set('title', 'Edit Barang/Jasa | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'edit', $this->_data);
	}

	private function do_edit() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('brjs_id', 'ID', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('brjs_nama', 'Level', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('brjs_kategori_id', 'Kategori', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('brjs_jenis_id', 'Jenis', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('brjs_volume', 'Volume', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('brjs_satuan_id', 'Satuan', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('brjs_harga_satuan', 'Harga Satuan', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('brjs_over_project', 'Over Project', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('brjs_vndr_id', 'Vendor', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');

		if($this->form_validation->run()) {
			$db_data = array(
				'brjs_nama' => $this->input->post('brjs_nama'),
				'brjs_kategori_id' => $this->input->post('brjs_kategori_id'),
				'brjs_jenis_id' => $this->input->post('brjs_jenis_id'),
				'brjs_volume' => $this->input->post('brjs_volume'),
				'brjs_satuan_id' => $this->input->post('brjs_satuan_id'),
				'brjs_harga_satuan' => clear_numberformat($this->input->post('brjs_harga_satuan')),
				'brjs_over_project' => $this->input->post('brjs_over_project'),
				'brjs_vndr_id' => $this->input->post('brjs_vndr_id'),
				'brjs_changedate' => $this->_data['datetime'],
			);
			$this->crud->where('brjs_id = "'.$this->input->post('brjs_id').'"')->puts($db_data);

			return true;
		} else {
			$this->_data['err_msg'] = validation_errors();
			return false;
		}
	}

	function data_barang($id) {
        $result = $this->db->where('brjs_nama = "'.$_GET['param'].'"')->get('barang_jasa')->row_array();
        $result['ppnwd_hargasatuan_text'] = number_format($result['brjs_harga_satuan'], 0, ',', '.');
        echo json_encode($result);
    }
}

?>