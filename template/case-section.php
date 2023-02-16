<?php 
$heading = isset($args['heading']) ? $args['heading'] : ''; 
$intro = isset($args['intro']) ? $args['intro'] : '';
$slides = isset($args['slides']) ? $args['slides'] : []; 
$bg_class = isset($args['bg_class']) ? $args['bg_class'] : '';
$txt_class = isset($args['txt_class']) ? $args['txt_class'] : '';

?>
<section class="case-section <?php echo $bg_class; ?> l_py s_py">
	<div class="container custom-container <?php echo $txt_class; ?>">
		<div class="row">
			<div class="col-lg-12 headingRow text-center">
				<h1><?php echo $heading;?></h1>
				<p class="my-5"><?php echo $intro;?></p>
			</div>
			<div class="case-section-wrapper">
				<div id="carouselstudies" class="carousel slide" data-bs-ride="carousel">
				  <div class="carousel-inner">
				  	<?php if($slides) {
						$i= 1;
						foreach($slides as $slide) { ?>
							<div class="carousel-item <?php echo ($i==1) ? 'active' : '';?>">
								<div class="row justify-content-center ">
									<div class="col-md-12">
										<img src="<?php echo $slide['image'];?>"class="img-fluid">
										<h4 class="mt-3"><?php echo $slide['heading'];?></h4>
										<p><?php echo $slide['content'];?> <a href="<?php echo $slide['link'];?>" class="viewmore"><?php echo $slide['link_text'];?></a></p>
									</div>
								</div>   
							</div>
						<?php $i++; } 
						}
					?>					
				</div>
			  <button class="carousel-control-prev" type="button" data-bs-target="#carouselstudies" data-bs-slide="prev">
				<i class="fa fa-angle-left"></i>
				<span class="visually-hidden">Previous</span>
			  </button>
			  <button class="carousel-control-next" type="button" data-bs-target="#carouselstudies" data-bs-slide="next">
				<i class="fa fa-angle-right"></i>
				<span class="visually-hidden">Next</span>
			  </button>
		  </div>
		</div>
	</div>
</section>