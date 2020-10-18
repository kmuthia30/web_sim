<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Vote_model extends CI_Model {
	private $_tableCapres = "pemira_mscapresbem";
	private $_tableMpm = "pemira_mscalonmpm";
	private $_tablePolling = "polling";
	
	public function getAllCapres() {
		return $this->db->get($this->_tableCapres)->result();
	}
	
	public function getMpmByProdi($cln_prodi) {
		return $this->db->get_where($this->_tableMpm, ["cln_prodi" => $cln_prodi])->result();
	}

	public function voteCapres()
    {
		//mengambil data dari view dan letakkan pada variabel
		$pmlh_nim = $this->input->post('nimPemilih');
		$cprs_nim = $this->input->post('nimCapres');
		$tipe = $this->input->post('tipe');
		$dateNow=date("Y-m-d H:i:s");
		
		//meletakkan isi dari variabel ke dalam array
		$data = array('fkPemilih'=>$pmlh_nim,'fkTipePilihan'=>$tipe,
		'fkCalonPilihan'=>$cprs_nim,'tanggalPilih'=>$dateNow);

		//menginput array $data ke dalam tabel komentar pada database
		$this->load->database();
		$this->db->insert($this->_tablePolling, $data);
		
		// return true;
    }
	
	public function voteMpm()
    {
		//mengambil data dari view dan letakkan pada variabel
		$pmlh_nim = $this->input->post('nimPemilih');
		$cln_nim = $this->input->post('nimCalon');
		$tipe = $this->input->post('tipe');
		$dateNow=date("Y-m-d H:i:s");
		
		//meletakkan isi dari variabel ke dalam array
		$data = array('fkPemilih'=>$pmlh_nim,'fkTipePilihan'=>$tipe,
		'fkCalonPilihan'=>$cln_nim,'tanggalPilih'=>$dateNow);

		//menginput array $data ke dalam tabel komentar pada database
		$this->load->database();
		$this->db->insert($this->_tablePolling, $data);
		
		// return true;
    }
	
	public function checkVoteCapres($nimPemilih)
    {
		return $this->db->query("SELECT * FROM polling WHERE fkPemilih = '$nimPemilih' AND fkTipePilihan = 'BEM'")->result();
    }

	public function checkVoteMpm($nimPemilih)
    {
		return $this->db->query("SELECT * FROM polling WHERE fkPemilih = '$nimPemilih' AND fkTipePilihan = 'MPM'")->result();
    }
}