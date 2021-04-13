<?php 
// membuat class model, dengan syarat nama file sama dengan nama Class
class Mahasiswa_model extends CI_Model {
	// membuat fungsi get_data untuk menyimpan data yang akan di tampilkan
	public function get_data(){
		// menyimpan data ke variabel $data_mahasiswa dalam bentuk array
		$data_mahasiswa = [
			["nama"=>"Faiz Muazzam","prodi"=>"MIF"],
			["nama"=>"Ahcmad Salvani A","prodi"=>"TKK"],
			["nama"=>"M.R.A.R.P","prodi"=>"TIF"]
		];
		// mengembalikan nilai variabel data mahasisa
		return $data_mahasiswa;
	}

	// membuat fungsi getAll untuk menangkap data yang ada dalam database
	public function getAll(){
		// membuat build query untuk menampilkan semua isi database
		$this->db->select('*');
		$this->db->from('tm_user');
		$this->db->join('tm_grub','tm_user.grub = tm_grub.id_grub');//menggabungkan tabel tm_user dan tb_grub berdasarkan id_grub 
		$query = $this->db->get(); //Digunakan untuk menyeleksi seluruh data pada suatu table di database, jika kosong berarti menampilkan semua data tabel yang sudah digabungkan
		// mengembalikan varibel query
		return $query;
	}

	// membuat fungsi input data
	// disini merupakan fungsi create di implemebtasikan 
	public function input_data($data,$table)
	{
		// build query untuk insert(menambahkan data)
		$this->db->insert($table,$data);
	}
}
?>