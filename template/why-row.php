<?php
$heading = isset($args['heading']) ? $args['heading'] : ''; 
$intro = isset($args['intro']) ? $args['intro'] : '';
$image = isset($args['image']) ? $args['image'] : '';
$why_posts = isset($args['why_hire']) ? $args['why_hire'] : [];
$txt_class = isset($args['txt_class']) ? $args['txt_class'] : '';
$bg_class = isset($args['bg_class']) ? $args['bg_class'] : '';
?>
<section class="whyRow <?php echo $bg_class; ?> l_py s_py">
	<div class="container custom-container <?php echo $txt_class; ?>">
		<div class="row">
			<div class="col-lg-12 headingRow text-center">
				<h1><?php echo $heading; ?></h1>
				<p class="mt-5"><?php echo $intro; ?></p>
			</div>
			<div class="col-sm-12 col-md-5 col-lg-6 mt-5">
				<img src="<?php echo $image; ?>" width="100%" class="img-fluid;">
			</div>
			<div class="col-sm-12 col-md-7 col-lg-6 mt-5">
				<ul class="row">
					<?php
                    if($why_posts){
                      foreach($why_posts as $post){
					?>
					<li>
						<i class="<?php echo $post['class']; ?>"></i>
						<h3><?php echo $post['title']; ?></h3>
						<p class="mt-1"><?php echo $post['des']; ?></p>		
					</li>
					<?php
                      }
                     }
					?>
				</div>
			</div>
		</div>
	</div>
</section>