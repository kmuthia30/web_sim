<?php
	class Login extends CI_Controller {
		public function __construct()
		{
			parent::__construct();
			$this->load->model("Login_model");
		}

		public function index()
		{
			$titlelogin["title"] = 'Login';
			$this->load->view("_partials/head.php", $titlelogin);
			$this->load->view("login");
		}
		
		public function indexpemilih()
		{
			$this->load->view("pemira/login");
		}
		
		function loginprodi()
		{
			$login = $this->Login_model;
			$cek = $login->loginProdi()->num_rows();
			// $cek = $this->Login_model->loginProdi()->num_rows();
		
			
			if($cek > 0){
				$prd_id = $login->loginProdi()->row()->prd_id;
				$prd_nama = $login->loginProdi()->row()->prd_nama;
				$prd_singkatan = $login->loginProdi()->row()->prd_singkatan;
				$prd_email = $login->loginProdi()->row()->prd_email;
				$keterangan = $login->loginProdi()->row()->keterangan;
				$logo = $login->loginProdi()->row()->logo;

				$data_session = array(
					'id' => $prd_id,
					'nama' => $prd_nama,
					'email' => $prd_email,
					'singkatan' => $prd_singkatan,
					'logo' => $logo,
					'status' => "login"
				);

				$this->session->set_userdata($data_session);
				
				if ($keterangan == "prodi") {
					redirect(site_url('Dashboard'));
				} else if ($keterangan == "mpm") {
					redirect(site_url('Dashboard/mpm'));
				}
				// redirect(site_url('aksesprodi/Dashboard'));
				
				
			}
			else
			{
				echo "<script> alert('Login gagal email pengguna / kata sandi salah'); window.location.href='".base_url()."index.php/Login'; </script>";
		
			}
				
		}
		
		function loginpemilih()
		{
			$login = $this->Login_model;
			$cek = $login->loginPemilih()->num_rows();
			// $cek = $this->Login_model->loginProdi()->num_rows();
		
			$pmlh_status = $login->loginPemilih()->row()->pmlh_status;
			
			if($cek > 0){
				
				if ($pmlh_status == 1) {
					echo "<script> alert('Anda telah melakukan pemilihan'); window.location.href='".base_url()."index.php/Login/indexpemilih'; </script>";
		
				} else {
					$pmlh_nama = $login->loginPemilih()->row()->pmlh_nama;
					$pmlh_nim = $login->loginPemilih()->row()->pmlh_nim;
					$pmlh_email = $login->loginPemilih()->row()->pmlh_email;
					$pmlh_prodi = $login->loginPemilih()->row()->pmlh_prodi;

					$data_session = array(
						'nama' => $pmlh_nama,
						'email' => $pmlh_email,
						'nim'=> $pmlh_nim,
						'prodi'=> $pmlh_prodi,
						'status' => "login"
					);

					$this->session->set_userdata($data_session);
					
					// redirect(site_url('aksesprodi/Dashboard'));
					// <?php echo site_url('aksesprodi/Calonmpm/getByProdi/'.$this->session->userdata("id")) 
					redirect(site_url('pemira/Vote/pemiluvote/'.$pmlh_nim.'/'.$pmlh_prodi));
				}
				
				
			}
			else
			{
				echo "<script> alert('Login gagal email pengguna / kata sandi salah'); window.location.href='".base_url()."index.php/Login/indexpemilih'; </script>";
		
			}
				
		}

		function logout()
		{
			$this->session->sess_destroy();
			redirect(site_url('Login'));
		}
		
		function logoutvote()
		{
			$this->session->sess_destroy();
			$titlelogin["title"] = 'Vote Sukses';
			$this->load->view("_partials/head.php", $titlelogin);
			$this->load->view("pemira/logout_vote");
		}
	}
?>