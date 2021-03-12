<?php
/**
* author by Faiz Muazzam
 */
class Car {

	//private
	private $model;
	// agar dapat menampilkan nilai dari property private maka nilai harus di deklarasikan terlebih dulu, contoh
	// private $model="Marcedes Benz"; 

	public function getModel()
	{
		return "The car model is " . $this -> model;
	}
}

$mercedes = new Car();

////akses property dari luar class.
// maka akan terjadi fatal eror
$mercedes -> model = "Mercedes benz";
echo $mercedes -> getModel();

?>