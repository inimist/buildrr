<?php
$heading = isset($args['heading']) ? $args['heading'] : ''; 
$intro = isset($args['intro']) ? $args['intro'] : ''; 
$btn_txt = isset($args['btn_txt']) ? $args['btn_txt'] : '';
$btn_link = isset($args['btn_link']) ? $args['btn_link'] : '';
$bottom_btn = isset($args['bottom_btn']) ? $args['bottom_btn'] : false;
?>

<section class="solution-banner appointment-banner bg-white">
	<div class="container custom-container banner-text ">
		<div class="row">
			<div class="col-lg-12 text">
				<h1><?php echo $heading; ?></h1>
				 <p><?php echo $intro; ?></p>
				 <?php 
                  if($bottom_btn){
				 ?>
				 <button type="button" class="contact mb-5"><a href="<?php echo $btn_link; ?>" title="Request A Demo"><?php echo $btn_txt; ?></a></button>
				 <?php
                  }
				 ?>
			</div>
		</div>
	</div>
</section>