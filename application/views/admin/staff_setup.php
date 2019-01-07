  <div class="content">
        <div class="container-fluid">

<div class="row">
                	
                	<div class="col-lg-12">
                	<div class="card">
                    <div class="card-header card-header-primary">
                  <h4 class="card-title ">Staff Setup</h4>
                  <p class="card-category">The staff Setup is done here.</p>
                </div>
                		<div class="card-body">
                      <div class="col-lg-12 text-right"><a href="#" data-target="#addModal" data-toggle="modal" class="btn btn-success">ADD</a></div>
        					<table class="table table-hover">
        					
        						<thead class="text-primary">
        							
                      <tr>
        								 <th>Image</th><th width="25%">Staff Name</th><th>Designation</th><th>Phone</th><th>Email</th><th>Action</th>
        							</tr>
        						</thead>
        						<tbody>
                      <?php foreach ($staff_setup as $key=>$ss): ?>
                      <tr><td><img  src="<?php echo base_url('site_assets/uploads/staff/thumbnail/'.$ss['staff_image_name']); ?>"></td><td><?php echo $ss['staff_name']?></td><td><?php echo $ss['staff_designation']?></td>
                        <td><?php echo $ss['staff_phone'] ?></td>
                        <td><?php echo $ss['staff_email'] ?></td>
                        <td>
                        <a href="#" 
                        data-staff_id="<?php echo $ss['staff_id'] ?>"
                        data-staff_image_name="<?php echo $ss['staff_image_name'] ?>"
                        data-staff_image_url="<?php echo $ss['staff_image_url'] ?>"
                        data-staff_name="<?php echo $ss['staff_name'] ?>"
                        data-staff_designation="<?php echo $ss['staff_designation'] ?>"
                        data-staff_phone="<?php echo $ss['staff_phone'] ?>"
                        data-staff_email="<?php echo $ss['staff_email'] ?>"
                        data-is_hostel_staff="<?php echo $ss['is_hostel_staff'] ?>"
                        data-staff_order="<?php echo $ss['staff_order'] ?>"
                        data-toggle="modal"
                        data-target="#editModal"
                         class="btn btn-warning btn-sm editpost" >Edit</a>
                        <a onclick="return confirm('Are you sure you want to delete?')" href="<?php echo base_url('admin/staff_setup/delete/'.$ss['staff_id']); ?>" class="btn btn-danger btn-sm">Delete</a></td></tr>
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
   <?php echo form_open_multipart('admin/staff_setup/do_upload'); ?> 
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add staff</h5>
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
    			<span class="input-group-text">Staff Name</span>
  			</div>
  			<input  class="form-control" name="staff_name" id="staff_name" >
		</div>
		<div class="input-group mb-3">
  			<div class="input-group-prepend">
    			<span class="input-group-text">Staff Designation</span>
  			</div>
  			<input type="text"  class="form-control" name="staff_designation" id="staff_designation" required="" >
		</div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Staff Phone</span>
        </div>
        <input type="text" class="form-control" name="staff_phone" id="staff_phone" required="" >
    </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Staff Email</span>
        </div>
        <input type="text" class="form-control" name="staff_email" id="staff_email" required="" >
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Is Hostel Staff?</span>
        </div>
         <input type="hidden" value="0" name="is_hostel_staff">
        <input type="checkbox" class="form-control" name="is_hostel_staff" id="is_hostel_staff" value="1"  >
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Order</span>
        </div>
        <input type="text" class="form-control" name="staff_order" id="staff_order" required="" >
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
           
         
         //  alert(staff_type);
            var staff_id = $(this).data('staff_id');
            var staff_image_name =$(this).data('staff_image_name');
            var staff_image_url = $(this).data('staff_image_url');
            var staff_name= $(this).data('staff_name');
            var staff_designation=$(this).data('staff_designation');  
            var staff_phone=$(this).data('staff_phone'); 
            //alert(staff_phone);
            var staff_email=$(this).data('staff_email');
            var is_hostel_staff=$(this).data('is_hostel_staff');
             var staff_designation=$(this).data('staff_designation'); 
             var staff_order=$(this).data('staff_order');
           // alert(staff_image_url);  
          //  alert(staff_author);     
          //  CKEDITOR.instances['staff_designation'].setData(staff_designation);/*yeti gare pugne maal*/

          //  CKEDITOR.instance.insertHTML(page_content);
            $(".modal-body .input-group #staff_name").val(staff_name);
            $(".modal-body .input-group #staff_image_name").val(staff_image_name);
            $(".modal-body .input-group #staff_designation").val(staff_designation);            
          //  $(".modal-body .input-group #event_location").val(event_location);
            $(".modal-body .input-group #staff_phone").val(staff_phone);
            $(".modal-body .input-group #staff_email").val(staff_email);
            $(".modal-body .input-group #is_hostel_staff").val(is_hostel_staff);
            $(".modal-body .input-group #staff_order").val(staff_order);
/*if(staff_image_url='no_path'){

  $(".modal-body .input-group #userfile").setAttribute("required","false");
}*/
            $("#editModal form").attr('action','staff_setup/edit/'+staff_id);            
            $('#editModal').modal('show');
            
        });
});
</script>

<!-- edit part-->

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
   <?php echo form_open_multipart(''); ?> 
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit staff</h5>
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
        <input type="file"  class="form-control" name="userfile" id="userfile" >
    </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Staff Name</span>
        </div>
        <input  class="form-control" name="staff_name" id="staff_name" >
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Staff Designation</span>
        </div>
        <input type="text"  class="form-control" name="staff_designation" id="staff_designation" required="" >
    </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Staff Phone</span>
        </div>
        <input type="text" class="form-control" name="staff_phone" id="staff_phone" required="" >
    </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Staff Email</span>
        </div>
        <input type="text" class="form-control" name="staff_email" id="staff_email" required="" >
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Is Hostel Staff?</span>
        </div>
         <input type="hidden" value="0" name="is_hostel_staff">
        <input type="checkbox" class="form-control" name="is_hostel_staff" id="is_hostel_staff" value="1"  >
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Order</span>
        </div>
        <input type="text" class="form-control" name="staff_order" id="staff_order" required="" >
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
<!-- edit -->
