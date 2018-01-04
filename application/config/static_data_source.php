<?php
$config["static_data_source"]['total_saham'] = '1000000000';

//data source for aktif & non aktif
$config["static_data_source"]['status'] = array(
	'option' => array(
		array(
			'name' => 'Aktif',
			'value' => 1,
		),
		array(
			'name' => 'Tidak Aktif',
			'value' => 0,
		),
	),
	'label' => array(
			0 => 'Tidak Aktif',
			1 => 'Aktif',
	),
);

//data source akun tipe
$config["static_data_source"]['status_penjualan'] = array(
	1 => array(
		'value' => 1,
		'name' => 'Menunggu',
	),
	2 => array(
		'value' => 2,
		'name' => 'Diproses',
	),
	3 => array(
		'value' => 3,
		'name' => 'Ditutup',
	),
);

//data source akun tipe
$config["static_data_source"]['akun_tipe'] = array(
	1 => array(
		'value' => 1,
		'name' => 'Kas/Bank',
	),
	2 => array(
		'value' => 2,
		'name' => 'Aktiva Tetap',
	),
	3 => array(
		'value' => 3,
		'name' => 'Barang',
	),
	4 => array(
		'value' => 4,
		'name' => 'Pasiva',
	),
	5 => array(
		'value' => 5,
		'name' => 'Beban',
	),
);

//data source bank
$config["static_data_source"]['bank'] = array(
	1 => array(
		'value' => 1,
		'name' => 'Bank BCA',
	),
	2 => array(
		'value' => 2,
		'name' => 'Bank Mandiri',
	),
	3 => array(
		'value' => 3,
		'name' => 'Bank BNI',
	),
	4 => array(
		'value' => 4,
		'name' => 'Bank BRI',
	),
);

//data source tipe aktiva lancar
$config["static_data_source"]['aktiva'] = array(
	1 => array(
		'value' => 1,
		'name' => 'Kas',
	),
	2 => array(
		'value' => 2,
		'name' => 'Piutang',
	),
	3 => array(
		'value' => 3,
		'name' => 'Wesel Tagih',
	),
	4 => array(
		'value' => 4,
		'name' => 'Persediaan',
	),
);

$config["static_data_source"]['status_aktif'] = array(
	0 => array(
		'value' => 0,
		'name' => 'Tidak Aktif',
	),
	1 => array(
		'value' => 1,
		'name' => 'Aktif',
	),
);

//data source for kategori barang jasa
$config["static_data_source"]['barjas_kategori'] = array(
	1 => array(
		'value' => 1,
		'name' => 'Barang',
	),
	2 => array(
		'value' => 2,
		'name' => 'Jasa',
	),
	3 => array(
		'value' => 3,
		'name' => 'Barang & Jasa',
	),
);

//data source for jenis barang jasa
$config["static_data_source"]['barjas_jenis'] = array(
	1 => array(
		'value' => 1,
		'name' => 'Barang',
	),
	2 => array(
		'value' => 2,
		'name' => 'Manpower (Jasa)',
	),
	3 => array(
		'value' => 3,
		'name' => 'Barang & Manpower (Jasa)',
	),
);

//data source for satuan barang jasa
$config["static_data_source"]['barjas_satuan'] = array(
	1 => array(
		'value' => 1,
		'name' => 'Pcs',
	),
	2 => array(
		'value' => 2,
		'name' => 'Span',
	),
	3 => array(
		'value' => 3,
		'name' => 'Pcs & Span',
	),
);

//data source for tipe karyawan
$config["static_data_source"]['kary_tipe'] = array(
	1 => array(
		'value' => 1,
		'name' => 'Produksi',
	),
	2 => array(
		'value' => 2,
		'name' => 'Proyek',
	),
	3 => array(
		'value' => 3,
		'name' => 'Front Office',
	),
	4 => array(
		'value' => 4,
		'name' => 'Back Office',
	),
);

//data source for status nikah karyawan
$config["static_data_source"]['kary_status_nikah'] = array(
	1 => array(
		'value' => 1,
		'name' => 'Menikah',
	),
	2 => array(
		'value' => 2,
		'name' => 'Belum Menikah',
	),
);

//data source for status kerja karyawan
$config["static_data_source"]['kary_status_kontrak'] = array(
	1 => array(
		'value' => 1,
		'name' => 'Kontrak',
	),
	2 => array(
		'value' => 2,
		'name' => 'Pegawai Tetap',
	),
	3 => array(
		'value' => 3,
		'name' => 'Harian',
	),
);

//data source for status kerja karyawan
// $config["static_data_source"]['kary_posisi'] = array(
// 	1 => array(
// 		'value' => 1,
// 		'name' => 'Operator Folklift',
// 	),
// );

//data source for status kerja karyawan
$config["static_data_source"]['kary_jabatan'] = array(
	1 => array(
		'value' => 1,
		'name' => 'Helper',
	),
	2 => array(
		'value' => 2,
		'name' => 'Operator',
	),
	3 => array(
		'value' => 3,
		'name' => 'Staff',
	),
	4 => array(
		'value' => 4,
		'name' => 'Leader',
	),
	5 => array(
		'value' => 5,
		'name' => 'Supervisor',
	),
	6 => array(
		'value' => 6,
		'name' => 'Wakil Manager',
	),
	7 => array(
		'value' => 7,
		'name' => 'Manager',
	),
	8 => array(
		'value' => 8,
		'name' => 'General Manager',
	),
	9 => array(
		'value' => 9,
		'name' => 'Wakil Direktur',
	),
	10 => array(
		'value' => 10,
		'name' => 'Direktur',
	),
);

$config["static_data_source"]['status_project'] = array(
	1 => array(
		'value' => 1,
		'name' => 'NEW',
	),
	2 => array(
		'value' => 2,
		'name' => 'ONPROGRESS',
	),
	3 => array(
		'value' => 3,
		'name' => 'DONE',
	),
);

$config["static_data_source"]['role_access'] = array(
	'pengguna' => array(
		'name' => 'Pengguna',
	),
	'wajib-pajak' => array(
		'name' => 'Data Wajib Pajak & Badan',
	),
	'user-level' => array(
		'name' => 'User Level',
	),
	'departemen' => array(
		'name' => 'Departemen',
	),
	'daftar-aktiva-tetap' => array(
		'name' => 'Aktiva Tetap',
	),
	'kas-bank-penerimaan' => array(
		'name' => 'Penerimaan',
	),
	'kas-bank-pembayaran' => array(
		'name' => 'Pembayaran',
	),
	'grafik-bank-bca' => array(
		'name' => 'Buku Bank',
	),
	'daftar-akun' => array(
		'name' => 'Daftar Akun',
	),
	'insentif-hari-raya' => array(
		'name' => 'Insentif Hari Raya',
	),
	'mata-uang' => array(
		'name' => 'Mata Uang',
	),
	'proyek-dashboard' => array(
		'name' => 'Proyek',
	),
	'karyawan' => array(
		'name' => 'Karyawan',
	),
	'laporan' => array(
		'name' => 'Laporan',
	),
	'bpu' => array(
		'name' => 'BPU',
	),
	'lain-lain' => array(
		'name' => 'Lain-lain',
	),
	'penjualan' => array(
		'name' => 'Penjualan',
	),
	'pembelian' => array(
		'name' => 'Pembelian',
	),
	'bpu-penerimaankas' => array(
		'name' => 'BPU - Penerimaan Kas',
	),
	'bpu-pengeluarankas' => array(
		'name' => 'BPU - Pengeluaran Kas',
	),
);

$config["static_data_source"]['daftar_bulan'] = array(
	1 => 'Januari',
	2 => 'Februari',
	3 => 'Maret',
	4 => 'April',
	5 => 'Mei',
	6 => 'Juni',
	7 => 'Juli',
	8 => 'Agustus',
	9 => 'September',
	10 => 'Oktober',
	11 => 'November',
	12 => 'Desember',
);

$config["static_data_source"]['report_tahun'] = array(
	'before' => 1,
	'after' => 1
);

$config["static_data_source"]['group_peserta'] = array(
	'group_1' => 'Group 1',
	'group_2' => 'Group 2',
	'group_3' => 'Group 3',
	'group_4' => 'Group 4',
	'group_5' => 'Group 5',
	'group_6' => 'Group 6',
	'group_7' => 'Group 7',
	'group_8' => 'Group 8',
	'group_9' => 'Group 9',
	'group_10' => 'Group 10',
);