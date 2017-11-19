  <?php $this->load->view('templates/Header_distributor'); ?>

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Pengiriman</a>
        </li>
   <table id="example" class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>Nama Member</th>
          <th>Status Pengiriman</th>
          <th>Tanggal Pengiriman</th>
          <th>Aksi</th>
          
          
        </tr>

      </thead>
      <tbody>
        <?php foreach ($kirim as $key => $value) { ?>
        <tr>
          <td><?php echo $value->nama_member;  ?></td>
          <td><?php echo $value->status_pengiriman;  ?></td>
          <td><?php echo $value->tgl_pengiriman;  ?></td>
          <td><a href="<?php echo site_url('Distributor_Controller/ambil_data/'.$value->username); ?>" class="btn btn-info"><i class="fa fa-pencil"></i></a></td>
          
         
        </tr>
        <?php } ?>
      </tbody>
    </table>

    </div>
    <?php $this->load->view('templates/Footer_distributor'); ?>
    <script type="text/javascript">
    $(document).ready(function(){
      $('#example').DataTable();
    });
  </script>
