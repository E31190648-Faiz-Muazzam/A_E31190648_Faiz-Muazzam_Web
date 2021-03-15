<?php
class Hello_kode2 extends CI_Controller{
	public function index(){
		//echo"<h2>Hello World CI!</h2>";

		//memanggil file view
		$this->load->view('Praktikum/helloview_kode2');//file view
	}
}