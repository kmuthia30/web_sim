<!DOCTYPE html>
<html>
<head>
  <!--head-->
  <!--?php $this->load->view("_partials/head.php") ?-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<!--navbar-->
<?php $this->load->view("_partials/navbar.php") ?>
<!--sidebar-->
<!--?php $this->load->view("_partials/sidebar_prodi.php") ?-->
	
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!--breadcrumb-->
	<section class="content-header">
      <h1>
        Tahapan Anggota MPM
        <small>Tes Tertulis</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('aksesprodi/Dashboard') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Tahapan Anggota MPM - Tes Tertulis</li>
      </ol>
	</section>
    <!-- Main content -->
    <section class="content">
		<?php if ($this->session->flashdata('success')): ?>
			<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                <?php echo $this->session->flashdata('success'); ?>
			</div>			
		<?php endif; ?>
		
		<div class="row">
		<div class="col-xs-12">
			<div class="box">
            <div class="box-header">
              <h3 class="box-title" style="background:green; color:white">Hasil Prodi</h3>

              
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>NIM</th>
                  <th>Nama</th>
				  <th>Tingkat</th>
                  <th>Foto</th>
                  <th>Status</th>
                </tr>
                
                <tr>
                  <td>657</td>
                  <td>Bob Doe</td>
                  <td>1</td>
                  <td>Bob </td>
                  <td><span class="label label-primary">Approved</span></td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <div class="box">
			<div class="box-header">
              <h3 class="box-title" style="background:green; color:white">Daftar Lolos Tes Tertulis</h3>

              
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
					<tr>
					  <th>NIM</th>
					  <th>Nama</th>
					  <th>Prodi</th>
					  <th>Tingkat</th>
					  <th>Foto</th>
					</tr>
                </thead>
                <tbody>
					<?php foreach ($calonmpm as $datacalon): ?>
					<tr>
					  <td><?php echo $datacalon->cln_nim ?></td>
					  <td><?php echo $datacalon->cln_nama ?></td>
					  <td><?php echo $datacalon->cln_prodi ?></td>
					  <td><?php echo $datacalon->cln_tingkat ?></td>
					  <td><img src="<?php echo base_url()."assets/img/mpm/".$datacalon->cln_foto ?>" height="70px" width="50px"></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  
  </div>
  <!-- /.content-wrapper -->
  
  <!--footer-->
  <?php $this->load->view("_partials/footer.php") ?>

  
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!--js-->
<?php $this->load->view("_partials/js.php") ?>
</body>
</html>
