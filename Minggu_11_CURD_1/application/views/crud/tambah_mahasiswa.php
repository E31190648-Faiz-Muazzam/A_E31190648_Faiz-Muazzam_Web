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
				<form class="user" action="<?php echo base_url('Mahasiswa/input');?>" method="POST">
					<!-- membuat from untuk input text bertujuan untuk mengintputkan username -->
					<div class="form-group">
						<input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username Maximal 10 Character" require>
					</div>
					<!-- membuat from untuk input password bertujuan untuk mengintputkan Password -->
					<div class="form-group">
						<input type="password" class="form-control form-control-user" id="pass" name="pass" placeholder="Password Maximal 6 Character" require>
					</div>
					<!-- membuat from untuk input text bertujuan untuk mengintputkan Nama -->
					<div class="form-group">
						<input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Full Name" require>
					</div>
					<!-- membuat from option bertujuan untuk mengintputkan grup -->
					<div class="form-group">
						<select id="grup" class="form-control" name="grup" require>
							<option value="0">Pilih Grup User</option>
							<option value="1">Admin</option>
							<option value="2">User</option>
						</select>
					</div>
					<!-- membuat tombol sumbit bertujuan untuk mengeksekusi inputan -->
					<input type="submit" class="btn btn-success btn-icon-split p-2" name="submit" value="Tambah">
				</form>
				<hr>
				<div class="text-center">
					<a class="small" href="<?= base_url(); ?>Mahasiswa/index">Kembali</a>
				</div>
			</div>
		</div>
	</div>

