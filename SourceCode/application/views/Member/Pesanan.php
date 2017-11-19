
<?php $this->load->view('templates/Header'); ?>
<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Silahkan</a>
      </li>
      <li class="breadcrumb-item active">Pesan</li>
    </ol>
    <table id="example" class="table table-striped table-bordered">
      <thead>
        <tr>
          
          <th>NAMA BARANG</th>
          <th>HARGA BARANG</th>
          <th>SATUAN BARANG</th>
          <th>PILIHAN</th>
        </tr>

      </thead>
      <tbody>
        <?php foreach ($barang as $key => $value) { ?>
        <tr>
          
          <td><?php echo $value->nama_barang;  ?></td>
          <td><?php echo $value->harga_barang;  ?></td>
          <td><?php echo $value->satuan_barang; ?></td>
          <td><a href="<?php echo site_url('Pesan_Member/ambil/'.$value->id_barang); ?>" class="btn btn-danger"><i class="fa fa-plus"></i></a>
          </td>
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