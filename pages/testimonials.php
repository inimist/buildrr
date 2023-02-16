<?php include('../header.php') ?>
<!-------------- start section get in touch------------->

<!---------- Section Start Testbanner---------->
<section class="testbanner py-5">
	<div class="container custom-container">
		<div class="row justify-content-center">
			<div class="col-lg-12 align-items-center">
				<div class="bannertext">
					 <h1>Testimonials</h1>
					<p class="mt-3">We have had an amazing journey since our inception in 2004 and have received lots of client testimonials, feedback, and suggestions. Here's a few of them.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!---------- Section End Testbanner---------->
<!----  Rreviews Videos Section Start   ---->
<?php
/*$columns = [
           [
            'name' => 'James Kelly,',
			'position' => 'Co-founder, Miracle Choice',
			'video' => 'https://www.youtube.com/embed/d78gD-wwVTg',
			'video_thumd'=> SITE_URL.'/images/video-4.jpg'
		   ],
		   [
            'name' => 'Kris Bruynson,',
			'position' => 'Director, Storloft',
			'video' => 'https://www.youtube.com/embed/W7Bxt2Up0NQ',
			'video_thumd'=> SITE_URL.'/images/video-2.jpg'
		   ],
		   [
            'name' => 'Judith Mueller,',
			'position' => 'Executive Director, Mueller Health Foundation',
			'video' => 'https://www.youtube.com/embed/e7nbilPZzBE',
			'video_thumd'=> SITE_URL.'/images/video-3.png'
		   ],
		   [
            'name' => 'Mohammed Mirza,',
			'position' => 'Director, LOCALMASTERCHEFS LTD',
			'video' => 'https://www.youtube.com/embed/aErqOtvMClY',
			'video_thumd'=> SITE_URL.'/images/video-5.jpg'
		   ],
		   [
            'name' => 'Mr.Savarni,',
			'position' => 'Founder- sbspco.com',
			'video' => 'https://www.youtube.com/embed/QCIMuRQkfKU',
			'video_thumd'=> SITE_URL.'/images/video-6.jpg'
		   ],
		   [
            'name' => 'Jame Thompson,',
			'position' => 'edinstitute.com.au',
			'video' => 'https://www.youtube.com/embed/oVbfGyMPq50',
			'video_thumd'=> SITE_URL.'/images/video-7.jpg'
		   ],
];
$reviewsVideos = [
	'columns'=> $columns,
	'bg_class'=> 'bg-green',
	'btn_class' => 'btn-more',
	'btn'=>	[
		 'btn_txt' => 'Know More',
		 'link' =>  '#',
		 'btn_class' => 'contact'
	],
];
echo get_template_html('reviews-videos', $reviewsVideos);*/
?>
<!----  Rreviews Videos End   ---->
<!------- Section end testimonialsSec --------->
<!------- Section start testimonials slider------------->
<section class="testimonials-slider bg-white s_py">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-12">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
							<div class="carousel-item">
								<div class="testimonial-box">
									<div class="dpimg-box">			
										<img src="<?=SITE_URL;?>/images/daniel-goff-web-design.jpg" loading="lazy">
									</div>
									<div class="textbox">
										<p>Our business is up 20% since coming on board with you!</p>
										<h3>Daniel Goff</h3>
										<small>aGoffLimo.com</small>
										<ul>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="carousel-item active">
								<div class="testimonial-box">
									<div class="dpimg-box">
										<img src="<?=SITE_URL;?>/images/web-design-testimonial-maggie-hayward.jpg" loading="lazy">
									</div>
									<div class="textbox">
										<p>Franchisees love the new system. They're really excited about how easy it is!</p>
										<h3>Maggie Hayward</h3>
										<small>Mathnasium.com</small>
										<ul>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="testimonial-box">
									<div class="dpimg-box">
										<img src="<?=SITE_URL;?>/images/mark-cave-app-development.jpg" loading="lazy">
									</div>
									<div class="textbox">
										<p>Damn. You are good. I mean that! Way happy with this work and always willing to be a reference.</p>
										<h3>Mark Cave</h3>
										<small>Country-Dogs.net</small>
										<ul>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<div class="testimonial-box">
									<div class="dpimg-box">
										<img src="<?=SITE_URL;?>/images/testimonials-robert-brus.jpg" loading="lazy">
									</div>
									<div class="textbox">
										<p>Stop looking now - this is the only web development company that you will ever need. Their technical skill and professionalism is second to none and they come highly recommended. Their communication and project management has also been absolutely fantastic which really kept the momentum of the project moving forward. It is great to work with such a forward thinking and innovative company and I will continue to utilize their services into the future.</p>
										<h3>Robert Brus</h3>
										<small>Wifi Now Australia </small>
										<ul>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					<a class="carousel-control-prev" data-bs-target="#carouselExampleIndicators" type="button" data-bs-slide="prev">
					<i class="fa fa-arrow-left" aria-hidden="true"></i>
					</a>
					<a class="carousel-control-next" data-bs-target="#carouselExampleIndicators" type="button" data-bs-slide="next">
					<i class="fa fa-arrow-right" aria-hidden="true"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!------- Section end testimonials slider------------->
<!---------- Section start testimonial-list -------->
<section class="testimonial-list bg-green l_py s_py">
	<div class="container custom-container list1">
		<div class="row loadMore ">
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 items">
			<div class="contbox justify-content-center" style="position: relative;">
				<div>
					<p>Franchisees love the new system. They're really excited about how easy it is to edit pages and having the news as individual blogs... amazing! Oh, let's just launch today!</p>
				</div>
				<div class="bottom-div">
					<h3>Maggie Hayward,<br> Mathnasium LLC </h3>
					<ul>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
					</ul>
				</div>
			</div>
		</div>
		<!--<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 items">
			<div class="contbox">
				<p><span class="">Stop looking now - this is the only web development company that you will ever need. Their technical skill and professionalism is second to none and they come highly recommended.</span> <span class="text-show">Their communication and project management has also been absolutely fantastic which really kept the momentum of the project moving forward. It is great to work with such a forward thinking and innovative company and I will continue to utilize their services into the future.</span></p>
				<button class="show-text">See More...</button>
				<h3>Robert Brus, Wifi Now Australia </h3>
				<ul>
					<li><i class="fa fa-star" aria-hidden="true"></i></li>
					<li><i class="fa fa-star" aria-hidden="true"></i></li>
					<li><i class="fa fa-star" aria-hidden="true"></i></li>
					<li><i class="fa fa-star" aria-hidden="true"></i></li>
					<li><i class="fa fa-star" aria-hidden="true"></i></li>
				</ul>
			</div>
		</div> -->
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 items">
			<div class="contbox justify-content-center" style="position: relative;">
				<div>
					<p>I have to say without a doubt buildrr is the best web design and marketing company out there as far website building is concerned. My experience with them was a very positive one. <span class="text-show">From the initial consultation to the constant feedback and communication in regards to the direction of my website, they were always there to lead me in the right direction. Problem with the website? No problem, just submit a ticket to them in regards to the issue and they are right on top of it. Not only is making the customer happy a top priority, but making sure things get done the right way is as well, and when I say the right way it means the best way. If I ever decide to build another website it will be an easy decision on which company to choose. In every way I can imagine as a customer, buildrr came through to make my dream a reality. I can not recommend them high enough.</span><br><span class="show-text mb-3">Read More <i class="fa fa-angle-down"></i></span></p>
				</div>
				<div class="bottom-div">
					<h3>Charles Stark,<br> Hobbs Sports Investments</h3>
					<ul>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 items">
			<div class="contbox justify-content-center" style="position: relative;">
				<div>
					<p>These guys are great to work with! I'm sure we have found the IT people we have been searching for.  I have the highest regards for them for their dedication and desire to impress their clients.   We look forward to working with them in the future.</p>
				</div>
				<div class="bottom-div">
					<h3>Jim Allen,<br> Appliance Zone</h3>
					<ul>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
					</ul>
				</div>
			</div>
		</div>
		<!--<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 items">
			<div class="contbox">
				<p>Exceeded expectations, excellent communication, great ideas out of the box, takes feedback well and comes back with an even better look or solution. They care about and keep their eye on the end goal but don't miss out on the details along the way. Would hire them again and have already hired them again to other projects.</p>
				<h3> Derick Sutton, Mercy Real Estate</h3>
				<ul>
					<li><i class="fa fa-star" aria-hidden="true"></i></li>
					<li><i class="fa fa-star" aria-hidden="true"></i></li>
					<li><i class="fa fa-star" aria-hidden="true"></i></li>
					<li><i class="fa fa-star" aria-hidden="true"></i></li>
					<li><i class="fa fa-star" aria-hidden="true"></i></li>
				</ul>
			</div>
		</div> -->
		<!--<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 items">
			<div class="contbox">
				<p>11/10 what a fantastic job!</p>
				<h3>Robert Brus, Wifi Now Australia </h3>
				<ul>
					<li><i class="fa fa-star" aria-hidden="true"></i></li>
					<li><i class="fa fa-star" aria-hidden="true"></i></li>
					<li><i class="fa fa-star" aria-hidden="true"></i></li>
					<li><i class="fa fa-star" aria-hidden="true"></i></li>
					<li><i class="fa fa-star" aria-hidden="true"></i></li>
				</ul>
			</div>
		</div> -->
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 items">
			<div class="contbox justify-content-center" style="position: relative;">
				<div>
					<p>The Buildrr team has done a tremendous job on the development for a new website. From the design phase to back end development, Buildrr has turned our concepts into a functioning website quickly and professionally with an overall understanding for the project goals. They have been a great resource for our web development needs and we intend to continue to call on them for their services in the future.</p>
				</div>
				<div class="bottom-div">
					<h3>Stephanie P,<br> SAJH</h3>
					<ul>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
					</ul>
				</div>
			</div>
		</div>
		<!--<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 items">
			<div class="contbox">
				<p>Buildrr is 5 stars all the way around. From concept to completion, it was such a please to have them do my work, Buildrr gave me a lot of value for my money and had my best interest at heart. Thanks Again.</p>
				<h3>Adam Ward, Swift Trax </h3>
				<ul>
					<li><i class="fa fa-star" aria-hidden="true"></i></li>
					<li><i class="fa fa-star" aria-hidden="true"></i></li>
					<li><i class="fa fa-star" aria-hidden="true"></i></li>
					<li><i class="fa fa-star" aria-hidden="true"></i></li>
					<li><i class="fa fa-star" aria-hidden="true"></i></li>
				</ul>
			</div>
		</div> -->
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 items">
			<div class="contbox justify-content-center" style="position: relative;">
				<div>
					<p>Buildrr was extremely good in executing our project. We have decided to retain them as long-term partners in our web development efforts.</p>
				</div>
				<div  class="bottom-div">
					<h3> Martin Curiel, RFDF: <br> Rising Farm Workers Development Fund</h3>
					<ul>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 items">
			<div class="contbox justify-content-center" style="position: relative;">
				<div>
					<p>We've noticed a steady increase, and have more internet referrals than we've ever had.</p>
				</div>
				<div  class="bottom-div">
					<h3>Dr. Fadi Edmond Elzayat, DDS,  A Dental Center</h3>
					<ul>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 items"  style="display: none;">
			<div class="contbox justify-content-center" style="position: relative;">
				<div>
					<p>Damn. You are good brother. I mean that! Way happy with this work and always willing to be a reference for you guys.</p>
				</div>
				<div  class="bottom-div">
					<h3>Mark Cave, <br> Country-Dogs.net</h3>
					<ul>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 items" style="display: none;">
			<div class="contbox justify-content-center" style="position: relative;">
				<div>
					<p>Our business is up 20% since coming on board with you!!!!</p>
				</div>
				<div class="bottom-div">
					<h3>Daniel Goff, A Goff Limo Incorporated</h3>
					<ul>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 items" style="display: none;">
			<div class="contbox justify-content-center" style="position: relative;">
				<div>
					<p>Buildrr = IT sense + business sense. If you have the chance to get this team to work with you, jump at the chance. Their rare combination of technical and business skills will get you the results you need within a reasonable budget.</p>
				</div>
				<div  class="bottom-div">
					<h3>Derek Firth,  Joined.com, ManagementJobs.com</h3>
					<ul>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 items" style="display: none;">
			<div class="contbox justify-content-center" style="position: relative;">
				<div>
					<p>It is feedback like that which makes you so much better than the vast majority of your techie competitors. You have a rare ability to think like a good marketing person and implement like a good techie. Keep up the great work! <span class="text-show"> I've worked with them for several years. They are incredibly client focused and that has made it very easy for me to continually increase the amount and complexity of the work that I send. A pleasure to work with.</span><br><span class="show-text mb-3">Read More <i class="fa fa-angle-down"></i></span> </p>
				</div>
				<div  class="bottom-div">
					<h3>Steven Rothberg, College Recruiter Inc.</h3>
					<ul>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 items" style="display: none;">
			<div class="contbox justify-content-center" style="position: relative;">
				<div>
					<p>Took my request, came back with a better solution, provided data to back up his opinion, then implemented it quickly and with great results.</p>
				</div>
				<div  class="bottom-div">
					<h3>Steven Rothberg, College Recruiter Inc.</h3>
					<ul>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 items" style="display: none;">
			<div class="contbox justify-content-center" style="position: relative;">
				<div>
					<p>I searched around until I got lucky to find Buildrr. They designed my website as if he could read my mind. I would recommend them to anyone. Look no further, because you found the right team.</p>
				</div>
				<div  class="bottom-div">
					<h3>Sandy Capeletti, She Said What? LLC</h3>
					<ul>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 items" style="display: none;">
			<div class="contbox justify-content-center" style="position: relative;">
				<div>
					<p>Phenominal work! I love the way they think! So creative, takes the effort out of design on my part. You just give the vision and he comes up with the concept to capture it! Always timely and reliable. <span class="text-show">He invoices in bite-sized chunks throughout the process so you don't get a huge bill at the start or at the end. Even his hosting services are very reasonable and reliable. Would recommend them highly for web design and hosting! Will continue to work with him for many years to come!</span><br><span class="show-text mb-3">Read More <i class="fa fa-angle-down"></i></span> </p>
				</div>
				<div  class="bottom-div">
					<h3>Trish Robichaud,  Changing Paces Inc.</h3>
					<ul>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 items" style="display: none;">
			<div class="contbox justify-content-center" style="position: relative;">
				<div>
					<p>I came in contact through an RFP he replied to. Afterwards I looked at the work and found that it was to my liking. His work came in under budget and since then I have constantly used them for enhancements and possible new ventures. <span class="text-show"> In every instance they has been ethical, professional, cost effective and full of useable information. It is a rare find when someone as trustworthy as them and can provide sound support. I could not provide a higher recommendation.</span><br><span class="show-text mb-3">Read More <i class="fa fa-angle-down"></i></span> </p>
				</div>
				<div  class="bottom-div">
					<h3>Jeremy Burton, Literal Ecommerce</h3>
					<ul>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 items" style="display: none;">
			<div class="contbox justify-content-center" style="position: relative;">
				<div>
					<p>Easy to work with and always provides excellent service, quickly. All I have to do is let him know what we need done and he takes care of it. We are a disaster response organization and our website is one of our primary vehicles for communication. Has always recognized that we need it updated quickly and correctly, and has always come through for us.</p>
				</div>
				<div  class="bottom-div">
					<h3>Seth Gardner, Nechama Jewish Center</h3>
					<ul>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 items" style="display: none;">
			<div class="contbox justify-content-center" style="position: relative;">
				<div>
					<p>Epitomizes the word professional. One of the most knowledgeable, creative, and intelligent people that I have had the pleasure to work with. Attention to detail and quality is amazing. Their services would be a major asset to any business. Very intelligent, highly motivated and enthusiastic person. I highly recommend him.</p>
				</div>
				<div  class="bottom-div">
					<h3>Roger Barnes, New Haven Pizza</h3>
					<ul>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 items" style="display: none;">
			<div class="contbox justify-content-center" style="position: relative;">
				<div>
					<p>This group is by far the best value for your money! For any web and software programing gig, this is the group to source! If youre interested in follow ups, and lasting support for work done, these CATS are it! They also provide a host of services, including grasphic design, hosting and others. Contact them!</p>
				</div>
				<div  class="bottom-div">
					<h3>Fred Aboge</h3>
					<ul>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 items" style="display: none;">
			<div class="contbox justify-content-center" style="position: relative;">
				<div>
					<p>I've worked with Buildrr on several creative projects. Reason being, is that they possess all the creative qualitites that you look for in a designer coupled with the business consciousness of a Project Manager. Their creativity is "always on time" both figuratively and literally.</p>
				</div>
				<div  class="bottom-div">
					<h3>Eric Stempinski</h3>
					<ul>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 items" style="display: none;">
			<div class="contbox justify-content-center" style="position: relative;">
				<div>
					<p>I have used Buildrr for several years now. And I intend to use for many years to come. Two websites, business material design (biz cards, letterhead, etc.) as well as for media design (audio mainly) Amazingly talented. Efficient and time-concious designer, who is very professional. I have referred him to many of my collegues.</p>
				</div>
				<div  class="bottom-div">
					<h3>Jeff Cadwell, Life Solutions</h3>
					<ul>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
<button class="btn-more mt-4" id="Show_testmonial">Show More</button></div>
</section>
<!---------- Section end testimonial-list -------->

<!---------- Section end our-clients -------->
<section class="our-clients bg-white l_py s_py">
	<div class="container custom-container">
		<div class="row">
			<div class="col-md-12 col-lg-12 secHeading">
				<h1>Our Clients</h1>
			</div>
			<div class="col-md-12 col-lg-12 clientlogos">
				<ul class="border-list">
					<li class="icon1"></li>
					<li class="icon2"></li>
					<li class="icon3"></li>
					<li class="icon4"></li>
					<li class="icon5"></li>
					<li class="icon6"></li>
					<li class="icon7"></li>
					<li class="icon8"></li>
					<li class="icon9"></li>
					<li class="icon10"></li>
					<li class="icon11"></li>
					<li class="icon12"></li>
					<li class="icon13"></li>
					<li class="icon14"></li>
					<li class="icon15"></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!---------- Section end our-clients -------->

<!-------------- start section get in touch------------->
<?php
$get_in_touch = [
                [
				'image' => SITE_URL.'/images/daniel-goff-web-design.jpg',
                'name' => 'Daniel Goff',
				'company' => 'aGoffLimo.com',
				'intro' => 'Our business is up 20% since coming on board with you!'
				],
				[
                'image' => SITE_URL.'/images/web-design-testimonial-maggie-hayward.jpg',
                'name' => 'Maggie Hayward',
				'company' => 'Mathnasium.com',
				'intro' => "Franchisees love the new system. They're really excited about how easy it is!"
				],
				[
                'image' => SITE_URL.'/images/mark-cave-app-development.jpg',
                'name' => 'Mark Cave',
				'company' => 'Country-Dogs.net',
				'intro' => 'Damn. You are good. I mean that! Way happy with this work and always willing to be a reference.'
				],
];
echo get_template_html('getintouch-row', $get_in_touch);
?>
<!--------------end section get in touch ------------->
<?php include('../footer.php')?>