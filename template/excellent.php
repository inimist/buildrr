<?php 
$heading = isset($args['heading']) ? $args['heading'] : '' ;
$intro = isset($args['intro']) ? $args['intro'] : '' ;
$values = isset($args['values']) ? $args['values'] : '' ;
$img_class = isset($args['img_class']) ? $args['img_class'] : '' ;
$bg_class = isset($args['bg_class']) ? $args['bg_class'] : '';
$txt_class = isset($args['txt_class']) ? $args['txt_class'] : '';

?>

<section class="excellent <?php echo $bg_class; ?> l_py s_py">
	<div class="container custom-container <?php echo $txt_class; ?>">
		<div class="row">
			<div class="col-12-lg headingRow text-center">
				<h1><?php echo $heading;?></h1>
				<p class="mt-5"><?php echo $intro;?></p>
			</div>
				<?php 
				if($values){
					foreach($values as $value){
						?>
			<div class="col-md-4 offshoreValue mt-5 <?php echo $img_class;?>">
				<h3 class="d-flex align-items-center"><i class="<?php echo $value['class'];?>"></i><?php echo $value['heading'];?></h3>
				<p><?php echo $value['content'];?></p>
			</div>
			<?php 
			}
				}
			?>
		</div>
	</div>
</section>