<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Calonmpm extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("aksesprodi/Calonmpm_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
		$titlempm["title"] = 'List Calon MPM';
        $this->load->view("_partials/head.php", $titlempm);
		
		$pagempm["page"] = 'mpm';
        $this->load->view("_partials/sidebar_prodi.php", $pagempm);  
		
        $data["calonmpm"] = $this->Calonmpm_model->getAll();
        $this->load->view("aksesprodi/list_calonmpm", $data);
    }
	
	public function getByProdi($prodi)
    {
		$titlempm["title"] = 'List Calon MPM';
        $this->load->view("_partials/head.php", $titlempm);
		
		$pagempm["page"] = 'mpm';
        $this->load->view("_partials/sidebar_prodi.php", $pagempm);        
		
        $data["calonmpm"] = $this->Calonmpm_model->getByProdi($prodi);
        $this->load->view("aksesprodi/list_calonmpm", $data);
    }
	
    public function add()
    {		
		$calonmpm = $this->Calonmpm_model;
		
		//jika ada post submit yang diterima pada form
		if($this->input->post('submit'))
		{
			$cek = $capresbem->checkNim()->num_rows();
			// echo "<script> alert('$cek');</script>";
			if($cek == 0) {
				$calonmpm->save();
				$this->session->set_flashdata('success', 'Berhasil disimpan');
				//mengarahkan file ke controller calonmpm
				redirect ('aksesprodi/Calonmpm');
				
			} else {
				echo "<script> alert('NIM sudah digunakan');</script>";
			}
            
		}
		
		$titlempm["title"] = 'List Calon MPM';
        $this->load->view("_partials/head.php", $titlempm);
		
		$pagempm["page"] = 'mpm';
        $this->load->view("_partials/sidebar_prodi.php", $pagempm); 
		
		$this->load->view("aksesprodi/add_calonmpm");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('aksesprodi/Calonmpm');
       
        $calonmpm = $this->Calonmpm_model;
		
		if($_POST==null)
		{
			$data["calonmpm"] = $calonmpm->getById($id);
			if (!$data["calonmpm"]) show_404();
			
			$titlempm["title"] = 'List Calon MPM';
			$this->load->view("_partials/head.php", $titlempm);
			
			$pagempm["page"] = 'mpm';
			$this->load->view("_partials/sidebar_prodi.php", $pagempm); 
			
			$this->load->view("aksesprodi/edit_calonmpm", $data);
		}
		else
		{
			$calonmpm->update();
            $this->session->set_flashdata('success', 'Berhasil diedit');

			redirect ('aksesprodi/Calonmpm');
		}
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->Calonmpm_model->delete($id)) {
            redirect(site_url('aksesprodi/Calonmpm'));
        }
    }

	public function tertulis()
    {
		$titlempm["title"] = 'Tes Tertulis MPM';
		$this->load->view("_partials/head.php", $titlempm);

		$pagempm["page"] = 'testulismpm';
		$this->load->view("_partials/sidebar_prodi.php", $pagempm); 
			
        $data["calonmpm"] = $this->Calonmpm_model->getAll();
        $this->load->view("aksesprodi/mpm_tertulis", $data);
    }
	
	public function wawancara()
    {
		$titlempm["title"] = 'Wawancara MPM';
		$this->load->view("_partials/head.php", $titlempm);

		$pagempm["page"] = 'wawancarampm';
		$this->load->view("_partials/sidebar_prodi.php", $pagempm); 
		
        $data["calonmpm"] = $this->Calonmpm_model->getAll();
        $this->load->view("aksesprodi/mpm_wawancara", $data);
    }
	
	public function debat()
    {
		$titlempm["title"] = 'Debat MPM';
		$this->load->view("_partials/head.php", $titlempm);

		$pagempm["page"] = 'debatmpm';
		$this->load->view("_partials/sidebar_prodi.php", $pagempm); 
		
        $data["calonmpm"] = $this->Calonmpm_model->getAll();
        $this->load->view("aksesprodi/mpm_debat", $data);
    }
	
	public function pemilu()
    {
		$titlempm["title"] = 'Pemilu MPM';
		$this->load->view("_partials/head.php", $titlempm);

		$pagempm["page"] = 'pemilumpm';
		$this->load->view("_partials/sidebar_prodi.php", $pagempm); 
		
        $data["calonmpm"] = $this->Calonmpm_model->getAll();
        $this->load->view("aksesprodi/mpm_pemilu", $data);
    }
}