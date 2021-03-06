<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('inquiry_model');
        $this->load->model('contact_setup_model');
        $this->load->model('create_page_model');
        $this->load->model('menu_setup_model');
        $this->load->model('slider_setup_model');
        $this->load->model('gallery_setup_model');
        $this->load->model('staff_setup_model');
        $this->load->model('create_post_model');
        $this->load->model('create_pub_model');
        $this->load->model('vmi_setup_model');
        $this->load->model('student_setup_model');
        $this->load->model('organization_setup_model');
        $this->load->model('guideline_setup_model');
        $this->load->model('partnership_setup_model');
        $this->load->model('institute_affiliation_model');
        $this->load->model('student_affiliation_model');
         $this->load->model('social_setup_model');
        $this->load->helper('text');
    }

	

	public function display($view,$data){
		$data['contact_setup']=$this->contact_setup_model->get_contact();
		$data['menu_setup']=$this->menu_setup_model->get_page_from_menu();
	 	$data['submenu']=$this->menu_setup_model->get_submenu_page();
	 	$data['slider_setup']=$this->slider_setup_model->get_slider_image_name();
	 	$data['gallery_setup']=$this->gallery_setup_model->get_gallery_image_name();
	 	$data['staff_setup']=$this->staff_setup_model->get_staff_image_name();
	 	$data['hostel_staff']=$this->staff_setup_model->get_hostel_staff();
	 	$data['get_news']=$this->create_post_model->get_news();
	 	$data['get_news_list']=$this->create_post_model->get_news_list();
	 	$data['get_events_list']=$this->create_post_model->get_events_list();
	 	$data['create_pub']=$this->create_pub_model->get_pub_image_name();
	 	$data['news_for_inner']=$this->create_post_model->get_news_inner();
	 	$data['vmi_setup']=$this->vmi_setup_model->get_vmi();
	 	$data['organization_setup']=$this->organization_setup_model->get_organization();
	 	$data['guideline_setup']=$this->guideline_setup_model->get_guideline();
	 	$data['partnership_setup']=$this->partnership_setup_model->get_partnership();
	 	$data['student_setup']=$this->student_setup_model->get_student_image_name();
	 	$data['institute_affiliation']=$this->institute_affiliation_model->get_ia();
	 	$data['student_affiliation']=$this->student_affiliation_model->get_sa();
	 	$data['social_setup']=$this->social_setup_model->get_social();
		$this->load->view('site_templates/header.php');
		$this->load->view('site_templates/navigation.php',$data);
		$this->load->view($view,$data);
		$this->load->view('site_templates/footer.php');

	}

	public function index()
	{
		$data['page_description']='Home';
	/*	$data['contact_setup']=$this->contact_setup_model->get_contact();*/
		$this->display('home',$data);
	}

	public function contact(){
		$data['page_description']='Concat Us';
		/*$data['contact_setup']=$this->contact_setup_model->get_contact();*/
		$this->display('pages/contact',$data);
	}

	public function gallery(){
		$data['page_description']='Gallery';
		$this->display('pages/gallery',$data);
	}

		public function publication(){
		$data['page_description']='Publication';
		$this->display('pages/publication',$data);
	}
	public function news(){
		$data['page_description']='News';
		$this->display('pages/news',$data);
	}

	public function introduction(){
		$data['page_description']='introduction';
		$this->display('pages/introduction',$data);
	}
	public function staff(){
		$data['page_description']='staff';
		$this->display('pages/staff',$data);
	}
	public function hostel(){
		$data['page_description']='hostel';
		$this->display('pages/hostel',$data);
	}

	public function organization(){
		$data['page_description']='organization';
		$this->display('pages/organization',$data);
	}
	public function exchange_program(){
		$data['page_description']='Exchange Program';
		$this->display('pages/exchange-program',$data);
	}
	public function institution_affiliation(){
		$data['page_description']='';
		$this->display('pages/institute_affiliation',$data);
	}
	public function student_affiliation(){
		$data['page_description']='';
		$this->display('pages/student_affiliation',$data);
	}
	public function guideline(){
		$data['page_description']='';
		$this->display('pages/guideline',$data);
	}

public function partnership(){
		$data['page_description']='';
		$this->display('pages/partnership',$data);
	}
	
	public function add_inquiry(){
    $this->inquiry_model->set_inquiry();
   	$this->session->set_flashdata('success_contact', 'Message Send Successfully.');
    redirect('site/contact');

	}
	public function page()

	{
		$data['create_page']=$this->create_page_model->get_page_content();
		$this->display('site/page',$data);
	}
}
