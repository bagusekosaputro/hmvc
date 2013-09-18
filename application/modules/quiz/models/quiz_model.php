<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Quiz_Model extends CI_Model {

	public function tampilData()
	{
		$query= $this->db->get('admin_user');
		if($query->num_rows()>0){
			return $query->result();
		}
		else{
			return array();
		}
	}
	public function tambah($data){
		$tambah = $this->db->insert('admin_user',$data);
		return $tambah;
	}
	
	public function getId($id){
		$this->db->where('id_admin',$id);
		return $this->db->get('admin_user')->row();
	}
	
	public function edit($id,$data){
		$this->db->where('id_admin',$id);
		return $this->db->update('admin_user',$data);
	}
	
	public function hapus($id){
		$this->db->where('id_admin',$id);
		return $this->db->delete('admin_user');
	}
}