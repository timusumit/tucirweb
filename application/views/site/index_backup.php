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
				<li><img alt="Commercial Pest Contol" src="<?php echo base_url('site_assets/'); ?>images/anona-slider-2-1920x550.jpg" width="1920" height="550">						<div class="flex-caption fadeInDown">
					<div class="flex-title">
						<h5>Commercial Pest Contol</h5>
						<h6>We pride ourselves on our reputation as “America’s Pest Control Team”.</h6>
					</div> <!-- .flex-title -->
					</div><!-- .flex-caption -->
				</li>
				<li><img    alt="Termite Control" src="<?php echo base_url('site_assets/'); ?>images/anona-slider-3-1920x550.jpg" width="1920" height="550">							<div class="flex-caption fadeInDown">
					<div class="flex-title">
						<h5>Termite Control</h5>
						<h6>With our service satisfaction guarantee,  the best value for your money.</h6>
					</div> <!-- .flex-title -->
					</div><!-- .flex-caption -->
				</li>
				<li><img  alt="Keeps your home bug free!" src="<?php echo base_url('site_assets/'); ?>images/anona-slider-1-1920x550.jpg" width="1920" height="550">					<div class="flex-caption fadeInDown">
					<div class="flex-title">
						<h5>Keeps your home bug free!</h5>
						<h6>Donec turpis mi, iaculis id condimentum id placerat viverra est</h6>
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
						<small>Short Summary for the appointment callout box goes here and you can add more content using shortcode.</small>
					</div>
				</div>
				<div class="two_third mb0 last">
					<div class="iva_apptform_wrap">
						<?php echo form_open('site/add_appointment'); ?>
							<div class="one_half form_col">
							<input type="text" name="firstname" id="firstname" value="" placeholder="First Name" class="firstname"></div>
							<div class="one_half form_col last">
								<input type="text" name="email" value="" placeholder="Email"  id="email" class="email">
							</div>
							<div class="one_half form_col">
								<input type="text" name="date" readonly value="" placeholder="Date" id="date" class="date">
							</div>
							<div class="one_half form_col last">
								<input type="text" name="phone" id="phone" value="" placeholder="Phone" class="phone">
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

<div id="section18"  class="section_row clearfix section_bg"  style="background-color:#ffffff;padding:80px 0;border-color:f6f6f6;" >
	<div class="iva-section-patterns" ></div>
	<div class="section_inner">
	<div class="one_third" >
		<div class="atp-services">
			<div class="serviceIcn_style2a">
				<div class="services_icon2a yellow"><i class="fa fa-star"></i>
				</div>
				<div class="sIcn_heading2a">
					<h3>5 STAR <strong>PROTECTION</strong></h3>
					<div class="sIcn_content2a">We provide the 5 star protection plan guarantees you stay safe from pest without hassle. Saves your money.</div>
				</div>
			</div>
		</div>
	</div>
	<div class="one_third" >
		<div class="atp-services">
			<div class="serviceIcn_style2a">
				<div class="services_icon2a yellow">
					<i class="fa fa-archive"></i>
				</div>
				<div class="sIcn_heading2a">
					<h3>PESTS <strong>LIBRARY</strong></h3>
					<div class="sIcn_content2a">Certain pests can be very dangerous and even deadly to humans and pets. get more information with our pest library.</div>
				</div>
			</div>
		</div>
	</div>
	<div class="one_third last" >
		<div class="atp-services">
			<div class="serviceIcn_style2a">
				<div class="services_icon2a yellow">
					<i class="fa fa-search"></i>
				</div>
				<div class="sIcn_heading2a">
					<h3>FREE <strong>INSPECTION</strong></h3>
					<div class="sIcn_content2a">Schedule a Complimentary inspection of your Residential or Commercial place and effectively rid your life of pests! </div>
				</div>
			</div>
		</div>
	</div>
	<div class="clear"></div>
	</div>
</div>

<div id="section73"  class="section_row clearfix section_bg "  style="background-color:#dfe5e7;padding:100px 0 80px 0;"   >
	<div class="iva-section-patterns" ></div>
	<div class="section_inner">
	<div class="two_third" >
		<div class="fancyheading textleft" ><h1 class="fancy-title xlarge">
			<span >DEFEND YOUR PEST<br />
			<strong>CALL US FOR A FREE ESTIMATE VIA TOLL FREE 1.855.ANONA.</strong>
			</span>
			</h1>
			<p>What are you waiting for? Request a free estimate from our Toll FREE number or Book an Appointment. Lorem ipsum dolor sita mattios</p>
		</div>

		<div class="one_half" >
			<h5><strong>HOW DOES IT WORKS?</strong></h5>
			<p>Praesent sed condimentum sem, vel rutrum leo. Vivamus at condimentum nisi, at varius elit. Nec luctus quam. Donec a tristique mauris. Ulamcorper nulla condimentum arcu.<br />
		</div>		
		<div class="one_half last" >
			<h5><strong>MORE SERVICES WE OFFER</strong></h5>
			<ul class="iva-checklist iva-liststyle1">
				<li class="iva-li-item-content">
					<span class="icon-wrapper ">
						<i class="fa fa-fw fa fa-bug"  style="color:#E0BA21;"></i>
					</span>Donec ac convallis ipsum.
				</li>
				<li class="iva-li-item-content">
					<span class="icon-wrapper "><i class="fa fa-fw fa fa-bug"  style="color:#E0BA21;"></i>
					</span>Aliquam commodo bibendum.
				</li>
				<li class="iva-li-item-content">
					<span class="icon-wrapper "><i class="fa fa-fw fa fa-bug"  style="color:#E0BA21;"></i>
					</span>Praesent sollicitudin quis
				</li>
				<li class="iva-li-item-content">
					<span class="icon-wrapper "><i class="fa fa-fw fa fa-bug"  style="color:#E0BA21;"></i>
					</span>Aliquam commodo bibendum.
				</li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>
<div class="one_third last" >
	<span  class=" iva_anim iva-tooltip   " >
		<figure><img    alt="" src="<?php echo base_url('site_assets/'); ?>images/pest-control-page.jpg" width="" height=""></figure>
		<span class="image_caption ivatip ivatip_top">Image Caption as a ToolTip</span></span>
	<div class="demo_space"  style="height:10px"></div>
	<span  class=" iva_anim iva-tooltip   " >
		<figure><img    alt="" src="<?php echo base_url('site_assets/'); ?>images/construction.jpg" width="" height=""></figure>
		<span class="image_caption ivatip ivatip_bottom">Caption with bottom position</span>
	</span>
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
			<p>"Best theme in the marketplace with all the features needed for the Pest Control Services company and very user friendly with appointments management system as well."</p>
			<div class="tc-client-meta">
				<div class="client-name"> - Adrenal Dorsen, Andre Dloex, <a href="http://www.yourdomain.com/" target="_blank">DomainAndre</a></div>
			</div>
		</div>
	</div>
	<div class="testimonial-carousel">
		<span class="tc-details"></span>
		<div class="tc-content">
			<p>"Anona Theme made our work hassel free with the features included in it are really indeed for a company with having no issues in managing their appointments."</p>
			<div class="tc-client-meta">
				<div class="client-name"> - Lorea Claudia, Star Dloex, <a href="http://www.yourdomain.com/" target="_blank">StartDloex</a></div>
			</div>
		</div>
	</div>
	<div class="testimonial-carousel">
		<span class="tc-details"></span>
		<div class="tc-content">
			<p>"Anona Theme comes with an amazing features useful for the pest control company like managing the appointments and bookings and they have made our life really simple and easy."</p>
			<div class="tc-client-meta">
				<div class="client-name"> - John Smith, Star Company, <a href="http://www.yourdomain.com/" target="_blank">Domain</a></div></div>
			</div>
		</div>
	</div>
</div>
</div>			
</div>
<!-- .pagemid -->
</div><!-- #main -->
