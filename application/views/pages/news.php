<section class="page">
<div class="container">
<div class="section_gap">

		<div class="row">
		
		<article class="col-lg-8">
			<h3>News</h3>
			<p class="text-justify">
				<div class="row">
					<div class="col-lg-12">

						<table class="table table-striped table-bordered table-hover dtable">
	<thead><tr><th>News List</th><th>Published Date</th></tr></thead>
	<tbody>
		<?php foreach($news_for_inner as $key=>$data): ?>
		<tr>
			<td width="80%">
						
							
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
									<span class="date_news"></span>
								</div>								
							</div>
							
							</div>
						
						
			</td>
			<td><?php echo $data['post_date'] ?></td>
		</tr>
				<?php endforeach; ?>
			</tbody>	
		</table>	
					</div>
				</div>
			</p>
		</article>
		
		<aside class="col-lg-4">
			
							<h4 class="bg_btn">Publication</h4>
							<div class="event_box_wrap">
								<div class="col-lg-12 news_block_wrap">
						<?php foreach($create_pub as $key=>$data): ?>		
								<div class="row">
								<div class="col-3 pad_fix " >
									<div class="date_box">
										<div class="date_part">
											<span><?php $dates=explode(' ', $data['pub_date']); echo $dates[1];?></span>
										</div>
										<div class="month_part">
											<span><?php $dates=explode(' ', $data['pub_date']); echo $dates[0];?></span>
										</div>
									</div>
								</div>
								<div class="col pad_fix"> <a href="<?php echo  $data['pub_image_url'] ?>" target="_blank" class="news_title"><h6 class="text-justify text-bold text_ne "><?php echo $data['pub_title'] ?> </h6></a>
									<h6 class="date_event"><?php echo $data['pub_date'] ?></h6>
									<!-- <h6 class="location_event"><?php echo $data['event_location'] ?></h6> -->
								</div>								
							</div>
							<hr>
						<?php endforeach;?>
								
						<div class="row">
								<div class="col-lg-12 text-center ">
									<a href="<?php echo base_url('site/publication') ?>" class="btn btn_tu_blue">Read More</a>
								</div>
							</div>
					</div>
						
			
		</aside>
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