<?php
class Organization_setup_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
        $this->load->helper('url');

    }


    public function set_organization(){
    	$data=array(
    //	'vision'=>$this->input->post('vision'),
    	//'objective'=>$this->input->post('objective'),
    	'organization'=>$this->input->post('organization'),
    	);
      // print_r($data);exit;

    
    
    		$this->db->where('organization_id',1);
    		return $this->db->update('organization_setup',$data);
    	

    }

    public function get_organization(){
        $this->db->limit(1);
    	$query=$this->db->get_where('organization_setup');

    	return $query->result_array();
    }
/* write above here */
}