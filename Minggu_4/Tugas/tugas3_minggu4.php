<?php 
	/**
	 * author Faiz Muazzam
	 */
	// Membuat Class Tablet
	class Tablet
	{
		// deklarasi property
		// public : ruang lingkup untuk membuat properti/metode bisa dilihat atau di akses dari mana saja, kelas lain dan instance objek.
		public $merk;
		// private : ruang lingkup ketika Anda ingin properti/metode bisa dilihat atau di akses hanya di kelasnya sendiri.
		private $camera;
		// protected : ruang lingkup ketika Anda ingin membuat properti/metode bisa dilihat atau di akses kesemua kelas yang memperluas kelas saat ini termasuk kelas induk.
		protected $memory='265GB';

		// metode menggunakan public agar bisa di akses atau di gunakan di luar class
		public function camera($item)
		{	
			// karena properti camera bersifat private maka hanya bisa di deklarasikan disini (di dalam class yang menyimoan property camera)
			$camera=$this-> camera=$item;
			return "dengan kualitas Kamera <b>".$camera."</b>";
		}
	}

	// membuat class handphone yang merupakan anak dari dari class Tablet
	class handphone extends Tablet
	{
		// deklarasi property
		private $handphone_baru;

		// membuat fungsu beli_handphone
		public function beli_handphone()
		{
			// karena property merek bersifat public maka bisa di akses disini (class anak)
			$merk=$this -> merk;
			// karena protected merek bersifat public maka bisa di akses disini (class anak)
			$memory=$this -> memory;
			$handphone_baru=$this -> handphone_baru = "Beli Hp Baru Merek <b>".$merk."</b> , dengan jumlah memory <b>".$memory."</b>";
			return $handphone_baru;

		}
	}

	$Hp=new handphone();
	echo "<h1>Informasi : </h1>";
	// karena property merek bersifat public maka bisa di akses disini (diluar semua class)
	$Hp-> merk='iPhone';
	// memanggil fungsi camera agar property camera bisa di gunakan
	$camera=$Hp-> camera('14 MP');
	// memanggil fungsi beli handphone agar property memory bisa di gunakan
	$test=$Hp-> beli_handphone();
	echo $test.' '.$camera;
 ?>