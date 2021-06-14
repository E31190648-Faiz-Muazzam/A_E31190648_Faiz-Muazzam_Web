<?php 
	//memanggil session 
    $getUser = $this->session->userdata('session_user');
    $getGrup = $this->session->userdata('session_grup');
    $getNama = $this->session->userdata('session_nama');
    // berfungsi untuk menentukan login sebagai...
    foreach($admin as $grup){
    	$id_grub = $grup->id_grub;
    	if ($id_grub == $getGrup){
    		$grub = $grup->grub;
    	}
    }
 ?>
<!-- Tampilan User -->
<div class="card text-center">
  <div class="card-header">
    Welcome
  </div>
  <div class="card-body">
    <h5 class="card-title font-weight-bold">Hello <?= $getNama; ?>!</h5>  
    <p class="card-text mt-3">Selamat Datang di website sederhana ini, semoga anda menikmati semua fitur futur yang di berikan</p>
    <p class="card-text">Anda Login Sebagai : <b class=""><?= $grub; ?></b></p>
    <a href="<?= base_url('Mahasiswa') ?>" class="btn btn-success mt-3">Go To Home...</a>
  </div>
</div>
