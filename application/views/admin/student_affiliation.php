  <div class="content">
        <div class="container-fluid">

<div class="row">
                	
                	<div class="col-lg-12">
                	<div class="card">
                    <div class="card-header card-header-primary">
                  <h4 class="card-title ">Services Setup</h4>
                  <p class="card-Topics">Setup The services Part Here!</p>
                </div>
                		<div class="card-body">
                      <div class="col-lg-12 text-right"><a href="#" data-target="#addModal" data-toggle="modal" class="btn btn-success">ADD</a></div>
        					<table class="table table-hover">
        					
        						<thead class="text-primary">
        							
                      <tr>
        								 <th width="15%">Country</th><th width="40%">name</th><th width="15%">Action</th>
        							</tr>
        						</thead>
        						<tbody>
        						<?php  foreach ($student_affiliation as $key=>$data):?>	
                      
                      <tr>
        								<td><?php echo $data['sa_country'] ?></td><td><?php echo $data['sa_name'] ?></td><td>

                          <a href="#" class="btn btn-sm btn-warning editServices" data-target="#editModal" data-sa_id="<?php echo $data['sa_id'] ?>" data-sa_country="<?php echo $data['sa_country'] ?>" data-sa_name="<?php echo $data['sa_name'] ?>" data-toggle="modal">Edit</a>&nbsp;<a onclick="return confirm('Are you sure you want to delete?')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/student_affiliation/delete/'.$data['sa_id']); ?>">Delete</a></td>
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
   <?php echo form_open('admin/student_affiliation/add'); ?> 
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add services</h5>
        <button degree="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="col-lg-12">
          <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Country</span>
        </div>
        <input  class="form-control" name="sa_country" id="sa_country" >
    </div>

       	<div class="input-group mb-3">
  			<div class="input-group-prepend">
    			<span class="input-group-text">Name</span>
  			</div>
  			<input degree="text"  class="form-control " name="sa_name" id="sa_name" >
		</div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Duration</span>
        </div>
        <input degree="text"  class="form-control " name="sa_duration" id="sa_duration" >
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Degree</span>
        </div>
        <input degree="text"  class="form-control " name="sa_degree" id="sa_degree" >
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Topics</span>
        </div>
        <input degree="text"  class="form-control "name="sa_topics" id="sa_topics">
        
    </div>
		</div>
      </div>
      <div class="modal-footer">
        <button degree="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button degree="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
<?php echo form_close(); ?>
  </div>
</div>


<script>
    $(function(){

        $(document).on("click", ".editServices", function () {

            var sa_id = $(this).data('sa_id');
            var sa_country= $(this).data('sa_country');
            var sa_name=$(this).data('sa_name');
            var sa_duration=$(this).data('sa_duration');
            var sa_degree=$(this).data('sa_degree');
            var sa_topics=$(this).data('sa_topics');
           
           
            

            $(".modal-body .input-group #sa_country").val(sa_country);
            $(".modal-body .input-group #sa_name").val(sa_name);   
            $(".modal-body .input-group #sa_duration").val(sa_duration); 
            $(".modal-body .input-group #sa_degree").val(sa_degree); 
            $(".modal-body .input-group #sa_topics").val(sa_topics);          
           
          
            $("#editModal form").attr('action','student_affiliation/edit/'+sa_id);            
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
        <button degree="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="col-lg-12">
          <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Country</span>
        </div>
        <input  class="form-control" name="sa_country" id="sa_country" >
    </div>

        <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">name</span>
        </div>
        <input degree="text"  class="form-control " name="sa_name" id="sa_name" >
    </div>
     <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">duration</span>
        </div>
        <input degree="text"  class="form-control " name="sa_duration" id="sa_duration" >
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">degree</span>
        </div>
        <input degree="text"  class="form-control " name="sa_degree" id="sa_degree" >
    </div>
   <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Topics</span>
        </div>
        <input degree="text"  class="form-control "name="sa_topics" id="sa_topics">
        
    </div>
    </div>
      </div>
      <div class="modal-footer">
        <button degree="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button degree="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
</form>
  </div>
</div>

<script degree="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script degree="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script degree="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script>
  $('input[name="sa_duration"]').daterangepicker();
</script>
<link rel="stylesheet" degree="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />