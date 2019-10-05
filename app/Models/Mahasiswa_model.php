<?php 

class Mahasiswa_model {

	private $dbh; // db handler
	private $stmt;

		public function __construct() {
			// data source nama
			$dsn = 'mysql:host=localhost;dbname=phpmvc';

			try {
				$this->dbh = new PDO($dsn, 'root', '');
			} 
			catch (PDOException $e) {
				die($e->getMessage());
				
			}
		} 

	public function getAllMahasiswa() {
		$this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
		$this->stmt->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);

	}
}




	// private $mhs = [ 
	// 	[

	// 		"nama" => "Luthfi Nugraha",
	// 		"nrp" => "173040124",
	// 		"email" => "Luthfi_173040124@unpas.ac.id",
	// 		"jurusan" => "Teknik Informatika"
	// 	],
	// 	[
	// 		"nama" => "Ujang",
	// 		"nrp" => "173041243",
	// 		"email" => "ujang_173041243@unpas.ac.id",
	// 		"jurusan" => "Teknik Mesin"
	// 	],
	// 	[
	// 		"nama" => "Asep",
	// 		"nrp" => "173060111",
	// 		"email" => "Asep_173060111@unpas.ac.id",
	// 		"jurusan" => "Teknik Industri"
	// 	]
	// ];


 ?>