<?php 
	//Declare class
	class pilihJurusanMIPA {
		// properties
		public $Nama;
		public $Asal;
		public $mm;
		public $fisika;
		public $inggris;
		public $biologi;
		public $kimia;

		// Membuat Fungsi untuk menentukan jurusan informatika
		public function informatika() {
			if ($this -> mm > 85 && $this -> inggris > 85) {
				$hasil = "Rekomendasi";
			} else {
				$hasil = "Salah Jurusan";
			}
			return $hasil;
		}

		// Membuat Fungsi untuk menentukan jurusan teknik
		public function teknik() {
			if ($this -> fisika > 85 && $this -> mm > 85) {
				$hasil = "Rekomendasi";
			} else {
				$hasil = "Salah Jurusan";
			}
			return $hasil;
		}

		// Membuat Fungsi untuk menentukan jurusan kesehatan
		public function kesehatan() {
			if ($this -> biologi > 85 && $this -> kimia > 85) {
				$hasil = "Rekomendasi";
			} else {
				$hasil = "Salah Jurusan";
			}
			return $hasil;
		}

		// Membuat Fungsi untuk menghitung rata rata 
		public function avg() {
			$a=$this -> mm;
			$b=$this -> fisika;
			$c=$this -> kimia;
			$d=$this -> biologi;
			$e=$this -> inggris;
			$avg=($a+$b+$c+$d+$e)/5;
			return $avg;
		}

		// Membuat Fungsi untuk menentukan perkuliahan 
		public function univ($avg) {
			if ($avg>=85) {
				$hasil = "Politeknik Negeri Jember";
			} else if ($avg<85 && $avg>=75) {
				$hasil = "Univ Negeri";
			} else if ($avg<75) {
				$hasil = "Univ Swasta";
			}
			return $hasil;
		}

		
	}


	//Membuat instance
	$person = new pilihJurusanMIPA ();
	echo $person -> nama="Faiz Muazzam";
	echo "<br>";
	echo $person -> asal="Tulungagung";
	echo "<br>";
	echo $person -> mm="100";
	echo "<br>";
	echo $person -> fisika="95";
	echo "<br>";
	echo $person -> kimia="80";
	echo "<br>";
	echo $person -> inggris="90";
	echo "<br>";
	echo $person -> biologi="80";
	echo "<br>";
	echo $person -> kimia="80";
	echo "<br>";

	echo "Jurusan Informatika <br>";
	echo $person -> informatika();
	echo "<br>";
	echo "Jurusan Teknik <br>";
	echo $person -> teknik();
	echo "<br>";
	echo "Jurusan kesehatan <br>";
	echo $person -> kesehatan();
	echo "<br>";
	echo "Rata Rata";
	$avg=$person -> avg();
	echo $avg;
	echo "<br>";
	echo "Rekomendasi";
	echo $person -> univ($avg);
	echo "<br>";





 ?>