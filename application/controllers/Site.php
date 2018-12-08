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
    }

	

	public function display($view,$data){
		$data['contact_setup']=$this->contact_setup_model->get_contact();
		$data['menu_setup']=$this->menu_setup_model->get_page_from_menu();
	 	$data['submenu']=$this->menu_setup_model->get_submenu_page();
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
