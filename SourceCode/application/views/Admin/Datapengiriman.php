<?php $this->load->view('templates/Header_admin'); ?>

<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Daftar Pengiriman</a>
      </li>
      
    </ol>
    <table id="example" class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>Nama Member</th>
          <th>Nama Pengirim</th>
          <th>Status Pengiriman</th>
          <th>Tanggal Pengiriman</th>
          
          
        </tr>

      </thead>
      <tbody>
        <?php foreach ($kirim as $key => $value) { ?>
        <tr>
          <td><?php echo $value->nama_member;  ?></td>
          <td><?php echo $value->nama_dis;  ?> </td>
          <td><?php echo $value->status_pengiriman;  ?></td>
           <td><?php echo $value->tgl_pengiriman;  ?></td>
          
          
         
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
