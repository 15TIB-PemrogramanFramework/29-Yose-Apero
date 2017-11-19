
<?php $this->load->view('templates/Header_admin'); ?>

<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Data</a>
      </li>
      <li class="breadcrumb-item active">Barang</li>
    </ol>
    <div class="row">
  <div class="col-md-12 text-right">
    <a href="<?php echo site_url('Admin_Controller/tambah_barang'); ?>" class="btn btn-primary" style="margin-top:20px; margin-bottom:20px"><i class="fa fa-plus"></i> Tambah</a>
  </div>
</div>
    <table id="example" class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>Nama Barang</th>
          <th>Harga Barang</th>
          <th>Satuan Barang</th>
          <th>Aksi</th>
          
          
        </tr>

      </thead>
      <tbody>
        <?php foreach ($barang as $key => $value) { ?>
        <tr>
          <td><?php echo $value->nama_barang;  ?></td>
          <td><?php echo $value->harga_barang;  ?></td>
          <td><?php echo $value->satuan_barang;  ?></td>
          <td><a href="<?php echo site_url('Admin_Controller/delete_barang/'.$value->id_barang); ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
          
         
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
