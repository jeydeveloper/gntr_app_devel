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
		
		$frontend 				= $this->config->item('frontend');
		$this->_data['assets'] 	= site_url($frontend['assets']);
	}
}

?>