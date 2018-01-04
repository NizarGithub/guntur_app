<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Slipgaji extends MY_Frontend {

	function __construct(){
		parent::__construct();

		if(!$this->session->userdata('userid')) {
			redirect('login');
			exit();
		}

		$this->load->model('frontend_slipgaji/crud_slipgaji', 'crud');
		$this->_data['module_base_url'] = site_url('slipgaji');
		$this->_data['module_base_url_gaji'] = site_url('slipgaji/gaji');
		$this->_data['datetime'] = date('Y-m-d H:i:s');
	}

	function index() {
		$this->_data['result'] = $this->crud->where('slipgaji_void = 0')->order_by('slipgaji_id', 'asc')->get_all();

		$this->template->set('title', 'slipgaji | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
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

		$this->template->set('title', 'Tambah slipgaji | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'add', $this->_data);
	}

	private function do_add() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('slipgaji_nama', 'Nama', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('slipgaji_nik', 'NIK', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('slipgaji_alamat', 'Alamat', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('slipgaji_tempat_lahir', 'Tempat Lahir', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('slipgaji_tanggal_lahir', 'Tanggal Lahir', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('slipgaji_telpon', 'Telepon', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('slipgaji_posisi_id', 'Posisi', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('slipgaji_jabatan_id', 'Jabatan', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('slipgaji_tipe_id', 'Tipe', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('slipgaji_status_nikah_id', 'Status Nikah', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('slipgaji_status_kontrak_id', 'Status Kontrak', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');

		if($this->form_validation->run()) {
			$db_data = array(
				'slipgaji_nik' => $this->input->post('slipgaji_nik'),
				'slipgaji_nama' => $this->input->post('slipgaji_nama'),
				'slipgaji_alamat' => $this->input->post('slipgaji_alamat'),
				'slipgaji_tempat_lahir' => $this->input->post('slipgaji_tempat_lahir'),
				'slipgaji_tanggal_lahir' => $this->input->post('slipgaji_tanggal_lahir'),
				'slipgaji_telpon' => $this->input->post('slipgaji_telpon'),
				'slipgaji_posisi_id' => $this->input->post('slipgaji_posisi_id'),
				'slipgaji_jabatan_id' => $this->input->post('slipgaji_jabatan_id'),
				'slipgaji_tipe_id' => $this->input->post('slipgaji_tipe_id'),
				'slipgaji_status_nikah_id' => $this->input->post('slipgaji_status_nikah_id'),
				'slipgaji_status_kontrak_id' => $this->input->post('slipgaji_status_kontrak_id'),
				'slipgaji_entrydate' => $this->_data['datetime'],
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
			'slipgaji_void' => 1,
			'slipgaji_changedate' => $this->_data['datetime'],
		);
		$this->crud->where('slipgaji_id = "'.$id.'"')->puts($db_data);

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
			$this->_data['detail'] = $this->crud->where('slipgaji_id = "'.$id.'"')->get_row();
		}

		$this->template->set('title', 'Edit slipgaji | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'edit', $this->_data);
	}

	private function do_edit() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('slipgaji_id', 'ID', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('slipgaji_nama', 'Nama', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('slipgaji_nik', 'NIK', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('slipgaji_alamat', 'Alamat', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('slipgaji_tempat_lahir', 'Tempat Lahir', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('slipgaji_tanggal_lahir', 'Tanggal Lahir', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('slipgaji_telpon', 'Telepon', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('slipgaji_posisi_id', 'Posisi', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('slipgaji_jabatan_id', 'Jabatan', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('slipgaji_tipe_id', 'Tipe', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('slipgaji_status_nikah_id', 'Status Nikah', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('slipgaji_status_kontrak_id', 'Status Kontrak', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');

		if($this->form_validation->run()) {
			$db_data = array(
				'slipgaji_nik' => $this->input->post('slipgaji_nik'),
				'slipgaji_nama' => $this->input->post('slipgaji_nama'),
				'slipgaji_alamat' => $this->input->post('slipgaji_alamat'),
				'slipgaji_tempat_lahir' => $this->input->post('slipgaji_tempat_lahir'),
				'slipgaji_tanggal_lahir' => $this->input->post('slipgaji_tanggal_lahir'),
				'slipgaji_telpon' => $this->input->post('slipgaji_telpon'),
				'slipgaji_posisi_id' => $this->input->post('slipgaji_posisi_id'),
				'slipgaji_jabatan_id' => $this->input->post('slipgaji_jabatan_id'),
				'slipgaji_tipe_id' => $this->input->post('slipgaji_tipe_id'),
				'slipgaji_status_nikah_id' => $this->input->post('slipgaji_status_nikah_id'),
				'slipgaji_status_kontrak_id' => $this->input->post('slipgaji_status_kontrak_id'),
				'slipgaji_changedate' => $this->_data['datetime'],
			);
			$this->crud->where('slipgaji_id = "'.$this->input->post('slipgaji_id').'"')->puts($db_data);

			return true;
		} else {
			$this->_data['err_msg'] = validation_errors();
			return false;
		}
	}

	function absen() {
		$this->template->set('title', 'Absen slipgaji | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'absen', $this->_data);
	}

	function add_absen() {
		$this->template->set('title', 'Tambah Absen slipgaji | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'absen_add', $this->_data);
	}

	function edit_absen($id) {
		$this->template->set('title', 'Edit Absen slipgaji | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'absen_edit', $this->_data);
	}

	function gaji() {
		$this->_data['result'] = $this->crud->join('slipgaji', 'slipgaji_slipgaji_id=slipgaji_id')->where('slipgaji_void = 0')->order_by('slipgaji_id', 'asc')->get_all_gaji();

		$this->template->set('title', 'Gaji slipgaji | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'gaji', $this->_data);
	}

	function add_gaji() {
		if(!empty($_POST)) {
			if($this->do_add_gaji()) {
				redirect($this->_data['module_base_url_gaji']);
				exit();
			}
		}

		$this->_data['option_slipgaji'] = $this->crud->get_option();

		$this->template->set('title', 'Tambah Gaji slipgaji | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'gaji_add', $this->_data);
	}

	private function do_add_gaji() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('slipgaji_slipgaji_id', 'slipgaji', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('slipgaji_gaji_pokok', 'Gaji Pokok', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('slipgaji_tunjangan', 'Tunjangan', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('slipgaji_lembur', 'Lembur', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('slipgaji_uang_makan', 'Uang Makan', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('slipgaji_transport', 'Transport', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('slipgaji_bonus', 'Bonus', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('slipgaji_pinjaman', 'Pinjaman', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('slipgaji_lain_lain', 'Lain-lain', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');

		if($this->form_validation->run()) {
			$db_data = array(
				'slipgaji_slipgaji_id' => $this->input->post('slipgaji_slipgaji_id'),
				'slipgaji_gaji_pokok' => $this->input->post('slipgaji_gaji_pokok'),
				'slipgaji_tunjangan' => $this->input->post('slipgaji_tunjangan'),
				'slipgaji_lembur' => $this->input->post('slipgaji_lembur'),
				'slipgaji_uang_makan' => $this->input->post('slipgaji_uang_makan'),
				'slipgaji_transport' => $this->input->post('slipgaji_transport'),
				'slipgaji_bonus' => $this->input->post('slipgaji_bonus'),
				'slipgaji_pinjaman' => $this->input->post('slipgaji_pinjaman'),
				'slipgaji_lain_lain' => $this->input->post('slipgaji_lain_lain'),
				'slipgaji_total' => ($this->input->post('slipgaji_gaji_pokok') + $this->input->post('slipgaji_tunjangan') + $this->input->post('slipgaji_lembur') + $this->input->post('slipgaji_uang_makan') + $this->input->post('slipgaji_transport') + $this->input->post('slipgaji_bonus') + $this->input->post('slipgaji_pinjaman') + $this->input->post('slipgaji_lain_lain')),
			);
			$this->crud->posts_gaji($db_data);

			return true;
		} else {
			$this->_data['err_msg'] = validation_errors();
			return false;
		}
	}

	function delete_gaji($id) {
		$db_data = array(
			'slipgaji_void' => 1,
			'slipgaji_changedate' => $this->_data['datetime'],
		);
		$this->crud->where('slipgaji_id = "'.$id.'"')->puts_gaji($db_data);

		redirect($this->_data['module_base_url_gaji']);
	}

	function edit_gaji($id) {
		if(!empty($_POST)) {
			if($this->do_edit_gaji()) {
				redirect($this->_data['module_base_url_gaji']);
				exit();
			}
			$this->_data['detail'] = $_POST;
		} else {
			$this->_data['detail'] = $this->crud->where('slipgaji_id = "'.$id.'"')->get_row_gaji();
		}

		$this->_data['option_slipgaji'] = $this->crud->get_option();

		$this->template->set('title', 'Edit Gaji slipgaji | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'gaji_edit', $this->_data);
	}

	private function do_edit_gaji() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('slipgaji_id', 'ID', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('slipgaji_slipgaji_id', 'slipgaji', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|required|xss_clean');
		$this->form_validation->set_rules('slipgaji_gaji_pokok', 'Gaji Pokok', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('slipgaji_tunjangan', 'Tunjangan', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('slipgaji_lembur', 'Lembur', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('slipgaji_uang_makan', 'Uang Makan', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('slipgaji_transport', 'Transport', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('slipgaji_bonus', 'Bonus', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('slipgaji_pinjaman', 'Pinjaman', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');
		$this->form_validation->set_rules('slipgaji_lain_lain', 'Lain-lain', 'trim|htmlspecialchars|encode_php_tags|prep_for_form|xss_clean');

		if($this->form_validation->run()) {
			$db_data = array(
				'slipgaji_kary_id' => $this->input->post('slipgaji_kary_id'),
				'slipgaji_gaji_pokok' => $this->input->post('slipgaji_gaji_pokok'),
				'slipgaji_tunjangan' => $this->input->post('slipgaji_tunjangan'),
				'slipgaji_lembur' => $this->input->post('slipgaji_lembur'),
				'slipgaji_uang_makan' => $this->input->post('slipgaji_uang_makan'),
				'slipgaji_transport' => $this->input->post('slipgaji_transport'),
				'slipgaji_bonus' => $this->input->post('slipgaji_bonus'),
				'slipgaji_pinjaman' => $this->input->post('slipgaji_pinjaman'),
				'slipgaji_lain_lain' => $this->input->post('slipgaji_lain_lain'),
				'slipgaji_total' => ($this->input->post('slipgaji_gaji_pokok') + $this->input->post('slipgaji_tunjangan') + $this->input->post('slipgaji_lembur') + $this->input->post('slipgaji_uang_makan') + $this->input->post('slipgaji_transport') + $this->input->post('slipgaji_bonus') + $this->input->post('slipgaji_pinjaman') + $this->input->post('slipgaji_lain_lain')),
			);
			$this->crud->where('slipgaji_id = "'.$this->input->post('slipgaji_id').'"')->puts_gaji($db_data);

			return true;
		} else {
			$this->_data['err_msg'] = validation_errors();
			return false;
		}
	}

	function pph_21() {
		$this->template->set('title', 'PPh 21 slipgaji | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'pph_21', $this->_data);
	}

	function add_pph_21() {
		$this->template->set('title', 'Tambah PPh 21 slipgaji | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'pph_21_add', $this->_data);
	}

	function edit_pph_21($id) {
		$this->template->set('title', 'Edit PPh 21 slipgaji | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'pph_21_edit', $this->_data);
	}
}

?>