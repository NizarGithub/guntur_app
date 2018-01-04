<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bpupenerimaankas extends MY_Frontend {

	function __construct(){
		parent::__construct();

		if(!$this->session->userdata('userid')) {
			redirect('login');
			exit();
		}

		$this->load->model('frontend_bpupenerimaankas/crud_bpupenerimaankas', 'crud');
		$this->load->model('frontend_daftarakun/crud_daftarakun', 'crud_daftarakun');
		$this->_data['module_base_url'] = site_url('bpu-penerimaankas');
		$this->_data['datetime'] = date('Y-m-d H:i:s');
	}

	function index() {
		$this->_data['result'] = $this->crud->where('bpupnrmkas_void = 0')->order_by('bpupnrmkas_id', 'asc')->get_all();

		$this->template->set('title', 'BPU - Penerimaan Kas| Aplikasi Keuangan - PT. Putra Bahari Mandiri');
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

		$this->_data['optDaftarAkun'] = $this->crud_daftarakun->get_option_child();

		$this->template->set('title', 'Tambah BPU - Penerimaan Kas | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'add', $this->_data);
	}

	private function do_add() {
		//echo "string";exit();
		$this->load->library('form_validation');

		$this->form_validation->set_rules('bpupnrmkas_nobukti', 'No. Bukti', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('bpupnrmkas_noakun', 'No. Akun', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('bpupnrmkas_tanggal', 'Tanggal', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('bpupnrmkas_dari', 'Dari', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('bpupnrmkas_jumlah', 'Jumlah', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('bpupnrmkas_untuk', 'Untuk', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('bpupnrmkas_penerima', 'Penerima', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');

		if($this->form_validation->run()) {
			$db_data = array(
				'bpupnrmkas_nobukti' => $this->input->post('bpupnrmkas_nobukti'),
				'bpupnrmkas_noakun' => $this->input->post('bpupnrmkas_noakun'),
				'bpupnrmkas_tanggal' => $this->input->post('bpupnrmkas_tanggal'),
				'bpupnrmkas_dari' => $this->input->post('bpupnrmkas_dari'),
				'bpupnrmkas_jumlah' => clear_numberformat($this->input->post('bpupnrmkas_jumlah')),
				'bpupnrmkas_untuk' => $this->input->post('bpupnrmkas_untuk'),
				'bpupnrmkas_penerima' => $this->input->post('bpupnrmkas_penerima'),
				'bpupnrmkas_entrydate' => $this->_data['datetime'],
			);
			//print_r($db_data);exit();
			$this->crud->posts($db_data);

			return true;
		} else {
			$this->_data['err_msg'] = validation_errors();
			echo $this->_data['err_msg'];
			return false;
		}
	}

	function delete($id) {
		$db_data = array(
			'bpupnrmkas_void' => 1,
			'bpupnrmkas_changedate' => $this->_data['datetime'],
		);
		$this->crud->where('bpupnrmkas_id = "'.$id.'"')->puts($db_data);

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
			$this->_data['detail'] = $this->crud->where('bpupnrmkas_id = "'.$id.'"')->get_row();

		}

		//print_r($this->_data['detail']);

		$this->_data['optDaftarAkun'] = $this->crud_daftarakun->get_option_child();

		$this->template->set('title', 'Edit BPU - BPU Penerimaan Kas | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'edit', $this->_data);
	}

	private function do_edit() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('bpupnrmkas_nobukti', 'No. Bukti', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('bpupnrmkas_noakun', 'No. Akun', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('bpupnrmkas_tanggal', 'Tanggal', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('bpupnrmkas_dari', 'Dari', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('bpupnrmkas_jumlah', 'Jumlah', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('bpupnrmkas_untuk', 'Untuk', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('bpupnrmkas_penerima', 'Penerima', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');

		if($this->form_validation->run()) {
			$db_data = array(
				'bpupnrmkas_nobukti' => $this->input->post('bpupnrmkas_nobukti'),
				'bpupnrmkas_noakun' => $this->input->post('bpupnrmkas_noakun'),
				'bpupnrmkas_tanggal' => $this->input->post('bpupnrmkas_tanggal'),
				'bpupnrmkas_dari' => $this->input->post('bpupnrmkas_dari'),
				'bpupnrmkas_jumlah' => clear_numberformat($this->input->post('bpupnrmkas_jumlah')),
				'bpupnrmkas_untuk' => $this->input->post('bpupnrmkas_untuk'),
				'bpupnrmkas_penerima' => $this->input->post('bpupnrmkas_penerima'),
				'bpupnrmkas_entrydate' => $this->_data['datetime'],
			);
			$this->crud->where('bpupnrmkas_id = "'.$this->input->post('bpupnrmkas_id').'"')->puts($db_data);

			return true;
		} else {
			$this->_data['err_msg'] = validation_errors();
			return false;
		}
	}

	function terbilang($id) {
        $result['terbilang'] = !empty($id) ? terbilang($id) : '-';
        echo json_encode($result);
    }

    function pdf($id) {
    	$this->_data['detail'] = $this->crud->join('akun', 'akun_id=bpupnrmkas_noakun')->where('bpupnrmkas_id = "'.$id.'"')->get_row();
    	// echo $this->db->last_query (); exit ();
    	$this->load->view('print_bpupenerimaankas',  $this->_data);
    }
}

?>