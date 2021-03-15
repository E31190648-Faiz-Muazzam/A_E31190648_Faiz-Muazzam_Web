<?php 

	class Tugas4_minggu6 extends CI_Controller{
	public function index(){
		//c3 - memuat model 'Hello_model'
		$this->load->model('Tugas4_model');

		//pengembalikan objek dari kelas Heelo_model dan dimuat di var $model
		$model = $this-> Tugas4_model;

		//Mengambil data dari model
		$a = $model-> var1;
		$b = $model-> var2;
		$c = $model-> var3;
		$d = $model-> var4;

		//Membuat dat yang akan dikirim ke view
		$data['var1'] = $a;
		$data['var2'] = $b;
		$data['var3'] = $c;
		$data['var4'] = $d;

		//memanggil file view
		$this->load->view('Tugas/Tugas4_minggu6',$data);//file view
		}
	}


 ?>