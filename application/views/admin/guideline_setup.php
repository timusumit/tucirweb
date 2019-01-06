  <div class="content">
        <div class="container-fluid">

<div class="row">
                	
                	<div class="col-lg-12">
                	<div class="card">
                    <div class="card-header card-header-primary">
                  <h4 class="card-title ">guideline Setup</h4>
                  <p class="card-category">Setup guideline Part Here!</p>
                </div>
                		<div class="card-body">
                      <div class="col-lg-12 text-right"></div>
        					<?php echo form_open('admin/guideline_setup/add')?>
                  <table class="table table-hover">
        					
        						<thead class="text-primary">
        							
                      <tr>
        								 <!-- <th width="30%">Vision</th> --><th width="45%%">guideline</th><th width="10%">Action</th>
        							</tr>
        						</thead>
        						<tbody>
        						<?php  foreach ($guideline_setup as $key=>$data):?>	
                      
                      <tr>
        							<!-- 	<td>
                          <textarea class="form-control" name="vision" id="vision"><?php echo $data['vision'] ?></textarea>           
                          </td> -->
                          <td><textarea class="form-control ckeditor" name="guideline" id="guideline"><?php echo $data['guideline'] ?></textarea> </td>
                        
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

