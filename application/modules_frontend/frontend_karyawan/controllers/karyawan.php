<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Karyawan extends MY_Frontend {

	function __construct(){
		parent::__construct();

		if(!$this->session->userdata('userid')) {
			redirect('login');
			exit();
		}

		$this->load->model('frontend_karyawan/crud_karyawan', 'crud');
		$this->_data['module_base_url'] = site_url('karyawan');
		$this->_data['module_base_url_gaji'] = site_url('karyawan/gaji');
		$this->_data['datetime'] = date('Y-m-d H:i:s');
	}

	function index() {
		$this->_data['result'] = $this->crud->where('kary_void = 0')->order_by('kary_id', 'asc')->get_all();

		$this->template->set('title', 'Karyawan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'content', $this->_data);
	}

	function add() {
		if(!empty($_POST)) {
			if($this->do_add()) {
				redirect($this->_data['module_base_url']);
				exit();
			}
		}

		$this->template->set('title', 'Tambah Karyawan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'add', $this->_data);
	}

	private function do_add() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('kary_nama', 'Nama', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('kary_nik', 'NIK', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('kary_alamat', 'Alamat', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('kary_tempat_lahir', 'Tempat Lahir', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('kary_tanggal_lahir', 'Tanggal Lahir', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('kary_telpon', 'Telepon', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('kary_posisi_id', 'Posisi', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('kary_jabatan_id', 'Jabatan', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('kary_tipe_id', 'Tipe', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('kary_status_nikah_id', 'Status Nikah', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('kary_status_kontrak_id', 'Status Kontrak', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');

		if($this->form_validation->run()) {
			$db_data = array(
				'kary_nik' => $this->input->post('kary_nik'),
				'kary_nama' => $this->input->post('kary_nama'),
				'kary_alamat' => $this->input->post('kary_alamat'),
				'kary_tempat_lahir' => $this->input->post('kary_tempat_lahir'),
				'kary_tanggal_lahir' => $this->input->post('kary_tanggal_lahir'),
				'kary_telpon' => $this->input->post('kary_telpon'),
				'kary_posisi_id' => $this->input->post('kary_posisi_id'),
				'kary_jabatan_id' => $this->input->post('kary_jabatan_id'),
				'kary_tipe_id' => $this->input->post('kary_tipe_id'),
				'kary_status_nikah_id' => $this->input->post('kary_status_nikah_id'),
				'kary_status_kontrak_id' => $this->input->post('kary_status_kontrak_id'),
				'kary_entrydate' => $this->_data['datetime'],
			);
			$this->crud->posts($db_data);

			return true;
		} else {
			$this->_data['err_msg'] = validation_errors();
			return false;
		}
	}

	function delete($id) {
		$db_data = array(
			'kary_void' => 1,
			'kary_changedate' => $this->_data['datetime'],
		);
		$this->crud->where('kary_id = "'.$id.'"')->puts($db_data);

		redirect($this->_data['module_base_url']);
	}

	function edit($id) {
		if(!empty($_POST)) {
			if($this->do_edit()) {
				redirect($this->_data['module_base_url']);
				exit();
			}
			$this->_data['detail'] = $_POST;
		} else {
			$this->_data['detail'] = $this->crud->where('kary_id = "'.$id.'"')->get_row();
		}

		$this->template->set('title', 'Edit Karyawan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'edit', $this->_data);
	}

	private function do_edit() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('kary_id', 'ID', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('kary_nama', 'Nama', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('kary_nik', 'NIK', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('kary_alamat', 'Alamat', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('kary_tempat_lahir', 'Tempat Lahir', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('kary_tanggal_lahir', 'Tanggal Lahir', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('kary_telpon', 'Telepon', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('kary_posisi_id', 'Posisi', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('kary_jabatan_id', 'Jabatan', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('kary_tipe_id', 'Tipe', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('kary_status_nikah_id', 'Status Nikah', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('kary_status_kontrak_id', 'Status Kontrak', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');

		if($this->form_validation->run()) {
			$db_data = array(
				'kary_nik' => $this->input->post('kary_nik'),
				'kary_nama' => $this->input->post('kary_nama'),
				'kary_alamat' => $this->input->post('kary_alamat'),
				'kary_tempat_lahir' => $this->input->post('kary_tempat_lahir'),
				'kary_tanggal_lahir' => $this->input->post('kary_tanggal_lahir'),
				'kary_telpon' => $this->input->post('kary_telpon'),
				'kary_posisi_id' => $this->input->post('kary_posisi_id'),
				'kary_jabatan_id' => $this->input->post('kary_jabatan_id'),
				'kary_tipe_id' => $this->input->post('kary_tipe_id'),
				'kary_status_nikah_id' => $this->input->post('kary_status_nikah_id'),
				'kary_status_kontrak_id' => $this->input->post('kary_status_kontrak_id'),
				'kary_changedate' => $this->_data['datetime'],
			);
			$this->crud->where('kary_id = "'.$this->input->post('kary_id').'"')->puts($db_data);

			return true;
		} else {
			$this->_data['err_msg'] = validation_errors();
			return false;
		}
	}

	function absen() {
		$this->template->set('title', 'Absen Karyawan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'absen', $this->_data);
	}

	function add_absen() {
		$this->template->set('title', 'Tambah Absen Karyawan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'absen_add', $this->_data);
	}

	function edit_absen($id) {
		$this->template->set('title', 'Edit Absen Karyawan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'absen_edit', $this->_data);
	}

	function gaji() {
		$this->_data['result'] = $this->crud->join('karyawan', 'kygj_kary_id=kary_id')->where('kygj_void = 0')->order_by('kary_id', 'asc')->get_all_gaji();

		$this->template->set('title', 'Gaji Karyawan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'gaji', $this->_data);
	}

	function add_gaji() {
		if(!empty($_POST)) {
			if($this->do_add_gaji()) {
				redirect($this->_data['module_base_url_gaji']);
				exit();
			}
		}

		$this->_data['option_karyawan'] = $this->crud->get_option();

		$this->template->set('title', 'Tambah Gaji Karyawan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'gaji_add', $this->_data);
	}

	private function do_add_gaji() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('kygj_kary_id', 'Karyawan', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('kygj_gaji_pokok', 'Gaji Pokok', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('kygj_tunjangan', 'Tunjangan', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('kygj_lembur', 'Lembur', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('kygj_uang_makan', 'Uang Makan', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('kygj_transport', 'Transport', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('kygj_bonus', 'Bonus', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('kygj_pinjaman', 'Pinjaman', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('kygj_lain_lain', 'Lain-lain', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');

		if($this->form_validation->run()) {
			$db_data = array(
				'kygj_kary_id' => $this->input->post('kygj_kary_id'),
				'kygj_gaji_pokok' => $this->input->post('kygj_gaji_pokok'),
				'kygj_tunjangan' => $this->input->post('kygj_tunjangan'),
				'kygj_lembur' => $this->input->post('kygj_lembur'),
				'kygj_uang_makan' => $this->input->post('kygj_uang_makan'),
				'kygj_transport' => $this->input->post('kygj_transport'),
				'kygj_bonus' => $this->input->post('kygj_bonus'),
				'kygj_pinjaman' => $this->input->post('kygj_pinjaman'),
				'kygj_lain_lain' => $this->input->post('kygj_lain_lain'),
				'kygj_total' => ($this->input->post('kygj_gaji_pokok') + $this->input->post('kygj_tunjangan') + $this->input->post('kygj_lembur') + $this->input->post('kygj_uang_makan') + $this->input->post('kygj_transport') + $this->input->post('kygj_bonus') + $this->input->post('kygj_pinjaman') + $this->input->post('kygj_lain_lain')),
			);
			$this->crud->posts_gaji($db_data);

			return true;
		} else {
			$this->_data['err_msg'] = validation_errors();
			return false;
		}
	}

	function delete_gaji($id) {
		$db_data = array(
			'kygj_void' => 1,
			'kygj_changedate' => $this->_data['datetime'],
		);
		$this->crud->where('kary_id = "'.$id.'"')->puts_gaji($db_data);

		redirect($this->_data['module_base_url_gaji']);
	}

	function edit_gaji($id) {
		if(!empty($_POST)) {
			if($this->do_edit_gaji()) {
				redirect($this->_data['module_base_url_gaji']);
				exit();
			}
			$this->_data['detail'] = $_POST;
		} else {
			$this->_data['detail'] = $this->crud->where('kygj_id = "'.$id.'"')->get_row_gaji();
		}

		$this->_data['option_karyawan'] = $this->crud->get_option();

		$this->template->set('title', 'Edit Gaji Karyawan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'gaji_edit', $this->_data);
	}

	private function do_edit_gaji() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('kygj_id', 'ID', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('kygj_kary_id', 'Karyawan', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('kygj_gaji_pokok', 'Gaji Pokok', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('kygj_tunjangan', 'Tunjangan', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('kygj_lembur', 'Lembur', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('kygj_uang_makan', 'Uang Makan', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('kygj_transport', 'Transport', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('kygj_bonus', 'Bonus', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('kygj_pinjaman', 'Pinjaman', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('kygj_lain_lain', 'Lain-lain', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');

		if($this->form_validation->run()) {
			$db_data = array(
				'kygj_kary_id' => $this->input->post('kygj_kary_id'),
				'kygj_gaji_pokok' => $this->input->post('kygj_gaji_pokok'),
				'kygj_tunjangan' => $this->input->post('kygj_tunjangan'),
				'kygj_lembur' => $this->input->post('kygj_lembur'),
				'kygj_uang_makan' => $this->input->post('kygj_uang_makan'),
				'kygj_transport' => $this->input->post('kygj_transport'),
				'kygj_bonus' => $this->input->post('kygj_bonus'),
				'kygj_pinjaman' => $this->input->post('kygj_pinjaman'),
				'kygj_lain_lain' => $this->input->post('kygj_lain_lain'),
				'kygj_total' => ($this->input->post('kygj_gaji_pokok') + $this->input->post('kygj_tunjangan') + $this->input->post('kygj_lembur') + $this->input->post('kygj_uang_makan') + $this->input->post('kygj_transport') + $this->input->post('kygj_bonus') + $this->input->post('kygj_pinjaman') + $this->input->post('kygj_lain_lain')),
			);
			$this->crud->where('kygj_id = "'.$this->input->post('kygj_id').'"')->puts_gaji($db_data);

			return true;
		} else {
			$this->_data['err_msg'] = validation_errors();
			return false;
		}
	}

	function pph_21() {
		$this->template->set('title', 'PPh 21 Karyawan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'pph_21', $this->_data);
	}

	function add_pph_21() {
		$this->template->set('title', 'Tambah PPh 21 Karyawan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'pph_21_add', $this->_data);
	}

	function edit_pph_21($id) {
		$this->template->set('title', 'Edit PPh 21 Karyawan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'pph_21_edit', $this->_data);
	}
}

?>