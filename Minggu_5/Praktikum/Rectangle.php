<?php 
	// include file untuk menjalankan class Circle dan interface
	include 'Circle.php';
	/**
	 * Author Faiz Muazzam
	 */
	// membuat class Rectacle dan implements interface
	class Rectangle implements Shape
	{
		// deklarasi property
		private $width;
		private $height;

		// Constructor adalah method atau function yang otomatis akan dijalankan saat class diinstansiasi (dibuat sebuah object)
		public function __construct($width,$height)
		{
			$this -> width = $width;
			$this -> height = $height;
		}

		// deklrasi nilai dari fungsi calArea dari interface untuk mengitung luas Kotak
		public function calArea()
		{
			return $this -> width * $this -> height;
		}
	}

	// membuat objek
	$circ = new Circle(10);
	$rect = new Rectangle(10,7);

	// eksekusi fungsi
	echo "<h1>Hasil : </h1>";
	echo "Luas Lingkaran : ".$circ -> calArea();
	echo "<br>";
	echo "Luas Kotak : ".$rect -> calArea();
 ?>