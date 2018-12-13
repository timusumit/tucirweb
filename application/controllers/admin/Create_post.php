<?php 
include_once(APPPATH.'controllers/Admin_controller.php');
class Create_post extends Admin_controller{

	public function __construct(){
		parent::__construct();
		  $this->load->model('create_post_model');
		  $this->load->model('user_model');
		    $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
	}


public function index(){

	$data['create_post']=$this->create_post_model->get_post_image_name();
	$data['titlename']=$this->user_model->get_logged_user();
	$this->display('admin/create_post',$data);
}

/* for adding post */
public function do_upload()
        {



                $config['upload_path']          = './site_assets/uploads/blog';
                $config['allowed_types']        = 'jpg|jpeg|png|gif|svg';
                $config['file_name']='blog_image';


                $this->load->library('upload', $config);
                $file=$this->upload->do_upload('userfile');
                 $uploadedImage = $this->upload->data();
   //    echo $uploadedImage['file_name'];exit;
        $this->resizeImage($uploadedImage['file_name']);

                if ( ! $file )
                {
$test = $this->uri->segment(4);

if($test==0)
                    {
                        $post_id=0;
                     
                    }
                else {
                  
                   $post_id = $this->uri->segment(4);
  
                }

                        $data = array(
                            'file_name' => 'no_image.jpg',
                            'full_path' => 'no_path',
                    );                      
                        $this->create_post_model->set_post_image_name($post_id,$data['file_name'],$data['full_path']);
                        redirect('admin/create_post',$data);

                }
                else
                {

$test = $this->uri->segment(4);

if($test==0)
                    {
                        $post_id=0;
                     
                    }
                else {
                  
                   $post_id = $this->uri->segment(4);
  
                }

                        $data = array(
                            'file_name' => $this->upload->data('file_name'),
                            'full_path' => $this->upload->data('full_path'),
                    );                      
                       	$this->create_post_model->set_post_image_name($post_id,$data['file_name'],$data['full_path']);
                        redirect('admin/create_post',$data);

                }
        }




      public function edit(){
$post_id=$this->uri->segment(4);
//echo $post_id;exit;
  $create_post = $this->create_post_model->get_post_image_byid($post_id);
        $file_path=$create_post['post_image_url'];
         $tn_path=$_SERVER['DOCUMENT_ROOT'] . '/tucirweb/site_assets/uploads/blog/thumbnail/'.$create_post['post_image_name'];

//echo $file_path;exit;
//echo $file_path; exit;
if(is_file($file_path)){
        unlink($file_path);
         unlink($tn_path);
        echo 'File  has been deleted';
      } else {
        echo 'Could not delete file does not exist';
      }
       // $this->create_post_model->delete_post($post_id);        
      //  redirect( base_url() . 'admin/create_post');    


            $this->do_upload();
        $ss_id = $this->uri->segment(4);
        
        if (empty($ss_id))
        {
            echo "i two";exit;
            show_404();
        }
         $this->load->helper('form');
        $this->load->library('form_validation');

    $data['sls'] = $this->create_post_model->get_post_image_byid($ss_id);
    $titlename=$data['sls']['post_img_name'];
    $data['create_post'] = $this->create_post_model->get_post_image_name();
//echo "i reached here"; exit;
           // $this->post_setup_model->set_post_name($ss_id,$titlename);

            redirect('admin/create_post');
         }


    public function delete()
        {
        $post_id = $this->uri->segment(4);
      //  echo $post_id;exit;
        if (empty($post_id))
        {
           // echo "here";
            show_404();
        }
        //  echo "i am here"; exit;      
        $create_post = $this->create_post_model->get_post_image_byid($post_id);
        $file_path=$create_post['post_image_url'];
         $tn_path=$_SERVER['DOCUMENT_ROOT'] . '/tucirweb/site_assets/uploads/blog/thumbnail/'.$create_post['post_image_name'];


//echo $file_path; exit;
if(is_file($file_path)){
        unlink($file_path);
         unlink($tn_path);
        echo 'File  has been deleted';
      } else {
        echo 'Could not delete file does not exist';
      }
        $this->create_post_model->delete_post($post_id);        
        redirect( base_url() . 'admin/create_post');        
        }



public function resizeImage($filename)
   {
   // echo "here";exit;
      $source_path = $_SERVER['DOCUMENT_ROOT'] . '/tucirweb/site_assets/uploads/blog/'. $filename;
    //  echo $source_path;exit;
      $target_path = $_SERVER['DOCUMENT_ROOT'] . '/tucirweb/site_assets/uploads/blog/thumbnail/'.$filename;
    //  echo $target_path;exit;
      $config_manip = array(
          'image_library' => 'gd2',
          'source_image' => $source_path,
          'new_image' => $target_path,
          'maintain_ratio' => TRUE,
          'create_thumb' => TRUE,
          'thumb_marker' => '',
          'width' => 155,
          'height' => 120
      );
  //  print_r($config_manip);exit;


      $this->load->library('image_lib', $config_manip);
      /*echo "here";exit;*/
   //   $this->image_lib->resize();
      if (!$this->image_lib->resize()) {
          echo $this->image_lib->display_errors();
      }


     $this->image_lib->clear();
   }




/* write above here */
}
