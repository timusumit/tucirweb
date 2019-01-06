<?php
class Student_affiliation_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
        $this->load->helper('url');

    }


    public function set_sa($sa_id=0){
    	$data=array(
    	'sa_country'=>$this->input->post('sa_country'),
    	'sa_name'=>$this->input->post('sa_name'),
        'sa_duration'=>$this->input->post('sa_duration'),
    	'sa_degree'=>$this->input->post('sa_degree'),
        'sa_topics'=>$this->input->post('sa_topics'),
    	);
       // print_r($data);exit;

    	if($sa_id==0){

    		return $this->db->insert('student_affiliation',$data);
    	}
    	else{
          //  echo "here";exit;

    		$this->db->where('sa_id',$sa_id);
    		return $this->db->update('student_affiliation',$data);
    	}

    }

    public function get_sa(){
      //  $this->db->limit();
    	$query=$this->db->get_where('student_affiliation');
    	return $query->result_array();
    }



    public function delete_sa($sa_id){
        $this->db->where('sa_id',$sa_id);
        return $this->db->delete('student_affiliation');

    }
/* write above here */
}