<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tugas_mahasiswa extends CI_Controller {
	function __construct(){
		parent::__construct();
			$this->load->model('Mahasiswa_model');
		}
		public function index(){
			$data['Mahasiswa'] = $this-> Mahasiswa_model -> get_data();
			$this->load->view('tugas_view_mahasiswa',$data);
		}
		public function profil(){
			echo "ini adalah method profil pada controller Mahasiswa";
		}
}