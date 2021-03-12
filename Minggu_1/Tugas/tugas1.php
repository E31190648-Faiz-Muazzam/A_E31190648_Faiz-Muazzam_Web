<?php
	/**
	 * author by Faiz Muazzam
	 */
	//Declare class
	class Buku 
	{
		//properties
		public $judulbuku;
		public $pengarang;
		public $penerbit;
		public $tahunterbit;
		public $cetakan;
	}
	//Membuat instance
	$book = new Buku();
	echo "<h1>Data Buku</h1>";
	//Set values and get values
	echo "Judul : ".$book -> judulbuku="Laskar Pelangi";
	echo "<br>";
	echo "Pengarang : ".$book -> pengarang="Tidak Tahu";
	echo "<br>";
	echo "Penerbit : ".$book -> penerbit="Tidak Tahu";
	echo "<br>";
	echo "Tahun Terbit : ".$book -> tahunterbit="2012";
	echo "<br>";
	echo "Cetakan : ".$book -> cetakan="Jakarta";
?>