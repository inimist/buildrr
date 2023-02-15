<?php
$heading = isset($args['heading']) ? $args['heading'] : '';
$intro = isset($args['intro']) ? $args['intro'] : '';
$bookings = isset($args['booking'])? $args['booking']: [] ;
$bg_class = isset($args['bg_class'])? $args['bg_class'] : '' ;
?>
<section class="booking-sec <?php echo $bg_class; ?> l_py s_py">
	<div class="container custom-container">
		<div class="row">
			<div class="col-sm-12 col-lg-7">
				<div class="text_area">
					<h2 class="my-4"><?php echo $heading; ?></h2>
					<p class="mt-3"><?php echo $intro; ?></p>
				</div>
			</div>
			<div class="col-sm-12 col-lg-5">
				<div class="number-box">
					<ul>
					  <?php 
                      foreach($bookings as $booked){
					  ?>
						<li><span><?php echo $booked['value']; ?></span><?php echo $booked['title']; ?></li>
					  <?php
                       }
					  ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>