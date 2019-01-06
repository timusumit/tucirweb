  <div class="content">
        <div class="container-fluid">

<div class="row">
                	
                	<div class="col-lg-12">
                	<div class="card">
                    <div class="card-header card-header-primary">
                  <h4 class="card-title ">Services Setup</h4>
                  <p class="card-category">Setup The services Part Here!</p>
                </div>
                		<div class="card-body">
                      <div class="col-lg-12 text-right"><a href="#" data-target="#addModal" data-toggle="modal" class="btn btn-success">ADD</a></div>
        					<table class="table table-hover">
        					
        						<thead class="text-primary">
        							
                      <tr>
        								 <th width="15%">Country</th><th width="40%">University</th><th width="15%">Action</th>
        							</tr>
        						</thead>
        						<tbody>
        						<?php  foreach ($institute_affiliation as $key=>$data):?>	
                      
                      <tr>
        								<td><?php echo $data['ia_country'] ?></td><td><?php echo $data['ia_university'] ?></td><td>

                          <a href="#" class="btn btn-sm btn-warning editServices" data-target="#editModal" data-ia_id="<?php echo $data['ia_id'] ?>" data-ia_country="<?php echo $data['ia_country'] ?>" data-ia_university="<?php echo $data['ia_university'] ?>" data-toggle="modal">Edit</a>&nbsp;<a onclick="return confirm('Are you sure you want to delete?')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/institute_affiliation/delete/'.$data['ia_id']); ?>">Delete</a></td>
        							</tr>
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
   <?php echo form_open('admin/institute_affiliation/add'); ?> 
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add services</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="col-lg-12">
          <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Country</span>
        </div>
        <input  class="form-control" name="ia_country" id="ia_country" >
    </div>

       	<div class="input-group mb-3">
  			<div class="input-group-prepend">
    			<span class="input-group-text">University</span>
  			</div>
  			<input type="text"  class="form-control " name="ia_university" id="ia_university" >
		</div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Validity</span>
        </div>
        <input type="text"  class="form-control " name="ia_validity" id="ia_validity" >
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


<script>
    $(function(){

        $(document).on("click", ".editServices", function () {

            var ia_id = $(this).data('ia_id');
            var ia_country= $(this).data('ia_country');
            var ia_university=$(this).data('ia_university');
           
           
            

            $(".modal-body .input-group #ia_country").val(ia_country);
            $(".modal-body .input-group #ia_university").val(ia_university);            
           
          
            $("#editModal form").attr('action','institute_affiliation/edit/'+ia_id);            
            $('#editModal').modal('show');
            
        });
});


</script>


<!-- edit modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
   <form method="post">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit services</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="col-lg-12">
          <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Country</span>
        </div>
        <input  class="form-control" name="ia_country" id="ia_country" >
    </div>

        <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">University</span>
        </div>
        <input type="text"  class="form-control " name="ia_university" id="ia_university" >
    </div>
     <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Validity</span>
        </div>
        <input type="text"  class="form-control " name="ia_validity" id="ia_validity" >
    </div>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
</form>
  </div>
</div>

<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script>
  $('input[name="ia_validity"]').daterangepicker();
</script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />