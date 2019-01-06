<?php 
include_once(APPPATH.'controllers/Admin_controller.php');
class Student_affiliation extends Admin_controller{

	public function __construct(){
		parent::__construct();
		  $this->load->model('student_affiliation_model');
		  $this->load->model('user_model');
		  $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
	}


public function index(){
	$data['student_affiliation']=$this->student_affiliation_model->get_sa();
	$data['titlename']=$this->user_model->get_logged_user();
	$this->display('admin/student_affiliation',$data);
}

public function add(){
	$this->form_validation->set_rules('sa_country', 'Country', 'required');
	$this->form_validation->set_rules('sa_name', 'Name', 'required');

	if($this->form_validation->run()===FALSE){
		echo "hello";exit;
		redirect('admin/student_affiliation');
	}else{
		$this->student_affiliation_model->set_sa();
		redirect('admin/student_affiliation');
	}

}

public function edit(){
$sa_id=$this->uri->segment(4);
if(empty($sa_id)){
	show_404();
}
$this->student_affiliation_model->set_sa($sa_id);
redirect('admin/student_affiliation');

}

public function delete(){
	$sa_id=$this->uri->segment(4);
	if(empty($sa_id)){
		show_404();
	}
	$this->student_affiliation_model->delete_sa($sa_id);
	redirect('admin/student_affiliation');	
}

/* write above here */
}
