<?php 
include_once(APPPATH.'controllers/Admin_controller.php');
class Create_pub extends Admin_controller{

  public function __construct(){
    parent::__construct();
      $this->load->model('create_pub_model');
      $this->load->model('user_model');
      $this->load->helper(array('form', 'url'));
      $this->load->library(array('session', 'form_validation'));
  }


public function index(){

  $data['create_pub']=$this->create_pub_model->get_pub_image_name();
  $data['titlename']=$this->user_model->get_logged_user();
  $this->display('admin/create_pub',$data);
}

/* for adding post */
public function do_upload()
        {
                $config['upload_path']          = './site_assets/uploads/publication';
                $config['allowed_types']        = 'jpg|jpeg|png|gif|svg|pdf|doc|docx|xls|rtf|ppt|txt|xlsx|pptx';
                $config['file_name']='publication_image';
              //  $config['overwrite']=TRUE;

                $this->load->library('upload', $config);
                $file=$this->upload->do_upload('userfile');
                $uploadedImage = $this->upload->data();
                $this->resizeImage($uploadedImage['file_name']);
               /* if file is not chosen*/
                if ( ! $file )
                {
                    $test = $this->uri->segment(4);
                    if($test==0)
                        {
                          $pub_id=0;
                        }
                    else{
                          $pub_id = $this->uri->segment(4);
                        }

                      $create_pub = $this->create_pub_model->get_pub_image_byid($pub_id);
                      $filename=$create_pub['pub_image_name'];
                      $filepath=$create_pub['pub_image_url'];             
                            $this->create_pub_model->set_pub_image_name($pub_id,$filename,$filepath);
                      redirect('admin/create_pub',$data);
                }
                /* if file is chosen */
                else
                {
                  $test = $this->uri->segment(4);
                  if($test==0)
                      {
                          $pub_id=0;
                      }
                  else{
                        $pub_id = $this->uri->segment(4);
                      }
                        $create_pub = $this->create_pub_model->get_pub_image_byid($pub_id);
                        $old_file_path=$create_pub['pub_image_url'];
                        $old_tn_path=$_SERVER['DOCUMENT_ROOT'] . '/tucirweb/site_assets/uploads/publication/thumbnail/'.$create_pub['pub_image_name'];
                        
                        $data = array(
                            'file_name' => $this->upload->data('file_name'),
                            'full_path' => $this->upload->data('full_path'),
                                      );                      
                        $this->create_pub_model->set_pub_image_name($pub_id,$data['file_name'],$data['full_path']);
                        
                        unlink($old_file_path);
                        unlink($old_tn_path);
                        redirect('admin/create_pub',$data);

                }
        }




      public function edit(){
        $this->do_upload();
         redirect('admin/create_pub');       
         }


    public function delete()
        {
        $pub_id = $this->uri->segment(4);
      //  echo $pub_id;exit;
        if (empty($pub_id))
        {
           // echo "here";
            show_404();
        }
        //  echo "i am here"; exit;      
        $create_pub = $this->create_pub_model->get_pub_image_byid($pub_id);
        $file_path=$create_pub['pub_image_url'];
         $tn_path=$_SERVER['DOCUMENT_ROOT'] . '/tucirweb/site_assets/uploads/publication/thumbnail/'.$create_pub['pub_image_name'];


//echo $file_path; exit;
if(is_file($file_path)){
        unlink($file_path);
         unlink($tn_path);
        echo 'File  has been deleted';
      } else {
        echo 'Could not delete file does not exist';
      }
        $this->create_pub_model->delete_pub($pub_id);        
        redirect( base_url() . 'admin/create_pub');        
        }



public function resizeImage($filename)
   {
   // echo "here";exit;
      $source_path = $_SERVER['DOCUMENT_ROOT'] . '/tucirweb/site_assets/uploads/publication/'. $filename;
    //  echo $source_path;exit;
      $target_path = $_SERVER['DOCUMENT_ROOT'] . '/tucirweb/site_assets/uploads/publication/thumbnail/'.$filename;
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
