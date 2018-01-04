<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Persediaan extends MY_Frontend {

	function __construct(){
		parent::__construct();

		if(!$this->session->userdata('userid')) {
			redirect('login');
			exit();
		}

		$this->load->model('frontend_barangjasa/crud_barangjasa', 'crud_barangjasa');
		$this->load->model('frontend_barangjasa/crud_persediaan', 'crud');
		//$this->load->model('frontend_vendor/crud_vendor', 'crud_vendor');
		$this->_data['module_base_url'] = site_url('barang-jasa/persediaan');
		$this->_data['datetime'] = date('Y-m-d H:i:s');

		$this->_data['data_source']['barangjasa'] = $this->crud_barangjasa->get_option();
	}

	function index() {
		$this->_data['result'] = $this->crud->join('barang_jasa', 'brjs_id = psdbrg_brjs_id', 'left')->where('psdbrg_void = 0')->order_by('psdbrg_id', 'asc')->get_all();

		$this->template->set('title', 'Persediaan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'persediaan', $this->_data);
	}

	function add() {
		if(!empty($_POST)) {
			if($this->do_add()) {
				redirect($this->_data['module_base_url']);
				exit();
			}
		}

		$this->template->set('title', 'Tambah Persediaan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'persediaan_add', $this->_data);
	}

	private function do_add() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('psdbrg_brjs_id', 'Barang/Jasa', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');		
		$this->form_validation->set_rules('psdbrg_debit', 'Debit', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('psdbrg_kredit', 'Kredit', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('psdbrg_tanggal', 'Tanggal', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('psdbrg_user', 'User', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');		

		if($this->form_validation->run()) {
			$db_data = array(
				'psdbrg_brjs_id' => $this->input->post('psdbrg_brjs_id'),				
				'psdbrg_debit' => clear_numberformat($this->input->post('psdbrg_debit')),
				'psdbrg_kredit' => clear_numberformat($this->input->post('psdbrg_kredit')),
				'psdbrg_tanggal' => $this->input->post('psdbrg_tanggal'),
				'psdbrg_user' => $this->input->post('psdbrg_user'),
				'psdbrg_void' => 0,
				'psdbrg_entrydate' => $this->_data['datetime'],
			);			
			$this->crud->posts($db_data);

			return true;
		} else {
			$this->_data['err_msg'] = validation_errors();
			return false;
		}
	}

	function delete($id) {
		$db_data = array(
			'psdbrg_void' => 1,
			'psdbrg_changedate' => $this->_data['datetime'],
		);
		$this->crud->where('psdbrg_id = "'.$id.'"')->puts($db_data);

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
			$this->_data['detail'] = $this->crud->where('psdbrg_id = "'.$id.'"')->get_row();
		}

		$this->template->set('title', 'Edit Persediaan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'persediaan_edit', $this->_data);
	}

	private function do_edit() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('psdbrg_id', 'ID', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('psdbrg_brjs_id', 'Barang/Jasa', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');		
		$this->form_validation->set_rules('psdbrg_debit', 'Debit', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('psdbrg_kredit', 'Kredit', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('psdbrg_tanggal', 'Tanggal', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('psdbrg_user', 'User', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');		

		if($this->form_validation->run()) {
			$db_data = array(
				'psdbrg_id' => $this->input->post('psdbrg_id'),
				'psdbrg_brjs_id' => $this->input->post('psdbrg_brjs_id'),				
				'psdbrg_debit' => clear_numberformat($this->input->post('psdbrg_debit')),
				'psdbrg_kredit' => clear_numberformat($this->input->post('psdbrg_kredit')),								
				'psdbrg_tanggal' => $this->input->post('psdbrg_tanggal'),
				'psdbrg_user' => $this->input->post('psdbrg_user'),
				'psdbrg_changedate' => $this->_data['datetime'],
			);
			$this->crud->where('psdbrg_id = "'.$this->input->post('psdbrg_id').'"')->puts($db_data);

			return true;
		} else {
			$this->_data['err_msg'] = validation_errors();
			return false;
		}
	}

	/*function data_barang($id) {
        $result = $this->db->where('brjs_id = "'.$id.'"')->get('barang_jasa')->row_array();
        $result['ppnwd_hargasatuan_text'] = number_format($result['brjs_harga_satuan'], 0, ',', '.');
        echo json_encode($result);
    }*/
	
	
	//function persediaan(){
	
	//echo "test";
	
	//}
	
	
}

?>