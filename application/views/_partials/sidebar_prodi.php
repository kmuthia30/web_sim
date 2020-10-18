<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url()."assets/img/logo_statis/".$this->session->userdata("logo") ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata("singkatan") ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
		<li class="<?php if($page =='dashboard'){echo 'active';}?>">
			<a href="<?php echo site_url('aksesprodi/Dashboard') ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
		</li>
        <li class="header">PEMIRA</li>
         <li class="<?php if($page =='capres'){echo 'active';}?>">
			<a href="<?php echo site_url('aksesprodi/Capresbem/getByProdi/'.$this->session->userdata("id")) ?>"><i class="fa fa-folder-o"></i> <span>Data Capres BEM</span></a>
		</li>
        		
		<li class="<?php if($page =='mpm'){echo 'active';}?>">
			<a href="<?php echo site_url('aksesprodi/Calonmpm/getByProdi/'.$this->session->userdata("id")) ?>">
				<i class="fa fa-folder-o"></i> <span>Data Calon Anggota MPM</span>
			</a>
		</li>
		
		<li class="treeview">
          <a href="#">
            <i class="fa fa-line-chart"></i>
            <span>Tahapan Capres BEM</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../charts/chartjs.html"><i class="fa fa-circle-o text-yellow"></i> Tes Tertulis</a></li>
            <li><a href="../charts/morris.html"><i class="fa fa-circle-o text-yellow"></i> Orasi</a></li>
            <li><a href="../charts/flot.html"><i class="fa fa-circle-o text-yellow"></i> Wawancara</a></li>
            <li><a href="../charts/inline.html"><i class="fa fa-circle-o text-yellow"></i> Debat</a></li>
            <li><a href="../charts/inline.html"><i class="fa fa-circle-o text-yellow"></i> Pemilu</a></li>
          </ul>
        </li>
		
		<li class="<?php if($page =='testulismpm' || $page == 'wawancarampm' || $page == 'debatmpm' || $page == 'pemilumpm') {echo 'active';}?> treeview">
          <a href="#">
            <i class="fa fa-line-chart"></i>
            <span>Tahapan Anggota MPM</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if($page =='testulismpm'){echo 'active';}?>"><a href="<?php echo site_url('aksesprodi/Calonmpm/tertulis') ?>"><i class="fa fa-circle-o text-aqua"></i> Tes Tertulis</a></li>
            <li class="<?php if($page =='wawancarampm'){echo 'active';}?>"><a href="<?php echo site_url('aksesprodi/Calonmpm/wawancara') ?>"><i class="fa fa-circle-o text-aqua"></i> Wawancara</a></li>
            <li class="<?php if($page =='debatmpm'){echo 'active';}?>"><a href="<?php echo site_url('aksesprodi/Calonmpm/debat') ?>"><i class="fa fa-circle-o text-aqua"></i> Debat</a></li>
            <li class="<?php if($page == 'pemilumpm'){echo 'active';}?>"><a href="<?php echo site_url('aksesprodi/Calonmpm/pemilu') ?>"><i class="fa fa-circle-o text-aqua"></i> Pemilu</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
