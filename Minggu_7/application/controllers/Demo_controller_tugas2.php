<?php 
	/**
	 * Author Faiz Muazzam
	 */
	// membuat controller CI dengan syarat nama file dan nama class sama
	class Demo_controller_tugas2 extends CI_Controller
	{
		// membuat function index (function yang di jalankan pertama kalinya saat mengeksekusi controller)
		public function index()
		{
			echo "<h2>Demo Controller</h2>";
			echo "<br>Function yang dipanggil adalah index";
		}
		// membuat function aksi untuk mengeksekusi charakter sebagai berikut
		public function aksi()
		{
			echo "<h2>Demo Controller</h2>";
			echo "<br>Function yang dipanggil adalah aksi";
		}
	}
?>