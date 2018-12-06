
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
				<li><img alt="Commercial Pest Contol" src="<?php echo base_url('site_assets/'); ?>images/slider1.jpg" width="1920" height="550">						<div class="flex-caption fadeInDown">
					<div class="flex-title">
						<h5>Cockroach Control</h5>
						<h6>We pride ourselves on our reputation as Nepal's Pest Control Team”.</h6>
					</div> <!-- .flex-title -->
					</div><!-- .flex-caption -->
				</li>
				<li><img    alt="Termite Control" src="<?php echo base_url('site_assets/'); ?>images/slider2.jpg" width="1920" height="550">							<div class="flex-caption fadeInDown">
					<div class="flex-title">
						<h5>Any type of Pest Control</h5>
						<h6>With our service satisfaction guarantee,  the best value for your money.</h6>
					</div> <!-- .flex-title -->
					</div><!-- .flex-caption -->
				</li>
				<li><img  alt="Keeps your home bug free!" src="<?php echo base_url('site_assets/'); ?>images/slider3.jpg" width="1920" height="550">					<div class="flex-caption fadeInDown">
					<div class="flex-title">
						<h5>Keep your surroundings bugs free</h5>
						<h6>We are commited to make you free from all sorts of bugs</h6>
					</div> <!-- .flex-title -->
					</div><!-- .flex-caption -->
				</li>
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
<div id="section9"  class="section_row clearfix section_bg " style="background-color:#dfe5e7;padding:80px 0;"   >
	<div class="iva-section-patterns" ></div>
	<div class="section_inner">
	<div class="one_fourth" >
		<div class="fancyheading center" >
			<h1 class="fancy-title ">
				<span  style="color:#444444;">
					<strong>JUST 3 EASY STEPS TO A PEST-FREE HOME</strong>
				</span>
			</h1>
			<p>After the initial service is complete, we will return to your home every quarter to reapply the outside barrier.</p>
		</div>
		<p class="center">
			<a class=' btn center medium  green   flat'>
				<span>GET A FREE INSPECTION</span></a>
			</p>
	</div>

	<div class="one_fourth" >
		<span  data-id="fadeInUp" class=" iva_anim iva-tooltip   " >
			<figure>
				<img    alt="" src="<?php echo base_url('site_assets/images/'); ?>service-stpe1-360x600.jpg" width="360" height="600">
			</figure>
		</span>
	</div>

	<div class="one_fourth" >
		<span  data-id="fadeInUp" class=" iva_anim iva-tooltip   " >
			<figure>
				<img    alt="" src="<?php echo base_url('site_assets/images/'); ?>service-stpe2-360x600.jpg" width="360" height="600">
			</figure>
		</span>
	</div>
	<div class="one_fourth last" >
		<span  data-id="fadeInUp" class=" iva_anim iva-tooltip   " >
			<figure>
				<img    alt="" src="<?php echo base_url('site_assets/images/'); ?>service-stpe3-360x600.jpg" width="360" height="600">
			</figure>
		</span>
	</div>
	<div class="clear"></div>
	</div>
</div>

<div id="section82"  class="section_row clearfix section_bg "  style="padding:80px 0;" >
	<div class="iva-section-patterns" ></div>
	<div class="section_inner">
		<div class="fancyheading center" >
			<h1 class="fancy-title ">
				<span  style="color:#444444;"><strong>SAVE YOUR TIME AND EFFORT</strong>
				</span>
			</h1>
			<p>
				We Kantipur Pest Control provides domestic pest control services and <br />
				you can trust and deal with any kind of pest problems with in your area.
			</p>
		</div>
		<div class="one_fourth" >
			<img src="<?php echo base_url('site_assets/images/'); ?>trust2.jpg" alt="anona" />
		</div>
		<div class="one_fourth" >
			<img src="<?php echo base_url('site_assets/images/'); ?>safety2.jpg" alt="anona" />
		</div>
		<div class="one_fourth" >
			<img src="<?php echo base_url('site_assets/images/'); ?>guarantee2.jpg" alt="anona" />
		</div>
		<div class="one_fourth last" >
			<img src="<?php echo base_url('site_assets/images/'); ?>expertise2.jpg" alt="anona" />
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
	<div class="one_third" >
		<div class="atp-services">
			<div class="serviceIcn_style1">
				<div class="sIcn_heading">
					<i class="fa fa-bug services_icon1" style="color:#FA3351;"></i>
				</div>
				<div class="sIcn_content">
					<h3>Bed Bug Pest Control</h3>
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
		</div>
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
