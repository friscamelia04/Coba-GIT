<?php
	class response{
		public $tampil;
		public $pesan;
		public $hasil=array();
		public $response;
		var $result;

		function __construct(){
		require_once'class_karyawan.php';

		$this->result = new karyawan;
		}

		public function datakaryawan(){
			$tampil=$this->result->tampildata();
			if($this->result->status=="ok"){

				while($data=$tampil->fetch(PDO::FETCH_ASSOC)){
					$this->hasil[]=$data;

					if(!$this->hasil){
						$this->pesan="Data Tidak Ada";
					}
					else{
						$this->pesan="Data Ada";
					}
				}
				$this->response= "OK";
			}

			else{
				$this->response="Error";
				$this->pesan="Data Tidak Ada";
			}
		}
	}
?>