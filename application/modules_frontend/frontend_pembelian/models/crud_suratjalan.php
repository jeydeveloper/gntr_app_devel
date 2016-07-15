<?php

class Crud_suratjalan extends CI_Model {
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
        return $this->db->get('pembelian_suratjalan')->row_array();
    }

    function get_all(){
        return $this->db->from('pembelian_suratjalan')->join('pembelian_permintaan', 'pbsrtjalan_pbptn_id=pbptn_id')->join('vendor', 'pbptn_vndr_id=vndr_id')->get()->result_array();
    }

    function posts($data){
        return $this->db->insert('pembelian_suratjalan', $data);
    }

    function puts($data){
        return $this->db->update('pembelian_suratjalan', $data);
    }

    function delete($data){
        return $this->db->delete('pembelian_suratjalan', $data);
    }

    function get_option_info_detail($id='') {
        if(!empty($id)) $this->db->where('pbsrtjalan_id = "'.$id.'"');
        
        $res = $this->db->get('pembelian_suratjalan')->result_array();
        $data = array();
        foreach ($res as $key => $value) {
            $data[$value['pbsrtjalan_id']] = $value;
        }
        return $data;
    }

    function update_relation_referensi($id_1, $id_2, $id_3) {
        $data = array(
            'pbinv_pbkw_id' => $id_2,
            'pbinv_pbptn_id' => $id_3,
        );
        $this->db->where('pbinv_pbsrtjalan_id = "'.$id_1.'"')->update('pembelian_invoice', $data);

        $data = array(
            'pbttr_pbkw_id' => $id_2,
            'pbttr_pbptn_id' => $id_3,
        );
        $this->db->where('pbttr_pbsrtjalan_id = "'.$id_1.'"')->update('pembelian_tandaterima', $data);

        $data = array(
            'bp_pbkw_id' => $id_2,
            'bp_pbptn_id' => $id_3,
        );
        $this->db->where('bp_pbsrtjalan_id = "'.$id_1.'"')->update('bukti_pembayaran', $data);
    }
}