<?php include('../header.php') ?>
<!---------- Banner section start  ----------->

<!---- section start solution-banner ----->
<?php
$solution_banner = [
                  'heading' => 'LMS Software Solution',
				  'intro' => 'Now manage, monitor, & deliver your eLearning programs effortlessly and step-up for a next-gen learning experience.',
				  'btn_txt' => 'Request Free Consultation',
				  'btn_link' => '#solution-form',
				  'bottom_btn' => true,
];
echo get_template_html('solution-banner', $solution_banner); 
?>
<!----- section end solution-banner ------>

<!---- section start image-row ----->
<?php 
$img = [
       'image' => SITE_URL.'/images/LMS-graphimg.webp'
];
echo get_template_html('image-row',$img); 

?>
<!----- section end image-row ------>

<!---- section start booking-sec ----->
<?php 
$booking = [
           [
             'value' => '100+',
			 'title' => 'Enterprise Clients'
		   ],
		   [
             'value' => '11500+',
			 'title' => 'Partner Businesses'
		   ],
		   [
             'value' => '40+',
			 'title' => 'Countries Served'
		   ],
		   [
             'value' => '100000+',
			 'title' => 'Training sessions'     
		   ],
];
$booking_sec = [
               'heading' => 'Most Preferred LMS Software',
			   'intro' => 'Our LMS solution adapts to your needs, no matter how niche, how big or small your business is.',
			   'booking' => $booking,
			   'bg_class' => 'bg-green'
];
echo get_template_html('booking-sec', $booking_sec); 
?>
<!----- section end booking-sec ------>

<!---- section start new-services-row ----->
<?php 
$data_boxes = [
              [
               'title' => 'Create Online Courses & Manage Content',
			   'desc' => "Our LMS provides accessible content for students. With our best-in-class LMS solution, you can use integrated content creation tools that support multiple formats. The tools you need are ready immediately.",
			   'image' => SITE_URL.'/images/LMS-services-img1.webp',
			   'lists' => ['Easy to integrate online tutorials', 'Advanced content management tools', 'Readily available course formats'],
		       'order_class' => ['order-xsm-1', 'order-xsm-1']
			  ],
			  [
               'title' => 'Video Evaluations',
			   'desc' => 'Allow users can record and upload videos of themselves delivering communications such as elevator launches or product overviews. Videos are evaluated through the AI ​​functionality in keywords & the expression rate, as well as by trainers or managers.',
			   'image' => SITE_URL.'/images/LMS-services-img2.webp',
			   'lists' => ['Easy uploading methods', 'Cloud storage integration', 'AI enabled verification'],
		       'order_class' => ['order-xsm-3', 'order-xsm-2']
			  ],
			  [
               'title' => 'Monitoring & Reporting',
			   'desc' => "With our top Custom LMS development solution, you can chart your users' progress and activity. It enables you to review performance and learn about the impact of training with dashboards and reports, or create custom reports delivered via email.",
			   'image' => SITE_URL.'/images/LMS-services-img3.webp',
			   'lists' => ['Admin panel dashboard', 'Automated report delivery', 'AI-enabled performance reviews'],
		       'order_class' => ['order-xsm-4', 'order-xsm-5']
			  ],
];
$bottom_data = [
               [
                'class' => 'icon7',
				'title' => 'Instructor-led Training',
				'intro' => "Schedule virtual or classroom training with the intuitive ILT module. Built to be simple and used by anyone, our LMS solutions provides user feedback, course evaluation, and easy access to user's progress."

			   ],
			                  [
                'class' => 'icon8',
				'title' => 'Learning Notifications',
				'intro' => 'Get real-time activity notifications from your teams and students. Increase course completion rates through unique communications and notifications. An LMS keeps you up to date with your students.'
			   ],
			                  [
                'class' => 'icon9',
				'title' => 'Task Automation',
				'intro' => "The best LMS should give administrators and instructors the ability to automatically add or complete tasks, giving them more time to focus on teaching. Our top Custom LMS development can automate tasks such as group enrollment and task assignments."
			   ],
];
$new_services = [
               'heading' => 'Simple, Smart, Powerful.',
			   'intro' => 'Experience the ease and agility of our powerful LMS solution. The top learning management system comes with various in-build functionalities and engineered to support the most demanding and complex learning ecosystems-',
			   'data_boxes' => $data_boxes,
			   'bottom_data' => $bottom_data,
			   'bottom_area' => true,
			   'bg_class' => 'bg-white'
];
echo get_template_html('new-services-row', $new_services); 
?>
<!----- section end new-services-row ------>

<!------- section start feature-solution ------->
<section class="whitesec ims bg-green l_py s_py">
	<div class="container custom-container">
		<div class="row">
			<div class="col-lg-12 headingRow text-center mb-5">
				<h1>Custom Feature Upgrades</h1>
				<p class="mt-5">We offer add-on features to upgrade to your LMS Software and customize the system as per business requirements.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-6 col-lg-4">
					<div class="features-box">
						<i class="icon1"></i>
						<div class="text">
						<h3>Manage Your Courses</h3>
						<p>Design your course curriculum with varied categories as you like.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4">
					<div class="features-box">
						<i class="icon2"></i>
						<div class="text">
						<h3>Discussion Forums</h3>
						<p>Allow discussion forums to interact between students.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4">
				<div class="features-box">
					<i class="icon3"></i>
					<div class="text">
						<h3>Simulated Online Test</h3>
						<p>Take personalized tests, evaluate and generate a ranking list for your students.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4">
				<div class="features-box">
					<i class="icon4"></i>
					<div class="text">
						<h3>Virtual Classroom</h3>
						<p>Connect with students from all over the world and share live resources</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4">
				<div class="features-box">
					<i class="icon5"></i>
					<div class="text">
						<h3>Certification</h3>
						<p>Select templates and set preferred rules to enable certificates as you like</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4">
				<div class="features-box">
					<i class="icon6"></i>
					<div class="text">
						<h3>Media Content Support</h3>
						<p>Upload as many text, audio, image, animation, & video files or import from cloud storage</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4">
				<div class="features-box">
					<i class="icon7"></i>
					<div class="text">
						<h3>Reports & Analysis</h3>
						<p>Monitor your student's performance and the growth of your business</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4">
				<div class="features-box">
					<i class="icon8"></i>
					<div class="text">
						<h3>CMS</h3>
						<p>Manage courses, classes, exams & classes with our CMS</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4">
					<div class="features-box">
					<i class="icon9"></i>
					<div class="text">
						<h3>Payment Gateways</h3>
						<p>Make payments online and offline with total security</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!----- section end feature-solution ----->
<!----- section start solution-expertise ----->
<section class="solution-expertise l_py s_py bg-white">
	<div class="container custom-container">
		<div class="row">
			<div class="col-lg-12 headingRow text-center mb-lg-5 mb-md-4 mb-sm-3">
				<h1>Our Custom LMS Solution Expertise</h1>
				<p class="mt-5">Our expertise in custom LMS solutions over the years have been catering to industries from different domains.</p>
			</div>
			<div class="col-lg-12 expertise-img m_top_bottom ">
                  <img src="<?=SITE_URL;?>/images/custom-LMS-img.webp" alt="ecommerce solutions provider" width="100%"> 
			</div>
			<div class="col-sm-12 col-md-4 col-lg-4 small_py">
				<span class="number">1</span>
				<h3>Education Sector</h3>
				<p>Our eLearning experts design transformative eLearning solutions that enrich the curriculum and make it available to a greater number of students everywhere.</p>
			</div>
			<div class="col-sm-12 col-md-4 col-lg-4 small_py">
				<span class="number2">2</span>
				<h3>Corporate Sector</h3>
				<p>Our Custom LMS development solution caters enterprise-grade training solutions, coaching platforms, and certification solutions to help employers streamline training and onboarding.</p>
			</div>
			<div class="col-sm-12 col-md-4 col-lg-4 small_py">
				<span class="number">3</span>
				<h3>Non-Profit Sector</h3>
				<p>Our customised eLearning solutions help you enable consistent employee training, boost volunteer engagement, and drive down training costs.</p>
			</div>
		</div>
	</div>
</section>
<!----- section end solution-expertise ----->
<!---- section start keep-sec ----->
<?php
$keep_sec = [
            'heading' => 'Integrate Your LMS With',
			'intro' => '',
			'image' => SITE_URL.'/images/Integrate-Your-LMS-With.webp',
			'bg_class' => 'bg-green'
];
echo get_template_html('keep-sec', $keep_sec); 
?>
<!----- section end keep-sec ------>
<!---- section start solution-faqs ----->
<?php
$faqs_items = [
              [
               'title' => 'What is an LMS?',
			   'desc' => '<p>A learning management system (LMS) is a software application for the administration, documentation, monitoring, reporting, and delivery of educational courses, training programs, or learning and development programs.</p>'
			  ],
			  [
               'title' => 'What are the examples of LMS?',
			   'desc' => "<p>Here are the top popular LMS examples-</br>
			   1) Moodle</br>
			   2) Chamilo</br>
			   3) Open edX</br>
			   4) Totara Learn</br>
			   5) Canvas</p>"
			  ],
			  [
               'title' => 'What are the benefits of using an LMS?',
			   'desc' => "<p>The main benefits of learning management systems are-</br>
			   1) Organize eLearning content in one location.</br>
			   2) It provides unlimited access to eLearning materials.</br>
			   3) Easily track user progress and performance.</br>
			   4) Reduces learning and development costs.</br>
			   5) Reduces learning and development time</p>"
			  ],
			  [
               'title' => 'What are the features of LMS?',
			   'desc' => "<p>Some common features found in most learning management systems include:</br>
			   1) Manage users, courses, roles & generate reports.</br>
			   2) Make a course calendar.</br>
			   3) Messages and notifications.</br>
			   4) Assessments that can handle pre /post tests.</br>
			   5) Certification and display of employee scores and transcripts.</p>"
			  ],
			  [
               'title' => 'Why should I have a LMS software for my business?',
			   'desc' => "<p>The Learning Management System offers a centralized platform for administrators and educators to organize and manage educational materials and track the progress of students. These are also used for designing courses and content, and facilitating the online learning classes.</p>"
			  ],
			  [
               'title' => 'Frankly, I am not aware of LMS development technologies! Can you help in choosing the right one?',
			   'desc' => "<p>Of course, our high expertise and experienced consultants will help you to find the right technology for your project in zero charges. But after that, you can place a request for a pricing quote and we’ll connect with you in a few minutes."
			  ],
			  [
               'title' => 'I am looking for an LMS development company in India. How can you help in?',
			   'desc' => "<p>Great!, you have come to the right place. Buildrr is a leading LMS development company that offers highly flexible, robust, scalable, and high-performing applications at affordable prices. The company has 16+ years of experience in delivering unique software development services and developed 4200+ projects and served 2500+ clients in more than 40 countries, globally.</p>"
			  ],
			  [
               'title' => 'How much time does it take to create an LMS Software?',
			   'desc' => "<p>Honestly, the total time for developing an LMS software is based on factors, such as the number of integrated features, hiring models, the complexity of the project, allocated UI/UX designers, developers, and project managers.</p>"
			  ],
			  [
               'title' => 'Will you sign a Non-Disclosure Agreement for my LMS project?',
			   'desc' => "<p>Yes, definitely. We work dedicatedly to fulfil all the requirements raised by our clients. We believe in offering qualitative results and if that is required to be in confidential form, we do sign a NDA</p>"
			  ],
			  [
               'title' => 'I have a question that is not listed here!',
			   'desc' => "<p>If you have any questions which we forgot to mention here then please feel free to contact us.</p>"
			  ],
];
$solution_faqs = [
                 'heading' => 'FAQs',
				 'faqs_items' => $faqs_items,
				 'bg_class' => 'bg-white'
];
echo get_template_html('solution-faqs', $solution_faqs); 
?>
<!----- section end solution-faqs ------>

<!---- section start review-row ----->
<?php 

$review_data = [
              [
               'profile_pic' => SITE_URL.'/images/daniel-goff-web-design.jpg',
			   'intro' => 'Our business is up 20% since coming on board with you!',
			   'name' => 'Daniel Goff',
			   'company' => 'aGoffLimo.com'
			  ],
			   [
               'profile_pic' => SITE_URL.'/images/web-design-testimonial-maggie-hayward.jpg',
			   'intro' => "Franchisees love the new system. They're really excited about how easy it is!",
			   'name' => 'Maggie Hayward',
			   'company' => 'Mathnasium.com'
			  ],
			  [
               'profile_pic' => SITE_URL.'/images/mark-cave-app-development.jpg',
			   'intro' => "Damn. You are good. I mean that! Way happy with this work and always willing to be a reference.",
			   'name' => 'Mark Cave',
			   'company' => 'Country-Dogs.net'
			  ],
];
$review_testimonials = [
                'bg_class' => 'bg-green',
				'review_data' => $review_data,
];
echo get_template_html('review-row', $review_testimonials); 
?>


<!---- section start solution-form ----->
<?php echo get_template_html('solution-form'); ?>
<!----- section end solution-form ------>

<!---- section start home-footer ----->
<?php echo get_template_html('home-footer'); ?>
<!----- section end home-footer ------>

<?php include('../footer.php')?>