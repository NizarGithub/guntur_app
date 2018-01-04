<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Laporan extends MY_Frontend {

	function __construct(){
		parent::__construct();

		if(!$this->session->userdata('userid')) {
			redirect('login');
			exit();
		}

		$this->load->model('frontend_pembelian/crud_permintaan_detail');
		$this->load->model('frontend_laporan/crud_laporan', 'crud_laporan');
		$this->load->model('frontend_bpupenerimaankas/crud_bpupenerimaankas', 'crud_bpupenerimaankas');
		$this->load->model('frontend_bpupengeluarankas/crud_bpupengeluarankas', 'crud_bpupengeluarankas');
	}

	function index() {
		$this->template->set('title', 'Laporan | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		// ambil data dinamis untuk ditampilkan di views
		$this->_data['data_source'] = $this->crud_laporan->where('akun_void = 0')->order_by('akun_nama')->get_option();
		
		$this->template->load('template_frontend/main', 'content', $this->_data);

	}

	function keuangan_neraca() {
		$this->_data['periode_bulan_1'] = $this->input->get('periode_bulan_1');
		$this->_data['periode_bulan_2'] = $this->input->get('periode_bulan_2');
		$this->_data['periode_tahun'] = $this->input->get('periode_tahun');
		$this->template->set('title', 'Laporan Neraca | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'content_keuangan_neraca', $this->_data);
	}
 function Laporantes (){
 }
 
 
	function penjualan_client() {
		$this->_data['periode_bulan_1'] = $this->input->get('periode_bulan_1');
		$this->_data['periode_bulan_2'] = $this->input->get('periode_bulan_2');
		$this->_data['periode_tahun'] = $this->input->get('periode_tahun');

		$bulan_1 = $this->_data['periode_bulan_1'] < 10 ? ('0'.$this->_data['periode_bulan_1']) : $this->_data['periode_bulan_1'];
		$bulan_2 = $this->_data['periode_bulan_2'] < 10 ? ('0'.$this->_data['periode_bulan_2']) : $this->_data['periode_bulan_2'];

		$periode_1 = $this->_data['periode_tahun'] . '-' . $bulan_1 . '-' . '01';
		$periode_2 = $this->_data['periode_tahun'] . '-' . $bulan_2 . '-' . '31';

		$this->_data['result'] = $this->db->select('pjinv_id, clnt_nama, ppnw_nilai_faktur', false)->join('penjualan_invoice', 'pjinv_ppnw_id = ppnw_id')->join('client', 'ppnw_clnt_id = clnt_id')->where('DATE_FORMAT(pjinv_tanggal, "%Y-%m-%d") BETWEEN "'.$periode_1.'" AND "'.$periode_2.'"')->get('penjualan_penawaran')->result_array();

		$this->template->set('title', 'Laporan Neraca | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'content_penjualan_client', $this->_data);
	}

	function penjualan_barang() {
		$this->_data['periode_bulan_1'] = $this->input->get('periode_bulan_1');
		$this->_data['periode_bulan_2'] = $this->input->get('periode_bulan_2');
		$this->_data['periode_tahun'] = $this->input->get('periode_tahun');

		$bulan_1 = $this->_data['periode_bulan_1'] < 10 ? ('0'.$this->_data['periode_bulan_1']) : $this->_data['periode_bulan_1'];
		$bulan_2 = $this->_data['periode_bulan_2'] < 10 ? ('0'.$this->_data['periode_bulan_2']) : $this->_data['periode_bulan_2'];

		$periode_1 = $this->_data['periode_tahun'] . '-' . $bulan_1 . '-' . '01';
		$periode_2 = $this->_data['periode_tahun'] . '-' . $bulan_2 . '-' . '31';

		$this->_data['result'] = $this->db->select('pjinv_id, ppnw_no_penawaran, ppnwd_volume, ppnwd_satuan, ppnwd_jenisbarang, ppnwd_hargasatuan', false)->join('penjualan_invoice', 'pjinv_ppnw_id = ppnw_id')->join('penjualan_penawaran_detail', 'pjinv_ppnw_id = ppnw_id')->where('DATE_FORMAT(pjinv_tanggal, "%Y-%m-%d") BETWEEN "'.$periode_1.'" AND "'.$periode_2.'"')->get('penjualan_penawaran')->result_array();

		$this->template->set('title', 'Laporan Neraca | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'content_penjualan_barang', $this->_data);
	}

	function penjualan_grafik_barang() {
		$this->_data['periode_bulan_1'] = $this->input->get('periode_bulan_1');
		$this->_data['periode_bulan_2'] = $this->input->get('periode_bulan_2');
		$this->_data['periode_tahun'] = $this->input->get('periode_tahun');

		$bulan_1 = $this->_data['periode_bulan_1'] < 10 ? ('0'.$this->_data['periode_bulan_1']) : $this->_data['periode_bulan_1'];
		$bulan_2 = $this->_data['periode_bulan_2'] < 10 ? ('0'.$this->_data['periode_bulan_2']) : $this->_data['periode_bulan_2'];

		$periode_1 = $this->_data['periode_tahun'] . '-' . $bulan_1 . '-' . '01';
		$periode_2 = $this->_data['periode_tahun'] . '-' . $bulan_2 . '-' . '31';

		$result = $this->db->select('ppnwd_jenisbarang_id, pjinv_id, ppnw_no_penawaran, ppnwd_volume, ppnwd_satuan, ppnwd_jenisbarang, ppnwd_hargasatuan', false)->join('penjualan_invoice', 'pjinv_ppnw_id = ppnw_id')->join('penjualan_penawaran_detail', 'pjinv_ppnw_id = ppnw_id')->where('DATE_FORMAT(pjinv_tanggal, "%Y-%m-%d") BETWEEN "'.$periode_1.'" AND "'.$periode_2.'"')->get('penjualan_penawaran')->result_array();

		$this->_data['result'] = array();
		foreach ($result as $key => $value) {
			$this->_data['result']['label'][$value['ppnwd_jenisbarang_id']] = '"'.$value['ppnwd_jenisbarang'].'"';
			if(empty($this->_data['result']['total'][$value['ppnwd_jenisbarang_id']])) $this->_data['result']['total'][$value['ppnwd_jenisbarang_id']] = 0;
			
			$this->_data['result']['total'][$value['ppnwd_jenisbarang_id']] += 1;
		}

		if(!empty($this->_data['result']['total'])) {
			foreach ($this->_data['result']['total'] as $key => $value) {
				$this->_data['result']['total'][$key] = '{y: '.$value.', legendText: '.$this->_data['result']['label'][$key].', indexLabel: '.$this->_data['result']['label'][$key].'}';
			}
		}

		$this->template->set('title', 'Laporan Neraca | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'content_penjualan_grafik_barang', $this->_data);
	}

	function penjualan_grafik_client() {
		$this->_data['periode_bulan_1'] = $this->input->get('periode_bulan_1');
		$this->_data['periode_bulan_2'] = $this->input->get('periode_bulan_2');
		$this->_data['periode_tahun'] = $this->input->get('periode_tahun');

		$bulan_1 = $this->_data['periode_bulan_1'] < 10 ? ('0'.$this->_data['periode_bulan_1']) : $this->_data['periode_bulan_1'];
		$bulan_2 = $this->_data['periode_bulan_2'] < 10 ? ('0'.$this->_data['periode_bulan_2']) : $this->_data['periode_bulan_2'];

		$periode_1 = $this->_data['periode_tahun'] . '-' . $bulan_1 . '-' . '01';
		$periode_2 = $this->_data['periode_tahun'] . '-' . $bulan_2 . '-' . '31';

		$result = $this->db->select('clnt_id, clnt_nama, ppnw_nilai_faktur', false)->join('penjualan_invoice', 'pjinv_ppnw_id = ppnw_id')->join('client', 'ppnw_clnt_id = clnt_id')->where('DATE_FORMAT(pjinv_tanggal, "%Y-%m-%d") BETWEEN "'.$periode_1.'" AND "'.$periode_2.'"')->get('penjualan_penawaran')->result_array();

		$this->_data['result'] = array();
		foreach ($result as $key => $value) {
			$this->_data['result']['label'][$value['clnt_id']] = '"'.$value['clnt_nama'].'"';
			if(empty($this->_data['result']['total'][$value['clnt_id']])) $this->_data['result']['total'][$value['clnt_id']] = 0;
			
			$this->_data['result']['total'][$value['clnt_id']] += $value['ppnw_nilai_faktur'];
		}

		if(!empty($this->_data['result']['total'])) {
			foreach ($this->_data['result']['total'] as $key => $value) {
				$this->_data['result']['total'][$key] = '{y: '.$value.', label: '.$this->_data['result']['label'][$key].'}';
			}
		}

		$this->template->set('title', 'Laporan Neraca | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'content_penjualan_grafik_client', $this->_data);
	}

	function pembelian_barang() {
		$this->_data['periode_bulan_1'] = $this->input->get('periode_bulan_1');
		$this->_data['periode_bulan_2'] = $this->input->get('periode_bulan_2');
		$this->_data['periode_tahun'] = $this->input->get('periode_tahun');

		$bulan_1 = $this->_data['periode_bulan_1'] < 10 ? ('0'.$this->_data['periode_bulan_1']) : $this->_data['periode_bulan_1'];
		$bulan_2 = $this->_data['periode_bulan_2'] < 10 ? ('0'.$this->_data['periode_bulan_2']) : $this->_data['periode_bulan_2'];

		$periode_1 = $this->_data['periode_tahun'] . '-' . $bulan_1 . '-' . '01';
		$periode_2 = $this->_data['periode_tahun'] . '-' . $bulan_2 . '-' . '31';

		$this->_data['result'] = $this->db->select('pbptn_id, pbptn_no, brjs_volume, pbptnd_jumlah, brjs_nama, brjs_harga_satuan', false)->join('pembelian_invoice', 'pbinv_pbptn_id=pbptn_id')->join('pembelian_permintaan_detail', 'pbptnd_nopermintaan = pbptn_no')->join('barang_jasa', 'pbptnd_jenisbarang = brjs_id')->where('DATE_FORMAT(pbinv_tanggal, "%Y-%m-%d") BETWEEN "'.$periode_1.'" AND "'.$periode_2.'"')->get('pembelian_permintaan')->result_array();

		$this->template->set('title', 'Laporan Neraca | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'content_pembelian_barang', $this->_data);
	}

	function pembelian_vendor() {
		$this->_data['periode_bulan_1'] = $this->input->get('periode_bulan_1');
		$this->_data['periode_bulan_2'] = $this->input->get('periode_bulan_2');
		$this->_data['periode_tahun'] = $this->input->get('periode_tahun');

		$bulan_1 = $this->_data['periode_bulan_1'] < 10 ? ('0'.$this->_data['periode_bulan_1']) : $this->_data['periode_bulan_1'];
		$bulan_2 = $this->_data['periode_bulan_2'] < 10 ? ('0'.$this->_data['periode_bulan_2']) : $this->_data['periode_bulan_2'];

		$periode_1 = $this->_data['periode_tahun'] . '-' . $bulan_1 . '-' . '01';
		$periode_2 = $this->_data['periode_tahun'] . '-' . $bulan_2 . '-' . '31';

		$this->_data['result'] = $this->db->select('pbptn_id, vndr_nama, pbptn_totaltagihan', false)->join('pembelian_invoice', 'pbinv_pbptn_id=pbptn_id')->join('vendor', 'pbptn_vndr_id=vndr_id')->where('DATE_FORMAT(pbinv_tanggal, "%Y-%m-%d") BETWEEN "'.$periode_1.'" AND "'.$periode_2.'"')->get('pembelian_permintaan')->result_array();

		foreach ($this->_data['result'] as $key => $value) {
			$tmp = $this->total_permintaan($value['pbptn_id']);
			$this->_data['result'][$key]['pbptn_totaltagihan'] = (!empty($tmp[$value['pbptn_id']]) ? $tmp[$value['pbptn_id']] : 0);
		}

		$this->template->set('title', 'Laporan Neraca | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'content_pembelian_vendor', $this->_data);
	}

	function pembelian_grafik_barang() {
		$this->_data['periode_bulan_1'] = $this->input->get('periode_bulan_1');
		$this->_data['periode_bulan_2'] = $this->input->get('periode_bulan_2');
		$this->_data['periode_tahun'] = $this->input->get('periode_tahun');

		$bulan_1 = $this->_data['periode_bulan_1'] < 10 ? ('0'.$this->_data['periode_bulan_1']) : $this->_data['periode_bulan_1'];
		$bulan_2 = $this->_data['periode_bulan_2'] < 10 ? ('0'.$this->_data['periode_bulan_2']) : $this->_data['periode_bulan_2'];

		$periode_1 = $this->_data['periode_tahun'] . '-' . $bulan_1 . '-' . '01';
		$periode_2 = $this->_data['periode_tahun'] . '-' . $bulan_2 . '-' . '31';

		$result = $this->db->select('brjs_id, pbptn_id, pbptn_no, brjs_volume, pbptnd_jumlah, brjs_nama, brjs_harga_satuan', false)->join('pembelian_invoice', 'pbinv_pbptn_id=pbptn_id')->join('pembelian_permintaan_detail', 'pbptnd_nopermintaan = pbptn_no')->join('barang_jasa', 'pbptnd_jenisbarang = brjs_id')->where('DATE_FORMAT(pbinv_tanggal, "%Y-%m-%d") BETWEEN "'.$periode_1.'" AND "'.$periode_2.'"')->get('pembelian_permintaan')->result_array();

		$this->_data['result'] = array();
		foreach ($result as $key => $value) {
			$this->_data['result']['label'][$value['brjs_id']] = '"'.$value['brjs_nama'].'"';
			if(empty($this->_data['result']['total'][$value['brjs_id']])) $this->_data['result']['total'][$value['brjs_id']] = 0;
			
			$this->_data['result']['total'][$value['brjs_id']] += 1;
		}

		if(!empty($this->_data['result']['total'])) {
			foreach ($this->_data['result']['total'] as $key => $value) {
				$this->_data['result']['total'][$key] = '{y: '.$value.', legendText: '.$this->_data['result']['label'][$key].', indexLabel: '.$this->_data['result']['label'][$key].'}';
			}
		}

		$this->template->set('title', 'Laporan Neraca | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'content_pembelian_grafik_barang', $this->_data);
	}

	function pembelian_grafik_vendor() {
		$this->_data['periode_bulan_1'] = $this->input->get('periode_bulan_1');
		$this->_data['periode_bulan_2'] = $this->input->get('periode_bulan_2');
		$this->_data['periode_tahun'] = $this->input->get('periode_tahun');

		$bulan_1 = $this->_data['periode_bulan_1'] < 10 ? ('0'.$this->_data['periode_bulan_1']) : $this->_data['periode_bulan_1'];
		$bulan_2 = $this->_data['periode_bulan_2'] < 10 ? ('0'.$this->_data['periode_bulan_2']) : $this->_data['periode_bulan_2'];

		$periode_1 = $this->_data['periode_tahun'] . '-' . $bulan_1 . '-' . '01';
		$periode_2 = $this->_data['periode_tahun'] . '-' . $bulan_2 . '-' . '31';

		$result = $this->db->select('pbptn_id, vndr_id, vndr_nama, pbptn_totaltagihan', false)->join('pembelian_invoice', 'pbinv_pbptn_id=pbptn_id')->join('vendor', 'pbptn_vndr_id=vndr_id')->where('DATE_FORMAT(pbinv_tanggal, "%Y-%m-%d") BETWEEN "'.$periode_1.'" AND "'.$periode_2.'"')->get('pembelian_permintaan')->result_array();

		$this->_data['result'] = array();
		foreach ($result as $key => $value) {
			$tmp = $this->total_permintaan($value['pbptn_id']);

			$this->_data['result']['label'][$value['vndr_id']] = '"'.$value['vndr_nama'].'"';
			if(empty($this->_data['result']['total'][$value['vndr_id']])) $this->_data['result']['total'][$value['vndr_id']] = 0;

			$this->_data['result']['total'][$value['vndr_id']] += (!empty($tmp[$value['pbptn_id']]) ? $tmp[$value['pbptn_id']] : 0);
		}

		if(!empty($this->_data['result']['total'])) {
			foreach ($this->_data['result']['total'] as $key => $value) {
				$this->_data['result']['total'][$key] = '{y: '.$value.', label: '.$this->_data['result']['label'][$key].'}';
			}
		}

		$this->template->set('title', 'Laporan Neraca | Aplikasi Keuangan - PT. Putra Bahari Mandiri');
		$this->template->set('assets', $this->_data['assets']);
		$this->template->load('template_frontend/main', 'content_pembelian_grafik_vendor', $this->_data);
	}

	private function total_permintaan($id ='') {
        if(!empty($id)) {
            $details  = $this->crud_permintaan_detail->where('pbptn_id = "'.$id.'"')->join2();
        } else {
            $details  = $this->crud_permintaan_detail->join2();
        }
        
        $total = array();
        foreach ($details as $key => $value) {
            if(empty($total[$value['pbptn_id']])) $total[$value['pbptn_id']] = 0;
            $total[$value['pbptn_id']] += $value['pbptnd_jumlah'] * $value['brjs_harga_satuan'];
        }

        foreach ($total as $key => $value) {
            $total[$key] += ($value * 0.02) + ($value * 0.1);
        }

        return $total;
    }

    function keuangan_general_report(){
    	$namaAkun = $this->getNamaAkun();
    	//print_r($namaAkun); exit();
    	$res = $this->generateAllData();
    	$totalDebit = 0;
    	$totalKredit = 0;
    	$saldo = 0;
    	//print_r($res);exit();
    	//exit();		
    	ob_start();    
		$content="";
		$normalout=true;
		$content=ob_get_clean();
		$normalout=false;
		 //batas 
		  
		  
		//batas
		header( "Content-Type: application/vnd.ms-excel" );
		header( "Content-disposition: attachment; filename=bukubesar.xls" );
		
             
		
		
		//echo 'Akun' . "\t" . $namaAkun['akun_nama'] . "\n";
		//echo 'No. Account' . "\t" . $namaAkun['akun_nomor'] . "\n";
		
		echo "<table>";
		echo "<tr><td>Akun</td><td>" . $namaAkun['akun_nama'] . "</td></tr>";
		echo "<tr><td>No. Account</td><td>" . $namaAkun['akun_nomor'] . "</td></tr>";
		echo "</table>";
		
		echo "<table border='1'>";
		echo "<tr>";
		echo  "<td>Tanggal</td>";
		echo "<td>No. Bukti</td>"; 
		echo "<td>Uraian</td>"; 
		echo "<td>Debit</td>"; 
		echo "<td>Kredit</td>";
		echo "<td>Saldo</td>";
		echo "</tr>";
		if(!empty($res)) {
			foreach ($res as $key2 => $value2) {
				foreach ($value2 as $key => $value) {
					if($value['tipe'] == 'kredit') {
						$saldo += $value['jumlah'];
						
						echo "<tr>";
						echo "<td>" . $value['tanggal'] . "</td>";						
						echo "<td>" . $value['noBukti'] . "</td>";
						echo "<td>" . $value['uraian'] . "</td>";
						echo "<td>&nbsp;</td>";
						echo "<td>" . $value['jumlah'] . "</td>";						
						echo "<td>" . $saldo . "</td>";
						echo "</tr>";
						
						$totalKredit += $value['jumlah'];
					} else {
						$saldo -= $value['jumlah'];
						
						echo "<tr>";
						echo "<td>" . $value['tanggal'] .  "</td>";
						echo "<td>" . $value['noBukti'] . "</td>";
						echo "<td>" . $value['uraian'] . "</td>";
						echo "<td>" . $value['jumlah'] . "</td>";
						echo "<td>&nbsp;</td>";
						echo "<td>" . $saldo . "</td>";						
						echo "</tr>";						
						
						$totalDebit += $value['jumlah'];
					}
				}
			}
			
			echo "<tr>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td>" . $totalDebit . "</td>";
			echo "<td>" . $totalKredit . "</td>";
			echo "<td>" . $saldo . "</td>";
			echo "</tr>";
			
			//echo '' . "\t" . '' . "\t" . '' . "\t" . $totalDebit . "\t" . $totalKredit . "\t" . $saldo . "\n";
			
			
		}
		
		
		/*echo  'Tanggal' . "\t" . 'No. Bukti' . "\t" . 'Uraian' . "\t" . 'Debit' . "\t" . 'Kredit' . "\t" . 'Saldo' . "\n";
		if(!empty($res)) {
			foreach ($res as $key2 => $value2) {
				foreach ($value2 as $key => $value) {
					if($value['tipe'] == 'kredit') {
						$saldo += $value['jumlah'];
						echo $value['tanggal'] . "\t" . 
						$value['noBukti'] . "\t" . 
						$value['uraian'] . "\t" . '' . "\t" . 
						$value['jumlah'] . "\t" . 
						$saldo . "\n";
						$totalKredit += $value['jumlah'];
					} else {
						$saldo -= $value['jumlah'];
						echo $value['tanggal'] . "\t" . $value['noBukti'] . "\t" . $value['uraian'] . "\t" . $value['jumlah'] . "\t" . '' . "\t" . $saldo . "\n";
						$totalDebit += $value['jumlah'];
					}
				}
			}
			echo '' . "\t" . '' . "\t" . '' . "\t" . $totalDebit . "\t" . $totalKredit . "\t" . $saldo . "\n";
		}*/
		echo "</table>";
		
		ob_start();		$content.=ob_get_clean();
		if($normalout)
		{
		    echo($content);
		} else {
		      // Excel provided no output.
		}
    }

    private function getDataPenerimaan() {
    	$param1 = $this->input->get('periode_bulan_1');
		$param2 = $this->input->get('periode_bulan_2');
		$param3 = $this->input->get('periode_tahun');
		$param2 = $param2 < 10 ? "0$param2" : $param2;

		$date1 = "$param3-$param2-01";
		$t = date('t', strtotime($date1));
		$date2 = "$param3-$param2-$t";

		$res = $this->crud_bpupenerimaankas->where('bpupnrmkas_void = 0')->where('bpupnrmkas_noakun = ' . $param1)->where('bpupnrmkas_tanggal >= "' . $date1 . '"')->where('bpupnrmkas_tanggal <= "' . $date2 . '"')->order_by('bpupnrmkas_tanggal', 'asc')->get_all();
		//echo $this->db->last_query();
		$data = [];
		if(!empty($res)) {
			foreach ($res as $key => $value) {
				$data[$value['bpupnrmkas_tanggal']][] = [
					'noBukti' => $value['bpupnrmkas_nobukti'],
					'uraian' => $value['bpupnrmkas_untuk'],
					'tanggal' => date('d/m/Y', strtotime($value['bpupnrmkas_tanggal'])),
					'jumlah' => $value['bpupnrmkas_jumlah'],
					'tipe' => 'kredit',
				];
			}
		}
		//print_r($data);
		return $data;
    }

    private function getDataPengeluaran() {
    	$param1 = $this->input->get('periode_bulan_1');
		$param2 = $this->input->get('periode_bulan_2');
		$param3 = $this->input->get('periode_tahun');
		$param2 = $param2 < 10 ? "0$param2" : $param2;

		$date1 = "$param3-$param2-01";
		$t = date('t', strtotime($date1));
		$date2 = "$param3-$param2-$t";

		$res = $this->crud_bpupengeluarankas->where('bpupglrnkas_void = 0')->where('bpupglrnkas_noakun = ' . $param1)->where('bpupglrnkas_tanggal >= "' . $date1 . '"')->where('bpupglrnkas_tanggal <= "' . $date2 . '"')->order_by('bpupglrnkas_tanggal', 'asc')->get_all();
		//echo $this->db->last_query();
		$data = [];
		if(!empty($res)) {
			foreach ($res as $key => $value) {
				$data[$value['bpupglrnkas_tanggal']][] = [
					'noBukti' => $value['bpupglrnkas_nobukti'],
					'uraian' => $value['bpupglrnkas_untuk'],
					'tanggal' => date('d/m/Y', strtotime($value['bpupglrnkas_tanggal'])),
					'jumlah' => $value['bpupglrnkas_jumlah'],
					'tipe' => 'debit',
				];
			}
		}
		//print_r($data);
		return $data;
    }

    private function generateAllData() {
    	$param2 = $this->input->get('periode_bulan_2');
		$param3 = $this->input->get('periode_tahun');
		$param2 = $param2 < 10 ? "0$param2" : $param2;

		$date1 = "$param3-$param2-01";
		$t = date('t', strtotime($date1));
		$date2 = "$param3-$param2-$t";

		$resPenerimaan = $this->getDataPenerimaan();
    	$resPengeluaran = $this->getDataPengeluaran();

    	$data = [];
    	for ($i=1; $i <= $t; $i++) {
    		$d = $i < 10 ? "0$i" : $i; 
    		$date = "$param3-$param2-$d";
    		if(empty($resPenerimaan[$date]) AND empty($resPengeluaran[$date])) continue;
    		if(!empty($resPenerimaan[$date]) AND !empty($resPengeluaran[$date])) {
    			$data[$date] = array_merge($resPenerimaan[$date], $resPengeluaran[$date]);
    		} elseif(!empty($resPenerimaan[$date])) {
    			$data[$date] = $resPenerimaan[$date];
    		} elseif(!empty($resPengeluaran[$date])) {
    			$data[$date] = $resPengeluaran[$date];
    		}
    	}

    	//print_r($data);
    	return $data;
    }

    private function getDataCashFlowPenerimaan() {
    	$param1 = $this->input->get('periode_bulan_1');
		$param2 = $this->input->get('periode_bulan_2');
		$param3 = $this->input->get('periode_tahun');
		$param2 = $param2 < 10 ? "0$param2" : $param2;

		$date1 = "$param3-$param2-01";
		$t = date('t', strtotime($date1));
		$date2 = "$param3-$param2-$t";

		$res = $this->db->join('akun', 'akun_id = bpupnrmkas_noakun')->where('bpupnrmkas_void = 0')->where('bpupnrmkas_tanggal >= "' . $date1 . '"')->where('bpupnrmkas_tanggal <= "' . $date2 . '"')->order_by('bpupnrmkas_tanggal', 'asc')->get('bpupenerimaankas')->result_array();
		//echo $this->db->last_query(); exit();
		$data = [];
		if(!empty($res)) {
			foreach ($res as $key => $value) {
				if(empty($data[$value['akun_parent']]['name'])) {
					$rParent = $this->db->where('akun_id = ' . $value['akun_parent'])->get('akun')->row_array();
					$data[$value['akun_parent']]['name'] = !empty($rParent['akun_nama']) ? $rParent['akun_nama'] : '-';
				}

				$data[$value['akun_parent']]['child'][$value['bpupnrmkas_id']] = [
					'nama_akun' => $value['akun_nama'],
					'jumlah' => $value['bpupnrmkas_jumlah'],
				];
			}
		}
		//print_r($data); exit();
		return $data;
    }

    private function getDataCashFlowPengeluaran() {
    	$param1 = $this->input->get('periode_bulan_1');
		$param2 = $this->input->get('periode_bulan_2');
		$param3 = $this->input->get('periode_tahun');
		$param2 = $param2 < 10 ? "0$param2" : $param2;

		$date1 = "$param3-$param2-01";
		$t = date('t', strtotime($date1));
		$date2 = "$param3-$param2-$t";

		$res = $this->db->join('akun', 'akun_id = bpupglrnkas_noakun')->where('bpupglrnkas_void = 0')->where('bpupglrnkas_tanggal >= "' . $date1 . '"')->where('bpupglrnkas_tanggal <= "' . $date2 . '"')->order_by('bpupglrnkas_tanggal', 'asc')->get('bpupengeluarankas')->result_array();
		//echo $this->db->last_query(); exit();
		$data = [];
		if(!empty($res)) {
			foreach ($res as $key => $value) {
				if(empty($data[$value['akun_parent']]['name'])) {
					$rParent = $this->db->where('akun_id = ' . $value['akun_parent'])->get('akun')->row_array();
					$data[$value['akun_parent']]['name'] = !empty($rParent['akun_nama']) ? $rParent['akun_nama'] : '-';
				}

				$data[$value['akun_parent']]['child'][$value['bpupglrnkas_id']] = [
					'nama_akun' => $value['akun_nama'],
					'jumlah' => $value['bpupglrnkas_jumlah'],
				];
			}
		}
		//print_r($data); exit();
		return $data;
    }

    function laporan_bulanan_cash_flow_report(){
    	ob_start();    
		$content="";
		$normalout=true;
		$content=ob_get_clean();
		$normalout=false;
		header( "Content-Type: application/vnd.ms-excel" );
		header( "Content-disposition: attachment; filename=cashflow.xls" );

		$res = $this->generateAllDataCashFlow();
		echo "<table>";
    	echo "<tr><td>Laporan Kas Putra Bahari</td></tr>";
    	echo "<tr><td>Bulan: " . $this->getNamePeriode() . "</td></tr>";
    	echo "<tr></tr>";
    	echo "<tr></tr>";
		echo "</table>";
		
		echo "<table border='1'>";
    	echo '<tr></d>PENERIMAAN KAS</td></tr>';
    	$cnt = 1;
    	$totalPenerimaan = 0;
    	foreach ($res['penerimaan'] as $key => $value) {
    		$subJumlah = 0;
    		echo "<tr><td>" . "$cnt " . "</td><td>" . $value['name'] . "</td><td></td><td></td><td></td><td></td><td></td><td>Rp. </td><td>-</td></tr>";
    		foreach ($value['child'] as $key => $vChild) {
    			echo "<tr><td></td><td>" . $vChild['nama_akun'] . "<td><td></td><td></td><td></td><td></td><td>Rp.</td><td>" . number_format($vChild['jumlah'], 0, ',', '.') . "</td></tr>";
    			$subJumlah += $vChild['jumlah'];
    		}
    		echo "<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>Rp.</td><td>" . number_format($subJumlah, 0, ',', '.') . "</td>";
    		$totalPenerimaan += $subJumlah;
    		$cnt++;
    	}
    	echo "<tr></tr>";
    	echo "<tr><td>Jumlah Penerimaan Kas</td><td></td><td></td><td></td><td></td><td></td><td></td><td>Rp.</td><td>" . number_format($totalPenerimaan, 0, ',', '.') . "</td>";			
    	echo "<tr></tr>";
    	echo "<tr></tr>";
    	echo "<tr><td>PENGELUARAN KAS</td></tr>";
    	$cnt = 1;
    	$totalPengeluaran = 0;
    	foreach ($res['pengeluaran'] as $key => $value) {
    		$subJumlah = 0;
    		echo "<tr><td>$cnt</td><td>" . $value['name'] . "</td><td></td><td></td><td></td><td></td><td>Rp.</td><td>-</td></tr>";
    		foreach ($value['child'] as $key => $vChild) {
    			echo "<tr><td></td><td>" . $vChild['nama_akun'] . "</td><td></td><td></td><td></td><td></td><td>Rp.</td><td>" . number_format($vChild['jumlah'], 0, ',', '.') . "</td></tr>";
    			$subJumlah += $vChild['jumlah'];
    		}
    		echo "<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>Rp.</td><td></td>" . number_format($subJumlah, 0, ',', '.') . "</td></tr>";
    		$totalPengeluaran += $subJumlah;
    		$cnt++;
    	}
    	//echo "\n";
    	echo "<tr><td>Jumlah Pengeluaran Kas</td><td></td><td></td><td></td><td></td><td></td><td></td><td>Rp.</td><td>" . number_format($totalPengeluaran, 0, ',', '.') . "</td></tr>";
		
		
		
    	/*$res = $this->generateAllDataCashFlow();
    	echo 'Laporan Kas Putra Bahari' . "\n";
    	echo 'Bulan: ' . $this->getNamePeriode() . "\n";
    	echo "\n";
    	echo "\n";
    	echo 'PENERIMAAN KAS' . "\n";
    	$cnt = 1;
    	$totalPenerimaan = 0;
    	foreach ($res['penerimaan'] as $key => $value) {
    		$subJumlah = 0;
    		echo "$cnt \t" . $value['name'] . "\t \t \t \t" . "Rp. \t" . "-" . "\n";
    		foreach ($value['child'] as $key => $vChild) {
    			echo "\t" . $vChild['nama_akun'] . "\t \t \t \t" . "Rp. \t" . number_format($vChild['jumlah'], 0, ',', '.') . "\n";
    			$subJumlah += $vChild['jumlah'];
    		}
    		echo "\t \t \t \t \t \t \t" . "Rp. \t" . number_format($subJumlah, 0, ',', '.') . "\n";
    		$totalPenerimaan += $subJumlah;
    		$cnt++;
    	}
    	echo "\n";
    	echo "Jumlah Penerimaan Kas \t \t \t \t \t \t \t" . "Rp. \t" . number_format($totalPenerimaan, 0, ',', '.') . "\n";
    	echo "\n";
    	echo "\n";
    	echo 'PENGELUARAN KAS' . "\n";
    	$cnt = 1;
    	$totalPengeluaran = 0;
    	foreach ($res['pengeluaran'] as $key => $value) {
    		$subJumlah = 0;
    		echo "$cnt \t" . $value['name'] . "\t \t \t \t" . "Rp. \t" . "-" . "\n";
    		foreach ($value['child'] as $key => $vChild) {
    			echo "\t" . $vChild['nama_akun'] . "\t \t \t \t" . "Rp. \t" . number_format($vChild['jumlah'], 0, ',', '.') . "\n";
    			$subJumlah += $vChild['jumlah'];
    		}
    		echo "\t \t \t \t \t \t \t" . "Rp. \t" . number_format($subJumlah, 0, ',', '.') . "\n";
    		$totalPengeluaran += $subJumlah;
    		$cnt++;
    	}
    	echo "\n";
    	echo "Jumlah Pengeluaran Kas \t \t \t \t \t \t \t" . "Rp. \t" . number_format($totalPengeluaran, 0, ',', '.') . "\n";*/

    	ob_start();		
    	$content.=ob_get_clean();
		if($normalout)
		{
		    echo($content);
		} else {
		      // Excel provided no output.
		}
    }

    private function getNamePeriode() {
    	$param1 = $this->input->get('periode_bulan_1');
		$param2 = $this->input->get('periode_bulan_2');
		$param3 = $this->input->get('periode_tahun');
		$param2 = $param2 < 10 ? "0$param2" : $param2;

		$date1 = "$param3-$param2-01";
		$bulan = date('F', strtotime($date1));

		return "$bulan $param3";
    }

    private function generateAllDataCashFlow() {
		$resCashFlowPenerimaan  = $this->getDataCashFlowPenerimaan();
		$resCashFlowPengeluaran  = $this->getDataCashFlowPengeluaran();

    	$data = [
    		'penerimaan' => $resCashFlowPenerimaan,
    		'pengeluaran' => $resCashFlowPengeluaran
    	];

    	//print_r($data);
    	return $data;
    }

    private function getNamaAkun() {
    	$param1 = $this->input->get('periode_bulan_1');
    	$res = $this->crud_laporan->where('akun_id = ' . $param1)->get_row();
    	return $res;
    }
}

?>