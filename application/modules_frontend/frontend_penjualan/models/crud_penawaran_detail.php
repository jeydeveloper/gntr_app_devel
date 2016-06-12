<?php

class Crud_penawaran_detail extends CI_Model {
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
		return $this->db->get('penjualan_penawaran_detail')->row_array();
	}

	function get_all(){
		return $this->db->get('penjualan_penawaran_detail')->result_array();
	}

	function posts($data){
		return $this->db->insert('penjualan_penawaran_detail', $data);
	}

	function puts($data){
		return $this->db->update('penjualan_penawaran_detail', $data);
	}

	function delete($data){
		return $this->db->delete('penjualan_penawaran_detail', $data);
	}

	function join(){
        return $this->db
                ->select('penjualan_penawaran_detail.*')
                ->from('penjualan_penawaran_detail')
                ->join('penjualan_penawaran', 'penjualan_penawaran.ppnw_no_penawaran = penjualan_penawaran_detail.ppnwd_no_penawaran','left')
                ->get()
                ->result();
    }
}