<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Login Member</title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url()."assets/"; ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link src="<?php echo base_url()."assets/";?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url()."assets/"; ?>css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login Member</div>
      <div class="card-body">


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
                        
   <div class="text-center">
                    
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url()."assets/";?>vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url()."assets/";?>vendor/popper/popper.min.js"></script>
  <script src="<?php echo base_url()."assets/";?>vendor/bootstrap/js/bootstrap.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url()."assets/";?>vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
