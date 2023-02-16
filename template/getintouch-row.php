<section class="getintouchRow container border-top bg-white">
	<div class="row align-items-center">
		<div class="reviewCol col-md-12 col-lg-6 px-2 text-center">
			<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-inner">
				      <?php
				         $i= 1;
						 foreach($args as $data){
				       ?>
					<div class="carousel-item <?php echo ($i==1) ? 'active' : '';?>">
						<div class="review-1 px-5">
							<img class="dpsec" src="<?php echo $data['image']; ?>"></img>
							<h4><?php echo $data['name']; ?></h4>
							<h5 class="pb-4"><?php echo $data['company']; ?></h5>
							  <p><?php echo $data['intro']; ?></p>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
						</div>   
					</div>
					<?php $i++; }?>
					<button class="carousel-control-prev text-dark px-4" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
						<i class="fa fa-angle-left"></i>
						<span class="visually-hidden">Previous</span>
					 </button>
					<button class="carousel-control-next text-dark px-4" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
						<i class="fa fa-angle-right"></i>
						<span class="visually-hidden">Next</span>
					</button>
				</div>
			 </div>
		 </div>
<!--------   ------->
<?php include('get-in-touch-form.php')?>
<!--------   ------->
	</div>
</section>