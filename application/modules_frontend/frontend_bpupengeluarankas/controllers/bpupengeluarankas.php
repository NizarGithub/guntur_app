<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bpupengeluarankas extends MY_Frontend {

	function __construct(){
		parent::__construct();

		if(!$this->session->userdata('userid')) {
			redirect('login');
			exit();
		}

		$this->load->model('frontend_bpupengeluarankas/crud_bpupengeluarankas', 'crud');
		$this->load->model('frontend_daftarakun/crud_daftarakun', 'crud_daftarakun');
		$this->_data['module_base_url'] = site_url('bpu-pengeluarankas');
		$this->_data['datetime'] = date('Y-m-d H:i:s');
	}

	function index() {
		$this->_data['result'] = $this->crud->where('bpupglrnkas_void = 0')->order_by('bpupglrnkas_id', 'asc')->get_all();

		$this->template->set('title', 'BPU - Pengeluaran Kas| Aplikasi Keuangan - PT. Putra Bahari Mandiri');
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

		$this->form_validation->set_rules('bpupglrnkas_nobukti', 'No. Bukti', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('bpupglrnkas_noakun', 'No. Akun', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('bpupglrnkas_tanggal', 'Tanggal', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('bpupglrnkas_jumlah', 'Jumlah', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('bpupglrnkas_untuk', 'Untuk', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('bpupglrnkas_penerima', 'Penerima', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');

		if($this->form_validation->run()) {
			$db_data = array(
				'bpupglrnkas_nobukti' => $this->input->post('bpupglrnkas_nobukti'),
				'bpupglrnkas_noakun' => $this->input->post('bpupglrnkas_noakun'),
				'bpupglrnkas_tanggal' => $this->input->post('bpupglrnkas_tanggal'),
				'bpupglrnkas_jumlah' => clear_numberformat($this->input->post('bpupglrnkas_jumlah')),
				'bpupglrnkas_untuk' => $this->input->post('bpupglrnkas_untuk'),
				'bpupglrnkas_penerima' => $this->input->post('bpupglrnkas_penerima'),
				'bpupglrnkas_entrydate' => $this->_data['datetime'],
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
			'bpupglrnkas_void' => 1,
			'bpupglrnkas_changedate' => $this->_data['datetime'],
		);
		$this->crud->where('bpupglrnkas_id = "'.$id.'"')->puts($db_data);

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
			$this->_data['detail'] = $this->crud->where('bpupglrnkas_id = "'.$id.'"')->get_row();
		}

		//print_r($this->_data['detail']);

		$this->_data['optDaftarAkun'] = $this->crud_daftarakun->get_option_child();

		$this->template->set('title', 'Edit BPU - BPU Penerimaan Kas | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'edit', $this->_data);
	}

	private function do_edit() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('bpupglrnkas_nobukti', 'No. Bukti', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('bpupglrnkas_noakun', 'No. Akun', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('bpupglrnkas_tanggal', 'Tanggal', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('bpupglrnkas_jumlah', 'Jumlah', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('bpupglrnkas_untuk', 'Untuk', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('bpupglrnkas_penerima', 'Penerima', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');

		if($this->form_validation->run()) {
			$db_data = array(
				'bpupglrnkas_nobukti' => $this->input->post('bpupglrnkas_nobukti'),
				'bpupglrnkas_noakun' => $this->input->post('bpupglrnkas_noakun'),
				'bpupglrnkas_tanggal' => $this->input->post('bpupglrnkas_tanggal'),
				'bpupglrnkas_jumlah' => clear_numberformat($this->input->post('bpupglrnkas_jumlah')),
				'bpupglrnkas_untuk' => $this->input->post('bpupglrnkas_untuk'),
				'bpupglrnkas_penerima' => $this->input->post('bpupglrnkas_penerima'),
				'bpupglrnkas_entrydate' => $this->_data['datetime'],
			);
			$this->crud->where('bpupglrnkas_id = "'.$this->input->post('bpupglrnkas_id').'"')->puts($db_data);

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
    	$this->_data['detail'] = $this->crud->join('akun', 'akun_id=bpupglrnkas_noakun')->where('bpupglrnkas_id = "'.$id.'"')->get_row();
    	$this->load->view('print_bpupengeluarankas',  $this->_data);
    }
}

?>