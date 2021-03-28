<?php 
// membuat class model, dengan syarat nama file sama dengan nama Class
class Prodi_model extends CI_Model {
	public function get_data(){
		// idenfikasi variable
		$data_prodi = [
			["prodi"=>"MIF","keterangan"=>"Manajemen Informatika"],
			["prodi"=>"TKK","keterangan"=>"Teknik Komputer"],
			["prodi"=>"TIF","keterangan"=>"Teknik Informatika"]
		];
		// mengembalikan nilai variabel data angkatan
		return $data_prodi;
	}
}
?>