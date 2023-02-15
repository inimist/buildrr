<?php include('../header.php') ?>
<!---------- Banner section start  ----------->
<?php
$bannertext = [
             'heading' => "<small>Hire India's Best</small> WordPress Developers <small>Outsource & Save Upto 60% Cost & Time, No Hiring Fee</small>",
			 'intro' => "Hire our pre-vetted and hand-picked Indian WordPress developers who have 6+ years of average experience in building WordPress applications. We have a team of 450+ employees that works on-demand to offer efficient and robust services.</br></br>From WordPress theme development, WooCommerce development, to WordPress plugin development and WordPress website management/maintenance, our WordPress programmers provide all kinds of services.</br></br>Besides, we provide different engagement options to suit varying needs including full-time, hourly or monthly dedicated team setup (1-25 members).",
			 'lists' => ['First Time Right Process', 'Complete Control Over The Team', "Certified Laravel Coders", 'Agile & DevOps Enablement', 'Non-Disclosure Agreement', 'No Contract Lock-Ins'],
			 'bottom_text' => ['<strong>16+</strong> Years Experience', '<span><strong>450+</strong> Full Time Developers</span>', '<span><strong>2000+</strong> Man Years Exp</span>', '<span><strong>2500+</strong> Satisfied Customers</span>'],
			 'list_item' => false,
			 'bootom_area' => true,
			 'bottom_img' => SITE_URL.'/images/home-certificate.webp'			 
];
echo get_template_html('bannersec', $bannertext);
?>
<!---------- Banner section end  ----------->
<!----  Companies Logo Section    ---->
<?php
$c_images = [
    [
         'title' => 'North America',
		 'class' => ['company1','company2','company3','company4','company5'],
    ],
	[
         'title' => 'Asia Pacific Region',
		 'class' => ['company10','company11','company12','company13','company14'],
    ],
	[
         'title' => 'Europe',
		 'class' => ['company16','company17','company18','company19','company20'],
    ],
	[
         'title' => 'Middle East & Africa',
		 'class' => ['company23','company24','company25','company26','company27'],
    ],
	[
         'title' => 'India',
		 'class' => ['company28','company29','company30','company31','company32'],
    ],
];
$compaines = [
        'heading' => "Top Companies Around The World Trust Buildrr For Hiring WordPress Developers",
		'intro' => 'We have helped companies of all sizes and in every industry to set up offshore WordPress development teams. From startups, software companies, digital agencies - you name it! You can get a glimpse at some of our satisfied clients below',
        'c_images' => $c_images,
		'bg_class' => 'bg-green',
];
echo get_template_html('compaines', $compaines);
?>
<!----  Companies Logo End Section    ---->

<!----  Rreviews Videos Section Start   ---->
<?php
$columns = [
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
	'btn'=>	[
		 'btn_txt' => 'Know More',
		 'link' =>  '#',
	],
	'bg_class' => 'bg-white',
	'btn_class' => 'contact',
];
echo get_template_html('reviews-videos', $reviewsVideos);
?>
<!----  Rreviews Videos End   ---->
<!----  why-hire-developers-from-buildrr Section Start   ---->
<?php
$why_hire = [
      [
	   'class' => 'icon1',
	   'title' => '5+ Years Of Average Experience',
	   'des' => 'Hire programmers online who are experienced & skilled with the latest technologies.'
      ],
      [
	   'class' => 'icon2',
	   'title' => 'Integrity &Transparency',
	   'des' => 'Your idea is safe with us as we respect your secrecy. Our teams worktransparently and follow strict NDAs'
      ],
      [
	   'class' => 'icon3',
	   'title' => 'Free NoObligation Quote',
	   'des' => 'Once you share your project idea, weprovide you with a no-cost estimate,usually within 24 working hours.'
      ],
	  [
	   'class' => 'icon4',
	   'title' => 'Hassle-freeProject Management',
	   'des' => 'We keep you relieved of complexproject management issues as ourexperienced PM works on your project.'
      ],
	  [
	   'class' => 'icon5',
	   'title' => 'TransparencyIs Guaranteed',
	   'des' => 'We regularly report your completeproject status details via Skype, emailand call to keep you fully updated.'
      ],
	  [
	   'class' => 'icon6',
	   'title' => 'FlexibleEngagement Models',
	   'des' => 'Hire a programmer online on a monthly,part-time, hourly or fixed cost basis asper requirement.'
      ],
];

$whyrow = [
        'heading' => 'Why Hire WordPress Developers From Buildrr?',
        'intro' => "Businesses hire WordPress developers from Buildrr because they adopt the latest tools and advanced technologies to serve robust yet scalable solutions. Our WordPress experts carefully study every facet of the new technology before practicing it. Our applications comprise sophisticated features catering to complex business needs for diverse industry verticals.",
		'image' => SITE_URL.'/images/tourimg.webp',
		'why_hire' => $why_hire,
        'bg_class' => 'bg-green',
];
echo get_template_html('why-row', $whyrow);
?>
<!----  why-hire-developers-from-buildrr End   ---->
<!----  experience row start ---->
<?php
$project_details = [
          [
           'numbers' => '4,200+',
		   'text' => 'PROJECTS LAUNCHED'
		  ],
		  [
           'numbers' => '16+',
		   'text' => 'YEARS EXPERIENCE'
		  ],
		  [
           'numbers' => '2,500+',
		   'text' => 'SATISFIED CUSTOMERS'
		  ],
		  [
           'numbers' => '97%+',
		   'text' => 'CLIENT RETENTION'
		  ],
];

$experience_sec = [
         'main_title' => 'Ready To Get Started?',
		 'intro' => "Buildrr is leading in the market since 2004 and has 2500+ happy clients in 40+ countries. Being a top-notch WordPress development company, we focus on bringing originality, flexibility, high-quality, and uniqueness in their product. Want to hire WordPress experts?",
         'link_text' => 'Contact us Now',
		 'link' => '#',
		 'project_details' => $project_details,
         'btn_class' => 'contact',
		 'bg_class' => 'bg-white',
];
echo get_template_html('experience-row', $experience_sec);
?>
<!----  experience row End   ---->
<!-------- services section start ------->
<?php
$service_type = [
   [
       'class' => 'icon1',
	   'title' => 'Dedicated WordPress Developers',
       'desc'  => 'We have a team of dedicated WordPress developers, quality analysts, and project managers who work on-demand to offer innovative solutions'
   ],
   [
       'class' => 'icon2',
	   'title' => 'Custom WordPress Development',
	   'desc' => 'Our offshore WordPress programmers are adept at building amazing & interactive websites for small to large scale businesses.'

   ],
   [
       'class' => 'icon3',
	   'title' => 'WordPress Plugin Development',
	   'desc' => 'Hire WordPress programmers who are experienced in building cost effective and scalable plugins that run seamlessly across devices.'

   ],
   [
       'class' => 'icon4',
	   'title' => 'PSD To WordPress',
	   'desc' => 'Our remote WordPress developers convert your PSD designs into responsive and feature-rich WordPress websites.'

   ],
   [
       'class' => 'icon5',
	   'title' => 'WooCommerce Development',
	   'desc' => 'Hire expert WordPress coders online & utilise WooCommerce to bring your eCommerce web development requirements to reality.'

   ],
   [
       'class' => 'icon6',
	   'title' => 'WordPress Migration Services',
	   'desc' => 'Hire top Indian WordPress developer to migrate your existing site to Wordpress.'

   ],
];
$servicerow_sec = [
     'heading' => "Expertise Of Our WordPress Developers",
	 'intro'  => 'We have certified and full-stack WordPress developers on board. We work with a variety of WordPress solutions for high quality output for our clients. Our remote WordPress developers build robust business-centric apps, interactive themes and eCommerce portals to provide you the best ROI.',
	 'main_class' => 'wordpress-services',
	 'service_type' => $service_type,
	 'bg_class' => 'bg-green',
];
echo get_template_html('services-row', $servicerow_sec);
?>
<!----  servicesrow Section end   ---->

<!---- section toolkit start ---->
<section class="tookit-sec bg-white l_py s_py">
	<div class="container custom-container">
		<div class="row">
			<div class="col-lg-12 headingRow text-center mb-5">
		          <h1>Plugin &amp; Theme Development</h1>
		     </div>
		     <ul>
				<li>Divi</li>
				<li>Genesis</li>
				<li>Themify</li>
				<li>Tesla</li>
				<li>WPZoom</li>
				<li>Monster widget</li>
				<li>RTL tester</li>
				<li>WP-CLI</li>
				<li>Generate WP</li>
				<li>Duplicator</li>
				<li>Generate WP</li>
				<li>Duplicator</li>
				<li>Roots.io</li>
				<li>Trellis</li>
				<li>Bedrock</li>
				<li>Sage</li>
				<li>Pantheon.io</li>
				<li>Pictura</li>
				<li>Fontello</li>
				<li>Font Awesome</li>
				<li>Uilang</li>
				<li>Sketch</li>
			</ul>
		</div>
	</div>
</section>
<!---- section toolkit end ---->

<!--- section blockchain-develope start --->
<?php

$columns = [
            [
             'img_class' => 'icon1',
			 'title' => 'Start-ups',
			 'desc' => 'Whether you are in the early stage, expansion stage, or small business, we can help you innovate, validate, build and scale your products.'
			],
            [
             'img_class' => 'icon2',
			 'title' => 'Digital Agencies',
			 'desc' => 'We partner with digital agencies to help CTOs meet their short-term and long-term technology requirements.'
			],
			[
             'img_class' => 'icon3',
			 'title' => 'Product Companies',
			 'desc' => 'As a product development company, we partner with other SaaS companies and product companies to help them manage their product deliveries.'
			],
			[
             'img_class' => 'icon4',
			 'title' => 'Enterprises',
			 'desc' => 'We help companies take advantage of the best of technology, from application development to modernization and maintenance.'
			],
];

$listdata = [
            [
             'class' => 'icon1',
			 'head_title' => 'Healthcare',
			 'des' => 'We facilitate the worldwide healthcare division by providing top-level Android app development teams. Our Android experts form cost-effective, compliance fit & scalable Android applications and help healthcare businesses grow exponentially. As a reliable software company, we ensure to meet clients demands.',
			 'accordion_id' => 'headingOne',
			 'accordion_class' => 'collapseOne'
			],
			[
             'class' => 'icon2',
			 'head_title' => 'Banking & Finance',
			 'des' => 'We provide excellent Android app development solutions for financial businesses aspiring for enhanced operational competence, agility, and constant growth. Outsource Android app development services from us and build scalable, secure, and robust finance applications.',
			 'accordion_id' => 'headingTwo',
			 'accordion_class' => 'collapseTwo'
			],
			[
             'class' => 'icon5',
			 'head_title' => 'Retail & Ecommerce',
			 'des' => 'As a top-rated Android app development company, we are proficient in delivering techno-driven solutions to the retail and eCommerce sectors. For the past 16 years, we have been working on different sorts of projects, and that why we ensure to satisfy our clients with our work.',
			 'accordion_id' => 'headingThree',
			 'accordion_class' => 'collapseThree'
			],
			[
             'class' => 'icon6',
			 'head_title' => 'Media & Entertainment',
			 'des' => 'We offer leading media & entertainment app development services all over the globe to help the media & entertainment industry create a robust application for the Android platform. Our Android app developers have an in-depth knowledge of the industry; this is why they invariably win their clients hearts.',
			 'accordion_id' => 'headingFour',
			 'accordion_class' => 'collapseFour'
			],
			[
             'class' => 'icon7',
			 'head_title' => 'Education & E-Learning',
			 'des' => 'Being one of the best software companies in India, we serve both education institutes & education industry experts with the best in class education and eLearning solutions that help them to grow.',
			 'accordion_id' => 'headingFive',
			 'accordion_class' => 'collapseFive'
			],
			[
             'class' => 'icon8',
			 'head_title' => 'ISVs & product Firms',
			 'des' => 'We have served various companies related to the ISVs & Product sector in creating a leading Android applications. As a foremost software services provider, we deliver high-performing, scalable, secure applications.',
			 'accordion_id' => 'headingSix',
			 'accordion_class' => 'collapseSix'
			],

];
$block_chain = [
               'heading' => 'Explore Our Industry-Specific Expertise In WordPress',
			   'intro' => 'Our WordPress developers are comprehensively focused on developing the leading applications for diverse industry verticals. Here view the list of diverse industry verticals to whom we provide the top WordPress app development solutions.',
			   'column' => $columns,
			   'list_data' => $listdata,
			   'bg_class' => 'bg-green',

];
echo get_template_html('blockchain-developer', $block_chain);
?>

<!--- section blockchain-develope end --->



<!--- section choosearea start --->
<?php
$listdata = [
"Ease Of Use",
'Attractive Design Options',
'Multiple Theme Options',
'Clean & Simple API',
'Massive Community Support',
'Search Engine Friendly',
'Flexible and Adaptable',
'High Loading Speed',
"Solid Security Assurance",
'Multilingual Feature Supported'         
];
$bottomdata = [
              'class' => 'icon1',
              'b_heading' => 'Do You Know?',
			  'b_intro' => 'WordPress powers 35% of the web.',
			  'btn_text' => 'Hire Wordpress Developer',
			  'link' => '#',
			  'btn_class' => 'contact',
];
$choose_area = [
               'heading' => 'Wondering If WordPress Is The Right Choice? Sure It Is!',
			   'intro' => "WordPress is by far the most popular open source content management system (CMS), used by approximately 75 million websites. WordPress is free to install, deploy, and update. Thousands of plugins and templates drive a flexible and simple interface, reducing development costs and implementation time. Here are the advantages of WordPress",
			   'image' => SITE_URL.'/images/wordpress-techno.webp',
			   'bottom_sec' => true,
			   'listdata' => $listdata,
			   'bottom_data' => $bottomdata,
			   'bg_class' => 'bg-white',
];
echo get_template_html('choose-area', $choose_area);
?>
<!--- section choosearea end --->

<!--- section comparativeRow start --->
<section class="comparativeRow bg-green l_py s_py">
	<div class="container">
		<div class="row">
			<div class="col-md-12 headingRow text-center">
				<h1>Comparative Analysis : In-House, Freelancers Or Buildrr</h1>
				<p class="mt-5">We offer a team of highly skilled Android app developers accompanied by a testing professional for a quality audit, a project manager for streamlined execution, and a variety of in-house experts to provide guidance. This entire onboarding event is done through a quick, easy and transparent hiring process.</p>
			</div>

	<section class="cd-products-comparison-table mt-5">
		<div class="cd-products-table">
			<div class="features">
				<div class="top-info">
				<h3 class="mt-2">Factors</h3></div>
				<ul class="cd-features-list">
					<li>Time to get right developers</li>
					<li>Time to start a project</li>
					<li>Recurring cost of training & benefits</li>
					<li>Time to scale size of team</li>
					<li>Pricing (weekly average)</li>
					<li>Project failure risk</li>
					<li>Developers backed by a delivery team</li>
					<li>Dedicated resources</li>
					<li>Quality guarantee</li>
					<li>Tools and professional environment</li>
				</ul>
			</div> <!-- .features -->
			
			<div class="cd-products-wrapper">
				<ul class="cd-products-columns">
					<li class="product">
						<div class="top-info text-white">
							<h3>Buildrr</h3>
						</div> <!-- .top-info -->

						<ul class="cd-features-list">
							<li>1 day - 2 weeks</li>
							<li class="rate"><span>1 day - 2 weeks</span></li>
							<li>0</li>
							<li>48 hours - 1 week</li>
							<li>1.5 X</li>
							<li>Extremely low, we have 98% success ratio</li>
							<li>Yes</li>
							<li>Yes</li>
							<li>Yes</li>
							<li>Yes</li>
						</ul>
					</li> <!-- .product -->

					<li class="product">
						<div class="top-info">
							<h3>In - House</h3>
						</div> <!-- .top-info -->

						<ul class="cd-features-list">
							<li>4 - 12 weeks</li>
							<li class="rate"><span>2 - 10 weeks</span></li>
							<li>$10,000 -$30,000</li>
							<li>4 - 16 weeks</li>
							<li>2X</li>
							<li>Low</li>
							<li>Some</li>
							<li></li>
							<li>High</li>
							<li>High</li>
						</ul>
					</li> <!-- .product -->

					<li class="product">
						<div class="top-info br">
							<h3>Freelance</h3>
						</div> <!-- .top-info -->

						<ul class="cd-features-list border-end">
							<li>1 - 12 weeks</li>
							<li class="rate"><span>1 - 10 weeks</span></li>
							<li>0</li>
							<li>1 - 12 weeks</li>
							<li>1X</li>
							<li>Very High</li>
							<li>No</li>
							<li>Some</li>
							<li>High</li>
							<li>Uncertain</li>
						</ul>
					</li> <!-- .product -->
				</ul> <!-- .cd-products-columns -->
			</div> <!-- .cd-products-wrapper -->
			
			<ul class="cd-table-navigation">
				<li><a href="#" class="prev inactive">Prev</a></li>
				<li><a href="#" class="next">Next</a></li>
			</ul>
		</div> <!-- .cd-products-table -->
	</section> <!-- .cd-products-comparison-table -->
	</div>
</section>
<!--- section comparativeRow end --->

<!--- section easy steps start --->
<?php
$steps = [
    [
      'numbers' => '01',
	  'image' => SITE_URL.'/images/step-1.webp',
	  'title' => 'Send Us Your Detailed Project Requirements'
	],
    [
      'numbers' => '02',
	  'image' => SITE_URL.'/images/step-2.webp',
	  'title' => 'Select Candidates For Screening Process'
	],
	[
      'numbers' => '03',
	  'image' => SITE_URL.'/images/step-3.webp',
	  'title' => 'Take Interview Of Selected Candidates'
	],
	[
      'numbers' => '04',
	  'image' => SITE_URL.'/images/step-4.webp',
	  'title' => 'Initiate Project On-Boarding & Assign Tasks'
	],

];

$easy_steps = [
     'heading' => 'Hire WordPress Developers In 4 Easy Steps',
     'intro'  => 'Below are the simple steps we follow when you decide to hire our dedicated WordPress developers who are adept at delivering dynamic, custom, and scalable solutions.',
	 'steps' => $steps,
	 'bg_class' => 'bg-white',
];
echo get_template_html('easy-steps', $easy_steps);
?>
<!--- section easy steps  end --->

<!--- section hiringRow start --->
<?php
$post_data = [
    [
	    'class' => 'icon1',
        'title' => 'Dedicated Team',
		'desc' => "If you represent a company with a project that needs dedicated attention, ask about dedicated teams. It's a pay-as-you-go monthly rolling contract.",
		'listdata' => ['No hidden costs', '160 Hours of part & full time', 'Monthly billing', 'Pay only for measurable work'],
	],
    [
        'class' => 'icon2',
        'title' => 'Controlled Agile',
		'desc' => 'The controlled agile engagement model suits best for those who have a limited budget and still requires some flexibility against the changing conditions.',
		'listdata' => ['Optimal flexibility', 'Agile Team', 'Small projects', 'Complete control over budget'],
	],
	[
	    'class' => 'icon3',
        'title' => 'Time & Material',
		'desc' => "If you represent a company with a project that needs dedicated attention, ask about dedicated teams. It's a pay-as-you-go monthly rolling contract.",
		'listdata' => ['No hidden costs', 'Requirement based working hours', 'Monthly billing', 'Pay only for measurable work'],
	],
];
$hiring_section = [
        'post_title' => 'Hiring WordPress Developers With BuildrrTM = Flexibility',
        'intro' => 'We offer flexible engagement options including monthly, part time, full time hiring for you to choose from.',
		'btn_text' => 'Contact Us Now',
		'post_data' => $post_data,
	    'bg_class' => 'bg-green',
        'btn_class' => 'btn-more',
];

echo get_template_html('hiring-models', $hiring_section); 
?>
<!--- section hiringRow end --->

<!--- section case-section start --->
<?php 
$slides = [
	[
		'image' => SITE_URL.'/images/case-studies-ecommerce-platform-for-home-equipment.webp',
		'heading' => 'eCommerce Platform For Home Equipment',
		'content' => 'The web application is an e-commerce platform focused on providing support for the House Construction industry in the Middle East. The application is available in two languages- Arabic and English to cover large regions. The platform allows the user to analyze & view listed products as a guest user or registered user and make product purchases based on their requirement. End-User can avail discounts by entering coupon codes and place the order request ..',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-ecommerce-portal-for-fabrication-machines.webp',
		'heading' => 'eCommerce Portal For Fabrication Machines',
		'content' => 'It is an online platform that caters to manufacturers in the mechanical industry. It aims to do so through an eCommerce platform wherein various manufacturers can buy and sell all types of products required in manufacturing processes. Apart from eCommerce,It also doubles up as a discussion forum, blogging space and a platform to avail manufacturing solutions online.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],								
	[
		'image' => SITE_URL.'/images/hr-management-portal-case2.webp',
		'heading' => 'Hr Management Portal',
		'content' => 'The portal provides flexibility for employees to access HR information that you need to make informed decisions at any time. Admin, Manager, Company, Super Admin, & Employee are some of the important user-roles in the portal. You can easily manage your HR operations effectively and efficiently.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-ecommarce-web-solution.webp',
		'heading' => 'eCommerce Web Solution',
		'content' => 'The e-commerce web solution fulfills the needs of startups, small businesses & existing merchants worldwide. The app understands the constantly changing online marketplace. Therefore, we deliver industry-leading solutions for our clients.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-dining-app-using-xamarin.webp',
		'heading' => 'Dining App Using Xamarin',
		'content' => 'The application helps you in searching a good restaurant and you can also reserve your seat through this without any prior payments as it is 100% free dining app. It offers time-based discounts of up to 50% off, every day at all of its 1000+ restaurants. It is totally free and simple to use. Search and reserve your favorite restaurant at just one click.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-marketing-campaign-system.webp',
		'heading' => 'Marketing Campaign System',
		'content' => 'Our client is a global player in the market of Sales and Marketing. His aim and vision is to develop product and service in Microsoft Dynamics CRM 4.0v and 2011 which would help their managers and executives to understand business better and work on it.</br></br>He had discussion with many software vendors before approaching us. But, they were not able to find out that no one was sure about this integration. The main challenge for implementation of Microsoft CRM with Laravel PHP development framework. Despite all facts our CRM team took this uphill task to their account and the best part is they delivered it to the client within the deadline.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
];
$case_section = [
	'heading' => 'Success Stories Of Our WordPress Developers',
	'intro' => 'Checkout some of the best projects our offshore WordPress programmers have handled so far...',
	'slides' => $slides,
    'bg_class' => 'bg-white',
];
echo get_template_html('case-section', $case_section); ?>
<!--- section case-section end --->

<!--- section faqRow start --->
<?php
$columns = [
	[
		'heading' => 'How to hire the best WordPress developers in India?',
		'content' => 'If you want to hire the best WordPress developers in India, then you should choose a software company with:</br></br>1) At least 5-10 years of industry experience
</br>2) Have build at least 100+ apps
</br>3) A team of more than 20+ WordPress developers
</br>4) Clients in more than ten countries
</br>5) Transparent selection process</br></br>Buildrr is one such software company in Indian with 16+ years of experience. We have delivered more than 4200 projects to 2500+ global clients. Our team strength is 450+, and we have served clients in more than 40 countries.</br></br>Moreover, we have a client retention rate of 97% and excel in most of the open-source technologies. When it comes to the selection process and project on-boarding, we allow you to take as many interviews as you want and also offer you flexible engagement models such as hourly, full-time and fixed cost.</br></br>Moreover, we have a client retention rate of 97% and excel in most of the open-source technologies. When it comes to the selection process and project on-boarding, we allow you to take as many interviews as you want and also offer you flexible engagement models such as hourly, full-time and fixed cost.'
	],
	[
		'heading' => 'Why should I hire Indian WordPress developers?',
		'content' => "In addition to delivering robust software solutions in a timely manner, Indian WordPress developers bring a number of benefits such as</br></br>Pool of expert developers</br>Budget friendly development</br>Best-in-class project management</br>Time zone compatibility"
	],
	[
		'heading' => 'What does WordPress developer do?',
		'content' => 'WordPress developers design and develop websites for companies deploying the WordPress creation tool. They work on both front-end and back-end development, including the implementation of plugins and themes. They create user-friendly and attractive websites based on client specifications.'
	]
];
$faqs_items= [
	[

	'heading' => 'Do you also work on Magento projects?',
	'content' => "Yes, we do. We have Magento developers for hire who are experienced in eCommerce web development.",
	],
	[
	'heading' => "I am not very tech-savvy, will I still be able to work with your team?",
	'content' => "Absolutely, you can. Our project managers help you understand technical challenges and make it easier for you to manage. Choosing us gives you peace of mind, and we are here to help you fill the technology gap on your behalf.",
	],
	[
	'heading' => 'Why should you use WordPress?',
	'content' => "WordPress is designed in a way that makes it SEO friendly as you can download WordPress to enhance this function and improve your domain's optimization. The main reason being, the platform is written using simple compliance and high standard clean codes. When you hire offshore WordPress developers, you don’t have to worry about the initial setup and related development costs.",
	],
	[
	'heading' => "How much skilled and experienced are your remote WordPress developers?",
	'content' => 'We employ some of the top remote WordPress programmers and have an expert team of 450+ developers with average experience of 6+ years. Hence, when you rent WordPress coders from us, we make sure that you get the best fit for your project.',
	],
	[
	'heading' => 'How will I communicate with the remote Wordpress developers?',
	'content' => "We work with the top WordPress programmers in India and we have our project management system where you will be able to monitor daily progress. You can have your separate login id and p/w to use our PMS. You can create the task, assign work and take the follow up with your dedicated WordPress developers through our systems. Our developers would also be available via IM’s (Skype, Gtalk, yahoo, etc), apart from mails and voice calls so that you can communicate faster.",
	],
	[
	'heading' => 'How do you protect my intellectual property?',
	'content' => 'Before starting the project we sign an NDA and adhere it to the end so that your idea and project details are kept confidential. Moreover, we respect your privacy and use encrypted messaging tools such as Skype, Gtalk, etc.',
	],
	[
	'heading' => 'Will I be having a full time remote WordPress developer?',
	'content' => 'Yes, when you hire WordPress developers online, you will have your own dedicated developer(s), who will work 160 hours in one month for your project. You can utilize our ready to use IT infrastructure to ensure elimination of work interruption.',
	],
    [
	'heading' => 'What is the cost of building a WordPress application?',
	'content' => 'That again depends on the features and complexity of the application. Also, the experience level of the developer defines your cost. You may talk to us about the project details and we can certainly give you an estimate.',
	],
	[
	'heading' => 'Why should you opt for WordPress Developers?',
	'content' => 'Here are the reasons for which you should opt for WordPress</br>- Fast development</br>- Large and active developer community</br>- High level of customization</br>- Creating authorization and authentication systems</br>- Make faster and engaging apps',
	],
	
];
$faqsRow = [
	'heading' => 'Frequently Asked Questions',
	'intro' => 'Here are answers to some questions related to hiring WordPress developers or the WordPress technology which are frequently asked by our clients.',
	'columns'=> $columns,
	'faqs_items' => $faqs_items,
    'bg_class' => 'bg-green',
];
echo get_template_html('faqs-row', $faqsRow);?>
<!--- section faqRow end --->
<!--- section awardsRow start --->
<?php
$slides = ['icon1', 'icon2', 'icon3','icon4', 'icon5', 'icon6'];
$images = ['icon1', 'icon2', 'icon3', 'icon4', 'icon5', 'icon6', 'icon7', 'icon8', 'icon9', 'icon10', 'icon11', 'icon12', 'icon13', 'icon14', 'icon15', 'icon16', 'icon17', 'icon18', 'icon19'];
$awards = [
          'heading' => 'Partners, Awards, Accolades, Recognition Gained By <span>Buildrr</span>',
		  'items' => ['icon1','icon2', 'icon3', 'icon4', 'icon5', 'icon6'],
		  'images' => $images,
		  'slides' => $slides,
		  'bg_class' => 'bg-white',
];
echo get_template_html('award-row-new', $awards);?>
<!--- section awardsRow end --->

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