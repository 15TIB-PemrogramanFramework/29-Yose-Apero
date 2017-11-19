<?php $this->load->view('templates/Header_admin'); ?>

<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Tambah Barang</a>
      </li>
      
    </ol>

<form action="<?php echo $aksi; ?>" method="POST">
	<div class="form-group">
		<label>NAMA Barang :</label>
		<input type="text" name="nama_barang" class="form-control" placeholder="Inputkan Nama Barang" required value="<?php echo $nama_barang; ?>">
	</div>
	<div class="form-group">
		<label>Harga Barang :</label>
		<input type="text" name="harga_barang" class="form-control" placeholder="Inputkan Harga Barang" required value="<?php echo $harga_barang; ?>">
	</div>
	<div class="form-group">
		<label>Satuan Barang :</label>
		<input type="text" name="satuan_barang" class="form-control" placeholder="Inputkan Satuan Barang" required value="<?php echo $satuan_barang; ?>">
	</div>
	<input type="hidden" name="id_barang" value="<?php echo $id_barang; ?>">
	<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
</form>

 <?php $this->load->view('templates/Footer_admin'); ?>