
<!DOCTYPE html>
<html>
<head>
  <!-- head -->
	<!--script src="<!--?php echo base_url('assets/grafik/js/jquery.js')?>"></script>
	<link href="<!--?php echo base_url('assets/grafik/css/bootstrap.css')?>" rel="stylesheet"-->
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
			<li class="active"><a>HOME <span class="sr-only">(current)</span></a></li>
            <li><a href="<?php echo site_url('pemira/Mpm/grafikpemilihan') ?>">CAPRES BEM <span class="sr-only">(current)</span></a></li>
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
            <a href="<?php echo site_url('Dashboard/mpm') ?>" ><i class="fa fa-hand-o-left"></i> Kembali</a>
          </li>
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
		<div class="callout callout-danger" style="text-align:center;">
          <h1>HASIL PEMIRA 2020</h1>
        </div>
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
</body>
</html>
