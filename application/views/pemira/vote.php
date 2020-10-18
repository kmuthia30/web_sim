
<!DOCTYPE html>
<html>
<head>
  <!-- head -->
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
		<div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="<?php echo site_url('Login/logoutvote') ?>" ><i class="fa fa-power-off"></i> Log Out</a>
          </li>
        </ul>
      </div>
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      
      <!-- Main content -->
		<section class="content">
        <div class="callout callout-danger">
          <h4>Calon Presiden BEM</h4>
        </div>
		
		<div class="row">
			<?php foreach ($daftarcapres as $capres): ?>
			<div class="col-md-4">
				<div class="box box-widget widget-user">
					<div class="widget-user-header bg-black-active">
						<h3 class="widget-user-username"><?php echo $capres->cprs_nama ?></h3>
						<h5 class="widget-user-desc">No. Urut 1</h5>
					</div>
					<div class="widget-user-image">
						<img class="img-circle" src="<?php echo base_url('assets/img/capres/'.$capres->cprs_foto)?>" style="width:100px; height: 100px" alt="User Avatar">
					</div>
					<div class="box-footer">
						<div class="row">
							<div class="col-sm-12 border-right">
								<div class="description-block-capres">
								<?php $count=0; foreach ($daftarcapres1 as $pollingcapres): ?>
								<?php $count++; endforeach; ?>
								<?php if ($count == 0) {
									?>
										<button id="btnPilih" name="submit" 
											class="btn bg-purple btn-block btn-flat" 
											type="submit" 
											nimCapres="<?php echo $capres->cprs_nim ;?>"
											nimPemilih="<?php echo $this->session->userdata("nim") ?>"
											>Pilih 
										</button>
									<?php
								}
								?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
		
		<div class="callout callout-danger">
          <h4>Calon Anggota MPM</h4>
        </div>
		<div class="row">
			<?php foreach ($daftarmpm as $mpm): ?>
			<div class="col-md-4">
				<div class="box box-widget widget-user">
					<div class="widget-user-header bg-black-active">
						<h3 class="widget-user-username"><?php echo $mpm->cln_nama ?></h3>
						<!--h5 class="widget-user-desc">No. Urut 1</h5-->
					</div>
					<div class="widget-user-image">
						<img class="img-circle" src="<?php echo base_url('assets/img/mpm/'.$mpm->cln_foto)?>" style="width:100px; height: 100px" alt="User Avatar">
					</div>
					<div class="box-footer">
						<div class="row">
							<div class="col-sm-12 border-right">
								<div class="description-block-mpm">
								<?php $count=0; foreach ($daftarmpm1 as $pollingmpm): ?>
								<?php $count++; endforeach; ?>
								<?php if ($count == 0) {
									?>
										<button id="btnPilihMpm" name="submit" 
											class="btn bg-purple btn-block btn-flat" 
											type="submit" 
											nimCalon="<?php echo $mpm->cln_nim ;?>"
											nimPemilih="<?php echo $this->session->userdata("nim") ?>"
											>Pilih 
										</button>
									<?php
								}
								?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
      </section>
      <!-- /.content -->
	  
	  
    </div>
    <!-- /.container -->
	
  </div>
  <!-- /.content-wrapper -->
  <!--footer-->
  <?php $this->load->view("_partials/footer.php") ?>
</div>
<!-- ./wrapper -->

<!--js-->
<?php $this->load->view("_partials/js.php") ?>
<script type="text/javascript">

	$(document).on('click','#btnPilih',function(){
		
		var nimCapres = $(this).attr('nimCapres');
		var nimPemilih = $(this).attr('nimPemilih');
		var tipe = 'BEM';
		// alert(nimCapres +", "+ nimPemilih +", "+ tipe);
		
		dataSend = "nimCapres="+nimCapres+"&nimPemilih="+nimPemilih+"&tipe="+tipe;
		// alert("<?php echo site_url('/pemira/Vote/votecapres') ?>");
		$.ajax({
			url : "<?php echo site_url('/pemira/Vote/votecapres') ?>",
			type: "POST",
			data : dataSend,
			async:false,
			success: function(response)
			{
				$(".description-block-capres").hide();
				// bindGrid();
				// alert("Sukses");
			}
		});

		// return false;

	});
</script>

<script type="text/javascript">

	$(document).on('click','#btnPilihMpm',function(){
		
		var nimCalon = $(this).attr('nimCalon');
		var nimPemilih = $(this).attr('nimPemilih');
		var tipe = 'MPM';
		// alert(nimCapres +", "+ nimPemilih +", "+ tipe);
		
		dataSend = "nimCalon="+nimCalon+"&nimPemilih="+nimPemilih+"&tipe="+tipe;
		// alert("<?php echo site_url('/pemira/Vote/votecapres') ?>");
		$.ajax({
			url : "<?php echo site_url('/pemira/Vote/votempm') ?>",
			type: "POST",
			data : dataSend,
			async:false,
			success: function(response)
			{
				$(".description-block-mpm").hide();
				// bindGrid();
				// alert("Sukses");
			}
		});

		// return false;

	});
</script>
</body>
</html>
