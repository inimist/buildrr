<?php 
$heading = isset($args['heading']) ? $args['heading'] : '' ;
$intro = isset($args['intro']) ? $args['intro'] : '' ;
$btn_text=isset($args['btn-text']) ? $args['btn-text'] : '' ;
$techs = isset($args['techs']) ? $args['techs'] : '' ;
$list_data = isset($args['listdata']) ? $args['listdata'] : '' ;
$img_class = isset($args['main_class']) ? $args['main_class'] : '' ;
$bg_class = isset($args['bg_class']) ? $args['bg_class'] : '';
$txt_class = isset($args['txt_class']) ? $args['txt_class'] : '';
$btn_class = isset($args['btn_class']) ? $args['btn_class'] : '';
$intro = isset($args['intro']) ? $args['intro'] : '';

?>
<section class="tech-framework <?php echo $bg_class; ?> l_py s_py">
	<div class="container custom-container <?php echo $txt_class; ?>">
		<div class="row">
			<div class="col-lg-12 headingRow text-center">
				<h1><?php echo $heading?></h1>
				<p class="mt-5"><?php echo $intro?></p>
			</div>
			<?php 
				if($techs){
				foreach($techs as $tech){
			?>
			<div class="techRow mt-3 <?php echo $tech['main_class'];?>">
				<h4 class="text-start"><?php echo $tech['heading'];?></h4>
				<p><?php echo $tech['intro'];?></p>
				<ul class="mobile d-flex flex-wrap text-center mt-3">
				<?php
					$lists = $tech['listdata'];
					foreach($lists as $list){
				?>
				<li px-4 px-lg-5><a href="#"><i class="<?php echo $list['img_class'];?>"></i><?php echo $list['heading'];?></a></li>
				<?php
			}
				?>
				</ul>
			</div>
			<?php 
			}
				}?>
			<div class="col-lg-12 text-center mt-3">
			<?php if($btn_text) { ?>
				<a type="button" class="contact <?php echo $btn_class; ?>"><?php echo $btn_text;?></a>
				<?php } ?>
			</div>
		</div>
	</div>
</section>