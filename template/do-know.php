<?php
$bg_class = isset($args['bg_class']) ? $args['bg_class'] : '';
$txt_class = isset($args['txt_class']) ? $args['txt_class'] : '';
$bottomdata = isset($args['bottom_data']) ? $args['bottom_data'] : '';
$b_heading = isset($bottomdata['b_heading']) ? $bottomdata['b_heading'] : '';
$b_class = isset($bottomdata['class']) ? $bottomdata['class'] : '';
$b_intro = isset($bottomdata['b_intro']) ? $bottomdata['b_intro'] : '';
$b_link = isset($bottomdata['link']) ? $bottomdata['link'] : '';
$btn_txt = isset($bottomdata['btn_text']) ? $bottomdata['btn_text']: '';
$btn_class = isset($bottomdata['btn_class']) ? $bottomdata['btn_class'] : '';
?>
<section class="do-know pbiKey <?php echo $bg_class; ?>">
	<div class="container custom-container <?php echo $txt_class; ?>">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h1 class="d-flex align-items-center justify-content-center"> <i class="<?php echo $bottomdata['class']; ?>"></i><?php echo $bottomdata['b_heading']; ?></h1>
				<p class="mb-5"><?php echo $bottomdata['b_intro']; ?></p>
				<a href="<?php echo $bottomdata['link']; ?>" class="<?php echo $btn_class; ?>"><?php echo $bottomdata['btn_text']; ?></a>
			</div>
		</div>
	</div>
</section>