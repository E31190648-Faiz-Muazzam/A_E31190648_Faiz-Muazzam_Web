<?php 
/**
 * author by Faiz Muazzam
 */
// soal 1
class Laptop
{
	// buat properties dan method (soal 2 dan 3)
	public $pemilik;
	public $merek;

	// buat method (soal no 4)
	public function hidupkan_laptop(){
		$keterangan = "Hidupkan Laptop ".$this->merek." punya ".$this->pemilik;
		return $keterangan;
	}

	// buat method (soal no 3)
	public function matikan_laptop(){
		$keterangan = "Matikan Laptop ".$this->merek." punya ".$this->pemilik;
		return $keterangan;
	}

	// buat method (soal no 6)
	public function restart_laptop(){
		$keterangan1 = "Hidupkan Laptop ".$this->merek." punya ".$this->pemilik;
		$keterangan2 = "Matikan Laptop ".$this->merek." punya ".$this->pemilik;
		return $keterangan1.". ".$keterangan2;
	}

}
 // membuat 3 objek (soal 7)
$faiz= new Laptop();
$naufal= new Laptop();
$aji= new Laptop();

// set value objek faiz
$faiz -> pemilik ='A';
$faiz -> merek ='Asus';

// set value objek faiz
$naufal -> pemilik ='B';
$naufal -> merek ='Acer';

// set value objek faiz
$aji -> pemilik ='C';
$aji -> merek ='Lenovo';

// memanggil dan eksekusi method 
echo $faiz -> hidupkan_laptop()."<br>";
echo $naufal -> matikan_laptop()."<br>";
echo $aji -> restart_laptop()."<br>";

?>