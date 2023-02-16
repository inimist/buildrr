<?php
$bg_class = isset($args['bg_class']) ? $args['bg_class'] : '';
$review_data = isset($args['review_data']) ? $args['review_data']: [] ;
?>
<section class="review-row <?php echo $bg_class; ?> l_py s_py">
   <div class="container custom-container">
	<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
		  <div class="carousel-inner">
			<?php
              $i= 1;
			  foreach($review_data as $data){
			?>
			<div class="carousel-item <?php echo ($i==1) ? 'active' : '';?>">
				 <div class="testimonial">
					<div class="testpic">
			           <img src="<?php echo $data['profile_pic']; ?>" class="d-block w-100" alt="...">
					</div>
					<div class="textbox">
						<h5 class="my-3"><?php echo $data['name']; ?></h5>
						<small><?php echo $data['company']; ?></small>
						<p><?php echo $data['intro']; ?></p>
					</div>
				</div>
			</div>
			<?php $i++; }?>
		  </div>
		  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		  </button>
		  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		  </button>
	</div>
  </div>
</section>