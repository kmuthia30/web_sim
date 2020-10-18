<!DOCTYPE html>
<html>
<head>
  <!--head-->
  <!--?php $this->load->view("_partials/head.php") ?-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<!--navbar-->
<?php $this->load->view("_partials/navbar_aspirasi.php") ?>
<!--sidebar-->
<!--?php $this->load->view("_partials/sidebar_prodi.php") ?-->
	
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!--breadcrumb-->
	<section class="content-header">
      <h1>
        Aspirasi
        <small>Ajukan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('aspirasimpm/Aspirasi') ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"> Ajukan Aspirasi</li>
      </ol>
	</section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title" style="background:purple; color:white">Suarakan Aspirasimu</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?php echo site_url('aksesprodi/Calonmpm/add') ?>" method="post" enctype="multipart/form-data">
              <div class="box-body">
				<div class="form-group col-md-12">
					<label for="aspr_posisi">Posisi<span class="text-danger"><b style="color: red">*</b></span></label>
					<div class="radio">
                    <label>
                      <input type="radio" name="aspr_posisi" id="rbmhs" value="Mahasiswa" checked>
                      Mahasiswa
					  &nbsp;&nbsp;
					  <input type="radio" name="aspr_posisi" id="rbkry" value="Karyawan">
                      Karyawan
                    </label>
                  </div>
				</div>
				<div class="form-group col-md-6">
					<label for="cln_tingkat">Prodi<span class="text-danger"><b style="color: red">*</b></span></label>
					<select id="cln_tingkat" name="cln_tingkat" class="form-control">
						<option value="P4">P4</option>
						<option value="PMO">PMO</option>
						<option value="MI">MI</option>
						<option value="MK">MK</option>
						<option value="TPM">TPM</option>
						<option value="TKBG">TKBG</option>
					</select>					
				</div>
				<div class="form-group col-md-6">
					<label for="cln_tingkat">Tingkat<span class="text-danger"><b style="color: red">*</b></span></label>
					<select id="cln_tingkat" name="cln_tingkat" class="form-control">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
					</select>					
				</div>
				<div class="form-group col-md-6">
					<label for="cln_nama" id="lblNim">NIM<span class="text-danger"><b style="color: red">*</b></span></label>
					<label for="cln_nama" id="lblNip">NIP<span class="text-danger"><b style="color: red">*</b></span></label>
					<input type="text" class="form-control" required id="cln_nama" name="cln_nama" placeholder="Masukkan nim atau nip">
				
				</div>
				<div class="form-group col-md-6">
					<label for="cln_nama">Nama<span class="text-danger"><b style="color: red">*</b></span></label>
					<input type="text" class="form-control" required id="cln_nama" name="cln_nama" placeholder="Masukkan nama">
				
				</div>
				
				<div class="form-group col-md-6">
					<label for="cln_nim">Jenis Aspirasi<span class="text-danger"><b style="color: red">*</b></span></label>
					<select id="cln_tingkat" name="cln_tingkat" class="form-control">
						<option value="Akademik">Akademik</option>
						<option value="Fasilitas">Fasilitas</option>
					</select>
				</div>
				
				<div class="form-group col-md-6">
					<label for="cln_nim">Ditujukan Untuk<span class="text-danger"><b style="color: red">*</b></span></label>
					<select id="cln_tingkat" name="cln_tingkat" class="form-control">
						<option value="Institusi">Institusi</option>
						<option value="MPM">MPM</option>
						<option value="Prodi">Prodi</option>
						<option>Lainnya</option>
					</select>	
				</div>
				
				<div class="form-group col-md-3 hidden">
					<label for="cln_nim">Ditujukan Untuk<span class="text-danger"><b style="color: red">*</b></span></label>
					<select id="cln_tingkat" name="cln_tingkat" class="form-control">
						<option value="Institusi">Institusi</option>
						<option value="MPM">MPM</option>
						<option value="Prodi">Prodi</option>
						<option>Lainnya</option>
					</select>	
				</div>
				
				<div class="form-group col-md-6">
					<label for="cln_alasan">Aspirasimu<span class="text-danger"><b style="color: red">*</b></span></label>
					<textarea class="form-control" rows="3" placeholder="Masukkan aspirasimu" id="cln_alasan" name="cln_alasan"></textarea>
				</div>
				
				<div class="form-group col-md-6">
					<label for="cln_alasan">Solusi aspirasimu<span class="text-danger"><b style="color: red">*</b></span></label>
					<textarea class="form-control" rows="3" placeholder="Masukkan solusi kamu untuk aspirasimu" id="cln_alasan" name="cln_alasan"></textarea>
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
  <?php $this->load->view("_partials/footer_aspirasi.php") ?>

  
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!--js-->
<?php $this->load->view("_partials/js.php") ?>

</body>
</html>
