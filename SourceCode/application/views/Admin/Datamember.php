
<?php $this->load->view('templates/Header_admin'); ?>

<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Data</a>
      </li>
      <li class="breadcrumb-item active">Member</li>
    </ol>
    
    <table id="example" class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>Username</th>
          <th>Nama Member</th>
          <th>Nama Toko</th>
          <th>Alamat Member</th>
          <th>Aksi</th>
        </tr>

      </thead>
      <tbody>
        <?php foreach ($member as $key => $value) { ?>
        <tr>
          <td><?php echo $value->username;  ?></td>
          <td><?php echo $value->nama_member;  ?></td>
          <td><?php echo $value->nama_toko;  ?></td>
          <td><?php echo $value->alamat_member;  ?></td>
          <td><a href="<?php echo site_url('Admin_Controller/delete_member/'.$value->username); ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
         
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
