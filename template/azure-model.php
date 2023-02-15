<?php 
$heading = isset($args['heading']) ? $args['heading'] : '' ;
$intro = isset($args['intro']) ? $args['intro'] : '' ;
$values = isset($args['values']) ? $args['values'] : '' ;
$img_class = isset($args['img_class']) ? $args['img_class'] : '' ;
$bg_class = isset($args['bg_class']) ? $args['bg_class'] : '';
$txt_class = isset($args['txt_class']) ? $args['txt_class'] : '';
$googles = isset($args['googles']) ? $args['googles'] : [] ;
$main_class = isset($args['main_class']) ? $args['main_class'] : '' ;

?>
<section class="azure-model <?php echo $bg_class; ?> l_py s_py">
	<div class="container custom-container <?php echo $txt_class; ?>">
		<div class="row">
			<div class="col-lg-12 headingRow text-center">
				<h1><?php echo $heading;?></h1>
				<p class="mt-5"><?php echo $intro;?></p>
			</div>
			<?php 
				if($values){
					foreach($values as $value){
						?>
			<div class="col-md-4 text-center mt-5 <?php echo $img_class;?>">
				<i class="<?php echo $value['class'];?>"></i>
				<h4 class="py-3"><?php echo $value['heading'];?></h4>
				<p><?php echo $value['content'];?></p>
			</div>
			<?php 
			  }
			  }
			?>
		</div>
		<div class="google-development row mt-5">
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