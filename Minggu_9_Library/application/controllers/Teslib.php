<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teslib extends CI_Controller {
 	function __construct(){
 		parent::__construct();
 		$this->load->library('Table');
		$this->load->model('Mahasiswa_model');
 	}
 		public function index()
 		{
 			$this->benchmark->mark('awal');
 			$data['Mahasiswa'] = $this->Mahasiswa_model->get_data();
 			//$data['Mahasiswa'] = $this ->Table->get_table();
 			$this->load->view('view_teslib',$data);
 			$this->benchmark->mark('akhir');
 			echo "Waktu Eksekusi : ". $this->benchmark->elapsed_time('awal', 'akhir');

 		}
}
