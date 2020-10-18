<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Capresbem_model extends CI_Model {
	private $_table = "pemira_mscapresbem";
	private $_tableProdi = "pemira_msprodi";
	
	public function getAll() {
		return $this->db->get($this->_table)->result();
	}
	
	public function getAllProdi() {
		return $this->db->get($this->_tableProdi)->result();
	}
	
	public function getById($cprs_nim) {
		return $this->db->get_where($this->_table, ["cprs_nim" => $cprs_nim])->row();
	}
	
	public function checkNim() {
		$cprs_nim = $this->input->post('cprs_nim');
		
		$tampil = $this->db->query("SELECT * FROM pemira_mscapresbem WHERE cprs_nim = '$cprs_nim'");

		return $tampil;
	}
	
	public function getByProdi($cprs_prodi) {
		return $this->db->get_where($this->_table, ["cprs_prodi" => $cprs_prodi])->result();
	}
	
	public function save()
    {
		if($_POST['submit']){
			$extensi = array('png', 'jpg', 'jpeg', 'gif', 'BMG', 'TIFF');  
			$nama_file = $_FILES['cprs_foto']['name'];
			$x = explode(".", $nama_file);
			$ext = strtolower(end($x));
			$ukuran = $_FILES['cprs_foto']['size'];
			$file_tmp = $_FILES["cprs_foto"]["tmp_name"];
			if(in_array($ext, $extensi) === true){
				if($ukuran < 999999999999){
					//move_uploaded_file($file_tmp, "assets/Photo/".$nama);
					$pathFileTujuan = "C:\\xampp\\htdocs\\web_sim\\assets\\img\\capres\\".$_FILES["cprs_foto"]["name"];
					copy($file_tmp, $pathFileTujuan);
					$cprs_foto = $nama_file;
				}
			}
		}
		
		//mengambil data dari view dan letakkan pada variabel
		$cprs_nim = $this->input->post('cprs_nim');
		$cprs_nama = $this->input->post('cprs_nama');
		$cprs_hp = $this->input->post('cprs_hp');
		$cprs_prodi = $this->input->post('cprs_prodi');
		$cprs_tingkat = $this->input->post('cprs_tingkat');
		$cprs_motto = $this->input->post('cprs_motto');
		$cprs_visi = $this->input->post('cprs_visi');
		$cprs_misi = $this->input->post('cprs_misi');
		// $cprs_foto = $this->input->post('cprs_foto');
		// $cprs_foto = "abc.jpg";
		$cprs_status = "Mendaftar";
		
		//meletakkan isi dari variabel ke dalam array
		$data = array('cprs_nim'=>$cprs_nim,'cprs_nama'=>$cprs_nama,
		'cprs_hp'=>$cprs_hp,'cprs_prodi'=>$cprs_prodi,
		'cprs_tingkat'=>$cprs_tingkat,'cprs_motto'=>$cprs_motto,'cprs_visi'=>$cprs_visi,
		'cprs_misi'=>$cprs_misi,'cprs_foto'=>$cprs_foto,'cprs_status'=>$cprs_status);

		//menginput array $data ke dalam tabel komentar pada database
		$this->load->database();
		$this->db->insert($this->_table, $data);
    }

    public function update()
    {
		$nama_file = $_FILES['cprs_foto']['name'];
		// echo $nama_file;
		// exit();
		if($nama_file != NULL){
		//if($_POST["submit"]){
			$extensi = array('png', 'jpg', 'jpeg', 'gif', 'BMG', 'TIFF');  
			$nama_file = $_FILES['cprs_foto']['name'];
			$x = explode(".", $nama_file);
			$ext = strtolower(end($x));
			$ukuran = $_FILES['cprs_foto']['size'];
			$file_tmp = $_FILES["cprs_foto"]["tmp_name"];
					
			if(in_array($ext, $extensi) === true){
				if($ukuran < 999999999999){
					//move_uploaded_file($file_tmp, "assets/Photo/".$nama);
					$pathFileTujuan = "C:\\xampp\\htdocs\\web_sim\\assets\\img\\capres\\".$_FILES["cprs_foto"]["name"];
					copy($file_tmp, $pathFileTujuan);
					$cprs_foto = $nama_file;
				}
			}
		} else {
			$cprs_foto = $this->input->post('picture_old');
		}
			
        $cprs_nim = $this->input->post('cprs_nim');
		$cprs_nama = $this->input->post('cprs_nama');
		$cprs_hp = $this->input->post('cprs_hp');
		$cprs_prodi = $this->input->post('cprs_prodi');
		$cprs_tingkat = $this->input->post('cprs_tingkat');
		$cprs_motto = $this->input->post('cprs_motto');
		$cprs_visi = $this->input->post('cprs_visi');
		$cprs_misi = $this->input->post('cprs_misi');
		// $cprs_foto = $this->input->post('cprs_foto');
		// $cprs_foto = "abc.jpg";
		$cprs_status = "Mendaftar";
		
		$data = array('cprs_nim'=>$cprs_nim,'cprs_nama'=>$cprs_nama,
		'cprs_hp'=>$cprs_hp,'cprs_prodi'=>$cprs_prodi,
		'cprs_tingkat'=>$cprs_tingkat,'cprs_motto'=>$cprs_motto,'cprs_visi'=>$cprs_visi,
		'cprs_misi'=>$cprs_misi,'cprs_foto'=>$cprs_foto,'cprs_status'=>$cprs_status);
		$this->db->where('cprs_nim', $cprs_nim);
		$this->db->update($this->_table, $data);
    }

    public function delete($cprs_nim)
    {
        return $this->db->delete($this->_table, array("cprs_nim" => $cprs_nim));
    }
}