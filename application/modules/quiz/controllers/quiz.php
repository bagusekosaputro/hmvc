<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Quiz extends MX_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('modules/model');
	}	
	
	public function index()
	{
		$data['data'] = $this->admin_model->tampilData();
		$this->load->view('admin/admin_view',$data);
	}
	
	public function tambah_view(){
		$this->load->view('admin/tambah_admin');
	}
}
