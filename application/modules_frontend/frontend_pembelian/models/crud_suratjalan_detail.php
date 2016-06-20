<?php

class Crud_suratjalan_detail extends CI_Model {
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
		return $this->db->get('pembelian_permintaan_suratjalan_detail')->row_array();
	}

	function get_all(){
		return $this->db->get('pembelian_permintaan_suratjalan_detail')->result_array();
	}

	function posts($data){
		return $this->db->insert('pembelian_permintaan_suratjalan_detail', $data);
	}

	function puts($data){
		return $this->db->update('pembelian_permintaan_suratjalan_detail', $data);
	}

	function delete($data){
		return $this->db->delete('pembelian_permintaan_suratjalan_detail', $data);
	}

	function join(){
        return $this->db
                ->select('pembelian_permintaan_suratjalan_detail.*, barang_jasa.*')
                ->from('pembelian_permintaan_suratjalan_detail')
                ->join('pembelian_suratjalan', 'pembelian_suratjalan.pbsrtjalan_no = pembelian_permintaan_suratjalan_detail.pbsuratjaland_nopermintaan','left')
                ->join('barang_jasa', 'pembelian_permintaan_suratjalan_detail.pbsuratjaland_jenisbarang = barang_jasa.brjs_id', 'left' )
                ->get()
                ->result();
    }
}