<?php 
	// memanggil file Shape.php agar bisa menjalan kan interface
	include 'Shape.php';

	/**
	 * Author Faiz Muazzam
	 */
	// membuat class dan di implementasi dengan interface 
	class Circle implements Shape
	{
		//  deklarasi property
		private $radius;
		private $pi;

		// membuat konstruksi agar property dapat di idenfikasi langsung saat memanggil class
		public function __construct($radius)
		{
			$this -> radius = $radius;
		}

		// membuat function pi() untuk menentukan nilai pi
		public function pi()
		{
			return $this -> pi = 3.14;
		}

		// deklrasi nilai dari fungsi calArea dari interface untuk mengitung luas lingkaran
		public  function calArea()
		{
			return $this -> radius * $this -> radius * pi();
		}
	}



?>