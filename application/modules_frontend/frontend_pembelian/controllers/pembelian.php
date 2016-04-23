<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pembelian extends MY_Frontend {

	function __construct(){
		parent::__construct();

		if(!$this->session->userdata('userid')) {
			redirect('login');
			exit();
		}
	}

	function index() {
		$this->template->set('title', 'Pembelian | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'content', $this->_data);
	}

	function permintaan() {
		$this->template->set('title', 'Permintaan Pembelian | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'permintaan', $this->_data);
	}

	function add_permintaan() {
		$this->template->set('title', 'Tambah Permintaan Pembelian | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'permintaan_add', $this->_data);
	}

	function edit_permintaan($id) {
		$this->template->set('title', 'Edit Permintaan Pembelian | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'permintaan_edit', $this->_data);
	}

	function grafik_permintaan() {
		$this->template->set('title', 'Grafik Permintaan Pembelian | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'permintaan_grafik', $this->_data);
	}

	function kwitansi() {
		$this->template->set('title', 'Kwitansi Pembelian | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'kwitansi', $this->_data);
	}

	function add_kwitansi() {
		$this->template->set('title', 'Tambah Kwitansi Pembelian | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'kwitansi_add', $this->_data);
	}

	function edit_kwitansi($id) {
		$this->template->set('title', 'Edit Kwitansi Pembelian | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'kwitansi_edit', $this->_data);
	}

	function surat_jalan() {
		$this->template->set('title', 'Surat Jalan Pembelian | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'surat_jalan', $this->_data);
	}

	function add_surat_jalan() {
		$this->template->set('title', 'Tambah Surat Jalan Pembelian | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'surat_jalan_add', $this->_data);
	}

	function edit_surat_jalan($id) {
		$this->template->set('title', 'Edit Surat Jalan Pembelian | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'surat_jalan_edit', $this->_data);
	}

	function invoice() {
		$this->template->set('title', 'Invoice Pembelian | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'invoice', $this->_data);
	}

	function add_invoice() {
		$this->template->set('title', 'Tambah Invoice Pembelian | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'invoice_add', $this->_data);
	}

	function edit_invoice($id) {
		$this->template->set('title', 'Edit Invoice Pembelian | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'invoice_edit', $this->_data);
	}

	function tanda_terima() {
		$this->template->set('title', 'Tanda Terima Pembelian | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'tanda_terima', $this->_data);
	}

	function add_tanda_terima() {
		$this->template->set('title', 'Tambah Tanda Terima Pembelian | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'tanda_terima_add', $this->_data);
	}

	function edit_tanda_terima($id) {
		$this->template->set('title', 'Edit Tanda Terima Pembelian | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'tanda_terima_edit', $this->_data);
	}

	function bukti_pembayaran() {
		$this->template->set('title', 'Bukti Pembayaran Pembelian | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'bukti_pembayaran', $this->_data);
	}

	function add_bukti_pembayaran() {
		$this->template->set('title', 'Tambah Bukti Pembayaran Pembelian | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'bukti_pembayaran_add', $this->_data);
	}

	function edit_bukti_pembayaran($id) {
		$this->template->set('title', 'Edit Bukti Pembayaran Pembelian | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'bukti_pembayaran_edit', $this->_data);
	}
}

?>