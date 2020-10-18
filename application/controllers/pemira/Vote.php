<?php
	class Vote extends CI_Controller {
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model("pemira/Vote_model");
		}

		public function index()
		{
			$this->load->view("pemira/login");
		}
		
		public function pemiluvote($nimPemilih, $prodi)
		{
			$data["daftarcapres1"] = $this->Vote_model->checkVoteCapres($nimPemilih);
			$data["daftarcapres"] = $this->Vote_model->getAllCapres();
			$data["daftarmpm1"] = $this->Vote_model->checkVoteMpm($nimPemilih);
			$data["daftarmpm"] = $this->Vote_model->getMpmByProdi($prodi);
			$titleportal["title"] = 'Portal Pemira';
			$this->load->view("_partials/head.php", $titleportal);
			 
			$this->load->view("pemira/vote", $data);
		}

		
		public function votecapres()
		{
			$vote = $this->Vote_model;

			$vote->voteCapres();
		}
		
		public function votempm()
		{
			$vote = $this->Vote_model;

			$vote->voteMpm();
		}
	}
?>