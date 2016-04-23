<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Daftaraktivatetap extends MY_Frontend {

	function __construct(){
		parent::__construct();

		if(!$this->session->userdata('userid')) {
			redirect('login');
			exit();
		}

		$this->load->model('frontend_daftaraktivatetap/crud_daftaraktivatetap');
		$this->_data['module_base_url'] = site_url('daftar-aktiva-tetap');
		$this->_data['datetime'] = date('Y-m-d H:i:s');
	}

	function index() {
		$this->_data['result'] = $this->crud_daftaraktivatetap->where('dakt_void = 0')->order_by('dakt_id', 'asc')->get_all();

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

		$this->template->set('title', 'Tambah Akun | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'add', $this->_data);
	}

	private function do_add() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('dakt_kode', 'Kode', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('dakt_keterangan', 'Keterangan', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('dakt_tipe', 'Tipe', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('dakt_harga', 'Harga', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('dakt_tanggalpakai', 'Tanggal Pakai', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('dakt_tanggalbeli', 'Tanggal Beli', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('dakt_qty', 'Qty', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('dakt_umurbulan', 'Umur Bulan', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('dakt_persensusut', '% Susut', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('dakt_pajak', '% Pajak', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');

		if($this->form_validation->run()) {
			$db_data = array(
				'dakt_kode' => $this->input->post('dakt_kode'),
				'dakt_keterangan' => $this->input->post('dakt_keterangan'),
				'dakt_tipe' => $this->input->post('dakt_tipe'),
				'dakt_harga' => $this->input->post('dakt_harga'),
				'dakt_tanggalpakai' => $this->input->post('dakt_tanggalpakai'),
				'dakt_tanggalbeli' => $this->input->post('dakt_tanggalbeli'),
				'dakt_qty' => $this->input->post('dakt_qty'),
				'dakt_umurbulan' => $this->input->post('dakt_umurbulan'),
				'dakt_persensusut' => $this->input->post('dakt_persensusut'),
				'dakt_pajak' => $this->input->post('dakt_pajak'),
				'dakt_entrydate' => $this->_data['datetime'],
			);
			$this->crud_daftaraktivatetap->posts($db_data);

			return true;
		} else {
			$this->_data['err_msg'] = validation_errors();
			return false;
		}
	}

	function delete($id) {
		$db_data = array(
			'dakt_void' => 1,
			'dakt_changedate' => $this->_data['datetime'],
		);
		$this->crud_daftaraktivatetap->where('dakt_id = "'.$id.'"')->puts($db_data);

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
			$this->_data['detail'] = $this->crud_daftaraktivatetap->where('dakt_id = "'.$id.'"')->get_row();
		}

		$this->template->set('title', 'Edit Akun | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'edit', $this->_data);
	}

	private function do_edit() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('dakt_kode', 'Kode', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('dakt_keterangan', 'Keterangan', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('dakt_tipe', 'Tipe', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('dakt_harga', 'Harga', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('dakt_tanggalpakai', 'Tanggal Pakai', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('dakt_tanggalbeli', 'Tanggal Beli', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('dakt_qty', 'Qty', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('dakt_umurbulan', 'Umur Bulan', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('dakt_persensusut', '% Susut', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('dakt_pajak', '% Pajak', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');

		if($this->form_validation->run()) {
			$db_data = array(
				'dakt_kode' => $this->input->post('dakt_kode'),
				'dakt_keterangan' => $this->input->post('dakt_keterangan'),
				'dakt_tipe' => $this->input->post('dakt_tipe'),
				'dakt_harga' => $this->input->post('dakt_harga'),
				'dakt_tanggalpakai' => $this->input->post('dakt_tanggalpakai'),
				'dakt_tanggalbeli' => $this->input->post('dakt_tanggalbeli'),
				'dakt_qty' => $this->input->post('dakt_qty'),
				'dakt_umurbulan' => $this->input->post('dakt_umurbulan'),
				'dakt_persensusut' => $this->input->post('dakt_persensusut'),
				'dakt_pajak' => $this->input->post('dakt_pajak'),
				'dakt_changedate' => $this->_data['datetime'],
			);
			$this->crud_daftaraktivatetap->where('dakt_id = "'.$this->input->post('dakt_id').'"')->puts($db_data);

			return true;
		} else {
			$this->_data['err_msg'] = validation_errors();
			return false;
		}
	}
}

?>