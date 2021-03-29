<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// membuat class controller, dengan syarat nama file sama dengan nama Class
class Mahasiswa extends CI_Controller {
	// membuat construct sebagai fungsi yang auto di jalankan ketika memanggil class
	function __construct(){
		parent::__construct();
			// memanggil class model
			$this->load->model('Mahasiswa_model');
			$this->load->model('Prodi_model');
			$this->load->model('Angkatan_model');
		}
		// membuat file index sebagai default fungsi yang di gunakan ketika menjankan controller
		public function index(){
			// memanggil fungsi get_data dari class model yang di simpan ke variabel data
			$data['Mahasiswa'] = $this-> Mahasiswa_model -> get_data();
			// memanggil class view dan mengirim variabel data ke view
			//$this->load->view('Praktikum/view_mahasiswa',$data);
			$this->load->view('Tugas/view_mahasiswa',$data);
		}
		// membuat fungsi prodi yang di gunakan untuk memanggil fungsi get_prodi yang ada di class Prodi_model untuk mengiplementasikan nilai yang di hasilkan dalam fungsi tersebut
		public function Prodi(){

			// memanggil fungsi get_data dari class model yang di simpan ke variabel data
			$data['Prodi'] = $this-> Prodi_model -> get_prodi();
			// memanggil class view dan mengirim variabel data ke view
			$this->load->view('Tugas/view_prodi' ,$data);
		}
		// membuat fungsi Angkatan yang di gunakan untuk memanggil fungsi get_Angkatan yang ada di class Angkatan_model untuk mengiplementasikan nilai yang di hasilkan dalam fungsi tersebut
		public function Angkatan(){

			// memanggil fungsi get_data dari class model yang di simpan ke variabel data
			$data['Angkatan'] = $this-> Angkatan_model -> get_angkatan();
			// memanggil class view dan mengirim variabel data ke view
			$this->load->view('Tugas/view_angkatan' ,$data);
		}
		// membuat fungsi profil yang menampilkan karakter sebagai berikut
		public function profil(){
			echo "ini adalah method profil pada controller Mahasiswa";
		}
}
