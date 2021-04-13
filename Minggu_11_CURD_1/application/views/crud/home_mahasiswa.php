<!-- Desain Tampilan Untuk Home Mahasiswa -->
<div class="card shadow mb-4">
	<!-- Membuat Judul -->
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">DataTables User</h6>
	</div>
	<!-- Membuat badan untuk tabel -->
		<div class="card-body">
			<!-- Implementasi tabel resonsive -->
			<div class="table-responsive">
				<!-- Membuat Tabel -->
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<!-- Membuat kepala tabel -->
				<thead>
					<!-- Membuat Baris -->
					<tr>
						<!-- Membuat Kolom -->
						<th>No</th>
						<th>Username</th>
						<th>Nama</th>
						<th>Grup</th>
						<th></th>
					</tr>
				</thead>
				<!-- Membuat Footer Tabel -->
				<tfoot>
					<!-- Membuat Baris -->
					<tr>
						<!-- Membuat kolom -->
						<th>No</th>
						<th>Username</th>
						<th>Nama</th>
						<th>Grup</th>
						<th></th>
					</tr>
				</tfoot>
				<tbody>
					<!-- memanggil data dari data base yang dimana sudah di simpan di variabel $data dalam controller -->
					<?php 
						$no = 1; //deklarasi variabel untuk memulai tabel
						// membuat looping untuk menampilkan data array
						foreach($user as $baris) : //memanggil index array dengan menggunakan elemen yang ada di variabel $data
					?>
					<!-- membuat baris -->
					<tr>
						<!-- membuat dan mengisi kolom -->
						<td><?php echo $no++; ?></td>
						<!-- menampilkan username -->
						<td><?php echo $baris->username; ?></td>
						<!-- menampilkan nama -->
						<td><?php echo $baris->nama; ?></td>
						<!-- menampilkan grub -->
						<td><?php echo $baris->grub; ?></td>
						<td></td>
					</tr>
					<!-- mengakhiri looping -->
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
		<!-- membuat tombol untuk memanggail fungsi tambah yang ada di class Mahasiswa, yang dimana setelah memanggil fungsi tersebut aplikasi akan mengarah ke halaman tambah_mahasiswa -->
		<a href="<?= base_url('Mahasiswa/tambah'); ?>" class="btn btn-success btn-icon-split">
			<span class="text">Tambah Data</span>
		</a>
	</div>
</div>
