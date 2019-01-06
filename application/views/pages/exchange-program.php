<link rel="stylesheet" href="<?php echo base_url('site_assets/') ?>color_box/css/colorbox.css" />

<section class="contact">
	<h1 class="hidden" style="display:none;">Gallery</h1>
	<div class="container ">
		<div class="section_gap">
		<div class="row ">
			<div class="col">
				<article class="gallery_details">
					<h3>Exchange Program</h3>
					<p class="text-justify">
						CIR coordinates the student/faculty exchange with the partner universities of TU. Furthermore, it also provides guidance and counsel to incoming as well as to outgoing students/faculties under the exchange programme. (See more)
					</p>		
				</article>
			</div>
				
		</div>
		<div class="row">
			

			<div class="col-lg-6 col-md-12">
			<h3>Outgoing Students</h3>
<table class="table table-striped table-bordered table-hover dtable">
	<thead><tr><th></th><th>Student</th><th>University</th></tr></thead>
	<tbody>
		<?php foreach ($student_setup as $key=>$data): ?>
		<?php if($data['student_type']=='outgoing'){ ?>
		<tr>
			<td><img src="<?php echo base_url('site_assets/uploads/student/thumbnail/'.$data['student_image_name']) ?>"></td>
			<td>	<?php echo $data['student_name'] ?></td><td><?php echo $data['student_college'] ?></td>
			</tr>
<?php } ?>
				<?php endforeach; ?>
			</tbody>	
		</table>	
			</div>
			<div class="col-lg-6 col-md-12">
			<h3>Incoming Students</h3>
<table class="table table-striped table-bordered table-hover dtable">
	<thead><tr><th></th><th>Student</th><th>University</th></tr></thead>
	<tbody>
		<?php foreach ($student_setup as $key=>$data): ?>
			<?php if($data['student_type']=='incoming'){ ?>
		<tr><td><img src="<?php echo base_url('site_assets/uploads/student/thumbnail/'.$data['student_image_name']) ?>"></td>
			<td>	<?php echo $data['student_name'] ?></td><td><?php echo $data['student_college'] ?></td>
			</tr>
		<?php } ?>
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