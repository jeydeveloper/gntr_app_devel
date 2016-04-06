<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kasbankpenerimaan extends MY_Frontend {

	function __construct(){
		parent::__construct();
	}

	function index() {
		$this->template->set('title', 'Kas Bank Penerimaan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'content', $this->_data);
	}
}

?>