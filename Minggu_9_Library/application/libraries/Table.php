<?php 
// membuat class model, dengan syarat nama file sama dengan nama Class
class Table {
	// idenfikasi variable
	public function get_table(){
		$data_mahasiswa = [
			["nama"=>"Faiz Muazzam","prodi"=>"MIF"],
			["nama"=>"Ahcmad Salvani A","prodi"=>"TKK"],
			["nama"=>"M.R.A.R.P","prodi"=>"TIF"]
		];
		// mengembalikan nilai variabel data angkatan
		return $data_mahasiswa;
	}
}
?>