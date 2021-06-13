<!-- Desain Tampilan Untuk Home Mahasiswa -->
<div class="row">
	<div class="col-lg-7">
		<div class="p-5">
			<!-- Membuat Judul Content -->
			<div class="text-center">
				<h1 class="h4 text-gray-900 mb-4">Tambah User</h1>
			</div>
			<!-- Membuat form yang di gunakan untuk mengingput data -->
			<!-- disini jangan lupa deklarasikan nama yang di gunakan untuk menyimpan data inputkan ke post atauput get  -->
				<form class="user" action="<?php echo base_url('Grup/input_grup');?>" method="POST">
					<!-- membuat from untuk input password bertujuan untuk mengintputkan Password -->
					<div class="form-group">
						<input type="text" class="form-control form-control-user" id="nameGrup" name="nameGrup" placeholder="Create New Grup..." require>
					</div>
					<!-- membuat tombol sumbit bertujuan untuk mengeksekusi inputan -->
					<input type="submit" class="btn btn-success btn-icon-split p-2" name="submit" value="Create">
				</form>
				<hr>
				<div class="text-center">
					<a class="small" href="<?= base_url(); ?>Mahasiswa/index">Kembali</a>
				</div>
			</div>
		</div>
	</div>

