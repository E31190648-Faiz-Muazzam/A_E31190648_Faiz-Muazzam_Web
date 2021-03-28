<?php 
echo "<h1>Data Mahasiswa</h1>";
foreach ($Mahasiswa as $row) {
	echo "Nama : ".$row['nama'];
	echo "<br>";
	echo "Prodi : ".$row['prodi'];
	echo "<hr>";
}
	
?>

