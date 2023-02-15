<?php
$heading = isset($args['heading']) ? $args['heading'] : ''; 
$intro = isset($args['intro']) ? $args['intro'] : ''; 
$steps = isset($args['steps']) ? $args['steps'] : []; 
$txt_class = isset($args['txt_class']) ? $args['txt_class'] : '';
$bg_class = isset($args['bg_class']) ? $args['bg_class'] : '';
?>
<section class="easy-steps <?php echo $bg_class; ?> l_py s_py">
	<div class="container custom-container <?php echo $txt_class; ?>"">
		<div class="row">
			<div class="col-lg-12 headingRow text-center">
				<h1><?php echo $heading; ?></h1>
				<p class="mt-5"><?php echo $intro; ?></p>
			</div>
             <?php if($steps) { 
			foreach($steps as $step){	 
				 ?>
			<div class="col-md-3 text-center">
				<strong><?php echo $step['numbers'] ?></strong>
				<img src="<?php echo $step['image']; ?>" class="img-fluid">
				<h4 class="text-center mt-3"><?php echo $step['title']; ?></h4>
			</div>
			<?php
			  }
             }            
			?>
		</div>
	</div>
</section>