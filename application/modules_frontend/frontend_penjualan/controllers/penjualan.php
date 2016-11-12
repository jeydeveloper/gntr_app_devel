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
        $this->load->model('frontend_penjualan/crud_permintaan', 'crud_permintaan');
        $this->load->model('frontend_penjualan/crud_invoice', 'crud_invoice');
        $this->load->model('frontend_penjualan/crud_invoice_detail', 'crud_invoice_detail');
        $this->load->model('frontend_penjualan/crud_kwitansi', 'crud_kwitansi');
        $this->load->model('frontend_barangjasa/crud_barangjasa', 'crud_barangjasa');
        $this->load->model('frontend_penjualan/crud_berita_acara', 'crud_berita_acara');
        $this->load->model('frontend_penjualan/crud_bukti_pembayaran', 'crud_bukti_pembayaran');
        $this->load->model('frontend_penjualan/crud_tanda_terima', 'crud_tanda_terima');
        $this->load->model('frontend_penjualan/crud_penawaran_detail', 'crud_penawaran_detail');

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
        $this->_data['option_barang'] = $this->crud_barangjasa->get_option();
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
				'ppnw_biaya_kirim' => clear_numberformat($this->input->post('ppnw_biaya_kirim')),
				'ppnw_nilai_faktur' => clear_numberformat($this->input->post('ppnw_nilai_faktur')),
				'ppnw_keterangan' => $this->input->post('ppnw_keterangan'),
				'ppnw_keterangan_print_out' => $this->input->post('ppnw_keterangan_print_out'),
				'ppnw_entrydate' => $this->_data['datetime'],
			);
			$this->crud->posts_penawaran($db_data);

			$last_id = $this->db->insert_id();

            $barang      = $this->input->post('ppnwd_jenisbarang');
            $barang2      = $this->input->post('ppnwd_jenisbarang2');
            $volume      = $this->input->post('ppnwd_volume');
            $deskripsi   = $this->input->post('ppnwd_deskripsi_id');
            $satuan      = $this->input->post('ppnwd_satuan');
            $hargasatuan = $this->input->post('ppnwd_hargasatuan');

            $this->db->where('ppnwd_no_penawaran = "'.$this->input->post('ppnw_no_penawaran').'"')->delete('penjualan_penawaran_detail');

            $detail_barangjasa = $this->crud_barangjasa->get_option_info();

            if(!empty($barang)){
                foreach($barang as $key=>$val)
                {
                    if($val != ''){
                        $data = array(
                        'ppnwd_no_penawaran' => $this->input->post('ppnw_no_penawaran'),
                        'ppnwd_jenisbarang'  => (!empty($detail_barangjasa[$val]) ? $detail_barangjasa[$val] : ''),
                        'ppnwd_jenisbarang_id'  => $val,
                        'ppnwd_volume'       => $volume[$key],
                        'ppnwd_deskripsi_id' => $deskripsi[$key],
                        'ppnwd_satuan'       => $satuan[$key],
                        'ppnwd_hargasatuan'  => clear_numberformat($hargasatuan[$key]),
                      );
                        $this->crud_penawaran_detail->posts($data);
                    }

                }
            }
            if(!empty($barang2)){
                foreach($barang2 as $key=>$val2)
                {
                    if($val2 != ''){
                           $data = array(
                            'ppnwd_no_penawaran' => $this->input->post('ppnw_no_penawaran'),
                            'ppnwd_jenisbarang'  => (!empty($detail_barangjasa[$val2]) ? $detail_barangjasa[$val2] : ''),
                            'ppnwd_jenisbarang_id'  => $val2,
                            'ppnwd_volume'       => $volume[$key],
                            'ppnwd_deskripsi_id' => $deskripsi[$key],
                            'ppnwd_satuan'       => $satuan[$key],
                            'ppnwd_hargasatuan'  => clear_numberformat($hargasatuan[$key]),
                          );
                           $this->crud_penawaran_detail->posts($data);
                    }

                }
            }

            redirect('penjualan/penawaran/pdf/'.$last_id);
			exit();

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
		    $this->_data['penawaran'] = $this->crud_penawaran_detail->where('penjualan_penawaran.ppnw_id = "'.$id.'"')->join();
        }

		$this->_data['option_client'] = $this->crud_client->get_option();
        $this->_data['option_barang'] = $this->crud_barangjasa->get_option();
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
				'ppnw_biaya_kirim' => clear_numberformat($this->input->post('ppnw_biaya_kirim')),
				'ppnw_nilai_faktur' => clear_numberformat($this->input->post('ppnw_nilai_faktur')),
				'ppnw_keterangan' => $this->input->post('ppnw_keterangan'),
				'ppnw_keterangan_print_out' => $this->input->post('ppnw_keterangan_print_out'),
				'ppnw_changedate' => $this->_data['datetime'],
			);
			$this->crud->where('ppnw_id = "'.$this->input->post('ppnw_id').'"')->puts_penawaran($db_data);

            $barang      = $this->input->post('ppnwd_jenisbarang');
            $barang2      = $this->input->post('ppnwd_jenisbarang2');
            $volume      = $this->input->post('ppnwd_volume');
            $deskripsi   = $this->input->post('ppnwd_deskripsi_id');
            $satuan      = $this->input->post('ppnwd_satuan');
            $hargasatuan = $this->input->post('ppnwd_hargasatuan');
            $detailID = $this->input->post('ppnwd_id');

            $this->db->where('ppnwd_no_penawaran = "'.$this->input->post('ppnw_no_penawaran').'"')->delete('penjualan_penawaran_detail');

            $detail_barangjasa = $this->crud_barangjasa->get_option_info();
            
            if(!empty($barang)){
                foreach($barang as $key=>$val)
                {
                    if($val != ''){
                        $data = array(
                        'ppnwd_no_penawaran' => $this->input->post('ppnw_no_penawaran'),
                        'ppnwd_jenisbarang'  => (!empty($detail_barangjasa[$val]) ? $detail_barangjasa[$val] : ''),
                        'ppnwd_jenisbarang_id'  => $val,
                        'ppnwd_volume'       => $volume[$key],
                        'ppnwd_deskripsi_id' => $deskripsi[$key],
                        'ppnwd_satuan'       => $satuan[$key],
                        'ppnwd_hargasatuan'  => $hargasatuan[$key],
                      );
                         $this->crud_penawaran_detail->posts($data);
                    }

                }
            }
            if(!empty($barang2)){
                foreach($barang2 as $key=>$val2)
                {
                    if($val2 != ''){
                           $data = array(
                            'ppnwd_no_penawaran' => $this->input->post('ppnw_no_penawaran'),
                            'ppnwd_jenisbarang'  => (!empty($detail_barangjasa[$val2]) ? $detail_barangjasa[$val2] : ''),
                            'ppnwd_jenisbarang_id'  => $val2,
                            'ppnwd_volume'       => $volume[$key],
                            'ppnwd_deskripsi_id' => $deskripsi[$key],
                            'ppnwd_satuan'       => $satuan[$key],
                            'ppnwd_hargasatuan'  => $hargasatuan[$key],
                          );
                         $this->crud_penawaran_detail->posts($data);
                    }

                }
            }

			return true;

		} else {
			$this->_data['err_msg'] = validation_errors();
			return false;
		}
	}

    function pdf_penawaran($id){
    	/*
         require_once APPPATH.'third_party/dompdf/dompdf_config.inc.php';
        $this->_data['detail']  = $this->crud->where('penjualan_penawaran.ppnw_id = "'.$id.'"')->join_penawaran();
        $this->_data['details']  = $this->crud_penawaran_detail->where('penjualan_penawaran.ppnw_id = "'.$id.'"')->join();

        $arr_parse = array(
        	'nilai_project' => number_format($this->_data['detail']->ppnw_nilai_faktur, 2, ",", ".")
        );
        
        $this->_data['detail']->ppnw_keterangan_print_out = parse_stringphp($this->_data['detail']->ppnw_keterangan_print_out, $arr_parse);

        $this->load->view('print_penawaran_penjualan',  $this->_data);
        $html = $this->output->get_output();
        $this->load->library('dompdf_gen');
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("penawaran_penjualan_".$id.".pdf",array('Attachment'=>0));
        // $this->dompdf->stream("invoice_penjualan_".$id.".pdf");
        */

        $this->_data['detail']  = $this->crud->where('penjualan_penawaran.ppnw_id = "'.$id.'"')->join_penawaran();
        $this->_data['details']  = $this->crud_penawaran_detail->where('penjualan_penawaran.ppnw_id = "'.$id.'"')->join();

        $arr_parse = array(
        	'nilai_project' => number_format($this->_data['detail']->ppnw_nilai_faktur, 2, ",", ".")
        );
        
        $this->_data['detail']->ppnw_keterangan_print_out = parse_stringphp($this->_data['detail']->ppnw_keterangan_print_out, $arr_parse);

        $this->load->view('print_penawaran_penjualan',  $this->_data);
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

		$this->_data['option_referensi'] = $this->crud->get_option_info_detail();

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
                'ppmt_ppnw_id'     => $this->input->post('ppmt_ppnw_id'),
                'ppmt_tanggal'     => $this->input->post('ppmt_tanggal'),
                'ppmt_noso'        => $this->input->post('ppmt_noso'),
                'ppmt_nopo'        => $this->input->post('ppmt_nopo'),
                'ppmt_uangmuka'    => clear_numberformat($this->input->post('ppmt_uangmuka')),
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

		$this->_data['option_referensi'] = $this->crud->get_option_info_detail();

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
				'ppmt_ppnw_id'     => $this->input->post('ppmt_ppnw_id'),
				'ppmt_tanggal'     => $this->input->post('ppmt_tanggal'),
                'ppmt_noso'        => $this->input->post('ppmt_noso'),
                'ppmt_nopo'        => $this->input->post('ppmt_nopo'),
                'ppmt_uangmuka'    => clear_numberformat($this->input->post('ppmt_uangmuka')),
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

			$this->crud_permintaan->update_relation_referensi($this->input->post('ppmt_id'), $this->input->post('ppmt_ppnw_id'));

			return true;
		}elseif ($this->form_validation->run()) {
			$db_data = array(
				'ppmt_ppnw_id'     => $this->input->post('ppmt_ppnw_id'),
				'ppmt_tanggal'     => $this->input->post('ppmt_tanggal'),
                'ppmt_noso'        => $this->input->post('ppmt_noso'),
                'ppmt_nopo'        => $this->input->post('ppmt_nopo'),
                'ppmt_uangmuka'    => clear_numberformat($this->input->post('ppmt_uangmuka')),
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

			$this->crud_permintaan->update_relation_referensi($this->input->post('ppmt_id'), $this->input->post('ppmt_ppnw_id'));

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

		$this->_data['option_referensi'] = $this->crud_permintaan->get_option_info_detail();

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
			$tmp = $this->crud_permintaan->get_option_info_detail($this->input->post('pjinv_ppmt_id'));
            $additional = $tmp[$this->input->post('pjinv_ppmt_id')];

			$db_data = array(
				'pjinv_ppmt_id' => $this->input->post('pjinv_ppmt_id'),
                'pjinv_ppnw_id' => $additional['ppmt_ppnw_id'],
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
				if(empty($val)) continue;

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
			$this->_data['detail'] = $this->crud_invoice->where('pjinv_id = "'.$id.'"')->get_row();
			$this->_data['invoice'] = $this->crud_invoice_detail->where('penjualan_invoice.pjinv_id = "'.$id.'"')->join();
		}

		$this->_data['option_referensi'] = $this->crud_permintaan->get_option_info_detail();

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
			$tmp = $this->crud_permintaan->get_option_info_detail($this->input->post('pjinv_ppmt_id'));
            $additional = $tmp[$this->input->post('pjinv_ppmt_id')];

			$db_data = array(
				'pjinv_ppmt_id' => $this->input->post('pjinv_ppmt_id'),
                'pjinv_ppnw_id' => $additional['ppmt_ppnw_id'],
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

			$this->crud_invoice->update_relation_referensi($this->input->post('pjinv_id'), $this->input->post('pjinv_ppmt_id'), $additional['ppmt_ppnw_id']);

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

    function pdf_invoice($id){
    	/*
        require_once APPPATH.'third_party/dompdf/dompdf_config.inc.php';
        //$this->_data['detail']  = $this->crud_invoice->where('pjinv_id = "'.$id.'"')->get_row();
        $this->_data['detail']  = $this->db->where('pjinv_id = "'.$id.'"')->join('penjualan_penawaran', 'ppnw_id = pjinv_ppnw_id')->join('penjualan_permintaan', 'ppmt_id = pjinv_ppmt_id')->join('client', 'clnt_id = ppnw_clnt_id')->get('penjualan_invoice')->row_array();
        $this->_data['details']  = $this->crud_invoice_detail->where('penjualan_penawaran.ppnw_id = "'.$this->_data['detail']['pjinv_ppnw_id'].'"')->join2();

        $this->load->view('print_invoice_penjualan',  $this->_data);
        $html = $this->output->get_output();
        $this->load->library('dompdf_gen');
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("invoice".$id.".pdf",array('Attachment'=>0));
        // $this->dompdf->stream("invoice_penjualan_".$id.".pdf");
        */

        $this->_data['detail']  = $this->db->where('pjinv_id = "'.$id.'"')->join('penjualan_penawaran', 'ppnw_id = pjinv_ppnw_id')->join('penjualan_permintaan', 'ppmt_id = pjinv_ppmt_id')->join('client', 'clnt_id = ppnw_clnt_id')->get('penjualan_invoice')->row_array();
        $this->_data['details']  = $this->crud_invoice_detail->where('penjualan_penawaran.ppnw_id = "'.$this->_data['detail']['pjinv_ppnw_id'].'"')->join2();

        $this->load->view('print_invoice_penjualan',  $this->_data);
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

		$this->_data['option_referensi'] = $this->crud_invoice->get_option_info_detail();

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
			$tmp = $this->crud_invoice->get_option_info_detail($this->input->post('pjkw_pjinv_id'));
            $additional = $tmp[$this->input->post('pjkw_pjinv_id')];

			$db_data = array(
				'pjkw_pjinv_id' => $this->input->post('pjkw_pjinv_id'),
                'pjkw_ppmt_id' => $additional['pjinv_ppmt_id'],
                'pjkw_ppnw_id' => $additional['pjinv_ppnw_id'],
				'pjkw_no' => $this->input->post('pjkw_no'),
				'pjkw_dari' => $this->input->post('pjkw_dari'),
				'pjkw_alamat' => $this->input->post('pjkw_alamat'),
				'pjkw_notlpn' => $this->input->post('pjkw_notlpn'),
				'pjkw_total' => $this->input->post('pjkw_total'),
				'pjkw_norek' => $this->input->post('pjkw_norek'),
				'pjkw_an' => $this->input->post('pjkw_an'),
				'pjkw_bank' => $this->input->post('pjkw_bank'),
				'pjkw_keterangan_print_out' => $this->input->post('pjkw_keterangan_print_out'),
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

        $this->_data['option_referensi'] = $this->crud_invoice->get_option_info_detail();

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

		$tmp = $this->crud_invoice->get_option_info_detail($this->input->post('pjkw_pjinv_id'));
        $additional = $tmp[$this->input->post('pjkw_pjinv_id')];

		if($this->form_validation->run() AND $_FILES['uploadfile']['size'] != 0) {
			$db_data = array(
				'pjkw_pjinv_id' => $this->input->post('pjkw_pjinv_id'),
                'pjkw_ppmt_id' => $additional['pjinv_ppmt_id'],
                'pjkw_ppnw_id' => $additional['pjinv_ppnw_id'],
				'pjkw_no' => $this->input->post('pjkw_no'),
				'pjkw_dari' => $this->input->post('pjkw_dari'),
				'pjkw_alamat' => $this->input->post('pjkw_alamat'),
				'pjkw_notlpn' => $this->input->post('pjkw_notlpn'),
				'pjkw_total' => $this->input->post('pjkw_total'),
				'pjkw_norek' => $this->input->post('pjkw_norek'),
				'pjkw_an' => $this->input->post('pjkw_an'),
				'pjkw_bank' => $this->input->post('pjkw_bank'),
				'pjkw_changedate'  => $this->_data['datetime'],
				'pjkw_keterangan_print_out' => $this->input->post('pjkw_keterangan_print_out'),
				'uploadfile'  => $filename,
			);
			$this->crud_kwitansi->where('pjkw_id = "'.$this->input->post('pjkw_id').'"')->puts($db_data);

			$this->crud_kwitansi->update_relation_referensi($this->input->post('pjkw_id'), $this->input->post('pjkw_pjinv_id'), $additional['pjinv_ppmt_id'], $additional['pjinv_ppnw_id']);

			return true;
		}elseif ($this->form_validation->run()) {
			$db_data = array(
				'pjkw_pjinv_id' => $this->input->post('pjkw_pjinv_id'),
                'pjkw_ppmt_id' => $additional['pjinv_ppmt_id'],
                'pjkw_ppnw_id' => $additional['pjinv_ppnw_id'],
				'pjkw_no' => $this->input->post('pjkw_no'),
				'pjkw_dari' => $this->input->post('pjkw_dari'),
				'pjkw_alamat' => $this->input->post('pjkw_alamat'),
				'pjkw_notlpn' => $this->input->post('pjkw_notlpn'),
				'pjkw_total' => $this->input->post('pjkw_total'),
				'pjkw_norek' => $this->input->post('pjkw_norek'),
				'pjkw_an' => $this->input->post('pjkw_an'),
				'pjkw_bank' => $this->input->post('pjkw_bank'),
				'pjkw_keterangan_print_out' => $this->input->post('pjkw_keterangan_print_out'),
				'pjkw_changedate'  => $this->_data['datetime'],
			);
			$this->crud_kwitansi->where('pjkw_id = "'.$this->input->post('pjkw_id').'"')->puts($db_data);

			$this->crud_kwitansi->update_relation_referensi($this->input->post('pjkw_id'), $this->input->post('pjkw_pjinv_id'), $additional['pjinv_ppmt_id'], $additional['pjinv_ppnw_id']);

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
    	/*
        require_once APPPATH.'third_party/dompdf/dompdf_config.inc.php';
        $this->_data['detail']  = $this->db->where('pjkw_id = "'.$id.'"')->join('penjualan_penawaran', 'ppnw_id = pjkw_ppnw_id')->join('client', 'clnt_id = ppnw_clnt_id')->get('penjualan_kwitansi')->row_array();

        $tmp = $this->total_penawaran($this->_data['detail']['ppnw_id']);
        $this->_data['total'] = !empty($tmp[$this->_data['detail']['ppnw_id']]) ? $tmp[$this->_data['detail']['ppnw_id']] : 0;

        $this->load->view('print_kwitansi_penjualan',  $this->_data);
        $html = $this->output->get_output();
        $this->load->library('dompdf_gen');
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("kwitansi_penjualan_".$id.".pdf",array('Attachment'=>0));
        // $this->dompdf->stream("invoice_penjualan_".$id.".pdf");
        */
        $this->_data['detail']  = $this->db->where('pjkw_id = "'.$id.'"')->join('penjualan_penawaran', 'ppnw_id = pjkw_ppnw_id')->join('client', 'clnt_id = ppnw_clnt_id')->get('penjualan_kwitansi')->row_array();

        $tmp = $this->total_penawaran($this->_data['detail']['ppnw_id']);
        $this->_data['total'] = !empty($tmp[$this->_data['detail']['ppnw_id']]) ? $tmp[$this->_data['detail']['ppnw_id']] : 0;

        $this->load->view('print_kwitansi_penjualan',  $this->_data);
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

		$this->_data['option_referensi'] = $this->crud_kwitansi->get_option_info_detail();

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
			$tmp = $this->crud_kwitansi->get_option_info_detail($this->input->post('pbcr_pjkw_id'));
        	$additional = $tmp[$this->input->post('pbcr_pjkw_id')];

			$db_data = array(
				'pbcr_pjkw_id' => $this->input->post('pbcr_pjkw_id'),
                'pbcr_pjinv_id' => $additional['pjkw_pjinv_id'],
                'pbcr_ppmt_id' => $additional['pjkw_ppmt_id'],
                'pbcr_ppnw_id' => $additional['pjkw_ppnw_id'],
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
                'pbcr_deskripsi' => $this->input->post('pbcr_deskripsi'),
                'pbcr_tglperjanjian' => $this->input->post('pbcr_tglperjanjian'),
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

        $this->_data['option_referensi'] = $this->crud_kwitansi->get_option_info_detail();

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

		$tmp = $this->crud_kwitansi->get_option_info_detail($this->input->post('pbcr_pjkw_id'));
        $additional = $tmp[$this->input->post('pbcr_pjkw_id')];

		if($this->form_validation->run() AND $_FILES['uploadfile']['size'] != 0) {
			$db_data = array(
				'pbcr_pjkw_id' => $this->input->post('pbcr_pjkw_id'),
                'pbcr_pjinv_id' => $additional['pjkw_pjinv_id'],
                'pbcr_ppmt_id' => $additional['pjkw_ppmt_id'],
                'pbcr_ppnw_id' => $additional['pjkw_ppnw_id'],
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
                'pbcr_deskripsi' => $this->input->post('pbcr_deskripsi'),
                'pbcr_tglperjanjian' => $this->input->post('pbcr_tglperjanjian'),
				'pbcr_uploadfile'  => $filename,
			);
			$this->crud_berita_acara->where('pbcr_id = "'.$this->input->post('pbcr_id').'"')->puts($db_data);

			$this->crud_berita_acara->update_relation_referensi($this->input->post('pbcr_id'), $this->input->post('pbcr_pjkw_id'), $additional['pjkw_pjinv_id'], $additional['pjkw_ppmt_id'], $additional['pjkw_ppnw_id']);

			return true;
		}elseif ($this->form_validation->run()) {
			$db_data = array(
				'pbcr_pjkw_id' => $this->input->post('pbcr_pjkw_id'),
                'pbcr_pjinv_id' => $additional['pjkw_pjinv_id'],
                'pbcr_ppmt_id' => $additional['pjkw_ppmt_id'],
                'pbcr_ppnw_id' => $additional['pjkw_ppnw_id'],
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
                'pbcr_deskripsi' => $this->input->post('pbcr_deskripsi'),
                'pbcr_tglperjanjian' => $this->input->post('pbcr_tglperjanjian'),
				'pbcr_tglterima' => $this->input->post('pbcr_tglterima'),
			);
			$this->crud_berita_acara->where('pbcr_id = "'.$this->input->post('pbcr_id').'"')->puts($db_data);

			$this->crud_berita_acara->update_relation_referensi($this->input->post('pbcr_id'), $this->input->post('pbcr_pjkw_id'), $additional['pjkw_pjinv_id'], $additional['pjkw_ppmt_id'], $additional['pjkw_ppnw_id']);

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

    function pdf_berita_acara($id){
    	/*
        require_once APPPATH.'third_party/dompdf/dompdf_config.inc.php';
        $this->_data['detail']  = $this->db->where('pbcr_id = "'.$id.'"')->join('penjualan_permintaan', 'ppmt_id = pbcr_ppmt_id')->get('penjualan_beritaacara')->row_array();

        $this->load->view('print_berita_acara_penjualan',  $this->_data);
        $html = $this->output->get_output();
        $this->load->library('dompdf_gen');
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("print_berita_acara".$id.".pdf",array('Attachment'=>0));
        // $this->dompdf->stream("invoice_penjualan_".$id.".pdf");
        */

        $this->_data['detail']  = $this->db->where('pbcr_id = "'.$id.'"')->join('penjualan_permintaan', 'ppmt_id = pbcr_ppmt_id')->get('penjualan_beritaacara')->row_array();

        $this->load->view('print_berita_acara_penjualan',  $this->_data);
    }

	function tanda_terima() {
		$this->_data['result'] = $this->crud_tanda_terima->order_by('pttr_id', 'asc')->get_all();

		foreach ($this->_data['result'] as $key => $value) {
            $this->_data['result'][$key]['pttr_lampiran'] = !empty($this->_data['result'][$key]['pttr_lampiran']) ? unserialize($this->_data['result'][$key]['pttr_lampiran']) : array();
            $this->_data['result'][$key]['pttr_lampiran'] = join(', ', $this->_data['result'][$key]['pttr_lampiran']);
        }

        $this->_data['total'] = $this->total_penawaran();

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

		$this->_data['option_referensi'] = $this->crud_berita_acara->get_option_info_detail();

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
			$tmp = $this->crud_berita_acara->get_option_info_detail($this->input->post('pttr_pbcr_id'));
        	$additional = $tmp[$this->input->post('pttr_pbcr_id')];

			$db_data = array(
				'pttr_pbcr_id' => $this->input->post('pttr_pbcr_id'),
                'pttr_pjkw_id' => $additional['pbcr_pjkw_id'],
                'pttr_pjinv_id' => $additional['pbcr_pjinv_id'],
                'pttr_ppmt_id' => $additional['pbcr_ppmt_id'],
                'pttr_ppnw_id' => $additional['pbcr_ppnw_id'],
				'pttr_no' => $this->input->post('pttr_no'),
				'pttr_noproyek' => $this->input->post('pttr_noproyek'),
				'pttr_tghndari' => $this->input->post('pttr_tghndari'),
				'pttr_tagihan' => $this->input->post('pttr_tagihan'),
				'pttr_mtuang' => $this->input->post('pttr_mtuang'),
				'pttr_nilaitagihan' => $this->input->post('pttr_nilaitagihan'),
				'pttr_lampiran' => serialize($this->input->post('pttr_lampiran')),
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
            $this->_data['detail']['pttr_lampiran'] = !empty($this->_data['detail']['pttr_lampiran']) ? unserialize($this->_data['detail']['pttr_lampiran']) : array();
        }

        $this->_data['option_referensi'] = $this->crud_berita_acara->get_option_info_detail();

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

		$tmp = $this->crud_berita_acara->get_option_info_detail($this->input->post('pttr_pbcr_id'));
        $additional = $tmp[$this->input->post('pttr_pbcr_id')];

		if($this->form_validation->run() AND $_FILES['uploadfile']['size'] != 0) {
			$db_data = array(
				'pttr_pbcr_id' => $this->input->post('pttr_pbcr_id'),
                'pttr_pjkw_id' => $additional['pbcr_pjkw_id'],
                'pttr_pjinv_id' => $additional['pbcr_pjinv_id'],
                'pttr_ppmt_id' => $additional['pbcr_ppmt_id'],
                'pttr_ppnw_id' => $additional['pbcr_ppnw_id'],
				'pttr_no' => $this->input->post('pttr_no'),
				'pttr_noproyek' => $this->input->post('pttr_noproyek'),
				'pttr_tghndari' => $this->input->post('pttr_tghndari'),
				'pttr_tagihan' => $this->input->post('pttr_tagihan'),
				'pttr_mtuang' => $this->input->post('pttr_mtuang'),
				'pttr_nilaitagihan' => $this->input->post('pttr_nilaitagihan'),
				'pttr_lampiran' => serialize($this->input->post('pttr_lampiran')),
				'pttr_tglkembali' => $this->input->post('pttr_tglkembali'),
				'pttr_nobpkc' => $this->input->post('pttr_nobpkc'),
				'pttr_tglbpkc' => $this->input->post('pttr_tglbpkc'),
				'pttr_menerima' => $this->input->post('pttr_menerima'),
				'pttr_tglterima' => $this->input->post('pttr_tglterima'),
				'pttr_uploadfile'  => $filename,
			);
			$this->crud_tanda_terima->where('pttr_id = "'.$this->input->post('pttr_id').'"')->puts($db_data);

			$this->crud_tanda_terima->update_relation_referensi($this->input->post('pttr_id'), $this->input->post('pttr_pbcr_id'), $additional['pbcr_pjkw_id'], $additional['pbcr_pjinv_id'], $additional['pbcr_ppmt_id'], $additional['pbcr_ppnw_id']);

			return true;
		}elseif ($this->form_validation->run()) {
			$db_data = array(
				'pttr_pbcr_id' => $this->input->post('pttr_pbcr_id'),
                'pttr_pjkw_id' => $additional['pbcr_pjkw_id'],
                'pttr_pjinv_id' => $additional['pbcr_pjinv_id'],
                'pttr_ppmt_id' => $additional['pbcr_ppmt_id'],
                'pttr_ppnw_id' => $additional['pbcr_ppnw_id'],
				'pttr_no' => $this->input->post('pttr_no'),
				'pttr_noproyek' => $this->input->post('pttr_noproyek'),
				'pttr_tghndari' => $this->input->post('pttr_tghndari'),
				'pttr_tagihan' => $this->input->post('pttr_tagihan'),
				'pttr_mtuang' => $this->input->post('pttr_mtuang'),
				'pttr_nilaitagihan' => $this->input->post('pttr_nilaitagihan'),
				'pttr_lampiran' => serialize($this->input->post('pttr_lampiran')),
				'pttr_tglkembali' => $this->input->post('pttr_tglkembali'),
				'pttr_nobpkc' => $this->input->post('pttr_nobpkc'),
				'pttr_tglbpkc' => $this->input->post('pttr_tglbpkc'),
				'pttr_menerima' => $this->input->post('pttr_menerima'),
				'pttr_tglterima' => $this->input->post('pttr_tglterima'),
			);
			$this->crud_tanda_terima->where('pttr_id = "'.$this->input->post('pttr_id').'"')->puts($db_data);

			$this->crud_tanda_terima->update_relation_referensi($this->input->post('pttr_id'), $this->input->post('pttr_pbcr_id'), $additional['pbcr_pjkw_id'], $additional['pbcr_pjinv_id'], $additional['pbcr_ppmt_id'], $additional['pbcr_ppnw_id']);
			
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
        $this->_data['total'] = $this->total_penawaran();
        
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

		$this->_data['option_referensi'] = $this->crud_tanda_terima->get_option_info_detail();

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
			$tmp = $this->crud_tanda_terima->get_option_info_detail($this->input->post('pbktp_pttr_id'));
        	$additional = $tmp[$this->input->post('pbktp_pttr_id')];

			$db_data = array(
				'pbktp_pttr_id' => $this->input->post('pbktp_pttr_id'),
                'pbktp_pbcr_id' => $additional['pttr_pbcr_id'],
                'pbktp_pjkw_id' => $additional['pttr_pjkw_id'],
                'pbktp_pjinv_id' => $additional['pttr_pjinv_id'],
                'pbktp_ppmt_id' => $additional['pttr_ppmt_id'],
                'pbktp_ppnw_id' => $additional['pttr_ppnw_id'],
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

        $this->_data['option_referensi'] = $this->crud_tanda_terima->get_option_info_detail();

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

		$tmp = $this->crud_tanda_terima->get_option_info_detail($this->input->post('pbktp_pttr_id'));
        $additional = $tmp[$this->input->post('pbktp_pttr_id')];

		if($this->form_validation->run() AND $_FILES['uploadfile']['size'] != 0) {
			$db_data = array(
				'pbktp_pttr_id' => $this->input->post('pbktp_pttr_id'),
                'pbktp_pbcr_id' => $additional['pttr_pbcr_id'],
                'pbktp_pjkw_id' => $additional['pttr_pjkw_id'],
                'pbktp_pjinv_id' => $additional['pttr_pjinv_id'],
                'pbktp_ppmt_id' => $additional['pttr_ppmt_id'],
                'pbktp_ppnw_id' => $additional['pttr_ppnw_id'],
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
				'pbktp_pttr_id' => $this->input->post('pbktp_pttr_id'),
                'pbktp_pbcr_id' => $additional['pttr_pbcr_id'],
                'pbktp_pjkw_id' => $additional['pttr_pjkw_id'],
                'pbktp_pjinv_id' => $additional['pttr_pjinv_id'],
                'pbktp_ppmt_id' => $additional['pttr_ppmt_id'],
                'pbktp_ppnw_id' => $additional['pttr_ppnw_id'],
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

	function pdf_bukti_pembayaran($id){
        $this->_data['detail']  = $this->db->where('pbktp_id = "'.$id.'"')->join('penjualan_penawaran', 'ppnw_id = pbktp_ppnw_id')->join('client', 'clnt_id = ppnw_clnt_id')->get('penjualan_bukti_pembayaran')->row_array();

        //print_r($this->_data['detail']);

        $tmp = $this->total_penawaran($this->_data['detail']['ppnw_id']);
        $this->_data['total'] = !empty($tmp[$this->_data['detail']['ppnw_id']]) ? $tmp[$this->_data['detail']['ppnw_id']] : 0;

        $this->load->view('print_bukti_pembayaran_penjualan',  $this->_data);
    }

	function referensi_penawaran($id) {
        $result = $this->db->from('penjualan_penawaran')->where('ppnw_id = "'.$id.'"')->get()->row_array();
        $result['ppmt_diskon'] = $result['ppnw_diskon'];
        $result['ppmt_pajak'] = $result['ppnw_pajak'];
        $result['ppmt_biayakirim'] = add_numberformat($result['ppnw_biaya_kirim']);
        $result['ppmt_nilaifaktur'] = add_numberformat($result['ppnw_nilai_faktur']);
        echo json_encode($result);
    }

    function referensi_permintaan($id) {
        $result = $this->db->from('penjualan_permintaan')->join('penjualan_penawaran', 'ppmt_ppnw_id=ppnw_id')->join('client', 'ppmt_clnt_id=clnt_id')->where('ppmt_id = "'.$id.'"')->get()->row_array();
        $result['terbilang'] = !empty($result['ppnw_nilai_faktur']) ? terbilang($result['ppnw_nilai_faktur']) : '-';
        $result['ppnw_nilai_faktur'] = add_numberformat($result['ppnw_nilai_faktur']);
        echo json_encode($result);
    }

    function referensi_invoice($id) {
        $result = $this->db->from('penjualan_invoice')->join('penjualan_permintaan', 'pjinv_ppmt_id=ppmt_id')->join('penjualan_penawaran', 'pjinv_ppnw_id=ppnw_id')->join('client', 'ppmt_clnt_id=clnt_id')->where('pjinv_id = "'.$id.'"')->get()->row_array();
        $result['ppnw_nilai_faktur'] = add_numberformat($result['ppnw_nilai_faktur']);
        echo json_encode($result);
    }

    function referensi_kwitansi($id) {
        $result = $this->db->from('penjualan_kwitansi')->join('penjualan_penawaran', 'pjkw_ppnw_id=ppnw_id')->where('pjkw_id = "'.$id.'"')->get()->row_array();
        $result['ppnw_nilai_faktur'] = add_numberformat($result['ppnw_nilai_faktur']);
        echo json_encode($result);
    }

    function referensi_beritaacara($id) {
        $result = $this->db->from('penjualan_beritaacara')->where('pbcr_id = "'.$id.'"')->get()->row_array();
        $tmp = $this->total_penawaran($result['pbcr_ppnw_id']);
        $result['pttr_nilaitagihan'] = (!empty($tmp[$result['pbcr_ppnw_id']]) ? add_numberformat($tmp[$result['pbcr_ppnw_id']]) : 0);
        echo json_encode($result);
    }

    function referensi_tandaterima($id) {
        $result = $this->db->from('penjualan_tandaterima')->join('penjualan_invoice', 'pttr_pjinv_id = pjinv_id')->where('pttr_id = "'.$id.'"')->get()->row_array();
        $tmp = $this->total_penawaran($result['pttr_ppnw_id']);
        $result['pbktp_totaltagihan'] = (!empty($tmp[$result['pttr_ppnw_id']]) ? add_numberformat($tmp[$result['pttr_ppnw_id']]) : 0);

        $result['terbilang'] = !empty($result['pbktp_totaltagihan']) ? terbilang(clear_numberformat($result['pbktp_totaltagihan'])) : '-';
        echo json_encode($result);
    }

    function info_barang($id) {
        $result = $this->db->from('penjualan_penawaran')->join('penjualan_penawaran_detail', 'ppnw_no_penawaran=ppnwd_no_penawaran')->where('ppnw_id = "'.$id.'"')->get()->result_array();
        echo json_encode($result);
    }

    private function total_penawaran($id ='') {
        if(!empty($id)) {
            $details  = $this->crud_invoice_detail->where('ppnw_id = "'.$id.'"')->join3();
        } else {
            $details  = $this->crud_invoice_detail->join3();
        }
        
        $total = array();
        foreach ($details as $key => $value) {
            if(empty($total[$value['ppnw_id']])) $total[$value['ppnw_id']] = 0;
            $total[$value['ppnw_id']] += $value['ppnwd_volume'] * $value['brjs_harga_satuan'];
        }

        foreach ($total as $key => $value) {
            $total[$key] += ($value * 0.02) + ($value * 0.1);
        }

        return $total;
    }
}

?>