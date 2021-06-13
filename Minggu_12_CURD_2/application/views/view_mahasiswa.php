<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Prodi</title>
	<style>
		table{
			border-collapse: collapse;
		}
		table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 5px;
        }
	</style>
	<?php $x=1; ?>
</head>
<body>
	<h1>Data Mahasiswa : </h1>
	<table>
		<tr>
			<td>No</td>
			<td>Nama</td>
			<td>Prodi</td>
		</tr>
		<?php foreach ($Mahasiswa as $row) : ?>
		<tr>
			<td><?= $x++; ?></td>
			<td><?= $row['nama']; ?></td>
			<td><?= $row['prodi']; ?></td>
			<td>Edit</td>
			<td>
				<a href="<?php echo base_url('Mahasiswa/edit/'.$baris->id);?>" class="fa faedit">Edit</a>>&nbsp; 
				<a href="<?php echo base_url('Mahasiswa/hapus/'.$baris->id);?>" class="fa fa-times">
			</td>	
		</tr>
		<?php endforeach; ?>

	</table>
	
</body>
</html>