<?php
$heading = isset($args['heading']) ? $args['heading'] : ''; 
$intro = isset($args['intro']) ? $args['intro'] : ''; 
$service_type = isset($args['service_type']) ? $args['service_type'] : [];
$main_img_class = isset($args['main_class']) ? $args['main_class'] : [];
$bg_class = isset($args['bg_class']) ? $args['bg_class'] : '';
$txt_class = isset($args['txt_class']) ? $args['txt_class'] : '';
?>
<section class="servicesRow <?php echo $bg_class; ?> l_py s_py">
	<div class="container custom-container <?php echo $txt_class; ?>">
		<div class="row">
			<div class="col-lg-12 headingRow text-center">
				<h1><?php echo $heading;  ?></h1>
				<p class="pt-5"><?php echo $intro; ?></p>
			</div>
				<div class="col-lg-12">
					<div class=" row hireMain-services">
					<?php if($service_type) {
						foreach($service_type as $service){ ?>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 mt-4 services <?php echo $main_img_class; ?>">
							<i class="<?php echo  $service['class']; ?>"></i>
							<h4><?php echo $service['title'] ; ?></h4>
							<p><?php echo $service['desc']; ?></p>
						</div>
						<?php
						   }
                          }
						?>						
				 </div>
			</div>
		</div>
	</div>
</section>