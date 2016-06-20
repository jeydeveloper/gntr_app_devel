<?php

class Crud_invoice_detail extends CI_Model {
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
		return $this->db->get('pembelian_invoice_detail')->row_array();
	}

	function get_all(){
		return $this->db->get('pembelian_invoice_detail')->result_array();
	}

	function posts($data){
		return $this->db->insert('pembelian_invoice_detail', $data);
	}

	function puts($data){
		return $this->db->update('pembelian_invoice_detail', $data);
	}

	function delete($data){
		return $this->db->delete('pembelian_invoice_detail', $data);
	}

	function join(){
        return $this->db
                ->select('pembelian_invoice_detail.*, barang_jasa.*')
                ->from('pembelian_invoice_detail')
                ->join('pembelian_invoice', 'pembelian_invoice.pbinv_noinvoice = pembelian_invoice_detail.pbinvd_invid','left')
                ->join('barang_jasa', 'pembelian_invoice_detail.pbinvd_jenisbarang = barang_jasa.brjs_id', 'left' )
                ->get()
                ->result();
    }
}