<?php 
	/**
	 * Author by Faiz Muazzam
	 */
	// membuat controller CI dengan syarat nama file dan nama class sama
	class Demo_view_tugas2_kode1 extends CI_Controller
	{
		// membuat function index (function yang di jalankan pertama kalinya saat mengeksekusi controller)
		public function index()
		{
			//memanggil file view
			$this -> load -> view('Tugas/headerview_tugas2_kode1');
			$this -> load -> view('Tugas/contentview_tugas2_kode1');
			$this -> load -> view('Tugas/footerview_tugas2_kode1');
		}
	}
 ?>