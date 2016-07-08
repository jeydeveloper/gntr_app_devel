<?php

class Crud_permintaan extends CI_Model {
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
		return $this->db->get('penjualan_permintaan')->row_array();
	}

	function get_all(){
		return $this->db->get('penjualan_permintaan')->result_array();
	}

	function posts($data){
		return $this->db->insert('penjualan_permintaan', $data);
	}

	function puts($data){
		return $this->db->update('penjualan_permintaan', $data);
	}

	function delete($data){
		return $this->db->delete('penjualan_permintaan', $data);
	}

	function get_option_info_detail($id='') {
		if(!empty($id)) $this->db->where('ppmt_id = "'.$id.'"');
		
        $res = $this->db->join('client', 'ppmt_clnt_id = clnt_id')->where('ppmt_void = 0')->order_by('ppmt_id', 'asc')->get('penjualan_permintaan')->result_array();
        $data = array();
        foreach ($res as $key => $value) {
            $data[$value['ppmt_id']] = $value;
        }
        return $data;
    }

    function update_relation_referensi($id_1, $id_2) {
    	$data = array(
    		'pjinv_ppnw_id' => $id_2,
    	);
		$this->db->where('pjinv_ppmt_id = "'.$id_1.'"')->update('penjualan_invoice', $data);

		$data = array(
    		'pjkw_ppnw_id' => $id_2,
    	);
		$this->db->where('pjkw_ppmt_id = "'.$id_1.'"')->update('penjualan_kwitansi', $data);

		$data = array(
    		'pbcr_ppnw_id' => $id_2,
    	);
		$this->db->where('pbcr_ppmt_id = "'.$id_1.'"')->update('penjualan_beritaacara', $data);

		$data = array(
    		'pttr_ppnw_id' => $id_2,
    	);
		$this->db->where('pttr_ppmt_id = "'.$id_1.'"')->update('penjualan_tandaterima', $data);

		$data = array(
    		'pbktp_ppnw_id' => $id_2,
    	);
		$this->db->where('pbktp_ppmt_id = "'.$id_1.'"')->update('penjualan_bukti_pembayaran', $data);
    }
}