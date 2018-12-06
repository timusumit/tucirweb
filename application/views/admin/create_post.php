  <div class="content">
        <div class="container-fluid">

<div class="row">
                	
                	<div class="col-lg-12">
                	<div class="card">
                    <div class="card-header card-header-primary">
                  <h4 class="card-title ">Create Post</h4>
                  <p class="card-category">Add/Edit/Delete post for Blog!</p>
                </div>
                		<div class="card-body">
                      <div class="col-lg-12 text-right"><a href="#" data-target="#addModal" data-toggle="modal" class="btn btn-success">ADD</a></div>
        					<table class="table table-hover">
        					
        						<thead class="text-primary">
        							
                      <tr>
        								 <th width="40%">Post Title</th><th width="15%">Content</th><th width="15%">Author</th><th width="15%">Image</th><th>Date</th><th width="15%">Action</th>
        							</tr>
        						</thead>
        						<tbody>
                      <?php foreach($create_post as $key=>$data): ?>
        					<tr><td><?php echo $data['post_title'] ?></td><td><?php echo $data['post_content'] ?></td><td><?php echo $data['post_author'] ?></td><td>
                  <?php if($data['post_image_name']!='no_image'){ ?>
                    <img style="width:80px;" src="<?php echo base_url('site_assets/uploads/blog/'.$data['post_image_name']) ?>">
                      <?php }?>
                  </td><td><?php echo $data['post_date'] ?></td><td>
                    <a onclick="return confirm('Are you sure want to Delete?')" class="btn btn-danger btn-sm" href="<?php echo base_url('admin/create_post/delete/'.$data['post_id'])?>">Delete</a></td></tr>
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
   <?php echo form_open_multipart('admin/create_post/do_upload'); ?> 
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="col-lg-12">
       	<div class="input-group mb-3">
  			<div class="input-group-prepend">
    			<span class="input-group-text">Post Title</span>
  			</div>
  			<input type="text"  class="form-control" name="post_title" id="post_title" >
		</div>
			<div class="input-group mb-3">
  			<div class="input-group-prepend">
    			<span class="input-group-text">Content</span>
  			</div>
  			<textarea  class="form-control ckeditor" name="post_content" id="post_content" ></textarea>
		</div>
		<div class="input-group mb-3">
  			<div class="input-group-prepend">
    			<span class="input-group-text">Author</span>
  			</div>
  			<input  class="form-control" name="post_author" id="author"  value="<?php echo ucfirst($titlename); ?>">
		</div>
		<div class="input-group mb-3">
  			<div class="input-group-prepend">
    			<span class="input-group-text">Image</span>
  			</div>
  			<input type="file" class="form-control" name="userfile" id="userfile" >
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
<style>
iframe{
  height: 200px !important; width: 300px !important;
}
  </style>
