<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Mpm_model extends CI_Model {
	private $_tableCapres = "pemira_mscapresbem";
	private $_tableCapresLama = "calonpilihan";
	private $_tableCalmpm = "pemira_mscalonmpm";
	private $_tableProdi = "pemira_msprodi";
	
	// public function getAll() {
		// return $this->db->get($this->_table)->result();
	// }
	
	public function getAllCapres() {
		return $this->db->get($this->_tableCapres)->result();
	}
	
	public function getAllCapresLama() {
		// return $this->db->get($this->_tableCapresLama)->result();
		$query = $this->db->query(
			 'select calonpilihan.nama as nama, count(*) as total, calonpilihan.foto  
			 from polling join calonpilihan 
			 on polling.fkCalonPilihan = calonpilihan.id 
			 where polling.fkTipePilihan = 1 
			 group by (calonpilihan.nama)');
		return $query->result();
	}
	
	
	function tampil_grafik_paket()
	{
		// select fkCalonPilihan as tahun, count(*) as total 
			 // from polling 
			 // where fkTipePilihan = 1 group by (fkCalonPilihan)
		$query = $this->db->query(
			 'select calonpilihan.nama as tahun, count(*) as total 
			 from polling join calonpilihan 
			 on polling.fkCalonPilihan = calonpilihan.id 
			 where polling.fkTipePilihan = 1 
			 group by (calonpilihan.nama)');
		return $query->result();
	}
	
	public function countHasilCapres() {
		$queryTotal = 
		"SELECT COUNT( * ) AS COUNT FROM polling 
		left join pemilih ON fkPemilih = pemilih.id 
		left join prodi on fkProdi = prodi.id 
		where  fkTipePilihan = 1";
	}
	
	// public function getById($cln_nim) {
		// return $this->db->get_where($this->_table, ["cln_nim" => $cln_nim])->row();
	// }

}