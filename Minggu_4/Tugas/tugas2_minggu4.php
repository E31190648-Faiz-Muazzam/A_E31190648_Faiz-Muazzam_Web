<?php 
	/**
	 * author Faiz Muazzam
	 */
	// membuat class item (class induk)
	class Item
	{
		// deklasrasi properti
		private $item;
		// membuat fungsi Ukuran
		public function Ukuran($item)
		{
			// identifikasi variabel
			$Ukuran = $this -> item = $item;
			// eksekusi variabel
			return "Ukuran : ".$Ukuran."<br>";
		}
		// membuat fungsi Warna
		public function Warna($item)
		{
			// identifikasi variabel
			$Warna = $this -> item = $item;
			// eksekusi variabel
			return "Warna : ".$Warna."<br>";
		}
		// membuat fungsi Nama
		public function Nama($item)
		{
			// identifikasi variabel
			$Nama = $this -> item = $item;
			// eksekusi variabel
			return "Nama : ".$Nama."<br>";
		}
	}
	
	// membuat class Topi yang merupakan anak dari class item
	class Topi extends item
	{
		// deklasrasi properti
		private $model='Topi Gunung';
		// membuat fungsi modelTopi
		public function modelTopi()
		{
			// identifikasi variabel
			$model= $this -> model;
			// eksekusi variabel
			return "Model : ".$model."<br>";
		}
	}

	// membuat class Celana yang merupakan anak dari class item
	class Celana extends item
	{
		// deklasrasi properti
		private $tipe='Panjang';
		private $model='Pencils';
		// membuat fungsi tipeCelana
		public function tipeCelana()
		{
			// identifikasi variabel
			$tipe= $this -> tipe;
			// eksekusi variabel
			return "Tipe : ".$tipe."<br>";
		}
		// membuat fungsi modelCelana
		public function modelCelana()
		{
			// identifikasi variabel
			$model= $this -> model;
			// eksekusi variabel
			return "Model : ".$model."<br>";
		}
	}

	// membuat class Celana yang merupakan anak dari class item
	class Baju extends item
	{
		// deklasrasi properti
		private $tipe="Batik";
		// membuat fungsi tipeBaju
		public function tipeBaju()
		{
			// identifikasi variabel
			$tipe= $this -> tipe;
			// eksekusi variabel
			return "Tipe : ".$tipe."<br>";
		}
	}

	// panggil class inherit
	$Topi = new Topi();
	$Celana = new Celana();
	$Baju = new Baju();

	// set value topi
	$modelTopi = $Topi-> modelTopi();
	$namaTopi = $Topi-> Nama('Cardinal');
	$WarnaTopi = $Topi-> Warna('Hitam');
	$UkuranTopi = $Topi-> Ukuran('L');

	// set value Celana
	$modelCelana = $Celana-> modelCelana();
	$tipeCelana = $Celana-> tipeCelana();
	$namaCelana = $Celana-> Nama('Lotto');
	$WarnaCelana = $Celana-> Warna('Hitam');
	$UkuranCelana = $Celana-> Ukuran('L');

	// set value Baju
	$tipeBaju = $Baju-> tipeBaju();
	$namaBaju = $Baju-> Nama('Cendana');
	$WarnaBaju = $Baju-> Warna('Maroon');
	$UkuranBaju = $Baju-> Ukuran('L');

	// exsekusi objek topi
	echo "<h2>Produk Topi</h2>";
	echo $modelTopi;
	echo $namaTopi;
	echo $WarnaTopi;
	echo $UkuranTopi;

	// exsekusi objek Celana
	echo "<h2>Produk Celana</h2>";
	echo $modelCelana;
	echo $tipeCelana;
	echo $namaCelana;
	echo $WarnaCelana;
	echo $UkuranCelana;

	// exsekusi objek Baju
	echo "<h2>Produk Baju</h2>";
	echo $tipeBaju;
	echo $namaBaju;
	echo $WarnaBaju;
	echo $UkuranBaju;
 ?>