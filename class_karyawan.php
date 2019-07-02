<?php

class karyawan{
		/*public $nik;
		public $nama;
		public $alamat;
		public $no_telp;*/
	private $condb;
	public $status;

	//constructor
	function __construct(){
		require_once 'connection.php';
		//koneksi ke DB
		$db = new koneksi;
		$this->condb = $db->koneksidb();
	}

	public function tampildata(){

		try{
			$stmt = $this->condb->prepare("SELECT * FROM tb_data");
			$stmt->execute();
			$this->status="ok";
			return $stmt;
		}

		catch(PDOException $e){
			$this->status="error";
		}

	}

	public function inputdata(){
		try{
			//prepare query
			$stmt = $this->condb->prepare("INSERT INTO tb_data (nik,nama,no_telp,alamat) VALUES (:nik,:nama,:no_telp,:alamat");

			//sanitize
			$this->nik = htmlspecialchars(strip_tags($this->nik));
			$this->nama = htmlspecialchars(strip_tags($this->nama));
			$this->no_telp = htmlspecialchars(strip_tags($this->no_telp));
			$this->alamat = htmlspecialchars(strip_tags($this->alamat));

			//bind values
			$stmt->bindparam(":nik",$this->nik);
			$stmt->bindparam(":nama",$this->nama);
			$stmt->bindparam(":no_telp",$this->no_telp);
			$stmt->bindparam(":alamat",$this->alamat);
			//execute query
			$stmt->execute();
			$this->status="ok";
			return $stmt;
		}

		catch(PDOException $e){
			$this->status="error";
		}
	}
}

?>