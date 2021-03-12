<?php 
	/**
	 * author by Faiz Muazzam
	 */
	// membuat class
	class Kalkulator{
	// deklarasi properti (private)
	private $nilai1 = 10;
	private $nilai2 = 8;
	private $nilai3 = 7;
	
	// membuat fungsi tambah
		function tambah()
		{
			// menghitung jumlah
			$hasil = $this -> nilai1 + $this -> nilai2;
			return $hasil = "".$this -> nilai1." + ".$this -> nilai2." = ".$hasil; 
		}
		// membuat fungsi kurang
		function kurang()
		{
			// menghitung selisih
			$hasil = $this -> nilai2 - $this -> nilai3;
			return $hasil = "".$this -> nilai2." - ".$this -> nilai3." = ".$hasil; 
		}
		// membuat fungsi bagi
		function bagi()
		{
			// menghitung pembagian
			$hasil = $this -> nilai3 / $this -> nilai1;
			return $hasil = "".$this -> nilai3." / ".$this -> nilai1." = ".$hasil; 
		}
		// membuat fungsi perkalian
		function kali()
		{
			// menghitung perkalian
			$hasil = $this -> nilai3 * $this -> nilai2  * $this -> nilai1;
			return $hasil = "".$this -> nilai3." * ".$this -> nilai2." * ".$this -> nilai1." = ".$hasil; 
		}
	} 
	//Membuat instance
	$Objek = new Kalkulator();

	//set value objek
	$hitung1=$Objek -> tambah();
	$hitung2=$Objek -> kurang();
	$hitung3=$Objek -> bagi();
	$hitung4=$Objek -> kali();

	// Eksekusi 
	echo "<h2>Hasil : </h2>";
	echo "Hasil Tambah : ".$hitung1."<br>";
	echo "Hasil Kurang : ".$hitung2."<br>";
	echo "Hasil Bagi : ".$hitung3."<br>";
	echo "Hasil Kali : ".$hitung4."<br>";

 ?>