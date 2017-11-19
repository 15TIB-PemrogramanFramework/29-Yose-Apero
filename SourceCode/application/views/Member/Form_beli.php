<?php $this->load->view('templates/Header'); ?>
<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Form</a>
      </li>
      <li class="breadcrumb-item active">Pemesanan</li>
    </ol>
    

   	<form action="<?php echo $aksi; ?>" method="POST">
	<div class="form-group">
		<label>Nama Barang :</label>
		<label><?php echo $nama_barang; ?></label>
	</div>
	<div class="form-group">
		<label>Jumlah Barang :</label>
		<input type="text" name="jumlah_barang" class="form-control" placeholder="Inputkan Jumlah Barang" required value="">
	</div>
	<input type="hidden" name="id_barang" value="<?php echo $id_barang; ?>">
	<input type="hidden" name="status" value="Not Done">
	<input type="hidden" name="username" value="<?php echo $this->session->userdata('username'); ?>">
	
	<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
</form>


    </div>
    <?php $this->load->view('templates/Footer'); ?>