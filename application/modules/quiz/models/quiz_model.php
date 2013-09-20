<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Quiz_Model extends CI_Model {

	public function tampilData()
	{
		$this->db->select('quiz.judul, quiz.tanggal, question.pertanyaan, question.pilihan_jawaban, question.jawaban_benar,
		question.tipe_pertanyaan');
		$this->db->join('question', 'question.id_quiz = quiz.id_quiz');
		$query= $this->db->get('quiz');
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
		$this->db->select('question.id_question');
		$this->db->join('question', 'question.id_quiz = quiz.id_quiz');
		$this->db->where('id_question',$id);
		return $this->db->get('quiz')->row();
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