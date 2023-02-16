<?php
$heading = isset($args['heading']) ? $args['heading'] : ''; 
$intro = isset($args['intro']) ? $args['intro'] : '';
$slides = isset($args['slides']) ? $args['slides'] : [];
$slide_class = isset($args['slide_class']) ? $args['slide_class'] : '';
$bg_class = isset($args['bg_class']) ? $args['bg_class'] : '';
$txt_class = isset($args['txt_class']) ? $args['txt_class'] : '';
$btn_class = isset($args['btn_class']) ? $args['btn_class'] : '';

?>
<section class="related-techno <?php echo $bg_class; ?> l_py s_py">
    <div class="container custom-container <?php echo $txt_class; ?>">
        <div class="row">
		    	<div class="col-lg-12 headingRow text-center">
					<h1><?php echo $heading; ?></h1>
					<p class="pt-5"><?php echo $intro; ?></p>
			    </div>
		</div>
		<div class="main-language-contain container">
		    <div class="row justify-content-between">
			     <div class="col-lg-12 mt-5">
						<div id="related-techno-slider" class="slick slide" data-bs-ride="slick-slide">
							<?php  foreach($slides as $slide) { ?>
								<div class="<?php echo $slide_class; ?>">
									<i class="<?=$slide['class'];?>"></i>
									<strong><?=$slide['title'];?></strong>
								</div>
							<?php } ?>
						</div> 
				</div>
			</div>
		</div>
	</div>
</section>