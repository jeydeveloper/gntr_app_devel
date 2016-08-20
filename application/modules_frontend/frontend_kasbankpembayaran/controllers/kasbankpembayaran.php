<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kasbankpembayaran extends MY_Frontend {

	function __construct(){
		parent::__construct();

		if(!$this->session->userdata('userid')) {
			redirect('login');
			exit();
		}

		$this->load->model('frontend_kasbankpembayaran/crud_kasbankpembayaran', 'crud');
		$this->load->model('frontend_daftarakun/crud_daftarakun', 'crud_daftarakun');
		$this->_data['module_base_url'] = site_url('kas-bank-pembayaran');
		$this->_data['datetime'] = date('Y-m-d H:i:s');
	}

	function index() {
		$this->_data['parent_akun'] = $this->crud_daftarakun->where('akun_void = 0 AND akun_parent = 0')->get_option_parent();
		$this->_data['result'] = $this->crud->join('akun', 'pgln_akun_id = akun_id', 'left')->where('pgln_void = 0')->order_by('pgln_id', 'asc')->get_all();

		$this->template->set('title', 'Kas Bank Pembayaran | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
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

		$this->_data['data_source']['akun'] = $this->crud_daftarakun->where('akun_void = 0 AND akun_parent != 0 AND akun_tipe_id != 1')->order_by('akun_nomor')->get_option_detail();

		$this->template->set('title', 'Tambah Kas Bank Pembayaran | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'add', $this->_data);
	}

	private function do_add() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('pgln_nama', 'Nama', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('pgln_bank_id', 'Bank', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('pgln_tanggal', 'Tanggal', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('pgln_jumlah', 'Jumlah', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('pgln_keterangan', 'Keterangan', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');

		if($this->form_validation->run()) {
			$db_data = array(
				'pgln_nama' => $this->input->post('pgln_nama'),
				'pgln_bank_id' => $this->input->post('pgln_bank_id'),
				'pgln_tanggal' => $this->input->post('pgln_tanggal'),
				'pgln_jumlah' => clear_numberformat($this->input->post('pgln_jumlah')),
				'pgln_keterangan' => $this->input->post('pgln_keterangan'),
				'pgln_entrydate' => $this->_data['datetime'],
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
			'pgln_void' => 1,
			'pgln_changedate' => $this->_data['datetime'],
		);
		$this->crud->where('pgln_id = "'.$id.'"')->puts($db_data);

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
			$this->_data['detail'] = $this->crud->where('pgln_id = "'.$id.'"')->get_row();
		}

		$this->_data['data_source']['akun'] = $this->crud_daftarakun->where('akun_void = 0 AND akun_parent != 0')->order_by('akun_nomor')->get_option_detail();

		$this->template->set('title', 'Edit Kas Bank Pembayaran | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'edit', $this->_data);
	}

	private function do_edit() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('pgln_id', 'ID', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('pgln_nama', 'Nama', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('pgln_bank_id', 'Bank', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('pgln_tanggal', 'Tanggal', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('pgln_jumlah', 'Jumlah', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('pgln_keterangan', 'Keterangan', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');

		if($this->form_validation->run()) {
			$db_data = array(
				'pgln_nama' => $this->input->post('pgln_nama'),
				'pgln_bank_id' => $this->input->post('pgln_bank_id'),
				'pgln_tanggal' => $this->input->post('pgln_tanggal'),
				'pgln_jumlah' => clear_numberformat($this->input->post('pgln_jumlah')),
				'pgln_keterangan' => $this->input->post('pgln_keterangan'),
				'pgln_changedate' => $this->_data['datetime'],
			);
			$this->crud->where('pgln_id = "'.$this->input->post('pgln_id').'"')->puts($db_data);

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