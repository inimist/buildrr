<!--------- Section Start do-not-have ------------->
<?php
$heading = isset($args['heading']) ? $args['heading'] : '';
$intro = isset($args['intro']) ? $args['intro'] : '';
$btn_txt = isset($args['btn_txt']) ? $args['btn_txt'] : '';
$btn_link = isset($args['btn_link']) ? $args['btn_link'] : '';
$bg_class = isset($args['bg_class']) ? $args['bg_class']: '';
?>
<section class="do-not-have bg_image <?php echo $bg_class; ?> l_py s_py">
	<div class="container custom-container">
		<div class="row">
			<div class="col-lg-12 headingRow">
				<h2 class="text-white"><?php echo $heading; ?></h2>
				<p class="text-white"><?php echo $intro; ?></p>
				<a href="<?php echo $btn_link; ?>" title="Request A Demo" class="contact mb-2"><?php echo $btn_txt; ?></a>
			</div>
		</div>	
	</div>
</section>
