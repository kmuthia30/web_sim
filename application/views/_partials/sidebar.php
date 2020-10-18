<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/dist/img/user2-160x160.jpg')?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata("singkatan") ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
		<li class="<?php if($page =='dashboard'){echo 'active';}?>">
			<a href="<?php echo site_url('Dashboard/mpm') ?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
		</li>
        <li class="header">MASTER DATA</li>
		<li class="<?php echo $this->uri->segment(1) == 'Prodi' ? 'active': '' ?>">
			<a href="<?php echo site_url('Prodi') ?>"><i class="fa fa-book"></i> <span>Prodi</span></a>
		</li>
        		
		<li class="<?php echo $this->uri->segment(1) == 'Anggota MPM' ? 'active': '' ?>">
			<a href="<?php echo site_url('Prodi/add') ?>">
				<i class="fa fa-book"></i> <span>Anggota MPM</span>
			</a>
		</li>
		<li class="header">PEMIRA</li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-folder-o"></i>
            <span>Daftar Peserta</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('aksesprodi/Calonmpm/tertulis') ?>"><i class="fa fa-circle-o text-aqua"></i> Calon MPM</a></li>
            <li><a href="<?php echo site_url('aksesprodi/Calonmpm/wawancara') ?>"><i class="fa fa-circle-o text-aqua"></i> Capres BEM</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-line-chart"></i>
            <span>Seleksi Capres BEM</span>
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
		
		<li class="treeview">
          <a href="#">
            <i class="fa fa-line-chart"></i>
            <span>Seleksi Anggota MPM</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('aksesprodi/Calonmpm/tertulis') ?>"><i class="fa fa-circle-o text-aqua"></i> Tes Tertulis</a></li>
            <li><a href="<?php echo site_url('aksesprodi/Calonmpm/wawancara') ?>"><i class="fa fa-circle-o text-aqua"></i> Wawancara</a></li>
            <li><a href="<?php echo site_url('aksesprodi/Calonmpm/debat') ?>"><i class="fa fa-circle-o text-aqua"></i> Debat</a></li>
            <li><a href="<?php echo site_url('aksesprodi/Calonmpm/pemilu') ?>"><i class="fa fa-circle-o text-aqua"></i> Pemilu</a></li>
          </ul>
        </li>
		
		<li class="<?php echo $this->uri->segment(1) == 'Prodi' ? 'active': '' ?>">
			<a href="<?php echo site_url('pemira/Mpm') ?>">
				<i class="fa fa-line-chart"></i> <span>Grafik Pemilihan</span>
			</a>
		</li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
