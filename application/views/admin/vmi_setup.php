  <div class="content">
        <div class="container-fluid">

<div class="row">
                	
                	<div class="col-lg-12">
                	<div class="card">
                    <div class="card-header card-header-primary">
                  <h4 class="card-title ">Vision, objective, Importance Setup</h4>
                  <p class="card-category">Setup The Vision, objective, Importance Part Here!</p>
                </div>
                		<div class="card-body">
                      <div class="col-lg-12 text-right"></div>
        					<?php echo form_open('admin/vmi_setup/add')?>
                  <table class="table table-hover">
        					
        						<thead class="text-primary">
        							
                      <tr>
        								 <!-- <th width="30%">Vision</th> --><th width="45%%">Introduction</th><th width="45%">Objective</th><th width="10%">Action</th>
        							</tr>
        						</thead>
        						<tbody>
        						<?php  foreach ($vmi_setup as $key=>$data):?>	
                      
                      <tr>
        							<!-- 	<td>
                          <textarea class="form-control" name="vision" id="vision"><?php echo $data['vision'] ?></textarea>           
                          </td> -->
                          <td><textarea class="form-control ckeditor" name="introduction" id="introduction"><?php echo $data['introduction'] ?></textarea> </td>
                        <td><textarea class="form-control ckeditor" name="objective" id="objective"><?php echo $data['objective'] ?></textarea> </td>
                        
                        <td><button type="submit" class="btn btn-success">UPDATE</buttom></td>
        							</tr>
        						<?php endforeach; ?>
                    </tbody>
        					</table>   
                  <?php echo form_close(); ?>     			
        
</div>
</div>
                	</div>
               
            </div>
</div>
</div>

