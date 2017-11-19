<?php $this->load->view('templates/Header_admin'); ?>

<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Tambah Distributor</a>
      </li>
      
    </ol>

<form action="<?php echo $aksi; ?>" method="POST">
	<div class="form-group">
		<label>NAMA Distributor :</label>
		<input type="text" name="nama_dis" class="form-control" placeholder="Inputkan nama" required value="<?php echo $nama_dis; ?>">
	</div>
	<div class="form-group">
		<label>Username :</label>
		<input type="text" name="username_dis" class="form-control" placeholder="Inputkan username" required value="<?php echo $username_dis; ?>">
	</div>
	<div class="form-group">
		<label>Password :</label>
		<input type="password" name="password_dis" class="form-control" placeholder="Inputkan password" required value="<?php echo $password_dis; ?>">
	</div>
	<div class="form-group">
		<label>No Hp :</label>
		<input type="text" name="nohp_dis" class="form-control" placeholder="Inputkan No Hp" required value="<?php echo $nohp_dis; ?>">
	</div>
	
	<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
</form>

 <?php $this->load->view('templates/Footer_admin'); ?>