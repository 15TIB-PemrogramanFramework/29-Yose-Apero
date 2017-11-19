
<?php $this->load->view('templates/Header_admin'); ?>

<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Data</a>
      </li>
      <li class="breadcrumb-item active">Pesanan</li>
    </ol>
    <table id="example" class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>Username</th>
          <th>Nama Toko</th>
          <th>Aksi</th>

          
          
        </tr>

      </thead>
      <tbody>
        <?php foreach ($pesan as $key => $value) { ?>
        <tr>
          <td><?php echo $value->username;  ?></td>
          <td><?php echo $value->nama_toko; ?></td>
          <td><a href="<?php echo site_url('Admin_Controller/lihatbarang/'.$value->username); ?>" class="btn"> <i class="fa fa-eye">  </i></a> 
          <a href="<?php echo site_url('Admin_Controller/ambil_distribusi/'.$value->username); ?>" class="btn btn-success"> <i class="fa fa-plane"> </i>
             </a>
          </td>
          
          
         
        </tr>
        <?php } ?>
      </tbody>
    </table>

    </div>
    <?php $this->load->view('templates/Footer_admin'); ?>
    <script type="text/javascript">
    $(document).ready(function(){
      $('#example').DataTable();
    });
  </script>
