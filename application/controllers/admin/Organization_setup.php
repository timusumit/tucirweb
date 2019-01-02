<?php 
include_once(APPPATH.'controllers/Admin_controller.php');
class Organization_setup extends Admin_controller{

	public function __construct(){
		parent::__construct();
		  $this->load->model('organization_setup_model');
		  $this->load->model('user_model');
		    $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
	}


public function index(){
	$data['organization_setup']=$this->organization_setup_model->get_organization();
	$data['titlename']=$this->user_model->get_logged_user();
	$this->display('admin/organization_setup',$data);
}

public function add(){

		$this->organization_setup_model->set_organization();
		redirect('admin/organization_setup');
	
}

/* write above here */
}
