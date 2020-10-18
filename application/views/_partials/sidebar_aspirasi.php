<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/img/logo_statis/mpm.png')?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Majelis</br>Permusyawaratan</br>Mahasiswa</p>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
	  <li class="header">ASPIRASI</li>
		<li class="<?php if($page =='dashboard'){echo 'active';}?>">
			<a href="<?php echo site_url('aspirasimpm/Dashboard') ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
		</li>
        
         <li class="<?php if($page =='ajukan'){echo 'active';}?>">
			<a href="<?php echo site_url('aspirasimpm/Aspirasi/ajukan') ?>"><i class="fa fa-mail-forward"></i> <span>Ajukan Aspirasi</span></a>
		</li>
        		
		<li class="<?php if($page =='daftar'){echo 'active';}?>">
			<a href="<?php echo site_url('aspirasimpm/Aspirasi') ?>">
				<i class="fa fa-list"></i> <span>Daftar Seluruh Aspirasi</span>
			</a>
		</li>
		
	  </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
