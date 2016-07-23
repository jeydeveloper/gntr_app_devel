<?php

class Crud_tanda_terima extends CI_Model {
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
		return $this->db->get('pembelian_tandaterima')->row_array();
	}

	function get_all(){
		return $this->db->from('pembelian_tandaterima')->join('pembelian_permintaan', 'pbttr_pbptn_id=pbptn_id')->join('vendor', 'pbptn_vndr_id=vndr_id')->get()->result_array();
	}

	function posts($data){
		return $this->db->insert('pembelian_tandaterima', $data);
	}

	function puts($data){
		return $this->db->update('pembelian_tandaterima', $data);
	}

	function delete($data){
		return $this->db->delete('pembelian_tandaterima', $data);
	}

	function get_option_info_detail($id='') {
		if(!empty($id)) $this->db->where('pbttr_id = "'.$id.'"');
		
        $res = $this->db->get('pembelian_tandaterima')->result_array();
        $data = array();
        foreach ($res as $key => $value) {
            $data[$value['pbttr_id']] = $value;
        }
        return $data;
    }

    function update_relation_referensi($id_1, $id_2, $id_3, $id_4, $id_5) {
        $data = array(
            'bp_pbinv_id' => $id_2,
            'bp_pbsrtjalan_id' => $id_3,
            'bp_pbkw_id' => $id_4,
            'bp_pbptn_id' => $id_5,
        );
        $this->db->where('bp_pbttr_id = "'.$id_1.'"')->update('bukti_pembayaran', $data);
    }
}