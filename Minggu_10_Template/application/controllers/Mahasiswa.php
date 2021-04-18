<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// membuat class controller, dengan syarat nama file sama dengan nama Class
class Mahasiswa extends CI_Controller {
	// Membuat fungsi consturct digunakan untuk menjalankan perintah yang dibuat di dalamnya ketika class pertama kali di panggil
	function __construct()
	{
		parent::__construct();
		// memanggil class Mahasiswa_model dari folder models
		$this->load->model('Mahasiswa_model');

	}

	

	// Fungsi index
	// Digunakan untuk mengindentifikasi controller (yang di eksekusi dalam controller secara otomatis tanpa menulis nama fungsinya di url)
	public function index()
	{
		// memanggil fungsi get_data() dalam class Mahasiswa_model agar dapat mengambil data yang ada di data base
		$data['Mahasiswa'] = $this->Mahasiswa_model->get_data();
		// memanggil file home_mahasiswa yang di implemntasikan dengan template dari library
		// jadi dalam template program akan menyimpan views ('view_mahasiswa') yang di panggil kedalam, dan membawa variabel $data
		$this->template->views('view_mahasiswa',$data);
	}
}

// Dibawah ini merupakan Source Code untuk Praktikum Minggu 11 CRUD

// // membuat fungsi tambah yang di gunakan untuk menampilkan from tambah data pada praktikum kali ini
// 	public function tambah(){
// 		// memanggil file tambah_mahasiswa yang di implemntasikan dengan template dari library
// 		// jadi dalam template program akan menyimpan views ('crud/tambah_mahasiswa') yang di panggil kedalam 
// 		$this->template->views('crud/tambah_mahasiswa');
// 	}

// 	// membuat fungsi input yang di gunakan untuk menangkap data yang di inputkan di file tambah_mahasiswa, dan menyambungkan dan menyimpan data yang di tangkap tersebut kedalam database dengan mengimplemntasi query insert
// 	public function input(){
// 		$username = $this->input->POST('username');//menangkap input username
// 		$password = $this->input->POST('pass');//menangkap inout password
// 		$nama = $this->input->POST('nama');//menangkap input nama
// 		$grub = $this->input->POST('grup');//menangkap input grub

// 		// menyimpan data ke variabel $data dalam bentuk array
// 		$data = array(
// 		'username' => $username,//mennyimpan tangkapan input username ke kolom username
// 		'password' => $password,//mennyimpan tangkapan input password ke kolom password
// 		'nama' => $nama,//mennyimpan tangkapan input nama ke kolom nama
// 		'grub' => $grub//mennyimpan tangkapan input grub ke kolom grub
// 	);
// 		// memanggil fungsi input_data dalam class Mahasiswa_model 
// 		$this->Mahasiswa_model->input_data($data, 'tm_user');//memasukkan hasil inputan yang di simpan di variabel $data dan memasukkan nama tabel tm_user ke dalam parameter 

// 		// setelah semua perintah di atas berhasil dijalan kan, maka disini perintah redirect di gunakan untuk mengembalikan ketampilan home_mahasiswa, yang dimana untuk memanggilnya harus masuk ke controller dan memanggil fungsi index
// 		redirect('Mahasiswa/index');
// 	}
