<?php

class Crud_karyawan extends CI_Model {
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

	function get_row(){
		return $this->db->get('karyawan')->row_array();
	}

	function get_all(){
		return $this->db->get('karyawan')->result_array();
	}

	function posts($data){
		return $this->db->insert('karyawan', $data);
	}

	function puts($data){
		return $this->db->update('karyawan', $data);
	}

	function delete($data){
		return $this->db->delete('karyawan', $data);
	}

	function get_option() {
		$res = $this->where('kary_void = 0')->get_all();
		$data = array();
		foreach ($res as $key => $value) {
			$data[] = array(
				'name' 	=> $value['kary_nama'],
				'value' => $value['kary_id'],
			); 
		}
		return $data;
	}

	function get_option_info() {
		$res = $this->get_all();
		$data = array();
		foreach ($res as $key => $value) {
			$data[$value['kary_id']] = $value['kary_nama']; 
		}
		return $data;
	}

	//------------model gaji karyawan-------------
	function get_row_gaji(){
		return $this->db->get('karyawan_gaji')->row_array();
	}

	function get_all_gaji(){
		return $this->db->get('karyawan_gaji')->result_array();
	}

	function posts_gaji($data){
		return $this->db->insert('karyawan_gaji', $data);
	}

	function puts_gaji($data){
		return $this->db->update('karyawan_gaji', $data);
	}

	function delete_gaji($data){
		return $this->db->delete('karyawan_gaji', $data);
	}
}  