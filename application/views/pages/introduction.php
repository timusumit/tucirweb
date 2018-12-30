<link rel="stylesheet" href="<?php echo base_url('site_assets/') ?>color_box/css/colorbox.css" />

<section class="contact">
	<h1 class="hidden" style="display:none;">Introduction</h1>
	<div class="container ">
		<div class="section_gap">
		<div class="row ">
			<div class="col">
				<article class="gallery_details">
					<h3>Introduction</h3>
					<?php foreach($vmi_setup as $key=>$data): ?>
									
										<?php echo $data['introduction']?>
										 
									
								<?php endforeach; ?>			
				</article>
				<article class="gallery_details">
					<h3>Our Objective</h3>
					<?php foreach($vmi_setup as $key=>$data): ?>
									
										<?php echo $data['objective']?>
										
									
								<?php endforeach; ?>			
				</article>
			</div>
				
		</div>
		
	</div>
	</div>
</section>