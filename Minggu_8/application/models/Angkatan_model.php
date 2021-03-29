<?php 
// membuat class model, dengan syarat nama file sama dengan nama Class
class Angkatan_model extends CI_Model {
	// membuat class data untuk mengidentifikasi nilai yang akan di gunakan pada project
	public function get_angkatan(){
		// idenfikasi variable
		$data_angkatan = [
			["tahun"=>"2016"],
			["tahun"=>"2017"],
			["tahun"=>"2018"]
		];
		// mengembalikan nilai variabel data angkatan
		return $data_angkatan;
	}
}
?>