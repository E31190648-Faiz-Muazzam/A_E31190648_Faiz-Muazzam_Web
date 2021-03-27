<?php 
class Mahasiswa_model extends CI_Model {
	public function get_data(){
		$data_mahasiswa = [
			["nama"=>"Faiz Muazzam","prodi"=>"MIF"],
			["nama"=>"Naufal Sulthonul Aziz","prodi"=>"MIF"],
			["nama"=>"M.R.A.R.P","prodi"=>"TIF"]
		];
		return $data_mahasiswa;
	}
}
?>