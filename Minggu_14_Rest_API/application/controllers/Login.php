<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
	// Membuat fungsi consturct digunakan untuk menjalankan perintah yang dibuat di dalamnya ketika class pertama kali di panggil
	function __construct(){
		parent::__construct();
		// memanggil class Mahasiswa_model dari folder models
		$this->load->model('Mahasiswa_model');
	}
	// Fungsi index
	// Digunakan untuk mengindentifikasi controller (yang di eksekusi dalam controller secara otomatis tanpa menulis nama fungsinya di url)
	public function index(){
		// masuk kehalaman login
		$this->load->view('crud/login');
	}
	// membuat aksi cek login
	public function cek_log(){
		$username = $this->input->post('txt_user');//menangkap hasil input username
		$password = $this->input->post('txt_pass');//menangkap hasil input password
		//menjalan fungsi login yang ada di model
		$cek = $this->Mahasiswa_model->login($username,$password,'tm_user')->result();
		//mengecek kebenaran data
		if($cek != FALSE){// jika data sesuai
			foreach ($cek as $row) {
				$user = $row->username;//menyimpan data username ke variabel
				$grup = $row->grub;//menyimpan data grub ke grup
				$nama = $row->nama;//menyimpan data nama ke nama
			}
			// menyimpan variabel di atas ke session
			$this->session->set_userdata('status', TRUE);
			$this->session->set_userdata('session_user', $user);
			$this->session->set_userdata('session_grup', $grup);
			$this->session->set_userdata('session_nama', $nama);
			// masuk ke halaman Mahasiswa jika berhasil
			redirect('Mahasiswa/user');
		}else{
			// jika salah kembali ke halamn login
			$this->load->view('crud/login');
		}
	}

	// membuat fungsi untuk menjalankan fungsi logout
	public function Logout()
	{
		// menghapus session
		$this->session->unset_userdata('status');
		$this->session->unset_userdata('session_user');
		$this->session->unset_userdata('session_grup');
		$this->session->unset_userdata('session_nama');
		// memberikan informasi jika logout berhasi
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Logout Berhasil! </div>');
		// kembali kehalaman Login
		redirect('Login');
	}

}