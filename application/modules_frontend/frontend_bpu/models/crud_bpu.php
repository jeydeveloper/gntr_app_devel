<?php

class Crud_bpu extends CI_Model {
	//--------base---------------
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
	//--------------end---------------

	function get_row(){
		return $this->db->get('bpu')->row_array();
	}

	function get_all(){
		return $this->db->join('project', 'proj_id = bpu_proj_id')->get('bpu')->result_array();
	}

	function posts($data){
		return $this->db->insert('bpu', $data);
	}

	function puts($data){
		return $this->db->update('bpu', $data);
	}

	function delete($data){
		return $this->db->delete('bpu', $data);
	}

	function get_option() {
		$res = $this->where('aulv_void = 0')->get_all();
		$data = array();
		foreach ($res as $key => $value) {
			$data[] = array(
				'name' 	=> $value['aulv_name'],
				'value' => $value['aulv_id'],
			); 
		}
		return $data;
	}

	function get_option_info() {
		$res = $this->get_all();
		$data = array();
		foreach ($res as $key => $value) {
			$data[$value['aulv_id']] = $value['aulv_name']; 
		}
		return $data;
	}
}  