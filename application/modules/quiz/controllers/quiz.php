<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Quiz extends MX_Controller {

	/*function __construct(){
		parent::__construct();
		echo Modules::run('modules/quiz/models/quiz_model');
	}*/	
	
	public function index()
	{
		$this->load->model('quiz_model');
		$data['data'] = $this->quiz_model->tampilData();
		//echo Modules::run('modules/quiz/views/quiz_view');
		$this->load->view('quiz_view',$data);
	}
	
	public function tambah_quiz(){
		//$this->load->view('tambah_quiz');
	}
	
	/*public function coba_quiz($id){
		$this->form_validation->set_rules('judul', 'judul', 'required|trim');
        $this->form_validation->set_rules('tanggal', 'tanggal', 'required');
		$this->form_validation->set_rules('pertanyaan', 'pertanyaa', 'required');
		$this->form_validation->set_rules('pilihan_jawaban', 'Pilihan Jawaban', 'required');
		$this->form_validation->set_rules('jawaban_benar', 'jawaban_benar', 'required');
		$this->form_validation->set_rules('tipe_pertanyaan', 'tipe pertanyaan', 'required');
		
		if($this->form_validation->run()){
			$this->quiz_model->edit($id,$data);
			echo 'belum ada data';
		}
		else{
			$data = array('data'=>$this->quiz_model->getId($id));
		}
		
	}*/
}
