<?php
class Create_pub_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }


     public function set_pub_image_name($pub_id = 0,$file_name,$full_path)
    {
        //echo $file_name;exit;

             $this->load->helper('url');
        $slug = url_title($this->input->post('pub_title'), 'dash', TRUE);
        $data = array(
            'pub_image_name'=>$file_name,
            'pub_image_url'=>$full_path,
            'slug'=>$slug,
            'pub_title'=>$this->input->post('pub_title'),
            'pub_content'=>$this->input->post('pub_content'),
            'pub_author'=>$this->input->post('pub_author'),
            'pub_date'=> date('M j Y'),
            'pub_type'=>$this->input->post('pub_type'),
            'event_location'=>$this->input->post('event_location'),
           

        );
        if ($pub_id === 0)
        {
            return $this->db->insert('create_pub',$data);
        
        } else{
 //print_r ($ss_id); exit;
        $this->db->where('pub_id',$pub_id);
        return $this->db->update('create_pub',$data);
    }
 
 }

 public function get_pub_image_name(){
    {
       
    $query = $this->db->get_where('create_pub');
    return $query->result_array();
    }
}


public function get_recent_pub(){
   $query=$this->db->query('SELECT * FROM `create_pub` ORDER BY `create_pub`.`pub_date` ASC limit 4');
   return $query->result_array();
}



     public function get_pub_image_byid($pub_id = 0)
    {
        //echo "here";exit;
        if ($pub_id === 0)
        {
            $query = $this->db->get('create_pub');
            return $query->result_array();
        }
 //echo "here";
        $query = $this->db->get_where('create_pub', array('pub_id' => $pub_id));
        return $query->row_array();
    }


 public function delete_pub($pub_id)
    {
        $this->db->where('pub_id', $pub_id);
        return $this->db->delete('create_pub');
    }


public function get_pub_content(){


        $this->db->select('*');
        $this->db->from('create_pub');
        $this->db->where('slug',$this->uri->segment(3));
        $query=$this->db->get();

        return $query->result_array();

        }
public function get_events_list(){
        $this->db->select('*');
        $this->db->from('create_pub');
        $this->db->where('pub_type','events');
        $this->db->limit(4);
        $query=$this->db->get();
        return $query->result_array();

}

public function get_news_list(){
$this->db->select('*');
        $this->db->from('create_pub');
       $this->db->where('pub_type','news');
        //$this->db->where('slug',$this->uri->segment(3));
        $this->db->limit(4);
        $query=$this->db->get();

       // print_r($query);exit;
        return $query->result_array();
}

public function get_news(){
$slug=$this->uri->segment(3);

    $where = array(
               'pub_type' =>'news',
               'slug' => $slug
            );
        $this->db->select('*');
        $this->db->from('create_pub');
        $this->db->where($where);
        //$this->db->where('slug',$this->uri->segment(3));
        $query=$this->db->get();
       // print_r($query);exit;
        return $query->result_array();

}
public function get_events(){
$slug=$this->uri->segment(3);

    $where = array(
               'pub_type' =>'events',
               'slug' => $slug
            );
        $this->db->select('*');
        $this->db->from('create_pub');
        $this->db->where($where);
        //$this->db->where('slug',$this->uri->segment(3));
        $query=$this->db->get();
       // print_r($query);exit;
        return $query->result_array();

}





/* function goes above here */
}


