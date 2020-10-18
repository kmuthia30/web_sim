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
        $this->load->view("_partials/head_aspirasi.php", $titledashboard);
		
		$pagedashboard["page"] = 'dashboard';
        $this->load->view("_partials/sidebar_aspirasi.php", $pagedashboard);
		
        $this->load->view("aspirasimpm/dashboard_aspirasi");
    }
	
}