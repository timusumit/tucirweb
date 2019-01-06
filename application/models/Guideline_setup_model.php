<?php
class Guideline_setup_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
        $this->load->helper('url');

    }


    public function set_guideline(){
    	$data=array(
    //	'vision'=>$this->input->post('vision'),
    	//'objective'=>$this->input->post('objective'),
    	'guideline'=>$this->input->post('guideline'),
    	);
      // print_r($data);exit;

    
    
    		$this->db->where('guideline_id',1);
    		return $this->db->update('guideline_setup',$data);
    	

    }

    public function get_guideline(){
        $this->db->limit(1);
    	$query=$this->db->get_where('guideline_setup');

    	return $query->result_array();
    }
/* write above here */
}