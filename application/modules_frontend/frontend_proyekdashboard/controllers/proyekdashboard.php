<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Proyekdashboard extends MY_Frontend {

	function __construct(){
		parent::__construct();

		if(!$this->session->userdata('userid')) {
			redirect('login');
			exit();
		}

		$this->load->model('frontend_project/crud_project');
		$this->load->model('frontend_client/crud_client');
		$this->load->model('frontend_vendor/crud_vendor');
		$this->load->model('frontend_barangjasa/crud_barangjasa');
	}

	function index() {
		$this->_data['result_project'] = $this->crud_project->join('client', 'proj_clnt_id = clnt_id', 'LEFT')->where('proj_void = 0')->order_by('proj_clnt_id', 'DESC')->set_limit(5)->get_all();
		$this->_data['result_client'] = $this->crud_client->where('clnt_void = 0 AND clnt_status = 1')->order_by('clnt_id', 'DESC')->set_limit(5)->get_all();
		$this->_data['result_vendor'] = $this->crud_vendor->where('vndr_void = 0 AND vndr_status = 1')->order_by('vndr_id', 'DESC')->set_limit(5)->get_all();
		$this->_data['result_barangjasa'] = $this->crud_barangjasa->where('brjs_void = 0')->order_by('brjs_id', 'DESC')->set_limit(5)->get_all();

		$this->template->set('title', 'Proyek Dashboard | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'content', $this->_data);
	}
}

?>