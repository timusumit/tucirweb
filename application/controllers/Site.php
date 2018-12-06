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
    }

	

	public function display($view,$data){
		$this->load->view('site_templates/header.php');
		$this->load->view('site_templates/navigation.php');
		$this->load->view($view,$data);
		$this->load->view('site_templates/footer.php');

	}

	public function index()
	{
		$data['page_description']='Home';

		$this->display('home',$data);
	}

	public function contact(){
		$data['page_description']='Concat Us';
		$this->display('pages/contact',$data);
	}

	public function add_inquiry(){
    $this->inquiry_model->set_inquiry();
   	$this->session->set_flashdata('success_contact', 'Message Send Successfully.');
    redirect('site/contact');

	}
}
