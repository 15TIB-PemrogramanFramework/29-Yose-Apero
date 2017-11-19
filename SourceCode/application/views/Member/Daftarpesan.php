
<?php $this->load->view('templates/Header'); ?>

<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Daftar</a>
      </li>
      <li class="breadcrumb-item active">Pemesanan</li>
    </ol>
    <table id="example" class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>Username</th>
          <th>NAMA BARANG</th>
          <th>Jumlah Barang</th>
          <th>Tanggal</th>
          
        </tr>

      </thead>
      <tbody>
        <?php foreach ($ListBarang as $key => $value) { ?>
        <tr>
          <td><?php echo $value->username;  ?></td>
          <td><?php echo $value->nama_barang;  ?></td>
          <td><?php echo $value->jumlah_barang;  ?> <?php echo $value->satuan_barang; ?></td>
          <td><?php echo $value->tanggal;  ?></td>
          
         
        </tr>
        <?php } ?>
      </tbody>
    </table>

    </div>
    <?php $this->load->view('templates/Footer'); ?>
    <script type="text/javascript">
    $(document).ready(function(){
      $('#example').DataTable();
    });
  </script>
