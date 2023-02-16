<?php 
$heading = isset($args['heading']) ? $args['heading'] : '' ;
$intro = isset($args['intro']) ? $args['intro'] : '' ;
$img = isset($args['image']) ? $args['image'] : '' ;
$offshores = isset($args['offshores']) ? $args['offshores'] : '' ;
$list_data = isset($args['listdata']) ? $args['listdata'] : '' ;
$checks = isset($args['checks']) ? $args['checks'] : '' ;
$check_list = isset($args['checklist']) ? $args['checklist'] : '' ;
$img_class = isset($args['img_class']) ? $args['img_class'] : '' ;
$bg_class = isset($args['bg_class']) ? $args['bg_class'] : '';
$txt_class = isset($args['txt_class']) ? $args['txt_class'] : '';

?>
<section class="approach <?php echo $bg_class; ?> l_py s_py">
	<div class="container custom-container <?php echo $txt_class; ?> ">
		<div class="row">
			<div class="col-lg-12 headingRow text-center ">
				<h1><?php echo $heading?></h1>
				<p class="mt-5"><?php echo $intro?></p>
			</div>
			<div class="row offshore <?php echo $img_class;?>">
			<?php 
			if($offshores){
				foreach($offshores as $offshore){
			?>
			<div class="col-md-4 mt-5">
				<i class="icon1"></i>
				<h4 class="text-center"><?php echo $offshore['heading'];?></h4>
				<?php if($offshore['intro']) { ?>
				<p class="py-3"><?php echo $offshore['intro'];?></p>
				<?php } ?>
				<ul class="li-style">
					<?php 
						$lists = $offshore['listdata'];
						foreach($lists as $list){
							?>
					<li class="position-relative"><?php echo $list;?></li>
					<?php 
						}?>
				</ul>
			</div>
			<?php 
					}
				}
			?>
			<div class="col-md-4 mt-5 text-center">
				<img src="<?php echo $img;?>" class="img-fluid">
			</div>
			
			<?php 
			if($checks){
				foreach($checks as $check){
					?>
			<div class="col-md-4 mt-5">
				<i class="icon2"></i>
				<h4 class="text-center"><?php echo $check['heading'];?></h4>
				<?php if($check['intro']) { ?>
				<p class="py-3"><?php echo $check['intro'];?></p>
				<?php } ?>
				<ul class="li-style">
					<?php 
					$lists = $check['checklist'];
						foreach($lists as $list){
							?>
					<li class="position-relative"><?php echo $list;?></li>
					<?php 
						}
					?>
				</ul>
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
