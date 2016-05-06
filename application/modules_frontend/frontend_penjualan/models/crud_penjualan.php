<?php

class Crud_penjualan extends CI_Model {
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

	function join($tablejoin, $onjoin, $jointype = 'inner'){
		$this->db->join($tablejoin, $onjoin, $jointype);
		return $this;
	}
	//--------------end---------------

	function get_row_penawaran(){
		return $this->db->get('penjualan_penawaran')->row_array();
	}

	function get_all_penawaran(){
		return $this->db->get('penjualan_penawaran')->result_array();
	}

	function posts_penawaran($data){
		return $this->db->insert('penjualan_penawaran', $data);
	}

	function puts_penawaran($data){
		return $this->db->update('penjualan_penawaran', $data);
	}

	function delete_penawaran($data){
		return $this->db->delete('penjualan_penawaran', $data);
	}

	function get_option_penawaran() {
		$res = $this->where('ppnw_void = 0')->get_all();
		$data = array();
		foreach ($res as $key => $value) {
			$data[] = array(
				'name' 	=> $value['ppnw_no'],
				'value' => $value['ppnw_id'],
			); 
		}
		return $data;
	}

	function get_option_info_penawaran() {
		$res = $this->get_all();
		$data = array();
		foreach ($res as $key => $value) {
			$data[$value['ppnw_id']] = $value['ppnw_no']; 
		}
		return $data;
	}
}  