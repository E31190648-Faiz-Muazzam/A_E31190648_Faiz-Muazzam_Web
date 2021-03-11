<?php
class kendaraan {
	public $jeniskendaraan;
	public $jumlahroda;
	public $jenismerk;
	public $bahanbakar;
	public $harga;
	public $tahunpembuatan;

	public function dapatSubsidi(){
	if($this -> tahunpembuatan < 2005 && $this -> bahanbakar == "Premium")
		$status = 'Ya';
		else $status = 'Tidak';
		return $status;
	}

	public function hargaSecond() {
		if ($this -> tahunpembuatan > 2010) {
			# code...
		}
	}

}

$lambo = new kendaraan ();
echo "<h1>Data kendaraan</h1>";
echo "Merek : " .$lambo -> jenismerk="lamborghini";
echo "<br>";
echo "Tahun Pembuatan : " .$lambo -> tahunpembuatan=2020;
echo "<br>";
echo "Bahan Bakar : " .$lambo -> bahanbakar="Pertamax Turbo";
echo "<br>";
echo "Harga : " .$lambo -> harga="7000000000";
echo "<br>";


echo "<h3>Mendapat Subsidi ?</h3>";
echo $lambo -> dapatSubsidi();

$toyota = new kendaraan ();
echo "<h1>Data kendaraan</h1>";
echo "Merek : " .$toyota -> jenismerk="Toyota";
echo "<br>";
echo "Tahun Pembuatan : " .$toyota -> tahunpembuatan=2003;
echo "<br>";
echo "Bahan Bakar : " .$toyota -> bahanbakar="Premium";
echo "<br>";


echo "<h3>Mendapat Subsidi ?</h3>";
echo $toyota -> dapatSubsidi();


?>