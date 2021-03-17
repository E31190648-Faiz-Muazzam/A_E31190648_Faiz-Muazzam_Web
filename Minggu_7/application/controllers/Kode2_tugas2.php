<?php
/**
 * Author Faiz Muazzam
 */
// membuat controller CI dengan syarat nama file dan nama class sama
class Kode2_tugas2 extends CI_Controller
{
	// membuat fungsi untuk mengeksekusi file phpview_tugas2.php
	public function hello_php(){
	$this->load->view('Tugas/phpview_tugas2');
	}
	// membuat fungsi untuk mengeksekusi file pithonview_tugas2.php
	public function hello_python(){
	$this->load->view('Tugas/pythonview_tugas2');
	}
	// membuat fungsi untuk mengeksekusi file cppview_tugas2.php
	public function hello_cpp(){
	$this->load->view('Tugas/cppview_tugas2');
	}
	// membuat fungsi untuk mengeksekusi file javaview_tugas2.php
	public function hello_java(){
	$this->load->view('Tugas/javaview_tugas2');
	}
	
	// membuat fungsi untuk mengkategorikan view yang akan dijalankan berdasarkan fungsi yang di buat di atas
	public function remap($var){
		if(isset($var)){
			switch(strtolower($var)){
			case 'python':
				$this->hello_python();
				break;
			case 'cpp':
				$this->hello_cpp();
				break;
			case 'java':
				$this->hello_java();
				break;
			default:
				$this->hello_php();
			}
		}else{
			$this->index();
		}
	}
}