<link rel="stylesheet" href="<?php echo base_url('site_assets/') ?>color_box/css/colorbox.css" />

<section class="contact">
	<h1 class="hidden" style="display:none;">Gallery</h1>
	<div class="container ">
		<div class="section_gap">
		<div class="row ">
			<div class="col">
				<article class="gallery_details">
					<h3>Organization</h3>
					
					<?php foreach ($organization_setup as $key=>$data): ?>
					<?php	echo $data['organization']?>
			
		<?php endforeach; ?>
				</article>
			</div>
				
		</div>
		<div class="row">
			
		</div>
	</div>
	</div>
</section>