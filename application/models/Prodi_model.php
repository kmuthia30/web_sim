<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Prodi_model extends CI_Model {
	private $_table = "pemira_msprodi";
	public $prd_id;
	public $prd_nama;
	public $prd_singkatan;
	public $prd_email;
	public $prd_password;
	
	public function rules() {
		return [
			['field' => 'prd_nama',
			'label' => 'Nama',
			'rules' => 'required'
			],
			
			['field' => 'prd_singkatan',
			'label' => 'Singkatan',
			'rules' => 'required'
			],
			
			['field' => 'prd_email',
			'label' => 'Email',
			'rules' => 'required'
			],
			
			['field' => 'prd_password',
			'label' => 'Password'
			],
		];
	}

	public function getAll() {
		return $this->db->get($this->_table)->result();
	}
	
	public function getById($prd_id) {
		return $this->db->get_where($this->_table, ["prd_id" => $prd_id])->row();
	}
	
	public function save()
    {
        $post = $this->input->post();
        $this->prd_nama = $post["prd_nama"];
        $this->prd_singkatan = $post["prd_singkatan"];
        $this->prd_email = $post["prd_email"];
        $this->prd_password = $post["prd_password"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->prd_id = $post["prd_id"];
        $this->prd_nama = $post["prd_nama"];
        $this->prd_singkatan = $post["prd_singkatan"];
        $this->prd_email = $post["prd_email"];
        $this->prd_password = $post["prd_password"];
        return $this->db->update($this->_table, $this, array('prd_id' => $post['prd_id']));
    }

    public function delete($prd_id)
    {
        return $this->db->delete($this->_table, array("prd_id" => $prd_id));
    }
}