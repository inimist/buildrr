<?php
$post_title = isset($args['post_title']) ? $args['post_title'] : ''; 
$intro = isset($args['intro']) ? $args['intro'] : '';
$btn_text = isset($args['btn_text'])? $args['btn_text'] : '';
$post_data = isset($args['post_data']) ? $args['post_data'] : [];
$lists_data = isset($args['listdata']) ? $args['listdata'] : [];
$btn_class = isset($args['btn_class']) ? $args['btn_class'] : '';
$bg_class = isset($args['bg_class']) ? $args['bg_class']: '';
$txt_class = isset($args['txt_class']) ? $args['txt_class']: '';
?> 
<section class="hiringmodels  <?php echo $bg_class; ?> l_py s_py">
	<div class="container custom-container">
		<div class="row <?php echo $txt_class; ?>">
			<div class="col-lg-12 headingRow text-center mb-4">
			<h1><?php echo $post_title; ?></h1>
			<p class="mt-5 mb-3"><?php echo $intro; ?></p>
			</div>
			<?php
			   if($post_data){
			   foreach($post_data as $data){               
			?>
			<div class="col-md-4">
				<div class="models mt-3">
					<i class="<?php echo $data['class']; ?>"></i>
					<h3 class="text-center"><strong><?php echo $data['title'];?></strong></h3>
					<p><?php echo $data['desc'];?></p>
					<ul>   
                        <?php
				         $lists = $data['listdata'];
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
			<div class="col-lg-12 text-center my-4 <?php echo $bg_class; ?>">

				 <a href="#" class="<?php echo $btn_class; ?>"><?php echo $btn_text; ?></a>
			</div>
		</div>
	</div>
</section>

