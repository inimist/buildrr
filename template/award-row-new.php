<?php
$heading = isset($args['heading']) ? $args['heading'] : ''; 
$images = isset($args['images']) ? $args['images'] : [];
$slides = isset($args['slides']) ? $args['slides'] : [];
$main_class = isset($args['class']) ? $args['class'] : '';
$txt_class = isset($args['txt_class']) ? $args['txt_class']: '';
$bg_class = isset($args['bg_class']) ? $args['bg_class']: '';

?>
<section class="awardsRow <?php echo $bg_class; ?> l_py s_py">
	<div class="container custom-container<?php echo $txt_class; ?>">
		<div class="row ">
			<div class="col-md-12 headingRow text-center mb-5">
				<h1>Partners, Awards, Accolades, Recognition Gained By <span>Buildrr</span></h1>
			</div>
			<div class="col-md-12 awards ">
				<ul>
				<?php
                   foreach($images as $image){
				   ?>
					<li><i class="<?php echo $image?>"></i></li>
					<?php
                    }
				?>
				</ul>
			</div>
			<div class="partners glider-contain mt-3">
				<div id="partners-slider" class="slick slide" data-bs-ride="slick-slide">
				<?php
				   foreach($slides as $slide){
				?>
				<div class="technobox <?php echo $main_class; ?>">
				<i class="<?php echo $slide; ?>"></i>
				</div>
				<?php
				  }
				?>
			</div>
		</div>
	</div>
</section>