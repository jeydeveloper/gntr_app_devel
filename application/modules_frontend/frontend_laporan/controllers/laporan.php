<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Laporan extends MY_Frontend {

	function __construct(){
		parent::__construct();

		if(!$this->session->userdata('userid')) {
			redirect('login');
			exit();
		}

		$this->load->model('frontend_pembelian/crud_permintaan_detail');
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

		$bulan_1 = $this->_data['periode_bulan_1'] < 10 ? ('0'.$this->_data['periode_bulan_1']) : $this->_data['periode_bulan_1'];
		$bulan_2 = $this->_data['periode_bulan_2'] < 10 ? ('0'.$this->_data['periode_bulan_2']) : $this->_data['periode_bulan_2'];

		$periode_1 = $this->_data['periode_tahun'] . '-' . $bulan_1 . '-' . '01';
		$periode_2 = $this->_data['periode_tahun'] . '-' . $bulan_2 . '-' . '31';

		$this->_data['result'] = $this->db->select('pjinv_id, clnt_nama, ppnw_nilai_faktur', false)->join('penjualan_invoice', 'pjinv_ppnw_id = ppnw_id')->join('client', 'ppnw_clnt_id = clnt_id')->where('DATE_FORMAT(pjinv_tanggal, "%Y-%m-%d") BETWEEN "'.$periode_1.'" AND "'.$periode_2.'"')->get('penjualan_penawaran')->result_array();

		$this->template->set('title', 'Laporan Neraca | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'content_penjualan_client', $this->_data);
	}

	function penjualan_barang() {
		$this->_data['periode_bulan_1'] = $this->input->get('periode_bulan_1');
		$this->_data['periode_bulan_2'] = $this->input->get('periode_bulan_2');
		$this->_data['periode_tahun'] = $this->input->get('periode_tahun');

		$bulan_1 = $this->_data['periode_bulan_1'] < 10 ? ('0'.$this->_data['periode_bulan_1']) : $this->_data['periode_bulan_1'];
		$bulan_2 = $this->_data['periode_bulan_2'] < 10 ? ('0'.$this->_data['periode_bulan_2']) : $this->_data['periode_bulan_2'];

		$periode_1 = $this->_data['periode_tahun'] . '-' . $bulan_1 . '-' . '01';
		$periode_2 = $this->_data['periode_tahun'] . '-' . $bulan_2 . '-' . '31';

		$this->_data['result'] = $this->db->select('pjinv_id, ppnw_no_penawaran, ppnwd_volume, ppnwd_satuan, ppnwd_jenisbarang, ppnwd_hargasatuan', false)->join('penjualan_invoice', 'pjinv_ppnw_id = ppnw_id')->join('penjualan_penawaran_detail', 'pjinv_ppnw_id = ppnw_id')->where('DATE_FORMAT(pjinv_tanggal, "%Y-%m-%d") BETWEEN "'.$periode_1.'" AND "'.$periode_2.'"')->get('penjualan_penawaran')->result_array();

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

		$bulan_1 = $this->_data['periode_bulan_1'] < 10 ? ('0'.$this->_data['periode_bulan_1']) : $this->_data['periode_bulan_1'];
		$bulan_2 = $this->_data['periode_bulan_2'] < 10 ? ('0'.$this->_data['periode_bulan_2']) : $this->_data['periode_bulan_2'];

		$periode_1 = $this->_data['periode_tahun'] . '-' . $bulan_1 . '-' . '01';
		$periode_2 = $this->_data['periode_tahun'] . '-' . $bulan_2 . '-' . '31';

		$result = $this->db->select('clnt_id, clnt_nama, ppnw_nilai_faktur', false)->join('penjualan_invoice', 'pjinv_ppnw_id = ppnw_id')->join('client', 'ppnw_clnt_id = clnt_id')->where('DATE_FORMAT(pjinv_tanggal, "%Y-%m-%d") BETWEEN "'.$periode_1.'" AND "'.$periode_2.'"')->get('penjualan_penawaran')->result_array();

		$this->_data['result'] = array();
		foreach ($result as $key => $value) {
			$this->_data['result']['label'][$value['clnt_id']] = '"'.$value['clnt_nama'].'"';
			if(empty($this->_data['result']['total'][$value['clnt_id']])) $this->_data['result']['total'][$value['clnt_id']] = 0;
			
			$this->_data['result']['total'][$value['clnt_id']] += $value['ppnw_nilai_faktur'];
		}

		if(!empty($this->_data['result']['total'])) {
			foreach ($this->_data['result']['total'] as $key => $value) {
				$this->_data['result']['total'][$key] = '{y: '.$value.', label: '.$this->_data['result']['label'][$key].'}';
			}
		}

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

		$bulan_1 = $this->_data['periode_bulan_1'] < 10 ? ('0'.$this->_data['periode_bulan_1']) : $this->_data['periode_bulan_1'];
		$bulan_2 = $this->_data['periode_bulan_2'] < 10 ? ('0'.$this->_data['periode_bulan_2']) : $this->_data['periode_bulan_2'];

		$periode_1 = $this->_data['periode_tahun'] . '-' . $bulan_1 . '-' . '01';
		$periode_2 = $this->_data['periode_tahun'] . '-' . $bulan_2 . '-' . '31';

		$this->_data['result'] = $this->db->select('pbptn_id, pbptn_id, vndr_nama, pbptn_totaltagihan', false)->join('pembelian_invoice', 'pbinv_pbptn_id=pbptn_id')->join('vendor', 'pbptn_vndr_id=vndr_id')->where('DATE_FORMAT(pbinv_tanggal, "%Y-%m-%d") BETWEEN "'.$periode_1.'" AND "'.$periode_2.'"')->get('pembelian_permintaan')->result_array();

		foreach ($this->_data['result'] as $key => $value) {
			$tmp = $this->total_permintaan($value['pbptn_id']);
			$this->_data['result'][$key]['pbptn_totaltagihan'] = (!empty($tmp[$value['pbptn_id']]) ? $tmp[$value['pbptn_id']] : 0);
		}

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

		$bulan_1 = $this->_data['periode_bulan_1'] < 10 ? ('0'.$this->_data['periode_bulan_1']) : $this->_data['periode_bulan_1'];
		$bulan_2 = $this->_data['periode_bulan_2'] < 10 ? ('0'.$this->_data['periode_bulan_2']) : $this->_data['periode_bulan_2'];

		$periode_1 = $this->_data['periode_tahun'] . '-' . $bulan_1 . '-' . '01';
		$periode_2 = $this->_data['periode_tahun'] . '-' . $bulan_2 . '-' . '31';

		$result = $this->db->select('pbptn_id, vndr_id, vndr_nama, pbptn_totaltagihan', false)->join('pembelian_invoice', 'pbinv_pbptn_id=pbptn_id')->join('vendor', 'pbptn_vndr_id=vndr_id')->where('DATE_FORMAT(pbinv_tanggal, "%Y-%m-%d") BETWEEN "'.$periode_1.'" AND "'.$periode_2.'"')->get('pembelian_permintaan')->result_array();

		$this->_data['result'] = array();
		foreach ($result as $key => $value) {
			$tmp = $this->total_permintaan($value['pbptn_id']);

			$this->_data['result']['label'][$value['vndr_id']] = '"'.$value['vndr_nama'].'"';
			if(empty($this->_data['result']['total'][$value['vndr_id']])) $this->_data['result']['total'][$value['vndr_id']] = 0;

			$this->_data['result']['total'][$value['vndr_id']] += (!empty($tmp[$value['pbptn_id']]) ? $tmp[$value['pbptn_id']] : 0);
		}

		if(!empty($this->_data['result']['total'])) {
			foreach ($this->_data['result']['total'] as $key => $value) {
				$this->_data['result']['total'][$key] = '{y: '.$value.', label: '.$this->_data['result']['label'][$key].'}';
			}
		}

		$this->template->set('title', 'Laporan Neraca | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'content_pembelian_grafik_vendor', $this->_data);
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