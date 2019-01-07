<section class="page">
<div class="container">
<div class="section_gap">
		<?php foreach($get_news as $key=>$data): ?>
		<?php  if($data['post_image_name']!='no_image') {?>
		<figure>
			<img  style="max-height: 250px;"  alt="<?php echo $data['post_image_name'] ?>" src="<?php  echo base_url('site_assets/uploads/blog/'); ?><?php echo $data['post_image_name']?>">
		</figure>
		<?php }?>
	<?php endforeach; ?>
		<div class="row">
			<?php foreach($get_news as $key=>$data): ?>
		<article class="col-lg-8">
			<h3><?php echo $data['post_title'] ?></h3>
			<p class="text-justify">
				<?php echo $data['post_content'] ?>
			</p>
		</article>
		<?php endforeach; ?>
		<aside class="col-lg-4">
			<div class="row">
						<h1 class="hidden">Latest News and Events</h1>
						<article class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<h4 class="bg_btn">Latest News</h4>
							<div class="news_box_wrap">
								<div class="col-lg-12 news_block_wrap">
							<div class="row">
								
								<?php foreach($get_news_list as $key=>$data): ?>		
							
							<div class="col-lg-12 news_block_wrap">
							<div class="row">
								
								<div class="col-4 pad_fix " >
								<?php 	if($data['post_image_name']=='no_image'){?>
									<img class="img_tn_news" src="<?php echo base_url('site_assets/uploads/blog/thumbnail/default_image.jpg');?>">
								<?php  }else{ ?>
									<img class="img_tn_news" src="<?php echo base_url('site_assets/uploads/blog/thumbnail/');?><?php echo $data['post_image_name']  ?>">
								<?php }?>
								</div>
									
								<div class="col pad_fix"> <a href="<?php echo base_url('post/news/'.$data['slug']) ?>" class="news_title"><h6 class="text-justify text-bold text_ne "><?php echo character_limiter($data['post_title'],65); ?> </h6></a>
									<span class="date_news"><?php echo $data['post_date'] ?></span>
								</div>								
							</div>
							<hr>
							</div>
						
						<?php endforeach; ?>


							
								<div class="col-lg-12 text-center ">
									<a href="<?php echo base_url('site/news') ?>" class="btn btn_tu_blue">Read More</a>
								
							</div>


							</div>
						</div>
					</div>
						</article>
						

					</div>
			
		</aside>
	</div>
</div>
</div>
</section>





