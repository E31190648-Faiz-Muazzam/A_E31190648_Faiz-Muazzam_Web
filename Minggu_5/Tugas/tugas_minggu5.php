<?php 
	// memnuat interface
	interface hitungLuas
	{
		// interface tidak boleh memiliki suatu property dengan visibility apapun. Artinya interface hanya memembuat method saja. Namun dapat memiliki konstanta.
		// private = $sisi;

		// fungsi abstrak
		public function hitungLuasPersegi();
		public function hitungLuasSegitiga();
		public function hitungLuasLingkaran();

	}

	/**
	 * Luas Persegi
	 */
	// membuat class untuk menghitung luas Persegi dan implemnts dengan interface
	class luasPersegi implements hitungLuas
	{
		// deklarasi property
		private $sisi;

		// Constructor adalah method atau function yang otomatis akan dijalankan saat class diinstansiasi (dibuat sebuah object)
		function __construct($sisi)
		{
			$this -> sisi = $sisi;
		}

		// deklarasi fungsi dari interface untuk menghitung luas persegi
		public function hitungLuasPersegi()
		{
			$luas= $this -> sisi * $this -> sisi;
			return $luas;
		}

		public function hitungLuasSegitiga(){
			// salah satu syarat agar interface berjalan harus mendeklarasikan semua fungsi abstraknya di class yang di implementasikan
		}

		public function hitungLuasLingkaran(){
			// salah satu syarat agar interface berjalan harus mendeklarasikan semua fungsi abstraknya di class yang di implementasikan
		}
	}

	/**
	 * Luas Segitiga
	 */
	// membuat class untuk menghitung luas Segitiga dan implemnts dengan interface
	class luasSegitiga implements hitungLuas
	{
		// deklarasi property
		private $alas;
		private $tinggi;

		// Constructor adalah method atau function yang otomatis akan dijalankan saat class diinstansiasi (dibuat sebuah object)
		function __construct($alas,$tinggi)
		{
			$this -> alas = $alas;
			$this -> tinggi = $tinggi;
		}
		public function hitungLuasPersegi(){
			// salah satu syarat agar interface berjalan harus mendeklarasikan semua fungsi abstraknya di class yang di implementasikan
		}
		// deklarasi fungsi dari interface untuk menghitung luas segitiga
		public function hitungLuasSegitiga()
		{
			$luas= $this -> alas * $this -> tinggi / 2;
			return $luas;
		}
		public function hitungLuasLingkaran(){
			// salah satu syarat agar interface berjalan harus mendeklarasikan semua fungsi abstraknya di class yang di implementasikan
		}
	}

	/**
	 * Luas Persegi
	 */
	class luasLingkaran implements hitungLuas
	{
		private $radius;
		private $pi=3.14;

		// Constructor adalah method atau function yang otomatis akan dijalankan saat class diinstansiasi (dibuat sebuah object)
		function __construct($radius)
		{
			$this -> radius = $radius;
		}

		public function hitungLuasPersegi(){
			// salah satu syarat agar interface berjalan harus mendeklarasikan semua fungsi abstraknya di class yang di implementasikan
		}

		public function hitungLuasSegitiga(){
			// salah satu syarat agar interface berjalan harus mendeklarasikan semua fungsi abstraknya di class yang di implementasikan
		}
		
		// deklarasi fungsi dari interface untuk menghitung luas Lingkaran
		public function hitungLuasLingkaran()
		{
			$luas= $this -> radius * $this -> radius / $this -> pi;
			return $luas;
		}
	}

	// Deklarasi Objek
	$persegi = new luasPersegi(10);
	$segitiga = new luasSegitiga(10,7);
	$lingkaran = new luasLingkaran(10);

	// get method
	$luasPersegi = $persegi -> hitungLuasPersegi();
	$luasSegitiga = $segitiga -> hitungLuasSegitiga();
	$luasLingkaran = $lingkaran -> hitungLuasLingkaran();

	// eksekusi
	echo "<h2>Hasil : </h2>";
	echo "Luas Persegi : ".$luasPersegi;
	echo "<br>";
	echo "Luas Segitiga : ".$luasSegitiga;
	echo "<br>";
	echo "Luas Lingkaran : ".$luasLingkaran;
	echo "<br>";
 ?>