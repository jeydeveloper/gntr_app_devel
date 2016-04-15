<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends MY_Frontend {
	
	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('userid')) {
			redirect('login');
			exit();
		}
	}
	
	function index() {
		$this->logout();
	}
	
	function logout(){
		$data = array(
			'userid' 		=> '',
			'username' 		=> '',
			'role_id' 		=> '',
			'role_name' 	=> '',
		);
		
		$this->session->unset_userdata($data);
		$this->session->sess_destroy();
		
		redirect('login');
		exit();
	}
	
}

?>