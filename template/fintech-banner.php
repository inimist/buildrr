<?php
$heading = isset($args['heading']) ? $args['heading'] : '';
$heading1 = isset($args['heading_1']) ? $args['heading_1'] : '';
$intro = isset($args['intro']) ? $args['intro'] : '';
$btn_txt = isset($args['btn_txt']) ? $args['btn_txt'] : '';
$btn_link =isset($args['btn_link']) ? $args['btn_link'] : '';
$bottom_img = isset($args['bottom_img']) ? $args['bottom_img'] : '';
?>
<section class="bannersec fintech-banner">
	<div class="container custom-container banner-text mt-5">
		<div class="row">
			<div class="col-sm-12 col-lg-12">
				<div class="bannertext">
					<h1><small><?php echo $heading; ?></small><?php echo $heading1; ?></h1>
					<p class="my-3"><?php echo $intro;?></p>
					<button type="button" class="contact <?php echo $btn_class;?> mt-5">Contact Us</button>

				</div>
			</div>
		</div>
	</div>
</section>

