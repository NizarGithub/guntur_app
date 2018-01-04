<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Daftaraktivalancar extends MY_Frontend {

	function __construct(){
		parent::__construct();

		if(!$this->session->userdata('userid')) {
			redirect('login');
			exit();
		}

		$this->load->model('frontend_daftaraktivalancar/crud_daftaraktivalancar');
		$this->_data['module_base_url'] = site_url('daftar-aktiva-lancar');
		$this->_data['datetime'] = date('Y-m-d H:i:s');
	}

	function index() {
		$this->_data['result'] = $this->crud_daftaraktivalancar->where('daktlcr_void = 0')->order_by('daktlcr_id', 'asc')->get_all();

		$this->template->set('title', 'Daftar Akun | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'content', $this->_data);
	}

	function add() {
		if(!empty($_POST)) {
			if($this->do_add()) {
				redirect($this->_data['module_base_url']);
				exit();
			}
		}

		$this->template->set('title', 'Tambah Akun | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'add', $this->_data);
	}

	private function do_add() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('daktlcr_kode', 'Kode', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('daktlcr_keterangan', 'Keterangan', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('daktlcr_tipe', 'Tipe', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('daktlcr_harga', 'Harga', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('daktlcr_tanggalpakai', 'Tanggal Pakai', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('daktlcr_tanggalbeli', 'Tanggal Beli', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('daktlcr_qty', 'Qty', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('daktlcr_umurbulan', 'Umur Bulan', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('daktlcr_persensusut', '% Susut', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('daktlcr_pajak', '% Pajak', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');

		if($this->form_validation->run()) {
			$db_data = array(
				'daktlcr_kode' => $this->input->post('daktlcr_kode'),
				'daktlcr_keterangan' => $this->input->post('daktlcr_keterangan'),
				'daktlcr_tipe' => $this->input->post('daktlcr_tipe'),
				'daktlcr_harga' => $this->input->post('daktlcr_harga'),
				'daktlcr_tanggalpakai' => $this->input->post('daktlcr_tanggalpakai'),
				'daktlcr_tanggalbeli' => $this->input->post('daktlcr_tanggalbeli'),
				'daktlcr_qty' => $this->input->post('daktlcr_qty'),
				'daktlcr_umurbulan' => $this->input->post('daktlcr_umurbulan'),
				'daktlcr_persensusut' => $this->input->post('daktlcr_persensusut'),
				'daktlcr_pajak' => $this->input->post('daktlcr_pajak'),
				'daktlcr_entrydate' => $this->_data['datetime'],
			);
			$this->crud_daftaraktivalancar->posts($db_data);

			return true;
		} else {
			$this->_data['err_msg'] = validation_errors();
			return false;
		}
	}

	function delete($id) {
		$db_data = array(
			'daktlcr_void' => 1,
			'daktlcr_changedate' => $this->_data['datetime'],
		);
		$this->crud_daftaraktivalancar->where('daktlcr_id = "'.$id.'"')->puts($db_data);

		redirect($this->_data['module_base_url']);
	}

	function edit($id) {
		if(!empty($_POST)) {
			if($this->do_edit()) {
				redirect($this->_data['module_base_url']);
				exit();
			}
			$this->_data['detail'] = $_POST;
		} else {
			$this->_data['detail'] = $this->crud_daftaraktivalancar->where('daktlcr_id = "'.$id.'"')->get_row();
		}

		$this->template->set('title', 'Edit Akun | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'edit', $this->_data);
	}

	private function do_edit() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('daktlcr_kode', 'Kode', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('daktlcr_keterangan', 'Keterangan', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('daktlcr_tipe', 'Tipe', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('daktlcr_harga', 'Harga', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('daktlcr_tanggalpakai', 'Tanggal Pakai', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('daktlcr_tanggalbeli', 'Tanggal Beli', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('daktlcr_qty', 'Qty', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('daktlcr_umurbulan', 'Umur Bulan', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('daktlcr_persensusut', '% Susut', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('daktlcr_pajak', '% Pajak', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');

		if($this->form_validation->run()) {
			$db_data = array(
				'daktlcr_kode' => $this->input->post('daktlcr_kode'),
				'daktlcr_keterangan' => $this->input->post('daktlcr_keterangan'),
				'daktlcr_tipe' => $this->input->post('daktlcr_tipe'),
				'daktlcr_harga' => $this->input->post('daktlcr_harga'),
				'daktlcr_tanggalpakai' => $this->input->post('daktlcr_tanggalpakai'),
				'daktlcr_tanggalbeli' => $this->input->post('daktlcr_tanggalbeli'),
				'daktlcr_qty' => $this->input->post('daktlcr_qty'),
				'daktlcr_umurbulan' => $this->input->post('daktlcr_umurbulan'),
				'daktlcr_persensusut' => $this->input->post('daktlcr_persensusut'),
				'daktlcr_pajak' => $this->input->post('daktlcr_pajak'),
				'daktlcr_changedate' => $this->_data['datetime'],
			);
			$this->crud_daftaraktivalancar->where('daktlcr_id = "'.$this->input->post('daktlcr_id').'"')->puts($db_data);

			return true;
		} else {
			$this->_data['err_msg'] = validation_errors();
			return false;
		}
	}
}

?>