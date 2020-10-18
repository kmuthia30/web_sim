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
<!--?php $this->load->view("_partials/sidebar_prodi.php") ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!--breadcrumb-->
	<section class="content-header">
      <h1>
        Capres BEM
        <small>Tambah</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('aksesprodi/Dashboard') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="<?php echo site_url('aksesprodi/Capresbem') ?>">Capres BEM - List</a></li>
        <li class="active">Capres BEM - Tambah</li>
      </ol>
	</section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Calon Presiden BEM</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?php echo site_url('aksesprodi/Capresbem/add') ?>" method="post" enctype="multipart/form-data">
              <div class="box-body">
				<div class="form-group col-md-6">
					<label for="cprs_nim">NIM<span class="text-danger"><b style="color: red">*</b></span></label>
					<input type="text" class="form-control" required id="cprs_nim" name="cprs_nim" placeholder="Masukkan NIM">
				</div>
				<div class="form-group col-md-6">
					<label for="cprs_nama">Nama<span class="text-danger"><b style="color: red">*</b></span></label>
					<input type="text" class="form-control" required id="cprs_nama" name="cprs_nama" placeholder="Masukkan nama">
				
				</div>
				<div class="form-group col-md-6">
					<label for="cprs_tingkat">Tingkat<span class="text-danger"><b style="color: red">*</b></span></label>
					<select id="cprs_tingkat" name="cprs_tingkat" class="form-control">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
					</select>					
				</div>
				
				<div class="form-group col-md-6">
					<label for="cprs_prodi">Prodi<span class="text-danger"><b style="color: red">*</b></span></label>
					<input type="text" readonly="true" class="form-control" required value="<?php echo $this->session->userdata("nama") ?>">
					<input type="hidden" readonly="true" class="form-control" required id="cprs_prodi" name="cprs_prodi" value="<?php echo $this->session->userdata("id") ?>">
				</div>
				<div class="form-group col-md-6">
					<label for="cprs_hp">No. Handphone<span class="text-danger"><b style="color: red">*</b></span></label>
					<input type="number" class="form-control" required id="cprs_hp" name="cprs_hp" placeholder="Masukkan no. handphone">
					
				</div>
				<div class="form-group col-md-6">
					<label for="cprs_motto">Motto<span class="text-danger"><b style="color: red">*</b></span></label>
					<input type="text" class="form-control" required id="cprs_motto" name="cprs_motto" placeholder="Masukkan motto">
					
				</div>
				
				<div class="form-group col-md-6">
					<label for="cprs_visi">Visi<span class="text-danger"><b style="color: red">*</b></span></label>
					<textarea class="form-control" rows="3" placeholder="Masukkan visi" id="cprs_visi" name="cprs_visi"></textarea>
				</div>
				<div class="form-group col-md-6">
					<label for="cprs_password">Misi<span class="text-danger"><b style="color: red">*</b></span></label>
					<textarea class="form-control" rows="3" placeholder="Masukkan misi" id="cprs_misi" name="cprs_misi"></textarea>
					
				</div>
                <div class="form-group col-md-6">
					<label Style="font-weight: bold;">Foto<span class="text-danger"><b style="color: red">*</b></span></label>
					<input type="file" name="cprs_foto" class="form_input" >
				</div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer" align="center">
                <input type="submit" name="submit" style="height:35px; width:100px" class="btn btn-primary" value="Simpan" />
				&nbsp;&nbsp;&nbsp;
				<button type="reset" name="btn_cancel" class="btn btn-danger" style="height:35px; width:100px" onclick="window.location.href='<?php echo site_url('aksesprodi/Capresbem') ?>'">Batal</button>
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
