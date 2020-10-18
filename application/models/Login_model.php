<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
	private $_tableProdi = "pemira_msprodi";

	public function loginProdi() {
		$prd_email = $this->input->post('prd_email');
		$prd_password = $this->input->post('prd_password');

		$tampil = $this->db->query("SELECT * FROM pemira_msprodi WHERE prd_email = '$prd_email' AND prd_password = '$prd_password'");

			return $tampil;
		// return $this->db->get_where($this->_tableProdi, ["prd_email" => $prd_email, "prd_password" => $prd_password])->row();
	}
	
	public function loginPemilih() {
		$pmlh_nim = $this->input->post('pmlh_nim');
		$pmlh_kode = $this->input->post('pmlh_kode');

		$tampil = $this->db->query("SELECT * FROM pemira_mspemilih WHERE pmlh_nim = '$pmlh_nim' AND pmlh_kode = '$pmlh_kode'");

		return $tampil;
		// return $this->db->get_where($this->_tableProdi, ["prd_email" => $prd_email, "prd_password" => $prd_password])->row();
	}
	
}