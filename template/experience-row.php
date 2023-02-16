<?php
$heading = isset($args['main_title']) ? $args['main_title'] : ''; 
$intro = isset($args['intro']) ? $args['intro'] : '';
$btn_text = isset($args['link_text']) ? $args['link_text'] : '';
$btn_link = isset($args['link']) ? $args['link'] : '';
$project_details = isset($args['project_details']) ? $args['project_details'] : []; 
$button = isset($args['button']) ? $args['button'] : []; 
$btn_class = isset($args['btn_class']) ? $args['btn_class'] : '';
$txt_class = isset($args['txt_class']) ? $args['txt_class'] : '';
$bg_class = isset($args['bg_class']) ? $args['bg_class'] : '';
?>
<section class="experienceRow <?php echo $bg_class; ?> l_py s_py">
	<div class="container custom-container">
		<div class="row <?php echo $txt_class; ?>">
			<div class="col-lg-6">
				<ul class="row">
				   <?php
                     if($project_details){
				     foreach($project_details as $details){
				    ?>
					<div class="col-md-6 mb-3">
						<li><?php echo $details['numbers']; ?></li>
						<p><?php echo $details['text']; ?></p>
					</div>
					<?php
					    }
                      }
					 ?>
				</ul>
			</div>
			<div class="col-lg-6 mt-3 project_details">
				<h1 class="mb-3"><?php echo $heading;?></h1>
				<p class="pb-5"><?php echo $intro; ?></p>
				<a href="<?php echo $btn_link;?>" class="<?php echo $btn_class;?>"><?php echo $btn_text; ?></a>
			</div>
		</div>
	</div>
</section>
