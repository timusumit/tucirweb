<?php
class Partnership_setup_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
        $this->load->helper('url');

    }


    public function set_partnership(){
    	$data=array(
    //	'vision'=>$this->input->post('vision'),
    	//'objective'=>$this->input->post('objective'),
    	'partnership'=>$this->input->post('partnership'),
    	);
      // print_r($data);exit;

    
    
    		$this->db->where('partnership_id',1);
    		return $this->db->update('partnership_setup',$data);
    	

    }

    public function get_partnership(){
        $this->db->limit(1);
    	$query=$this->db->get_where('partnership_setup');

    	return $query->result_array();
    }
/* write above here */
}