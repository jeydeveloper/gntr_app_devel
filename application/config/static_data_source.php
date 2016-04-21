<?php

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

//data source for tipe aktiva
$config["static_data_source"]['tipe_aktiva'] = array(
	1001 => array(
		'kode' => 1001,
		'name' => 'Kas/Bank',
	),
	1101 => array(
		'kode' => 1101,
		'name' => 'Aktiva Tetap',
	),
	1201 => array(
		'kode' => 1201,
		'name' => 'Barang',
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
		'name' => 'Pallet',
	),
	2 => array(
		'value' => 2,
		'name' => 'Manpower',
	),
	3 => array(
		'value' => 3,
		'name' => 'Pallet & Manpower',
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