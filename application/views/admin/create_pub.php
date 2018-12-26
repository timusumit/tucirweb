  <div class="content">
        <div class="container-fluid">

<div class="row">
                	
                	<div class="col-lg-12">
                	<div class="card">
                    <div class="card-header card-header-primary">
                  <h4 class="card-title ">Create pub</h4>
                  <p class="card-category">Add/Edit/Delete pub for publication!</p>
                </div>
                		<div class="card-body">
                      <div class="col-lg-12 text-right"><a href="#" data-target="#addModal" data-toggle="modal" class="btn btn-success">ADD</a></div>
        					<table class="table table-hover" id="pubs">
        					
        						<thead class="text-primary">
        							
                      <tr>
        								 <th width="10%">pub Title</th><th width="10%">pub Type</th><th width="10%">Event Location</th><th width="15%">Content</th><th width="10%">Author</th><th width="10%">Image</th><th width="10%">Date</th><th width="25%">Action</th>
        							</tr>
        						</thead>
        						<tbody>
                      <?php foreach($create_pub as $key=>$data): ?>
        					<tr><td><?php echo $data['pub_title'] ?></td><td><?php //echo //$data['pub_type'] ?></td><td><?php //echo //$data['event_location'] ?></td><td><?php echo $data['pub_content'] ?></td><td><?php echo $data['pub_author'] ?></td><td>
                  <?php if($data['pub_image_name']!='no_image'){ ?>
                    <img style="width:80px;" src="<?php echo base_url('site_assets/uploads/publication/thumbnail/'.$data['pub_image_name']) ?>">
                      <?php }?>
                  </td><td><?php echo $data['pub_date'] ?></td><td><a href="#" data-pub_type="<?php //echo $data['pub_type'] ?>" data-pub_id="<?php echo $data['pub_id'] ?>" data-pub_title="<?php echo $data['pub_title'] ?>" data-event_location="<?php //echo $data['event_location'] ?>" data-pub_content="<?php echo htmlspecialchars($data['pub_content']); ?>" data-pub_author="<?php echo $data['pub_author'] ?>" data-toggle="modal" data-pub_image_name="<?php echo $data['pub_image_name'] ?>" data-pub_image_url="<?php echo htmlspecialchars($data['pub_image_url']) ?>" data-target="#editModal" class="btn btn-warning btn-sm editpub">Edit</a>&nbsp;
                    <a onclick="return confirm('Are you sure want to Delete?')" class="btn btn-danger btn-sm" href="<?php echo base_url('admin/create_pub/delete/'.$data['pub_id'])?>">Delete</a></td></tr>
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
   <?php echo form_open_multipart('admin/create_pub/do_upload'); ?> 
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create pub</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="col-lg-12">
       	<div class="input-group mb-2">
        <div class="input-group-prepend">
          <span class="input-group-text">pub Type</span>
        </div>
        <select class="form-control" name="pub_type" required="required">
          <option value="news">News</option>
          <option value="events">Events</option>
        </select>
    </div>
    <div class="input-group mb-2" id="event_location" style="display: none;">
        <div class="input-group-prepend">
          <span class="input-group-text">Event Location</span>
        </div>
        <input type="text"  class="form-control" name="event_location" id="event_location" value="Kathmandu" >
    </div>
        <div class="input-group mb-2">
  			<div class="input-group-prepend">
    			<span class="input-group-text">pub Title</span>
  			</div>
  			<input type="text"  class="form-control" name="pub_title" id="pub_title"  required="required" >
		</div>
			<div class="input-group mb-2">
  			<div class="input-group-prepend">
    			<span class="input-group-text">Content</span>
  			</div>
  			<textarea  class="form-control ckeditor" name="pub_content" id="pub_content"  required="required" ></textarea>
		</div>
    <div class="row">
      <div class="col">
		<div class="input-group mb-2">
  			<div class="input-group-prepend">
    			<span class="input-group-text">Author</span>
  			</div>
  			<input  class="form-control" name="pub_author" id="author"  value="<?php echo ucfirst($titlename); ?>">
		</div>
  </div>
  <div class="col">
		<div class="input-group mb-2">
  			<div class="input-group-prepend">
    			<span class="input-group-text">Image</span>
  			</div>
  			<input type="file" class="form-control" name="userfile" id="userfile" >
		</div>
  </div>
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
        $(document).on("click", ".editpub", function () {
       //   alert('hey');
           
           var pub_type =$(this).data('pub_type');
         //  alert(pub_type);
            var pub_id = $(this).data('pub_id');
            var event_location = $(this).data('event_location');
            var pub_title= $(this).data('pub_title');
            var pub_content=$(this).data('pub_content');  
            var pub_author=$(this).data('pub_author'); 
            var pub_image_name=$(this).data('pub_image_name');
            var pub_image_url=$(this).data('pub_image_url');  
           // alert(pub_image_url);  
          //  alert(pub_author);     
            CKEDITOR.instances['pub_content'].setData(pub_content);/*yeti gare pugne maal*/

          //  CKEDITOR.instance.insertHTML(page_content);
            $(".modal-body .input-group #pub_title").val(pub_title);
            $(".modal-body .input-group #pub_type").val(pub_type);
            $(".modal-body .input-group #pub_content").val(pub_content);            
            $(".modal-body .input-group #event_location").val(event_location);
            $(".modal-body .input-group #pub_author").val(pub_author);
            $(".modal-body .input-group #pub_image_name").val(pub_image_name);
            $(".modal-body .input-group #pub_image_url").val(pub_image_url);
/*if(pub_image_url='no_path'){

  $(".modal-body .input-group #userfile").setAttribute("required","false");
}*/
            $("#editModal form").attr('action','create_pub/edit/'+pub_id);            
            $('#editModal').modal('show');
            
        });
});
</script>


<!-- Edit Modal-->

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
 <?php echo form_open_multipart(); ?> 
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit pub</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="col-lg-12">
        <div class="input-group mb-2">
        <div class="input-group-prepend">
          <span class="input-group-text">pub Type</span>
        </div>
        <select class="form-control" name="pub_type" id="pub_type">
          <option value="news">News</option>
          <option value="events">Events</option>
        </select>
    </div>
    <div class="input-group mb-2" id="event_location">
        <div class="input-group-prepend">
          <span class="input-group-text">Event Location</span>
        </div>
        <input type="text"  class="form-control" name="event_location" id="event_location" value="Kathmandu" >
    </div>
        <div class="input-group mb-2">
        <div class="input-group-prepend">
          <span class="input-group-text">pub Title</span>
        </div>
        <input type="text"  class="form-control" name="pub_title" id="pub_title" >
    </div>
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <span class="input-group-text">Content</span>
        </div>
        <textarea  class="form-control ckeditor" name="pub_content" id="pub_content" ></textarea>
    </div>
    <div class="row">
      <div class="col">
    <div class="input-group mb-2">
        <div class="input-group-prepend">
          <span class="input-group-text">Author</span>
        </div>
        <input  class="form-control" name="pub_author" id="author"  value="<?php echo ucfirst($titlename); ?>">
    </div>
  </div>
  <div class="col">
    <div class="input-group mb-2">
        <div class="input-group-prepend">
          <span class="input-group-text">Image</span>
        </div>
        <input type="file" class="form-control" name="userfile" id="userfile"  >
        <input type="text" style="display: none;" name="pub_image_name" id="pub_image_name" value="">
        <input type="text" style="display: none;" name="pub_image_url" id="pub_image_url" value="">
    </div>
  </div>
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
   $('select[name="pub_type"]').on('change', function() {
    var pub_type = $(this).val();
         
            switch (pub_type) {
            case "events":
                $('#event_location').show();
                break;
            case "news":
                $('#event_location').hide();
                break;   
            default:        
                
                }

   });
</script>
