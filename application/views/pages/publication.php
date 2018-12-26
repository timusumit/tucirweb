<link rel="stylesheet" href="<?php echo base_url('site_assets/') ?>color_box/css/colorbox.css" />

<section class="contact">
	<h1 class="hidden" style="display:none;">Gallery</h1>
	<div class="container ">
		<div class="section_gap">
		<div class="row ">
			<div class="col">
				<article class="gallery_details">
					<h3>Publicattions</h3>
								
				</article>
			</div>
				
		</div>
		<div class="row">
			

			<div class="col-12">
			
<table class="table table-striped table-bordered table-hover dtable">
	<thead><tr><th>Title</th><th>Published Date</th></tr></thead>
	<tbody>
		<?php foreach ($create_pub as $key=>$data): ?>
		<tr>
			<td width="80%">	<a href="<?php echo base_url('site_assets/uploads/publication/'.$data['pub_image_name']) ?>" target="_blank"><?php echo $data['pub_title'] ?></a></td><td width="20%"><?php echo $data['pub_date'] ?></td>
			</tr>
				<?php endforeach; ?>
			</tbody>	
		</table>	
			</div>
	
		</div>
	</div>
	</div>
</section>

 <script src="<?php echo base_url('admin_assets'); ?>/extra-plugin/datatable/jquery.dataTables.min.js" type="text/javascript"></script>
   <script src="<?php echo base_url('admin_assets'); ?>/extra-plugin/datatable/dataTables.bootstrap4.min.js" type="text/javascript"></script>

  <script>
    $(document).ready(function() {

     $('.dtable').DataTable();


    });
  </script>