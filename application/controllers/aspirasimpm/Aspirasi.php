<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Aspirasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
		$titledashboard["title"] = 'Daftar Aspirasi';
        $this->load->view("_partials/head_aspirasi.php", $titledashboard);
		
		$pagedashboard["page"] = 'daftar';
        $this->load->view("_partials/sidebar_aspirasi.php", $pagedashboard);
		
        $this->load->view("aspirasimpm/list_aspirasi");
    }
	
	public function ajukan()
    {
		$titledashboard["title"] = 'Ajukan Aspirasi';
        $this->load->view("_partials/head_aspirasi.php", $titledashboard);
		
		$pagedashboard["page"] = 'ajukan';
        $this->load->view("_partials/sidebar_aspirasi.php", $pagedashboard);
		
        $this->load->view("aspirasimpm/ajukan_aspirasi");
    }
	
}