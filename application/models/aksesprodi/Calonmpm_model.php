<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Calonmpm_model extends CI_Model {
	private $_table = "pemira_mscalonmpm";
	private $_tableProdi = "pemira_msprodi";
	
	public function getAll() {
		return $this->db->get($this->_table)->result();
	}
	
	public function getAllProdi() {
		return $this->db->get($this->_tableProdi)->result();
	}
	
	public function getById($cln_nim) {
		return $this->db->get_where($this->_table, ["cln_nim" => $cln_nim])->row();
	}
	
	public function checkNim() {
		$cln_nim = $this->input->post('cln_nim');
		
		$tampil = $this->db->query("SELECT * FROM pemira_mscalonmpm WHERE cln_nim = '$cln_nim'");

		return $tampil;
	}
	
	public function getByProdi($cln_prodi) {
		return $this->db->get_where($this->_table, ["cln_prodi" => $cln_prodi])->result();
	}
	
	public function save()
    {
		if($_POST['submit']){
			$extensi = array('png', 'jpg', 'jpeg', 'gif', 'BMG', 'TIFF');  
			$nama_file = $_FILES['cln_foto']['name'];
			$x = explode(".", $nama_file);
			$ext = strtolower(end($x));
			$ukuran = $_FILES['cln_foto']['size'];
			$file_tmp = $_FILES["cln_foto"]["tmp_name"];
			if(in_array($ext, $extensi) === true){
				if($ukuran < 999999999999){
					//move_uploaded_file($file_tmp, "assets/Photo/".$nama);
					$pathFileTujuan = "C:\\xampp\\htdocs\\web_sim\\assets\\img\\mpm\\".$_FILES["cln_foto"]["name"];
					copy($file_tmp, $pathFileTujuan);
					$cln_foto = $nama_file;
				}
			}
		}
		
		//mengambil data dari view dan letakkan pada variabel
		$cln_nim = $this->input->post('cln_nim');
		$cln_nama = $this->input->post('cln_nama');
		$cln_hp = $this->input->post('cln_hp');
		$cln_prodi = $this->input->post('cln_prodi');
		$cln_tingkat = $this->input->post('cln_tingkat');
		$cln_motto = $this->input->post('cln_motto');
		$cln_alasan = $this->input->post('cln_alasan');
		// $cln_foto = $this->input->post('cln_foto');
		// $cln_foto = "abc.jpg";
		$cln_status = "Mendaftar";
		
		//meletakkan isi dari variabel ke dalam array
		$data = array('cln_nim'=>$cln_nim,'cln_nama'=>$cln_nama,
		'cln_hp'=>$cln_hp,'cln_prodi'=>$cln_prodi,
		'cln_tingkat'=>$cln_tingkat,'cln_motto'=>$cln_motto,'cln_alasan'=>$cln_alasan,
		'cln_foto'=>$cln_foto,'cln_status'=>$cln_status);

		//menginput array $data ke dalam tabel komentar pada database
		$this->load->database();
		$this->db->insert($this->_table, $data);
    }

    public function update()
    {
		$nama_file = $_FILES['cln_foto']['name'];
		// echo $nama_file;
		// exit();
		if($nama_file != NULL){
		//if($_POST["submit"]){
			$extensi = array('png', 'jpg', 'jpeg', 'gif', 'BMG', 'TIFF');  
			$nama_file = $_FILES['cln_foto']['name'];
			$x = explode(".", $nama_file);
			$ext = strtolower(end($x));
			$ukuran = $_FILES['cln_foto']['size'];
			$file_tmp = $_FILES["cln_foto"]["tmp_name"];
					
			if(in_array($ext, $extensi) === true){
				if($ukuran < 999999999999){
					//move_uploaded_file($file_tmp, "assets/Photo/".$nama);
					$pathFileTujuan = "C:\\xampp\\htdocs\\web_sim\\assets\\img\\mpm\\".$_FILES["cln_foto"]["name"];
					copy($file_tmp, $pathFileTujuan);
					$cln_foto = $nama_file;
				}
			}
		} else {
			$cln_foto = $this->input->post('picture_old');
		}
		
        $cln_nim = $this->input->post('cln_nim');
		$cln_nama = $this->input->post('cln_nama');
		$cln_hp = $this->input->post('cln_hp');
		$cln_prodi = $this->input->post('cln_prodi');
		$cln_tingkat = $this->input->post('cln_tingkat');
		$cln_motto = $this->input->post('cln_motto');
		$cln_alasan = $this->input->post('cln_alasan');
		// $cln_foto = $this->input->post('cln_foto');
		// $cln_foto = "abc.jpg";
		$cln_status = "Mendaftar";
		
		$data = array('cln_nim'=>$cln_nim,'cln_nama'=>$cln_nama,
		'cln_hp'=>$cln_hp,'cln_prodi'=>$cln_prodi,
		'cln_tingkat'=>$cln_tingkat,'cln_motto'=>$cln_motto,'cln_alasan'=>$cln_alasan,
		'cln_foto'=>$cln_foto,'cln_status'=>$cln_status);
		$this->db->where('cln_nim', $cln_nim);
		$this->db->update($this->_table, $data);
    }

    public function delete($cln_nim)
    {
        return $this->db->delete($this->_table, array("cln_nim" => $cln_nim));
    }
}