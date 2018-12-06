
	<?php  foreach($create_page as $key=>$data): ?>
<div id="subheader" class="sleft" >
	<div class="subheader-inner">
		<div class="subdesc">	
			<h1 class="page-title"><?php echo $data['page_title'] ?></h1>
		
		</div>
		<div class="breadcrumb-wrap">
			<span class="breadcrumbs">
				<!-- Breadcrumb NavXT 6.2.0 -->
				<a title="Pest Control" href="<?php echo base_url(); ?>" class="home">
					<i class="fa fa-home fa-lg"></i>
				</a>
				<span>
					<i class="fa fa-angle-right"></i>
				</span>
				<span typeof="v:Breadcrumb">
					<span property="v:title"><?php echo $data['page_title'] ?></span>
				</span>
			</span>
		</div>		
	</div>
</div>
<?php endforeach; ?>
<div id="main" class="col-lg-12">
	<div id="primary" class="pagemid">
		<div class="inner">		
			<main class="content-area" role="main">
				<div class="entry-content-wrapper clearfix">				
				<?php foreach($create_page as $key=>$data): ?>
				<article id="post-2177" class="">
					<header class="entry-header">
						<div class="entry-meta">
							
							
						</div><!-- .entry-meta -->

					</header><!-- .entry-header -->

					<div class="postimg">
					<?php  if($data['page_image_name']!='no_image') {?>
					<figure>
						<img  style="max-height: 250px;"  alt="<?php echo $data['page_image_name'] ?>" src="<?php  echo base_url('site_assets/uploads/page/'); ?><?php echo $data['page_image_name']?>">
					</figure>
				<?php }?>
					</div>
					<div class="entry-content">
						<p>
							<?php echo $data['page_content'] ?>
						</p>
								
					</div><!-- .entry-content -->
				</article>
			<?php endforeach; ?>
				
				</div>
			</main><!-- .content-area -->
			
	

			<div class="clear"></div>

		</div><!-- .inner -->
	</div><!-- .pagemid -->
</div><!-- #main -->
<div class="clearfix"></div>