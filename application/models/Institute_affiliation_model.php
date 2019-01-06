<?php
class Institute_affiliation_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
        $this->load->helper('url');

    }


    public function set_ia($ia_id=0){
    	$data=array(
    	'ia_country'=>$this->input->post('ia_country'),
    	'ia_university'=>$this->input->post('ia_university'),
        'ia_validity'=>$this->input->post('ia_validity'),
    	'ia_type'=>$this->input->post('ia_type'),
        'ia_cat'=>$this->input->post('ia_cat'),
    	);
       // print_r($data);exit;

    	if($ia_id==0){

    		return $this->db->insert('institute_affiliation',$data);
    	}
    	else{
          //  echo "here";exit;

    		$this->db->where('ia_id',$ia_id);
    		return $this->db->update('institute_affiliation',$data);
    	}

    }

    public function get_ia(){
      //  $this->db->limit();
    	$query=$this->db->get_where('institute_affiliation');
    	return $query->result_array();
    }



    public function delete_ia($ia_id){
        $this->db->where('ia_id',$ia_id);
        return $this->db->delete('institute_affiliation');

    }
/* write above here */
}