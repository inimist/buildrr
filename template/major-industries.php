<?php 
$heading = isset($args['heading']) ? $args['heading'] : ''; 
$intro = isset($args['intro']) ? $args['intro'] : '';
$models = isset($args['models']) ? $args['models'] : '';
$lists_model = isset($args['listdata']) ? $args['listdata'] : '';
$serboxes = isset($args['serboxes']) ? $args['serboxes'] : '';
$list_box = isset($args['listbox']) ? $args['listbox'] : '';
$btn_text = isset($args['btn_text']) ? $args['btn_text'] : '';
$image = isset($args['image']) ? $args['image'] : '';
$main_img_class = isset($args['main_class']) ? $args['main_class'] : [];
$bottom_area = isset($args['bottom_area']) ? $args['bottom_area'] : false;
$bg_class = isset($args['bg_class']) ? $args['bg_class'] : '';
$txt_class = isset($args['txt_class']) ? $args['txt_class'] : '';
$order_class = isset($args['order_class']) ? $args['order_class'] : '';

?>
<section class="major-industries <?php echo $bg_class; ?> l_py s_py">
	<div class="container custom-container">
		<div class="row offshore-sec">

			<div class="col-lg-12 headingRow text-center <?php echo $txt_class; ?>">
				<h1><?php echo $heading;?></h1>
				<p class="mt-5"><?php echo $intro;?></p>
			</div>
		</div>
			<div class="row align-items-center<?php echo $txt_class; ?>">
				<?php
				if($models)	{
					$i=1;
					foreach($models as $model)	{
						$text= sprintf('<h3 class="d-flex align-items-center"><i class="%s"></i>%s</h3><p>%s</p>', $model['class'], $model['heading'], $model['content']);
						$img =  '<img src="'.$model['image'].'" class="img-fluid" width="70%;">';
						$text .= '<ul>';
						$lists = $model['listdata'];
						$order_class1 = isset($model['order_class']) ? $model['order_class'][0] : '';
						$order_class2 = isset($model['order_class']) ? $model['order_class'][1] : '';
						foreach($lists as $list)	{ 
						$text .=sprintf('<li class="position-relative">%s</li>', $list);						
						}
						$text .= '</ul>';
						
						?>
						<div class="col-md-6  models <?php echo $main_img_class.' '.$order_class1; ?>">
							<?php if($i % 2==0) {
								echo $img;
							} else {
								echo $text;
							}?>
						</div>
						<div class="col-md-6 models <?php echo $main_img_class.' '.$order_class2; ?>">
							<?php if($i % 2==0) {
								echo $text;
							} else {
								echo $img;
							}?>
						</div>
					<?php
					$i++;
					}
				}?>
		</div>
		<?php
         if($bottom_area){
		?>
		<div class="row mt-5">
			<?php 
				if($serboxes){
					foreach($serboxes as $boxes){
			?>
			<div class="col-md-4">
				<div class="imgBox">
					<img src="<?php echo $boxes['image'];?>" class="img-fluid">
				</div>
				<div class="textbox-item models <?php echo $main_img_class;?>">
					<h4 class="d-flex align-items-center"><i class="<?php echo $boxes['class'];?>"></i><?php echo $boxes['heading'];?></h4>
					<p class="py-3"><?php echo $boxes['content'];?></p>
						<ul>
						<?php 
							$lists = $boxes['listbox'];
							foreach($lists as $list){
							?>
						<li><?php echo $list;?></li>
						<?php
							}
						?>
						</ul>
				</div>
			</div>
			<?php
					}
				}
			?>
		<div class="col-lg-12 text-center py-5">
			<a class="button-yel"><?php echo $btn_text;?></a>
		</div>
		</div>
        <?php
		 }
		?>
	</div>
</section>

