
<!DOCTYPE html>
<html>
<head>
  <!-- head -->
	<script src="<?php echo base_url('assets/grafik/js/jquery.js')?>"></script>
	<link href="<?php echo base_url('assets/grafik/css/bootstrap.css')?>" rel="stylesheet">
	<script type="text/javascript">
		var this_is_the_time = 0;
	</script>
	
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="../../index2.html" class="navbar-brand"><b>PEMIRA </b>2020</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>
		<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
			<li><a href="<?php echo site_url('pemira/Mpm') ?>">HOME <span class="sr-only">(current)</span></a></li>
            <li class="active"><a>CAPRES BEM <span class="sr-only">(current)</span></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">CALON MPM <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">P4</a></li>
                <li><a href="#">TM</a></li>
                <li><a href="#">MI</a></li>
                <li><a href="#">MK</a></li>
                <li><a href="#">PMO</a></li>
                <li><a href="#">TKBG</a></li>
              </ul>
            </li>
          </ul>
         
        </div>
		<div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="<?php echo site_url('Login/logout') ?>" ><i class="fa fa-power-off"></i> Log Out</a>
          </li>
        </ul>
      </div>
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
   <!-- Main content -->
    <section class="content">
    <div class="container">
		<div class="callout callout-danger">
          <h4 style="text-align: center">HASIL PEMILIHAN CAPRES BEM</h4>
        </div>
      <div class="row">
		<?php $x=0; $data=""; $nama_calon=""; $intX="";?>
		<?php foreach ($daftarcapres as $datacapres):?>
		<?php
			$data .= "{
						y: ".$datacapres->total.",
						color: colors['". $x ."'],
						drilldown: {
							name: '".$datacapres->nama."',
							color: colors[ '".$x."']
							}
					},";
					
			$nama_calon .= "'". $datacapres->nama . "',";
			// $intX .= "'". $x . "',";
			$x++;
		?>
		
        <div class="col-lg-4 col-xs-8">
          <!-- small box -->
			<div class="info-box bg-aqua">
				<span class="info-box-icon">
					<img
						style="height:100px; width:90px"
						src="<?php echo base_url()."assets/img/capres/".$datacapres->foto ?>" 
						alt="Capres">
				</span>

				
				<div class="info-box-content">
				  <h4><b><?php echo $datacapres->nama ?></b></h4>
				  
				  <h2><span id="totalsuara" urutan="<?php echo $datacapres->total ?>" class="count" >0</span></h2>
				</div>
			</div>
        </div>
		
		<?php endforeach; ?>
		
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
           
            <div class="tab-content no-padding">
              <canvas id="myChart" width="400" style="display:none" height="150"></canvas>
            </div>
          </div>
          <!-- /.nav-tabs-custom -->
		</section>
		</div>
	</section>
      <!-- Main content -->
     
	
  </div>
  <!-- /.content-wrapper -->
  <!--footer-->
  <?php $this->load->view("_partials/footer.php") ?>
</div>
</div>
<!-- ./wrapper -->

<!--js-->
<?php $this->load->view("_partials/js.php") ?>
<?php $this->load->view("_partials/js_grafik.php") ?>
<!--var data = [<!--?php echo $data; ?>];-->
<!--var xInt = [<!--?php echo substr($intX, 0, -1);?>];-->
<script>

	$('.count').each(function () {
		// var y = $(this).text();
		var y = $(this).attr("urutan");
		// alert(npk);
		$(this).prop('Counter',0).animate({
			Counter: y
		}, {
			duration: y*1000,
			easing: 'linear',
			step: function (now) {
				$(this).text(Math.ceil(now));
			},
			complete: function(){
				this_is_the_time += 1;
				
				if(this_is_the_time >= 3){
				  
				  $('#myChart').show();
				  // alert($('#myChart').show());
				}
			}
		});
	});
</script>
<script type="text/javascript">

	$(function(){
        var colors = Highcharts.getOptions().colors,
            categories = [<?php echo substr($nama_calon, 0, -1);?>],
            data = [<?php echo $data; ?>];
    
        var ctx = $("#myChart");
		var myChart = new Chart(ctx, {
        type: 'bar',
          data: {
              labels: categories,
              datasets: [{
                  label: "Total Suara",
                  backgroundColor: window.chartColors.purple,
                  borderColor: window.chartColors.purple,
                  data: data,
                  fill: false,
              }]
          },
          options: {
              responsive: true,
              title:{
                  display:true,
                  text:'Hasil Pemira 2020'
              },
              tooltips: {
                  mode: 'index',
                  intersect: false,
              },
              hover: {
                  mode: 'nearest',
                  intersect: true
              },
              scales: {
                  xAxes: [{
                      display: true,
                      scaleLabel: {
                          display: true,
                          labelString: 'Calon Presiden BEM'
                      }
                  }],
                  yAxes: [{
                      display: true,
                      scaleLabel: {
                          display: true,
                          labelString: 'Total Suara'
                      },
                      ticks: {
                          beginAtZero: true
                      }
                  }]
              }
          }
      });
    
		
    });
</script>	
</body>
</html>
