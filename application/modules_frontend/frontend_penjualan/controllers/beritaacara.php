<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Beritaacara extends MY_Frontend {

	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('userid')) {
			redirect('login');
			exit();
		}

		$this->load->model('frontend_penjualan/crud_penjualan', 'crud');

		$this->_data['module_base_url_penawaran'] = site_url('penjualan/penawaran');

		$this->_data['datetime'] = date('Y-m-d H:i:s');

	}

	function insentif_hari_raya() {
		$this->template->set('title', 'Insentif Hari Raya | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'beritaacara/list_insentif_hari_raya', $this->_data);
	}

	function tagihan_ot() {
		$this->template->set('title', 'Tagihan OT | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'beritaacara/list_tagihan_ot', $this->_data);
	}

	function absen_gajian() {
		$this->template->set('title', 'Absen Gajian | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'beritaacara/list_absen_gajian', $this->_data);
	}

	function absen_tagihan() {
		$this->template->set('title', 'Absen Tagihan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'beritaacara/list_absen_tagihan', $this->_data);
	}

	function slip_gaji() {
		$this->template->set('title', 'Slip Gaji | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'beritaacara/list_slip_gaji', $this->_data);
	}

	function rekap() {
		$this->template->set('title', 'Rekap | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'beritaacara/list_rekap', $this->_data);
	}

	function kasbon_operator() {
		$this->template->set('title', 'Kasbon Operator | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'beritaacara/list_kasbon_operator', $this->_data);
	}

	function ops() {
		$this->template->set('title', 'OPS | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'beritaacara/list_ops', $this->_data);
	}

	function bpjs() {
		$this->template->set('title', 'BPJS | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'beritaacara/list_bpjs', $this->_data);
	}

	function aplikasi_setoran() {
		$this->template->set('title', 'Aplikasi Setoran | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'beritaacara/list_aplikasi_setoran', $this->_data);
	}

	function peserta() {
		$this->template->set('title', 'Peserta | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'beritaacara/list_peserta', $this->_data);
	}
}

?>