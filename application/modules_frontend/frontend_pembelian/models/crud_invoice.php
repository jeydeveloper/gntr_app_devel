<?php

class Crud_invoice extends CI_Model {
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
        return $this->db->get('pembelian_invoice')->row_array();
    }

    function get_all(){
        return $this->db->from('pembelian_invoice')->join('pembelian_permintaan', 'pbinv_pbptn_id=pbptn_id')->join('vendor', 'pbptn_vndr_id=vndr_id')->get()->result_array();
    }

    function posts($data){
        return $this->db->insert('pembelian_invoice', $data);
    }

    function puts($data){
        return $this->db->update('pembelian_invoice', $data);
    }

    function delete($data){
        return $this->db->delete('pembelian_invoice', $data);
    }

    function get_option_info_detail($id='') {
        if(!empty($id)) $this->db->where('pbinv_id = "'.$id.'"');
        
        $res = $this->db->get('pembelian_invoice')->result_array();
        $data = array();
        foreach ($res as $key => $value) {
            $data[$value['pbinv_id']] = $value;
        }
        return $data;
    }

    function update_relation_referensi($id_1, $id_2, $id_3, $id_4) {
        $data = array(
            'pbttr_pbsrtjalan_id' => $id_2,
            'pbttr_pbkw_id' => $id_3,
            'pbttr_pbptn_id' => $id_4,
        );
        $this->db->where('pbttr_pbinv_id = "'.$id_1.'"')->update('pembelian_tandaterima', $data);

        $data = array(
            'bp_pbsrtjalan_id' => $id_2,
            'bp_pbkw_id' => $id_3,
            'bp_pbptn_id' => $id_4,
        );
        $this->db->where('bp_pbinv_id = "'.$id_1.'"')->update('bukti_pembayaran', $data);
    }

    // function join(){

    //     return $this->db
    //             ->select('gntrapp_penjualan_invoice_detail.*')
    //             ->from('gntrapp_penjualan_invoice_detail')
    //             ->join('gntrapp_penjualan_invoice', 'gntrapp_penjualan_invoice.inv_noinvoice = gntrapp_penjualan_invoice_detail.invd_noinvoice','left')
    //             ->get()
    //             ->result();
    // }
}