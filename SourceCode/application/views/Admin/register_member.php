<?php $this->load->view('templates/Header_admin'); ?>
<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Daftar Barang <?php echo $nama_member ; ?></a>
      </li>
      
    </ol>

<form role="form" action="<?php echo $aksi; ?>"  method="POST">
                            <fieldset>
                               <div class="form-group">
                                    <input class="form-control" placeholder="Nama Member" name="nama_member" required value="<?php echo $nama_member; ?>">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="username" required value="<?php echo $username; ?>">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" required value="<?php echo $password; ?>">
                                </div>
                                 <div class="form-group">
                                    <input class="form-control" placeholder="Nama Toko" name="nama_toko" required value="<?php echo $nama_toko; ?>">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Alamat" name="alamat_member" required value="<?php echo $alamat_member; ?>">
                                </div>
                               <button type="submit" class="btn btn-primary"><?php echo $button;?></button>
                            </fieldset>
                        </form>
                        
    <?php $this->load->view('templates/Footer_admin'); ?>
