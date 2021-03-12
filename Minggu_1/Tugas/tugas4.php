<?php 
	/**
	 * author by Faiz Muazzam
	 */
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

	echo "<h1>Data dan Nilai</h1>";
	//Membuat instance
	$person = new pilihJurusanMIPA ();
	echo "Nama : ".$person -> nama="Faiz Muazzam";
	echo "<br>";
	echo "Asal :".$person -> asal="Tulungagung";
	echo "<br>";
	echo "Nilai Matematika :" .$person -> mm="100";
	echo "<br>";
	echo "Nilai Fisika :" .$person -> fisika="95";
	echo "<br>";
	echo "Nilai Kimia : " .$person -> kimia="80";
	echo "<br>";
	echo "Nilai Bhs. Inggris : " .$person -> inggris="90";
	echo "<br>";
	echo "Nilai Biologi : " .$person -> biologi="80";
	echo "<br>";

	echo "<h3>Jurusan Informatika </h3>";
	echo $person -> informatika();
	echo "<br>";
	echo "<h3>Jurusan Teknik </h3>";
	echo $person -> teknik();
	echo "<br>";
	echo "<h3>Jurusan kesehatan </h3>";
	echo $person -> kesehatan();
	echo "<br>";
	echo "<h4>Rata Rata</h4>";
	$avg=$person -> avg();
	echo $avg;
	echo "<br>";
	echo "<h4>Rekomendasi Sekolah :</h4>";
	echo $person -> univ($avg);
	echo "<br>";
 ?>