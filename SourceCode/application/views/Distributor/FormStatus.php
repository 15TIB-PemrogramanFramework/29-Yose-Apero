<?php $this->load->view('templates/Header_admin'); ?>

<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Update Status</a>
      </li>
      
    </ol>

<form action="<?php echo $aksi; ?>" method="POST">
	<div class="form-group">
		<label>NAMA Member :</label>
		<select class="form_control" name="username">
			
			<?php foreach ($username as $key => $value) { ?>
				<option value="<?php echo $value->username; ?>"><?php echo $value->nama_member; ?></option>
			<?php } ?>
		</select>
		
	</div>
	<div class="form-group">
		<label>Status :</label>
		<select class="form_control" name="status_pengiriman">
			<option value="Belum Dikirim">Not Done</option>
			<option value="Selesai">Done</option>
		</select>
	</div>
	
	<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
</form>

 <?php $this->load->view('templates/Footer_admin'); ?>