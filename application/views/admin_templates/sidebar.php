    <div class="sidebar" data-color="orange" data-background-color="white" data-image="<?php echo base_url('admin_assets'); ?>/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->

    <?php
$classvalue=$this->uri->segment(2);

     ?>
      <div class="logo">
        <a href="<?php echo base_url(); ?>" class="simple-text logo-normal" target="_blank">
          View Site
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item <?php if (empty($classvalue)) echo "active" ?> ">
            <a class="nav-link" href="<?php echo base_url('admin'); ?>">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
            <!-- home setup start-->
        <li class="nav-item ">
            <a class="nav-link collapsed" data-toggle="collapse" href="#home_setup" aria-expanded="false">
              <i class="material-icons">home</i>
              <p> Home Setup
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse <?php if ($classvalue=='slider_setup' or $classvalue=='vmi_setup')   echo "show"?>" id="home_setup" style="">
              <ul class="nav">


                <li class="nav-item <?php if ($classvalue=='slider_setup') echo "active" ?> ">
                  <a class="nav-link" href="<?php echo base_url('admin/slider_setup') ?>">
                    <i class="material-icons">photos</i>
                  <p>Slider Setup</p>
                  </a>
                </li>

                  <li class="nav-item <?php if ($classvalue=='vmi_setup') echo "active" ?> ">
                  <a class="nav-link" href="<?php echo base_url('admin/vmi_setup'); ?>">
                    <i class="material-icons">visibility</i>
                    <p>Introduction / Objective</p>
                  </a>
                  </li>            
              </ul>
            </div>
          </li>
          <!-- home setup end-->

          <!-- about setup start-->

           <li class="nav-item ">
            <a class="nav-link collapsed" data-toggle="collapse" href="#about_setup" aria-expanded="false">
              <i class="material-icons">home</i>
              <p> About Us
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse <?php if ($classvalue=='staff_setup' or $classvalue=='organization_setup')   echo "show"?>" id="about_setup" style="">
              <ul class="nav">

                <li class="nav-item <?php if ($classvalue=='staff_setup') echo "active" ?> ">
                  <a class="nav-link" href="<?php echo base_url('admin/staff_setup'); ?>">
                    <i class="material-icons">person</i>
                    <p>Staff Setup</p>
                  </a>
                  </li>
                  
                  <li class="nav-item <?php if ($classvalue=='organization_setup') echo "active" ?> ">
                  <a class="nav-link" href="<?php echo base_url('admin/organization_setup'); ?>">
                    <i class="material-icons">settings</i>
                    <p>Organization Setup</p>
                  </a>
                  </li>               
                                 
              </ul>
            </div>
          </li>
          <!-- about setup end-->

<!-- affiliation setup start-->

          <li class="nav-item ">
            <a class="nav-link collapsed" data-toggle="collapse" href="#affiliation" aria-expanded="false">
              <i class="material-icons">home</i>
              <p> Affiliation
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse <?php if ($classvalue=='institute_affiliation' or $classvalue=='student_affiliation' or $classvalue=='guideline_setup')   echo "show"?>" id="affiliation" style="">
              <ul class="nav">

                <li class="nav-item <?php if ($classvalue=='institute_affiliation') echo "active" ?> ">
                  <a class="nav-link" href="<?php echo base_url('admin/institute_affiliation'); ?>">
                    <i class="material-icons">person</i>
                    <p>Institution Affiliation</p>
                  </a>
                  </li>
      
               
                  
                  
                  <li class="nav-item <?php if ($classvalue=='student_affiliation') echo "active" ?> ">
                  <a class="nav-link" href="<?php echo base_url('admin/student_affiliation'); ?>">
                    <i class="material-icons">settings</i>
                    <p>Student Affiliation</p>
                  </a>
                  </li>

                  <li class="nav-item <?php if ($classvalue=='guideline_setup') echo "active" ?> ">
                  <a class="nav-link" href="<?php echo base_url('admin/guideline_setup'); ?>">
                    <i class="material-icons">settings</i>
                    <p>Guidelines Setup</p>
                  </a>
                  </li>
                
                                 
              </ul>
            </div>
          </li>
  <!-- affiliation setup end-->   
       
          <li class="nav-item <?php if ($classvalue=='student_setup') echo "active" ?> ">
                  <a class="nav-link" href="<?php echo base_url('admin/student_setup'); ?>">
                    <i class="material-icons">person</i>
                    <p>Exchange Program</p>
                  </a>
          </li>

          <li class="nav-item <?php if ($classvalue=='partnership_setup') echo "active" ?> ">
                  <a class="nav-link" href="<?php echo base_url('admin/partnership_setup'); ?>">
                    <i class="material-icons">person</i>
                    <p>Partnership</p>
                  </a>
        </li>


                 <li class="nav-item ">
            <a class="nav-link collapsed" data-toggle="collapse" href="#pagesExamples" aria-expanded="false">
              <i class="material-icons">settings</i>
              <p> News/Events
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse <?php if ($classvalue=='create_post' or $classvalue=='create_pub')   echo "show"?>" id="pagesExamples" style="">
              <ul class="nav">
                <!-- <li class="nav-item <?php if ($classvalue=='menu_setup') echo "active" ?> ">
                  <a class="nav-link" href="<?php echo base_url('admin/menu_setup'); ?>">
                    <i class="material-icons">menu</i>
                    <p>Menu Setup</p>
                  </a>
                  </li> 

                   <li class="nav-item <?php if ($classvalue=='submenu_setup') echo "active" ?> ">
                  <a class="nav-link" href="<?php echo base_url('admin/submenu_setup'); ?>">
                    <i class="material-icons">menu</i>
                    <p>Sub Menu Setup</p>
                  </a>
                  </li>  -->
                
 <li class="nav-item   <?php if ($classvalue=='create_post') echo "active" ?>  ">
            <a class="nav-link" href="<?php echo base_url('admin/create_post') ?>">
              <i class="material-icons">library_books</i>
              <p>Create Post(News/Events)</p>
            </a>
          </li>


            <li class="nav-item   <?php if ($classvalue=='create_pub') echo "active" ?>  ">
            <a class="nav-link" href="<?php echo base_url('admin/create_pub') ?>">
              <i class="material-icons">library_books</i>
              <p>Add Publication</p>
            </a>
          </li>
                   
                 
                                 
              </ul>
            </div>
          </li> 

     
        



                <li class="nav-item <?php if ($classvalue=='gallery_setup') echo "active" ?> ">
                  <a class="nav-link" href="<?php echo base_url('admin/gallery_setup') ?>">
                    <i class="material-icons">photos</i>
                  <p>Gallery Setup</p>
                  </a>
                </li>

                <li class="nav-item <?php if ($classvalue=='contact_setup') echo "active" ?> ">
                  <a class="nav-link" href="<?php echo base_url('admin/contact_setup'); ?>">
                    <i class="material-icons">location_ons</i>
                    <p>Contact Setup</p>
                  </a>
                  </li>
        
             <li class="nav-item <?php if ($classvalue=='social_setup') echo "active" ?> ">
                  <a class="nav-link" href="<?php echo base_url('admin/social_setup'); ?>">
                    <i class="material-icons">facebook</i>
                    <p>Social Setup</p>
                  </a>
                  </li>
        

         

        <!--     <li class="nav-item   <?php if ($classvalue=='create_page') echo "active" ?>  ">
            <a class="nav-link" href="<?php echo base_url('admin/create_page') ?>">
              <i class="material-icons">file_copy</i>
              <p>Create Page</p>
            </a>
          </li> -->



        
        </ul>
      </div>
    </div>