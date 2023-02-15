<?php 
$heading = isset($args['heading']) ? $args['heading'] : '' ;
$intro = isset($args['intro']) ? $args['intro'] : '' ;
$bg_class = isset($args['bg_class']) ? $args['bg_class'] : '';
$txt_class = isset($args['txt_class']) ? $args['txt_class'] : '';

?>
<section class="industryhome <?php echo $bg_class; ?> l_py s_py">
	<div class="container custom-container <?php echo $txt_class; ?>">
		<div class="row">
			<div class="col-lg-12 headingRow text-center ">
				<h1><?php echo $heading; ?></h1>
				<p class="mt-5"><?php echo $intro; ?></p>
			</div>
		</div>
<!------------- start-------------->
<div class="row">
	<div class="col-md-4 verticalrow">
		<div class="d-flex align-items-start">
		  <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
			<button class="nav-link active" id="v-pills-Healthcare-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Healthcare" type="button" role="tab" aria-controls="v-pills-Healthcare" aria-selected="true"><i class="icon1 clr">Healthcare</i></button>
			<button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="icon2 clr">Travel & Tourism</i></button>
			<button class="nav-link" id="v-pills-Travel-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="icon3 clr">Banking & Finance</i></button>
			<button class="nav-link" id="v-pills-Banking-tab" data-bs-toggle="pill" data-bs-target="#v-pills-logistic" type="button" role="tab" aria-controls="v-pills-logistic" aria-selected="false"><i class="icon4 clr">Logistics & Transport</i></button>
			<button class="nav-link" id="v-pills-Logistics-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Retail" type="button" role="tab" aria-controls="v-pills-Retail" aria-selected="false"><i class="icon5 clr">Retail & Ecommerce</i></button>
			<button class="nav-link" id="v-pills-Retail-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Media" type="button" role="tab" aria-controls="v-pills-Media" aria-selected="false"><i class="icon6 clr">Media & Entertainment</i></button>
			<button class="nav-link" id="v-pills-Media-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Education" type="button" role="tab" aria-controls="v-pills-Education" aria-selected="false"><i class="icon7 clr">Education & E-Learning</i></button>
			<button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ISVs" type="button" role="tab" aria-controls="v-pills-ISVs" aria-selected="false"><i class="icon8 clr">ISVs & product Firms</i></button>
		  </div>
		</div>
		</div>
		<div class="col-md-8">
		  <div class="tab-content" id="v-pills-tabContent">
			<div class="tab-pane fade show active" id="v-pills-Healthcare" role="tabpanel" aria-labelledby="v-pills-Healthcare-tab">
				<img src="<?=SITE_URL;?>/images/healthcare.webp" class="img-fluid mt-3";>
				<h4 class="py-4">Healthcare</h4>
				<p>We facilitate healthcare app development teams to global clients who build cost-effective, compliance fit & scalable applications and help them grow their businesses exponentially. As a top software outsourcing company, we ensure.. <a href="#" class="viewmore"> VIEW DETAILS</a></p>
			</div>
			<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
				<img src="<?=SITE_URL;?>/images/travel-img.webp" class="img-fluid";>
				<h4 class="py-4">Travel & Tourism</h4>
				<p>Our travel application development team understands the terms of the industry and helps you address the growing demand of customers. As a leading IT outsourcing company in India we excel in all the latest technologies..<a href="#" class="viewmore"> VIEW DETAILS</a></p>
			</div>
			<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
				<img src="<?=SITE_URL;?>/images/banking-img.webp" class="img-fluid";>
				<h4 class="py-4">Banking & Finance</h4>
				<p>We build software solutions for financial businesses aspiring for increased operational efficiency, agility and constant growth. Outsource software development services from us and build scalable, secure and robust finance..<a href="#" class="viewmore"> VIEW DETAILS</a></p>
			</div>
			<div class="tab-pane fade" id="v-pills-logistic" role="tabpanel" aria-labelledby="v-pills-messages-tab">
				<img src="<?=SITE_URL;?>/images/logistics-and-transportation.webp" class="img-fluid";>
				<h4 class="py-4">Logistics & Transport</h4>
				<p>Leverage our deep domain expertise to develop digital solutions that simplify the complex and challenging business problems and help you grow your business. As a leading software outsourcing company in India, we have development teams..<a href="#" class="viewmore"> VIEW DETAILS</a></p>
			</div>
			<div class="tab-pane fade" id="v-pills-Retail" role="tabpanel" aria-labelledby="v-pills-messages-tab">
				<img src="<?=SITE_URL;?>/images/retail-ecommarce-img.webp" class="img-fluid";>
				<h4 class="py-4">Retail & Ecommerce</h4>
				<p>We have proficiency in delivering techno-driven solutions for any bespoke needs of the digital retail or e-Commerce industry. As a leading software projects outsourcing company from the past 16 years, we have experience of delivering various.. <a href="#" class="viewmore"> VIEW DETAILS</a></p>
			</div>
			<div class="tab-pane fade" id="v-pills-Media" role="tabpanel" aria-labelledby="v-pills-messages-tab">
				<img src="<?=SITE_URL;?>/images/media-img.webp" class="img-fluid";>
				<h4 class="py-4">Media & Entertainment</h4>
				<p>We offer media & entertainment app development services and have an in-depth understanding of the industry. In the past 16 years, we have delivered hundreds of software outsourcing projects to media clients globally and..<a href="#" class="viewmore"> VIEW DETAILS</a></p>
			</div>
			<div class="tab-pane fade" id="v-pills-Education" role="tabpanel" aria-labelledby="v-pills-messages-tab">
				<img src="<?=SITE_URL;?>/images/education-elearning-img.webp" class="img-fluid";>
				<h4 class="py-4">Education & E-Learning</h4>
				<p>Being one of the best IT outsourcing company in India, we provide both education institutes and education industry professionals with the best in class education and eLearning software development services that not only help them to grow..<a href="#" class="viewmore"> VIEW DETAILS</a></p>
			</div>
			<div class="tab-pane fade" id="v-pills-ISVs" role="tabpanel" aria-labelledby="v-pills-messages-tab">
				<img src="<?=SITE_URL;?>/images/ISVs-Products.webp" class="img-fluid";>
				<h4 class="py-4">ISVs & Product Firms</h4>
				<p>We deliver high-performance and up to 60% cost-effective IT software development solutions for independent software vendors and software product firms. Outsource software development services from us and get secure, scalable, and.. <a href="#" class="viewmore"> VIEW DETAILS</a></p>
			</div>
			<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
		  </div>
		</div>
		</div>
<!---------- end ----------->
	</div>
</section>