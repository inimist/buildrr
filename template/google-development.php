<?php 
$heading = isset($args['heading']) ? $args['heading'] : '' ;
$intro = isset($args['intro']) ? $args['intro'] : '' ;
$googles = isset($args['googles']) ? $args['googles'] : '' ;
$main_class = isset($args['main_class']) ? $args['main_class'] : '' ;
$bg_class = isset($args['bg_class']) ? $args['bg_class'] : '';
$txt_class = isset($args['txt_class']) ? $args['txt_class'] : '';

?>
<section class="google-development <?php echo $bg_class; ?> l_py s_py">
	<div class="container custom-container <?php echo $txt_class; ?>">
		<?php if($heading || $intro)	{ ?>
		<div class="row">
			<div class="col-lg-12 headingRow text-center">
				<?php if($heading)	{ ?>
					<h1><?php echo $heading;?></h1>
				<?php }  
				if($intro)	{ ?>
					<p class="mt-5"><?php echo $intro;?></p>
				<?php }  ?>
			</div>
		</div>
		<?php }  ?>
		<div class="row py-5">
			<div class="col-lg-12 technlist <?php echo $main_class;?>">
				<ul class="d-flex flex-wrap justify-content-center">
				<?php 
				if($googles){
					foreach($googles as $google){
						?>
					<li><a href="#"><i class="<?php echo $google['class']?>"></i><?php echo $google['heading']?></a></li>
					<?php }
					}	
				?>
				</ul>
			</div>
		</div>
	</div>
</section>