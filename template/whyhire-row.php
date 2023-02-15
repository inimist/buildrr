<?php 
$heading = isset($args['heading']) ? $args['heading'] : '';
$intro = isset($args['intro']) ? $args['intro'] : '';
$txt_class = isset($args['txt_class']) ? $args['txt_class'] : '';
$bg_class = isset($args['bg_class']) ? $args['bg_class'] : '';
?>

<section  class="whyhireRow  <?php echo $bg_class; ?> l_py s_py">
	<div class="container custom-container">
		<div class="row ">
			<div class="col-lg-12 headingRow text-center <?php echo $txt_class; ?>">
			<h1><?php echo $heading;?></h1>
			<p class="mt-5"><?php echo $intro;?></p>
			</div>
		</div>
		<div class="row <?php echo $txt_class; ?>">
			<div class="col-md-5 mt-5">
				<img src="<?=SITE_URL;?>/images/tourimg.webp"width="100%" class="img-fluid;">
			</div>
			<div class="col-md-7 mt-5">
			<div class="row savingRow">
				<div class="col-md-4">
				<ul>
					<li class="d-flex align-items-center"><i class="icon1"></i>60% Cost Saving</li>
				</ul>
					</div>
					<div class="col-md-4 ">
					<ul>
					<li class="d-flex align-items-center"><i class="icon2"></i>100% Real Reviews</li>
					</ul>
					</div>
					<div class="col-md-4">
					<ul class="border-0">
					<li class="d-flex align-items-center"><i class="icon3"></i>No Freelancers</li>
					</ul>
				</div>
				</div>
				<div class="whylist row">
					<div class="col-md-4 mt-5">
						<ul>
							<li class="d-flex"><i class="icon1"></i>Highly Creative & Motivated Teams</li>
						</ul>
					</div>
					<div class="col-md-4 mt-5">
						<ul>
							<li class="d-flex"><i class="icon2"></i>We Understand Business Needs</li>
						</ul>
					</div>
					<div class="col-md-4 mt-5">
						<ul>
							<li class="d-flex"><i class="icon3"></i>Quality & Security Adherence</li>
						</ul>
					</div>
					<div class="col-md-4 mt-4">
						<ul>
							<li class="d-flex"><i class="icon4"></i>Your Ideas Are Safe With Us</li>
						</ul>
					</div>
					<div class="col-md-4 mt-4">
						<ul>
							<li class="d-flex"><i class="icon5"></i>First Time Right Process</li>
						</ul>
					</div>
					<div class="col-md-4 mt-4">
						<ul>
							<li class="d-flex"><i class="icon6"></i>Innovation Is Guaranteed</li>
						</ul>
					</div>
					<div class="col-md-4 mt-4">
						<ul>
							<li class="d-flex"><i class="icon7"></i>Result-Driven Approach</li>
						</ul>
					</div>
					<div class="col-md-4 mt-4">
						<ul>
							<li class="d-flex"><i class="icon8"></i>Co-Development Teams</li>
						</ul>
					</div>
					<div class="col-md-4 mt-4">
						<ul>
							<li class="d-flex"><i class="icon9"></i>DevOps Enablement</li>
						</ul>
					</div>
					<div class="col-md-4 mt-4">
						<ul>
							<li class="d-flex"><i class="icon10"></i>In-Depth Domain Knowledge</li>
						</ul>
					</div>
					<div class="col-md-4 mt-4">
						<ul>
							<li class="d-flex"><i class="icon11"></i>Non-Disclosure Agreement</li>
						</ul>
					</div>
					<div class="col-md-4 mt-4">
						<ul>
							<li class="d-flex"><i class="icon12"></i>Integrity & Transparency</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>