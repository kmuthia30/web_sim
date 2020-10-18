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
        <small>Edit</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('aksesprodi/Dashboard') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="<?php echo site_url('aksesprodi/Calonmpm') ?>">Calon MPM - List</a></li>
        <li class="active">Calon MPM - Edit</li>
      </ol>
	</section>
	
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Calon MPM</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="" method="post" enctype="multipart/form-data">
              <div class="box-body">
				<div class="form-group col-md-6">
					<label for="cln_nim">NIM<span class="text-danger"><b style="color: red">*</b></span></label>
					<input readonly="true" value="<?php echo $calonmpm->cln_nim ?>" type="text" class="form-control" required id="cln_nim" name="cln_nim" placeholder="Masukkan NIM">
				</div>
				<div class="form-group col-md-6">
					<label for="cln_nama">Nama<span class="text-danger"><b style="color: red">*</b></span></label>
					<input value="<?php echo $calonmpm->cln_nama ?>" type="text" class="form-control" required id="cln_nama" name="cln_nama" placeholder="Masukkan nama">
				
				</div>
				<div class="form-group col-md-6">
					<label for="cln_tingkat">Tingkat<span class="text-danger"><b style="color: red">*</b></span></label>
					<select id="cln_tingkat" name="cln_tingkat" class="form-control">
						<option <?php if ($calonmpm->cln_tingkat == "1" ) echo 'selected' ; ?> value="1">1</option>
						<option <?php if ($calonmpm->cln_tingkat == "2" ) echo 'selected' ; ?> value="2">2</option>
						<option <?php if ($calonmpm->cln_tingkat == "3" ) echo 'selected' ; ?> value="3">3</option>
					</select>
					
				</div>
				
				<div class="form-group col-md-6">
					<label for="cln_prodi">Prodi<span class="text-danger"><b style="color: red">*</b></span></label>
					<input type="text" readonly="true" class="form-control" required value="<?php echo $this->session->userdata("nama") ?>">
					<input type="hidden" readonly="true" class="form-control" required id="cln_prodi" name="cln_prodi" value="<?php echo $this->session->userdata("id") ?>">
				</div>
				<div class="form-group col-md-6">
					<label for="cln_hp">No. Handphone<span class="text-danger"><b style="color: red">*</b></span></label>
					<input value="<?php echo $calonmpm->cln_hp ?>" type="number" class="form-control" required id="cln_hp" name="cln_hp" placeholder="Masukkan singkatan">
					
				</div>
				<div class="form-group col-md-6">
					<label for="cln_motto">Motto<span class="text-danger"><b style="color: red">*</b></span></label>
					<input value="<?php echo $calonmpm->cln_motto ?>" type="text" class="form-control" required id="cln_motto" name="cln_motto" placeholder="Masukkan motto">
					
				</div>
				
				<div class="form-group col-md-6">
					<label for="cln_alasan">Alasan<span class="text-danger"><b style="color: red">*</b></span></label>
					<textarea class="form-control" rows="3" placeholder="Masukkan alasan" id="cln_alasan" name="cln_alasan"><?php echo $calonmpm->cln_alasan ?></textarea>
				</div>
				
				<div class="form-group col-md-6">
					<label Style="font-weight: bold;">Foto<span class="text-danger"><b style="color: red">*</b></span></label>
					<input type="file" name="cln_foto" class="form_input" >
					<input type="hidden" name="picture_old" value="<?php echo $calonmpm->cln_foto ?>" width="907px" height="640px">
				</div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer" align="center">
                <input type="submit" name="submit" style="height:35px; width:100px" class="btn btn-primary" value="Simpan" />
				&nbsp;&nbsp;&nbsp;
				<button type="reset" name="btn_cancel" class="btn btn-danger" style="height:35px; width:100px" onclick="window.location.href='<?php echo site_url('aksesprodi/Calonmpm') ?>'">Batal</button>
              </div>
            </form>
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
