<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Prodi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Prodi_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["prodi"] = $this->Prodi_model->getAll();
        $this->load->view("prodi/list", $data);
    }

    public function add()
    {
        $prodi = $this->Prodi_model;
        $validation = $this->form_validation;
        $validation->set_rules($prodi->rules());

        if ($validation->run()) {
            $prodi->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
			$data["prodi"] = $this->Prodi_model->getAll();
			$this->load->view("prodi/list", $data);
        }

        $this->load->view("prodi/add");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('Prodi');
       
        $prodi = $this->Prodi_model;
        $validation = $this->form_validation;
        $validation->set_rules($prodi->rules());

        if ($validation->run()) {
            $prodi->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
			$data["prodi"] = $this->Prodi_model->getAll();
			$this->load->view("prodi/list", $data);
        }

        $data["prodi"] = $prodi->getById($id);
        if (!$data["prodi"]) show_404();
        
        $this->load->view("prodi/edit", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->Prodi_model->delete($id)) {
            redirect(site_url('Prodi'));
        }
    }
}