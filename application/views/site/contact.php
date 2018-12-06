<div id="subheader" class="sleft">
	<div class="subheader-inner">
		<div class="subdesc">
			<h1 class="page-title">Contact Us</h1>
		</div>
		<div class="breadcrumb-wrap">
			<span class="breadcrumbs"><!-- Breadcrumb NavXT 6.2.0 -->
				<a title="Kantipur Pest Control" href="<?php echo base_url(); ?>" class="home">
					<i class="fa fa-home fa-lg"></i>
				</a>
				<span>
					<i class="fa fa-angle-right"></i>
				</span>
				<span typeof="v:Breadcrumb">
					<span property="v:title">Contact Us</span>
				</span>
			</span>
		</div>
	</div>
</div>

<div id="main" class="fullwidth"><div id="primary" class="pagemid">

	<div class="inner">

		<main class="content-area" role="main">
			<div class="entry-content-wrapper clearfix">
				<?php foreach ($contact_setup as $key=>$data): ?>
		<div class="map_box">
			
			<?php echo $data['map_plugin'] ?>
		</div>
<?php endforeach;?>
<div class="clearfix"></div>
				<div id="post-3175" class="post-3175 page type-page status-publish hentry">				
				<div id="section37" class="section_row clearfix section_bg    " style="background-color:#ffffff;padding:80px 0;">
					<div class="iva-section-patterns"></div>
					<div class="section_inner">
						<?php foreach($contact_setup as $key=>$data): ?>
						<div class="one_third">
							<div class="aligncenter">
								<i style="color:#444444; font-size:44px;" class="fa fa-envelope-o"></i>
							<div class="demo_space" style="height:20px"></div>
							<h4>Have any questions?</h4>
								<hr>
							<h5><?php echo $data['email'] ?></h5>
							</div>
						</div>
						<div class="one_third">
							<div class="aligncenter">
								<i style="color:#444444; font-size:44px;" class="fa fa-phone"></i>
							<div class="demo_space" style="height:20px"></div>
							<h4>Phone</h4>
								<hr>
							<h5><?php echo $data['phone'] ?></h5>
							</div>
						</div>
					<!-- 	<div class="one_third last">
							<div class="aligncenter">
								<i style="color:#444444; font-size:44px;" class="fa fa-phone"></i>
							<div class="demo_space" style="height:20px"></div>
							<h4>Contact Us</h4>
								<hr>
							<h5><?php echo $data['phone'] ?></h5>
							</div>
						</div> -->
					<?php endforeach; ?>
						<div class="clear"></div>
					</div>
				</div>
			<div class="two_third">
				<div class="fancyheading left">
					<h3 class="fancy-title ">
						<span style="color:#444444;"><strong>GET IN TOUCH</strong></span>
					</h3>
					<p></p>
				</div>
			<div role="form" class="wpcf7" id="" lang="en-US" dir="ltr">
				<div class="screen-reader-response"></div>
				<?php echo form_open('site/add_inquiry'); ?>
					<div style="display: none;">
						<input type="hidden" name="_wpcf7" value="3174">
						<input type="hidden" name="_wpcf7_version" value="5.0.4">
						<input type="hidden" name="_wpcf7_locale" value="en_US">
						<input type="hidden" name="_wpcf7_unit_tag" value="">
						<input type="hidden" name="_wpcf7_container_post" value="3175">
					</div>
					<p>
						<span class=" name">
							<input type="text" name="name" value="" size="40" class="" aria-required="true" aria-invalid="false" placeholder="Name">
						</span>
					</p>
					<p>
						<span class=" email">
							<input type="email" name="email" value="" size="40" class="" aria-required="true" aria-invalid="false" placeholder="Email Address">
						</span>
					</p>
					<p>
						<span class=" subject">
							<input type="text" name="subject" value="" size="40" class="" aria-invalid="false" placeholder="Subject">
						</span>
					</p>
					<p>
						<span class=" message">
							<textarea name="message" cols="40" rows="10" class="" aria-invalid="false" placeholder="Tell us about your query"></textarea>
						</span>
					</p>
					<p>
						<input type="submit" value="SEND MESSAGE" class="wpcf7-form-control wpcf7-submit"><!-- <span class="ajax-loader"></span> -->
					</p>
					<div class="wpcf7-response-output wpcf7-display-none"></div>
				<?php  echo form_close();?>
			</div>
		</div>
		<div class="one_third last">
			<div class="fancyheading left">
				<h3 class="fancy-title ">
					<span style="color:#444444;">
						<strong>OUR HEAD OFFICE</strong>
					</span>
				</h3>
				<p></p>
			</div>
				<h4 style="font-weight: 900;">Kantipur Pest Control</h4>
				<p>The Complete Pest Control Service Provider.<br>
				</p>
				<?php foreach($contact_setup as $key=>$data): ?>
				<div class="contactinfo-wrap iva_anim ">
					<p>
						<i class="fa fa-map-marker fa-fw"></i><?php echo $data['address'] ?>
					</p>
					<p>
						<i class="fa fa-link fa-fw"></i>
						<a href="<?php echo base_url(); ?>"> www.kantipurpescontrol.com.np</a>
					</p>
					<p>
						<i class="fa fa-fax fa-fw"></i> <?php echo $data['phone'] ?>
					</p>
				</div>
			<?php endforeach; ?>
			</div>
			<div class="clear"></div>			
				</div>
				<div class="clear"></div>
		</div>
		</main><!-- .content-area -->
		<div class="clear"></div>
	</div><!-- .inner -->
</div><!-- .pagemid -->
</div>