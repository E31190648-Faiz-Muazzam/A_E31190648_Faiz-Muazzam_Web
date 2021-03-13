<?php 
	/**
	 * author Faiz Muazzam
	 */
	// memanggil file Car.php untuk menjalankan interface disini 
	include 'Car.php';
	// membuat class Minicar yang di implementasikan dengan interface
	class miniCar implements Car
	{
		// deklarasi property
		private $model;

		// membuat fungsi yang didapat dari interface untuk membuat setModel
		public function setModel($name)
		{
			$this -> model = $name;
		}
		// membuat fungsi yang didapat dari interface untuk menampilkan properti model
		public function getModel()
		{
			return $this -> model;
		}
	}

	// memanggil class atau membuat objek
	$learn=new miniCar();
	// memanggil fungsi setModel
	$learn -> setModel("F1");
	// memanggil fungsi getModel
	$model=$learn -> getModel();
	// Exsekuasi
	echo "<h3>Minicar Model : </h3>";
	echo $model;
 ?>