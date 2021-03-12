<?php 
	/**
	 * author by Faiz Muazzam
	 */
	class Kalkulator{
	
	private $nilai1 = 10;
	private $nilai2 = 8;
	private $nilai3 = 7;
	
		function tambah()
		{
			$hasil = $this -> nilai1 + $this -> nilai2;
			return $hasil = "".$this -> nilai1." + ".$this -> nilai2." = ".$hasil; 
		}
		
		function kurang()
		{
			$hasil = $this -> nilai2 - $this -> nilai3;
			return $hasil = "".$this -> nilai2." - ".$this -> nilai3." = ".$hasil; 
		}
		
		function bagi()
		{
			$hasil = $this -> nilai3 / $this -> nilai1;
			return $hasil = "".$this -> nilai3." / ".$this -> nilai1." = ".$hasil; 
		}
		
		function kali()
		{
			$hasil = $this -> nilai3 * $this -> nilai2;
			return $hasil = "".$this -> nilai3." * ".$this -> nilai2." = ".$hasil; 
		}
	} 
	//Membuat instance
	$tambah = new Kalkulator();
	$kurang = new Kalkulator();
	$bagi = new Kalkulator();
	$kali = new Kalkulator();

	//set value objek
	$hasil1=$tambah -> tambah();
	$hasil2=$kurang -> kurang();
	$hasil3=$bagi -> bagi();
	$hasil4=$kali -> kali();

	echo "Hasil Tambah : ".$hasil1."<br>";
	echo "Hasil Kurang : ".$hasil2."<br>";
	echo "Hasil Bagi : ".$hasil3."<br>";
	echo "Hasil Kali : ".$hasil4."<br>";

 ?>