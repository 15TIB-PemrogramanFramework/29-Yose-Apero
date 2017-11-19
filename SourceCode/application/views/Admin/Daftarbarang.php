<?php $this->load->view('templates/Header_admin'); ?>

<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Daftar Barang <?php echo $nama_member ; ?></a>
      </li>
      
    </ol>
    <table id="example" class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>Nama Barang</th>
          <th>Jumlah Barang</th>
          <th>Status Barang</th>
          
          
        </tr>

      </thead>
      <tbody>
        <?php foreach ($ListBarang as $key => $value) { ?>
        <tr>
          <td><?php echo $value->nama_barang;  ?></td>
          <td><?php echo $value->jumlah_barang;  ?> <?php echo $value->satuan_barang?></td>
          <td><?php echo $value->status;  ?></td>
          
          
         
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
