<?php include('../header.php')?>
<section class="careerBanner l_py s_py">
	<div class="container position-relative">
		<div class="row">
			<div class="col-lg-12">
				<div class="bannertext">
					<h1>Build Your Career With Us</h1>
					<p>Buildrr is regularly recognized as a world leader in innovation, engineering, and business transformation, and that wouldn't be possible without our employees. That's why ensuring the professional development of our employees is a top priority.</p>
					<ul>
						<li>Award-Winning Team</li>
						<li>Exposure To A Global Clientele</li>
						<li>Friendly Work Environment</li>
						<li>450+ Full-Time Staff</li>
						<li>16+ Yrs in Business</li>
						<li>2500+ Clients</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<!--- section awardsRow start --->
<?php
$slides =['icon1', 'icon2', 'icon3','icon4', 'icon5', 'icon6'];

$images = ['icon1', 'icon2', 'icon3', 'icon4', 'icon5', 'icon6', 'icon7', 'icon8', 'icon9', 'icon10', 'icon11', 'icon12', 'icon13', 'icon14', 'icon15', 'icon16', 'icon17', 'icon18', 'icon19'];

$awards = [
          'heading' => 'Partners, Awards, Accolades, Recognition Gained By <span>Buildrr</span>',
		  'images' => $images,
		  'slides' => $slides,
		  'bg_class' => 'bg-green'
];
echo get_template_html('award-row-new', $awards);
?>

<section class="why-new-row bg-white l_py s_py">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 why-img">
				<img loading="lazy" src="<?=SITE_URL;?>/images/why-img.webp" alt="Buildrr Craeer" width="1480" height="575">
			</div>
			<div class="col-lg-12 secHeading text-center">
				<h1>Why Buildrr?</h1>
				<p class="mt-5">Buildrr is a great place to work. We believe in a self-driven culture of learning. Talent, hard work, and results are recognized.
				Collaboration and learning happen daily. Career development is of utmost importance to us. We also understand the importance of a healthy work-life balance, and we support our employees in their personal pursuits. We do provide superb facilities with innovative office buildings.</p>
				<p>Our motto is "We mean IT". This means we aren't just satisfied with meeting our customer's requirements; we believe in having a great experience for them. We don't develop good applications; we believe in developing great ones. </p>
			</div>
			<div class="col-lg-12 why-list-new">
				<div class="why-box">
					<i class="icon1"></i>
					<h3>Health &amp; Wellness</h3>
					<p>Group health insurance and health camps for staff and families</p>
				</div>
				<div class="why-box">
					<i class="icon2"></i>
					<h3>Collaborative Learning Approach</h3>
					<p>Regular training for soft skill development, certifications, jobs, and more.</p>
				</div>
				<div class="why-box">
					<i class="icon3"></i>
					<h3>Work-Life Balance</h3>
					<p>5 days in a week working with Work From Home roasters.</p>
				</div>
				<div class="why-box">
					<i class="icon4"></i>
					<h3>Leading Technology Projects</h3>
					<p>Opportunity to learn and work on the latest technologies.</p>
				</div>
				<div class="why-box">
					<i class="icon5"></i>
					<h3>Fun &amp; Engagement</h3>
					<p>Team outings, fun at work, birthday bashes, and more.</p>
				</div>
				<div class="why-box">
					<i class="icon6"></i>
					<h3>Rewards &amp; Benefits</h3>
					<p>Quarterly award programs recognizing the in-house talents.</p>
				</div>
				<div class="why-box">
					<i class="icon7"></i>
					<h3>Modern Amenities</h3>
					<p>Cafeteria, gyms, play stations, refreshments, and more.</p>
				</div>
				<div class="why-box">
					<i class="icon8"></i>
					<h3>Management Reachout</h3>
					<p>Regular skip-level meetings, Express-O with CEO, and more.</p>
				</div>
				<div class="why-box">
					<i class="icon9"></i>
					<h3>Corporate Social Responsibility</h3>
					<p>CSR initiatives aiming to address societal goals.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="ourTeamRow bg-green l_py s_py">
   	<div class="container">
		<div class="row">
			<div class="col-md-12 secHeading text-center mb-5">
				<h1>Our Team</span></h1>
			</div>
				<div id="carouselOurTeam" class="carousel slide" data-bs-ride="carousel">
				  <div class="carousel-inner">
					<div class="carousel-item active">
					  <img class="d-block w-100" src="<?=SITE_URL;?>/images/Nteam7.webp" alt="Our Team">
					</div>
					<div class="carousel-item">
					  <img class="d-block w-100" src="<?=SITE_URL;?>/images/teamImg.webp" alt="Our Team">
					</div>
					<div class="carousel-item">
					  <img class="d-block w-100" src="<?=SITE_URL;?>/images/Nteam1.webp" alt="Our Team">
					</div>
					<div class="carousel-item">
					  <img class="d-block w-100" src="<?=SITE_URL;?>/images/Nteam3.webp" alt="Our Team">
					</div>
					<div class="carousel-item">
					  <img class="d-block w-100" src="<?=SITE_URL;?>/images/Nteam4.webp" alt="Our Team">
					</div>
					<div class="carousel-item">
					  <img class="d-block w-100" src="<?=SITE_URL;?>/images/Nteam5.webp" alt="Our Team">
					</div>
				  </div>
				  <button  class="carousel-control-prev" data-bs-target="#carouselOurTeam" type="button" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				  </button >
				  <button  class="carousel-control-next" data-bs-target="#carouselOurTeam" type="button" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				  </button >
				</div>
		 </div>
	 </div>
</section>
<?php include('../footer.php')?>