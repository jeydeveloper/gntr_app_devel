<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Penjualan extends MY_Frontend {

	function __construct(){
		parent::__construct();

		if(!$this->session->userdata('userid')) {
			redirect('login');
			exit();
		}
	}

	function index() {
		$this->template->set('title', 'Penjualan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'content', $this->_data);
	}

	function penawaran() {
		$this->template->set('title', 'Penawaran Penjualan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'penawaran', $this->_data);
	}

	function add_penawaran() {
		$this->template->set('title', 'Tambah Penawaran Penjualan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'penawaran_add', $this->_data);
	}

	function edit_penawaran($id) {
		$this->template->set('title', 'Edit Penawaran Penjualan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'penawaran_edit', $this->_data);
	}

	function permintaan() {
		$this->template->set('title', 'Permintaan Penjualan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'permintaan', $this->_data);
	}

	function add_permintaan() {
		$this->template->set('title', 'Tambah Permintaan Penjualan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'permintaan_add', $this->_data);
	}

	function edit_permintaan($id) {
		$this->template->set('title', 'Edit Permintaan Penjualan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'permintaan_edit', $this->_data);
	}

	function invoice() {
		$this->template->set('title', 'Invoice Penjualan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'invoice', $this->_data);
	}

	function add_invoice() {
		$this->template->set('title', 'Tambah Invoice Penjualan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'invoice_add', $this->_data);
	}

	function edit_invoice($id) {
		$this->template->set('title', 'Edit Invoice Penjualan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'invoice_edit', $this->_data);
	}

	function kwitansi() {
		$this->template->set('title', 'Kwitansi Penjualan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'kwitansi', $this->_data);
	}

	function add_kwitansi() {
		$this->template->set('title', 'Tambah Kwitansi Penjualan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'kwitansi_add', $this->_data);
	}

	function edit_kwitansi($id) {
		$this->template->set('title', 'Edit Kwitansi Penjualan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'kwitansi_edit', $this->_data);
	}

	function berita_acara() {
		$this->template->set('title', 'Berita Acara Penjualan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'berita_acara', $this->_data);
	}

	function add_berita_acara() {
		$this->template->set('title', 'Tambah Berita Acara Penjualan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'berita_acara_add', $this->_data);
	}

	function edit_berita_acara($id) {
		$this->template->set('title', 'Edit Berita Acara Penjualan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'berita_acara_edit', $this->_data);
	}

	function tanda_terima() {
		$this->template->set('title', 'Tanda Terima Penjualan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'tanda_terima', $this->_data);
	}

	function add_tanda_terima() {
		$this->template->set('title', 'Tambah Tanda Terima Penjualan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'tanda_terima_add', $this->_data);
	}

	function edit_tanda_terima($id) {
		$this->template->set('title', 'Edit Tanda Terima Penjualan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'tanda_terima_edit', $this->_data);
	}

	function bukti_pembayaran() {
		$this->template->set('title', 'Bukti Pembayaran Penjualan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'bukti_pembayaran', $this->_data);
	}

	function add_bukti_pembayaran() {
		$this->template->set('title', 'Tambah Bukti Pembayaran Penjualan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'bukti_pembayaran_add', $this->_data);
	}

	function edit_bukti_pembayaran($id) {
		$this->template->set('title', 'Edit Bukti Pembayaran Penjualan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'bukti_pembayaran_edit', $this->_data);
	}
}

?>