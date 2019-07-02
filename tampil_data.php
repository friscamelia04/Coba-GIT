<?php
require_once'class_respon.php';
	$hasil1 = new response;
	$all=array();
	$hasil1->datakaryawan();

	$all = [
		"App" => [
			"Result"=>$hasil1->hasil,
			"Status"=>$hasil1->response,
			"Pesan"=>$hasil1->pesan,
			"URL"=>"",
			date_default_timezone_set('Asia/Jakarta'),
			"Time"=>date('F j,Y  H:i:s')
			]
	];
	echo json_encode($all,JSON_PRETTY_PRINT);
?>