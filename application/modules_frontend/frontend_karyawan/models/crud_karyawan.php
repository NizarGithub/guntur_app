<?php

class Crud_karyawan extends CI_Model {
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

	function join($tablejoin, $onjoin, $jointype = 'inner'){
		$this->db->join($tablejoin, $onjoin, $jointype);
		return $this;
	}
	//--------------end---------------

	function get_row(){
		return $this->db->get('karyawan')->row_array();
	}

	function get_all(){
		return $this->db->get('karyawan')->result_array();
	}

	function posts($data){
		return $this->db->insert('karyawan', $data);
	}

	function puts($data){
		return $this->db->update('karyawan', $data);
	}

	function delete($data){
		return $this->db->delete('karyawan', $data);
	}

	function get_option() {
		$res = $this->where('kary_void = 0')->get_all();
		$data = array();
		foreach ($res as $key => $value) {
			$data[] = array(
				'name' 	=> $value['kary_nama'],
				'value' => $value['kary_id'],
			); 
		}
		return $data;
	}

	function get_option_info() {
		$res = $this->get_all();
		$data = array();
		foreach ($res as $key => $value) {
			$data[$value['kary_id']] = $value['kary_nama']; 
		}
		return $data;
	}

	//------------model gaji karyawan-------------
	function get_row_gaji(){
		return $this->db->join('karyawan', 'kary_id=kygj_kary_id', 'left')->get('karyawan_gaji')->row_array();
	}
	
	function get_row_gaji_history($id, $periodeBulan, $periodeTahun){
	    if($periodeBulan == 'all') {
	        $q = "
		SELECT 
		    kary_nama,
		    kary_nik,
		    kary_jabatan_id,
		    tbl.*
		FROM gntrapp_karyawan 
		LEFT JOIN (SELECT 
		    kygj_kary_id,
		    kygj_periode_bulan,
		    kygj_periode_tahun,
            SUM(kygj_gaji_pokok) AS kygj_gaji_pokok,
            SUM(kygj_tunjangan) AS kygj_tunjangan,
            SUM(kygj_lembur) AS kygj_lembur,
            SUM(kygj_uang_makan) AS kygj_uang_makan,
            SUM(kygj_rapelanbulanlalu) AS kygj_rapelanbulanlalu,
            SUM(kygj_income) AS kygj_income,
            SUM(kygj_transport) AS kygj_transport,
            SUM(kygj_insentif) AS kygj_insentif,
            SUM(kygj_deduction) AS kygj_deduction,
            SUM(kygj_thp) AS kygj_thp,
            SUM(kygj_bpjstk) AS kygj_bpjstk,
            SUM(kygj_potshutdown) AS kygj_potshutdown,
            SUM(kygj_rapelbulandepan) AS kygj_rapelbulandepan,
            SUM(kygj_mangkir) AS kygj_mangkir,
            SUM(kygj_potperalatan) AS kygj_potperalatan,
            SUM(kygj_pph) AS kygj_pph,
            SUM(kygj_bpjskes) AS kygj_bpjskes,
            SUM(kygj_pinjaman) AS kygj_pinjaman
            FROM gntrapp_karyawan_gaji
            WHERE kygj_kary_id='$id' AND kygj_periode_tahun = $periodeTahun 
		    ORDER BY kygj_periode_bulan
		) as tbl ON (kary_id = tbl.kygj_kary_id) 
		WHERE kary_id='$id'
		";
	        $res = $this->db->query($q)->result_array();
	        $arr = [];
	        if(!empty($res)) {
	            foreach ($res as $value) {
                    $arr[0] = $value;
	                if(empty($value['kygj_periode_bulan'])) continue;
	                $arr[$value['kygj_periode_bulan']] = $value;
                }
            }
            return $arr;
        } else {
            $q = "
		SELECT 
		    kary_nama,
		    kary_nik,
		    kary_jabatan_id,
		    tbl.*
		FROM gntrapp_karyawan 
		LEFT JOIN (SELECT 
		    kygj_kary_id,
            kygj_periode_bulan,
		    kygj_periode_tahun,
            kygj_gaji_pokok,
            kygj_tunjangan,
            kygj_lembur,
            kygj_uang_makan,
            kygj_rapelanbulanlalu,
            kygj_income,
            kygj_transport,
            kygj_insentif,
            kygj_deduction,
            kygj_thp,
            kygj_bpjstk,
            kygj_potshutdown,
            kygj_rapelbulandepan,
            kygj_mangkir,
            kygj_potperalatan,
            kygj_pph,
            kygj_bpjskes,
            kygj_pinjaman
            FROM gntrapp_karyawan_gaji
            WHERE kygj_kary_id='$id' AND kygj_periode_bulan = $periodeBulan AND kygj_periode_tahun = $periodeTahun
		) as tbl ON (kary_id = tbl.kygj_kary_id)
		WHERE kary_id='$id'
		";
            return $this->db->query($q)->row_array();
        }

	}

	function get_all_gaji(){
		return $this->db->get('karyawan_gaji')->result_array();
	}

	function posts_gaji($data){
		return $this->db->insert('karyawan_gaji', $data);
	}

	function puts_gaji($data){
		return $this->db->update('karyawan_gaji', $data);
	}

	function delete_gaji($data){
		return $this->db->delete('karyawan_gaji', $data);
	}
}  