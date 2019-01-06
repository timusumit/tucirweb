<?php 
include_once(APPPATH.'controllers/Admin_controller.php');
class Guideline_setup extends Admin_controller{

	public function __construct(){
		parent::__construct();
		  $this->load->model('guideline_setup_model');
		  $this->load->model('user_model');
		    $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
	}


public function index(){
	$data['guideline_setup']=$this->guideline_setup_model->get_guideline();
	$data['titlename']=$this->user_model->get_logged_user();
	$this->display('admin/guideline_setup',$data);
}

public function add(){

		$this->guideline_setup_model->set_guideline();
		redirect('admin/guideline_setup');
	
}

/* write above here */
}
