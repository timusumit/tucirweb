<?php 
include_once(APPPATH.'controllers/Admin_controller.php');
class Partnership_setup extends Admin_controller{

	public function __construct(){
		parent::__construct();
		  $this->load->model('partnership_setup_model');
		  $this->load->model('user_model');
		    $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
	}


public function index(){
	$data['partnership_setup']=$this->partnership_setup_model->get_partnership();
	$data['titlename']=$this->user_model->get_logged_user();
	$this->display('admin/partnership_setup',$data);
}

public function add(){

		$this->partnership_setup_model->set_partnership();
		redirect('admin/partnership_setup');
	
}

/* write above here */
}
