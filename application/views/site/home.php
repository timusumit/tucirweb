
<section id="featured_slider" class="clearfix">
	<script type="text/javascript">
	jQuery(document).ready(function($) {
		"use strict";
		jQuery(".flexslider").flexslider({
			animation: "fade",
			controlsContainer: ".flex-container",
			slideshow: true,
			slideshowSpeed: 3000,
			animationDuration: 400,
			directionNav: true,
			controlNav: false,
			mousewheel: false,
			smoothHeight :false,
			start: function(slider) {
				jQuery(".total-slides").text(slider.count);
			},
			after: function(slider) {
				jQuery(".current-slide").text(slider.currentSlide);
			}
		});

		$( function() {
    $( "#date" ).datepicker();
  } );
	});
	</script>
<div class="slider_wrapper">
		<div class="flexslider">
			<ul class="slides">
				<?php foreach ($slider_setup as $key=>$data): ?>
				<li><img alt="Commercial Pest Contol" src="<?php echo base_url('site_assets/'); ?>uploads/slider/<?php echo $data['slider_image_name'] ?>" width="1920" height="550">						<div class="flex-caption fadeInDown">
					<div class="flex-title">
						<h5><?php echo $data['slider_title'] ?></h5>
						<h6><?php echo $data['slider_subtitle'] ?></h6>
					</div> <!-- .flex-title -->
					</div><!-- .flex-caption -->
				</li>
				<?php endforeach; ?>
		<!-- 		<li><img    alt="Termite Control" src="<?php echo base_url('site_assets/'); ?>images/slider2.jpg" width="1920" height="550">							<div class="flex-caption fadeInDown">
					<div class="flex-title">
						<h5>Any type of Pest Control</h5>
						<h6>With our service satisfaction guarantee,  the best value for your money.</h6>
					</div>
					</div>
				</li>
				<li><img  alt="Keeps your home bug free!" src="<?php echo base_url('site_assets/'); ?>images/slider3.jpg" width="1920" height="550">					<div class="flex-caption fadeInDown">
					<div class="flex-title">
						<h5>Keep your surroundings bugs free</h5>
						<h6>We are commited to make you free from all sorts of bugs</h6>
					</div> 
					</div>
				</li> -->
			</ul>
		</div><!-- .flexslider -->
	</div><!-- .flexslider_wrap -->
</section><!-- #featured_slider -->


<div id="main" class="fullwidth">
	<div class="pagemid_section">	
		<div class="iva_appt_section"  style="background-color:#222c2e;color:#ffffff;">
			<div class="iva_appt_inner">
				<div class="iva_appt_content"><div class="iva_sh_apt_msg223"></div>
				<div class="one_third mb0">
					<div class="fancyheading">
						<h1 class="fancy-title large">
							<span>APPOINTMENT<br></span>
						</h1>
						<small>Make yourself an appointment for the free inspection. Fill up this simple form and we shall contact you soon. </small>
					</div>
				</div>
				<div class="two_third mb0 last">
					<div class="iva_apptform_wrap">
						<?php echo form_open('site/add_appointment'); ?>
							<div class="one_half form_col">
							<input type="text" name="firstname" id="firstname" value="" placeholder="First Name" class="firstname" required="required"></div>
							<div class="one_half form_col last">
								<input type="text" name="email" value="" placeholder="Email"  id="email" class="email" required="required">
							</div>
							<div class="one_half form_col">
								<input type="text" name="date" readonly value="" placeholder="Date" id="date" class="date" required="required">
							</div>
							<div class="one_half form_col last">
								<input type="text" name="phone" id="phone" value="" placeholder="Phone" class="phone" required="required">
							</div>
							<div class="clear"></div>
							<input type="text"  style="display:none" value ="unseen" id="app_status" name="app_status">
							<button id="button_submit223" type="submit" class="btn yellow true large">
								<span>REQUEST AN INSPECTION</span>
							</button>
							
						<?php echo form_close();  ?>
					</div>
				</div>
			</div>
		</div>
	</div>


<div id="main" class="fullwidth">
<div class="pagemid_section">

<div id="section12" class="section_row clearfix section_bg " style="padding:80px 0;">
	<div class="iva-section-patterns"></div>
	<div class="section_inner">
		<div class="fancyheading left">
			<h2 class="fancy-title "><span>Kantipur Pest Control</span></h2>
		</div>
		<div class="one_half">
			<h4><b>Our Mission</b></h4>
			<?php foreach($vmi_setup as $key=>$data): ?>
			<p> <?php echo $data['mission'] ?></p>
			<?php endforeach; ?>
			<h4><b>Our vision</b></h4>
				<?php foreach($vmi_setup as $key=>$data): ?>
			<p><?php echo $data['vision'] ?></p>
		<?php endforeach; ?>
		</div>
		<div class="one_half last">
			<h4><b>Importance Of Pest Control</b></h4>
			<?php foreach($vmi_setup as $key=>$data): ?>
			<p>
				<?php echo $data['introduction'] ?>
			</p>
			<?php endforeach; ?>
		</div>
		<div class="clear"></div>
	</div>
</div>



<div id="section7"  class="section_row clearfix section_bg  "  style="background-color:#dfe5e7;padding:80px 0;border-color:#f7f7f7;"   >
	<div class="iva-section-patterns" ></div>
	<div class="section_inner">
<div class="fancyheading center" >
	<h1 class="fancy-title ">
		<span  style="color:#444444;"><strong>OUR SERVICES</strong>
		</span>
	</h1>
	<p>Pest Management Services for Your Business</p>
</div>
	<?php foreach($services_setup as $key=>$data): ?>
	<div class="col-lg-4" >
		<div class="atp-services">
			<div class="serviceIcn_style1">
				<div class="sIcn_heading">
					<i class="fa fa-bug services_icon1" style="color:#FA3351;"></i>
				</div>
				<div class="sIcn_content">
					<h3><?php echo $data['service_title'] ?></h3>
				<?php  echo $data['service_content']?>
			</div>
		</div>
	</div>
</div>
<?php endforeach; ?>
	<!-- 	<div class="one_third" >
			<div class="atp-services">
				<div class="serviceIcn_style1">
					<div class="sIcn_heading">
						<i class="fa fa-bug services_icon1" style="color:#FA3351;"></i>
					</div>
					<div class="sIcn_content">
						<h3>Termites Pest Control</h3>
					More than 30000+ customers who have contact us are happy with the pest control service that we have provided for them in past days.
				</div>
			</div>
		</div>
		</div>
		<div class="one_third last" >
			<div class="atp-services">
				<div class="serviceIcn_style1">
					<div class="sIcn_heading">
						<i class="fa fa-bug services_icon1" style="color:#FA3351;"></i>
					</div>
					<div class="sIcn_content">
						<h3>Cockroach Pest Control</h3>
					More than 30000+ customers who have contact us are happy with the pest control service that we have provided for them in past days.
					</div>
				</div>
			</div>
		</div>
		<div class="clear"></div>
		<div class="one_third" >
			<div class="atp-services">
				<div class="serviceIcn_style1">
					<div class="sIcn_heading">
						<i class="fa fa-bug services_icon1" style="color:#FA3351;"></i>
					</div>
					<div class="sIcn_content">
						<h3>Rodents Pest Control</h3>
					More than 30000+ customers who have contact us are happy with the pest control service that we have provided for them in past days.
					</div>
				</div>
			</div>
		</div>
		<div class="one_third" >
			<div class="atp-services">
				<div class="serviceIcn_style1">
					<div class="sIcn_heading">
						<i class="fa fa-bug services_icon1" style="color:#FA3351;"></i>
					</div>
					<div class="sIcn_content">
						<h3>Mosquitoes Pest Control</h3>
					More than 30000+ customers who have contact us are happy with the pest control service that we have provided for them in past days.
					</div>
					</div>
				</div>
		</div>
		<div class="one_third last" >
			<div class="atp-services">
				<div class="serviceIcn_style1">
					<div class="sIcn_heading">
						<i class="fa fa-bug services_icon1" style="color:#FA3351;"></i>
					</div>
				<div class="sIcn_content">
					<h3>Flies Pest Control</h3>
				More than 30000+ customers who have contact us are happy with the pest control service that we have provided for them in past days.
				</div>
				</div>
			</div>
		</div> -->
		<div class="clear"></div>
</div>
</div>

<div id="section44"  class="section_row clearfix section_bg  "  style="background-color:#ffffff;padding:80px 0;">
	<div class="iva-section-patterns" ></div>
	<div class="section_inner">
	<div class="fancyheading center" >
		<h2 class="fancy-title ">
			<span  style="color:#444444;">OUR <strong>HAPPY CUSTOMERS</strong></span>
		</h2>
		<p>  Placerat viverra est nam sed velit justo.</p>
	</div>
<script>
			jQuery(document).ready(function($) {
				$("#owl-32").owlCarousel({
					autoPlay: 3000, //Set AutoPlay to 3 seconds
					items : 1,
					itemsDesktop : [1199,1],
					itemsDesktopSmall : [1024,1],
					itemsTablet : [768,1],
					itemsMobile : [479,1]
				});
			});
</script>
<div id="owl-32" class="owl-carousel">
	<div class="testimonial-carousel">
		<span class="tc-details"></span>
		<div class="tc-content">
			<p>"I am very much satisfied with the service provided by Kantipur Pest Control. I would highly recommend anyone who are looking for pest control"</p>
			<div class="tc-client-meta">
				<div class="client-name"> - Nar Bahadur Gharti Magar, <a href="http://www.yourdomain.com/" target="_blank">Ghale gaun, Lamjung, Nepal</a></div>
			</div>
		</div>
	</div>
	<div class="testimonial-carousel">
		<span class="tc-details"></span>
		<div class="tc-content">
			<p>"I was very much troubled with ants and then i called Kantipur pest Control for the help i was impressed with their work."</p>
			<div class="tc-client-meta">
				<div class="client-name"> -Bul Maya Maharjan, <a href="http://www.yourdomain.com/" target="_blank">Sunakothi, Lalipur Nepal</a></div>
			</div>
		</div>
	</div>
	<div class="testimonial-carousel">
		<span class="tc-details"></span>
		<div class="tc-content">
			<p>"Very Affordable Pest Control. They are expert in this. I highly recommend anyone"</p>
			<div class="tc-client-meta">
				<div class="client-name"> - Surya Bahadur Bohra, <a href="http://www.yourdomain.com/" target="_blank">Thapa gaun, Baneshwor, Nepal</a></div></div>
			</div>
		</div>
	</div>
</div>
</div>	

</div>
<!-- .pagemid -->
</div><!-- #main -->
