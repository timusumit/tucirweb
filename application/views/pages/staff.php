<link rel="stylesheet" href="<?php echo base_url('site_assets/') ?>color_box/css/colorbox.css" />

<section class="contact">
	<h1 class="hidden" style="display:none;">Staff</h1>
	<div class="container ">
		<div class="section_gap">
		<div class="row ">
			<div class="col">
				<article class="staff_details">
					<h3>Staff</h3>
								
				</article>
			</div>
				
		</div>
		<div class="row">
			<?php foreach ($staff_setup as $key=>$data): ?>

			<div class="col-12 staff_box <?php if ($key%2==0) echo "even" ?>">
				<a  class="group1" href="<?php echo base_url('site_assets/uploads/staff/'.$data['staff_image_name']) ?>" title="<?php echo $data['staff_designation'] ?>"> <img style="max-width:210px;" class="img-thumbnail" src="<?php echo base_url('site_assets/uploads/staff/'.$data['staff_image_name']) ?>"></a>
				<h6>Name:&nbsp;<?php echo $data['staff_name'] ?></h6>
				<h6>Designation:&nbsp;<?php echo $data['staff_designation'] ?></h6>
				<h6>Tel. Ph:&nbsp;<?php echo $data['staff_phone'] ?></h6>
				<h6>Email:&nbsp;<?php echo $data['staff_email'] ?></h6>
			</div>
		<?php endforeach; ?>
		</div>
	</div>
	</div>
</section>