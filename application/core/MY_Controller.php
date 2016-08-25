<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends MX_Controller {
	var $_data;
	
	function __construct(){
		parent::__construct();

		$this->load->helper('main');
	}
}

class MY_Frontend extends MY_Controller {
	var $_data;
	
	function __construct(){
		parent::__construct();
		$this->config->load('assets');
		$this->config->load('static_data_source');
		
		$frontend 				= $this->config->item('frontend');
		$this->_data['assets'] 	= site_url($frontend['assets']);

		$this->_data['role_access'] = array();
		if($this->session->userdata('role_id')) {
			$tmp = $this->db->select('aulv_role_access')->where('aulv_id = "'.$this->session->userdata('role_id').'"')->get('adminuserlevels')->row_array();
			$this->_data['role_access'] = unserialize($tmp['aulv_role_access']);
		}

		$this->_data['static_data_source'] = $this->config->item('static_data_source');
	}
}

class MY_Login extends MY_Controller {
	var $_data;
	
	function __construct(){
		parent::__construct();
		$this->load->helper('main');
		$this->load->helper('path');

		$this->config->load('assets');
		
		$path_web 				= $this->config->item('login');
		$this->_data['assets'] 	= site_url($path_web['assets']);
	}
}

?>