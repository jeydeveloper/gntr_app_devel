<?php

class Crud_kwitansi extends CI_Model {
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
		return $this->db->get('penjualan_kwitansi')->row_array();
	}

	function get_all(){
		return $this->db->from('penjualan_kwitansi')->join('penjualan_permintaan', 'pjkw_ppmt_id=ppmt_id')->join('penjualan_penawaran', 'pjkw_ppnw_id=ppnw_id')->join('client', 'ppmt_clnt_id=clnt_id')->get()->result_array();
	}

	function posts($data){
		return $this->db->insert('penjualan_kwitansi', $data);
	}

	function puts($data){
		return $this->db->update('penjualan_kwitansi', $data);
	}

	function delete($data){
		return $this->db->delete('penjualan_kwitansi', $data);
	}

	function get_option_info_detail($id='') {
		if(!empty($id)) $this->db->where('pjkw_id = "'.$id.'"');
		
        $res = $this->db->get('penjualan_kwitansi')->result_array();
        $data = array();
        foreach ($res as $key => $value) {
            $data[$value['pjkw_id']] = $value;
        }
        return $data;
    }

    function update_relation_referensi($id_1, $id_2, $id_3, $id_4) {
		$data = array(
    		'pbcr_pjinv_id' => $id_2,
    		'pbcr_ppmt_id' => $id_3,
    		'pbcr_ppnw_id' => $id_4,
    	);
		$this->db->where('pbcr_pjkw_id = "'.$id_1.'"')->update('penjualan_beritaacara', $data);

		$data = array(
    		'pttr_pjinv_id' => $id_2,
    		'pttr_ppmt_id' => $id_3,
    		'pttr_ppnw_id' => $id_4,
    	);
		$this->db->where('pttr_pjkw_id = "'.$id_1.'"')->update('penjualan_tandaterima', $data);

		$data = array(
    		'pbktp_pjinv_id' => $id_2,
    		'pbktp_ppmt_id' => $id_3,
    		'pbktp_ppnw_id' => $id_4,
    	);
		$this->db->where('pbktp_pjkw_id = "'.$id_1.'"')->update('penjualan_bukti_pembayaran', $data);
    }
}