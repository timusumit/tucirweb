  <div class="content">
        <div class="container-fluid">

<div class="row">
                	
                	<div class="col-lg-12">
                	<div class="card">
                    <div class="card-header card-header-primary">
                  <h4 class="card-title ">Student Setup</h4>
                  <p class="card-category">The student Setup is done here.</p>
                </div>
                		<div class="card-body">
                      <div class="col-lg-12 text-right"><a href="#" data-target="#addModal" data-toggle="modal" class="btn btn-success">ADD</a></div>
        					<table class="table table-hover dtable">
        					
        						<thead class="text-primary">
        							
                      <tr>
        								 <th>Image</th><th>Name</th><th>College</th><th>Type</th><th>Action</th>
        							</tr>
        						</thead>
        						<tbody>
                      <?php foreach ($student_setup as $key=>$ss): ?>
                      <tr><td><img  src="<?php echo base_url('site_assets/uploads/student/thumbnail/'.$ss['student_image_name']); ?>"></td><td><?php echo $ss['student_name']?></td><td><?php echo $ss['student_college']?></td><td><?php echo $ss['student_type'] ?></td><td>
                        <a href="#" class="btn btn-warning btn-sm editpost" data-toggle="modal" data-target="#editModal"
                        data-student_id="<?php echo $ss['student_id'] ?>"
                        data-student_image_name="<?php echo $ss['student_image_name'] ?>"
                        data-student_image_url="<?php echo $ss['student_image_url'] ?>"
                        data-student_name="<?php echo $ss['student_name'] ?>"
                     
                        data-student_college="<?php echo $ss['student_college'] ?>"
                        data-student_type="<?php echo $ss['student_type'] ?>"
                       
                        >Edit</a>
                        <a onclick="return confirm('Are you sure you want to delete?')" href="<?php echo base_url('admin/student_setup/delete/'.$ss['student_id']); ?>" class="btn btn-danger btn-sm">Delete</a></td></tr>
                    <?php endforeach; ?>
                    </tbody>
        					</table>        			
        
</div>
</div>
                	</div>
               
            </div>
</div>
</div>
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
   <?php echo form_open_multipart('admin/student_setup/do_upload'); ?> 
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add student</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="col-lg-12">
       	<div class="input-group mb-3">
  			<div class="input-group-prepend">
    			<span class="input-group-text">Choose Image</span>
  			</div>
  			<input type="file" required="required"  class="form-control" name="userfile" id="userfile" >
		</div>
			<div class="input-group mb-3">
  			<div class="input-group-prepend">
    			<span class="input-group-text">Student name</span>
  			</div>
  			<input  class="form-control" name="student_name" id="student_name" >
		</div>
		<div class="input-group mb-3">
  			<div class="input-group-prepend">
    			<span class="input-group-text">Student college</span>
  			</div>
  			<input  class="form-control" name="student_college" id="student_college" required="" >
		</div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Student Type</span>
        </div>
        <select class="form-control" name="student_type" id="student_type">
          <option value="outgoing">Outgoing</option>
          <option value="incoming">Incoming</option>
        </select>
    </div>
       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
<?php echo form_close(); ?>
  </div>
</div>



<script type="text/javascript">
   $(function(){
        $(document).on("click", ".editpost", function () {
        // alert('hey');
           
         
         //  alert(student_type);
            var student_id = $(this).data('student_id');
            var student_image_name =$(this).data('student_image_name');
            var student_image_url = $(this).data('student_image_url');
            var student_name= $(this).data('student_name');
           
            var student_college=$(this).data('student_college'); 
            //alert(student_college);
            var student_type=$(this).data('student_type');
          
           // alert(student_image_url);  
          //  alert(student_author);     
          //  CKEDITOR.instances['student_designation'].setData(student_designation);/*yeti gare pugne maal*/

          //  CKEDITOR.instance.insertHTML(page_content);
            $(".modal-body .input-group #student_name").val(student_name);
            $(".modal-body .input-group #student_image_name").val(student_image_name);
                    
          //  $(".modal-body .input-group #event_location").val(event_location);
            $(".modal-body .input-group #student_college").val(student_college);
            $(".modal-body .input-group #student_type").val(student_type);
       
/*if(student_image_url='no_path'){

  $(".modal-body .input-group #userfile").setAttribute("required","false");
}*/
            $("#editModal form").attr('action','student_setup/edit/'+student_id);            
            $('#editModal').modal('show');
            
        });
});
</script>


<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
   <?php echo form_open_multipart('admin/student_setup/do_upload'); ?> 
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit student</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="col-lg-12">
        <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Choose Image</span>
        </div>
        <input type="file"   class="form-control" name="userfile" id="userfile" >
    </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Student name</span>
        </div>
        <input  class="form-control" name="student_name" id="student_name" >
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Student college</span>
        </div>
        <input  class="form-control" name="student_college" id="student_college" required="" >
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Student Type</span>
        </div>
        <select class="form-control" name="student_type" id="student_type">
          <option value="outgoing">Outgoing</option>
          <option value="incoming">Incoming</option>
        </select>
    </div>
       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
<?php echo form_close(); ?>
  </div>
</div>

 <script src="<?php echo base_url('admin_assets'); ?>/extra-plugin/datatable/jquery.dataTables.min.js" type="text/javascript"></script>
   <script src="<?php echo base_url('admin_assets'); ?>/extra-plugin/datatable/dataTables.bootstrap4.min.js" type="text/javascript"></script>

  <script>
    $(document).ready(function() {

     $('.dtable').DataTable();


    });
  </script>