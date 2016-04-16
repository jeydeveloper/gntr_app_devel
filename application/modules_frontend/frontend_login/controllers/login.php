<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MY_Login {

	function __construct(){
		parent::__construct();

		if($this->session->userdata('userid')) {
			redirect('/');
			exit();
		}
	}
	
	function index() {
		$this->template->set('title', 'Login PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_login/main', 'content', $this->_data);
	}

	function ajax_submit() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('form-username', 'Username', 'trim|prep_for_form|required|xss_clean|required');
		$this->form_validation->set_rules('form-password', 'Password', 'trim|prep_for_form|xss_clean|required');

		$data = array(
			'error' => '',
			'detail' => $_POST,
			'next_url' => site_url('/'),
		);

		if($this->form_validation->run()) {
			$username = $this->input->post('form-username');
			$password = $this->input->post('form-password');
			$date_now = date('Y-m-d H:i:s');

			$res = $this->db->select('admusr_id, admusr_username, aulv_id, aulv_name, admusr_user_status')->join('adminuserlevels', 'admusr_aulv_id = aulv_id', 'left')->where(array('admusr_username' => $username, 'admusr_userpasswd' => md5($password)))->get('adminusers')->row_array();

			if(!empty($res)) {
				//---update lastactivity user success login
				$db_data = array(
				   'admusr_lastactivity' 	=> $date_now,
				);
				$this->db->where('admusr_id = "' . $res['admusr_id'] . '"')->update('adminusers', $db_data);

				$this->session->set_userdata(
					array(
						'userid' 		=> $res['admusr_id'],
						'username' 		=> $res['admusr_username'],
						'role_id' 		=> $res['aulv_id'],
						'role_name' 	=> $res['aulv_name'],
					)
				);
			} else {
				$data['error'] = 'Wrong username or password! please try again.';
			}
		} else {
			$data['error'] = validation_errors();
		}

		echo json_encode($data);
	}
}

?>