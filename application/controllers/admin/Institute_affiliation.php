<?php 
include_once(APPPATH.'controllers/Admin_controller.php');
class Institute_affiliation extends Admin_controller{

	public function __construct(){
		parent::__construct();
		  $this->load->model('institute_affiliation_model');
		  $this->load->model('user_model');
		    $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
	}


public function index(){
	$data['institute_affiliation']=$this->institute_affiliation_model->get_ia();
	$data['titlename']=$this->user_model->get_logged_user();
	$this->display('admin/institute_affiliation',$data);
}

public function add(){
	$this->form_validation->set_rules('ia_country', 'Country', 'required');
	$this->form_validation->set_rules('ia_university', 'University', 'required');

	if($this->form_validation->run()===FALSE){
		echo "hello";exit;
		redirect('admin/institute_affiliation');
	}else{
		$this->institute_affiliation_model->set_ia();
		redirect('admin/institute_affiliation');
	}

}

public function edit(){
$ia_id=$this->uri->segment(4);
if(empty($ia_id)){
	show_404();
}
$this->institute_affiliation_model->set_ia($ia_id);
redirect('admin/institute_affiliation');

}

public function delete(){
	$ia_id=$this->uri->segment(4);
	if(empty($ia_id)){
		show_404();
	}
	$this->institute_affiliation_model->delete_ia($ia_id);
	redirect('admin/institute_affiliation');	
}

/* write above here */
}
