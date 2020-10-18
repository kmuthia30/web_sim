
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
    <div class="container">
      
      <!-- Main content -->
      <section class="content">
        <div class="callout callout-danger">
          <h4>Calon Presiden BEM</h4>
        </div>
		
		
		<div class="row">
		<?php $view = ''; ?>
        <?php foreach ($daftarcapres as $capres): ?>
        <!-- /.col -->
		<?php
			$view .= '<div class="col-md-4">';
				$view .= '<div class="box box-widget widget-user">';
					$view .= '<div class="widget-user-header bg-black-active">';
						$view .= '<h3 class="widget-user-username">'.$capres->cprs_nama.'</h3>';
						$view .= '<h5 class="widget-user-desc">No. Urut 1</h5>';
					$view .= '</div>';
					$view .= '<div class="widget-user-image">';
						$view .= '<img class="img-circle" src="'.base_url('assets/img/capres/'.$capres->cprs_foto).'" style="width:100px; height: 100px" alt="User Avatar">';
					$view .= '</div>';
					$view .= '<div class="box-footer">';
						$view .= '<div class="row">';
							$view .= '<div class="col-sm-12 border-right">';
								$view .= '<div class="description-block">';
									$view .= '<button id="btnPilih" name="submit" 
									class="btn bg-purple btn-block btn-flat" 
									type="submit" 
									nimCapres="'.$capres->cprs_nim.'"
									nimPemilih="'.$this->session->userdata("nim").'"
									>Pilih ';
									$view .= '</button>';
								$view .= '</div>';
							$view .= '</div>';
						$view .= '</div>';
					$view .= '</div>';
				$view .= '</div>';
			$view .= '</div>';
		?>
		<?php endforeach; echo $view;?>
        

		</div>
      <!-- /.row -->
		<div class="callout callout-danger">
          <h4>Calon Anggota MPM</h4>
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
				$("#btnPilih").hide();
				// bindGrid();
				alert(response);
			}
		});

		// return false;

	});

</script>
</body>
</html>
