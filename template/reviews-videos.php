<?php
$datas = isset($args['columns']) ? $args['columns'] : ''; 
$btn_data = isset($args['btn']) ? $args['btn']: '';
$bg_class = isset($args['bg_class']) ? $args['bg_class'] : '';
$btn_class = isset($args['btn_class']) ? $args['btn_class'] : '';
$txt_class = isset($args['txt_class']) ? $args['txt_class'] : '';
?>
<section class="reviewsVideos <?php echo $bg_class; ?> l_py s_py">
	<div class="container custom-container <?php echo $txt_class; ?>">
		<div class="row justify-content-between">
             <?php
				foreach($datas as $data){
			 ?>
			  <div class="col-md-4 text-center mb-3">
				<div class="contbox2">
					<div class="videoWrapper">
						<iframe  class="videoIframe js-videoIframe" src="<?php echo $data['video'];?>" allowfullscreen  data-src="<?php echo $data['video'];?>?autoplay=1&amp; modestbranding=1&amp;rel=0&amp;hl=sv"></iframe>						
						<button class="videoPoster js-videoPoster" style="background:url(<?php echo $data['video_thumd'];?>)center no-repeat; background-size:100%;"></button>
					</div>
				</div>
				<h4 class="<?php echo $txt_class; ?>"><?php echo $data['name']; ?></h4>
				<span class="<?php echo $txt_class; ?>"><?php echo $data['position']; ?></span>
			  </div>
				<?php
				   }
				?>
			<div class="col-lg-12 text-center my-4">
				<a href="<?php echo $btn_data['link']; ?>"class="<?php echo $btn_class; ?>"><?php echo $btn_data['btn_txt']; ?></a>
			</div>
		</div>
	</div>
</section>