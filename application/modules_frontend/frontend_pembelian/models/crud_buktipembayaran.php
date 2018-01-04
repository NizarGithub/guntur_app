<?php

class Crud_buktipembayaran extends CI_Model {
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
        return $this->db->get('gntrapp_bukti_pembayaran')->row_array();
    }

    function get_all(){
        return $this->db->get('gntrapp_bukti_pembayaran')->result_array();
    }

    function posts($data){
        return $this->db->insert('gntrapp_bukti_pembayaran', $data);
    }

    function puts($data){
        return $this->db->update('gntrapp_bukti_pembayaran', $data);
    }

    function delete($data){
        return $this->db->delete('gntrapp_bukti_pembayaran', $data);
    }

    function get_option_info_detail() {
        $res = $this->db->get('gntrapp_bukti_pembayaran')->result_array();
        $data = array();
        foreach ($res as $key => $value) {
            $data[$value['bp_id']] = $value;
        }
        return $data;
    }
}