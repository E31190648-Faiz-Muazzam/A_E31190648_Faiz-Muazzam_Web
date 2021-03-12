<?php
/**
* author by Faiz Muazzam
*/
//Declare class
class kendaraan {
	//properties
	public $jeniskendaraan;
	public $jumlahroda;
	public $jenismerk;
	public $bahanbakar;
	public $harga;
	public $tahunpembuatan;

	// Membuat Fungsi untuk menentukan Subsidi (Soal No 2)
	public function dapatSubsidi(){
	if($this -> tahunpembuatan < 2005 && $this -> bahanbakar == "Premium")
		$status = 'Ya';
		else $status = 'Tidak';
		return $status;
	}
	// Membuat Fungsi untuk menentukan Harga Second (Soal No 3)
	public function hargaSecond() {
		if ($this -> tahunpembuatan >= 2010) {
			$hargaBaru= $this -> harga;
			$hargaBekas= ($hargaBaru*20)/100;
		} else if ($this -> tahunpembuatan < 2010 && $this -> tahunpembuatan >= 2005) {
			$hargaBaru= $this -> harga;
			$hargaBekas= ($hargaBaru*30)/100;
		} else if ($this -> tahunpembuatan < 2005) {
			$hargaBaru= $this -> harga;
			$hargaBekas= ($hargaAwal*40)/100;
		}
		return $hargaBekas;
	}

}

//Membuat instance
$lambo = new kendaraan ();

echo "<h1>Data kendaraan</h1>";
//Set values and get values
echo "Jenis Kendaraan : " .$lambo -> jeniskendaraan="Mobil";
echo "<br>";
//Set values and get values
echo "Roda : " .$lambo -> jumlahroda="4";
echo "<br>";
//Set values and get values
echo "Merek : " .$lambo -> jenismerk="lamborghini";
echo "<br>";
//Set values and get values
echo "Tahun Pembuatan : " .$lambo -> tahunpembuatan=2020;
echo "<br>";
//Set values and get values
echo "Bahan Bakar : " .$lambo -> bahanbakar="Pertamax Turbo";
echo "<br>";
//Set values and get values
echo "Harga Baru: " .$lambo -> harga="10000"; echo " $";
echo "<br>";
//Set values and get methods hargaSecond
echo "Harga Second : " .$lambo -> hargaSecond(); echo " $";
echo "<br>";


echo "<h3>Mendapat Subsidi ?</h3>";
// get methods
echo $lambo -> dapatSubsidi();

echo "<h1>Data kendaraan</h1>";
//Membuat instance
$toyota = new kendaraan ();
//Set values and get values
echo "Jenis Kendaraan : " .$toyota -> jenismerk="Mobil";
echo "<br>";
//Set values and get values
echo "Roda : " .$toyota -> jumlahroda="8";
echo "<br>";
//Set values and get values
echo "Merek : ".$toyota -> jenismerk="Toyota";
echo "<br>";
//Set values and get values
echo "Tahun Pembuatan : ".$toyota -> tahunpembuatan=2005;
echo "<br>";
//Set values and get values
echo "Bahan Bakar : ".$toyota -> bahanbakar="Premium";
echo "<br>";
//Set values and get values
echo "Harga Baru : ".$toyota -> harga="2000"; echo " $";
echo "<br>";
//Set values and get values
echo "Harga Second : ".$toyota -> hargaSecond(); echo " $";
echo "<br>";


echo "<h3>Mendapat Subsidi ?</h3>";
// get methods
echo $toyota -> dapatSubsidi();


?>