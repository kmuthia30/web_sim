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
        Calon MPM
        <small>List</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('aksesprodi/Dashboard') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Calon MPM - List</li>
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
				<div class="text-left">
					<?php 
						$count=0;
						foreach ($calonmpm as $datacalon): 
							$count++;
						endforeach;
						
						if ($count !=10) {
							?>
							<a type="button" class="btn btn-warning" href="<?php echo site_url('aksesprodi/Calonmpm/add') ?>">Tambah Data</a>
							<?php
						}
					?>
				</div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
					<tr>
					  <th>NIM</th>
					  <th>Nama</th>
					  <th>No. Handphone</th>
					  <th>Prodi</th>
					  <th>Tingkat</th>
					  <th>Motto</th>
					  <th>Alasan</th>
					  <th>Foto</th>
					  <th>Aksi</th>
					</tr>
                </thead>
                <tbody>
					<?php foreach ($calonmpm as $datacalon): ?>
					<tr>
					  <td><?php echo $datacalon->cln_nim ?></td>
					  <td><?php echo $datacalon->cln_nama ?></td>
					  <td><?php echo $datacalon->cln_hp ?></td>
					  <td><?php echo $datacalon->cln_prodi ?></td>
					  <td><?php echo $datacalon->cln_tingkat ?></td>
					  <td><?php echo $datacalon->cln_motto ?></td>
					  <td><?php echo $datacalon->cln_alasan ?></td>
					  <td><img src="<?php echo base_url()."assets/img/mpm/".$datacalon->cln_foto ?>" height="70px" width="50px"></td>
					  <td>
						<a title="Edit" href="<?php echo site_url('aksesprodi/Calonmpm/edit/'.$datacalon->cln_nim) ?>"
						 class="fa fa-fw fa-edit"></a>
						
						<a title="Hapus" class="fa fa-fw fa-trash-o" <?=anchor("aksesprodi/Calonmpm/delete/".$datacalon->cln_nim," ",array('onclick' =>"return confirm('Yakin akan menhapus data dengan id $datacalon->cln_nim?')"))?>
						 </a>
						
						<a title="Kirim" href="<?php echo site_url('aksesprodi/Calonmpm/delete/'.$datacalon->cln_nim) ?>"
						 class="fa fa-fw fa-send"></a>
					  </td>
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
