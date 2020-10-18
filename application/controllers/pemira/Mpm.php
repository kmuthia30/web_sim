<?php
	class Mpm extends CI_Controller {
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model("pemira/Mpm_model");
		}

		public function index()
		{
			$titleportal["title"] = 'Home';
			$this->load->view("_partials/head.php", $titleportal);
			$this->load->view("pemira/home");
		}
		
		public function grafikpemilihan()
		{
			$data["daftarcapres"] = $this->Mpm_model->getAllCapresLama();
			$titleportal["title"] = 'Hasil Pemilihan';
			$this->load->view("_partials/head.php", $titleportal);
			$this->load->view("pemira/grafik_pemilihan", $data);
		}
		
		function load_grafik()
		{
			$result = $this->Mpm_model->tampil_grafik_paket();
			echo json_encode($result);
		}
	}
?>