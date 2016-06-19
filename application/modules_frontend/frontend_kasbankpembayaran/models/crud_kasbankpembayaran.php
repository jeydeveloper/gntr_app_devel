<?php

class Crud_kasbankpembayaran extends CI_Model {
	//--------base---------------
	function select($select = '', $status = false) {
		if($select != '') $this->db->select($select, $status);
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

	function join($tablejoin, $onjoin, $jointype = 'inner'){
		$this->db->join($tablejoin, $onjoin, $jointype);
		return $this;
	}
	//--------------end---------------

	function get_row(){
		return $this->db->get('pengeluaran')->row_array();
	}

	function get_all(){
		return $this->db->get('pengeluaran')->result_array();
	}

	function posts($data){
		return $this->db->insert('pengeluaran', $data);
	}

	function puts($data){
		return $this->db->update('pengeluaran', $data);
	}

	function delete($data){
		return $this->db->delete('pengeluaran', $data);
	}

	function get_option() {
		$res = $this->where('pgln_void = 0')->get_all();
		$data = array();
		foreach ($res as $key => $value) {
			$data[] = array(
				'name' 	=> $value['pgln_name'],
				'value' => $value['pgln_id'],
			); 
		}
		return $data;
	}

	function get_option_info() {
		$res = $this->get_all();
		$data = array();
		foreach ($res as $key => $value) {
			$data[$value['pgln_id']] = $value['pgln_name']; 
		}
		return $data;
	}
}  