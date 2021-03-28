<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// membuat class controller, dengan syarat nama file sama dengan nama Class
class Tugas_mahasiswa extends CI_Controller {
	// membuat construct sebagai fungsi yang auto di jalankan ketika memanggil class
	function __construct(){
		parent::__construct();
		// memanggil class model
			$this->load->model('Mahasiswa_model');
		}
		// membuat file index sebagai default fungsi yang di gunakan ketika menjankan controller
		public function index(){
			// memanggil fungsi get_data dari class model yang di simpan ke variabel data
			$data['Mahasiswa'] = $this-> Mahasiswa_model -> get_data();
			// memanggil class view dan mengirim variabel data ke view
			$this->load->view('Tugas/tugas_view_mahasiswa',$data);
		}
		// membuat fungsi profil yang menampilkan karakter sebagai berikut
		public function profil(){
			echo "ini adalah method profil pada controller Mahasiswa";
		}
}