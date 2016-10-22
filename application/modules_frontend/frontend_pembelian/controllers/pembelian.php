<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pembelian extends MY_Frontend {

	function __construct(){
		parent::__construct();

		if(!$this->session->userdata('userid')) {
			redirect('login');
			exit();
		}
        $this->load->model('frontend_pembelian/crud_pembelian');
        $this->load->model('frontend_pembelian/crud_suratjalan');
        $this->load->model('frontend_pembelian/crud_buktipembayaran');
        $this->load->model('frontend_pembelian/crud_invoice');
        $this->load->model('frontend_pembelian/crud_invoice_detail');
        $this->load->model('frontend_pembelian/crud_kwitansi');
        $this->load->model('frontend_pembelian/crud_tanda_terima');
        $this->load->model('frontend_pembelian/crud_permintaan_detail');
        $this->load->model('frontend_pembelian/crud_suratjalan_detail');
        $this->load->model('frontend_barangjasa/crud_barangjasa', 'crud_barangjasa');

        $this->load->model('frontend_client/crud_client', 'crud_client');
        $this->load->model('frontend_vendor/crud_vendor', 'crud_vendor');
        $this->load->model('frontend_matauang/crud_matauang', 'crud_matauang');

        $this->_data['module_base_url'] = site_url('pembelian');
        $this->_data['datetime'] = date('Y-m-d H:i:s');
	}

	function index() {
		$this->template->set('title', 'Pembelian | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'content', $this->_data);
	}

	function permintaan() {
        $this->_data['result'] = $this->crud_pembelian->order_by('pbptn_id', 'asc')->get_all();

        $this->_data['total'] = $this->total_permintaan();

		$this->template->set('title', 'Permintaan Pembelian | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'permintaan', $this->_data);
	}

	function add_permintaan() {
        if(!empty($_POST)) {
            if($this->do_add_permintaan()) {
                redirect($this->_data['module_base_url'].'/permintaan');
                exit();
            }
        }

        $this->_data['option_barang'] = $this->crud_barangjasa->get_option();
        $this->_data['option_client'] = $this->crud_client->get_option();
        $this->_data['option_vendor'] = $this->crud_vendor->get_option();
        $this->_data['option_matauang'] = $this->crud_matauang->get_option();

		$this->template->set('title', 'Tambah Permintaan Pembelian | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'permintaan_add', $this->_data);
	}

    private function do_add_permintaan() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('pbptn_no', 'No', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
        $this->form_validation->set_rules('pbptn_tanggal', 'Tanggal', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');

        if($this->form_validation->run()) {
            $db_data = array(
                'pbptn_tanggal' => $this->input->post('pbptn_tanggal'),
                'pbptn_no' => $this->input->post('pbptn_no'),
                'pbptn_halaman' => $this->input->post('pbptn_halaman'),
                'pbptn_matauang' => $this->input->post('pbptn_matauang'),
                'pbptn_vendor' => $this->input->post('pbptn_vendor'),
                'pbptn_proposalno' => $this->input->post('pbptn_proposalno'),
                'pbptn_projectcode' => $this->input->post('pbptn_projectcode'),
                'pbptn_buyer' => $this->input->post('pbptn_buyer'),
                'pbptn_catatan' => $this->input->post('pbptn_catatan'),
                'pbptn_terms' => $this->input->post('pbptn_terms'),
                'pbptn_tanggalditerima' => $this->input->post('pbptn_tanggalditerima'),
                'pbptn_diterimaoleh' => $this->input->post('pbptn_diterimaoleh'),
                'pbptn_namapenerima' => $this->input->post('pbptn_namapenerima'),
                'pbptn_tanggalterima' => $this->input->post('pbptn_tanggalterima'),
                'pbptn_totaltagihan' => $this->input->post('pbptn_totaltagihan'),
                'pbptn_terbilang' => $this->input->post('pbptn_terbilang'),
                'pbptn_clnt_id' => $this->input->post('pbptn_clnt_id'),
                'pbptn_vndr_id' => $this->input->post('pbptn_vndr_id'),
                'pbptn_mtua_id' => $this->input->post('pbptn_mtua_id'),
            );
            $this->crud_pembelian->posts($db_data);

             $barang = $this->input->post('pbptnd_jenisbarang');
             $jumlah = $this->input->post('pbptnd_jumlah');

            $this->db->where('pbptnd_nopermintaan = "'.$this->input->post('pbptn_no').'"')->delete('pembelian_permintaan_detail');

            foreach($barang as $key=>$val)
            {
               $data = array(
                'pbptnd_nopermintaan' => $this->input->post('pbptn_no'),
                'pbptnd_jenisbarang' => $val,
                'pbptnd_jumlah' => $jumlah[$key],
              );
               $this->crud_permintaan_detail->posts($data);
            }

            return true;
        } else {
            $this->_data['err_msg'] = validation_errors();
            return false;
        }
    }

	function edit_permintaan($id) {
        if(!empty($_POST)) {
            if($this->do_edit_permintaan()) {
                redirect($this->_data['module_base_url'].'/permintaan');
                exit();
            }
            $this->_data['detail'] = $_POST;
        } else {
            $this->_data['detail'] = $this->crud_pembelian->where('pbptn_id = "'.$id.'"')->get_row();
            $this->_data['permintaan'] = $this->crud_permintaan_detail->where('pembelian_permintaan.pbptn_id = "'.$id.'"')->join();
        }

        $this->_data['option_barang'] = $this->crud_barangjasa->get_option();
        $this->_data['option_client'] = $this->crud_client->get_option();
        $this->_data['option_vendor'] = $this->crud_vendor->get_option();
        $this->_data['option_matauang'] = $this->crud_matauang->get_option();

		$this->template->set('title', 'Edit Permintaan Pembelian | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'permintaan_edit', $this->_data);
	}

    private function do_edit_permintaan() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('pbptn_no', 'No', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
        $this->form_validation->set_rules('pbptn_tanggal', 'Tanggal', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');

        if($this->form_validation->run()) {
            $db_data = array(
                'pbptn_tanggal' => $this->input->post('pbptn_tanggal'),
                'pbptn_no' => $this->input->post('pbptn_no'),
                'pbptn_halaman' => $this->input->post('pbptn_halaman'),
                'pbptn_matauang' => $this->input->post('pbptn_matauang'),
                'pbptn_vendor' => $this->input->post('pbptn_vendor'),
                'pbptn_proposalno' => $this->input->post('pbptn_proposalno'),
                'pbptn_projectcode' => $this->input->post('pbptn_projectcode'),
                'pbptn_buyer' => $this->input->post('pbptn_buyer'),
                'pbptn_catatan' => $this->input->post('pbptn_catatan'),
                'pbptn_terms' => $this->input->post('pbptn_terms'),
                'pbptn_tanggalditerima' => $this->input->post('pbptn_tanggalditerima'),
                'pbptn_diterimaoleh' => $this->input->post('pbptn_diterimaoleh'),
                'pbptn_namapenerima' => $this->input->post('pbptn_namapenerima'),
                'pbptn_tanggalterima' => $this->input->post('pbptn_tanggalterima'),
                'pbptn_totaltagihan' => $this->input->post('pbptn_totaltagihan'),
                'pbptn_terbilang' => $this->input->post('pbptn_terbilang'),
                'pbptn_clnt_id' => $this->input->post('pbptn_clnt_id'),
                'pbptn_vndr_id' => $this->input->post('pbptn_vndr_id'),
                'pbptn_mtua_id' => $this->input->post('pbptn_mtua_id'),
            );
            $this->crud_pembelian->where('pbptn_id = "'.$this->input->post('pbptn_id').'"')->puts($db_data);

             $barang = $this->input->post('pbptnd_jenisbarang');
             $jumlah = $this->input->post('pbptnd_jumlah');
             $invd_id = $this->input->post('pbptnd_id');

            $this->db->where('pbptnd_nopermintaan = "'.$this->input->post('pbptn_no').'"')->delete('pembelian_permintaan_detail');

            foreach($barang as $key=>$val)
            {
               $data = array(
                'pbptnd_nopermintaan' => $this->input->post('pbptn_no'),
                'pbptnd_jenisbarang' => $val,
                'pbptnd_jumlah' => $jumlah[$key],
              );
               $this->crud_permintaan_detail->posts($data);
            }
            return true;
        } else {
            $this->_data['err_msg'] = validation_errors();
            return false;
        }
    }

    function delete_permintaan($id) {
        $this->crud_pembelian->where('pbptn_id = "'.$id.'"')->delete($db_data);
        redirect($this->_data['module_base_url'].'/permintaan');
    }

    function pdf_permintaan($id){
        /*
        require_once APPPATH.'third_party/dompdf/dompdf_config.inc.php';
        $this->_data['detail']  = $this->crud_pembelian->where('pbptn_id = "'.$id.'"')->get_row();
        $this->_data['details']  = $this->crud_permintaan_detail->where('pembelian_permintaan.pbptn_id = "'.$id.'"')->join();

        $this->load->view('print_permintaan_pembelian',  $this->_data);
        $html = $this->output->get_output();
        $this->load->library('dompdf_gen');
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("permintaan_pembelian".$id.".pdf",array('Attachment'=>0));
        // $this->dompdf->stream("invoice_penjualan_".$id.".pdf");
        */

        $this->_data['detail']  = $this->crud_pembelian->where('pbptn_id = "'.$id.'"')->get_row();
        $this->_data['details']  = $this->crud_permintaan_detail->where('pembelian_permintaan.pbptn_id = "'.$id.'"')->join();

        $this->load->view('print_permintaan_pembelian',  $this->_data);
    }

	function grafik_permintaan() {
		$this->template->set('title', 'Grafik Permintaan Pembelian | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'permintaan_grafik', $this->_data);
	}

	function kwitansi() {
        $this->_data['result'] = $this->crud_kwitansi->order_by('pbkw_id', 'asc')->get_all();

        $this->_data['total'] = $this->total_permintaan();

		$this->template->set('title', 'Kwitansi Pembelian | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'kwitansi', $this->_data);
	}

	function add_kwitansi() {
        if(!empty($_POST)) {
            if($this->do_add_kwitansi()) {
                redirect($this->_data['module_base_url'].'/kwitansi');
                exit();
            }
        }

        $this->_data['option_referensi'] = $this->crud_pembelian->get_option_info_detail();

		$this->template->set('title', 'Tambah Kwitansi Pembelian | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'kwitansi_add', $this->_data);
	}

    private function do_add_kwitansi()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('pbkw_no', 'No Kwitansi', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
        $this->form_validation->set_rules('pbkw_dari', 'Terima dari', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
        $this->form_validation->set_rules('pbkw_total', 'Total', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');

        if($_FILES['uploadfile']['size'] != 0){
        $upload_dir = './assets/images/';
        $config['upload_path']   = $upload_dir;
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['file_name']     = 'kwitansi_pembelian_'.substr(md5(rand()),0,7);
        $config['overwrite']     = false;
        $config['max_size']  = '5120';

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
                'pbkw_pbptn_id' => $this->input->post('pbkw_pbptn_id'),
                'pbkw_no' => $this->input->post('pbkw_no'),
                'pbkw_dari' => $this->input->post('pbkw_dari'),
                'pbkw_alamat' => $this->input->post('pbkw_alamat'),
                'pbkw_notlpn' => $this->input->post('pbkw_notlpn'),
                'pbkw_total' => $this->input->post('pbkw_total'),
                'pbkw_norek' => $this->input->post('pbkw_norek'),
                'pbkw_an' => $this->input->post('pbkw_an'),
                'pbkw_bank' => $this->input->post('pbkw_bank'),
                'pbkw_tipe_pembayaran' => $this->input->post('pbkw_tipe_pembayaran'),
                'pbkw_transfer_from_bank' => $this->input->post('pbkw_transfer_from_bank'),
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
                redirect($this->_data['module_base_url'].'/kwitansi');
                exit();
            }
            $this->_data['detail'] = $_POST;
        } else {
            $this->_data['detail'] = $this->crud_kwitansi->where('pbkw_id = "'.$id.'"')->get_row();
        }

        $this->_data['option_referensi'] = $this->crud_pembelian->get_option_info_detail();

		$this->template->set('title', 'Edit Kwitansi Pembelian | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'kwitansi_edit', $this->_data);
	}

    private function do_edit_kwitansi()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('pbkw_no', 'No Kwitansi', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
        $this->form_validation->set_rules('pbkw_dari', 'Terima dari', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
        $this->form_validation->set_rules('pbkw_total', 'Total', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');

        if($_FILES['uploadfile']['size'] != 0){
        $upload_dir = './assets/images/';
        $config['upload_path']   = $upload_dir;
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['file_name']     = 'tandaterima_'.substr(md5(rand()),0,7);
        $config['overwrite']     = false;
        $config['max_size']  = '5120';

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
                'pbkw_pbptn_id' => $this->input->post('pbkw_pbptn_id'),
                'pbkw_no' => $this->input->post('pbkw_no'),
                'pbkw_dari' => $this->input->post('pbkw_dari'),
                'pbkw_alamat' => $this->input->post('pbkw_alamat'),
                'pbkw_notlpn' => $this->input->post('pbkw_notlpn'),
                'pbkw_total' => $this->input->post('pbkw_total'),
                'pbkw_norek' => $this->input->post('pbkw_norek'),
                'pbkw_an' => $this->input->post('pbkw_an'),
                'pbkw_bank' => $this->input->post('pbkw_bank'),
                'pbkw_tipe_pembayaran' => $this->input->post('pbkw_tipe_pembayaran'),
                'pbkw_transfer_from_bank' => $this->input->post('pbkw_transfer_from_bank'),
                'pbkw_changedate'  => $this->_data['datetime'],
                'uploadfile'  => $filename,
            );
            
            $this->crud_kwitansi->where('pbkw_id = "'.$this->input->post('pbkw_id').'"')->puts($db_data);

            $this->crud_kwitansi->update_relation_referensi($this->input->post('pbkw_id'), $this->input->post('pbkw_pbptn_id'));

            return true;
        }elseif ($this->form_validation->run()) {
            $db_data = array(
                'pbkw_pbptn_id' => $this->input->post('pbkw_pbptn_id'),
                'pbkw_no' => $this->input->post('pbkw_no'),
                'pbkw_dari' => $this->input->post('pbkw_dari'),
                'pbkw_alamat' => $this->input->post('pbkw_alamat'),
                'pbkw_notlpn' => $this->input->post('pbkw_notlpn'),
                'pbkw_total' => $this->input->post('pbkw_total'),
                'pbkw_norek' => $this->input->post('pbkw_norek'),
                'pbkw_an' => $this->input->post('pbkw_an'),
                'pbkw_bank' => $this->input->post('pbkw_bank'),
                'pbkw_tipe_pembayaran' => $this->input->post('pbkw_tipe_pembayaran'),
                'pbkw_transfer_from_bank' => $this->input->post('pbkw_transfer_from_bank'),
                'pbkw_changedate'  => $this->_data['datetime'],
            );

            $this->crud_kwitansi->where('pbkw_id = "'.$this->input->post('pbkw_id').'"')->puts($db_data);

            $this->crud_kwitansi->update_relation_referensi($this->input->post('pbkw_id'), $this->input->post('pbkw_pbptn_id'));

            return true;
        } else {
            $this->_data['err_msg'] = validation_errors();
            return false;
        }
    }

    function delete_kwitansi($id) {
        $this->crud_kwitansi->where('pbkw_id = "'.$id.'"')->delete($db_data);
        redirect($this->_data['module_base_url'].'/kwitansi');
    }

    function pdf_kwitansi($id){
        require_once APPPATH.'third_party/dompdf/dompdf_config.inc.php';
        $this->_data['detail']  = $this->crud_kwitansi->where('pbkw_id = "'.$id.'"')->get_row();

        $this->load->view('print_kwitansi_pembelian',  $this->_data);
        $html = $this->output->get_output();
        $this->load->library('dompdf_gen');
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("kwitansi_pembelian_".$id.".pdf",array('Attachment'=>0));
        // $this->dompdf->stream("invoice_penjualan_".$id.".pdf");
    }

	function surat_jalan() {
        $this->_data['result'] = $this->crud_suratjalan->order_by('pbsrtjalan_id', 'asc')->get_all();

        $this->_data['total'] = $this->total_permintaan();

		$this->template->set('title', 'Surat Jalan Pembelian | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'surat_jalan', $this->_data);
	}

    function pdf_surat_jalan($id){
          require_once APPPATH.'third_party/dompdf/dompdf_config.inc.php';
        $this->_data['detail']  = $this->crud_suratjalan->where('pbsrtjalan_id = "'.$id.'"')->get_row();
        $this->_data['details']  = $this->crud_suratjalan_detail->where('pembelian_suratjalan.pbsrtjalan_id = "'.$id.'"')->join();

        $this->load->view('print_surat_jalan',  $this->_data);
        $html = $this->output->get_output();
        $this->load->library('dompdf_gen');
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("surat_jalan_pembelian_".$id.".pdf",array('Attachment'=>0));
        // $this->dompdf->stream("invoice_penjualan_".$id.".pdf");
    }

	function add_surat_jalan() {
        if(!empty($_POST)) {
            if($this->do_add_surat_jalan()) {
                redirect($this->_data['module_base_url'].'/surat-jalan');
                exit();
            }
        }

        $this->_data['option_referensi'] = $this->crud_kwitansi->get_option_info_detail();
        $this->_data['option_matauang'] = $this->crud_matauang->get_option();

        $this->_data['option_barang'] = $this->crud_barangjasa->get_option();
		$this->template->set('title', 'Tambah Surat Jalan Pembelian | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'surat_jalan_add', $this->_data);
	}

    private function do_add_surat_jalan() {

        $this->load->library('form_validation');

        $this->form_validation->set_rules('pbsrtjalan_no', 'No', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
        $this->form_validation->set_rules('pbsrtjalan_tanggal', 'Tanggal', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
        if($_FILES['uploadfile']['size'] != 0){
            $upload_dir = './assets/images/';
            $config['upload_path']   = $upload_dir;
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['file_name']     = 'suratjalan_'.substr(md5(rand()),0,7);
            $config['overwrite']     = false;
            $config['max_size']  = '5120';

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
            $tmp = $this->crud_kwitansi->get_option_info_detail($this->input->post('pbsrtjalan_pbkw_id'));
            $additional = $tmp[$this->input->post('pbsrtjalan_pbkw_id')];

            $db_data = array(
                'pbsrtjalan_pbkw_id' => $this->input->post('pbsrtjalan_pbkw_id'),
                'pbsrtjalan_pbptn_id' => $additional['pbkw_pbptn_id'],
                'pbsrtjalan_tanggal' => $this->input->post('pbsrtjalan_tanggal'),
                'pbsrtjalan_no' => $this->input->post('pbsrtjalan_no'),
                'pbsrtjalan_halaman' => $this->input->post('pbsrtjalan_halaman'),
                'pbsrtjalan_matauang' => $this->input->post('pbsrtjalan_matauang'),
                'pbsrtjalan_vendor' => $this->input->post('pbsrtjalan_vendor'),
                'pbsrtjalan_proposalno' => $this->input->post('pbsrtjalan_proposalno'),
                'pbsrtjalan_projectcode' => $this->input->post('pbsrtjalan_projectcode'),
                'pbsrtjalan_buyer' => $this->input->post('pbsrtjalan_buyer'),
                'pbsrtjalan_catatan' => $this->input->post('pbsrtjalan_catatan'),
                'pbsrtjalan_terms' => $this->input->post('pbsrtjalan_terms'),
                'pbsrtjalan_tanggalditerima' => $this->input->post('pbsrtjalan_tanggalditerima'),
                'pbsrtjalan_diterimaoleh' => $this->input->post('pbsrtjalan_diterimaoleh'),
                'pbsrtjalan_namapenerima' => $this->input->post('pbsrtjalan_namapenerima'),
                'pbsrtjalan_tanggalterima' => $this->input->post('pbsrtjalan_tanggalterima'),
                'pbsrtjalan_totaltagihan' => $this->input->post('pbsrtjalan_totaltagihan'),
                'pbsrtjalan_terbilang' => $this->input->post('pbsrtjalan_terbilang'),
                'pbsrtjalan_nokendaraan' => $this->input->post('pbsrtjalan_nokendaraan'),
                'uploadfile' => $filename,
            );
            $this->crud_suratjalan->posts($db_data);

             $barang = $this->input->post('pbsuratjaland_jenisbarang');
             $jumlah = $this->input->post('pbsuratjaland_jumlah');


            foreach($barang as $key=>$val)
            {
               $data = array(
                'pbsuratjaland_nopermintaan' => $this->input->post('pbsrtjalan_no'),
                'pbsuratjaland_jenisbarang' => $val,
                'pbsuratjaland_jumlah' => $jumlah[$key],
              );
               $this->crud_suratjalan_detail->posts($data);
            }

            return true;
        } else {
            $this->_data['err_msg'] = validation_errors();
            return false;
        }
    }

	function edit_surat_jalan($id) {
         if(!empty($_POST)) {
            if($this->do_edit_surat_jalan()) {
                redirect($this->_data['module_base_url'].'/surat-jalan');
                exit();
            }
            $this->_data['detail'] = $_POST;
        } else {
            $this->_data['detail'] = $this->crud_suratjalan->where('pbsrtjalan_id = "'.$id.'"')->get_row();
            $this->_data['surat'] = $this->crud_suratjalan_detail->where('pembelian_suratjalan.pbsrtjalan_id = "'.$id.'"')->join();
        }

        $this->_data['option_referensi'] = $this->crud_kwitansi->get_option_info_detail();
        $this->_data['option_matauang'] = $this->crud_matauang->get_option();

        $this->_data['option_barang'] = $this->crud_barangjasa->get_option();
		$this->template->set('title', 'Edit Surat Jalan Pembelian | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'surat_jalan_edit', $this->_data);
	}

    private function do_edit_surat_jalan()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('pbsrtjalan_no', 'No', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
        $this->form_validation->set_rules('pbsrtjalan_tanggal', 'Tanggal', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');

         if($_FILES['uploadfile']['size'] != 0){
        $upload_dir = './assets/images/';
        $config['upload_path']   = $upload_dir;
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['file_name']     = 'suratjalan_'.substr(md5(rand()),0,7);
        $config['overwrite']     = false;
        $config['max_size']  = '5120';

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('uploadfile')){
            $filename = '';
        }
        else{
            $this->upload_data['file'] =  $this->upload->data();
            $filename = $this->upload->file_name;
        }
        }

        $tmp = $this->crud_kwitansi->get_option_info_detail($this->input->post('pbsrtjalan_pbkw_id'));
        $additional = $tmp[$this->input->post('pbsrtjalan_pbkw_id')];

        if($this->form_validation->run() AND $_FILES['uploadfile']['size'] != 0) {
            $db_data = array(
                'pbsrtjalan_pbkw_id' => $this->input->post('pbsrtjalan_pbkw_id'),
                'pbsrtjalan_pbptn_id' => $additional['pbkw_pbptn_id'],
                'pbsrtjalan_tanggal' => $this->input->post('pbsrtjalan_tanggal'),
                'pbsrtjalan_no' => $this->input->post('pbsrtjalan_no'),
                'pbsrtjalan_halaman' => $this->input->post('pbsrtjalan_halaman'),
                'pbsrtjalan_matauang' => $this->input->post('pbsrtjalan_matauang'),
                'pbsrtjalan_vendor' => $this->input->post('pbsrtjalan_vendor'),
                'pbsrtjalan_proposalno' => $this->input->post('pbsrtjalan_proposalno'),
                'pbsrtjalan_projectcode' => $this->input->post('pbsrtjalan_projectcode'),
                'pbsrtjalan_buyer' => $this->input->post('pbsrtjalan_buyer'),
                'pbsrtjalan_catatan' => $this->input->post('pbsrtjalan_catatan'),
                'pbsrtjalan_terms' => $this->input->post('pbsrtjalan_terms'),
                'pbsrtjalan_tanggalditerima' => $this->input->post('pbsrtjalan_tanggalditerima'),
                'pbsrtjalan_diterimaoleh' => $this->input->post('pbsrtjalan_diterimaoleh'),
                'pbsrtjalan_namapenerima' => $this->input->post('pbsrtjalan_namapenerima'),
                'pbsrtjalan_tanggalterima' => $this->input->post('pbsrtjalan_tanggalterima'),
                'pbsrtjalan_totaltagihan' => $this->input->post('pbsrtjalan_totaltagihan'),
                'pbsrtjalan_terbilang' => $this->input->post('pbsrtjalan_terbilang'),
                'pbsrtjalan_nokendaraan' => $this->input->post('pbsrtjalan_nokendaraan'),
                'uploadfile'  => $filename,
            );
              $this->crud_suratjalan->where('pbsrtjalan_id = "'.$this->input->post('pbsrtjalan_id').'"')->puts($db_data);
              $barang = $this->input->post('pbsuratjaland_jenisbarang');
             $jumlah = $this->input->post('pbsuratjaland_jumlah');
             $invd_id = $this->input->post('pbsuratjaland_id');

            foreach($barang as $key=>$val)
            {
               $data = array(
                'pbsuratjaland_jenisbarang' => $val,
                'pbsuratjaland_jumlah' => $jumlah[$key],
              );
                $this->crud_suratjalan_detail->where('pbsuratjaland_nopermintaan = "'.$this->input->post('pbsrtjalan_no').'"')
                                          ->where('pbsuratjaland_jenisbarang > 0')
                                          ->where('pbsuratjaland_id = "'.$invd_id[$key].'"')
                                          ->puts($data);
            }

            $this->crud_suratjalan->update_relation_referensi($this->input->post('pbsrtjalan_id'), $this->input->post('pbsrtjalan_pbkw_id'), $additional['pbkw_pbptn_id']);

            return true;
        }elseif ($this->form_validation->run()) {
            $db_data = array(
                'pbsrtjalan_pbkw_id' => $this->input->post('pbsrtjalan_pbkw_id'),
                'pbsrtjalan_pbptn_id' => $additional['pbkw_pbptn_id'],
                'pbsrtjalan_tanggal' => $this->input->post('pbsrtjalan_tanggal'),
                'pbsrtjalan_no' => $this->input->post('pbsrtjalan_no'),
                'pbsrtjalan_halaman' => $this->input->post('pbsrtjalan_halaman'),
                'pbsrtjalan_matauang' => $this->input->post('pbsrtjalan_matauang'),
                'pbsrtjalan_vendor' => $this->input->post('pbsrtjalan_vendor'),
                'pbsrtjalan_proposalno' => $this->input->post('pbsrtjalan_proposalno'),
                'pbsrtjalan_projectcode' => $this->input->post('pbsrtjalan_projectcode'),
                'pbsrtjalan_buyer' => $this->input->post('pbsrtjalan_buyer'),
                'pbsrtjalan_catatan' => $this->input->post('pbsrtjalan_catatan'),
                'pbsrtjalan_terms' => $this->input->post('pbsrtjalan_terms'),
                'pbsrtjalan_tanggalditerima' => $this->input->post('pbsrtjalan_tanggalditerima'),
                'pbsrtjalan_diterimaoleh' => $this->input->post('pbsrtjalan_diterimaoleh'),
                'pbsrtjalan_namapenerima' => $this->input->post('pbsrtjalan_namapenerima'),
                'pbsrtjalan_tanggalterima' => $this->input->post('pbsrtjalan_tanggalterima'),
                'pbsrtjalan_totaltagihan' => $this->input->post('pbsrtjalan_totaltagihan'),
                'pbsrtjalan_terbilang' => $this->input->post('pbsrtjalan_terbilang'),
                'pbsrtjalan_nokendaraan' => $this->input->post('pbsrtjalan_nokendaraan'),
            );
              $this->crud_suratjalan->where('pbsrtjalan_id = "'.$this->input->post('pbsrtjalan_id').'"')->puts($db_data);
              $barang = $this->input->post('pbsuratjaland_jenisbarang');
             $jumlah = $this->input->post('pbsuratjaland_jumlah');
             $invd_id = $this->input->post('pbsuratjaland_id');

            foreach($barang as $key=>$val)
            {
               $data = array(
                'pbsuratjaland_jenisbarang' => $val,
                'pbsuratjaland_jumlah' => $jumlah[$key],
              );
                $this->crud_suratjalan_detail->where('pbsuratjaland_nopermintaan = "'.$this->input->post('pbsrtjalan_no').'"')
                                          ->where('pbsuratjaland_jenisbarang > 0')
                                          ->where('pbsuratjaland_id = "'.$invd_id[$key].'"')
                                          ->puts($data);
            }

            $this->crud_suratjalan->update_relation_referensi($this->input->post('pbsrtjalan_id'), $this->input->post('pbsrtjalan_pbkw_id'), $additional['pbkw_pbptn_id']);

            return true;
        } else {
            $this->_data['err_msg'] = validation_errors();
            return false;
        }

    }
    function delete_surat_jalan($id)
    {
        $this->crud_suratjalan->where('pbsrtjalan_id = "'.$id.'"')->delete($db_data);
        redirect($this->_data['module_base_url'].'/surat-jalan');
    }
	function invoice() {
        $this->_data['result'] = $this->crud_invoice->get_all();

        $this->_data['total'] = $this->total_permintaan();

    	$this->template->set('title', 'Invoice Pembelian | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
    	$this->template->set('assets', $this->_data['assets']);
    	$this->template->load('template_frontend/main', 'invoice', $this->_data);
	}

	function add_invoice() {
         if(!empty($_POST)) {
            if($this->do_add_invoice()) {
                redirect($this->_data['module_base_url'].'/invoice');
                exit();
            }
        }

        $this->_data['option_referensi'] = $this->crud_suratjalan->get_option_info_detail();

        $this->_data['option_barang'] = $this->crud_barangjasa->get_option();
		$this->template->set('title', 'Tambah Invoice Pembelian | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'invoice_add', $this->_data);
	}

    private function do_add_invoice() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('pbinv_noinvoice', 'Invoice No', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
        $this->form_validation->set_rules('pbinv_tanggal', 'Tanggal', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
        $this->form_validation->set_rules('pbinv_wo', 'WO No', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
        $this->form_validation->set_rules('pbinv_nopenawaran', 'Penawaran WO', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
        $this->form_validation->set_rules('pbinv_totaltagihan', 'Total Tagihan', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
        $this->form_validation->set_rules('pbinv_terbilang', 'Terbilang', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
        $this->form_validation->set_rules('pbinv_description', 'Deskripsi Kirim', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');

        if($_FILES['uploadfile']['size'] != 0){
            $upload_dir = './assets/images/';
            $config['upload_path']   = $upload_dir;
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['file_name']     = 'invoicepembelian_'.substr(md5(rand()),0,7);
            $config['overwrite']     = false;
            $config['max_size']  = '5120';

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
            $tmp = $this->crud_suratjalan->get_option_info_detail($this->input->post('pbinv_pbsrtjalan_id'));
            $additional = $tmp[$this->input->post('pbinv_pbsrtjalan_id')];

            $db_data = array(
                'pbinv_pbsrtjalan_id' => $this->input->post('pbinv_pbsrtjalan_id'),
                'pbinv_pbkw_id' => $additional['pbsrtjalan_pbkw_id'],
                'pbinv_pbptn_id' => $additional['pbsrtjalan_pbptn_id'],
                'pbinv_noinvoice' => $this->input->post('pbinv_noinvoice'),
                'pbinv_tanggal' => $this->input->post('pbinv_tanggal'),
                'pbinv_wotgl' => $this->input->post('pbinv_wotgl'),
                'pbinv_wo' => $this->input->post('pbinv_wo'),
                'pbinv_to' => $this->input->post('pbinv_to'),
                'pbinv_alamat' => $this->input->post('pbinv_alamat'),
                'pbinv_nopenawaran' => $this->input->post('pbinv_nopenawaran'),
                'pbinv_totaltagihan' => $this->input->post('pbinv_totaltagihan'),
                'pbinv_terbilang' => $this->input->post('pbinv_terbilang'),
                'pbinv_description' => $this->input->post('pbinv_description'),
                'uploadfile'    => $filename,
            );
            $this->crud_invoice->posts($db_data);

             $barang = $this->input->post('pbinvd_jenisbarang');
             $jumlah = $this->input->post('pbinvd_jumlah');

            foreach($barang as $key=>$val)
            {
               $data = array(
                'pbinvd_invid' => $this->input->post('pbinv_noinvoice'),
                'pbinvd_jenisbarang' => $val,
                'pbinvd_jumlah' => $jumlah[$key],
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
                redirect($this->_data['module_base_url'].'/invoice');
                exit();
            }
            $this->_data['detail'] = $_POST;
        } else {
            $this->_data['detail'] = $this->crud_invoice->where('pbinv_id = "'.$id.'"')->get_row();
            $this->_data['invoice'] = $this->crud_invoice_detail->where('pembelian_invoice.pbinv_id = "'.$id.'"')->join();
        }

        $this->_data['option_barang'] = $this->crud_barangjasa->get_option();
        $this->_data['option_referensi'] = $this->crud_suratjalan->get_option_info_detail();

		$this->template->set('title', 'Edit Invoice Pembelian | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'invoice_edit', $this->_data);
	}

    private function do_edit_invoice() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('pbinv_noinvoice', 'Invoice No', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
        $this->form_validation->set_rules('pbinv_tanggal', 'Tanggal', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
        $this->form_validation->set_rules('pbinv_wo', 'WO No', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
        $this->form_validation->set_rules('pbinv_nopenawaran', 'Penawaran WO', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
        $this->form_validation->set_rules('pbinv_totaltagihan', 'Total Tagihan', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
        $this->form_validation->set_rules('pbinv_terbilang', 'Terbilang', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
        $this->form_validation->set_rules('pbinv_description', 'Deskripsi Kirim', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');


        if($_FILES['uploadfile']['size'] != 0){
        $upload_dir = './assets/images/';
        $config['upload_path']   = $upload_dir;
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['file_name']     = 'invoicepembelian_'.substr(md5(rand()),0,7);
        $config['overwrite']     = false;
        $config['max_size']  = '5120';

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('uploadfile')){
            $filename = '';
        }
        else{
            $this->upload_data['file'] =  $this->upload->data();
            $filename = $this->upload->file_name;
        }
        }

        $tmp = $this->crud_suratjalan->get_option_info_detail($this->input->post('pbinv_pbsrtjalan_id'));
        $additional = $tmp[$this->input->post('pbinv_pbsrtjalan_id')];

        if($this->form_validation->run() AND $_FILES['uploadfile']['size'] != 0) {
            $db_data = array(
                'pbinv_pbsrtjalan_id' => $this->input->post('pbinv_pbsrtjalan_id'),
                'pbinv_pbkw_id' => $additional['pbsrtjalan_pbkw_id'],
                'pbinv_pbptn_id' => $additional['pbsrtjalan_pbptn_id'],
                'pbinv_noinvoice' => $this->input->post('pbinv_noinvoice'),
                'pbinv_tanggal' => $this->input->post('pbinv_tanggal'),
                'pbinv_wotgl' => $this->input->post('pbinv_wotgl'),
                'pbinv_wo' => $this->input->post('pbinv_wo'),
                'pbinv_nopenawaran' => $this->input->post('pbinv_nopenawaran'),
                'pbinv_to' => $this->input->post('pbinv_to'),
                'pbinv_alamat' => $this->input->post('pbinv_alamat'),
                'pbinv_totaltagihan' => $this->input->post('pbinv_totaltagihan'),
                'pbinv_terbilang' => $this->input->post('pbinv_terbilang'),
                'pbinv_description' => $this->input->post('pbinv_description'),
                'uploadfile'  => $filename,
            );
             $this->crud_invoice->where('pbinv_id = "'.$this->input->post('pbinv_id').'"')->puts($db_data);

             $barang = $this->input->post('pbinvd_jenisbarang');
             $jumlah = $this->input->post('pbinvd_jumlah');
             $invd_id = $this->input->post('pbinvd_id');

            foreach($barang as $key=>$val)
            {
               $data = array(
                'pbinvd_jenisbarang' => $val,
                'pbinvd_jumlah' => $jumlah[$key],
              );
                $this->crud_invoice_detail->where('pbinvd_invid = "'.$this->input->post('pbinv_noinvoice').'"')
                                          ->where('pbinvd_jenisbarang > 0')
                                          ->where('pbinvd_id = "'.$invd_id[$key].'"')
                                          ->puts($data);
            }

            $this->crud_invoice->update_relation_referensi($this->input->post('pbinv_id'), $this->input->post('pbinv_pbsrtjalan_id'), $additional['pbsrtjalan_pbkw_id'], $additional['pbsrtjalan_pbptn_id']);

            return true;
        }elseif ($this->form_validation->run()) {
            $db_data = array(
                'pbinv_pbsrtjalan_id' => $this->input->post('pbinv_pbsrtjalan_id'),
                'pbinv_pbkw_id' => $additional['pbsrtjalan_pbkw_id'],
                'pbinv_pbptn_id' => $additional['pbsrtjalan_pbptn_id'],
                'pbinv_noinvoice' => $this->input->post('pbinv_noinvoice'),
                'pbinv_tanggal' => $this->input->post('pbinv_tanggal'),
                'pbinv_wotgl' => $this->input->post('pbinv_wotgl'),
                'pbinv_wo' => $this->input->post('pbinv_wo'),
                'pbinv_nopenawaran' => $this->input->post('pbinv_nopenawaran'),
                'pbinv_to' => $this->input->post('pbinv_to'),
                'pbinv_alamat' => $this->input->post('pbinv_alamat'),
                'pbinv_totaltagihan' => $this->input->post('pbinv_totaltagihan'),
                'pbinv_terbilang' => $this->input->post('pbinv_terbilang'),
                'pbinv_description' => $this->input->post('pbinv_description'),
            );
             $this->crud_invoice->where('pbinv_id = "'.$this->input->post('pbinv_id').'"')->puts($db_data);

             $barang = $this->input->post('pbinvd_jenisbarang');
             $jumlah = $this->input->post('pbinvd_jumlah');
             $invd_id = $this->input->post('pbinvd_id');

            foreach($barang as $key=>$val)
            {
               $data = array(
                'pbinvd_jenisbarang' => $val,
                'pbinvd_jumlah' => $jumlah[$key],
              );
                $this->crud_invoice_detail->where('pbinvd_invid = "'.$this->input->post('pbinv_noinvoice').'"')
                                          ->where('pbinvd_jenisbarang > 0')
                                          ->where('pbinvd_id = "'.$invd_id[$key].'"')
                                          ->puts($data);
            }

            $this->crud_invoice->update_relation_referensi($this->input->post('pbinv_id'), $this->input->post('pbinv_pbsrtjalan_id'), $additional['pbsrtjalan_pbkw_id'], $additional['pbsrtjalan_pbptn_id']);

            return true;
        } else {
            $this->_data['err_msg'] = validation_errors();
            return false;
        }

    }

    function pdf_invoice($id){
        require_once APPPATH.'third_party/dompdf/dompdf_config.inc.php';
        $this->_data['detail']  = $this->crud_invoice->where('pbinv_id = "'.$id.'"')->get_row();
        $this->_data['details']  = $this->crud_invoice_detail->where('pembelian_invoice.pbinv_id = "'.$id.'"')->join();

        $this->load->view('print_invoice_pembelian',  $this->_data);
        $html = $this->output->get_output();
        $this->load->library('dompdf_gen');
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("invoice_pembelian.pdf",array('Attachment'=>0));
        // $this->dompdf->stream("invoice_penjualan_".$id.".pdf");
    }

    function delete_invoice($id) {

       $this->crud_invoice->where('pbinv_id = "'.$id.'"')->delete($db_data);
        redirect($this->_data['module_base_url'].'/invoice');
    }

	function tanda_terima() {
        $this->_data['result'] = $this->crud_tanda_terima->order_by('pbttr_id', 'asc')->get_all();
        foreach ($this->_data['result'] as $key => $value) {
            $this->_data['result'][$key]['pbttr_lampiran'] = !empty($this->_data['result'][$key]['pbttr_lampiran']) ? unserialize($this->_data['result'][$key]['pbttr_lampiran']) : array();
            $this->_data['result'][$key]['pbttr_lampiran'] = join(', ', $this->_data['result'][$key]['pbttr_lampiran']);
        }

        $this->_data['total'] = $this->total_permintaan();

		$this->template->set('title', 'Tanda Terima Pembelian | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'tanda_terima', $this->_data);
	}

	function add_tanda_terima() {
        if(!empty($_POST)) {
            if($this->do_add_tanda_terima()) {
                redirect($this->_data['module_base_url'].'/tanda-terima');
                exit();
            }
        }

        $this->_data['option_referensi'] = $this->crud_invoice->get_option_info_detail();

		$this->template->set('title', 'Tambah Tanda Terima Pembelian | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'tanda_terima_add', $this->_data);
	}

    private function do_add_tanda_terima()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('pbttr_no', 'No Kwitansi', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');

        if($_FILES['uploadfile']['size'] != 0){
        $upload_dir = './assets/images/';
        $config['upload_path']   = $upload_dir;
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['file_name']     = 'tandaterima_'.substr(md5(rand()),0,7);
        $config['overwrite']     = false;
        $config['max_size']  = '5120';

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
            $tmp = $this->crud_invoice->get_option_info_detail($this->input->post('pbttr_pbinv_id'));
            $additional = $tmp[$this->input->post('pbttr_pbinv_id')];

            $db_data = array(
                'pbttr_pbinv_id' => $this->input->post('pbttr_pbinv_id'),
                'pbttr_pbsrtjalan_id' => $additional['pbinv_pbsrtjalan_id'],
                'pbttr_pbkw_id' => $additional['pbinv_pbkw_id'],
                'pbttr_pbptn_id' => $additional['pbinv_pbptn_id'],
                'pbttr_no' => $this->input->post('pbttr_no'),
                'pbttr_noproyek' => $this->input->post('pbttr_noproyek'),
                'pbttr_tghndari' => $this->input->post('pbttr_tghndari'),
                'pbttr_tagihan' => $this->input->post('pbttr_tagihan'),
                'pbttr_mtuang' => $this->input->post('pbttr_mtuang'),
                'pbttr_nilaitagihan' => $this->input->post('pbttr_nilaitagihan'),
                'pbttr_lampiran' => serialize($this->input->post('pbttr_lampiran')),
                'pbttr_tglkembali' => $this->input->post('pbttr_tglkembali'),
                'pbttr_nobpkc' => $this->input->post('pbttr_nobpkc'),
                'pbttr_tglbpkc' => $this->input->post('pbttr_tglbpkc'),
                'pbttr_menerima' => $this->input->post('pbttr_menerima'),
                'pbttr_tglterima' => $this->input->post('pbttr_tglterima'),
                'pbttr_uploadfile'  => $filename,
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
                redirect($this->_data['module_base_url'].'/tanda-terima');
                exit();
            }
            $this->_data['detail'] = $_POST;
        } else {
            $this->_data['detail'] = $this->crud_tanda_terima->where('pbttr_id = "'.$id.'"')->get_row();
            $this->_data['detail']['pbttr_lampiran'] = !empty($this->_data['detail']['pbttr_lampiran']) ? unserialize($this->_data['detail']['pbttr_lampiran']) : array();
        }

        $this->_data['option_referensi'] = $this->crud_invoice->get_option_info_detail();

		$this->template->set('title', 'Edit Tanda Terima Pembelian | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'tanda_terima_edit', $this->_data);
	}

    function delete_tanda_terima($id) {

        $this->crud_tanda_terima->where('pbttr_id = "'.$id.'"')->delete($db_data);

        redirect($this->_data['module_base_url'].'/tanda-terima');
    }

    function pdf_tanda_terima($id){
        /*
        require_once APPPATH.'third_party/dompdf/dompdf_config.inc.php';
        $this->_data['detail']  = $this->crud_tanda_terima->where('pbttr_id = "'.$id.'"')->get_row();
        $tmp = $this->total_permintaan($this->_data['detail']['pbttr_pbptn_id']);
        $this->_data['detail']['pbttr_nilaitagihan'] = !empty($tmp[$this->_data['detail']['pbttr_pbptn_id']]) ? $tmp[$this->_data['detail']['pbttr_pbptn_id']] : 0;
        $this->_data['detail']['pbttr_mtuang'] = 'Rp';

        $tmp = !empty($this->_data['detail']['pbttr_lampiran']) ? unserialize($this->_data['detail']['pbttr_lampiran']) : array();
        $this->_data['detail']['pbttr_lampiran'] = join(', ', $tmp);

        $this->load->view('print_tandaterima_pembelian',  $this->_data);
        $html = $this->output->get_output();
        $this->load->library('dompdf_gen');
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("invoice_pembelian.pdf",array('Attachment'=>0));
        // $this->dompdf->stream("invoice_penjualan_".$id.".pdf");
        */

        $this->_data['detail']  = $this->crud_tanda_terima->where('pbttr_id = "'.$id.'"')->get_row();
        $tmp = $this->total_permintaan($this->_data['detail']['pbttr_pbptn_id']);
        $this->_data['detail']['pbttr_nilaitagihan'] = !empty($tmp[$this->_data['detail']['pbttr_pbptn_id']]) ? $tmp[$this->_data['detail']['pbttr_pbptn_id']] : 0;
        $this->_data['detail']['pbttr_mtuang'] = 'Rp';

        $tmp = !empty($this->_data['detail']['pbttr_lampiran']) ? unserialize($this->_data['detail']['pbttr_lampiran']) : array();
        $this->_data['detail']['pbttr_lampiran'] = join(', ', $tmp);

        $this->load->view('print_tandaterima_pembelian',  $this->_data);
    }


	function bukti_pembayaran() {
        $this->_data['result'] = $this->crud_buktipembayaran->order_by('bp_id', 'asc')->get_all();
		$this->template->set('title', 'Bukti Pembayaran Pembelian | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'bukti_pembayaran', $this->_data);
	}
    private function do_edit_tanda_terima()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('pbttr_no', 'No Kwitansi', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');

        if($_FILES['uploadfile']['size'] != 0){
        $upload_dir = './assets/images/';
        $config['upload_path']   = $upload_dir;
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['file_name']     = 'tandaterima_'.substr(md5(rand()),0,7);
        $config['overwrite']     = false;
        $config['max_size']  = '5120';

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('uploadfile')){
            $filename = '';
        }
        else{
            $this->upload_data['file'] =  $this->upload->data();
            $filename = $this->upload->file_name;
        }
        }

        $tmp = $this->crud_invoice->get_option_info_detail($this->input->post('pbttr_pbinv_id'));
        $additional = $tmp[$this->input->post('pbttr_pbinv_id')];

        if($this->form_validation->run() AND $_FILES['uploadfile']['size'] != 0) {
            $db_data = array(
                'pbttr_pbinv_id' => $this->input->post('pbttr_pbinv_id'),
                'pbttr_pbsrtjalan_id' => $additional['pbinv_pbsrtjalan_id'],
                'pbttr_pbkw_id' => $additional['pbinv_pbkw_id'],
                'pbttr_pbptn_id' => $additional['pbinv_pbptn_id'],
                'pbttr_no' => $this->input->post('pbttr_no'),
                'pbttr_noproyek' => $this->input->post('pbttr_noproyek'),
                'pbttr_tghndari' => $this->input->post('pbttr_tghndari'),
                'pbttr_tagihan' => $this->input->post('pbttr_tagihan'),
                'pbttr_mtuang' => $this->input->post('pbttr_mtuang'),
                'pbttr_nilaitagihan' => $this->input->post('pbttr_nilaitagihan'),
                'pbttr_lampiran' => serialize($this->input->post('pbttr_lampiran')),
                'pbttr_tglkembali' => $this->input->post('pbttr_tglkembali'),
                'pbttr_nobpkc' => $this->input->post('pbttr_nobpkc'),
                'pbttr_tglbpkc' => $this->input->post('pbttr_tglbpkc'),
                'pbttr_menerima' => $this->input->post('pbttr_menerima'),
                'pbttr_tglterima' => $this->input->post('pbttr_tglterima'),
                'pbttr_uploadfile'  => $filename,
            );

            $this->crud_tanda_terima->where('pbttr_id = "'.$this->input->post('pbttr_id').'"')->puts($db_data);

            $this->crud_tanda_terima->update_relation_referensi($this->input->post('pbttr_id'), $this->input->post('pbttr_pbinv_id'), $additional['pbinv_pbsrtjalan_id'], $additional['pbinv_pbkw_id'], $additional['pbinv_pbptn_id']);

            return true;
        }elseif ($this->form_validation->run()) {
            $db_data = array(
                'pbttr_pbinv_id' => $this->input->post('pbttr_pbinv_id'),
                'pbttr_pbsrtjalan_id' => $additional['pbinv_pbsrtjalan_id'],
                'pbttr_pbkw_id' => $additional['pbinv_pbkw_id'],
                'pbttr_pbptn_id' => $additional['pbinv_pbptn_id'],
                'pbttr_no' => $this->input->post('pbttr_no'),
                'pbttr_noproyek' => $this->input->post('pbttr_noproyek'),
                'pbttr_tghndari' => $this->input->post('pbttr_tghndari'),
                'pbttr_tagihan' => $this->input->post('pbttr_tagihan'),
                'pbttr_mtuang' => $this->input->post('pbttr_mtuang'),
                'pbttr_nilaitagihan' => $this->input->post('pbttr_nilaitagihan'),
                'pbttr_lampiran' => serialize($this->input->post('pbttr_lampiran')),
                'pbttr_tglkembali' => $this->input->post('pbttr_tglkembali'),
                'pbttr_nobpkc' => $this->input->post('pbttr_nobpkc'),
                'pbttr_tglbpkc' => $this->input->post('pbttr_tglbpkc'),
                'pbttr_menerima' => $this->input->post('pbttr_menerima'),
                'pbttr_tglterima' => $this->input->post('pbttr_tglterima'),
            );

            $this->crud_tanda_terima->where('pbttr_id = "'.$this->input->post('pbttr_id').'"')->puts($db_data);

            $this->crud_tanda_terima->update_relation_referensi($this->input->post('pbttr_id'), $this->input->post('pbttr_pbinv_id'), $additional['pbinv_pbsrtjalan_id'], $additional['pbinv_pbkw_id'], $additional['pbinv_pbptn_id']);

            return true;
        } else {
            $this->_data['err_msg'] = validation_errors();
            return false;
        }
    }
	function add_bukti_pembayaran() {
         if(!empty($_POST)) {
            if($this->do_add_bukti_pembayaran()) {
                redirect($this->_data['module_base_url'].'/bukti-pembayaran');
                exit();
            }
        }

        $this->_data['option_referensi'] = $this->crud_tanda_terima->get_option_info_detail();

		$this->template->set('title', 'Tambah Bukti Pembayaran Pembelian | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'bukti_pembayaran_add', $this->_data);
	}

    private function do_add_bukti_pembayaran() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('bp_no', 'Nomor', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
        $this->form_validation->set_rules('bp_tgltransaksi', 'Tanggal Transaksi', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
        $this->form_validation->set_rules('bp_norekening', 'No Rekening', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
        $this->form_validation->set_rules('bp_noinvoice', 'No Invoice', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
        $this->form_validation->set_rules('bp_tagihan', 'Tagihan', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
        $this->form_validation->set_rules('bp_terbilang', 'Terbilang', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
        $this->form_validation->set_rules('bp_tgltransaksi', 'Tanggal Transaksi', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
        $this->form_validation->set_rules('bp_jamtransaksi', 'Jam Transaksi', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
        $this->form_validation->set_rules('bp_jenistransaksi', 'Jenis Transaksi', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');

        if($this->form_validation->run()) {
            $tmp = $this->crud_tanda_terima->get_option_info_detail($this->input->post('bp_pbttr_id'));
            $additional = $tmp[$this->input->post('bp_pbttr_id')];

            $db_data = array(
                'bp_pbttr_id' => $this->input->post('bp_pbttr_id'),
                'bp_pbinv_id' => $additional['pbttr_pbinv_id'],
                'bp_pbsrtjalan_id' => $additional['pbttr_pbsrtjalan_id'],
                'bp_pbkw_id' => $additional['pbttr_pbkw_id'],
                'bp_pbptn_id' => $additional['pbttr_pbptn_id'],
                'bp_no'             => $this->input->post('bp_no'),
                'bp_tgltransaksi'   => $this->input->post('bp_tgltransaksi'),
                'bp_norekening'     => $this->input->post('bp_norekening'),
                'bp_namarekening'   => $this->input->post('bp_namarekening'),
                'bp_noinvoice'      => $this->input->post('bp_noinvoice'),
                'bp_tagihan'        => $this->input->post('bp_tagihan'),
                'bp_terbilang'      => $this->input->post('bp_terbilang'),
                'bp_tgltransaksi'   => $this->input->post('bp_tgltransaksi'),
                'bp_jamtransaksi'   => $this->input->post('bp_jamtransaksi'),
                'bp_jenistransaksi' => $this->input->post('bp_jenistransaksi')
            );
            $this->crud_buktipembayaran->posts($db_data);

            return true;
        } else {
            $this->_data['err_msg'] = validation_errors();
            return false;
        }
    }

       function pdf_bukti_pembayaran($id){
        /*
        require_once APPPATH.'third_party/dompdf/dompdf_config.inc.php';
        $this->_data['detail'] = $this->db->join('pembelian_invoice', 'pbinv_id = bp_pbinv_id')->join('pembelian_kwitansi', 'pbkw_id = bp_pbkw_id')->where('bp_id = "'.$id.'"')->get('gntrapp_bukti_pembayaran')->row_array();

        $tmp = $this->total_permintaan($this->_data['detail']['bp_pbptn_id']);
        $this->_data['totaltagihan'] = (!empty($tmp[$this->_data['detail']['bp_pbptn_id']]) ? add_numberformat($tmp[$this->_data['detail']['bp_pbptn_id']]) : 0);

        $this->_data['terbilang'] = !empty($this->_data['totaltagihan']) ? terbilang(clear_numberformat($this->_data['totaltagihan'])) : '-';

         // Load all views as normal
        $this->load->view('print_bukti_pembayaran',  $this->_data);
        // Get output html
        $html = $this->output->get_output();

        // Load library
        $this->load->library('dompdf_gen');

        // Convert to PDF
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("bukti_pembayaran".$id.".pdf",array('Attachment'=>0));
        // $this->dompdf->stream("bukti_pembayaran".$id.".pdf");
        */

        $this->_data['detail'] = $this->db->join('pembelian_invoice', 'pbinv_id = bp_pbinv_id')->join('pembelian_kwitansi', 'pbkw_id = bp_pbkw_id')->where('bp_id = "'.$id.'"')->get('gntrapp_bukti_pembayaran')->row_array();

        $tmp = $this->total_permintaan($this->_data['detail']['bp_pbptn_id']);
        $this->_data['totaltagihan'] = (!empty($tmp[$this->_data['detail']['bp_pbptn_id']]) ? add_numberformat($tmp[$this->_data['detail']['bp_pbptn_id']]) : 0);

        $this->_data['terbilang'] = !empty($this->_data['totaltagihan']) ? terbilang(clear_numberformat($this->_data['totaltagihan'])) : '-';

         // Load all views as normal
        $this->load->view('print_bukti_pembayaran',  $this->_data);
    }

	function edit_bukti_pembayaran($id) {
         if(!empty($_POST)) {
            if($this->do_edit_bukti_pembayaran()) {
                redirect($this->_data['module_base_url'].'/bukti-pembayaran');
                exit();
            }
            $this->_data['detail'] = $_POST;
        } else {
            $this->_data['detail'] = $this->crud_buktipembayaran->where('bp_id = "'.$id.'"')->get_row();
        }

        $this->_data['option_referensi'] = $this->crud_tanda_terima->get_option_info_detail();

		$this->template->set('title', 'Edit Bukti Pembayaran Pembelian | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'bukti_pembayaran_edit', $this->_data);
	}

    private function do_edit_bukti_pembayaran()
    {
         $this->load->library('form_validation');

        $this->form_validation->set_rules('bp_no', 'Nomor', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
        $this->form_validation->set_rules('bp_tgltransaksi', 'Tanggal Transaksi', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
        $this->form_validation->set_rules('bp_norekening', 'No Rekening', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
        $this->form_validation->set_rules('bp_noinvoice', 'No Invoice', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
        $this->form_validation->set_rules('bp_tagihan', 'Tagihan', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
        $this->form_validation->set_rules('bp_terbilang', 'Terbilang', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
        $this->form_validation->set_rules('bp_tgltransaksi', 'Tanggal Transaksi', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
        $this->form_validation->set_rules('bp_jamtransaksi', 'Jam Transaksi', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
        $this->form_validation->set_rules('bp_jenistransaksi', 'Jenis Transaksi', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');


        if($this->form_validation->run()) {
            $tmp = $this->crud_tanda_terima->get_option_info_detail($this->input->post('bp_pbttr_id'));
            $additional = $tmp[$this->input->post('bp_pbttr_id')];
            
            $db_data = array(
                'bp_pbttr_id' => $this->input->post('bp_pbttr_id'),
                'bp_pbinv_id' => $additional['pbttr_pbinv_id'],
                'bp_pbsrtjalan_id' => $additional['pbttr_pbsrtjalan_id'],
                'bp_pbkw_id' => $additional['pbttr_pbkw_id'],
                'bp_pbptn_id' => $additional['pbttr_pbptn_id'],
                'bp_no'             => $this->input->post('bp_no'),
                'bp_tgltransaksi'   => $this->input->post('bp_tgltransaksi'),
                'bp_norekening'     => $this->input->post('bp_norekening'),
                'bp_namarekening'   => $this->input->post('bp_namarekening'),
                'bp_noinvoice'      => $this->input->post('bp_noinvoice'),
                'bp_tagihan'        => $this->input->post('bp_tagihan'),
                'bp_terbilang'      => $this->input->post('bp_terbilang'),
                'bp_tgltransaksi'   => $this->input->post('bp_tgltransaksi'),
                'bp_jamtransaksi'   => $this->input->post('bp_jamtransaksi'),
                'bp_jenistransaksi' => $this->input->post('bp_jenistransaksi')
            );
            $this->crud_buktipembayaran->where('bp_id = "'.$this->input->post('bp_id').'"')->puts($db_data);
            return true;
        } else {
            $this->_data['err_msg'] = validation_errors();
            return false;
        }
    }

    function delete_bukti_pembayaran($id)
    {
        $this->crud_buktipembayaran->where('bp_id = "'.$id.'"')->delete($db_data);
        redirect($this->_data['module_base_url'].'/bukti-pembayaran');
    }

    function referensi($id) {
        $result = $this->db->from('pembelian_permintaan')->join('vendor', 'pbptn_vndr_id=vndr_id')->where('pbptn_id = "'.$id.'"')->get()->row_array();
        $tmp = $this->total_permintaan($result['pbptn_id']);
        $result['pbptn_totaltagihan'] = (!empty($tmp[$result['pbptn_id']]) ? add_numberformat($tmp[$result['pbptn_id']]) : 0);
        echo json_encode($result);
    }

    function referensi_kwitansi($id) {
        $result = $this->db->from('pembelian_kwitansi')->join('pembelian_permintaan', 'pbkw_pbptn_id=pbptn_id')->join('vendor', 'pbptn_vndr_id=vndr_id')->where('pbkw_id = "'.$id.'"')->get()->row_array();
        $tmp = $this->total_permintaan($result['pbptn_id']);
        $result['pbptn_totaltagihan'] = (!empty($tmp[$result['pbptn_id']]) ? add_numberformat($tmp[$result['pbptn_id']]) : 0);

        $result['pbsrtjalan_terbilang'] = !empty($result['pbptn_totaltagihan']) ? terbilang(clear_numberformat($result['pbptn_totaltagihan'])) : '-';
        echo json_encode($result);
    }

    function referensi_suratjalan($id) {
        $result = $this->db->from('pembelian_suratjalan')->join('pembelian_permintaan', 'pbsrtjalan_pbptn_id=pbptn_id')->join('vendor', 'pbptn_vndr_id=vndr_id')->where('pbsrtjalan_id = "'.$id.'"')->get()->row_array();
        $tmp = $this->total_permintaan($result['pbptn_id']);
        $result['pbptn_totaltagihan'] = (!empty($tmp[$result['pbptn_id']]) ? add_numberformat($tmp[$result['pbptn_id']]) : 0);

        $result['pbinv_terbilang'] = !empty($result['pbptn_totaltagihan']) ? terbilang(clear_numberformat($result['pbptn_totaltagihan'])) : '-';
        echo json_encode($result);
    }

    function referensi_invoice($id) {
        $result = $this->db->from('pembelian_invoice')->join('pembelian_permintaan', 'pbinv_pbptn_id=pbptn_id')->join('vendor', 'pbptn_vndr_id=vndr_id')->where('pbinv_id = "'.$id.'"')->get()->row_array();
        $tmp = $this->total_permintaan($result['pbptn_id']);
        $result['pbptn_totaltagihan'] = (!empty($tmp[$result['pbptn_id']]) ? add_numberformat($tmp[$result['pbptn_id']]) : 0);

        echo json_encode($result);
    }

    function referensi_tandaterima($id) {
        $result = $this->db->from('pembelian_tandaterima')->join('pembelian_invoice', 'pbttr_pbinv_id=pbinv_id')->join('pembelian_kwitansi', 'pbttr_pbkw_id=pbkw_id')->join('pembelian_permintaan', 'pbttr_pbptn_id=pbptn_id')->join('vendor', 'pbptn_vndr_id=vndr_id')->where('pbttr_id = "'.$id.'"')->get()->row_array();
        $tmp = $this->total_permintaan($result['pbptn_id']);
        $result['pbptn_totaltagihan'] = (!empty($tmp[$result['pbptn_id']]) ? add_numberformat($tmp[$result['pbptn_id']]) : 0);

        $result['terbilang'] = !empty($result['pbptn_totaltagihan']) ? terbilang(clear_numberformat($result['pbptn_totaltagihan'])) : '-';
        echo json_encode($result);
    }

    function info_barang($id) {
        $result = $this->db->from('pembelian_permintaan')->join('pembelian_permintaan_detail', 'pbptn_no=pbptnd_nopermintaan')->join('barang_jasa', 'pbptnd_jenisbarang=brjs_id')->where('pbptn_id = "'.$id.'"')->get()->result_array();
        echo json_encode($result);
    }

    private function total_permintaan($id ='') {
        if(!empty($id)) {
            $details  = $this->crud_permintaan_detail->where('pbptn_id = "'.$id.'"')->join2();
        } else {
            $details  = $this->crud_permintaan_detail->join2();
        }
        
        $total = array();
        foreach ($details as $key => $value) {
            if(empty($total[$value['pbptn_id']])) $total[$value['pbptn_id']] = 0;
            $total[$value['pbptn_id']] += $value['pbptnd_jumlah'] * $value['brjs_harga_satuan'];
        }

        foreach ($total as $key => $value) {
            $total[$key] += ($value * 0.02) + ($value * 0.1);
        }

        return $total;
    }
}

?>