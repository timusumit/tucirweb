<?php 
include_once(APPPATH.'controllers/Admin_controller.php');
class student_setup extends Admin_controller{

	public function __construct(){
		parent::__construct();
		  $this->load->model('student_setup_model');
		  $this->load->model('user_model');
		    $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
	}

/*
public function do_upload()
        {



                $config['upload_path']          = './site_assets/uploads/student';
                $config['allowed_types']        = 'jpg|jpeg|png';
                $config['file_name']='student';
                $this->load->library('upload', $config);
                $file=$this->upload->do_upload('userfile');
                $uploadedImage = $this->upload->data();
               // $this->resizeOriginal($uploadedImage['file_name']);
                $this->resizeImage($uploadedImage['file_name']);
                
               
                if ( ! $file )
                {
                    $error = array('error' => $this->upload->display_errors());
                    redirect('admin/student_setup', $error);

                }
                else
                {
                  $test = $this->uri->segment(4);
                if($test==0)
                    {
                        $ss_id=0;
                    }
                else {
                   $ss_id = $this->uri->segment(4);
                      }

                    $data = array(
                            'file_name' => $this->upload->data('file_name'),
                            'full_path' => $this->upload->data('full_path'),
                    );                  
                       	$this->student_setup_model->set_student_name($ss_id,$data['file_name'],$data['full_path']);
                        redirect('admin/student_setup',$data);

                }
        }*/
        /*upload fn end*/


public function do_upload()
        {
                $config['upload_path']          = './site_assets/uploads/student';
                $config['allowed_types']        = 'jpg|jpeg|png|gif|svg';
                $config['file_name']='student_image';
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
                          $student_id=0;
                        }
                    else{
                          $student_id = $this->uri->segment(4);
                        }

                      $student_setup = $this->student_setup_model->get_student_image_byid($student_id);
                      $filename=$student_setup['student_image_name'];
                      $filepath=$student_setup['student_image_url'];             
                            $this->student_setup_model->set_student_name($student_id,$filename,$filepath);
                      redirect('admin/student_setup',$data);
                }
                /* if file is chosen */
                else
                {
                  $test = $this->uri->segment(4);
                  if($test==0)
                      {
                          $student_id=0;
                      }
                  else{
                        $student_id = $this->uri->segment(4);
                      }
                        $student_setup = $this->student_setup_model->get_student_image_byid($student_id);
                        $old_file_path=$student_setup['student_image_url'];
                        $old_tn_path=$_SERVER['DOCUMENT_ROOT'] . '/tucirweb/site_assets/uploads/student/thumbnail/'.$student_setup['student_image_name'];
                        
                        $data = array(
                            'file_name' => $this->upload->data('file_name'),
                            'full_path' => $this->upload->data('full_path'),
                                      );                      
                        $this->student_setup_model->set_student_name($student_id,$data['file_name'],$data['full_path']);
                        
                        unlink($old_file_path);
                        unlink($old_tn_path);
                        redirect('admin/student_setup',$data);

                }
        }


         public function edit(){
            $this->do_upload();
       

            redirect('admin/student_setup');
         }

         /*edit fn end*/


    public function delete()
        {
        $student_id = $this->uri->segment(4);
        
        if (empty($student_id))
        {
            show_404();
        }
        //  echo "i am here"; exit;      
        $student_setup = $this->student_setup_model->get_student_image_byid($student_id);
        $file_path=$student_setup['student_image_url'];
        $tn_path=$_SERVER['DOCUMENT_ROOT'] . '/tucirweb/site_assets/uploads/student/thumbnail/'.$student_setup['student_image_name'];
        //echo $tn_path;exit;


//echo $file_path; exit;
if(is_file($file_path)){
        unlink($file_path);
        unlink($tn_path);
        echo 'File  has been deleted';
      } else {
        echo 'Could not delete file does not exist';
      }
  

        $this->student_setup_model->delete_student($student_id);        
        redirect( base_url() . 'admin/student_setup');        
    }
    /*dele fn end*/


public function index(){
	$data['student_setup']=$this->student_setup_model->get_student_image_name();
	$data['titlename']=$this->user_model->get_logged_user();
	$this->display('admin/student_setup',$data);
}
/*index fn end*/


 public function resizeImage($filename)
   {
   
      $source_path = $_SERVER['DOCUMENT_ROOT'] . '/tucirweb/site_assets/uploads/student/'. $filename;
      //echo $source_path;exit;
      $target_path = $_SERVER['DOCUMENT_ROOT'] . '/tucirweb/site_assets/uploads/student/thumbnail/'.$filename;
    //  echo $target_path;exit;
      $config_manip = array(
          'image_library' => 'gd2',
          'source_image' => $source_path,
          'new_image' => $target_path,
          'maintain_ratio' => TRUE,
          'create_thumb' => TRUE,
          'thumb_marker' => '',
          'width' => 120,
          'height' => 70
      );
  //  print_r($config_manip);exit;


      $this->load->library('image_lib', $config_manip);
   //   echo "here";exit;
   //   $this->image_lib->resize();
      if (!$this->image_lib->resize()) {
        echo "something went wrong!";
          echo $this->image_lib->display_errors();
      }

     $this->image_lib->clear();
   }

/*resize function end*/




/* write above here */
}