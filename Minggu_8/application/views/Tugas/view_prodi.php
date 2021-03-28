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
	<h1>Data Prodi : </h1>
	<table>
		<tr>
			<td>No</td>
			<td>Nama</td>
			<td>Keterangan</td>
		</tr>
		<?php foreach ($Prodi as $row) : ?>
		<tr>
			<td><?= $x++; ?></td>
			<td><?= $row['prodi']; ?></td>
			<td><?= $row['keterangan']; ?></td>
		</tr>
		<?php endforeach; ?>

	</table>
</body>
</html>