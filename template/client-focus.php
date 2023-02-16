<?php 
$heading = isset($args['heading']) ? $args['heading'] : '' ;
$intro = isset($args['intro']) ? $args['intro'] : '' ;
$clients = isset($args['clients']) ? $args['clients'] : '' ;
$list_data = isset($args['listdata']) ? $args['listdata'] : '' ;
$img_class = isset($args['img_class']) ? $args['img_class'] : '' ;
$bg_class = isset($args['bg_class']) ? $args['bg_class'] : '';
$txt_class = isset($args['txt_class']) ? $args['txt_class'] : '';


?>
<section class="client-focus <?php echo $bg_class; ?> l_py s_py">
	<div class="container custom-container <?php echo $txt_class; ?>">
		<div class="row">
			<div class="headingRow text-center">
				<h1><?php echo $heading?></h1>
				<p class="mt-5"><?php echo $intro?></p>
			</div>
			<?php 
			if($clients){
				foreach($clients as $client){
			?>
			<div class="col-md-4 models mt-5 <?php echo $img_class;?>">
				<i class="<?php echo $client['class'];?>"></i>
				<h4 class="py-4"><?php echo $client['heading'];?></h4>
				<?php if($client['content'])	{ ?>
				<p><?php echo $client['content'];?></p>
				<?php } ?>
				<ul>
				<?php 
				$lists = $client['listdata'];
				foreach($lists as $list){
					?>
					<li class="position-relative"><?php echo $list?></li>
					<?php 
				}?>
				</ul>
			</div>
			<?php }
			}	
			?>
		</div>
	</div>
</section>