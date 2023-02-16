<?php
$heading = isset($args['heading']) ? $args['heading'] : ''; 
$intro = isset($args['intro']) ? $args['intro'] : '';
$image = isset($args['image']) ? $args['image'] : '';
$bg_class = isset($args['bg_class']) ? $args['bg_class']: '';
?>
<section class="keep-sec <?php echo $bg_class; ?> l_py s_py">
	<div class="container custom-container">
		<div class="row">
			<div class="col-lg-12 headingRow text-center mb-lg-5 mb-md-4 mb-sm-3">
				<h1><?php echo $heading; ?></h1>
				<p class="mt-5"><?php echo $intro; ?></p>
			</div>
		</div>
		<div class="col-lg-9 ml-auto mr-auto">
              <img src="<?php echo $image ; ?>" alt="ecommerce solutions provider" width="100%"> 
		</div>
	</div>
</section>