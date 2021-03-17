<?php 
	/**
	 * Author Faiz Muazzam
	 */
	// membuat controller CI dengan syarat nama file dan nama class sama
	class Kode_tugas2 extends CI_Controller
	{
		// membuat fungsi untuk mengkategorikan view yang akan dijalankan 
		// cara menjalankan http://localhost/Web_Framework/A_E31190648_Faiz-Muazzam_Web/Minggu_7/Kode_tugas2/hello/php
		function hello($var)
		{
			if (isset($var)) {
				switch (strtolower($var)) {
					case 'php':
						$this -> load -> view('Tugas/phpview_tugas2');
						break;
					case 'python':
						$this -> load -> view('Tugas/pythonview_tugas2');
						break;
					case 'cpp':
						$this -> load -> view('Tugas/cppview_tugas2');
						break;
					case 'java':
						$this -> load -> view('Tugas/javaview_tugas2');
						break;

					
					default:
						echo "Input URL Salah";
						break;
				}
			}
		}
	}
 ?>