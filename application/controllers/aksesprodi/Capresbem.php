<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Capresbem extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("aksesprodi/Capresbem_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
		$titlecapres["title"] = 'List Capres BEM';
        $this->load->view("_partials/head.php", $titlecapres);
		
		$pagecapres["page"] = 'capres';
        $this->load->view("_partials/sidebar_prodi.php", $pagecapres);        
		
        $data["capresbem"] = $this->Capresbem_model->getAll();
        $this->load->view("aksesprodi/list_capresbem", $data);
    }
	
	public function getByProdi($prodi)
    {
		$titlecapres["title"] = 'List Capres BEM';
        $this->load->view("_partials/head.php", $titlecapres);
		
		$pagecapres["page"] = 'capres';
        $this->load->view("_partials/sidebar_prodi.php", $pagecapres);        
		
        $data["capresbem"] = $this->Capresbem_model->getByProdi($prodi);
        $this->load->view("aksesprodi/list_capresbem", $data);
    }
	
    public function add()
    {		
		$capresbem = $this->Capresbem_model;
		
		//jika ada post submit yang diterima pada form
		if($this->input->post('submit'))
		{
			$cek = $capresbem->checkNim()->num_rows();
			// echo "<script> alert('$cek');</script>";
			if($cek == 0) {
				$capresbem->save();
				$this->session->set_flashdata('success', 'Berhasil disimpan');
				//mengarahkan file ke controller capresbem
				redirect ('aksesprodi/Capresbem');
				
			} else {
				echo "<script> alert('NIM sudah digunakan');</script>";
			}
		}
		
		$titlecapres["title"] = 'Tambah Capres BEM';
        $this->load->view("_partials/head.php", $titlecapres);
		$pagecapres["page"] = 'capres';
        $this->load->view("_partials/sidebar_prodi.php", $pagecapres);
		$this->load->view("aksesprodi/add_capresbem");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('capresbem');
       
        $capresbem = $this->Capresbem_model;
		
		if($_POST==null)
		{
			$data["capresbem"] = $capresbem->getById($id);
			if (!$data["capresbem"]) show_404();
			$titlecapres["title"] = 'Edit Capres BEM';
			$this->load->view("_partials/head.php", $titlecapres);
			$pagecapres["page"] = 'capres';
			$this->load->view("_partials/sidebar_prodi.php", $pagecapres);
			$this->load->view("aksesprodi/edit_capresbem", $data);
		}
		else
		{
			$capresbem->update();
            $this->session->set_flashdata('success', 'Berhasil diedit');

			redirect ('aksesprodi/Capresbem');
		}
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->Capresbem_model->delete($id)) {
            redirect(site_url('aksesprodi/Capresbem'));
        }
    }
}