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

	function insentif_hari_raya($pbcr_id) {
		$this->_data['pbcr_id'] = $pbcr_id;

		$baps_pbcr_id = $pbcr_id;

		$data = $this->peserta_beritaacara($baps_pbcr_id);

		$tr_data = '';
		if(!empty($data)) {
			foreach ($data as $key => $value) {
				$no = 1;
				$tr_data .= '<tbody>';
				$tr_data .= '<tr>';
				$tr_data .= '<td rowspan="'.count($data[$key]).'">'.$key.'</td>';
				$first = true;
				foreach ($value as $key2 => $value2) {
					if($first) {
						$tr_data .= '<td>'.($no < 10 ? ('0'.$no) : $no).'</td>';
						$tr_data .= '<td>'.$value2['kary_nama'].'</td>';
						$tr_data .= '<td></td>';
						$tr_data .= '<td></td>';
						$tr_data .= '<td></td>';
						$tr_data .= '<td></td>';
						$tr_data .= '<td></td>';
						$tr_data .= '<td></td>';
						$tr_data .= '<td></td>';
						$tr_data .= '<td></td>';
						$tr_data .= '<td></td>';
						$tr_data .= '</tr>';

						$first = false;
					} else {
						$tr_data .= '<tr>';
						$tr_data .= '<td>'.($no < 10 ? ('0'.$no) : $no).'</td>';
						$tr_data .= '<td>'.$value2['kary_nama'].'</td>';
						$tr_data .= '<td></td>';
						$tr_data .= '<td></td>';
						$tr_data .= '<td></td>';
						$tr_data .= '<td></td>';
						$tr_data .= '<td></td>';
						$tr_data .= '<td></td>';
						$tr_data .= '<td></td>';
						$tr_data .= '<td></td>';
						$tr_data .= '<td></td>';
						$tr_data .= '</tr>';
					}
					$no++;
				}
				$tr_data .= '</tbody>';
			}
		}

				if(empty($tr_data)) {
			$tr_data .= '<tr>';
			$tr_data .= '<td colspan="12">Data masih kosong</td>';
			$tr_data .= '</tr>';
		}

$output = <<<EOF
<table id="fixTable">
	<thead>
		<tr>
			<th><div class="wdclm">Group</div></th>
            <th><div class="wdclm no">No.</div></th>
            <th><div class="wdclm">Nama</div></th>
            <th><div class="wdclm">Insentif - 16 Juli '15'</div></th>
            <th><div class="wdclm">Insentif - 17 Juli '15'</div></th>
            <th><div class="wdclm">Insentif - 18 Juli '15'</div></th>
            <th><div class="wdclm">Insentif - 20 Juli '15'</div></th>
            <th><div class="wdclm">Insentif - 21 Juli '15'</div></th>
            <th><div class="wdclm">Total Hari</div></th>
            <th><div class="wdclm">Perhari</div></th>
            <th><div class="wdclm">Jumlah</div></th>
            <th><div class="wdclm">Keterangan</div></th>
		</tr>
	</thead>
	$tr_data
</table>
EOF;
		$this->_data['list_peserta'] = $output;

		$this->template->set('title', 'Insentif Hari Raya | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'beritaacara/list_insentif_hari_raya_2', $this->_data);
	}

	function tagihan_ot($pbcr_id) {
		$this->_data['pbcr_id'] = $pbcr_id;

		$this->template->set('title', 'Tagihan OT | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'beritaacara/list_absen_tagihan_ot', $this->_data);
	}

	function absen_gajian($pbcr_id) {
		$this->_data['pbcr_id'] = $pbcr_id;

		$this->template->set('title', 'Absen Gajian | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'beritaacara/list_absen_gajian_2', $this->_data);
	}

	function absen_tagihan($pbcr_id) {
		$this->_data['pbcr_id'] = $pbcr_id;

		$this->template->set('title', 'Absen Tagihan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'beritaacara/list_absen_tagihan_2', $this->_data);
	}

	function slip_gaji($pbcr_id) {
		$this->_data['pbcr_id'] = $pbcr_id;

		$this->template->set('title', 'Slip Gaji | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'beritaacara/list_slip_gaji_2', $this->_data);
	}

	function rekap($pbcr_id) {
		$this->_data['pbcr_id'] = $pbcr_id;

		$this->template->set('title', 'Rekap | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'beritaacara/list_rekap', $this->_data);
	}

	function kasbon_operator($pbcr_id) {
		$this->_data['pbcr_id'] = $pbcr_id;

		$this->template->set('title', 'Kasbon Operator | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'beritaacara/list_kasbon_operator', $this->_data);
	}

	function ops($pbcr_id) {
		$this->_data['pbcr_id'] = $pbcr_id;

		$this->template->set('title', 'OPS | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'beritaacara/list_ops', $this->_data);
	}

	function bpjs($pbcr_id) {
		$this->_data['pbcr_id'] = $pbcr_id;

		$this->template->set('title', 'BPJS | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'beritaacara/list_bpjs', $this->_data);
	}

	function aplikasi_setoran($pbcr_id) {
		$this->_data['pbcr_id'] = $pbcr_id;

		$this->template->set('title', 'Aplikasi Setoran | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'beritaacara/list_aplikasi_setoran', $this->_data);
	}

	function peserta($pbcr_id) {
		$this->_data['pbcr_id'] = $pbcr_id;

		$sl_opt = '';
		foreach ($this->_data['static_data_source']['group_peserta'] as $key => $value) {
			$sl_opt .= '<option value="'.$key.'">'.$value.'</option>';
		}
		$this->_data['list_karyawan'] = $this->db->where('kary_void = 0')->get('karyawan')->result_array();
		$list_beritaacara = $this->db->where('baps_pbcr_id = "'.$pbcr_id.'"')->get('beritaacara_peserta')->result_array();
		$this->_data['list_beritaacara'] = array();
		foreach ($list_beritaacara as $value) {
			$this->_data['list_beritaacara'][$value['baps_kary_id']] = $value['baps_group'];
		}

		$this->_data['list_group'] = $sl_opt;

		$this->template->set('title', 'Peserta | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'beritaacara/list_peserta', $this->_data);
	}

	function save_peserta() {
		$ret = array(
			'err_msg' => ''
		);

		$baps_pbcr_id = $this->input->post('baps_pbcr_id');
		$baps_kary_id = $this->input->post('baps_kary_id');
		$baps_group = $this->input->post('baps_group');

		$res = $this->db->where('baps_pbcr_id = "'.$baps_pbcr_id.'" AND baps_kary_id = "'.$baps_kary_id.'"')->get('beritaacara_peserta')->row_array();

		if(!empty($res)) {
			$data = array(
				'baps_group' => $baps_group,
				'baps_changeuser' => $this->session->userdata('username'),
				'baps_changedate' => $this->_data['datetime'],
			);

			$this->db->where('baps_pbcr_id = "'.$baps_pbcr_id.'" AND baps_kary_id = "'.$baps_kary_id.'"')->update('beritaacara_peserta', $data);
		} else {
			$data = array(
				'baps_pbcr_id' => $baps_pbcr_id,
				'baps_kary_id' => $baps_kary_id,
				'baps_group' => $baps_group,
				'baps_entryuser' => $this->session->userdata('username'),
				'baps_entrydate' => $this->_data['datetime'],
			);

			$this->db->insert('beritaacara_peserta', $data);
		}

		echo json_encode($ret);
	}

	function delete_peserta() {
		$ret = array(
			'err_msg' => ''
		);

		$baps_pbcr_id = $this->input->post('baps_pbcr_id');
		$baps_kary_id = $this->input->post('baps_kary_id');

		$this->db->where('baps_pbcr_id = "'.$baps_pbcr_id.'" AND baps_kary_id = "'.$baps_kary_id.'"')->delete('beritaacara_peserta');

		echo json_encode($ret);
	}

	function load_peserta($pbcr_id) {
		$baps_pbcr_id = $pbcr_id;

		$data = $this->peserta_beritaacara($baps_pbcr_id);

		$tr_data = '';
		if(!empty($data)) {
			foreach ($data as $key => $value) {
				$no = 1;
				$tr_data .= '<tbody>';
				$tr_data .= '<tr>';
				$tr_data .= '<td rowspan="'.count($data[$key]).'">'.$key.'</td>';
				$first = true;
				foreach ($value as $key2 => $value2) {
					if($first) {
						$tr_data .= '<td>'.($no < 10 ? ('0'.$no) : $no).'</td>';
						$tr_data .= '<td>'.$value2['kary_nama'].'</td>';
						$tr_data .= '</tr>';

						$first = false;
					} else {
						$tr_data .= '<tr>';
						$tr_data .= '<td>'.($no < 10 ? ('0'.$no) : $no).'</td>';
						$tr_data .= '<td>'.$value2['kary_nama'].'</td>';
						$tr_data .= '</tr>';
					}
					$no++;
				}
				$tr_data .= '</tbody>';
			}
		}

		if(empty($tr_data)) {
			$tr_data .= '<tr>';
			$tr_data .= '<td colspan="2">Data masih kosong</td>';
			$tr_data .= '</tr>';
		}

$output = <<<EOF
<table>
	<thead>
		<tr>
			<th>Group</th>
			<th width="10%">No</th>
			<th>Nama</th>
		</tr>
	</thead>
	$tr_data
</table>
EOF;
		echo $output;
	}

	private function peserta_beritaacara($pbcr_id) {
		$res = $this->db->where('baps_pbcr_id = "'.$pbcr_id.'"')->join('karyawan', 'baps_kary_id=kary_id')->order_by('baps_group')->get('beritaacara_peserta')->result_array();
		$data = array();
		foreach ($res as $value) {
			$data[$value['baps_group']][$value['baps_kary_id']] = $value;
		}

		return $data;
	}
}

?>