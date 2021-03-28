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
	<h1>Data Angkatan :</h1>
	<table>
		<tr>
			<td>No</td>
			<td>Tahun</td>
		</tr>
		<?php foreach ($Angkatan as $row) : ?>
		<tr>
			<td><?= $x++; ?></td>
			<td><?= $row['tahun']; ?></td>
		</tr>
		<?php endforeach; ?>

	</table>
</body>
</html>