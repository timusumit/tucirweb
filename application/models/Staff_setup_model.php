<?php
class Staff_setup_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }


     public function set_staff_name($staff_id = 0,$file_name,$full_path)
    {
       // echo "here";exit;

             $this->load->helper('url');
 
        $data = array(
            'staff_image_name'=>$file_name,
            'staff_image_url'=>$full_path,
            //'primary_staff_name'=>$this->input->post('primary_staff_name'),
            'staff_name'=>$this->input->post('staff_name'),
            'staff_designation'=>$this->input->post('staff_designation'),
            'staff_phone'=>$this->input->post('staff_phone'),
            'staff_email'=>$this->input->post('staff_email'),
            'is_hostel_staff'=>$this->input->post('is_hostel_staff'),
            'staff_order'=>$this->input->post('staff_order'),

            /*'staff_btn_text'=>$this->input->post('staff_btn_text'),
            'staff_btn_link'=>$this->input->post('staff_btn_link'),
*/


        );
        if ($staff_id === 0)
        {
        	return $this->db->insert('staff_setup',$data);
        
        } else{
 //print_r ($ss_id); exit;
        $this->db->where('staff_id',$staff_id);
        return $this->db->update('staff_setup',$data);
    }
 
 }

 public function get_staff_image_name(){
	{
    $this->db->where('is_hostel_staff',0);
    $this->db->order_by('staff_order','ASC');
    $query = $this->db->get('staff_setup');
    return $query->result_array();
    }
}



     public function get_staff_image_byid($staff_id = 0)
    {
        //echo "here";exit;
        if ($staff_id === 0)
        {
            $query = $this->db->get('staff_setup');
            return $query->result_array();
        }
 //echo "here";
        $query = $this->db->get_where('staff_setup', array('staff_id' => $staff_id));
        return $query->row_array();
    }


 public function delete_staff($staff_id)
    {
        $this->db->where('staff_id', $staff_id);
        return $this->db->delete('staff_setup');
    }









/* function goes above here */
}

 

