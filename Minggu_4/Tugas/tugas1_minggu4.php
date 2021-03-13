<?php 
	/**
	 * author Faiz Muazzam
	 */
	// Membuat class mobilLengkap
	class mobilLengkap 
	{
		// identifikasi properti
		private $test1;
		private $test2;
		private $test3;

		// membuat fungsi nonton tv
		public function nontonTv(){
			// identifikasi variabel
			$test1=$this -> test1 = "Tv Dihidupkan";
			$test2=$this -> test2 = "Tv Mencari Chanel";
			$test3=$this -> test3 = "Tv Menampilkan Gambar";
			// exsekusi variabel
			return "Keterangan : <br>".$test1."<br>".$test2."<br>".$test3."<br>";
		}
		// membuat fungsi radio
		public function radio(){
			// identifikasi vaiabel
			$test1=$this -> test1 = "Radio Dihidupkan";
			$test2=$this -> test2 = "Radio Mencari Chanel";
			$test3=$this -> test3 = "Radio Mengeluarkan Suara";
			// eksekusi variabel
			return "Keterangan : <br>".$test1."<br>".$test2."<br>".$test3."<br>";
		}
	}

	// membuat class MobilBMWberaksi
	class MobilMBWberaksi
	{
		// membuat properti
		private $test1;
		// membuat fungsi nnonton tv
		public function nontonTv(){
			// identifikasi variabel
			$test1=$this -> test1 = "Tv Dihidupkan";
			$test2=$this -> test2 = "Tv Mencari Chanel";
			$test3=$this -> test3 = "Tv Menampilkan Gambar";
			// eksekusi variabel
			return "Keterangan : <br>".$test1."<br>".$test2."<br>".$test3."<br>";
		}

		// membuat fungsi hidupkanMobil
		public function HidupkanMobil(){
			// identifikasi variabel
			$test1=$this -> test1 = "Mobil Dihidupkan";
			// eksekusi variabel
			return "Keterangan : <br>".$test1."<br>";
		}
		// membuat fungsi matikanMobil
		public function MatikanMobil(){
			// identifikasi variabel
			$test1=$this -> test1 = "Mobil Mati";
			// eksekusi variabel
			return "Keterangan : <br>".$test1."<br>";
		}
		// membuat fungsi ubahGigi
		public function ubahGigi(){
			// identifikasi variabel
			$test1=$this -> test1 = "Maaf Ini Matic";
			// eksekusi variabel
			return "Keterangan : <br>".$test1."<br>";
		}
	}
	// membuat inherit dari class mobilLengkap
	class MobilBMW extends mobilLengkap
	{
		
	}
	echo "<h2>Class Mobill</h2>";
	// panggil inherit dan simpan di sebuah variabel
	$coba1=new MobilBMW();
	// panggil fungsi nonton tv
	$tv=$coba1 -> nontonTv();
	// eksekusi variabel
	echo $tv;

	echo "<h2>Class MobillBMWberaksi</h2>";
	// panggil class MobilBMWberaksi
	$coba2=new MobilMBWberaksi();
	// panggil semua fungsi dari class MobilMBWberaksi dan simpan di sebuah variabel
	$on=$coba2 -> HidupkanMobil();
	$off=$coba2 -> MatikanMobil();
	$turn=$coba2 -> ubahGigi();
	// eksekusi variabel
	echo $on;
	echo $off;
	echo $turn;
 ?>