<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// membuat class controller, dengan syarat nama file sama dengan nama Class
class Grup extends CI_Controller {
	// Membuat fungsi consturct digunakan untuk menjalankan perintah yang dibuat di dalamnya ketika class pertama kali di panggil
	function __construct()
	{
		parent::__construct();
		// memanggil class Mahasiswa_model dari folder models
		$this->load->model('Grup_model');
	}

	// membuat fungsi tambah yang di gunakan untuk menampilkan from tambah data pada praktikum kali ini
	public function tambah_grup(){
		// memanggil file tambah_mahasiswa yang di implemntasikan dengan template dari library
		// jadi dalam template program akan menyimpan views ('crud/tambah_mahasiswa') yang di panggil kedalam 
		$this->template->views('crud/tambah_grup');
	}

	// membuat fungsi input yang di gunakan untuk menangkap data yang di inputkan di file tambah_mahasiswa, dan menyambungkan dan menyimpan data yang di tangkap tersebut kedalam database dengan mengimplemntasi query insert
	public function input_grup(){
		$grub = $this->input->POST('nameGrup');//menangkap input nama grup

		// menyimpan data ke variabel $data dalam bentuk array
		$data = array(
		'grub' => $grub//mennyimpan tangkapan input grub ke kolom grub
	);
		// memanggil fungsi input_data dalam class Mahasiswa_model 
		$this->Grup_model->input_data_grup($data, 'tm_grub');//memasukkan hasil inputan yang di simpan di variabel $data dan memasukkan nama tabel tm_user ke dalam parameter 

		// setelah semua perintah di atas berhasil dijalan kan, maka disini perintah redirect di gunakan untuk mengembalikan ketampilan home_mahasiswa, yang dimana untuk memanggilnya harus masuk ke controller dan memanggil fungsi index
		redirect('Grup');
	}

	// Fungsi index
	// Digunakan untuk mengindentifikasi controller (yang di eksekusi dalam controller secara otomatis tanpa menulis nama fungsinya di url)
	public function index()
	{
		// memanggil fungsi getAll() dalam class Mahasiswa_model agar dapat mengambil data yang ada di data base
		$data['admin'] = $this->Grup_model->getAllGrup()->result();
		// memanggil file home_mahasiswa yang di implemntasikan dengan template dari library
		// jadi dalam template program akan menyimpan views ('crud/home_mahasiswa') yang di panggil kedalam, dan membawa variabel $data
		$this->template->views('crud/master_grup',$data);
	}

	// Membuat fungsi edit untuk menampilkan nilai data yang akan di edit pada form pengisian
	public function edit_grup($id)
	{
		// menangkap id
		$where = array('id_grub'=>$id);
		// bertujuan menampilkan data berdasarkan id
		$data['admin'] = $this->Grup_model->edit_data_grup($where,'tm_grub')->result();
		// menuju ke halaman edit_mahasiswa sambil membawa nilai dari variabel $data di mana data tersebut akan di oleh untuk di tampilkan pada form
		$this->template->views('crud/edit_grup',$data);
	}

	// Membuat fungsi update untuk menangkap nilai yang sudah di ubah pada form
	public function update_grup()
	{
		$id = $this->input->POST('id');
		$grub = $this->input->POST('nameGrup');//menangkap input grub

		// menyimpan data ke variabel $data dalam bentuk array
		$data = array(
		'grub' => $grub//mennyimpan tangkapan input grub ke kolom grub
		);

		// Menangkap id pada from
		$where = array(
			'id_grub'=>$id
		);

		// Menangkap semua data untuk di olah pada fungsi update_data pada class Mahasiswa_model
		$this->Grup_model->update_data_grup($where,$data,'tm_grub');

		// setelah semua perintah di atas berhasil dijalan kan, maka disini perintah redirect di gunakan untuk mengembalikan ketampilan home_mahasiswa, yang dimana untuk memanggilnya harus masuk ke controller dan memanggil fungsi index
		redirect('Grup');
	}

	// Membuat fungsi hapus untuk mengimplementasikan fungsi delete data pada database
	public function hapus_grup($id)
	{
		// menangkap id
		$where = array('id_grub' => $id);
		// Menangkap semua data untuk di olah pada fungsi hapus_data pada class Mahasiswa_model
		$this->Grup_model->hapus_data_grup($where,'tm_grub');
		// Setelah menjalankan perintah di atas, langsung kembali ke halaman Mahasiswa
		redirect('Grup');
	}

}
