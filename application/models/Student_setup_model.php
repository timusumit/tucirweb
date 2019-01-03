<?php
class student_setup_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }


     public function set_student_name($student_id = 0,$file_name,$full_path)
    {
       // echo "here";exit;

             $this->load->helper('url');
 
        $data = array(
            'student_image_name'=>$file_name,
            'student_image_url'=>$full_path,
            //'primary_student_name'=>$this->input->post('primary_student_name'),
            'student_name'=>$this->input->post('student_name'),
            'student_college'=>$this->input->post('student_college'),
            'student_type'=>$this->input->post('student_type'),
            /*'student_btn_text'=>$this->input->post('student_btn_text'),
            'student_btn_link'=>$this->input->post('student_btn_link'),
*/


        );
        if ($student_id === 0)
        {
        	return $this->db->insert('student_setup',$data);
        
        } else{
 //print_r ($ss_id); exit;
        $this->db->where('student_id',$student_id);
        return $this->db->update('student_setup',$data);
    }
 
 }

 public function get_student_image_name(){
	{
       
    $query = $this->db->get_where('student_setup');
    return $query->result_array();
    }
}



     public function get_student_image_byid($student_id = 0)
    {
        //echo "here";exit;
        if ($student_id === 0)
        {
            $query = $this->db->get('student_setup');
            return $query->result_array();
        }
 //echo "here";
        $query = $this->db->get_where('student_setup', array('student_id' => $student_id));
        return $query->row_array();
    }


 public function delete_student($student_id)
    {
        $this->db->where('student_id', $student_id);
        return $this->db->delete('student_setup');
    }









/* function goes above here */
}

 

