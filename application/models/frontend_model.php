<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Frontend_model extends CI_Model {
	function select($select = '') {
		if($select != '') $this->db->select($select);
		return $this;
	}

	function where($where = '') {
		if($where != '') $this->db->where($where);
		return $this;
	}

	function where_in($fieldname = '', $where = '') {
		if($where != '' AND $fieldname != '') $this->db->where_in($fieldname, $where);
		return $this;
	}

	function where_not_in($fieldname = '', $where = '') {
		if($where != '' AND $fieldname != '') $this->db->where_not_in($fieldname, $where);
		return $this;
	}
	
	function set_limit($limit, $start = 0) {
    	$this->db->limit($limit, $start);
        return $this;
    }
	
	function order_by($field, $direction = 'asc') {
		$this->db->order_by($field, $direction);
		return $this;
	}

	function order_by_multi($field) {
		$this->db->order_by($field);
		return $this;
	}
	
	function like($field, $keyword, $pattern = 'both') {
		$this->db->like($field, $keyword, $pattern);
		return $this;
	}
	
	function or_like($field, $keyword = '', $pattern = 'both'){
		if($keyword != '') $this->db->or_like($field, $keyword, $pattern);
		else  $this->db->or_like($field);
		return $this;
	}
	
	function group_by($group_by = ''){
		$this->db->group_by($group_by);
		return $this;
	}
	
	/* ---------------------------------------- All About Admin ------------------------- */

	//adminusers
	function get_row_adminusers(){
		return $this->db->get('adminusers')->row_array();
	}
	
	function get_all_adminusers(){
		return $this->db->get('adminusers')->result_array();
	}
	
	function posts_adminusers($data){
		return $this->db->insert('adminusers', $data);
	}
	
	function puts_adminusers($data){
		return $this->db->update('adminusers', $data);
	}
	
	function delete_adminusers($data){
		return $this->db->delete('adminusers', $data);
	}

	//adminuserlevels
	function get_row_adminuserlevels(){
		return $this->db->get('adminuserlevels')->row_array();
	}
	
	function get_all_adminuserlevels(){
		return $this->db->get('adminuserlevels')->result_array();
	}
	
	function posts_adminuserlevels($data){
		return $this->db->insert('adminuserlevels', $data);
	}
	
	function puts_adminuserlevels($data){
		return $this->db->update('adminuserlevels', $data);
	}
	
	function delete_adminuserlevels($data){
		return $this->db->delete('adminuserlevels', $data);
	}

	function get_option_adminuserlevels() {
		$res = $this->get_all_adminuserlevels();
		$data = array();
		foreach ($res as $key => $value) {
			$data[] = array(
				'name' 	=> $value['aulv_name'],
				'value' => $value['aulv_id'],
			); 
		}
		return $data;
	}

	function get_option_info_adminuserlevels() {
		$res = $this->get_all_adminuserlevels();
		$data = array();
		foreach ($res as $key => $value) {
			$data[$value['aulv_id']] = $value['aulv_name']; 
		}
		return $data;
	}

}

?>