<?php

class Crud_daftarakun extends CI_Model {
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
		return $this->db->get('akun')->row_array();
	}

	function get_all(){
		return $this->db->get('akun')->result_array();
	}

	function posts($data){
		return $this->db->insert('akun', $data);
	}

	function puts($data){
		return $this->db->update('akun', $data);
	}

	function delete($data){
		return $this->db->delete('akun', $data);
	}

	function get_option() {
		$res = $this->where('akun_void = 0')->get_all();
		$data = array();
		foreach ($res as $key => $value) {
			$data[] = array(
				'name' 	=> $value['akun_nama'],
				'value' => $value['akun_id'],
			); 
		}
		return $data;
	}

	function get_nomorakun() {
		$res = $this->where('akun_parent = 0 and akun_void = 0')->get_all();
		$data = array();
		foreach ($res as $key => $value) {
			$data[] = array(
				'name' 	=> $value['akun_nomor'],
				'value' => $value['akun_id'],
			); 
		}
		return $data;
	}

	function get_option_info() {
		$res = $this->get_all();
		$data = array();
		foreach ($res as $key => $value) {
			$data[$value['akun_id']] = $value['akun_nama']; 
		}
		return $data;
	}

	function get_option_parent() {
		$res = $this->get_all();
		$data = array();
		foreach ($res as $key => $value) {
			$data[$value['akun_id']] = $value['akun_nomor']; 
		}
		return $data;
	}

	function get_option_detail() {
		$res = $this->get_all();
		$data = array();
		$parent = $this->get_option_parent();
		foreach ($res as $key => $value) {
			$data[] = array(
				'name' 	=> ($parent[$value['akun_parent']] . '-' . $value['akun_nomor']) . ' [' . $value['akun_nama'] . ']',
				'value' => $value['akun_id'],
			); 
		}
		return $data;
	}

	function get_saldo() {
		$data = array(
			'pembayaran' => array(
				'parent' => array(),
				'child' => array(),
			),
			'penerimaan' => array(
				'parent' => array(),
				'child' => array(),
			),
		);
		//----pembayaran-----
		$res = $this->db->select('akun_id, akun_parent, SUM(pgln_jumlah) as total', false)->join('pengeluaran', 'akun_id = pgln_akun_id')->where('akun_void = 0 AND pgln_void = 0')->group_by('akun_id')->get('akun')->result_array();
		foreach ($res as $key => $value) {
			if(empty($data['pembayaran']['parent'][$value['akun_parent']])) $data['pembayaran']['parent'][$value['akun_parent']] = 0;
			$data['pembayaran']['parent'][$value['akun_parent']] += $value['total'];
			$data['pembayaran']['child'][$value['akun_id']] = $value['total'];
		}
		//----penerimaan-----
		$res = $this->db->select('akun_id, akun_parent, SUM(pnrm_jumlah) as total', false)->join('penerimaan', 'akun_id = pnrm_akun_id')->where('akun_void = 0 AND pnrm_void = 0')->group_by('akun_id')->get('akun')->result_array();
		foreach ($res as $key => $value) {
			if(empty($data['penerimaan']['parent'][$value['akun_parent']])) $data['penerimaan']['parent'][$value['akun_parent']] = 0;
			$data['penerimaan']['parent'][$value['akun_parent']] += $value['total'];
			$data['penerimaan']['child'][$value['akun_id']] = $value['total'];
		}

		return $data;
	}
}  