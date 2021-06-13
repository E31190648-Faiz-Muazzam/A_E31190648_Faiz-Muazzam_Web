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

	// membuat fungsi edit_data untuk menangkap data berdasarkan id yang di inputkan
	public function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	} 

	// menjalankan query update untuk mengubah data
	public function update_data($where,$data,$table){
		// menangkap id yang di pilih
		$this->db->where($where);
		// menjalankan query updtae
		$this->db->update($table,$data);
	}

	// menjalankan query delete untuk menghapus data
	public function hapus_data($where,$table)
	{
		// menangkap id yang di pilih
		$this->db->where($where);
		// menghapus data berdasrkan id yang di pilih
		$this->db->delete($table);
	} 

	public function login($user,$pass,$table) {
		$this->db->select('*');
		$this->db->from('tm_user');
		$this->db->where('username',$user);
		$this->db->where('password',$pass);
		$query = $this->db->get();
		return $query;
	}

	public function cek_login()
    {
        if(empty($this->session->userdata('status')))
        {
			redirect('Login');
		}
    }

    public function cek_logout()
    {
    	if(!empty($this->session->userdata('status')))
        {
            redirect('Mahasiswa');
        }
    }
}
?>