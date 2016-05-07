<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Penjualan extends MY_Frontend {

	function __construct(){
		parent::__construct();

		if(!$this->session->userdata('userid')) {
			redirect('login');
			exit();
		}

		$this->load->model('frontend_penjualan/crud_penjualan', 'crud');
		$this->load->model('frontend_client/crud_client', 'crud_client');

		$this->_data['module_base_url_penawaran'] = site_url('penjualan/penawaran');
		$this->_data['module_base_url_permintaan'] = site_url('penjualan/permintaan');
		$this->_data['module_base_url_invoice'] = site_url('penjualan/invoice');
		$this->_data['module_base_url_kwitansi'] = site_url('penjualan/kwitansi');
		$this->_data['module_base_url_berita_acara'] = site_url('penjualan/berita-acara');
		$this->_data['module_base_url_tanda_terima'] = site_url('penjualan/tanda-terima');
		$this->_data['module_base_url_bukti_pembayaran'] = site_url('penjualan/bukti-pembayaran');

		$this->_data['datetime'] = date('Y-m-d H:i:s');
	}

	function index() {
		$this->template->set('title', 'Penjualan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'content', $this->_data);
	}

	function penawaran() {
		$this->_data['result'] = $this->crud->join('client', 'ppnw_clnt_id = clnt_id')->where('ppnw_void = 0')->order_by('ppnw_id', 'asc')->get_all_penawaran();

		$this->template->set('title', 'Penawaran Penjualan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'penawaran', $this->_data);
	}

	function add_penawaran() {
		if(!empty($_POST)) {
			if($this->do_add_penawaran()) {
				redirect($this->_data['module_base_url_penawaran']);
				exit();
			}
		}

		$this->_data['option_client'] = $this->crud_client->get_option();

		$this->template->set('title', 'Tambah Penawaran Penjualan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'penawaran_add', $this->_data);
	}

	private function do_add_penawaran() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('ppnw_no_penawaran', 'No Penawaran', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('ppnw_tanggal', 'Tanggal', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('ppnw_clnt_id', 'Client', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('ppnw_status', 'Status', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('ppnw_diskon', 'Diskon', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('ppnw_pajak', 'Pajak', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('ppnw_biaya_kirim', 'Biaya Kirim', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('ppnw_nilai_faktur', 'Nilai Faktur', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('ppnw_keterangan', 'Keterangan', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');

		if($this->form_validation->run()) {
			$db_data = array(
				'ppnw_no_penawaran' => $this->input->post('ppnw_no_penawaran'),
				'ppnw_tanggal' => $this->input->post('ppnw_tanggal'),
				'ppnw_clnt_id' => $this->input->post('ppnw_clnt_id'),
				'ppnw_status' => $this->input->post('ppnw_status'),
				'ppnw_diskon' => $this->input->post('ppnw_diskon'),
				'ppnw_pajak' => $this->input->post('ppnw_pajak'),
				'ppnw_biaya_kirim' => $this->input->post('ppnw_biaya_kirim'),
				'ppnw_nilai_faktur' => $this->input->post('ppnw_nilai_faktur'),
				'ppnw_keterangan' => $this->input->post('ppnw_keterangan'),
				'ppnw_entrydate' => $this->_data['datetime'],
			);
			$this->crud->posts_penawaran($db_data);

			return true;
		} else {
			$this->_data['err_msg'] = validation_errors();
			return false;
		}
	}

	function delete_penawaran($id) {
		$db_data = array(
			'ppnw_void' => 1,
			'ppnw_changedate' => $this->_data['datetime'],
		);
		$this->crud->where('ppnw_id = "'.$id.'"')->puts_penawaran($db_data);

		redirect($this->_data['module_base_url_penawaran']);
	}

	function edit_penawaran($id) {
		if(!empty($_POST)) {
			if($this->do_edit_penawaran()) {
				redirect($this->_data['module_base_url_penawaran']);
				exit();
			}
			$this->_data['detail'] = $_POST;
		} else {
			$this->_data['detail'] = $this->crud->where('ppnw_id = "'.$id.'"')->get_row_penawaran();
		}

		$this->_data['option_client'] = $this->crud_client->get_option();

		$this->template->set('title', 'Edit Penawaran Penjualan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'penawaran_edit', $this->_data);
	}

	private function do_edit_penawaran() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('ppnw_id', 'ID', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('ppnw_no_penawaran', 'No Penawaran', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('ppnw_tanggal', 'Tanggal', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('ppnw_clnt_id', 'Client', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('ppnw_status', 'Status', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('ppnw_diskon', 'Diskon', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('ppnw_pajak', 'Pajak', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('ppnw_biaya_kirim', 'Biaya Kirim', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('ppnw_nilai_faktur', 'Nilai Faktur', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('ppnw_keterangan', 'Keterangan', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');

		if($this->form_validation->run()) {
			$db_data = array(
				'ppnw_no_penawaran' => $this->input->post('ppnw_no_penawaran'),
				'ppnw_tanggal' => $this->input->post('ppnw_tanggal'),
				'ppnw_clnt_id' => $this->input->post('ppnw_clnt_id'),
				'ppnw_status' => $this->input->post('ppnw_status'),
				'ppnw_diskon' => $this->input->post('ppnw_diskon'),
				'ppnw_pajak' => $this->input->post('ppnw_pajak'),
				'ppnw_biaya_kirim' => $this->input->post('ppnw_biaya_kirim'),
				'ppnw_nilai_faktur' => $this->input->post('ppnw_nilai_faktur'),
				'ppnw_keterangan' => $this->input->post('ppnw_keterangan'),
				'ppnw_changedate' => $this->_data['datetime'],
			);
			$this->crud->where('ppnw_id = "'.$this->input->post('ppnw_id').'"')->puts_penawaran($db_data);

			return true;
		} else {
			$this->_data['err_msg'] = validation_errors();
			return false;
		}
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