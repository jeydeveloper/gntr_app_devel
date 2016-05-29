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
        $this->_data['module_base_url'] = site_url('pembelian');
        $this->_data['datetime'] = date('Y-m-d H:i:s');
	}

	function index() {
		$this->template->set('title', 'Pembelian | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'content', $this->_data);
	}

	function permintaan() {
        $this->_data['result'] = $this->crud_pembelian->order_by('pp_id', 'asc')->get_all();

		$this->template->set('title', 'Permintaan Pembelian | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'permintaan', $this->_data);
	}

	function add_permintaan() {
        if(!empty($_POST)) {
            if($this->do_add_permintaan()) {
                redirect($this->_data['module_base_url']);
                exit();
            }
        }

		$this->template->set('title', 'Tambah Permintaan Pembelian | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'permintaan_add', $this->_data);
	}

    private function do_add_permintaan() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Nama', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
        $this->form_validation->set_rules('address', 'Alamat', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
        $this->form_validation->set_rules('phone', 'No Telp', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
        $this->form_validation->set_rules('email', 'Email', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
        $this->form_validation->set_rules('note', 'Keterangan', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');

        if($this->form_validation->run()) {
            $db_data = array(
                'pp_nama'       => $this->input->post('name'),
                'pp_alamat'     => $this->input->post('address'),
                'pp_telepon'    => $this->input->post('phone'),
                'pp_email'      => $this->input->post('email'),
                'pp_keterangan' => $this->input->post('note'),
            );
            $this->crud_pembelian->posts($db_data);

            return true;
        } else {
            $this->_data['err_msg'] = validation_errors();
            return false;
        }
    }

	function edit_permintaan($id) {
        if(!empty($_POST)) {
            if($this->do_edit_permintaan()) {
                redirect($this->_data['module_base_url']);
                exit();
            }
            $this->_data['detail'] = $_POST;
        } else {
            $this->_data['detail'] = $this->crud_pembelian->where('pp_id = "'.$id.'"')->get_row();
        }

		$this->template->set('title', 'Edit Permintaan Pembelian | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'permintaan_edit', $this->_data);
	}

    private function do_edit_permintaan() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('pp_nama', 'Nama', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
        $this->form_validation->set_rules('pp_alamat', 'Alamat', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
        $this->form_validation->set_rules('pp_telepon', 'No Telp', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
        $this->form_validation->set_rules('pp_email', 'Email', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
        $this->form_validation->set_rules('pp_keterangan', 'Keterangan', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');

        if($this->form_validation->run()) {
            $db_data = array(
                'pp_nama'       => $this->input->post('pp_nama'),
                'pp_alamat'     => $this->input->post('pp_alamat'),
                'pp_telepon'    => $this->input->post('pp_telepon'),
                'pp_email'      => $this->input->post('pp_email'),
                'pp_keterangan' => $this->input->post('pp_keterangan'),
                'pp_changedate' => $this->_data['datetime'],
            );
            $this->crud_pembelian->where('pp_id = "'.$this->input->post('pp_id').'"')->puts($db_data);

            return true;
        } else {
            $this->_data['err_msg'] = validation_errors();
            return false;
        }
    }

    function delete_permintaan($id) {
        $db_data = array(
            'pp_changedate' => $this->_data['datetime'],
        );
        $this->crud_pembelian->where('pp_id = "'.$id.'"')->delete($db_data);

        redirect($this->_data['module_base_url']);
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
        $this->_data['result'] = $this->crud_suratjalan->order_by('sj_id', 'asc')->get_all();

		$this->template->set('title', 'Surat Jalan Pembelian | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'surat_jalan', $this->_data);
	}

    function pdf_surat_jalan(){
        $id= $this->uri->segment('4');
        require_once APPPATH.'third_party/dompdf/dompdf_config.inc.php';
        $this->_data['detail'] = $this->crud_suratjalan->where('sj_id = "'.$id.'"')->get_row();
         // Load all views as normal
        $this->load->view('print_surat_jalan',  $this->_data);
        // Get output html
        $html = $this->output->get_output();

        // Load library
        $this->load->library('dompdf_gen');

        // Convert to PDF
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("suratjalan_".$id.".pdf");
    }

	function add_surat_jalan() {
        if(!empty($_POST)) {
            if($this->do_add_surat_jalan()) {
                redirect($this->_data['module_base_url']);
                exit();
            }
        }

		$this->template->set('title', 'Tambah Surat Jalan Pembelian | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'surat_jalan_add', $this->_data);
	}

    private function do_add_surat_jalan() {

        $this->load->library('form_validation');
        $this->form_validation->set_rules('sj_tanggal', 'Tanggal', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
        $this->form_validation->set_rules('sj_no', 'No', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
        $this->form_validation->set_rules('sj_halaman', 'Halaman', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
        $this->form_validation->set_rules('sj_matauang', 'Mata Uang', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
        $this->form_validation->set_rules('sj_vendor', 'Vendor', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
        $this->form_validation->set_rules('sj_vendorproposalno', 'Vendor Proposal No.', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
        $this->form_validation->set_rules('sj_projectcode', 'Project Code', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
        $this->form_validation->set_rules('sj_buyer', 'Buyer', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
        $this->form_validation->set_rules('sj_jenisbarang', 'Jenis Barang', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
        $this->form_validation->set_rules('sj_deskripsi', 'Deskripsi', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
        $this->form_validation->set_rules('sj_jumlah', 'Jumlah', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
        $this->form_validation->set_rules('sj_satuan', 'Satuan', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
        $this->form_validation->set_rules('sj_hargasatuan', 'Harga Satuan', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
        $this->form_validation->set_rules('sj_total', 'Total', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
        $this->form_validation->set_rules('sj_catatan', 'Catatan', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
        $this->form_validation->set_rules('sj_lampiran', 'Lampiran', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
        $this->form_validation->set_rules('sj_termspembayaran', 'Terms Pembayaran', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
        $this->form_validation->set_rules('sj_tglpenerimaan', 'Tanggal Penerimaan', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
        $this->form_validation->set_rules('sj_diterimaoleh', 'Diterima Oleh', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
        $this->form_validation->set_rules('sj_namapenerima', 'Nama Penerima', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
        $this->form_validation->set_rules('sj_tgl', 'Tanggal', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');

        if($this->form_validation->run()) {
            $db_data = array(
                'sj_tanggal'          => $this->input->post('sj_tanggal'),
                'sj_no'               => $this->input->post('sj_no'),
                'sj_halaman'          => $this->input->post('sj_halaman'),
                'sj_matauang'         => $this->input->post('sj_matauang'),
                'sj_vendor'           => $this->input->post('sj_vendor'),
                'sj_vendorproposalno' => $this->input->post('sj_vendorproposalno'),
                'sj_projectcode'      => $this->input->post('sj_projectcode'),
                'sj_buyer'            => $this->input->post('sj_buyer'),
                'sj_jenisbarang'      => $this->input->post('sj_jenisbarang'),
                'sj_deskripsi'        => $this->input->post('sj_deskripsi'),
                'sj_jumlah'           => $this->input->post('sj_jumlah'),
                'sj_satuan'           => $this->input->post('sj_satuan'),
                'sj_hargasatuan'      => $this->input->post('sj_hargasatuan'),
                'sj_total'            => $this->input->post('sj_total'),
                'sj_catatan'          => $this->input->post('sj_catatan'),
                'sj_lampiran'         => $this->input->post('sj_lampiran'),
                'sj_termspembayaran'  => $this->input->post('sj_termspembayaran'),
                'sj_tglpenerimaan'    => $this->input->post('sj_tglpenerimaan'),
                'sj_diterimaoleh'     => $this->input->post('sj_diterimaoleh'),
                'sj_namapenerima'     => $this->input->post('sj_namapenerima'),
                'sj_tgl'              => $this->input->post('sj_tgl'),
            );
            $this->crud_suratjalan->posts($db_data);
            return true;
        } else {
            $this->_data['err_msg'] = validation_errors();
            return false;
        }
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
        $this->_data['result'] = $this->crud_buktipembayaran->order_by('bp_id', 'asc')->get_all();
		$this->template->set('title', 'Bukti Pembayaran Pembelian | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'bukti_pembayaran', $this->_data);
	}

	function add_bukti_pembayaran() {
         if(!empty($_POST)) {
            if($this->do_add_bukti_pembayaran()) {
                redirect($this->_data['module_base_url']);
                exit();
            }
        }

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
        $this->form_validation->set_rules('bp_terbilang', 'Terbilang', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
        $this->form_validation->set_rules('bp_tgltransaksi', 'Tanggal Transaksi', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
        $this->form_validation->set_rules('bp_jamtransaksi', 'Jam Transaksi', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
        $this->form_validation->set_rules('bp_jenistransaksi', 'Jenis Transaksi', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');

        if($this->form_validation->run()) {
            $db_data = array(
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

        require_once APPPATH.'third_party/dompdf/dompdf_config.inc.php';
        $this->_data['detail'] = $this->crud_buktipembayaran->where('bp_id = "'.$id.'"')->get_row();
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
    }

	function edit_bukti_pembayaran($id) {
		$this->template->set('title', 'Edit Bukti Pembayaran Pembelian | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'bukti_pembayaran_edit', $this->_data);
	}



}

?>