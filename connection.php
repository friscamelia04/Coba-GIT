<?php

	class koneksi{
		private $condb;

		public function koneksidb(){
			try{
				$this->condb = new PDO("mysql:host=localhost; dbname=db_karyawan","root","");
				$this->condb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				return $this->condb;
			}
			catch(PDOException $e){
				$e->getMessage();
			}
		}
	}

?>
