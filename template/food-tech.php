<?php
$heading = isset($args['heading']) ? $args['heading'] : '';
$intro = isset($args['intro']) ? $args['intro'] : '';
$food_images = isset($args['image_lists'])? $args['image_lists'] : [];
$bg_class = isset($args['bg_class'])? $args['bg_class']: '';
?>
<section class="food-technologies <?php echo $bg_class; ?> l_py s_py">
	<div class="container custom-container">
		<div class="row">
			<div class="col-lg-12 headingRow text-center mb-lg-5 mb-md-4 mb-sm-3">
				<h1><?php echo $heading; ?></h1>
				<p class="mt-5"><?php echo $intro; ?></p>
			</div>
			<div class="col-lg-12">
				 <ul>
				 <?php foreach($food_images as $image){?>
					<li class="<?php echo $image; ?>"></li>
				 <?php } ?>
				</ul>
			</div>
		</div>
	</div>
</section>