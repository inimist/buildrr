<?php
$heading = isset($args['heading']) ? $args['heading'] : ''; 
$intro = isset($args['intro']) ? $args['intro'] : ''; 
$heading_1 = isset($args['heading_1']) ? $args['heading_1'] : ''; 
$main_bg = isset($args['main_bg']) ? $args['main_bg'] : ''; 
$bg_class = isset($args['bg_class']) ? $args['bg_class'] : '';
$btn_class = isset($args['btn_class']) ? $args['btn_class'] : '';

?>
<section class="dedicated-banner bg-white mt-3 <?php echo $main_bg;?> l_py s_py">
	<div class="container custom-container">
		<div class="row">
			<div class="col-lg-12 banner-text">
				<h3 class="mt-5"><?php echo $heading;?></h3>
				<h1><?php echo $heading_1;?></h1>
				<p class="my-3"><?php echo $intro;?></p>
				<button type="button" class="<?php echo $btn_class;?> mt-3">Contact Us</button>
			</div>
		</div>
	</div>
</section>




