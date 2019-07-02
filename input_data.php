<?php
	require_once 'class_karyawan.php';
	$data = new karyawan;

	//get posted data
	$data1 = json_decode(file_get_contents("php://input", stmt));

	//set value
	$data->nik = $data1->nik;
	$data->nama = $data1->nama;
	$data->no_telp = $data1->no_telp;
	$data->alamat = $data1->alamat;

	if($data->inputdata()){

	}



?>