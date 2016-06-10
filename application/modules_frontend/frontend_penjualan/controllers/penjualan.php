<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Penjualan extends MY_Frontend {

	function __construct(){
		parent::__construct();
		require_once APPPATH.'third_party/dompdf/dompdf_config.inc.php';
		if(!$this->session->userdata('userid')) {
			redirect('login');
			exit();
		}

		$this->load->model('frontend_penjualan/crud_penjualan', 'crud');
		$this->load->model('frontend_client/crud_client', 'crud_client');
        $this->load->model('frontend_penjualan/crud_permintaan', 'crud_permintaan');
        $this->load->model('frontend_penjualan/crud_invoice', 'crud_invoice');
        $this->load->model('frontend_penjualan/crud_invoice_detail', 'crud_invoice_detail');
        $this->load->model('frontend_penjualan/crud_kwitansi', 'crud_kwitansi');
        $this->load->model('frontend_barangjasa/crud_barangjasa', 'crud_barangjasa');
        $this->load->model('frontend_penjualan/crud_berita_acara', 'crud_berita_acara');
        $this->load->model('frontend_penjualan/crud_bukti_pembayaran', 'crud_bukti_pembayaran');
        $this->load->model('frontend_penjualan/crud_tanda_terima', 'crud_tanda_terima');


        $this->load->library('dompdf_gen');

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
		$this->_data['result'] = $this->crud->join('client', 'ppmt_clnt_id = clnt_id')->where('ppmt_void = 0')->order_by('ppmt_id', 'asc')->get_all_permintaan();

		$this->template->set('title', 'Permintaan Penjualan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'permintaan', $this->_data);
	}

	function add_permintaan() {
		if(!empty($_POST)) {
			if($this->do_add_permintaan()) {
				redirect($this->_data['module_base_url_permintaan']);
				exit();
			}
		}

		$this->_data['option_client'] = $this->crud_client->get_option();
		$this->_data['option_penawaran'] = $this->crud->get_option_penawaran();

		$this->template->set('title', 'Tambah Permintaan Penjualan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'permintaan_add', $this->_data);
	}

	private function do_add_permintaan() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('ppmt_tanggal', 'Tanggal', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('ppmt_noso', 'No SO', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('ppmt_nopo', 'No PO', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('ppmt_uangmuka', 'Uang Muka', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');

		if($_FILES['uploadfile']['size'] != 0){
		$upload_dir = './assets/images/';
		$config['upload_path']   = $upload_dir;
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['file_name']     = 'file_'.substr(md5(rand()),0,7);
		$config['overwrite']     = false;
		$config['max_size']	 = '5120';

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('uploadfile')){
			$filename = '';
		}	
		else{
			$this->upload_data['file'] =  $this->upload->data();
			$filename = $this->upload->file_name;
		}	
		}	
		if($this->form_validation->run()) {
			$db_data = array(
                'ppmt_tanggal'     => $this->input->post('ppmt_tanggal'),
                'ppmt_noso'        => $this->input->post('ppmt_noso'),
                'ppmt_nopo'        => $this->input->post('ppmt_nopo'),
                'ppmt_uangmuka'    => $this->input->post('ppmt_uangmuka'),
                'ppmt_diskon'      => $this->input->post('ppmt_diskon'),
                'ppmt_pajak'       => $this->input->post('ppmt_pajak'),
                'ppmt_biayakirim'  => $this->input->post('ppmt_biayakirim'),
                'ppmt_nilaifaktur' => $this->input->post('ppmt_nilaifaktur'),
                'ppmt_status'      => $this->input->post('ppmt_status'),
                'ppmt_clnt_id'     => $this->input->post('ppmt_clnt_id'),
                'ppmt_keterangan'  => $this->input->post('ppmt_keterangan'),
                'ppmt_entrydate'   => $this->_data['datetime'],
                'ppmt_fileupload'  => $filename,
			);
			$this->crud_permintaan->posts($db_data);

			return true;
		} else {
			$this->_data['err_msg'] = validation_errors();
			return false;
		}
	}

	function edit_permintaan($id) {
		if(!empty($_POST)) {
			if($this->do_edit_permintaan()) {
				redirect($this->_data['module_base_url_permintaan']);
				exit();
			}
			$this->_data['detail'] = $_POST;
		} else {
			$this->_data['detail'] = $this->crud->where('ppmt_id = "'.$id.'"')->get_row_permintaan();
		}

		$this->_data['option_client'] = $this->crud_client->get_option();
		$this->template->set('title', 'Edit Permintaan Penjualan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'permintaan_edit', $this->_data);
	}
	private function do_edit_permintaan() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('ppmt_tanggal', 'Tanggal', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('ppmt_noso', 'No SO', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('ppmt_nopo', 'No PO', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('ppmt_uangmuka', 'Uang Muka', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');

		if($_FILES['uploadfile']['size'] != 0){
			$upload_dir = './assets/images/';
			$config['upload_path']   = $upload_dir;
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['file_name']     = 'file_'.substr(md5(rand()),0,7);
			$config['overwrite']     = false;
			$config['max_size']	 = '5120';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('uploadfile')){
				$filename = '';
			}	
			else{
				$this->upload_data['file'] =  $this->upload->data();
				$filename = $this->upload->file_name;
			}
	    }
		if($this->form_validation->run() AND $_FILES['uploadfile']['size'] != 0) {
			$db_data = array(
				'ppmt_tanggal'     => $this->input->post('ppmt_tanggal'),
                'ppmt_noso'        => $this->input->post('ppmt_noso'),
                'ppmt_nopo'        => $this->input->post('ppmt_nopo'),
                'ppmt_uangmuka'    => $this->input->post('ppmt_uangmuka'),
                'ppmt_diskon'      => $this->input->post('ppmt_diskon'),
                'ppmt_pajak'       => $this->input->post('ppmt_pajak'),
                'ppmt_biayakirim'  => $this->input->post('ppmt_biayakirim'),
                'ppmt_nilaifaktur' => $this->input->post('ppmt_nilaifaktur'),
                'ppmt_status'      => $this->input->post('ppmt_status'),
                'ppmt_clnt_id'     => $this->input->post('ppmt_clnt_id'),
                'ppmt_keterangan'  => $this->input->post('ppmt_keterangan'),
                'ppmt_changedate'  => $this->_data['datetime'],
                'ppmt_fileupload'  => $filename,
			);
			$this->crud->where('ppmt_id = "'.$this->input->post('ppmt_id').'"')->puts_permintaan($db_data);

			return true;
		}elseif ($this->form_validation->run()) {
			$db_data = array(
				'ppmt_tanggal'     => $this->input->post('ppmt_tanggal'),
                'ppmt_noso'        => $this->input->post('ppmt_noso'),
                'ppmt_nopo'        => $this->input->post('ppmt_nopo'),
                'ppmt_uangmuka'    => $this->input->post('ppmt_uangmuka'),
                'ppmt_diskon'      => $this->input->post('ppmt_diskon'),
                'ppmt_pajak'       => $this->input->post('ppmt_pajak'),
                'ppmt_biayakirim'  => $this->input->post('ppmt_biayakirim'),
                'ppmt_nilaifaktur' => $this->input->post('ppmt_nilaifaktur'),
                'ppmt_status'      => $this->input->post('ppmt_status'),
                'ppmt_clnt_id'     => $this->input->post('ppmt_clnt_id'),
                'ppmt_keterangan'  => $this->input->post('ppmt_keterangan'),
                'ppmt_changedate'  => $this->_data['datetime'],
			);
			$this->crud->where('ppmt_id = "'.$this->input->post('ppmt_id').'"')->puts_permintaan($db_data);

			return true;
		} else {
			$this->_data['err_msg'] = validation_errors();
			return false;
		}
	}

	function delete_permintaan($id) {
		$db_data = array(
			'ppmt_void' => 1,
			'ppmt_changedate' => $this->_data['datetime'],
		);
		$this->crud->where('ppmt_id = "'.$id.'"')->puts_permintaan($db_data);

		redirect($this->_data['module_base_url_permintaan']);
	}

	function invoice() {
		$this->_data['result'] = $this->crud_invoice->get_all();

		$this->template->set('title', 'Invoice Penjualan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'invoice', $this->_data);
	}

	function add_invoice() {
		if(!empty($_POST)) {
			if($this->do_add_invoice()) {
				redirect($this->_data['module_base_url_invoice']);
				exit();
			}
		}

		$this->_data['option_barang'] = $this->crud_barangjasa->get_option();
		$this->template->set('title', 'Tambah Invoice Penjualan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'invoice_add', $this->_data);
	}

	private function do_add_invoice() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('pjinv_noinvoice', 'Invoice No', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('pjinv_tanggal', 'Tanggal', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('pjinv_wo', 'WO No', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('pjinv_nopenawaran', 'Penawaran WO', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('pjinv_totaltagihan', 'Total Tagihan', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('pjinv_terbilang', 'Terbilang', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('pjinv_description', 'Deskripsi Kirim', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');


		if($this->form_validation->run()) {
			$db_data = array(
				'pjinv_noinvoice' => $this->input->post('pjinv_noinvoice'),
				'pjinv_tanggal' => $this->input->post('pjinv_tanggal'),
				'pjinv_wotgl' => $this->input->post('pjinv_wotgl'),
				'pjinv_wo' => $this->input->post('pjinv_wo'),
				'pjinv_to' => $this->input->post('pjinv_to'),
				'pjinv_alamat' => $this->input->post('pjinv_alamat'),
				'pjinv_nopenawaran' => $this->input->post('pjinv_nopenawaran'),
				'pjinv_totaltagihan' => $this->input->post('pjinv_totaltagihan'),
				'pjinv_terbilang' => $this->input->post('pjinv_terbilang'),
				'pjinv_description' => $this->input->post('pjinv_description'),
			);
			$this->crud_invoice->posts($db_data);
			
			 $barang = $this->input->post('pjinvd_jenisbarang');
			 $jumlah = $this->input->post('pjinvd_jumlah');
		
			foreach($barang as $key=>$val)
			{
			   $data = array(
				'pjinvd_invid' => $this->input->post('pjinv_noinvoice'),
				'pjinvd_jenisbarang' => $val,
				'pjinvd_jumlah' => $jumlah[$key],
			  );
				$this->crud_invoice_detail->posts($data);
			}
			
			return true;
		} else {
			$this->_data['err_msg'] = validation_errors();
			return false;
		}
	}

	function edit_invoice($id) {
		if(!empty($_POST)) {
			if($this->do_edit_invoice()) {
				redirect($this->_data['module_base_url_invoice']);
				exit();
			}
			$this->_data['detail'] = $_POST;
		} else {
			$this->_data['detail'] = $this->crud_invoice->get_row();
			$this->_data['invoice'] = $this->crud_invoice_detail->where('penjualan_invoice.pjinv_id = "'.$id.'"')->join();

		}
		$this->_data['option_barang'] = $this->crud_barangjasa->get_option();
		$this->template->set('title', 'Edit Invoice Penjualan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'invoice_edit', $this->_data);
	}

	private function do_edit_invoice() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('pjinv_noinvoice', 'Invoice No', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('pjinv_tanggal', 'Tanggal', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('pjinv_wo', 'WO No', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('pjinv_nopenawaran', 'Penawaran WO', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('pjinv_totaltagihan', 'Total Tagihan', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('pjinv_terbilang', 'Terbilang', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('pjinv_description', 'Deskripsi Kirim', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');


		if($this->form_validation->run()) {
			$db_data = array(
				'pjinv_noinvoice' => $this->input->post('pjinv_noinvoice'),
				'pjinv_tanggal' => $this->input->post('pjinv_tanggal'),
				'pjinv_wotgl' => $this->input->post('pjinv_wotgl'),
				'pjinv_wo' => $this->input->post('pjinv_wo'),
				'pjinv_nopenawaran' => $this->input->post('pjinv_nopenawaran'),
				'pjinv_to' => $this->input->post('pjinv_to'),
				'pjinv_alamat' => $this->input->post('pjinv_alamat'),
				'pjinv_totaltagihan' => $this->input->post('pjinv_totaltagihan'),
				'pjinv_terbilang' => $this->input->post('pjinv_terbilang'),
				'pjinv_description' => $this->input->post('pjinv_description'),
			);
			$this->crud_invoice->where('pjinv_id = "'.$this->input->post('pjinv_id').'"')->puts($db_data);
			
			 $barang = $this->input->post('pjinvd_jenisbarang');
			 $jumlah = $this->input->post('pjinvd_jumlah');
			 $invd_id = $this->input->post('pjinvd_id');
		
			foreach($barang as $key=>$val)
			{
			   $data = array(
				'pjinvd_jenisbarang' => $val,
				'pjinvd_jumlah' => $jumlah[$key],
			  );
				$this->crud_invoice_detail->where('pjinvd_invid = "'.$this->input->post('pjinv_noinvoice').'"')
										  ->where('pjinvd_jenisbarang > 0')
										  ->where('pjinvd_id = "'.$invd_id[$key].'"')
										  ->puts($data);
			}
			
			return true;
		} else {
			$this->_data['err_msg'] = validation_errors();
			return false;
		}
	}

	function delete_invoice($id) {
	
		$this->crud_invoice->where('pjinv_id = "'.$id.'"')->delete($db_data);

		redirect($this->_data['module_base_url_invoice']);
	}

	function kwitansi() {
		$this->_data['result'] = $this->crud_kwitansi->order_by('pjkw_id', 'asc')->get_all();

		$this->template->set('title', 'Kwitansi Penjualan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'kwitansi', $this->_data);
	}

	function add_kwitansi() {
		if(!empty($_POST)) {
			if($this->do_add_kwitansi()) {
				redirect($this->_data['module_base_url_kwitansi']);
				exit();
			}
		}
		$this->template->set('title', 'Tambah Kwitansi Penjualan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'kwitansi_add', $this->_data);
	}

	private function do_add_kwitansi()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('pjkw_no', 'No Kwitansi', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('pjkw_dari', 'Terima dari', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('pjkw_total', 'Total', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');

		if($_FILES['uploadfile']['size'] != 0){
		$upload_dir = './assets/images/';
		$config['upload_path']   = $upload_dir;
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['file_name']     = 'kwitansi_'.substr(md5(rand()),0,7);
		$config['overwrite']     = false;
		$config['max_size']	 = '5120';

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('uploadfile')){
			$filename = '';
		}	
		else{
			$this->upload_data['file'] =  $this->upload->data();
			$filename = $this->upload->file_name;
		}	
		}
		if($this->form_validation->run()) {
			$db_data = array(
				'pjkw_no' => $this->input->post('pjkw_no'),
				'pjkw_dari' => $this->input->post('pjkw_dari'),
				'pjkw_alamat' => $this->input->post('pjkw_alamat'),
				'pjkw_notlpn' => $this->input->post('pjkw_notlpn'),
				'pjkw_total' => $this->input->post('pjkw_total'),
				'pjkw_norek' => $this->input->post('pjkw_norek'),
				'pjkw_an' => $this->input->post('pjkw_an'),
				'pjkw_bank' => $this->input->post('pjkw_bank'),
				'uploadfile'  => $filename,
			);
			$this->crud_kwitansi->posts($db_data);
			return true;
		} else {
			$this->_data['err_msg'] = validation_errors();
			return false;
		}
	}

	function edit_kwitansi($id) {
		if(!empty($_POST)) {
            if($this->do_edit_kwitansi()) {
                redirect($this->_data['module_base_url_kwitansi']);
                exit();
            }
            $this->_data['detail'] = $_POST;
        } else {
            $this->_data['detail'] = $this->crud_kwitansi->where('pjkw_id = "'.$id.'"')->get_row();
        }

		$this->template->set('title', 'Edit Kwitansi Penjualan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'kwitansi_edit', $this->_data);
	}

	private function do_edit_kwitansi()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('pjkw_no', 'No Kwitansi', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('pjkw_dari', 'Terima dari', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('pjkw_total', 'Total', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');

		if($_FILES['uploadfile']['size'] != 0){
		$upload_dir = './assets/images/';
		$config['upload_path']   = $upload_dir;
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['file_name']     = 'kwitansi_'.substr(md5(rand()),0,7);
		$config['overwrite']     = false;
		$config['max_size']	 = '5120';

		$this->load->library('upload', $config);
			if (!$this->upload->do_upload('uploadfile')){
				$filename = '';
			}	
			else{
				$this->upload_data['file'] =  $this->upload->data();
				$filename = $this->upload->file_name;
			}	
		}

		if($this->form_validation->run() AND $_FILES['uploadfile']['size'] != 0) {
			$db_data = array(
				'pjkw_no' => $this->input->post('pjkw_no'),
				'pjkw_dari' => $this->input->post('pjkw_dari'),
				'pjkw_alamat' => $this->input->post('pjkw_alamat'),
				'pjkw_notlpn' => $this->input->post('pjkw_notlpn'),
				'pjkw_total' => $this->input->post('pjkw_total'),
				'pjkw_norek' => $this->input->post('pjkw_norek'),
				'pjkw_an' => $this->input->post('pjkw_an'),
				'pjkw_bank' => $this->input->post('pjkw_bank'),
				'pjkw_changedate'  => $this->_data['datetime'],
				'uploadfile'  => $filename,
			);
			$this->crud_kwitansi->where('pjkw_id = "'.$this->input->post('pjkw_id').'"')->puts($db_data);
			return true;
		}elseif ($this->form_validation->run()) {
			$db_data = array(
				'pjkw_no' => $this->input->post('pjkw_no'),
				'pjkw_dari' => $this->input->post('pjkw_dari'),
				'pjkw_alamat' => $this->input->post('pjkw_alamat'),
				'pjkw_notlpn' => $this->input->post('pjkw_notlpn'),
				'pjkw_total' => $this->input->post('pjkw_total'),
				'pjkw_norek' => $this->input->post('pjkw_norek'),
				'pjkw_an' => $this->input->post('pjkw_an'),
				'pjkw_bank' => $this->input->post('pjkw_bank'),
				'pjkw_changedate'  => $this->_data['datetime'],
			);
			$this->crud_kwitansi->where('pjkw_id = "'.$this->input->post('pjkw_id').'"')->puts($db_data);
			return true;
		} else {
			$this->_data['err_msg'] = validation_errors();
			return false;
		}
	}

	function delete_kwitansi($id) {
	
		$this->crud_kwitansi->where('pjkw_id = "'.$id.'"')->delete($db_data);

		redirect($this->_data['module_base_url_kwitansi']);
	}

    function pdf_kwitansi($id){
        $this->_data['detail']  = $this->crud_kwitansi->where('pjkw_id = "'.$id.'"')->get_row();
        $this->load->view('print_kwitansi',  $this->_data);
        $html = $this->output->get_output();
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        //$this->dompdf->stream("invoice".$id.".pdf",array('Attachment'=>0));
        $this->dompdf->stream("kwitansi".$id.".pdf");
    }

	function berita_acara() {
		$this->_data['result'] = $this->crud_berita_acara->order_by('pbcr_id', 'asc')->get_all();
		$this->template->set('title', 'Berita Acara Penjualan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'berita_acara', $this->_data);
	}

	function add_berita_acara() {
		if(!empty($_POST)) {
			if($this->do_add_berita_acara()) {
				redirect($this->_data['module_base_url_berita_acara']);
				exit();
			}
		}
		$this->template->set('title', 'Tambah Berita Acara Penjualan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'berita_acara_add', $this->_data);
	}

	private function do_add_berita_acara()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('pbcr_no', 'No Kwitansi', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');

		if($_FILES['uploadfile']['size'] != 0){
		$upload_dir = './assets/images/';
		$config['upload_path']   = $upload_dir;
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['file_name']     = 'beritaacara_'.substr(md5(rand()),0,7);
		$config['overwrite']     = false;
		$config['max_size']	 = '5120';

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('uploadfile')){
			$filename = '';
		}	
		else{
			$this->upload_data['file'] =  $this->upload->data();
			$filename = $this->upload->file_name;
		}	
		}
		if($this->form_validation->run()) {
			$db_data = array(
				'pbcr_no' => $this->input->post('pbcr_no'),
				'pbcr_noproyek' => $this->input->post('pbcr_noproyek'),
				'pbcr_tghndari' => $this->input->post('pbcr_tghndari'),
				'pbcr_tagihan' => $this->input->post('pbcr_tagihan'),
				'pbcr_mtuang' => $this->input->post('pbcr_mtuang'),
				'pbcr_nilaitagihan' => $this->input->post('pbcr_nilaitagihan'),
				'pbcr_lampiran' => $this->input->post('pbcr_lampiran'),
				'pbcr_tglkembali' => $this->input->post('pbcr_tglkembali'),
				'pbcr_nobpkc' => $this->input->post('pbcr_nobpkc'),
				'pbcr_tglbpkc' => $this->input->post('pbcr_tglbpkc'),
				'pbcr_menerima' => $this->input->post('pbcr_menerima'),
				'pbcr_tglterima' => $this->input->post('pbcr_tglterima'),
				'pbcr_uploadfile'  => $filename,
			);
			$this->crud_berita_acara->posts($db_data);
			return true;
		} else {
			$this->_data['err_msg'] = validation_errors();
			return false;
		}
	}


	function edit_berita_acara($id) {
		if(!empty($_POST)) {
            if($this->do_edit_berita_acara()) {
                redirect($this->_data['module_base_url_berita_acara']);
                exit();
            }
            $this->_data['detail'] = $_POST;
        } else {
            $this->_data['detail'] = $this->crud_berita_acara->where('pbcr_id = "'.$id.'"')->get_row();
        }
		$this->template->set('title', 'Edit Berita Acara Penjualan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'berita_acara_edit', $this->_data);
	}

	private function do_edit_berita_acara()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('pbcr_no', 'No Kwitansi', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');

		if($_FILES['uploadfile']['size'] != 0){
		$upload_dir = './assets/images/';
		$config['upload_path']   = $upload_dir;
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['file_name']     = 'beritaacara_'.substr(md5(rand()),0,7);
		$config['overwrite']     = false;
		$config['max_size']	 = '5120';

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('uploadfile')){
			$filename = '';
		}	
		else{
			$this->upload_data['file'] =  $this->upload->data();
			$filename = $this->upload->file_name;
		}	
		}
		if($this->form_validation->run() AND $_FILES['uploadfile']['size'] != 0) {
			$db_data = array(
				'pbcr_no' => $this->input->post('pbcr_no'),
				'pbcr_noproyek' => $this->input->post('pbcr_noproyek'),
				'pbcr_tghndari' => $this->input->post('pbcr_tghndari'),
				'pbcr_tagihan' => $this->input->post('pbcr_tagihan'),
				'pbcr_mtuang' => $this->input->post('pbcr_mtuang'),
				'pbcr_nilaitagihan' => $this->input->post('pbcr_nilaitagihan'),
				'pbcr_lampiran' => $this->input->post('pbcr_lampiran'),
				'pbcr_tglkembali' => $this->input->post('pbcr_tglkembali'),
				'pbcr_nobpkc' => $this->input->post('pbcr_nobpkc'),
				'pbcr_tglbpkc' => $this->input->post('pbcr_tglbpkc'),
				'pbcr_menerima' => $this->input->post('pbcr_menerima'),
				'pbcr_tglterima' => $this->input->post('pbcr_tglterima'),
				'pbcr_uploadfile'  => $filename,
			);
			$this->crud_berita_acara->where('pbcr_id = "'.$this->input->post('pbcr_id').'"')->puts($db_data);
			return true;
		}elseif ($this->form_validation->run()) {
			$db_data = array(
				'pbcr_no' => $this->input->post('pbcr_no'),
				'pbcr_noproyek' => $this->input->post('pbcr_noproyek'),
				'pbcr_tghndari' => $this->input->post('pbcr_tghndari'),
				'pbcr_tagihan' => $this->input->post('pbcr_tagihan'),
				'pbcr_mtuang' => $this->input->post('pbcr_mtuang'),
				'pbcr_nilaitagihan' => $this->input->post('pbcr_nilaitagihan'),
				'pbcr_lampiran' => $this->input->post('pbcr_lampiran'),
				'pbcr_tglkembali' => $this->input->post('pbcr_tglkembali'),
				'pbcr_nobpkc' => $this->input->post('pbcr_nobpkc'),
				'pbcr_tglbpkc' => $this->input->post('pbcr_tglbpkc'),
				'pbcr_menerima' => $this->input->post('pbcr_menerima'),
				'pbcr_tglterima' => $this->input->post('pbcr_tglterima'),
			);
			$this->crud_berita_acara->where('pbcr_id = "'.$this->input->post('pbcr_id').'"')->puts($db_data);
			return true;
		} else {
			$this->_data['err_msg'] = validation_errors();
			return false;
		}
	}

	function delete_berita_acara($id) {
	
		$this->crud_berita_acara->where('pbcr_id = "'.$id.'"')->delete($db_data);

		redirect($this->_data['module_base_url_berita_acara']);
	}

	function tanda_terima() {
		$this->_data['result'] = $this->crud_tanda_terima->order_by('pttr_id', 'asc')->get_all();
		$this->template->set('title', 'Tanda Terima Penjualan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'tanda_terima', $this->_data);
	}

	function add_tanda_terima() {
		if(!empty($_POST)) {
			if($this->do_add_tanda_terima()) {
				redirect($this->_data['module_base_url_tanda_terima']);
				exit();
			}
		}
		$this->template->set('title', 'Tambah Tanda Terima Penjualan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'tanda_terima_add', $this->_data);
	}

	private function do_add_tanda_terima()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('pttr_no', 'No Kwitansi', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');

		if($_FILES['uploadfile']['size'] != 0){
		$upload_dir = './assets/images/';
		$config['upload_path']   = $upload_dir;
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['file_name']     = 'tandaterima_'.substr(md5(rand()),0,7);
		$config['overwrite']     = false;
		$config['max_size']	 = '5120';

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('uploadfile')){
			$filename = '';
		}	
		else{
			$this->upload_data['file'] =  $this->upload->data();
			$filename = $this->upload->file_name;
		}	
		}
		if($this->form_validation->run()) {
			$db_data = array(
				'pttr_no' => $this->input->post('pttr_no'),
				'pttr_noproyek' => $this->input->post('pttr_noproyek'),
				'pttr_tghndari' => $this->input->post('pttr_tghndari'),
				'pttr_tagihan' => $this->input->post('pttr_tagihan'),
				'pttr_mtuang' => $this->input->post('pttr_mtuang'),
				'pttr_nilaitagihan' => $this->input->post('pttr_nilaitagihan'),
				'pttr_lampiran' => $this->input->post('pttr_lampiran'),
				'pttr_tglkembali' => $this->input->post('pttr_tglkembali'),
				'pttr_nobpkc' => $this->input->post('pttr_nobpkc'),
				'pttr_tglbpkc' => $this->input->post('pttr_tglbpkc'),
				'pttr_menerima' => $this->input->post('pttr_menerima'),
				'pttr_tglterima' => $this->input->post('pttr_tglterima'),
				'pttr_uploadfile'  => $filename,
			);
			$this->crud_tanda_terima->posts($db_data);
			return true;
		} else {
			$this->_data['err_msg'] = validation_errors();
			return false;
		}
	}


	function edit_tanda_terima($id) {
		if(!empty($_POST)) {
            if($this->do_edit_tanda_terima()) {
                redirect($this->_data['module_base_url_tanda_terima']);
                exit();
            }
            $this->_data['detail'] = $_POST;
        } else {
            $this->_data['detail'] = $this->crud_tanda_terima->where('pttr_id = "'.$id.'"')->get_row();
        }
		$this->template->set('title', 'Edit Tanda Terima Penjualan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'tanda_terima_edit', $this->_data);
	}

	private function do_edit_tanda_terima()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('pttr_no', 'No Kwitansi', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');

		if($_FILES['uploadfile']['size'] != 0){
		$upload_dir = './assets/images/';
		$config['upload_path']   = $upload_dir;
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['file_name']     = 'tandaterima_'.substr(md5(rand()),0,7);
		$config['overwrite']     = false;
		$config['max_size']	 = '5120';

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('uploadfile')){
			$filename = '';
		}	
		else{
			$this->upload_data['file'] =  $this->upload->data();
			$filename = $this->upload->file_name;
		}	
		}
		if($this->form_validation->run() AND $_FILES['uploadfile']['size'] != 0) {
			$db_data = array(
				'pttr_no' => $this->input->post('pttr_no'),
				'pttr_noproyek' => $this->input->post('pttr_noproyek'),
				'pttr_tghndari' => $this->input->post('pttr_tghndari'),
				'pttr_tagihan' => $this->input->post('pttr_tagihan'),
				'pttr_mtuang' => $this->input->post('pttr_mtuang'),
				'pttr_nilaitagihan' => $this->input->post('pttr_nilaitagihan'),
				'pttr_lampiran' => $this->input->post('pttr_lampiran'),
				'pttr_tglkembali' => $this->input->post('pttr_tglkembali'),
				'pttr_nobpkc' => $this->input->post('pttr_nobpkc'),
				'pttr_tglbpkc' => $this->input->post('pttr_tglbpkc'),
				'pttr_menerima' => $this->input->post('pttr_menerima'),
				'pttr_tglterima' => $this->input->post('pttr_tglterima'),
				'pttr_uploadfile'  => $filename,
			);
			$this->crud_tanda_terima->where('pttr_id = "'.$this->input->post('pttr_id').'"')->puts($db_data);
			return true;
		}elseif ($this->form_validation->run()) {
			$db_data = array(
				'pttr_no' => $this->input->post('pttr_no'),
				'pttr_noproyek' => $this->input->post('pttr_noproyek'),
				'pttr_tghndari' => $this->input->post('pttr_tghndari'),
				'pttr_tagihan' => $this->input->post('pttr_tagihan'),
				'pttr_mtuang' => $this->input->post('pttr_mtuang'),
				'pttr_nilaitagihan' => $this->input->post('pttr_nilaitagihan'),
				'pttr_lampiran' => $this->input->post('pttr_lampiran'),
				'pttr_tglkembali' => $this->input->post('pttr_tglkembali'),
				'pttr_nobpkc' => $this->input->post('pttr_nobpkc'),
				'pttr_tglbpkc' => $this->input->post('pttr_tglbpkc'),
				'pttr_menerima' => $this->input->post('pttr_menerima'),
				'pttr_tglterima' => $this->input->post('pttr_tglterima'),
			);
			$this->crud_tanda_terima->where('pttr_id = "'.$this->input->post('pttr_id').'"')->puts($db_data);
			return true;
		} else {
			$this->_data['err_msg'] = validation_errors();
			return false;
		}
	}

	function delete_tanda_terima($id) {
	
		$this->crud_tanda_terima->where('pttr_id = "'.$id.'"')->delete($db_data);

		redirect($this->_data['module_base_url_tanda_terima']);
	}

	function bukti_pembayaran() {
		$this->_data['result'] = $this->crud_bukti_pembayaran->order_by('pbktp_id', 'asc')->get_all();
		$this->template->set('title', 'Bukti Pembayaran Penjualan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'bukti_pembayaran', $this->_data);
	}

	function add_bukti_pembayaran() {
		if(!empty($_POST)) {
			if($this->do_add_buktipembayaran()) {
				redirect($this->_data['module_base_url_bukti_pembayaran']);
				exit();
			}
		}
		$this->template->set('title', 'Tambah Bukti Pembayaran Penjualan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'bukti_pembayaran_add', $this->_data);
	}

	private function do_add_buktipembayaran() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('pbktp_tgltransaksi', 'Tanggal Transaksi', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');

		if($_FILES['uploadfile']['size'] != 0){
		$upload_dir = './assets/images/';
		$config['upload_path']   = $upload_dir;
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['file_name']     = 'buktipembayaran_'.substr(md5(rand()),0,7);
		$config['overwrite']     = false;
		$config['max_size']	 = '5120';

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('uploadfile')){
			$filename = '';
		}	
		else{
			$this->upload_data['file'] =  $this->upload->data();
			$filename = $this->upload->file_name;
		}	
		}
		if($this->form_validation->run()) {
			$db_data = array(
				'pbktp_tgltransaksi' => $this->input->post('pbktp_tgltransaksi'),
				'pbktp_tgltransaksi' => $this->input->post('pbktp_tgltransaksi'),
				'pbktp_notransaksi' => $this->input->post('pbktp_notransaksi'),
				'pbktp_norekening' => $this->input->post('pbktp_norekening'),
				'pbktp_namakonsultan' => $this->input->post('pbktp_namakonsultan'),
				'pbktp_noinvoice' => $this->input->post('pbktp_noinvoice'),
				'pbktp_totaltagihan' => $this->input->post('pbktp_totaltagihan'),
				'pbktp_terbilang' => $this->input->post('pbktp_terbilang'),
				'pbktp_jenistransaksi' => $this->input->post('pbktp_jenistransaksi'),
				'pbktp_jamtransaksi' => $this->input->post('pbktp_jamtransaksi'),
				'pbktp_userid' => $this->input->post('pbktp_userid'),
				'pbktp_uploadfile'  => $filename,
			);
			$this->crud_bukti_pembayaran->posts($db_data);
			return true;
		} else {
			$this->_data['err_msg'] = validation_errors();
			return false;
		}
	}

	function edit_bukti_pembayaran($id) {
		if(!empty($_POST)) {
            if($this->do_edit_bukti_pembayaran()) {
                redirect($this->_data['module_base_url_bukti_pembayaran']);
                exit();
            }
            $this->_data['detail'] = $_POST;
        } else {
            $this->_data['detail'] = $this->crud_bukti_pembayaran->where('pbktp_id = "'.$id.'"')->get_row();
        }
		$this->template->set('title', 'Edit Bukti Pembayaran Penjualan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'bukti_pembayaran_edit', $this->_data);
	}

	private function do_edit_bukti_pembayaran()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('pbktp_tgltransaksi', 'Tanggal Transaksi', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');

		if($_FILES['uploadfile']['size'] != 0){
		$upload_dir = './assets/images/';
		$config['upload_path']   = $upload_dir;
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['file_name']     = 'beritaacara_'.substr(md5(rand()),0,7);
		$config['overwrite']     = false;
		$config['max_size']	 = '5120';

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('uploadfile')){
			$filename = '';
		}	
		else{
			$this->upload_data['file'] =  $this->upload->data();
			$filename = $this->upload->file_name;
		}	
		}
		if($this->form_validation->run() AND $_FILES['uploadfile']['size'] != 0) {
			$db_data = array(
				'pbktp_tgltransaksi' => $this->input->post('pbktp_tgltransaksi'),
				'pbktp_tgltransaksi' => $this->input->post('pbktp_tgltransaksi'),
				'pbktp_notransaksi' => $this->input->post('pbktp_notransaksi'),
				'pbktp_norekening' => $this->input->post('pbktp_norekening'),
				'pbktp_namakonsultan' => $this->input->post('pbktp_namakonsultan'),
				'pbktp_noinvoice' => $this->input->post('pbktp_noinvoice'),
				'pbktp_totaltagihan' => $this->input->post('pbktp_totaltagihan'),
				'pbktp_terbilang' => $this->input->post('pbktp_terbilang'),
				'pbktp_jenistransaksi' => $this->input->post('pbktp_jenistransaksi'),
				'pbktp_jamtransaksi' => $this->input->post('pbktp_jamtransaksi'),
				'pbktp_userid' => $this->input->post('pbktp_userid'),
				'pbktp_uploadfile'  => $filename,
			);
			$this->crud_bukti_pembayaran->where('pbktp_id = "'.$this->input->post('pbktp_id').'"')->puts($db_data);
			return true;
		}elseif ($this->form_validation->run()) {
			$db_data = array(
				'pbktp_tgltransaksi' => $this->input->post('pbktp_tgltransaksi'),
				'pbktp_tgltransaksi' => $this->input->post('pbktp_tgltransaksi'),
				'pbktp_notransaksi' => $this->input->post('pbktp_notransaksi'),
				'pbktp_norekening' => $this->input->post('pbktp_norekening'),
				'pbktp_namakonsultan' => $this->input->post('pbktp_namakonsultan'),
				'pbktp_noinvoice' => $this->input->post('pbktp_noinvoice'),
				'pbktp_totaltagihan' => $this->input->post('pbktp_totaltagihan'),
				'pbktp_terbilang' => $this->input->post('pbktp_terbilang'),
				'pbktp_jenistransaksi' => $this->input->post('pbktp_jenistransaksi'),
				'pbktp_jamtransaksi' => $this->input->post('pbktp_jamtransaksi'),
				'pbktp_userid' => $this->input->post('pbktp_userid'),
			);
			$this->crud_bukti_pembayaran->where('pbktp_id = "'.$this->input->post('pbktp_id').'"')->puts($db_data);
			return true;
		} else {
			$this->_data['err_msg'] = validation_errors();
			return false;
		}
	}

	function delete_bukti_pembayaran($id) {
	
		$this->crud_bukti_pembayaran->where('pbktp_id = "'.$id.'"')->delete($db_data);

		redirect($this->_data['module_base_url_bukti_pembayaran']);
	}
}

?>