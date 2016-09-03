<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Laporan extends MY_Frontend {

	function __construct(){
		parent::__construct();

		if(!$this->session->userdata('userid')) {
			redirect('login');
			exit();
		}
	}

	function index() {
		$this->template->set('title', 'Laporan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'content', $this->_data);
	}

	function keuangan_neraca() {
		$this->_data['periode_bulan_1'] = $this->input->get('periode_bulan_1');
		$this->_data['periode_bulan_2'] = $this->input->get('periode_bulan_2');
		$this->_data['periode_tahun'] = $this->input->get('periode_tahun');
		$this->template->set('title', 'Laporan Neraca | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'content_keuangan_neraca', $this->_data);
	}

	function penjualan_client() {
		$this->_data['periode_bulan_1'] = $this->input->get('periode_bulan_1');
		$this->_data['periode_bulan_2'] = $this->input->get('periode_bulan_2');
		$this->_data['periode_tahun'] = $this->input->get('periode_tahun');
		$this->template->set('title', 'Laporan Neraca | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'content_penjualan_client', $this->_data);
	}

	function penjualan_barang() {
		$this->_data['periode_bulan_1'] = $this->input->get('periode_bulan_1');
		$this->_data['periode_bulan_2'] = $this->input->get('periode_bulan_2');
		$this->_data['periode_tahun'] = $this->input->get('periode_tahun');
		$this->template->set('title', 'Laporan Neraca | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'content_penjualan_barang', $this->_data);
	}

	function penjualan_grafik_barang() {
		$this->_data['periode_bulan_1'] = $this->input->get('periode_bulan_1');
		$this->_data['periode_bulan_2'] = $this->input->get('periode_bulan_2');
		$this->_data['periode_tahun'] = $this->input->get('periode_tahun');
		$this->template->set('title', 'Laporan Neraca | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'content_penjualan_grafik_barang', $this->_data);
	}

	function penjualan_grafik_client() {
		$this->_data['periode_bulan_1'] = $this->input->get('periode_bulan_1');
		$this->_data['periode_bulan_2'] = $this->input->get('periode_bulan_2');
		$this->_data['periode_tahun'] = $this->input->get('periode_tahun');
		$this->template->set('title', 'Laporan Neraca | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'content_penjualan_grafik_client', $this->_data);
	}

	function pembelian_barang() {
		$this->_data['periode_bulan_1'] = $this->input->get('periode_bulan_1');
		$this->_data['periode_bulan_2'] = $this->input->get('periode_bulan_2');
		$this->_data['periode_tahun'] = $this->input->get('periode_tahun');
		$this->template->set('title', 'Laporan Neraca | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'content_pembelian_barang', $this->_data);
	}

	function pembelian_vendor() {
		$this->_data['periode_bulan_1'] = $this->input->get('periode_bulan_1');
		$this->_data['periode_bulan_2'] = $this->input->get('periode_bulan_2');
		$this->_data['periode_tahun'] = $this->input->get('periode_tahun');
		$this->template->set('title', 'Laporan Neraca | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'content_pembelian_vendor', $this->_data);
	}

	function pembelian_grafik_barang() {
		$this->_data['periode_bulan_1'] = $this->input->get('periode_bulan_1');
		$this->_data['periode_bulan_2'] = $this->input->get('periode_bulan_2');
		$this->_data['periode_tahun'] = $this->input->get('periode_tahun');
		$this->template->set('title', 'Laporan Neraca | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'content_pembelian_grafik_barang', $this->_data);
	}

	function pembelian_grafik_vendor() {
		$this->_data['periode_bulan_1'] = $this->input->get('periode_bulan_1');
		$this->_data['periode_bulan_2'] = $this->input->get('periode_bulan_2');
		$this->_data['periode_tahun'] = $this->input->get('periode_tahun');
		$this->template->set('title', 'Laporan Neraca | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'content_pembelian_grafik_vendor', $this->_data);
	}
}

?>