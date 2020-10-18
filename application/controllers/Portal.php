<?php
	class Portal extends CI_Controller {
		public function __construct()
		{
			parent::__construct();
			$this->load->model("Login_model");
		}

		public function index()
		{
			$titleportal["title"] = 'Portal Pemira';
			$this->load->view("_partials/head.php", $titleportal);
			
			$this->load->view("pemira/home_portal");
		}
		
		
	}
?>