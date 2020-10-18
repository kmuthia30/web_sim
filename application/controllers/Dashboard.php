<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
		$titledashboard["title"] = 'Dashboard';
        $this->load->view("_partials/head.php", $titledashboard);
		
		$pagedashboard["page"] = 'dashboard';
        $this->load->view("_partials/sidebar_prodi.php", $pagedashboard);
		
        $this->load->view("aksesprodi/dashboard_prodi");
    }
	
	public function mpm()
    {
		$titledashboard["title"] = 'Dashboard';
        $this->load->view("_partials/head.php", $titledashboard);
		
		$pagedashboard["page"] = 'dashboard';
        $this->load->view("_partials/sidebar.php", $pagedashboard);
		
        $this->load->view("dashboard_mpm");
    }
	
}