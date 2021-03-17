<?php 
/**
 * Author Faiz Muazzam
 */
// membuat controller CI dengan syarat nama file dan nama class sama
class Demoview_tugas2_kode3 extends CI_Controller
{
	// membuat function index (function yang di jalankan pertama kalinya saat mengeksekusi controller)
	public function index()
	{
		//memanggil file view
		$this -> load -> view('Tugas/Demoview_tugas2_kode3');
	}
}
 ?>