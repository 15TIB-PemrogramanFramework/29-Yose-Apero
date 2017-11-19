  <?php $this->load->view('templates/Header'); ?>
<?php foreach($hasil as $data){
    $username[] = $data->username;
    $jumlah_barang[] = (float) $data->jumlah_barang;
  }
  ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>
      <canvas id="grafikBatang" width="1000" height="280"></canvas>
      <script type="text/javascript" src="<?php echo base_url()."assets/";?>vendor/chart.js/Chart.min.js"></script>
      
      <script>
        var ctx = document.getElementById("grafikBatang").getContext('2d');
        var myChart = new Chart(ctx, {
          type: 'bar',
          data: {
            labels: <?php echo json_encode($username);?>,
            datasets: [{
              label: ' Jumlah Barang',
              data: <?php echo json_encode($jumlah_barang); ?>,
              backgroundColor: [
              'rgba(255, 99, 132, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(255, 206, 86, 0.2)',
              'rgba(75, 192, 192, 0.2)',
              'rgba(153, 102, 255, 0.2)',
              'rgba(255, 159, 64, 0.2)'
              ],
              borderColor: [
              'rgba(255,99,132,1)',
              'rgba(54, 162, 235, 1)',
              'rgba(255, 206, 86, 1)',
              'rgba(75, 192, 192, 1)',
              'rgba(153, 102, 255, 1)',
              'rgba(255, 159, 64, 1)'
              ],
              borderWidth: 1
            }]
          },
          options: {
            scales: {
              yAxes: [{
                ticks: {
                  beginAtZero:true
                }
              }]
            }
          }
        });
      </script>
    </div>
   <?php $this->load->view('templates/Footer'); ?>