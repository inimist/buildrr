<?php
$heading = isset($args['heading']) ? $args['heading'] : '';
$intro = isset($args['intro']) ? $args['intro'] : '' ;
$feature_lists = isset($args['feature_lists']) ? $args['feature_lists'] : [] ;
$bg_class = isset($args['bg_class']) ? $args['bg_class'] : '';
?>
<section class="graysec feature-upgrades <?php echo $bg_class; ?> taxi-solution l_py s_py">
	<div class="container custom-container">
		<div class="row">
			<div class="col-lg-12 headingRow text-center mb-lg-5 mb-md-4 mb-sm-3">
				<h1><?php echo $heading; ?></h1>
				<p class="mt-5"><?php echo $intro; ?></p>
			</div>
		</div>
	    <div class="row">
		    <?php
              foreach($feature_lists as $list){
		    ?>
			<div class="col-sm-12 col-md-6 col-lg-4">
				<div class="features-box mtb">
					<i class="<?php echo $list['class']; ?>"></i>
					<div class="text">
						<h3><?php echo $list['title']; ?></h3>
						<p><?php echo $list['desc']; ?></p>
					</div>
				</div>
			</div>
			<?php
              }
			?>
		</div>
	</div>
</section>